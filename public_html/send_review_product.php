<?php
require('phpmailer/class.phpmailer.php');

$rating = $_POST["rating"] ? $_POST["rating"] : 5;
$name_review = $_POST["name-review"];
$name = $_POST["name"];
$review = $_POST["review"];
$city = $_POST["city"];
$email = $_POST["email"];
$recommend_yes = $_POST["recommend_yes"];
$recommend_no = $_POST["recommend_no"];
$product = $_POST["product"];
$plus = $_POST["plus"] ? $_POST["plus"] : 'Нет.';
$minus = $_POST["minus"] ? $_POST["minus"] : 'Нет.';
$size = $_POST["size"] ? $_POST["size"] : 'Нет.';

$rec = 'Не определено';
if($recommend_yes){
  $rec = 'Да';
}
if($recommend_no){
  $rec = 'Нет';
}

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$mail->isSendmail();
$mail->setFrom('info@magniflex.ru', 'Новый Отзыв');
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

// Прикрепление файлов
for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
  $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
  $filename = $_FILES['userfile']['name'][$ct];
  if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
    $mail->addAttachment($uploadfile, $filename);
  } else {
    $msg .= 'Failed to move file to ' . $uploadfile;
  }
} 


$mail->Subject  = 'Новый отзыв на сайте';
$mail->Body = "
  <p>Рейтинг: $rating </p>
  <p>Товар: $product </p>
  <p>Имя: $name_review </p>
  <p>Email: $email </p>
  <p>Размер: $size </p>
  <p>Рекомендация: $rec </p>
  <p>Достоинства: $plus </p>
  <p>Недостатки: $minus </p>
  <p>Отзыв: $review </p> 
"; 

$mail->IsHTML(true);

if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}

?>
