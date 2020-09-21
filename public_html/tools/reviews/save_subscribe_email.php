<?php

function save_subscribe_email($email, $name = '', $order_id = ''){
	$unsubscribe_emails = file_get_contents($_SERVER["DOCUMENT_ROOT"] . '/tools/reviews/unsubscribe_emails.txt');
	$subscribe_emails = file_get_contents($_SERVER["DOCUMENT_ROOT"] . '/tools/reviews/subscribe_emails.csv');
	if(stripos($unsubscribe_emails, $email) !== FALSE || stripos($subscribe_emails, $email) !== FALSE){
		unset($unsubscribe_emails, $subscribe_emails, $email);
		return;
	}
	unset($unsubscribe_emails, $subscribe_emails);
	
	$email_data = array($email, $name, $order_id, date('d.m.Y'));
	$fp = fopen($_SERVER["DOCUMENT_ROOT"] . '/tools/reviews/subscribe_emails.csv', 'a');
	fputcsv($fp, $email_data);
	fclose($fp);
}

?>