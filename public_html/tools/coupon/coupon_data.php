<?php

//купоны приводятся к нижнему регистру
$coupons = array(
	//примеры купонов
	'sfmagnitestcoupon' => array('date_start' => '16.12.2019', 'date_end' => '10.10.2020', 'price_koef' => 0.002), //купон с датой (обязательны date_start и date_end)
	'sfvechniycoupon' => array('price_koef' => 0.001), //купон без даты, 0.001 - 0.1%
	
	//реальные купоны
	'bedesigner' => array('date_start' => '04.06.2020', 'date_end' => '14.06.2020', 'price_koef' => 0.15),
	'mykvrt' => array('date_start' => '15.06.2020', 'date_end' => '21.06.2020', 'price_koef' => 0.15),
	
);

function check_coupon($coupon){
	global $coupons;
	
	if(!$coupon) return false;
	$coupon = strtolower($coupon);
	
	foreach($coupons as $coupons_coupon => $coupons_el){
		if(strtolower($coupons_coupon) == $coupon){
			if(isset($coupons_el['date_start']) && isset($coupons_el['date_end'])){
				if(strtotime($coupons_el['date_start']) > time() || strtotime($coupons_el['date_end'])+24*3600 < time()){
					return false;
				}
			}
			if(!isset($coupons_el['price_koef'])) return false;
			if($coupons_el['price_koef'] <= 0 && $coupons_el['price_koef'] >= 1) return false;
			return true;
		}
	}
		
	return false;
}

function get_coupon_data($coupon){
	global $coupons;
	
	foreach($coupons as $coupons_coupon => $coupons_el){
		if($coupons_coupon == $coupon){
			return $coupons_el;
		}
	}
	return false;
}

?>