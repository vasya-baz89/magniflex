<?php
header("Content-Type: text/xml; charset=utf-8");
define('sf_magniflex',true);

set_time_limit(0);

include_once('../data/products.php');
include_once('../functions.php');

$upload_all = true;
$custom_yandex = false;
if(isset($_REQUEST['custom'])){ $custom_yandex = true; }
$partners = false;
if(isset($_REQUEST['partners'])){ $partners = true; }
	
$site_url = 'https://www.magniflex.ru';
$cats = array(
	array(1,'Матрасы',array('orthopedic_mattresses','mattresses','collectio-Stile','collectio-Memorie','collectio-Pensiero','')),
	array(2,'Элитный матрасы',array('elitnye-matrasy','elitnye-virtus','elitnye-harmony','elitnye-magnificent','elitnye-imperiale','elitnye-comfort-delux','elitnye-Stretching','elitnye-FreshGel','elitnye-rest')),
	array(3,'Детские матрасы',array('detskie-ortopedicheskie-matrasy','detskie-matrasy')),
	array(4,'Подушки',array('pillows','vacuum_pillows','Orthopedic_pillows','gelevye-podushki')),
);

if($partners){
	$cats []= array(5,'Основания и решетки',array('bases','ortopedicheskie-reshetky',''));
	$cats []= array(6,'Кровати',array('beds'));
	$cats []= array(7,'Пледы',array('plaids'));
}

$sales_notes = array(
	'Лучшая цена у нас: Нашли дешевле? Предложим ниже!',
);
if($partners){
	$sales_notes = array('');
}

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
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
';

$file_data .= '<yml_catalog date="'.date('Y-m-d H:i').'">
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

//загружаем товары из списка (custom_yandex.txt), код плохой, лень переписывать ;)
$custom_yandex_arr = array();
if($custom_yandex){
	$custom_yandex_txt = file_get_contents('custom_yandex.txt');
	if(!empty($custom_yandex_txt)){
		$custom_yandex_txt = explode('
',$custom_yandex_txt);
		
		//var_dump($custom_yandex_txt);
		
		foreach($custom_yandex_txt as $custom_yandex_txt_el){
			$custom_yandex_txt_el = explode('[',$custom_yandex_txt_el);
			if(isset($custom_yandex_txt_el[0]) && isset($custom_yandex_txt_el[1])){
				for($i=''; strlen($i)<100; $i.='|'){
					if(!isset($custom_yandex_arr[trim($custom_yandex_txt_el[0]).$i])){
						$custom_yandex_arr[trim($custom_yandex_txt_el[0]).$i] = trim(str_replace(']','',$custom_yandex_txt_el[1]));
						break;
					}
				}
			}
		}
		
		//var_dump($custom_yandex_arr);
	}
	
	unset($custom_yandex_txt);
}

$file_data .= '
	</categories>
	<delivery-options>
		<option cost="0" days="1-3"/>
	</delivery-options>
	<offers>';
	
foreach($products as $id => $prod){
	if($custom_yandex){
		//выгружаем товары из списка (custom_yandex.txt)
		if(empty($custom_yandex_arr)) continue;
		
		$custom_yandex_find = false;
		foreach($custom_yandex_arr as $custom_yandex_name => $custom_yandex_size){
			$custom_yandex_name = str_replace('|','',$custom_yandex_name);
			if(stripos(trim($prod['name']),trim($custom_yandex_name)) !== FALSE){
				$custom_yandex_find = true;
				break;
			} 
		}
		if(!$custom_yandex_find) continue;
	}
	else{
		//временно убираем некоторые товары
		$temp_hide_prods = array('Merino для детей','B-Bamboo для детей','Stile','Pensiero');
		$temp_continue = false;
		foreach($temp_hide_prods as $temp_hide_prod){
			if($prod['name'] == $temp_hide_prod) $temp_continue = true;
		}
		if($temp_continue) continue;
	}
	
	$vendor = 'Magniflex';
	$country_of_origin = 'Италия';
	
	$el_desc = $prod['desc'];
	if($prod['yml_desc']) $el_desc = $prod['yml_desc'];
	if(!$el_desc) $el_desc = $prod['rec_buy'];
	if($partners){
		$el_desc = $prod['title'];
		if($prod['yml_desc']) $el_desc = $prod['yml_desc'];
		if($prod['new_desc']) $el_desc = $prod['new_desc'];
	}
	
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
	
	if((!$el_cat_id || !$el_price) && !$custom_yandex) continue;
	if(!$upload_all && (!isset($prod['yml_yandex'])) && !$custom_yandex) continue; 
	if(!$prod['address'] || !$prod['parent_address'] || !$site_url) continue; //фикс от тестовых товаров без адреса
	
	if(!$el_cat_id){
		if(stripos($el_name,'матрас') !== FALSE) $el_cat_id = 1;
		if(stripos($el_name,'подушка') !== FALSE) $el_cat_id = 4;
	}
	
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
			
			if($custom_yandex){
				//выгружаем только нужные размеры из списка (custom_yandex.txt), код плохой, лень переписывать ;)
				$can_this_size = false;
				foreach($custom_yandex_arr as $custom_yandex_name => $custom_yandex_size){
					$custom_yandex_name = str_replace('|','',$custom_yandex_name);
					if(stripos(trim($prod['name']),trim($custom_yandex_name)) !== FALSE && !strcasecmp(str_replace('х','x',$custom_yandex_size),str_replace('х','x',$size[0]))){
						$can_this_size = true;
					}
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
			
				if($partners){
					if(stripos($size[0],'экспозиции шоу-рума') !== FALSE) continue;
				}
			
			$file_data .= '
		<offer id="'.($id*100+1+$sz_id).'" available="true">
			<url>'.$site_url.'/catalog/'.$prod['parent_address'].'/'.$prod['address'].'/?size='.rawurlencode($size[0]).'</url>
			<price>'.$price.'</price>'.$old_price.'
			<currencyId>RUB</currencyId>
			<categoryId>'.$el_cat_id.'</categoryId>
			<picture>'.str_replace(' ','%20',yandex_text2xml($site_url.$prod['img'])).'</picture>
			<name>'.yandex_text2xml($el_name.' '.$size[0],true,true).'</name>'.(($vendor)?('
			<vendor>'.$vendor.'</vendor>'):('')).'
			<vendorCode>'.yandex_text2xml($prod['address'].' '.$size[0],true,true).'</vendorCode>
			<model>'.yandex_text2xml(str_replace(array('Подушка ','Ортопедическое основание '),'',$prod['name']).' '.$size[0],true,true).'</model>
			<description>'.yandex_text2xml(html_entity_decode($el_desc),true,true).'</description>
			<sales_notes>'.$sales_notes[rand(0,count($sales_notes)-1)].'</sales_notes>
			<manufacturer_warranty>true</manufacturer_warranty>'.(($country_of_origin)?('
			<country_of_origin>'.$country_of_origin.'</country_of_origin>'):('')).'
		</offer>';
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
		<offer id="'.($id*100+1).'" available="true">
			<url>'.$site_url.'/catalog/'.$prod['parent_address'].'/'.$prod['address'].'/</url>
			<price>'.$el_price.'</price>'.$old_price.'
			<currencyId>RUB</currencyId>
			<categoryId>'.$el_cat_id.'</categoryId>
			<picture>'.str_replace(' ','%20',yandex_text2xml($site_url.$prod['img'])).'</picture>
			<name>'.yandex_text2xml($el_name,true,true).'</name>'.(($vendor)?('
			<vendor>'.$vendor.'</vendor>'):('')).'
			<vendorCode>'.yandex_text2xml($prod['address'],true,true).'</vendorCode>
			<model>'.yandex_text2xml(str_replace(array('Подушка ','Ортопедическое основание '),'',$prod['name']),true,true).'</model>
			<description>'.yandex_text2xml(html_entity_decode($el_desc),true,true).'</description>
			<sales_notes>'.$sales_notes[rand(0,count($sales_notes)-1)].'</sales_notes>
			<manufacturer_warranty>true</manufacturer_warranty>'.(($country_of_origin)?('
			<country_of_origin>'.$country_of_origin.'</country_of_origin>'):('')).'
		</offer>';
	}
}

$file_data .= '
	</offers>
</shop>
</yml_catalog>';

echo($file_data);

?>