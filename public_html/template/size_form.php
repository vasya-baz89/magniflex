<?php
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=Windows-1251\r\n";
$headers .= "From: <info@magniflex.ru>\r\n";
if (isset ($_POST['size-1'])) {
	//order@magniflex.ru
	mail ('order@magniflex.ru, Info@magniflex.ru, Gregor_3d@mail.ru, vasya.baz89@mail.ru, mazurenkodmitriy57@gmail.com, sale@magniflex.ru',
	"������ �� ������ ������ ������� ".$_SERVER['HTTP_REFERER'],
	"\n�������: ".$_POST['phone_1']."\n������".$_POST['size'] ,$headers );					
}
?>