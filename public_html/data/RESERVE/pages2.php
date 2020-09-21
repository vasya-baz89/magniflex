<?php
	if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}
	
	$get_breadcrumbs = function($item){
		if(!$item['address']) return false;
		if(isset($item['no_breadcrumbs'])){  if($item['no_breadcrumbs']){ return false; }}
		
		$breadcrumbs_ret = array(array('Главная','/'));
		if($item['parent_address'] && $item['parent_name']) $breadcrumbs_ret[] = array($item['parent_name'], '/'.$item['parent_address'].'/');
		$breadcrumbs_ret[] = array($item['name']);
		return $breadcrumbs_ret;
	};
	//$breadcrumbs_subclass = 'breadcrumbs_news';
	
	$pages = array(
		array(
			'address' => '',
			'parent_address' => '',
			'parent_name' => '',
			'name' => '',
			'left_sidebar' => '',
			'title' => 'Официальный сайт MAGNIFLEX - итальянские ортопедические матрасы и подушки | Магнифлекс',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX. Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам! Быстрая бесплатная доставка',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
				<!--<div id="med-cookies"><div class="med-cookies-inside">
				<style>
				#martop {
				    margin-top: 149px;
					
				}
				</style>
				<a class="hnb_optop" href="/skidki-merinos/"></a>
				<img class="hnb_skid25-2right" src="/img/srvimg/skid25-2right.png" alt="" />
				<div style="color:#f0e309;">СПЕЦИАЛЬНАЯ АКЦИЯ В ИЮЛЕ!</div>
20% скидка на матрасы Magniflex Bamboo и FreshGel<br>
30% скидка на все ГЕЛЕВЫЕ подушки! <br><br> <!--<span  onclick="document.getElementById(\'med-cookies\').style.display=\'none\'; document.getElementById(\'martop\').style.margin=\'0\';" class="med-cookie-accept">ЗАКРЫТЬ</span> <a href="/skidki-merinos/" class="med-cookie-accept">Все Скидки!</a></div>--></div>

				<div class="sl_top">
				<div class="main_sl">
					<div>
						<a href="#" >
							<img src="/img/sl_00.jpg" alt="MAGNIFLEX — ЛУЧШЕЕ ИЗ ИТАЛИИ" />
						</a>
					</div>
					<div>
						<a href="#" >
							<img src="/img/smartech-banner-HP-ok.jpg" alt="девушка освещающая путь" />
							<!--<div class="title">
								<span>У НАС СНИЖЕНЫ ЦЕНЫ!</span>
								<br>
								На весь ассортимент матрасов и подушек
							</div>-->
						</a>
					</div>-->
					<div>
						<a href="/catalog/" >
							<img src="/img/sl_1.jpg" alt="матрас magniflex" />
							<!--<div class="title">
								<span>Magniflex - самая известная компания в Европе</span>
								<br>
								Работаем с 1962 года
							</div>-->
						</a>
					</div>
					<div>
						<a href="/catalog/orthopedic_mattresses/natur-baci-mattress/" >
							<img src="/img/sl_2.jpg" alt="кровать магнифлекс в Риме" />
							<!--<div class="title">
								<span>Идеальная формула здорового сна</span>
								<br>
								Воплощение комфорта и удовольствия в Вашем сне!
							</div>-->
						</a>
					</div>
					
					
					<!--<div>
						<a href="/catalog/orthopedic_mattresses/natur-baci-mattress/" >
							<img src="/img/sl_3.jpg" alt="продукция магнифлекс безопасна для детей и взрослых" />
							<div class="title">
								<span>Безопасно, даже для самых маленьких</span>
								<br>
								Магнифлекс - только натуральные, экологически чистые материалы.
							</div>
						</a>
					</div>-->
				</div>
				</div>
				<div class="hnb_kosmteh">
					<div class="hnb_kosmteh_text">
						Официальное представительство Magniflex в России
					</div>
					<div class="hnb_kosmteh_bot_text">    <br />
Мы — единственное официальное представительство Magniflex (Магнифлекс) в Российской Федерации.<br />
Нам принадлежит эксклюзивное право торговли продукцией Magniflex.  <br />
Поэтому мы, как первоисточник, предлагаем САМЫЕ ВЫГОДНЫЕ цены и условия, гарантии подлинности и качества товаров.<br />
					</div>
					<img src="/img/kosmteh.jpg" alt="матрас и подушка магнифлекс" />
				</div>
				<hr class="hnb_myhr" />
				<div class="hnb_kosmteh2">
					<div class="hnb_kosmteh_text">
						Ортопедические матрасы и подушки. Изобретены, созданы и протестированы в Италии 
					</div>
					<div class="hnb_kosmteh_bot_text"><br>
					Вся продукция Magniflex производится ИСКЛЮЧИТЕЛЬНО в Италии в городе Прато (рядом с Флоренцией).<br />
					Тщательный контроль позволяет гарантировать исключительное качество продукции. 
<br /><br />
В процессе создания матрасов мы используем инновационное оборудование, новейшие научные достижения, в том числе передовые космические технологии НАСА,
применяем электронные системы сборки. Magniflex уже более половины века занимает лидирующие позиции на международной арене среди всех производителей 
матрасов.  Именно мы в 1986 г. изобрели и запатентовали вакуумную упаковку матрасов, а в 2000 г. — «матрасы с эффектом памяти».
<br /><br />
 
Продукция Magniflex представлена на мировом и внутренних рынках под торговыми марками Magniflex PierCardin, Materassi & Materassi, Dormir.<br />
Концерн состоит из двух производственных компаний: Magniflex S.p.A. и Alessanderx S.p.A. 
<br /><br />
Официальный международный сайт - www.magniflex.it (итальянский) / www.magniflex.com (для англоязычных посетителей).
					</div>
				</div>
				<div class="hnb_contvideo">
					<video controls="controls" tabindex="0" style="width:100%;">
					  <source src="/data/video/index/video.mp4" type="video/mp4;" />
					  <source src="/data/video/index/video.webm" type="video/webm;" />
					  <object type="application/x-shockwave-flash" data="/data/video/index/video.swf" width="100%" height="585px" id="video_index" style="margin:0 auto;display:inline;zoom:1;float: none;background:white;">
							<param name="movie" value="/data/video/index/video.swf" />
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
							<a rel="nofollow" href="http://www.adobe.com/go/getflash">
								<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
							</a>
						</object>
					</video>
					<script>
					$(document).ready(function(){
						var $video_el = $(\'.hnb_contvideo video\');
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
				<div class="hnb_kosmteh3">
					<div class="hnb_kosmteh_text">
						Настоящие ортопедические матрасы
					</div>
					<div class="hnb_kosmteh_bot_text">    <br />
						Продукция компании Magniflex ("Магнифлекс") действительно признана <span style="  text-decoration: underline;">ортопедическими изделиями</span>. Этот факт  подтвержден<br /> 
						десятками сертификатами различный стран, в том числе в России, Италии, США, Японии, Австралии.
						<br /><br />
В России матрасы Magniflex рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ.
					</div>
					<br /><br />
					<img src="/img/tvo_starmagni.jpg" alt="матрас и подушка магнифлекс " />
					<div class="hnb_kosmteh_bot_text" style="margin-top: 30px;font-size:12px;line-height:18px;">
						Звезды национальной команды Италии по регби Martìn Castrogiovanni и Gonzalo Canale в рекламе нового умного матраса Magniflex. 
						
					</div>
					
				</div>
				<hr class="hnb_myhr" />
				<!--<div class="hnb_nasortmat">
					<img class="hnb_nasortmat_background" src="/img/nasortmat.jpg" alt="состояние невесомости во сне" />
					<h1>Настоящие ортопедические матрасы</h1>
					<div class="hnb_contredaktion"><div>Продукция компании Magniflex ("Магнифлекс") действительно признана ортопедическими изделиями. Это подтверждено десятками сертификатами различный стран, в том числе в России, Италии, США, Японии, Австралии. В России матрасы Magniflex рекомендованы к использованию Центральным Институтом Травматологии и Ортопедии РФ.<br>				</div></div>
				</div>-->
				<div class="hnb_slid">
				<div id="container_main">
				<div id="slides">
					
								<div>
									<p class="title_3">МАТРАСЫ ОРТОПЕДИЧЕСКИЕ MAGNIFLEX MERINOS.</p>
									<div class="hnb_slidimg">
										<img src="/img/slaydcont/merino.jpg" alt="матрас магнифлекс меринос" />
									</div>
									<div class="hnb_contslidtext">
									Плотный беспружинный ортопедический матрас изготовлен из латексной пены. Благодаря уникальной молекулярной структуре достигается самая лучшая вентиляция, что обеспечивает Вам максимальный комфорт ночью в любое время года вне зависимости от влажности и температуры окружающей среды. "Зимняя сторона" изготовлена из натуральной шерсти овец породы меринос, летняя – из хлопка. Это матрас по погоде и настроению: для получения максимального комфорта и удовольствия от здорового, спокойного сна, достаточно просто перевернуть его.
									<br /><br />
									Материалы, которые используются при изготовлении magniflex merinos, полностью соответствуют действующим международным стандартам, что подтверждается продолжительными испытаниями и многочисленными тестами: продукция натуральная, экологически чистая, не содержит аллергенных или токсичных элементов. Поэтому данная модель подходит даже людям, страдающим повышенной чувствительностью, в том числе и детям. Вы можете быть абсолютно спокойны за здоровье Ваших родных и близких.
									<br /><br />
									 Настоящий итальянский матрас высочайшего качества. Купить его Вы можете в нашем фирменном интернет магазине.
									</div>
									
									<div class="clear"></div>
								</div>
								
								<div>
								<p class="title_3">ДЕТСКИЙ ОРТОПЕДИЧЕСКИЙ МАТРАС MERINO ДЛЯ ДЕТЕЙ</p>
								<div class="hnb_slidimg">
										<img src="/img/slaydcont/merino.jpg" alt="матрас магнифлекс меринос детский" />
									</div>
									<div class="hnb_contslidtext">
									Разработан специально для детей, учитывая все потребности растущего и развивающегося организма, признан победителем в номинации «лучший ортопедический матрас для детей» по версии итальянского журнала Hachette Home. И это вполне справедливо, ведь он сочетает в себе все самые ценные характеристики: детский беспружинный, практичный, не вызывает аллергию, прослужит не менее 12 лет без деформации и износа, фирменная гарантия - 12 месяцев.
				<br /><br />					
				В разработке принимали участие ведущие итальянские врачи-ортопеды и специалисты-инженеры холдинга Magniflex. В основе используется высокотехнологичный ELIOCEL 40 (Элиочел магнифлекс), превосходящий по своим свойствам натуральный латекс. Все подростковые матрасы для девочек и мальчиков Магнифлекс Merino (merinos) отвечают всем и функциональным требованиям и обеспечивают коррекцию и профилактику повреждений позвоночника, таких как: сколиоз, лордоз, кифоз, боли в суставах, рекомендованы Центральным Институтом Травматологии и Ортопедии РФ.
				<br /><br />
				Ортопедический матрас Merino особенно полезен: детям, потому что уже с первых дней жизни им необходима надежная опора для правильного формирования позвоночника; подросткам , потому что в период развития и формирования позвоночного столба необходимо уделять повышенное внимание правильному положению тела на кровати.
									</div>
									
									<div class="clear"></div>
								</div>

								<div>
								<p class="title_3">GREEN TEA – ЛУЧШИЕ ОРТОПЕДИЧЕСКИЕ МАТРАСЫ ИЗ ИТАЛИИ, КОТОРЫЙ ВЫ МОЖЕТЕ КУПИТЬ В МОСКВЕ</p>
								<div class="hnb_slidimg">
										<img src="/img/slaydcont/merino-green-tea.jpg" alt="матрас магнифлекс green tea" />
									</div>
									<div class="hnb_contslidtext">
									Итальянские матрасы серии green tea («магнифлекс Грин Ти») - это беспружинный матрас с двусторонним покрытием и усиленными антиаллергенными свойствами. Выделяется благодаря своему антисептическим действием благодаря пропитке чехла натуральным экстрактом зеленого чая. В результате эластичная, терморегулирующая ткань приобретает свойства многочисленных активных компонентов зеленого чая, способствующих крепкому полноценному здоровому сну. Внутренний слой изготовлен из материала Элиочел-60 - eliocel 60, который усиливает выравнивания позвонков и в результате оказывает успокаивающее действие на нервную систему. Ежедневное применение green tea merinos способствует усилению иммунитета, здоровому полноценному сну, накоплению сил и предотвращению болезней дыхательной и опорно-двигательной систем.
									</div>
									
									<div class="clear"></div>
								</div>

								<div>
								<p class="title_3">МАТРАСЫ ОРТОПЕДИЧЕСКИЕ MAGNIFLEX BAMBOO</p>
								<div class="hnb_slidimg">
										<img src="/img/slaydcont/merino-bambuk.jpg" alt="матрас магнифлекс bambo" />
									</div>
									<div class="hnb_contslidtext">
									Характерной особенностью этого итальянского матраца является наличие волокон бамбука в ткани чехла. Волокна бамбука - это сильное антибактериальное средство. Благодаря пектину, входящему в состав бамбука, такая ткань благотворно влияет на состояние кожи, т.к. оказывает восстанавливающее и питательное действие. Биэластичная ткань обладает деодорирующим свойством – свойством удаления неприятных запахов с поверхности. Внутренний слой merinos bamboo изготовлен из новейшего экологического материала на основе натурального латекса - Элиочел 60. За счёт использования латексной основы матрас очень эластичен. Мягкая рифленая поверхность ортопедического матраца магнифлекс приятна на ощупь, усиливает кровообращение и обеспечивает дополнительный массаж.
									</div>
									
									<div class="clear"></div>
								</div>

								<div>
									<p class="title_3">WATERLATTEX – ЛАТЕКСНЫЙ  МАТРАС</p>
									<div class="hnb_slidimg">
										<img src="/img/slaydcont/waterlatex.jpg" alt="матрас магнифлекс waterlattex " />
									</div>
									<div class="hnb_contslidtext">
									Беспружинный латексный ортопедический матрац ячеистой структуры, вариант зима - лето. Эта модель имеет две разновидности: Waterlatex, имеющий с двух сторон шерстяное покрытие и Waterlatex Merino, с одной стороны обтянутый 100% хлопком, а с другой - мериносовой шерстью, что по мнению ученых крайне благоприятно действует на рецепторы нашей кожи, способствует расслаблению мышц и хорошему кровообращению, что в свою очередь снижает боль, вызванную радикулитом, невралгиями и др. Матрас, мягкий, очень комфортный, подходит для людей зрелого и среднего возраста, а также женщинам, ожидающих ребенка. Идеален для людей большую часть времени спящих на боку или на животе.
									</div>
									
									<div class="clear"></div>
								</div>

								<div>
									<p class="title_3">МАТРАСЫ ОРТОПЕДИЧЕСКИЕ MAGNIFLEX NATUR BACI (ПОЦЕЛУЙ)</p>
									<div class="hnb_slidimg">
										<img src="/img/slaydcont/natur.jpg" alt="матрас магнифлекс natur baci" />
									</div>
									<div class="hnb_contslidtext">
									Основной элемент дизайна - отпечатки страстного поцелуя. Словно приглашение вернуться романтическую постель для восхитительной церемонии любви. Смелый и забавный принт - ободряющий и романтичный мотив дома с лаконичной обстановкой. Эти рисунки и символы заявляют о свободе мысли и раскованности, что вполне соотносится с требованием времени. Этой во всех смыслах яркой моделью Магнифлекс подтверждает своё умение следовать мировым тенденциям, которое сделало Магнифлекс лидером этого сегмента рынка.
									</div>
									
									<div class="clear"></div>
								</div>

								<div>
									<p class="title_3">ОРТОПЕДИЧЕСКИЕ ЛАТЕКСНЫЕ МАТРАСЫ MEMO MERINO</p>
									<div class="hnb_slidimg">
										<img src="/img/slaydcont/memory.jpg" alt="матрас магнифлекс memo merino" />
									</div>
									<div class="hnb_contslidtext">
									Матрас с эффектом памяти, который «помнит» контур Вашего тела. Этот матрас изготовляется из вязко-эластичной латексной пены высокой плотности с открытыми, "дышащими" ячейками, чувствительными к изменению веса и формы. Специальная материя, разработанная Dupont, способствует одностороннему прохождению воздуха и испарению влаги изнутри. 
									<br /><br />
				Memoform "подстраивается" под Ваше тело, вы тут же найдете наилучшее положение для сна. Технология Memoform гарантирует, что тело спящего человека будет избавлено от лишнего давления, затекания мышц и защемления нервов. А значит, можно навсегда забыть о бессоннице.
									</div>
									
									<div class="clear"></div>
								</div>
						</div>
						
						
				</div>
				</div>
			'
		),
		array(
			'address' => 'catalog',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Каталог',
			'left_sidebar' => '',
			'title' => 'Каталог элитных и ортопедических матрасов Magniflex (Италия)',
			'description' => 'Каталог продукции Магнифлекс в России: ортопедичесие матрасы и подушки',
			'keywords' => 'матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, элитные матрасы',
			'text' => '
				<div class="sf_cat_block">
					<div class="sf_cat_title">
						Каталог продукции Magniflex
					</div>
					<p>
						В нашем интернет магазине представлена вся линейка продукции Magniflex, поставляемая в Россию.<br>
						Никакие другие модели официально в Российской Федерации не продаются.<br>
						Некоторые названия аналогичных  матрасов или подушек Магнифлекс могут отличаться от представленных на итальянском сайте magniflex.com.<br>
						Связано это исключительно с тем, что названия для разных регионов стараются подбирать исходя из языковых особенностей: для итальянских покупателей - итальянские названия, для англоязычных покупателей - английские названия и т.п. <br>
						Россию, исходя из принципа деления, отнесли к англоязычным регионам.<br>
					</p>
				</div>
				<div class="sf_cat_hr"></div>
				<div class="sf_cat_block">
					<div class="sf_cat_title">
						Ортопедические матрасы Magniflex
					</div>
					<p>
						Основная часть коллекции фирмы Магнифлекс.<br>
						Дышащие, настоящие ортопедические матрасы в вакуумной гигиеничной упавковке с отличными анатомическими свойствами.<br>
						Практичные, износостойкие, антиаллергенные, изготовленные из натуральных, экологически чистых тканей и материалов.<br> 
						Произведены в Италии. <br> 
					</p>
					
					<img src="/img/sf_cat_img.jpg" alt="матрас magniflex merino">
					
					<p>
						<a href="/catalog/orthopedic_mattresses/MERINOS/">Magniflex Merino</a> - самый популярный итальянский матрас в России. Его выбрали более 200 000 покупателей!
					</p>
				</div>
				<div class="sf_cat_hr"></div>
				<div class="sf_cat_block">
					<div class="sf_cat_title">
						Элитные матрасы Magniflex
					</div>
					<p>
						Дорогие, изысканные, эксклюзивные модели для избранных.<br>
						Только Лучшие технологии, материалы и ткани, отобранные вручную.<br>
						Именно на таких матрасах спят члены королевских семей и элита мирового общества<br>
					</p>
					
					<img src="/img/sf_cat_img.jpg" alt="матрас magniflex merino">
					
					<p>
						<a href="elitnye-matrasy/">Magniflex</a> - популярный элитный итальянский матрас в России.
					</p>
				</div>
				<br>
			'
		),
		array(
			'address' => 'company',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'О компании',
			'left_sidebar' => 'o-magniflex',
			'title' => 'Компания Magniflex (Магнифлекс): история, информация, факты',
			'description' => 'Кратко о компании Магнифлекс',
			'keywords' => 'magniflex, магнифлекс, компания магнифлекс',
			'text' => '
				<style>
				#breadcrumbs {
					background: url(/img/breadcrumbs_aziendaok.jpg);
					height: 220px;
				}
				</style>
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					
					<!--{left_sidebar}-->

					</div>
					<div class="hnb_conttextright">
					<h1 class="hnb_mytitlepag">О КОМПАНИИ</h1>

					<strong style="color: #666666; font-size: 12px;">В мире</strong>
					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">Magniflex (Магнифлекс) - крупнейший итальянский производитель ортопедических матрасов, подушек и сопутствующих товаров для сна в Европе. Ежегодно в мире продается более 3,5 миллионов ортопедических матрасов Magniflex. Компания была основана в 1962 году Джулиано Мани (Giuliano Magni). Концерн Magniflex состоит из двух производственных компаний: Magniflex S.p.A. и Alessanderx S.p.A. В настоящее время компания представлена на внутреннем и мировом рынках под брендовыми названиями Magniflex, PierrCardin, Materassi &amp; Materassi, Dormir и Relaxsan. Концерн Magniflex владеет самым крупным заводом (площадь более 33.000 квадратных метров) по производству ортопедических матрасов в Европе, расположенном в Италии в небольшом городе Прато рядом с всемирно известной Флоренцией. В 1986 году именно специалисты Магнифлекс изобрели вакуумную технологию по скрутке матрасов. 
					</p>
					<p style="color: #666666; background-color: #ffffff; font-size: 12px;"><strong>В России</strong>
					<br>
					В России компания Magniflex представлена с 1992 года, имеет представительства в городах: Москва, Санкт-Петербург, Тула, Екатеринбург, Нижний Новгород, Сыктывкар, Сургут, Красноярск, Киров, Братск, Тюмень, Владимир, Новосибирск, Ростов, Тверь, Тамбов, Воронеж, Липецк, Уфа, Владивосток, Петрозаводск и др. — с полным списоком можно ознакомиться в разделе <a href="https://www.magniflex.ru/o-magniflex/russia/">Magniflex в России</a>. За 22 года работы на российском рынке было продано более 670 000 ортопедических матрасов.
					<br><br>
						</p>
					<p align="center">
					  <img src="/img/magniflex-florencia.jpg" alt="магнифлекс - сделано в Италии, Флоренция"><br>
					<b>Сердце Италии - сказочная Флоренция - родина всех матрасов Magniflex</b>

					</p>
					</div>
					<div class="clear"></div>
				</div>
			'
		),
		array(
			'address' => 'mission',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Миссия',
			'left_sidebar' => 'o-magniflex',
			'title' => 'Важно - миссия компании Magniflex',
			'description' => 'Слова генерального директора компании Магнифлекс',
			'keywords' => 'magniflex',
			'text' => '
				<style>
				#breadcrumbs {
					background: url(/img/breadcrumbs_sonnook.jpg);
					height: 220px;
				}
				</style>
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					
					<!--{left_sidebar}-->

					</div>
					<div class="hnb_conttextright">
					<h1 class="hnb_mytitlepag">ВАЖНО</h1>
					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					Хороший матрас и Чистая постель - святая святых нашей жизни. <br>
					Мы вверяем нагим ему свое усталое тело, чтобы Он вернул нам силы, дал отдых в тепле домашней обстановки.<br>
					На матрасе мы познаем самые сладостные часы Бытия - часы Любви и Сна. <br>
					Хороший матрас и чистая постель священны. Их надо беречь, ценить, почитать как высшее и отраднейшее из земных благ. <br>
					Под таким девизом работает Magniflex… работает уже 50 лет.
					</p>
					<br />
					<img alt="magniflex - важно" src="/img/vazhno.jpg">
					</div>
					<div class="clear"></div>
				</div>
			'
		),
		array(
			'address' => 'why-magniflex',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Почему Magniflex',
			'left_sidebar' => 'o-magniflex',
			'title' => 'Почему Вам стоит выбрать именно продукцию компании Magniflex | Магнифлекс',
			'description' => '10 причин выбрать матрасы магнифлекс',
			'keywords' => 'почему магнифлекс',
			'text' => '
				<style>
				#breadcrumbs {
					background: url(/img/breadcrumbs_riposook.jpg);
					height: 220px;
				}
				</style>
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					
					<!--{left_sidebar}-->

					</div>
					<div class="hnb_conttextright">
					<h1 class="hnb_mytitlepag">ПОЧЕМУ MAGNIFLEX</h1>

					<h5>Почему Вам стоит выбрать именно продукцию компании Magniflex </h5>

					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					- более 50 лет мы занимаемся производством, пожалуй, самых лучших ортопедических матрасов в Европе<br>
					- 100% made in Italy. Magniflex - это настоящие итальянские матрасы. Вся продукция изготавливается исключительно в Италии на заводе в Прато (Флоренция).<br> 
					- сертификаты и рекомендации врачей-ортопедов.  В России продукция Magniflex сертифицирована РОСТЕСТ и имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, рекомендована Центральным Институтом Травматологии и Ортопедии РФ, кроме того продукция сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами.<br>
					- наша продукция пользуется успехом более чем в 96 странах по всеми миру!<br>
					- самые передовые технологии, собственный исследовательский центр, сотрудничество с ведущими мировыми институтами и специалистами-ортопедами<br>
					- высочайшее качество  (подтвержденное сотнями сертификатами, свидетельствами, наградами и патентами в 96-ти странах, в том числе в США, Германии, Великобритании, Италии, Франции, Бразилии, России, Японии, Австралии и многих других)<br>
					- 20 лет безупречной работы в России

					</p>
					<br />
					<img alt="magniflex - Почему Magniflex" src="/img/pochemy-magniflex.jpg">
					</div>
					<div class="clear"></div>
				</div>
			'
		),
		array(
			'address' => 'company-history',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'История Компании',
			'left_sidebar' => 'o-magniflex',
			'title' => 'История компании Magniflex | Магнифлекс',
			'description' => 'Основные вехи компании Magniflex',
			'keywords' => 'magniflex, магнифлекс история',
			'text' => '
				<style>
				#breadcrumbs {
					background: url(/img/breadcrumbs_qualitaok.jpg);
					height: 220px;
				}
				</style>
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					
					<!--{left_sidebar}-->

					</div>
					<div class="hnb_conttextright">
					<h1 class="hnb_mytitlepag">История Компании</h1>

					<h3>1962</h3>
					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					Год основания компании. Именно в этом году в Италии была создана компания Magniflex и был выпущен наш первый пружинный матрас. <br>
					</p>

					<h3>1983</h3>
					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					Магнифлекс - лидер по производству матрасов и подушек в Италии. Команда Магнифлекс выигрывает Giro d\'Italia.  <br>
					</p>

					<h3>1986</h3>
					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					Специалисты Magniflex изобрели и запатентовали технологию вакуумных матрасов, выведшую компанию в мировые лидеры отрасли. <br>
					</p>

					<h3>1991</h3>
					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					Начало сотрудничества с компанией Pierre Cardin, которое продолжается и по сей день. Выпуск особой серии матрасов "Пьер Карден" <br>
					</p>

					<h3>1992</h3>
					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					Открыто представительство Magniflex в Москве (Россия). Более чем за 20 лет успешной работы в России было продано более 350 000 ортопедических матрасов. Открыты представительства в Москве, Санкт-Петербурге, Туле, Екатеринбурге, Нижнем Новгороде, Сыктывкаре, Сургуте, Красноярске, Кирове, Братске, Тюмени, Владимире, Новосибирске, Ростове, Твери.<br>
					</p>


					<h3>1996</h3>
					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					Открыто представительство в Японии. <br>
					</p>

					<h3>2000</h3>
					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					Создание матрасов и подушек с "эффектом памяти", благодаря использованию космических разработок НАСА и изобретению материала Memoform. <br>
					</p>

					<h3>2002</h3>
					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					Открытие новой самой крупной в Европе фабрики по производству матрасов - выпуск более 10 000 ортопедических матрасов в день. Каждые 8 секунд мы выпускаем новый матрас! <br>
					</p>

					<h3>2009</h3>
					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					Начало сотрудничества с Tonino Lamborghini. <br>
					</p>


					<h3>2014</h3>
					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
						Сегодня компания Magniflex - это один из мировых лидеров (входящий в ТОП5) по производству ортопедических матрасов! Магнифлекс представлен более чем в 96-ти странах на 5 континентах. Несколько десятков миллионов человек в этот момент времени, когда вы читаете этот текст, спит на матрасе Magniflex.   <br>
					</p>

					</div>
					<div class="clear"></div>
				</div>
			'
		),
		array(
			'address' => 'magniflex-in-the-world',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Magniflex во всем мире',
			'left_sidebar' => 'o-magniflex',
			'title' => 'Magniflex во всем Мире',
			'description' => 'Фотографии и видео со всего мира Магнифлекс',
			'keywords' => 'magniflex италия, магнифлекс италия, магнифлекс германия',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					
					<!--{left_sidebar}-->

					</div>
					<div class="hnb_conttextright">
					<h1 class="hnb_mytitlepag">Magniflex во всем мире</h1>


					<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					Сегодня продукция компании Magniflex (Магнифлекс) успешно продается более чем в 96-ти странах по всему миру, среди них такие страны, как: Италия, Германия, Великобритания, США, Канада, Япония, Китай, Индия, ОАЭ, Австралия, Гон-Конг, Сингапур и др.

					<br><br>
					Раздел наполняется.
					</p>

					<br><br>
						<strong style="color: #666666; font-size: 12px;">Италия:</strong>
						<div class="hnb_gal">
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-italy-01.jpg" class="boxer relgallery" title="Новый бутик Magniflex в Милане" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-01_small.jpg" alt="бутик Magniflex в Милане" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-italy-02.jpg" class="boxer relgallery" title="Ресторан Magniflex" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-02_small.jpg" alt="Ресторан Magniflex" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-italy-03.jpg" class="boxer relgallery" title="Magniflex в Милане - выставка 2014 г" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-03_small.jpg" alt="Magniflex в Милане - выставка 2014" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-italy-04.jpg" class="boxer relgallery" title="Magniflex в Милане - выставка 2014 г" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-04_small.jpg" alt="Magniflex в Милане" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-italy-05.jpg" class="boxer relgallery" title="Интерьер магазина Магнифлекс в Италии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-05_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-italy-06.jpg" class="boxer relgallery" title="Интерьер магазина Магнифлекс в Италии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-06_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-italy-07.jpg" class="boxer relgallery" title="Интерьер магазина Магнифлекс в Италии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-07_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-italy-12.jpg" class="boxer relgallery" title="Новый магазин в Италии. Рим" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-12_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-italy-09.jpg" class="boxer relgallery" title="Магнифлекс. Италия" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-09_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-italy-08.jpg" class="boxer relgallery" title="Магнифлекс - главный спонсор национальной команды регби" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-08_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-italy-10.jpg" class="boxer relgallery" title="Магнифлекс. Италия" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-10_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
						 </div>  
						

					<br><br>





						<strong style="color: #666666; font-size: 12px;">Германия:</strong>
						<div class="hnb_gal">
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-germany-01.jpg" class="boxer relgallery" title="Magniflex. Международная выставка в Кельне (Германия)" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-germany-01_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-germany-02.jpg" class="boxer relgallery" title="Magniflex. Международная выставка в Кельне (Германия)" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-germany-02_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-germany-03.jpg" class="boxer relgallery" title="Magniflex. Международная выставка в Кельне (Германия)" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-germany-03_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-germany-04.jpg" class="boxer relgallery" title="Magniflex. Международная выставка в Кельне (Германия)" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-germany-04_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
						 </div> 

					<br><br>




						<strong style="color: #666666; font-size: 12px;">США:</strong>
						<div class="hnb_gal">
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-usa-01.jpg" class="boxer relgallery" title="Магазины Магнифлекс в США" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-usa-01_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-usa-02.jpg" class="boxer relgallery" title="Магазины Магнифлекс в США" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-usa-02_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-usa-03.jpg" class="boxer relgallery" title="Магазины Магнифлекс в США" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-usa-03_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-usa-04.jpg" class="boxer relgallery" title="Магазины Магнифлекс в США" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-usa-04_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-usa-05.jpg" class="boxer relgallery" title="Магазины Магнифлекс в США" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-usa-05_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-usa-06.jpg" class="boxer relgallery" title="Магазины Магнифлекс в США" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-usa-06_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
						 </div> 

					<br><br>





						<strong style="color: #666666; font-size: 12px;">Испания:</strong>
						<div class="hnb_gal">
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-spain-01.jpg" class="boxer relgallery" title="Магнифлекс-Испания-Ибица" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-spain-01_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-spain-02.jpg" class="boxer relgallery" title="Магнифлекс-Испания-Ибица" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-spain-02_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-spain-03.jpg" class="boxer relgallery" title="Магнифлекс-Испания-Ибица" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-spain-03_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-spain-04.jpg" class="boxer relgallery" title="Магнифлекс-Испания-Ибица" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-spain-04_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
						 </div> 

					<br><br>



						<strong style="color: #666666; font-size: 12px;">Китай:</strong>
						<div class="hnb_gal">
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-china-01.jpg" class="boxer relgallery" title="Выставка в Шанхае (Китай). Стенд Магнифлекс" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-china-01_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-china-02.jpg" class="boxer relgallery" title="Выставка в Шанхае (Китай). Стенд Магнифлекс" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-china-02_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
						 </div> 

					<br><br>


						<strong style="color: #666666; font-size: 12px;">Индонезия:</strong>
						<div class="hnb_gal">
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-indonesia-01.jpg" class="boxer relgallery" title="Магнифлекс в Индонезии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-indonesia-01_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-indonesia-02.jpg" class="boxer relgallery" title="Магнифлекс в Индонезии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-indonesia-02_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-indonesia-03.jpg" class="boxer relgallery" title="Магнифлекс в Индонезии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-indonesia-03_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
						 </div> 

					<br><br>


						<strong style="color: #666666; font-size: 12px;">Филипинны:</strong>
						<div class="hnb_gal">
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-philipinny-01.jpg" class="boxer relgallery" title="Магнифлекс на Филипинах" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-philipinny-01_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-philipinny-02.jpg" class="boxer relgallery" title="Магнифлекс на Филипинах" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-philipinny-02_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-philipinny-03.jpg" class="boxer relgallery" title="Магнифлекс на Филипинах" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-philipinny-03_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-philipinny-04.jpg" class="boxer relgallery" title="Магнифлекс на Филипинах" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-philipinny-04_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
						 </div> 

					<br><br>


						<strong style="color: #666666; font-size: 12px;">Япония:</strong>
						<div class="hnb_gal">
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-japan-01.jpg" class="boxer relgallery" title="Магнифлекс в Японии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-japan-01_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-japan-02.jpg" class="boxer relgallery" title="Магнифлекс в Японии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-japan-02_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-japan-03.jpg" class="boxer relgallery" title="Кагава - звезда Манчестер Юнайтед. Лицо компании Магнифлекс в Японии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-japan-03_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
							<span itemscope itemtype="http://schema.org/ImageObject">
							<a href="/img/magniflex_world/magniflex-japan-04.jpg" class="boxer relgallery" title="Магнифлекс - спонсор многих спортивных мероприятий в Японии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-japan-04_small.jpg" alt="" itemprop="thumbnailUrl" /></a></span>
							</span>
						 </div> 

					<br><br>

					<strong style="color: #666666; font-size: 12px;">Рекламные материалы</strong>
					  <div>
						<ul class="gallery gal2">
						  
							<li itemscope itemtype="http://schema.org/ImageObject"><a href="/img/magniflex_world/4.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/4_small.jpg" alt="Italy - 2011" itemprop="thumbnailUrl" />Italy - 2011</a></li>
							<li itemscope itemtype="http://schema.org/ImageObject"><a href="/img/magniflex_world/5.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/5_small.jpg" alt="Korea, South - 2010"  itemprop="thumbnailUrl"/>Korea, South - 2010</a></li>
							<li itemscope itemtype="http://schema.org/ImageObject"><a href="/img/magniflex_world/7.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/7_small.jpg" alt="Russia - 2009" itemprop="thumbnailUrl" />Russia - 2009</a></li>
							<li itemscope itemtype="http://schema.org/ImageObject"><a href="/img/magniflex_world/2.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/2_small.jpg" alt="China - 2008" itemprop="thumbnailUrl" />China - 2008</a></li>
							<li itemscope itemtype="http://schema.org/ImageObject"><a href="/img/magniflex_world/3.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/3_small.jpg" alt="India - 2005" itemprop="thumbnailUrl" />India - 2005</a></li>
							<li itemscope itemtype="http://schema.org/ImageObject"><a href="/img/magniflex_world/1.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/1_small.jpg" alt="Canada" itemprop="thumbnailUrl" />Canada</a></li>
							<li itemscope itemtype="http://schema.org/ImageObject"><a href="/img/magniflex_world/6.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/6_small.jpg" alt="Czech Republic" itemprop="thumbnailUrl" />Czech Republic</a></li>
							<li itemscope itemtype="http://schema.org/ImageObject"><a href="/img/magniflex_world/8.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/8_small.jpg" alt="United Kingdom" itemprop="thumbnailUrl" />United Kingdom</a></li>
							<li itemscope itemtype="http://schema.org/ImageObject"><a href="/img/magniflex_world/10.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/2_small.jpg" alt="Italy - 2008" itemprop="thumbnailUrl" />Italy - 2008</a></li>
							<li itemscope itemtype="http://schema.org/ImageObject"><a href="/img/magniflex_world/9.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/9_small.jpg" alt="Italy - 2007" itemprop="thumbnailUrl" />Italy - 2007</a></li>
							<li itemscope itemtype="http://schema.org/ImageObject"><a href="/img/magniflex_world/11.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/11_small.jpg" alt="Pierre Cardin" itemprop="thumbnailUrl" />Pierre Cardin</a></li>

						</ul>
					  </div>










					<div style="clear: both; margin: 40px 0 0 0;">
					<p>Болгария</p>
					<a class="boxer_video" href="http://www.youtube.com/embed/AOGaia4505U?rel=0">
						<img src="/img/magniflex_world/video_prev.jpg" alt="" />
					</a>
					</div>

					</div>
					<div class="clear"></div>
				</div>
			'
		),
		array(
			'address' => 'stars-magniflex',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Звезды и Магнифлекс',
			'left_sidebar' => 'o-magniflex',
			'title' => 'Звезды и Магнифлекс. Известные люди, выбравшие Magniflex | Магнифлекс',
			'description' => 'Фотографии известных в мире людей с матрасами Магнифлекс',
			'keywords' => 'магнифлекс звезды, магнифлекс лицо компании',
			'text' => '
			<style>
			#breadcrumbs {
				background: url(/img/breadcrumbs_sports.jpg);
				height: 220px;
			}
			</style>
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
	</div>
<div class="hnb_conttextright">
		<h1 class="hnb_mytitlepag">Звезды и Магнифлекс</h1>


 <strong style="color: #666666; font-size: 12px;">В мире</strong>
		<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">

			Magniflex - один из крупнейших мировых лидеров по производству матрасов. Компания более чем за полувековую историю снискала славу и уважение у десятков миллионов людей в разных уголках земного шара. Среди поклонников - много известных личностей: спортсменов и политиков, звезд кино и эстрады. В этом разделе мы будем знакомить Вас с лицами компании Магнифлекс, публиковать интересные фотографии, очерки, выкладывать видео-ролики.  

<br><br>
Раздел в стадии обновления 


		</p>

<br><br>
 <strong style="color: #666666; font-size: 12px;">Фотографии</strong>


		<div class="hnb_gal">
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-01.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-01.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-02.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-02.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-03.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-03.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-04.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-04.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-06.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-06.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>


<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-07.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-07.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-08.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-08.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-09.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-09.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-10.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-10.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-11.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-11.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-13.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-13.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-14.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-14.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-15.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-15.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>



<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-17.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-17.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-18.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-18.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-19.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-19.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-22.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-22.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-23.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-23.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-24.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-24.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-25.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-25.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>


<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-28.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-28.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-29.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-29.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>


<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-16.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-16.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-32.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-32.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>


<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-26.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-26.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-30.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-30.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-20.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-20.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-21.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/stars-magniflex/small/stars-magniflex-21.jpg" alt="Thumbnail" itemprop="thumbnailUrl" /></a></span>


		</div>
	<br>
<br>
 <br>

<br>
 <br>


 <strong style="color: #666666; font-size: 12px;">Видео</strong>


</div>
</div>
<div class="clear"></div>
			'
		),
		
		
		array(
			'address' => 'magniflex-daydreamer',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Magniflex',
			'name' => 'На элитных пляжах',
			'left_sidebar' => 'o-magniflex',
			'title' => 'Матрасы Magniflex на элитных пляжах Италии, Монако и на Ибице',
			'description' => 'Фотоотчет: матрасы Magniflex на пляжах  Blu Marlin Ibiza, Ocean Beach, Twiga, Zelos и Vshvaia',
			'keywords' => 'Blu Marlin Ibiza, Ocean Beach, Twiga, Zelos, Vshvaia',
			'text' => '
			<style>
			#breadcrumbs {
				background: url(/img/banner_interna_page_partner.jpg);
				height: 220px;
			}
			
			.hnb_conttextright .hnb_gal img {
				padding: 0;
				float: left;

				width: 233px;
			}
			
			.hnb_gal span{
			        width: 32%;
					height: 152px;
					display: inline-block;
					line-height: 0;
					margin: 0.5%;
			}
			</style>
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
	</div>
<div class="hnb_conttextright">
		<h2 class="hnb_mytitlepag">На элитных пляжах</h2>
		<p>
		Путешествуя этим летом по  Европе, Вы можете встретить матрасы Magniflex не только в элитных бутиках, но и ... на пляжах Италии, Монако и на Ибице. Специалисты нашей компании подготовились к пляжному сезону и разработали удобные шезлонги и лежаки. 
		</p>
		<h4>Magniflex делает Вашу жизнь комфортнее!</h4>
		<p>
		Представляем Вашему вниманию фотоотчет с знаменитых на весь мир пляжей Blu Marlin Ibiza, Ocean Beach, Twiga, Zelos (Монте-Карло) и Ushuaia.
		</p>


<div class="hnb_gal">
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_1.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_1.jpg" alt="Blu Marlin Ibiza UAE" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_2.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_2.jpg" alt="Атмосфера в Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_3.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_3.jpg" alt="Удобный шезлонг Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_4.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_4.jpg" alt="Лежаки Magniflex в Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/blue_marlin_ibiza_logo.jpg" alt="Magniflex в Blu Marlin Ibiza" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_5.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_5.jpg" alt="Лежаки Magniflex в Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>


<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_6.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_6.jpg" alt="Романтика. Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_7.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_7.jpg" alt="Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_8.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_8.jpg" alt="Magniflex и Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/bm_uae_1.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_1.jpg" alt="Комфортный лежак Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/bm_uae_2.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_2.jpg" alt="Magniflex - все что нужно для отдыха" itemprop="thumbnailUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/bm_uae_3.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_3.jpg" alt="Magniflex и Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/bm_uae_4.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_4.jpg" alt="Магнифлекс - это весело" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/bm_uae_logo.jpg" alt="Magniflex в Blu Marlin Ibiza" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/bm_uae_5.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_5.jpg" alt="Лого Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>



<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/bm_uae_6.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_6.jpg" alt="Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/bm_uae_7.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_7.jpg" alt="Напитки Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/bm_uae_8.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_8.jpg" alt="Лежаки Magniflex в Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>

<div style="clear:both;"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ocean_beach_1.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_1.jpg" alt="Развлечения Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ocean_beach_2.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_2.jpg" alt="Развлечения Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ocean_beach_3.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_3.jpg" alt="Отдых на Magniflex в Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ocean_beach_4.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_4.jpg" alt="Отдых с Magniflex в Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/ocean_logo.jpg" alt="Лого Ocean Beach Ibiza" itemprop="thumbnailUrl" />
</span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ocean_beach_5.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_5.jpg" alt="Ночная жизнь Ocean Beach Ibiza. Комфортные матрасы Magniflex" itemprop="thumbnailUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ocean_beach_6.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_6.jpg" alt="Отдых на Magniflex в Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>


<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ocean_beach_7.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_7.jpg" alt="Отдых на Magniflex в Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ocean_beach_8.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_8.jpg" alt="Отдых на Magniflex в Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>

<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/twiga_1.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_1.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/twiga_2.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_2.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/twiga_3.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_3.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/twiga_4.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_4.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/twiga_logo.jpg" alt="TWIGA" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/twiga_5.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_5.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/twiga_6.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_6.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/twiga_7.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_7.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/twiga_8.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_8.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>

<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ushuaia_1.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_1.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ushuaia_2.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_2.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ushuaia_3.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_3.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ushuaia_4.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_4.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/ushuaia_logo.jpg" alt="ushuaia" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ushuaia_5.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_5.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ushuaia_6.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_6.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ushuaia_7.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_7.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/ushuaia_8.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_8.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>


<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/zelos_1.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_1.jpg" alt="Zelos (Монте-Карло)" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/zelos_2.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_2.jpg" alt="Интерьер Zelos (Монте-Карло)" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/zelos_3.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_3.jpg" alt="Лежак Magniflex в Zelos (Монте-Карло)" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/zelos_4.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_4.jpg" alt="Атмосфера Zelos (Монте-Карло)" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/zelos_logo.jpg" alt="Zelos" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/zelos_5.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_5.jpg" alt="пляж Zelos" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/zelos_6.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_6.jpg" alt="пляж Zelos" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/zelos_7.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_7.jpg" alt="меню Zelos" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/dream/zelos_8.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_8.jpg" alt="Magniflex и Zelos (Монте-Карло)" itemprop="thumbnailUrl" /></a></span>
		</div>
	<br>
<br>
 <br>

<br>
 <br>





</div>
</div>
<div class="clear"></div>
			'
		),
		
		array(
			'address' => 'oficialnoe-predstavitelstvo-magniflex',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Единственные в РФ',
			'left_sidebar' => 'o-magniflex',
			'title' => 'Официальное представительство Magniflex в России',
			'description' => 'Единственное официальное представительство Магнифлекс в Росии, эксклюзивное право на торговлю продукцией Magniflex',
			'keywords' => 'magniflex, магнифлекс',
			'text' => '
						<div class="hnb_contarea">
			<div class="hnb_catlogsection">
				<!--{left_sidebar}-->
			</div>

			<div class="hnb_conttextright">
			<h1 class="hnb_mytitlepag">Мы - единственное представительство Magniflex в РФ</h1>

		 <strong style="color: #666666; font-size: 12px;">Единственные в России</strong>
				<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
					 Торговые наименования "Magniflex", "Магнифлекс" являются зарегистрированными товарными знаками, эксклюзивным правом на их использование на территории России обладаем ТОЛЬКО мы. Если Вы зайдете на официальный итальянский сайт компании Magniflex - <a href="https://www.magniflex.it" rel="nofollow" >www.magniflex.it</a> (или <a rel="nofollow" href="https://www.magniflex.com">www.magniflex.com</a>) и выберете раздел "Magniflex in your country", далее страну Россия (Russia), то Вы будете автоматически переправлены на наш сайт - <a href="https://www.magniflex.ru">www.magniflex.ru</a>. <br>
		 <br>
					 На территории России действует широкая сеть наших официальных дилеров и магазинов. Однако за последние годы нами были зарегистрированы случаи продаж контрафактной и поддельной продукции под маркой Magniflex. Будьте внимательны. Если Вы сомневаетесь в подлинности ортопедического матраса или подушки - обратитесь к нам. Каждое изделие марки Magniflex снабжено уникальным кодом, позволяющим выяснить всю его историю. <br>
		 <br /> <br />
		 
     <img src="/img/logo.png" alt="Логотип Magniflex"><br>
		 <br>
				</p>
			</div>
			<div class="clear"></div>
		</div>
			'
		),
		
		array(
			'address' => 'nastoyashchie-ortopedicheskie-matrasy',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Настоящие ортопедические',
			'left_sidebar' => 'production',
			'title' => 'Настоящие ортопедические матрасы и подушки | Магнифлекс',
			'description' => 'Магнифлекс производит ДЕЙСТВИТЕЛЬНО ортопедические матрасы и подушки, сертификаты, свидетельства',
			'keywords' => 'ортопедические матрасы, ортопедические подушки',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h1 class="hnb_mytitlepag">Настоящие ортопедические матрасы и подушки</h1>

<strong style="color: #666666; font-size: 12px;">Настоящие ортопедические</strong>

<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">

Продукция Magniflex (Магнифлекс) - матрасы и подушки - действительно являются ортопедическими изделиями. Компания поставляет свою продукцию более чем в 96 стран по всему миру и в каждой стране мы получаем все необходимые сертификаты и свидетельства. 
<br>
Это особенно важно, поскольку в Российской Федерации нет жестко закрепленного законом стандарта на "ортопедические матрасы" или "ортопедические подушки", поэтому зачастую продавцы и производители вкладывают свой смысл в это словосочетание, широко используя его при рекламе своей продукции. Однако, например, в Италии требования гораздо жестче: прежде чем написать на этикетке слово "Ortopedico", продукт должен получить специальные сертификаты, которые невозможно купить. Аналогичная ситуация и в других странах, таких как в Германии, Англии, США, Японии.
<br><br>
</p>

<strong style="color: #666666; font-size: 12px;">Подтверждения в России</strong>

<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">

	Важнейшим свидетельством ОРТОПЕДИЧЕСКИХ свойств матрасов и подушек Магнифлекс в России - является заключение, выданное нам главным Российским Институтом в области Ортопедии - Центральным Институтом Травматологии и Ортопедии Российской Федерации им. Н.Н. Приорова. С ним Вы можете ознакомиться в разделе <a href="/pokupatelyam/certificates/">сертификаты</a>. Также в России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ. 
</p>


</div>
<div style="clear: both;"></div>				</div>
			'
		),
		array(
			'address' => 'made-in-Italy',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Сделано в Италии',
			'left_sidebar' => 'production',
			'title' => 'Итальянские матрасы Magniflex - сделано ИМЕННО в Италии!',
			'description' => 'Магнифлекс - придуманы и произведены в Италии на заводе в городе Прато',
			'keywords' => ' итальянские матрасы, матрасы из италии',
			'text' => '
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Сделано в Италии</h2>

<strong style="color: #666666; font-size: 12px;">Исключительно итальянская продукция</strong>
<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">

Вся продукция компании Magniflex (Магнифлекс) производится исключительно в Италии итальянскими специалистами в городе Прато рядом с всемирно известной Флоренцией.
<br>
Magniflex (Магнифлекс) располагает самой крупной фабрикой по производству матрасов в Европе (ежедневно мы выпускаем более 10 000 матрасов), оснащенной самыми передовыми технологиями, в том числе используемых в космической отрасли.
<br><br>
</p>




<strong style="color: #666666; font-size: 12px;">Факт</strong>
<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">

В России практически нет других ортопедических матрасов, произведенных за рубежом, кроме Magniflex. Большинство остальных производителей продают франшизу и под европейским/американским наименованием дорого продаются отечественные продукты.


</p>
<br />
<img alt="magniflex - Сделано в Италии" src="/img/made-in-Italy.jpg">



</div>			
			<div style="clear: both;"></div>	</div>			
			'
		),
		array(
			'address' => 'vakuumnaya-upakovka',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Вакуумная упаковка',
			'left_sidebar' => 'o-magniflex',
			'title' => 'Magniflex - итальянские матрасы в вакуумной упаковке',
			'description' => 'Вакуумная упаковка матрасов Magniflex: свойства, фотографии, рекомендации. Запатентованная технология.',
			'keywords' => 'матрасы в вакуумной упаковке, вакуумная упаковка матрасов',
			'text' => '
			<div class="hnb_contarea">
	<div class="hnb_textaligcenter">
 <span class="hnb_bigtytles">Матрасы в вакуумной упаковке – изобретение Magniflex</span>
		В 1986 году именно специалистам компании Magniflex удалось изобрести и запатентовать технологию производства “вакуумных матрасов”. Это достаточно дорогая и технически сложная процедура. Для простоты ее можно представить так: в условии абсолютного вакуума матрас сжимается в 10 раз, скручивается и упаковывается в плотную полиэтиленовую упаковку. Внимание! Внутренний полиэтиленовый пакет не запаян. <br>
		<br>
		<br>
 <img alt="вакуумная упаковка матрасов Магнифлекс" src="/img/upokovka.png"> <br>
		<br>
		<hr>
 <span class="hnb_bigtytles">Гарантировано: новый, идеально чистый</span>
		Вакуумная упаковка гарантирует идеальную чистоту матраса: он будет именно таким, каким сошел с конвейера в Италии. Если вскрыть упаковку – матрас раскроется. Сложить обратно и запечатать уже никак не получится, по этому, вакуумная упаковка – это естественная гарантия того, что товар новый, никогда ранее не использовавшийся. <br>
		<br>
		<div id="coin-slider">
 <a href="#" target="_blank"> <img alt="матрасы в вакуумной упаковке" src="/img/vakuumnaya-upakovka-01.jpg">
<span>
			Вакуумная упаковка &mdash; залог чистоты и удобства 
</span></a> 

<a href="#" target="_blank"> <img alt="вакуумная упаковка матрасов магнифлекс" src="/img/vakuumnaya-upakovka-02.jpg">
<span>
			Сквозь прозрачную полиэтиленовую упаковку легко прочитать нужную информацию 
</span></a> 

<a href="#" target="_blank"> <img alt="вакуумная упаковка матраса магнифлекс - natur comfort" src="/img/vakuumnaya-upakovka-03.jpg">
<span>
			Матрасы упакованы очень компактно – первоначальный объем уменьшается в 10 раз! 
</span></a> 

<a href="#" target="_blank"> <img alt="вакуумная упаковка матрасов magniflex" src="/img/vakuumnaya-upakovka-04.jpg">
<span>
			Допускается незначительная разгерметизация упаковки 
</span></a> 

<a href="#" target="_blank"> <img alt="серийный номер матраса magniflex" src="/img/vakuumnaya-upakovka-05.jpg">
<span>
			Каждый матрас имеет свой идентификатор – серийный номер, вида: S/N XXXXXXXXX. Размер матраса и название модели указано в специальном поле 
</span></a>
		</div>
		<div style="clear:both;">
		</div>
		<hr>
 <span class="hnb_bigtytles">Легкие, Компактные, Удобные</span>
		Вакуумные матрасы настолько легкие, а упаковка удобная, что их можно доставить до дома на общественном транспорте. <br> 
Для транспортировки больших двуспальных моделей лучше использовать автомобиль ;). <br>
		<br>
		<br>
 <img alt="матрас в вакуумной упаковке - может донести даже девушка" src="/img/anyamat.png"> <br>
		<br>
		<hr>
 <span class="hnb_bigtytles">Если нарушена вакуумная упаковка – брак ли это?</span>
		Технологически допускается, незначительное нарушение вакуумной упаковки. Это не продукт питания – матрас не испортится. <br>
Главное, чтобы при полной распаковке матрас восстановил свою изначальную форму. <br>
		<br>
		 Если целостность упаковки вызывает у Вас сомнения — НИ В КОЕМ СЛУЧАЕ НА ОТКРЫВАЙТЕ МАТРАС! Незамедлительно свяжитесь с нашей службой поддержки по телефону, Вам обязательно помогут. <br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>

			<div style="clear: both;"></div>	</div>			
			'
		),
		array(
			'address' => 'fabric-and-treatments',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Ткани и технологии',
			'left_sidebar' => 'production',
			'title' => 'Ткани и Технологии, используемые в  матрасах и подушках Magniflex | Магнифлекс',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Ткани и технологии</h2>




  <h4>Ткани и Технологии, используемые в матрасах и подушках Magniflex</h4>

 <br> <p>
Все ткани, материалы и наполнители Magniflex проходят специальные санитарные обработки, в которых мы НЕ используем химические или токсичные вещества:<br>

  
</p><div class="type"><a name="maedical"></a>
    <img src="/img/maedical.jpg" alt="Maedical">
    <p><strong>Обработка Maedical</strong><br>
Инновационная санитарная обработка всех тканей БЕЗ использования химических веществ, гарантирующая 100% стерильность продукции и высочайший естественный уровень гигиены.  </p>
    <div style="clear:both;"></div>
  </div>


<div class="type"><a name="maedicare"></a>
    <img src="/img/medicare.jpg" alt="Санитарная обработка Medicare">
    <p><strong>Обработка Maedicare</strong><br>
Многоступенчатая инновационная санитарная обработка тканей, материалов и наполнителей БЕЗ использования химических веществ, дающая превосходную степень защиты от плесени, бактерий и моли.
</p>
    <div style="clear:both;"></div>
  </div>






  <div class="type"><a name="antiacaro"></a>
    <img src="/img/antiacaro.jpg" alt="100% защита от пылевых клещей">
    <p><strong>100% защита от пылевых клещей</strong><br>
Все ткани и материалы проходят специальную санитарную обработку БЕЗ использования химических веществ, гарантирующую 100% защиту наших матрасов и подушек от плесени, пылевых клещей, бактерий на весь период эксплуатации изделия. </p>
    <div style="clear:both;"></div>
  </div>



  <div class="type"><a name="ace"></a>
    <img src="/img/ace.jpg" alt="Ace">
    <p><strong>Витаминный комплекс ACE Vitaminic</strong><br>
Специальная высокотехнологичная обработка некоторых матрасов комплексом ACE Vitaminic наделяет ткани антиоксидантами и витаминами А, С и Е, содержащимися в моркови, лимонах и ячмене. Кожа получает эти витамины прямо из ткани матрасов во время сна благодаря микро дисперсии, антиоксиданты помогают предотвратить разрушающее действие свободных радикалов на клетки кожи живых организмов, и тем самым замедляют процесс их старения.  <br>
</p>
    <div style="clear:both;"></div>
  </div>



 <br> <p>
Ткани и материалы содержат только 100% натуральные, природные компоненты и экстракты, придающие им исключительные свойства: <br>

  </p><div class="type"><a name="drev-volokna"></a>
    <img src="/img/legno.jpg" alt="Древесные волокна в ортопедических матрасах">
    <p><strong>Древесные волокна</strong><br>
Волокна дерева - экологически чистый, безупречный натуральный материал, подаренный нам самой Природой. Мягкие, полезные, с потрясающей способностью впитывать и испарять влагу, они создают особый микроклимат: на таком матрасе прохладно летом и тепло зимой. В нем не накапливается сырость: она естественным образом быстро испаряется в атмосферу. Использование древесного волокна делает ткань "дышащей" благодаря уникальному строению древесины, внутри которой на клеточном уровне проходит постоянный воздухообмен. Волокна способствуют поддержанию оптимальной влажности, накапливают тепло и равномерно распределяют его по всей площади ткани. Древесный аромат успокаивает, восстанавливает силы и заряжает энергией на весь день.   </p>
    <div style="clear:both;"></div>
  </div>

  <div class="type"><a name="bamboo"></a>
    <img src="/img/bamboo-magniflex.jpg" alt="Волокна Бамбука в ортопедических матрасах">
    <p><strong>Волокна Бамбука</strong><br>
Бамбуковые волокна придают ткани великолепные антибактериальные свойства, усиливают антиаллергенный эффект, останавливают рост бактерий, позволяют избавиться от токсинов, питают и восстанавливают клетки кожи, усиливают метаболизм. Бамбук легко поглощает и испаряет пот.

</p>
    <div style="clear:both;"></div>
  </div>

  <div class="type"><a name="merinos"></a>
    <img src="/img/lana-merinos.jpg" alt="Шерсть Мериноса">
    <p><strong>Мериносовая шерсть</strong><br>
Шерсть мериноса однородна, состоит из длинных тонких мягких пуховых волокон, очень теплая, превосходно сохраняет и аккумулирует  тепло, обладает замечательной способностью поглощать воду, оставаясь при этом сухой. Поглощенная влага распределяется по всем волокнам равномерно, а затем испаряется в воздухе, создавая особый микроклимат с постоянной температурой и влажностью.</p>
    <div style="clear:both;"></div>
  </div>

  <div class="type"><a name="coton"></a>
    <img src="/img/cotone-magniflex.jpg" alt="Хлопок натуральный в матрасах">
    <p><strong>100% Натуральный Хлопок</strong><br>
Хлопок - прочный и теплостойкий природный материал известный уже более 6 тысяч лет, состоит из тонких коротких мягких пушистых волокон. Ткань из хлопка приятна телу, позволяет нашей коже дышать. Недостатки хлопка, такие как отсутствие эластичности, изнашиваемость, невысокая стойкость к истиранию и др.,  устраняются нами путем смешивания хлопковых нитей с другими натуральными волокнами.
</p>
    <div style="clear:both;"></div>
  </div>


 <div class="type"><a name="bio-coton"></a>
    <img src="/img/cotone_1.jpg" alt="Хлопок натуральный в матрасах">
    <p><strong>Био Хлопок</strong><br>
Специальная НЕ химическая обработка натурального хлопка с добавлением натуральных волокон позволяет получить совершенно новую ткань, которую мы называем "Био-Хлопок". Ткань, имеющая все преимущества натурального хлопка, становится прочнее, более проницаемой для воздуха, антибактериальной.
</p>
    <div style="clear:both;"></div>
  </div>

 <div class="type"><a name="lavanda"></a>
    <img src="/img/lavanda.jpg" alt="Экстракт лаванды в ортопедических матрасах Магнифлекс">
    <p><strong>Экстракт лаванды</strong><br>
Лаванда обладает уникальными полезными и лечебными свойствами. Ткань с экстрактом лаванды придает матрасу оздоровительные свойства, способствует полноценному отдыху центральной нервной системы. 
</p>
    <div style="clear:both;"></div>
  </div>

 <div class="type"><a name="aloe-vera"></a>
    <img src="/img/aloe-vera.jpg" alt="Экстракт алоэ вера">
    <p><strong>Экстракт Алоэ Вера</strong><br> С древности Алоэ Вера почитается как растение вечной молодости. Экстракт Алоэ Вера содержит витамины B, C и E, натуральные антиоксиданты, применяется в медицине в качестве естественного антибиотика, уничтожающего различные вирусы и бактерии, оказывает исключительно полезное воздействие на кожу, восстанавливая клетки и заживляя раны. В листьях алое вера содержится более 160 полезных для кожи ценных веществ и микроэлементов. Алое вера является незаменимым ингредиентом в косметической промышленности, успокаивающим и увлажняющим кожу. Ткань, пропитанная экстрактом Алоэ Вера, содержит миллионы микрокапсул: в результате контакта с кожей капсулы раскрываются, высвобождая полезные вещества, которые помогают заживлять ранки, замедляют старение, оказывают противовоспалительное действие. Кожа спящего человека от соприкосновения с тканью, пропитанной экстрактом алое вера, получает столь полезный, лечебный, омолаживающий эффект. </p>
    <div style="clear:both;"></div>
  </div>




<br> <p>
Мы используем самые передовые технологии при производстве матрасов и подушек:  <br>


  </p><div class="type"><a name="outlast"></a>
    <img src="/img/outlast.jpg" alt="Технология Outlast">
    <p><strong>Outlast</strong><br>
Высокотехнологичный материал Outlast изначально применялся NASA (и применяется до сих пор!) при изготовлении комбинезонов космонавтов, наделяет ткань исключительными свойствами, уравновешивая тепло тела человека, благодаря миллионам микроскопическим сфер, которые поглощают и накапливают избыточное тепло и "выпускают" его в тот момент, когда внешняя температура понижается - это гарантирует отсутствие перепадов температур, создает максимально возможный уровень комфорта.      </p>
    <div style="clear:both;"></div>
  </div>

  <div class="type"><a name="coolmax-technology"></a>
    <img src="/img/coolmax.jpg" alt="Терморегулирующая ткань Coolmax">
    <p><strong>Coolmax</strong><br>
Терморегулирующая ткань Coolmax обладает ярко выраженным капиллярным эффектом, за счет которого происходит быстрое распределение влаги по ткани и ее испарение со всей площади поверхности. Благодаря четырехканальной структуре волокна ткани, влага испаряется значительно быстрее за счет принципа прямого удаления влаги между нитями. Coolmax обладает такими преимуществами как: легкость, прочность, износостойкость, высокая проницаемость для воздуха, не впитывает запахи, не вызывает аллергии и раздражения, поддерживает оптимальный температурный баланс поверхности кожи, на 50% мягче хлопка и значительно приятнее на ощупь.</p>
    <div style="clear:both;"></div>
  </div>

  <div class="type"><a name="microforato"></a>
    <img src="/img/microforato.jpg" alt="Ткань Microforato 3D">
    <p><strong>Microforato 3D</strong><br>
Инновационная перфорированная структура материала способствует поддержанию постоянного теплового баланса, превосходно поглощает и испаряет влагу, нейтрализует запахи. Идеальная технология для здорового сна.
</p>
    <div style="clear:both;"></div>
  </div>




 

  <div class="type"><a name="gold"></a>
    <img src="/img/oro.jpg" alt="Золотые нити">
    <p><strong>Золотые нити</strong><br>
Золотые нити электростатические, помогают снять физическое напряжение и стресс, удерживают тепло зимой, а прохладу летом.</p>
    <div style="clear:both;"></div>
  </div>


</div>
</div>
	<div style="clear:both;"></div>				
			'
		),
		array(
			'address' => 'inner-plates',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Наполнители',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Наполнители</h2>



  <h4>Наполнители, используемые в итальянских матрасах Magniflex</h4>

    <img src="/img/memosoft.jpg" alt="Memoform Magnifoam">
    <p><b>Memoform Magnifoam / Мемоформ Магниформ</b><br>
Один из самых мягких материалов - дарит ни с чем несравнимый комфорт. Благодаря своей инновационной сверхбыстрой способности реагирования на тепло и давление, наполнитель мгновенно принимает форму тела, предоставляя превосходную ортопедическую поддержку всему организму в целом, а в особенности спине. Материал очень быстро возвращает свою оригинальную форму, приспосабливается к движениям человека, способствуя крепкому и здоровому сну. </p>
    

  <div class="type"><a name="eliosoft"></a>
    <img src="/img/lastra_bel-air.jpg" alt="Eliosoft">
    <p><b>Eliosoft / Элиософт</b><br>
Материал изготавливается из 100% натурального латекса. В процессе обработки латекс приобретает уникальные ортопедические свойства, дополнительную мягкость и прочность. Элиософт (Eliosoft) легко поглощает и испаряет влагу, воздухопроницаемый, экологически чистый долговечный материал, обеспечивающий мягкую, комфортную, естественную поддержку. Обычно используется в сочетании с такими материалами, как Memoform и Elioform, для идеального контроля мягкости и жесткости матраса.</p>
    <div style="clear: both;"></div>
  </div>

  <div class="type"><a name="eliocel"></a>
    <img src="/img/lastra_bionatureplus.jpg" alt="Elioform">
    <p><b>Eliocel / Элиочел</b><br>
Экологически чистый, воздухопроницаемый материал с микропористой структурой - мягкий, упругий, эластичный, легко поглощает и испаряет влагу с тела человека,  обладает антисептическим действием.</p>
    <div style="clear: both;"></div>
  </div>


 <div class="type"><a name="memory"></a>
    <img src="/img/lastra_pigalle.jpg" alt="Memory">
    <p><strong>Memory / Мемори</strong><br>
Материал Memory состоит из большого числа "микроскопических пружинок", способных сжиматься исключительно под действием тепла и веса и распрямляться с задержкой в несколько секунд в отсутствии нагрузки. Благодаря этой особенности, матрас на основе Memory обладает наилучшими ортопедическими и анатомическими свойствами,  идеально точно принимая и запоминая форму тела человека, подстраивается под контуры и рельеф, не оказывая ответного давления, равномерно распределяя точечные нагрузки по всей поверхности.  Только на таком матрасе можно проспать всю ночь ни разу не перевернувшись на другой бок.
</p>
    <div style="clear:both;"></div>
  </div>

  <div class="type"><a name="waterlatex"></a>
    <img src="/img/lastra_saintgermain.jpg" alt="Waterlatex">
      <p><strong>Waterlatex / Вотерлатекс</strong><br>
Экологически чистый, пористый, эргономичный наполнитель Waterlatex изготавливается из натурального латекса, молекул воды и полимеров, путем вспенивания и последующей вулканизации. В результате такой обработки натуральный латекс получает дополнительные уникальные ортопедические и анатомические свойства.<br>
(!!!) К сожалению, название "Waterlatex" не запатентовано,  поэтому не защищено Законом об Авторском праве, и некоторые недобросовестные производители используют это слово, давая названия своим наполнителям матрасов. Мы предупреждаем потребителей, ничего общего Waterlatex Magniflex с их материалами не имеет. Остерегайтесь подделок. </p>
    <div style="clear:both;"></div>
  </div>

  <div class="type"><a name="pruzhiny"></a>
    <img src="/img/lastra_montmartre.jpg" alt="Пружины">
    <p><b>Пружины</b><br>
Стальные пружины из специального гибкого и очень стойкого сплава, с укрепленной структурой, для защиты от деформации.<br>
В Россию пружинные матрасы Magniflex поставляются исключительно на заказ.
</p>
    <div style="clear: both;"></div>
  </div>
</div>

</div><div style="clear:both;"></div>
		'
		),
		
		array(
			'address' => 'problem',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Проблемы',
			'left_sidebar' => 'production',
			'title' => 'Проблемы с матрасами Magniflex - первоапрельская шутка',
			'description' => 'Первоапрельское предупреждение клиентов компании Magniflex',
			'keywords' => 'magniflex проблемы',
			'text' => '
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Проблемы с продукцией Magniflex</h2>
   
    <p>
<b>Наши клиенты предупреждают:</b> 
<br /><br />
Попробовав Magniflex, Вы уже вряд ли когда сможете спать на обычных матрасах и подушках. Особенно актуальна проблема в путешествиях. Некоторые даже возят с собой подушку в чемодане...  
<br /><br />
<img width="" src="/img/magniflex-merino-children-12.png" height="" alt="">
<br /><br />

1 апреля 2015 год.
</p>
    

  
    <div style="clear: both;"></div>
  </div>
</div>

</div><div style="clear:both;"></div>
		'
		),
		
		
		array(
			'address' => 'oplata',
			'parent_address' => 'pokupatelyam',
			'parent_name' => 'Покупателям',
			'name' => 'Оплата и Доставка',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Оплата заказа в интернет-магазине Магнифлекс',
			'description' => 'Способы оплаты',
			'keywords' => 'оплата товара',
			'text' => '
			<style>
				#breadcrumbs {
					background: url(/img/breadcrumbs_riposook.jpg);
					height: 220px;
				}
				</style>
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">
<a name="mytitlepag"></a>
		<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Оплата товаров</h2>

 <strong style="color: #666666; font-size: 12px;">Способы оплаты товара</strong>
		<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
			 1. Наличными: курьеру в момент получения заказа.<br />
			 Оплата наличными доступна покупателям из Москвы. Курьер доставит Вам товар и необходимые документы на дом. <br /><br />
			 2. Безналичный платеж: для физических и юридических лиц.<br />
			 Оплата по выставленному счету. Попросить выставить счет Вы можете в дополнительных пожеланиях к заказу или по телефону 8 (495)  507 22 65. <br /><br />
			 3. Карточкой.<br />
			 Оплата карточкой на сайте или курьеру при получении заказа — этот способ будет реализован в ближайшее время. <br />

Но уже сейчас Вы можете оплатить покупку карточкой в нашем шоу-руме.<br>
 <br>
		</p>
		<img alt="Оплата матрасов магнифлекс" src="/img/oplata-magniflex.jpg" />
    </div>
	<div style="clear:both;"></div>
</div>
		'
		),
		
		
		array(
			'address' => 'oplata-i-dostavka',
			'parent_address' => 'pokupatelyam',
			'parent_name' => 'Покупателям',
			'name' => 'Доставка',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Доставка матрасов и подушек Magniflex. Служба доставки',
			'description' => 'Способы и условия доставки товаров Магнифлекс',
			'keywords' => 'доставка magniflex, доставка магнифлекс, служба доставки магнифлекс',
			'text' => '
			<style>
				#breadcrumbs {
					background: url(/img/breadcrumbs_riposook.jpg);
					height: 220px;
				}
				</style>
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">
<a name="mytitlepag"></a>

<a name="mytitlepag2"></a>
		<h2 class="hnb_mytitlepag">Служба доставки товаров</h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
 <strong>Доставка по Москве (в пределах МКАД)</strong><br>
			 - После оформления заказа Вам обязательно перезвонит специалист и согласует с Вами время, адрес и другие детали доставки. Свои пожелания можно также оставить в комментариях к заказу.<br>
			 - Курьер доставит Вам купленный товар и все необходимые финансовые документы. <br>
			 - Доставка по Москве осуществляется в день заказа, если сам заказ сделан в первой половине дня (до 11:00). Если заказ был подтвержден во второй половине дня, то мы доставим товар Вам на следующий день.<br>
 <br>
			 Время работы бесплатной службы доставки: <br>
			 • Будни, с 10:00 до 18:00 <br>  <br>
			 
			 Доставка осуществляется до дверей. В случае отсутствия лифта в доме возможен платный подъем (50 руб. за этаж).

 <br>
			 Доставка в нерабочее время платная: стоимость 500 руб в выходные дни, в будни после 18 часов — 300 руб.<br>
 <br>
		</p>
		<div class="hnb_myimgap">
 <img width="605" src="/img/magniflex-car2.jpg" height="364" alt="Служба доставки Magniflex">
		</div>
 <strong>Доставка по Московской области и Москве (за пределами МКАД)</strong><br>
		 Стоимость доставки составляет 40 руб. за км от МКАД. <br>
 <br>
 <strong>Доставка по России</strong><br>
		 Мы можем доставить Ваш заказ в любой город России удобными Вам транспортными компаниями: Гюнсел, Грузовозофф, ДАЙМЭКС, Деливери, Деловые Линии, Доставкин, Желдорэкспедиция, Ин-Тайм, Курьер Сервис, Курьер-Коррект, МТК, Новая Почта, Ночной экспресс, ПЭК, Почта России, РТК-Базис, Реил Континент, Русская почтовая служба, СПСР, Скороход, ТрансЭкспресс, Укрпошта, УралТрансСервис, Эксист, Экспресс-курьер, Экспресс-почта, Энергия, Другой, DHL, EMS Почта России, Express mail, FedEx, Major Express, Pony Express, Starpost, TNT, Автолюкс, Автотрейдинг, Армадилло, Байкал-сервис, БизнесПост, Ваш Час, Гарантпост. Стоимость отправки товара Вы можете уточнить у перевозчиков. Либо позвоните нам — мы обязательно подберем для Вас наилучший вариант по стоимости и времени доставки. <br>
 <br>
		 Сроки доставки и ее стоимость могут варьироваться в зависимости от выбранного Вами способа оплаты, Вашего города, а также веса и объема покупки.<br>
		 С момента поступления средств на счет нашей компании требуется, как правило, 1-2 рабочих дня для доставки заказанной продукции на склад выбранной транспортной компании и оформление необходимых документов. После этого заказанная продукция доставляется по указанному Вами адресу силами транспортной компании. <br>
 <br>
		 Таким образом, мы рекомендуем всем нашим региональным покупателям действовать следующим образом: <br>
		 - Выбрав интересующий вас товар, оформите заказ на него на нашем сайте.<br>
		 - В графе "Дополнительные условия доставки" укажите все Ваши пожелания.<br>
		 - После оформления заказа наш специалист свяжется с Вами для уточнения сроков и условий доставки.<br>
 <br>
		 По всем вопросам связанным с доставкой обращайтесь по телефонам: <br>
		 +7 (495) 507 22 65, <br>
		 +7 (495) 316 89 88.<br>
		 Мы обязательно Вам поможем. <br>
 <br>
 <strong>Внимание! </strong><br>
		 При получении заказа внимательно рассмотрите товар, убедитесь в отсутствии видимых механических повреждений, проверьте наличие и правильность заполнения документов (бланки документов). ГЛАВНОЕ! УБЕДИТЕЛЬНАЯ ПРОСЬБА, ПРЕЖДЕ ЧЕМ ВСКРЫТЬ УПАКОВКУ ПРОВЕРЬТЕ РАЗМЕР МАТРАСА, УКАЗАННЫЙ НА БЛАНКЕ И НА САМОЙ УПАКОВКЕ. Если они не совпадают, срочно свяжитесь со службой клиентской поддержки Magniflex. <br>
		<p>
		</p>
	</div>
	<div style="clear:both;"></div>
</div>
		'
		),
		
		array(
			'address' => 'kak-oformit-zakaz',
			'parent_address' => 'pokupatelyam',
			'parent_name' => 'Покупателям',
			'name' => 'Как оформить заказ',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Как оформить заказ в официальном интернет-магазине Magniflex | Магнифлекс',
			'description' => 'Руководство по оформдению заказов в официальном интернет-магазине Magniflex ',
			'keywords' => 'magniflex заказ, оформить заказ магнифлекс',
			'text' => '
			<style>
				#breadcrumbs {
					background: url(/img/breadcrumbs_riposook.jpg);
					height: 220px;
				}
				</style>
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Как оформить заказ</h2>





<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
<strong style="color: #666666; font-size: 12px;">Через интернет-магазин</strong><br>

Оформить заказ в нашем официальном интернет-магазине Magniflex просто, для этого потребуется всего три шага:<br>


1. Выберите нужные товары в каталоге и поместите их в корзину с помощью кнопки "Купить".<br>

2. Проверьте выбранные товары, если все верно - нажмите кнопку "оформить заказ" <br>

3. Внимательно заполните все поля. Обязательно укажите индекс, если Вы не из Москвы. Выберите удобную дату доставки. В поле "дополнительная информация" укажите пожелания по заказу. Для завершения покупки нажмите кнопку "отправить заказ".<br>

В течение короткого времени на Вашу электронную почту придет письмо с подтверждением заказа, а с Вами по телефону свяжется наш специалист для уточнения деталей. <br><br>

<strong style="color: #666666; font-size: 12px;">По телефону</strong>
Вы также можете оформить ваш заказ по телефону. Для этого достаточно позвонить нам. Консультант поможет Вам определиться с выбором, ответит на все вопросы и примет заказ. 
<br><br>
</p>


</div>
<div style="clear: both;"></div>				</div>
			'
		),
		array(
			'address' => 'warranty',
			'parent_address' => 'pokupatelyam',
			'parent_name' => 'Покупателям',
			'name' => 'Гарантия',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Гарантия и срок службы ортопедических матрасов и подушек Magniflex | Магнифлекс',
			'description' => 'Официальная гарантия на ортопедические матрасы и подушки Magniflex, срок эксплуатации изделий Магнифлекс',
			'keywords' => 'magniflex гарантия, гарантия магнифлекс, срок эксплуатации магнифлекс',
			'text' => '
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Гарантия  и срок эксплуатации</h2>

<strong style="color: #666666; font-size: 12px;">Срок службы ортопедических матрасов и подушек Magniflex</strong>
<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">

	Обычно спальное место покупают сроком на 7-10 лет, но зачастую приходится менять ложе намного раньше этого срока. Появление "ям" на поверхности матраса, неприятные запахи, аллергия и прочие неудобства во время сна, боли в спине - все это очень веские причины, чтобы задуматься о новом матрасе. Это верно, но только если речь идет не о матрасах Magniflex. <br><br>


Мы гарантируем, что предлагаемая нами продукция (ортопедические подушки, ортопедические матрасы) не теряют своих качеств, лечебных свойств в течение:
  <br>
  — 20 лет для элитных матрасов из коллекции Virtus;  <br />
  — 15 лет для элитных матрасов из коллекции Imperiale, Magnificent, Harmony, Comfort Delux, FreshGel и Rest; <br /> 
  — 15 лет для матрасов Magniflex Waterlattex, Magniflex Memo Merino, Magniflex Natur Baci, Magniflex New Naturcomfort;  <br />
  — 12 лет для матрасов из коллекции Magniflex Merino на основе наполнителя Eliocel: Merino Green Tea, Merino Bamboo, Merino;<br />
  — 12 лет для подушек на основе наполнителя Memory.
  
  <br />  <br />
Продукция безопасна к использованию в течение всего срока эксплуатации, поскольку создана из специальных самовентилируемых материалов, проходящих специализированные экологически чистые санитарные обработки, пропитанные особыми компонентами, что обеспечивает превосходный уровень гигиены, создает надежный уровень защиты от плесени, бактерий, моли, пылевых клещей и др.
<br />  <br />
</p>

<h2 class="hnb_mytitlepag">Гарантийный срок</h2>

<p>
Гарантийный срок на ортопедические матрасы и подушки компании «Magniflex» в России составляет 12 месяцев. 
<br><br>
</p>



<h2 class="hnb_mytitlepag">Хорошие вещи служат долго</h2>

<p>
Применительно к матрасам и подушкам применимо понятие "стоимость владения". Например, если Вы приобрели матрас за 1500 рублей, а он через год пришел в полную негодность, то цена владения таким матрасом составляет 1500 рублей в год. Если же Вы купили дорогой матрас Magniflex за 21 000 рублей, который гарантировано прослужит Вам не менее 15 лет, то цена его владения всего - 1 400 рублей. Порой, приобретать хорошие, дорогие вещи - даже ВЫГОДНО. <br>
Помните простую истину - "мы не настолько богаты, чтобы покупать дешевые вещи".

<br><br>
</p>


<h2 class="hnb_mytitlepag">Не все матрасы скручены</h2>

<p>
Некоторые очень высокие модели матрасов могут поставляться в развернутом виде — редкое исключение из правил.
<br><br>
</p>



<p style="color: #666666; background-color: #ffffff; font-size: 12px;"><strong>Внимание!</strong>
<br>

  Матрасы поставляются в вакуумной упаковке.  УБЕДИТЕЛЬНАЯ ПРОСЬБА, ПРЕЖДЕ ЧЕМ ВСКРЫТЬ УПАКОВКУ МАТРАСА, ПРОВЕРЬТЕ РАЗМЕР, УКАЗАННЫЙ НА БЛАНКЕ И НА САМОЙ УПАКОВКЕ. Если они не совпадают, срочно свяжитесь со службой клиентской поддержки Magniflex.    <br /> <br />
  Штрих-код или QR-код изделия является внутренним кодом фабрики и не подходит для идентификации какими-либо другими устройствами, кроме фабричных.  </p>
<img alt="magniflex - Гарантия" src="/img/garantiya.jpg">

<br />


</div>
</div><div style="clear: both;"></div>
			'
		),
		
		array(
			'address' => 'obmen-i-vozvrat',
			'parent_address' => 'pokupatelyam',
			'parent_name' => 'Покупателям',
			'name' => 'Обмен и Возврат',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Обмен и возврат матрасов и подушек Magniflex | Магнифлекс',
			'description' => 'Правила обмена и возврата матрасов и подушек Magniflex в вакуумной упаковке',
			'keywords' => 'вернуть матрас, обменять матрас',
			'text' => '
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Обмен и Возврат</h2>

<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
<em>Регулируется Законом Российской Федерации "О защите прав потребителей". Статьи 18, 19, 21, 22, 25, 26.</em>
 <br><br> 

<strong>Возврат и обмен товара НАДЛЕЖАЩЕГО КАЧЕСТВА</strong><br>

Покупатель вправе обменять или возвратить товар (ортопедический матрас, подушку или основание) в том случае, если он не подошел по форме, габаритам, фасону, расцветке или размеру в течение четырнадцати дней, не считая дня его покупки. <br>
Товар не должен был быть в употреблении, должны быть сохранены его товарный вид, потребительские свойства, пломбы, фабричные ярлыки. Это особенно важно по отношению к товарам в вакуумной упаковке. Если упаковка нарушена (была вскрыта), мы имеем полное право не принимать товар обратно! Поэтому внимательно всё проверьте, прежде чем вскрыть упаковку матраса.<br>
Если у Вас не сохранились какие-то документы о покупки матраса - позвоните нам. Мы решим эту проблему, так как у каждого матраса имеется индивидуальный уникальный код, по которому можно восстановить все данные. 

 <br><br> 
<strong>Возврат и обмен товара НЕНАДЛЕЖАЩЕГО КАЧЕСТВА</strong><br>
При обнаружении в товаре недостатков, если они не были оговорены продавцом, покупатель вправе: потребовать замены на товар этой же марки или другой с перерасчетом цены, либо соразмерного уменьшения цена на приобретенный товар, либо отказаться от товара и возвратить уплаченную сумму.


</p>
<br />
<img alt="magniflex - ОБМЕН И ВОЗВРАТ" src="/img/obmen.jpg">
</div>
<div style="clear: both;"></div>				</div>
			'
		),
		array(
			'address' => 'certificates',
			'parent_address' => 'pokupatelyam',
			'parent_name' => 'Покупателям',
			'name' => 'Сертификаты',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'text' => '
			<style>
				#breadcrumbs {
					background: url(/img/breadcrumbs_riposook.jpg);
					height: 220px;
				}
				</style>
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Сертификаты на матрасы и подушки</h2>


<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
	Ортопедических матрасы и подушки Magniflex  <b>продаются в 96-ти странах по всему миру</b>: от Японии с Австралией до США с Канадой.  
В каждой стране мы получаем ВСЕ НЕОБХОДИМЫЕ сертификаты, лицензии и заключения на продукцию.  

</p>


<h3>В России</h3>
<p>В России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ. </p>


<p> <b>МИНИСТЕРСТВО ЗДРАВООХРАНЕНИЯ И МЕДИЦИНСКОЙ ПРОМЫШЛЕННОСТИ РФ</b><br>

<b>признало матрасы и подушки Magniflex ОРТОПЕДИЧЕСКИМИ</b>. Выдано соответствующее регистрационное удостоверение МЗМПР № 96/624.  

<br><br>
<img src="/img/RU-ortopedicheskie-matrasy2.jpg" alt="выдержка из приказа Министерства Здравоохранения"><br>

Фрагмент: изделия медицинской техники под названием матрацы и подушки ортопедические после испытания зарегистрировано и может применяться в медицинской практике на территории Российской Федерации.

<br><br>
<b>ЦЕНТРАЛЬНЫЙ НИИ ТРАВМАТОЛОГИИ И ОРТОПЕДИИ им. Н.Н. ПРИОРОВА</b><br>
выдал Заключение за номером 322 на <b>основании испытаний и апробации</b> ортопедических матрасов Magniflex, проведенных  в отделении вертебральной паталогии, о том, что продукция может быть использована в стационарах различного профиля.    
<br><br>
<img src="/img/RU-ortopedicheskie-matrasy3.jpg" alt="Заключение НИИ ТРАВМАТОЛОГИИ И ОРТОПЕДИИ им. Н.Н. ПРИОРОВА"><br>
<br><br>


</p>




<h4 style="margin-top: 30px;">СЕРТИФИКАТЫ СООТВЕТСТВИЯ ГОСТ Р</h4>
<p>
выдается сроком на 1 год. Скачать актуальную копию можно по ссылке  <a href="/upload/rst.rar">Сертификат ГОСТ Р</a>. 
</p>

<div style="float: left; margin: 0 10px 20px 0; width: 200px;">
  <h6>СЕРТИФИКАТ СООТВЕТСТВИЯ <br>МАТРАСЫ</h6>
  <img src="/img/sert-mat-1.jpg" style="width:200px; height: 290px" alt="Сертификат соответствия на матрасыMagniflex">
</div>

<div style="float: left; margin: 0 20px 10px 0; width: 200px;">
  <h6>СЕРТИФИКАТ СООТВЕТСТВИЯ <br>ПОДУШКИ</h6>
  <img src="/img/sert-mat-2.jpg" style="width:200px; height: 290px" alt="Сертификат соответствия на подушки Magniflex">
</div>

<div style="float: left; margin: 0 0 20px 0; width: 230px;">
  <p><strong>Обязательная Сертификация ГОСТ&nbsp;Р</strong> свидетельствует о безопасности продукции, услуг и работ и подтверждается знаком качества.</p>
  <img src="/img/sert-rostest.jpg" style="width:80px;height:63px; display: block;" alt="Сертификат ГОСТР на подушки и матрасы">
</div>

<h4 style="clear: both; padding-top: 50px;">СЕРТИФИКАТЫ САНИТАРНО-ЭПИДЕМИОЛОГИЧЕСКОЕ ЗАКЛЮЧЕНИЕ</h4>

<div style="float: left; width: 330px;">
  ОРТОПЕДИЧЕСКИЕ МАТРАСЫ
</div>

<div style="float: left; width: 330px;">
  ОРТОПЕДИЧЕСКИЕ ПОДУШКИ
</div>
<br>
<img src="/img/SE-ortopedicheskie-matrasy.jpg" alt="сертификаты на подушки магнифлекс"><br>



<p style="clear: both; padding-top: 20px;">Санитарно-эпидемиологическое заключение (называемое еще как гигиенический сертификат, заключение СЭС, гигиеническое заключение, санитарно-гигиеническое заключение, санэпидзаключение или гигиена) - документ, который подтверждает разрешение органами Министерства Здравоохранения и социального развития РФ (называемое еще как Минздрав или Госсанэпиднадзор) производства или ввоза продукции, соответствующей установленным требованиям, гигиеническим нормам и санитарным правилам (ГН и СанПин), а также служит официальным подтверждением безопасности продукции для здоровья человека</p>

<h3 style="padding-top: 30px;">Международные сертификаты</h3>

<p>Вся продукция фабрики Magniflex сертифицирована ведущими международными ассоциациями таких стран, как Германия, Франция, Италия, Голландия, Швеция, Япония, Австралия, Канада, США и др. 
Одобрена и рекомендована к применению ведущими европейскими медицинскими центрами, практикующий профилактику и лечение опорно-двигательного аппарата человека.</p>
<table class="hnb_certab" cellspacing="0">
	<tbody><tr>
		<td><img src="/img/magniflex-sertifikat-1.jpg"></td>
		<td></td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-2.jpg"></td>
		<td><b>LGA (Германия)</b> <br>
Магнифлекс использует только самые лучшие материалы - факт, подтвержденный сертификатом LGA, а вся продукция имеет удостоверение Oeko-Tex, гарантирующие отсутствие аллергенов и веществ, которые могут быть вредны для Вашего здоровья или окружающей среды.
</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-3.jpg"></td>
		<td></td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-4.jpg"></td>
		<td></td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-5.jpg"></td>
		<td>
<b>Стандартизация AJA, UKAS</b> <br>
Вся продукция соответствуют высочайшим международным стандартам качества BS EN ISO 9001:2008, проверено и одобрено UKAS, и AJA. 

</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-6.jpg"></td>
		<td></td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-7.jpg"></td>
		<td><b>Медицинское изделие</b> <br>
Ортопедические матрасы и подушки признаны медицинскими изделиями в Европе и рекомендованы к применению. Мы имеем ПОЛНОЕ ПРАВО писать на своих товаров слово "ОРТОПЕДИЧЕСКИЕ". </td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-8.jpg"></td>
		<td></td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-9.jpg"></td>
		<td></td>
	</tr>
</tbody></table>

</div>
</div><div style="clear: both;"></div>	
			'
		),
		array(
			'address' => 'sizes-and-prices',
			'parent_address' => 'production',
			'parent_name' => 'Каталог',
			'name' => 'Размеры и Цены',
			'left_sidebar' => 'production',
			'title' => 'Размеры и Цены на матрасы и подушки Magniflex | Магнифлекс',
			'description' => 'Полный прайс-лист на всю продукцию интернет-магазина Магнифлекс в России',
			'keywords' => 'magniflex прайс, магнифлекс цена,  матрасы магнифлекс цены',
			'text' => '
			<style>
				#breadcrumbs {
					background: url(/img/breadcrumbs_riposook.jpg);
					height: 220px;
				}
				</style>
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Размеры и Цены</h2>

<br><br>


<h4 class="hnb_toptable">Ортопедические матрасы MERINO Magniflex (старое название Merinos)</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Merino (Merinos) для детей</td> 
<td class="goodsize"><b>60x120</b></td> 
<td class="goodprice">7200 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Merino (Merinos) для детей</td> 
<td class="goodsize"><b>70x140</b></td> 
<td class="goodprice">9600 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>70x190</b></td> 
<td class="goodprice">12500 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">4</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>75x190</b></td> 
<td class="goodprice">13300 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">5</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>80x190</b></td> 
<td class="goodprice">13800 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">6</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>80x195</b></td> 
<td class="goodprice">15200 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">7</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>80x200</b></td> 
<td class="goodprice">15700 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">8</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>85x190</b></td> 
<td class="goodprice">15200 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">9</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>85x200</b></td> 
<td class="goodprice">16500 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">10</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>90x190</b></td> 
<td class="goodprice">15900 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">11</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>90x195</b></td> 
<td class="goodprice">16500 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">12</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>90x200</b></td> 
<td class="goodprice">17600 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">13</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>95x190</b></td> 
<td class="goodprice">16700 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">14</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>95x195</b></td> 
<td class="goodprice">17600 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">15</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>100x190</b></td> 
<td class="goodprice">17600 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">16</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>100x200</b></td> 
<td class="goodprice">19100 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">17</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>110x190</b></td> 
<td class="goodprice">19200 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">18</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>110x195</b></td> 
<td class="goodprice">20700 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">19</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>110x200</b></td> 
<td class="goodprice">21000 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">20</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>120x190</b></td> 
<td class="goodprice">21000 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">21</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>120x195</b></td> 
<td class="goodprice">21600 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">22</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>120x200</b></td> 
<td class="goodprice">21800 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">23</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>130x190</b></td> 
<td class="goodprice">22400 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">24</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>130x200</b></td> 
<td class="goodprice">23700 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">25</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>135x190</b></td> 
<td class="goodprice">23400 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">26</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>135x200</b></td> 
<td class="goodprice">23900 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">27</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>140x190</b></td> 
<td class="goodprice">25300 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">28</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>140x195</b></td> 
<td class="goodprice">25500 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">29</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>140x200</b></td> 
<td class="goodprice">25800 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">30</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>150x190</b></td> 
<td class="goodprice">25800 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">31</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>150x200</b></td> 
<td class="goodprice">27700 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">32</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>160x190</b></td> 
<td class="goodprice">27900 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">33</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>160x195</b></td> 
<td class="goodprice">28700 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">34</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">29500 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">35</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>160x205</b></td> 
<td class="goodprice">31900 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">36</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>160x210</b></td> 
<td class="goodprice">32500 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">37</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>165x190</b></td> 
<td class="goodprice">28800 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">38</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>165x195</b></td> 
<td class="goodprice">29500 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">39</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>165x200</b></td> 
<td class="goodprice">30400 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">40</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>170x190</b></td> 
<td class="goodprice">29600 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">41</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>170x200</b></td> 
<td class="goodprice">31400 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">42</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>180x190</b></td> 
<td class="goodprice">31400 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">43</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>180x195</b></td> 
<td class="goodprice">32200 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">44</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">33000 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">45</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>180x205</b></td> 
<td class="goodprice">36000 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">46</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>180x210</b></td> 
<td class="goodprice">36500 р.</td> 
</tr>  

<tr class="striped">
<td class="goodid">47</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>190x200</b></td> 
<td class="goodprice">37500 р.</td> 
</tr>  

<tr class="striped hnb_mytablegray">
<td class="goodid">48</td>
<td class="goodname">Ортопедический матрас Merino (Merinos)</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">39200 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/mattresses/MERINOS/">Купить матрас Merino Magniflex</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>





<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex WATERLATTEX</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>80x190</b></td> 
<td class="goodprice">25000 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>80x200</b></td> 
<td class="goodprice">26300 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>90x190</b></td> 
<td class="goodprice">28000 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">4</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>90x200</b></td> 
<td class="goodprice">29600 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">5</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>120x190</b></td> 
<td class="goodprice">37500 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">6</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>120x200</b></td> 
<td class="goodprice">39200 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">7</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>140x190</b></td> 
<td class="goodprice">43400 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">8</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>140x200</b></td> 
<td class="goodprice">45800 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">9</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>160x190</b></td> 
<td class="goodprice">49800 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">10</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>160x195</b></td> 
<td class="goodprice">51100 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">11</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">52500 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">12</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>165x200</b></td> 
<td class="goodprice">54100 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">13</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>180x190</b></td> 
<td class="goodprice">56000 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">14</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>180x195</b></td> 
<td class="goodprice">57600 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">15</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">59100 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">16</td>
<td class="goodname">Ортопедический матрас Waterlattex</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">65600 р.</td> 
</tr>  
</tbody>
</table>

<a href="/catalog/orthopedic_mattresses/WATERLATTEX/">Купить матрас Waterlattex</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>




<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Merino Green Tea</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>80x190</b></td> 
<td class="goodprice">16700 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>80x200</b></td> 
<td class="goodprice">17600 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>90x190</b></td> 
<td class="goodprice">18600 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">4</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>90x200</b></td> 
<td class="goodprice">19700 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">5</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>120x190</b></td> 
<td class="goodprice">25300 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">6</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>120x200</b></td> 
<td class="goodprice">26400 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">7</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>140x190</b></td> 
<td class="goodprice">29300 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">8</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>140x200</b></td> 
<td class="goodprice">30600 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">9</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>150x190</b></td> 
<td class="goodprice">31200 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">10</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>150x200</b></td> 
<td class="goodprice">32800 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">11</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>160x190</b></td> 
<td class="goodprice">33500 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">12</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">34900 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">13</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">39200 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">14</td>
<td class="goodname">Ортопедический матрас Merino Green Tea</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">43700 р.</td> 
</tr>  
</tbody>
</table>

<a href="/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/">Купить матрас Merino Green Tea</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>




<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Merino Bamboo</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Merino Bamboo для детей</td> 
<td class="goodsize"><b>60x120</b></td> 
<td class="goodprice">9000 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Merino Bamboo для детей</td> 
<td class="goodsize"><b>70x140</b></td> 
<td class="goodprice">12200 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>80x190</b></td> 
<td class="goodprice">18600 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">4</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>80x200</b></td> 
<td class="goodprice">19700 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">5</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>90x190</b></td> 
<td class="goodprice">20800 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">6</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>90x200</b></td> 
<td class="goodprice">22000 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">7</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>120x190</b></td> 
<td class="goodprice">28000 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">8</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>120x200</b></td> 
<td class="goodprice">29500 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">9</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>140x190</b></td> 
<td class="goodprice">32700 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">10</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>140x200</b></td> 
<td class="goodprice">34300 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">11</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>150x190</b></td> 
<td class="goodprice">34900 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">12</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>150x200</b></td> 
<td class="goodprice">36700 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">13</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>160x190</b></td> 
<td class="goodprice">37300 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">14</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>160x195</b></td> 
<td class="goodprice">38100 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">15</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">39100 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">16</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">43900 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">17</td>
<td class="goodname">Ортопедический матрас Merino Bamboo</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">48800 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/">Купить матрас Merino Bamboo</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>




<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Memo Merino</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>80x190</b></td> 
<td class="goodprice">33900 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>80x200</b></td> 
<td class="goodprice">35900 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>90x190</b></td> 
<td class="goodprice">38300 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">4</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>90x200</b></td> 
<td class="goodprice">40200 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">5</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>120x190</b></td> 
<td class="goodprice">52400 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">6</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>120x200</b></td> 
<td class="goodprice">54900 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">7</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>140x190</b></td> 
<td class="goodprice">59400 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">8</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>140x200</b></td> 
<td class="goodprice">63900 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">9</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>150x200</b></td> 
<td class="goodprice">66800 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">10</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>160x190</b></td> 
<td class="goodprice">68100 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">11</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>160x195</b></td> 
<td class="goodprice">69600 р.</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">12</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">71300 р.</td>
</tr>

<tr class="striped">
<td class="goodid">13</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>180x190</b></td> 
<td class="goodprice">76400 р.</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">14</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">81000 р.</td>
</tr>

<tr class="striped">
<td class="goodid">15</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>180x210</b></td> 
<td class="goodprice">88700 р.</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">16</td>
<td class="goodname">Ортопедический матрас Memo Merino</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">93600 р.</td>
</tr>
</tbody>
</table>

<a href="/catalog/orthopedic_mattresses/MEMO-MERINO/">Купить матрас Memo Merino</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>




<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Natur Baci</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Natur Baci</td> 
<td class="goodsize"><b>140x200</b></td> 
<td class="goodprice">52700 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Natur Baci</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">60000 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Natur Baci</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">67200 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">4</td>
<td class="goodname">Ортопедический матрас Natur Baci</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">75100 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/orthopedic_mattresses/natur-baci-mattress/">Купить матрас Natur Baci</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>




<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Naturcomfort</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Naturcomfort</td> 
<td class="goodsize"><b>80x190</b></td> 
<td class="goodprice">26700 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Naturcomfort</td> 
<td class="goodsize"><b>80x200</b></td> 
<td class="goodprice">27900 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Naturcomfort</td> 
<td class="goodsize"><b>90x190</b></td> 
<td class="goodprice">30000 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">4</td>
<td class="goodname">Ортопедический матрас Naturcomfort</td> 
<td class="goodsize"><b>90x200</b></td> 
<td class="goodprice">31400 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">5</td>
<td class="goodname">Ортопедический матрас Naturcomfort</td> 
<td class="goodsize"><b>120x190</b></td> 
<td class="goodprice">39800 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">6</td>
<td class="goodname">Ортопедический матрас Naturcomfort</td> 
<td class="goodsize"><b>120x200</b></td> 
<td class="goodprice">44500 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">7</td>
<td class="goodname">Ортопедический матрас Naturcomfort</td> 
<td class="goodsize"><b>140x200</b></td> 
<td class="goodprice">48600 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">8</td>
<td class="goodname">Ортопедический матрас Naturcomfort</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">55500 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">9</td>
<td class="goodname">Ортопедический матрас Naturcomfort</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">62400 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">10</td>
<td class="goodname">Ортопедический матрас Naturcomfort</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">69800 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/">Купить матрас Naturcomfort</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>




<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Rest 9</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Rest 9</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">58800 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Rest 9</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">66200 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Rest 9</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">73600 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/new-mattresses/Rest+9/">Купить матрас Rest 9</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Rest 10</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Rest 10</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">64100 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Rest 10</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">72100 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Rest 10</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">80100 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/elitnye-matrasy/Rest-10/">Купить матрас Rest 10</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Rest 12</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Rest 12</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">77700 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Rest 12</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">87400 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Rest 12</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">97100 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/elitnye-matrasy/Rest-12/">Купить матрас Rest 12</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>




<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Comfort Plus 10</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Comfort Plus 10</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">80300 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Comfort Plus 10</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">90300 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Comfort Plus 10</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">100300 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/new-mattresses/Comfort+Plus+10/">Купить матрас Comfort Plus 10</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Comfort Plus 12</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Comfort Plus 12</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">90600 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Comfort Plus 12</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">102000 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Comfort Plus 12</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">113200 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/elitnye-matrasy/Comfort-Plus-12/">Купить матрас Comfort Plus 12</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>




<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex FreshGel 10</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас FreshGel 10</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">87400 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас FreshGel 10</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">98500 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас FreshGel 10</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">109300 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/new-mattresses/FreshGel+10/">Купить матрас FreshGel 10</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Imperiale 24</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Imperiale 24</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">96000 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Imperiale 24</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">102000 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Imperiale 24</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">113200 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/elitnye-matrasy/Imperiale-24/">Купить матрас Imperiale 24</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Imperiale 28</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Imperiale 28</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">108200 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Imperiale 28</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">121600 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Imperiale 28</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">135200 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/elitnye-matrasy/Imperiale-28/">Купить матрас Imperiale 28</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Imperiale 33</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Imperiale 33</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">127200 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Imperiale 33</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">143200 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Imperiale 33</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">159000 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/elitnye-matrasy/Imperiale-33/">Купить матрас Imperiale 33</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Exchange Memoform Dual</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Exchange Memoform Dual</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">124600 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Exchange Memoform Dual</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">140100 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Exchange Memoform Dual</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">155700 р.</td> 
</tr>
</tbody>
</table>

<a href="/elitnye-matrasy/Exchange-Memoform-Dual/">Купить матрас Exchange Memoform Dual</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические матрасы Magniflex Virtus 30</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедический матрас Virtus 30</td> 
<td class="goodsize"><b>160x200</b></td> 
<td class="goodprice">294100 р.</td> 
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodid">2</td>
<td class="goodname">Ортопедический матрас Virtus 30</td> 
<td class="goodsize"><b>180x200</b></td> 
<td class="goodprice">330800 р.</td> 
</tr>

<tr class="striped">
<td class="goodid">3</td>
<td class="goodname">Ортопедический матрас Virtus 30</td> 
<td class="goodsize"><b>200x200</b></td> 
<td class="goodprice">367500 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/elitnye-matrasy/Virtus-30/">Купить матрас Virtus 30</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические подушки Magniflex Relaxsan</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедическая подушка Relaxsan</td> 
<td class="goodsize"><b>40x70x10</b></td> 
<td class="goodprice">2300 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/vacuum_pillows/RELAXSAN/">Купить подушку Relaxsan</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические подушки Magniflex Memory</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедическая подушка Memory</td> 
<td class="goodsize"><b>60x43x10</b></td> 
<td class="goodprice">6800 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/Orthopedic_pillows/MEMORY/">Купить подушку Memory</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические подушки Magniflex Orthomassage</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедическая подушка Orthomassage</td> 
<td class="goodsize"><b>70x39x11</b></td> 
<td class="goodprice">7200 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/Orthopedic_pillows/ORTHOMASSAGE/">Купить подушку Orthomassage</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические подушки Magniflex Comfort Pillow</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедическая подушка Comfort Pillow</td> 
<td class="goodsize"><b>52x32x5/10</b></td> 
<td class="goodprice">5900 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/Orthopedic_pillows/COMFORT-PILLOW/">Купить подушку Comfort Pillow</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические подушки Magniflex Aloe Vera</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедическая подушка Aloe Vera</td> 
<td class="goodsize"><b>72x42x12</b></td> 
<td class="goodprice">7600 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/Orthopedic_pillows/ALOE+VERA/">Купить подушку Aloe Vera</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические подушки Magniflex FreshGel Wave</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедическая подушка FreshGel Wave</td> 
<td class="goodsize"><b>60x43x12/10/8</b></td> 
<td class="goodprice">7100 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/gelevye-podushki/FreshGel+Wave/">Купить подушку FreshGel Wave</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические подушки Magniflex FreshGel Standard</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедическая подушка FreshGel Standard</td> 
<td class="goodsize"><b>72x42x13</b></td> 
<td class="goodprice">7900 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/gelevye-podushki/FreshGel+Standart/">Купить подушку FreshGel Standard</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>



<!-----------------------------------------------ДРУГОЙ РАЗДЕЛ ТОВАРА------------------------------------------------>
<h4 class="hnb_toptable">Ортопедические подушки Magniflex MemoGel Standard</h4>
<table cellspacing="0" class="goodtable">
<tbody>
<tr class="striped">
<td class="goodid">1</td>
<td class="goodname">Ортопедическая подушка MemoGel Standard</td> 
<td class="goodsize"><b>72x42x14</b></td> 
<td class="goodprice">8200 р.</td> 
</tr>
</tbody>
</table>

<a href="/catalog/gelevye-podushki/MemoGel+Standart/">Купить подушку MemoGel Standard</a> можно по этой ссылке или в соответствующем разделе.
<br><br><br><br>




<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">

</p>

</div>
<div style="clear: both;"></div>				</div>
			'
		),
		array(
			'address' => 'questions-answers',
			'parent_address' => 'pokupatelyam',
			'parent_name' => 'Покупателям',
			'name' => 'Вопросы и Ответы',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Часто задаваемые вопросы, полезная информация о матрасах Magniflex | Магнифлекс',
			'description' => 'Вы можете найти ответы на популярные вопросы о товарах фирмы Магнифлекс на этой страничке',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс',
			'text' => '
			<style>
				#breadcrumbs {
					background: url(/img/breadcrumbs_riposook.jpg);
					height: 220px;
				}
				</style>
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">
		<h2 class="hnb_mytitlepag">Вопросы и Ответы</h2>
		<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
 <strong style="color: #666666; font-size: 12px;">Сколько весит матрас Magniflex?</strong><br>
			 Вес матрасов зависит в первую очередь от размера. В среднем матрас, имеющий размер 160 х 200 см, весит 16-18 кг. <br>
			<br>
 <strong style="color: #666666; font-size: 12px;">Какая допустимая максимальная нагрузка на одно спальное место?</strong><br>
			 Допустимая максимальная нагрузка (вес одного человека) при которой матрас сохраняет ортопедические и анатомические свойства, зависит от конкретной модели матрасов. Кроме того, существенное влияние имеет рост человека. <br>
			 У каждой модели матрасов есть свои свойства, например, для линии Magniflex New Naturcomfort таблица свойств выглядит следующим образом:<br>
			 а для Magniflex Merino (Merinos): <br>
			 Важно помнить, что все двуспальные модели матрасов Magniflex (магнифлекс) оказывают свои ортопедические и анатомические свойства на каждого ИНДИВИДУАЛЬНО, вне зависимости от веса и количества спящих на них людей. <br>
			<br>  
 <strong style="color: #666666; font-size: 12px;">Почему мне стоит выбрать именно продукцию компании Magniflex?</strong><br>
			 Потому что Magniflex (Магнифлекс) - <br>
			 это высочайшее качество продукции, признанное во всем мире; <br>
			 это продукт, произведенный ИСКЛЮЧИТЕЛЬНО В ИТАЛИИ от наполнителя до нитки;<br>
			 это рекомендации ведущих врачей ортопедов, медицинских центров и институтов, в том числе РОСТЕСТ и Центральный Институт Травматологии и Ортопедии РФ<br>
		</p>
		<div class="hnb_myimgap">
 <img width="385" src="/img/eng_supporto_newnaturcomfort.jpg" height="182" alt="таблица комфорта матраса natur comfort">
		</div>
а для Magniflex <a class="hnb_myadecor" href="/catalog/mattresses/MERINOS/">Merino</a>  <a class="hnb_myadecor" href="/catalog/mattresses/MEMO-MERINO/">(Merinos)</a>:
		<div class="hnb_myimgap">
 <img width="385" src="/img/supporto_lavendercomfort.jpg" height="182" alt="таблица комфорта матраса merinos">
		</div>
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'show-room-matrasov',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Шоу-рум',
			'left_sidebar' => '',
			'title' => 'Шоу-рум Magniflex (Магнифлекс) в Москве. Выставочный зал',
			'description' => 'Адрес, часы работы и другая актуальная информация главного шоу-рума Магнифлекс в России',
			'keywords' => ' матрасы magniflex в магазине, матрасы магнифлекс в магазине',
			'text' => '
				<style>
#breadcrumbs
{
	background: url(/img/breadcrumbs_aziendaok.jpg);
	height:220px;
}

p a{
    color: #00D6E9;
    text-decoration: underline;
    transition: color 0.3s;
}

p a:hover{
    text-decoration: none;
    color: #00b5c5;
}
</style>

<div class="hnb_contarea">
<!--<div class="hnb_conttextright">-->
<div class="hnb_conttextcrntbott sf_show_room">
<h1 class="hnb_mytitlepag">Шоу-рум Magniflex</h1>


<div style="width: 270px;" class="hnb_tymevork" itemscope itemtype="http://schema.org/ImageObject">
<img style="
    margin-top: 6px;
    margin-bottom: 5px;
" src="/img/tymework.png" alt="" itemprop="contentUrl" /><br />
<b itemprop="name">Часы работы</b><br />
Понедельник - Четверг: 9:30 - 20:00<br />
Пятница: 9:30 - 19:00<br />
Суббота: 11:00 - 19:00<br />
Воскресенье: выходной день.

</div>

<div class="hnb_kontaktinfor" itemscope itemtype="http://schema.org/ImageObject">
<img src="/img/kontainfj.png" alt="" itemprop="contentUrl" style="margin:0;"/><br />
<b itemprop="name">Контактная информация</b><br />
+7 (495) 989 11 32,<br />
+7 (495) 792 16 93,<br />
+7 (495) 771 01 10<br />
E-mail: sale@magniflex.ru<br /><br />
</div>

<div class="hnb_addres" itemscope itemtype="http://schema.org/ImageObject">
<img style="
margin:0;
    margin-top: 16px;
" src="/img/addres.png" alt="" itemprop="contentUrl"/><br />
<b itemprop="name">Адрес</b><br />

Москва, м. Полянка, <br />
Бродников переулок, д.10, к.2. <br />
(150 метров от метро) <br />
<a href="#yakonp2">схема проезда</a>

</div>

<div style="clear:both;"></div>

<!------------------------------------------------
<div class="sf_cat_text_btn">Часы работы в майские праздники</div>
<div class="sf_info" id="prod_similar_info">
1, 3 мая — выходные дни.<br />
2, 4 мая — с 11:00 до 19:00 <br /><br />

5, 6, 7 мая — с 9:30 до 20:00<br />
8 мая — с 9:30 до 19:00<br /><br />

9, 10 мая — выходные дни<br />
11 мая — с 11:00 до 19:00. <br /><br />
Консультации по телефону ежедневно с 9:30 до 22:00<br /> 
 
+7 (495) 989-11-32, 771-01-10, 792-16-93, 768-81-18.<br />  <br />
</div>


--------------------------------------------------------------------->



<hr class="hnb_myhrpageeny" />
<br/><br/>
<div class="hnb_gal">
<span itemscope="" itemtype="http://schema.org/ImageObject">
<a href="/img/show-magniflex-01.jpg" class="boxer relgallery" title="Шоу-рум Magniflex в Москве" itemprop="contentUrl" rel="relgallery"> 
<img style="width:600px;" src="/img/show-magniflex-01.jpg" alt="Шоу-рум Magniflex в Москве" itemprop="thumbnailUrl" />
</a>
</span>
</div>



<h1>ШОУ-РУМ MAGNIFLEX</h1>


В самом центре Москвы всего в 2 минутах пешком от станции метро Полянка расположился уютный шоу-рум (выставочный зал) компании Магнифлекс. <br/>
 Вас с удовольствием встретят радушные сотрудники, угостят чашечкой кофе и проконсультируют по всем-всем вопросам о матрасах и подушках! Вся продукция в наличии - Вы сможете на месте сделать заказ. Товары на дом Вам поможет бесплатно доставить наша транспортная служба. 
<br /><br />

<div class="hnb_gal">
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/Magniflex-showroom-01.jpg" class="boxer relgallery" title="Шоу-рум Магнифлекс: представлены ортопедические матрасы всех моделей" itemprop="contentUrl"> <img src="/img/Magniflex-showroom-01_small.jpg" alt="Thumbnail" itemprop="thumbnailUrl"></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/Magniflex-showroom-02.jpg" class="boxer relgallery" title="Шоу-рум Магнифлекс: выбираем продукцию с комфортом" itemprop="contentUrl"> <img src="/img/Magniflex-showroom-02_small.jpg" alt="Thumbnail" itemprop="thumbnailUrl"></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/Magniflex-showroom-03.jpg" class="boxer relgallery" title="Шоу-рум Магнифлекс: только итальянская продукция" itemprop="contentUrl"> <img src="/img/Magniflex-showroom-03_small.jpg" alt="Thumbnail" itemprop="thumbnailUrl"></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/Magniflex-showroom-04.jpg" class="boxer relgallery" title="Шоу-рум Магнифлекс: все модели подушек и матрасов - можно полежать и потрогать" itemprop="contentUrl"> <img src="/img/Magniflex-showroom-04_small.jpg" alt="Thumbnail" itemprop="thumbnailUrl"></a></span>
<br>
Интерьер шоу-рума Magniflex

</div>

<br /><br />


<hr class="hnb_myhrpageeny" />
<div itemscope itemtype="http://schema.org/ImageObject">
<h2 class="name_2" itemprop="name">МАТРАСЫ В ДВУСПАЛЬНОМ ВАРИАНТЕ</h2>
В шоу-руме представлены все модели матрасов, в том числе и ЭЛИТНЫЕ коллекции!<br/>
Большинство в двуспальном варианте - очень удобно для полноценного тестирования.
<br>
<img src="/img/devmat.png" itemprop="contentUrl" alt="шоу рум магнифлекс - двуспальные матрасы">
</div>
<br><br>

<hr class="hnb_myhrpageeny" />
<div itemscope itemtype="http://schema.org/ImageObject">
<h2 class="name_2" itemprop="name">БЕСПЛАТНЫЙ ПАРКИНГ, УДОБНОЕ ВРЕМЯ РАБОТЫ</h2>
Всем посетителям - удобный бесплатный паркинг в любое время.<br>
Чтобы быстро попасть на парковочное место - предупредите за несколько минут наших сотрудников по телефону.<br />
Работаем даже по субботам!<br />
Понедельник - Четверг: 9:30 - 20:00<br />
Пятница: 9:30 - 19:00<br />
Суббота: 11:00 - 19:00<br />
Воскресенье: выходной день.<br />
<img src="/img/parking.png" itemprop="contentUrl">
</div>
<br /><br />
<hr class="hnb_myhrpageeny" />
<h2 class="name_2" id="yakonp2" >КАРТА ПРОЕЗДА ОТ ЯНДЕКСА</h2>

г. Москва, м. Полянка, Бродников переулок, д.10, к.2. 
</p>


<div id="yakonp" style="text-align:center; width: 700px;
margin: 0 auto;">

</div>
<br /><br />
<p>или посмотрите <a href="/shema-proezda.pdf" target="_blank">подробную схему проезда</a> к нам.</p>
<br /><br />
</div>
<div style="clear: both;"></div>

</div>
			'
		),
		array(
			'address' => 'skidki-na-otkrytye-matrasy-magniflex',
			'parent_address' => 'skidki-magniflex',
			'parent_name' => 'Акции и скидки',
			'name' => 'Открытые матрасы',
			'left_sidebar' => 'skidki-magniflex',
			'title' => 'Скидки на открытые матрасы магнифлекс magniflex | Магнифлекс',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">ОТКРЫТЫЕ МАТРАСЫ</h2>

<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">


В жизни случается всякое. Бывает, покупатель заказывает матрас, а после того, как он его распаковывает, выясняется ошибка с размером. Вакуумная упаковка матраса нарушена, потерян товарный вид. Мы приходим на помощь и меняем матрас на новый с небольшой доплатой покупателя. У нас остается открытый совершенно новый матрас. Эти (и подобные случайно распакованные) матрасы мы предлагаем к продаже с СУЩЕСТВЕННОЙ СКИДКОЙ от первоначальной стоимости товара. Мы гарантируем, что данный матрас не потерял ни одного из своих свойств, он качественный, единственное отличие - нарушена герметичность упаковки товара.
	<br /><br />

Доставка по Москве осуществляется бесплатно.<br /><br /> 

Для того, чтобы узнать наличие и цену интересующего Вас матраса, звоните нам по телефонам:<br /><br />
+7 (495) 507 22 65<br />
+7 (495) 316 89 88.<br />

</p>
</div>
<div style="clear: both;"></div>



				</div>
			'
		),
		array(
			'address' => 'skidki-magniflex',
			'parent_address' => '',
			'parent_name' => '',
			'name' => '25% скидка на подушки',
			'left_sidebar' => 'skidki-magniflex',
			'title' => 'Скидка 25% на подушку Magniflex при покупке матраса | Магнифлекс',
			'description' => 'Постоянная акция в интернет-магазине Магнифлекс — 25% скидка на подушку при покупке любого матраса',
			'keywords' => 'magniflex акции, магнифлекс скидки',
			'text' => '
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">25% скидка на все подушки Magniflex</h2>

<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">


	В нашем официальном интернет магазине Magniflex действует акция — 25% скидка на любые подушки (можно на несколько) при единовременной покупке матраса. 

<br /><br />
Экономьте с Пользой!
<br /><br />
Например:
<br /><br />


    
</p><div class="hnb_mypoh2sk">
<ul class="hnb_mypohulsk">
<li class="hnb_mypohlisk"><a href="/catalog/pillows/MEMORY/"><img width="185" src="/img/product/very_small2/Comfort Pillow.jpg" height="130" alt="" /><br />Подушка COMFORT PILLOW</a>
<br />
<div class="hnb_mypohliconttextsk">
<span>Цена: 8 300 руб.<br />
Цена со скидкой: 6 225 руб.</span><br />
<span class="mypricesk">Выгода: 2 075 руб.</span><br />
<div class="hnb_mypadpohsk">


</div>
</div>
</li>
<li class="hnb_mypohlisk"><a href="/catalog/pillows/ALOE+VERA"><img width="185" src="/img/product/very_small2/Aloe Vera.jpg" height="130" alt="" /><br />Подушка ALOE VERA</a>
<br />
<div class="hnb_mypohliconttextsk">
<span>Цена: 9 000 руб.<br />
Цена со скидкой: 6 750 руб.</span><br />
<span class="mypricesk">Выгода: 2 225 руб.</span><br />
<div class="hnb_mypadpohsk">

</div>
</div>
</li>
<li class="hnb_mypohlisk"><a href="/catalog/pillows/MemoGel+Standart/"><img width="185" src="/img/product/very_small2/MemoGel Standard.jpg" height="130" alt="" /><br />Подушка MEMOGEL STANDARD</a>
<br />
<div class="hnb_mypohliconttextsk">
<span>Цена: 9 500 руб.<br />
Цена со скидкой: 7 125 руб.</span><br />
<span class="mypricesk">Выгода: 2 375 руб.</span><br />
<div class="hnb_mypadpohsk">


</div>
</div>
</li>

</ul>
<br /><br />
<i>Для Вашего Удобства, скидка рассчитывается автоматически в корзине покупателя.</i>

</div>
</div>
	<div style="clear: both;"></div>




</div>
			'
		),
		
		array(
			'address' => 'faq',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Oтзыв',
			'left_sidebar' => 'skidki-magniflex',
			'title' => 'Oтзыв',
			'description' => 'Постоянная акция в интернет-магазине Магнифлекс — 25% скидка на подушку при покупке любого матраса',
			'keywords' => 'magniflex акции, магнифлекс скидки',
			'text' => '
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Oтзыв</h2>
<form method="post">
  <label>Как к Вам обращаться:</label>
  <input type="text" name="name" required/>
  <label>Email (не публикуется):</label>
  <input type="email" name="email" required/>
  <label>Oтзыв:</label>
  <textarea name="content" required rows="5"></textarea>
  <input type="submit" value="публикация"/>
</form>



</div>
	<div style="clear: both;"></div>




</div>
			'
		),
		
array(
			//'hide' => true, //не показывать страницу
			'address' => 'skidki-merinos',
			'parent_address' => '',
			'parent_name' => '',
			'name' => '25% скидка на матрасы',
			'left_sidebar' => 'skidki-magniflex',
			'title' => 'Скидки до 30% в Июле magniflex | Магнифлекс',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">

<h2 class="hnb_mytitlepag">Скидки до 30% в Июле</h2>

<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
В июле 2015 года действует специальная скидка на ряд товаров!  
<br /><br /><br />
</p>

<h2 class="hnb_mytitlepag">20% СКИДКА НА ОРТОПЕДИЧЕСКИЙ МАТРАС BAMBOO</h2>

<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">


Акция распространяется только на размеры 90х200, 160х200, 180х200.
<br /><br />
</p>
<div style="position:relative;">
<hr style="  background-color: #808080;  position: absolute;  width: 100%;  top: 30px;" />
</div>
<table class="hnb_table_scidka">
	<tr style="font-size:12px;">
		<td>
			Размер
		</td>
		<td>
			Старая цена
		</td>
		<td>
			Новая цена
		</td>
		<td>
			Экономия
		</td>
		<td>
			
		</td>
	</tr>
	
	<tr>
		<td>
			90x200
		</td>
		<td style="text-decoration: line-through;">
			22 000 руб 
		</td>
		<td>
			17 600 руб
		</td>
		<td>
			4 400 руб
		</td>
		<td>
			<a href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/?size=90x200" alt="Купить матрас MERINO MAGNIFLEX 90х200">Купить</a>
		</td>
	</tr>
	
	<tr>
		<td>
			160x200
		</td>
		<td style="text-decoration: line-through;">
			39 100 руб
		</td>
		<td>
			31 300 руб
		</td>
		<td>
			7 800 руб 
		</td>
		<td>
			<a href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/?size=160x200" alt="Купить матрас MERINO MAGNIFLEX 160х200">Купить</a>
		</td>
	</tr>
	
	<tr>
		<td>
			180x200 
		</td>
		<td style="text-decoration: line-through;">
			43 900 руб 
		</td>
		<td>
			35 100 руб
		</td>
		<td>
			8 800 руб
		</td>
		<td>
			<a href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/?size=180x200" alt="Купить матрас MERINO MAGNIFLEX 180х200">Купить</a>
		</td>
	</tr>
</table>
<img style="float: left;padding-right: 0;  margin-top: 37px;padding-left: 0;  width: 206px;" src="/img/product/big/Bamboo.jpg" alt="" />

<div style="clear: both;"></div>
<br />
<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
Бесплатная доставка и подъем на этаж по Москве!
<br /><br />
</p>
<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
Подробная информация  - <a href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/">матрас Bamboo Magniflex</a>
<br /><br /><br />
</p>

<h2 class="hnb_mytitlepag">СКИДКА 20% НА ГЕЛЕВЫЕ МАТРАСЫ</h2>

<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">


Акция распространяется только на размеры: 160х200, 180х200, 200х200.
<br /><br />
</p>
<h3>FRESHGEL 9</h3>
<div style="position:relative;">
<hr style="  background-color: #808080;  position: absolute;  width: 100%;  top: 30px;" />
</div>
<table class="hnb_table_scidka">
	<tr style="font-size:12px;">
		<td>
			Размер
		</td>
		<td>
			Старая цена
		</td>
		<td>
			Новая цена
		</td>
		<td>
			Экономия
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
			15 650 руб 
		</td>
		<td>
			<a href="/catalog/orthopedic_mattresses/FreshGel-9/?size=160x200" alt="Купить матрас MERINO MAGNIFLEX 160х200">Купить</a>
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
			17 750 руб
		</td>
		<td>
			<a href="/catalog/orthopedic_mattresses/FreshGel-9/?size=180x200" alt="Купить матрас MERINO MAGNIFLEX 180х200">Купить</a>
		</td>
	</tr>
	
	
	
</table>
<img style="float: left;padding-right: 0;  margin-top: 37px;padding-left: 0;  width: 206px;" src="/img/product/big/FreshGel 9.jpg" alt="" />

<div style="clear: both;"></div>
<br />
<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
Бесплатная доставка и подъем на этаж по Москве!
<br /><br />
</p>
<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
Подробная информация  - <a href="/catalog/orthopedic_mattresses/FreshGel-9/">матрас FRESHGEL 9 Magniflex</a>
<br /><br /><br />
</p>

<h3>FRESHGEL 10</h3>

<div style="position:relative;">
<hr style="  background-color: #808080;  position: absolute;  width: 100%;  top: 30px;" />
</div>
<table class="hnb_table_scidka">
	<tr style="font-size:12px;">
		<td>
			Размер
		</td>
		<td>
			Старая цена
		</td>
		<td>
			Новая цена
		</td>
		<td>
			Экономия
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
			69 900  руб
		</td>
		<td>
			17 500 руб 
		</td>
		<td>
			<a href="/catalog/orthopedic_mattresses/FreshGel-10/?size=160x200" alt="Купить матрас MERINO MAGNIFLEX 160х200">Купить</a>
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
			78 800  руб
		</td>
		<td>
			19 700 руб 
		</td>
		<td>
			<a href="/catalog/orthopedic_mattresses/FreshGel-10/?size=180x200" alt="Купить матрас MERINO MAGNIFLEX 160х200">Купить</a>
		</td>
	</tr>
	
	<tr>
		<td>
			200x200 
		</td>
		<td style="text-decoration: line-through;">
			109 300  руб 
		</td>
		<td>
			87 450  руб
		</td>
		<td>
			21 850 руб
		</td>
		<td>
			<a href="/catalog/orthopedic_mattresses/FreshGel-10/?size=200x200" alt="Купить матрас MERINO MAGNIFLEX 180х200">Купить</a>
		</td>
	</tr>
	
</table>
<img style="float: left;padding-right: 0;  margin-top: 37px;padding-left: 0;  width: 206px;" src="/img/product/big/FreshGel 10.jpg" alt="" />

<div style="clear: both;"></div>
<br />
<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
Бесплатная доставка и подъем на этаж по Москве!
<br /><br />
</p>
<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
Подробная информация  - <a href="/catalog/orthopedic_mattresses/FreshGel-10/">матрас FRESHGEL 10 Magniflex</a>
<br /><br /><br />
</p>




<h3>FRESHGEL 12</h3>

<div style="position:relative;">
<hr style="  background-color: #808080;  position: absolute;  width: 100%;  top: 30px;" />
</div>
<table class="hnb_table_scidka">
	<tr style="font-size:12px;">
		<td>
			Размер
		</td>
		<td>
			Старая цена
		</td>
		<td>
			Новая цена
		</td>
		<td>
			Экономия
		</td>
		<td>
			
		</td>
	</tr>
	
    <tr>
		<td>
			160x200 
		</td>
		<td style="text-decoration: line-through;">
			96 300   руб 
		</td>
		<td>
			77 050  руб
		</td>
		<td>
			19 250 руб
		</td>
		<td>
			<a href="/catalog/orthopedic_mattresses/FreshGel-12/?size=160x200" alt="Купить матрас FreshGel-12 160х200">Купить</a>
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
			86 500  руб
		</td>
		<td>
			21 600 руб 
		</td>
		<td>
			<a href="/catalog/orthopedic_mattresses/FreshGel-12/?size=180x200" alt="Купить матрас FreshGel-12 180х200">Купить</a>
		</td>
	</tr>
	
	
	<tr>
		<td>
			200x200 
		</td>
		<td style="text-decoration: line-through;">
			120 200   руб 
		</td>
		<td>
			96 150  руб
		</td>
		<td>
			24 050 руб
		</td>
		<td>
			<a href="/catalog/orthopedic_mattresses/FreshGel-12/?size=200x200" alt="Купить матрас FreshGel-12 200х200">Купить</a>
		</td>
	</tr>
</table>
<img style="float: left;padding-right: 0;  margin-top: 37px;padding-left: 0;  width: 206px;" src="/img/product/big/FreshGel 12.jpg" alt="" />

<div style="clear: both;"></div>
<br />
<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
Бесплатная доставка и подъем на этаж по Москве!
<br /><br />
</p>
<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
Подробная информация  - <a href="https://www.magniflex.ru/catalog/elitnye-matrasy/FreshGel-12/">матрас FRESHGEL 12 Magniflex</a>
<br /><br /><br />
</p>


<h2 class="hnb_mytitlepag">СКИДКА 30% НА ГЕЛЕВЫЕ ПОДУШКИ</h2>

<h3>ПОДУШКИ</h3>

<div style="position:relative;">
<hr style="  background-color: #808080;  position: absolute;  width: 100%;  top: 30px;" />
</div>
<table class="hnb_table_scidka">
	<tr style="font-size:12px;">
		<td>
			Назва
		</td>
		<td>
			Старая цена
		</td>
		<td>
			Новая цена
		</td>
		<td>
			Экономия
		</td>
		<td>
			
		</td>
	</tr>
	
	<tr>
		<td>
			Freshgel Wave
		</td>
		<td style="text-decoration: line-through;">
			7 100 руб 
		</td>
		<td>
			4 950  руб
		</td>
		<td>
			2 150 руб
		</td>
		<td>
			<a href="/catalog/gelevye-podushki/FreshGel+Wave/?" alt="Купить матрас MERINO MAGNIFLEX 90х200">Купить</a>
		</td>
	</tr>
	
	<tr>
		<td>
			Freshgel Standard
		</td>
		<td style="text-decoration: line-through;">
			7 900 руб
		</td>
		<td>
			5 500  руб
		</td>
		<td>
			2 400 руб 
		</td>
		<td>
			<a href="/catalog/gelevye-podushki/FreshGel+Standart/" alt="Купить матрас MERINO MAGNIFLEX 160х200">Купить</a>
		</td>
	</tr>
	
	<tr>
		<td>
			Memo Gel Standard 
		</td>
		<td style="text-decoration: line-through;">
			8 200   руб 
		</td>
		<td>
			5 750  руб
		</td>
		<td>
			2 450 руб
		</td>
		<td>
			<a href="/catalog/gelevye-podushki/MemoGel+Standart/" alt="Купить матрас MERINO MAGNIFLEX 180х200">Купить</a>
		</td>
	</tr>
</table>
<img style="float: left;padding-right: 0;  margin-top: 37px;padding-left: 0;  width: 206px;" src="/img/product/big/MemoGel Standard.jpg" alt="" />

<div style="clear: both;"></div>


<br /><br />
</p>
<p>
Скидки  не суммируются. По Москве доставка подушек бесплатная только от 3-х штук и более, до 3-х штук - 500 рублей. Возможен бесплатный самовывоз из шоу-рума  на следующий день после заказа.
</p>



<!--<img style="padding-left:0;" src="/img/product/rosprodaja25proc.jpg" alt="" />-->
<br />
<br />
</div>

<div style="clear: both;"></div>

			'
		),		

		array(
			'hide' => true,
			'address' => 'samaya-vygodnaya-tsena',
			'parent_address' => 'skidki-magniflex',
			'parent_name' => 'Акции и скидки',
			'name' => 'Самая выгодная цена',
			'left_sidebar' => 'skidki-magniflex',
			'title' => 'Гарантия самой низкой и самой выгодной цены на матрасы и подушки Magniflex | Магнифлекс',
			'description' => 'Условия Акции — Гарантия самой низкой и самой выгодной цены на матрасы и подушки',
			'keywords' => 'гарантия самой низкой цены магнифлекс',
			'text' => '
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Гарантия самой выгодной и самой низкой цены в России на матрасы и подушки Magniflex</h2>


<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">

Мы единственное официальное представительство Magniflex в России (<em><a href="/o-magniflex/oficialnoe-predstavitelstvo-magniflex/">подробности</a></em>). Только мы обладаем эксклюзивным правом торговли ортопедическими матрасами марки Magniflex на территории РФ. Все остальные компании и магазины - наши дилеры. Поэтому мы знаем все обо всех проводимых официальных акциях, специальных предложениях, скидках и бонусах Магнифлекс. <br /><br />
Мы стремимся к тому, чтобы <strong>цены</strong> в нашем официальном интернет-магазине magniflex.ru были <strong>самыми низкими</strong>, а <strong> условия - самыми  выгодными </strong>.<br /><br />

В некоторых редких случаях мы сталкиваемся с объявлениями, обещающими скидки на продукцию Magniflex или невероятно низкие цены. Будьте внимательны, велика вероятность, что под видом матрасов или подушек Magniflex продаются поддельные товары неизвестного происхождения.<br /><br />

В целях недопущения распространения поддельной, контрафактной продукции мы объявляем акцию "Гарантия самой выгодной и самой низкой цены в России на матрасы и подушки Magniflex".<br /><br />


<img src="/img/best-price.jpg" alt="Лучшая цена на матрасы Magniflex">

<br /><br />

<strong>Суть акции очень проста:</strong><br />
Если Вы где-то на просторах интернета нашли предложение на матрасы или подушки Magniflex с ценой ниже, чем в официальном магазине - укажите это в Вашем заказе. Мы сделаем Вам специальную цену, ниже найденной Вами на чужом сайте. Мы учитываем все обстоятельства и предложим Вам специальные условия даже в случае, если цена на товар аналогичная, но вам делают какую-то специальную "клиентскую" скиду или дарят денежный подарок, за счет которого цена на изделие снижается. Для нас имеет значение только конечная стоимость изделия и наличие товара. <br /><br />

<strong>Например:</strong><br />

Цена на матрас составляет 10 000 рублей. Где-то в интернете Вы нашли предложение о 5% скидки на этот товар, или Вам за что-то дарят 500 рублей, то есть окончательная стоимость этот матрас для Вас - 9 500 рублей. Мы сделаем Вам предложение лучше: мы установим специальную цену в размере 9 400 рублей. Кроме этого, Вы будете уверены в том, что этот матрас  настоящий, произведенный на фабрике Магнифлекс в Италии. Покупку доставит Вам до дверей наша фирменная служба доставки. Матрас будет в стерильной, чистой упаковке, а на руках у Вас будет официальный гарантийный талон! <br /><br /><br />
Помните:

</p>

<h2 class="hnb_mytitlepag">Не бывает "серых" матрасов Magniflex, бывают поддельные</h2>



</div>
</div>
<div class="clear"></div>
			'
		),
		array(
			'address' => 'adresa-magazinov',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Адреса Магазинов',
			'left_sidebar' => 'o-magniflex2',
			'title' => 'Адреса магазинов Magniflex | Магнифлекс',
			'description' => 'Адреса, график работ, ассортимент магазинов, торгующих продукцией Магнифлекс',
			'keywords' => 'magniflex магазин, магнифлекс магазин',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Адреса Магазинов</h2>


<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">Выберите магазин Magniflex (Магнифекс):<br /><br />

<a href="/o-magniflex/internet-magazin-matrasov/">Интернет-Магазин</a><br />
<a href="/o-magniflex/show-room-matrasov/">Шоу-рум - центральный магазин в Москве</a><br />
<a href="/o-magniflex/moscow/">Другие магазины Москвы</a><br />
<a href="/o-magniflex/russia/">Представительства в России</a><br />
<a href="/o-magniflex/magniflex-mattresses-world/">Страны ближнего и дальнего зарубежья</a><br />
	
	
</p>

</div>
<div style="clear: both;"></div>				</div>
			'
		),
		
		array(
			'address' => 'internet-magazin-matrasov',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Интернет-Магазин',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Гарантия самой низкой и самой выгодной цены на матрасы и подушки Magniflex | Магнифлекс',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->

</div>
<div class="hnb_conttextright">
<h1 class="hnb_mytitlepag">Интернет-Магазин матрасов</h1>

<strong style="color: #666666; font-size: 12px;">Magniflex.ru</strong>
<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;"> 
В нашем интернет магазине представлены все модели ортопедических матрасов и подушек Magniflex (Магнифлекс), продающиеся в России. Весь товар имеется в наличии. Доставка по Москве осуществляется собственной транспортной службой, что позволяет нам доставлять товары на дом в день заказа точно в указанное время. 
<br /><br />

	<b>Часы работы:</b> ежедневно, с 10:00 до 19:00.<br /><br />
</p>

<h2 class="hnb_mytitlepag">Доверьтесь специалистам</h2>

<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;"> 
<b>Телефоны клиентской службы поддержки:</b><br />
+7 (495) 507 22 65,<br />
+7 (495) 316 89 88<br /><br />

<b>E-mail:</b> info@magniflex.ru<br /><br /></p>


<p style="color: #666666; background-color: #ffffff;font-size: 12px;margin: 0px;">
<b>Банковские реквизиты:</b><br />
ООО «МОСМАНИ» <br />
ОГРН: 1057746232279; 
Юридический адрес: 117208, г. Москва, Сумской проезд, д. 8, корп. 3.<br /><br />

<b>Адрес для самовывоза:</b> Москва, Сумской проезд, д. 8, корп. 3.<br /><br />

Почему ООО называется "МОСМАНИ", а не "МАГНИФЛЕКС"?<br />

Отвечаем: ООО "МОСМАНИ" - это юридическое лицо, а MAGNIFLEX или МАГНИФЛЕКС - товарный знак.  <br />

	Подробнее можно прочитать здесь - <a href="/o-magniflex/oficialnoe-predstavitelstvo-magniflex/">Единственное Официальное Представительство Магнифлекс в РФ</a> <br /><br />

</p>

<div id="yamap_sam">
	
</div>

<p style="color: #666666; background-color: #ffffff; font-size: 12px;"><strong>Полезное</strong>
<br />
Интернет-магазин magniflex.ru был открыт в апреле 2005 года. За время его работы нами были обработаны десятки тысяч заказов со всей России. <br /><br />


</p><p><strong>Отправить нам сообщение</strong>

</p>


<div class="bx_mfeedback">
		<form action="/tools/form.php" method="POST" class="sf_form" onsubmit="return form_send(this);">
		<strong>Ваше имя<span class="mf-req">*</span></strong><br />
		<input type="text" name="name" value=""><br />

		<strong>Ваш E-mail<span class="mf-req">*</span></strong><br />
		<input type="text" name="email" value=""><br />

		<strong>Сообщение<span class="mf-req">*</span></strong><br />
		<textarea name="comment" rows="5" cols="40"></textarea><br />

		<input type="submit" name="submit" value="Отправить" class="bt_blue big shadow">
	</form>
</div>

</div>
</div>
<div class="clear"></div>
			'
		),
		array(
			'address' => 'moscow',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Москва',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Адреса магазинов Магнифлекс в Москве, в которых можно купить ортопедические матрасы и подушки Magniflex | Магнифлекс',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			
			<style>
					.hnb_mmoskov{
						display:block;
					}
				</style>
			
			
			
			
			
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">

		<h3 class="hnb_mytitlepag">ВСЕ матрасы, в том числе и ПРЕМИАЛЬНОГО КЛАССА в Москве представлены только:</h3>

		<h4>Центральный офис - салон компании Магнифлекс в Москве</h4>
 <a href="/img/ofice_map_.jpg" style="display: block; float: left;" class="boxer relgallery"><img alt="Центральный офис Magniflex в Москве" src="/img/ofice_map_.jpg" style="width: 180px;"></a>
		<p style="width: 400px; float: right;">
			В центральном офисе (салоне) Magniflex всегда представлены образцы всех видов ортопедических матрасов, ортопедических подушек и оснований.<br />
			<br />
			 Центральный офис находится по адресу:<br />
			 г. Москва, Сумской проезд, дом 8, корпус 3.<br /><br />
			 
			 Часы работы:  <br />
       будни с 10:00 до 18:00,<br /> 
       суббота и воскресение - выходные дни.<br />
			<br />
			 Служба поддержки - ежедневно, без выходных по телефонам:<br />
			 +7 (495) 316-89-88; +7 (495) 507-22-65; +7 (495) 792-16-93;<br />
       или e-mail: info@magniflex.ru<br />

		</p>
		<h4 style="clear: both; padding-top: 40px;">Шоу-рум - флагманский магазин Магнифлекс</h4>
 <a href="/img/magniflex-showroom.jpg" style="display: block; float: left;" class="boxer relgallery"><img alt="Шоу-рум - флагманский магазин Магнифлес в Москве" src="/img/magniflex-showroom.jpg" style="width: 180px;"></a>
		<p style="width: 400px; float: right;">
			В шоу-руме Вы всегда можете протестировать всю линейку продукции компании Magniflex. <br />
      Подробная информация о магазине по ссылке: <a href="/o-magniflex/show-room-matrasov/">шоу-рум Magniflex</a>.
      <br />
			<br />
			Адрес:<br />
			 г. Москва, м. Полянка, Бродников переулок, д.10, к.2.<br />
			<br />
			Часы работы:<br />

Понедельник - Четверг: 9:30 - 20:00<br />
Пятница: 9:30 - 19:00<br />
Суббота: 11:00 - 19:00<br />
Воскресенье: выходной.<br /><br />
Телефоны: +7 (495) 792-16-93; +7 (495) 989-11-32; +7 (495) 771-01-10<br />
<i>(консультации по телефонам ЕЖЕДНЕВНО с 10:00 до 22:00)</i>.
		</p>

		<h3 class="hnb_mytitlepag" style="clear: both; padding-top: 40px;">Магазины в Москве -  выставлена часть коллекции</h3>

		<h4 style="clear: both; padding-top: 40px;">Магазины в Москве</h4>
 <a href="/img/Moscow_map_.jpg" class="boxer relgallery" style="display: block; float: left;"><img alt="Магазины Magniflex в Москве" src="/img/Moscow_map_.jpg" style="width: 200px;"></a>
		<p style="width: 400px; float: right;">
			В Москве продукцию компании Magniflex (Италия) можно встретить во многих крупных торговых центрах и мебельных салонах.<br />
			<br />
			 ВНИМАНИЕ! Не во всех салонах, торговых центрах и магазинах представлен весь ассортимент ортопедических матрасов и подушек Magniflex, поэтому для того, чтобы узнать адрес ближайшего для Вас магазина, в котором есть интересующая Вас модель матраса, пожалуйста, позвоните оператору по телефону:<br />
			<br />
			 +7 (495) 316 89 88<br />
			 +7 (495) 507 22 65<br />
			<br />
			 и он подскажет Вам самый удобный вариант.
		</p>
		<h5 style="clear:both;margin:0;padding:70px 0 0 0;">Магазины, работающие 7 дней в неделю</h5>
 <br />

		Со списком магазинов и салонов, работающими без выходных, вы можете ознакомиться по ссылке: <a href="/o-magniflex/moscow/predstavleniya-kolekcii/">магазины Magniflex в Москве</a><br />
<i>Имейте в виду, в этих магазинах Вы можете ознакомиться с ограниченным ассортиментом товаров, однако заказать можете любое изделие!</i>
		<br /><br />
		<br /><br />
		<br /><br />
		<h3 class="hnb_mytitlepag">Magniflex в Московской области		</h3>
Чтобы узнать в каких городах Московской области представлены матрасы и подушки Magniflex - кликните по ссылке - <a href="/o-magniflex/russia/moskovskaya-oblast/">"Магнифлекс в Московской области"</a>.
	</div>
</div><div style="clear: both;"></div>
			'
		),
		
		array(
			'address' => 'polejaty-na-matrasah',
			'parent_address' => 'o-magniflex/moscow',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Полежать на всех матрасах',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Адреса магазинов Магнифлекс в Москве, в которых можно купить ортопедические матрасы и подушки | Magniflex',
			'description' => 'Адреса магазинов, ассортимен, график работы в Москве, в которых можно купить ортопедические матрасы и подушки Магнифлекс',
			'keywords' => 'магазин магнифлекс Москва',
			'text' => '
				<style>
					.hnb_mmoskov{
						display:block;
					}
				</style>
			
			
			
			
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">

		<h3 class="hnb_mytitlepag">Полежать на всех матрасах</h3>

		<h4>Центральный офис - салон компании Магнифлекс в Москве</h4>
 <a href="/img/ofice_map_.jpg" style="display: block; float: left;" class="boxer relgallery"><img alt="Центральный офис Magniflex в Москве" src="/img/ofice_map_.jpg" style="width: 180px;"></a>
		<p style="width: 400px; float: right;">
			В центральном офисе (салоне) Magniflex всегда представлены образцы всех видов ортопедических матрасов, ортопедических подушек и оснований.<br />
			<br />
			 Центральный офис (салон) находится по адресу:<br />
			 г. Москва, Сумской проезд, дом 8, корпус 3.<br />
			 Часы работы: будни с 10:00 до 18:00, суббота и воскресение - выходные дни.<br />
			<br />
			 Служба поддержки - ежедневно, без выходных:<br />
			 +7 (495) 316 89 88; +7 (495) 507 22 65; +7 (495) 792-16-93<br /><br />
E-mail: info@magniflex.ru<br />

		</p>
		<h4 style="clear: both; padding-top: 40px;">Шоу-рум - флагманский магазин Магнифлекс</h4>
 <a href="/img/magniflex-showroom.jpg" style="display: block; float: left;" class="boxer relgallery"><img alt="Шоу-рум - флагманский магазин Магнифлес в Москве" src="/img/magniflex-showroom.jpg" style="width: 180px;"></a>
		<p style="width: 400px; float: right;">
			В шоу-руме Вы всегда можете протестировать всю линейку продукции компании Magniflex.<br />
			<br />
			 Шоу-рум "Магнифлекс" находится по адресу:<br />
			 г. Москва, м. Полянка, Бродников переулок, д.10, к.2.<br />
			<br />
			 Часы работы:<br /><br />

Понедельник - Четверг: 9:30 - 20:00<br />
Пятница: 9:30 - 19:00<br />
Суббота: 11:00 - 19:00<br />
Воскресенье: выходной.<br /><br />
Телефоны: +7 (495) 792-16-93; +7 (495) 989 11 32; +7 (495) 771 01 10<br />
		</p>


		
	</div>
</div><div style="clear: both;"></div>
			'
		),
		
		
				array(
			'address' => 'predstavleniya-kolekcii',
			'parent_address' => 'o-magniflex/moscow',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Представлена часть коллекции',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Адреса магазинов Магнифлекс в Москве, в которых можно купить ортопедические матрасы и подушки Magniflex | Магнифлекс',
			'description' => 'Адреса магазинов, ассортимен, график работы в Москве, в которых можно купить ортопедические матрасы и подушки Магнифлекс',
			'keywords' => 'магазин magniflex москва',
			'text' => '
			
			
			
			
			
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">

		<h3 class="hnb_mytitlepag">МАГАЗИНЫ В МОСКВЕ - ВЫСТАВЛЕНА ЧАСТЬ КОЛЛЕКЦИИ</h3>

		<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
			<script src="/template/js/placemark.js" type="text/javascript"></script>
			<style>
				#map {
					width: 714px; height: 460px; padding: 0; margin: 0;
				}
				.hnb_mmoskov{
					display:block;
				}
			</style>


 <div id="map"></div>
<!--<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=fxc_7-IbtPffFicX0e3jBM-yCtbsk6ZL&width=714&height=450"></script>-->

 <br /><br />
		<table class="hnb_mytable12" cellspacing="0">
		<tbody>
		<tr class="hnb_mytablegraytop">
			<th>
				<div>
					Метро
				</div>
			</th>
			<th>
				<div>
					Адрес
				</div>
			</th>
		</tr>


		<tr>
			<td>
Чертановская
			</td>
			<td>
Сумской проезд, дом 8, корпус 3.<br />
+7 (495) 316 89 88; +7 (495) 507 22 65; +7 (495) 792-16-93<br />
				Режим работы:  будни с 10:00 до 18:00, суббота и воскресение - выходные
			</td>
		</tr>




		<tr class="hnb_mytablegray">
			<td>
Полянка
			</td>
			<td>
				Бродников переулок, д.10, к.2.<br />
+7 (495) 792-16-93; +7 (495) 989 11 32; +7 (495) 771 01 10<br />
Понедельник - Четверг: 9:30 - 20:00; Пятница: 9:30 - 19:00; Суббота: 11:00 - 19:00; Воскресенье: выходной.

			</td>
		</tr>


		<tr>
			<td>
				Университет,<br /> Новые Черемушки
			</td>
			<td>
				Ленинский пр-кт 89/2, м-н Инвирд цокольный этаж<br />
				(499) 132-03-44, (499)-132-15-38<br />
				 Режим работы: будни с 10-00 до 20-00; выходные с 11-00 до 19-00
			</td>
		</tr>
		<tr class="hnb_mytablegray">
			<td>
				Медведково,<br /> Бабушкинская
			</td>
			<td>
				ул. Полярная д. 21; универмаг Медведково, 2-ой этаж <br />
				(499) 477-54-76, (499) 477-40-40<br />
				Режим работы: с 10-00 до 20-00
			</td>
		</tr>
		<tr>
			<td>
				Шаболовская
			</td>
			<td>
				ул. Шаболовская, д. 29 "Мебель Италии"<br />
				(495) 795-27-21 <br />
				Режим работы: с 10-00 до 20-00
			</td>
		</tr>
		<tr class="hnb_mytablegray">
			<td>
				Электрозаводская
			</td>
			<td>
				ул. Большая Семеновская д.10 "ТЦ Мебель России", 1 этаж <br />
				(495) 727-05-90 <br />
				Режим работы: с 10-00 до 19-30
			</td>
		</tr>
		<tr>
			<td>
				Шоссе Энтузиастов,<br /> Перово
			</td>
			<td>
 Шоссе Энтузиастов д.54 ( "Мебель России"), 4 этаж<br />
				(495) 589-01-51<br />
				Режим работы: будни с 11-00 до 19-00; выходные с 11-00 до 18-00
			</td>
		</tr>
		<tr class="hnb_mytablegray">
			<td>
Новокосино
			</td>
			<td>
ул. Новокосинская д.23, м-н "Мебель".<br />
8-495-701-22-60<br />
				Режим работы:  будни с 10:00 до 20:00; суббота с 11:00 до 18:00; воскресение с 11:00 до 16:00
			</td>
		</tr>
		<tr>
			<td>
Юго-Западная
			</td>
			<td>Мебель Strong<br />
				51 км МКАД, ТВЦ "ЭлитСтройМатериалы", 2 этаж, павильоны N-9, М-21, М-22, М-23.<br />
        Адрес для навигатора: Одинцовский район, пос. Заречье, ул.Торговая стр. 2.<br />
Тел.: +7(499) 408-97-79, 7(926) 363-21-60, +7(926) 826-54-97 <br />
			</td>
		</tr>
		
		<tr class="hnb_mytablegray">
			<td>
Электрозаводская
			</td>
			<td>
ТЦ "Мебель России"<br />
ул. Большая Семёновская, д. 10<br />
центральный вход, 1 этаж, павильон С1-8<br />
Телефоны для справок: 8 (495) 510-95-46; 8 (495) 727-05-90
			</td>
		</tr>
		
		<tr>
			<td>
Шаболовская,<br /> Ленинский проспект
			</td>
			<td>"Дом Мебели"<br />
ул. Шаболовка, д. 31, 1 этаж<br />
Телефоны для справок: 8 (499) 236-84-28; 8 (499) 237-09-30
			</td>
		</tr>
		
		<tr class="hnb_mytablegray">
			<td>
Пражская,<br /> Южная
			</td>
			<td>
Салон "Итальянская Коллекция"<br />
МТК "Армада"<br />
ул. Кировоградская, д 11, стр. 1 
<br />4 этаж<br />
Телефоны для справок: 8 (495) 781-11-11 доб. 24-14; 8 (925) 517-17-33
			</td>
		</tr>
		
		<tr>
			<td>
Бульвар Рокосовского
			</td>
			<td>
			Салон "Мебель Румынии"<br />
Бульвар Маршала Рокосовского д. 6 <br />
2 этаж<br />
Телефон для справок: 8 (499) 169-02-41
			</td>
		</tr>
		
		<tr class="hnb_mytablegray">
			<td>
Шоссе Энтузиастов
			</td>
			<td>
Салон "Мебель Румынии"<br />
Шоссе Энтузиастов, дом 54 <br />
"Мебель России", 4 этаж<br />
Телефоны для справок: 8 (495) 589-01-51; 8 (495) 510-85-09
			</td>
		</tr>
		
		<tr>
			<td>
Бульвар Рокосовского
			</td>
			<td>
			Салон "Мебель Румынии"<br />
Бульвар Маршала Рокосовского д. 6 <br />
2 этаж<br />
Телефон для справок: 8 (499) 169-02-41
			</td>
		</tr>
		
		<tr class="hnb_mytablegray">
			<td>
Волгоградский проспект
			</td>
			<td>
Салон "Шатура Мебель"<br />
ул. Скотопрогонная, дом 35/2, стр. 8<br />
Телефон для справок: 8 (495) 671-58-48
			</td>
		</tr>
		
		<tr>
			<td>
Митино
			</td>
			<td>
Салон "Мебель Италии"<br />
ул. Митинская, дом 19, 1 этаж.<br />
Телефон для справок: 8 (495) 752-69-14
			</td>
		</tr>
		
				<tr class="hnb_mytablegray">
			<td>
Жулебино
			</td>
			<td>
Салон "Мебель Италии"<br />
ул. Привольная, дом 65/32<br />
Телефон для справок: 8 (495) 704-47-01
			</td>
		</tr>
		
		<tr>
			<td>
Улица Скобелевская
			</td>
			<td>
Магазин "Мебель"<br />
Бутово, Бульвар Адмирала Ушакова, дом 2, 1 этаж<br />
Телефон для справок: 8 (495) 710-93-54
			</td>
		</tr>
		
						<tr class="hnb_mytablegray">
			<td>
Полежаевская
			</td>
			<td>
Салон Мебели "Дольче Вита"<br />
ул. Зорге, дом 1, стр. 2<br />
магазин "Дом для Дома", 2 этаж<br />
Телефон для справок: 8 (495) 969-45-19
			</td>
		</tr>
		
		<tr>
			<td>
Бабушкинская
			</td>
			<td>
Магазин "Матрасы и Аксессуары"<br />
Анадырский проезд, дом 17/1, к. 1, помещение 1<br />
Телефон для справок: 8 (499) 184-38-81
			</td>
		</tr>
		
					<tr class="hnb_mytablegray">
			<td>
Автозаводская
			</td>
			<td>
Салон "Алло! Матрас!"<br />
ул. Ленинская Слобода, дом 26<br />
Центр "Омега-2", 4 этаж, офис 451<br />
Телефон для справок: 8 (495) 940-54-20
			</td>
		</tr>
		
		<tr>
			<td>
Отрадное
			</td>
			<td>
Салон "Мебель Румынии"<br />
ул. Декабристов, дом 20, к. 2, 1 этаж<br />
Телефон для справок: 8 (495) 907-10-86
			</td>
		</tr>
		
		<tr class="hnb_mytablegray">
			<td>
Тульская
			</td>
			<td>
Салон Мебели "Берлускони - Италия"<br />
5-ый Донской проезд,дом 23<br />
ТД "Семь", 1 этаж<br />
Телефон для справок: 8 (495) 795-71-50
			</td>
		</tr>
		
		<tr>
			<td>
ВДНХ
			</td>
			<td>
Салон Мебели
Звездный бульвар, дом 40, 1 этаж<br />
Телефон для справок: 8 (495) 616-58-10<br />
			</td>
		</tr>
		
				<tr class="hnb_mytablegray">
			<td>
Тульская
			</td>
			<td>
Ортопедический салон "Пассивная Терапия"<br />
ул. Павловская, владение 7, 1 этаж<br />
Телефон для справок: 8 (495) 648-61-15
			</td>
		</tr>
		
		
				<tr>
			<td>
Перово
			</td>
			<td>
Малон Мебели "Адель"<br />
Зеленый проспект, дом 3А <br />
ТЦ "Ваш Дом", 3 этаж<br />
Телефон для справок: 8 (966) 121-29-16
			</td>
		</tr>
		
						<tr class="hnb_mytablegray">
			<td>
Братиславская
			</td>
			<td>
МАГАЗИН "МАТРАС-НА-ЗАКАЗ" (ООО "ЦИТРУС")<br />
 ул. Люблинская 151, Деловой центр "Марьино"<br />
телефон : 8-(495)-640-62-35, 8-(495)-220-44-95, местный телефон 193<br />
Часы работы офиса с 11 до 19 часов. Выходные дни - суббота и воскресенье.
			</td>
		</tr>
		
		<tr>
			<td>
м. Октябрьская
			</td>
			<td>
ООО «Ортик»<br />
ул. Большая Якиманка д.38(а).<br />
Пн.-Пт.: с 10:00 до 21:00;<br />
Суббота: с 10:00 до 19:00;<br />
Воскресенье: выходной.<br />
Многоканальный телефон: +7 (495) 646-75-66<br />
			</td>
		</tr>
		
		<tr class="hnb_mytablegray">
			<td>
Савеловская/Менделеевская
			</td>
			<td>
<img style="padding-left:0;" src="/img/ok_kravati_logo.jpeg" /><br />
Магазин "Матрас ОК Кровати" <br />
ул. Новослободская, дом 67/69<br />
сайт: www.matras-ok.ru<br />
телефон : 8 (499) 973-16-65, 8 (499) 973-17-19<br />
часы работы: Пн-Сб: с 10:00 - 20:00;  Вс: с 11:00 до 17:00.
			</td>
		</tr>
		
		<tr>
			<td>
Марьина Роща
			</td>
			<td>
ТЦ Райкин плаза, магазин №16 «Домашний очаг» Шереметьевская д.6 корп.1, -1 этаж<br />
Режим работы: 10:00–22:00 ежедневно<br />
E-mail:rk-plaza@mirkovrov.ru<br />
Телефон: 8 (495) 542 44 26<br />
			</td>
		</tr>
		
		
		
		
		
		</tbody>
		</table>
		<br /><br />


		
	</div>
</div><div style="clear: both;"></div>
			'
		),
		
		
		array(
			'address' => 'russia',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Россия',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Магазины Magniflex в России | Магнифлекс',
			'description' => 'Адреса магазинов, ассортимен, график работы в России, в которых можно купить ортопедические матрасы и подушки Магнифлекс',
			'keywords' => 'magniflex магазин, магнифлекс магазин',
			'text' => '
			<style>
				#map {
					width: 550px; height: 370px; padding: 10px;
				}
			</style>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">
		<h2 class="hnb_mytitlepag">Magniflex в России</h2>
		<div id="map"></div>
 <!--<img alt="Magniflex в России, карта дилеров и представителей" src="/img/magniflex-in-russia.jpg">-->
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			 <span>Официальные дилеры и представители:</span> 
			 <span>

<select method="post" class="hnb_changtaver" name="items" onchange="top.location=this.value">
                       <option value="0">Выберите Ваш город
                        </option><option value="/o-magniflex/moscow/">Москва
						</option><option value="/o-magniflex/russia/moskovskaya-oblast/">Московская область 
                       
                        </option><option value="/o-magniflex/russia/sankt-peterburg">Санкт-Петербург
						</option><option value="/o-magniflex/russia/abakan-khakasiya">Абакан, респ. Хакасия
						</option><option value="/o-magniflex/russia/almetevsk">Альметьевск
						</option><option value="/o-magniflex/russia/aleksin-tulskaya-obl">Алексин, Тульская обл.
						</option><option value="/o-magniflex/russia/arkhangelsk">Архангельск
						</option><option value="/o-magniflex/russia/belgorod">Белгород
						</option><option value="/o-magniflex/russia/bratsk">Братск
						</option><option value="/o-magniflex/russia/balakovo-saratovskaya-obl">Балаково, Саратовская обл
                        </option><option value="/o-magniflex/russia/vladikavkaz">Владикавказ
                        </option><option value="/o-magniflex/russia/vladimir">Владимир
						</option><option value="/o-magniflex/russia/volgograd">Волгоград
						</option><option value="/o-magniflex/russia/voronezh">Воронеж
						</option><option value="/o-magniflex/russia/groznyy">Грозный
						</option><option value="/o-magniflex/russia/ekaterinburg">Екатеринбург
                        </option><option value="/o-magniflex/russia/izhevsk">Ижевск
                        </option><option value="/o-magniflex/russia/kirov">Киров
                        </option><option value="/o-magniflex/russia/kabardino-balkariya">Кабардино-Балкария
						</option><option value="/o-magniflex/russia/krasnodar">Краснодар
						</option><option value="/o-magniflex/russia/krasnoyarsk">Красноярск
						</option><option value="/o-magniflex/russia/krim">Крым
						</option><option value="/o-magniflex/russia/lipetsk">Липецк
						</option><option value="/o-magniflex/russia/nizhniy-novgorod">Нижний Новгород
						</option><option value="/o-magniflex/russia/novosibirsk">Новосибирск

                        </option><option value="/o-magniflex/russia/nizhniy-tagil">Нижний Тагил
                        </option><option value="/o-magniflex/russia/orenburg">Оренбург
						</option><option value="/o-magniflex/russia/perm">Пермь
						</option><option value="/o-magniflex/russia/penza">Пенза
						</option><option value="/o-magniflex/russia/rostov">Ростов
						</option><option value="/o-magniflex/russia/sochi">Сочи

						</option><option value="/o-magniflex/russia/staryy-oskol">Старый Оскол
						</option><option value="/o-magniflex/russia/syktyvkar">Сыктывкар
						</option><option value="/o-magniflex/russia/serpukhov">Серпухов
                        </option><option value="/o-magniflex/russia/tambov">Тамбов
                        </option><option value="/o-magniflex/russia/tver">Тверь
                        </option><option value="/o-magniflex/russia/tomsk">Томск

						</option><option value="/o-magniflex/russia/tula">Тула
						</option><option value="/o-magniflex/russia/tyumen">Тюмень

						</option><option value="/o-magniflex/russia/ulyanovsk">Ульяновск

                        </option><option value="/o-magniflex/russia/ufa">Уфа
                        </option><option value="/o-magniflex/russia/khabarovsk">Хабаровск
                        </option><option value="/o-magniflex/russia/chelyabinsk">Челябинск
						</option><option value="/o-magniflex/russia/cherepovic">Череповец

						</option><option value="/o-magniflex/russia/yuzhno-sakhalinsk">Южно-Сахалинск

						</option><option value="/o-magniflex/russia/yaroslavl">Ярославль
						
				</option>
</select> 
				
						
			 </span><br />
 <br />
		</p>
		<div class="hnb_altawer">
			<div class="hnb_altawerlft">
				<div>
					<span>А</span>
					<a href="/o-magniflex/russia/abakan-khakasiya">Абакан</a><br />
					<a href="/o-magniflex/russia/aleksin-tulskaya-obl">Алексин</a><br />
					<a href="/o-magniflex/russia/almetevsk">Альметьевск</a><br />
					<a href="/o-magniflex/russia/arkhangelsk">Архангельск</a><br />
				</div>
				
				<div>
					<span>Б</span>
					<a href="/o-magniflex/russia/balakovo-saratovskaya-obl">Балаково</a><br />
					<a href="/o-magniflex/russia/belgorod">Белгород</a><br />
					<a href="/o-magniflex/russia/bratsk">Братск</a><br />
					
				</div>
			
			
				<div>
					<span>В</span>
					<a href="/o-magniflex/russia/vladikavkaz">Владикавказ</a><br />
					<a href="/o-magniflex/russia/vladimir">Владимир</a><br />
					<a href="/o-magniflex/russia/volgograd">Волгоград</a><br />
					<a href="/o-magniflex/russia/voronezh">Воронеж</a><br />
				</div>
			
				<div>
					<span>Г</span>
					<a href="/o-magniflex/russia/groznyy">Грозный</a><br />
					
				</div>
			
				<div>
					<span>Е</span>
					<a href="/o-magniflex/russia/ekaterinburg">Екатеринбруг</a><br />
					
				</div>
				
				<div>
					<span>И</span>
					<a href="/o-magniflex/russia/izhevsk">Ижевск</a><br />
					
				</div>
				
				<div>
					<span>К</span>
					<a href="/o-magniflex/russia/kabardino-balkariya">Кабардино-Балкария</a><br />
					<a href="/o-magniflex/russia/kirov">Киров</a><br />
					<a href="/o-magniflex/russia/krasnodar">Краснодар</a><br />
					<a href="/o-magniflex/russia/krasnoyarsk">Красноярск</a><br />
					<a href="/o-magniflex/russia/krim">Крым</a><br />
					<a href="/o-magniflex/russia/kemerova">Кемерово</a><br />
				</div>
				
				<div>
					<span>Л</span>
					<a href="/o-magniflex/russia/lipetsk">Липецк</a><br />
				</div>
			
			
				<div>
					<span>Н</span>
					<a href="/o-magniflex/russia/nizhniy-novgorod">Нижний Новгород</a><br />
					<a href="/o-magniflex/russia/nizhniy-tagil">Нижний Тагил</a><br />
					<a href="/o-magniflex/russia/novosibirsk">Новосибирск</a><br />
					
				</div>
			
				<div>
					<span>М</span>
					<a href="/o-magniflex/moscow/">Москва</a><br />
					<a href="/o-magniflex/russia/moskovskaya-oblast/">Московская область</a><br />
					
					
				</div>
			
				
			
			
			</div>
			<div class="hnb_altawerrig">
				<div>
					<span>О</span>
					<a href="/o-magniflex/russia/orenburg">Оренбург</a><br />
					
				</div>
				<div>
					<span>П</span>
					<a href="/o-magniflex/russia/perm">Пермь</a><br />
					<a href="/o-magniflex/russia/penza">Пенза</a><br />
					
				</div>
				
				<div>
					<span>Р</span>
					<a href="/o-magniflex/russia/rostov">Ростов</a><br />
					
				</div>
				
				<div>
					<span>С</span>
					<a href="/o-magniflex/russia/sankt-peterburg">Санкт-Петербург</a><br />
					<a href="/o-magniflex/russia/balakovo-saratovskaya-obl">Саратов</a><br />
					<a href="/o-magniflex/russia/balakovo-saratovskaya-obl">Саратовская обл.</a><br />
					<a href="/o-magniflex/russia/serpukhov">Серпухов</a><br />
					<a href="/o-magniflex/russia/sochi">Сочи</a><br />

					<a href="/o-magniflex/russia/staryy-oskol">Старый Оскол</a><br />
					<a href="/o-magniflex/russia/syktyvkar">Сыктывкар</a><br />
				</div>
				
				<div>
					<span>Т</span>
					<a href="/o-magniflex/russia/tambov">Тамбов</a><br />
					<a href="/o-magniflex/russia/tver">Тверь</a><br />
					<a href="/o-magniflex/russia/tomsk">Томск</a><br />
					<a href="/o-magniflex/russia/tula">Тула</a><br />
					<a href="/o-magniflex/russia/aleksin-tulskaya-obl">Тульская обл.</a><br />
					<a href="/o-magniflex/russia/tyumen">Тюмень</a><br />
				</div>
				
				<div>
					<span>У</span>
					<a href="/o-magniflex/russia/ulyanovsk">Ульяновск</a><br />
					<a href="/o-magniflex/russia/ufa">Уфа</a><br />
					
				</div>
				
				<div>
					<span>Х</span>
					<a href="/o-magniflex/russia/khabarovsk">Хабаровск</a><br />
					
				</div>
				
				<div>
					<span>Ч</span>
					<a href="/o-magniflex/russia/chelyabinsk">Челябинск</a><br />
					<a href="/o-magniflex/russia/cherepovic">Череповец</a><br />
					
				</div>
				
				<div>
					<span>Ю</span>
					<a href="/o-magniflex/russia/yuzhno-sakhalinsk">Южно-Сахалинск</a><br />
				
				</div>
				
				<div>
					<span>Я</span>
					<a href="/o-magniflex/russia/yaroslavl">Ярославль</a><br />
					
				</div>
			
			</div>
			
		</div>
		
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'magniflex-mattresses-world',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Другие страны',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Доставка продукции Magniflex Магнифлекс в страны ближнего и дальнего зарубежья | Магнифлекс',
			'description' => 'Продукция Магнифлекс в зарубежных странах',
			'keywords' => 'magniflex',
			'text' => '
			<style>
			.hnb_mworld{
				display:block;
			}
			</style>
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">
		<h2 class="hnb_mytitlepag">Доставка продукции Magniflex в другие страны</h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			В Вашей стране еще нет представительства компании Magniflex? Вы можете обратится к нам по поводу приобретения ортопедических матрасов и подушек. Наши сотрудники &nbsp;подберут удобный&nbsp;способ доставки, проконсультируют и помогут в любых вопросах. Нами накоплен большой опыт по&nbsp;доставке продукции как в соседние страны, так и в страны дальнего зарубежья.
		</p>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			ПО ВСЕМ ВОПРОСАМ ЗВОНИТЕ НАМ ПО ТЕЛЕФОНАМ:<br />
 +7 (495) 507 22 65 <br />
 +7 (495) 316 89 88
		</p>
<br /><br />




	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		/* адреса магазинов в России */
		array(
			'address' => 'abakan-khakasiya',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Абакан Хакасия',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Абакан, респ. Хакасия | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Абакан, респ. Хакасия',
			'keywords' => 'матрасы в магнифлекс в Абакан, респ. Хакасия, magniflex Абакан, респ. Хакасия, магнифлекс Абакан, респ. Хакасия',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Magniflex в Абакан, респ. Хакасия</h2>
<div class="hnb_mytitlepagcity">
В Абакан, респ. Хакасия продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (913) 549-71-41

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'aleksin-tulskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Алексин, Тульская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Алексин, Тульская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Алексин, Тульская обл',
			'keywords' => 'матрасы в магнифлекс в Алексин, Тульская обл, magniflex Алексин, Тульская обл, магнифлекс Алексин, Тульская обл.',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Алексине, Тульская обл</h2>
<div class="hnb_mytitlepagcity">
В Алексине, Тульская обл. продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>Салон «Мадам Подушкина»</strong><br />
ИП "Бобнева"
<br />
<br />
<strong>Адрес:</strong> г. Алексин, ул. Тульская, дом 136Д, ТЦ «Слобода», бутик 9.
<br /><br />
<strong>Режим работы:</strong><br />
9:00 - 17:00

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (905) 111-11-07

<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=paub91xxpp8P1fkPGleOnpwBEhHVC2Xd&width=600&height=450"></script>
</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'almetevsk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Альметьевск',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Альметьевске | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Альметьевск',
			'keywords' => 'матрасы в магнифлекс в Альметьевск, magniflex Альметьевск, магнифлекс Альметьевск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Альметьевске</h2>
<div class="hnb_mytitlepagcity">
В Альметьевске продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ИП Кузмичева Е.Л.</strong><br />

<br />
<strong>Телефоны для справок:</strong><br />
8 (919) 636-17-41

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'arkhangelsk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Архангельск',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Архангельске | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Архангельск',
			'keywords' => 'матрасы в магнифлекс в Архангельск, magniflex Архангельск, магнифлекс Архангельск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Архангельске</h2>
<div class="hnb_mytitlepagcity">
В Архангельске продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>Магазин "Пальметто"</strong><br /><br />

<strong>Телефоны для справок:</strong><br />
8 (818) 221-54-21

<br /><br />
Есть образцы всех матрасов




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'balakovo-saratovskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Балаково,Саратовская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Балаково,Саратовская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Балаково,Саратовская обл',
			'keywords' => 'матрасы в магнифлекс в Балаково,Саратовская обл, magniflex Балаково,Саратовская обл, магнифлекс Балаково,Саратовская обл',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Балаково,Саратовская обл</h2>
<div class="hnb_mytitlepagcity">
В Балаково, Саратовская обл. продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ТЦ "Грин Хаус"</strong><br />
<br />
<strong>Адрес:</strong> г. Балаково, Саратовская обл, ул. Трнавская дом 24.

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (8453) 68-32-90, 8 (927) 225-32-90.
<br />
<br />
<strong>ТЦ "Проспект"</strong><br />
<br />
<strong>Адрес:</strong> г. Балаково, Саратовская обл, ул. Факел Социализма дом 24.

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (8453) 68-24-36, 8 (927) 225-24-36.



<br /><br />
Ассортимент: ортопедические матрасы и подушки<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=BVx_s4bdBbbZeO3UKW3M8mBE_IxhGFfl&width=600&height=450"></script>



</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'belgorod',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Белгород',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Белгороде | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Белгород',
			'keywords' => 'матрасы в магнифлекс в Белгороде, magniflex Белгород, магнифлекс Белгород',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Белгороде</h2>
<div class="hnb_mytitlepagcity">
В Белгороде продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=cAzaFx6FZJfK2XduoiWozAjyBXQnJpyV&width=600&height=450"></script>
<br />
<br />
<strong>Салон Мебели  "Вилла Деко"</strong>
<br /><br />
<strong>Адрес:</strong> ул. Белгородского Полка, дом 62. 

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (4722) 28-90-82 
<br />
<hr class="hnb_myhrled" />
<br />
<br />
<strong>Дизайн-Студия "Мебель Доминика"</strong><br />
<br />

<strong>Адрес:</strong> ул. Князя Трубецкого, дом 1. 
<br /><br />

<strong>Телефон для справок:</strong><br />
8 (4722) 33-91-85

<br /><br />
<hr class="hnb_myhrled" />



<br />
<br />
<strong>Салон Мебели "Вилла Деко"</strong><br />
<br />

<strong>Адрес:</strong> ул. Щорса, дом 64А. 
<br /><br />

<strong>Телефон для справок:</strong><br />
8 (4722) 28-90-82

<br /><br />
<hr class="hnb_myhrled" />
<br />
<br />
<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />



</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'bratsk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Братск',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Магазины Магнифлекс в городе Братск | Магнифлекс',
			'description' => 'Матрасы и подушки Magniflex в Братске',
			'keywords' => 'матрасы в магнифлекс в Братске, magniflex Братск, магнифлекс Братск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Братске</h2>
<div class="hnb_mytitlepagcity">
В Братске продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />


<strong>Телефоны для справок:</strong><br />
8 (3953) 36-70-76

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'chelyabinsk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Челябинск',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Челябинске | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Челябинск',
			'keywords' => 'матрасы в магнифлекс в Челябинск, magniflex Челябинск, магнифлекс Челябинск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Челябинске</h2>
<div class="hnb_mytitlepagcity">
В Челябинске продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ООО «СТМ»</strong><br />
<br />

<strong>Адрес:</strong> г. Челябинск, ул. Бр. Кашириных, дом 102-83.
<br /><br />

<strong>Телефоны для справок:</strong><br />
8 (351) 270-82-18
<br />
<br />
<br />
<strong>ИП "Ерохин А.В."</strong><br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (351) 270-50-72, 252-42-74.

<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=VV0-2bUP17jwjQL1J30Sb6e3bssQxucZ&width=600&height=450"></script>



</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'cherepovic',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Череповец',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Череповец | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Череповец',
			'keywords' => 'матрасы в магнифлекс в Череповец, magniflex Череповец, магнифлекс Череповец',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Череповец</h2>
<div class="hnb_mytitlepagcity">
В Череповец продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>салон "ЭГО Интерьер"</strong><br />
<br />

<strong>Адрес:</strong> г. Череповец,  Советский пр. дом 16 (162600, Вологодская обл.)
<br /><br />

<strong>Телефоны для справок:</strong><br />
8 (8202) 20-22-22 
<br />
<br />
<br />
<strong>ИП Хлынов</strong><br />


<br /><br />
Ассортимент: ортопедические матрасы и подушки<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=B-nB7YJqFS_osdEFBd4vV-EBLfHpu3ly&width=600&height=450"></script>



</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'ekaterinburg',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Екатеринбург',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Екатеринбурге | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Екатеринбург',
			'keywords' => 'матрасы в магнифлекс в Екатеринбург, magniflex Екатеринбург, магнифлекс Екатеринбург',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Екатеринбурге</h2>
<div class="hnb_mytitlepagcity">
В Екатеринбурге продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>Демонстрационный салон-магазин Magniflex</strong><br />
<br />
<strong>Адрес:</strong> г. Екатеринбург, ул. Ленина, дом 56.<br /><br /><b>Часы работы:</b><br /><span style="color: #555555;">понедельник-пятница с 10.00 до 20.00</span><br style="color: #555555;"><span style="color: #555555;">суббота-воскресение с 11.00 до 19.00</span>&nbsp; &nbsp;<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (343) 346-93-10, моб: 8 (912) 24-58-898. 

<br /><br />
Ассортимент: ортопедические матрасы и подушки<br />&nbsp; &nbsp; &nbsp;&nbsp;<br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=0jX1D1eIXGJlzVl5SV61iQbwXstPNFeQ&width=600&height=450"></script>
<br />&nbsp; &nbsp; &nbsp;&nbsp;<br /><span style="color: #555555;">В салоне представлены все модели матрасов, что удобно для полноценного тестирования. Применяется единая ценовая политика - &nbsp;установлены единые цены, как в московском офисе! Вам не нужно дополнительно&nbsp;оплачивать доставку до Екатеринбурга. Сотрудники магазина с удовольствием&nbsp;помогут Вам&nbsp;погрузить покупки в&nbsp;машину или организовать доставку до двери. Действует система скидок по дисконтной карте. Дарим подарки. Приходите!&nbsp;</span><br /><br />
</div>
<br />
<a href="/img/Mf_ekb.jpg" class="boxer" title=""><img style="width: 100%;" src="/img/Mf_ekb_small.jpg" alt="" /></a>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'groznyy',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Грозный',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Грозном | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Грозный',
			'keywords' => 'матрасы в магнифлекс в Грозный, magniflex Грозный, магнифлекс Грозный',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Грозном</h2>
<div class="hnb_mytitlepagcity">
В Грозном продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ИП Чалаева</strong><br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (963) 584-51-16

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'izhevsk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Ижевск',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Ижевске | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Ижевск',
			'keywords' => 'матрасы в магнифлекс в Ижевск, magniflex Ижевск, магнифлекс Ижевск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Ижевске</h2>
<div class="hnb_mytitlepagcity">
В Ижевске продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ООО «Крокус Мебель» </strong><br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (3412) 40-55-55, 45-73-22.

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'kabardino-balkariya',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Кабардино-Балкария',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Кабардино-Балкария | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Кабардино-Балкария',
			'keywords' => 'матрасы в магнифлекс в Кабардино-Балкария, magniflex Кабардино-Балкария, магнифлекс Кабардино-Балкария',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Кабардино-Балкарии</h2>
<div class="hnb_mytitlepagcity">
В Кабардино-Балкарии продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ИП "Алишанов Сабир" </strong><br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (88662) 40-42-29, 40-98-44, 8 (928) 707-707-3 Анжела.

<br /><br />
Ассортимент: ортопедические матрасы и подушки

<br />
<br />
<strong>Салоны «ОРТЕСС» </strong><br />
<br />
У всех салонов одинаковый график работы: Ежедневно 9:00 - 19:00 (без перерывов) Спасибо!
<br />
<br />
г. Нальчик, ул. Головко, дом 12а, тел:
8 (88662) 42-13-74

<br /><br />
г. Нальчик, ул. Ногмова, дом 80, тел: 8 (88662) 72-22-12.

<br />
<br />


г. Нальчик, ул. Пачева, дом 50, тел: 8 (928) 700-85-98.

<br /><br />
г. Нальчик, ул. Богдана Хмельницкого, дом 41, тел: 8 (928) 720-58-41.

<br />
<br />
г. Нальчик, Затишье, район травмпункта, тел: 8 (938) 076-65-34.<br />
<br />

г. Прохладный, ул. Ленина, дом 72, тел: 8 (928) 915-99-48.

<br /><br />
г. Терек, ул. Ленина, дом 37, тел: 8 (938) 915-71-22. 
<br />
<br />
г. Баксан, ул. Ленина, дом 5, тел: 8 (929) 885-12-41.<br />
<br />

г. Нарткала, ул. Шекихачева, дом 3, тел: 8 (928) 694-55-21.
<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=sUwzpyUFgWt5DirtYpoDWmUaJlq11bWz&width=600&height=450"></script>




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'khabarovsk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Хабаровск',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Хабаровске | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Хабаровск',
			'keywords' => 'матрасы в магнифлекс в Хабаровск, magniflex Хабаровск, магнифлекс Хабаровск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Хабаровске</h2>
<div class="hnb_mytitlepagcity">
В Хабаровске продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ООО «Астрид»</strong><br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (4212) 57-79-12

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'kirov',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Киров',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Киров | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Киров',
			'keywords' => 'матрасы в магнифлекс в Киров, magniflex Киров, магнифлекс Киров',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Кирове</h2>
<div class="hnb_mytitlepagcity">
В Кирове продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>Мебельный салон "Алькасар"</strong><br />
ООО "Идальго" 
<br />
<br />
<strong>Адрес:</strong> ул. Герцена, дом 9.

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (8332) 64-72-13, 64-15-94, 8 (963) 000-51-51, сайт: www.alkasar43.ru

<br /><br />
Ассортимент: ортопедические матрасы и подушки<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=tZSNys-fTPRK_9BA5Z98MP6un-XToodE&width=600&height=450"></script>



</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'krasnodar',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Краснодар',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Краснодаре | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Краснодар',
			'keywords' => 'матрасы в магнифлекс в Краснодар, magniflex Краснодар, магнифлекс Краснодар',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Краснодаре</h2>
<div class="hnb_mytitlepagcity">
В Краснодаре продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (989) 829-00-29,  www.gudson.ru 
<br />
<hr class="hnb_myhrled" />
<br />
<br />
<strong>Салон "Матрасы и Аксессуары"</strong><br />
<br />

<strong>Адрес:</strong> Краснодарский край, поселок Лазаревский, ул. Калараш, дом 145.
<br /><br />

<strong>Телефон для справок:</strong><br />
8 (8622) 36-24-42; 8 (918) 916-56-75.

<br /><br />
<hr class="hnb_myhrled" />
<br />
<br />
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=4M50HfozNp578v2H-vWeIX0H15tdIYjA&width=600&height=450"></script>
<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'krasnoyarsk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Красноярск',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Красноярске | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Красноярск',
			'keywords' => 'матрасы в магнифлекс в Красноярск, magniflex  расноярск, магнифлекс Красноярск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Красноярске</h2>
<div class="hnb_mytitlepagcity">
В Красноярске продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Студия мебели "Матрасы и Кровати"</strong><br />
<br />
<strong>Адрес:</strong> г. Красноярск,  ул. Красной Звезды, дом 1б.
<br /><br />
<strong>Режим работы:</strong><br />
Ежедневно с 9 до 21 часов без обеда и выходных.

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (391) 297-28-11, 8 (923) 334-05-55.

<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=ZOZMdFQf5mFkDOdeeSNZBuMC-NYjUZOT&width=600&height=450"></script>


</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		
		array(
			'address' => 'krim',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Крым',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Крыму | Магнифлекс',
			'description' => 'Магазины Магнифлекс в Крыму',
			'keywords' => 'матрасы в магнифлекс крым',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex. Крым</h2>
<div class="hnb_mytitlepagcity">


<strong>Салон мебели «Italine»</strong><br />
<img style="padding-left: 0;" src="/img/magniflex_world/logoitkr.png" alt="" />
<br />
<strong>Адрес:</strong> Республика Крым, Симферополь, ул. Кечкеметская, дом 13.<br />
<strong>Телефоны для справок:</strong><br /> 8 (3652) 70-60-36, 8 (978) 787-73-45, 8 (978) 916-65-85.<br />
<strong>Веб-сайт:</strong> www.italine-crimea.ru
<br /><br />
<strong>Режим работы:</strong><br />
Понедельник - Пятница с 10.00 до 18.00,<br />
Суббота - Воскресенье с 10.00 до 16.00

<br /><br />
В салоне выставлены такие модели матрасов, как Naturcomfort, Dualform, Merino и Waterlatex. В наличии имеются ортопедические подушки Magniflex.

<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<br /><br />




<img style="padding-left: 0;" src="/img/logo-artmaster.jpg" alt="" />
<br />
<strong>Название магазина: АртМастер. ТК "Караван" и ТЦ "Новые Соловьи"</strong>
<strong>Адрес:</strong> Республика Крым, г. Севастополь , ул.Соловьева 10а и ул.Соловьева 12<br />
<strong>Телефоны для справок:</strong><br /> 8 (0692)-94-13-62, 8 (978) 812-45-02, 8 (978) 812-45-04, 8 (978) 812-45-06.<br />
<strong>Веб-сайт:</strong><br />www.matras-sevastopol.com<br />

<br />
<strong>Режим работы:</strong><br />
Понедельник - Пятница с 9.00 до 17.30,<br />
Суббота - Воскресенье с 9.00 до 16.00

<br /><br />
<br /><br />

<img style="padding-left: 0;" src="/img/magniflex_world/abgafdgj.png" alt="" />
<br />
<strong>Название магазина: Салон интерьера "Концепт Холл"</strong>
<strong>Адрес:</strong> 299038, г.Севастополь, улица Астана Кесаева, 1<br />
<strong>Телефоны для справок:</strong><br /> +7 (978) 742 32 07, +7 (978) 048 27 07<br />
<strong>Веб-сайт:</strong> www.concept-hall.ru<br />

<br />
<strong>Режим работы:</strong> с 10.00 до 18.00<br /><br />
<strong>Email:</strong> shuga.sev@gmail.com
<br /><br />

<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=8Uti9FlTQQg-L5AXMsHPJvbcJeu2b5NO&width=600&height=450"></script>


</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		
		array(
			'address' => 'kemerova',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Кемерово',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Кемерово | Магнифлекс',
			'description' => 'Магазины Магнифлекс в Кемерово',
			'keywords' => 'матрасы в магнифлекс Кемерово',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex. Кемерово</h2>
<div class="hnb_mytitlepagcity">


<strong>МТЦ "Сити Дом"</strong><br />

<br />
<strong>Адрес:</strong> ул.Терешковой, дом 41.<br />
<strong>Телефоны для справок:</strong><br /> 8 (384) 290-05-28<br />

<br /><br />

<strong>Торговый центр "Макси дом"</strong><br />

<br />
<strong>Адрес:</strong> Проспект Советский, дом 25А.<br />
<strong>Телефоны для справок:</strong><br /> 8 (384) 290-05-28<br />
<br /><br />
В салоне выставлены такие модели матрасов, как Naturcomfort, Dualform, Merino и Waterlatex. В наличии имеются ортопедические подушки Magniflex.

<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Yv9Bv1A57uxS0M-mwXM_8Z8lP5plddLK&width=600&height=450"></script>


</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		
		array(
			'address' => 'lipetsk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Липецк',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Липецке | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Липецк',
			'keywords' => 'матрасы в магнифлекс в Липецк, magniflex  расноярск, магнифлекс Липецк',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Липецк</h2>
<div class="hnb_mytitlepagcity">


<br /><br />
<strong>Мебельный салон Юнион-Липецк</strong><br />
<strong>Адрес:</strong> г. Липецк, пл. Заводская, дом 1.
<br /><br />
<strong>e-mail:</strong> union.l@mail.ru<br />
<strong>Режим работы:</strong><br />
Часы работы:
ПН-ПТ: 10:00-20:00,
СБ: 10:00-19:00, 
ВС: выходной. 

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (4742) 36-49-49<br />
<hr class="hnb_myhrled">
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=ovg8zBrG0ePXrVRGbX4xgputDKGfV8rQ&width=600&height=450"></script>

</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'moskovskaya-oblast',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Московская область',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Московской области | Магнифлекс',
			'description' => 'Магазины Магнифлекс в Московской области',
			'keywords' => 'матрасы в магнифлекс в Московской области, magniflex Московская область, магнифлекс Московская область',
			'text' => '
				<style>
				.hnb_myhrled{
					display: block;
					width:100%;
					}
				</style>
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Московской области</h2>
<div class="hnb_mytitlepagcity">
В Московской области продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=6IsEaLG4QjuX3u1mmJqi43PUTe48YT-d&width=600&height=450"></script>
<br /><br />
<strong>ТЦ КАРАТ</strong><br /> 
Салон мебели Вешняки, эт. 2.
<br />
<br />
<strong>Адрес:</strong> г. Реутов, ул. Ленина, дом 1А.
<br /><br />
<strong>Режим работы:</strong><br />
Ежедневно: 10.00 до 20.00

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (495) 777-91-07, 8 (985) 121-01-07.
<hr class="hnb_myhrled" />
<br />
<br />

<strong>ТЦ НИКА</strong><br />
Цокольный этаж, м-н Шатура-Мебель.
<br />
<br />
<strong>Адрес:</strong> г. Лобня, ул. Ленина, дом 9.
<br /><br />
<strong>Режим работы:</strong><br />
Понедельник - Пятница: 10.00-20.00; <br />
Воскресенье: 10.00-19.00

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (495) 577-33-86
<hr class="hnb_myhrled" />
<br />
<br />

<strong>ТЦ Шмель</strong><br />

<br />
<br />
<strong>Адрес:</strong> Подольск, проспект Юных Ленинцев,  дом 61 (3-й этаж).
<br /><br />
<strong>Режим работы:</strong><br />
Часы работы: с 10:00 до 20:00

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (499) 713-34-37
<hr class="hnb_myhrled" />
<br />
<br />

<strong>ТЦ Хамелеон</strong><br />

<br />
<br />
<strong>Адрес:</strong> Симферопольское шоссе, 38 км.
 1-й этаж.
<br /><br />
<strong>Режим работы:</strong><br />
Часы работы: с 10:00 до 20:00

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (963) 990-46-51
<hr class="hnb_myhrled" />
<br />
<br />


<strong>Адрес:</strong> Воскресенский район, поселок Белоозерский, ул. Коммунальная, дом 54.
<br /><br />
<strong>Режим работы:</strong><br />
Часы работы: с 10:00 до 20:00

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (962) 915-22-22
<hr class="hnb_myhrled" />
<br />
<br />


<strong>Адрес:</strong> г. Долгопрудный, ул. Первомайская, дом 54.
<br /><br />
<strong>Режим работы:</strong><br />
Понедельник - Пятница: 10.00-20.00; <br />
Воскресенье: 10.00-19.00

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (498) 685-08-34
<hr class="hnb_myhrled" />
<br />
<br />
<strong>Адрес:</strong> г. Зеленоград, Панфиловский пр-кт. дом 1, м-н Дом мебели 1 эт.


<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (499) 736-04-39, 736-53-08, 736-16-79.
<hr class="hnb_myhrled" />
<br />
<br />
<strong>Адрес:</strong> М.О. Орехово-Зуевский р-н г. Куровское, ул. Советская, дом 105.


<br /><br />
<strong>Телефоны для справок:</strong><br />
 8 (496) 411-07-96, 8 (925) 738-40-42.
<hr class="hnb_myhrled" />

<br /><br />

<strong>Салон "Мир Мебели"</strong><br />

<br />
<br />
<strong>Адрес:</strong> г. Мытищи, Олимпийский проспект, дом 29, стр. 1
<br /><br />
ТЦ "Формат", 3 этаж<br />
<strong>Телефоны для справок:</strong><br />
 8 (495) 585-15-06
 <hr class="hnb_myhrled" />
<br /><br />

<strong>Салон Мебели</strong><br />
<br />
<br />
<strong>Адрес:</strong> г. Красногорск, ул. Ленина, дом 45, помещение 1, 1 этаж
<br /><br />

<strong>Телефоны для справок:</strong><br />
8 (495) 563-86-26; 8 (495) 563-04-78
 <hr class="hnb_myhrled" />
<br /><br />

<strong>Салон Мебели</strong><br />
<br />
<br />
<strong>Адрес:</strong> Красногорский район, поселок Нахабино, ул. Советская, дом 73А.<br />
ТЦ "Аверс", 2 этаж, левое крыло
<br /><br />

<strong>Телефоны для справок:</strong><br />
8 (495) 566-31-81
 <hr class="hnb_myhrled" />
<br /><br />

<strong>Салон Мебели</strong><br />
<br />
<br />
<strong>Адрес:</strong> г. Химки, Юбилейный проспект, дом 7А.
<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (495) 971-41-97
<hr class="hnb_myhrled" />
<br /><br />

<strong>Дизайн Студия</strong><br />
<br />
<br />
<strong>Адрес:</strong> г. Мытищи, ул. Юбилейная, дом 24А, под. 1, этаж 1, офис 3.
<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (903) 775-06-22
<hr class="hnb_myhrled" />
<br /><br />

<strong>Эксклюзивный салон "Белая Ворона"</strong><br />
<br />
<br />
<strong>Адрес:</strong> Ногинский район, поселок Черноголовка, ул. Березовая, дом 24.
<br /><br />
<strong>Телефоны для справок:</strong><br />
Телефон для справок: 8 (903) 177-81-57
<hr class="hnb_myhrled" />
<br /><br />


Есть образцы всех матрасов




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'nizhniy-novgorod',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Нижний Новгород',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Нижнем Новгороде | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Нижний Новгород',
			'keywords' => 'матрасы в магнифлекс в Нижний Новгород, magniflex Нижний Новгород, магнифлекс Нижний Новгород',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Нижнем Новгороде</h2>
<div class="hnb_mytitlepagcity">
В Нижнем Новгороде продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>Мебельный салон "CORSO ITALIA"</strong>
<br />
<br />
<strong>Адрес:</strong> г. Нижний Новгород, ул. Рождественская, дом 13, 2-ой этаж.
<br /><br />
<strong>e-mail:</strong> corso@kis.ru<br /><br />
<strong>сайт:</strong> www.corsoitalia.ru<br /><br />
<strong>Режим работы:</strong><br />
ПН-СБ 10:00-19:00, ВС выходной

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (831) 461-80-94, 8 (831) 461-80-93.
<br />
<br />
<hr class="hnb_myhrled"><br />
<strong>ИП Шарова Л.А.</strong><br />
<br />

<strong>Режим работы:</strong><br />
8.00-22.00 без выходных

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (831) 415-51-52, 415-78-67.

<br /><br />
<hr class="hnb_myhrled"><br />
<strong>Мебельный салон Юнион-Нижний Новгород</strong><br />
<strong>Адрес:</strong> г. Нижний Новгород, б. Мира, дом 17а.
<br /><br />
<strong>e-mail:</strong> union@mts-nn.ru<br />
<strong>Режим работы:</strong><br />
Часы работы:
ПН-ПТ: 10:00-20:00,
СБ: 10:00-19:00, 
ВС: выходной 

<br /><br />
<strong>Телефоны для справок:</strong><br />
277-51-95, 8 (831) 246-82-70<br />
<hr class="hnb_myhrled">
<br /><br />


<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=PqhysmDTlW9Q3-zQWG307VSljc0kZC3B&width=600&height=450"></script>
</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'nizhniy-tagil',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Нижний Тагил',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Нижнем Тагиле | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Нижний Тагил',
			'keywords' => 'матрасы в магнифлекс в Нижний Тагил, magniflex Нижний Тагил, магнифлекс Нижний Тагил',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Нижнем Тагиле</h2>
<div class="hnb_mytitlepagcity">
В Нижнем Тагиле продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ИП Корнев Д.Н.</strong><br />
<br />

<strong>Адрес:</strong> ул. Октябрьской революции, дом 66, ЦУМ, 5 этаж, МАТРАС-ЦЕНТР.
<br /><br />

<strong>Телефоны для справок:</strong><br />
8 (912) 287-33-77

<br /><br />
Есть образцы всех матрасов<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=Sgy09AMg9p9-jxwVdD8_WSR472jXd_Pd&width=600&height=450"></script>



</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'novosibirsk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Новосибирск',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Новосибирске | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Новосибирск',
			'keywords' => 'матрасы в магнифлекс в Новосибирск, magniflex Новосибирск, магнифлекс Новосибирск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Новосибирске</h2>
<div class="hnb_mytitlepagcity">
В Новосибирске продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Салон "Матрасы и Кровати"</strong><br />
<br />

<strong>Адрес:</strong> ул. Красный проспект, дом 99, "Центр Здорового Сна".
<br /><br />
<strong>Режим работы:</strong><br />
Понедельник - Пятница: 11.00-19.00; <br />
Суббота: 11.00-18.00;<br />
Воскресенье: 11.00 до 17.00

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (383) 220-88-10, 8 (913) 987-82-49.
<br /><br /><br />

<strong>Салон "Ортофлекс"</strong><br />
<br />

<strong>Адрес:</strong> ул. Станционная, дом 62, Салон "Матрасы и Кровати", 1 эт.
<br /><br />
<strong>Режим работы:</strong><br />
Понедельник - Пятница: 10.00-20.00; <br />
Суббота: 11.00-16.00;<br />
Воскресенье: выходной.

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (383) 380-08-16, 380-95-16.
<br />
<br />
<br />
<strong>Адрес:</strong> ул. Светлановская, дом 50, ТВК "Большая Медведица", 2 этаж, отдел "Ортофлекс".
<br /><br />
<strong>Режим работы:</strong><br />
10:00-21:00, без обеда и выходных.

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (383) 380-81-16<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=l_NA5AF3EjjVsXvmS5b375DdAp3o8O4G&width=600&height=450"></script>



</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'orenburg',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Оренбург',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Оренбурге | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Оренбург',
			'keywords' => 'матрасы в магнифлекс в Оренбург, magniflex Оренбург, магнифлекс Оренбург',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Оренбурге</h2>
<div class="hnb_mytitlepagcity">
В Оренбурге продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Мегамолл "Армада" Галерея Лувр.</strong><br />
<br />

<strong>Адрес:</strong> г. Оренбург, Шарлыкское шоссе, дом 1.
<br /><br />

<strong>Телефоны для справок:</strong><br />
8 (3532) 61-84-95, 20-16-73. e-mail: studiy_davidoff@mail.ru, www.davidoff-mebel.com

<br /><br />
Ассортимент: ортопедические матрасы и подушки<br /><br />

<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=aLvegR8vrXfMHC5wLoKtBs2cRMpv2vhi&width=600&height=450"></script>



</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'penza',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Пенза',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Пензе | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Пенза',
			'keywords' => 'матрасы в магнифлекс в Пенза, magniflex Оренбург, магнифлекс Пенза',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Пензе</h2>
<div class="hnb_mytitlepagcity">

<br />
<br />
<strong>Мебельный салон Юнион-Пенза</strong><br />
<br />


<strong>Адрес:</strong> г. Пенза, ул. Плеханова, дом 34.
<br /><br />

<strong>Режим работы:</strong><br />
ПН-ПТ: 10:00-20:00,
СБ: 10:00-19:00, 
ВС: выходной

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (8412) 20-52-04<br />
<hr class="hnb_myhrled"><br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=0h1leZv2BuoBY1C8op3extNSoWeVArKT&width=600&height=450"></script>






</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'perm',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Пермь',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Перми | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Пермь',
			'keywords' => 'матрасы в магнифлекс в Пермь, magniflex Пермь, магнифлекс Пермь',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Перми</h2>
<div class="hnb_mytitlepagcity">
В Перми продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ООО "МНК"</strong><br />
<br />

<strong>Адрес:</strong> г. Пермь, ул. Кронштадская, дом 29<br />
<strong>Режим работы:</strong> будни с 9-00 до 18-00<br />
<strong>Web-сайт:</strong> www.magniflex59.ru 
<br /><br />

<strong>Общий телефон для справок:</strong> +7 (950) 450-52-25 (ежедневно без выходных с 9-00 до 18-00) 

<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=-ovT_OliPB9uVJoU2Y3CswEo_9PdxceS&width=600&height=450"></script>


</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'rostov',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Ростов',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Ростове | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Ростов',
			'keywords' => 'матрасы в магнифлекс в Ростов, magniflex Ростов, магнифлекс Ростов',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Ростове</h2>
<div class="hnb_mytitlepagcity">
В Ростове продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (8632) 23-96-19, 70-13-47.

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'sankt-peterburg',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Санкт-Петербург',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Санкт-Петербурге | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Санкт-Петербург',
			'keywords' => 'матрасы в магнифлекс в Санкт-Петербурге, magniflex Санкт-Петербург, магнифлекс Санкт-Петербург',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Санкт-Петербурге</h2>
<div class="hnb_mytitlepagcity">
В Санкт-Петербурге продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть в следующих салонах, магазинах или заказать на нашем сайте (гарантируем быструю доставку):
<br />
<br />
<strong>Телефоны для справок:</strong><br />
8 (812) 891-8191<br /><br />

<strong>"САЛОН ИТАЛЬЯНСКИХ  МАТРАСОВ"</strong><br /> 
<strong>Адрес:</strong> Мебельный  центр " Аквилон" ул. Новолитовская 15"В"  эт-5. секция-164 <br />
<strong>Контактные телефоны:</strong> 8 (965) 0620397,  8 (812) 640-95-21



<br /><br />

<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=ks74JM8j-bF-YI_fPjiwxTomQApTGgPJ&width=600&height=450"></script>
<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'serpukhov',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Серпухов',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Серпухове | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Серпухов',
			'keywords' => 'матрасы в магнифлекс в Серпухов, magniflex Серпухов, магнифлекс Серпухов',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Серпухове</h2>
<div class="hnb_mytitlepagcity">
В Серпухове продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

Специализированный Салон матрасов и подушек "Марго"
<br />
<br />

<strong>ООО "Королева Марго"</strong><br />
<br />

Адрес: МО. г. Серпухов , ул. Подольская, дом 53.
<br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (4967) 75-31-07, 8 (910) 445-57-94, 8 (916) 237-83-04. <br /> <br />


<strong>График работы:</strong><br />
Пн - Сб:  10:00 - 19:00,
Вс:  10:00 - 16:00.<br /> <br />

e-mail: km3316@yandex.ru 

<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=l-ATLWK1IcE_OT2-gGfTNAwKAoeK4eK3&width=600&height=450"></script>


</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'sochi',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Сочи',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Сочи | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Сочи',
			'keywords' => 'матрасы в магнифлекс в Сочи, magniflex Сочи, магнифлекс Сочи',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Сочи</h2>
<div class="hnb_mytitlepagcity">
В Сочи продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ТД "ВИКТОРИЯ"</strong><br />
<strong>Адрес:</strong> г.Сочи, ул.Навагинская, дом 3 (1 блок ТОРГОВОЙ ГАЛЕРЕИ).
<br /><br />
<strong>e-mail:</strong> wkorolev@mail.ru<br />
<strong>ИП Королев В.В.</strong><br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (918) 207-39-39, (8622) 61-55-13.

<br /><br />
Ассортимент: ортопедические матрасы и подушки<br />
<hr class="hnb_myhrled">
<br /><br />
<strong>Магазин "Товары из Германии"</strong><br />
<strong>Адрес:</strong> г. Сочи, Хоста, ул. Шоссейная, дом 2, остановка "Звездочка".
<br /><br />
<strong>e-mail:</strong> mailto:1@tigsochi.ru<br />
<strong>Режим работы:</strong><br />
10.00 - 19.00 без перерывов и выходных.

<br /><br />
<strong>Телефоны для справок:</strong><br />
Секретарь/факс: 8 (862) 265-10-10, 265-08-88, 265-10-00<br />
Стройотдел: - 8 (862) 265-01-18<br />
Отдел "Кухни": - 8 (862) 265-01-31<br />
<hr class="hnb_myhrled">
<br />
<strong>Адрес:</strong> г.Сочи, ул.Транспортная, дом 28, 1 этаж.
<br /><br />
<strong>e-mail:</strong>1@tigsochi.ru<br />
<strong>Режим работы:</strong><br />
10.00 - 21.00 без перерывов и выходных.

<br /><br />
<strong>Телефоны для справок:</strong><br />
Менеджеры\факс: - 8 (862) 225-50-46, 225-50-47, 225-50-48<br />
Отдел "Кухни": - 8 (862) 225-50-49<br />
Стройотдел: - 8 (862) 225-50-31<br />
<hr class="hnb_myhrled">
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=RgW1H2rDMbMRmqGMvMk2jJysRiPuJkFt&width=600&height=450"></script>




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'staryy-oskol',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Старый Оскол',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Старом Осколе | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Старый Оскол',
			'keywords' => 'матрасы в магнифлекс в Старый Оскол, magniflex Старый Оскол, магнифлекс Старый Оскол',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Старом Осколе</h2>
<div class="hnb_mytitlepagcity">
В Старом Осколе продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>Мастерская матрасов « Mr. Mattress» </strong><br />
<br />

<strong>Адрес:</strong> мкр. Надежда, дом 5, ТЦ «Всё для Вас» 1 эт, пав. 4.
<br /><br />

<strong>Режим работы:</strong><br />
Понедельник - Пятница: 10.00-19.00; <br />
Суббота: 10.00-18.00;<br />
Воскресенье: выходной.

<br /><br />
<strong>Телефоны для справок:</strong><br />
Тел: 8 (980) 374-24-10, 8 (929) 000-05-79.

<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=J8XoaMdZcW7I9FDVQLqqJD8xz44Ve2lA&width=600&height=450"></script>


</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		
		array(
			'address' => 'syktyvkar',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Сыктывкар',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Сыктывкаре | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Сыктывкар',
			'keywords' => 'матрасы в магнифлекс в Сыктывкар, magniflex Сыктывкар, магнифлекс Сыктывкар',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Сыктывкаре</h2>
<div class="hnb_mytitlepagcity">
В Сыктывкаре продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (8212) 20-00-96

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'tambov',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Тамбов',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Тамбове | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Тамбов',
			'keywords' => 'матрасы в магнифлекс в Тамбов, magniflex Тамбов, магнифлекс Тамбов',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Тамбове</h2>
<div class="hnb_mytitlepagcity">
В Тамбове продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (4752) 75-41-08

<br /><br />
Ассортимент: ортопедические матрасы и подушки<br />
<hr class="hnb_myhrled">
<br /><br />
<strong>Мебельный салон Юнион-Тамбов</strong><br />
<strong>Адрес:</strong> г. Тамбов, ул. Советская, дом 34.
<br /><br />
<strong>e-mail:</strong> union-tambov@mail.ru<br />
<strong>Режим работы:</strong><br />
ПН-ПТ: 10:00-20:00,
СБ: 10:00-19:00, 
ВС: выходной. 

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (4752) 75-51-12<br />
<hr class="hnb_myhrled">
<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=EgarCsFhYrrsvWlM59S9zg-0IZ90u80x&width=600&height=450"></script>



</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'tomsk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Томск',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Томске | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Томск',
			'keywords' => 'матрасы в магнифлекс в Томск, magniflex Томск, магнифлекс Томск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Томске</h2>
<div class="hnb_mytitlepagcity">
В Томске продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ИП Майснер В.</strong><br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (913) 899-94-81
<br />
<br />
<br />
<strong> Салон мягкой мебели "Ля Рошель"</strong><br />
<br />

<strong>Адрес:</strong>  г. Томск, ул. Яковлева, дом 23.
<br /><br />
<strong>Режим работы:</strong><br />
С 10.00-19.00 без выходных

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (3822) 65-76-76, тел/факс 8 (3822) 65-23-02.

<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=I1W6S0Vq-GVaxy5U9H1lHwqvrsO_Z58d&width=600&height=450"></script>


</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'tula',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Тула',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Туле | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Тула',
			'keywords' => 'матрасы в магнифлекс в Тула, magniflex Тула, магнифлекс Тула',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Туле</h2>
<div class="hnb_mytitlepagcity">
В Туле продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Мебельный салон "Элит"</strong><br />
<br />

<strong>Адрес:</strong> ул. Л. Толстого, дом 91-А.
<br /><br />
<strong>Режим работы:</strong><br />
Понедельник - Пятница: 10.00-19.00; <br />
Суббота: 11.00-17.00;<br />
Воскресенье: выходной.

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (4872) 31-97-81, 31-88-62.
<br />
<br />
<br />

<strong>Адрес:</strong> г. Тула, ул. Коминтерна, дом 24г.
<br /><br />

<strong>Режим работы:</strong><br />
с 10 до 19 часов,  без выходных.

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (4872) 70-29-51, 71-66-63.
<br />
<br />
<br />

<strong>Салон «Мадам Подушкина»</strong><br />
ИП "Бобнева" 
<br />
<br />

<strong>Адрес:</strong> г. Алексин, ул. Тульская, дом 136Д, ТЦ «Слобода», бутик 9.
<br /><br />
<strong>Режим работы:</strong><br />
9:00 - 17:00 

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (905) 111-11-07


<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=aLLJMgb5q-L4h0BrTe2K9icqvua9X11Z&width=600&height=450"></script>



</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'tver',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Тверь',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Твери | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Тверь',
			'keywords' => 'матрасы в магнифлекс в Тверь, magniflex Тверь, магнифлекс Тверь',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Твери</h2>
<div class="hnb_mytitlepagcity">
В Твери продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (4822) 32-26-26

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'tyumen',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Тюмень',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Тюмени | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Тюмень',
			'keywords' => 'матрасы в магнифлекс в Тюмень, magniflex Тюмень, магнифлекс Тюмень',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Тюмени</h2>
<div class="hnb_mytitlepagcity">
В Тюмени продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:

<br />
<br />
<strong>ООО "Мобили. Су-Тюмень"</strong><br />
<br />

<strong>Адрес:</strong> г. Тюмень, ул. Максима Горького, дом 68, корпус 3 (ЖК "Даудель")
<br /><br />

<strong>Режим работы:</strong><br />
с понедельника по субботу с 11.00 до 19.00
<br /><br />

<strong>Телефон для справок:</strong><br />
8 (3452) 97-07-93

<br /><br />
<hr class="hnb_myhrled" />

<br />
<br />
<strong>Салон ортопедич. матрасов и кроватей "Матрэкс"-ТЦ "Магнат"</strong><br />
<br />

<strong>Адрес:</strong> г. Тюмень,  ул. 30 лет Победы, дом 7, стр.5, 1 этаж.
<br /><br />



<strong>Телефон для справок:</strong><br />
8 (3452) 75-47-74

<br /><br />
<hr class="hnb_myhrled" />
<br />
<br />
<strong>Салон "Матрасы и аксессуары", салон "Матрэкс"</strong><br />
<br />

<strong>Адрес:</strong> ул. Авторемонтная, дом 45, стр.4
<br /><br />



<strong>Телефон для справок:</strong><br />
8 (3452) 43-37-24, 8 (3452) 74-48-19.

<br /><br />
<hr class="hnb_myhrled" />
<br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=qG7Dk_0StrhHqRHMgZyYuhoGquDQk2F0&width=600&height=450"></script>



</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'ufa',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Уфа',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Уфе | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Уфа',
			'keywords' => 'матрасы в магнифлекс в Уфа, magniflex Уфа, магнифлекс Уфа',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Уфе</h2>
<div class="hnb_mytitlepagcity">
В Уфе продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (3472) 93-68-45

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'ulyanovsk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Ульяновск',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Ульяновске | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Ульяновск',
			'keywords' => 'матрасы в магнифлекс в Ульяновск, magniflex Ульяновск, магнифлекс Ульяновск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Ульяновске</h2>
<div class="hnb_mytitlepagcity">
В Ульяновске продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>Салон NEW STANDART</strong><br />
<br />

<strong>Адрес:</strong> ул. Радищева, дом 100.
<br /><br />

<strong>Телефоны для справок:</strong><br />
8 (8422) 73-64-40, 8 (8422) 73-64-41, 8 (951) 096-37-10, 8 (906) 144-75-33.
<br />
<br />
<br />
<strong>ООО «СТЭК»</strong><br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (8422) 73-64-41


<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=gMG1DrIr5hhN-9nuNOXI5Bje-v7gGZpP&width=600&height=450"></script>


</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'vladikavkaz',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Владикавказ',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Владикавказе | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Владикавказ',
			'keywords' => 'матрасы в магнифлекс в Владикавказе, magniflex Владикавказ, магнифлекс Владикавказ',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Владикавказе</h2>
<div class="hnb_mytitlepagcity">
В Владикавказе продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Адрес:</strong> г. Владикавказ, пр. Коста, дом 180, тел: 8 (929) 863-36-88.

<br /><br />
Ассортимент: ортопедические матрасы и подушки<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=lKIxMscya6SuKq_hzAeoRvsghQ9XYROL&width=600&height=450"></script>



</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'vladimir',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Владимир',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Владимире | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Владимир',
			'keywords' => 'матрасы в магнифлекс в Владимире, magniflex Владимир, магнифлекс Владимир',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Владимире</h2>
<div class="hnb_mytitlepagcity">
В Владимире продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (922) 24-35-15

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'volgograd',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Волгоград',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Волгограде | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Волгоград',
			'keywords' => 'матрасы в магнифлекс в Волгоград, magniflex Волгоград, магнифлекс Волгоград',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Волгограде</h2>
<div class="hnb_mytitlepagcity">
В Волгограде продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (442) 33-67-70, 33-89-11, 33-89-32

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'voronezh',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Воронеж',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Воронеже | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Воронеж',
			'keywords' => 'матрасы в магнифлекс в Воронеж, magniflex Воронеж, магнифлекс воронеж',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Воронеже</h2>
<div class="hnb_mytitlepagcity">
В Воронеже продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>Салон "СОНИЕ"</strong><br />
ИП "Ильюшкина Н.В."
<br />
<br />
<strong>Адрес:</strong> г. Воронеж, ул. Урицкого, дом 128.
<br /><br />
<strong>Режим работы:</strong><br />
Понедельник - Пятница: 10.00-19.00; <br />
Суббота: 11.00-18.00;<br />
Воскресенье: выходной.

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (473) 221-09-92; 8 (473) 290-87-09; 8 (473) 241-74-52; 8 (473) 293-56-74.
<br /><br />
<hr class="hnb_myhrled">
<br />
<strong>Мебельный салон Юнион-Воронеж </strong><br />
<strong>Адрес:</strong> г. Воронеж, ул. Димитрова, дом 74.
<br /><br />
<strong>e-mail:</strong> unionvr@yandex.ru<br />
<strong>Режим работы:</strong><br />
Часы работы: <br />
ПН-ПТ: 09:00-20:00, <br />
СБ: 10:00-19:00, <br />
ВС: выходной.

<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (473) 226-58-37<br />
<hr class="hnb_myhrled">
<br /><br />
Есть образцы всех матрасов<br /><br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=OFUGWo8IlyiG70Llo4WhBcbO9wFTl_uS&width=600&height=450"></script>




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'yaroslavl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Ярославль',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Ярославль | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Ярославль',
			'keywords' => 'матрасы в магнифлекс в Ярославль, magniflex Ярославль, магнифлекс Ярославль',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Ярославле</h2>
<div class="hnb_mytitlepagcity">
В Ярославле продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ИП "Курочкин С.В."</strong><br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (4852) 73-19-24

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'yuzhno-sakhalinsk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Южно-Сахалинск',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Южно-Сахалинске | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Южно-Сахалинск',
			'keywords' => 'матрасы в магнифлекс в Южно-Сахалинск, magniflex Южно-Сахалинск, магнифлекс Южно-Сахалинск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Южно-Сахалинске</h2>
<div class="hnb_mytitlepagcity">
В Южно-Сахалинске продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>ООО «Дом Мебели»</strong><br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (4242) 72-28-18, 72-28-08.
<br />
<br />
<br />
<strong>Студия Мебели "Green Street"</strong><br />
ИП Киселев АО
<br />
<br />

<strong>Телефоны для справок:</strong><br />
8 (4242) 27-72-50

<br /><br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),
		array(
			'address' => 'vacuum-packing',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Итальянские вакуумные матрасы Magniflex',
			'left_sidebar' => 'production',
			'title' => 'Итальянские вакуумные матрасы Magniflex. Вакуумная упаковка | Магнифлекс',
			'description' => '',
			'keywords' => '',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<ul class="worlmagniflex">

<!--{left_sidebar}-->

</ul>

</div>
<div class="hnb_conttextright">
<h1 class="hnb_mytitlepag">Вакуумные матрасы</h1>


<p align="justify">Позволим себе немного разбавить сухой, официальный текст о  вакуумных матрасах живым русским языком.  </p> <br />
<h4 align="justify">Чем интересна вакуумная упаковка? Почему это изобретение  буквально взорвало мировой рынок матрасов и вывело Magniflex в Лидеры, оставив  всех конкурентов далеко позади на многие годы действия патента? </h4><br />
<p align="justify">Представьте себе, Италия. Начало 70-х годов прошлого века. Компания Magniflex (Магнифлекс).  Молодая, амбициозная, есть талантливые специалисты, есть желание работать, есть  небольшая фабрика. Прошло всего 10 лет с  момента основания, но фирма уже известна по всей  Италии, правда, пока ни чем особенно значимым на фоне  конкурентов не выделяется. Зато принимается решение о создании своей собственной научной лаборатории, по изучению "науки сна", ведущая исследовательские работы над новыми технологиями, изучающая новые материалы для производства передовых матрасов. На работу приглашаются ведущие специалисты и ученые.  Приблизительно в это время, по легенде, основателю компании  Джулиано Магни, наблюдавшему за тем, как несколько рабочих пытаются перенести  один матрас из одного угла в другой, приходит в голову гениальная идея:  "надо сделать матрас компактным". Ведь матрас практически полый  изнутри. Например, если проехаться по матрасу катком - по форме он станет больше похожим  на простынку, которую затем можно свернуть в рулон, взять подмышку и легко  перемещать куда угодно. Вопрос только в том, как потом снова из получившейся  "простынки" восстановить матрас. На этот вопрос через несколько лет и дали ответ специалисты лаборатории.  Компания получила патент на изобретение в большинстве стран мира. И начала  выпускать скрученные матрасы в вакуумной упаковке. Такая упаковка решила и еще одну  проблему - чистоты. Матрас попадал клиенту домой буквально стерильно чистым. И  люди не только в Италии, но и во всем мире стали отдавать предпочтение матрасам  Magniflex. Это была революция. Так за достаточно короткий период времени компания стала мировым  лидером. С тех самых пор  Magniflex прочно закрепила за собой звание "законодателя мод в мире матрасов".</p>
<p align="justify">И это не единственное  знаковое изобретение компании. Мы были первыми, кто начал производить  "матрасы с памятью", используя в качестве наполнителя материалы  Memory и Memoform, мы первые, кто вывел на рынок "золотой матрас". На мировых выставках в Париже, Милане, Токио и Нью-Йорке наш стенд всегда традиционно собирает толпы народа. Ежегодно мы патентуем десятки новых  изобретений, позволяющие нам производить, пожалуй, лучшие матрасы в мире.  </p>
<br /><br />

<iframe width="680" height="430" src="//www.youtube.com/embed/dKBPhoOpQP8?list=PLeHMDKQnW2ZM2EBCBqArtxNe5B9vxeoR1" frameborder="0" allowfullscreen=""></iframe>

<h4>Вакуумные матрасы - легкость транспортировки и защита окружающей среды!</h4>
<br />
<p>
На протяжении всей своей истории компания Magniflex (Италия) руководствовалась следующими принципами:<br /><br />
- высочайшее качество продукции;<br />
- самый высокий уровень гигиены продукции, исключительно природные материалы и натуральные технологии;<br />
- забота и защита окружающей среды, экологичность производства.

<br /><br />

Еще в далеком 1986 годы именно мы изобрели и запатентовали технологию вакуумной упаковки матрасов. Это изобретение позволило решить сразу несколько проблем и предоставило нашим матрасам преимущества: легкость транспортировки, стерильный уровень гигиены продукции, защита окружающей среды. </p>

<br />



<div class="labels">
  <div class="label act">
    <span>Вакуумная упаковка</span>
  </div>
  <div class="label">
    <span>Инструкция</span>
  </div>
  <div style="clear: both;"></div>
</div>



<div class="text-for-label">
  <p>Все ортопедические матрасы Magniflex поставляются в виде скрученного рулона в вакуумной гигиенически чистой упаковке, что позволяет легко транспортировать двуспальные матрасы в легковом автомобиле, а односпальные и на общественном транспорте, поскольку объем изделия уменьшается на 90%. После распаковки матраса аккуратно потяните за край, матрас развернется и  восстановит свой изначальный объем. Для полноценной эксплуатации матраса необходимо подождать 8-10 часов. </p>
<br />
  <img src="/img/vacuum_up.jpg" alt="преимущества вакуумной упаковки итальянских матрасов Magniflex">
</div>



<div class="text-for-label">
  <p>Для распаковки матраса выполните следующие действия:<br /><br />
1. Положите скрученный матрас на основание (на кровать); <br />
2. Аккуратно вскройте упаковку. Чтобы не повредить матрас, старайтесь не использовать при этом очень острые предметы; <br />
3. Потяните за край - матрас развернется; <br />
4. Подождите некоторое время, пока матрас восстановит свой первоначальный объем;<br />
5. Для полноценной эксплуатации матраса необходимо подождать 8-10 часов; <br />
6. Наслаждайтесь здоровым и комфортным сном!

<br /><br />

<img src="/img/vacuum_in.jpg" alt="вакуумная упаковка матрасов Magniflex матрацы вакуумные матрасы">

</p></div>

</div>
</div>
<div style="clear: both;"></div>				</div>
			'
		),
		/* сравнение и коллекции елитных матрасов */
		array(
			'address' => 'sravnenie-matrasov',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Удобное сравнение матрасов',
			'left_sidebar' => '',
			'title' => 'Удобное сравнение матрасов Magniflex | Магнифлекс',
			'description' => '',
			'keywords' => '',
			'text' => '
			<div class="hnb_contarea">
<h3>Удобное сравнение ортопедических матрасов Magniflex</h3>
<div class="sr_sizes">
<div>
<!--<a href="javascript:void(0)" rel="nofollow" onclick="$(\'.sr_sizes > div > div\').slideUp(); $(\'#hnb_textbottomb1\').slideDown();">Гарантия самой низкой цены</a>-->
<a href="javascript:void(0)" rel="nofollow" onclick="$(\'.sr_sizes > div > div\').slideUp(); $(\'#hnb_textbottomb2\').slideDown();">25% скидка на подушки</a>
<a href="javascript:void(0)" rel="nofollow" onclick="$(\'.sr_sizes > div > div\').slideUp(); $(\'#hnb_textbottomb3\').slideDown();">Бесплатная доставка</a>
	

<select class="inputA" id="doborField">
					  
					  <!--{products_sravnenie_options}-->
					  
					</select>
					<span class="hnb_hzvsr">Выберите размер:</span>
					
					<div id="hnb_textbottomb1" style="display: none;">
					<img src="/img/bestpr.png" class="img3"/>
			<div>
				Мы, как единственное официальное представительство Magniflex в России, ГАРАНТИРУЕМ, что цена в нашем интернет-магазине является самой низкой, а условия покупки - самые лучшие.<br />
				Если Вам где-то предложат условия лучше - обратитесь к нам. Мы сделаем их еще лучше.<br />
				Подробности в акции <a href="/skidki-magniflex/samaya-vygodnaya-tsena/">“Гарантия Самой выгодной и низкой цены в Росии”</a>
			</div>
			
			<div style="clear:both;"></div>
			<a class="close" rel="nofollow" href="javascript:void(0)" onclick="$(\'#hnb_textbottomb1\').slideUp();"></a>
		</div>
	<div id="hnb_textbottomb2" style="display: none;">
		<div style="clear:both;"></div>
			<div>
				<span>При покупке любого матраса дарим 25% скидку на любые подушки (вне зависимости от их количества)!</span>
				<div>
					<span>Матрас</span>
					<img src="/img/matrasessk.png">
					<span>+ Подушка</span>
					<img src="/img/pilowssk.png">
					<span> =   ВЫГОДА до 1 900 руб</span>
				</div>
			</div>
			
			<div style="clear:both;"></div>
			<a class="close" rel="nofollow" href="javascript:void(0)" onclick="$(\'#hnb_textbottomb2\').slideUp();"></a>
		</div>
		<div id="hnb_textbottomb3" style="display: none;">
			<div style="clear:both;"></div>
			<img src="/img/auto.png" class="img3">
				<div>
					Бесплатная быстрая доставка покупок до Ваших дверей. 
					Собственная фирменная служба! 
					подробности и сроки по ссылке - <a href="/pokupatelyam/oplata-i-dostavka/">доставка Magnfflex</a><br />
					
				</div>
				
				<div style="clear:both;"></div>
				<a class="close" rel="nofollow" href="javascript:void(0)" onclick="$(\'#hnb_textbottomb3\').slideUp();"></a>
			</div>
					</div><div class="clear"></div>
					</div>
				<div class="hnb_tablelement">


<table class="hnb_tabsrv" cellspacing="0">
	<tr class="firnamsvoi">
		<td style="background:#fbfbfb; font-weight:bold;">
			Матрасы
		</td>
		<td class="">
			Общие свойства
		</td>
		<td class="">
			Жесткость
		</td>
		<td class="">
			Высота
		</td>
		<td class="">
			Срок
		</td>
		<td class="">
		Состав
		</td>
		<td class="">
		Преимущества
		</td>
	</tr>
	<tr id="hnb_tabsosdis">
		<td class="imgtovkup">
		
		<div id="hnb_butdisplblock" onclick="document.getElementById(\'hnb_tabsosdis\').style.display=\'none\'; document.getElementById(\'hnb_closetab\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">Merino (Merinos)</span>
		
			<a href="/img/product/big/Merino (Merinos).jpg" class="boxer"><img src="/img/product/very_small/Merino (Merinos).jpg" /></a>
			<div>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/MERINOS/">
						Подробно
					</a>
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/orthopedic_mattresses/MERINOS/">
						Купить матрас
					</a>
			</div>
			<div>
				Цена: <span class="productPrice1">20 700</span> руб.
			</div>
		
		</td>
		<td class="trbkeee">
		
		Производство Италия;<br/>
Ортопедический;<br/>
Вакумный;<br/>
Двусторонний: <br/>
Зима/Лето
<br /><br />
Сертификаты:
Ростест, международные. <br/><br/>
Рекомендации: НИИ Приорова

		</td>
		<td class="trbkeee">
		<div id="hnb_tabsosdis">
			жесткий
		</div>
		</td>
		<td class="trbkeee">
		<div id="hnb_tabsosdis">
			16 см 
		</div>
		</td>
		<td class="trbkeee">
		<div id="hnb_tabsosdis">
			не
менее 
12 лет (опыт 25 лет в РФ)
		</div>
		</td>
		<td class="trbkeee">
			
			<img src="/img/merinos2.png" />
			<ul>
				<li>Зима: натуральная шерсть мериноса</li>
				<li>Антистатическая прослойка</li>
				<li>Прослойка из белого хлопка</li>
				<li>Основной слой - Eliocel 40</li>
				<li>Прослойка</li>
				<li>100% хлопок двойного кручения</li>
			</ul>
			
		</td>
		<td class="trbkeee">
			
			<ul style="font-size:12px;">
				<li>Натуральные компаненты: латекс, хлопок, шерсть мериноса</li>
				<li>Лучший! из недорогих</li>
				<li>Износостойкий, практичный, дышащий</li>
				<li>За 25 лет в РФ ни одного отрицательного отзыва</li>
				<li>Самый популярный</li>

			</ul>
			
			
		</td>
	</tr>
	<tr id="hnb_closetab">
		<td colspan="1">
			<div onclick="document.getElementById(\'hnb_closetab\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis\').style.display=\'table-row\'; document.getElementById(\'hnb_butdisplblock\').style.display=\'block\';"> открыть</div>
	    </td>
		<td  class="trbkeee" colspan="6">
			<span class="hnb_textdistit">Merino (Merinos)</span>
		</td>
	</tr>
	<tr  id="hnb_tabsosdis2">
		<td class="imgtovkup colorbkfb">
		<div id="hnb_butdisplblock2" onclick="document.getElementById(\'hnb_tabsosdis2\').style.display=\'none\'; document.getElementById(\'hnb_closetab2\').style.display=\'table-row\';">скрыть</div>

		<span class="block_firstna">Merino Green Tea</span>
			<a href="/img/product/big/Merino Green Tea.jpg" class="boxer"><img src="/img/product/very_small/Merino Green Tea.jpg" /></a>
			<div>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/">
						Подробно
					</a>
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/">
						Купить матрас
					</a>
			</div>
			<div>
				Цена: <span class="productPrice2">23 200</span> руб.
			</div>
		</td>
		<td>
		Производство Италия;<br/>
Ортопедический;<br/>
Вакумный;<br/>
Двусторонний: <br/>
Зима/Лето
<br /><br />
Сертификаты:
Ростест, международные. <br/><br/>
Рекомендации: НИИ Приорова
		</td>
		<td>
			умеренно жесткий
		</td>
		<td>
			17 см 
		</td>
		<td>
			не
менее 
12 лет
		</td>
		<td>
			<img src="/img/greentea.png" />
			<ul>
		<ul>
				<li>Зима: натуральная шерсть мериноса</li>
				<li>Антистатическая прослойка</li>
				<li>Прослойка из белого хлопка</li>
				<li>Основной слой - Eliocel 60</li>
				<li>Прослойка</li>
				<li>Биэластичная хлопковая ткань</li>
			</ul>
			</ul>
		</td>
		<td>
			<ul style="font-size:12px;">
				<li>Пропитка тканей экстрактом зеленого чая</li>
				<li>Износостойкий, практичный, дышащий</li>
				<li>Тонизирующее, релаксирующее воздействие</li>
	

			</ul>
		</td>
	</tr>
	
<tr id="hnb_closetab2">
	<td class="colorbkfb" colspan="1">
		<div  onclick="document.getElementById(\'hnb_closetab2\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis2\').style.display=\'table-row\';">открыть</div>
	</td>
	<td colspan="6">
		<span>Merino Green Tea</span>
	</td>
</tr>
	<tr id="hnb_tabsosdis3">
		<td class="imgtovkup">
		<div id="hnb_butdisplblock3" onclick="document.getElementById(\'hnb_tabsosdis3\').style.display=\'none\'; document.getElementById(\'hnb_closetab3\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">Bamboo</span>
			<a href="/img/product/big/Bamboo.jpg" class="boxer"><img src="/img/product/very_small/Bamboo.jpg" /></a>
			<div>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/">
						Подробно
					</a>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/">
						Купить матрас
					</a>
			</div>
			<div>
				Цена: <span class="productPrice3">25 800</span> руб.
			</div>
		</td>
		<td class="trbkeee">
				Производство Италия;<br/>
Ортопедический;<br/>
Вакумный;<br/>
Двусторонний: <br/>
Зима/Лето
<br /><br />
Сертификаты:
Ростест, международные. <br/><br/>
Рекомендации: НИИ Приорова
		</td>
		<td class="trbkeee">
			умеренно жесткий
		</td>
		<td class="trbkeee">
			17 см 
		</td>
		<td class="trbkeee">
			не
менее 
12 лет
		</td>
		<td class="trbkeee">
			<img src="/img/greentea.png">
			<ul>
		        <li>Зимняя сторона: шерсть тонкорунного мериноса</li>
				<li>Гипоаллергенный слой</li>
				<li>Изоляционный слой</li>
				<li>Прослойка из белого хлопка</li>
				<li>Eliocel 60</li>
				<li>Ткань с добавлением волокон бамбука</li>
			</ul>
		</td>
		<td class="trbkeee">
			<ul style="font-size:12px;">
				<li>Волокна бамбука</li>
				<li>Мощный антибактериальный эффект</li>
				<li>Износостойкий, практичный</li>

			</ul>
		</td>
	</tr>
	
	<tr id="hnb_closetab3">
	<td colspan="1">
		<div onclick="document.getElementById(\'hnb_closetab3\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis3\').style.display=\'table-row\';"> открыть</div>
	</td>
	<td  class="trbkeee" colspan="6">
		<span class="hnb_textdistit">Bamboo</span>
	</td>
</tr>
	
	<tr id="hnb_tabsosdis4">
		<td class="imgtovkup colorbkfb">
		<div id="hnb_butdisplblock4" onclick="document.getElementById(\'hnb_tabsosdis4\').style.display=\'none\'; document.getElementById(\'hnb_closetab4\').style.display=\'table-row\';">скрыть</div>

		<span class="block_firstna">WaterLattex</span>
			<a href="/img/product/big/WaterLattex.jpg" class="boxer"><img src="/img/product/very_small/WaterLattex.jpg" /></a>
			<div>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/WATERLATTEX/">
						Подробно
					</a>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/WATERLATTEX/">
						Купить матрас
					</a>
			</div>
			<div>
				Цена: <span class="productPrice4">34 800</span> руб.
			</div>
		</td>
		<td>
				Производство Италия;<br/>
Ортопедический;<br/>
Вакумный;<br/>
Двусторонний: <br/>
Зима/Лето
<br /><br />
Сертификаты:
Ростест, международные. <br/><br/>
Рекомендации: НИИ Приорова
		</td>
		<td>
			умеренно мягкий 
комфортный
		</td>
		<td>
			18 см 
		</td>
		<td>
			не
менее 
15 лет
		</td>
		<td>
			<img src="/img/snewcomfort.png">
			<ul>
				<li>Зимняя сторона: шерсть тонкорунного мериноса</li>
				<li>Гипоаллергенный слой</li>
				<li>Изоляционный слой</li>
				<li>Прослойка из белого хлопка</li>
				<li>Watercell 50</li>
				<li>Летняя сторона: 100% хлопок</li>
			</ul>
		</td>
		<td>
			<ul style="font-size:12px;">
				<li>Молекулы воды + натуральный латекс</li>
				<li>Мощное профилактическое средство</li>
				<li>Особенно удобен для сна на боку</li>
				<li>Как мерино, только долговечнее, мягче и комфортнее</li>

			</ul>
		</td>
	</tr>
	
<tr id="hnb_closetab4">
	<td class="colorbkfb" colspan="1">
		<div onclick="document.getElementById(\'hnb_closetab4\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis4\').style.display=\'table-row\';"> открыть</div>
	</td>
	<td colspan="6">
		<span class="hnb_textdistit">WaterLattex</span>
	</td>
</tr>
	
	<tr id="hnb_tabsosdis5">
		<td class="imgtovkup">
		<div id="hnb_butdisplblock5" onclick="document.getElementById(\'hnb_tabsosdis5\').style.display=\'none\'; document.getElementById(\'hnb_closetab5\').style.display=\'table-row\';">скрыть</div>

		<span class="block_firstna">New NaturComfort</span>
			<a href="/img/product/big/New NaturComfort.jpg" class="boxer"><img src="/img/product/very_small/New NaturComfort.jpg" /></a>
			<div>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/">
						Подробно
					</a>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/">
						Купить матрас
					</a>
			</div>
			<div>
				Цена: <span class="productPrice5">39 300</span> руб.
			</div>
		</td>
		<td class="trbkeee">
				Производство Италия;<br/>
Ортопедический;<br/>
Вакумный;<br/>
Разработка 2014 года<br/>
Очень популярен в мире!

<br /><br />
Сертификаты:
Ростест, международные. <br/><br/>
Рекомендации: НИИ Приорова
		</td>
		<td class="trbkeee">
			ддовольно мягкий, комфортный
		</td>
		<td class="trbkeee">
			21 см 
		</td>
		<td class="trbkeee">
			не
менее 
15 лет
		</td>
		<td class="trbkeee">
			<img src="/img/naturcomfort.png">
			<ul>
				<li>Терморегулирующая ткань 
Lenpur</li>
				<li>Гипоаллергенный слой</li>
				<li>Изоляционный слой</li>
				<li>Memoform Magnifoam (2 см)</li>
				<li>Eliosoft</li>
				<li>Терморегулирующая ткань 
Lenpur</li>
			</ul>
		</td>
		<td class="trbkeee">
			<ul style="font-size:12px;">
				<li>Древесные волокна</li>
				<li>Необыкновенно мягкий</li>
				<li>эффект ПАМЯТИ</li>
				<li>разработка 2014 года</li>
				<li>Ткань с технологией Lenpur</li>

			</ul>
		</td>
	</tr>
	
<tr id="hnb_closetab5">
	<td colspan="1">
		<div onclick="document.getElementById(\'hnb_closetab5\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis5\').style.display=\'table-row\';"> открыть</div>
	</td>
	<td  class="trbkeee" colspan="6">
		<span class="hnb_textdistit">New NaturComfort</span>
	</td>
</tr>
	
	<tr id="hnb_tabsosdis6">
		<td class="imgtovkup colorbkfb">
		<div id="hnb_butdisplblock6" onclick="document.getElementById(\'hnb_tabsosdis6\').style.display=\'none\'; document.getElementById(\'hnb_closetab6\').style.display=\'table-row\';">скрыть</div>

		<span class="block_firstna">Natur Baci</span>
			<a href="/img/product/big/Natur Baci.jpg" class="boxer"><img src="/img/product/very_small/Natur Baci.jpg" /></a>
			<div>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/natur-baci-mattress/">
						Подробно
					</a>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/natur-baci-mattress/">
						Купить матрас
					</a>
			</div>
			<div>
				Цена: <span class="productPrice6">61 800</span> руб.
			</div>
		</td>
		<td>
				Производство Италия;<br/>
Ортопедический;<br/>
Вакумный;<br/>
Матрас для двоих
<br /><br />
Сертификаты:
Ростест, международные. <br/><br/>
Рекомендации: НИИ Приорова
		</td>
		<td>
			самый мягкий, комфортный
		</td>
		<td>
			22 см 
		</td>
		<td>
			не
менее 
15 лет
		</td>
		<td>
			<img src="/img/baci.png">
			<ul>
				<li>Съемный чехол</li>
				<li>Memoform 2 см</li>
				<li>Гипоаллергенный слой</li>
				<li>Изоляционный слой из прессованного натурального хлопка</li>
				<li>Eliosoft 19 см</li>
			
			</ul>
		</td>
		<td>
			<ul style="font-size:12px;">
				<li>Индивидуальные потребности</li>
				<li>Необыкновенно мягкий, упругий, плотный, долговечный</li>
				<li>Съемный чехол</li>
				<li>Эффект памяти</li>

			</ul>
		</td>
	</tr>
	
<tr id="hnb_closetab6">
	<td class="colorbkfb" colspan="1">
		<div onclick="document.getElementById(\'hnb_closetab6\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis6\').style.display=\'table-row\';"> открыть</div>
	</td>
	<td colspan="6">
		<span class="hnb_textdistit">Natur Baci</span>
	</td>
</tr>
	
	<tr id="hnb_tabsosdis7">
		<td class="imgtovkup">
		<div id="hnb_butdisplblock7" onclick="document.getElementById(\'hnb_tabsosdis7\').style.display=\'none\'; document.getElementById(\'hnb_closetab7\').style.display=\'table-row\';">скрыть</div>

		<span class="block_firstna">Memo Merino</span>
			<a href="/img/product/big/Memo Merino.jpg" class="boxer"><img src="/img/product/very_small/Memo Merino.jpg" /></a>
			<div>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/MEMO-MERINO/">
						Подробно
					</a>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/MEMO-MERINO/">
						Купить матрас
					</a>
			</div>
			<div>
				Цена: <span class="productPrice7">54 300</span> руб.
			</div>
		</td>
		<td class="trbkeee">
				Производство Италия;<br/>
Ортопедический;<br/>
Анатомический;<br/>
Вакумный;<br/>
Матрас нового поколения
<br /><br />
Сертификаты:
Ростест, международные. <br/><br/>
Рекомендации: НИИ Приорова
		</td>
		<td class="trbkeee">
			достаточно мягкий, 
комфортный
		</td>
		<td class="trbkeee">
			20 см 
		</td>
		<td class="trbkeee">
			не
менее 
15 лет
		</td>
		<td class="trbkeee">
			<img src="/img/memo.png">
			<ul>
				<li>Терморегулирующая ткань Coolmax</li>
				<li>Антистатическая прослойка</li>
				<li>Гипоаллергенный слой</li>
				<li>Memoform Magnifoam (6 см)</li>
				<li>Изоляционный слой</li>
				<li>Eliocel 40</li>
				<li>Терморегулирующая ткань Coolmax</li>
			</ul>
		</td>
		<td class="trbkeee">
			<ul style="font-size:12px;">
				<li>Эффект ПАМЯТИ</li>
				<li>Эффект невесомости</li>
				<li>Необыкновенно КОМФОРТНЫЙ</li>
				<li>Слой Memoform целых 6 см!</li>
				<li>Основа Airyform - дышащий эффект</li>
				<li>Терморегуляция</li>
				<li>Ткань с технологией Coolmax</li>

			</ul>
		</td>
	</tr>
<tr id="hnb_closetab7">
	<td colspan="1">
		<div onclick="document.getElementById(\'hnb_closetab7\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis7\').style.display=\'table-row\';"> открыть</div>
	</td>
	<td  class="trbkeee" colspan="6">
		<span class="hnb_textdistit7">Memo Merino</span>
	</td>
</tr>
	


</table>

</div></div>
			'
		),
		array(
			'address' => 'virtus',
			'parent_address' => 'elitnye-matrasy',
			'parent_name' => '',
			'name' => '',
			'no_breadcrumbs' => true,
			'left_sidebar' => '',
			'title' => 'Коллекция Virtus — эксклюзивные матрасы! | Магнифлекс',
			'description' => '',
			'keywords' => '',
			'text' => '
				<div class="hnb_elite_content">
	<div class="hnb_elcont1">
		<img src="/img/virtus.jpg" class="elite_img_top" alt="" />
		<span id="hnb_elcont1title">
			Коллекция <b>Virtus</b> — эксклюзивные матрасы!
		</span>
		<br />
		<hr id="hnb_minhr" />
		<span class="hnb_elcont1text">
			
			Роскошные ортопедические матрасы  - самое лучшее,<br />
что может предложить Вам современная индустрия<br />
здорового сна<br />
		</span>
			 <br /><br />
		<span class="hnb_elcont1text2">
			Самые совершенные технологии!<br />
 Только лучшие ткани и материалы!<br />
		</span>
		<div class="hnb_imgefel">
		</div>
		<div class="strbott">
		</div>
		<div class="strbott bottom_copy">
		</div>
	</div>
	<div class="hnb_elcont2">
		<!--<div id="hnb_elcont2top">
		</div>
		<span>MagniGel -<br />
сердце матраса</span>-->
<span class="hnb_bigtytles">Преимущества матрасов коллекции Virtus</span>
		<div  style="clear:both;"></div>
		<div id="hnb_3nelement">
			<div class="hnb_3nelementli">
				<img src="/img/dih.png" />
				<div style="clear:both;"></div>
				<span>Невероятно дышащий.</span><br />
				
				используется самая современная разработка Breeze (Бриз). Ультра проницаемые свойства. Не нагревается от соприкосновения с телом
			</div>
			<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 0px; opacity: 1;">
				<img style="margin-top: -6px;" src="/img/ortopedef.png">
				<div style="clear:both;"></div>
				<span>Ортопедический эффект</span><br />
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
		<div id="hnb_staryefekt" style="clear:both; height:0px !important"></div>
		
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
		<hr class="hnb_myhrled" />
		<span class="hnb_bigtytles">
			Эксклюзивные детали
		</span>
		<br />
		<br />
		<div id="coin-slider">
								<a href="#" target="_blank">
									<img src="/img/PAS_1497.jpg" />
											<span>
								
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/Virtus-2.jpg" />
											<span>
											
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/Virtus-3.jpg" />
											<span>
											 
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/Virtus-4.jpg" />
											<span>
										
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/Virtus-6.jpg" />
											<span>
										
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/Virtus-7.jpg" />
											<span>
				Все материалы, используемые при создании матраса, проходят независимую экспертную проверку на аллергены. Сертификат OEKO!
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/Virtus-9.jpg" />
											<span>

											</span>
								</a>
								
		</div>
	</div>
	<hr class="hnb_myhrled" />
	<div class="hnb_elcont6">
		
		<span class="hnb_bigtytles">В коллекции Virtus представлена только одна модель</span>
		<table class="hnb_elitmatrastbl" cellspacing="0">
			<tr class="">
				<td class="svoistvo">
					<span>СВОЙСТВА</span>
					
				</td>
				<td class="imgtovkup">
					<span>Virtus 30</span> 
					<a href="/img/product/big/Virtus%2030.jpg" class="boxer">
						<img src="/img/product/very_small/Virtus%2030.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/Virtus-30/">
						Купить матрас
					</a>
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Высота
				</td>
				<td class="">
					<span class="hnb_fontplpx">30 см</span>
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Чехол
				</td>
				<td class="">
					Viscose&reg; satin, съемный, 3D ткань, терморегулирующий, невероятно проницаемый, дышащий, 2-х сторонний, исключительно натуральный!
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Международная гарантия
				</td>
				<td class="">
					20 лет (это только гарантия, срок эксплуатации гораздо выше!)
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Сертификаты 
				</td>
				<td class="">
					РОСТЕСТ, СДЕЛАНО В ИТАЛИИ
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Уровень комфорта
				</td>
				<td class="">
					Комфортнейший
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Свойства
				</td>
				<td class="">
					Эксклюзивный, Ортопедический, Анатомический, Терморегулируемый, Лучшая поддержка
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Состав
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/virtuoso30.jpg">
					<ul style="font-size:13px;">
						<li>Viscose satin</li>
						<li>Кашемир, отборная шерсть тонкорунного мериноса, отборная верблюжья шерсть, натуральный конский волос</li>
						<li>Memoform HD 4 см - трехмерный эффект памяти</li>
						<li>Слой Eliosoft Breeze 16 cм</li>
						<li>Memoform HD 4 см - трехмерный эффект памяти</li>
						<li>Летняя сторона: Лучший Шелк, Лен, Хлопок премиальных марок</li>
					</ul>
				</td>
				
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Преимущества
				</td>
				<td class="">
					Эксклюзивный, Лимитированная серия!
					
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Цена: <span>выберите размер</span> 
					<select class="inputA" id="doborField">
					  <option value="294 100">160x200</option>
					  <option value="330 800">180x200</option>
					  <option value="367 500">200x200</option>
				</td>
				<td class="">
					<span class="productPrice1">294 100</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/Virtus-30/">Купить матрас ></a>
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
				
			</tr>
		</table>
		<!--
		<hr class="hnb_myhrled" />
		<span class="hnb_bigtytles">Ткани и Материалы</span>
		<img src="/img/menyelement.png" alt="" class="img_tm" />
		-->
	</div>
</div>
			'
		),
		array(
			'address' => 'harmony',
			'parent_address' => 'elitnye-matrasy',
			'parent_name' => '',
			'name' => '',
			'no_breadcrumbs' => true,
			'left_sidebar' => '',
			'title' => 'Коллекция Harmony — королевская роскошь! | Магнифлекс',
			'description' => '',
			'keywords' => '',
			'text' => '
				<div class="hnb_elite_content">
	<div class="hnb_elcont1">
	<img src="/img/harmony.jpg" class="elite_img_top" alt="" />
		<span id="hnb_elcont1title">
			Коллекция <b>Harmony</b> — королевская роскошь!
		</span>
		<br />
		<hr id="hnb_minhr" />
		<span class="hnb_elcont1text">
			
			На таких матрасах спят члены королевских семей<br /> 
и элита мирового общества
		</span>
			 <br /><br />
		<span class="hnb_elcont1text2">
			Роскошные матрасы Royal класса! 
		</span>
		<div class="hnb_imgefel">
		</div>
		<div class="strbott">
		</div>
		<div class="strbott bottom_copy">
		</div>
	</div>
	<div class="hnb_elcont2">
		<!--<div id="hnb_elcont2top">
		</div>
		<span>MagniGel -<br />
сердце матраса</span>-->
<span class="hnb_bigtytles">Преимущества матрасов коллекции Harmony</span>
		<div  style="clear:both;"></div>
		<div id="hnb_3nelement">
<div class="hnb_3nelementli">
				<img style="margin-top: 17px;" src="/img/palm.png" />
				<div style="clear:both;"></div>
				<span>Экстракомфортный, Моделируемый</span><br />
				Технология Dual Core. Универсальный. 4 комбинации комфорта!
			</div>
			<div class="hnb_3nelementli">
				<img style="margin-top: 23px;" src="/img/ortopedef.png" />
				<div style="clear:both;"></div>
				<span>Ортопедический эффект</span><br />
				Максимально возможный ортопедический эффект. Комфортнейшая ортопедическая поддержка!

			</div>
			<div class="hnb_3nelementli">
				<img src="/img/anatomefekt.png" />
				<div style="clear:both;"></div>
				<span>Анатомический эффект</span><br />
			Идеальный пятизвездочный анатомический эффект. Максимальное расслабление во время сна!
			</div>
		</div>
		<div id="hnb_staryefekt" style="clear:both; height:0px !important"></div>
		
	</div>
	<div style="clear:both;"></div>
	<hr class="hnb_myhrled" />




		<span class="hnb_bigtytles">
			Именно на таких матрасах спят члены королевских семей <br/>
 и элита мирового общества 
		</span>
		<br />
		<span class="hnb_eytext">
			Идеальный матрас с потрясающими свойствами, настоящее воплощение мечты! Высокотехнологичный матрас Premium класса, обладающий 4-мя уровнями комфорта (жесткий, умеренный, идеальный, комбинированный), обеспечивает потребителю возможность самостоятельно смоделировать оптимальный уровень комфорта. Высокий анатомический и ортопедический эффекты делают этот матрас идеальной системой комфортного сна и отдыха.
		</span>
		<div id="coin-slider">
								<a href="#" target="_blank">
									<img src="/img/harmony-1.jpg" />
											<span>
											 Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/harmony-2.jpg" />
											<span>
										 Эксклюзивные детали
										</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/harmony-3.jpg" />
											<span>
									 Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/harmony-4.jpg" />
											<span>
											 Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/harmony-5.jpg" />
											<span>
										 Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/harmony-6.jpg" />
											<span>
									 Эксклюзивные детали
											</span>
								</a>
							

		</div>

<br/> <br/>
	<hr class="hnb_myhrled" />
	<div class="hnb_elcont3">



	<span class="hnb_bigtytles">
			Разные половинки – разная жесткость (Dual Core) 
		</span>
		<br />
		<span class="hnb_eytextoutlast">
			Технология Dual Core позволяет изменить жесткость половинки матраса за считанные минуты. Суть технологии достаточно проста: двуспальные матрасы состоят из двух блоков. Для смены жесткости необходимо расстегнуть  чехол (на молнии) и перевернуть на другую сторону блок:  одна сторона которого жесткая, другая – мягкая.   
<br /><br />
Несмотря на то, что матрас состоит из двух разных блоков, стык между ними абсолютно незаметен и не мешает сну благодаря специально разработанному плотному чехлу, включающего в себя 2 см слой инновационного материала с эффектом памяти – Memoform.
		</span>
		<img src="/img/armonia-dual.jpg" />
		<br /><br />
		<span class="hnb_eytextoutlast">
Это очень удобно и практично. Если один человек предпочитает мягкий матрас, а его партнер – жесткий, то им достаточно повернуть блоки в нужные им положения и наслаждаться комфортом.
		</span>
		<br /><br /><br />








	<hr class="hnb_myhrled" />
	<div class="hnb_elcont6">
		
		<span class="hnb_bigtytles">Модели из коллекции Harmony</span>
		<table class="hnb_elitmatrastbl">
			<tr class="">
				<td class="svoistvo">
					<span>СВОЙСТВА</span>
					
				</td>
				<td class="imgtovkup">
					<span>Exchange Memoform Dual</span> 
					<a href="/img/product/big/Exchange%20Memoform%20Dual.jpg" class="boxer">
						<img src="/img/product/very_small/Exchange%20Memoform%20Dual.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/Exchange-Memoform-Dual/">
						Купить матрас
					</a>
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Высота
				</td>
				<td class="">
					<span class="hnb_fontplpx">32 см (самый высокий!)</span>
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Чехол
				</td>
				<td class="">
					Viscose&reg;, съемный.
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Международная гарантия
				</td>
				<td class="">
					12 лет
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Сертификаты 
				</td>
				<td class="">
					OEKO, РОСТЕСТ, СДЕЛАНО В ИТАЛИИ
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Уровень комфорта
				</td>
				<td class="">
					Средней жесткости / Жесткий<br />Моделируемый: 4 комбинации комфорта
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Свойства
				</td>
				<td class="">
					Ортопедический, Анатомический, эффект Памяти, Дышащий, Dual Comfort
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Состав
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/armonia memoformdual.jpg">
					<ul style="font-size:13px;">
						<li>Viscose termo</li>
						<li>Слой Memoform 2 cм</li>
						<li>Слой Super Soft fibre</li>
						<li>Слой Magnigel Foam (6 cм! ШЕСТЬ!)</li>
						<li>Слой Eliosoft 11 cм</li>
						<li>Слой Elioform 11 cм</li>
					</ul>
				</td>
				
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Преимущества
				</td>
				<td class="">
					Дышащий, Экстракомфортный<br />
					
					
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Цена: <span>выберите размер </span> 
					<select class="inputA" id="doborField">
					  <option value="124 600">160x200</option>
					  <option value="140 100">180x200</option>
					  <option value="155 700">200x200</option>
				</td>
				<td class="">
					<span class="productPrice1">124 600</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/Exchange-Memoform-Dual/">Купить матрас ></a>
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
			</tr>
		
		</table>
		<!--
		<hr class="hnb_myhrled" />
		<span class="hnb_bigtytles">Ткани и Материалы</span>
		<img src="/img/menyelement.png" alt="" class="img_tm" />
		-->
	</div>
</div>
</div>
			'
		),
		array(
			'address' => 'magnificient',
			'parent_address' => 'elitnye-matrasy',
			'parent_name' => '',
			'name' => '',
			'no_breadcrumbs' => true,
			'left_sidebar' => '',
			'title' => 'Коллекция Magnificent — восторг и восхищение! | Магнифлекс',
			'description' => '',
			'keywords' => '',
			'text' => '
				<div class="hnb_elite_content">
	<div class="hnb_elcont1">
	<img src="/img/magnificient.jpg" class="elite_img_top" alt="" />
		<span id="hnb_elcont1title" style="margin-top: 0px; opacity: 1;">
			Коллекция <b>Magnificent</b> — восторг и восхищение!
		</span>
		<br />
		<hr id="hnb_minhr">
		<span class="hnb_elcont1text" style="margin-left: 0px; opacity: 1;">
			
			Настоящее произведение искусства<br />
Обеспечивает идеальный комфорт во время сна
		</span>
			 <br /><br />
		<span class="hnb_elcont1text2" style="margin-left: 0px; opacity: 1;">
			Высочайшие анатомические свойства!
		</span>
		<div class="hnb_imgefel" style="position: relative; bottom: 0px; opacity: 1;">
		</div>
		<div class="strbott">
		</div>
		<div class="strbott bottom_copy">
		</div>
	</div>
	<div class="hnb_elcont2">
		<!--<div id="hnb_elcont2top">
		</div>
		<span>MagniGel -<br />
сердце матраса</span>-->
<span class="hnb_bigtytles">Преимущества матрасов коллекции Magnificent</span>
		<div style="clear:both;"></div>
		<div id="hnb_3nelement">
			<div class="hnb_3nelementli">
				<img style="
    margin-top: 26px;
" src="/img/medvrest.png" alt="Мягкий матрас">
				<div style="clear:both;"></div>
				<span>Мягкий, Комфортный</span><br />
				Очень мягкий и комфортный - один из самых мягких матрасов Magniflex  

			</div>
			<div class="hnb_3nelementli">
				<img style="margin-top: 23px;" src="/img/ortopedef.png">
				<div style="clear:both;"></div>
				<span>Ортопедический эффект</span><br />
				Не смотря на мягкость, это ортопедический матрас, свойства подтверждены международными лабораториями 

			</div>
			<div class="hnb_3nelementli">
				<img src="/img/anatomefekt.png">
				<div style="clear:both;"></div>
				<span>Анатомический эффект. Outlast</span><br />
				Удобный, анатомически правильный матрас! Чехол с технологией Outlast.
			</div>
		</div>
		<div id="hnb_staryefekt" style="clear:both; height:0px !important"></div>
		
	</div>
	<div style="clear:both;"></div>
	<hr class="hnb_myhrled">
	<span class="hnb_bigtytles">
			Разные половинки – разная жесткость (Dual Core) 
		</span>
		<br />
		<span class="hnb_eytextoutlast">
			Технология Dual Core позволяет изменить жесткость половинки матраса за считанные минуты. Суть технологии проста: двуспальные матрасы состоят из двух блоков. Для смены жесткости необходимо расстегнуть  чехол (на молнии) и перевернуть на другую сторону блок. Все просто: одно сторона блока жесткая, а другая – мягкая.   
<br /><br />
Несмотря на то, что матрас состоит из двух разных блоков, стык между ними абсолютно незаметен и не мешает сну благодаря специально разработанному плотному чехлу, включающего в себя 2 см слой инновационного материала с эффектом памяти – Memoform.
		</span>
		<img src="/img/DUAL-COMFORT-magnificent.jpg">
		<br /><br />
		<span class="hnb_eytextoutlast">
Это очень удобно и практично. Если один человек предпочитает мягкий матрас, а его партнер – жесткий, то им достаточно повернуть блоки в нужные им положения и наслаждаться комфортом.
		</span>
		<br /><br /><br />
	<hr class="hnb_myhrled">
	<div class="hnb_elcont3">
		<span class="hnb_bigtytles">
			Эксклюзивная модель 
		</span>
		<br />
		<span class="hnb_eytext">
			Высокотехнологичный самомоделирующийся матрас Premium класса, изготовленный с применением инновационных материалов и технологий. Обеспечивает потребителю максимальный комфорт, высокий анатомический и ортопедический эффекты, а также создает идеальный микроклимат для сна на поверхности матраса.
		</span>
		<div id="coin-slider">
								<a href="#" target="_blank">
									<img src="/img/magnificent-1.jpg" />
											<span>
											
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/magnificent-2.jpg" />
											<span>
											
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/magnificent-3.jpg" />
											<span>
											
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/magnificent-4.jpg" />
											<span>
											
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/magnificent-5.jpg" />
											<span>
											
											</span>
								</a>
								
								
		</div>
	<hr class="hnb_myhrled">
	<div class="hnb_elcont6">
		
		<span class="hnb_bigtytles">Модели из коллекции Magnificent</span>
		<table class="hnb_elitmatrastbl">
			<tbody><tr class="">
				<td class="svoistvo">
					<span>СВОЙСТВА</span>
					
				</td>
				<td class="imgtovkup">
					<span>Magnificent 12</span> 
					<a href="/img/product/big/Magnificent%2012.jpg" class="boxer">
						<img src="/img/product/very_small/Magnificent%2012.jpg">
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/Magnificent-12/">
						Купить матрас
					</a>
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Высота
				</td>
				<td class="">
					<span class="hnb_fontplpx">30 см</span>
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Чехол
				</td>
				<td class="">
					Viscose® Outlast - терморегулирующий, съемный, 3D ткань.
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Международная гарантия
				</td>
				<td class="">
					12 лет
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Сертификаты 
				</td>
				<td class="">
					OEKO, РОСТЕСТ, СДЕЛАНО В ИТАЛИИ
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Уровень комфорта
				</td>
				<td class="">
					Средней мягкости / Очень Мягкий,<br />Моделируемый
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Свойства
				</td>
				<td class="">
					Ортопедический, Анатомический, Терморегулирующий, Эффект Памяти
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Состав
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/magnificodual12.jpg">
					<ul style="font-size:13px;">
						<li>Viscose® Outlast</li>
						<li>Слой Memoform 2 cм</li>
						<li>Слой Super Soft fibre</li>
						<li>Слой Memoform 5 cм</li>
						<li>Слой Elioform 7 cм</li>
						<li>Слой Eliosoft 7 cм</li>
						<li>Слой Memoform 5 cм</li>
					</ul>
				</td>
				
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Преимущества
				</td>
				<td class="">
					Дышащий, Экстракомфорт, Эффект памяти, <br />
					 Memoform 12 см - это главное преимущество!<br />
					
					
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Цена: <span>выберите размер </span> 
					<select class="inputA" id="doborField">
					  <option value="119 400">160x200</option>
					  <option value="134 300">180x200</option>
					  <option value="149 300">200x200</option>
				</select></td>
				<td class="">
					<span class="productPrice1">119 400</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/Magnificent-12/">Купить матрас &gt;</a>
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. <br /> Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
				
			</tr>
		</tbody></table>
		<!--
		<hr class="hnb_myhrled">
		<span class="hnb_bigtytles">Ткани и Материалы</span>
		<img src="/img/menyelement.png" alt="" class="img_tm" />
		-->
	</div>
</div>
			'
		),
		array(
			'address' => 'imperiale',
			'parent_address' => 'elitnye-matrasy',
			'parent_name' => '',
			'name' => '',
			'no_breadcrumbs' => true,
			'left_sidebar' => '',
			'title' => 'Коллекция Imperiale — аристократические матрасы! | Магнифлекс',
			'description' => '',
			'keywords' => '',
			'text' => '
				<div class="hnb_elite_content">
	<div class="hnb_elcont1">
		<img src="/img/imperiale.jpg" class="elite_img_top" alt="" />
		<span id="hnb_elcont1title">
			Коллекция <b>Imperiale</b> — аристократические матрасы!
		</span>
		<br />
		<hr id="hnb_minhr" />
		<span class="hnb_elcont1text">
			
			Высокий анатомический эффект +<br />
совершенные ортопедически свойства<br />
= идеальная система комфортного сна!
		</span>
			 <br /><br />
		<span class="hnb_elcont1text2">
			Созданны для тех, кто предпочитает Роскошь и Простор
		</span>
		<div class="hnb_imgefel">
		</div>
		<div class="strbott">
		</div>
		<div class="strbott bottom_copy">
		</div>
	</div>
	<div class="hnb_elcont2">
		<!--<div id="hnb_elcont2top">
		</div>
		<span>MagniGel -<br />
сердце матраса</span>-->
<span class="hnb_bigtytles">Преимущества матрасов коллекции Imperiale</span>
	
  
  	<div  style="clear:both;"></div>
		<div id="hnb_3nelement">
			<div class="hnb_3nelementli">
				<img style="margin-top: -13px;" src="/img/fire_ice-ico.jpg" />
				<div style="clear:both;"></div>
				<span>Премиум класс</span><br />
				
			Роскошные матрасы king size - американский стандарт люксовых брендов. 
			</div>
			<div class="hnb_3nelementli">
				<img style="margin-top: 23px;" src="/img/ortopedef.png" />
				<div style="clear:both;"></div>
				<span>Ортопедический эффект</span><br />
		Великолепный пятизвездочный ортопедический эффект. Комфортнейшая ортопедическая поддержка! 

			</div>
			<div class="hnb_3nelementli">
				<img src="/img/anatomefekt.png" />
				<div style="clear:both;"></div>
				<span>Анатомический эффект</span><br />
		Идеальный пятизвездочный анатомический эффект. Максимальное расслабление во время сна!

			</div>
		</div>
		<div id="hnb_staryefekt" style="clear:both; height:0px !important"></div>
		
	</div>
	<div style="clear:both;"></div>
	<hr class="hnb_myhrled" />
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
									<img src="/img/imperial-1.jpg" />
											<span>
											
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/imperial-2.jpg" />
											<span>
											
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/imperial-3.jpg" />
											<span>
						
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/imperial-4.jpg" />
											<span>
										
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/imperial-5.jpg" />
											<span>
									
											</span>
								</a>
								
		</div>
		<hr class="hnb_myhrled" />








	<div class="hnb_elcont6">
		
		<span class="hnb_bigtytles">Модели из коллекции Imperiale</span>
		<table class="hnb_elitmatrastbl">
			<tr class="">
				<td class="svoistvo">
					<span>СВОЙСТВА</span>
					
				</td>
				<td class="imgtovkup">
					<span>Imperiale 33</span> 
					<a href="/img/product/big/Imperiale%2033.jpg" class="boxer">
						<img src="/img/product/very_small/Imperiale%2033.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/Imperiale-33/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>Imperiale 28</span>
					<a href="/img/product/big/Imperiale%2028.jpg" class="boxer">
						<img src="/img/product/very_small/Imperiale%2028.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/Imperiale-28/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>Imperiale 24</span>
					<a href="/img/product/big/Imperiale%2024.jpg" class="boxer">
						<img src="/img/product/very_small/Imperiale%2024.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/Imperiale-24/">
						Купить матрас
					</a>
					
					
					
				</td>
			</tr>
			<tr class="">
				<td class="">
					Высота
				</td>
				<td class="">
					<span class="hnb_fontplpx">33 см</span>
				</td>
				<td class="">
					<span class="hnb_fontplpx">28 см</span>
				</td>
				<td class="">
					<span class="hnb_fontplpx">24 см</span>
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					Чехол
				</td>
				<td class="">
					Viscose&reg; 
				</td>
				<td class="">
					Viscose&reg;  
				</td>
				<td class="">
					Viscose&reg;
				</td>
			</tr>
			<tr class="">
				<td class="">
					Международная гарантия
				</td>
				<td class="">
					12 лет
				</td>
				<td class="">
					12 лет
				</td>
				<td class="">
					12 лет
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					Сертификаты 
				</td>
				<td class="">
					OEKO - РОСТЕСТ - СДЕЛАНО В ИТАЛИИ
				</td>
				<td class="">
					OEKO - РОСТЕСТ - СДЕЛАНО В ИТАЛИИ
				</td>
				<td class="">
					OEKO - РОСТЕСТ - СДЕЛАНО В ИТАЛИИ
				</td>
			</tr>
			<tr class="">
				<td class="">
					Уровень комфорта
				</td>
				<td class="">
					Мягкий,<br />Моделируемый
				</td>
				<td class="">
					Средней мягкости<br />Моделируемый
				</td>
				<td class="">
					Средней жесткости,<br />Моделируемый
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					Свойства
				</td>
				<td class="">
					Ортопедический, Анатомический <br/> Идеальная система комфортного сна
				</td>
				<td class="">
					Ортопедический, Анатомический  <br/> Идеальная система комфортного сна
				</td>
				<td class="">
					Ортопедический, Анатомический  <br/> Идеальная система комфортного сна
				</td>
			</tr>
			<tr class="">
				<td class="">
					Состав
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/impero33.jpg">
					<ul style="font-size:13px;">
						<li>Топер: Viscose + <br/>4 см MEMOSOFT</li>
            <li>Слой Super Soft fibre (мягкая фибра)</li>
						<li>Слой Memoform 5 cм</li>
            <li>Слой Eliosoft 5 cм</li>
						<li>Слой Airyform Elioform 17 cм</li>
					</ul>
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/impero28.jpg">
					<ul>
						<li>Топер: Viscose + <br/>4 см MEMOSOFT</li>
            <li>Слой Super Soft fibre (мягкая фибра)</li>
						<li>Слой Memoform 3 cм</li>
            <li>Слой Eliosoft 5 cм</li>
						<li>Слой Airyform Elioform 14 cм</li>
					</ul>
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/impero24.jpg">
					<ul>
						<li>Топер: Viscose + <br/>4 см MEMOSOFT</li>
            <li>Слой Super Soft fibre (мягкая фибра)</li>
						<li>Слой Memoform 3 cм</li>
            <li>Слой Eliosoft 3 cм</li>
						<li>Слой Airyform Elioform 12 cм</li>
						
					</ul>
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Преимущества
				</td>
				<td class="">
					 Дышащий, Экстракомфортный, <br/>Высочайший анатомический эффект, <br/>Чехол глубокой прошивки <br />
					 Memoform 5 см<br />
					 4 см MEMOSOFT
					
				</td>
				<td class="">
					Дышащий, Экстракомфортный, <br/>Высочайший анатомический эффект, <br/>Чехол глубокой прошивки <br />
					 Memoform 3 см<br />
					 4 см MEMOSOFT
					
				</td>
				<td class="">
					Дышащий, Экстракомфортный, <br/>Высочайший анатомический эффект, <br/>Чехол глубокой прошивки <br />
					Memoform 3 см<br />
					4 см MEMOSOFT
				</td>
			</tr>
			<tr class="">
				<td class="">
					Цена: <span>выберите размер </span> 
					<select class="inputA" id="doborField">
					  <option value="127 200,108 200,96 000">160x200</option>
					  <option value="143 200,121 600,102 000">180x200</option>
					  <option value="159 000,135 200,113 200">200x200</option>
					  
					</select>
				</td>
				<td class="">
					<span class="productPrice1">127 200</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/Imperiale-33/">Купить матрас ></a>
				</td>
				<td class="">
					<span class="productPrice2">108 200</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/Imperiale-28/">Купить матрас ></a>
				</td>
				<td class="">
					<span class="productPrice3">96 000</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/Imperiale-24/">Купить матрас ></a>
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
			</tr>
		</table>
		<!--
		<hr class="hnb_myhrled" />
		<span class="hnb_bigtytles">Ткани и Материалы</span>
		<img src="/img/menyelement.png" alt="" class="img_tm" />
		-->
	</div>
</div>
</div>
			'
		),
		array(
			'address' => 'comfort-delux',
			'parent_address' => 'elitnye-matrasy',
			'parent_name' => '',
			'name' => '',
			'no_breadcrumbs' => true,
			'left_sidebar' => '',
			'title' => 'Коллекция Comfort Delux — невероятно комфортные! | Магнифлекс',
			'description' => '',
			'keywords' => '',
			'text' => '
				<div class="hnb_elite_content">
	<div class="hnb_elcont1">
	<img src="/img/сomfort-delux.jpg" class="elite_img_top" alt="" />
		<span id="hnb_elcont1title">
			Коллекция <b>Comfort Delux</b> — невероятно комфортные!
		</span>
		<br />
		<hr id="hnb_minhr" />
		<span class="hnb_elcont1text">
			
			Необычайно комфортные ортопедические матрасы
		</span>
			 <br /><br />
		<span class="hnb_elcont1text2">
			Воплощение неподвластной времени элегантности
		</span>
		<div class="hnb_imgefel">
		</div>
		<div class="strbott">
		</div>
		<div class="strbott bottom_copy">
		</div>
	</div>
	<div class="hnb_elcont2">
		<!--<div id="hnb_elcont2top">
		</div>
		<span>MagniGel -<br />
сердце матраса</span>-->
<span class="hnb_bigtytles">Преимущества матрасов коллекции Comfort Delux</span>
		<div  style="clear:both;"></div>
		<div id="hnb_3nelement">
			<div class="hnb_3nelementli">
				<img style="margin-top: -13px;" src="/img/fire_ice-ico.jpg" />
				<div style="clear:both;"></div>
				<span>Эффект „Огонь и Лед”. Outlast</span><br />
			Идеальный микроклимат для сна. Терморегулирующий чехол с технологией Outlast!	
			
			</div>
			<div class="hnb_3nelementli">
				<img style="margin-top: 23px;" src="/img/ortopedef.png" />
				<div style="clear:both;"></div>
				<span>Ортопедический эффект</span><br />
				Максимальный пятизвездочный ортопедический эффект. Комфортнейшая ортопедическая поддержка!

			</div>
			<div class="hnb_3nelementli">
				<img src="/img/anatomefekt.png" />
				<div style="clear:both;"></div>
				<span>Анатомический эффект</span><br />
				Идеальный пятизвездочный анатомический эффект. Максимальное расслабление во время сна! 
			</div>
		</div>
		<div id="hnb_staryefekt" style="clear:both; height:0px !important"></div>
		
	</div>
	<div style="clear:both;"></div>
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
		<img src="/img/DUAL-COMFORT.jpg" />
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
									<img src="/img/comfort-1.jpg" />
											<span>
									Эксклюзивные детали	
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-2.jpg" />
											<span>
									Эксклюзивные детали			
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-3.jpg" />
											<span>
											Эксклюзивные детали	
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-4.jpg" />
											<span>
											Эксклюзивные детали	
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-5.jpg" />
											<span>
										Съемный чехол. Удобно моделировать, легко ухаживать. Можно стирать!	
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-6.jpg" />
											<span>
							Эксклюзивные детали	
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-7.jpg" />
											<span>
											Эксклюзивные детали	
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-8.jpg" />
											<span>
											Эксклюзивные детали	
											</span>
								</a>
								
		</div>
	</div>
	<hr class="hnb_myhrled" />
	<span class="hnb_bigtytles">
			Эффект “огонь и лед”. Технология Outlast 
		</span>
		<br />
		<span class="hnb_eytextoutlast">
			Для создания идеального микроклимата на поверхности матраса используется терморегулирующий чехол Viscose с использованием ткани Outlast. Этот материал был разработан в NASA и применяется в космических костюмах астронавтов.
<br /><br />
 Outlast - активная технология управления теплом и влагой, основаная на изменении фазы материалов, способных поглощать, хранить и выделять тепло для создания оптимального регулируемого микроклимата кожи человека. Волокна ткани включают в себя миллионы шариков из воска, "таящих" (уменьшающихся в размере) при температуре 36 градусов. При нагревании тела микрокапсулы в волокне уменьшаются в размерах, поглощая энергию (тепло) и охлаждают тело, а при замерзании микрокапсулы раскрываются, увеличиваются в размере, отдавая при этом накопленное в волокне тепло телу, согревая его. Такое волокно способно поглощать и хранить большое количество тепла, позволяя чехлу матраса сохранять максимальный температурный комфорт.
<br /><br />
Мягкая и нежная на ощупь ткань, похожая на шелк, обеспечивает приятные ощущения при контакте с кожей, обеспечивает максимальный термический комфорт на протяжении сна.
		</span>
		<div id="coin-slider2">
								<a href="#" target="_blank">
									<img src="/img/fire-ice-1.jpg" />
											<span>
										
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/fire-ice-2.jpg" />
											<span>
											
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/fire-ice-3.jpg" />
											<span>
										
											</span>
								</a>
								
								
		</div>
	<hr class="hnb_myhrled" />
	<div class="hnb_elcont6">
		
		<span class="hnb_bigtytles">Модели из коллекции Comfort Delux</span>
		<table class="hnb_elitmatrastbl">
			<tr class="">
				<td class="svoistvo">
					<span>СВОЙСТВА</span>
					
				</td>
				<td class="imgtovkup">
					<span>Comfort Plus 12</span> 
					<a href="/img/product/big/Comfort%20Plus%2012.jpg" class="boxer">
						<img src="/img/product/very_small/Comfort%20Plus%2012.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/Comfort-Plus-12/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>Comfort Plus 10</span>
					<a href="/img/product/big/Comfort%20Plus%2010.jpg" class="boxer">
						<img src="/img/product/very_small/Comfort%20Plus%2010.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/Comfort-Plus-10/">
						Купить матрас
					</a>
					
					
					
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Высота
				</td>
				<td class="">
					<span class="hnb_fontplpx">30 см</span>
				</td>
				<td class="">
					<span class="hnb_fontplpx">25 см</span>
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Чехол
				</td>
				<td class="">
					Viscose&reg;, съемный, 3D ткань, терморегулирующий
				</td>
				<td class="">
					Viscose&reg;, съемный, 3D ткань, терморегулирующий
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Международная гарантия
				</td>
				<td class="">
					12 лет
				</td>
				<td class="">
					12 лет
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Сертификаты 
				</td>
				<td class="">
					РОСТЕСТ, СДЕЛАНО В ИТАЛИИ
				</td>
				<td class="">
					РОСТЕСТ, СДЕЛАНО В ИТАЛИИ
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Уровень комфорта
				</td>
				<td class="">
					Средней мягкости / Мягкий,<br />Моделируемый
				</td>
				<td class="">
					Средней жесткости / Жесткий<br />Моделируемый
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Свойства
				</td>
				<td class="">
					Ортопедический, Анатомический, Огонь-лед, эффект Памяти
				</td>
				<td class="">
					Ортопедический, Анатомический, Огонь-лед, эффект Памяти
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Состав
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/comfortdeluxedual12.jpg">
					<ul style="font-size:13px;">
						<li>Viscose termo</li>
						<li>Слой Memoform 2 cм</li>
						<li>Слой Super Soft fibre</li>
						<li>Слой Memoform 3 cм</li>
						<li>Слой Elioform 3 cм</li>
						<li>Слой Eliosoft 21 cм</li>
					</ul>
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/comfortdual10.jpg">
					<ul>
		                <li>Viscose termo</li>
						<li>Слой Memoform 2 cм</li>
						<li>Слой Super Soft fibre</li>
						<li>Слой Memoform 5 cм</li>
						<li>Слой Elioform 17 cм</li>
						
					</ul>
				</td>
				
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Преимущества
				</td>
				<td class="">
					Дышащий, Экстракомфорт, максимальный ортопедический и анатомический эффекты<br />
					 Memoform 2+3 см<br />
					Magnigel Foam 5 см
					
				</td>
				<td class="">
					Дышащий, Экстракомфорт, максимальный ортопедический и анатомический эффекты<br />
					Memoform 2+3 см<br />
					Magnigel Foam 3 см
					
				</td>
				
			</tr>
			<tr class="">
				<td class="">
					Цена: <span>выберите размер </span> 
					<select class="inputA" id="doborField">
					  <option value="90 600,80 300">160x200</option>
					  <option value="102 000,90 300">180x200</option>
					  <option value="113 200,100 300">200x200</option>
					</select>
				</td>
				<td class="">
					<span class="productPrice1">90 600</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/Comfort-Plus-12/">Купить матрас ></a>
				</td>
				<td class="">
					<span class="productPrice2">80 300</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/Comfort-Plus-10/">Купить матрас ></a>
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
				
			</tr>
		</table>
		<!--
		<hr class="hnb_myhrled" />
		<span class="hnb_bigtytles">Ткани и Материалы</span>
		<img src="/img/menyelement.png" alt="" class="img_tm" />
		-->
	</div>
</div>
			'
		),
		array(
			'address' => 'freshgel',
			'parent_address' => 'elitnye-matrasy',
			'parent_name' => '',
			'name' => '',
			'no_breadcrumbs' => true,
			'left_sidebar' => '',
			'title' => 'Коллекция элитных матрасов FreshGel | Магнифлекс',
			'description' => '',
			'keywords' => '',
			'text' => '
				<div class="hnb_elite_content">
	<div class="hnb_elcont1 light-shadow">
		<img src="/img/baktop.jpg" class="elite_img_top" alt="" />
		<span id="hnb_elcont1title">
			Коллекция <b>FreshGel</b> — сны в облаках!
		</span>
		<br />
		<hr id="hnb_minhr" />
		<span class="hnb_elcont1text">
			Ортопедические элитные матрасы Premium класса<br />
			Легкие, воздушные, дышащие, необыкновенно проницаемые
		</span>
			 <br /><br />
		<span class="hnb_elcont1text2">
			Настоящее воплощение комфорта и удовольствие во сне!  
		</span>
		<div class="hnb_imgefel">
			<img src="/img/mstras.png" alt="" />
		</div>
		<div class="strbott">
		</div>
		<div class="strbott bottom_copy">
		</div>
	</div>
	<div class="hnb_elcont2">
		<div id="hnb_elcont2top" style="margin-top:-40px;">
			<img src="/img/elmentmatras.png" alt="" />
		</div>
		<span class="flashgel_span">MagniGel -<br />
сердце матраса</span>
		<div  style="clear:both;"></div>
		<div id="hnb_3nelement">
			<div class="hnb_3nelementli">
				<img src="/img/dih.png" />
				<div style="clear:both;"></div>
				<span>Дышащий</span><br />
				
				Необыкновенно проницаемый,
				дышащий материал. Мгновенно 
				впитывает влагу и капельки, 
				быстро испаряя их!
			</div>
			<div class="hnb_3nelementli">
				<img src="/img/snig.png" />
				<div style="clear:both;"></div>
				<span>Охлаждающий эффект</span><br />
				Не нагревается от соприкосновения 
				с телом: спать на нем прохладно  
				даже жарким летом. 
				Зимой не “отбирает” тепло! 

			</div>
			<div class="hnb_3nelementli">
				<img style="padding-top:7px;" src="/img/lux.png" />
				<div style="clear:both;"></div>
				<span>Эффект памяти</span><br />
				Непревзойденные 
				ортопедические свойства: 
				идеальная поддержка
				Вашего позвоночника! 
			</div>
		</div>
		<div id="hnb_staryefekt" style="clear:both; height:0px !important"></div>
		
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
									<img src="/img/m1.jpg" />
											<span>
											Magniflex FreshGel - просторные удобные а главное, максимально комфортные матрасы
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
									<img src="/img/fresh-gel-4.jpg" />
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
	<div class="hnb_elcont3">
		<span class="hnb_bigtytles">
Наполнитель Magnigel Foam
		</span>
		<br />
		<span class="hnb_eytext">
Инновационный материал "гелевой структуры", обладающий рядом полезных свойств. Во-первых он очень мягкий, но достаточно упругий, благодаря чему спать на такойм матрасе приятно и очень комфортно. Тело спящего не проваливается, а нежно обволакивается. Во-вторых, он очень проницаемый.  В-третьих, гелевая основа способна впитывать в себя влагу, капельки пота, которые благодаря пористой, дышащей структуре материала быстро испаряются. При этом поверхность матраса в любой ситуации остается сухой. В четвертых, Magnigel - материал достаточно нейтральный: он не нагревается от соприкосновения с телом человека, что особенно важно жарким летом. А зимой он не будет "отбирать" у вас тепло, следовательно, согреться значительно проще.
		</span>
	</div>
	<hr class="hnb_myhrled" />
	
	<div class="hnb_elcont6">
		
		<span class="hnb_bigtytles">Модели из коллекции FreshGel</span>
		<table class="hnb_elitmatrastbl">
			<tr class="">
				<td class="svoistvo">
					<span>СВОЙСТВА</span>
					
				</td>
				<td class="imgtovkup">
					<span>FreshGel 12</span> 
					<a href="/img/product/big/FreshGel%2012.jpg" class="boxer">
						<img src="/img/product/very_small/FreshGel%2012.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/FreshGel-12/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>FreshGel 10</span>
					<a href="/img/product/big/FreshGel%2010.jpg" class="boxer">
						<img src="/img/product/very_small/FreshGel%2010.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/FreshGel-10/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>FreshGel 9</span>
					<a href="/img/product/big/FreshGel%209.jpg" class="boxer">
						<img src="/img/product/very_small/FreshGel%209.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/FreshGel-9/">
						Купить матрас
					</a>
					
					
					
					
					
					
				</td>
			</tr>
			<tr class="">
				<td class="">
					Высота
				</td>
				<td class="">
					<span class="hnb_fontplpx">30 см</span>
				</td>
				<td class="">
					<span class="hnb_fontplpx">25 см</span>
				</td>
				<td class="">
					<span class="hnb_fontplpx">23 см</span>
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					Чехол
				</td>
				<td class="">
					Viscose&reg;, съемный, 3D ткань, терморегулирующий
				</td>
				<td class="">
					Viscose&reg;, съемный, 3D ткань, терморегулирующий
				</td>
				<td class="">
					Viscose&reg;, съемный, 3D ткань, терморегулирующий
				</td>
			</tr>
			<tr class="">
				<td class="">
					Международная гарантия
				</td>
				<td class="">
					12 лет
				</td>
				<td class="">
					12 лет
				</td>
				<td class="">
					12 лет
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					Сертификаты 
				</td>
				<td class="">
					OEKO - РОСТЕСТ - СДЕЛАНО В ИТАЛИИ
				</td>
				<td class="">
					OEKO - РОСТЕСТ - СДЕЛАНО В ИТАЛИИ
				</td>
				<td class="">
					OEKO - РОСТЕСТ - СДЕЛАНО В ИТАЛИИ
				</td>
			</tr>
			<tr class="">
				<td class="">
					Уровень комфорта
				</td>
				<td class="">
					Средней мягкости / Мягкий,<br />Моделируемый
				</td>
				<td class="">
					Средней мягкости / Средней жесткости,<br />Моделируемый
				</td>
				<td class="">
					Средней жесткости
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					Свойства
				</td>
				<td class="">
					Ортопедический, Анатомический
				</td>
				<td class="">
					Ортопедический, Анатомический
				</td>
				<td class="">
					Ортопедический, Анатомический
				</td>
			</tr>
			<tr class="">
				<td class="">
					Состав
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/sloi.jpg">
					<ul style="font-size:13px;">
						<li>Viscose</li>
						<li>Слой Memoform 2 cм</li>
						<li>Слой Super Soft fibre</li>
						<li>Слой Magnigel Foam 5 cм</li>
						<li>Слой Memoform 3 cм</li>
						<li>Слой Eliosoft 17 cм</li>
					</ul>
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/magnigeldual10.jpg">
					<ul>
						<li>Viscose</li>
						<li>Слой Memoform 2 cм</li>
						<li>Слой Super Soft fibre</li>
						<li>Слой Magnigel Foam 2 cм</li>
						<li>Слой Memoform 3 cм</li>
						<li>Слой Eliosoft 15 cм</li>
					</ul>
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/magnigel9.jpg">
					<ul>
						<li>Viscose</li>
						<li>Слой Magnigel Foam 2 cм</li>
						<li>Слой Memoform 3 cм</li>
						<li>Слой Eliosoft 18 cм</li>
						
					</ul>
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Преимущества
				</td>
				<td class="">
					Дышащий, Экстракомфорт, Гелевый<br />
					 Memoform 2+3 см<br />
					Magnigel Foam 5 см
					
				</td>
				<td class="">
					Дышащий, Экстракомфорт, Гелевый<br />
					Memoform 2+3 см<br />
					Magnigel Foam 3 см
					
				</td>
				<td class="">
					Дышащий, Экстракомфорт, Гелевый
				</td>
			</tr>
			<tr class="">
				<td class="">
					Цена: <span>выберите размер</span> 
					<select class="inputA" id="doborField">
					  <option value="96 300,87 400,78 700">160x200</option>
					  <option value="108 100,98 500,88 600">180x200</option>
					  <option value="120 200,109 300,—">200x200</option>
					  
					</select>
				</td>
				<td class="">
					<span class="productPrice1">96 300</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/FreshGel-12/">Купить матрас ></a>
				</td>
				<td class="">
					<span class="productPrice2">87 400</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/FreshGel-10/">Купить матрас ></a>
				</td>
				<td class="">
					<span class="productPrice3">78 700</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/FreshGel-9/">Купить матрас ></a>
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
			</tr>
		</table>
		<!--
		<hr class="hnb_myhrled" />
		<span class="hnb_bigtytles">Ткани и Материалы</span>
		<img src="/img/menyelement.png" alt="" class="img_tm" />
		-->
	</div>
</div>
			'
		),
		array(
			'address' => 'rest',
			'parent_address' => 'elitnye-matrasy',
			'parent_name' => '',
			'name' => '',
			'no_breadcrumbs' => true,
			'left_sidebar' => '',
			'title' => 'Коллекция Rest — настоящая классика! | Магнифлекс',
			'description' => '',
			'keywords' => '',
			'text' => '
				<div class="hnb_elite_content">
	<div class="hnb_elcont1">
		<img src="/img/rest.jpg" class="elite_img_top" alt="" />
		<span id="hnb_elcont1title">
			Коллекция <b>Rest</b> — настоящая классика!
		</span>
		<br />
		<hr id="hnb_minhr" />
		<span class="hnb_elcont1text">
			
			Дорогая Простота.<br />
Высокая Надежность.<br />

		</span>
			 <br /><br />
		<span class="hnb_elcont1text2">
			Безупречное качество.
		</span>
		<div class="hnb_imgefel">
		</div>
		<div class="strbott">
		</div>
		<div class="strbott bottom_copy">
		</div>
	</div>
	<div class="hnb_elcont2">
		<span class="hnb_bigtytles">
<span class="hnb_bigtytles">Преимущества матрасов коллекции Rest</span>
		</span>
		<div  style="clear:both;"></div>
		<div id="hnb_3nelement">
			<div class="hnb_3nelementli">
				<img src="/img/statrest.png" alt="Классический матрас"/>
				<div style="clear:both;"></div>
				<span>Классика</span><br />
				
				Классика предполагает чувство меры: в форме, объеме и цвете образа, придающее гармонию и красоту.
			</div>
			<div class="hnb_3nelementli">
				<img src="/img/medvrest.png" alt="Мягкий матрас"/>
				<div style="clear:both;"></div>
				<span>Мягкий, Комфортный</span><br />
				Дополнительный комфорт придает материал Memoform (минимум 2 см). Модель Rest 12 - один из самых мягких матрасов Magniflex  

			</div>
			<div class="hnb_3nelementli">
				<img style="padding-top:7px;" src="/img/lux.png" alt="Отличные ортопедические свойства - Magniflex"/>
				<div style="clear:both;"></div>
				<span>Эффект памяти</span><br />
				Непревзойденные 
				ортопедические свойства: 
				идеальная поддержка
				Вашего позвоночника! 
			</div>
		</div>
		<div id="hnb_staryefekt" style="clear:both; height:0px !important"></div>
		
	</div>
	<div style="clear:both;"></div>
	<hr class="hnb_myhrled" />
	<div class="hnb_elcont3">
		<span class="hnb_bigtytles">
			Классический итальянский элитный матрас 
		</span>
		<br />
		<span class="hnb_eytext">
			Настоящая классика всегда в моде. Очень удачная коллекция, сочетающая отличные ортопедические свойства и комфорт. <br/>
Для создания используются исключительно высококачественные ткани и материалы:     <br/>
 Memoform (комфорт, мягкость + эффект памяти),    <br/>
 Elioform (превосходные ортопедические свойства), <br/>
 Eliosoft (в основе - натуральный латекс).
<br /><br />
Матрасы двухсторонние - можно использовать разные стороны, в зависимости от предпочтений спящих на нем людей.
		</span>
		<div id="coin-slider">
								<a href="#" target="_blank">
									<img src="/img/rest_magniflex_1.jpg" alt="Ортопедический матрас Magniflex Rest" />
											<span>
											Обеспечивают великолепную поддержку позвоночника. Высокие ортопедические свойства обеспечивает слой Elioform (18 см). В моделе Rest 12 для усиления ортопедических свойств и повышения комфортности, используется более дорогой материал - 
инновационный Eliosoft (18 см).
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/rest_magniflex_2.jpg" alt="Элегантный матрас Magniflex Rest"/>
											<span>
											В оформлении элегантно сочетаются эстетические и функциональные детали. Один из основных элемнтов - флорентийская лилия.
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
	<div class="hnb_elcont6">
		
		<span class="hnb_bigtytles">Модели из коллекции Magniflex Rest</span>
		<table class="hnb_elitmatrastbl">
			<tr class="">
				<td class="svoistvo">
					<span>СВОЙСТВА</span>
					
				</td>
				<td class="imgtovkup">
					<span>Rest 12</span> 
					<a href="/img/product/big/Rest%2012.jpg" class="boxer">
						<img src="/img/product/very_small/Rest%2012.jpg" alt="Magniflex Rest 12"/>
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/Rest-12/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>Rest 10</span>
					<a href="/img/product/big/Rest%2010.jpg" class="boxer">
						<img src="/img/product/very_small/Rest%2010.jpg" alt="Magniflex Rest 10" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/Rest-10/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>Rest 9</span>
					<a href="/img/product/big/Rest%209.jpg" class="boxer">
						<img src="/img/product/very_small/Rest%209.jpg" alt="Magniflex Rest 9"/>
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-matrasy/Rest-9/">
						Купить матрас
					</a>
					
				</td>
			</tr>
			<tr class="">
				<td class="">
					Высота
				</td>
				<td class="">
					<span class="hnb_fontplpx">30 см</span>
				</td>
				<td class="">
					<span class="hnb_fontplpx">25 см</span>
				</td>
				<td class="">
					<span class="hnb_fontplpx">23 см</span>
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					Чехол
				</td>
				<td class="">
					Viscose&reg;, несъемный, 3D ткань
				</td>
				<td class="">
					Viscose&reg;, несъемный, 3D ткань
				</td>
				<td class="">
					Viscose&reg;, несъемный, 3D ткань
				</td>
			</tr>
			<tr class="">
				<td class="">
					Международная гарантия
				</td>
				<td class="">
					10 лет
				</td>
				<td class="">
					10 лет
				</td>
				<td class="">
					10 лет
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					Сертификаты 
				</td>
				<td class="">
					OEKO - РОСТЕСТ - СДЕЛАНО В ИТАЛИИ
				</td>
				<td class="">
					OEKO - РОСТЕСТ - СДЕЛАНО В ИТАЛИИ
				</td>
				<td class="">
					OEKO - РОСТЕСТ - СДЕЛАНО В ИТАЛИИ
				</td>
			</tr>
			<tr class="">
				<td class="">
					Уровень комфорта
				</td>
				<td class="">
					Средней мягкости
				</td>
				<td class="">
					Средней жесткости
				</td>
				<td class="">
					Достаточно жесткий
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					Свойства
				</td>
				<td class="">
					Ортопедический
				</td>
				<td class="">
					Ортопедический
				</td>
				<td class="">
					Ортопедический
				</td>
			</tr>
			<tr class="">
				<td class="">
					Состав
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/magni12.jpg" alt="Матрас Rest 12 состав">
					<ul style="font-size:13px;">
						<li>Viscose</li>
						<li>Чехол: Memoform 2 cм</li>
						<li>Super Soft fibre (мягкая фибра)</li>
						<li>Слой Memoform 3 cм</li>
            <li>Слой Elioform 3 cм</li>
						<li>Слой Eliosoft 18 cм</li>
					</ul>
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/magni-10.jpg" alt="Матрас Rest 10 состав">
					<ul>
						<li>Viscose</li>
						<li>Чехол: Memoform 2 cм</li>
						<li>Super Soft fibre (мягкая фибра)</li>
						<li>Слой Eliosoft 3 cм</li>
						<li>Слой Elioform 18 cм</li>
					</ul>
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/magni9.jpg" alt="Матрас Rest 9 состав">
					<ul>
							<li>Viscose</li>
						<li>Чехол: Memoform 2 cм</li>
						<li>Super Soft fibre (мягкая фибра)</li>
            <li>Слой Elioform 18 cм</li>

						
					</ul>
				</td>
				
			</tr>
			<tr class="trbkeee">
				<td class="">
					Преимущества
				</td>
				<td class="">
				   Комфортный, отличная поддержка позвоночника, Эффект памяти<br />
					 Memoform 2+3 см<br />
				   Eliosoft 18 cм
					
				</td>
				<td class="">
					Отличная поддержка позвоночника<br />
          Eliosoft 3 cм
					
				</td>
				<td class="">
				Достаточно жесткая поддержка позвоночника
				</td>
			</tr>
			<tr class="">
				<td class="">
					Цена: <span>выберите размер </span> 
					<select class="inputA" id="doborField">
					  <option value="77 700,64 100,58 800">160x200</option>
					  <option value="87 400,72 100,66 200">180x200</option>
					  <option value="97 100,80 100,73 600">200x200</option>
					  
					</select>
				</td>
				<td class="">
					<span class="productPrice1">77 700</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/Rest-12/">Купить матрас ></a>
				</td>
				<td class="">
					<span class="productPrice2">64 100</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/Rest-10/">Купить матрас ></a>
				</td>
				<td class="">
					<span class="productPrice3">58 800</span> руб.
					<br /><a class="tabhrefel" href="/catalog/elitnye-matrasy/Rest-9/">Купить матрас ></a>
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>
			</tr>
		</table>
		<!--
		<hr class="hnb_myhrled" />
		<span class="hnb_bigtytles">Ткани и Материалы</span>
		<img src="/img/menyelement.png" alt="" class="img_tm" />
		-->
	</div>
</div>
			'
		),
		//корзина
		array(
			'address' => 'cart',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Корзина товаров',
			'left_sidebar' => 'basket',
			'title' => 'Моя корзина | Магнифлекс',
			'description' => '',
			'keywords' => 'матрасы подушки магнифлекс',
			'text' => '
				<div class="hnb_contarea">
					
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">
						<h2 id="hnb_basket_yakor" class="hnb_mytitlepag">КОРЗИНА</h2>
						<br />
						<div class="sf_basket_null">Ваша корзина пуста</div>
						<div id="basket_table">
							
						</div>
						<div class="basket_total">
							<div class="basket_total_prices">
								Итого: <span id="basket_total_price"></span> р.<br />
								<span id="basket_total_base_price"> р.</span>
							</div>
						</div>
						<br />
						<div class="hnb_textski">
							Внимание! У нас действует акция: при покупке матраса - 25% скидка на ортопедическую подушку.<br /> 
							Например:<br /><br />
							
							<!--{cart_pillows_banner}-->
							
							<br />
						</div>
						<hr>
						
						
						<a href="/order/#breadcrumbs" class="btn_orderw">
							Оформить заказ
						</a>
						<span style="float: right;padding: 0 20px;">или</span>
						<a href="/catalog/pillows/" class="btn_order">
							Выбрать подушку
						</a>
					</div>
				</div>
				<div class="clear"></div>
			'
		),
		array(
			'address' => 'order',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Оформление заказа',
			'left_sidebar' => 'basket',
			'title' => 'Оформление заказа | Магнифлекс',
			'description' => '',
			'keywords' => 'матрасы подушки магнифлекс',
			'text' => '
				<script src="/template/js/datepicker/picker.js"></script>
				<script src="/template/js/datepicker/picker.date.js"></script>
				<script src="/template/js/datepicker/picker.time.js"></script>
				<script src="/template/js/datepicker/translations/ru_RU.js"></script>
					
				<div class="order_container">
					<div class="form_content">
					<form id="order_form" class="sf_form" action="/tools/form.php" method="POST" onsubmit="return form_send(this);">
						<input type="hidden" name="cart" value="1">
						<div class="form_input">
							<span>Фамилия, имя, отчество:</span>
							<input type="text" name="name">
							<div class="clear"></div>
						</div>
						<div class="form_input">
							<span>Телефон:</span>
							<input type="text" name="phone" class="phone_mask">
							<div class="clear"></div>
						</div>
						<div class="form_input">
							<span>E-Mail:</span>
							<input type="text" name="email">
							<div class="clear"></div>
						</div>
						<div class="form_input">
							<span>Адрес доставки:</span>
							<input type="text" name="address">
							<div class="clear"></div>
						</div>
						<div class="form_input half-left">
							<span>Дата доставки:</span>
							<input type="text" name="date">
							<div class="clear"></div>
						</div>
						<div class="form_input half-right">
							<span>Удобное время:</span>
							<input type="text" name="time">
							<div class="clear"></div>
						</div>
						<div class="form_input">
							<span>Дополнительные пожелания к заказу:</span>
							<textarea name="comment"></textarea>
							<div class="clear"></div>
						</div>
						<div class="form_submit">
							<input type="submit" value="Отправить заказ">
							<!--<input type="button" value="Вернуться в магазин" class="btn_back">-->
							<div class="clear"></div>
						</div>
					</form>
				</div>
				</div>
			'
		),
		
		
		
		
				array(
			'address' => 'armenia-belarusia',
			'parent_address' => 'o-magniflex/magniflex-mattresses-world',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Другие страны',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Magniflex в Армении, Беларуссии ',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<style>
			.hnb_mworld{
				display:block;
			}
			</style>
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Армения</h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
По вопросам приобретения продукции Магнифлекс в Армении обращайтесь в наше новое представительство в городе Ереван. Контактные телефоны : +374-967-47-293 +374-990-19-175 <br />
		</p>
<br /><br />

<h2 class="hnb_mytitlepag">Беларусь</h2>
<p>
Официальное представительство MAGNIFLEX в Республике Беларусь. 
<br /><br />
Тел. +375-29-873-11-42, +375-29-624-11-42<br />
www.magniflex.by<br /><br />


Магазины в Беларуси:<br />
Минск, ул. Сурганова 57а, ТЦ «СТАРАЯ ЕВРОПА» магазин 199, этаж 3<br />
Минск, ул. Кульман 3, ТЦ «COOLMAN», магазин 308а, этаж 3<br />

</p>


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		
		
			array(
			'address' => 'europa',
			'parent_address' => 'o-magniflex/magniflex-mattresses-world',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Другие страны',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Доставка продукции Magniflex Магнифлекс в страны ближнего и дальнего зарубежья | Магнифлекс',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<style>
			.hnb_mworld{
				display:block;
			}
			</style>
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">
	
		<h2 class="hnb_mytitlepag">Албания </h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			Салон  “George W. Bush” 
Тирана<br />
Tel. +355 68 20 92 839
<br /><br />

Салон  “Pranë mbi kalimit të Kamzës” <br />
Тирана<br />
Tel. +355 68 90 30 762
<br /><br />

 “Gjergj Fishta, kulla 1” <br />
Тирана<br />
Tel. +355 68 90 30 772

		</p>
<br /><br />

<h2 class="hnb_mytitlepag">Болгария  </h2>
<p>
Шоу-рум  в Софии: <br />
Телефон:  0700 11 117<br />
E-MAIL:  OFFICE@MATRAX.BG (для дилеров)<br />
CORPORATE@MATRAX.BG (покупателям)                                     


</p>
<br /><br />
<h2 class="hnb_mytitlepag">Великобритания:</h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			Контактный телефон представительства:  +39 057451011 

		</p>
		

<br /><br />

<h2 class="hnb_mytitlepag">Германия</h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			Контактные телефоны центрального офиса:
+39 057451011

		</p>
		<br /><br />

<h2 class="hnb_mytitlepag">Италия</h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
Via San Leonardo da Porto Maurizio 24/26/28 - 59100 Prato<br />
Tel +39 057451011 Fax +39 0574 5101.235

		</p>

<br /><br />

<h2 class="hnb_mytitlepag">Кипр</h2>
<p>
Шоу-рум в Никосии<br />
20–21, ACHEON STR, ENGOMI<br />
Телефон для справок: 22351366
<br /><br />
Шоу-рум, Лимасол<br />
6, MAKARIOS III AVE,<br />
Телефон для справок: 25560386
  		</p>
		
		<br /><br />                                   
<h2 class="hnb_mytitlepag">Косово</h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			Центральный офис-салон:<br />
Контактные телефоны:  +381 (0) 28 572 722; +377 (0) 44 196 741
+39 057451011

		</p>
		
		<br /><br />
		
		<h2 class="hnb_mytitlepag">Македония: </h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
Главный офис<br />
Скопье, ул. Наум Наумовски Борче 87<br />
Тел: 072 308 184



</p>
<br /><br />
<h2 class="hnb_mytitlepag">Румыния </h2>
<p>
Центральный офис:<br />
Adrian Sentes, Bld.Decebal 4, Bl.S11 <br /><br />
Телефон:  +40 2132 120 85                                        


</p>


<br /><br />

<h2 class="hnb_mytitlepag">Украина:</h2>
<p>
Официальное представительство<br />
04210 Украина, г. Киев,  проспект Города Сталинграда, 6 корп. 8<br />
Тел./факс: +38 (044) 230-88-13, (044) 230-88-14, (044) 230-88-15.
                                     


</p>

		
		<br /><br />

		
<h2 class="hnb_mytitlepag">Чехия</h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			Центральный офис:<br />
Šaldova 219/1 186 00 Praha 8 – Karlín
<br /><br />
Телефоны: +420 222 314 608; +420 739 492 220

		</p>
<br /><br />


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		
		
			array(
			'address' => 'aziya',
			'parent_address' => 'o-magniflex/magniflex-mattresses-world',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Другие страны',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Магнифлекс в Азии',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<style>
			.hnb_mworld{
				display:block;
			}
			</style>
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">
		<h2 class="hnb_mytitlepag">АЗИЯ</h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			<b>Объединенные Арабские Эмираты </b><br /><br />

Шоу-рум:<br /><br />

Дубаи <br />
Mazaya Centre <br />
Sheikh Zayed Road<br />
Shop G19A<br />
Телефон для справок: 800 62887377, +971 4 343 7577<br /><br />


Абу-Даби
<br /><br />
Телефон для справок: +971 2 621 3720
<br /><br />

<img style="
    position: absolute;margin-left: 330px;margin-top: -250px;" src="/img/under_map2.png" alt="магазин магнифлекс в дубаи" />

<br /><br /><br />

<b>Филлипины  </b> 

<br /><br />
Контактный номер официального представительства: +39 057451011
<br /><br /><br />




<b>Индия</b>

<br /><br />
Официальное представительство: <br />

#905 South Block, Manipal Centre<br />

No.47, Dickenson Road, Bangalore - 560042<br />

Телефон для справок: +91-80-42127118<br />

Электронная почта: customercare@magniflexindia.com<br />

Официальный сайт: www.magniflexindia.com<br />
<br /><br /><br />

<b>Япония</b>
<br /><br />
Официальный сайт на английском языке: www.flag-s.com/index_eng.html<br />
Список магазинов: www.flag-s.com/magniland/index.html
		</p>
		


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		
		
			array(
			'address' => 'amerika',
			'parent_address' => 'o-magniflex/magniflex-mattresses-world',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Другие страны',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Magniflex в США, Канаде',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<style>
			.hnb_mworld{
				display:block;
			}
			</style>
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">
		<h2 class="hnb_mytitlepag">США, КАНАДА</h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			<b>Официальное представительство Magniflex в Северной Америке: </b>
<br /><br />

 веб-сайт: www.magniflex.us<br />
 бесплатный* общий телефон для справок: 855-474-1401<br />
 e-mail: info@magniflex.us
<br /><br />
* — <em>бесплатный для звонков с территории США и Канады</em>.
<br /><br />

<b>Директор по продажам:</b><br />
Richard Landriault<br />
Контактный номер: 905 481 0940<br />
Электронная почта: rlandriault1@videotron.ca
		</p>




	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		
		
		
		array(
			'address' => 'avstraliya',
			'parent_address' => 'o-magniflex/magniflex-mattresses-world',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Другие страны',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Магнифлекс в Австралии',
			'description' => 'Как купить продукцию компании Magniflex в Австралии',
			'keywords' => 'magniflex австралия, магнифлекс Австралия',
			'text' => '
			<style>
			.hnb_mworld{
				display:block;
			}
			</style>
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">
		<h2 class="hnb_mytitlepag">Австралия</h2>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
По вопросам преобретения продукции компании Magniflex в Австралии Вы можете обратиться в следующие магазины:</p>

<div style="
    float: right;
    display: inline-block;
    width: 300px;
">
<br />
<b>Салоны Bev Marks Beds</b><br />
www.bevmarks.com.au<br />
Контактные телефоны:  (03) 9727 1200; (03) 9379 0400; (03) 5241 8308;  03 9465 9666; 03 8361 6050; (03) 8790 1266; (03) 9878 4955
<br /><br />
<b>Сеть магазинов Sleep Doctor</b><br />
Телефон для справок:  03 9041 4765
<br /><br />
<b>Магазин Luke Furniture</b><br />
Телефон для справок: (03) 9999 8930
<br /><br />
<b>Магазин Curious Grace</b><br />
Телефоны для справок: 03 9687 6878; 03 9481 3488<br />
www.curiousgrace.com.au
	</div>	


<img style="padding-left:0px;float: left;" src="/img/curious_grace_nordic_bed_grande.png">


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		
		array(
			'address' => 'optovim-pokupatelyam',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Оптовым покупателям',
			'left_sidebar' => 'partneram',
			'title' => 'Матрасы оптом со скидкой!',
			'description' => 'Выгодные условия оптовым покупателям!',
			'keywords' => 'матрасы оптом',
			'text' => '
			<style>
			.hnb_mworld{
				display:block;
			}
			</style>
			<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					
					<!--{left_sidebar}-->

					</div>
					<div class="hnb_conttextright">
			<h2 class="hnb_mytitlepag">Оптовикам - особые условия!</h2>
			
			Наша компания имеет богатый опыт сотрудничества не только с розничными покупателями, но и с оптовиками. <br />	
      К Вашим услугам индивидуальный подход и персональные скидки! Уверены, наше сотрудничество будет успешным и выгодным для Вас!
					<br /><br />		
			Контактный телефон: +7 (495)  507-22-65.
				</div>
				<div style="clear: both;"></div>
			</div>
			'
		),
		
		array(
			'address' => 'dileram',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Стать дилером',
			'left_sidebar' => 'partneram',
			'title' => 'Как стать дилером Magniflex',
			'description' => 'Условия сотрудничества с Magniflex',
			'keywords' => 'матрасы стать дилером',
			'text' => '
			<style>
			.hnb_mworld{
				display:block;
			}
			</style>
			<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					
					<!--{left_sidebar}-->

					</div>
					<div class="hnb_conttextright">
			<h2 class="hnb_mytitlepag">Стать дилером Magniflex</h2>
			
			Для начала сотрудничества необходимо либо позвонить нам по телефону +7 (495) 507-22-65, <br />	
      либо отправить запрос на e-mail: info@magniflex.ru. <br />	
      Мы обязательно свяжемся с Вами!
				</div>
				<div style="clear: both;"></div>
			</div>
			'
		),
		
		array(
			'address' => 'predlozhenie-dlya-otelej',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Предложение для отелей',
			'left_sidebar' => 'partneram',
			'title' => 'Эксклюзивное предложение для отельеров!',
			'description' => 'Отличные условия для владельцев отелей, гостиниц на матрасы и подушки Магнифлекс',
			'keywords' => 'матрасы в отели, матрасы для гостиниц',
			'text' => '
			<style>
			#breadcrumbs {
					background: url(/img/contract-line-eng.jpg);
					height: 220px;
				}
			</style>
			<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					
					<!--{left_sidebar}-->

					</div>
					<div class="hnb_conttextright">
			<h2 class="hnb_mytitlepag">Эксклюзивное предложение для отельеров!</h2>
			
			Десятки тысяч гостиниц по всему миру уже используют продукцию фабрики Magniflex: ортопедические матрасы и подушки.<br/><br/>

			Мы гарантируем:<br/>

			1. Высочайшее качество продукции.<br/>

			2. Настоящий 100% ортопедический продукт.<br/>

			3. Долговечность и износостойкость изделий: срок эксплуатации составляет не менее 10 лет, а для ряда моделей более 15.  <br/>  

			4. Недорогая, быстрая доставка.<br/><br/>


			Отправьте нам запрос на получение эксклюзивного предложения для Вашего отеля на e-mail: info@magniflex.ru или получите дополнительную информацию по телефону: +7 (495)  507-22-65.

				</div>
				<div style="clear: both;"></div>
			</div>
			'
		),
		
		array(
			'address' => 'kogda-menyat-podushku',
			'parent_address' => 'pokupatelyam',
			'parent_name' => 'Покупателям',
			'name' => 'Когда нужно менять подушку',
			'left_sidebar' => 'kogda-menyat-podushku',
			'title' => 'Когда необходимо менять подушку. Срок службы подушек.',
			'description' => 'Срок службы пуховых и современных подушек, когда нужно менять подушку?',
			'keywords' => 'когда менять подушку',
			'text' => '
			<style>
			.hnb_mworld{
				display:block;
			}
			</style>
			<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					
					<!--{left_sidebar}-->

					</div>
					<div class="hnb_conttextright">
			<h2 class="hnb_mytitlepag">Когда необходимо заменить подушку</h2>
			
			Сотрудники 1-го МГМУ им. Сеченова настоятельно рекомендуют пользоваться подушками из современных материалов, которые не скатываются в «комочки» и легко стираются. Традиционные пуховые подушки слишком громоздкие, мягкие и «жаркие», мешают расслаблению мышц и могут стать причиной бессонницы. К тому же в них со временем заводятся пылевые клещи, которые становятся причиной покраснения и воспаления глаз, отека лица и слизистой, затрудненного дыхания, расчесов на коже. Пуховую подушку необходимо почаще взбивать, летом сушить на солнце, а через 3-5 лет обязательно нужно поменять на новую. <br /><br />

Современные подушки создаются из гиппораллергенных материалов, обеспечивающие 100% защиту от появления пылевых клещей. В основе ортопедических подушек Magniflex используются Memoform Magnifoam или «гель» Magnigel Foam. Наволочка всегда съемная, обычно из натурального хлопка — легко стирается. Срок службы таких подушек составляет не менее 12 лет!<br />

				</div>
				<div style="clear: both;"></div>
			</div>
			'
		),
		
		
		
		
		array(
			'address' => 'testelit',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'test',
			'left_sidebar' => 'partneram',
			'title' => 'Эксклюзивное предложение для отельеров!',
			'description' => 'Отличные условия для владельцев отелей, гостиниц на матрасы и подушки Магнифлекс',
			'keywords' => 'матрасы в отели, матрасы для гостиниц',
			'text' => '
			<div class="hnb_elitcategory">
		
				<div id="cat_desc">
					<img src="/img/topimgelit.jpg" alt="" /><br />
					<h3>ИЗЫСКАННЫЕ ЭЛИТНЫЕ  МАТРАСЫ MAGNIFLEX</h3>
					<span class="hnb_elitbigtitl">Изобретено, создано и протестировано в Италии. Соответствует высочайшим стандартам качества</span>
					
					<hr class="hnb_imghr" />
					<h1>ЭЛИТНЫЕ КОЛЛЕКЦИИ</h1>
				</div>
					
					<div class="hnb_elitboxline">
						<div id="cat_text">
							<img src="/img/product/small/Rest.jpg" alt="Коллекция этилных матрасов Rest, миниатюра" />
							<div>
							<h4>Classic</h4>
							Настоящая классика всегда в моде. Модели из этой коллекции отличаются особой сдержанностью, строгостью, пропорциональностью и элегантностью. Лейб мотив - "дорогая простота". Никаких остромодных или нефункциональных деталей. Классика предполагает чувство меры: в форме, объеме и цвете образа, придающее стабильность, гармонию и красоту. В оформлении элегантно сочетаются эстетические и функциональные детали.
							</div>
						</div>
					</div>
					
				
		<div class="hnb_margin_elitboxline"></div>		
		<div class="category_products">
		
					<div class="category_product">
							<a href="/catalog/elitnye-matrasy/Rest-9/" class="category_product_img" title="Rest 9">
								<img src="/img/product/very_small/Rest 9.jpg" alt="">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/Rest-9/" class="category_product_name" title="Rest 9">Rest 9</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Классический элитный
			</span>
			<p class="hnb_harek">Комфортный, эффект памяти. Достаточно жесткий <br />
			Высота: 23 см<br />
			Наполнитель: Memoform, Elioformt<br />
			Создан в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>от 64 900 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/Rest-9/" title="Rest 9">
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
												<div class="category_product">
							<a href="/catalog/elitnye-matrasy/Rest-10/" class="category_product_img" title="Rest 10">
								<img src="/img/product/very_small/Rest 10.jpg" alt="Миниатюра: элитный матрас Magniflex Rest 10">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/Rest-10/" class="category_product_name" title="Rest 10">Rest 10</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Идеальная поддержка
			</span>
			<p class="hnb_harek">Комфортный, эффект памяти, средняя жесткость <br />
			Высота: 25 см<br />
			Наполнитель: Memoform, Elioform, Eliosoft<br />
			Создан в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>от 70 800 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/Rest-10/" title="Rest 10">
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
												<div class="category_product">
							<a href="/catalog/elitnye-matrasy/Rest-12/" class="category_product_img" title="Rest 12">
								<img src="/img/product/very_small/Rest 12.jpg" alt="Миниатюра: элитный матрас Magniflex Rest 12">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/Rest-12/" class="category_product_name" title="Rest 12">Rest 12</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Непревзойденная поддержка
			</span>
			<p class="hnb_harek">Комфорт, эффект памяти. Средней мягкости. <br />
			Высота: 30 см<br />
			Наполнитель: Memoform, Elioform,  Eliosoft<br />
			Создан в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>от 85 800 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/Rest-12/" title="Rest 12">
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
			
		
		<!-----------------------------and classic------------------------------>
		
		
		<div class="hnb_elitboxline">
					<div id="cat_text">
						<img src="/img/product/small/FreshGel.jpg" alt="Коллекция этилных матрасов FreshGel, миниатюра" />
						<div>
						<h4>FreshGel</h4>
						Ортопедический элитный матрас Premium класса. Легкий, воздушный, дышащий, необыкновенно проницаемый. Настоящее воплощение комфорта и удовольствие во сне. Многие специалисты сравнивают его с облаками.
						</div>
					</div>
				
				
		</div>
		<div class="hnb_margin_elitboxline"></div>		
		<div class="category_products">
		
					<div class="category_product">
							<a href="/catalog/elitnye-matrasy/FreshGel-9/" class="category_product_img" title="FreshGel 9">
								<img src="/img/product/very_small/FreshGel 9.jpg" alt="Миниатюра: элитный матрас Magniflex FreshGel 9">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/FreshGel-9/" class="category_product_name" title="FreshGel 9">FreshGel 9</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Сны на облаке
			</span>
			<p class="hnb_harek">Дышащий, эффекты памяти и охлаждения.<br />
			Высота: 23 см<br />
			Наполнитель: Memoform, Magnigel Foam,  Eliosoft<br />
			Сделано в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>от 86 900 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/FreshGel-9/" title="FreshGel 9">
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
												<div class="category_product">
							<a href="/catalog/elitnye-matrasy/FreshGel-10/" class="category_product_img" title="FreshGel 10">
								<img src="/img/product/very_small/FreshGel 10.jpg" alt="матрас freshgel">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/FreshGel-10/" class="category_product_name" title="FreshGel 10">FreshGel 10</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Сны в облаках
			</span>
			<p class="hnb_harek">Дышащий, эффекты памяти и охлаждения. <br />
			Высота: 25 см<br />
			Наполнители: Memoform, Magnigel Foam,  Eliosoft<br />
			Изготовлен в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>от 96 400 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/FreshGel-10/" title="FreshGel 10">
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
												<div class="category_product">
							<a href="/catalog/elitnye-matrasy/FreshGel-12/" class="category_product_img" title="FreshGel 12">
								<img src="/img/product/very_small/FreshGel 12.jpg" alt="Миниатюра: элитный матрас Magniflex FreshGel 12">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/FreshGel-12/" class="category_product_name" title="FreshGel 12">FreshGel 12</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Сны в облаках. Экстракомфорт
			</span>
			<p class="hnb_harek">Дышащий, эффекты памяти и охлаждения. Magnigel - 5 см! <br />
			Высота: 30 см<br />
			Наполнитель: Memoform, Magnigel Foam,  Eliosoft<br />
			Создан в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>106 100 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/FreshGel-12/" title="FreshGel 12">
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
			
		
		<!-----------------------------and FRESHGEL------------------------------>
		
		
		
		<div class="hnb_elitboxline">
				<div id="cat_text">
						<img src="/img/product/small/Imperiale.jpg" alt="Коллекция этилных матрасов Imperiale, миниатюра" />
						<div>
						<h4>Imperiale</h4>
						Аристократические матрасы, созданные специально для тех, кто предпочитает аскетизму Роскошь и Простор. Высокий анатомический и ортопедический эффекты, в сочетании с терморегулирующими свойствами чехла, делают этот матрас идеальной системой комфортного сна и отдыха.
						</div>
					
				</div>
				
		</div>
		<div class="hnb_margin_elitboxline"></div>		
		<div class="category_products">
		
					<div class="category_product">
							<a href="/catalog/elitnye-matrasy/Imperiale-24/" class="category_product_img" title="Imperiale 24">
								<img src="/img/product/very_small/Imperiale 24.jpg" alt="Миниатюра: элитный матрас Magniflex Imperiale 24">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/Imperiale-24/" class="category_product_name" title="Imperiale 24">Imperiale 24</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Идеальная система
			</span>
			<p class="hnb_harek">Экстракомфорт, эффект памяти. Средней жесткости. <br />
			Высота: 24 см<br />
			Наполнители: Memosoft 4, Memoform 3, Eliosoft 3, Elioform 12<br />
			Создан в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>100 000 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/Imperiale-24/" title="Imperiale 24">
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
						
						
						<div class="category_product">
							<a href="/catalog/elitnye-matrasy/Imperiale-28/" class="category_product_img" title="Imperiale 28">
								<img src="/img/product/very_small/Imperiale 28.jpg" alt="Миниатюра: элитный матрас Magniflex Imperiale 28">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/Imperiale-28/" class="category_product_name" title="Imperiale 28">Imperiale 28</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Идеальный матрас
			</span>
			<p class="hnb_harek">Экстракомфорт, эффект памяти. Средней мягкости. <br />
			Высота: 28 см<br />
			Наполнители: Memosoft 4, Memoform 3, Eliosoft 5, Elioform 14<br />
			Создан в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>119 300 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/Imperiale-28/" title="Imperiale 28">
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
						
						
						
						<div class="category_product">
							<a href="/catalog/elitnye-matrasy/Imperiale-33/" class="category_product_img" title="Imperiale 33">
								<img src="/img/product/very_small/Imperiale 33.jpg" alt="Миниатюра: элитный матрас Magniflex Imperiale 33">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/Imperiale-33/" class="category_product_name" title="Imperiale 33">Imperiale 33</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Роскошный ортопедический
			</span>
			<p class="hnb_harek">Экстракомфортный, эффект памяти. MEMOSOFT! Мягкий. <br />
			Высота: 33 см<br />
			Наполнители: Memosoft 4, Memoform 5, Eliosoft 5, Elioform 17<br />
			Создан в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>140 300 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/Imperiale-33/" title="Imperiale 33">
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
		
		<!-----------------------------and Imperiale------------------------------>
		
		
		
		<div class="hnb_elitboxline">
					<div id="cat_text">
						<img src="/img/product/small/Comfort%20Delux.jpg" alt="Коллекция этилных матрасов Comfort Delux, миниатюра" />
						<div>
						<h4>Comfort Delux</h4>
						Коллекция необычайно комфортных ортопедических элитных матрасов Luxury класса. Съемный чехол, космическая технология Outlast. Часто встречаются в люксах лучших отелей мира. Воплощение неподвластной времени элегантности.
						</div>
					</div>
				
				
		</div>
		<div class="hnb_margin_elitboxline"></div>		
		<div class="category_products hnb_grid2">
		
					<div class="category_product">
							<a href="/catalog/elitnye-matrasy/Comfort-Plus-10/" class="category_product_img" title="Comfort Plus 10">
								<img src="/img/product/very_small/Comfort Plus 10.jpg" alt="матрас comfort plus">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/Comfort-Plus-10/" class="category_product_name" title="Comfort Plus 10">Comfort Plus 10</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Необыкновенный комфорт
			</span>
			<p class="hnb_harek">Терморегулирующий, эффект памяти, DualCore. Жесткий.<br />
			Высота: 25 см<br />
			Наполнители: Memoform (2+5), Elioform (17)<br />
			Создан в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>от 88 500 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/Comfort-Plus-10/" title="Comfort Plus 10">
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
						
						
						
						<div class="category_product">
							<a href="/catalog/elitnye-matrasy/Comfort-Plus-12/" class="category_product_img" title="Comfort Plus 12">
								<img src="/img/product/very_small/Comfort Plus 12.jpg" alt="Миниатюра: элитный матрас Magniflex Comfort Plus 12">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/Comfort-Plus-12/" class="category_product_name" title="Comfort Plus 12">Comfort Plus 12</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Один из лучших
			</span>
			<p class="hnb_harek">Терморегулирующий, эффект памяти, DualCore. Мягкий. <br />
			Высота: 30 см<br />
			Наполнители: Memoform (2+5), Elioform 3, Eliosoft<br />
			Создан в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>100 000 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/Comfort-Plus-12/" title="Comfort Plus 12">
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
			
		
		<!-----------------------------and Comfort Delux------------------------------>
		
		
		<div class="hnb_elitboxline">
					<div id="cat_text">
						<img src="/img/product/small/Harmony.jpg" alt="Коллекция этилных матрасов Harmony, миниатюра" />
						<div>
						<h4>Harmony</h4>
						Ортопедический матрас Royal класса. Съемный чехол, регулируемая жесткость: 6 вариантов комфорта. Именно на таких матрасах спят члены королевских семей и элита мирового общества Идеальные матрасы с потрясающими свойствами, настоящее воплощение мечты.
						</div>
					</div>
				
				
		</div>
		<div class="hnb_margin_elitboxline"></div>		
		<div class="category_products hnb_grid1">
		
					<div class="category_product">
							<a href="/catalog/elitnye-matrasy/Exchange-Memoform-Dual/" class="category_product_img" title="Exchange Memoform Dual">
								<img src="/img/product/very_small/Exchange Memoform Dual.jpg" alt="Миниатюра: элитный матрас Magniflex Exchange Memoform Dual">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/Exchange-Memoform-Dual/" class="category_product_name" title="Exchange Memoform Dual">Exchange Memoform Dual</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			для Королевских семей
			</span>
			<p class="hnb_harek">Очень комфортный. Моделируемый. 5 звезд. Терморегуляция! <br />
			Высота: 33 см<br />
			Наполнители: Memoform 2+6 см, Eliosoft 11см, Elioform 11 см<br />
			Создан в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>137 500 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/Exchange-Memoform-Dual/" title="Exchange Memoform Dual">
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
			
		
		<!-----------------------------and Harmony------------------------------>
		
		
		
		<div class="hnb_elitboxline">
					<div id="cat_text">
						<img src="/img/product/small/Magnificent.jpg" alt="Коллекция этилных матрасов Magnificent, миниатюра" />
						<div>
						<h4>Magnificient</h4>
						Ортопедические матрасы Premium класса. Magnificient - в переводе с английского "восхищение". Очень элегантная, восхитительная коллекция созданная специально для тех, кто не приемлет компромиссов в поиске максимального комфорта. Высокотехнологичные, самомоделирующиеся, используется космическая технология Outlast. Обеспечивают эксклюзивный, идеальный комфорт во время сна
						</div>
					</div>
				
				
		</div>
		<div class="hnb_margin_elitboxline"></div>		
		<div class="category_products hnb_grid1">
		
					<div class="category_product">
							<a href="/catalog/elitnye-matrasy/Magnificent-12/" class="category_product_img" title="Magnificent 12">
								<img src="/img/product/very_small/Magnificent 12.jpg" alt="Миниатюра: элитный матрас Magniflex Magnificent 12">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/Magnificent-12/" class="category_product_name" title="Magnificent 12">Magnificent 12</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Мультислой
			</span>
			<p class="hnb_harek">
			Очень мягкий, чуткий матрас. В сумме 12 см слой Memoform-а. Платформа DualCore.<br />
			Высота: 30 см<br />
			Наполнитель: Memoform, Eliosoft, Elioform <br />
			Произведен в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>131 600 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/Magnificent-12/" title="Magnificent 12">
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
			
		
		<!-----------------------------and Magnificient------------------------------>
		
		
		
		<div class="hnb_elitboxline">
					<div id="cat_text">
						<img src="/img/product/small/Virtus.jpg" alt="Коллекция этилных матрасов Virtus, миниатюра" />
						<div>
						<h4>Virtus</h4>
						Роскошные ортопедические матрасы коллекции Virtus класса "Де-люкс" - самое лучшее, что может предложить Вам современная индустрия "здорового сна". Самые совершенные технологии, только лучшие ткани и материалы, десятки изобретений и патентов!
						</div>
					</div>
				
				
		</div>
		<div class="hnb_margin_elitboxline"></div>		
		<div class="category_products hnb_grid1">
		
					<div class="category_product">
							<a href="/catalog/elitnye-matrasy/Virtus-30/" class="category_product_img" title="Virtus 30">
								<img src="/img/product/very_small/Virtus 30.jpg" alt="Миниатюра: элитный матрас Magniflex Virtus 30">
							</a>
														<input type="hidden" name="min_size" value="160x200">
														<a href="/catalog/elitnye-matrasy/Virtus-30/" class="category_product_name" title="Virtus 30">Virtus 30</a>
							<div class="small_desc">
								
			<span class="hnb_popular">
			Самое Лучшее
			</span>
			<p class="hnb_harek">
			Лучшее, что Вам может предложить современная индустрия сна.<br />
			Высота: 30 см<br />
			Наполнитель: Memoform HD, Eliosoft Breeze<br />
			Создан в ИТАЛИИ.
                 </p>
									</div>
							<div class="category_product_price">
								цена: <span>324 400 р.</span>
								<div class="category_product_buy">
									Купить
								</div>
							</div>
							<div class="category_product_link">
								<a href="/catalog/elitnye-matrasy/Virtus-30/" title="Virtus 30">
									Подробнее
								</a>
							</div>
							<div class="category_product_quantity">
								<a href="javascript:void(0)" class="sf_minus" rel="nofollow">-</a>
								<input type="text" class="sf_base_quantity" name="quantity" value="1">
								<a href="javascript:void(0)" class="sf_plus" rel="nofollow">+</a>
								<span>шт</span>
							</div>
							<div class="clear"></div>
						</div>
						
					
						
									
		</div>
			
		<div class="clear"></div>
		<!-----------------------------and Virtus------------------------------>
		
			<div id="cat_desc" class=" bottom">
						
						<b>ИТАЛЬЯНСКИЕ ЭЛИТНЫЕ МАТРАСЫ</b>
						<div id="cat_text">
					Представляем Вашему вниманию изысканную коллекцию элитных матрасов Магнифлекс. Для ее создания вручную отбираются исключительные, лучшие ткани и материалы, гарантирующие непревзойденное качество изделий, используются уникальные современные космические технологии NASA. Концепция Magniflex Elite - это великолепная отделка, качественное исполнение, уникальный авторский дизайн в сочетании с эталонными ортопедическими и анатомическими свойствами.  
					Элитные матрасы - для настоящих ценителей,  для Вас: персональный менеджер, особые условия, индивидуальный подход.
						</div>
			</div>
		</div>
					
			
		<div class="clear"></div>
			
			'
		),
		array(
			'address' => 'sitemap',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Карта сайта',
			'left_sidebar' => 'o-magniflex',
			'title' => 'Карта сайта',
			'description' => '',
			'keywords' => '',
			'text' => '
				<style>
				#breadcrumbs {
					background: url(/img/breadcrumbs_qualitaok.jpg);
					height: 220px;
				}
				</style>
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					
					<!--{left_sidebar}-->

					</div>
					<div class="hnb_conttextright">
					<h2 class="hnb_mytitlepag">Карта сайта</h2>

					<ul class="sitemap">
						<li><a title="О компании Magniflex" href="/o-magniflex/company/">О Magniflex</a>
						<ul>							
							<li><a title="О компании Magniflex" href="/o-magniflex/company/">О компании</a></li>
							<li><a title="Важно Magniflex" href="/o-magniflex/mission/">Важно</a></li>
							<li><a title="Почему Magniflex" href="/o-magniflex/why-magniflex/">Почему Magniflex</a></li>
							<li><a title="История компании Magniflex" href="/o-magniflex/company-history/">История компании</a></li>
							<li><a title="Magniflex во всем мире" href="/o-magniflex/magniflex-in-the-world/">Magniflex во всем мире</a></li>
							<li><a title="Звезды и Magniflex" href="/o-magniflex/stars-magniflex/">Звезды и Магнифлекс</a></li>
							<li><a title="Единственное Представительство Magniflex В РФ" href="/o-magniflex/oficialnoe-predstavitelstvo-magniflex/">Единственные в РФ</a></li>
							<li><a title="На элитных пляжах" href="/o-magniflex/magniflex-daydreamer/">На элитных пляжах</a></li>
						</ul>
						</li>
						<li>
						<a title="О продукции Magniflex" href="/production/nastoyashchie-ortopedicheskie-matrasy/">О продукции</a>
						<ul>
							<li></li>
							<li><a title="Настоящие ортопедические матрасы Magniflex" href="/production/nastoyashchie-ortopedicheskie-matrasy/">Настоящие ортопедические</a></li>
							<li><a title="Исключительно итальянская продукция" href="/production/made-in-Italy/">Сделано в Италии</a></li>
							<li><a title="Вакуумная упаковка матрасов Magniflex" href="/production/vakuumnaya-upakovka/">Вакуумная упаковка</a></li>
							<li><a title="Ткани и Технологии, используемые в матрасах и подушках Magniflex" href="/production/fabric-and-treatments/">Ткани и технологии</a></li>
							<li><a title="Наполнители, используемые в итальянских матрасах Magniflex" href="/production/inner-plates/">Наполнители</a></li>
							<li><a title="Проблемы" href="/production/problem/">Проблемы</a></li>
						</ul>
						</li>
					<li>
						<a title="Каталог" href="/production/nastoyashchie-ortopedicheskie-matrasy/">Каталог</a>
						<ul>
							<li></li>
							<li><a title="Настоящие ортопедические матрасы Magniflex" href="/catalog/mattresses/">Ортопедические матрасы</a></li>
							<li><a title="Исключительно итальянская продукция" href="/catalog/elitnye-matrasy/">Элитные матрасы</a></li>
							<li><a title="Вакуумная упаковка матрасов Magniflex" href="/catalog/detskie-ortopedicheskie-matrasy/">Детские матрасы</a></li>
							<li><a title="Ткани и Технологии, используемые в матрасах и подушках Magniflex" href="/catalog/Orthopedic_pillows/">Ортопедические подушки</a></li>
							<li><a title="Наполнители, используемые в итальянских матрасах Magniflex" href="/catalog/vacuum_pillows/">Вакуумные подушки</a></li>
							<li><a title="Ткани и Технологии, используемые в матрасах и подушках Magniflex" href="/catalog/gelevye-podushki/">Гелевые подушки</a></li>
							<li><a title="Наполнители, используемые в итальянских матрасах Magniflex" href="/catalog/bases/">Аксессуары</a></li>
							<li><a title="Размеры и Цены" href="/pokupatelyam/sizes-and-prices/">Размеры и Цены</a></li>
						</ul>
					</li>
					<li>
						<a title="Информация покупателям" href="/pokupatelyam/oplata-i-dostavka/">Покупателям</a>
						<ul >
							<li></li>
							<li><a title="Оплата и доставка товаров" href="/pokupatelyam/oplata/">Оплата</a></li>
							<li><a title="Оплата и доставка товаров" href="/pokupatelyam/oplata-i-dostavka/">Доставка</a></li>
							<li><a title="Как оформить заказ" href="/pokupatelyam/kak-oformit-zakaz/">Как оформить заказ</a></li>
							<li><a title="Гарантия и срок эксплуатации" href="/pokupatelyam/warranty/">Гарантия</a></li>
							<li><a title="Возврат и обмен товара" href="/pokupatelyam/obmen-i-vozvrat/">Обмен и Возврат</a></li>
							<li><a title="Сертификаты Magniflex" href="/pokupatelyam/certificates/">Сертификаты</a></li>
							<li><a title="Размеры и цены матрасов Magniflex" href="/pokupatelyam/sizes-and-prices/">Размеры и Цены</a></li>
							<li><a title="Вопросы и ответы на часто задаваемые вопросы" href="/pokupatelyam/questions-answers/">Вопросы и Ответы</a></li>
						</ul>
					</li>
					<li>
						<a title="Информация Партнерам" href="#">Партнерам</a>
						<ul >
							<li></li>
							<li><a title="Предложение для отелей" href="/o-magniflex/predlozhenie-dlya-otelej/">Предложение для отелей</a></li>
							<li><a title="Стать дилером" href="/o-magniflex/dileram/">Стать дилером</a></li>
							<li><a title="Оптовым покупателям" href="/o-magniflex/optovim-pokupatelyam/">Оптовым покупателям</a></li>
							
							
						</ul>
					</li>
					<li>
						<a title="Шоу-рум Magniflex" href="/o-magniflex/show-room-matrasov/">Шоу-рум</a></li>
					<li>
						<a title="Акции и Скидки" href="/skidki-magniflex/">Скидки</a>
						<ul >
							<li></li>
							
							<li><a title="Скидки на открытые матрасы Magniflex" href="/skidki-magniflex/skidki-na-otkrytye-matrasy-magniflex/">Открытые матрасы</a></li>
							<li><a title="25% скидка на подушки Magniflex" href="/skidki-magniflex/">25% скидка на подушки</a></li>	
							
						</ul>
					</li>
					<li>
						<a title="Адреса магазинов Magniflex" href="/o-magniflex/adresa-magazinov/">Магазины</a>
						<ul >
							<li></li>
							<li><a title="Интернет-магазин Magniflex" href="/o-magniflex/internet-magazin-matrasov/">Интернет-Магазин</a></li>
							<li><a title="Шоу-рум матрасов Magniflex" href="/o-magniflex/show-room-matrasov/">Шоу-рум</a></li>
							<li><a title="Адреса магазинов Magniflex в Москве" href="/o-magniflex/moscow/">Москва</a></li>
							<li><a title="Адреса магазинов Magniflex в России" href="/o-magniflex/russia/">Россия</a></li>
							<li><a title="Магазины Magniflex в других странах" href="/o-magniflex/magniflex-mattresses-world/">Другие страны</a></li>
						</ul>
					</li>
					</ul>
					<a title="Ортопедические матрасы Magniflex" href="/catalog/mattresses/">Ортопедические матрасы</a><br />
					<a title="Ортопедические матрасы Magniflex" href="/catalog/orthopedic_mattresses/">Ортопедические матрасы</a><br />
					<a  title="Ортопедический матрас Merino (Merinos)" href="/catalog/orthopedic_mattresses/MERINOS/">Merino</a> <br />
					<a title="Ортопедический матрас Merino (Merinos)" href="/catalog/orthopedic_mattresses/MERINOS/">(Merinos)</a><br />
					<a  title="Ортопедический матрас Merino Green Tea" href="/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/">Merino Green Tea</a><br />
					<a  title="Ортопедический матрас Bamboo" href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/">Bamboo</a><br />
					<a  title="Ортопедический матрас WaterLattex" href="/catalog/orthopedic_mattresses/WATERLATTEX/">WaterLattex</a><br />
					<a  title="Ортопедический матрас New NaturComfort" href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/">New NaturComfort</a><br />
					<a  title="Ортопедический матрас Natur Baci" href="/catalog/orthopedic_mattresses/natur-baci-mattress/">Natur Baci</a><br />
					<a  title="Ортопедический матрас Memo Merino" href="/catalog/orthopedic_mattresses/MEMO-MERINO/">Memo Merino</a><br />
					<a title="Удобное сравнение матрасов Magniflex" href="/orthopedic-mattresses/sravnenie-matrasov/">Удобное сравнение матрасов</a><br />
					<a title="Новинки матрасов Magniflex!" href="/catalog/new-mattresses/">Новинки! Премиум-класс</a><br />
					<a  title="Ортопедический матрас Rest 9" href="/catalog/new-mattresses/Rest+9/">Rest 9</a><br />
					<a  title="Ортопедический матрас Comfort Plus 10" href="/catalog/new-mattresses/Comfort+Plus+10/">Comfort Plus 10</a><br />
					<a  title="Ортопедический матрас FreshGel 10" href="/catalog/new-mattresses/FreshGel+10/">FreshGel 10</a><br />
					
					<a title="Элитные матрасы Magniflex" href="/catalog/elitnye-matrasy/">Элитные матрасы</a><br />
					<a  title="Коллекция этилных матрасов Virtus" href="/elitnye-matrasy/virtus/">Коллекция Virtus</a><br />
					<a  title="Элитный матрас Virtus 30" href="/catalog/elitnye-matrasy/Virtus-30/">Virtus 30</a><br />
					<a  title="Коллекция этилных матрасов Harmony" href="/elitnye-matrasy/harmony/">Коллекция Harmony</a><br />
					<a  title="Элитный матрас Exchange Memoform Dual" href="/catalog/elitnye-matrasy/Exchange-Memoform-Dual/">Exchange Memoform Dual</a><br />
					<a  title="Коллекция этилных матрасов Magnificent" href="/elitnye-matrasy/magnificient/">Коллекция Magnificent</a><br />
					<a  title="Элитный матрас Magnificent 12" href="/catalog/elitnye-matrasy/Magnificent-12/">Magnificent 12</a><br />
					<a  title="Коллекция этилных матрасов Imperiale" href="/elitnye-matrasy/imperiale/">Коллекция Imperiale</a><br />
					<a  title="Элитный матрас Imperiale 24" href="/catalog/elitnye-matrasy/Imperiale-24/">Imperiale 24</a><br />
					<a  title="Элитный матрас Imperiale 28" href="/catalog/elitnye-matrasy/Imperiale-28/">Imperiale 28</a><br />
					<a  title="Элитный матрас Imperiale 33" href="/catalog/elitnye-matrasy/Imperiale-33/">Imperiale 33</a><br />
					<a  title="Коллекция этилных матрасов Comfort Delux" href="/elitnye-matrasy/comfort-delux/">Коллекция Comfort Delux</a><br />
					<a  title="Элитный матрас Comfort Plus 10" href="/catalog/elitnye-matrasy/Comfort-Plus-10/">Comfort Plus 10</a><br />
					<a  title="Элитный матрас Comfort Plus 12" href="/catalog/elitnye-matrasy/Comfort-Plus-12/">Comfort Plus 12</a><br />
					<a  title="Коллекция этилных матрасов FreshGel" href="/elitnye-matrasy/freshgel/">Коллекция FreshGel</a><br />
					<a  title="Элитный матрас FreshGel 9" href="/catalog/elitnye-matrasy/FreshGel-9/">FreshGel 9</a><br />
					<a  title="Элитный матрас FreshGel 10" href="/catalog/elitnye-matrasy/FreshGel-10/">FreshGel 10</a><br />
					<a  title="Элитный матрас FreshGel 12" href="/catalog/elitnye-matrasy/FreshGel-12/">FreshGel 12</a><br />
					<a  title="Коллекция этилных матрасов Rest" href="/elitnye-matrasy/rest/">Коллекция Rest</a><br />
					<a  title="Элитный матрас Rest 9" href="/catalog/elitnye-matrasy/Rest-9/">Rest 9</a><br />
					<a  title="Элитный матрас Rest 10" href="/catalog/elitnye-matrasy/Rest-10/">Rest 10</a><br />
					<a  title="Элитный матрас Rest 12" href="/catalog/elitnye-matrasy/Rest-12/">Rest 12</a><br />
					<a href="/catalog/elitnye-matrasy/Virtus-30/"></a>
					<a title="Детские матрасы и подушки Magniflex" href="/catalog/detskie-ortopedicheskie-matrasy/">Детские матрасы</a><br />
					<a title="Детские ортопедические матрасы Magniflex" href="/catalog/detskie-ortopedicheskie-matrasy/">Детские матрасы</a><br />
					<a  title="Ортопедический матрас Merino для детей" href="/catalog/detskie-matrasy/MERINO-childrens/">Merino для детей</a><br />
					<a  title="Ортопедический матрас Merino Bamboo для детей" href="/catalog/detskie-matrasy/Merino+Bamboo/">Merino Bamboo для детей</a><br />					
					<a title="Подушки Magniflex" href="/catalog/pillows/">Подушки</a><br />
					<a title="Вакуумные подушки Magniflex" href="/catalog/vacuum_pillows/">Вакуумные подушки</a><br />
					<a  title="Вакуумная подушка Relaxsan" href="/catalog/vacuum_pillows/RELAXSAN/">Подушка Relaxsan</a><br />
					<a title="Ортопедические подушки Magniflex" href="/catalog/Orthopedic_pillows/">Ортопедические подушки</a><br />
					<a  title="Ортопедическая подушка Memory" href="/catalog/Orthopedic_pillows/MEMORY/">Подушка Memory</a><br />
					<a  title="Ортопедическая подушка Orthomassage" href="/catalog/Orthopedic_pillows/ORTHOMASSAGE/">Подушка Orthomassage</a><br />
					<a  title="Ортопедическая подушка Comfort Pillow" href="/catalog/Orthopedic_pillows/COMFORT-PILLOW/">Подушка Comfort Pillow</a><br />
					<a  title="Ортопедическая подушка Aloe Vera" href="/catalog/Orthopedic_pillows/ALOE+VERA/">Подушка Aloe Vera</a><br />
					<a title="Гелевые подушки Magniflex" href="/catalog/gelevye-podushki/">Гелевые подушки </a><br />
					<a  title="Гелевая подушка FreshGel Wave" href="/catalog/gelevye-podushki/FreshGel+Wave/">FreshGel Wave</a><br />
					<a  title="Гелевая подушка FreshGel Standard" href="/catalog/gelevye-podushki/FreshGel+Standart/">FreshGel Standard</a><br />
					<a  title="Гелевая подушка MemoGel Standard" href="/catalog/gelevye-podushki/MemoGel+Standart/">MemoGel Standard</a><br />
					<a title="Когда нужно менять подушку" href="/pokupatelyam/kogda-menyat-podushku/">Когда менять подушки?</a><br />
				
					<a title="Аксессуары Magniflex" href="/catalog/bases/">Аксессуары</a><br />
					<a title="Ортопедическое основание для матрасов Magniflex" href="/catalog/bases/DREAM/">Ортопедическое основание для матрасов</a><br />
					<a href="/catalog/bases/DREAM/"></a>

					</div>
					<div class="clear"></div>
				</div>
			'
		),
		
		
	);
?>