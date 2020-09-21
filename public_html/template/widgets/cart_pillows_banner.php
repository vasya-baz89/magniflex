<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}
set_time_limit(3);

include_once('../../data/products.php');

function get_cart_pillows_banner(){
	global $products;
	$cart_pillows_items = array('FreshGel+Wave','ORTHOMASSAGE','MemoGel+Standart');	
	/* название картинок должно совпадать с названием товара (сейчас так) */
	$cart_pillows_img_folder = 'pillows_widget';	//папка img/product/ для хранение картинок с тенями для этого виджета
	$items_max_count = 2; //количество подушек для вывода
	if(count($cart_pillows_items) < $items_max_coun)
		$items_max_coun = count($cart_pillows_items);	//если подушек ($cart_pillows_items) меньше то выведет что есть
	
	$items_show = array();
	while(count($items_show) < $items_max_count){
		$n = rand(0,count($cart_pillows_items)-1);
		
		if(!isset($items_show[$n])){
			foreach($products as $el){
				if($el['address'] == $cart_pillows_items[$n]){
					$items_show[$n] = $el;
					break;
				}
			}
		}
	}
	$cart_pillows_banner = '<ul class="hnb_mypohul cart_pillows_banner">';
	
	foreach($items_show as $el){
		$cart_pillows_banner .= '<li class="hnb_mypohli">
			<a href="/catalog/'.$el['parent_address'].'/'.$el['address'].'/"><img src="/img/product/'.$cart_pillows_img_folder.'/'.$el['address'].'.png" /><br>'.$el['name'].'</a><br>
			<div class="hnb_mypohliconttext">
				<span class="myprice">'.format_price($el['price']*0.75).' руб. <span>вместо '.format_price($el['price']).' руб.</span> </span>
			</div>
		</li>';
	}

	$cart_pillows_banner .= '</ul>';
	return $cart_pillows_banner;
}
?>