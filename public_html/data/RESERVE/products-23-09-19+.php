<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}



$get_breadcrumbs_product = function($item){
	$breadcrumbs_ret = array(array('Марка №1 в Италии','/'),array('Каталог','/catalog/' . $item['parent_address2']));
	if($item['parent_address'] && $item['parent_name']){
		foreach($categories as $el){
			if($el['parent_address'] && $el['parent_name'] && $item['parent_address'] == $el['address']){
				$breadcrumbs_ret[] = array($el['parent_name'], '/catalog/mattresses/'.$el['parent_address'].'/');
			}
		}
		$breadcrumbs_ret[] = array($item['parent_name'], '/catalog/'.$item['parent_address'].'/');
	}
	$breadcrumbs_ret[] = array($item['name']);
	return $breadcrumbs_ret;
};

$products = array(

	/* Ортопедические матрасы */
	array(
		'address' => 'MERINOS',
		'parent_address' => 'mattresses',
		'parent_address2' => 'mattresses',
		'other_categories' => array('vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses','zhestkie-mattresses-2', '60x120','height-20', '65x125','70x140' ,'70x160', '70x190', '75x190', '80x160', '80x180', '80x190', '80x195', '80x200', '85x190', '85x200', '90x180', '90x190', '90x195', '90x200', '95x190', '95x195', '100x190', '100x200', '110x190', '110x195', '110x200', '120x190', '120x195', '120x200', '130x190', '130x200', '135x190', '135x200', '140x190', '140x195', '140x200', '150x190', '150x200', '160x190', '160x195', '160x200', '160x205', '160x210', '165x190', '165x195', '165x200', '170x190', '170x200', '180x190', '180x195', '180x200', '180x205', '180x210', '180x220', '190x200', '200x200','ortoped','vacu','podrostkovue-matrasy'),
		'name' => 'Ортопедический матрас Merino',
		'title' => 'Ортопедический матрас Magniflex Merino (старое название "магнифлекс меринос")',
		'description' => 'Описание, фотографии, состав ортопедического матраса Magniflex Merino (прежнее название Merinos). Одна из самых популярных моделей в России. Потрясающие свойства, настоящая шерсть мериноса.',
		'keywords' => 'magniflex merino, magniflex merinos, магнифлекс мерино, меринос, купить magniflex merino, magniflex merinos отзывы, ортопедический матрас',
		'span_title' => 'Прежние названия Merinos, Model-S',
		'new_desc' => 'Базовая модель, двусторонний (лето - хлопок, зима - шерсть мериноса), наполнитель: Eliochel',
		'small_img' => '/img/product/very_small/merino2.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/Merino (Merinos).jpg',
		'img_alt' => 'Ортопедические матрасы Merino (Merinos)',
		'img_preview' => array('/img/Merino-4.jpg', '/img/Merino-8.jpg', '/img/Merino-6.jpg'),
		'attr_cover_product' => '',
		'attr_padding_product' => 'Ортопедический матрас Merino Magniflex состоит исключительно из природных, экологически чистых материалов, летняя сторона - 100% натуральный хлопок; зимняя сторона - 100% натуральная шерсть тонкорунного мериноса ',
		'attr_comfort_product' => '',
		'attr_layer_product' => 'Основной слой: Elioform 14,2 см. Гипоаллергенный слой (hypoallergenic fiber) из натурального прессованного белого хлопка, Зимняя сторона: 100% шерсть тонкорунного мериноса, Антистатическая прослойка',
		'image_composition' => '/img/merino_sost_newh.png',
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
		#breadcrumbs {
			background-image: url(/img/merino2_250.jpg);
			height: 250px;
		}
		</style>
			<!--<div class="hnb_skidhr"><a href="/skidki-magniflex/skidki-na-bolshie-matrasi/" >Скидки на матрасы king size!</a></div>-->
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 16 см</li><li>Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--достаточно жесткий--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 12 лет</li>
			</ul><br />
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINOS/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'attr_cat_product1' => '16 см',
		'attr_cat_product2' => 'Несъемный, шерсть мериноса/хлопок',
		'attr_cat_product3' => 'Жесткий',
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contcenter">
						<div class="half-width">
							<h3>Ортопедический матрас Magniflex Merino Merinos</h3>
							<p>	Magniflex Merino Merinos – невероятно удобный ортопедический матрас, который был создан в Италии еще 20 лет назад. Эта модель настолько популярна и удачна, что выпускается до сих пор практически в неизменном виде, лишь с небольшими улучшениями. Над ее разработкой совместно со специалистами лаборатории Magniflex трудились ведущие итальянские врачи-ортопеды. Эта модель – прекрасная находка для тех, кому важен оптимальный ортопедический эффект.</p>
						</div>
						<div id="coin-slider" class="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
							<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
								<img itemprop="image" src="/img/Merino-4.jpg" alt="матрас magniflex merino фактура" />
							</a>
							<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
								<img itemprop="image" src="/img/Merino-8.jpg" alt="матрас magniflex merino бортик" />
							</a>
							<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
								<img itemprop="image" src="/img/Merino-6.jpg" alt="матрас magniflex merino поверхность" />
							</a>
						</div>
					<div id="coin-slider2" class="coin-slider">
						<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
							<img itemprop="image" src="/img/oveshmerinos.png"" alt="шерсть мериноса" />
						</a>
						<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
							<img itemprop="image" src="/img/Merino-Bamboo-5.jpg" alt="матрас magniflex merino зимняя сторона шерсть" />
						</a>
						<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
							<img itemprop="image" src="/img/Merino-4.jpg" alt="матрас magniflex merino" />
						</a>
					</div>
					<div class="half-width">
						<h3>Комфорт в любое время года</h3>
						<p >	Для дополнительного удобства наших покупателей модель Magniflex Merino Merinos имеет двусторонний чехол «зима-лето». В качестве зимнего наполнителя мы используем мягкую гипоаллергенную шерсть тонкорунных овец мериносов, которая обеспечивает оптимальную терморегуляцию в холодное время года. Летним наполнителем служит чистый хлопок. Для обеспечения наибольшего комфорта во время сна Вам достаточно будет повернуть матрас нужной стороной вверх.</p>
					</div>

					<div class="block_line">
						<h3>Только натуральный наполнитель</h3>
						<p>	Для внутреннего слоя Magniflex Merino Merinos мы используем сверхупругую латексную пену Elioform. Этот материал производится из натурального латекса. Благодаря его применению матрац становится «дышащим». Он хорошо пропускает воздух, а также легко выводит запахи и влагу, обеспечивая за счет этого высокий уровень гигиены.</p>
					</div>

					<div class="block_line">
						<h3>Удобство прежде всего</h3>
						<p>	ELIOCEL 40 обеспечивает впечатляющую точечную эластичность матраса. Благодаря этому Magniflex Merino Merinos прекрасно приспосабливается к форме тела. Он помогает человеку принять идеальное положение для отдыха, рекомендованное врачами-ортопедами, и не жертвовать при этом удобством.</p>
					</div>

					<div class="block_line">
						<h3>Долговечность и износостойкость</h3>
						<p>Срок реальной эксплуатации модели Magniflex Merino Merinos не менее двенадцати лет. Кроме того, благодаря своей конструкции (в частности, отсутствию пружинного блока) матрас совершенно нечувствителен к вертикальным нагрузкам.<br />
						Высокий уровень комфортности Magniflex Merino Merinos вкупе с отличными ортопедическими свойствами сделали эту модель фаворитом у покупателей во всем мире. Хотите стать счастливым обладателем такого матраса? Закажите его прямо сейчас с помощью онлайн-сервиса «Корзина» или по телефону.</p>

					</div>
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
			<!--<p>
					<img width="280" src="/img/otzyvy-01.jpg" height="196" title="Реальные отзывы покупателей матрасов Магнифлекс">
					<br>Ни одного отрицательного отзыва!</p>
				<p>В России ортопедические матрасы Magniflex представлены с 1992 года, за все это время нами не было зафиксировано ни одного отрицательного отзыва или рецензии о нашей продукции. Не смотря на жесточайший контроль качества отгружаемого товара, у нас, как и у любой компании, случаются &nbsp;продажи матрасов с наличием производственных дефектов, однако такой товар мы незамедлительно меняем на новый идеального качества, кроме того процент таких случаев крайне мал - менее 0,01% от общего объема продаж.
			<br><br>
			Нашей службой контроля качества продукции были зафиксированы два случая негативных отзывов в интернете о матрасах Magniflex. Первый, связанный с наличием посторонних запахов, расследовать не удалось, поскольку отзыв был написан человеком, купившим ортопедический матрас на территории Украины, а во-втором, женщина, жаловалась на чувство крайнего дискомфорта во время ночного сна на матрасе, однако в этом случае речь, вероятно, шла о ненастоящем матрасе Magniflex, поскольку сам матрас был куплен не у официального представителя компании. В связи с этим случаем, хотим в очередной раз предостеречь потребителей: приобретайте настоящие итальянские ортопедические матрасы Magniflex ИСКЛЮЧИТЕЛЬНО через официальное представительство или у наших дилеров! Кроме нас никто не может продавать матрасы Magniflex на территории  Российской Федерации! Купленный в другом месте матрас - 100% подделка!
			<br><br></p>-->
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
			//array('60x120',9000.00),
			// array('65x125',10300.00),
			// array('70x140',12400.00),
			array('70x160 (не в рулоне, новый)',14100.00),
			// array('70x190',16700.00),
			// array('75x190',17800.00),
			// array('80x160',18000.00),
			// array('80x180',18000.00),
			array('80x190',18900.00),
			array('80x195',19400.00),
			array('80x200',20000.00),
			array('85x190',20200.00),
			array('85x200',21300.00),
			array('90x180',20200.00),
			array('90x190',21500.00),
			array('90x195',22000.00),
			array('90x200',22400.00),
			array('95x190',22400.00),
			array('95x195',23100.00),
			array('100x190',23700.00),
			array('100x200',25000.00),
			array('110x190',26100.00),
			array('110x195',26800.00),
			array('110x200',27400.00),
			array('120x190',28400.00),
			array('120x195',29200.00),
			array('120x200',29800.00),
			array('130x190',30800.00),
			array('130x200',32400.00),
			array('135x190',32000.00),
			array('135x200',33600.00),
			array('140x190',33200.00),
			array('140x195',34000.00),
			array('140x200',34900.00),
			array('150x190',35400.00),
			array('150x200',37300.00),
			array('160x190',37800.00),
			array('160x195',38800.00),
			array('160x200',39900.00),
			array('160x205',40800.00),
			array('160x210',41800.00),
			array('165x190',39100.00),
			array('165x195',40000.00),
			array('165x200',41000.00),
			array('170x190',40200.00),
			array('170x200',42300.00),
			array('180x190',42600.00),
			array('180x195',43700.00),
			array('180x195 (не в рулоне, новый)',43700.00),
			array('180x200',44700.00),
			array('180x205',45800.00),
			array('180x210',47100.00),
			array('190x200',47200.00),
            array('200x200',49800.00),
		),
		// 'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.05.2019', 'price_koef' => 0.1, ),

		'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
		'sizes' => array('70x160 (не в рулоне, новый)', '180x195 (не в рулоне, новый)'),
		'prices' => array(
			'70x160 (не в рулоне, новый)' => 9900.00,
			'180x195 (не в рулоне, новый)' => 30600.00,
		),
	), //скидка

		'yml_desc' => '
			Матрас практичный, износостойкий (срок реальной эксплуатации превышает 12 лет) изготавливается из натуральных компонентов (в том числе используется натуральный латекс, прошедший специальную обработку) на уровне самой современной технологии. В разработке принимали участие ведущие итальянские врачи-ортопеды совместно со специалистами лаборатории Magniflex. Модель создавалась для тех, кому важен максимальный ортопедический эффект. Уровень комфорта: достаточно Жесткий Срок службы: не менее 10 лет. вакуумная упаковка. Летняя сторона - натуральный хлопок, зимняя - шерсть мериноса
		',
		'yml_torgmail' => true,
	),
	array(
		'address' => 'MERINO-BAMBOO',
		'parent_address' => 'snyatie-s-proizvodstva',
		'name' => 'Merino Bamboo <span>(снята с производства)</span>',
		'title' => 'Матрасы Bamboo Merino - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Merino Bamboo. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, bamboo, magniflex, merino',
		'small_img' => '/img/product/very_small/Bamboo.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/Bamboo.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'attr' => '
			<!--<a href="/skidki-magniflex/skidka-15-legendarnye-matrasy/"><div class="hnb_action15">АКЦИЯ! Только в сентябре - <b>15% СКИДКА</b> на этот матрас!</div></a>-->
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 17 см</li><li>Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--умеренно жесткий--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 12 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINO-BAMBOO/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
				<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Модель Magniflex Bamboo (бамбук) - это настоящий ортопедический матрас. Узнать подробности?</div></li>
				<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
				<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
				<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
				<li class="hnb_liwhite">Качественный итальянский матрас <div class="hnb_marg">Изготовлен именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
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
			В основе ортопедического матраса Merino Bamboo используется экологичный материал, созданный из натурального латекса и природных компонентов - ELIOCEL 60 (Элиочел). Этот материал благодаря своей уникальной структуре позволяет усилить эффект выравнивания позвонков, равномерно распределить нагрузку на все суставы тела, придает матрасу высшую степень эластичной ортопедичности.
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
			<a href="/catalog/orthopedic_mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Merino Green Tea</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/Naturalmente (New Naturcomfort).jpg" height="130"><br />Naturalmente (New Naturcomfort)</a>
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
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Memo Merino</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Memo Merino"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/Naturalmente (New Naturcomfort).jpg" height="130"><br />Naturalmente (New Naturcomfort)</a>
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

		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '15.08.2018', 'price_koef' => 0.2, ), //скидка
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
		'address' => 'Stile-6',
		'parent_address' => 'collectio-stile',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', '80x160', 'height-20', 'razmer1', 'razmer3', '60x120','ortoped','vacu'),
		'name' => 'Ортопедический матрас Stile 6',
		'title' => 'Матрасы Stile 6 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 6. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Stile 6, magniflex, merino',
		'span_title' => 'Усиленная поддержка спины',
		'attr_cat_product1' => '15 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий',
		'small_img' => '/img/product/very_small/stile-6-new.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img_preview' => array('/img/Stile-6_rit-01.jpg', '/img/Stile-6_rit-02.jpg'),
		'img' => '/img/product/big/stile-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'attr_cat_product1' => '15 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий',
		'new_desc' => 'Усовершенствованная модель Merino, усиленная поддержка спины и позвоночника',
	
		'small_img_alt' => '',
		'img' => '/img/product/new-comfort-plus-10.jpg',
		'img_alt' => '',
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
		'attr' => '
		<style>
				#breadcrumbs{
					background-image: url(/img/style_250.png);
					height: 250px;
				}
		</style>
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 15см</li><li>Степень жесткости:  Жесткий</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 10 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINO-BAMBOO/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'desc' => '
			<div class="hnb_contcenter">
			<div class="block_line2">
			<div class="half-width">
					<h3>КОЛЛЕКЦИЯ МАТРАСОВ STILE</h3>
					<p>Ортопедический матрас STILE – это новинка фабрики Magniflex, способная удовлетворить запросы самых взыскательных и капризных покупателей.
Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид. 
Белоснежный чехол матраса выполнен из материала вискоза.
Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
Матрас Stile – это упругий матрас, по жесткости похожий на легендарную модель Merino Merinos (S model). Является усовершенствованной моделью. Не содержит шерсти и имеет одинаковый чехол и жесткость с обеих сторон. Обеспечивает усиленную поддержку спины и позвоночника.
Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.</p>
</div>
	<div class="half-width_img">
				<img  src="/img/product/big/stile-6.jpg">
		</div>
	</div>
				</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Stile' ,
		'cycle-name' => '	Ортопедический матрас Stile 6',
		'sizes' => array(
			array('60x120',10400.00),
			array('70x140',14000.00),
			array('80x190',21600.00),
			array('80x200',22700.00),
			array('90x190',24400.00),
			array('90x200',25400.00),
			array('120x190',32300.00),
			array('120x200',33900.00),
			array('140x190',37600.00),
			array('140x200',39500.00),
			array('160x190',42900.00),
			array('160x200',45100.00),
			array('180x200',50700.00),
			array('200x200',56300.00)
		),

		'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
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
		'address' => 'Stile-7',
		'parent_address' => 'collectio-stile',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', '80x160', 'height-20','ortoped','vacu'),
		'parent_address2' => 'mattresses',
		'name' => 'Ортопедический матрас Stile 7',
		'title' => 'Матрасы Stile 7 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 7. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Stile 7, magniflex, merino',
		'span_title' => 'Улучшенный вариант Merino',		
	
		'attr_cat_product1' => '18 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий',
		'new_desc' => 'Усовершенствованная модель Merino, усиленная поддержка спины и позвоночника',
	
		'small_img' => '/img/product/very_small/stile-7-new.jpg',
		'img_preview' => array('/img/Stile-6_rit-01.jpg', '/img/Stile-6_rit-02.jpg' ),
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img' => '/img/product/big/stile-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
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
		'attr' => '
		<style>
				#breadcrumbs{
					background-image: url(/img/style_250.png);
					height: 250px;
				}
		</style>
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 18см</li><li>Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div> Жесткий</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 10 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINO-BAMBOO/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'desc' => '
			<div class="hnb_contcenter">
			<div class="block_line2">
			<div class="half-width">
					<h3>КОЛЛЕКЦИЯ МАТРАСОВ STILE</h3>
					<p>Ортопедический матрас STILE – это новинка фабрики Magniflex, способная удовлетворить запросы самых взыскательных и капризных покупателей.
Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид.
Белоснежный чехол матраса выполнен из материала вискоза.
Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
Матрас Stile – это упругий матрас, по жесткости похожий на легендарную модель Merino Merinos (S model). Является усовершенствованной моделью. Не содержит шерсти и имеет одинаковый чехол и жесткость с обеих сторон. Обеспечивает усиленную поддержку спины и позвоночника.
Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.</p>
</div>
<div class="half-width_img" ><img  src="/img/product/big/stile-6.jpg"></div>
</div>
				</div>
		',
		'rec_buy' => '',
		'sizes' => array(
			array('80x160',20100.00),
			array('80x190',23800.00),
			array('80x200',25200.00),
			array('90x190',26900.00),
			array('90x200',28300.00),
			array('120x190',35700.00),
			array('120x200',37600.00),
			array('140x190',41900.00),
			array('140x200',44100.00),
			array('160x190',47600.00),
			array('160x200',50200.00),
			array('180x200',56500.00),
			// array('180x200 (не в рулоне, новый)',56500.00),
			array('200x200',62600.00)
		),

		
		'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
			'sizes' => array('180x200 (не в рулоне, новый)','90x200 (не в рулоне, новый)'),
			'prices' => array(
                '180x200 (не в рулоне, новый)' => 40000.00,
			),
		), //скидка

	),
	array(
		'address' => 'Stile-8',
		'parent_address' => 'collectio-stile',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', 'height-20', 'hard','ortoped','vacu'),
		'name' => 'Ортопедический матрас Stile 8',
		'title' => 'Матрасы Stile 8 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 8. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Stile 8, magniflex, merino',
		'span_title' => 'Усиленная поддержка спины',		
		'attr_cat_product1' => '20 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий',
		'new_desc' => 'Усовершенствованная модель Merino, усиленная поддержка спины и позвоночника',
	
		'small_img' => '/img/product/very_small/stile-8-new.jpg',
		'img_preview' => array('/img/Stile-6_rit-01.jpg', '/img/Stile-6_rit-02.jpg', ),
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img' => '/img/product/big/stile-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
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
		'attr' => '
		<style>
				#breadcrumbs{
					background-image: url(/img/style_250.png);
					height: 250px;
				}
		</style>
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 20см</li><li>Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div> Жесткий</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 10 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINO-BAMBOO/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'desc' => '

			<div class="hnb_contcenter">
			<div class="block_line2">
			<div class="half-width">
					<h3>КОЛЛЕКЦИЯ МАТРАСОВ STILE</h3>
				<p>	Ортопедический матрас STILE – это новинка фабрики Magniflex, способная удовлетворить запросы самых взыскательных и капризных покупателей.
Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид.
Белоснежный чехол матраса выполнен из материала вискоза.
Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
Матрас Stile – это упругий матрас, по жесткости похожий на легендарную модель Merino Merinos (S model). Является усовершенствованной моделью. Не содержит шерсти и имеет одинаковый чехол и жесткость с обеих сторон. Обеспечивает усиленную поддержку спины и позвоночника.
Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.</p>
</div>
<div class="half-width_img" ><img  src="/img/product/big/stile-6.jpg" alt="Ортопедический итальянский матрас Magniflex Naturalmente STILE 8 " ></div>
</div>
<
				</div>
		',
		'rec_buy' => '',
		'sizes' => array(
			array('80x190',25200.00),
			array('80x200',26400.00),
			array('90x190',28300.00),
			array('90x200',29800.00),
			array('120x190',37600.00),
			array('120x200',39500.00),
			array('140x190',43900.00),
			array('140x200',46300.00),
			array('160x190',50200.00),
			array('160x200',52700.00),
			array('180x200',59400.00),
			array('200x200',65800.00)
		),
		'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '11.03.2019', 'price_koef' => 0.1),
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
		'address' => 'Pensiero-6',
		'parent_address' => 'collectio-pensiero',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses-2', '80x160', 'height-20','ortoped','memo','vacu'),
		'name' => 'Ортопедический матрас Pensiero 6',
		'title' => 'Матрасы Pensiero 6 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 6. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 6, magniflex, merino',
		'new_desc' => 'Жесткая поддержка спины + эффект памяти. <br>Более комфортный вариант матраса Stile, добавлен слой с эффектом памяти.',
		'span_title' => 'Еще больше комфорта, чем в Style',		
		'attr_cat_product1' => '15 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий/Средней ',
		'new_desc' => 'Еще больше комфорта, чем в Stile. Эффект «памяти». Усиленная поддержка спины и позвоночника',
	
		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'img_preview' => array('/img/Pensiero-7_rit-01.jpg', '/img/Pensiero-7_rit-02.jpg'),
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/ricordo-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'mini_description' => 'Модель Magniflex Merino (merinos) -
		это настоящий ортопедический матрас.
		Гарантия высочайшего уровня гигиены.
		Удобство транспортировки...',
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring perspiration.',
		'attr_padding_product' => 'The Memoform padding adapts perfectly to the body’s shape, giving a pleasant feeling of lightness and relaxation. The hypoallergenic fiber provides extra comfort all night long.',
		'attr_comfort_product' => 'The layer in Elioform (12 cm), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Ricordo-6.jpg',
		'block_attr_collections' => 'Ricordoa',
		'block_attr_materials' => 'Memoform, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Breathable',
		'block_attr_comfort_level' => 'Medium firm',
		'block_attr_height' => '15 cm',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'block_attr_extra' => '',
		'attr' => '
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 15 см</li><li>Степень жесткости: Жесткий / Cредней жесткости</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 10 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINO-BAMBOO/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
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
					Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
					Матрас Pensiero – это матрас со средней степенью жесткости, является усовершенствованной моделью серии Stile. Не содержит шерсти и имеет одинаковый чехол, но при этом разную жесткость с обеих сторон. С верхней стороны есть 2 см слоя мемоформ, с нижней стороны обычный упругий Elioform. Таким образом, матрас смело можно назвать двусторонним. Обеспечивает усиленную поддержку спины и позвоночника, при этом гарантируя повышенный уровень комфорта, чем например модель Stile за счет слоя memoform 2 см – эффект памяти, анатомический матрас.
					Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.

				</div>
				<div class="half-width_img">
					<img  src="/img/layer/img_pensiero_newdes.jpg">
				</div>
			</div>
					

<div style="clear:both;"></div>
</div>

				</div>
		',
		'rec_buy' => '',
		'sizes' => array(
			// array('80x160',23000.00),
			// array('80x190',27200.00),
			array('80x200',28600.00),
			// array('90x190',30600.00),
			// array('90x200',32200.00),
			array('120x190',40800.00),
			array('120x200',42900.00),
			array('140x190',47600.00),
			array('140x200',50200.00),
			array('160x200',57200.00),
			array('180x200',64500.00),
			array('200x200',71400.00),
		),

		'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '11.03.2019', 'price_koef' => 0.1),
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
		'address' => 'Pensiero-7',
		'parent_address' => 'collectio-pensiero',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses-2', 'height-20','ortoped','memo','vacu'),
		'name' => 'Ортопедический матрас Pensiero 7',
		'title' => 'Матрасы Pensiero 7 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 7. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 7, magniflex, merino',
		'span_title' => 'Еще больше комфорта, чем в Style',			
		'attr_cat_product1' => '18 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий/Средней ',
		'new_desc' => 'Еще больше комфорта, чем в Stile. Эффект «памяти». Усиленная поддержка спины и позвоночника',

		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'img_preview' => array('/img/Pensiero-7_rit-01.jpg', '/img/Pensiero-7_rit-02.jpg'),
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/ricordo-7.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring perspiration.',
		'attr_padding_product' => 'The Memoform padding adapts perfectly to the body’s shape, giving a pleasant feeling of lightness and relaxation. The hypoallergenic fiber provides extra comfort all night long.',
		'attr_comfort_product' => 'The layer in Elioform (15 cm), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Ricordo-7.jpg',
		'block_attr_collections' => 'Ricordoa',
		'block_attr_materials' => 'Memoform, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Breathable',
		'block_attr_comfort_level' => 'Medium firm',
		'block_attr_height' => '18 cm',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'block_attr_extra' => '',
		'attr' => '
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 18 см</li><li>Степень жесткости: Жесткий / Cредней жесткости</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 10 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINO-BAMBOO/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
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
							<p>
							Белоснежный чехол матраса выполнен из материала вискоза.
							Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
							Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
							Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
							Матрас Pensiero – это матрас со средней степенью жесткости, является усовершенствованной моделью серии Stile. Не содержит шерсти и имеет одинаковый чехол, но при этом разную жесткость с обеих сторон. С верхней стороны есть 2 см слоя мемоформ, с нижней стороны обычный упругий Elioform. Таким образом, матрас смело можно назвать двусторонним. Обеспечивает усиленную поддержку спины и позвоночника, при этом гарантируя повышенный уровень комфорта, чем например модель Stile за счет слоя memoform 2 см – эффект памяти, анатомический матрас.
							Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
							</p>
							</div>
							<div class="half-width_img">
								<img  src="/img/layer/img_pensiero_newdes.jpg">
							
							</div>
					</div>

					


</div>

				</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Pensiero' ,
		'cycle-name' => 'Ортопедический матрас Pensiero 7',
		'sizes' => array(
			array('80x190',29300.00),
			array('80x200',30800.00),
			array('90x190',33000.00),
			array('90x200',34600.00),
			array('90x200 (не в рулоне, новый)',34600.00),
			array('120x190',43700.00),
			array('120x200',46100.00),
			array('140x190',51200.00),
			array('140x200',53800.00),
			array('160x190',58400.00),
			array('160x200',61200.00),
			array('180x200',69100.00),
			array('200x200',76700.00),
		),

		// 'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
		//'discount_koef' => array('date_start' => '24.11.2016', 'date_end' => '10.01.2017', 'price_koef' => 0.2, ), //скидка
		'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			'sizes' => array('90x200 (не в рулоне, новый)'),
			'prices' => array(
				// '80x190' => 26370.00,
				// '80x200' => 27720.00,
				// '90x190' => 29700.00,
				'90x200 (не в рулоне, новый)' => 24300.00,
				// '90x200' => 31140.00,
				// '120x190' => 39330.00,
				// '120x200' => 41490.00,
				// '140x190' => 46080.00,
				// '140x200' => 48420.00,
				// '160x190' => 52560.00,
				// '160x200' => 55080.00,
				// '180x200' => 62190.00,
				// '200x200' => 76700.00,
			),
		), //скидка

	),
	array(
		'address' => 'Pensiero-8',
		'parent_address' => 'collectio-pensiero',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-20','ortoped','memo','vacu'),
		'name' => 'Ортопедический матрас Pensiero 8',
		'title' => 'Матрасы Pensiero 8 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 8. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 8, magniflex, merino',
		'span_title' => 'Еще больше комфорта, чем в Style',			
		'attr_cat_product1' => '20 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий/Средней ',
		'new_desc' => 'Еще больше комфорта, чем в Stile. Эффект «памяти». Усиленная поддержка спины и позвоночника',

		'img_preview' => array('/img/Pensiero-7_rit-01.jpg', '/img/Pensiero-7_rit-02.jpg'),
		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/ricordo-8.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring perspiration.',
		'attr_padding_product' => 'The Memoform padding adapts perfectly to the body’s shape, giving a pleasant feeling of lightness and relaxation. The hypoallergenic fiber provides extra comfort all night long.',
		'attr_comfort_product' => 'The layer in Elioform (17 cm), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Ricordo-8.jpg',
		'block_attr_collections' => 'Ricordoa',
		'block_attr_materials' => 'Memoform, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Breathable',
		'block_attr_comfort_level' => 'Medium firm',
		'block_attr_height' => '20 cm',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'block_attr_extra' => '',
		'attr' => '
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 20 см</li><li>Степень жесткости: Жесткий / Cредней жесткости</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 10 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINO-BAMBOO/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
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
					Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
					Матрас Pensiero – это матрас со средней степенью жесткости, является усовершенствованной моделью серии Stile. Не содержит шерсти и имеет одинаковый чехол, но при этом разную жесткость с обеих сторон. С верхней стороны есть 2 см слоя мемоформ, с нижней стороны обычный упругий Elioform. Таким образом, матрас смело можно назвать двусторонним. Обеспечивает усиленную поддержку спины и позвоночника, при этом гарантируя повышенный уровень комфорта, чем например модель Stile за счет слоя memoform 2 см – эффект памяти, анатомический матрас.
					Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
					</div>
					<div class="half-width_img">
						<img  src="/img/layer/img_pensiero_newdes.jpg">
					</div>
			</div>			
					


	
	
	</div>
</div>

				
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Pensiero' ,
		'cycle-name' => 'Ортопедический матрас Pensiero 8',
		'sizes' => array(
			array('80x190',31700.00),
			array('80x200',33200.00),
			// array('80x200 (не в рулоне, новый)',33200.00),
			array('90x190',35600.00),
			array('90x200',37300.00),
			array('120x190',47300.00),
			array('120x200',49500.00),
			array('140x190',55100.00),
			array('140x200',57800.00),
			array('160x190',62900.00),
			array('160x200',66000.00),
			array('180x200',74300.00),
            array('200x200',82700.00),
			array('200x210 (не в рулоне, новый)',86600.00),
		),
		// 'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
		'discount_koef' => array('date_end' => '31.12.2019',
			'sizes' => array('200x210 (не в рулоне, новый)'),
			'prices' => array(
                // '80x200 (не в рулоне, новый)' => 26560.00,
				'200x210 (не в рулоне, новый)' => 60700.00
			),
		), //скидка
	),
	array(
		'address' => 'Pensiero-12',
		'parent_address' => 'collectio-pensiero',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('s-effektom-pamjati-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-26','ortoped','memo','vacu'),
		'name' => 'Pensiero 12',
		'title' => 'Матрасы Pensiero 12 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 12. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 12, magniflex, merino 12',
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий/Средней',
		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/ricordo-12.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring perspiration.',
		'attr_padding_product' => 'The Memoform padding adapts perfectly to the body’s shape, giving a pleasant feeling of lightness and relaxation. The hypoallergenic fiber provides extra comfort all night long.',
		'attr_comfort_product' => 'The layer in Elioform (28 cm), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Ricordo-12.jpg',
		'block_attr_collections' => 'Ricordoa',
		'block_attr_materials' => 'Memoform, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Breathable',
		'block_attr_comfort_level' => 'Medium firm',
		'block_attr_height' => '30 cm',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'block_attr_extra' => '',
		'attr' => '
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 30 см</li><li>Степень жесткости: Жесткий / Cредней жесткости</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 10 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINO-BAMBOO/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
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
						Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
						Матрас Pensiero – это матрас со средней степенью жесткости, является усовершенствованной моделью серии Stile. Не содержит шерсти и имеет одинаковый чехол, но при этом разную жесткость с обеих сторон. С верхней стороны есть 2 см слоя мемоформ, с нижней стороны обычный упругий Elioform. Таким образом, матрас смело можно назвать двусторонним. Обеспечивает усиленную поддержку спины и позвоночника, при этом гарантируя повышенный уровень комфорта, чем например модель Stile за счет слоя memoform 2 см – эффект памяти, анатомический матрас.
						Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
						
					
					
					</div>
					<div class="half-width_img">
						<img  src="/img/layer/img_pensiero_newdes.jpg">
					</div>
			</div>
					



</div>

				</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Pensiero' ,
		'cycle-name' => 'Ортопедический матрас Pensiero 12',
		'sizes' => array(
			array('80x190',42700.00),
			array('80x200',44900.00),
			array('90x190',48000.00),
			array('90x200',50500.00),
			array('90x200 (не в рулоне, новый)',50500.00),
			array('120x190',63800.00),
			array('120x200',67200.00),
			array('140x190',74300.00),
			array('140x200',78200.00),
			array('160x190',85200.00),
			array('160x200',89500.00),
			array('180x200',100900.00),
			array('200x200',111900.00),

		),
		// 'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
		//'discount_koef' => array('date_start' => '24.11.2016', 'date_end' => '10.01.2017', 'price_koef' => 0.2, ), //скидка
		'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2020',
			'sizes' => array('90x200 (не в рулоне, новый)'),
			'prices' => array(
				'90x200 (не в рулоне, новый)' => 35400.00,
			),
		), //скидка

	),
	array(
		'address' => 'WATERLATTEX',
		'parent_address' => 'mattresses',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses','height-20','ortoped','vacu'),
		'name' => 'Ортопедический матрас WaterLattex',
		'title' => 'Матрас Magniflex WaterLattex. Официальный сайт Магнифлекс',
		'description' => 'Описание, фотографии, состав ортопедического матраса Magniflex WaterLattex. Очень комфортный, мягкий матрас с высочайшими анатомическими свойствами.',
		'keywords' => 'magniflex waterlattex, waterlatex, магнифлекс вотерлатекс,',
		'span_title' => 'Высокая воздухопроницаемость',	
		'attr_cat_product1' => '18 см',
		'attr_cat_product2' => 'Несъемный',
		'attr_cat_product3' => 'Средняя',
		'new_desc' => 'Двусторонний: лето - хлопок, зима - шерсть мериноса, анатомический эффект, дышащий: технология Airyform',
		'small_img' => '/img/product/very_small/WaterLattex.jpg',
		'img_preview' => array('/img/Waterlattex-4-1.jpg', '/img/Waterlattex-5.jpg', '/img/Waterlattex-7.jpg', '/img/Waterlattex-8.jpg', '/img/Waterlattex-9.jpg'),
		'small_img_alt' => 'картинка - ортопедический матрас WaterLattex',
		'img' => '/img/product/big/WaterLattex.jpg',
		'img_alt' => 'Ортопедические матрасы WaterLattex',
		'attr' => '
			<!--<a href="/skidki-magniflex/skidka-15-legendarnye-matrasy/"><div class="hnb_action15">АКЦИЯ! Только в сентябре - <b>15% СКИДКА</b> на этот матрас!</div></a>-->
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 18 см</li><li>Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--средней мягкости, комфортный--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 15 лет.</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/WATERLATTEX/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Модель Magniflex Waterlattex - это настоящий ортопедический матрас. Узнать подробности?</div>
			</li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Качественный итальянский матрас <div class="hnb_marg">Изготовлен именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contcenter">
			<div class="half-width">
			<h3>Ортопедический матрас</h3>
			Матрас Waterlattex Magniflex ("вотерлатекс" или "ватерлатекс") - ортопедическое изделие, помогающее зафиксировать позвоночник спящего человека в правильном, оптимальном положении не зависимо от его веса и комплекции. <br />
			Он дарит своим обладателям оздоровительный сон: снимает усталость за счет полного расслабления мышц спины, способствует свободной циркуляции крови в организме, так как не пережимает даже мелкие капилляры, обеспечивает превосходную удобную поддержку. Лечебные свойства и воздействие доказаны клиническими испытаниями в Европе, США и России.
</div>
			<img class="img_card_right" src="/img/magniflex-waterlattex1.jpg" alt="Ортопедический итальянский матрас Magniflex Waterlattex" >
			<br>
			<div class="block_line">
			<h3>Глубокий анатомический эффект</h3>
			<p>
			В основе модели Waterlattex используется принципиально новый универсальный наполнитель Watercell, благодаря которому матрас легко принимает физиологическую форму человека, естественно реагирует на движения спящего, помогая позвоночнику все время находится в анатомически правильном состоянии, способствует максимальному отдыху и расслабленности.
</p>
</div>
			<div>
			<img  src="/img/waterlattex-airyform.jpg" alt="Waterlattex - технология Airyform"  class="img_card_right"><br />
			Инновационная технология Airyform - поток воздуха при любом движении
			</div>
			<div class="half-width">
			<h3>Дышащие, технология Airyform</h3>
			<p>
						Waterlattex - необыкновенно проницаемые матрасы, благодаря используемой в них запатентованной технологии Airyform. Матрац буквально пронизан сетью мельчайших каналов, создающих отличную вентиляцию. Каждый раз, когда Вы меняете положение свежий воздух буквально "прокачивается" через всю систему.
			</p>
			</div>
			<br>
			<div class="half-width">
			<h3>Летняя сторона - натуральный хлопок, зимняя - шерсть мериноса</h3>
			<p>
			Матрас Magniflex Waterlattex имеет "летнюю" и "зимнюю" стороны. Летняя сторона - эластичная терморегулирующая ткань из 100% хлопка с пропиткой TEFLON. Зимняя производится из шерсти тонкорунного мериноса. Шерстяное покрытие действует на рецепторы кожи обеспечивая рефлекторно-анальгизирующее действие при болях, вызванных миозитом, радикулитом, невралгиями.
			</p>
			</div>
			<div id="coin-slider2">
								<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img  src="/img/magniflex-waterlattex2.jpg" alt="матрас Waterlattex - летняя сторона" style="width: 640 px;">
			<span>
			Летняя сторона - мягкий натуральный хлопок
							</span>
								</a>

								<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/magniflex-waterlattex3.jpg" alt="зимняя сторона матраса Waterlattex" />
			<span>
			Зимняя сторона - высококачественная 100% шерсть из тонкорунного мериноса
							</span>
								</a>

							</div>
			<div class="block_line">
			<h3>Антиаллергенные, безопасные </h3>

<p>
			Все матрасы Magniflex  абсолютно антиаллергенные за счет многоступенчатой инновационной обработки тканей и наполнителей БЕЗ использования химических веществ. Сапрофиты -микроорганизмы, вызывающие аллергию, не заведутся никогда. В составе матрасов не используются металлические детали, поэтому они не оказывают на организм магнитного или электростатического воздействия.
			</p>
			</div>
			<div class="half-width">
			<h3 style="display:block">Концептуальная идея матраса Waterlattex</h3>
			<b>Теплый песок</b> - идеальная анатомическая поддержка спины. <br />
			<b>Свежий бриз</b> - отличная воздухопроницаемость гарантия Airyform. <br />
			<b>Чистая вода</b> -  основной компонент наполнителя матраса.  <br /> <br />
</div>
			<img  src="/img/magniflex-waterlattex7.jpg" alt="Ортопедический итальянский матрас Magniflex Waterlattex"  class="img_card_right"><br /><br />
			Рисунок-узор на поверхности матраса  напоминает океанические волны. Взгляните на фотографии выше, затем переведите взгляд на изображение отдыхающего.. у них много общего :)
			<div class="block_line">
			<h3>Вакуумная упаковка </h3>
			<p>
			Все матрасы поставляются в вакуумной упаковке - безусловная гарантия стерильной чистоты и удобства доставки. А также Ваша уверенность в том, что матрас абсолютно новый.
			</p>
			</div>
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
		<div class="hnb_contcenter">
			<div class="hnb_contlef">
			<p>
					<img width="280" src="/img/otzyvy-01.jpg" height="196" title="Реальные отзывы покупателей матрасов Магнифлекс">
					<br>Ни одного отрицательного отзыва!
			</p>
			</div>
				<div class="hnb_contrig">
				<p>

				В России ортопедические матрасы Magniflex представлены с 1992 года, за все это время нами не было зафиксировано ни одного отрицательного отзыва или рецензии о нашей продукции. Не смотря на жесточайший контроль качества отгружаемого товара, у нас, как и у любой компании, случаются &nbsp;продажи матрасов с наличием производственных дефектов, однако такой товар мы незамедлительно меняем на новый идеального качества, кроме того процент таких случаев крайне мал - менее 0,01% от общего объемы продаж.
			</p>
			</div>
			</div>
		',
		'delivery-pay' => ' ',
		'advant-tab' => ' ',
		'similar' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli">
			<a href="/catalog/orthopedic_mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Merino Green Tea</a><br>
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
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/Naturalmente (New Naturcomfort).jpg" height="130"><br />Naturalmente (New Naturcomfort)</a>
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
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Memo Merino</a>
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
			// array('80x190',27300.00),
			array('80x200',29000.00),
			array('90x190',30800.00),
			array('90x200',32600.00),
			array('90x200 (не в рулоне, новые)',32600.00),
			// array('120x190',41100.00),
			// array('120x200',43200.00),
			array('140x190',47900.00),
			// array('140x200',50400.00),
			// array('160x190',54800.00),
			// array('160x195',56100.00),
			// array('160x200',57500.00),
			// array('180x190',61500.00),
			// array('180x195',63000.00),
			array('180x200',64800.00),
			array('190x205 (не в рулоне, новые)',70050.00),
			array('200x200',71900.00),
		),
		'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.09.2019',
		'sizes' => array(
			'80x190',
			'80x200',
			'90x190',
			'90x200',
			'90x200 (не в рулоне, новые)',
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
			'200x200'),
		'prices' => array(
			'80x190' => 24570.00,
			'80x200' => 24650.00,
			'90x190' => 26180.00,
			'90x200' => 27710.00,
			'90x200 (не в рулоне, новые)' => 22900.00,
			'120x190' => 36990.00,
			'120x200' => 38880.00,
			'140x190' => 40715.00,
			'140x200' => 45360.00,
			'160x190' => 49320.00,
			'160x195' => 50490.00,
			'160x200' => 51750.00,
			'180x190' => 55350.00,
			'180x195' => 56700.00,
			'180x200' => 55080.00,
			'190x205 (не в рулоне, новые)' => 49100.00,
			'200x200' => 61115.00,


		),
	), //скидка
		// 'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '30.04.2019', 'price_koef' => 0.1),
	),
			array(
		'address' => 'NEW-NATURCOMFORT',
		'parent_address' => 'mattresses',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-22-25','ortoped','memo','vacu'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас Naturalmente',
		'title' => 'Naturcomfort - матрас от Magniflex в нашем интернет-магазине',
		'description' => 'У нас Вы найдете матрасы серии Naturcomfort. Удобные итальянские матрасы в нашем каталоге.',
		'keywords' => 'матрас, naturcomfort, magniflex',
		'span_title' => 'Волокна древисины',
		'attr_cat_product1' => '22 см',
		'attr_cat_product2' => 'Несъемный Wooden fiber.',
		'attr_cat_product3' => 'Cредней жесткости',
		'small_img' => '/img/product/very_small/New NaturComfort.jpg',
		'img_preview' => array('/img/Naturalmente-4.jpg', '/img/Naturalmente-5.jpg', '/img/Naturalmente-6.jpg', '/img/Naturalmente-7.jpg'),
		'small_img_alt' => 'матрас Naturalmente (New Naturcomfort)',
		'img' => '/img/product/big/New NaturComfort.jpg',
		'img_alt' => 'Ортопедические матрасы Naturalmente (New Naturcomfort)',		
		'attr_cover_product' => '',
		'attr_padding_product' => 'Оболочка изготовлена ​​из древесного волокна в чистой целлюлозе, экологически чистого и полезного для здоровья материала, изготовленного из тщательно продуманной древесины. Натуральная ткань, которая благодаря своим терморегулирующим свойствам позволяет воздуху свободно циркулировать, устраняя любые неприятные запахи. Это также невероятно мягкий для кожи.',
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
		'block_attr_extra' => '
		Экологически чистые, натуральные дышащие материалы ',
		'attr' => '
		<style>
			    #breadcrumbs {
					background-image: url(/img/natur_comfort_250.jpg);
					height: 250px;
				}
			</style>
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 22 см</li><li>Степень жесткости: <div class="rigidity rigidity_3" title="средней жесткости"></div><!--средней жесткости, комфортный--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<style>
				.hnb_primu{display:none;}
				.advantages ul{border:none;}
			</style>
			<ul class="new_prem_bl">
				<li style="background: url(/img/product/vak_kach_b.png)no-repeat 5px;"><a target="_blank" href="/production/vakuumnaya-upakovka/">
				Вакуумная<br>
				упаковка
				</a></li>
				<li style="background: url(/img/product/nas_ort_b.png)no-repeat 15px 9px;padding-left: 106px;"><a target="_blank" href="/production/nastoyashchie-ortopedicheskie-matrasy/">
				Настоящий<br>
				Ортопедический
				</a></li>
				<li style="background: url(/img/product/is_soz_it_b.png)no-repeat 15px;padding-left: 70px;"><a target="_blank" href="/production/made-in-Italy/">
				Изобретен и создан<br>
				именно в Италии
				</a></li>
				<li style="background: url(/img/product/ser_cach_b.png)no-repeat 8px 24px;padding-left: 48px;"><a target="_blank" href="/pokupatelyam/certificates/">
				Сертификаты<br>
				качества
				</a></li>
				<li style="background: url(/img/product/bis_dos_mos_b.png)no-repeat 15px 22px;padding-left: 60px;"><a target="_blank" href="/pokupatelyam/oplata-i-dostavka/">
				Быстрая доставка<br>
				Бесплатно по Москве
				</a></li>
				<li style="background: url(/img/product/nkl_natmat_b.png)no-repeat 5px;    padding-left: 53px;"><a target="_blank" href="/production/fabric-and-treatments/">
				НЕТ Клея!<br>
				Природные материалы
				</a></li>
			<ul>
		',
		'desc' => '
			<div class="hnb_contcenter">
			<i style="color: #E1001A;text-align: center;display: block; margin-top:35px;">С мая 2016 года модель ортопедического матраса New Naturcomfort получила новое название NATURALMENTE. Для удобства покупателей на сайте будут использоваться оба названия - Naturalmente (New Naturcomfort).</i>
			<div class="block_line2">
			<div class="half-width">
			<h3>Профессиональный ортопедический матрас Naturalmente (New Naturcomfort)</h3>
			<p >
			Упругий матрас с высокими ортопедическими свойствами, аналогичными характеристикам базовой модели Magniflex Merino. Но при этом Naturalmente (New Naturcomfort) обладает повышенным уровнем комфортности за счет 4 сантиметрового слоя инновационного материала Memoform (создает "эффект памяти").<br>
Naturalmente (New Naturcomfort) - усовершенствованная модель, выпускавшегося ранее матраса Magniflex Naturcomfort. В новом варианте изменены рисунок и простежки чехла, на 1 см увеличилась общая высота, появился дополнительный слой Memoform.
			</p>
			</div>
			<div class="half-width_img" ><img  src="/img/new_hnbv_yfner+.jpg" alt="Ортопедический итальянский матрас Magniflex Naturalmente (New Naturcomfort) " ></div>
			</div>
			<div class="block_line2">
			<div class="half-width_img" ><img  src="/img/memory_image.jpg" alt="Ортопедический итальянский матрас Magniflex Naturalmente (New Naturcomfort) " ></div >
					<div class="half-width">
					<h3 >Эффект памяти, 4 см Memoform</h3>
					<ul >
						<li
    list-style-type: none;">
	— Мгновенно принимает форму тела человека, реагируя на тепло и вес. Не оказывает ответного давления.
<br>— Обеспечивает равномерное распределение нагрузки;
						</li>
						<li>
						— Максимально возможный комфорт, снижаются болевые ощущения в спине, шее и суставах, улучшает циркуляция крови;
						<li >
						— Способствует расслаблению мышц человека во время сна;
						</li>
						<li >
						— Снижает вероятность появления отечности и онемения конечностей;
						</li>
						<li >
						— Дарит крепкий и здоровый сон.
						</li>
					</ul>
					</div>
				</div>
				<div class="block_line2">
			<div class="half-width">
			<h3  >Дышащий, отличная вентиляция</h3>
			<p >
			Хороший матрас должен дышать, то есть быть воздухопронициаемым. Основной слой матраса – Eliosoft обладает открытой структурой, обеспечивающей естественную вентиляцию и циркуляцию воздуха.
			</p>
			</div>
			<div class="half-width_img"><img  src="/img/dyshshii.jpg"></div>
			</div>
			<div class="block_line2">
			<div class="half-width_img"><img  src="/img/pine-needles-branch.jpg"></div>
			<div class="half-width">
			<h3 >Ткань Wooden Fiber, содержит волокна белой пихты</h3>
					<p >
			Чехол матраса изготавливается из ткани Wooden Fiber с использованием натуральных волокон белой пихты. Общеизвестно, шишки белой пихты являются отличным средством борьбы с ревматизмом и другими суставными патологиями.<br>
Wooden Fiber – мягкий эластичный материал, быстро и эффективно испаряющий влагу, не накапливает сырость, обеспечивает хороший теплообмен с телом человека. Высокие бактериостатические и абсорбирующие свойства материи  позволяют эффективно удалять посторонние запахи.
			</p>
			</div>
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
			array('80x190',36600.00),
			array('80x200',38600.00),
			array('90x190',41100.00),
			array('90x200',43200.00),
			array('120x190',54800.00),
			array('120x200',57800.00),
			array('140x190',63900.00),
			array('140x200',67200.00),
			array('160x190',73100.00),
			array('160x195',75000.00),
			array('160x200',76800.00),
			array('170x200',81600.00),
			array('180x200',86600.00),
			array('200x200',96000.00),
		),
		'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.01.2020',
            'sizes' => array(''),
            'prices' => array(
            ),
        ), //скидка
		// 'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
		'yml_desc' => '
			Уровень комфорта: средней жесткости, комфортный. Magniflex Naturalmente дарит исключительный комфорт во время сна. Даже если просто прикоснуться к нему рукой, непременно ощущаешь необыкновенную мягкость, "бархатность" поверхности матраса. Этот волшебный эффект ему придают древесные волокна, входящие в состав тканей и материалов.
		',
		'yml_torgmail' => true,

	),
	array(
		'address' => 'MEMO-MERINO',
		'parent_address' => 'mattresses',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('chehol-coolmax-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-20','ortoped','vacu'),
		'name' => 'Memo Merino',
		'title' => 'Матрас Мемо (Memo Merino) - интернет-магазине Magniflex',
		'description' => 'У нас Вы найдете матрасы Мемо. Magniflex Memo Merino - матрасы с высокими анатомическими свойствами.',
		'keywords' => 'матрас, мемо, magniflex, memo, merino',
		'attr_cat_product1' => '20 см',
		'attr_cat_product2' => 'Несъемный Coolmax.',
		'attr_cat_product3' => 'Cредней мягкости/Жесткий',

		'small_img' => '/img/product/very_small/Memo Merino.jpg',
		'img_preview' => array('/img/memo-merino-magniflex-2.jpg', '/img/memo-merino-magniflex-1.jpg'),
		'small_img_alt' => 'ортопедический матрас Magniflex Merinos Memo Merino',
		'img' => '/img/product/big/Memo Merino.jpg',
		'img_alt' => 'Ортопедические матрасы Magniflex Merinos Memo Merino',
		'attr' => '
			<!--<a href="/skidki-magniflex/skidka-15-legendarnye-matrasy/"><div class="hnb_action15">АКЦИЯ! Только в сентябре - <b>15% СКИДКА</b> на этот матрас!</div></a>-->
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 20 см</li><li>Степень жесткости: Регулируемая<!--очень комфортный--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MEMO-MERINO/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Модель Magniflex Memo Merino - это настоящий ортопедический матрас. Узнать подробности?</div>
			</li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Качественный итальянский матрас <div class="hnb_marg">Изготовлен именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
				</div>
				<div class="hnb_contrig">
				<div class="block_line2">
				<div class="half-width">
			<h3>Матрас Magniflex MEMO MERINO</h3>
			<p>Magniflex Orthomemo Merino – двусторонний по жесткости матрас, поставляется в рулонной упаковке по изобретенной технологии Magniflex. Позволяет изменять жесткость в процессе эксплуатации: если матрас с эффектом памяти хочется превратить в более жесткий – матрас достаточно перевернуть к верх ногами и продолжить эксплуатацию с его жесткой стороны. Матрас также имеет боковые ручки, что также удобно при переноске матраса или при заправке кровати постельным бельем или наматрасником. </p>
			</div>
			<div class="half-width_img">
			<img  src="/img/memo-merino-magniflex-2.jpg" alt="Ортопедический итальянский матрас Magniflex Memo Merino">
			</div>
			</div>
			<div class="block_line">
					<h3>Наполнители на основе натуральных материалов</h3>
		<p>Для внутреннего слоя Magniflex Orthomemo Merino используется два вида материалов. Пена Elioform Magniflex, составляющая 14 см в матрасе – один из самых жестких видов пен Magniflex, имеет высокую плотность и обеспечивает качественную и упругую поддержку спины. Выдерживает нагрузку до 160 кг на спальное место. Мелкопористая структура Elioform обеспечивает высокий уровень циркуляции воздуха, благодаря чему матрас становится «дышащим» и гарантирует свежесть и комфортность сна. Второй материал, используемый в матрасе — это пена с эффектом памяти Memoform Magnifoam, которая также имеет название Memory. 6 см пены с эффектом памяти гарантируют повышенные анатомические свойства, матрас способен повторять контуры тела, тем самым обеспечивая высокий уровень комфорта и исключая «эффект гамака.» Также выдерживает нагрузку до 160 кг на спальное место.</p>
			</div>
			<div class="block_line2">
			<div class="half-width_img">
			<img  src="/img/memo-merino-magniflex-1.jpg" alt="Ортопедический итальянский матрас Magniflex Memo Merino" >
			</div>
			<div class="half-width">
			<h3>Повышенный уровень комфорта</h3>
			<p>Термочувствительный материал MEMOFORM (Memory® Form) был разработан специально по заказу национального управления США по аэронавтике и исследованию космического пространства (NASA), для снижения давления на чувствительные участки тела астронавтов при длительных повышенных нагрузках в фиксированном положении. Пористая структура этого материала состоит из многочисленных ячеек открытой формы, представляющие собой микроскопические пружинки, сжимающиеся под действием веса и тепла человеческого тела и распрямляющиеся с задержкой в 6-7 секунд после снятия нагрузки. Memory® Form под воздействием тепла и веса человека подстраивается под контуры человека, лежащего на матрасе, "запоминает" форму тела, точно повторяя его рельеф, не "выталкивает" его, не оказывает на него ответного давления, вследствие чего во время сна тело получает наиболее равномерное распределение точечной нагрузки по всей поверхности матраса. Сон становится простым и приятным, позволяющим восстановить силы человеку за гораздо меньшее время, по сравнению со сном на обычном матрасе.</p>
				</div>
			</div>
			<div class="block_line">
					<h3>Долговечность и износостойкость</h3>
		<p>Заводской заявленный срок службы модели Magniflex Orthomemo Merino не менее десяти лет. Матрас поставляется в Россию очень давно и получены отзывы успешной эксплуатации матрасов более 12 лет! Кроме того, благодаря своей конструкции (в частности, отсутствию пружинного блока) матрас совершенно нечувствителен к вертикальным нагрузкам. На матрасе можно прыгать и играть детям, и он от этого не деформируется. Хотите стать счастливым обладателем такого матраса? Закажите его прямо сейчас с помощью онлайн-сервиса «Корзина» или по телефону.
		При покупке матрасов Magniflex предоставляются выгодные условия приобретения дополнительных аксессуаров (подушки и пледы), подробнее в разделе Акции.</p>
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
		'review' => '',
		'similar' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">

			<li class="hnb_mypohli">
			<a href="/catalog/orthopedic_mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Merino Green Tea</a><br>
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
			<li class="hnb_mypohli">
			<a href="/catalog/orthopedic_mattresses/MERINOS/"><img width="185" src="/img/product/very_small2/Merino (Merinos).jpg" height="130"><br />Merino (Merinos)</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino (Merinos)"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/"><img width="185" src="/img/product/very_small2/Merino Green Tea.jpg" height="130"><br />Merino Green Tea</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/Naturalmente (New Naturcomfort).jpg" height="130"><br />Naturalmente (New Naturcomfort)</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Naturalmente (New Naturcomfort)"}--> руб</span>
			</div>
			</li>
			</ul>
			</div>
		',
		'softer' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
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
			это одна из наиболее комфортных моделей
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Memo Merino' ,
		'cycle-name' => 'Ортопедический матрас Memo Merino',
		'sizes' => array(
			// array('80x190',44100.00),
			array('80x200',46400.00),
			array('90x190',49700.00),
			array('90x200',52200.00),
			// array('120x190',66000.00),
			array('120x200',69500.00),
			// array('140x190',77000.00),
			array('140x200',81000.00),
			// array('150x200',86900.00),
			// array('160x190',88100.00),
			// array('160x195',90300.00),
			// array('160x200',92600.00),
			// array('180x190',98900.00),
			// array('180x200',104100.00),
			// array('200x200',115700.00),
		),
		'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '30.09.2019', 'price_koef' => 0.15),
		'yml_desc' => '
			Уровень комфорта: очень комфортный. Высота: 20 см. Срок службы: не менее 15 лет. Матрас с высокими анатомическими свойствами.
		',
		'yml_torgmail' => true,
	),
	array(
		'address' => 'Memorie-8',
		'parent_address' => 'collectio-memorie',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-20','ortoped','vacu'),
		'name' => 'Ортопедический матрас Memorie 8',
		'title' => 'Матрасы Memorie - интернет-магазин Magniflex',
		'description' => 'Ортопедический матрас Memorie Магнифлекс (Magniflex) Италия. Чехол вискоза, слой memoform эффект памяти. Средней жесткости матрас. Сделано в Италии.',
		'keywords' => 'матрас, Memorie, magniflex',
			 'attr_cat_product1' => '20 см',
			 'attr_cat_product2' => 'Cъемный, Viscosa',
			 'attr_cat_product3' => 'Cредней жесткости',
		'small_img' => '/img/product/very_small/memorie-9-extra-small.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie.',
		'img' => '/img/product/big/memorie-8.jpg',
		'img_preview' => array('/img/product/big/memorie-8,9.jpg', '/img/product/big/memorie-8,9-2.jpg'),
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie',	
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
		'attr' => '
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 20 см</li><li>Степень жесткости: Средняя</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 10 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/Memorie/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'desc' => '
			

<div class="common_block_common">
			<div class="half-width">
			<h3>КОЛЛЕКЦИЯ МАТРАСОВ MEMORIE</h3>

			Ортопедический матрас Memorie – это новинка фабрики Magniflex, следующий уровень комфорта после серии упругих матрасов коллекции Stile и Pensiero.
			<br><br>
			Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид. Отличие всех моделей коллекции Memorie друг от друга только в высоте, одинаковые материалы и жесткость.
			<br><br>
			Белоснежный чехол матраса выполнен из материала вискоза. Чехол съемный, на молнии.
			<br><br>
			Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
			<br><br>
			Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
			<br><br>
		</div>
	<div class="coin-slider">
		<img src="/img/product/big/memorie-9.jpg">
	</div>
</div>

<div class="common_block_common">
	<div class="coin-frame">
		<iframe class="ifreme-video" width="100%" height="400px" src="https://www.youtube.com/embed/euJn6HfS6dw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	</div>

	<div class="half-width">
	Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
	<br><br>
	Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
	<br><br>
	Матрас имеет массажный слой высотой 5 см - Eliosoft. Это мультизональный слой, позволяющий обеспечивать повышенный уровень комфорта и воздействовать на разные точки спящего человека с разным давлением. 5 зональный материал Eliosoft находится под слоем Мемоформ - латексной пены с эффектом памяти. Поэтому неприятного ощущения от массажного слоя при эксплуатации матраса не проявляется.

	</div>
</div>


		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Memorie 8',
		'cycle-name' => 'Ортопедический матрас Memorie 8',
		'sizes' => array(
			array('80x190',35100.00),
			array('80x200',36900.00),
			array('90x190',39500.00),
			array('90x200',41500.00),
			array('120x190',52600.00),
			array('120x200',55300.00),
			array('140x190',61200.00),
			array('140x200',64500.00),
			array('160x190',70100.00),
			array('160x200',73700.00),
			array('180x200',82800.00),
			array('200x200',92000.00),
		),
		'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '11.03.2019', 'price_koef' => 0.1),
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
		'address' => 'Memorie-9',
		'parent_address' => 'collectio-memorie',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-22-26','ortoped','vacu'),
		'name' => 'Memorie 9',
		'title' => 'Матрасы Memorie - интернет-магазин Magniflex',
		'description' => 'Ортопедический матрас Memorie Магнифлекс (Magniflex) Италия. Чехол вискоза, слой memoform эффект памяти. Средней жесткости матрас. Сделано в Италии.',
		'keywords' => 'матрас, Memorie, magniflex',
			 'attr_cat_product1' => '22 см',
		'attr_cat_product2' => 'Съемный Viscose.',
		'attr_cat_product3' => 'Cредней жесткости',
		'small_img' => '/img/product/very_small/memorie-9-extra-small.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie.',
		'img' => '/img/product/big/memorie-9.jpg',
		'img_preview' => array('/img/product/big/memorie-8,9.jpg', '/img/product/big/memorie-8,9-2.jpg'),
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie',		
		'small_img' => '/img/product/very_small/memorie-9-extra-small.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie.',
		'img' => '/img/product/big/memorie-8.jpg',
		'img_preview' => array('/img/product/big/memorie-8,9.jpg', '/img/product/big/memorie-8,9-2.jpg'),
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie',		
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота:  22 см</li><li>Степень жесткости: Средняя</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 10 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/Memorie/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'desc' => '
			
		<div class="common_block_common">
		<div class="half-width">
		<h3>КОЛЛЕКЦИЯ МАТРАСОВ MEMORIE</h3>

		Ортопедический матрас Memorie – это новинка фабрики Magniflex, следующий уровень комфорта после серии упругих матрасов коллекции Stile и Pensiero.
		<br><br>
		Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид. Отличие всех моделей коллекции Memorie друг от друга только в высоте, одинаковые материалы и жесткость.
		<br><br>
		Белоснежный чехол матраса выполнен из материала вискоза. Чехол съемный, на молнии.
		<br><br>
		Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
		<br><br>
		Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
		<br><br>
	</div>
<div class="coin-slider">
	<img src="/img/product/big/memorie-9.jpg">
</div>
</div>

<div class="common_block_common">
<div class="coin-frame">
	<iframe class="ifreme-video" width="100%" height="400px" src="https://www.youtube.com/embed/euJn6HfS6dw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
</div>

<div class="half-width">
Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
<br><br>
Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
<br><br>
Матрас имеет массажный слой высотой 5 см - Eliosoft. Это мультизональный слой, позволяющий обеспечивать повышенный уровень комфорта и воздействовать на разные точки спящего человека с разным давлением. 5 зональный материал Eliosoft находится под слоем Мемоформ - латексной пены с эффектом памяти. Поэтому неприятного ощущения от массажного слоя при эксплуатации матраса не проявляется.

</div>
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
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Memorie 9',
		'cycle-name' => 'Ортопедический матрас Memorie 9',
		'sizes' => array(
		// array('80x190',37100.00),
			// array('80x200',39000.00),
			// array('90x190',41700.00),
			array('90x200 (не в рулоне, новый)',43900.00),
			// array('120x190',55500.00),
			// array('120x200',58400.00),
			// array('140x190',64600.00),
			// array('140x200',68200.00),
			// array('160x190',73800.00),
			// array('160x200',77700.00),
			// array('180x200',87600.00),
			// array('200x200',97100.00),
		),
	// 'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.07.2019', 'price_koef' => 0.1),

		//'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
		//'discount_koef' => array('date_start' => '13.07.2017', 'date_end' => '10.01.2022', 'price_koef' => 0.15, ), //скидка
		'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.09.2019',
			'sizes' => array('90x200 (не в рулоне, новый)'),
			'prices' => array(
				'90x200 (не в рулоне, новый)' => 30730.00,
				// '140x200' => 57970.00,
				// '180x200' => 74460.00,
			),
		), //скидка
	),
    /* элитные матрасы */
    array(
      'address' => 'Carezza-10',
          'parent_address' => 'elitnye-carezza',
      'parent_address2' => 'mattresses',
          'address_collection' => 'rest/',
      'other_categories' => array('orthopedic_mattresses', 'new-mattresses', 'chehol-viscose-mattresses', 'vacuum-mattresses', 'mattresses-filter', 'height-22-25','ortoped','elit', 'elitnye-matrasy','vacu'),
      'parent_name' => 'Элитные матрасы',
      'name' => 'Carezza 10',
      'name' => 'Carezza 10',
      'title' => 'Carezza 10 - итальянский матрас от интернет-магазина Magniflex',
      'description' => 'У нас Вы найдете матрасы серии Carezza 10. 10 лет международной гарантии при покупке.',
      'keywords' => 'carezza, 10',
	  'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'мягкий с упругой поддержкой.',
      'small_img' => '/img/product/small/Carezza 10 3-4 PEDANA.jpg',
      'small_img_alt' => 'Итальянский ортопедический матрас Carezza Magniflex',
      'img' => '/img/product/big/Carezza_10.jpg',
      'img_preview' => array('/img/product/Carezza 10 3-4 SOMMIER CON CUSCINI.jpg', '/img/product/Carezza 10 3-4 SOMMIER SENZA CUSCINI.jpg', '/img/product/Carezza 10 FRONTALE SOMMIER CON CUSCINI.jpg', '/img/product/Carezza 10 FRONTALE SOMMIER SENZA CUSCINI.jpg', '/img/product/Carezza 12 PAR FASCIA.jpg'),
      'img_alt' => 'Итальянский ортопедический матрас Carezza Magniflex',
	  'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr_cat_product1' => '20 см',
		'attr_cat_product2' => 'Cъемный, Viscosa',
		'attr_cat_product3' => 'Cредней жесткости/Cредней мягкости',
		'small_img' => '/img/product/very_small/memorie-9-extra-small.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie.',
		'img' => '/img/product/big/memorie-8.jpg',
		'img_preview' => array('/img/product/big/memorie-8,9.jpg', '/img/product/big/memorie-8,9-2.jpg'),
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie',		
		'attr_cover_product' => 'Вискозное покрытие, мягкое и дышащее, делает матрас мягким и шелковистым на ощупь и более эффективно рассеивает пот, способствуя испарению.',
		'attr_padding_product' => 'Обивка из волокон Memosoft и Super Soft обеспечивает дополнительный комфорт на протяжении всей ночи.',
		'attr_comfort_product' => 'Слой в Aquabreeze (5 см), гибкий и невероятно удобный материал, благодаря своей структуре с открытыми порами и замечательной эластичностью, способствует потению, обеспечивая мягкий, уютный и прохладный комфорт в течение ночи',
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
        <a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
        <li>Высота: 25 см</li><li>Степень жесткости: мягкий с упругой поддержкой.</li>
        <li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
        <li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
        <li>Срок службы: не менее 12 лет.</li></ul><br>
      ',
      'advantages' => '',
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
        <div class="hnb_contarea">
        <div class="hnb_elite_content2">
		',
		'advant-tab'=>'
		
		',
		'desc' => '
          <hr class="hnb_myhrled" />
		  <div class="hnb_elcont3">
					<div class="common_block_common">
							<div class="half-width">
							<h3>Carezza 10 Magniflex</h3>
							<p> Коллекция матрасов Carezza – это сочетание самых передовых технологий и материалов в совокупности с изысканным итальянским дизайном. Поддержка, предлагаемая этими матрасами сравнима с эффектом обволакивающего объятия, которое длится всю ночь. Выбранные материалы для этой коллекции сочетают мягкость материалов с необычайной способностью циркуляции воздуха, что придает невероятную свежесть и комфорт во время сна.</p>
							<p> Матрас имеет чехол из материала viscose, что представляет из себя мягкое и шелковистое высокотехнологичное волокно, которое придает коже удивительное ощущение мягкости. Этот матрас, заполненный материалами в чехле Memosoft и Super Soft Fiber, гарантирует необыкновенный воздухопроницаемый, мягкий и обволакивающий комфорт. </p>
							<p> Также гарантируется расслабление тела благодаря внутреннему слою с инновационным материалом Aquabreeze, пеной на водной основе с молекулярной структурой открытой ячейки, которая способствует циркуляции воздуха и обеспечивает свежесть во время сна. <br><br>
							<p> Слой материала Elioform состоит из микропористой пены, сочетающей эластичность и воздухопроницаемость. Elioform обеспечивает упругую поддержку спины, при относительно мягком чехле и средней жесткости материале Aquabreeze. Несмотря на мягкость верхней части матраса, поддержка спины довольно упругая с сохранением ортопедических и анатомических свойств матраса.</p>
							<p> Carezza – матрас, который может быть мягким и приятным и при этом гарантировать высокий уровень поддержки спины, что также может быть комфортным для людей с большим весом, так как будет отсутствовать ощущение «проваливания» поясницы, что может быть на слишком мягком матрасе, например.</p>
							</div>
							<div class="coin-slider">
								<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
										<img itemprop="image" src="/img/product/slidimg/Carezza_matress_01.jpg" alt="Итальянский ортопедический матрас Carezza Magniflex" />
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
										<img itemprop="image" src="/img/product/slidimg/Carezza_matress_02.jpg" alt="Итальянский ортопедический матрас Carezza Magniflex"/>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
										<img itemprop="image" src="/img/product/slidimg/Carezza_matress_03.jpg" alt="Итальянский ортопедический матрас Carezza Magniflex"/>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
										<img itemprop="image" src="/img/product/slidimg/Carezza_matress_04.jpg" alt="Итальянский ортопедический матрас Carezza Magniflex"/>
										</a>
							</div>
				</div>
			</div>
          
            
          </div>    
            <div class="ama_comfort_parts">
                        <ul>
                            <li>
                                <p>Viscose</p>
                                <br>
                                <a href="/production/Viscose/" target="_blank"><img title="Viscose" src="/img/viscosa.png" alt="Viscose" width="180"></a>
                            </li>
                            <li>
                                <p>Elioform</p>
                                <br>
                                <a href="/production/Eliosoft/" target="_blank"><img title="Viscose" src="/img/Elioform.png" alt="Elioform" width="180"></a>
                            </li>
                            <li>
                                <p>Memosoft</p>
                                <br>
                                <a href="/production/Memoform-Magnifoam/" target="_blank"><img title="Viscose" src="/img/Memosoft.png" alt="Memosoft" width="180"></a>
                            </li>
                            <li>
                                <p>Super Soft Fiber</p>
                                <br>
                                <a  target="_blank"><img title="Viscose" src="/img/Super_Soft_Fiber.png" alt="Super Soft Fiber" width="180"></a>
                            </li>
                            <li>
                                <p>Aquabreeze</p>
                                <br>
                                <a  target="_blank"><img title="Viscose" src="/img/aquabreeze.png" alt="Aquabreeze" width="180"></a>
                            </li>
                        </ul>
                    </div>
        
      
       
      ',
      'cycle-title' => 'Ортопедические матрасы Magniflex Carezza',
      'cycle-name' => 'Ортопедический матрас Carezza',
      'sizes' => array(
        array('80x190',62400.00),
        array('80x200',64800.00),
        array('90x190',70200.00),
        array('90x200',74000.00),
        array('120x200',98600.00),
        array('140x200',114800.00),
        array('160x200',131200.00),
        array('180x200',147800.00),
        array('200x200',164000.00),
      ),
	  'discount_koef' => array('date_start' => '01.02.2019', 'date_end' => '30.09.2019', 'price_koef' => 0.20),

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
		'address' => 'Rest-9',
        'parent_address' => 'elitnye-rest',
		'parent_address2' => 'mattresses',
        'address_collection' => 'rest/',
		'other_categories' => array('orthopedic_mattresses', 'new-mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-22-25','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас Rest 9',
		'title' => 'Rest 9 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрасы серии Rest 9. 10 лет международной гарантии при покупке.',
		'keywords' => 'rest, 9',
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring breathability.',
		'attr_padding_product' => 'The padding in Eliosoft and hypoallergenic fiber provides extra comfort and added support to the back throughout the night.',
		'attr_comfort_product' => 'The layer in Elioform (20 cm), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Stiloso-9.jpg',
		'block_attr_collections' => 'Rest',
		'block_attr_materials' => 'Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Breathable',
		'block_attr_comfort_level' => 'Firm',
		'block_attr_height' => '22 cm',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'block_attr_extra' => '',
		'span_title' => 'Премиальная коллекция',
		'attr_cat_product1' => '23 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий',
		'small_img' => '/img/product/very_small/Rest 9.jpg',
		'img_preview' => array('/img/Rest-detail-1.jpg', '/img/Rest-detail-2.jpg', '/img/Rest-detail-4.jpg', '/img/Rest-detail-5.jpg'),
		'small_img_alt' => '',
		'img' => '/img/product/big/Rest 9.jpg',
		'img_alt' => '',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 23 см</li><li>Степень жесткости: жесткий<!--достаточно жесткий--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 15 лет.</li></ul><br>
		',
		'advantages' => '',
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
		'rec_buy' => '
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">
<!--			<span class="hnb_bigtytles">Акция! Скидка 25%! Всего 3 недели: с 9 по 30 июня!</span>
     		<span style="font-size:12px;">СКИДКА 25% распространяется только на размеры: 90х200, 160х200, 180х200</span>
			<br><br>
			<table class="hnb_table_scidka_tovcart">
				<tbody><tr style="font-size:12px;border-bottom: 1px solid #dedede;font-weight: bold;">
					<td style="background:#eee;">
						Размер
					</td>
					<td style="background:#eee;">
						Старая цена
					</td>
					<td style="background:#eee;">
						Новая цена
					</td>
					<td>
					</td>
				</tr>
				<tr>
					<td>
						160x200
					</td>
					<td style="text-decoration: line-through;">
						58 800 руб
					</td>
					<td>
						44 100 руб
					</td>

					<td>
						<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'160x200\', 1)" alt="Купить матрас Rest MAGNIFLEX 90х200">Купить</a>
					</td>
				</tr>
				<tr>
					<td>
						180x200
					</td>
					<td style="text-decoration: line-through;">
						66 200 руб
					</td>
					<td>
						49 650 руб
					</td>
					<td>
						<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'180x200\', 1)" alt="Купить матрас Rest MAGNIFLEX 160х200">Купить</a>
					</td>
				</tr>
			</tbody></table>
-->
</div></div>
',
'desc' => '


			<div class="common_block_common">
					<div class="half-width">
									<h3>
									Классический итальянский элитный матрас
								</h3>
								<br />
								<p >
									Настоящая классика всегда в моде. Очень удачная коллекция, сочетающая отличные ортопедические свойства и комфорт. <br />
						Для создания используются исключительно высококачественные ткани и материалы:     <br />
						Memoform (комфорт, мягкость + эффект памяти),    <br />
						Elioform (превосходные ортопедические свойства), <br />
						Eliosoft (в основе - натуральный латекс).
						<br /><br />
						Матрасы двухсторонние - можно использовать разные стороны, в зависимости от предпочтений спящих на нем людей.
								</p>
					</div>
					<div class="coin-slider">
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_1.jpg" alt="Ортопедический матрас Magniflex Rest" />
								<span>
								Обеспечивают великолепную поддержку позвоночника.
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/product/other/rest2.jpg" alt="Элегантный матрас Magniflex Rest"/>
								<span>
								В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элементов - флорентийская лилия.
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_2.jpg" alt="Элегантный матрас Magniflex Rest"/>
								<span>
								В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элементов - флорентийская лилия.
								</span>
					</a>

					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_3.jpg" alt="Magniflex Rest - ткань вискоза"/>
								<span>
								Чехол матраса - несъемный, изготовлен из ткани Viscosa.
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_4.jpg" alt="Magniflex Rest - дышащий матрас"/>
								<span>
								За удобство спящих отвечает уникальный материал дышащий, мягкий материал - Memoform, обладающий "функцией памяти".
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_5.jpg" alt="Magniflex Rest - комфортные матрасы" />
								<span>
								Матрасы серии Rest очень удобные и комфортные.
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_6.jpg" alt="выставка матрасов в Милане"/>
								<span>
								На выставке в Милане в начале 2014 года, коллекция Rest - вызвала неподдельный интерес у большинства участников. Модель
была удостоена одной из главных наград выставки.
								</span>
					</a>
</div>
					
					</div>
			</div>
				
			
		<div class="common_block_common">
				<div class="coin-slider">
					<img itemprop="image" src="/img/product/newmanuimg-rest9-1.png" >
				</div>

				<div class="half-width">
					<h3>Элитный матрас Magniflex Rest 9 - ортопедический беспружинный. Две стороны для эксплуатации.</h3>
					<span class="hnb_eytextoutlast">
					<strong><i>Классический итальянский ортопедический матрас премиум класса</i></strong>
					</br>
					</br>
			Как говорят сами итальянцы об этом матрасе: <b>"i grandi classici non passano mai di moda"</b> ("Настоящая
			классика всегда в моде"). Представленная модель из коллекции "Classico" - отличается особой
			сдержанностью, строгостью, пропорциональностью и достаточно современной элегантностью. Никаких
			остромодных или нефункциональных деталей. Рисунок флорентийской лилии по периметру матраса -
			настоящий тренд в дизайне интерьеров.
			<br />
			</br>
				Матрас коллекции "Classico" включает в себя Memoform - материал, который идеально адаптируется к
			изгибам тела, Elioform, который в свою очередь обеспечивает и гарантирует правильную поддержку
			спины. Слой Super Soft Fiber позволяет чувствовать расслабление и мягкость на матрасе, а вискозная
			ткань чехла осуществляет максимум воздухообмена за счет своей структуры.</br>
					</span>

			
			<b>Коллекция Classico состоит из 3 разных моделей:<span style="text-decoration: underline;"> Rest 9 -
			высота 23 см, Rest 10 - высота 25 см, Rest 12</span> - высота 30
			см.</b> Есть небольшое отличие в этих моделях по
			жесткости. <b>Чем выше матрас этой коллекции, тем он
			более мягкий</b> и более комфортный. В первую очередь за
			счет большего количества материала Memoform.
			</br>
			</br>
			Матрас <b>можно использовать с двух сторон</b>. Получается
			полноценный двусторонний матрас. <b>С одной стороны он
			будет жестче</b>, так как сверху матраса идет слой
			Мемоформ и супер фибра, а снизу матрас не содержитэтих слоев, за счет чего получается более упругим. Эксплуатация матраса на другой стороне
			технологически предусмотрена и вполне возможна.
			</br>
			</br>
			<b>Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы</b> выдерживают <b>до 180
			кг</b> на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.
		</div>
				
	</div>
	
		',
		
		'cycle-title' => 'Ортопедические матрасы Magniflex Rest 9',
		'cycle-name' => 'Ортопедический матрас Rest 9',
		'sizes' => array(
			array('80x190',37800.00),
			array('80x200',40000.00),
			array('90x190',42400.00),
			array('90x200',44800.00),
			array('120x190',56700.00),
			array('120x200',59600.00),
			array('140x190',66100.00),
			array('140x200',69400.00),
			array('160x190',75500.00),
			array('160x200',79400.00),
			array('180x200',89200.00),
			array('180x200 (не в рулоне, новый)',89200.00),
			array('200x200',99200.00),
		),

		// 'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
		'discount_koef' => array(	//'date_start' => '1.9.2015', 'date_end' => '1.9.2025', - без даты начала и конца акции - она навсегда
			'sizes' => array('180x200 (не в рулоне, новый)'),
			'prices' => array(
				'180x200 (не в рулоне, новый)' => 62500.00,
			),
		), //ііііі
		'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: достаточно жесткий. Высота: 23 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200','180x200'),

	),
	array(
		'address' => 'Rest-10',
		'parent_address' => 'elitnye-rest',
		'parent_address2' => 'mattresses',
        'address_collection' => 'rest/',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-22-25','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Rest 10',
		'title' => 'Rest 10 - купить ортопедический матрас в интернет-магазине Magniflex',
		'description' => 'У нас Вы найдете матрасы Rest 10. Срок службы на матрасы из данной коллекции составляет не менее 15 лет.',
		'keywords' => 'rest, 10',
		'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Cредняя',
		'small_img' => '/img/product/very_small/Rest 10.jpg',
		'img_preview' => array('/img/Rest-detail-1.jpg', '/img/Rest-detail-2.jpg', '/img/Rest-detail-4.jpg', '/img/Rest-detail-5.jpg'),
		'small_img_alt' => 'элитный матрас Magniflex Rest 10',
		'img' => '/img/product/big/Rest 10.jpg',
		'img_alt' => 'элитный матрас Magniflex Rest 10',
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring breathability.',
		'attr_padding_product' => 'The padding in Eliosoft and hypoallergenic fiber provides extra comfort and added support to the back throughout the night.',
		'attr_comfort_product' => 'The layer in Elioform (23 cm), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Stiloso-10.jpg',
		'block_attr_collections' => 'Rest',
		'block_attr_materials' => 'Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Breathable',
		'block_attr_comfort_level' => 'Firm',
		'block_attr_height' => '25 cm',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '10 years',
		'block_attr_extra' => '',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 25 см</li><li>Степень жесткости: средней жесткости<!--средней жесткий, комфортный--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 15 лет.</li></ul><br>
		',
		'advantages' => '',
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
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			<div class="common_block_common">
					<div class="half-width">
									<h3>
									Классический итальянский элитный матрас
								</h3>
								<br />
								<p >
									Настоящая классика всегда в моде. Очень удачная коллекция, сочетающая отличные ортопедические свойства и комфорт. <br />
						Для создания используются исключительно высококачественные ткани и материалы:     <br />
						Memoform (комфорт, мягкость + эффект памяти),    <br />
						Elioform (превосходные ортопедические свойства), <br />
						Eliosoft (в основе - натуральный латекс).
						<br /><br />
						Матрасы двухсторонние - можно использовать разные стороны, в зависимости от предпочтений спящих на нем людей.
								</p>
					</div>
					<div class="coin-slider">
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_1.jpg" alt="Ортопедический матрас Magniflex Rest" />
								<span>
								Обеспечивают великолепную поддержку позвоночника.
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/product/other/rest2.jpg" alt="Элегантный матрас Magniflex Rest"/>
								<span>
								В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элементов - флорентийская лилия.
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_2.jpg" alt="Элегантный матрас Magniflex Rest"/>
								<span>
								В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элементов - флорентийская лилия.
								</span>
					</a>

					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_3.jpg" alt="Magniflex Rest - ткань вискоза"/>
								<span>
								Чехол матраса - несъемный, изготовлен из ткани Viscosa.
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_4.jpg" alt="Magniflex Rest - дышащий матрас"/>
								<span>
								За удобство спящих отвечает уникальный материал дышащий, мягкий материал - Memoform, обладающий "функцией памяти".
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_5.jpg" alt="Magniflex Rest - комфортные матрасы" />
								<span>
								Матрасы серии Rest очень удобные и комфортные.
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_6.jpg" alt="выставка матрасов в Милане"/>
								<span>
								На выставке в Милане в начале 2014 года, коллекция Rest - вызвала неподдельный интерес у большинства участников. Модель
была удостоена одной из главных наград выставки.
								</span>
					</a>
</div>
					
					</div>
			</div>
				
			
		<div class="common_block_common">
				<div class="coin-slider">
					<img itemprop="image" src="/img/product/newmanuimg-rest9-1.png" >
				</div>

				<div class="half-width">
				<h3>Элитный матрас Magniflex Rest 9 - ортопедический беспружинный. Две стороны для эксплуатации.</h3>
				<span class="hnb_eytextoutlast">
				<strong><i>Классический итальянский ортопедический матрас премиум класса</i></strong>
				</br>
				</br>
		Как говорят сами итальянцы об этом матрасе: <b>"i grandi classici non passano mai di moda"</b> ("Настоящая
		классика всегда в моде"). Представленная модель из коллекции "Classico" - отличается особой
		сдержанностью, строгостью, пропорциональностью и достаточно современной элегантностью. Никаких
		остромодных или нефункциональных деталей. Рисунок флорентийской лилии по периметру матраса -
		настоящий тренд в дизайне интерьеров.
		<br />
		</br>
			Матрас коллекции "Classico" включает в себя Memoform - материал, который идеально адаптируется к
		изгибам тела, Elioform, который в свою очередь обеспечивает и гарантирует правильную поддержку
		спины. Слой Super Soft Fiber позволяет чувствовать расслабление и мягкость на матрасе, а вискозная
		ткань чехла осуществляет максимум воздухообмена за счет своей структуры.</br>
				</span>

		
		<b>Коллекция Classico состоит из 3 разных моделей:<span style="text-decoration: underline;"> Rest 9 -
		высота 23 см, Rest 10 - высота 25 см, Rest 12</span> - высота 30
		см.</b> Есть небольшое отличие в этих моделях по
		жесткости. <b>Чем выше матрас этой коллекции, тем он
		более мягкий</b> и более комфортный. В первую очередь за
		счет большего количества материала Memoform.
		</br>
		</br>
		Матрас <b>можно использовать с двух сторон</b>. Получается
		полноценный двусторонний матрас. <b>С одной стороны он
		будет жестче</b>, так как сверху матраса идет слой
		Мемоформ и супер фибра, а снизу матрас не содержитэтих слоев, за счет чего получается более упругим. Эксплуатация матраса на другой стороне
		технологически предусмотрена и вполне возможна.
		</br>
		</br>
		<b>Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы</b> выдерживают <b>до 180
		кг</b> на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.
				</div>
				
		</div>
		</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Rest 10',
		'cycle-name' => 'Ортопедический матрас Rest 10',
		'sizes' => array(
			array('80x190',41900.00),
			array('80x200',43900.00),
			array('90x190',46900.00),
			array('90x200',49300.00),
			array('120x190',62400.00),
			array('120x200',65900.00),
			array('140x190',72900.00),
			array('140x200',76600.00),
			// array('140x200 (не в рулоне, новый)',76600.00),
			array('160x190',83300.00),
			array('160x200',87600.00),
			array('180x200',98700.00),
			array('200x200',109600.00),
		),
		// 'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
		'discount_koef' => array(	//'date_start' => '1.9.2015', 'date_end' => '1.9.2025', - без даты начала и конца акции - она навсегда
			'sizes' => array('140x200 (не в рулоне, новый)', '180x200', '200x200'),
			'prices' => array(
				'140x200 (не в рулоне, новый)' => 53700.00,
				// '180x200' => 85600.00,
                // '200x200' => 95100.00,
			),
		), //скидка
		'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: средней жесткости. Высота: 25 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200'),
	),
	array(
		'address' => 'Rest-12',
		'parent_address' => 'elitnye-rest',
		'parent_address2' => 'mattresses',
        'address_collection' => 'rest/',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','myahkie-mattresses', 'height-26','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Rest 12',
		'title' => 'Rest 12 - ортопедический матрас высокого качества в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить матрасы серии Rest 12. Данная модель отличается повышенным комфортом и прекрасными ортопедическими свойствами.',
		'keywords' => 'rest, 12',
		'span_title' => 'Премиальная коллекция',		
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Cредней мягкости.',
		'small_img' => '/img/product/very_small/Rest 12.jpg',
		'img_preview' => array('/img/Rest-detail-1.jpg', '/img/Rest-detail-2.jpg', '/img/Rest-detail-4.jpg', '/img/Rest-detail-5.jpg'),
		'small_img_alt' => 'элитный матрас Magniflex Rest 12',
		'img' => '/img/product/big/Rest 12.jpg',
		'img_alt' => 'элитный матрас Magniflex Rest 12',
		'attr_cover_product' => 'The viscose cover, soft and breathable, makes the mattress soft and silky to the touch and is more effective at dissipating sweat, favoring breathability.',
		'attr_padding_product' => 'The padding in Eliosoft and hypoallergenic fiber provides extra comfort and added support to the back throughout the night.',
		'attr_comfort_product' => 'The layer in Elioform (27 cm), thanks to its microcellular, high-density foam structure, provides a firm and orthopedic support to the spine.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Stiloso-12.jpg',
		'block_attr_collections' => 'Rest',
		'block_attr_materials' => 'Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Breathable',
		'block_attr_comfort_level' => 'Firm',
		'block_attr_height' => '30 cm',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 30 (!!!) см</li><li>Степень жесткости: средней мягкости<!--средней мягкости, очень комфортный!--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 15 лет. 10 лет международной гарантии.</li></ul><br>
		',
		'advantages' => '',
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
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			
				
						
						
				
				<div class="hnb_elcont3">
				<div class="block_line2">
				<div class="half-width">
					<h3>
						Классический итальянский элитный матрас
					</h3>

					<p>
						Настоящая классика всегда в моде. Очень удачная коллекция, сочетающая отличные ортопедические свойства и комфорт.
			Для создания используются исключительно высококачественные ткани и материалы:
			 Memoform (комфорт, мягкость + эффект памяти),    <br />
			 Elioform (превосходные ортопедические свойства), <br />
			 Eliosoft (в основе - натуральный латекс).
			<br />
			Матрасы двухсторонние - можно использовать разные стороны, в зависимости от предпочтений спящих на нем людей. Сторона c Memoform мягче.
					</p>
					</div>
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_1.jpg" alt="Ортопедический матрас Magniflex Rest" />
								<span>
								Обеспечивают великолепную поддержку позвоночника. Высокие ортопедические свойства обеспечивает слой Elioform (18 см). В модели Rest 12 для усиления ортопедических свойств и повышения комфортности, используется более дорогой материал -
инновационный Eliosoft (18 см).
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/product/other/rest2.jpg" alt="Элегантный матрас Magniflex Rest"/>
								<span>
								В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элементов - флорентийская лилия.
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_2.jpg" alt="Элегантный матрас Magniflex Rest"/>
								<span>
								В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элементов - флорентийская лилия.
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_3.jpg" alt="Magniflex Rest - ткань вискоза"/>
								<span>
								Чехол матраса - несъемный, изготовлен из ткани Viscosa.
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_4.jpg" alt="Magniflex Rest - дышащий матрас"/>
								<span>
								За удобство спящих отвечает уникальный материал - Memoform, обладающий "функцией памяти".
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_5.jpg" alt="Magniflex Rest - комфортные матрасы" />
								<span>
								Матрасы серии Rest очень удобные и комфортные.
								</span>
					</a>
					<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<img itemprop="image" src="/img/rest_magniflex_6.jpg" alt="выставка матрасов в Милане"/>
								<span>
								На выставке в Милане в начале 2014 года, коллекция Rest - вызвала неподдельный интерес у большинства участников. Модель
была удостоена одной из главных наград выставки.
								</span>
					</a>
					</div>
				</div>
					</div>
				</div>
			
			<div class="block_line2">
			<div class="half-width">
			<h3>Элитный матрас Magniflex Rest 12 - ортопедический
беспружинный. Две стороны для эксплуатации.</h3>
					<span class="hnb_eytextoutlast">
                    <strong><i>Классический итальянский ортопедический матрас премиум класса</i></strong>
            <p>
			Как говорят сами итальянцы об этом матрасе: <b>"i grandi classici non passano mai di moda"</b> ("Настоящая
            классика всегда в моде"). Представленная модель из коллекции "Classico" - отличается особой
            сдержанностью, строгостью, пропорциональностью и достаточно современной элегантностью. Никаких
            остромодных или нефункциональных деталей. Рисунок флорентийской лилии по периметру матраса -
            настоящий тренд в дизайне интерьеров.</p>
			<p>  Матрас коллекции "Classico" включает в себя Memoform - материал, который идеально адаптируется к
            изгибам тела, Elioform, который в свою очередь обеспечивает и гарантирует правильную поддержку
            спины. Слой Super Soft Fiber позволяет чувствовать расслабление и мягкость на матрасе, а вискозная
			ткань чехла осуществляет максимум воздухообмена за счет своей структуры.</p>
				</div>
				<div class="half-width_img"> <img itemprop="image" src="/img/product/newmanuimg-rest9-sos.png"></div>
				</div>
			<div class="block_line2">
			<div class="half-width_img">
				<img itemprop="image" src="/img/product/newmanuimg-rest9-1.png" >
				</div>
				<div class="half-width">
					<p>
					<b>Коллекция Classico состоит из 3 разных моделей: <span style="text-decoration: underline;">Rest 9 -
					высота 23 см, Rest 10 - высота 25 см, Rest 12</span> - высота 30
					см.</b> Есть небольшое отличие в этих моделях по
					жесткости. <b>Чем выше матрас этой коллекции, тем он
					более мягкий</b> и более комфортный. В первую очередь за
					счет большего количества материала Memoform.</p>
					<p>
					Матрас <b>можно использовать с двух сторон</b>. Получается
					полноценный двусторонний матрас. <b>С одной стороны он
					будет жестче</b>, так как сверху матраса идет слой
					Мемоформ и супер фибра, а снизу матрас не содержитэтих слоев, за счет чего получается более упругим. Эксплуатация матраса на другой стороне
					технологически предусмотрена и вполне возможна.</p>
					<p>
					<b>Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы</b> выдерживают <b>до 180
					кг</b> на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.</p>
				</div>
				</div>
			</div>
			</span>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Rest 12',
		'cycle-name' => 'Ортопедический матрас Rest 12',
		'sizes' => array(
			// array('80x190',49300.00),
			array('80x200',51800.00),
			// array('90x190',55400.00),
			// array('90x200',58100.00),
			array('90x200 (не в рулоне, новый)',58100.00),
			// array('120x190',73700.00),
			// array('120x200',77600.00),
			// array('140x190',86100.00),
			// array('140x200',90500.00),
			// array('160x190',98300.00),
			//  array('160x200',103300.00),
			// array('180x200',116200.00),
			array('200x200',129400.00)
		),
		'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
			'sizes' => array('80x200','90x200 (не в рулоне, новый)','90x200','160x200','200x200'),
			'prices' => array(
                '80x200' => 44030.00,
                '90x200 (не в рулоне, новый)' => 40700.00,
                // '90x200' => 49385.00,
                //  '160x200' => 87805.00,
                '200x200' => 109990.00,
			),
		), 
		'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: мягкий. Идеальная поддержка Вашего позвоночника!. Высота: 30 см. Срок службы: не менее 15 лет.',
	),
	array(
		'address' => 'Comfort-Plus-10',
		'parent_address' => 'elitnye-comfort-delux',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses', 'height-22-25','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас Comfort Plus 10',
		'title' => 'Comfort Plus 10 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрасы серии Comfort Plus 10. Большой ассортимент итальянских матрасов в нашем каталоге.',
		'keywords' => 'comfort, plus, 10',
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
			<li><a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a></li>
			<li><a href="/production/made-in-Italy/" target="_blank"><strong>ПРОИЗВОДСТВО</strong> ИТАЛИЯ</a></li>
			<li><strong>Высота:</strong> 25 см</li>
			<li><strong>Степень жесткости:</strong> средней жесткости/средней мягкости, регулируемая dual core</li>
			<li><strong>Стоимость доставки:</strong> бесплатно, срок доставки: завтра для Москвы</li>
			<li><strong>Условия:</strong> <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li><strong>Срок службы:</strong> не менее 12 лет</li></ul><br>
		',
		'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Съемный outlast/Viscose.',
		'attr_cat_product3' => 'Cредней жесткости/Cредней мягкости',
		'small_img' => '/img/product/very_small/comfort-plus-10.jpg',
		'small_img_alt' => '',
		'video' => array('https://www.youtube.com/embed/Yeqh6g2yHs8?language=russian'),
		'img' => '/img/product/new-comfort-plus-10.jpg',
		'img_preview' => array('/img/product/big/comfort-plus-10-2-new.jpg', '/img/product/big/comfort-plus-10-3-new.jpg', '/img/product/big/comfort-plus-10-4-new.jpg', '/img/product/big/comfort-plus-10-5-new.jpg'),
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
		'advantages' => '',
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
					<h3>Разные половинки – разная жесткость (Dual Core)</h3>
					<p class="half-width">
						Технология Dual Core позволяет изменить жесткость половинки матраса за считанные минуты. Суть технологии проста: двуспальные матрасы состоят из двух блоков. Для смены жесткости необходимо расстегнуть  чехол (на молнии) и перевернуть на другую сторону блок. Все просто: одно сторона блока жесткая, а другая – мягкая.
						<br><br>
						Несмотря на то, что матрас состоит из двух разных блоков, стык между ними абсолютно незаметен и не мешает сну благодаря специально разработанному плотному чехлу, включающего в себя 2 см слой инновационного материала с эффектом памяти – Memoform.
                    </p>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Yeqh6g2yHs8" frameborder="0" autoplay allowfullscreen=""></iframe>
					<br><br><br>
					<h3>Дарят необыкновенный комфорт!</h3>
					<p>
						Матрасы Premium класса, одни из самых лучших в своем классе! Возможность моделирования оптимального уровня комфорта из нескольких возможных!
					  Отличные анатомический и ортопедический эффекты, потрясающие терморегулирующие свойства.
					</p>
					
				</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Comfort Plus 10' ,
		'cycle-name' => 'Ортопедический матрас Comfort Plus 10',
		'sizes' => array(
			array('80x190',53800.00),
			array('80x200',56700.00),
			array('90x190',60600.00),
			array('90x200',63600.00),
			array('90x200 (не в рулоне, новый)',63600.00),
			array('120x200',84700.00),
			array('140x200',98800.00),
			array('160x200',111100.00),
			// array('160x200 (не в рулоне, новый)',111100.00),
			array('180x200',127000.00),
			array('200x200',141100.00),
		),
		'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
			'sizes' => array('90x200 (не в рулоне, новый)', '160x200 (не в рулоне, новый)'),
			'prices' => array(
                '90x200 (не в рулоне, новый)' => 44600.00,
                '160x200 (не в рулоне, новый)' => 77800.00,
			),
		), //скидка
		'yml_desc' => 'Матрасы Premium класса! Моделируемый уровень комфорта - технология  Dual Core. Съемный терморегулирующий чехол с запатентованной технологией Outlast. Эффект памяти.  Высота: 25 см. Срок службы: не менее 15 лет.',
	),
	array(
		'address' => 'Comfort-Plus-12',
		'parent_address' => 'elitnye-comfort-delux',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses','myahkie-mattresses', 'height-26','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас Comfort Plus 12',
		'title' => 'Comfort Plus 12 - купить ортопедический матрас в интернет-магазине Magniflex',
		'description' => 'Матрас Comfort Plus 12. Матрасы данной серии состоят из двух разных блоков и обладают эффектом памяти.',
		'keywords' => 'comfort, plus, 12',
		'span_title' => 'Премиальная коллекция',
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Съемный',
		'attr_cat_product3' => 'Cредней мягкости/Мягкий',
		'small_img' => '/img/product/very_small/comfort-plus-12.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Comfort Plus 12',
		'img' => '/img/product/new-comfort-plus-12.jpg',
		'img_preview' => array('/img/product/big/comfort-plus-10-2-new.jpg', '/img/product/big/comfort-plus-10-3-new.jpg', '/img/product/big/comfort-plus-10-4-new.jpg', '/img/product/big/comfort-plus-10-5-new.jpg'),
		'img_alt' => 'элитный матрас Magniflex Comfort Plus 12',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 30 см</li><li>Степень жесткости: средней мягкости/мягкий, регулируемая dual core</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 12 лет</li></ul><br>
		',
		'advantages' => '',
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
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			<div class="hnb_contmy">
			<div class="hnb_contcenter">
				<h3>Разные половинки – разная жесткость (Dual Core)</h3>
				<p class="half-width">
					Технология Dual Core позволяет изменить жесткость половинки матраса за считанные минуты. Суть технологии проста: двуспальные матрасы состоят из двух блоков. Для смены жесткости необходимо расстегнуть  чехол (на молнии) и перевернуть на другую сторону блок. Все просто: одно сторона блока жесткая, а другая – мягкая.
					<br><br>
					Несмотря на то, что матрас состоит из двух разных блоков, стык между ними абсолютно незаметен и не мешает сну благодаря специально разработанному плотному чехлу, включающего в себя 2 см слой инновационного материала с эффектом памяти – Memoform.
				</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Yeqh6g2yHs8" frameborder="0" autoplay allowfullscreen=""></iframe>
				<br><br><br>
				<h3>Дарят необыкновенный комфорт!</h3>
				<p>
					Матрасы Premium класса, одни из самых лучших в своем классе! Возможность моделирования оптимального уровня комфорта из нескольких возможных!
				  Отличные анатомический и ортопедический эффекты, потрясающие терморегулирующие свойства.
				</p>
				
			</div>
		</div>
                    <div class="ama_comfort_parts">
                        <ul>
                            <li>
                                <p>Outlast®</p>
                                <br>
                                <a href="/production/outlast/" target="_blank"><img title="Outlast" src="/img/outlast.png" alt="Outlast" width="180"></a>
                            </li>
                            <li>
                                <p>Viscose</p>
                                <br>
                                <a href="/production/Viscose/" target="_blank"><img title="Viscose" src="/img/viscosa.png" alt="Viscose" width="180"></a>
                            </li>
                            <li>
                                <p>Memoform</p>
                                <br>
                                <a href="/production/Memoform-Magnifoam/" target="_blank"><img title="Memoform" src="/img/magnifoam.png" alt="Memoform" width="180"></a>
                            </li>
                            <li>
                                <p>Magnifoam Eliosoft</p>
                                <br>
                                <a href="/production/Memoform-Magnifoam/" target="_blank"><img title="Magnifoam Eliosoft" src="/img/eliosoft.png" alt="Magnifoam Eliosoft" width="180"></a>
                            </li>
                            <li>
                                <p>Dual core layer</p>
                                <br>
                                <a><img title="Dual core layer" src="/img/dual-core_.png" alt="Dual core layer" width="180"></a>
                            </li>
                            <li>
                                <p>Removable/Washable</p>
                                <br>
                                <a><img title="Removable/Washable" src="/img/lavabile-sfoderabile.png" alt="Removable/Washable" width="180"></a>
                            </li>
                        </ul>
                    </div>
			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Comfort Plus 12' ,
		'cycle-name' => 'Ортопедический матрас Comfort Plus 12',
		'sizes' => array(
			array('80x190',62100.00),
			array('80x200',65500.00),
			array('90x190',69900.00),
			array('90x200',73700.00),
			array('120x200',98100.00),
			array('140x200',114300.00),
			array('160x200',130600.00),
			array('180x200',146800.00),
			array('180x200 (не в рулоне, новый)',146800.00),
			array('200x200',163200.00),
		),

		'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2018',
			'sizes' => array('180x200 (не в рулоне, новый)'),
			'prices' => array(
				'180x200 (не в рулоне, новый)' => 117440.00
			),
		), //скидка
		'discount_koef' => array('date_start' => '30.04.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
    ),
	array(
		'address' => 'freshgel-9',
		'parent_address' => 'elitnye-freshgel',
		'parent_address2' => 'mattresses',
        'address_collection' => 'freshgel',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-22-25', 'action','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные FreshGel',
		'name' => 'Ортопедический матрас FreshGel 9',
		'title' => 'Итальянский элитный матрас FreshGel 9',
		'description' => 'Описание, фотографии, состав матраса FreshGel 9, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex freshgel, элитный матрас',
		'span_title' => 'Премиальная коллекция. Сны на облаке',		
		'attr_cat_product1' => '23 см',
		'attr_cat_product2' => 'Съемный Viscose.',
		'attr_cat_product3' => 'Cредней мягкости.',
		'small_img' => '/img/product/very_small/FreshGel 9.jpg',
		'img_preview' => array('/img/Freshgel-deluxe-dual-12-6.jpg', '/img/Freshgel-deluxe-dual-12-7.jpg', '/img/Freshgel-dual-10-7.jpg'),
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 23 см</li><li>Степень жесткости: <div class="rigidity rigidity_3" title="средней жесткости"></div><!--Средней жесткости--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 15 лет</li></ul><br>
		',
		'advantages' => '',
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
			<span class="hnb_bigtytles">Преимущества матрасов коллекции FreshGel</span>

			<div id="hnb_3nelement">

				<div class="hnb_3nelementli" style="margin-top: -4px;margin-left: 0px;opacity: 1;">
					<img itemprop="image" src="/img/dih.png">
					
					<span>Дышащий</span>
					Необыкновенно проницаемый,
							дышащий материал. Мгновенно
							впитывает влагу и капельки,
							быстро испаряя их!
				</div>

				<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
					<img itemprop="image" src="/img/snig.png">
					
					<span>Комфортный</span>
					Не нагревается от соприкосновения
							с телом: спать на нем прохладно
							даже жарким летом.
							Зимой не “отбирает” тепло!
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
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			<!--<img itemprop="image" src="/img/srvimg/cookie-image.png" />
			<h1>Акция! СКИДКА 20% В ИЮЛЕ</h1>
     		СКИДКА 20% распространяется только на размеры: 90х200, 160х200, 180х200<br /> <br />
			<table class="hnb_table_scidka_tovcart">
				<tr style="font-size:12px;border-bottom: 1px solid #dedede;font-weight: bold;">
					<td style="background:#eee;">
						Размер
					</td>
					<td style="background:#eee;">
						Старая цена
					</td>
					<td style="background:#eee;">
						Новая цена
					</td>

					<td>

					</td>
				</tr>
				<tr>
					<td>
						160x200
					</td>
					<td style="text-decoration: line-through;">
						78 700 руб
					</td>
					<td>
						62 950 руб
					</td>
					<td>
						<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'160x200\', 1)" alt="Купить матрас MERINO MAGNIFLEX 160х200">Купить</a>
					</td>
				</tr>
				<tr>
					<td>
						180x200
					</td>
					<td style="text-decoration: line-through;">
						88 600 руб
					</td>
					<td>
						70 850 руб
					</td>

					<td>
						<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'180x200\', 1)" alt="Купить матрас MERINO MAGNIFLEX 180х200">Купить</a>
					</td>
				</tr>
			</table>
			<br /> <br /><br />
            БЕСПЛАТНАЯ ДОСТАВКА ПО МОСКВЕ!<br />
            ПОДЪЕМ НА ЭТАЖ БЕСПЛАТНО!<br /><br />
			<br />
			<br />
			<hr />
				-->
			<p>
			<!--<span class="hnb_bigtytles">Преимущества матрасов коллекции Virtus</span>-->
			
			<div style="clear:both;"></div>

			<div class="common_block_common">
				<div class="half-width">
					<h3>
				Настоящее воплощение комфорта и удовольствия во сне!
						</h3>
						<br />
						<span class="hnb_eytext">
				Это Матрасы сочетающие в себе современные тенденции и элегантность.
							При первом взгляде бросается их легкий, воздушный образ.
							Стиль подчеркивается во всех деталях - начиная с эстетики совершенных форм
							и заканчивая явной ориентацией на комфорт спящего человека.
						</span>
				</div>
				<div class="coin-slider">
				<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/m1.jpg" alt="" />
														<span>
														Magniflex FreshGel - просторные удобные а главное, максимально комфортные матрасы
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/other/freshgel2.jpg" />
														<span>
														Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/matras_magniflex-freshgel-1.jpg" />
														<span>
														Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/matras_magniflex-freshgel-2.jpg" />
														<span>
														Великолепие натуральной ткани подчеркивает двойная строчка. Направление и размер стежков, цвет и качество нити, подбираются исключительно тщательно
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/fresh-gel-4.jpg" alt="" />
														<span>
														Дизайнерский чехол
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/matras_magniflex-freshgel-3.jpg" />
														<span>
														Все материалы, используемые при создании матраса, проходят независимую экспертную проверку на аллергены
														</span>
											</a>

					</div>
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
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex FreshGel 9' ,
		'cycle-name' => 'Ортопедический матрас FreshGel 9',
		'sizes' => array(
			array('90x200',58700.00),
			//array('160x200',90500.00),
			//array('180x200',101800.00),

		),

		'discount_koef' => array('date_start' => '01.03.2019', 'date_end' => '30.09.2019', 'price_koef' => 0.30, ), //скидка
		/*
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '30.06.2018',
			'sizes' => array('90x200','180x200'),
			'prices' => array(
				'90x200' => 40720,
				//'160x200' => 72400,
				'180x200' => 81440,
			),
		), //скидка*/

		'yml_desc' => 'Комфортный терморегулирующий матрас  с гелевым слоем Magnigel Foam. Не нагревается от соприкосновения с телом: спать на нем прохладно даже жарким летом. Зимой не “отбирает” тепло! Эффект памяти. Необыкновенно проницаемый, дышащий. Уровень комфорта: достаточно Жесткий Высота: 23 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200'),

	),
	array(
		'address' => 'freshgel-10',
		'parent_address' => 'elitnye-freshgel',
		'parent_address2' => 'mattresses',
        'address_collection' => 'freshgel',
		'other_categories' => array('orthopedic_mattresses', 'new-mattresses','s-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses', 'height-22-25','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные FreshGel',
		'name' => 'Ортопедический матрас FreshGel 10',
		'title' => '',
		'description' => '',
		'keywords' => '',
		'span_title' => 'Премиальная коллекция. Сны на облаке',			
		'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Съемный Viscose.',
		'attr_cat_product3' => 'Cредней жесткости/Cредней мягкости',
		'small_img' => '/img/product/very_small/FreshGel 10.jpg',
		'img_preview' => array('/img/Freshgel-deluxe-dual-12-6.jpg', '/img/Freshgel-deluxe-dual-12-7.jpg', '/img/Freshgel-dual-10-7.jpg'),
		'small_img_alt' => '',
		'img' => '/img/product/big/FreshGel 10.jpg',
		'img_alt' => '',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 25 см</li><li>Степень жесткости: Регулируемая<!--Средней мягкости / средней жесткости--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 15 лет</li></ul><br>
		',
		'advantages' => '',
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
			<span class="hnb_bigtytles">Преимущества матрасов коллекции FreshGel</span>

			<div id="hnb_3nelement">

				<div class="hnb_3nelementli" style="margin-top: -4px;margin-left: 0px;opacity: 1;">
					<img itemprop="image" src="/img/dih.png">
					
					<span>Дышащий</span>
					Необыкновенно проницаемый,
							дышащий материал. Мгновенно
							впитывает влагу и капельки,
							быстро испаряя их!
				</div>

				<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
					<img itemprop="image" src="/img/snig.png">
					
					<span>Комфортный</span>
					Не нагревается от соприкосновения
							с телом: спать на нем прохладно
							даже жарким летом.
							Зимой не “отбирает” тепло!
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
		<div class="hnb_contarea">
		<div class="hnb_elite_content2">
		<!--<img itemprop="image" src="/img/srvimg/cookie-image.png" />
		<h1>Акция! СКИДКА 20% В ИЮЛЕ</h1>
		 СКИДКА 20% распространяется только на размеры: 90х200, 160х200, 180х200<br /> <br />
		<table class="hnb_table_scidka_tovcart">
			<tr style="font-size:12px;border-bottom: 1px solid #dedede;font-weight: bold;">
				<td style="background:#eee;">
					Размер
				</td>
				<td style="background:#eee;">
					Старая цена
				</td>
				<td style="background:#eee;">
					Новая цена
				</td>

				<td>

				</td>
			</tr>
			<tr>
				<td>
					160x200
				</td>
				<td style="text-decoration: line-through;">
					78 700 руб
				</td>
				<td>
					62 950 руб
				</td>
				<td>
					<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'160x200\', 1)" alt="Купить матрас MERINO MAGNIFLEX 160х200">Купить</a>
				</td>
			</tr>
			<tr>
				<td>
					180x200
				</td>
				<td style="text-decoration: line-through;">
					88 600 руб
				</td>
				<td>
					70 850 руб
				</td>

				<td>
					<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'180x200\', 1)" alt="Купить матрас MERINO MAGNIFLEX 180х200">Купить</a>
				</td>
			</tr>
		</table>
		<br /> <br /><br />
		БЕСПЛАТНАЯ ДОСТАВКА ПО МОСКВЕ!<br />
		ПОДЪЕМ НА ЭТАЖ БЕСПЛАТНО!<br /><br />
		<br />
		<br />
		<hr />
			-->
		<p>
		<!--<span class="hnb_bigtytles">Преимущества матрасов коллекции Virtus</span>-->
		
		<div style="clear:both;"></div>

		<div class="common_block_common">
			<div class="half-width">
				<h3>
			Настоящее воплощение комфорта и удовольствия во сне!
					</h3>
					<br />
					<span class="hnb_eytext">
			Это Матрасы сочетающие в себе современные тенденции и элегантность.
						При первом взгляде бросается их легкий, воздушный образ.
						Стиль подчеркивается во всех деталях - начиная с эстетики совершенных форм
						и заканчивая явной ориентацией на комфорт спящего человека.
					</span>
			</div>
			<div class="coin-slider">
			<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
		<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/m1.jpg" alt="" />
													<span>
													Magniflex FreshGel - просторные удобные а главное, максимально комфортные матрасы
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/product/other/freshgel2.jpg" />
													<span>
													Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/matras_magniflex-freshgel-1.jpg" />
													<span>
													Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/matras_magniflex-freshgel-2.jpg" />
													<span>
													Великолепие натуральной ткани подчеркивает двойная строчка. Направление и размер стежков, цвет и качество нити, подбираются исключительно тщательно
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/fresh-gel-4.jpg" alt="" />
													<span>
													Дизайнерский чехол
													</span>
										</a>
										<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
											<img itemprop="image" src="/img/matras_magniflex-freshgel-3.jpg" />
													<span>
													Все материалы, используемые при создании матраса, проходят независимую экспертную проверку на аллергены
													</span>
										</a>

				</div>
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
		</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex FreshGel 10' ,
		'cycle-name' => 'Ортопедический матрас FreshGel 10',
		'sizes' => array(
			// array('80x190',54800.00),
			array('80x200',66500.00),
			// array('90x190',61700.00),
			array('90x200',74600.00),
			// array('120x200',86400.00),
			// array('140x200',100900.00),
			// array('160x200',115300.00),
			// array('180x200',129500.00),
			// array('200x200',144000.00),
		),
		'discount_koef' => array('date_start' => '01.03.2019', 'date_end' => '30.09.2019', 'price_koef' => 0.30, ), //скидка
    ),
    array(
		'address' => 'new-freshgel-10',
		'parent_address' => 'elitnye-freshgel',
		'parent_address2' => 'mattresses',
        'address_collection' => 'freshgel',
		'other_categories' => array('orthopedic_mattresses', 'new-mattresses','s-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses', 'height-22-25','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные FreshGel',
		'name' => 'Ортопедический матрас Dual FreshGel 10',
		'title' => '',
		'description' => '',
		'keywords' => '',
		'span_title' => 'Элитная коллекция Fresh. Сны на облаке',			
		'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Съемный Viscose.',
		'attr_cat_product3' => 'Cредней жесткости/Cредней мягкости',
		'small_img' => '/img/product/very_small/NEW-Freshgel-10-main.jpg',
		'img_preview' => array('/img/Freshgel-deluxe-dual-12-6.jpg', '/img/Freshgel-deluxe-dual-12-7.jpg', '/img/Freshgel-dual-10-7.jpg','/img/magnigel-10-03.jpg','/img/magnigel-10-04_1.jpg'),
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 25 см</li><li>Степень жесткости: Регулируемая<!--Средней мягкости / средней жесткости--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 15 лет</li></ul><br>
		',
		'advantages' => '',
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
			<span class="hnb_bigtytles">Преимущества матрасов коллекции FreshGel</span>

			<div id="hnb_3nelement">

				<div class="hnb_3nelementli" style="margin-top: -4px;margin-left: 0px;opacity: 1;">
					<img itemprop="image" src="/img/dih.png">
					
					<span>Дышащий</span>
					Необыкновенно проницаемый,
							дышащий материал. Мгновенно
							впитывает влагу и капельки,
							быстро испаряя их!
				</div>

				<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
					<img itemprop="image" src="/img/snig.png">
					
					<span>Комфортный</span>
					Не нагревается от соприкосновения
							с телом: спать на нем прохладно
							даже жарким летом.
							Зимой не “отбирает” тепло!
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
		<div class="hnb_contarea">
		<div class="hnb_elite_content2">
		<!--<img itemprop="image" src="/img/srvimg/cookie-image.png" />
		<h1>Акция! СКИДКА 20% В ИЮЛЕ</h1>
		 СКИДКА 20% распространяется только на размеры: 90х200, 160х200, 180х200<br /> <br />
		<table class="hnb_table_scidka_tovcart">
			<tr style="font-size:12px;border-bottom: 1px solid #dedede;font-weight: bold;">
				<td style="background:#eee;">
					Размер
				</td>
				<td style="background:#eee;">
					Старая цена
				</td>
				<td style="background:#eee;">
					Новая цена
				</td>

				<td>

				</td>
			</tr>
			<tr>
				<td>
					160x200
				</td>
				<td style="text-decoration: line-through;">
					78 700 руб
				</td>
				<td>
					62 950 руб
				</td>
				<td>
					<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'160x200\', 1)" alt="Купить матрас MERINO MAGNIFLEX 160х200">Купить</a>
				</td>
			</tr>
			<tr>
				<td>
					180x200
				</td>
				<td style="text-decoration: line-through;">
					88 600 руб
				</td>
				<td>
					70 850 руб
				</td>

				<td>
					<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'180x200\', 1)" alt="Купить матрас MERINO MAGNIFLEX 180х200">Купить</a>
				</td>
			</tr>
		</table>
		<br /> <br /><br />
		БЕСПЛАТНАЯ ДОСТАВКА ПО МОСКВЕ!<br />
		ПОДЪЕМ НА ЭТАЖ БЕСПЛАТНО!<br /><br />
		<br />
		<br />
		<hr />
			-->
		<p>
		<!--<span class="hnb_bigtytles">Преимущества матрасов коллекции Virtus</span>-->
		
		<div style="clear:both;"></div>

		<div class="common_block_common">
			<div class="half-width">
				<h3>
			Настоящее воплощение комфорта и удовольствия во сне!
					</h3>
					<br />
					<span class="hnb_eytext">
			Это Матрасы сочетающие в себе современные тенденции и элегантность.
						При первом взгляде бросается их легкий, воздушный образ.
						Стиль подчеркивается во всех деталях - начиная с эстетики совершенных форм
						и заканчивая явной ориентацией на комфорт спящего человека.
					</span>
			</div>
			<div class="coin-slider">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Yeqh6g2yHs8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
						<h3 >Элитный гелевый ортопедический матрас Magniflex Freshgel 10</h3>
			
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
		</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex FreshGel 10' ,
		'cycle-name' => 'Ортопедический матрас FreshGel 10',
		'sizes' => array(
			array('80x190',63100.00),
			array('80x200',66500.00),
			array('90x190',70900.00),
			array('90x200',74600.00),
			array('90x200 (не в рулоне, новый)',74600.00),
			array('120x200',99600.00),
			array('140x200',116000.00),
			array('160x200',132700.00),
			array('180x200',149000.00),
			array('200x200',165600.00),
		),
		'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
			'sizes' => array('90x200 (не в рулоне, новый)'),
			'prices' => array(
                '90x200 (не в рулоне, новый)' => 52300.00
			),
		), //скидка
		// 'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '11.03.2019', 'price_koef' => 0.1),

	),
    array(
		'address' => 'new-freshgel-12',
		'parent_address' => 'elitnye-freshgel',
		'parent_address2' => 'mattresses',
        'address_collection' => 'freshgel',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses','myahkie-mattresses', 'height-26','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные FreshGel',
		'name' => 'Ортопедический матрас Dual FreshGel 12',
		'title' => 'Итальянский элитный матрас FreshGel 12',
		'description' => 'Описание, фотографии, состав матраса FreshGel 12, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex freshgel, элитный матрас',
		'span_title' => 'Элитная коллекция Fresh. Сны на облаке',			
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Съемный Viscose.',
		'attr_cat_product3' => 'Cредней мягкости/Мягкий',
		'small_img' => '/img/product/very_small/NEW-Freshgel-10-main.jpg',
		'img_preview' => array('/img/Freshgel-deluxe-dual-12-6.jpg', '/img/Freshgel-deluxe-dual-12-7.jpg', '/img/Freshgel-dual-10-7.jpg','/img/magnigel-12-03 (1).jpg','/img/magnigel-12-02_2_1 (1).jpg'),
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 30 см</li><li>Степень жесткости: Регулируемая<!--Средней мягкости / Мягкий--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 15 лет</li></ul><br>
		',
		'advantages' => '',
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
			<span class="hnb_bigtytles">Преимущества матрасов коллекции FreshGel</span>

			<div id="hnb_3nelement">

				<div class="hnb_3nelementli" style="margin-top: -4px;margin-left: 0px;opacity: 1;">
					<img itemprop="image" src="/img/dih.png">
					
					<span>Дышащий</span>
					Необыкновенно проницаемый,
							дышащий материал. Мгновенно
							впитывает влагу и капельки,
							быстро испаряя их!
				</div>

				<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
					<img itemprop="image" src="/img/snig.png">
					
					<span>Комфортный</span>
					Не нагревается от соприкосновения
							с телом: спать на нем прохладно
							даже жарким летом.
							Зимой не “отбирает” тепло!
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
		<div class="hnb_contarea">
		<div class="hnb_elite_content2">
		
	

		<div class="common_block_common">
			<div class="half-width">
				<h3>
			Настоящее воплощение комфорта и удовольствия во сне!
					</h3>
					<br />
					<span class="hnb_eytext">
			Это Матрасы сочетающие в себе современные тенденции и элегантность.
						При первом взгляде бросается их легкий, воздушный образ.
						Стиль подчеркивается во всех деталях - начиная с эстетики совершенных форм
						и заканчивая явной ориентацией на комфорт спящего человека.
					</span>
			</div>
			<div class="coin-slider">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Yeqh6g2yHs8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
		</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex FreshGel 12' ,
		'cycle-name' => 'Ортопедический матрас FreshGel 12',
		'sizes' => array(
			array('80x190',72000.00),
			array('80x200',75700.00),
			array('90x190',80900.00),
			array('90x200',85100.00),
			array('120x200',113500.00),
			array('140x200',132300.00),
			array('160x200',151000.00),
			array('160x200 (не в рулоне, новый)',151000.00),
			array('180x200',170100.00),
			array('200x200',188900.00),
		),
		'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2018',
			'sizes' => array('160x200 (не в рулоне, новый)'),
			'prices' => array(
				'160x200 (не в рулоне, новый)' => 120800.00
			),
		), //скидка
		'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '11.03.2019', 'price_koef' => 0.1),

    ),
	array(
		'address' => 'Stretching-9',
		'parent_address' => 'elitnye-stretching',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-22-25','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас Stretching 9',
		'title' => 'Итальянский элитный матрас Stretching 9',
		'description' => 'Описание, фотографии, состав матраса Stretching 9, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex Stretching, элитный матрас',
		'span_title' => 'Идеален для спортсменов',			
		'attr_cat_product1' => '23 см',
		'attr_cat_product2' => 'Съемный Outlast/Viscose.',
		'attr_cat_product3' => 'Cредняя',
		'small_img' => '/img/product/very_small/stretching-9-210.jpg',
		'img_preview' => array('/img/stretching-9-ita.jpg', '/img/stretching-10-ita.jpg', '/img/stretching-13.jpg', '/img/Stretching-detail-high-5.JPG'),
		'small_img_alt' => 'элитный матрас Magniflex FreshGel 9',
		'img' => '/img/product/big/stretching-9.jpg',
		'img_alt' => 'элитный матрас Magniflex Stretching 9',
		'attr_cover_product' => 'The thermos-regulating material, Outlast®, of which the lining is made, creates a perfect microclimate during the night; the viscose, present in the lining, makes it even softer. The lining can be completely removed and easily washable. The outlining 3D band allows for a better transpiration, creating a higher feeling of wellbeing',
		'attr_padding_product' => 'The particular padding has Memoform inside, which perfectly adapts to the silhouette of the body, and offers a pleasant feeling of lightness and relaxation. The padding has a hypoallergenic fiber that gives the mattress an extra comfort.',
		'attr_comfort_product' => 'The special Eliosoft (5 cm) and Elioform (8 cm) layers built with the Stretch technique, gently “stretch” your back towards the opposite sides of the mattress, reducing compression of the spine, offering a stretching effect, for a firmer support.',
		'attr_layer_product' => 'The support base, made of an Elioform layer of 8 cm, is designed to ensure an optimal support for your back.',
		'image_composition' => '/img/Magnistretch-9.jpg',
		'block_attr_collections' => 'Stretching',
		'block_attr_materials' => 'Memoform, Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Outlast®, Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Thermoregulating, Breathable, Stretching system, Patented system',
		'block_attr_comfort_level' => 'Medium firm',
		'block_attr_height' => '23 cm',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '12 years',
		'block_attr_extra' => 'Multi-zone, Cert. Medical Device',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 23 см</li><li>Степень жесткости: <div class="rigidity rigidity_3" title="средней жесткости"></div><!--Средней жесткости--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 12 лет</li></ul><br>
		',
		'advantages' => '',
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
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">
<!-----
			<div id="hnb_3nelement">
						<div class="hnb_3nelementli" style="margin-left: 0px; opacity: 1;">
							<span itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/dih.png"></span>
							<div style="clear:both;"></div>
							<span>Дышащий</span><br>
							Необыкновенно проницаемый,
							дышащий материал. Мгновенно
							впитывает влагу и капельки,
							быстро испаряя их!
						</div>
						<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 0px; opacity: 1;">
							<img itemprop="image" src="/img/snig.png">
							<div style="clear:both;"></div>
							<span>Охлаждающий эффект</span><br>
							Не нагревается от соприкосновения
							с телом: спать на нем прохладно
							даже жарким летом.
							Зимой не “отбирает” тепло!
						</div>
						<div class="hnb_3nelementli" style="position: relative; left: 0px; opacity: 1;">
							<img style="padding-top:7px;" src="/img/lux.png">
							<div style="clear:both;"></div>
							<span>Эффект памяти</span><br>
							Непревзойденные
							ортопедические свойства:
							идеальная поддержка
							Вашего позвоночника!
						</div>
					</div>
			<div style="clear:both;"></div>
				<hr class="hnb_myhrled" />-->

				<div class="hnb_elcont3" >
					
				<div class="common_block_common">
					<div class="half-width">
						<h3>
				КАК ЭТО РАБОТАЕТ?
					</h3>
					<p style="text-align:left;">
							<b>РЕЗУЛЬТАТ:</b> уменьшение болей в спине и шее, оздоровление позвоночника во время сна за счет растягивания позвоночных дисков, растяжки позвоночника делают мышцы и связки спины эластичными, тем самым укрепляя поддержку позвоночного столба и обезболивая место локализации заболевания.
							</p>
					</div>
					<div class="coin-slider">
						<img itemprop="image" src="/img/product/other/kaket_strang.jpg">
					</div>
				</div>

				<div class="common_block_common">
				<div class="coin-slider">
					<img itemprop="image" src="/img/product/other/stretching_rengen2.jpg">
				</div>
				<div class="half-width">
						
							<span class="hnb_bigtytles24">Зачем нужно растягивать позвоночник</span>
							Обычный человек не использует возможности позвоночника на все 100%. Ходьба, повороты, наклоны, поднятие и переноска тяжестей – все эти нагрузки позвоночник способен вынести без особенного напряжения. Немногие ежедневно дают своему позвоночнику достаточное растяжение, обычно это спортсмены, те, кто делает зарядку, играет в подвижные игры или проводит время на природе. У остальных позвоночник "усыхает". С каждым днем организм стареет и утрачивает способность восстанавливать ткани, кости, кровь.<br> <br>
		От состояния позвоночника зависят все жизненные процессы. Вот почему упражнения для позвоночника помогут растянуть не только позвоночник – они продлят вашу жизнь, сделают ее полноценной и радостной.<br> <br>
		Животные ежедневно тренируют свой позвоночник. Для них такой естественной тренировкой являются повседневные движения. Кошка растягивает позвонки, выгибая спину. Собака прижимается грудью к земле и вытягивает передние лапы или извивается всем телом и крутит головой. Вот почему животные полны сил до самой старости. Так, средняя продолжительность жизни собаки – 10 лет, а заметных признаков дряхлости до 8–9 лет не появляется. У людей все иначе.<br>
		То, что человек начинает стареть в 40 лет, а в 50 жизнь идет к закату – не заложено природой. Человеческий организм до 70–80 лет способен нормально работать. И в этом возрасте, к сожалению редко, но встречаются здоровые, энергичные люди, которые обладают легкой походкой, ясным взглядом и острым умом.<br>
		Но первые признаки старения исчезнут, если ежедневно хотя бы понемногу тренировать позвоночник. Это действительно так. Упражнения для позвоночника элементарны, а позволяют сохранить молодость и здоровье. В дополнение к упражнениям отличным способом продлить молодость является матрас Stretching Magniflex.<br>
	
		Облегчение болей в спине, приятное расслабление и легкость утром гарантированы.
				</div>
			
			</div>

			<div class="common_block_common">
			<div class="half-width">
				
					<ul style="text-align:left;line-height:26px;">
					<li>•	Матрасы Stretching обладают средней жесткостью (высокие ортопедические свойства).</li>
					<li>•	Слой Memoform гарантирует повышенный уровень комфорта, эффект памяти, высокие анатомические свойства.</li>
					<li>•	3D ткань чехла обеспечивает непревзойдённый уровень циркуляции воздуха, защищая матрас от образования пыли и пылевых клещей.</li>
					<li>•	Ткань чехла Outlast – технологии Space Technologies, терморегуляция на поверхности матраса – идеальный микроклимат при любых погодных условиях и температур тела.</li>
					<li>•	Натуральная ткань чехла вискоза, отсутствие вредных материалов.</li>
					<li>•	Съемный чехол на молнии, удобство чистки чехла при загрязнениях.</li>
				</ul>
			</div>
			<div class="coin-slider">
				<img itemprop="image" src="/img/product/other/strang_newsloy3d.png">
			</div>
		</div>

					
					
					





			
		</div>
			</div>
		</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Stretching 9' ,
		'cycle-name' => 'Ортопедический матрас Stretching 9',
		'sizes' => array(
			array('80x190',75400.00),
			array('80x200',79200.00),
			array('90x190',84800.00),
			array('90x200',89200.00),
			array('90x200 (не в рулоне, новый)',89200.00),
			array('120x200',118800.00),
			array('140x200',138600.00),
			array('160x200',158200.00),
			array('180x200',177800.00),
			array('200x200',197600.00),
		),
		'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
			'sizes' => array('90x200 (не в рулоне, новый)'),
			'prices' => array(
				'90x200 (не в рулоне, новый)' => 62500.00
			),
		), //скидка
		'yml_desc' => 'Комфортный терморегулирующий матрас  с гелевым слоем Magnigel Foam. Не нагревается от соприкосновения с телом: спать на нем прохладно даже жарким летом. Зимой не “отбирает” тепло! Эффект памяти. Необыкновенно проницаемый, дышащий. Уровень комфорта: достаточно Жесткий Высота: 23 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200'),

	),
	array(
		'address' => 'Stretching-10',
		'parent_address' => 'elitnye-Stretching',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-22-25','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас Stretching 10',
		'title' => 'Итальянский элитный матрас Stretching 10',
		'description' => 'Описание, фотографии, состав матраса Stretching 10, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex Stretching, элитный матрас',
		'span_title' => 'Идеален для спортсменов',		
		'attr_cat_product1' => '25 см',
		'attr_cat_product2' => 'Съемный Outlast/Viscose.',
		'attr_cat_product3' => 'Cредняя',
		'small_img' => '/img/product/very_small/stretching-10-210.jpg',
		'small_img_alt' => 'элитный матрас Magniflex stretching-10',
		'img_preview' => array('/img/stretching-9-ita.jpg', '/img/stretching-10-ita.jpg', '/img/stretching-13.jpg', '/img/Stretching-detail-high-5.JPG'),
		'img' => '/img/product/big/stretching-10.jpg',
		'img_alt' => 'элитный матрас Magniflex Stretching 10',
		'video' => array('https://www.youtube.com/embed/PcFEP8kHwwY'),	
		'attr_cover_product' => 'The thermos-regulating material, Outlast®, of which the lining is made, creates a perfect microclimate during the night; the viscose, present in the lining, makes it even softer. The lining can be completely removed and easily washable. The outlining 3D band allows for a better transpiration, creating a higher level of wellbeing.',
		'attr_padding_product' => 'Memoform, anatomical, which perfectly adapts to the silhouette of the body, offers a pleasant feeling of lightness and relaxation. The Super Soft fiber, soft and transpiring, creates a feeling of utmost wellbeing, embracing your entire body during your sleep.',
		'attr_comfort_product' => 'The special Eliosoft layers (of 5 cm and 11 cm), built with the Stretch technique, gently “stretch” your back towards the opposite sides of the mattress, reducing compression of the spine and offering a stretching effect, creating a softer and more embracing comfort.',
		'attr_layer_product' => 'The support base, made of an Elioform layer of 11 cm, is designed to ensure an optimal support for your back.',
		'image_composition' => '/img/Magnistretch-10.jpg',
		'block_attr_collections' => 'Stretching',
		'block_attr_materials' => 'Super Soft fiber, Memoform, Magnifoam Eliosoft, Magnifoam Elioform',
		'block_attr_coating' => 'Outlast®, Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Thermoregulating, Breathable, Stretching system, Patented system',
		'block_attr_comfort_level' => 'Medium firm',
		'block_attr_height' => '30 cm',
		'block_attr_support' => 'Firm',
		'block_attr_warranty' => '12 years',
		'block_attr_extra' => 'Multi-zone, Cert. Medical Device',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 25 см</li><li>Степень жесткости: Регулируемая<!--Средней жесткости--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 12 лет</li></ul><br>
		',
		'advantages' => '',
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
		<div class="hnb_contarea">
		<div class="hnb_elite_content2">
	
	
			<div class="hnb_elcont3" >
				
			<div class="common_block_common">
				<div class="half-width">
					<h3>
			КАК ЭТО РАБОТАЕТ?
				</h3>
				<p style="text-align:left;">
						<b>РЕЗУЛЬТАТ:</b> уменьшение болей в спине и шее, оздоровление позвоночника во время сна за счет растягивания позвоночных дисков, растяжки позвоночника делают мышцы и связки спины эластичными, тем самым укрепляя поддержку позвоночного столба и обезболивая место локализации заболевания.
						</p>
				</div>
				<div class="coin-slider">
					<img itemprop="image" src="/img/product/other/kaket_strang.jpg">
				</div>
			</div>
	
			<div class="common_block_common">
			<div class="coin-slider">
				<img itemprop="image" src="/img/product/other/stretching_rengen2.jpg">
			</div>
			<div class="half-width">
					
						<span class="hnb_bigtytles24">Зачем нужно растягивать позвоночник</span>
						Обычный человек не использует возможности позвоночника на все 100%. Ходьба, повороты, наклоны, поднятие и переноска тяжестей – все эти нагрузки позвоночник способен вынести без особенного напряжения. Немногие ежедневно дают своему позвоночнику достаточное растяжение, обычно это спортсмены, те, кто делает зарядку, играет в подвижные игры или проводит время на природе. У остальных позвоночник "усыхает". С каждым днем организм стареет и утрачивает способность восстанавливать ткани, кости, кровь.<br> <br>
	От состояния позвоночника зависят все жизненные процессы. Вот почему упражнения для позвоночника помогут растянуть не только позвоночник – они продлят вашу жизнь, сделают ее полноценной и радостной.<br> <br>
	Животные ежедневно тренируют свой позвоночник. Для них такой естественной тренировкой являются повседневные движения. Кошка растягивает позвонки, выгибая спину. Собака прижимается грудью к земле и вытягивает передние лапы или извивается всем телом и крутит головой. Вот почему животные полны сил до самой старости. Так, средняя продолжительность жизни собаки – 10 лет, а заметных признаков дряхлости до 8–9 лет не появляется. У людей все иначе.<br>
	То, что человек начинает стареть в 40 лет, а в 50 жизнь идет к закату – не заложено природой. Человеческий организм до 70–80 лет способен нормально работать. И в этом возрасте, к сожалению редко, но встречаются здоровые, энергичные люди, которые обладают легкой походкой, ясным взглядом и острым умом.<br>
	Но первые признаки старения исчезнут, если ежедневно хотя бы понемногу тренировать позвоночник. Это действительно так. Упражнения для позвоночника элементарны, а позволяют сохранить молодость и здоровье. В дополнение к упражнениям отличным способом продлить молодость является матрас Stretching Magniflex.<br>
	
	Облегчение болей в спине, приятное расслабление и легкость утром гарантированы.
			</div>
		
		</div>
	
		<div class="common_block_common">
		<div class="half-width">
			
				<ul style="text-align:left;line-height:26px;">
				<li>•	Матрасы Stretching обладают средней жесткостью (высокие ортопедические свойства).</li>
				<li>•	Слой Memoform гарантирует повышенный уровень комфорта, эффект памяти, высокие анатомические свойства.</li>
				<li>•	3D ткань чехла обеспечивает непревзойдённый уровень циркуляции воздуха, защищая матрас от образования пыли и пылевых клещей.</li>
				<li>•	Ткань чехла Outlast – технологии Space Technologies, терморегуляция на поверхности матраса – идеальный микроклимат при любых погодных условиях и температур тела.</li>
				<li>•	Натуральная ткань чехла вискоза, отсутствие вредных материалов.</li>
				<li>•	Съемный чехол на молнии, удобство чистки чехла при загрязнениях.</li>
			</ul>
		</div>
		<div class="coin-slider">
			<img itemprop="image" src="/img/product/other/strang_newsloy3d.png">
		</div>
	</div>
	
	</div>
		</div>
	</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Stretching 10' ,
		'cycle-name' => 'Ортопедический матрас Stretching 10',
		'sizes' => array(
			array('80x190',82400.00),
			array('80x200',86800.00),
			array('90x190',92800.00),
			array('90x200',97600.00),
			array('120x200',130200.00),
			array('140x200',151800.00),
			array('160x200',173600.00),
			array('180x200',195200.00),
			array('200x200',216800.00),
		),
		'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '11.03.2019', 'price_koef' => 0.1),

		'yml_desc' => 'Комфортный терморегулирующий матрас  с гелевым слоем Magnigel Foam. Не нагревается от соприкосновения с телом: спать на нем прохладно даже жарким летом. Зимой не “отбирает” тепло! Эффект памяти. Необыкновенно проницаемый, дышащий. Уровень комфорта: достаточно Жесткий Высота: 23 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200'),
	),
	array(
		'address' => 'Magnificent-12',
		'parent_address' => 'elitnye-magnificent',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses','myahkie-mattresses', 'height-26','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Ортопедический матрас Magnificent 12',
		'title' => 'Magnificent 12 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрасы из коллекции Magnificent 12. Технология Dual Core позволяет менять жесткость половинки матраса.',
		'keywords' => 'magnificent, 12',
		'span_title' => 'Элитная коллекция',
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Съемный',
		'attr_cat_product3' => 'Cредней мягкости/Oчень мягкий',
		'small_img' => '/img/product/very_small/Magnificent 12.jpg',
		'img_preview' => array('/img/Magnificent-12-detail-1.jpg', '/img/Magnificent-12-detail-2.jpg', '/img/Magnificent-12-detail-4.jpg', '/img/Magnificent-12-detail-6.jpg'),
		'small_img_alt' => 'элитный матрас Magniflex Magnificent 12',
		'img' => '/img/product/big/Magnificent 12.jpg',
		'img_alt' => 'элитный матрас Magniflex Magnificent 12',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 30 см</li><li>Степень жесткости: средней мягкости/очень мягкий, регулируемый dual core.</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 15 лет</li></ul><br>
		',
		'advantages' => '',
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
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			<span class="hnb_bigtytles">
				<span class="hnb_bigtytles">
						Элитный ортопедический матрас Magniflex Magnificent 12
					</span>
					<br />
					<span class="hnb_eytextoutlast">
                    <strong><i>Роскошный мягкий матрас с регулируемой жесткостью. Luxury style.</i></strong><br><br>
                    <b>Матрас коллекции Supremo</b> - "L"eccellenza riposa qui" - превосходство отдыхает здесь.
Коллекция идеально удовлетворяет желания тех, кто ищет возможность максимального расслабления на матрасе. Все матрасы проработаны до мельчайших деталей и используют эксклюзивные ткани и материалы с их превосходными свойствами.
						<br /><br />
			Матрас с мультислоями предлагает довольно комфортную комбинацию материалов: Elioform, Eliosoft, Memoform, которые также можно варьировать благодаря технологии Dual Core.<b> Матрас с шикарными анатомическими свойствами.</b></span>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Yeqh6g2yHs8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<br /><br /><br />
					<span class="hnb_eytextoutlast">
			<b>Коллекция Magnifico (supremo) состоит из 1 модели Magnificent 12 высотой 30 см с технологией dual core</b>. Это означает съемный чехол на молнии и регулируемую жесткость матраса. Матрас конструктор. Матрас состоит из двух половинок (левая и правая). Каждая половинка состоит из нескольких слоев разной жесткости, которые можно менять местами. Таким образом, можно менять жесткость, подгоняя ее под любые предпочтения.<br /><br /><br />
				</br>
               <b>Можно менять жесткость для всего матраса целиком. Можно менять жесткость только у одного спального места. Идеальный вариант для пар с большой разницей в весе и с разным предпочтением по жесткости</b>. Возможно сделать матрас одновременно мягким для левой половины, и жестким для правой.  <b>Достаточно плотный чехол с материалом мемоформ внутри</b> - стык между половинками вообще не ощущается. Зачем покупать два отдельных матраса, как это часто бывает, когда можно купить один, который подходит сразу всем! Идеальный вариант для семейных пар. Все-таки покупать отдельно два матраса - это повод отдалиться супругам друг от друга. <b>Сохраняйте отношения на все времена с матрасами Magniflex!</b>
                </br>
                </br>
                <b>Чехол матраса с 3D рисунком флорентийской лилии</b>. Чехол легко снимается. Расстегивается молния по всему периметру матраса. Матрас с нижней стороны чехла не содержит слоя мемоформ, поэтому если использовать нижнюю часть чехла как спальную - возможно сделать матрас еще жестче. Трехмерный рисунок выполнен только с верхней стороны чехла, с нижней стороны он сплошной и ровный. Возможна эксплуатация с любой подходящей для Вас стороны!
                <hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Эксклюзивная модель
					</span>
					<br />
					<span class="hnb_eytext">
			Высокотехнологичный самомоделирующийся матрас Premium класса, изготовленный с применением инновационных материалов и технологий. Обеспечивает потребителю максимальный комфорт, высокий анатомический и ортопедический эффекты, а также создает идеальный для сна микроклимат на поверхности матраса.
					</span>
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/magnificent-1.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/magnificent-2.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/magnificent-3.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/magnificent-4.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/magnificent-5.jpg" alt="" />
														<span>

														</span>
											</a>
					</div>
				</div>
			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose® Outlast, съемный на молнии</span>
			<span class="hnb_eytext2">
			Cъемный терморегулирующий чехол с запатентованной технологией Outlast<br />
			Элегантная объемная ткань
					</span>
					</span>
			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
            <h2 class="h2_h2">Королевский комфорт в элитной серии, максимальная релаксация и повышенные анатомические свойства.</h2>
            <span class="hnb_eytext" style="text-align:left;">
				Высота: 30 см.<br><br>
				Жесткость: очень мягкий/средней мягкости - моделируемый dual core.<br><br>
				Чехол: съемный на молнии, Outlast/viscosa.<br><br>
				Срок службы: 15 лет.
			</span>
            <br>
			<div class="ama_comfort_parts">
                        <ul>
                            <li>
                                <p>Outlast®</p>
                                <br>
                                <a href="/production/outlast/" target="_blank"><img title="Outlast" src="/img/outlast.png" alt="Outlast" width="180"></a>
                            </li>
                            <li>
                                <p>Viscose</p>
                                <br>
                                <a href="/production/Viscose/" target="_blank"><img title="Viscose" src="/img/viscosa.png" alt="Viscose" width="180"></a>
                            </li>
                            <li>
                                <p>Memoform</p>
                                <br>
                                <a href="/production/Memoform-Magnifoam/" target="_blank"><img title="Memoform" src="/img/magnifoam.png" alt="Memoform" width="180"></a>
                            </li>
                            <li>
                                <p>Magnifoam Eliosoft</p>
                                <br>
                                <a href="/production/Memoform-Magnifoam/" target="_blank"><img title="Magnifoam Eliosoft" src="/img/eliosoft.png" alt="Magnifoam Eliosoft" width="180"></a>
                            </li>
                            <li>
                                <p>Dual core layer</p>
                                <br>
                                <a><img title="Dual core layer" src="/img/dual-core_.png" alt="Dual core layer" width="180"></a>
                            </li>
                            <li>
                                <p>Removable/Washable</p>
                                <br>
                                <a><img title="Removable/Washable" src="/img/lavabile-sfoderabile.png" alt="Removable/Washable" width="180"></a>
                            </li>
                        </ul>
                    </div>
			<br>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magnificodual12.jpg">
			<ul class="hnb_krtovul">
                                    <li>Чехол съемный: Outlast/Viscose</li>
									<li>Слой в чехле: Memoform 2 см</li>
									<li>Слой в чехле: Super Soft Fiber</li>
									<li>Наполнитель 1: Memoform 5 см</li>
									<li>Наполнитель 2: Eliosoft 8,5 см</li>
									<li>Наполнитель 3: Elioform 8,5 см</li>
									<li>Наполнитель 4: Memoform 5 см</li>
								</ul>
					</span>
			<img itemprop="image" src="/img/magnificient-sostav.jpg">
            </br>
            </br>
            <span class="hnb_eytextoutlast">
            В матрасе используются самые современные материалы,<b>латексная пена с эффектом памяти - это целых 12 см слоя мемори в матрасе!</b> Матрас декорирован полосой из замши по всему периметру, что придает изысканности и возносит вкус его владельца на новый уровень. 3D рисунок флорентийской лилии - новомодный дизайнерский тренд, который помимо эстетического удовольствия добавляет комфортности и новых ощущений за счет своей трехмерности.
            </br>
            </br>
            <b>Слой Eliosoft 7 см - это более мягкий материал, чем Elioform.</b> Сверху и снизу закрыты слоями по 5 см мемори с эффектом памяти. Матрас довольно мягкий и потрясающе комфортный.
            </br>
            </br>
            </span>
            <table class="hnb_table_elit2colnnonebord">
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent2.png" alt=""></td>
					<td style="font-size: 15px;">В матрасе используется <b>чехол из вискозы и</b> ультрасовременной <b>космической технологии Outlast.</b> Outlast путем повышенной циркуляции воздуха и возможности теплообмена легко <b>контролирует микроклимат на поверхности матраса</b> обеспечивая идеальные условия сна. <b>Технология Outlast - это молекулы воска,</b> которые <b>при соприкосновении с горячим раскрываются, позволяя увеличивать прохождение воздуха, тем самым охлаждая до комфортного уровня. При достаточно холодной температуре</b> на поверхности матраса <b>молекулы воска закрываются, уменьшая циркуляцию воздуха и накапливая тепло.</b>

					</td>
				</tr>
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent3.png" alt=""></td>
					<td style="font-size: 15px;">Таким образом <b>поддерживается идеальный для человека микроклимат, защищая от переохлаждения или повышенной потливости.</b>

					</td>
				</tr>
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent4.png" alt=""></td>
					<td style="font-size: 15px;"><b>Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы</b> выдерживают <b>до 180 кг</b> на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.
					</td>
				</tr>
			</table>
			<br />
			<br />
			<br />
			</div>
			</div>
		',
	    'cycle-title' => 'Ортопедические матрасы Magniflex Magnificent 12' ,
		'cycle-name' => 'Ортопедический матрас Magnificent 12',
		'sizes' => array(
			array('160x200',192400.00),
			// array('180x200',216200.00),
			array('200x200',240400.00),
		),
		'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '30.09.2019', 'price_koef' => 0.2),
	),
	array(
		'address' => 'Exchange-Memoform-Dual',
		'parent_address' => 'elitnye-harmony',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses', 'height-26','ortoped','elit', 'elitnye-matrasy','memo','vacu'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Премиальный матрас Exchange Memoform Dual',
		'title' => 'Memoform Dual - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрасы Memoform Dual. Особая технология позволяет изменить жесткость половинки матраса за считанные минуты.',
		'keywords' => 'memoform, dual',
		'span_title' => 'Элитная коллекция. Ортопедический матрас',		
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Съемный',
		'attr_cat_product3' => ' Cредней/Жесткий',
		'small_img' => '/img/product/very_small/Exchange Memoform Dual.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Exchange Memoform Dual',
		'img' => '/img/product/big/Exchange Memoform Dual.jpg',
		'img_preview' => array('/img/product/big/memoform-dual-1-new.jpg', '/img/product/big/memoform-dual-2-new.jpg', '/img/product/big/memoform-dual-3-new.jpg', '/img/product/big/memoform-dual-4-new.jpg'),
		'img_alt' => 'элитный матраса Magniflex Exchange Memoform Dual',
		'video' => array('https://www.youtube.com/embed/XkqzdJs6_Ws', 'https://www.youtube.com/embed/WxfkRaCa-4U'),
		'img_alt' => '',
		'attr_cover_product' => 'Регулирующая температуру ткань Outlast®, которая образует покрытие, создает идеальный микроклимат в течение ночи, а вискоза делает его мягким на ощупь. Чехол на матрас легко снимается и моется.',
		'attr_padding_product' => 'Обивка Memoform идеально адаптируется к форме тела, создавая приятное ощущение легкости и расслабления. Волокно Super Soft дает ощущение чрезвычайного благополучия, повышая уровень комфорта, который вы испытываете во время сна',
		'attr_comfort_product' => 'Насадки доступны в трех различных материалах и могут быть выбраны независимо от стороны матраса, чтобы удовлетворить ваши индивидуальные потребности. Насадки изготовлены из Memoform, анатомического и обволакивающего материала, Magnigel, который является дышащим и прохладным, и из латекса, который обеспечивает комфорт и эргономичную поддержку.',
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
		'block_attr_extra' => 'Dual Core, Cert. Medical Device
		Вершина серии',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 30 см</li><li>Степень жесткости: Регулируемая<!--Средней жесткости / Жесткий 4 комбинации комфорта--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 12 лет</li></ul><br>
		',
		'advantages' => '',
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
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			<span class="hnb_bigtytles"></span>
				<hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Именно на таких матрасах спят члены королевских семей и элита мирового общества
					</span>
					<br />
					<span class="hnb_eytext">
			Идеальный матрас с потрясающими свойствами, настоящее воплощение мечты! Высокотехнологичный матрас Premium класса, обладающий 6-ю уровнями комфорта (жесткий, умеренный, идеальный, комбинированный 3 варианта), обеспечивает потребителю возможность самостоятельно смоделировать оптимальный уровень комфорта. Высокий анатомический и ортопедический эффекты, в сочетании с терморегулирующими свойствами чехла, делают этот матрас идеальной системой комфортного сна и отдыха.
					</span>
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/harmony-1.jpg" alt="" />
														<span>
														 Эксклюзивные детали
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/harmony-2.jpg" alt="" />
														<span>
													 Эксклюзивные детали
													</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/harmony-3.jpg" alt="" />
														<span>
												 Эксклюзивные детали
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/harmony-4.jpg" alt="" />
														<span>
														 Эксклюзивные детали
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/harmony-5.jpg" alt="" />
														<span>
													 Эксклюзивные детали
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/harmony-6.jpg" alt="" />
														<span>
												 Эксклюзивные детали
														</span>
											</a>
					</div>
				</div>
			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_eytext" style="text-align:left;">
				Высота: 30 см.<br><br>
				Жесткость: средней жесткости/жесткий – моделируемый dual core.<br><br>
				4 уровня жесткости для каждой половинки матраса на выбор.<br><br>
				Чехол: съемный на молнии, Outlast/Viscose, замшевая окантовка коричневого цвета по периметру.<br><br>
				Срок службы: 15 лет.
			</span>
			<br>
			<span itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/sostavexmdual.png" /></span>
			<br><br>
			<ul class="hnb_myhrled hnb_newulel" style="text-align:left;    font-size: 16px;">
				<li>Чехол съемный: Outlast/Viscose
				</li>
				<li>Слой в чехле: Memoform 2 см
				</li>
				<li>Слой в чехле: Super Soft fiber
				</li>
				<li>Топпер в матрасе под чехлом: Memoform 6 см
				</li>
				<li>Наполнитель 1: Eliosoft Wave 10 см
				</li>
				<li>Наполнитель 2: Elioform Wave 10 см
			</li></ul>
			<br><br>
			<img itemprop="image" src="/img/product/newniceEXCHANGE MEMOFORM DUAL.jpg">
			<br><br>
			<hr class="hnb_myhrled">
			<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Элитный ортопедический «матрас-конструктор» Magniflex Memoform Dual
					</span>
					<br>
					<span class="hnb_eytext">
			<strong>Роскошный матрас с регулируемой жесткостью - 4 варианта на Ваш выбор!</strong><br><br>
			Матрас коллекции Armonia - "Qualcosa in piu del buon dormire" - больше, чем просто хороший сон.<br>
Каждый матрас этой коллекции обеспечивает 4 разных варианта комбинации жесткости благодаря технологии Dual Core и съемному топперу внутри матраса. Топпер, выполненный из материала Memoform, можно разместить как вверху матраса, так и внизу, основной слой можно также переворачивать, что позволяет подбирать жесткость для любителей матрасов, имеющих самые разные предпочтения.
					<br><br>
					<img itemprop="image" src="/img/armonia-dual.jpg" alt="">
					<br><br>
					В основном слое матраса, помимо топпера, есть два материала: Eliosoft и Elioform, которые соответственно можно располагать так, чтобы матрас был соответственно более мягким или более упругим. В самом чехле матраса есть материал Memoform и Super Soft Fiber - что добавляет потрясающих ощущений комфорта и расслабления на матрасе.
					<br><br>
					Коллекция Armonia состоит из 1 модели высотой 32 см с технологией dual core. Это означает съемный чехол на молнии и регулируемую жесткость матраса. Матрас конструктор. Матрас состоит из двух половинок (левая и правая). Каждая половинка состоит из нескольких слоев разной жесткости, которые можно менять местами. Таким образом можно менять жесткость, подгоняя под любые предпочтения. Можно менять жесткость для всего матраса целиком. Можно менять жесткость только у одного спального места. Идеальный вариант для пар с большой разницей в весе и с разным предпочтением по жесткости. Возможно сделать матрас одновременно мягким для левой половины, и жестким для правой.
<br><br>
Достаточно плотный чехол с материалом Мемоформ внутри - стык между половинками вообще не ощущается. Зачем покупать два отдельных матраса, как это часто бывает, когда можно купить один, который подходит сразу всем! Идеальный вариант для семейных пар. Все-таки покупать отдельно два матраса - это повод отдалиться супругам друг от друга. Сохраняйте отношения на все времена с матрасами Magniflex!
<br><br><br><br>
Чехол матраса с рисунком флорентийской лилии. Чехол легко снимается. Расстегивается молния по всему периметру матраса. Матрас с нижней стороны чехла не содержит слоя Мемоформ, поэтому если использовать нижнюю часть чехла как спальную - возможно сделать матрас еще жестче. Объемный рисунок выполнен только с верхней стороны чехла, с нижней стороны он сплошной и ровный. По периметру идет полоса из замши. Возможна эксплуатация с любой подходящей для Вас стороны!
<br><br><br>
Современные материалы, латексная пена с эффектом памяти - это внутренний топпер высотой 6 см! Его можно класть вверху матраса, можно убрать вниз под другие слои и сделать матрас более упругим. Смотрите на видео ниже как это работает.
www.youtube.com/watch?v=1hUdzxMmpi4
<br><br>
Слой Eliosoft 10 см - это более мягкий материал, чем Elioform. Соединены между собой по технологии Wave (волна). Так как магнифлекс не использует в матрасах клей, что химически вредно, эти два слоя скреплены между собой волнообразными краями механически во избежание смещения слоев. При полностью закрытом чехле, когда молния полностью застегивается, слои прилегают друг к другу максимально плотно.
<br><br><br>
Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.
					</span>
			</div>
				<div>
				<img style="width: 49%;display: inline-block;margin-right: 2%;" src="/img/product/newelitmemdual1.jpg"><img style="width: 49%;display: inline-block;" src="/img/product/newelitmemdual2.jpg">
				</div>
				<span class="hnb_bigtytles">
			Элитный ортопедический «матрас-конструктор» Magniflex Memoform Dual
					</span>
				<span class="hnb_eytext" style="text-align:left;">
				Матрас с регулируемой жесткостью. 4 в 1: четыре матраса в одном благодаря разной настраиваемой в процессе эксплуатации жесткости.
<br><br>
Съемный чехол – удобство эксплуатации. Возможна химчистка.
<br><br>
Высокий матрас 30 см с эксклюзивным дизайном, кинг size, элита товаров для сна.
<br><br>
Матрас поставляется в рулоне – существенная экономия на транспортных расходах при заказе в регионы.
<br><br>
Сделано в Италии, Тоскана, Флоренция. Качество и надежность. Продается в 98-ти странах мира!
			</span>
			<table class="hnb_table_elit2coln">
				<tr>
					<td><img itemprop="image" src="/img/product/emd-sost-new1.png" alt=""></td>
					<td><strong>Viscose</strong><br><br>
Вискоза - мягкая, шелковистая ткань производится из очищенной и отборной древесной целлюлозы. Она чрезвычайно мягкая и шелковистая и быстро впитывает влагу, обеспечивая высокую воздухопроницаемость матрасов и подушек.
					</td>
				</tr>
				<tr>
					<td><img itemprop="image" src="/img/product/emd-sost-new2.png" alt=""></td>
					<td><strong>Memoform</strong><br><br>
Memoform имеет наиболее выраженные анатомические свойства из всех используемых материалов и предназначен для адаптации под вес тела и каждый контур человеческой фигуры. (анатомически повторяет контуры тела).
<br>
Это свойство обеспечивает ощущение повышенного комфорта и легкости во время сна и благотворно влияет на позвоночник, позволяя ему расслабиться.
					</td>
				</tr>
				<tr>
					<td><img itemprop="image" src="/img/product/emd-sost-new31.png" alt=""><img itemprop="image" src="/img/product/emd-sost-new32.png" alt=""></td>
					<td><strong>Magnifoam</strong><br><br>
Magnifoam – латексная пена, которая имеет высокую плотность и микропористую структуру, которая сочетает в себе эластичность и воздухопроницаемость. Благодаря особой молекулярной структуре, Magnifoam доступен в трех версиях:
<br><br>
<ul style="padding-left: 50px;list-style-type: disc;">
<li>более мягкая версия Eliosoft</li>
<li>более твердая версия Elioform (плотность 35кг/м3)</li>
</ul>
<br>
Elioform и Eliosoft также имеют большую степень воздухопроводимости, чем материал предыдущего поколения Eliocel.
					</td>
				</tr>
				<tr>
					<td><img itemprop="image" src="/img/product/emd-sost-new4.png" alt=""></td>
					<td><strong>Super Soft Fiber</strong><br><br>
Начинка сделана из супер мягкого фибрового волокна. Материал невероятно мягкий и дышащий, обеспечивает нежную и комфортную поддержку всего вашего тела. Его особый состав обеспечивает ощущение комфорта и улучшает качество сна.
					</td>
				</tr>
			</table>
			</div>
		</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Exchange Memoform Dual' ,
		'cycle-name' => 'Ортопедический матрас Exchange Memoform Dual',
		'sizes' => array(
			array('80x190',110900.00),
			array('80x200',117100.00),
			array('90x190',124800.00),
			array('90x200',131400.00),
			array('120x200',175200.00),
			array('140x200',204400.00),
			array('160x200',233500.00),
			// array('160x200 (не в рулоне, новый)',233500.00),
			array('180x200',262700.00),
			array('200x200',291800.00),
		),
		
		// 'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
		'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2019',
			'sizes' => array('160x200 (не в рулоне, новый)'),
			'prices' => array(
                '160x200 (не в рулоне, новый)' => 163500.00
			),
		), //скидка
	),
	array(
		'address' => 'Virtus-30',
		'parent_address' => 'elitnye-virtus',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-satin-mattresses','srednie-mattresses', 'mattresses-filter', 'height-26','elit', 'elitnye-matrasy','memo'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Премиальный матрас Virtus 30',
		'title' => 'Virtus 30 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрасы из коллекции Virtus 30. Весь ассортимент в нашем каталоге.',
		'keywords' => 'virtus, 30',
		'span_title' => 'Высочайшие ортопедические свойства и комфорт',		
		'attr_cat_product1' => '30 см',
		'attr_cat_product2' => 'Несъемный, Satin, Viscose.',
		'attr_cat_product3' => 'Cредней мягкости.',
		'small_img' => '/img/product/very_small/Virtus 30.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Virtus 30',
		'img' => '/img/product/big/Virtus 30.jpg',
		'img_preview' => array('/img/product/big/virtus-30-1.jpg', '/img/product/big/virtus-30-2.jpg', '/img/product/big/virtus-30-3.jpg', '/img/product/big/virtus-30-4.jpg'),
		'img_alt' => 'Элитные матрасы Magniflex Virtus 30',
		'video' => array('https://www.youtube.com/embed/3IfmTHkk9Qo'),	
		'attr_cover_product' => 'The cover in Viscose Satin combines the properties of viscose, which is incredibly soft and silky to the touch, and has the qualities of satin. A sleek and elegant material with an excellent ability to dissipate sweat, making the mattress remarkably breathable.',
		'attr_padding_product' => 'The padding is divided into two sides, winter and summer. The first contains natural fibers such as Cashmere, Merino wool, Camel wool and Horsehair, to create the ideal microclimate on cold winter days and providing a cozy comfort. The summer side, instead, contains natural fibers such as Silk, Horsehair, Linen and Cotton, to create a dry and breathable comfort, intended for the warmer months.',
		'attr_comfort_product' => 'The layer in Memoform HD (4 cm) featured on both sides consists of an innovative, high-density viscose-elastic foam that is incredibly compact, adapting to the bodys shape and providing a cozy comfort. The breathable process with differentiated support ensures perfect breathability and an increased dissipation of body moisture even inside the mattress.',
		'attr_layer_product' => 'The middle layer with breathable process and differentiated support is made of Elioform Breeze (19 cm), a highly breathable foam that is resistant to deformation over time. It provides a firm and beneficial support to the body thanks to the added eucalyptus extracts contained in the mattress, which provide a pleasant sensation of coolness.',
		'image_composition' => '/img/Virtuoso-12_1.jpg',
		'block_attr_collections' => 'Virtus',
		'block_attr_materials' => 'Memoform HD, Magnifoam Eliosoft Breeze, Merino wool, Camel wool, Horsehair, Silk, Linen, Cotton',
		'block_attr_coating' => 'Viscose Satin',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Cozy, Thermoregulating, Extra comfort, Breathable',
		'block_attr_comfort_level' => 'Medium Soft',
		'block_attr_height' => '30 cm',
		'block_attr_support' => 'Medium',
		'block_attr_warranty' => '20 years',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 30 см</li><li>Степень жесткости: <div class="rigidity rigidity_2" title="средней мягкости"></div><!--Комфортнейший--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 20 лет</li></ul><br>
		',
		'advantages' => '',
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
		'desc' => '
			<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			
			
			
			
			<div class="common_block_common">
				<div class="half-width">
					<h3>
					Самое лучшее, что Вам может предложить современная индустрия сна!
							</h3>
							<br />
							<span class="hnb_eytext">
					Это одни из самых лучших матрасов в мире. Для их создания используются самые современные, дорогие технологии, отбираются только лучшие ткани и материалы. Каждый матрас уникальный, создается вручную в течение 2-х недель, после чего проходит специальный контроль качества.
							</span>
				</div>
				<div class="coin-slider">
				<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
				<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
													<img itemprop="image" src="/img/PAS_1497.jpg" />
															<span>
	
															</span>
												</a>
												<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
													<img itemprop="image" src="/img/Virtus-2.jpg" alt="" />
															<span>
	
															</span>
												</a>
												<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
													<img itemprop="image" src="/img/Virtus-3.jpg" alt="" />
															<span>
	
															</span>
												</a>
												<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
													<img itemprop="image" src="/img/Virtus-4.jpg" alt="" />
															<span>
	
															</span>
												</a>
												<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
													<img itemprop="image" src="/img/Virtus-6.jpg" alt="" />
															<span>
	
															</span>
												</a>
												<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
													<img itemprop="image" src="/img/Virtus-7.jpg" alt="" />
															<span>
								Все материалы, используемые при создании матраса, проходят независимую экспертную проверку на аллергены. Сертификат OEKO!
															</span>
												</a>
												<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
													<img itemprop="image" src="/img/Virtus-9.jpg" alt="" />
															<span>
	
															</span>
												</a>
						</div>
				</div>
			</div>


			<div class="common_block_common">
				<div class="coin-slider">
					<span itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/new-virt-elnice.jpg" alt="" /></span>
				</div>

				<div class="half-width">
				<span class="hnb_bigtytles">
			Элитный матрас Magniflex Virtus 30
					</span>
					<br>
					<span class="hnb_eytext">
			<strong>Матрас коллекции Virtuoso - Luxury коллекция, шик и роскошь, ставшие реальностью.</strong><br><br>
			Матрас Виртус включает в себя все современные и инновационные технологии, которые только существуют, а также натуральные материалы, позволяющие достигать невероятного комфорта и эффекта во время сна. Чехол матраса украшен рисунком флорентийской лилии, который создал настоящий тренд в области дизайна интерьеров.
					<br><br>
					
					<br><br>
					Матрас выполнен в варианте ЗИМА/ЛЕТО: с летней стороны используется микс льна, хлопка и шелка, с зимней стороны идет наполнение кашемиром, верблюжьей шерстью, шерcтью мериноса и конским волосом. В матрасе использованы ультрасовременные и не имеющие аналогов материалы: Memoform HD, Eliosoft Breeze, Memoform HD Airyform.
					<br><br>
					Матрас можно использовать с двух сторон. Выполнен по привычному уже стандарту зима/лето. При этом слой с шерстью спрятан под тонкой тканью чехла для обеспечения тактильного комфорта. Получается полноценный двусторонний матрас. Одинаковая жесткость с обеих сторон, универсальный вариант!
<br><br><br>
Зимняя сторона: натуральный отборный конский волос, отборная верблюжья шерсть, шерсть тонкорунного мериноса, кашемир. Эффект от зимней стороны просто потрясающий, это не только вариант не замерзнуть ночью зимой, но и терапевтически лечебный способ избавиться от боли в спине. Ведь когда у человека болит спина, для ее лечения используются разогревающие мази и ткани. Рекомендуют одевать пояс из собачей, например, шерсти. В данном матрасе уже учтена возможность "лечения" спины благодаря подогревающему эффекту зимней стороны.
<br><br><br>
Чтобы в матрасе с зимней, достаточно богатой на шерсть стороны, не скапливались бактерии, используется инновационный материал Memoform HD Breeze - материал с повышенной пропускаемостью воздуха и его высоким уровнем циркуляции. Основной упругий слой Eliosoft Breeze - повышенная воздухопроницаемость. Благодаря этим материалам матрас получился невероятно дышащим, что исключает возможность образования пылевых клещей и прочих бактерий, а сон получается невероятно свежим и качественным.
<br><br><br>
Летняя сторона: натуральный 100% хлопок, высококачественный лен и премиального уровня шелк. Летняя сторона обеспечивает комфортный сон в жаркие летние ночи за счет натуральных материалов ткани чехла. Максимально приятный тактильный эффект.
<br><br>
Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.
<br><br><br>
Матрас производится полностью вручную на заказ. Срок производства: 2 недели. Поставляется не в рулоне, в развернутом виде.
					</span>
				</div>
				
			</div>
			
		
		
			
			
		
					
			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Virtus 30' ,
		'cycle-name' => 'Ортопедический матрас Virtus 30',
		'sizes' => array(
			array('80x190',261500.00),
			array('80x200',275000.00),
			array('90x190',294000.00),
			array('90x200',309600.00),
			array('120x200',412400.00),
			array('140x200',481200.00),
			array('160x200',549900.00),
			array('180x200',618700.00),
			array('200x200',687300.00),
		),
		'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
	),
	array(
		'address' => 'Imperiale-24',
		'parent_address' => 'snyatie-s-proizvodstva',
		'parent_name' => 'Снятые с производства',
		'name' => 'Imperiale 24 (снята с производства)',
		'title' => 'Imperiale 24 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрас Imperiale 24. Высокотехнологичные матрасы Premium класса в нашем каталоге.',
		'keywords' => 'imperiale, 24',
		'small_img' => '/img/product/very_small/Imperiale 24.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Imperiale 24',
		'img' => '/img/product/big/Imperiale 24.jpg',
		'img_alt' => 'элитный матрас Magniflex Imperiale 24',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 24 см</li><li>Степень жесткости: Средней жесткости</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 12 лет</li></ul><br>
		',
		'advantages' => '',
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
		'parent_name' => 'Снятые с производства',
		'name' => 'Imperiale 28',
		'title' => 'Итальянский элитный матрас Imperiale 28',
		'description' => 'Описание, фотографии, состав матраса Imperiale 28, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex imperiale, элитный матрас',
		'small_img' => '/img/product/very_small/Imperiale 28.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Imperiale 28',
		'img' => '/img/product/big/Imperiale 28.jpg',
		'img_alt' => 'элитный матрас Magniflex Imperiale 28',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 28 см</li><li>Степень жесткости: Средней мягкости</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 12 лет</li></ul><br>
		',
		'advantages' => '',
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
		'parent_name' => 'Снятые с производства',
		'name' => 'Imperiale 33 (снята с производства)',
		'title' => 'Imperiale 33 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'Предлагаем купить матрас Imperiale 33. Матрасы с высоким анатомическим и ортопедическим эффектом в нашем каталоге.',
		'keywords' => 'imperiale, 33',
		'small_img' => '/img/product/very_small/Imperiale 33.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Imperiale 33',
		'img' => '/img/product/big/Imperiale 33.jpg',
		'img_alt' => 'элитный матрас Magniflex Imperiale 33',
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
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 33 см</li><li>Степень жесткости: Мягкий</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 12 лет</li></ul><br>
		',
		'advantages' => '',
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
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'natur-baci-mattress',
		'parent_address' => 'snyatie-s-proizvodstva',
		'parent_name' => 'Снятые с производства',
		'name' => 'Natur Baci (снята с производства)',
		'title' => 'Матрас Natur Baci. Официальный сайт Magniflex ',
		'description' => 'Матрас для влюбленных. Описание, фотографии, состав ортопедического матраса Magniflex Natur Baci. Мягкий, плотный, упругий матрас. Цена за двуспальный вариант от 52 700 руб.',
		'keywords' => 'natur baci, натур бачи, матрас для влюбленных',
		'small_desc' => '
			<span class="hnb_popular">
			Для Влюбленных
			</span>
			<p class="hnb_harek">
			Самый романтичный из всех ортопедических матрасов. Только двуспальные варианты. <br>
			Высота: 22 см<br>
			Наполнитель:  Eliosoft Foam<br>
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Natur Baci.jpg',
		'small_img_alt' => 'Ортопедический матрас Magniflex Natur Baci',
		'img' => '/img/product/big/Natur Baci.jpg',
		'img_alt' => 'Ортопедический матрас Magniflex Natur Baci',
		'attr' => '
		<style>
		#breadcrumbs {
			background-image: url(/img/natur_bachi_250.jpg);
			height: 250px;
		}
		.product_top{
			display:none;
		}
		.right_block h1{margin-top: 20px;}
		</style>
			<!--<a href="/skidki-magniflex/skidka-15-legendarnye-matrasy/"><div class="hnb_action15">АКЦИЯ! Только в сентябре - <b>15% СКИДКА</b> на этот матрас!</div></a>-->
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 22 см</li><li>Степень жесткости: <div class="rigidity rigidity_1" title="мягкий"></div><!--средней мягкости/очень мягкий - двусторонний матрас--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/natur-baci-mattress/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Модель Natur Baci (влюбленным) - это настоящий <a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">ортопедический матрас</a>. Узнай подробности!</div></li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg"> сертифицировано РосТест, рекомендованы Центральным Институтом Травматологии и Ортопедии РФ. Все <a href="https://www.magniflex.ru/pokupatelyam/certificates/" target="_blank">сертификаты на матрас</a></div></li>
			<li class="hnb_liwhite">Качественный итальянский матрас <div class="hnb_marg">Изготовлен именно в Италии.</div></li>
			</ul>

		',
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
				</div>
				<div class="hnb_contrig">
			<p>
			Ортопедический матрас Natur Baci обращает на себя взгляд в первую очередь благодаря своему нестандартному дизайну, в основе которого используются отпечатки страстного поцелуя. Он создавался прежде всего для влюбленной пары, поэтому выпускается исключительно в "двуспальном варианте".
			<br /><br />
			Матрас учитывает индивидуальные потребности каждого отдыхающего на нем человека. В основе матраса используется материал ELIOSOFT, производимый из 100% натурального латекса, после специальной обработки натуральный латекс приобретает дополнительные свойства, становится более мягким, плотным, упругим и долговечным. Чехол съемный - легко ухаживать.
			<br /><br />
			<div align="center">
			<img  src="/img/magniflex-natur-baci-02.jpg" alt="Матрас Magniflex Natur Baci. Фрагмент дизайна" style="width: 317 px;">
			<img  src="/img/magniflex-natur-baci-03.jpg" alt="Матрас Magniflex Natur Baci Фрагмент дизайна." style="width: 317 px;"><br />
			Фрагменты уникального дизайна чехла
			</div>
			<br /><br />
			Подарите себе и своему любимому человеку этот матрас - Вам обязательно понравится. Помните, итальянцы говорят: "Самый лучший в мире секс - на матрасе Magniflex" ... добавим, особенно, если этот матрас Magniflex Natur Baci.
			<br /><br />
			<br /><br />
			</p>
			<h4>Преимущества модели Natur Baci</h4>
			<p>
			<table class="hnb_certab">
				<tr>
					<td><img src="/img/chehol.png"  alt="Матрас Magniflex: съемный чехол"> </td>
					<td><br /><br /><b>Съемный чехол</b> - элементарно ухаживать, легко постирать</td>
				</tr>
				<tr>
					<td><img src="/img/3d.png"  alt="Матрас Magniflex: 3d ткань"> </td>
					<td><br />Уникальная <b>трехмерная высокотехнологичная ткань</b>, использующаяся в чехле. Высочайший уровень проницаемости - матрас буквально дышит. Минимальный уровень влажности. Нейтрализует посторонние неприятные запахи. Гарантия чрезвычайно высокого уровня гигиены.</td>
				</tr>
				<tr>
					<td><img src="/img/ruchka.png"  alt="Матрас Magniflex: удобная ручка" ></td>
					<td><br /><br />Удобная дизайнерская ручка облегчит перенос матраса </td>
				</tr>
			</table>
			</p>
				</div>
			</div>
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlefsostav">
       <br><br>
       <img src="/img/layer/layer-natur-baci.png" alt="состав матраса Natur Baci Magniflex">
				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX NATUR BACI</b><br><br>
			Ортопедический матрас Natur Baci изготавливается исключительно из природных, экологически чистых материалов.<br><br><br>
			<b>Чехол</b> СЪЕМНЫЙ, легко ухаживать, возможна стирка в стиральной машине. Ткань чехла с технологией <a href="/production/3D-Band/">3D BAND</a>.
			<br><br><br>
			<b>Внутренние слои</b>:<br>
			1 –   слой материала с эффектом памяти <a href="/production/Memoform-Magnifoam/">MEMOFORM MAGNIFORM</a> (2 см). Находится внутри чехла.<br>
			2  –  антистатическая прослойка<br>
			3  –  наполнитель <a href="/production/Eliosoft/">ELIOSOFT</a> (19 см)
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
					Матрасы серии Magniflex Natur Baci являются ортопедическими матрасами, рекомендованы к ежедневному использованию Центральным Институтом Травматологии и Ортопедии РФ.
				</div>
			</div>
		',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 96-ти странах мира! <br>
				В т.ч.	Институтом Травматологии и Ортопедии РФ
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 96-ти странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '',
		'similar' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli">
			<a href="/catalog/orthopedic_mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Merino Green Tea</a><br>
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
			<li class="hnb_mypohli">
			<a href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/Naturalmente (New Naturcomfort).jpg" height="130"><br />Naturalmente (New Naturcomfort)</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Naturalmente (New Naturcomfort)"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/"><img width="185" src="/img/product/very_small2/Merino Green Tea.jpg" height="130"><br />Merino Green Tea</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
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
			это одна из наиболее мягких моделей
		',
		'comfort' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli">
			<a href="/catalog/orthopedic_mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Memo Merino</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Memo Merino"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/Naturalmente (New Naturcomfort).jpg" height="130"><br />Naturalmente (New Naturcomfort)</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Naturalmente (New Naturcomfort)"}--> руб</span>
			</div>
			</li>
			</ul>
			</div>
		',
		'rec_buy' => '
			<div class="hnb_remtitle">Рекомендуем приобрести</div>
			<div class="hnb_imgreksal">
			<img width="765px" src="/img/skid_girl.jpg" height="114px">
			</div>
				<div class="hnb_reksaltext">
				Скидка 25% на ортопедическую подушку при покупке любого матраса, например:
				</div>
		',
		'sizes' => array(
			//array('140x200',52700.00),
			//array('160x200',60000.00),
			//array('180x200',67200.00),
			//array('200x200',75100.00),
		),
		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		'discount_koef' => array('date_start' => '1.9.2016', 'date_end' => '29.9.2016', 'price_koef' => 0.15, ), //скидка
	),
/* КРОВАТИ  */
array(
		'address' => 'arno',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Arno',
		'title' => 'Кровать Арно от интернет-магазина Magniflex',
		'description' => 'Кровать Арно',
		'keywords' => '',
		'small_img' => '/img/product/arno.jpg',
		'small_img_alt' => 'Кровать Арно',
		'img' => '/img/product/arno.jpg',
		'img_alt' => 'Кровать Арно',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/product/arno-back.jpg);
			height: 250px;
		}
		</style>
            <ul>
			<li><b>Материал</b>: ЛДСП или МДФ</li><li><b>Категория ткани</b>: на выбор</li>
			<li><b>Стоимость доставки</b>: бесплатно</li><li><b>Производитель</b>:  OrthoSleep (Россия)</li>
			</ul>
		',
		'advantages' => '',
		'desc' => '
		<div class="block_line2">
		<div class="half-width">
		<h3>Кровать Arno</h3>
		
			
				Сладкий и крепкий сон станет реальностью вместе с кроватью Арно. Воплотите ваши
		самые потаенные идеи в дизайне изделия, ведь только вам решать, какие ткани
		использовать для обивки: крупный рисунок или мелкий жаккарде. Выберите один, два или
		три вида материала, создав неповторимую атмосферу уюта и теплоты. Изголовье Арно
		может быть украшено изысканным кантом, дизайнерским шнуром или декоративными
		гвоздями. Эта модель станет истинным убранством любого интерьера.
		Рисунок изголовья Арно классической формы. И действительно, если выбрать ткань из
		классических коллекций OrthoSleep с крупным вензелем, а также украсить вставку
		изголовья декоративным шнуром, кровать украсит даже очень насыщенный интерьер в
		классическом стиле или в стиле ар-нуво.
		Очень стильно и необычно кровать Арно смотрится в тканях с крупным цветочным
		рисунком. Интересный дизайнерский прием – выполнив кровать «в цветах» можно играть
		характером интерьера поочередно подбирая цвета окружающего текстиля в зависимости
		от оттенков основного рисунка на кровати. Таким образом ежегодно, не прибегая к
		большим затратам, можно оживлять интерьер собственной спальни самостоятельно.
		</div>
		<div class="half-width_img">
			<img src="/img/product/arno-g1.jpg">
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
		<!--	<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/arno-g1.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/arno-g2.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/arno-g3.jpg" alt="" />
														<span>

														</span>
											</a>
					</div>
				</div>
			</div>
			</div> -->
		',
		'cycle-title' => 'Кровать Арно от интернет-магазина Magniflex' ,
		'cycle-name' => 'Кровать Арно',
		'sizes' => array(
			array('160x200',35990.00),
		),
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',


	),
array(
		'address' => 'toskana',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Toskana',
		'title' => 'Кровать Тоскана от интернет-магазина Magniflex',
		'description' => 'Кровать Тоскана',
		'keywords' => '',
		'small_img' => '/img/product/toskana.jpg',
		'small_img_alt' => 'Кровать Тоскана',
		'img' => '/img/product/toskana.jpg',
		'img_alt' => 'Кровать Тоскана',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/product/toskana-back.jpg);
			height: 250px;
		}
		</style>
            <ul>
			<li><b>Материал</b>: ЛДСП или МДФ</li><li><b>Категория ткани</b>: на выбор</li>
			<li><b>Стоимость доставки</b>: бесплатно</li><li><b>Производитель</b>:  OrthoSleep (Россия)</li>
			</ul>
		',
		'advantages' => '',
		'desc' => '
		<div class="block_line2">
			<div class="half-width">
			<h3>Кровать Тоскана</h3>
			
				
					Современная жизнь требует новшеств. Привнеси изюминку в комнату в стиле модерн.
			Кровать Тоскана разработана с учетом вкусов нынешнего поколения. Создай
			неповторимое сочетание цветов, отражающих твою уникальность. Кубики на изголовье
			станут отличным дополнением убранству изделия. Такой эффект достигается за счет
			идеальной симметричности элементов. Небесная мягкость обивки подарит приятный сон,
			а также расслабит тело после тяжелого дня. Будь современным, отдыхая по-королевски на
			кровати Тоскана.
			Симметричные, равносторонние мягкие кубики в изголовье кровати красиво смотрятся
			как в длинноворсовом велюре, так и в строгих рогожках. Уникальность кровати Тоскана в
			том, что бурлет (окантовку изголовья) и квадраты, которые заполняют вставку изголовья,
			можно выполнить в различных цветах и даже фактурах. Кроме этого, каждый кубик на
			изголовье можно изготовить в отличном от других цвете. Таким образом, кровать
			дополнит классический интерьер, интерьер, выполненный в стиле 60-х, а также
			ультрасовременный интерьер с минимальным количеством мебели.
			Дополнить модель в интерьере помогут – большое количество декоративных подушек
			различного покроя, плед «Мишель» в тканях компаньонах, а также уникальные ножки из
			нашего каталога.
			</div>
		<div class="half-width_img">
			<img src="/img/product/toskana-g1.jpg">
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
		 <!--	<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/toskana-g1.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/toskana-g2.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/toskana-g3.jpg" alt="" />
														<span>

														</span>
											</a>
					</div>
				</div>
			</div>
			</div> -->
		',
		'cycle-title' => 'Кровать Тоскана от интернет-магазина Magniflex' ,
		'cycle-name' => 'Кровать Тоскана',
		'sizes' => array(
			array('160x200',35590.00),
		),
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

	),
array(
		'address' => 'rimini',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Rimini',
		'title' => 'Кровать Римини от интернет-магазина Magniflex',
		'description' => 'Кровать Римини',
		'keywords' => '',
		'small_img' => '/img/product/rimini.jpg',
		'small_img_alt' => 'Кровать Римини',
		'img' => '/img/product/rimini.jpg',
		'img_alt' => 'Кровать Римини',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/product/rimini-back.jpg);
			height: 250px;
		}
		</style>
            <ul>
			<li><b>Материал</b>: ЛДСП или МДФ</li><li><b>Категория ткани</b>: на выбор</li>
			<li><b>Стоимость доставки</b>: бесплатно</li><li><b>Производитель</b>:  OrthoSleep (Россия)</li>
			</ul>
		',
		'advantages' => '',
		'desc' => '
		<div class="block_line2">
		<div class="half-width">
		<h3>Кровать Римини</h3>
		
			
		Модное решение для интерьера в стиле хай-тек. Кровать Римини станет настоящей
изюминкой в комнате с минимальным количеством мебели. Прямое изголовье, уголки
которого при желании закругляются, дает намек на присутствие ноток стиля кантри.
Такой эффект возможен, если декорировать спинку по периметру гвоздиками. Модели,
исполненные в жаккарде или шенилле, приобретут звание дизайнерского изделия, которое
располагается только в модных спальнях. Создай свой стиль с кроватью Римини.
Кровать Римини лаконична по своему общему виду, но, дополняя казалось бы простое
изголовье декоративными гвоздями, мы получаем полноценную американскую кровать. И
в данном случае, модель уже впишется не только в современный лаконичный интерьер, а
также в классический или интерьер в стиле модерн. Также изменить модель до
неузнаваемости можно увеличив высоту изголовья до 1.6 метра, а также выбрав
массивные ножки из нашего каталога.
Выполняется модель кровати в различных фактурах и цветах. Плоскость довольно
простого изголовья кровати Римини с легкостью подчеркнуть тканью с крупным
цветочным рисунком, превратив тем самым интерьер в образец спальни 60-х годов. А
если выбрать ткань с классическим крупным вензелем, то Римини смело можно ставить в
классический итальянский интерьер.
		</div>
		<div class="half-width_img">
			<img src="/img/product/rimini-g1.jpg">
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
		<!--	<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/rimini-g1.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/rimini-g2.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/rimini-g3.jpg" alt="" />
														<span>

														</span>
											</a>
					</div>
				</div>

			</div>
			</div> -->
		',
		'cycle-title' => 'Кровать Римини от интернет-магазина Magniflex' ,
		'cycle-name' => 'Кровать Римини',
		'sizes' => array(
			array('160x200',35990.00),
		),
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

	),
array(
		'address' => 'san-remo',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'San-remo',
		'title' => 'Кровать Сан Ремо от интернет-магазина Magniflex',
		'description' => 'Сан Ремо',
		'keywords' => '',
		'small_img' => '/img/product/sanremo.jpg',
		'small_img_alt' => 'Кровать Сан Ремо',
		'img' => '/img/product/sanremo.jpg',
		'img_alt' => 'Кровать Сан Ремо',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/product/sanremo-back.jpg);
			height: 250px;
		}
		</style>
            <ul><li><b>Материал</b>: ЛДСП или МДФ</li><li><b>Категория ткани</b>: на выбор</li>
			<li><b>Стоимость доставки</b>: бесплатно</li><li><b>Производитель</b>:  OrthoSleep (Россия)</li></ul>
		',
		'advantages' => '',
		'desc' => '
				<div class="block_line2">
				<div class="half-width">
				<h3>Кровать Сан Ремо</h3>
				
					
				Любители классического американского стиля будут в восторге от дизайна кровати Сан
				Ремо. Ее неповторимость заключается в оригинальном изголовье, уголки которого изящно
				срезаны, а вставленный по периметру спинки декоративный шнур подчеркнет
				особенности интерьера комнаты. Обивка кровати станет идеальным дополнением
				убранства изделия. Выберете эксклюзивный тон, который выгодно подчеркнет вкус
				счастливых владельцев. Начните новый этап жизни вместе с кроватью Сан Ремо.
				О кровати Сан Ремо можно сказать, что это – жемчужина коллекции OrthoSleep. Модель
				выполнена в классическом американском стиле. Удачное сочетание строгих линий и
				мягкости – особенность кровати. Вставка изголовья может отличаться от окантовки
				(бурлета), тем самым можно подчеркнуть рисунок модели.
				Сан Ремо можно эффектно украсить двумя рядами декоративных гвоздей по бурлету, а
				также по желанию, добавить каретную стяжку во вставку изголовья. Весь интерьер
				спальни можно исполнить в американском классическом стиле, если модель Сан Ремо
				выполнить с увеличенной по высоте спинкой, а также добавить интересные массивные
				ножки из нашего каталога. Украсить комнату помогут декоративные подушки из тканей-
				компаньонов, а также возможность изготовления пледа.
				</div>
				<div class="half-width_img">
					<img src="/img/product/sanremo-g2.jpg">
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
		<!--	<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/sanremo-g1.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/sanremo-g2.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/sanremo-g3.jpg" alt="" />
														<span>

														</span>
											</a>
					</div>
				</div>
			</div>
			</div> -->
		',
		'cycle-title' => 'Кровать Сан Ремо от интернет-магазина Magniflex' ,
		'cycle-name' => 'Кровать Сан Ремо',
		'sizes' => array(
			array('160x200',35390.00),
		),
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',
		
	),
array(
		'address' => 'kyanti',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Kianti',
		'title' => 'Кровать Кьянти от интернет-магазина Magniflex',
		'description' => 'Кровать Кьянти',
		'keywords' => 'Кровать Кьянти',
		'small_img' => '/img/product/kianti.jpg',
		'small_img_alt' => 'Кровать Кьянти',
		'img' => '/img/product/kianti.jpg',
		'img_alt' => 'Кровать Кьянти',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/product/kianti-back.jpg);
			height: 250px;
		}
		</style>
            <ul><li><b>Материал</b>: ЛДСП или МДФ</li><li><b>Категория ткани</b>: на выбор</li>
			<li><b>Стоимость доставки</b>: бесплатно</li><li><b>Производитель</b>:  OrthoSleep (Россия)</li></ul>
		',
		'advantages' => '',
		'desc' => '
			<div class="block_line2">
			<div class="half-width">
			<h3>Кровать Кьянти</h3>
			Подбери свой идеальный дизайн кровати вместе с Кьянти. Изделие может быть
			выполнено из различных тканей, в зависимости от использования которых меняется
			настроение интерьера. Выберите классическую модель для комнаты в стиле барокко или
			ар-нуво или отдайте предпочтение строгому рисунку для убранства спальни в стиле
			модерн. Изящная спинка – настоящая изюминка кровати. Ее размер вы всегда можете
			отрегулировать, за счет чего изделие считается универсальным.
			Модель Кьянти обладает одним очень важным преимуществом – у нее очень лаконичная
			форма изголовья, при этом оно составное. Это позволяет сделать кровать
			комбинированной. То есть бурлет (окантовку изголовья) и царги (основание кровати)
			можно сделать в одной ткани или кожзаме, а вставку изголовья (серединку спинки) - в
			ткани-компаньоне. Таким приемом часть пользуются дизайнеры при оформлении спальни
			для детей. Экокожа позволяет дольше сохранить отличный вид кровати при активном ее
			использовании, а рисунок в центра изголовья придаст характер всему интерьеру.
			Настроение всему интерьеру придаст кровать Кьянти, выполненная в ярких современных
			тонах. Очень стильно на данной модели смотрятся ткани с рисунком «клеточка», «гусиная
			лапка», «рогожка» - они придают лаконичности и строгости кровати. При этом, выбрав
			ткань с рисунком «вензель» в светло золотистых тонах и украсив ее декоративным
			шнуром с золотой нитью, можно получить украшение спальни в стиле ар-деко.
			</div>
			<div class="half-width_img">
				<img src="/img/product/kianti-g1.jpg">
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
		<!--	<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/kianti-g1.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/kianti-g2.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/kianti-g3.jpg" alt="" />
														<span>

														</span>
											</a>
					</div>
				</div>
			</div>
			</div> -->
		',
		'cycle-title' => 'Кровать Кьянти от интернет-магазина Magniflex' ,
		'cycle-name' => 'Кровать Кьянти',
		'sizes' => array(
			array('160x200',32290.00),
		),
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

	),
array(
		'address' => 'verona',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Verona',
		'title' => 'Кровать Верона от интернет-магазина Magniflex',
		'description' => 'Кровать Верона',
		'keywords' => 'Кровать Верона',
		'small_img' => '/img/product/verona.jpg',
		'small_img_alt' => 'Кровать Верона',
		'img' => '/img/product/verona.jpg',
		'img_alt' => 'Кровать Верона',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/product/verona-back.jpg);
			height: 250px;
		}
		</style>
            <ul><li><b>Материал</b>: ЛДСП или МДФ</li><li><b>Категория ткани</b>: на выбор</li>
			<li><b>Стоимость доставки</b>: бесплатно</li><li><b>Производитель</b>:  OrthoSleep (Россия)</li></ul>
		',
		'advantages' => '',
		'desc' => '
		<div class="block_line2">
		<div class="half-width">
		<h3>Кровать Верона</h3>
		
			
				Пожалуй, нет лучшего названия для предмета итальянской классики, чем Верона. Эта
		кровать – воплощение романтики и роскоши. Изголовье модели выполнено в технике
		«каретная стяжка», что добавляет некой изысканности внешнему виду кровати. В
		зависимости от особенностей дизайна можно выбрать высокую или низкую спинку, чтобы
		идеально вписать изделие в интерьер. Отдадите ли вы предпочтение нежному велюру или
		выберите строгую эко кожу?
		Каретная стяжка, в которой выполнено изголовье кровати, придает Вероне особый шик.
		Кровать становится объемной и придает интерьеру законченность. Дополнить уже
		богатый интерьер можно подушками с пуговицами или стразами Swarovski .
		Преимущество кровати Верона в том, что изголовье, выполненное в технике «каретная
		стяжка» не занимает много пространства. Габариты изделия вполне скромные при том,
		что сама кровать выглядит объемной. В изготовлении модели используют
		длинноворсовые велюры, которые имеют особый блеск, а также натуральную и
		искусственную кожу.
		</div>
		<div class="half-width_img">
			<img src="/img/product/verona-g1.jpg">
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
		<!--	<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			<span class="hnb_bigtytles">
				<div class="hnb_elcont3">
					
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/verona-g1.jpg" alt="" />
														<span>

														</span>
											</a>


					</div>
				</div>
			</div>
			</div> -->
		',
		'cycle-title' => 'Кровать Верона от интернет-магазина Magniflex' ,
		'cycle-name' => 'Кровать Верона',
		'sizes' => array(
			array('160x200',46290.00),
		),
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',
	),
array(
		'address' => 'venecia',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Venecia',
		'title' => 'Кровать Венеция от интернет-магазина Magniflex',
		'description' => 'Кровать Венеция',
		'keywords' => 'Кровать Венеция',
		'small_img' => '/img/product/venecia.jpg',
		'small_img_alt' => 'Кровать Венеция',
		'img' => '/img/product/venecia.jpg',
		'img_alt' => 'Кровать Венеция',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/product/venecia-back.jpg);
			height: 250px;
		}
		</style>
            <ul><li><b>Материал</b>: ЛДСП или МДФ</li><li><b>Категория ткани</b>: на выбор</li>
			<li><b>Стоимость доставки</b>: бесплатно</li><li><b>Производитель</b>:  OrthoSleep (Россия)</li></ul>
		',
		'advantages' => '',
		'desc' => '
		<div class="block_line2">
		<div class="half-width">
		<h3>Кровать Венеция</h3>
		
		Вечная английская классика никогда не выйдет из моды. Кровать Венеция создана в
лучших британских традициях. Ее изюминка – это королевское изголовье, украшенное в
технике «каретная стяжка». Изделие станет ключевым предметом интерьера и привнесет в
него царскую роскошь. Ощутимая мягкость спинки подарит своему владельцу минуты
наслаждения во время чтения книг или просмотра любимого фильма. Теперь ваши сны
всегда будут красочными и приятными, расслабляя не только ваш разум, но и тело.
Отличительной особенностью кровати Венеция является ее необычное изголовье. Кроме
того, что оно украшено каретной стяжкой, венчает изголовье так называемый
«королевский форотник». Такая конструкция модели придает кровати объем и
королевский шик. Изголовье кровати можно украсить стразами Swarovski, само изделие –
декоративными подушками и пледом.
Удачно на этой модели смотрятся длинноворсовые велюры, которые придают особый
«дорогой» блеск кровати и объем. Очень модно кровать Венеция смотрится в рогожке –
это придает модели городской шик. Украсить модель можно также массивными
деревянными ножками из нашего каталога.
		</div>
		<div class="half-width_img">
			<img src="/img/product/venecia-g1.jpg">
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
		<!--	<div class="hnb_contarea">
			<div class="hnb_elite_content2">
			
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/venecia-g1.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/venecia-g2.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/venecia-g3.jpg" alt="" />
														<span>

														</span>
											</a>
					</div>
				</div>
			</div>
			</div> -->
		',
		'cycle-title' => 'Кровать Венеция от интернет-магазина Magniflex' ,
		'cycle-name' => 'Кровать Венеция',
		'sizes' => array(
			array('160x200',56490.00),
		),
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

	),
array(
		'address' => 'bibione-classic',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Bibione-classic',
		'title' => 'Кровать Бибионе Классик от интернет-магазина Magniflex',
		'description' => 'Кровать Бибионе Классик',
		'keywords' => 'bibione, classic',
		'small_img' => '/img/product/bibione.jpg',
		'small_img_alt' => 'Кровать Бибионе Классик',
		'img' => '/img/product/bibione.jpg',
		'img_alt' => 'Кровать Бибионе Классик',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/product/bibione-back.jpg);
			height: 250px;
		}
		</style>
            <ul><li><b>Материал</b>: ЛДСП или МДФ</li><li><b>Категория ткани</b>: на выбор</li>
			<li><b>Стоимость доставки</b>: бесплатно</li><li><b>Производитель</b>:  OrthoSleep (Россия)</li></ul>
		',
		'advantages' => '',
		'desc' => '
			<div class="block_line2">
			<div class="half-width">
			<h3>Кровать Бибионе Классик</h3>
			

			
				
				Дети любят стильные вещи. Кровать Бибионе Классик – это модное сочетание классики и
				современности, благодаря чему она считается универсальной для любого интерьера.
				Выберите свой тип одной или двух тканей, которые создадут неповторимый дизайн для
				маленького принца или юной королевы. Настоящим убранством изделия является
				декоративный кант, а также дизайнерские подушки. Еще одно преимущество Бибионе –
				это вместительный ящик для белья, располагающийся под кроваткой.
				Модель Бибионе Классик отличается фигурной спинкой и это ее выделяет в линейке
				«Бибионе». Благодаря этой особенности кровать изысканно смотрится в любой модной
				ткани, с крупным или мелким рисунком. И именно благодаря фигурному изголовью,
				Бибионе Классик отлично будет смотреться не только в детском и подростковом
				интерьере, а также в спальне взрослого человека.
				Фигурную спинку можно украсить контрастным кантом, дополнить кровать
				контрастными подушками, а также выполнить чехол на матрас в основном цвете.
				Благодаря чехлу кроватка Бибионе Классик превращается в симпатичный восточный
				диван. Кровать можно изготовить в любом размере от 80 см в ширину до 200 см, а также
				встроить вместительный ящик для белья.
			</div>
			<div class="half-width_img">
				<img src="/img/product/bibione-g2.jpg">
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
			<!-- <div class="hnb_contarea">
			<div class="hnb_elite_content2">
			
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/bibione-g1.jpg" alt="" />
														<span>

														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/bibione-g2.jpg" alt="" />
														<span>

														</span>
											</a>

					</div>
				</div>
			</div>
			</div> -->
		',
		'cycle-title' => 'Кровать Бибионе Классик от интернет-магазина Magniflex' ,
		'cycle-name' => 'Кровать Бибионе Классик',
		'sizes' => array(
			array('80x200',30890.00),
		),
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

	),
	array(
		'address' => 'MERINO-childrens',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 'vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', 'height-20', 'children-merino', 'razmer1', 'razmer2', 'razmer3', 'razmer4','ortoped','vacu'),
		'parent_name' => 'Детские матрасы',
		'name' => 'Merino для детей',
		'title' => 'Merino для детей - детские ортопедические матрасы в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить матрас Merino для детей. Удобный детский матрас Вы найдете в нашем каталоге.',
		'keywords' => 'ребенок, merino',
		'small_desc' => '
			<span class="hnb_popular">
			Простота и качество
			</span>
			<p class="hnb_harek">
			Двусторонний износостойкий и гипоаллергенный матрас зима/лето.<br>
Высота: 16 см.<br>
Жесткость: Жесткий<br>
Наполнитель: Eliocel 40.<br>
Чехол: несъемный, 100% шерсть мериноса/ 100% хлопок, жаккард.<br>
Сделано в Италии.
                 </p>
		',
		'attr_cat_product1' => '16 см',
		'attr_cat_product2' => 'Несъемный',
		'attr_cat_product3' => 'Жесткий',
		'small_img' => '/img/product/very_small/Merino-childrens.jpg',
		'small_img_alt' => 'детский матрас - Merino Magniflex',
		'img_preview' => array('/img/B-Bamboo Sfoderabile-2.JPG', '/img/B-Bamboo-2.JPG'),
		'img' => '/img/product/big/Merino-childrens.jpg',
		'img_alt' => 'детский матрас - Merino Magniflex',
		'attr' => '
			<ul>
			<li>Ортопедический матрас. ПРОИЗВОДСТВО ИТАЛИЯ
			</li>
			<li>Высота: 16 см
			</li>
			<li>Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--умеренно жесткий-->
			</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы
			</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/">доставка</a>, <a href="/pokupatelyam/oplata/">оплата</a>
			</li>
			<li>Срок службы: не менее 12 лет</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/detskie-ortopedicheskie-matrasy/MERINO-childrens/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Модель Magniflex Merino (Merinos) - это настоящий ортопедический матрас. Узнать подробности?</div></li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Только натуральные ткани<div class="hnb_marg">ТОЛЬКО натуральные экологически чистые ткани и материалы</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Качественный итальянский матрас<div class="hnb_marg">Изготовлен именно в Италии на заводе в Прато специально для детей!</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
			<img width="280" src="/img/magniflex-specialist.jpg" title="Главный специалист по вопросам сна Magniflex">
					<br>
			Специалист по здоровому сну
				</div>
				<div class="hnb_contrig">
			<p>
			Детский ортопедический матрас Merino (прежнее название ортопедический матрас для детей Merinos) - лучший ортопедический матрас для детей и подростков по версии авторитетного итальянского журнала Hachette Home. Неоднократный лауреат десяток международных выставок в том числе в Милане (Италия), Лас-Вегасе (США), Бирмингеме (Великобритания), Москве (Россия). Практичный, не деформируется, позволяет принимать идеальное положение для сна, которое советуют специалисты-ортопеды.
			<br /><br />
			<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merino-children-02.jpg" alt="Детский матрас Merinos: лучший матрас для детей" style="width: 640 px;">
			</p>
						  <h4>ВАЖЕН ДЛЯ РАЗВИТИЯ МЫШЦ и ФОРМИРОВАНИЯ ПОЗВОНОЧНИКА</h4>
			<p>
			Матрас Magniflex Merino для детей &nbsp;("merinos", "меринос") - это ортопедический матрас, созданный на основе взрослого матраса Merino (Merinos) с учетом потребностей детского (подросткового) организма. Матрас практичный, износостойкий с двухсторонним покрытием "зима-лето", изготовленный в Италии из специальных материалов на уровне самой современной технологии. В его разработке принимали участие ведущие итальянские врачи-ортопеды и специалисты-инженеры компании Magniflex.
			<br /><br />
			Внешний слой: летняя поверхность создается из натуральной 100% хлопковой ткани: подарит комфортный прохладный сон в знойную ночь; зимняя поверхность -  тонкорунная шерсть мериноса: согреет в период морозов.
			<br /><br />
			<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merino-children-03.jpg" alt="Детский матрас Merinos: хлопок" style="width: 640 px;">
			<br /><br />
			Внутренний слой матраса состоит из сверхупругого, износостойкого, высокотехнологического материала ELIOCEL 40 (Элиочел), превосходящий по своим свойствам натуральный латекс. Благодаря использованию этого материала матрас становится "дышащим" (пропускает воздух сквозь себя, легко выводит влагу, запахи, обеспечивая высокий уровень гигиены), хорошо приспосабливается к форме тела. Матрас не деформируется, позволяет телу принять идеальное положение для отдыха, которое рекомендуют врачи-ортопеды, не жертвуя при этом удобством.
			<br /><br />
			</p>
			<h4>Часто производители матрасов советуют:</h4>
			<p><em>
			"Матрас – это не спортивная площадка. Попросите детей играть в другом месте: забавные прыжки могут существенно навредить матрасу".</em>
			<br /><br />
			<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merino-children-05.jpg" alt="Детский матрас Merinos: прыжки" style="width: 640 px;">
			У нас другие правила.<br /><br />
			В основе нашего матраса -  специально разработанный лабораторией Magniflex материал ELIOCEL 40, ему не страшны прыжки. Поэтому прыгайте, играйте, смейтесь, веселитесь, ведь детство чуточку короче, чем срок службы этого матраса.
			</p>
			<h4>Как и все матрасы Magniflex:</h4>
			<p>
			Все ортопедические матрасы Merino обработаны специальным средством, поэтому они абсолютно антиаллергенны. В составе матраса нет металлических деталей, поэтому он не оказывает на организм магнитного или электростатического воздействия.
			<br><br>
			Предпродажная вакуумная упаковка матраса Merino для детей (матрас спрессован в рулон) позволяет покупателю самостоятельно довезти его до места назначения даже на общественном транспорте,
			<br><br>
			Ортопедический матрас Magniflex Merino для детей признан лучшим матрасом для детей итальянским журналом Hachette Home. Полный текст статьи Вы можете прочитать в номере Hachette Home 9/10 или на официальном сайте издания.
			<br><br>
			</p>
			<h4>Веселые моменты из жизни Магнифлекс:</h4>
			<p>
			Разница между детским матрасом Магнифлекс и "неМагнифлекс":
			<br><br>
			<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merino-children-12.png" alt="Детский матрас Merinos: Оооо неееет! Это не Магнифлекс!" style="width: 640 px;"><br>
			Оооо неееет! Это не Магнифлекс!
			<br><br>
			<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merino-children-04.jpg" alt="Детский матрас Merinos: Да! Это он - Магнифлекс!" style="width: 640 px;"><br>
			Да! Это он - Магнифлекс!
			</p>
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
			4 - Слой <a href="/magniflex/inner-plates#eliocel">Eliocel 40 </a> (1 см)<br><br>
			5 - Изоляционная ткань<br><br>
			6 - Основной слой: <a href="/magniflex/inner-plates#eliocel">ELIOCEL 40</a>  <br><br>
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
			array('60x120',9000.00),
			array('65x125',10300.00),
			array('70x140',12400.00),
			array('70x160',14100.00),
			array('70x190',16700.00),
			array('75x190',17800.00),
			array('80x160',16000.00),
			array('80x180',18000.00),
			array('80x190',18900.00),
			array('80x195',19400.00),
			array('80x200',20000.00),
			array('85x190',20200.00),
			array('85x200',21300.00),
			array('90x180',20200.00),
			array('90x190',21500.00),
			array('90x195',22000.00),
			array('90x200',22400.00),
		),
		'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),

		'yml_desc' => '
			Неоднократный лауреат десяток международных выставок в том числе в Милане (Италия), Лас-Вегасе (США), Бирмингеме (Великобритания), Москве (Россия). Практичный, не деформируется, позволяет принимать идеальное положение для сна, которое советуют специалисты-ортопеды. Внешний слой: летняя поверхность создается из натуральной 100% хлопковой ткани: подарит комфортный прохладный сон в знойную ночь; зимняя поверхность - тонкорунная шерсть мериноса: согреет в период морозов.
			Срок службы: не менее 12 лет. Высота: 16 см.
		',
		'yml_torgmail' => true,
	),
	array(
		'address' => 'B-Bamboo',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Детские матрасы',
		'other_categories' => array('vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', 'height-20', 'action', 'children-bambo', 'razmer1'),
		'name' => 'Матрас B-Bamboo для детей',
		'title' => 'Детский ортопедический матрас - B-Bamboo в Официальном интернет-магазине Магнифлекс (Италия). Лучший матрас для детей! ',
		'description' => 'Описание, фотографии, состав детского матраса B-Bamboo Magniflex',
		'keywords' => 'детский матрас, детский ортопедический матрас, матрас для детей, детский матрас, матрас для мальчика, подростковый матрас',
		'small_desc' => '
			<span class="hnb_popular">
			Повышенный комфорт
			</span>
			<p class="hnb_harek">
			Детский матрас из натуральных материалов с нежным и мягким трикотажным чехлом.<br>
Высота: 10 см.<br>
Жесткость: Жесткий<br>
Наполнитель: Elioform.<br>
Чехол: несъемный, 100% хлопок и натуральный бамбуковый лен, трикотаж.<br>
Сделано в Италии.
                 </p>
		',
		'attr_cat_product1' => '10 см',
		'attr_cat_product2' => 'Несъемный',
		'attr_cat_product3' => 'Жесткий',
		'small_img' => '/img/product/very_small/Merino-Bamboo-children.jpg',
		'img_preview' => array('/img/B-Bamboo-reklama-2.JPG', '/img/B-Bamboo-reklama-3.JPG', '/img/bambino.jpg'),
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
			<ul><li>Ортопедический матрас. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Высота: 10 см</li><li>Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--средней жесткости--></li>
			<li>Вес: до 50 кг.</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: доставка, оплата</li><li>Срок службы: не менее 12 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/detskie-ortopedicheskie-matrasy/Merino+Bamboo/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Матрас без пружин (на матрасе можно прыгать детям сколько угодно – не деформируется)</li>
			<li class="hnb_ligray">Ортопедический матрас – высокие анатомические свойства, правильное развитие осанки с детства.</li>
			<li class="hnb_liwhite">Антистатическая прослойка, матрас без шерсти, антиаллергенный.</li>
			<li class="hnb_ligray">Только натуральные материалы, отсутствие клея, синтетики, полиэстера, вредных веществ.</li>
			<li class="hnb_liwhite">Ткань чехла мягкая, приятная на ощупь, не грубая и 100% натуральная.</li>
			</ul>
			<div class="hnb_contcenter">
					<h2>КОЛЛЕКЦИЯ МАТРАСОВ B-BAMBOO</h2>

					Детские матрасы B-Bamboo – это забота о здоровье Вашего ребенка, которая начинается с ранних лет. При покупке детской кроватки встает нелегкий выбор правильного матраса. Он должен обладать хорошими ортопедическими свойствами, не содержать вредных материалов, не вызывать аллергических реакций и не быть причиной риска развития аллергии. Также матрас должен быть отлично вентилируемым, невысоким и практичным. Матрас, произведенный в Италии на фабрике Magniflex обладает всеми необходимыми качествами и свойствами, которые удовлетворяю потребности самых трепетных родителей.
<br><br>
<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merino-children-11.png" style="width: 640 px;">
<br><br>
Чехол матраса не содержит в себе никаких вредных или синтетических материалов. Ткань чехла, это 100% хлопок и самые натуральные волокна бамбука.
<br><br>
<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/mat_detb-bam.jpg" style="width: 640 px;">
<br><br>
Для получения бамбуковой нити механическим способом (ее еще называют бамбуковый лен) стебель бамбука разминается, при помощи натуральных ферментов доводится до однородной массы. Затем волокно прочесывается и формируется в нити. При производстве бамбукового льна не применяются химические вещества. Ткань из бамбукового льна является на 100 процентов натуральной и экологичной. Она почти идеальна: антибактериальная, дезодорирующая, эластичная, дышащая и впитывающая влагу. Подтверждением качества такой ткани является сертификат Oeko-tex.
<br><br>
Вы можете найти и более дешевые изделия из волокон бамбука, но при отсутствии сертифката Oeko-tex Вы можете быть уверенны, что подобные волокна получены химическим путем и не являются на 100% натуральными. Бамбуковое волокно – довольно редкий и дорогой материал, который не может стоит дешево.
<br><br>
<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/mat_detb-bam2.jpg">
<br><br>
<h3>Детские матрасы B-Bamboo – коллекция состоит из двух моделей:</h3>
<div class="hnb_opis_sostava">
<span>B-Bamboo </span>
	<div>
		<p>
		Высота матраса 10 см.<br>
		Матрас обеспечивает высокие ортопедические свойства и обладает средней жесткостью.
		</p>
		<div>
			<img itemprop="image" src="/img/layer/layer-B-Bamboo.png">
			<ul style="top:0px;">
				<li>•	Гипоалергенный и дышащий материал: 100% хлопок и волокна бамбука</li>
				<li>•	Изоляционная хлопковая прослойка (натуральный хлопок).</li>
				<li>•	Слой Elioform 8 см</li>
			</ul>
			<img style="float: right;margin-top: 50px;" src="/img/layer/layer-B-Bamboo-roz.png">
		</div>
	</div>
</div>
<div style="clear:both;"></div>
<div class="hnb_opis_sostava">
<span>B-Bamboo Sfoderabile </span>
	<div>
		<p>
		Высота матраса 10 см (cъемный чехол на молнии)<br>
		Матрас обеспечивает высокие ортопедические свойства и обладает средней жесткостью.
		</p>
		<div>
			<img itemprop="image" src="/img/layer/layer-B-Bamboo.png">
			<ul style="top:0px;">
				<li>•	Гипоалергенный и дышащий материал: 100% хлопок и волокна бамбука</li>
				<li>•	Изоляционная хлопковая прослойка (натуральный хлопок).</li>
				<li>•	Слой Elioform 8 см</li>
			</ul>
			<img style="float: right;margin-top: 50px;" src="/img/layer/layer-B-Bamboo-s-roz.png">
		</div>
	</div>
</div>
<div style="clear:both;"></div>
<br><br><br>
<div style="text-align:left;">
Гарнтированный срок службы: 12 лет<br>
Матрас поставляется в фирменной рулонной вакуумной упаковке Magniflex.<br>
Сделано в Италии.
</div>
<h3 style="    color: #d72424;">Матрас сертифицирован ведущими организациями мира, рекомендован для эксплуатации детям,<br> продается в 96 странах мира.</h3>
<img itemprop="image" src="/img/and_imgtopimpack.jpg">
				</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex B-Bamboo',
		'cycle-name' => 'Ортопедический матрас Merino B-Bamboo',
		'sizes' => array(
			array('60x120',13600.00),
		),
		'discount_koef' => array('date_start' => '01.02.2019', 'date_end' => '31.09.2019', 'price_koef' => 0.20, ), //скидка
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
		'address' => 'B-Bamboo-Sfoderabile',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 'vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', 'height-20', 'action', 'children-sfo', 'razmer1','ortoped','vacu'),
		'parent_name' => 'Детские матрасы',
		'name' => 'Матрас B-Bamboo Sfoderabile со съемным чехлом для детей',
		'title' => 'Детский ортопедический матрас - B-Bamboo Sfoderabile (съемный чехол) в Официальном интернет-магазине Магнифлекс (Италия). Лучший матрас для детей! ',
		'description' => 'Описание, фотографии, состав детского матраса B-Bamboo Sfoderabile (съемный чехол) Magniflex',
		'keywords' => 'детский матрас, детский ортопедический матрас, матрас для детей, детский матрас, матрас для мальчика, подростковый матрас',
		'small_desc' => '
			<span class="hnb_popular">
			Повышенный комфорт
			</span>
			<p class="hnb_harek">
			Детский матрас из натуральных материалов с нежным и мягким трикотажным чехлом.<br>
Высота: 10 см.<br>
Жесткость: Жесткий<br>
Наполнитель: Elioform.<br>
Чехол: съемный на молнии, 100% хлопок и натуральный бамбуковый лен, трикотаж.<br>
Сделано в Италии
                 </p>
		',
		'attr_cat_product1' => '10 см',
		'attr_cat_product2' => 'Съемный',
		'attr_cat_product3' => 'Жесткий',
		'small_img' => '/img/product/very_small/Merino-Bamboo-children.jpg',
		'small_img_alt' => 'детский матрас - Merino Bambo Magniflex',
		'img_preview' => array('/img/B-Bamboo-reklama-2.JPG', '/img/B-Bamboo-reklama-3.JPG', '/img/bambino.jpg'),
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
			<ul><li>Ортопедический матрас. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Высота: 10 см</li><li>Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--средней жесткости--></li>
			<li>вес: до 60кг.</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: доставка, оплата</li><li>Срок службы: не менее 12 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/detskie-ortopedicheskie-matrasy/Merino+Bamboo/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Модель Magniflex Merino Bamboo для детей - это настоящий ортопедический матрас. Узнать подробности?</div></li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Качественный итальянский матрас <div class="hnb_marg">Изготовлен именно в Италии на заводе в Прато, специально для детей!</div></li>
			</ul>
		<div class="hnb_contcenter">
					<h2>КОЛЛЕКЦИЯ МАТРАСОВ B-BAMBOO</h2>

					Детские матрасы B-Bamboo – это забота о здоровье Вашего ребенка, которая начинается с ранних лет. При покупке детской кроватки встает нелегкий выбор правильного матраса. Он должен обладать хорошими ортопедическими свойствами, не содержать вредных материалов, не вызывать аллергических реакций и не быть причиной риска развития аллергии. Также матрас должен быть отлично вентилируемым, невысоким и практичным. Матрас, произведенный в Италии на фабрике Magniflex обладает всеми необходимыми качествами и свойствами, которые удовлетворяю потребности самых трепетных родителей.

<br><br>
<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merino-children-11.png" style="width: 640 px;">
<br><br>
Чехол матраса не содержит в себе никаких вредных или синтетических материалов. Ткань чехла, это 100% хлопок и самые натуральные волокна бамбука.
<br><br>
<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/mat_detb-bam.jpg" style="width: 640 px;">
<br><br>
Для получения бамбуковой нити механическим способом (ее еще называют бамбуковый лен) стебель бамбука разминается, при помощи натуральных ферментов доводится до однородной массы. Затем волокно прочесывается и формируется в нити. При производстве бамбукового льна не применяются химические вещества. Ткань из бамбукового льна является на 100 процентов натуральной и экологичной. Она почти идеальна: антибактериальная, дезодорирующая, эластичная, дышащая и впитывающая влагу. Подтверждением качества такой ткани является сертификат Oeko-tex.
<br><br>
Вы можете найти и более дешевые изделия из волокон бамбука, но при отсутствии сертифката Oeko-tex Вы можете быть уверенны, что подобные волокна получены химическим путем и не являются на 100% натуральными. Бамбуковое волокно – довольно редкий и дорогой материал, который не может стоит дешево.
<br><br>
<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/mat_detb-bam2.jpg">
<br><br>
<h3>Детские матрасы B-Bamboo – коллекция состоит из двух моделей:</h3>
<div class="hnb_opis_sostava">
<span>B-Bamboo </span>
	<div>
		<p>
		Высота матраса 10 см.<br>
		Матрас обеспечивает высокие ортопедические свойства и обладает средней жесткостью.
		</p>
		<div>
			<img itemprop="image" src="/img/layer/layer-B-Bamboo.png">
			<ul style="top:0px;">
				<li>•	Гипоалергенный и дышащий материал: 100% хлопок и волокна бамбука</li>
				<li>•	Изоляционная хлопковая прослойка (натуральный хлопок).</li>
				<li>•	Слой Elioform 8 см</li>
			</ul>
			<img style="float: right;margin-top: 50px;" src="/img/layer/layer-B-Bamboo-roz.png">
		</div>
	</div>
</div>
<div style="clear:both;"></div>
<div class="hnb_opis_sostava">
<span>B-Bamboo Sfoderabile </span>
	<div>
		<p>
		Высота матраса 10 см (cъемный чехол на молнии)<br>
		Матрас обеспечивает высокие ортопедические свойства и обладает средней жесткостью.
		</p>
		<div>
			<img itemprop="image" src="/img/layer/layer-B-Bamboo.png">
			<ul style="top:0px;">
				<li>•	Гипоалергенный и дышащий материал: 100% хлопок и волокна бамбука</li>
				<li>•	Изоляционная хлопковая прослойка (натуральный хлопок).</li>
				<li>•	Слой Elioform 8 см</li>
			</ul>
			<img style="float: right;margin-top: 50px;" src="/img/layer/layer-B-Bamboo-s-roz.png">
		</div>
	</div>
</div>
<div style="clear:both;"></div>
<br><br><br>
<div style="text-align:left;">
Гарнтированный срок службы: 12 лет<br>
Матрас поставляется в фирменной рулонной вакуумной упаковке Magniflex.<br>
Сделано в Италии.
</div>
<h3 style="    color: #d72424;">Матрас сертифицирован ведущими организациями мира, рекомендован для эксплуатации детям,<br> продается в 96 странах мира.</h3>
<img itemprop="image" src="/img/and_imgtopimpack.jpg">
				</div>
				<div style="margin:0 auto;width: 560px;margin-top: 50px;">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/YJxqsN12b7U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
			array('60x120',16700.00),
		),
		'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '31.09.2019', 'price_koef' => 0.2),
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
		'address' => 'Pensiero-6-childrens',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'other_categories' => array('s-effektom-pamjati-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses-2', '80x160', 'height-20', 'children-pens', 'razmer5','ortoped','memo','vacu','podrostkovue-matrasy'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Матрас Pensiero 6 для детей',
		'title' => 'Матрасы Pensiero 6 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 6. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 6, magniflex, merino',
		'small_desc' => '
        <span class="hnb_popular">
        Повышенный комфорт + эффект памяти
        </span>
        <p class="hnb_harek">
        Натуральные материалы, нежный и мягкий трикотажный чехол со стороной с эффектом памяти.<br>
Высота: 15 см.<br>
Жесткость: жесткий/средней жесткости.<br>
Наполнитель: Elioform, Memoform.<br>
Чехол: несъемный, viscose, трикотаж.<br>
Сделано в Италии.
             </p>
		',
		'attr_cat_product1' => '15 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий/Средней ',
		'small_img' => '/img/product/very_small/penseniero-6-child.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/penseniero-6-child.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'attr' => '
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 15 см</li><li>Степень жесткости: Регулируемая</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 10 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINO-BAMBOO/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<style>
				#breadcrumbs{
					background-image: url(/img/PENSIERO_250.jpg);
					height: 250px;
				}
			</style>
			<ul>
				<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Настоящий ортопедический матрас. Европейские и Российские сертификаты качества.</div></li>
				<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
				<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
				<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
				<li class="hnb_liwhite">Качественный итальянский матрас <div class="hnb_marg">Изготовлен именно в Италии на заводе в Прато.</div></li>
			</ul>
			<div class="hnb_contcenter">
					<h2>КОЛЛЕКЦИЯ МАТРАСОВ PENSIERO</h2>
Ортопедический матрас Pensiero – это новинка фабрики Magniflex, следующий уровень комфорта после серии упругих матрасов коллекции Stile.
<br><br>
Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид. Отличие всех трех моделей в серии Pensiero только в высоте, одинаковые материалы и жесткость.
<br><br>
Белоснежный чехол матраса выполнен из материала вискоза.
Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
Матрас Pensiero – это матрас со средней степенью жесткости, является усовершенствованной моделью серии Stile. Не содержит шерсти и имеет одинаковый чехол, но при этом разную жесткость с обеих сторон. С верхней стороны есть 2 см слоя мемоформ, с нижней стороны обычный упругий Elioform. Таким образом, матрас смело можно назвать двусторонним. Обеспечивает усиленную поддержку спины и позвоночника, при этом гарантируя повышенный уровень комфорта, чем например модель Stile за счет слоя memoform 2 см – эффект памяти, анатомический матрас.
Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
<br><br>
<img style="width:40%;" src="/img/layer/img_pensiero_newdes.jpg">
<br><br>
<div class="hnb_opis_sostava">
<span>PENSIERO 6:</span>
	<div>
		<p>
		Высота матраса 15 см.<br>
		Средней жесткости. Поддержка спины и высокий уровень комфорта, эффект памяти.
		</p>
		<img itemprop="image" src="/img/layer/layer-pensiero-roz.png">
		<div>
			<img itemprop="image" src="/img/layer/layer-pensiero.png">
			<ul>
				<li>•	Чехол: вискоза Viscose.</li>
				<li>•	Слой в чехле матраса: Memoform 2 см.</li>
				<li>•	Слой в чехле:  hypoallergenic fiber (гипоалергенная фибра).</li>
				<li>•	Основной слой: Elioform 12 cm.</li>
			</ul>
		</div>
	</div>
<div style="clear:both;"></div>
</div>
<div style="text-align:left;">
Гарантированный срок службы: 10 лет.<br>
Поставляется в рулоне в вакуумной упаковке.<br>
Сертифицировано ведущими организациями мира. Продается в 98 странах, на 5 континентах.
</div>
				</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Pensiero' ,
		'cycle-name' => 'Ортопедический матрас Pensiero 6',
		'sizes' => array(
			array('80x160',23000.00),
			array('80x190',27200.00),
			array('90x190',30600.00),
			array('90x200',32200.00),
		),
		'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
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
		'address' => 'Stile-6-childrens',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', '80x160', 'height-20', 'children-stile6', 'razmer5', 'razmer1', 'razmer3','ortoped','vacu','podrostkovue-matrasy'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Детский матрас Stile 6 ',
		'title' => 'Матрасы Stile 6 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 6. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас для детей, детский матрас, матрас для подростков, ортопедический матрас для детей, Stile 6, magniflex',
		'small_desc' => '
        <span class="hnb_popular">
        Повышенный комфорт
        </span>
			<p class="hnb_harek">Натуральные материалы, нежный и мягкий трикотажный чехол, без шерсти.<br>
            Высота: 15 см.<br>
            Жесткость: Жесткий<br>
            Наполнитель: Elioform.<br>
            Чехол: несъемный, viscose, трикотаж.<br>
            Сделано в Италии.
                 </p>
		',
		'attr_cat_product1' => '15 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий',
		'small_img' => '/img/product/very_small/style-6-child.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img' => '/img/product/big/style-6-child.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'attr' => '
		<style>
				#breadcrumbs{
					background-image: url(/img/style_250.png);
					height: 250px;
				}
		</style>
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 15см</li><li>Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--Жесткий--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 10 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINO-BAMBOO/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
				<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Настоящий ортопедический матрас. Европейские и Российские сертификаты качества.</div></li>
				<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
				<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
				<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
				<li class="hnb_liwhite">Качественный итальянский матрас <div class="hnb_marg">Изготовлен именно в Италии на заводе в Прато.</div></li>
			</ul>
			<div class="hnb_contcenter">
					<h2>КОЛЛЕКЦИЯ МАТРАСОВ STILE</h2>

					Ортопедический матрас STILE – это новинка фабрики Magniflex, способная удовлетворить запросы самых взыскательных и капризных покупателей.
<br><br>
Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид.
<br><br>
Белоснежный чехол матраса выполнен из материала вискоза.
Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
<br><br>
Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
<br><br>
Матрас Stile – это упругий матрас, по жесткости похожий на легендарную модель Merino Merinos (S model). Является усовершенствованной моделью. Не содержит шерсти и имеет одинаковый чехол и жесткость с обеих сторон. Обеспечивает усиленную поддержку спины и позвоночника.
<br><br>
Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
<br><br>
<img style="width:40%;" src="/img/product/big/stile-6.jpg">
<br><br>
<div class="hnb_opis_sostava">
<span>STILE 6:</span>
	<div class="ama_fix_this">
		<p>
		Высота матраса 15 см.<br>
		Жесткий Усиленная поддержка спины.
		</p>
		<div class="ama_comfort_parts ama_fix_part">
        <ul>
            <li>
                <p>Viscose</p>
                <br>
                <a href="/production/Viscose/" target="_blank"><img title="Viscose" src="/img/viscosa.png" alt="Viscose" width="180"></a>
            </li>
            <li>
                <p>Elioform</p>
                <br>
                <a href="/production/Memoform-Magnifoam/" target="_blank"><img title="Viscose" src="/img/Elioform.png" alt="Elioform" width="180"></a>
            </li>
        </ul>
    </div>
		<div class="ama_fix_part">
			<img itemprop="image" src="/img/layer/layer-slite6.png">
			<ul>
				<li>•	Чехол: вискоза Viscose.</li>
				<li>•	Слой в чехле:  hypoallergenic fiber (гипоалергенная фибра).</li>
				<li>•	Слой Elioform.</li>
				<li>•	Основной слой: Elioform 13 cm.</li>
			</ul>
		</div>

	</div>
<div style="clear:both;"></div>
</div>
<div style="text-align:left;">
Гарантированный срок службы: 10 лет.<br>
Поставляется в рулоне в вакуумной упаковке.<br>
Сертифицировано ведущими организациями мира. Продается в 98 странах, на 5 континентах.
</div>
				</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Stile' ,
		'cycle-name' => '	Ортопедический матрас Stile 6',
		'sizes' => array(
			array('60x120',10400.00),
			array('70x140',14000.00),
			array('80x190',21600.00),
			array('80x200',22700.00),
			array('90x190',24400.00),
			array('90x200',25400.00),
		 ),
		 'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
	 ),
	array(
		'address' => 'Stile-7-childrens',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', '80x160', 'height-20', 'children-stile7', 'razmer5','ortoped','vacu','podrostkovue-matrasy'),
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Детский матрас Stile 7 ',
		'title' => 'Матрасы Stile 7 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 7. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Stile 7, magniflex, merino',
		'small_desc' => '
        <span class="hnb_popular">
        Повышенный комфорт
        </span>
			<p class="hnb_harek">
			Натуральные материалы, нежный и мягкий трикотажный чехол, без шерсти.<br>
Высота: 18 см.<br>
Жесткость: Жесткий<br>
Наполнитель: Elioform.<br>
Чехол: несъемный, viscose, трикотаж.<br>
Сделано в Италии
                 </p>
		',
		'attr_cat_product1' => '18 см',
		'attr_cat_product2' => 'Несъемный Viscose',
		'attr_cat_product3' => 'Жесткий',
		'small_img' => '/img/product/very_small/style-7-child.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img' => '/img/product/big/style-7-child.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'attr' => '
		<style>
				#breadcrumbs{
					background-image: url(/img/style_250.png);
					height: 250px;
				}
		</style>
			<ul><li>
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li>Высота: 18см</li><li>Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--Жесткий--></li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li>Срок службы: не менее 10 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINO-BAMBOO/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
				<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Настоящий ортопедический матрас. Европейские и Российские сертификаты качества.</div></li>
				<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
				<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
				<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
				<li class="hnb_liwhite">Качественный итальянский матрас <div class="hnb_marg">Изготовлен именно в Италии на заводе в Прато.</div></li>
			</ul>
			<div class="hnb_contcenter">
					<h2>КОЛЛЕКЦИЯ МАТРАСОВ STILE</h2>
					Ортопедический матрас STILE – это новинка фабрики Magniflex, способная удовлетворить запросы самых взыскательных и капризных покупателей.
<br><br>
Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид.
<br><br>
Белоснежный чехол матраса выполнен из материала вискоза.
Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
<br><br>
Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
<br><br>
Матрас Stile – это упругий матрас, по жесткости похожий на легендарную модель Merino Merinos (S model). Является усовершенствованной моделью. Не содержит шерсти и имеет одинаковый чехол и жесткость с обеих сторон. Обеспечивает усиленную поддержку спины и позвоночника.
<br><br>
Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
<br><br>
<img style="width:40%;" src="/img/product/big/stile-6.jpg">
<br><br>
<div class="hnb_opis_sostava">
<span>STILE 7:</span>
	<div class="ama_fix_this">
		<p>
		Высота матраса 18 см.<br>
		Жесткий Усиленная поддержка спины.
		</p>
		<div class="ama_comfort_parts ama_fix_part">
        <ul>
            <li>
                <p>Viscose</p>
                <br>
                <a href="/production/Viscose/" target="_blank"><img title="Viscose" src="/img/viscosa.png" alt="Viscose" width="180"></a>
            </li>
            <li>
                <p>Elioform</p>
                <br>
                <a href="/production/Memoform-Magnifoam/" target="_blank"><img title="Viscose" src="/img/Elioform.png" alt="Elioform" width="180"></a>
            </li>
        </ul>
    </div>
		<div class="ama_fix_part">
			<img itemprop="image" src="/img/layer/layer-slite6.png">
			<ul>
				<li>•	Чехол: вискоза Viscose.</li>
				<li>•	Слой в чехле:  hypoallergenic fiber (гипоалергенная фибра).</li>
				<li>•	Слой Elioform.</li>
				<li>•	Основной слой: Elioform 16 cm.</li>
			</ul>
		</div>
	</div>
<div style="clear:both;"></div>
</div>
<div style="text-align:left;">
Гарантированный срок службы: 10 лет.<br>
Поставляется в рулоне в вакуумной упаковке.<br>
Сертифицировано ведущими организациями мира. Продается в 98 странах, на 5 континентах.
</div>
				</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Stile' ,
		'cycle-name' => 'Ортопедический матрас Stile 7',
		'sizes' => array(
			array('80x160',20100.00),
			array('80x190',23800.00),
			array('80x200',25200.00),
			array('90x190',26900.00),
			array('90x200',28300.00),
		),
		'discount_koef' => array('date_start' => '04.03.2019', 'date_end' => '31.05.2019', 'price_koef' => 0.1),
	),
	/* подушки */
	array(
		'address' => 'RELAXSAN',
		'parent_address' => 'pillows/vacuum_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array('forma-klasicheska','collectio_relaxsan','pillows-filter','orthopedic_pillows', 'vacuum_pillows'),
		'parent_name' => 'Вакуумные подушки',
		'name' => 'Классическая подушка Relaxsan',
		'title' => 'Подушка Relaxsan, большой выбор ортопедических подушек в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить подушку Relaxsan. Ортопедическая подушка обладает релаксирующим действием и способствует принятию правильного положения головы и шейных позвонков.',
		'keywords' => 'подушка, relaxsan',
		'span_title' => 'вакуумная упаковка',		
		'small_desc' => '
			<span class="hnb_popular">
			классическая
			</span>
			<p class="hnb_harek">
			Вакуумная упаковка, классическая форма,  превосходные антиаллергенные свойства.<br>
			Материал: Fiber <br>
			Размеры: 40х70 см<br>
			Чехол: 100% натуральный хлопок<br>
			Сделано в Италии.
							 </p>
		',
		'attr_cat_product1' => 'Fiber ',
		'attr_cat_product2' => '100% Натуральный хлопок',
		'attr_cat_product3' => '40х70 см',
		'small_img' => '/img/product/very_small/Relaxsan.jpg',
		'small_img_alt' => 'подушка Relaxsan',
		'img' => '/img/product/big/Relaxsan.jpg',
		'img_alt' => 'подушка Relaxsan',		
		'attr_cover_product' => 'Хлопковое покрытие растительного происхождения с его гигроскопическими, антистатическими и дышащими свойствами мягкое на ощупь и комфортное, способствует хорошему потоотделению кожи, чтобы дать вам по-настоящему освежающий отдых.',
		'attr_padding_product' => '	Гусиный пух, содержащийся внутри, благодаря своему химическому и физическому составу обладает способностью поддерживать устойчивый микроклимат для организма. Фактически, он может удерживать в себе большое количество воздуха и, таким образом, поддерживать постоянную температуру тела.',
		'attr_comfort_product' => '',
		'attr_drape_product' => '',
		'attr_layer_product' => '',
		'image_composition' => '/img/Piuma.jpg',
		'block_attr_collections' => 'Piuma',
		'block_attr_materials' => 'Гусиный пух',
		'block_attr_coating' => '100% хлопок',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Поддержка шеи и плеч',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '40 х 70 х 10 см',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'attr' => '
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размеры: 40 х 70 х 10 см. Вес: 750г. </li><li>Уровень комфорта: комфортный</li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a></li><li>Срок службы: не менее 12 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/vacuum_pillows/RELAXSAN/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель RelaxSan. Антиаллергенная, антибактериальная, недеформируемая</div></li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Классическая форма<div class="hnb_marg">Релаксирующее действие, способствует принятию идеального положения головы и шейных позвонков<div></li>
			<li class="hnb_ligray">Хлопок <div class="hnb_marg">В состав подушки входит натуральный хлопок</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлен именно в Италии на заводе в Прато</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Ортопедическая подушка Relaxsan</h3>
				<strong><i>Поставляется в вакуумной упаковке</i></strong>
				<p>
                Ортопедическая подушка Magniflex Relaxsan классической формы обладает релаксирующим действием, способствует принятию идеального "ортопедического" положения головы и шейных позвонков. Благодаря своей структуре подушка "дышит" и хорошо приспосабливается к форме головы. <br />
                Внутренняя часть подушки представляет собой ортопедическое основание, окруженное полифибровыми волокнами. После пропитки натуральным латексом основание и волокна приобретают упругие и прочные свойства. Подушка обладает замечательным свойством - она не сбивается, как пуховая. Идеально подходит тем людям, кто привык спать на самых "обычных" подушках и кому сложно привыкнуть к новым "латексным" и/или с эффектом "памяти".<br /> 
                Подушка не вызывает аллергии и не теряет своих уникальных свойств даже после стирки в стиральной машине. Наволочка несъемная - стирается вместе с подушкой.<br />
                Ортопедическая подушка Relaxsan рекомендована детям, лицам, страдающим остеохондрозом шейного отдела позвоночника, аллергическими реакциями, и всем, кому важен здоровый сон.<br />
                Relaxsan - торговая марка, принадлежащая компании Magniflex.
				</p>
				</div>
				<div class="coin-slider">
					<img src="/img/products/pillows/relaxsan_01.jpg" alt="подушка Relaxsan Magniflex">
				</div>
			</div>

			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Вакуумная упаковка</h3>
					<img class="two-width" src="/img/products/pillows/relaxsan_02.jpg" alt="подушка Relaxsan Magniflex в вакуумной упаковке">
					<p class="text-jus">
					Подушка поставляется в вакуумной упаковке, гарантирующей высочайший уровень гигиены и легкость транспортировки до дома.
            		</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3>Натуральный состав</h3>
					<p class="text-jus">
					Натуральные компаненты: 100% натуральный хлопок и полифибровые волокна. 
					</p>
				</div>
			</div>
	
			</div>
		',
		'composition' => '
			<div class="ama_pillow_desk_block">
				<a href="/production/Cotton/"><img src="/img/cotton_new.jpg" alt="100% натуральный хлопок"></a>
				<a href="/production/Cotton/"><p>100% натуральный хлопок</p></a>
			</div>
			<div class="ama_pillow_desk_block">
				<a href="/production/Rolloboules-fibre/"><img src="/img/Rolloboules_fibre.png" alt="Технология Rolloboules fibre"></a>
				<a href="/production/Rolloboules-fibre/"><p>Rolloboules fibre</p></a>
			</div>
		',
		'recommend' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
						<br>

			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			Ортопедическая подушка Magniflex Relaxsan рекомендована детям, лицам, страдающим остеохондрозом шейного отдела позвоночника, аллергическими реакциями, и всем, кому важен здоровый сон.
			<br><br>

				</div>
			</div>
		',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 98 странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 98 странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '
			<div class="hnb_contlef">
					<img width="280" src="/img/otzyvy-01.jpg" height="196" title="Реальные отзывы покупателей матрасов Магнифлекс">
					<br>Ни одного отрицательного отзыва!
			</div>
			<div class="hnb_contrig">В России ортопедические матрасы Magniflex представлены с 1992 года, за все это время нами не было зафиксировано ни одного отрицательного отзыва или рецензии о нашей продукции. Не смотря на жесточайший контроль качества отгружаемого товара, у нас, как и у любой компании, случаются &nbsp;продажи матрасов с наличием производственных дефектов, однако такой товар мы незамедлительно меняем на новый идеального качества, кроме того процент таких случаев крайне мал - менее 0,01% от общего объема продаж.
			<br><br>
			Нашей службой контроля качества продукции были зафиксированы два случая негативных отзывов в интернете о матрасах Magniflex. Первый, связанный с наличием посторонних запахов, расследовать не удалось, поскольку отзыв был написан человеком, купившим ортопедический матрас на территории Украины, а во-втором, женщина, жаловалась на чувство крайнего дискомфорта во время ночного сна на матрасе, однако в этом случае речь, вероятно, шла о ненастоящем матрасе Magniflex, поскольку сам матрас был куплен не у официального представителя компании. В связи с этим случаем, хотим в очередной раз предостеречь потребителей: приобретайте настоящие итальянские ортопедические матрасы Magniflex ИСКЛЮЧИТЕЛЬНО через официальное представительство или у наших дилеров! Кроме нас никто не может продавать матрасы Magniflex на территории  Российской Федерации! Купленный в другом месте матрас - 100% подделка!
			<br><br>
			<b> Отзывы покупателей</b><br><br>

			<i>"... Огромная просьба, поставьте меня в очередь на божественную подушку Релаксан. Моей любимой подушке видимо пошел 13 год - износилась(((. Спасайте!!! на других спаь не могу.
			<br><br>
			Яна"</i><br><br>
			</div>
		',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		//'available' => array(
			//'status' => false,
			//'msg_category' => 'предзаказ',
			//'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии, ориентировочные сроки поставки: 10.05.2016</span>',
		//),
		'price' => 3000,
	),
	
	array(
		'address' => 'FreshGel+Wave',
		'parent_address' => 'pillows/orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-oholojdaushim-effektom', 'forma-wolna', 'chehol-viscose','collectio_freshgel','pillows-filter','orthopedic_pillows','material-memogel','gelevye-podushki'),
		'parent_name' => 'Гелевые подушки',
		'name' => 'Ортопедическая подушка FreshGel Wave',
		'title' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Wave в официальном интернет-магазине Magniflex ',
		'description' => 'Описание, фотографии, состав гелевой подушки с эффектом памяти Magniflex FreshGel Wave',
		'keywords' => 'гелевая подушка, подушка с эффектом памяти, итальянская подушка',
		'small_desc' => '
			<span class="hnb_popular">
			гелевая
			</span>
			<p class="hnb_harek">
			Ортопедическая, эргономичный дизайн, охлаждающий эффект <br>
			Материал: Memogel<br>
			Размеры: 60x43x11/10 см<br>
			Чехол: съемный, Viscosa<br>
			Сделано в Италии.
                 </p>
		',
		'attr_cat_product1' => 'Memogel',
		'attr_cat_product2' => 'Cъемный, Viscosa',
		'attr_cat_product3' => '60x43x11/10 см',
		'small_img' => '/img/product/very_small/FreshGel Wave.jpg',
		'small_img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Wave',
		'img' => '/img/product/big/FreshGel Wave.jpg',
		'img_preview' => array('/img/product/big/magnigel-deluxe-wave-new-2.jpg', '/img/product/big/magnigel-deluxe-wave-new-3.jpg', '/img/product/big/magnigel-deluxe-wave-new-4.jpg'),
		'img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Wave',		
		'attr_cover_product' => 'Невероятно мягкий и шелковистый на ощупь вискозный чехол обладает отличной способностью рассеивать пот, обеспечивая тем самым воздухопроницаемость и сухость. Кроме того, он легко снимается и моется.',
		'attr_padding_product' => '	Пространство внутри в Magnigel Foam обеспечивает улучшенную воздухопроницаемость и стабилизирует температуру подушки для отдыха, который всегда прохладный и сухой. Двухволновая форма идеально подходит для искривления шеи и мягко облегчает затылок, обеспечивая правильную опору для плеч и шейного отдела.',
		'attr_comfort_product' => '',
		'attr_drape_product' => 'Защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Cuscino-New-Magnigel-deluxe-wave.jpg',
		'block_attr_collections' => 'Magnigel',
		'block_attr_materials' => 'Magnigel Foam',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Поддержка шеи и плеч',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '72x42x12 cм',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'attr' => '
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li>
			<li>Размер: 60x43x11/10 см</li>
			<li>Уровень комфорта: Умеренно мягкий, упругая подушка.</li>
			<li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a></li>
			<li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/gelevye-podushki/FreshGel+Wave/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель FreshGel Wave, гелевая, охлаждающий эффект</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Magnigel Foam</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Ортопедическая подушка Memoform Superiore Deluxe Comfort</h3>
				<strong><i>Ортопедическая подушка волнообразной формы с фиксацией шеи</i></strong>

					<p>Подушка Memoform Superiore Deluxe Comfort — улучшенный вариант популярной модели Comfort.

					Специальная форма подушки предназначена для улучшения притока крови к голове, ведь как известно, из-за плохой циркуляции по сосудам и возникает головная боль. 
					У человека, спящего на подушке, затылок слегка запрокинут назад, что обеспечивает приток крови к голове без перенасыщения или недостатка. В результате, человек лучше высыпается, просыпается по утрам бодрым и со свежей, легкой головой. Подушка идеально подойдет тем, кто имеет травмы или у кого есть потребность в фиксации шеи или затылочной части головы. На Memoform Superiore Deluxe Comfort можно спать и на боку, но максимальный эффект достигается именно в положении на спине.
					<br/>
					Компактный размер подушки делает ее транспортабельной, удобной для использования в транспорте или на диване при просмотре телепередач.
					<br/>

					Подушка сертифицирована в Европе в качестве "Medical device" - изделия медицинского назначения.

					</p>
					
					

				</div>
				<div class="coin-slider">
					<img src="/img/collections/collection-magnigel.jpg" alt="Коллекция матрасов и подушек FreshGel MagniGel">
				
				</div>
			</div>

			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Чехол и Материалы</h3>
					<img class="two-width" src="/img/outlastpo.jpg">
					<p class="text-jus">
					Материал подушки - пена Magniflex Memoform Airyform, инновационная разработка, гарантирующая высокий уровень циркуляции воздуха, анатомичность, гипоалергенность и защиту от пылевых клещей.
					<br/>
					Чехол съемный, на молнии, легко поддается химчистке. Space technologies и Магнифлекс представили для данной подушки самую последнюю разработку в области материалов и тканей чехлов - outlast. "Аутласт" не имеет на данный момент аналогов в мире и позволяет сохранять идеальную и комфортную температуру на поверхности подушки. Благодаря функции теплообмена имеет возможность нагревать или охлаждать поверхность. Данная разработка использовалась до недавнего времени только в скафандрах космонавтов для защиты от сильных температурных перепадов. На сегодня это способ сделать сон наиболее качественным и здоровым!
					</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3> Подойдет даже самым маленьким</h3>
					<img src="/img/pillow_for_child.jpg" alt="#">
					<p class="text-jus">
                    Подходит для детей: благодаря своему небольшому размеру и высоте - это отличный вариант научить Вашего ребенка спать правильно, что послужит залогом крепкого здоровья в будущем.
					</p>
				</div>
			</div>
	
			</div>
		',
		'composition' => '
			<div class="ama_pillow_desk_block">
				<a href="/production/Viscose/"><img src="/img/viscose-newg.jpg" alt="Maedical"></a>
				<a href="/production/Viscose/"><p>Viscose</p></a>
			</div>
			<div class="ama_pillow_desk_block">
				<a href="#"><img src="/img/magnigel-foam.png" alt="Menogel"></a>
				<a href="#"><p>Memogel</p></a>
			</div>
		',
		'recommend' => '',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 98 странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 98 странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			Подробную информацию о сертификатах продукции можно узнать по ссылке.<br><br>
				</div>
			</div>
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		'price' => 11600.00,
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '10.01.2019', 'price_koef' => 0.3, ), //скидка
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 4950,
		//), //скидка
	),
	array(
		'address' => 'MAGNIGEL-DELUXE-STANDARD',
		'parent_address' => 'pillows/orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-oholojdaushim-effektom', 'forma-klasicheska', 'chehol-viscose','collectio_freshgel','pillows-filter','orthopedic_pillows','material-memogel', 'gelevye-podushki'),
		'parent_name' => 'Гелевые подушки',
		'name' => 'Ортопедическая подушка MAGNIGEL DELUXE STANDARD',
		'title' => 'Гелевая подушка с эффектом памяти Magniflex MAGNIGEL DELUXE STANDARD в официальном интернет-магазине Magniflex ',
		'description' => 'Описание, фотографии, состав гелевой подушки с эффектом памяти Magniflex MAGNIGEL DELUXE STANDARD',
		'keywords' => 'гелевая подушка, подушка с эффектом памяти, итальянская подушка',
		'small_desc' => '
			<span class="hnb_popular">
			гелевая
			</span>
			<p class="hnb_harek">
			Ортопедическая, классическая форма, охлаждающий эффект <br>
			Материал: Memogel<br>
			Размеры: 72x42x12 см<br>
			Чехол: съемный, Viscosa<br>
			Сделано в Италии.
                 </p>
		',
		'attr_cat_product1' => 'Memogel',
		'attr_cat_product2' => 'Cъемный, Viscosa',
		'attr_cat_product3' => '72x42x12 см',
		'small_img' => '/img/product/very_small/magnigel-deluxe-standard-001.jpg',
		'img_preview' => array('/img/product/big/magnigel-deluxe-standard-new-2.jpg', '/img/product/big/magnigel-deluxe-standard-new-3.jpg', '/img/product/big/magnigel-deluxe-standard-new-4.jpg', '/img/mailservice_teret.jpg'),
		'small_img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Standard',
		'img' => '/img/product/magnigel-deluxe-standard-001.jpg',
		'img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Standard',
		'attr_cover_product' => 'Невероятно мягкий и шелковистый на ощупь вискозный чехол обладает отличной способностью рассеивать пот, обеспечивая тем самым воздухопроницаемость и сухость. Кроме того, он легко снимается и моется.',
		'attr_padding_product' => '	Пространство внутри Magnigel Foam мягко поддерживает шею и плечи и обеспечивает лучшую воздухопроницаемость. Благодаря своим внутренним свойствам стабилизирует температуру подушки, обеспечивая всегда прохладный и сухой отдых. ',
		'attr_comfort_product' => '',
		'attr_drape_product' => 'Защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => '',
		'image_composition' => '/img/cuscino-new-magnigel-deluxe.jpg',
		'block_attr_collections' => '',
		'block_attr_materials' => 'Magnigel Foam',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Поддержка шеи и плеч',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'attr' => '
		<style>
		#breadcrumbs {
			background-image: url(/img/fresh-gel.jpg);
			height: 250px;
		}
		</style>
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размер: 72x42x12 см</li><li>Уровень комфорта: Умеренно мягкий, упругая подушка.</li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a></li><li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/gelevye-podushki/FreshGel+Standart/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель FreshGel Standart, гелевая, с охлаждающим эффектом</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Magnigel Foam</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Ортопедическая подушка Memoform Superiore Deluxe Comfort</h3>
				<strong><i>Ортопедическая подушка волнообразной формы с фиксацией шеи</i></strong>

					<p>Подушка Memoform Superiore Deluxe Comfort — улучшенный вариант популярной модели Comfort.

					Специальная форма подушки предназначена для улучшения притока крови к голове, ведь как известно, из-за плохой циркуляции по сосудам и возникает головная боль. 
					У человека, спящего на подушке, затылок слегка запрокинут назад, что обеспечивает приток крови к голове без перенасыщения или недостатка. В результате, человек лучше высыпается, просыпается по утрам бодрым и со свежей, легкой головой. Подушка идеально подойдет тем, кто имеет травмы или у кого есть потребность в фиксации шеи или затылочной части головы. На Memoform Superiore Deluxe Comfort можно спать и на боку, но максимальный эффект достигается именно в положении на спине.
					<br/>
					Компактный размер подушки делает ее транспортабельной, удобной для использования в транспорте или на диване при просмотре телепередач.
					<br/>

					Подушка сертифицирована в Европе в качестве "Medical device" - изделия медицинского назначения.

					</p>
					
					

				</div>
				<div class="coin-slider">
					<img src="/img/Memoform_Standard_Classico.jpg" alt="">
				
				</div>
			</div>

			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Чехол и Материалы</h3>
					<img class="two-width" src="/img/outlastpo.jpg">
					<p class="text-jus">
					Материал подушки - пена Magniflex Memoform Airyform, инновационная разработка, гарантирующая высокий уровень циркуляции воздуха, анатомичность, гипоалергенность и защиту от пылевых клещей.
					<br/>
					Чехол съемный, на молнии, легко поддается химчистке. Space technologies и Магнифлекс представили для данной подушки самую последнюю разработку в области материалов и тканей чехлов - outlast. "Аутласт" не имеет на данный момент аналогов в мире и позволяет сохранять идеальную и комфортную температуру на поверхности подушки. Благодаря функции теплообмена имеет возможность нагревать или охлаждать поверхность. Данная разработка использовалась до недавнего времени только в скафандрах космонавтов для защиты от сильных температурных перепадов. На сегодня это способ сделать сон наиболее качественным и здоровым!
					</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3> Подойдет даже самым маленьким</h3>
					<img src="/img/pillow_for_child.jpg" alt="#">
					<p class="text-jus">
                    Подходит для детей: благодаря своему небольшому размеру и высоте - это отличный вариант научить Вашего ребенка спать правильно, что послужит залогом крепкого здоровья в будущем.
					</p>
				</div>
			</div>
	
			</div>
		',
		'composition' => '
			<div class="ama_pillow_desk_block">
				<a href="/production/Viscose/"><img src="/img/viscose-newg.jpg" alt="Maedical"></a>
				<a href="/production/Viscose/"><p>Viscose</p></a>
			</div>
			<div class="ama_pillow_desk_block">
				<a href="#"><img src="/img/magnigel-foam.png" alt="Menogel"></a>
				<a href="#"><p>Memogel</p></a>
			</div>
		',
		'recommend' => '',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Подушки Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 98 странах мира!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 98 странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		'price' => 12400.00,
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '10.01.2019', 'price_koef' => 0.3 ), //скидка
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 5500,
		//), //скидка
	),
	array(
		'address' => 'MEMOFORM-MAXI-CLASSICO',
		'parent_address' => 'pillows/orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-oholojdaushim-effektom', 'forma-klasicheska', 'chehol-viscose','collectio_freshgel','pillows-filter','orthopedic_pillows','material-memoform', 'gelevye-podushki'),
		'parent_name' => 'Гелевые подушки',
		'name' => 'Ортопедическая подушка MEMOFORM MAXI CLASSICO',
		'title' => 'Гелевая подушка с эффектом памяти Magniflex MEMOFORM MAXI CLASSICO в официальном интернет-магазине Magniflex ',
		'description' => 'Описание, фотографии, состав гелевой подушки с эффектом памяти Magniflex MEMOFORM MAXI CLASSICO',
		'keywords' => 'гелевая подушка, подушка с эффектом памяти, итальянская подушка',
		'small_desc' => '
			<span class="hnb_popular">
			гелевая
			</span>
			<p class="hnb_harek">
			Ортопедическая, классическая форма, охлаждающий эффект <br>
			Материал: Memogel<br>
			Размеры: 72x42x15 см<br>
			Чехол: съемный, Viscosa<br>
			Сделано в Италии.
                 </p>
		',
		'attr_cat_product1' => 'Memoform Airyform',
		'attr_cat_product2' => 'Cъемный на молнии, Viscose',
		'attr_cat_product3' => '72x42x15 см.',
		'small_img' => '/img/product/very_small/Memoform Maxi Classico 1.jpg',
		'img_preview' => array(''),
		'small_img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Standard',
		'img' => '/img/product/Memoform Maxi Classico 1.jpg',
		'img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Standard',		
		'attr_cover_product' => 'Невероятно мягкий и шелковистый на ощупь вискозный чехол обладает отличной способностью рассеивать пот, обеспечивая тем самым сухость и воздухопроницаемость. Кроме того, он легко снимается и моется.',
		'attr_padding_product' => '	Пространство внутри в Memoform предназначен для реагирования на вес шеи, головы и плеч, предлагая приятное ощущение легкости во время отдыха.',
		'attr_comfort_product' => '',
		'attr_drape_product'=> 'Защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => 'Воздушный дизайн подушки обеспечивает идеальную воздухопроницаемость и оптимальное рассеивание влаги и тепла благодаря отверстиям в середине.',
		'image_composition' => '/img/Abbraccio-maxi.jpg',
		'block_attr_collections' => 'Classico',
		'block_attr_materials' => 'Memoform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Поддержка шеи и плеч',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '72x42x15 см',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'attr' => '
		
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размер: 72x42x15 см</li><li>Уровень комфорта: Умеренно мягкий, упругая подушка.</li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a></li><li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/gelevye-podushki/FreshGel+Standart/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель FreshGel Standart, гелевая, с охлаждающим эффектом</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Magnigel Foam</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Ортопедическая подушка Memoform Superiore Deluxe Comfort</h3>
				<strong><i>Ортопедическая подушка волнообразной формы с фиксацией шеи</i></strong>

					<p>Подушка Memoform Superiore Deluxe Comfort — улучшенный вариант популярной модели Comfort.

					Специальная форма подушки предназначена для улучшения притока крови к голове, ведь как известно, из-за плохой циркуляции по сосудам и возникает головная боль. 
					У человека, спящего на подушке, затылок слегка запрокинут назад, что обеспечивает приток крови к голове без перенасыщения или недостатка. В результате, человек лучше высыпается, просыпается по утрам бодрым и со свежей, легкой головой. Подушка идеально подойдет тем, кто имеет травмы или у кого есть потребность в фиксации шеи или затылочной части головы. На Memoform Superiore Deluxe Comfort можно спать и на боку, но максимальный эффект достигается именно в положении на спине.
					<br/>
					Компактный размер подушки делает ее транспортабельной, удобной для использования в транспорте или на диване при просмотре телепередач.
					<br/>

					Подушка сертифицирована в Европе в качестве "Medical device" - изделия медицинского назначения.

					</p>
					
					

				</div>
				<div class="coin-slider">
					<img src="/img/Memoform_Standard_Classico.jpg" alt="">
				
				</div>
			</div>

			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Чехол и Материалы</h3>
					<img class="two-width" src="/img/outlastpo.jpg">
					<p class="text-jus">
					Материал подушки - пена Magniflex Memoform Airyform, инновационная разработка, гарантирующая высокий уровень циркуляции воздуха, анатомичность, гипоалергенность и защиту от пылевых клещей.
					<br/>
					Чехол съемный, на молнии, легко поддается химчистке. Space technologies и Магнифлекс представили для данной подушки самую последнюю разработку в области материалов и тканей чехлов - outlast. "Аутласт" не имеет на данный момент аналогов в мире и позволяет сохранять идеальную и комфортную температуру на поверхности подушки. Благодаря функции теплообмена имеет возможность нагревать или охлаждать поверхность. Данная разработка использовалась до недавнего времени только в скафандрах космонавтов для защиты от сильных температурных перепадов. На сегодня это способ сделать сон наиболее качественным и здоровым!
					</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3> Подойдет даже самым маленьким</h3>
					<img src="/img/pillow_for_child.jpg" alt="#">
					<p class="text-jus">
                    Подходит для детей: благодаря своему небольшому размеру и высоте - это отличный вариант научить Вашего ребенка спать правильно, что послужит залогом крепкого здоровья в будущем.
					</p>
				</div>
			</div>
	
			</div>
		',
		'composition' => '
			<div class="ama_pillow_desk_block">
				<a href="/production/Viscose/"><img src="/img/viscose-newg.jpg" alt="Maedical"></a>
				<a href="/production/Viscose/"><p>Viscose</p></a>
			</div>
			<div class="ama_pillow_desk_block">
				<a href="#"><img src="/img/magnigel-foam.png" alt="Menogel"></a>
				<a href="#"><p>Memogel</p></a>
			</div>
		',
		'recommend' => '',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Подушки Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 98 странах мира!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 98 странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		'price' => 13200.00,
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '10.01.2019', 'price_koef' => 0.3 ), //скидка
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 5500,
		//), //скидка
	),
	array(
		'address' => 'SUSHI-PICCOLO',
		'parent_address' => 'pillows/orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-oholojdaushim-effektom', 'forma-klasicheska', 'chehol-viscose','collectio_freshgel','pillows-filter','orthopedic_pillows','material-memoform'),
		
		'name' => 'Подушка для путешествий SUSHI PICCOLO',
		'title' => 'Ортопедическая подушка SUSHI PICCOLO для путешествий с эффектом памяти',
		'description' => 'Описание, фотографии, состав тонкой ортопедическая подушка SUSHI PICCOLO для путешествий с эффектом памяти',
		'keywords' => 'подушка для путешествий, взять с собой в дорогу, ортопедическая подушка, подушка с эффектом памяти, итальянская подушка',
		'span_title' => 'возьми с собой',		
		'small_desc' => '
			<span class="hnb_popular">
			гелевая
			</span>
			<p class="hnb_harek">
			Ортопедическая, классическая форма, охлаждающий эффект <br>
			Материал: Memogel<br>
			Размер: 42х23х11, с чехлом: 55х29х11 см<br>
			Чехол: съемный, Viscosa<br>
			Сделано в Италии.
                 </p>
		',
		'attr_cat_product1' => 'Memoform Airyform',
		'attr_cat_product2' => 'Несъемный, Viscose',
		'attr_cat_product3' => '42х23х11 см',
		'small_img' => '/img/product/very_small/Sushi Piccolo1.jpg',
		'img_preview' => array('/img/Sushi Piccolo2.jpg','/img/Sushi Piccolo3.jpg','/img/Sushi Piccolo4.jpg'),
		'small_img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Standard',
		'img' => '/img/product/Sushi Piccolo1.jpg',
		'img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Standard',	
		'attr_cover_product_title' =>'Чехол из Viscose Magniflex',	
		'attr_cover_product' => '«Искусственный шелк»  - невероятно приятный на ощупь материал, получаемый из натуральной очищеной древесной целлюлозы. Обеспечивает высокую воздухопроницаемость, отличные гигроскопичные свойства, быстро впитывая (в два раза быстрее хлопка) и испаряя лишнюю влагу и капельки пота. Чехол на молнии — легко снимается и моется.',
		'attr_padding_product_title' => 'Технология Airyform',
		'attr_padding_product' => 'Гарантия высочайшей воздухопроницаемости. Позволяет подушке «дышать».',
		'attr_comfort_product_title' =>'Memoform Airyform. Эффект «памяти»',
		'attr_comfort_product' => 'Материал Memoform Airyform вязко-эластичный, обладающий памятью формы, позволяет обеспечить идеальную поддержку головы и шеи индивидуально для каждого, благодаря выраженному анатомическому эффекту. Отличие материала memoform airyform Magniflex от других аналогов больше всего проявляется в мягкости материала - в продаже редко можно встретить такой приятный на ощупь, нежный и в то же время плотный упругий материал.',
		'attr_layer_product_title' => 'Защитная ткань',
		'attr_layer_product' => 'Предохраняет подушку во время транспортировки и хранения',
		'image_composition' => '/img/Sushi Piccolo5.jpg',
		'block_attr_collections' => '',
		'block_attr_materials' => 'Magnigel Foam',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Поддержка шеи и плеч',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'video_for_desc' => '
		<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/Sushi Pillow by Magniflex - подушка суши для дороги.mp4" type="video/mp4;" />
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
		
			<ul><li>СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li><li><b>Размер</b>: 42х23х11, <b>с чехлом</b>: 55х29х11 см</li><li>Умеренно мягкая ортопедическая подушка с эффектом «памяти», скручивается в рулон, очень удобна в путешествиях</li><li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/gelevye-podushki/FreshGel+Standart/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель FreshGel Standart, гелевая, с охлаждающим эффектом</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Magnigel Foam</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Ортопедическая подушка SUSHI PICCOLO <br/>Незаменима в путешествиях</h3>
				<strong><i>Cкручивается в рулон</i></strong>
Sushi Piccolo – подушка для путешествий. Во время путешествий довольно часто возникает вопрос сохранения качественного сна, как у себя дома. Не все подушки, встречающиеся на пути, могут обеспечить привычный уровень комфорта.<br />
Magniflex предлагает отличное решение: подушка, которую можно взять с собой и, которая, имеет минимальные габариты, что даже помещается в ручную кладь. Подушка поставляется в комплекте с чехлом и сумкой. Скручивается в небольшой рулон, застегивается застежкой-липучкой и убирается в сумку для переноски.<br />
Чехол подушки выполнен из материала Viscose. Viscose Magniflex - невероятно приятный на ощупь материал, гарантирующий максимальное расслабление. Подушка подходит для сна в любом положении, на спине, на боку, на животе. Отличное решение для любителей путешествовать.<br /> 


				</div>
				<div class="coin-slider">
					<img src="/img/product/pillow_for_travel_SUSHI.jpg" alt="Итальянская подушка для путешествий и путешественников">
				</div>
			</div>
			

			<div class="common_block_common">
				<div class="half-width">
					<h3>Дышащая, с эффектом «памяти»</h3>
					<img class="two-width" src="/img/Memoform-guanciale.jpg" alt="Memoform Magniflex. Эффект памяти">
					<p class="text-jus">
					Основа подушки - инновационная пена Memoform Airyform, собственная разработка итальянской фабрики Magniflex. Это последнее поколение материала memoform, которое обладает не только перфорацией, но и большим уровнем воздухообмена. Все это позволяет подушке быть "дышащей", а соответственно минимизировать количество пылевых и прочих накоплений, гарантируя чистый свежий и здоровый сон.<br />
                    На ощупь Memoform Airyform вязко-эластичный, он обладает памятью формы, что позволяет обеспечивать поддержку головы и шеи индивидуально для каждого, благодаря выраженному анатомическому эффекту. Отличие материала memoform airyform Magniflex от других аналогов больше всего проявляется в мягкости материала - в продаже редко можно встретить такой приятный на ощупь, нежный и в то же время плотный упругий материал, который обеспечит правильную ортопедическую поддержку и положение.
					</p>
				</div>
				<div class="half-width">
					<h3>Легко складывается. Чехол в комплекте</h3>
					<img src="/img/Sushi-1.gif" alt="Как сложить подушку Magniflex Sushi">
					<p class="text-jus">
                    Подушка Sushi Piccolo создана для того, чтобы ее брать с собой. Легко скручивается в небольшой рулон и убирается в дорожный чехол. Займет минимум места в багаже, поместится в небольшой рюкзачок.
					</p>
				</div>
			</div>

				
			</div>
			
        
		',
	
		'recommend' => '',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Подушки Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
						Сертифицировано в 98 странах мира!
					<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
					Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 98 странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
					<br><br>
				</div>
			</div>
			
		',
		'review' => '',
		
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		'price' => 9000.00,
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '10.01.2019', 'price_koef' => 0.3 ), //скидка
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 5500,
		//), //скидка

		
	),
	array(
		'address' => 'Memoform-Magnigel-Standard',
		'parent_address' => 'pillows/orthopedic_pillows',
		'other_categories' => array( 's-effektom-pamjati', 's-oholojdaushim-effektom', 'forma-klasicheska', 'chehol-viscose','collectio_freshgel','pillows-filter','orthopedic_pillows','material-memogel','gelevye-podushki'),
		'parent_address2' => 'pillows',
		'parent_name' => 'Гелевые подушки',
		'name' => 'Ортопедическая подушка Memoform Magnigel Deluxe Standard',
		'title' => 'Memoform Magnigel Deluxe Standard - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка MemoGel Standard - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'memogel, standard',
		'small_desc' => '
			<span class="hnb_popular">
			эффект "памяти" + гель
			</span>
			<p class="hnb_harek">
			Ортопедическая, двухсторонняя, эффект памяти, охлаждающий эффект <br>
			Материал: Memogel/Memoform Airyform
			Размеры: 72x42x14 см<br>
			Чехол: съемный, Viscosa<br>
			Сделано в Италии.
                 </p>
		',
		'attr_cat_product1' => 'Memogel/Memoform Airyform ',
        'attr_cat_product2' => 'Cъемный, Viscosa',
		'small_img' => '/img/product/new-magnigel-memoform-deluxe-standard (3).jpg',
		'small_img_alt' => '',
		'img' => '/img/product/new-magnigel-memoform-deluxe-standard (3).jpg',
		'img_preview' => array('/img/product/new-magnigel-memoform-deluxe-standard.jpg', '/img/product/new-magnigel-memoform-deluxe-standard (2).jpg', '/img/product/new-magnigel-memoform-deluxe-standard (4).jpg', '/img/mailservice_teret.jpg'),
		'img_alt' => '',
		'attr_cat_product1' => 'Memogel',
		'attr_cat_product2' => 'Cъемный, Viscosa',
		'attr_cat_product3' => '72x42x14 см',
		'attr_cover_product' => 'Невероятно мягкий и шелковистый на ощупь вискозный чехол обладает отличной способностью рассеивать пот, что способствует воздухопроницаемости. Кроме того, он легко снимается и моется.',
		'attr_padding_product' => '	Пространство внутри в Memoform предназначен для реагирования на вес шеи, головы и плеч, предлагая приятное ощущение легкости во время отдыха, в то время как пена Magnigel обеспечивает лучшую воздухопроницаемость, стабилизируя температуру подушки для отдыха, который всегда прохладен. и сухой.',
		'attr_comfort_product' => '',
		'attr_drape_product' => 'Защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => '',
		'image_composition' => '/img/cuscino-New-memnoform-magnigel-deluxe-standard.jpg',
		'block_attr_collections' => 'Magnigel',
		'block_attr_materials' => 'Magnigel Foam',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Поддержка шеи и плеч',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'attr' => '
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размер: 72x42x14 cm</li><li>Уровень комфорта: Двусторонний: Умеренно мягкий, упругая сторона с Magnigel / эффект памяти - сторона с Memoform Airyform</li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a></li><li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/gelevye-podushki/MemoGel+Standart/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель  MemoGel Standart, эффект памяти, охлаждающий эффект, гелевая основа</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Magnigel Foam + MemoForm</div></li>

			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Ортопедическая подушка Memoform Superiore Deluxe Comfort</h3>
				<strong><i>Ортопедическая подушка волнообразной формы с фиксацией шеи</i></strong>

					<p>Подушка Memoform Superiore Deluxe Comfort — улучшенный вариант популярной модели Comfort.

					Специальная форма подушки предназначена для улучшения притока крови к голове, ведь как известно, из-за плохой циркуляции по сосудам и возникает головная боль. 
					У человека, спящего на подушке, затылок слегка запрокинут назад, что обеспечивает приток крови к голове без перенасыщения или недостатка. В результате, человек лучше высыпается, просыпается по утрам бодрым и со свежей, легкой головой. Подушка идеально подойдет тем, кто имеет травмы или у кого есть потребность в фиксации шеи или затылочной части головы. На Memoform Superiore Deluxe Comfort можно спать и на боку, но максимальный эффект достигается именно в положении на спине.
					<br/>
					Компактный размер подушки делает ее транспортабельной, удобной для использования в транспорте или на диване при просмотре телепередач.
					<br/>

					Подушка сертифицирована в Европе в качестве "Medical device" - изделия медицинского назначения.

					</p>
					
					

				</div>
				<div class="coin-slider">
					<img src="/img/Memoform_Standard_Classico.jpg" alt="">
				
				</div>
			</div>

			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Чехол и Материалы</h3>
					<img class="two-width" src="/img/outlastpo.jpg">
					<p class="text-jus">
					Материал подушки - пена Magniflex Memoform Airyform, инновационная разработка, гарантирующая высокий уровень циркуляции воздуха, анатомичность, гипоалергенность и защиту от пылевых клещей.
					<br/>
					Чехол съемный, на молнии, легко поддается химчистке. Space technologies и Магнифлекс представили для данной подушки самую последнюю разработку в области материалов и тканей чехлов - outlast. "Аутласт" не имеет на данный момент аналогов в мире и позволяет сохранять идеальную и комфортную температуру на поверхности подушки. Благодаря функции теплообмена имеет возможность нагревать или охлаждать поверхность. Данная разработка использовалась до недавнего времени только в скафандрах космонавтов для защиты от сильных температурных перепадов. На сегодня это способ сделать сон наиболее качественным и здоровым!
					</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3> Подойдет даже самым маленьким</h3>
					<img src="/img/pillow_for_child.jpg" alt="#">
					<p class="text-jus">
                    Подходит для детей: благодаря своему небольшому размеру и высоте - это отличный вариант научить Вашего ребенка спать правильно, что послужит залогом крепкого здоровья в будущем.
					</p>
				</div>
			</div>
	
			</div>
		',
		'composition' => '
			<div class="ama_pillow_desk_block">
				<a href="/production/Viscose/"><img src="/img/viscose-newg.jpg" alt="Maedical"></a>
				<a href="/production/Viscose/"><p>Viscose</p></a>
			</div>
			<div class="ama_pillow_desk_block">
				<a href="#"><img src="/img/magnigel-foam.png" alt="Menogel"></a>
				<a href="#"><p>Memogel</p></a>
			</div>
			<div class="ama_pillow_desk_block">
				<a href="/production/Memoform-Magnifoam/"><img src="/img/memoform123.png" alt="Memoform Magnifoam"></a>
				<a href="/production/Memoform-Magnifoam/"><p>Мемоформ Магниформ</p></a>
			</div>
		',
		'recommend' => '',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 98 странах мира!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 98 странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
        ',
        'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		// 'sizes' => false,
		// 'price' => 12800.00,
		// 'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.10.2018', 'price_koef' => 0.3 ), //скидка

		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),
	array(
		'address' => 'virtuoso-mallow-standard',
		'parent_address' => 'pillows/orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-effektom-pamjati', 's-oholojdaushim-effektom', 'forma-klasicheska', 'material-mallowfoam', 'chehol-viscose', 'chehol-satin','collectio_virtuoso','pillows-filter','orthopedic_pillows'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Премиальная ортопедическая подушка Virtuoso Mallow Standard',
		'title' => 'Virtuoso Mallow Standard - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Virtuoso Mallow Standard - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'memogel, standard',
		'small_desc' => '
			<span class="hnb_popular">
			Натуральный экстракт мальвы
			</span>
			<p class="hnb_harek">
			Подушка элитного класса, успокаивающий эффект мальвы, эргономичная упругая форма<br>
			Материал: Mallow Foam<br>
			Размеры: 72x42x12 см<br>
			Чехол: съемный, Satin/Viscose<br>
			Сделано в Италии.
                 </p>
		',
		'attr_cat_product1' => 'Memogel/Memoform Airyform',
		'attr_cat_product2' => 'Cъемный, Viscosa',
		'attr_cat_product3' => '72x42x12 см',
		'small_img' => '/img/product/very_small/mallow-standard.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/GUANC VIRTUOSO mallow-5.jpg',
		'img_preview' => array('/img/product/big/GUANC VIRTUOSO mallow-7.jpg', '/img/product/big/GUANC VIRTUOSO mallow-9.jpg'),
		'img_alt' => '',		
		'attr_cover_product' => 'Крышка из вискозы Satin сочетает в себе свойства вискозы, которая невероятно мягкая и шелковистая на ощупь, с качествами сатина, блестящего и элегантного материала. Вместе они отлично рассеивают пот тела, делая подушку удивительно дышащей. Кроме того, он легко снимается и моется.',
		'attr_padding_product' => '	Пространство внутри с экстрактами мальвы обеспечивает мягкую и комфортную поддержку. Мэллов обладает противовоспалительными, успокаивающими и успокаивающими свойствами, которые делают этот материал источником здоровья для нервной системы.',
		'attr_comfort_product' => '',
		'attr_drape_product' => 'Элегантно и сложно вышито, оно защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => '',
		'image_composition' => '/img/cuscino-virtuoso-malva.jpg',
		'block_attr_collections' => 'Virtuoso',
		'block_attr_materials' => 'Mallow Foam',
		'block_attr_coating' => 'Viscose satin',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Поддержка шеи и плеч',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'attr' => '
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размер: 72x42x12 cm</li><li>Уровень комфорта: Умеренно мягкий, упругая подушка, расслабляющий эффект натуральной мальвы.</li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a></li><li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/Orthopedic_pillows/virtuoso-mallow-standard-mx/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Элитная модель Virtuoso Mallow Standard, материал Mallow Foam - натуральный экстракт мальвы с успокаивающим расслабляющим эффектом, премиальная ткань чехла Satin/Viscose.</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Mallow foam</div></li>

			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Премиальная ортопедическая подушка Virtuoso Mallow</h3>
				<strong><i>Самые лучшие технологии, непревзойденный комфорт и экстракт Мальвы</i></strong>
				<p>
				Подушки серии Virtuoso относятся к эксклюзивной коллекции Luxury матрасов Virtus. При ее создании используются самые современные, дорогие технологии, отбираются только лучшие исключительные ткани и материалы.<br /> 
				Чехол украшен элегантными лилиями, символом города Флоренции, изготовлен из премиальных материй и содержит уникальные волокна, гарантирующие идеальный отдых. <br />
                Материал Viscose satin сочетает в себе свойства вискозы, невероятно мягкой и шелковистой на ощупь, с качествами атласа, блестящего и элегантного материала. Вместе они обладают отличной способностью рассеивать пот и пропускать воздух, делая подушку замечательно дышащей. Мягкие и легкие гусиные перья обладают отличной теплоемкостью. Слой с экстрактами мальвы обеспечивает мягкую и удобную поддержку.<br />
				Virtuoso Standard имеет привычную форму, к которой нет необходимости привыкать, в отличие, например, от подушек волнообразной формы. Модель предназначена для сна на животе, на боку или на спине.<br /> 
				</p>
				</div>
				<div class="coin-slider">
				<img src="/img/products/pillows/Castrogiovanni_Virtuoso.jpg" alt="Чемпион Италии Castrogiovanni с подушкой Virtuoso.jpg">
				<p>Выбор Мартина Кастроджиованни - чемпиона Италии, капитана сборной Италии по Регби</p>
				</div>
			</div>

			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Чехол и Материалы</h3>
					<img class="two-width" src="/img/outlastpo.jpg">
					<p class="text-jus">
                    Материал подушки - пена (вспененный материал, разработка итальянской фабрики Magniflex), которая носит название Mallow foam. Пена с добавлением натурального экстракта мальвы.
                    Мальва обладает успокоительным эффектом, стабилизирует нервную систему и дарит спокойный качественный сон. Среди больших денег и проектов часто расходуется много нервных клеток. Поэтому так важно организовать правильно отдых в спальне и получить немаленькие дивиденды в виде бодрости и спокойствия от здорового сна. 
                    Mallow foam - это последнее поколение материалов с большим уровнем воздухообмена. Благодаря данному материалу подушка "дышит", а соответственно подвержена хорошему проветриванию. Соответственно минимизирует количество пылевых и прочих накоплений, предоставляя правильный, спокойный, свежайший и здоровый сон.
                    Подушка Magniflex Virtuoso Mallow Standard является следующим поколением подушек после модели Magniflex Aloe Vera, Classico, Superiore или memo gel.
                    Чехол подушки съемный. Легко снимается, возможна химчистка. Материал чехла: Satin/Viscose Magniflex - премиальные ткани и итальянское качество. 
                    </p>
					<img class="two-width" src="/img/product/10553952_450748415063536_7131846329442564852_o.jpg">
				</div>
				<div class="half-width fixcommon-block">
				<h3> Подойдет даже самым маленьким</h3>
					<img src="/img/products/pillows/Guanciale-virtuoso-1.jpg" alt="на подушке Virtuoso Magniflex">
					<p class="text-jus">
                    Подходит для детей: благодаря своему небольшому размеру и высоте - это отличный вариант научить Вашего ребенка спать правильно, что послужит залогом крепкого здоровья в будущем.
					</p>
					<img src="/img/product/35617112_198787100823222_1424749168726900736_n.jpg" alt="на подушке Virtuoso Magniflex">
				</div>
			</div>
	
			</div>
		',
		'composition' => '
			<div class="ama_pillow_desk_block">
				<a href="/production/Satin-viscose/"><img src="/img/viscose-newg.png" alt="Satin viscose"></a>
				<a href="/production/Satin-viscose/"><p>Satin Viscose</p></a>
			</div>
			<div class="ama_pillow_desk_block">
				<a href="#"><img src="/img/malvafoam.png" alt="Mallow Foam"></a>
				<a href="#"><p>Mallow Foam</p></a>
			</div>
		',
		'recommend' => '',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 98 странах мира!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 98 странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		'price' => 14600.00,

		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),

	array(
		'address' => 'memoform-superiore-deluxe-standard',
		'parent_address' => 'pillows/orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array('forma-klasicheska', 'material-memoform', 'chehol-outlast','collectio_superiore','pillows-filter','orthopedic_pillows'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Ортопедическая подушка Memoform Superiore Deluxe Standard',
		'title' => 'Memoform Superiore Deluxe Standard - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Memoform Superiore Deluxe Standard - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'Memoform, чехол Outlast, 3D',
		'small_desc' => '
			<span class="hnb_popular">
			эффект "памяти" + терморегуляция
			</span>
			<p class="hnb_harek">
			Ортопедическая подушка с идеальными анатомическими свойствами, терморегуляция Outlast<br>
			Материал: Memoform Airyform<br>
			Размеры: 72x42x12 см<br>
			Чехол: съемный на молнии, outlast, 3D<br>
			Сделано в Италии.
                 </p>
		',
		'attr_cat_product1' => 'Memoform Airyform',
		'attr_cat_product2' => 'Cъемный на молнии, Outlast, 3D',
		'attr_cat_product3' => '72x42x12 см',
		'small_img' => '/img/product/very_small/MEMOFORM STANDARD SUP MX-5 OK.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/MEMOFORM STANDARD SUP MX-5 OK.jpg',
		'img_preview' => array('/img/product/big/superiore-deluxe (1).jpg', '/img/product/big/superiore-deluxe (2).jpg', '/img/product/big/superiore-deluxe (3).jpg', '/img/product/big/superiore-deluxe (4).jpg'),
		'img_alt' => '',	
		'attr_cover_product' => 'Терморегулирующая ткань Outlast® создает идеальный микроклимат на протяжении всей ночи. Когда температура вашего тела повышается, когда вы спите ночью, избыточное тепло поглощается, а когда температура падает ниже порога плавления, пузырьки снова затвердевают и выделяют накопившееся тепло. Он включает в себя воздухопроницаемую полосу 3D, которую вы можете легко снять и постирать.',
		'attr_padding_product' => '	Пространство внутри в Memoform предназначен для реагирования на вес шеи, головы и плеч, предлагая приятное ощущение легкости во время отдыха',
		'attr_comfort_product' => 'Воздушный дизайн подушки обеспечивает идеальную воздухопроницаемость и оптимальное рассеивание влаги и тепла благодаря отверстиям в середине.',
		'attr_drape_product' => 'Защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Superior-Standard.jpg',
		'block_attr_collections' => 'Superiore',
		'block_attr_materials' => 'Memoform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Поддержка шеи и плеч',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '72x42x12 cм',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'attr' => '
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размер: 72x42x12 cm</li><li>Уровень комфорта: Умеренно мягкая, эффект памяти, терморегуляция Outlast </li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a></li><li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/Orthopedic_pillows/memoform-superiore-deluxe-standard-mx" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель  Memoform Superiore Deluxe Standard.</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Memoform Airyform</div></li>

			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Ортопедическая подушка Memoform Superiore Deluxe Comfort</h3>
				<strong><i>Ортопедическая подушка волнообразной формы с фиксацией шеи</i></strong>

					<p>Подушка Memoform Superiore Deluxe Comfort — улучшенный вариант популярной модели Comfort.

					Специальная форма подушки предназначена для улучшения притока крови к голове, ведь как известно, из-за плохой циркуляции по сосудам и возникает головная боль. 
					У человека, спящего на подушке, затылок слегка запрокинут назад, что обеспечивает приток крови к голове без перенасыщения или недостатка. В результате, человек лучше высыпается, просыпается по утрам бодрым и со свежей, легкой головой. Подушка идеально подойдет тем, кто имеет травмы или у кого есть потребность в фиксации шеи или затылочной части головы. На Memoform Superiore Deluxe Comfort можно спать и на боку, но максимальный эффект достигается именно в положении на спине.
					<br/>
					Компактный размер подушки делает ее транспортабельной, удобной для использования в транспорте или на диване при просмотре телепередач.
					<br/>

					Подушка сертифицирована в Европе в качестве "Medical device" - изделия медицинского назначения.

					</p>
					
					

				</div>
				<div class="coin-slider">
					<img src="/img/Memoform_Standard_Classico.jpg" alt="">
				
				</div>
			</div>

			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Чехол и Материалы</h3>
					<img class="two-width" src="/img/outlastpo.jpg">
					<p class="text-jus">
					Материал подушки - пена Magniflex Memoform Airyform, инновационная разработка, гарантирующая высокий уровень циркуляции воздуха, анатомичность, гипоалергенность и защиту от пылевых клещей.
					<br/>
					Чехол съемный, на молнии, легко поддается химчистке. Space technologies и Магнифлекс представили для данной подушки самую последнюю разработку в области материалов и тканей чехлов - outlast. "Аутласт" не имеет на данный момент аналогов в мире и позволяет сохранять идеальную и комфортную температуру на поверхности подушки. Благодаря функции теплообмена имеет возможность нагревать или охлаждать поверхность. Данная разработка использовалась до недавнего времени только в скафандрах космонавтов для защиты от сильных температурных перепадов. На сегодня это способ сделать сон наиболее качественным и здоровым!
					</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3> Подойдет даже самым маленьким</h3>
					<img src="/img/pillow_for_child.jpg" alt="#">
					<p class="text-jus">
                    Подходит для детей: благодаря своему небольшому размеру и высоте - это отличный вариант научить Вашего ребенка спать правильно, что послужит залогом крепкого здоровья в будущем.
					</p>
				</div>
			</div>
	
			</div>
		',
		'composition' => '
			<div class="ama_pillow_desk_block">
				<a href="/production/outlast/"><img src="/img/outlast-newg.jpg" alt="Maedical"></a>
				<a href="/production/outlast/"><p>Outlast</p></a>
			</div>
			<div class="ama_pillow_desk_block">
				<a href="/production/3D-Band/"><img src="/img/3dband2.png" alt="3d Band"></a>
				<a href="/production/3D-Band/"><p>3D Band</p></a>
			</div>
			<div class="ama_pillow_desk_block">
				<a href="/production/Memoform-Magnifoam/"><img src="/img/memoform123.png" alt="Memoform Magnifoam"></a>
				<a href="/production/Memoform-Magnifoam/"><p>Мемоформ Магниформ</p></a>
			</div>
		',
		'recommend' => '',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 98 странах мира!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 98 странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		'price' => 11800.00,

		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),
	array(
		'address' => 'memoform-superiore-deluxe-orthomassage',
		'parent_address' => 'pillows/orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-effektom-pamjati', 's-masagnim-effektom', 'forma-klasicheska', 'material-memoform', 'chehol-outlast','collectio_superiore','pillows-filter','orthopedic_pillows'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Ортопедическая подушка Memoform Superiore Deluxe Orthomassage',
		'title' => 'Memoform Superiore Deluxe Orthomassage - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Memoform Superiore Deluxe Orthomassage - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'Memoform, чехол Outlast, 3D',
		'small_desc' => '
			<span class="hnb_popular">
			эффект "памяти"
			</span>
			<p class="hnb_harek">
			Ортопедическая подушка, массажный эффект, терморегуляция Outlast <br>
			Материал: Memoform Airyform<br>
			Размеры: 70x39x10 см<br>
			Чехол: съемный на молнии, outlast, 3D.<br>
			Сделано в Италии.
            </p>
		',
		'attr_cat_product1' => 'Memoform Airyform',
		'attr_cat_product2' => 'Cъемный на молнии, Outlast, 3D',
		'attr_cat_product3' => '70x39x10 см',
		'small_img' => '/img/product/very_small/MEMOFORM ORTHOMASSAGE SUP MX-5.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/MEMOFORM ORTHOMASSAGE SUP MX-5.jpg',
		'img_preview' => array('/img/product/big/superiore-deluxe-orthomassage (1).jpg', '/img/product/big/superiore-deluxe-orthomassage (2).jpg', '/img/product/big/superiore-deluxe-orthomassage (3).jpg'),
		'img_alt' => '',		
		'attr_cover_product' => 'Терморегулирующая ткань Outlast® создает идеальный микроклимат на протяжении всей ночи. Когда температура вашего тела повышается, когда вы спите ночью, избыточное тепло поглощается, а когда температура падает ниже порога плавления, пузырьки снова затвердевают и выделяют накопившееся тепло. Он включает в себя воздухопроницаемую полосу 3D, которую вы можете легко снять и постирать.',
		'attr_padding_product' => '	Пространство внутри в Memoform предназначен для реагирования на вес шеи, головы и плеч, предлагая приятное ощущение легкости во время отдыха',
		'attr_comfort_product' => 'Структура в форме пирамиды в середине оказывает восстанавливающее массажное действие на шею, голову и лицо, восстанавливая микроциркуляцию тела.',
		'attr_drape_product' => 'Защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Superiore deluxe orthomassage.jpg',
		'block_attr_collections' => 'Superiore',
		'block_attr_materials' => 'Memoform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Опора для шеи и плеч, Комфорт для шейки матки, Ортомассаж',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '70x39x10 cм',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'attr' => '
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размер: 70x39x10 cm</li><li>Уровень комфорта: Умеренно мягкая, массажный эффект, терморегуляция Outlast. </li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a></li><li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/Orthopedic_pillows/memoform-superiore-deluxe-orthomassage-mx" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель  Memoform Superiore Deluxe Orthomassage - массажная подушка с эффектом памяти.</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Memoform Airyform</div></li>

			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Ортопедическая подушка Memoform Superiore Deluxe Comfort</h3>
				<strong><i>Ортопедическая подушка волнообразной формы с фиксацией шеи</i></strong>

					<p>Подушка Memoform Superiore Deluxe Comfort — улучшенный вариант популярной модели Comfort.

					Специальная форма подушки предназначена для улучшения притока крови к голове, ведь как известно, из-за плохой циркуляции по сосудам и возникает головная боль. 
					У человека, спящего на подушке, затылок слегка запрокинут назад, что обеспечивает приток крови к голове без перенасыщения или недостатка. В результате, человек лучше высыпается, просыпается по утрам бодрым и со свежей, легкой головой. Подушка идеально подойдет тем, кто имеет травмы или у кого есть потребность в фиксации шеи или затылочной части головы. На Memoform Superiore Deluxe Comfort можно спать и на боку, но максимальный эффект достигается именно в положении на спине.
					<br/>
					Компактный размер подушки делает ее транспортабельной, удобной для использования в транспорте или на диване при просмотре телепередач.
					<br/>

					Подушка сертифицирована в Европе в качестве "Medical device" - изделия медицинского назначения.

					</p>
					
					

				</div>
				<div class="coin-slider">
					<img src="/img/Memoform_Standard_Classico.jpg" alt="">
				
				</div>
			</div>

			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Чехол и Материалы</h3>
					<img class="two-width" src="/img/outlastpo.jpg">
					<p class="text-jus">
					Материал подушки - пена Magniflex Memoform Airyform, инновационная разработка, гарантирующая высокий уровень циркуляции воздуха, анатомичность, гипоалергенность и защиту от пылевых клещей.
					<br/>
					Чехол съемный, на молнии, легко поддается химчистке. Space technologies и Магнифлекс представили для данной подушки самую последнюю разработку в области материалов и тканей чехлов - outlast. "Аутласт" не имеет на данный момент аналогов в мире и позволяет сохранять идеальную и комфортную температуру на поверхности подушки. Благодаря функции теплообмена имеет возможность нагревать или охлаждать поверхность. Данная разработка использовалась до недавнего времени только в скафандрах космонавтов для защиты от сильных температурных перепадов. На сегодня это способ сделать сон наиболее качественным и здоровым!
					</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3> Подойдет даже самым маленьким</h3>
					<img src="/img/pillow_for_child.jpg" alt="#">
					<p class="text-jus">
                    Подходит для детей: благодаря своему небольшому размеру и высоте - это отличный вариант научить Вашего ребенка спать правильно, что послужит залогом крепкого здоровья в будущем.
					</p>
				</div>
			</div>
	
			</div>
		',
		'composition' => '
		<div class="ama_pillow_desk_block">
			<a href="/production/outlast/"><img src="/img/outlast-newg.jpg" alt="Maedical"></a>
			<a href="/production/outlast/"><p>Outlast</p></a>
		</div>
		<div class="ama_pillow_desk_block">
			<a href="/production/3D-Band/"><img src="/img/3dband2.png" alt="3d Band"></a>
			<a href="/production/3D-Band/"><p>3D Band</p></a>
		</div>
		<div class="ama_pillow_desk_block">
			<a href="/production/Memoform-Magnifoam/"><img src="/img/memoform123.png" alt="Memoform Magnifoam"></a>
			<a href="/production/Memoform-Magnifoam/"><p>Мемоформ Магниформ</p></a>
		</div>
		',
		'recommend' => '',
		'certificat' => '
			<div class="hnb_contmy ama_product_sertificate">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					Сертифицировано в 98 странах мира!
				</div>
				<div class="hnb_contrig">
					В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
					Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 98 странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
					<br><br>
				</div>
			</div>
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,

		'price' => 12200.00,

		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),

	array(
		'address' => 'memoform_superiore_deluxe_wave',
		'parent_address' => 'pillows/orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-effektom-pamjati', 'forma-wolna', 'forma-klasicheska', 'material-memoform', 'chehol-outlast','collectio_superiore','pillows-filter','orthopedic_pillows'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Ортопедическая подушка Memoform Superiore Deluxe Wave',
		'title' => 'Memoform Superiore Deluxe Wave - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Memoform Superiore Deluxe Wave - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'Memoform, чехол Outlast, 3D',
		'small_desc' => '
			<span class="hnb_popular">
			эффект "памяти" + терморегуляция
			</span>
			<p class="hnb_harek">
			Ортопедическая, эргономичной формы с 2-мя валиками, терморегуляция Outlast<br>
			Материал: Memoform Airyform<br>
			Размеры:  60x43x10/11 см<br>
			Чехол: съемный, на молнии, outlast, 3D.<br>
			Сделано в Италии.
            </p>
		',
		'attr_cat_product1' => 'Memoform Airyform',
		'attr_cat_product2' => 'Cъемный на молнии, Outlast, 3D',
		'attr_cat_product3' => '60x43x10/11 см',
		'small_img' => '/img/product/very_small/MEMOFORM WAVE SUP MX-6.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/MEMOFORM WAVE SUP MX-6.jpg',
		'img_preview' => array('/img/product/big/superiore-deluxe-wave (1).jpg', '/img/product/big/superiore-deluxe-wave (2).jpg', '/img/product/big/superiore-deluxe-wave (3).jpg', '/img/product/big/superiore-deluxe-wave (4).jpg'),
		'img_alt' => '',		
		'attr_cover_product' => 'Терморегулирующая ткань Outlast® создает идеальный микроклимат на протяжении всей ночи. Когда температура вашего тела повышается, когда вы спите ночью, избыточное тепло поглощается, а когда температура падает ниже порога плавления, пузырьки снова затвердевают и выделяют накопившееся тепло. Он включает в себя воздухопроницаемую полосу 3D, которую вы можете легко снять и постирать.',
		'attr_padding_product' => '	Пространство внутри в Memoform предназначен для реагирования на вес шеи, головы и плеч, предлагая приятное ощущение легкости во время отдыха',
		'attr_comfort_product' => 'Воздушный дизайн подушки обеспечивает идеальную воздухопроницаемость и оптимальное рассеивание влаги и тепла благодаря отверстиям в середине. Постоянная циркуляция воздуха обеспечивает надлежащий теплообмен и оптимальное рассеивание влаги и тепла.',
		'attr_drape_product' => 'Защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Superior-wave.jpg',
		'block_attr_collections' => 'Superiore',
		'block_attr_materials' => 'Memoform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Поддержка шеи и плеч',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '60x43x11/10 cм',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'attr' => '
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размер:  60x43x10/11 cm</li><li>Уровень комфорта: Умеренно мягкая, эффект памяти, +терморегуляция Outlast.</li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a></li><li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/Orthopedic_pillows/memoform_superiore_deluxe_wave_mx" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель Memoform Superiore Deluxe Wave - подушка с эффектом памяти с 2-мя валиками.</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Memoform Airyform</div></li>

			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Ортопедическая подушка Memoform Superiore Deluxe Comfort</h3>
				<strong><i>Ортопедическая подушка волнообразной формы с фиксацией шеи</i></strong>

					<p>Подушка Memoform Superiore Deluxe Comfort — улучшенный вариант популярной модели Comfort.

					Специальная форма подушки предназначена для улучшения притока крови к голове, ведь как известно, из-за плохой циркуляции по сосудам и возникает головная боль. 
					У человека, спящего на подушке, затылок слегка запрокинут назад, что обеспечивает приток крови к голове без перенасыщения или недостатка. В результате, человек лучше высыпается, просыпается по утрам бодрым и со свежей, легкой головой. Подушка идеально подойдет тем, кто имеет травмы или у кого есть потребность в фиксации шеи или затылочной части головы. На Memoform Superiore Deluxe Comfort можно спать и на боку, но максимальный эффект достигается именно в положении на спине.
					<br/>
					Компактный размер подушки делает ее транспортабельной, удобной для использования в транспорте или на диване при просмотре телепередач.
					<br/>

					Подушка сертифицирована в Европе в качестве "Medical device" - изделия медицинского назначения.

					</p>
					
					

				</div>
				<div class="coin-slider">
					<img src="/img/Memoform_Standard_Classico.jpg" alt="">
				
				</div>
			</div>

			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Чехол и Материалы</h3>
					<img class="two-width" src="/img/outlastpo.jpg">
					<p class="text-jus">
					Материал подушки - пена Magniflex Memoform Airyform, инновационная разработка, гарантирующая высокий уровень циркуляции воздуха, анатомичность, гипоалергенность и защиту от пылевых клещей.
					<br/>
					Чехол съемный, на молнии, легко поддается химчистке. Space technologies и Магнифлекс представили для данной подушки самую последнюю разработку в области материалов и тканей чехлов - outlast. "Аутласт" не имеет на данный момент аналогов в мире и позволяет сохранять идеальную и комфортную температуру на поверхности подушки. Благодаря функции теплообмена имеет возможность нагревать или охлаждать поверхность. Данная разработка использовалась до недавнего времени только в скафандрах космонавтов для защиты от сильных температурных перепадов. На сегодня это способ сделать сон наиболее качественным и здоровым!
					</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3> Подойдет даже самым маленьким</h3>
					<img src="/img/pillow_for_child.jpg" alt="#">
					<p class="text-jus">
                    Подходит для детей: благодаря своему небольшому размеру и высоте - это отличный вариант научить Вашего ребенка спать правильно, что послужит залогом крепкого здоровья в будущем.
					</p>
				</div>
			</div>
	
			</div>
		',
		'composition' => '
		<div class="ama_pillow_desk_block">
			<a href="/production/outlast/"><img src="/img/outlast-newg.jpg" alt="Maedical"></a>
			<a href="/production/outlast/"><p>Outlast</p></a>
		</div>
		<div class="ama_pillow_desk_block">
			<a href="/production/3D-Band/"><img src="/img/3dband2.png" alt="3d Band"></a>
			<a href="/production/3D-Band/"><p>3D Band</p></a>
		</div>
		<div class="ama_pillow_desk_block">
			<a href="/production/Memoform-Magnifoam/"><img src="/img/memoform123.png" alt="Memoform Magnifoam"></a>
			<a href="/production/Memoform-Magnifoam/"><p>Мемоформ Магниформ</p></a>
		</div>
		',
		'recommend' => '',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 98 странах мира!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 98 странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		'price' => 12600.00,

		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),
	array(
		'address' => 'memoform_superiore_comfort',
		'parent_address' => 'pillows/orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array('forma-wolna', 'material-memoform', 'chehol-outlast','collectio_superiore','pillows-filter','orthopedic_pillows'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Ортопедическая подушка Memoform Superiore Deluxe Comfort',
		'title' => 'Ортопедическая подушка Memoform Superiore Deluxe Comfort от Magniflex',
		'description' => 'Ортопедическая подушка Memoform Superiore Deluxe Comfort Magniflex: эффект памяти и отличная терморегуляция, идеальные анатомические свойства',
		'keywords' => 'ортопедическая подушка, анатомическая подушка, подушка с эффектом памяти, подушка терморегулирующая, подушка magniflex, итальянская подушка, элитная подушка',
		'small_desc' => '
			<span class="hnb_popular">
			эффект "памяти", фиксация шеи + терморегуляция
			</span>
			<p class="hnb_harek">
			Ортопедическая, с фиксацией шеи и затылочной части головы, терморегуляция Outlast<br>
			Материал: Memoform Airyform<br>
			Размеры: 52x32x5/10 см<br>
			Чехол: съемный на молнии, outlast, 3D<br>
			Сделано в Италии
            </p>
		',
		'attr_cat_product1' => 'Memoform Airyform',
		'attr_cat_product2' => 'Cъемный на молнии, Outlast, 3D',
		'attr_cat_product3' => '52x32x5/10 см',
		'small_img' => '/img/product/very_small/MEMOFORM COMFORT SUP MX-2.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/MEMOFORM COMFORT SUP MX-2.jpg',
		'img_preview' => array('/img/product/big/superiore-deluxe-comfort (1).jpg', '/img/product/big/superiore-deluxe-comfort (2).jpg'),
		'img_alt' => '',		
		'attr_cover_product' => 'Терморегулирующая ткань Outlast® создает идеальный микроклимат на протяжении всей ночи. Когда температура вашего тела повышается, когда вы спите ночью, избыточное тепло поглощается, а когда температура падает ниже порога плавления, пузырьки снова затвердевают и выделяют накопившееся тепло. Он включает в себя воздухопроницаемую полосу 3D, которую вы можете легко снять и постирать.',
		'attr_padding_product' => '	Пространство внутри в Memoform предназначен для реагирования на вес шеи, головы и плеч, предлагая приятное ощущение легкости во время отдыха. Его форма идеально подходит для обеспечения успокаивающей поддержки шеи.',
		'attr_comfort_product' => 'Воздушный дизайн подушки обеспечивает идеальную воздухопроницаемость и оптимальное рассеивание влаги и тепла благодаря отверстиям в середине.',
		'attr_drape_product' => 'Защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Superiore_deluxe_comfort.jpg',
		'block_attr_collections' => 'Superiore',
		'block_attr_materials' => 'Memoform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Поддержка шеи и плеч',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '52x32x5/10 cм',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'attr' => '
			<ul><li>СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC</li>
			<li><b>Размер</b>:  52x32x5/10 см</li>
			<li>Умеренно мягкая ортопедическая подушка с эффектом «памяти», фиксация шеи, терморегуляция Outlast</li>
			<li><b>Срок службы</b>: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/Orthopedic_pillows/memoform_superiore_comfort_mx" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель MEMOFORM SUPERIORE COMFORT - подушка волнообразной формы с фиксацией шеи.</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Memoform Airyform</div></li>

			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Ортопедическая подушка Memoform Superiore Deluxe Comfort</h3>
				<strong><i>Ортопедическая подушка волнообразной формы с фиксацией шеи</i></strong>

					<p>Подушка Memoform Superiore Deluxe Comfort — улучшенный вариант популярной модели Comfort.

					Специальная форма подушки предназначена для улучшения притока крови к голове, ведь как известно, из-за плохой циркуляции по сосудам и возникает головная боль. 
					У человека, спящего на подушке, затылок слегка запрокинут назад, что обеспечивает приток крови к голове без перенасыщения или недостатка. В результате, человек лучше высыпается, просыпается по утрам бодрым и со свежей, легкой головой. Подушка идеально подойдет тем, кто имеет травмы или у кого есть потребность в фиксации шеи или затылочной части головы. На Memoform Superiore Deluxe Comfort можно спать и на боку, но максимальный эффект достигается именно в положении на спине.
					<br/>
					Компактный размер подушки делает ее транспортабельной, удобной для использования в транспорте или на диване при просмотре телепередач.
					<br/>

					Подушка сертифицирована в Европе в качестве "Medical device" - изделия медицинского назначения.

					</p>
					
					

				</div>
				<div class="coin-slider">
					<img src="/img/Memoform_Standard_Classico.jpg" alt="">
				
				</div>
			</div>

			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Чехол и Материалы</h3>
					<img class="two-width" src="/img/outlastpo.jpg">
					<p class="text-jus">
					Материал подушки - пена Magniflex Memoform Airyform, инновационная разработка, гарантирующая высокий уровень циркуляции воздуха, анатомичность, гипоалергенность и защиту от пылевых клещей.
					<br/>
					Чехол съемный, на молнии, легко поддается химчистке. Space technologies и Магнифлекс представили для данной подушки самую последнюю разработку в области материалов и тканей чехлов - outlast. "Аутласт" не имеет на данный момент аналогов в мире и позволяет сохранять идеальную и комфортную температуру на поверхности подушки. Благодаря функции теплообмена имеет возможность нагревать или охлаждать поверхность. Данная разработка использовалась до недавнего времени только в скафандрах космонавтов для защиты от сильных температурных перепадов. На сегодня это способ сделать сон наиболее качественным и здоровым!
					</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3> Подойдет даже самым маленьким</h3>
					<img src="/img/pillow_for_child.jpg" alt="#">
					<p class="text-jus">
                    Подходит для детей: благодаря своему небольшому размеру и высоте - это отличный вариант научить Вашего ребенка спать правильно, что послужит залогом крепкого здоровья в будущем.
					</p>
				</div>
			</div>
	
			</div>
		',
		'composition' => '
		<div class="ama_pillow_desk_block">
			<a href="/production/outlast/"><img src="/img/outlast-newg.jpg" alt="Maedical"></a>
			<a href="/production/outlast/"><p>Outlast</p></a>
		</div>
		<div class="ama_pillow_desk_block">
			<a href="/production/3D-Band/"><img src="/img/3dband2.png" alt="3d Band"></a>
			<a href="/production/3D-Band/"><p>3D Band</p></a>
		</div>
		<div class="ama_pillow_desk_block">
			<a href="/production/Memoform-Magnifoam/"><img src="/img/memoform123.png" alt="Memoform Magnifoam"></a>
			<a href="/production/Memoform-Magnifoam/"><p>Мемоформ Магниформ</p></a>
		</div>
		',
		'recommend' => '',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 98 странах мира!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 98 странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		'price' => 10900.00,

		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),
	array(
		'address' => 'memoform_standard_classico',
		'parent_address' => 'pillows/orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 'forma-klasicheska', 'material-memoform', 'chehol-viscose','collectio_classico','pillows-filter','orthopedic_pillows'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Ортопедическая подушка Memoform Standard Classico',
		'title' => 'Memoform Standard Classico - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Memoform Standard Classico - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'Memoform, чехол вискоза',
		'small_desc' => '
			<span class="hnb_popular">
			эффект "памяти"
			</span>
			<p class="hnb_harek">
			Ортопедическая, классической формы, анатомические свойства<br>
			Размеры: 72x42x12 см.<br>
			Материал: Memoform Airyform<br>
			Чехол: съемный на молнии, viscose.<br>
			Сделано в Италии.
            </p>
		',
		'attr_cat_product1' => 'Memoform Airyform',
		'attr_cat_product2' => 'Cъемный на молнии, Viscose ',
		'attr_cat_product3' => '72x42x12 см.',
		'small_img' => '/img/product/very_small/podushka-memoform-standard-classico-mx-magniflex.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/podushka-memoform-standard-classico-mx-magniflex.jpg',
		'img_preview' => array('/img/product/big/classico (1).jpg', '/img/product/big/classico (2).jpg'),
		'img_alt' => '',		
		'attr_cover_product' => 'Терморегулирующая ткань Outlast® создает идеальный микроклимат на протяжении всей ночи. Когда температура вашего тела повышается, когда вы спите ночью, избыточное тепло поглощается, а когда температура падает ниже порога плавления, пузырьки снова затвердевают и выделяют накопившееся тепло. Он включает в себя воздухопроницаемую полосу 3D, которую вы можете легко снять и постирать.',
		'attr_padding_product' => '	Пространство внутри в Memoform предназначен для реагирования на вес шеи, головы и плеч, предлагая приятное ощущение легкости во время отдыха',
		'attr_comfort_product' => 'Воздушный дизайн подушки обеспечивает идеальную воздухопроницаемость и оптимальное рассеивание влаги и тепла благодаря отверстиям в середине.',
		'attr_drape_product' => 'Защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Superior-Standard.jpg',
		'block_attr_collections' => 'Superiore',
		'block_attr_materials' => 'Memoform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Поддержка шеи и плеч',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '72x42x12 cм',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'attr' => '
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размер:  72x42x12 cm</li><li>Уровень комфорта: Умеренно мягкая, эффект памяти</li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a></li><li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/Orthopedic_pillows/memoform_standard_classico_mx" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель Memoform Standard Classico.</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Memoform Airyform</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '



			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Ортопедическая подушка Memoform Superiore Deluxe Comfort</h3>
				<strong><i>Ортопедическая подушка волнообразной формы с фиксацией шеи</i></strong>

					<p>Подушка Memoform Superiore Deluxe Comfort — улучшенный вариант популярной модели Comfort.

					Специальная форма подушки предназначена для улучшения притока крови к голове, ведь как известно, из-за плохой циркуляции по сосудам и возникает головная боль. 
					У человека, спящего на подушке, затылок слегка запрокинут назад, что обеспечивает приток крови к голове без перенасыщения или недостатка. В результате, человек лучше высыпается, просыпается по утрам бодрым и со свежей, легкой головой. Подушка идеально подойдет тем, кто имеет травмы или у кого есть потребность в фиксации шеи или затылочной части головы. На Memoform Superiore Deluxe Comfort можно спать и на боку, но максимальный эффект достигается именно в положении на спине.
					<br/>
					Компактный размер подушки делает ее транспортабельной, удобной для использования в транспорте или на диване при просмотре телепередач.
					<br/>

					Подушка сертифицирована в Европе в качестве "Medical device" - изделия медицинского назначения.

					</p>
					
					

				</div>
				<div class="coin-slider">
					<img src="/img/Memoform_Standard_Classico.jpg" alt="">
				
				</div>
			</div>

			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Чехол и Материалы</h3>
					<img class="two-width" src="/img/outlastpo.jpg">
					<p class="text-jus">
					Материал подушки - пена Magniflex Memoform Airyform, инновационная разработка, гарантирующая высокий уровень циркуляции воздуха, анатомичность, гипоалергенность и защиту от пылевых клещей.
					<br/>
					Чехол съемный, на молнии, легко поддается химчистке. Space technologies и Магнифлекс представили для данной подушки самую последнюю разработку в области материалов и тканей чехлов - outlast. "Аутласт" не имеет на данный момент аналогов в мире и позволяет сохранять идеальную и комфортную температуру на поверхности подушки. Благодаря функции теплообмена имеет возможность нагревать или охлаждать поверхность. Данная разработка использовалась до недавнего времени только в скафандрах космонавтов для защиты от сильных температурных перепадов. На сегодня это способ сделать сон наиболее качественным и здоровым!
					</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3> Подойдет даже самым маленьким</h3>
					<img src="/img/pillow_for_child.jpg" alt="#">
					<p class="text-jus">
                    Подходит для детей: благодаря своему небольшому размеру и высоте - это отличный вариант научить Вашего ребенка спать правильно, что послужит залогом крепкого здоровья в будущем.
					</p>
				</div>
			</div>
	
			</div>
		',
		'composition' => '
		<div class="ama_pillow_desk_block">
			<a href="/production/Viscose/"><img src="/img/viscose-newg.jpg" alt="Maedical"></a>
			<a href="/production/Viscose/"><p>Viscose</p></a>
		</div>
		<div class="ama_pillow_desk_block">
			<a href="/production/Memoform-Magnifoam/"><img src="/img/memoform123.png" alt="Memoform Magnifoam"></a>
			<a href="/production/Memoform-Magnifoam/"><p>Мемоформ Магниформ</p></a>
		</div>
		',
		'recommend' => '',
		'certificat' => '
			
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		'price' => 9900.00,

		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),
	array(
		'address' => 'memoform_wave_classico',
		'parent_address' => 'pillows/orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array('forma-wolna', 'material-memoform', 'material-mallowfoam', 'chehol-viscose','collectio_classico','pillows-filter','orthopedic_pillows'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Ортопедическая подушка Memoform Wave Classico',
		'title' => 'Memoform Wave Classico - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Memoform Wave Classico - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'Memoform, чехол вискоза',
		'span_title' => 'эффект "памяти"',
		'small_desc' => '
			<span class="hnb_popular">
			эффект "памяти"
			</span>
			<p class="hnb_harek">
			Ортопедическая, эргономичной формы с 2-мя валиками<br>
			Размеры: 60x43x11/10 см.<br>
			Материал: Memoform Airyform<br>
			Чехол: съемный на молнии, viscose.<br>
			Сделано в Италии.
            </p>
		',
		'attr_cat_product1' => 'Memoform Airyform',
		'attr_cat_product2' => 'Cъемный на молнии, Viscose ',
		'attr_cat_product3' => '60x43x11/10 см.',
		'small_img' => '/img/product/very_small/podushka-memoform-wave-classico-mx-magniflex.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/podushka-memoform-wave-classico-mx-magniflex.jpg',
		'img_preview' => array('/img/product/big/classico-wave (2).jpg', '/img/product/big/classico-wave.jpg'),
		'img_alt' => '',		
		'attr_cover_product' => 'Терморегулирующая ткань Outlast® создает идеальный микроклимат на протяжении всей ночи. Когда температура вашего тела повышается, когда вы спите ночью, избыточное тепло поглощается, а когда температура падает ниже порога плавления, пузырьки снова затвердевают и выделяют накопившееся тепло. Он включает в себя воздухопроницаемую полосу 3D, которую вы можете легко снять и постирать.',
		'attr_padding_product' => '	Пространство внутри в Memoform предназначен для реагирования на вес шеи, головы и плеч, предлагая приятное ощущение легкости во время отдыха',
		'attr_comfort_product' => 'Воздушный дизайн подушки обеспечивает идеальную воздухопроницаемость и оптимальное рассеивание влаги и тепла благодаря отверстиям в середине. Постоянная циркуляция воздуха обеспечивает надлежащий теплообмен и оптимальное рассеивание влаги и тепла.',
		'attr_drape_product' => 'Защищает внутренний слой, повышая уровень гигиены подушки.',
		'attr_layer_product' => '',
		'image_composition' => '/img/Superior-wave.jpg',
		'block_attr_collections' => 'Superiore',
		'block_attr_materials' => 'Memoform',
		'block_attr_coating' => 'Viscose',
		'block_attr_certifications' => 'СДЕЛАНО В ИТАЛИИ, OEKO-TEX®, EC',
		'block_attr_benefits' => 'Поддержка шеи и плеч',
		'block_attr_comfort_level' => '',
		'block_attr_height' => '60x43x11/10 cм',
		'block_attr_support' => '',
		'block_attr_warranty' => '3 года',
		'block_attr_extra' => 'Медицинское устройство сертифицировано, на спине, на боку, на животе',
		'attr' => '
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размер: 60x43x11/10 cm</li><li>Уровень комфорта: Умеренно мягкая, эффект памяти</li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a></li><li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/Orthopedic_pillows/memoform_wave_classico_mx" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель Memoform Wave Classico - подушка классической ортопедической формы из двух валиков.</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Memoform Airyform</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">

			<div class="common_block_common">
				<div class="half-width">
				<h3>Ортопедическая подушка Memoform Superiore Deluxe Comfort</h3>
				<strong><i>Ортопедическая подушка волнообразной формы с фиксацией шеи</i></strong>

					<p>Подушка Memoform Superiore Deluxe Comfort — улучшенный вариант популярной модели Comfort.

					Специальная форма подушки предназначена для улучшения притока крови к голове, ведь как известно, из-за плохой циркуляции по сосудам и возникает головная боль. 
					У человека, спящего на подушке, затылок слегка запрокинут назад, что обеспечивает приток крови к голове без перенасыщения или недостатка. В результате, человек лучше высыпается, просыпается по утрам бодрым и со свежей, легкой головой. Подушка идеально подойдет тем, кто имеет травмы или у кого есть потребность в фиксации шеи или затылочной части головы. На Memoform Superiore Deluxe Comfort можно спать и на боку, но максимальный эффект достигается именно в положении на спине.
					<br/>
					Компактный размер подушки делает ее транспортабельной, удобной для использования в транспорте или на диване при просмотре телепередач.
					<br/>

					Подушка сертифицирована в Европе в качестве "Medical device" - изделия медицинского назначения.

					</p>
					
					

				</div>
				<div class="coin-slider">
					<img src="/img/Memoform_Standard_Classico.jpg" alt="">
				
				</div>
			</div>

			<div class="common_block_common fixcommon-block">
				<div class="half-width fixcommon-block">
				<h3>Чехол и Материалы</h3>
					<img class="two-width" src="/img/outlastpo.jpg">
					<p class="text-jus">
					Материал подушки - пена Magniflex Memoform Airyform, инновационная разработка, гарантирующая высокий уровень циркуляции воздуха, анатомичность, гипоалергенность и защиту от пылевых клещей.
					<br/>
					Чехол съемный, на молнии, легко поддается химчистке. Space technologies и Магнифлекс представили для данной подушки самую последнюю разработку в области материалов и тканей чехлов - outlast. "Аутласт" не имеет на данный момент аналогов в мире и позволяет сохранять идеальную и комфортную температуру на поверхности подушки. Благодаря функции теплообмена имеет возможность нагревать или охлаждать поверхность. Данная разработка использовалась до недавнего времени только в скафандрах космонавтов для защиты от сильных температурных перепадов. На сегодня это способ сделать сон наиболее качественным и здоровым!
					</p>
				</div>
				<div class="half-width fixcommon-block">
				<h3> Подойдет даже самым маленьким</h3>
					<img src="/img/pillow_for_child.jpg" alt="#">
					<p class="text-jus">
                    Подходит для детей: благодаря своему небольшому размеру и высоте - это отличный вариант научить Вашего ребенка спать правильно, что послужит залогом крепкого здоровья в будущем.
					</p>
				</div>
			</div>
	
			</div>
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		'price' => 9600.00,

		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),
	array(
		'address' => 'MEMORY',
		'parent_address' => 'snyatie-s-proizvodstva',
		'parent_name' => 'Снятые с производства',
		'name' => 'Подушка Memory <span>(снята с производства)</span>',
		'title' => 'Подушка Memory - купить ортопедическую подушку в интернет-магазине Magniflex',
		'description' => 'У нас Вы найдете подушки Memory. Подушка волнообразной формы с эффектом памяти в нашем каталоге.',
		'keywords' => 'подушка, ортопедический, купить, memory',
		'small_desc' => '
			<span class="hnb_popular">
			эффект "памяти"
			</span>
			<p class="hnb_harek">
			Ортопедическая, эргономичной формы, с великолепными анатомическими свойствами. <br>
			Материал: Memoform <br>
			Размеры: 60 x 43 x 10/11 см<br>
			Чехол: съемный, Coolmax<br>
			Сделано в Италии.
                 </p>
		',
		'small_img' => '/img/product/very_small/Memory.jpg',
		'small_img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Memory ',
		'img' => '/img/product/big/Memory.jpg',
		'img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Memory ',
		'attr' => '
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размеры: 60 x 43 x 10/11 см. Вес: 1500 г.</li><li><b>Уровень комфорта:</b> Высочайший. Мягкая, комфортная, анатомической формы</li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: <a href="/pokupatelyam/oplata-i-dostavka/">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka/">оплата</a></li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/Orthopedic_pillows/MEMORY/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">с эффектом памяти. Волнообразная форма, изначально максимально соответствующая строению головы и шеи, гарантирует идеальную ортопедическую поддержку</div></li>
			<li class="hnb_ligray">Наполнитель Memoform Magnifoam <div class="hnb_marg">под действием тепла и давления, принимает форму, максимально соответствующую особенностям строения головы и шеи, даря ни с чем несравнимый комфорт. Идеально подходит для крепкого и здорового сна вне зависимости от той позы, в которой Вы привыкли спать</div></li>
			<li class="hnb_liwhite">Ткани Coolmax <div class="hnb_marg">свободная циркуляция воздуха и быстрое испарение влаги, уменьшает потливость, успокаивает кожу и снимает раздражение</div></li>
			<li class="hnb_ligray">Структура Airyform <div class="hnb_marg">усиление "дышащего" эффекта тканей и наполнителей, отличная аэрация поверхности подушки, поддерживает постоянный комфортный тепловой баланс</div></li>
			<li class="hnb_liwhite">Гиппоаллергенная <div class="hnb_marg">100% защита от пылевых клещей. Гиппоаллергенная, специальная санитарная обработка всех тканей и наполнителей Maedicare, Maedical без использования химических веществ. </div></li>
			<li class="hnb_ligray">Произведена в Италии<div class="hnb_marg">изготовлена непосредственно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<style>
			.category_products.hnb_grid2 .category_product {
				width: 45%;
				height: 400px;
				margin-bottom: 40px;
			}
			.category_products {
				margin-bottom: 0;
				border-bottom: none;
			}
			</style>
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/son-na-boky-i-spine.jpg" height="196" title="Для сна на спине и на боку">
				Для тех, кто любит спать на спине или на боку
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			Подушка Memory в настоящее время снята с производства. Вместо нее выпускаются усовершеннствованные аналоги: ортопедические подушки Memoform Superiore Deluxe Wave и Memoform Wave Classico.
<br /><br />
			<div class="category_products hnb_grid2">
				<div class="category_product">
							<a style="height: 200px;" href="/catalog/Orthopedic_pillows/memoform_superiore_deluxe_wave/" class="category_product_img" title="Подушка Memoform Superiore Deluxe Wave">
								<img src="/img/product/very_small/MEMOFORM WAVE SUP MX-6.jpg" alt="">
															</a>
																					<a href="/catalog/Orthopedic_pillows/memoform_superiore_deluxe_wave/" class="category_product_name" title="Подушка Memoform Superiore Deluxe Wave">Подушка Memoform Superiore Deluxe Wave</a>
							<div class="small_desc">
			<p class="hnb_harek">
			Ортопедическая, эргономичной формы с 2-мя валиками, терморегуляция Outlast<br>
			Материал: Memoform Airyform<br>
			Размеры:  60x43x10/11 см<br>
			Чехол: съемный, на молнии, outlast, 3D.<br>
			Сделано в Италии.
            </p>
									</div>
													</div>
				<div class="category_product">
							<a href="/catalog/Orthopedic_pillows/memoform_wave_classico/" class="category_product_img" title="Подушка Memoform Wave Classico">
								<img src="/img/product/very_small/podushka-memoform-wave-classico-mx-magniflex.jpg" alt="">
															</a>
																					<a href="/catalog/Orthopedic_pillows/memoform_wave_classico/" class="category_product_name" title="Подушка Memoform Wave Classico">Подушка Memoform Wave Classico</a>
							<div class="small_desc">
			<p class="hnb_harek">
			Ортопедическая, эргономичной формы с 2-мя валиками<br>
			Размеры: 60x43x11/10 см.<br>
			Материал: Memoform Airyform<br>
			Чехол: съемный на молнии, viscose.<br>
			Сделано в Италии.
            </p>
									</div>
													</div>
				<div class="clear"></div>
			</div>
			Идеальная эргономичная форма подушки и специальный подшейный валик позволяют поддерживать голову и шейные позвонки в удобном ортопедическом правильном положении всю ночь, способствуя полному расслаблению мышц.
			<br /><br />
			 Подушка не слишком мягкая, но и не жесткая, с эффектом памяти, предоставляет наибольшее удобство по сравнению с обычными подушками.
			<br /><br />
			Все ткани и наполнители подвергаются специальным санитарным обработкам без использования химических веществ.
			<br /><br />
			Наволочка подушки MEMORY Magniflex изготовлена из материала Coolmax, съемная, на молнии, легко стирается.
			<br /><br />
			Имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, в том числе РОСТЕСТ. Продается в 98 странах мира.<br>
			<iframe width="687" height="515" src="//www.youtube.com/embed/8mTmQhMogZc?rel=0" frameborder="0" allowfullscreen style="margin: 0 0 0 -10px;"></iframe>
			<br><br>
			<div class="ama_pillow_desk_block">
				<div class="ama_pillow_desk_text"><p>Coolmax</p></div>
				<div class="ama_pillow_desk_img"><a href="/production/Coolmax/"><img src="/img/coolmax-newg.jpg" alt="Maedical"></a></div>
			 </div>
				</div>
			</div>
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/struktura-podushki.jpg" height="196" title="Структура подушки">
				 <br>
				<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			<br />
			Структура AIRFORM - значительное усиление дышащего эффекта ткани<br><br>
			Материал COOLMAX - циркуляция воздуха и испарение влаги<br><br>
			Материал MEMOFORM - эффект памяти формы и рельефа. Это один из самых мягких материалов - дарит ни с чем несравнимый комфорт. Благодаря своей инновационной сверхбыстрой способности реагирования на тепло и давление, наполнитель мгновенно принимает форму тела, предоставляя превосходную ортопедическую поддержку всему организму в целом, а в особенности спине. Материал очень быстро возвращает свою оригинальную форму, приспосабливается к движениям человека, способствуя крепкому и здоровому сну.<br><br>
				</div>
			</div>
		',
		'recommend' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/rekomendovano-cito.jpg" height="196" title="Матрас рекомендован ЦИТО РФ">
					<br>
				Рекомендована Министерством Здравоохранения <br>
					и Медицинской промышленности РФ
				</div>
				<div class="hnb_contrig">
					Настоящая ортопедическая подушка, созданная для крепкого и здорового сна! Эффективность применения доказана многочисленными клиническими испытаниями. Рекомендована к использованию Министерством Здравоохранения и Медицинской промышленности Российской Федерации (регистрационное удостоверение МЗМПР №96/264).
				</div>
			</div>
		',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 98 странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 98 странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br><br />
				</div>
			</div>
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		//'available' => array(
			//'status' => false,
			//'msg_category' => 'предзаказ',
			//'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии, ориентировочные сроки поставки: 10.05.2016 </span>',
		//),
		'discount_koef' => array('date_start' => '20.03.2017', 'date_end' => '22.02.2018', 'price_koef' => 0.3, ), //скидка
		'sizes' => false,
		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		'price' => 9200.00,
	),
	array(
		'address' => 'ORTHOMASSAGE',
		'parent_address' => 'snyatie-s-proizvodstva',
		'parent_name' => 'Снятые с производства',
		'name' => 'Подушка Orthomassage <span>(снята с производства)</span>',
		'title' => 'Orthomassage - ортопедическая подушка в интернет-магазине Magniflex',
		'description' => 'Ортопедическая подушка Orthomassage обеспечивает идеальную поддержку для шеи и головы. Подробности в нашем каталоге.',
		'keywords' => 'orthomassage',
		'small_desc' => '
			<span class="hnb_popular">
			эффект "памяти"
			</span>
			<p class="hnb_harek">
			Ортопедическая подушка, идеальная поддержка шеи с массажным эффектом.<br>
			Материал: Memoform <br>
			Размеры: 70 x 39 x 11 см<br>
			Чехол: съемный, Coolmax<br>
			Сделано в Италии.
                 </p>
		',
		'small_img' => '/img/product/very_small/Orthomassage.jpg',
		'small_img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Orthomassage',
		'img' => '/img/product/big/Orthomassage.jpg',
		'img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Orthomassage',
		'attr' => '
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размеры: 70 x 39 x 11 см. Вес: 1700 г.</li><li>Уровень комфорта: Мягкий</li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: доставка, оплата</li><li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/Orthopedic_pillows/ORTHOMASSAGE/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<style>
				.product_top {
					display: none;
				}
				.category_products {
					margin-bottom: 0;
					border-bottom: none;
				}
				.category_products.hnb_grid2 .category_product {
					width: 45%;
					height: 350px;
					margin-bottom: 40px;
				}
			</style>
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель Оrthomassage</div></li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/son-na-boky-i-spine.jpg" height="196" title="Для сна на спине и на боку">
				Для тех, кто любит спать на спине или на боку
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			<!--<iframe width="687" height="515" src="//www.youtube.com/embed/YDgJIa2E0AA?rel=0" frameborder="0" allowfullscreen style="margin: 0 0 0 -10px;"></iframe>-->
			<br /> <br /><br />
			Подушка ORTHOMASSAGE в настоящее время снята с производства. Вместо нее выпускаются усовершеннствованные аналоги: ортопедическиая подушка Memoform Superiore Deluxe Orthomassage.
			<br /><br />
			<div class="category_products hnb_grid2">
			<div class="category_product">
								<button fav-id="memoform-superiore-deluxe-orthomassage" class="favourite-but" style="display:none; position:absolute; right: 0; top: 0; z-index: 1;"></button>
								<button id="memoform-superiore-deluxe-orthomassage" class="ds_del-fav" style="display:none; position:absolute; right: 0; top: 0; z-index: 1;"></button>

							<div class="s-effektom-pamjati s-masagnim-effektom forma-klasicheska material-memoform chehol-outlast Collectio_superiore pillows-filter memoform-superiore-deluxe-orthomassage Orthopedic_pillows" name="Подушка" style="display: none;"></div>
							<a href="/catalog/Orthopedic_pillows/memoform-superiore-deluxe-orthomassage/" class="category_product_img" title="Подушка Memoform Superiore Deluxe Orthomassage">
								<img src="/img/product/very_small/MEMOFORM ORTHOMASSAGE SUP MX-5.jpg" alt="">
															</a>
																					<a href="/catalog/Orthopedic_pillows/memoform-superiore-deluxe-orthomassage/" class="category_product_name" title="Подушка Memoform Superiore Deluxe Orthomassage">Подушка Memoform Superiore Deluxe Orthomassage</a>
							<div class="small_desc">
			<p class="hnb_harek">
			Уровень комфорта: <br>
			Размеры: 70x39x10 см<br>
			Чехол: съемный на молнии, outlast.<br>
			Изготовлена в ИТАЛИИ.
            </p>
									</div>
							<div class="category_product_price">
																цена: <span>11 600 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
															</div>
							<div class="category_product_link">
								<a href="/catalog/Orthopedic_pillows/memoform-superiore-deluxe-orthomassage/" title="Подушка Memoform Superiore Deluxe Orthomassage">
									Подробнее
								</a>
							</div>
														<div class="category_product_quantity">
								<a href="javascript:void(0)" class="sf_minus" rel="nofollow">-</a>
								<input type="text" class="sf_base_quantity" name="quantity" value="1">
								<a href="javascript:void(0)" class="sf_plus" rel="nofollow">+</a>
								<span>шт</span>
							</div>
				</div>
				<div class="clear"></div>
			</div>
			Удобная анатомическая форма ортопедической подушки Magniflex Orthomassage обеспечивает идеальную поддержку для шеи и гарантирует правильное положение головы, что способствует отличному сну и отдыху, обеспечивает дополнительный комфорт.
			<br /><br />
			 Специальные пирамидальные формочки в центральной части нежно "массажируют" затылочную зону головы и шею, высокотехнологичный наполнитель Memoform Magnifoam, реагируя на тепло и давление, создает эффект памяти: подушка сама подстраивается под индивидуальную форму головы и шеи спящего человека.
			<br /><br />
			Все ткани, материалы и наполнители проходят специальные санитарные обработки, в которых мы НЕ используем химические вещества. Наволочка подушки аа из 100% натурального хлопка (технология Coolmax), съемная, на молнии - легко стирается.
			<br /><br />
			Подушка Magniflex Orthomassage имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ. Настоящее превосходное итальянское качество!
			<iframe width="687" height="515" src="//www.youtube.com/embed/BhIR_BqHkAs?rel=0" frameborder="0" allowfullscreen style="margin: 0 0 0 -10px;"></iframe>
			<br><br>
				</div>
			</div>
		',
		'composition' => '
		<div class="ama_pillow_desk_block">
			<a href="/production/Coolmax/"><img src="/img/coolmax-newg.jpg" alt="Coolmax"></a>
			<a href="/production/Coolmax/"><p>Coolmax</p></a>
		</div>
		<div class="ama_pillow_desk_block">
			<a href="/production/Memoform-Magnifoam/"><img src="/img/memoform123.png" alt="Memoform Magnifoam"></a>
			<a href="/production/Memoform-Magnifoam/"><p>Мемоформ Магниформ</p></a>
		</div>
		',
		'recommend' => '',
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
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		'discount_koef' => array('date_start' => '20.03.2017', 'date_end' => '22.02.2018', 'price_koef' => 0.3, ), //скидка
		'price' => 9600,
	),

	array(
		'address' => 'ALOE+VERA',
		'parent_address' => 'snyatie-s-proizvodstva',
		'parent_name' => 'Снятые с производства',
		'name' => 'Подушка Aloe Vera (снята с производства)',
		'title' => 'Подушка Алоэ Вера (Magniflex Aloe Vera) - доступные цены в нашем интернет-магазине',
		'description' => 'Предлагаем купить подушку Алоэ Вера. Подушка Magniflex Aloe Vera обеспечивает анатомически правильное положение шейных позвонков и головы во время сна.',
		'keywords' => 'подушка, алоэ, вера, aloe, vera',
		'small_desc' => '
			<span class="hnb_popular">
			эффект "памяти"
			</span>
			<p class="hnb_harek">
			Ортопедическая подушка с идеальными анатомическими свойствами, экстракт Алоэ Вера.<br>
			Материал: Geomemory <br>
			Размеры: 72 x 42 x 12 см<br>
			Чехол: съемный,Coolmax<br>
			Сделано в Италии.
                 </p>
		',
		'small_img' => '/img/product/very_small/Aloe-Veranew.jpg',
		'small_img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Aloe Vera ',
		'img' => '/img/product/very_small/Aloe-Veranew.jpg',
		'img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Aloe Vera ',
		'attr' => '
			<ul><li>Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li>Размеры: 72 x 42 x 12 см. Вес: 1800 г.</li><li>Уровень комфорта: Мягкий</li><li>Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li>Условия: доставка, оплата</li><li>Срок службы: не менее 15 лет</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/Orthopedic_pillows/ALOE+VERA/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<style>
				.product_top{display: none;}
				.category_products.hnb_grid2 .category_product {
					width: 45%;
					    height: 350px;
					    margin-bottom: 40px;
				}
				.category_products {
					margin-bottom: 0;
					border-bottom: none;
				}
			</style>
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель Aloe Vera</div></li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/son-universal.jpg" height="196" title="Для сна на спине, на животе и на боку">
				Универсальная. Удобно спать на спине, животе или на боку!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
		<!-- 	<iframe width="687" height="515" src="//www.youtube.com/embed/aDVAjsGJqZ4?rel=0" frameborder="0" allowfullscreen style="margin: 0 0 0 -10px;"></iframe> -->
			<br /> <br /><br />
			Подушка Aloe Vera в настоящее время снята с производства. Вместо нее выпускаются усовершеннствованные аналоги: ортопедические подушки Superiore Standard и Classico Standard.<br /><br />
		<div class="category_products hnb_grid2">
			<div class="category_product">
				<a href="/catalog/Orthopedic_pillows/memoform-superiore-deluxe-standard/" class="category_product_img" title="Подушка Memoform Superiore Deluxe Standard"><img itemprop="image" src="/img/product/small/MEMOFORM STANDARD SUP MX-5 OK.jpg" alt=""></a>
				<input type="hidden" name="min_size" value="90x200">
				<a href="/catalog/Orthopedic_pillows/memoform-superiore-deluxe-standard/" class="category_product_name" title="Подушка Memoform Superiore Deluxe Standard">Memoform Superiore Deluxe Standard</a>
				<div class="small_desc">
					<p class="hnb_harek">Уровень комфорта:<br>
					Размеры: 72x42x12 см<br>
					Материал: Memoform Airyform<br>
					Чехол: съемный на молнии, outlast, 3D
					</p>
				</div>
				<div class="category_product_price">
					цена: <span>от 11 800 р.</span>  <a style="    float: right;" href="/catalog/Orthopedic_pillows/memoform-superiore-deluxe-standard/" title="Memoform Superiore Deluxe Standard">Подробнее</a>
				</div>

			</div>
			<div class="category_product">
				<a href="/catalog/Orthopedic_pillows/memoform_standard_classico/" class="category_product_img" title="Подушка Memoform Standard Classico"><img itemprop="image" src="/img/product/small/podushka-memoform-standard-classico-mx-magniflex_new.jpg" alt=""></a>
				<input type="hidden" name="min_size" value="90x200">
				<a href="/catalog/Orthopedic_pillows/memoform_standard_classico/" class="category_product_name" title="Подушка Memoform Standard Classico">Memoform Standard Classico</a>
				<div class="small_desc">
					<p class="hnb_harek">Уровень комфорта:<br>
					Размеры: 72x42x12 см<br>
					Материал: Memoform Airyform<br>
					Чехол: съемный на молнии, viscose
					</p>
				</div>
				<div class="category_product_price">
					цена: <span>от 10 600 р.</span><a  style="    float: right;" href="/catalog/Orthopedic_pillows/memoform_standard_classico/" title="Подушка Memoform Standard Classico">Подробнее</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
 <div class="clear"></div>
         В данных подушках используется материал Memoform Airyform, пена нового поколения, с увеличенным уровнем воздухопропускания, что гарантирует свежесть сна. Мелкопористая структура пены отлично пропускает воздух, тем самым способствует защите от пылевых клещей и прочих бактерий. Также в подушке присутствует специальная перфорация, обеспечивающая циркуляцию воздуха. (посередине подушки).
         Формы подушек абсолютно аналогичны модели Aloe Vera. Такая форма называется Стандарт (Standard). Подходит для сна в любом положении, на спине, на боку, на животе.<br /><br />
         Основное отличие новых двух коллекций исключительно в используемых чехлах, материал используется одинаковый: Memoform Airyform.<br /><br />
         Коллекция Classico - подушки с чехлами Viscose. Съемный чехол на молнии стал более совершенным, позволяет избежать появления катушек. Возможна деликатная стирка или химчистка. С дизайнерской точки зрения имеет рисунок в виде логотипов фабрики Magniflex, что делает продукцию более узнаваемой, подтверждая свой высокий класс.<br /><br />
         Коллекция Superiore - подушки с чехлами Outlast. Съемный чехол на молнии выполнен из материала, который был разработан для скафандров космонавтов - позволяет поддерживать комфортную температуру тела независимо от воздействия окружающей среды. Имеет сертификат Space technologies. Лишь несколько компаний в мире имеют официальное право использовать данный материал в своей продукции, в том числе и фабрика Magniflex. Остерегайтесь подделок. Подушка позволяет сохранять комфортную температуру тела, если прикоснуться к ткани, например, холодной рукой, она позволит передать руке тепло, благодаря функции теплообмена, и наоборот - охладить слишком теплую руку до комфортной температуры.<br /><br />
         Эта потрясающая технология длительное время была недоступна для обычного человека, но прогресс не стоит на месте и Magniflex с радостью дарит такую возможность для своих клиентов. Качественный и здоровый сон - наша цель и задача.<br /><br />
            Описание снятой с производства подушки Magniflex Aloe Vera: <br /><br />
			Подушка "Алоэ Вера" обеспечивает анатомически правильное положение шейных позвонков и головы во время сна, способствует полноценному отдыху и комфортному сну, предотвращает риск возможности возникновения патологий шейного отдела позвоночника, заболеваний суставов.
			<br /><br />
			 Подушка с эффектом памяти, благодаря наполнителю Memoform Magnifoam, реагирующего на тепло и давление, подушка сама подстраивается под форму головы и шеи, что исключает давление на область шеи и головы, затекание мышц, улучшает кровоснабжение, не пережимая сосуды.
			<br /><br />
			Ткани подушки Magniflex Aloe Vera, пропитанные экстрактом алоэ вера, содержат миллионы микрокапсул: в результате теплового контакта с кожей микрокапсулы раскрываются, высвобождая полезные вещества, которые помогают заживлять ранки, замедляют старение клеток, оказывают противовоспалительное действие.
			<br /><br />
			Все ткани и наполнители подушки проходят специальные санитарные обработки, в которых НЕ используются химические вещества. Обладает антиаллергенными свойствами, гарантирует 100% защиту от пылевых клещей, плесени и бактерий (рекомендуется для аллергиков и астматиков).
			<br /><br />
			Наволочка подушки изготовлена из 100% натурального хлопка (технология Coolmax), съемная, на молнии - возможна бережная стирка.
			<br /><br />
			Подушка Magniflex Aloe Vera имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br>
			<iframe width="687" height="515" src="//www.youtube.com/embed/tWGzvuW2Jac?rel=0" frameborder="0" allowfullscreen style="margin: 0 0 0 -10px;"></iframe>
			<br><br>
				</div>
			</div>
		',
		'composition' => '
			Наволочка: 100% натуральный хлопок.
			Подушка:
			в основе материал Memoform
			Один из самых мягких материалов - дарит ни с чем несравнимый комфорт. Благодаря своей инновационной сверхбыстрой способности реагирования на тепло и давление, наполнитель мгновенно принимает форму тела, предоставляя превосходную ортопедическую поддержку всему организму в целом, а в особенности спине. Материал очень быстро возвращает свою оригинальную форму, приспосабливается к движениям человека, способствуя крепкому и здоровому сну.
			<div class="ama_pillow_desk_block">
				<a href="/production/Coolmax/"><img src="/img/coolmax-newg.jpg" alt="Coolmax"></a>
				<p>Coolmax</p>
			</div>
			<div class="ama_pillow_desk_block">
				<a href="/production/Cotton/"><img src="/img/cotton_new.jpg" alt="100% натуральный хлопок"></a>
				<p>100% натуральный хлопок</p>
			</div>
		',
		'recommend' => '',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Матрасы Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
					<br>
				Сертифицировано в 96-ти странах мира! <br>
					Травматологии и Ортопедии РФ
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>
			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 96-ти странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>
			<br><br>
				</div>
			</div>
		',
		'review' => '',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'skidka_text' => '
			<span id="skidka2"><b>25%</b> скидка на все подушки при покупке матраса</span>
		',
		'sizes' => false,
		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		'price' => 10600,
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 7600,
		//), //скидка
	),
	array(
		'address' => 'ortopedicheskoe-osnovanie-komfort',
		'parent_address' => 'ortopedicheskie-reshetky',
		'parent_address2' => 'bases',
		'parent_name' => 'Аксессуары',
		'name' => 'Ортопедическое основание "КОМФОРТ"',
		'other_categories' => array('comfort_new'),
		'title' => 'Ортопедическое основание "КОМФОРТ"',
		'description' => 'фотографии, описание, характеристики Ортопедическое основание "КОМФОРТ"',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, Ортопедическое основание "КОМФОРТ"',
		'small_desc' => '
			<p class="hnb_harek">
			Березовые ламели <br />
			Стандартная высота: 28 см, возможен любой размер<br />
			Максимальный вес спящего: 150 кг. <br />
			Гарантия: 3 года  <br />
			Производитель: Comfort Line (Россия)
                 </p>
		',
		'small_img' => '/img/product/very_small/osnovanie.jpg',
		'small_img_alt' => 'Ортопедическое основание "КОМФОРТ" ',
		'img' => '/img/product/big/osnovanie-comfort-02.jpg',
		'img_alt' => 'Ортопедическое основание решетка "КОМФОРТ" ',
		'attr' => '
			<ul><li>Профильная металлическая труба, гнуто-клееные березовые ламели </li><li>Стандартная высота: 28 см, ножка может быть выполнена ЛЮБОЙ высоты!</li><li>Цвет каркаса - черный (возможна покраска ЛЮБЫМ цветом)</li><li>Срок доставки: завтра для Москвы</li><li>Максимальный вес спящего: 150 кг. </li><li>Гарантия: 3 года</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/DREAM/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
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
			<div class="hnb_contmy">
				<div class="hnb_contrig">
<br />
<b>Ортопедическое основание начального уровня "Комфорт"</b>
 <br /><br />
Каркас и опоры изделия изготавливаются  из металлической трубы, поперечные перегородки (ламели) ШИРОКИЕ — из березы. Основание универсальное, благодаря скругленным углам легко устанавливается в любую кровать, даже оснащенную внутренними элементами крепления. Можно использовать отдельно от кровати, поместив матрас непосредственно на решетку.
 <br /><br />
Ортопедические основания необходимы для усиления ортопедических свойств матрасов: упругие березовые ламели, реагируя на изменение нагрузки под весом спящего человека, равномерно распределяют давление по всей площади решетки.
<br /><br /><br />
<b>Характеристики:</b>
 <br /><br />
Основа каркаса — профильная металлическая трубы 30х30х1,5.
 <br /><br />
Ламели берёзовые, широкие: толщина 8 мм, ширина 53 мм, крепление ламели поверх металлической трубы.
 <br /><br />
Порошковая покраска, цвет чёрный (возможна покраска ЛЮБЫМ ЦВЕТОМ).
  <br /><br />
Ножка может быть выполнена любой высоты, изготовлена из профильной трубы 30х30х1,5 с пластмассовой заглушкой и укомплектована болтом М10*20.
			<br><br>
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
			array('80x190',3600.00),
			array('80x200',3600.00),
			array('90x190',3700.00),
			array('90x200',3700.00),
			array('100x200',4200.00),
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
		'parent_address' => 'ortopedicheskie-reshetky',
		'parent_address2' => 'bases',
		'parent_name' => 'Аксессуары',
		'name' => 'Ортопедическое основание "КОМФОРТ" (разборное)',
		'other_categories' => array('comfort_new_razb'),
		'title' => 'Ортопедическое основание "КОМФОРТ" (разборное)',
		'description' => 'фотографии, описание, характеристики Ортопедическое основание "КОМФОРТ" (разборное)',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, Ортопедическое основание "КОМФОРТ", разборное',
		'small_desc' => '
			<p class="hnb_harek">
			Березовые ламели <br />
			Стандартная высота: 28 см, возможен любой размер<br />
			Максимальный вес спящего: 150 кг. <br />
			Гарантия: 3 года  <br />
			Производитель: Comfort Line (Россия)
                 </p>
		',
		'small_img' => '/img/product/very_small/osnovanie-razbornoe.jpg',
		'small_img_alt' => 'Ортопедическое основание "КОМФОРТ" (разборное)',
		'img' => '/img/product/big/osnovanie2.jpg',
		'img_alt' => 'Ортопедическое основание "КОМФОРТ" (разборное)',
		'attr' => '
			<ul><li>Стальная рама,  гнуто-клееные березовые ламели </li><li>Высота основания: 28 см</li><li>Высота ножек: 25,5 см, 5 ножек у двуспального варианта</li><li>Срок доставки: завтра для Москвы</li><li>Максимальный вес спящего: 150 кг. </li><li>Гарантия: 3 года</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/DREAM/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
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
		  <img itemprop="image" src="/img/product/accessory/osnovanie-razbornoe.jpg" title="Ортопедическое основание разборное" alt="Ортопедическое основание разборное" />
			<div class="hnb_contmy">
				<div class="hnb_contrig">
Ортопедическое разборное основание Comfort – специальная подставка под матрас. Может быть установлено в кровать или использоваться и отдельно. Основание значительно усиливает ортопедические свойства Вашего матраса. Благодаря слегка выгнутой форме упругие березовые ламели реагируют на изменение нагрузки, равномерно распределяя давление.
Производитель: Comfort Line (Россия).
			<br><br>
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
			array('100x200',4200.00),
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
		'address' => 'Topper-Best-Top',
		'parent_address' => 'toppers',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Аксессуары',
		'name' => 'Тонкий матрас Topper Best Top',
		'other_categories' => array('topper_new', 'for_sofa_new', 'tight_new','mattresses','divan','divannie-mattresses', 'mattresses-filter','mattresses-for-sofa','thin-mattresses'),
		'title' => 'Topper Best Top: топпер, тонкий матрас, матрас для дивана',
		'description' => 'Топпер. Тонкий матрас. Матрас для дивана',
		'keywords' => 'топпер, тонкий матрас, матрас для дивана, матрасы для дивана',
		'span_title' => 'Тонкий матрас',
		'small_desc' => '
			<p class="hnb_harek">
			Тонкий матрас высотой 5 см<br />
			Эффект памяти! Memoform <br />
		  Дышащая ткань Coolmax <br />
      Улучшает анатомические  свойства<br />
      Идеален для раскладных диванов!
                 </p>
		',
		'attr_cat_product1' => '5 см',
		'attr_cat_product2' => 'Съемный',
		'attr_cat_product3' => 'Мягкий',
		'new_desc' => 'Можно использовать как матрас для дивана или повысить уровень комфорта матраса, эффект «памяти»',

		'small_img' => '/img/product/big/TOPPER-BEST-TOP.jpg',
		'small_img_alt' => 'Topper Best Top',
		'img_preview' => array('/img/best-top-4.jpg','/img/Best-Top-opisnew-left.png'),
		'img' => '/img/product/big/TOPPER-BEST-TOP.jpg',
		'img_alt' => 'Topper Best Top',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li>Топпер. Тонкий матрас. Наматрасник</li>
				<li>Высота: 5 см.</li>
				<li>Жесткость: мягкий</li>
				<li>Чехол: съемный на молнии, ткань Coolmax, на резинках.</li>
				<li>Наполнитель: Memoform с перфорацией.</li>
				<li>Срок службы: не менее 15 лет.</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Тонкий матрас <div class="hnb_marg">с материалом Memoform с эффектом памяти – гарантия повышенных анатомических свойств. Вертикальная перфорация – свежесть сна и повышенный воздухообмен.</div></li>
			<li class="hnb_ligray">Съемный чехол<div class="hnb_marg">с технологией Coolmax – разработка для спортсменов – это и терморегуляция и удобство эксплуатации. Возможна химчистка.</div></li>
			<li class="hnb_liwhite">Высота в 5 см<div class="hnb_marg">оптимальный существенный вариант повышения уровня комфортности спальному месту.</div></li>
			<li class="hnb_ligray">Топпер <div class="hnb_marg">поставляется в рулоне – существенная экономия на транспортных расходах при заказе в регионы. Сворачивается в рулон многократно!</div></li>
			<li class="hnb_liwhite">Сделано в Италии<div class="hnb_marg">Тоскана, Флоренция. Качество и надежность. Продается в 96-ти странах мира!</div></li>
			</ul>
		',
		'desc' => '
		<div class="block_line2">
				<div class="half-width">
				<h3>Наматрасник (топпер/тонкий матрас) Best Top Magniflex</h3>
				Отличный вариант повышение уровня комфорта матраса или эксплуатации на складываемом диване.

					<br><br>
					Топпер (наматрасник/тонкий матрас) Best Top – выполнен из материала с эффектом памяти Memoform. Материал позволяет анатомически повторять контуры тела, легко подстраиваясь под фигуру человека и создавая оптимальный уровень комфорта. Сам материал выполнен с вертикальной перфорацией, что делает этот топпер невероятно дышащим – а это отличный способ избежать образования пылевых клещей. Повышенный воздухообмен и высокий уровень циркуляции воздуха во время эксплуатации превращает этот тонкий матрас в прекрасный инструмент создания свежести во время сна на поверхности спального места.
					<br><br>
					Чехол выполнен из материала Coolmax, аналогично матрасу модели Memo Merino. Свойства материала Coolmax обеспечивают отличный теплообмен и позволяют сохранять комфортный уровень температуры поверхности спального места. По периметру матраса идет молния – легко снимать чехол и при необходимости отдавать в химчистку.
					<br><br>
					Такой тонкий матрас Best Top – идеальный вариант для эксплуатации на раскладном диване, когда нет возможности использовать полноценную кровать для сна в целях экономии места и пространства в квартире. Топпер легко сворачивается и складывается в сам диван. Либо его можно свернуть в компактный рулон, закрепить резинками и хранить в любом удобном для Вас месте.
					<br><br>
					Для путешествующих по квартирам в аренду это также прекрасный вариант сохранять комфортность своего спального места в любых условиях и на любых спальных поверхностях.
				</div>
		<div class="half-width_img">
			<img src="/img/product/50163135_2260153334201292_4796494128502136512_n.jpg">
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
			array('80x190',16900.00),
			array('80x200',17900.00),
			array('90x190',19200.00),
			array('90x200',19900.00),
			array('120x200',26700.00),
			array('140x200',31100.00),
			array('160x200',35500.00),
			array('180x200',40100.00),
			array('200x200',44400.00),
		),
		'discount_koef' => array('date_start' => '14.12.2018', 'date_end' => '31.12.2018', 'price_koef' => 0.1),
	),
	array(
		'address' => 'ASMANA-400-3',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'ASMANA 400 3',
		'other_categories' => array('asmana_new'),
		'title' => 'Пледы',
		'description' => 'Пледы. Пледы, фотографии, описание, характеристики ортопедического ASMANA 400 3',
		'keywords' => 'Пледы, ',
		'small_desc' => '
			<p class="hnb_harek">
			Состав: 90% шерсть, 10% кашемир.<br>
Размер: 150х200.<br>
Цвет: Светло-коричневый<br>
Рисунок: узор с бахромой<br>
Производитель: Italian Woollen Treasures S.r.l., Италия<br>
                 </p>
		',
		'attr_cat_product1' => '90% шерсть, 10% кашемир',
		'attr_cat_product2' => '150х200',
		'attr_cat_product3' => 'Светло-коричневый.',
		'attr_cat_product4' => 'Узор с бахромой',
		'small_img' => '/img/product/very_small/Asmana_400_3_interior_2.jpg',
		'small_img_alt' => 'Итальянский плед. Коллекция ASMANA 400 3',
		'img' => '/img/product/Asmana_400_03.jpg',
		'img_preview' => array('/img/product/Asmana_400_3_detail.jpg', '/img/product/Asmana_400_3_interior_1.jpg'),
		'img_alt' => 'Итальянский плед. Коллекция ASMANA 400 3',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li>Состав: 90% шерсть, 10% кашемир</li>
				<li>Размер: 150х200</li>
				<li>Цвет: Светло-коричневый.</li>
				<li>Рисунок: Узор с бахромой</li>
				<li>Производитель: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">90% шерсть, 10% кашемир</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
		'desc' => '
		<div class="block_line2">
		<div class="half-width">
		<h3>Итальянский шерстяной плед ASMANA 400 3</h3>
		Высококачественный итальянский плед, производство Италия, Тоскана, Флоренция, г. Прато

			<br><br>
			Коллекция Асмана – это коллекция однотонных пледов из натуральных материалов. Состав ткани: 90% шерсть и 10% кашемир. Плед очень мягкий и приятный на ощупь благодаря наличию кашемира. Кашемир очень нежный и не колется, как обычная грубая шерсть. Также изделия из кашемира имеют небольшой вес. Наличие натуральной шерсти позволяют пледу согревать и сохранять тепло, при этом позволяя телу дышать, оставляя его сухим.
			<br><br>
			Натуральный кашемир — дорогой и редкий материал. Изделия из него характеризуются лёгкостью, очень приятны на ощупь. Для сравнения, человеческий волос имеет толщину около 50—75 мкм, а качественная кашемировая нить — около 19—20 мкм. Пух для изделий из кашемира выщипывают или вычёсывают вручную весной, во время линьки коз. Одна коза в год даёт 150—200 граммов неочищенного (первичного) кашемира. После очистки, обработки пуха остаётся всего лишь 80—120 граммов.
			<br><br>
			Пледы коллекции Asmana поставляются в категории цвета под № 3 (коричневый оттенок). Незаменимая вещь в холодную погоду, не только в зимнее время, но и в летнее или весенне-осеннее – проводить вечера на свежем воздухе, согреваясь приятным итальянским пледом.
			<br><br>
			Забота о себе и близких, дома, на балконе, на даче, в загородном доме, на веранде кафе, в любом другом месте – плед согреет и подарит комфорт. Плед может служить не только покрывалом для Вашей кровати, но также может использоваться как одеяло или платок.
			<br><br>
			Поставляется в разных размерах, на сегодня доступен цвет №3 и размер 150х200. В случае необходимости заказа другого размера или пожеланий по размеру, просьба обращаться по телефонам нашей горячей линии: +7-495-507-22-65 или по электронной почте: info@magniflex.ru
		</div>
		<div class="half-width_img">
			<img src="/img/product/Asmana_400_3_interior_2.jpg">
		</div>
	</div>
		',
		'composition' => '
			<div class="type">
				Состав: 90% шерсть, 10% кашемир
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
		'cycle-title' => 'Плед Magniflex ASMANA 400 3',
		'cycle-name' => 'Плед Magniflex ASMANA 400 3',
		'sizes' => array(
			array('150x200',18400.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'SORRENTO-1',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'Плед Sorrento 1',
		'other_categories' => array('sorrento1_new'),
		'title' => 'Итальянский плед SORRENTO 1',
		'description' => 'Пледы. Пледы, фотографии, описание, характеристики ортопедического SORRENTO 1',
		'keywords' => 'Пледы, ',
		'small_desc' => '',
		'attr_cat_product1' => '100% шерсть',
		'attr_cat_product2' => '150х200',
		'attr_cat_product3' => 'Бежевый, оливковый.',
		'attr_cat_product4' => 'Геометрия, клетка с бахромой.',
		'small_img' => '/img/product/very_small/Sorrento_1_interior_2.jpg',
		'small_img_alt' => 'SORRENTO 1',
		'img' => '/img/product/Sorrento_1.jpg',
		'img_preview' => array( '/img/product/Sorrento_1_detail.jpg', '/img/product/Sorrento_1_interior_1.jpg'),
		'img_alt' => 'SORRENTO 1',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li><b>Состав</b>: 100% шерсть</li>
				<li><b>Рисунок</b>: геометрия, клетка с бахромой</li>
				<li></b>Производитель</b>: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">100% шерсть</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
		'desc' => '
		<div class="block_line2">
		<div class="half-width">
		<h3>Итальянский шерстяной плед  SORRENTO 1</h3>
		Высококачественный итальянский плед, производство Италия, Тоскана, Флоренция, г. Прато

			<br><br>
			
Коллекция LUCCA – это пледы из натуральной шерсти. Дизайн пледа – стильная клетка с добавлением дополнительных полосок, что придает внешнему виду более дизайнерский вид. Используется несколько расцветок, на сегодня в продаже расцветка № 1 и № 3 (Lucca 1 Lucca 3).
<br><br>
Плед из натуральной шерсти отлично держит тепло, при этом обеспечивает циркуляцию воздуха, что позволяет оставаться телу сухим. Шерсть оказывает благоприятное влияние на организм, стимулируя кровообращение, благотворно воздействуя на кожу и мышечные ткани. Шерсть обладает такими важными свойствами, как гигроскопичность, теплоизоляция и воздухопроницаемость.
<br><br>
Плед может служить не только покрывалом для Вашей кровати, но также может использоваться как одеяло или платок. Плед – это практичное и долговечное изделие, не требует частых стирок, в поездках занимает минимум места, в нем не заводятся клещи, избавляет от стресса благодаря терапевтическим свойствам.
<br><br>
Поставляется в разных размерах, на сегодня доступен цвет №1 и №3 и размер 150х200. В случае необходимости заказа другого размера или пожеланий по размеру, просьба обращаться по телефонам нашей горячей линии: +7-495-507-22-65 или по электронной почте: info@magniflex.ru
		</div>
		<div class="half-width_img">
			<img src="/img/product/Sorrento_1_interior_2.jpg">
		</div>
	</div>
		',
		'composition' => '
			<div class="type">
				Состав: 100% шерсть
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
		'cycle-title' => 'Плед Magniflex SORRENTO 1',
		'cycle-name' => 'Плед Magniflex SORRENTO 1',
		'sizes' => array(
			array('150x200',15800.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'SORRENTO-2',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'Плед Sorrento 2',
		'other_categories' => array('sorrento2_new'),
		'title' => 'Итальянский плед SORRENTO 2',
		'description' => 'Пледы. Пледы, фотографии, описание, характеристики ортопедического SORRENTO 2',
		'keywords' => 'Пледы, итальянские пледы',
		'small_desc' => '',
		'attr_cat_product1' => '100% шерсть',
		'attr_cat_product2' => '150х200',
		'attr_cat_product3' => 'Бежевый, голубой.',
		'attr_cat_product4' => 'Геометрия, клетка с бахромой.',
		'small_img' => '/img/product/very_small/Sorrento_2_interior_2.jpg',
		'small_img_alt' => 'SORRENTO 2',
		'img' => '/img/product/Sorrento_2.jpg',
		'img_preview' => array( '/img/product/Sorrento_2_detail.jpg', '/img/product/Sorrento_2_interior_1.jpg' ),
		'img_alt' => 'SORRENTO 2',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li><b>Состав</b>: 100% шерсть</li>
				<li><b>Рисунок</b>: геометрия, клетка с бахромой</li>
				<li><b>Производитель</b>: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">100% шерсть</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
		'desc' => '
		<div class="block_line2">
				<div class="half-width">
				<h3> Итальянский шерстяной плед  SORRENTO 2</h3>
				Высококачественный итальянский плед, производство Италия, Тоскана, Флоренция, г. Прато

					<br><br>
					Коллекция SORRENTO – это пледы из натуральной шерсти. Дизайн пледа – классическая клетка, используется несколько расцветок, на сегодня в продаже расцветка № 1 и № 2 (Sorrento 1 Sorrento 2).
					<br><br>
					Плед из натуральной шерсти отлично держит тепло, при этом обеспечивает циркуляцию воздуха, что позволяет оставаться телу сухим. Шерсть оказывает благоприятное влияние на организм, стимулируя кровообращение, благотворно воздействуя на кожу и мышечные ткани. Шерсть обладает такими важными свойствами, как гигроскопичность, теплоизоляция и воздухопроницаемость.
					<br><br>
					Плед может служить не только покрывалом для Вашей кровати, но также может использоваться как одеяло или платок. Плед – это практичное и долговечное изделие, не требует частых стирок, в поездках занимает минимум места, в нем не заводятся клещи, избавляет от стресса благодаря терапевтическим свойствам.
					<br><br>
					Поставляется в разных размерах, на сегодня доступен цвет №1 и №2 и размер 150х200. В случае необходимости заказа другого размера или пожеланий по размеру, просьба обращаться по телефонам нашей горячей линии: +7-495-507-22-65 или по электронной почте: info@magniflex.ru
				</div>
				<div class="half-width_img">
					<img src="/img/product/very_small/Sorrento_2_interior_2.jpg">
				</div>
			</div>
		',
		'composition' => '
			<div class="type">
				Состав: 100% шерсть
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
		'cycle-title' => 'Плед Magniflex SORRENTO 2',
		'cycle-name' => 'Плед Magniflex SORRENTO 2',
		'sizes' => array(
			array('150x200',15800.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'SORRENTO-3',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'Плед Sorrento 3',
		'other_categories' => array('sorrento2_new'),
		'title' => 'Итальянский плед SORRENTO 3',
		'description' => 'Пледы. Пледы, фотографии, описание, характеристики ортопедического SORRENTO 3',
		'keywords' => 'Пледы, итальянские пледы',
		'small_desc' => '',
		'attr_cat_product1' => '100% шерсть',
		'attr_cat_product2' => '150х200',
		'attr_cat_product3' => 'Бежевый, светло-коричневый.',
		'attr_cat_product4' => 'Геометрия, клетка с бахромой.',
		'small_img' => '/img/product/very_small/Sorrento-3-interior-1-internet2.jpg',
		'small_img_alt' => 'Плед  Sorrento 3',
		'img' => '/img/product/Sorrento-3.jpg',
        'img_preview' => array('/img/product/Sorrento-3-2.jpg'),
		'img_alt' => 'SORRENTO 3',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li><b>Состав</b>: 100% шерсть</li>
				<li><b>Рисунок</b>:  Геометрия, клетка с бахромой.</li>
				<li><b>Производитель</b>: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">100% шерсть</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
		'desc' => '
		<div class="block_line2">
		<div class="half-width">
		<h3>Итальянский шерстяной плед SORRENTO 3</h3>
		Высококачественный итальянский плед, производство Италия, Тоскана, Флоренция, г. Прато

			<br><br>
			Коллекция SORRENTO – это пледы из натуральной шерсти. Дизайн пледа – классическая клетка, используется несколько расцветок, на сегодня в продаже расцветка № 1, № 2 и № 3 (Sorrento 1 Sorrento 2 Sorrento 3).
			<br><br>
			Плед из натуральной шерсти отлично держит тепло, при этом обеспечивает циркуляцию воздуха, что позволяет оставаться телу сухим. Шерсть оказывает благоприятное влияние на организм, стимулируя кровообращение, благотворно воздействуя на кожу и мышечные ткани. Шерсть обладает такими важными свойствами, как гигроскопичность, теплоизоляция и воздухопроницаемость.
			<br><br>
			Плед может служить не только покрывалом для Вашей кровати, но также может использоваться как одеяло или платок. Плед – это практичное и долговечное изделие, не требует частых стирок, в поездках занимает минимум места, в нем не заводятся клещи, избавляет от стресса благодаря терапевтическим свойствам.
			<br><br>
			Поставляется в разных размерах, на сегодня доступен цвет №1 и №2 и размер 150х200. В случае необходимости заказа другого размера или пожеланий по размеру, просьба обращаться по телефонам нашей горячей линии: +7-495-507-22-65 или по электронной почте: info@magniflex.ru
		</div>
		<div class="half-width_img">
			<img src="/img/product/very_small/Sorrento-3-interior-1-internet2.jpg">
		</div>
	</div>
		',
		'composition' => '
			<div class="type">
				Состав: 100% шерсть
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
		'cycle-title' => 'Плед Magniflex SORRENTO 3',
		'cycle-name' => 'Плед Magniflex SORRENTO 3',
		'sizes' => array(
			array('150x200',15800.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'LUCCA-1',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'LUCCA 1',
		'other_categories' => array('lucca1_new'),
		'title' => 'Итальянский плед  LUCCA',
		'description' => 'Пледы. Пледы, фотографии, описание, характеристики ортопедического LUCCA 1',
		'keywords' => 'Пледы, итальянские пледы',
		'small_desc' => '
			<p class="hnb_harek">
			Состав: 100% шерсть<br>
		    Размер: 150х200<br>
			Цвет: Бежевый, коричневый.<br>
Рисунок: Геометрия, клетка с бахромой.<br>
Производитель: Italian Woollen Treasures S.r.l., Италия.
                 </p>
		',
		'attr_cat_product1' => '100% шерсть',
		'attr_cat_product2' => '150х200',
		'attr_cat_product3' => 'Бежевый, коричневый.',
		'attr_cat_product4' => 'Геометрия, клетка с бахромой.',
		'small_img' => '/img/product/very_small/Lucca_1_interior_2 (1).jpg',
		'small_img_alt' => 'LUCCA 1',
		'img' => '/img/product/Lucca_1.jpg',
		'img_preview' => array( '/img/product/Lucca_1_detail.jpg', '/img/product/Lucca_1_interior_1.jpg'),
		'img_alt' => 'LUCCA 1',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li>Состав: 100% шерсть</li>
				<li>Размер: 150х200</li>
				<li>Цвет: Бежевый, коричневый.</li>
				<li>Рисунок: Геометрия, клетка с бахромой.</li>
				<li>Производитель: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">100% шерсть</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
		'desc' => '
		<div class="block_line2">
				<div class="half-width">
				<h3>Итальянский шерстяной плед LUCCA 1</h3>
				Высококачественный итальянский плед, производство Италия, Тоскана, Флоренция, г. Прато

					<br><br>
					Коллекция LUCCA – это пледы из натуральной шерсти. Дизайн пледа – стильная клетка с добавлением дополнительных полосок, что придает внешнему виду более дизайнерский вид. Используется несколько расцветок, на сегодня в продаже расцветка № 1 и № 3 (Lucca 1 Lucca 3).
					<br><br>
					Плед из натуральной шерсти отлично держит тепло, при этом обеспечивает циркуляцию воздуха, что позволяет оставаться телу сухим. Шерсть оказывает благоприятное влияние на организм, стимулируя кровообращение, благотворно воздействуя на кожу и мышечные ткани. Шерсть обладает такими важными свойствами, как гигроскопичность, теплоизоляция и воздухопроницаемость.
					<br><br>
					Плед может служить не только покрывалом для Вашей кровати, но также может использоваться как одеяло или платок. Плед – это практичное и долговечное изделие, не требует частых стирок, в поездках занимает минимум места, в нем не заводятся клещи, избавляет от стресса благодаря терапевтическим свойствам.
					<br><br>
					Поставляется в разных размерах, на сегодня доступен цвет №1 и №3 и размер 150х200. В случае необходимости заказа другого размера или пожеланий по размеру, просьба обращаться по телефонам нашей горячей линии: +7-495-507-22-65 или по электронной почте: info@magniflex.ru
				</div>
				<div class="half-width_img">
					<img src="/img/product/Lucca_1_interior_2.jpg">
				</div>
			</div>
		',
		'composition' => '
			<div class="type">
				Состав: 100% шерсть
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
		'cycle-title' => 'Плед Magniflex LUCCA 1',
		'cycle-name' => 'Плед Magniflex LUCCA 1',
		'sizes' => array(
			array('150x200',15800.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'LUCCA-3',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'LUCCA 3',
		'other_categories' => array('lucca3_new'),
		'title' => 'Итальянский плед LUCCA 3',
		'description' => 'Пледы. Пледы, фотографии, описание, характеристики ортопедического LUCCA 3',
		'keywords' => 'Пледы, итальянские пледы',
		'small_desc' => '
			<p class="hnb_harek">
			Состав: 100% шерсть<br>
		    Размер: 150х200<br>
			Цвет: Серый.<br>
Рисунок: Геометрия, клетка с бахромой.<br>
Производитель: Italian Woollen Treasures S.r.l., Италия.
                 </p>
		',
		'attr_cat_product1' => '100% шерсть',
		'attr_cat_product2' => '150х200',
		'attr_cat_product3' => 'Серый.',
		'attr_cat_product4' => 'Геометрия, клетка с бахромой.',
		'small_img' => '/img/product/very_small/Lucca_3_interior_2 (1).jpg',
		'small_img_alt' => 'LUCCA 3',
		'img' => '/img/product/Lucca_3.jpg',
		'img_preview' => array( '/img/product/Lucca_3_detail.jpg', '/img/product/Lucca_3_interior_1.jpg'),
		'img_alt' => 'LUCCA 3',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li>Состав: 100% шерсть</li>
				<li>Размер: 150х200</li>
				<li>Цвет: Серый.</li>
				<li>Рисунок: Геометрия, клетка с бахромой.</li>
				<li>Производитель: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">100% шерсть</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
		'desc' => '
		<div class="block_line2">
				<div class="half-width">
				<h3>Итальянский шерстяной плед LUCCA 3</h3>
				Высококачественный итальянский плед, производство Италия, Тоскана, Флоренция, г. Прато

					<br><br>
					Коллекция LUCCA – это пледы из натуральной шерсти. Дизайн пледа – стильная клетка с добавлением дополнительных полосок, что придает внешнему виду более дизайнерский вид. Используется несколько расцветок, на сегодня в продаже расцветка № 1 и № 3 (Lucca 1 Lucca 3).
					<br><br>
					Плед из натуральной шерсти отлично держит тепло, при этом обеспечивает циркуляцию воздуха, что позволяет оставаться телу сухим. Шерсть оказывает благоприятное влияние на организм, стимулируя кровообращение, благотворно воздействуя на кожу и мышечные ткани. Шерсть обладает такими важными свойствами, как гигроскопичность, теплоизоляция и воздухопроницаемость.
					<br><br>
					Плед может служить не только покрывалом для Вашей кровати, но также может использоваться как одеяло или платок. Плед – это практичное и долговечное изделие, не требует частых стирок, в поездках занимает минимум места, в нем не заводятся клещи, избавляет от стресса благодаря терапевтическим свойствам.
					<br><br>
					Поставляется в разных размерах, на сегодня доступен цвет №1 и №3 и размер 150х200. В случае необходимости заказа другого размера или пожеланий по размеру, просьба обращаться по телефонам нашей горячей линии: +7-495-507-22-65 или по электронной почте: info@magniflex.ru
				</div>
				<div class="half-width_img">
					<img src="/img/product/Lucca_3_interior_2.jpg">
				</div>
			</div>
		',
		'composition' => '
			<div class="type">
				Состав: 100% шерсть
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
		'cycle-title' => 'Плед Magniflex LUCCA 3',
		'cycle-name' => 'Плед Magniflex LUCCA 3',
		'sizes' => array(
			array('150x200',15800.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'LARA-1',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'Плед Lara Bianco',
		'other_categories' => array('lara1_new'),
		'title' => 'Итальянский плед LARA Bianco',
		'description' => 'Пледы. Пледы, фотографии, описание, характеристики ортопедического LARA Bianco',
		'keywords' => 'Пледы, ',
		'small_desc' => '',
		'attr_cat_product1' => '80% шерсть, 20% полиамид',
		'attr_cat_product2' => '150х200',
		'attr_cat_product3' => 'Слоновая кость.',
		'attr_cat_product4' => 'Однотонный с бахромой.',
		'small_img' => '/img/product/very_small/Larasmall.jpg',
		'small_img_alt' => 'LARA Bianco',
		'img' => '/img/product/Lara_1.jpg',
		'img_preview' => array( '/img/product/Lara_1_detail.jpg', '/img/product/Lara_1_interior_2.jpg'),
		'img_alt' => 'LARA Bianco',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li><b>Состав</b>: 80% шерсть, 20% полиамид</li>
				<li><b>Рисунок</b>: Однотонный, цвета "слоновая кость" с бахромой</li>
				<li><b>Производитель</b>: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>


			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">80% шерсть, 20% полиамид</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
		'desc' => '
		<div class="common_block_common">
			<div class="half-width">
			<h3>Итальянский шерстяной плед Lara Bianco</h3>
			<strong><i>Высококачественный итальянский плед, производство Италия, Тоскана, Флоренция, г. Прато</i></strong>
            Пледы коллекции LARA – дизайнерский однотонный плед, который на 80% состоит из натуральной шерсти. Светлый молочный оттенок.</b>
            В пледе использовано 20% полиамида. Полиамид — это волокно, пропускающее воздух, быстросохнущее, маломнущееся, материал с которым мы постоянно сталкиваемся в быту. Вещи из полиамида прекрасно и довольно долго сохраняют свой первоначальный товарный вид, поскольку данный вид материала особенно устойчив к изнашиванию и состоит из волокон высокой прочности.</b>
            Хорошая эластичность, продукция из данного материала приятная на ощупь и эффектно выглядит. Полиамид очень лёгок, так как удельный вес волокон низкий. Материя из полиамида плохо пропускает влагу и быстро высыхает, в три раза быстрей одежды из хлопка (хорошо подходит для верхней одежды). Ткань выглядит очень красиво, никогда не выцветет, не потеряет форму, хорошо отражает свет и не мнётся. Неплохо пропускает воздух. Полиамид на 100 % устойчив к воздействию термоокислителей. Такая ткань не поддаётся грибку и поэтому не гниёт. Высокий уровень пожаробезопасности: этот материал не горит, а плавится при высокой температуре. Уход за такой тканью простой, ее легко стирать, и она не садится. 
             </div>
        	<div class="coin-slider">
		    <img src="/img/Lara_1_interior_1.jpg" alt="плед Lara Bianco в интерьере">
	        </div>
        </div>
        
        <div class="common_block_common fixcommon-block">
			<div class="half-width fixcommon-block">
			<h3>Цвета и размеры</h3>
			<p class="text-jus">
            Поставляется в разных размерах, в случае необходимости заказа другого размера просьба обращаться по телефонам нашей горячей линии: +7-495-507-22-65 или по электронной почте: info@magniflex.ru</p>
		</div>
		<div class="half-width fixcommon-block">
			<h3>О пледах</h3>
			    <p class="text-jus">
	            Плед может служить не только покрывалом для Вашей кровати, но и использоваться в качестве одеяла или платка. Плед – практичное и долговечное изделие, не требующее частых стирок, в поездках занимает минимум места, в нём не заводятся клещи. Он избавит от стресса благодаря терапевтическим свойствам. 
			    </p>
			    </div>
		</div>
			
		',
		'composition' => '
			<div class="type">
				Состав: 80% шерсть, 20% полиамид
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
		'cycle-title' => 'Плед Magniflex LARA Bianco',
		'cycle-name' => 'Плед Magniflex LARA Bianco',
		'sizes' => array(
			array('150x200',12600.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'LARA-Bordeaux',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'Плед Lara Bordeaux',
		'other_categories' => array('lara1_new'),
		'title' => 'Итальянский плед LARA Bordeaux',
		'description' => 'Пледы. Пледы, фотографии, описание, характеристики ортопедического LARA Bordeaux',
		'keywords' => 'Пледы, ',
		'small_desc' => '',
		'attr_cat_product1' => ' 80% шерсть, 20% полиамид',
		'attr_cat_product2' => '150х200',
		'attr_cat_product3' => 'Бордовый.',
		'attr_cat_product4' => 'Однотонный с бахромой.',
		'small_img' => '/img/product/very_small/LARA-Bordeaux-Internet.jpg',
		'small_img_alt' => 'LARA Bordeaux',
		'img' => '/img/product/Lara-bordeaux.jpg',
		'img_preview' => array('/img/product/Lara-bordeaux-2.jpg'),
		'img_alt' => 'LARA Bordeaux',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li><b>Состав</b>: 80% шерсть, 20% полиамид</li>
				<li><b>Рисунок</b>: Однотонный бордовый с бахромой.</li>
				<li><b>Производитель</b>: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">80% шерсть, 20% полиамид</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
	    'desc' => '
		    <div class="common_block_common">
			<div class="half-width">
			<h3>Шерстяной плед Lara BORDEAUX</h3>
			<strong><i>Высококачественный итальянский плед, производство Италия, Тоскана, Флоренция, г. Прато</i></strong>
            Пледы коллекции LARA – это преимущественно дизайнерские однотонные пледы. Lara Bianco – цвет слоновой кости. Lara Bordeaux – бордовый. Lara Rosso – красный с оттенками красного в виде геометрических. Пледы коллекции Lara на 80% состоят из натуральной шерсти. Также в пледах использовано 20% полиамида.<br />
            Полиамид — это волокно, пропускающее воздух, быстросохнущее, маломнущееся, материал с которым мы постоянно сталкиваемся в быту. Вещи из полиамида прекрасно и довольно долго сохраняют свой первоначальный товарный вид, поскольку данный вид материала особенно устойчив к изнашиванию и состоит из волокон высокой прочности. Хорошая эластичность, продукция из данного материала приятная на ощупь и эффектно выглядит. Полиамид очень лёгок, так как удельный вес волокон низкий. Материя из полиамида плохо пропускает влагу и быстро высыхает, в три раза быстрей одежды из хлопка (хорошо подходит для верхней одежды). Ткань выглядит очень красиво, никогда не выцветет, не потеряет форму, хорошо отражает свет и не мнётся. Неплохо пропускает воздух. Полиамид на 100 % устойчив к воздействию термоокислителей. Такая ткань не поддаётся грибку и поэтому не гниёт. Высокий уровень пожаробезопасности: этот материал не горит, а плавится при высокой температуре. Уход за такой тканью простой, ее легко стирать, и она не садится.             </div>
        	<div class="coin-slider">
		    <img src="/img/product/very_small/LARA-Bordeaux-Internet.jpg" alt="плед Lara BORDEAUX в интерьере">
	        </div>
            </div>
		',
		'composition' => '
			<div class="type">
				Состав: 80% шерсть, 20% полиамид
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
		'cycle-title' => 'Плед Magniflex LARA Bordeaux',
		'cycle-name' => 'Плед Magniflex LARA Bordeaux',
		'sizes' => array(
			array('150x200',12600.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'LARA-Rosso',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'Плед Lara Rosso',
		'other_categories' => array('lara1_new'),
		'title' => 'Итальянский плед LARA Rosso',
		'description' => 'Пледы. Пледы, фотографии, описание, характеристики ортопедического LARA Rosso',
		'keywords' => 'Пледы, ',
		'small_desc' => '',
		'attr_cat_product1' => '80% шерсть, 20% полиамид',
		'attr_cat_product2' => '150х200',
		'attr_cat_product3' => 'Красный.',
		'attr_cat_product4' => 'Геометрический узор с бахромой',
		'small_img' => '/img/product/very_small/LARA-Rosso-Internet.jpg',
		'small_img_alt' => 'LARA Rosso',
		'img' => '/img/product/Lara-Rosso.jpg',
		'img_preview' => array('/img/product/Lara-Rosso-2.jpg'),
		'img_alt' => 'LARA Rosso',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li><b>Состав</b>: 80% шерсть, 20% полиамид</li>
				<li><b>Рисунок</b>: геометрический узор с бахромой</li>
				<li><b>Производитель</b>: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">80% шерсть, 20% полиамид</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
	'desc' => '
		<div class="common_block_common">
			<div class="half-width">
			<h3>Итальянский шерстяной плед Lara Rosso</h3>
			<strong><i>Высококачественный итальянский плед, производство Италия, Тоскана, Флоренция, г. Прато</i></strong>
            Пледы коллекции LARA – это преимущественно дизайнерские однотонные пледы. Lara Bianco – цвет слоновой кости. Lara Bordeaux – бордовый. Lara Rosso – красный с оттенками красного в виде геометрических. Пледы коллекции Lara на 80% состоят из натуральной шерсти. Также в пледах использовано 20% полиамида.<br />
            Полиамид — это волокно, пропускающее воздух, быстросохнущее, маломнущееся, материал с которым мы постоянно сталкиваемся в быту. Вещи из полиамида прекрасно и довольно долго сохраняют свой первоначальный товарный вид, поскольку данный вид материала особенно устойчив к изнашиванию и состоит из волокон высокой прочности. Хорошая эластичность, продукция из данного материала приятная на ощупь и эффектно выглядит. Полиамид очень лёгок, так как удельный вес волокон низкий. Материя из полиамида плохо пропускает влагу и быстро высыхает, в три раза быстрей одежды из хлопка (хорошо подходит для верхней одежды). Ткань выглядит очень красиво, никогда не выцветет, не потеряет форму, хорошо отражает свет и не мнётся. Неплохо пропускает воздух. Полиамид на 100 % устойчив к воздействию термоокислителей. Такая ткань не поддаётся грибку и поэтому не гниёт. Высокий уровень пожаробезопасности: этот материал не горит, а плавится при высокой температуре. Уход за такой тканью простой, ее легко стирать, и она не садится.
            </div>
        	<div class="coin-slider">
		    <img src="/img/product/Pled_Lara_Rosso.jpg" alt="плед Lara Rosso в интерьере">
	        </div>
        </div>	
		',
		'composition' => '
			<div class="type">
				Состав: 80% шерсть, 20% полиамид
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
		'cycle-title' => 'Плед Magniflex LARA Rosso',
		'cycle-name' => 'Плед Magniflex LARA Rosso',
		'sizes' => array(
			array('150x200',12600.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'NITRA-70-Navy',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'NITRA 70 Navy',
		'other_categories' => array('lara1_new'),
		'title' => 'Итальянский плед NITRA 70 Navy',
		'description' => 'Пледы. Пледы, фотографии, описание, характеристики ортопедического NITRA 70 Navy',
		'keywords' => 'Пледы, ',
		'small_desc' => '
			<p class="hnb_harek">
			Состав: 80% шерсть, 20% кашемир<br>
		    Размер: 150х200<br>
			Цвет: Темно-синий.<br>
Рисунок: Геометрия, клетка с бахромой.<br>
Производитель: Italian Woollen Treasures S.r.l., Италия.
                 </p>
		',
		'attr_cat_product1' => '80% шерсть, 20% кашемир',
		'attr_cat_product2' => '150х200',
		'attr_cat_product3' => 'Темно-синий.',
		'attr_cat_product4' => 'Геометрия, клетка с бахромой.',
		'small_img' => '/img/product/very_small/NITRA-70-Navy-Internet.jpg',
		'small_img_alt' => 'NITRA 70 Navy',
		'img' => '/img/product/Nitra-70-Navy.jpg',
        'img_preview' => array('/img/product/Nitra-70-Navy-2.jpg'),
		'img_alt' => 'NITRA 70 Navy',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li>Состав: 80% шерсть, 20% кашемир</li>
				<li>Размер: 150х200</li>
				<li>Цвет: Темно-синий.</li>
				<li>Рисунок: Геометрия, клетка с бахромой.</li>
				<li>Производитель: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">80% шерсть, 20% кашемир</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
		'desc' => '
		<div class="block_line2">
		<div class="half-width">
		<h3>Итальянский шерстяной плед NITRA 70 NAVY</h3>
		Высококачественный итальянский плед, производство Италия, Тоскана, Флоренция, г. Прато

			<br><br>
			Пледы коллекции LARA – дизайнерский однотонный плед, который на 80% состоит из натуральной шерсти.
			<br><br>
			Также в пледе использовано 20% кашемир.
			<br><br>
			Плед может служить не только покрывалом для Вашей кровати, но также может использоваться как одеяло или платок. Плед – это практичное и долговечное изделие, не требует частых стирок, в поездках занимает минимум места, в нем не заводятся клещи, избавляет от стресса благодаря терапевтическим свойствам.
			<br><br>
			Поставляется в разных размерах, на сегодня доступен размер 150х200. В случае необходимости заказа другого размера или пожеланий по размеру, просьба обращаться по телефонам нашей горячей линии: +7-495-507-22-65 или по электронной почте: info@magniflex.ru
		</div>
		<div class="half-width_img">
			<img src="/img/product/very_small/NITRA-70-Navy-Internet.jpg">
		</div>
	</div>
		',
		'composition' => '
			<div class="type">
				Состав: 80% шерсть, 20% кашемир
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
		'cycle-title' => 'Плед Magniflex NITRA 70 Navy',
		'cycle-name' => 'Плед Magniflex NITRA 70 Navy',
		'sizes' => array(
			array('150x200',21000.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'NITRA-RESCA-7',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'NITRA RESCA 7',
		'other_categories' => array('lara1_new'),
		'title' => 'Итальянский плед NITRA RESCA 7',
		'description' => 'Пледы. Пледы, фотографии, описание, характеристики ортопедического NITRA RESCA 7',
		'keywords' => 'Пледы, ',
		'small_desc' => '
			<p class="hnb_harek">
			Состав: 80% шерсть, 20% кашемир<br>
		    Размер: 150х200<br>
			Цвет: Серый.<br>
Рисунок: Однотонный с бахромой.<br>
Производитель: Italian Woollen Treasures S.r.l., Италия.
                 </p>
		',
		'attr_cat_product1' => '80% шерсть, 20% кашемир',
		'attr_cat_product2' => '150х200',
		'attr_cat_product3' => 'Серый.',
		'attr_cat_product4' => 'Однотонный с бахромой.',
		'small_img' => '/img/product/very_small/NITRA-RESCA-7-Internet.jpg',
		'small_img_alt' => 'NITRA RESCA 7',
		'img' => '/img/product/Nitra-Resca-7.jpg',
        'img_preview' => array('/img/product/Nitra-Resca-7-2.jpg'),
		'img_alt' => 'NITRA RESCA 7',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li>Состав: 80% шерсть, 20% кашемир</li>
				<li>Размер: 150х200</li>
				<li>Цвет: Серый.</li>
				<li>Рисунок: Однотонный с бахромой.</li>
				<li>Производитель: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">80% шерсть, 20% кашемир</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
		'desc' => '
		<div class="block_line2">
				<div class="half-width">
				<h3>Итальянский шерстяной плед NITRA RESCA 7</h3>
				Высококачественный итальянский плед, производство Италия, Тоскана, Флоренция, г. Прато

					<br><br>
					Пледы коллекции LARA – дизайнерский однотонный плед, который на 80% состоит из натуральной шерсти.
					<br><br>
					Также в пледе использовано 20% кашемир.
					<br><br>
					Плед может служить не только покрывалом для Вашей кровати, но также может использоваться как одеяло или платок. Плед – это практичное и долговечное изделие, не требует частых стирок, в поездках занимает минимум места, в нем не заводятся клещи, избавляет от стресса благодаря терапевтическим свойствам.
					<br><br>
					Поставляется в разных размерах, на сегодня доступен размер 150х200. В случае необходимости заказа другого размера или пожеланий по размеру, просьба обращаться по телефонам нашей горячей линии: +7-495-507-22-65 или по электронной почте: info@magniflex.ru
				</div>
				<div class="half-width_img">
					<img src="/img/product/very_small/NITRA-RESCA-7-Internet.jpg">
				</div>
			</div>

		',
		'composition' => '
			<div class="type">
				Состав: 80% шерсть, 20% кашемир
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
		'cycle-title' => 'Плед Magniflex NITRA RESCA 7',
		'cycle-name' => 'Плед Magniflex NITRA RESCA 7',
		'sizes' => array(
			array('150x200',21000.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'NITRA-CHARME-3',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'NITRA CHARME 3',
		'other_categories' => array('lara1_new'),
		'title' => 'Итальянский плед NITRA CHARME 3',
		'description' => 'Пледы. Пледы, фотографии, описание, характеристики ортопедического NITRA CHARME 3',
		'keywords' => 'Пледы, ',
		'small_desc' => '
			<p class="hnb_harek">
			Состав: 80% шерсть, 20% кашемир<br>
		    Размер: 150х200<br>
			Цвет: Коричневый.<br>
Рисунок: Геометрия, клетка с бахромой.<br>
Производитель: Italian Woollen Treasures S.r.l., Италия.
                 </p>
		',
		'attr_cat_product1' => '80% шерсть, 20% кашемир',
		'attr_cat_product2' => '150х200',
		'attr_cat_product3' => 'Коричневый.',
		'attr_cat_product4' => 'Геометрия, клетка с бахромой.',
		'small_img' => '/img/product/very_small/NITRA-CHARME-3-Internet.jpg',
		'small_img_alt' => 'NITRA CHARME 3',
		'img' => '/img/product/Nitra-Charme-3.jpg',
        'img_preview' => array('/img/product/Nitra-Charme-3-2.jpg'),
		'img_alt' => 'NITRA CHARME 3',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li>Состав: 80% шерсть, 20% кашемир</li>
				<li>Размер: 150х200</li>
				<li>Цвет: Коричневый.</li>
				<li>Рисунок: Геометрия, клетка с бахромой.</li>
				<li>Производитель: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">80% шерсть, 20% кашемир</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
		'desc' => '
		<div class="block_line2">
				<div class="half-width">
				<h3>Итальянский шерстяной плед NITRA CHARME 3</h3>
				Высококачественный итальянский плед, производство Италия, Тоскана, Флоренция, г. Прато

					<br><br>
					Пледы коллекции LARA – дизайнерский однотонный плед, который на 80% состоит из натуральной шерсти.
					<br><br>
					Также в пледе использовано 20% кашемир.
					<br><br>
					Плед может служить не только покрывалом для Вашей кровати, но также может использоваться как одеяло или платок. Плед – это практичное и долговечное изделие, не требует частых стирок, в поездках занимает минимум места, в нем не заводятся клещи, избавляет от стресса благодаря терапевтическим свойствам.
					<br><br>
					Поставляется в разных размерах, на сегодня доступен размер 150х200. В случае необходимости заказа другого размера или пожеланий по размеру, просьба обращаться по телефонам нашей горячей линии: +7-495-507-22-65 или по электронной почте: info@magniflex.ru
				</div>
				<div class="half-width_img">
					<img src="/img/product/very_small/NITRA-CHARME-3-Internet.jpg">
				</div>
			</div>
		',
		'composition' => '
			<div class="type">
				Состав: 80% шерсть, 20% кашемир
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
		'cycle-title' => 'Плед Magniflex NITRA CHARME 3',
		'cycle-name' => 'Плед Magniflex NITRA CHARME 3',
		'sizes' => array(
			array('150x200',21000.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	
	array(
		'address' => 'ortopedicheskoe-osnovanie-lux',
		'parent_address' => 'ortopedicheskie-reshetky',
		'parent_address2' => 'bases',
		'parent_name' => 'Аксессуары',
		'name' => 'Ортопедическое основание "ЛЮКС"',
		'other_categories' => array('lux_new'),
		'title' => 'Ортопедическое основание "ЛЮКС"',
		'description' => 'фотографии, описание, характеристики Ортопедическое основание "ЛЮКС"',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, Ортопедическое основание "ЛЮКС"',
		'small_desc' => '<p class="hnb_harek">двойная ламель. <br>
			Высота основания 290-300 мм.<br>
			Высота ножки 250-260 мм.<br>
			Максимальный вес спящего: 200 кг. <br>
			Гарантия: 3 года  <br>
			Производитель: Comfort Line (Россия)</p>',
		'small_img' => '/img/product/small/ortop_base_lux_small.jpg',
		'small_img_alt' => 'Ортопедическое основание "ЛЮКС" ',
		'img' => '/img/product/big/ortop_base_lux.jpg',
		'img_alt' => 'Ортопедическое основание решетка "ЛЮКС" ',
		'attr' => '
			<ul>
				<li>Высота основания 290-300 мм.</li>
				<li>Высота ножки 250-260 мм.</li>
				<li>Срок доставки: завтра для Москвы</li>
				<li>Максимальный вес спящего: 200 кг. </li>
				<li>Гарантия: 3 года</li></ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/DREAM/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
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
			<div class="hnb_contmy">
				<div class="hnb_contrig">
<br />
Каркас и опоры изделия изготавливаются из металлической трубы, поперечные перегородки (ламели) ШИРОКИЕ — из березы. Основание универсальное, благодаря скругленным углам легко устанавливается в любую кровать, даже оснащенную внутренними элементами крепления. Можно использовать отдельно от кровати, поместив матрас непосредственно на решетку. <br /><br />
<img itemprop="image" src="/img/product/big/lux_zoom.jpg" alt="" style="width: 30%; float:left; margin-right: 20px;" />
Ортопедические основания необходимы для усиления ортопедических свойств матрасов: упругие березовые ламели, реагируя на изменение нагрузки под весом спящего человека, равномерно распределяют давление по всей площади решетки. <br /><br />
Опора для лежания представляет собой цельносварной каркас со скругленными углами из профильной трубы 28х25х1,5 мм с упругими элементами (ламелями) шириной 38 мм и толщиной 8 мм изготовленными из березового шпона, установленных в накладные демпфирующие сдвоенные ламеледержатели, и кронштейнов для установки ножек.<br /><br />
Количество ламелей 28 шт. в односпальной опоре и 56 шт. в двуспальной опоре. Расстояние между ламелями 25-30мм.<br /><br />
Опора комплектуется 4-мя ножками диаметром 51 мм и, для двуспальной опоры, 1-ой центральной ножкой из профильной трубы 30х30х1,5 мм.<br /><br />
Опора имеет декоративно-защитное порошковое покрытие, нанесенное на автоматической линии окрашивания. Цвет серый.<br /><br />
Опора сертифицирована в системе добровольной сертификации и имеет сертификат соответствия.<br /><br />
Высота основания 290-300 мм.<br /><br />
Высота ножки 250-260 мм.<br /><br />
			<br><br>
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
			array('80x200',6300.00),
			array('90x200',6190.00),
			array('120x200',8390.00),
			array('140x200',9490.00),
			array('160x200',10590.00),
			array('180x200',11690.00),
			array('200x200',12690.00),

		),
	),
	
	array(
		'address' => 'babilona-amanda-grey',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'Плед Babilona Amanda grey',
		'other_categories' => array(''),
		'title' => 'Итальянский плед BABILONA AMANDA GREY',
		'description' => 'Пледы модель Babilona Amanda Grey, производство Италия',
		'keywords' => 'Пледы, итальянские пледы, хлопковый плед, плед Италия',
		'small_desc' => '',
		'attr_cat_product1' => '70% хлопок, 30% акрил',
		'attr_cat_product2' => '130х170',
		'attr_cat_product3' => 'Серый',
		'attr_cat_product4' => 'Геометрия, клетка с бахромой',
		'small_img' => '/img/product/very_small/BABILONA-AMANDA-Grey.jpg',
		'small_img_alt' => 'BABILONA',
		'img' => '/img/product/BABILONA-AMANDA-Grey.jpg',
		'img_preview' => array(''),
		'img_alt' => 'BABILONA',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li><b>Состав</b>: 70% хлопок, 30% акрил</li>
				<li><b>Рисунок</b>: геометрия, клетка с бахромой</li>
				<li><b>Производитель</b>: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">100% шерсть</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
		'desc' => '
		<div class="common_block_common">
			<div class="half-width">
			<h3>Итальянский плед BABILONA GREY</h3>
			<strong><i>Классический хлопковый плед «в клетку»</i></strong>
            Хлопковый плед серого цвета с бахрамой из коллекции Babilona. Удобный, практичный, теплый. Поставляется в размере: 130 х 170 см. Изготовлен в Италии.<br/>
            Коллекции Babilona — это дизайнерские пледы c геометрическими линиями, изготовленные из натурального хлопка (70%) с добавлением акрилового волокна (30%). Акрил — мягкий материал, превосходно сохраняющий тепло, не мнется, отлично держит цвет и форму, добавляет изделиям прочность и износостойкость. Акрил относится к гипоаллергенным материалом. В сочетании с натуральным хлопком повышает срок эксплуатации изделия.<br/>
		    </div>
        	<div class="coin-slider">
		    <img src="/img/italy_pled.jpg" alt="итальянский плед">
	        </div>
        </div>
        
        <div class="common_block_common fixcommon-block">
			<div class="half-width fixcommon-block">
			<h3>Доступные цвета</h3>
			    <p class="text-jus">
	            Пледы из коллекции Babilona доступны в цветах: серый (Grey), серый с красным (Grey/Red), cерый-красный-черный-белый (Check).
		        </p>
			</div>
			<div class="half-width fixcommon-block">
			<h3>О пледах</h3>
			    <p class="text-jus">
	            Плед может служить не только покрывалом для Вашей кровати, но и использоваться в качестве одеяла или платка. Плед – практичное и долговечное изделие, не требующее частых стирок, в поездках занимает минимум места, в нём не заводятся клещи. Он избавит от стресса благодаря терапевтическим свойствам. 
			    </p>
			    </div>
		</div>


		',
		'composition' => '
			<div class="type">
				Состав: 100% шерсть
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
		'cycle-title' => 'Плед Magniflex LUCCA 1',
		'cycle-name' => 'Плед Magniflex LUCCA 1',
		'sizes' => array(
			array('130x170',3357.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'BABILONA-Grey/Red',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'Плед Babilona grey/red',
		'other_categories' => array(''),
		'title' => 'Итальянский плед BABILONA Grey/Red',
		'description' => 'Пледы модель BABILONA Grey/Red, производство Италия',
		'keywords' => 'Пледы, итальянские пледы, хлопковый плед, плед Италия',
		'small_desc' => '',
		'attr_cat_product1' => '70% хлопок, 30% акрил',
		'attr_cat_product2' => '130х170',
		'attr_cat_product3' => 'Серый, красный',
		'attr_cat_product4' => 'Геометрия, клетка с бахромой.',
		'small_img' => '/img/product/very_small/BABILONA-Grey-Red.jpg',
		'small_img_alt' => 'BABILONA',
		'img' => '/img/product/BABILONA-Grey-Red.jpg',
		'img_preview' => array(''),
		'img_alt' => 'BABILONA',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
                <li><b>Состав</b>: 70% хлопок, 30% акрил</li>
				<li><b>Рисунок</b>: геометрия, клетка с бахромой</li>
				<li><b>Производитель</b>: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">
  VK.init({apiId: 4977479, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div style="  float: left;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
    </div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">100% шерсть</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
    'desc' => '
		<div class="common_block_common">
			<div class="half-width">
			<h3>Итальянский плед BABILONA GREY/RED</h3>
			<strong><i>Классический хлопковый плед «в клетку»</i></strong>
            Хлопковый плед серого с красным цвета с бахрамой из коллекции Babilona. Удобный, практичный, теплый. Поставляется в размере: 130 х 170 см. Изготовлен в Италии.<br/>
            Коллекции Babilona — это дизайнерские пледы c геометрическими линиями, изготовленные из натурального хлопка (70%) с добавлением акрилового волокна (30%). Акрил — мягкий материал, превосходно сохраняющий тепло, не мнется, отлично держит цвет и форму, добавляет изделиям прочность и износостойкость. Акрил относится к гипоаллергенным материалом. В сочетании с натуральным хлопком повышает срок эксплуатации изделия.<br/>
		    </div>
        	<div class="coin-slider">
		    <img src="/img/italy_pled.jpg" alt="итальянский плед">
	        </div>
        </div>
        
        <div class="common_block_common fixcommon-block">
			<div class="half-width fixcommon-block">
			<h3>Доступные цвета</h3>
			    <p class="text-jus">
	            Пледы из коллекции Babilona доступны в цветах: серый (Grey), серый с красным (Grey/Red), cерый-красный-черный-белый (Check).
		        </p>
			</div>
			<div class="half-width fixcommon-block">
			<h3>О пледах</h3>
			    <p class="text-jus">
	            Плед может служить не только покрывалом для Вашей кровати, но и использоваться в качестве одеяла или платка. Плед – практичное и долговечное изделие, не требующее частых стирок, в поездках занимает минимум места, в нём не заводятся клещи. Он избавит от стресса благодаря терапевтическим свойствам. 
			    </p>
			    </div>
		</div>
		',
		'composition' => '
			<div class="type">
				Состав: 100% шерсть
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
		'cycle-title' => 'Плед Magniflex LUCCA 1',
		'cycle-name' => 'Плед Magniflex LUCCA 1',
		'sizes' => array(
			array('130x170',3357.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),
	array(
		'address' => 'BABILONA-CHECK-305-2',
		'parent_address' => 'tracks',
		'parent_name' => 'Пледы',
		'name' => 'Плед Babilona Check 305-2',
		'other_categories' => array(''),
		'title' => 'Итальянский плед Babilona Check, производство Италия',
		'description' => 'Пледы модель Babilona Check, производство Италия',
		'keywords' => 'Пледы, итальянские пледы, хлопковый плед, плед Италия',
		'small_desc' => '',
		'attr_cat_product1' => '70% хлопок, 30% акрил',
		'attr_cat_product2' => '130х170',
		'attr_cat_product3' => 'Серый, красный, черный, белый',
		'attr_cat_product4' => 'Геометрия, клетка с бахромой.',
		'small_img' => '/img/product/very_small/BABILONA-CHECK-305-2.jpg',
		'small_img_alt' => 'BABILONA',
		'img' => '/img/product/BABILONA-CHECK-305-2.jpg',
		'img_preview' => array(''),
		'img_alt' => 'BABILONA',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
            <li><b>Состав</b>: 70% хлопок, 30% акрил</li>
			<li><b>Рисунок</b>: геометрия, клетка с бахромой</li>
			<li><b>Производитель</b>: Italian Woollen Treasures S.r.l., Италия</li>
			</ul><br>
			<div style="position:relative; clear:both;">
    <script type="text/javascript">VK.init({apiId: 4977479, onlyWidgets: true});</script>
    <!-- Put this div tag to the place, where the Like block will be -->
    <div style="  float: left;" id="vk_like"></div>
    <script type="text/javascript">
    VK.Widgets.Like("vk_like", {type: "button"});
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/bases/Topper-Best-Top/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Состав: <div class="hnb_marg">100% шерсть</div></li>
			<li class="hnb_ligray">Размер: <div class="hnb_marg">150х200</div></li>
			</ul>
		',
	'desc' => '
		<div class="common_block_common">
			<div class="half-width">
			<h3>Итальянский плед Babilona Check</h3>
			<strong><i>Классический хлопковый плед «в клетку»</i></strong>
            Хлопковый плед с рисунком в клетку Vintage Check с бахрамой из коллекции Babilona. Удобный, практичный, теплый. Поставляется в размере: 130 х 170 см. Изготовлен в Италии.<br/>
            Коллекции Babilona — это дизайнерские пледы c геометрическими линиями, изготовленные из натурального хлопка (70%) с добавлением акрилового волокна (30%). Акрил — мягкий материал, превосходно сохраняющий тепло, не мнется, отлично держит цвет и форму, добавляет изделиям прочность и износостойкость. Акрил относится к гипоаллергенным материалом. В сочетании с натуральным хлопком повышает срок эксплуатации изделия.<br/>
		    </div>
        	<div class="coin-slider">
		    <img src="/img/italy_pled.jpg" alt="итальянский плед">
	        </div>
        </div>
        
        <div class="common_block_common fixcommon-block">
			<div class="half-width fixcommon-block">
			<h3>Доступные цвета</h3>
			    <p class="text-jus">
	            Пледы из коллекции Babilona доступны в цветах: серый (Grey), серый с красным (Grey/Red), cерый-красный-черный-белый (Check).
		        </p>
			</div>
			<div class="half-width fixcommon-block">
			<h3>О пледах</h3>
			    <p class="text-jus">
	            Плед может служить не только покрывалом для Вашей кровати, но и использоваться в качестве одеяла или платка. Плед – практичное и долговечное изделие, не требующее частых стирок, в поездках занимает минимум места, в нём не заводятся клещи. Он избавит от стресса благодаря терапевтическим свойствам. 
			    </p>
			    </div>
		</div>
		',
		'composition' => '
			<div class="type">
				Состав: 100% шерсть
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
		'cycle-title' => 'Плед Magniflex LUCCA 1',
		'cycle-name' => 'Плед Magniflex LUCCA 1',
		'sizes' => array(
			array('130x170',3357.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.01.2019', 'price_koef' => 0.15, ), //скидка
	),


);

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
