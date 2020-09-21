<?php
session_name('sf_magniflex');
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('sf_magniflex',true);

$fp = fopen('txt/order_emails_chimp.csv', 'w');
$chimp_data_writen = array();

$fake_emails_pos = array(
	'foodbankagency',
	'shipco',
	'safffsmail',
	'sadsdskfm',
	'bober8099',
	'janekopeickina',
	'btinternet',
	'test',
	'popmile45',
	'ncechandi001',
	'---',
	'namnerbca',
	'poliakovagalina27822',
	'111',
	'333',
	'http',
	':',
	'reply',
	'lenar.petrovich.80',
	'wilkinsp73',
	'manidn',
	'ifns_7709',
);

$fake_names = array(
	'тест',
	':',
	'маркетинг',
	'Яндекс',
	'продвижение',
	'потолки',
	'.рф',
	'бизнес',
	'Центр',
	'заказ',
	'мпортер',
	'.Ру',
	'Фотограф',
);

$dirs = array('txt/json_orders', 'txt/json_subsribe');
foreach($dirs as $dir){
	$files = scandir($dir);
	foreach($files as $file){
		if(strpos($file,'.') !== FALSE) continue;
		$arr = file_get_contents($dir.'/'.$file);
		$arr = json_decode($arr, true);
		
		if(!isset($arr['email'])) $arr['email'] = null;
		if(!isset($arr['phone'])) $arr['phone'] = null;
		if(!isset($arr['name'])) $arr['name'] = null;
		
		if($arr['email']){
			$chimp_email = strtolower(trim($arr['email']));
			if(!in_array($chimp_email,$chimp_data_writen) && strpos($chimp_email, ' ') === FALSE && strpos($chimp_email, '@') !== FALSE){
				$chimp_phone = preg_replace('/\\D/', '', $arr['phone'], -1);
				$chimp_name = mb_convert_case(mb_strtolower(trim($arr['name'])),MB_CASE_TITLE);
				
				$fake = false;
				foreach($fake_emails_pos as $fake_email_pos){
					if(stripos($chimp_email, $fake_email_pos) !== FALSE) $fake = true;
				}
				foreach($fake_names as $fake_name){
					if(stripos($chimp_name, $fake_name) !== FALSE) $fake = true;
				}
				if(preg_match('/[0-9a-zA-Z]/', $chimp_name)){
					$fake = true;
				}
				
				if(!$fake){
					$chimp_data_crm = array($chimp_email, $chimp_name, $chimp_phone);
					fputcsv($fp, $chimp_data_crm);
					$chimp_data_writen []= $chimp_email;
				}
				
				unset($chimp_phone, $chimp_name, $chimp_phone, $chimp_data_crm, $fake);
			}
		}
	}
}

fclose($fp);

echo(file_get_contents('txt/order_emails_chimp.csv'));

?>