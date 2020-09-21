<?php
if (!defined('sf_magniflex')) {
	include_once($_SERVER['DOCUMENT_ROOT'] . '/error_403.php');
}
?>

<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/data/products.php');
	$old_price = 0;
    foreach($products as $product){
        if($page['outlet_q']['product'] == $product['address']){
			foreach($product['sizes'] as $size){
				if($size[0] == $page['outlet_q']['size']){
					$old_price = $size[1];
					break;
				}
			}
            break;
        }
	}
	
	if($old_price == 0){
		$old_price = $page['outlet_q']['old_price'];
	}

?>
<div id="breadcrumbs" style="background: none;">
	<div class="breadcrumbs_block">
		<ul>
			<li>		
				<a href="/" itemprop="url" title="Марка №1 в Италии"><span itemprop="title">Марка №1 в Италии</span></a>
			</li>
			<li>		
				<a href="/outlet/" itemprop="url" title="Outlet"><span itemprop="title">Outlet</span></a>
			</li>

		</ul>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="/template/css/outlet.css?v=4" />

<div id="product" class="hodi_extra_class ama_outlet_product">
	<div class="fixed_block_compare_content compare_fixed_empty">
		<div class="fixed_block_left">
			<div class="fixed_block_img"></div>
			<div class="fixed_block_content">
				<p>В списке сравнения <span class="count-compare-products">0</span></p>
			</div>
		</div>
		<div class="fixed_block_button">
			<a href="/compare">СРАВНИТЬ</a>
			<a class="clear_compare_local_storage" onclick="clearLocalStorage()">ОЧИСТИТЬ</a>
		</div>
	</div>
	

	<div class="boxImgInfo">
	  <div class="image_block" itemscope="" itemtype="http://schema.org/ImageGallery">
		<div class="easyzoom easyzoom--adjacent" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">			
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
				?>
			</div>
			<a href="<?=$page['img'];?>" class="product_img boxer relgallery"   title="<?=$page['img_alt'];?>" >
				<img src="<?=$page['img'];?>" alt="<?=$page['img_alt'];?>" class="boxer relgallery" title="<?=$page['img_alt'];?>" itemprop="name" />
			</a>
			</div>
				<div class="clear"></div>
		</div>
		<div class="right_block">
		<h1><?=$page['name'];?></h1>
		<div class="ama_mobile_carousel" style="display:none;">
				<?php
					for($i=0; $i<10; $i++){
						if ($page['img_carousel'][$i] != null) {
							?>
								<img src="<?=$page['img_carousel'][$i];?>" alt="<?=$page['img_alt'];?>" itemprop="name" />
							<?php
						}
					}
				?>
		</div>
	<div class="sizes">
						
			<div class="default_container_size">
				<span class="articul_and_size">Артикул: <?=$page['outlet_q']['articul']?> <br><br>   Размер: <?=$page['outlet_q']['size']?></span>

				<div id="prod_size" style="opacity: 0; position: absolute; right: -9999px;"><?=$page['outlet_q']['size']?></div>

			</div>
							
		<div class="product_top">
			<div>
				<div class="price_list_wrap">					
					<div class="default_container_price">
						<div class="price">
							<span><?=number_format($page['outlet_q']['price'], 0, ' ', ' ')?> <span style="font-weight: normal;" class="rub_price">P</span></span>
						</div>
						<div class="old_price">
							<span><?=number_format($old_price, 0, ' ', ' ')?> <span style="font-weight: normal;" class="rub_price">P</span></span>
						</div>
					</div>
				
													<!-- <div class="black-friday-magni" >
						<div class="friday-magni-text"><p>Скидка<br> 0%</p></div>
						<div class="friday-magni-img"><a href="/skidki-magniflex/black-friday/"><img src="/img/Layer 1.png"></a></div>
					</div> -->
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
						<!-- ds favourite -->


					</div>
		</div>
			</div>

		<div class="ama_product_buttons">
			<div id="prod_buy_ama" onclick="add_to_cart('<?=$page['outlet_q']['name'];?>', '<?=$page['outlet_q']['size'];?>', 1, <?=$page['outlet_q']['price'];?>)">
				<span>Купить</span>
			</div>

			<div id="prod_buy1">
				<span>ЗАКАЗАТЬ В 1 КЛИК</span>
			</div>
		</div>

<script>
dataLayer.push({
    "ecommerce": {
        "detail": {
            "products": [
                {
                    "id": "Ортопедический матрас Stretching 9",
                    "name" : "Ортопедический матрас Stretching 9",
                    "price": 99000,
                    "brand": "Magniflex",
                    "category": "Элитные матрасы",
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
				$("#info").show()

				$("#info").html(`<span>Наш менеджер свяжется с Вами</span>`)
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
					$('.comment_stars').css('max-height', '100px')
				}
			});
		});
	})
</script>

<div class="buy_one_click">
  <div class="field">
		<p>Менеджер перезвонит вам, узнает все детали и сам оформит заказ на ваше имя</p>
		<form id="one_click_buy">
			<input id="buy_one_click" maxlength="21" type="text" name="phone" placeholder="+7 (___) __-__-___">
			<input id="buy_one_click_size" maxlength="21" type="text" name="size" style="display:none;" value="<?=$page['outlet_q']['size'];?>">
			<input id="buy_one_click2" maxlength="21" type="text" name="name" style="display:none;" value="(Outlet) <?=$page['name'];?>">
			<input id="buy_one_clic3k" maxlength="21" type="text" name="price" style="display:none;" value="<?=$page['outlet_q']['price'];?> руб">
			<label for="buy_one_click"><span>Номер телефона</span></label>
			<div class="button ama-one-click-buy" onclick="ym(28675206, 'reachGoal', 'one_click_ok'); ym(28675206, 'reachGoal', 'order_order'); return true;">OK</div>
		</form>
	</div>
	<p id="info"></p>
</div>

<div class="ama_small_description">
	<?=$page['outlet_q']['desc'];?>
</div>

			
		
			<div class="product_attr" style="">
				
				<style>
				#popup_skidka{display:none;}
				#popup_skidka.hnb_displayskidka{display:block;}
				#breadcrumbs {
					background-image: url(/img/STRETCHING_250.jpg);
					height: 250px;
				}
				</style>
					<ul><li>
					СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
					<li><b>Высота</b>:  <?=$page['attr_cat_product1'];?></li><li><b>Степень жесткости</b>: <?=$page['attr_cat_product3'];?><!--Средней жесткости--></li>
					
					
					<li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
							
			</div>



			<div class="textModel">
				<span onclick="showModalDesc()">Описание модели</span>
			</div>
			<div class="textModel link_to_new">
				<?
					if($page['parent_address2'] == 'mattresses'){
						$txt_b = 'Перейти на новый матрас';
					} else {
						$txt_b = 'Перейти на новую подушку';
					}
				?>

				<a style="text-decoration: none;" href="<?=$page['outlet_q']['donor_link']; ?>" data-test="<?=$page['parent_address2']?>"><?=$txt_b;?></a>
			</div>
		</div>
		<div class="clear"></div>
	</div>


</div>



<style>

</style>



<script>
var link = '<?=$page["outlet_q"]["donor_link"]; ?>'

console.log('ajax_link  => ' + link)

$.ajax({
	url: link,
	type: 'GET',
	success: function(data) {
		$('.watch_review_content').html($(data).find('#content').html());
		$('.watch_review_content .sizes').remove()
		$('.watch_review_content .fixed_block_compare_content').remove()
		$('.watch_review_content .product_top_plashka').remove()
		$('.watch_review_content #breadcrumbs').remove()
		$('.watch_review_content #popup_another_size2').remove()
		$('.watch_review_content #prod_buy').remove()
		$('.watch_review_content .compare-button-card').remove()
		$('.watch_review_content .coin-slider').remove()
		$('.watch_review_content .buy_one_click').remove()
		$('.watch_review_content .sf_labels').remove()
		$('.watch_review_content .sf_info .hnb_contcenter:eq(0)').show()
		$('.watch_review_content #product').remove()
		$('.watch_review_content .half-width').css('width', '100%')
		// $('.watch_review_content').css('overflow-x', 'hidden')

		$('.watch_review_content .ama_product_content').css('padding', '0 20px')

		var letterArr = ['A', 'B', 'C', 'D', 'E', 'G']
		var letters = document.querySelectorAll('.watch_review_content .word_layer')

		if (letters) {
			for (var i = 0; i < letters.length; i++) {
				letters[i].innerText = letterArr[i]
			}
		}
		if (window.innerWidth < 800) {
			let products_images = $('.ama_mobile_carousel').bxSlider({
				pager: true,
				pagerType: 'full',
				touchEnabled: true,
				onSlideAfter: function() {
					if (typeof processScroll != 'undefined') processScroll();
				}
			})
		}
	}
})
</script>



<div id="desc_modal" style="display: none;">
	<div class="overlay" onclick="hide_popup_ama()" style="display: none;"></div>
	<img src="/img/x.svg" class="review_modal_cross" onclick="hide_popup_ama()" style="display: none;">
	<div class="watch_review_content" style="opacity: 0;"></div>
</div>




<div class="fixed-fhone-ama subscribe">
	<div class="fixed-fhone-block">
		<div class="close-Iphone-ama">
			<img class="img_lazy_load" src="/img/close-phone.png" data-src="/img/close-phone.png" alt="close-phone"
				style="opacity: 1;">
		</div>
		<div class="fixed-fhone-left">
			<img class="img_lazy_load" src="/img/no-image.png" data-class="iPhone-fixes" alt="iphone">
		</div>
		<div class="fixed-fhone-rigth">
			<p id="subscribe_btn" class="fhone-rigth-textPhone">Подписаться</p>
			<p class="fhone-rigth-textUnder">Мы будем присылать Вам информацию о новых уцененных матрасах</p>
		</div>
	</div>
</div>

<script>

	
$('.ama-one-click-buy').click(function(){

console.log("click");
if($('#buy_one_click').val() != ''){
	
	$("#info").html("<span>Подождите, секунду...</span>")
	$("#info").show(300)

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