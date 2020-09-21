<?php

session_name('sf_magniflex');
session_start();

header('Expires: Sun, 27 May 2007 01:00:00 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header("Pragma: no-cache");

define('sf_magniflex',true);
include_once('../config.php');
include_once('../data/products.php');
include_once('coupon/coupon_data.php');

$coupon = '';
if($_SESSION['coupon']){
	if(check_coupon($_SESSION['coupon'])){
		$coupon = strtolower($_SESSION['coupon']);
	}
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

if(!$_SESSION['cart']) $_SESSION['cart'] = array();

$json_data=array();

/* скидки */
function coupon_koef($_coupon){
	$price_koef = 1;

	if(check_coupon($_coupon)){
		$_coupon_data = get_coupon_data($_coupon);
		if(!empty($_coupon_data)){
			if($_coupon_data['price_koef']){
				if($_coupon_data['price_koef'] > 0 && $_coupon_data['price_koef'] < 1){
					$price_koef = 1-$_coupon_data['price_koef'];
				}
			}
		}
	}

	return $price_koef;
}

function spec_price_koef($_name, $_size){	//скидка на товар (процентная)
	global $products;
	$price_koef = 1;

	foreach($products as $product){
		foreach($_SESSION['cart'] as $item){
			if($product['name'] == $_name && is_discount_koef($product,$_size) && $item['name'] == $product['name']){
				$price_koef = 1-$product['discount_koef']['price_koef'];
				break;
			}
		}
	}

	return $price_koef;
}

function spec_newprice_k($_name, $_size){	//скидка на товар (указана новая цена)
	global $products;
	$price_koef = 1;

	foreach($products as $product){
		foreach($_SESSION['cart'] as $item){
			if($product['name'] == $_name && is_discount_newprice($product,$_size) && $item['name'] == $product['name']){
				if(is_array($product['discount_koef']['prices'])){
					if($product['discount_koef']['prices'][$_size] > 0){
						$old_price = 0;
						foreach($product['sizes'] as $size){
							if($size[0] == $_size){
								$old_price = intval($size[1]); break;
							}
						}
						if($old_price){
							$price_koef = floatval($product['discount_koef']['prices'][$_size])/$old_price;
						}
					}
				}
				else{
					if($product['discount_koef']['prices'] > 0 && $product['discount_koef']['prices'] < $product['price']){
						$price_koef = floatval($product['discount_koef']['prices'])/$product['price'];
					}
				}

				break;
			}
		}
	}

	return $price_koef;
}

function pillow_price_koef($_name, $_size){ //скидка подушки и наматрасники 25%
	global $products;
	$price_koef = 1;

	foreach($products as $product){
		if($product['name'] == $_name){
			if(strpos($product['parent_address2'], 'pillows') !== FALSE || strpos($product['parent_address'], 'podushki') !== FALSE ||
			strpos($product['parent_address'], 'new-mattress-covers') !== FALSE || strpos($product['parent_address2'], 'new-mattress-covers') !== FALSE ||
			strpos($product['parent_address'], 'mattress-covers') !== FALSE || strpos($product['parent_address2'], 'mattress-covers') !== FALSE){
				if(strpos($product['parent_address'], 'gelevye-podushki') !== FALSE) continue; //убираем временно акцию для гелевых подушек
				foreach($_SESSION['cart'] as $item){
					foreach($products as $p_mat){
						if($item['name'] == $p_mat['name'] && ($p_mat['parent_address2'] == 'mattresses' && $p_mat['parent_address'] != 'outlet')){
							$price_koef = 0.75;
						}
					}
				}
			}
		}
	}

	return $price_koef;
}

function track_price_koef($_name, $_size){ //скидка пледы 20%
	global $products;
	$price_koef = 1;

	foreach($products as $product){
		if($product['name'] == $_name){
			if(strpos($product['parent_address'], 'plaids') !== FALSE){
				foreach($_SESSION['cart'] as $item){
					foreach($products as $p_mat){
						if($item['name'] == $p_mat['name'] && ($p_mat['parent_address2'] == 'mattresses' || $p_mat['parent_address2'] == 'pillows')){
							$price_koef = 0.80;
						}
					}
				}
			}
		}
	}
	return $price_koef;
}

function price_koef_do($_name, $_size, $_coupon = false){
	global $json_data;
	$coupon_koef_func = array(coupon_koef);
	$price_koef_func = array(spec_newprice_k, spec_price_koef, track_price_koef,pillow_price_koef);
	$price_koef_func_add = array();	//эти скидки суммируются
	$price_koef = 1;
	$priority_koef = false;

	foreach($coupon_koef_func as $item_func){
		$price_koef_tmp = $item_func($_coupon);
		if($price_koef > $price_koef_tmp){
			$price_koef = $price_koef_tmp;
			$priority_koef = true;
		}
	}

	foreach($price_koef_func as $item_func){
		$price_koef_tmp = $item_func($_name,$_size);
		if($price_koef > $price_koef_tmp){
			$price_koef = $price_koef_tmp;
			$priority_koef = false;
		}
		//if($price_koef < 1) return $price_koef;
	}

	if($priority_koef){
		foreach($price_koef_func_add as $item_func){
			$price_koef_tmp = $item_func($_name,$_size);
			if($price_koef > $price_koef_tmp) $price_koef = $price_koef_tmp;
		}
	}
	else{
		foreach($price_koef_func_add as $item_func){
			$price_koef *= $item_func($_name,$_size);
		}
	}

	if($price_koef > 1) $price_koef = 1;

	return $price_koef;
}
/* скидки end */

function get_product_attr($_name, $_attr){
	global $products;

	foreach($products as $product){
		if($product['name'] == $_name){
			if(isset($product[$_attr])){
				return $product[$_attr];
			}
		}
	}
	return false;
}

function get_product_price($_name, $_size){
	global $products;
	global $coupon;
	$_price = array();

	foreach($products as $product){
		if($product['name'] == $_name){
			if($product['price']){
				$_price['base_price'] = intval($product['price']);
				$_price['price'] = intval($product['price']*price_koef_do($_name,false,$coupon));
			}
			else{
				foreach($product['sizes'] as $size){
					if($size[0] == $_size){
						$_price['base_price'] = intval($size[1]);
						$_price['price'] = intval($size[1]*price_koef_do($_name,$size[0],$coupon));
						break;
					}
				}
			}

			break;
		}
	}

	return $_price;
}

function get_total_price_count(){
	$_total_price_count = array();
	$_total_price_count['total_base_price'] = 0;
	$_total_price_count['total_price'] = 0;
	$_total_price_count['total_count'] = 0;

	if(!empty($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $item){
			if(isset($item['name']) && isset($item['size']) && isset($item['count'])){
				$item_price = get_product_price($item['name'],$item['size']);
				$item_count = intval($item['count']);
				if($item_price['price'] > 0 && $item_count > 0){
					$_total_price_count['total_base_price'] += $item_price['base_price']*$item_count;
					$_total_price_count['total_price'] += $item_price['price']*$item_count;
					$_total_price_count['total_count'] += $item_count;
				}
			}
		}
	}

	return $_total_price_count;
}

// function print_basket(){
// 	global $products;
// 	$_html = '<div class="basket_table"><table cellspacing="0"><thead><tr><td>Товары</td><td>Размер</td><td>Скидка</td><td>Цена</td><td>Кол-во (штук)</td><td>Сумма</td><td></td></tr></thead><tbody>';

// 	if(!empty($_SESSION['cart'])){
// 		foreach($_SESSION['cart'] as $item){
// 			if(isset($item['name']) && isset($item['size']) && isset($item['count'])){
// 				foreach($products as $product){
// 					if($product['name'] == $item['name']){
// 						$base_price = 0; $price = 0;

// 						$_prod_url = '/catalog/';
// 						if($product['parent_address']) $_prod_url .= $product['parent_address'].'/';
// 						$_prod_url .= $product['address'].'/';
// 						$_html .= '<td class="it_photo"><a class="item_photo" href="'.$_prod_url.'"><img src="'.$product['small_img'].'" alt="'.$product['small_img_alt'].'"/></a><a class="item_title" href="'.$_prod_url.'">'.$product['name'].' '.(($item['size'])?($item['size']):('')).'</a><input type="hidden" class="sf_cart_prod_name" value="'.$product['name'].'" /></td>';

// 						$_html .= '<td class="it_sizes">';
// 						if($product['sizes'] && is_array($product['sizes'])){
// 							$_html .= '<select onchange="basket_change(this,\'change\');">';
// 							foreach($product['sizes'] as $size){
// 								$size_selected = '';
// 								if($size[0] == $item['size']){
// 									$base_price = $size[1];
// 									$size_selected = ' selected="selected" oldselected="oldselected"';
// 								}
// 								$_html .= '<option'.$size_selected.'>'.$size[0].'</option>';
// 							}
// 							$_html .= '</select>';
// 						}
// 						else if($product['price']){
// 							$base_price = $product['price'];
// 						}

// 						$price = $base_price*price_koef_do($product['name'],$item['size'],$coupon);
// 						$skidra_procent = round((1-$price/$base_price)*100);
// 						$_html_base_price = '';
// 						if($price != $base_price) $_html_base_price = '<div class="it_old_price">'.$base_price.' р.</div>';

// 						$_html .= '</td>';

// 						$_html .= '<td class="it_skidka"><div>'.$skidra_procent.'%</div></td>';

// 						$_html .= '<td class="it_price">'.$_html_base_price.'<div>'.intval($price).' р.</div></td>';

// 						$_html .= '<td class="it_count">
// 						<div class="category_product_quantity">
// 							<a href="javascript:void(0)" class="sf_minus" rel="nofollow" onclick="basket_change(this,\'minus\');">-</a>
// 							<input type="text" class="sf_base_quantity" name="quantity" value="'.intval($item['count']).'">
// 							<a href="javascript:void(0)" class="sf_plus" rel="nofollow" onclick="basket_change(this,\'plus\');">+</a>
// 							<span>шт</span>
// 						</div>
// 						</td>';

// 						$_html .= '<td class="it_summa"><div>'.(intval($price)*intval($item['count'])).' р.</div></td>';

// 						$_html .= '<td class="it_delete"><a href="javascript:void(0)" rel="nofollow" onclick="basket_change(this,\'delete\');">Удалить</a></td>';

// 						$_html .= '</tr>';
// 					}
// 				}
// 			}
// 		}
// 	}

// 	$_html .= '</tbody></table></div>';
// 	return $_html;
// }


function print_basket(){
	global $products;
	global $coupon;
	
	$_html = '<div class="basket_table">
				<input type="hidden" id="base_coupon" value="'.$coupon.'" />
				<div class="cart_head">
					<div class="cart_left_half"><p>ТОВАРЫ</p></div>
					<div class="cart_right_half">
						<div class="head_item"><p class="m-0">ЦЕНА</p></div>
						<div class="head_item"><p class="m-0">КОЛИЧЕСТВО</p></div>
						<div class="head_item"><p class="m-0">СУММА</p></div>
					</div>
				</div>
	';

	if(!empty($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $item){
			if(isset($item['name']) && isset($item['size']) && isset($item['count'])){
				foreach($products as $product){
					if($product['name'] == $item['name']){
						$base_price = 0; $price = 0;

						$_prod_url = '/catalog/';
						if($product['parent_address']) $_prod_url .= $product['parent_address'].'/';
						$_prod_url .= $product['address'].'/';

						$_html .= '<div class="cart_body">';
						$_html .= '<div class="cart_item_row">';
						$_html .= '<div class="cart_left_half">
							<div class="cart_photo_and_name_block">
								<a class="delete" href="javascript:void(0)" rel="nofollow" onclick="basket_change(this,\'delete\');"><img src="/img/1557224280.svg"/></a>
								<a class="item_photo" href="'.$_prod_url.'"><img src="'.$product['small_img'].'" alt="'.$product['small_img_alt'].'"/></a>
								<div class="cart_name_bock">
									<a class="item_title" href="'.$_prod_url.'">'.$product['name'].'</a>
									<p><a class="item_size" href="'.$_prod_url.'">'. (($item['size'])?($item['size']):('')) .'</a></p>
									<input type="hidden" class="sf_cart_prod_name" value="'.$product['name'].'" />
								</div>
							</div>
						</div>';





						$_html .= '<div class="cart_right_half">
							<div class="it_sizes" style="display:none;">';

								if($product['sizes'] && is_array($product['sizes'])){
							$_html .= '<select onchange="basket_change(this,\'change\');">';
							foreach($product['sizes'] as $size){
								$size_selected = '';
								if($size[0] == $item['size']){
									$base_price = $size[1];
									$size_selected = ' selected="selected" oldselected="oldselected"';
								}
								$_html .= '<option'.$size_selected.'>'.$size[0].'</option>';
							}
							$_html .= '</select>';
						}
						else if($product['price']){
							$base_price = $product['price'];
						}

						$price = $base_price*price_koef_do($product['name'],$item['size'],$coupon);
						$skidra_procent = round((1-$price/$base_price)*100);
						$_html_base_price = '';
						if($price != $base_price) $_html_base_price = '<div class="it_old_price">'.$base_price.' <span class="rub_price">P</span></div>';

						$_html .= '</div>';


						// $_html .= '<td class="it_skidka"><div>'.$skidra_procent.'%</div></td>';

						$_html .= '<div class="it_price">'.$_html_base_price.'<div>'.intval($price).' <span class="rub_price">P</span></div></div>';

						$_html .= '<div class="it_count">
						<div class="category_product_quantity">
							<a href="javascript:void(0)" class="sf_minus" rel="nofollow" onclick="basket_change(this,\'minus\');">-</a>
							<input type="text" class="sf_base_quantity" name="quantity" value="'.intval($item['count']).'">
							<a href="javascript:void(0)" class="sf_plus" rel="nofollow" onclick="basket_change(this,\'plus\');">+</a>
						</div>
						</div>';

						$_html .= '<div class="it_summa"><div>'.(intval($price)*intval($item['count'])).' <span class="rub_price">P</span></div></div>';


						$_html .= '</div>';
						$_html .= '</div>';
						$_html .= '</div>';
					}
				}
			}
		}
	}

	$_html .= '</div>';
	return $_html;
}

switch ($_POST['act'])
{
	case 'set_coupon':
		$json_data['set_coupon_result'] = '0';
		if(isset($_POST['coupon'])){
			if(check_coupon($_POST['coupon'])){
				$coupon = $_SESSION['coupon'] = strtolower($_POST['coupon']);
				$json_data['set_coupon_result'] = '1';
			}
		}
		break;
	case 'del_coupon':
		$coupon = $_SESSION['coupon'] = '';
		break;
	case 'cart':
		$json_data['coupon_koef'] = 0;
		if($coupon){
			$coupon_data = get_coupon_data($coupon);
			$json_data['coupon_koef'] = $coupon_data['price_koef'];
		}
		$json_data['basket_table'] = print_basket();
		$json_data = array_merge($json_data, get_total_price_count());
		break;
	case 'mini_basket':
		$json_data = get_total_price_count();
		break;

	case 'add_to_cart':
		$is_in_cart = false;
		$price = get_product_price($_POST['prod'], $_POST['size']);

		if($price['price'] > 0 && intval($_POST['count']) > 0){
			if(!empty($_SESSION['cart'])){
				foreach($_SESSION['cart'] as &$item){
					if(isset($item['name']) && isset($item['size']) && isset($item['count'])){
						if($item['name'] == $_POST['prod'] && $item['size'] == $_POST['size']){
							$item['count'] += intval($_POST['count']);
							$is_in_cart = true;
						}
					}
				}
			}
			if(!$is_in_cart){
				$new_item = array();
				$new_item['name'] = $_POST['prod'];
				$new_item['size'] = 0;
				if($_POST['size']) $new_item['size'] = $_POST['size'];
				$new_item['count'] = intval($_POST['count']);

				$_SESSION['cart'][$new_item['name'].'_'.$new_item['size']] = $new_item;
			}
		}

		$json_data = array_merge($json_data, get_total_price_count());
		$json_data['small_img'] = get_product_attr($_POST['prod'], 'small_img');

		break;
	case 'change':
		if(!empty($_SESSION['cart'])){
			if(isset($_POST['new_count'])){
				if(intval($_POST['new_count']) > 0){
					foreach($_SESSION['cart'] as $item){
						if(isset($item['name']) && isset($item['size']) && isset($item['count'])){
							if($item['name'] == $_POST['prod'] && $item['size'] == $_POST['size']){
								$_SESSION['cart'][$_POST['prod'].'_'.$_POST['size']]['count'] = intval($_POST['new_count']);
							}
						}
					}
				}
			}
			if(isset($_POST['new_size'])){
				$is_another_size = false;
				$price = get_product_price($_POST['prod'], $_POST['new_size']);
				if($price['price'] > 0){
					foreach($_SESSION['cart'] as $item){
						if(isset($item['name']) && isset($item['size']) && isset($item['count'])){
							if($item['name'] == $_POST['prod'] && $item['size'] == $_POST['new_size'] && intval($_POST['count']) > 0){
								$_SESSION['cart'][$_POST['prod'].'_'.$_POST['new_size']]['count'] += intval($_POST['count']);
								unset($_SESSION['cart'][$_POST['prod'].'_'.$_POST['size']]);
								$is_another_size = true;
								break;
							}
						}
					}
					if(!$is_another_size){
						$_SESSION['cart'][$_POST['prod'].'_'.$_POST['new_size']] = $_SESSION['cart'][$_POST['prod'].'_'.$_POST['size']];
						$_SESSION['cart'][$_POST['prod'].'_'.$_POST['new_size']]['size'] = $_POST['new_size'];
						unset($_SESSION['cart'][$_POST['prod'].'_'.$_POST['size']]);
					}
				}
			}
		}

		$json_data['basket_table'] = print_basket();
		$json_data = array_merge($json_data, get_total_price_count());
		break;
	case 'delete':
		if(!empty($_SESSION['cart'])){
			foreach($_SESSION['cart'] as $item){
				if(isset($item['name']) && isset($item['size'])){
					if($item['name'] == $_POST['prod'] && $item['size'] == $_POST['size']){
						unset($_SESSION['cart'][$_POST['prod'].'_'.$_POST['size']]);
					}
				}
			}
		}

		$json_data['basket_table'] = print_basket();
		$json_data = array_merge($json_data, get_total_price_count());
		break;
};

if(!isset($cart_no_echo))
	echo json_encode($json_data);

?>