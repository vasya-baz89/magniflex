<?
$post = (!empty($_POST)) ? true : false;
if($post)
{
	$sum = htmlspecialchars($_POST['sum']);
	$name = htmlspecialchars($_POST["name"]);
	$phone = htmlspecialchars($_POST['phone']);
	$email = htmlspecialchars($_POST["email"]);

	$subject = "ОПЛАТА КАРТОЙ ОНЛАЙН";
	$email = 'order@magniflex.ru';
	$admin_mails = array('info@magniflex.ru','miloradovo13@gmail.com','gregor_3d@mail.ru','seerfull@yandex.ru','vasya.baz89@mail.ru','sale@magniflex.ru','arnage07@mail.ru','Arnage@mail.ru','tatiana_sarumova@mail.ru');
	$message = '
	<strong>Сумма: </strong> '.$sum.'<br>
	<strong>Имя: </strong>'.$name.'<br>
	<strong>Телефон: </strong>'.$phone.'<br>
	<strong>E-mail: </strong>'.$email.'<br>
	<br>
	<a href="https://www.magniflex.ru/pokupatelyam/oplata/" target="_blank">Страница оплаты</a><br>';
	foreach($admin_mails as $admin_mail){
		$mail = mail($admin_mail, $subject, $message, "From: Magniflex <$email>\nReply-To: $email\nContent-type: text/html; Charset=utf-8\r\nContent-Transfer-Encoding: 8bit","-f $email");
	}
}
?>