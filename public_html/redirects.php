<?php if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

$redirect_301 = false;
function redirect_301_do($cur_url){
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: ".$cur_url);
	exit;
}

// убираем лишние символы из адреса (например ?key=value&key2=value2)
if(strpos($cur_url,'?') !== FALSE && false /* пока отключено */){
	$cur_url = strstr($cur_url,'?',true);
	$redirect_301 = true;
}

// редиректы [ищет совпадения в адресе и меняет]
$redirects = array(
	array('/catalog/detskie-matrasy/MERINO-childrens/','/catalog/detskie-ortopedicheskie-matrasy/MERINO-childrens/'),
	array('/catalog/detskie-matrasy/Merino+Bamboo/','/catalog/detskie-ortopedicheskie-matrasy/Merino+Bamboo/'),
	array('/catalog/new-mattresses/Rest%209/','/catalog/elitnye-matrasy/Rest-9/'),
	array('/catalog/new-mattresses/Comfort%20Plus%2010/','/catalog/elitnye-matrasy/Comfort-Plus-10/'),
	array('/catalog/new-mattresses/FreshGel%2010/','/catalog/elitnye-matrasy/FreshGel-10/'),
	array('/catalog/new-mattresses/Rest+9/','/catalog/elitnye-matrasy/Rest-9/'),
	array('/catalog/new-mattresses/Comfort+Plus+10/','/catalog/elitnye-matrasy/Comfort-Plus-10/'),
	array('/catalog/new-mattresses/FreshGel+10/','/catalog/elitnye-matrasy/FreshGel-10/'),
	array('/catalog/mattresses/Rest+9/','/catalog/elitnye-matrasy/Rest-9/'),
	array('/catalog/mattresses/Comfort+Plus+10/','/catalog/elitnye-matrasy/Comfort-Plus-10/'),
	array('/catalog/mattresses/FreshGel+10/','/catalog/elitnye-matrasy/FreshGel-10/'),
	// array('/catalog/mattresses/MERINOS/','/catalog/orthopedic_mattresses/MERINOS/'),
	// array('/catalog/mattresses/MERINO-GREEN-TEA/','/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/'),
	// array('/catalog/mattresses/MERINO-BAMBOO/','/catalog/orthopedic_mattresses/MERINO-BAMBOO/'),
	// array('/catalog/mattresses/WATERLATTEX/','/catalog/orthopedic_mattresses/WATERLATTEX/'),
	// array('/catalog/mattresses/NEW-NATURCOMFORT/','/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/'),
	// array('/catalog/mattresses/natur-baci-mattress/','/catalog/orthopedic_mattresses/natur-baci-mattress/'),
	// array('/catalog/mattresses/MEMO-MERINO/','/catalog/orthopedic_mattresses/MEMO-MERINO/'),
	array('/catalog/pillows/RELAXSAN/','/catalog/vacuum_pillows/RELAXSAN/'),
	array('/catalog/pillows/MEMORY/','/catalog/Orthopedic_pillows/MEMORY/'),
	array('/catalog/pillows/ORTHOMASSAGE/','/catalog/Orthopedic_pillows/ORTHOMASSAGE/'),
	array('/catalog/pillows/COMFORT-PILLOW/','/catalog/Orthopedic_pillows/COMFORT-PILLOW/'),
	array('/catalog/pillows/ALOE+VERA/','/catalog/Orthopedic_pillows/ALOE+VERA/'),
	//array('/catalog/mattresses/200-220/','/catalog/mattresses/200x220/'),
	array('',''),
	array('',''),
	array('',''),
);

// редиректы строгие [сравнивает адрес и меняет]
$redirects_strict = array(
	array('/production/','/production/nastoyashchie-ortopedicheskie-matrasy/'),
	array('/o-magniflex/','/o-magniflex/company/'),
	array('/pokupatelyam/','/pokupatelyam/oplata-i-dostavka/'),
	array('/orthopedic-mattresses/sravnenie-matrasov/','/sravnenie-matrasov/'),
	array('/orthopedic-mattresses/','/sravnenie-matrasov/'),
	//array('/catalog/mattresses/150-190/','/catalog/mattresses/150x190/'),		
);

foreach($redirects as $el){
	if(!$el[0]) continue;
	if(strpos($cur_url, $el[0]) !== FALSE){
		$cur_url = str_replace($el[0], $el[1], $cur_url);
		$redirect_301 = true;
		break;
	}
}

foreach($redirects_strict as $el){
	if(!$el[0]) continue;
	if($cur_url == $el[0]){
		$cur_url = $el[1];
		$redirect_301 = true;
		break;
	}
}

if($redirect_301){
	redirect_301_do($cur_url);
}

$redir = array(
'/catalog/mattresses/150-190/'=>'/catalog/mattresses/150x190/',
'/catalog/mattresses/150-200/'=>'/catalog/mattresses/150x200/',
'/catalog/mattresses/160-190/'=>'/catalog/mattresses/160x190/',
'/catalog/mattresses/160-200/'=>'/catalog/mattresses/160x200/',
'/catalog/mattresses/180-200/'=>'/catalog/mattresses/180x200/',
'/catalog/mattresses/200-200/'=>'/catalog/mattresses/200x200/',
'/catalog/mattresses/60-120/'=>'/catalog/mattresses/60x120/',
'/catalog/mattresses/80-190/'=>'/catalog/mattresses/80x190/',
'/catalog/mattresses/80-200/'=>'/catalog/mattresses/80x200/',
'/catalog/mattresses/90-190/'=>'/catalog/mattresses/90x190/',
'/catalog/mattresses/90-200/'=>'/catalog/mattresses/90x200/',
'/catalog/mattresses/100-200/'=>'/catalog/mattresses/100x200/',
'/catalog/mattresses/110-190/'=>'/catalog/mattresses/110x190/',
'/catalog/mattresses/120-190/'=>'/catalog/mattresses/120x190/',
'/catalog/mattresses/120-200/'=>'/catalog/mattresses/120x200/',
'/catalog/mattresses/140-190/'=>'/catalog/mattresses/140x190/',
'/catalog/mattresses/140-200/'=>'/catalog/mattresses/140x200/',
'/catalog/mattresses/200-220/'=>'/catalog/mattresses/200x220/',
'/catalog/mattresses/70-160/'=>'/catalog/mattresses/70x160/',
'/catalog/mattresses/80-160/'=>'/catalog/mattresses/80x160/',
'/catalog/mattresses/80-180/'=>'/catalog/mattresses/80x180/',
'/catalog/mattresses/90-140/'=>'/catalog/mattresses/90x140/',
);

foreach($redir as $old_url=>$new_url)
if ($_SERVER["REQUEST_URI"] == $old_url)
{
header("HTTP/1.0 301 Moved Permanently"); 
header('Location: https://' . $_SERVER["HTTP_HOST"] . $new_url);
exit();
}
?>