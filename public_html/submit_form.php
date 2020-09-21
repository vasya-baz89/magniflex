<?
$post = (!empty($_POST)) ? true : false;
if($post)
{
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST["t_phone"]);
$namesProd = htmlspecialchars($_POST['namesProd']);
$article = htmlspecialchars($_POST["article"]);
$error = '';

if(!$name)
{
$error .= 'Введите имя!<br>';
}

if(!$phone)
{
$error .= "Введите телефон!<br>";
}

if(!$error)
{
$subject ="Заявка на покупту товара: ".$namesProd;
$email ='vg7design@gmail.com';	
$message = '<strong>Имя: </strong> '.$name.'<br><strong>Телефон: </strong>'.$phone.'<br><strong>Название продукта: </strong>'.$namesProd.'<br><strong>Артикул продукта: </strong>'.$article;
$mail = mail($email, $subject, $message, "From: RootHelp.ru <$email>\nReply-To: $email\nContent-type: text/html; Charset=utf-8\r\nContent-Transfer-Encoding: 8bit","-f $email");

if($mail)
{
echo"OK";
}

}

else
{
echo '<div class="answer">'.$error.'</div>';
}

}
?>