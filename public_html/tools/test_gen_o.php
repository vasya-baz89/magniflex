<?php
session_name('sf_magniflex');
session_start();

define('sf_magniflex',true);
include_once('../data/products.php');

$dir = 'txt/json_orders';
$files = scandir($dir);

//print_r($files); exit;

$products = array();
$orders = array();
$emails = array();

$fp = fopen('yandex_magniflex_crm.csv', 'w');
fputcsv($fp, array('external_id','phone','email'));
$yandex_data_writen = array();
$yandex_data_n = 1;

foreach($files as $file){
	if(strpos($file,'.') !== FALSE) continue;
	$arr = file_get_contents($dir.'/'.$file);
	$arr = json_decode($arr, true);
	$arr['time'] = filemtime($dir.'/'.$file);
	$arr['date'] = date('d.m.Y', $arr['time']-60*60*24*250);
	$orders []= $arr;
	
	foreach($arr['cart'] as $product_name => $product){
		$product_name = preg_replace('/\\_(.*)/', '', $product_name, -1);
		if(!$products[$product_name]) $products[$product_name] = 1;
		else $products[$product_name]++;
	}
	
	$yandex_data_crm = array();
	if($arr['phone'] || $arr['email']){
		if(!in_array($arr['phone'], $yandex_data_writen) && !in_array($arr['email'], $yandex_data_writen)){
			$arr['phone'] = preg_replace('/\\D/', '', $arr['phone'], -1);
			$yandex_data_crm = array($yandex_data_n, strtolower($arr['phone']), strtolower($arr['email']));
			fputcsv($fp, $yandex_data_crm);
			$yandex_data_n++;
			if($arr['phone']) $yandex_data_writen []= $arr['phone'];
			if($arr['email']) $yandex_data_writen []= $arr['email'];
		}
	}
	if($arr['email']){
		$email = strtolower($arr['email']);
		$email = trim($email);
		if(strpos($email, ' ') !== FALSE) continue;
		if(strpos($email, '@') === FALSE) continue;
		if(!in_array($email,$emails)){
			$emails []= $email;
		}
	}
	
	//print_r($arr); exit;
}

fclose($fp);

file_put_contents('magniflex_order_emails.txt', implode('
', $emails));

arsort($products);
//print_r($products); exit;

print_r($_SESSION);

?>