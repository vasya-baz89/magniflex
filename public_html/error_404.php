<?php
	if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

	if(isset($get_breadcrumbs))
		unset($get_breadcrumbs);
	
	$page = array('404');
	$get_breadcrumbs = function($item){
		return array(array('Главная', '/'),array('Страница не существует'));
	};
	
	include_once('template/widgets/breadcrumbs.php');
	
?>
<div class="map-columns" >
				<!--div class="hnb_pagenonetop">
					Этой страницы больше нет на сайте Magniflex.ru...
				</div>
				<div class="hnb_pagenone">
					  Зато у нас есть много хороших ортопедических <a href="/catalog/mattresses/">матрасов</a> и <a href="/catalog/pillows/">подушек</a>!
				</div-->
				<h1 class="in_h1">Страница не найдена (404 Not Found)</h1>
				<p>Этой страницы больше нет на сайте Magniflex.ru...</p>
				<img src="/img/kosmteh.jpg">
				<!--<p>Мы приносим свои извинения за доставленные неудобства и предлагаем следующие пути:</p>
				<ul class="in_ul">
				<li>перейти в каталог ортопедических <a href="http://www.magniflex.ru/catalog/mattresses/">матрасов</a> и <a href="http://www.magniflex.ru/catalog/pillows/">подушек</a>;</li>
				<li>перейти на <a href="http://www.magniflex.ru/">главную страницу</a> или <a href="http://www.magniflex.ru/sitemap/">карту сайта</a>;</li>
				<li>связаться с нами по телефону <b>+7 (495) 989-11-32</b>;</li>
				<li>написать письмо (<a href="mailto:info@magniflex.ru">info@magniflex.ru</a>) нашим сотрудникам.</li>
				<ul>-->

</div>

<script>
	$(document).ready(function(){
		setTimeout(() => {
			window.location = '/catalog/mattresses/'
		}, 10000);
	})
</script>