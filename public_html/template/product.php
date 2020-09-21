<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://widget.cloudpayments.ru/bundles/cloudpayments"></script>


<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

include_once('widgets/breadcrumbs.php');
include_once('widgets/carousel_pillows.php');
include_once('data/reviews.php');
include_once ('/shops.php');

function selected_size($size, $url){
	$tmp = parse_url($url);
	if(isset($tmp['query'])){
		parse_str($tmp['query'], $tmp2);
		if(isset($tmp2['size'])){
			if($tmp2['size'] == $size || $tmp2['size'] == rawurldecode($size)) return true;
			else return false;
		}
	}
	if(strpos($url, 'size='.$size) !== FALSE  || strpos($url, 'size='.rawurlencode ($size)) !== FALSE) return true; return false;
}

//if(!$page['img_alt'])
$page['img_alt'] = $page['parent_name'].' '.$page['name'];
?>
<?$page['desc'] = preg_replace('/<h1/', '<h2', $page['desc'] );?>
<?$page['desc'] = preg_replace('/<\/h1>/', '</h2>', $page['desc'] );?>


<!--<div class="oneclick_overlay" style="display: none;">
	<div class="c_overlay"></div>
	<img class="onecl_close" src="/img/x.svg" alt="" onclick="closeOnclickBuy()">
	<div class="oneclc_wrapper">
		<div class="textss">
			<p class="o_title">Заказ в один клик</p>
			<p class="o_subtitle">Введите номер телефона</p>
		</div>
		<div class="inputss">
			<form id="one_click_buy">
				<input id="buy_one_click" maxlength="21" type="text" name="phone" placeholder="+7 (___) __-__-___">
				<input id="buy_one_click_size" maxlength="21" type="text" name="size" style="display:none;" />
				<input id="buy_one_click2" maxlength="21" type="text" name="name" style="display:none;" value="<?=$page['name'];?>" />
				<input id="buy_one_clic3k" maxlength="21" type="text" name="price" style="display:none;" value=""/>
			</form>			
			<button class="obe_clc_btn" onclick="def()">Отправить</button>
		</div>
	</div>
</div>-->

<div id="product" class="<?php if($page['parent_address2'] == 'mattresses') echo('hodi_extra_class'); ?>">
	<div class="product_top_plashka <? if ($page['parent_address2'] == 'mattresses') { ?>plashka_matresses <? } ?>">
	  <div class="widthCalc1170">
		<div class="preview_product">
				<img src="<?=$page['small_img'];?>" alt="<?=$page['img_alt'];?>" itemprop="name" />
				<p><?=$page['name'];?></p>
		</div>
		<div class="ama_plashka_block_option">
			<span class="ama_plashka_name_option" style="display: none;">Размер: </span>
			<div class="container_for_size"></div>
		</div>	
		<div class="ama_plashka_block_option">
			<span class="ama_plashka_name_option">Цена: </span>
			<div class="container_for_price"></div>
		</div>	
		<div id="prod_buy_top">
			Купить
		</div>
	  </div>
	</div>
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
	

	<div class="boxImgInfo">
	  <div class="image_block" itemscope itemtype="http://schema.org/ImageGallery">
	  	<?php if($page['parent_address2'] == 'mattresses') { ?>     
			<div class="compare-button-card" data-name="<?=$page['name'];?>" data-image="<?=$page['img'];?>">
				<img class="compare_img" src="/img/compare.png" alt="">
				<span>Сравнить</span>
			</div>
		<?php } ?>	
		<div class="easyzoom easyzoom--adjacent" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">			
			<?
				$rev_average = 0;
				$rev_sum = 0;
				$rev_count = 0;
				$recommended_r = 0;
				$bottom_review = '';
				foreach($reviews as $review){
					if(in_array($page['address'], $review['tags'])){
						if($review['rate'] == 5){
							$recommended_r++;
						}
						$stars = '';

						for($i = 1; $i <= 5; $i++){
							if($i <= $review['rate']){
								$stars .= '<img src="/img/product/star_active.svg"/>';
							} else {
								$stars .= '<img src="/img/product/star_grey.svg"/>';
							}
						}

						$rv_html = mb_strimwidth($review["html"], 0, 160, "...");

						$bottom_review .= '
							<div class="rfp_item">
								<!--<a href="/reviews/" target="_blank">-->
									<div class="top-revi"> 
										<p class="featured_reviewer">'. $rv_html .'</p> 
									</div>
									<div class="bottom-revi">									
										<p class="reviewer">'. $review["author"] .' </p> 
										<p class="rate-block">
											<span class="rate-span">Оценка '. $review["rate"] .'</span>
											<span class="reviewwer_stars">'. $stars .'</span>
										</p>
										
									</div>
								<!--</a>-->
							</div>
						';
						$rev_count++;
						$rev_sum += $review['rate'];
					}
				}

				$rev_average = round($rev_sum / $rev_count, 1);
				$recommended_percent = round(($recommended_r / $rev_count) * 100) . '%';

				$stars_html = '';

				for($i = 1; $i <= 5; $i++){
					$tmp_v = 5 - $rev_average;
					if($i <= $rev_average){
						$width = '100%';
					} else {
						$width = 100 - ($tmp_v * 100) . '%';
					}
					$stars_html .= '
						<div class="stars-outer">
							<div class="stars-filler" style="width: '.$width .';"></div>
							<img src="/img/star_active_b.svg">
						</div>
					';   
				}

				if($rev_average > 4){
					$rev_text = 'Потрясающе';
				}else if($rev_average > 3){
					$rev_text = 'Хорошо';
				}else if($rev_average > 2){
					$rev_text = 'Плохо';
				}else {
					$rev_text = 'Ужасно';
				}

				if($rev_average == 5){
					$rev_average = '5.0';
				}

				


				if($rev_average != 0){
					$rev_title_html = '
						<div class="reviews_fixed_plank">
							<div class="bui-review-score c-score bui-review-score--end"> 
								<div class="bui-review-score__badge">'. $rev_average .'</div> 
								<div class="bui-review-score__content"> 
									<div class="bui-review-score__title"> '. $rev_text .' </div> 
									<div class="bui-review-score__text"> '. $rev_count .' отзывов </div> 
								</div> 
							</div>
						</div>		
					';
					
					if($bottom_review){
						$rev_title_html .= '
							<div class="reviews_fixed_plank bottom_review">'. $bottom_review .'</div>
							
						';
					}
					echo($rev_title_html);
				}

			?>

			<? if($recommended_r > 0):?>
				<div class="rfp_recommend reviews_fixed_plank">
					<div class="sp-summary-recommended-label sp-summary-block-label"> Этот товар рекомендуют </div>
					<div class="sp-summary-recommended-value"><?=$recommended_percent; ?> покупателей</div>
				</div>
			<? endif; ?>
			<div class="wrapper_image_wrapper">
				<span class="zoom_ass" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					<a href="<?=$page['img'];?>" title="<?=$page['img_alt'];?>" class="zoom_btn_tester boxer relgallery" >
						<img src="<?=$page['img'];?>" alt="<?=$page['img_alt'];?>" itemprop="name" />
					</a>
				</span>
			<?php
			for($i=0; $i<5; $i++){
				if ($page['img_preview'][$i] != null) {
				?>
					<span class="zoom_ass" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?=$page['img_preview'][$i];?>" title="<?=$page['img_alt'];?>" class="zoom_btn_tester boxer relgallery" >
							<img src="<?=$page['img_preview'][$i];?>" alt="<?=$page['img_alt'];?>" itemprop="name" />
						</a>
					</span>
				<?php
				}
			}
			if ($page['video']) {?>
				<? foreach($page['video'] as $video) { ?>
					<div class="preview-video">
						<div class="clicked-video" onClick="openYoutubeVideo('<?=$video?>')"></div>
						<iframe width="560" height="315" src="<?=$video?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
					</div>
				<? } ?>
			<?}?>
			<? if ($page['video_html']) {?>
				<div class="preview-video html">
					<span class="zoom_ass" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<video poster="<?=$page['video_html'][0];; ?>" onClick="openYoutubeVideoHtml('<?=$page['video_html'][1]; ?>')" class="zoom_btn_tester boxer relgallery">
							<source id="video-pre-html" src="<?=$page['video_html'][1];; ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
						</video>
					</span>					
				</div>
			<? } ?>
		</div>
			<a href="<?=$page['img'];?>" class="product_img boxer relgallery" title="<?=$page['img_alt'];?>">
				<img src="<?=$page['img'];?>" alt="<?=$page['img_alt'];?>" class="boxer relgallery" title="<?=$page['img_alt'];?>" itemprop="name" />
			</a>
		</div>
		<?php if($page['text_under_main_image']){ ?>
			<div class="mini_description1">
				<?php echo($page['text_under_main_image']); ?>
			</div>
		<?php } ?>
		<div class="clear"></div>
	</div>
	<?php if($page['video']) { ?>
		<div class="ama_video_modal" style="display: none;">
			<div class="overlay" onClick="closeYoutubeVideo()"></div>
			<div class="video_wrapper_modal">
				<iframe id="video-pre" width="1120" height="630" src="" frameborder="0"  allowfullscreen=""></iframe>
				<span class="close_modal_video_button" onClick="closeYoutubeVideo()">
					<img src="/img/x_gray.svg" alt="">
				</span>
			</div>
		</div>
	<?php } ?>
	<?php if($page['video_html']) { ?>
		<div class="ama_video_modal_html" style="display: none;">
			<div class="overlay" onClick="openYoutubeVideoHtml()"></div>
			<div class="video_wrapper_modal">
				<video controls="controls" poster="<?=$page['video_html'][0];?>" autoplay="autoplay" id="html_video">
					<source id="video-pre-html" src="<?=$page['video_html'][1];?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
				</video>
				<span class="close_modal_video_button" onClick="closeYoutubeVideoHtml()">
					<img src="/img/x_gray.svg" alt="">
				</span>
			</div>
		</div>
	<?php } ?>
	<div class="right_block">
		
		<h1><?=$page['name'];?></h1>
		
		<div class="ama_mobile_carousel" style="display:none;">
			<?php
				for($i=0; $i<10; $i++){
					if ($page['img_carousel'][$i] != null) {
						?>
							<a href="<?=$page['img_carousel'][$i];?>" class=" boxer relgallery" title="<?=$page['img_alt'];?>">						
								<img src="<?=$page['img_carousel'][$i];?>" alt="<?=$page['img_alt'];?>" itemprop="name" />
							</a>
						<?php
					}
				}
			?>
			<?php if($page['video_html']) { ?>
				<video controls="controls" autoplay="autoplay" id="html_video" height="200">
					<source id="video-pre-html" src="<?=$page['video_html'][1];?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
				</video>
			<?php } ?>
		</div>
	<div class="sizes">
		<?php if($page['sizes']){ ?>				
			<div class="default_container_size">
				<span>Выберите размер</span>
				<?php if(is_array($page['sizes'])){ ?>
					<select id="prod_sizes" class="prod_sizes">
						<?php foreach($page['sizes'] as $size){ ?>
						<option data-gsheet-avaible="<?=$size['gsheet_avaible'];?>" value="<?=$size[1];?>"<?=(selected_size($size[0],$cur_url)?('selected="selected"'):(''));?><?=((is_discount_koef($page, $size[0]))?('old_koef="'.(1-$page['discount_koef']['price_koef']).'"'):(''));?><?=(is_discount_newprice($page, $size[0])?('old_price="'.(intval($page['discount_koef']['prices'][$size[0]])).'"'):(''));?>><?=$size[0];?></option>
						<?php } ?>
					</select>
				<?php } ?>
			</div>
		<? } ?>					
		<div class="product_top" >
			<div>
				<?php
				$available = true;
				if(isset($page['available'])){
					if(!$page['available']['status']){
						$available = false;
					}
				}
				if($available) {
				?>
				<div class="price_list_wrap">
					
					<div class="default_container_price">
						<div class="price">
							<span id="prod_price" class="prod_price"><?php
								$cur_size = ''; $cur_size_id = '';
								$price = false;
								if($page['sizes'] && is_array($page['sizes'])){
									$default_size = true;
									foreach($page['sizes'] as $sz_id => $size){
										if(selected_size($size[0],$cur_url)){
											$price = $size[1];
											$cur_size = $size[0];
											$cur_size_id = $sz_id;
											//echo '<script> console.log("' . $price .'"); </script>';  // 1
											$default_size = false; break;
										}
									}
									if($default_size) $price = $page['sizes'][0][1];
									//echo '<script> console.log("' . $price .'"); </script>';  // 2
								}
								else if($page['price']){
									$price = $page['price'];
									$old_price = $price;
									//echo '<script> console.log("' . $price .'"); </script>';  // 3
								}
								if(isset($page['discount_koef']) && $price && is_discount_koef($page,false)) {
									$price *= (1-$page['discount_koef']['price_koef']);
									//echo '<script> console.log("' . $price .'"); </script>';  // 4
								}

								//if($price) echo($old_price);
								if($price) echo($price);

								else echo('нет данных ');

							?></span>

					</div>
				</div>
				
				<?php
				if(isset($page['discount_koef']) && $price) {
					if(is_discount_koef($page,false)){
					?><div class="old_price" data-oldprice="<?=$old_price;?>">
						<!-- <span>Цена без скидки: </span> -->
						<span id="old_price"><?=$price ; ?></span>
					</div>
					<div class="discount_persent">-<strong class="discount_persent_value"></strong>%</div>
					<?php
					}
					if(is_discount_newprice($page,false)){
					?><div class="old_price" data-oldprice="<?=$old_price;?>">
						<!-- <span>Цена без скидки: </span> -->
						<span id="old_price"><?=($page['discount_koef']['prices'] );?></span>
					</div>
					<div class="discount_persent">-<strong class="discount_persent_value"></strong>%</div>
					<?php
					}
				}
				?>
				<? if($page['banner_product']) { ?>
					<!-- <div class="black-friday-magni" >
						<div class="friday-magni-text"><p>Скидка<br> <? echo($page['discount_koef']['price_koef'] * 100); ?>%</p></div>
						<div class="friday-magni-img"><a href="/skidki-magniflex/black-friday/"><img src="<? echo($page['banner_product']); ?>"></a></div>
					</div> -->
				<? } ?>
			</div>
				<!-- <div id="popup_skidka2">
					<a href="javascript:void(0)">Сообщить о скидке</a>
				</div> -->
			

			<!--<div class="category_product_quantity prod_counter">
				<a href="javascript:void(0)" class="sf_minus" rel="nofollow">-</a>
				<input type="text" class="sf_base_quantity" name="quantity" value="1">
				<a href="javascript:void(0)" class="sf_plus" rel="nofollow">+</a>
				<span>шт</span>
			</div>-->
			<span style="display:none!important;"></span><input type="hidden" class="sf_base_quantity" name="quantity" value="1"><span style="display:none!important;"></span>
			<?php /* вот зачем комментировать количество товара в карточке, а потом удивлятся что что-то не работает */ ?>
			<!-- ds favourite -->


			<?php
			} else {
				echo('<span>'.$page['available']['msg_product'].'</span>');
			}
		?>
		</div>
		</div>
			</div>
<?php if($available) { ?>
		<div class="ama_product_buttons">
			<div id="prod_buy">
				<span>Купить</span>
			</div>

			<div id="prod_buy1">
				<span>ЗАКАЗАТЬ В 1 КЛИК</span>
			</div>
		</div>
<?php if($_SESSION['hide_discount'] === true && !empty($hide_discount_discount)){ ?>
		<a href="/discounts/hide-discount/" target="_blank"><img src="/img/sale0720.jpg" alt="" /></a>
<?php } ?>

<a href="/discounts/discounts-15pr/" target="_blank"><img src="/img/action/ocen-sale.jpg" alt="" /></a>

<?php } ?>

		<!-- <div class="comment_stars_block">
			<img class="star_img2 star1" data-id="1" src="/img/product/star_active.svg" alt="">
			<img class="star_img2 star2" data-id="2" src="/img/product/star_active.svg" alt="">
			<img class="star_img2 star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class="star_img2 star4" data-id="4" src="/img/product/star_active.svg" alt="">
			<img class="star_img2 star5" data-id="5" src="/img/product/star_active.svg" alt="">
		</div>-->
<!-- <div class="comment_v2">

	<div class="comment_v2_block">
		<p>Восхитительный матрас. Купили
уже второй такой же для
молодой ...</p>
<p>Полный отзыв</p>

	</div>
</div> -->
<script>
dataLayer.push({
    "ecommerce": {
        "detail": {
            "products": [
                {
                    "id": "<?=$page['name'];?>",
                    "name" : "<?=$page['name'];?>",
                    "price": <?=intval($price);?>,
                    "brand": "Magniflex",
                    "category": "<?=$page['parent_name'];?>",
                    <?=(($cur_size)?('"variant" : "'.$cur_size.'",'):'');?>
                }
            ]
        }
    }
});
</script>

<script>
function metrik(){
	
}
function breadcrumbsFix() {
    if($('#product').length > 0){
		$('#breadcrumbs').css('background', 'none')
	}
}

document.addEventListener("DOMContentLoaded", breadcrumbsFix);

	function def(){
		if($('#buy_one_click').val().length > 0){
		

			$('#buy_one_click_size').val($('#product #prod_sizes option:selected').text())

			

			$("#info").html("<span>Подождите, секунду...</span>")
			$("#info").show(300)

			$('#buy_one_clic3k').val($('#prod_price').text())

			console.log("click");

			$.ajax({
				type: "POST",
				url: "/send_mail.php",
				data: $("#one_click_buy").serialize(),
				success: function(cevap) {
					$('.buy_one_click .field').hide()
					$(".o_title").text(`Наш менеджер свяжется с Вами`)
					$(".o_subtitle").hide()
					$(".inputss").hide()
					
					$('body').css('overflow-y', 'auto')
					setTimeout(function(){
						$(".oneclick_overlay").hide()
						$('#buy_one_click').val('')
					}, 3000)

				},
				error: function(request, error) {
					alert(` Не смогли отправить: ${error}`)
				}
			})	
		}
	}

	$(function(){
		'use strict'
		$('#review_form').on('submit', function(e){
			e.preventDefault();
			var fd = new FormData($(this)[0]);
			$.ajax({
				url: "/send_review_product.php",
				type: "POST",
				contentType: false, 
				processData: false, 
				data: fd,
				success: function(msg){
					console.log('отправлено')
					$('.comment_stars .field').html('<p class="ama_review_done_text">Спасибо за ваш отзыв!</p>')
					$('.comment_stars').css('max-height', '100px')
				}
			});
		});
	})
</script>

<div class="buy_one_click">

  <div class="field">
  <div  class="fancybox-item fancybox-close sf_close" onclick="hide_popup();"></div>
		<p>Менеджер перезвонит вам, узнает все детали и сам оформит заказ на ваше имя</p>
		<form id="one_click_buy">
			<input id="buy_one_click" maxlength="21" type="text" name="phone" placeholder="+7 (___) __-__-___"/>
			<input id="buy_one_click_size" maxlength="21" type="text" name="size" style="display:none;" />
			<input id="buy_one_click2" maxlength="21" type="text" name="name" style="display:none;" value="<?=$page['name'];?>" />
			<input id="buy_one_clic3k" maxlength="21" type="text" name="price" style="display:none;" value=""/>
			<label for="buy_one_click"><span>Номер телефона</span></label>
			<div class="button ama-one-click-buy" onclick="gtag('event', 'conversion', {'send_to': 'AW-669190695/RXfuCJn8gNcBEKeUjL8C', 'value': parseInt($('#prod_price').text().replace(/\D/gi, '')),'currency': 'RUB','transaction_id': Date.now(), 'event_callback': function () { if (typeof(url) != 'undefined') {window.location = url;}}}); ym(28675206, 'reachGoal', 'one_click_ok'); ym(28675206, 'reachGoal', 'order_order'); return true;">OK</div>
			<div class="form_input_check">
				<input type="checkbox" id="agree_dis_check" name="agree_dis_check" checked="checked">
				<label for="agree_dis_check">Я согласен получать информацию о скидках и специальных предложениях</label>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	<p id="info"></p>
</div>




			<!-- <div id="popup_another_size">
				<a href="javascript:void(0)">Нужен другой размер?</a>
			</div> -->
			<?php //} ?>

		<?php if($page['mini_description']){ ?>
			<div class="mini_description">
				<?php echo($page['mini_description']); ?>
			</div>
		<?php } ?>

		<div class="product_attr" style="">

		<? if($rev_count > 0): ?>
			<!--<div style="display: none;" class="mobile_review">			
				<div class="av_rate_wrapper">
					<div class="bui-review-score__badge"><?=$rev_average;?></div> 
					<div class="bui-review-score__content"> 
						<div class="bui-review-score__title"><?=$rev_text;?> </div>
						<div class="bui-review-score__text"><?=$rev_count;?> отзывов </div>
					</div> 
				</div>		
				<div class="rfp_recommend">
					<div class="sp-summary-recommended-label sp-summary-block-label"> Этот товар рекомендуют </div>
					<div class="sp-summary-recommended-value"><?=$recommended_percent; ?> покупателей</div>
				</div>
			</div>-->
		<? endif; ?>
		<div id="popup_another_size2" class="size-sale">
		<?php if($page['parent_address2'] == 'mattresses') { ?>    
				<a href="javascript:void(0)">Нужен другой размер?</a>
		<?} ?>
				<div id="popup_skidka2">
            <a href="javascript:void(0)">Сообщить о скидке</a>
			</div>
    	</div>
			<?=$page['attr'];?>			
		</div>
		</div>
		
		<div class="clear"></div>
		</div>
	</div>
<?php



		if($page['parent_address'] == 'plaids'){
			$tab_images= array('/img/listgr.svg', '/img/comments.svg', '/img/truck.svg', '/img/listgr.svg', '/img/listgr.svg');
			$labels = array(array('desc','Описание'),array('review','Отзывы'),array('delivery-pay','Доставка и Оплата'),array('iws-italy','О ПРОДУКЦИИ IWT SRL ИТАЛИЯ'),array('about-tracks','Полезная информация о пледах'));
		
		} else if($page['parent_address'] == 'ortopedicheskie-reshetky'){
			$tab_images= array('/img/listgr.svg', '/img/comments.svg', '/img/truck.svg');
			$labels = array(array('desc','Описание'),array('review','Отзывы'),array('delivery-pay','Доставка и Оплата'));
		} else if($page['parent_address'] == 'mattress-covers' || $page['parent_address'] == 'new-mattress-covers' ){
			$tab_images= array('/img/listgr.svg', '/img/comments.svg', '/img/truck.svg');
			$labels = array(array('desc','Описание', ),array('review','Отзывы'),array('delivery-pay','Доставка и Оплата'));
		} else if($page['parent_address'] == 'beds'){
			$tab_images= array('/img/listgr.svg');
			$labels = array(array('desc','Описание'));
		} else { 
			$tab_images= array('/img/listgr.svg', '/img/shopping-cartd.svg', '/img/open-book.svg', '/img/comments.svg', '/img/truck.svg', '/img/advantages.svg', '/img/advantages.svg');
			$labels = array(array('desc','Описание', ),array('recommend','Рекомендации'),array('certificat','Сертификаты'),array('review','Отзывы'),array('delivery-pay','Доставка и Оплата'),array('advant-tab','Характеристики'));
		}
		// $labels = array(array('desc','Описание', ),array('recommend','Рекомендации'),array('certificat','Сертификаты'),array('review','Отзывы'),array('delivery-pay','Доставка и Оплата'),array('advant-tab','Преимущества'),array('shops','Магазины'));
		$has_labels = false;
		foreach($labels as $label){if($page[$label[0]]) $has_labels = true;}

	?>



	<div class="sf_info">
		<ul class="sf_labels coment_img_bro">
		<?php


			$delivery_pay = '
			<h3>Доставка</h3>

			<b>Бесплатная доставка по Москве </b>
			<br>
			
			<p>
				Осуществляется в будние дни по г. Москве в пределах МКАД с 11:00 – 18:00. Ортопедические решетки и подушки Relaxsan отдельно от матрасов не доставляются.<br>
				Доставка в день заказа возможна только в будние дни, если заказ оформлен и подтвержден в первой половине дня до 10:40.<br>
				Доставка в выходные дни и в нерабочее время платная.
			</p>
			<b>Доставка по России</b>
			
			<p>
				Доставка продукции со склада компании (г. Москва) до терминала транспортной компании в г. Москва осуществляется БЕСПЛАТНО. Клиент оплачивает самостоятельно транспортной компании при получении заказа только доставку от терминала транспортной компании до необходимого пункта назначения.
			</p>
			
		<!--	<p>
			Отгрузка товаров со склада в Москве 19 мая 2020 года с доставкой до клиентов или до терминалов транспортных компаний 19-20 мая (согласовывается службой логистики с клиентами 19 мая).<br>
			Отгрузка товаров со склада в Москве 26 мая 2020 года с доставкой до клиентов или до терминалов транспортных компаний 26-27 мая (согласовывается службой логистики с клиентами 26 мая).<br>
Возобновление ежедневных доставок возможно после завершения "режима самоизоляции".
			</p> -->
			
			<p>
				<a href="/pokupatelyam/oplata-i-dostavka/">Прочитать полные условия доставки товаров</a>
			</p>

<br>
<h3>Оплата </h3>
			<p class="oplata_flex">
				<img class="ama_payment_icons" src="/img/oplata_nalichnye.gif" alt="оплата наличными"/> Наличными: курьеру в момент получения заказа.</p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_beznal.gif" alt="безналичный платеж"/> Безналичный платеж: для физических и юридических лиц. </p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_karta.gif" alt="банковской картой"/> <span>Банковской карточкой онлайн, в шоу-руме или курьеру при получении товара. <br><i>Оплата карточкой курьеру при получении товара доступна покупателям из Москвы и Московской области при условии осуществления доставки фирменной службой Magniflex.</span></i></p>
			<p>
			<br>
				<a href="/pokupatelyam/oplata/">Ознакомиться с полными условия оплаты</a>
			</p>

			';

			if($page['delivery_pay']){
				$delivery_pay = $page['delivery_pay'];
			}

			$review_form = '<div class="comment_stars">
			<div class="field">		

				<form enctype="multipart/form-data" method="post" id="review_form">
					<div class="comment_stars_block">
						<!-- <img src="/img/product/stars.png" alt=""> -->
						<img class="star_img star1" data-id="1" src="/img/product/star_active.svg" alt="">
						<img class="star_img star2" data-id="2" src="/img/product/star_active.svg" alt="">
						<img class="star_img star3" data-id="3" src="/img/product/star_active.svg" alt="">
						<img class="star_img star4" data-id="4" src="/img/product/star_active.svg" alt="">
						<img class="star_img star5" data-id="5" src="/img/product/star_active.svg" alt="">
					</div>
					<ul class="review_form_list" style="display: none;">
						<li>
							<input type="radio" id="option5" name="rating" value="5" class="star">
							<label for="f-option">5</label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="option4" name="rating" value="4" class="star">
							<label for="s-option">4</label>
							<div class="check"></div>
						</li>

						<li>
							<input type="radio" id="option3" name="rating" value="3" class="star">
							<label for="t-option">3</label>
							<div class="check"></div>
						</li>

						<li>
							<input type="radio" id="option2" name="rating" value="2" class="star">
							<label for="a-option">2</label>
							<div class="check"></div>
						</li>

						<li>
							<input type="radio" id="option1" name="rating" value="1" class="star">
							<label for="w-option">1</label>
							<div class="check"></div>
						</li>
					</ul>
					<div class="otzuv">
						<label for="name-review"><span>Ваше имя</span></label>
						<input id="name-review" maxlength="300" type="text" name="name-review" />
					</div>
					<div class="otzuv">
						<label for="size"><span>Укажите размер</span></label>
						<input id="size" maxlength="300" type="text" name="size" />
					</div>
					<div class="otzuv">
						<label for="plus"><span>Достоинства</span></label>
						<input id="plus" maxlength="300" type="text" name="plus" />
					</div>
					<div class="otzuv">
						<label for="minus"><span>Недостатки</span></label>
						<input id="minus" maxlength="300" type="text" name="minus" />
					</div>
					<div class="otzuv" style="display: flex;">
						<label class="rec_label" for="recommend"><span>Вы рекомендуете этот товар другим покупателям?</span></label>
						<input class="review_checkbox" type="checkbox" id="recommend_yes" name="recommend_yes" style="opacity: 0; position: absolute; left: -99999px;"/>
						<input class="review_checkbox" type="checkbox" id="recommend_no" name="recommend_no" style="opacity: 0; position: absolute; left: -99999px;"/>
						<span id="yes_rec" class="rec_btn" onclick="switchRec(true)">Да</span>
						<span id="no_rec" class="rec_btn" onclick="switchRec(false)">Нет</span>
					</div>
					<div class="otzuv">
						<label for="email"><span>Ваш email</span></label>
						<input id="email" maxlength="300" type="text" name="email" />
						<input id="product" maxlength="300" type="text" name="product" style="opacity: 0; position: absolute; right: -99999px;" value="' . $page['name'] . '"/>
					</div>
					<div class="otzuv">
						<label for="review"><span>Отзыв</span></label>
						<textarea rows="10" id="review"  name="review" ></textarea>
					</div>
					<input id="buy_one_click2" maxlength="21" type="text" name="name" style="display:none;" value="' . $page['name'] . '" />
					<input id="buy_one_clic3k" maxlength="21" type="text" name="price" style="display:none;" value="name TODO"/>
						<input type="file" name="userfile[]" multiple id="userfile" class="w100" accept="image/*" >
						<p><input value="Отправить" class="button button-style button_style" type="submit"></p>
					</form>
				</div>
			</div>';



			$first = false;
			
			$count = 0;
			foreach($labels as $label){
				if($page[$label[0]]){
					echo('<li'.((!$first)?(' class="active feedback"'):(' class="feedback"')).'><img src="'.$tab_images[$count].'" alt=""><p>'.$label[1].'</p></li>'); $first=1;
					$count++;
				} else if (filter_shops()){
						echo('<li'.((!$first)?(' class="active feedback"'):(' class="feedback"')).'><img src="'.$tab_images[$count].'" alt=""><p>'.$label[1].'</p></li>'); $first=1;
					$count++;
				}
			}
			?>
		</ul>
			<?php
			list($shops) = filter_shops($page['address']);

			function render_shop($array){
				foreach($array as $el){
					$text=$text.'<div class="store-address-container">
						<div class="store-address">
							<div class="store-address">' . $el['name'] . '</div>
							<div class="store-address-component store-address-component-address">' . $el['address'] . '</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">' . $el['working_time'] . '</div>
							<div class="store-address-component store-address-component-pone">' . $el['contacts'] . '</div>
						</div>
					</div>';
				}
				return array($text);
			}

			list($elements) = render_shop($shops);

			// foreach($shops as $el){
			// 	$marker =.'
			// 		var marker = new google.maps.Marker({
			// 			position: { lat: '. $el['position_lat'] .', lng: '. $el['position_lng'] .' },
			// 			title:"'. $el['map_title'] .'",
			// 			icon: new google.maps.MarkerImage("'. $el['map_icon'] .'");,
			// 			map: map
			// 		});
			// 	';
			// }

			?>

			<script type='text/javascript'>
				<?php
					$js_array = json_encode($shops);
					echo "var javascript_array = ". $js_array . ";\n";
				?>
			</script>

<?
			$map_half = '
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>
					<div id="google-map" class="mapp"></div>

					<script>

						function initMap() {
							var map = new google.maps.Map(document.getElementById("google-map"), {
								zoom: 6,
								center: new google.maps.LatLng(55.744394, 37.622196)
							});
							var marker;
							var markers = []
							for(var i = 0; i < javascript_array.length; i++){
								console.log(javascript_array[i].map_title)
								marker = new google.maps.Marker({
									position: { lat: parseInt(javascript_array[i].position_lat), lng: parseInt(javascript_array[i].position_lng)  },
									title:	javascript_array[i].map_title,
									icon: new google.maps.MarkerImage(javascript_array[i].map_icon),
									map: map,
									id: i
								});
								markers.push(marker)
							}
						}
					</script>
				';

				// echo('<div class="hnb_contcenter">');

			foreach($labels as $label){
				switch($label[0]){
					case 'about-tracks':
						?>
							<div class="hnb_contcenter shops" style="display:none;">
								<div class="block_line2">
									<div class="half-width_img">
										<img  src="/img/product/use_pled.jpg" height="auto" title="информация о пледах">
									</div>
									
									<div class="half-width">
										<h3>Полезная информация о пледах</h3>
										Плед — довольно функциональный предмет. В него приятно закутаться в холодную погоду, его можно использовать как второе одеяло или как предмет интерьера, накрыв им кресло или кровать.<br><br>

										При этом необходимо правильно выбрать плед. И тут есть два главных параметра — размер и состав изделия.<br><br>

										Для укрывания вполне подойдет плед размером 150х200 см, такой же размер будет приемлемым для небольшого диванчика или софы.<br><br>

										Шерстяные пледы могут согреть в холод, не накапливают пыль и статику, обеспечивают двустороннюю циркуляцию воздуха. Их даже используют в лечебных целях при радикулите, артрите, ревматизме, артрозе, поскольку содержащийся в животной шерсти ланолин оказывает полезное действие на организм. Чаще всего такие пледы делают из овечьей шерсти, а самые дорогие — из подшерстка и кашемира. 
									</div>
								</div>
							</div>								
						<?php
						break;
					case 'iws-italy':
						?>
							<div class="hnb_contcenter shops" style="display:none;">
								<div class="block_line2">									
									<div class="half-width">
										<h3>Итальянские пледы Italian Woollen Treasures S.r.l.</h3>
										Тоскана и Флоренция славятся своей историей, частью которой является не только культурное наследие, но и текстильная промышленность. Город Прато, в котором изготавливаются пледы Italian Woollen Treasures, располагается в 25 км от Флоренции и является промышленным центром Тосканы, специализирующийся на производстве текстиля и керамики.<br><br>

										Лавки мастеров старинных ремёсел давно уже стали неотъемлемой частью города, превратившись в исторические памятники. В них не прекращается работа со времён эпохи Возрождения. Производимые изделия — не просто товары, но и уникальное художественное наследие. Внутри мастерских кипит работа: трудятся ремесленники, знающие секреты обработки материалов, доставшиеся им от отцов и дедов. Но время не стоит на месте: помимо старинных методик мастера применяют инновационные материалы и технологии.<br><br>

										В Прато находится музей текстиля с уникальной коллекцией тканей, в том числе вельвет, скатерти Перуджи, ткани с дамасским узором 15-19 веков.<br><br>

										Приобретая продукцию (пледы), произведенную мастерами города Прато, Вы получаете частичку истории, которая натуральными нитями качественных материалов буквально вплетена в конечный вариант изделий. Изысканный дизайн, грациозный стиль, исторические орнаменты, и безусловное качество материалов – это продукция из города Прато.<br><br>

										На сегодняшний день поставляемый в Россию ассортимент состоит из 5 коллекций. 
									</div>
									<div class="half-width_img">
										<img src="/img/product/Italian_Woollen_Treasures.jpg"  title="Матрас рекомендован ЦИТО РФ">
									</div>
								</div>
							</div>								
						<?php
						break;
					case 'advant-tab':							
							?>
							<div class="ama_product_details"  style="display:none;">
								<?php echo($page['advant-tab']); ?>
								<div class="hnb_contcenter">
									<ul>
											<?php if($page['block_attr_collections']) { ?>
												<li class="setheight">
														<img src="/img/ic-collection-24-accent.svg" alt="" class="details__image img-responsive">
														<div class="details__text">
																<h2 class="details__title">КОЛЛЕКЦИИ</h2>
																<p class="details__subtitle"><?=$page['block_attr_collections'];?></p>
														</div>
												</li>
											<? } ?>
											<?php if($page['block_attr_materials']) { ?>
												<li class="setheight">
														<img src="/img/ic-inside-24-accent.svg" alt="" class="details__image img-responsive">
														<div class="details__text">
																<h2 class="details__title">МАТЕРИАЛЫ</h2>
																<p class="details__subtitle"><?=$page['block_attr_materials'];?></p>
														</div>
												</li>
											<? } ?>
											<?php if($page['block_attr_coating']) { ?>
												<li class="setheight">
														<img src="/img/ic-covering-24-accent.svg" alt="" class="details__image img-responsive">
														<div class="details__text">
																<h2 class="details__title">ЧЕХОЛ</h2>
																<p class="details__subtitle"><?=$page['block_attr_coating'];?></p>
														</div>
												</li>
											<? } ?>
											<?php if($page['block_attr_certifications']) { ?>
												<li class="setheight">
														<img src="/img/ic-certification-24-accent.svg" alt="" class="details__image img-responsive">
														<div class="details__text">
																<h2 class="details__title">СЕРТИФИКАТЫ</h2>
																<p class="details__subtitle"><?=$page['block_attr_certifications'];?></p>
														</div>
												</li>
											<? } ?>
											<?php if($page['block_attr_benefits']) { ?>
												<li class="setheight">
														<img src="/img/ic-benefit-24-accent.svg" alt="" class="details__image img-responsive">
														<div class="details__text">
																<h2 class="details__title">ПРЕИМУЩЕСТВА</h2>
																<p class="details__subtitle"><?=$page['block_attr_benefits'];?></p>
														</div>
												</li>
											<? } ?>
											<?php if($page['block_attr_comfort_level']) { ?>
												<li class="setheight">
														<img src="/img/ic-comfort-24-accent.svg" alt="" class="details__image img-responsive">
														<div class="details__text">
																<h2 class="details__title">УРОВЕНЬ КОМФОРТА</h2>
																<p class="details__subtitle"><?=$page['block_attr_comfort_level'];?></p>
														</div>
												</li>
											<? } ?>
											<?php if($page['block_attr_height']) { ?>
												<li class="setheight">
														<img src="/img/ic-height-24-accent.svg" alt="" class="details__image img-responsive">
														<div class="details__text">
																<h2 class="details__title">ВЫСОТА</h2>
																<p class="details__subtitle"><?=$page['block_attr_height'];?></p>
														</div>
												</li>
											<? } ?>
											<?php if($page['block_attr_support']) { ?>
												<li class="setheight">
														<img src="/img/ic-support-24-accent.svg" alt="" class="details__image img-responsive">
														<div class="details__text">
																<h2 class="details__title">ПОДДЕРЖКА</h2>
																<p class="details__subtitle"><?=$page['block_attr_support'];?></p>
														</div>
												</li>
											<? } ?>
											<?php if($page['block_attr_warranty']) { ?>
												<li class="setheight">
														<img src="/img/ic-warranty-24-accent.svg" alt="" class="details__image img-responsive">
														<div class="details__text">
																<h2 class="details__title">ГАРАНТИЯ</h2>
																<p class="details__subtitle"><?=$page['block_attr_warranty'];?></p>
														</div>
												</li>
											<? } ?>
											<?php if($page['block_attr_extra']) { ?>
												<li class="setheight">
														<img src="/img/ic-extra-24-accent.svg" alt="" class="details__image img-responsive">
														<div class="details__text">
																<h2 class="details__title">ДОПОЛНИТЕЛЬНО</h2>
																<p class="details__subtitle"><?=$page['block_attr_extra'];?></p>
														</div>
												</li>
											<? } ?>
									</ul>
								</div>
							</div>
							<?php
						break;
					case 'delivery-pay': ?>
						<div class="hnb_contcenter" style="display:none;">
							<div class="block_line2">
								<div class="half-width">
									<?=$delivery_pay;?>
								</div>
								<div class="half-width_img">
									<img src="/img/product/buffon2.jpg"  alt="Доставка продукции Magniflex. Джанлуиджи Буффон">
								</div>
								
								
							</div>
						</div>
						<? break;
					case 'review':

						
						$rev_html = '<div class="reviews">
						<h3> Отзывы покупателей</h3>
						<div class="sp-summary">
							<div class="sp-summary-content">
								<div class="sp-summary-rating sp-summary-block" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
									<div class="sp-summary-block-label">Общий рейтинг</div>
									<div class="sp-summary-rating-stars-and-value">
										<div class="sp-summary-rating-stars">'. $stars_html .'</div>
										<div class="sp-summary-rating-value">
											<span itemprop="ratingValue">'. $rev_average .'</span>
											<span class="sp-summary-rating-value-max">/5.0</span>
										</div>
									</div>
									<div class="sp-summary-rating-description">
										<span itemprop="reviewCount">'. $rev_count .'</span>
										отзывов
									</div>
								</div>   
								<div class="sp-summary-recommended sp-summary-block">
									<div class="sp-summary-recommended-label sp-summary-block-label"> Этот товар рекомендуют </div>
									<div class="sp-summary-recommended-value">'. $recommended_percent .' покупателей</div>
								</div>                
							</div>
						</div>
						';

						$reviews_html = '';
						
						

						foreach($reviews as $review){
							

							if($review['size'] != ''){
								$size_r = '<span class="rev_size">Размер: <span style="color: #000;"> ' . $review['size'] . ' см</span></span>';
							} else {
								$size_r = '';
							}


							if(in_array($page['address'], $review['tags'])){
								$reviews_html .= '<p><b>'. $review['author'] .'</b><br><span>';
								for($i = 0; $i < $review['rate']; ++$i){
									$reviews_html .= '<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">';
								}
								$reviews_html .= '</span>'. $size_r .'<br><i>'. $review['html'] .'</i></p>';
							}
						}

						

						
						$rev_html .= $reviews_html;
						$rev_html .= '</div>';

						if ($reviews_html == ''){
							$rev = '
							<div class="reviews">
							В России ортопедические матрасы Magniflex представлены с 1992 года. Не смотря на жесточайший контроль качества отгружаемого товара, у нас, как и у любой компании, случаются  продажи матрасов с наличием производственных дефектов, однако такой товар мы незамедлительно меняем на новый идеального качества, кроме того процент таких случаев крайне мал - менее 0,1% от общего объема продаж.
							<br><br>
							Пожалуйста, поделитесь своим отзывом о продукции Magniflex!
							</div>
							';
						} else {

							
							$rev = $rev_html;

						}
						echo('<div class="hnb_contcenter" style="display:none;"><div class="ama_review_tab_content" >'. $review_form .' '.$rev. '</div></div>');
						break;
					case 'desc':
						echo('<div class="hnb_contcenter" style="display:none;"><div class="ama_desc_tab_content" >'.$page[$label[0]]. ''. $page['video_for_desc'] .' </div></div>');
						break;
					case 'shops':
						echo('<div class="hnb_contcenter shops" style="display:none;">
										<div class="ama_shops_tab_content" >
											'. $map_half .'
											<div class="shops_half"> '. $elements . '</div>
										</div>
									</div>');
						break;
					case 'recommend':
						?>
							<div class="hnb_contcenter shops" style="display:none;">
								<div class="block_line2">	
									<div class="half-width_img">
										<img  src="/img/product/recommendation_buffon_1.jpg"  alt="Джанлуиджи Буффон. Чемпион мира по футболу. Капитан сборной Италии">
									</div>							
									<div class="half-width">
									<img class="certImgLogo" src="/img/product/certif_minzdorovrf.jpg" alt="МЗМПР">
									МИНИСТЕРСТВО ЗДРАВООХРАНЕНИЯ И МЕДИЦИНСКОЙ ПРОМЫШЛЕННОСТИ РФ признало матрасы и подушки Magniflex ОРТОПЕДИЧЕСКИМИ. Выдано соответствующее регистрационное удостоверение МЗМПР № 96/624.  <br><br>
									<img class="certImgLogo1" src="/img/product/certif_cuto.png" alt="ЦЕНТРАЛЬНЫЙ НИИ ТРАВМАТОЛОГИИ И ОРТОПЕДИИ им. Н.Н. ПРИОРОВА">
									ЦЕНТРАЛЬНЫЙ НИИ ТРАВМАТОЛОГИИ И ОРТОПЕДИИ им. Н.Н. ПРИОРОВА выдал Заключение за номером 322 на основании испытаний и апробации о том, что ортопедические матрасы Magniflex могут быть использованы в стационарах различного профиля.  
									</div>
									
								</div>
							</div>								
						<?php
						break;
					case 'certificat':
						?>
							<div class="hnb_contcenter shops" style="display:none;">
								<div class="block_line2">
									<?php if($page['parent_address'] == 'plaids'){ ?>
										<?php if($page['certificat_image']){ echo($page['certificat_image']); } else { ?>
											<div class="hnb_contlef">
												<img width="280" src="/img/rostest.png" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест">
											</div>
										<?php } ?> 
										<?php if($page['certificat_text']){ echo($page['certificat_text']); } else { ?>
											<div class="hnb_contrig">
											Сертификат ГОСТ Р на пледы, покрывала, одеяла
											</div>
										<?php } ?> 
									<?php } else if($page['parent_address2'] == 'pillows'){ ?>
										<?php if($page['certificat_image']){ echo($page['certificat_image']); } else { ?>
											<div class="half-width">
												<img src="/img/product/sertifikaty.jpg" title="Матрасы Magniflex магнифлекс сертифицированы множеством международных организаций">
												
											</div>
										<?php } ?> 
										<?php if($page['certificat_text']){ echo($page['certificat_text']); } else { ?>
											<div class="half-width_img">
											<h3>Российские сертификаты</h3>
											В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br>
											МИНИСТЕРСТВО ЗДРАВООХРАНЕНИЯ И МЕДИЦИНСКОЙ ПРОМЫШЛЕННОСТИ РФ признало подушки Magniflex ОРТОПЕДИЧЕСКИМИ. Выдано соответствующее регистрационное удостоверение МЗМПР № 96/624. <br>
											СЕРТИФИКАТЫ СООТВЕТСТВИЯ ГОСТ Р<br>
											<a target="_blank" href="/doc/Сертификат Подушки.pdf">Сертификат ГОСТ Р на подушки</a><br><br>

											<h3>МЕЖДУНАРОДНЫЕ СЕРТИФИКАТЫ</h3>
											Все подушки фабрики Magniflex сертифицированы ведущими международными ассоциациями, одобрены и рекомендованы к применению медицинскими центрами Италия, Германии, Франция, Швеции, Японии, Канады и США, практикующими профилактику и лечение опорно-двигательного аппарата человека.<br>
											Oeko-Tex стандарт 100 <br>
											LGA (Германия) <br>
											Стандартизация AJA, UKAS<br>
											AJA Registrars<br>
											Медицинское изделие<br>
											FIRA UK<br>
											Fiorentina Studiorum Universitas Сертификат<br>
											Подробную информацию о сертификатах продукции Magniflex Вы можете прочить в разделе «<a target="_blank" href="/production/certificates/">Сертификаты на матрасы и подушки</a>»
											</div>
										<?php } ?> 
									<?php } else if($page['parent_address'] == 'mattresses' || $page['parent_address'] == 'orthopedic_mattresses'){ ?>
										<?php if($page['certificat_image']){ echo($page['certificat_image']); } else { ?>
											<div class="half-width">
												<img src="/img/product/sertifikaty.jpg" title="Матрасы Magniflex магнифлекс сертифицированы множеством международных организаций">
												
											</div>
										<?php } ?> 
										<?php if($page['certificat_text']){ echo($page['certificat_text']); } else { ?>
											<div class="half-width_img">
											<h3>Российские сертификаты</h3>
											В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, в том числе РОСТЕСТ.<br>
											Матрасы Magniflex признаны МИНИСТЕРСТВОМ ЗДРАВООХРАНЕНИЯ И МЕДИЦИНСКОЙ ПРОМЫШЛЕННОСТИ РФ <b>ортопедическими изделиями</b> (регистрационное удостоверение МЗМПР №96/624).<br>
											СЕРТИФИКАТЫ СООТВЕТСТВИЯ ГОСТ Р<br>
											<a target="_blank" href="/doc/Сертификат%20Матрасы.pdf">Сертификат ГОСТ Р на матрасы</a><br><br>

											<h3>МЕЖДУНАРОДНЫЕ СЕРТИФИКАТЫ</h3>
											Все матрасы фабрики Magniflex сертифицированы ведущими международными ассоциациями, одобрены и рекомендованы к применению медицинскими центрами Италия, Германии, Франция, Швеции, Японии, Канады и США, практикующими профилактику и лечение опорно-двигательного аппарата человека.<br>
											Oeko-Tex стандарт 100<br>
											LGA (Германия)<br>
											Стандартизация AJA, UKAS<br>
											AJA Registrars<br>
											Медицинское изделие<br>
											FIRA UK<br>
											Fiorentina Studiorum Universitas Сертификат<br>
											Подробную информацию о сертификатах продукции Magniflex Вы можете прочить в разделе «<a target="_blank" href="/production/certificates/">Сертификаты на матрасы и подушки</a>»
											</div>
										<?php } ?> 
									<?php } else { ?>
										<?php if($page['certificat_image']){ echo($page['certificat_image']); } else { ?>
											<div class="half-width">
												<img src="/img/product/sertifikaty.jpg" title="Матрасы Magniflex магнифлекс сертифицированы множеством международных организаций">
												
											</div>
										<?php } ?> 
										<?php if($page['certificat_text']){ echo($page['certificat_text']); } else { ?>
											<div class="half-width_img">
											<h3>Российские сертификаты</h3>
											В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br>
											МИНИСТЕРСТВО ЗДРАВООХРАНЕНИЯ И МЕДИЦИНСКОЙ ПРОМЫШЛЕННОСТИ РФ признало подушки  Magniflex ОРТОПЕДИЧЕСКИМИ. Выдано соответствующее регистрационное удостоверение МЗМПР № 96/624. <br>
											СЕРТИФИКАТЫ СООТВЕТСТВИЯ ГОСТ Р<br>
											<a target="_blank" href="/doc/Сертификат%20Матрасы.pdf">Сертификат ГОСТ Р на матрасы</a><br><br>

											<h3>МЕЖДУНАРОДНЫЕ СЕРТИФИКАТЫ</h3>
											Все матрасы фабрики Magniflex сертифицированы ведущими международными ассоциациями, одобрены и рекомендованы к применению медицинскими центрами Италия, Германии, Франция, Швеции, Японии, Канады и США, практикующими профилактику и лечение опорно-двигательного аппарата человека.<br>
											Oeko-Tex стандарт 100 <br>
											LGA (Германия) <br>
											Стандартизация AJA, UKAS<br>
											AJA Registrars<br>
											Медицинское изделие<br>
											FIRA UK<br>
											Fiorentina Studiorum Universitas Сертификат<br>
											Подробную информацию о сертификатах продукции Magniflex Вы можете прочить в разделе «<a target="_blank" href="/production/certificates/">Сертификаты на матрасы и подушки</a>»
											</div>
										<?php } ?> 
									
									<?php }  ?>
								</div>

								<?php if($page['parent_address'] == 'tracks'){ ?>
									<div class="hnb_contmy ama_product_sertificate">
										<div class="hnb_contlef">
											<img width="280" src="/img/rostest.png" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест">
										</div>
										<div class="hnb_contrig">
											Сертификат ГОСТ Р на пледы, покрывала, одеяла
										</div>
									</div>
								<?php } ?>  
							</div>
						<?php
						break;
					default:
						echo('<div class="hnb_contcenter" style="display:none;">'.$page[$label[0]].'</div>');
						break;
				}
					$first++;
			}

			// echo('</div>');
		?>
	</div>

	<?php if($page['parent_address2'] == 'pillows') { ?>
		
		<?php if($page['pose']){ 
			echo($page['pose']); 
		}  else { ?>
			<div class="perfect_sleap">
				<div class="newwrapper">
					<p class="pslep_man">Идеальна для сна в любом положении</p>
				</div>
				<div class="wrapper">
					
					<div class="perfect_sleap_block_main">
						<div class="per_padd">
							<div class="perfect_sleap_block">
								<img src="/img/Sulla-schiena.png" alt="На спине">
								<p class="per_slep_under">На спине</p>
							</div>
						</div>
						<div class="per_padd">
							<div class="perfect_sleap_block">
								<img src="/img/Sul-fianco.png" alt="Сбоку">
								<p class="per_slep_under">Сбоку</p>
							</div>
						</div>
						<div class="per_padd">
							<div class="perfect_sleap_block">
								<img src="/img/a-pancia-in-giu.png" alt="На животе">
								<p class="per_slep_under">На животе</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<? } ?>
	<? } ?>

	<?php if($page['attr_cover_product'] || $page['attr_padding_product'] || $page['attr_comfort_product'] || $page['attr_layer_product'] || $page['attr_drape_product'] || $page['prod_compose']) { ?>

		<div class="ama_product_content">
			<div class="hnb_contcenter">
				<div class="ama_product_left_column">
					<? if($page['parent_address2'] == 'pillows') { ?>
						<h2 class="ama_content_title">В самом сердце подушки</h2>
					<? } ?>
					<? if($page['parent_address2'] == 'mattresses') { ?>
						<h2 class="ama_content_title">В самом сердце матраса</h2>
					<? } ?>
					<ul>
						<?php if($page['prod_compose']) { ?>
							<?php foreach($page['prod_compose'] as $compose) { ?>
								<li>
									<span class="word_layer"></span>
									<div class="layer_title"><?=$compose[0];?></div>									
									<?=$compose[1];?>
								</li>
							<?php }  ?>
						<?php } else { ?>
							<?php if($page['attr_cover_product']) { ?>
								<li>
									<span class="word_layer"></span>
									<?if($page['attr_cover_product_title']){ ?>
										<div class="layer_title"><?=$page['attr_cover_product_title'];?></div>
									<? } else {?>
										<div class="layer_title">Ткань чехла</div>
									<? } ?>
									<?=$page['attr_cover_product'];?>
								</li>
							<? } ?>
							<?php if($page['attr_padding_product']) { ?>
								<li>
									<span class="word_layer"></span>
									<?if($page['attr_padding_product_title']){ ?>
										<div class="layer_title"><?=$page['attr_padding_product_title'];?></div>
									<? } else {?>
										<div class="layer_title">Наполнитель</div>
									<? } ?>
									<?=$page['attr_padding_product'];?>
								</li>
							<? } ?>
							<?php if($page['attr_comfort_product']) { ?>
								<li>
									<span class="word_layer"></span>
									<?if($page['attr_comfort_product_title']){ ?>
										<div class="layer_title"><?=$page['attr_comfort_product_title'];?></div>
									<? } else {?>
										<div class="layer_title">Уровень Комфорта</div>
									<? } ?>
									<?=$page['attr_comfort_product'];?>
								</li>
							<? } ?>
							<?php if($page['attr_layer_product']) { ?>
								<li>
									<span class="word_layer"></span>
									<?if($page['attr_layer_product_title']){ ?>
										<div class="layer_title"><?=$page['attr_layer_product_title'];?></div>
									<? } else {?>
										<div class="layer_title">Основной Слой</div>
									<? } ?>
									<?=$page['attr_layer_product'];?>
								</li>
							<? } ?>
							<?php if($page['attr_drape_product']) { ?>
								<li>
									<span class="word_layer"></span>
									<?if($page['attr_drape_product_title']){ ?>
										<div class="layer_title"><?=$page['attr_drape_product_title'];?></div>
									<? } else {?>	
										<? if($page['parent_address2'] == 'pillows') { ?>
											<div class="layer_title">Защитная наволочка</div>
										<? } ?>
										<? if($page['parent_address2'] == 'mattresses') { ?>
											<div class="layer_title">Гигиеническая простыня</div>
										<? } ?>
									<? } ?>
									<?=$page['attr_drape_product'];?>
								</li>
							<? } ?>
						<?php } ?>
							
					</ul>
				</div>
				<div class="ama_product_right_column">
						<img src="<?=$page['image_composition'];?>" alt="" class="img-responsive">
						<!--<a href="#" class="ama_content_under_button">Discover Materials</a>-->
				</div>
			</div>		
		</div>
	<? } ?>
	



<div class="ama_descr_style">


	<?php
		if($page['similar'] || $page['tougher'] || $page['softer'] || $page['comfort']){
		$labels = array(array('similar','Похожие товары'),array('tougher','Жестче'),array('softer','Мягче'),array('comfort','Комфорнее'),);

		foreach($labels as $label){
			if($page[$label[0]]){
				if(strpos($page[$label[0]], '<!--{min_price|') !== FALSE){
					if(preg_match_all('/<!--{min_price\|"(.*?)"}-->/', $page[$label[0]] ,$els, PREG_SET_ORDER)){
						foreach($els as $el){
							$prod_min_price = intval(get_product_min_price($el[1]));
							if(!$prod_min_price) $prod_min_price = 'нет данных ';
							$page[$label[0]] = str_replace('<!--{min_price|"'.$el[1].'"}-->', $prod_min_price, $page[$label[0]]);
						}
					}
				}
			}
		}
	?>
	<!-- <hr>
	<div id="hnb_pohtovnew">
		<h2 class="h2_h2">Подобрать другой матрас</h2>
		<span>Вам нужен другой матрас? Мягче, жестче или комфортнее? А может дешевле?<br>
		Для выбора нажмите на кнопочку: <div class="sf_btn sf_cat_text_btn">подбор матраса <div>&#9660;</div></div>  </span>

			<div class="sf_info" id="prod_similar_info">
				<ul class="sf_labels">
				<?php
					$first = false;
					foreach($labels as $label){
						if($page[$label[0]]){
							echo('<li'.((!$first)?(' class="active"'):('')).'>'.$label[1].'</li>'); $first=1;
						}
					}
					?>
				</ul>
					<?php
					$first = false;
					foreach($labels as $label){
						if($page[$label[0]]){
							echo('<div '.((!$first)?('style="display:block;"'):('')).'>'.$page[$label[0]].'</div>'); $first=1;
						}
					}
				?>
			</div>
		</div> -->

	<?php } ?>
</div>

		</div>


<? if($page['parent_address2'] == 'mattresses') { ?>
<div id="product-bottom-slider">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="ama_product_bottom_slider_block_text" style="margin-left: 5px;">
					<hgroup>
						<h2>Марка №1 в Италии</h2>
						<h3>Преимущества <br />матрасов Magniflex</h3>
						<p>Magniflex — не только матрасы, это Здоровый Сон и Полноценный Отдых!</p>
					</hgroup>
				</div>
			</div>		
			<div class="swiper-slide">
				<img src="/img/withlove.jpg" alt="Magniflex — это Здоровый Сон и Полноценный Отдых" />
			</div>
			<div class="swiper-slide">
				<div class="ama_product_bottom_slider_block_text">
					<div class="swipe-content">
						<h3>100% сделаны в Италии</h3>
						<p>Вся продукция Magniflex создается, производится и тестируется ИСКЛЮЧИТЕЛЬНО в ИТАЛИИ. <br />Это единственный способ гарантировать то, что все ткани, материалы и изделия отвечают нашим стандартам Качества. 
                        </p>
					</div>	
				</div>
			</div>	
			<div class="swiper-slide">
				<img src="/img/slider_index/made_in_italy.jpg" alt="Magniflex — сделано в Италии" />
			</div>
			<div class="swiper-slide">
				<div class="ama_product_bottom_slider_block_text">
					<div class="swipe-content">
						<h3>55 лет стремления к Совершенству</h3>
						<p>Компания Magniflex была основана более полувека назад в 1962 г. в городе Прато (Флоренция, Италия).</p>
					</div>	
				</div>
			</div>	
			<div class="swiper-slide">
				<img src="/img/slider_index/55_years.jpg" alt="Magniflex — основано 55 лет назад" />
			</div>
			<div class="swiper-slide">
				<div class="ama_product_bottom_slider_block_text">
					<div class="swipe-content">
						<h3>Magniflex - один из самых уважаемых брендов в мире</h3>
						<p>Продукция компании представлена в 99 странах мира. <br />Матрасы Магнифлекс выбирают люди из разных уголков планеты. Среди поклонников бренда — звезды кино и спорта, известные люди и особы королевских кровей. </p>
					</div>	
				</div>
			</div>	
			<div class="swiper-slide">
				<img src="/img/slider_index/magni_2.jpg" alt="Magniflex — один из самых уважаемых брендов" />
			</div>		
			<div class="swiper-slide">
				<div class="ama_product_bottom_slider_block_text">
					<div class="swipe-content">
						<h3>Индивидуальное воздействие</h3>
						<p><b>Все двуспальные матрасы Магнифлекс оказывают индивидуальное воздействие.</b><br />
						Видео Эксперимент<br />
						На одной стороне матраса мы поставили стакан с водой, на другой — попросили Мартина Кастроджиованни "попрыгать". Вода даже не расплескалась.</p>
					</div>	
				</div>
			</div>				
			<div class="swiper-slide">
				<div class="hnb_contvideo">
					<video id="second" tabindex="0" style="height:100%; width: auto;" loop poster="/img/poster-preview.png">
						<source src="/video/product_castrogiovanni!_4.mp4" />
					</video>

					<img class="ama_player_volume on" alt="speaker" src="/img/speaker.svg" onclick="offVolumePlayer()"/>
					<img class="ama_player_volume off" alt="speaker" src="speaker(1).svg" onclick="onVolumePlayer()" style="display: none;"/>

					<div class="ama_video_player play" onclick="playAmaPlayer('second')">
						<img src="/img/play-button.svg" alt="play-button"/>
					</div>
					<div class="ama_video_player pause" onclick="pauseAmaPlayer('second')" style="display: none;">
						<img src="/img/pause.svg" alt="pause"/>
					</div>
				</div>
			</div>			
			<div class="swiper-slide">
				<div class="ama_product_bottom_slider_block_text">
					<div class="swipe-content">
						<h3>Безопасные. Сертификат OEKO-TEX®</h3>
						<p>Продукция сертифицирована OEKO-TEX®  — гарантия того, что изделия не содержат химически вредных и токсичных веществ. Безопасно для Вас и для окружающей среды</p>
					</div>	
				</div>
			</div>			
			<div class="swiper-slide">
				<img src="/img/slider_index/oeko-tex.jpg" alt="Сертификат OEKO-TEX" />
			</div>	
			<div class="swiper-slide">
				<div class="ama_product_bottom_slider_block_text">
					<div class="swipe-content">
						<h3>Натуральные ткани и наполнители</h3>
						<p>В процессе производства мы используем ИСКЛЮЧИТЕЛЬНО НАТУРАЛЬНЫЕ ткани и материалы, все масла растительного происхождения. Мы НЕ ИСПОЛЬЗУЕМ химические вещества или переработанные нефтепродукты.</p>
					</div>	
				</div>
			</div>				
			<div class="swiper-slide">
				<img src="/img/slider_index/natural.jpg" alt="Матрасы из натуральных тканей" />
			</div>	
			<div class="swiper-slide">
				<div class="ama_product_bottom_slider_block_text">
					<div class="swipe-content">
						<h3>Комфортный микроклимат</h3>
						<p>Magniflex — это матрасы, которые умеют «дышать», и никогда не накапливают тепло!</p>
					</div>	
				</div>
			</div>	
			<div class="swiper-slide">
				<img src="/img/slider_index/breathes_mattress.jpg" alt="Матрасы, которые умеют дышать" />
			</div>
		</div>
		<!-- Add Scrollbar -->
		<div class="swiper-scrollbar"></div>
		<a class="swiper-button-prev"></a>
		<a class="swiper-button-next"></a>
	</div>


  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
		slidesPerView: 'auto',
		spaceBetween: 30,
		grabCursor: true,
		speed: 400,
		loop: false,
		scrollbar: {
			el: '.swiper-scrollbar',
			draggable: true,
			dragSize: 30
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
    });
  </script>

</div>
<? } ?>


<style>

.main_menu_wrap.small {
    position: fixed !important;
    left: 0 !important;
    top: 0 !important;
    width: 100% !important;
    padding: unset;
    transition: width 0.25s cubic-bezier(0.445, 0.05, 0.55, 0.95), left 0.25s cubic-bezier(0.445, 0.05, 0.55, 0.95), right 0.25s cubic-bezier(0.445, 0.05, 0.55, 0.95);
}
#breadcrumbs{
	background:none!important;
	height: 80px!important;

}
.breadcrumbs_block li a,
.breadcrumbs_block li span {
color:#666!important;
}
</style>

<script>
$('#prod_buy').on('click',function(){
	var variant = '';
	if($('#prod_sizes option:selected').length) variant = $('#prod_sizes option:selected').text();
	dataLayer.push({
		"ecommerce": {
			"add": {
				"products": [
					{
						"id": "<?=$page['name'];?>",
						"name" : "<?=$page['name'];?>",
						"price": <?=intval($price);?>,
						"brand": "Magniflex",
						"category": "<?=$page['parent_name'];?>",
						"variant": variant,
					}
				]
			}
		}
	});
});

$('.ama-one-click-buy').click(function(){

console.log("click");
if($('#buy_one_click').val() != ''){
	
	$('#buy_one_click_size').val($('#product #prod_sizes option:selected').text())	
	$("#info").html("<span>Подождите, секунду...</span>")
	$("#info").show(300)

	$('#buy_one_clic3k').val($('#prod_price').text())
	$.ajax({
		type: "POST",
		url: "/send_mail.php",
		data: $("#one_click_buy").serialize(),
		success: function(cevap) {
			$('.buy_one_click .field').hide();
			
			var variant = '';
			if($('#prod_sizes option:selected').length) variant = $('#prod_sizes option:selected').text();
			
			var cur_online_pay_avaible = <?=(($page['gsheet_avaible'])?'true':'false');?>;
			if($('#prod_sizes option:selected').length){
				cur_online_pay_avaible = false;
				if($('#prod_sizes option:selected').attr('data-gsheet-avaible')){
					cur_online_pay_avaible = true;
				}
			}
			
			var order = {
				order_n : "<?=$_SESSION['last_1c_order'];?>" || 'order-'+(new Date().toGMTString())+' ['+$('#buy_one_click').val()+']',
				order_price : <?=intval($price);?>,
				client_email: '',
				client_phone: $('#buy_one_click').val(),
				client_name: '',
				goods: "<?=$page['name'];?> "+variant,
				online_pay_avaible: cur_online_pay_avaible,
 			};
			
			$("#info").html($order_1click_btn_html);
			$('.buy_one_click').addClass('one_click_pay');
			order_pay_btn_init(order);
			$("#info").show();
			
			/*$("#info").html('<span>Наш менеджер свяжется с Вами</span>')
			setTimeout(function(){
				$("#info").hide()
				$('.buy_one_click').removeClass('flex_buy')
				$('#buy_one_click').val('')
			}, 3000)
			*/
			
			//
			
			dataLayer.push({
				"ecommerce": {
					"purchase": {
						"actionField": {
							"id" : "<?=$_SESSION['last_1c_order'];?>" || 'order-'+(new Date().toGMTString()),
						},
						"products": [
							{
								"id": "<?=$page['name'];?>",
								"name" : "<?=$page['name'];?>",
								"price": <?=intval($price);?>,
								"brand": "Magniflex",
								"category": "<?=$page['parent_name'];?>",
								"variant": variant,
							},
						]
					}
				}
			});
		},
		error: function(request, error) {
			alert(` Не смогли отправить: ${error}`)
		}
	})
} else {
	$("#info").html("<span style='color: #ff0000d6'>Введите корректный номер телефона</span>")
	$("#info").show(300)
}

})
</script>