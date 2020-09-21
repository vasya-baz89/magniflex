<?php
header("Content-Type: text/xml; charset=utf-8");
define('sf_magniflex',true);

set_time_limit(0);

include_once('../data/products.php');
include_once('../functions.php');

$upload_all = true;

$site_url = 'http://www.magniflex.ru';
$cats = array(
	array(1,'Матрасы',array('orthopedic_mattresses','mattresses')),
	array(2,'Элитный матрасы',array('elitnye-matrasy')),
	array(3,'Детские матрасы',array('detskie-ortopedicheskie-matrasy','detskie-matrasy')),
	array(4,'Подушки',array('pillows','vacuum_pillows','Orthopedic_pillows','gelevye-podushki')),
);

$sales_notes = array(
	'При покупке матраса - 25% скидка на подушку!',
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

$file_data .= '<?xml version="1.0" encoding="utf-8"?>
';

$file_data .= '<torg_price date="'.date('Y-m-d H:i').'">
<shop>
	<name>Magniflex</name>
	<company>Magniflex</company>
	<url>'.$site_url.'/</url>
	<currencies>
	<currency id="RUB" rate="1"/>
	</currencies>
	<categories>';
	
foreach($cats as $cat){
	$file_data .= '<category id="'.$cat[0].'">'.$cat[1].'</category>';
}

$file_data .= '
	</categories>
	<offers>';
	
foreach($products as $id => $prod){
	
	$vendor = 'Magniflex (Италия)';
	$country_of_origin = 'Италия';
	
	$el_desc = $prod['desc'];
	if($prod['yml_desc']) $el_desc = $prod['yml_desc'];
	if(!$el_desc) $el_desc = $prod['rec_buy'];
	
	$el_price = 0;
	if($prod['price']) $el_price = $prod['price'];
	else $el_price = $prod['sizes'][0][1];
	
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
	if(!$upload_all && (!isset($prod['yml_torgmail']))) continue; 
	if($prod['sizes']){
		foreach($prod['sizes'] as $sz_id => $size){
			if(is_array($prod['yml_torgmail']) && (!$upload_all)){
				$can_this_size = false;
				foreach($prod['yml_torgmail'] as $yml_size){
					if($size[0] == $yml_size)
						$can_this_size = true;
				}
				if(!$can_this_size) continue;
			}
			
			$file_data .= '
		<offer id="'.($id*100+1+$sz_id).'" available="true">
			<url>'.$site_url.'/catalog/'.$prod['parent_address'].'/'.$prod['address'].'/?size='.$size[0].'</url>
			<price>'.$size[1].'</price>
			<currencyId>RUB</currencyId>
			<categoryId>'.$el_cat_id.'</categoryId>
			<picture>'.str_replace(' ','%20',yandex_text2xml($site_url.$prod['img'])).'</picture>
			<typePrefix>Матрас</typePrefix>
			<name>'.yandex_text2xml($el_name.' '.$size[0],true,true).'</name>'.(($vendor)?('
			<vendor>'.$vendor.'</vendor>'):('')).'
			<description>'.yandex_text2xml(html_entity_decode($el_desc),true,true).'</description>
			<delivery>true</delivery>
			<pickup>true</pickup>
		</offer>';
		}
	}
	else{
		$file_data .= '
		<offer id="'.($id*100+1).'" available="true">
			<url>'.$site_url.'/catalog/'.$prod['parent_address'].'/'.$prod['address'].'/</url>
			<price>'.$el_price.'</price>
			<currencyId>RUB</currencyId>
			<categoryId>'.$el_cat_id.'</categoryId>
			<picture>'.str_replace(' ','%20',yandex_text2xml($site_url.$prod['img'])).'</picture>
			<typePrefix>Матрас</typePrefix>
			<name>'.yandex_text2xml($el_name,true,true).'</name>'.(($vendor)?('
			<vendor>'.$vendor.'</vendor>'):('')).'
			<description>'.yandex_text2xml(html_entity_decode($el_desc),true,true).'</description>
			<delivery>true</delivery>
			<pickup>true</pickup>
		</offer>';
	}
}

$file_data .= '
	</offers>
</shop>
</torg_price>';

echo($file_data);

?>