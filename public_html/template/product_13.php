


<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

include_once('widgets/breadcrumbs.php');
include_once('widgets/carousel_pillows.php');
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
<div id="product">
<div class="product_top_plashka <? if ($page['parent_address2'] == 'mattresses') { ?>plashka_matresses <? } ?>">
	
		<div class="preview_product">
				<img src="<?=$page['small_img'];?>" alt="<?=$page['img_alt'];?>" itemprop="name" />
				<p><?=$page['name'];?></p>
		</div>

		<div class="container_for_size">

		</div>

		<div class="container_for_price">

		</div>
		<? if ($page['parent_address'] == 'mattresses') { ?>
			<div id="popup_another_size">
				<a href="javascript:void(0)">Нужен другой размер?</a>
			</div>
		<? } ?>
		<div id="popup_skidka">
				<a href="javascript:void(0)">Сообщить о скидке</a>
			</div>

		<div id="prod_buy_top">
			Купить
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

	  <div class="compare-button-card" data-name="<?=$page['name'];?>" data-image="<?=$page['img'];?>">
			<img class="compare_img" src="/img/compare.png" alt="">
			<span>Сравнить</span>
	</div>
		
		<div class="easyzoom easyzoom--adjacent" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		<div class="wrapper_image_wrapper">
		<span class="zoom_ass" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					<a href="<?=$page['img'];?>" title="<?=$page['img_alt'];?>" class="zoom_btn_tester boxer relgallery" rel="relgallery" itemprop="contentUrl">
						<img src="<?=$page['img'];?>" alt="<?=$page['img_alt'];?>" itemprop="name" />
					</a>
					</span>
				<?php
				for($i=0; $i<5; $i++){
					if ($page['img_preview'][$i] != null) {
					?>
					<span class="zoom_ass" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					<a href="<?=$page['img_preview'][$i];?>" title="<?=$page['img_alt'];?>" class="zoom_btn_tester boxer relgallery" rel="relgallery" itemprop="contentUrl">
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
		</div>
			<a href="<?=$page['img'];?>" class="product_img boxer relgallery"  rel="relgallery" title="<?=$page['img_alt'];?>" itemprop="contentUrl">
				<img src="<?=$page['img'];?>" alt="<?=$page['img_alt'];?>" class="boxer relgallery" rel="relgallery" title="<?=$page['img_alt'];?>" itemprop="name" />
			</a>
		</div>
		<div class="clear"></div>
		</div>

		<?php if($page['video']) { ?>
			<div class="ama_video_modal" style="display: none;">
				<div class="overlay" onClick="closeYoutubeVideo()"></div>
				<iframe id="video-pre" width="1120" height="630" src="" frameborder="0"  allowfullscreen=""></iframe>
				<span class="close_modal_video_button" onClick="closeYoutubeVideo()">X</span>
			</div>
		<?php } ?>

	  <div class="right_block">




		<h1><?=$page['name'];?></h1>


		
			<div class="sizes">
			<?php if($page['sizes']){ ?>
				<span>Выберите размер</span>
				<div class="default_container_size">
					<?php if(is_array($page['sizes'])){ ?>
						<select id="prod_sizes" class="prod_sizes">
							<?php foreach($page['sizes'] as $size){ ?>
							<option value="<?=$size[1];?>"<?=(selected_size($size[0],$cur_url)?('selected="selected"'):(''));?><?=((is_discount_koef($page, $size[0]))?('old_koef="'.(1-$page['discount_koef']['price_koef']).'"'):(''));?><?=(is_discount_newprice($page, $size[0])?('old_price="'.(intval($page['discount_koef']['prices'][$size[0]])).'"'):(''));?>><?=$size[0];?></option>
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
								$price = false;
								if($page['sizes'] && is_array($page['sizes'])){
									$default_size = true;
									foreach($page['sizes'] as $size){
										if(selected_size($size[0],$cur_url)){
											$price = $size[1];
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
					</div><?php
					}
					if(is_discount_newprice($page,false)){
					?><div class="old_price" data-oldprice="<?=$old_price;?>">
						<!-- <span>Цена без скидки: </span> -->
						<span id="old_price"><?=($page['discount_koef']['prices'] );?></span>
					</div><?php
					}
				}
				?>
			</div>


			<!--<div class="category_product_quantity prod_counter">
				<a href="javascript:void(0)" class="sf_minus" rel="nofollow">-</a>
				<input type="text" class="sf_base_quantity" name="quantity" value="1">
				<a href="javascript:void(0)" class="sf_plus" rel="nofollow">+</a>
				<span>шт</span>
			</div>-->
			<span style="display:none!important;"></span><input type="hidden" class="sf_base_quantity" name="quantity" value="1"><span style="display:none!important;"></span>
			<?php /* вот зачем комментировать количество товара в карточке, а потом удивлятся что что-то не работает */ ?>
			<!-- ds favourite -->


			<div class="ds_prod-buy" style="position: relative;">
				<button fav-id="<?=$page['address']?>" class="favourite-but" style="display: none; position: absolute; right: 120px; top: -3px;"></button>
				<button id="<?=$page['address']?>" class="ds_del-fav" style="display: none; position: absolute; right: 120px; top: -3px;"></button>
			</div>

			<?php
			} else {
				echo('<span>'.$page['available']['msg_product'].'</span>');
			}
		?>
		</div>
		</div>
			</div>


		<div id="prod_buy">
			<span>Купить</span>
		</div>

		<div id="prod_buy1">
			<span>ЗАКАЗАТЬ В 1 КЛИК</span>
		</div>
		<div class="comment_stars_block">
			<img class="star_img2 star1" data-id="1" src="/img/product/star_active.svg" alt="">
			<img class="star_img2 star2" data-id="2" src="/img/product/star_active.svg" alt="">
			<img class="star_img2 star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class="star_img2 star4" data-id="4" src="/img/product/star_active.svg" alt="">
			<img class="star_img2 star5" data-id="5" src="/img/product/star_active.svg" alt="">
		</div>
<!-- <div class="comment_v2">

	<div class="comment_v2_block">
		<p>Восхитительный матрас. Купили
уже второй такой же для
молодой ...</p>
<p>Полный отзыв</p>

	</div>
</div> -->
<script>

	function def(){

		$("#info").html("<span>Подождите, секунду...</span>")
		$("#info").show(300)

		$('#buy_one_clic3k').val($('#prod_price').text())

		console.log("click");

		$.ajax({
			type: "POST",
			url: "/send_mail.php",
			data: $("#one_click_buy").serialize(),
			success: function(cevap) {
				// $('.buy_one_click .field').hide()
				$("#info").show()

				$("#info").html(`<span style="color: green;">Наши менеджеры свяжутся с вами</span>`)
				setTimeout(function(){
					$("#info").hide()
					$('.buy_one_click').removeClass('flex_buy')
					$('#buy_one_click').val('')
				}, 3000)
			},
			error: function(request, error) {
				alert(` Не смогли отправить: ${error}`)
			}
		})
	}

	$(function(){
		'use strict'
		$('#review_form').on('submit', function(e){
			e.preventDefault();
			var fd = new FormData($(this)[0]);
			$.ajax({
				url: "/send_review.php",
				type: "POST",
				contentType: false, 
				processData: false, 
				data: fd,
				success: function(msg){
					console.log('отправлено')
					$('.comment_stars .field').html('<p class="ama_review_done_text">Спасибо за ваш отзыв!</p>')
				}
			});
		});
	})
</script>

<div class="buy_one_click">
  <div class="field">
		<p>Менеджер перезвонит вам, узнает все детали и сам оформит заказ на ваше имя</p>
		<form  id="one_click_buy" >
			<input id="buy_one_click" maxlength="21" type="text" name="phone" placeholder="+7 (___) __-__-___"/>
			<input id="buy_one_click2" maxlength="21" type="text" name="name" style="display:none;" value="<?=$page['name'];?>" />
			<input id="buy_one_clic3k" maxlength="21" type="text" name="price" style="display:none;" value=""/>
			<label for="buy_one_click"><span>Номер телефона</span></label>
			<div class="button" onClick="def()">OK</div>
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
			<?=$page['attr'];?>			
		</div>



		</div>

		<div class="clear"></div>

	</div>








	</div>



<?php



		if($page['parent_address'] == 'tracks'){
			$tab_images= array('/img/listgr.svg', '/img/comments.svg', '/img/truck.svg', '/img/listgr.svg', '/img/listgr.svg');
			$labels = array(array('desc','Описание'),array('review','Отзывы'),array('delivery-pay','Доставка и Оплата'),array('iws-italy','О ПРОДУКЦИИ IWT SRL ИТАЛИЯ'),array('about-tracks','Полезная информация о пледах'));
		
		} else if($page['parent_address'] == 'ortopedicheskie-reshetky'){
			$tab_images= array('/img/listgr.svg', '/img/comments.svg', '/img/truck.svg');
			$labels = array(array('desc','Описание'),array('review','Отзывы'),array('delivery-pay','Доставка и Оплата'));
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
			
			<p>
				<a href="/pokupatelyam/oplata-i-dostavka/">Прочитать полные условия доставки товаров</a>
			</p>

<br>
<h3>Оплата </h3>
			<p class="oplata_flex">
				<img class="ama_payment_icons" src="/img/oplata_nalichnye.gif" alt="оплата наличными"/> Наличными: курьеру в момент получения заказа.</p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_beznal.gif" alt="безналичный платеж"/> Безналичный платеж: для физических и юридических лиц. </p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_karta.gif" alt="банковской картой"/> Банковской карточкой в в шоу-руме.</p>
			<p>
			<br>
				<a href="/pokupatelyam/oplata/">Ознакомиться с полными условия оплаты</a>
			</p>

			';

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
					<label for="review"><span>Отзыв</span></label>
					<textarea rows="10" id="review" maxlength="21" type="text" name="review" ></textarea>
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
									<img src="/img/product/buffon2.jpg" height="auto" alt="Доставка продукции Magniflex. Джанлуиджи Буффон">
								</div>
								
								
							</div>
						</div>
						<? break;
					case 'review':
						echo('<div class="hnb_contcenter" style="display:none;"><div class="ama_review_tab_content" >'. $review_form .' '.$page[$label[0]]. '</div></div>');
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
									<img class="certImgLogo" width="243px" src="/img/product/certif_minzdorovrf.jpg" alt="МЗМПР">
									МИНИСТЕРСТВО ЗДРАВООХРАНЕНИЯ И МЕДИЦИНСКОЙ ПРОМЫШЛЕННОСТИ РФ признало матрасы и подушки Magniflex ОРТОПЕДИЧЕСКИМИ. Выдано соответствующее регистрационное удостоверение МЗМПР № 96/624.  <br><br>
									<img class="certImgLogo" width="133px" src="/img/product/certif_cuto.png" alt="ЦЕНТРАЛЬНЫЙ НИИ ТРАВМАТОЛОГИИ И ОРТОПЕДИИ им. Н.Н. ПРИОРОВА">
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
									<?php if($page['parent_address'] == 'tracks'){ ?>
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
											МИНИСТЕРСТВО ЗДРАВООХРАНЕНИЯ И МЕДИЦИНСКОЙ ПРОМЫШЛЕННОСТИ РФ признало подушки  Magniflex ОРТОПЕДИЧЕСКИМИ. Выдано соответствующее регистрационное удостоверение МЗМПР № 96/624. <br>
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

	<?php if($page['attr_cover_product'] || $page['attr_padding_product'] || $page['attr_comfort_product'] || $page['attr_layer_product'] || $page['attr_drape_product']) { ?>

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
							<?php if($page['attr_cover_product']) { ?>
								<li>
									<span class="word_layer"></span>
									<?if($page['attr_cover_product_title']){ ?>
										<h2><?=$page['attr_cover_product_title'];?></h2>
									<? } else {?>
										<h2>Ткань чехла</h2>
									<? } ?>
									<?=$page['attr_cover_product'];?>
								</li>
							<? } ?>
							<?php if($page['attr_padding_product']) { ?>
								<li>
									<span class="word_layer"></span>
									<?if($page['attr_padding_product_title']){ ?>
										<h2><?=$page['attr_padding_product_title'];?></h2>
									<? } else {?>
										<h2>Наполнитель</h2>
									<? } ?>
									<?=$page['attr_padding_product'];?>
								</li>
							<? } ?>
							<?php if($page['attr_comfort_product']) { ?>
								<li>
									<span class="word_layer"></span>
									<?if($page['attr_comfort_product_title']){ ?>
										<h2><?=$page['attr_comfort_product_title'];?></h2>
									<? } else {?>
										<h2>Уровень Комфорта</h2>
									<? } ?>
									<?=$page['attr_comfort_product'];?>
								</li>
							<? } ?>
							<?php if($page['attr_layer_product']) { ?>
								<li>
									<span class="word_layer"></span>
									<?if($page['attr_layer_product_title']){ ?>
										<h2><?=$page['attr_layer_product_title'];?></h2>
									<? } else {?>
										<h2>Основной Слой</h2>
									<? } ?>
									<?=$page['attr_layer_product'];?>
								</li>
							<? } ?>
							<?php if($page['attr_drape_product']) { ?>
								<li>
									<span class="word_layer"></span>
									<?if($page['attr_drape_product_title']){ ?>
										<h2><?=$page['attr_drape_product_title'];?></h2>
									<? } else {?>	
										<? if($page['parent_address2'] == 'pillows') { ?>
											<h2>Защитная наволочка</h2>
										<? } ?>
										<? if($page['parent_address2'] == 'mattresses') { ?>
											<h2>Гигиеническая простыня</h2>
										<? } ?>
									<? } ?>
									<?=$page['attr_drape_product'];?>
								</li>
							<? } ?>
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
	<div class="clear"></div>

	<?php if($page['rec_buy']) echo($page['rec_buy']); ?>

	<div class="clear"></div>
</div>

		</div>
<div class="newbie">
	<style type="text/css">
	.carousel-test  {
   max-width: 1140px; /* ширина всего блока */
   margin: 50px auto;
   width:100%;
   background-color: white;
}
.carousel-test-wrapper {
   margin: 10px 30px; /* отступы для стрелок */
   overflow: hidden; /* скрываем содержимое, выходящее за рамки основной области */
   position:relative;
}
.carousel-test-items {
   width: 10000px; /* устанавливаем большую ширину для набора элементов */
   position: relative; /* позиционируем блок относительно основной области карусели */
}
.carousel-test-block {
   float: left; /* выстраиваем все элементы карусели в ряд */
   width: 250px; /* задаём ширину каждого элемента */
   padding: 10px 10px 10px 0px; /* делаем оступы, чтобы элементы не сливались */
   height: 300px;
}

.carousel-test-block p{
   color: #686868;
   margin-left: 10px;
}

.maroon{
	color: maroon;
	margin-left: 5px;
	font-weight: bold;
	font-size: 14px;
	margin-left: -2px;
}

.pillow_name, .pillow_price{
	font-weight: bold;
}

.pillow_name{
	color: #3f3f3f;
}

.carousel-test-block img{
	display:block;
}

.pillow_title{
	color: #555;
}

/*********** BUTTONS ***********/
.carousel-button-left a, .carousel-button-right a{
   width: 25px;
   height: 36px;
   position: relative;
   top: 80px;
   cursor: pointer;
   text-decoration:none;
}
.carousel-button-left a{
   float: left;
   background-image: url(/img/navigation-previous.png);
   background-repeat: no-repeat;
   width: 50px;
   height: 80px;
}
.carousel-button-right a{
   width: 50px;
   height: 80px;
   float: right;
   background-image: url(/img/navigation-next.png);
   background-repeat: no-repeat;
}

.carousel-button-left a:hover{
   opacity: 1;
}
.carousel-button-right a:hover{

   opacity: 1;
}

.button_buy{
    padding: 0 13px;
    height: 20px;
    width: 75px;
    line-height: 20px;
    font-size: 12px;
    text-transform: uppercase;
    background: #636363;
    color: #FFF;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s;
    text-align: center;
    border: none;
    margin-left: 38%;
}

.carousel-img-block{
	width: 100%;
	height: 180px;
}

.carousel-img-block img{
	width: 250px;
	height: 180px;
	margin:auto;
}

.carousel-img-block img:hover{
	width: 250px;
	height: 180px;
	margin:auto;
	cursor: pointer;
}

</style>

<script type="text/javascript">
	$(document).on('click', ".carousel-button-right",function(){
	var carusel = $(this).parents('.carousel-test');
	right_carusel(carusel);
	return false;
});
//Обработка клика на стрелку влево
$(document).on('click',".carousel-button-left",function(){
	var carusel = $(this).parents('.carousel-test');
	left_carusel(carusel);
	return false;
});
function left_carusel(carusel){
   var block_width = $(carusel).find('.carousel-test-block').outerWidth();
   $(carusel).find(".carousel-test-items .carousel-test-block").eq(-1).clone().prependTo($(carusel).find(".carousel-test-items"));
   $(carusel).find(".carousel-test-items").css({"left":"-"+block_width+"px"});
   $(carusel).find(".carousel-test-items .carousel-test-block").eq(-1).remove();
   $(carusel).find(".carousel-test-items").animate({left: "0px"}, 200);

}
function right_carusel(carusel){
   var block_width = $(carusel).find('.carousel-test-block').outerWidth();
   $(carusel).find(".carousel-test-items").animate({left: "-"+ block_width +"px"}, 200, function(){
	  $(carusel).find(".carousel-test-items .carousel-test-block").eq(0).clone().appendTo($(carusel).find(".carousel-test-items"));
      $(carusel).find(".carousel-test-items .carousel-test-block").eq(0).remove();
      $(carusel).find(".carousel-test-items").css({"left":"0px"});
   });
}

$(function() {
//Раскомментируйте строку ниже, чтобы включить автоматическую прокрутку карусели
	auto_right('.carousel-test:first');
})

// Автоматическая прокрутка
function auto_right(carusel){
	setInterval(function(){
		if (!$(carusel).is('.hover'))
			right_carusel(carusel);
	}, 3000)
}
// Навели курсор на карусель
$(document).on('mouseenter', '.carousel-test', function(){$(this).addClass('hover')})
//Убрали курсор с карусели
$(document).on('mouseleave', '.carousel-test', function(){$(this).removeClass('hover')})
</script>


	<h2 class="pillow_title" align="center"> К этому товару рекомендуется </h2>

	<div class="carousel-test">
	   <div class="carousel-test shadow">
	      <div class="carousel-button-left"><a href="#"></a></div>
	      <div class="carousel-button-right"><a href="#"></a></div>
			<div class="carousel-test-wrapper">
			   <div class="carousel-test-items">
			<?php

				foreach ($testerok as $value) {
				 ?>
				          <div class="carousel-test-block">
				          <div class="carousel-img-block">
				          <a href="<?php echo "{$value['carousel_href']}"; ?>"><img src="<?php echo "{$value['carousel_img']}"; ?>" alt="" /></a>
				          </div>
				          <p class="pillow_name" align="center"><?php echo "{$value['carousel_name']}"; ?></p>
				          <p class="oldprice"> Цена: <span class="maroon" align="left"><s><?php echo "{$value['carousel_oldprice']} р."; ?></s></span>
				          <p class="pillow_price " align="left"><?php echo "{$value['carousel_price']} р."; ?><a href="<?php echo "{$value['carousel_href']}"; ?>"> <button class="button_buy" align="right">Купить</button> </a> </p>
				          </div>
				<?php
				}
				?>


			   </div>
			</div>
	   </div>
	</div>
	</div>

<style type="text/css">
	.newbie{
		display: none;
	}
</style>
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
	background:none;
	height: 80px;

}
.breadcrumbs_block li a,
.breadcrumbs_block li span {
color:#666;
}
</style>