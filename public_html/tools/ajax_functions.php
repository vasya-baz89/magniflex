<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

define('sf_can_mail', true);
include_once('../config.php');
include_once('mailer.php');

if(!isset($_REQUEST['format'])) $_REQUEST['format'] = 'xls';
include_once('PHPExcel/Classes/PHPExcel.php');

$mail_sendto = array('ol_devi@mail.ru');
//$mail_sendto []= 'seerfull@yandex.com'; // add test email
if(empty($mail_sendto) && isset($admin_mails)) $mail_sendto = $admin_mails;

if(isset($_REQUEST['action'])){
	switch($_REQUEST['action']) {
		case 'get_orders_list_mail':
		   get_orders_list_mail();
			break;
		case 'get_call_list_mail':
			get_call_list_mail();
			break;
		case 'get_emails_list_mail':
		   get_emails_list_mail();
			break;
	}
}

function get_orders_list_mail(){
	global $mail_sendto, $from;
	
	$objPHPExcel = new PHPExcel();
	$objPHPExcel->getProperties()->setCreator('https://magniflex.ru/sf_action/')
		->setLastModifiedBy(date("Y-m-d H:i:s"))
		->setTitle('Magniflex Заказы')
		->setSubject('Magniflex Заказы')
		->setDescription('Magniflex Заказы - Список')
		->setKeywords('Magniflex')
		->setCategory('Magniflex');
	$active_sheet = $objPHPExcel->getActiveSheet();
	
	$active_sheet->getColumnDimension('A')->setWidth(12);
	$active_sheet->getColumnDimension('B')->setWidth(45);
	$active_sheet->getColumnDimension('C')->setWidth(20);
	$active_sheet->getColumnDimension('D')->setWidth(32);
	$active_sheet->getColumnDimension('E')->setWidth(70);
	$active_sheet->getColumnDimension('F')->setWidth(12);
	$active_sheet->getColumnDimension('G')->setWidth(9);
	$active_sheet->getColumnDimension('H')->setWidth(18);
	$active_sheet->getColumnDimension('I')->setWidth(32);
	$active_sheet->getColumnDimension('J')->setWidth(18);
	$active_sheet->getColumnDimension('K')->setWidth(18);
	$active_sheet->getColumnDimension('L')->setWidth(45);
	$active_sheet->getColumnDimension('M')->setWidth(12);

	$first_row_style = array(
		'font' => array(
			'bold' => true,
			'color' => array('rgb' => '2E086B')
		),
		'borders' => array(
			'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
		)
	);
	$active_sheet->getStyle('A1:Q1')->applyFromArray($first_row_style);
	
	$list_title_arr = array('№ заказа','Имя','Телефон','E-mail','Товары','Цена (руб)','Скидка', 'Цена без скидки','Адрес','Дата доставки','Удобное время','Комментарий','Дата заказа');
	$list_arr = array();
	
	$list_files = scandir('txt/json_orders');
	foreach($list_files as $list_file){
		if(strpos($list_file, '.') === FALSE){
			$list_file_buf = file_get_contents('txt/json_orders/'.$list_file);
			if(!empty($list_file_buf)){
				$list_file_buf = json_decode($list_file_buf);
				if(!empty($list_file_buf)){
					$list_arr[$list_file] = array();
					$list_arr[$list_file]['order_id'] = $list_file_buf->order_id;
					$list_arr[$list_file]['name'] = $list_file_buf->name;
					$list_arr[$list_file]['phone'] = $list_file_buf->phone;
					$list_arr[$list_file]['email'] = $list_file_buf->email;
					$list_arr[$list_file]['cart'] = '';
					if(!empty($list_file_buf->cart)){
						if(!is_array($list_file_buf->cart)) $list_file_buf->cart = (array)$list_file_buf->cart;
						foreach($list_file_buf->cart as $key=>$product){
							$list_arr[$list_file]['cart'] .= $product->name;
							if($product->size) $list_arr[$list_file]['cart'] .= ' '.$product->size;
							$list_arr[$list_file]['cart'] .= ' '.$product->count.'шт';
							$list_arr[$list_file]['cart'] .= '; ';
						}
					}
					$list_arr[$list_file]['order_price'] = $list_file_buf->order_price;
					$list_arr[$list_file]['order_skidka'] = $list_file_buf->order_skidka;
					$list_arr[$list_file]['order_base_price'] = $list_file_buf->order_base_price;
					$list_arr[$list_file]['address'] = $list_file_buf->address;
					$list_arr[$list_file]['date_submit'] = $list_file_buf->date_submit;
					$list_arr[$list_file]['time'] = $list_file_buf->time;
					$list_arr[$list_file]['comment'] = $list_file_buf->comment;
					$list_arr[$list_file]['date'] = $list_file_buf->date;
				}
			}
		}
	}
	
	$active_sheet->getRowDimension('1')->setRowHeight(20);
	$row_i = 2;
	foreach($list_arr as $el){
		$active_sheet->getRowDimension($row_i)->setRowHeight(20);
		$row_i++;
	}
	
	$active_sheet->fromArray($list_title_arr, NULL, 'A1');
	$active_sheet->fromArray($list_arr, NULL, 'A2');

	$save_file_name = 'txt/xls/order_list';
	
	if($_REQUEST['format'] == 'xlsx'){
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$save_file_name .= '.xlsx';
	}
	else{
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$save_file_name .= '.xls';
	}
	
	$objWriter->save($save_file_name);
	
	foreach($mail_sendto as $mail_sendto_el){
		sendmail_attach('Magniflex: Заказы '.date("Y-m-d H:i:s"), 'Заказы magniflex.ru - список excel. Отправлено: '.date("Y-m-d H:i:s"), $mail_sendto_el, $from, false, $save_file_name);
	}
	
}
function get_call_list_mail(){
	global $mail_sendto, $from;
	
	$objPHPExcel = new PHPExcel();
	$objPHPExcel->getProperties()->setCreator('https://magniflex.ru/sf_action/')
		->setLastModifiedBy(date("Y-m-d H:i:s"))
		->setTitle('Magniflex Подписка')
		->setSubject('Magniflex Подписка')
		->setDescription('Magniflex Подписка - Список')
		->setKeywords('Magniflex')
		->setCategory('Magniflex');
	$active_sheet = $objPHPExcel->getActiveSheet();
	
	$active_sheet->getColumnDimension('A')->setWidth(45);
	$active_sheet->getColumnDimension('B')->setWidth(20);
	$active_sheet->getColumnDimension('C')->setWidth(32);
	$active_sheet->getColumnDimension('D')->setWidth(25);
	$active_sheet->getColumnDimension('E')->setWidth(45);
	$active_sheet->getColumnDimension('F')->setWidth(18);
	$active_sheet->getColumnDimension('G')->setWidth(18);

	$first_row_style = array(
		'font' => array(
			'bold' => true,
			'color' => array('rgb' => '2E086B')
		),
		'borders' => array(
			'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
		)
	);
	$active_sheet->getStyle('A1:Q1')->applyFromArray($first_row_style);
	
	$list_title_arr = array('Имя','Телефон','E-mail','Форма','Комментарий','Скидка матрасы','Скидка подушки');
	$list_arr = array();
	
	$list_files = scandir('txt/json_subsribe');
	foreach($list_files as $list_file){
		if(strpos($list_file, '.') === FALSE){
			$list_file_buf = file_get_contents('txt/json_subsribe/'.$list_file);
			if(!empty($list_file_buf)){
				$list_file_buf = json_decode($list_file_buf);
				if(!empty($list_file_buf)){
					$list_arr[$list_file] = array();
					$list_arr[$list_file]['name'] = $list_file_buf->name;
					$list_arr[$list_file]['phone'] = $list_file_buf->phone;
					$list_arr[$list_file]['email'] = $list_file_buf->email;
					$list_arr[$list_file]['n'] = $list_file_buf->n;
					$list_arr[$list_file]['comment'] = $list_file_buf->comment;
					$list_arr[$list_file]['skidka_mat'] = 'нет данных';
					if(isset($list_file_buf->skidka_mat)) $list_arr[$list_file]['skidka_mat'] = (($list_file_buf->skidka_mat == 'on')?'да':'нет');
					$list_arr[$list_file]['skidka_pod'] = 'нет данных';
					if(isset($list_file_buf->skidka_pod)) $list_arr[$list_file]['skidka_pod'] = (($list_file_buf->skidka_pod == 'on')?'да':'нет');
				}
			}
		}
	}
	
	$active_sheet->getRowDimension('1')->setRowHeight(20);
	$row_i = 2;
	foreach($list_arr as $el){
		$active_sheet->getRowDimension($row_i)->setRowHeight(20);
		$row_i++;
	}
	
	$active_sheet->fromArray($list_title_arr, NULL, 'A1');
	$active_sheet->fromArray($list_arr, NULL, 'A2');

	$save_file_name = 'txt/xls/call_list';
	
	if($_REQUEST['format'] == 'xlsx'){
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$save_file_name .= '.xlsx';
	}
	else{
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$save_file_name .= '.xls';
	}
	
	$objWriter->save($save_file_name);
	
	foreach($mail_sendto as $mail_sendto_el){
		sendmail_attach('Magniflex: Подписка '.date("Y-m-d H:i:s"), 'Подписка(рассылка) magniflex.ru - список excel. Отправлено: '.date("Y-m-d H:i:s"), $mail_sendto_el, $from, false, $save_file_name);
	}
}
function get_emails_list_mail(){
	global $mail_sendto, $from;
	
	$data_txt = file_get_contents('txt/emails');
	$data_arr = explode("\n", $data_txt);
	unset($data_txt);
	$data_new_arr = array();
	foreach($data_arr as $data_arr_el){
		if(!isset($data_new_arr[$data_arr_el])){
			$data_new_arr[$data_arr_el] = $data_arr_el;
		}
	}
	unset($data_arr);
	$data_txt = implode("\n", $data_new_arr);
	unset($data_new_arr);
	file_put_contents('txt/sort_emails.txt',$data_txt);
	
	foreach($mail_sendto as $mail_sendto_el){
		sendmail_attach('Magniflex: emails '.date("Y-m-d H:i:s"), 'Список email адресов клиентов (заказы, рассылка) magniflex.ru. Отправлено: '.date("Y-m-d H:i:s"), $mail_sendto_el, $from, false, 'txt/sort_emails.txt');
	}
}

?>