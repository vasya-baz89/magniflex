<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

$_tmr_mailretarg = '<script type="text/javascript">var _tmr = _tmr || []; _tmr.push({ type: "itemView", productid: "", pagetype: "category", totalvalue: "", list: "1" });</script>';


$array_of_sizes = [];
$array_of_sizes_filter = [];

foreach($products as $el){
	foreach($el['sizes'] as $size){
		array_push($array_of_sizes_filter, $size[0]);
	}
}

$array_of_sizes_filter = array_unique($array_of_sizes_filter);
echo($b_ama_sizes);

include_once('widgets/left_sidebar.php');
include_once('data/reviews.php');

if(isset($size_sidebar[$page['size_sidebar']])){
	$page['text'] = str_replace('<!--{size_sidebar}-->', $size_sidebar[$page['size_sidebar']], $page['text']);
};
?>


<? foreach($categories as $cat){ ?>		
	<? if($cat['address'] == $page['address'] )  { ?>
		<? if( $cat['background_image']) { ?>
			<div class="ama_visual one">
				<img src="<?=$cat['background_image'] ?>" alt="<?=$cat['background_image'] ?>" class="ama_visual_img">
				<div class="ama_visual_copy">
					<h1 class="ama_visual_copy_title"><?=$cat['collection']; ?></h1>
					<p class="ama_visual_copy_subtitle"><?=$cat['collection_description']; ?></p>
				</div>
			</div>
		<? } else { 
			$imageTop = '';
			switch($cat['parent_address']){
				case 'pillows':
					$imageTop = '/img/visual_guanciali.jpg';
					break;
				case 'mattresses':
					$imageTop = '/img/top-materassi_01.jpg';
					break;
				case 'orthopedic_mattresses':
					$imageTop = '/img/top-materassi_01.jpg';
					break;
				default:
					$imageTop = '/img/top-materassi_01.jpg';
					break;
			}
		?>
			<div class="ama_visual two">
				<img src="<?=$imageTop; ?>" alt="" class="ama_visual_img">
				<div class="ama_visual_copy">
					<h1 class="ama_visual_copy_title"><?=$cat['collection']; ?></h1>
					<p class="ama_visual_copy_subtitle"><?=$cat['collection_description']; ?></p>
				</div>
			</div>
		<? } ?>
	<? } ?>
<? } ?>

<style>
	.neft-price-down {
		margin-top: 0px !important;
	}

</style>

<div id="category">
	<?php
		if(strpos($page['text'], '<!--{product_attr') !== FALSE){
			while(strpos($page['text'], '<!--{product_attr') !== FALSE){
				$attr_pos = strpos($page['text'], '<!--{product_attr');
				$attr_str = '';
				$text_len = strlen($page['text']);

				for($i = $attr_pos; $i < $text_len; $i++){
					$ch = substr($page['text'], $i, 1);
					$attr_str .= $ch;
					if($ch == '>') break;
				}

				$attr = str_replace(array('<!--{','}-->'), '', $attr_str);
				$attr = explode('|',$attr);
				$attr_text = '';
				if(isset($attr[1]) && isset($attr[2])){
					if($attr[2] == 'min_price') $attr_text = format_price(get_product_min_price($attr[1]));
					else if($attr[2] == 'old_min_price') $attr_text = format_price(get_product_min_price_old($attr[1]));
					else $attr_text = get_product_attr($attr[1], $attr[2]);
				}

				$page['text'] = str_replace($attr_str, $attr_text, $page['text']);
			}
		}
	?>
<!--<?php if (
($_SERVER['REQUEST_URI'])=="/catalog/mattresses/"
 || ($_SERVER['REQUEST_URI'])=="/catalog/elitnye-matrasy/"
 || ($_SERVER['REQUEST_URI'])=="/catalog/detskie-ortopedicheskie-matrasy/"
)
{
   echo "<div class='spoiler'>
    <div class='jos'><div class='jos_d'>По уровню жесткости:</div> <span><a href='/catalog/mattresses/mjagkie/'>мягкие</a></span><span><a href='/catalog/mattresses/srednej-zhestkosti/'>средней жесткости</a></span><span><a href='/catalog/mattresses/zhestkie/'>жесткие</a></span>
    </div>
    <div class='jos'><div class='jos_d'>По размерам:</div> <span><a href='/catalog/mattresses/60-120/'>60x120</a></span><span><a href='/catalog/mattresses/70-160/'>70x160</a></span><span><a href='/catalog/mattresses/80-160/'>80x160</a></span><span><a href='/catalog/mattresses/80-180/'>80x180</a></span><span><a href='/catalog/mattresses/80-190/'>80x190</a></span>

        <label class='btn' id='doted' for='spoiler'>...</label>
        <input type='checkbox' id='spoiler' />
        <div class='text'>
<span><a href='/catalog/mattresses/80-200/'>80x200</a></span><span><a href='/catalog/mattresses/90-140/'>90x140</a></span><span><a href='/catalog/mattresses/90-190/'>90x190</a></span><span><a href='/catalog/mattresses/90-200/'>90x200</a></span><span><a href='/catalog/mattresses/100-200/'>100x200</a></span><span><a href='/catalog/mattresses/110-190/'>110x190</a></span><span><a href='/catalog/mattresses/120-190/'>120x190</a></span><span><a href='/catalog/mattresses/120-200/'>120x200</a></span><span><a href='/catalog/mattresses/140-190/'>140x190</a></span><span><a href='/catalog/mattresses/140-200/'>140x200</a></span><span><a href='/catalog/mattresses/150-190/'>150x190</a></span><span><a href='/catalog/mattresses/150-200/'>150x200</a></span><span><a href='/catalog/mattresses/160-190/'>160x190</a></span><span><a href='/catalog/mattresses/160-200/'>160x200</a></span><span><a href='/catalog/mattresses/180-200/'>180x200</a></span><span><a href='/catalog/mattresses/200-200/'>200x200</a></span><span><a href='/catalog/mattresses/200-220/'>200x220</a></span>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
	$('#doted').click(function() {
		$('#doted').hide();
	});
});
</script>
";
}else
{
   echo "";
}
?>-->
<div class="category">
	<?php
		if($page['address'] != 'bases'){
	?>
	<div class="category_slider">
		<div class="category_slider_el">
			<img src="/img/srvimg/cse_1.jpg" class="cse_img" alt="cdse_img">
			<div class="cse_title">ПРОФЕССИОНАЛЬНЫЕ СПОРТСМЕНЫ ВЫБИРАЮТ ОРТОПЕДИЧЕСКИЕ МАТРАСЫ MAGNIFLEX</div>
			<div class="cse_text">Они как никто другой знают, насколько важен правильный сон. Мыщцы и все тело должны расслабится и восстановиться. Только так можно стать Чемпионом.</div>
			<div class="cse_text2"><strong>Magniflex выбирают:</strong><br><br>Джанлуиджи Буффон - легендарный чемпион мира по футболу в составе сборной Италии</div>
		</div>
		<div class="category_slider_el">
		</div>
	</div>

	<?php if($page['address'] == 'mattresses' || $page['parent_address'] == 'orthopedic_mattresses' || $page['parent_address'] == 'mattresses' || $page['address'] == 'detskie-ortopedicheskie-matrasy' || $page['parent_address'] == 'detskie-ortopedicheskie-matrasy'){ ?>
		<p class="ama_visual_copy_subtitle ama_quick_category_title">Вся коллекция</p>
		<ul class="ama_quick_category_links">
			<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/mattresses/"><img src="/img/quik-link/ortopedic_matress.jpg" alt="ортопедические матрасы" /></a> <a href="/catalog/mattresses/">Ортопедические матрасы</a>  </li>
			<li class="ama_quick_link group-link"><a class="quick_link_image" href="/catalog/elitnye-matrasy/"><img src="/img/quik-link/elite_matress.jpg" alt="элитные матрасы"></a>  <a href="/catalog/elitnye-matrasy/">Элитные матрасы</a>  </li>
			<li class="ama_quick_link group-lin-right"><a class="quick_link_image" href="/catalog/mattresses/s-effektom-pamjati-mattresses/"><img src="/img/quik-link/podushki_s_effektom_pamyati.jpg" alt="матрасы с эффектом памяти"></a>  <a href="/catalog/mattresses/s-effektom-pamjati-mattresses/">Матрасы с эффектом памяти</a>  </li>
			<!-- <li class="ama_quick_link"><a class="quick_link_image" href="/catalog/mattresses/divannie-mattresses/"><img src="/img/quik-link/matras_dlya_divana.jpg"/></a>  <a href="/catalog/orthopedic_mattresses/divannie-mattresses/"> Матрас для дивана</a>  </li> -->
			<li class="ama_quick_link"><a class="quick_link_image" href="/catalog/mattresses/zhestkie-mattresses/"><img src="/img/quik-link/firm_matress.jpg" alt="жесткие матрасы"></a>  <a href="/catalog/mattresses/zhestkie-mattresses/">Жесткие матрасы</a>  </li>
			<li class="ama_quick_link"><a class="quick_link_image" href="/catalog/mattresses/soft_mattresses/"><img src="/img/quik-link/soft_matresses.jpg" alt="мягкие матрасы"></a>  <a href="/catalog/mattresses/myahkie-mattresses/">Мягкие матрасы</a>  </li>
			<li class="ama_quick_link"><a class="quick_link_image" href="/catalog/mattresses/dual-reguliruemie-mattresses/"><img src="/img/quik-link/dual_matresses.jpg" alt="матрасы с технологией dual"></a>  <a href="/catalog/mattresses/dual-reguliruemie-mattresses/">Dual</a>  </li>
		</ul>
	<?php } ?>
	<?php if($page['address'] == 'pillows' || $page['parent_address'] == 'pillows') { ?>
		<p class="ama_visual_copy_subtitle ama_quick_category_title">Вся коллекция</p>
		<ul class="ama_quick_category_links">
			<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/pillows/orthopedic_pillows/"><img src="/img/quik-link/ortopedicheskie_podushki.jpg" alt="ортопедические подушки" /></a> <a href="/catalog/pillows/orthopedic_pillows/">Ортопедические подушки</a>  </li>
			<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/pillows/baby-pillows/"><img src="/img/quik-link/pillows_forchildren.jpg"alt="детские подушки" /></a> <a href="/catalog/pillows/baby-pillows/">Детские подушки</a>  </li>
			<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/pillows/gel-pillows/"><img src="/img/quik-link/gelevie_podushki.jpg" alt="подушки с гелем" /></a><a href="/catalog/pillows/gel-pillows/">Гелевые подушки</a>  </li>
			<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/pillows/memory-foam-pillows/"><img src="/img/quik-link/podushki_s_effektom_pamyati.jpg" alt="подушки с эффектом памяти" /></a> <a href="/catalog/pillows/memory-foam-pillows/">Подушки с эффектом памяти</a> </li>
			<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/pillows/s-masagnim-effektom/"><img src="/img/quik-link/poduhaki_s_massagnyv_effektom.jpg" alt="подушки с эффектом массажа" /></a><a href="/catalog/pillows/s-masagnim-effektom/">Подушки с массажным эффектом</a> </li>
			<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/pillows/pillows-with-cooling-effect/"><img src="/img/quik-link/matresses_s_ohlagdaushim.jpg" alt="подушки с эффектом охлаждения" /></a> <a href="/catalog/pillows/pillows-with-cooling-effect/">Подушки с охлаждающим эффектом</a> </li>
		</ul>
	<?php } ?>
	<?php
		if($page['banner']) {
			echo $page['banner'];
		}
	?>

	<?php echo $page['text']; }?>		
		<div class="fixed_block_compare_content compare_fixed_empty">
			<div class="fixed_block_left">
				<div class="fixed_block_img"></div>
				<div class="fixed_block_content">
					<p>В списке сравнения <span class="count-compare-products"></span></p>
				</div>
				
			</div>
			<div class="fixed_block_button">
				<a href="/compare">СРАВНИТЬ</a>
				<a class="clear_compare_local_storage" onclick="clearLocalStorage()">ОЧИСТИТЬ</a>
			</div>
			
		</div>
		
<?php if($_SESSION['hide_discount'] === true && !empty($hide_discount_discount)){ ?>
		<a href="/discounts/hide-discount/" target="_blank" class="a-sale-action-block" style="text-decoration: none;">
			<div class="sale-action-block">
				<div class="sale-img-block">
					<img src="/img/sale0720.jpg" alt="SALE">
				</div>
				<div class="sale-text-block">
					<p class="sale-tit"><?=(($_SESSION['hd_name'])?('Здравствуйте '.$_SESSION['hd_name'].', '):('Внимание'));?> у нас АКЦИЯ!</p>
					<p>В период с 23 по 27 июля проходит закрытая распродажа исключительно для постоянных клиентов Magniflex.</p>					
				</div>
			</div>
		</a>
<?php } ?>
		
		
		<a href="/discounts/discounts-15pr/" target="_blank" class="a-sale-action-block" style="text-decoration: none;">
			<div class="sale-action-block">
				<div class="sale-img-block">
					<img src="/img/action/ocen-sale.jpg" alt="SALE">
				</div>
				<div class="sale-text-block">
					<p class="sale-tit">Внимание у нас АКЦИЯ!</p>
					<p>До 27 сентября проходит акция <nobr>«ОСЕНЬ SALE»</nobr>  — редкая возможность приобрести итальянские <?=(($page['address'] == 'pillows')?'подушки':'матрасы');?> Magniflex со скидкой 15%. Больше скидок не будет.  
						<br><br>
						Успейте купить выгодно: количество товаров по акции ограничено. </p>					
				</div>
			</div>
		</a>
		


		<div class="category_products <?if($page['address'] == 'plaids') echo('products_track'); ?>">
			<div class="containAll">
				<div class="containLoader">
					<div class="circleGroup circle-1"></div>
					<div class="circleGroup circle-2"></div>
					<div class="circleGroup circle-3"></div>
					<div class="circleGroup circle-4"></div>
					<div class="circleGroup circle-5"></div>
					<div class="circleGroup circle-6"></div>
					<div class="circleGroup circle-7"></div>
					<div class="circleGroup circle-8"></div>
					
					<div class="innerText ama_catalog_loader">
						<p>загрузка...</p>
					</div>
				</div>
			</div>	
			<?php
				$child_category = array();
				foreach($categories as $el){
					if($el['parent_address']){
						if($el['parent_address'] == $page['address']){
							$child_category []= $el['address'];
						}
					}
				}
				$index_available_products = 0;
				foreach($products as $key=>$el){
					$prod_other_categories = false;
					if(isset($el['other_categories'])){
						if(is_array($el['other_categories'])){
							if(array_search($el['other_categories'], $child_category) !== FALSE || array_search($page['address'], $el['other_categories']) !== FALSE){
								$prod_other_categories = true;
							}
						}
					}
					$tmp = explode(",", $el['parent_address2']);
					if($tmp){
						for($i=0; $i<count($tmp); $i++)
						{
							$tmp[$i] = trim($tmp[$i]);
						}
						$insubcat = in_array($page['address'], $tmp);
					}
					else {
						$insubcat = false;
					}
					if($page['cat_size']){
						if($el['parent_address'] != 'orthopedic_mattresses' && $page['address'] == 'mattresses' && $page['address'] == 'detskie-ortopedicheskie-matrasy'){
							//continue;	//
						}
					}
					if($el['parent_address'] == $page['address'] || $el['parent_address2'] == $page['address'] || $insubcat || array_search($el['parent_address'], $child_category) !== FALSE || $prod_other_categories){
						$has_price = false;
						$min_price = 0;
						if(htmlspecialchars($_COOKIE["size"]) && $el['parent_address2'] == 'mattresses' && $page['address'] != 'detskie-ortopedicheskie-matrasy'){							
							if($el['sizes'] && is_array($el['sizes'])){
								$size_exist = FALSE;
								foreach($el['sizes'] as $size){
									if($size[0] == htmlspecialchars($_COOKIE["size"])){
										$min_price = $size[1];
										if(is_discount_newprice($el, $size[0])){
											$min_price_new = $el['discount_koef']['prices'][$size[0]];
											if($min_price_new && $min_price_new != $min_price){
												$is_discount = true;
												$min_price_old = $min_price;
												$min_price = $min_price_new;
											}
										}
									}
								}
							}
							
							if($min_price){
								$min_price = format_price($min_price);
								$min_price .= ' <span class="rub_price">P</span>';
								$has_price = true;
							}
							else{
								$is_discount = false;
								$min_price = 'На заказ';
							}
						}
						else{
							if($el['sizes'] && is_array($el['sizes'])){
								
								$min_price = get_product_min_price($el['name']);
								$min_size = $el['sizes'][0][0];
								/*foreach($el['sizes'] as $price){
									if($price[1] < $min_price){
										$min_price = $price[1];
										$min_size = $price[0];
									}
								}*/
							}
							else if(isset($el['price'])){
								$min_price = get_product_min_price($el['name']);
							}
							else{
								$min_price = 0;
							}

							$is_discount = false;
							$min_price_old = get_product_min_price_old($el['name']);
							
							if($min_price_old != $min_price){
								$is_discount = true;
							}

							$min_price_ot = false;
							if($min_price){
								if($min_price < 100000 && $el['sizes']) $min_price_ot = true;
								if($min_price >= 1000){	$min_price = intval(($min_price/1000)).' '.sprintf('%03d',$min_price%1000); }
								$min_price .= ' <span class="rub_price">P</span>';
								$has_price = true;
							}
							else{
								 $min_price = 'Уточнить';
							}

							if(isset($_COOKIE['size'])) {
								if($min_price_ot) $min_price = $min_price;
							} else {
								if($page['address'] == 'plaids') $min_price_ot = false;
								if($min_price_ot) $min_price = '<span class="ot">от</span> '. $min_price;
							}							
						}

						if(isset($_COOKIE['size']) && $el['parent_address2'] == 'mattresses'){	
							$is_discount = false;							
							foreach($el['sizes'] as $size_its){
								if($size_its[0] == $_COOKIE['size']){	
									if(isset($el['discount_koef']) && isset($el['discount_koef']['prices'])){
										// if(strtotime($el['discount_koef']['date_start']) < time() || strtotime($el['discount_koef']['date_end'])+24*3600 > time()){
											foreach($el['discount_koef']['prices'] as $price){
												if($price[0] == $size_its[0]){													
													$is_discount = true;
													$min_price = $size_its[1];
													$min_price_old = $size_its[1];																								
												}
											}
										// }	
									} elseif (isset($el['discount_koef']) && !isset($el['discount_koef']['prices']) && $el['discount_koef']['price_koef']){
										if($size_its[1] * (1 - $el['discount_koef']['price_koef']) < $size_its[1]){											
											if(is_discount_koef($el, false)){
												$is_discount = true;
												$min_price = format_price($size_its[1] * (1 - $el['discount_koef']['price_koef']));
												$min_price .= ' <span class="rub_price">P</span>';
												$min_price_old = $size_its[1];
											}																				
										}
										
									}
								}
							}		
						}	

					    $categories_filter=implode(' ',$el['other_categories']);
						$tempArr=explode(' ',$el['name'],2);
						$class_catalog_height = '';
						if($el['parent_address'] == 'plaids'){
							$class_catalog_height = 'tracks-height';
						} elseif ($el['parent_address'] == 'beds') {
							$class_catalog_height = 'beds-height';
						} elseif ($el['parent_address'] == 'ortopedicheskie-reshetky') {
							$class_catalog_height = 'bases-height';
						} elseif($el['parent_address2'] == 'pillows'){
							$class_catalog_height = 'pillows-height';
						} elseif($el['parent_address2'] == 'mattress-covers'){
							$class_catalog_height = 'mattress-covers-height';
						} else {
							$class_catalog_height = 'mattresses-height';
						}

						?>
						<? if($key % 11 == 0): ?>
							<!-- <?echo($key);?>-->
						<?endif;?>

						<div class="category_product <?=$class_catalog_height;?>" <? if($min_price != 'На заказ') echo('data-available="true"'); ?>     <? if($el['parent_address'] == 'detskie-ortopedicheskie-matrasy') echo('data-children="true"'); ?>  style="display: none;" data-id="<?=$key;?>" data-price='<?
							foreach($el['sizes'] as $size){
								if($el['parent_address'] == 'detskie-ortopedicheskie-matrasy'){
									if($page['address'] == 'detskie-ortopedicheskie-matrasy'){
										array_push($array_of_sizes, $size[0]);
									}
								} else {
									array_push($array_of_sizes, $size[0]);
								}
							}
							$array_of_sizes = array_unique($array_of_sizes);
							$array_of_sizes = array_diff($array_of_sizes, array('60x120'));
							$array_of_sizes = array_diff($array_of_sizes, array('70x140'));
							$array_of_sizes = array_diff($array_of_sizes, array('80x160'));

							$price_this =  preg_replace('/\s/', '', $min_price);
							$price_this = str_replace('<span class="rub_price">P</span>', '', $price_this);
							$price_this = str_replace('от', '', $price_this);
							echo $price_this;
						?>'>
							<div class="ama_product_block">
								<?php if($el['parent_address2'] == 'mattresses') { ?>     
									<div class="compare-button" data-name="<?=$el['name'];?>" data-image="<?=$el['small_img'];?>"> 								
											<span >Сравнить</span>
											<img class="compare_img" src="/img/compare.png" alt="">								
									</div>
									
								<?php } ?>							
								<?php if($el['parent_address2'] == 'mattresses' && htmlspecialchars($_COOKIE["size"])){ 
									if (in_array(htmlspecialchars($_COOKIE["size"]), $array_of_sizes)){
										$size_link = '?size='.htmlspecialchars($_COOKIE["size"]);
									}
								}?>
								<div class="<?=$categories_filter . ' ' . $el['address'] . ' ' . $el['parent_address'];?>" style="display: none;"></div>

							<a href="<?=('/catalog/'.$el['parent_address'].'/'.$el['address'].'/'.$size_link);?>" class="category_product_img" title="<?=$el['name'];?>">
								<?php if($el['parent_address'] == 'plaids' || $el['parent_address2'] == 'mattresses' || $el['parent_address2'] == 'pillows' || $el['manufactur'] == 'Италия'){ ?>
									<img class="vategMadeItaly" src="/img/made_in_italy.png" alt="Сделано в Италии">
<?php if($_SESSION['hide_discount'] === true && !empty($hide_discount_discount) && $el['discount_koef']['price_koef'] > 0 && $el['discount_koef']['price_koef'] < 1){ ?>
									<div class="abs-sale" style="">Скидка <?=($el['discount_koef']['price_koef']*100);?>% до 27 июля</div>
<?php } ?>
									<?php if($is_discount) { ?>
									<div class="abs-sale" style="">Скидка 15% до 27 сентября</div>
									<?php } ?>
									<? if($el['banner_category']) { ?>
										<!-- <div class="black-friday12">
											<img src="<? echo($el['banner_category']); ?>" alt="friay">
										</div> -->
									<? } ?>
								<? }?>
								<?php if($el['parent_address'] == 'ortopedicheskie-reshetky'){ ?>
									<img class="vategMadeItaly" src="/img/made_in_russia.jpg" alt="Сделано в России">
								<? }?>								
								<div class="detail1">								
									<div class="detail1_block">
										<span>
										Узнать больше
										</span>
									</div>
								</div>
								<?
									if($el['new_desc']){
										echo ('
											<div class="ama_desc_beds new_ama_desc">'. $el['new_desc'] .'</div>
										');
									}
								?>
								<img src="<?=$el['small_img'];?>" alt="<?=$el['small_img_alt'];?>" />
								<?php
									$specialoffer_label = '';
									if(isset($el['specialoffer_label'])){;;;;
										if(isset($el['specialoffer_label']['all'])) $specialoffer_label = $el['specialoffer_label']['all'];
										if(isset($el['specialoffer_label']['category'])) $specialoffer_label = $el['specialoffer_label']['category'];
									}
									if($specialoffer_label) { ?>
									<div class="specialoffer_label <?=$specialoffer_label;?>"></div>
								<?php } ?>
							</a>
							<?php if(isset($min_size)){ ?>
							<input type="hidden" name="min_size" value="<?=$min_size;?>"/>
							<?php } ?>
							<?php if($el['parent_address2'] == 'mattresses' && htmlspecialchars($_COOKIE["size"])){ ?>
							<input type="hidden" name="has_price" value="<?=intval($has_price);?>"/>
							<?php }

							?>
							<span class="ama_product_type"><?=$el['span_title']; ?></span>
							<a href="<?=('/catalog/'.$el['parent_address'].'/'.$el['address'].'/');?>" class="category_product_name" title="<?=$el['name'];?>"><?=$el['name'];?></a>							
							<!-- <span class="catalog-review"><svg viewBox="0 0 15 12" id="icon-review">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M4.67775 1.43945C2.89882 1.43945 1.45159 2.87459 1.45159 4.63864C1.45159 6.18461 2.56278 7.50891 4.09348 7.78528L4.68936 7.89324V9.59179L7.98374 7.8371H10.3223C12.1012 7.8371 13.5484 6.40197 13.5484 4.63864C13.5484 2.87459 12.1012 1.43945 10.3223 1.43945H4.67775ZM3.23777 12V9.05344C1.32966 8.44455 0 6.67474 0 4.63864C0 2.08073 2.09827 0 4.67775 0H10.3223C12.9017 0 15 2.08073 15 4.63864C15 7.19583 12.9017 9.27656 10.3223 9.27656H8.34882L3.23777 12Z"></path>
								</svg> <a href="/send-review" target="_blank">Оставить отзыв </a>
							</span> -->
							<!-- <a class="catalog-review-second">
								<? 
									$rev_average = 0;
									$rev_sum = 0;
									$rev_count = 0;
									foreach($reviews as $review){
										if(in_array($el['address'], $review['tags'])){		
											$rev_count++;
											$rev_sum += $review['rate'];
										}
									}									
									$rev_average = round($rev_sum / $rev_count, 1);									
									if($rev_average == 5){
										$rev_average = '5.0';
									}								
								?>
								<? if($rev_count > 0){?>								
									<span class="catalog-review-left">		
										<?
											for($i = 1; $i <= 5; $i++){
												if($i <= $rev_average){
													echo('<img class="star_catalog"  src="/img/product/star_active.svg" alt="">');
												} else {
													echo('<img class="star_catalog"  src="/img/product/star_grey.svg" alt="">');
												}
											}
										?>							
									</span>
									<span class="catalog-review-right"><?=$rev_count;?> отзывов</span>
								<? } ?>
							</a> -->
							
							<div class="small_desc">
								<div class="ama_product_desc">
								<?php
									$mattresses_attr_arr = array('ВЫСОТА', 'ЧЕХОЛ', 'ЖЕСТКОСТЬ');
									$pillows_attr_arr = array('ОСНОВА', 'ЧЕХОЛ', 'РАЗМЕР');
									$bases_attr_arr = array('МАТЕРИАЛ', 'СТАНДАРТНАЯ ВЫСОТА', 'МАКСИМАЛЬНЫЙ ВЕС', 'ГАРАНТИЯ');
									$tracks_attr_arr = array('СОСТАВ', 'РАЗМЕР', 'ЦВЕТ', 'РИСУНОК');
									$beds_attr_arr = array('КАТЕГОРИЯ ТКАНИ', 'МАТЕРИАЛ', 'Производитель');
									$namatr_attr_arr = array('МАТЕРИАЛ', 'ВЫСОТА БОРТИКА');
									$beds_attr_values = array('на выбор', 'ЛДСП или МДФ', 'OrthoSleep (Россия)');
									switch(true) {
										case stristr($el['parent_address'], 'toppers'):
										case stristr($el['parent_address'], 'mattresses'):
										case stristr($el['legend'], 'mattresses'):
										case stristr($el['parent_address'], 'detskie-ortopedicheskie-matrasy'):
										case stristr($el['parent_address'], 'elitnye'):
										case stristr($el['address'], 'collectio'):
										case stristr($el['parent_address'], 'collectio'):
											$attr_array = $mattresses_attr_arr;
											break;
										case strstr($page['parent_address'], 'pillows'):
										case stristr($el['legend'], 'pillows'):
										case strstr($page['address'], 'pillows'):
											$attr_array = $pillows_attr_arr;
											break;
										case  strstr($page['address'], 'plaids'):
											$attr_array = $tracks_attr_arr;
											break;
										case  strstr($page['address'], 'namatras'):
											$attr_array = $namatr_attr_arr;
											break;
										case  strstr($page['address'], 'bases'):
											$attr_array = $bases_attr_arr;
											break;	
										case  strstr($page['address'], 'beds'):
											$attr_array = $beds_attr_arr;
											break;
									}
									if($page['address'] == 'beds'){
										for ($i = 1; $i < sizeof($attr_array) + 1;  $i++){
											echo ('
												<div>
													<p  class="spec-left">'. $attr_array[$i - 1] .'</p>
													<p  class="spec-right">'. $beds_attr_values[$i - 1] .'</p>
												</div>
											');
										}
									} else {
										if($el['attr_cat_product_array']){
											foreach($el['attr_cat_product_array'] as $property) {
												echo ('
													<div>
														<p  class="spec-left">'. $property[0] .'</p>
														<p  class="spec-right">'. $property[1] . '</p>
													</div>
												');
											}
										} else {
											for ($i = 1; $i < sizeof($attr_array) + 1;  $i++){
												echo ('
													<div>
														<p  class="spec-left">'. $attr_array[$i - 1] .'</p>
														<p  class="spec-right">'. $el['attr_cat_product' . $i] . '</p>
													</div>
												');
											}
										}									
									}								
									if($page['address'] != 'bases' && $page['address'] != 'beds'  && $page['address'] != 'mattress-covers'){
										echo ('
											<div class="ama_desc_hide_on_mobile">
												<p  class="spec-left">Сделано</p>
												<p  class="spec-right">Италия</p>
											</div>
										');
									}
									if($page['address'] == 'mattress-covers'){
										echo ('
											<div class="ama_desc_hide_on_mobile">
												<p  class="spec-left">СДЕЛАНО</p>
												<p  class="spec-right">'. $el['manufactur'] . '</p>
											</div>
										');
									}
									if($page['address'] == 'beds'){
										echo ('
											<div class="ama_desc_beds">'. $el['small_desc'] .'</div>
										');
									}

								?>								
								<?if($el['parent_address2'] == 'mattresses' || $el['legend'] == 'mattresses') {?>
									<style>
										.ama_product_desc > div:nth-child(2) {
											display: none;
										}
									</style>
								<? } ?>
								<?if($el['parent_address2'] == 'pillows') {?>
									<style>
										.ama_product_desc > div:nth-child(3) {
											display: none;
										}
									</style>
								<? } ?>
								</div>
							</div>
							<div class="category_product_price">
								<?php
									$available = true;
									if(isset($el['available'])){
										if(!$el['available']['status']){
											$available = false;
										}
									}
									if($available) {
								?>
								<p>
									<span class="category_product_new_price"> <?=$min_price;?></span>
									<?php if($is_discount) { 
										
										echo('<span class="category_product_oldprice"> <!--без скидки: -->'.format_price($min_price_old).' <span class="rub_older_price">P</span></span>'); 
										unset($min_price_old);
										$is_discount = false;
									} ?>
										

									<?/*if($el['parent_address2'] == 'pillows' || $el['parent_address2'] == 'mattresses') {?>
										<span style="order: 3; font-weight: 300;"> (-15%)</span>	
									<?}*/?>

								</p>
								<div class="category_product_buy">
									Купить
								</div>
								<?php
									} else {
										echo('<span>'.$el['available']['msg_category'].'</span>');
									}
								?>
							</div>
							<div class="category_product_link">
								<a href="<?=('/catalog/'.$el['parent_address'].'/'.$el['address'].'/'.(($page['cat_size'] && $has_price)?('?size='.$page['cat_size']):('')));?>" title="<?=$el['name'];?>">
									Подробнее
								</a>
							</div>
							<?php if($available) { ?>
							<div class="category_product_quantity">
								<a href="javascript:void(0)" class="sf_minus" rel="nofollow">-</a>
								<input type="text" class="sf_base_quantity" name="quantity" value="1">
								<a href="javascript:void(0)" class="sf_plus" rel="nofollow">+</a>
								<span>шт</span>
							</div>
							<?php } ?>
						</div>
					</div>
				<?php
			}
		}
	?>
	<? if(strpos($page['address'], 'elitnye') !== FALSE || $page['address'] == 'mattresses' || $page['parent_address'] == 'mattresses' || $page['parent_address'] == 'orthopedic_mattresses'){ ?>
		<div class="plahka--size" >
			<div class="plahka--size-main">
				<div class="plahka--size-left">

						<?if (htmlspecialchars($_COOKIE["size"])) { ?>								
							<p class="plashka-mobile-text" style="display: none;">Выбран размер</p>
						<? } else { ?> 
							<p class="plashka-mobile-text" style="display: none;">Чтобы узнать цену</p>
						<? } ?>

					<? //адрес категории
					$li_addr = '/catalog/';
					if($page['parent_address']) $li_addr .= $page['parent_address'].'/';
					$li_addr .= $page['address'].'/';
					?>
					<img class="plahka--size-img" src="/img/beg-plashka.svg" alt="beg">
					<?if (!in_array(htmlspecialchars($_COOKIE["size"]), $array_of_sizes) && htmlspecialchars($_COOKIE["size"])) { ?>								
						<p class="sizepricele">такого размера нет, <br>
						<span>Выберите Другой</span></p> 
					<? } else { ?> 
						<?if (htmlspecialchars($_COOKIE["size"])) { ?>								
							<p class="sizepricele">ВЫБРАН РАЗМЕР</p> 
						<? } else { ?> 
							<p class="sizepricele">чтобы узнать цену, <br>
							<span>Выберите Размер</span></p>
						<? } ?>
					<? } ?>

					<div class="plahka--size_option " onClick="$(this).children('.plashka_sizes_white').toggle()">
					<div class="abs-choice"><?if (htmlspecialchars($_COOKIE["size"])) { echo htmlspecialchars($_COOKIE["size"]); } else { ?> <span class="spancorect">Выберите</span>  Размер <? } ?></div>
						<img src="/img/arrback.jpg" alt="">
						<img class="arms" src="/img/angle-arrow-down.svg" alt="" style="display: none;">
						<ul class="plashka_sizes_white"  id="sf_cat_sizes" style="display: none;">
							<?php
								foreach($array_of_sizes as $size){
									$address = $li_addr;
									echo('<li onclick="cookieSizePhp(\''.$size.'\', \''.$address.'\')">'.$size.'</li>');
								}
							?>
						</ul>
					</div>								

						<div class="quak-variant">
							<!-- <p >Быстрый выбор размера</p> -->
							<div class="quak-variant-block">																			
								<a onclick="cookieSizePhp('80x200', '<?=$li_addr;?>')">80x200</a>
								<a onclick="cookieSizePhp('160x200', '<?=$li_addr;?>')">160x200</a>
								<a onclick="cookieSizePhp('140x200', '<?=$li_addr;?>')">140x200</a>	
								<a onclick="cookieSizePhp('90x200', '<?=$li_addr;?>')">90x200</a>
								<a onclick="cookieSizePhp('180x200', '<?=$li_addr;?>')">180x200</a>
								<a onclick="cookieSizePhp('200x200', '<?=$li_addr;?>')">200x200</a>
							</div>
						</div>

				</div>

				<div class="plahka--size-right">
					<div class="quak-link">
						<!-- <p class="quake">быстрые ссылки: </p> -->
						<div class="quak-link-sub">									
							<p><a href="/catalog/mattresses/">Ортопедические матрасы</a></p>
							<p><a href="/catalog/elitnye-matrasy/">Элитные матрасы</a></p>	
							<p><a href="/catalog/mattresses/toppers/">Матрас для дивана</a></p>									
							<p><a href="/catalog/mattresses/zhestkie-mattresses/">Жесткие матрасы</a></p>
							<p><a href="/catalog/mattresses/srednie-mattresses/">Матрасы средней жесткости</a></p>
							<p><a href="/catalog/mattresses/myahkie-mattresses/">Мягкие матрасы </a></p>
							<p><a href="/catalog/mattresses/dual-reguliruemie-mattresses/">С регулируемой жесткостью</a></p>	
							<p><a href="/catalog/orthopedic_mattresses/s-effektom-pamjati-mattresses/">Матрасы с эффектом памяти</a></p>	
						</div>
					</div>
				</div>
			</div>

		</div>
		
	<? } ?>

	<div class="clear"></div>
</div>

	</div>
		<?php if($page['address'] == 'mattresses' || $page['parent_address'] == 'orthopedic_mattresses' || $page['parent_address'] == 'mattresses' || $page['address'] == 'detskie-ortopedicheskie-matrasy' || $page['parent_address'] == 'detskie-ortopedicheskie-matrasy') { ?>			
			<ul class="ama_quick_category_links">
				<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/mattresses/"><img src="/img/quik-link/ortopedic_matress.jpg" alt="rtopedic_matress"></a> <a href="/catalog/mattresses/">Ортопедические матрасы</a>  </li>
				<li class="ama_quick_link group-link"><a class="quick_link_image" href="/catalog/elitnye-matrasy/"><img src="/img/quik-link/elite_matress.jpg" alt="elite"></a>  <a href="/catalog/elitnye-matrasy/"> Элитные матрасы</a>  </li>
				<li class="ama_quick_link group-lin-right"><a class="quick_link_image" href="/catalog/mattresses/s-effektom-pamjati-mattresses/"><img src="/img/quik-link/podushki_s_effektom_pamyati.jpg" alt="podushki_s_effektom_pamyati"></a>  <a href="/catalog/mattresses/s-effektom-pamjati-mattresses/"> Матрасы с эффектом памяти</a>  </li>
				<!-- <li class="ama_quick_link"><a class="quick_link_image" href="/catalog/mattresses/vacuum-mattresses/"><img src="/img/quik-link/vacuum_matress.jpg"/></a>  <a href="/catalog/orthopedic_mattresses/vacuum-mattresses/"> Вакуумные матрасы</a>  </li> -->
				<!-- <li class="ama_quick_link"><a class="quick_link_image" href="/catalog/mattresses/divannie-mattresses/"><img src="/img/quik-link/matras_dlya_divana.jpg"/></a>  <a href="/catalog/orthopedic_mattresses/divannie-mattresses/"> Матрас для дивана</a>  </li> -->
				<li class="ama_quick_link"><a class="quick_link_image" href="/catalog/mattresses/zhestkie-mattresses/"><img src="/img/quik-link/firm_matress.jpg" alt="firm_matress"></a>  <a href="/catalog/mattresses/zhestkie-mattresses/"> Жесткие матрасы</a>  </li>
				<li class="ama_quick_link"><a class="quick_link_image" href="/catalog/mattresses/soft_mattresses/"><img src="/img/quik-link/soft_matresses.jpg" alt="soft_matrases"></a>  <a href="/catalog/mattresses/myahkie-mattresses/"> Мягкие матрасы</a>  </li>
				<li class="ama_quick_link"><a class="quick_link_image" href="/catalog/mattresses/dual-reguliruemie-mattresses/"><img src="/img/quik-link/dual_matresses.jpg" alt="dual"></a>  <a href="/catalog/mattresses/dual-reguliruemie-mattresses/"> Dual</a>  </li>
			</ul>
		<?php } ?>
		<?php if($page['address'] == 'pillows' || $page['parent_address'] == 'pillows') { ?>			
			<ul class="ama_quick_category_links">
				<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/pillows/orthopedic_pillows/"><img src="/img/quik-link/ortopedicheskie_podushki.jpg"/></a> <a href="/catalog/pillows/orthopedic_pillows/">ортопедические подушки</a>  </li>
				<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/pillows/gel-pillows/"><img src="/img/quik-link/gelevie_podushki.jpg"/></a><a href="/catalog/pillows/gel-pillows/">гелевые подушки</a>  </li>
				<!-- <li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/pillows/vacuum_pillows/"><img src="/img/quik-link/vakuumnye_podushki.jpg"/></a><a href="/catalog/pillows/vacuum_pillows/">вакуумные подушки</a>  </li> -->
				<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/pillows/memory-foam-pillows/"><img src="/img/quik-link/podushki_s_effektom_pamyati.jpg"/></a> <a href="/catalog/pillows/memory-foam-pillows/">подушки с эффектом памяти</a> </li>
				<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/pillows/s-masagnim-effektom/"><img src="/img/quik-link/poduhaki_s_massagnyv_effektom.jpg"/></a><a href="/catalog/pillows/s-masagnim-effektom/">подушки с массажным эффектом</a> </li>
				<li class="ama_quick_link"><a style="background-image: url()" class="quick_link_image" href="/catalog/pillows/pillows-with-cooling-effect/"><img src="/img/quik-link/matresses_s_ohlagdaushim.jpg"/></a> <a href="/catalog/pillows/pillows-with-cooling-effect/">подушки с охлаждающим эффектом</a> </li>
			</ul>
		<?php } ?>
		<?php if(isset($page['text2'])){ ?>
			<div class="bottom_block">
				<?=$page['text2'];?>
			</div>
		<?php } ?>
	<div class="clear"></div>
</div>

<?php if($page['under_text']) { echo($page['under_text']); } ?>
