<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

$debug = 0;

$cache_html_time = 0*3600;	//время кеширования html страницы на сервере	(тесты показали безсмысленность кеширования на стороне сервера)

$hide_discount_utm = 'utm_campaign=mc_hidden_test';
//$hide_discount_discount = array('price_koef' => 0.16); //старый вариант
//$hide_discount_discount = 'custom'; //новый вариант
$hide_discount_discount = null; //выключено
?>