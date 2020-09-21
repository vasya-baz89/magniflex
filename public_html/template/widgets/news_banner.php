<?php

$news_banner = '';
$magn_top_links_arr = array(
	array('newsbanner1', '/img/stars.jpg', '/o-magniflex/stars-magniflex/', 'Звезды выбирают Magniflex'),
	array('newsbanner2', '/img/football-italy.jpg', '/news/magniflex-oficialnyj-partner-sbornoj-italii-po-futbolu/', 'Magniflex - официальный спонсор сборной Италии по футболу'),
	array('newsbanner3', '/img/tinkoff.jpg', '/news/tinkoff-magniflex/', 'Tinkoff выбирает Magniflex'),
	array('newsbanner4', '/img/3new.png', '/o-magniflex/magniflex-daydreamer/', 'Magniflex на элитных пляжах Европы'),
	array('newsbanner5', '/img/2new.png', '/news/buffon/', 'Ж.Л. Буффон - лицо марки Magniflex'),
	array('newsbanner6', '/img/Layer 8.png', '/news/magniflex-and-mangusta/', 'Яхты MANGUSTA коплектуются  исключительно матрасами Magniflex'),
	array('newsbanner7', '/img/sammit-g7.jpg', '/news/sammit-g7/', 'Матрасы Magniflex для гостей саммита "Большой Семерки"'),
);
$magn_top_links_count = 3;
$magn_top_links_index = 0;
$magn_top_links_printed = array();
for($i=0; $i<$magn_top_links_count; $i++){
	do{
		$magn_top_links_index = rand(0, count($magn_top_links_arr)-1);
	}while(isset($magn_top_links_printed[$magn_top_links_index]));
	$magn_top_links_printed[$magn_top_links_index] = $magn_top_links_index;
	
	$top_links_el = $magn_top_links_arr[$magn_top_links_index];
	$news_banner .= '
		<div class="'.$top_links_el[0].' ama_single_news">
			<img src="'.$top_links_el[1].'" alt="'.$top_links_el[3].'">
			<div class="under_news_text"><p>'.$top_links_el[3].'</p></div>
			<div class="under_news_text"><p><a href="'.$top_links_el[2].'">Узнайте больше</a></p></div>
		</div>
	';
}

$get_news_banner = 	'
	<div class="ama_news_banner">
		<div class="ama_news_block_area">
			<div class="ama_news_block_new">
				<img src="/img/mini-logo.png">
				<p class="ama_news_block_text">о Magniflex</p>
				<div class="ama_news_line"></div>
				<div class="ama_news_block_buttons">
					
					
					
				</div>
			</div>
		</div>
		<div class="single_news_row">
		'.$news_banner.'
		</div>
	</div>
';
?>