<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}



$get_breadcrumbs_product = function($item){
	$breadcrumbs_ret = array(array('Главная','/'),array('Каталог','/catalog/'));
	if($item['parent_address'] && $item['parent_name']){
		foreach($categories as $el){
			if($el['parent_address'] && $el['parent_name'] && $item['parent_address'] == $el['address']){
				$breadcrumbs_ret[] = array($el['parent_name'], '/catalog/'.$el['parent_address'].'/');
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
		'parent_address' => 'orthopedic_mattresses',
		'parent_address2' => 'mattresses',/*test42*/
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses','zhestkie-mattresses-2', 'height-20'),
		'name' => 'Merino (Merinos)',
		'title' => 'Матрас Magniflex Merinos. Официальный сайт Магнифлекс. Magniflex Merino (меринос)',
		'description' => 'Описание, фотографии, состав ортопедического матраса Magniflex Merino (прежнее название Merinos). Одна из самых популярных моделей в России. Потрясающие свойства, настоящая шерсть мериноса.',
		'keywords' => 'magniflex merino, magniflex merinos, магнифлекс мерино, меринос, купить magniflex merino, magniflex merinos отзывы',
		'small_desc' => '
			<span class="hnb_popular">
				Самый популярный
				</span>
				<p class="hnb_harek">
				Самый популярный ортопедический матрас из коллекции Magniflex. Двусторонний: "зима-лето".<br />
				Высота: 16 см<br />
				Наполнитель: Eliocel 40<br />
				Изготовлен в ИТАЛИИ.
               </p>
		',
		'small_img' => '/img/product/very_small/Merino (Merinos).jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/Merino (Merinos).jpg',
		'img_alt' => 'Ортопедические матрасы Merino (Merinos)',
		'attr' => '
		<style>
		#breadcrumbs {
			background-image: url(/img/merino2_250.jpg);
			height: 250px;
		}
		</style>
			<!--<div class="hnb_skidhr"><a href="/skidki-magniflex/skidki-na-bolshie-matrasi/" >Скидки на матрасы king size!</a></div>-->
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 16 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--достаточно жесткий--></li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li>
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
		'advantages' => '
			<ul>
				<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Модель Magniflex Merino (merinos) - это настоящий ортопедический матрас </div></li>
				<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
				<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
				<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России, в т.ч. РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ. Ознакомиться с <a href="/pokupatelyam/certificates/">сертификатами</a>!</div></li>
				<li class="hnb_liwhite">Качественный итальянский матрас <div class="hnb_marg">Изготовлен именно в Италии на заводе в Прато</div></li>
			</ul>
		',
		'desc' => '
		   
			<div class="hnb_contmy">

				<div class="hnb_contcenter">				
			<h1>Ортопедический матрас Magniflex Merino Merinos</h1>
			Magniflex Merino Merinos – невероятно удобный ортопедический матрас, который был создан в Италии еще 20 лет назад. Эта модель настолько популярна и удачна, что выпускается до сих пор практически в неизменном виде, лишь с небольшими улучшениями. Над ее разработкой совместно со специалистами лаборатории Magniflex трудились ведущие итальянские врачи-ортопеды. Эта модель – прекрасная находка для тех, кому важен оптимальный ортопедический эффект.	

			<br /><br />

			<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
					
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
			
			<hr />
			<br />
			<h1>Только натуральный наполнитель</h1>
			Для внутреннего слоя Magniflex Merino Merinos мы используем сверхупругую латексную пену ELIOCEL 40. Этот материал производится из натурального латекса. Благодаря его применению матрац становится «дышащим». Он хорошо пропускает воздух, а также легко выводит запахи и влагу, обеспечивая за счет этого высокий уровень гигиены.
					<br />
			<br />
			<hr />
			<br />

			<h1>Комфорт в любое время года</h1>
			Для дополнительного удобства наших покупателей модель Magniflex Merino Merinos имеет двусторонний чехол «зима-лето». В качестве зимнего наполнителя мы используем мягкую гипоаллергенную шерсть тонкорунных овец мериносов, которая обеспечивает оптимальную терморегуляцию в холодное время года. Летним наполнителем служит чистый хлопок. Для обеспечения наибольшего комфорта во время сна Вам достаточно будет повернуть матрас нужной стороной вверх.


			<br /><br />
			<div id="coin-slider2">
					
								<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/oveshmerinos.png"" alt="шерсть мериноса" />
			<span>
			Шерсть только от самых ласковых мериносов
							</span>
								</a>
								
								<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/Merino-Bamboo-5.jpg" alt="матрас magniflex merino зимняя сторона шерсть" />
			<span>
			Зимняя сторона - 100% шерсть
							</span>
								</a>
								
													<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/Merino-4.jpg" alt="матрас magniflex merino" />
			<span>
			 Летняя сторона - 100% натуральный хлопок
							</span>
								</a>
								
							</div>

			<br />
			<hr />
			<br />
			<h1>Удобство прежде всего</h1>
			ELIOCEL 40 обеспечивает впечатляющую точечную эластичность матраса. Благодаря этому Magniflex Merino Merinos прекрасно приспосабливается к форме тела. Он помогает человеку принять идеальное положение для отдыха, рекомендованное врачами-ортопедами, и не жертвовать при этом удобством.
			
			<br />
			<br />
			
			<hr />
			<br />
			<h1>Долговечность и износостойкость</h1>
			Срок реальной эксплуатации модели Magniflex Merino Merinos не менее двенадцати лет. Кроме того, благодаря своей конструкции (в частности, отсутствию пружинного блока) матрас совершенно нечувствителен к вертикальным нагрузкам.<br />
			Высокий уровень комфортности Magniflex Merino Merinos вкупе с отличными ортопедическими свойствами сделали эту модель фаворитом у покупателей во всем мире. Хотите стать счастливым обладателем такого матраса? Закажите его прямо сейчас с помощью онлайн-сервиса «Корзина» или по телефону.
			<br />
			<br />
					
				</div>

			</div><br />
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlefsostav">
						<br><br><br>
					 <img itemprop="image" src="/img/merino_sost_newh.png" alt="состав матраса Merino Magniflex" />

				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br /><br />
			<b>СОСТАВ МАТРАСА MAGNIFLEX MERINO (MERINOS)</b><br /><br />

			Ортопедический матрас Merino Magniflex состоит исключительно из природных,
экологически чистых материалов.<br><br><br>

			<b>Чехол</b> двухсторонний, несъемный:<br>
			&emsp;летняя сторона -  100% <a href="https://www.magniflex.ru/production/Cotton/ ">натуральный хлопок</a><br>
			&emsp;зимняя сторона - 100% натуральная <a href="https://www.magniflex.ru/production/Merinos/ ">шерсть тонкорунного мериноса</a>
			<br><br><br>
			<b>Внутренние слои</b>:<br>
			1 - антистатическая прослойка<br>
			2 - антиаллергенный терморегулирующий слой<br>
			3 - основной слой: <a href="https://www.magniflex.ru/production/Eliocel/">ELIOCEL 40</a> 

			</p>
				</div>
			</div>
		',
		'recommend' => '
			<div class="hnb_contmy">
			<div class="hnb_contlef">
				<img width="280" src="/img/rekomendovano-cito.jpg" height="196" title="Матрас рекомендован ЦИТО РФ">
				<br />
			Рекомендован Центральным Институтом <br />
				Травматологии и Ортопедии РФ
			</div>
			<div class="hnb_contrig">
				Ортопедические матрасы Magniflex Merino (Merinos) рекомендованы Центральным Институтом Травматологии и Ортопедии Российской Федерации им. Н.Н. Приорова в профилактических целях так и для лечения болезней опорно-двигательного аппарата, коррекции при повреждении позвоночника, вызванных травмами и хроническими заболеваниями (в том числе остеохондрозом, спондилезом). Заключение выдал директор ЦИТО, член кор. РАМН, профессор Ю.Г. Шапошников. <br />
					<br />
					 Матрас универсальный, идеально подходит большинству людей. Особенно рекомендуется к использованию:
				<p></p>
				<ul>
					<li>Подросткам<br />
					 В период развития костно-мышечной ткани и формирования позвоночного столба необходимо уделять особое внимание на правильное положение тела во время ночного сна<br />
					<br />
					</li>
					<li>Спортсменам<br />
					 После интенсивных и длительных нагрузок необходим хороший отдых на поверхности, максимально расслабляющей мышцы позвоночника, восстанавливая позвонки в естественное положение.<br />
					<br />
					</li>
					<li>Людям среднего возраста<br />
					 Для полноценного, здорового сна и профилактиктических целей.<br />
					<br />
					</li>
					<li>Пожилым людям<br />
					 Матрас позволяет равномерно распределить нагрузку на все суставы тела, снижает болезненные ощущения, оказывает лечебные действия на позвоночник, суставы и мыщцы человека. </li>
				</ul>
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
				<div class="hnb_contrig">В России ортопедические матрасы Magniflex представлены с 1992 года, за все это время нами не было зафиксировано ни одного отрицательного отзыва или рецензии о нашей продукции. Не смотря на жесточайший контроль качества отгружаемого товара, у нас, как и у любой компании, случаются &nbsp;продажи матрасов с наличием производственных дефектов, однако такой товар мы незамедлительно меняем на новый идеального качества, кроме того процент таких случаев крайне мал - менее 0,01% от общего объема продаж.
			<br><br>


			Нашей службой контроля качества продукции были зафиксированы два случая негативных отзывов в интернете о матрасах Magniflex. Первый, связанный с наличием посторонних запахов, расследовать не удалось, поскольку отзыв был написан человеком, купившим ортопедический матрас на территории Украины, а во-втором, женщина, жаловалась на чувство крайнего дискомфорта во время ночного сна на матрасе, однако в этом случае речь, вероятно, шла о ненастоящем матрасе Magniflex, поскольку сам матрас был куплен не у официального представителя компании. В связи с этим случаем, хотим в очередной раз предостеречь потребителей: приобретайте настоящие итальянские ортопедические матрасы Magniflex ИСКЛЮЧИТЕЛЬНО через официальное представительство или у наших дилеров! Кроме нас никто не может продавать матрасы Magniflex на территории  Российской Федерации! Купленный в другом месте матрас - 100% подделка!

			<br><br>
			<b> Отзывы покупателей</b><br><br>
			
			<i>"Купили «Мерино» для себя, пользуемся правда пока не так долго – два года, но пока очень довольны. Не зря все-таки этот матрас рекомендуют, как ортопедический. Теперь вот собираемся такой же и ребенку приобрести."</i><br><br>
			
			<i>"Когда задумался о покупке ортопедического матраса, сперва хотел взять пружинный – казалось, что это самый лучший вариант. Но в итоге продавец переубедил. Я выбрал «Мерино» и не пожалел. Действительно ОЧЕНЬ удобно спать и зимой и летом причем. И жена подтвердит. К тому же не нужно гонять детей с кровати, а они у нас любят на ней попрыгать-побеситься.))) Идилия, в общем.)"</i><br><br>
			 
			<i>"Замечательный ортопедический матрас!!! Всем его рекомендуем! спим с мужем на этом матрасе уже 6-й год, а матрас до сих пор как новенький!  даже ребенок любит спать на нем! матрас в меру жесткий и в меру мягкий. покупайте, не пожалеете…"</i><br><br>
			 
			<i>"Матрас очень качественный, обратите внимание, что довольно таки жесткий. Подойдет в первую очередь детям, подросткам и молодым людям - для них просто супер будет!" </i><br><br>
			 
			<i>"Матрас по нраву, недорого и вроде качество хорошее."</i><br><br>
			 
			<i>"Матрасец основательный такой, порой чувствую себя как король на перине, хоть и довольно жесткой :)))"</i><br><br>
			 
			<i>"Выбирая матрас, купился на производителя. Думаю, не будут же в Италии плохое качество нам сувать, да и цена на итальянский товар порадовала очень. Рискнул заказать. Матрас действительно хорош, только с высотой чуть не рассчитал."</i><br><br>
			 
			<i>"Любо братцы! Обалденный матрас!"</i><br><br>
			 
			<i>"Купили матрас с женой себе на годовщину свадьбы. Уже близится вторая годовщина, а матрас как новенький!..." </i><br><br>
			 
			<i>"Никогда бы не стала покупать ничего в интернет-магазине, если бы не подруга, поддалась ее влиянию, хотя мне не нравится кота в мешке покупать. Заказала, привезли вроде вовремя и бесплатно. Матрас да матрас, что в нем такого?! Преимущество, конечно, в цене, в магазинах дороже присматривала."
			</i> <br><br>
			<i>"Наконец-то нашла подходящий, удобный, замечательный матрас!!! У меня грыжа пояснично-крестцового отдела… какие матрасы раньше только не пробовала!!! И дорогущие, и на заказ делали!!! - он превратился просто в кошмар!!! Когда покупали новую спальню, продавец предложил нам купить матрас Magniflex, я согласилась без особого энтузиазма… Оказалось, не зря. Удобнее матраса я не встречала!!! за ночь спина не устает!!! Утром встаю отдохнувшая! Следующий матрас - только  Magniflex!"</i><br><br>
			 
			<i>"Покупая вещи, доверяю известным брендам! Из матрасов это исключительно магнифлекс!"</i><br><br>
			 
			<i>"Качество матраса стоит своих денег. Матрас доставили на следующий день после заказа."</i><br><br>
			 
			<i>"Мне матрасик понравился! Удобный и комфортный!!!"</i><br><br>
			 
			<i>"Давно хотела заказать именно магнифлекс меринос - все таки делают в Италии, а это уже что-то значит ))) В результате взяли два таких матраса - домой и на дачу."</i><br><br>
			 
			<i>"… Магнифлекс Меринос - самый оптимальный, тем более, что аккуратно сделан!"</i><br><br>
			 
			<i>"Второй день хожу и радуюсь на наш новый матрас! купили Magniflex Merinos жесткий! не пожелели ни на минуту! сделан качественно, все хорошо прошито. неприятных запахов нет. в принципе он уже через 3-4 часа набирает форму и достаточную жесткость чтобы на нем лежать. зимняя сторона порадовала, посмотрим зимой что она дает. В общем доволен. Выбирать пришлось из более чем 5ти вариантов. рад что не ошибся"</i><br><br>
			 
			<i>"…По нашей многолетней статистике, эти матрасы без проблем служат по 10-12 лет. Матрас действительно хороший."</i> 




			</div>
		',
		'similar' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">

				<li class="hnb_mypohli">
				<a href="/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/"><img width="185" src="/img/product/very_small2/Merino Green Tea.jpg" height="130"><br />Merino Green Tea</a><br>
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
				<span class="hnb_mypohtext">это одна из наиболее жестких моделей</span>
			</div>
		',
		'softer' => '
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
				<li class="hnb_mypohli"><a href="/catalog/orthopedic_mattresses/WATERLATTEX/"><img width="185" src="/img/product/very_small2/WaterLattex.jpg" height="130"><br />WaterLattex</a>
				<br>
				<div class="hnb_mypohliconttext">
				<span class="myprice">цена:от <!--{min_price|"WaterLattex"}--> руб</span>
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
		'cycle-title' => 'Ортопедические матрасы MERINO Magniflex (старое название Merinos)' ,
		'cycle-name' => 'Ортопедический матрас Merino (Merinos)',
		'sizes' => array(
			array('60x120',8000.00),
			array('65x125',9200.00),
			array('70x140',10900.00), 
			array('70x160',12500.00),
			array('70x190',14800.00),
			array('75x190',15900.00),
			array('80x160',14300.00),
			array('80x180',16000.00),
			array('80x190',16800.00),
			array('80x195',17300.00),
			array('80x200',17800.00),
			array('85x190',18000.00),
			array('85x200',18900.00),
			array('90x180',18000.00),
			array('90x190',19100.00),
			array('90x195',19600.00),
			array('90x200',20000.00),
			array('95x190',20000.00),
			array('95x195',20500.00),
			array('100x190',21200.00),
			array('100x200',22300.00),
			array('110x190',23200.00),
			array('110x195',23900.00),
			array('110x200',24400.00),
			array('120x190',25300.00),
			array('120x195',26000.00),
			array('120x200',26600.00),
			array('130x190',27400.00),
			array('130x200',28800.00),
			array('135x190',28500.00),
			array('135x200',30000.00),			
			array('140x190',29500.00),
			array('140x195',30300.00),
			array('140x200',31100.00),
			array('150x190',31600.00),
			array('150x200',33300.00),
			array('160x190',33600.00),
			array('160x195',34600.00),			
			array('160x200',35600.00),
			array('160x205',36400.00),
			array('160x210',37300.00),
			array('165x190',34800.00),
			array('165x195',35700.00),
			array('165x200',36500.00),
			array('170x190',35900.00),
			array('170x200',37600.00),
			array('180x190',38000.00),
			array('180x195',38900.00),
			array('180x200',39900.00),
			array('180x205',40800.00),
			array('180x210',42000.00),
			array('180x220',43900.00),
			array('190x200',42100.00),
			array('200x200',44400.00),
		),
		
		'discount_koef' => array('date_start' => '01.07.2015', 'date_end' => '31.07.2017',
			'sizes' => array('165x190', '180x220'),
			'prices' => array(
				'180x220' => 21950.00,
		),
		
				//'discount_koef' => array('date_start' => '21.4.2016', 'date_end' => '10.5.2016',
			//'sizes' => array('160x200'),
			//'prices' => array(
				//'160x200' => 91375.00,
			//),
		//), //скидка
		
		),
		
		'yml_desc' => '
			Матрас практичный, износостойкий (срок реальной эксплуатации превышает 12 лет) изготавливается из натуральных компонентов (в том числе используется натуральный латекс, прошедший специальную обработку) на уровне самой современной технологии. В разработке принимали участие ведущие итальянские врачи-ортопеды совместно со специалистами лаборатории Magniflex. Модель создавалась для тех, кому важен максимальный ортопедический эффект. Уровень комфорта: достаточно жесткий. Срок службы: не менее 12 лет. вакуумная упаковка. Летняя сторона - натуральный хлопок, зимняя - шерсть мериноса 
		',
		'yml_torgmail' => true,
		
		
	),
	array(
		'address' => 'MERINO-GREEN-TEA',
		'parent_address' => 'orthopedic_mattresses',
		'parent_address2' => 'mattresses',
		'other_categories' => array('snyatie-s-proizvodstva', 'height-20'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Merino Green Tea',
		'title' => 'Merino Green Tea - матрасы данной модели в интернет-магазине Magniflex',
		'description' => 'У нас Вы найдете матрасы серии Merino Green Tea. Удобные итальянские матрасы в нашем каталоге.',
		'keywords' => 'матрас, merino, green, tea',
		'small_desc' => '
			<span class="hnb_popular">
			Экстракт Зеленого Чая
			</span>
			<p class="hnb_harek">
			Ортопедический матрас, оказывающий антисептическое воздействие,  способствует полноценному отдыху.<br>
			Высота: 16 см<br>
			Наполнитель: Eliocel 60<br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Merino Green Tea.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/Merino Green Tea.jpg',
		'img_alt' => 'Ортопедические матрасы Merino Green Tea',
		'attr' => '
			<!--<a href="/skidki-magniflex/skidka-15-legendarnye-matrasy/"><div class="hnb_action15">АКЦИЯ! Только в сентябре - <b>15% СКИДКА</b> на этот матрас!</div></a>-->
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 16 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--умеренно жесткий--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
			
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
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Модель Magniflex Merino Green Tea (зеленый чай) - это настоящий ортопедический матрас. Узнать подробности?</div>
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
			<style>
			.product_top{
				display:none;
			} 
			</style>
			<h1>Итальянский ортопедический матрас</h1>
			Модель Magniflex MERINO GREEN TEA - превосходный ортопедический матрас, произведенный в Италии на фирменном заводе Магнифлекс. <br />
			Главная отличительная особенность - изумительные антисептические свойства и тонкий аромат зеленого чая. <br />
			В основе используется инновационный материал - ELIOCEL 60 (Элиочел), позволяющий равномерно перераспределить нагрузку позвоночника, достичь максимального эффекта выравнивания позвонков.
			<br><br>
			<noindex><a rel="nofollow" href="www.youtube.com/embed/_7caESGNHI8" class="boxer_video">
				<img itemprop="image" src="/img/merino green tee video.jpg" alt="" />
			</a></noindex>
			<br><br>

			<hr />
			<br>
			<h1>Экстракт зеленого чая</h1>
			Ткань чехла матраса пропитана экстрактом натурального зеленого чая, в результате чего приобретает свойства его активных компонентов, оказывает сильное расслабляющее действие на организм человека, способствуя полноценному сну.  Благодаря активным элементам зеленого чая обладает исключительными антисептическими свойствами. Согласно исследованиям ученых, пропитанная экстрактом зеленого чая ткань позволяет полезным веществам проникать в организм человека, оказывая благоприятное воздействие, улучшая качество отдыха.
			 <br><br>
			<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
					
								<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/magniflex-green-tea-1.jpg" alt="Зеленый чай - сердце матраса Green Tea Magniflex" />

								</a>
								
								<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/magniflex-green-tea-3.jpg"  alt="чехол матраса Green Tea Magniflex"/>
								</a>
													
							</div>



			<hr />
			<br>

			<h1>Летняя сторона - натуральный хлопок, зимняя - шерсть мериноса</h1>
			Матрас Merino Green Tea имеет "летнюю" и "зимнюю" стороны. Летняя сторона - эластичная терморегулирующая ткань из 100% хлопка с пропиткой экстрактом зеленого чая. Зимняя производится из шерсти тонкорунного мериноса. Шерстяное покрытие действует на рецепторы кожи обеспечивая рефлекторно-анальгизирующее действие при болях, вызванных миозитом, радикулитом, невралгиями. 

			<br><br>
			<div id="coin-slider2">
					
								<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/product/other/cotton.jpg"" alt="хлопок"/>
			<span>
			Летняя сторона - мягкий натуральный хлопок
							</span>
								</a>
								
								<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/product/other/magniflex-green-tea-2.jpg" alt="летняя сторона матраса Green Tea Magniflex" />
			<span>
			Фрагмент летней стороны
							</span>
								</a>
								
													<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/product/other/oveshmerinos.png" alt="шерсть мериноса" />
			<span>
			 Зимняя стороны  - 100% шерсть тонкорунных мериносов
							</span>
								</a>
								
								<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/product/other/merinos.jpg"  alt="зимняя сторона матраса Green Tea Magniflex"/>
			<span>
			 Фрагмент зимней стороны
							</span>
								</a>

							</div>

			<hr />
			<br>
			<h1>Антиаллергенные, безопасные </h1>

			Все матрасы Magniflex  абсолютно антиаллергенные за счет многоступенчатой инновационной обработки тканей и наполнителей БЕЗ использования химических веществ. Сапрофиты -микроорганизмы, вызывающие аллергию, не заведутся никогда. В составе матрасов не используются металлические детали, поэтому они не оказывают на организм магнитного или электростатического воздействия. 
			<br><br>
					

			<hr />
			<br>
			<h1>Вакуумные </h1>

			Матрасы поставляются в вакуумной упаковке. Можно довести до дома даже в общественном транспорте, однако для транспортировки самых крупных размеров (160 х 200 и больше) лучше использовать легковой автомобиль.

			<br>
				</div>
			</div><br>
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlefsostav">
<br><br>
					 <img itemprop="image" src="/img/layer/layer-merino-green-tea.png" alt="состав матраса Merino Green Tea Magniflex">

				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX MERINO GREEN TEA</b><br><br>



			Ортопедический матрас Merino Green Tea состоит исключительно из природных, экологически чистых материалов.<br><br><br>

			<b>Чехол</b> двухсторонний, несъемный:<br>
			&emsp;летняя сторона -  биэластичная ткань<br>
			&emsp;зимняя сторона - 100% натуральная <a href="https://www.magniflex.ru/production/Merinos/ ">шерсть тонкорунного мериноса</a>
			<br><br>
			<i>Ткань чехла пропитана экстрактом зеленого чая</i>
			<br><br><br>
			<b>Внутренние слои</b>:<br>
			1 - антистатическая прослойка<br>
			2 - антиаллергенный терморегулирующий слой<br>
			3 - основной слой: <a href="https://www.magniflex.ru/production/Eliocel/">ELIOCEL 60</a> 
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
				Ортопедические матрасы серии Magniflex Merino Green Tea рекомендованы к каждодневному использованию Центральным Институтом Травматологии и Ортопедии РФ.
			 <br>	<br>
						 Ортопедический матрас Merino Green Tea ОСОБЕННО РЕКОМЕНДУЕТСЯ:
					<p></p>
					<ul>
						<li>Подросткам<br>
						В период переходного возраста способствует правильному формированию осанки, устраняет сутулость, предотвращает раздражение и воспаление кожи;<br>
						<br>
						</li>
						<li>Активным людям<br>
						После интенсивных и длительных  нагрузок  необходим хороший отдых на поверхности, максимально расслабляющей мышцы позвоночника, восстанавливая позвонки в естественное положение, помогает быть в тонусе, обладает дезодорирующим и антивирусным эффектом.<br>
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
	
			<b> Отзывы покупателей</b><br><br>

			<i>"Спасибо за шикарный матрас! Для меня он стал прям-таки открытием удобства. Я уже кучу перепокупал различных матрасев, а на этом остановился. Нашел свое.) Благодарю."</i><br><br>
			
			<i>"Давно хотели попробовать матрасы этой марки, и вот, год назад все-таки решились. Выбрали вот эту модель, из-за пропитки, очень понравился запах. Спать на самом деле удобно, никакого сравнения с прежним матрасом. Если когда-нибудь все-таки соберемся менять, то однозначно выберем ту же марку. Короче, рекомендую."</i><br><br>

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
		'sizes' => array(
			array('80x190',17800.00),
			array('80x200',18800.00),
			array('90x190',20000.00),
			array('90x200',21200.00),
			array('120x190',26800.00),
			array('120x200',28200.00),
			array('140x190',31200.00),
			array('140x200',32800.00),
			array('150x190',33500.00),
			array('150x200',35100.00),
			array('160x190',35600.00),
			array('160x200',37500.00),
			array('180x200',42100.00),
			array('200x200',46800.00),
		),

		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		
		//'discount_koef' => array('date_start' => '24.11.2016', 'date_end' => '10.01.2017', 'price_koef' => 0.2, ), //скидка
		'yml_desc' => '
			Модель Magniflex Merino Green Tea - превосходный вакуумный матрас, произведенный в Италии на фирменном заводе Магнифлекс. Главная отличительная особенность - изумительные антисептические свойства и тонкий аромат зеленого чая. В основе используется инновационный материал - ELIOCEL 60 (Элиочел), позволяющий равномерно перераспределить нагрузку позвоночника, достичь максимального эффекта выравнивания позвонков. Уровень комфорта: умеренно жесткий. Срок службы: не менее 12 лет. Летняя сторона - натуральный хлопок, зимняя - шерсть мериноса 
		',
		'yml_torgmail' => true,
		
		
	),
	array(
		'address' => 'MERINO-BAMBOO',
		'parent_address' => 'orthopedic_mattresses',
		'parent_address2' => 'mattresses',
		'other_categories' => array('vacuum-mattresses', 'height-20', 'action'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Merino Bamboo',
		'title' => 'Матрасы Bamboo Merino - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Merino Bamboo. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, bamboo, magniflex, merino',
		'small_desc' => '
			<span class="hnb_popular">
			Волокна Бамбука
			</span>
			<p class="hnb_harek">
			Ортопедический беспружинный матрас с натуральными волокнами бамбука. Восстанавливает и питает клетки кожи.<br>
			Высота: 17 см<br>
			Наполнитель: Eliocel 60<br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Bamboo.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/Bamboo.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'attr' => '
			<!--<a href="/skidki-magniflex/skidka-15-legendarnye-matrasy/"><div class="hnb_action15">АКЦИЯ! Только в сентябре - <b>15% СКИДКА</b> на этот матрас!</div></a>-->
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 17 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--умеренно жесткий--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlefsostav">
<br><br>
					 <img itemprop="image" src="/img/layer/layer-merino-bamboo.png" alt="состав матраса Merino Bamboo Magniflex">

				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX MERINO BAMBOO</b><br><br>

			Ортопедический матрас Merino Bamboo производится исключительно из природных, экологически чистых материалов.<br><br><br>

			<b>Чехол</b> двухсторонний, несъемный:<br>
			&emsp;летняя сторона -  биэластинчая ткань<br>
			&emsp;зимняя сторона - 100% натуральная <a href="https://www.magniflex.ru/production/Merinos/ ">шерсть тонкорунного мериноса</a>
			<br><br>
			<i>Ткань чехла содержит волокна бамбука</i>
			<br><br><br>
			<b>Внутренние слои</b>:<br>
			1 - антистатическая прослойка<br>
			2 - гиппоаллергенный терморегулирующий слой<br>
			3 - основной слой: <a href="https://www.magniflex.ru/production/Eliocel/">ELIOCEL 60</a> 
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
		'cycle-title' => 'Ортопедические матрасы Magniflex Merino Bamboo' ,
		'cycle-name' => 'Ортопедический матрас Merino Bamboo',
		'sizes' => array(
			//array('80x190',19700.00),
			//array('90x200',23200.00),
			array('110x220',31200.00),
			array('120x200',30900.00),
			//array('140x200',36200.00),
			//array('160x190',39200.00),
			//array('160x200',41300.00),
			
		),
		
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '30.06.2018', 'price_koef' => 0.2, ), //скидка
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
		'parent_address' => 'collectio-Stile',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', '80x160', 'height-20'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Stile 6',
		'title' => 'Матрасы Stile 6 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 6. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Stile 6, magniflex, merino',
		'small_desc' => '
			

			<p class="hnb_harek">
			Жесткость: Жесткий<br>
			Высота: 15 см<br>
			Чехол: Несъемный, Viscose <br>
			Наполнитель: Elioform <br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/stile-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img' => '/img/product/big/stile-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'attr' => '
		<style>
				#prod_sizes{width:111px;}
				#breadcrumbs{
					background-image: url(/img/style.jpg);
					height: 250px;
				}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 15см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--Жесткий--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
	<div>
		
		<p>
		Высота матраса 15 см.<br>
		Жесткий. Усиленная поддержка спины.
		</p>
		<img itemprop="image" src="/img/layer/layer-slite6-roz.png">
		<div>
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
			array('80x160',16200.00),
			array('80x190',19100.00),
			array('80x200',20100.00),
			array('90x190',21600.00),
			array('90x200',22600.00),
			array('120x200',30100.00),
			array('140x200',35200.00),
			array('160x200',40200.00),
			array('180x200',45300.00),
			array('200x200',50200.00)
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
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
		'parent_address' => 'collectio-Stile',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', '80x160', 'height-20'),
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Stile 7',
		'title' => 'Матрасы Stile 7 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 7. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Stile 7, magniflex, merino',
		'small_desc' => '
			

			<p class="hnb_harek">
			Жесткость: Жесткий <br>
			Высота: 18 см<br>
			Чехол: Несъемный, Viscose <br>
			Наполнитель: Elioform <br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/stile-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img' => '/img/product/big/stile-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'attr' => '
		<style>
				#prod_sizes{width:111px;}
				#breadcrumbs{
					background-image: url(/img/style.jpg);
					height: 250px;
				}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 18см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--Жесткий--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
	<div>
		
		<p>
		Высота матраса 18 см.<br>
		Жесткий. Усиленная поддержка спины.
		</p>
		<img itemprop="image" src="/img/layer/layer-slite6-roz.png">
		<div>
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
			array('80x160',17900.00),
			array('80x190',21300.00),
			array('80x200',22500.00),
			array('90x190',24000.00),
			array('90x200',25200.00),
			array('120x200',33500.00),
			array('140x200',39300.00),
			array('160x200',44700.00),
			array('180x200',50400.00),
			array('200x200',55800.00)
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
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
		'address' => 'Stile-8',
		'parent_address' => 'collectio-Stile',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', 'height-20'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Stile 8',
		'title' => 'Матрасы Stile 8 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 8. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Stile 8, magniflex, merino',
		'small_desc' => '
			

			<p class="hnb_harek">
			Жесткость: Жесткий<br>
			Высота: 20 см<br>
			Чехол: Несъемный, Viscose<br>
			Наполнитель: Elioform <br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/stile-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img' => '/img/product/big/stile-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'attr' => '
		<style>
				#prod_sizes{width:111px;}
				#breadcrumbs{
					background-image: url(/img/style.jpg);
					height: 250px;
				}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 20см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--Жесткий--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
<span>STILE 8:</span>
	<div>
		
		<p>
		Высота матраса 20 см.<br>
		Жесткий. Усиленная поддержка спины.
		</p>
		<img itemprop="image" src="/img/layer/layer-slite6-roz.png">
		<div>
			<img itemprop="image" src="/img/layer/layer-slite6.png">
			<ul>
				<li>•	Чехол: вискоза Viscose.</li>
				<li>•	Слой в чехле:  hypoallergenic fiber (гипоалергенная фибра).</li>
				<li>•	Слой Elioform.</li>
				<li>•	Основной слой: Elioform 18 cm.</li>
			</ul>
		</div>
		<div style="clear:both;"></div>

	</div>
	


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
		'cycle-name' => 'Ортопедический матрас Stile 8',
		'sizes' => array(
			array('80x190',22500.00),
			array('80x200',23500.00),
			array('90x190',25200.00),
			array('90x200',26600.00),
			array('120x200',35200.00),
			array('140x200',41200.00),
			array('160x200',47000.00),
			array('180x200',52900.00),
			array('200x200',58700.00)
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
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
		'parent_address' => 'collectio-Pensiero',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses-2', '80x160', 'height-20'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Pensiero 6',
		'title' => 'Матрасы Pensiero 6 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 6. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 6, magniflex, merino',
		'small_desc' => '
			<p class="hnb_harek">
			Высота: 15 см<br>
			Жесткость: Жесткий / Cредней жесткости<br>
			Наполнитель: Elioform<br>
			Чехол: Несъемный, Viscose<br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/pensiero-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 15 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
				#prod_sizes{width: 136px;}
				.product_top .price{right: 219px;}
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
			array('80x160',19900.00),
			array('80x190',23700.00),
			array('80x200',24900.00),
			array('90x190',26700.00),
			array('90x200',27900.00),
			array('120x200',37300.00),
			array('140x200',43600.00),
			array('160x200',49700.00),
			array('180x200',56000.00),
			array('200x200',62100.00),
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
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
		'parent_address' => 'collectio-Pensiero',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses-2', 'height-20'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Pensiero 7',
		'title' => 'Матрасы Pensiero 7 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 7. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 7, magniflex, merino',
		'small_desc' => '

			<p class="hnb_harek">
			Высота: 18 см<br>
			Жесткость: Жесткий / Cредней жесткости<br>
			Наполнитель: Elioform<br>
			Чехол: Несъемный, Viscose<br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/pensiero-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 18 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
				#prod_sizes{width: 136px;}
				.product_top .price{right: 219px;}
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
<img itemprop="image" src="/img/bavov_innemat.jpg" style="width: 40%;">
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
<span>PENSIERO 7:</span>
	<div>
		
		<p>
		Высота матраса 18 см.<br>
		Средней жесткости. Поддержка спины и высокий уровень комфорта, эффект памяти.
		</p>
		<img itemprop="image" src="/img/layer/layer-pensiero-roz.png">
		<div>
			<img itemprop="image" src="/img/layer/layer-pensiero.png">
			<ul>
				<li>•	Чехол: вискоза Viscose.</li>
				<li>•	Слой в чехле матраса: Memoform 2 см.</li>
				<li>•	Слой в чехле:  hypoallergenic fiber (гипоалергенная фибра).</li>
				<li>•	Основной слой: Elioform 15 cm.</li>
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
		'cycle-name' => 'Ортопедический матрас Pensiero 7',
		'sizes' => array(
			array('80x190',25400.00),
			array('80x200',26700.00),
			array('90x190',28600.00),
			array('90x200',30000.00),
			array('120x200',40000.00),
			array('140x200',46600.00),
			array('160x200',53200.00),
			array('180x200',60000.00),
			array('200x200',66700.00),
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
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
		'address' => 'Pensiero-8',
		'parent_address' => 'collectio-Pensiero',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-20'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Pensiero 8',
		'title' => 'Матрасы Pensiero 8 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 8. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 8, magniflex, merino',
		'small_desc' => '
			<p class="hnb_harek">
			Высота: 20 см<br>
			Жесткость: Жесткий / Cредней жесткости<br>
			Наполнитель: Elioform<br>
			Чехол: Несъемный, Viscose<br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/pensiero-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 20 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
				#prod_sizes{width: 136px;}
				.product_top .price{right: 219px;}
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
<span>PENSIERO 8:</span>
	<div>
		
		<p>
		Высота матраса 20 см.<br>
		Средней жесткости. Поддержка спины и высокий уровень комфорта, эффект памяти.
		</p>
		<img itemprop="image" src="/img/layer/layer-pensiero-roz.png">
		<div>
			<img itemprop="image" src="/img/layer/layer-pensiero.png">
			<ul>
				<li>•	Чехол: вискоза Viscose.</li>
				<li>•	Слой в чехле матраса: Memoform 2 см.</li>
				<li>•	Слой в чехле:  hypoallergenic fiber (гипоалергенная фибра).</li>
				<li>•	Основной слой: Elioform 17 cm.</li>
			</ul>
		</div>
		<div style="clear:both;"></div>
	</div>
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
		'cycle-name' => 'Ортопедический матрас Pensiero 8',
		'sizes' => array(
			array('80x190',27200.00),
			array('80x200',28800.00),
			array('90x190',30600.00),
			array('90x200',32300.00),
			array('120x200',43000.00),
			array('140x200',50200.00),
			array('160x200',57300.00),
			array('180x200',64600.00),
			array('200x200',71800.00),
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
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
		'address' => 'Pensiero-12',
		'parent_address' => 'collectio-Pensiero',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('s-effektom-pamjati-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-26'),
		'name' => 'Pensiero 12',
		'title' => 'Матрасы Pensiero 12 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 12. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 12, magniflex, merino 12',
		'small_desc' => '
			<p class="hnb_harek">
			Высота: 30 см<br>
			Жесткость: Жесткий / Cредней жесткости<br>
			Наполнитель: Elioform<br>
			Чехол: Несъемный, Viscose<br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/pensiero-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 30 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
				#prod_sizes{width: 136px;}
				.product_top .price{right: 219px;}
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
<span>PENSIERO 12:</span>
	<div>
		<p>
		Высота матраса 30 см.<br>
		Средней жесткости. Поддержка спины и высокий уровень комфорта, эффект памяти.
		</p>
		<img itemprop="image" src="/img/layer/layer-pensiero-roz.png">
		<div>
			<img itemprop="image" src="/img/layer/layer-pensiero.png">
			<ul>
				<li>•	Чехол: вискоза Viscose.</li>
				<li>•	Слой в чехле матраса: Memoform 2 см.</li>
				<li>•	Слой в чехле: hypoallergenic fiber (гипоалергенная фибра).</li>
				<li>•	Основной слой: Elioform 28 см.</li>
			</ul>
		</div>
		<div style="clear:both;"></div>
	</div>
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
		'cycle-name' => 'Ортопедический матрас Pensiero 12',
		'sizes' => array(
			array('80x190',37100.00),
			array('80x200',39000.00),
			array('90x190',41700.00),
			array('90x200',43900.00),
			array('120x200',58400.00),
			array('140x200',68000.00),
			array('160x200',77700.00),
			array('180x200',87600.00),
			array('200x200',97300.00),

		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
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
		'address' => 'WATERLATTEX',
		'parent_address' => 'orthopedic_mattresses',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses','height-20'),
		'name' => 'WaterLattex',
		'title' => 'Матрас Magniflex WaterLattex. Официальный сайт Магнифлекс',
		'description' => 'Описание, фотографии, состав ортопедического матраса Magniflex WaterLattex. Очень комфортный, мягкий матрас с высочайшими анатомическими свойствами.',
		'keywords' => 'magniflex waterlattex, waterlatex, магнифлекс вотерлатекс,',
		'small_desc' => '
			<span class="hnb_popular">
			Комфортный анатомический
			</span>
			<p class="hnb_harek">
			Ортопедический, мягкий, комфортный, идеален для будущих мам, людям среднего и старшего возраста.<br>
			Высота: 18 см<br>
			Наполнитель: Waterlattex<br>
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/WaterLattex.jpg',
		'small_img_alt' => 'картинка - ортопедический матрас WaterLattex',
		'img' => '/img/product/big/WaterLattex.jpg',
		'img_alt' => 'Ортопедические матрасы WaterLattex',
		'attr' => '
			<!--<a href="/skidki-magniflex/skidka-15-legendarnye-matrasy/"><div class="hnb_action15">АКЦИЯ! Только в сентябре - <b>15% СКИДКА</b> на этот матрас!</div></a>-->
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 18 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--средней мягкости, комфортный--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет.</li></ul><br>
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



			<h1>Ортопедический матрас</h1>

			Матрас Waterlattex Magniflex ("вотерлатекс" или "ватерлатекс") - ортопедическое изделие, помогающее зафиксировать позвоночник спящего человека в правильном, оптимальном положении не зависимо от его веса и комплекции. <br />
			Он дарит своим обладателям оздоровительный сон: снимает усталость за счет полного расслабления мышц спины, способствует свободной циркуляции крови в организме, так как не пережимает даже мелкие капилляры, обеспечивает превосходную удобную поддержку. Лечебные свойства и воздействие доказаны клиническими испытаниями в Европе, США и России.


			<br /><br />
			<img  src="/img/magniflex-waterlattex1.jpg" alt="Ортопедический итальянский матрас Magniflex Waterlattex" style="width: 640 px;">
			<br /><br />


			<hr />
			<br>
			<h1>Глубокий анатомический эффект</h1>

			В основе модели Waterlattex используется принципиально новый универсальный наполнитель Watercell, благодаря которому матрас легко принимает физиологическую форму человека, естественно реагирует на движения спящего, помогая позвоночнику все время находится в анатомически правильном состоянии, способствует максимальному отдыху и расслабленности. 

			 <br><br>

			<hr />
			<br>
			<h1>Дышащие, технология Airyform</h1>

			Waterlattex - необыкновенно проницаемые матрасы, благодаря используемой в них запатентованной технологии Airyform. Матрац буквально пронизан сетью мельчайших каналов, создающих отличную вентиляцию. Каждый раз, когда Вы меняете положение свежий воздух буквально "прокачивается" через всю систему.


			<br /><br />
			<img  src="/img/waterlattex-airyform.jpg" alt="Waterlattex - технология Airyform" style="width: 640 px;"><br />
			Инновационная технология Airyform - поток воздуха при любом движении
			<br /><br />
			   

			<hr />
			<br>

			<h1>Летняя сторона - натуральный хлопок, зимняя - шерсть мериноса</h1>
			Матрас Magniflex Waterlattex имеет "летнюю" и "зимнюю" стороны. Летняя сторона - эластичная терморегулирующая ткань из 100% хлопка с пропиткой TEFLON. Зимняя производится из шерсти тонкорунного мериноса. Шерстяное покрытие действует на рецепторы кожи обеспечивая рефлекторно-анальгизирующее действие при болях, вызванных миозитом, радикулитом, невралгиями. 


			<br /><br />

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


			<br /><br />


			<hr />
			<br>

			<h1>Антиаллергенные, безопасные </h1>

			Все матрасы Magniflex  абсолютно антиаллергенные за счет многоступенчатой инновационной обработки тканей и наполнителей БЕЗ использования химических веществ. Сапрофиты -микроорганизмы, вызывающие аллергию, не заведутся никогда. В составе матрасов не используются металлические детали, поэтому они не оказывают на организм магнитного или электростатического воздействия. 
			<br><br>

			<hr />
			<br>


			<h1 style="display:block">Концептуальная идея матраса Waterlattex</h1>

			<b>Теплый песок</b> - идеальная анатомическая поддержка спины. <br />
			<b>Свежий бриз</b> - отличная воздухопроницаемость гарантия Airyform. <br />
			<b>Чистая вода</b> -  основной компонент наполнителя матраса.  <br /> <br />

			<img  src="/img/magniflex-waterlattex7.jpg" alt="Ортопедический итальянский матрас Magniflex Waterlattex" style="width: 640 px;"><br /><br />
			Рисунок-узор на поверхности матраса  напоминает океанические волны. Взгляните на фотографии выше, затем переведите взгляд на изображение отдыхающего.. у них много общего :)

			<hr />
			<br>
			<h1>Вакуумная упаковка </h1>

			Все матрасы поставляются в вакуумной упаковке - безусловная гарантия стерильной чистоты и удобства доставки. А также Ваша уверенность в том, что матрас абсолютно новый.

			<br>
					


				</div>

			</div><br>

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
				Матрас Magniflex Waterlattex ОСОБЕННО рекомендован людям среднего возраста и старшей возрастной категории. Матрас клинически испытан и признан абсолютно безопасным, поэтому  рекомендуется  женщинам, ожидающим ребенка. Он максимально точно повторяет физиологические изгибы тела, разгружает спину, расслабляет и успокаивает. Это также подходящий вариант для людей с высокой активностью и подвижностью. Создаст комфортные условия людям, предпочитающим сон на боку или на животе.  Матрас Magniflex Waterlattex делает комфортным сон людей, нуждающихся в анатомических свойствах поверхности для сна: при слабом кровообращении и затекании мягких тканей, людям с болезненными синдромами в области поясницы, при болезни межпозвонковых грыж. 
					
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
			array('80x190',23700.00),
			array('80x200',25100.00),
			array('90x190',26700.00),
			array('90x200',28200.00),
			array('120x190',35700.00),
			array('120x200',37500.00),
			array('140x190',41600.00),
			array('140x200',43800.00),
			array('160x190',47600.00),
			array('160x195',48800.00),
			array('160x200',50000.00),
			array('180x190',53400.00),
			array('180x195',54800.00),
			array('180x200',56300.00),
			array('200x200',62400.00),
		),
		
		'discount_koef' => array('date_start' => '1.9.2016', 'date_end' => '29.9.2016', 'price_koef' => 0.15, ), //скидка
		
	),
	
	
	
	
	
	
	
			array(
		'address' => 'NEW-NATURCOMFORT',
		'parent_address' => 'orthopedic_mattresses',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-22-25'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Naturalmente (New Naturcomfort)',
		'title' => 'Naturcomfort - матрас от Magniflex в нашем интернет-магазине',
		'description' => 'У нас Вы найдете матрасы серии Naturcomfort. Удобные итальянские матрасы в нашем каталоге.',
		'keywords' => 'матрас, naturcomfort, magniflex',
		'small_desc' => '
			
			<span class="hnb_popular">
			Бархатный, волокна древесины
			</span>
			<p class="hnb_harek">
			Ортопедический матрас, дарящий исключительный комфорт во время сна. Необыкновенно мягкий.<br>
			Высота: 22 см<br>
			Наполнитель: Eliosoft, Memoform<br>
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/New NaturComfort.jpg',
		'small_img_alt' => 'матрас Naturalmente (New Naturcomfort)',
		'img' => '/img/product/big/New NaturComfort.jpg',
		'img_alt' => 'Ортопедические матрасы Naturalmente (New Naturcomfort)',
		'attr' => '
		<style>
			    #breadcrumbs {
					background-image: url(/img/natur_comfort_250.jpg);
					height: 250px;
				}
				
				.new_prem_bl.fixed{
				    position: fixed;
					top: 40px;
					z-index: 980;
					
				}
				.advantages ul.new_prem_bl.fixed li{margin-top:0;}
				.product_top.fixed {
					position: fixed;
					z-index: 979;
					top: 0;
					left: 0;
					width: 100%;
					min-height: 115px;
					background: #FFF;
					box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
				}
			</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 22 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_3" title="средней жесткости"></div><!--средней жесткости, комфортный--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
			
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
			<div class="hnb_contmy new-pagehnb">
				<br><br><br>
				<i style="color: #E1001A;text-align: center;display: block;">С мая 2016 года модель ортопедического матраса New Naturcomfort получила новое название NATURALMENTE. Для удобства покупателей на сайте будут использоваться оба названия - Naturalmente (New Naturcomfort).</i>
			<h3 style="text-align:center;font: 100 24px/49px pfhighway,Helvetica,Arial,sans-serif;">Профессиональный ортопедический матрас Naturalmente (New Naturcomfort)</h3>
			<p style="float:right;width:60%;text-align:justify;">
			Упругий матрас с высокими ортопедическими свойствами, аналогичными характеристикам базовой модели Magniflex Merino. Но при этом Naturalmente (New Naturcomfort) обладает повышенным уровнем комфортности за счет 4 сантиметрового слоя инновационного материала Memoform (создает "эффект памяти").<br>
Naturalmente (New Naturcomfort) - усовершенствованная модель, выпускавшегося ранее матраса Magniflex Naturcomfort. В новом варианте изменены рисунок и простежки чехла, на 1 см увеличилась общая высота, появился дополнительный слой Memoform.
			</p>

			<div style="text-align:center;float:left;width:35%"><br><br><img  src="/img/new_hnbv_yfner+.jpg" alt="Ортопедический итальянский матрас Magniflex Naturalmente (New Naturcomfort) " style="width: 640 px;"></div>
			<div style="clear:both"></div><br /><br /><hr>
			<br>
			<br>
			<br>
			<div style="width: 100%;">
				<div style="max-width:1020px;margin:0 auto;">
					<h3 style="text-align:center;font: 100 24px/49px pfhighway,Helvetica,Arial,sans-serif;">Эффект памяти, 4 см Memoform</h3>
					
					
					<img  src="/img/memory_image.jpg" alt="Ортопедический итальянский матрас Magniflex Naturalmente (New Naturcomfort) " style=" float:left;max-width:420px">
					<ul style="text-align:justify;float:right;width: 50%;font: 300 14px/25px Arial;padding-bottom: 70px;    margin-top: 60px;">
						<li style="padding: 0 0 10px 32px;
    list-style-type: none;">
	Мгновенно принимает форму тела человека, реагируя на тепло и вес. Не оказывает ответного давления.
<br>Обеспечивает равномерное распределение нагрузки; 
						</li>
						<li style="padding: 0 0 10px 32px;list-style-type: none;">
						Максимально возможный комфорт, снижаются болевые ощущения в спине, шее и суставах, улучшает циркуляция крови;
						<li style="padding: 0 0 10px 32px;list-style-type: none;">
						Способствует расслаблению мышц человека во время сна;
						</li>
						<li style="padding: 0 0 10px 32px;list-style-type: none;">
						Снижает вероятность появления отечности и онемения конечностей;
						</li>
						<li style="padding: 0 0 10px 32px;list-style-type: none;">
						Дарит крепкий и здоровый сон.
						</li>
					</ul>
					<div style="clear:both"></div>
					<br /><br /><hr>
				</div>

			</div>
			
			<br /><br />
			<h3  style="text-align:center;font: 100 24px/49px pfhighway,Helvetica,Arial,sans-serif;">Дышащий, отличная вентиляция</h3>
			<p style="text-align:justify;">
			Хороший матрас должен дышать, то есть быть воздухопронициаемым. Основной слой матраса – Eliosoft обладает открытой структурой, обеспечивающей естественную вентиляцию и циркуляцию воздуха.
			</p>
			<br /><br />
			<img style="display: block;margin: 0 auto;zoom: 80%;" src="/img/dyshshii.jpg">
            <hr style="margin-top: 0px;">
			<br>
			<br>
			<br>
			<br>
			<br>
			
			<div style="width: 100%;">
				<div style="max-width:1020px;margin:0 auto;">
					<h3 style="text-align:center;font: 100 24px/49px pfhighway,Helvetica,Arial,sans-serif;">Ткань Wooden Fiber, содержит волокна белой пихты</h3>
					
					
					
					<p style="text-align:justify;">
			Чехол матраса изготавливается из ткани Wooden Fiber с использованием натуральных волокон белой пихты. Общеизвестно, шишки белой пихты являются отличным средством борьбы с ревматизмом и другими суставными патологиями.<br> 
Wooden Fiber – мягкий эластичный материал, быстро и эффективно испаряющий влагу, не накапливает сырость, обеспечивает хороший теплообмен с телом человека. Высокие бактериостатические и абсорбирующие свойства материи  позволяют эффективно удалять посторонние запахи.
			</p>
			<img style="display: block;margin: 0 auto;zoom: 80%;" src="/img/pine-needles-branch.jpg">
			<br>
			<br>
					<div style="clear:both"></div>

				</div>

			</div>
			
			<br /><br />
		
			
			<div style="clear:both;"></div>
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
			array('80x190',31800.00),
			array('80x200',33500.00),
			array('90x190',35700.00),
			array('90x200',37500.00),
			array('120x190',47600.00),
			array('120x200',50100.00),
			array('140x190',55500.00),
			array('140x200',58400.00),			
			array('160x190',63500.00),
			array('160x195',65100.00),
			array('160x200',66800.00),
			array('170x200',71000.00),
			array('180x200',75200.00),
			array('200x200',83400.00),
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
		
		
		'yml_desc' => '
			Уровень комфорта: средней жесткости, комфортный. Magniflex Naturalmente (New Naturcomfort) дарит исключительный комфорт во время сна. Даже если просто прикоснуться к нему рукой, непременно ощущаешь необыкновенную мягкость, "бархатность" поверхности матраса. Этот волшебный эффект ему придают древесные волокна, входящие в состав тканей и материалов. 
		',
		'yml_torgmail' => true,
		
		
	),
	
	
	
	
	array(
		'address' => 'natur-baci-mattress',
		'parent_address' => 'orthopedic_mattresses',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('snyatie-s-proizvodstva', 'height-22-25'),
		'name' => 'Natur Baci',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 22 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_1" title="мягкий"></div><!--средней мягкости/очень мягкий - двусторонний матрас--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
					<td><img itemprop="image" src="/img/chehol.png"  alt="Матрас Magniflex: съемный чехол"> </td>
					<td><br /><br /><b>Съемный чехол</b> - элементарно ухаживать, легко постирать</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/3d.png"  alt="Матрас Magniflex: 3d ткань"> </td>
					<td><br />Уникальная <b>трехмерная высокотехнологичная ткань</b>, использующаяся в чехле. Высочайший уровень проницаемости - матрас буквально дышит. Минимальный уровень влажности. Нейтрализует посторонние неприятные запахи. Гарантия чрезвычайно высокого уровня гигиены.</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/ruchka.png"  alt="Матрас Magniflex: удобная ручка" ></td>
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
				
       <img itemprop="image" src="/img/layer/layer-natur-baci.png" alt="состав матраса Natur Baci Magniflex">

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
			array('160x200',60000.00),
			array('180x200',67200.00),
			//array('200x200',75100.00),
		),
		'available' => array(
			'status' => false,
			'msg_category' => 'Нет в наличии',
			'msg_product' => '<span style="color: #900;font-size: 17px;">Нет в наличии</span>',
		),
		

		
		'discount_koef' => array('date_start' => '1.9.2016', 'date_end' => '29.9.2016', 'price_koef' => 0.15, ), //скидка
		
	),
	array(
		'address' => 'MEMO-MERINO',
		'parent_address' => 'orthopedic_mattresses',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('chehol-coolmax-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-20'),
		'name' => 'Memo Merino',
		'title' => 'Матрас Мемо (Memo Merino) - интернет-магазине Magniflex',
		'description' => 'У нас Вы найдете матрасы Мемо. Magniflex Memo Merino - матрасы с высокими анатомическими свойствами.',
		'keywords' => 'матрас, мемо, magniflex, memo, merino',
		'small_desc' => '
			<span class="hnb_popular">
			класса "де-Люкс"
			</span>
			<p class="hnb_harek">Эксклюзивный ортопедический матрас. Достаточно дорогой, но он этого стоит. Настоящее совершенство!
			<br>
			Высота: 20 см<br>
			Наполнитель: Memoform Magnifoam<br>
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Memo Merino.jpg',
		'small_img_alt' => 'ортопедический матрас Magniflex Merinos Memo Merino',
		'img' => '/img/product/big/Memo Merino.jpg',
		'img_alt' => 'Ортопедические матрасы Magniflex Merinos Memo Merino',
		'attr' => '
			<!--<a href="/skidki-magniflex/skidka-15-legendarnye-matrasy/"><div class="hnb_action15">АКЦИЯ! Только в сентябре - <b>15% СКИДКА</b> на этот матрас!</div></a>-->
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 20 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая<!--очень комфортный--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
			<p>

			Ортопедический матрас с высокими анатомическими свойствами Magniflex Memo Merino - это высокотехнологичный продукт нового поколения.


			<br /><br />
			<img  src="/img/memo-merino-magniflex-2.jpg" alt="Ортопедический итальянский матрас Magniflex Memo Merino" style="width: 640 px;">
			<br /><br />

			Конструктивно матрас выполнен в виде двухслойного блока. В основе этого ортопедического матраса лежит слой Memory® Form (другое название MEMOFORM) высотой целых 6 см, придающий матрасу высочайшие анатомические свойства и комфортность. Термочувствительный материал MEMOFORM (Memory® Form) был разработан специально по заказу национального управления США по аэронавтике и исследованию космического пространства (NASA), для снижения давления на чувствительные участки тела астронавтов при длительных повышенных нагрузках в фиксированном положении. Пористая структура этого материала состоит из многочисленных ячеек открытой формы, представляющие собой микроскопические пружинки, сжимающиеся под действием веса и тепла человеческого тела и распрямляющиеся с задержкой в 6-7 секунд после снятия нагрузки.
			Memory® Form под воздействием тепла и веса человека подстраивается под контуры человека, лежащего на матрасе, "запоминает" форму тела, точно повторяя его рельеф, не "выталкивает" его, не оказывает на него ответного давления, вследствие чего во время сна тело получает наиболее равномерное распределение точечной нагрузки по всей поверхности матраса. В результате появляется эффект наподобие невесомости, полное ощущение комфорта и отсутствие каких-либо проблем с недостатком кровоснабжения сосудов, которых ничто не сдавливает. Что в свою очередь способствует уменьшению тревожности сна, на 80% снижает количества поворотов во сне. Сон становится простым и приятным, позволяющим восстановить силы человеку за гораздо меньшее время, по сравнению со сном на обычном матрасе. На ортопедическом матрасе с наполнителем из Memory® Form можно проспать всю ночь ни разу не перевернувшись на другой бок - этим качеством не сможет похвастаться ни один другой матрас.
			<br /><br />
			Материал Memory® Form не вызывает аллергии, не накапливает пыль, ему не опасна плесень, в нем не заводится моль и микроскопические пылевые клещи сапрофиты.
			<br /><br />

			Свойства Memory® Form: <br />
			- Экологически чистый, гипоалергенный материал <br />
			- Поддерживает оптимальный температурный фон <br />
			- Воздухопроницаемость <br />
			- Гигиеничность и устойчивость к образованию грибков и пылевых клещей сапрофитов<br />
			- Бесшумность и несминаемость с течением времени<br />



			<br /><br />
			<img  src="/img/memo-merino-magniflex-1.jpg" alt="Ортопедический итальянский матрас Magniflex Memo Merino" style="width: 640 px;">
			<br /><br />

			Матрас «Memo Merino» является самовентилирующейся системой позволяющей воздуху свободно циркулировать внутри матраса, поддерживая постоянную нейтральную температуру.
			<br /><br />
			</p>


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
			array('80x190',38300.00),
			array('80x200',40200.00),
			array('90x190',43100.00),
			array('90x200',45300.00),
			array('120x190',57300.00),
			array('120x200',60300.00),
			array('140x190',66900.00),
			array('140x200',70400.00),
			array('150x200',75500.00),
			array('160x190',76500.00),
			array('160x195',78500.00),
			array('160x200',80400.00),
			array('180x190',86000.00),
			array('180x200',90500.00),
			array('200x200',100500.00),
		),
		
		'discount_koef' => array('date_start' => '1.9.2016', 'date_end' => '29.9.2016', 'price_koef' => 0.15, ), //скидка
		
		
		'yml_desc' => '
			Уровень комфорта: очень комфортный. Высота: 20 см. Срок службы: не менее 15 лет. Матрас с высокими анатомическими свойствами. 
		',
		'yml_torgmail' => true,
		
	),
	/*empty cards*/
	/*
	array(
		'address' => '60-120',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 60х120см',
		'title' => 'Ортопедический матрас 120х60 см - купить в интернет-магазине Magniflex',
		'description' => 'У нас Вы можете купить ортопедические матрасы 120х60 см. Привлекательные цены в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, 120х60',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '70-160',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 70х160см',
		'title' => 'Ортопедический матрас 70х160 см - купить матрас 160 на 70 в интернет-магазине Magniflex',
		'description' => 'У нас Вы можете купить ортопедические матрасы 70х160 см. Весь ассортимент матрасов 160 на 70 Вы найдете в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, 70х160, 160, 70, 160х70',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '80-160',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 80х160см',
		'title' => 'Ортопедический матрас 80х160 см - купить в интернет-магазине Magniflex',
		'description' => 'Предлагаем приобрести ортопедические матрасы 80х160 см по привлекательной цене.',
		'keywords' => 'матрас, ортопедический, 80х160',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '80-180',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 80х180см',
		'title' => 'Ортопедический матрас 180 80 см - купить матрас 80х180 в интернет-магазине Magniflex',
		'description' => 'У нас Вы можете купить ортопедические матрасы 180 на 80 (80х180 см). Доступные цены в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, 180, 80, 80х180, 180х80',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '80-190',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 80х190см',
		'title' => 'Ортопедический матрас 80х190 см - купить матрас 80 на 190 в интернет-магазине Magniflex',
		'description' => 'У нас Вы можете купить ортопедические матрасы 80х190 (80 на 190 см). Весь ассортимент в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, купить, 80х190, 80, 190, 190х80',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '80-200',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 80х200см',
		'title' => 'Ортопедический матрас 80х200 см - купить матрас 80 на 200 в интернет-магазине Magniflex',
		'description' => 'Приобретайте ортопедические матрасы 80х200 (80 на 200 см) в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, 80х200, 80, 200',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '90-140',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 90х140см',
		'title' => 'Ортопедический матрас 140 на 190 см - купить в интернет-магазине Magniflex',
		'description' => 'Большой ассортимент ортопедических матрасов 140 на 190 см в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, 140, 190',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '90-190',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 90х190см',
		'title' => 'Ортопедический матрас 90х190 см - купить матрас 90 на 190 в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить ортопедические матрас 90х190 см. Большой выбор матрасов 90 на 190 в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, купить, 90х190, 90, 190, 190х90',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '90-200',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 90х200см',
		'title' => 'Ортопедический матрас 90х200 см - купить матрас 90 на 200 по доступной цене в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить ортопедические матрасы 90х200 см. Большой выбор матрасов 90 на 200 в нашем каталоге.',
		'keywords' => 'матрас, цена, ортопедический, купить, 90х200, 90, 200',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '100-200',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 100х200см',
		'title' => 'Ортопедический матрас 100х200 см - интернет-магазин Magniflex',
		'description' => 'В наличии ортопедические матрасы 100х200 см по доступным ценам.',
		'keywords' => 'матрас, ортопедический, 100х200',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '110-190',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 110х190см',
		'title' => 'Ортопедический матрас 110х190 см - интернет-магазин Magniflex',
		'description' => 'В наличии ортопедические матрасы 110х190 см. Доступные цены в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, 110х190',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '120-190',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 120х190см',
		'title' => 'Ортопедический матрас 120х190 см - купить матрас 120 на 90 в интернет-магазине Magniflex',
		'description' => 'В наличии ортопедические матрасы 120х190 см. Цены на матрасы размерами 120 на 190 в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, купить, 120х190, 120, 190',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '120-200',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 120х200см',
		'title' => 'Ортопедический матрас 120х200 (120 на 200 см) - интернет-магазин Magniflex',
		'description' => 'В наличии ортопедические матрасы 120х200 см. Цены на матрасы размерами 120 на 200 в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, 120х200, 120, 200',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '140-190',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 140х190см',
		'title' => 'Ортопедический матрас 140х190 см по доступной цене - интернет-магазин Magniflex',
		'description' => 'Предлагаем купить ортопедические матрасы 140х190 см. Доставка по Москве, Московской области и России.',
		'keywords' => 'матрас, ортопедический, 140х190',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '140-200',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 140х200см',
		'title' => 'Ортопедический матрас 140х200 см - купить матрас 140 на 200 по доступной цене в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить ортопедические матрасы 140х200 см. Цены на матрасы размерами 140 на 200 в нашем каталоге.',
		'keywords' => 'матрас, цена, ортопедический, купить, 140х200, 140, 200',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '150-190',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 150х190см',
		'title' => 'Ортопедический матрас 190 150 см - интернет-магазин Magniflex',
		'description' => 'Предлагаем купить ортопедические матрасы 190 на 150 см в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, 190, 150',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '150-200',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 150х200см',
		'title' => 'Ортопедический матрас 150х200 см - интернет-магазин Magniflex',
		'description' => 'У нас Вы найдете ортопедические матрасы 150х200 см. Доступные цены в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, 150х200',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '160-190',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 160х190см',
		'title' => 'Ортопедический матрас 160х190 см - купить матрас 160 на 190 в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить ортопедические матрасы 160х190 см. Итальянские матрасы 160 на 190 в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, купить, 160х190, 160, 190',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '160-200',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 160х200см',
		'title' => 'Ортопедический матрас 160х200 (1600 2000 мм) - купить матрас 160 на 200 по доступной цене в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить ортопедические матрасы 160х200 см (1600 2000 мм). Цены на итальянские матрацы 160 на 200 в нашем каталоге.',
		'keywords' => 'матрас, цена, ортопедический, купить, 160х200, 1600х2000, 160, 200, 160x200, 200х160, 1600, 2000',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '180-200',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 180х200см',
		'title' => 'Ортопедический матрас 180х200 см - купить матрас 180 на 200 в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить ортопедические матрасы 180х200 см. Цены на итальянские матрасы 180 на 200 в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, купить, 180х200, 180, 200',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '200-200',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 200х200см',
		'title' => 'Ортопедические матрасы 200 на 200 (200х200 см) - интернет-магазин Magniflex',
		'description' => ' У нас Вы найдете ортопедические матрасы 200 200 см. Цены на итальянские матрасы размерами 200 на 200 в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, 200, 200х200',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),	
	array(
		'address' => '200-220',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Ортопедический матрас 200х220см',
		'title' => 'Ортопедические матрасы 200х220 см - интернет-магазин Magniflex',
		'description' => 'В наличии ортопедические матрасы 200х220 см. Большой ассортимент итальянских матрасов в нашем каталоге.',
		'keywords' => 'матрас, ортопедический, 200х220',
		'text' => '
			<div id="cat_desc">

			</div>
		',
	),		
	*/
	/*end of empty cards*/	
	/* элитные матрасы */
	array(
		'address' => 'Virtus-30',
		'parent_address' => 'elitnye-virtus',
		'parent_address2' => 'mattresses',
		'other_categories' => array('s-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-satin-mattresses','srednie-mattresses', 'mattresses-filter', 'height-26'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Virtus 30',
		'title' => 'Virtus 30 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрасы из коллекции Virtus 30. Весь ассортимент в нашем каталоге.',
		'keywords' => 'virtus, 30',
		'small_desc' => '
			<span class="hnb_popular">
			Самое Лучшее
			</span>
			<p class="hnb_harek">
			Лучшее, что Вам может предложить современная индустрия сна.<br />
			Высота: 30 см<br />
			Наполнитель: Memoform HD, Eliosoft Breeze<br />
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Virtus 30.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Virtus 30',
		'img' => '/img/product/big/Virtus 30.jpg',
		'img_preview' => array('/img/product/big/virtus-30-1.jpg', '/img/product/big/virtus-30-2.jpg', '/img/product/big/virtus-30-3.jpg', '/img/product/big/virtus-30-4.jpg'),
		'img_alt' => 'Элитные матрасы Magniflex Virtus 30',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 30 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_2" title="средней мягкости"></div><!--Комфортнейший--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 20 лет</li></ul><br>
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
			<span class="hnb_bigtytles">Преимущества матрасов коллекции Virtus</span>
					</span>


			<div id="hnb_3nelement">
			<div class="hnb_3nelementli">
							<span itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/dih.png" alt="" /></span>
							<div style="clear:both;"></div>
							<span>Невероятно дышащий</span><br />
							
							используется самая современная разработка Breeze (Бриз). Ультрапроницаемые свойства. Не нагревается от соприкосновения с телом
						</div>
						<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 0px; opacity: 1;">
							<img style="margin-top: -6px;" src="/img/ortopedef.png">
							<div style="clear:both;"></div>
							<span>Ортопедический эффект</span><br>
								непревзойденные ортопедические свойства, деликатная, самонастраивающаяся надежная поддержка 
			позвоночника. Эффект памяти 

						</div>
						<div class="hnb_3nelementli">
							<img style="margin-top: -12px;" src="/img/palm.png" />
							<div style="clear:both;"></div>
							<span>Анатомический эффект</span><br />
						Пожалуй, самые комфортные матрасы в мире. Быстро восстанавливают силы, максимальное расслабление организма!
						</div>
					</div>
			<div style="clear:both;"></div>
				<hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Самое лучшее, что Вам может предложить современная индустрия сна! 
					</span>
					<br />
					<span class="hnb_eytext">
			Это одни из самых лучших матрасов в мире. Для их создания используются самые современные, дорогие технологии, отбираются только лучшие ткани и материалы. Каждый матрас уникальный, создается вручную в течение 2-х недель, после чего проходит специальный контроль качества.
					</span>
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

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			
			<span class="hnb_eytext" style="text-align:left;">
			
				Высота: 30 см.<br><br>
				Жесткость: средней мягкости.<br><br>
				Зима: кашемир, шерсть мериноса, верблюжья шерсть, конский волос.<br><br>
				Лето: шелк, лен, хлопок.<br><br>
				Чехол: не съемный, Satin/viscosa.<br><br>
				Срок службы: 20 лет.
			</span>
			<br>
			<span itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/newmanuimg-virtus.png" /></span>
			<br>
			<span itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/newmanuimg-virtus2.png" /></span>
			<br><br>
			
			<ul class="hnb_myhrled hnb_newulel" style="text-align:left;font-size: 16px;width: 560px;background: url(/img/product/newsostvirnus.jpg)no-repeat left;">
				<li>Ткань чехла матраса: Сатин/вискоза
				</li>
				<li>Зимняя сторона: Кашемир, отборная шерсть тонкорунного мериноса, отборная верблюжья шерсть, конский волос
				</li>
				<li>Memoform HD 4 см – анатомический эффект памяти
				</li>
				<li>Слой Eliosoft Breeze 19 cм
				</li>
				<li>Memoform HD 4 см - анатомический эффект памяти
				</li>
				<li>Летняя сторона: первокласный шелк, лен, хлопок премиального уровня
			</li>
			</ul>
			
			<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Элитный матрас Magniflex Virtus 30
					</span>
					<br>
					<span class="hnb_eytext">
			<strong>Матрас коллекции Virtuoso - Luxury коллекция, шик и роскошь, ставшие реальностью.</strong><br><br>
			
			Матрас Виртус включает в себя все современные и инновационные технологии, которые только существуют, а также натуральные материалы, позволяющие достигать невероятного комфорта и эффекта во время сна. Чехол матраса украшен рисунком флорентийской лилии, который создал настоящий тренд в области дизайна интерьеров.
					<br><br>
					<span itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/new-virt-elnice.jpg" alt="" /></span>
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
			
			
			<table class="hnb_table_elit2colnnonebord">
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new1p.jpg" alt=""></td>
					<td>Удобные ручки для переноски или заправления постельного белья
					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new2p.jpg" alt=""></td>
					<td>Эксклюзивные детали в дизайне, ручная сборка, качество до мелочей

					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new3p.jpg" alt=""></td>
					<td>Невероятно комфортный, дышащий, гарантия свежего сна
					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new4p.jpg" alt=""></td>
					<td>Только натуральные самые лучшие отборные материалы

					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new5p.jpg" alt=""></td>
					<td>Сделано в Италии (Флоренция, Тоскана)<br>
по самым высоким стандартам качества.<br>
Сертификация ведущих лабораторий в 96-ти странах мира.

					</td>
				</tr>
				
				
			</table>
			
			<br><br>
			
			<table class="hnb_table_elit2coln">
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new1.png" alt=""></td>
					<td><strong>Satin viscose</strong><br><br>
Материал вискоза-сатин сочетает в себе свойства вискозы, которая имеет мягкую и шелковистую структуру, качество сатина, а также элегантность ткани с эффектом глянца на ощупь. Вместе, они имеют отличный потенциал впитывать и испарять влагу, что способствует воздухопроницаемости матраса.
					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new2.png" alt=""></td>
					<td><strong>100 % Cotton</strong><br><br>
100% хлопок. Хлопок - это волокно растительного происхождения, которое славится своими гигроскопичными и антистатическими свойствами, а также воздухопроницаемостью. Материал обладает высокой впитывающей функцией и является мягким и удобным на ощупь, позволяя коже дышать и обеспечивая освежающий ночной сон.
					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new3.png" alt=""></td>
					<td><strong>Merinos</strong><br><br>
Шерсть мериноса стригут из самых лучших пород овец семейства меринос. Шерсть мериноса является одной из самых качественных среди волокон животного происхождения. Чрезвычайно тонкая и мягкая на ощупь, обладает тепло-регулирующими свойствами и отличной воздухопроницаемостью, которая позволяет коже свободно дышать. Также меньше всего людей в мире имеют аллергию на шерсть мериноса, что делает ее самым популярным материалом в мире.
					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new4.png" alt=""></td>
					<td><strong>Silk</strong><br><br>
Шелк, безусловно - это лучший и самый надежный материал из натуральных волокон, с большой механической прочностью и эластичностью, хотя при этом он мягкий и приятный на ощупь. Шелк - это из самый популярный luxury материал в мире, является отличным изолятором, обеспечивая тепло зимой и свежесть летом.
					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new5.png" alt=""></td>
					<td><strong>Camelhair wool</strong><br><br>
Верблюжья шерсть идеально подходит для зимних наполнений матраса, поскольку имеет структуру, которая хорошо удерживает тепло. Отлично поглощает влагу, которую выделяет организм и помогает ей быстро испаряться, сохраняя сухой и приятный микроклимат.
					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new6.png" alt=""></td>
					<td><strong>Cashemire</strong><br><br>
Кашемир - очень тонкая, мягкая и тёплая материя саржевого переплетения; ткётся из гребенной пряжи, сработанной из пуха (подшёрстка) кашемировых горных коз. Выдерживает грязь и, в первую очередь, пыль. Его необыкновенная способность задерживать воздух обеспечивает высокую степень тепловой изоляции, которая гарантирует сохранения тепла в зимние месяцы.
					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new7.png" alt=""></td>
					<td><strong>Horsehair</strong><br><br>
Конский волос - это волокно, которое используется с древности для деталей кроватей и матрасов из-за своей невероятной упругости и эластичности. Конский волос не теряет свою природную эластичность и быстро восстанавливает свою первоначальную форму, обеспечивая такую же степень комфорта с течением времени. Волокно хорошо впитывает влагу и гарантирует, что тело остается прохладным и сухим.
					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new8.png" alt=""></td>
					<td><strong>Linen</strong><br><br>
Лен - является наиболее подходящим волокном для наполнения летней стороны матраса, поскольку он дает ощущение свежести при контакте с кожей. Кроме того, благодаря своей молекулярной структуре, лен успевает поглощать влагу, выделяющуюся организмом во время сна, позволяя ей испаряться.
					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new9.png" alt=""></td>
					<td><strong>Magnifoam Breeze</strong><br><br>
Magnifoam Бриз - это инновационная пена, которая имеет одни из самых высоких показателей по воздухопроницаемости, Elioform Breeze – упругий вариант пены.<br>
Материал обогащен натуральным экстрактом эвкалипта, что позволяет повысить ощущение хорошего самочувствия и свежести с прохладой во время сна, при этом обеспечивая максимальную поддержку для спины.
					</td>
				</tr>
				
				<tr>
					<td itemscope="" itemtype="http://schema.org/ImageObject"><img itemprop="image" src="/img/product/virt-sost-new1.png" alt=""></td>
					<td><strong>Memoform HD</strong><br><br>
Memoform HD - это инновационная, высокой плотности вязко-эластичная латексная пена, которая обладает высокой прочностью. Это обеспечивает непревзойденный комфорт и обеспечивает еще лучшее положение для спины. Его прочность и длительный срок службы ставят этот материал в ряд самых сложных и технологически продвинутых продуктов.
					</td>
				</tr>
			</table>
			
			<span class="hnb_bigtytles24">Преимущества модели Virtus</span>
					<span class="hnb_eytext2">
			Комфортный ортопедический матрас класса „Премиум”,  обеспечивающий отличную поддержку позвоночника, <br />
			Великолепный анатомический эффект. <br />
			Эффект памяти достигается благодаря инновационному материалу  Memoform HD (8 см!!!)<br />
					</span>


			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Virtus 30' ,
		'cycle-name' => 'Ортопедический матрас Virtus 30',
		'sizes' => array(
			array('80x190',227200.00),
			array('80x200',229100.00),
			array('90x190',255000.00),
			array('90x200',269000.00),
			array('120x200',358600.00),
			array('140x200',418300.00),
			array('160x200',478000.00),
			array('180x200',537800.00),
			array('200x200',597600.00),
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка

		
	),
	array(
		'address' => 'Exchange-Memoform-Dual',
		'parent_address' => 'elitnye-harmony',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses', 'height-26'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Exchange Memoform Dual',
		'title' => 'Memoform Dual - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрасы Memoform Dual. Особая технология позволяет изменить жесткость половинки матраса за считанные минуты.',
		'keywords' => 'memoform, dual',
		'small_desc' => '
			<span class="hnb_popular">
			для Королевских семей
			</span>
			<p class="hnb_harek">Очень комфортный. Моделируемый. 5 звезд. Терморегуляция! <br />
			Высота: 30 см<br />
			Наполнители: Memoform 2+6 см, Eliosoft 10см, Elioform 10 см<br />
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Exchange Memoform Dual.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Exchange Memoform Dual',
		'img' => '/img/product/big/Exchange Memoform Dual.jpg',
		'img_preview' => array('/img/product/big/memoform-dual-1-new.jpg', '/img/product/big/memoform-dual-2-new.jpg', '/img/product/big/memoform-dual-3-new.jpg', '/img/product/big/memoform-dual-4-new.jpg'),
		'img_alt' => 'элитный матраса Magniflex Exchange Memoform Dual',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/harmony_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 30 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая<!--Средней жесткости / Жесткий. 4 комбинации комфорта--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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

			<!--<hr class="hnb_myhrled" />
				<span class="hnb_bigtytles">
						Разные половинки – разная жесткость (Dual Core) 
					</span>
					<br />
					<span class="hnb_eytextoutlast">
						Технология Dual Core позволяет изменить жесткость половинки матраса за считанные минуты. Суть технологии проста: двуспальные матрасы состоят из двух блоков. Для смены жесткости необходимо расстегнуть  чехол (на молнии) и перевернуть на другую сторону блок. Все просто: одно сторона блока жесткая, а другая – мягкая.   
			<br /><br />
			Несмотря на то, что матрас состоит из двух разных блоков, стык между ними абсолютно незаметен и не мешает сну благодаря специально разработанному плотному чехлу, включающего в себя 2 см слой инновационного материала с эффектом памяти – Memoform.
					</span>
					<img itemprop="image" src="/img/armonia-dual.jpg" alt="" />
					<br /><br />
					<span class="hnb_eytextoutlast">
			Это очень удобно и практично. Если один человек предпочитает мягкий матрас, а его партнер – жесткий, то им достаточно повернуть блоки в нужные им положения и наслаждаться комфортом.
					</span>
					<br /><br /><br />
					-->
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
				<li>Ткань
				чехла матраса: Outlast/Viscose
				</li>
				<li>Слой
				Memoform 2 cm в чехле матраса
				</li>
				<li>Слой
				Super Soft fiber в чехле матраса
				</li>
				<li>Отдельный
				топпер Memoform 6 cm 
				</li>
				<li>Слой
				Eliosoft 10 cm с креплением «волна»
				</li>
				<li>Слой
				Elioform 10 cm с креплением «волна»
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
			array('80x190',96400.00),
			array('80x200',101700.00),
			array('90x190',108500.00),
			array('90x200',114200.00),
			array('120x200',152300.00),
			array('140x200',177600.00),
			array('160x200',202900.00),
			array('180x200',228400.00),
			array('180x220',251300.00),
			array('200x200',253700.00),
		),
		
	

		
	),
	array(
		'address' => 'Magnificent-12',
		'parent_address' => 'elitnye-magnificent',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses','myahkie-mattresses', 'height-26'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Magnificent 12',
		'title' => 'Magnificent 12 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрасы из коллекции Magnificent 12. Технология Dual Core позволяет менять жесткость половинки матраса.',
		'keywords' => 'magnificent, 12',
		'small_desc' => '
			<span class="hnb_popular">
			Мультислой
			</span>
			<p class="hnb_harek">
			Очень мягкий, чуткий матрас. В сумме 12 см слой Memoform-а. Платформа DualCore.<br />
			Высота: 30 см<br />
			Наполнитель: Memoform, Eliosoft, Elioform <br />
			Произведен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Magnificent 12.jpg',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 30 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая<!--Очень мягкий / средней мягкости - моделируемый dual core--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
					<img itemprop="image" src="/img/DUAL-COMFORT-magnificent.jpg" alt="" />
					<br /><br />
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
			<img itemprop="image" src="/img/product/newmanuimg-magnificent.png">
			<br>
            
			
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magnificodual12.jpg">
			<ul class="hnb_krtovul">
                                    <li>Ткань чехла матраса: аутласт/вискоза</li>
									<li>Слой Memoform 2 cm в чехле матраса</li>
									<li>Слой Super Soft fiber в чехле матраса</li>
									<li>Memoform 5 cm</li>
									<li>Elioform 8,5 cm</li>
									<li>Eliosoft 8,5 cм</li>
									<li>Memoform 5 cм</li>

									
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
            
            <br><br>
            <h2 class="h2_h2">5 ПРИЧИН ПОЧЕМУ СЛЕДУЕТ ВЫБРАТЬ MAGNIFICENT 12</h2>
            <ul class="hnb_krtovul2">
                                    <li>Матрас с регулируемой жесткостью dual core. 12 см в сумме материала Memoform! Повышенная комфортность и анатомические свойства.</li>
									<li>Съемный чехол с космической технологией терморегуляции Outlast – удобство эксплуатации. Возможна химчистка.</li>
									<li>Высокий матрас 30 см с эксклюзивным дизайном, кинг size, элита товаров для сна.</li>
									<li>Матрас поставляется в рулоне – существенная экономия на транспортных расходах при заказе в регионы.</li>
									<li>Сделано в Италии, Тоскана, Флоренция. Качество и надежность. Продается в 96-ти странах мира!</li>
									

									
								</ul>
            <br><br>
			
			<table class="hnb_table_elit2coln">
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent5.png" alt=""></td>
					<td><strong>Viscose</strong><br><br>
Вискоза - мягкая, шелковистая ткань производится из очищенной и отборной древесной целлюлозы. Она чрезвычайно мягкая и шелковистая и быстро впитывает влагу, обеспечивая высокую воздухопроницаемость матрасов и подушек.</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent6.png" alt=""></td>
					<td><strong>Memoform</strong><br><br>
Memoform имеет наиболее выраженные анатомические свойства из всех используемых материалов и предназначен для адаптации под вес тела и каждый контур человеческой фигуры. (анатомически повторяет контуры тела).
Это свойство обеспечивает ощущение повышенного комфорта и легкости во время сна и благотворно влияет на позвоночник, позволяя ему расслабиться.  
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent7.png" alt="">
                    <img itemprop="image" src="/img/product/newmanuimg-magnificent8.png" alt="">
                    </td>
					<td><strong>Magnifoam</strong><br><br>
Magnifoam – латексная пена, которая имеет высокую плотность и микропористую структуру, которая сочетает в себе эластичность и воздухопроницаемость. Благодаря особой молекулярной структуре, Magnifoam доступен в трех версиях: </br>
•	более мягкая версия Eliosoft</br>
•	более твердая версия Elioform (плотность 35кг/м3)
Elioform и Eliosoft также имеют большую степень воздухопроводимости, чем  материал предыдущего поколения Eliocel.
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent9.png" alt=""></td>
					<td><strong>Super Soft Fiber</strong><br><br>
Начинка сделана из супер мягкого фибрового волокна. Материал невероятно мягкий и дышащий, обеспечивает нежную и комфортную поддержку всего вашего тела. Его особый состав обеспечивает ощущение комфорта и улучшает качество сна.</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent10.png" alt=""></td>
					<td><strong>Outlast</strong><br><br>
Outlast – теплорегулирующая ткань, созданная по специальным технологиям для скафандров космонавтов. Сертификация: Space technology. Ткань, которая содержит миллионы сфер, изготовленных из специального воска, который реагирует на температуру. Подобное свойство обеспечивается особенностью структуры восковых сфер – они могут сжиматься и разжиматься, соответственно накапливая или отдавая тепло.</td>
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
			array('80x190',79400.00),
			array('80x200',83600.00),
			array('90x190',89400.00),
			array('90x200',94000.00),
			array('120x200',125400.00),
			array('140x200',146400.00),
			array('160x200',167200.00),
			array('180x200',188000.00),
			array('200x200',209000.00),
		),
		
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '30.06.2018', 'price_koef' => 0.1, ), //скидка
		

		
		
		
	),
	array(
		'address' => 'Imperiale-24',
		'parent_address' => 'elitnye-magnificent',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-26', 'action'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Imperiale 24',
		'title' => 'Imperiale 24 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрас Imperiale 24. Высокотехнологичные матрасы Premium класса в нашем каталоге.',
		'keywords' => 'imperiale, 24',
		'small_desc' => '
			<span class="hnb_popular">
			Идеальная система
			</span>
			<p class="hnb_harek">Экстракомфорт, эффект памяти. Средней жесткости. <br />
			Высота: 24 см<br />
			Наполнители: Memosoft 4, Memoform 3, Eliosoft 3, Elioform 12<br />
			Создан в ИТАЛИИ.
                 </p>
		',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 24 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Средней жесткости</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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
									<li>Слой Memoform 3 cм</li>
						<li>Слой Eliosoft 3 cм</li>
									<li>Слой Elioform 12 cм</li>

									
								</ul>
					</span>

			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 24' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 24',
		'sizes' => array(
			array('160x200',130000.00),
			
		),

		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2018', 'price_koef' => 0.2, ), //скидка
		

		
		
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

		/* array('90x200',73200.00),
			array('120x200',97600.00),
			array('140x200',113800.00),
			
			array('180x200',146200.00),
			array('200x200',162600.00), */
		
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
		'small_desc' => '
			<span class="hnb_popular">Производитель OrthoSleep</span>
			<p class="hnb_harek">Категория ткани: на выбор <br />
			Материал : ЛДСП или МДФ<br />
            </p>
		',
		'small_img' => '/img/product/arno_small.jpg',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Материал: ЛДСП или МДФ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Категория ткани: на выбор</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>


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
			Кровать Arno
					</span>
					<br />
					<span class="hnb_eytext">
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
					</span>
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
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 24' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 24',
		'sizes' => array(
			array('160x200',35990.00),
			
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		

		
		
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

		/* array('90x200',73200.00),
			array('120x200',97600.00),
			array('140x200',113800.00),
			
			array('180x200',146200.00),
			array('200x200',162600.00), 


			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Section</span>
			<span class="hnb_eytext2">
			Description<br> 
					</span>*/
		
	),



array(
		'address' => 'toskana',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Toskana',
		'title' => 'Кровать Тоскана от интернет-магазина Magniflex',
		'description' => 'Кровать Тоскана',
		'keywords' => '',
		'small_desc' => '
      	<span class="hnb_popular">Производитель OrthoSleep</span>
			<p class="hnb_harek">Категория ткани: на выбор <br />
			Материал : ЛДСП или МДФ<br />
            </p>
		',
		'small_img' => '/img/product/toskana_small.jpg',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Материал: ЛДСП или МДФ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Категория ткани: на выбор</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>


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
			Кровать Тоскана
					</span>
					<br />
					<span class="hnb_eytext">
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
					</span>
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
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 24' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 24',
		'sizes' => array(
			array('160x200',35590.00),
			
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		

		
		
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

		/* array('90x200',73200.00),
			array('120x200',97600.00),
			array('140x200',113800.00),
			
			array('180x200',146200.00),
			array('200x200',162600.00), */
		
	),


array(
		'address' => 'rimini',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Rimini',
		'title' => 'Кровать Римини от интернет-магазина Magniflex',
		'description' => 'Кровать Римини',
		'keywords' => '',
		'small_desc' => '
	<span class="hnb_popular">Производитель OrthoSleep</span>
			<p class="hnb_harek">Категория ткани: на выбор <br />
			Материал : ЛДСП или МДФ<br />
            </p>
		',
		'small_img' => '/img/product/rimini_small.jpg',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">



			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Материал: ЛДСП или МДФ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Категория ткани: на выбор</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>


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
			Кровать Римини
					</span>
					<br />
					<span class="hnb_eytext">
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
					</span>
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
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 24' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 24',
		'sizes' => array(
			array('160x200',35990.00),
			
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		

		
		
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

		/* array('90x200',73200.00),
			array('120x200',97600.00),
			array('140x200',113800.00),
			
			array('180x200',146200.00),
			array('200x200',162600.00), */
		
	),


array(
		'address' => 'san-remo',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'San-remo',
		'title' => 'Кровать Сан Ремо от интернет-магазина Magniflex',
		'description' => 'Сан Ремо',
		'keywords' => '',
		'small_desc' => '
     	<span class="hnb_popular">Производитель OrthoSleep</span>
			<p class="hnb_harek">Категория ткани: на выбор<br />
			Материал : ЛДСП или МДФ<br />
            </p>
		',
		'small_img' => '/img/product/sanremo_small.jpg',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Материал: ЛДСП или МДФ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Категория ткани: на выбор</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>


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
			Кровать Сан Ремо
					</span>
					<br />
					<span class="hnb_eytext">
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
					</span>
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
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 24' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 24',
		'sizes' => array(
			array('160x200',35390.00),
			
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		

		
		
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

		/* array('90x200',73200.00),
			array('120x200',97600.00),
			array('140x200',113800.00),
			
			array('180x200',146200.00),
			array('200x200',162600.00), */
		
	),


array(
		'address' => 'kyanti',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Kianti',
		'title' => 'Кровать Кьянти от интернет-магазина Magniflex',
		'description' => 'Кровать Кьянти',
		'keywords' => 'Кровать Кьянти',
		'small_desc' => '
        	<span class="hnb_popular">Производитель OrthoSleep</span>
			<p class="hnb_harek">Категория ткани: на выбор<br />
			Материал : ЛДСП или МДФ<br />
            </p>
		',
		'small_img' => '/img/product/kianti_small.jpg',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">



			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Материал: ЛДСП или МДФ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Категория ткани: на выбор</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>


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
			Кровать Кьянти
					</span>
					<br />
					<span class="hnb_eytext">
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
					</span>
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
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 24' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 24',
		'sizes' => array(
			array('160x200',32290.00),
			
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		

		
		
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

		/* array('90x200',73200.00),
			array('120x200',97600.00),
			array('140x200',113800.00),
			
			array('180x200',146200.00),
			array('200x200',162600.00), */
		
	),


array(
		'address' => 'verona',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Verona',
		'title' => 'Кровать Верона от интернет-магазина Magniflex',
		'description' => 'Кровать Верона',
		'keywords' => 'Кровать Верона',
		'small_desc' => '
        	<span class="hnb_popular">Производитель OrthoSleep</span>
			<p class="hnb_harek">Категория ткани: на выбор<br />
			Материал : ЛДСП или МДФ<br />
            </p>
		',
		'small_img' => '/img/product/verona_small.jpg',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">



			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Материал: (ЛДСП или МДФ)</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Категория ткани: на выбор</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

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
			Кровать Верона
					</span>
					<br />
					<span class="hnb_eytext">
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
					</span>
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/product/verona-g1.jpg" alt="" />
														<span>
														
														</span>
											</a>
											
											
					</div>
				</div>




			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 24' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 24',
		'sizes' => array(
			array('160x200',46290.00),
			
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		

		
		
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

		/* array('90x200',73200.00),
			array('120x200',97600.00),
			array('140x200',113800.00),
			
			array('180x200',146200.00),
			array('200x200',162600.00), */
		
	),


array(
		'address' => 'venecia',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Venecia',
		'title' => 'Кровать Венеция от интернет-магазина Magniflex',
		'description' => 'Кровать Венеция',
		'keywords' => 'Кровать Венеция',
		'small_desc' => '
	        <span class="hnb_popular">Производитель OrthoSleep</span>
			<p class="hnb_harek">Категория ткани: на выбор<br />
			Материал : ЛДСП или МДФ<br />
            </p>
		',
		'small_img' => '/img/product/venecia_small.jpg',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Материал: (ЛДСП или МДФ)</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Категория ткани: на выбор</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

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
			Кровать Венеция
					</span>
					<br />
					<span class="hnb_eytext">
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
					</span>
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
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 24' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 24',
		'sizes' => array(
			array('160x200',56490.00),
			
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		

		
		
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

		/* array('90x200',73200.00),
			array('120x200',97600.00),
			array('140x200',113800.00),
			
			array('180x200',146200.00),
			array('200x200',162600.00), */
		
	),
array(
		'address' => 'bibione-classic',
		'parent_address' => 'beds',
		'parent_name' => 'Кровати',
		'name' => 'Bibione-classic',
		'title' => 'Кровать Бибионе Классик от интернет-магазина Magniflex',
		'description' => 'Кровать Бибионе Классик',
		'keywords' => 'bibione, classic',
		'small_desc' => '
       	<span class="hnb_popular">OrthoSleep</span>
			<p class="hnb_harek">Категория ткани: на выбор <br />
			Материал : ЛДСП или МДФ<br />
            </p>
		',
		'small_img' => '/img/product/bibione_small.jpg',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">



			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Материал: (ЛДСП или МДФ)</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Категория ткани: на выбор</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>



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
			Кровать Бибионе Классик
					</span>
					<br />
					<span class="hnb_eytext">
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
					</span>
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
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 24' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 24',
		'sizes' => array(
			array('80x200',30890.00),
			
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		

		
		
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',

		/* array('90x200',73200.00),
			array('120x200',97600.00),
			array('140x200',113800.00),
			
			array('180x200',146200.00),
			array('200x200',162600.00), */
		
	),


	array(
		'address' => 'Imperiale-28',
		'parent_address' => 'elitnye-imperiale',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-26', 'action'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Imperiale 28',
		'title' => 'Итальянский элитный матрас Imperiale 28',
		'description' => 'Описание, фотографии, состав матраса Imperiale 28, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex imperiale, элитный матрас',
		'small_desc' => '
			<span class="hnb_popular">
			Идеальный матрас
			</span>
			<p class="hnb_harek">Экстракомфорт, эффект памяти. Средней мягкости. <br />
			Высота: 28 см<br />
			Наполнители: Memosoft 4, Memoform 3, Eliosoft 5, Elioform 14<br />
			Создан в ИТАЛИИ.
                 </p>
		',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 28 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Средней мягкости</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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
									<li>Слой Memoform 3 cм</li>
						<li>Слой Eliosoft 5 cм</li>
									<li>Слой Elioform 14 cм</li>

									
								</ul>
					</span>



			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Imperiale 28' ,
		'cycle-name' => 'Ортопедический матрас Impleriale 28',
		'sizes' => array(
			
			array('150x200',155200.00),
		),

		/* array('90x200',93200.00),
			array('120x200',124200.00),
			array('140x200',144800.00),
			array('160x200',165400.00),
			array('180x200',186000.00),   */
		
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '31.05.2018', 'price_koef' => 0.2, ), //скидка
		
		
	),
	array(
		'address' => 'Imperiale-33',
		'parent_address' => 'elitnye-magnificent',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 'snyatie-s-proizvodstva', 'height-26'),          /*('s-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','myahkie-mattresses'), */
		'parent_name' => 'Элитные матрасы',
		'name' => 'Imperiale 33',
		'title' => 'Imperiale 33 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'Предлагаем купить матрас Imperiale 33. Матрасы с высоким анатомическим и ортопедическим эффектом в нашем каталоге.',
		'keywords' => 'imperiale, 33',
		'small_desc' => '
			<span class="hnb_popular">
			Роскошный ортопедический
			</span>
			<p class="hnb_harek">Экстракомфортный, эффект памяти. MEMOSOFT! Мягкий. <br />
			Высота: 33 см<br />
			Наполнители: Memosoft 4, Memoform 5, Eliosoft 5, Elioform 17<br />
			Создан в ИТАЛИИ.
                 </p>
		',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 33 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Мягкий</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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
									<li>Слой Memoform 5 cм</li>
						<li>Слой Eliosoft 5 cм</li>
									<li>Слой Airyform Elioform 17 cм</li>

									
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
		'sizes' => array(
			array('90x200',112400.00),
			array('120x200',149800.00),
			array('140x200',174800.00),
			array('160x200',199600.00),
			array('180x200',224600.00),
			array('200x200',249600.00),
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		
		
	),
	array(
		'address' => 'Comfort-Plus-10',
		'parent_address' => 'elitnye-comfort-delux',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses', 'height-22-25'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Comfort Plus 10',
		'title' => 'Comfort Plus 10 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрасы серии Comfort Plus 10. Большой ассортимент итальянских матрасов в нашем каталоге.',
		'keywords' => 'comfort, plus, 10',
		'small_desc' => '
			<span class="hnb_popular">
			Необыкновенный комфорт
			</span>
			<p class="hnb_harek">Терморегулирующий, эффект памяти, DualCore. Жесткий.<br />
			Высота: 25 см<br />
			Наполнители: Memoform (2+5), Elioform (17)<br />
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/comfort-plus-10.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/comfort-plus-10.jpg',
		'img_preview' => array('/img/product/big/comfort-plus-10-2-new.jpg', '/img/product/big/comfort-plus-10-3-new.jpg', '/img/product/big/comfort-plus-10-4-new.jpg', '/img/product/big/comfort-plus-10-5-new.jpg'),
		'img_alt' => '',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/comfort_delux_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 25 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая<!--Средней жесткости / Жесткий Моделируемый--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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
						Разные половинки – разная жесткость (Dual Core) 
					</span>
					<br />
					<span class="hnb_eytextoutlast">
						Технология Dual Core позволяет изменить жесткость половинки матраса за считанные минуты. Суть технологии проста: двуспальные матрасы состоят из двух блоков. Для смены жесткости необходимо расстегнуть  чехол (на молнии) и перевернуть на другую сторону блок. Все просто: одно сторона блока жесткая, а другая – мягкая.   
			<br /><br />
			Несмотря на то, что матрас состоит из двух разных блоков, стык между ними абсолютно незаметен и не мешает сну благодаря специально разработанному плотному чехлу, включающего в себя 2 см слой инновационного материала с эффектом памяти – Memoform.
					</span>
					<img itemprop="image" src="/img/DUAL-COMFORT.jpg" alt="" />
					<br /><br />
					<span class="hnb_eytextoutlast">
			Это очень удобно и практично. Если один человек предпочитает мягкий матрас, а его партнер – жесткий, то им достаточно повернуть блоки в нужные им положения и наслаждаться комфортом.
					</span>
					<br /><br /><br />
				<hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Дарят необыкновенный комфорт!
					</span>
					<br />
					<span class="hnb_eytext">
			Матрасы Premium класса, одни из самых лучших в своем классе! Возможность моделирования оптимального уровня комфорта из нескольких возможных!
					  Отличные анатомический и ортопедический эффекты, потрясающие терморегулирующие свойства.
					</span>
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/comfort-1.jpg" alt="" />
														<span>
												Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/comfort-2.jpg" alt="" />
														<span>
												Эксклюзивные детали			
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/product/other/comfortplus-2.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/comfort-3.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/comfort-4.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/comfort-5.jpg" alt="" />
														<span>
													Съемный чехол. Удобно моделировать, легко ухаживать. Можно стирать!	
														</span>

											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/comfort-6.jpg" alt="" />
														<span>
										Эксклюзивные детали	
														</span>
											</a>

			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/comfort-7.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/comfort-8.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											
					</div>
				</div>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Съемный чехол Viscose с технологией Outlast!</span>
					<span class="hnb_eytext2">
			Съемный терморегулирующий чехол с запатентованной технологией Outlast.<br /> 
			Элегантная объемная ткань
					</span>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img itemprop="image" src="/img/comfortdual10.jpg">
			<ul class="hnb_krtovul">
			<li>Viscose</li>
									<li>Слой Memoform 2 cм</li>
									<li>Слой Super Soft fibre</li>
									<li>Слой Memoform 5 cм</li>
									<li>Слой Elioform 17 cм</li>

									
								</ul>
					</span>
			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Comfort Plus 10' ,
		'cycle-name' => 'Ортопедический матрас Comfort Plus 10',
		'sizes' => array(
			array('80x190',46600.00),
			array('80x200',49200.00),
			array('90x190',52600.00),
			array('90x200',55300.00),
			array('120x200',73700.00),
			array('140x200',85900.00),
			array('160x200',96400.00),
			array('180x200',110400.00),
			array('200x200',122600.00),
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		

		
		
		
		'yml_desc' => 'Матрасы Premium класса! Моделируемый уровень комфорта - технология  Dual Core. Съемный терморегулирующий чехол с запатентованной технологией Outlast. Эффект памяти.  Высота: 25 см. Срок службы: не менее 15 лет.',

		
	),
	array(
		'address' => 'Comfort-Plus-12',
		'parent_address' => 'elitnye-comfort-delux',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses','myahkie-mattresses', 'height-26'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Comfort Plus 12',
		'title' => 'Comfort Plus 12 - купить ортопедический матрас в интернет-магазине Magniflex',
		'description' => 'Матрас Comfort Plus 12. Матрасы данной серии состоят из двух разных блоков и обладают эффектом памяти.',
		'keywords' => 'comfort, plus, 12',
		'small_desc' => '
			<span class="hnb_popular">
			Один из лучших
			</span>
			<p class="hnb_harek">Терморегулирующий, эффект памяти, DualCore. Мягкий. <br />
			Высота: 30 см<br />
			Наполнители: Memoform (2+5), Elioform 3, Eliosoft<br />
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/comfort-plus-12.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Comfort Plus 12',
		'img' => '/img/product/big/comfort-plus-12.jpg',
		'img_preview' => array('/img/product/big/comfort-plus-10-2-new.jpg', '/img/product/big/comfort-plus-10-3-new.jpg', '/img/product/big/comfort-plus-10-4-new.jpg', '/img/product/big/comfort-plus-10-5-new.jpg'),
		'img_alt' => 'элитный матрас Magniflex Comfort Plus 12',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/comfort_delux_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 30 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая<!--Средней мягкости / Мягкий,
			Моделируемый--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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
						Разные половинки – разная жесткость (Dual Core) 
					</span>
					<br />
					<span class="hnb_eytextoutlast">
						Технология Dual Core позволяет изменить жесткость половинки матраса за считанные минуты. Суть технологии проста: двуспальные матрасы состоят из двух блоков. Для смены жесткости необходимо расстегнуть  чехол (на молнии) и перевернуть на другую сторону блок. Все просто: одно сторона блока жесткая, а другая – мягкая.   
			<br /><br />
			Несмотря на то, что матрас состоит из двух разных блоков, стык между ними абсолютно незаметен и не мешает сну благодаря специально разработанному плотному чехлу, включающего в себя 2 см слой инновационного материала с эффектом памяти – Memoform.
					</span>
					<img itemprop="image" src="/img/DUAL-COMFORT.jpg" alt="" />
					<br /><br />
					<span class="hnb_eytextoutlast">
			Это очень удобно и практично. Если один человек предпочитает мягкий матрас, а его партнер – жесткий, то им достаточно повернуть блоки в нужные им положения и наслаждаться комфортом.
					</span>
					<br /><br /><br />
				<hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Дарят необыкновенный комфорт!
					</span>
					<br />
					<span class="hnb_eytext">
			Матрасы Premium класса, одни из самых лучших в своем классе! Возможность моделирования оптимального уровня комфорта из нескольких возможных!
					  Отличные анатомический и ортопедический эффекты, потрясающие терморегулирующие свойства.
					</span>
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/comfort-1.jpg" alt="" />
														<span>
												Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/comfort-2.jpg" alt="" />
														<span>
												Эксклюзивные детали			
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/product/other/comfortplus-2.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/comfort-3.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/comfort-4.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/comfort-5.jpg" alt="" />
														<span>
													Съемный чехол. Удобно моделировать, легко ухаживать. Можно стирать!	
														</span>

											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
			<img itemprop="image" src="/img/comfort-6.jpg" alt="" />
														<span>
										Эксклюзивные детали	
														</span>
											</a>

			<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/comfort-7.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/comfort-8.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											
					</div>
				</div>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Съемный терморегулирующий чехол Outlast</span>
					<span class="hnb_eytext2">
			Съемный терморегулирующий чехол с запатентованной технологией Outlast.<br /> 
			Элегантная объемная ткань
					</span>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img itemprop="image" src="/img/comfortdeluxedual12.jpg">
			<ul class="hnb_krtovul">
			<li>Viscose</li>
									<li>Слой Memoform 2 cм</li>
									<li>Слой Super Soft fibre</li>
									<li>Слой Memoform 3 cм</li>
									<li>Слой Elioform 3 cм</li>
									<li>Слой Eliosoft 21 cм</li>

									
								</ul>
					</span>
			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Comfort Plus 12' ,
		'cycle-name' => 'Ортопедический матрас Comfort Plus 12',
		'sizes' => array(
			array('80x190',53900.00),
			array('80x200',56800.00),
			array('90x190',60700.00),
			array('90x200',64000.00),
			array('120x200',85200.00),
			array('140x200',99300.00),
			array('160x200',113400.00),
			array('180x200',127500.00),
			array('200x200',141800.00),
		),
		
		//'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка
		
		//'discount_koef' => array('date_start' => '21.4.2016', 'date_end' => '10.5.2016',
			//'sizes' => array('160x200'),
			//'prices' => array(
				//'160x200' => 91375.00,
			//),
		//), //скидка
		
		
	),
	
	
	array(
		'address' => 'Stretching-9',
		'parent_address' => 'elitnye-Stretching',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-22-25'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Stretching 9',
		'title' => 'Итальянский элитный матрас Stretching 9',
		'description' => 'Описание, фотографии, состав матраса Stretching 9, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex Stretching, элитный матрас',
		'small_desc' => '
			<span class="hnb_popular">
			Сны на облаке
			</span>
			<p class="hnb_harek">Дышащий, эффекты памяти и охлаждения.<br />
			Высота: 23 см<br />
			Наполнитель: Memoform, Magnigel Foam,  Eliosoft<br />
			Сделано в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/stretching-9-210.jpg',
		'small_img_alt' => 'элитный матрас Magniflex FreshGel 9',
		'img' => '/img/product/big/stretching-9.jpg',
		'img_alt' => 'элитный матрас Magniflex Stretching 9',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/STRETCHING_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 23 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_3" title="средней жесткости"></div><!--Средней жесткости--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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
				<div class="hnb_elcont3" style="    text-align: center;font-size: 14px;color: #555;line-height: 24px;margin-top: 70px;">
					<span class="hnb_bigtytles">
			КОЛЛЕКЦИЯ МАТРАСОВ STRETCHING
					</span>
					<br />
					<span class="hnb_eytext hnb_andimgsorleft">
						<img itemprop="image" src="/img/product/other/tex_strange.jpg">
						<span>Коллекция матрасов с запатентованной технологией Stretching – разработка фабрики Magniflex совместно с институтом Сарагосы, Испания. Матрас, приводящий спину в порядок.</span>
					</span>
					<span class="hnb_bigtytles">
			КАК ЭТО РАБОТАЕТ?
					</span>
					<img itemprop="image" src="/img/product/other/kaket_strang.jpg"><br>
					<p style="text-align:left;">
					<b>РЕЗУЛЬТАТ:</b> уменьшение болей в спине и шее, оздоровление позвоночника во время сна за счет растягивания позвоночных дисков, растяжки позвоночника делают мышцы и связки спины эластичными, тем самым укрепляя поддержку позвоночного столба и обезболивая место локализации заболевания.
					</p>
					<span class="hnb_bigtytles24">Зачем нужно растягивать позвоночник</span>
					
					Обычный человек не использует возможности позвоночника на все 100%. Ходьба, повороты, наклоны, поднятие и переноска тяжестей – все эти нагрузки позвоночник способен вынести без особенного напряжения. Немногие ежедневно дают своему позвоночнику достаточное растяжение, обычно это спортсмены, те, кто делает зарядку, играет в подвижные игры или проводит время на природе. У остальных позвоночник "усыхает". С каждым днем организм стареет и утрачивает способность восстанавливать ткани, кости, кровь.<br> <br>
От состояния позвоночника зависят все жизненные процессы. Вот почему упражнения для позвоночника помогут растянуть не только позвоночник – они продлят вашу жизнь, сделают ее полноценной и радостной.<br> <br>
Животные ежедневно тренируют свой позвоночник. Для них такой естественной тренировкой являются повседневные движения. Кошка растягивает позвонки, выгибая спину. Собака прижимается грудью к земле и вытягивает передние лапы или извивается всем телом и крутит головой. Вот почему животные полны сил до самой старости. Так, средняя продолжительность жизни собаки – 10 лет, а заметных признаков дряхлости до 8–9 лет не появляется. У людей все иначе.<br>
То, что человек начинает стареть в 40 лет, а в 50 жизнь идет к закату – не заложено природой. Человеческий организм до 70–80 лет способен нормально работать. И в этом возрасте, к сожалению редко, но встречаются здоровые, энергичные люди, которые обладают легкой походкой, ясным взглядом и острым умом.<br>
Но первые признаки старения исчезнут, если ежедневно хотя бы понемногу тренировать позвоночник. Это действительно так. Упражнения для позвоночника элементарны, а позволяют сохранить молодость и здоровье. В дополнение к упражнениям отличным способом продлить молодость является матрас Stretching Magniflex.<br><br><br>
<img itemprop="image" src="/img/product/other/stretching_rengen.jpg">
<br><br><br>
Облегчение болей в спине, приятное расслабление и легкость утром гарантированы.

<br><br><br>
<img itemprop="image" src="/img/product/other/stretching_rengen2.jpg">
<br><br><br>
<img itemprop="image" src="/img/product/other/new_instrser.png">
<br><br><br>
			<ul style="text-align:left;line-height:26px;">
				<li>•	Матрасы Stretching обладают средней жесткостью (высокие ортопедические свойства).</li>
				<li>•	Слой Memoform гарантирует повышенный уровень комфорта, эффект памяти, высокие анатомические свойства.</li>
				<li>•	3D ткань чехла обеспечивает непревзойдённый уровень циркуляции воздуха, защищая матрас от образования пыли и пылевых клещей.</li>
				<li>•	Ткань чехла Outlast – технологии Space Technologies, терморегуляция на поверхности матраса – идеальный микроклимат при любых погодных условиях и температур тела.</li>
				<li>•	Натуральная ткань чехла вискоза, отсутствие вредных материалов.</li>
				<li>•	Съемный чехол на молнии, удобство чистки чехла при загрязнениях.</li>
			</ul>
			
			<br><br><br>
<img itemprop="image" src="/img/product/other/strang_newsloy3d.png">
<br><br><br>
<div class="hnb_opis_sostava">
<span>Stretching 9</span>
	<div>
		
		<p>
		Высота матраса 23 см.<br>
		Средней жесткости.
		</p>
		<img style="    top: -90px;max-width: 490px;" src="/img/layer/layer-Stretching-10-roz.png">
		<div>
			<img style="margin-top: -70px;" src="/img/layer/layer-Stretching-9.png">
			<ul>
				<li>•	Ткань чехла: Outlast/Вискоза</li>
				<li>•	Слой в чехле: Memoform 1 см</li>
				<li>•	Слой в чехле: гипоаллергенный слой</li>
				<li>•	Eliosoft 5 см – запатентованная технология Stretch core</li>
				<li>•	Elioform 8 см - запатентованная технология Stretch core</li>
				<li>•	Elioform 8 см</li>
			</ul>
		</div>
		<div style="clear:both;"></div>

	</div>
	


</div>


<div style="text-align:left;">
Гарантированный срок службы: 12 лет<br>
Матрас поставляется в фирменном рулоне в вакуумной упаковке по технологии Magniflex<br>
Матрас сертифицирован ведущими мировыми организациями, в продаже в 96 странах.<br>
За первый год стал одной из самых продаваемых серий матрасов Magniflex.<br>

</div>
<br><br><br>
<b>Если Вы заботитесь о своем здоровье – матрас Magniflex Stretching именно то, что Вам нужно.</b>
<br><br>
<img itemprop="image" src="/img/product/other/stretching.jpg">
			
			</div>
			</div>
		</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Stretching 9' ,
		'cycle-name' => 'Ортопедический матрас Stretching 9',
		'sizes' => array(
			array('80x190',65400.00),
			array('80x200',68800.00),
			array('90x190',80600.00),
			array('90x200',77400.00),
			array('120x200',103200.00),
			array('140x200',120400.00),
			array('160x200',137400.00),
			array('180x200',154600.00),
			array('200x200',171800.00),
		),
		
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '30.06.2018', 'price_koef' => 0.1, ), //скидка
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
		//	'sizes' => array('160x200', '180x200'),
		//	'prices' => array(
		//		'160x200' => 62950,
		//		'180x200' => 70850,
		//	),
		//), //скидка
		
		'yml_desc' => 'Комфортный терморегулирующий матрас  с гелевым слоем Magnigel Foam. Не нагревается от соприкосновения с телом: спать на нем прохладно даже жарким летом. Зимой не “отбирает” тепло! Эффект памяти. Необыкновенно проницаемый, дышащий. Уровень комфорта: достаточно жесткий. Высота: 23 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200'),
		
	),
	
	
	
	
	array(
		'address' => 'Stretching-10',
		'parent_address' => 'elitnye-Stretching',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'chehol-outlast-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-22-25'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Stretching 10',
		'title' => 'Итальянский элитный матрас Stretching 10',
		'description' => 'Описание, фотографии, состав матраса Stretching 10, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex Stretching, элитный матрас',
		'small_desc' => '
			<span class="hnb_popular">
			Сны на облаке
			</span>
			<p class="hnb_harek">Дышащий, эффекты памяти и охлаждения.<br />
			Высота: 25 см<br />
			Наполнитель: Memoform, Magnigel Foam,  Eliosoft<br />
			Сделано в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/stretching-10-210.jpg',
		'small_img_alt' => 'элитный матрас Magniflex stretching-10',
		'img' => '/img/product/big/stretching-10.jpg',
		'img_alt' => 'элитный матрас Magniflex Stretching 10',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/STRETCHING_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 25 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая<!--Средней жесткости--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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
				<div class="hnb_elcont3" style="    text-align: center;font-size: 14px;color: #555;line-height: 24px;margin-top: 70px;">
					<span class="hnb_bigtytles">
			КОЛЛЕКЦИЯ МАТРАСОВ STRETCHING
					</span>
					<br />
					<span class="hnb_eytext hnb_andimgsorleft">
						<img itemprop="image" src="/img/product/other/tex_strange.jpg">
						<span>Коллекция матрасов с запатентованной технологией Stretching – разработка фабрики Magniflex совместно с институтом Сарагосы, Испания. Матрас, приводящий спину в порядок.</span>
					</span>
					<span class="hnb_bigtytles">
			КАК ЭТО РАБОТАЕТ?
					</span>
					<img itemprop="image" src="/img/product/other/kaket_strang.jpg"><br>
					<p style="text-align:left;">
					<b>РЕЗУЛЬТАТ:</b> уменьшение болей в спине и шее, оздоровление позвоночника во время сна за счет растягивания позвоночных дисков, растяжки позвоночника делают мышцы и связки спины эластичными, тем самым укрепляя поддержку позвоночного столба и обезболивая место локализации заболевания.
					</p>
					<span class="hnb_bigtytles24">Зачем нужно растягивать позвоночник</span>
					
					Обычный человек не использует возможности позвоночника на все 100%. Ходьба, повороты, наклоны, поднятие и переноска тяжестей – все эти нагрузки позвоночник способен вынести без особенного напряжения. Немногие ежедневно дают своему позвоночнику достаточное растяжение, обычно это спортсмены, те, кто делает зарядку, играет в подвижные игры или проводит время на природе. У остальных позвоночник "усыхает". С каждым днем организм стареет и утрачивает способность восстанавливать ткани, кости, кровь.<br> <br>
От состояния позвоночника зависят все жизненные процессы. Вот почему упражнения для позвоночника помогут растянуть не только позвоночник – они продлят вашу жизнь, сделают ее полноценной и радостной.<br> <br>
Животные ежедневно тренируют свой позвоночник. Для них такой естественной тренировкой являются повседневные движения. Кошка растягивает позвонки, выгибая спину. Собака прижимается грудью к земле и вытягивает передние лапы или извивается всем телом и крутит головой. Вот почему животные полны сил до самой старости. Так, средняя продолжительность жизни собаки – 10 лет, а заметных признаков дряхлости до 8–9 лет не появляется. У людей все иначе.<br>
То, что человек начинает стареть в 40 лет, а в 50 жизнь идет к закату – не заложено природой. Человеческий организм до 70–80 лет способен нормально работать. И в этом возрасте, к сожалению редко, но встречаются здоровые, энергичные люди, которые обладают легкой походкой, ясным взглядом и острым умом.<br>
Но первые признаки старения исчезнут, если ежедневно хотя бы понемногу тренировать позвоночник. Это действительно так. Упражнения для позвоночника элементарны, а позволяют сохранить молодость и здоровье. В дополнение к упражнениям отличным способом продлить молодость является матрас Stretching Magniflex.<br><br><br>
<img itemprop="image" src="/img/product/other/stretching_rengen.jpg">
<br><br><br>
Облегчение болей в спине, приятное расслабление и легкость утром гарантированы.

<br><br><br>
<img itemprop="image" src="/img/product/other/stretching_rengen2.jpg">
<br><br><br>
<img itemprop="image" src="/img/product/other/new_instrser.png">
<br><br><br>
			<ul style="text-align:left;line-height:26px;">
				<li>•	Матрасы Stretching обладают средней жесткостью (высокие ортопедические свойства).</li>
				<li>•	Слой Memoform гарантирует повышенный уровень комфорта, эффект памяти, высокие анатомические свойства.</li>
				<li>•	3D ткань чехла обеспечивает непревзойдённый уровень циркуляции воздуха, защищая матрас от образования пыли и пылевых клещей.</li>
				<li>•	Ткань чехла Outlast – технологии Space Technologies, терморегуляция на поверхности матраса – идеальный микроклимат при любых погодных условиях и температур тела.</li>
				<li>•	Натуральная ткань чехла вискоза, отсутствие вредных материалов.</li>
				<li>•	Съемный чехол на молнии, удобство чистки чехла при загрязнениях.</li>
			</ul>
			
			<br><br><br>
<img itemprop="image" src="/img/product/other/strang_newsloy3d.png">
<br><br><br>
<div class="hnb_opis_sostava">
<span>Stretching 9</span>
	<div>
		
		<p>
		Высота матраса 25 см.<br>
		Средней жесткости.
		</p>
		<img style="    top: -90px;max-width: 490px;" src="/img/layer/layer-Stretching-10-roz.png">
		<div>
			<img style="margin-top: -70px;" src="/img/layer/layer-Stretching-9.png">
			<ul>
				<li>•	Ткань чехла: Outlast/Вискоза</li>
				<li>•	Слой в чехле: Memoform 2 см</li>
				<li>•	Слой в чехле: гипоаллергенный слой</li>
				<li>•	Eliosoft 5 см – запатентованная технология Stretch core</li>
				<li>•	Elioform 8,5 см - запатентованная технология Stretch core</li>
				<li>•	Elioform 8,5 см</li>
			</ul>
		</div>
		<div style="clear:both;"></div>

	</div>
	


</div>


<div style="text-align:left;">
Гарантированный срок службы: 12 лет<br>
Матрас поставляется в фирменном рулоне в вакуумной упаковке по технологии Magniflex<br>
Матрас сертифицирован ведущими мировыми организациями, в продаже в 96 странах.<br>
За первый год стал одной из самых продаваемых серий матрасов Magniflex.<br>

</div>
<br><br><br>
<b>Если Вы заботитесь о своем здоровье – матрас Magniflex Stretching именно то, что Вам нужно.</b>
<br><br>
<img itemprop="image" src="/img/product/other/stretching.jpg">
			
			</div>
			</div>
		</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Stretching 10' ,
		'cycle-name' => 'Ортопедический матрас Stretching 10',
		'sizes' => array(
			array('80x190',71600.00),
			array('80x200',68800.00),
			array('90x190',73600.00),
			array('90x200',84800.00),
			array('120x200',113200.00),
			array('140x200',132000.00),
			array('160x200',150800.00),
			array('180x200',169600.00),
			array('200x200',188400.00),
		),
		
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '30.06.2018', 'price_koef' => 0.1, ), //скидка
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
		//	'sizes' => array('160x200', '180x200'),
		//	'prices' => array(
		//		'160x200' => 62950,
		//		'180x200' => 70850,
		//	),
		//), //скидка
		
		'yml_desc' => 'Комфортный терморегулирующий матрас  с гелевым слоем Magnigel Foam. Не нагревается от соприкосновения с телом: спать на нем прохладно даже жарким летом. Зимой не “отбирает” тепло! Эффект памяти. Необыкновенно проницаемый, дышащий. Уровень комфорта: достаточно жесткий. Высота: 23 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200'),
		
	),
	
	
	
	
	
	array(
		'address' => 'FreshGel-9',
		'parent_address' => 'elitnye-FreshGel',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-22-25', 'action'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'FreshGel 9',
		'title' => 'Итальянский элитный матрас FreshGel 9',
		'description' => 'Описание, фотографии, состав матраса FreshGel 9, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex freshgel, элитный матрас',
		'small_desc' => '
			<span class="hnb_popular">
			Сны на облаке
			</span>
			<p class="hnb_harek">Дышащий, эффекты памяти и охлаждения.<br />
			Высота: 23 см<br />
			Наполнитель: Memoform, Magnigel Foam,  Eliosoft<br />
			Сделано в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/FreshGel 9.jpg',
		'small_img_alt' => 'элитный матрас Magniflex FreshGel 9',
		'img' => '/img/product/big/FreshGel 9.jpg',
		'img_alt' => 'элитный матрас Magniflex FreshGel 9',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/freshgel_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 23 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_3" title="средней жесткости"></div><!--Средней жесткости--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
				<hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Настоящее воплощение комфорта и удовольствия во сне!
					</span>
					<br />
					<span class="hnb_eytext">
			Это Матрасы сочетающие в себе современные тенденции и элегантность.
						При первом взгляде бросается их легкий, воздушный образ. 
						 Стиль подчеркивается во всех деталях - начиная с эстетики совершенных форм 
						и заканчивая явной ориентацией на комфорт спящего человека.
					</span>
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

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose®</span>
			<span class="hnb_eytext2">
			Съемный терморегулирующий чехол с запатентованной технологией Viscose.<br> 
			Элегантная объемная ткань
					</span>
			
			<h2 class="h2_h2">Ортопедический матрас элитной коллекции Магнифлекс с гелевым наполнителем Magnigel.</h2>
			<span class="hnb_eytext" style="text-align:left;">			
				Высота: 23 см.<br><br>
				Жесткость: средней мягкости.<br><br>
				Чехол: съемный на молнии, viscosa.<br><br>
				Срок службы: не менее 15 лет.
			</span>
			
			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
            <img itemprop="image" src="/img/product/Freshgel-9.png">
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magnigel9.jpg">
			<ul class="hnb_krtovul">
			
									<li>Ткань чехла матраса: Вискоза</li>
									<li>Слой Magnigel 2 cм</li>
									<li>Слой Memoform 3 cм</li>
									<li>Слой Eliosoft 18 cм</li>
									
								</ul>
					</span>
			<hr class="hnb_myhrled" />
			
			<h2 class="h2_h2">Элитный гелевый ортопедический матрас Magniflex Freshgel 9</h2>
			
			<img itemprop="image" src="/img/product/fresh-gel-new9.jpg">
			
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
			<div style="max-width: 750px;margin: 0 auto;">
			<img itemprop="image" src="/img/product/fresh-gel-new9-girl.jpg" style="float: left;">
			<br></br><br></br>
			<b>Коллекция Magnigel состоит из 3 моделей:</b>
<br></br>
<a href="#">Freshgel 9</a> - высотой 23 см,</br>
 <a href="/catalog/elitnye-FreshGel/FreshGel-10/">Freshgel 10</a> - высотой 25 см dual core,</br>
 <a href="/catalog/elitnye-FreshGel/FreshGel-12/">Freshgel 12</a> - высотой 30 см dual core. 
			</div>
			
			<img style="margin-top:50px;" src="/img/product/fresh-gel-new9open.jpg">
			
			<span class="hnb_eytextoutlast">
			
            <br>
            <br>
Freshgel 9 - съемный чехол, на молнии. Возможно варьировать жесткость матраса для обеих половинок матраса сразу - верхняя сторона с гелем и мемориформ более вязкая и обладает эффектом памяти. Усиленный анатомический эффект. Гелевый слой обеспечивает необходимое охлаждение и предотвращает спящего от излишней потливости. Охлаждающий эффект, 
аналогичный эффекту в гелевых подушках (<a href="/catalog/gelevye-podushki/FreshGel+Standart/">Freshgel Standard</a>, <a href="/catalog/gelevye-podushki/FreshGel+Wave/">Freshgel Wave</a>, <a href="/catalog/gelevye-podushki/MemoGel+Standart/">Memogel Standard</a>). Нижняя часть выполнена из упругого материала Eliosoft. Но матрас упругий, так как в его чехле нет Memoform и Super Soft Fiber.
            <br>
            <br>

При этом главное отличие матраса Freshgel 9 от других моделей этой коллекции в том, что внутренний слой идет без технологии dual core. То есть там монолитный полноценный размер, в отличие от Freshgel 10 и 12, которые являются более продвинутыми моделями и позволяют варьировать и регулировать жесткость для левой и правой половины матраса отдельно.
            <br>
            <br>

Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.            
            
            </span>
			
			<div>
				<img width="300" src="/img/product/fresh-gel-new9-obl.png">
				<img width="334" src="/img/product/fresh-gel-new9mat-min.jpg">
			</div>
			
			<h2 class="h2_h2">5 ПРИЧИН ПОЧЕМУ СЛЕДУЕТ ВЫБРАТЬ FRESHGEL 9</h2>
			<ul class="hnb_krtovul2">
                                    <li>Матрас с гелевым наполнителем. Не жарко спать при любых внешних условиях.</li>
									<li>Съемный чехол на молнии – удобство эксплуатации. Возможна химчистка.</li>
									<li>Высокий матрас 23 см с эксклюзивным дизайном, премиум-класс ортопедических товаров для сна.</li>
									<li>Матрас поставляется в рулоне – существенная экономия на транспортных расходах при заказе в регионы.</li>
									<li>Сделано в Италии, Тоскана, Флоренция. Качество и надежность. Продается в 96-ти странах мира!</li>
									

									
			</ul>
			
			<table class="hnb_table_elit2coln">
				<tbody><tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent5.png" alt=""></td>
					<td><strong>Viscose</strong><br><br>
Вискоза - мягкая, шелковистая ткань производится из очищенной и отборной древесной целлюлозы. Она чрезвычайно мягкая и шелковистая и быстро впитывает влагу, обеспечивая высокую воздухопроницаемость матрасов и подушек.</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent6.png" alt=""></td>
					<td><strong>Memoform</strong><br><br>
Memoform имеет наиболее выраженные анатомические свойства из всех используемых материалов и предназначен для адаптации под вес тела и каждый контур человеческой фигуры. (анатомически повторяет контуры тела).
Это свойство обеспечивает ощущение повышенного комфорта и легкости во время сна и благотворно влияет на позвоночник, позволяя ему расслабиться.  
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent7.png" alt="">
                    <img itemprop="image" src="/img/product/newmanuimg-magnificent8.png" alt="">
                    </td>
					<td><strong>Magnifoam</strong><br><br>
Magnifoam – латексная пена, которая имеет высокую плотность и микропористую структуру, которая сочетает в себе эластичность и воздухопроницаемость. Благодаря особой молекулярной структуре, Magnifoam доступен в трех версиях: <br>
•	более мягкая версия Eliosoft<br>
•	более твердая версия Elioform (плотность 35кг/м3)
Elioform и Eliosoft также имеют большую степень воздухопроводимости, чем  материал предыдущего поколения Eliocel.
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent9.png" alt=""></td>
					<td><strong>Super Soft Fiber</strong><br><br>
Начинка сделана из супер мягкого фибрового волокна. Материал невероятно мягкий и дышащий, обеспечивает нежную и комфортную поддержку всего вашего тела. Его особый состав обеспечивает ощущение комфорта и улучшает качество сна.</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/fresh-gel-new9-amt.png" alt=""></td>
					<td><strong>Magnigel</strong><br><br>
Magnigel пена - это инновационный материал, который состоит из эластичного геля с высоким уровнем воздухопроводимости. Это экологический, ударопрочный материал. Его высокая плотность позволяет материалу быть невероятно мягким и удобным. Magnigel пена придает матрасу свежесть и легкость, сравнимое с ощущением сна на облаке.</td>
				</tr>
				
				
				
				
			</tbody></table>
			
			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex FreshGel 9' ,
		'cycle-name' => 'Ортопедический матрас FreshGel 9',
		'sizes' => array(
			array('90x200',50900.00),
			array('160x200',90500.00),
			array('180x200',101800.00),

		),
		

		
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '30.06.2018',
			'sizes' => array('90x200','160x200','180x200'),
			'prices' => array(
				'90x200' => 40720,
				'160x200' => 72400,
				'180x200' => 81440,
			),
		), //скидка
		
		'yml_desc' => 'Комфортный терморегулирующий матрас  с гелевым слоем Magnigel Foam. Не нагревается от соприкосновения с телом: спать на нем прохладно даже жарким летом. Зимой не “отбирает” тепло! Эффект памяти. Необыкновенно проницаемый, дышащий. Уровень комфорта: достаточно жесткий. Высота: 23 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200'),
		
	),
	array(
		'address' => 'FreshGel-10',
		'parent_address' => 'elitnye-FreshGel',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 'new-mattresses','s-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses', 'height-22-25'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'FreshGel 10',
		'title' => '',
		'description' => '',
		'keywords' => '',
		'small_desc' => '
			<span class="hnb_popular">
			Сны в облаках
			</span>
			<p class="hnb_harek">Дышащий, эффекты памяти и охлаждения. <br />
			Высота: 25 см<br />
			Наполнители: Memoform, Magnigel Foam,  Eliosoft<br />
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/FreshGel 10.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/FreshGel 10.jpg',
		'img_alt' => '',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/freshgel_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 25 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая<!--Средней мягкости / средней жесткости--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
			<!--<img itemprop="image" src="/img/srvimg/cookie-image.png" />
			<h1>Акция! СКИДКА 20% В ИЮЛЕ</h1>
			
     		СКИДКА 20% распространяется только на размеры: 160х200, 180х200, 200х200<br /> <br />
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
						87 400 руб
					</td>
					<td>
						69 900 руб
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
						98 500 руб
					</td>
					<td>
						78 800 руб
					</td>

					<td>
						<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'180x200\', 1)" alt="Купить матрас MERINO MAGNIFLEX 180х200">Купить</a>
					</td>
				</tr>
				
				<tr>
					<td>
						200x200 
					</td>
					<td style="text-decoration: line-through;">
						109 300 руб 
					</td>
					<td>
						87 450 руб
					</td>

					<td>
						<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'200x200\', 1)" alt="Купить матрас MERINO MAGNIFLEX 200х200">Купить</a>
					</td>
				</tr>
			</table>
			<br /> <br /><br />
			
     		
            БЕСПЛАТНАЯ ДОСТАВКА ПО МОСКВЕ!<br />
            ПОДЪЕМ НА ЭТАЖ БЕСПЛАТНО!<br /><br />	
            
-->
			<br />
			<br />
			<hr />
			<span class="hnb_bigtytles">MagniGel -
			сердце матраса
			</span>

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
				<hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Настоящее воплощение комфорта и удовольствия во сне!
					</span>
					<br />
					<span class="hnb_eytext">
			Это Матрасы сочетающие в себе современные тенденции и элегантность.
						При первом взгляде бросается их легкий, воздушный образ. 
						 Стиль подчеркивается во всех деталях - начиная с эстетики совершенных форм 
						и заканчивая явной ориентацией на комфорт спящего человека.
					</span>
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

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose®, 3D ткань</span>
			<span class="hnb_eytext2">
			Съемный терморегулирующий чехол с запатентованной технологией Viscose.<br> 
			Элегантная объемная ткань
					</span>

			<h2 class="h2_h2">Ортопедический матрас элитной коллекции Магнифлекс с гелевым наполнителем Magnigel.</h2>
			<span class="hnb_eytext" style="text-align:left;">			
				Высота: 25 см.<br><br>
				Жесткость: средней мягкости/средней жесткости - моделируемый dual core.<br><br>
				Чехол: съемный на молнии, viscosa.<br><br>
				Срок службы: не менее 15 лет.
			</span>
			
			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
            <img itemprop="image" src="/img/product/Freshgel-10.png">
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magnigel10.jpg">
			<ul class="hnb_krtovul">
			
									<li>Ткань чехла матраса: Вискоза</li>
									<li>Слой Memoform 2 сm в чехле</li>
									<li>Super Soft Fiber</li>
									<li>Слой Magnigel 2 cm</li>
									<li>Слой Memoform 3 cm</li>
									<li>Слой Eliosoft 15 cm</li>
									
								</ul>
					</span>
			<hr class="hnb_myhrled" />
			
			<h2 class="h2_h2">Элитный гелевый ортопедический матрас Magniflex Freshgel 10</h2>
			
			<img itemprop="image" src="/img/product/fresh-gel-new10.jpg">
			
			<span class="hnb_eytextoutlast">
			<br><br>
            <strong><i>Гелевый матрас с эффектом сна на облаке. Отличный вариант для жаркой комнаты! </i></strong>
            <br>
            <br>
Вы когда-нибудь мечтали спать на облаке? Теперь это становится возможным благодаря матрасам Magniflex Freshgel! Сильно "дышащая"  специальная структура материала Magnigel делает сон на матрасе достаточно мягким и свежим, матрас превращается в маленький райский уголок!
<br><br>
Матрас Freshgel обеспечивает уникальную свежесть во время сна. Фактически инновационный дышащий материал обеспечивает отличную циркуляцию воздуха и создает комфортный микроклимат между телом и матрасом. Экологически чистый и достаточно прочный материал Memogel в совокупности с Memoform адаптируется под контуры тела, позволяя достигать невероятного расслабления во время сна. Присутствие в матрасе 3D слоя с тканью вискозы обеспечивает максимальную циркуляцию воздуха. Матрас спасает от обильного потовыделения во время сна.            <br>
            
            
            
            </span>
			<div style="max-width: 750px;margin: 0 auto;">
			<img itemprop="image" src="/img/product/fresh-gel-new9-girl.jpg" style="float: left;">
			<br></br><br></br>
			<b>Коллекция Magnigel состоит из 3 моделей:</b>
<br></br>
<a href="/catalog/elitnye-FreshGel/FreshGel-9/">Freshgel 9</a> - высотой 23 см,</br>
 <a href="#">Freshgel 10</a> - высотой 25 см dual core,</br>
 <a href="/catalog/elitnye-FreshGel/FreshGel-12/">Freshgel 12</a> - высотой 30 см dual core. 
			</div>
			
			<img style="margin-top:50px;" src="/img/product/fresh-gel-new10open.jpg">
			
			<span class="hnb_eytextoutlast">
			
            <br>
            <br>
Freshgel 10  - съемный чехол, на молнии. Возможно варьировать жесткость матраса – технология Dual Core. Верхняя сторона с гелем и мемориформ более вязкая и обладает эффектом памяти. Усиленный анатомический эффект. Гелевый слой обеспечивает необходимое охлаждение и предотвращает спящего от излишней потливости. Охлаждающий эффект, аналогичный эффекту в гелевых подушках 
(<a href="/catalog/gelevye-podushki/FreshGel+Standart/">Freshgel Standard</a>, <a href="/catalog/gelevye-podushki/FreshGel+Wave/">Freshgel Wave</a>, <a href="/catalog/gelevye-podushki/MemoGel+Standart/">Memogel Standard</a>). Нижняя часть выполнена из мягкого материала Eliosoft. Поэтому это достаточно мягкий матрас, например, по сравнению с моделью Comfort Plus 10.


            <br>
            <br>

При этом главное отличие матраса Freshgel 10 от Freshgel 9 в том, что внутренний слой идет c технологией dual core. Плюс матрас намного мягче, так как содержит слой	Memoform и Eliosoft. Плюс в чехол добавлен слой Super Soft Fiber – что делает матрас более комфортным, чем модель 23 см.
            <br>
            <br>
			
Видео о матрасе Freshgel 10 и технологии Dual Core: <a href="https://www.youtube.com/watch?v=-sQ1YztZ-JQ">https://www.youtube.com/watch?v=-sQ1YztZ-JQ</a>
            <br>
            <br>

Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.          
            
            </span>
			
			<div>
				<img width="300" src="/img/product/fresh-gel-new9-obl.png">
				<img width="334" src="/img/product/fresh-gel-new9mat-min.jpg">
			</div>
			
			<h2 class="h2_h2">5 ПРИЧИН ПОЧЕМУ СЛЕДУЕТ ВЫБРАТЬ FRESHGEL 10</h2>
			<ul class="hnb_krtovul2">
                                    <li>Матрас с гелевым наполнителем. Не жарко спать при любых внешних условиях. Регулируемая жесткость Dual Core.</li>
									<li>Съемный чехол на молнии – удобство эксплуатации. Возможна химчистка.</li>
									<li>Высокий матрас 25 см с эксклюзивным дизайном, премиум-класс ортопедических товаров для сна.</li>
									<li>Матрас поставляется в рулоне – существенная экономия на транспортных расходах при заказе в регионы.</li>
									<li>Сделано в Италии, Тоскана, Флоренция. Качество и надежность. Продается в 96-ти странах мира!</li>
									

									
			</ul>
			
			<table class="hnb_table_elit2coln">
				<tbody><tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent5.png" alt=""></td>
					<td><strong>Viscose</strong><br><br>
Вискоза - мягкая, шелковистая ткань производится из очищенной и отборной древесной целлюлозы. Она чрезвычайно мягкая и шелковистая и быстро впитывает влагу, обеспечивая высокую воздухопроницаемость матрасов и подушек.</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent6.png" alt=""></td>
					<td><strong>Memoform</strong><br><br>
Memoform имеет наиболее выраженные анатомические свойства из всех используемых материалов и предназначен для адаптации под вес тела и каждый контур человеческой фигуры. (анатомически повторяет контуры тела).
Это свойство обеспечивает ощущение повышенного комфорта и легкости во время сна и благотворно влияет на позвоночник, позволяя ему расслабиться.  
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent7.png" alt="">
                    <img itemprop="image" src="/img/product/newmanuimg-magnificent8.png" alt="">
                    </td>
					<td><strong>Magnifoam</strong><br><br>
Magnifoam – латексная пена, которая имеет высокую плотность и микропористую структуру, которая сочетает в себе эластичность и воздухопроницаемость. Благодаря особой молекулярной структуре, Magnifoam доступен в трех версиях: <br>
•	более мягкая версия Eliosoft<br>
•	более твердая версия Elioform (плотность 35кг/м3)
Elioform и Eliosoft также имеют большую степень воздухопроводимости, чем  материал предыдущего поколения Eliocel.
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent9.png" alt=""></td>
					<td><strong>Super Soft Fiber</strong><br><br>
Начинка сделана из супер мягкого фибрового волокна. Материал невероятно мягкий и дышащий, обеспечивает нежную и комфортную поддержку всего вашего тела. Его особый состав обеспечивает ощущение комфорта и улучшает качество сна.</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/fresh-gel-new9-amt.png" alt=""></td>
					<td><strong>Magnigel</strong><br><br>
Magnigel пена - это инновационный материал, который состоит из эластичного геля с высоким уровнем воздухопроводимости. Это экологический, ударопрочный материал. Его высокая плотность позволяет материалу быть невероятно мягким и удобным. Magnigel пена придает матрасу свежесть и легкость, сравнимое с ощущением сна на облаке.</td>
				</tr>
				
				
				
				
			</tbody></table>
			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex FreshGel 10' ,
		'cycle-name' => 'Ортопедический матрас FreshGel 10',
		'sizes' => array(
			array('80x190',54800.00),
			array('80x200',57800.00),
			array('90x190',61700.00),
			array('90x200',64800.00),
			array('120x200',86400.00),
			array('140x200',100900.00),
			array('160x200',115300.00),
			array('180x200',129500.00),
			array('200x200',144000.00),
		),
		

		
		
		
	),
	array(
		'address' => 'FreshGel-12',
		'parent_address' => 'elitnye-FreshGel',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','reguliruemie-mattresses','myahkie-mattresses', 'height-26'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'FreshGel 12',
		'title' => 'Итальянский элитный матрас FreshGel 12',
		'description' => 'Описание, фотографии, состав матраса FreshGel 12, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex freshgel, элитный матрас',
		'small_desc' => '
			<span class="hnb_popular">
			Сны в облаках. Экстракомфорт
			</span>
			<p class="hnb_harek">Дышащий, эффекты памяти и охлаждения. Magnigel - 5 см! <br />
			Высота: 30 см<br />
			Наполнитель: Memoform, Magnigel Foam,  Eliosoft<br />
			Сделано в Италии.
                 </p>
		',
		'small_img' => '/img/product/very_small/FreshGel 12.jpg',
		'small_img_alt' => 'элитный матрас Magniflex FreshGel 12',
		'img' => '/img/product/big/FreshGel 12.jpg',
		'img_alt' => 'элитный матрас Magniflex FreshGel 12',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/freshgel_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 30 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая<!--Средней мягкости / Мягкий--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
			<!---<img itemprop="image" src="/img/srvimg/cookie-image.png" />
			<h1>Акция! СКИДКА 20% В ИЮЛЕ</h1>
			
     		СКИДКА 20% распространяется только на размеры: 160х200, 180х200, 200х200<br /> <br />
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
						96 300 руб
					</td>
					<td>
						77 050 руб
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
						108 100 руб
					</td>
					<td>
						86 500 руб
					</td>

					<td>
						<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'180x200\', 1)" alt="Купить матрас MERINO MAGNIFLEX 180х200">Купить</a>
					</td>
				</tr>
				
				<tr>
					<td>
						200x200 
					</td>
					<td style="text-decoration: line-through;">
						120 200 руб 
					</td>
					<td>
						96 150 руб
					</td>

					<td>
						<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'200x200\', 1)" alt="Купить матрас MERINO MAGNIFLEX 200х200">Купить</a>
					</td>
				</tr>
			</table>
			<br /> <br /><br />
			
     		
            БЕСПЛАТНАЯ ДОСТАВКА ПО МОСКВЕ!<br />
            ПОДЪЕМ НА ЭТАЖ БЕСПЛАТНО!<br /><br />	
            
--->	
			<br />
			<br />
			<hr />
			<span class="hnb_bigtytles">MagniGel -
			сердце матраса
			</span>

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
				<hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Настоящее воплощение комфорта и удовольствия во сне!
					</span>
					<br />
					<span class="hnb_eytext">
			Это Матрасы сочетающие в себе современные тенденции и элегантность.
						При первом взгляде бросается их легкий, воздушный образ. 
						 Стиль подчеркивается во всех деталях - начиная с эстетики совершенных форм 
						и заканчивая явной ориентацией на комфорт спящего человека.
					</span>
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

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose®, 3D ткань</span>
			<span class="hnb_eytext2">
			Съемный терморегулирующий чехол с запатентованной технологией Viscose.<br> 
			Элегантная объемная ткань
					</span>

			<h2 class="h2_h2">Ортопедический матрас элитной коллекции Магнифлекс с гелевым наполнителем Magnigel.</h2>
			<span class="hnb_eytext" style="text-align:left;">			
				Высота: 30 см.<br><br>
				Жесткость: средней мягкости/средней жесткости - моделируемый dual core.<br><br>
				Чехол: съемный на молнии, viscosa.<br><br>
				Срок службы: не менее 15 лет.
			</span>
			
			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
            <img itemprop="image" src="/img/product/Freshgel-12.png">
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magnigel12.jpg">
			<ul class="hnb_krtovul">
			
									<li>Ткань чехла матраса: Вискоза</li>
									<li>Слой Memoform 2 сm в чехле</li>
									<li>Super Soft Fiber</li>
									<li>Слой Magnigel 5 cm</li>
									<li>Слой Memoform 3 cm</li>
									<li>Слой Eliosoft 17 cm</li>
									
								</ul>
					</span>
			<hr class="hnb_myhrled" />
			
			<h2 class="h2_h2">Элитный гелевый ортопедический матрас Magniflex Freshgel 12</h2>
			
			<img itemprop="image" src="/img/product/fresh-gel-new12.jpg">
			
			<span class="hnb_eytextoutlast">
			<br><br>
            <strong><i>Гелевый матрас с эффектом сна на облаке. Отличный вариант для жаркой комнаты!</i></strong>
            <br>
            <br>
Матрас коллекции Magnigel - Una nuvola in camera da letto - это облако в Вашей спальне.
<br>
Вы когда-нибудь мечтали спать на облаке? Теперь это становится возможным благодаря матрасам Magniflex Freshgel! Сильно "дышащая"  специальная структура материала Magnigel делает сон на матрасе достаточно мягким и свежим, матрас превращается в маленький райский уголок!
Матрас Freshgel обеспечивает уникальную свежесть во время сна. Фактически инновационный дышащий материал обеспечивает отличную циркуляцию воздуха и создает комфортный микроклимат между телом и матрасом. Экологически чистый и достаточно прочный материал Memogel в совокупности с Memoform адаптируется под контуры тела, позволяя достигать невероятного расслабления во время сна. Присутствие в матрасе 3D слоя с тканью вискозы обеспечивает максимальную циркуляцию воздуха. Матрас спасает от обильного потовыделения во время сна.<br>
            
            
            
            </span>
			<div style="max-width: 750px;margin: 0 auto;">
			<img itemprop="image" src="/img/product/fresh-gel-new9-girl.jpg" style="float: left;">
			<br></br><br></br>
			<b>Коллекция Magnigel состоит из 3 моделей:</b>
<br></br>
<a href="/catalog/elitnye-FreshGel/FreshGel-9/">Freshgel 9</a> - высотой 23 см,</br>
 <a href="/catalog/elitnye-FreshGel/FreshGel-10/">Freshgel 10</a> - высотой 25 см dual core,</br>
 <a href="#">Freshgel 12</a> - высотой 30 см dual core. 
			</div>
			
			<img style="margin-top:50px;" src="/img/product/fresh-gel-new12open.jpg">
			
			<span class="hnb_eytextoutlast">
			
            <br>
            <br>
Freshgel 12  - съемный чехол, на молнии. Возможно варьировать жесткость матраса – технология Dual Core. Верхняя сторона с гелем и мемориформ более вязкая и обладает эффектом памяти. Усиленный анатомический эффект. Гелевый слой обеспечивает необходимое охлаждение и предотвращает спящего от излишней потливости. Охлаждающий эффект, аналогичный эффекту в гелевых подушках 
(<a href="/catalog/gelevye-podushki/FreshGel+Standart/">Freshgel Standard</a>, <a href="/catalog/gelevye-podushki/FreshGel+Wave/">Freshgel Wave</a>, <a href="/catalog/gelevye-podushki/MemoGel+Standart/">Memogel Standard</a>). 
Нижняя часть выполнена из мягкого материала Eliosoft. Поэтому это достаточно мягкий матрас, например, по сравнению с моделью Freshgel 9.


            <br>
            <br>

При этом главное отличие матраса Freshgel 12 от Freshgel 10 в том, что в матрасе больше гелевого наполнителя – 5 см. Плюс матрас намного выше за счет 17 см Eliosoft, в чехле также слои Super Soft Fiber и Memoform, которых нет в матрасе Freshgel 9.<br>
Видео о матрасе Freshgel 10 и технологии Dual Core: <a href="https://www.youtube.com/watch?v=-sQ1YztZ-JQ">https://www.youtube.com/watch?v=-sQ1YztZ-JQ</a>
            <br>
            <br>

Какой вес выдерживает? 160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.          
            
            </span>
			
			<div>
				<img width="300" src="/img/product/fresh-gel-new9-obl.png">
				<img width="334" src="/img/product/fresh-gel-new9mat-min.jpg">
			</div>
			
			<h2 class="h2_h2">5 ПРИЧИН ПОЧЕМУ СЛЕДУЕТ ВЫБРАТЬ FRESHGEL 12</h2>
			<ul class="hnb_krtovul2">
                                    <li>Матрас с гелевым наполнителем. Не жарко спать при любых внешних условиях. Регулируемая жесткость Dual Core.</li>
									<li>Съемный чехол на молнии – удобство эксплуатации. Возможна химчистка.</li>
									<li>Высокий матрас 30 см с эксклюзивным дизайном, премиум-класс ортопедических товаров для сна.</li>
									<li>Матрас поставляется в рулоне – существенная экономия на транспортных расходах при заказе в регионы.</li>
									<li>Сделано в Италии, Тоскана, Флоренция. Качество и надежность. Продается в 96-ти странах мира!
</li>
									

									
			</ul>
			
			<table class="hnb_table_elit2coln">
				<tbody><tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent5.png" alt=""></td>
					<td><strong>Viscose</strong><br><br>
Вискоза - мягкая, шелковистая ткань производится из очищенной и отборной древесной целлюлозы. Она чрезвычайно мягкая и шелковистая и быстро впитывает влагу, обеспечивая высокую воздухопроницаемость матрасов и подушек.</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent6.png" alt=""></td>
					<td><strong>Memoform</strong><br><br>
Memoform имеет наиболее выраженные анатомические свойства из всех используемых материалов и предназначен для адаптации под вес тела и каждый контур человеческой фигуры. (анатомически повторяет контуры тела).
Это свойство обеспечивает ощущение повышенного комфорта и легкости во время сна и благотворно влияет на позвоночник, позволяя ему расслабиться.  
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent7.png" alt="">
                    <img itemprop="image" src="/img/product/newmanuimg-magnificent8.png" alt="">
                    </td>
					<td><strong>Magnifoam</strong><br><br>
Magnifoam – латексная пена, которая имеет высокую плотность и микропористую структуру, которая сочетает в себе эластичность и воздухопроницаемость. Благодаря особой молекулярной структуре, Magnifoam доступен в трех версиях: <br>
•	более мягкая версия Eliosoft<br>
•	более твердая версия Elioform (плотность 35кг/м3)
Elioform и Eliosoft также имеют большую степень воздухопроводимости, чем  материал предыдущего поколения Eliocel.
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent9.png" alt=""></td>
					<td><strong>Super Soft Fiber</strong><br><br>
Начинка сделана из супер мягкого фибрового волокна. Материал невероятно мягкий и дышащий, обеспечивает нежную и комфортную поддержку всего вашего тела. Его особый состав обеспечивает ощущение комфорта и улучшает качество сна.</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/fresh-gel-new9-amt.png" alt=""></td>
					<td><strong>Magnigel</strong><br><br>
Magnigel пена - это инновационный материал, который состоит из эластичного геля с высоким уровнем воздухопроводимости. Это экологический, ударопрочный материал. Его высокая плотность позволяет материалу быть невероятно мягким и удобным. Magnigel пена придает матрасу свежесть и легкость, сравнимое с ощущением сна на облаке.</td>
				</tr>
				
				
				
				
			</tbody></table>

			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex FreshGel 12' ,
		'cycle-name' => 'Ортопедический матрас FreshGel 12',
		'sizes' => array(
			array('80x190',62600.00),
			array('80x200',65700.00),
			array('90x190',70300.00),
			array('90x200',74000.00),
			array('120x200',98700.00),
			array('140x200',114900.00),
			array('160x200',131400.00),
			array('180x200',147900.00),
			array('200x200',164100.00),
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.15, ), //скидка

		
		
		
		
		
		
	),
	array(
		'address' => 'Rest-9',
		'parent_address' => 'elitnye-rest',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 'new-mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-22-25'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Rest 9',
		'title' => 'Rest 9 - итальянский матрас от интернет-магазина Magniflex',
		'description' => 'У нас Вы найдете матрасы серии Rest 9. 10 лет международной гарантии при покупке.',
		'keywords' => 'rest, 9',
		'small_desc' => '
			<span class="hnb_popular">
			Классический элитный
			</span>
			<p class="hnb_harek">Комфортный, эффект памяти. Достаточно жесткий <br />
			Высота: 23 см<br />
			Наполнитель: Memoform, Elioformt<br />
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Rest 9.jpg',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 23 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая<!--достаточно жесткий--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет.</li></ul><br>
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
			<span class="hnb_bigtytles">Преимущества матрасов коллекции Rest</span>


			<div id="hnb_3nelement">
						<div class="hnb_3nelementli" style="margin-top: -4px;margin-left: 0px; opacity: 1;">
							<img itemprop="image" src="/img/statrest.png" alt="Классический матрас">
							<div style="clear:both;"></div>
							<span>Классика</span><br>
							
							Классика предполагает чувство меры: в форме, объеме и цвете образа, придающее гармонию и красоту.
						</div>
						<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
							<img itemprop="image" src="/img/medvrest.png" alt="Мягкий матрас">
							<div style="clear:both;"></div>
							<span>Комфортный</span><br>
							Дополнительный комфорт придает материал Memoform ( 2 см). 

						</div>
						<div class="hnb_3nelementli" style="position: relative; left: 0px; opacity: 1;">
							<img style="padding-top:7px;" src="/img/lux.png" alt="Отличные ортопедические свойства - Magniflex">
							<div style="clear:both;"></div>
							<span>Эффект памяти</span><br>
							Непревзойденные 
							ортопедические свойства: 
							идеальная поддержка
							Вашего позвоночника! 
						</div>
					</div>
			<div style="clear:both;"></div>
				<hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
						Классический итальянский элитный матрас 
					</span>
					<br />
					<span class="hnb_eytext">
						Настоящая классика всегда в моде. Очень удачная коллекция, сочетающая отличные ортопедические свойства и комфорт. <br />
			Для создания используются исключительно высококачественные ткани и материалы:     <br />
			 Memoform (комфорт, мягкость + эффект памяти),    <br />
			 Elioform (превосходные ортопедические свойства), <br />
			 Eliosoft (в основе - натуральный латекс).
			<br /><br />
			Матрасы двухсторонние - можно использовать разные стороны, в зависимости от предпочтений спящих на нем людей.
					</span>
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

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose®, не съемный с рисунком флорентийской лилии</span>
					<span class="hnb_eytext2">
			Несъемный терморегулирующий чехол с запатентованной технологией Viscose.<br /> 
			Элегантная объемная ткань
					</span>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<h2 class="h2_h2">Итальянское классико. Стильный дизайн элитной серии
премиум класса. Строгость и элегантность.</h2>
            <span class="hnb_eytext" style="text-align:left;">			
				Высота: 23 см.<br><br>
				Жесткость: упругий.<br><br>
				Чехол: не съемный с рисунком флорентийской лилии, Viscosa.<br><br>
				Срок службы: не менее 15 лет.
			</span>
            <br>
			<img itemprop="image" src="/img/product/newmanuimg-rest9.png">
			<br>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magni9.jpg" alt="Матрас Rest 9 состав">
			<ul class="hnb_krtovul">
										<li>Ткань чехла матраса: вискоза</li>
									<li>Слой Memoform 2 cm в чехле матраса</li>
									<li>Слой Super Soft fiber в чехле матраса</li>
			<li>СElioform 18 cm</li>

									
								</ul>
					</span>

			<br>
			<img itemprop="image" src="/img/product/newmanuimg-rest9-sos.png">
			<br>
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Элитный матрас Magniflex Rest 9 - ортопедический
беспружинный. Две стороны для эксплуатации.</span>
            
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
                    
            <img itemprop="image" src="/img/product/newmanuimg-rest9-1.png" style="float: left;">
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
            
            <h2 class="h2_h2">3 ПРИЧИНЫ ПОЧЕМУ СЛЕДУЕТ ВЫБРАТЬ REST 9</h2>
            <ul class="hnb_krtovul2">
                                    <li>Высокий матрас 23 см с эксклюзивным дизайном, элита товаров для сна.</li>
									<li>Матрас поставляется в рулоне – существенная экономия на
                                    ранспортных расходах при заказе в регионы.</li>
									<li>Сделано в Италии, Тоскана, Флоренция. Качество и надежность.
                                    Продается в 96-ти странах мира!</li>
									

									
								</ul>
            <table class="hnb_table_elit2coln">
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent5.png" alt=""></td>
					<td><strong>Viscose</strong><br><br>
Вискоза - мягкая, шелковистая ткань производится из очищенной и отборной древесной целлюлозы. Она чрезвычайно мягкая и шелковистая и быстро впитывает влагу, обеспечивая высокую воздухопроницаемость матрасов и подушек.</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent6.png" alt=""></td>
					<td><strong>Memoform</strong><br><br>
Memoform имеет наиболее выраженные анатомические свойства из всех используемых материалов и предназначен для адаптации под вес тела и каждый контур человеческой фигуры. (анатомически повторяет контуры тела).
Это свойство обеспечивает ощущение повышенного комфорта и легкости во время сна и благотворно влияет на позвоночник, позволяя ему расслабиться.  
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent7.png" alt="">
                    <img itemprop="image" src="/img/product/newmanuimg-magnificent8.png" alt="">
                    </td>
					<td><strong>Magnifoam</strong><br><br>
Magnifoam – латексная пена, которая имеет высокую плотность и микропористую структуру, которая сочетает в себе эластичность и воздухопроницаемость. Благодаря особой молекулярной структуре, Magnifoam доступен в трех версиях: </br>
•	более мягкая версия Eliosoft</br>
•	более твердая версия Elioform (плотность 35кг/м3)
Elioform и Eliosoft также имеют большую степень воздухопроводимости, чем  материал предыдущего поколения Eliocel.
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent9.png" alt=""></td>
					<td><strong>Super Soft Fiber</strong><br><br>
Начинка сделана из супер мягкого фибрового волокна. Материал невероятно мягкий и дышащий, обеспечивает нежную и комфортную поддержку всего вашего тела. Его особый состав обеспечивает ощущение комфорта и улучшает качество сна.</td>
				</tr>
				
				
				
				
			</table>

			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Rest 9',
		'cycle-name' => 'Ортопедический матрас Rest 9',
		'sizes' => array(
			array('80x190',32800.00),
			array('80x200',34600.00),
			array('90x190',36900.00),
			array('90x200',38900.00),
			array('120x200',51800.00),
			array('140x200',60400.00),
			array('160x200',69000),	//p.s. очень старая цена - 58800 (по старому курсу рубля)
			array('180x200',77600.00),
			array('200x200',86200.00),
		),
		
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '30.06.2018', 'price_koef' => 0.1, ), //скидка
		//'discount_koef' => array(	//'date_start' => '1.9.2015', 'date_end' => '1.9.2025', - без даты начала и конца акции - она навсегда
			//'sizes' => array('160x200', '180x200', '200x200'),
			//'prices' => array(
				//'160x200' => 69800.00,
				//'180x200' => 78500.00,
               // '200x200' => 87300.00,
			//),
		//), //ііііі
		'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: достаточно жесткий. Высота: 23 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200','180x200'),
		
	),
	array(
		'address' => 'Rest-10',
		'parent_address' => 'elitnye-rest',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter', 'height-22-25'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Rest 10',
		'title' => 'Rest 10 - купить ортопедический матрас в интернет-магазине Magniflex',
		'description' => 'У нас Вы найдете матрасы Rest 10. Срок службы на матрасы из данной коллекции составляет не менее 15 лет.',
		'keywords' => 'rest, 10',
		'small_desc' => '
			<span class="hnb_popular">
			Идеальная поддержка
			</span>
			<p class="hnb_harek">Комфортный, эффект памяти, средняя жесткость <br />
			Высота: 25 см<br />
			Наполнитель: Memoform, Elioform, Eliosoft<br />
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Rest 10.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Rest 10',
		'img' => '/img/product/big/Rest 10.jpg',
		'img_alt' => 'элитный матрас Magniflex Rest 10',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/rest_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 25 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая<!--средней жесткий, комфортный--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет.</li></ul><br>
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
			<span class="hnb_bigtytles">Преимущества матрасов коллекции Rest</span>
					</span>


			<div id="hnb_3nelement">
						<div class="hnb_3nelementli" style="margin-top: -4px;margin-left: 0px; opacity: 1;">
							<img itemprop="image" src="/img/statrest.png" alt="Классический матрас">
							<div style="clear:both;"></div>
							<span>Классика</span><br>
							
							Классика предполагает чувство меры: в форме, объеме и цвете образа, придающее гармонию и красоту.
						</div>
						<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
							<img itemprop="image" src="/img/medvrest.png" alt="Мягкий матрас">
							<div style="clear:both;"></div>
							<span>Мягкий, Комфортный</span><br>
							Дополнительный комфорт придает материал Memoform (2 см).

						</div>
						<div class="hnb_3nelementli" style="position: relative; left: 0px; opacity: 1;">
							<img style="padding-top:7px;" src="/img/lux.png" alt="Отличные ортопедические свойства - Magniflex">
							<div style="clear:both;"></div>
							<span>Эффект памяти</span><br>
							Непревзойденные 
							ортопедические свойства: 
							идеальная поддержка
							Вашего позвоночника! 
						</div>
					</div>
			<div style="clear:both;"></div>
				<hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
						Классический итальянский элитный матрас 
					</span>
					<br />
					<span class="hnb_eytext">
						Настоящая классика всегда в моде. Очень удачная коллекция, сочетающая отличные ортопедические свойства и комфорт. <br />
			Для создания используются исключительно высококачественные ткани и материалы:     <br />
			 Memoform (комфорт, мягкость + эффект памяти),    <br />
			 Elioform (превосходные ортопедические свойства), <br />
			 Eliosoft (в основе - натуральный латекс).
			<br /><br />
			Матрасы двухсторонние - можно использовать разные стороны, в зависимости от предпочтений спящих на нем людей.
					</span>
					<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
											<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
												<img itemprop="image" src="/img/rest_magniflex_1.jpg" alt="Ортопедический матрас Magniflex Rest" />
														<span>
														Обеспечивают великолепную поддержку позвоночника. Высокие ортопедические свойства обеспечивает слой Elioform (18 см).
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

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose®, 3D ткань</span>
					<span class="hnb_eytext2">
			Несъемный терморегулирующий чехол с запатентованной технологией Viscose.<br /> 
			Элегантная объемная ткань
					</span>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<h2 class="h2_h2">Итальянское классико. Стильный дизайн элитной серии
премиум класса. Строгость и элегантность.</h2>
            <span class="hnb_eytext" style="text-align:left;">			
				Высота: 25 см.<br><br>
				Жесткость: средней жесткости.<br><br>
				Чехол: не съемный с рисунком флорентийской лилии, Viscosa.<br><br>
				Срок службы: не менее 15 лет.
			</span>
            <br>
			<img itemprop="image" src="/img/product/newmanuimg-rest10.png">
			<br>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magni9.jpg" alt="Матрас Rest 10 состав">
			<ul class="hnb_krtovul">
										<li>Ткань чехла матраса: вискоза</li>
									<li>Слой Memoform 2 cm в чехле матраса</li>
									<li>Слой Super Soft fiber в чехле матраса</li>
                                    <li>Elioform 3 cm</li>
			<li>Eliosoft 18 cm</li>

									
								</ul>
					</span>

			<br>
			<img itemprop="image" src="/img/product/newmanuimg-rest9-sos.png">
			<br>
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Элитный матрас Magniflex Rest 10 - ортопедический
беспружинный. Две стороны для эксплуатации.</span>
            
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
                    
            <img itemprop="image" src="/img/product/newmanuimg-rest9-1.png" style="float: left;">
            <b>Коллекция Classico состоит из 3 разных моделей: <span style="text-decoration: underline;">Rest 9 -
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
            
            <h2 class="h2_h2">3 ПРИЧИНЫ ПОЧЕМУ СЛЕДУЕТ ВЫБРАТЬ REST 10</h2>
            <ul class="hnb_krtovul2">
                                    <li>Высокий матрас 25 см с эксклюзивным дизайном, элита товаров для сна.</li>
									<li>Матрас поставляется в рулоне – существенная экономия на
                                    ранспортных расходах при заказе в регионы.</li>
									<li>Сделано в Италии, Тоскана, Флоренция. Качество и надежность.
                                    Продается в 96-ти странах мира!</li>
									

									
								</ul>
            <table class="hnb_table_elit2coln">
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent5.png" alt=""></td>
					<td><strong>Viscose</strong><br><br>
Вискоза - мягкая, шелковистая ткань производится из очищенной и отборной древесной целлюлозы. Она чрезвычайно мягкая и шелковистая и быстро впитывает влагу, обеспечивая высокую воздухопроницаемость матрасов и подушек.</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent6.png" alt=""></td>
					<td><strong>Memoform</strong><br><br>
Memoform имеет наиболее выраженные анатомические свойства из всех используемых материалов и предназначен для адаптации под вес тела и каждый контур человеческой фигуры. (анатомически повторяет контуры тела).
Это свойство обеспечивает ощущение повышенного комфорта и легкости во время сна и благотворно влияет на позвоночник, позволяя ему расслабиться.  
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent7.png" alt="">
                    <img itemprop="image" src="/img/product/newmanuimg-magnificent8.png" alt="">
                    </td>
					<td><strong>Magnifoam</strong><br><br>
Magnifoam – латексная пена, которая имеет высокую плотность и микропористую структуру, которая сочетает в себе эластичность и воздухопроницаемость. Благодаря особой молекулярной структуре, Magnifoam доступен в трех версиях: </br>
•	более мягкая версия Eliosoft</br>
•	более твердая версия Elioform (плотность 35кг/м3)
Elioform и Eliosoft также имеют большую степень воздухопроводимости, чем  материал предыдущего поколения Eliocel.
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent9.png" alt=""></td>
					<td><strong>Super Soft Fiber</strong><br><br>
Начинка сделана из супер мягкого фибрового волокна. Материал невероятно мягкий и дышащий, обеспечивает нежную и комфортную поддержку всего вашего тела. Его особый состав обеспечивает ощущение комфорта и улучшает качество сна.</td>
				</tr>
				
				
				
				
			</table>
			
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Преимущества модели REST 10</span>
					<span class="hnb_eytext2">
			Комфортный ортопедический матрас класса „Премиум”,  обеспечивающий отличную поддержку позвоночника, <br />
			Анатомический эффект. <br />
			Эффект памяти достигается благодаря инновационному материалу  Memoform (2 см)<br />
					</span>


			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Rest 10',
		'cycle-name' => 'Ортопедический матрас Rest 10',
		'sizes' => array(
			array('80x190',36300.00),
			array('80x200',38200.00),
			array('90x190',40700.00),
			array('90x200',42800.00),
			array('120x200',57200.00),
			array('140x200',66600.00),
			array('160x200',76100.00),
			array('180x200',85700.00),
			array('200x200',95100.00),
		),
		
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '30.06.2018', 'price_koef' => 0.1, ), //скидка
		//'discount_koef' => array(	//'date_start' => '1.9.2015', 'date_end' => '1.9.2025', - без даты начала и конца акции - она навсегда
			//'sizes' => array('160x200', '180x200', '200x200'),
			//'prices' => array(
				//'160x200' => 76000.00,
				//'180x200' => 85600.00,
                //'200x200' => 95100.00,
			//),
		//), //скидка
		
		
		'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: средней жесткости. Высота: 25 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200'),
		
	),
	array(
		'address' => 'Rest-12',
		'parent_address' => 'elitnye-rest',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 's-effektom-pamjati-mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','myahkie-mattresses', 'height-26'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Rest 12',
		'title' => 'Rest 12 - ортопедический матрас высокого качества в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить матрасы серии Rest 12. Данная модель отличается повышенным комфортом и прекрасными ортопедическими свойствами.',
		'keywords' => 'rest, 12',
		'small_desc' => '
			<span class="hnb_popular">
			Непревзойденная поддержка
			</span>
			<p class="hnb_harek">Комфорт, эффект памяти. Средней мягкости. <br />
			Высота: 30 см<br />
			Наполнитель: Memoform, Elioform,  Eliosoft<br />
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Rest 12.jpg',
		'small_img_alt' => 'элитный матрас Magniflex Rest 12',
		'img' => '/img/product/big/Rest 12.jpg',
		'img_alt' => 'элитный матрас Magniflex Rest 12',
		'attr' => '
		<style>
		#popup_skidka{display:none;}
		#popup_skidka.hnb_displayskidka{display:block;}
		#breadcrumbs {
			background-image: url(/img/rest_250.jpg);
			height: 250px;
		}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 30 (!!!) см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая<!--средней мягкости, очень комфортный!--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет. 10 лет международной гарантии.</li></ul><br>
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
			<span class="hnb_bigtytles">Преимущества матрасов коллекции Rest</span>
					</span>


			<div id="hnb_3nelement">
						<div class="hnb_3nelementli" style="margin-top: -4px;margin-left: 0px; opacity: 1;">
							<img itemprop="image" src="/img/statrest.png" alt="Классический матрас">
							<div style="clear:both;"></div>
							<span>Классика</span><br>
							
							Классика предполагает чувство меры: в форме, объеме и цвете образа, придающее гармонию и красоту.
						</div>
						<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
							<img itemprop="image" src="/img/medvrest.png" alt="Мягкий матрас">
							<div style="clear:both;"></div>
							<span>Комфортный</span><br>
							Дополнительный комфорт придает материал Memoform (минимум 2 см).
						</div>
						<div class="hnb_3nelementli" style="position: relative; left: 0px; opacity: 1;">
							<img style="padding-top:7px;" src="/img/lux.png" alt="Отличные ортопедические свойства - Magniflex">
							<div style="clear:both;"></div>
							<span>Эффект памяти</span><br>
							Непревзойденные 
							ортопедические свойства: 
							идеальная поддержка
							Вашего позвоночника! 
						</div>
					</div>
			<div style="clear:both;"></div>
				<hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
						Классический итальянский элитный матрас 
					</span>
					<br />
					<span class="hnb_eytext">
						Настоящая классика всегда в моде. Очень удачная коллекция, сочетающая отличные ортопедические свойства и комфорт. <br />
			Для создания используются исключительно высококачественные ткани и материалы:     <br />
			 Memoform (комфорт, мягкость + эффект памяти),    <br />
			 Elioform (превосходные ортопедические свойства), <br />
			 Eliosoft (в основе - натуральный латекс).
			<br /><br />
			Матрасы двухсторонние - можно использовать разные стороны, в зависимости от предпочтений спящих на нем людей. Сторона c Memoform мягче. 
					</span>
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

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose®, 3D ткань</span>
					<span class="hnb_eytext2">
			Несъемный терморегулирующий чехол с запатентованной технологией Viscose.<br /> 
			Элегантная объемная ткань
					</span>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<h2 class="h2_h2">Итальянское классико. Стильный дизайн элитной серии
премиум класса. Строгость и элегантность.</h2>
            <span class="hnb_eytext" style="text-align:left;">			
				Высота: 30 см.<br><br>
				Уровень жесткости: средней мягкости.<br><br>
				Чехол: не съемный с рисунком флорентийской лилии, Viscosa.<br><br>
				Срок службы: не менее 15 лет.
			</span>
            <br>
			<img itemprop="image" src="/img/product/newmanuimg-rest10.png">
			<br>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magni9.jpg" alt="Матрас Rest 12 состав">
			<ul class="hnb_krtovul">
										<li>Ткань чехла матраса: вискоза</li>
									<li>Слой Memoform 2 cm в чехле матраса</li>
									<li>Слой Super Soft fiber в чехле матраса</li>
                                    <li>Слой Memoform 3 cm</li>
                                    <li>Elioform 3 cm</li>
			<li>Eliosoft 18 cm</li>

									
								</ul>
					</span>

			<br>
			<img itemprop="image" src="/img/product/newmanuimg-rest9-sos.png">
			<br>
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Элитный матрас Magniflex Rest 12 - ортопедический
беспружинный. Две стороны для эксплуатации.</span>
            
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
                    
            <img itemprop="image" src="/img/product/newmanuimg-rest9-1.png" style="float: left;">
            <b>Коллекция Classico состоит из 3 разных моделей: <span style="text-decoration: underline;">Rest 9 -
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
            
            <h2 class="h2_h2">3 ПРИЧИНЫ ПОЧЕМУ СЛЕДУЕТ ВЫБРАТЬ REST 12</h2>
            <ul class="hnb_krtovul2">
                                    <li>Высокий матрас 30 см с эксклюзивным дизайном, элита товаров для сна.</li>
									<li>Матрас поставляется в рулоне – существенная экономия на
                                    ранспортных расходах при заказе в регионы.</li>
									<li>Сделано в Италии, Тоскана, Флоренция. Качество и надежность.
                                    Продается в 96-ти странах мира!</li>
									

									
								</ul>
            <table class="hnb_table_elit2coln">
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent5.png" alt=""></td>
					<td><strong>Viscose</strong><br><br>
Вискоза - мягкая, шелковистая ткань производится из очищенной и отборной древесной целлюлозы. Она чрезвычайно мягкая и шелковистая и быстро впитывает влагу, обеспечивая высокую воздухопроницаемость матрасов и подушек.</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent6.png" alt=""></td>
					<td><strong>Memoform</strong><br><br>
Memoform имеет наиболее выраженные анатомические свойства из всех используемых материалов и предназначен для адаптации под вес тела и каждый контур человеческой фигуры. (анатомически повторяет контуры тела).
Это свойство обеспечивает ощущение повышенного комфорта и легкости во время сна и благотворно влияет на позвоночник, позволяя ему расслабиться.  
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent7.png" alt="">
                    <img itemprop="image" src="/img/product/newmanuimg-magnificent8.png" alt="">
                    </td>
					<td><strong>Magnifoam</strong><br><br>
Magnifoam – латексная пена, которая имеет высокую плотность и микропористую структуру, которая сочетает в себе эластичность и воздухопроницаемость. Благодаря особой молекулярной структуре, Magnifoam доступен в трех версиях: </br>
•	более мягкая версия Eliosoft</br>
•	более твердая версия Elioform (плотность 35кг/м3)
Elioform и Eliosoft также имеют большую степень воздухопроводимости, чем  материал предыдущего поколения Eliocel.
</td>
				</tr>
				
				<tr>
					<td><img itemprop="image" src="/img/product/newmanuimg-magnificent9.png" alt=""></td>
					<td><strong>Super Soft Fiber</strong><br><br>
Начинка сделана из супер мягкого фибрового волокна. Материал невероятно мягкий и дышащий, обеспечивает нежную и комфортную поддержку всего вашего тела. Его особый состав обеспечивает ощущение комфорта и улучшает качество сна.</td>
				</tr>
				
				
				
				
			</table>
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Преимущества модели REST 12</span>
					<span class="hnb_eytext2">
			Комфортный ортопедический матрас класса „Премиум”,  обеспечивающий отличную поддержку позвоночника, <br />
			Великолепный анатомический эффект. <br />
			Эффект памяти достигается благодаря инновационному материалу  Memoform (5 см!!!)<br />
					</span>


			</div>
			</div>
		',
		'cycle-title' => 'Ортопедические матрасы Magniflex Rest 12',
		'cycle-name' => 'Ортопедический матрас Rest 12',
		'sizes' => array(
			array('80x190',42800.00),
			array('80x200',45000.00),
			array('90x190',48100.00),
			array('90x200',50600.00),
			array('120x200',67400.00),
			array('140x200',78700.00),
			array('160x200',89800.00),
			array('180x200',101000.00),
			array('200x200',112300.00),
		),
		
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '30.06.2018', 'price_koef' => 0.1, ), //скидка
		
		//'discount_koef' => array('date_start' => '21.4.2016', 'date_end' => '10.5.2016',
			//'sizes' => array('160x200'),
			//'prices' => array(
				//'160x200' => 78455.00,
			//),
		//), //скидка
		
		'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: мягкий. Идеальная поддержка Вашего позвоночника!. Высота: 30 см. Срок службы: не менее 15 лет.',

		
	),
	/* детям */
	
	
	array(
		'address' => 'MERINO-childrens',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_address2' => 'mattresses',
		'other_categories' => array('orthopedic_mattresses', 'vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', 'height-20'),
		'parent_name' => 'Детские матрасы',
		'name' => 'Merino для детей',
		'title' => 'Merino для детей - детские ортопедические матрасы в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить матрас Merino для детей. Удобный детский матрас Вы найдете в нашем каталоге.',
		'keywords' => 'ребенок, merino',
		'small_desc' => '
			<span class="hnb_popular">
			Лучший детский матрас
			</span>
			<p class="hnb_harek">
			Ортопедический, практичный, износостойкий с двухсторонним покрытием "зима-лето".<br>
			Высота: 16 см<br>
			Наполнитель: Eliocel 40<br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Merino-childrens.jpg',
		'small_img_alt' => 'детский матрас - Merino Magniflex',
		'img' => '/img/product/big/Merino-childrens.jpg',
		'img_alt' => 'детский матрас - Merino Magniflex',
		'attr' => '
			<ul>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедический матрас. ПРОИЗВОДСТВО ИТАЛИЯ
			</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 16 см
			</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--умеренно жесткий-->
			</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы
			</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/">доставка</a>, <a href="/pokupatelyam/oplata/">оплата</a>
			</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li>
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
			array('60x120',8000.00),
			array('65x125',9200.00),
			array('70x140',10900.00),
			array('70x160',12500.00),
		),
		
		//'discount_koef' => array('date_start' => '20.03.2017', 'date_end' => '12.04.2017', 'price_koef' => 0.15, ), //скидка
		
		'yml_desc' => '
			Неоднократный лауреат десяток международных выставок в том числе в Милане (Италия), Лас-Вегасе (США), Бирмингеме (Великобритания), Москве (Россия). Практичный, не деформируется, позволяет принимать идеальное положение для сна, которое советуют специалисты-ортопеды. Внешний слой: летняя поверхность создается из натуральной 100% хлопковой ткани: подарит комфортный прохладный сон в знойную ночь; зимняя поверхность - тонкорунная шерсть мериноса: согреет в период морозов. 
			Срок службы: не менее 12 лет. Высота: 16 см. 
		',
		'yml_torgmail' => true,
		
		
	),
	
	/*
	array(
		'address' => 'Merino+Bamboo',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Детские матрасы',
		'name' => 'Merino Bamboo для детей',
		'title' => 'Детский ортопедический матрас - Merino Bamboo в Официальном интернет-магазине Магнифлекс (Италия). Лучший матрас для детей! ',
		'description' => 'Описание, фотографии, состав детского матраса Merino Bamboo Magniflex',
		'keywords' => 'детский матрас, детский ортопедический матрас, матрас для детей, детский матрас, матрас для мальчика, подростковый матрас',
		'small_desc' => '
			<span class="hnb_popular">
			с волокнами бамбука
			</span>
			<p class="hnb_harek">
			Ортопедический, "зима-лето": натуральный хлопок, шерсть тонкорунного мериноса.<br>
			Высота: 17 см<br>
			Наполнитель: Eliocel 60<br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Merino-Bamboo-children.jpg',
		'small_img_alt' => 'детский матрас - Merino Bambo Magniflex',
		'img' => '/img/product/big/Merino-Bamboo-children.jpg',
		'img_alt' => 'детский матрас - Merino Bambo Magniflex',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедический матрас. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 17 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: умеренно жесткий</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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
			Детский ортопедический матрас "Merino Bamboo для детей" - отличный матрас для детей и подростков. Практичный, износостойкий, не деформирующийся, позволяет принимать идеальное положение для сна, которое советуют специалисты-ортопеды. Отличается от модели <a href="/catalog/orthopedic_mattresses/MERINOS/">Merino для детей</a> составом: используется Eliochel 60 (более поздняя разработка), увеличена высота, а также в Merino Bamboo используются ткани с волокнами натурального бамбука. 

			<br /><br />
			<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merino-children-11.png" alt="Детский матрас Merino Bamboo: отличный матрас для детей" style="width: 640 px;">

			<h4>Волокна бамбука</h4> 
			<p>
			Наличие в тканях волокон натурального бамбука  придает матрасу потрясающие антибактериальные свойства, усиливает антиаллергенный эффект, останавливает рост бактерий, позволяет  напитать и восстановить клетки кожи, создать неповторимую микрофлору для крепкого и здорового сна. Благодаря особому переплетению волокон бамбука матрас обладает "дышащими свойствами": пропускает воздух сквозь себя, легко выводит влагу и запахи, обеспечивая высокий уровень гигиены, способен сохранить прохладу в жаркое время года. Мягкость поверхности матраса Merino Bamboo в контакте с телом придает свежее и нежное прикосновение, а рифленая поверхность обеспечивает дополнительный массаж, усиливая кровообращение.
			</p>  
			<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/bamboo_1.jpg" alt="Детский матрас Merino Bamboo: бамбук" style="width: 640 px;">            
			  
			 <h4>о Составе</h4>
			<p>
			Матрас Magniflex Merino Bamboo для детей  - это качественный ортопедический матрас с двухсторонним покрытием "зима-лето". Летняя поверхность создается из натуральной 100% хлопковой ткани: подарит комфортный прохладный сон в знойную ночь; зимняя поверхность -  тонкорунная шерсть мериноса: согреет в период морозов.
			<br /><br />
			<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merinos-wool.jpg" alt="Детский матрас Merinos: мериносовая шерсть" style="width: 640 px;">

			<br /><br />
			В основе ортопедического матраса Merino Bamboo используется экологичный материал на основе натурального латекса и природных компонентов - ELIOCEL 60 (Элиочел). Этот материал благодаря своей уникальной структуре позволяет усилить эффект выравнивания позвонков, равномерно распределить нагрузку на все суставы тела, придает матрасу высшую степень эластичной ортопедичности. 
			<br /><br />
			</p>

			<h4>Часто производители матрасов советуют:</h4>

			<p><em>
			"Матрас – это не спортивная площадка. Попросите детей играть в другом месте: забавные прыжки могут существенно навредить матрасу".</em>
			<br /><br />

			<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merino-children-05.jpg" alt="Детский матрас Merinos: прыжки" style="width: 640 px;">

			У нас другие правила.<br /><br />

			В основе нашего матраса -  специально разработанный лабораторией Magniflex материал ELIOCEL 60, ему не страшны прыжки. Поэтому прыгайте, играйте, смейтесь, веселитесь, ведь детство чуточку короче, чем срок службы этого матраса.
			</p>

			<h4>Как и все матрасы Magniflex:</h4>
			<p>
			Все ортопедические матрасы Merino обработаны специальным средством, поэтому они абсолютно антиаллергенны. В составе матраса нет металлических деталей, поэтому он не оказывает на организм магнитного или электростатического воздействия.
			<br><br>
			Предпродажная вакуумная упаковка матраса Merino Bamboo для детей (матрас спрессован в рулон) позволяет покупателю самостоятельно довезти его до места назначения даже на общественном транспорте.
			</p>


				</div>
			</div>
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlefsostav">

					 <img itemprop="image" src="/img/bamboo.jpg">

				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX MERINO BAMBOO</b><br><br>

			ТОЛЬКО натуральные экологически чистые ткани и материалы<br><br><br>

			1 - Зимняя сторона: шерсть тонкорунного мериноса<br><br>
			2 - Антистатическая прослойка<br><br>
			3 - Гиппоаллергенный терморегулирующий слой<br><br>
			4 - Слой Eliocel 60 (1 см)<br><br>
			5 - Изоляционная ткань<br><br>
			6 - Основной слой: ELIOCEL 60 <br><br>
			7 - Летняя сторона: 100% натуральный хлопок
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

			Ортопедические матрасы Magniflex Merino Bamboo рекомендованы Центральным Институтом Травматологии и Ортопедии Российской Федерации им. Н.Н. Приорова в профилактических целях так и для лечения болезней опорно-двигательного аппарата, коррекции при повреждении позвоночника. Заключение выдал директор ЦИТО, член кор. РАМН, профессор Ю.Г. Шапошников. 
			   <br><br>

			Ортопедический матрас Magniflex Merino (Merinos) для детей  рекомендован Центральным Институтом Травматологии и Ортопедии РФ для профилактики и лечения болезней опорно-двигательного аппарата. 
			Постоянное применение ортопедического матраса Merino cпособствует гармоничному развитию позвоночника, восстанавливает его симметрию,  приносит здоровье и силу, полноценный, комфортный сон.
			 <br><br>
			Матрасы модели Merino отвечают всем ортопедическим, анатомическим и функциональным требованиям по коррекции и профилактике повреждений позвоночника,  таких как: сколиоз,  лордоз, кифоз, боли в суставах.
			 <br><br>



			<img alt="Детский ортопедический матрас Magniflex Merino" src="/img/magniflex-merino-chidren-15.jpg" alt="Детский матрас Merinos: Каждый имеет право на сон!" style="width: 640 px;"><br>
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
			<p>
			Раздел формируется.
			</p>
		',
		'similar' => '',
		'tougher' => '',
		'softer' => '',
		'comfort' => '',
		'rec_buy' => '',
		'sizes' => array(
			array('60x120',15000.00),
			array('60x120 Sfoderabile (съемный чехол)',18400.00),
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
		
		
		'yml_desc' => '
			Отличный матрас для детей и подростков. Практичный, износостойкий, не деформирующийся, позволяет принимать идеальное положение для сна, которое советуют специалисты-ортопеды. Внешний слой: летняя поверхность создается из натуральной 100% хлопковой ткани: подарит комфортный прохладный сон в знойную ночь; зимняя поверхность - тонкорунная шерсть мериноса: согреет в период морозов. 
			Срок службы: не менее 12 лет. Высота: 16 см. 
		',
		'yml_torgmail' => true,
		
		
	),
	*/
	
	
	array(
		'address' => 'B-Bamboo',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Детские матрасы',
		'other_categories' => array('vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', 'height-20', 'action'),
		'name' => 'B-Bamboo для детей',
		'title' => 'Детский ортопедический матрас - B-Bamboo в Официальном интернет-магазине Магнифлекс (Италия). Лучший матрас для детей! ',
		'description' => 'Описание, фотографии, состав детского матраса B-Bamboo Magniflex',
		'keywords' => 'детский матрас, детский ортопедический матрас, матрас для детей, детский матрас, матрас для мальчика, подростковый матрас',
		'small_desc' => '
			<span class="hnb_popular">
			с волокнами бамбука
			</span>
			<p class="hnb_harek">
			Ортопедический, 100% хлопок и "бамбуковый лен".<br>
			Высота: 10 см<br>
			Наполнитель: Elioform <br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Merino-Bamboo-children.jpg',
		'small_img_alt' => 'детский матрас - Merino Bambo Magniflex',
		'img' => '/img/product/big/Merino-Bamboo-children.jpg',
		'img_alt' => 'детский матрас - Merino Bambo Magniflex',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедический матрас. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 10 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--средней жесткости--></li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Вес: до 50 кг.</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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
			array('60x120',11700.00),
		),
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '30.06.2018', 'price_koef' => 0.2, ), //скидка
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
		'other_categories' => array('orthopedic_mattresses', 'vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', 'height-20', 'action'),
		'parent_name' => 'Детские матрасы',
		'name' => 'B-Bamboo Sfoderabile (съемный чехол) для детей',
		'title' => 'Детский ортопедический матрас - B-Bamboo Sfoderabile (съемный чехол) в Официальном интернет-магазине Магнифлекс (Италия). Лучший матрас для детей! ',
		'description' => 'Описание, фотографии, состав детского матраса B-Bamboo Sfoderabile (съемный чехол) Magniflex',
		'keywords' => 'детский матрас, детский ортопедический матрас, матрас для детей, детский матрас, матрас для мальчика, подростковый матрас',
		'small_desc' => '
			<span class="hnb_popular">
			с волокнами бамбука
			</span>
			<p class="hnb_harek">
			Ортопедический, 100% хлопок и "бамбуковый лен".<br>
			Высота: 10 см<br>
			Наполнитель: Elioform<br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Merino-Bamboo-children.jpg',
		'small_img_alt' => 'детский матрас - Merino Bambo Magniflex',
		'img' => '/img/product/big/Merino-Bamboo-children.jpg',
		'img_alt' => 'детский матрас - Merino Bambo Magniflex',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедический матрас. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 10 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--средней жесткости--></li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">вес: до 60кг.</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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
			array('60x120',14400.00),
		),
		
		'discount_koef' => array('date_start' => '18.05.2018', 'date_end' => '30.06.2018', 'price_koef' => 0.2, ), //скидка
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
		'other_categories' => array('s-effektom-pamjati-mattresses','orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses-2', '80x160', 'height-20'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Pensiero 6',
		'title' => 'Матрасы Pensiero 6 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Pensiero 6. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Pensiero 6, magniflex, merino',
		'small_desc' => '
			<p class="hnb_harek">
			Высота: 15 см<br>
			Жесткость: Жесткий / Cредней жесткости<br>
			Наполнитель: Elioform<br>
			Чехол: Несъемный, Viscose<br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/pensiero-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'img' => '/img/product/big/pensiero-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Merino Bamboo с волокнами бамбука. Магнифлекс Merinos Бамбук',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 15 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Регулируемая</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
				#prod_sizes{width: 136px;}
				.product_top .price{right: 219px;}
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
			array('80x160',19900.00),
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
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
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', '80x160', 'height-20'),
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Stile 6',
		'title' => 'Матрасы Stile 6 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 6. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Stile 6, magniflex, merino',
		'small_desc' => '
			

			<p class="hnb_harek">
			Жесткость: Жесткий<br>
			Высота: 15 см<br>
			Чехол: Несъемный, Viscose <br>
			Наполнитель: Elioform <br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/stile-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img' => '/img/product/big/stile-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'attr' => '
		<style>
				#prod_sizes{width:111px;}
				#breadcrumbs{
					background-image: url(/img/style.jpg);
					height: 250px;
				}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 15см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--Жесткий--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
	<div>
		
		<p>
		Высота матраса 15 см.<br>
		Жесткий. Усиленная поддержка спины.
		</p>
		<img itemprop="image" src="/img/layer/layer-slite6-roz.png">
		<div>
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
			array('80x160',16200.00)
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
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
		'address' => 'Stile-7-childrens',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses','vacuum-mattresses', 'mattresses-filter','zhestkie-mattresses', '80x160', 'height-20'),
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Stile 7',
		'title' => 'Матрасы Stile 7 - интернет-магазин Magniflex',
		'description' => 'Предлагаем матрас Matriflex Stile 7. Ортопедические матрасы повышенной эластичности в нашем каталоге.',
		'keywords' => 'матрас, Stile 7, magniflex, merino',
		'small_desc' => '
			

			<p class="hnb_harek">
			Жесткость: Жесткий <br>
			Высота: 18 см<br>
			Чехол: Несъемный, Viscose <br>
			Наполнитель: Elioform <br>
			Изготовлен в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/stile-6.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'img' => '/img/product/big/stile-6.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Stile',
		'attr' => '
		<style>
				#prod_sizes{width:111px;}
				#breadcrumbs{
					background-image: url(/img/style.jpg);
					height: 250px;
				}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 18см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: <div class="rigidity rigidity_4" title="жесткий"></div><!--Жесткий--></li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
	<div>
		
		<p>
		Высота матраса 18 см.<br>
		Жесткий. Усиленная поддержка спины.
		</p>
		<img itemprop="image" src="/img/layer/layer-slite6-roz.png">
		<div>
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
			array('80x160',17900.00)
		),
		
		'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
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
	
	

	
	/* подушки */
	array(
		'address' => 'RELAXSAN',
		'parent_address' => 'vacuum_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array('forma-klasicheska','Collectio_relaxsan','pillows-filter'),
		'parent_name' => 'Вакуумные подушки',
		'name' => 'Подушка Relaxsan',
		'title' => 'Подушка Relaxsan, большой выбор ортопедических подушек в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить подушку Relaxsan. Ортопедическая подушка обладает релаксирующим действием и способствует принятию правильного положения головы и шейных позвонков.',
		'keywords' => 'подушка, relaxsan',
		'small_desc' => '
			<span class="hnb_popular">
			классическая
			</span>
			<p class="hnb_harek">
			Вакуумная упаковка, классическая форма,  превосходные антиаллергенные свойства.<br>
			Размеры: 40х70 см<br>
			Чехол: 100% натуральный хлопок<br>
			Произведена в ИТАЛИИ.
							 </p>
		',
		'small_img' => '/img/product/very_small/Relaxsan.jpg',
		'small_img_alt' => 'подушка Relaxsan',
		'img' => '/img/product/big/Relaxsan.jpg',
		'img_alt' => 'подушка Relaxsan',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размеры: 40 х 70 х 10 см. Вес: 750г. </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: комфортный</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 12 лет</li></ul><br>
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
				<div class="hnb_contlef">
					<img width="280" src="/img/relaxan-podushka.jpg" height="196" title="Подушка Magniflex Relaxsan">
					<br>
				Поставляется в вакуумной упаковке <br>
					
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					
			Ортопедическая подушка Magniflex Relaxsan классической формы обладает релаксирующим действием, способствует принятию идеального "ортопедического" положения головы и шейных позвонков. Благодаря своей структуре подушка "дышит" и хорошо приспосабливается к форме головы.<br><br>

			Внутренняя часть подушки представляет собой ортопедическое основание, окруженное полифибровыми волокнами. После пропитки натуральным латексом основание и волокна приобретают упругие и прочные свойства. Подушка обладает замечательным свойством - она не сбивается, как пуховая. Идеально подходит тем людям, кто привык спать на самых "обычных" подушках и кому сложно привыкнуть к новым "латексным" и/или с эффектом "памяти".
			<br><br>

			Подушка не вызывает аллергии и не теряет своих уникальных свойств даже после стирки в стиральной машине. Наволочка несъемная - стирается вместе с подушкой.
			<br><br>
			
			Ортопедическая подушка Relaxsan рекомендована детям, лицам, страдающим остеохондрозом шейного отдела позвоночника, аллергическими реакциями, и всем, кому важен здоровый сон.
            <br><br>
             Relaxsan - торговая марка, принадлежащая компании Magniflex.

				</div>
			</div>
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/cotton.jpg" height="196" title="Хлопок">
					<br>
				100% хлопок
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					
			Натуральный хлопок, полиэстер. <br><br>
		

				</div>
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
		'address' => 'MEMORY',
		'parent_address' => 'Orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array('forma-wolna', 's-effektom-pamjati', 'material-memoform', 'chehol-coolmax','Collectio_coolmax','pillows-filter'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Memory',
		'title' => 'Подушка Memory - купить ортопедическую подушку в интернет-магазине Magniflex',
		'description' => 'У нас Вы найдете подушки Memory. Подушка волнообразной формы с эффектом памяти в нашем каталоге.',
		'keywords' => 'подушка, ортопедический, купить, memory',
		'small_desc' => '
			<span class="hnb_popular">
			с эффектом памяти
			</span>
			<p class="hnb_harek">
			Ортопедическая, эргономичной формы, с великолепными анатомическими свойствами. <br>
			Размеры: 60 x 43 x 10/11 см<br>
			Чехол: съемный, Coolmax<br>
			Создана в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Memory.jpg',
		'small_img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Memory ',
		'img' => '/img/product/big/Memory.jpg',
		'img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Memory ',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размеры: 60 x 43 x 10/11 см. Вес: 1500 г.</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;"><b>Уровень комфорта:</b> Высочайший. Мягкая, комфортная, анатомической формы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka/">оплата</a></li></ul><br>
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
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/son-na-boky-i-spine.jpg" height="196" title="Для сна на спине и на боку">
					
				Для тех, кто любит спать на спине или на боку

			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					


			<iframe width="687" height="515" src="//www.youtube.com/embed/oKvPhmkbBmc?rel=0" frameborder="0" allowfullscreen style="margin: 0 0 0 -10px;"></iframe>

			<br /> <br /><br />
			Идеальная эргономичная форма подушки и специальный подшейный валик позволяют поддерживать голову и шейные позвонки в удобном ортопедическом правильном положении всю ночь, способствуя полному расслаблению мышц.
			<br /><br />
			 Подушка не слишком мягкая, но и не жесткая, с эффектом памяти, предоставляет наибольшее удобство по сравнению с обычными подушками. 
			<br /><br />
			Все ткани и наполнители подвергаются специальным санитарным обработкам без использования химических веществ.
			<br /><br />
			Наволочка подушки MEMORY Magniflex изготовлена из материала Coolmax, съемная, на молнии, легко стирается. 
			<br /><br />
			Имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, в том числе РОСТЕСТ. Продается в 98 странах мира.

			<br><br>

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
				Сертифицировано в 96-ти странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 96-ти странах по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
		'price' => 9200.00,
	),
	
	array(
		'address' => 'COMFORT-PILLOW',
		'parent_address' => 'Orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-effektom-pamjati', 'forma-klasicheska', 'chehol-coolmax','Collectio_coolmax','pillows-filter'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Memoform Comfort',
		'title' => 'Подушка Memoform Comfort - купить в интернет-магазине Magniflex',
		'description' => 'Предлагаем купить подушку Memoform Comfort. Ортопедическая подушка с эффектом памяти Magniflex Comfort осуществляет идеальную поддержку головы и шейного отдела.',
		'keywords' => 'подушка, comfort, pillow',
		'small_desc' => '
			<span class="hnb_popular">
			с эффектом памяти
			</span>
			<p class="hnb_harek">
			Удобная ортопедическая подушка с эргономичным дизайном, отличные анатомические свойства.<br>
			Размеры: 52 x 32 x 5/10 см<br>
			Чехол: съемный, Coolmax<br>
			Изготовлена в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Comfort Pillow.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/Comfort Pillow.jpg',
		'img_alt' => '',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размеры: 52 x 32 x 5/10 см. Вес: 850 г.</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Мягкий</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
    <div class="fb-like" style="  float: left;" data-href="https://www.magniflex.ru/catalog/Orthopedic_pillows/COMFORT-PILLOW/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель Comfort Pillow</div></li>
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
					

			Ортопедическая подушка с эффектом памяти Magniflex Comfort осуществляет идеальную поддержку головы и шейного отдела позвоночника, равномерно распределяет давление, способствует расслаблению мышц, улучшает кровоснабжение, обеспечивает максимально возможный комфорт во время сна.
			<br /><br />
			Обладает антиаллергенными свойствами, гарантирует 100% защиту от пылевых клещей, болезнетворных микроорганизмов и плесени (рекомендовано для аллергиков и астматиков).
			<br /><br />
			Наволочка подушки изготовлена из 100% натурального хлопка (с технологией Coolmax), съемная, на молнии - возможна бережная стирка.
			<br /><br />
			Подушка Magniflex Comfort имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.

			<br><br>

				</div>
			</div>
		',
		'composition' => '',
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

			Подробную информацию о сертификатах продукции можно узнать в разделе "Сертификаты".<br><br>

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
		'discount_koef' => array('date_start' => '20.03.2017', 'date_end' => '22.02.2018', 'price_koef' => 0.3, ), //скидка
		'price' => 8800.00,
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 5900,
		//), //скидка
		
	),
	
	array(
		'address' => 'FreshGel+Wave',
		'parent_address' => 'gelevye-podushki',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-oholojdaushim-effektom', 'forma-wolna', 'chehol-viscose','Collectio_freshgel','pillows-filter'),
		'parent_name' => 'Гелевые подушки',
		'name' => 'Подушка FreshGel Wave',
		'title' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Wave в официальном интернет-магазине Magniflex ',
		'description' => 'Описание, фотографии, состав гелевой подушки с эффектом памяти Magniflex FreshGel Wave',
		'keywords' => 'гелевая подушка, подушка с эффектом памяти, итальянская подушка',
		'small_desc' => '
			
			<span class="hnb_popular">
			гелевая
			</span>
			<p class="hnb_harek">
			Ортопедическая, эргономичный дизайн, охлаждающий эффект <br>
			Размеры: 60x43x12/10/8 см<br>
			Чехол: съемный, Viscosa<br>
			Производство ИТАЛИЯ.
                 </p>
		',
		'small_img' => '/img/product/very_small/FreshGel Wave.jpg',
		'small_img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Wave',
		'img' => '/img/product/big/FreshGel Wave.jpg',
		'img_preview' => array('/img/product/big/magnigel-deluxe-wave-new-2.jpg', '/img/product/big/magnigel-deluxe-wave-new-3.jpg', '/img/product/big/magnigel-deluxe-wave-new-4.jpg'),
		'img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Wave',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размер: 60x43x12/10/8см</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: умеренно мягкий</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a></li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
				<div class="hnb_contlef">
					<img width="280" src="/img/son-na-boky-i-spine.jpg" height="196" title="Для сна на спине и на боку">
					
				Для тех, кто любит спать на спине или на боку

			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					
			Волнообразная форма подушки обеспечивает улучшенную поддержка головы.
			<br /><br /> 
			Охлаждающий эффект.
			<br /><br />
			Увеличенный срок эксплуатации
			<br /><br />

			Ортопедическая подушка FreshGel Wave осуществляет идеальную поддержку головы и шейного отдела позвоночника, равномерно распределяет давление, способствует расслаблению мышц, улучшает кровоснабжение, обеспечивает максимально возможный комфорт во время сна.



			<br /><br />
			<img  src="/img/FRESHGEL-WAVE-4.jpg" alt="Ортопедическая гелевая подушка Magniflex Wave" style="width: 640 px;">
			<br /><br />

			В основе подушки - уникальный наполнитель Magnigel Foam. Это новейший инновационный материал, в основе которого используется сверхмягкий, очень упругий, воздухопроницаемый гель пористой структуры. Magnigel Foam - материал созданный для комфортного сна: он способен дать прохладу летом и помочь согреть зимой (поддерживает температуру на поверхности соприкосновения с телом постоянной), матрасы и подушки из этого материала, остаются всегда сухими, впитывая как губка влагу, в том числе и капельки пота. Уникальные "дышащие способности" - обеспечивают постоянное чувство свежести. Лабораторные испытания показали, что воздухопроницаемость Magnigel Foam выше в 86 раз, чем воздухопроницаемость  мягких пенополиуретанов, зачастую используемых при производстве матрасов некоторыми производителями, и более чем в 100 раз выше чем воздухопроницаемость натуральных наполнителей (латекса).
			<br /><br />
			Обладает антиаллергенными свойствами, гарантирует 100% защиту от пылевых клещей, болезнетворных микроорганизмов и плесени (рекомендовано для аллергиков и астматиков).
			<br /><br />

			Чехол подушки изготовлен из ткани Viscosa (разработка 2014 года!), съемный - легко стирается.
			<br /><br />
			Подушки FreshGel Wave  имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, в том числе РОСТЕСТ.

			<br><br>

				</div>
			</div>
		',
		'composition' => '',
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
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 4950,
		//), //скидка
	),
	array(
		'address' => 'FreshGel+Standart',
		'parent_address' => 'gelevye-podushki',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-oholojdaushim-effektom', 'forma-klasicheska', 'chehol-viscose','Collectio_freshgel','pillows-filter'),
		'parent_name' => 'Гелевые подушки',
		'name' => 'Подушка FreshGel Standard',
		'title' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Standard в официальном интернет-магазине Magniflex ',
		'description' => 'Описание, фотографии, состав гелевой подушки с эффектом памяти Magniflex FreshGel Standard',
		'keywords' => 'гелевая подушка, подушка с эффектом памяти, итальянская подушка',
		'small_desc' => '
			<span class="hnb_popular">
			гелевая
			</span>
			<p class="hnb_harek">
			Ортопедическая, классическая форма, охлаждающий эффект <br>
			Размеры: 72x42x13 см<br>
			Чехол: съемный, Viscosa<br>
			Производство ИТАЛИЯ.
                 </p>
		',
		'small_img' => '/img/product/very_small/FreshGel Standard.jpg',
		'img_preview' => array('/img/product/big/magnigel-deluxe-standard-new-2.jpg', '/img/product/big/magnigel-deluxe-standard-new-3.jpg', '/img/product/big/magnigel-deluxe-standard-new-4.jpg'),
		'small_img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Standard',
		'img' => '/img/product/big/FreshGel Standard.jpg',
		
		'img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Standard',
		'attr' => '
		<style>
		#breadcrumbs {
			background-image: url(/img/fresh-gel.jpg);
			height: 250px;
		}
		</style>
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размер: 72x42x13 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: умеренно мягкий</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
				<div class="hnb_contlef">
					<img width="280" src="/img/son-universal.jpg" height="196" title="Для сна на спине, на животе и на боку">
					
				Универсальная. Удобно спать на спине, животе или на боку!

			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			Ортопедическая подушка FreshGel Standard осуществляет идеальную поддержку головы и шейного отдела позвоночника, равномерно распределяет давление, способствует расслаблению мышц, улучшает кровоснабжение, обеспечивает максимально возможный комфорт во время сна.



			<br /><br />
			<img  src="/img/FRESHGEL-STANDARD-5.jpg" alt="Ортопедическая подушка FRESHGEL-STANDARD" style="width: 640 px;">
			<br /><br />

			В основе подушки - уникальный наполнитель Magnigel Foam. Это новейший инновационный материал, в основе которого используется сверхмягкий, очень упругий, воздухопроницаемый гель пористой структуры. Magnigel Foam - материал созданный для комфортного сна: он способен дать прохладу летом и помочь согреть зимой (поддерживает температуру на поверхности соприкосновения с телом постоянной), матрасы и подушки из этого материала, остаются всегда сухими, впитывая как губка влагу, в том числе и капельки пота. Уникальные "дышащие способности" - обеспечивают постоянное чувство свежести. Лабораторные испытания показали, что воздухопроницаемость Magnigel Foam выше в 86 раз, чем воздухопроницаемость  мягких пенополиуретанов, зачастую используемых при производстве матрасов некоторыми производителями, и более чем в 100 раз выше чем воздухопроницаемость натуральных наполнителей (латекса).
			<br /><br />
			Обладает антиаллергенными свойствами, гарантирует 100% защиту от пылевых клещей, болезнетворных микроорганизмов и плесени (рекомендовано для аллергиков и астматиков).
			<br /><br />
			Обеспечивают прекрасную ортопедическую поддержку головы и шейного отдела позвоночника.
			<br /><br />
			Охлаждающий эффект.
			<br /><br />
			Увеличенный срок эксплуатации
			<br /><br />
			Помогает наилучшим образом расслабить мышцы шеи и плечевые суставы. 
			<br /><br />
			Чехол подушки изготовлен из ткани Viscosa (разработка 2014 года!), съемный - легко стирается.
			<br /><br />
			Подушка FreshGel Standard имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, в том числе РОСТЕСТ.

			<br /><br />
			<img  src="/img/FRESHGEL-STANDARD-4.jpg" alt="Ортопедическая подушка FRESHGEL-STANDARD" style="width: 640 px;">
			<br /><br />

				</div>
			</div>
		',
		'composition' => '',
		'recommend' => '',
		'certificat' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/sertifikat.jpg" height="196" title="Подушки Magniflex магнифлекс сертифицированы РОСтест, множеством международных организаций">
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
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 5500,
		//), //скидка
	),
	array(
		'address' => 'MemoGel+Standart',
		'parent_address' => 'gelevye-podushki',
		'other_categories' => array( 's-effektom-pamjati', 's-oholojdaushim-effektom', 'forma-klasicheska', 'chehol-viscose','Collectio_freshgel','pillows-filter'),
		'parent_address2' => 'pillows',
		'parent_name' => 'Гелевые подушки',
		'name' => 'Подушка MemoGel Standard',
		'title' => 'MemoGel Standard - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка MemoGel Standard - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'memogel, standard',
		'small_desc' => '
			<span class="hnb_popular">
			эффект "памяти" + гель
			</span>
			<p class="hnb_harek">
			Ортопедическая, двухсторонняя, эффект памяти, охлаждающий эффект <br>
			Размеры: 72x42x14 см<br>
			Чехол: съемный, Viscosa<br>
			Изготовлена в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/MemoGel Standard.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/MemoGel Standard.jpg',
		'img_preview' => array('/img/product/big/memoform-standard-new-2.jpg', '/img/product/big/memoform-standard-new-3.jpg', '/img/product/big/memoform-standard-new-4.jpg'),
		'img_alt' => '',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размер: 72x42x14 cm</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: умеренно мягкий / мягкий (двусторонняя)</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
				<div class="hnb_contlef">
					<img width="280" src="/img/son-universal.jpg" height="196" title="Для сна на спине, на животе и на боку">
					
				Универсальная. Удобно спать на спине, животе или на боку!

			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					
			Ортопедическая подушка MemoGel Standard - универсальная разработка лаборатории Magniflex. <b>Двухсторонняя подушка</b>, сочетающая в себе превосходства технологии наполнителей Magnigel Foam и эффект памяти от MemoForm.  
			<br /><br />
			<b>Преимущества:</b>
			<br /><br />
			 - эффект памяти;
			<br /><br /> 
			- охлаждающий эффект;
			<br /><br />
			- увеличенный срок эксплуатации.
			<br /><br />

			Ортопедическая подушка MemoGel Standard осуществляет идеальную поддержку головы и шейного отдела позвоночника, равномерно распределяет давление, способствует расслаблению мышц, улучшает кровоснабжение, обеспечивает максимально возможный комфорт во время сна.
			<br /><br />
			В основе подушки - уникальный наполнитель Magnigel Foam. Это новейший инновационный материал, в основе которого используется сверхмягкий, очень упругий, воздухопроницаемый гель пористой структуры. Magnigel Foam - материал созданный для комфортного сна: он способен дать прохладу летом и помочь согреть зимой (поддерживает температуру на поверхности соприкосновения с телом постоянной), матрасы и подушки из этого материала, остаются всегда сухими, впитывая как губка влагу, в том числе и капельки пота. Уникальные "дышащие способности" - обеспечивают постоянное чувство свежести. Лабораторные испытания показали, что воздухопроницаемость Magnigel Foam выше в 86 раз, чем воздухопроницаемость  мягких пенополиуретанов, зачастую используемых при производстве матрасов некоторыми производителями, и более чем в 100 раз выше чем воздухопроницаемость натуральных наполнителей (латекса).
			<br /><br />
			Обладает антиаллергенными свойствами, гарантирует 100% защиту от пылевых клещей, болезнетворных микроорганизмов и плесени (рекомендовано для аллергиков и астматиков).
			<br /><br />

			Чехол подушки MemoGel Standard изготовлен из ткани Viscosa (разработка 2014 года!), съемный, на молнии - легко стирается.
			<br /><br />
			Подушки MemoGel Standart  имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, в том числе РОСТЕСТ.

			<br><br>

				</div>
			</div>
		',
		'composition' => '',
		'recommend' => '',
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
		'price' => 12800.00,
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),
	
	array(
		'address' => 'virtuoso-mallow-standard',
		'parent_address' => 'Orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-effektom-pamjati', 's-oholojdaushim-effektom', 'forma-klasicheska', 'material-mallowfoam', 'chehol-viscose', 'chehol-satin','Collectio_virtuoso','pillows-filter'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Virtuoso Mallow Standard',
		'title' => 'Virtuoso Mallow Standard - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Virtuoso Mallow Standard - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'memogel, standard',
		'small_desc' => '
			<span class="hnb_popular">
			эффект "памяти" + гель
			</span>
			<p class="hnb_harek">
			Уровень комфорта: умеренно мягкий / мягкий (двусторонняя)
			Размеры: 72x42x12 см<br>
			Чехол: съемный, Satin/Viscose<br>
			Изготовлена в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/mallow-standard.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/GUANC VIRTUOSO mallow-5.jpg',
		'img_preview' => array('/img/product/big/GUANC VIRTUOSO mallow-7.jpg', '/img/product/big/GUANC VIRTUOSO mallow-9.jpg'),
		'img_alt' => '',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размер: 72x42x14 cm</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: умеренно мягкий / мягкий (двусторонняя)</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель  Virtuoso Mallow Standard, эффект памяти, охлаждающий эффект, гелевая основа</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Mallow foam</div></li>

			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест</div></li>
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
					
			Данная модель подушки относится к коллекции VIP и Luxury матрасов - Virtus. Она выполнена в таком же стиле и дизайне чехла. Если Вы хотите единую композицию в спальне с матрасом Виртус - подушки virtuoso standard - это именно то, что нужно!

Модель предназначена для сна на животе, на боку или на спине. Virtuoso Standard имеет привычную стандартную форму, к которой нет необходимости привыкать, в отличие, например, от подушки с формой wave. Кстати, такую форму в Италии называют soap - от слова "мыло", так как классическая форма подушек повторяет форму обычного мыла.

Материал подушки - пена (вспененный материал, разработка итальянской фабрики Magniflex), которая носит название Mallow foam. Пена с добавлением натурального экстракта мальвы.

Мальва обладает успокоительным эффектом, стабилизирует нервную систему и дарит спокойный качественный сон. Среди больших денег и проектов часто расходуется много нервных клеток. Поэтому так важно организовать правильно отдых в спальне и получить немаленькие дивиденды в виде бодрости и спокойствия от здорового сна. 

Mallow foam - это последнее поколение материалов с большим уровнем воздухообмена. Благодаря данному материалу подушка "дышит", а соответственно подвержена хорошему проветриванию. Соответственно минимизирует количество пылевых и прочих накоплений, предоставляя правильный, спокойный, свежайший и здоровый сон.

Подушка Magniflex Virtuoso Mallow Standard является следующим поколением подушек после модели Magniflex Aloe Vera, Classico, Superiore или memo gel.

Чехол подушки съемный. Легко снимается, возможна химчистка. Материал чехла: Satin/Viscose Magniflex - премиальные ткани и итальянское качество.

			<br><br>

				</div>
			</div>
		',
		'composition' => '',
		'recommend' => '',
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
		'parent_address' => 'Orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array('forma-klasicheska', 'material-memoform', 'chehol-outlast','Collectio_superiore','pillows-filter'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Memoform Superiore Deluxe Standard',
		'title' => 'Memoform Superiore Deluxe Standard - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Memoform Superiore Deluxe Standard - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'Memoform, чехол Outlast, 3D',
		'small_desc' => '
			<p class="hnb_harek">
			Уровень комфорта: <br>
			Материал: Memoform Airyform<br>
			Размеры: 72x42x12 см<br>
			Чехол: съемный на молнии, outlast, 3D<br>
			Изготовлена в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/MEMOFORM STANDARD SUP MX-5 OK.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/MEMOFORM STANDARD SUP MX-5 OK.jpg',
		'img_preview' => array('/img/product/big/superiore-deluxe (1).jpg', '/img/product/big/superiore-deluxe (2).jpg', '/img/product/big/superiore-deluxe (3).jpg', '/img/product/big/superiore-deluxe (4).jpg'),
		'img_alt' => '',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размер: 72x42x14 cm</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
				<div class="hnb_contlef">
					<img width="280" src="/img/son-universal.jpg" height="196" title="Для сна на спине, на животе и на боку">
					
				Универсальная модель для сна в любом положении

			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			РЕВОЛЮЦИЯ В ИНДУСТРИИ СНА<br /><br />
			<b>Memoform Superiore Standard</b> - универсальная модель для сна в любом положении. Спать на спине, на любом боку или на животе - все эти 3 положения абсолютно доступны и возможны. Не требует привыкания или адаптации, удобна сразу при первом использовании.<br /><br />

Подушка является ортопедической и обладает европейским сертификатом как изделие медицинского назначения: MEDICAL DEVICE.<br /><br />

Используемый материал или, как его еще называют, <b>наполнитель подушки</b> - это разработка фабрики Magniflex - пена с эффектом памяти. В данной модели использован самый передовой вариант - <b>Memoform Airyform</b>. Этот материал обладает высокой плотностью, хорошим уровнем циркуляции воздуха и перфорацией. Гарантирует свежесть сна.<br /><br />

<b>Чехол съемный на молнии</b>, легко снимается, возможна химчистка. Чехол матраса выполнен <b>из материала Outlast</b>. Данная технология имеет сертификат SPACE TECHNOLOGIES, позволяет регулировать комфортный уровень температуры на поверхности подушки. Благодаря свойствам теплообмена - либо охлаждает, либо нагревает, что в результате позволяет поддерживать комфортный уровень температуры. настоящий outlast имеют право использовать всего несколько компаний в мире, одной из которых является фабрика Магнифлекс.<br /><br />

Приобретая подушки с чехлами outlast Вы всегда можете быть уверены в оригинальности материала и его высоком качестве. Помимо своих прямых свойств, <b>подушка является гипоалергенной</b>, поэтому рекомендована для сна абсолютно всем.


			<br><br>

				</div>
			</div>
		',
		'composition' => '',
		'recommend' => '',
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
		'parent_address' => 'Orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-effektom-pamjati', 's-masagnim-effektom', 'forma-klasicheska', 'material-memoform', 'chehol-outlast','Collectio_superiore','pillows-filter'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Memoform Superiore Deluxe Orthomassage',
		'title' => 'Memoform Superiore Deluxe Orthomassage - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Memoform Superiore Deluxe Orthomassage - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'Memoform, чехол Outlast, 3D',
		'small_desc' => '
			<span class="hnb_popular">
			Массажная подушка с эффектом памяти
			</span>
			<p class="hnb_harek">
			Уровень комфорта: <br>
			Размеры: 70x39x10 см<br>
			Чехол: съемный на молнии, outlast.<br>
			Изготовлена в ИТАЛИИ.
            </p>
		',
		'small_img' => '/img/product/very_small/MEMOFORM ORTHOMASSAGE SUP MX-5.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/MEMOFORM ORTHOMASSAGE SUP MX-5.jpg',
		'img_preview' => array('/img/product/big/superiore-deluxe-orthomassage (1).jpg', '/img/product/big/superiore-deluxe-orthomassage (2).jpg', '/img/product/big/superiore-deluxe-orthomassage (3).jpg'),
		'img_alt' => '',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размер: 70x39x10 cm</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Memoform</div></li>

			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлена именно в Италии на заводе в Прато.</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/son-na-boky-i-spine.jpg" height="196" title="для сна на спине и на боку магнифлекс">
					
				Модель для сна на спине и на боку

			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			Разработка фабрики Магнифлекс в области подушек - массажная подушка с анатомическим и медицинским эффектом.<br /><br />

<b>Memoform Superiore Deluxe Orthomassage</b> позволяет спать на спине и на боку. Ее изюминка в наличии невероятного массажного эффекта. Во время сна человек, касаясь затылочной частью головы, которая между прочим является сверхчувствительной, получает качественный массаж. При этом, форма подушки не доставляет никакого дискомфорта во время сна, так как сквозь чехол и постельное белье массажные пирамидки почти не ощущаются, хотя эффективны на все 100%.<br /><br />

<b>Зачем нужна массажная подушка?</b> Расслабление головы, а следовательно и шеи, отсюда более качественный и глубокий сон, а значит прекрасное настроение при пробуждении утром! Стимуляция кровообращения, как у модели 2014 года - Orthomassage.<br /><br />

<b>Материал подушки последнего поколения из пен Магнифлекс</b> - Memoform - повышенная плотность, анатомический эффект памяти, гипоаллергенный материал, неверотяно дышащий и приятный на ощупь! Подходит для всех комплекций, так как работает под индивидуальной нагрузкой на сантиментр, а следовательно прогибается на правильную глубину, гарантируя 100%-ые ортопедические свойства.<br /><br />

<b>Съемный чехол на молнии</b>, легкая стирка и химчистка. Космические разработки дошли и до индустрии сна, благодаря технологии outlast сон стал еще более комфортным. <b>Outlast</b> - система регуляции температуры поверхности подушки, специальная ткань, которая обладает функцией теплообмена. На такой подушке никогда не жарко и не холодно. Space technologies придумали эту ткань для скафандров космонавтов, а фабрика Магнифлекс применила в тканях чехлов.<br /><br />



			<br><br>

				</div>
			</div>
		',
		'composition' => '',
		'recommend' => '',
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
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),
	
	array(
		'address' => 'memoform_superiore_deluxe_wave',
		'parent_address' => 'Orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-effektom-pamjati', 'forma-wolna', 'forma-klasicheska', 'material-memoform', 'chehol-outlast','Collectio_superiore','pillows-filter'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Memoform Superiore Deluxe Wave',
		'title' => 'Memoform Superiore Deluxe Wave - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Memoform Superiore Deluxe Wave - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'Memoform, чехол Outlast, 3D',
		'small_desc' => '
			<span class="hnb_popular">
			с эффектом памяти с 2-мя валиками
			</span>
			<p class="hnb_harek">
			Уровень комфорта: <br>
			Размеры:  60x43x10/11 см<br>
			Чехол: съемный, на молнии, outlast.<br>
			Изготовлена в ИТАЛИИ.
            </p>
		',
		'small_img' => '/img/product/very_small/MEMOFORM WAVE SUP MX-6.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/MEMOFORM WAVE SUP MX-6.jpg',
		'img_preview' => array('/img/product/big/superiore-deluxe-wave (1).jpg', '/img/product/big/superiore-deluxe-wave (2).jpg', '/img/product/big/superiore-deluxe-wave (3).jpg', '/img/product/big/superiore-deluxe-wave (4).jpg'),
		'img_alt' => '',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размер:  60x43x10/11 cm</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
				<div class="hnb_contlef">
					<img width="280" src="/img/son-na-boky-i-spine.jpg" height="196" title="для сна на спине и на боку магнифлекс">
					
				Модель для сна на спине и на боку

			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			Анатомическая ортопедическая подушка Magniflex<br /><br />

Модель Memoform Superiore Deluxe Wave является следующим поколением подушек, после модели Memory.<br /><br />

Она получила более современный материал по сравнению с моделью Мемори, это Memoform Airyform - разработку итальянской фабрики Магнифлекс. Этот материал обладает более высокой плотностью, очень приятный на ощупь, вязко-эластичный. Гипоалергенная подушка подходит для сна на спине и на боку, она состоит из двух валиков 10 и 11 см, что позволяет подобрать оптимальную высоту для человека с любой комплекцией. Другая высота подушки уже не будет гарантировать ортопедических свойств.<br /><br />

Memoform Airyform используется в подушке не только с перфорацией, но также имеет ряд улучшений, например, это более высокая плотность и на порядок выше уровень циркуляции воздуха. Максимальная защита от пылевых клещей!<br /><br />

Чехол подушки на молнии, легко снимается и подвергается химчистке. Материал чехла - инновационная разработка, используемая в космических технологиях для космонавтов. Материал способен поддерживать температуру внутри скафандра на комфортном для человека уровне при любой внешней среде. Таким образом, благодаря функциям теплообмена, outlast нивелирует перепады температур, сохраняя на протяжении всего сна комфортный уровень температуры на поверхности подушки. Сертификат Space technologies.<br /><br />

Также подушка имеет европейский сертификат, приравнивающий подушку к изделиям медицинского назначения (Medical device). 
			<br /><br />

				</div>
			</div>
		',
		'composition' => '',
		'recommend' => '',
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
		'price' => 12000.00,
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),
	
	array(
		'address' => 'memoform_superiore_comfort',
		'parent_address' => 'Orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array('forma-wolna', 'material-memoform', 'chehol-outlast','Collectio_superiore','pillows-filter'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Memoform Superiore Comfort',
		'title' => 'Memoform Superiore Comfort - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Memoform Superiore Comfort - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'Memoform, чехол Outlast, 3D',
		'small_desc' => '
			<span class="hnb_popular">
			Волнообразная форма с фиксацией шеи.
			</span>
			<p class="hnb_harek">
			Уровень комфорта: <br>
			Размеры: 52x32x5/10 см.<br>
			Чехол: съемный на молнии, outlast.<br>
			Изготовлена в ИТАЛИИ.
            </p>
		',
		'small_img' => '/img/product/very_small/MEMOFORM COMFORT SUP MX-2.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/MEMOFORM COMFORT SUP MX-2.jpg',
		'img_preview' => array('/img/product/big/superiore-deluxe-comfort (1).jpg', '/img/product/big/superiore-deluxe-comfort (2).jpg'),
		'img_alt' => '',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размер:  52x32x5/10 cm</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
				<div class="hnb_contlef">
					<img width="280" src="/img/son-na-boky-i-spine.jpg" height="196" title="для сна на спине и на боку магнифлекс">
					
				Модель для сна на спине и на боку

			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			<b>Подушка от головных болей и мигреней.</b><br /><br />

<b>Memoform Superiore Comfort</b> - более современный вариант подушки модели Comfort.<br /><br />

Специальная форма подушки предназначена для улучшения притока крови к голове, ведь как известно, из-за плохой циркуляции по сосудам и возникает головная боль. В данной подушке затылок спящего в положении на спине слегка запрокинут назад, что обеспечивает приток крови именно к голове, без перенасыщения или недостатка, отсюда и обеспечивается потрясающий результат: свежая и легкая голова по утрам! На Memoform Superiore Comfort можно спать также и на боку, но максимальный эффект достигается в положении на спине.<br /><br />

Компактный размер подушки делает ее транспортабельной, удобной для использования в транспорте или на диване при просмотре телепередач и т.п.<br /><br />

<b>Материал подушки - пена Magniflex Memoform Airyform</b>, инновационная разработка, гарантирующая высокий уровень циркуляции воздуха, анатомичность, гипоалергенность и защиту от пылевых клещей.<br /><br />

Также идеально подойдет тем, кто имеет травмы или есть потребность в фиксации шеи или затылочной части.<br /><br />

<b>Подушка для детей.</b> Подходит для детей благодаря своему небольшому размеру и высоте - отличный вариант научить Вашего ребенка спать правильно - залог крепкого здоровья.<br /><br />

<b>Чехол съемный, на молнии, легко поддается химчистке.</b> Space technologies и Магнифлекс представили для данной подушки самую последнюю разработку в области материалов и тканей чехлов - outlast. "Аутласт" не имеет на данный момент аналогов в мире и позволяет сохранять идеальную и комфортную температуру на поверхности подушки. Благодаря функции теплообмена имеет возможность нагревать или охлаждать поверхность. Данная разработка использовалась до недавнего времени только в скафандрах космонавтов для защиты от сильных температурных перепадов. На сегодня это способ сделать сон наиболее качественным и здоровым!<br /><br />

Подушка имеет сертификат Medical device - изделие медицинского назначения.


			<br /><br />

				</div>
			</div>
		',
		'composition' => '',
		'recommend' => '',
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
		'price' => 10300.00,
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),
	
	array(
		'address' => 'memoform_standard_classico',
		'parent_address' => 'Orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 'forma-klasicheska', 'material-memoform', 'chehol-viscose','Collectio_classico','pillows-filter'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Memoform Standard Classico',
		'title' => 'Memoform Standard Classico - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Memoform Standard Classico - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'Memoform, чехол вискоза',
		'small_desc' => '
			<p class="hnb_harek">
			Уровень комфорта: <br>
			Размеры: 72x42x12 см.<br>
			Материал: Memoform Airyform<br>
			Чехол: съемный на молнии, viscose.<br>
			Изготовлена в ИТАЛИИ.
            </p>
		',
		'small_img' => '/img/product/very_small/podushka-memoform-standard-classico-mx-magniflex.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/podushka-memoform-standard-classico-mx-magniflex.jpg',
		'img_preview' => array('/img/product/big/classico (1).jpg', '/img/product/big/classico (2).jpg'),
		'img_alt' => '',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размер:  72x42x12 cm</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
				<div class="hnb_contlef">
					<img width="280" src="/img/son-universal.jpg" height="196" title="для сна на спине, на боку и на животе">
					
				Модель для сна на спине, на боку и на животе

			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
			Ортопедическая подушка классической привычной формы.<br /><br />

Модель для сна на спине, на боку и на животе. Подушка имеет привычную стандартную форму, к которой нет необходимости привыкать, в отличие, например, от подушки с формой wave.<br /><br />

Материал подушки - пена (вспененный материал, разработка итальянской фабрики Magniflex), которая носит название Memoform Airyform. Это последнее поколение материала memoform, которое обладает не только перфорацией, но и большим уровнем воздухообмена. Все это позволяет подушке быть "дышащей", а соответственно минимизировать количество пылевых и прочих накоплений, гарантируя чистый свежий и здоровый сон.<br /><br />

На ощупь этот материал вязко-эластичный, обладает памятью формы, что позволяет обеспечивать поддержку головы и шеи индивидуально для каждого, благодаря выраженному анатомическому эффекту. Отличие материала memoform airyform Magniflex от других аналогов больше всего проявляется в мягкости материала - в продаже редко можно встретить такой приятный на ощупь, нежный и в то же время плотный упругий материал, который обеспечит правильную ортопедическую поддержку и положение.<br /><br />

Подушка Magniflex Memoform Standard Classico является следующим поколением подушек после модели Magniflex Aloe Vera.<br /><br />

Чехол подушки съемный, на молнии сбоку по короткой стороне. Легко снимается, возможна химчистка. Материал чехла: Viscose Magniflex - невероятно приятный на ощупь материал, гарантирующий максимальное расслабление.<br /><br />

Подушка сертифицирована в Европе как Medical Device, что гарантирует здоровый, правильный и качественный сон.



			<br /><br />

				</div>
			</div>
		',
		'composition' => '',
		'recommend' => '',
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
		'price' => 10600.00,
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),
	
	array(
		'address' => 'memoform_wave_classico',
		'parent_address' => 'Orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array('forma-wolna', 'material-memoform', 'material-mallowfoam', 'chehol-viscose','Collectio_classico','pillows-filter'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Memoform Wave Classico',
		'title' => 'Memoform Wave Classico - ортопедическая подушка от интернет-магазина Magniflex',
		'description' => 'Ортопедическая подушка Memoform Wave Classico - универсальная разработка лаборатории Magniflex в нашем каталоге.',
		'keywords' => 'Memoform, чехол вискоза',
		'small_desc' => '
			<p class="hnb_harek">
			Уровень комфорта: <br>
			Размеры: 60x43x11/10 см.<br>
			Материал: Memoform Airyform<br>
			Чехол: съемный на молнии, viscose.<br>
			Изготовлена в ИТАЛИИ.
            </p>
		',
		'small_img' => '/img/product/very_small/podushka-memoform-wave-classico-mx-magniflex.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/podushka-memoform-wave-classico-mx-magniflex.jpg',
		'img_preview' => array('/img/product/big/classico-wave (2).jpg', '/img/product/big/classico-wave.jpg'),
		'img_alt' => '',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размер: 60x43x11/10 cm</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
				<div class="hnb_contlef">
					<img width="280" src="/img/son-na-boky-i-spine.jpg" height="196" title="для сна на спине и на боку">
					
				Модель для сна на спине и на боку 

			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
Подушка подходит для сна в двух положениях: на боку и на спине. Два валика высотой 10 и 11 см, посередине высота подушки ориентировочно 8 см. Идеальные высота и размеры для правильного ортопедического эффекта.<br /><br />

Подушка Memoform Wave Classico - реальный инструмент для избавления от головных болей, болей в шее, плохого сна и неправильного сна. <br /><br />

Материал подушки - инновационная пена (разработка итальянской фабрики Magniflex) Memoform Airyform, следующее поколение материалов после подушки Memory. Вязко-эластичная пена, которая гарантирует анатомический эффект и правильную поддержку. Мягкая, невероятно приятная на ощупь, но при этом обладающая высокой плотностью материала, подушка Memoform Wave Classico обеспечивает правильную качественную поддержку головы и шеи. <br /><br />

Чехол съемный, на молнии. Удобство использования - легко снимается и подвергается химчистке. Материал чехла - Viscose Magniflex, мягкий и приятный с логотипом фабрики Магнифлекс, Италия. <br /><br />

Подушка "дышащая", гарантирует циркуляцию воздуха, что минимизирует возможность пылевых и прочих накоплений. Здоровый, свежий сон на ортопедической подушке Магнифлекс Memoform Wave Classico - это высокий уровень комфорта благодаря современным разработкам в индустрии сна.




			<br /><br />

				</div>
			</div>
		',
		'composition' => '',
		'recommend' => '',
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
		'price' => 9200.00,
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 8200,
		//), //скидка
	),
	
	array(
		'address' => 'ORTHOMASSAGE',
		'parent_address' => 'Orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-effektom-pamjati', 's-masagnim-effektom', 'forma-klasicheska', 'material-memoform', 'chehol-coolmax','Collectio_coolmax','pillows-filter'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Orthomassage (снята с производства)',
		'title' => 'Orthomassage - ортопедическая подушка в интернет-магазине Magniflex',
		'description' => 'Ортопедическая подушка Orthomassage обеспечивает идеальную поддержку для шеи и головы. Подробности в нашем каталоге.',
		'keywords' => 'orthomassage',
		'small_desc' => '
			<span class="hnb_popular">
			с эффектом памяти
			</span>
			<p class="hnb_harek">
			Ортопедическая подушка, идеальная поддержка шеи с массажным эффектом.<br>
			Размеры: 70 x 39 x 11 см<br>
			Чехол: съемный, Coolmax<br>
			Создана в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Orthomassage.jpg',
		'small_img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Orthomassage',
		'img' => '/img/product/big/Orthomassage.jpg',
		'img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Orthomassage',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размеры: 70 x 39 x 11 см. Вес: 1700 г.</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Мягкий</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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

			<br><br>

				</div>
			</div>
		',
		'composition' => '',
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
		'parent_address' => 'Orthopedic_pillows',
		'parent_address2' => 'pillows',
		'other_categories' => array( 's-effektom-pamjati', 'forma-klasicheska', 'material-memoform', 'chehol-coolmax','Collectio_coolmax','pillows-filter'),
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Aloe Vera (снята с производства)',
		'title' => 'Подушка Алоэ Вера (Magniflex Aloe Vera) - доступные цены в нашем интернет-магазине',
		'description' => 'Предлагаем купить подушку Алоэ Вера. Подушка Magniflex Aloe Vera обеспечивает анатомически правильное положение шейных позвонков и головы во время сна.',
		'keywords' => 'подушка, алоэ, вера, aloe, vera',
		'small_desc' => '
			
			<span class="hnb_popular">
			с эффектом памяти
			</span>
			<p class="hnb_harek">
			Ортопедическая подушка с идеальными анатомическими свойствами, экстракт Алоэ Вера.<br>
			Размеры: 72 x 42 x 12 см<br>
			Чехол: съемный,Coolmax<br>
			Изготовлена в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Aloe-Veranew.jpg',
		'small_img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Aloe Vera ',
		'img' => '/img/product/very_small/Aloe-Veranew.jpg',
		'img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Aloe Vera ',
		'attr' => '
		
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размеры: 72 x 42 x 12 см. Вес: 1800 г.</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Мягкий</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
			Подушка Magniflex Aloe Vera имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.

			<br><br>

				</div>
			</div>
		',
		'composition' => '
			Наволочка: 100% натуральный хлопок.
			Подушка:
			в основе материал Memoform 
			Один из самых мягких материалов - дарит ни с чем несравнимый комфорт. Благодаря своей инновационной сверхбыстрой способности реагирования на тепло и давление, наполнитель мгновенно принимает форму тела, предоставляя превосходную ортопедическую поддержку всему организму в целом, а в особенности спине. Материал очень быстро возвращает свою оригинальную форму, приспосабливается к движениям человека, способствуя крепкому и здоровому сну.
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
	
	
	/* аксессуары, основания */
	
	/* старый вариант 
	array(
		'address' => 'DREAM',
		'parent_address' => 'bases',
		'parent_name' => 'Аксессуары',
		'name' => 'Ортопедическое основание для матрасов',
		'title' => 'Ортопедическое основание (решетка) Dream в официальном магазине Магнифлекс',
		'description' => 'фотографии, описание, характеристики ортопедического основания Dream',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, ',
		'small_desc' => '
			<p class="hnb_harek">
			Высота основания 28 см.<br>
			 Основа основания: Стальная рама, гнуто-клееные березовые ламели.<br>
			Максимальный вес спящего: 150 кг.  <br>Гарантия: 3 года

                 </p>
		',
		'small_img' => '/img/product/very_small/osnovanie.jpg',
		'small_img_alt' => 'Ортопедическое основание (решетка) Dream ',
		'img' => '/img/product/big/osnovanie2.jpg',
		'img_alt' => 'Ортопедическое основание (решетка) Dream ',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стальная рама,  гнуто-клееные березовые ламели </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота основания: 28 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота ножек: 25,5 см, 5 ножек у двуспального варианта</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Максимальный вес спящего: 150 кг. </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Гарантия: 3 года</li></ul><br>
			
			
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

				<div class="hnb_contcenter">

			<h1>Ортопедическое основание (подставка) под матрас</h1>
			<p>
			Ортопедические основания (подставка под матрас) - относительно недавнее изобретение "индустрии сна". Ортопедическая решетка, прогибаясь вместе с матрасом, берет на себя часть нагрузки. Благодаря использованию оснований для матраса усиливаются анатомические и ортопедические свойства матрасов, продлевается их срок службы. 
			<br /><br />
			Упругие многослойные деревянные пластины создают "ортопедический эффект": неодинаково прогибаясь под тяжестью разных частей нашего тела, они помогают позвоночнику оставаться прямым. Лучше всего сочетать раму-решетку и ортопедический матрац. 

			<br /><br />
			</p>

			<img width="640" src="/img/product/ortopedicheskoe-osnovanie-1.png"  title="Ортопедическое основание Dream - подставка под матрас">

			<hr />
			<h1>Рекомендации к эксплутации</h1>

			<p>
			Использование ортопедической решетки с пружинными ортопедическими матрасами: пружины ортопедического матраса меньше сжимаются, не проседают, поэтому пружинный матрас значительно дольше сохраняет свои первоначальные свойства.
			<br /><br />
			Использование ортопедического основания с беспружинными ортопедическими матрасами, латексными ортопедическими матрасами: благодаря ортопедическому основанию, принимающему на себя часть нагрузки, происходит усиление анатомических и ортопедических свойств матраса.
			<br /><br />
			Ламели основания изготавливаются из березы. Каркас ортопедического основания представлен в двух вариантах: металлическом и деревянным (натуральная береза). Сочетание ламелей из натуральной березы и металлического каркаса в данном ортопедическом основании делает всю конструкцию основания более надежной и долговечной.

			<br /><br />
			</p>
			<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
					
								<a href="#" title="Ортопедическое основание" target="_blank">
									<img itemprop="image" src="/img/ortopedicheskaya-reshetka01.jpg" title="Ортопедическое основание" alt="Ортопедическое основание" />
			<span>
			Ортопедическое основание
			</span>

								</a>
								
								<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/ortopedicheskaya-reshetka02.jpg" title="Настоящие душистые березовые ламели" alt="Ортопедическое основание под матрасы" />
			<span>
			Настоящие душистые березовые ламели
			</span>

								</a>
								
													<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/ortopedicheskaya-reshetka03.jpg" title="Внимание! Двуспальный вариант - монолитный. Не разбирается" alt="Внимание! Двуспальный вариант - монолитный. Не разбирается" />
			<span>
			Внимание! Двуспальный вариант - монолитный. Не разбирается
			</span>

								</a>

													<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/ortopedicheskaya-reshetka04.jpg" title="Ножки съемные" alt="Ортопедическое основание под матрасы - съемные ножки" />
			<span>
			Ножки съемные
			</span>

								</a>

													<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/ortopedicheskaya-reshetka05.jpg" title="Ортопедическое основание под матрасы - упаковка" alt="Ортопедическое основание под матрасы - упаковка" />
			<span>
			Поставляется в полиэтиленовой упаковке. Все углы бережно упакованы в картон для удобной и безопасной транспортировки.
			</span>

								</a>
								
							</div>
			<br><br>
			<hr />

			<h1>Как пользоваться</h1>

			<p>
			— с кроватью: вставить в каркас кровати;

			<br /><br />
			— без кровати: использовать как "подставку" под матрас.
			<br /><br />
			</p>
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
			array('180x195',5600.00),
			array('180x200',5600.00),
			array('200x200',6300.00),
		),
	),
	*/
	
	/* нет товара
	array(
		'address' => 'ortopedicheskoe-osnovanie-komfort-plus',
		'parent_address' => 'ortopedicheskie-reshetky',
		'parent_address2' => 'bases',
		'parent_name' => 'Аксессуары',
		'name' => 'ОРТОПЕДИЧЕСКОЕ ОСНОВАНИЕ ДЛЯ МАТРАСОВ КОМФОРТ ПЛЮС',
		'title' => 'ОРТОПЕДИЧЕСКОЕ ОСНОВАНИЕ ДЛЯ МАТРАСОВ КОМФОРТ ПЛЮС',
		'description' => 'фотографии, описание, характеристики ОРТОПЕДИЧЕСКОЕ ОСНОВАНИЕ ДЛЯ МАТРАСОВ КОМФОРТ ПЛЮС',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, ',
		'small_desc' => '
			<p class="hnb_harek">
			Высота основания 28 см.<br>
			 Основа основания: Стальная рама, гнуто-клееные березовые ламели.<br>
			Максимальный вес спящего: 150 кг.  <br>Гарантия: 3 года

                 </p>
		',
		'small_img' => '/img/product/very_small/osnovanie-comfort-plus-02.jpg',
		'small_img_alt' => 'Ортопедическое основание (решетка) Комфорт Плюс',
		'img' => '/img/product/big/osnovanie2.jpg',
		'img_alt' => 'Ортопедическое основание (решетка) Комфорт Плюс',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стальная рама,  гнуто-клееные березовые ламели </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота основания: 28 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота ножек: 25,5 см, 5 ножек у двуспального варианта</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Максимальный вес спящего: 150 кг. </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Гарантия: 3 года</li></ul><br>
			
			
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

				<div class="hnb_contcenter">
  
			<h1>Ортопедическое основание (подставка) под матрас</h1>
			<p>
			Ортопедические основания (подставка под матрас) - относительно недавнее изобретение "индустрии сна". Ортопедическая решетка, прогибаясь вместе с матрасом, берет на себя часть нагрузки. Благодаря использованию оснований для матраса усиливаются анатомические и ортопедические свойства матрасов, продлевается их срок службы. 
			<br /><br />
			Упругие многослойные деревянные пластины создают "ортопедический эффект": неодинаково прогибаясь под тяжестью разных частей нашего тела, они помогают позвоночнику оставаться прямым. Лучше всего сочетать раму-решетку и ортопедический матрац. 

			<br /><br />
			</p>

			<img width="640" src="/img/product/ortopedicheskoe-osnovanie-1.png"  title="Ортопедическое основание Dream - подставка под матрас">

			<hr />
			<h1>Рекомендации к эксплутации</h1>

			<p>
			Использование ортопедической решетки с пружинными ортопедическими матрасами: пружины ортопедического матраса меньше сжимаются, не проседают, поэтому пружинный матрас значительно дольше сохраняет свои первоначальные свойства.
			<br /><br />
			Использование ортопедического основания с беспружинными ортопедическими матрасами, латексными ортопедическими матрасами: благодаря ортопедическому основанию, принимающему на себя часть нагрузки, происходит усиление анатомических и ортопедических свойств матраса.
			<br /><br />
			Ламели основания изготавливаются из березы. Каркас ортопедического основания представлен в двух вариантах: металлическом и деревянным (натуральная береза). Сочетание ламелей из натуральной березы и металлического каркаса в данном ортопедическом основании делает всю конструкцию основания более надежной и долговечной.

			<br /><br />
			</p>
			<div id="coin-slider" itemscope="" itemtype="http://schema.org/ImageGallery">
					
								<a href="#" title="Ортопедическое основание" target="_blank">
									<img itemprop="image" src="/img/ortopedicheskaya-reshetka01.jpg" title="Ортопедическое основание" alt="Ортопедическое основание" />
			<span>
			Ортопедическое основание
			</span>

								</a>
								
								<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/ortopedicheskaya-reshetka02.jpg" title="Настоящие душистые березовые ламели" alt="Ортопедическое основание под матрасы" />
			<span>
			Настоящие душистые березовые ламели
			</span>

								</a>
								
													<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/ortopedicheskaya-reshetka03.jpg" title="Внимание! Двуспальный вариант - монолитный. Не разбирается" alt="Внимание! Двуспальный вариант - монолитный. Не разбирается" />
			<span>
			Внимание! Двуспальный вариант - монолитный. Не разбирается
			</span>

								</a>

													<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/ortopedicheskaya-reshetka04.jpg" title="Ножки съемные" alt="Ортопедическое основание под матрасы - съемные ножки" />
			<span>
			Ножки съемные
			</span>

								</a>

													<a href="#" target="_blank" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
									<img itemprop="image" src="/img/ortopedicheskaya-reshetka05.jpg" title="Ортопедическое основание под матрасы - упаковка" alt="Ортопедическое основание под матрасы - упаковка" />
			<span>
			Поставляется в полиэтиленовой упаковке. Все углы бережно упакованы в картон для удобной и безопасной транспортировки.
			</span>

								</a>
								
							</div>
			<br><br>
			<hr />

			<h1>Как пользоваться</h1>

			<p>
			— с кроватью: вставить в каркас кровати;

			<br /><br />
			— без кровати: использовать как "подставку" под матрас.
			<br /><br />
			</p>
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
		'sizes' => array(
			array('80x190',3900.00),
			array('80x200',3900.00),
			array('90x190',4100.00),
			array('90x200',4100.00),
			array('100x200',5100.00),
			array('120x190',5900.00),
			array('120x200',5900.00),
			array('140x190',6100.00),
			array('140x200',6100.00),
			array('150x190',6300.00),
			array('150x200',6300.00),
			array('160x190',6600.00),
			array('160x195',6600.00),
			array('160x200',6600.00),
			array('180x190',6800.00),
			array('180x195',6800.00),
			array('180x200',6800.00),
		),
	),
	*/
	
	array(
		'address' => 'ortopedicheskoe-osnovanie-komfort',
		'parent_address' => 'ortopedicheskie-reshetky',
		'parent_address2' => 'bases',
		'parent_name' => 'Аксессуары',
		'name' => 'Ортопедическое основание "КОМФОРТ"',
		'title' => 'Ортопедическое основание "КОМФОРТ"',
		'description' => 'фотографии, описание, характеристики Ортопедическое основание "КОМФОРТ"',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, Ортопедическое основание "КОМФОРТ"',
		'small_desc' => '
			<p class="hnb_harek">
			Березовые ламели <br />
			Стандартная высота: 28 см, возможен любой размер<br />
			Максимальный вес спящего: 150 кг. <br />
			Гарантия: 3 года  <br />
                 </p>
		',
		'small_img' => '/img/product/very_small/osnovanie.jpg',
		'small_img_alt' => 'Ортопедическое основание "КОМФОРТ" ',
		'img' => '/img/product/big/osnovanie-comfort-02.jpg',
		'img_alt' => 'Ортопедическое основание решетка "КОМФОРТ" ',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Профильная металлическая труба, гнуто-клееные березовые ламели </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стандартная высота: 28 см, ножка может быть выполнена ЛЮБОЙ высоты!</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Цвет каркаса - черный (возможна покраска ЛЮБЫМ цветом)</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Максимальный вес спящего: 150 кг. </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Гарантия: 3 года</li></ul><br>
			
			
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
		'title' => 'Ортопедическое основание "КОМФОРТ" (разборное)',
		'description' => 'фотографии, описание, характеристики Ортопедическое основание "КОМФОРТ" (разборное)',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, Ортопедическое основание "КОМФОРТ", разборное',
		'small_desc' => '
			<p class="hnb_harek">
			Березовые ламели <br />
			Стандартная высота: 28 см, возможен любой размер<br />
			Максимальный вес спящего: 150 кг. <br />
			Гарантия: 3 года  <br />
                 </p>
		',
		'small_img' => '/img/product/very_small/osnovanie-razbornoe.jpg',
		'small_img_alt' => 'Ортопедическое основание "КОМФОРТ" (разборное)',
		'img' => '/img/product/big/osnovanie2.jpg',
		'img_alt' => 'Ортопедическое основание "КОМФОРТ" (разборное)',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стальная рама,  гнуто-клееные березовые ламели </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота основания: 28 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота ножек: 25,5 см, 5 ножек у двуспального варианта</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Максимальный вес спящего: 150 кг. </li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Гарантия: 3 года</li></ul><br>
			
			
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
		'parent_address' => 'bases',
		'parent_name' => 'Аксессуары',
		'other_categories' => array('divannie-mattresses', 'mattresses-filter'),
		'name' => 'Topper Best Top',
		'title' => 'Топпер. Тонкий матрас. Наматрасник',
		'description' => 'Топпер. Тонкий матрас. Наматрасник, фотографии, описание, характеристики ортопедического основания Dream',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, ',
		'small_desc' => '
			<p class="hnb_harek">
			Тонкий матрас высотой 5 см<br />
			Эффект памяти! Memoform <br />
		  Дышащая ткань Coolmax <br />
      Улучшает анатомические  свойства<br />
      Идеален для раскладных диванов!
		  

                 </p>
		',
		'small_img' => '/img/product/big/TOPPER-BEST-TOP.jpg',
		'small_img_alt' => 'Topper Best Top',
		'img' => '/img/product/big/TOPPER-BEST-TOP.jpg',
		'img_alt' => 'Topper Best Top',
		'specialoffer_label' => array(
			'category' => 'label_new_product',
		),
		'attr' => '
			<ul>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Топпер. Тонкий матрас. Наматрасник</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 5 см.</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Жесткость: мягкий</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Чехол: съемный на молнии, ткань Coolmax, на резинках.</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Наполнитель: Memoform с перфорацией.</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет.</li>
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
			<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
						Наматрасник (топпер/тонкий матрас) Best Top Magniflex
					</span>
					<br>
					<span class="hnb_eytext">
					<b><i>Отличный вариант повышение уровня комфорта матраса или эксплуатации на складываемом диване.</i></b><br><br>
						Топпер (наматрасник/тонкий матрас) Best Top – выполнен из материала с эффектом памяти Memoform. Материал позволяет анатомически повторять контуры тела, легко подстраиваясь под фигуру человека и создавая оптимальный уровень комфорта. Сам материал выполнен с вертикальной перфорацией, что делает этот топпер невероятно дышащим – а это отличный способ избежать образования пылевых клещей. Повышенный воздухообмен и высокий уровень циркуляции воздуха во время эксплуатации превращает этот тонкий матрас в прекрасный инструмент создания свежести во время сна на поверхности спального места.

<br><br>
Чехол выполнен из материала Coolmax, аналогично матрасу модели Memo Merino. Свойства материала Coolmax обеспечивают отличный теплообмен и позволяют сохранять комфортный уровень температуры поверхности спального места. По периметру матраса идет молния – легко снимать чехол и при необходимости отдавать в химчистку.

<br><br>
Такой тонкий матрас Best Top – идеальный вариант для эксплуатации на раскладном диване, когда нет возможности использовать полноценную кровать для сна в целях экономии места и пространства в квартире. Топпер легко сворачивается и складывается в сам диван. Либо его можно свернуть в компактный рулон, закрепить резинками и хранить в любом удобном для Вас месте.

<br><br>
Для путешествующих по квартирам в аренду это также прекрасный вариант сохранять комфортность своего спального места в любых условиях и на любых спальных поверхностях.


					</span>
				</div>
				<ul class="hnb_lidisp_inline">
					<li style="margin-right: 9%;"><img itemprop="image" src="/img/product/Best-Top-opisnew-left.png"></li>
					<li><img itemprop="image" src="/img/product/Best-Top-opisnew-right.jpg"></li>
				</ul>
			
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
			array('80x190',14700.00),
			array('80x200',15500.00),
			array('90x190',16600.00),
			array('90x200',17300.00),
			array('120x200',23200.00),
			array('140x200',27500.00),
			array('160x200',30900.00),
			array('180x200',34800.00),
			array('200x200',38500.00),

		),
	),
	
	array(
		'address' => false ,
		'parent_address' => false ,
		'parent_address2' => false ,
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Memorie',
		'title' => 'Матрасы Memorie - интернет-магазин Magniflex',
		'description' => 'Ортопедический матрас Memorie Магнифлекс (Magniflex) Италия. Чехол вискоза, слой memoform эффект памяти. Средней жесткости матрас. Сделано в Италии.',
		'keywords' => 'матрас, Memorie, magniflex',
		'small_desc' => '<p class="hnb_harek">
			Мульти-зональный с массажным эффектом! <br />
			Матрас средней жесткости,<br />
			Высота от 20 см.<br />
		    Наполнители: Memoform, Eliosoft, Elioform.
			</p>',
		'small_img' => '/img/product/very_small/memorie-9-extra-small.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie.',
		'img' => '/img/product/big/memorie-8.jpg',
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 20, и 22 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Средняя</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
		'advantages' => '
			<style>
				#prod_sizes{width: 136px;}
				.product_top .price{right: 219px;}
				#breadcrumbs{
					background-image: url(/img/memorial.png);
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
					<h2>КОЛЛЕКЦИЯ МАТРАСОВ MEMORIE</h2>
					
Ортопедический матрас Memorie – это новинка фабрики Magniflex, следующий уровень комфорта после серии упругих матрасов коллекции Stile и Pensiero, Rest.
<br><br>
Матрас поставляется в разных высотах, состоит из натуральных материалов и имеет очень привлекательный внешний вид. Отличие всех моделей коллекции Memorie друг от друга только в высоте, одинаковые материалы и жесткость.

<br><br>
<img itemprop="image" src="/img/bavov_innemat.jpg" style="width: 40%;">
<br><br>
Белоснежный чехол матраса выполнен из материала вискоза. Чехол съемный, на молнии.
<br><br>
Вискозные волокна получают из древесной целлюлозы. Деревянные щепы измельчают до целлюлозной массы, из которой впоследствии получают волокно и нити, из которых создается материал и ткань.
<br><br>
Из-за своей достаточно высокой гигроскопичности, вискоза способна впитать много влаги, так, например, по сравнению с хлопком, она впитывает ее в два раза больше.
<br><br>
Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
<br><br>
Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
<br><br>
Матрас имеет массажный слой высотой 5 см - Eliosoft. Это мультизональный слой, позволяющий обеспечивать повышенный уровень комфорта и воздействовать на разные точки спящего человека с разным давлением. 5 зональный материал Eliosoft находится под слоем Мемоформ - латексной пены с эффектом памяти. Поэтому неприятного ощущения от массажного слоя при эксплуатации матраса не проявляется. 
<br><br>
Массажный матрас Memorie Magniflex Вам необходим, если у вас:
<br>
затекают мышцы,<br>
повреждены суставы,<br>
есть застойные явления крови,<br>
возникают периодические или постоянные боли в разных отделах позвоночника.<br><br>
Если вы приходите с работы усталые, не можете расслабиться, массажный матрас обязательно поможет:<br>

Он разогреет повреждённые суставы,<br>
разомнёт отёкшие мышцы,<br>
стимулирует кровообращение.<br>
Подарите себе отличное самочувствие!<br><br>

Матрас Memorie также рекомендован в следующих случаях: <br>

1. Не можете расслабиться после напряжённого рабочего дня.<br>
2. Появились боли в позвоночнике.<br>
3. При целлюлите и излишнем весе.<br>
4. Если у вас отложение солей.<br>
5. Если у вас появились головные боли.<br><br>

<span style="color:#d0121a;">матрас Memorie Magniflex сконструирован так, что идеально подходит для любого человека, он может обеспечить удобства, адаптируясь к контуру тела. Нагрузка и вес на матрас равномерно распределяется за счет специального внутреннего наполнителя. При этом вы чувствуете приятные массажирующие ощущения, которые расслабляют и дарят здоровый и крепкий сон.</span><br><br>

При покупке матраса стоит обратить внимание на то, чтобы массажный матрас дышал. То есть поддавался вентиляции. Кроме этого, он не должен допускать образование различных неприятностей:<br>

плесневых грибков,<br>
бактерий,<br>
микробов,<br>
клещей<br>
и прочего.<br><br>
<span style="color:#d0121a;">Современные технологии позволяют изготавливать такой матрас без использования синтетических клеев. Это благоприятно отражается на качестве изделия.</span><br><br>

<span style="color:#d0121a;">Необходимо обратить внимание на эластичность и упругость массажного матраса. Чем эти показатели выше, тем меньше будут ощущать дискомфорт ваши кровеносные сосуды. Они не будут передавливаться, от чего затекают иногда руки или ноги.</span><br><br>

Правильно выбранный качественный матрас выполняет следующие функции:<br>

Помогает сохранять правильную осанку тела.<br>
Снимет боль с проблемных участков.<br>
Значительно улучшает кровообращение.<br>
Очищает стенки кровеносных сосудов от шлаков.<br>
Благоприятно действует на нервную систему.<br>
Обеспечивает профилактику заболеваний.<br><br>
<span style="color:#d0121a;">Если вам некогда следить за своим здоровьем. Нет времени на занятия спортом или хождением в фитнес клубы. Бывает даже, что нет средств для личного массажиста. Тогда массажный матрас – хороший выход из положения. Массажный матрас совмещает в себе приятное и полезное воздействие на ваш организм.</span><br><br>


<br><br>			
<img style="width:40%;" src="/img/product/big/memorie-9.jpg">
<br><br>



<div class="hnb_opis_sostava">
<span>MEMORIE 8:</span>
	<div>
		
		<p>
		Высота матраса 20 см.<br>
		Средней жесткости.<br>
		Мульти-зональный с  массажным эффектом.
		</p>
		<img itemprop="image" src="/img/layer/layer-pensiero-roz.png">
		<div>
			<img itemprop="image" src="/img/layer/memorie8-roz.jpg">
			<ul>
				<li>•	Чехол съемный: вискоза Viscose.</li>
				<li>•	Слой в чехле матраса: Memoform 2 см.</li>
				<li>•	Слой в чехле: hypoallergenic fiber (гипоалергенная фибра).</li>
				<li>•	Основной слой: Eliosoft 5 см 5 зональный.</li>
				<li>•	Основной слой: Elioform 13 см.</li>
			</ul>
		</div>
		
	</div>
<div style="clear:both;"></div>
</div>

<div class="hnb_opis_sostava">
<span>MEMORIE 9:</span>
	<div>
		
		<p>
		Высота матраса 22 см.<br>
		Средней жесткости.<br>
		Мульти-зональный с  массажным эффектом.
		</p>
		<img itemprop="image" src="/img/layer/layer-pensiero-roz.png">
		<div>
			<img itemprop="image" src="/img/layer/memorie8-roz.jpg">
			<ul>
				<li>•	Чехол съемный: вискоза Viscose.</li>
				<li>•	Слой в чехле матраса: Memoform 2 см.</li>
				<li>•	Слой в чехле: hypoallergenic fiber (гипоалергенная фибра).</li>
				<li>•	Основной слой: Eliosoft 5 см 5 зональный.</li>
				<li>•	Основной слой: Elioform 15 см.</li>
			</ul>
		</div>
		
	</div>
<div style="clear:both;"></div>
</div>

<div style="text-align:left;">
Гарантированный срок службы: 10 лет.<br>
Поставляется в рулоне в вакуумной упаковке.<br> 
Сертифицировано ведущими организациями мира. Продается в 96 странах, на 5 континентах.
</div>
				</div>
		',
		'rec_buy' => '',
		'sizes' => array(
			array('Memorie 8 80x190',30500.00),
			array('Memorie 8 80x200',32000.00),
			array('Memorie 8 90x190',34200.00),
			array('Memorie 8 90x200',36100.00),
			array('Memorie 8 120x200',48000.00),
			array('Memorie 8 140x200',56000.00),
			array('Memorie 8 160x200',64000.00),
			array('Memorie 8 180x200',71900.00),
			array('Memorie 8 200x200',79900.00),
			array('Memorie 9 80x190',32200.00),
			array('Memorie 9 80x200',33900.00),
			array('Memorie 9 90x190',36300.00),
			array('Memorie 9 90x200',38100.00),
			array('Memorie 9 120x200',50700.00),
			array('Memorie 9 140x200',59200.00),
			array('Memorie 9 160x200',67500.00),
			array('Memorie 9 180x200',76000.00),
			array('Memorie 9 200x200',84400.00),

		),
		
		//'discount_koef' => array('date_start' => '7.12.2015', 'date_end' => '31.12.2015', 'price_koef' => 0.1, ), //скидка
		'discount_koef' => array('date_start' => '13.07.2017', 'date_end' => '10.01.2022', 'price_koef' => 0.15, ), //скидка
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
		'address' => 'Memorie-8',
		'parent_address' => 'collectio-Memorie',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-20'),
		'name' => 'Memorie 8',
		'title' => 'Матрасы Memorie - интернет-магазин Magniflex',
		'description' => 'Ортопедический матрас Memorie Магнифлекс (Magniflex) Италия. Чехол вискоза, слой memoform эффект памяти. Средней жесткости матрас. Сделано в Италии.',
		'keywords' => 'матрас, Memorie, magniflex',
		'small_desc' => '<p class="hnb_harek">
			Мульти-зональный с массажным эффектом! <br />
			Матрас средней жесткости,<br />
			Высота 20 см.<br />
		    Наполнители: Memoform, Eliosoft, Elioform.
			</p>',
		'small_img' => '/img/product/very_small/memorie-9-extra-small.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie.',
		'img' => '/img/product/big/memorie-8.jpg',
		'img_preview' => array('/img/product/big/memorie-8,9.jpg', '/img/product/big/memorie-8,9-2.jpg'),
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 20 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Средняя</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
		'advantages' => '
			<style>
				#prod_sizes{width: 136px;}
				.product_top .price{right: 219px;}
				#breadcrumbs{
					background-image: url(/img/memorial.png);
					height: 250px;
				}
				.advantages #hnb_pohtovnew li{border:none;}
				.sf_info#prod_similar_info{margin-top:10px;}
				#hnb_pohtovnew .myprice>span{
				    color: #969696;	
				}

				.newbie{
					display:block!important;
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
					<h2>КОЛЛЕКЦИЯ МАТРАСОВ MEMORIE</h2>
					
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
Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
<br><br>
Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
<br><br>
Матрас имеет массажный слой высотой 5 см - Eliosoft. Это мультизональный слой, позволяющий обеспечивать повышенный уровень комфорта и воздействовать на разные точки спящего человека с разным давлением. 5 зональный материал Eliosoft находится под слоем Мемоформ - латексной пены с эффектом памяти. Поэтому неприятного ощущения от массажного слоя при эксплуатации матраса не проявляется. 
<br><br>
Массажный матрас Memorie Magniflex Вам необходим, если у вас:
<br>
затекают мышцы,<br>
повреждены суставы,<br>
есть застойные явления крови,<br>
возникают периодические или постоянные боли в разных отделах позвоночника.<br><br>
Если вы приходите с работы усталые, не можете расслабиться, массажный матрас обязательно поможет:<br>

Он разогреет повреждённые суставы,<br>
разомнёт отёкшие мышцы,<br>
стимулирует кровообращение.<br>
Подарите себе отличное самочувствие!<br><br>

Матрас Memorie также рекомендован в следующих случаях: <br>

1. Не можете расслабиться после напряжённого рабочего дня.<br>
2. Появились боли в позвоночнике.<br>
3. При целлюлите и излишнем весе.<br>
4. Если у вас отложение солей.<br>
5. Если у вас появились головные боли.<br><br>

<span style="color:#d0121a;">матрас Memorie Magniflex сконструирован так, что идеально подходит для любого человека, он может обеспечить удобства, адаптируясь к контуру тела. Нагрузка и вес на матрас равномерно распределяется за счет специального внутреннего наполнителя. При этом вы чувствуете приятные массажирующие ощущения, которые расслабляют и дарят здоровый и крепкий сон.</span><br><br>

При покупке матраса стоит обратить внимание на то, чтобы массажный матрас дышал. То есть поддавался вентиляции. Кроме этого, он не должен допускать образование различных неприятностей:<br>

плесневых грибков,<br>
бактерий,<br>
микробов,<br>
клещей<br>
и прочего.<br><br>
<span style="color:#d0121a;">Современные технологии позволяют изготавливать такой матрас без использования синтетических клеев. Это благоприятно отражается на качестве изделия.</span><br><br>

<span style="color:#d0121a;">Необходимо обратить внимание на эластичность и упругость массажного матраса. Чем эти показатели выше, тем меньше будут ощущать дискомфорт ваши кровеносные сосуды. Они не будут передавливаться, от чего затекают иногда руки или ноги.</span><br><br>

Правильно выбранный качественный матрас выполняет следующие функции:<br>

Помогает сохранять правильную осанку тела.<br>
Снимет боль с проблемных участков.<br>
Значительно улучшает кровообращение.<br>
Очищает стенки кровеносных сосудов от шлаков.<br>
Благоприятно действует на нервную систему.<br>
Обеспечивает профилактику заболеваний.<br><br>
<span style="color:#d0121a;">Если вам некогда следить за своим здоровьем. Нет времени на занятия спортом или хождением в фитнес клубы. Бывает даже, что нет средств для личного массажиста. Тогда массажный матрас – хороший выход из положения. Массажный матрас совмещает в себе приятное и полезное воздействие на ваш организм.</span><br><br>


<br><br>			
<img style="width:40%;" src="/img/product/big/memorie-9.jpg">
<br><br>



<div class="hnb_opis_sostava">
<span>MEMORIE 8:</span>
	<div>
		
		<p>
		Высота матраса 20 см.<br>
		Средней жесткости.<br>
		Мульти-зональный с  массажным эффектом.
		</p>
		<img itemprop="image" src="/img/layer/layer-pensiero-roz.png">
		<div>
			<img itemprop="image" src="/img/layer/memorie8-roz.jpg">
			<ul>
				<li>•	Чехол съемный: вискоза Viscose.</li>
				<li>•	Слой в чехле матраса: Memoform 2 см.</li>
				<li>•	Слой в чехле: hypoallergenic fiber (гипоалергенная фибра).</li>
				<li>•	Основной слой: Eliosoft 5 см 5 зональный.</li>
				<li>•	Основной слой: Elioform 13 см.</li>
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

<div id="hnb_pohtovnew">
		<h2 class="h2_h2">К этому товару рекомендуется</h2>
			<p style="color: #d72424;">Внимание! У нас действует акция: при покупке матраса - 25% скидка на любую подушку Magniflex, c матрасами коллекции Memorie мы рекомендуем следующие модели подушек:</p>
		
			<div class="sf_info" id="prod_similar_info" style="display: block;">
				
			<div style="display:block;">
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">

			<li class="hnb_mypohli">
			<a href="/catalog/Orthopedic_pillows/memoform-superiore-deluxe-orthomassage/"><img width="185" src="/img/product/very_small/MEMOFORM ORTHOMASSAGE SUP MX-5.jpg" height="130"><br>ПОДУШКА MEMOFORM SUPERIORE DELUXE ORTHOMASSAGE</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:8 700 руб. <span>вместо 11 600  руб.</span></span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/Orthopedic_pillows/ORTHOMASSAGE/"><img width="185" src="/img/product/very_small2/Orthomassage.jpg" height="130"><br>ПОДУШКА ORTHOMASSAGE</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена: 7 200 руб. <span>вместо 9 600 руб.</span></span>
			</div>
			</li>

			</ul>
			</div>
		</div>
			</div>
		</div>
				</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Memorie 8',
		'cycle-name' => 'Ортопедический матрас Memorie 8',
		'sizes' => array(
			array('80x190',30500.00),
			array('80x200',32000.00),
			array('90x190',34200.00),
			array('90x200',36100.00),
			array('120x200',48000.00),
			array('140x200',56000.00),
			array('160x200',64000.00),
			array('180x200',71900.00),
			array('200x200',79900.00),
		),
		
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
		'parent_address' => 'collectio-Memorie',
		'parent_address2' => 'mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'other_categories' => array('orthopedic_mattresses','chehol-viscose-mattresses', 'material-memoform-mattresses', 'material-memogel-mattresses','vacuum-mattresses', 'mattresses-filter','srednie-mattresses', 'height-22-26'),
		'name' => 'Memorie 9',
		'title' => 'Матрасы Memorie - интернет-магазин Magniflex',
		'description' => 'Ортопедический матрас Memorie Магнифлекс (Magniflex) Италия. Чехол вискоза, слой memoform эффект памяти. Средней жесткости матрас. Сделано в Италии.',
		'keywords' => 'матрас, Memorie, magniflex',
		'small_desc' => '<p class="hnb_harek">
			Мульти-зональный с массажным эффектом! <br />
			Матрас средней жесткости,<br />
			Высота 22 см.<br />
		    Наполнители: Memoform, Eliosoft, Elioform.
			</p>',
		'small_img' => '/img/product/very_small/memorie-9-extra-small.jpg',
		'small_img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie.',
		'img' => '/img/product/big/memorie-9.jpg',
		'img_preview' => array('/img/product/big/memorie-8,9.jpg', '/img/product/big/memorie-8,9-2.jpg'),
		'img_alt' => 'Итальянский ортопедический матрас Magniflex Memorie',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота:  22 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Степень жесткости: Средняя</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka/" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata/" target="_blank">оплата</a>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 10 лет</li></ul><br>
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
		'advantages' => '
			<style>
				#prod_sizes{width: 136px;}
				.product_top .price{right: 219px;}
				#breadcrumbs{
					background-image: url(/img/memorial.png);
					height: 250px;
				}
				.advantages #hnb_pohtovnew li{border:none;}
				.sf_info#prod_similar_info{margin-top:10px;}
				#hnb_pohtovnew .myprice>span{
				    color: #969696;	
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
					<h2>КОЛЛЕКЦИЯ МАТРАСОВ MEMORIE</h2>
					
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
Вискоза также не электризуется. Вискоза является очень дышащим материалом и не вызывает аллергии.
<br><br>
Современная вспененная латексная пена Elioform Magniflex обладает мелкопористой структурой и высокой плотностью, за счет чего материал обладает повышенными свойствами циркуляции воздуха и большим сроком службы. При эксплуатации матраса при воздействии на него с какой-либо стороны воздух выдувает все внутренние пылевые и другие элементы, гарантируя защиту от появления пылевых клещей.
<br><br>
Матрас имеет массажный слой высотой 5 см - Eliosoft. Это мультизональный слой, позволяющий обеспечивать повышенный уровень комфорта и воздействовать на разные точки спящего человека с разным давлением. 5 зональный материал Eliosoft находится под слоем Мемоформ - латексной пены с эффектом памяти. Поэтому неприятного ощущения от массажного слоя при эксплуатации матраса не проявляется. 
<br><br>
Массажный матрас Memorie Magniflex Вам необходим, если у вас:
<br>
затекают мышцы,<br>
повреждены суставы,<br>
есть застойные явления крови,<br>
возникают периодические или постоянные боли в разных отделах позвоночника.<br><br>
Если вы приходите с работы усталые, не можете расслабиться, массажный матрас обязательно поможет:<br>

Он разогреет повреждённые суставы,<br>
разомнёт отёкшие мышцы,<br>
стимулирует кровообращение.<br>
Подарите себе отличное самочувствие!<br><br>

Матрас Memorie также рекомендован в следующих случаях: <br>

1. Не можете расслабиться после напряжённого рабочего дня.<br>
2. Появились боли в позвоночнике.<br>
3. При целлюлите и излишнем весе.<br>
4. Если у вас отложение солей.<br>
5. Если у вас появились головные боли.<br><br>

<span style="color:#d0121a;">матрас Memorie Magniflex сконструирован так, что идеально подходит для любого человека, он может обеспечить удобства, адаптируясь к контуру тела. Нагрузка и вес на матрас равномерно распределяется за счет специального внутреннего наполнителя. При этом вы чувствуете приятные массажирующие ощущения, которые расслабляют и дарят здоровый и крепкий сон.</span><br><br>

При покупке матраса стоит обратить внимание на то, чтобы массажный матрас дышал. То есть поддавался вентиляции. Кроме этого, он не должен допускать образование различных неприятностей:<br>

плесневых грибков,<br>
бактерий,<br>
микробов,<br>
клещей<br>
и прочего.<br><br>
<span style="color:#d0121a;">Современные технологии позволяют изготавливать такой матрас без использования синтетических клеев. Это благоприятно отражается на качестве изделия.</span><br><br>

<span style="color:#d0121a;">Необходимо обратить внимание на эластичность и упругость массажного матраса. Чем эти показатели выше, тем меньше будут ощущать дискомфорт ваши кровеносные сосуды. Они не будут передавливаться, от чего затекают иногда руки или ноги.</span><br><br>

Правильно выбранный качественный матрас выполняет следующие функции:<br>

Помогает сохранять правильную осанку тела.<br>
Снимет боль с проблемных участков.<br>
Значительно улучшает кровообращение.<br>
Очищает стенки кровеносных сосудов от шлаков.<br>
Благоприятно действует на нервную систему.<br>
Обеспечивает профилактику заболеваний.<br><br>
<span style="color:#d0121a;">Если вам некогда следить за своим здоровьем. Нет времени на занятия спортом или хождением в фитнес клубы. Бывает даже, что нет средств для личного массажиста. Тогда массажный матрас – хороший выход из положения. Массажный матрас совмещает в себе приятное и полезное воздействие на ваш организм.</span><br><br>


<br><br>			
<img style="width:40%;" src="/img/product/big/memorie-9.jpg">
<br><br>





<div class="hnb_opis_sostava">
<span>MEMORIE 9:</span>
	<div>
		
		<p>
		Высота матраса 22 см.<br>
		Средней жесткости.<br>
		Мульти-зональный с  массажным эффектом.
		</p>
		<img itemprop="image" src="/img/layer/layer-pensiero-roz.png">
		<div>
			<img itemprop="image" src="/img/layer/memorie8-roz.jpg">
			<ul>
				<li>•	Чехол съемный: вискоза Viscose.</li>
				<li>•	Слой в чехле матраса: Memoform 2 см.</li>
				<li>•	Слой в чехле: hypoallergenic fiber (гипоалергенная фибра).</li>
				<li>•	Основной слой: Eliosoft 5 см 5 зональный.</li>
				<li>•	Основной слой: Elioform 15 см.</li>
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
<div id="hnb_pohtovnew">
		<h2 class="h2_h2">К этому товару рекомендуется</h2>
			<p style="color: #d72424;">Внимание! У нас действует акция: при покупке матраса - 25% скидка на любую подушку Magniflex, c матрасами коллекции Memorie мы рекомендуем следующие модели подушек:</p>
		
			<div class="sf_info" id="prod_similar_info" style="display: block;">
				
			<div style="display:block;">
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">

			<li class="hnb_mypohli">
			<a href="/catalog/Orthopedic_pillows/memoform-superiore-deluxe-orthomassage/"><img width="185" src="/img/product/very_small/MEMOFORM ORTHOMASSAGE SUP MX-5.jpg" height="130"><br>ПОДУШКА MEMOFORM SUPERIORE DELUXE ORTHOMASSAGE</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:8 700 руб. <span>вместо 11 600  руб.</span></span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/Orthopedic_pillows/ORTHOMASSAGE/"><img width="185" src="/img/product/very_small2/Orthomassage.jpg" height="130"><br>ПОДУШКА ORTHOMASSAGE</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена: 7 200 руб. <span>вместо 9 600 руб.</span></span>
			</div>
			</li>

			</ul>
			</div>
		</div>
					</div>
		</div>
				</div>
		',
		'rec_buy' => '',
		'cycle-title' => 'Ортопедические матрасы Magniflex Memorie 9',
		'cycle-name' => 'Ортопедический матрас Memorie 9',
		'sizes' => array(
			array('80x190',32200.00),
			array('80x200',33900.00),
			array('90x190',36300.00),
			array('90x200',38100.00),
			array('120x200',50700.00),
			array('140x200',59200.00),
			array('160x200',67500.00),
			array('180x200',76000.00),
			array('200x200',84400.00),

		),
		
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
		'address' => 'ortopedicheskoe-osnovanie-lux',
		'parent_address' => 'ortopedicheskie-reshetky',
		'parent_address2' => 'bases',
		'parent_name' => 'Аксессуары',
		'name' => 'Ортопедическое основание "ЛЮКС"',
		'title' => 'Ортопедическое основание "ЛЮКС"',
		'description' => 'фотографии, описание, характеристики Ортопедическое основание "ЛЮКС"',
		'keywords' => 'ортопедическое основание, ортопедическая решетка, Ортопедическое основание "ЛЮКС"',
		'small_desc' => '<p class="hnb_harek">двойная ламель. <br>
			Высота основания 290-300 мм.<br>
			Высота ножки 250-260 мм.<br>
			Максимальный вес спящего: 200 кг. <br>
			Гарантия: 3 года  </p>',
		'small_img' => '/img/product/small/ortop_base_lux_small.jpg',
		'small_img_alt' => 'Ортопедическое основание "ЛЮКС" ',
		'img' => '/img/product/big/ortop_base_lux.jpg',
		'img_alt' => 'Ортопедическое основание решетка "ЛЮКС" ',
		'attr' => '
			<ul>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота основания 290-300 мм.</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота ножки 250-260 мм.</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок доставки: завтра для Москвы</li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Максимальный вес спящего: 200 кг. </li>
				<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Гарантия: 3 года</li></ul><br>
			
			
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
			array('80x200',5790.00),
			array('90x200',5590.00),
			array('120x200',7590.00),
			array('140x200',8590.00),
			array('160x200',9590.00),
			array('180x200',10590.00),
			array('200x200',11490.00),
			
		),
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


?>
