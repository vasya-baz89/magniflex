<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}


$get_breadcrumbs_product = function($item, $products, $categories){
	$breadcrumbs_ret = array(array('Марка №1 в Италии','/'));

	$filters_mattresses = array(
		array('zhestkie-mattresses', 'Жесткие матрасы', '/catalog/mattresses/zhestkie-mattresses/'),
		array('dual-reguliruemie-mattresses', 'Матрасы с регулируемой жесткостью', '/catalog/mattresses/dual-reguliruemie-mattresses/'),
		array('soft_mattresses', 'Мягкие матрасы', '/catalog/mattresses/soft_mattresses/'),
	);
	$filters_pillows = array(
		array('memory-foam-pillows', 'Подушки с эффектом памяти', '/catalog/pillows/memory-foam-pillows/'),
		array('baby-pillows', 'Детские подушки', '/catalog/pillows/baby-pillows/'),
	);

	foreach($products as $el){			
		if($item == $el['address']){				
			if($el['parent_address2'] == 'mattresses'){
				array_push($breadcrumbs_ret, array('Ортопедические матрасы', '/catalog/mattresses/'));
				if (strpos($el['parent_address'], 'elit') !== false) {
					array_push($breadcrumbs_ret, array('Элитные матрасы', '/catalog/elitnye-matrasy/'));
				}
			} 		
			if($el['parent_address2'] == 'pillows'){
				array_push($breadcrumbs_ret, array('Ортопедические подушки', '/catalog/pillows/'));
				foreach($filters_pillows as $additional_bread){
					if(in_array($additional_bread[0], $el['other_categories'])){
						array_push($breadcrumbs_ret, array($additional_bread[1], $additional_bread[2]));
					}
				}
				foreach($el['other_categories'] as $category){
					if (strpos($category, 'collectio') !== false) {
						foreach($categories as $cat){
							if($cat['address'] == $category ){
								array_push($breadcrumbs_ret, array($cat['name'], '/catalog/pillows/'.$cat['address'] ));
							}
						}
					}
				}
				
			}	
			if($el['parent_address'] == 'ortopedicheskie-reshetky'){
				array_push($breadcrumbs_ret, array('Ортопедические основания', '/catalog/bases/'));
			}
			foreach($categories as $cat){
				if($cat['address'] == $el['parent_address'] && $el['parent_address'] != 'mattresses' && $el['parent_address'] != 'pillows'){
					$link = '/catalog/';
					if($cat['parent_address'] == ''){
						$link .= $cat['address'];
					} else {
						$link .= $cat['parent_address'];
						$link .= '/';
						$link .= $cat['address'];
					}
					array_push($breadcrumbs_ret, array($cat['name'], $link));
					break;
				}
			}
			// if($el['parent_address2'] == 'mattresses'){
			// 	foreach($filters_mattresses as $additional_bread){
			// 		if(in_array($additional_bread[0], $el['other_categories'])){
			// 			array_push($breadcrumbs_ret, array($additional_bread[1], $additional_bread[2]));
			// 		}
			// 	}
			// } 	
			array_push($breadcrumbs_ret, array($el['name'], '/catalog/' . $el['parent_address'] . '/' . $el['address']));	
			break;		
		}	
	}
	return $breadcrumbs_ret;
};





$products = array(
	/* Ортопедические матрасы */
	array(
		'address' => 'merinos',
		'parent_address' => 'mattresses',
		'parent_address2' => 'mattresses',
		'other_categories' => array('black-friday', 'vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses','zhestkie-mattresses-2', '60x120','height-20', '65x125','70x140' ,'70x160', '70x190', '75x190', '80x160', '80x180', '80x190', '80x195', '80x200', '85x190', '85x200', '90x180', '90x190', '90x195', '90x200', '95x190', '95x195', '100x190', '100x200', '110x190', '110x195', '110x200', '120x190', '120x195', '120x200', '130x190', '130x200', '135x190', '135x200', '140x190', '140x195', '140x200', '150x190', '150x200', '160x190', '160x195', '160x200', '160x205', '160x210', '165x190', '165x195', '165x200', '170x190', '170x200', '180x190', '180x195', '180x200', '180x205', '180x210', '180x220', '190x200', '200x200','ortoped','vacu','podrostkovue-matrasy'),
		'name' => 'Ортопедический матрас Merino',
		'title' => 'Матрас Merino, Merinos | Официальный сайт Magniflex',
		'description' => 'Описание, фотографии, состав ортопедического матраса Magniflex Merino (прежнее название Merinos). Одна из самых популярных моделей в России. Потрясающие свойства, настоящая шерсть мериноса.',
		'keywords' => 'magniflex merino, magniflex merinos, магнифлекс мерино, меринос, купить magniflex merino, magniflex merinos отзывы, ортопедический матрас',
		'span_title' => 'Прежние названия Merinos, Model-S',
		'new_desc' => 'Базовая модель, двусторонний (лето - хлопок, зима - шерсть мериноса), наполнитель: Elioform',
		'small_img' => '/img/product/very_small/merino2.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/Merino(Merinos).jpg',
		'img_alt' => 'Ортопедические матрасы Merino (Merinos)',
		'img_preview' => array('/img/Merino-4.jpg', '/img/Merino-8.jpg', '/img/Merino-6.jpg'),
		'img_carousel' => array('/img/product/big/Merino(Merinos).jpg','/img/Merino-4.jpg', '/img/Merino-8.jpg', '/img/Merino-6.jpg'),
		'video_html' => array('/img/121212.jpg', '/data/video/15 Merino_1_1.mp4'),	
		'attr_cover_product' => '',
		'attr_padding_product' => 'Ортопедический матрас Merino Magniflex состоит исключительно из природных, экологически чистых материалов, летняя сторона - 100% натуральный хлопок; зимняя сторона - 100% натуральная шерсть тонкорунного мериноса ',
		'attr_comfort_product' => '',
		'image_composition' => '/img/product/merino_matress_layers2.jpg',
		'block_attr_collections' => '',
		'block_attr_materials' => 'Elioform, hypoallergenic fiber',
		'block_attr_coating' => 'двухсторонний, несъемный',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, Терморегулирующий, Дополнительный комфорт, Воздухопроницаемый',
		'block_attr_comfort_level' => 'Средний',
		'block_attr_height' => '14 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '10 лет',
		'block_attr_extra' => 'Двухсторонний чехол ',		
		'banner_category' => '/img/black-friday-icon.png',
		'banner_product' => '/img/Layer 1.png',
		'attr' => '
		<style>
		#product + .sf_info .coin-slider {
			margin: 0 auto;
			width: 48%;
		}
		@media (max-width: 1100px) {
			#product + .sf_info .coin-slider {
				margin: 0 auto;
				width: 100%;
				margin-bottom:20px;
			}
		}
		</style>
			
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  16 см</li><li><b>Степень жесткости</b>: достаточно жесткий</li>
			
			
			<li><b>Срок службы</b>: не менее 10 лет</li>
			</ul>
			
		',
		'prod_compose' => array(
			array('Чехол. Зимняя сторона', 'Чтобы зимой было тепло, одна сторона матраса изготавливается из шерсти тонкорунного мериноса.'),
			array('Наполнитель', 'Пена Elioform (14 см) — материал высокой плотности, оказывающий качественную и упругую поддержку спины. Выдерживает нагрузку до 160 кг на спальное место. Мелкопористая структура обеспечивает высокий уровень циркуляции воздуха, благодаря чему матрас становится «дышащим», гарантирует свежесть и комфортность сна.'),
			array('Чехол. Летняя сторона', 'Изготавливается из 100% хлопка двойного кручения. Материал натуральный, имеет высокий уровень износостойкости.')
		),
		'attr_cover_product_title' => 'Зимняя сторона',
		'attr_cover_product' => 'Чтобы зимой было тепло одна сторона матраса изготавливается из шерсти тонкорунного мериноса.',
		'attr_padding_product_title' => 'Наполнитель',
		'attr_padding_product' => 'Пена Elioform —  материал высокой плотности,  оказывающий качественную и упругую поддержку спины. Выдерживает нагрузку до 160 кг на спальное место. Мелкопористая структура обеспечивает высокий уровень циркуляции воздуха, благодаря чему матрас становится «дышащим» и гарантирует свежесть и комфортность сна. ',
		'attr_comfort_product_title' => 'Летняя сторона',
		'attr_comfort_product' => 'Изготавливается  из 100% хлопка двойного кручения. Материал натуральный, имеет высокий уровень износостойкости. ',
		'attr_cat_product1' => '16 см',
		'attr_cat_product2' => 'Несъемный, шерсть мериноса/хлопок',
		'attr_cat_product3' => 'Жесткий',
		'desc' => '
				<div class="common_block_common fixcommon-block">
						<div class="half-width">
						<h3>Ортопедический матрас Merino</h3>
						<strong><i>Легендарная базовая модель</i></strong>
							<p>
								Модель Merino (прежние названия "Magniflex Merinos", "Model S") – легендарный итальянский матрас фабрики Magniflex, созданный более 20 лет назад. Модель завоевала большую популярность и поставляется до сих пор практически в неизменном виде, лишь с небольшими технологическими улучшениями. Ввиду своей популярности имеет самый большой размерный ряд и наличие на складе. Модель рекомендована к использованию ЦИТО (Центральный Институт Травматологии и Ортопедии имени Приорова), а также имеет удостоверение Минздрава России.
							</p>
							<p>
							    Дизайн зимней стороны матраса с шерстью мериноса может отличаться от представленных фотографий рисунком прострочки.
							</p>
						</div>
			        <div class="coin-slider">
				    <img alt="матрас Magniflex merinos, magniflex merino, model s" src="/img/products/mattresses/matress_merinos.jpg">
					</div>
				</div>
			<br /><br />
			
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Комфорт в любое время года</h3>
            	<img alt="шерсть мериноса" src="/img/product/merinos-kozel.jpg">
					<p class="text-jus">
					Матрас Magniflex Merino (Merinos, Model S) оснащается двусторонним несъемным чехлом с «зимней» и «летней» сторонами. «Летняя» поверхность матраса, а также боковины выполнены из 100% натурального хлопка двойного кручения. Материал натуральный, имеет высокий уровень износостойкости за счет своей плотности. «Зимняя» сторона выполнена из натуральной шерсти тонкорунного мериноса. Материал гипоаллергенный: не вызывает зуд кожи и приятен тактильно. Шерсть создает терапевтический эффект, благодаря тепловому барьеру между кожей и окружающей средой.
					</p>
				<h3>Вакуумная технология, рулонная упаковка</h3>	
					<p class="text-jus">
					Матрас поставляется в скрученном по специальной технологии рулоне. Именно компания Магнифлекс изобрела и запатентовала технологию "Вакуумной упаковки матрасов". Благодаря ей, матрасы сохраняют стерильную чистоту, дается 100% гарантия того, что матрас новый и никогда не был в употреблении, снижается выброс загрязняющих веществ CO2 в атмосферу (13% на м³). 
                </p>
                <img alt="открыть матрас magniflex" src="/img/products/mattresses/sottovuoto.gif">
				</div>
				<div class="half-width fixcommon-block">
				<h3>Удобство прежде всего</h3>
				    <p class="text-jus">
					Для внутреннего слоя Magniflex Merino (Merinos) используется пена Elioform Magniflex, обеспечивающая хорошую точечную эластичность матраса. Благодаря этому матрас прекрасно поддерживает спину и создает комфортные условия сна. Elioform  помогает человеку принять правильное положение для отдыха, рекомендованное врачами-ортопедами, и не жертвовать при этом удобством. Спать более качественно и высыпаться быстрее – это реально!<br /><br />
            		Elioform – один из самых жестких видов пен Magniflex, имеет высокую плотность и обеспечивает качественную и упругую поддержку спины. Выдерживает нагрузку до 160 кг на спальное место. Мелкопористая структура Elioform обеспечивает хороший уровень циркуляции воздуха, благодаря чему матрас становится «дышащим» и гарантирует свежесть и комфортность сна. 
            		</p>
				<h3>Долговечность и износостойкость</h3>
					<p class="text-jus">
					Заводской заявленный срок службы модели Magniflex Merino (Merinos) не менее десяти лет. Матрас поставляется в Россию очень давно, получены отзывы успешной эксплуатации матрасов более 15 лет! Кроме того, благодаря своей конструкции (в частности, отсутствию пружинного блока) матрас совершенно нечувствителен к вертикальным нагрузкам. На матрасе можно прыгать и играть детям, и он от этого не деформируется. Высокий уровень комфортности Magniflex Merino  вкупе с отличными ортопедическими свойствами и недорогой ценой сделали эту модель фаворитом у покупателей во всем мире.  
					<img class="two-width" src="/img/products/mattresses/rim_kolizei.jpg" alt="Рим вечный город">
					</p>
				</div>
			</div>
			
			
		',
		'recommend' => '
			<div class="hnb_contmy">
				<div class="hnb_contcenter">
					<p>
						<img width="280" src="/img/rekomendovano-cito.jpg" height="196" title="Матрас рекомендован ЦИТО РФ">
						<br />
					Рекомендован Центральным Институтом <br />
						Травматологии и Ортопедии РФ
					</p>
					<p>
						Ортопедические матрасы Magniflex Merino (Merinos) рекомендованы Центральным Институтом Травматологии и Ортопедии Российской Федерации им. Н.Н. Приорова в профилактических целях так и для лечения болезней опорно-двигательного аппарата, коррекции при повреждении позвоночника, вызванных травмами и хроническими заболеваниями (в том числе остеохондрозом, спондилезом). Заключение выдал директор ЦИТО, член кор. РАМН, профессор Ю.Г. Шапошников. <br />
							<br />
							Матрас универсальный, идеально подходит большинству людей. Особенно рекомендуется к использованию:
						<ul>
							<li>Подросткам<br />
							В период развития костно-мышечной ткани и формирования позвоночного столба необходимо уделять особое внимание на правильное положение тела во время ночного сна<br />
							</li>
							<li>Спортсменам<br />
							После интенсивных и длительных нагрузок необходим хороший отдых на поверхности, максимально расслабляющей мышцы позвоночника, восстанавливая позвонки в естественное положение.<br />
							</li>
							<li>Людям среднего возраста<br />
							Для полноценного, здорового сна и профилактиктических целей.<br />
							</li>
							<li>Пожилым людям<br />
							Матрас позволяет равномерно распределить нагрузку на все суставы тела, снижает болезненные ощущения, оказывает лечебные действия на позвоночник, суставы и мыщцы человека. </li>
						</ul>
					</p>
				</div>
			</div>
		',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contcenter">
					<p>
						<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
						<br>
						Сертифицировано в 96-ти странах мира!
					</p>
					<p>
						В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
						Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 96-ти странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
						<br><br>
					</p>
				</div>
			</div>
		',
		'review' => '
			<div class="reviews">
			<h3> Отзывы покупателей</h3>
			<p><b>Катя</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span>
			<br><i>"Купили «Мерино» для себя, пользуемся правда пока не так долго – два года, но пока очень довольны. Не зря все-таки этот матрас рекомендуют, как ортопедический. Теперь вот собираемся такой же и ребенку приобрести."</i></p>
			<p><b>Константин</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Когда задумался о покупке ортопедического матраса, сперва хотел взять пружинный – казалось, что это самый лучший вариант. Но в итоге продавец переубедил. Я выбрал «Мерино» и не пожалел. Действительно ОЧЕНЬ удобно спать и зимой и летом причем. И жена подтвердит. К тому же не нужно гонять детей с кровати, а они у нас любят на ней попрыгать-побеситься.))) Идилия, в общем.)"</i></p>
			<p><b>Зоя</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Замечательный ортопедический матрас!!! Всем его рекомендуем! спим с мужем на этом матрасе уже 6-й год, а матрас до сих пор как новенький!  даже ребенок любит спать на нем! матрас в меру жесткий и в меру мягкий. покупайте, не пожалеете…"</i></p>
			<p><b>Маша</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Матрас очень качественный, обратите внимание, что довольно таки Жесткий Подойдет в первую очередь детям, подросткам и молодым людям - для них просто супер будет!" </i></p>
			<p><b>Мария</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Матрас по нраву, недорого и вроде качество хорошее."</i></p>
			<p><b>Макар</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Матрасец основательный такой, порой чувствую себя как король на перине, хоть и довольно жесткой :)))"</i></p>
			<p><b>Вероника</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Выбирая матрас, купился на производителя. Думаю, не будут же в Италии плохое качество нам сувать, да и цена на итальянский товар порадовала очень. Рискнул заказать. Матрас действительно хорош, только с высотой чуть не рассчитал."</i></p>
			<p><b>Люба</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Любо братцы! Обалденный матрас!"</i></p>
			<p><b>Кристина</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Купили матрас с женой себе на годовщину свадьбы. Уже близится вторая годовщина, а матрас как новенький!..." </i></p>
			<p><b>Наташа</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Никогда бы не стала покупать ничего в интернет-магазине, если бы не подруга, поддалась ее влиянию, хотя мне не нравится кота в мешке покупать. Заказала, привезли вроде вовремя и бесплатно. Матрас да матрас, что в нем такого?! Преимущество, конечно, в цене, в магазинах дороже присматривала."
			</i> </p>
			<p><b>Наташа</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Наконец-то нашла подходящий, удобный, замечательный матрас!!! У меня грыжа пояснично-крестцового отдела… какие матрасы раньше только не пробовала!!! И дорогущие, и на заказ делали!!! - он превратился просто в кошмар!!! Когда покупали новую спальню, продавец предложил нам купить матрас Magniflex, я согласилась без особого энтузиазма… Оказалось, не зря. Удобнее матраса я не встречала!!! за ночь спина не устает!!! Утром встаю отдохнувшая! Следующий матрас - только  Magniflex!"</i></p>
			<p><b>Полина</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Покупая вещи, доверяю известным брендам! Из матрасов это исключительно магнифлекс!"</i></p>
			<p><b>Кристина</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Качество матраса стоит своих денег. Матрас доставили на следующий день после заказа."</i></p>
			<p><b>Маша</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Мне матрасик понравился! Удобный и комфортный!!!"</i></p>
			<p><b>Даша</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Давно хотела заказать именно магнифлекс меринос - все таки делают в Италии, а это уже что-то значит ))) В результате взяли два таких матраса - домой и на дачу."</i></p>
			<p><b>Марина</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"… Магнифлекс Меринос - самый оптимальный, тем более, что аккуратно сделан!"</i></p>
			<p><b>Виктория</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"Второй день хожу и радуюсь на наш новый матрас! купили Magniflex Merinos жесткий! не пожелели ни на минуту! сделан качественно, все хорошо прошито. неприятных запахов нет. в принципе он уже через 3-4 часа набирает форму и достаточную жесткость чтобы на нем лежать. зимняя сторона порадовала, посмотрим зимой что она дает. В общем доволен. Выбирать пришлось из более чем 5ти вариантов. рад что не ошибся"</i><br><br>
			<p><b>Полина</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span><br><i>"…По нашей многолетней статистике, эти матрасы без проблем служат по 10-12 лет. Матрас действительно хороший."</i></p>
			</div>
		',
		'sizes' => array(
			//array('60x120 (не в рулоне, новый)',9000.00),
array('60x120',11200.00),
array('65x125',12800.00),
array('70x140',15600.00),
array('70x160',17600.00),
array('70x190',20800.00),
array('75x190',22300.00),
array('80x160',20000.00),
array('80x180',22400.00),
array('80x190',23700.00),
array('80x195',24400.00),
array('80x200',25200.00),
array('85x190',25300.00),
array('85x200',26800.00),
array('90x180',25300.00),
array('90x190',26900.00),
array('90x195',27600.00),
array('90x200',28000.00),
array('95x190',28000.00),
array('95x195',28800.00),
array('100x190',29600.00),
array('100x200',31200.00),
array('110x190',32700.00),
array('110x195',33500.00),
array('110x200',34300.00),
array('120x190',35600.00),
array('120x195',36500.00),
array('120x200',37300.00),
array('130x190',38400.00),
array('130x200',40500.00),
array('135x190',40000.00),
array('135x200',42100.00),
array('140x190',41500.00),
array('140x195',42400.00),
array('140x200',43700.00),
array('150x190',44400.00),
array('150x200',46800.00),
array('160x190',47200.00),
array('160x195',48500.00),
array('160x200',50000.00),
array('160x205',51100.00),
array('160x210',52400.00),
array('165x190',48800.00),
array('165x195',50100.00),
array('165x200',51200.00),
array('170x190',50300.00),
array('170x200',52800.00),
array('180x190',53300.00),
array('180x195',54800.00),
array('180x200',55900.00),
array('180x205',57300.00),
array('180x210',58900.00),
array('180x220',61500.00),
array('190x200',59100.00),
array('200x200',62300.00),

		),
		'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.01),


		'yml_desc' => '
			Матрас практичный, износостойкий (срок реальной эксплуатации превышает 12 лет) изготавливается из натуральных компонентов (в том числе используется натуральный латекс, прошедший специальную обработку) на уровне самой современной технологии. В разработке принимали участие ведущие итальянские врачи-ортопеды совместно со специалистами лаборатории Magniflex. Модель создавалась для тех, кому важен максимальный ортопедический эффект. Уровень комфорта: достаточно Жесткий Срок службы: не менее 10 лет. вакуумная упаковка. Летняя сторона - натуральный хлопок, зимняя - шерсть мериноса
		',
		'yml_torgmail' => true,
	),
	array(
		'address' => 'MERINO-BAMBOO',
		'parent_address' => 'snyatie-s-proizvodstva',
		'legend' => 'mattresses',
		'name' => 'Merino Bamboo (снята с производства)',
		'title' => 'Матрасы Bamboo Merino | Официальный сайт Magniflex',
		'description' => 'Предлагаем матрас Matriflex Merino Bamboo. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, bamboo, magniflex, merino',
		'small_img' => '/img/product/very_small/Bamboo.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/Bamboo.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'attr' => '
			<!--<a href="/skidki-magniflex/skidka-15-legendarnye-matrasy/"><div class="hnb_action15">АКЦИЯ! Только в сентябре - <b>15% СКИДКА</b> на этот матрас!</div></a>-->
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  17 см</li><li><b>Степень жесткости</b>: жесткий</li>
			
			
			<li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
			
		',		
		'attr_cat_product1' => '17 см',
		'attr_cat_product2' => 'Несъемный, шерсть мериноса/хлопок',
		'attr_cat_product3' => 'Жесткий',
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contcenter">
			<p>
			Magniflex Merino BAMBOO - ортопедический матрас повышенной эластичности с двухсторонним покрытием "зима-лето", произведенный в Италии.
			<br /><br />
			<img  src="/img/magniflex-merino-bamboo-01.jpg" alt="Ортопедический итальянский матрас Magniflex Merino Bamboo" style="width: 640 px;">
			<br /><br />
			Особенностью этой модели является наличие в тканях волокон натурального бамбука. Они придают матрасу потрясающие антибактериальные свойства, усиливают антиаллергенный эффект, останавливают рост бактерий, позволяют избавиться от токсинов, напитать и восстановить клетки кожи, усилить метаболизм, создать неповторимую микрофлору для крепкого и здорового сна. Благодаря особому переплетению волокон бамбука матрас обладает "дышащими свойствами": пропускает воздух сквозь себя, легко выводит влагу и запахи, обеспечивая высокий уровень гигиены, способен сохранить прохладу в жаркое время года, а вещество пектин, входящее в состав бамбука, восстанавливает и питает клетки кожи. Мягкость поверхности матраса Merino Bamboo в контакте с телом придает свежее и нежное прикосновение, а рифленая поверхность обеспечивает дополнительный массаж, усиливая кровообращение.
			<br /><br />
			В основе ортопедического матраса Merino Bamboo используется экологичный материал, созданный из натурального латекса и природных компонентов - Elioform. Этот материал благодаря своей уникальной структуре позволяет усилить эффект выравнивания позвонков, равномерно распределить нагрузку на все суставы тела, придает матрасу высшую степень эластичной ортопедичности.
			<br /><br />
			Матрас Merino Bamboo имеет "летнюю" и "зимнюю" стороны.
			<br /><br />
			<img  src="/img/magniflex-merino-bamboo-02.jpg" alt="Ортопедический итальянский матрас Magniflex Merino Bamboo - чехол" style="width: 640 px;">
			<br />
			<b>Летняя сторона - натуральный итальянский хлопок, с волокнами бамбука. Рифленая поверхность.</b><br /><br />
			Летняя сторона - биэластичная хлопковая терморегулирующая ткань с добавлением натуральных волокон бамбука, а зимняя изготовлена из шерсти тонкорунного мериноса.
			<br /><br />
			<img  src="/img/merino-wool.jpg" alt="Magniflex Merino Bamboo - зимняя сторона - шерсть мериноса" style="width: 640 px;">
			<br />
			<b>Зимняя сторона - шерсть тонкорунного мериноса. Согревает холодными ночами.</b><br /><br />
			Шерстяное покрытие действует на рецепторы кожи, обеспечивая рефлекторно-анальгизирующее действие при болях, вызванных миозитом, радикулитом, невралгиями. Переворачивая матрас в зависимости от климатических (и даже погодных) изменений, Вы добьетесь максимального комфорта во время сна.
			 <br /><br />
			Все  матрасы Merino Bamboo  обработаны специальным средством, поэтому они абсолютно антиаллергенны. В составе матраса нет металлических деталей,  поэтому он не оказывает на организм магнитного или электростатического воздействия.
			<br /><br />
			Предпродажная вакуумная упаковка матраса Merino (матрас спрессован в рулон) позволяет покупателю самостоятельно довезти его до места назначения даже на общественном транспорте, а самые большие размеры - на легковой автомашине.
			<br /><br />
			Двуспальный ортопедический матрас Magniflex Merino Bamboo оказывает свое благотворное профилактическое и лечебное действие на каждого из спящих на нем людей индивидуально.
			<br /><br />
			<img  src="/img/Merino-Bamboo-7.jpg" alt="Ортопедический итальянский матрас Magniflex Merino Bamboo" style="width: 640 px;">
			<br /><br />
			</p>
				</div>
			</div>
		',
		'recommend' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/rekomendovano-cito.jpg" height="196" title="Матрас рекомендован ЦИТО РФ">
					<br>
				Рекомендован Центральным Институтом <br>
					Травматологии и Ортопедии РФ
				</div>
				<div class="hnb_contrig">
			Ортопедические матрасы серии Magniflex Merino Bamboo рекомендованы Центральным Институтом Травматологии и Ортопедии Российской Федерации для профилактики и лечения болезней опорно-двигательного аппарата
			 <br><br>
						 Матрас универсальный, идеально подходит большинству людей. ОСОБЕННО РЕКОМЕНДУЕТСЯ:
					<p></p>
					<ul>
						<li>Для желающих оставаться молодыми и здоровыми<br>
						Матрас создает надежную опору для поясницы, разгружает мышцы спины, сохраняет правильное положение позвоночника во время сна, волокна бамбука питают клетки, омолаживая организм человека<br>
						<br>
						</li>
						<li>Для тех, кто любит естественный здоровый сон<br>
						 Волокна бамбука создают неповторимую микрофлору для здорового и спокойного сна.<br>
						<br>
						</li>

					</ul>
				</div>
			</div>
		',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 96-ти странах мира! <br>
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 96-ти странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '
			<div class="hnb_contlef">
				<img width="280" src="/img/otzyvy-01.jpg" height="196" title="Реальные отзывы покупателей матрасов Магнифлекс">
				<br>Ни одного отрицательного отзыва!</div>
			<div class="hnb_contrig">В России ортопедические матрасы Magniflex представлены с 1992 года, за все это время нами не было зафиксировано ни одного отрицательного отзыва или рецензии о нашей продукции. Не смотря на жесточайший контроль качества отгружаемого товара, у нас, как и у любой компании, случаются &nbsp;продажи матрасов с наличием производственных дефектов, однако такой товар мы незамедлительно меняем на новый идеального качества, кроме того процент таких случаев крайне мал - менее 0,01% от общего объемы продаж.
		<br><br>
		</div>
		',
		'similar' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli">
			<a href="/catalog/orthopedic_mattresses/memo-merino/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Merino Green Tea</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/new-naturcomfort/"><img width="185" src="/img/product/very_small2/Naturalmente (New Naturcomfort).jpg" height="130"><br />Naturalmente (New Naturcomfort)</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Naturalmente (New Naturcomfort)"}--> руб</span>
			</div>
			</li>
			</ul>
			</div>
		',
		'tougher' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/MERINOS/"><img width="185" src="/img/product/very_small2/Merino (Merinos).jpg" height="130"><br />Merino (Merinos)</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino (Merinos)"}--> руб</span>
			</div>
			</li>
			</ul>
			</div>
		',
		'softer' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/WATERLATTEX/"><img width="185" src="/img/product/very_small2/WaterLattex.jpg" height="130"><br />WaterLattex</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"WaterLattex"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/natur-baci-mattress/"><img width="185" src="/img/product/very_small2/Natur Baci.jpg" height="130"><br />Natur Baci</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Natur Baci"}--> руб</span>
			</div>
			</li>
			</ul>
			</div>
		',
		'comfort' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/memo-merino/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Memo Merino</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Memo Merino"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/new-naturcomfort/"><img width="185" src="/img/product/very_small2/Naturalmente (New Naturcomfort).jpg" height="130"><br />Naturalmente (New Naturcomfort)</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Naturalmente (New Naturcomfort)"}--> руб</span>
			</div>
			</li>
			</ul>
			</div>
		',
		'rec_buy' => '',
		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		'sizes' => array(
			//array('80x190',19700.00),
			//array('90x200',23200.00),
			//array('110x220','Нет в наличии'),
			//array('120x200',30900.00),
			//array('140x200',36200.00),
			//array('160x190',39200.00),
			//array('160x200',41300.00),

		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		//'discount_koef' => array('date_start' => '24.11.2016', 'date_end' => '10.01.2017', 'price_koef' => 0.2, ), //скидка
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'sizes' => array('90x200', '160x200', '180x200'),
			//'prices' => array(
			//	'90x200' => 17600.00,
			//	'160x200' => 31300.00,
			//	'180x200' => 35100.00,
		//       array('80x200',20700.00),
		//		array('90x190',22100.00),
		//		array('200x200',51600.00),
		//		array('180x200',46400.00),
		//				array('160x195',40200.00),
		//			array('150x190',36800.00),
		//		array('150x200',38800.00),
		//       			array('140x190',34300.00),
		//          			array('120x190',29500.00),
			//),
		//), //скидка

	),
	array(
		'address' => 'stile-6',
		'parent_address' => 'collectio-stile',
		'parent_address2' => 'mattresses',
		'other_categories' => array('black-friday', 'orthopedic_mattresses','chehol-viscose-mattresses','podrostkovue-matrasy','vacuum-mattresses', 'mattresses-filter','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', '80x160', 'height-20', 'razmer1', 'razmer3', '60x120','ortoped','vacu'),
		'name' => 'Ортопедический матрас Stile 6',
		'title' => 'Матрас Stile 6 | Официальный сайт Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 6. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Stile 6, magniflex, merino',
		'span_title' => 'Усиленная поддержка спины',
		'attr_cat_product1' => '15 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий',
		'small_img' => '/img/product/very_small/stile-6-new.jpg',
		'small_img_alt' => 'матрас Stile 6 Magniflex',
		'img_preview' => array('/img/Stile-6_rit-01.jpg', '/img/Stile-6_rit-02.jpg','/img/15220_big.jpg','/img/8775268e1772e0d5298ce58ce54d0a99.jpg'),
		'img_carousel' => array('/img/product/big/stile-6.jpg','/img/Stile-6_rit-01.jpg', '/img/Stile-6_rit-02.jpg','/img/15220_big.jpg','/img/8775268e1772e0d5298ce58ce54d0a99.jpg'),
		'img' => '/img/product/big/stile-6.jpg',
		'img_alt' => 'матрас Stile 6 Magniflex',
		'prod_compose' => array(
			array('Ткань чехла ', 'Чехол изготавливается из натуральной ткани Viscose. Это невероятно мягкий, шелковистый и проницаемый материал, обладающий способностью хорошо рассеивать пот и обеспечивающий идеальную вентиляцию матраса.'),
			array('Слои', 'Слой Magnifoam Eliosoft гарантирует отличную поддержку, придает дополнительный комфорт. <br />
			               Гипоалергенный терморегулирующий наполнитель — защитный внутренний слой, повышающий уровень гигиены матраса.'),
			array('Наполнитель', 'Латексная пена Magnifoam Elioform (13 см), отличается высокой плотностью и микроклеточной структурой, обеспечивает жесткую, ортопедически правильную поддержку спины и позвоночника.')
		),
		'attr_cat_product1' => '15 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий',
		'new_desc' => 'Усовершенствованная модель Merino, усиленная поддержка спины и позвоночника',
		'attr_cover_product' => 'Вискозное покрытие, мягкое и дышащее, делает матрас мягким и шелковистым на ощупь и более эффективно рассеивает пот, способствуя воздухопроницаемости.',
		'attr_padding_product' => 'Обивка из Eliosoft и гипоаллергенного волокна обеспечивает дополнительный комфорт и дополнительную поддержку спине в течение всей ночи.',
		'attr_comfort_product' => 'Технология Dual Core позволяет получить различную степень комфорта, просто перевернув сердцевину матраса. Сторона в Memoform (3 см) и Eliosoft (3 см) обеспечивает комфорт «средней фирмы» и удобную, но прочную поддержку. Сторона в Elioform, напротив, обеспечивает «твердый» комфорт и надежную поддержку вашей спины.',
		'attr_layer_product' => 'Слой в Elioform (13 см) благодаря своей микроклеточной пенистой структуре высокой плотности обеспечивает надежную и ортопедическую поддержку позвоночника.',
		'image_composition' => '/img/Stiloso-6.jpg',
		'block_attr_collections' => 'Stiloso',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Воздухопроницаемый',
		'block_attr_comfort_level' => 'Жесткий',
		'block_attr_height' => '15 см',
		'block_attr_support' => 'Жесткий',
		'block_attr_warranty' => '10 лет',
		'block_attr_extra' => '',
		'banner_category' => '/img/black-friday-icon.png',
		'banner_product' => '/img/Layer 1.png',
		'attr' => '
		<style>
				#breadcrumbs{
					background-image: url(/img/style_250.png);
					height: 250px;
				}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  15 см</li><li><b>Степень жесткости</b>:  Жесткий</li>
			<li><b>Срок службы</b>: не менее 10 лет</li></ul>
		',
		'desc' => '
		<div class="common_block_common fixcommon-block">
		    <div class="half-width">
			<h3>КОЛЛЕКЦИЯ МАТРАСОВ STILE</h3>
			<p>Ортопедические матрасы серии Stile – новинка фабрики Magniflex, вобравшая в себя лучшие качества легендарного матраса Magniflex Merinos (S model). Отличается высоким уровнем жесткости и невысокой ценой. Главные отличия от Magniflex Merinos: использование современных технологий и отсутствие деления сторон на зимнюю и летнюю. Не содержит шерсти, имеет одинаково жесткий чехол с обеих сторон. Обеспечивает усиленную поддержку спины и позвоночника.<br /><br />
			Матрасы коллекции Stile изготавливаются из натуральных тканей, имеют привлекательный внешний вид. Белоснежный чехол матраса выполнен из волокон "вискоза", получаемых из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокна и нити, из которых изготавивается ткань.
            Вискоза обладает высокой гигроскопичностью (способностью поглощать водяные пары, впитывать влагу), если сравнивать вискозу с натуральным хлопком, то она способна впитать  в два раза больше влаги. Вискоза не электризуется, является очень "дышащим" материалом,  не вызывает аллергии.<br /><br />
            Современная латексная пена Elioform Magniflex обладает мелкопористой структурой наравне с высокой плотностью, что усиливает способность матраса циркулировать воздух и продлевает срок службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.<br /><br />
            Матрас поставляется в рулоне в вакуумной упаковке.
            </p>
            </div>
            <div class="half-width_img">
            <img  src="/img/products/mattresses/style_mattress.jpg" alt="матрас Stile 6 Magniflex">
            </div>
        </div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Stile' ,
		'cycle-name' => '	Ортопедический матрас Stile 6',
		'sizes' => array(
array('60x120',13100.00),
array('70x140',17600.00),
array('80x180',25500.00),
array('80x190',27100.00),
array('80x200',28400.00),
// array('90x190',30500.00),
// array('90x200',31800.00),
array('120x190',40500.00),
array('120x200',42400.00),
array('140x190',47100.00),
// array('140x200',49300.00),
// array('160x190',53600.00),
// array('160x200',56500.00),
array('180x200',63500.00),
array('200x200',70400.00),
		),


		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		//'discount_koef' => array('date_start' => '24.11.2016', 'date_end' => '10.01.2017', 'price_koef' => 0.2, ), //скидка
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.12.2019',
			//'sizes' => array('90x200 (не в рулоне, новый)'),
			//'prices' => array(
				//'90x200 (не в рулоне, новый)' => 17800.00,
			//),
		//), //скидка

	),
		array(
		'address' => 'stile-7',
		'parent_address' => 'collectio-stile',
		'other_categories' => array('black-friday', 'orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', '80x160', 'height-20','ortoped','vacu'),
		'parent_address2' => 'mattresses',
		'name' => 'Ортопедический матрас Stile 7',
		'title' => 'Матрас Stile 7 | Официальный сайт Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 7. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Stile 7, magniflex, merino',
		'span_title' => 'Усиленная поддержка спины',		
		'attr_cat_product1' => '18 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий',
		'new_desc' => 'Усовершенствованная модель Merino, усиленная поддержка спины и позвоночника',
		'small_img' => '/img/product/very_small/stile-7-new.jpg',
		'img_preview' => array('/img/Stile-6_rit-01.jpg', '/img/Stile-6_rit-02.jpg','/img/15220_big.jpg','/img/8775268e1772e0d5298ce58ce54d0a99.jpg' ),
		'img_carousel' => array('/img/product/big/stile-6.jpg','/img/Stile-6_rit-01.jpg', '/img/Stile-6_rit-02.jpg','/img/15220_big.jpg','/img/8775268e1772e0d5298ce58ce54d0a99.jpg' ),
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img' => '/img/product/big/stile-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'prod_compose' => array(
			array('Ткань чехла ', 'Чехол изготавливается из натуральной ткани Viscose. Это невероятно мягкий, шелковистый и проницаемый материал, обладающий способностью хорошо рассеивать пот и обеспечивающий идеальную вентиляцию матраса.'),
			array('Слои', 'Слой Magnifoam Eliosoft гарантирует отличную поддержку, придает дополнительный комфорт. <br />
			               Гипоалергенный терморегулирующий наполнитель — защитный внутренний слой, повышающий уровень гигиены матраса.'),
			array('Наполнитель', 'Латексная пена Magnifoam Elioform (16 см), отличается высокой плотностью и микроклеточной структурой, обеспечивает жесткую, ортопедически правильную поддержку спины и позвоночника.')
		),
		'attr_cover_product' => 'Вискозное покрытие, мягкое и дышащее, делает матрас мягким и шелковистым на ощупь и более эффективно рассеивает пот, способствуя воздухопроницаемости.',
		'attr_padding_product' => 'Обивка из Eliosoft и гипоаллергенного волокна обеспечивает дополнительный комфорт и дополнительную поддержку спине в течение всей ночи.',
		'attr_comfort_product' => '',
		'attr_layer_product' => 'Слой в Elioform (16 см) благодаря своей микроклеточной пенистой структуре высокой плотности обеспечивает надежную и ортопедическую поддержку позвоночника.',
		'image_composition' => '/img/Stiloso-6.jpg',
		'block_attr_collections' => 'Stiloso',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Воздухопроницаемый',
		'block_attr_comfort_level' => 'Жесткий',
		'block_attr_height' => '18 см',
		'block_attr_support' => 'Жесткий',
		'block_attr_warranty' => '10 лет',
		'block_attr_extra' => '',
		'banner_category' => '/img/black-friday-icon.png',
		'banner_product' => '/img/Layer 1.png',

		'attr' => '
		<style>
				#breadcrumbs{
					background-image: url(/img/style_250.png);
					height: 250px;
				}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  18см</li><li><b>Степень жесткости</b>:  Жесткий</li>
			
			
			<li><b>Срок службы</b>: не менее 10 лет</li></ul><br>
			
		',
		'desc' => '
		<div class="common_block_common fixcommon-block">
			<div class="half-width">
					<h3>КОЛЛЕКЦИЯ МАТРАСОВ STILE</h3>
			<p>Ортопедические матрасы серии Stile – новинка фабрики Magniflex, вобравшая в себя лучшие качества легендарного матраса Magniflex Merinos (S model). Отличается высоким уровнем жесткости и невысокой ценой. Главные отличия от Magniflex Merinos: использование современных технологий и отсутствие деления сторон на зимнюю и летнюю. Не содержит шерсти, имеет одинаково жесткий чехол с обеих сторон. Обеспечивает усиленную поддержку спины и позвоночника.<br /><br />
			Матрасы коллекции Stile изготавливаются из натуральных тканей, имеют привлекательный внешний вид. Белоснежный чехол матраса выполнен из волокон "вискоза", получаемых из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокна и нити, из которых изготавивается ткань.
            Вискоза обладает высокой гигроскопичностью (способностью поглощать водяные пары, впитывать влагу), если сравнивать вискозу с натуральным хлопком, то она способна впитать  в два раза больше влаги. Вискоза не электризуется, является очень "дышащим" материалом,  не вызывает аллергии.<br /><br />
            Современная латексная пена Elioform Magniflex обладает мелкопористой структурой наравне с высокой плотностью, что усиливает способность матраса циркулировать воздух и продлевает срок службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.<br /><br />
            Матрас поставляется в рулоне в вакуумной упаковке.
            </p>
            </div>
<div class="half-width_img"><img  src="/img/products/mattresses/style_mattress.jpg" alt="Ортопедический матрас Magniflex из коллекции Stile"></div>
				</div>
		',
		'rec_buy' => '',
		'sizes' => array(
// array('80x160',25200.00),
array('80x190',29800.00),
array('80x200',31500.00),
array('90x190',33700.00),
// array('90x200',35400.00),
array('120x190',44800.00),
// array('120x200 (не в рулоне, новый)',44800.00),
array('120x200',47100.00),
array('140x190',52400.00),
array('140x200',55100.00),
array('160x190',59500.00),
// array('160x200',62800.00),
array('180x200',70600.00),
array('200x200',78200.00),						
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),

		// 'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
		// 	'sizes' => array('120x200 (не в рулоне, новый)'),
		// 	'prices' => array(
        //         '120x200 (не в рулоне, новый)' => 26400.00,
		// 	),
		// ), //скидка

	),
	array(
		'address' => 'stile-8',
		'parent_address' => 'collectio-stile',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', 'height-20', 'hard','ortoped','vacu'),
		'name' => 'Ортопедический матрас Stile 8',
		'title' => 'Матрасы Stile 8 | Официальный сайт Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 8. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Stile 8, magniflex, merino',
		'span_title' => 'Усиленная поддержка спины',		
		'attr_cat_product1' => '20 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий',
		'new_desc' => 'Усовершенствованная модель Merino, усиленная поддержка спины и позвоночника',
		'small_img' => '/img/product/very_small/stile-8-new.jpg',
		'img_preview' => array('/img/Stile-6_rit-01.jpg', '/img/Stile-6_rit-02.jpg','/img/15220_big.jpg','/img/8775268e1772e0d5298ce58ce54d0a99.jpg' ),
		'img_carousel' => array('/img/product/big/stile-6.jpg','/img/Stile-6_rit-01.jpg', '/img/Stile-6_rit-02.jpg','/img/15220_big.jpg','/img/8775268e1772e0d5298ce58ce54d0a99.jpg' ),
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img' => '/img/product/big/stile-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'prod_compose' => array(
			array('Ткань чехла ', 'Чехол изготавливается из натуральной ткани Viscose. Это невероятно мягкий, шелковистый и проницаемый материал, обладающий способностью хорошо рассеивать пот и обеспечивающий идеальную вентиляцию матраса.'),
			array('Слои', 'Слой Magnifoam Eliosoft гарантирует отличную поддержку, придает дополнительный комфорт. <br />
			               Гипоалергенный терморегулирующий наполнитель — защитный внутренний слой, повышающий уровень гигиены матраса.'),
			array('Наполнитель', 'Латексная пена Magnifoam Elioform (18 см), отличается высокой плотностью и микроклеточной структурой, обеспечивает жесткую, ортопедически правильную поддержку спины и позвоночника.')
		),
		'attr_cover_product' => 'Вискозное покрытие, мягкое и дышащее, делает матрас мягким и шелковистым на ощупь и более эффективно рассеивает пот, способствуя воздухопроницаемости.',
		'attr_padding_product' => 'Обивка из Eliosoft и гипоаллергенного волокна обеспечивает дополнительный комфорт и дополнительную поддержку спине в течение всей ночи.',
		'attr_comfort_product' => '',
		'attr_layer_product' => 'Слой в Elioform (18 см) благодаря своей микроклеточной пенистой структуре высокой плотности обеспечивает надежную и ортопедическую поддержку позвоночника.',
		'image_composition' => '/img/Stiloso-6.jpg',
		'block_attr_collections' => 'Stiloso',
		'block_attr_materials' => 'Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Воздухопроницаемый',
		'block_attr_comfort_level' => 'Жесткий',
		'block_attr_height' => '20 см',
		'block_attr_support' => 'Жесткий',
		'block_attr_warranty' => '10 лет',
		'block_attr_extra' => '',
		'banner_category' => '/img/black-friday-icon.png',
		'banner_product' => '/img/Layer 1.png',


		'attr' => '
		<style>
				#breadcrumbs{
					background-image: url(/img/style_250.png);
					height: 250px;
				}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  20см</li>
			<li><b>Степень жесткости</b>: Жесткий</li>
			<li><b>Срок службы</b>: не менее 10 лет</li></ul>
		',
		'desc' => '
		<div class="hnb_contcenter">
		<div class="block_line2">
			<div class="half-width">
			<h3>КОЛЛЕКЦИЯ МАТРАСОВ STILE</h3>
			<p>Ортопедические матрасы серии Stile – новинка фабрики Magniflex, вобравшая в себя лучшие качества легендарного матраса Magniflex Merinos (S model). Отличается высоким уровнем жесткости и невысокой ценой. Главные отличия от Magniflex Merinos: использование современных технологий и отсутствие деления сторон на зимнюю и летнюю. Не содержит шерсти, имеет одинаково жесткий чехол с обеих сторон. Обеспечивает усиленную поддержку спины и позвоночника.<br /><br />
			Матрасы коллекции Stile изготавливаются из натуральных тканей, имеют привлекательный внешний вид. Белоснежный чехол матраса выполнен из волокон "вискоза", получаемых из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокна и нити, из которых изготавивается ткань.
            Вискоза обладает высокой гигроскопичностью (способностью поглощать водяные пары, впитывать влагу), если сравнивать вискозу с натуральным хлопком, то она способна впитать  в два раза больше влаги. Вискоза не электризуется, является очень "дышащим" материалом,  не вызывает аллергии.<br /><br />
            Современная латексная пена Elioform Magniflex обладает мелкопористой структурой наравне с высокой плотностью, что усиливает способность матраса циркулировать воздух и продлевает срок службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.<br /><br />
            Матрас поставляется в рулоне в вакуумной упаковке.
            </p>
            </div>
            <div class="half-width_img"><img  src="/img/products/mattresses/style_mattress.jpg" alt="Ортопедический матрас Magniflex из коллекции Stile"></div>
        </div>
        </div>
		',
		'rec_buy' => '',
		'sizes' => array(
// array('80x190',31500.00),
array('80x200',33000.00),
// array('90x190',35400.00),
array('90x200',37300.00),
// array('120x190',47100.00),
// array('120x200',49300.00),
// array('140x190',55000.00),
// array('140x200',57800.00),
// array('160x190',62800.00),
// array('160x200',66000.00),
// array('180x200',74300.00),
array('200x200',82300.00),
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		//'discount_koef' => array('date_start' => '24.11.2016', 'date_end' => '10.01.2017', 'price_koef' => 0.2, ), //скидка
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'sizes' => array('90x200', '160x200', '180x200'),
			//'prices' => array(
			//	'90x200' => 17600.00,
			//	'160x200' => 31300.00,
			//	'180x200' => 35100.00,
			//),
		//), //скидка

	),
	array(
		'address' => 'pensiero-6',
		'parent_address' => 'collectio-pensiero',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses', 'podrostkovue-matrasy','zhestkie-mattresses', 'srednie-mattresses', 'orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses-2', '80x160', 'height-20','ortoped','memo','vacu'),
		'name' => 'Ортопедический матрас Pensiero 6',
		'title' => 'Матрас Pensiero 6 | Официальный сайт Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 6. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 6, magniflex, merino',
		'new_desc' => 'Жесткая поддержка спины + эффект памяти. <br>Более комфортный вариант матраса Stile, добавлен слой с эффектом памяти.',
		'span_title' => 'Еще больше комфорта, чем в коллекции Style',		
		'attr_cat_product1' => '15 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий/Средней жесткости',
		'new_desc' => 'Еще больше комфорта, чем в Stile. Эффект «памяти». Усиленная поддержка спины и позвоночника',
		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'img_preview' => array('/img/Pensiero-7_rit-01.jpg', '/img/Pensiero-7_rit-02.jpg'),
		'img_carousel' => array('/img/product/big/ricordo-6.jpg','/img/Pensiero-7_rit-01.jpg', '/img/Pensiero-7_rit-02.jpg'),
		'small_img_alt' => 'Итальянский ортопедический матрас Pensiero 6',
		'img' => '/img/product/big/ricordo-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Pensiero 6',
		'video_html' => array('/img/111111.jpg', '/data/video/14 Pensiero_1_1.mp4'),	
		'mini_description' => '',
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring perspiration.',
		'attr_padding_product' => 'The Memoform padding adapts perfectly to the body’s shape, giving a pleasant feeling of lightness and relaxation. The hypoallergenic fiber provides extra comfort all night long.',
		'attr_comfort_product' => 'The layer in Elioform (12 см), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Ricordo-6.jpg',
		'block_attr_collections' => 'Ricordoa',
		'block_attr_materials' => 'Memoform, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Breathable',
		'block_attr_comfort_level' => 'Medium firm',
		'block_attr_height' => '15 см',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'banner_category' => '/img/black-friday-icon.png',
		'banner_product' => '/img/Layer 1.png',
		'block_attr_extra' => '',
		'attr' => '
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  15 см</li><li><b>Степень жесткости</b>: Жесткий / Cредней жесткости</li>
			
			
			<li><b>Срок службы</b>: не менее 10 лет</li></ul><br>
			
		',
		'desc' => '
			<style>
				.product_top .price{}
				#breadcrumbs{
					background-image: url(/img/PENSIERO_250.png);
					height: 250px;
				}
			</style>
		
			<div class="common_block_common fixcommon-block">
				<div class="half-width">
				<h3>КОЛЛЕКЦИЯ МАТРАСОВ PENSIERO</h3>
					Ортопедический матрас Pensiero – это новинка фабрики Magniflex, следующий уровень комфорта после серии упругих матрасов коллекции Stile.
					<br><br>
					Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид. Отличие всех трех моделей в серии Pensiero только в высоте, одинаковые материалы и жесткость.
					<br><br>
					Белоснежный чехол матраса выполнен из материала вискоза.
					Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
					Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
					Вискоза не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
					Матрас Pensiero – это матрас со средней степенью жесткости, является усовершенствованной моделью серии Stile. Не содержит шерсти и имеет одинаковый чехол, но при этом разную жесткость с обеих сторон. С верхней стороны есть 2 см слоя мемоформ, с нижней стороны обычный упругий Elioform. Таким образом, матрас смело можно назвать двусторонним. Обеспечивает усиленную поддержку спины и позвоночника, при этом гарантируя повышенный уровень комфорта, чем например модель Stile за счет слоя memoform 2 см – эффект памяти, анатомический матрас.
					Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
				</div>
			    <div class="half-width_img"><img  src="/img/products/mattresses/pensiero_mattress.jpg" alt="Ортопедический матрас Magniflex из коллекции Pensiero"></div>
			</div>
		',
		'rec_buy' => '',
		'sizes' => array(
array('80x190',34000.00),
array('80x200',35700.00),
array('90x190',38300.00),
array('90x200',40300.00),
array('120x190',51000.00),
array('120x200',53600.00),
array('140x190',59500.00),
array('140x200',62800.00),
array('160x190',68000.00),
array('160x200',71400.00),
array('180x200',80600.00),
array('200x200',89300.00),
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		//'discount_koef' => array('date_start' => '24.11.2016', 'date_end' => '10.01.2017', 'price_koef' => 0.2, ), //скидка
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'sizes' => array('90x200', '160x200', '180x200'),
			//'prices' => array(
			//	'90x200' => 17600.00,
			//	'160x200' => 31300.00,
			//	'180x200' => 35100.00,
			//),
		//), //скидка

	),
	array(
		'address' => 'pensiero-7',
		'parent_address' => 'collectio-pensiero',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','zhestkie-mattresses', 'srednie-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses-2', 'height-20','ortoped','memo','vacu'),
		'name' => 'Ортопедический матрас Pensiero 7',
		'title' => 'Матрас Pensiero 7 | Официальный сайт Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 7. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 7, magniflex, merino',
		'span_title' => 'Еще больше комфорта, чем в коллекции Style',			
		'attr_cat_product1' => '18 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий/Средней жесткости',
		'new_desc' => 'Еще больше комфорта, чем в Stile. Эффект «памяти». Усиленная поддержка спины и позвоночника',

		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'img_preview' => array('/img/Pensiero-7_rit-01.jpg', '/img/Pensiero-7_rit-02.jpg'),
		'img_carousel' => array('/img/product/big/ricordo-7.jpg','/img/Pensiero-7_rit-01.jpg', '/img/Pensiero-7_rit-02.jpg'),
		'small_img_alt' => 'Итальянский ортопедический матрас Pensiero 7',
		'img' => '/img/product/big/ricordo-7.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Pensiero 7',
		'video_html' => array('/img/111111.jpg', '/data/video/14 Pensiero_1_1.mp4'),	
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring perspiration.',
		'attr_padding_product' => 'The Memoform padding adapts perfectly to the body’s shape, giving a pleasant feeling of lightness and relaxation. The hypoallergenic fiber provides extra comfort all night long.',
		'attr_comfort_product' => 'The layer in Elioform (15 см), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Ricordo-7.jpg',
		'block_attr_collections' => 'Ricordoa',
		'block_attr_materials' => 'Memoform, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Breathable',
		'block_attr_comfort_level' => 'Medium firm',
		'block_attr_height' => '18 см',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'block_attr_extra' => '',
				
		'banner_category' => '/img/black-friday-icon.png',
		'banner_product' => '/img/Layer 1.png',

		'attr' => '
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  18 см</li><li><b>Степень жесткости</b>: Жесткий / Cредней жесткости</li>
			
			
			<li><b>Срок службы</b>: не менее 10 лет</li></ul><br>
			
		',
		'desc' => '
			<style>
				#breadcrumbs{
					background-image: url(/img/PENSIERO_250.png);
					height: 250px;
				}
			</style>
		
			<div class="common_block_common fixcommon-block">
				<div class="half-width">
					<h3>КОЛЛЕКЦИЯ МАТРАСОВ PENSIERO</h3>
					<p>
					Белоснежный чехол матраса выполнен из материала вискоза.
					Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
					Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
					Вискоза не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
					Матрас Pensiero – это матрас со средней степенью жесткости, является усовершенствованной моделью серии Stile. Не содержит шерсти и имеет одинаковый чехол, но при этом разную жесткость с обеих сторон. С верхней стороны есть 2 см слоя мемоформ, с нижней стороны обычный упругий Elioform. Таким образом, матрас смело можно назвать двусторонним. Обеспечивает усиленную поддержку спины и позвоночника, при этом гарантируя повышенный уровень комфорта, чем например модель Stile за счет слоя memoform 2 см – эффект памяти, анатомический матрас.
					Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
					</p>
				</div>
				<div class="half-width_img"><img  src="/img/products/mattresses/pensiero_mattress.jpg" alt="Ортопедический матрас Magniflex из коллекции Pensiero"></div>
			</div>

		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Pensiero' ,
		'cycle-name' => 'Ортопедический матрас Pensiero 7',
		'sizes' => array(
array('80x190',36600.00),
array('80x200',38600.00),
array('90x190',41400.00),
array('90x200',43200.00),
array('120x190',54800.00),
array('120x200',57700.00),
array('140x190',64100.00),
array('140x200',67200.00),
array('160x190',73000.00),
array('160x200',76500.00),
array('180x200',86400.00),
array('200x200',95900.00),
		),
		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),

		

	),
	array(
		'address' => 'pensiero-8',
		'parent_address' => 'collectio-pensiero',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','zhestkie-mattresses', 'srednie-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-20','ortoped','memo','vacu'),
		'name' => 'Ортопедический матрас Pensiero 8',
		'title' => 'Матрасы Pensiero 8 | Официальный сайт Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 8. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 8, magniflex, merino',
		'span_title' => 'Еще больше комфорта, чем в коллекции Style',			
		'attr_cat_product1' => '20 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий/Средней жесткости',
		'new_desc' => 'Еще больше комфорта, чем в Stile. Эффект «памяти». Усиленная поддержка спины и позвоночника',
		'img_preview' => array('/img/Pensiero-7_rit-01.jpg', '/img/Pensiero-7_rit-02.jpg'),
		'img_carousel' => array('/img/product/big/ricordo-8.jpg','/img/Pensiero-7_rit-01.jpg', '/img/Pensiero-7_rit-02.jpg'),
		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Pensiero 8',
		'img' => '/img/product/big/ricordo-8.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Pensiero 8',
		'video_html' => array('/img/111111.jpg', '/data/video/14 Pensiero_1_1.mp4'),	
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring perspiration.',
		'attr_padding_product' => 'The Memoform padding adapts perfectly to the body’s shape, giving a pleasant feeling of lightness and relaxation. The hypoallergenic fiber provides extra comfort all night long.',
		'attr_comfort_product' => 'The layer in Elioform (17 см), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Ricordo-8.jpg',
		'block_attr_collections' => 'Ricordoa',
		'block_attr_materials' => 'Memoform, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Breathable',
		'block_attr_comfort_level' => 'Medium firm',
		'block_attr_height' => '20 см',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'block_attr_extra' => '',
		
		'banner_category' => '/img/black-friday-icon.png',
		'banner_product' => '/img/Layer 1.png',

		'attr' => '
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  20 см</li><li><b>Степень жесткости</b>: Жесткий / Cредней жесткости</li>
			
			
			<li><b>Срок службы</b>: не менее 10 лет</li></ul><br>
			
		',
		'desc' => '
			<style>
				#breadcrumbs{
					background-image: url(/img/PENSIERO_250.png);
					height: 250px;
				}
			</style>
		
			<div class="common_block_common fixcommon-block">
					<div class="half-width">
					<h3>КОЛЛЕКЦИЯ МАТРАСОВ PENSIERO</h3>

					Ортопедический матрас Pensiero – это новинка фабрики Magniflex, следующий уровень комфорта после серии упругих матрасов коллекции Stile.
					<br><br>
					Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид. Отличие всех трех моделей в серии Pensiero только в высоте, одинаковые материалы и жесткость.
					<br><br>
					Белоснежный чехол матраса выполнен из материала вискоза.
					Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
					Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
					Вискоза не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
					Матрас Pensiero – это матрас со средней степенью жесткости, является усовершенствованной моделью серии Stile. Не содержит шерсти и имеет одинаковый чехол, но при этом разную жесткость с обеих сторон. С верхней стороны есть 2 см слоя мемоформ, с нижней стороны обычный упругий Elioform. Таким образом, матрас смело можно назвать двусторонним. Обеспечивает усиленную поддержку спины и позвоночника, при этом гарантируя повышенный уровень комфорта, чем например модель Stile за счет слоя memoform 2 см – эффект памяти, анатомический матрас.
					Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
					</div>
                    <div class="half-width_img"><img  src="/img/products/mattresses/pensiero_mattress.jpg" alt="Ортопедический матрас Magniflex из коллекции Pensiero"></div>
			</div>			
				

				
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Pensiero' ,
		'cycle-name' => 'Ортопедический матрас Pensiero 8',
		'sizes' => array(
array('80x190',39700.00),
array('80x200',41500.00),
array('90x190',44600.00),
array('90x200',46600.00),
array('120x190',59200.00),
array('120x200',61900.00),
array('140x190',68900.00),
array('140x200',72300.00),
array('160x190',78800.00),
array('160x200',82500.00),
array('180x200',93000.00),
array('200x200',103400.00),

		),
		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		// 'discount_koef' => array('date_start' => '26.11.2019', 'date_end' => '01.12.2020',
		// 	'sizes' => array('200x210 (не в рулоне, новый)'),
		// 	'prices' => array(
        //         // '80x200 (не в рулоне, новый)' => 26560.00,
		// 		'200x210 (не в рулоне, новый)' => 60700.00
		// 	),
		// ), //скидка
	),
	array(
		'address' => 'pensiero-12',
		'parent_address' => 'collectio-pensiero',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('s-effektom-pamjati-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-26','ortoped','memo','vacu'),
		'name' => 'Ортопедический матрас Pensiero 12',
		'title' => 'Матрасы Pensiero 12 | Официальный сайт Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 12. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 12, magniflex, merino 12',
		'span_title' => 'Самый комфортный из коллекции Pensiero',
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий/Средней жесткости',
		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Pensiero 12',
		'img' => '/img/product/big/ricordo-12.jpg',
		'img_carousel' => array('/img/product/big/ricordo-12.jpg'),
		'img_alt' => 'Итальянский ортопедический матрас Pensiero 12',
		'video_html' => array('/img/111111.jpg', '/data/video/14 Pensiero_1_1.mp4'),	
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring perspiration.',
		'attr_padding_product' => 'The Memoform padding adapts perfectly to the body’s shape, giving a pleasant feeling of lightness and relaxation. The hypoallergenic fiber provides extra comfort all night long.',
		'attr_comfort_product' => 'The layer in Elioform (28 см), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Ricordo-12.jpg',
		'block_attr_collections' => 'Ricordoa',
		'block_attr_materials' => 'Memoform, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Breathable',
		'block_attr_comfort_level' => 'Medium firm',
		'block_attr_height' => '30 см',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'block_attr_extra' => '',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'attr' => '
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  30 см</li>
			<li><b>Степень жесткости</b>: Жесткий / Cредней жесткости</li>
			
			
			<li><b>Срок службы</b>: не менее 10 лет</li></ul><br>
			
		',
		'desc' => '
			<style>
				#breadcrumbs{
					background-image: url(/img/PENSIERO_250.png);
					height: 250px;
				}
			</style>
		
			<div class="hnb_contcenter">
				<div class="block_line2">
					<div class="half-width">
					<h3>КОЛЛЕКЦИЯ МАТРАСОВ PENSIERO</h3>
						Ортопедический матрас Pensiero – это новинка фабрики Magniflex, следующий уровень комфорта после серии упругих матрасов коллекции Stile.
						<br><br>
						Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид. Отличие всех трех моделей в серии Pensiero только в высоте, одинаковые материалы и жесткость.
						<br><br>
						Белоснежный чехол матраса выполнен из материала вискоза.
						Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
						Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
						Вискоза не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
						Матрас Pensiero – это матрас со средней степенью жесткости, является усовершенствованной моделью серии Stile. Не содержит шерсти и имеет одинаковый чехол, но при этом разную жесткость с обеих сторон. С верхней стороны есть 2 см слоя мемоформ, с нижней стороны обычный упругий Elioform. Таким образом, матрас смело можно назвать двусторонним. Обеспечивает усиленную поддержку спины и позвоночника, при этом гарантируя повышенный уровень комфорта, чем например модель Stile за счет слоя memoform 2 см – эффект памяти, анатомический матрас.
						Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
					</div>
                    <div class="half-width_img"><img  src="/img/products/mattresses/pensiero_mattress.jpg" alt="Ортопедический матрас Magniflex из коллекции Pensiero"></div>
			</div>
					



</div>

				</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Pensiero' ,
		'cycle-name' => 'Ортопедический матрас Pensiero 12',
		'sizes' => array(
array('80x200',56100.00),
array('90x190',60100.00),
array('90x200',63300.00),
array('120x190',79800.00),
array('120x200',84000.00),
array('140x190',93000.00),
array('140x200',97800.00),
array('160x190',106600.00),
array('160x200',111900.00),
array('180x200',126200.00),
array('200x200',140000.00),

		),
		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		// 'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
		//'discount_koef' => array('date_start' => '24.11.2016', 'date_end' => '10.01.2017', 'price_koef' => 0.2, ), //скидка
		// 'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2020',
		// 	'sizes' => array('90x200 (не в рулоне, новый)'),
		// 	'prices' => array(
		// 		'90x200 (не в рулоне, новый)' => 35400.00,
		// 	),
		// ), //скидка

	),
	array(
		'address' => 'waterlattex',
		'parent_address' => 'mattresses',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses','height-20','ortoped','vacu'),
		'name' => 'Ортопедический матрас WaterLattex',
		'title' => 'Матрас WaterLattex | MAGNIFLEX.RU',
		'description' => 'Описание, фотографии, состав ортопедического матраса Magniflex WaterLattex. Очень комфортный, мягкий матрас с высочайшими анатомическими свойствами.',
		'keywords' => 'magniflex waterlattex, waterlatex, магнифлекс вотерлатекс,',
		'span_title' => 'Дыщащий, летняя и зимняя стороны',	
		'attr_cat_product1' => '18 см',
		'attr_cat_product2' => 'Несъемный',
		'attr_cat_product3' => 'Средняя',
		'new_desc' => 'Двусторонний: лето - хлопок, зима - шерсть мериноса, анатомический эффект, дышащий: технология Airyform',
		'small_img' => '/img/product/very_small/WaterLattex.jpg',
		'img_preview' => array('/img/Waterlattex-4-1.jpg', '/img/Waterlattex-5.jpg', '/img/Waterlattex-7.jpg', '/img/Waterlattex-8.jpg', '/img/Waterlattex-9.jpg'),
		'img_carousel' => array('/img/product/big/matress_waterlattex.jpg','/img/Waterlattex-4-1.jpg', '/img/Waterlattex-5.jpg', '/img/Waterlattex-7.jpg', '/img/Waterlattex-8.jpg', '/img/Waterlattex-9.jpg'),
		'small_img_alt' => 'ортопедический матрас Magniflex WaterLattex',
		'img' => '/img/product/big/matress_waterlattex.jpg',
		'img_alt' => 'Ортопедические матрасы WaterLattex',
		'attr_cover_product' => '',
		'attr_padding_product' => 'Ортопедический матрас Merino Magniflex состоит исключительно из природных, экологически чистых материалов, летняя сторона - 100% натуральный хлопок; зимняя сторона - 100% натуральная шерсть тонкорунного мериноса ',
		'attr_comfort_product' => '',
		'image_composition' => '/img/product/merino_matress_layers2.jpg',
		'block_attr_collections' => '',
		'block_attr_materials' => 'Elioform, hypoallergenic fiber',
		'block_attr_coating' => 'двухсторонний, несъемный',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, Терморегулирующий, Дополнительный комфорт, Воздухопроницаемый',
		'block_attr_comfort_level' => 'Средний',
		'block_attr_height' => '14.2 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '10 лет',
		'block_attr_extra' => 'Двухсторонний чехол ',
        	'attr_cover_product_title' => 'Зимняя сторона',
		'attr_cover_product' => 'Чтобы зимой было тепло одна сторона матраса изготавливается из шерсти тонкорунного мериноса.',
		'attr_padding_product_title' => 'Наполнитель',
		'attr_padding_product' => 'Пена Elioform —  материал высокой плотности,  оказывающий качественную и упругую поддержку спины. Выдерживает нагрузку до 160 кг на спальное место. Мелкопористая структура обеспечивает высокий уровень циркуляции воздуха, благодаря чему матрас становится «дышащим» и гарантирует свежесть и комфортность сна. ',
		'attr_comfort_product_title' => 'Летняя сторона',
		'attr_comfort_product' => 'Изготавливается  из 100% хлопка двойного кручения. Материал натуральный, имеет высокий уровень износостойкости. ',
		'attr_cat_product1' => '18 см',
		'attr_cat_product2' => 'Несъемный, шерсть мериноса/хлопок',
		'attr_cat_product3' => 'Жесткий',
		'attr' => '
			<ul><li>СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>: 18 см</li>
			<li><b>Жесткость</b>: средней жесткости/средней мягкости</li>
			<li><b>Срок службы</b>: не менее 10 лет</li>
			<li>Умеренно мягкий матрас с двухсторонним чехлом «зима-лето», Teflon®, технология Airyform®</li>
			</ul>
		',
		
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contcenter">
						<div class="half-width">
							<h3>Ортопедический матрас WaterLattex</h3>
							<strong><i>Двусторонний матрас с анатомическим эффектом</i></strong>
							<p>
                            Матрас Waterlattex Merino Magniflex ("вотерлатекс" или "ватерлатекс") - ортопедическое изделие, помогающее зафиксировать позвоночник спящего человека в правильном, оптимальном положении не зависимо от его веса и комплекции. Он дарит своим обладателям оздоровительный сон: снимает усталость за счет полного расслабления мышц спины, способствует свободной циркуляции крови в организме, так как не пережимает даже мелкие капилляры, обеспечивает превосходную удобную поддержку.<br />
                            Лечебные свойства и воздействие доказаны клиническими испытаниями в Европе, США и России.</p>
	</div>
						<div class="coin-slider">
							<img class="waterlatex-fix" alt="Ортопедический матрас WaterLattex в интерьере" src="/img/product/matress_waterlattex_01.jpg">
						</div>
				</div>
			</div>
			<br /><br />
			
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
					<h3>Комфорт в любое время года</h3>
					<img class="two-width" src="/img/magniflex-waterlattex1.jpg" alt="Матрас Waterlattex Merino Magniflex боковина">
					<p class="text-jus">
                    Матрас Magniflex Waterlattex merino имеет "летнюю" и "зимнюю" стороны. Летняя сторона - эластичная терморегулирующая ткань из 100% хлопка с пропиткой TEFLON. Зимняя производится из шерсти тонкорунного мериноса. Шерстяное покрытие действует на рецепторы кожи обеспечивая рефлекторно-анальгизирующее действие при болях, вызванных миозитом, радикулитом, невралгиями.
                    </p>
  
                <h3>Концептуальная идея матраса Waterlattex</h3>
					<img class="two-width" src="/img/magniflex-waterlattex7.jpg" alt="Песок, бриз и океан">
					<p class="text-jus">
                    <b>Теплый песок</b> - идеальная анатомическая поддержка спины.<br /> 
                    <b>Свежий бриз</b> - отличная воздухопроницаемость гарантия Airyform.<br />  
                    <b>Чистая вода</b> - основной компонент наполнителя матраса.<br /> 
                    </p>    
				</div>
				<div class="half-width fixcommon-block">
				<h3>Дышащие, технология Airyform</h3>
					<p class="text-jus">
                    Waterlattex - необыкновенно проницаемые матрасы, благодаря используемой в них запатентованной технологии Airyform. Матрац буквально пронизан сетью мельчайших каналов, создающих отличную вентиляцию. Каждый раз, когда Вы меняете положение свежий воздух буквально "прокачивается" через всю систему.<br />
                    <img class="two-width" src="/img/waterlattex-airyform.jpg" alt="технология Airyform">
					</p>
					<h3>Глубокий анатомический эффект</h3>
					<p class="text-jus">
                    В основе модели Waterlattex используется универсальный наполнитель Watercell, благодаря которому матрас легко принимает физиологическую форму человека: молекулы воды мгновенно реагируют на любые изменения в положении тела спязего человека, перераспределяя давление и помогая позвоночнику все время находится в анатомически правильном состоянии, способствует максимальному отдыху и расслабленности.
					</p>
				</div>
			</div>
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlefsostav">
<br><br>
					 <img itemprop="image" src="/img/layer/layer-merino-waterlattex.png" alt="состав матраса Waterlattex Magniflex">

				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX WATERLATTEX</b><br><br>
			Ортопедический матрас Magniflex Waterlattex состоит исключительно из природных, экологически чистых материалов. В изготовлении наполнителя используется натуральный латекс.<br><br><br>
			<b>Чехол</b> двухсторонний, несъемный:<br>
			&emsp;летняя сторона -  100% <a href="https://www.magniflex.ru/production/Cotton/ ">натуральный хлопок</a>, с пропиткой TEFLON, защищающей хлопок от пыли и влаги. Ткань, пропитанная Teflon-ом не впитывает влагу, имеет "водоотталкивающий" эффект.<br>
			&emsp;зимняя сторона - 100% натуральная <a href="https://www.magniflex.ru/production/Merinos/ ">шерсть тонкорунного мериноса</a>
			<br><br>
			<i>Ткань чехла содержит волокна бамбука</i>
			<br><br><br>
			<b>Внутренние слои</b>:<br>
			1 - антистатическая прослойка<br>
			2 - гиппоаллергенный терморегулирующий слой<br>
			3 - наполнитель <a href="https://www.magniflex.ru/production/Waterlatex/">WATERLATTEX</a>
			</p>
				</div>
			</div>
		',
		'recommend' => '
		<div class="hnb_contcenter">
			<div class="hnb_contmy">
				<div class="hnb_contlef">
				<p>
					<img width="280" src="/img/rekomendovano-cito.jpg" height="196" title="Матрас рекомендован ЦИТО РФ">
					</p>
					<p>
				Рекомендован Центральным Институтом <br>
					Травматологии и Ортопедии РФ
					</p>
				</div>
				<div class="hnb_contrig">
				<p>
					Ортопедические матрасы Magniflex Merino (Merinos) рекомендованы Центральным Институтом Травматологии и Ортопедии Российской Федерации им. Н.Н. Приорова в профилактических целях так и для лечения болезней опорно-двигательного аппарата, коррекции при повреждении позвоночника, вызванных травмами и хроническими заболеваниями (в том числе остеохондрозом, спондилезом). Заключение выдал директор ЦИТО, член кор. РАМН, профессор Ю.Г. Шапошников. <br>
						<br>
				Матрас Magniflex Waterlattex ОСОБЕННО рекомендован людям среднего возраста и старшей возрастной категории. Матрас клинически испытан и признан абсолютно безопасным, поэтому  рекомендуется  женщинам, ожидающим ребенка. Он максимально точно повторяет физиологические изгибы тела, разгружает спину, расслабляет и успокаивает. Это также подходящий вариант для людей с высокой активностью и подвижностью. Создаст комфортные условия людям, предпочитающим сон на боку или на животе.  Матрас Magniflex Waterlattex делает комфортным сон людей, нуждающихся в анатомических свойствах поверхности для сна: при слабом кровообращении и затекании мягких тканей, людям с болезненными синдромами в области поясницы, при болезни межпозвонковых грыж.
</p>
				</div>
			</div>
			</div>
		',
		'certificat' => '
		<div class="hnb_contcenter">
			<div class="hnb_contmy">
				<div class="hnb_contlef">
				<p>
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					</p>
					<p>
				Сертифицировано в 96-ти странах мира!
				</p>
				</div>
				<div class="hnb_contrig">
				<p>
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 96-ти странах по всему миру: от Японии и Австралии до США и Бразилии.
</p>
				</div>
			</div>
			</div>
		',
		'review' => '
		<div class="reviews">
			<h3> Отзывы покупателей</h3>
			<p>
				<b>Дина</b>
				<br>
				<span>
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
				</span>
				<br>
				<i>"Отличный ортопедический матрас Magniflex Waterlatex (Магнифлекс Ватерлатекс)! Очень комфортный и качественный. Сплю на нем с удовольствием, забыла про аллергию."</i>
			</p>
			<p>
				<b>Андрей</b>
				<br>
				<span>
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
				</span>
				<br>
				<i>"Ортопедический матрас Magniflex Waterlatex (Магнифлекс Ватерлатекс)- настоящее итальянское качество! Ортопедические свойства на высшем уровне."</i>
			</p>
			<p>
				<b>Сергей</b>
				<br>
				<span>
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
				</span>
				<br>
				<i>"Никак не могли понять, почему нам матрасы все не такие , как хотелось бы. Но когда попробовали ортопедический матрас Магнифлекс Ватерлатекс поняли это то, что нам нужно."</i>
			</p>
			<p>
				<b>Игорь</b>
				<br>
				<span>
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
				</span>
				<br>
				<i>"Матрас Magniflex Waterlatex (Магнифлекс Ватерлатекс)- просто лучший...!!!"</i>
			</p>
			<p>
				<b>Валентина </b>
				<br>
				<span>
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
				</span>
				<br>
				<i>"Ортопедический матрас Magniflex Waterlatex (Магнифлекс Ватерлатекс) это сказка!<br> Мягкий, эластичный. Очень удобно и комфортно спать на нем!"</i>
			</p>
			<p>
				<b>Юлия  </b>
				<br>
				<span>
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
				</span>
				<br>
				<i>"Прекрасный ортопедический матрас Magniflex Waterlatex (Магнифлекс Ватерлатекс)! Очень мягкий, комфортный. Спим и радуемся, что купили именно его."</i>
			</p>
		</div>
		',
		'delivery-pay' => ' ',
		'advant-tab' => ' ',
		'similar' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli">
			<a href="/catalog/orthopedic_mattresses/memo-merino/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Merino Green Tea</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/"><img width="185" src="/img/product/very_small2/Bamboo.jpg" height="130"><br />Bamboo</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Bamboo"}--> руб</span>
			</div>
			</li>
			</ul>
			</div>
		',
		'tougher' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/"><img width="185" src="/img/product/very_small2/Merino Green Tea.jpg" height="130"><br />Merino Green Tea</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/"><img width="185" src="/img/product/very_small2/Bamboo.jpg" height="130"><br />Bamboo</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Bamboo"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/MERINOS/"><img width="185" src="/img/product/very_small2/Merino (Merinos).jpg" height="130"><br />Merino (Merinos)</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino (Merinos)"}--></span>
			</div>
			</li>
			</ul>
			</div>
		',
		'softer' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/new-naturcomfort/"><img width="185" src="/img/product/very_small2/Naturalmente (New Naturcomfort).jpg" height="130"><br />Naturalmente (New Naturcomfort)</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Naturalmente (New Naturcomfort)"}--> руб</span>
			</div>
			</li>
			</ul>
			</div>
		',
		'comfort' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/natur-baci-mattress/"><img width="185" src="/img/product/very_small2/Natur Baci.jpg" height="130"><br />Natur Baci</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Natur Baci"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/memo-merino/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Memo Merino</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Memo Merino"}--> руб</span>
			</div>
			</li>
			</ul>
			</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex WATERLATTEX' ,
		'cycle-name' => 'Ортопедический матрас Waterlattex',
		'sizes' => array(
array('90x200 (с экспозиции шоу-рума)',32600.00),
// array('90x200',40800.00),
// array('160x190',68600.00),
// array('160x200',71900.00),
// array('180x200',81000.00),
array('190x205 (не в рулоне, новые)',70050.00),
// array('200x200 (не в рулоне, новые)',71900.00),
array('200x200',89000.00),			
		),

/*
        'discount_koef' => array('date_start' => '31.10.2019', 'date_end' => '31.12.2020',
            'sizes' => array(
				'80x190',
				'80x200',
				'90x190',
				'90x200',
				'90x200 (с экспозиции шоу-рума)',
				'120x190',
				'120x200',
				'140x190',
				'140x200',
				'190x205 (не в рулоне, новые)',
				'160x190',
				'160x195',
				'160x200',
				'180x190',
				'180x195',
				'180x200',
				'200x200',
				'200x200 (не в рулоне, новые)'),
            'prices' => array(
				'80x190' => 24570.00,
				'80x200' => 23200.00,
				'90x190' => 26180.00,
				'90x200' => 27710.00,
				'90x200 (с экспозиции шоу-рума)' => 22900.00,
				'120x190' => 36990.00,
				'120x200' => 38880.00,
				'140x190' => 38320.00,
				'140x200' => 45360.00,
				'160x190' => 49320.00,
				'160x195' => 50490.00,
				'160x200' => 51750.00,
				'180x190' => 55350.00,
				'180x195' => 56700.00,
				'180x200' => 55080.00,
				'190x205 (не в рулоне, новые)' => 49100.00,
				'200x200' => 57520.00,
				'200x200 (не в рулоне, новые)' => 50400.00,


            ),
		), //скидка
		*/
		
		// 'discount_koef' => array('date_start' => '15.12.2019', 'date_end' => '30.12.2019', 'price_koef' => 0.1),
	),
			array(
		'address' => 'new-naturcomfort',
		'parent_address' => 'mattresses',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-22-25','ortoped','memo','vacu'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас Naturalmente (New Naturcomfort)',
		'title' => 'Матрас Naturalmente (New Naturcomfort)| Официальный сайт Magniflex',
		'description' => 'У нас Вы найдете матрасы серии Naturcomfort. Удобные итальянские матрасы в нашем каталоге.',
		'keywords' => 'матрас, naturcomfort, magniflex',
		'span_title' => 'Волокна древесины',
		'attr_cat_product1' => '22 см',
		'attr_cat_product2' => 'Несъемный Wooden fiber.',
		'attr_cat_product3' => 'Cредняя',
		'small_img' => '/img/product/very_small/NewNaturComfort.jpg',
		'img_preview' => array('/img/Naturalmente-4.jpg', '/img/Naturalmente-5.jpg', '/img/Naturalmente-6.jpg', '/img/Naturalmente-7.jpg'),
		'img_carousel' => array('/img/product/big/New NaturComfort.jpg', '/img/Naturalmente-4.jpg', '/img/Naturalmente-5.jpg', '/img/Naturalmente-6.jpg', '/img/Naturalmente-7.jpg'),
		'small_img_alt' => 'матрас Naturalmente (New Naturcomfort)',
		'img' => '/img/product/big/New NaturComfort.jpg',
		'img_alt' => 'Ортопедические матрасы Naturalmente (New Naturcomfort)',		
		'attr_cover_product' => '',
		'attr_padding_product' => 'Оболочка изготовлена из древесного волокна в чистой целлюлозе, экологически чистого и полезного для здоровья материала, изготовленного из тщательно продуманной древесины. Натуральная ткань, которая благодаря своим терморегулирующим свойствам позволяет воздуху свободно циркулировать, устраняя любые неприятные запахи. Это также невероятно мягкий для кожи.',
		'attr_comfort_product' => '
		Внутренняя стеганая подкладка в Memoform предлагает дополнительный комфорт, идеально приспосабливаясь к любому телосложению, а гипоаллергенные и дышащие волокна обеспечивают дополнительный комфорт.',
		'attr_layer_product' => 'Слой в Eliosoft (18 см) благодаря своей микроклеточной пенистой структуре высокой плотности удерживает спину в правильном положении. Сильный, но уютный комфорт, сочетающий в себе эластичность и воздухопроницаемость.',
		'image_composition' => '/img/natur-comfort.jpg',
		'block_attr_collections' => 'Leggenda',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft',
		'block_attr_coating' => 'Деревянное волокно',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, Терморегулирующий',
		'block_attr_comfort_level' => 'Средний',
		'block_attr_height' => '22 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '12 лет',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'block_attr_extra' => '
		Экологически чистые, натуральные дышащие материалы ',
		'video_for_desc' => '
		<div class="hnb_contvideo">
			<video  tabindex="0" style="width:100%;" loop>
				<source src="/data/video/Magniflex New Naturcomfort - Ортопедический матрас Магнифлекс Натуркомфорт 0+.mp4" />
			</video>

			<img class="ama_player_volume on" src="/img/speaker.svg" onclick="offVolumePlayer()"/>
			<img class="ama_player_volume off" src="/img/speaker (1).svg" onclick="onVolumePlayer()" style="display: none;"/>

			<div class="ama_video_player play" onclick="playAmaPlayer()">
				<img src="/img/play-button.svg"/>
			</div>
			<div class="ama_video_player pause" onclick="pauseAmaPlayer()" style="display: none;">
				<img src="/img/pause.svg"/>
			</div>
			<script>
			
			</script>
		</div>

		',
		'attr' => '
		<style>
			    #breadcrumbs {
					background-image: url(/img/natur_comfort_250.jpg);
					height: 250px;
				}
			</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  22 см</li><li><b>Степень жесткости</b>: средней жесткости, комфортный</li>
			<li><b>Срок службы</b>: не менее 15 лет</li></ul><br>
			
		',
		'desc' => '
			<div class="common_block_common fixcommon-block">
				<div class="half-width">
					<h3>Профессиональный ортопедический матрас Naturalmente (New Naturcomfort)</h3>
					<p>В мае 2016 года модель ортопедического матраса New Naturcomfort ьыла улучшена и получила новое название NATURALMENTE. Для удобства покупателей на сайте будут использоваться оба названия.<br /><br />
					Матрас Naturalmente - это упругий матрас с высокими ортопедическими свойствами, аналогичными характеристикам базовой модели Magniflex Merino. Но при этом Naturalmente обладает повышенным уровнем комфортности за счет 4 сантиметрового слоя инновационного материала Memoform, создающего "эффект памяти". Naturalmente - усовершенствованная модель, выпускавшегося ранее матраса Magniflex Naturcomfort. В новом варианте изменены рисунок и простежки чехла, на 1 см увеличилась общая высота, появился дополнительный слой Memoform.
					</p>
					<img class="two-width" src="/img/new_hnbv_yfner+.jpg" alt="Эффект памяти, материал Memoform">
				</div>
				<div class="coin-slider">
				<img alt="naturalmente матрас" src="/img/product/naturalmente.jpg">
				</div>
			</div>
			<br /><br />
			
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Эффект памяти, 4 см Memoform</h3>
					<img class="two-width" src="/img/memory_image.jpg" alt="Эффект памяти, материал Memoform">
					<p class="text-jus">
					Преимущества инновационного слоя Memoform:<br />
					 - Мгновенно принимает форму тела человека, реагируя на тепло и вес. Не оказывает ответного давления.<br />
                     - Обеспечивает равномерное распределение нагрузки;<br />
                     - Максимально возможный комфорт, снижаются болевые ощущения в спине, шее и суставах, улучшает циркуляция крови;<br />
                     - Способствует расслаблению мышц человека во время сна;<br />
                     - Снижает вероятность появления отечности и онемения конечностей;<br />
                     - Дарит крепкий и здоровый сон.
                	</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3>Дышащий, отличная вентиляция</h3>
					<p class="text-jus">
					Хороший матрас должен дышать, то есть быть воздухопронициаемым. Основной слой матраса – Eliosoft обладает открытой структурой, обеспечивающей естественную вентиляцию и циркуляцию воздуха.
            	    <img class="two-width" src="/img/dyshshii.jpg" alt="На матрасе Naturalmente Magniflex">
					</p>
				<h3>Ткань Wooden Fiber, содержит волокна белой пихты</h3>
					<p class="text-jus">
                    Чехол матраса изготавливается из ткани Wooden Fiber с использованием натуральных волокон белой пихты. Общеизвестно, шишки белой пихты являются отличным средством борьбы с ревматизмом и другими суставными патологиями.
                    Wooden Fiber – мягкий эластичный материал, быстро и эффективно испаряющий влагу, не накапливает сырость, обеспечивает хороший теплообмен с телом человека. Высокие бактериостатические и абсорбирующие свойства материи позволяют эффективно удалять посторонние запахи.
                    <img class="two-width" src="/img/pine-needles-branch.jpg" alt="Белая пихта">
					</p>
				</div>
			</div>
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlefsostav">
<br><br>
					 <img itemprop="image" src="/img/layer/layer-new-naturcomfort.png" alt="состав матраса Naturalmente (New Naturcomfort) Magniflex">
				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX Naturalmente (New Naturcomfort)</b><br><br>
			Ортопедический матрас Magniflex Naturalmente (New Naturcomfort)  создан исключительно из природных, экологически чистых материалов.<br><br><br>
			<b>Чехол</b> несъемный, изготавливается из специальной практичной ткани <a href="/production/Wooden-fiber/">Wooden Fiber</a>, содержащей волокна белой пихты.
			<br><br>
			<i>Ткань чехла содержит древесные волокна</i>
			<br><br><br>
			<b>Внутренние слои</b>:<br>
			1 –   слой материала с эффектом памяти <a href="/production/Memoform-Magnifoam/">MEMOFORM MAGNIFORM</a> (2 см)<br>
			2 - гиппоаллергенный терморегулирующий слой<br>
			3  –  антистатическая прослойка<br>
			4  –  наполнитель <a href="/production/Eliosoft/">ELIOSOFT</a> (18 см)<br>
      5 –   слой материала с эффектом памяти <a href="/production/Memoform-Magnifoam/">MEMOFORM MAGNIFORM</a> (2 см)<br><br>
      <i>Материал Memoform Magniform (дорогая технология создающая "эффект памяти") находится с двух сторон. Общая высота - 4 см!</i>
			</p>
				</div>
			</div>
		',
		'recommend' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/rekomendovano-cito.jpg" height="196" title="Матрас рекомендован ЦИТО РФ">
					<br>
				Рекомендован Центральным Институтом <br>
					Травматологии и Ортопедии РФ
				</div>
				<div class="hnb_contrig">
					Ортопедические матрасы Magniflex Merino (Merinos) рекомендованы Центральным Институтом Травматологии и Ортопедии Российской Федерации им. Н.Н. Приорова в профилактических целях так и для лечения болезней опорно-двигательного аппарата, коррекции при повреждении позвоночника, вызванных травмами и хроническими заболеваниями (в том числе остеохондрозом, спондилезом). Заключение выдал директор ЦИТО, член кор. РАМН, профессор Ю.Г. Шапошников. <br>
						<br>
			Этот матрас идеально подходит всем, особенно тем людям, которые страдают от распираторных, аллергических заболеваний, дерматита.Максимально возможные гигиенические качества матраса достигаются в результате обработки всех его слоев анти-бактериальными пропитками.
			<br /><br />
				</div>
			</div>
		',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 96-ти странах мира!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 96-ти странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '
		<div class="reviews">
			<h3> Отзывы покупателей</h3>
			<p>
				<b>отзыв был найден на сайте - otzovik.com</b>
				<br>
				<span>
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
				</span>
				<br>
				<i>"Когда в далеком 2008 году мы переезжали на новую квартиру, в которой из мебели была только кухня. И тогда мы приобрели в мебельной торговом центре кровать сразу же совместно с матрасом. На то время у нас оказался матрас средней жесткости на 500 независимых пружин фирмы Аскона. Мы в то время мало интересовались матрасами, их видами, нам просто нужен был удобный хороший матрас, какой посоветовал продавец-консультант, такой и взяли, предварительно полежав на нем.<br>
				Со временем в середине матраса повернулась пружина, и спать на нем стало не очень удобно. К тому времени у нас появился ребенок, и мы решили поменять нашу совместную кровать на более узкую, заодно, заменить и матрас. Кровать с матрасом мы продали вроде бы за 5000 руб (можно сказать, что матрас отдали в подарок).<br>
				Ну и поехали по магазинам в поисках хорошего матраса. Искали средней жесткости, на 1000 независимых пружин, почитав отзывы - нам приглянулась фирма консул, и искали матрасы этой фирмы. Но, вот так вышло, что в одном из магазинов по продаже матрасов, нас уговорили полежать на беспружинном матрасе. Первое время мы очень скептически относились к этому вопросу, но ради интереса прилегли. Затем продавец-консультант описала преимущества таких матрасов и мы реально задумались об выборе беспружинного:<br>
				- на край беспружинного матраса можно садится (в отличии от пружинного, на край которого запрещено усаживаться)<br>
				- беспружинный матрас не обязательно раз в месяц вращать вверх-низ, или разворачивать на 180 градусов, можно не трогать матрас хоть 5 лет<br>
				- матрас не продавливается и быстро принимает удобную форму для человека<br>
				- не издаются скрип пружин<br>
				- нет риска, что пружина ляжет, или случится еще-какое то ЧП с ним<br>
				- не продавливается кокосовая прослойка<br>
				- матрас гасит любые колебания - можно прыгать рядом со спящем человеком и он ничего не почувствует.<br>				
				В общем, почитав позже еще раз для профилактики, отзывы о беспружинных матрасах мы решили брать именно его. И так по-тихоньку вышли на Magniflex, а среди матрасов этой фирмы нам очень понравился Naturalmente (New Naturcomfort). И мы, решив, раз в жизни разориться, взяли именно его.<br>				
				И вот спустя 4 года - я не сколько не жалею покупке этого матраса. Он действительно классный - в меру упругий, в меру мягкий, в меру жесткий (вообще - средней жесткости, мы не любим мягкие матрасы, а жесткие - не рекомендуются людям с небольшим весом). Матрас действительно позволяет отдыхать за ночь, он не скрипит, и пружины не давят вам в тело (хотя, пока кокосовая прослойка в нашем первом матрасе не продавилась, мы тоже не ощущали в этом дискомфорта), и наконец-то можно сидеть на краю матраса. Удовольствие, которое дарит матрас, надо испытать самому - тут бесполезно что-то описывать. Тем более у всех к матрасам требования разные. Но вот, единственные недостаток, этого матраса - хочется либо спать без подушки, либо вообще их заменить на более низкие...<br>			
				В остальном - это сплошное удовольствие, а еще под флисовым постельным бельем от "Шуйских ситцов" - так вообще полное нежелание подниматься с утра с кровати, и с каким удовольствием мы ложимся спать, кто бы знал... Муж, когда ложился спать, первое время ласково приговаривал: "мммм, наша чудесная кроватка...".<br>				
				За 4 года использования, матрас не потерял своей упругости, формы и качества. В общем, покупкой очень довольны. Надеюсь, этот матрас прослужит нам достаточно долго, ведь производитель пишет о срок службы - от 12 лет, но гарантию дает всего 2 года.<br>
				Жаль, что цена очень кусачая. За матрас размером 140х200 см в 2013 году мы заплатили почти 39 т. р. Это очень дорого... А сейчас такой матрас стоит почти 56 т. р. - вообще запредел. Я не могу сказать, что он стоит таких денег, мы довольны, а вот вам - надо просто полежать и понять ваш этот матрас или нет.<br>				
				К покупке рекомендую!"</i>
			</p>
			<p>
				<b>отзыв был найден на сайте - irecommend.ru</b>
				<br>
				<span>
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
					<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
				</span>
				<br>
				<i>
				"Сегодня я хочу рассказать про матрас, который по утрам совсем не хочет выпускать нас из своих уютных объятий.
				Но, для начала, начну издалека...<br>
				Первый наш матрас был куплен совместно с кроватью, матрас был от Асконы (кокосовая пластина, независимые пружины, было вроде их 500 штук). В 2011 году он стоял около 8 тыс.р. (сейчас подобный - будет стоить около 15-20 т.р.), ровно в день окончании гарантийного срока в середине матраса боком легка пружина и образовалась небольшая неудобная ямка. И более того кокосовая прослойка немного продавилась, и иногда мы начинали чувствовать пружины. Муж так вообще лежа на этой продавленной пружине не высыпался, или просыпался разбитым..<br>

				В итоге было принято решение - заменить матрас, заодно и поменять кровать - вместо 160х200см, решено было приобрести кровать 140х200. Соответственно, пошли по магазинам, разным ТЦ, искать новый пружинный матрас. Хотелось большего количества пружин, средней жесткости и чтоб на нем было удобно лежать. Беспружинные матрасы мы не рассматривали вовсе, как-то не было доверия к этим матрасам, казалось, что они все быстро изнашиваются и продавливаются... Исходили мы много магазинов по продаже матрасов, выбрали в итоге (почитав отзывы) матрас от Консула (Consul Holding), представительство которого было представлено в ТЦ "Аквилон" (Санкт-Петербург). Там (фирма торговала не только матрасами от Консул) посидев и полежав на многих матрасах, продавец-консультант обратила наше внимание на беспружинные матрасы. Мы вначале скептически ложились на них, но когда легли на Магнифлекс - Naturalmente - поняли: "это он!". Но, все же, решили изначально полистать интернет на счет отзывов об беспружинных матрасах - чтоб знать, стоят ли они своих денег. Ведь Магнифлекс стоял на то время столько же, сколько самый дорогой пружинный...<br>

				В общем, почитав отзывы, решили раскошелиться и взять. Вернулись обратно в ТЦ и заказали... Там была долгая история... нас кормили завтраками, мы уже успели продать кровать и матрас, спали на полу еще около месяца ... а матрас все не как не привозили... закончились все сроки поставки, а нам все говорили - "ну потерпите, на след.неделе уже привезут". А везти то надо было со склада из Москвы (два дня хода, а ждали 48 дней...). В итоге терпение закончилось, мы решили забрать деньги, и заказать через официального поставщика в Санкт-Петербурге, хоть там и было на 3000 р дороже. Помню, как девушка в Аквилоне сообщила убийственную фразу: "что-то у вас совсем терпения нет... вот пожилая пара до вас ждала полгода и ничего". Мы, мягко говоря, были в шоке.<br>

				В общем заказали через официал.поставщика в СПб, и через два дня матрас уже был у нас в багажнике и ехал домой. Единственное, что смутило, матрасы (скрученные, в вакуумной упаковке) развозил какой-то "частник" на своей машины, с мужем они договорились встретиться на заправке, где муж и забрал матрас. На руки, правда, дали гарантию, чеки... Но вот... не адреса на сайте нет, куда обращаться в случае брака... не самовывоза... Все вопросы - только по телефону. Согласитесь - страшновато и сомнительно.... Но, вот не знаю (точнее не помню - может, отзывы читала, или в саму фирму магнифлекс в Москву звонила... - не помню), как, но мы решились, заказали и купили. И, скажу вам - не разу не пожалели о своей покупке.<br>
				<img src="/img/JCuzkQ5M0NirlzaLAQ1Yg.jpg"/><br>
				Я сразу же проверила подлинность - все шилдики, все серийные номера - матрас оказался подлинным, оригинальным. В общем, не обманули... фуууу...<br>
				<img src="/img/6wDBkf97tGuSdhXV4XMig.jpg"/><br>
				Когда только ложились на матрас в магазине - ощущения были фантастические. Эффект памяти - тоже классная штука, ложишься, поднимаешься, и снова ложишься: матрас, словно помнит твое тело, опять принимает ту обтекаемость, что была, когда лежало ваше тело. Не слышно и не чувствовались пружины... Тело расслабляется, напряжение уходит. Было действительно полное ощущение релакса...<br>
				<img src="/img/3AeOVhISCVXxoYHeHedzA.jpg"/><br>
				А вот дома, когда одели новый наматрасник (единственное, что мы купили в ТЦ Аквилон, где прежде заказывали матрас), ощущения немного изменились. Сам матрас стал словно жестче (хотя со временем, видимо, наматрасник стал мягче и жесткость пропала), муж шевелился во сне, так я не слышала и не чувствовала вибраций по матрасу. Где-то была реклама - что можно поставить бокал с вином на матрас и рядом с ним прыгать, а бокал даже не шелохнется - так вот тут тоже самое. Какие там независимые пружины, о чем вы!... Пружинный матрас и рядом "не валялся" с беспружинным. Такое удовольствие от сна на матрасе с пружинами мы не разу не испытывали...<br>
				<img src="/img/SGuUh1ySFpWQ3ynLHTPzJA.jpg"/><br>
				В общем, на матрасе спать очень комфортно - спина отдыхает, мышцы расслабляются, не то что было после пружинного матраса Аскона, после сна на котором иногда болела спина. А когда повернулась пружина, муж (как я уже говорила) так вообще просыпался разбитым.<br>

				Еще плюс беспружинного оказался в том, что садится можно даже на край матраса - это позволительно, не то что в пружинном, где это делать запрещено. Беспружинный - не обязательно менять сторонами и крутить -верх/низ, он может спокойно пролежать и 5 лет в одном положении.<br>

				Кстати, в 2014 году матрас размером 140х200 см нам обошелся в 38900 руб. Теперь его стоимость (фев.2017) - 58400 р. Да уж... цены растут просто в прогрессии. Не знаю, отдала бы я сейчас за него такие деньги, но если бы была возможность - то, скорее всего да!<br>

				В общем, если есть возможность - обязательно посмотрите и полежите на беспружинных матрасах. В частности, Магнифлекс. Но, может, что еще приглянется.<br>
				<img src="/img/0tBXceDlajcf23MT2MJMA.jpg" alt="0tBXceDla"/><br>
				Единственное, скажу только за нас - своей покупкой мы очень довольны и не разу о ней не пожалели. Спим комфортно, высыпаемся, болей не испытываем, вообщем очень комфортно отдыхаем и восстанавливаемся за ночь.
				"
				</i>
			</p>
		</div>

			<div class="hnb_contlef">
					<img width="280" src="/img/otzyvy-01.jpg" height="196" title="Реальные отзывы покупателей матрасов Магнифлекс">
					<br>Ни одного отрицательного отзыва!</div>
				<div class="hnb_contrig">В России ортопедические матрасы Magniflex представлены с 1992 года, за все это время нами не было зафиксировано ни одного отрицательного отзыва или рецензии о нашей продукции. Не смотря на жесточайший контроль качества отгружаемого товара, у нас, как и у любой компании, случаются &nbsp;продажи матрасов с наличием производственных дефектов, однако такой товар мы незамедлительно меняем на новый идеального качества, кроме того процент таких случаев крайне мал - менее 0,01% от общего объемы продаж.
			<br><br>
			</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Naturcomfort' ,
		'cycle-name' => 'Ортопедический матрас Naturcomfort',
		'sizes' => array(
			
array('80x190',45800.00),
array('80x200',48300.00),
array('90x190 (с экспозиции шоу-рума)',41100.00),
array('90x190',51500.00),
array('90x200',54000.00),
array('120x190',68600.00),
array('120x200',72300.00),
array('140x190',80000.00),
array('140x200',84000.00),
array('160x190',91400.00),
array('160x195',93800.00),
array('160x200',96000.00),
array('170x200',102000.00),
array('180x200',108300.00),
array('200x200',120000.00),
		),

		
		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		// 'discount_koef' => array('date_start' => '31.10.2019', 'date_end' => '31.12.2019',
		// 	'sizes' => array(
		// 		'90x190 (с экспозиции шоу-рума)',
		// 	),
		// 	'prices' => array(
		// 		'90x190 (с экспозиции шоу-рума)' => 28800.00,
		// 	),
		// ), //скидка
		// 'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
		'yml_desc' => '
			Уровень комфорта: средней жесткости, комфортный. Magniflex Naturalmente дарит исключительный комфорт во время сна. Даже если просто прикоснуться к нему рукой, непременно ощущаешь необыкновенную мягкость, "бархатность" поверхности матраса. Этот волшебный эффект ему придают древесные волокна, входящие в состав тканей и материалов.
		',
		'yml_torgmail' => true,

	),
	array(
		'address' => 'memo-merino',
		'parent_address' => 'mattresses',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('chehol-coolmax-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-20','ortoped','vacu'),
		'name' => 'Ортопедический матрас OrthoMemo Merino',
		'title' => 'Матрас Memo Merino | Официальный сайт Magniflex',
		'description' => 'У нас Вы найдете матрасы Мемо. Magniflex Memo Merino - матрасы с высокими анатомическими свойствами.',
		'keywords' => 'матрас, мемо, magniflex, memo, merino',
		'span_title' => 'Эффект «памяти», 6 см Memoform, ткань CoolMax',
		'attr_cat_product1' => '20 см',
		'attr_cat_product2' => 'Несъемный Coolmax.',
		'attr_cat_product3' => 'Cредней мягкости/Жесткий',
		'small_img' => '/img/product/very_small/MemoMerino.jpg',
		'img_preview' => array('/img/memo-merino-magniflex-2.jpg', '/img/memo-merino-magniflex-1.jpg'),
		'img_carousel' => array('/img/product/big/Memo Merino.jpg','/img/memo-merino-magniflex-2.jpg', '/img/memo-merino-magniflex-1.jpg'),
		'small_img_alt' => 'ортопедический матрас Magniflex Merinos Memo Merino',
		'img' => '/img/product/big/Memo Merino.jpg',
		'img_alt' => 'Ортопедические матрасы Magniflex Merinos Memo Merino',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/Как открыть Magniflex MEMO MERINO.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'attr' => '
			<!--<a href="/skidki-magniflex/skidka-15-legendarnye-matrasy/"><div class="hnb_action15">АКЦИЯ! Только в сентябре - <b>15% СКИДКА</b> на этот матрас!</div></a>-->
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC, COOLMAX®</li>
			<li><b>Высота</b>:  20 см</li><li><b>Степень жесткости</b>: средней мягкости / жесткий
			
			
			<li><b>Срок службы</b>: не менее 15 лет</li></ul>
			
		',
	
		'desc' => '
				<div class="common_block_common fixcommon-block">
					<div class="half-width">
						<h3>Матрас Magniflex OrthoMemo Merino</h3>
						<p>Magniflex Orthomemo Merino – двусторонний по жесткости матрас, поставляется в рулонной упаковке по изобретенной технологии Magniflex. Позволяет изменять жесткость в процессе эксплуатации: если матрас с эффектом памяти хочется превратить в более жесткий – матрас достаточно перевернуть к верх ногами и продолжить эксплуатацию с его жесткой стороны. Матрас также имеет боковые ручки, что также удобно при переноске матраса или при заправке кровати постельным бельем или наматрасником. </p>
					</div>
					<div class="half-width_img">
						<img  src="/img/memo-merino-magniflex-1.jpg" alt="Ортопедический итальянский матрас Magniflex Memo Merino" >
					</div>
				</div>
				<div class="common_block_common fixcommon-block">

					<div class="half-width">
						<h3>Повышенный уровень комфорта</h3>
						<p>Термочувствительный материал MEMOFORM (Memory® Form) был разработан специально по заказу национального управления США по аэронавтике и исследованию космического пространства (NASA), для снижения давления на чувствительные участки тела астронавтов при длительных повышенных нагрузках в фиксированном положении. Пористая структура этого материала состоит из многочисленных ячеек открытой формы, представляющие собой микроскопические пружинки, сжимающиеся под действием веса и тепла человеческого тела и распрямляющиеся с задержкой в 6-7 секунд после снятия нагрузки. Memory® Form под воздействием тепла и веса человека подстраивается под контуры человека, лежащего на матрасе, "запоминает" форму тела, точно повторяя его рельеф, не "выталкивает" его, не оказывает на него ответного давления, вследствие чего во время сна тело получает наиболее равномерное распределение точечной нагрузки по всей поверхности матраса. Сон становится простым и приятным, позволяющим восстановить силы человеку за гораздо меньшее время, по сравнению со сном на обычном матрасе.</p>
					</div>

					<div class="half-width">
						<h3>Наполнители на основе натуральных материалов</h3>
						<p>Для внутреннего слоя Magniflex Orthomemo Merino используется два вида материалов. Пена Elioform Magniflex, составляющая 14 см в матрасе – один из самых жестких видов пен Magniflex, имеет высокую плотность и обеспечивает качественную и упругую поддержку спины. Выдерживает нагрузку до 160 кг на спальное место. Мелкопористая структура Elioform обеспечивает высокий уровень циркуляции воздуха, благодаря чему матрас становится «дышащим» и гарантирует свежесть и комфортность сна. Второй материал, используемый в матрасе — это пена с эффектом памяти Memoform Magnifoam, которая также имеет название Memory. 6 см пены с эффектом памяти гарантируют повышенные анатомические свойства, матрас способен повторять контуры тела, тем самым обеспечивая высокий уровень комфорта и исключая «эффект гамака.» Также выдерживает нагрузку до 160 кг на спальное место.</p>
					
						<h3>Долговечность и износостойкость</h3>
						<p>Заводской заявленный срок службы модели Magniflex Orthomemo Merino не менее десяти лет. Матрас поставляется в Россию очень давно и получены отзывы успешной эксплуатации матрасов более 12 лет! Кроме того, благодаря своей конструкции (в частности, отсутствию пружинного блока) матрас совершенно нечувствителен к вертикальным нагрузкам. На матрасе можно прыгать и играть детям, и он от этого не деформируется. Хотите стать счастливым обладателем такого матраса? Закажите его прямо сейчас с помощью онлайн-сервиса «Корзина» или по телефону.
						При покупке матрасов Magniflex предоставляются выгодные условия приобретения дополнительных аксессуаров (подушки и пледы), подробнее в разделе Акции.</p>
					</div>
				</div>
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlefsostav">
        <br><br>
				<img itemprop="image" src="/img/layer/layer-memo-merino.png" alt="состав матраса Memo Merino Magniflex">
				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX MEMO MERINO</b><br><br>
			Ортопедический матрас Memo Merino создан исключительно из природных, экологически чистых материалов.<br><br><br>
			<b>Чехол</b> несъемный, изготавливается из терморегулирующей ткани <a href="/production/Coolmax/">COOLMAX</a>.
			<br><br><br>
			<b>Внутренние слои</b>:<br>
			1 –   антистатическая прослойка<br>
			2  –  гиппоаллергенный терморегулирующий слой <br>
			3  –  основной наполнитель  материал с эффектом памяти <a href="/production/Memoform-Magnifoam/">MEMOFORM MAGNIFORM</a> (6 см)
			4  –  дополнительный слой <a href="/production/Eliocel/">ELIOCEL 40</a> (14 см)
			</p>
				</div>
			</div>
		',
		'recommend' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/rekomendovano-cito.jpg" height="196" title="Матрас рекомендован ЦИТО РФ">
					<br>
				Рекомендован Центральным Институтом <br>
					Травматологии и Ортопедии РФ
				</div>
				<div class="hnb_contrig">
				Ортопедические матрасы серии Magniflex Memo Merino рекомендованы ВСЕМ к каждодневному использованию Центральным Институтом Травматологии и Ортопедии РФ.
				</div>
			</div>
		',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 96-ти странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 96-ти странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => 'fdsf',

		'comfort' => '
			это одна из наиболее комфортных моделей
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Memo Merino' ,
		'cycle-name' => 'Ортопедический матрас Memo Merino',
		'sizes' => array(
			
array('80x200',58100.00),
array('90x190 (с экспозиции шоу-рума)',49700.00),
// array('90x190',62100.00),
array('90x200',65300.00),
array('120x200',86900.00),
// array('140x200',101300.00),
// array('160x200',115800.00),
// array('180x200',130200.00),
// array('200x200',144600.00),
		),


		// 'discount_koef' => array('date_start' => '31.10.2019', 'date_end' => '31.12.2020', 'price_koef' => 0.20),
		/*
		'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.10.2020',
            'sizes' => array(
				'80x200',
				'90x190',
				'90x190 (с экспозиции шоу-рума)',
				'90x200',
				'120x200',
			),
            'prices' => array(
				'80x200' => 37120.00,
				'90x190' => 39760.00,
				'90x190 (с экспозиции шоу-рума)' => 34800.00,
				'90x200' => 41760.00,
				'120x200' => 55600.00,
			),
		),
		*/
		'yml_desc' => '
			Уровень комфорта: очень комфортный. Высота: 20 см. Срок службы: не менее 15 лет. Матрас с высокими анатомическими свойствами.
		',
		'yml_torgmail' => true,
	),
	array(
		'address' => 'memorie-8',
		'parent_address' => 'collectio-memorie',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-20','ortoped','vacu'),
		'name' => 'Ортопедический матрас Memorie 8',
		'title' => 'Матрас Memorie 8 | Официальный сайт Magniflex',
		'description' => 'Ортопедический матрас Memorie Магнифлекс (Magniflex) Италия. Чехол вискоза, слой memoform эффект памяти. Средней жесткости матрас. Сделано в Италии.',
		'keywords' => 'матрас, Memorie, magniflex',
		'span_title' => 'Мультизональный, эффекты «памяти» и массажный',
		'attr_cat_product1' => '20 см',
		'attr_cat_product2' => 'Cъемный, Viscosa',
		'attr_cat_product3' => 'Cредняя',
		'small_img' => '/img/product/very_small/memorie-9-extra-small.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie.',
		'img' => '/img/product/big/memorie-8.jpg',
		'img_preview' => array('/img/product/big/memorie-8,9.jpg', '/img/product/big/memorie-8,9-2.jpg'),
		'img_carousel' => array('/img/product/big/memorie-8.jpg','/img/product/big/memorie-8,9.jpg', '/img/product/big/memorie-8,9-2.jpg'),
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie',	
		'video_html' => array('/img/101010.jpg', '/data/video/13 Memorie 8_1_1.mp4'),	
		'attr_cover_product' => 'Вискозное покрытие матраса, которое можно снимать и стирать, делает его мягким и шелковистым на ощупь и более эффективно рассеивает пот, способствуя дыханию.',
		'attr_padding_product' => 'Обивка Memoform идеально адаптируется к форме тела, создавая приятное ощущение легкости и расслабления. Гипоаллергенное волокно обеспечивает дополнительный комфорт на протяжении всей ночи.',
		'attr_comfort_product' => 'Специальный массажный эффект, создаваемый слоем в Eliosoft (5 см), обеспечивает дифференцированную поддержку пяти основных частей тела, способствуя микроциркуляции и постоянному массажу во время отдыха, создавая ощущение благополучия и комфорта в течение всей ночи.',
		'attr_drape_product' => 'Защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Memorabile-8_1.jpg',
		'block_attr_collections' => '',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, дышащий',
		'block_attr_comfort_level' => 'Средняя',
		'block_attr_height' => '20 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '10 лет',
		'block_attr_extra' => 'Multi-zone, Массаж',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'attr' => '
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  20 см</li><li><b>Степень жесткости</b>: Средняя</li>
			
			
			<li><b>Срок службы</b>: не менее 10 лет</li></ul><br>
			
		',
		'desc' => '
			
<div class="common_block_common">
			<div class="half-width">
			<h3>КОЛЛЕКЦИЯ МАТРАСОВ MEMORIE</h3>
                Ортопедический матрас Memorie – это новинка фабрики Magniflex, следующий уровень комфорта после серии упругих матрасов коллекции Stile и Pensiero. Матрас поставляется в разных высотах, изготавливается в Италии из натуральных материалов и имеет очень привлекательный внешний вид. Отличие всех моделей коллекции Memorie друг от друга только в высоте, материалы и жесткость одинаковые. Белоснежный чехол матраса выполнен из материала вискоза. Чехол съемный, на молнии.<br /><br />
                Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.<br /><br />
                Матрас имеет массажный слой высотой 5 см - Eliosoft. Это мультизональный слой, позволяющий обеспечивать повышенный уровень комфорта и воздействовать на разные точки спящего человека с разным давлением. 5 зональный материал Eliosoft находится под слоем Мемоформ - латексной пены с эффектом памяти. Поэтому неприятного ощущения от массажного слоя при эксплуатации матраса не проявляется.
		    </div>
            <div class="half-width_img"><img  src="/img/products/mattresses/memorie_mattress.jpg" alt="Ортопедический матрас Magniflex из коллекции Memorie"></div>
</div>
<iframe class="ifreme-video" width="100%" height="778px" src="https://www.youtube.com/embed/euJn6HfS6dw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	

		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Memorie 8',
		'cycle-name' => 'Ортопедический матрас Memorie 8',
		'sizes' => array(
array('80x190',43900.00),
array('80x200',46300.00),
array('90x190',49300.00),
array('90x200',51900.00),
array('120x190',65800.00),
array('120x200',69200.00),
array('140x190',76500.00),
array('140x200',80600.00),
array('160x190',87600.00),
array('160x200',92200.00),
array('180x200',103600.00),
array('200x200',115100.00),
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		//'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
		//'discount_koef' => array('date_start' => '13.07.2017', 'date_end' => '10.01.2022', 'price_koef' => 0.15, ), //скидка
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'sizes' => array('90x200', '160x200', '180x200'),
			//'prices' => array(
			//	'90x200' => 17600.00,
			//	'160x200' => 31300.00,
			//	'180x200' => 35100.00,
			//),
		//), //скидка
	),
	array(
		'address' => 'memorie-9',
		'parent_address' => 'collectio-memorie',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-22-26','ortoped','vacu'),
		'name' => 'Memorie 9',
		'title' => 'Матрас Memorie 9 | Официальный сайт Magniflex',
		'description' => 'Ортопедический матрас Memorie Магнифлекс (Magniflex) Италия. Чехол вискоза, слой memoform эффект памяти. Средней жесткости матрас. Сделано в Италии.',
		'keywords' => 'матрас, Memorie, magniflex',
		'span_title' => 'Мультизональный, эффекты «памяти» и массажный',
		'attr_cat_product1' => '22 см',
		'attr_cat_product2' => 'Съемный Viscose.',
		'attr_cat_product3' => 'Cредней жесткости',
		'small_img' => '/img/product/very_small/memorie-9-extra-small.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie',
		'img' => '/img/product/big/memorie-9.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie',		
		'small_img' => '/img/product/very_small/memorie-9-extra-small.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie.',
		'img' => '/img/product/big/memorie-8.jpg',
		'img_preview' => array('/img/product/big/memorie-8,9.jpg', '/img/product/big/memorie-8,9-2.jpg'),
		'img_carousel' => array('/img/product/big/memorie-9.jpg','/img/product/big/memorie-8,9.jpg', '/img/product/big/memorie-8,9-2.jpg'),
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie',		
		'video_html' => array('/img/101010.jpg', '/data/video/13 Memorie 8_1_1.mp4'),	
		'attr_cover_product' => 'Вискозное покрытие матраса, которое можно снимать и стирать, делает его мягким и шелковистым на ощупь и более эффективно рассеивает пот, способствуя дыханию.',
		'attr_padding_product' => 'Обивка Memoform идеально адаптируется к форме тела, создавая приятное ощущение легкости и расслабления. Гипоаллергенное волокно обеспечивает дополнительный комфорт на протяжении всей ночи.',
		'attr_comfort_product' => 'Специальный массажный эффект, создаваемый слоем в Eliosoft (5 см), обеспечивает дифференцированную поддержку пяти основных частей тела, способствуя микроциркуляции и постоянному массажу во время отдыха, создавая ощущение благополучия и комфорта в течение всей ночи.',
		'attr_drape_product' => 'Защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Memorabile-8_1.jpg',
		'block_attr_collections' => '',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, дышащий',
		'block_attr_comfort_level' => 'Средняя',
		'block_attr_height' => '22 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '10 лет',
		'block_attr_extra' => 'Multi-zone, Массаж',
		'attr' => '
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:   22 см</li><li><b>Степень жесткости</b>: Средняя</li>
			
			
			<li><b>Срок службы</b>: не менее 10 лет</li></ul><br>
			
		',
		'desc' => '
			

<div class="common_block_common">
			<div class="half-width">
			<h3>КОЛЛЕКЦИЯ МАТРАСОВ MEMORIE</h3>
                Ортопедический матрас Memorie – это новинка фабрики Magniflex, следующий уровень комфорта после серии упругих матрасов коллекции Stile и Pensiero. Матрас поставляется в разных высотах, изготавливается в Италии из натуральных материалов и имеет очень привлекательный внешний вид. Отличие всех моделей коллекции Memorie друг от друга только в высоте, материалы и жесткость одинаковые. Белоснежный чехол матраса выполнен из материала вискоза. Чехол съемный, на молнии.<br /><br />
                Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.<br /><br />
                Матрас имеет массажный слой высотой 5 см - Eliosoft. Это мультизональный слой, позволяющий обеспечивать повышенный уровень комфорта и воздействовать на разные точки спящего человека с разным давлением. 5 зональный материал Eliosoft находится под слоем Мемоформ - латексной пены с эффектом памяти. Поэтому неприятного ощущения от массажного слоя при эксплуатации матраса не проявляется.
		    </div>
            <div class="half-width_img"><img  src="/img/products/mattresses/memorie_mattress.jpg" alt="Ортопедический матрас Magniflex из коллекции Memorie"></div>
</div>

<div class="hnb_opis_sostava">

<div class="ama_fix_this">

<div class="ama_comfort_parts ama_fix_part">
<ul >
<li>
    <p>Viscose</p>
    <br>
    <a href="/production/Viscose/" target="_blank"><img title="Viscose" src="/img/viscosa.png" alt="Viscose" width="180"></a>
</li>
<li>
    <p>Elioform</p>
    <br>
    <a href="/production/Memoform-Magnifoam/" target="_blank"><img title="Elioform" src="/img/Elioform.png" alt="Elioform" width="180"></a>
</li>
<li>
    <p>Memoform</p>
    <br>
    <a href="/production/Memoform-Magnifoam/" target="_blank"><img title="Memoform" src="/img/magnifoam.png" alt="Elioform" width="180"></a>
</li>
</ul>
</div>
</div>

<div style="clear:both;"></div>
</div>
<iframe class="ifreme-video" width="100%" height="778px" src="https://www.youtube.com/embed/euJn6HfS6dw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Memorie 9',
		'cycle-name' => 'Ортопедический матрас Memorie 9',
		'sizes' => array(
			// array('80x190',37100.00),
			// array('80x200',39000.00),
			// array('90x190',41700.00),
			array('90x200 (открытый с экспозиции шоу-рума)',43900.00),
			// array('120x190',55500.00),
			// array('120x200',58400.00),
			// array('140x190',64600.00),
			// array('140x200',68200.00),
			// array('160x190',73800.00),
			//array('160x200',77700.00),
			//array('180x200',87600.00),
			// array('200x200',97100.00),

		),

/*
		'discount_koef' => array('date_start' => '31.10.2019', 'date_end' => '31.12.2020',
			'sizes' => array('90x200 (открытый с экспозиции шоу-рума)','180x200'),
			'prices' => array(
				'90x200 (открытый с экспозиции шоу-рума)' => 30800.00,
			),
		), //скидка
*/

	),
    /* элитные матрасы */
    array(
      'address' => 'carezza-10',
          'parent_address' => 'elitnye-carezza',
      'parent_address2' => 'mattresses',
          'address_collection' => 'rest/',
      'other_categories' => array('orthopedic_mattresses', 'new-mattresses', 'chehol-viscose-mattresses', 'vacuum-mattresses', 'mattresses-filter', 'height-22-25','ortoped','elit', 'elitnye-matrasy','vacu'),
      'parent_name' => 'Элитные матрасы',
      'name' => 'Ортопедический матрас Carezza 10',
      'title' => 'Матрас Carezza 10 | Официальный сайт Magniflex',
      'description' => 'У нас Вы найдете матрасы серии Carezza 10. 10 лет международной гарантии при покупке.',
      'keywords' => 'carezza, 10',
      'span_title' => 'Премиальная коллекция. Технология Aquabreeze',
	  'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'мягкий с упругой поддержкой.',
    //   'small_img' => '/img/product/small/Carezza 10 3-4 PEDANA.jpg',
      'small_img' => '/img/product/small/matress_carezza@2x.jpg',
      'small_img_alt' => 'Итальянский ортопедический матрас Carezza Magniflex',
      'img' => '/img/product/big/Carezza_10.jpg',
      'img_preview' => array('/img/product/magniflex_carezza2.jpg', '/img/product/magniflex_carezza_3.jpg', '/img/product/magniflex_carezza_4.jpg', '/img/product/magniflex_carezza_1.jpg', '/img/product/magniflex_carezza_2.jpg', '/img/product/big/memorie-8,9.jpg'),
      'img_carousel' => array('/img/product/big/Carezza_10.jpg','/img/product/magniflex_carezza2.jpg', '/img/product/magniflex_carezza_3.jpg', '/img/product/magniflex_carezza_4.jpg', '/img/product/magniflex_carezza_1.jpg', '/img/product/magniflex_carezza_2.jpg', '/img/product/big/memorie-8,9.jpg'),
	  'img_alt' => 'Итальянский ортопедический матрас Carezza Magniflex',
	  'video_html' => array('/img/8888.jpg', '/data/video/12 Carezza_1_1.mp4'),	
	  'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Cъемный, Viscosa',
		'attr_cat_product3' => 'Cредней жесткости/Cредней мягкости',
		// 'small_img' => '/img/product/very_small/memorie-9-extra-small.jpg',
		// 'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie.',
		// 'img' => '/img/product/big/memorie-8.jpg',
		// 'img_preview' => array('/img/product/big/memorie-8,9.jpg', '/img/product/big/memorie-8,9-2.jpg'),
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie',		
		'attr_cover_product' => 'Вискозное покрытие, мягкое и дышащее, делает матрас мягким и шелковистым на ощупь и более эффективно рассеивает пот, способствуя испарению.',
		'attr_padding_product' => 'Обивка из волокон Memosoft и Super Soft обеспечивает дополнительный комфорт на протяжении всей ночи.',
		'attr_comfort_product' => 'Слой в Aquabreeze (5 см), гибкий и невероятно удобный материал, благодаря своей структуре с открытыми порами и замечательной эластичностью обеспечивая мягкий, уютный и прохладный комфорт в течение ночи',
		'attr_drape_product' => '',
		'attr_layer_product' => 'Слой в Elioform (16 см) благодаря своей микроклеточной пенистой структуре высокой плотности обеспечивает более прочную ортопедическую поддержку позвоночника.',
		'image_composition' => '/img/Memorabile-8_1.jpg',
		'block_attr_collections' => 'Abbraccio',
		'block_attr_materials' => 'Super Soft fiber, Memosoft, Magnifoam Elioform, Aquabreeze',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, дышащий, дополнительный комфорт',
		'block_attr_comfort_level' => 'Мягкий',
		'block_attr_height' => '25 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '12 лет',
		'block_attr_extra' => 'Multi-zone, Массаж',
      'attr' => '
      <style>
      #popup_skidka{display:none;}
      #popup_skidka.hnb_displayskidka{display:block;}
      #breadcrumbs {
        background-image: url(/img/carezza-side.jpg);
        height: 250px;
      }
      </style>
        <ul><li>
        СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
        <li><b>Высота</b>:  25 см</li><li><b>Степень жесткости</b>: мягкий с упругой поддержкой.</li>
        <li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
      ',
      'composition' => '',
      'recommend' => '',
      'certificat' => '',
      'review' => '',
      'similar' => '',
      'tougher' => '',
      'softer' => '',
      'comfort' => '',
      'rec_buy' => '
        <div class="hnb_contarea">
        <div class="hnb_elite_content2">
		',
		'advant-tab'=>'
		
		',
		'desc' => '
          
		  <div class="hnb_elcont3">
					<div class="common_block_common">
							<div class="half-width">
							<h3>Ортопедический матрас Carezza 10</h3>
							<p> Коллекция матрасов Carezza – это сочетание самых передовых технологий и материалов в совокупности с изысканным итальянским дизайном. Поддержка, предлагаемая этими матрасами сравнима с эффектом обволакивающего объятия, длящимся всю ночь. Инновационные материалы сочетают мягкость с отличной способностью циркуляции воздуха, что придает невероятную свежесть и комфорт во время сна.
		                    
							</p>
							</div>
                     <div class="half-width_img"><img  src="/img/products/mattresses/сarezza_mattress.jpg" alt="Ортопедический матрас Magniflex из коллекции Carezza"></div>
			</div>
          </div> 
          
          
          
       
      ',
      'cycle-title' => 'Ортопедические матрасы Magniflex Carezza',
      'cycle-name' => 'Ортопедический матрас Carezza',
      'sizes' => array(
array('80x200',81000.00),
array('90x190',87800.00),
array('90x200',92600.00),
array('120x200',123400.00),
array('140x200',143600.00),
array('160x190',156000.00),
array('160x200',164000.00),
array('180x200',184800.00),
array('200x200',205000.00),
      ),

	  //'discount_koef' => array('date_start' => '01.02.2019', 'date_end' => '31.12.2020', 'price_koef' => 0.20),
     // 'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.11.2018', 'price_koef' => 0.15, ), //скидка
      //'discount_koef' => array(	//'date_start' => '1.9.2015', 'date_end' => '1.9.2025', - без даты начала и конца акции - она навсегда
        //'sizes' => array('160x200', '180x200', '200x200'),
        //'prices' => array(
          //'160x200' => 69800.00,
          //'180x200' => 78500.00,
                 // '200x200' => 87300.00,
        //),
      //), //ііііі
      'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: достаточно Жесткий Высота: 23 см. Срок службы: не менее 15 лет.',
      'yml_yandex' => array('160x200','180x200'),
    ),
    array(
		'address' => 'rest-9',
        'parent_address' => 'elitnye-rest',
		'parent_address2' => 'mattresses',
        'address_collection' => 'rest/',
		'other_categories' => array('orthopedic_mattresses','zhestkie-mattresses','srednie-mattresses', 'new-mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-22-25','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас Rest 9',
		'title' => 'Матрас Rest 9 | Официальный сайт Magniflex',
		'description' => 'У нас Вы найдете матрасы серии Rest 9. 10 лет международной гарантии при покупке.',
		'keywords' => 'rest, 9',
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring breathability.',
		'attr_padding_product' => 'The padding in Eliosoft and hypoallergenic fiber provides extra comfort and added support to the back throughout the night.',
		'attr_comfort_product' => 'The layer in Elioform (20 см), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Rest9layer.jpg',
		'block_attr_collections' => 'Rest',
		'block_attr_materials' => 'Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Breathable',
		'block_attr_comfort_level' => 'Firm',
		'block_attr_height' => '22 см',
		'text_under_main_image' => 'Матрас доступен в двух вариантах, отличающихся исключительно цветом боковой стороны матраса: на выбор, или черный или темно-синий цвета.',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'block_attr_extra' => '',
		'span_title' => 'Премиальная коллекция. Итальянская классика',
		'attr_cat_product1' => '23 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий/Средней жесткости',
		// 'small_img' => '/img/product/very_small/Rest 9.jpg',
		'small_img' => '/img/product/small/rest_collection_interior2x.jpg',
		'img_preview' => array('/img/Rest 9-2.jpg', '/img/Rest 9-3.jpg', '/img/Rest 9-4.jpg', '/img/Rest 9-5.jpg'),
		'small_img_alt' => '',
		'img' => '/img/product/big/Rest 9-1.jpg',
		'img_carousel' => array('/img/Rest 9-2.jpg', '/img/Rest 9-3.jpg', '/img/Rest 9-4.jpg', '/img/Rest 9-5.jpg'),
		'img_alt' => '',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/rest_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  23 см</li><li><b>Степень жесткости</b>: жесткий
			<li><b>Срок службы</b>: не менее 10 лет</li></ul><br>
		',
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'advant-tab'=>'
		<div class="contadvant">
			<span class="hnb_bigtytles">Преимущества матрасов коллекции Rest</span>
			<div id="hnb_3nelement">
				<div class="hnb_3nelementli" style="margin-top: -4px;margin-left: 0px;opacity: 1;">
					<img itemprop="image" src="/img/statrest.png" alt="Классический матрас">
					<span>Классика</span>Классика предполагает чувство меры: в форме, объеме и цвете образа, придающее гармонию и красоту.
				</div>
				<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
					<img itemprop="image" src="/img/medvrest.png" alt="Мягкий матрас">
					<span>Комфортный</span>
					Дополнительный комфорт придает материал Memoform ( 2 см).
				</div>

				<div class="hnb_3nelementli" style="position: relative; left: 0px; opacity: 1;">
					<img style="padding-top:7px;" src="/img/lux.png" alt="Отличные ортопедические свойства - Magniflex">
					
					<span>Эффект памяти</span>
					Непревзойденные
					ортопедические свойства:
					идеальная поддержка
					Вашего позвоночника!
				</div>
			</div>
		</div>
		',
		'rec_buy' => '
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">

</div></div>
',
'desc' => '

<div class="hnb_contmy">

			<div class="common_block_common ama-parallax-0">
				<div class="half-width">
				<h3>Классические элитные матрасы Rest</h3>
				<p>Настоящая классика всегда в моде. Очень удачная коллекция, сочетающая отличные ортопедические свойства и комфорт. Для создания используются исключительно высококачественные ткани и материалы: мягкий Memoform, отвечающий за комфорт и эффект памяти, Elioform обеспечивающий превосходные ортопедические свойства и Eliosoft, изготовленный из натурального латекса.<br />
				Матрасы двухсторонние - можно использовать разные стороны, в зависимости от предпочтений спящих на нем людей.
				</p>
				</div>
				<div class="coin-slider">
				<img src="/img/rest.jpg" alt="ортопедический матрас из коллеции Rest Magniflex">
				</div>
			</div>
				
			</div>
			<div class="common_block_common ama-parallax-1">
				<div class="half-width">
					<h3>Эффект «памяти» от Memoform</h3>
					<img class="two-width" src="/img/Memoform-guanciale.jpg" alt="Memoform Magniflex. Эффект памяти">
					<p class="text-jus">
                    Матрасы коллекции "Rest" включает в себя слой  Memoform - материал, который идеально адаптируется к изгибам тела, Elioform, который в свою очередь обеспечивает и гарантирует правильную поддержку спины. Слой Super Soft Fiber позволяет чувствовать расслабление и мягкость на матрасе, а вискозная ткань чехла осуществляет максимум воздухообмена за счет своей структуры.
                    </p>
				</div>
				<div class="half-width">
					<h3>Ортопедический, беспружинный. Две стороны для эксплуатации</h3>
					<p class="text-jus">
                    Как говорят сами итальянцы об этом матрасе: "i grandi classici non passano mai di moda" ("Настоящая классика всегда в моде"). Представленная модель из коллекции "Classico" - отличается особой сдержанностью, строгостью, пропорциональностью и достаточно современной элегантностью. Никаких остромодных или нефункциональных деталей. Рисунок флорентийской лилии по периметру матраса - настоящий тренд в дизайне интерьеров.<br /><br /> 
                    Матрас можно использовать с двух сторон. Получается полноценный двусторонний матрас. С одной стороны он будет жестче, так как сверху матраса идет слой Мемоформ и супер фибра, а снизу матрас не содержит этих слоев, за счет чего получается более упругим. Эксплуатация матраса на другой стороне технологически предусмотрена и вполне возможна.<br /><br />
                    Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.
					</p>
				</div>
			</div>
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
			<source src="/data/video/Memoform video 1.mp4"  />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		
		'cycle-title' => 'Ортопедические матрасы Magniflex Rest 9',
		'cycle-name' => 'Ортопедический матрас Rest 9',
		'sizes' => array(			
array('80x200',50000.00),
array('90x190',53100.00),
array('90x200 (с экспозиции шоу-рума)',44800.00),
array('90x200',56100.00),
array('120x190',70900.00),
array('120x200',74600.00),
array('140x190',82700.00),
array('140x200',86800.00),
array('160x190',94400.00),
array('160x200',99400.00),
array('180x200',111600.00),
array('200x200',124000.00),
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		// 'discount_koef' => array(	//'date_start' => '1.9.2015', 'date_end' => '1.9.2025', - без даты начала и конца акции - она навсегда
		// 	'sizes' => array('90x200 (с экспозиции шоу-рума)'),
		// 	'prices' => array(
		// 		'90x200 (с экспозиции шоу-рума)' => 31400.00,
		// 	),
		// ), //ііііі
		'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: достаточно жесткий. Высота: 23 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200','180x200'),

	),
	array(
		'address' => 'rest-10',
		'parent_address' => 'elitnye-rest',
		'parent_address2' => 'mattresses',
        'address_collection' => 'rest/',
		'other_categories' => array('orthopedic_mattresses','srednie-mattresses','soft_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-22-25','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас Rest 10',
		'title' => 'Матрас Rest 10 | Официальный сайт Magniflex',
		'description' => 'У нас Вы найдете матрасы Rest 10. Срок службы на матрасы из данной коллекции составляет не менее 15 лет.',
		'keywords' => 'rest, 10',
		'span_title' => 'Премиальная коллекция. Итальянская классика',
		'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Cредней жесткости/Мягкий',
		// 'small_img' => '/img/product/very_small/Rest 10.jpg',
		'small_img' => '/img/product/small/rest_collection_interior2x.jpg',
		'img_preview' => array('/img/Rest10-2.jpg', '/img/Rest10-3.jpg', '/img/Rest10-4.jpg', '/img/Rest10-5.jpg'),
		'img_carousel' => array('/img/product/big/Rest10-1.jpg','/img/Rest10-2.jpg', '/img/Rest10-3.jpg', '/img/Rest10-4.jpg', '/img/Rest10-5.jpg'),
		'small_img_alt' => 'элитный матрас Magniflex Rest 10',
		'img' => '/img/product/big/Rest10-1.jpg',
		'img_alt' => 'элитный матрас Magniflex Rest 10',
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring breathability.',
		'attr_padding_product' => 'The padding in Eliosoft and hypoallergenic fiber provides extra comfort and added support to the back throughout the night.',
		'attr_comfort_product' => 'The layer in Elioform (23 см), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Rest10layer.jpg',
		'block_attr_collections' => 'Rest',
		'text_under_main_image' => 'Матрас доступен в двух вариантах, отличающихся исключительно цветом боковой стороны матраса: на выбор, или черный или темно-синий цвета.',
		'block_attr_materials' => 'Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Breathable',
		'block_attr_comfort_level' => 'Firm',
		'block_attr_height' => '25 см',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'block_attr_extra' => '',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/rest_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  25 см</li><li><b>Степень жесткости</b>: средней жесткости</li>
			
			
			<li><b>Срок службы</b>: не менее 10 лет</li></ul><br>
		',
		
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'advant-tab'=>'
		<div class="contadvant">
			<span class="hnb_bigtytles">Преимущества матрасов коллекции Rest</span>

			<div id="hnb_3nelement">

				<div class="hnb_3nelementli" style="margin-top: -4px;margin-left: 0px;opacity: 1;">
					<img itemprop="image" src="/img/statrest.png" alt="Классический матрас">
					
					<span>Классика</span>
					Классика предполагает чувство меры: в форме, объеме и цвете образа, придающее гармонию и красоту.
				</div>

				<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
					<img itemprop="image" src="/img/medvrest.png" alt="Мягкий матрас">
					
					<span>Комфортный</span>
					Дополнительный комфорт придает материал Memoform ( 2 см).
				</div>

				<div class="hnb_3nelementli" style="position: relative; left: 0px; opacity: 1;">
					<img style="padding-top:7px;" src="/img/lux.png" alt="Отличные ортопедические свойства - Magniflex">
					
					<span>Эффект памяти</span>
					Непревзойденные
					ортопедические свойства:
					идеальная поддержка
					Вашего позвоночника!
				</div>
			</div>
		</div>
		',
		'desc' => '

<div class="hnb_contmy">

			<div class="common_block_common ama-parallax-0">
				<div class="half-width">
				<h3>Классические элитные матрасы Rest</h3>
				<p>Настоящая классика всегда в моде. Очень удачная коллекция, сочетающая отличные ортопедические свойства и комфорт. Для создания используются исключительно высококачественные ткани и материалы: мягкий Memoform, отвечающий за комфорт и эффект памяти, Elioform обеспечивающий превосходные ортопедические свойства и Eliosoft, изготовленный из натурального латекса.<br />
				Матрасы двухсторонние - можно использовать разные стороны, в зависимости от предпочтений спящих на нем людей.
				</p>
				</div>
				<div class="coin-slider">
				<img src="/img/rest.jpg" alt="ортопедический матрас из коллеции Rest Magniflex">
				</div>
			</div>
				
			</div>
			<div class="common_block_common ama-parallax-1">
				<div class="half-width">
					<h3>Эффект «памяти» от Memoform</h3>
					<img class="two-width" src="/img/Memoform-guanciale.jpg" alt="Memoform Magniflex. Эффект памяти">
					<p class="text-jus">
                    Матрасы коллекции "Rest" включает в себя слой  Memoform - материал, который идеально адаптируется к изгибам тела, Elioform, который в свою очередь обеспечивает и гарантирует правильную поддержку спины. Слой Super Soft Fiber позволяет чувствовать расслабление и мягкость на матрасе, а вискозная ткань чехла осуществляет максимум воздухообмена за счет своей структуры.
                    </p>
				</div>
				<div class="half-width">
					<h3>Ортопедический, беспружинный. Две стороны для эксплуатации</h3>
					<p class="text-jus">
                    Как говорят сами итальянцы об этом матрасе: "i grandi classici non passano mai di moda" ("Настоящая классика всегда в моде"). Представленная модель из коллекции "Classico" - отличается особой сдержанностью, строгостью, пропорциональностью и достаточно современной элегантностью. Никаких остромодных или нефункциональных деталей. Рисунок флорентийской лилии по периметру матраса - настоящий тренд в дизайне интерьеров.<br /><br /> 
                    Матрас можно использовать с двух сторон. Получается полноценный двусторонний матрас. С одной стороны он будет жестче, так как сверху матраса идет слой Мемоформ и супер фибра, а снизу матрас не содержит этих слоев, за счет чего получается более упругим. Эксплуатация матраса на другой стороне технологически предусмотрена и вполне возможна.<br /><br />
                    Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.
					</p>
				</div>
			</div>
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
			<source src="/data/video/Memoform video 1.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'cycle-title' => 'Ортопедические матрасы Magniflex Rest 10',
		'cycle-name' => 'Ортопедический матрас Rest 10',
		'sizes' => array(
			
array('80x200',55000.00),
array('90x190',58700.00),
array('90x200 (с экспозиции шоу-рума)',49300.00),
array('90x200',61700.00),
array('120x190',78100.00),
array('120x200',82400.00),
array('140x190',91300.00),
array('140x200',95900.00),
array('160x190',104200.00),
array('160x200',109600.00),
array('180x200',123400.00),
array('200x200',136900.00),
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		// 'discount_koef' => array(	//'date_start' => '1.9.2015', 'date_end' => '1.9.2025', - без даты начала и конца акции - она навсегда
		// 	'sizes' => array('90x200 (с экспозиции шоу-рума)'),
		// 	'prices' => array(
		// 		'90x200 (с экспозиции шоу-рума)' => 34600.00,
		// 	),
		// ), //ііііі

		'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: средней жесткости. Высота: 25 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200'),
	),
	array(
		'address' => 'rest-12',
		'parent_address' => 'elitnye-rest',
		'parent_address2' => 'mattresses',
        'address_collection' => 'rest/',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','soft_mattresses', 'height-26','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас Rest 12',
		'title' => 'Матрас Rest 12 | Официальный сайт Magniflex',
		'description' => 'Предлагаем купить матрасы серии Rest 12. Данная модель отличается повышенным комфортом и прекрасными ортопедическими свойствами.',
		'keywords' => 'rest, 12',
		'span_title' => 'Премиальная коллекция. Итальянская классика',		
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Cредней мягкости/Мягкий',
		// 'small_img' => '/img/product/very_small/Rest 12.jpg',
		'small_img' => '/img/product/small/matress_rest@2x.jpg',
		'img_preview' => array('/img/Rest-detail-1.jpg', '/img/Rest-detail-2.jpg', '/img/Rest-detail-4.jpg', '/img/Rest-detail-5.jpg', '/img/product/53fbba65ece2d14cbe9b7d508d90fb60.jpg'),
		'img_carousel' => array('/img/product/big/Rest 12.jpg','/img/Rest-detail-1.jpg', '/img/Rest-detail-2.jpg', '/img/Rest-detail-4.jpg', '/img/Rest-detail-5.jpg', '/img/product/53fbba65ece2d14cbe9b7d508d90fb60.jpg'),
		'small_img_alt' => 'элитный матрас Magniflex Rest 12',
		'img' => '/img/product/big/Rest 12.jpg',
		'img_alt' => 'элитный матрас Magniflex Rest 12',
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring breathability.',
		'attr_padding_product' => 'The padding in Eliosoft and hypoallergenic fiber provides extra comfort and added support to the back throughout the night.',
		'attr_comfort_product' => 'The layer in Elioform (27 см), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Stiloso-12.jpg',
		'block_attr_collections' => 'Rest',
		'block_attr_materials' => 'Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Breathable',
		'block_attr_comfort_level' => 'Firm',
		'block_attr_height' => '30 см',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'block_attr_extra' => 'Top of the range',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/rest_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  30 (!!!) см</li><li><b>Степень жесткости</b>: средней мягкости<!--средней мягкости, очень комфортный!--></li>
			
			
			<li><b>Срок службы</b>: не менее 15 лет. 10 лет международной гарантии.</li></ul><br>
		',
		
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'advant-tab'=>'
		<div class="contadvant">
			<span class="hnb_bigtytles">Преимущества матрасов коллекции Rest</span>

			<div id="hnb_3nelement">

				<div class="hnb_3nelementli" style="margin-top: -4px;margin-left: 0px;opacity: 1;">
					<img itemprop="image" src="/img/statrest.png" alt="Классический матрас">
					
					<span>Классика</span>
					Классика предполагает чувство меры: в форме, объеме и цвете образа, придающее гармонию и красоту.
				</div>

				<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
					<img itemprop="image" src="/img/medvrest.png" alt="Мягкий матрас">
					
					<span>Комфортный</span>
					Дополнительный комфорт придает материал Memoform ( 2 см).
				</div>

				<div class="hnb_3nelementli" style="position: relative; left: 0px; opacity: 1;">
					<img style="padding-top:7px;" src="/img/lux.png" alt="Отличные ортопедические свойства - Magniflex">
					
					<span>Эффект памяти</span>
					Непревзойденные
					ортопедические свойства:
					идеальная поддержка
					Вашего позвоночника!
				</div>
			</div>
		</div>
		',
		'desc' => '

<div class="hnb_contmy">

			<div class="common_block_common ama-parallax-0">
				<div class="half-width">
				<h3>Классические элитные матрасы Rest</h3>
				<p>Настоящая классика всегда в моде. Очень удачная коллекция, сочетающая отличные ортопедические свойства и комфорт. Для создания используются исключительно высококачественные ткани и материалы: мягкий Memoform, отвечающий за комфорт и эффект памяти, Elioform обеспечивающий превосходные ортопедические свойства и Eliosoft, изготовленный из натурального латекса.<br />
				Матрасы двухсторонние - можно использовать разные стороны, в зависимости от предпочтений спящих на нем людей.
				</p>
				</div>
				<div class="coin-slider">
				<img src="/img/rest.jpg" alt="ортопедический матрас из коллеции Rest Magniflex">
				</div>
			</div>
				
			</div>
			<div class="common_block_common ama-parallax-1">
				<div class="half-width">
					<h3>Эффект «памяти» от Memoform</h3>
					<img class="two-width" src="/img/Memoform-guanciale.jpg" alt="Memoform Magniflex. Эффект памяти">
					<p class="text-jus">
                    Матрасы коллекции "Rest" включает в себя слой  Memoform - материал, который идеально адаптируется к изгибам тела, Elioform, который в свою очередь обеспечивает и гарантирует правильную поддержку спины. Слой Super Soft Fiber позволяет чувствовать расслабление и мягкость на матрасе, а вискозная ткань чехла осуществляет максимум воздухообмена за счет своей структуры.
                    </p>
				</div>
				<div class="half-width">
					<h3>Ортопедический, беспружинный. Две стороны для эксплуатации</h3>
					<p class="text-jus">
                    Как говорят сами итальянцы об этом матрасе: "i grandi classici non passano mai di moda" ("Настоящая классика всегда в моде"). Представленная модель из коллекции "Classico" - отличается особой сдержанностью, строгостью, пропорциональностью и достаточно современной элегантностью. Никаких остромодных или нефункциональных деталей. Рисунок флорентийской лилии по периметру матраса - настоящий тренд в дизайне интерьеров.<br /><br /> 
                    Матрас можно использовать с двух сторон. Получается полноценный двусторонний матрас. С одной стороны он будет жестче, так как сверху матраса идет слой Мемоформ и супер фибра, а снизу матрас не содержит этих слоев, за счет чего получается более упругим. Эксплуатация матраса на другой стороне технологически предусмотрена и вполне возможна.<br /><br />
                    Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.
					</p>
				</div>
			</div>
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
			<source src="/data/video/Memoform video 1.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'cycle-title' => 'Ортопедические матрасы Magniflex Rest 12',
		'cycle-name' => 'Ортопедический матрас Rest 12',
		'sizes' => array(
array('80x200',64800.00),
// array('90x200',72800.00),
array('160x200',129200.00),
array('180x200',145300.00),
// array('195x200 (не в рулоне, новый)',125800.00)
		),

/*
		'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2020',
			'sizes' => array('80x200','195x200 (не в рулоне, новый)','90x200','160x200','200x200'),
			'prices' => array(
                '80x200' => 41440.00,
                '195x200 (не в рулоне, новый)' => 88100.00,
                // '90x200' => 49385.00,
                //  '160x200' => 87805.00,
                // '200x200' => 103520.00,
			),
		), //скидка 
*/
		'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: мягкий. Идеальная поддержка Вашего позвоночника!. Высота: 30 см. Срок службы: не менее 15 лет.',
	),
	array(
		'address' => 'comfort-plus-10',
		'parent_address' => 'elitnye-comfort-delux',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses','soft_mattresses','srednie-mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','dual-reguliruemie-mattresses', 'height-22-25','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас New Comfort Plus 10',
		'title' => 'Элитный матрас New Comfort Plus 10 | Официальный сайт Magniflex',
		'description' => 'Матрасы коллекции Magniflex Comfort Plus на официальном сайте: гарантия подлинности, самой выгодной цены и быстрой доставки.',
		'keywords' => 'comfort plus, New Comfort Plus, матрасы comfort plus',
		'span_title' => 'Премиальная коллекция',		
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/comfort_delux_250.png);
			height: 250px;
		}
		</style>
			<ul>
            <li>СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, OUTLAST®, EC</li>
			<li><b>Высота</b>:  25 см</li><li><b>Степень жесткости</b>: средней мягкости/средней жесткости, регулируемая Dual Core</li>
			<li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
		',
		'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Съемный outlast/Viscose.',
		'attr_cat_product3' => 'Dual, регулируемая',
		// 'small_img' => '/img/product/very_small/comfort-plus-10.jpg',
		'small_img' => '/img/product/small/matress_comfort_plus@2x.jpg',
		'small_img_alt' => '',
		'video' => array('https://www.youtube.com/embed/Yeqh6g2yHs8?language=russian'),
		'img' => '/img/product/new-comfort-plus-10.jpg',
		'img_preview' => array('/img/product/big/comfort-plus-10-2-new.jpg', '/img/product/big/comfort-plus-10-3-new.jpg', '/img/product/big/comfort-plus-10-4-new.jpg', '/img/product/big/comfort-plus-10-5-new.jpg'),
		'img_carousel' => array('/img/product/new-comfort-plus-10.jpg','/img/product/big/comfort-plus-10-2-new.jpg', '/img/product/big/comfort-plus-10-3-new.jpg', '/img/product/big/comfort-plus-10-4-new.jpg', '/img/product/big/comfort-plus-10-5-new.jpg'),
		'img_alt' => '',
		'attr_cover_product' => 'Регулирующая температуру ткань Outlast®, которая образует покрытие, создает идеальный микроклимат в течение ночи, пока вискоза делает ее мягкой на ощупь. Чехол матраса можно полностью снять и легко стирать.',
		'attr_padding_product' => 'Обивка Memoform идеально адаптируется к форме тела, создавая приятное ощущение легкости и расслабления. Прокладка из гипоаллергенного волокна обеспечивает дополнительный комфорт.',
		'attr_comfort_product' => 'Технология Dual Core позволяет получить различную степень комфорта, просто перевернув сердцевину матраса. Сторона в Memoform (3 см) и Eliosoft (3 см) обеспечивает комфорт «средней фирмы» и удобную, но прочную поддержку. Сторона в Elioform, напротив, обеспечивает «твердый» комфорт и надежную поддержку вашей спины.',
		'attr_layer_product' => 'Слой в Elioform (21 см) благодаря своей микроклеточной пенистой структуре высокой плотности обеспечивает более прочную ортопедическую поддержку позвоночника.',
		'image_composition' => '/img/Comfort-dual-10-soft_1.jpg',
		'block_attr_collections' => 'Dolce Vita',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft',
		'block_attr_coating' => 'Outlast®, Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, Терморегулирующий, Дополнительный комфорт, Воздухопроницаемый',
		'block_attr_comfort_level' => 'Средней мягкости / Средний',
		'block_attr_height' => '25 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '12 лет',
		'block_attr_extra' => 'Dual Core, Cert. Medical Device',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',

		'advant-tab'=>'
		
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
			<video controls="controls" tabindex="0" style="width:100%;" muted>
			<source src="/data/video/Martìn Castrogiovanni for Comfort-plus.mp4" />
			<object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'desc' => '
<div class="common_block_common ama-parallax-0">
				<div class="half-width">
					<h3>Ортопедический матрас премиум класса New Comfort Plus</h3>
					<strong><i>С технологией Dual Core</i></strong>
					<p>
					Матрасы Premium класса, одни из самых лучших в своем классе! Возможность моделирования оптимального уровня комфорта из нескольких возможных! Отличные анатомический и ортопедический эффекты, потрясающие терморегулирующие свойства.
                	</p>
				</div>
				<div class="coin-slider">
					<img alt="Ортопедический матрас премиум класса New Comfort Plus" src="/img/product/matress_comfort_plus_10.jpg">
				</div>
			</div>
			<br /><br />
			
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>СЪЕМНЫЙ ТЕРМОРЕГУЛИРУЮЩИЙ ЧЕХОЛ OUTLAST®</h3>
					<!--<img class="two-width" src="/img/products/mattresses/magniflex_comfort.jpg" alt="Комфорт от Magniflex">-->
					<p class="text-jus">Съемный терморегулирующий чехол с запатентованной технологией Outlast. Элегантная объемная ткань.</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3>РАЗНЫЕ ПОЛОВИНКИ – РАЗНАЯ ЖЕСТКОСТЬ (ТЕХНОЛОГИЯ DUAL CORE)</h3>
					<p class="text-jus">
Технология Dual Core позволяет изменить жесткость половинки матраса за считанные минуты. Суть технологии проста: двуспальные матрасы состоят из двух блоков. Для смены жесткости необходимо расстегнуть чехол (на молнии) и перевернуть на другую сторону блок. Одна сторона блока жесткая, а другая – мягкая. Несмотря на то, что матрас состоит из двух разных блоков, стык между ними абсолютно незаметен и не мешает сну благодаря специально разработанному плотному чехлу, включающего в себя 2 см слой инновационного материала с эффектом памяти – Memoform.<br />
Это очень удобно и практично. Если один человек предпочитает мягкий матрас, а его партнер – жесткий, то им достаточно повернуть блоки в нужные им положения и наслаждаться комфортом.
					<!--<img class="two-width" src="/img/products/mattresses/rim_kolizei.jpg" alt="Рим вечный город">-->
					</p>
				</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex New Comfort Plus 10' ,
		'cycle-name' => 'Ортопедический матрас New Comfort Plus 10',
		'sizes' => array(
array('80x200',70900.00),
array('90x190',75700.00),
array('90x200',79600.00),
array('120x200',106000.00),
array('140x190',115500.00),
array('140x200',123600.00),
array('160x190',132100.00),
array('160x200',138900.00),
array('180x200',158800.00),
array('200x200',176500.00),
		),
		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		// 'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
		// 	'sizes' => array('90x200 (не в рулоне, новый)', '160x200 (не в рулоне, новый)'),
		// 	'prices' => array(
        //         '90x200 (не в рулоне, новый)' => 44600.00,
        //         // '160x200 (не в рулоне, новый)' => 77800.00,
		// 	),
		// ), //скидка
		// 'yml_desc' => 'Матрасы Premium класса! Моделируемый уровень комфорта - технология  Dual Core. Съемный терморегулирующий чехол с запатентованной технологией Outlast. Эффект памяти.  Высота: 25 см. Срок службы: не менее 15 лет.',
	),
	array(
		'address' => 'comfort-plus-12',
		'parent_address' => 'elitnye-comfort-delux',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','dual-reguliruemie-mattresses','soft_mattresses', 'height-26','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас New Comfort Plus 12',
		'title' => 'Матрасы New Comfort Plus 12 | Официальный сайт Magniflex',
		'description' => 'Ортопедические матрасы премиальной коллекции Magniflex Comfort Plus на официальном сайте: гарантия самой выгодной цены, подлинности и качества. Быстрая доставка до дверей!',
		'keywords' => 'new comfort plus 12, матрасы комфорт плюс, матрасы comfort plus',
		'span_title' => 'Премиальная коллекция',
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Съемный',
		'attr_cat_product3' => 'Dual, регулируемая',
		// 'small_img' => '/img/product/very_small/comfort-plus-12.jpg',
		'small_img' => '/img/product/small/matress_comfort_plus@2x.jpg',
		'small_img_alt' => 'элитный матрас Magniflex New Comfort Plus 12',
		'img' => '/img/product/new-comfort-plus-12.jpg',
		'img_preview' => array('/img/product/big/comfort-plus-10-2-new.jpg', '/img/product/big/comfort-plus-10-3-new.jpg', '/img/product/big/comfort-plus-10-4-new.jpg', '/img/product/big/comfort-plus-10-5-new.jpg'),
		'img_carousel' => array('/img/product/new-comfort-plus-12.jpg','/img/product/big/comfort-plus-10-2-new.jpg', '/img/product/big/comfort-plus-10-3-new.jpg', '/img/product/big/comfort-plus-10-4-new.jpg', '/img/product/big/comfort-plus-10-5-new.jpg'),
		'img_alt' => 'элитный матрас Magniflex New Comfort Plus 12',
		'attr_cover_product' => 'Регулирующая температуру ткань Outlast®, которая образует покрытие, создает идеальный микроклимат в течение ночи, пока вискоза делает ее мягкой на ощупь. Чехол матраса можно полностью снять и легко стирать.',
		'attr_padding_product' => 'Обивка Memoform идеально адаптируется к форме тела, создавая приятное ощущение легкости и расслабления. Прокладка из гипоаллергенного волокна обеспечивает дополнительный комфорт.',
		'attr_comfort_product' => 'Технология Dual Core позволяет получить различную степень комфорта, просто перевернув сердцевину матраса. Сторона в Memoform (3 см) и Eliosoft (3 см) обеспечивает комфорт «средней фирмы» и удобную, но прочную поддержку. Сторона в Elioform, напротив, обеспечивает «твердый» комфорт и надежную поддержку вашей спины.',
		'attr_layer_product' => 'Слой в Elioform (21 см) благодаря своей микроклеточной пенистой структуре высокой плотности обеспечивает более прочную ортопедическую поддержку позвоночника.',
		'image_composition' => '/img/Comfort-dual-10-soft_1.jpg',
		'block_attr_collections' => 'Dolce Vita',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft',
		'block_attr_coating' => 'Outlast®, Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, Терморегулирующий, Дополнительный комфорт, Воздухопроницаемый',
		'block_attr_comfort_level' => 'Средней мягкости / Средний',
		'block_attr_height' => '25 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '12 лет',
		'block_attr_extra' => 'Dual Core, Cert. Medical Device',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/comfort_delux_250.png);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, OUTLAST®, EC</li>
			<li><b>Высота</b>:  30 см</li><li><b>Степень жесткости</b>: средней мягкости/мягкий, регулируемая Dual Core</li>
			<li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
		',
		
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'advant-tab'=>'
		
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/Martìn Castrogiovanni for Comfort-plus.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contcenter">
						<div class="half-width">
							<h3>Ортопедический матрас премиум-класса коллекции Comfort Plus</h3>
							<strong><i>Технология Outlast</i></strong>
							<p>
							Матрасы Premium класса, одни из самых лучших в своем классе! Возможность моделирования оптимального уровня комфорта из нескольких возможных! Отличные анатомический и ортопедический эффекты, потрясающие терморегулирующие свойства.
							</p>
						</div>
						<div class="coin-slider">
							<img alt="Ортопедический матрас премиум-класса New Comfort Plus" src="/img/product/matress_comfort_plus_12.jpg">
						</div>
				</div>
			</div>
			<br /><br />
		
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Съемный терморегулирующий чехол Outlast®</h3>
					<p class="text-jus">
Съемный терморегулирующий чехол с запатентованной технологией Outlast. Элегантная объемная ткань.
            		</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3>Разные половинки – разная жесткость (технология Dual Core)</h3>
					<p class="text-jus">
Технология Dual Core позволяет изменить жесткость половинки матраса за считанные минуты. Суть технологии проста: двуспальные матрасы состоят из двух блоков. Для смены жесткости необходимо расстегнуть чехол (на молнии) и перевернуть на другую сторону блок. Одна сторона блока жесткая, а другая – мягкая, стык между блоками абсолютно незаметен и не мешает сну, благодаря специально разработанному плотному чехлу, включающего в себя 2 см слой инновационного материала с эффектом памяти – Memoform.<br />
Это очень удобно и практично. Если один человек предпочитает мягкий матрас, а его партнер – жесткий, то им достаточно повернуть блоки в нужные им положения и наслаждаться комфортом.
					<!--<img class="two-width" src="/img/products/mattresses/rim_kolizei.jpg" alt="Рим вечный город">-->
					</p>
				</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex New Comfort Plus 12' ,
		'cycle-name' => 'Ортопедический матрас New Comfort Plus 12',
		'sizes' => array(
array('80x200',82000.00),
array('90x190',87400.00),
array('90x200',92200.00),
array('120x200',122800.00),
array('140x190',135900.00),
array('140x200',142800.00),
array('160x190',155300.00),
array('160x200',163200.00),
array('180x200',183500.00),
array('200x200',204000.00),
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		// 'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2018',
		// 	'sizes' => array('180x200 (не в рулоне, новый)'),
		// 	'prices' => array(
		// 		'180x200 (не в рулоне, новый)' => 117440.00
		// 	),
		// ), //скидка
		// 'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
    ),
	
	array(
		'address' => 'freshgel-10',
		'parent_address' => 'elitnye-freshgel',
		'parent_address2' => 'mattresses',
        'address_collection' => 'freshgel',
		'other_categories' => array('orthopedic_mattresses','srednie-mattresses','soft_mattresses', 'new-mattresses','s-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-22-25','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные FreshGel',
		'name' => 'Ортопедический матрас FreshGel 10',
		'title' => 'Матрас FreshGel 10 | Официальный сайт Magniflex',
		'description' => 'Это Матрасы сочетающие в себе современные тенденции и элегантность. При первом взгляде бросается их легкий, воздушный образ. Стиль подчеркивается во всех деталях.',
		'keywords' => 'freshgel magniflex, фрешгель магнифлекс',
		'span_title' => 'Премиальная коллекция. Сны на облаке',			
		'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Съемный Viscose.',
		'attr_cat_product3' => 'Cредней жесткости/Cредней мягкости',
		// 'small_img' => '/img/product/very_small/FreshGel 10.jpg',
		'small_img' => '/img/product/small/matress_freshgel_old@2x.jpg',
		'img_preview' => array('/img/1401663_393128467492198_3121220668932600819_o.jpg', '/img/10265364_393129667492078_825288634812530054_o.jpg', '/img/965033_393129687492076_8600362769740970552_o.jpg', '/img/1273742_393128384158873_4576023735318987186_o.jpg', '/img/fresh-gel-new10.jpg', '/img/fresh_gel_new9open.jpg'),
		'img_carousel' => array('/img/product/big/FreshGel 10.jpg','/img/1401663_393128467492198_3121220668932600819_o.jpg', '/img/10265364_393129667492078_825288634812530054_o.jpg', '/img/965033_393129687492076_8600362769740970552_o.jpg', '/img/1273742_393128384158873_4576023735318987186_o.jpg', '/img/fresh-gel-new10.jpg', '/img/fresh_gel_new9open.jpg'),
		'small_img_alt' => '',
		'img' => '/img/product/big/FreshGel 10.jpg',
		'img_alt' => '',
		'video' => array('https://www.youtube.com/embed/WxfkRaCa-4U'),	
		'attr_cover_product' => 'Вискозное покрытие, мягкое и дышащее, делает матрас мягким и шелковистым на ощупь и более эффективно рассеивает пот, способствуя потоотделению. Полностью снимается и моется, чтобы всегда обеспечивать высокий уровень гигиены.',
		'attr_padding_product' => 'Подушка состоит из инновационной пены Magnigel, материала, свойства которого повышают воздухопроницаемость и гибкость, создавая ощущение свежести в течение всей ночи. Стеганая подкладка в Memoform, наряду с набивкой из волокна Super Soft, обеспечивает дополнительный комфорт, идеально адаптируясь к любому типу телосложения.',
		'attr_comfort_product' => '«Мягкая» сторона для свежего, уютного и анатомического комфорта благодаря комбинированным слоям из Magnigel Foam (5 см) и Memoform (3 см), которые нежно поддерживают тело, и «Medium Soft» для более мягкой поддержки благодаря слою в Eliosoft.',
		'attr_layer_product' => 'Слой в Eliosoft (17 см) благодаря своей микроклеточной пенистой структуре высокой плотности удерживает спину в правильном положении. Мягкий комфорт, сочетающий эластичность и воздухопроницаемость.',
		'image_composition' => '/img/Magnigel-Deluxe-dual-12.jpg',
		'block_attr_collections' => 'Dolce Vita',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft',
		'block_attr_coating' => 'Outlast®, Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, Терморегулирующий, Дополнительный комфорт, Воздухопроницаемый',
		'block_attr_comfort_level' => 'Средней мягкости / Средний',
		'block_attr_height' => '25 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '12 лет',
		'block_attr_extra' => 'Cert. Medical Device',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/freshgel_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  25 см</li><li><b>Степень жесткости</b>: Регулируемая<!--Средней мягкости / средней жесткости--></li>
			
			
			<li><b>Срок службы</b>: не менее 15 лет</li></ul><br>
		',
		
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/y2mate.com - martin_castrogiovanni_per_magniflex_tv_spot_2014_15_vaaAmnxhdxg_360p.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'advant-tab'=>'',
		'desc' => '
		<div class="hnb_contarea">
		

		<p>
		<div style="clear:both;"></div>

		<div class="common_block_common">
			<div class="half-width">
				<h3>Настоящее воплощение комфорта и удовольствия во сне!</h3>
					<br />
					<p>Это Матрасы сочетающие в себе современные тенденции и элегантность.
						При первом взгляде бросается их легкий, воздушный образ.
						Стиль подчеркивается во всех деталях - начиная с эстетики совершенных форм
						и заканчивая явной ориентацией на комфорт спящего человека.
					</p>
			</div>
			<div class="coin-slider">
				<img src="/img/product/matress_magnigel.jpg" alt="FreshGel 10">
			</div>
		</div>
		
		<div class="common_block_common">
			<div class="coin-slider">
				<img itemprop="image" src="/img/product/fresh-gel-new9.jpg">
			</div>
			<div class="half-width">
						<h3 >Элитный гелевый ортопедический матрас Magniflex Freshgel 9</h3>
			
					<span class="hnb_eytextoutlast">
					<br><br>
					<strong><i>Гелевый матрас с эффектом сна на облаке. Отличный вариант для жаркой комнаты! </i></strong>
					<br>
					<br>
					Матрас коллекции Magnigel - Una nuvola in camera da letto - это облако в Вашей спальне.
		Вы когда-нибудь мечтали спать на облаке? Теперь это становится возможным благодаря матрасам Magniflex Freshgel! Сильно "дышащая"  специальная структура материала Magnigel делает сон на матрасе достаточно мягким и свежим, матрас превращается в маленький райский уголок!
		<br>
					<br>
		Матрас Freshgel обеспечивает уникальную свежесть во время сна. Фактически инновационный дышащий материал обеспечивает отличную циркуляцию воздуха и создает комфортный микроклимат между телом и матрасом. Экологически чистый и достаточно прочный материал Memogel в совокупности с Memoform адаптируется под контуры тела, позволяя достигать невероятного расслабления во время сна. Присутствие в матрасе 3D слоя с тканью вискозы обеспечивает максимальную циркуляцию воздуха. Матрас спасает от обильного потовыделения во время сна.
					</span>
			</div>
			
		</div>
		</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex FreshGel 10' ,
		'cycle-name' => 'Ортопедический матрас FreshGel 10',
		'sizes' => array(
			// array('80x190',54800.00),
			array('80x200',83100.00),
			// array('90x190',61700.00),
			array('90x200',93300.00)
			// array('120x200',86400.00),
			// array('140x200',100900.00),
			// array('160x200',115300.00),
			// array('180x200',129500.00),
			// array('200x200',144000.00),
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '31.12.2020', 'price_koef' => 0.3),
    ),
    array(
		'address' => 'new-freshgel-10',
		'parent_address' => 'elitnye-freshgel',
		'parent_address2' => 'mattresses',
        'address_collection' => 'freshgel',
		'other_categories' => array('orthopedic_mattresses', 'new-mattresses','s-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','dual-reguliruemie-mattresses', 'height-22-25','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные FreshGel',
		'name' => 'Ортопедический матрас Freshgel Dual 10',
		'title' => 'Матрас Freshgel Dual 10 | Официальный сайт Magniflex',
		'description' => '',
		'keywords' => '',
		'span_title' => 'Элитная коллекция Fresh. Сны на облаке',			
		'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Съемный Viscose.',
		'attr_cat_product3' => 'Dual, регулируемая',
		// 'small_img' => '/img/product/very_small/NEW-Freshgel-10-main.jpg',
		'small_img' => '/img/product/small/matress_freshgel@2x.jpg',
		'img_preview' => array('/img/Freshgel-deluxe-dual-12-6.jpg', '/img/Freshgel-deluxe-dual-12-7.jpg', '/img/Freshgel-dual-10-7.jpg','/img/magnigel-10-03.jpg','/img/magnigel-10-04_1.jpg'),
		'img_carousel' => array('/img/product/NEW-Freshgel-10-main.jpg','/img/Freshgel-deluxe-dual-12-6.jpg', '/img/Freshgel-deluxe-dual-12-7.jpg', '/img/Freshgel-dual-10-7.jpg','/img/magnigel-10-03.jpg','/img/magnigel-10-04_1.jpg'),
		'small_img_alt' => '',
		'img' => '/img/product/NEW-Freshgel-10-main.jpg',
        'img_alt' => '',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'video' => array('https://www.youtube.com/embed/WxfkRaCa-4U'),		
		'attr_cover_product' => 'Вискозное покрытие, мягкое и дышащее, делает матрас мягким и шелковистым на ощупь и более эффективно рассеивает пот, способствуя потоотделению. Полностью снимается и моется, чтобы всегда обеспечивать высокий уровень гигиены.',
		'attr_padding_product' => 'Подушка состоит из инновационной пены Magnigel, материала, свойства которого повышают воздухопроницаемость и гибкость, создавая ощущение свежести в течение всей ночи. Стеганая подкладка в Memoform, наряду с набивкой из волокна Super Soft, обеспечивает дополнительный комфорт, идеально адаптируясь к любому типу телосложения.',
		'attr_comfort_product' => 'Технология Dual Core позволяет получить различную степень комфорта, просто перевернув сердцевину матраса. «Мягкая» сторона для свежего, уютного и анатомического комфорта благодаря комбинированным слоям из Magnigel Foam (5 см) и Memoform (3 см), которые нежно поддерживают тело, и «Medium Soft» для более мягкой поддержки благодаря слою в Eliosoft.',
		'attr_layer_product' => 'Слой в Eliosoft (17 см) благодаря своей микроклеточной пенистой структуре высокой плотности удерживает спину в правильном положении. Мягкий комфорт, сочетающий эластичность и воздухопроницаемость.',
		'image_composition' => '/img/Magnigel-Deluxe-dual-12.jpg',
		'block_attr_collections' => 'Dolce Vita',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft',
		'block_attr_coating' => 'Outlast®, Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, Терморегулирующий, Дополнительный комфорт, Воздухопроницаемый',
		'block_attr_comfort_level' => 'Средней мягкости / Средний',
		'block_attr_height' => '25 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '12 лет',
		'block_attr_extra' => 'Dual Core, Cert. Medical Device',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/freshgel_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC, DUAL CORE</li>
			<li><b>Высота</b>:  25 см</li><li><b>Степень жесткости</b>: Регулируемая, мягкий/жесткий</li><li><b>Срок службы</b>: не менее 15 лет</li></ul><br />
		',
		
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/y2mate.com - martin_castrogiovanni_per_magniflex_tv_spot_2014_15_vaaAmnxhdxg_360p.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'advant-tab'=>'',
		'desc' => '
		<div class="hnb_contarea">
	
		<div style="clear:both;"></div>
		<div class="common_block_common">
			<div class="half-width">
				<h3>Настоящее воплощение комфорта и удовольствия во сне!</h3>
					<br />
					<p>Это Матрасы сочетающие в себе современные тенденции и элегантность.
						При первом взгляде бросается их легкий, воздушный образ.
						Стиль подчеркивается во всех деталях - начиная с эстетики совершенных форм
						и заканчивая явной ориентацией на комфорт спящего человека.
					</p>
			</div>
			<div class="coin-slider">
			<!--	<iframe width="560" height="315" src="https://www.youtube.com/embed/Yeqh6g2yHs8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
					<img  src="/img/product/matress_magnigel.jpg" alt="Freshgel Dual 10">
				</div>
		</div>
		
		<div class="common_block_common">
			<div class="coin-slider">
				<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
		<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image"  src="/img/product/slidimg/NEW-Freshgel-10-1.jpg" alt="Freshgel Dual 10" />
													<span>
													Magniflex FreshGel - просторные удобные а главное, максимально комфортные матрасы
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/product/slidimg/NEW-Freshgel-10-2.jpg" alt="Freshgel Dual 10" />
													<span>
													Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/product/slidimg/NEW-Freshgel-10-5.jpg" alt="Freshgel Dual 10" />
													<span>
													Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/product/slidimg/NEW-Freshgel-10-6.jpg" alt="Freshgel Dual 10" />
													<span>
													Великолепие натуральной ткани подчеркивает двойная строчка. Направление и размер стежков, цвет и качество нити, подбираются исключительно тщательно
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/product/slidimg/NEW-Freshgel-10-7.jpg" alt="Freshgel Dual 10" />
													<span>
													Дизайнерский чехол
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/product/slidimg/New-Freshgel-10-interior.jpg" alt="Freshgel Dual 10" />
													<span>
													Все материалы, используемые при создании матраса, проходят независимую экспертную проверку на аллергены
													</span>
										</a>

				</div>
			</div>
		<div class="half-width">
			<h3 >Элитный гелевый ортопедический матрас</h3>
				<span class="hnb_eytextoutlast">
				<strong><i>Гелевый матрас с эффектом сна на облаке. Отличный вариант для жаркой комнаты! </i></strong><br />
                Вы когда-нибудь мечтали спать на облаке? Теперь это становится возможным благодаря матрасам Magniflex Freshgel! Сильно "дышащая" специальная структура материала Magnigel делает сон на матрасе достаточно мягким и свежим, матрас превращается в маленький райский уголок!  <br />
                Матрас Freshgel обеспечивает уникальную свежесть во время сна. Фактически инновационный дышащий материал обеспечивает отличную циркуляцию воздуха и создает комфортный микроклимат между телом и матрасом. Экологически чистый и достаточно прочный материал Memogel в совокупности с Memoform адаптируется под контуры тела, позволяя достигать невероятного расслабления во время сна. Присутствие в матрасе 3D слоя с тканью вискозы обеспечивает максимальную циркуляцию воздуха. Матрас спасает от обильного потовыделения во время сна.<br />
                Коллекция Magnigel состоит из 2 моделей: Freshgel 10 - высотой 25 см dual core и Freshgel 12 - высотой 30 см dual core.<br />
                Freshgel 10 - съемный чехол, на молнии. Возможно варьировать жесткость матраса – технология Dual Core. Верхняя сторона с гелем и мемориформ более вязкая и обладает эффектом памяти. Усиленный анатомический эффект. Гелевый слой обеспечивает необходимое охлаждение и предотвращает спящего от излишней потливости. Охлаждающий эффект, аналогичный эффекту в гелевых подушках (Freshgel Standard, Freshgel Wave, Memogel Standard). Нижняя часть выполнена из мягкого материала Eliosoft. Поэтому это достаточно мягкий матрас, например, по сравнению с моделью New Comfort Plus 10. 
                При этом главное отличие матраса Freshgel 10 от Freshgel 9 в том, что внутренний слой идет c технологией dual core. Плюс матрас намного мягче, так как содержит слой	Memoform и Eliosoft. Плюс в чехол добавлен слой Super Soft Fiber – что делает матрас более комфортным, чем модель 23 см. 
                <br /><br />
                Видео о матрасе Freshgel 10 и технологии Dual Core: https://www.youtube.com/watch?v=-sQ1YztZ-JQ 
                <br /><br />
                Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.
				</span>
		</div>
	</div>
	</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex FreshGel 10' ,
		'cycle-name' => 'Ортопедический матрас FreshGel 10',
		'sizes' => array(			
array('80x190',79000.00),
array('80x200',83100.00),
array('90x190',88700.00),
array('90x200 (не в рулоне, новый)',74600.00),
array('90x200',93300.00),
array('120x200',124600.00),
array('140x200',145100.00),
array('160x200',166000.00),
array('180x200',186300.00),
array('200x200',207100.00),
		),


		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		// 'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
		// 	'sizes' => array('160x200'),
		// 	'prices' => array(
        //         '160x200' => 52300.00
		// 	),
		// ), //скидка
		// 'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '31.10.2019', 'price_koef' => 0.3),

	),
    array(
		'address' => 'new-freshgel-12',
		'parent_address' => 'elitnye-freshgel',
		'parent_address2' => 'mattresses',
        'address_collection' => 'freshgel',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','dual-reguliruemie-mattresses','soft_mattresses', 'height-26','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные FreshGel',
		'name' => 'Ортопедический матрас FreshGel 12 Dual',
		'title' => 'Матрас FreshGel 12 Dual | Официальный сайт Magniflex',
		'description' => 'Описание, фотографии, состав матраса FreshGel 12, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex freshgel, элитный матрас',
		'span_title' => 'Элитная коллекция Fresh. Сны на облаке',			
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Съемный Viscose.',
		'attr_cat_product3' => 'Dual, регулируемая',
		// 'small_img' => '/img/product/very_small/NEW-Freshgel-10-main.jpg',		
		'small_img' => '/img/product/small/matress_freshgel@2x.jpg',
		'img_preview' => array('/img/Freshgel-deluxe-dual-12-6.jpg', '/img/Freshgel-deluxe-dual-12-7.jpg', '/img/Freshgel-dual-10-7.jpg','/img/magnigel-12-03 (1).jpg','/img/magnigel-12-02_2_1 (1).jpg'),
		'img_carousel' => array('/img/product/NEW-Freshgel-12-main.jpg','/img/Freshgel-deluxe-dual-12-6.jpg', '/img/Freshgel-deluxe-dual-12-7.jpg', '/img/Freshgel-dual-10-7.jpg','/img/magnigel-12-03 (1).jpg','/img/magnigel-12-02_2_1 (1).jpg'),
		'small_img_alt' => 'элитный матрас Magniflex FreshGel 12',
		'img' => '/img/product/NEW-Freshgel-12-main.jpg',
		'img_alt' => 'элитный матрас Magniflex FreshGel 12',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'video' => array('https://www.youtube.com/embed/WxfkRaCa-4U'),		
		'attr_cover_product' => 'Вискозное покрытие, мягкое и дышащее, делает матрас мягким и шелковистым на ощупь и более эффективно рассеивает пот, способствуя потоотделению. Полностью снимается и моется, чтобы всегда обеспечивать высокий уровень гигиены.',
		'attr_padding_product' => 'Подушка состоит из инновационной пены Magnigel, материала, свойства которого повышают воздухопроницаемость и гибкость, создавая ощущение свежести в течение всей ночи. Стеганая подкладка в Memoform, наряду с набивкой из волокна Super Soft, обеспечивает дополнительный комфорт, идеально адаптируясь к любому типу телосложения.',
		'attr_comfort_product' => 'Технология Dual Core позволяет получить различную степень комфорта, просто перевернув сердцевину матраса. «Мягкая» сторона для свежего, уютного и анатомического комфорта благодаря комбинированным слоям из Magnigel Foam (5 см) и Memoform (3 см), которые нежно поддерживают тело, и «Medium Soft» для более мягкой поддержки благодаря слою в Eliosoft.',
		'attr_layer_product' => 'Слой в Eliosoft (17 см) благодаря своей микроклеточной пенистой структуре высокой плотности удерживает спину в правильном положении. Мягкий комфорт, сочетающий эластичность и воздухопроницаемость.',
		'image_composition' => '/img/Magnigel-Deluxe-dual-12.jpg',
		'block_attr_collections' => 'Dolce Vita',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft',
		'block_attr_coating' => 'Outlast®, Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, Терморегулирующий, Дополнительный комфорт, Воздухопроницаемый',
		'block_attr_comfort_level' => 'Средней мягкости / Средний',
		'block_attr_height' => '25 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '12 лет',
		'block_attr_extra' => 'Dual Core, Cert. Medical Device',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/freshgel_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  30 см</li><li><b>Степень жесткости</b>: Регулируемая<!--Средней мягкости / Мягкий--></li>
			
			
			<li><b>Срок службы</b>: не менее 15 лет</li></ul><br>
		',
		
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/y2mate.com - martin_castrogiovanni_per_magniflex_tv_spot_2014_15_vaaAmnxhdxg_360p.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/y2mate.com - martin_castrogiovanni_per_magniflex_tv_spot_2014_15_vaaAmnxhdxg_360p.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'advant-tab'=>'',
		'desc' => '
		<div class="hnb_contarea">
		<div class="common_block_common">
			<div class="half-width">
				<h3>Настоящее воплощение комфорта и удовольствия во сне!</h3>
					<br />
					<p>Это Матрасы сочетающие в себе современные тенденции и элегантность.
						При первом взгляде бросается их легкий, воздушный образ.
						Стиль подчеркивается во всех деталях - начиная с эстетики совершенных форм
						и заканчивая явной ориентацией на комфорт спящего человека.
					</p>
			</div>
			<div class="coin-slider">
			<!--	<iframe width="560" height="315" src="https://www.youtube.com/embed/Yeqh6g2yHs8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
				<img  src="/img/product/matress_magnigel.jpg" alt="new-freshgel-10">
				</div>
		</div>
		
		<div class="common_block_common">
			<div class="coin-slider">
				<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
		<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image"  src="/img/product/slidimg/NEW-Freshgel-10-1.jpg" alt="" />
													<span>
													Magniflex FreshGel - просторные удобные а главное, максимально комфортные матрасы
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/product/slidimg/NEW-Freshgel-10-2.jpg" />
													<span>
													Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/product/slidimg/NEW-Freshgel-10-5.jpg" />
													<span>
													Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/product/slidimg/NEW-Freshgel-10-6.jpg" />
													<span>
													Великолепие натуральной ткани подчеркивает двойная строчка. Направление и размер стежков, цвет и качество нити, подбираются исключительно тщательно
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/product/slidimg/NEW-Freshgel-10-7.jpg" alt="" />
													<span>
													Дизайнерский чехол
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/product/slidimg/New-Freshgel-10-interior.jpg" />
													<span>
													Все материалы, используемые при создании матраса, проходят независимую экспертную проверку на аллергены
													</span>
										</a>

				</div>
			</div>
			<div class="half-width">
						<h3 >Элитный гелевый ортопедический матрас Magniflex Freshgel 12</h3>
			
					<span class="hnb_eytextoutlast">
					<br><br>
					<strong><i>Гелевый матрас с эффектом сна на облаке. Отличный вариант для жаркой комнаты! </i></strong>
					<br>
					<br>
					Матрас коллекции Magnigel - Una nuvola in camera da letto - это облако в Вашей спальне.
		Вы когда-нибудь мечтали спать на облаке? Теперь это становится возможным благодаря матрасам Magniflex Freshgel! Сильно "дышащая"  специальная структура материала Magnigel делает сон на матрасе достаточно мягким и свежим, матрас превращается в маленький райский уголок!
		<br>
					<br>
		Матрас Freshgel обеспечивает уникальную свежесть во время сна. Фактически инновационный дышащий материал обеспечивает отличную циркуляцию воздуха и создает комфортный микроклимат между телом и матрасом. Экологически чистый и достаточно прочный материал Memogel в совокупности с Memoform адаптируется под контуры тела, позволяя достигать невероятного расслабления во время сна. Присутствие в матрасе 3D слоя с тканью вискозы обеспечивает максимальную циркуляцию воздуха. Матрас спасает от обильного потовыделения во время сна.
					</span>
			</div>
			
		</div>
		</div>
		',
		'review' => '
		<div class="reviews">
			<h3> Отзывы покупателей</h3>
			<p><b>Phoenix (Amazon.com). Дословный перевод с английского языка.
			</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span>
			<br><i>"Мне очень нравится этот матрас. Хорошей новостью для владельцев домов с большим количеством спален является та, что вы можете попробовать различные матрасы (и выбрать тот, который вам больше нравится для мастер-люкс) и не удивляться, если вы упускаете что-то. Матрасы могут сильно отличаться друг от друга, и вы не всегда получаете то, за что платите. В этом случае, есть много особенностей, которые делают его победителем в моей книге.<br><br>

			Во-первых, возможность переключения сторон с более мягкой поддержки на более прочную поддержку. Мой муж абсолютно любит мягкую сторону. Я предпочитаю более твердую сторону. Для меня более мягкая сторона была буквально как погружение в зефир без поддержки каши. Твердая сторона убаюкивает меня и удерживает меня от болезненных точек давления (особенно в моих бедрах), когда я сплю, и держит мою спину свободной от боли, насколько это возможно. Мягкая сторона свела бы меня с ума, но мой муж абсолютно любит его. Это самое замечательное в этом матрасе. Это как иметь преимущества разделенного короля в одном матрасе.<br><br>
			
			Это не заняло почти никакого времени вообще для этого, чтобы полностью расшириться, и у него не было абсолютно никакого химического запаха, как так много матрасов, которые я купил и попробовал в прошлом. С учетом сказанного, это очень тяжело. Там нет никакого способа, которым я мог бы получить это на кровать (или получить одну сторону из крышки и перевернулся) самостоятельно. Внешняя крышка не совсем похожа на то, что кажется на видео, но поскольку она покрыта постельным бельем, это не является недостатком. Просто еще одна вещь, чтобы иметь в виду. Только время покажет, если проблемы развиваются с этим матрасом (например, очень дорогой матрас типа" executive", который мы купили ранее, который развил огромное падение менее чем за шесть месяцев), но я обязательно обновлю свой обзор, если что-нибудь произойдет. Он поставляется с 20-летней гарантией, что является огромным плюсом. Очень рекомендую, если вы ищете более высокого класса, универсальный матрас и имеют больший бюджет.
			"</i></p>

			<p><b>Jack C (Amazon.com). Дословный перевод с английского языка.
			</b><br>
			<span>
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">
			</span>
			<br><i>"Я спал на этом матрасе около месяца. В первую ночь я попробовал мягкую сторону, что было приятно, хотя я чувствовал, что погрузился в слишком много для моего вкуса. Поэтому я перевернул его на более твердую сторону, и я очень доволен этим. Это, конечно, заметно прохладнее, чем мой старый матрас - у меня всегда были ноги, торчащие из-под одеяла, если бы не одеяла, сброшенные с себя, но с этим матрасом я просто в порядке с одеялами на мне всю ночь. Я нахожу твердость как раз для меня - она поддерживает меня очень красиво и удобно, но это не трудно или жестким вообще. У меня был очень хороший ночной сон на этом.<br><br>

			Я использую кровать, у которой нет пружины, и я нахожу, что это не имеет никакого значения. Я не замечаю никакой разницы в гибкости по сравнению с моим старым матрасом и пружиной.<br><br>
			
			Он поставляется в свернутом виде в коробке, около 2x2 и до тех пор, пока матрас широкий. Они, должно быть, использовали довольно мощную машину, чтобы сжать эту вещь и застрять в этой коробке, но это сделало доставку намного проще, чем я мог себе представить. Я просто открыл коробку и позволил ей естественным образом расшириться до своего полного размера. Как только он расширяется, он держит свою форму каждый бит, а также любой матрас, поставленный более традиционным способом.
			"</i></p>
		</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex FreshGel 12' ,
		'cycle-name' => 'Ортопедический матрас FreshGel 12',
		'sizes' => array(
array('80x200',94800.00),
array('90x190',101200.00),
array('90x200',106400.00),
array('120x200',141900.00),
array('140x200',165400.00),
array('160x200 (не в рулоне, новый)',151000.00),
array('160x200',188700.00),
array('180x200',212600.00),
array('200x200',236300.00),
			
		),


		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),


		// 'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2018',
		// 	'sizes' => array('160x200 (не в рулоне, новый)'),
		// 	'prices' => array(
		// 		'160x200 (не в рулоне, новый)' => 120800.00
		// 	),
		// ), //скидка
		// 'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '31.10.2019', 'price_koef' => 0.1),

    ),
	array(
		'address' => 'stretching-9',
		'parent_address' => 'elitnye-stretching',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-22-25','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас Stretching 9',
		'title' => 'Матрас Stretching 9 | Официальный сайт Magniflex',
		'description' => 'Описание, фотографии, состав матраса Stretching 9, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex Stretching, элитный матрас',
		'span_title' => 'Идеален для спортсменов и любителей фитнесса',			
		'attr_cat_product1' => '23 см',
		'attr_cat_product2' => 'Съемный Outlast/Viscose.',
		'attr_cat_product3' => 'Cредняя',
		'small_img' => '/img/product/very_small/matress_stretching@2x.jpg',
		'img_preview' => array('/img/stretching-9-ita.jpg', '/img/stretching-10-ita.jpg', '/img/stretching-13.jpg', '/img/Stretching-detail-high-5.JPG'),
		'img_carousel' => array('/img/product/big/stretching-9.jpg','/img/stretching-9-ita.jpg', '/img/stretching-10-ita.jpg', '/img/stretching-13.jpg', '/img/Stretching-detail-high-5.JPG'),
		'small_img_alt' => 'элитный матрас Magniflex FreshGel 9',
		'img' => '/img/product/big/stretching-9.jpg',
		'img_alt' => 'элитный матрас Magniflex Stretching 9',
		'attr_cover_product' => 'The thermos-regulating material, Outlast®, of which the lining is made, creates a perfect microclimate during the night; the viscose, present in the lining, makes it even softer. The lining can be completely removed and easily washable. The outlining 3D band allows for a better transpiration, creating a higher feeling of wellbeing',
		'attr_padding_product' => 'The particular padding has Memoform inside, which perfectly adapts to the silhouette of the body, and offers a pleasant feeling of lightness and relaxation. The padding has a hypoallergenic fiber that gives the mattress an extra comfort.',
		'attr_comfort_product' => 'The special Eliosoft (5 см) and Elioform (8 см) layers built with the Stretch technique, gently “stretch” your back towards the opposite sides of the mattress, reducing compression of the spine, offering a stretching effect, for a firmer support.',
		'attr_layer_product' => 'The support base, made of an Elioform layer of 8 см, is designed to ensure an optimal support for your back.',
		'image_composition' => '/img/Magnistretch-9.jpg',
		'block_attr_collections' => 'Stretching',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Outlast®, Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Thermoregulating, Breathable, Stretching system, Patented system',
		'block_attr_comfort_level' => 'Medium firm',
		'block_attr_height' => '23 см',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '12 years',
		'block_attr_extra' => 'Multi-zone, Cert. Medical Device',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/STRETCHING_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  23 см</li><li><b>Степень жесткости</b>: средней жесткости<!--Средней жесткости--></li>
			
			
			<li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
		',
		
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'advant-tab'=>'
		
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/MagniStretch Mattress_ designed to stretch and decompress the spinal column.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contcenter">
						<div class="half-width">
							<h3>КОЛЛЕКЦИЯ МАТРАСОВ STRETCHING</h3>
							<strong><i>Запатентованная технология Magnistretch</i></strong>
							<p>
							Коллекция матрасов с запатентованной технологией Stretching – разработка фабрики Magniflex совместно с институтом Сарагосы, Испания. Матрас, приводящий спину в порядок.
							</p>
							<h3>Зачем нужно растягивать позвоночник</h3>
							
							<p>
								Обычный человек не использует возможности позвоночника на все 100%. Ходьба, повороты, наклоны, поднятие и переноска тяжестей – все эти нагрузки позвоночник способен вынести без особенного напряжения. Немногие ежедневно дают своему позвоночнику достаточное растяжение, обычно это спортсмены, те, кто делает зарядку, играет в подвижные игры или проводит время на природе. У остальных позвоночник "усыхает". С каждым днем организм стареет и утрачивает способность восстанавливать ткани, кости, кровь.
								<br><br>			
								От состояния позвоночника зависят все жизненные процессы. Вот почему упражнения для позвоночника помогут растянуть не только позвоночник – они продлят вашу жизнь, сделают ее полноценной и радостной.
								<br><br>	
								Животные ежедневно тренируют свой позвоночник. Для них такой естественной тренировкой являются повседневные движения. Кошка растягивает позвонки, выгибая спину. Собака прижимается грудью к земле и вытягивает передние лапы или извивается всем телом и крутит головой. Вот почему животные полны сил до самой старости. Так, средняя продолжительность жизни собаки – 10 лет, а заметных признаков дряхлости до 8–9 лет не появляется. У людей все иначе.
								<br><br>	
								То, что человек начинает стареть в 40 лет, а в 50 жизнь идет к закату – не заложено природой. Человеческий организм до 70–80 лет способен нормально работать. И в этом возрасте, к сожалению редко, но встречаются здоровые, энергичные люди, которые обладают легкой походкой, ясным взглядом и острым умом.
								<br><br>	
								Но первые признаки старения исчезнут, если ежедневно хотя бы понемногу тренировать позвоночник. Это действительно так. Упражнения для позвоночника элементарны, а позволяют сохранить молодость и здоровье. В дополнение к упражнениям отличным способом продлить молодость является матрас Stretching Magniflex.
								<br><br>	
							</p>
						</div>
						<div class="coin-slider">
							<img alt="Stretching-9" src="/img/product/matress_stretching.jpg">
						</div>
				</div>
			</div>
			<br /><br />
			
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Удобство прежде всего</h3>
					<img class="two-width" src="/img/products/mattresses/magniflex_comfort.jpg" alt="Комфорт от Magniflex">
					<p class="text-jus">
					Для внутреннего слоя Magniflex Merino (Merinos) используется пена Elioform Magniflex, обеспечивающая впечатляющую точечную эластичность матраса. Благодаря этому Magniflex Merino (Merinos) прекрасно поддерживает спину и создает комфортные условия сна. Он помогает человеку принять идеальное положение для отдыха, рекомендованное врачами-ортопедами, и не жертвовать при этом удобством. Спать более качественно и высыпаться быстрее – это реально!<br /><br />
            		Elioform – один из самых жестких видов пен Magniflex, имеет высокую плотность и обеспечивает качественную и упругую поддержку спины. Выдерживает нагрузку до 160 кг на спальное место. Мелкопористая структура Elioform обеспечивает высокий уровень циркуляции воздуха, благодаря чему матрас становится «дышащим» и гарантирует свежесть и комфортность сна. 
            		</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3>Долговечность и износостойкость</h3>
					<p class="text-jus">
					Заводской заявленный срок службы модели Magniflex Merino (Merinos) не менее десяти лет. Матрас поставляется в Россию очень давно и получены отзывы успешной эксплуатации матрасов более 15 лет! Кроме того, благодаря своей конструкции (в частности, отсутствию пружинного блока) матрас совершенно нечувствителен к вертикальным нагрузкам. На матрасе можно прыгать и играть детям, и он от этого не деформируется. Высокий уровень комфортности Magniflex Merino  вкупе с отличными ортопедическими свойствами и недорогой ценой сделали эту модель фаворитом у покупателей во всем мире.  
					<!--<img class="two-width" src="/img/products/mattresses/rim_kolizei.jpg" alt="Рим вечный город">-->
					</p>
				</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Stretching 9' ,
		'cycle-name' => 'Ортопедический матрас Stretching 9',
		'sizes' => array(
			
array('80x200',99000.00),
array('90x190',106000.00),
array('90x200 (не в рулоне, новый)',89200.00),
array('90x200',111600.00),
array('120x200',148600.00),
array('140x200',173400.00),
array('160x200',197800.00),
array('180x200',222400.00),
array('200x200',247000.00),
		),
		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		// 'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
		// 	'sizes' => array('90x200 (не в рулоне, новый)'),
		// 	'prices' => array(
		// 		'90x200 (не в рулоне, новый)' => 62500.00
		// 	),
		// ), //скидка
		// 'yml_desc' => 'Комфортный терморегулирующий матрас  с гелевым слоем Magnigel Foam. Не нагревается от соприкосновения с телом: спать на нем прохладно даже жарким летом. Зимой не “отбирает” тепло! Эффект памяти. Необыкновенно проницаемый, дышащий. Уровень комфорта: достаточно Жесткий Высота: 23 см. Срок службы: не менее 15 лет.',
		// 'yml_yandex' => array('160x200'),

	),
	array(
		'address' => 'stretching-10',
		'parent_address' => 'elitnye-stretching',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-22-25','ortoped','elit', 'elitnye-matrasy','memo','vacu','elitnye-stretching'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас Stretching 10',
		'title' => 'Итальянский элитный матрас Stretching 10',
		'description' => 'Описание, фотографии, состав матраса Stretching 10, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex Stretching, элитный матрас',
		'span_title' => 'Идеален для спортсменов и любителей фитнесса',		
		'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Съемный Outlast/Viscose.',
		'attr_cat_product3' => 'Cредняя',
		'small_img' => '/img/product/very_small/matress_stretching@2x.jpg',
		'small_img_alt' => 'элитный матрас Magniflex stretching-10',
		'img_preview' => array('/img/stretching-9-ita.jpg', '/img/stretching-10-ita.jpg', '/img/stretching-13.jpg', '/img/Stretching-detail-high-5.JPG'),
		'img_carousel' => array('/img/product/big/stretching-10.jpg','/img/stretching-9-ita.jpg', '/img/stretching-10-ita.jpg', '/img/stretching-13.jpg', '/img/Stretching-detail-high-5.JPG'),
		'img' => '/img/product/big/stretching-10.jpg',
		'img_alt' => 'элитный матрас Magniflex Stretching 10',
		'video' => array('https://www.youtube.com/embed/PcFEP8kHwwY'),	
		'attr_cover_product' => 'The thermos-regulating material, Outlast®, of which the lining is made, creates a perfect microclimate during the night; the viscose, present in the lining, makes it even softer. The lining can be completely removed and easily washable. The outlining 3D band allows for a better transpiration, creating a higher level of wellbeing.',
		'attr_padding_product' => 'Memoform, anatomical, which perfectly adapts to the silhouette of the body, offers a pleasant feeling of lightness and relaxation. The Super Soft fiber, soft and transpiring, creates a feeling of utmost wellbeing, embracing your entire body during your sleep.',
		'attr_comfort_product' => 'The special Eliosoft layers (of 5 см and 11 см), built with the Stretch technique, gently “stretch” your back towards the opposite sides of the mattress, reducing compression of the spine and offering a stretching effect, creating a softer and more embracing comfort.',
		'attr_layer_product' => 'The support base, made of an Elioform layer of 11 см, is designed to ensure an optimal support for your back.',
		'image_composition' => '/img/Magnistretch-10.jpg',
		'block_attr_collections' => 'Stretching',
		'block_attr_materials' => 'Super Soft fiber, Memoform, Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Outlast®, Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Thermoregulating, Breathable, Stretching system, Patented system',
		'block_attr_comfort_level' => 'Medium firm',
		'block_attr_height' => '30 см',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '12 years',
		'block_attr_extra' => 'Multi-zone, Cert. Medical Device',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/STRETCHING_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  25 см</li><li><b>Степень жесткости</b>: средней жесткости<!--Средней жесткости--></li>
			
			
			<li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
		',
		
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'advant-tab'=>'
		
		',
		'desc' => '
		<div class="hnb_contmy">
				<div class="hnb_contcenter">
						<div class="half-width">
							<h3>КОЛЛЕКЦИЯ МАТРАСОВ STRETCHING</h3>
							<strong><i>Запатентованная технология Magnistretch</i></strong>
							<p>
							Коллекция матрасов с запатентованной технологией Stretching – разработка фабрики Magniflex совместно с институтом Сарагосы, Испания. Матрас, приводящий спину в порядок.
							</p>
							<h3>Зачем нужно растягивать позвоночник</h3>
							
							<p>
								Обычный человек не использует возможности позвоночника на все 100%. Ходьба, повороты, наклоны, поднятие и переноска тяжестей – все эти нагрузки позвоночник способен вынести без особенного напряжения. Немногие ежедневно дают своему позвоночнику достаточное растяжение, обычно это спортсмены, те, кто делает зарядку, играет в подвижные игры или проводит время на природе. У остальных позвоночник "усыхает". С каждым днем организм стареет и утрачивает способность восстанавливать ткани, кости, кровь.
								<br><br>			
								От состояния позвоночника зависят все жизненные процессы. Вот почему упражнения для позвоночника помогут растянуть не только позвоночник – они продлят вашу жизнь, сделают ее полноценной и радостной.
								<br><br>	
								Животные ежедневно тренируют свой позвоночник. Для них такой естественной тренировкой являются повседневные движения. Кошка растягивает позвонки, выгибая спину. Собака прижимается грудью к земле и вытягивает передние лапы или извивается всем телом и крутит головой. Вот почему животные полны сил до самой старости. Так, средняя продолжительность жизни собаки – 10 лет, а заметных признаков дряхлости до 8–9 лет не появляется. У людей все иначе.
								<br><br>	
								То, что человек начинает стареть в 40 лет, а в 50 жизнь идет к закату – не заложено природой. Человеческий организм до 70–80 лет способен нормально работать. И в этом возрасте, к сожалению редко, но встречаются здоровые, энергичные люди, которые обладают легкой походкой, ясным взглядом и острым умом.
								<br><br>	
								Но первые признаки старения исчезнут, если ежедневно хотя бы понемногу тренировать позвоночник. Это действительно так. Упражнения для позвоночника элементарны, а позволяют сохранить молодость и здоровье. В дополнение к упражнениям отличным способом продлить молодость является матрас Stretching Magniflex.
								<br><br>	
							</p>
						</div>
						<div class="coin-slider">
							<img alt="Stretching-10" src="/img/product/matress_stretching.jpg">
						</div>
				</div>
			</div>
			<br /><br />
			
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Удобство прежде всего</h3>
					<img class="two-width" src="/img/products/mattresses/magniflex_comfort.jpg" alt="Комфорт от Magniflex">
					<p class="text-jus">
					Для внутреннего слоя Magniflex Merino (Merinos) используется пена Elioform Magniflex, обеспечивающая впечатляющую точечную эластичность матраса. Благодаря этому Magniflex Merino (Merinos) прекрасно поддерживает спину и создает комфортные условия сна. Он помогает человеку принять идеальное положение для отдыха, рекомендованное врачами-ортопедами, и не жертвовать при этом удобством. Спать более качественно и высыпаться быстрее – это реально!<br /><br />
            		Elioform – один из самых жестких видов пен Magniflex, имеет высокую плотность и обеспечивает качественную и упругую поддержку спины. Выдерживает нагрузку до 160 кг на спальное место. Мелкопористая структура Elioform обеспечивает высокий уровень циркуляции воздуха, благодаря чему матрас становится «дышащим» и гарантирует свежесть и комфортность сна. 
            		</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3>Долговечность и износостойкость</h3>
					<p class="text-jus">
					Заводской заявленный срок службы модели Magniflex Merino (Merinos) не менее десяти лет. Матрас поставляется в Россию очень давно и получены отзывы успешной эксплуатации матрасов более 15 лет! Кроме того, благодаря своей конструкции (в частности, отсутствию пружинного блока) матрас совершенно нечувствителен к вертикальным нагрузкам. На матрасе можно прыгать и играть детям, и он от этого не деформируется. Высокий уровень комфортности Magniflex Merino  вкупе с отличными ортопедическими свойствами и недорогой ценой сделали эту модель фаворитом у покупателей во всем мире.  
					<!--<img class="two-width" src="/img/products/mattresses/rim_kolizei.jpg" alt="Рим вечный город">-->
					</p>
				</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Stretching 10' ,
		'cycle-name' => 'Ортопедический матрас Stretching 10',
		'sizes' => array(
			
array('80x200',108600.00),
array('90x190',116000.00),
array('90x200 (не в рулоне, новый)',97600.00),
array('90x200',122000.00),
array('120x200',162800.00),
array('140x200',189800.00),
array('160x200',217000.00),
array('180x200',244000.00),
array('200x200',271000.00),
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
		// 'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
		// 	'sizes' => array('90x200 (не в рулоне, новый)'),
		// 	'prices' => array(
		// 		'90x200 (не в рулоне, новый)' => 68400.00
		// 	),
		// ), //скидка

		'yml_desc' => 'Комфортный терморегулирующий матрас  с гелевым слоем Magnigel Foam. Не нагревается от соприкосновения с телом: спать на нем прохладно даже жарким летом. Зимой не “отбирает” тепло! Эффект памяти. Необыкновенно проницаемый, дышащий. Уровень комфорта: достаточно Жесткий Высота: 23 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200'),
	),
	array(
		'address' => 'magnificent-12',
		'parent_address' => 'snyatie-s-proizvodstva',
		'parent_address2' => 'snyatie-s-proizvodstva',
		/*
		'parent_address' => 'elitnye-magnificent',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','dual-reguliruemie-mattresses','soft_mattresses', 'height-26','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		*/
		'parent_name' => 'Снятые с производства',
		'name' => 'Ортопедический матрас Magnificent 12',
		'title' => 'Матрас Magnificent 12 | Официальный сайт Magniflex',
		'description' => 'У нас Вы найдете матрасы из коллекции Magnificent 12. Технология Dual Core позволяет менять жесткость половинки матраса.',
		'keywords' => 'magnificent, 12',
		'span_title' => 'Элитная коллекция',
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Съемный',
		'attr_cat_product3' => 'Dual, регулируемая',
		'small_img' => '/img/product/very_small/matress_magnificent@2x.jpg',
		'img_preview' => array('/img/product/big/magnificent-12-frontale.jpg', '/img/product/big/magnificent-12-sfoderabile.jpg', '/img/product/big/magnificent-12-fascia.jpg'),
		'img_carousel' => array('/img/product/big/Magnificent 12.jpg','/img/product/big/magnificent-12-frontale.jpg', '/img/product/big/magnificent-12-sfoderabile.jpg', '/img/product/big/magnificent-12-fascia.jpg'),
		'small_img_alt' => 'элитный матрас Magniflex Magnificent 12',
		'img' => '/img/product/big/Magnificent 12.jpg',
		'img_alt' => 'элитный матрас Magniflex Magnificent 12',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/magnificient_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  30 см</li><li><b>Степень жесткости</b>: средней мягкости/очень мягкий, регулируемый Dual Core</li>
			<li><b>Срок службы</b>: не менее 15 лет</li></ul><br>
		',
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contcenter">
					<div class="half-width">
					<h3>Элитный ортопедический матрас Magniflex Magnificent 12</h3>
							<strong><i>Матрас с шикарными анатомическими свойствами</i></strong>
							<p>
                            Матрас коллекции Supremo - "L"eccellenza riposa qui" - превосходство отдыхает здесь. Коллекция идеально удовлетворяет желания тех, кто ищет возможность максимального расслабления на матрасе. Все матрасы проработаны до мельчайших деталей и используют эксклюзивные ткани и материалы с их превосходными свойствами.<br />
                            Матрас с мультислоями предлагает довольно комфортную комбинацию материалов: Elioform, Eliosoft, Memoform, которые также можно варьировать благодаря технологии Dual Core. Матрас с шикарными анатомическими свойствами.
                            </p>
					<h3>Роскошный мягкий матрас с регулируемой жесткостью. Luxury style.</h3>
							<strong><i>Эксклюзивная модель</i></strong>
							<p>
                            Высокотехнологичный самомоделирующийся матрас Premium класса, изготовленный с применением инновационных материалов и технологий. Обеспечивает потребителю максимальный комфорт, высокий анатомический и ортопедический эффекты, а также создает идеальный для сна микроклимат на поверхности матраса.
                            </p>
						</div>
						<div class="coin-slider">
							<img alt="Ортопедический матрас Magnificent 12" src="/img/product/matress_Magniflex_Magnificent.jpg">
						</div>
				</div>
			</div>
			<br /><br />
			
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Чехол - Viscose® Outlast, съемный на молнии</h3>
					<p class="text-jus">
                    Cъемный терморегулирующий чехол с запатентованной технологией Outlast. Элегантная объемная ткань. <br />
                    В матрасе используется чехол из вискозы и ультрасовременной космической технологии Outlast. Outlast путем повышенной циркуляции воздуха и возможности теплообмена легко контролирует микроклимат на поверхности матраса обеспечивая идеальные условия сна. Технология Outlast - это молекулы воска, которые при соприкосновении с горячим раскрываются, позволяя увеличивать прохождение воздуха, тем самым охлаждая до комфортного уровня. При достаточно холодной температуре на поверхности матраса молекулы воска закрываются, уменьшая циркуляцию воздуха и накапливая тепло.
                    Таким образом поддерживается идеальный для человека микроклимат, защищая от переохлаждения или повышенной потливости.<br />
                    Чехол матраса с 3D рисунком флорентийской лилии. Чехол легко снимается. Расстегивается молния по всему периметру матраса. Матрас с нижней стороны чехла не содержит слоя мемоформ, поэтому если использовать нижнюю часть чехла как спальную - возможно сделать матрас еще жестче. Трехмерный рисунок выполнен только с верхней стороны чехла, с нижней стороны он сплошной и ровный. Возможна эксплуатация с любой подходящей для Вас стороны!
                    	</p>
                <h3>Технология Dual Core</h3>
                    <p class="text-jus">
                    Коллекция Magnifico (supremo) состоит из 1 модели Magnificent 12 высотой 30 см с технологией dual core. Это означает съемный чехол на молнии и регулируемую жесткость матраса. Матрас конструктор. Матрас состоит из двух половинок (левая и правая). Каждая половинка состоит из нескольких слоев разной жесткости, которые можно менять местами. Таким образом, можно менять жесткость, подгоняя ее под любые предпочтения.<br />
                    Можно менять жесткость для всего матраса целиком. Можно менять жесткость только у одного спального места. Идеальный вариант для пар с большой разницей в весе и с разным предпочтением по жесткости. Возможно сделать матрас одновременно мягким для левой половины, и жестким для правой. Достаточно плотный чехол с материалом мемоформ внутри - стык между половинками вообще не ощущается. Зачем покупать два отдельных матраса, как это часто бывает, когда можно купить один, который подходит сразу всем! Идеальный вариант для семейных пар. Все-таки покупать отдельно два матраса - это повод отдалиться супругам друг от друга. Сохраняйте отношения на все времена с матрасами Magniflex! 
                    </p>
				</div>
				<div class="half-width fixcommon-block">
				<h3>Эффект памяти</h3>
					<p class="text-jus">
				    <img class="two-width" src="/img/magnificient-sostav.jpg" alt="Слои матраса Magniflex Magnificent">
В матрасе используются самые современные материалы, латексная пена с эффектом памяти - это целых 12 см слоя мемори в матрасе! Матрас декорирован полосой из замши по всему периметру, что придает изысканности и возносит вкус его владельца на новый уровень. 3D рисунок флорентийской лилии - новомодный дизайнерский тренд, который помимо эстетического удовольствия добавляет комфортности и новых ощущений за счет своей трехмерности. 
Слой Eliosoft 8.5 см - это более мягкий материал, чем Elioform. Сверху и снизу закрыты слоями по 5 см мемори с эффектом памяти. Матрас довольно мягкий и потрясающе комфортный.				
					</p>
				</div>
			</div>
		',
	    'cycle-title' => 'Ортопедические матрасы Magniflex Magnificent 12' ,
		'cycle-name' => 'Ортопедический матрас Magnificent 12',
		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		//'sizes' => array(
			// array('160x200',192400.00),
			// array('180x200',216200.00),
			//array('160x200 (с экспозиции шоу-рума)',192400.00),
			//array('200x200',240400.00),
		//),

		// 'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '31.11.2020', 'price_koef' => 0.3),

/*
		'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2020',
			'sizes' => array('200x200', '160x200 (с экспозиции шоу-рума)'),
			'prices' => array(
                '160x200 (с экспозиции шоу-рума)' => 134700.00,
                //'200x200' => 168280.00,
			),
		), //скидка
*/
	),
	array(
		'address' => 'exchange-memoform-dual',
		'parent_address' => 'elitnye-harmony',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','dual-reguliruemie-mattresses', 'height-26','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Роскошный матрас Exchange Memoform Dual',
		'title' => 'Матрас Memoform Dual | Официальный сайт Magniflex',
		'description' => 'У нас Вы найдете матрасы Memoform Dual. Особая технология позволяет изменить жесткость половинки матраса за считанные минуты.',
		'keywords' => 'memoform, dual',
		'span_title' => 'Высочайшие ортопедические свойства и комфорт',		
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Съемный',
		'attr_cat_product3' => 'Dual, регулируемая',
		'small_img' => '/img/product/very_small/matress_exchange_memoform_dual@2x.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Exchange Memoform Dual',
		'img' => '/img/product/big/Exchange Memoform Dual.jpg',
		'img_preview' => array('/img/product/big/memoform-dual-1-new.jpg', '/img/product/big/memoform-dual-2-new.jpg', '/img/product/big/memoform-dual-3-new.jpg', '/img/product/big/memoform-dual-4-new.jpg'),
		'img_carousel' => array('/img/product/big/Exchange Memoform Dual.jpg','/img/product/big/memoform-dual-1-new.jpg', '/img/product/big/memoform-dual-2-new.jpg', '/img/product/big/memoform-dual-3-new.jpg', '/img/product/big/memoform-dual-4-new.jpg'),
		'img_alt' => 'элитный матраса Magniflex Exchange Memoform Dual',
		'video' => array('https://www.youtube.com/embed/XkqzdJs6_Ws', 'https://www.youtube.com/embed/WxfkRaCa-4U'),
		'img_alt' => '',
		'attr_cover_product' => 'Регулирующая температуру ткань Outlast®, которая образует покрытие, создает идеальный микроклимат в течение ночи, а вискоза делает его мягким на ощупь. Чехол на матрас легко снимается и моется.',
		'attr_padding_product' => 'Обивка Memoform идеально адаптируется к форме тела, создавая приятное ощущение легкости и расслабления. Волокно Super Soft дает ощущение чрезвычайного благополучия, повышая уровень комфорта, который вы испытываете во время сна',
		'attr_comfort_product' => 'Наполнители доступны в трех различных материалах и могут быть выбраны независимо от стороны матраса, чтобы удовлетворить ваши индивидуальные потребности. Наполнители изготовлены из Memoform, анатомического и обволакивающего материала.',
		'attr_layer_product' => '
		Центральные слои с технологией Dual Core изготовлены из Eliosoft (10 см) и Elioform (10 см) с волнообразной структурой и предназначены для обеспечения двух различных видов оптимальной поддержки спины. Первый для тех, кто хочет более мягкий комфорт. Второй предназначен для обеспечения более прочной поддержки.',
		'image_composition' => '/img/Armonia.jpg',
		'block_attr_collections' => 'Armonia',
		'block_attr_materials' => 'Супер Мягкое волокно, Мемоформ, Магнигель Пена, Магнифоам Элиософт, Магнифоам Элиоформ, Латекс',
		'block_attr_coating' => 'Outlast®, Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, Терморегулирующий, Дополнительный комфорт, Воздухопроницаемый',
		'block_attr_comfort_level' => ' Средний',
		'block_attr_height' => '30 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '12 лет',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'block_attr_extra' => 'Dual Core, Cert. Medical Device
		Вершина серии',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/Элитный матрас Magniflex Exchange Memoform Dual Amateur video.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/harmony_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  30 см</li><li><b>Степень жесткости</b>: Dual / Регулируемая<!--Средней жесткости / Жесткий 4 комбинации комфорта--></li>
			
			
			<li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
		',
		
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'advant-tab'=>'
		
		',
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contcenter">
						<div class="half-width">
							<h3>Роскошный ортопедический матрас Exchange Memoform Dual</h3>
							<strong><i>Технология dual, 6 вариантов жесткости</i></strong>
							<p>
Матрас коллекции Armonia - "Qualcosa in piu del buon dormire" - больше, чем просто хороший сон.
Каждый матрас этой коллекции обеспечивает 4 разных варианта комбинации жесткости благодаря технологии Dual Core и съемному топперу внутри матраса. Топпер, выполненный из материала Memoform, можно разместить как вверху матраса, так и внизу, основной слой можно также переворачивать, что позволяет подбирать жесткость для любителей матрасов, имеющих самые разные предпочтения. 
	</p>
							<h3>Именно на таких матрасах спят члены королевских семей и элита мирового общества</h3>
							<p>
Идеальный матрас с потрясающими свойствами, настоящее воплощение мечты! Высокотехнологичный матрас Premium класса, обладающий 6-ю уровнями комфорта (жесткий, умеренный, идеальный, комбинированный 3 варианта), обеспечивает потребителю возможность самостоятельно смоделировать оптимальный уровень комфорта. Высокий анатомический и ортопедический эффекты, в сочетании с терморегулирующими свойствами чехла, делают этот матрас идеальной системой комфортного сна и отдыха.
							</p>
						</div>
						<div class="coin-slider">
							<img alt="Exchange-Memoform-Dual" src="/img/product/Exchange-Memoform-Dual.jpg">
						</div>
				</div>
			</div>
			<br /><br />
			
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Элитный ортопедический «матрас-конструктор» Magniflex Memoform Dual</h3>
				<!--	<img class="two-width" src="/img/products/mattresses/magniflex_comfort.jpg" alt="Комфорт от Magniflex">-->
					<p class="text-jus">
В основном слое матраса, помимо топпера, есть два материала: Eliosoft и Elioform, которые соответственно можно располагать так, чтобы матрас был соответственно более мягким или более упругим. В самом чехле матраса есть материал Memoform и Super Soft Fiber - что добавляет потрясающих ощущений комфорта и расслабления на матрасе. 
Коллекция Armonia состоит из 1 модели высотой 30 см с технологией dual core. Это означает съемный чехол на молнии и регулируемую жесткость матраса. Матрас конструктор. Матрас состоит из двух половинок (левая и правая). Каждая половинка состоит из нескольких слоев разной жесткости, которые можно менять местами. Таким образом можно менять жесткость, подгоняя под любые предпочтения. Можно менять жесткость для всего матраса целиком. Можно менять жесткость только у одного спального места. Идеальный вариант для пар с большой разницей в весе и с разным предпочтением по жесткости. Возможно сделать матрас одновременно мягким для левой половины, и жестким для правой. 
Достаточно плотный чехол с материалом Мемоформ внутри - стык между половинками вообще не ощущается. Зачем покупать два отдельных матраса, как это часто бывает, когда можно купить один, который подходит сразу всем! Идеальный вариант для семейных пар. Все-таки покупать отдельно два матраса - это повод отдалиться супругам друг от друга. Сохраняйте отношения на все времена с матрасами Magniflex! 
	</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3>Элитный матрас</h3>
					<p class="text-jus">
Чехол матраса с рисунком флорентийской лилии. Чехол легко снимается. Расстегивается молния по всему периметру матраса. Матрас с нижней стороны чехла не содержит слоя Мемоформ, поэтому если использовать нижнюю часть чехла как спальную - возможно сделать матрас еще жестче. Объемный рисунок выполнен только с верхней стороны чехла, с нижней стороны он сплошной и ровный. По периметру идет полоса из замши. Возможна эксплуатация с любой подходящей для Вас стороны! <br />
Современные материалы, латексная пена с эффектом памяти - это внутренний топпер высотой 6 см! Его можно класть вверху матраса, можно убрать вниз под другие слои и сделать матрас более упругим. Смотрите на видео ниже как это работает. www.youtube.com/watch?v=1hUdzxMmpi4 <br />
Слой Eliosoft 10 см - это более мягкий материал, чем Elioform. Соединены между собой по технологии Wave (волна). Так как магнифлекс не использует в матрасах клей, что химически вредно, эти два слоя скреплены между собой волнообразными краями механически во избежание смещения слоев. При полностью закрытом чехле, когда молния полностью застегивается, слои прилегают друг к другу максимально плотно. <br />
Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.
	<!--<img class="two-width" src="/img/products/mattresses/rim_kolizei.jpg" alt="Рим вечный город">-->
					</p>
				</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Exchange Memoform Dual' ,
		'cycle-name' => 'Ортопедический матрас Exchange Memoform Dual',
		'sizes' => array(
array('80x200',146300.00),
array('90x190',156000.00),
array('90x200',164400.00),
array('120x200',218900.00),
array('140x200',255700.00),
array('160x200 (с экспозиции шоу-рума)',233500.00),
array('160x200',292000.00),
array('180x200',328500.00),
array('200x200',364800.00),			
		),

		
		// //'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
		// 	'sizes' => array('160x200 (с экспозиции шоу-рума)'),
		// 	'prices' => array(
		// 		'160x200 (с экспозиции шоу-рума)' => 164500.00,
		// 	)
		// ), //скидка
		
		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
	),
	array(
		'address' => 'virtus-30',
		'parent_address' => 'elitnye-virtus',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-satin-mattresses','soft_mattresses', 'mattresses-filter', 'height-26','elit', 'elitnye-matrasy','memo'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Эксклюзивный матрас Virtus 30',
		'title' => 'Матрас Virtus 30 | Официальный сайт Magniflex',
		'description' => 'У нас Вы найдете матрасы из коллекции Virtus 30. Весь ассортимент в нашем каталоге.',
		'keywords' => 'virtus, 30',
		'span_title' => 'Лучший из коллекции Magniflex',		
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Несъемный, Satin, Viscose.',
		'attr_cat_product3' => 'Cредней мягкости',
		// 'small_img' => '/img/product/very_small/Virtus 30.jpg',
		'small_img' => '/img/product/very_small/virt-1.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Virtus 30',
		'img' => '/img/product/big/Virtus 30.jpg',
		'img_preview' => array('/img/product/big/virtuoso-rel52a5cc3b.jpg', '/img/product/big/orig (1).jpg', '/img/product/big/virtus-30-3.jpg', '/img/virtus53612.jpg'),
		'img_carousel' => array('/img/product/big/Virtus 30.jpg','/img/product/big/virtuoso-rel52a5cc3b.jpg', '/img/product/big/orig (1).jpg', '/img/product/big/virtus-30-3.jpg', '/img/virtus53612.jpg'),
		'img_alt' => 'Элитные матрасы Magniflex Virtus 30',
		'video' => array('https://www.youtube.com/embed/3IfmTHkk9Qo'),	
		'attr_cover_product' => 'The cover in Viscose Satin combines the properties of viscose, which is incredibly soft and silky to the touch, and has the qualities of satin. A sleek and elegant material with an excellent ability to dissipate sweat, making the mattress remarkably breathable.',
		'attr_padding_product' => 'The padding is divided into two sides, winter and summer. The first contains natural fibers such as Cashmere, Merino wool, Camel wool and Horsehair, to create the ideal microclimate on cold winter days and providing a cozy comfort. The summer side, instead, contains natural fibers such as Silk, Horsehair, Linen and Cotton, to create a dry and breathable comfort, intended for the warmer months.',
		'attr_comfort_product' => 'The layer in Memoform HD (4 см) featured on both sides consists of an innovative, high-density viscose-elastic foam that is incredibly compact, adapting to the bodys shape and providing a cozy comfort. The breathable process with differentiated support ensures perfect breathability and an increased dissipation of body moisture even inside the mattress.',
		'attr_layer_product' => 'The middle layer with breathable process and differentiated support is made of Elioform Breeze (19 см), a highly breathable foam that is resistant to deformation over time. It provides a firm and beneficial support to the body thanks to the added eucalyptus extracts contained in the mattress, which provide a pleasant sensation of coolness.',
		'image_composition' => '/img/Virtuoso-12_1.jpg',
		'block_attr_collections' => 'Virtus',
		'block_attr_materials' => 'Memoform HD, Magnifoam Eliosoft Breeze, Merino wool, Camel wool, Horsehair, Silk, Linen, Cotton',
		'block_attr_coating' => 'Viscose Satin',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Thermoregulating, Extra comfort, Breathable',
		'block_attr_comfort_level' => 'Medium Soft',
		'block_attr_height' => '30 см',
		'block_attr_support' => 'Medium',
		'block_attr_warranty' => '20 years',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'block_attr_extra' => 'Multi-zone, Eco-friendly, fine natural materials, breathable natural materials, summer/winter side, breathable process with differentiated support',

		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/virtus_250.jpg);
			height: 250px;
		}
		.zoom_btn_tester img{
		  display: block;
		}
		</style>
			<ul><li>
			ОРТОПЕДИЧЕСКИЙ, СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  30 см</li><li><b>Степень жесткости</b>: средней мягкости<!--Комфортнейший--></li>
			
			
			<li><b>Срок службы</b>: не менее 20 лет</li></ul><br>
		',
		
		'desc' => '
		<div class="hnb_contmy">
				<div class="hnb_contcenter">
						<div class="half-width">
							<h3>Роскошный и Изысканный ортопедический матрас</h3>
							<strong><i>Матрас коллекции Virtuoso - Luxury коллекция, шик и роскошь, ставшие реальностью.</i></strong>
							<p>
Матрас Виртус включает в себя все современные и инновационные технологии, которые только существуют, а также натуральные материалы, позволяющие достигать невероятного комфорта и эффекта во время сна. Чехол матраса украшен рисунком флорентийской лилии, который создал настоящий тренд в области дизайна интерьеров. 
	</p>
							<h3>Самое лучшее, что Вам может предложить современная индустрия сна!</h3>
							<p>
Это одни из самых лучших матрасов в мире. Для их создания используются самые современные, дорогие технологии, отбираются только лучшие ткани и материалы. Каждый матрас уникальный, создается вручную в течение 2-х недель, после чего проходит специальный контроль качества.
	</p>
						</div>
						<div class="coin-slider">
							<img alt="матрас виртус" src="/img/product/virtus_matress.jpg">
						</div>
				</div>
			</div>
			<br /><br />
			
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Преимущества матрасов коллекции Virtus</h3>
				<!--<img class="two-width" src="/img/products/mattresses/magniflex_comfort.jpg" alt="Комфорт от Magniflex">-->
					<p class="text-jus">
Невероятно дышащий. Используется самая современная разработка Breeze (Бриз). Ультрапроницаемые свойства. Не нагревается от соприкосновения с телом.<br />
Ортопедический эффект. Непревзойденные ортопедические свойства, деликатная, самонастраивающаяся надежная поддержка позвоночника. Эффект памяти.<br /> 
Анатомический эффект. Пожалуй, самые комфортные матрасы в мире. Быстро восстанавливают силы, максимальное расслабление организма!</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3>Технологии</h3>
					<p class="text-jus">
Матрас выполнен в варианте ЗИМА/ЛЕТО: с летней стороны используется микс льна, хлопка и шелка, с зимней стороны идет наполнение кашемиром, верблюжьей шерстью, шерcтью мериноса и конским волосом. В матрасе использованы ультрасовременные и не имеющие аналогов материалы: Memoform HD, Eliosoft Breeze, Memoform HD Airyform. 

Матрас можно использовать с двух сторон. Выполнен по привычному уже стандарту зима/лето. При этом слой с шерстью спрятан под тонкой тканью чехла для обеспечения тактильного комфорта. Получается полноценный двусторонний матрас. Одинаковая жесткость с обеих сторон, универсальный вариант! 


Зимняя сторона: натуральный отборный конский волос, отборная верблюжья шерсть, шерсть тонкорунного мериноса, кашемир. Эффект от зимней стороны просто потрясающий, это не только вариант не замерзнуть ночью зимой, но и терапевтически лечебный способ избавиться от боли в спине. Ведь когда у человека болит спина, для ее лечения используются разогревающие мази и ткани. Рекомендуют одевать пояс из собачей, например, шерсти. В данном матрасе уже учтена возможность "лечения" спины благодаря подогревающему эффекту зимней стороны. 


Чтобы в матрасе с зимней, достаточно богатой на шерсть стороны, не скапливались бактерии, используется инновационный материал Memoform HD Breeze - материал с повышенной пропускаемостью воздуха и его высоким уровнем циркуляции. Основной упругий слой Eliosoft Breeze - повышенная воздухопроницаемость. Благодаря этим материалам матрас получился невероятно дышащим, что исключает возможность образования пылевых клещей и прочих бактерий, а сон получается невероятно свежим и качественным. 


Летняя сторона: натуральный 100% хлопок, высококачественный лен и премиального уровня шелк. Летняя сторона обеспечивает комфортный сон в жаркие летние ночи за счет натуральных материалов ткани чехла. Максимально приятный тактильный эффект. 

Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг. 


Матрас производится полностью вручную на заказ. Срок производства: 2 недели. Поставляется не в рулоне, в развернутом виде.

	<!--<img class="two-width" src="/img/products/mattresses/rim_kolizei.jpg" alt="Рим вечный город">-->
					</p>
				</div>
			</div>
					<h3 class="new-block-center">Эксклюзивные детали</h3>
			<table class="hnb_table_elit2colnnonebord">
				<tbody><tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><a class="single_image" href="/img/product/virt-sost-new1p.jpg"><img itemprop="image" src="/img/product/virt-sost-new1p.jpg" alt=""></a></td>
					<td>Удобные ручки для переноски или заправления постельного белья
					</td>
				</tr>

				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><a class="single_image" href="/img/product/virt-sost-new2p.jpg"><img itemprop="image" src="/img/product/virt-sost-new2p.jpg" alt=""></a></td>
					<td>Эксклюзивные детали в дизайне, ручная сборка, качество до мелочей

					</td>
				</tr>

				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject">
					<a class="single_image" href="/img/product/virt-sost-new3p.jpg"><img itemprop="image" src="/img/product/virt-sost-new3p.jpg" alt=""></a>
					</td>
					<td>Невероятно комфортный, дышащий, гарантия свежего сна
					</td>
				</tr>

				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><a class="single_image" href="/img/product/virt-sost-new4p.jpg"><img itemprop="image" src="/img/product/virt-sost-new4p.jpg" alt=""></a></td>
					<td>Только натуральные самые лучшие отборные материалы

					</td>
				</tr>

				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><a class="single_image" href="/img/product/virt-sost-new5p.jpg"><img itemprop="image" src="/img/product/virt-sost-new5p.jpg" alt=""></a></td>
					<td>Сделано в Италии (Флоренция, Тоскана)<br>
по самым высоким стандартам качества.<br>
Сертификация ведущих лабораторий в 96-ти странах мира.

					</td>
				</tr>


			</tbody></table>
		',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/Magniflex Virtus.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'advant-tab'=>'
		<div class="contadvant">
			<span class="hnb_bigtytles">Преимущества матрасов коллекции Virtus</span>

			<div id="hnb_3nelement">

				<div class="hnb_3nelementli" style="margin-top: -4px;margin-left: 0px;opacity: 1;">
					<img itemprop="image" src="/img/dih.png" alt="">
					
					<span>Невероятно дышащий</span>
					используется самая современная разработка Breeze (Бриз). Ультрапроницаемые свойства. Не нагревается от соприкосновения с телом
				</div>

				<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
					<img style="margin-top: -6px;" src="/img/ortopedef.png">
					
					<span>Ортопедический эффект</span>
					непревзойденные ортопедические свойства, деликатная, самонастраивающаяся надежная поддержка
			позвоночника. Эффект памяти
				</div>

				<div class="hnb_3nelementli" style="position: relative; left: 0px; opacity: 1;">
					<img style="margin-top: -12px;" src="/img/palm.png">
					
					<span>Анатомический эффект</span>
					Пожалуй, самые комфортные матрасы в мире. Быстро восстанавливают силы, максимальное расслабление организма!
				</div>
			</div>
		</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Virtus 30' ,
		'cycle-name' => 'Ортопедический матрас Virtus 30',
		'sizes' => array(
array('80x200',343800.00),
array('90x190',367600.00),
array('90x200',387100.00),
array('120x200',515600.00),
array('140x200',601700.00),
array('160x200',687300.00),
array('180x200',773300.00),
array('200x200',859200.00),
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
	),

	array(
		'address' => 'virtus-deluxe',
		'parent_address' => 'elitnye-virtus',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-satin-mattresses','soft_mattresses', 'mattresses-filter', 'height-26','elit', 'elitnye-matrasy','memo'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Эксклюзивный матрас Virtus Deluxe',
		'title' => 'Матрас Virtus Deluxe | Официальный сайт Magniflex',
		'description' => 'У нас Вы найдете матрасы из коллекции Virtus Deluxe. Весь ассортимент в нашем каталоге.',
		'keywords' => 'virtus, 30',
		'span_title' => 'Самое Лучшее из коллекции Magniflex',		
		'attr_cat_product1' => '40 см',
		'attr_cat_product2' => 'Viscose/Satin.',
		'attr_cat_product3' => 'Мягкий',
		// 'small_img' => '/img/product/very_small/Virtus Deluxe.jpg',
		'small_img' => '/img/product/very_small/matress_virtus_40.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Virtus Deluxe',
		'img' => '/img/product/big/virtuoso-16.jpg',
		'img_preview' => array('/img/product/big/magnistretch-lastra.jpg', '/img/product/big/virtuoso-tessuto.jpg', '/img/product/big/virtuoso-16-frontale.jpg'),
		'img_carousel' => array('/img/product/big/virtuoso-16.jpg', '/img/product/big/magnistretch-lastra.jpg', '/img/product/big/virtuoso-tessuto.jpg', '/img/product/big/virtuoso-16-frontale.jpg'),
		'img_alt' => 'Элитные матрасы Magniflex Virtus Deluxe',
		'video' => array('https://www.youtube.com/embed/3IfmTHkk9Qo'),	
		'attr_cover_product' => 'Чехол viscose/satin невероятно мягкий и шелковистый, на ощупь сравнимый с атласом. Гладкий и элегантный материал с отличной способностью испарять пот с поверхности матраса, что обеспечивает высокий уровень воздухообмена.',
		'attr_padding_product' => 'Матрас имеет зимнюю и летнюю стороны благодаря используемым подкладкам. Зимняя сторона содержит 100% натуральные волокна, такие как кашемир, мериносовая шерсть, верблюжья шерсть и конский волос, для создания идеального микроклимата в холодные зимние дни и обеспечения уютного комфорта. Летняя сторона содержит 100% натуральные волокна, такие как шелк, конский волос, лен и хлопок, чтобы создать сухой и дышащий комфорт, предназначенный для теплого времени года.',
		'attr_comfort_product' => '3 см пены из натуральных материалов на основе мальвы Mallow foam Magniflex имеют успокаивающе-расслабляющие свойства. 6 см инновационного материала повышенной плотности Memoform HD, благодаря своей вязко-эластичной структуре, идеально адаптируются к форме тела, обеспечивая мягкий и уютный комфорт. Эти слои расположены как в верхней зимней, так и в нижней летней сторонах матраса.',
		'attr_layer_product' => 'Основной слой матраса выполнен из Eliosoft Breeze (14 см), из пены на основе натуральных материалов, которая благодаря своей высокой плотности имеет несравнимый уровень устойчивости к деформациям, а также демонстрирует потрясающие показатели по циркуляции воздуха. Материал обеспечивает мягкую и ортопедическую поддержку для тела, а благодаря добавленным натуральным экстрактам эвкалипта, придает приятное ощущение прохлады и тем самым повышает свежесть Вашего сна.',
		'image_composition' => '/img/Virtuoso-16_1.jpg',
		'block_attr_collections' => 'Virtus',
		'block_attr_materials' => 'Elioform Breeze, Mallow foam, Memoform HD.',
		'block_attr_coating' => 'Viscose Satin',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Thermoregulating, Extra comfort, Breathable',
		'block_attr_comfort_level' => 'Medium Soft',
		'block_attr_height' => '40 см',
		'block_attr_support' => 'Medium',
		'block_attr_warranty' => '20 years',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'block_attr_extra' => 'Multi-zone, Eco-friendly, fine natural materials, breathable natural materials, summer/winter side, breathable process with differentiated support',
		'prod_compose' => array(
			array('Чехол', 'Чехол viscose/satin невероятно мягкий и шелковистый, на ощупь сравнимый с атласом. Гладкий и элегантный материал с отличной способностью испарять пот с поверхности матраса, что обеспечивает высокий уровень воздухообмена.'),
			array('Подкладка', 'Матрас имеет зимнюю и летнюю стороны благодаря используемым подкладкам. Зимняя сторона содержит 100% натуральные волокна, такие как кашемир, мериносовая шерсть, верблюжья шерсть и конский волос, для создания идеального микроклимата в холодные зимние дни и обеспечения уютного комфорта. Летняя сторона содержит 100% натуральные волокна, такие как шелк, конский волос, лен и хлопок, чтобы создать сухой и дышащий комфорт, предназначенный для теплого времени года.'),
			array(' Уровень комфорта', '3 см пены из натуральных материалов на основе мальвы Mallow foam Magniflex имеют успокаивающе-расслабляющие свойства. 6 см инновационного материала повышенной плотности Memoform HD, благодаря своей вязко-эластичной структуре, идеально адаптируются к форме тела, обеспечивая мягкий и уютный комфорт. Эти слои расположены как в верхней зимней, так и в нижней летней сторонах матраса.'),
			array(' Основной наполнитель', 'Основной слой матраса выполнен из Eliosoft Breeze (14 см), из пены на основе натуральных материалов, которая благодаря своей высокой плотности имеет несравнимый уровень устойчивости к деформациям, а также демонстрирует потрясающие показатели по циркуляции воздуха. Материал обеспечивает мягкую и ортопедическую поддержку для тела, а благодаря добавленным натуральным экстрактам эвкалипта, придает приятное ощущение прохлады и тем самым повышает свежесть Вашего сна.')
		),
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/virtus_250.jpg);
			height: 250px;
		}
		.zoom_btn_tester img{
		  display: block;
		}
		</style>
			<ul>
			<li>ОРТОПЕДИЧЕСКИЙ, СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  40 см</li>
			<li><b>Наполнитель</b>: Elioform Breeze, Mallow foam, Memoform HD.</li>
			<li><b>Степень жесткости</b>: Мягкий<!--Комфортнейший--></li>
			<li><b>Дополнительные слои</b>: 100% натуральные: кашемир, меринос, верблюжья шерсть, конский волос, шелк, лён, хлопок.</li>
			<li><b>Срок службы</b>: не менее 20 лет</li></ul><br>
		',
		
		'desc' => '
		<div class="hnb_contmy">
				<div class="hnb_contcenter">
						<div class="half-width">
							<h3>Virtus Deluxe</h3>
							
							<p>Virtus Deluxe из коллекции Virtuoso - это просто лучший матрас, который вы можете найти на сегодняшний день. Матрас выполнен из тонких материалов, элегантных тканей и уникальных натуральных волокон. Высокоплотные внутренние слои обеспечивают исключительный комфорт и мягкую поддержку. Матрас высотой 40 см – королевский шик самого высокого премиального уровня.
	</p>
							
							<p>	Матрасы Virtus Deluxe имеют зимнюю сторону с подкладкой из кашемира, верблюжьей шерсти, мериносовой шерсти и конского волоса, а также летнюю, состоящую из льна, хлопка, конского волоса и шелка. Такое сочетание материалов и волокон делает матрас несравненным и идеальным.
	</p>
						
						<p>В составе наполнителей Mallow foam с экстрактом натуральной мальвы, Memoform HD, Eliosoft Breeze и Elioform Breeze, которые обеспечивают достаточную мягкость матраса, но при этом оказывают правильную ортопедическую поддержку тела. Дифференцированная система внутренних вертикальных отверстий способствует более высокой воздухопроницаемости и в то же время поддерживает наиболее напряженные точки сжатия позвоночника.</p>
						</div>
						<div class="coin-slider">
							<img alt="матрас виртус" src="/img/product/virtus_matress.jpg">
						</div>
				</div>
			</div>
			<br /><br />
			
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Преимущества матрасов коллекции Virtus</h3>
				<!--<img class="two-width" src="/img/products/mattresses/magniflex_comfort.jpg" alt="Комфорт от Magniflex">-->
					<p class="text-jus">
Невероятно дышащий. Используется самая современная разработка Breeze (Бриз). Ультрапроницаемые свойства. Не нагревается от соприкосновения с телом.<br />
Ортопедический эффект. Непревзойденные ортопедические свойства, деликатная, самонастраивающаяся надежная поддержка позвоночника. Эффект памяти.<br /> 
Анатомический эффект. Пожалуй, самые комфортные матрасы в мире. Быстро восстанавливают силы, максимальное расслабление организма!</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3>Технологии</h3>
					<p class="text-jus">
Матрас выполнен в варианте ЗИМА/ЛЕТО: с летней стороны используется микс льна, хлопка и шелка, с зимней стороны идет наполнение кашемиром, верблюжьей шерстью, шерcтью мериноса и конским волосом. В матрасе использованы ультрасовременные и не имеющие аналогов материалы: Memoform HD, Eliosoft Breeze, Memoform HD Airyform. 

Матрас можно использовать с двух сторон. Выполнен по привычному уже стандарту зима/лето. При этом слой с шерстью спрятан под тонкой тканью чехла для обеспечения тактильного комфорта. Получается полноценный двусторонний матрас. Одинаковая жесткость с обеих сторон, универсальный вариант! 


Зимняя сторона: натуральный отборный конский волос, отборная верблюжья шерсть, шерсть тонкорунного мериноса, кашемир. Эффект от зимней стороны просто потрясающий, это не только вариант не замерзнуть ночью зимой, но и терапевтически лечебный способ избавиться от боли в спине. Ведь когда у человека болит спина, для ее лечения используются разогревающие мази и ткани. Рекомендуют одевать пояс из собачей, например, шерсти. В данном матрасе уже учтена возможность "лечения" спины благодаря подогревающему эффекту зимней стороны. 


Чтобы в матрасе с зимней, достаточно богатой на шерсть стороны, не скапливались бактерии, используется инновационный материал Memoform HD Breeze - материал с повышенной пропускаемостью воздуха и его высоким уровнем циркуляции. Основной упругий слой Eliosoft Breeze - повышенная воздухопроницаемость. Благодаря этим материалам матрас получился невероятно дышащим, что исключает возможность образования пылевых клещей и прочих бактерий, а сон получается невероятно свежим и качественным. 


Летняя сторона: натуральный 100% хлопок, высококачественный лен и премиального уровня шелк. Летняя сторона обеспечивает комфортный сон в жаркие летние ночи за счет натуральных материалов ткани чехла. Максимально приятный тактильный эффект. 

Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг. 


Матрас производится полностью вручную на заказ. Срок производства: 2 недели. Поставляется не в рулоне, в развернутом виде.

	<!--<img class="two-width" src="/img/products/mattresses/rim_kolizei.jpg" alt="Рим вечный город">-->
					</p>
				</div>
			</div>
					
		',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/Magniflex Virtus.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'advant-tab'=>'',
		'cycle-title' => 'Ортопедические матрасы Magniflex Virtus Deluxe' ,
		'cycle-name' => 'Ортопедический матрас Virtus Deluxe',
		'sizes' => array(
array('80x200',536500.00),
array('90x190',573500.00),
array('90x200',603700.00),
array('120x200',804800.00),
array('140x200',938900.00),
array('160x200',1073000.00),
array('180x200',1207200.00),
array('200x200',1341300.00),
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
	),


	array(
		'address' => 'maestoso-dual',
		'parent_address' => 'elitnye-maestro',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-satin-mattresses','soft_mattresses', 'mattresses-filter', 'height-26','elit', 'elitnye-matrasy','memo'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Эксклюзивный матрас Maestro Dual 14',
		'title' => 'Матрас Maestro Dual 14 | Официальный сайт Magniflex',
		'description' => 'У нас Вы найдете матрасы из коллекции Maestro Dual 14. Весь ассортимент в нашем каталоге.',
		'keywords' => 'Maestro Dual 14',
		'span_title' => 'Элитарная коллекция',		
		'attr_cat_product1' => '35 см',
		'attr_cat_product2' => 'Viscose/Satin',
		'attr_cat_product3' => 'Мягкий / средней мягкости. Dual',
		// 'small_img' => '/img/product/very_small/Maestoso Dual.jpg',
		'small_img' => '/img/product/very_small/matress_maestoso_dual.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Maestro Dual 14',
		'img' => '/img/product/big/maestro-14_1.jpg',
		'img_preview' => array('/img/product/big/maestro-14-fascia_2.jpg', '/img/product/big/maestro-sfoderabile_3.jpg', '/img/product/big/maestro-dual-core_1.jpg'),
		'img_carousel' => array('/img/product/big/maestro-14_1.jpg', '/img/product/big/maestro-14-fascia_2.jpg', '/img/product/big/maestro-sfoderabile_3.jpg', '/img/product/big/maestro-dual-core_1.jpg'),
		'img_alt' => 'Элитные матрасы Magniflex Maestro Dual 14',
		'video' => array('https://www.youtube.com/embed/XkqzdJs6_Ws'),	
		'attr_cover_product' => 'Чехол viscose/satin невероятно мягкий и шелковистый, на ощупь сравнимый с атласом. Гладкий и элегантный материал с отличной способностью испарять пот с поверхности матраса, что обеспечивает высокий уровень воздухообмена.',
		'attr_padding_product' => 'Матрас имеет зимнюю и летнюю стороны благодаря используемым подкладкам. Зимняя сторона содержит 100% натуральные волокна, такие как кашемир, мериносовая шерсть, верблюжья шерсть и конский волос, для создания идеального микроклимата в холодные зимние дни и обеспечения уютного комфорта. Летняя сторона содержит 100% натуральные волокна, такие как шелк, конский волос, лен и хлопок, чтобы создать сухой и дышащий комфорт, предназначенный для теплого времени года.',
		'attr_comfort_product' => '3 см пены из натуральных материалов на основе мальвы Mallow foam Magniflex имеют успокаивающе-расслабляющие свойства. 6 см инновационного материала повышенной плотности Memoform HD, благодаря своей вязко-эластичной структуре, идеально адаптируются к форме тела, обеспечивая мягкий и уютный комфорт. Эти слои расположены как в верхней зимней, так и в нижней летней сторонах матраса.',
		'attr_layer_product' => 'Основной слой матраса выполнен из Eliosoft Breeze (14 см), из пены на основе натуральных материалов, которая благодаря своей высокой плотности имеет несравнимый уровень устойчивости к деформациям, а также демонстрирует потрясающие показатели по циркуляции воздуха. Материал обеспечивает мягкую и ортопедическую поддержку для тела, а благодаря добавленным натуральным экстрактам эвкалипта, придает приятное ощущение прохлады и тем самым повышает свежесть Вашего сна.',
		'image_composition' => '/img/Maestoso dual layer.jpg',
		'block_attr_collections' => 'Maestro Dual 14',
		'block_attr_materials' => 'Elioform Breeze, Mallow foam, Memoform HD.',
		'block_attr_coating' => 'Viscose Satin',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Thermoregulating, Extra comfort, Breathable',
		'block_attr_comfort_level' => 'Medium Soft',
		'block_attr_height' => '35 см',
		'block_attr_support' => 'Medium',
		'block_attr_warranty' => '12 years',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'block_attr_extra' => 'Multi-zone, Eco-friendly, fine natural materials, breathable natural materials, summer/winter side, breathable process with differentiated support',
		'prod_compose' => array(
			array('Чехол', 'Чехол выполнен сразу из двух материалов: вискоза/сатин, что делает чехол неверотяно мягким, шелковистым и приятным на ощупь.'),
			array('Дополнительные материалы чехла', 'Зимняя сторона содержит натуральные кашемир и шерсть мериноса, что придает комфортности в зимнее и холодное время. Летняя сторона содержит шелк и лен, создающие сухой и дышащий микроклимат, особенно в теплое время года. Также в чехле имеются слои пены Memoform Magniflex и гипоалергенного материала “hypoallergenic fiber”, которые обеспечивают дополнительный комфорт.'),
			array(' Уровень комфорта', 'Технология Dual Core позволяет создавать два разных уровня комфорта простым переворачиванием внутренних слоев матраса кверх-ногами. 3 см Mallow foam и 3 cм Memoform придают приятные ощущения мягкой поддержки спины, а также гарантируют максимальный уровень свежести. 3 см материала Aquabreeze обеспечивают более упругую и уютную поддержку спины (средняя мягкость). Все материалы имеют высокий 100% уровень воздухопропускаемости, оказывают дифференцированную поддержку телу и увеличенную диссипацию влаги в течение всего сна на матрасе.'),
			array(' Основной наполнитель', '17 см материала Elioform Magniflex в основе матраса, благодаря своей микроцеллюлярной, высокоплотной структуре пены, обеспечивает более прочную ортопедическую поддержку позвоночника.')
		),
		'attr' => '
			<ul>
			<li>ОРТОПЕДИЧЕСКИЙ, СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>: 35 см.</li>
			<li><b>Наполнитель</b>: Memoform, Elioform, Mallow foam, Aquabreeze.</li>
			<li><b>Степень жесткости</b>: Мягкий / средней мягкости. Dual.</li>
			<li><b>Дополнительные слои</b>: 100% натуральные: шерсть мериноса, лен, шелк, кашемир.</li>
			<li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
		',
		
		'desc' => '
		<div class="hnb_contmy">
				<div class="hnb_contcenter">
						<div class="half-width">
							<h3>Maestro Dual 14</h3>
							
							<p>Maestro Dual 14 сочетает в себе как накопленные знания и опыт ремесленников, так и современные технологии в производстве матрасов. Традиционные материалы с использованием инновационных материалов.
	</p>
							
							<p>Матрас высотой 35 см, что придает ему солидный вид, достойный линейки самых премиальных матрасов. Матрасы Maestro гарантируют оптимальный отдых каждую ночь в течение недели. Модель, например, идеально подходит для пар, которые имеют различные предпочтения по жесткости матраса. Технология Dual позволяет изменять жесткость матраса в процессе эксплуатации для левой и правой половины матраса. Матрас состоит из двух блоков, которые легко переворачиваются и таким образом возможно достигать разной жесткости на какой-либо из половин матраса. Например, переложив материал более мягкой стороной вверх, матрас станет мягче, и наоборот.
	</p>
						
						<p>В матрасе использована сразу несколько видов пен Magniflex, упругий Elioform, вязко-эластичный Memoform, Aquabreeze на водной основе и Mallow foam – пена с натуральным экстрактом мальвы, имеющая успокаивающий эффект.</p>
						<p>Дополнительно предусмотрены слои зима/лето, матрас является также двусторонним. В верхней части матраса это натуральные кашемир и шерсть мериноса, в нижней летней части матраса это натуральные лен и шелк.</p>
						</div>
						<div class="coin-slider">
							<img class="waterlatex-fix" alt="матрас Maestro Dual 14" src="/img/product/collection_maestro.jpg">
						</div>
				</div>
			</div>
			
		',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/ShortForm-Generic-480p-16-9-1409173089793-rpcbe5.mp4" />
			<object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'advant-tab'=>'',
		'cycle-title' => 'Ортопедические матрасы Magniflex Maestro Dual 14' ,
		'cycle-name' => 'Ортопедический матрас Maestro Dual 14',
		'sizes' => array(
array('80x200',201600.00),
array('90x190',215600.00),
array('90x200',226800.00),
array('120x200',302400.00),
array('140x200',352800.00),
array('160x200',403000.00),
array('180x200',453600.00),
array('200x200',503800.00),
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
	),
	
	array(
		'address' => 'freshgel-9',
		'parent_address' => 'snyatie-s-proizvodstva',
		'name' => 'Ортопедический матрас FreshGel 9 (снята с производства)',
		'title' => 'Итальянский элитный матрас FreshGel 9 | Официальный сайт Magniflex',
		'description' => 'Описание, фотографии, состав матраса FreshGel 9, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex freshgel, элитный матрас',
		'span_title' => 'Премиальная коллекция. Сны на облаке',		
		'attr_cat_product1' => '23 см',
		'attr_cat_product2' => 'Съемный Viscose.',
		'attr_cat_product3' => 'Cредней мягкости',
		'small_img' => '/img/product/small/matress_freshgel_old@2x.jpg',
		'img_preview' => array('/img/fresh-gel-new10.jpg','/img/1401663_393128467492198_3121220668932600819_o.jpg', '/img/10265364_393129667492078_825288634812530054_o.jpg', '/img/965033_393129687492076_8600362769740970552_o.jpg', '/img/1273742_393128384158873_4576023735318987186_o.jpg',  '/img/fresh_gel_new9open.jpg'),
		'img_carousel' => array('/img/product/big/FreshGel 9.jpg','/img/fresh-gel-new10.jpg','/img/1401663_393128467492198_3121220668932600819_o.jpg', '/img/10265364_393129667492078_825288634812530054_o.jpg', '/img/965033_393129687492076_8600362769740970552_o.jpg', '/img/1273742_393128384158873_4576023735318987186_o.jpg',  '/img/fresh_gel_new9open.jpg'),
		'small_img_alt' => 'элитный матрас Magniflex FreshGel 9',
		'img' => '/img/product/big/FreshGel 9.jpg',
		'img_alt' => 'элитный матрас Magniflex FreshGel 9',
		'video' => array('https://www.youtube.com/embed/WxfkRaCa-4U'),		
		'attr_cover_product' => 'Вискозное покрытие, мягкое и дышащее, делает матрас мягким и шелковистым на ощупь и более эффективно рассеивает пот, способствуя потоотделению. Полностью снимается и моется, чтобы всегда обеспечивать высокий уровень гигиены.',
		'attr_padding_product' => 'Подушка состоит из инновационной пены Magnigel, материала, свойства которого повышают воздухопроницаемость и гибкость, создавая ощущение свежести в течение всей ночи. Стеганая подкладка в Memoform, наряду с набивкой из волокна Super Soft, обеспечивает дополнительный комфорт, идеально адаптируясь к любому типу телосложения.',
		'attr_comfort_product' => 'Технология Dual Core позволяет получить различную степень комфорта, просто перевернув сердцевину матраса. «Мягкая» сторона для свежего, уютного и анатомического комфорта благодаря комбинированным слоям из Magnigel Foam (5 см) и Memoform (3 см), которые нежно поддерживают тело, и «Medium Soft» для более мягкой поддержки благодаря слою в Eliosoft.',
		'attr_layer_product' => 'Слой в Eliosoft (17 см) благодаря своей микроклеточной пенистой структуре высокой плотности удерживает спину в правильном положении. Мягкий комфорт, сочетающий эластичность и воздухопроницаемость.',
		'image_composition' => '/img/Magnigel-Deluxe-dual-12.jpg',
		'block_attr_collections' => 'Dolce Vita',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft',
		'block_attr_coating' => 'Outlast®, Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Уютный, Терморегулирующий, Дополнительный комфорт, Воздухопроницаемый',
		'block_attr_comfort_level' => 'Средней мягкости / Средний',
		'block_attr_height' => '23 см',
		'block_attr_support' => 'Средняя',
		'block_attr_warranty' => '12 лет',
		'block_attr_extra' => 'Dual Core, Cert. Medical Device',
		'attr' => '
		
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/freshgel_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  23 см</li><li><b>Степень жесткости</b>: Средней мягкости / Средней жесткости</li>
			
			
			<li><b>Срок службы</b>: не менее 15 лет</li></ul><br>
		',
		
		'desc' => '',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
		',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/y2mate.com - martin_castrogiovanni_per_magniflex_tv_spot_2014_15_vaaAmnxhdxg_360p.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'advant-tab'=>'',
		'desc' => '
			<div class="hnb_contarea">
			
			
			<p>
			
			<div style="clear:both;"></div>

			<div class="common_block_common">
				<div class="half-width">
					<h3>Настоящее воплощение комфорта и удовольствия во сне!</h3>
						<br />
						<p>Это Матрасы сочетающие в себе современные тенденции и элегантность.
							При первом взгляде бросается их легкий, воздушный образ.
							Стиль подчеркивается во всех деталях - начиная с эстетики совершенных форм
							и заканчивая явной ориентацией на комфорт спящего человека.
						</p>
				</div>
				<div class="coin-slider">
					<img src="/img/product/matress_magnigel.jpg" alt="FreshGel 9">
				</div>
			</div>
			
			<div class="common_block_common">
				<div class="coin-slider">
					<img itemprop="image" src="/img/product/fresh-gel-new9.jpg">
				</div>
				<div class="half-width">
							<h3 >Элитный гелевый ортопедический матрас Magniflex Freshgel 9</h3>
				
						<span class="hnb_eytextoutlast">
						<br><br>
						<strong><i>Гелевый матрас с эффектом сна на облаке. Отличный вариант для жаркой комнаты! </i></strong>
						<br>
						<br>
						Матрас коллекции Magnigel - Una nuvola in camera da letto - это облако в Вашей спальне.
						Вы когда-нибудь мечтали спать на облаке? Теперь это становится возможным благодаря матрасам Magniflex Freshgel! Сильно "дышащая" специальная структура материала Magnigel делает сон на матрасе достаточно мягким и свежим, матрас превращается в маленький райский уголок!
						<br>
									<br>
						Матрас Freshgel обеспечивает уникальную свежесть во время сна. Фактически инновационный дышащий материал обеспечивает отличную циркуляцию воздуха и создает комфортный микроклимат между телом и матрасом. Экологически чистый и достаточно прочный материал Memogel в совокупности с Memoform адаптируется под контуры тела, позволяя достигать невероятного расслабления во время сна. Присутствие в матрасе 3D слоя с тканью вискозы обеспечивает максимальную циркуляцию воздуха. Матрас спасает от обильного потовыделения во время сна.
						</span>
				</div>
				
			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex FreshGel 9' ,
		'cycle-name' => 'Ортопедический матрас FreshGel 9',
		'rec_buy' => '',
		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		'sizes' => array(
			array('90x200',58700.00)
			//array('160x200',90500.00),
			//array('180x200',101800.00),

		),

		//'discount_koef' => array('date_start' => '01.03.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1, ), //скидка
		
		// 'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '30.10.2019',
		// 	'sizes' => array('90x200','180x200'),
		// 	'prices' => array(
		// 		// '90x200' => 40720,
		// 		//'160x200' => 72400,
		// 		// '180x200' => 81440,
		// 	),
		// ), //скидка

		'yml_desc' => 'Комфортный терморегулирующий матрас  с гелевым слоем Magnigel Foam. Не нагревается от соприкосновения с телом: спать на нем прохладно даже жарким летом. Зимой не “отбирает” тепло! Эффект памяти. Необыкновенно проницаемый, дышащий. Уровень комфорта: достаточно Жесткий Высота: 23 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200'),

	),
	
	array(
		'address' => 'Imperiale-24',
		'parent_address' => 'snyatie-s-proizvodstva',
		'legend' => 'mattresses',
		'parent_name' => 'Снятые с производства',
		'name' => 'Imperiale 24 (снята с производства)',
		'title' => 'Imperiale 24 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрас Imperiale 24. Высокотехнологичные матрасы Premium класса в нашем каталоге.',
		'keywords' => 'imperiale, 24',
		'small_img' => '/img/product/very_small/Imperiale 24.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Imperiale 24',
		'img' => '/img/product/big/Imperiale 24.jpg',
		'img_carousel' => array('/img/product/big/Imperiale 24.jpg',),
		'img_alt' => 'элитный матрас Magniflex Imperiale 24',		
		'attr_cat_product1' => '24 см',
		'attr_cat_product2' => 'Несъемный, шерсть мериноса/хлопок',
		'attr_cat_product3' => 'Средней жесткости',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/imperiale_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  24 см</li><li><b>Степень жесткости</b>: Средней жесткости</li>
			
			
			<li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
		',
		
		'desc' => '
			<div class="ama_desc_tab_content">
			<div class="common_block_common ama-parallax-0">
				<div class="half-width">
				<h3>Роскошный ортопедический матрас</h3>
				Идеальный матрас. Создан специально для тех, кто предпочитает аскетизму роскошь и простор. Высокотехнологичный матрас Premium класса. Высокий анатомический и ортопедический эффекты делают этот матрас идеальной системой комфортного сна и отдыха.
				</div>
				<div class="coin-slider">
				<img itemprop="image" src="/img/imperial-1.jpg" alt="matrass" />
				</div>
			</div>
			</div>
		
		',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			<span class="hnb_bigtytles">
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Роскошный ортопедический матрас
					</span>
					<br />
					<span class="hnb_eytext">
			Идеальный матрас. Создан специально для тех, кто предпочитает аскетизму роскошь и простор. Высокотехнологичный матрас Premium класса. Высокий анатомический и ортопедический эффекты делают этот матрас идеальной системой комфортного сна и отдыха.
					</span>
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/imperial-1.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/imperial-2.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/imperial-3.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/imperial-4.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/imperial-5.jpg" alt="" />
														<span>

														</span>
											</a>

					</div>
				</div>
			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose®</span>
			<span class="hnb_eytext2">
			Несъемный  чехол с  технологией Viscose.<br>
			Элегантная объемная ткань
					</span>
			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/impero24.jpg">
			<ul class="hnb_krtovul">
		      	<li>Топер: Viscose + <br />4 см MEMOSOFT</li>
						<li>Слой Super Soft fibre (мягкая фибра)</li>
									<li>Слой Memoform 3 см</li>
						<li>Слой Eliosoft 3 см</li>
									<li>Слой Elioform 12 см</li>
								</ul>
					</span>
			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 24' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 24',
		/*'sizes' => array(
			array('160x200',130000.00),

		),*/
		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',
		/* array('90x200',73200.00),
			array('120x200',97600.00),
			array('140x200',113800.00),

			array('180x200',146200.00),
			array('200x200',162600.00), */
	),
	array(
		'address' => 'Imperiale-28',
		'parent_address' => 'snyatie-s-proizvodstva',
		'legend' => 'mattresses',
		'parent_name' => 'Снятые с производства',
		'name' => 'Imperiale 28',
		'title' => 'Итальянский элитный матрас Imperiale 28',
		'description' => 'Описание, фотографии, состав матраса Imperiale 28, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex imperiale, элитный матрас',
		'small_img' => '/img/product/very_small/Imperiale 28.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Imperiale 28',
		'img' => '/img/product/big/Imperiale 28.jpg',
		'img_alt' => 'элитный матрас Magniflex Imperiale 28',
		'attr_cat_product1' => '28 см',
		'attr_cat_product2' => 'Несъемный, шерсть мериноса/хлопок',
		'attr_cat_product3' => 'Средней жесткости',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/imperiale_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  28 см</li><li><b>Степень жесткости</b>: Средней мягкости</li>
			
			
			<li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
		',
		
		'desc' => '
		<div class="ama_desc_tab_content">
		<div class="common_block_common ama-parallax-0">
			<div class="half-width">
			<h3>Роскошный ортопедический матрас</h3>
			Идеальный матрас. Создан специально для тех, кто предпочитает аскетизму роскошь и простор. Высокотехнологичный матрас Premium класса. Высокий анатомический и ортопедический эффекты делают этот матрас идеальной системой комфортного сна и отдыха.
			</div>
			<div class="coin-slider">
			<img itemprop="image" src="/img/imperial-1.jpg" alt="matrass" />
			</div>
		</div>
		</div>
		
		',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			<span class="hnb_bigtytles">
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Роскошный ортопедический матрас
					</span>
					<br />
					<span class="hnb_eytext">
			Идеальный матрас. Создан специально для тех, кто предпочитает аскетизму роскошь и простор. Высокотехнологичный матрас Premium класса. Высокий анатомический и ортопедический эффекты делают этот матрас идеальной системой комфортного сна и отдыха.
					</span>
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/imperial-1.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/imperial-2.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/imperial-3.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/imperial-4.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/imperial-5.jpg" alt="" />
														<span>

														</span>
											</a>

					</div>
				</div>
			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose®</span>
			<span class="hnb_eytext2">
			Несъемный чехол стехнологией Viscose.<br>
			Элегантная объемная ткань
					</span>
					</span>
			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/impero28.jpg">
			<ul class="hnb_krtovul">
			<li>Топер: Viscose + <br />4 см MEMOSOFT</li>
						<li>Слой Super Soft fibre (мягкая фибра)</li>
									<li>Слой Memoform 3 см</li>
						<li>Слой Eliosoft 5 см</li>
									<li>Слой Elioform 14 см</li>
								</ul>
					</span>
			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 28' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 28',

		/* array('90x200',93200.00),
			array('120x200',124200.00),
			array('140x200',144800.00),
			array('160x200',165400.00),
			array('180x200',186000.00),   */

		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		//'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.08.2018', 'price_koef' => 0.2, ), //скидка
	),
	array(
		'address' => 'Imperiale-33',
		'parent_address' => 'snyatie-s-proizvodstva',
		'legend' => 'mattresses',
		'parent_name' => 'Снятые с производства',
		'name' => 'Imperiale 33 (снята с производства)',
		'title' => 'Imperiale 33 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'Предлагаем купить матрас Imperiale 33. Матрасы с высоким анатомическим и ортопедическим эффектом в нашем каталоге.',
		'keywords' => 'imperiale, 33',
		'small_img' => '/img/product/very_small/Imperiale 33.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Imperiale 33',
		'img' => '/img/product/big/Imperiale 33.jpg',
		'img_alt' => 'элитный матрас Magniflex Imperiale 33',
		'attr_cat_product1' => '33 см',
		'attr_cat_product2' => 'Несъемный, шерсть мериноса/хлопок',
		'attr_cat_product3' => 'Средней жесткости',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/imperiale_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  33 см</li><li><b>Степень жесткости</b>: Мягкий</li>
			
			
			<li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
		',
		
		'desc' => '
		<div class="ama_desc_tab_content">
		<div class="common_block_common ama-parallax-0">
			<div class="half-width">
			<h3>Роскошный ортопедический матрас</h3>
			Идеальный матрас. Создан специально для тех, кто предпочитает аскетизму роскошь и простор. Высокотехнологичный матрас Premium класса. Высокий анатомический и ортопедический эффекты делают этот матрас идеальной системой комфортного сна и отдыха.
			</div>
			<div class="coin-slider">
			<img itemprop="image" src="/img/imperial-1.jpg" alt="matrass" />
			</div>
		</div>
		</div>
		
		',
		'composition' => '',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			<span class="hnb_bigtytles">

				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Роскошный ортопедический матрас
					</span>
					<br />
					<span class="hnb_eytext">
			Идеальный матрас. Создан специально для тех, кто предпочитает аскетизму роскошь и простор. Высокотехнологичный матрас Premium класса. Высокий анатомический и ортопедический эффекты делают этот матрас идеальной системой комфортного сна и отдыха.
					</span>
					<div id="coin-slider">
			<a href="#" target="_blank">
												<img src="/img/imperial-1.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/imperial-2.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/imperial-3.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/imperial-4.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/imperial-5.jpg" alt="" />
														<span>

														</span>
											</a>

					</div>
				</div>
			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose®</span>
			<span class="hnb_eytext2">
			Несъемный чехол с  технологией Viscose.<br>
			Элегантная объемная ткань
					</span>
					</span>
			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce"src="/img/impero33.jpg">
			<ul class="hnb_krtovul">
			<li>Топер: Viscose + <br />4 см MEMOSOFT</li>
						<li>Слой Super Soft fibre (мягкая фибра)</li>
									<li>Слой Memoform 5 см</li>
						<li>Слой Eliosoft 5 см</li>
									<li>Слой Airyform Elioform 17 см</li>
								</ul>
					</span>

			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 33' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 33',
		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		/*'sizes' => array(
			array('90x200',112400.00),
			array('120x200',149800.00),
			array('140x200',174800.00),
			array('160x200',199600.00),
			array('180x200',224600.00),
			array('200x200',249600.00),
		),*/
		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		//'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
	),
	

	array(
		'address' => 'merino-childrens',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 'vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', 'height-20', 'children-merino', 'razmer1', 'razmer2', 'razmer3', 'razmer4','ortoped','vacu'),
		'parent_name' => 'Детские матрасы',
		'name' => 'Матрас Merino для детей',
		'title' => 'Детский ортопедический матрас Merino Magniflex | Merinos',
		'description' => 'Merino Magniflex — лучший ортопедический матрас для детей и подростков по версии авторитетного итальянского журнала Hachette Home',
		'keywords' => 'матрас для ребенка, матрас для подростка, детский матрас, merino magniflex, merinos',
		'attr_cat_product1' => '16 см',
		'attr_cat_product2' => 'Несъемный',
		'attr_cat_product3' => 'Жесткий',
		'small_img' => '/img/product/very_small/Merino-childrens.jpg',
		'small_img_alt' => 'матрас для детей Merino Magniflex',
		'img_preview' => array('/img/Merino-4.jpg', '/img/Merino-8.jpg', '/img/Merino-6.jpg'),
		'img_carousel' => array('/img/product/big/Merino(Merinos).jpg','/img/Merino-4.jpg', '/img/Merino-8.jpg', '/img/Merino-6.jpg'),
		'img' => '/img/product/big/magniflex_merino_baby.jpg',
		'img_alt' => 'детский матрас Merino Magniflex',
		'attr_cover_product_title' => 'Зимняя сторона',
		'attr_cover_product' => 'Чтобы зимой было тепло одна сторона матраса изготавливается из шерсти тонкорунного мериноса.',
		'attr_padding_product_title' => 'Наполнитель',
		'attr_padding_product' => 'Пена Elioform —  материал высокой плотности,  оказывающий качественную и упругую поддержку спины. Выдерживает нагрузку до 160 кг на спальное место. Мелкопористая структура обеспечивает высокий уровень циркуляции воздуха, благодаря чему матрас становится «дышащим» и гарантирует свежесть и комфортность сна. ',
		'attr_comfort_product_title' => 'Летняя сторона',
		'attr_comfort_product' => 'Изготавливается  из 100% хлопка двойного кручения. Материал натуральный, имеет высокий уровень износостойкости. ',
		'attr_cat_product1' => '16 см',
		'attr_cat_product2' => 'Несъемный, шерсть мериноса/хлопок',
		'attr_cat_product3' => 'Жесткий',
		'image_composition' => '/img/product/merino_matress_layers2.jpg',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'prod_compose' => array(
			array('Чехол. Зимняя сторона', 'Чтобы зимой было тепло, одна сторона матраса изготавливается из шерсти тонкорунного мериноса.'),
			array('Наполнитель', 'Пена Elioform (14 см) — материал высокой плотности, оказывающий качественную и упругую поддержку спины. Выдерживает нагрузку до 160 кг на спальное место. Мелкопористая структура обеспечивает высокий уровень циркуляции воздуха, благодаря чему матрас становится «дышащим», гарантирует свежесть и комфортность сна.'),
			array('Чехол. Летняя сторона', 'Изготавливается из 100% хлопка двойного кручения. Материал натуральный, имеет высокий уровень износостойкости.')
		),
		'attr' => '
			<ul><li>СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  16 см</li><li><b>Степень жесткости</b>: достаточно жесткий</li>
			<li><b>Срок службы</b>: не менее 10 лет</li>
			</ul>
		',
		'desc' => '
			<div class="common_block_common fixcommon-block">
				<div class="half-width">
				    <h3>Здоровый и комфортный сон ребенка</h3>
				    <strong><i>Создан специально для детей</i></strong>
				    <p>Эта очень практичная, износостойкая и неприхотливая модель производится в Италии из натуральных материалов с использованием современных технологий. В разработке матраса принимали участие ведущие итальянские врачи-ортопеды и специалисты компании Magniflex.</p>
				    <h3>Один из лучших детских матрасов</h3>
				    <strong><i>С оригиналом статьи Вы можете ознакомиться в номере Hachette Home 9/10 или на официальном сайте издания</i></strong>
				    <p>Детский матрас Merino (прежние названия «Merinos», «Model-S») — лучший ортопедический матрас для детей и подростков по версии авторитетного итальянского журнала Hachette Home.<br /><br />
				    Неоднократный лауреат международных выставок, в том числе в Милане (Италия), Лас-Вегасе (США), Бирмингеме (Великобритания) и Москве (Россия).</p>
				</div>
				<div class="coin-slider">
				<img alt="спящий ребенок" src="/img/products/mattresses/magniflex_baby.jpg">
				</div>
			</div>
			
			<br /><br />
			
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>ДЛЯ РАЗВИТИЯ МЫШЦ и ПРАВИЛЬНОГО ФОРМИРОВАНИЯ ПОЗВОНОЧНИКА</h3>
				    <img alt="Матрас magniflex для правильного формирования позвоночника" src="/img/products/mattresses/magniflex_baby_1.jpg">
				    <p class="text-jus">Матрас Magniflex Merino — это ортопедический матрас, созданный с учетом потребностей детского (подросткового) организма : не деформируется, позволяет ребенку принять идеальное положение для сна, рекомендованное врачами-ортопедами.</p>
				<h3>Практичный и износостойкий</h3>
				    <p class="text-jus">Часто производители матрасов советуют: <i>"Матрас — это не спортивная площадка. Попросите детей играть в другом месте: забавные прыжки могут существенно навредить матрасу".</i><br />
                    <img alt="Прыгай на матрасе magniflex" src="/img/magniflex-merino-children-05.jpg">
                    У нас другие правила.<br />
                    В основе детского матраса Merino — специально разработанный лабораторией Magniflex материал Elioform: ему не страшны прыжки. Поэтому прыгайте, играйте, смейтесь, веселитесь, ведь детство чуточку короче, чем срок службы этого матраса.
				    </p>
				</div>
				<div class="half-width fixcommon-block">
				<h3>Дыщащий, гигиеничный</h3>
				    <p class="text-jus">Внутренний слой матраса производится из упругого, износостойкого материала Elioform (Элиоформ), превосходящего по своим свойствам натуральный латекс. Благодаря использованию материала Elioform матрас становится «дышащим»: пропускает воздух сквозь себя, легко выводит влагу и запахи, обеспечивая высокий уровень гигиены, хорошо приспосабливается к форме тела.</p>
				<h3>Гипоаллергенный, вакуумная упаковка</h3>
					<p class="text-jus">Все ортопедические матрасы Magniflex гипоаллергенные, не оказывают на организм магнитного или электростатического воздействия, так как в их составе отсутствуют металлические детали. Поставляются в вакуумной (рулонной) упаковке — легко самостоятельно довезти до места назначения даже на общественном транспорте.</p>					
				<h3>Тепло зимой, прохладно летом</h3>
				    <p class="text-jus">Матрас двухсторонний: в зависимости от времени года можно использовать разные стороны. «Летняя» сторона изготавливается из натуральной 100% хлопковой ткани, на которой комфортно спать теплыми ночами; «зимняя» — из тонкорунной шерсти мериноса, согревающей в период холодов.</p>
				</div>
			</div>
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlefsostav">
					 <img itemprop="image" src="/img/merino.jpg">
				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX MERINO ДЛЯ ДЕТЕЙ</b><br><br>
			ТОЛЬКО натуральные экологически чистые ткани и материалы<br><br><br>
			1 - Зимняя сторона: <a href="/magniflex/fabric-and-treatments#merinos">шерсть тонкорунного мериноса</a><br><br>
			2 - Антистатическая прослойка<br><br>
			3 - Гиппоаллергенный терморегулирующий слой<br><br>
			4 - Слой <a href="/magniflex/inner-plates#eliocel">Elioform</a> (1 см)<br><br>
			5 - Изоляционная ткань<br><br>
			6 - Основной слой: <a href="/magniflex/inner-plates#eliocel">Elioform</a>  <br><br>
			7 - Летняя сторона: 100% <a href="/magniflex/fabric-and-treatments#coton">натуральный хлопок</a>
			</p>
				</div>
			</div>
		',
		'recommend' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/rekomendovano-cito.jpg" height="196" title="Матрас рекомендован ЦИТО РФ">
					<br>
				Рекомендован Центральным Институтом <br>
					Травматологии и Ортопедии РФ
				</div>
				<div class="hnb_contrig">
			<h4>Рекомендуется:</h4>
			Детям    <br>
			С первых дней жизни нашим детям необходима  надежная опора для правильного формирования изгибов позвоночника;
			   <br><br>
			Подросткам  <br>
			В период развития костно-мышечной ткани  и формирования позвоночного столба  необходимо  уделять особое внимание на правильное положение тела во время ночного сна;
			   <br><br>
			<h4>В России</h4>
			Ортопедические матрасы Magniflex Merino (Merinos) рекомендованы Центральным Институтом Травматологии и Ортопедии Российской Федерации им. Н.Н. Приорова в профилактических целях так и для лечения болезней опорно-двигательного аппарата, коррекции при повреждении позвоночника. Заключение выдал директор ЦИТО, член кор. РАМН, профессор Ю.Г. Шапошников.
			   <br><br>
			Ортопедический матрас Magniflex Merino (Merinos) для детей  рекомендован Центральным Институтом Травматологии и Ортопедии РФ для профилактики и лечения болезней опорно-двигательного аппарата.
			Постоянное применение ортопедического матраса Merino cпособствует гармоничному развитию позвоночника, восстанавливает его симметрию,  приносит здоровье и силу, полноценный, комфортный сон.
			 <br><br>
			Матрасы модели Merino отвечают всем ортопедическим, анатомическим и функциональным требованиям по коррекции и профилактике повреждений позвоночника,  таких как: сколиоз,  лордоз, кифоз, боли в суставах.
			 <br><br>
			Мнение российского врача-ортопеда  (выдержка): <br>
			"Во сне человек проводит около трети своей жизни. Чтобы чувствовать себя бодрым, необходим полноценный отдых и здоровый сон. Даже абсолютно здоровым людям рекомендованы ортопедические матрасы, позволяющие позвоночнику принимать удобное и правильное положение во время сна. Тем более если есть проблемы с позвоночником или суставами, в этом случае ортопедический матрас просто необходим. Особенно он рекомендуется врачами при сколиозах, лордозах, кифозах и травмах позвоночника. <br>
			Правильное положение позвоночника во время сна очень важно для  детей и подростков. Боковое искривление позвоночника - сколиоз - чаще встречается у школьников и взрослых, которые много времени проводят в сидячем положении. В комплексном лечении при начальных формах сколиоза успешно применяются детские ортопедические матрасы, которые снижают давление на межпозвоночные диски.
			 <br> <br>
			<h4>В мире</h4>
			По мнению известного итальянского доктора-ортопеда Марчелло Нава (Клуб Франческо Конти, Милан): <br>
			"... <br>
			Ортопедические матрасы Magniflex серии Merino действительно обладает замечательными свойствами. Их упругость и плотность позволяют телу принять и, главное, сохранить правильное  положение  во время сна и отдыха, не нарушая физиологических изгибов позвоночника,  помогая их восстановлению...<br>
			...<br>
			Для детей и подростков особенно рекомендую к повседневному использованию детские ортопедические матрасы Magniflex серии Merino. Они способствуют правильному развитию позвоночника, помогают сохранить здоровье на долгие годы...»
			<br><br>
			<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merino-children-01.jpg" alt="Детский матрас Merinos: Каждый имеет право на сон!" style="width: 640 px;"><br>
			Magniflex: каждый имеет право на отличный сон!
				</div>
			</div>
		',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 96-ти странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 96-ти странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '
			<div class="hnb_contlef">
					<img width="280" src="/img/otzyvy-detskie-matrasy.jpg" height="196" title="Реальные отзывы покупателей детских матрасов Магнифлекс">
					<br>Ни одного отрицательного отзыва!</div>
				<div class="hnb_contrig">
			<h3>Реальные отзывы: детский матрас Merino Magniflex</h3>
			<p>В этом разделе представлена достоверная, проверенная информация о детских матрасах Merino Magniflex. До 2011 года модель называлась "Magniflex Merinos для детей", в 2011 году в состав и чехол матраса были внесены улучшения и изменено название. Merino Magniflex - модель универсальная, очень удачная: с незначительными изменениями она выпускается и с успехом продается в мире уже более 20 лет. За это время только в России объем продаж превысил порог 50 000 единиц. За эти 20 лет нами не было получено ни одной претензии по качеству изделия, а в интернете Вы не найдете ни одного отрицательного отзыва на эту модель, напротив,  на различных специализированных форумах часто можно встретить благодарные сообщения от пользователей продукции компании Магнифлекс. Ниже приведены выдержки из сообщений покупателей:</br></br>
			<em>
			"5 лет назад покупала матрас для старшего ребенка, сейчас заказала меринос и для младшего. Матрас достаточно жесткий, в самый раз для формирования прямой спинки у ребенка. Зимой очень удобна шерстяная сторона, дает дополнительное тепло, особенно актуально в осенний период, когда еще не налажено отопление. За 5 лет использования внешних изменений матрас не претерпел, хотя на нем прыгали, кувыркались, ели, пили и прочее... "</br></br>
			"... остановили свой выбор на Merino Magniflex. Вот уже 2 месяца, как его опробовали и с чистой совестью можем сказать - ни секунды не пожалели о таком выборе! Ребенок спит, как ангелочек на уютном облачке, и даже осанка заметно улучшилась!"</br></br>
			"Мы брали такие матрасы, Magniflex Merinos, для наших детей, дети выросли, а матрасы остались такие же как были... Очень удачные матрасы. Сносу им просто нет."</br></br>
			</em>
			Люди, которые несколько лет назад выбрали для себя  матрасы марки Magniflex, выбирают их сейчас для своих детей. Нам очень приятно, когда к нам приходят заказы, с подобными заметками:</br></br>
			<em>...Добрый день! Очень хочу приобрести именно матрас меринос магнифлекс, пользовалась им много лет, очень нравится. Теперь хочу купить его для своей дочки. Но недавно переехала в Австралию. Можете ли вы доставить его в Австралию?...</em></br></br>
			</br></br>
			Но САМОЕ ГЛАВНОЕ для нас - это не теплые слова.
			</br></br>
			<strong>
			Главное - это тот факт, что за 20 лет на наших матрасах выросли несколько поколений детей. Выросли здоровыми и крепкими.</strong>  </br></br>
			В завершении, хочу написать: </br>
			Я как отец двух очаровательных близнецов с гордостью могу отметить: для своих детей я выбираю исключительно итальянские матрасы Magniflex, на этом же основании я советую (и зачастую дарю) эти матрасы своим близким друзьям!
			<br><br>
			<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merino-children-08.jpg" alt="Детский матрас Merinos: лучший сон!" style="width: 640 px;"><br>
			</p>
			<div style="clear: both;"></div>
			</div>
		',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Merino childrens',
		'cycle-name' => 'Ортопедический матрас Merino childrens',
		'sizes' => array(
array('60x120',11200.00),
array('65x125',12800.00),
array('70x140',15600.00),
array('70x160',17600.00),
array('70x190',20800.00),
array('75x190',22300.00),
array('80x160',20000.00),
array('80x180',22400.00),
array('80x190',23700.00),
array('80x195',24400.00),
array('80x200',25200.00),
array('85x190',25300.00),
array('85x200',26800.00),
array('90x180',25300.00),
array('90x190',26900.00),
array('90x195',27600.00),
array('90x200',28000.00),
		),

		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),

		'yml_desc' => '
			Неоднократный лауреат десяток международных выставок в том числе в Милане (Италия), Лас-Вегасе (США), Бирмингеме (Великобритания), Москве (Россия). Практичный, не деформируется, позволяет принимать идеальное положение для сна, которое советуют специалисты-ортопеды. Внешний слой: летняя поверхность создается из натуральной 100% хлопковой ткани: подарит комфортный прохладный сон в знойную ночь; зимняя поверхность - тонкорунная шерсть мериноса: согреет в период морозов.
			Срок службы: не менее 12 лет. Высота: 16 см.
		',
		'yml_torgmail' => true,
	),
	array(
		'address' => 'b-bamboo',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Детские матрасы',
		'other_categories' => array('collectio-b-bamboo','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', 'height-20', 'action', 'children-bambo', 'razmer1'),
		'name' => 'Матрас B-Bamboo для детей',
		'title' => 'Детский ортопедический матрас B-Bamboo | Официальный сайт Magniflex',
		'description' => 'Описание, фотографии, состав детского матраса B-Bamboo Magniflex',
		'keywords' => 'детский матрас, детский ортопедический матрас, матрас для детей, детский матрас, матрас для мальчика, подростковый матрас',
		'attr_cat_product1' => '10 см',
		'attr_cat_product2' => 'Несъемный',
		'attr_cat_product3' => 'Жесткий',
		'small_img' => '/img/product/very_small/Merino-Bamboo-children.jpg',
		'img_preview' => array('/img/B-Bamboo-reklama-2.JPG', '/img/B-Bamboo-reklama-3.JPG', '/img/bambino.jpg'),
		'img_carousel' => array('/img/product/big/Merino-Bamboo-children.jpg','/img/B-Bamboo-reklama-2.JPG', '/img/B-Bamboo-reklama-3.JPG', '/img/bambino.jpg'),
		'small_img_alt' => 'детский матрас - Merino Bambo Magniflex',
		'img' => '/img/product/big/Merino-Bamboo-children.jpg',
		'img_alt' => 'детский матрас - Merino Bambo Magniflex',
		'img_alt' => '',
		'attr_cover_product' => 'Подкладка из бамбукового волокна благодаря своему составу с микротрещинами обеспечивает высокую степень вентиляции и впитывания влаги, благодаря чему ваш отдых всегда будет прохладным и сухим.',
		'attr_padding_product' => 'Прокладка из гипоаллергенного волокна обеспечивает дополнительный комфорт на всю ночь.',
		'attr_comfort_product' => '',
		'attr_layer_product' => 'Слой Elioform (8 см) благодаря высокоплотному составу микропористой пены обеспечивает более прочную и ортопедическую поддержку позвоночника.',
		'image_composition' => '/img/Fiaba-4-e-4-Plus.jpg',
		'block_attr_collections' => 'Fiaba',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft',
		'block_attr_coating' => 'Bamboo',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => ' Терморегулирующий',
		'block_attr_comfort_level' => 'Средней мягкости / Жесткий',
		'block_attr_height' => '10 см',
		'block_attr_support' => 'Средней мягкости / Жесткий',
		'block_attr_warranty' => '12 лет',
		'block_attr_extra' => 'Натуральные дышащие материалы',
		'attr' => '
			<ul><li>Ортопедический матрас. ПРОИЗВОДСТВО ИТАЛИЯ</li><li><b>Высота</b>:  10 см</li><li><b>Степень жесткости</b>: Средней мягкости / Жесткий</li>
			<li><b>Вес</b> до 50 кг.</li>
			<li>Условия: доставка, оплата</li><li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
			
		',
		'desc' => '
			
		
			<div class="hnb_contcenter">
				<div class="block_line2">
					<div class="half-width">
					<h3>КОЛЛЕКЦИЯ МАТРАСОВ B-BAMBOO</h3>
						Детские матрасы B-Bamboo – это забота о здоровье Вашего ребенка, которая начинается с ранних лет. При покупке детской кроватки встает нелегкий выбор правильного матраса. Он должен обладать хорошими ортопедическими свойствами, не содержать вредных материалов, не вызывать аллергических реакций и не быть причиной риска развития аллергии. Также матрас должен быть отлично вентилируемым, невысоким и практичным. Матрас, произведенный в Италии на фабрике Magniflex обладает всеми необходимыми качествами и свойствами, которые удовлетворяю потребности самых трепетных родителей.
					</div>
					<div class="half-width_img"><img  src="/img/magniflex-merino-children-11.png" alt="КОЛЛЕКЦИЯ МАТРАСОВ B-BAMBOO"></div>
				</div>
					

			<div style="clear:both;"></div>
			</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex B-Bamboo',
		'cycle-name' => 'Ортопедический матрас Merino B-Bamboo',
		'sizes' => array(
			array('60x120',17100.00)
		),
		//'discount_koef' => array('date_start' => '31.10.2019', 'date_end' => '31.12.2020', 'price_koef' => 0.20, ), //скидка
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '12.4.2017',
			//'sizes' => array('60x120', '160x200', '180x200'),
			//'prices' => array(
				//'60x120' => 9900.00,

			//),
		//), //скидка
		'yml_desc' => '
			Отличный матрас для детей и подростков. Практичный, износостойкий, не деформирующийся, позволяет принимать идеальное положение для сна, которое советуют специалисты-ортопеды. Внешний слой: летняя поверхность создается из натуральной 100% хлопковой ткани: подарит комфортный прохладный сон в знойную ночь; зимняя поверхность - тонкорунная шерсть мериноса: согреет в период морозов.
			Срок службы: не менее 12 лет. Высота: 16 см.
		',
		'yml_torgmail' => true,
	),
	array(
		'address' => 'b-bamboo-sfoderabile',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_address2' => 'mattresses',
		'other_categories' => array('collectio-b-bamboo','orthopedic_mattresses', 'vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', 'height-20', 'action', 'children-sfo', 'razmer1','ortoped','vacu'),
		'parent_name' => 'Детские матрасы',
		'name' => 'Матрас B-Bamboo Sfoderabile со съемным чехлом для детей',
		'title' => 'Детский ортопедический матрас B-Bamboo Sfoderabile',
		'description' => 'Описание, фотографии, состав детского матраса B-Bamboo Sfoderabile (съемный чехол) Magniflex',
		'keywords' => 'детский матрас, детский ортопедический матрас, матрас для детей, детский матрас, матрас для мальчика, подростковый матрас',
		'attr_cat_product1' => '10 см',
		'attr_cat_product2' => 'Съемный',
		'attr_cat_product3' => 'Жесткий',
		'small_img' => '/img/product/very_small/Merino-Bamboo-children.jpg',
		'small_img_alt' => 'детский матрас - Merino Bambo Magniflex',
		'img_preview' => array('/img/B-Bamboo-reklama-2.JPG', '/img/B-Bamboo-reklama-3.JPG', '/img/bambino.jpg'),
		'img_carousel' => array('/img/product/big/Merino-Bamboo-children.jpg','/img/B-Bamboo-reklama-2.JPG', '/img/B-Bamboo-reklama-3.JPG', '/img/bambino.jpg'),
		'img' => '/img/product/big/Merino-Bamboo-children.jpg',
		'img_alt' => 'детский матрас - Merino Bambo Magniflex',
		'attr_cover_product' => 'Подкладка из бамбукового волокна благодаря своему составу с микротрещинами обеспечивает высокую степень вентиляции и впитывания влаги, благодаря чему ваш отдых всегда будет прохладным и сухим. Полностью снимается и моется для идеальной гигиены.',
		'attr_padding_product' => 'Прокладка из гипоаллергенного волокна обеспечивает дополнительный комфорт на всю ночь.',
		'attr_comfort_product' => '',
		'attr_layer_product' => 'Слой Elioform (8 см) благодаря высокоплотному составу микропористой пены обеспечивает более прочную и ортопедическую поддержку позвоночника.',
		'image_composition' => '/img/Fiaba-4-e-4-Plus.jpg',
		'block_attr_collections' => 'Fiaba',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft',
		'block_attr_coating' => 'Bamboo',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => ' Терморегулирующий',
		'block_attr_comfort_level' => 'Средней мягкости / Жесткий',
		'block_attr_height' => '10 см',
		'block_attr_support' => 'Средней мягкости / Жесткий',
		'block_attr_warranty' => '12 лет',
		'block_attr_extra' => 'Натуральные дышащие материалы',
		'attr' => '
			<ul><li>Ортопедический матрас. ПРОИЗВОДСТВО ИТАЛИЯ</li><li><b>Высота</b>:  10 см</li><li><b>Степень жесткости</b>: <!--средней жесткости--></li>
			<li><b>Вес</b> до 60кг.</li>
			<li>Условия: доставка, оплата</li><li><b>Срок службы</b>: не менее 12 лет</li></ul><br>
			
		',
		'desc' => '
			
		
			<div class="hnb_contcenter">
				<div class="block_line2">
					<div class="half-width">
					<h3>КОЛЛЕКЦИЯ МАТРАСОВ B-BAMBOO</h3>
						Детские матрасы B-Bamboo – это забота о здоровье Вашего ребенка, которая начинается с ранних лет. При покупке детской кроватки встает нелегкий выбор правильного матраса. Он должен обладать хорошими ортопедическими свойствами, не содержать вредных материалов, не вызывать аллергических реакций и не быть причиной риска развития аллергии. Также матрас должен быть отлично вентилируемым, невысоким и практичным. Матрас, произведенный в Италии на фабрике Magniflex обладает всеми необходимыми качествами и свойствами, которые удовлетворяю потребности самых трепетных родителей.
					</div>
					<div class="half-width_img"><img  src="/img/magniflex-merino-children-11.png" alt="КОЛЛЕКЦИЯ МАТРАСОВ B-BAMBOO"></div>
				</div>
					

			<div style="clear:both;"></div>
			</div>
		',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex B-Bamboo-Sfoderabile',
		'cycle-name' => 'Ортопедический матрас Merino B-Bamboo-Sfoderabile',
		'sizes' => array(
			array('60x120',21100.00)
		),
		//'discount_koef' => array('date_start' => '31.10.2019', 'date_end' => '31.12.2020', 'price_koef' => 0.2),
		//'discount_koef' => array('date_start' => '01.07.2015', 'date_end' => '12.04.2017',
			//'sizes' => array('60x120', '160x200', '180x200'),
			//'prices' => array(
				//'60x120' => 12200.00,

			//),
		//), //скидка
		'yml_desc' => '
			Отличный матрас для детей и подростков. Практичный, износостойкий, не деформирующийся, позволяет принимать идеальное положение для сна, которое советуют специалисты-ортопеды. Внешний слой: летняя поверхность создается из натуральной 100% хлопковой ткани: подарит комфортный прохладный сон в знойную ночь; зимняя поверхность - тонкорунная шерсть мериноса: согреет в период морозов.
			Срок службы: не менее 12 лет. Высота: 16 см.
		',
		'yml_torgmail' => true,
	),
	array(
		'address' => 'pensiero-6-childrens',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses-2', '80x160', 'height-20', 'children-pens', 'razmer5','ortoped','memo','vacu','podrostkovue-matrasy'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Матрас Pensiero 6 для детей',
		'title' => 'Детский ортопедический матрас Pensiero 6',
		'description' => 'Предлагаем матрас Matriflex Pensiero 6. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 6, magniflex, merino',
		'attr_cat_product1' => '15 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий/Средней жесткости',
		'small_img' => '/img/product/very_small/penseniero-6-child.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/penseniero-6-child.jpg',
		'img_carousel' => array('/img/product/big/penseniero-6-child.jpg'),
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'image_composition' => '/img/Ricordo-6.jpg',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

        'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring perspiration.',
		'attr_padding_product' => 'The Memoform padding adapts perfectly to the body’s shape, giving a pleasant feeling of lightness and relaxation. The hypoallergenic fiber provides extra comfort all night long.',
		'attr_comfort_product' => 'The layer in Elioform (12 см), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr' => '
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  15 см</li><li><b>Степень жесткости</b>: Регулируемая</li>
			
			
			<li><b>Срок службы</b>: не менее 10 лет</li></ul><br>
			
		',
		'desc' => '
			<style>
				.product_top .price{}
				#breadcrumbs{
					background-image: url(/img/PENSIERO_250.png);
					height: 250px;
				}
			</style>
		
			<div class="hnb_contcenter">
			<div class="block_line2">
				<div class="half-width">
				<h3>КОЛЛЕКЦИЯ МАТРАСОВ PENSIERO</h3>
					Ортопедический матрас Pensiero – это новинка фабрики Magniflex, следующий уровень комфорта после серии упругих матрасов коллекции Stile.
					<br><br>
					Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид. Отличие всех трех моделей в серии Pensiero только в высоте, одинаковые материалы и жесткость.
					<br><br>
					Белоснежный чехол матраса выполнен из материала вискоза.
					Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
					Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
					Вискоза не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
					Матрас Pensiero – это матрас со средней степенью жесткости, является усовершенствованной моделью серии Stile. Не содержит шерсти и имеет одинаковый чехол, но при этом разную жесткость с обеих сторон. С верхней стороны есть 2 см слоя мемоформ, с нижней стороны обычный упругий Elioform. Таким образом, матрас смело можно назвать двусторонним. Обеспечивает усиленную поддержку спины и позвоночника, при этом гарантируя повышенный уровень комфорта, чем например модель Stile за счет слоя memoform 2 см – эффект памяти, анатомический матрас.
					Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
				</div>
			    <div class="half-width_img"><img  src="/img/products/mattresses/pensiero_mattress.jpg" alt="Ортопедический матрас Magniflex из коллекции Pensiero"></div>
			</div>
					

			<div style="clear:both;"></div>
			</div>

		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Pensiero' ,
		'cycle-name' => 'Ортопедический матрас Pensiero 6',
		'sizes' => array(
array('80x190',34000.00),
array('80x200',35700.00),
array('90x190',38300.00),
array('90x200',40300.00),
		),
		//'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
 //скидка
		//'discount_koef' => array('date_start' => '24.11.2016', 'date_end' => '10.01.2017', 'price_koef' => 0.2, ), //скидка
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'sizes' => array('90x200', '160x200', '180x200'),
			//'prices' => array(
			//	'90x200' => 17600.00,
			//	'160x200' => 31300.00,
			//	'180x200' => 35100.00,
			//),
		//), //скидка

	),
	array(
		'address' => 'stile-6-childrens',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', '80x160', 'height-20', 'children-stile6', 'razmer5', 'razmer1', 'razmer3','ortoped','vacu','podrostkovue-matrasy'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Детский матрас Stile 6 ',
		'title' => 'Детский ортопедический матрас Stile 6 Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 6. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас для детей, детский матрас, матрас для подростков, ортопедический матрас для детей, Stile 6, magniflex',
		'attr_cat_product1' => '15 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий',
		'small_img' => '/img/product/very_small/style-6-child.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img' => '/img/product/big/style-6-child.jpg',
		'img_carousel' => array('/img/product/big/style-6-child.jpg'),
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'image_composition' => '/img/Stiloso-6.jpg',
		
'banner_category' => '/img/black-friday-icon.png',
'banner_product' => '/img/Layer 1.png',

		'prod_compose' => array(
			array('Ткань чехла ', 'Чехол изготавливается из натуральной ткани Viscose. Это невероятно мягкий, шелковистый и проницаемый материал, обладающий способностью хорошо рассеивать пот и обеспечивающий идеальную вентиляцию матраса.'),
			array('Слои', 'Слой Magnifoam Eliosoft гарантирует отличную поддержку, придает дополнительный комфорт. <br />
			               Гипоалергенный терморегулирующий наполнитель — защитный внутренний слой, повышающий уровень гигиены матраса.'),
			array('Наполнитель', 'Латексная пена Magnifoam Elioform (13 см), отличается высокой плотностью и микроклеточной структурой, обеспечивает жесткую, ортопедически правильную поддержку спины и позвоночника.')
		),
		'attr' => '
		<style>
				#breadcrumbs{
					background-image: url(/img/style_250.png);
					height: 250px;
				}
		</style>
			<ul><li>
			СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Высота</b>:  15 см</li><li><b>Степень жесткости</b>: жесткий </li>
			<li><b>Срок службы</b>: не менее 10 лет</li></ul><br />
			
		',
		'desc' => '
		<div class="hnb_contcenter">
		<div class="block_line2">
		    <div class="half-width">
			<h3>КОЛЛЕКЦИЯ МАТРАСОВ STILE</h3>
			<p>Ортопедические матрасы серии Stile – новинка фабрики Magniflex, вобравшая в себя лучшие качества легендарного матраса Magniflex Merinos (S model). Отличается высоким уровнем жесткости и невысокой ценой. Главные отличия от Magniflex Merinos: использование современных технологий и отсутствие деления сторон на зимнюю и летнюю. Не содержит шерсти, имеет одинаково жесткий чехол с обеих сторон. Обеспечивает усиленную поддержку спины и позвоночника.<br /><br />
			Матрасы коллекции Stile изготавливаются из натуральных тканей, имеют привлекательный внешний вид. Белоснежный чехол матраса выполнен из волокон "вискоза", получаемых из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокна и нити, из которых изготавивается ткань.
            Вискоза обладает высокой гигроскопичностью (способностью поглощать водяные пары, впитывать влагу), если сравнивать вискозу с натуральным хлопком, то она способна впитать  в два раза больше влаги. Вискоза не электризуется, является очень "дышащим" материалом,  не вызывает аллергии.<br /><br />
            Современная латексная пена Elioform Magniflex обладает мелкопористой структурой наравне с высокой плотностью, что усиливает способность матраса циркулировать воздух и продлевает срок службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.<br /><br />
            Матрас поставляется в рулоне в вакуумной упаковке.
            </p>
            </div>
            <div class="half-width_img">
            <img  src="/img/products/mattresses/style_mattress.jpg" alt="матрас Stile 6 Magniflex">
            </div>
        </div>
        </div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Stile' ,
		'cycle-name' => '	Ортопедический матрас Stile 6',
		'sizes' => array(
array('60x120',13100.00),
array('70x140',17600.00),
array('80x180',25500.00),
array('80x190',27100.00),
array('80x200',28400.00),
array('90x190',30500.00),
array('90x200',31800.00),
		 ),
		 //'discount_koef' => array('date_start' => '16.12.2019', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
	 ),

	
	array(
		'address' => 'ortopedicheskoe-osnovanie-komfort',
		'parent_address' => 'bases',
		'parent_address2' => 'bases',
		'parent_name' => 'Аксессуары',
		'name' => 'Ортопедическое основание «Комфорт Плюс»',
		'other_categories' => array('comfort_new'),
		'title' => 'Ортопедическое основание «Комфор Плюст», решетка для матрасов',
		'description' => 'фотографии, описание, характеристики ортопедическое основание «Комфорт Плюс»',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, ортопедическое основание Комфорт, комфорт плюс',
		'small_desc' => '
		<p class="hnb_harek">
		Березовые ламели <br />
		Стандартная высота 28 см, возможен любой размер<br />
		Максимальный вес спящего: 150 кг<br />
		Гарантия: 3 года  <br />
		Производитель: Comfort Line (Россия)
		</p>
		',
		'attr_cat_product1'=>'Березовые ламели',
		'attr_cat_product2'=>'28 см, возможна любая',
		'attr_cat_product3'=>'150 кг',
		'attr_cat_product4'=>'3 года',
		'attr_cat_product5'=>'Comfort Line(Россия)',
		'small_img' => '/img/product/very_small/comfort+small.jpg',
		'small_img_alt' => 'Ортопедическое основание «Комфорт Плюс»',
		'img' => '/img/product/big/comfort+.jpg',
		'img_carousel' => array('/img/product/big/comfort+.jpg'),
		'img_alt' => 'Ортопедическое основание решетка "Комфорт Плюс" ',
		'attr' => '
			<ul>
			<li><b>Стандартная высота</b>: 28 см</li>
			<li><b>Цвет каркаса</b>: черный</li>
			<li><b>Максимальный вес спящего</b>: 150 кг</li>
			<li><b>Гарантия</b>: 3 года</li>
			</ul><br />
			
			',
		
		'desc' => '

		<div class="common_block_common ama-parallax-0">
				<div class="half-width">
				<h3>Ортопедическое основание «Комфорт Плюс» начального уровня</h3>
				Ортопедические основания необходимы для усиления ортопедических свойств матрасов: упругие поперечные перегородки, их называют "ламели", реагируя на изменение нагрузки под весом спящего человека, равномерно распределяют давление по всей площади решетки.<br />
                Каркас и опоры изделия производятся из металлической стальной трубы, покрытой экологически чистой эпоксиполиэфирной порошковой краской с дальнейшей обработкой высокими температурами. Гнуто-клееные ламели изготавливаются из натуральной древесины (используется "береза").<br />
                Основание универсальное — благодаря скругленным углам легко устанавливается в любые кровати, в том числе и в оснащенные внутренними элементами крепления. Возможно использование изделия отдельно от кровати: в этом случае матрас помещают непосредственно на решетку.<br /><br />
                <h3>Характеристики</h3>
                Основа каркаса: профильная металлическая труба 300х300х15мм.<br />
                Ламели берёзовые, широкие, толщиной 8 мм, шириной 53 мм, крепление поверх металлической трубы.<br />
                Порошковая покраска каркаса, базовый цвет — чёрный, по желанию возможна покраска любым цветом.<br />	
                Ножка из профильной трубы 300х300х15 мм с пластмассовой заглушкой по желанию изготавливается любой высоты, укомплектована болтом М10*20.<br /><br />
				<h3>Доставка ортопедических оснований</h3>
				В случае заказа основания отдельно от продукции Magniflex, стоимость доставки составит 500 рублей для Москвы (в пределах МКАД). За пределами МКАД, а также в других регионах стоимость рассчитывается согласно общей тарификации.
				</div>
				<div class="coin-slider">
					<img src="/img/product/base_komfort.jpg" alt="Ортопедическое основание Комфорт, решетка для матрасов">
				</div>
			</div>
		
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<br>
				</div>
				<div class="hnb_contrig">
			<p style="text-align: justify; ">
			Основание состоит из стальной рамы покрытой экологически чистой эпоксиполиэфирной порошковой краской с дальнейшей обработкой высокими температурами и гнуто-клееных березовых ламелей.</p>
				</div>
			</div>
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<br>
				</div>
				<div class="hnb_contrig">
			<p style="text-align: justify; ">
			Основание состоит из стальной рамы покрытой экологически чистой эпоксиполиэфирной порошковой краской с дальнейшей обработкой высокими температурами и гнуто-клееных березовых ламелей.</p>
				</div>
			</div>
		',
		'delivery_pay' => '
			
			<h3>Доставка</h3>
			<b>ДОСТАВКА ПО МОСКВЕ И МОСКОВСКОЙ ОБЛАСТИ</b>
			<br>
			
			<p>
				
Доставка орт. оснований.	500 руб. в случае заказа доставки без матрасов. При заказе вместе с матрасами доставка бесплатно.
			</p>
			<b>ДОСТАВКА ПО РОССИИ.</b>
			
			<p>
				Доставка осуществляется в любой город России услугами транспортных компаний. Отгрузка продукции производится в течение 1-2 дней после поступления 100%-ой предоплаты на расчетный счет организации.
<br><br>
Доставка продукции со склада компании Magniflex (г. Москва) до терминала транспортной компании в г. Москва осуществляется БЕСПЛАТНО. Клиент оплачивает самостоятельно транспортной компании при получении заказа только доставку из Москвы до терминала транспортной компании в пункте назначения. Также возможна доставка транспортной компанией от терминала в пункте назначения до адреса клиента, является платной согласно тарифам транспортных компаний.
<br><br>
Отгрузки продукции производятся услугами транспортных компаний «ПЭК» или «Деловые Линии».
			</p>

			
			<p>
				<a href="/pokupatelyam/oplata-i-dostavka/">Прочитать полные условия доставки товаров</a>
			</p>

<br>
<h3>Оплата </h3>
			<p class="oplata_flex">
				<img class="ama_payment_icons" src="/img/oplata_nalichnye.gif" alt="оплата наличными"> Наличными: курьеру в момент получения заказа.</p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_beznal.gif" alt="безналичный платеж"> Безналичный платеж: для физических и юридических лиц. </p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_karta.gif" alt="банковской картой"> <span>Банковской карточкой в в шоу-руме или курьеру при получении товара. <br><i>Оплата карточкой доступна покупателям из Москвы и Московской области при условии осуществления доставки фирменной службой доставки Magniflex.</i></span></p>
			<p>
			<br>
				<a href="/pokupatelyam/oplata/">Ознакомиться с полными условия оплаты</a>
			</p>


		',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'cycle-title' => 'Ортопедические основания Magniflex Comfort',
		'cycle-name' => 'Ортопедическое основание Comfort',
		'sizes' => array(
array('80x200',3600.00),
array('90x190',3700.00),
array('90x200',3700.00),
array('100x200',4000.00),
array('120x190',4600.00),
array('120x200',4600.00),
array('140x190',4800.00),
array('140x200',4800.00),
array('150x190',5000.00),
array('150x200',5000.00),
array('160x190',5100.00),
array('160x195',5100.00),
array('160x200',5100.00),
array('180x190',5600.00),
array('180x200',5600.00),
array('200x200',6300.00),
		),
	),
	array(
		'address' => 'ortopedicheskoe-osnovanie-komfort-razbornoe',
		'parent_address' => 'bases',
		'parent_address2' => 'bases',
		'parent_name' => 'Аксессуары',
		'name' => 'Основание «Комфорт», разборное',
		'other_categories' => array('comfort_new_razb'),
		'title' => 'Ортопедическое основание «Комфорт» (разборное)',
		'description' => 'фотографии, описание, характеристики Ортопедическое основание «Комфорт» (разборное)',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, Ортопедическое основание «Комфорт», разборное',
		'small_desc' => '
		<p class="hnb_harek">
			Березовые ламели <br />
			Стандартная высота: 28 см, возможен любой размер<br />
			Максимальный вес спящего: 150 кг. <br />
			Гарантия: 3 года  <br />
		
        </p>
		',
		'attr_cat_product1'=>'Березовые ламели',
		'attr_cat_product2'=>'28 см, возможна любая',
		'attr_cat_product3'=>'150 кг',
		'attr_cat_product4'=>'3 года',
		// 'attr_cat_product5'=>'Comfort Line(Россия)',
		'small_img' => '/img/product/very_small/osnovanie-razbornoe-opti.jpg',
		'small_img_alt' => 'Ортопедическое основание «Комфорт» (разборное)',
		'img' => '/img/product/big/osnovanie2.jpg',
		'img_carousel' => array('/img/product/big/osnovanie2.jpg'),
		'img_alt' => 'Ортопедическое основание «Комфорт» (разборное)',
		'attr' => '
			<ul>
			<li><b>Стандартная высота</b>: 28 см</li>
			<li><b>Цвет каркаса</b>: черный </li>
			<li><b>Максимальный вес спящего</b>: 150 кг</li>
			<li><b>Гарантия</b>: 3 года</li>
			</ul><br />
	
		',
		
		'desc' => '
		<div class="common_block_common ama-parallax-0">
				<div class="half-width">
				<h3>Разборное ортопедическое основание начального уровня</h3>
				Ортопедические основания необходимы для усиления ортопедических свойств матрасов: упругие поперечные перегородки, их называют "ламели", реагируя на изменение нагрузки под весом спящего человека, равномерно распределяют давление по всей площади решетки.<br />
                Каркас и опоры изделия производятся из металлической стальной трубы, покрытой экологически чистой эпоксиполиэфирной порошковой краской с дальнейшей обработкой высокими температурами. Гнуто-клееные ламели изготавливаются из натуральной древесины (используется "береза").<br />
                Основание универсальное — благодаря скругленным углам легко устанавливается в любые кровати, в том числе и в оснащенные внутренними элементами крепления. Возможно использование изделия отдельно от кровати: в этом случае матрас помещают непосредственно на решетку.<br /><br />
                <h3>Характеристики</h3>
                Основа каркаса: профильная металлическая труба 300х300х15мм.<br />
                Ламели берёзовые, широкие, толщиной 8 мм, шириной 53 мм, крепление поверх металлической трубы.<br />
                Порошковая покраска каркаса, базовый цвет — чёрный, по желанию возможна покраска любым цветом.<br />	
                Ножка из профильной трубы 30х30х15 мм с пластмассовой заглушкой по желанию изготавливается любой высоты, укомплектована болтом М10*20.<br /><br />
				<h3>Доставка ортопедических оснований</h3>
				Если Вы заказываете основание отдельно от продукции Magniflex, стоимость доставки — 500 рублей для Москвы в пределах МКАД. За пределами МКАД, а также в других регионах стоимость рассчитывается согласно общей тарификации.
				</div>
				<div class="coin-slider">
					<img src="/img/product/base_komfort.jpg" alt="Ортопедическое основание Комфорт, решетка для матрасов">
				</div>
			</div>
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<br>
				</div>
				<div class="hnb_contrig">
			<p style="text-align: justify; ">
			Основание состоит из стальной рамы покрытой экологически чистой эпоксиполиэфирной порошковой краской с дальнейшей обработкой высокими температурами и гнуто-клееных березовых ламелей.</p>
				</div>
			</div>
		',
		'delivery_pay' => '
			
			<h3>Доставка</h3>
			<b>ДОСТАВКА ПО МОСКВЕ И МОСКОВСКОЙ ОБЛАСТИ</b>
			<br>
			
			<p>
				
Доставка орт. оснований.	500 руб. в случае заказа доставки без матрасов. При заказе вместе с матрасами доставка бесплатно.
			</p>
			<b>ДОСТАВКА ПО РОССИИ.</b>
			
			<p>
				Доставка осуществляется в любой город России услугами транспортных компаний. Отгрузка продукции производится в течение 1-2 дней после поступления 100%-ой предоплаты на расчетный счет организации.
<br><br>
Доставка продукции со склада компании Magniflex (г. Москва) до терминала транспортной компании в г. Москва осуществляется БЕСПЛАТНО. Клиент оплачивает самостоятельно транспортной компании при получении заказа только доставку из Москвы до терминала транспортной компании в пункте назначения. Также возможна доставка транспортной компанией от терминала в пункте назначения до адреса клиента, является платной согласно тарифам транспортных компаний.
<br><br>
Отгрузки продукции производятся услугами транспортных компаний «ПЭК» или «Деловые Линии».
			</p>

			
			<p>
				<a href="/pokupatelyam/oplata-i-dostavka/">Прочитать полные условия доставки товаров</a>
			</p>

<br>
<h3>Оплата </h3>
			<p class="oplata_flex">
				<img class="ama_payment_icons" src="/img/oplata_nalichnye.gif" alt="оплата наличными"> Наличными: курьеру в момент получения заказа.</p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_beznal.gif" alt="безналичный платеж"> Безналичный платеж: для физических и юридических лиц. </p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_karta.gif" alt="банковской картой"> <span>Банковской карточкой в в шоу-руме или курьеру при получении товара. <br><i>Оплата карточкой доступна покупателям из Москвы и Московской области при условии осуществления доставки фирменной службой доставки Magniflex.</i></span></p>
			<p>
			<br>
				<a href="/pokupatelyam/oplata/">Ознакомиться с полными условия оплаты</a>
			</p>


		',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'cycle-title' => 'Разборные ортопедические основания Magniflex Comfort',
		'cycle-name' => 'Разборное ортопедическое основание Comfort',
		'sizes' => array(
array('80x190',3600.00),
array('80x200',3600.00),
array('90x190',3700.00),
array('90x200',3700.00),
array('100x200',4000.00),
array('120x190',4600.00),
array('120x200',4600.00),
array('140x190',4800.00),
array('140x200',4800.00),
array('150x190',5000.00),
array('150x200',5000.00),
array('160x190',5100.00),
array('160x195',5100.00),
array('160x200',5100.00),
array('180x190',5600.00),
array('180x200',5600.00),
array('200x200',6300.00),
		),
	),
	array(
		'address' => 'topper-best-top',
		'parent_address' => 'toppers',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Аксессуары',
		'name' => 'Тонкий матрас Topper Best Top',
		'other_categories' => array('topper_new', 'for_sofa_new', 'tight_new','mattresses','divan','divannie-mattresses', 'mattresses-filter','mattresses-for-sofa','thin-mattresses'),
		'title' => 'Topper Best Top: топпер, тонкий матрас, матрас для дивана',
		'description' => 'Топпер. Тонкий матрас. Матрас для дивана',
		'keywords' => 'топпер, тонкий матрас, матрас для дивана, матрасы для дивана',
		'span_title' => 'Тонкий матрас',
		'attr_cat_product1' => '5 см',
		'attr_cat_product2' => 'Съемный',
		'attr_cat_product3' => 'Мягкий',
		'new_desc' => 'Можно использовать как матрас для дивана или повысить уровень комфорта матраса, эффект «памяти»',

		'small_img' => '/img/product/very_small/TOPPER-BEST-TOP.jpg',
		'small_img_alt' => 'Topper Best Top',
		'img_preview' => array('/img/91mDkDlP+JL._SL1500_.jpg'),
		'img_carousel' => array('/img/product/big/TOPPER-BEST-TOP.jpg','/img/91mDkDlP+JL._SL1500_.jpg'),
		'img' => '/img/product/big/TOPPER-BEST-TOP.jpg',
		'img_alt' => 'Topper Best Top',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/y2mate.comam_mattress_topper_VLL2FiuaMq8_360p.mp4" />
		  <object type="application/x-shockwave-flash" data="/data/video/index/video2.swf" width="100%"  id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
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
		'attr' => '
			<ul>
				<li>СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
				<li><b>Высота</b>: 5 см</li>
				<li><b>Жесткость</b>: мягкий</li>
				<li><b>Чехол</b>: съемный на молнии, ткань Coolmax, на резинках</li>
				<li><b>Срок службы</b>: не менее 15 лет</li>
			</ul>
		',
		
		'desc' => '
		<div class="common_block_common fixcommon-block">
				<div class="half-width">
				<h3>Тонкий матрас (топпер) Best Top</h3>
				Отличный вариант для повышения уровня комфорта Вашего матраса или эксплуатации на диване.<br />
				Топпер (наматрасник/тонкий матрас) Best Top изготавливается из материала с эффектом памяти — Memoform, позволяющим анатомически правильно повторять контуры тела, легко подстраиваясь под фигуру человека и создавая оптимальный уровень комфорта. Memoform — "дыщащий" материал: благодаря вертикальной перфорации отлично вентилируется, не накапливает пыль, в нем не заводятся сапрофиты (пылевые клещи). Повышенный воздухообмен и высокий уровень циркуляции воздуха превращают этот тонкий матрас в прекрасный инструмент для поддержания свежести на поверхности спального места.<br />
				Чехол выполнен из материала Coolmax, аналогично модели повышенной комфортности Memo Merino. Свойства материала Coolmax обеспечивают отличный теплообмен и позволяют сохранять комфортный уровень температуры поверхности спального места. По периметру матраса идет молния – легко снимать чехол и при необходимости отдавать в химчистку.<br />
				Для путешествующих по квартирам в аренду это прекрасный вариант сохранять комфортность своего спального места в любых условиях и на любых спальных поверхностях.
				</div>
		<div class="half-width_img">
			<img src="/img/product/50163135_2260153334201292_4796494128502136512_n.jpg">
		</div>
	</div>
			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
                <h3>Идеален для раскладных диванов</h3>
				<p class="text-jus">
				<img class="two-width" src="/img/products/mattresses/magniflex-mattress-topper_divan.jpg" alt="Топпер Best Topper Magniflex на диване">
				Тонкий матрас Best Top – идеальный вариант для эксплуатации на раскладном диване, когда нет возможности использовать полноценную кровать для сна в целях экономии места и пространства в квартире.</p>
				</div>
				<div class="half-width fixcommon-block">
					<h3>Легко хранить</h3>
					<p class="text-jus">
				 Топпер занимает совсем немного места: легко складывается в прямоугольник или сворачивается в компактный рулон, который можно закрепить резинками и хранить в любом удобном для Вас месте.
				<img class="two-width" src="/img/products/mattresses/magniflex-mattress-topper.jpg" alt="Топпер Best Topper Magniflex складывается в рулон">
					</p>
				</div>
			</div>
	


		',
		'composition' => '
			<div class="type"><a name="Coolmax"></a>
				<img itemprop="image" src="/img/coolmax-newg.jpg" alt="Coolmax">
				<p><strong>Coolmax</strong>.
			 <br>  <br>
			Coolmax - высокотехнологичная ткань, в которой используются инновационные волокна, стабилизирующие уровень влажности поверхности тела. Благодаря особым свойствам ткани coolmax проверяет и регулирует температуру кожи и увлажнения тела, высыхает быстрее обычного хлопка во много раз, сохраняя тело сухим и прохладным.
			 <br>  <br>
			 <span>Узнать больше о ткани <a href="/production/Coolmax/">Coolmax</a></span></p>
				<div style="clear:both;"></div>
			</div>
			<div class="type"><a name="Memoform"></a>
				<img itemprop="image" src="/img/product/Memoform_prd.png" alt="Memoform">
				<p><strong>Memoform</strong>.
			 <br>  <br>
			Memoform имеет наиболее выраженные анатомические свойства из всех используемых материалов и предназначен для адаптации под вес тела и каждый контур человеческой фигуры. (анатомически повторяет контуры тела).<br><br>
Это свойство обеспечивает ощущение повышенного комфорта и легкости во время сна и благотворно влияет на позвоночник, позволяя ему расслабиться.
			 <br>  <br>
			 <span>Узнать больше о <a href="/production/Memoform-Magnifoam/">Memoform</a></span></p>
				<div style="clear:both;"></div>
			</div>
		',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'cycle-title' => 'Наматрасники Magniflex Topper Best Top',
		'cycle-name' => 'Наматрасник Topper Best Top',
		'sizes' => array(
array('80x190',21200.00),
array('80x200',22400.00),
array('90x190',24000.00),
array('90x200',25000.00),
array('120x200',33500.00),
array('140x200',38900.00),
array('160x200',44500.00),
array('180x200',50100.00),
array('200x200',55600.00),
		),
		//'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '02.02.2020', 'price_koef' => 0.1),
	),
	
	
	
	array(
		'address' => 'ortopedicheskoe-osnovanie-lux',
		'parent_address' => 'bases',
		'parent_address2' => 'bases',
		'parent_name' => 'Аксессуары',
		'name' => 'Ортопедическое основание «Люкс»',
		'other_categories' => array('lux_new'),
		'title' => 'Ортопедическое основание «Люкс», решетка для матраса',
		'description' => 'фотографии, описание, характеристики ортопедического основания «Люкс»',
		'keywords' => 'ортопедическое основание, ортопедическая решетка',
		'small_desc' => '<p class="hnb_harek">двойная ламель. <br>
			Высота основания 290-300 мм.<br>
			Высота ножки 250-260 мм.<br>
			Максимальный вес спящего: 200 кг. <br>
			Гарантия: 3 года  <br>
			Производитель: Comfort Line (Россия)</p>',
		'attr_cat_product_array' => array(
			array('МАТЕРИАЛ', 'Двойная ламель'),
			array('ВЫСОТА ОСНОВАНИЯ', '290-300 мм'),
			array('МАКСИМАЛЬНЫЙ ВЕС', '200 кг'),
			array('ГАРАНТИЯ', '3 года'),
			// array('ПРОИЗВОДИТЕЛЬ', 'Comfort Line (Россия)'),
		),
		'small_img' => '/img/product/very_small/ortop_base_lux_small-opti.jpg',
		'small_img_alt' => 'Ортопедическое основание «Люкс» ',
		'img' => '/img/product/big/ortop_base_lux.jpg',
		'img_carousel' => array('/img/product/big/ortop_base_lux.jpg'),
		'img_alt' => 'Ортопедическое основание решетка "ЛЮКС" ',
		'attr' => '
			<ul>
				<li><b>Высота основания</b>: 290-300 мм</li>
				<li><b>Высота ножки</b>: 250-260 мм</li>
				<li><b>Максимальный вес спящего</b>: 200 кг</li>
				<li><b>Гарантия</b>: 3 года</li></ul><br>
			
			',
		'desc' => '
		<div class="common_block_common ama-parallax-0">
		<div class="half-width">
		<h3>Ортопедическое основание «Люкс»</h3>
		Каркас и опоры изделия изготавливаются из металлической трубы, поперечные перегородки (ламели) — из березы. Основание универсальное, благодаря скругленным углам легко устанавливается в любую кровать, даже оснащенную внутренними элементами крепления. Основание можно использовать отдельно от кровати, поместив матрас непосредственно на решетку.<br />
		Ортопедические основания необходимы для усиления ортопедических свойств матрасов: упругие березовые ламели, реагируя на изменение нагрузки под весом спящего человека, равномерно распределяют давление по всей площади решетки.<br />
		Основание для лежания представляет собой цельносварной каркас со скругленными углами из профильной трубы 28х25х15 мм с упругими элементами (ламелями) шириной 38 мм и толщиной 8 мм изготовленными из березового шпона, установленных в накладные демпфирующие сдвоенные ламеледержатели, и кронштейнов для установки ножек.
		Количество ламелей 28 штук в односпальном варианте и 56 штук в двуспальном варианте. Расстояние между ламелями 25-30мм.
		Опора комплектуется 4-мя ножками диаметром 51 мм и, для двуспальной опоры, 1-ой центральной ножкой из профильной трубы 30х30х1,5 мм.
		Опора имеет декоративно-защитное порошковое покрытие, нанесенное на автоматической линии окрашивания. Цвет серый.
		Опора сертифицирована в системе добровольной сертификации и имеет сертификат соответствия.<br />
		Высота основания 290-300 мм.<br />
		Высота ножки 250-260 мм.<br /><br />
		<h3>Доставка ортопедических оснований</h3>
		В случае заказа основания отдельно от продукции Magniflex, стоимость доставки составит 500 рублей для Москвы в пределах МКАД. За пределами МКАД, а также в других регионах стоимость рассчитывается согласно общей тарификации.
		
		</div>
		<div class="coin-slider">
			<img src="/img/product/base_luxe.jpg" alt="Ортопедическое основание Люкс">
		</div>
	</div>
	

		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<br>

				</div>
				<div class="hnb_contrig">

			<p style="text-align: justify; ">
			Каркас и опоры изделия изготавливаются из металлической трубы, поперечные перегородки (ламели) ШИРОКИЕ — из березы.</p>
				</div>
			</div>
		',
		'delivery_pay' => '
			
			<h3>Доставка</h3>
			<b>ДОСТАВКА ПО МОСКВЕ И МОСКОВСКОЙ ОБЛАСТИ</b>
			<br>
			
			<p>
				
Доставка орт. оснований.	500 руб. в случае заказа доставки без матрасов. При заказе вместе с матрасами доставка бесплатно.
			</p>
			<b>ДОСТАВКА ПО РОССИИ.</b>
			
			<p>
				Доставка осуществляется в любой город России услугами транспортных компаний. Отгрузка продукции производится в течение 1-2 дней после поступления 100%-ой предоплаты на расчетный счет организации.
<br><br>
Доставка продукции со склада компании Magniflex (г. Москва) до терминала транспортной компании в г. Москва осуществляется БЕСПЛАТНО. Клиент оплачивает самостоятельно транспортной компании при получении заказа только доставку из Москвы до терминала транспортной компании в пункте назначения. Также возможна доставка транспортной компанией от терминала в пункте назначения до адреса клиента, является платной согласно тарифам транспортных компаний.
<br><br>
Отгрузки продукции производятся услугами транспортных компаний «ПЭК» или «Деловые Линии».
			</p>

			
			<p>
				<a href="/pokupatelyam/oplata-i-dostavka/">Прочитать полные условия доставки товаров</a>
			</p>

<br>
<h3>Оплата </h3>
			<p class="oplata_flex">
				<img class="ama_payment_icons" src="/img/oplata_nalichnye.gif" alt="оплата наличными"> Наличными: курьеру в момент получения заказа.</p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_beznal.gif" alt="безналичный платеж"> Безналичный платеж: для физических и юридических лиц. </p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_karta.gif" alt="банковской картой"> <span>Банковской карточкой в в шоу-руме или курьеру при получении товара. <br><i>Оплата карточкой доступна покупателям из Москвы и Московской области при условии осуществления доставки фирменной службой доставки Magniflex.</i></span></p>
			<p>
			<br>
				<a href="/pokupatelyam/oplata/">Ознакомиться с полными условия оплаты</a>
			</p>


		',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'cycle-title' => 'Ортопедические основания Magniflex Lux',
		'cycle-name' => 'Ортопедическое основание Lux',
		'sizes' => array(
array('90x200',6390.00),
array('120x200',8390.00),
array('140x200',9490.00),
array('160x200',10590.00),
array('180x200',11690.00),
array('200x200',12690.00),

		),
	),
	array(
		'address' => 'spugna-namatrasnik',
		'parent_address' => 'mattress-covers',
		'parent_address2' => 'mattress-covers',
		'parent_name' => 'Аксессуары',
		'name' => 'Водонепроницаемый наматрасник Spugna',
		'other_categories' => array(''),
		'title' => 'Водонепроницаемый наматрасник Spugna',
		'description' => 'фотографии, описание, характеристики Водонепроницаемый наматрасник Spugna"',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, Водонепроницаемый наматрасник Spugna',
		'attr_cat_product1' => 'Верх - бязь, <br> низ – микрофибра',
		'attr_cat_product2' => '30 см',
		'manufactur' => 'Италия',
		'small_desc' => '
			<p class="hnb_harek">
				Цвет: белый<br/>
				Высота бортика: 30 см<br/>
				Чехол: стеганный, фиксируется на резинках.<br/>
				Состав: 100% полиэстер.<br/>
				Пропитка: экстракт алое-вера.<br/>
				Упаковка: фирменная сумка Magniflex.<br/>
				Сделано в Италии.
            </p>
		',
		// 'small_img' => '/img/product/copri_mat_spugna_002_1.jpg',
		'small_img' => '/img/product/small/spugna-smal.jpg',
		'small_img_alt' => 'Водонепроницаемый наматрасник Spugna',
		// 'img' => '/img/product/copri_mat_spugna_002_1.jpg',
		'img' => '/img/product/spugna.jpg',
		'img_preview' => array('/img/product/copri_mat_spugna_001.jpg','/img/product/copri_mat_spugna_003.jpg','/img/product/photo_2020-08-14_13-35-33.jpg','/img/product/photo_2020-08-14_13-35-45.jpg',),
		'img_alt' => 'Водонепроницаемый наматрасник Spugna',
		'img_carousel' => array('/img/product/copri_mat_spugna_002_1.jpg','/img/product/copri_mat_spugna_001.jpg','/img/product/copri_mat_spugna_003.jpg','/img/product/photo_2020-08-14_13-35-33.jpg','/img/product/photo_2020-08-14_13-35-45.jpg',),
		'span_title' => 'Итальянское качество. Magniflex',
		'attr' => '
			<ul>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Цвет: белый </li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота бортика: 30 см</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Чехол: стеганный, фиксируется на резинках</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Состав верхней части: 93% полиэстер, 7% полиуретан.</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Состав нижней части: 100% полиэстер.</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Упаковка: фирменная сумка Magniflex</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Сделано в Италии</li>

			</ul>
			<br>

			<style>
				.advantages{
					display: none;
				}
				.sf_info .hnb_contrig{
					width: 100%;
				}

			</style>


			',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Основание для матрасов <div class="hnb_marg">принимает на себя основную нагрузку и усиливает анатомические и ортопедические свойства матрасов </div></li>
			<li class="hnb_ligray">Без кровати<div class="hnb_marg"> можно использовать отдельно без кровати как "подставку" под матрас.</div></li>
			<li class="hnb_liwhite">С пружинными матрасами<div class="hnb_marg">пружины ортопедического матраса меньше сжимаются, не проседают</div></li>
			<li class="hnb_ligray">С беспружинными матрасами <div class="hnb_marg">происходит усиление анатомических и ортопедических свойств матраса</div></li>
			</ul>
		',
		'desc' => '
		<div class="common_block_common">
		<div class="half-width">
		<h3>ВОДОНЕПРОНИЦАЕМЫЙ НАМАТРАСНИК SPUGNA</h3>
		– Защитный наматрасник уменьшает степень износа чехла матраса и продлевает его срок службы, а также защищает от пыли, пота и других загрязнений.<br>
		– Крепление резинками позволяет наматраснику плотно прилегать к чехлу матраса и не создавать дискомфорт во время сна.<br>
		– Водонепроницаемый материал защищает матрас от влажности, обеспечивая максимальную сухость.<br>
		– "Дышащий материал" с мембраной  позволяет воздуху циркулировать сквозь ткань, быстро сохнет.<br>

		</div>
		<div class="coin-slider">
		<img src="/img/product/copri_mat_spugna_002_1.jpg" alt="итальянский плед">
		</div>
	</div>
		',
		'delivery_pay' => '
			
			<h3>Доставка</h3>
			<b>ДОСТАВКА ПО МОСКВЕ И МОСКОВСКОЙ ОБЛАСТИ</b>
			<br>
			
			<p>
			
Доставка наматрасников.	500 руб. в случае заказа доставки без матрасов. При заказе вместе с матрасами доставка бесплатно.
			</p>
			<b>ДОСТАВКА ПО РОССИИ.</b>
			
			<p>
				Доставка осуществляется в любой город России услугами транспортных компаний. Отгрузка продукции производится в течение 1-2 дней после поступления 100%-ой предоплаты на расчетный счет организации.
<br><br>
Доставка продукции со склада компании Magniflex (г. Москва) до терминала транспортной компании в г. Москва осуществляется БЕСПЛАТНО. Клиент оплачивает самостоятельно транспортной компании при получении заказа только доставку из Москвы до терминала транспортной компании в пункте назначения. Также возможна доставка транспортной компанией от терминала в пункте назначения до адреса клиента, является платной согласно тарифам транспортных компаний.
<br><br>
Отгрузки продукции производятся услугами транспортных компаний «ПЭК» или «Деловые Линии».
			</p>

			
			<p>
				<a href="/pokupatelyam/oplata-i-dostavka/">Прочитать полные условия доставки товаров</a>
			</p>

<br>
<h3>Оплата </h3>
			<p class="oplata_flex">
				<img class="ama_payment_icons" src="/img/oplata_nalichnye.gif" alt="оплата наличными"> Наличными: курьеру в момент получения заказа.</p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_beznal.gif" alt="безналичный платеж"> Безналичный платеж: для физических и юридических лиц. </p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_karta.gif" alt="банковской картой"> <span>Банковской карточкой в в шоу-руме или курьеру при получении товара. <br><i>Оплата карточкой доступна покупателям из Москвы и Московской области при условии осуществления доставки фирменной службой доставки Magniflex.</i></span></p>
			<p>
			<br>
				<a href="/pokupatelyam/oplata/">Ознакомиться с полными условия оплаты</a>
			</p>


		',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'cycle-title' => 'Ортопедические основания Magniflex Comfort',
		'cycle-name' => 'Ортопедическое основание Comfort',
		'sizes' => array(
			array('160x190/200',9600.00),
			array('180x190/200',13200.00)
		),

	),
	array(
		'address' => 'aloe-namatrasnik',
		'parent_address' => 'mattress-covers',
		'parent_address2' => 'mattress-covers',
		'parent_name' => 'Аксессуары',
		'name' => 'Защитный стеганный наматрасник Aloe',
		'other_categories' => array(''),
		'title' => 'Защитный стеганный наматрасник Aloe',
		'description' => 'фотографии, описание, характеристики Защитный стеганный наматрасник Aloe"',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, Защитный стеганный наматрасник Aloe',
		'attr_cat_product1' => 'Верх - бязь, <br> низ – микрофибра',
		'attr_cat_product2' => '30 см',
		'manufactur' => 'Италия',
		'span_title' => 'Итальянское качество. Magniflex',
		'small_desc' => '
			<p class="hnb_harek">
				Цвет: белый<br/>
				Высота бортика: 30 см<br/>
				Чехол: стеганный, фиксируется на резинках.<br/>
				Состав: 100% полиэстер.<br/>
				Пропитка: экстракт алое-вера.<br/>
				Упаковка: фирменная сумка Magniflex.<br/>
				Сделано в Италии.
            </p>
		',
		// 'small_img' => '/img/product/outlast-2.jpg',
		'small_img' => '/img/product/small/aloe-small.jpg',
		'small_img_alt' => 'Защитный стеганный наматрасник Aloe',
		// 'img' => '/img/product/outlast-2.jpg',
		'img' => '/img/product/aloe.jpg',
		'img_preview' => array('/img/product/outlast-3.jpg','/img/product/photo_2020-08-14_13-35-20.jpg','/img/product/photo_2020-08-14_13-35-50.jpg','/img/product/photo_2020-08-14_13-36-06.jpg',),
		'img_alt' => 'Защитный стеганный наматрасник Aloe',
		'img_carousel' => array('/img/product/outlast-2.jpg','/img/product/outlast-3.jpg','/img/product/photo_2020-08-14_13-35-20.jpg','/img/product/photo_2020-08-14_13-35-50.jpg','/img/product/photo_2020-08-14_13-36-06.jpg',),
		'attr' => '
			<ul>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Цвет: белый </li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота бортика: 30 см</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Чехол: стеганный, фиксируется на резинках</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Состав: 100% полиэстер</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Пропитка: экстракт алое-вера</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Упаковка: фирменная сумка Magniflex</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Сделано в Италии</li>
			</ul>
			<style>
				.advantages{
					display: none;
				}
				.sf_info .hnb_contrig{
					width: 100%;
				}

			</style>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Основание для матрасов <div class="hnb_marg">принимает на себя основную нагрузку и усиливает анатомические и ортопедические свойства матрасов </div></li>
			<li class="hnb_ligray">Без кровати<div class="hnb_marg"> можно использовать отдельно без кровати как "подставку" под матрас.</div></li>
			<li class="hnb_liwhite">С пружинными матрасами<div class="hnb_marg">пружины ортопедического матраса меньше сжимаются, не проседают</div></li>
			<li class="hnb_ligray">С беспружинными матрасами <div class="hnb_marg">происходит усиление анатомических и ортопедических свойств матраса</div></li>
			</ul>
		',
		'desc' => '
			<div class="common_block_common">
				<div class="half-width">
					<h3>Защитный стеганный наматрасник Aloe</h3>
					– Защитный наматрасник уменьшает степень износа чехла матраса и продлевает его срок службы, а также защищает от пыли, пота и других загрязнений.<br>
					– Крепление резинками позволяет наматраснику плотно прилегать к чехлу матраса и не создавать дискомфорт во время сна.<br>
					– Экстракт алое прекрасный антиоксидант, способствует регенерации клеток, оказывает противовоспалительный и антисептический эффект.<br>
					– Наматрасник Aloe Magniflex невероятно мягкий и приятный на ощупь, по тактильным ощущениям сравнимый с шелком.<br>
					– "Дышащий материал" поддерживает идеальный микроклимат, позволяет воздуху циркулировать сквозь ткань, защищая от выделений пота.<br>
				</div>
				<div class="coin-slider">
					<img src="/img/product/namatrasnik1.jpg" alt="наматрасник Aloe">
				</div>
			</div>
		',
		'delivery_pay' => '
			
			<h3>Доставка</h3>
			<b>ДОСТАВКА ПО МОСКВЕ И МОСКОВСКОЙ ОБЛАСТИ</b>
			<br>
			
			<p>
				
Доставка наматрасников.	500 руб. в случае заказа доставки без матрасов. При заказе вместе с матрасами доставка бесплатно.
			</p>
			<b>ДОСТАВКА ПО РОССИИ.</b>
			
			<p>
				Доставка осуществляется в любой город России услугами транспортных компаний. Отгрузка продукции производится в течение 1-2 дней после поступления 100%-ой предоплаты на расчетный счет организации.
<br><br>
Доставка продукции со склада компании Magniflex (г. Москва) до терминала транспортной компании в г. Москва осуществляется БЕСПЛАТНО. Клиент оплачивает самостоятельно транспортной компании при получении заказа только доставку из Москвы до терминала транспортной компании в пункте назначения. Также возможна доставка транспортной компанией от терминала в пункте назначения до адреса клиента, является платной согласно тарифам транспортных компаний.
<br><br>
Отгрузки продукции производятся услугами транспортных компаний «ПЭК» или «Деловые Линии».
			</p>

			
			<p>
				<a href="/pokupatelyam/oplata-i-dostavka/">Прочитать полные условия доставки товаров</a>
			</p>

<br>
<h3>Оплата </h3>
			<p class="oplata_flex">
				<img class="ama_payment_icons" src="/img/oplata_nalichnye.gif" alt="оплата наличными"> Наличными: курьеру в момент получения заказа.</p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_beznal.gif" alt="безналичный платеж"> Безналичный платеж: для физических и юридических лиц. </p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_karta.gif" alt="банковской картой"> <span>Банковской карточкой в в шоу-руме или курьеру при получении товара. <br><i>Оплата карточкой доступна покупателям из Москвы и Московской области при условии осуществления доставки фирменной службой доставки Magniflex.</i></span></p>
			<p>
			<br>
				<a href="/pokupatelyam/oplata/">Ознакомиться с полными условия оплаты</a>
			</p>


		',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'cycle-title' => 'Ортопедические основания Magniflex Comfort',
		'cycle-name' => 'Ортопедическое основание Comfort',
		'sizes' => array(
			array('160x190/200',10800.00),
			array('180x190/200',14400.00)
		),

	),
	
	
	
	
	array(
		'address' => 'zashchitnyj-byazevyj-namatrasnik',
		'parent_address' => 'mattress-covers',
		'parent_address2' => 'mattress-covers',
		'parent_name' => 'Аксессуары',
		'name' => 'Защитный бязевый наматрасник',
		'other_categories' => array(''),
		'title' => 'Защитный бязевый наматрасник',
		'description' => 'фотографии, описание, характеристики Защитный бязевый наматрасник"',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, Защитный бязевый наматрасник',
		'attr_cat_product1' => 'Верх - бязь, <br> низ – микрофибра',
		'attr_cat_product2' => '30 см',
		'manufactur' => 'Россия',
		'small_desc' => '
			<p class="hnb_harek">
			Материал: Бязь верхний слой / Микрофибра нижний слой<br/>
			Высота бортика: 30 см, материал микрофибра
                 </p>
		',
		'small_img' => '/img/product/small/namatrasnik_byaz.jpg',
		'small_img_alt' => 'Защитный непромокаемый наматрасник ',
		'img' => '/img/product/big/namatrasnik_byazevyj_nepro1.jpg',
		'img_preview' => array('/img/product/big/namatrasnik_byazevyj_nepro2.jpg','/img/product/big/namatrasnik_byazevyj_nepro4.jpg', '/img/product/namatrasnik2.jpg','/img/product/namatrasnik1.jpg'),
		'img_alt' => 'Защитный непромокаемый наматрасник  ',
		'img_carousel' => array('/img/product/namatrasnik1.jpg','/img/product/big/namatrasnik_byazevyj_nepro2.jpg','/img/product/big/namatrasnik_byazevyj_nepro4.jpg', '/img/product/namatrasnik2.jpg'),
		'attr' => '
			<ul>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Материал: Бязь верхний слой / Микрофибра нижний слой. </li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота бортика: 30 см, материал микрофибра</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Крепление: резинка по периметру под матрасом.</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Сделано в России. Производитель ТМ «ВАШЕ».</li>

			</ul><br>

			<style>
				.advantages{
					display: none;
				}
				.sf_info .hnb_contrig{
					width: 100%;
				}

			</style>


			',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Основание для матрасов <div class="hnb_marg">принимает на себя основную нагрузку и усиливает анатомические и ортопедические свойства матрасов </div></li>
			<li class="hnb_ligray">Без кровати<div class="hnb_marg"> можно использовать отдельно без кровати как "подставку" под матрас.</div></li>
			<li class="hnb_liwhite">С пружинными матрасами<div class="hnb_marg">пружины ортопедического матраса меньше сжимаются, не проседают</div></li>
			<li class="hnb_ligray">С беспружинными матрасами <div class="hnb_marg">происходит усиление анатомических и ортопедических свойств матраса</div></li>
			</ul>
		',
		'desc' => '
		<div class="common_block_common">
		<div class="half-width">
		<h3>Защитный бязевый наматрасник</h3>
		– Бязь. Как и любой другой натуральный материал, бязь экологична. Особый способ переплетения нитей в полотне обеспечивает особую плотность ткани и делает ее устойчивой к износу. Сохраняет прекрасный внешний вид на протяжении долгого времени. Это идеальный материал для аллергиков, легко отстирывается, не накапливает статического электричества. При стирке изделия не садятся и не растягиваются.<br>
		– Микрофибра. Материал достаточно мягок и приятен на ощупь, не имеет склонности к скатыванию, протиранию, обладает повышенной гигроскопичностью, охлаждающим эффектом, практически не мнется, не растягивается, не садится, гипоаллергенен, ему не страшны грибок и моль. А за счёт специального переплетения волокон ткань устойчива к механическим воздействиям.<br>
		– Влагоотталкивающий. Верх - махровое полотно, низ - мембрана (100% влагонепроницаемое покрытие). Благодаря махровому полотну наматрасник имеет нескользкую поверхность и является идеальной защитой, препятствующей загрязнению вашего матраса, размножению микроорганизмов, развитию аллергических реакций.
		<br>
		<b>Способ изготовления:</b>
					<br>
		Наматрасники ТМ «ВАШЕ» изготавливается на новейшем оборудовании, стегания без ниток. Термостегание более надежное и долговечное, чем ниточное, поскольку нитки с течением времени могут распуститься или разорваться, а благодаря термостеганию все слои наматрасника надежно скреплены между собой.

		

		</div>
		<div class="coin-slider">
		<img src="/img/product/big/namatrasnik_byazevyj_nepro3.jpg" alt="итальянский плед">
		</div>
	</div>
		',
		'delivery_pay' => '
			
			<h3>Доставка</h3>
			<b>ДОСТАВКА ПО МОСКВЕ И МОСКОВСКОЙ ОБЛАСТИ</b>
			<br>
			
			<p>
				
Доставка наматрасников.	500 руб. в случае заказа доставки без матрасов. При заказе вместе с матрасами доставка бесплатно.
			</p>
			<b>ДОСТАВКА ПО РОССИИ.</b>
			
			<p>
				Доставка осуществляется в любой город России услугами транспортных компаний. Отгрузка продукции производится в течение 1-2 дней после поступления 100%-ой предоплаты на расчетный счет организации.
<br><br>
Доставка продукции со склада компании Magniflex (г. Москва) до терминала транспортной компании в г. Москва осуществляется БЕСПЛАТНО. Клиент оплачивает самостоятельно транспортной компании при получении заказа только доставку из Москвы до терминала транспортной компании в пункте назначения. Также возможна доставка транспортной компанией от терминала в пункте назначения до адреса клиента, является платной согласно тарифам транспортных компаний.
<br><br>
Отгрузки продукции производятся услугами транспортных компаний «ПЭК» или «Деловые Линии».
			</p>

			
			<p>
				<a href="/pokupatelyam/oplata-i-dostavka/">Прочитать полные условия доставки товаров</a>
			</p>

<br>
<h3>Оплата </h3>
			<p class="oplata_flex">
				<img class="ama_payment_icons" src="/img/oplata_nalichnye.gif" alt="оплата наличными"> Наличными: курьеру в момент получения заказа.</p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_beznal.gif" alt="безналичный платеж"> Безналичный платеж: для физических и юридических лиц. </p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_karta.gif" alt="банковской картой"> <span>Банковской карточкой в в шоу-руме или курьеру при получении товара. <br><i>Оплата карточкой доступна покупателям из Москвы и Московской области при условии осуществления доставки фирменной службой доставки Magniflex.</i></span></p>
			<p>
			<br>
				<a href="/pokupatelyam/oplata/">Ознакомиться с полными условия оплаты</a>
			</p>


		',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'cycle-title' => 'Ортопедические основания Magniflex Comfort',
		'cycle-name' => 'Ортопедическое основание Comfort',
		'sizes' => array(
			array('160x200',4000.00),
			array('180x200',4100.00)
		),

	),
    
    array(
		'address' => 'zashchitnyj-nepromokaemyj-namatrasnik',
		'parent_address' => 'mattress-covers',
		'parent_address2' => 'mattress-covers',
		'parent_name' => 'Аксессуары',
		'name' => 'Защитный непромокаемый наматрасник',
		'other_categories' => array(''),
		'title' => 'Защитный непромокаемый наматрасник',
		'description' => 'фотографии, описание, характеристики Защитный непромокаемый наматрасник',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, Защитный непромокаемый наматрасник',
		'attr_cat_product1' => 'Верх - махровое полотно, <br> низ – мембрана',
		'attr_cat_product2' => '30 см',
		'manufactur' => 'Россия',
		'small_desc' => '
			<p class="hnb_harek">
			Материал: Верх - махровое полотно, низ – мембрана.<br/>
			Высота бортика: 30 см, материал микрофибра.
                 </p>
		',
		'small_img' => '/img/product/small/namatrasnik_nepromolaemy.jpg',
		'small_img_alt' => 'Защитный непромокаемый наматрасник ',
		'img' => '/img/product/big/namatrasnik_nepro1.jpg',
		'img_preview' => array('/img/product/big/namatrasnik_nepro3.jpg', '/img/product/big/namatrasnik_nepro4.jpg', '/img/product/namatrasnik2.jpg','/img/product/namatrasnik1.jpg'),
		'img_alt' => 'Защитный непромокаемый наматрасник  ',
		'img_carousel' => array('/img/product/namatrasnik1.jpg','/img/product/big/namatrasnik_nepro3.jpg', '/img/product/big/namatrasnik_nepro4.jpg', '/img/product/namatrasnik2.jpg'),
		'attr' => '
			<ul>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Материал: Верх - махровое полотно, низ – мембрана. </li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота бортика: 30 см, материал микрофибра.</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Крепление: резинка по периметру под матрасом.</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Сделано в России. Производитель ТМ «ВАШЕ».</li>
			</ul><br>

			<style>
				.advantages{
					display: none;
				}
				.sf_info .hnb_contrig{
					width: 100%;
				}

			</style>


			',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Основание для матрасов <div class="hnb_marg">принимает на себя основную нагрузку и усиливает анатомические и ортопедические свойства матрасов </div></li>
			<li class="hnb_ligray">Без кровати<div class="hnb_marg"> можно использовать отдельно без кровати как "подставку" под матрас.</div></li>
			<li class="hnb_liwhite">С пружинными матрасами<div class="hnb_marg">пружины ортопедического матраса меньше сжимаются, не проседают</div></li>
			<li class="hnb_ligray">С беспружинными матрасами <div class="hnb_marg">происходит усиление анатомических и ортопедических свойств матраса</div></li>
			</ul>
		',
		'desc' => '
		<div class="common_block_common">
			<div class="half-width">
			<h3>Защитный непромокаемый наматрасник</h3>
			– Бязь. Как и любой другой натуральный материал, бязь экологична. Особый способ переплетения нитей в полотне обеспечивает особую плотность ткани и делает ее устойчивой к износу. Сохраняет прекрасный внешний вид на протяжении долгого времени. Это идеальный материал для аллергиков, легко отстирывается, не накапливает статического электричества. При стирке изделия не садятся и не растягиваются.<br>
			– Микрофибра. Материал достаточно мягок и приятен на ощупь, не имеет склонности к скатыванию, протиранию, обладает повышенной гигроскопичностью, охлаждающим эффектом, практически не мнется, не растягивается, не садится, гипоаллергенен, ему не страшны грибок и моль. А за счёт специального переплетения волокон ткань устойчива к механическим воздействиям.<br>
			 – Влагоотталкивающий. Верх - махровое полотно, низ - мембрана (100% влагонепроницаемое покрытие). Благодаря махровому полотну наматрасник имеет нескользкую поверхность и является идеальной защитой, препятствующей загрязнению вашего матраса, размножению микроорганизмов, развитию аллергических реакций.
			<br>
			<b>Способ изготовления:</b>
					<br>
				Наматрасники ТМ «ВАШЕ» изготавливается на новейшем оборудовании, стегания без ниток. Термостегание более надежное и долговечное, чем ниточное, поскольку нитки с течением времени могут распуститься или разорваться, а благодаря термостеганию все слои наматрасника надежно скреплены между собой.
				

		    </div>
        	<div class="coin-slider">
			<img src="/img/product/big/namatrasnik_nepro2.jpg" alt="итальянский плед">
	        </div>
        </div>
		',
		'delivery_pay' => '
			
			<h3>Доставка</h3>
			<b>ДОСТАВКА ПО МОСКВЕ И МОСКОВСКОЙ ОБЛАСТИ</b>
			<br>
			
			<p>
				
Доставка наматрасников.	500 руб. в случае заказа доставки без матрасов. При заказе вместе с матрасами доставка бесплатно.
			</p>
			<b>ДОСТАВКА ПО РОССИИ.</b>
			
			<p>
				Доставка осуществляется в любой город России услугами транспортных компаний. Отгрузка продукции производится в течение 1-2 дней после поступления 100%-ой предоплаты на расчетный счет организации.
<br><br>
Доставка продукции со склада компании Magniflex (г. Москва) до терминала транспортной компании в г. Москва осуществляется БЕСПЛАТНО. Клиент оплачивает самостоятельно транспортной компании при получении заказа только доставку из Москвы до терминала транспортной компании в пункте назначения. Также возможна доставка транспортной компанией от терминала в пункте назначения до адреса клиента, является платной согласно тарифам транспортных компаний.
<br><br>
Отгрузки продукции производятся услугами транспортных компаний «ПЭК» или «Деловые Линии».
			</p>

			
			<p>
				<a href="/pokupatelyam/oplata-i-dostavka/">Прочитать полные условия доставки товаров</a>
			</p>

<br>
<h3>Оплата </h3>
			<p class="oplata_flex">
				<img class="ama_payment_icons" src="/img/oplata_nalichnye.gif" alt="оплата наличными"> Наличными: курьеру в момент получения заказа.</p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_beznal.gif" alt="безналичный платеж"> Безналичный платеж: для физических и юридических лиц. </p>
			<p class="oplata_flex"><img class="ama_payment_icons" src="/img/oplata_karta.gif" alt="банковской картой"> <span>Банковской карточкой в в шоу-руме или курьеру при получении товара. <br><i>Оплата карточкой доступна покупателям из Москвы и Московской области при условии осуществления доставки фирменной службой доставки Magniflex.</i></span></p>
			<p>
			<br>
				<a href="/pokupatelyam/oplata/">Ознакомиться с полными условия оплаты</a>
			</p>


		',
		'recommend' => '',
		'certificat' => '',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'cycle-title' => 'Ортопедические основания Magniflex Comfort',
		'cycle-name' => 'Ортопедическое основание Comfort',
		'sizes' => array(
			array('160x200',3500.00),
			array('180x200',3700.00),
		),

	),



);

include_once('outlet.php');
include_once('pillows.php');
include_once('beds.php');
include_once('plaids.php');
$products = array_merge($products, $product_outlet, $product_pillows, $product_beds, $product_plaids);

//подгружаем наличие товаров
$raw_prod_avail = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/avail_products.txt');
$prod_avail = json_decode($raw_prod_avail, true);
foreach($products as &$product){
	if(!empty($product['sizes']) && is_array($product['sizes'])){
		foreach($product['sizes'] as &$product_size){
			$product_size['gsheet_avaible'] = false;
			foreach($prod_avail as $prod_avail_el){
				if($product['address'] == trim($prod_avail_el[0]) && $product_size[0] == trim($prod_avail_el[2])){
					if(trim($prod_avail_el[3]) == 'да'){
						$product_size['gsheet_avaible'] = true;
					}
				}
			}
		}
	}
	else{
		$product['gsheet_avaible'] = false;
		foreach($prod_avail as $prod_avail_el){
			if($product['address'] == trim($prod_avail_el[0])){
				if(trim($prod_avail_el[3]) == 'да'){
					$product['gsheet_avaible'] = true;
				}
			}
		}
	}
}
unset($raw_prod_avail, $prod_avail, $product, $product_size, $prod_avail_el);

//скрытая скидка (часть инфы в config.php)
/*
if($_SESSION['hide_discount'] === true && !empty($hide_discount_discount)){
	for ($i = 0; $i < count($products); $i++) {
		if($products[$i]['parent_address'] != 'outlet' && $hide_discount_discount == 'custom'){
			if($products[$i]['parent_address'] == 'plaids'){
				$products[$i]['discount_koef'] = array('date_start' => '22.07.2020', 'date_end' => '27.07.2020', 'price_koef' => 0.2);
			}
			if($products[$i]['parent_address2'] == 'pillows'){
				$products[$i]['discount_koef'] = array('date_start' => '22.07.2020', 'date_end' => '27.07.2020', 'price_koef' => 0.2);
				if($products[$i]['address'] == 'relaxsan'){
					$products[$i]['discount_koef'] = array('date_start' => '22.07.2020', 'date_end' => '27.07.2020', 'price_koef' => 0.15);
				}
			}
			if($products[$i]['parent_address2'] == 'mattresses'){
				$products[$i]['discount_koef'] = array('date_start' => '22.07.2020', 'date_end' => '27.07.2020', 'price_koef' => 0.15);
				if(in_array($products[$i]['address'], array('stile-6','stile-7','stile-8','pensiero-6','pensiero-7','pensiero-8','pensiero-12','memorie-8','rest-9','rest-10','rest-12','comfort-plus-10','comfort-plus-12'))){
					$products[$i]['discount_koef'] = array('date_start' => '22.07.2020', 'date_end' => '27.07.2020', 'price_koef' => 0.17);
				}
				if(in_array($products[$i]['address'], array('carezza-10','freshgel-10','new-freshgel-10','new-freshgel-12','stretching-9','stretching-10','exchange-memoform-dual','maestoso-dual','virtus-30','virtus-deluxe'))){
					$products[$i]['discount_koef'] = array('date_start' => '22.07.2020', 'date_end' => '27.07.2020', 'price_koef' => 0.2);
				}
			}
		}
	}
}
*/

//скидка на матрасы и подушки
for ($i = 0; $i < count($products); $i++) {
	if($products[$i]['parent_address'] != 'outlet' && ($products[$i]['parent_address2'] == 'mattresses' || $products[$i]['parent_address2'] == 'pillows' || $products[$i]['parent_address'] == 'plaids')) {
		//$products[$i]['discount_koef'] = array('date_start' => '29.07.2020', 'date_end' => '16.08.2020', 'price_koef' => 0.15);
	}
}

for ($i = 0; $i < count($products); $i++) {
	//if ($products[$i]['parent_address2'] == 'mattresses') {
		//$products[$i]['discount_koef'] = array('date_start' => '23.11.2017', 'date_end' => '31.01.2018', 'price_koef' => 0.20);
	//}
	/*if (($products[$i]['parent_address2'] == 'detskie-ortopedicheskie-matrasy') || ($products[$i]['parent_address'] == 'elitnye-matrasy') || ($products[$i]['parent_address'] == 'orthopedic_mattresses'))*/
	/*if ($products[$i]['address'] == 'B-Bamboo') {
		echo "<div class='xxx' style='display: none>";
		var_dump($products[$i]['discount_koef']);
		echo "</div>";
	}*/
	// Все крім аксессуарів
	//if (($products[$i]['parent_address2'] != 'bases') && ($products[$i]['parent_address'] != 'bases') && ($products[$i]['parent_address'] != 'pillows') && ($products[$i]['parent_address2'] != 'pillows')) {
	//	$products[$i]['discount_koef'] = array('date_start' => '23.11.2017', 'date_end' => '31.12.2017', 'price_koef' => 0.20);
	//}
}

/*
//ищем дубли в названиях товаров, при дублях появляются в заказе и корзине лишние товары
if(strpos($_SERVER['REQUEST_URI'], 'sf_debug=find_name_dubli') !== FALSE){
	$dubli = array();

	foreach($products as $product){
		$dubli_c = 0;
		for ($i = 0; $i < count($products); $i++) {
			if($product['name'] == $products[$i]['name']){
				$dubli_c ++;
			}
		}
		if($dubli_c > 1){
			$dubli []= $product['name'];
		}
	}
	print_r($dubli);
	exit;
}
*/


?>