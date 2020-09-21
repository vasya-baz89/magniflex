<?php
header ("Last-Modified: " . date("D, d M Y H:i:s", time()) . " GMT");
session_name('sf_magniflex');
session_start();
define('sf_magniflex',true);

include_once('config.php');
if($debug) error_reporting(E_ALL);

$domain = 'https://'.$_SERVER['SERVER_NAME'];
$cur_url = $_SERVER['REQUEST_URI'];

//скрытая акция
$hide_discount_redirect_script = '<script>location.href = "'.$domain.'/discounts/hide-discount/";</script>';
if(!empty($_GET['red'])) $hide_discount_redirect_script = '<script>location.href = "'.$domain.'/'.$_GET['red'].'";</script>';
if(stripos($cur_url, $hide_discount_utm) !== FALSE){
	$_SESSION['hide_discount'] = true;
	$_SESSION['hd_email'] = $_SESSION['hd_phone'] = $_SESSION['hd_name'] = '';
	
	$dirs = array($_SERVER['DOCUMENT_ROOT'].'/tools/txt/json_orders', $_SERVER['DOCUMENT_ROOT'].'/tools/txt/json_subsribe');
	foreach($dirs as $dir){
		$files = scandir($dir);
		
		foreach($files as $file){
			if(strpos($file,'.') !== FALSE) continue;
			$arr = file_get_contents($dir.'/'.$file);
			$arr = json_decode($arr, true);
			
			if(!isset($arr['email'])) $arr['email'] = '';
			if(!isset($arr['phone'])) $arr['phone'] = '';
			if(!isset($arr['name'])) $arr['name'] = '';
			
			$arr['email'] = trim($arr['email']);
			$arr['phone'] = trim($arr['phone']);
			$arr['name'] = mb_convert_case(mb_strtolower(trim($arr['name'])),MB_CASE_TITLE);
			
			$arr_email = $arr['email'];
			$arr_pr_count = null;
			$arr_phone = preg_replace('/\\D/', '', $arr['phone'], -1, $arr_pr_count);	
			
			if(($arr_email && stripos($cur_url, 'utm_content='.$arr_email) !== FALSE) ||
			($arr_phone && stripos($cur_url, 'utm_content='.$arr_phone) !== FALSE) || ($arr['phone'] && stripos($cur_url, 'utm_content='.$arr['phone']) !== FALSE)){
				$_SESSION['hd_email'] = $arr_email;
				$_SESSION['hd_phone'] = $arr_phone;
				$_SESSION['hd_name'] = $arr['name'];
				break;
			}
		}
	}
	unset($dir, $files, $file, $arr, $arr_email, $arr_phone, $arr_pr_count);
}

include_once('sf_redirect.php');
include_once('redirects.php');
include_once('functions.php');	//��������������� �������
include_once('data/text.php');

$error_404 = false;
$url_arr = parse_url($cur_url);
$template_page = false;

$thispage = $_SERVER['REQUEST_URI'];

function cl_print_r ($var, $label = '')
{
	$str = json_encode(print_r ($var, true));
	echo "<script>console.group('".$label."');console.log('".$str."');console.groupEnd();</script>";
}
function cl_var_dump ($var, $label = '')
{
	ob_start();
	var_dump($var);
	$result = json_encode(ob_get_clean());
	echo "<script>console.group('".$label."');console.log('".$result."');console.groupEnd();</script>";
}

/* ��������� */
if($url_arr['path'][strlen($url_arr['path'])-1] != '/'){
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: '.$domain.$url_arr['path'].'/');
	exit;
}

include_once('data/products.php');
include_once('data/shops.php');

if(strpos($url_arr['path'], '/ajax/') === 0){
	$ajax = true;
	$url_arr['path'] = str_replace('/ajax/','/',$url_arr['path']);
}

if($url_arr['path'] == '/news/rss/'){
	include_once('data/news.php');
	$template_page = 'rss';
	$no_ajax_meta = true;
	$ajax = true;
	header("Content-Type: text/xml; charset=utf-8");
}
else{
	if(strpos($url_arr['path'], '/outlet/') === 0) $url_arr['path'] = '/catalog'.$url_arr['path'];
	if(strpos($url_arr['path'], '/new-news/') === 0){
		include_once('data/news.php');
		if($url_arr['path'] != '/new-news/'){
			$url_address = str_replace(array('/new-news/','/'), '', $url_arr['path']);
			foreach($news as $el){
				if(isset($el['address'])){
					if($el['address'] == $url_address){
						$page = $el;
						$template_page = 'new-news';
					}
				}
			}
			if(!$template_page) $error_404 = true;
		}
		else $template_page = 'new-news';
	}
	else if(strpos($url_arr['path'], '/news/') === 0){
		include_once('data/news.php');
		if($url_arr['path'] != '/news/'){
			$url_address = str_replace(array('/news/','/'), '', $url_arr['path']);
			foreach($news as $el){
				if(isset($el['address'])){
					if($el['address'] == $url_address){
						$page = $el;
						$template_page = 'news';
					}
				}
			}
			if(!$template_page) $error_404 = true;
		}
		else $template_page = 'news';
	}
	else if($url_arr['path'] == '/'){
		if(isset($news)) unset($news);
		include_once('data/pages.php');
		$template_page = 'page';
		foreach($pages as $el) { if(!$el['address']){ $page = $el; break; } }
	}
	else if(strpos($url_arr['path'], '/catalog/') === 0 && ($url_arr['path'] != '/catalog/')){
		if(isset($pages)) unset($pages);
		include_once('data/categories.php');
		foreach($categories as $el) {
			if($el['parent_address']){
				$tmp_url = '/catalog/'.$el['parent_address'].'/';
				$tmp_url .= $el['address'].'/';
				if($url_arr['path'] == $tmp_url){
					$page = $el;
					$template_page = 'category';
					$get_breadcrumbs = $get_breadcrumbs_category;
				}
				else if(isset($el['sizes'])){
					foreach($el['sizes'] as $cat_size){
						if($url_arr['path'] == $tmp_url.$cat_size['address'].'/'){
							$page = $el;
							$page['cat_size'] = $cat_size['address'];
							if($cat_size['title']) $page['title'] = $cat_size['title'];
							if($cat_size['description']) $page['description'] = $cat_size['description'];
							if($cat_size['keywords']) $page['keywords'] = $cat_size['keywords'];
							if($cat_size['text']) $page['text'] = $cat_size['text'];
							if($cat_size['text2']) $page['text2'] = $cat_size['text2'];
							$template_page = 'category';
							$get_breadcrumbs = $get_breadcrumbs_category;
						}
					}
				}
			} else {
				$tmp_url = '/catalog/';
				$tmp_url .= $el['address'].'/';
				if($url_arr['path'] == $tmp_url){
					$page = $el;
					$template_page = 'category';
					$get_breadcrumbs = $get_breadcrumbs_category;
				}
				else if(isset($el['sizes'])){
					foreach($el['sizes'] as $cat_size){
						if($url_arr['path'] == $tmp_url.$cat_size['address'].'/'){
							$page = $el;
							$page['cat_size'] = $cat_size['address'];
							if($cat_size['title']) $page['title'] = $cat_size['title'];
							if($cat_size['description']) $page['description'] = $cat_size['description'];
							if($cat_size['keywords']) $page['keywords'] = $cat_size['keywords'];
							if($cat_size['text']) $page['text'] = $cat_size['text'];
							if($cat_size['text2']) $page['text2'] = $cat_size['text2'];
							$template_page = 'category';
							$get_breadcrumbs = $get_breadcrumbs_category;
						}
					}
				}
			}
		}
		if(strpos($url_arr['path'], '/catalog/outlet/') === 0 && $template_page == 'category') $template_page = 'outlet_category';

		if(!$template_page){
			if(strpos($url_arr['path'], '/catalog/outlet/') === 0){
				include_once('data/outlet.php');
				foreach($product_outlet as $el) {
					if(strpos($url_arr['path'], $el['address']) !== FALSE){
						$tmp_url = '/catalog/';

						if($el['parent_address']){
							$tmp_url .= $el['parent_address'].'/';
						} elseif($el['parent_address2']){
							$tmp_url .= $el['parent_address2'].'/';
						}
						$tmp_url .= $el['address'].'/';
						if(strtolower($url_arr['path']) == strtolower($tmp_url)){
							$page = $el;
							include_once('data/products.php');
							foreach($products as $product){
								if($page['product'] == $product['address']){
									$product['outlet_q'] = $page;    									
									$page = $product;	
									if($product['outlet_q']['title']){
										$page['title'] = $product['outlet_q']['title'];
									} else {
										$page['title'] = 'Скидка 30% ' . $page['title'];
									}
									if($product['outlet_q']['keywords']){
										$page['keywords'] = $product['outlet_q']['keywords'];
									}	
									if($product['outlet_q']['description']){
										$page['description'] = $product['outlet_q']['description'];
									}		

									
									break;
								}
							}

							$template_page = 'outlet_product';
							$get_breadcrumbs = $get_breadcrumbs_product;
						}
					}
				}
			}
			else{
				foreach($products as $el) {
					if(strpos($url_arr['path'], $el['address']) !== FALSE){
						$tmp_url = '/catalog/';

						if($el['parent_address']){
							$tmp_url .= $el['parent_address'].'/';
						} elseif($el['parent_address2']){
							$tmp_url .= $el['parent_address2'].'/';
						}
						$tmp_url .= $el['address'].'/';
						if(strtolower($url_arr['path']) == strtolower($tmp_url)){
							$page = $el;
							$template_page = 'product';
							$get_breadcrumbs = $get_breadcrumbs_product;
						}
					}
				}
			}
		}

		if(!$template_page) $error_404 = true;
	}
	else if(strpos($url_arr['path'], '/shops/') === 0 && $url_arr['path'] != '/shops/'){
		include_once('data/cities_shops.php');
		
		$template_page_type = false;
		if($url_arr['path'] == '/shops/russia/'){
			$page = $shop_russia;
			$template_page_type = 'russia';
		}
		
		foreach($cities as $city => $city_data) {
			if($url_arr['path'] == '/shops/russia/'.$city.'/'){
				$page = $city_data;
				$page['cur_city'] = $city; 
				$template_page_type = 'city';
			}
		}
		
		foreach($shops as $shop => $shop_data) {
			if($url_arr['path'] == '/shops/russia/'.$shop_data['city'].'/'.$shop.'/'){
				$page = $shop_data;
				$page['city_name'] = $cities[$shop_data['city']]['name']; 
				$page['cur_shop'] = $shop; 
				$template_page_type = 'shop';
			}
		}
		
		if($template_page_type) $template_page = 'shop';
	}
	else if(strpos($url_arr['path'], '/reviews/') === 0 && $url_arr['path'] != '/reviews/'){
		include_once('data/reviews.php');
		
		foreach($reviews as $review => $review_data) {
			if($url_arr['path'] == '/reviews/magniflex_review_'.$review.'/'){
				$page = $review_data;
				$template_page = 'review';
			}
			foreach($review_data['tags'] as $review_data_tag){
				if($url_arr['path'] == '/reviews/about/'.$review_data_tag.'/'){
					$template_page = 'reviews';
					$review_tag = $review_data_tag;
					$page = array();
					include_once('data/pages.php');
					foreach($pages as $el){
						if($el['address'] == 'reviews'){
							$page = $el;
						}
					}

					foreach($review_tags as $review_tags_el => $review_tags_eldata){
						if($review_tag == $review_tags_el){
							$rte = $review_tags_eldata;
							$page = array_replace($page, $review_tags_eldata);
						}
					}
					break;
				}
			}
		}

		if(count($page) == 0){
			$template_page = 'page';
			include_once('data/pages.php');
			foreach($pages as $el){
				if($el['address'] == 'send-review'){
					$page = $el;
					$page['no_review'] = true;
				}
			}
		}		
	}
	if(!$template_page) {
		include_once('data/pages.php');
		include_once('data/contacts.php');
		foreach($pages as $el) {
			$tmp_url = '/';
			if($el['parent_address']) $tmp_url .= $el['parent_address'].'/';
			$tmp_url .= $el['address'].'/';
			if($url_arr['path'] == $tmp_url){
				$page = $el;
				$template_page = 'page';
			}
		}
		foreach($contacts as $ell) {
			$tmp_url = '/';
			if($ell['parent_address']) $tmp_url .= $ell['parent_address'].'/';
			$tmp_url .= $ell['address'].'/';
			if($url_arr['path'] == $tmp_url){
				$page = $ell;
				$template_page = 'page';
			}
		}
		if(!$template_page) $error_404 = true;
	}
}

/* ��������� end */

// ��������� �� ������ �� ��������
if(isset($page['hide'])){ if($page['hide']){ $error_404 = true; }}

/* ��������� ������� */
if(!$template_page || $error_404){
	header("HTTP/1.1 404 Not Found");
    $page['title'] = 'Ошибка 404: Страница сайта magniflex.ru не найдена или больше не существует';
}
if(!$ajax) include_once('template/header.php');
if(!$template_page || $error_404){
	include_once('error_404.php');
}
else if($template_page){
	include_once('template/'.$template_page.'.php');
	if($ajax && !isset($no_ajax_meta)){
		echo('<input type="hidden" id="load_title" value="'.$page['title'].'" />');
	}
}


?>

<?php if(stripos($cur_url, $hide_discount_utm) !== FALSE){ echo($hide_discount_redirect_script); } ?>

<div class="sf_popup" id="another_sz">
	<div class="form_content">
		<div class="fancybox-item fancybox-close sf_close" onclick="hide_popup();"></div>
		В магазине представлены все размеры матрасов, которые есть в наличии в достаточном количестве на складе. В случае, если Вам необходим матрас иного размера — срок доставки из Италии составляет 2-4 недели.<br><br>Точную стоимость и сроки уточните у менеджера по телефону справочной службы:<br><br>+7 (495) 989-11-32
		<form method="POST" id="size-form">
			<p><span>Какой размер матраса вас интересует?</span>
			<input type="text" name="size-1" id="size-1" required="">	</p>
			<p><span>Номер телефона:</span>
			<input type="text" name="phone_1" id="phone_1" required="" >	</p>
			<p class="submit style_border_btn"><input type="submit" value="отправить"></p>
		</form>
	</div>
	
	<script>
	jQuery(document).ready(function(){
	$("#phone_1").mask("+7 (999) 999-99-99");
		$("#size-form").submit(function () {
			alert("Спасибо! Наши специалисты обязательно позвонят Вам!");
			$.ajax({
				type : "post",
				url : "/template/size_form.php",
				data : $("#size-form").serializeArray(),
				dataType : "json",
				success: function (response) {

				}
			});

		});
	});
	</script>
</div>
<div class="sf_popup" id="addcart_success" style="display: none; top: 115.5px;">
	<div class="form_content">
		<div class="title">Товар добавлен в корзину</div>
		<div class="fancybox-item fancybox-close sf_close" onclick="hide_popup();"></div>
		<div class="add_cart_popup">
			<div id="add_cart_popup">
				<img src="" alt="">
				<p>Stile 6, размер: 60x120</p>
				<hr>
				<a href="/cart/">Перейти в корзину</a>
			</div>
		</div>
	</div>
</div>


<div class="sf_popup" id="wait_sk">
	<div class="form_content">
		<div class="fancybox-item fancybox-close sf_close" onclick="hide_popup();"></div>
		Уважаемый Посетитель!<br><br>Вы можете оставить свои контактные данные: телефон или e-mail, а мы будем оповещать Вас о проводимых акциях и спецпредложениях.
		<form id="phone_me_form" class="sf_form" action="/tools/form.php" method="POST" onsubmit="return form_send(this);">
			<input type="hidden" name="n" value="Сообщить о скидке">
			<div class="form_input">
				<span>Ваше имя:</span>
				<input type="text" name="name">
				<div class="clear"></div>
			</div>
			<div class="form_input">
				<span>Номер телефона:</span>
				<input type="text" name="phone" class="phone_mask">
				<div class="clear"></div>
			</div>
			<div class="form_input">
				<span>E-mail:</span>
				<input type="text" name="email">
				<div class="clear"></div>
			</div>
			<div class="form_input">
				<span>Матрасы:</span>
				<input type="checkbox" name="skidka_mat" checked="checked">
				<div class="clear"></div>
			</div>
			<div class="form_input">
				<span>Подушки:</span>
				<input type="checkbox" name="skidka_pod" checked="checked">
				<div class="clear"></div>
			</div>
			<!--<div class="form_input">
				<span>Примечание:</span>
				<textarea maxlength="30" name="comment"></textarea>
				<div class="clear"></div>
			</div>-->
			<div class="form_submit">
				<input type="submit" value="Отправить" class="style_border_btn">
				<div class="clear"></div>
			</div>
		</form>
	</div>
</div>


<div class="sf_popup" id="subscribe_email">
	<div class="form_content">
		<div class="fancybox-item fancybox-close sf_close" onclick="hide_popup();"></div>
		Уважаемый Посетитель!<br><br>Вы можете оставить свой e-mail, а мы будем оповещать Вас о всех новых уцененных  матрасах.
		<form id="subscribe_ama_form" class="sf_form" method="POST">
			<div class="form_input">
				<span>E-mail:</span>
				<input type="text" name="email">
				<div class="clear"></div>
			</div>
			<div class="form_input">
				<span>Желаемый размер матраса:</span>
				<input type="text" name="size">
				<div class="clear"></div>
			</div>
			<div class="form_submit">
				<div class="style_border_btn" id="subscribe_button" style="cursor: pointer;">Отправить</div>
				<div class="clear"></div>
			</div>
		</form>
	</div>
</div>


<div class="sf_popup" id="order_success">
	<div class="form_content">
		<p style="font-size:19.5px; font-weight:bold;">Мы искренне благодарим Вас за покупку! Ваш Номер заказа: <span id="order_n"></span></p>
		<p><b>МЫ ВАМ ПОЗВОНИМ</b><br>
			Специалист службы заботы о Клиентах перезвонит Вам в ближайшее время, чтобы уточнить детали заказа. </p>
			<p>
			<b>СОСТОЯНИЕ ЗАКАЗА</b><br>
			Чтобы получить информацию о текущем состоянии заказа:<br>
			- позвоните по телефону: +7 (495) 507-22-65<br>
			- напишите на info@magniflex.ru<br>
		</p>
	</div>
<p></p>
</div>

<div id="sf_overlay" onclick="hide_popup();"></div>

<?php  
if(!$ajax) include_once('template/footer.php');
?>