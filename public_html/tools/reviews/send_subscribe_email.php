<?php

$from ='info@magniflex.ru';
$subject = ', помогите нам стать лучше';
$message = file_get_contents(__DIR__.'/email.html');

//read
$all_data = array();
$send_emails = array();
if (($handle = fopen(__DIR__.'/subscribe_emails.csv', 'r')) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$that_time = strtotime($data[3]);
		$need_time = strtotime(date('Y-m-d').' -1 week');
		if(!empty($data)){
			if($need_time > $that_time){
				
				//send
				$send_to = trim($data[0]);
				$name = trim($data[1]);
				$order_id = trim($data[2]);
				
				if($name) $subject_personal = $name.$subject;
				else $subject_personal = 'Пожалуйста'.$subject;
				
				$message_personal = $message;
				$message_personal = str_replace('{{name}}', $name, $message_personal);
				$message_personal = str_replace('{{name_enc}}', urlencode($name), $message_personal);
				$message_personal = str_replace('{{order_id}}', urlencode(base64_encode($order_id)), $message_personal);
				$message_personal = str_replace('{{email_send}}', $send_to, $message_personal);
				
				$mail = mail($send_to, $subject_personal, $message_personal, "From: Magniflex <$from>\nContent-type: text/html; Charset=utf-8\r\nContent-Transfer-Encoding: 8bit");
				
				$send_emails []= $send_to;
				
				unset($data, $subject_personal, $message_personal, $send_to);
			}
			else{
				$all_data []= $data;
			}
		}
	}
	fclose($handle);
}

//save
$fp = fopen(__DIR__.'/subscribe_emails.csv', 'w');
foreach ($all_data as $fields) {
    fputcsv($fp, $fields);
}
fclose($fp);

$fp = fopen(__DIR__.'/unsubscribe_emails.txt', 'a');
foreach ($send_emails as $email) {
	fwrite($fp, $email.'
');
}
fclose($fp);
?>