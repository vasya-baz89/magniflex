<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

$get_breadcrumbs_product = function($item){
	$breadcrumbs_ret = array(array('Главная','/'));
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

function is_discount_koef($product, $need_size){
	$_is_discount_koef = false;
	
	if(!isset($product['discount_koef'])) return false;
	
	if(isset($product['discount_koef']['date_start']) && isset($product['discount_koef']['date_end'])){
		if(strtotime($product['discount_koef']['date_start']) > time() || strtotime($product['discount_koef']['date_end'])+24*3600 < time()){
			return false;
		}
	}
	if($product['sizes'] && $product['discount_koef']['sizes']){
		$old_price_sizes = false;
		foreach($product['sizes'] as $size){
			foreach($product['discount_koef']['sizes'] as $discount_size){
				if($size[0] == $discount_size && ($size[0] == $need_size || !$need_size)){
					$old_price_sizes = true; break;
				}
			}
		}
		if(!$old_price_sizes) return false;
	}
	
	if(isset($product['discount_koef']['price_koef'])){
		if($product['discount_koef']['price_koef'] > 0 && $product['discount_koef']['price_koef'] < 1){
			$_is_discount_koef = true;
		}
	}
	
	return $_is_discount_koef;
}

function is_discount_newprice($product, $need_size){
	$_is_discount_koef = false;
	
	if(!isset($product['discount_koef'])) return false;
	
	if(isset($product['discount_koef']['prices'])){
		if($product['sizes'] && $product['discount_koef']['sizes']){
			$old_price_sizes = false;
			foreach($product['sizes'] as $size){
				foreach($product['discount_koef']['sizes'] as $discount_size){
					if($size[0] == $discount_size && $product['discount_koef']['prices'][$size[0]] > 0 && ($size[0] == $need_size || !$need_size)){
						return true;
					}
				}
			}
			if(!$old_price_sizes) return false;
		}
		
		if(!is_array($product['discount_koef']['prices']) && $product['price']){
			if($product['discount_koef']['prices'] > 0 && intval($product['discount_koef']['prices']) < intval($product['price'])){
				$_is_discount_koef = true;
			}
		}
		
	}
	
	return $_is_discount_koef;
}

$products = array(
	/* Ортопедические матрасы */
	array(
		'address' => 'MERINOS',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Merino (Merinos)',
		'title' => 'Матрас Magniflex Merinos на официальном сайте Магнифлекс! Magniflex Merino (меринос)',
		'description' => 'Матрас из настощей шерсти мериноса. Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex merino и  merinos по самым выгодным ценам!',
		'keywords' => 'magniflex merino, magniflex merinos, магнифлекс мерино, меринос, купить magniflex merino',
		'small_desc' => '
			<span class="hnb_popular">
				Самый популярный
				</span>
				<p class="hnb_harek">
				Самый популярный ортопедический матрас из коллекции Magniflex в России. Двусторонний: "зима-лето".<br />
				Высота: 16 см<br />
				Наполнитель: Eliocel 40<br />
				Изготовлен в ИТАЛИИ.
               </p>
		',
		'small_img' => '/img/product/very_small/Merino (Merinos).jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/Merino (Merinos).jpg',
		'img_alt' => 'тут альт для картинок',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">
			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 16 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: достаточно жесткий</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>
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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
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
			<div style="bottom:0;top:inherit;  left: 0;" id="med-cookies">
			<span style="position:absolute;font-size:12px;right:10px;right: 20px;margin-top: 10px;text-decoration: underline;cursor: pointer" onclick="document.getElementById(\'med-cookies\').style.display=\'none\';">Свернуть</span>
			<!---<div style="width: 75%;" class="med-cookies-inside">
				
				<a class="hnb_optop" href="/skidki-merinos/"></a>
				
				<div>ВЫБИРАЕТЕ MERINO?</div>
Присмотритесь к матрасу <a style=" color:#fff;" href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/">Magniflex Bamboo</a>! <span style="color:#f0e309;">В июле на него 20% скидка - выйдет ДЕШЕВЛЕ, чем Merino!</span> <br>
По свойствам Bamboo схож с Merino, но классом выше.<br><br> <a href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/" class="med-cookie-accept">Подробности</a></div>--></div>
			<div class="hnb_contmy">

				<div class="hnb_contcenter">
				
<!--			<h1>Акция! Скидка 25%! Всего 3 недели: с 9 по 30 июня!</h1>
			
     		СКИДКА 25% распространяется только на размеры: 90х200, 160х200, 180х200<br /> <br />
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
						90x200
					</td>
					<td style="text-decoration: line-through;">
						17 600 руб 
					</td>
					<td>
						13 200 руб
					</td>

					<td>
						<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'90x200\', 1)" alt="Купить матрас MERINO MAGNIFLEX 90х200">Купить</a>
					</td>
				</tr>
				
				<tr>
					<td>
						160x200
					</td>
					<td style="text-decoration: line-through;">
						29 500 руб
					</td>
					<td>
						22 125 руб
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
						33 000 руб 
					</td>
					<td>
						24 750 руб
					</td>

					<td>
						<a href="javascript:add_to_cart($(\'#product h1:eq(0)\').text(), \'180x200\', 1)" alt="Купить матрас MERINO MAGNIFLEX 180х200">Купить</a>
					</td>
				</tr>
			</table>
			<br /> <br /><br />
				<img src="/img/product/rosprodaja25proc.jpg" alt="25% скидка на матрас" /><br />
     		
            БЕСПЛАТНАЯ ДОСТАВКА ПО МОСКВЕ!<br />
            ПОДЪЕМ НА ЭТАЖ БЕСПЛАТНО!<br /><br />	
            

			<br />
			<br />
			<hr />
			<br />	
				
				
-->				
				
				
				
			<h1>Ортопедический матрас Magniflex Merino</h1>
			Модель Merino (или Magniflex Merinos) - это ортопедический матрас, созданный в Италии еще 20 лет назад. Модель настолько популярная и удачная, что выпускается до сих пор с незначительными улучшениями. Матрас практичный, износостойкий (срок реальной эксплуатации превышает 12 лет) изготавливается  из натуральных компонентов (в том числе используется натуральный латекс, прошедший специальную обработку) на уровне самой современной технологии. В  разработке принимали участие ведущие итальянские врачи-ортопеды совместно со специалистами лаборатории Magniflex. Модель создавалась для тех, кому важен максимальный ортопедический эффект. 


			<br /><br />

			<div id="coin-slider">
					
								<a href="#" target="_blank">
									<img src="/img/Merino-4.jpg" alt="матрас magniflex merino фактура" />

								</a>
								
								<a href="#" target="_blank">
									<img src="/img/Merino-8.jpg" alt="матрас magniflex merino бортик" />
								</a>
								
													<a href="#" target="_blank">
									<img src="/img/Merino-6.jpg" alt="матрас magniflex merino поверхность" />
								</a>
								
							</div>
			<br /><br />
			<hr />
			<br />
			<h1>Дышащий, практичный, ортопедический!</h1>
			Внутренний слой матраса Magniflex Merinos состоит из сверхупругого, износостойкого, высокотехнологического материала ELIOCEL 40 (Элиочел), производящегося из натурального латекса. Благодаря его использованию матрац становится "дышащим" (то есть пропускает воздух сквозь себя, легко выводит влагу, запахи, обеспечивая высокий уровень гигиены), а также хорошо приспосабливается к форме тела. Матрас не деформируется, позволяет телу принять идеальное положение для отдыха, которое рекомендуют врачи-ортопеды, не жертвуя при этом удобством. <br>
					<br />
			<br />
			<hr />
			<br />

			<h1>Летняя сторона - натуральный хлопок, зимняя - шерсть мериноса</h1>
			Магнифлекс меринос имеет "летнюю" и "зимнюю" стороны. Летняя сторона изготовлена из чистого хлопка, зимняя - из шерсти тонкорунного мериноса. <br /> 
			Шерстяное покрытие оказывает оздоравливающее воздействие: через рецепторы кожи обеспечивается рефлекторно-анальгизирующее действие при болях, вызванных радикулитом, невралгиями или миозитом. <br />

			Для достижения наилучшего комфорта во время отдыха (сна) достаточно перевернуть матрас в зависимости от погодных условий. 


			<br /><br />
			<div id="coin-slider2">
					
								<a href="#" target="_blank">
									<img src="/img/oveshmerinos.png"" alt="шерсть мериноса" />
			<span>
			Шерсть только от самых ласковых мериносов
							</span>
								</a>
								
								<a href="#" target="_blank">
									<img src="/img/Merino-Bamboo-5.jpg" alt="матрас magniflex merino зимняя сторона шерсть" />
			<span>
			Зимняя сторона - 100% шерсть
							</span>
								</a>
								
													<a href="#" target="_blank">
									<img src="/img/Merino-4.jpg" alt="матрас magniflex merino" />
			<span>
			 Летняя сторона - 100% натуральный хлопок
							</span>
								</a>
								
							</div>

			<hr />
			<br />
			<h1>Порой просто нет другой Альтернативы</h1>
			Если Вы выбираете недорогой, но качественный ортопедический матрас - остановитесь на Magniflex Merino. <br />
			 Время показало - ему нет равных в своей ценовой категории! <br />
			За двадцать лет этот матрас стал настоящей классикой жанра, общепризнанным стандартом качества. Мы не получили ни одной жалобы или претензии, и Вы не найдете в интернете ни одного негативного отзыва за два десятилетия продаж.
			<br />
					
				</div>

			</div><br />
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlefsostav">

					 <img src="/img/merino.jpg" alt="" />

				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br /><br />
			<b>СОСТАВ МАТРАСА MAGNIFLEX MERINO MERINOS</b><br /><br />

			ТОЛЬКО натуральные экологически чистые ткани и материалы<br><br><br>

			1 - Зимняя сторона: <a href="/magniflex/fabric-and-treatments#merinos">шерсть тонкорунного мериноса</a><br /><br />
			2 - Антистатическая прослойка<br /><br />
			3 - Гиппоаллергенный терморегулирующий слой<br /><br />
			4 - Слой <a href="/magniflex/inner-plates#eliocel">Eliocel 40 </a> (1 см)<br /><br />
			5 - Изоляционная ткань<br /><br />
			6 - Основной слой: <a href="/magniflex/inner-plates#eliocel">ELIOCEL 40</a>  <br /><br />
			7 - Летняя сторона: 100% <a href="/magniflex/fabric-and-treatments#coton">натуральный хлопок</a>
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
				Сертифицировано в 70-ти странах мира!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
				<a href="/catalog/mattresses/MERINO-GREEN-TEA/"><img width="185" src="/img/product/very_small2/Merino Green Tea.jpg" height="130"><br />Merino Green Tea</a><br>
				<div class="hnb_mypohliconttext">
				<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
				</div>
				</li>
				<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-BAMBOO/"><img width="185" src="/img/product/very_small2/Bamboo.jpg" height="130"><br />Bamboo</a>
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
			
				<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-GREEN-TEA/"><img width="185" src="/img/product/very_small2/Merino Green Tea.jpg" height="130"><br />Merino Green Tea</a>
				<br>
				<div class="hnb_mypohliconttext">
				<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
				</div>
				</li>
				<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-BAMBOO/"><img width="185" src="/img/product/very_small2/Bamboo.jpg" height="130"><br />Bamboo</a>
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
			
				<li class="hnb_mypohli"><a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Memo Merino</a>
				<br>
				<div class="hnb_mypohliconttext">
				<span class="myprice">цена:от <!--{min_price|"Memo Merino"}--> руб</span>
				</div>
				</li>
				<li class="hnb_mypohli"><a href="/catalog/mattresses/WATERLATTEX/"><img width="185" src="/img/product/very_small2/WaterLattex.jpg" height="130"><br />WaterLattex</a>
				<br>
				<div class="hnb_mypohliconttext">
				<span class="myprice">цена:от <!--{min_price|"WaterLattex"}--> руб</span>
				</div>
				</li>
				<li class="hnb_mypohli"><a href="/catalog/mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/New NaturComfort.jpg" height="130"><br />New NaturComfort</a>
				<br>
				<div class="hnb_mypohliconttext">
				<span class="myprice">цена:от <!--{min_price|"New NaturComfort"}--> руб</span>
				</div>
				</li>

			</ul>
			</div>
		',

		'sizes' => array(
			array('60x120',7200.00),
			array('70x140',9600.00), 
			array('70x190',12500.00),
			array('75x190',13300.00),
			array('80x190',13800.00),
			array('80x195',15200.00),
			array('80x200',15700.00),
			array('85x190',15200.00),
			array('85x200',16500.00),
			array('90x190',15900.00),
			array('90x195',16500.00),
			array('90x200',17600.00),
			array('95x190',16700.00),
			array('95x195',17600.00),
			array('100x190',17600.00),
			array('100x200',19100.00),
			array('110x190',19200.00),
			array('110x195',20700.00),
			array('110x200',21000.00),
			array('120x190',21000.00),
			array('120x195',21600.00),
			array('120x200',21800.00),
			array('130x190',22400.00),
			array('130x200',23700.00),
			array('135x190',23400.00),
			array('135x200',23900.00),			
			array('140x190',25300.00),
			array('140x195',25500.00),
			array('140x200',25800.00),
			array('150x190',25800.00),
			array('150x200',27700.00),
			array('160x190',27900.00),
			array('160x195',28700.00),			
			array('160x200',29500.00),
			array('160x205',31900.00),
			array('160x210',32500.00),
			array('165x190',28800.00),
			array('165x195',29500.00),
			array('165x200',30400.00),
			array('170x190',29600.00),
			array('170x200',31400.00),
			array('180x190',31400.00),
			array('180x195',32200.00),
			array('180x200',33000.00),
			array('180x205',36000.00),
			array('180x210',36500.00),
			array('190x200',37500.00),
			array('200x200',39200.00),
		),
		
		//'discount_koef' => array('price_koef' => 0.25, 'date_start' => '9.6.2015', 'date_end' => '30.6.2015',
			
			//'sizes' => array('90x200', '160x200', '180x200'),
		//), //скидка 25% на некоторые размеры с 9 по 30 июня 2015
		
		'yml_desc' => '
			Матрас практичный, износостойкий (срок реальной эксплуатации превышает 12 лет) изготавливается из натуральных компонентов (в том числе используется натуральный латекс, прошедший специальную обработку) на уровне самой современной технологии. В разработке принимали участие ведущие итальянские врачи-ортопеды совместно со специалистами лаборатории Magniflex. Модель создавалась для тех, кому важен максимальный ортопедический эффект. Уровень комфорта: достаточно жесткий. Срок службы: не менее 12 лет. вакуумная упаковка. Летняя сторона - натуральный хлопок, зимняя - шерсть мериноса 
		',
		'yml_torgmail' => true,
		
		
	),
	array(
		'address' => 'MERINO-GREEN-TEA',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Merino Green Tea',
		'title' => 'Матрас Merino Green Tea на официальном сайте Магнифлекс',
		'description' => 'Официальный сайт и Интернет Магазин Magniflex. У нас можно купить ортопедические матрас magniflex merino green tea по самым выгодным ценам!',
		'keywords' => 'magniflex merino green tea, магнифлекс грин ти, матрас зеленый чай',
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
		'img_alt' => '',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 16 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: умеренно жесткий</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
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

			<h1>Итальянский ортопедический матрас</h1>
			Модель Magniflex MERINO GREEN TEA - превосходный ортопедический матрас, произведенный в Италии на фирменном заводе Магнифлекс. <br />
			Главная отличительная особенность - изумительные антисептические свойства и тонкий аромат зеленого чая. <br />
			В основе используется инновационный материал - ELIOCEL 60 (Элиочел), позволяющий равномерно перераспределить нагрузку позвоночника, достичь максимального эффекта выравнивания позвонков.
			<br><br>
			<a href="//www.youtube.com/embed/_7caESGNHI8" class="boxer_video">
				<img src="/img/merino green tee video.jpg" alt="" />
			</a>
			<br><br>

			<hr />
			<br>
			<h1>Экстракт зеленого чая</h1>
			Ткань чехла матраса пропитана экстрактом натурального зеленого чая, в результате чего приобретает свойства его активных компонентов, оказывает сильное расслабляющее действие на организм человека, способствуя полноценному сну.  Благодаря активным элементам зеленого чая обладает исключительными антисептическими свойствами. Согласно исследованиям ученых, пропитанная экстрактом зеленого чая ткань позволяет полезным веществам проникать в организм человека, оказывая благоприятное воздействие, улучшая качество отдыха.
			 <br><br>
			<div id="coin-slider">
					
								<a href="#" target="_blank">
									<img src="/img/magniflex-green-tea-1.jpg" alt="Зеленый чай - сердце матраса Green Tea Magniflex" />

								</a>
								
								<a href="#" target="_blank">
									<img src="/img/magniflex-green-tea-3.jpg"  alt="чехол матраса Green Tea Magniflex"/>
								</a>
													
							</div>



			<hr />
			<br>

			<h1>Летняя сторона - натуральный хлопок, зимняя - шерсть мериноса</h1>
			Матрас Merino Green Tea имеет "летнюю" и "зимнюю" стороны. Летняя сторона - эластичная терморегулирующая ткань из 100% хлопка с пропиткой экстрактом зеленого чая. Зимняя производится из шерсти тонкорунного мериноса. Шерстяное покрытие действует на рецепторы кожи обеспечивая рефлекторно-анальгизирующее действие при болях, вызванных миозитом, радикулитом, невралгиями. 

			<br><br>
			<div id="coin-slider2">
					
								<a href="#" target="_blank">
									<img src="/img/product/other/cotton.jpg"" alt="хлопок"/>
			<span>
			Летняя сторона - мягкий натуральный хлопок
							</span>
								</a>
								
								<a href="#" target="_blank">
									<img src="/img/product/other/magniflex-green-tea-2.jpg" alt="летняя сторона матраса Green Tea Magniflex" />
			<span>
			Фрагмент летней стороны
							</span>
								</a>
								
													<a href="#" target="_blank">
									<img src="/img/product/other/oveshmerinos.png" alt="шерсть мериноса" />
			<span>
			 Зимняя стороны  - 100% шерсть тонкорунных мериносов
							</span>
								</a>
								
								<a href="#" target="_blank">
									<img src="/img/product/other/merinos.jpg"  alt="зимняя сторона матраса Green Tea Magniflex"/>
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

					 <img src="/img/greentea.jpg">

				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX MERINO GREEN TEA</b><br><br>

			ТОЛЬКО натуральные экологически чистые ткани и материалы<br><br><br>

			1 - Зимняя сторона: шерсть тонкорунного мериноса<br><br>
			2 - Антистатическая прослойка<br><br>
			3 - Гиппоаллергенный терморегулирующий слой<br><br>
			4 - Слой Eliocel 60  (1 см)<br><br>
			5 - Изоляционная ткань<br><br>
			6 - Основной слой: ELIOCEL 60  <br><br>
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
				Сертифицировано в 70-ти странах мира! <br>
					
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
				<a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Merino Green Tea</a><br>
				<div class="hnb_mypohliconttext">
				<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
				</div>
				</li>
				<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-BAMBOO/"><img width="185" src="/img/product/very_small2/Bamboo.jpg" height="130"><br />Bamboo</a>
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
				<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINOS/"><img width="185" src="/img/product/very_small2/Merino (Merinos).jpg" height="130"><br />Merino (Merinos)</a>
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
				<li class="hnb_mypohli"><a href="/catalog/mattresses/WATERLATTEX/"><img width="185" src="/img/product/very_small2/WaterLattex.jpg" height="130"><br />WaterLattex</a>
				<br>
				<div class="hnb_mypohliconttext">
				<span class="myprice">цена:от <!--{min_price|"WaterLattex"}--> руб</span>
				</div>
				</li>
				<li class="hnb_mypohli"><a href="/catalog/mattresses/natur-baci-mattress/"><img width="185" src="/img/product/very_small2/Natur Baci.jpg" height="130"><br />Natur Baci</a>
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
				<li class="hnb_mypohli"><a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Memo Merino</a>
				<br>
				<div class="hnb_mypohliconttext">
				<span class="myprice">цена:от <!--{min_price|"Memo Merino"}--> руб</span>
				</div>
				</li>
				<li class="hnb_mypohli"><a href="/catalog/mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/New NaturComfort.jpg" height="130"><br />New NaturComfort</a>
				<br>
				<div class="hnb_mypohliconttext">
				<span class="myprice">цена:от <!--{min_price|"New NaturComfort"}--> руб</span>
				</div>
				</li>

			</ul>
			</div>
		',
		'rec_buy' => '',
		'sizes' => array(
			array('80x190',16700.00),
			array('80х200',17600.00),
			array('90х190',18600.00),
			array('90х200',19700.00),
			array('120х190',25300.00),
			array('120x200',26400.00),
			array('140x190',29300.00),
			array('140x200',30600.00),
			array('150x190',31200.00),
			array('150x200',32800.00),
			array('160x190',33500.00),
			array('160x200',34900.00),
			array('180x200',39200.00),
			array('200x200',43700.00),
		),
		
		
		'yml_desc' => '
			Модель Magniflex Merino Green Tea - превосходный вакуумный матрас, произведенный в Италии на фирменном заводе Магнифлекс. Главная отличительная особенность - изумительные антисептические свойства и тонкий аромат зеленого чая. В основе используется инновационный материал - ELIOCEL 60 (Элиочел), позволяющий равномерно перераспределить нагрузку позвоночника, достичь максимального эффекта выравнивания позвонков. Уровень комфорта: умеренно жесткий. Срок службы: не менее 12 лет. Летняя сторона - натуральный хлопок, зимняя - шерсть мериноса 
		',
		'yml_torgmail' => true,
		
		
	),
	array(
		'address' => 'MERINO-BAMBOO',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Bamboo',
		'title' => 'Ортопедический матрас Magniflex Merino Bamboo: описание, отзывы, самые низкие цены',
		'description' => 'Официальный сайт и Интернет Магазин Магнифлекс. У нас можно купить ортопедические матрасы magniflex merino bamboo по самым выгодным ценам!',
		'keywords' => 'magniflex merino bamboo, магнифлекс бамбу, merino bamboo отзывы',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 17 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: умеренно жесткий</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
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

					 <img src="/img/bamboo.jpg">

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
				Сертифицировано в 70-ти странах мира! <br>
					
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
			<a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Merino Green Tea</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/New NaturComfort.jpg" height="130"><br />New NaturComfort</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"New NaturComfort"}--> руб</span>
			</div>
			</li>

			</ul>
			</div>
		',
		'tougher' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINOS/"><img width="185" src="/img/product/very_small2/Merino (Merinos).jpg" height="130"><br />Merino (Merinos)</a>
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
			<li class="hnb_mypohli"><a href="/catalog/mattresses/WATERLATTEX/"><img width="185" src="/img/product/very_small2/WaterLattex.jpg" height="130"><br />WaterLattex</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"WaterLattex"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/natur-baci-mattress/"><img width="185" src="/img/product/very_small2/Natur Baci.jpg" height="130"><br />Natur Baci</a>
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
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Memo Merino</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Memo Merino"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/New NaturComfort.jpg" height="130"><br />New NaturComfort</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"New NaturComfort"}--> руб</span>
			</div>
			</li>

			</ul>
			</div>
		',
		'rec_buy' => '',
		'sizes' => array(
			array('60x120',9000.00),
			array('70x140',12200.00),
			array('80x190',18600.00),
			array('80x200',19700.00),
			array('90x190',20800.00),
			array('90x200',22000.00),
			array('120x190',28000.00),
			array('120x200',29500.00),
			array('140x190',32700.00),
			array('140x200',34300.00),
			array('150x190',34900.00),
			array('150x200',36700.00),
			array('160x190',37300.00),
			array('160x195',38100.00),
			array('160x200',39100.00),
			array('180x200',43900.00),
			array('200x200',48800.00),
		),
		
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
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'WaterLattex',
		'title' => 'Матрас WaterLattex. Официальный сайт Magniflex. Описание, отзывы, самые низкие цены',
		'description' => 'Описание, фотографии, состав ортопедического матраса Magniflex WaterLattex',
		'keywords' => 'waterlattex, waterlatex, вотерлатекс, итальянский матрас, итальянские матрасы, magniflex merinos, матрас магнифлекс,  матрас magniflex,, ортопедический матрас',
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
		'img_alt' => 'картинка - ортопедический матрас WaterLattex',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 18 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: средней мягкости, комфортный</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
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
					
								<a href="#" target="_blank">
									<img  src="/img/magniflex-waterlattex2.jpg" alt="матрас Waterlattex - летняя сторона" style="width: 640 px;">
			<span>
			Летняя сторона - мягкий натуральный хлопок
							</span>
								</a>
								
								<a href="#" target="_blank">
									<img src="/img/magniflex-waterlattex3.jpg" alt="зимняя сторона матраса Waterlattex" />
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

					 <img src="/img/product/other/water.jpg">

				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX WATERLATTEX</b><br><br>

			ТОЛЬКО натуральные экологически чистые ткани и материалы<br><br><br>

			1 - Терморегулирующая ткань, Teflon<br><br>
			2 - Антистатическая прослойка<br><br>
			3 - Гиппоаллергенный терморегулирующий слой<br><br>
			4 - Изоляционная ткань<br><br>
			5 - Наполнитель Waterlattex<br><br>
			6 - Терморегулирующая ткань,  Teflon<br><br>
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
				Сертифицировано в 70-ти странах мира!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
			<a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Merino Green Tea</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-BAMBOO/"><img width="185" src="/img/product/very_small2/Bamboo.jpg" height="130"><br />Bamboo</a>
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
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-GREEN-TEA/"><img width="185" src="/img/product/very_small2/Merino Green Tea.jpg" height="130"><br />Merino Green Tea</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-BAMBOO/"><img width="185" src="/img/product/very_small2/Bamboo.jpg" height="130"><br />Bamboo</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Bamboo"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINOS/"><img width="185" src="/img/product/very_small2/Merino (Merinos).jpg" height="130"><br />Merino (Merinos)</a>
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
			<li class="hnb_mypohli"><a href="/catalog/mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/New NaturComfort.jpg" height="130"><br />New NaturComfort</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"New NaturComfort"}--> руб</span>
			</div>
			</li>

			</ul>
			</div>
		',
		'comfort' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli"><a href="/catalog/mattresses/natur-baci-mattress/"><img width="185" src="/img/product/very_small2/Natur Baci.jpg" height="130"><br />Natur Baci</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Natur Baci"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Memo Merino</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Memo Merino"}--> руб</span>
			</div>
			</li>

			</ul>
			</div>
		',
		'rec_buy' => '',
		'sizes' => array(
			array('80x190',25000.00),
			array('80х200',26300.00),
			array('90х190',28000.00),
			array('90х200',29600.00),
			array('120х190',37500.00),
			array('120x200',39200.00),
			array('140x190',43400.00),
			array('140x200',45800.00),
			array('160x190',49800.00),
			array('160x195',51100.00),
			array('160x200',52500.00),
			array('165x200',54100.00),
			array('180х190',56000.00),
			array('180x195',57600.00),
			array('180x200',59100.00),
			array('200x200',65600.00),
		),
		
	),
	array(
		'address' => 'NEW-NATURCOMFORT',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'New NaturComfort',
		'title' => 'Итальянский ортопедический матрас Magniflex New NaturComfort в Официальном интернет магазин Магнифлекс.',
		'description' => 'Описание, фотографии, состав ортопедического матраса New NaturComfort',
		'keywords' => 'New NaturComfort, итальянский матрас, итальянские матрасы, матрас магнифлекс,  матрас magniflex, ортопедический матрас',
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
		'small_img_alt' => 'картинка - матрас New NaturComfort',
		'img' => '/img/product/big/New NaturComfort.jpg',
		'img_alt' => 'картинка - матрас New NaturComfort',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 22 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: умеренно мягкий, комфортный</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Модель Magniflex New Naturcomfort - это настоящий ортопедический матрас. Узнать подробности?</div></li>
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

			Magniflex New Naturcomfort дарит исключительный комфорт во время сна. Даже если просто прикоснуться к нему рукой, непременно ощущаешь необыкновенную мягкость, "бархатность" поверхности матраса. Этот волшебный эффект ему придают древесные волокна, входящие в состав тканей и материалов. 
			<br /><br />

			<b>Ткань Lenpur</b>
			Верхняя поверхность матраса изготавливается из ткани с технологией Lenpur ("ленпур"). Это необычайно мягкий и эластичный материал, созданный из натурального природного волокна, сотканного из тонких нитей белой пихты. Мягкость Lenpur сравнима с кашемиром, а благодаря специальной обработке приобретает массу полезных свойств: быстро и эффективно испаряет влагу (значительно лучше хлопковой ткани), обеспечивает идеальный теплообмен с телом человека, обладает великолепными бактериостатическими, абсорбирующими свойствами, позволяющими быстро удалять посторонние запахи. Часто этот материал применяется в изготовлении профессиональной спортивной одежды. 
			<br /><br />

			Древесные волокна придают такие свойства, как <br />
			- способность "дышать": благодаря уникальному строению древесины на клеточном уровне проходит постоянный воздухообмен;<br />
			- легкость регулирования температуры тела: волокна равномерно распределяют тепло по всему объему, поэтому на матрасе комфортно летом и тепло зимой;<br />
			- способность быстро поглощать влагу и жидкость, мгновенно впитывает пот, не накапливается сырость; <br />
			- успокаивает, восстанавливает силы, заряжает энергией на весь день.
			<br /><br />



			Верхний тканый слой матраса - особая ткань, при производстве которой используются исключительно натуральные компоненты, в том числе и волокна ценных пород дерева, наделяющие ткань необыкновенными свойствами. Благодаря древесным волокнам ткань приобретает  "бархатный эффект" (эффект необычайной мягкости), сама ткань наделена превосходными терморегулирующими свойствами, что позволяет сохранять поверхность матраса сухой даже при повышенном выделении пота кожи человека.  <br /><br />
			  
			Наполнитель - Memoform magniform это<br />
			   - великолепные ортопедические свойства матраса<br />
				- максимально возможный комфорт для спины, "расслабление" всех мышц человека во время сна, приятное чувство необычайной мягкости<br />
			   - отличная анатомическая поддержка ( "умный матрас" - улучшает и увеличивает анатомическую поддержку тела человека с течением времени во время ночного сна благодаря нескольким неоднородным слоям и открытой клеточной структуре, поддерживающей постоянную циркуляцию воздуха внутри матраса)<br />
			   - "дышащая" структура - свободная циркуляция воздуха внутри матраса<br />
			<br /><br />




			 
			Наполнитель Eliosoft - сердце матраса!<br />
			Eliosoft - высокотехнологичный материал на основе натурального латекса, состоит из открытых микрочастиц, обладающих особенно высокой плотностью, обеспечивающей комфортную, правильную, ортопедическую поддержку тела человека во время сна. Открытые микрочастицы поддерживают отличную вентиляцию, обеспечивают высочайший уровень терморегулирования матраса New NaturComfort, не допуская накапливания влаги, предотвращая распространение микроскопических плесений и бактерий.<br />
			Особая внутренняя структура внутренних слоев  уравновешивается мягким слоем Memoform Magnifoam и необыкновенно мягким и комфортным самым верхнем слоем матраса, что позволяет сохранить ортопедическое правильное положение каждой части тела  человека во время ночного сна и отдыха, делая матрас идеальным для всех людей!<br />

			<br /><br />
			<img  src="/img/new-naturcomfort-01.jpg" alt="Ортопедический итальянский матрас Magniflex New NaturComfort " style="width: 640 px;">

			<br />
			Матрасы New NaturComfort на международной выставке в Шанхае (2014 г.)

			</p>

			</div>
				</div>
			<div style="clear:both"></div>
		',
		'composition' => '
			<div class="hnb_contmy">
				<div class="hnb_contlefsostav">

					 <img src="/img/naturcom3.jpg">

				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX NEW NATURCOMFORT</b><br><br>

			ТОЛЬКО натуральные экологически чистые ткани и материалы<br><br><br>

			1 - Биоэластичная терморегулирующая ткань Lenpur<br><br>
			2 - Гипоаллергенный терморегулирующий слой<br><br>
			3 - Изоляционный слой<br><br>
			4 - Слой Memoform Magnifoam (2 см)<br><br>
			5 - Наполнитель из смеси льняных волокон<br><br>
			6 - Слой Eliosoft<br><br>
			7 - Терморегулирующая биоэластичная ткань Lenpur
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
				Сертифицировано в 70-ти странах мира! 
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
			<a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Merino Green Tea</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-BAMBOO/"><img width="185" src="/img/product/very_small2/Bamboo.jpg" height="130"><br />Bamboo</a>
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
			<li class="hnb_mypohli"><a href="/catalog/mattresses/WATERLATTEX/"><img width="185" src="/img/product/very_small2/WaterLattex.jpg" height="130"><br />WaterLattex</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"WaterLattex"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINOS/"><img width="185" src="/img/product/very_small2/Merino (Merinos).jpg" height="130"><br />Merino (Merinos)</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino (Merinos)"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-GREEN-TEA/"><img width="185" src="/img/product/very_small2/Merino Green Tea.jpg" height="130"><br />Merino Green Tea</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>

			</ul>
			</div>
		',
		'softer' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">

			<li class="hnb_mypohli">
			<a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Memo Merino</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Memo Merino"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/natur-baci-mattress/"><img width="185" src="/img/product/very_small2/Natur Baci.jpg" height="130"><br />Natur Baci</a>
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

			<li class="hnb_mypohli">
			<a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Memo Merino</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Memo Merino"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/natur-baci-mattress/"><img width="185" src="/img/product/very_small2/Natur Baci.jpg" height="130"><br />Natur Baci</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Natur Baci"}--> руб</span>
			</div>
			</li>

			</ul>
			</div>
		',
		'rec_buy' => '',
		'sizes' => array(
			array('80х190',26700.00),
			array('80х200',27900.00),
			array('90х190',30000.00),
			array('90х200',31400.00),
			array('120х190',39800.00),
			array('120х200',44500.00),
			array('140x200',48600.00),
			array('140х190',48600.00),
			array('160х190',53100.00),
			array('160х195',54600.00),
			array('160х200',55500.00),
			array('170х200',59100.00),
			array('180х200',62400.00),
			array('200х200',69800.00),
		),
		
		
		'yml_desc' => '
			Уровень комфорта: умеренно мягкий, комфортный. Magniflex New Naturcomfort дарит исключительный комфорт во время сна. Даже если просто прикоснуться к нему рукой, непременно ощущаешь необыкновенную мягкость, "бархатность" поверхности матраса. Этот волшебный эффект ему придают древесные волокна, входящие в состав тканей и материалов. 
		',
		'yml_torgmail' => true,
		
		
	),
	array(
		'address' => 'natur-baci-mattress',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Natur Baci',
		'title' => 'Итальянский ортопедический матрас Magniflex Natur Baci в Официальном интернет магазин Магнифлекс.',
		'description' => 'Описание, фотографии, состав ортопедического матраса Magniflex Natur Baci',
		'keywords' => 'итальянский матрас, итальянские матрасы,  матрас магнифлекс,  матрас magniflex,  magniflex merino, магнифлекс, natur baci',
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
		'small_img_alt' => 'картинка - ортопедический матрас Magniflex Natur Baci',
		'img' => '/img/product/big/Natur Baci.jpg',
		'img_alt' => 'картинка - ортопедический матрас Magniflex Natur Baci',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 22 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: средней мягкости/очень мягкий - двусторонний матрас</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедический матрас <div class="hnb_marg">Модель Natur Baci (влюбленным) - это настоящий <a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">ортопедический матрас</a>. Узнай подробности!</div></li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg"> сертифицировано РосТест, рекомендованы Центральным Институтом Травматологии и Ортопедии РФ. Все <a href="/http://www.magniflex.ru/pokupatelyam/certificates/" target="_blank">сертификаты на матрас</a></div></li>
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

					 <img src="/img/naturbaci.jpg">

				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX NATUR BACI</b><br><br>

			ТОЛЬКО натуральные экологически чистые ткани и материалы<br><br><br>

			1 - Биоэластичная терморегулирующая ткань Lenpur<br><br>
			2 - Memoform - материал с эффектом памяти<br><br>
			3 - Прослойка из натурального прессованого белого хлопка<br><br>
			4 - слой Eliosoft <br><br>
			5 - Изоляционная ткань<br><br>
			6 - Основной слой Eliosoft <br><br>
			7 - Биоэластичная терморегулирующая ткань Lenpur
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
				Сертифицировано в 70-ти странах мира! <br>
				В т.ч.	Институтом Травматологии и Ортопедии РФ
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

			<br><br>

				</div>
			</div>
		',
		'review' => '',
		'similar' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">

			<li class="hnb_mypohli">
			<a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Merino Green Tea</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-BAMBOO/"><img width="185" src="/img/product/very_small2/Bamboo.jpg" height="130"><br />Bamboo</a>
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
			<a href="/catalog/mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/New NaturComfort.jpg" height="130"><br />New NaturComfort</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"New NaturComfort"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-GREEN-TEA/"><img width="185" src="/img/product/very_small2/Merino Green Tea.jpg" height="130"><br />Merino Green Tea</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINOS/"><img width="185" src="/img/product/very_small2/Merino (Merinos).jpg" height="130"><br />Merino (Merinos)</a>
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
			<a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Memo Merino</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Memo Merino"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/New NaturComfort.jpg" height="130"><br />New NaturComfort</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"New NaturComfort"}--> руб</span>
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
			array('140x200',52700.00),
			array('160x200',60000.00),
			array('180x200',67200.00),
			array('200x200',75100.00),
		),
		
	),
	array(
		'address' => 'MEMO-MERINO',
		'parent_address' => 'orthopedic_mattresses',
		'parent_name' => 'Ортопедические матрасы',
		'name' => 'Memo Merino',
		'title' => 'Итальянский ортопедический матрас Magniflex Memo Merino в Официальном интернет магазин Магнифлекс.',
		'description' => 'Описание, фотографии, состав ортопедического матраса Magniflex Memo Merino',
		'keywords' => 'матрас memo merino',
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
		'small_img_alt' => 'картинка - ортопедический матрас Magniflex Merinos Memo Merino',
		'img' => '/img/product/big/Memo Merino.jpg',
		'img_alt' => 'картинка - ортопедический матрас Magniflex Merinos Memo Merino',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 20 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: очень комфортный</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
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

					 <img src="/img/memory.jpg">

				</div>
				<div class="hnb_contrigsostav">
			<p style="text-align: left;">
			<br><br>
			<b>СОСТАВ МАТРАСА MAGNIFLEX MEMO MERINO</b><br><br>

			ТОЛЬКО натуральные экологически чистые ткани и материалы<br><br><br>

			1 - Терморегулирующая ткань CoolMax<br><br>
			2 - Антистатическая прослойка<br><br>
			3 - Гиппоаллергенный терморегулирующий слой<br><br>
			4 - Основной слой Memoform Magnifoam<br><br>
			5 - Прослойка<br><br>
			6 - Слой <a href="/magniflex/inner-plates#eliocel">ELIOCEL 40</a>  <br><br>
			7 - Терморегулирующая ткань CoolMax
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
				Сертифицировано в 70-ти странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

			<br><br>

				</div>
			</div>
		',
		'review' => '',
		'similar' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">

			<li class="hnb_mypohli">
			<a href="/catalog/mattresses/MEMO-MERINO/"><img width="185" src="/img/product/very_small2/Memo Merino.jpg" height="130"><br />Merino Green Tea</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-BAMBOO/"><img width="185" src="/img/product/very_small2/Bamboo.jpg" height="130"><br />Bamboo</a>
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
			<a href="/catalog/mattresses/MERINOS/"><img width="185" src="/img/product/very_small2/Merino (Merinos).jpg" height="130"><br />Merino (Merinos)</a><br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino (Merinos)"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/MERINO-GREEN-TEA/"><img width="185" src="/img/product/very_small2/Merino Green Tea.jpg" height="130"><br />Merino Green Tea</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"Merino Green Tea"}--> руб</span>
			</div>
			</li>
			<li class="hnb_mypohli"><a href="/catalog/mattresses/NEW-NATURCOMFORT/"><img width="185" src="/img/product/very_small2/New NaturComfort.jpg" height="130"><br />New NaturComfort</a>
			<br>
			<div class="hnb_mypohliconttext">
			<span class="myprice">цена:от <!--{min_price|"New NaturComfort"}--> руб</span>
			</div>
			</li>

			</ul>
			</div>
		',
		'softer' => '
			<div class="hnb_mypoh">
			<ul class="hnb_mypohul">
			<li class="hnb_mypohli"><a href="/catalog/mattresses/natur-baci-mattress/"><img width="185" src="/img/product/very_small2/Natur Baci.jpg" height="130"><br />Natur Baci</a>
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
		'sizes' => array(
			array('80x190',33900.00),
			array('80x200',35900.00),
			array('90x190',38300.00),
			array('90x200',40200.00),
			array('120x190',52400.00),
			array('120x200',54900.00),
			array('140x190',59400.00),
			array('140x200',63900.00),
			array('150x200',66800.00),
			array('160x190',68100.00),
			array('160x195',69600.00),
			array('160x200',71300.00),
			array('180x190',76400.00),
			array('180x200',81000.00),
			array('180x210',88700.00),
			array('200x200',93600.00),
		),
		
		
		'yml_desc' => '
			Уровень комфорта: очень комфортный. Высота: 20 см. Срок службы: не менее 15 лет. Матрас с высокими анатомическими свойствами. 
		',
		'yml_torgmail' => true,
		
	),
		/* элитные матрасы */
	array(
		'address' => 'Virtus-30',
		'parent_address' => 'elitnye-matrasy',
		'parent_name' => 'Элитные матрасы',
		'name' => 'Virtus 30',
		'title' => 'Итальянский элитный матрас Virtus 30',
		'description' => 'Описание, фотографии, состав матраса Virtus 30, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex virtus, элитный матрас',
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
		'small_img_alt' => 'Миниатюра: элитный матрас Magniflex Virtus 30',
		'img' => '/img/product/big/Virtus 30.jpg',
		'img_alt' => 'Фотография элитного матраса Magniflex Virtus 30',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 30 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Комфортнейший</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
							<img src="/img/dih.png" alt="" />
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
					<div id="coin-slider">
			<a href="#" target="_blank">
												<img src="/img/PAS_1497.jpg" />
														<span>
											
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/Virtus-2.jpg" alt="" />
														<span>
														
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/Virtus-3.jpg" alt="" />
														<span>
														 
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/Virtus-4.jpg" alt="" />
														<span>
													
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/Virtus-6.jpg" alt="" />
														<span>
													
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/Virtus-7.jpg" alt="" />
														<span>
							Все материалы, используемые при создании матраса, проходят независимую экспертную проверку на аллергены. Сертификат OEKO!
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/Virtus-9.jpg" alt="" />
														<span>

														</span>
											</a>
											
					</div>
				</div>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose® satin</span>
					<span class="hnb_eytext2">
			Несъемный терморегулирующий чехол с запатентованной технологией.<br /> 
			Элегантная объемная ткань
					</span>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/virtuoso30.jpg">
			<ul style="width: 310px;" class="hnb_krtovul">

									<li>Viscose satin</li>
									<li>Кашемир, отборная шерсть тонкорунного мериноса, отборная верблюжья шерсть, конский волос жеребцов</li>
									<li>Memoform HD 4 см - трехмерный эффект памяти</li>
									<li>Слой Eliosoft Breeze 14 cм</li>
									<li>Memoform HD 4 см - трехмерный эффект памяти</li>
									<li>Летняя сторона: Лучший Шелк, Лен, Хлопок премиальных марок</li>


									
								</ul>
					</span>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Преимущества модели Virtus</span>
					<span class="hnb_eytext2">
			Комфортный ортопедический матрас класса „Премиум”,  обеспечивающий отличную поддержку позвоночника, <br />
			Великолепный анатомический эффект. <br />
			Эффект памяти достигается благодаря инновационному материалу  Memoform HD (8 см!!!)<br />
					</span>


			</div>
			</div>
		',
		'sizes' => array(
			array('160x200',294100.00),
			array('180x200',330800.00),
			array('200x200',367500.00),
		),
		
	),
	array(
		'address' => 'Exchange-Memoform-Dual',
		'parent_address' => 'elitnye-matrasy',
		'parent_name' => 'Элитные матрасы',
		'name' => 'Exchange Memoform Dual',
		'title' => 'Итальянский элитный матрас Exchange Memoform Dual',
		'description' => 'Описание, фотографии, состав матраса Exchange Memoform Dual, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex exchange memoform dual, элитный матрас',
		'small_desc' => '
			<span class="hnb_popular">
			для Королевских семей
			</span>
			<p class="hnb_harek">Очень комфортный. Моделируемый. 5 звезд. Терморегуляция! <br />
			Высота: 33 см<br />
			Наполнители: Memoform 2+6 см, Eliosoft 11см, Elioform 11 см<br />
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/Exchange Memoform Dual.jpg',
		'small_img_alt' => 'Миниатюра: элитный матрас Magniflex Exchange Memoform Dual',
		'img' => '/img/product/big/Exchange Memoform Dual.jpg',
		'img_alt' => 'Фотография элитного матраса Magniflex Exchange Memoform Dual',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 32 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Средней жесткости / Жесткий. 4 комбинации комфорта</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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

			<hr class="hnb_myhrled" />
				<span class="hnb_bigtytles">
						Разные половинки – разная жесткость (Dual Core) 
					</span>
					<br />
					<span class="hnb_eytextoutlast">
						Технология Dual Core позволяет изменить жесткость половинки матраса за считанные минуты. Суть технологии проста: двуспальные матрасы состоят из двух блоков. Для смены жесткости необходимо расстегнуть  чехол (на молнии) и перевернуть на другую сторону блок. Все просто: одно сторона блока жесткая, а другая – мягкая.   
			<br /><br />
			Несмотря на то, что матрас состоит из двух разных блоков, стык между ними абсолютно незаметен и не мешает сну благодаря специально разработанному плотному чехлу, включающего в себя 2 см слой инновационного материала с эффектом памяти – Memoform.
					</span>
					<img src="/img/armonia-dual.jpg" alt="" />
					<br /><br />
					<span class="hnb_eytextoutlast">
			Это очень удобно и практично. Если один человек предпочитает мягкий матрас, а его партнер – жесткий, то им достаточно повернуть блоки в нужные им положения и наслаждаться комфортом.
					</span>
					<br /><br /><br />
				<hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Именно на таких матрасах спят члены королевских семей и элита мирового общества 
					</span>
					<br />
					<span class="hnb_eytext">
			Идеальный матрас с потрясающими свойствами, настоящее воплощение мечты! Высокотехнологичный матрас Premium класса, обладающий 6-ю уровнями комфорта (жесткий, умеренный, идеальный, комбинированный 3 варианта), обеспечивает потребителю возможность самостоятельно смоделировать оптимальный уровень комфорта. Высокий анатомический и ортопедический эффекты, в сочетании с терморегулирующими свойствами чехла, делают этот матрас идеальной системой комфортного сна и отдыха.
					</span>
					<div id="coin-slider">
			<a href="#" target="_blank">
												<img src="/img/harmony-1.jpg" alt="" />
														<span>
														 Эксклюзивные детали
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/harmony-2.jpg" alt="" />
														<span>
													 Эксклюзивные детали
													</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/harmony-3.jpg" alt="" />
														<span>
												 Эксклюзивные детали
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/harmony-4.jpg" alt="" />
														<span>
														 Эксклюзивные детали
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/harmony-5.jpg" alt="" />
														<span>
													 Эксклюзивные детали
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/harmony-6.jpg" alt="" />
														<span>
												 Эксклюзивные детали
														</span>
											</a>
											
					</div>
				</div>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose®</span>
					<span class="hnb_eytext2">			
      Съемный чехол с запатентованной технологией Viscose®.<br /> 
			Элегантная объемная ткань
					</span>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/armonia memoformdual.jpg">
			<ul class="hnb_krtovul">
			            <li>Viscose</li>
									<li>Слой Memoform 2 cм</li>
									<li>Слой Super Soft fibre</li>
									<li>Слой Eliosoft 11 cм</li>
									<li>Слой Elioform 11 cм</li>

									
								</ul>
					</span>

			</div>
		',
		'sizes' => array(
			array('160x200',124600.00),
			array('180x200',140100.00),
			array('200x200',155700.00),
		),
		
	),
	array(
		'address' => 'Magnificent-12',
		'parent_address' => 'elitnye-matrasy',
		'parent_name' => 'Элитные матрасы',
		'name' => 'Magnificent 12',
		'title' => 'Итальянский элитный матрас Magnificent 12',
		'description' => 'Описание, фотографии, состав матраса Magnificent 12, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex magnificent, элитный матрас',
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
		'small_img_alt' => 'Миниатюра: элитный матрас Magniflex Magnificent 12',
		'img' => '/img/product/big/Magnificent 12.jpg',
		'img_alt' => 'Фотография элитного матраса Magniflex Magnificent 12',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 30 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Очень мягкий / средней мягкости</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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



				<span class="hnb_bigtytles">
						Разные половинки – разная жесткость (Dual Core) 
					</span>
					<br />
					<span class="hnb_eytextoutlast">
						Технология Dual Core позволяет изменить жесткость половинки матраса за считанные минуты. Суть технологии проста: двуспальные матрасы состоят из двух блоков. Для смены жесткости необходимо расстегнуть  чехол (на молнии) и перевернуть на другую сторону блок. Все просто: одно сторона блока жесткая, а другая – мягкая.   
			<br /><br />
			Несмотря на то, что матрас состоит из двух разных блоков, стык между ними абсолютно незаметен и не мешает сну благодаря специально разработанному плотному чехлу, включающего в себя 2 см слой инновационного материала с эффектом памяти – Memoform.
					</span>
					<img src="/img/DUAL-COMFORT-magnificent.jpg" alt="" />
					<br /><br />
					<span class="hnb_eytextoutlast">
			Это очень удобно и практично. Если один человек предпочитает мягкий матрас, а его партнер – жесткий, то им достаточно повернуть блоки в нужные им положения и наслаждаться комфортом.
					</span>
					<br /><br /><br />
				<hr class="hnb_myhrled" />
				<div class="hnb_elcont3">
					<span class="hnb_bigtytles">
			Эксклюзивная модель 
					</span>
					<br />
					<span class="hnb_eytext">
			Высокотехнологичный самомоделирующийся матрас Premium класса, изготовленный с применением инновационных материалов и технологий. Обеспечивает потребителю максимальный комфорт, высокий анатомический и ортопедический эффекты, а также создает идеальный для сна микроклимат на поверхности матраса.
					</span>
					<div id="coin-slider">
			<a href="#" target="_blank">
												<img src="/img/magnificent-1.jpg" alt="" />
														<span>
														
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/magnificent-2.jpg" alt="" />
														<span>
														
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/magnificent-3.jpg" alt="" />
														<span>
														
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/magnificent-4.jpg" alt="" />
														<span>
														
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/magnificent-5.jpg" alt="" />
														<span>
														
														</span>
											</a>
											
					</div>
				</div>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Чехол - Viscose® Outlast, 3D ткань</span>
			<span class="hnb_eytext2">
			Cъемный терморегулирующий чехол с запатентованной технологией Outlast<br /> 
			Элегантная объемная ткань
					</span>
					</span>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magnificodual12.jpg">
			<ul class="hnb_krtovul">
			            <li>Viscose</li>
									<li>Слой Memoform 2 cм</li>
									<li>Слой Super Soft fibre</li>
									<li>Слой Memoform 5 cм</li>
									<li>Слой Elioform 7 cм</li>
									<li>Слой Eliosoft 7 cм</li>
									<li>Слой Memoform 5 cм</li>

									
								</ul>

					</span>
			<img src="/img/magnificient-sostav.jpg">
			<br />
			<br />
			<br />

			</div>
			</div>
		',
		'sizes' => array(
			array('160x200',119400.00),
			array('180x200',134300.00),
			array('200x200',149300.00),
		),
		
	),
	array(
		'address' => 'Imperiale-24',
		'parent_address' => 'elitnye-matrasy',
		'parent_name' => 'Элитные матрасы',
		'name' => 'Imperiale 24',
		'title' => 'Итальянский элитный матрас Imperiale 24',
		'description' => 'Описание, фотографии, состав матраса Imperiale 24, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex Imperiale, элитный матрас',
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
		'small_img_alt' => 'Миниатюра: элитный матрас Magniflex Imperiale 24',
		'img' => '/img/product/big/Imperiale 24.jpg',
		'img_alt' => 'Фотография элитного матраса Magniflex Imperiale 24',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 24 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Средней жесткости</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
		'sizes' => array(
			array('160x200',96000.00),
			array('180x200',102000.00),
			array('200x200',113200.00),
		),
		'yml_desc' => 'Высокотехнологичный матрас Premium класса.Несъемный чехол с технологией Viscose. Эффект памяти. Уровень комфорта: средней жесткости. Высота: 24 см. Срок службы: не менее 12 лет.',
		
	),
	array(
		'address' => 'Imperiale-28',
		'parent_address' => 'elitnye-matrasy',
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
		'small_img_alt' => 'Миниатюра: элитный матрас Magniflex Imperiale 28',
		'img' => '/img/product/big/Imperiale 28.jpg',
		'img_alt' => 'Фотография элитного матраса Magniflex Imperiale 28',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 28 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Средней мягкости</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
		'sizes' => array(
			array('160x200',108200.00),
			array('180x200',121600.00),
			array('200x200',135200.00),
		),
		
	),
	array(
		'address' => 'Imperiale-33',
		'parent_address' => 'elitnye-matrasy',
		'parent_name' => 'Элитные матрасы',
		'name' => 'Imperiale 33',
		'title' => 'Итальянский элитный матрас Imperiale 33',
		'description' => 'Описание, фотографии, состав матраса Imperiale 33, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex imperiale, элитный матрас',
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
		'small_img_alt' => 'Миниатюра: элитный матрас Magniflex Imperiale 33',
		'img' => '/img/product/big/Imperiale 33.jpg',
		'img_alt' => 'Фотография элитного матраса Magniflex Imperiale 33',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 33 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Мягкий</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
									<li>Слой Memoform 5 cм</li>
						<li>Слой Eliosoft 5 cм</li>
									<li>Слой Airyform Elioform 17 cм</li>

									
								</ul>
					</span>

			</div>
			</div>
		',
		'sizes' => array(
			array('160x200',127200.00),
			array('180x200',143200.00),
			array('200x200',159000.00),
		),
		
	),
	array(
		'address' => 'Comfort-Plus-10',
		'parent_address' => 'elitnye-matrasy',
		'other_categories' => array('new-mattresses'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Comfort Plus 10',
		'title' => '',
		'description' => '',
		'keywords' => '',
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
		'small_img' => '/img/product/very_small/Comfort Plus 10.jpg',
		'small_img_alt' => '',
		'img' => '/img/product/big/Comfort Plus 10.jpg',
		'img_alt' => '',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 25 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Средней жесткости / Жесткий Моделируемый</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
					<img src="/img/DUAL-COMFORT.jpg" alt="" />
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
					<div id="coin-slider">
											<a href="#" target="_blank">
			<img src="/img/comfort-1.jpg" alt="" />
														<span>
												Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank">
			<img src="/img/comfort-2.jpg" alt="" />
														<span>
												Эксклюзивные детали			
														</span>
											</a>
											<a href="#" target="_blank">
			<img src="/img/product/other/comfortplus-2.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank">
			<img src="/img/comfort-3.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank">
			<img src="/img/comfort-4.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank">
			<img src="/img/comfort-5.jpg" alt="" />
														<span>
													Съемный чехол. Удобно моделировать, легко ухаживать. Можно стирать!	
														</span>

											</a>
											<a href="#" target="_blank">
			<img src="/img/comfort-6.jpg" alt="" />
														<span>
										Эксклюзивные детали	
														</span>
											</a>

			<a href="#" target="_blank">
												<img src="/img/comfort-7.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/comfort-8.jpg" alt="" />
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
			<img src="/img/comfortdual10.jpg">
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
		'sizes' => array(
			array('160x200',80300.00),
			array('180x200',90300.00),
			array('200x200',100300.00),
		),
		'yml_desc' => 'Матрасы Premium класса! Моделируемый уровень комфорта - технология  Dual Core. Съемный терморегулирующий чехол с запатентованной технологией Outlast. Эффект памяти.  Высота: 25 см. Срок службы: не менее 15 лет.',

		
	),
	array(
		'address' => 'Comfort-Plus-12',
		'parent_address' => 'elitnye-matrasy',
		'parent_name' => 'Элитные матрасы',
		'name' => 'Comfort Plus 12',
		'title' => 'Итальянский элитный матрас Comfort Plus 12',
		'description' => 'Описание, фотографии, состав матраса Comfort Plus 12, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex comfort plus, элитный матрас',
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
		'small_img' => '/img/product/very_small/Comfort Plus 12.jpg',
		'small_img_alt' => 'Миниатюра: элитный матрас Magniflex Comfort Plus 12',
		'img' => '/img/product/big/Comfort Plus 12.jpg',
		'img_alt' => 'Фотография элитного матраса Magniflex Comfort Plus 12',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 30 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Средней мягкости / Мягкий,
			Моделируемый</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
					<img src="/img/DUAL-COMFORT.jpg" alt="" />
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
					<div id="coin-slider">
											<a href="#" target="_blank">
			<img src="/img/comfort-1.jpg" alt="" />
														<span>
												Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank">
			<img src="/img/comfort-2.jpg" alt="" />
														<span>
												Эксклюзивные детали			
														</span>
											</a>
											<a href="#" target="_blank">
			<img src="/img/product/other/comfortplus-2.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank">
			<img src="/img/comfort-3.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank">
			<img src="/img/comfort-4.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank">
			<img src="/img/comfort-5.jpg" alt="" />
														<span>
													Съемный чехол. Удобно моделировать, легко ухаживать. Можно стирать!	
														</span>

											</a>
											<a href="#" target="_blank">
			<img src="/img/comfort-6.jpg" alt="" />
														<span>
										Эксклюзивные детали	
														</span>
											</a>

			<a href="#" target="_blank">
												<img src="/img/comfort-7.jpg" alt="" />
														<span>
														Эксклюзивные детали	
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/comfort-8.jpg" alt="" />
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
			<img src="/img/comfortdeluxedual12.jpg">
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
		'sizes' => array(
			array('160x200',90600.00),
			array('180x200',102000.00),
			array('200x200',113200.00),
		),
		
	),
	array(
		'address' => 'FreshGel-9',
		'parent_address' => 'elitnye-matrasy',
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
		'small_img_alt' => 'Миниатюра: элитный матрас Magniflex FreshGel 9',
		'img' => '/img/product/big/FreshGel 9.jpg',
		'img_alt' => 'Фотография элитного матраса Magniflex FreshGel 9',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 23 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Средней жесткости</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
			<!--<img src="/img/srvimg/cookie-image.png" />
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
			
			<span class="hnb_bigtytles">Преимущества матрасов коллекции Virtus</span>



			<div id="hnb_3nelement">
						<div class="hnb_3nelementli" style="margin-left: 0px; opacity: 1;">
							<img src="/img/dih.png">
							<div style="clear:both;"></div>
							<span>Дышащий</span><br>
							
							Необыкновенно проницаемый,
							дышащий материал. Мгновенно 
							впитывает влагу и капельки, 
							быстро испаряя их!
						</div>
						<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 0px; opacity: 1;">
							<img src="/img/snig.png">
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
					<div id="coin-slider">
			<a href="#" target="_blank">
												<img src="/img/m1.jpg" alt="" />
														<span>
														Magniflex FreshGel - просторные удобные а главное, максимально комфортные матрасы
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/product/other/freshgel2.jpg" />
														<span>
														Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/matras_magniflex-freshgel-1.jpg" />
														<span>
														Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/matras_magniflex-freshgel-2.jpg" />
														<span>
														Великолепие натуральной ткани подчеркивает двойная строчка. Направление и размер стежков, цвет и качество нити, подбираются исключительно тщательно
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/fresh-gel-4.jpg" alt="" />
														<span>
														Дизайнерский чехол
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/matras_magniflex-freshgel-3.jpg" />
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

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magnigel9.jpg">
			<ul class="hnb_krtovul">
			<li>Viscose</li>
									<li>Слой Magnigel Foam 2 cм</li>
									<li>Слой Memoform 3 cм</li>
									<li>Слой Eliosoft 18 cм</li>
									
								</ul>
					</span>

			</div>
			</div>
		',
		'sizes' => array(
			array('160x200',78700.00),
			array('180x200',88600.00),
		),
		
		
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
		'address' => 'FreshGel-10',
		'parent_address' => 'elitnye-matrasy',
		'other_categories' => array('new-mattresses'),
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 23 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Средней мягкости / средней жесткости</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
			<!--<img src="/img/srvimg/cookie-image.png" />
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
							<img src="/img/dih.png">
							<div style="clear:both;"></div>
							<span>Дышащий</span><br>
							
							Необыкновенно проницаемый,
							дышащий материал. Мгновенно 
							впитывает влагу и капельки, 
							быстро испаряя их!
						</div>
						<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 0px; opacity: 1;">
							<img src="/img/snig.png">
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
					<div id="coin-slider">
			<a href="#" target="_blank">
												<img src="/img/m1.jpg" alt="" />
														<span>
														Magniflex FreshGel - просторные удобные а главное, максимально комфортные матрасы
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/product/other/freshgel2.jpg" />
														<span>
														Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/matras_magniflex-freshgel-1.jpg" />
														<span>
														Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/matras_magniflex-freshgel-2.jpg" />
														<span>
														Великолепие натуральной ткани подчеркивает двойная строчка. Направление и размер стежков, цвет и качество нити, подбираются исключительно тщательно
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/fresh-gel-4.jpg" alt="" />
														<span>
														Дизайнерский чехол
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/matras_magniflex-freshgel-3.jpg" />
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

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magnigeldual10.jpg">
			<ul class="hnb_krtovul">
			<li>Viscose</li>
									<li>Слой Magnigel Foam 2 cм</li>
									<li>Слой Memoform 3 cм</li>
									<li>Слой Eliosoft 18 cм</li>
									
								</ul>
					</span>
			</div>
			</div>
		',
		'sizes' => array(
			array('160x200',87400.00),
			array('180x200',98500.00),
			array('200x200',109300.00),
		),
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
		//	'sizes' => array('160x200', '180x200', '200x200'),
		//	'prices' => array(
		//		'160x200' => 69900,
		//		'180x200' => 78800,
		//		'200x200' => 87450,
		//	),
		//), //скидка
		
	),
	array(
		'address' => 'FreshGel-12',
		'parent_address' => 'elitnye-matrasy',
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
			Создан в ИТАЛИИ.
                 </p>
		',
		'small_img' => '/img/product/very_small/FreshGel 12.jpg',
		'small_img_alt' => 'Миниатюра: элитный матрас Magniflex FreshGel 12',
		'img' => '/img/product/big/FreshGel 12.jpg',
		'img_alt' => 'Фотография элитного матраса Magniflex FreshGel 12',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 30 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: Средней мягкости / Мягкий</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
			<!---<img src="/img/srvimg/cookie-image.png" />
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
							<img src="/img/dih.png">
							<div style="clear:both;"></div>
							<span>Дышащий</span><br>
							
							Необыкновенно проницаемый,
							дышащий материал. Мгновенно 
							впитывает влагу и капельки, 
							быстро испаряя их!
						</div>
						<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 0px; opacity: 1;">
							<img src="/img/snig.png">
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
					<div id="coin-slider">
			<a href="#" target="_blank">
												<img src="/img/m1.jpg" alt="" />
														<span>
														Magniflex FreshGel - просторные удобные а главное, максимально комфортные матрасы
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/product/other/freshgel2.jpg" />
														<span>
														Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/matras_magniflex-freshgel-1.jpg" />
														<span>
														Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/matras_magniflex-freshgel-2.jpg" />
														<span>
														Великолепие натуральной ткани подчеркивает двойная строчка. Направление и размер стежков, цвет и качество нити, подбираются исключительно тщательно
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/fresh-gel-4.jpg" alt="" />
														<span>
														Дизайнерский чехол
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/matras_magniflex-freshgel-3.jpg" />
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

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/sloi.jpg">
			<ul class="hnb_krtovul">
			<li>Чехол Viscose</li>
									<li>Слой Memoform 2 cм</li>
									<li>Слой Super Soft fibre</li>
									<li>Слой Magnigel Foam 5 cм</li>
									<li>Слой Memoform 3 cм</li>
									<li>Слой Eliosoft 17 cм</li>
									
								</ul>
					</span>

			</div>
			</div>
		',
		'sizes' => array(
			array('160x200',96300.00),
			array('180x200',108100.00),
			array('200x200',120200.00),
		),
		
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'sizes' => array('160x200', '180x200', '200x200'),
			//'prices' => array(
				//'160x200' => 77050,
				//'180x200' => 86500,
				//'200x200' => 96150,
			//),
		//), //скидка
		
	),
	array(
		'address' => 'Rest-9',
		'parent_address' => 'elitnye-matrasy',
		'other_categories' => array('new-mattresses'),
		'parent_name' => 'Элитные матрасы',
		'name' => 'Rest 9',
		'title' => '',
		'description' => '',
		'keywords' => '',
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
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 23 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: достаточно жесткий</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
							<img src="/img/statrest.png" alt="Классический матрас">
							<div style="clear:both;"></div>
							<span>Классика</span><br>
							
							Классика предполагает чувство меры: в форме, объеме и цвете образа, придающее гармонию и красоту.
						</div>
						<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
							<img src="/img/medvrest.png" alt="Мягкий матрас">
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
					<div id="coin-slider">
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_1.jpg" alt="Ортопедический матрас Magniflex Rest" />
														<span>
														Обеспечивают великолепную поддержку позвоночника. 
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/product/other/rest2.jpg" alt="Элегантный матрас Magniflex Rest"/>
														<span>
														В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элементов - флорентийская лилия.
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_2.jpg" alt="Элегантный матрас Magniflex Rest"/>
														<span>
														В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элементов - флорентийская лилия.
														</span>
											</a>
											
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_3.jpg" alt="Magniflex Rest - ткань вискоза"/>
														<span>
														Чехол матраса - несъемный, изготовлен из ткани Viscosa.
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_4.jpg" alt="Magniflex Rest - дышащий матрас"/>
														<span>
														За удобство спящих отвечает уникальный материал дышащий, мягкий материал - Memoform, обладающий "функцией памяти".
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_5.jpg" alt="Magniflex Rest - комфортные матрасы" />
														<span>
														Матрасы серии Rest очень удобные и комфортные.
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_6.jpg" alt="выставка матрасов в Милане"/>
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
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magni9.jpg" alt="Матрас Rest 9 состав">
			<ul class="hnb_krtovul">
										<li>Чехол Viscose</li>
									<li>Чехол: Memoform 2 cм</li>
									<li>Super Soft fibre (мягкая фибра)</li>
			<li>Слой Elioform 18 cм</li>

									
								</ul>
					</span>

			<hr class="hnb_myhrled" />
			<div style="clear:both;"></div>
			<span class="hnb_bigtytles24">Преимущества модели REST 9</span>
					<span class="hnb_eytext2">
			Ортопедический матрас класса „Премиум”,  обеспечивающий отличную, достаточно жесткую поддержку позвоночника. <br />
			<br />
					</span>


			</div>
			</div>
		',
		'sizes' => array(
			array('160x200',58800.00),
			array('180x200',66200.00),
			array('200x200',73600.00),
		),
		//'discount_koef' => array('price_koef' => 0.25, 'date_start' => '9.6.2015', 'date_end' => '30.6.2015',
			
			//'sizes' => array('160x200', '180x200'),
		//), //скидка 25% на некоторые размеры с 9 по 30 июня 2015
		'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: достаточно жесткий. Высота: 23 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200','180x200'),
		
	),
	array(
		'address' => 'Rest-10',
		'parent_address' => 'elitnye-matrasy',
		'parent_name' => 'Элитные матрасы',
		'name' => 'Rest 10',
		'title' => 'Итальянский элитный матрас Rest 10',
		'description' => 'Описание, фотографии, состав матраса Rest 10, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex rest, элитный матрас',
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
		'small_img_alt' => 'Миниатюра: элитный матрас Magniflex Rest 10',
		'img' => '/img/product/big/Rest 10.jpg',
		'img_alt' => 'Фотография элитного матраса Magniflex Rest 10',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 25 см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: средней жесткий, комфортный</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
							<img src="/img/statrest.png" alt="Классический матрас">
							<div style="clear:both;"></div>
							<span>Классика</span><br>
							
							Классика предполагает чувство меры: в форме, объеме и цвете образа, придающее гармонию и красоту.
						</div>
						<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
							<img src="/img/medvrest.png" alt="Мягкий матрас">
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
					<div id="coin-slider">
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_1.jpg" alt="Ортопедический матрас Magniflex Rest" />
														<span>
														Обеспечивают великолепную поддержку позвоночника. Высокие ортопедические свойства обеспечивает слой Elioform (18 см).
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/product/other/rest2.jpg" alt="Элегантный матрас Magniflex Rest"/>
														<span>
														В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элементов - флорентийская лилия.
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_2.jpg" alt="Элегантный матрас Magniflex Rest"/>
														<span>
														В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элементов - флорентийская лилия.
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_3.jpg" alt="Magniflex Rest - ткань вискоза"/>
														<span>
														Чехол матраса - несъемный, изготовлен из ткани Viscosa.
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_4.jpg" alt="Magniflex Rest - дышащий матрас"/>
														<span>
														За удобство спящих отвечает уникальный материал дышащий, мягкий материал - Memoform, обладающий "функцией памяти".
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_5.jpg" alt="Magniflex Rest - комфортные матрасы" />
														<span>
														Матрасы серии Rest очень удобные и комфортные.
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_6.jpg" alt="выставка матрасов в Милане"/>
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
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magni9.jpg" alt="Матрас Rest 9 состав">
			<ul class="hnb_krtovul">
										<li>Чехол Viscose</li>
									<li>Чехол: Memoform 2 cм</li>
									<li>Super Soft fibre (мягкая фибра)</li>
			<li>Слой Elioform 18 cм</li>

									
								</ul>
					</span>

			<hr class="hnb_myhrled" />
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
		'sizes' => array(
			array('160x200',64100.00),
			array('180x200',72100.00),
			array('200x200',80100.00),
		),
		'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: средней жесткости. Высота: 25 см. Срок службы: не менее 15 лет.',
		'yml_yandex' => array('160x200'),
		
	),
	array(
		'address' => 'Rest-12',
		'parent_address' => 'elitnye-matrasy',
		'parent_name' => 'Элитные матрасы',
		'name' => 'Rest 12',
		'title' => 'Итальянский элитный матрас Rest 12',
		'description' => 'Описание, фотографии, состав матраса Rest 12, быстрый заказ в официальном интернет-магазине Magniflex',
		'keywords' => 'итальянский матрас, итальянские матрасы, magniflex rest, элитный матрас',
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
		'small_img_alt' => 'Миниатюра: элитный матрас Magniflex Rest 12',
		'img' => '/img/product/big/Rest 12.jpg',
		'img_alt' => 'Фотография элитного матраса Magniflex Rest 12',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">

			<a href="/production/nastoyashchie-ortopedicheskie-matrasy/" target="_blank">Ортопедический матрас.</a> <a href="/production/vacuum-packing/" target="_blank">Вакуумная упаковка.</a> <a href="/production/made-in-Italy/" target="_blank">ПРОИЗВОДСТВО ИТАЛИЯ</a></li>


			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 30 (!!!) см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: средней мягкости, очень комфортный!</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li>

			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2" target="_blank">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag" target="_blank">оплата</a>


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
							<img src="/img/statrest.png" alt="Классический матрас">
							<div style="clear:both;"></div>
							<span>Классика</span><br>
							
							Классика предполагает чувство меры: в форме, объеме и цвете образа, придающее гармонию и красоту.
						</div>
						<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 1px; opacity: 1;">
							<img src="/img/medvrest.png" alt="Мягкий матрас">
							<div style="clear:both;"></div>
							<span>Мягкий, Комфортный</span><br>
							Дополнительный комфорт придает материал Memoform (минимум 2 см). Модель Rest 12 - один из самых мягких матрасов Magniflex  

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
					<div id="coin-slider">
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_1.jpg" alt="Ортопедический матрас Magniflex Rest" />
														<span>
														Обеспечивают великолепную поддержку позвоночника. Высокие ортопедические свойства обеспечивает слой Elioform (18 см). В модели Rest 12 для усиления ортопедических свойств и повышения комфортности, используется более дорогой материал - 
			инновационный Eliosoft (18 см).
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/product/other/rest2.jpg" alt="Элегантный матрас Magniflex Rest"/>
														<span>
														В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элементов - флорентийская лилия.
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_2.jpg" alt="Элегантный матрас Magniflex Rest"/>
														<span>
														В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элементов - флорентийская лилия.
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_3.jpg" alt="Magniflex Rest - ткань вискоза"/>
														<span>
														Чехол матраса - несъемный, изготовлен из ткани Viscosa.
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_4.jpg" alt="Magniflex Rest - дышащий матрас"/>
														<span>
														За удобство спящих отвечает уникальный материал дышащий, мягкий материал - Memoform, обладающий "функцией памяти".
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_5.jpg" alt="Magniflex Rest - комфортные матрасы" />
														<span>
														Матрасы серии Rest очень удобные и комфортные.
														</span>
											</a>
											<a href="#" target="_blank">
												<img src="/img/rest_magniflex_6.jpg" alt="выставка матрасов в Милане"/>
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
			<span class="hnb_bigtytles24">Состав</span>
					<span class="hnb_eytext2">
			<img class="hnb_imlfce" src="/img/magni9.jpg" alt="Матрас Rest 9 состав">
			<ul class="hnb_krtovul">
										<li>Чехол Viscose</li>
									<li>Чехол: Memoform 2 cм</li>
									<li>Super Soft fibre (мягкая фибра)</li>
			<li>Слой Elioform 18 cм</li>

									
								</ul>
					</span>

			<hr class="hnb_myhrled" />
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
		'sizes' => array(
			array('160x200',77700.00),
			array('180x200',87400.00),
			array('200x200',97100.00),
		),
		'yml_desc' => 'Элитная серия класса „Премиум”. Комфортный матрас с эффектом памяти. Уровень комфорта: мягкий. Идеальная поддержка Вашего позвоночника!. Высота: 30 см. Срок службы: не менее 15 лет.',

		
	),
	/* детям */
	array(
		'address' => 'MERINO-childrens',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
		'parent_name' => 'Детские матрасы',
		'name' => 'Merino для детей',
		'title' => 'Лучший детский ортопедический матрас - Merino Magniflex в Официальном интернет-магазине Магнифлекс (Италия). Merinos - матрас для детей! ',
		'description' => 'Описание, фотографии, состав детского матраса Merino Magniflex',
		'keywords' => 'детский матрас, детский ортопедический матрас, матрас для детей, детский матрас, матрас для мальчика, подростковый матрас',
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
		'small_img' => '/img/product/very_small/Merino для детей.jpg',
		'small_img_alt' => 'картинка детский матрас - Merino Magniflex',
		'img' => '/img/product/big/Merino для детей.jpg',
		'img_alt' => 'картинка детский матрас - Merino Magniflex',
		'attr' => '
			<ul>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедический матрас. ПРОИЗВОДСТВО ИТАЛИЯ
			</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Высота: 16 см
			</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: умеренно жесткий
			</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы
			</li>
			<li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag2">доставка</a>, <a href="/pokupatelyam/oplata-i-dostavka#mytitlepag">оплата</a>
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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
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

					 <img src="/img/merino.jpg">

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
				Сертифицировано в 70-ти странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
		'sizes' => array(
			array('60x120',7200.00),
			array('70x140',9600.00),
		),
		
		
		'yml_desc' => '
			Неоднократный лауреат десяток международных выставок в том числе в Милане (Италия), Лас-Вегасе (США), Бирмингеме (Великобритания), Москве (Россия). Практичный, не деформируется, позволяет принимать идеальное положение для сна, которое советуют специалисты-ортопеды. Внешний слой: летняя поверхность создается из натуральной 100% хлопковой ткани: подарит комфортный прохладный сон в знойную ночь; зимняя поверхность - тонкорунная шерсть мериноса: согреет в период морозов. 
			Срок службы: не менее 12 лет. Высота: 16 см. 
		',
		'yml_torgmail' => true,
		
		
	),
	array(
		'address' => 'Merino+Bamboo',
		'parent_address' => 'detskie-ortopedicheskie-matrasy',
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
		'small_img' => '/img/product/very_small/Merino Bamboo для детей.jpg',
		'small_img_alt' => 'картинка детский матрас - Merino Bambo Magniflex',
		'img' => '/img/product/big/Merino Bamboo для детей.jpg',
		'img_alt' => 'картинка детский матрас - Merino Bambo Magniflex',
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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
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

					 <img src="/img/bamboo.jpg">

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
				Сертифицировано в 70-ти странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
			array('60x120',9000.00),
			array('70x140',12200.00),
		),
		
		
		'yml_desc' => '
			Отличный матрас для детей и подростков. Практичный, износостойкий, не деформирующийся, позволяет принимать идеальное положение для сна, которое советуют специалисты-ортопеды. Внешний слой: летняя поверхность создается из натуральной 100% хлопковой ткани: подарит комфортный прохладный сон в знойную ночь; зимняя поверхность - тонкорунная шерсть мериноса: согреет в период морозов. 
			Срок службы: не менее 12 лет. Высота: 16 см. 
		',
		'yml_torgmail' => true,
		
		
	),
	/* подушки */
	array(
		'address' => 'RELAXSAN',
		'parent_address' => 'vacuum_pillows',
		'parent_name' => 'Вакуумные подушки',
		'name' => 'Подушка Relaxsan',
		'title' => 'Итальянская подушка Relaxsan в официальном интернет-магазине Magniflex',
		'description' => 'Описание, фотографии, состав подушки Relaxsan',
		'keywords' => 'итальянская подушка',
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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель Relaxan. Антиаллергенная, антибактериальная, недеформируемая</div></li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Классическая форма<div class="hnb_marg">Релаксирующее действие, способствует принятию идеального положения головы и шейных позвонков<div></li>
			<li class="hnb_ligray">Хлопок <div class="hnb_marg">Изготовлена из 100% хлопка</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлен именно в Италии на заводе в Прато</div></li>
			</ul>
		',
		'desc' => '
			<div class="hnb_contmy">
				<div class="hnb_contlef">
					<img width="280" src="/img/relaxan-podushka.jpg" height="196" title="Подушка Magniflex Relaxan">
					<br>
				Поставляется в вакуумной упаковке <br>
					
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					
			Ортопедическая подушка Magniflex Relaxan классической формы обладает релаксирующим действием, способствует принятию идеального "ортопедического" положения головы и шейных позвонков. Благодаря своей структуре подушка "дышит" и хорошо приспосабливается к форме головы.<br><br>

			Внутренняя часть подушки представляет собой ортопедическое основание, окруженное полифибровыми волокнами. После пропитки натуральным латексом основание и волокна приобретают упругие и прочные свойства.
			<br><br>

			Подушка не вызывает аллергии и не теряет своих уникальных свойств даже после стирки в стиральной машине. Наволочка несъемная - стирается вместе с подушкой.
			<br><br>
			Ортопедическая подушка Magniflex рекомендована детям, лицам, страдающим остеохондрозом шейного отдела позвоночника, аллергическими реакциями, и всем, кому важен здоровый сон.

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
					
			Изготовлена из 100% натурального хлопка. <br><br>
			Magniflex - только натуральные, экологически чистые ткани и материалы.<br><br>

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
				Сертифицировано в 70-ти странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
		'price' => 2300,
	),
	array(
		'address' => 'MEMORY',
		'parent_address' => 'Orthopedic_pillows',
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Memory',
		'title' => 'Ортопедическая подушка с эффектом памяти Magniflex Memory в официальном интернет-магазине Magniflex ',
		'description' => 'Описание, фотографии, состав ортопедической подушки с эффектом памяти Magniflex Memory',
		'keywords' => 'ортопедическая подушка, подушка с эффектом памяти, итальянская подушка',
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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">с эффектом памяти. Волнообразная форма, изначально максимально соответствующая строению головы и шеи, гарантирует идеальную ортопедическую поддержку</div></li>
			<li class="hnb_ligray">Наполнитель Memoform Magnifoam <div class="hnb_marg">под действием тепла и давления, принимает форму, максимально соответствующую особенностям строения головы и шеи, даря ни с чем несравнимый комфорт. Идеально подходит для крепкого и здорового сна вне зависимости от той позы, в которой Вы привыкли спать</div></li>
			<li class="hnb_liwhite">Ткани с технологией Coolmax <div class="hnb_marg">свободная циркуляция воздуха и быстрое испарение влаги, уменьшает потливость, успокаивает кожу и снимает раздражение</div></li>
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
			Наволочка подушки MEMORY Magniflex изготовлена из 100% натурального хлопка (c технологией Coolmax), съемная, на молнии, возможна стирка. 
			<br /><br />
			Имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ, рекомендована к использованию Центральным Институтом Травматологии и Ортопедии РФ.

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

			Технология COOLMAX - циркуляция воздуха и испарение влаги<br><br>

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
				Сертифицировано в 70-ти странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
		'price' => 6800.00,
	),
	array(
		'address' => 'ORTHOMASSAGE',
		'parent_address' => 'Orthopedic_pillows',
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Orthomassage',
		'title' => 'Ортопедическая подушка с эффектом памяти Magniflex Orthomassage в официальном интернет-магазине Magniflex ',
		'description' => 'Описание, фотографии, состав ортопедической подушки с эффектом памяти Magniflex Orthomassage ',
		'keywords' => 'ортопедическая подушка, подушка с эффектом памяти, итальянская подушка',
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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель Оrthomassage</div></li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлен именно в Италии на заводе в Прато.</div></li>
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
				

			<iframe width="687" height="515" src="//www.youtube.com/embed/YDgJIa2E0AA?rel=0" frameborder="0" allowfullscreen style="margin: 0 0 0 -10px;"></iframe>

			<br /> <br /><br />
				

			Удобная анатомическая форма ортопедической подушки Magniflex Orthomassage обеспечивает идеальную поддержку для шеи и гарантирует правильное положение головы, что способствует отличному сну и отдыху, обеспечивает дополнительный комфорт.
			<br /><br />
			 Специальные шипы "конической формы" в центральной части нежно "массажируют" затылочную зону головы и шею, высокотехнологичный наполнитель Memoform Magnifoam, реагируя на тепло и давление, создает эффект памяти: подушка сама подстраивается под индивидуальную форму головы и шеи спящего человека. 
			<br /><br />
			Все ткани, материалы и наполнители проходят специальные санитарные обработки, в которых мы НЕ используем химические вещества. Наволочка подушки изготовлена из 100% натурального хлопка (технология Coolmax), съемная, на молнии - легко стирается.
			<br /><br />
			Подушка Magniflex Orthomassage имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ, рекомендована к использованию Центральным Институтом Травматологии и Ортопедии РФ. Настоящее превосходное итальянское качество!

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
				Сертифицировано в 70-ти странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
		'price' => 7200,
	),
	array(
		'address' => 'COMFORT-PILLOW',
		'parent_address' => 'Orthopedic_pillows',
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Comfort Pillow',
		'title' => 'Ортопедическая подушка с эффектом памяти Magniflex Comfort Pillow в официальном интернет-магазине Magniflex ',
		'description' => 'Описание, фотографии, состав ортопедической подушки с эффектом памяти Magniflex Comfort Pillow',
		'keywords' => 'ортопедическая подушка, подушка с эффектом памяти, итальянская подушка',
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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель Comfort Pillow</div></li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлен именно в Италии на заводе в Прато.</div></li>
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
			Подушка Magniflex Comfort имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ, рекомендована к использованию детям и взрослым Центральным Институтом Травматологии и Ортопедии РФ.

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
				Сертифицировано в 70-ти странах мира! <br>
					Травматологии и Ортопедии РФ
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
		'price' => 5900.00,
	),
	array(
		'address' => 'ALOE+VERA',
		'parent_address' => 'Orthopedic_pillows',
		'parent_name' => 'Ортопедические подушки',
		'name' => 'Подушка Aloe Vera',
		'title' => 'Ортопедическая подушка с эффектом памяти Magniflex Aloe Vera в официальном интернет-магазине Magniflex ',
		'description' => 'Описание, фотографии, состав ортопедической подушки с эффектом памяти Magniflex Aloe Vera',
		'keywords' => 'ортопедическая подушка, подушка с эффектом памяти, итальянская подушка',
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
		'small_img' => '/img/product/very_small/Aloe Vera.jpg',
		'small_img_alt' => 'Ортопедическая подушка с эффектом памяти Magniflex Aloe Vera ',
		'img' => '/img/product/big/Aloe Vera.jpg',
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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель Aloe Vera</div></li>
			<li class="hnb_ligray">Вакуумная упаковка <div class="hnb_marg">Гарантия высочайшего уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Индивидуальное воздействие <div class="hnb_marg">Индивидуальное воздействие на каждого человека</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлен именно в Италии на заводе в Прато.</div></li>
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
					
			<iframe width="687" height="515" src="//www.youtube.com/embed/aDVAjsGJqZ4?rel=0" frameborder="0" allowfullscreen style="margin: 0 0 0 -10px;"></iframe>

			<br /> <br /><br />



			Подушка алое вера (Magniflex Aloe Vera) обеспечивает анатомически правильное положение шейных позвонков и головы во время сна, способствует полноценному отдыху и комфортному сну, предотвращает риск возможности возникновения патологий шейного отдела позвоночника, заболеваний суставов.
			<br /><br />
			 Подушка с эффектом памяти, благодаря наполнителю Memoform Magnifoam, реагирующего на тепло и давление, подушка сама подстраивается под форму головы и шеи, что исключает давление на область шеи и головы, затекание мышц, улучшает кровоснабжение, не пережимая сосуды. 
			<br /><br />
			Ткани подушки Magniflex Aloe Vera, пропитанные экстрактом алоэ вера, содержат миллионы микрокапсул: в результате теплового контакта с кожей микрокапсулы раскрываются, высвобождая полезные вещества, которые помогают заживлять ранки, замедляют старение клеток, оказывают противовоспалительное действие.
			<br /><br />
			Все ткани и наполнители подушки проходят специальные санитарные обработки, в которых НЕ используются химические вещества. Обладает антиаллергенными свойствами, гарантирует 100% защиту от пылевых клещей, плесени и бактерий (рекомендуется для аллергиков и астматиков). 
			<br /><br />
			Наволочка подушки изготовлена из 100% натурального хлопка (технология Coolmax), съемная, на молнии - возможна бережная стирка.
			<br /><br />
			Подушка Magniflex Aloe Vera имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ, рекомендована к использованию взрослым и детям Центральным Институтом Травматологии и Ортопедии РФ.

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
				Сертифицировано в 70-ти странах мира! <br>
					Травматологии и Ортопедии РФ
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
		'price' => 7600.00,
	),
	array(
		'address' => 'FreshGel+Wave',
		'parent_address' => 'gelevye-podushki',
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
		'img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Wave',
		'attr' => '
			<ul><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Ортопедическая подушка. ПРОИЗВОДСТВО ИТАЛИЯ</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Размер: 60x43x12/10/8см</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Уровень комфорта: умеренно мягкий</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Стоимость доставки: бесплатно, срок доставки: завтра для Москвы</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Условия: доставка, оплата</li><li style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #dddddd;">Срок службы: не менее 15 лет</li></ul><br>
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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель FreshGel Wave, гелевая, охлаждающий эффект</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Magnigel Foam</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлен именно в Италии.</div></li>
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
				Сертифицировано в 70-ти странах мира! <br>
				(в том числе Институтом Травматологии и Ортопедии РФ)
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
		'price' => 7100.00,
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 4950,
		//), //скидка
	),
	array(
		'address' => 'FreshGel+Standart',
		'parent_address' => 'gelevye-podushki',
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
		'small_img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Standard',
		'img' => '/img/product/big/FreshGel Standard.jpg',
		'img_alt' => 'Гелевая подушка с эффектом памяти Magniflex FreshGel Standard',
		'attr' => '
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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель FreshGel Standart, гелевая, с охлаждающим эффектом</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Magnigel Foam</div></li>
			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест, рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлен именно в Италии на заводе в Прато.</div></li>
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
			Подушка FreshGel Standard имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, в том числе РОСТЕСТ, рекомендована к использованию детям и взрослым Центральным Институтом Травматологии и Ортопедии РФ.

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
				Сертифицировано в 70-ти странах мира!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
		'price' => 7900.00,
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 5500,
		//), //скидка
	),
	array(
		'address' => 'MemoGel+Standart',
		'parent_address' => 'gelevye-podushki',
		'parent_name' => 'Гелевые подушки',
		'name' => 'Подушка MemoGel Standard',
		'title' => 'Гелевая подушка с эффектом памяти Magniflex MemoGel Standard в официальном интернет-магазине Magniflex ',
		'description' => 'Описание, фотографии, состав гелевой подушки с эффектом памяти Magniflex MemoGel Standard',
		'keywords' => 'гелевая подушка, подушка с эффектом памяти, итальянская подушка',
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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
</div>
		',
		'advantages' => '
			<ul>
			<li class="hnb_liwhite">Ортопедическая подушка <div class="hnb_marg">Модель  MemoGel Standart, эффект памяти, охлаждающий эффект, гелевая основа</div></li>
			<li class="hnb_ligray">Удобная упаковка <div class="hnb_marg">Гарантия высокого уровня гигиены. Удобство транспортировки</div></li>
			<li class="hnb_liwhite">Наполнитель <div class="hnb_marg"> Magnigel Foam + MemoForm</div></li>

			<li class="hnb_ligray">Сертификаты <div class="hnb_marg">качества международных организаций, в России сертифицировано РосТест</div></li>
			<li class="hnb_liwhite">Итальянская подушка <div class="hnb_marg">изготовлен именно в Италии на заводе в Прато.</div></li>
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
				Сертифицировано в 70-ти странах мира!
			<br /><br /><br /><br /><br /><br /><br />
				</div>
				<div class="hnb_contrig">
					

			В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.<br><br>

			Вся продукция компании Magniflex сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами. Ортопедические матрасы компании Magniflex поставляются более чем в 70 стран по всему миру: от Японии и Австралии до США и Бразилии.<br><br>

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
		'price' => 8200.00,
		
		//'discount_koef' => array('date_start' => '1.7.2015', 'date_end' => '31.7.2015',
			//'prices' => 5750,
		//), //скидка
	),
	/* аксессуары, основания */
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
		'img' => '/img/product/big/osnovanie.jpg',
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
    <div class="fb-like" style="  float: left;" data-href="http://women.vassacoshop.ru/product_info.php?products_id=<?php echo $_GET[\'products_id\']; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
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

			<img width="640" src="/img/osnovanie-pod-matrasy-03.jpg"  title="Ортопедическое основание Dream - подставка под матрас">

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
			<div id="coin-slider">
					
								<a href="#" title="Ортопедическое основание Dream (Россия)" target="_blank">
									<img src="/img/ortopedicheskaya-reshetka01.jpg" title="Ортопедическое основание Dream (Россия)" alt="Ортопедическое основание Dream (Россия)" />
			<span>
			Ортопедическое основание Dream (Россия)
			</span>

								</a>
								
								<a href="#" target="_blank">
									<img src="/img/ortopedicheskaya-reshetka02.jpg" title="Настоящие душистые березовые ламели" alt="Ортопедическое основание под матрасы" />
			<span>
			Настоящие душистые березовые ламели
			</span>

								</a>
								
													<a href="#" target="_blank">
									<img src="/img/ortopedicheskaya-reshetka03.jpg" title="Внимание! Двуспальный вариант - монолитный. Не разбирается" alt="Внимание! Двуспальный вариант - монолитный. Не разбирается" />
			<span>
			Внимание! Двуспальный вариант - монолитный. Не разбирается
			</span>

								</a>

													<a href="#" target="_blank">
									<img src="/img/ortopedicheskaya-reshetka04.jpg" title="Ножки съемные" alt="Ортопедическое основание под матрасы - съемные ножки" />
			<span>
			Ножки съемные
			</span>

								</a>

													<a href="#" target="_blank">
									<img src="/img/ortopedicheskaya-reshetka05.jpg" title="Ортопедическое основание под матрасы - упаковка" alt="Ортопедическое основание под матрасы - упаковка" />
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
			array('80x190',3200.00),
			array('80x200',3200.00),
			array('90x190',3300.00),
			array('90x200',3300.00),
			array('100x200',4200.00),
			array('120x190',3800.00),
			array('120x200',3800.00),
			array('140x190',4100.00),
			array('140x200',4100.00),
			array('150x190',4400.00),
			array('150x200',4400.00),
			array('160x190',4400.00),
			array('160x195',4400.00),
			array('160x200',4400.00),
			array('180x190',4800.00),
			array('180x195',4800.00),
			array('180x200',4800.00),
			array('200x200',5600.00),
		),
	),
);

?>