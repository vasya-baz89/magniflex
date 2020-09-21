<?php
header("Content-Type: text/xml; charset=utf-8");
define('sf_magniflex',true);

set_time_limit(0);

include_once('../data/products.php');
include_once('../functions.php');

$site_url = 'https://www.magniflex.ru';
$cats = array(
	array(1,'Матрасы',array('orthopedic_mattresses','mattresses','collectio-Stile','collectio-Memorie','collectio-Pensiero','')),
	array(2,'Элитный матрасы',array('elitnye-matrasy','elitnye-virtus','elitnye-harmony','elitnye-magnificent','elitnye-imperiale','elitnye-comfort-delux','elitnye-Stretching','elitnye-FreshGel','elitnye-rest')),
	array(3,'Детские матрасы',array('detskie-ortopedicheskie-matrasy','detskie-matrasy')),
	array(4,'Подушки',array('pillows','vacuum_pillows','Orthopedic_pillows','gelevye-podushki')),
	array(5,'Основания и решетки',array('bases','ortopedicheskie-reshetky','')),
	array(6,'Кровати',array('beds')),
	array(7,'Пледы',array('plaids')),
);

function yandex_text2xml($text, $bHSC = false, $bDblQuote = false)
{

	$bHSC = (true == $bHSC ? true : false);
	$bDblQuote = (true == $bDblQuote ? true: false);

	if ($bHSC)
	{
		$text = htmlspecialchars(strip_tags ($text));
		if ($bDblQuote)
			$text = str_replace('&quot;', '"', $text);
	}
	$text = preg_replace("/[\x1-\x8\xB-\xC\xE-\x1F]/", "", $text);
	$text = str_replace("\"", "&quot;", $text);
	$text = str_replace("&", "&amp;", $text);
	$text = str_replace(">", "&gt;", $text);
	$text = str_replace("<", "&lt;", $text);
	$text = str_replace("'", "&apos;", $text);
	
	return $text;
}

$file_data .= '<?xml version="1.0"?>
<rss xmlns:g="http://base.google.com/ns/1.0" version="2.0">
	<channel>
		<title>Magniflex</title>
		<link>'.$siteUrl.'</link>
		<description>Magniflex.ru официальный сайт! Ортопедические матрасы Magniflex из Италии.</description>
';

foreach($products as $id => $prod){
	$vendor = 'Magniflex';
	$country_of_origin = 'Италия';
	
	$el_desc = $prod['desc'];
	if($prod['yml_desc']) $el_desc = $prod['yml_desc'];
	if(!$el_desc) $el_desc = $prod['rec_buy'];
	$el_desc = strip_tags($el_desc);
	
	$el_price = 0;
	if($prod['price']) $el_price = $prod['price'];
	else $el_price = $prod['sizes'][0][1];
	
	if(isset($prod['available'])){
		if(isset($prod['available']['status'])){
			if(!$prod['available']['status']) continue;
		}
	}
	
	$el_cat_id = 0;
	foreach($cats as $cat){
		foreach($cat[2] as $cat_addr){
			if($cat_addr == $prod['parent_address'])
				$el_cat_id = $cat[0];
		}
	}
		
	$el_name = $prod['name'];
	if($el_cat_id > 0 && $el_cat_id < 4) $el_name = 'Матрас Magniflex '.$prod['name'];
	
	if(!$el_cat_id || !$el_price) continue;
	if(!$prod['address'] || !$prod['parent_address'] || !$site_url) continue; //фикс от тестовых товаров без адреса
	
	$google_category = 'Furniture > Beds & Accessories > Mattresses';
	if($el_cat_id == 4){
		$google_category = 'Home & Garden > Linens & Bedding > Bedding > Pillows';
	}
	if($el_cat_id == 5 || $el_cat_id == 6){
			$google_category = 'Furniture > Beds & Accessories > Beds & Bed Frames';
	}
	else if($el_cat_id == 7){
		$google_category = 'Home & Garden > Linens & Bedding > Bedding > Blankets';
	}
	
	$custom_label_0 = 'Остальное';
	if($el_cat_id > 0 && $el_cat_id < 4) $custom_label_0 = 'Матрасы';
	if($el_cat_id == 4) $custom_label_0 = 'Подушки';
	
	if($prod['sizes']){
		foreach($prod['sizes'] as $sz_id => $size){
			if(is_array($prod['yml_yandex']) && (!$upload_all)){
				$can_this_size = false;
				foreach($prod['yml_yandex'] as $yml_size){
					if($size[0] == $yml_size)
						$can_this_size = true;
				}
				if(!$can_this_size) continue;
			}
			
			$price = $size[1];
			//скидка
			$old_price = '';
			if(is_discount_koef($prod,$size[0])){
				$old_price = $price;
				$price = intval((1-$prod['discount_koef']['price_koef'])*$old_price);
			}
			if(is_discount_newprice($prod,$size[0])){
				$old_price = $price;
				$price = intval($prod['discount_koef']['prices'][$size[0]]);
			}
			if($old_price) $old_price = '
			<oldprice>'.$old_price.'</oldprice>';
			
		$file_data .= '
		<item>
			<g:id>'.($id*100+1+$sz_id).'</g:id>
			<g:title>'.yandex_text2xml($el_name.' '.$size[0],true,true).'</g:title>
			<g:description>'.yandex_text2xml(html_entity_decode($el_desc),true,true).'</g:description>
			<g:link>'.$site_url.'/catalog/'.$prod['parent_address'].'/'.$prod['address'].'/?size='.rawurlencode($size[0]).'</g:link>
			<g:image_link>'.str_replace(' ','%20',yandex_text2xml($site_url.$prod['img'])).'</g:image_link>
			<g:condition>new</g:condition>
			<g:availability>in stock</g:availability>
			<g:price>'.$price.' RUB</g:price>'.(($vendor)?('
			<g:brand>'.$vendor.'</g:brand>'):('')).'
			<g:google_product_category>'.yandex_text2xml($google_category).'</g:google_product_category>
			<g:custom_label_0>'.$custom_label_0.'</g:custom_label_0>
		</item>';
		}
	}
	else{
		
		//скидка
		$old_price = '';
		if(is_discount_koef($prod,false)){
			$old_price = intval($el_price/(1-$prod['discount_koef']['price_koef']));
		}
		if(is_discount_newprice($prod,false)){
			$old_price = $el_price;
			$el_price = intval($prod['discount_koef']['prices']);
		}
		if($old_price) $old_price = '
		<oldprice>'.$old_price.'</oldprice>';
	
		$file_data .= '
		<item>
			<g:id>'.($id*100+1).'</g:id>
			<g:title>'.yandex_text2xml($el_name,true,true).'</g:title>
			<g:description>'.yandex_text2xml(html_entity_decode($el_desc),true,true).'</g:description>
			<g:link>'.$site_url.'/catalog/'.$prod['parent_address'].'/'.$prod['address'].'/</g:link>
			<g:image_link>'.str_replace(' ','%20',yandex_text2xml($site_url.$prod['img'])).'</g:image_link>
			<g:condition>new</g:condition>
			<g:availability>in stock</g:availability>
			<g:price>'.$el_price.' RUB</g:price>'.(($vendor)?('
			<g:brand>'.$vendor.'</g:brand>'):('')).'
			<g:google_product_category>'.yandex_text2xml($google_category).'</g:google_product_category>
			<g:custom_label_0>'.$custom_label_0.'</g:custom_label_0>
		</item>';
	}
}

$file_data .= '
	</channel>
</rss>';

echo($file_data);
?>