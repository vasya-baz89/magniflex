<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

$_tmr_mailretarg = '<script type="text/javascript">var _tmr = _tmr || []; _tmr.push({ type: "itemView", productid: "", pagetype: "category", totalvalue: "", list: "1" });</script>';
?>

<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/data/products.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/data/outlet.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/template/widgets/ama_filter.php');

	$filter = new Filter;
	$outlet_products = [];

	foreach($product_outlet as $outlet){
		foreach($products as $product){
			if($outlet['product'] == $product['address']){
				if($outlet['small_img']){
					$product['small_img'] = $outlet['small_img'];
				}
				if(count($outlet['images']) > 0){
					$product['img_preview'] = $outlet['images'];
				}
				$product['name'] =  "{$product['name']}";
				$product['outlet_q'] = $outlet;
				
				foreach($product['sizes'] as $size){
					if($size[0] == $outlet['size']){
						$product['outlet_q']['old_price'] = number_format($size[1], 0, ' ', ' ');
						break;
					}
				}

				array_push($outlet_products, $product);	
				
				
				break;
			}
		}
	}
?>
<link rel="stylesheet" type="text/css" href="/template/css/outlet.css" />
<!-- <h1 class="filter_title_h1">Outlet</h1> -->
		<div class="titleSubtitle titleSubtitle--home filter_title_h1">
			<h1 class="title title--blue">OUTLET MAGNIFLEX</h1>
			<h2 class="title title--blue">Уцененные матрасы и подушки Magniflex со скидкой!</h2>
			<p class="subtitle subtitle--grey">Распродажа уцененных матрасов и подушек с незначительными дефектами или новых матрасов с экспозиции.</p>
		</div>
<?=$filter->buildFilter($outlet_products);?>

<div id="category" class="outletCategory">


	<div class="category">
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

		<? foreach($outlet_products as $key => $product):?>
		<div class="outlet-product">
		
		<a href="<?=($product['outlet_q']['address']);?>" title="<?=$product['name'];?>">
			<div class="outlet-block">
				<div class="outlet-left">


					

					<?
						$step = 0;
						switch(count($product['img_preview'])){
							case 1:
								$step = 100;
								break;
							case 2:
								$step = 50;
								break;
							case 3:
								$step = 33;
								break;
							case 4:
								$step = 25;
								break;
							default:
								$step = 20;
								break;	
						}
					?>

					<div class="ama_hvr_image" style="left: 0%; width:<?=$step;?>%;"></div>
					<img class="ama_hvr_image_img" style="display: block;" src="<?=$product['small_img']; ?>" alt="">
					<span class="ama_hvr_border" style="left:4%; width:<?=$step - 6;?>%;"></span>
					
					<? for ($i=1; $i < count($product['img_preview']) + 1; $i++):?>
						<? if($i < 5 && $product['img_preview'][$i - 1]): ?>
							<div class="ama_hvr_image" style="left:<?=$step * $i;?>%; width:<?=$step;?>%;"></div>
							<img class="ama_hvr_image_img" src="<?=$product['img_preview'][$i - 1]; ?>" alt="">
							<span class="ama_hvr_border" style="left:<?=$step * $i + 3;?>%; width:<?=$step - 6;?>%;"></span>
							<? continue; ?>
						<? endif; ?>
						<? break; ?>
					<? endfor; ?>
					<img src="<?=$product['small_img'];?>" alt="<?=$product['small_img_alt'];?>" alt="<?=$product['name'];?>">
				</div>
				<div class="outlet-right">
					<div class="outlet-left-colum">
						<div class="outlet-top">
							<p class="outlet-top-main"><?=$product['name'];?></p>
							<div>
								<p class="spec-left">АРТИКУЛ <?=($product['outlet_q']['articul']);?></p>
							</div>
						</div>
						<div class="outlet-botom">
							<div class="botom-flex">
								<p class="spec-left">Размер</p>
								<p class="spec-right" data-filter="size"><?=($product['outlet_q']['size']);?> см</p>
							</div>
							<div class="botom-flex">
								<p class="spec-left">ВЫСОТА</p>
								<p class="spec-right"><?=($product['attr_cat_product1']);?></p>
							</div>
							<div class="botom-flex">
								<p class="spec-left fix-padd">ЖЕСТКОСТЬ</p>
								<p class="spec-right" data-filter="zhest"><?=($product['attr_cat_product3']);?></p>
							</div>
							<div class="botom-flex">
								<p class="spec-left fix-padd2">Коллекция</p>
								<p class="spec-right" data-filter="collection"><?=($product['outlet_q']['collection']);?></p>
							</div>
							<div class="botom-flex">
								<div class="outlet-colum-line3">
									<p><?=($product['outlet_q']['desc']);?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="outlet-right-colum">
						<div class="outlet-colum-line1">
							
							<div class="line1-bottom">
								<div class="line1-bottom-main">
									<div class="line1-submain">
										<div class="line1-submain-main">
											<p> <?=(number_format($product['outlet_q']['price'], 0, ' ', ' '));?> <span class="rub_price">P</span></p>
											<p>цена</p>
										</div>
										<div class="line1-submain-main">
										<? if(!$product['outlet_q']['old_price']) { ?>
											<p class="category_product_oldprice"> <?=($product['outlet_q']['oldprice']);?> <span style="font-weight: normal;" class="rub_price">P</span></p>	
										<? } else { ?>
											<p class="category_product_oldprice"> <?=($product['outlet_q']['old_price']);?> <span style="font-weight: normal;" class="rub_price">P</span></p>	
										<? }  ?>	
											<p>цена нового</p>	
										</div>
									</div>
								</div>
								<p class="red-price">скидка 30%</p>
								<div class="line2-top">
									<p class="spec-left">СОСТОЯНИЕ <span data-filter="status"><?=($product['outlet_q']['status']);?></span></p>
								</div>
							</div>
						</div>
						<div class="outlet-colum-line2">
							<div class="line2-top" style="height: 53px;">
									
							</div>
							<div class="ama_product_buttons">
								<div id="prod_buy1">
									<span>Подробнее</span>
								</div>
								<div id="prod_buy_ama"  onclick="add_to_cart('<?=$product['outlet_q']['name'];?>', '<?=$product['outlet_q']['size'];?>', 1, <?=$product['outlet_q']['price'];?>)">
									<span>Купить</span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</a>
		
	</div>
	<? endforeach; ?>
	<!--	<div class="category_products">
			<? foreach($outlet_products as $product):?>
				<div class="category_product outlet-height" data-available="true" style="display: block;" data-id="70" data-price="30890<spanclass=&quot;rub_price&quot;>P</span>">
					<div class="ama_product_block">		
						<a href="<?=($product['outlet_q']['address']);?>" class="category_product_img" title="<?=$product['name'];?>">																							
							<div class="detail1">								
								<div class="detail1_block">
									<span>
										Узнать больше
									</span>
								</div>
							</div>
							<img src="<?=$product['small_img'];?>" alt="<?=$product['small_img_alt'];?>" />
						</a>
						<input type="hidden" name="min_size" value="80x200">
							
							<a href="<?=($product['outlet_q']['address']);?>" class="category_product_name" title="<?=$product['name'];?>"><?=$product['name'];?></a>												
							<div class="small_desc">
								<div class="ama_product_desc">							
									<div>
										<p class="spec-left">Колеция</p>
										<p class="spec-right" data-filter="collection"><?=($product['outlet_q']['collection']);?></p>
									</div>
								
									<div>
										<p class="spec-left">Размер</p>
										<p class="spec-right" data-filter="size"><?=($product['outlet_q']['size']);?></p>
									</div>
									<div>
										<p class="spec-left">ВЫСОТА</p>
										<p class="spec-right"><?=($product['attr_cat_product1']);?></p>
									</div>
									<div>
										<p class="spec-left">ЖЕСТКОСТЬ</p>
										<p class="spec-right" data-filter="zhest"><?=($product['attr_cat_product3']);?></p>
									</div>
									<div>
										<p class="spec-left">СОСТОЯНИЕ</p>
										<p class="spec-right" data-filter="status"><?=($product['outlet_q']['status']);?></p>
									</div>
									<div>
										<p class="spec-left">АРТИКУЛ</p>
										<p class="spec-right"><?=($product['outlet_q']['articul']);?></p>
									</div>
									<div>
										<span class="ama_product_type"><?=($product['outlet_q']['desc']);?></span>									
									</div>
									<div class="ama_desc_beds"></div>																	
								</div>						</div>
						<div class="category_product_price">
							<p>
								<span class="category_product_oldprice"> <?=($product['outlet_q']['old_price']);?> <span style="font-weight: normal;" class="rub_price">P</span></span>		
								<span> <?=($product['outlet_q']['price']);?><span class="rub_price">P</span></span>							
							</p>
							<div class="category_product_buy">
								Купить
							</div>
						</div>
						<div class="category_product_link">
							<a href="<?=($product['outlet_q']['address']);?>">
								Подробнее
							</a>
						</div>
						<div class="category_product_quantity">
							<a href="javascript:void(0)" class="sf_minus" rel="nofollow">-</a>
							<input type="text" class="sf_base_quantity" name="quantity" value="1">
							<a href="javascript:void(0)" class="sf_plus" rel="nofollow">+</a>
							<span>шт</span>
						</div>
					</div>
				</div>
			<? endforeach; ?>
		</div>	-->
		
		
	</div>
  </div>
</div>

<div class="fixed-fhone-ama subscribe">
	<div class="fixed-fhone-block">
		<div class="close-Iphone-ama">
			<img class="img_lazy_load" src="/img/close-phone.png" data-src="/img/close-phone.png" alt="close-phone" style="opacity: 1;">
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



<script src="/template/js/outlet.js"></script>
<?php if($page['under_text']) { echo($page['under_text']); } ?>


<style>
	body{
		overflow-x: hidden;
	}
</style>