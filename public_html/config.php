<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

$debug = 0;

$cache_html_time = 0*3600;	//����� ����������� html �������� �� �������	(����� �������� ��������������� ����������� �� ������� �������)

$hide_discount_utm = 'utm_campaign=mc_hidden_test';
//$hide_discount_discount = array('price_koef' => 0.16); //������ �������
//$hide_discount_discount = 'custom'; //����� �������
$hide_discount_discount = null; //���������
?>