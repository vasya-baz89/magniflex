<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

// transform date dd.mm.yyyy to yyyy-mm-dd
function text_date_to_iso8601($date){
	return date('Y-m-d',strtotime($date));
}

// сравнение дат
function news_cmp_by_date($a, $b){
	if (strtotime($a['date']) == strtotime($b['date'])) {
        return 0;
    }
    return (strtotime($a['date']) > strtotime($b['date'])) ? -1 : 1;
}


// получение последних новостей
function get_last_news($news, $count){
	if($count && usort($news, 'news_cmp_by_date')){
		return array_slice($news, 0, $count);
	}
	return $news;
}

// html data to xml text
function remake($s)
{
    $s = str_replace('&nbsp;',' ',$s);
    $s = str_replace("&nbsp;",' ',$s);
    $s = html_entity_decode(strip_tags($s,ENT_COMPAT));
    $s = str_replace('&nbsp;',' ',$s);
    $s = str_replace("&nbsp;",' ',$s);
    return $s;
}

function filter_shops($address ){
	global $shopss;
	$shops_arr = array();

    foreach($shopss as $shop){
		if($shop['full_exposition'] || in_array($address, $shop['exposition'])){
			array_push($shops_arr, $shop);
		}
	}
	return array($shops_arr);
}


//формат цены (из 45678.00 в 45 678)
function format_price($_price){
	/*$_price = intval($_price);
	$_format_price = '';
	if($_price >= 1000000){
		$_format_price = intval($_price/1000000);
		$_price -= intval($_format_price*1000000);
		$_format_price .= ' ';
		$big_prs = true;
		?><script>console.log("1");</script><?php
	}

	$small_nl = intval($_price%1000);
	if($small_nl == 0) $small_nl = '000';

	if($_price >= 1000){

		$_format_price .= intval($_price/1000).' '.$small_nl;
	}
	else if($big_prs){
		$_format_price .= '000 '.$small_nl;
	}
	else */
	$_format_price = number_format($_price, 0, ',', ' ');
//$_price;
	return $_format_price;
}

function is_discount_koef($product, $need_size){
	$_is_discount_koef = false;

	if(!isset($product['discount_koef'])) return false;

	if(isset($product['discount_koef']['date_start']) && isset($product['discount_koef']['date_end'])){
		if(strtotime($product['discount_koef']['date_start']) > time() || strtotime($product['discount_koef']['date_end'])+24*3600 < time()){
			return false;
		}
	}
	if($product['sizes'] && $product['discount_koef']['sizes']){
		$old_price_sizes = false;
		foreach($product['sizes'] as $size){
			foreach($product['discount_koef']['sizes'] as $discount_size){
				if($size[0] == $discount_size && ($size[0] == $need_size || !$need_size)){
					$old_price_sizes = true; break;
				}
			}
		}
		if(!$old_price_sizes) return false;
	}

	if(isset($product['discount_koef']['price_koef'])){
		if($product['discount_koef']['price_koef'] > 0 && $product['discount_koef']['price_koef'] < 1){
			$_is_discount_koef = true;
		}
	}

	return $_is_discount_koef;
}

function is_discount_newprice($product, $need_size){
	$_is_discount_koef = false;

	if(!isset($product['discount_koef'])) return false;
	
	if(isset($product['discount_koef']['date_start']) && isset($product['discount_koef']['date_end'])){
		if(strtotime($product['discount_koef']['date_start']) > time() || strtotime($product['discount_koef']['date_end'])+24*3600 < time()){
			return false;
		}
	}

	if(isset($product['discount_koef']['prices'])){
		if($product['sizes'] && $product['discount_koef']['sizes']){
			$old_price_sizes = false;
			foreach($product['sizes'] as $size){
				foreach($product['discount_koef']['sizes'] as $discount_size){
					if($size[0] == $discount_size && $product['discount_koef']['prices'][$size[0]] > 0 && ($size[0] == $need_size || !$need_size)){
						return true;
					}
				}
			}
			if(!$old_price_sizes) return false;
		}

		if(!is_array($product['discount_koef']['prices']) && $product['price']){
			if($product['discount_koef']['prices'] > 0 && intval($product['discount_koef']['prices']) < intval($product['price'])){
				$_is_discount_koef = true;
			}
		}

	}

	return $_is_discount_koef;
}

//минимальная цена товара
function get_product_min_price($_name){
	global $products;
	$_price = false;

	foreach($products as $el){
		if($el['name'] == $_name){
			if($el['sizes'] && is_array($el['sizes'])){
				if(!$_price || $_price > $el['sizes'][0][1]){
					$_price = $el['sizes'][0][1];
				}
				if(is_discount_newprice($el, $el['sizes'][0][0])){
					$_price = $el['discount_koef']['prices'][$el['sizes'][0][0]];
				}
				if(is_discount_koef($el, $el['sizes'][0][0])){
					$_price = $el['sizes'][0][1]*(1-$el['discount_koef']['price_koef']);
				}
			}
			else if($el['price']){
				if(!$_price || $_price > $el['price']){
					$_price = $el['price'];
				}
				if(is_discount_newprice($el,false)){
					$_price = $el['discount_koef']['prices'];
				}
				if(is_discount_koef($el, $el['sizes'][0][0])){
					$_price = $el['price']*(1-$el['discount_koef']['price_koef']);
				}
			}
			break;
		}
	}
	return $_price;
}

function get_product_min_price_old($_name){
	global $products;
	$_price = false;

	foreach($products as $el){
		if($el['name'] == $_name){
			if($el['sizes'] && is_array($el['sizes'])){
				return $el['sizes'][0][1];
			}
			else if($el['price']){
				return $el['price'];
			}
			break;
		}
	}

	return $_price;
}

function get_product_attr($_name, $_attr){
	global $products;

	foreach($products as $el){
		if($el['name'] == $_name){
			if(isset($el[$_attr])) return $el[$_attr];
		}
	}

	return FALSE;
}

//сравнение товаров (опции - размеры и цены)
function get_products_sravnenie_options(){
	global $products;
	$products_names = ['Merino (Merinos)','Merino Green Tea','Bamboo','WaterLattex','Naturalmente (New Naturcomfort)','Natur Baci','Memo Merino','Rest 9','Rest 10','Rest 12','FreshGel 9','FreshGel 10','FreshGel 12','New Comfort Plus 10','New Comfort Plus 12','Imperiale 24','Imperiale 28','Imperiale 33','Magnificent 12','Exchange Memoform Dual','Virtus 30'];
	$products_sizes = [];

	foreach($products as $el){
		if($el['name'] == $products_names[0]){

			foreach($el['sizes'] as $sz){
				$products_sizes []= $sz[0];
			}

			break;
		}
	}

	$html = '';
	foreach($products_sizes as $sz){
		$html .= '<option value="';
		$first_sz = true;

		foreach($products_names as $prod){
			foreach($products as $el){
				if($el['name'] == $prod){

					if(!$first_sz) $html .= ',';
					else $first_sz = false;
					$has_sz = false;

					foreach($el['sizes'] as $sz1){
						if($sz1[0] == $sz){
							$has_sz = true;
							$html .= format_price($sz1[1]);
						}
					}

					if(!$has_sz) $html .= 'на заказ';
				}
			}
		}

		$html .= '" >'.$sz.'</option>';
	}

	return $html;
}

//сравнение товаров (опции - размеры и цены)
function get_products_sravnenie_optionselit(){
	global $products;
	$products_names = ['Rest 9','Rest 10','Rest 12','FreshGel 9','FreshGel 10','FreshGel 12','New Comfort Plus 10','New Comfort Plus 12','Imperiale 24','Imperiale 28','Imperiale 33','Magnificent 12','Exchange Memoform Dual','Virtus 30'];
	$products_sizes = [];

	foreach($products as $el){
		if($el['name'] == $products_names[0]){

			foreach($el['sizes'] as $sz){
				$products_sizes []= $sz[0];
			}

			break;
		}
	}

	$html = '';
	foreach($products_sizes as $sz){
		$html .= '<option value="';
		$first_sz = true;

		foreach($products_names as $prod){
			foreach($products as $el){
				if($el['name'] == $prod){

					if(!$first_sz) $html .= ',';
					else $first_sz = false;
					$has_sz = false;

					foreach($el['sizes'] as $sz1){
						if($sz1[0] == $sz){
							$has_sz = true;
							$html .= format_price($sz1[1]);
						}
					}

					if(!$has_sz) $html .= 'на заказ';
				}
			}
		}

		$html .= '" >'.$sz.'</option>';
	}

	return $html;
}





function get_price_product_ama($cur_size, $product){
	$price_full = NULL;
	$price_with_discount = NULL;
	date_default_timezone_set('Europe/Moscow');
	$date = date('d.m.Y');

	$isDiscount = FALSE;


	if(isset($product['discount_koef']) && isset($product['discount_koef']['date_start']) && isset($product['discount_koef']['date_end'])){
		if(strtotime($product['discount_koef']['date_start']) < time() && strtotime($product['discount_koef']['date_end'])+24*3600 > time()){
			$isDiscount = TRUE;
		}					
	}	

	if($product['parent_address2'] == 'mattresses'){	
		if($cur_size != NULL){
			if($isDiscount){
				$size_exist = FALSE;
				foreach($product['sizes'] as $size){
					if($size[0] == $cur_size){			
						$size_exist = TRUE;
						$price_with_discount = $size[1];
						$price_full = $size[1];	
						if(isset($product['discount_koef']['prices'])){
							$finded = FALSE;					
							foreach($product['discount_koef']['prices'] as $key => $val){
								if($key == $size[0]) {
									$price_with_discount = $val;
									$finded = TRUE;
								}
							}		
							if(!$finded){
								$price_full = 0;
							}	
						} else {
							$price_with_discount = $size[1] * (1 - $product['discount_koef']['price_koef']);
						}
						return  array(format_price($price_full), format_price($price_with_discount));		
					} 
				}
				if(!$size_exist){			
					$price_with_discount = $product['sizes'][0][1];
					$price_full = $product['sizes'][0][1];	
					if(isset($product['discount_koef']['prices'])){
						$finded = FALSE;					
						foreach($product['discount_koef']['prices'] as $key => $val){
							if($key == $size[0]) {
								$price_with_discount = $val;
								$finded = TRUE;
							}
						}		
						if(!$finded){
							$price_full = 0;
						}	
					} else {
						$price_with_discount = $size[1] * (1 - $product['discount_koef']['price_koef']);
					}
					return  array(format_price($price_full), format_price($price_with_discount));
				}
			}		
		} else {
		}
	}
	return false;
}

function translit($s) {
  $s = (string) $s; // преобразуем в строковое значение
  $s = strip_tags($s); // убираем HTML-теги
  $s = str_replace(array("\n", "\r"), " ", $s); // убираем перевод каретки
  $s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
  $s = trim($s); // убираем пробелы в начале и конце строки
  $s = strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
  $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
  $s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); // очищаем строку от недопустимых символов
  $s = str_replace(" ", "-", $s); // заменяем пробелы знаком минус
  return $s; // возвращаем результат
}


?>