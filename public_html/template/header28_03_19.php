<?php if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	} ?>
<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#" xml:lang="ru" lang="ru">
<head>
	<title><?=$page['title'];?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<meta name="keywords" content="<?=$page['keywords'];?>" />
	<meta name="description" content="<?=$page['description'];?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name='yandex-verification' content='5578942d6e0be8d4' />
	<meta name="google-site-verification" content="QYTqJp2Ec_22_4_38TWC-TEGWxX7OdinZ1Ec-SpP0UU" />
	<meta name="format-detection" content="telephone=no" />
<?php 
	//social img, desc
	$soc_img = (isset($page['img'])) ? ($page['img']) : ('/img/mattress_magniflex-comfort3.jpg');
?>
	<meta property="fb:app_id" content="175591192857982" />
	<meta property="fb:admins" content="100012925056500" />
	<meta property="og:url" content="<?=($domain.$cur_url);?> "/> 
	<meta property="og:title" content="<?=$page['title'];?>" />  
	<meta property="og:description" content="<?=$page['description'];?>" />  
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://www.magniflex.ru<?=$soc_img;?>" />
	<link rel="image_src" href="https://www.magniflex.ru<?=$soc_img;?>" />
	<?php 
		if(strpos($cur_url,'?') !== FALSE){
			echo('<link rel="canonical" href="'.strstr($domain.$cur_url,'?',true).'" />');
		}
		else{
			echo('<meta name="robots" content="index, follow" />');
		}
	?>
	
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<link href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css"  rel="stylesheet" />
	<link href="/template/css/global.css?v=27" type="text/css"  rel="stylesheet" />
	<link href="/template/css/responsive.css?v=27" type="text/css"  rel="stylesheet" />
	<link href="/template/js/datepicker/themes/classic.css" type="text/css" rel="stylesheet">
	<link href="/template/js/datepicker/themes/classic.date.css" type="text/css" rel="stylesheet">
	<link href="/template/js/datepicker/themes/classic.time.css" type="text/css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<!--<script type="text/javascript" src="/template/js/jquery00.js"></script>-->
	
	<script src="/template/js/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/template/js/ticker00.js"></script>
	<!--
	<script src="/template/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="/template/js/jquery.bxslider.min.js" type="text/javascript"></script>
	<script src="/template/js/coin-slider.min.js" type="text/javascript"></script>
	<script src="/template/js/easyzoom.js" type="text/javascript"></script>
	<script src="/template/js/jquery.inputmask.js" type="text/javascript"></script>
	-->
	<script src="/template/js/min/jquery.libs.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/template/js/ticker00.js"></script>
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
	
	<!--[if lt IE 9]>
	<script src="/template/js/css3-mediaqueries.js" type="text/javascript"></script>
	<![endif]-->
	
<style>
div.menu:nth-child(6) > a:nth-child(1){
cursor:default;
text-decoration:none;
	
	
}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$('#fade').list_ticker({
			speed:7000,
			effect:'fade'
		});
		$('#slide').list_ticker({
			speed:2000,
			effect:'slide'
		});		
	})
	</script>
</head>

<body>
	<!--<div id="hnb_fixtel" class="newbgblfr" style="background: rgb(0, 0, 0); display: block;">
		<div style="color:#FFEF0A;    font-size: 16px;">
			<a style="position: absolute;margin-left: -187px;" href="/blackfridaysale/">
					<img src="http://www.watchcases.ru/images/logo-bfn.png" alt="Шкатулки для часов с автоподзаводом Altitude" style="padding-top: 6px;" class="hnbblackfridaysale2">
			</a>
			Чёрная пятница: только 3 дня с 25 по 27 ноября 20% скидка на все матрасы и подушки!
				<span style="background: url('http://www.watchcases.ru/images/krestik.png') no-repeat;">Убрать</span>
		</div>
		<div class="hnbwidth960" style="color:#FFEF0A;    font-size: 17px;">
			<a style="position: absolute;margin-left: -187px;" href="/blackfridaysale/">
					<img src="/images/logo-bfn.png" alt="Шкатулки для часов с автоподзаводом Altitude" style="padding-top: 6px;" class="hnbblackfridaysale2">
			</a>
			Чёрная пятница: только 3 дня с 25 по 27 ноября 20% скидка на все матрасы и подушки!
				<span style="background: url(http://www.watchcases.ru/images/krestik.png) no-repeat;" onclick="document.getElementById('bx_eshop_wrap').style.margin='0px';document.getElementById('hnbtopinlinr').style.top='0px';document.getElementById('bx_eshop_wrap').style.margin='0px';">Убрать</span>
		</div>
	</div>-->
	<script>
		$(function(){
		$('#hnb_fixtel>div>span').click(function(){
		$('#hnb_fixtel').toggle();
		  return false;
		 });
		});
		
		//sf popup [2]
		if(typeof localStorage != 'udnefined'){
			var last_date = parseInt(localStorage.getItem('sf_popup2_last_date'));
			if(!last_date) last_date = 0;
			var cut_date = (new Date()).getTime();
			var interval = 7*24*60*60*1000;
			
			if(cut_date >= last_date + interval || (!last_date)){
				$('#hnb_fixtel').show();
			}
			$(document).ready(function(){
				$('#hnb_fixtel span').click(function(){
					$('#hnb_fixtel').hide();
					localStorage.setItem('sf_popup2_last_date',cut_date);
				});
			});
		}

	</script>
	<div class="hnbbgbfpoab"></div>
	<div id="wrap">
	
		<div id="med_cookies"></div>
		<div id="martop" class="header_top">
		<div id="wekend" style="position: absolute;text-align: center;"><a  class="phone_color2 displayblock480" style="color: #fff!important;margin-right: 40px;margin-top: 11px;font-size: 15px;">+7 (495) 507 22 65</a></div>
			<div class="left menu_top_mobile">
				<div class="left hide_show_menu_wrap">
					<div class="hide_show_menu"></div>
				</div>
				<div class="left text">
					Официальный сайт Magniflex в России
				</div>
				<div class="clear"></div>
			</div>
			<div class="left menu_top_block">
				<div id="menu_top">
					<div class="menu">
						<img class="img_italy" src="/img/made-italy.svg" title="Magniflex флаг Италия" alt="Magniflex Италия">
					</div>
					<div class="menu">
						<a href="/o-magniflex/company/" title="О компании Magniflex">О Magniflex</a>
						<ul class="angle1">
							<li class="angle"></li>
							<li class="angle"><a href="/o-magniflex/company/" title="О компании Magniflex">О компании</a></li>
							<li class="angle"><a href="/o-magniflex/mission/" title="Важно Magniflex">Важно</a></li>
							<li class="angle"><a href="/o-magniflex/why-magniflex/" title="Почему Magniflex">Почему Magniflex</a></li>
							<li class="angle"><a href="/o-magniflex/company-history/" title="История компании Magniflex">История компании</a></li>
							<li class="angle"><a href="/o-magniflex/magniflex-in-the-world/" title="Magniflex во всем мире">Magniflex во всем мире</a></li>
							<li class="angle"><a href="/o-magniflex/stars-magniflex/" title="Звезды и Magniflex">Звезды и Магнифлекс</a></li>
							<li class="angle"><a href="/o-magniflex/oficialnoe-predstavitelstvo-magniflex/" title="Единственное Представительство Magniflex В РФ">Единственные в РФ</a></li>
							<li class="angle"><a href="/o-magniflex/MAGNIFLEX-AND-RUGBY/" title="Magniflex и регби">Magniflex и регби</a></li>
							<li class="angle"><a href="/o-magniflex/magniflex-daydreamer/" title="На элитных пляжах">На элитных пляжах</a></li>
						</ul>
					</div>
					<div class="menu">
						<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" title="О продукции Magniflex">О продукции</a>
						<ul class="angle1">
							<li class="angle"></li>
							<li class="angle"><a href="/production/nastoyashchie-ortopedicheskie-matrasy/" title="Настоящие ортопедические матрасы Magniflex">Настоящие ортопедические</a></li>
							<li class="angle"><a href="/production/made-in-Italy/" title="Исключительно итальянская продукция">Сделано в Италии</a></li>
							<li class="angle"><a href="/production/vakuumnaya-upakovka/" title="Вакуумная упаковка матрасов Magniflex">Вакуумная упаковка</a></li>
							<li class="angle"><a href="/production/fabric-and-treatments/" title="Ткани и технологии, используемые в чехлах матрасов и подушек Magniflex">Ткань чехла матраса</a></li>
							<li class="angle"><a href="/production/fabric-and-treatments-vnut/" title="Ткани и материалы внутри матраса, используемые в матрасах и подушках Magniflex">Ткани и материалы внутри матраса</a></li>
							<li class="angle"><a href="/production/inner-plates/" title="Наполнители, используемые в итальянских матрасах Magniflex">Наполнители</a></li>
							<li class="angle"><a href="/production/problem/" title="Проблемы">Проблемы</a></li>
						</ul>
					</div>
					<div class="menu">
						<a href="/catalog/mattresses/" title="Каталог">Каталог</a>
						<ul class="angle1">
							<li class="angle"></li>
							<li class="angle"><a href="/catalog/mattresses/" title="Настоящие ортопедические матрасы Magniflex">Ортопедические матрасы</a></li>
							<li class="angle"><a href="/catalog/elitnye-matrasy/" title="Исключительно итальянская продукция">Элитные матрасы</a></li>
							<li class="angle"><a href="/catalog/detskie-ortopedicheskie-matrasy/" title="Вакуумная упаковка матрасов Magniflex">Детские матрасы</a></li>
							<li class="angle"><a href="/catalog/pillows/Orthopedic_pillows/" title="Ткани и Технологии, используемые в матрасах и подушках Magniflex">Ортопедические подушки</a></li>
							<li class="angle"><a href="/catalog/pillows/vacuum_pillows/" title="Наполнители, используемые в итальянских матрасах Magniflex">Вакуумные подушки</a></li>
							<li class="angle"><a href="/catalog/pillows/gelevye-podushki/" title="Ткани и Технологии, используемые в матрасах и подушках Magniflex">Гелевые подушки</a></li>
							<li class="angle"><a href="/catalog/bases/" title="Наполнители, используемые в итальянских матрасах Magniflex">Аксессуары</a></li>
							<li class="angle"><a href="/production/sizes-and-prices/" title="Размеры и Цены">Размеры и Цены</a></li>
						</ul>
					</div>
					<div class="menu">
						<a href="/pokupatelyam/oplata-i-dostavka/" title="Информация покупателям">Покупателям</a>
						<ul class="angle1">
							<li class="angle"></li>
							<li class="angle"><a href="/pokupatelyam/oplata/" title="Оплата и доставка товаров">Оплата</a></li>
							<li class="angle"><a href="/pokupatelyam/oplata-i-dostavka/" title="Оплата и доставка товаров">Доставка</a></li>
							<li class="angle"><a href="/pokupatelyam/kak-oformit-zakaz/" title="Как оформить заказ">Как оформить заказ</a></li>
							<li class="angle"><a href="/pokupatelyam/warranty/" title="Гарантия и срок эксплуатации">Гарантия</a></li>
							<li class="angle"><a href="/pokupatelyam/obmen-i-vozvrat/" title="Возврат и обмен товара">Обмен и Возврат</a></li>
							<li class="angle"><a href="/pokupatelyam/certificates/" title="Сертификаты Magniflex">Сертификаты</a></li>
							<!--<li class="angle"><a href="/pokupatelyam/sizes-and-prices/" title="Размеры и цены матрасов Magniflex">Размеры и Цены</a></li>-->
							<li class="angle"><a href="/pokupatelyam/questions-answers/" title="Вопросы и ответы на часто задаваемые вопросы">Вопросы и Ответы</a></li>
							<li class="angle"><a href="/pokupatelyam/skidki-na-otkrytye-matrasy-magniflex/" title="Скидки на открытые матрасы Magniflex">Открытые матрасы</a></li>
						</ul>
					</div>
					<div class="menu">
						<a  href="/o-magniflex/dileram/" title="Информация Партнерам">Партнерам</a>
						<ul class="angle1">
							<li class="angle"></li>
							<li class="angle"><a href="/o-magniflex/internet_magazinam/" title="Интернет-магазинам">Интернет-магазинам</a></li>
							<li class="angle"><a href="/o-magniflex/predlozhenie-dlya-otelej/" title="Гостиницам и отелям">Гостиницам и отелям</a></li>
							<li class="angle"><a href="/o-magniflex/sotrudnichestvo_dizajnerami_arkhitektorami/" title="Дизайнерам и архитекторам">Дизайнерам и архитекторам</a></li>
							<li class="angle"><a href="/o-magniflex/sotrudnichestve-salonam-i-magazinam/" title="Мебельным салонам и магазинам">Мебельным салонам и магазинам</a></li>
							<li class="angle"><a href="/o-magniflex/dileram/" title="Стать дилером">Стать дилером</a></li>
							<li class="angle"><a href="/o-magniflex/optovim-pokupatelyam/" title="Оптовым покупателям">Оптовым покупателям</a></li>
							<li class="angle"><a href="/o-magniflex/for_partners/" title="Для партнеров">Для партнеров</a></li>
							
						</ul>
					</div>
					
					<div style="background: #d72525;padding-bottom: 1px;" class="menu">
						<a href="/skidki-magniflex/" title="Акции и Скидки">Акции</a>
						<ul class="angle1">
							<li class="angle"></li>
							<!---<li class="angle"><a href="/skidki-magniflex/shampanskoe_v_podarock/" title="Итальянское шампанское в подарок">Итальянское шампанское в подарок</a></li>-->
							<!--<li class="angle"><a href="/skidki-magniflex/skidki-30-na-podushki/" title="30% скидка на подушки!">30% скидка на подушки!</a></li>
							<li class="angle"><a href="/skidki-magniflex/skidka-15-legendarnye-matrasy/" title="15% скидка на легендарные матрасы Magniflex">15% скидка на легендарные матрасы</a></li>-->
							
							<li class="angle"><a href="/skidki-magniflex/#25_poducshki" title="25% скидка на подушки Magniflex">25% скидка на подушки</a></li>
							<li class="angle"><a href="/skidki-magniflex/#50_matras" title="50% скидка на матрасы!">50% скидка на матрасы! </a></li>
							<!--<li class="angle"><a href="/skidki-magniflex/skidki-novogodnyi" title="Новогодняя скидка 20% на все-все матрасы">Новогодняя скидка 20%</a></li>-->
							<!--<li class="angle"><a href="/skidki-magniflex/skidki-50-matras-divan/" title="50% скидка на матрас для дивана">50% скидка на матрас для дивана </a></li>-->
							<!--<li class="angle"><a href="/skidki-magniflex/skidki-15-memory-matras/" title="15% скидка на матрасы MEMORIE">15% скидка на матрасы MEMORIE </a></li>
							<li class="angle"><a href="/skidki-magniflex/#25_matras_fresh" title="Специальная цена на Magniflex FreshGel">Специальная цена на Magniflex FreshGel </a></li>-->
							<!--<li class="angle"><a href="/skidki-magniflex/chernaya-pyatnicya/" title="Черная пятница - 20% на все">Черная пятница - 20% на все</a></li>-->
							<!--<li class="angle"><a href="/skidki-magniflex/skidki-novogodnyi/" title="Новогодняя скидка 20%!">Новогодняя скидка 20%!</a></li>-->
							<!--<li class="angle"><a href="/skidki-magniflex/samaya-vygodnaya-tsena/" title="Самая выгодная цена на матрасы и подушки Magniflex">Самая выгодная цена</a></li>
							<li class="angle"><a href="/skidki-magniflex/skidki-23f-8m/" title="Скидка 15% на все матрасы">Скидка 15% на все матрасы</a></li>-->
						</ul>
					</div>
					<div class="menu">
						<a href="/o-magniflex/adresa-magazinov/" title="Адреса магазинов Magniflex">Магазины</a>
						<ul class="angle1">
							<li class="angle"></li>
							<li class="angle"><a href="/o-magniflex/internet-magazin-matrasov/" title="Интернет-магазин Magniflex">Интернет-Магазин</a></li>
							<li class="angle"><a href="/o-magniflex/show-room-matrasov/" title="Шоу-рум матрасов Magniflex">Флагманский шоу-рум в Москве</a></li>
							<li class="angle"><a href="/o-magniflex/moscow/" title="Адреса магазинов Magniflex в Москве">Магазины в Москве</a></li>
							<li class="angle"><a href="/o-magniflex/russia/" title="Адреса магазинов Magniflex в России">Магазины в России</a></li>
							<li class="angle"><a href="/o-magniflex/magniflex-mattresses-world/" title="Магазины Magniflex в других странах">Magniflex в других странах</a></li>
						</ul>
					</div>
					<div class="menu">
						<a href="/o-magniflex/contacts/" title="Контакты Magniflex">Контакты</a>
						
					</div>
					<div class="newhead_social_icon">
						
						<ul>
							<li class="vk"><a target="_blank" href="https://vk.com/magniflexrussia"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
							<li class="fb"><a target="_blank" href="https://www.facebook.com/magniflexrussia"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li class="is"><a target="_blank" href="https://www.instagram.com/magniflexrus/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li class="ok"><a target="_blank" href="http://ok.ru/magniflex"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
							<li class="tw"><a target="_blank" href="https://twitter.com/MagniflexRus"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li class="yb"><a target="_blank" href="https://www.youtube.com/c/MagniflexSuRussia"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						</ul>
							
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="mini_basket_block">
				<div id="mini_basket">
					<span class="icon_cart"></span>
					<a href="/cart/#breadcrumbs" title="Корзина товаров" rel="nofollow"><!--<span class="hnb_display480">Корзина </span>--><span class="count"></span><!-- тов--></a><!--, <span class="price"></span> р.-->
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_inner">
			<div id="logo" itemscope itemtype="http://schema.org/ImageObject">
				<a href="/" title="Magniflex, главная страница">
					<img width="317px" class="replace-2x" src="/img/logo.png" alt="Magniflex – итальянские ортопедические матрасы и подушки" itemprop="contentUrl"/>
					<span>Официальный сайт Magniflex в России</span>
				</a>
				
				<!--<div id="container_main2">
				<div id="slides2">
					
								<div>
									<span>СДЕЛАНО В ИТАЛИИ!</span>
									
									<div class="clear"></div>
								</div>
								
								<div>
									<span>В РОССИИ С 1992 ГОДА</span>
									
									<div class="clear"></div>
								</div>
								<div>
									<span>ОСНОВАНА В 1962 ГОДУ</span>
									
									<div class="clear"></div>
								</div>
				
			</div>
			</div>
			
			<ul id="fade">
			<li>СДЕЛАНО В ИТАЛИИ!</li>
			<li>В РОССИИ С 1992 ГОДА</li>
			<li>ОСНОВАНА В 1962 ГОДУ</li>
			</ul>
			-->
			</div>

			
			<script>
			  jQuery( document ).ready(function(){
				  if( 'devicePixelRatio' in window && window.devicePixelRatio == 2 ){
					var img_to_replace = jQuery( 'img.replace-2x' ).get();
				 
					for (var i=0,l=img_to_replace.length; i<l; i++) {
					  var src = img_to_replace[i].src;
					  src = src.replace(/\.(png|jpg|gif)+$/i, '@2x.svg');
					  img_to_replace[i].src = src;
					};
				  }
				});
			</script>
			
						<div class="hnb_announce">
					<span class="sf_phone_time">Прием звонков: с 9:00 до 22:00
					</span>
					<br>
					<span class="phone_color2"><span class="phone_color1">+7 (495)&nbsp;</span>507-22-65</span>
					
					<br>
					<span class="phone_color2"><span class="phone_color1">+7 (495)&nbsp;</span>989-11-32</span>
				
			</div>
			
			
			<!--------------hnb opacity
			<div class="announce">
				
			</div>-->
			
			<div id="wekend" class="hnb_display480">
				<span class="phone_text">Посоветуйтесь с профессионалами<br>
					Опыт &#8212; более 20 лет в России!
				</span>
				<img src="/img/srvimg/str_hedinf.png">
				<div class="callback">
					<a href="javascript:void(0);">Заказать Звонок</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>

<!-- Menu start (Смена ховер в global.js -> hoverok) -->
		<div class="main_menu_wrap">
			<div id="main_menu">
				<div class="menu">
					<a href="/catalog/mattresses/" title="Ортопедические матрасы Magniflex"><div class="animashka"></div> Ортопедические матрасы</a>
					<span class="mobile-grover"></span>
					<div class="menu_children_container slideUp">
					  <div>
						<div class="children_block info">
								<span class="titlemenu_filt"><b>КЛАССИЧЕСКИЕ КОЛЛЕКЦИИ</b></span>
								<ul class="wu_ichete">
									<li><a id="matras-merino" href="/catalog/orthopedic_mattresses/MERINOS/"> <div class="animashka-a"></div> Merino (Merinos)</a></li>
									<li><a id="matras-bamboo" href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/"> <div class="animashka-a"></div> Merino Bamboo</a></li>
									<li><a id="matras-stile" href="/catalog/collectio-Stile/"> <div class="animashka-a"></div> Stile</a></li>
									<li><a id="matras-watter-lat" href="/catalog/orthopedic_mattresses/WATERLATTEX/"> <div class="animashka-a"></div> WaterLattex</a></li>
									<li><a id="matras-pens" href="/catalog/collectio-Pensiero/"> <div class="animashka-a"></div> Pensiero</a></li>
									<li><a id="matras-natur" href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/"> <div class="animashka-a"></div> Naturalmente (New Naturcomfort)</a></li>
									<li><a id="matras-memorie" href="/catalog/collectio-Memorie/"> <div class="animashka-a"></div> Memorie</a></li>
									<li><a id="matras-memo" href="/catalog/orthopedic_mattresses/MEMO-MERINO/"> <div class="animashka-a"></div> Memo Merino</a></li>
									<li><a id="matras-topper" href="/catalog/bases/Topper-Best-Top/"> <div class="animashka-a"></div> тонкий матрас Topper Best Top</a></li> <!-- NEEW down-->
									<span class="titlemenu_filt"><b>Полезно</b></span>
									<li><a id="matras-sravn" href="/sravnenie-elitnyh-matrasov/"> <div class="animashka-a"></div> Сравнение элитных коллекций</a></li>
									<li><a id="archive-leg" href="/catalog/orthopedic_mattresses/snyatie-s-proizvodstva"> <div class="animashka-a"></div> Архив — Legenda</a></li>						
								</ul>					
						</div>
						<div class="children_block info" id="children_block_nope">
								<span class="titlemenu_filt"><b>ПРЕМИАЛЬНЫЕ КОЛЕКЦИИ</b></span>
								<ul class="wu_ichete">
									<li><a id="matras-rest" href="/catalog/elitnye-rest/"> <div class="animashka-a"></div> Rest</a></li>
									<li><a id="matras-fresh" href="/catalog/elitnye-FreshGel/"> <div class="animashka-a"></div> FreshGel</a></li>
									<li><a id="matras-comfort" href="/catalog/elitnye-comfort-delux/"> <div class="animashka-a"></div> Comfort Delux</a></li>
									<li><a id="matras-stret" href="/catalog/elitnye-Stretching/"> <div class="animashka-a"></div> Stretching</a></li>
									<li><a id="matras-imper" href="/catalog/elitnye-imperiale/"> <div class="animashka-a"></div> Imperiale</a></li>
									<li><a id="matras-magni" href="/catalog/elitnye-magnificent/"> <div class="animashka-a"></div> Magnificent</a></li>
									<li><a id="matras-harmo" href="/catalog/elitnye-harmony/"> <div class="animashka-a"></div> Harmony</a></li>
									<li><a id="matras-virtus" href="/catalog/elitnye-virtus/"> <div class="animashka-a"></div> Virtus</a></li>						
								</ul>		
						</div>
						<div class="children_block filternew">
							<span class="titlemenu_filt">ВЫ ИЩЕТЕ:</span> 
							<ul class="wu_ichete">
								<li><a id="find-ortoped" href="/catalog/orthopedic_mattresses/"> <div class="animashka-a"></div> ортопедические матрасы</a></li>
								<li><a id="find-zhest" href="/catalog/orthopedic_mattresses/zhestkie-mattresses/"> <div class="animashka-a"></div> жесткие матрасы</a></li>
								<li><a id="find-sredn" href="/catalog/orthopedic_mattresses/srednie-mattresses/"> <div class="animashka-a"></div> матрасы средней жесткости</a></li>
								<li><a id="find-myahk" href="/catalog/orthopedic_mattresses/myahkie-mattresses/"> <div class="animashka-a"></div> мягкие матрасы</a></li>
								<li><a id="find-model" href="/catalog/orthopedic_mattresses/reguliruemie-mattresses/"> <div class="animashka-a"></div>Dual - c регулируемой жесткостью</a></li>
								<li><a id="find-elit" href="/catalog/elitnye-matrasy/"> <div class="animashka-a"></div> элитные матрасы</a></li>
								<li><a id="find-memo" href="/catalog/orthopedic_mattresses/s-effektom-pamjati-mattresses/"> <div class="animashka-a"></div> матрасы с эффектом памяти</a></li>
								<li><a id="find-vacu" href="/catalog/orthopedic_mattresses/vacuum-mattresses/"> <div class="animashka-a"></div> вакуумные матрасы</a></li>
								<li><a id="find-divan" href="/catalog/orthopedic_mattresses/divannie-mattresses/"> <div class="animashka-a"></div> матрас для дивана</a></li>								
							</ul>
							<span class="titlemenu_filt">РАЗМЕР:</span> 
									<select method="get" class="hnb_changtaver_mattresses head-select" id="sf_cat_sizes" name="items" onchange="top.location=this.value">
										<option value="/catalog/mattresses/60x120/" selected="selected">60x120</option><option value="/catalog/mattresses/70x140/">70x140</option><option value="/catalog/mattresses/70x190/">70x190</option><option value="/catalog/mattresses/75x190/">75x190</option><option value="/catalog/mattresses/80x190/">80x190</option><option value="/catalog/mattresses/80x195/">80x195</option><option value="/catalog/mattresses/80x200/">80x200</option><option value="/catalog/mattresses/85x190/">85x190</option><option value="/catalog/mattresses/85x200/">85x200</option><option value="/catalog/mattresses/90x190/">90x190</option><option value="/catalog/mattresses/90x195/">90x195</option><option value="/catalog/mattresses/90x200/">90x200</option><option value="/catalog/mattresses/95x190/">95x190</option><option value="/catalog/mattresses/95x195/">95x195</option><option value="/catalog/mattresses/100x190/">100x190</option><option value="/catalog/mattresses/100x200/">100x200</option><option value="/catalog/mattresses/110x190/">110x190</option><option value="/catalog/mattresses/110x195/">110x195</option><option value="/catalog/mattresses/110x200/">110x200</option><option value="/catalog/mattresses/120x190/">120x190</option><option value="/catalog/mattresses/120x195/">120x195</option><option value="/catalog/mattresses/120x200/">120x200</option><option value="/catalog/mattresses/130x190/">130x190</option><option value="/catalog/mattresses/130x200/">130x200</option><option value="/catalog/mattresses/135x190/">135x190</option><option value="/catalog/mattresses/135x200/">135x200</option><option value="/catalog/mattresses/135x200/">135x200</option><option value="/catalog/mattresses/140x190/">140x190</option><option value="/catalog/mattresses/140x195/">140x195</option><option value="/catalog/mattresses/140x200/">140x200</option><option value="/catalog/mattresses/150x190/">150x190</option><option value="/catalog/mattresses/150x200/">150x200</option><option value="/catalog/mattresses/160x190/">160x190</option><option value="/catalog/mattresses/160x195/">160x195</option><option value="/catalog/mattresses/160x200/">160x200</option><option value="/catalog/mattresses/160x205/">160x205</option><option value="/catalog/mattresses/160x210/">160x210</option><option value="/catalog/mattresses/165x190/">165x190</option><option value="/catalog/mattresses/165x195/">165x195</option><option value="/catalog/mattresses/165x195/">165x195</option><option value="/catalog/mattresses/165x200/">165x200</option><option value="/catalog/mattresses/170x190/">170x190</option><option value="/catalog/mattresses/170x200/">170x200</option><option value="/catalog/mattresses/180x190/">180x190</option><option value="/catalog/mattresses/180x195/">180x195</option><option value="/catalog/mattresses/180x200/">180x200</option><option value="/catalog/mattresses/180x205/">180x205</option><option value="/catalog/mattresses/170x200/">170x200</option><option value="/catalog/mattresses/180x210/">180x210</option><option value="/catalog/mattresses/180x220/">180x220</option><option value="/catalog/mattresses/190x200/">190x200</option><option value="/catalog/mattresses/200x200/">200x200</option>				
									</select>
<br>
							<span class="titlemenu_filt higher">МАТЕРИАЛЫ:</span> <br>
							<ul class="wu_ichete" style="margin-top: -19px;">
								<li><b>Чехол:</b>  <a id="che-cool" href="/catalog/mattresses/chehol-coolmax-mattresses/"> <div class="animashka-a"></div> coolmax</a>, <a id="che-visc" href="/catalog/mattresses/chehol-viscose-mattresses/"> <div class="animashka-a"></div>viscose</a>, <a id="che-out" href="/catalog/mattresses/chehol-outlast-mattresses/"> <div class="animashka-a"></div> outlast</a>, <a id="che-satin" href="/catalog/mattresses/chehol-satin-mattresses/">  <div class="animashka-a"></div> satin</a></li>
								<li><a href=""><b>Основа:</b>  <a id="osn-memo" href="/catalog/mattresses/material-memoform-mattresses/"> <div class="animashka-a"></div> memoform</a>, <a id="osn-geo" href="/catalog/mattresses/material-geomemory-mattresses/">  <div class="animashka-a"></div> geomemory</a>, <a id="osn-gel" href="/catalog/mattresses/material-memogel-mattresses/"> <div class="animashka-a"></div> memogel</a>, <a id="osn-mallow" href="/catalog/mattresses/material-mallowfoam-mattresses/"> <div class="animashka-a"></div> mallowfoam</a></li>
							</ul>
						</div>
						<div class="children_block advanced">
							<img id="matras-img" class="pillow_img" src="/img/product/matrasy.png">
							<p id="matras-p" align="center" class="pillow_description">Ортопедические матрасы</p>
						</div>
						<div class="clear"></div>
					</div>
				  </div>
				</div>			
				<!--<div class="menu" id="premium-colectio" >
					<a href="/catalog/mattresses/" title="Ортопедические матрасы Magniflex"><div class="animashka"></div> Премиальные колекции </a>
					<span class="mobile-grover"></span>
					<div class="menu_children_container slideUp">
					  <div>
						<div class="children_block info">
								<span class="titlemenu_filt"><b>ПРЕМИАЛЬНЫЕ КОЛЕКЦИИ</b></span>
								<ul class="wu_ichete">
									<li><a id="matras-rest" href="/catalog/elitnye-rest/"> <div class="animashka-a"></div> Rest</a></li>
									<li><a id="matras-fresh" href="/catalog/elitnye-FreshGel/"> <div class="animashka-a"></div> FreshGel</a></li>
									<li><a id="matras-comfort" href="/catalog/elitnye-comfort-delux/"> <div class="animashka-a"></div> Comfort Delux</a></li>
									<li><a id="matras-stret" href="/catalog/elitnye-Stretching/"> <div class="animashka-a"></div> Stretching</a></li>
									<li><a id="matras-imper" href="/catalog/elitnye-imperiale/"> <div class="animashka-a"></div> Imperiale</a></li>
									<li><a id="matras-magni" href="/catalog/elitnye-magnificent/"> <div class="animashka-a"></div> Magnificent</a></li>
									<li><a id="matras-harmo" href="/catalog/elitnye-harmony/"> <div class="animashka-a"></div> Harmony</a></li>
									<li><a id="matras-virtus" href="/catalog/elitnye-virtus/"> <div class="animashka-a"></div> Virtus</a></li>									
								</ul>		
						</div>				
						<div class="clear"></div>
					</div>
				  </div>
				</div>-->
				<div class="menu">
					<a class="animBot" href="/catalog/detskie-ortopedicheskie-matrasy/" title="Детские матрасы и подушки Magniflex"> <div class="animashka-1"></div> Детские матрасы</a>
					<span class="mobile-grover"></span>
					<div class="menu_children_container slideUp">
					  <div>
						<div class="children_block info" style="width:380px;">
								<span class="titlemenu_filt"><b>ДЕТСКИЕ ОРТОПЕДИЧЕСКИЕ МАТРАСЫ</b></span>
								<ul class="wu_ichete">
									<li><a id="children-merino" href="/catalog/detskie-ortopedicheskie-matrasy/MERINO-childrens/"> <div class="animashka-a"></div> матрас для детей Merino</a></li>
									<li><a id="children-bambo" href="/catalog/detskie-ortopedicheskie-matrasy/B-Bamboo/"> <div class="animashka-a"></div> матрас для детей B-Bamboo</a></li>
									<li><a id="children-sfo" href="/catalog/detskie-ortopedicheskie-matrasy/B-Bamboo/"> <div class="animashka-a"></div> матрас для детей B-Bamboo Sfoderabile (съемный чехол)</a></li>
								</ul>
						</div>
						<div class="children_block filternew">
							<span class="titlemenu_filt">ВЫ ИЩЕТЕ:</span>
							<ul class="wu_ichete">
								<li><a id="razmer1" href="/catalog/detskie-ortopedicheskie-matrasy/"> <div class="animashka-a"></div> детские матрасы 60x120</a></li>
								<li><a id="razmer2" href="/catalog/detskie-ortopedicheskie-matrasy/MERINO-childrens/"> <div class="animashka-a"></div> детские матрасы 65x125</a></li>
								<li><a id="razmer3" href="/catalog/detskie-ortopedicheskie-matrasy/MERINO-childrens/"> <div class="animashka-a"></div> детские матрасы 70x140</a></li>
								<li><a id="razmer4" href="/catalog/detskie-ortopedicheskie-matrasy/MERINO-childrens/"> <div class="animashka-a"></div> детские матрасы 70x160</a></li>
							</ul>
						</div>
						<div class="children_block advanced">
							<img id="children-img" class="pillow_img" src="/img/product/detskie.png">
							<p align="center" id="children-p" class="pillow_description">Детские матрасы</p>
						</div>
						<div class="clear"></div>
					</div>
				  </div>
				</div>
				<div class="menu">
					<a class="kk" href="/catalog/pillows/" title="Подушки Magniflex"><div class="animashka-2"></div> <span class="displ1024none">ортопедические</span> подушки</a>
					<span class="mobile-grover"></span>
					<div class="menu_children_container slideUp">
					  <div>
						<div class="children_block info" style="width:297px;">
								<span class="titlemenu_filt"><b>КОЛЛЕКЦИИ</b></span>
								<ul class="wu_ichete">
									<li><a id="pillow-relax" href="/catalog/pillows/Collectio_relaxsan/"> <div class="animashka-a"></div> Коллекция Relaxsan </a></li>
									<li><a id="pillow-coolmax" href="/catalog/pillows/Collectio_coolmax/"> <div class="animashka-a"></div> Коллекция Coolmax </a></li>
									<li><a id="pillow-classico" href="/catalog/pillows/Collectio_classico/"> <div class="animashka-a"></div> Коллекция Classico </a></li>
									<li><a id="pillow-freshgel" href="/catalog/pillows/Collectio_freshgel"> <div class="animashka-a"></div> Коллекция Freshgel </a></li>
									<li><a id="pillow-superiore" href="/catalog/pillows/Collectio_superiore"> <div class="animashka-a"></div> Коллекция Superiore </a></li>
									<li><a id="pillow-virtuoso" href="/catalog/pillows/Collectio_virtuoso"> <div class="animashka-a"></div> Коллекция Virtuoso </a></li>
								</ul>
								<span class="vse_pillows"><a href="/catalog/pillows/"> <b> <div class="animashka-a"></div> Показать все подушки </b></a> </span>
						</div>
						<div style="margin-left: 100px; width: 250px;" class="children_block filternew">
							<span class="titlemenu_filt">ВЫ ИЩЕТЕ:</span>
							<ul class="wu_ichete">
								<li><a id="ortho-pil" href="/catalog/pillows/Orthopedic_pillows"> <div class="animashka-a"></div> ортопедические подушки</a></li>
								<li><a id="gel-pil" href="/catalog/pillows/gelevye-podushki/"> <div class="animashka-a"></div> гелевые подушки</a></li>
								<li><a id="vacu-pil" href="/catalog/pillows/vacuum_pillows/"> <div class="animashka-a"></div> вакуумные подушки</a></li>
								<li><a id="memo-pil" href="/catalog/pillows/s-effektom-pamjati/"> <div class="animashka-a"></div> подушки с эффектом памяти</a></li>
								<li><a id="mas-pil" href="/catalog/pillows/s-masagnim-effektom/"> <div class="animashka-a"></div> подушки с массажным эффектом</a></li>
								<li><a id="ice-pil" href="/catalog/pillows/s-oholojdaushim-effektom/"> <div class="animashka-a"></div> подушки с охлаждающим эффектом</a></li>
							</ul>						
							<span class="titlemenu_filt">МАТЕРИАЛЫ:</span> <br>
							<ul class="wu_ichete"  style="margin-top: -19px;">
								<li><b>Чехол:</b>  <a id="ch-cool" href="/catalog/pillows/chehol-coolmax/"> <div class="animashka-a"></div> coolmax</a>, <a id="ch-vis" href="/catalog/pillows/chehol-viscose/"> <div class="animashka-a"></div> viscose</a>, <a id="ch-out" href="/catalog/pillows/chehol-outlast/"> <div class="animashka-a"></div> outlast</a>, <a id="ch-satin" href="/catalog/pillows/chehol-satin/"> <div class="animashka-a"></div> satin</a></li>
								<li><a href=""><b>Основа:</b>  <a id="os-memo" href="/catalog/pillows/material-memoform/"> <div class="animashka-a"></div> memoform</a>, <a id="os-geo" href="/catalog/pillows/material-geomemory/"> <div class="animashka-a"></div> geomemory</a>, <a id="os-gel" href="/catalog/pillows/material-memogel"> <div class="animashka-a"></div> memogel</a>, <a id="os-foam" href="/catalog/pillows/material-mallowfoam/"> <div class="animashka-a"></div> mallowfoam</a></li>
							</ul>
							<ul class="wu_ichete">
								<li><a id="kogda-pillows" href=""><div class="animashka-a"></div><b>Полезно знать:</b>  Когда менять подушки?</a></li>
							</ul>
						</div>
						<div class="children_block advanced">
							<img id="pillow-img" class="pillow_img" src="/img/product/podushki.png">
							<p id="pillow-p" align="center" class="pillow_description">Подушки</p>
						</div>
						<div class="clear"></div>
					</div>
				  </div>
				</div>
				<div class="menu">
					<a href="/catalog/bases/" title="Аксессуары Magniflex"> <div class="animashka-3"></div>Аксессуары</a>
					<span class="mobile-grover"></span>
					<div class="menu_children_container slideUp">
					  <div>
						<div class="children_block info" style="width:307px;">
								<span class="titlemenu_filt"><b>ОСНОВАНИЯ ДЛЯ МАТРАСОВ</b></span>
								<ul class="wu_ichete">
									<li><a id="acs-com" href="/catalog/ortopedicheskie-reshetky/ortopedicheskoe-osnovanie-komfort/"> <div class="animashka-a"></div> Ортопедическое основание КОМФОРТ</a></li>
									<li><a id="acs-raz" href="/catalog/ortopedicheskie-reshetky/ortopedicheskoe-osnovanie-komfort-razbornoe/"> <div class="animashka-a"></div> Ортопедическое основание КОМФОРТ (разборное)</a></li>
									<li><a id="acs-lux" href="/catalog/ortopedicheskie-reshetky/ortopedicheskoe-osnovanie-lux/"> <div class="animashka-a"></div> Ортопедическое основание ЛЮКС</a></li>
								</ul>			
						</div>
						<div class="children_block filternew"  style="width:351px;">
							<span class="titlemenu_filt">ТОНКИЕ МАТРАСЫ:</span>
							<ul class="wu_ichete">
								<li><a id="acs-top" href="/catalog/bases/Topper-Best-Top/"> <div class="animashka-a"></div> Топпер</a></li>
								<li><a id="acs-ton" href="/catalog/bases/Topper-Best-Top/"> <div class="animashka-a"></div> Ортопедический тонкий матрас для дивана</a></li>
								<li><a id="acs-riv" href="/catalog/bases/Topper-Best-Top/"> <div class="animashka-a"></div> Тонкий матрас - повышение уровня комфорта любого матраса </a></li>
							</ul>
						</div>
						<div class="children_block advanced">
							<img class="pillow_img" id="acs-img" src="/img/product/small/osnovanie.jpg">
							<p align="center" id="acs-p" class="pillow_description">Аксессуары</p>
						</div>
						<div class="clear"></div>
					</div>
				  </div>					
				</div>
				<div class="menu">
					<a href="/catalog/beds/" title="Кровати"> <div class="animashka-3"></div>Кровати</a>
				</div>
				<div class="clear"></div>
			</div>
		</div>	
<!-- Finish Menu   -->



<div id="content">
<div class="hnb_width1020">
	<div class="hnb_newbloptopright">
<?php
	/* old html 
	<div class="magn_sp_ital">
		<a id="magn_sp_ital" href="/o-magniflex/MAGNIFLEX-AND-RUGBY/">Магнифлекс является спонсором<br>
сборной Италии »</a>
		</div>
		<div class="magn_el_plya">
		<a id="magn_el_plya" href="/o-magniflex/magniflex-daydreamer/">Магнифлекс на элитных<br>
пляжах »</a>
		</div>
	*/
	
	$magn_top_links_arr = array(
		array('magn_sp_ital', 'background:url(/img/srvimg/spn_zbriln.png) no-repeat left;', '/o-magniflex/MAGNIFLEX-AND-RUGBY/', 'Магнифлекс является спонсором<br>сборной Италии »'),
		array('magn_el_plya', 'background:url(/img/srvimg/magni_na_rlpl.png) no-repeat left;', '/o-magniflex/magniflex-daydreamer/', 'Магнифлекс на элитных<br>пляжах »'),
		array('magn_an_znam', 'background:url(/img/srvimg/oskar.png) no-repeat 15px;', '/o-magniflex/stars-magniflex/', 'Знаменитости<br>выбирают Magniflex »'),
		array('magn_30_matr', 'background:url(/img/srvimg/30-years.png) no-repeat left;', '/news/30_let_pervogo_matrasa/', '30 лет назад Magniflex изобрела<br>первый в мире вакуумный матрас »'),
		array('magn_db_chem', 'background:url(/img/srvimg/kubok_fifa.png) no-repeat 5px;', '/news/buffon/', 'Д. Буффон - <br>официальное лицо Магнифлекс »'),
	);
	$magn_top_links_count = 2;
	$magn_top_links_index = 0;
	$magn_top_links_last_index = -1;
	for($i=0; $i<$magn_top_links_count; $i++){
		do{
			$magn_top_links_index = rand(0, count($magn_top_links_arr)-1);
		}while($magn_top_links_last_index == $magn_top_links_index);
		$magn_top_links_last_index = $magn_top_links_index;
		
		$top_links_el = $magn_top_links_arr[$magn_top_links_index];
		echo('<div class="'.$top_links_el[0].'" style="'.$top_links_el[1].'"><a id="'.$top_links_el[0].'" href="'.$top_links_el[2].'">'.$top_links_el[3].'</a></div>');
	}
?>
		
	</div>
	<div class="clear"></div>
	<div class="hnb_newbloptop">
					<div>
					<a href="/o-magniflex/show-room-matrasov/">Ждем Вас в нашем шоу-руме на Полянке</a>
					</div>
					<div>
					<a href="/pokupatelyam/oplata-i-dostavka/">Бесплатная доставка
	до дверей квартиры</a> 
					</div>
					<div>
					<a href="#">Индивидуальная маркировка каждого матраса</a>
					</div>
	</div>	
</div>
			