<?php
	if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}
	
	$breadcrumbs_subclass = 'shop';
	$get_breadcrumbs_shops = function($item){
		$breadcrumbs_ret = array(array('Главная','/'),array('Магазины в России','/shops/russia/'));

		if($item['cur_city']){
			$breadcrumbs_ret[] = array($item['name'], '/shops/russia/'.$item['cur_city'].'/');
		}
		
		if($item['city']){
			$breadcrumbs_ret[] = array($item['city_name'], '/shops/russia/'.$item['city'].'/');
			$breadcrumbs_ret[] = array($item['name'], '/shops/russia/'.$item['city'].'/'.$item['cur_shop'].'/');
		}
		return $breadcrumbs_ret;
	};
	
	$shop_russia = array(
		'name' => 'Адреса магазинов в России',
		'address' => 'russia',
		'map_zoom' => '3',
		'map_lat' => '49.070610', 
		'map_lng' => '81.382522',
		'title' => 'Магазины Magniflex в России | Магнифлекс',
		'description' => 'Адреса магазинов, ассортимен, график работы в России, в которых можно купить ортопедические матрасы и подушки Магнифлекс',
		'keywords' => 'magniflex магазин, магнифлекс магазин',
	);
	
	/*
		
	*/
	
	$cities = array(
		'abakan' => array(
			'name' => 'Абакан',
			'map_zoom' => '3',
			'map_lat' => '49.070610',
			'map_lng' => '81.382522',
			'text' => '
<strong>Телефоны для справок:</strong><br />
8 (913) 549-71-41
<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<img src="/img/dealers/magniflex_image_10.jpg" alt="Матрасы и подушки Magniflex с успехом продаются в 99 странах мира">
',
			'h1' => 'Адреса магазинов Magniflex в г. Абакан (республика Хакасия)',
			'title' => 'Адреса магазинов Magniflex в республике Хакасия, г. Абакан | матрасы и подушки',
			'description' => 'Адреса магазинов и салонов Magniflex в г. Абакан, республика Хакасия, в которых можно полежать, выбрать и купить матрасы и подушки',
			'keywords' => 'матрасы magniflex в абакан, матрасы магнифлекс в хакасии, магазин magniflex в абакан, где купить магнифлекс, абакан, хакасия',
		),
		'aleksin' => array('name' => 'Алексин', 'map_zoom' => '14', 'map_lat' => '54.50806428', 'map_lng' => '37.11640250', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		// 'arkhangelsk' => array('name' => 'Архангельск', 'map_zoom' => '', 'map_lat' => '', 'map_lng' => '', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'balakovo' => array('name' => 'Балаково', 'map_zoom' => '14', 'map_lat' => '52.02269179', 'map_lng' => '47.82944950', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'belgorod' => array('name' => 'Белгород', 'map_zoom' => '11', 'map_lat' => '50.59053079', 'map_lng' => '36.59481350', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		// 'bratsk' => array('name' => 'Братск', 'map_zoom' => '', 'map_lat' => '', 'map_lng' => '', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'vladikavkaz' => array('name' => 'Владикавказ', 'map_zoom' => '11', 'map_lat' => '43.03438980', 'map_lng' => '44.66554750', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		// 'vladimir' => array('name' => 'Владимир', 'map_zoom' => '', 'map_lat' => '', 'map_lng' => '', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'volgograd' => array('name' => 'Волгоград', 'map_zoom' => '13', 'map_lat' => '48.724802', 'map_lng' => '44.525326', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'voronezh' => array('name' => 'Воронеж', 'map_zoom' => '12', 'map_lat' => '51.690000', 'map_lng' => '39.159023', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'vologda' => array('name' => 'Вологда', 'map_zoom' => '12', 'map_lat' => '59.2221102', 'map_lng' => '39.8059256', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'groznyy' => array('name' => 'Грозный', 'map_zoom' => '3', 'map_lat' => '49.070610', 'map_lng' => '81.382522', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'ekaterinburg' => array('name' => 'Екатеринбург', 'map_zoom' => '12', 'map_lat' => '56.841186', 'map_lng' => '60.629626', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'kabardino-balkariya' => array('name' => 'Кабардино-Балкария', 'map_zoom' => '8', 'map_lat' => '43.48456580', 'map_lng' => '44.14151550', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'kaliningrad' => array('name' => 'Калининград', 'map_zoom' => '13', 'map_lat' => '54.7353841', 'map_lng' => '20.4707621', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'kirov' => array('name' => 'Киров', 'map_zoom' => '13', 'map_lat' => '58.60059026', 'map_lng' => '49.67952150', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'krasnodar' => array('name' => 'Краснодар', 'map_zoom' => '13', 'map_lat' => '45.10088137', 'map_lng' => '38.9774235', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'krasnoyarsk' => array('name' => 'Красноярск', 'map_zoom' => '13', 'map_lat' => '55.99744678', 'map_lng' => '92.81109650', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'krim' => array('name' => 'Крым', 'map_zoom' => '8', 'map_lat' => '44.97463480', 'map_lng' => '34.10127850', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'kemerovo' => array('name' => 'Кемерово', 'map_zoom' => '12', 'map_lat' => '55.3472818', 'map_lng' => '86.1215796', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'kursk' => array('name' => 'Курск', 'map_zoom' => '13', 'map_lat' => '51.741148', 'map_lng' => '36.197282', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'lipetsk' => array('name' => 'Липецк', 'map_zoom' => '13', 'map_lat' => '52.63459729', 'map_lng' => '39.66315300', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'nalchik' => array('name' => 'Нальчик', 'map_zoom' => '13', 'map_lat' => '43.4798033', 'map_lng' => '43.5964535', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'nizhniy-novgorod' => array('name' => 'Нижний Новгород', 'map_zoom' => '13', 'map_lat' => '56.33024077', 'map_lng' => '43.99618550', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		// 'nizhniy-tagil' => array('name' => 'Нижний Тагил', 'map_zoom' => '13', 'map_lat' => '57.9183559', 'map_lng' => '59.9787505', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'novosibirsk' => array('name' => 'Новосибирск', 'map_zoom' => '9', 'map_lat' => '55.05485678', 'map_lng' => '82.91155450', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		 
		'mirnuy' => array('name' => 'Мирный', 'map_zoom' => '13', 'map_lat' => '62.514812', 'map_lng' => '113.974744', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords' => '',),
		'moscow' => array('name' => 'Москва', 'map_zoom' => '10', 'map_lat' => '55.756599', 'map_lng' => '37.582148', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',
			'metro' => array(
				//'polianka' => 'м. Полянка',
				'avtzavdskaya' => 'м. Автозаводская', 'babushkinskaia' => 'м. Бабушкинская', 'bratislavskaia' => 'м. Братиславская', 'bootirskaia' => 'м. Бутырская', 'vdnh' => 'м. ВДНХ', 'kotlu' => 'м. Верхние котлы', 'vodnuistadion' => 'м. Водный стадион', 'dmitrovskaia' => 'м. Дмитровская', 'dobruninskaia' => 'м. Добрынинская', 'domodedovskaia' => 'м. Домодедовская', 'dubrovka' => 'м. Дубровка', 'zhulebino' => 'м. Жулебино', 'kievskaia' => 'м. Киевская', 'kotelniki' => 'м. Котельники', 'leninskii' => 'м. Ленинский проспект', 'lubianka' => 'м. Лубянка', 'liublino' => 'м. Люблино', 'mariino' => 'м. Марьино', 'mendeleevskaia' => 'м. Менделеевская', 'myakinino' => 'м. Мякинино', 'nagatinska' => 'м. Нагатинска', 'cheremushki' => 'м. Новые Черемушки', 'novogireevo' => 'м. Новогиреево', 'novoslobodskaia' => 'м. Новослободская', 'novokosino' => 'м. Новокосино', 'novokuzneckaia' => 'м. Новокузнецкая', 'oktiabrskaia' => 'м. Октябрьская', 'paveleckaia' => 'м. Павелецкая', 'pobedu' => 'м. Парк Победы', 'perovo' => 'м. Перово', 'polezhaevskaia' => 'м. Полежаевская', 'prazhskaia' => 'м. Пражская', 'proletarskaia' => 'м. Пролетарская', 'profsoiuznaia' => 'м. Профсоюзная', 'rumiantcevo' => 'м. Румянцево', 'savelovskaia' => 'м. Савеловская', 'salarevo' => 'м. Саларьево', 'semenovskaia' => 'м. Семеновская', 'serpuhovskaia' => 'м. Серпуховская', 'smolenskaia' => 'м. Смоленская', 'strogino' => 'м. Строгино', 'tulskaia' => 'м. Тульская', 'turgenevskaia' => 'м. Тургеневская', 'cska' => 'м. ЦСКА', 'entuziastov' => 'м. Шоссе Энтузиастов', 'iuzhnaia' => 'м. Южная', 'elektrozavodskaia' => 'м. Электрозаводская', 'shchelkovskaia' => 'м. Щелковская',
			),
		),
		'russia-moscow-obl' => array('name' => 'Московская область', 'map_zoom' => '9', 'map_lat' => '55.666599', 'map_lng' => '37.552148', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'orenburg' => array('name' => 'Оренбург', 'map_zoom' => '9', 'map_lat' => '51.842159', 'map_lng' => '55.114801', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'omsk' => array('name' => 'Омск', 'map_zoom' => '12', 'map_lat' => '54.982228', 'map_lng' => '73.326600', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'perm' => array('name' => 'Пермь', 'map_zoom' => '13', 'map_lat' => '57.9962451', 'map_lng' => '56.201661', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'penza' => array('name' => 'Пенза', 'map_zoom' => '13', 'map_lat' => '53.212756', 'map_lng' => '45.010702', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		// 'rostov' => array('name' => 'Ростов', 'map_zoom' => '13', 'map_lat' => '57.187746', 'map_lng' => '39.412464', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'rostov-na-dony' => array('name' => 'Ростов-на-Дону', 'map_zoom' => '13', 'map_lat' => '47.250204', 'map_lng' => '39.697345', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'spb' => array('name' => 'Санкт-Петербург', 'map_zoom' => '11', 'map_lat' => '59.983978', 'map_lng' => '30.338121', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'sochi' => array('name' => 'Сочи', 'map_zoom' => '13', 'map_lat' => '43.596405', 'map_lng' => '39.734175', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'stavropol' => array('name' => 'Ставрополь', 'map_zoom' => '13', 'map_lat' => '45.021239', 'map_lng' => '41.916020', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'old-oskol' => array('name' => 'Старый Оскол', 'map_zoom' => '13', 'map_lat' => '51.31679679', 'map_lng' => '37.90373950', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		// 'siktivkar' => array('name' => 'Сыктывкар', 'map_zoom' => '13', 'map_lat' => '61.677884', 'map_lng' => '50.809941', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'tambov' => array('name' => 'Тамбов', 'map_zoom' => '13', 'map_lat' => '52.70515279', 'map_lng' => '41.47053650', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		// 'tver' => array('name' => 'Тверь', 'map_zoom' => '13', 'map_lat' => '56.857736', 'map_lng' => '35.899768', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'tomsk' => array('name' => 'Томск', 'map_zoom' => '13', 'map_lat' => '56.49526577', 'map_lng' => '84.96926250', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'tula' => array('name' => 'Тула', 'map_zoom' => '13', 'map_lat' => '54.198466', 'map_lng' => '37.624674', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'tul-obl' => array('name' => 'Тульская обл.', 'map_zoom' => '9', 'map_lat' => '53.988396', 'map_lng' => '37.715477', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'tumen' => array('name' => 'Тюмень', 'map_zoom' => '12', 'map_lat' => '57.147352', 'map_lng' => '65.523204', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'ulianovsk' => array('name' => 'Ульяновск', 'map_zoom' => '11', 'map_lat' => '54.33145728', 'map_lng' => '48.40188350', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		// 'ufa' => array('name' => 'Уфа', 'map_zoom' => '13', 'map_lat' => '54.733074', 'map_lng' => '55.973995', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		// 'habarovsk' => array('name' => 'Хабаровск', 'map_zoom' => '13', 'map_lat' => '48.494670', 'map_lng' => '135.108418', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'cheliabinsk' => array('name' => 'Челябинск', 'map_zoom' => '13', 'map_lat' => '55.17908228', 'map_lng' => '61.31700700', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		'cherepovec' => array('name' => 'Череповец', 'map_zoom' => '13', 'map_lat' => '59.1217437', 'map_lng' => '37.9276892', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'south-saxalinsk' => array('name' => 'Южно-Сахалинск', 'map_zoom' => '13', 'map_lat' => '46.93970930', 'map_lng' => '142.73380050', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
		
		'yalta' => array('name' => 'Ялта', 'map_zoom' => '13', 'map_lat' => '44.500202', 'map_lng' => '34.158566', 'text' => '', 'h1' => '', 'title' => '', 'description' => '', 'keywords',),
	);
	
	// массив координатов станций метро
	$ds_dynamic_markers = array(
		'polianka' => array( 'lat'=>  55.737029, 'lng' => 37.6182929 ),
		'babushkinskaia' => array( 'lat'=>  55.8682256, 'lng' => 37.6612078 ),
		'bratislavskaia' => array( 'lat'=>  55.6588442, 'lng' => 37.7479035 ),
		'bootirskaia' => array( 'lat'=>  55.8131839, 'lng' => 37.60113 ),
		'kotlu' => array( 'lat'=>  55.6857264, 'lng' => 37.6110441 ),
		'dmitrovskaia' => array( 'lat' => 55.8075055, 'lng' => 37.579427 ),
		'dobruninskaia' => array( 'lat' => 55.72898, 'lng' => 37.6203403 ),
		'domodedovskaia' => array( 'lat' => 55.6100587, 'lng' => 37.7162778 ),
		'dubrovka' => array( 'lat' => 55.7178615, 'lng' => 37.6744451 ),
		'zhulebino' => array( 'lat' => 55.6842625, 'lng' => 37.8526408 ),
		'kievskaia' => array( 'lat' => 55.7437638, 'lng' => 37.5654053 ),
		'kotelniki' => array( 'lat' => 55.6749029, 'lng' => 37.8565579 ),
		'leninskii' => array( 'lat' => 55.7077801, 'lng' => 37.5843192 ),
		'lubianka' => array( 'lat' => 55.7592634, 'lng' => 37.625959 ),
		'liublino' => array( 'lat' => 55.675739, 'lng' => 37.7596024 ),
		'mariino' => array( 'lat' => 55.6491196, 'lng' => 37.7422822 ),
		'mendeleevskaia' => array( 'lat' => 55.7816595, 'lng' => 37.5967113 ),
		'nagatinska' => array( 'lat' => 55.6838833, 'lng' => 37.6214167 ),
		'cheremushki' => array( 'lat' => 55.6659931, 'lng' => 37.5271216 ),
		'novogireevo' => array( 'lat' => 55.7515923, 'lng' => 37.81484 ),
		'novoslobodskaia' => array( 'lat' => 55.7796266, 'lng' => 37.5992519 ),
		'novokosino' => array( 'lat' => 55.742879, 'lng' => 37.8832183 ),
		'novokuzneckaia' => array( 'lat' => 55.7358182, 'lng' => 37.6301631 ),
		'oktiabrskaia' => array( 'lat' => 55.7301506, 'lng' => 37.6099724 ),
		'paveleckaia' => array( 'lat' => 55.7310093, 'lng' => 37.6341684 ),
		'pobedu' => array( 'lat' => 55.7358848, 'lng' => 37.5153037 ),
		'perovo' => array( 'lat' => 55.7513163, 'lng' => 37.784205 ),
		'polezhaevskaia' => array( 'lat' => 55.7794742, 'lng' => 37.5206896 ),
		'prazhskaia' => array( 'lat' => 55.612275, 'lng' => 37.6020812 ),
		'proletarskaia' => array( 'lat' => 55.7313549, 'lng' => 37.6616898 ),
		'profsoiuznaia' => array( 'lat' => 55.6770876, 'lng' => 37.5597708 ),
		'rumiantcevo' => array( 'lat' => 55.6329645, 'lng' => 37.4395072 ),
		'savelovskaia' => array( 'lat' => 55.7941848, 'lng' => 37.5866717 ),
		'salarevo' => array( 'lat' => 55.6219677, 'lng' => 37.4224673 ),
		'semenovskaia' => array( 'lat' => 55.7830917, 'lng' => 37.7172666 ),
		'serpuhovskaia' => array( 'lat' => 55.7268419, 'lng' => 37.6230551 ),
		'smolenskaia' => array( 'lat' => 55.7486879, 'lng' => 37.5798543 ),
		'strogino' => array( 'lat' => 55.803723, 'lng' => 37.4008943 ),
		'tulskaia' => array( 'lat' => 55.7095962, 'lng' => 37.6204635 ),
		'turgenevskaia' => array( 'lat' => 55.7656411, 'lng' => 37.6345799 ),
		'cska' => array( 'lat' => 55.786537, 'lng' => 37.5310083 ),
		'entuziastov' => array( 'lat' => 55.7584079, 'lng' => 37.7494742 ),
		'iuzhnaia' => array( 'lat' => 55.6223352, 'lng' => 37.6066517 ),
		'elektrozavodskaia' => array( 'lat' => 55.7820971, 'lng' => 37.7031118 ),
		'shchelkovskaia' => array( 'lat' => 55.8086597, 'lng' => 37.7963107 ),
		'vdnh' => array( 'lat' => 55.824018, 'lng' => 37.6366095 ),
		'vodnuistadion' => array( 'lat' => 55.8383855, 'lng' => 37.4811572 ),
		'myakinino' => array( 'lat' => 55.8119433, 'lng' => 37.3868553 ),
	);
	
	
	$shops = array(
		'show-room' => array( //этот ид 'show-room' не менять
			'position' => array('lat' => 55.739128, 'lng' => 37.643864 ),
			'marker_title' => 'Флагманский шоу-рум Magniflex, Космодамианская набережная, дом. 36',
			'small_img' => '/img/shops/magni_of.jpg',
			'name' => 'ФЛАГМАНСКИЙ ШОУ-РУМ MAGNIFLEX',
			'address' => 'Москва, Космодамианская набережная, д. 36 <br />Бесплатная парковка',
			'metro' => 'м. Таганская, Павелецкая',
			'working_time' => 'Пн - Пт: 9:30 - 21:00 <br />Сб - Вс: 10:00 - 21:00 <br /><br />',
			'contacts' => 'Тел: +7 (495) 989-11-32',
			'exposition' => 'Представлен весь ассортимент.<br />Можно протестировать ВСЕ!<br />матрасы и подушки Magniflex!',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '
				<div class="cish_gal">
				<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/01_magnishowroom.jpg.jpg" class="boxer relgallery" title="Дилерский Флагманский шоурум Magniflex в городе Москва" itemprop="contentUrl"> <img src="/img/01_magnishowroom.jpg.jpg" alt="Дилерский Флагманский шоурум Magniflex в городе Москва" itemprop="thumbnailUrl"></a></span>
				<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/02_magnishowroom.jpg.jpg" class="boxer relgallery" title="Дилерский Флагманский шоурум Magniflex в городе Москва" itemprop="contentUrl"> <img src="/img/02_magnishowroom.jpg.jpg" alt="Дилерский Флагманский шоурум Magniflex в городе Москва" itemprop="thumbnailUrl"></a></span>
				<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/03_magnishowroom.jpg" class="boxer relgallery" title="Дилерский Флагманский шоурум Magniflex в городе Москва" itemprop="contentUrl"> <img src="/img/03_magnishowroom.jpg" alt="Дилерский Флагманский шоурум Magniflex в городе Москва" itemprop="thumbnailUrl"></a></span>
				<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/04_magnishowroom.jpg" class="boxer relgallery" title="Дилерский Флагманский шоурум Magniflex в городе Москва" itemprop="contentUrl"> <img src="/img/04_magnishowroom.jpg" alt="Дилерский Флагманский шоурум Magniflex в городе Москва" itemprop="thumbnailUrl"></a></span>
				<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/05_magnishowroom.jpg" class="boxer relgallery" title="Дилерский Флагманский шоурум Magniflex в городе Москва" itemprop="contentUrl"> <img src="/img/05_magnishowroom.jpg" alt="Дилерский Флагманский шоурум Magniflex в городе Москва" itemprop="thumbnailUrl"></a></span>
				<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/06_magnishowroom.jpg" class="boxer relgallery" title="Дилерский Флагманский шоурум Magniflex в городе Москва" itemprop="contentUrl"> <img src="/img/06_magnishowroom.jpg" alt="Дилерский Флагманский шоурум Magniflex в городе Москва" itemprop="thumbnailUrl"></a></span>
				<br>
				</div>
			',
			'warning' => 'Флагманский шоу-рум Magniflex в связи с распоряжением Правительства РФ о карантине не работает с 28 марта по 5 апреля 2020',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'tri-kita' => array(
			'position' => array('lat' => 55.7029895, 'lng' =>  37.3537347 ),
			'marker_title' => 'Московская обл., Одинцовский р-н, Новоивановское пгт, ул. Луговая, 1, 3 этаж',
			'small_img' => '/img/shops/XXL (18).jpg',
			'name' => 'ТЦ «Три Кита»',
			'address' => 'Московская обл., Одинцовский р-н, Новоивановское пгт, ул. Луговая, 1, 3 этаж, матрасная секция',
			'metro' => 'м. Парк Победы',
			'working_time' => 'Ежедневно 10:00 – 21:00',
			'contacts' => 'Тел: +7 (901) 363-25-28',
			'exposition' => 'Представлен весь ассортимент.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		

		'krasniy-kit' => array(
			'position' => array('lat' => 55.9167858, 'lng' =>  37.7565717 ),
			'marker_title' => 'г. Мытищи, Шараповский проезд, владение 2, строение 4, ТЦ Красный Кит',
			'small_img' => '/img/shops/unnamed (4).jpg',
			'name' => 'ТЦ Красный Кит',
			'address' => 'г. Мытищи, Шараповский проезд, владение 2, строение 4, ТЦ Красный Кит, 1 этаж. (м. Проспект Мира, м. Медведково).',
			'metro' => '',
			'working_time' => 'Ежедневно: 9:30 - 23:00',
			'contacts' => 'Тел: +7 (929) 500-01-85',
			'exposition' => 'Представлен весь ассортимент.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'grand-b4' => array(
			'position' => array('lat' => 55.886145, 'lng' =>  37.436448 ), 
			'marker_title' => 'г. Химки, Бутаково 4',
			'small_img' => '/img/shops/XXL (7).jpg',
			'name' => ' ТЦ "ГРАНД"',
			'address' => 'г. Химки, Бутаково 4 (Ленинградское шоссе, 100 метров от МКАД (в сторону области))',
			'metro' => '',
			'working_time' => 'Ежедневно 10:00 – 21:00',
			'contacts' => 'Тел: +7 (495) 775-62-04',
			'exposition' => 'Представлен весь ассортимент.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'ooo-katanga' => array(
			'position' => array('lat' => 55.759524, 'lng' =>  37.7594054 ), 
			'marker_title' => 'Шоссе Энтузиастов, д. 54, ТЦ «Мебель Уюта», 4 этаж',
			'small_img' => '/img/shops/XXL (13).jpg',
			'name' => 'ООО «КАТАНГА»',
			'address' => 'Шоссе Энтузиастов, д. 54, ТЦ «Мебель Уюта», 4 этаж',
			'metro' => 'м. Шоссе Энтузиастов',
			'working_time' => 'Пн-сб: 11:00 - 19:00',
			'working_time' => 'Вс: 11:00 - 18:00',
			'contacts' => 'Тел: +7 (925) 589-01-51, +7 (925) 510-85-09',
			'exposition' => 'Представлен весь ассортимент.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'salon-orthospeel-evroprom' => array(
			'position' => array('lat' => 55.701959, 'lng' =>  37.355852  ), 
			'marker_title' => ' г. Москва, Киевское шоссе 1, 500 м от МКАД в область',
			'name' => 'САЛОН «ORTHOSLEEP»',
			'address' => 'г. Москва, Киевское шоссе 1, ТЦ "РУМЯНЦЕВО", 500 м от МКАД в область, Корпус А, вход №3',
			'metro' => 'м. Румянцево',
			'working_time' => 'Ежедневно 10:00 - 21:00',
			'contacts' => 'Тел: +7 (495) 788-39-68',
			'exposition' => 'На экспозиции: Merinos 80x200, Pensiero 8 80x200, New Comfort Plus 10 80x200, образцы 40х60, подушки в ассортименте.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «ЕВРОПРОМ»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'salon-valest' => array(
			'position' => array('lat' => 55.811211, 'lng' =>  37.013457 ), 
			'marker_title' => 'г. Москва МО, Новорижское шоссе, 23 км',
			'name' => 'САЛОН "VALEST"',
			'address' => 'Новорижское шоссе, 23 км, д. Покровское, ул. Центральная, 27 ТК "Покровский", 2 этаж',
			'metro' => 'м. Строгино',
			'working_time' => 'Ежедневно 10:00 – 21:00',
			'contacts' => 'Тел: 8 800 500-56-79',
			'exposition' => 'На экспозиции: Merinos, Pensiero, Rest 9.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'spim-elektro' => array(
			'position' => array('lat' => 55.609627, 'lng' =>  37.605132 ), 
			'marker_title' => 'ул. Кировоградская, д. 15, ТЦ Электронный рай',
			'name' => 'МАГАЗИН МАТРАСОВ SPIM.RU',
			'address' => 'г. Москва, ул. Кировоградская, д. 15, ТЦ "Электронный рай", павильон 1Г-21, 1Г-29, 1Г-30 (1 вагон из центра, 100 метров от метро)',
			'metro' => 'м. Пражская',
			'working_time' => 'Ежедневно: 10:00 – 20:00',
			'contacts' => 'Тел: +7 (495) 518-74-42',
			'exposition' => 'На экспозиции: Merinos, Waterlattex',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'spim-kronpark' => array(
			'position' => array('lat' => 55.841447, 'lng' =>  37.489477 ),
			'marker_title' => 'Кронштадтский бульвар, д. 9, стр. 3, ТЦ Крон-Парк',
			'name' => 'МАГАЗИН МАТРАСОВ SPIM.RU',
			'address' => 'г. Москва, Кронштадтский бульвар, д. 9, стр. 3, ТЦ "Крон-Парк", 3 строение, павильон К-5. (1 вагон из центра, 300 метров от метро)',
			'metro' => 'м. Водный стадион',
			'working_time' => 'Ежедневно: 10:00 – 20:00',
			'contacts' => 'Тел: 8 916 745-65-10',
			'exposition' => 'На экспозиции: Merinos',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'spin-vdnh' => array(
			'position' => array('lat' => 55.824325, 'lng' =>  37.6323582 ),
			'marker_title' => 'ул. 1-я Останкинская, д.55, ТЦ ВДНХ',
			'name' => 'МАГАЗИН МАТРАСОВ SPIM.RU',
			'address' => 'г. Москва, ул. 1-я Останкинская, д.55, ТЦ "ВДНХ", 2 этаж. (первый вагон из центра, 2 минуты от метро)',
			'metro' => 'м. ВДНХ',
			'working_time' => 'Ежедневно: 10:00 – 20:00',
			'contacts' => 'Тел: 8 916 745-65-30',
			'exposition' => 'На экспозиции: Pensiero 12, Waterlattex, Pensiero 6, Pensiero 7, Pensiero 8',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'salon-matras-ok' => array(
			'position' => array('lat' => 55.789041, 'lng' =>  37.591214), 
			'marker_title' => 'г. Москва, Новослободская улица, 67/69',
			'small_img' => '/img/shops/XXL (12).jpg',
			'name' => 'Магазин "Матрас ОК»',
			'address' => 'ул. Новослободская, дом 67/69 1 этаж',
			'metro' => 'м. Менделеевская',
			'working_time' => 'Ежедневно 10:00 до 21:00',
			'working_time' => '	Бесплатная парковка – просьба звонить заранее',
			'contacts' => 'Тел: +7 (499) 973-16-65, +7 (499) 973-17-19',
			'exposition' => 'На экспозиции: Rest 10 90x200, подушки в ассортименте, образцы 40х60.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ИП Калиманова',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'ooo-citrus' => array(
			'position' => array('lat' => 55.660550, 'lng' =>  37.741617 ), 
			'marker_title' => 'г. Москва, ул. Люблинская, дом 151, Деловой центр "Марьино", 1 этаж.',
			'small_img' => '/img/shops/e6c455_underPageSpeedOptimization_1900x.JPG',
			'name' => 'МАТРАС-НА-ЗАКАЗ',
			'address' => 'г. Москва, ул. Люблинская, дом 151, Деловой центр "Марьино", 1 этаж.',
			'metro' => 'м. Братиславская',
			'working_time' => 'Пн-Пт: 11:00 - 19:00, Сб-Вс: выходные',
			'contacts' => 'Тел: +7 (495) 640-62-35, +7 (495) 220-44-95 доб. 193',
			'exposition' => 'Матрасы на экспозиции: Merinos 90x200, Naturalmente 90x200, Pensiero 90x200 Образцы 40х60',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «ЦИТРУС»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'mebel-italii-prima-vera' => array(
			'position' => array('lat' => 55.681686, 'lng' =>  37.848162 ), 
			'marker_title' => 'г. Москва, ул. Привольная, дом 65/32, 1 этаж',
			'name' => 'САЛОН «МЕБЕЛЬ ИТАЛИИ»',
			'address' => 'г. Москва, ул. Привольная, дом 65/32, 1 этаж',
			'metro' => 'м. Жулебино',
			'working_time' => 'Ежедневно 10:00 – 19:30',
			'contacts' => 'Тел: +7 (495) 704-47-01, +7 (929) 659-75-75',
			'exposition' => 'На экспозиции: Merinos 160х200, Stile 7 160x200, образцы 40х60',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «ПРИМА ВЕРА»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'posvon-info' => array(
			'position' => array('lat' => 55.781792, 'lng' =>  37.708456 ), 
			'marker_title' => 'г. Москва, ул. Большая Семеновская, дом 32',
			'small_img' => '/img/shops/XXL (17).jpg',
			'name' => '«ПОЗВОНОЧНИК.ИНФО»',
			'address' => 'ул. Большая Семеновская, дом 32',
			'metro' => 'м. Электрозаводская',
			'working_time' => 'Пн-Пт: 8:00 - 21:00, Сб-Вс 9:00-20:00',
			'contacts' => 'Тел: +7 (495) 215 58 87',
			'exposition' => 'На экспозиции: Merino/Merinos 80x200, образцы 40х60, подушки в ассортименте.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

			
		'salon-ortik' => array(
			'position' => array('lat' => 55.680876, 'lng' =>  37.623161 ), 
			'marker_title' => 'г. Москва, Варшавское шоссе, дом 32',
			'small_img' => '/img/shops/915.jpg',
			'name' => 'САЛОН МАТРАСОВ «ОРТИК»',
			'address' => 'г. Москва, Варшавское шоссе, д.32',
			'metro' => 'м. Нагатинска',
			'working_time' => 'Пн-сб: 10:00 - 19:00, Вс: выходной',
			'contacts' => 'Тел: +7 (495) 150-20-77',
			'exposition' => 'На экспозиции: Merinos 80x190, Rest 9 90x200, подушки в ассортименте.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «ОРТИК»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'beddington' => array( //https://beddington.ru/
			'position' => array('lat' => 55.721935, 'lng' =>  37.632605 ), 
			'marker_title' => 'г. Москва, ТЦ Твинстор, 1 Щипковский переулок, дом 4, Галлерея, 1 этаж.',
			'small_img' => '/img/shops/22a8289601c2118b3edff157e4f50094.jpg',
			'name' => 'САЛОН «BEDDINGTON»',
			'address' => 'г. Москва, ТЦ Твинстор, 1 Щипковский переулок, дом 4, Галлерея, 1 этаж.',
			'metro' => 'м. Серпуховская / Павелецкая',
			'working_time' => 'Ежедневно: 10:00 – 21:00',
			'contacts' => 'Тел: +7 (495) 150-30-96',
			'exposition' => 'На экспозиции: Freshgel 10, Stretching 10, Waterlattex, Pensiero 8 90х200, Rest 9 90х200.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «ФОРТЕ»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'palmetto' => array( 
			'position' => array('lat' => 64.536492, 'lng' =>  40.539147 ),
			'marker_title' => 'г. Архангельск, Пр.Новгородский 74.',
			'small_img' => '/img/shops/h6KtDOCXxiQ.jpg',
			'name' => 'Пальметто',
			'address' => 'г. Архангельск, Пр.Новгородский 74.',
			'metro' => 'м. Серпуховская / Павелецкая',
			'working_time' => 'Пн-пт: 10:00 – 21:00 <br>суббота 11.00-16.00<br>воскресенье выходной',
			'contacts' => 'Тел: +7 (818) 221-54-21, +7 (981) 563 04-44',
			'exposition' => 'есть образцы всех матрасов',
			'city' => '',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),

		'salon-mr-sleep' => array(
			'position' => array('lat' => 55.681059, 'lng' =>  37.623049 ), 
			'marker_title' => 'г. Москва, Варшавское шоссе, д. 32',
			'small_img' => '/img/shops/915.jpg',
			'name' => 'САЛОН МАТРАСОВ «MR. SLEEP»',
			'address' => 'г. Москва, Варшавское шоссе, д. 32, стр. 1, этаж 2, офис 203',
			'metro' => 'м. Нагатинска',
			'working_time' => 'Ежедневно 9:00 - 21:00',
			'contacts' => 'Тел: +7 (495) 191-43-55',
			'exposition' => 'На экспозиции: Merinos 90x200, Rest 9 90x200, Freshgel 10 90x200, Stile 8 90x200, Pensiero 7 90x200, подушки в ассортименте, образцы 40х60.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «ДЖЕМА»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'butik-serpuhivskiy' => array(
			'position' => array('lat' => 55.721942, 'lng' =>  37.632603 ),  
			'marker_title' => 'г. Москва, Партийный переулок, д. 1,к. 3, с. 57, галерея интерьеров Твинстор, павильон В-31',
			'small_img' => '/img/shops/1 (2).jpg',
			'name' => 'БУТИК МАТРАСОВ ПРЕМИУМ-КЛАССА НА СЕРПУХОВСКОЙ',
			'address' => 'г. Москва, Партийный переулок, д. 1, к. 3, с. 57, галерея интерьеров Твинстор, павильон В-31',
			'metro' => 'м. Серпуховская',
			'working_time' => 'Ежедневно: 10:00 – 21:00',
			'contacts' => 'Тел: 8 495 215-1O-77',
			'exposition' => 'На экспозиции: Pensiero 7, Pensiero 8, Pensiero 12, Rest 9, Rest 10, Rest 12, Waterlattex',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
	
		
	
		
		
		/*
		'spim-elektro-6150' => array(
			'position' => array('lat' => 61.677884, 'lng' =>  50.809941 ),
			'marker_title' => '',
			'name' => '',
			'address' => '',
			'metro' => '',
			'working_time' => '',
			'contacts' => '',
			'exposition' => '',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		*/
		'madam-podushkina' => array(
			'position' => array('lat' => 54.508968, 'lng' =>  37.117155 ),
			'marker_title' => 'г. Алексин, ул. Тульская, 136Д, ТЦ «Слобода», бутик 9.',
			'name' => 'САЛОН «МАДАМ ПОДУШКИНА»',
			'address' => 'г. Алексин, ул. Тульская, дом 136Д, ТЦ «Слобода», бутик 9',
			'metro' => '',
			'working_time' => 'Ежедневно 9:00 - 17:00',
			'contacts' => 'Тел: 8 905 111-11-07',
			'exposition' => '',
			'city' => 'aleksin',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		'bc-sfera' => array(
			'position' => array('lat' => 59.213120, 'lng' =>  39.855671 ),  
			'marker_title' => 'Ленинградская ул., 71, корп. 1, Вологда (БЦ Сфера, эт. 3)',
			'name' => '',
			'address' => 'Ленинградская ул., 71, корп. 1, Вологда (БЦ Сфера, эт. 3)',
			'metro' => '',
			'working_time' => 'пн-пт 10:00–20:00;<br> сб,вс 11:00–18:00',
			'contacts' => 'Тел: +7 (817) 252-93-53, +7 (817) 252-93-57, <br> +7 (921) 253-30-89',
			'exposition' => 'На экспозиции: Freshgel Dual 10 40x60',
			'city' => 'vologda',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		'ekb-show-room' => array( // http://ekb.magniflex.ru/ (o_O)
			'position' => array('lat' => 56.840998, 'lng' =>  60.630228 ), 
			'marker_title' => 'г. Екатеринбург, проспект Ленина д. 56',
			'name' => 'ДИЛЕРСКИЙ ШОУ-РУМ MAGNIFLEX',
			'address' => 'г. Екатеринбург, проспект Ленина д. 56',
			'premium_icon' => true,
			'metro' => '',
			'working_time' => 'понедельник-пятница с 10.00 до 20.00,<br>суббота-воскресение с 11.00 до 19.00',
			'contacts' => 'Тел: 8 343 346-93-10, 8 912 245-88-98',
			'exposition' => '',
			'city' => 'ekaterinburg',
			'text' => '
			<div class="hnb_conttextcrntbott">

				<a href="http://www.magniflex.ru/">
				<img class="magni-img" src="http://www.magniflex.ru/img/logo.png" height="72">
				</a>
				
				<h1 class="hnb_mytitlepag">Magniflex в Екатеринбурге</h1>

				<div class="show-room-block">
					<div class="hnb_tymevork flex-helper">
						<img  src="http://www.magniflex.ru/img/tymework.png"><br>
						<b>Часы работы</b><br>
						понедельник-пятница с 10.00 до 20.00<br> 
						суббота-воскресение с 11.00 до 19.00<br><br>
					</div>
					<div class="hnb_kontaktinfor flex-helper">
						<img src="http://www.magniflex.ru/img/kontainfj.png"><br>
						<b>Контактная информация</b><br>
						346-93-10,<br>
						S-Decor@mail.ru<br><br>
					</div>

					<div class="hnb_addres flex-helper">
						<img  src="http://www.magniflex.ru/img/addres.png"><br>
						<b>Адрес</b><br>
						г.Екатеринбург,<br>
						проспект Ленина д.56<br>
					</div>
				</div>
				<hr class="hnb_myhrpageeny">
				<h1>ДЕМОНСТРАЦИОННЫЙ САЛОН MAGNIFLEX</h1>


				В самом центре Екатеринбурга на пересечении улиц Ленина и Мичурина расположился уютный демонстрационный салон компании Магнифлекс.<br><br>

				<div class="hnb_gal">
				<img alt="Салон magniflex в Екатеринбурге" src="/img/Mf.jpg">
				</div>

				<br><br>
				<hr class="hnb_myhrpageeny">
				<h1>Выгодно! Быстро! Удобно!</h1>
				Вас приветливо встретят радушные сотрудники и проконсультируют по всем вопросам о матрасах и подушках! 
				В салоне представлены все модели матрасов, что удобно для полноценного тестирования. 
				Применяется единая ценовая политика - на всю продукцию установлены единые цены, 
				такие же как в московском центральном офисе! Не нужно платить за доставку до Екатеринбурга.
				Наши сотрудники помогут или погрузить в Вашу машину, или организовать для Вас доставку.
				<div style="clear:both;">
				<img class="img-center" src="http://www.magniflex.ru/img/devmat.png">
				<br><br>

				<hr class="hnb_myhrpageeny">
				<h1>Скидки и Акции</h1>
				В нашем официальном интернет магазине действует акция - скидка 25% на любые ортопедические подушки (можно на несколько) при покупке любого 
				ортопедического матраса Magniflex. 
				<br>Так-же получить подушку можно совершенно бесплатно! Для этого необходимо вам, вашим родственникам, или друзьям приобрести продукцию Magniflex на сумму более 99000р, используя вашу дисконтную карту. При достижении необходимой суммы, владелец карты в праве выбрать Любую подушку, и она будет ждать вас в нашем салоне. <br>
				Экономьте с Пользой!
				<br><br>

				<hr class="hnb_myhrpageeny">
				<h1>Открытые матрасы</h1>
				В жизни случается всякое. Бывает, что покупатель заказывает матрас определенного размера, а после того, как он распаковывает матрас, 
				выясняется, что ошибка с размером. Вакуумная упаковка матраса нарушена, товар потерял товарный вид. Мы приходим на помощь таким покупателям и меняем 
				этот матрас на новый. У нас остается открытый совершенно новый матрас. Эти (и подобные, случайно распакованные) матрасы мы предлагаем к продаже с 
				СУЩЕСТВЕННОЙ СКИДКОЙ от первоначальной стоимости товара. Мы гарантируем, что данный матрас не потерял ни одного из своих свойств, он качественный, 
				единственное отличие - нарушена герметичность упаковки товара. 
				<br><br>
				Для того, чтобы узнать наличие и цену интересующего Вас размера матраса звоните нам по телефону: +7 (343) 346 93 10
				<br><br>
				</div>
				</div>


				</div>
			',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		'rimini-shop' => array(
			'position' => array('lat' => 56.801982, 'lng' =>  60.593366 ), 
			'marker_title' => 'г. Екатеринбург, ул. Московская, 194',
			'small_img' => '/img/shops/rimini-shop-ekb.jpg', //'/img/shops/1266637439693855_b1be.jpg',
			'name' => 'Студия мебели "РИМИНИ"',
			'address' => 'г. Екатеринбург, ул. Московская, 194<br>Шоурум Магнифлекс Екатеринбург',
			'metro' => '',
			'working_time' => '<br>Часы работы:<br>Пн-Пт с 10:00 до 19:00<br>Сб-Вс с 12:00 до 17:00<br>',
			'contacts' => 'Тел: +7 (982) 766-14-02',
			'exposition' => 'Экспозиция: матрасы 80х190 Merino, Pensiero 7, Memorie 8, Naturalmente, детский матрас B-Bamboo 60x120.<br> Образцы: FreshGel 10, Rest 10, Stretching 10, New Comfort Plus 10, Exchange Memoform Dual, Virtus.',
			'city' => 'ekaterinburg',
			'text' => '
		

				<p>сайт: <a href="//rimini.studio" target="_blank" nofollow>rimini.studio</a><br>
				e-mail: <a href="mailto:info-rimini@yandex.ru">info-rimini@yandex.ru</a></p>
				
	<style> 
		.hnb_gal{
			justify-content: flex-start;
		}
		.hnb_gal.shop_gal.sss span{
			width: 354px;
			height: 266px;
			overflow: hidden;
		}
	</style>
				<div class="hnb_gal sss" style="margin-top:50px">
  <span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/CJKU9995.JPG" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/CJKU9995.JPG" alt="Студия мебели Римини" itemprop="thumbnailUrl" /></a></span>
  <span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/CZTN4275.JPG" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/CZTN4275.JPG" alt="Студия мебели Римини" itemprop="thumbnailUrl" /></a></span>
  <span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/DBYO0969.JPG" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/DBYO0969.JPG" alt="Студия мебели Римини" itemprop="thumbnailUrl" /></a></span>
  <span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/MPZJ7304.JPG" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/MPZJ7304.JPG" alt="Студия мебели Римини" itemprop="thumbnailUrl" /></a></span>
  <span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/MYTL7371.JPG" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/MYTL7371.JPG" alt="Студия мебели Римини" itemprop="thumbnailUrl" /></a></span>
  <span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/QLDY9285.JPG" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/QLDY9285.JPG" alt="Студия мебели Римини" itemprop="thumbnailUrl" /></a></span>
</div>
  <div class="hnb_contvideo">
  <video controls="controls" tabindex="0" style="width:100%;" muted>
	<source src="/video/WCDK0457.MP4" type="video/mp4;" />
	<object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%" height="585px" id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
		  <param name="movie" value="/data/video/index/video2.swf" />
		  <param name="quality" value="high" />
		  <param name="bgcolor" value="#000000" />
		  <param name="play" value="true" />
		  <param name="loop" value="true" />
		  <param name="wmode" value="window" />
		  <param name="scale" value="showall" />
		  <param name="menu" value="true" />
		  <param name="devicefont" value="false" />
		  <param name="salign" value="" />
		  <param name="allowScriptAccess" value="sameDomain" />
		  <a rel="nofollow" href="https://www.adobe.com/go/getflash">
			  <img src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
		  </a>
	  </object>
  </video>
  <br>
  <script>
  $(document).ready(function(){
	  $video_el = $(\'.hnb_contvideo video\');
	  if($video_el.play != \'undefined\' && !is_mobile()){
		  var video_playing = false;
		  var video_ended = false;

		  $(window).scroll(function() {
			  if(video_ended) return;
			  try{
				  if($(window).scrollTop() >= $video_el.offset().top-$video_el.height() && $(window).scrollTop() <= $video_el.offset().top+$video_el.height()){
					  if(!video_playing){
						  $video_el[0].play();
						  video_playing = true;
					  }
				  }
				  else if(video_playing){
					  $video_el[0].pause();
					  video_playing = false;
				  }
			  }catch(e){}
		  });
		  try{
			  $video_el[0].addEventListener("ended", function() { video_ended = true; }, true);
		  }catch(e){}
	  }
  });
  </script>
</div>

			',
			'title' => 'Студия мебели "РИМИНИ" | Шоурум Магнифлекс Екатеринбург',
			'description' => '',
			'keywords' => '',
		),
		'fazasha' => array(
			'position' => array('lat' => 56.824232, 'lng' =>  60.704701 ), 
			'marker_title' => 'г. Екатеринбург, ул. 40 лет Комсомола, 38н, ТЦ "Гулливер"',
			'small_img' => '/img/shops/XXL (2).jpg',
			'name' => '"FAZASNA"',
			'address' => 'г. Екатеринбург, ул. 40 лет Комсомола, 38н, ТЦ "Гулливер", корп. Б, 2 этаж.',
			'metro' => '',
			'working_time' => 'Часы работы: ежедневно с 10:00 - 21:00',
			'contacts' => 'Тел: 8 800 201-20-83',
			'exposition' => 'Экспозиция: Rest 9 (90*200) и Pensiero 8 (90*200)<br>Образцы матрасов 40*60: FreshGel 10, Comfort Dual 10, Pensiero 7, Waterlattex merino, Merino (Merinos)',
			'city' => 'ekaterinburg',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'diron-italian-interiors' => array(
			'position' => array('lat' => 56.850510, 'lng' =>  60.661837 ), 
			'marker_title' => 'г. Екатеринбург, ул. Студенческая, дом 11, МЦ Галерея',
			'name' => 'САЛОН "DIRON ITALIAN INTERIORS"',
			'address' => 'г. Екатеринбург, ул. Студенческая, дом 11, МЦ "Галерея"',
			'metro' => '',
			'working_time' => 'Часы работы: ежедневно с 10:00 - 20:00',
			'contacts' => 'Тел: +7 (343) 382-17-05, +7 (908) 639-07-38',
			'exposition' => 'Экспозиция: Naturalmente 90х200, Rest 10 90х200, Freshgel 10 80х200, New Comfort Plus 10 80х200,<br>Exchange Memoform Dual 160х200, Memorie 8 40x60, Stile 8 40x60, Stretching 9 40x60.',
			'city' => 'ekaterinburg',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'hors' => array(
			'position' => array('lat' => 52.023430, 'lng' =>  47.831097 ), 
			'marker_title' => 'г. Балаково, Саратовская обл, ул. Трнавская 24',
			'small_img' => '/img/shops/24462e_ce8627cb71e94a569c269c67e9c7b23a_mv2.webp',
			'name' => 'ООО «ХОРС»',
			'address' => 'Саратовская обл., г.Балаково, ул. Трнавская 24, ТЦ «Грин Хаус», 0-ой этаж',
			'metro' => '',
			'working_time' => 'Ежедневно с 10.00 до 21.00',
			'contacts' => 'Тел: 8 927 154-71-30',
			'exposition' => '',
			'city' => 'balakovo',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'dolche-vita' => array(
			'position' => array('lat' => 55.736773, 'lng' =>  37.654373 ),
			'marker_title' => 'Москва/г. Балашиха',
			'small_img' => '/img/shops/cover.jpg',
			'name' => '«САЛОН МЕБЕЛИ ДОЛЬЧЕ ВИТА»',
			'address' => 'Москва/г. Балашиха',
			'metro' => 'м. Щелковская',
			'working_time' => 'Ежедневно: 10:00 – 20:00',
			'contacts' => 'Тел: +7 (495) 969 45 19',
			'exposition' => 'На экспозиции: Merinos 160x190, образцы 40х60',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ЗАО «ГОЛД САН»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'fc24' => array(
			'position' => array('lat' => 52.031671, 'lng' =>  47.791963 ), 
			'marker_title' => 'г. Балаково, Саратовская обл, ул. Факел Социализма 24.',
			'city' => 'balakovo',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'villa-deko' => array(
			'position' => array('lat' => 50.600042, 'lng' =>  36.603244 ),
			'marker_title' => 'г. Белгород, ул.Белгородского Полка, дом 62',
			'small_img' => '/img/shops/XXL.jpg',
			'name' => 'САЛОН МЕБЕЛИ "ВИЛЛА ДЕКО"',
			'address' => 'ул. Белгородского Полка, дом 62',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: 8 472 228-90-82',
			'exposition' => 'Работа по каталогам.',
			'city' => 'belgorod',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		
		'ip-kornev' => array(
			'position' => array('lat' => 57.9183807, 'lng' =>  59.981858 ),
			'marker_title' => 'ул. Октябрьской революции, дом 66, ЦУМ, 5 этаж, МАТРАС-ЦЕНТР',
			'name' => 'ИП КОРНЕВ Д.Н.',
			'address' => 'ул. Октябрьской революции, дом 66, ЦУМ, 5 этаж, МАТРАС-ЦЕНТР',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: 8 912 287-33-77',
			'exposition' => '',
			'city' => '',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'dragunov' => array(
			'position' => array('lat' => 47.228679, 'lng' =>  39.762432 ), 
			'marker_title' => 'г. Ростов-на-Дону, ул. Закруткина 2/2',
			'name' => 'Дилерский салон Magniflex',
			'small_img' => '/img/shops/IMAG03251.jpg',
			'address' => 'г. Ростов-на-Дону, ул. Закруткина 2/2',
			'metro' => '',
			'working_time' => 'Вт-Пт: с 10:00 до 19:00<br />Сб,Вс: с 10:00 до 18:00<br />Понедельник: выходной',
			'contacts' => 'Тел: 229-97-59, 270-13-47, 8 938 123-83-88.<br /> E-mail: magniflex.rostov@gmail.com',
			'exposition' => 'Ортопедические матрасы: Merino, Waterlatex, Stile, Pensiero, Naturalmente, FreshGel, Comfort Plus, Stretching, Rest. <br />Все модели подушек.',
			'city' => 'rostov-na-dony',
			'text' => 'Дилерский шоу-рум Magniflex в городе Ростов-на-Дону. Доставка бесплатно, заказ без предоплаты. <br />Приглашаем к сотрудничеству магазины и дизайнерские студии. <br /><br />ИП Драгунов Алексей Сергеевич. ',
			'title' => 'Дилерский салон Magniflex',
			'description' => 'Дилерский шоу-рум Magniflex в городе Ростов-на-Дону.',
			'keywords' => 'магнифлекс ростов-на-дону, дилер magniflex ростов-на-дону',
			'text' => '
				<div class="cish_gal">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMAG03251.jpg" class="boxer relgallery" title="Дилерский салон Magniflex в городе  Ростов-на-Дону" itemprop="contentUrl"> <img src="/img/IMAG03251.jpg" alt="Дилерский салон Magniflex в городе  Ростов-на-Дону" itemprop="thumbnailUrl"></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMAG03211.jpg" class="boxer relgallery" title="Дилерский салон Magniflex в городе  Ростов-на-Дону" itemprop="contentUrl"> <img src="/img/IMAG03211.jpg" alt="Дилерский салон Magniflex в городе  Ростов-на-Дону" itemprop="thumbnailUrl"></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMAG03071.jpg" class="boxer relgallery" title="Дилерский салон Magniflex в городе  Ростов-на-Дону" itemprop="contentUrl"> <img src="/img/IMAG03071.jpg" alt="Дилерский салон Magniflex в городе  Ростов-на-Дону" itemprop="thumbnailUrl"></a></span>

<br>
</div>
			',
		),
		
		'd-d' => array(
			'position' => array('lat' => 47.230740, 'lng' =>  39.702688 ),
			'marker_title' => 'г. Ростов-на-Дону, пр. Буденновский, 83',
			'name' => '«СТУДИЯ МЕБЕЛИ D&D»',
			'address' => 'г. Ростов-на-Дону, пр. Буденновский, 83',
			'metro' => '',
			'working_time' => 'Пн.-Пт.: с 10:00 - 18:00<br>Сб.: 10:00 – 17:00<br>Воскресенье: выходной',
			'contacts' => 'Тел: +7 (863) 220 02-00',
			'exposition' => '',
			'city' => 'rostov-na-dony',
			'text' => 'ИП ФЕДОРОВ АЛЕКСЕЙ МИХАЙЛОВИЧ.',
			'title' => 'Матрасы Magniflex в «СТУДИЯ МЕБЕЛИ D&D»',
			'description' => 'Официальный дилер Magniflex - СТУДИЯ МЕБЕЛИ D&D',
			'keywords' => 'магнифлекс ростов-на-дону, дилер magniflex ростов-на-дону',
		),
		'viva-rostov' => array(
			'position' => array('lat' => 57.187746, 'lng' =>  39.412464 ),
			'marker_title' => '',
			'name' => '',
			'address' => '',
			'metro' => '',
			'working_time' => '',
			'contacts' => '',
			'exposition' => '',
			'city' => '',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'viva-bene' => array(
			'position' => array('lat' => 50.569093, 'lng' =>  36.573915 ),  
			'marker_title' => 'г. Белгород, ул. Шаландина, 4, к. 1',
			'small_img' => '/img/shops/1.jpg',
			'name' => 'САЛОН ИТАЛЬЯНСКОЙ МЕБЕЛИ VIVA BENE',
			'address' => 'ул. Шаландина, 4, к. 1',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: +7 (910) 223 02-23, +7 (910) 323 07-27',
			'exposition' => 'Standard Classico, Memo Gel Standard, NATURALMENTE 180x220, Pensiero 7 40x60, Rest 10 40x60, Memorie 8 40x60, Merinos 40x60',
			'city' => 'belgorod',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'kosta180' => array(
			'position' => array('lat' => 43.034347, 'lng' =>  44.665505 ), 
			'marker_title' => 'г. Владикавказ, пр. Коста 180',
			'name' => '',
			'address' => 'г. Владикавказ, пр. Коста, дом 180',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: 8 929 863-36-88',
			'exposition' => '',
			'city' => 'vladikavkaz',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'union-voronezh' => array(
			'position' => array('lat' => 51.669498, 'lng' =>  39.257857 ),  
			'marker_title' => 'г. Воронеж, ул. Димитрова, дом 74',
			'small_img' => '/img/shops/23af4f045bdafc21ba7dfc69f4d51a56.jpg',
			'name' => 'Мебельный салон Юнион-Воронеж',
			'address' => 'г. Воронеж, ул. Димитрова, дом 74',
			'metro' => '',
			'working_time' => 'ПН-ПТ: 09:00-20:00,<br>СБ: 10:00-19:00<br>ВС: выходной',
			'contacts' => 'Тел: 8 473 226-58-37',
			'exposition' => '',
			'city' => 'voronezh',
			'text' => 'Мебельный салон Юнион-Воронеж',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		'mann-groupe' => array(
			'position' => array('lat' => 51.679775, 'lng' =>  39.187500 ),  
			'marker_title' => 'г. Воронеж, ул. Урицкого, дом 128',
			'name' => '«СНЫ И СНОВИДЕНИЯ»',
			'address' => 'г. Воронеж, ул. Урицкого, дом 128',
			'metro' => '',
			'working_time' => 'Пн-Пт.: 11:00 - 20:00<br> Сб.: 11:00 - 18:00<br> Вс.: выходной.',
			'contacts' => 'Тел: + 7 (952) 952-09-03,<br> + 7 (473) 238-09-03<br> + 7 (473) 221-09-92<br> + 7 (952) 958-67-09',
			'exposition' => 'Экспозиция: Rest 9 90x200, Merinos 90x200, Pensiero 7 90x200',
			'city' => 'voronezh',
			'text' => 'ООО «СНЫ И СНОВИДЕНИЯ»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'butik-ermitazh' => array(
			'position' => array('lat' => 51.670872, 'lng' =>  39.188280 ), 
			'marker_title' => 'г. Воронеж, Плехановская, 41 — 1 этаж',
			'small_img' => '/img/shops/XXL (1).jpg',
			'name' => 'Интерьер-бутик «ЭРМИТАЖ»',
			'address' => 'г. Воронеж, Плехановская, 41 — 1 этаж',
			'metro' => '',
			'working_time' => 'Ежедневно 10:00 – 19:00',
			'contacts' => 'Тел: +7 (473) 271‒71‒91',
			'exposition' => 'Экспозиция: Rest 10 90x200, Carezza 10 90x200',
			'city' => 'voronezh',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'mann-group' => array(
			'position' => array('lat' => 51.710603, 'lng' =>  39.159526 ), 
			'marker_title' => 'г. Воронеж, бульвар Победы, дом 23б, 4 этаж.',
			'small_img' => '/img/shops/unnііamed.jpg',
			'name' => 'MANN GROUP',
			'address' => 'г. Воронеж, бульвар Победы, дом 23б, 4 этаж.',
			'metro' => '',
			'working_time' => 'График работы, ежедневно: 10:00 - 22:00',
			'contacts' => 'Тел: +7 (473) 261-88-89',
			'exposition' => 'На экспозиции: Merino 160x200, Stile 8.',
			'city' => 'voronezh',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
	
		
		'ortess-g12a' => array(
			'position' => array('lat' => 43.479818, 'lng' =>  43.596429 ), 
			'marker_title' => 'г. Нальчик, ул. Головко 12 а',
			'small_img' => '',
			'name' => 'САЛОН «ОРТЕСС»',
			'address' => 'г. Нальчик, ул. Головко, дом 12а',
			'metro' => '',
			'working_time' => 'Ежедневно 9:00 - 19:00 (без перерывов)',
			'contacts' => 'Тел: 8 886 624 21-374',
			'city' => 'nalchik',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ortess-n80' => array(
			'position' => array('lat' => 43.492484, 'lng' =>  43.597591 ), 
			'marker_title' => 'г. Нальчик, ул. Ногмова 80',
			'small_img' => '',
			'name' => 'САЛОН «ОРТЕСС»',
			'address' => 'г. Нальчик, ул. Ногмова, дом 80',
			'metro' => '',
			'working_time' => 'Ежедневно 9:00 - 19:00 (без перерывов)',
			'contacts' => 'Тел: 8 886 6 272-22-12',
			'city' => 'nalchik',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ortess-p50' => array(
			'position' => array('lat' => 43.490080, 'lng' =>  43.608840 ), 
			'marker_title' => 'г. Нальчик, ул. Пачева 50',
			'small_img' => '',
			'name' => 'САЛОН «ОРТЕСС»',
			'address' => 'г. Нальчик, ул. Пачева, дом 50',
			'metro' => '',
			'working_time' => 'Ежедневно 9:00 - 19:00 (без перерывов)',
			'contacts' => 'Тел: 8 928 700-85-98',
			'city' => 'nalchik',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ortess-bh4' => array(
			'position' => array('lat' => 43.503315, 'lng' =>  43.614607 ), 
			'marker_title' => 'г. Нальчик, ул. Богдана Хмельнинского 4',
			'small_img' => '',
			'name' => 'САЛОН «ОРТЕСС»',
			'address' => 'г. Нальчик, ул. Богдана Хмельницкого, дом 41',
			'metro' => '',
			'working_time' => 'Ежедневно 9:00 - 19:00 (без перерывов)',
			'contacts' => 'Тел: 8 928 720-58-41',
			'city' => 'nalchik',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ortess-l72' => array(
			'position' => array('lat' => 43.7558753, 'lng' =>  44.0233505 ),
			'marker_title' => 'г. Прохладный, ул. Ленина 72',
			'small_img' => '/img/shops/XXL (4).jpg',
			'name' => 'САЛОН «ОРТЕСС»',
			'address' => 'г. Прохладный, ул. Ленина, дом 72',
			'metro' => '',
			'working_time' => 'Ежедневно 9:00 - 19:00 (без перерывов)',
			'contacts' => 'Тел: 8 928 915-99-48',
			'city' => 'porhladniy',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ortess-l37' => array(
			'position' => array('lat' => 43.4845658, 'lng' =>  44.1415155 ),
			'marker_title' => 'г. Терек, ул. Ленина 37',
			'name' => 'САЛОН «ОРТЕСС»',
			'address' => 'г. Терек, ул. Ленина, дом 37',
			'metro' => '',
			'working_time' => 'Ежедневно 9:00 - 19:00 (без перерывов)',
			'contacts' => 'Тел: 8 938 915-71-22',
			'city' => 'terek',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ortess-l5' => array(
			'position' => array('lat' => 43.67379948, 'lng' =>  43.544621 ),
			'marker_title' => 'г. Баксан, ул. Ленина 5',
			'name' => 'САЛОН «ОРТЕСС»',
			'address' => 'г. Баксан, ул. Ленина, дом 5',
			'metro' => '',
			'working_time' => 'Ежедневно 9:00 - 19:00 (без перерывов)',
			'contacts' => 'Тел: 8 929 885-12-41',
			'city' => 'baksan',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ortess-sh3' => array(
			'position' => array('lat' => 43.5620448, 'lng' =>  43.8597495 ),
			'marker_title' => 'г. Нарткала, ул. Шекихачева 3',
			'name' => 'САЛОН «ОРТЕСС»',
			'address' => 'г. Нарткала, ул. Шекихачева, дом 3',
			'metro' => '',
			'working_time' => 'Ежедневно 9:00 - 19:00 (без перерывов)',
			'contacts' => 'Тел: 8 928 694-55-21',
			'city' => 'nartkala',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'alkasar' => array(
			'position' => array('lat' => 58.600563, 'lng' =>  49.679145 ), 
			'marker_title' => 'г. Киров, ул. Герцена 9',
			'small_img' => '/img/shops/unnamed (1).jpg',
			'name' => 'МЕБЕЛЬНЫЙ САЛОН "АЛЬКАСАР"',
			'address' => 'ул. Герцена, дом 9.',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: 8 833 264-72-13, 64-15-94,<br> 8 963 000-51-51',
			'exposition' => '',
			'city' => 'kirov',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'matrasy-aksessuary' => array(
			'position' => array('lat' => 43.914718, 'lng' =>  39.341701 ), 
			'marker_title' => 'Краснодарский край, поселок Лазаревский, ул. Калараш, дом 145',
			'name' => 'САЛОН "МАТРАСЫ И АКСЕССУАРЫ"',
			'address' => 'Краснодарский край, поселок Лазаревский, ул. Калараш, дом 145',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: 8 862 236-24-42, 8 918 916-56-75',
			'exposition' => '',
			'city' => 'krasnodar',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		'italiano' => array(
			'position' => array('lat' => 45.102237, 'lng' =>  38.983626 ), 
			'marker_title' => 'Краснодар, ул. Дзержинского 100 МЦ "КРАСНАЯ ПЛОЩАДЬ", 3 этаж, мебельный центр',
			'name' => 'мебельный салон СОМОВО МЕБЕЛЬ КРАСНОДАР/CLASSICO ITALIANO KRASNODAR',
			'address' => 'Краснодар, ул. Дзержинского 100 МЦ "КРАСНАЯ ПЛОЩАДЬ", 3 этаж, мебельный центр',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: 8 967 311-34-74, 8 918 024-63-36,<br> 8 918 024-61-16',
			'exposition' => '',
			'city' => 'krasnodar',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'somovo-mebel' => array(
			'position' => array('lat' => 45.102145, 'lng' =>  38.983620 ), 
			'marker_title' => 'г. Краснодар, ул. Дзержинского 100, Мегацентр «Красная Площадь», 3 этаж, секция С-167',
			'small_img' => '/img/shops/1 (1).jpg',
			'name' => 'Салон «СОМОВО МЕБЕЛЬ/CLASSICO ITALIANO»',
			'address' => 'г. Краснодар, ул. Дзержинского 100, Мегацентр «Красная Площадь», 3 этаж, секция С-167',
			'metro' => '',
			'working_time' => 'с понедельника по воскресенье с 10:00 до 22:00 ',
			'contacts' => 'Тел: +7 (967) 311-34-74, +7 (918) 024-63-36',
			'exposition' => '',
			'city' => 'krasnodar',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'gudson' => array(
			'position' => array('lat' => 45.090415, 'lng' =>  38.997366 ), 
			'marker_title' => 'г. Краснодар, г. Краснодар, ул.Тополиная, д.36',
			'name' => 'СТУДИЯ МАТРАСОВ "ГУДСОН"',
			'address' => 'г. Краснодар, ул.Тополиная, д. 36',
			'metro' => '',
			'working_time' => 'Режим работы: Пн. - Пт. с 9:00 - 17:00',
			'contacts' => 'Тел: +7 (989) 829-00-29',
			'exposition' => 'На экспозиции: Merino, Orthomemo merino, Pensiero 7, Stile 7, Rest 9.',
			'city' => 'krasnodar',
			'text' => 'ИП ШАМОВ',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'k115' => array(
			'position' => array('lat' => 54.735393, 'lng' =>  20.472952 ), 
			'marker_title' => 'г. Калининград, ул. Красная 115 ',
			'small_img' => '/img/shops/5629499552588233_de1f.jpg',
			'name' => '',
			'address' => 'г. Калининград, ул. Красная 115',
			'metro' => '',
			'working_time' => 'Пн - Пт с 10:00 – 19:00 <br />Сб: 11:00 – 18:00 <br />Вс: выходной',
			'contacts' => 'Тел: +7 (401) 293-40-86',
			'exposition' => '',
			'city' => 'kaliningrad',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'matrasy-krovari' => array(
			'position' => array('lat' => 55.998311, 'lng' =>  92.811395 ), 
			'marker_title' => 'г. Красноярск, ул. Красной Звезды, д. 1б',
			'name' => 'СТУДИЯ МЕБЕЛИ "МАТРАСЫ И КРОВАТИ"',
			'address' => 'г. Красноярск, ул. Красной Звезды, д. 1',
			'metro' => '',
			'working_time' => 'Ежедневно с 9 до 21 часов без обеда и выходных',
			'contacts' => 'Тел: 8 391 297-28-11, 8 923 334-05-55',
			'exposition' => '',
			'city' => 'krasnoyarsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'art-master' => array(
			'position' => array('lat' => 44.493625, 'lng' =>  34.127236 ), 
			'marker_title' => 'Республика Крым, Симферополь, ул. Кечкеметская, 13',
			'name' => 'МЕБЕЛЬНЫЙ САЛОН "АРТ МАСТЕР"',
			'address' => 'Республика Крым, г. Ялта, ул. Большевистская 10, ТЦ Конфетти',
			'metro' => '',
			'working_time' => 'Понедельник - Суббота с 9:00 до 19:00<br>Воскресенье - выходной',
			'contacts' => 'Тел: + 7 (978) 044 14-42',
			'exposition' => '',
			'city' => 'krim',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'maksi-dom' => array(
			'position' => array('lat' => 55.360124, 'lng' =>  86.062669 ), 
			'marker_title' => 'г. Кемерово, проспект Советский д. 25А',
			'name' => 'ТОРГОВЫЙ ЦЕНТР "МАКСИ ДОМ"',
			'address' => 'Проспект Советский, дом 25А',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: 8 384 290-05-28',
			'exposition' => '',
			'city' => 'kemerovo',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'city-dom' => array(
			'position' => array('lat' => 55.325350, 'lng' =>  86.148969 ), 
			'marker_title' => 'г. Кемерово, ул.Терешковой, дом 41',
			'small_img' => '/img/shops/703687473719932_80e2.jpg',
			'name' => 'МТЦ "СИТИ ДОМ"',
			'address' => 'ул.Терешковой, дом 41',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: 8 384 290-05-28',
			'exposition' => '',
			'city' => 'kemerovo',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'union-lipetsk' => array(
			'position' => array('lat' => 52.633407, 'lng' =>  39.658703 ), 
			'marker_title' => 'г. Липецк, пл. Заводская, д. 1',
			'small_img' => '/img/shops/1167201.png',
			'name' => 'МЕБЕЛЬНЫЙ САЛОН ЮНИОН-ЛИПЕЦК',
			'address' => 'г. Липецк, пл. Заводская, дом 1.',
			'metro' => '',
			'working_time' => 'Пн-Пт: 10:00-20:00<br>СБ: 10:00-19:00<br>Вс: выходной',
			'contacts' => 'Тел: 8 (474) 236 49-49',
			'exposition' => '',
			'city' => 'lipetsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
	
		'union-mirnuy' => array(
			'position' => array('lat' => 62.514672, 'lng' =>  113.974764 ),  
			'marker_title' => 'город Мирный, ул звездная 48/2',
			'name' => '',
			'address' => 'город Мирный, ул звездная 48/2',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: 8 914 257-98-89',
			'exposition' => '',
			'city' => 'mirnuy',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		
		'union-nizhniy-novgorod' => array(
			'position' => array('lat' => 56.328680, 'lng' =>  43.954543 ), 
			'marker_title' => 'г. Нижний Новгород, б. Мира, д. 17а',
			'small_img' => '/img/shops/4dab0606333eae9ce544c819ba58f13e.jpg',
			'name' => 'МЕБЕЛЬНЫЙ САЛОН "ЮНИОН-НИЖНИЙ"',
			'address' => 'г. Нижний Новгород, б. Мира, д. 17а.',
			'metro' => '',
			'working_time' => 'Пн-Пт: 10:00-20:00<br>СБ: 10:00-19:00<br>Вс: выходной',
			'contacts' => 'Тел: 277-51-95, 8 831 246-82-70',
			'exposition' => '',
			'city' => 'nizhniy-novgorod',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'matrasy-krovari-czc' => array(
			'position' => array('lat' => 55.054872, 'lng' =>  82.911634 ), 
			'marker_title' => 'г. Новосибирск, ул. Красный проспект, 99, Центр Здорового Сна',
			'small_img' => '/img/shops/magazin-vhod.jpg',
			'name' => 'Салон "Матрасы и Кровати"',
			'address' => 'г.Новосибирск, ул. Красный проспект, дом 99, "Центр Здорового Сна"',
			'metro' => '',
			'working_time' => 'Понедельник - Пятница: 11.00-19.00;<br>Суббота: 11.00-18.00;<br>Воскресенье: 11.00 до 17.00',
			'contacts' => 'Тел: 8 913 987-82-49',
			'exposition' => '',
			'city' => 'novosibirsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ortofleks-s62' => array(
			'position' => array('lat' => 54.997498, 'lng' =>  82.828900 ), 
			'marker_title' => 'г. Новосибирск, ул. Станционная, д. 62, Салон Матрасы и Кровати',
			'small_img' => '/img/shops/novosibirsk_ortoflex_svetlanovskaya.jpg',
			'name' => 'Салон «ОРТОФЛЕКС»',
			'address' => 'г.Новосибирск, ул. Станционная 62, Салон "Кровати и Матрасы"',
			'metro' => '',
			'working_time' => 'Понедельник - Пятница: 10.00-20.00;<br>Суббота: 11.00-15.00;<br>Воскресенье: выходной',
			'contacts' => 'Тел: +7 (383) 380-08-16',
			'exposition' => '',
			'city' => 'novosibirsk',
			'text' => 'Салон «ОРТОФЛЕКС» располагается на улице Станционная, за выставкой дачных строений, до поворота на улицу 2-я Станционная.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ortofleks-s50' => array(
			'position' => array('lat' => 55.080847, 'lng' =>  82.931074 ), 
			'marker_title' => 'г. Новосибирск, ул. Светлановская, д. 50',
			'name' => 'Салон «ОРТОФЛЕКС»',
			'address' => 'г.Новосибирск, ул. Светлановская, дом 50, ТВК "Большая Медведица", 2 этаж',
			'metro' => '',
			'working_time' => '10:00-21:00, без обеда и выходных',
			'contacts' => 'Тел: +7 (383) 380-81-16',
			'exposition' => '',
			'city' => 'novosibirsk',
			'text' => 'Салон «ОРТОФЛЕКС» располагается в Торговом Центре "БОЛЬШАЯ МЕДВЕДИЦА" на втором этаже. Сектор 35.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'len1a' => array(
			'position' => array('lat' => 55.753265, 'lng' =>  37.857942 ), 
			'small_img' => '/img/shops/orig.jpg',
			'marker_title' => 'г. Реутов, ул. Ленина д. 1А.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		
		'shatura-mebel-l9' => array(
			'position' => array('lat' => 56.008850, 'lng' =>  37.436901 ),
			'marker_title' => 'г. Лобня, ул. Ленина д. 9',
			'small_img' => '/img/shops/XXL(5).jpg',
			'name' => '«ШАТУРА МЕБЕЛЬ»',
			'address' => 'г. Лобня, Краснополянский пр.3, Цокольный этаж',
			'metro' => '',
			'working_time' => 'Пн - Пт: 10.00-20.00, Сб - Вс: 10.00-19.00',
			'contacts' => 'Тел: +7 (495) 577-33-86',
			'exposition' => 'На экспозиции: образцы 40х60',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «МИР МЕБЕЛИ»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'pul61' => array(
			'position' => array('lat' => 55.482012, 'lng' =>  37.564726 ), 
			'small_img' => '/img/shops/XXL(6).jpg',
			'marker_title' => 'г. Подольск, проспект юны ленинцев, дом 61',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'shatura-mebel-p54' => array(
			'position' => array('lat' => 55.938844, 'lng' =>  37.517598 ), 
			'marker_title' => 'г. Долгопрудный, ул. Первомайская д.54',
			'small_img' => '/img/shops/unnamed (2).jpg',
			'name' => '«ШАТУРА МЕБЕЛЬ»',
			'address' => 'г. Долгопрудный, ул. Первомайская, дом 54',
			'metro' => '',
			'working_time' => 'Пн - Пт: 10:00 – 20:00, Сб - Вс: 10:00 – 19:00',
			'contacts' => 'Тел: +7 (498) 685-08-34',
			'exposition' => 'На экспозиции: образцы 40х60.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «МИР МЕБЕЛИ»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'dom-mebeli' => array(
			'position' => array('lat' => 56.003676, 'lng' =>  37.198253 ), 
			'marker_title' => 'г. Зеленоград, Панфиловский пр-кт. д. 1 ',
			'small_img' => '/img/shops/264fed5a75d0a7e38c7ec9a7dcc38823.jpg',
			'name' => '«ДОМ МЕБЕЛИ»',
			'address' => 'г. Зеленоград, Панфиловский пр-кт. дом 1, 1 эт.',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: +7 (499) 736-04-39, +7 (499) 736-53-08,<br> +7 (499) 736-16-79',
			'exposition' => 'На экспозиции: образцы 40х60.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'corso-italia' => array(
			'position' => array('lat' => 55.92949478, 'lng' =>  37.750541 ),
			'marker_title' => "г. Нижний Новгород, ул. Рождественская, дом 13, БЦ 'Муравей'",
			'name' => 'МЕБЕЛЬНЫЙ САЛОН "CORSO ITALIA"',
			'address' => 'ул. Рождественская, дом 13, БЦ "Муравей", 2-ой этаж',
			'metro' => '',
			'working_time' => 'Н-СБ 10:00-19:00<br>Вс выходной',
			'contacts' => 'Тел: 8 (831) 461-80-94, (831) 461-81-94<br>(831) 461-80-93',
			'exposition' => '',
			'city' => 'nizhniy-novgorod',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'len45' => array(
			'position' => array('lat' => 55.834258, 'lng' =>  37.301357 ), 
			'small_img' => '/img/shops/00_big.jpg',
			'marker_title' => 'г. Красногорск, ул. Ленина, дом 45',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'sov73a' => array(
			'position' => array('lat' => 55.84653728, 'lng' =>  37.1946635 ),
			'marker_title' => 'Красногорский район, поселок Нахабино, ул. Советская, дом 73А',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'up7a' => array(
			'position' => array('lat' => 55.886621, 'lng' =>  37.418506 ), 
			'marker_title' => 'г. Химки, Юбилейный проспект, дом 7А',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
	
		
		'ubi24a' => array(
			'position' => array('lat' => 55.910572, 'lng' =>  37.709743 ),
			'marker_title' => 'г. Мытищи, ул. Юбилейная, дом 24А',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'beres24' => array(
			'position' => array('lat' => 55.993090, 'lng' =>  38.385251 ), 
			'marker_title' => 'Ногинский район, поселок Черноголовка, ул. Березовая, дом 24',
			'name' => 'Магазин в поселке Черноголовка',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'davidoff-shsh1' => array(
			'position' => array('lat' => 51.844712, 'lng' =>  55.119637 ),
			'marker_title' => 'г. Оренбург, Шарлыкское шоссе, 1. Мегамолл «Армада», галерея «ЛУВР», салон "Davidoff"',
			'name' => 'САЛОН "DAVIDOFF"',
			'small_img' => '/img/shops/orienburg_davydoff.jpg',
			'address' => 'г. Оренбург, Шарлыкское шоссе, дом 1. Мегамолл «Армада»,галерея «ЛУВР», салон "Davidoff"',
			'metro' => '',
			'working_time' => 'с 10:00 до 22:00',
			'contacts' => 'Тел: 8 (353) 261-84-95, 20-16-73',
			'exposition' => '',
			'city' => 'orenburg',
			'text' => 'Студия интерьера "Davidoff"  была основана более десяти лет. Это динамично-развивающаяся, стабильная компания, гордящаяся своими работами и клиентами. Предлагаемая продукция разнообразна: это настоящий синтез стилей, эклектика на новом уровне и  отточенные классические решения, такие как Ар-Нуво и Ар-Деко, Рококо и Барокко.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'davidoff-nsh2' => array(
			'position' => array('lat' => 51.774470, 'lng' =>  55.199081 ),
			'marker_title' => 'МОЛЛ «Армада 2», центральный атриум, Нежинское шоссе, д. 2, 1 этаж, салон "Davidoff"',
			'name' => 'САЛОН "DAVIDOFF"',
			'small_img' => '/img/shops/orienburg_davydoff.jpg',
			'address' => 'г. Оренбург, МОЛЛ Армада 2, Центральный Атриум. Нежинское шоссе, д. 2, 1 этаж. Салон "Davidoff"',
			'metro' => '',
			'working_time' => 'с 10:00 до 22:00',
			'contacts' => 'Тел: 8 353 229-79-78, 201-673, +7 (961) 929-79-78,',
			'exposition' => '',
			'city' => 'orenburg',
			'text' => 'Студия интерьера "Davidoff"  была основана более десяти лет. Это динамично-развивающаяся, стабильная компания, гордящаяся своими работами и клиентами. Предлагаемая продукция разнообразна: это настоящий синтез стилей, эклектика на новом уровне и  отточенные классические решения, такие как Арт Деко и Арт Нуво, Рококо и Барокко.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'union-penza' => array(
			'position' => array('lat' => 53.199373, 'lng' =>  45.010523 ), 
			'marker_title' => 'г. Пенза, ул. Плеханова, д. 34',
			'small_img' => '/img/shops/XXL (23).jpg',
			'name' => 'МЕБЕЛЬНЫЙ САЛОН ЮНИОН-ПЕНЗА',
			'address' => 'г. Пенза, ул. Плеханова, дом 34',
			'metro' => '',
			'working_time' => 'Пн-Пт: 10:00-20:00<br>СБ: 10:00-19:00<br>Вс: выходной',
			'contacts' => 'Тел: 8 (841) 220-52-04',
			'exposition' => '',
			'city' => 'penza',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		'union-volgograd' => array(
			'position' => array('lat' => 48.724571, 'lng' =>  44.525274 ), 
			'marker_title' => 'г. Волгоград, улица Хиросимы дом 1',
			'name' => '',
			'address' => 'г. Волгоград, улица Хиросимы дом 1',
			'metro' => '',
			'working_time' => 'Пн-Пт: 09:00-17:00<br>СБ: 10:00-15:00<br>Вс: выходной',
			'contacts' => 'Тел: 8 960 892-79-79, 8 844) 233-89-11',
			'exposition' => 'На экспозиции: COMFORT PLUS 10 160 х 200, MERINO 90 х 200, RELAXSAN',
			'city' => 'volgograd',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		
		'mnk' => array(
			'position' => array('lat' => 57.997396, 'lng' =>  56.204768 ), 
			'marker_title' => 'г. Пермь, ул. Кронштадская, дом 29',
			'name' => '"МНК"',
			'address' => 'г. Пермь, ул. Кронштадская, дом 29',
			'metro' => '',
			'working_time' => 'будни с 9-00 до 18-00',
			'contacts' => 'Тел: +7 (950) 450-52-25',
			'exposition' => '',
			'city' => 'perm',
			'text' => 'ООО "МНК"',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'palazzo' => array(
			'position' => array('lat' => 43.607447, 'lng' =>  39.736359),
			'marker_title' => 'г. Сочи, ул. Пластунская, дом 70Э',
			'small_img' => '/img/shops/XXL (3).jpg',
			'name' => 'Салон Мебели "Palazzo"',
			'address' => 'г. Сочи, ул. Пластунская, дом 70',
			'metro' => '',
			'working_time' => 'Ежедневно: 10:00 - 20:00',
			'contacts' => 'Тел: +7 (988) 236-00-66',
			'exposition' => 'На экспозиции: Rest 10 160x200<br>Waterlattex 160x200<br>Stile 7 160x200<br>Pensiero 7 160x200',
			'city' => 'sochi',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'shoss2' => array(
			'position' => array('lat' => 43.518372, 'lng' =>  39.855667 ), 
			'marker_title' => 'г. Сочи, Хоста, ул. Шоссейная 2',
			'city' => 'sochi',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'sfera-1' => array(
			'position' => array('lat' => 43.608077, 'lng' =>  39.743853 ), 
			'marker_title' => 'г. Сочи, ул. Транспортная, 28',
			'name' => 'СФЕРА-1',
			'address' => 'г.Сочи, ул.Транспортная, дом 28, 1 этаж.',
			'metro' => '',
			'working_time' => '10.00 - 21.00 без перерывов и выходных.',
			'contacts' => 'Тел: 8 862 225-87-53, 8 918 404-70-99',
			'exposition' => '',
			'city' => 'sochi',
			'text' => 'ООО "СФЕРА-1"',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'caro-sh100' => array(
			'position' => array('lat' => 45.020474, 'lng' =>  41.915981 ), 
			'marker_title' => 'г. Ставрополь, ул. Шпаковская 100',
			'name' => 'Интерьерный салон CARO',
			'address' => ' г. Ставрополь, ул. Шпаковская 100.',
			'metro' => '',
			'working_time' => 'Ежедневно: 10:00–19:00',
			'contacts' => 'Тел: +7 (962) 4-490-00-20<br>+7(865) 272-45-32<br>+7-8652-72-45-28<br>instagramm:@caro_stavropol',
			'exposition' => 'На экспозиции: MEMORI 40x60, (Orthomemo Merino) Merinos 40х60, Waterlatex 40х60 ',
			'city' => 'stavropol',
			'text' => 'ИП Каменка А.П.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'len127' => array(
			'position' => array('lat' => 45.0423238, 'lng' =>  41.9860975 ),
			'marker_title' => 'г. Ставрополь, ул. Ленина 127',
			'city' => 'stavropol',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'mr-mastress' => array(
			'position' => array('lat' => 51.315654, 'lng' =>  37.905015 ),
			'marker_title' => 'г. Старый Оскол, мкр. Надежда, дом 5',
			'name' => 'МАСТЕРСКАЯ МАТРАСОВ «MR. MATTRESS»',
			'address' => 'мкр. Надежда, дом 5, ТЦ «Всё для Вас» 1 эт, пав. 4',
			'metro' => '',
			'working_time' => 'Понедельник - Пятница: 10.00-19.00<br>Суббота: 10.00-18.00<br>Воскресенье: выходной',
			'contacts' => 'Тел: 8 980 374-24-10, 8 929 000-05-79',
			'exposition' => '',
			'city' => 'old-oskol',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'union-tambov' => array(
			'position' => array('lat' => 52.705177, 'lng' =>  41.470396 ), 
			'marker_title' => 'г. Тамбов, ул. Советская, д. 34',
			'small_img' => '/img/shops/Без названия (1).jpg',
			'name' => 'МЕБЕЛЬНЫЙ САЛОН ЮНИОН-ТАМБОВ',
			'address' => 'г. Тамбов, ул. Советская, дом 34.',
			'metro' => '',
			'working_time' => 'Пн-Пт: 10:00-20:00<br>СБ: 10:00-19:00<br>Вс: выходной',
			'contacts' => 'Тел: 8 475 275-51-12',
			'exposition' => '',
			'city' => 'tambov',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'lia-roshel' => array(
			'position' => array('lat' => 56.495325, 'lng' =>  84.969268 ), 
			'marker_title' => 'г. Томск, ул. Яковлева, 23',
			'name' => 'Салон мягкой мебели "Ля Рошель"',
			'address' => 'г. Томск, ул. Яковлева, дом 23.',
			'metro' => '',
			'working_time' => 'С 10.00-19.00 без выходных ',
			'contacts' => 'Тел: 8 382 265-76-76, 8 382 265-23-02',
			'exposition' => '',
			'city' => 'tomsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'salon-elit' => array(
			'position' => array('lat' => 54.18487228, 'lng' =>  37.6032625 ),
			'marker_title' => 'г. Тула, ул. Л.Толстого, д. 91-А',
			'small_img' => '/img/shops/XXL (8).jpg',
			'name' => 'МЕБЕЛЬНЫЙ САЛОН "ЭЛИТ"',
			'address' => 'ул. Л. Толстого, дом 91-А.',
			'metro' => '',
			'working_time' => 'Понедельник - Пятница: 10.00-19.00<br>Суббота: 11.00-17.00<br>Воскресенье: выходной',
			'contacts' => 'Тел: 8 487 231-97-81, 31-88-62',
			'exposition' => '',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'kom24' => array(
			'position' => array('lat' => 54.20058078, 'lng' =>  37.6015915 ),
			'marker_title' => 'г. Тула, ул. Коминтерна, д.24',
			'address' => 'г. Тула, ул. Коминтерна, дом 24г.',
			'metro' => '',
			'working_time' => 'с 10 до 19 часов, без выходных',
			'contacts' => 'Тел: 8 487 270-29-51, 71-66-63',
			'exposition' => '',
			'city' => 'tula',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'studio-mobili' => array(
			'position' => array('lat' => 57.151008, 'lng' =>  65.561981 ), 
			'marker_title' => 'г. Тюмень, ул. Максима Горького, 68',
			'small_img' => '/img/shops/s2n07hg2juyvtw0a.jpg',
			'name' => 'СТУДИЯ MOBILI',
			'address' => '625048. г. Тюмень, ул. Максима Горького, дом 68, корпус 3 (Салон находится ЖК "Даудель", 200 метров от торгового центра "Гудвин")',
			'metro' => '',
			'working_time' => 'с понедельника по субботу с 11:00 до 19:00',
			'contacts' => 'Тел: +7 (345) 297-07-93',
			'exposition' => '',
			'city' => 'tumen',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'matrex-magnat' => array(
			'position' => array('lat' => 57.131447, 'lng' =>  65.555835 ), 
			'marker_title' => 'г. Тюмень, ул.30 лет Победы д.7, стр. 5',
			'name' => 'САЛОН "МАТРЭКС"',
			'address' => 'г. Тюмень, ТЦ "МАГНАТ", ул. 30 лет Победы, дом 7, стр.5, 1 этаж.',
			'metro' => '',
			'working_time' => 'с Пн-сб: 10:00 - 19:30, Вс: 10:00 - 18:00',
			'contacts' => 'Тел: 8 345 259-53-01',
			'exposition' => '',
			'city' => 'tumen',
			'text' => 'Салон ортопедических матрасов и кроватей.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'matrex-avto45' => array(
			'position' => array('lat' => 57.153985, 'lng' =>  65.446627 ), 
			'marker_title' => 'г. Тюмень, ул. Авторемонтная д.45, стр. 4',
			'name' => 'САЛОН "МАТРЭКС"',
			'address' => 'ул. Авторемонтная, дом 45, стр.4, 2 этаж',
			'metro' => '',
			'working_time' => 'с Пн-Пт: 9:00 - 18:30',
			'contacts' => 'Тел: 8 345 243-37-24, 8 345 274-48-19',
			'exposition' => '',
			'city' => 'tumen',
			'text' => 'Салон ортопедических матрасов и кроватей.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'new-standart' => array(
			'position' => array('lat' => 57.142081, 'lng' =>  65.544790 ), 
			'marker_title' => 'г. Ульяновск, ул. Радищева 100',
			'small_img' => '/img/shops/XXL(24).jpg',
			'name' => 'САЛОН «NEW STANDART»',
			'address' => 'ул. Радищева, дом 100',
			'metro' => '',
			'working_time' => 'с 9:00 до 17:00',
			'contacts' => 'Тел: 8 842 273-64-40<br>8 842 273-64-41<br>8 951 096-37-10<br>8 906 144-75-33',
			'exposition' => '',
			'city' => 'ulianovsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'td-troia' => array(
			'position' => array('lat' => 54.333711, 'lng' =>  48.371090 ),
			'marker_title' => 'г. Ульяновск, ул. Урицкого, д. 58',
			'name' => 'ТД «ТРОЯ»',
			'address' => 'ул. Урицкого, д. 58',
			'metro' => '',
			'working_time' => 'с 9:00 до 18:00',
			'contacts' => 'Тел: 8 842 227-33-46',
			'exposition' => '',
			'city' => 'ulianovsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'push11' => array(
			'position' => array('lat' => 54.331484, 'lng' =>  48.402042 ),  
			'marker_title' => 'г. Ульяновск, ул. Пушкарева, д.11, корпус 2',
			'small_img' => '/img/shops/unnamed (5).jpg',
			'name' => 'ТЦ «САРАЙ»',
			'address' => 'ул. Пушкарева, д.11, корпус 2',
			'metro' => '',
			'working_time' => 'ежедневно, с 9:00 до 20:00',
			'contacts' => 'Тел: 8 842 237-02-50',
			'exposition' => '',
			'city' => 'ulianovsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'salon-mebeli-first' => array(
			'position' => array('lat' => 55.820692, 'lng' =>  37.388056 ), 
			'marker_title' => 'Пересечение Каширского шоссе и 24 км МКАД, ТК "Твой Дом", 2 этаж',
			'name' => 'САЛОН МЕБЕЛИ FIRST',
			'address' => 'Пересечние Каширского шоссе и 24 км МКАД',
			'metro' => 'м. Домодедовская',
			'working_time' => 'Ежедневно: 10:00 – 22:00',
			'contacts' => 'Тел: +7 (925) 253-56-66, +7 (977) 101-28-30',
			'exposition' => 'На экспозиции: Merinos 80x200, Pensiero 7 80x200, Rest 9 80x200, New Comfort Plus 10 80x200, образцы 40х60.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'prom2' => array(
			'position' => array('lat' => 54.2927637, 'lng' =>  48.2848252 ),
			'marker_title' => 'г. Ульяновск, ул. Промышленная, д. 2',
			'small_img' => '/img/shops/Без названия (2).jpg',
			'name' => 'ТЦ «ИМПЕРИЯ МЕБЕЛИ»',
			'address' => 'ул. Промышленная, д. 2',
			'metro' => '',
			'working_time' => 'Пн-вс, с 9:30 до 19:00',
			'contacts' => 'Тел: 8 842 262-49-88',
			'exposition' => '',
			'city' => 'ulianovsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ooo-stm' => array(
			'position' => array('lat' => 55.17908228, 'lng' =>  61.317007 ),
			'marker_title' => 'г. Челябинск, ул. Бр. Кашириных, 102-83',
			'name' => 'ООО «СТМ»',
			'address' => 'г. Челябинск, ул. Бр. Кашириных, дом 102-83.',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: 8 351 270-82-18',
			'exposition' => '',
			'city' => 'cheliabinsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		'suite' => array(
			'position' => array('lat' => 55.171566, 'lng' =>  61.364909 ), 
			'marker_title' => 'Челябинск, 
			ТК "Манхэттен" ул. Труда, 174. 1 этаж, Вход "В" (прямо по входу)',
			'name' => 'Мебельный бутик "SUITE"',
			'address' => 'Челябинск, 
			ТК "Манхэттен" ул. Труда, 174. 1 этаж, Вход "В" (прямо по входу)',
			'metro' => '',
			'working_time' => 'Пн.-Сб. с 10-00 до 18-00',
			'contacts' => 'Тел: 8 999 589-91-09',
			'exposition' => 'Экспозиция: Pensiero 8 180x200, Waterlattex 160x200, Memorie 8 40x60, Naturalmente 40x60, Pensiero 6 40x60, Pensiero 7 40x61, Rest 10, Rest 9',
			'city' => 'cheliabinsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		'diron' => array(
			'position' => array('lat' => 55.103030, 'lng' =>  61.483127 ),  
			'marker_title' => 'Челябинск,
			Фабрика мебели "Diron" ул. Туруханская, 34',
			'name' => 'Фабрика мебели "Diron"',
			'address' => 'Челябинск,
			Фабрика мебели "Diron" ул. Туруханская, 34',
			'metro' => '',
			'working_time' => 'Время работы: Пн.-Пт. с 10-00 до 17-00',
			'contacts' => 'Тел: 8 999 589-91-09 (по предварительному звонку)',
			'exposition' => 'Экспозиция: Pensiero 8 180x200, Waterlattex 160x200, Memorie 8 40x60, Naturalmente 40x60, Pensiero 6 40x60, Pensiero 7 40x61, Rest 10, Rest 9',
			'city' => 'cheliabinsk',
			'text' => '
			сайт: <a href="http://diron-home.com/" target="_blank" nofollow>diron-home.com</a><br>
			Инстаграм:: <a href="https://www.instagram.com/dironmebel/" target="_blank">@dironmebel</a><br>
			',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ego-interer' => array(
			'position' => array('lat' => 59.121752, 'lng' =>  37.929876 ), 
			'marker_title' => 'г. Череповец, Советский пр. дом 16',
			'small_img' => '/img/shops/XXL (25).jpg',
			'name' => 'САЛОН "ЭГО ИНТЕРЬЕР"',
			'address' => 'г. Череповец, Советский пр. дом 16 (162600, Вологодская обл.)',
			'metro' => '',
			'working_time' => 'Пн. - Пт.: 10:00 - 20:00<br>Сб.,Вс.: 11:00 - 18:00',
			'contacts' => 'Тел: 8 820 220-22-22',
			'exposition' => 'Экспозиция: Pensiero 7 40x60, Naturalmente 40x60, Rest 10 90x200, Merinos 90x200',
			'city' => 'cherepovec',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'art-master' => array(
			'position' => array('lat' => 44.4936534, 'lng' =>  34.1255413 ),
			'marker_title' => 'Республика Крым, г. Ялта, ул. Большевистская 10, ТЦ Конфетти',
			'name' => 'МЕБЕЛЬНЫЙ САЛОН "АРТ МАСТЕР"',
			'address' => 'Республика Крым, г. Ялта, ул. Большевистская 10, ТЦ Конфетти',
			'metro' => '',
			'working_time' => 'Понедельник - Суббота с 9:00 до 19:00<br>Воскресенье - выходной',
			'contacts' => 'Тел: + 7 (978) 044-14-42',
			'exposition' => '',
			'city' => 'krim',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'len89-2' => array(
			'position' => array('lat' => 55.677849, 'lng' =>  37.531471 ), 
			'small_img' => '/img/shops/XXL (9).jpg',
			'marker_title' => 'г. Москва, Ленинский пр-кт 89/2',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'bolsemen10' => array(
			'position' => array('lat' => 55.782323, 'lng' =>  37.702432 ), 
			'marker_title' => 'г. Москва, ул. Большая Семеновская, д. 10',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'51km-mkad' => array(
			'position' => array('lat' => 55.68732472, 'lng' =>  37.4144945 ),
			'small_img' => '/img/shops/XXL (10).jpg',
			'marker_title' => 'г. Москва, 51 км МКАД',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'zao-eos' => array(
			'position' => array('lat' => 55.864280, 'lng' =>  37.682107 ), 
			'marker_title' => 'г. Москва, Анадырский проезд, дом 17/1, к. 1',
			'name' => '"МАТРАСЫ И АКСЕССУАРЫ"',
			'address' => 'г. Москва, Анадырский проезд, дом 17/1, к. 1, помещение 1, 1 этаж',
			'metro' => 'м. Бабушкинская',
			'working_time' => 'Пн-Вс: 10:00 - 19:00',
			'contacts' => 'Тел: + 7 (499) 184-38-81, + 7 (903) 762-80-80',
			'exposition' => 'На экспозиции: Merinos 80x190, образцы 40х60.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ЗАО «ЭОС»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'salon-berluskoni' => array(
			'position' => array('lat' => 55.704603, 'lng' =>  37.597087 ), 
			'marker_title' => 'г. Москва, 5-ый Донской проезд, дом 23',
			'small_img' => '/img/shops/moscow_berlusconi_01.jpg',
			'img' => '/img/shops/moscow_berlusconi.jpg',
			'name' => 'САЛОН «БЕРЛУСКОНИ»',
			'address' => 'г. Москва, 5-ый Донской проезд, дом 23, ТД "Семь", 1 этаж',
			'metro' => 'м. Ленинский проспект',
			'working_time' => 'Ежедневно 10:00 - 19:30',
			'contacts' => 'Тел: +7(495) 795-71-50',
			'exposition' => 'Образцы матрасов 40х60. Работа по каталогу.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «БЕРЛУСКОНИ». Официальный дилер компании Magniflex. Заказывая продукцию Magniflex в салоне "BERLUSCONI", Вы можете быть уверенными в подлинности продукции. <br />Обратите внимание, непосредственно в салоне продукция Magniflex не представлена. Работа ведется по каталогу и образцам размером 40х60 см.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
	
		
		
		
		'lesnaia' => array(
			'position' => array('lat' => 59.981028, 'lng' =>  30.356435 ), 
			'marker_title' => 'г. САНКТ-ПЕТЕРБУРГ, Мебельный центр Аквилон ул. Новолитовская 15В эт-5. секция-164',
			'small_img' => '/img/shops/screenshot_5_(5).jpg',
			'name' => 'АКВИЛОН',
			'address' => 'ул. Новолитовская, дом 15В, 3 этаж, секция 105',
			'metro' => 'м. Лесная',
			'working_time' => 'Ежедневно с 10:00 до 20:00',
			'contacts' => 'Тел: +7 (921) 906-79-00, +7 (812) 670-84-82',
			'exposition' => '',
			'city' => 'spb',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'salon-green-street' => array(
			'position' => array('lat' => 46.939731, 'lng' =>  142.733734 ), 
			'marker_title' => 'САХАЛИНСКАЯ ОБЛАСТЬ, ЮЖНО-САХАЛИНСК, ЛЕНИНА, 321/1',
			'name' => 'ИНТЕРЬЕР САЛОН "GREEN STREET"',
			'address' => '693006, САХАЛИНСКАЯ ОБЛАСТЬ, ЮЖНО-САХАЛИНСК, ЛЕНИНА, 321/1',
			'metro' => '',
			'working_time' => 'Ежедневно 9:00 – 21:00',
			'contacts' => 'Тел: 8 424 227-72-50, 8 962 112-79-49',
			'exposition' => '',
			'city' => 'south-saxalinsk',
			'text' => 'ИП КИСЕЛЕВ',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'matras-i-ko' => array(
			'position' => array('lat' => 50.562919, 'lng' =>  36.572135 ),  
			'marker_title' => 'г. Белгород, ул. Щорса 45 Д',
			'small_img' => '/img/shops/unnamed.jpg',
			'name' => 'МАТРАС И КО',
			'address' => 'ул. Щорса 45 Д',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: (4722) 37-44-38, 8 951 156-35-18',
			'exposition' => 'На экспозиции: Merinos, Waterlattex, Pensiero 6, Naturalmente, Rest 9',
			'city' => 'belgorod',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'mebelniy-salon-lion' => array(
			'position' => array('lat' => 51.741119, 'lng' =>  36.197237 ), 
			'marker_title' => 'г. Курск, ул. Мирная, д. 11',
			'name' => 'МЕБЕЛЬНЫЙ САЛОН "LION"',
			'address' => 'г. Курск, ул. Мирная, д.11',
			'metro' => '',
			'working_time' => 'Пн-Пт 10:00 - 19:00<br>уббота до 17:00<br>воскресенье - выходной',
			'contacts' => 'Тел: 8 471 270-80-07',
			'exposition' => '',
			'city' => 'kursk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ooo-italmania' => array(
			'position' => array('lat' => 55.666774, 'lng' =>  37.551605), 
			'marker_title' => 'г. Москва, ул. Профсоюзная, д. 45, ТЦ «Царское село», 2 этаж',
			'small_img' => '/img/shops/XXL (14).jpg',
			'name' => 'ИТАЛМАНИЯ',
			'address' => 'г. Москва, ул. Профсоюзная, д. 45, ТЦ «Царское село», 2 этаж',
			'metro' => 'м. Новые Черемушки',
			'working_time' => 'Пн-сб: 10:00 - 20:00,Вс: 10:00 - 18:00',
			'contacts' => 'Тел: +7 (495) 718-73-88, +7 (495) 718-76-31',
			'exposition' => 'На экспозиции: Образцы 40х60.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «Италмания»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
	
		
		'zal-svoboda' => array(
			'position' => array('lat' => 55.807917, 'lng' =>  37.573442 ), 
			'marker_title' => 'г. Москва, ул. Тимирязевская, д.2/3, ТЦ Парк-11, 3 этаж',
			'small_img' => '/img/shops/XXL (15).jpg',
			'name' => 'САЛОН МЕБЕЛЬНОЙ ФАБРИКИ «ЗАЛ СВОБОДА»',
			'address' => 'г. Москва, ул. Тимирязевская, д.2/3, ТЦ "Парк-11", 3 этаж',
			'metro' => 'м. Дмитровская',
			'working_time' => 'Ежедневно 10:00 – 20:00',
			'contacts' => 'Тел: +7 (499) 130-06-68, Тел: +7 (925) 198-54-30',
			'exposition' => 'На экспозиции: Merinos 80x200',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ИП ДЕМИДОВ М.А.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'mebel-italii-arte' => array(
			'position' => array('lat' => 55.723608, 'lng' =>  37.673137 ), 
			'marker_title' => 'г. Москва, 1-я Дубровская ул, д. 13, 1 этаж',
			'small_img' => '/img/shops/a58b5032068561a3f8b17ba22d2476df.jpg',
			'name' => 'САЛОН «МЕБЕЛЬ ИТАЛИИ»',
			'address' => 'г. Москва, 1-я Дубровская ул, д.13, 1 этаж',
			'metro' => 'м. Дубровка',
			'working_time' => 'Ежедневно 10:00 – 19:30',
			'contacts' => 'Тел: +7 (495) 795-54-06, Тел: +7 (966) 144-29-60',
			'exposition' => 'На экспозиции: Stile 7 200x200, Waterlattex 180x200, Pensiero 8 90x200, naturalmente 90x200',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «АРТЭ.ИТ»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
	
		
		'salon-imperia-casa' => array(
			'position' => array('lat' => 55.705030, 'lng' =>  37.620997 ), 
			'marker_title' => 'г. Москва, ул.Большая Тульская, 46, 3-й этаж.',
			'name' => 'САЛОН IMPERIAL CASA',
			'address' => 'г. Москва, ул. Большая Тульская, 46, 3-й этаж.',
			'metro' => 'м. Киевская',
			'working_time' => 'Пн-Пт: 10:00 - 20:00',
			'working_time' => 'Сб,Вс: выходной',
			'contacts' => 'Тел: +7 (499) 243-60-00, Тел: +7 (916) 650-86-37',
			'exposition' => 'На экспозиции: Merinos 90х200, Waterlattex 90х200, образцы 40х60.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ooo-grande-mebel' => array(
			'position' => array('lat' => 55.639573, 'lng' =>  37.823967 ), 
			'marker_title' => 'г. Москва, ТЦ «Интерьер Плаза», 8 этаж, МКАД 16-ый км внешняя сторона. г. Дзержинский, ул. Энергетиков, д. 14А',
			'small_img' => '/img/shops/unnamed (3).jpg',
			'name' => 'САЛОН МЕБЕЛИ «ГРАНДЕ МЕБЕЛЬ»',
			'address' => 'МО, ТЦ «ИНТЕРЬЕР ПЛАЗА», МКАД 16-ый км внешняя сторона. г. Дзержинский, ул. Энергетиков, д. 14А, 8 этаж.',
			'metro' => 'м. Люблино',
			'working_time' => 'Ежедневно 10:00 - 21:00',
			'contacts' => 'Тел: +7 (495) 780-35-35 доб. 805',
			'exposition' => 'На экспозиции: Merinos 160x200, подушки в ассортименте.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «ГРАНДЕ МЕБЕЛЬ»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'mebel-ip-savenkova' => array(
			'position' => array('lat' => 55.741268, 'lng' =>  37.860663 ), 
			'marker_title' => 'г. Москва, ул. Новокосинская д. 23',
			'name' => 'МАГАЗИН «МЕБЕЛЬ»',
			'address' => 'г. Москва, ул. Новокосинская, д.23',
			'metro' => 'м. Новокосино',
			'working_time' => 'Пн-Пт: 10:00 - 20:00, Сб: 11:00 - 18:00, Вс: 11:00 - 16:00',
			'contacts' => 'Тел: +7 (495) 701-22-60',
			'exposition' => 'На экспозиции: образцы 40x60',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ИП САВЕНКОВА',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'invird-ooo-interas' => array(
			'position' => array('lat' => 55.677850, 'lng' =>  37.531469 ), 
			'marker_title' => 'г. Москва, Ленинский пр-кт 89/2, цокольный этаж',
			'small_img' => '/img/shops/XXL (9).jpg',
			'name' => 'МАГАЗИН «ИНВИРД»',
			'address' => 'г. Москва, Ленинский пр-кт 89/2, цокольный этаж',
			'metro' => 'м. Новые Черемушки',
			'working_time' => 'Пн-Пт: 10:00 - 20:00, Сб-Вс: 11:00 - 19:00',
			'contacts' => 'Тел: +7 (499) 132-03-44, +7 (495) 132-15-38',
			'exposition' => 'На экспозиции: Pensiero 7 80x200, Rest 10 80x200, New Comfort Plus 10 80x200, Merinos 80x200, Образцы 40х60.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «ИНТЕРАЗ»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'salon-ortisleep' => array(
			'position' => array('lat' => 55.670285, 'lng' =>  37.552499 ), 
			'marker_title' => 'г. Москва, ул. Профсоюзная, д. 56, 3-й этаж, линия 3Ж',
			'small_img' => '/img/shops/Без названия.jpg',
			'name' => 'САЛОН “ORTHOSLEEP”',
			'address' => 'г. Москва, ул. Профсоюзная, д.56, 3-й этаж, ТЦ «ЧЕРЕМУШКИ», линия 3Ж',
			'metro' => 'м. Новые Черемушки',
			'working_time' => 'Ежедневно 10:00 - 21:00',
			'contacts' => 'Тел: +7 (495) 558-61-63',
			'exposition' => 'На экспозиции: Pensiero 8, Rest 10, Comfort dual 10, подушки в ассортименте.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «ЕВРОПРОМ»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
	
		
		'mebel-italii-osipova' => array(
			'position' => array('lat' => 55.671682, 'lng' =>  37.584338 ),
			'marker_title' => 'г. Москва, Нахимовский проспект, д. 24, ЦДиИ «Экспострой», павильон 1, 28 стенд',
			'small_img' => '/img/shops/XXL (16).jpg',
			'name' => '«МЕБЕЛЬ ИТАЛИИ И ИСПАНИИ»',
			'address' => 'г. Москва Нахимовский проспект, д. 24, ЦДиИ «Экспострой», павильон 1, 28 стенд',
			'metro' => 'м. Профсоюзная',
			'contacts' => 'Тел: +7 (495) 803-41-70, +7 (495) 557-47-54,<br> +7 (910) 441-67-51',
			'exposition' => 'На экспозиции: Merinos 90x200, работа по каталогу.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ИП ОСИПОВА М.А.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'os-pasivnaia-terapia' => array(
			'position' => array('lat' => 55.720007, 'lng' =>  37.628014 ), 
			'marker_title' => 'г. Москва, ул. Павловская, владение №7, этаж 1',
			'name' => 'ОРТОПЕДИЧЕСКИЙ САЛОН «ПАССИВНАЯ ТЕРАПИЯ»',
			'address' => 'ул. Павловская, владение №7, этаж 1',
			'metro' => 'м. Тульская',
			'working_time' => 'Ежедневно: 10:30 – 20:00',
			'contacts' => 'Тел: +7 (495) 648-61-15, +7 (905) 777-01-96',
			'exposition' => 'На экспозиции: Merinos 80x190, подушки в ассортименте.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ИП ЛИТВИНОВ',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ooo-garda' => array(
			'position' => array('lat' => 55.616645, 'lng' =>  37.608029 ), 
			'marker_title' => 'г. Москва, МТК «Армада», ул. Кировоградская, д 11, стр. 1, 4 этаж',
			'name' => 'САЛОН «МЕБЕЛЬ РУМЫНИИ»',
			'address' => 'г. Москва, ул. Кировоградская, д 11, стр. 1, МТК "АРМАДА", 4 этаж',
			'metro' => 'м. Пражская',
			'working_time' => 'Ежедневно: 10:00 – 20:00',
			'contacts' => 'Тел: +7 (925) 507-69-05',
			'exposition' => 'На экспозиции: Merinos 160x200, Naturalmente 160x200',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «ГАРДА»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'mebel-ip-akimova' => array(
			'position' => array('lat' => 55.739138, 'lng' =>  37.643875 ), 
			'marker_title' => 'г. Москва, ТЦ «Мебель России», ул. Большая Семёновская, д. 10 центральный вход, 1 этаж, павильон Д-1-17',
			'name' => '«МЕБЕЛЬ ИЗ МАССИВА»',
			'address' => 'г. Москва, ул. Большая Семёновская, д. 10, ТЦ «МЕБЕЛЬ РОССИИ», центральный вход, 1 этаж, павильон Д-1-17',
			'metro' => 'м. Электрозаводская',
			'working_time' => 'Ежедневно 10:00 - 19:30',
			'contacts' => 'Тел: +7 (495) 510-95-46, +7 (495) 727-05-90',
			'exposition' => 'На экспозиции: Merinos 80х200, Stile 7 80x200',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ИП АКИМОВА Е.И.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ooo-mitos' => array(
			'position' => array('lat' => 55.787020, 'lng' =>  37.594425 ), 
			'marker_title' => 'г. Москва, ул. Новослободская, д. 50/1, строение 2',
			'name' => 'САЛОН МЕБЕЛИ "МИТОС"',
			'address' => 'г. Москва, ул. Новослободская, д.50/1, строение 2, 1 этаж',
			'metro' => 'м. Новослободская',
			'working_time' => 'Пн.-Пт: 10-00 - 20-00, Сб.-Вс: 11:00 - 19:00',
			'contacts' => 'Тел: +7 (495) 937-66-12, +7 (499) 972-05-96',
			'exposition' => 'На экспозиции: FreshGel 10 90*200, Rest 10 90*200',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО МИТО)',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
	
	
	
		
	
		
	
		
		'salon-meb-evropi' => array(
			'position' => array('lat' => 54.981860, 'lng' =>  73.325741 ),
			'marker_title' => '644123, Россия, г. Омск
			ул.Конева, д.14',
			'small_img' => '/img/shops/XXL (22).jpg',
			'name' => 'САЛОН "МЕБЕЛЬ ЕВРОПЫ"',
			'address' => '644123, Россия, г.Омск
			ул.Конева, д.14',
			'metro' => '',
			'working_time' => 'время работы: с 11.00 до 19.00<br>воскресенье: с 12.00 до 17.00',
			'contacts' => 'тел/факс (3812) 707-505,  +7-913-601-80-09',
			'exposition' => 'Экспозиция: Stretching 9 40x60, Exchange Memoform Dual 40x60, Naturalmente 40x60, Merinos 40x60, Stile 6 40x60, Pensiero 7 40x60',
			'city' => 'omsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		'salon-flatdecor' => array(
			'position' => array('lat' => 54.975331, 'lng' =>  73.386396 ),
			'marker_title' => 'г. Омск, ул. Пушкина, 72',
			'small_img' => '',
			'name' => ' Интерьерный салон Flatdecor',
			'address' => 'г. Омск, ул. Пушкина, 72',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Тел: +7 (381) 299-86-56',
			'exposition' => 'Экспозиция: Stile 6  40x60, Merinos 40x60, Pensiero 8 40x60, Naturalmente 40x60, Comfort plus 10 40x60, Stretching  9  40x60',
			'city' => 'omsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		'galerydesign' => array(
			'position' => array('lat' => 55.017483, 'lng' =>  82.945494 ),  
			'marker_title' => '630008 г. Новосибирск, ул. Кирова, д. 27',
			'small_img' => '',
			'name' => '',
			'address' => '630008 г. Новосибирск, ул. Кирова, д. 27',
			'metro' => '',
			'working_time' => '',
			'contacts' => 'Галерея дизайна Тел: +7 (383) 362-28-30',
			'exposition' => 'Экспозиция: Merinos 40x60, Pensiero 8 40x60, Naturalmente 40x60, Freshgel  Dual 10  40x60, Stretching  9  40x60, Memorie  8  40x60',
			'city' => 'novosibirsk',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ip-pavlenko' => array(
			'position' => array('lat' => 55.810997, 'lng' =>  37.514627 ), 
			'marker_title' => 'г.Москва, ул.Балтийская, д. 15',
			'name' => 'ПОСТЕЛЬ БУТИК',
			'address' => 'г. Москва, ул. Балтийская, д. 15',
			'metro' => '',
			'working_time' => 'Пн-Пт 10:00 – 19:00, сб-вс 10:00 – 17:00.',
			'contacts' => 'Тел: 8 495 215-15-61 (Москва), 8 800 555-29-51 (Бесплатно по России)',
			'exposition' => 'Работа только по каталогу, экспозиция отсутствует!',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ИП ПАВЛЕНКО',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'mezh6-4-1' => array(
			'position' => array('lat' => 55.8172731, 'lng' =>  37.3855734 ),
			'marker_title' => 'г. Красногорск, ул. Международная, д. 6, корпус 4',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'mezh6-4-2' => array(
			'position' => array('lat' => 55.8171978, 'lng' =>  37.3856768 ),
			'marker_title' => 'г. Красногорск, ул. Международная, д. 6, корпус 4',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
	
		
		
		
		'bt46' => array(
			'position' => array('lat' => 55.70502, 'lng' =>  37.6188053 ),
			'marker_title' => 'г. Москва, ул. Большая Тульская, 46, 3-й этаж.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'salon-lodi' => array(
			'position' => array('lat' => 55.763865, 'lng' =>  37.844880 ), 
			'marker_title' => 'МО, г. Реутов, 2 км МКАД, д. 2',
			'name' => 'САЛОН «LODI»',
			'address' => 'МО, г. Реутов, 2 км МКАД, д.2. Торговый комплекс "ШОКОЛАД", 3-ий этаж.',
			'metro' => 'м. Новогиреево',
			'working_time' => 'Ежедневно 10:00 - 22:00',
			'contacts' => 'Тел: +7 (499) 755-59-54, +7 (925) 435-47-00',
			'exposition' => 'На экспозиции: Merinos 90x200, Rest 10 90x200, Naturalmente 90x200, New Comfort Plus 10 90x200, Pensiero 7 90x200, Stile 160x200.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'salon-mebeli-farafonova' => array(
			'position' => array('lat' => 55.749489, 'lng' =>  37.864998 ), 
			'marker_title' => 'г. Реутов, Юбилейный проспект, д. 30/2, ТЦ Студия Интерьера.',
			'name' => '«САЛОН МЕБЕЛИ РОССИИ»',
			'address' => 'г. Реутов, Юбилейный проспект, д.30/2, ТЦ Студия Интерьера.',
			'metro' => 'м. Новокосино',
			'working_time' => 'Ежедневно 10:00 - 22:00',
			'contacts' => 'Тел: +7 (985) 766-50-16',
			'exposition' => 'На экспозиции: Merinos 120x190',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ИП ФАРАФОНОВА И.В.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		

		
		'balt15' => array(
			'position' => array('lat' => 55.81099, 'lng' =>  37.5124393 ),
			'marker_title' => 'г. Москва, ул. Балтийская, д. 15',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'salon-matras-ry' => array(
			'position' => array('lat' => 55.613624, 'lng' =>  37.717629  ), 
			'marker_title' => 'г. Москва, Огородный проезд, дом 10, ТЦ "Зеленый".',
			'small_img' => '/img/shops/XXL (19).jpg',
			'name' => 'САЛОН МАТРАС.РУ',
			'address' => 'г. Москва, Огородный проезд, дом 10, ТЦ "Зеленый".',
			'metro' => 'м. Бутырская.',
			'working_time' => 'Ежедневно с 10:00 - 22:00.',
			'contacts' => 'Тел: +7 (495) 127-71-26',
			'exposition' => 'На экспозиции образцы матрасов 40х60, работа по каталогам.',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'ooo-tesovo-letti' => array(
			'position' => array('lat' => 55.607608, 'lng' =>  37.7137324 ),
			'marker_title' => 'г. Москва, Каширское шоссе, д. 61,корп. 4, стр. 1, этаж 1',
			'small_img' => '/img/shops/XXL (20).jpg',
			'name' => '«ТЕСОРО ЛЕТТИ»',
			'address' => 'г. Москва, Каширское шоссе, д. 61,корп. 4, стр. 1, этаж 1 (около эскалатора)',
			'metro' => 'м. Домодедовская (последний вагон из центра выход 5)',
			'working_time' => 'Ежедневно с 10:00 до 21:00',
			'contacts' => 'Тел. +7(966) 383-58-58, +7 (996) 337-80-02',
			'exposition' => 'На экспозиции: Merinos 90x200, Stile 6 90x200',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ООО «ТЕСОРО ЛЕТТИ»',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
		
		'canti-ip-kukanov' => array(
			'position' => array('lat' => 55.709861, 'lng' =>  37.654459 ), 
			'marker_title' => 'г. Москва, ул. Ленинская Слобода, д. 26, этаж 1, В138,1',
			'small_img' => '/img/shops/XXL (21).jpg',
			'name' => 'Салон CANTI',
			'address' => 'г. Москва, ул. Ленинская Слобода, д. 26, этаж 1, В138,1',
			'metro' => 'м. Автозаводская',
			'working_time' => 'Часы работы: жедневно с 10:00 до 21:00',
			'contacts' => 'Тел. +7 (985) 149-97-79',
			'exposition' => 'На экспозиции: Merinos 90x200, Stile 7 90x200, пледы в ассортименте',
			'city' => 'moscow', 'city2' => 'russia-moscow-obl',
			'text' => 'ИП Куканов Е.В.',
			'title' => '',
			'description' => '',
			'keywords' => '',
		),
	);
	
	
	//штампуем мета
	foreach($cities as &$city_el){
		if(!$city_el['title']) $city_el['title'] = $city_el['name'].'. Официальные дилеры Magniflex';
		if(!$city_el['description']) $city_el['description'] = $city_el['name'].'. Официальные дилеры Magniflex в регионе, их контактные данные. Где приобрести матрасы и подушки Магнифлекс в '.$city_el['name'];
		if(!$city_el['keywords']) $city_el['keywords'] = 'дилер магнифлекс '.$city_el['name'].', где купить magniflex в '.$city_el['name'];
	}
	foreach($shops as &$shop_el){
		if(!$shop_el['title']) $shop_el['title'] = $shop_el['name'].'. Официальный дилер Magniflex';
		if(!$shop_el['description']) $shop_el['description'] = $shop_el['name'].'. Адрес, телефон, схема проезда, часы работы, экспозиция. Официальный дилер Magniflex.';
		if(!$shop_el['keywords']) $shop_el['keywords'] = 'дилер магнифлекс, дилер magniflex, '.$shop_el['name'];
		
	}
	unset($city_el, $shop_el);
?>