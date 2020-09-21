<?
$post = (!empty($_POST)) ? true : false;
if($post)
{
	$order = htmlspecialchars($_POST['order']);
	$type = htmlspecialchars($_POST["type"]);

	$subject ="Способ оплаты заказа";
	$email ='order@magniflex.ru';
	$admin_mails = array('info@magniflex.ru','miloradovo13@gmail.com','gregor_3d@mail.ru','seerfull@yandex.ru','vasya.baz89@mail.ru','sale@magniflex.ru','arnage07@mail.ru','Arnage@mail.ru','tatiana_sarumova@mail.ru');
	$message = '<strong>Заказ: </strong> '.$order.'<br><strong>Способ оплаты: </strong>'.$type.'<br>';
	foreach($admin_mails as $admin_mail){
		$mail = mail($admin_mail, $subject, $message, "From: Magniflex <$email>\nReply-To: $email\nContent-type: text/html; Charset=utf-8\r\nContent-Transfer-Encoding: 8bit","-f $email");
	}
}
?>