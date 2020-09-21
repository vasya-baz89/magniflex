<?php
require('phpmailer/class.phpmailer.php');

$email = $_POST["email"];
$size = $_POST["size"];

$filename = 'tools/txt/subscribes.txt';
$emailList = file_get_contents($filename);
$wr = $emailList . "\n" . $email;

$f=fopen($filename,'w');
fwrite($f,$wr);
fclose($f);

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$mail->isSendmail();
$mail->setFrom('info@magniflex.ru', 'Новая подписка - Outlet');
$mail->addAddress('info@magniflex.ru', 'Magniflex');
$mail->addBCC('vasya.baz89@mail.ru', 'My Friend');
// $mail->addAddress('mosmani@live.ru', 'My Friend');
// $mail->addAddress('info@magniflex.ru', 'My Friend');
// $mail->addAddress('miloradovo13@gmail.com', 'My Friend');
$mail->addBCC('gregor_3d@mail.ru', 'My Friend');
// $mail->addAddress('seerfull@yandex.ru', 'My Friend');
// $mail->addAddress('ol_devi@mail.ru', 'My Friend');
$mail->addBCC('sale@magniflex.ru', 'My Friend');
$mail->addBCC('mazurenkodmitriy57@gmail.com', 'My Friend');
//$mail->addAddress('arnage07@mail.ru', 'arnage07');
$mail->addBCC('tatiana_sarumova@mail.ru', 'Tatiana');

$mail->Subject  = 'Подписка (аутлет)';
$mail->Body = "
<p>Email: $email </p> 
<p>Желаемый размер: $size </p> ";

$mail->IsHTML(true);


if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo '{"res":"OK","last_1c_order":'.$emailCounter.'}';
}

?>
