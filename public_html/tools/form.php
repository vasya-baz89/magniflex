<?php
//error_reporting(E_ALL);
//ini_set('display_errors', true);

header('Expires: Sun, 27 May 2007 01:00:00 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header("Pragma: no-cache");

define('sf_can_mail',true);
include_once('mailer.php');

function save_subdis($_phone, $_email, $_name, $_order, $filename = 'agree_discount_clients.csv'){
	if(strpos($_name,' ') !== FALSE) $_name = '"'.$_name.'"';
	if(strpos($_phone,' ') !== FALSE) $_phone = '"'.$_phone.'"';
	if(strpos($_email,' ') !== FALSE) $_email = '"'.$_email.'"';
	file_put_contents('txt/'.$filename,trim($_phone).','.trim($_email).','.trim($_name).','.trim($_order).'
',FILE_APPEND);
}	

function save_email_txt($_email, $filename = 'emails'){
	file_put_contents('txt/'.$filename,strip_tags($_email).'
',FILE_APPEND);
}

function save_phone_txt($_phone){
	file_put_contents('txt/phones',strip_tags($_phone).'
',FILE_APPEND);
}

$order_n = 'N'.date('dmy').'-';
$order_last_txt = file_get_contents('txt/order_last');
$order_new_n = false;

if($order_last_txt){
	$order_last_txt = explode('|',$order_last_txt);
	if($order_last_txt[0] && $order_last_txt[1]){
		if($order_last_txt[0] == date('d') && intval($order_last_txt[1]) > 0){
			$order_n .= (intval($order_last_txt[1])+1);
			$order_new_n = intval($order_last_txt[1])+1;
		}
	}
}

if(!$order_new_n){
	$order_n .= '10';
	$order_new_n = 10;
}

$order_mail_admin = '
	<div style="font-size:16px;">Новый заказ '.$order_n.':</div>
	
	<p align="center" style="font-size:14px">Состав заказа:</p>
<br />
#ORDER_LIST#<br />
Стоимость (без скидки): #BASE_PRICE#<br />
#SKIDKA#
<b>Стоимость заказа: #PRICE#</b><br />
Дополнительно: #SF_ADV_INFO#<br /><br />
';

$order_mail_client = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<style>
		body
		{
			font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;
			font-size: 14px;
			color: #000;
		}
	</style>
</head>
<body>
<table cellpadding="0" cellspacing="0" width="560" style="color: #676767; font-family:arial; font-size:12px; background-color: #fff; border-radius: 2px; border:1px solid #868170; margin: 10px auto;
-webkit-box-shadow: 5px 6px 8px -6px rgba(50, 50, 50, 0.75);
-moz-box-shadow: 5px 6px 8px -6px rgba(50, 50, 50, 0.75);
box-shadow: 5px 6px 8px -6px rgba(50, 50, 50, 0.75);" border="1" bordercolor="#d1d1d1">
	<tr>
		<td colspan="2" style="border:none;">
			<img src="https://www.magniflex.ru/img/logpoch.png">
		</td>
	</tr>
	<tr>
		<td  colspan="2" valign="top" style="border: none; padding-top: 0; padding-right: 44px; padding-bottom: 16px; padding-left: 44px;">
			<p align="center" style="font-size: 16px;display:none;">Заказ '.$order_n.'</p>
			<br />
			<p>Уважаемый #ORDER_USER#,</p>
			<p style="margin-top: 0; margin-bottom: 20px; line-height: 20px;">Благодарим Вас за покупку в официальном интернет магазине Magniflex!
<br />Ваш заказ принят в обработку. В ближайшее время наш оператор свяжется с Вами.<br />
<br />
<div style="border: 1px dashed;
padding: 16px; font-size:12px;">
<p align="center" style="font-size:14px">Заказ '.$order_n.':</p>
<br />
#ORDER_LIST#<br />
Стоимость (без скидки): #BASE_PRICE#<br />
#SKIDKA#
<b>Стоимость заказа: #PRICE#</b><br /><br />
</div>
<br />
<br />
</p>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center" style="border:none;">
			<img src="https://www.magniflex.ru/img/matpil.jpg">
		</td>
	</tr>
	<tr>
		<td style="border:none; padding-left: 43px; font-size:11px;">
			<span>
                               Официальный Интернет-Магазин Magniflex. 
			</span>
                       <br />
			<span>
                               Тел: <span style="border-bottom: 1px solid #676767 !important; color: #676767 !important; cursor: pointer;">+7 495 989-11-32</span>, для регионов: <span style="border-bottom: 1px solid #676767 !important; color: #676767 !important; cursor: pointer;">8-800-350-19-68</span>
			</span>
		</td>
		<td style="border:none;">
			<img align="right" src="https://www.magniflex.ru/img/logobot.jpg">
		</td>
	</tr>
</table>

</body>
</html>
';

function checkbox_yes_print($ch){
	if($ch) return 'да';
	return 'нет';
}

if(isset($_POST['cart'])){
	$cart_no_echo = true;
	include_once('cart.php');
	
	$title_client = 'Magniflex: Ваш заказ '.$order_n;
	$title_admin = 'Magniflex: Новый заказ '.$order_n;
	
	$order_list = '<table style="width:430px;font-size:12px;"><tbody><tr>
					<td>Название</td>
					<td>Цена</td>
					<td>Кол-во</td>
					<td>Сумма</td> </tr>
					';
	
	if(!empty($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $item){
			if(isset($item['name']) && isset($item['size']) && isset($item['count'])){
				foreach($products as $product){
					if($product['name'] == $item['name']){
						
						$sizex = '';
						if($item['size']) $sizex = ' ('.$item['size'].')';
						$product_url = 'https://www.magniflex.ru/catalog/'.$product['parent_address'].'/'.$product['address'].'/';
						if($item['size']) $product_url .= '?size='.$item['size'];
						$order_list .= '<tr><td><a href="'.$product_url.'" target="_blank">'.$product['name'].$sizex.'</a></td>';
						
						$price = 0;
						if($product['sizes'] && is_array($product['sizes'])){
							foreach($product['sizes'] as $size){
								if($size[0] == $item['size']){
									$price = $size[1];
								}
							}
						}
						else if($product['price']){
							$price = $product['price'];
						}
						
						//$price = $price*price_koef_do($product['name'],$item['size']);
						
						$order_list .= '<td>'.intval($price).' р.</td>';
						$order_list .= '<td>'.$item['count'].' шт</td>';
						$order_list .= '<td>'.(intval($item['count'])*intval($price)).' р.</td></tr>';
					}
				}
			}
		}
	}
	else{
		$json_data['error'] = 'err_empty_cart';
		if($_SESSION['last_order_n']) 
			$json_data['order_n'] = $_SESSION['last_order_n'];
		echo json_encode($json_data);
		exit;
	}
	
	$order_list .='
</tbody></table>';
	
	$email_client = $_POST['email'];
	if($email_client) save_email_txt($email_client, 'emails_order');
	if($_POST['phone']) save_phone_txt($_POST['phone']);
	
	$order_mail_admin .= '<b>Фамилия, имя, отчество:</b> '.$_POST['name'].'<br>';
	$order_mail_admin .= '<b>Телефон:</b> '.$_POST['phone'].'<br>';
	$order_mail_admin .= '<b>E-Mail:</b> '.$_POST['email'].'<br>';
	$order_mail_admin .= '<b>Адрес доставки:</b> '.$_POST['address'].'<br>';
	$order_mail_admin .= '<b>Дата доставки:</b> '.$_POST['date'].'<br>';
	$order_mail_admin .= '<b>Удобное время:</b> '.$_POST['time'].'<br>';
	$order_mail_admin .= '<b>Пожелания к заказу:</b> '.$_POST['comment'].'<br>';
	
	if($_SESSION['coupon']){
		if(check_coupon($_SESSION['coupon'])){
			$order_mail_admin .= '<b>Применен купон:</b> '.$_SESSION['coupon'].'<br>';
			$order_mail_client .= '<b>Применен купон:</b> '.$_SESSION['coupon'].'<br>';
		}
	}
	
	$total_pr_co = get_total_price_count();
	
	$order_mail_admin = str_replace('#ORDER_LIST#',$order_list,$order_mail_admin);
	$order_mail_admin = str_replace('#PRICE#',$total_pr_co['total_price'].' р.',$order_mail_admin);
	$order_mail_admin = str_replace('#BASE_PRICE#',$total_pr_co['total_base_price'].' р.',$order_mail_admin);
	if($total_pr_co['total_base_price']-$total_pr_co['total_price'] > 0)
		$order_mail_admin = str_replace('#SKIDKA#','Скидка: '.($total_pr_co['total_base_price']-$total_pr_co['total_price']).' р.<br>',$order_mail_admin);
	else 
		$order_mail_admin = str_replace('#SKIDKA#','',$order_mail_admin);
	if(!empty($_COOKIE['rees46_utm'])) $order_mail_admin = str_replace('#SF_ADV_INFO#','<b>Заказ от REES46</b>',$order_mail_admin);
	else $order_mail_admin = str_replace('#SF_ADV_INFO#','',$order_mail_admin);
	
	$order_mail_client = str_replace('#ORDER_LIST#',$order_list,$order_mail_client);
	$order_mail_client = str_replace('#PRICE#',$total_pr_co['total_price'].' р.',$order_mail_client);
	$order_mail_client = str_replace('#BASE_PRICE#',$total_pr_co['total_base_price'].' р.',$order_mail_client);
	if($total_pr_co['total_base_price']-$total_pr_co['total_price'] > 0)
		$order_mail_client = str_replace('#SKIDKA#','Скидка: '.($total_pr_co['total_base_price']-$total_pr_co['total_price']).' р.<br>',$order_mail_client);
	else 
		$order_mail_client = str_replace('#SKIDKA#','',$order_mail_client);
	$order_mail_client = str_replace('#ORDER_USER#',$_POST['name'],$order_mail_client);
	
	$yaParams = array();
	$yaParams['order_id'] = $order_n;
	$yaParams['order_price'] = $total_pr_co['total_price'];
	$yaParams['currency'] = 'RUB';
	$yaParams['exchange_rate'] = 1;
	$yaParams['client_phone'] = $_POST['phone'];
	$yaParams['client_email'] = $_POST['email'];
	$yaParams['client_name'] = $_POST['name'];
	$yaParams['goods'] = array();
	
	if(!empty($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $item){
			if(isset($item['name']) && isset($item['size']) && isset($item['count'])){
				foreach($products as $product){
					if($product['name'] == $item['name']){
						$goods_el = array();
						$goods_el['id'] = $item['name'];
						$goods_el['name'] = $item['name'];
						$goods_el['price'] = get_product_price($item['name'], $item['size']);
						$goods_el['price'] = $goods_el['price']['price'];
						$goods_el['quantity'] = $item['count'];
						$goods_el['variant'] = $item['size'];
						
						array_push($yaParams['goods'], $goods_el);
					}
				}
			}
		}
	}
	
	if(!empty($yaParams['goods'])) $json_data = $yaParams;
	$json_data['order_n'] = $order_n;
	
	// Запись заказов в файле на время отсуствия работи пошты
		$orders_file = fopen("txt/orders/orders_" . $order_n . ".html", "w");
		fwrite($orders_file, $order_mail_admin);
		fclose($orders_file);
	// and
	
	$save_order_data = $_POST;
	$save_order_data['order_id'] = $order_n;
	$save_order_data['order_price'] = $total_pr_co['total_price'];
	$save_order_data['order_base_price'] = $total_pr_co['total_base_price'];
	$save_order_data['order_skidka'] = $total_pr_co['total_base_price']-$total_pr_co['total_price'];
	$save_order_data['cart'] = $_SESSION['cart'];
	file_put_contents('txt/json_orders/'.$order_n, json_encode($save_order_data));
	
	if(stripos($_POST['name'], 'test') !== FALSE || stripos($_POST['email'], 'test') !== FALSE || stripos($_POST['address'], 'test') !== FALSE || stripos($_POST['comment'], 'test') !== FALSE){
		send_mail_to_admin($title_admin,$order_mail_admin,$test_admin_mails,$from,$reply);
	}
	else{
		send_mail_to_admin($title_admin,$order_mail_admin,$admin_mails,$from,$reply);
	}
	
	sendmail($title_client,$order_mail_client,$email_client,$from,$reply);
	
	//sf reviews subs
	include_once('reviews/save_subscribe_email.php');
	save_subscribe_email($email_client, trim($_POST['name']), $order_n);
	
	//sf subdis
	if(!empty($_POST['agree_dis_check'])) save_subdis($_POST['phone'], $email_client, $_POST['name'], $order_n);
	
	file_put_contents('txt/order_last',date('d').'|'.$order_new_n);
	
	//sf check online pay avaible
	$json_data['online_pay_avaible'] = true;
	foreach($products as $product){
		foreach($_SESSION['cart'] as $item){
			if($product['name'] == $item['name']){
				if($product['sizes'] && is_array($product['sizes'])){
					foreach($product['sizes'] as $size){
						if($size[0] == $item['size']){
							if(!$size['gsheet_avaible']){
								$json_data['online_pay_avaible'] = false;
							}
						}
					}
				}
				else{
					if(!$product['gsheet_avaible']){
						$json_data['online_pay_avaible'] = false;
					}
				}
			}
		}
	}
	
	//sf add order to google docs
	if( $ch = curl_init() ) {
		$ch_get_cart = '';
		if(!empty($_SESSION['cart'])){
			foreach($_SESSION['cart'] as $key=>$product){
				$ch_get_cart .= $product["name"];
				if($product["size"]) $ch_get_cart .= ' '.$product["size"];
				$ch_get_cart .= ' '.$product["count"].'шт';
				$ch_get_cart .= '; ';
			}
		}
		$ch_get_params = '?'.'order_id='.rawurlencode($order_n).'&name='.rawurlencode($_POST['name']).'&phone='.rawurlencode($_POST['phone']).'&email='.rawurlencode($_POST['email']).'&cart='.rawurlencode($ch_get_cart).'&order_price='.rawurlencode($total_pr_co['total_price']).'&order_skidka='.rawurlencode($total_pr_co['total_base_price']-$total_pr_co['total_price']).'&order_base_price='.rawurlencode($total_pr_co['total_base_price']).'&address='.rawurlencode($_POST['address']).'&date_submit='.rawurlencode($_POST['date']).'&time='.rawurlencode($_POST['time']).'&comment='.rawurlencode($_POST['comment']).'&param1=&param2=&param3=';
		curl_setopt($ch, CURLOPT_URL, 'https://script.google.com/macros/s/AKfycbwStCp8Oe9Hp-wCPp04GShSnxBV2Y5RGzd2LhfKJHuQjFFnQjyz/exec'.$ch_get_params);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_exec($ch);
		curl_close($ch);
	  }
	
	  
	$_SESSION['last_order_n'] = $order_n;
	unset($_SESSION['cart']);
}
else{
	if($_POST['email']) save_email_txt($_POST['email'], 'emails_subsribe');
	if($_POST['phone']) save_phone_txt($_POST['phone']);
	
	$title = 'magniflex[call]';
	$html = '';
	if(isset($_POST['name'])) $html .= '<b>Имя:</b> '.$_POST['name'].'<br>';
	if(isset($_POST['phone'])) $html .= '<b>Телефон:</b> '.$_POST['phone'].'<br>';
	if(isset($_POST['email'])) $html .= '<b>E-mail:</b> '.$_POST['email'].'<br>';
	if(isset($_POST['skidka_mat'])) $html .= '<b>Скидка матрасы:</b> '.checkbox_yes_print($_POST['skidka_mat']).'<br>';
	if(isset($_POST['skidka_pod'])) $html .= '<b>Скидка подушки:</b> '.checkbox_yes_print($_POST['skidka_pod']).'<br>';
	if(isset($_POST['comment'])) $html .= '<b>Комментарий:</b> '.$_POST['comment'].'<br>';
	if(isset($_POST['time_to_call'])) $html .= '<b>Удобное время для звонка:</b> '.$_POST['time_to_call'].'<br>';
	
	if(isset($_POST['n'])) $html .= '<br><i>Форма:</i> '.$_POST['n'].'<br>';
	
	$save_order_data = $_POST;
	file_put_contents('txt/json_subsribe/'.time().'-'.rand(10,99), json_encode($save_order_data));
	
	if($_POST['name'] && ($_POST['phone'] || $_POST['email'])){
		if($_POST['sf'] == 's1'){
			if(stripos($_POST['name'], 'test') !== FALSE || stripos($_POST['email'], 'test') !== FALSE || stripos($_POST['comment'], 'test') !== FALSE){
				send_mail_to_admin($title,$html,$test_admin_mails,$from,$reply);
			}
			else{
				send_mail_to_admin($title,$html,$admin_mails,$from,$reply);
			}
		}
	}
	
	//sf add to google docs
	if( $ch = curl_init() ) {
		$ch_get_params = '?'.'name='.rawurlencode($_POST['name']).'&phone='.rawurlencode($_POST['phone']).'&email='.rawurlencode($_POST['email']).'&n='.rawurlencode($_POST['n']).'&skidka_mat='.rawurlencode(($_POST['skidka_mat'] == 'on')?'да':'нет').'&skidka_pod='.rawurlencode(($_POST['skidka_pod'] == 'on')?'да':'нет').'&comment='.rawurlencode($_POST['comment']).'&param1='.rawurlencode($_POST['time_to_call']).'&param2=&param3=';
		curl_setopt($ch, CURLOPT_URL, 'https://script.google.com/macros/s/AKfycbwVWY9U-ny1jz2xrFQVcDmRnhDnklaNeabY72VcTX4GgrTrHUB_/exec'.$ch_get_params);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_exec($ch);
		curl_close($ch);
	  }
	
}

if(isset($json_data) && !empty($json_data)) 
	echo json_encode($json_data);
?>
