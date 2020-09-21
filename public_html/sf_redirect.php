<?php
//sf url redirect

function sf301red($url){
	header("HTTP/1.1 301 Moved Permanently");
	Header('Refresh: 0; url=https://'.$_SERVER['HTTP_HOST'].$url);
	exit();
}

$sfurl = $_SERVER['REQUEST_URI'];
$new_url = '';

$pos = strpos($sfurl, '&size=');
if($pos !== FALSE){
	$sfurl = substr($sfurl, 0, $pos);
}

switch($sfurl){
	case '/index.php?cat=1': 
	case '/index.php?cat':
		$new_url = '/catalog/mattresses/'; break;
	case '/index.php?cat=1&id=3': 
	case '/index.php?cat=&id=3': 
		$new_url = '/catalog/orthopedic_mattresses/MERINOS/'; break;
	case '/index.php?cat=1&id=5': 
	case '/index.php?cat&id=5': 
		$new_url = '/catalog/childrens_mattresses/MERINO-childrens/'; break;
	case '/index.php?cat=1&id=1': 
	case '/index.php?cat=&id=1': 
		$new_url = '/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/'; break;
	case '/index.php?cat=1&id=4': 
	case '/index.php?cat=&id=4': 
		$new_url = '/catalog/orthopedic_mattresses/MERINO-BAMBOO/'; break;
	case '/index.php?cat=1&id=12': 
	case '/index.php?cat=&id=12': 
		$new_url = '/catalog/orthopedic_mattresses/WATERLATTEX/'; break;
	case '/index.php?cat=1&id=11': 
	case '/index.php?cat=&id=11': 
		$new_url = '/catalog/orthopedic_mattresses/natur-baci-mattress/'; break;
	case '/index.php?cat=1&id=29': 
	case '/index.php?cat=&id=29':
		$new_url = '/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/'; break;
	case '/index.php?cat=1&id=9': 
	case '/index.php?cat=&id=9': 
		$new_url = '/catalog/orthopedic_mattresses/MEMO-MERINO/'; break;
	case '/index.php?cat=1&id=13': 
	case '/index.php?cat=&id=13':
		$new_url = '/catalog/mattresses/'; break; //нету на новом
	case '/index.php?cat=12': 
		$new_url = '/catalog/pillows/'; break;
	case '/index.php?cat=12&id=24': 
	case '/index.php?cat=&id=24': 
		$new_url = '/catalog/vacuum_pillows/RELAXSAN/'; break;
	case '/index.php?cat=12&id=25': 
	case '/index.php?cat=&id=25': 
		$new_url = '/catalog/Orthopedic_pillows/MEMORY/'; break;
	case '/index.php?cat=12&id=26': 
	case '/index.php?cat=&id=26': 
		$new_url = '/catalog/Orthopedic_pillows/%CERTHOMASSAGE/'; break;
	case '/index.php?cat=12&id=27': 
	case '/index.php?cat=&id=27': 
		$new_url = '/catalog/Orthopedic_pillows/ALOE+VERA/'; break;
	case '/index.php?cat=12&id=28': 
	case '/index.php?cat=&id=28': 
		$new_url = '/catalog/Orthopedic_pillows/COMFORT-PILLOW/'; break;
	case '/index.php?cat=10': 
		$new_url = '/catalog/bases/'; break;
	case '/index.php?cat=10&id=15': 
	case '/index.php?cat=&id=15': 
		$new_url = '/catalog/bases/DREAM/'; break;
	case '':
		$new_url = '/'; break;
}

if(isset($_GET['new_url'])){
	$new_url = $_GET['new_url'];
}

if($new_url) sf301red($new_url);


//end
?>