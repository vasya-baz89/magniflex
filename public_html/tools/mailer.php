<?php
if(!defined('sf_can_mail'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

$from = 'order@magniflex.ru';
$reply = 'order@magniflex.ru';
$admin_mails = array('info@magniflex.ru','miloradovo13@gmail.com','gregor_3d@mail.ru','seerfull@yandex.ru','vasya.baz89@mail.ru','sale@magniflex.ru','arnage07@mail.ru','Arnage@mail.ru','tatiana_sarumova@mail.ru');
$test_admin_mails = array('gregor_3d@mail.ru','seerfull@yandex.com','vasya.baz89@mail.ru');
// $admin_mails = array('vasya.baz89@mail.ru', 'mazurenkodmitriy57@gmail.com');

function sendmail($_sSubject, $_sMessage, $_sEmail, $_sFrom, $_sReply, $_bPriority=true){
	$subject = "=?utf-8?b?" . base64_encode($_sSubject) . "?=";
	$headers  = "From: $_sFrom\r\n";
	$headers .= "Reply-To: $_sReply\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
    if($_bPriority){
        $headers .= "X-Priority: 1 (Highest)\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "Importance: High\n";
    }
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	mail($_sEmail, $subject, $_sMessage, $headers, '-forder@magniflex.ru');
}

function sendmail_attach($_sSubject, $_sMessage, $_sEmail, $_sFrom, $_sReply, $filename, $_bPriority=false){
	$subject = "=?utf-8?b?" . base64_encode($_sSubject) . "?=";
	$headers = "From: Magniflex <".$_sFrom.">\r\n";
	if($_sReply) $headers .= "Reply-To: $_sReply\r\n";
    if($_bPriority){
        $headers .= "X-Priority: 1 (Highest)\r\n";
        $headers .= "X-MSMail-Priority: High\r\n";
        $headers .= "Importance: High\r\n";
    }

	$eol = PHP_EOL;

	$file = fopen($filename, 'rb');
	$data = fread($file, filesize($filename));
	fclose($file);

	$fileatttype = mime_content_type($filename);
	$fileatname = basename($filename);

	$semi_rand     = md5(uniqid(time()));
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
	$headers      .= "MIME-Version: 1.0\r\n" .
	  "Content-Type: multipart/mixed;" .
	  " boundary=\"{$semi_rand}\"";
	  $message =  "--{$semi_rand}" . $eol .
	  "Content-Type: text/plain; charset=iso-8859-1" . $eol .
	  "Content-Transfer-Encoding: 7bit\n\n" . $eol .
	  $_sMessage  . $eol . $eol;

	$data = chunk_split(base64_encode($data));
	$message .= "--{$semi_rand}" . $eol .
	  "Content-Type: {$fileatttype};" . $eol .
	  " name=\"{$fileatname}\"" . $eol .
	  "Content-Disposition: attachment;" .$eol.
	  " filename=\"{$fileatname}\"" . $eol.
	  "Content-Transfer-Encoding: base64" . $eol . $eol .
	$data . $eol .
	 "--{$semi_rand}--";

	 $r = mail($_sEmail, $subject, $message, $headers);
	 var_dump($r);
}

function send_mail_to_admin($title,$html,$mails,$from,$reply){
	foreach($mails as $mail){
		sendmail($title,$html,$mail,$from,$reply);
	}
}

?>