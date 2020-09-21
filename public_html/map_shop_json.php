<?php
header('Content-Type: application/json');

define('sf_magniflex',true);

include_once('data/cities_shops.php');

$mapdata_json = array();
$mapdata_json['ds_dynamic_markers'] = $ds_dynamic_markers;

$shops_json = array();
foreach($shops as $shop_url => $shop_arr){
	$shops_json[$shop_url] = $shop_arr;
	$shops_json[$shop_url]['url'] =  '/shops/russia/'.$shop_arr['city'].'/'.$shop_url.'/';
	unset($shops_json[$shop_url]['text']);
	unset($shops_json[$shop_url]['title']);
	unset($shops_json[$shop_url]['description']);
	unset($shops_json[$shop_url]['keywords']);
}

$mapdata_json['shops'] = $shops_json;

echo json_encode($mapdata_json);

?>