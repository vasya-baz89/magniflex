<?php
include_once('save_subscribe_email.php');

$dir = $_SERVER["DOCUMENT_ROOT"].'/tools/reviews/custom_orders/';
$files = scandir($dir);
$orders = array();

foreach($files as $file){
	if($file == '.' || $file == '..') continue;
	$data = file_get_contents($dir.$file);
	if($data) $data = json_decode($data);
	if(!$data->email) continue;
	$orders[$data->email] =  array('email' => $data->email, 'name' => $data->name, 'order_id' => $data->order_id);
}

print_r($orders);

unset($files, $files, $data);
foreach($orders as $order){
	save_subscribe_email($order['email'], $order['name'], $order['order_id']);
}

//print_r($files);

?>