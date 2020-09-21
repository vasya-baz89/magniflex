<?php

header('Expires: Sun, 27 May 2007 01:00:00 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header("Pragma: no-cache");

define('sf_magniflex',true);
include_once('../config.php');
include_once('../data/products.php');

//https://docs.google.com/spreadsheets/d/1Tyos_oT3meQyOPc8xGcXQFBTnbMnX080FDAHWbWJGbM/edit#gid=0
$data_raw = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1Tyos_oT3meQyOPc8xGcXQFBTnbMnX080FDAHWbWJGbM/values/!A2:D1000?key=AIzaSyB_C_zl0ooC4-v0xXRtKgF3UE30hDH6XQM');

if($data_raw){
	$data = json_decode($data_raw, true);
	if(!empty($data) && !empty($data['values'])){
		$data = $data['values'];
		$data_json = json_encode($data);
		file_put_contents('../data/avail_products.txt', $data_json);
	}
}

?>