<?php if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	} ?>
<!DOCTYPE html>
<html xml:lang="ru" lang="ru">
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
		if(strpos($cur_url,'?') !== FALSE){
			echo('<link rel="canonical" href="'.strstr($domain.$cur_url,'?',true).'" />');
		}
		else{
			echo('<meta name="robots" content="index, follow" />');
		}
	?>
	
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<link href="/template/css/global.css" type="text/css"  rel="stylesheet" />
	<link href="/template/css/responsive.css" type="text/css"  rel="stylesheet" />
	<link href="/template/js/datepicker/themes/classic.css" type="text/css" rel="stylesheet">
	<link href="/template/js/datepicker/themes/classic.date.css" type="text/css" rel="stylesheet">
	<link href="/template/js/datepicker/themes/classic.time.css" type="text/css" rel="stylesheet">

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
						<a href="/o-magniflex/oficialnoe-predstavitelstvo-magniflex/" title="Официальный сайт Magniflex в РФ">Официальный сайт в РФ</a>
						<img class="img_italy" src="data:image/gif;base64,R0lGODlhEgALAOYAALMAD0SueacADuwAFLwAEP8qPDuqctEAEiCeXwGNR84AEk2yf90AE/8OIwqVTyahY8YAETmpcfsAFgGDQv8JHv8ZLUGtdyujZwGRSR+eXgF7PgF5PQiUTv84SUmwfAGKRhmbWi+lav9GVvgAFRqcW7UAEAGGRAeUTQ6XUheaWQF/QBCXVAF6Pf8dMAGEQyGfYAFwOOcAFAaTTQF3PDSnbQGMRqsADwGCQRibWf8NIv0AFv80RiehZKwADw+XU74AEN8AE+QAFNIAEv8AFvYAFdgAE6oADzyqc+MAFMAAEf8gM7kAEEeve/8lOAFhMf8UKAF1OxWaVwFsNu8AFcgAES2kaAFkMgGQSb8AEAFvOLYAEP8EGuAAEwGPSPoAFjWnbu0AFP86SzKmbP9DUwFpNfEAFdcAE/8uQEqwfcwAEuTk5NHR0b6+vqurq/b29v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAAAAAALAAAAAASAAsAAAeigAFoCwseTG+IiSJjYWdKDRYBARZHEYmJHTsFLQ0SBgYRXyEXl4gFTRU5OgM0YlU8GSSlbxVPFBJgDBcPCCkoDrMUWyMDQAe8OD4yGLNDXlNIRWkvICsnXTVu2ttEZTEMQlRRDlcfLjdq6epBXGYKEFgcCSYqLDNr+PkH70kESwkTNEDJIoWNwYM/CGgBAKDEhA0wyFhx0qaiRRtGBAjoASAQADs=" title="Magniflex флаг Италия" alt="Magniflex Италия" />
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
						<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" title="Каталог">Каталог</a>
						<ul class="angle1">
							<li class="angle"></li>
							<li class="angle"><a href="/catalog/mattresses/" title="Настоящие ортопедические матрасы Magniflex">Ортопедические матрасы</a></li>
							<li class="angle"><a href="/catalog/elitnye-matrasy/" title="Исключительно итальянская продукция">Элитные матрасы</a></li>
							<li class="angle"><a href="/catalog/detskie-ortopedicheskie-matrasy/" title="Вакуумная упаковка матрасов Magniflex">Детские матрасы</a></li>
							<li class="angle"><a href="/catalog/Orthopedic_pillows/" title="Ткани и Технологии, используемые в матрасах и подушках Magniflex">Ортопедические подушки</a></li>
							<li class="angle"><a href="/catalog/vacuum_pillows/" title="Наполнители, используемые в итальянских матрасах Magniflex">Вакуумные подушки</a></li>
							<li class="angle"><a href="/catalog/gelevye-podushki/" title="Ткани и Технологии, используемые в матрасах и подушках Magniflex">Гелевые подушки</a></li>
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
						</ul>
					</div>
					<div class="menu">
						<a title="Информация Партнерам">Партнерам</a>
						<ul class="angle1">
							<li class="angle"></li>
							<li class="angle"><a href="/o-magniflex/predlozhenie-dlya-otelej/" title="Предложение для отелей">Предложение для отелей</a></li>
							<li class="angle"><a href="/o-magniflex/dileram/" title="Стать дилером">Стать дилером</a></li>
							<li class="angle"><a href="/o-magniflex/optovim-pokupatelyam/" title="Оптовым покупателям">Оптовым покупателям</a></li>
							
							
						</ul>
					</div>
					<div class="menu">
						<a href="/o-magniflex/show-room-matrasov/" title="Шоу-рум Magniflex">Шоу-рум</a>
						
					</div>
					<div style="background: #d72525;padding-bottom: 1px;" class="menu">
						<a href="/skidki-magniflex/" title="Акции и Скидки">Скидки</a>
						<ul class="angle1">
							<li class="angle"></li>
							<!--<li class="angle"><a href="/skidki-magniflex/15-skidka-na-elitnye-matrasi/" title="15% скидка на Элитные матрасы">15% скидка на Элитные матрасы</a></li>-->
							<li class="angle"><a href="/skidki-magniflex/skidki-na-otkrytye-matrasy-magniflex/" title="Скидки на открытые матрасы Magniflex">Открытые матрасы</a></li>
							<li class="angle"><a href="/skidki-magniflex/" title="25% скидка на подушки Magniflex">25% скидка на подушки</a></li>
							<li class="angle"><a href="/skidki-magniflex/skidki-na-bolshie-matrasi/" title="30% скидка на Большие матрасы">30% скидка на Большие матрасы</a></li>
							<!--<li class="angle"><a href="/skidki-magniflex/skidki-novogodnyi/" title="Новогодние скидки">Новогодние скидки</a></li>-->
							<!--<li class="angle"><a href="/skidki-magniflex/samaya-vygodnaya-tsena/" title="Самая выгодная цена на матрасы и подушки Magniflex">Самая выгодная цена</a></li>-->
							<!--<li class="angle"><a href="/skidki-magniflex/podarok-8-marta/" title="Подарок к 8-му марта от компании Magniflex (Магнифлекс)">Подарок к 8-му марта</a></li>-->
						</ul>
					</div>
					<div class="menu">
						<a href="/o-magniflex/adresa-magazinov/" title="Адреса магазинов Magniflex">Магазины</a>
						<ul class="angle1">
							<li class="angle"></li>
							<li class="angle"><a href="/o-magniflex/internet-magazin-matrasov/" title="Интернет-магазин Magniflex">Интернет-Магазин</a></li>
							<li class="angle"><a href="/o-magniflex/show-room-matrasov/" title="Шоу-рум матрасов Magniflex">Шоу-рум</a></li>
							<li class="angle"><a href="/o-magniflex/moscow/" title="Адреса магазинов Magniflex в Москве">Москва</a></li>
							<li class="angle"><a href="/o-magniflex/russia/" title="Адреса магазинов Magniflex в России">Россия</a></li>
							<li class="angle"><a href="/o-magniflex/magniflex-mattresses-world/" title="Магазины Magniflex в других странах">Другие страны</a></li>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="mini_basket_block">
				<div id="mini_basket">
					<span class="icon_cart"></span>
					<a href="/cart/#breadcrumbs" title="Корзина товаров" rel="nofollow"><span class="hnb_display480">Корзина </span><span class="count"></span> тов</a>, <span class="price"></span> р.
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_inner">
			<div id="logo" itemscope itemtype="http://schema.org/ImageObject">
				<a href="/" title="Magniflex, главная страница">
					<img width="317px" class="replace-2x" src="/img/logo.png" alt="Magniflex – итальянские ортопедические матрасы и подушки" itemprop="contentUrl"/>
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
			-->
			<ul id="fade">
			<li>СДЕЛАНО В ИТАЛИИ!</li>
			<li>В РОССИИ С 1992 ГОДА</li>
			<li>ОСНОВАНА В 1962 ГОДУ</li>
			</ul>
			
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
			<div class="hnb_toptextalg">Все матрасы ОРТОПЕДИЧЕСКИЕ, в том числе детские и  элитные серии</div>	
				<!--<div class="hnb_gadjet4">
				Новогодние скидки!<br/>
				и подарки
					<div></div>
					<div></div>
					<div class="hnb_gadjet_dis1">

						Только по 11 января 2016  действует новогодняя акция!
						<a href="/skidki-magniflex/skidki-novogodnyi/">Подробнее</a>
					</div>
				</div>-->
					<!--<div class="valintayn-new"><a href="/catalog/orthopedic_mattresses/natur-baci-mattress/">
					<img src="/img/banners/ahgel-valentine.png">
					<div>
					Скидка 20%
					на самый 
					романтичный
					матрас
					</div></a>
				</div>-->
				<div class="hnb_gadjet3">
				м. Полянка<br/>
				м. Чертановская
					<div></div>
					<div></div>
					<div class="hnb_gadjet_dis1">

						Потестировать, полежать и купить матрас можно в магазине в центре Москвы или у м. Чертновская. Все модели в наличии.
						<a href="/o-magniflex/show-room-matrasov/">Подробнее</a>
					</div>
				</div>
				<div class="hnb_gadjet2">
					30% скидка <br/>
				на KING-SIZE
					<div></div>
					<div></div>
					<div class="hnb_gadjet_dis1">

						специальная цена на матрасы 180х220
						<a href="/skidki-magniflex/skidki-na-bolshie-matrasi/">Подробнее</a>
					</div>
				</div>
				<!-----------------------------old
				<div class="hnb_gadjet2">
					25% скидка
					<div></div>
					<div></div>
					<div class="hnb_gadjet_dis1">
				
          на любую ПОДУШКУ при покупке матраса
											<a href="/skidki-magniflex/">Подробнее</a>
					</div>
				</div>
				--------------------->
				<div class="hnb_gadjet1">
					Бесплатно
					<div></div>
					<div></div>
					<div class="hnb_gadjet_dis1">

					БЕСПЛАТНО:<br /><br />

Доставка по Москве<br />
   до Ваших дверей!
						<a href="/pokupatelyam/oplata-i-dostavka/">Подробнее</a>
					</div>
				</div>
				
				<!--<div style="color: #E1001A;margin-top: -28px;width: 120px;font-size: 14px;" class="hnb_gadjet0">
				<a href="/skidki-magniflex/15-skidka-na-elitnye-matrasi/">15% скидка на<br> 
				элитные матрасы</a>
				</div>-->
				
			</div>
			
			
			<!--------------hnb opacity
			<div class="announce">
				
			</div>-->
			
			<div id="wekend" class="hnb_display480">
				
					<span class="sf_phone_time">Время работы: 
						<span class="sf_time_js">09:00 — 22:00</span>
					</span>
					<span class="phone_color2"><span class="phone_color1">+7 (495)&nbsp;</span>507 22 65</span>
					
					<br>
					<span class="phone_color2"><span class="phone_color1">+7 (495)&nbsp;</span>316 89 88</span>
					
					<span><br></span>
					<span class="phone_text">посоветуйтесь с профессионалами<br>
					опыт - более 20 лет в России!
					</span><br><br>
				
				<div class="callback">
					<a href="javascript:void(0);">Перезвоните мне</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="main_menu">
			
			<div class="menu">
				<!--<div class="hnb_newyeardedmor">
					<span style="color:red;    float: left;font-size: 12px;"><a href="/skidki-magniflex/skidki-novogodnyi/">скидка 10%!</a></span>
					<span style="color:red;float:right;font-size: 12px;"><a href="/skidki-magniflex/skidki-novogodnyi/">скидка 15%!</a></span>
				</div>-->
				<a href="/catalog/mattresses/" title="Ортопедические матрасы Magniflex">Ортопедические матрасы</a>
				<span class="mobile-grover"></span>
				<div class="menu_children_container">
					<div class="children_block">
						<div class="sub_cat">
							<a href="/catalog/orthopedic_mattresses/" title="Ортопедические матрасы Magniflex">Ортопедические матрасы</a>
							<img src="/img/product/small/Merino%20(Merinos).jpg" alt="Ортопедический матрас Merino (Merinos), миниатюра"   itemprop="contentUrl" />
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/orthopedic_mattresses/MERINOS/" title="Ортопедический матрас Merino (Merinos)" itemprop="name">Merino</a> <a href="/catalog/orthopedic_mattresses/MERINOS/" title="Ортопедический матрас Merino (Merinos)">(Merinos)</a>
							<img src="/img/product/small/Merino%20(Merinos).jpg" alt="Ортопедический матрас Merino (Merinos), миниатюра"   itemprop="contentUrl" />
							<?php
/*							$tmp_discount = get_product_attr('Merino (Merinos)','discount_koef');
							if($tmp_discount !== false) $tmp_discount = $tmp_discount['discount_menu'];
							if($tmp_discount) echo($tmp_discount);
*/							?>
							<span itemprop="caption">Самый популярный. Достаточно жесткий. Зимняя сторона - шерсть мериноса, летняя - хлопок. Цена за односпальный матрас от 12 500 руб.</span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/" title="Ортопедический матрас Merino Green Tea" itemprop="name">Merino Green Tea</a>
							<img src="/img/product/small/Merino%20Green%20Tea.jpg" alt="Ортопедический матрас Merino Green Tea, миниатюра" itemprop="contentUrl"/>
							<span itemprop="caption">С экстрактом зеленого чая.  Умеренно жесткий. Зимняя сторона - шерсть мериноса, летняя - хлопок. Цена за односпальный матрас от 16 700 руб.</span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/" title="Ортопедический матрас Bamboo" itemprop="name">Bamboo</a>
							<img src="/img/product/small/Bamboo.jpg" alt="Ортопедический матрас Bamboo, миниатюра" itemprop="contentUrl"/>
							<img src="/img/skid25-2.png" class="hnb_menu_imgac" alt="25% скидка на матрас" /><span class="hnb_textmenimg">Волокна бамбука в тканях матраса. Улучшенные антибактериальные свойства, отличный антиаллергенный эффект. Двусторонний: лето — натуральный качественный хлопок, зима — шерсть мериноса. Цена за односпальный матрас от 18 600 руб</span>
							<span itemprop="caption">С волокнами натурального бамбука. Умеренно жесткий. Зимняя сторона - шерсть тонкорунного мериноса, летняя - натуральный хлопок. Цена за односпальный матрас от 18 600 руб..</span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/orthopedic_mattresses/WATERLATTEX/" title="Ортопедический матрас WaterLattex" itemprop="name">WaterLattex</a>
							<img src="/img/product/small/WaterLattex.jpg" alt="Ортопедический матрас WaterLattex, миниатюра" itemprop="contentUrl"/>
							<span itemprop="caption">Средней мягкости, комфортный. Зимняя сторона - шерсть мериноса, летняя - хлопок. Цена за односпальный матрас от 25 000 руб.</span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/" title="Ортопедический матрас Naturalmente (New Naturcomfort)" itemprop="name">Naturalmente (New Naturcomfort)</a>
							<img src="/img/product/small/New%20NaturComfort.jpg" alt="Ортопедический матрас Naturalmente (New Naturcomfort), миниатюра" itemprop="contentUrl"/>
							<span itemprop="caption">Умеренно мягкий, исключительно комфортный. Цена за односпальный матрас от 26 700 руб</span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/orthopedic_mattresses/natur-baci-mattress/" title="Ортопедический матрас Natur Baci" itemprop="name">Natur Baci</a>
							<img src="/img/product/small/Natur%20Baci.jpg" alt="Ортопедический матрас Natur Baci, миниатюра" itemprop="contentUrl"/>
							<?php
							$tmp_discount = get_product_attr('Natur Baci','discount_koef');
							if($tmp_discount !== false) $tmp_discount = $tmp_discount['discount_menu'];
							if($tmp_discount) echo($tmp_discount);
							?>
							<span itemprop="caption">Мягкий, плотный, упругий матрас. Цена за двуспальный вариант от 52 700 руб</span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/orthopedic_mattresses/MEMO-MERINO/" title="Ортопедический матрас Memo Merino" itemprop="name">Memo Merino</a>
							<img src="/img/product/small/Memo%20Merino.jpg" alt="Ортопедический матрас Memo Merino, миниатюра" itemprop="contentUrl"/>
							<span itemprop="caption">Очень комфортный, анатомический матрас с эффектом памяти. Цена за односпальный  вариант от 33 900 руб.</span>
						</div>
						<div class="sub_page">
							<a href="/sravnenie-matrasov/" title="Удобное сравнение матрасов Magniflex" >Удобное сравнение матрасов</a>
						</div>
						
					</div>
					<div class="children_block advanced">
						<span class="children_advanced_panel">
							
						</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="menu">
				<a href="/catalog/elitnye-matrasy/" title="Элитные матрасы Magniflex">Элитные матрасы</a>
				<span class="mobile-grover"></span>
				<div class="menu_children_container">
					<div class="children_block">
						<div class="sub_cat">
							<a href="/catalog/elitnye-matrasy/" title="Элитные матрасы Magniflex">Элитные ортопедические матрасы</a>
						</div>
						<!--<div class="sub_collection" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/elitnye-matrasy/virtus/" title="Коллекция этилных матрасов Virtus" itemprop="name">Коллекция Virtus</a>
							<img src="/img/product/small/Virtus.jpg" alt="Коллекция этилных матрасов Virtus, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-virtus/Virtus-30/" title="Элитный матрас Virtus 30" itemprop="name">Virtus 30</a>
							<img src="/img/product/small/Virtus%2030.jpg" alt="Элитный матрас Virtus 30, миниатюра" itemprop="contentUrl"/>
							<span itemprop="caption">РОСКОШНЫЙ, КЛАСС "ДЕ-ЛЮКС"</span>
						</div>
						<div class="sub_collection" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/elitnye-matrasy/harmony/" title="Коллекция этилных матрасов Harmony" itemprop="name">Коллекция Harmony</a>
							<img src="/img/product/small/Harmony.jpg" alt="Коллекция этилных матрасов Harmony, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-harmony/Exchange-Memoform-Dual/" title="Элитный матрас Exchange Memoform Dual" itemprop="name">Exchange Memoform Dual</a>
							<img src="/img/product/small/Exchange%20Memoform%20Dual.jpg" alt="Элитный матрас Exchange Memoform Dual, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="sub_collection" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/elitnye-matrasy/magnificient/" title="Коллекция этилных матрасов Magnificent" itemprop="name">Коллекция Magnificent</a>
							<img src="/img/product/small/Magnificent.jpg" alt="Коллекция этилных матрасов Magnificent, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-magnificent/Magnificent-12/" title="Элитный матрас Magnificent 12" itemprop="name">Magnificent 12</a>
							<img src="/img/product/small/Magnificent%2012.jpg" alt="Элитный матрас Magnificent 12, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="sub_collection" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/elitnye-matrasy/imperiale/" title="Коллекция этилных матрасов Imperiale" itemprop="name">Коллекция Imperiale</a>
							<img src="/img/product/small/Imperiale.jpg" alt="Коллекция этилных матрасов Imperiale, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-imperiale/Imperiale-24/" title="Элитный матрас Imperiale 24" itemprop="name">Imperiale 24</a>
							<img src="/img/product/small/Imperiale%2024.jpg" alt="Элитный матрас Imperiale 24, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-imperiale/Imperiale-28/" title="Элитный матрас Imperiale 28" itemprop="name">Imperiale 28</a>
							<img src="/img/product/small/Imperiale%2028.jpg" alt="Элитный матрас Imperiale 28, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-imperiale/Imperiale-33/" title="Элитный матрас Imperiale 33" itemprop="name">Imperiale 33</a>
							<img src="/img/product/small/Imperiale%2033.jpg" alt="Элитный матрас Imperiale 33, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="sub_collection" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/elitnye-matrasy/comfort-delux/" title="Коллекция этилных матрасов Comfort Delux" itemprop="name">Коллекция Comfort Delux</a>
							<img src="/img/product/small/Comfort%20Delux.jpg" alt="Коллекция этилных матрасов Comfort Delux, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-comfort-delux/Comfort-Plus-10/" title="Элитный матрас Comfort Plus 10" itemprop="name">Comfort Plus 10</a>
							<img src="/img/product/small/Comfort%20Plus%2010.jpg" alt="Элитный матрас Comfort Plus 10, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-comfort-delux/Comfort-Plus-12/" title="Элитный матрас Comfort Plus 12" itemprop="name">Comfort Plus 12</a>
							<img src="/img/product/small/Comfort%20Plus%2012.jpg" alt="Элитный матрас Comfort Plus 12, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="sub_collection" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/elitnye-FreshGel/FreshGel/" title="Коллекция этилных матрасов FreshGel" itemprop="name">Коллекция FreshGel</a>
							<img src="/img/product/small/FreshGel.jpg" alt="Коллекция этилных матрасов FreshGel, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-FreshGel/FreshGel-9/" title="Элитный матрас FreshGel 9" itemprop="name">FreshGel 9</a>
							<img src="/img/product/small/FreshGel%209.jpg" alt="Элитный матрас FreshGel 9, миниатюра" itemprop="contentUrl"/><img src="/img/skid25-2.png" class="hnb_menu_imgac" alt="25% скидка на матрас" /><span class="hnb_textmenimg"></span>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-FreshGel/FreshGel-10/" title="Элитный матрас FreshGel 10" itemprop="name">FreshGel 10</a>
							<img src="/img/product/small/FreshGel%2010.jpg" alt="Элитный матрас FreshGel 10, миниатюра" itemprop="contentUrl"/><img src="/img/skid25-2.png" class="hnb_menu_imgac" alt="25% скидка на матрас" /><span class="hnb_textmenimg"></span>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-FreshGel/FreshGel-12/" title="Элитный матрас FreshGel 12" itemprop="name">FreshGel 12</a>
							<img src="/img/product/small/FreshGel%2012.jpg" alt="Элитный матрас FreshGel 12, миниатюра" itemprop="contentUrl"/><img src="/img/skid25-2.png" class="hnb_menu_imgac" alt="25% скидка на матрас" /><span class="hnb_textmenimg"></span>
							<span></span>
						</div>
						<div class="sub_collection" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/elitnye-matrasy/rest/" title="Коллекция этилных матрасов Rest" itemprop="name">Коллекция Rest</a>
							<img src="/img/product/small/Rest.jpg" alt="Коллекция этилных матрасов Rest, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-rest/Rest-9/" title="Элитный матрас Rest 9" itemprop="name">Rest 9</a>
							<img src="/img/product/small/Rest%209.jpg" alt="Элитный матрас Rest 9, миниатюра" itemprop="contentUrl"/>
							<?php
/*							$tmp_discount = get_product_attr('Rest 9','discount_koef');
							if($tmp_discount !== false) $tmp_discount = $tmp_discount['discount_menu'];
							if($tmp_discount) echo($tmp_discount);
*/							?>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-rest/Rest-10/" title="Элитный матрас Rest 10" itemprop="name">Rest 10</a>
							<img src="/img/product/small/Rest%2010.jpg" alt="Элитный матрас Rest 10, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-rest/Rest-12/" title="Элитный матрас Rest 12" itemprop="name">Rest 12</a>
							<img src="/img/product/small/Rest%2012.jpg" alt="Элитный матрас Rest 12, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>-->
						<div class="product" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-rest/" title="Коллекция этилных матрасов Rest" itemprop="name">Коллекция Rest</a>
							<img src="/img/product/small/Rest.jpg" alt="Коллекция этилных матрасов Rest, миниатюра" itemprop="contentUrl">
							<span itemprop="caption">Коллекция состоит из моделей: <a href="/catalog/elitnye-rest/Rest-9/">Rest 9</a>, <a href="/catalog/elitnye-rest/Rest-10/">Rest 10</a>, <a href="/catalog/elitnye-rest/Rest-12/">Rest 12</a>.</span>
						</div>
						
						<div class="sub_collection" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-FreshGel/" title="Коллекция этилных матрасов FreshGel" itemprop="name">Коллекция FreshGel</a>
							<img src="/img/product/small/FreshGel.jpg" alt="Коллекция этилных матрасов FreshGel, миниатюра" itemprop="contentUrl">
							<span itemprop="caption">Коллекция состоит из моделей: <a href="/catalog/elitnye-FreshGel/FreshGel-9/">FreshGel 9</a>, <a href="/catalog/elitnye-FreshGel/FreshGel-10/">FreshGel 10</a>, <a href="/catalog/elitnye-FreshGel/FreshGel-12/">FreshGel 12</a>.</span>
						</div>
						
						<div class="sub_collection" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-comfort-delux/" title="Коллекция этилных матрасов Comfort Delux" itemprop="name">Коллекция Comfort Delux</a>
							<img src="/img/product/small/Comfort%20Delux.jpg" alt="Коллекция этилных матрасов Comfort Delux, миниатюра" itemprop="contentUrl">
							<span itemprop="caption">Коллекция состоит из моделей: <a href="/catalog/elitnye-comfort-delux/Comfort-Plus-10/">Comfort Plus 10</a>, <a href="/catalog/elitnye-comfort-delux/Comfort-Plus-12/">Comfort Plus 12</a>.</span>
						</div>
						
						<div class="sub_collection" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-imperiale/" title="Коллекция этилных матрасов Imperiale" itemprop="name">Коллекция Imperiale</a>
							<img src="/img/product/small/Imperiale.jpg" alt="Коллекция этилных матрасов Imperiale, миниатюра" itemprop="contentUrl">
							<span itemprop="caption">Коллекция состоит из моделей: <a href="/catalog/elitnye-imperiale/Imperiale-24/">Imperiale 24</a>, <a href="/catalog/elitnye-imperiale/Imperiale-28/">Imperiale 28</a>, <a href="/catalog/elitnye-imperiale/Imperiale-33/">Imperiale 33</a>.</span>
						</div>
						
						<div class="sub_collection" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-magnificent/" title="Коллекция этилных матрасов Magnificent" itemprop="name">Коллекция Magnificent</a>
							<img src="/img/product/small/Magnificent.jpg" alt="Коллекция этилных матрасов Magnificent, миниатюра" itemprop="contentUrl">
							<span itemprop="caption">Коллекция состоит из моделей: <a href="/catalog/elitnye-magnificent/Magnificent-12/">Magnificent 12</a>.</span>
						</div>
						
						<div class="sub_collection" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-harmony/" title="Коллекция этилных матрасов Harmony" itemprop="name">Коллекция Harmony</a>
							<img src="/img/product/small/Harmony.jpg" alt="Коллекция этилных матрасов Harmony, миниатюра" itemprop="contentUrl">
							<span itemprop="caption">Коллекция состоит из моделей: <a href="/catalog/elitnye-harmony/Exchange-Memoform-Dual/">Exchange Memoform Dual</a>.</span>
						</div>
						
						<div class="sub_collection" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-virtus/" title="Коллекция этилных матрасов Virtus" itemprop="name">Коллекция Virtus</a>
							<img src="/img/product/small/Virtus.jpg" alt="Коллекция этилных матрасов Virtus, миниатюра" itemprop="contentUrl">
							<span itemprop="caption">Коллекция состоит из моделей: <a href="/catalog/elitnye-virtus/Virtus-30/">Virtus 30</a>.</span>
						</div>

						
						<br />
						<div class="sub_collection" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="/catalog/elitnye-matrasy/" title="Коллекция этилных матрасов Rest" itemprop="name">Все <span class="hnb_menutextdec">элитные матрасы</span></a>
							<img src="/img/product/small/Rest.jpg" alt="Коллекция этилных матрасов Rest, миниатюра" itemprop="contentUrl">
							<span></span>
						</div>
						
						<div class="sub_collection" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="/elite-collections/" title="Коллекция этилных матрасов Rest" itemprop="name">Обзор коллекций</a>
							<img src="/img/product/small/Rest.jpg" alt="Коллекция этилных матрасов Rest, миниатюра" itemprop="contentUrl">
							<span></span>
						</div>
						<div class="sub_collection" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="/sravnenie-elitnyh-matrasov/" title="Коллекция этилных матрасов Rest" itemprop="name">Сравнение элитных матрасов</a>
							<img src="/img/product/small/Rest.jpg" alt="Коллекция этилных матрасов Rest, миниатюра" itemprop="contentUrl">
							<span></span>
						</div>
						<!--<div class="sub_collection" itemscope="" itemtype="http://schema.org/ImageObject">
							<a style="color:#E1001A;" href="/skidki-magniflex/15-skidka-na-elitnye-matrasi/" title="Коллекция этилных матрасов Rest" itemprop="name">15% скидка на элитные матрасы</a>
							<img src="/img/product/small/Rest.jpg" alt="Коллекция этилных матрасов Rest, миниатюра" itemprop="contentUrl">
							<span></span>
						</div>-->
						<!--<br />
						<div class="hnb_menu_textelit">
						<b>Акция!!!<br />
						25% СКИДКА на элитные матрасы!</b><br />
						время акции  ОГРАНИЧЕНО
						</div>
						-->
						<br />
					</div>
					<div class="children_block advanced">
						<span class="children_advanced_panel">
							
						</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="menu">
				<a href="/catalog/detskie-ortopedicheskie-matrasy/" title="Детские матрасы и подушки Magniflex">Детские матрасы</a>
				<span class="mobile-grover"></span>
				<div class="menu_children_container">
					<div class="children_block">
						<div class="sub_cat">
							<a href="/catalog/detskie-ortopedicheskie-matrasy/" title="Детские ортопедические матрасы Magniflex">Детские матрасы</a>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/detskie-ortopedicheskie-matrasy/MERINO-childrens/" title="Ортопедический матрас Merino для детей" itemprop="name">Merino для детей</a>
							<img src="/img/product/small/Merino-childrens.jpg" alt="Ортопедический матрас Merino для детей, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<?if($_SERVER["REQUEST_URI"]!=='/catalog/pillows/'){?>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/detskie-ortopedicheskie-matrasy/Merino+Bamboo/" title="Ортопедический матрас Merino Bamboo для детей" itemprop="name">Merino Bamboo для детей</a>
							<img src="/img/product/small/Merino-Bamboo-children.jpg" alt="Ортопедический матрас Merino Bamboo для детей, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<?}?>
					</div>
					<div class="children_block advanced">
						<span class="children_advanced_panel">
							
						</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="menu">
				<a href="/catalog/pillows/" title="Подушки Magniflex">Подушки</a>
				<span class="mobile-grover"></span>
				<div class="menu_children_container">
					<div class="children_block">
						<div class="sub_cat">
							<a href="/catalog/vacuum_pillows/" title="Вакуумные подушки Magniflex">Вакуумные подушки</a>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/vacuum_pillows/RELAXSAN/" title="Вакуумная подушка Relaxsan" itemprop="name">Подушка Relaxsan</a>
							<img src="/img/product/small/Relaxsan.jpg" alt="Вакуумная подушка Relaxsan, миниатюра" itemprop="contentUrl"/>
							<span itemprop="caption">Вакуумная упаковка, классическая форма.  2 300 руб.</span>
						</div>
						<div class="sub_cat">
							<a href="/catalog/Orthopedic_pillows/" title="Ортопедические подушки Magniflex">Ортопедические подушки</a>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/Orthopedic_pillows/MEMORY/" title="Ортопедическая подушка Memory" itemprop="name">Подушка Memory</a>
							<img src="/img/product/small/Memory.jpg" alt="Ортопедическая подушка Memory, миниатюра" itemprop="contentUrl"/>
							<span itemprop="caption">Эффект памяти. Эргономичная форма. 6 800 руб.</span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/Orthopedic_pillows/ORTHOMASSAGE/" title="Ортопедическая подушка Orthomassage" itemprop="name">Подушка Orthomassage</a>
							<img src="/img/product/small/Orthomassage.jpg" alt="Ортопедическая подушка Orthomassage, миниатюра" itemprop="contentUrl"/>
							<span itemprop="caption">Эффект памяти, идеальная поддержка шеи с массажным эффектом. 7 200 руб.</span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/Orthopedic_pillows/COMFORT-PILLOW/" title="Ортопедическая подушка Comfort Pillow" itemprop="name">Подушка Comfort Pillow</a>
							<img src="/img/product/small/Comfort%20Pillow.jpg" alt="Ортопедическая подушка Comfort Pillow, миниатюра" itemprop="contentUrl"/>
							<span itemprop="caption">Эффект памяти. Удобная подушка с эргономичным дизайном. Отличные анатомические свойства. 5 900 руб.</span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/Orthopedic_pillows/ALOE+VERA/" title="Ортопедическая подушка Aloe Vera" itemprop="name">Подушка Aloe Vera</a>
							<img src="/img/product/very_small/Aloe-Veranewsl.jpg" alt="Ортопедическая подушка Aloe Vera, миниатюра" itemprop="contentUrl"/>
							<span itemprop="caption">Эффект памяти.  Идеальные анатомические свойства, экстракт Алоэ Вера. 7 600 руб.</span>
						</div>
						<div class="sub_cat">
							<a href="/catalog/gelevye-podushki/" title="Гелевые подушки Magniflex">Гелевые подушки </a>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/gelevye-podushki/FreshGel+Wave/" title="Гелевая подушка FreshGel Wave" itemprop="name">FreshGel Wave</a>
							<img src="/img/product/small/FreshGel%20Wave.jpg" alt="Гелевая подушка FreshGel Wave, миниатюра" itemprop="contentUrl"/><img src="/img/skid25-2.png" class="hnb_menu_imgac" alt="25% скидка на матрас" /> <span class="hnb_textmenimg">Гелевый наполнитель Magnigel Foam, охлаждающий эффект, волнообразная форма. Съемный чехол Viscosa. 7 100 руб.</span>
							<span itemprop="caption">Ортопедическая, в основе гелевый наполнитель Magnigel Foam. Волнообразная форма, улучшенная поддержка. 7 100 руб.</span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/gelevye-podushki/FreshGel+Standart/" title="Гелевая подушка FreshGel Standard" itemprop="name">FreshGel Standard</a>
							<img src="/img/product/small/FreshGel%20Standard.jpg" alt="Гелевая подушка FreshGel Standard, миниатюра" itemprop="contentUrl"/><img src="/img/skid25-2.png" class="hnb_menu_imgac" alt="25% скидка на матрас" /> <span class="hnb_textmenimg">Гелевая, с охлаждающим эффектом, наполнитель Magnigel Foam. Классическая форма. Съемный чехол Viscosa. 7 900 руб.</span>
							<span itemprop="caption">Ортопедическая, в основе гелевый наполнитель Magnigel Foam. Идеальная поддержка. Классическая форма. 7 900 руб. </span>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/gelevye-podushki/MemoGel+Standart/" title="Гелевая подушка MemoGel Standard" itemprop="name">MemoGel Standard</a>
							<img src="/img/product/small/MemoGel%20Standard.jpg" alt="Гелевая подушка MemoGel Standard, миниатюра" itemprop="contentUrl"/><img src="/img/skid25-2.png" class="hnb_menu_imgac" alt="25% скидка на матрас" /> <span class="hnb_textmenimg">универсальная двусторонняя: одна сторона — гелевая, другая — с эффектом памяти. Съемный чехол Viscosa. 8 200 руб.</span>
							<span itemprop="caption">Ортопедическая. Двусторонняя. Эффект памяти + гелевый наполнитель Magnigel Foam. 8 200 руб. </span>
						</div>
						<div class="sub_cat">
							<span class="show">Полезно знать:</span>
						</div>
						<div class="product">
							<a href="/pokupatelyam/kogda-menyat-podushku/" title="Когда нужно менять подушку">Когда менять подушки?</a>
						</div>
					</div>
					<div class="children_block advanced">
						<span class="children_advanced_panel">
							
						</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="menu">
				<a href="/catalog/bases/" title="Аксессуары Magniflex">Аксессуары</a>
				<span class="mobile-grover"></span>
				<div class="menu_children_container">
					<div class="children_block">
						<div class="sub_cat">
						<a href="/catalog/bases/" title="Основания для матрасов">Основания для матрасов</a>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/ortopedicheskie-reshetky/ortopedicheskoe-osnovanie-komfort/" title="Ортопедическое основание для матрасов КОМФОРТ" >Ортопедическое основание КОМФОРТ</a>
							<img src="/img/product/small/osnovanie.jpg" alt="Ортопедическое основание для матрасов КОМФОРТ, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<!--<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/ortopedicheskie-reshetky/ortopedicheskoe-osnovanie-komfort-plus/" title="Ортопедическое основание для матрасов КОМФОРТ плюс" >Ортопедическое основание КОМФОРТ плюс</a>
							<img src="/img/product/small/osnovanie-comfort-plus5.jpg" alt="Ортопедическое основание для матрасов КОМФОРТ плюс, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>-->
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/ortopedicheskie-reshetky/ortopedicheskoe-osnovanie-komfort-razbornoe/" title="Ортопедическое основание для матрасов КОМФОРТ разборные" >Ортопедическое основание КОМФОРТ (разборное)</a>
							<img src="/img/product/small/osnovanie.jpg" alt="Ортопедическое основание для матрасов КОМФОРТ разборные, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
						<div class="sub_cat">
						<a href="/catalog/bases/" title="Топперы и тонкие матрасы">Топперы и тонкие матрасы</a>
						</div>
						<div class="product" itemscope itemtype="http://schema.org/ImageObject">
							<a href="/catalog/bases/Topper-Best-Top/" title="Топпер. Тонкий матрас. Наматрасник Magniflex" >Топпер.</a>
							<a href="/catalog/bases/Topper-Best-Top/" title="Топпер. Тонкий матрас. Наматрасник Magniflex" >Тонкий матрас.</a>
							<a href="/catalog/bases/Topper-Best-Top/" title="Топпер. Тонкий матрас. Наматрасник Magniflex" >Наматрасник</a>
							<img src="/img/product/big/TOPPER-BEST-TOP.jpg" alt="Топпер. Тонкий матрас. Наматрасник Magniflex, миниатюра" itemprop="contentUrl"/>
							<span></span>
						</div>
					</div>
					<div class="children_block advanced">
						<span class="children_advanced_panel">
							
						</span>
					</div>
					<div class="clear"></div>
				</div>
				
			</div>
			
			
			
			<div class="clear"></div>
		</div>
<div id="content">
			