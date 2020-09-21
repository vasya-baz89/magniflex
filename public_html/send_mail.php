<?php
require('phpmailer/class.phpmailer.php');

function save_subdis($_phone, $_email, $_name, $_order, $filename = 'agree_discount_clients.csv'){
	if(strpos($_name,' ') !== FALSE) $_name = '"'.$_name.'"';
	if(strpos($_phone,' ') !== FALSE) $_phone = '"'.$_phone.'"';
	if(strpos($_email,' ') !== FALSE) $_email = '"'.$_email.'"';
	file_put_contents('tools/txt/'.$filename,trim($_phone).','.trim($_email).','.trim($_name).','.trim($_order).'
',FILE_APPEND);
}		

$phone = $_POST["phone"];
$name = $_POST["name"];
$price = $_POST["price"];
$size = $_POST["size"];

if($_POST['last_1c_order']){
	$emailCounter = $_POST['last_1c_order'];
}
else{
	$filename = 'tools/txt/1click_email_counter.txt';
	$emailCounter = file_get_contents($filename);
	$emailCounter++;
	$f=fopen($filename,'w');
	fwrite($f,$emailCounter);
	fclose($f);
}

if(!empty($_POST['agree_dis_check'])) save_subdis($phone, '', '', '"'.(gmdate('D, d M Y H:i:s T', time())).'"');

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$mail->isSendmail();
$mail->setFrom('info@magniflex.ru', 'Заказ в один клик');
$mail->addAddress('info@magniflex.ru', 'Magniflex');
$mail->addBCC('miloradovo13@gmail.com');
$mail->addBCC('gregor_3d@mail.ru');
$mail->addBCC('seerfull@yandex.ru');
$mail->addBCC('sale@magniflex.ru');
$mail->addBCC('arnage07@mail.ru');
$mail->addBCC('Arnage@mail.ru');
$mail->addBCC('tatiana_sarumova@mail.ru');
$mail->addBCC('vasya.baz89@mail.ru');
$mail->addBCC('mazurenkodmitriy57@gmail.com');

$mail->Subject  = 'Заказ в один клик';
$mail->Body = "
<p>Заказ: ".gmdate('D, d M Y H:i:s T', time())."</p>
<p>Номер: $phone </p>
<p>Товар: $name </p>
<p>Размер: $size </p>
<p>Цена: $price </p> ";

$mail->IsHTML(true);

file_put_contents('tools/txt/1click_orders/'.$emailCounter.'.txt',$mail->Body);

session_start();
$_SESSION['last_1c_order'] = $emailCounter;

if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo '{"res":"OK","last_1c_order":'.$emailCounter.'}';
}

?>
