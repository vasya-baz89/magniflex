<?php if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	} ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-669190695"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-126447333-2'); //Google Analytics

gtag('config', 'AW-669190695'); //Google Ads
</script>
    
	<title><?=$page['title'];?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<meta name="keywords" content="<?=$page['keywords'];?>" />
	<meta name="description" content="<?=$page['description'];?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
    <?php
	//social img, desc
	$soc_img = (isset($page['img'])) ? ($page['img']) : ('/img/logo.png');
    ?>
<meta property="fb:app_id" content="175591192857982" />
	<meta property="fb:admins" content="100012925056500" />
	<meta property="og:url" content="<?=($domain.$cur_url);?>"/>
	<meta property="og:title" content="<?=$page['title'];?>" />
	<meta property="og:description" content="<?=$page['description'];?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://www.magniflex.ru<?=$soc_img;?>" />
	<meta property="og:image:type" content="image/<?=((strpos($soc_img,'.png') !== FALSE)?'png':'jpeg');?>" />
	<link rel="image_src" href="https://www.magniflex.ru<?=$soc_img;?>" />
	<?php
		if(strpos($cur_url,'?') !== FALSE){
			echo('<link rel="canonical" href="'.strstr($domain.$cur_url,'?',true).'" />');
		}
		else echo('<link rel="canonical" href="'.$domain.$cur_url.'" />');
		//else{
			//echo('<meta name="robots" content="index, follow" />');
		//}

		$url_ama = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if($url_ama == 'www.magniflex.ru/'){
			echo('<meta name="robots" content="noyaca"/>');
		}		
	?>
	<link rel="icon" type="image/png" href="https://www.magniflex.ru/img/logo-144-icon.png" />
	<link rel="shortcut icon" type="image/x-icon" href="https://www.magniflex.ru/favicon.ico" />
	<link rel="apple-touch-icon" href="https://www.magniflex.ru/img/logo-144-icon.png">
	<script src="/template/js/jquery-1.11.2.min.js"></script>
	<script src="/template/js/jquery.cookie.js"></script>
	<script src="/template/js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="/template/js/min/jquery.libs.min.js"></script>
	<script src="/template/js/slick.min.js"></script>
	<script src="/template/js/ticker00.js"></script>
    <script async src="//vk.com/js/api/openapi.js?116"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.4/headroom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.4/jQuery.headroom.min.js"></script>
	<!--[if lt IE 9]><script src="/template/js/css3-mediaqueries.js" type="text/javascript"></script><![endif]-->
</head>


<body  itemscope="" itemtype="http://schema.org/Organization" class="">

		<!--
	<div class="ama-alert-plank" style="display: none !important;">
		<p class="ama-alert-plank-text">Мы снова открылись! Приглашаем Вас во Флагманский шоу-рум в центре Москвы!</span></p>
		<img class="ama-alert-plank-close" src="/img/x_gray.svg" alt="" onclick="closePriceUp()">
	</div>
	-->

	
	<div class="ama-timer-plank" style="display: none;">
		<img class="ama-alert-plank-close" src="/img/x_gray.svg" alt="" onclick="closeAmaTimerPlank()">
		<div class="ama-timer-plank-wrapper">
			<img class="timer-plank-img" src="/img/action/autumn_sale_header.jpg" alt="">	
			<div class="ama-timer-plank-text">
				<a href="/discounts/discounts-15pr/"  target="_blank" title="Подробности акции">	
					<div class="ama-tpl-bigtext"></div>
					<div class="ama-tpl-smalltext"><span style="color: #c5273d">ОСЕНЬ SALE!</span> ЧЕСТНЫЕ <span style="color: #c5273d">СКИДКИ 15%</span> <br class="dispblock480"><span class="hide_timer_plank_on_mobile">НА ВСЕ МАТРАСЫ И ПОДУШКИ</span> ТОЛЬКО ДО 27 СЕНТЯБРЯ</div>
				</a>
			</div>
			<div class="ama-timer-div">
				<script src="//megatimer.ru/get/b63e83a82c70956a23240dd77c37143b.js"></script>
			</div>
		</div>
	</div>
	
	

<?php if($_SESSION['hide_discount'] === true && !empty($hide_discount_discount)){ ?>
<div class="ama-timer-plank" style="display: flex !important;;">
		<!--<img class="ama-alert-plank-close" src="/img/x_gray.svg" alt="" onclick="closeAmaTimerPlank()">-->
		<div class="ama-timer-plank-wrapper">
			<img class="timer-plank-img" src="/img/sale0720.jpg" alt="">	
			<div class="ama-timer-plank-text">
				<a href="/discounts/hide-discount/" target="_blank" title="Подробности акции">	
					<div class="ama-tpl-bigtext"></div>
					<div class="ama-tpl-smalltext"><span style="color: #c5273d;text-transform: uppercase;">Закрытая распродажа Magniflex!</span> <span style="color: #c5273d">СКИДКИ 15-20%</span> <br class="dispblock480"><span class="hide_timer_plank_on_mobile">НА ВСЕ МАТРАСЫ И ПОДУШКИ</span></div>
				</a>
			</div>
			<div class="ama-timer-div">
				<!--<script src="//megatimer.ru/get/e96eb2df16c1ba808ac105b9bde87594.js"></script>-->
				<script src="//megatimer.ru/get/6fe877172cccb9e7f521450220dec32b.js"></script>
			</div>
		</div>
	</div>
<?php } ?>
	
	<span style="display: none;" itemprop="name">Magniflex</span>

    <span style="display: none;" itemprop="address">г. Москва, метро Павелецкая/Таганская, Космодамианская набережная, дом 36</span>
    <span style="display: none;" itemprop="telephone">+7 (495) 989-11-32</span>
	<div id="sf-loader" style="position:fixed;top:0;left:0;width:100%;height:100%;background:#fff;z-index:9999">
		<img src="/img/logo_magniflex_2020.svg" alt="" style="max-width: 220px;position: absolute; top: 30%;left: 50%; margin-left: -110px;"/>
		<div class="progress"><div></div></div>
		<style>.ds_mobile_full{display:none;}@keyframes spin{to{transform:rotate(1turn)}}.progress{position:absolute;top:calc(50% - 25px);left:calc(50% - 25px);display:inline-block;width:5em;height:5em;margin:10px;font-size:8px;text-indent:999em;overflow:hidden;animation:spin 1s infinite steps(8)}.progress:after,.progress:before,.progress>div:after,.progress>div:before{content:'';position:absolute;top:0;left:2.25em;width:.5em;height:1.5em;border-radius:.2em;background:#eee;box-shadow:0 3.5em #eee;transform-origin:50% 2.5em}.progress:before{background:#555}.progress:after{transform:rotate(-45deg);background:#777}.progress>div:before{transform:rotate(-90deg);background:#999}.progress>div:after{transform:rotate(-135deg);background:#bbb}</style>
	</div>

	

	<div id="wrap" class="content">
		<? require_once 'template/widgets/left_sidebar.php'; ?>
        <div class="ama_hidden_desktop_menu">
            <div class="left_column">
                <div class="desktop_menu_header">
					<div class="ama-hamburger-custom close_btn hamburger-button">
						<span class="line line1"></span>
						<span class="line line2"></span>
						<span class="line line3"></span>
					</div>
                    <a class="navbar-offcanvas__header__logo" href="/"><img class="img-responsive img-responsive1 logo logo--desktop" src="/img/logo_magniflex_2020.svg" alt="logo menu"></a>
                </div>
            <div class="desktop_menu_content">
                <ul class="navbar-offcanvas__content__menu menu menu--service">
                    <li class="menu__item menu">
                        <a class="text-blue" href="/o-magniflex/about-magniflex/" data-wet="0.8s">O Magniflex</a>
						<? echo $left_sidebar['o-magniflex'];  ?>
                    </li>
                    <li class="menu__item menu">
                        <a class="text-blue" href="/production/nastoyashchie-ortopedicheskie-matrasy/">О продукции</a>
						<? echo $left_sidebar['production'];  ?>
                    </li>
                    <li class="menu__item menu">
                        <a class="text-blue" href="/catalog/mattresses/">Каталог</a>
						<? echo $left_sidebar['catalog'];  ?>							
                    </li>
                    <li class="menu__item menu">
                        <a class="text-blue" href="/pokupatelyam/dostavka/">Покупателям</a>
						<? echo $left_sidebar['pokupatelyam'];  ?>
                    </li>
                    <li class="menu__item menu">
                        <a class="text-blue" href="/o-magniflex/dileram/">Партнерам</a>
						<? echo $left_sidebar['partneram'];  ?>
                    </li>
                    <li class="menu__item menu">
                        <a class="text-blue" href="/discounts/">Акции</a>
						<? echo $left_sidebar['skidki-magniflex'];  ?>
                    </li>
                    <li class="menu__item menu parent_menu_shops">
                        <a class="text-blue" href="/o-magniflex/russia/">Магазины</a>
						<? echo $left_sidebar['adresa-magazinov'];  ?>
                    </li>
                    <li class="menu__item menu">
                        <a class="text-blue" href="/o-magniflex/contacts/">Контакты</a>
						<? echo $left_sidebar['contacts'];  ?>
					</li>
					<li class="menu__item menu">
                        <a class="text-blue" href="/news/">Новости</a>
					</li>
					<li class="menu__item menu__item-top" id="leftmenu_contacts">
						<p class="left-number-head">
						<a class="left-number-head-link" href="tel:+74959891132" id="leftmenu_contacts_a" onclick="gtag('event', 'conversion', {'send_to': 'AW-669190695/V90QCMbU8dYBEKeUjL8C', 'event_callback': function () { if (typeof(url) != 'undefined') {window.location = url;}}}); return true;">Требуется помощь?<br /> +7 (495) 989-11-32</a>

						</p>
					</li>
                </ul>
            </div>
            </div>
            <div class="right_column">
                <ul class="navbar-offcanvas__content__menu menu menu--float">
                    <li class="menu__item is-active" onmouseenter="change_menu_img(1)">
                        <a href="#" class="text-uppercase">ОРТОПЕДИЧЕСКИЕ МАТРАСЫ</a>
                    </li>
                    <li class="menu__item is-active" onmouseenter="change_menu_img(2)">
                        <a href="#" class="text-uppercase">ДЕТСКИЕ МАТРАСЫ</a>
                    </li>
                    <li class="menu__item is-active" onmouseenter="change_menu_img(3)">
                        <a href="#" class="text-uppercase">ПОДУШКИ</a>
                    </li>
                    <li class="menu__item is-active" onmouseenter="change_menu_img(4)">
                        <a href="#" class="text-uppercase">АКСЕССУАРЫ</a>
                    </li>
                    <li class="menu__item is-active" onmouseenter="change_menu_img(5)">
                        <a href="#" class="text-uppercase">ПЛЕДЫ</a>
                    </li>
                </ul>
            </div>
        </div>



		<div class="ds_mobile headroom">
			<div class="ds_mobile__logo">
				<div class="ds_mobile__logo--container">
				    <a href="/"><img src="/img/logo_magniflex_2020.svg" alt="Magniflex логотип"></a>
				</div>
			</div>
			<div class="ds_mobile__items" style="padding-right: 5px;">
				<div class="menu_bag">
					<img src="/img/mobile/bag-mobile.svg" alt="Корзина">
					<div class="mini_basket">
                        <span class="icon_cart"></span>
                        <a href="/cart/" title="Корзина товаров" rel="nofollow">
						    <span class="count_circle"></span>
						    <span class="count" style="display: inline;">14</span>
						</a>
                    </div>
				</div>
			</div>
			<div class="ds_mobile__items" style="position: relative;top: 1px;padding-right: 0px;margin: 0 -11px 0 9px;">
			  <a href="tel:+74959891132" onclick="gtag('event', 'conversion', {'send_to': 'AW-669190695/V90QCMbU8dYBEKeUjL8C', 'event_callback': function () { if (typeof(url) != 'undefined') {window.location = url;}}}); return true;">
				<!--<svg xmlns="http://www.w3.org/2000/svg" width="21.8" height="27.6" viewBox="0 0 26.8 27.6"><path fill="#ccc" d="M.7 27.6c-.5-.1-.7-.4-.7-.8 0-.2.2-1.7 2.3-3.3l-.1-.1-.1-.1-.3-.3C1 22.1.1 20 2 18.1l3-2.3c.1 0 .8-.6 1.9-.6.9 0 1.8.4 2.7 1.1l1 .8c1.6-.9 5.2-3.3 7.3-7.5-2.7-2.7-2.1-4.8-1-6 1.4-1.7 2-2.3 2.2-2.5.2-.2 1.1-1.1 2.5-1.1.9 0 1.7.3 2.4 1 1.4 1.3 1.8 1.7 1.8 1.7.2.2 1 1 1 2.4v.1c0 3.6-1.6 7.4-4.8 11.1-5.6 6.6-10.6 9.5-16.2 9.5-.3 0-1.1 0-1.9-.7l-.6-.6c-1.6 1.2-1.8 2.3-1.8 2.3-.1.5-.4.8-.8.8zm2.8-5l.4.5 1 1c.3.3.8.3.8.3 5.1 0 9.8-2.8 15.1-9 3-3.5 4.5-6.9 4.4-10.2V5c0-.8-.5-1.3-.5-1.3S24 3 22.9 2c-.4-.4-.9-.6-1.4-.6-.8 0-1.3.6-1.4.6-.1.1-.7.7-2.1 2.4-.6.7-1.1 1.9 1 4.1l.1.1c.1.1.2.3.3.4l.2.3-.2.4c-2.6 5.3-7.3 8.1-8.6 8.8l-.4.2-1.8-1.4c-.6-.5-1.2-.7-1.7-.7-.6 0-1 .3-1 .3L3 19.2c-1.3 1.3-.1 2.7-.1 2.7l.2.2c.1.1.1.1.1.2l.3.3c-.1 0 0 0 0 0z"></path>
				<svg xmlns="http://www.w3.org/2000/svg" width="26.8" height="27.6" viewBox="0 0 26.8 27.6"><path fill="#090909" d="M.7 27.6c-.5-.1-.7-.4-.7-.8 0-.2.2-1.7 2.3-3.3l-.1-.1-.1-.1-.3-.3C1 22.1.1 20 2 18.1l3-2.3c.1 0 .8-.6 1.9-.6.9 0 1.8.4 2.7 1.1l1 .8c1.6-.9 5.2-3.3 7.3-7.5-2.7-2.7-2.1-4.8-1-6 1.4-1.7 2-2.3 2.2-2.5.2-.2 1.1-1.1 2.5-1.1.9 0 1.7.3 2.4 1 1.4 1.3 1.8 1.7 1.8 1.7.2.2 1 1 1 2.4v.1c0 3.6-1.6 7.4-4.8 11.1-5.6 6.6-10.6 9.5-16.2 9.5-.3 0-1.1 0-1.9-.7l-.6-.6c-1.6 1.2-1.8 2.3-1.8 2.3-.1.5-.4.8-.8.8zm2.8-5l.4.5 1 1c.3.3.8.3.8.3 5.1 0 9.8-2.8 15.1-9 3-3.5 4.5-6.9 4.4-10.2V5c0-.8-.5-1.3-.5-1.3S24 3 22.9 2c-.4-.4-.9-.6-1.4-.6-.8 0-1.3.6-1.4.6-.1.1-.7.7-2.1 2.4-.6.7-1.1 1.9 1 4.1l.1.1c.1.1.2.3.3.4l.2.3-.2.4c-2.6 5.3-7.3 8.1-8.6 8.8l-.4.2-1.8-1.4c-.6-.5-1.2-.7-1.7-.7-.6 0-1 .3-1 .3L3 19.2c-1.3 1.3-.1 2.7-.1 2.7l.2.2c.1.1.1.1.1.2l.3.3c-.1 0 0 0 0 0z"></path></svg></svg>
				-->
				<img style="display: inline-block;width: 20px;height: 27px;" src="/img/tele_magni22.svg">
			  </a>
			</div>
			<div class="ds_mobile__show" style="width:60px;">
				<div class="hide_show_menu ds">
				</div>
			</div>
		</div>


			<div class="ds_menu__mask">
			</div>

<!-- NEW MOBILE MENU -->
		<div id="med_cookies"></div>


<!-- Menu start (Смена ховер в global.js -> hoverok) -->
		<div class="main_menu_wrap fixed">
            <div id="logo" class="ds_logo-fixed">
				<div class="contentMenu">
					<div class="ama-hamburger-custom hamburger-button">
						<span class="line line1"></span>
						<span class="line line2"></span>
						<span class="line line3"></span>
					</div>
					
				</div>
				<a class="logoTopLine" href="/" title="Magniflex, главная страница">
						<img  class="replace-2x" src="/img/logo_magniflex_2020.svg" alt="Magniflex официальный сайт | Ортопедические матрасы. Италия">
						<p>Официальный сайт</p>
				</a>
				
			</div>
			<div id="main_menu">
				<div class="menu">
					<a  title="Ортопедические матрасы Magniflex"><span class="arrow-main-block"><span class="width-responsive">Ортопедические</span> матрасы</span></a>
					<span class="mobile-grover"></span>
					<div class="menu_children_container slideUp " >
                            <div class="under_munu_top">
                                <div class="under_munu_top_block">
									<div class="viborRazmer">Выберите раздел</div>
                                        <div class="under_munu_top_line">
                                            <a href="/catalog/mattresses/">
                                        <img class="img_lazy_load" src="/img/no-image.png" data-src="/img/menu_orthopedic_mattress23.jpg" alt="ортопедические матрасы">                                            
											</a>
											<a class="line-under-ar" href="/catalog/mattresses/"><p>Ортопедические матрасы</p></a>
                                        </div>
                                        <div class="under_munu_top_line">
                                        <a href="/catalog/elitnye-matrasy/">
										<img class="img_lazy_load" src="/img/no-image.png" data-src="/img/menu_elite_collections2.jpg" alt="элитные матрасы"> 										
											</a>
											<a class="line-under-ar" href="/catalog/elitnye-matrasy/"><p>Элитные матрасы</p></a>
                                        </div>
                                        <div class="under_munu_top_line">
                                        <a href="/catalog/detskie-ortopedicheskie-matrasy/">
                                            <img class="img_lazy_load" src="/img/no-image.png" data-src="/img/menu_children_matress.jpg" alt="детские матрасы">                                           
											</a>
											<a class="line-under-ar" href="/catalog/detskie-ortopedicheskie-matrasy/"><p>Детские матрасы</p></a>
                                        </div>
										<div class="under_munu_top_line">
                                        <a href="/catalog/elitnye-stretching/">
                                            <img class="img_lazy_load" src="/img/no-image.png" data-src="/img/menu_mattress_for_sportsmen.jpg" alt="матрасы для спортсменов">                                           
											</a>
											<a class="line-under-ar" href="/catalog/elitnye-stretching/"><p>Матрасы для спортсменов</p></a>
                                        </div>
										
										<div class="under_munu_top_line">
                                        <a href="/discounts/discounts-15pr/">
                                            <img class="img_lazy_load" src="/img/no-image.png" data-src="/img/action/autumn_sale_menu.jpg" alt="Подробности акции" style="height: 104px;object-fit: cover;">                                
										</a>
											<a class="line-under-ar" href="/discounts/discounts-15pr/"><p style="color:#c92121;">АКЦИЯ ОСЕНЬ SALE</p></a>
                                        </div>
										
										<div class="under_munu_top_line">
                                        <a href="/outlet/">
                                        <img class="img_lazy_load" src="/img/no-image.png" data-src="/img/action/outlet2.jpg" alt="Скидки до 30% на уцененные матрасы">									
										</a>
										<a class="line-under-ar" href="/outlet/">	<p class="red">-30% на уцененные матрасы</p></a>											
										</div>
                                </div>
                            </div>
                           <div class="ama_mainblokada">                              
                               <div class="ama-left-menu-side">
							   	<div  class="children_block info">									
										<span class="titlemenu_filt">Показать все:</span>
									<ul class="wu_ichete">
										<li><a  class="seeOllPilow" href="/catalog/mattresses/">Ортопедические матрасы</a></li>
										<li><a  class="seeOllPilow" href="/catalog/mattress-covers/">Наматрасники</a></li>
									</ul>
									
								</div>
                                    <div class="children_block info">
                                       <span class="titlemenu_filt">КЛАССИЧЕСКИЕ КОЛЛЕКЦИИ</span>
                                        <ul class="wu_ichete">
                                            <li><a id="matras-merino" href="/catalog/mattresses/merinos/">Merino</a> (<a href="/catalog/mattresses/merinos/">Merinos</a>)  <span class="d5282d"> скидка 15%</span></li>
											<li><a id="matras-b-bamboo" href="/catalog/detskie-ortopedicheskie-matrasy/collectio-b-bamboo/">B-Bamboo</a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a id="matras-stile" href="/catalog/collectio-stile/">Stile </a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a id="matras-watter-lat" href="/catalog/mattresses/waterlattex/">WaterLattex</a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a id="matras-pens" href="/catalog/collectio-pensiero/">Pensiero</a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a id="matras-natur" href="/catalog/mattresses/new-naturcomfort/">Naturalmente (New Naturcomfort)</a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a id="matras-memorie" href="/catalog/collectio-memorie/">Memorie</a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a id="matras-memo" href="/catalog/mattresses/memo-merino/">Orthomemo Merino</a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a id="matras-topper" href="/catalog/toppers/topper-best-top/">Topper Best Top</a> <span class="d5282d"> скидка 15%</span></li>
                                        </ul>
                                    </div>
                                    <div class="children_block info" id="children_block_nope">
                                        <a class="add-animashka" href="/catalog/elitnye-matrasy/">
                                            <p class="titlemenu_filt">ПРЕМИАЛЬНЫЕ КОЛЕКЦИИ</p>
                                        </a>
                                        <ul class="wu_ichete">
                                            <li><a id="matras-rest" href="/catalog/elitnye-rest/">Rest</a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a id="matras-comfort" href="/catalog/elitnye-comfort-delux/">New Comfort Plus</a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a id="matras-carezza" href="/catalog/elitnye-carezza/">Carezza</a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a id="matras-fresh" href="/catalog/elitnye-freshgel/">FreshGel</a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a id="matras-stret" href="/catalog/elitnye-stretching/">Stretching</a> <span class="d5282d"> скидка 15%</span></li>
                                            <!--<li><a id="matras-magni" href="/catalog/elitnye-magnificent/">Magnificent</a> <span style="color:#d5282d; display: inline-block"> скидка 30%</span></li>-->
                                            <li><a id="matras-harmo" href="/catalog/elitnye-harmony/">Exchange Memoform dual</a> <span class="d5282d"> скидка 15%</span></li>
											<li><a id="matras-maestro" href="/catalog/elitnye-maestro/">Maestro</a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a id="matras-virtus" href="/catalog/elitnye-virtus/">Virtus</a> <span class="d5282d"> скидка 15%</span></li>
                                        </ul>
									</div>
									<div class="children_block info">
                                        <a class="add-animashka" href="/catalog/detskie-ortopedicheskie-matrasy/">
                                            <p class="titlemenu_filt">ДЕТСКИЕ МАТРАСЫ</p>
                                        </a>
                                        <ul class="wu_ichete">
                                            <li><a href="/catalog/detskie-ortopedicheskie-matrasy/">Детские матрасы</a> <span class="d5282d"> скидка 15%</span></li>
                                            <li><a href="/catalog/podrostkovue-matrasy/">Матрасы для подростков</a> <span class="d5282d"> скидка 15%</span></li>
										</ul>
										<a class="add-animashka new-hed-top" href="/catalog/mattresses/thin-mattresses/">
                                            <p class="titlemenu_filt">Тонкие матрасы</p>
                                        </a>
                                        <ul class="wu_ichete">
                                            <li><a href="/catalog/mattresses/toppers/">Топпер</a></li>
											<li><a href="/catalog/mattresses/thin-mattresses/">Тонкие матрасы</a></li>
											<li><a href="/catalog/mattresses/divannie-mattresses/">Матрас для дивана</a></li>											
                                        </ul>
                                    </div>
                                    <div class="children_block info">
                                        
                                            <span class="titlemenu_filt">Выбрать жесткость</span>
                                       <ul class="wu_ichete">
    
                                            <li><a id="find-zhest" href="/catalog/mattresses/zhestkie-mattresses/">Жесткие матрасы</a></li>
                                            <li><a id="find-sredn" href="/catalog/mattresses/srednie-mattresses/">Матрасы средней жесткости</a></li>
                                            <li><a id="find-myahk" href="/catalog/mattresses/soft_mattresses/">Мягкие матрасы</a></li>
                                            <li><a id="find-model" href="/catalog/mattresses/dual-reguliruemie-mattresses/">Dual регулируемая жесткость</a></li>
											<li><br></li>
											<li><a id="find-model2" href="/catalog/snyatie-s-proizvodstva/">Архив — Legenda</a></li>
    
                                        </ul>
                                    </div>
                                    
                               </div>
                        </div>
                      </div>

				</div>

				<div class="menu">
					<a class="kk"  title="Подушки Magniflex"> <span class="displ1024none arrow-main-block"><span class="width-responsive">Ортопедические</span> подушки</span></a>
					<span class="mobile-grover"></span>
					<div class="menu_children_container slideUp">
					<div class="under_munu_top">

							<div class="under_munu_top_block">
									<div class="viborRazmer">Выберите раздел</div>
									
									<div class="under_munu_top_line">
									<a href="/catalog/pillows/">
									<img class="img_lazy_load" src="/img/no-image.png" data-src="/img/prtopedicheskie-podushki.jpg" alt="ортопедические подушки"></a>
									<a class="line-under-ar" href="/catalog/pillows/"><p>Ортопедические подушки</p></a>
									</div>
									<div class="under_munu_top_line">
										<a href="/catalog/pillows/memory-foam-pillows/">
									<img class="img_lazy_load" src="/img/no-image.png" data-src="/img/podushki_s_effektom_pamyati.jpg" alt="подушки с эффектом памяти"></a>
										<a class="line-under-ar" href="/catalog/pillows/memory-foam-pillows/"><p>Подушки с эффектом памяти</p></a>
									</div>
									
									<div class="under_munu_top_line">
									<a href="/catalog/pillows/gel-pillows/">
									<img class="img_lazy_load" src="/img/no-image.png" data-src="/img/gelevye_podushki.jpg" alt="гелевые подушки"></a>
									<a class="line-under-ar" href="/catalog/pillows/gel-pillows/"><p>Гелевые подушки</p></a>
									</div>
									
									<div class="under_munu_top_line">
										<a href="/catalog/pillows/orthopedic_pillows/sushi-piccolo/">
									<img class="img_lazy_load" src="/img/no-image.png" data-src="/img/podushka_dlya_puteshestvii.jpg" alt="подушки для путешествий"></a>
										<a class="line-under-ar" href="/catalog/pillows/orthopedic_pillows/sushi-piccolo/"><p>Подушки для путешествий</p></a>
									</div>
									<div class="under_munu_top_line">
									<a href="/catalog/pillows/baby-pillows/">
									<img class="img_lazy_load" src="/img/no-image.png" data-src="/img/detskie_podushki1.jpg" alt="детские подушки"></a>
									<a class="line-under-ar" href="/catalog/pillows/baby-pillows/"><p>Детские подушки</p></a>
									</div>
									<div class="under_munu_top_line-variant">
                                        <div class="line-variant">
                                        <a class="variant-pilow" href="/pokupatelyam/kogda-menyat-podushku/">
                                            <img class="line-img img_lazy_load" src="/img/no-image.png" data-src="/img/pilow-icon.svg" alt="Когда менять подушку?">
                                            <p>Когда менять подушку?</p>
                                        </a>
                                        </div>
                                      <div class="line-variant">
                                      <a class="variant-pilow saleses" href="/discounts/discounts-25-per/">
                                            <img class="line-img img_lazy_load" src="/img/no-image.png" data-src="/img/icon-sales.svg" alt="Скидка 25% на подушку при покупке матраса">
                                            <p><span class="red">Скидка 25%</span> на подушку при покупке матраса</p>
                                        </a>
                                      </div>
									</div>
							</div>
						</div>
					  <div class="ama_mainblokada">
					    <div class="ama-left-menu-side">
						<div  class="children_block info">
							<span class="titlemenu_filt">Показать все:</span>
							<ul class="wu_ichete paddx">
							<li><a id="ortho-pil" class="seeOllPilow" href="/catalog/pillows">ортопедические подушки</a></li>
							</ul>
						</div>
						<div class="children_block info">
							
							<span class="titlemenu_filt">КОЛЛЕКЦИИ</span>
								<ul class="wu_ichete ">
									<li><a id="pillow-relax" href="/catalog/pillows/vacuum-pillows/relaxsan/">Коллекция Relaxsan</a> <span class="d5282d"> скидка 15%</span></li>
									<li><a id="pillow-classico" href="/catalog/pillows/collectio_classico/">Коллекция Classico</a> <span class="d5282d"> скидка 15%</span></li>
									<li><a id="pillow-freshgel" href="/catalog/pillows/collectio_freshgel">Коллекция Freshgel</a> <span class="d5282d"> скидка 15%</span></li>
									<li><a id="pillow-superiore" href="/catalog/pillows/collectio_superiore">Коллекция Superiore</a> <span class="d5282d"> скидка 15%</span></li>
									<li><a id="pillow-virtuoso" href="/catalog/pillows/collectio_virtuoso">Коллекция Virtuoso</a> <span class="d5282d"> скидка 15%</span></li>
									<li><a href="/catalog/pillows/Collectio_Sushi">Коллекция Sushi</a> <span class="d5282d"> скидка 15%</span></li>
								</ul>
								
						</div>
						<div class="children_block filternew info">
							<span class="titlemenu_filt">ВЫ ИЩЕТЕ:</span>
							<ul class="wu_ichete paddx">
								<!-- <li><a href="/catalog/pillows/orthopedic_pillows">ортопедические подушки</a></li> -->
								<li><a id="gel-pil" href="/catalog/pillows/gel-pillows/">Гелевые подушки</a></li>
								<li><a id="vacu-pil" href="/catalog/pillows/vacuum-pillows/">Вакуумные подушки</a></li>
								<li><a id="memo-pil" href="/catalog/pillows/memory-foam-pillows/">Подушки с эффектом памяти</a></li>
								<li><a id="mas-pil" href="/catalog/pillows/s-masagnim-effektom/">Подушки с массажным эффектом</a></li>
								<li><a id="ice-pil" href="/catalog/pillows/pillows-with-cooling-effect/">Подушки с охлаждающим эффектом</a></li>
							</ul>
							
						</div>
						<div class="children_block filternew info">
						<span class="titlemenu_filt">МАТЕРИАЛЫ:</span> 
							<ul class="wu_ichete" >
								<li><b class="slipcover">Чехол:</b>   <a id="ch-vis" href="/catalog/pillows/chehol-viscose/">viscose</a>, <a id="ch-out" href="/catalog/pillows/chehol-outlast/">  outlast</a>, <a id="ch-satin" href="/catalog/pillows/chehol-satin/">  satin</a></li>
								<li><b>Основа:</b> <a id="os-memo" href="/catalog/pillows/material-memoform/">memoform</a>, <a id="os-gel" href="/catalog/pillows/material-memogel">  memogel</a>, <a id="os-foam" href="/catalog/pillows/material-mallowfoam/">  mallowfoam</a></li>
							</ul>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="menu ">
					<a href="/skidki-magniflex/" title="Скидки" class="ama_new_ticket"> <span class="arrow-main-block red">Скидки</span></a>
				</div>
				
					<div class="menu ">
						<a class="add-animashka" href="/catalog/bases/">
							<span class="arrow-main-block">ОСНОВАНИЯ</span>
						</a>
					</div>
					
					<div class="menu ">
						<a class="add-animashka" href="/catalog/mattress-covers/">
								<span class="arrow-main-block">Наматрасники</span>
						</a>
					</div>
				
				<div class="menu ">
					<a href="/catalog/plaids/" title="ПЛЕДЫ" class="ama_new_ticket"> <span class="arrow-main-block">ПЛЕДЫ</span></a>
					
                </div>
                <div class="menu show_on_fix">
					<div class="mini_basket">
                        <span class="icon_cart"></span>
                        <a href="/cart/" title="Корзина товаров" rel="nofollow">
							<span class="count_circle"></span>
							<span class="count" style="display: none;"></span>
						</a>
                    </div>
				</div>
			</div>
		</div>
				
<!-- Finish Menu   -->

<div class="neft-price-down" style="display: none;">
		<img src="/img/ma.jpg" alt="">
	</div>

<div id="content">
