<?php
	if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

	$get_breadcrumbs = function($item, $products, $categories, $pages){
		$breadcrumbs_ret = array(array('Марка №1 в Италии','/'));

		foreach($pages as $el){
			if($item == $el['address']){
				if($el['parent_address'] && $el['parent_name']) {
					array_push($breadcrumbs_ret, array($el['parent_name'], '/'.$el['parent_address']));
				}
				array_push($breadcrumbs_ret, array($el['name'], '/'.$el['address']));
				break;
			}		
		}		
		return $breadcrumbs_ret;
	};

	include_once($_SERVER['DOCUMENT_ROOT'].'/template/widgets/news.php');


	//$breadcrumbs_subclass = 'breadcrumbs_news';

	$pages = array(
		array(
			'address' => '',
			'parent_address' => '',
			'parent_name' => '',
			'name' => '',
			'left_sidebar' => '',
			'title' => 'Официальный сайт MAGNIFLEX | Ортопедические матрасы и подушки',
			'description' => 'Интернет-магазин Magniflex предоставляет уникальную возможность купить фирменные ортопедические матрасы и подушки итальянского производства с доставкой по России. Мы - единственные официальные представители Магнифлекс в РФ, что гарантирует самые низкие цены и непревзойденное качество предлагаемых товаров.',
			'keywords' => 'магнифлекс, матрас, сайт, италия, магазин, москва, производство, официальный, итальянский, фирменный, купить, magniflex',
			'text' => '
				<div class="sl_top">
                    <div class="main_sl">
						<div class="ama_main_slide">
							<img src="/img/banners/buffon_choose_magniflex.jpg" alt="Джанлуиджи Буффон, капитан сборной Италии, чемпион мира" />
							<div class="ama_main_slide_text_center">
								<p class="ama_slider_title">Я выбираю Magniflex</p>
								<p class="ama_slider_desc">Джанлуиджи Буффон, капитан сборной Италии, чемпион мира</p>
								<a href="/o-magniflex/stars-magniflex/" class="button button--blue">Узнать о звездах Magniflex</a>
							</div>
						</div>
						
						<div class="ama_main_slide">
							<img class="mobLeft-15vh" src="/img/Slide01.png" alt="Итальянские ортопедические матрасы Magniflex" />
							<div class="ama_main_slide_text_center">
								<p class="ama_slider_title">Итальянские ортопедические матрасы</p>
								<p class="ama_slider_desc">Матрасы №1 в Италии. С 1962 года</p>
								<a href="/o-magniflex/company/" class="button button--blue">Узнать больше</a>
							</div>
						</div>
						<div class="ama_main_slide">
							<img  class="mobLeft15vh" src="/img/Slide02.png" alt="Идеальная формула здорового сна от Magniflex" />
							<div class="ama_main_slide_text_center">
								<p class="ama_slider_title">Идеальная формула здорового сна</p>
								<p class="ama_slider_desc">Самые передовые технологии, инновационные материалы, элегантные ткани</p>
								<a href="/production/inner-plates/" class="button button--blue">Ознакомиться с технологиями</a>
							</div>
						</div>
						<div class="ama_main_slide">
							<img  class="mobLeft-20vh" src="/img/Slide03.png" alt="Непревздойденный комфорт дарят матрасы и подушки Magniflex" />
							<div class="ama_main_slide_text_center">
								<p class="ama_slider_title">Непревздойденный комфорт</p>
								<p class="ama_slider_desc">Настоящие шедевры научной и дизайнерской мысли</p>
								<a href="/catalog/elitnye-virtus/" class="button button--blue">Коллекция Virtus</a>
							</div>
						</div>
						<div class="ama_main_slide">
							<img  class="mobLeft-30vh" src="/img/Magnistretch.jpg" alt="Натуральные ткани и материалы Magniflex" />
							<div class="ama_main_slide_text_center">
								<p class="ama_slider_title">Только натуральные ткани и материалы</p>
								<p class="ama_slider_desc">Сертифицировано Oeko-Tex</p>
								<a href="/pokupatelyam/certificates/" class="button button--blue">Ознакомиться  с сертификатами</a>
							</div>
                        </div>
                    </div>
                </div>
				
        <div class="titleSubtitle titleSubtitle--home">
        <h2 class="title title--blue">Настоящие шедевры, когда речь заходит о комфортном и здоровом сне!</h2>
        <p class="subtitle subtitle--grey">Коллекции Magniflex, уникальные и неповторимые, отражают страсть и преданность искусству наслаждения отдыхом.</p>
        </div>
        
		
				
        <div class="ama_blocks_general">
            <div class="card link-this">
            <a href="/catalog/pillows/" class="info-link">
            <img src="/img/main/orthopedic_pillow.jpg" alt="Итальянские ортопедические подушки Magniflex" title="Итальянские ортопедические подушки Magniflex для всей семьи" class="img-responsive ">
            </a>
                <div class="info">
                <a href="/catalog/pillows/" class="info-link">
                <h2 class="title title--card">Ортопедические подушки</h2>
                <p class="subtitle subtitle--card">Гелевые и с эффектом «памяти». Для всей семьи!</p>
                </a>
                <a href="/catalog/pillows/" class="button button--card">Ортопедические подушки Magniflex</a>
                </div>
            </div>
            <div class="card link-this">
            <a href="/catalog/mattresses/" class="info-link">
            <img src="/img/main/orthopedic_matresses.jpg" alt="Итальянские ортопедические матрасы Magniflex" title="Итальянские ортопедические матрасы Magniflex для детей и взрослых" class="img-responsive ">
            </a>
                <div class="info">
                <a href="/catalog/mattresses/" class="info-link">
                <h2 class="title title--card">Ортопедические матрасы</h2>
                <p class="subtitle subtitle--card">Для детей и взрослых. С любовью из Италии!</p>
                </a>
                <a href="/catalog/mattresses/" class="button button--card">Ортопедические матрасы Magniflex</a>
                </div>
            </div>
  
            <div class="card link-this">
            <a href="/o-magniflex/stars-magniflex/" class="info-link">
            <img src="/img/main/buffon_magniflex.jpg" alt="Амбассадор Магнифлекс - Джанлуиджи Буффон" title="Амбассадор бренда - звезда мирового футбола, вратарь Джанлуиджи Буффон" class="img-responsive ">
            </a>
                <div class="info">
                <a href="/o-magniflex/stars-magniflex/" class="info-link">
                <h2 class="title title--card">Звезды выбирают Magiflex</h2>
				<p class="subtitle subtitle--card">Амбассадор бренда - звезда мирового футбола, чемпион мира, Джанлуиджи Буффон</p>
                </a>
                <a href="/o-magniflex/stars-magniflex/" class="button button--card">Узнать больше</a>
                </div>
            </div>
            <div class="card ama_last_card">
                <div class="card link-this" alt="Космические технологии в матрасах" style="background:url(/img/main/martin_magni.jpg);">
				<a href="/production/fabric-and-treatments/" class="info-link">
					<div class="info">
					<div class="button-card">
						<span class="first-line"></span>
						<span class="second-line"></span>
					</div>
					  Используем космические технологии НАСА
					</div>
				</a>
                </div>
                        <div class="card link-this " alt="Сделано в Италии. Флоренция" style="background:url(/img/main/magni_02.jpg);">
							<a href="/production/made-in-Italy/" class="info-link">
								<div class="info">
									<div class="button-card">
										<span class="first-line"></span>
										<span class="second-line"></span>
									</div>
									Вся продукция производится в Италии
								</div>
							</a>
                        </div>
                        <div class="card link-this ">
                            <img src="/img/main/magni_04.jpg" alt="Матрасы на пляжах" title="" class="img-responsive ">
							<a href="/o-magniflex/magniflex-daydreamer/" class="info-link">
								<div class="info">
									<div class="button-card">
										<span class="first-line"></span>
										<span class="second-line"></span>
									</div>
									Матрасы Magniflex на лучших курортах Мира
								</div>
							</a>
                        </div>
                        <div class="card link-this ">
                            <img src="/img/main/magni_03.jpg" alt="Матрасы Magniflex в лучших отелях Мира" title="" class="img-responsive ">
							<a href="/o-magniflex/magniflex-top-hotel/" class="info-link">
								<div class="info">
									<div class="button-card">
										<span class="first-line"></span>
										<span class="second-line"></span>
									</div>
									Матрасы Magniflex в лучших отелях Мира
								</div>
							</a>
                        </div>
                    </div>
                </div>
				<section class="advantage_grey_block">
					<div class="content_grey_block">
						<div class="item_grey_block">
							<img src="/img/imgama2_icon1.png"/>
							<p class="number_grey_block">100%</p>
							<span class="line_grey_block"></span>
							<p class="text_grey_block">СДЕЛАНО В ИТАЛИИ<br />г. Прато, Тоскана, Флоренция</p>
						</div>
						<div class="item_grey_block">
							<img src="/img/imgama2_icon2.png"/>
							<p class="number_grey_block">9</p>
							<span class="line_grey_block"></span>
							<p class="text_grey_block">МЕЖДУНАРОДНЫХ СЕРТИФИКАТОВ<br />Продукция сертифицирована и в России</p>
						</div>
						<div class="item_grey_block">
							<img src="/img/imgama2_icon3.png"/>
							<p class="number_grey_block">99</p>
							<span class="line_grey_block"></span>
							<p class="text_grey_block">СТРАН<br />более 35 млн покупателей во всем Мире</p>
						</div>
						<div class="item_grey_block">
							<img src="/img/imgama2_icon4.png"/>
							<p class="number_grey_block">55</p>
							<span class="line_grey_block"></span>
							<p class="text_grey_block">ЛЕТ ИСТОРИИ МАГНИФЛЕКС<br />основано в 1962 году</p>
						</div>
					</div>					
				</section>
				<div class="hnb_contvideo previewVideoNatur">
					<video  tabindex="0" style="width:100%;" loop>
					<source src="/data/video/index/video2.mp4" type="video/mp4;" />
					<source src="/data/video/index/video2.webm" type="video/webm;" />
					</video>

					<img class="ama_player_volume on" src="/img/speaker.svg" onclick="offVolumePlayer()"/>
					<img class="ama_player_volume off" src="/img/speaker (1).svg" onclick="onVolumePlayer()" style="display: none;"/>

					<div class="ama_video_player play" onclick="playAmaPlayer()"><img src="/img/play-button.svg"/></div>
					<div class="ama_video_player pause" onclick="pauseAmaPlayer()" style="display: none;"><img src="/img/pause.svg"/></div>
					<script>
					</script>
				</div>
                <div class="ama_cases">
                    <div class="card" style="width: 100%">
                        <a href="/o-magniflex/company/" class="info-link">
                            <img src="/img/case01-new.png" alt="Excellence is  an Italian tradition" title="Excellence is  an Italian tradition" class="img-responsive card--case filtered">
                            <div class="info">
                                <p class="title title--sup">БЕЗОПАСНО</p>
                                <h2 class="title title--card">
									Продукция сертифицирована OEKO-TEC
                                </h2>
                                <p class="subtitle subtitle--card">OEKO-TEC гарантирует, что изделия не содержат химически вредных и токсичных веществ. Безопасно для Вас и для окружающей среды</p>
                            </div>
                        </a>
                    </div>
                    <div class="ama_flex_cases">
                        <div class="card">
                            <a href="/catalog/mattresses/" class="info-link">
                                <img src="/img/case02-new.png" alt="Excellence is  an Italian tradition" title="Excellence is  an Italian tradition" class="img-responsive card--case filtered">
                                <div class="info">
                                    <p class="title title--sup">MAGNIFLEX</p>
                                    <h2 class="title title--card">
                                    Бренд №1 в Италии
                                    </h2>
                                    <p class="subtitle subtitle--card">Одна из самых крупных матрасных фабрик в Европе, производит 10.000 матрасов в день.</p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="/production/fabric-and-treatments/" class="info-link">
                                <img src="/img/case03-new.png" alt="Excellence is  an Italian tradition" title="Excellence is  an Italian tradition" class="img-responsive card--case filtered">
                                <div class="info">
                                    <p class="title title--sup">Качество</p>
                                    <h2 class="title title--card">
                                    Высочайшее качество  
                                    </h2>
                                    <p class="subtitle subtitle--card">Отбираем вручную уникальные ткани и материалы.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--<section class="banner banner--store">
                    <div>
                        <p class="title title--store">Мы экспортируем<br>
                            Сделанный в Италии отдых<br>
                            в 99 странах</p>
                        <img src="/img/states.png" alt="" class="img-responsive">
                    </div>
                    <div>
                        <a href="/o-magniflex/contacts/" class="button button--white">Найти магазин поблизости</a>
                    </div>
				</section>-->
				
				<section   class="ama_container data--social">
				
					<img src="/img/instagram.png" alt="" class="img-responsive social-image">
					
                    <p class="title title--social colordx"><img src="/img/logoX@2x.svg">Мы в Instagram</p>
					<ul class="sets_container_insta">
				<!--	<div class="leftdx slick-arrow" style=""><img src="/img/next.svg" alt=""></div> -->
                        <li class="setheight" style="height: 283px;">
                            <a href="https://www.instagram.com/magniflexrus/" target="_blank" class="data-link">
                                <img src="/img/slide1.jpg" alt="" title="">
							</a>
							<div class="underblockdx">
							<img class="under_insta_imgdx " src="img/magni.jpg" alt="">
							<div class="likenamedx">
								<p>@magniflexrus</p>
								<div class="likedx">
									<img src="img/heart-shape-silhouette.svg" alt="">
									<p>22</p>
								</div>
							</div>
						</div>
                        </li>
                        <li class="setheight" style="height: 283px;">
                            <a href="https://www.instagram.com/magniflexrus/" target="_blank" class="data-link">
                                <img src="/img/slide2.jpg" alt="" title="">
							</a>
							<div class="underblockdx">
								<img class="under_insta_imgdx " src="img/magni.jpg" alt="">
								<div class="likenamedx">
									<p>@magniflexrus</p>
									<div class="likedx">
										<img src="img/heart-shape-silhouette.svg" alt="">
										<p>11</p>
									</div>
								</div>
							</div>
                        </li>
                        <li class="setheight" style="height: 283px;">
                            <a href="https://www.instagram.com/magniflexrus/" target="_blank" class="data-link">
                                <img src="/img/slidd.jpg" alt="" title="">
							</a>
							<div class="underblockdx">
							<img class="under_insta_imgdx " src="img/magni.jpg" alt="">
							<div class="likenamedx">
								<p>@magniflexrus</p>
								<div class="likedx">
									<img src="img/heart-shape-silhouette.svg" alt="">
									<p>17</p>
								</div>
							</div>
						</div>
                        </li>
                        <li class="setheight" style="height: 283px;">
                            <a href="https://www.instagram.com/magniflexrus/" target="_blank" class="data-link">
                                <img src="/img/slide5.jpg" alt="" title="">
							</a>
							<div class="underblockdx">
							<img class="under_insta_imgdx " src="img/magni.jpg" alt="">
							<div class="likenamedx">
								<p>@magniflexrus</p>
								<div class="likedx">
									<img src="img/heart-shape-silhouette.svg" alt="">
									<p>15</p>
								</div>
							</div>
						</div>
						</li>
						<li class="setheight" style="height: 283px;">
						<a href="https://www.instagram.com/magniflexrus/" target="_blank" class="data-link">
							<img src="/img/slide6.jpg" alt="" title="">
						</a>
						<div class="underblockdx">
							<img class="under_insta_imgdx " src="img/magni.jpg" alt="">
							<div class="likenamedx">
								<p>@magniflexrus</p>
								<div class="likedx">
									<img src="img/heart-shape-silhouette.svg" alt="">
									<p>28</p>
								</div>
							</div>
						</div>
					</li>
						<!--	<div class="nextdx slick-arrow" style=""><img src="/img/next.svg" alt=""></div>-->
                    </ul>
					<a target="_blank" href="https://www.instagram.com/magniflexrus/" class="button button--blue">Смотреть все</a>
					
				</section>
				<section class="ama_container display902 oficialRf">
				<h2 class="title title--black">Официальное представительство Magniflex в России</h2>
					<p>
						
Мы — ЕДИНСТВЕННОЕ официальное представительство Magniflex в Российской Федерации.
Гарантируем САМЫЕ НИЗКИЕ цены и наиболее выгодные условия покупки,
подлинность и непревзойденное качество предлагаемых ортопедических товаров: подушек
и фирменных матрасов Magniflex из Италии.



					</p>
				</section>
				<div class="hnb_slid">
				<div id="container_main">
				<div id="slides">

								<div>
									<p class="title_3">Magniflex Merinos – беспружинный ортопедический матрас</p>
									<div class="hnb_slidimg">
										<a href="https://www.magniflex.ru/catalog/mattresses/MERINOS/"><img src="/img/slaydcont/merino.jpg" alt="матрас магнифлекс меринос" /></a>
									</div>
									<div class="hnb_contslidtext">
									Очень упругий, износостойкий и практичный итальянский матрас Merinos – это одна из самых популярных моделей, созданная более двух десятилетий назад. Он выполнен из натуральных компонентов на основе латексной пены. Такой матрас выбирают те, кто ищет наиболее полный ортопедический эффект.
									<br /><br />
									Верхнее покрытие модели имеет две стороны: «летняя» выполнена из хлопка, а «зимняя» – из тонкорунной шерсти овец породы меринос. Это дает возможность ощущать комфорт во время сна в любое время года и в любую погоду. Натуральная шерсть не только согревает прохладными зимними ночами, но и оказывает на организм оздоравливающее воздействие, уменьшая боли, которые вызваны радикулитом или невралгией.
									<br /><br />
									Матрасы из Италии Magniflex Merinos – признанная классика по доступной цене.
									</div>

									<div class="clear"></div>
								</div>

								<div>
								<p class="title_3">Специальный ортопедический матрас для детей – Magniflex Merino</p>
								<div class="hnb_slidimg">
										<a href="https://www.magniflex.ru/catalog/detskie-ortopedicheskie-matrasy/"><img src="/img/slaydcont/merino.jpg" alt="матрас магнифлекс меринос детский" /></a>
									</div>
									<div class="hnb_contslidtext">
									Данная модель разрабатывалась специально для детей лучшими технологами и инженерами концерна Magniflex в союзе с ведущими итальянскими врачами-ортопедами. При этом учитывались все потребности активно растущего организма ребенка. Фирменный матрас Merino является надежной поддержкой для позвоночника и обеспечивает профилактику сколиоза. Продукция рекомендована Центральным институтом травматологии и ортопедии РФ.
<br /><br />
Итальянский журнал Hachette Home признал Magniflex Merino победителем в номинации «Лучший ортопедический матрас для детей». Это вполне обосновано, потому что в нем соединились все самые лучшие свойства и характеристики. Ортопедический матрас для детей Magniflex Merino невероятно износоустойчив, практичен и долговечен. Он не имеет пружин, обладает антиаллергенными и антибактериальными свойствами. Внутренние элементы модели изготовлены из современного материала – Eliocel-40, который по своим характеристикам превосходит природный латекс.
<br /><br />
Купить итальянские матрасы Magniflex Merino с ортопедическим эффектом для детей и подростков Вы можете в нашем интернет-магазине.

									</div>

									<div class="clear"></div>
								</div>

								<!--<div>
								<p class="title_3">Green Tea – беспружинный итальянский матрас с антисептическими свойствами</p>
								<div class="hnb_slidimg">
										<a href="https://www.magniflex.ru/catalog/mattresses/MERINO-GREEN-TEA/ "><img src="/img/slaydcont/merino-green-tea.jpg" alt="матрас магнифлекс green tea" /></a>
									</div>
									<div class="hnb_contslidtext">
									Матрасы Magniflex из коллекции Green Tea знамениты не только прекрасным ортопедическим эффектом, но и антибактериальными свойствами поверхности чехла, ткань которого пропитана экстрактом зеленого чая. Поэтому к таким характеристикам материала, как высокая эластичность и способность к терморегуляции, добавляются все полезные свойства этого природного антисептика. В результате матрасы Magniflex Green Tea обрели способность дарить здоровый и глубокий сон.
<br /><br />
Модель изготовлена на основе современного материала Eliocel-60, который в большей степени, нежели природный латекс, способен помочь Вам принять максимально удобное положение, выпрямить позвоночник и успокоить нервы. Это становится хорошей профилактикой болезней дыхательной системы и опорно-двигательного аппарата.
									</div>

									<div class="clear"></div>
								</div>-->

								<div>
								<p class="title_3">Magniflex Bamboo с волокнами бамбука</p>
								<div class="hnb_slidimg">
										<a href="https://www.magniflex.ru/catalog/mattresses/MERINO-BAMBOO/"><img src="/img/slaydcont/merino-bambuk.jpg" alt="матрас магнифлекс bambo" /></a>
									</div>
									<div class="hnb_contslidtext">
									В нашем интернет-магазине Вы можете купить фирменные матрасы, ткань чехла которых имеет в своем составе натуральные бамбуковые волокна. Этот природный материал обладает очень сильными антисептическими и дезодорирующими свойствами, не дает размножаться бактериям и уничтожает неприятные запахи. Одним из активных компонентов бамбука является пектин, питающий и восстанавливающий кожу. Таким образом, поверхность этого матраса необычайно благотворно воздействует на организм человека, что вкупе с ортопедическим эффектом внутреннего слоя из эластичного высокотехнологичного материала Eliocel-60 является несомненным преимуществом данной модели.
<br /><br />
Матрас Magniflex Bamboo имеет умеренно жесткую рифленую поверхность, которая дарит комфорт и приятные ощущения, обладает легкими массажными свойствами.

									</div>

									<div class="clear"></div>
								</div>

								<div>
									<p class="title_3">Waterlattex – ортопедический матрас на основе латекса</p>
									<div class="hnb_slidimg">
										<a href="https://www.magniflex.ru/catalog/mattresses/WATERLATTEX/ "><img src="/img/slaydcont/waterlatex.jpg" alt="матрас магнифлекс waterlattex " /></a>
									</div>
									<div class="hnb_contslidtext">
									Модель Waterlattex Merino – это итальянский матрас Magniflex, который имеет «зимнюю» и «летнюю» поверхности, выполненные соответственно из тонкорунной овечьей шерсти и натурального хлопка. У другой разновидности матраса Waterlattex обе стороны изготовлены из шерсти. Такое покрытие весьма благотворно воздействует на кожу, кровообращение, оказывает успокаивающий и ослабляющий боли эффекты.
<br /><br />
Матрасы Waterlattex мягкие и комфортные. Они прекрасно подходят пожилым людям и беременным женщинам, а также тем, кто любит спать на животе или на боку.

									</div>

									<div class="clear"></div>
								</div>



								<div>
									<p class="title_3">Orthomemo Merino – ортопедические матрасы из латекса</p>
									<div class="hnb_slidimg">
										<a href="https://www.magniflex.ru/catalog/mattresses/MEMO-MERINO/ "><img src="/img/slaydcont/memory.jpg" alt="матрас магнифлекс Orthomemo Merino" /></a>
									</div>
									<div class="hnb_contslidtext">
									Матрасы этой модели изготовлены на основе пены из латекса, обладающей высокими показателями плотности, эластичности и вязкости. В ее структуре имеется множество открытых «дышащих» ячеек, способных подстраиваться под изменение веса и формы. Материал Memoform легко повторяет все изгибы Вашего тела, не сжимая и не выталкивая его. Благодаря этому Вы быстро и легко найдете оптимальное положение для спокойного сна.
<br /><br />
Купить матрас «Магнифлекс» модели OrthoOrthomemo Merino – значит окончательно забыть о затекающих мышцах, защемлениях и бессоннице.

									</div>

									<div class="clear"></div>
								</div>
						</div>

				</div>
				</div>
				
				
			'
		),
		array(
			'address' => 'football',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'сборная Италии по футболу',
			'left_sidebar' => 'o-magniflex',
			'title' => 'Компания Magniflex (Магнифлекс): и сборная Италии по фуболу',
			'description' => 'Магнифлекс и сборная Италии по футболу',
			'keywords' => 'magniflex, магнифлекс, компания магнифлекс, сборная Италии',
			'breadcrumbs_image'=>'/img/breadcrumbs_aziendaok.jpg',
			'text' => '
					<!--{left_sidebar}-->
					<h1 class="hnb_mytitlepag">Magniflex и сборная Италии по футболу</h1>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/3IfmTHkk9Qo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/64FLmc3kOmg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<p>Магнифлекс является официальным партнером сборной команды Италии по футболу.</p>
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
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
			<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
			'
		),
		array(
			'address' => 'kak-vybrat-ortopedicheskuyu-podushku',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Как выбрать ортопедическую подушку',
			'left_sidebar' => 'articles',
			'title' => 'Как выбрать ортопедическую подушку',
			'description' => 'Как выбрать ортопедическую подушку',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '

<p>Согласно научным данным около трети своей жизни человек проводит во сне. Конечно, эта величина не является чем-то абсолютным и во многом определяется индивидуальными особенностями. Одни люди спят меньше, другие &ndash; больше. Поэтому главный показатель &ndash; не количество часов, затраченных тем или иным человеком на сон, а то, насколько отдохнувшим он просыпается. И вот как раз с этим, к сожалению, часто возникают проблемы. Если вы спите достаточно, но при этом в дневное время у вас болит голова, вы часто зеваете и чувствуете, что память и внимание вас подводят, то вероятность того, что вам не удается полноценно отдохнуть в ночное время, весьма велика.</p>
<h3>Как улучшить качество сна</h3>
<p>Один из главных факторов, мешающих нормальному сну, &ndash; неправильное положение головы. В результате шейные мышцы недостаточно расслабляются, что в свою очередь приводит к постепенной деформации шейных позвонков. Именно это становится причиной головных и болей в области шеи. Однако существуют способы справиться с этой проблемой &ndash; следует только внимательно отнестись к тому, на чем вы спите. Матрас должен быть ровным и достаточно твердым, но при этом &ndash; не жестким, а подушка &ndash; относиться к категории ортопедических.</p>
<h3>Что такое ортопедические подушки</h3>
<p>Такие подушки отличает особая анатомическая форма. Именно за счет нее достигается мягкая, но при этом постоянная и устойчивая поддержка шеи, головы и плечевого пояса. Кроме того, <a href="https://www.magniflex.ru/catalog/pillows/">ортопедические подушки</a> оснащены двумя различными по высоте валиками, что позволяет каждому выбрать наиболее удобную степень поддержки. Благодаря этому физиологические изгибы шейного и грудного отделов позвоночника остаются в правильном положении.</p>
<h3>Критерии выбора.</h3>
<h3>Виды наполнителей.</h3>
<p>Сегодня существует большое количество наполнителей для ортопедических подушек, которые предлагают различные производители. Однако мы рекомендуем обратить внимание на два запатентованных материала от компании Magniflex, которые способны подарить настоящее расслабление и комфорт.</p>
<ul style="
  list-style-type: disc;
  padding-left: 20px;
">
	<li><h3>Memoform Magnifoam.</h3> 
	<p>	Это особая латексная пена с эффектом памяти. Под действием давления и тепла вашего тела материал принимает форму, максимально отвечающую особенностям строения шеи и головы, даря непревзойденный комфорт.</p>
	</li>
	<li><h3>Magnigel Foam.</h3>
	<p>В основе этого современного материала &ndash; сверхмягкий, очень упругий, воздухопроницаемый гель, обладающий пористой структурой. Magnigel Foam создан специально для комфортного сна: он способен подарить прохладу летом и помочь согреться зимой, так как поддерживает стабильную температуру на поверхности соприкосновения с телом. <a href="https://www.magniflex.ru/catalog/gelevye-podushki/">Гелевые ортопедические подушки</a> остаются всегда сухими, впитывая влагу, как губка. Способность материала &laquo;дышать&raquo; обеспечивает постоянное ощущение свежести.</p></li>
</ul>
		'
		),
		array(
			'address' => 'zachem-nuzhna-ortopedicheskaya-podushka',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Зачем нужна ортопедическая подушка',
			'left_sidebar' => 'articles',
			'title' => 'Зачем нужна ортопедическая подушка',
			'description' => 'Зачем нужна ортопедическая подушка',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '

<p>Согласно медицинским данным значительный процент людей страдает различными заболеваниями позвоночника, в том числе остеохондрозами шейного и грудного отделов. Но далеко не все видят какую-либо связь между своим заболеванием и положением тела во время сна. А меж тем одно нередко является следствием другого. И головная боль, дискомфорт в области шеи, ощущение постоянной усталости, нарушения внимания и памяти могут быть в значительной степени вызваны неподходящей подушкой. К сожалению, выбору этой принадлежности для сна все еще уделяется непростительно мало внимания. Более того, многие до сих пор считают, что полезнее спать вообще без подушки. Но последнее предположение в корне неверно.</p>
<h3>Почему необходимо спать на подушке</h3>
<p>Необходимость использования подушки обусловлена некоторыми особенностями нашего позвоночника. Для того чтобы эффективно гасить нагрузки, возникающие при ходьбе, позвоночный столб в грудном и шейном отделах имеет два изгиба &ndash; вперед и назад. Они называются лордозом и кифозом соответственно. Ребенок рождается на свет с прямым позвоночником, а изгибы формируются уже позже, когда малыш начинает держать голову и учится ходить. Поэтому детям на первых месяцах жизни действительно не требуется подушка. А вот у взрослых все обстоит иначе, и сон на плоской поверхности приводит к тому, что голова &laquo;заваливается&raquo; назад, а мышцы чрезмерно напрягаются. Именно эту проблему и устраняет правильная подушка.</p>
<h3>Проблемы при использовании неправильно подобранных подушек</h3>
<p>Стандартные модели, вне зависимости от типа наполнителя, на первый взгляд кажутся удобными и мягкими. Но их использование в тех случаях, когда подушка подобрана неверно, опасно тем, что шейный отдел позвоночника постоянно находится в неправильном, чрезмерно изогнутом положении и может постепенно деформироваться. В результате мышцы перенапрягаются, а из-за этого позвоночные артерии, снабжающие кровью мозг, оказываются сдавленными. Это в свою очередь приводит к недостатку кислорода и, как следствие, головным болям, шуму в ушах, бессоннице и головокружению. Кроме того, именно &laquo;неправильная&raquo; подушка, провоцирующая чрезмерное расслабление мягкого нёба, является одной из распространенных причин храпа.</p>
<h3>Как повысить качество сна</h3>
<p>Чтобы избежать проблем с позвоночником, следует соблюдать одно основополагающее правило: во время сна следует занять наиболее физиологичное положение. Для этого необходимо, чтобы шейный отдел составлял прямую линию с прочими отделами позвоночника. Это не только обеспечит вам полноценный отдых, но и станет лучшей профилактикой развития остеохондроза. Именно в таком положении и поддерживает шею и голову <a href="https://www.magniflex.ru/catalog/pillows/">ортопедическая подушка</a>.</p>
<h3>Отличия ортопедических подушек от обычных </h3>
<p>Физиологичное положение шейного отдела позвоночника и плечевого пояса достигается благодаря анатомической форме ортопедической подушки, предусматривающей наличие одного или двух валиков, расположенных по краям. Кроме того, материал, служащий основой, имеет оптимальные показатели мягкости, упругости и термочувствительности. Чаще всего для этой цели используют натуральный или искусственный латекс и пенополиуретан, отличающиеся, помимо всего прочего, еще и высокой гигиеничностью.</p>
<p>В подушках <a href="https://www.magniflex.ru/">Magniflex</a> используется натуральная латексная пена!</p>
		'
		),
		array(
			'address' => 'articles',
			'parent_address' => '',
			'parent_name' => 'Главная',
			'name' => 'Статьи',
			'left_sidebar' => 'articles',
			'title' => 'Статьи',
			'description' => 'Статьи',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs.jpg',
			'text' => '
			<style>
				.hnb_conttextright {
					width: 100%;
				}
				.hnb_catlogsection {
					display:none;
				}
				</style>
		<div class="cb-line clearfix">        <article id="post-50355" class="cb-blog-style-c clearfix" role="article">
          <div class="cb-mask">
			   <a href="/articles/kak-vybrat-ortopedicheskuyu-podushku/"><img width="360" height="240" src="/img/pillow-01.png" class="attachment-cb-360-240 wp-post-image" alt="6 trucos para conservar el frío de tu nevera"></a> 
			</div>
          <div class="cb-meta">
             <h2 class="h4"><a href="/articles/kak-vybrat-ortopedicheskuyu-podushku/">Как выбрать ортопедическую подушку</a></h2>
             <div class="cb-byline">
			 <div class="cb-excerpt">
				Краткий обзор и ответы на вопросы: <br>
				1. Что такое ортопедическая подушка? <br>
				2. Зачем нужны ортопедические подушки?<br>
				3. Что внутри ортопедической подушки?<br>
			 </div>
			 </div>
          </div>
        </article>
        <article id="post-53538" class="cb-blog-style-c clearfix" role="article">
          <div class="cb-mask">
			   <a href="/articles/zachem-nuzhna-ortopedicheskaya-podushka/"><img width="360" height="240" src="/img/pillow-02.png" class="attachment-cb-360-240 wp-post-image" alt="Baby Gigl: el biberón que evita cólicos y atragantamientos"></a> 
			</div>
          <div class="cb-meta">
             <h2 class="h4"><a href="/articles/zachem-nuzhna-ortopedicheskaya-podushka/">Зачем нужна ортопедическая подушка</a></h2>
             <div class="cb-byline">
			 <div class="cb-excerpt">
				Можно ли улучшить качество сна при помощи специальной подушки? Мифы и реальность.
			 </div>
			 </div>
          </div>
        </article>
        <article id="post-53369" class="cb-blog-style-c clearfix cb-last" role="article">
          <div class="cb-mask">
			   <a href="/articles/preimushhestva-ortopedicheskikh-podushek/"><img width="360" height="240" src="/img/pillow-03.png" class="attachment-cb-360-240 wp-post-image" alt="10 trucos para convertirte en el rey de WhatsApp"></a>          
			</div>
          <div class="cb-meta">
             <h2 class="h4"><a href="/articles/preimushhestva-ortopedicheskikh-podushek/">Преимущества ортопедических подушек</a></h2>
             <div class="cb-byline">
			 <div class="cb-excerpt">
				Чем же отличается «ортопедическая» от «обыкновенной» подушки, кроме цены и громких слов? Так ли нужна анатомическая форма? Что такое «гипоаллергенность»?
			 </div>
			 </div>
          </div>
        </article>
</div>
<div class="cb-line clearfix">        <article id="post-50355" class="cb-blog-style-c clearfix" role="article">
          <div class="cb-mask">
			   <a href="/articles/polza-ortopedicheskix-podushek/"><img width="360" height="240" src="/img/pillow-04.png" class="attachment-cb-360-240 wp-post-image" alt="6 trucos para conservar el frío de tu nevera"></a>        
		  </div>
          <div class="cb-meta">
             <h2 class="h4"><a href="/articles/polza-ortopedicheskix-podushek/">Польза ортопедических подушек</a></h2>
             <div class="cb-byline">
			 <div class="cb-excerpt">
				Современные исследования выявили четкую взаимосвязь между положением головы и шеи человека во сне и его самочувствием.
			 </div>
			 </div>
          </div>
        </article>
        <article id="post-53538" class="cb-blog-style-c clearfix" role="article">
          <div class="cb-mask">
			   <a href="/articles/tipy-ortopedicheskix-podushek/"><img width="360" height="240" src="/img/pillow-05.png" class="attachment-cb-360-240 wp-post-image" alt="Baby Gigl: el biberón que evita cólicos y atragantamientos"></a>          
			</div>
          <div class="cb-meta">
             <h2 class="h4"><a href="/articles/tipy-ortopedicheskix-podushek/">Типы ортопедических подушек</a></h2>
             <div class="cb-byline">
			 <div class="cb-excerpt">
				Обеспечение правильного положения головы и шеи во время сна, оптимальная поддержка без давления на мягкие ткани – залог полноценного отдыха.
			 </div>
			 </div>
          </div>
        </article>
        <article id="post-53369" class="cb-blog-style-c clearfix cb-last" role="article">
          <div class="cb-mask">
			   <a href="/articles/kak-vybrat-italyanskij-matras/"><img width="360" height="240" src="/img/pillow-06.png" class="attachment-cb-360-240 wp-post-image" alt="10 trucos para convertirte en el rey de WhatsApp"></a>          
			</div>
          <div class="cb-meta">
             <h2 class="h4"><a href="/articles/kak-vybrat-italyanskij-matras/">Как выбрать итальянский матрас</a></h2>
             <div class="cb-byline">
			 <div class="cb-excerpt">
				Италия является одной из лидирующих стран в сфере производства ортопедического оборудования для сна и отдыха. Сегодня на рынке можно встретить большое разнообразие матрасов, изготовленных компаниями с Апеннинского полуострова.
			 </div>
			 </div>
          </div>
        </article>
</div>
<div class="cb-line clearfix">
        <article id="post-50355" class="cb-blog-style-c clearfix" role="article">
          <div class="cb-mask">
			   <a href="/articles/osobennosti-italyanskix-matrasov/"><img width="360" height="240" src="/img/matress-01.png" class="attachment-cb-360-240 wp-post-image" alt="6 trucos para conservar el frío de tu nevera"></a>          
			</div>
          <div class="cb-meta">
             <h2 class="h4"><a href="/articles/osobennosti-italyanskix-matrasov/">Особенности итальянских матрасов</a></h2>
             <div class="cb-byline">
			 <div class="cb-excerpt">
				Среди огромного разнообразия матрасов для сна и отдыха, представленных на рынке, особое место занимают изделия, выпускаемые в Италии.
			 </div>
			 </div>
          </div>
        </article>
        <article id="post-53538" class="cb-blog-style-c clearfix" role="article">
          <div class="cb-mask">
			   <a href="/articles/osobennosti-elitnyx-italyanskix-matrasov/"><img width="360" height="240" src="/img/matress-02.png" class="attachment-cb-360-240 wp-post-image" alt="Baby Gigl: el biberón que evita cólicos y atragantamientos"></a>          
			</div>
          <div class="cb-meta">
             <h2 class="h4"><a href="/articles/osobennosti-elitnyx-italyanskix-matrasov/">Особенности элитных итальянских матрасов</a></h2>
             <div class="cb-byline">
			 <div class="cb-excerpt">
				Итальянские спальные матрасы класса премиум являются эталонными образцами современных разработок в области товаров для сна и отдыха.
			 </div>
			 </div>
          </div>
        </article>
        <article id="post-53369" class="cb-blog-style-c clearfix cb-last" role="article">
          <div class="cb-mask">
			   <a href="/articles/konstrukciya-italyanskix-matrasov/"><img width="360" height="240" src="/img/matress-03.png" class="attachment-cb-360-240 wp-post-image" alt="10 trucos para convertirte en el rey de WhatsApp"></a>         
			</div>
          <div class="cb-meta">
             <h2 class="h4"><a href="/articles/konstrukciya-italyanskix-matrasov/">Конструкция итальянских матрасов</a></h2>
             <div class="cb-byline">
			 <div class="cb-excerpt">
				Итальянские матрасы заняли особое место среди товаров для сна и отдыха благодаря своей удивительной комфортабельности и ортопедическим качествам.
			 </div>
			 </div>
          </div>
        </article>
</div>

<div class="cb-line clearfix">        <article id="post-50355" class="cb-blog-style-c clearfix" role="article">
          <div class="cb-mask">
			   <a href="/articles/osobennosti-italyanskix-matrasov/"><img width="360" height="240" src="/img/matress-04.png" class="attachment-cb-360-240 wp-post-image" alt="6 trucos para conservar el frío de tu nevera"></a>          
			</div>
          <div class="cb-meta">
             <h2 class="h4"><a href="/articles/osobennosti-italyanskix-matrasov/">Особенности итальянских матрасов</a></h2>
             <div class="cb-byline">
			 <div class="cb-excerpt">
				<p>Среди огромного разнообразия матрасов для сна и отдыха, представленных на рынке, особое место занимают изделия, выпускаемые в Италии. Они считаются эталоном удобства, качества, долговечности и эффектного дизайна.</p>
			 </div>
			 </div>
          </div>
        </article>
</div>
		'
		),
		array(
			'address' => 'preimushhestva-ortopedicheskikh-podushek',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Преимущества ортопедических подушек',
			'left_sidebar' => 'articles',
			'title' => 'Преимущества ортопедических подушек',
			'description' => 'Преимущества ортопедических подушек',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '

<p>Подушка &ndash; обязательный атрибут любой постели, за многие десятилетия использования она прошла путь очень серьезной трансформации. В настоящее время в продаже можно найти огромное количество моделей, в число которых входят и ортопедические подушки. Но многие, вместо того чтобы <a href="https://www.magniflex.ru/catalog/pillows/">купить ортопедическую подушку</a>, все еще отдают предпочтение традиционным вариантам, не задумываясь о том, что привычная мягкая подушка может оказаться источником самых разных проблем со здоровьем. Ортопедические модели лишены недостатков, присущих их предшественникам, и имеют ряд неоспоримых достоинств, главными из которых являются следующие качества.</p>
<h3>Гипоаллергенность.</h3>
 <p>Далеко не все знают, что множество аллергических реакций и даже приступы бронхиальной астмы нередко бывают вызваны присутствием вредных для человека пылевых клещей. Особенно много их в старых подушках с пуховым или перьевым наполнителем. Именно продукты жизнедеятельности этих крохотных существ и вызывают у многих людей проблемы со здоровьем. Избавиться от пылевых клещей проблематично, обычно проще заменить подушку. Но даже этот вариант дает лишь временное решение проблемы. Разобраться с ней раз и навсегда можно одним способом – использовать современные латексные или полиуретановые наполнители (в подушках <a href="https://www.magniflex.ru/">Magniflex</a> используется исключительно натуральная латексная пена), в которых пылевые клещи жить не могут. Именно такая &laquo;начинка&raquo; и служит основой для ортопедических подушек.</p>
<h3>Анатомическая форма.</h3>
 <p>Традиционные подушки, в отличие от снабженных специальным валиком ортопедических, редко обеспечивают действительно правильную поддержку шейного отдела позвоночника. Для полноценного расслабления он должен находиться строго горизонтально по отношению к прочим его отделам. В положениях &laquo;выше&raquo; или &laquo;ниже&raquo; полноценное расслабление мышц шеи невозможно. Постоянный сон на слишком высокой или плоской подушке приводит к деформации межпозвоночных дисков, хроническому перенапряжению шейной мускулатуры, сдавливанию позвоночных артерий и кислородному голоданию. Следствием этих нарушений становится головная боль и постоянное чувство усталости. Ортопедическая подушка полностью устраняет эту проблему.</p>
<h3>Терапевтический и профилактический эффект.</h3>
<p>Физиологическая поддержка шейного отдела позвоночника поможет в будущем избежать многих проблем, в том числе нарушений осанки и остеохондрозов. Не менее важно использовать ортопедическую подушку тем, кто уже страдает заболеваниями опорно-двигательной системы. Доказано, что ее применение значительно ускоряет процесс лечения.</p>
		'
		),
array(
			'address' => 'polza-ortopedicheskix-podushek',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Польза ортопедических подушек',
			'left_sidebar' => 'articles',
			'title' => 'Польза ортопедических подушек',
			'description' => 'Польза ортопедических подушек',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '

<p>Современные исследования выявили четкую взаимосвязь между положением головы и шеи человека во сне и его самочувствием. Болевые ощущения, дискомфорт, рассеянное внимание и многие другие симптомы очень часто обусловлены использованием неподходящей подушки. Чрезмерный изгиб позвоночника в шейном отделе приводит к деформациям межпозвоночных дисков, перенапряжению мускулатуры и нарушениям кровообращения. Продолжительный сон на &laquo;неправильной&raquo; подушке еще больше усугубляет ситуацию и может провоцировать остеохондрозы, повреждения связок и мышц позвоночника. Именно поэтому лучше <a href="https://www.magniflex.ru/catalog/pillows/">купить ортопедическую подушку</a>, не дожидаясь появления дискомфорта и развития других проблем со здоровьем.</p>
<h3>Чем ортопедические подушки лучше обычных</h3>
<p>Научно доказано, что подушки анатомической формы эффективно снимают мышечное напряжение. Известно, что для действительно комфортного сна шейный отдел позвоночника должен составлять прямую линию с прочими его отделами. Слишком высокое или низкое положение головы препятствует расслаблению. Анатомический валик и упругий наполнитель способствуют полноценному отдыху. Такая подушка станет прекрасной профилактикой заболеваний шейных отделов позвоночника. Но, разумеется, она имеет не только профилактическую ценность. Врачи активно используют ее и при терапии заболеваний опорно-двигательного аппарата. Научно доказано, что правильно подобранные ортопедические подушки могут ускорять процесс лечения остеоартроза и остеохондроза шейного отдела позвоночника и различных повреждений расположенных в этой зоне мышц и связок.</p>
<h3>Терапевтический эффект подушки с эффектом памяти</h3>
<p>Данный тип ортопедических подушек стал настоящим прорывом в индустрии. Уникальность натуральной латексной пены Memoform (Memory) &nbsp;или особого геля Magnigel состоит в наличии у них так называемого эффекта памяти. Если положить на поверхность материала ладонь, то наполнитель немедленно примет ее форму. Причем происходит это не за счет механического воздействия, а благодаря высочайшей термочувствительности натуральной латексной пены или геля. Именно это свойство и позволяет <a href="https://www.magniflex.ru/catalog/pillows/s-effektom-pamjati/">ортопедической подушке с эффектом памяти</a> от Magniflex оптимально подстроиться под индивидуальные контуры головы и шеи, что полностью исключает обратное давление. Такая мягкость и упругость обеспечивают комфортный сон, нормализуют кровообращение и дыхание.</p>
<h3>Гигиенические достоинства ортопедических подушек</h3>
<p>Наполнителем для ортопедических подушек Magniflex служит натуральная латексная пена Memoform (Memory) или инновационный материал Magnigel. Оба этих материала интересны еще и тем, что благодаря великолепной вентиляции в них никогда не заводятся сапрофитные микроорганизмы &ndash; так называемые пылевые клещи. И это выгодно отличает данные наполнители от традиционных, таких как пух или перо. Ученые давно установили, что именно продукты жизнедеятельности пылевых клещей нередко провоцируют у людей приступы аллергии и даже бронхиальной астмы. Таким образом, ортопедические подушки отличаются высочайшей гигиеничностью, полностью гипоаллергенны и не имеют медицинских противопоказаний к использованию. Благодаря этому их можно использовать даже детям с аллергией (при отсутствии противопоказаний) и людям, страдающим бронхиальной астмой.</p>
		'
		),
array(
			'address' => 'tipy-ortopedicheskix-podushek',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Типы ортопедических подушек',
			'left_sidebar' => 'articles',
			'title' => 'Типы ортопедических подушек',
			'description' => 'Типы ортопедических подушек',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '

<p>Обеспечение правильного положения головы и шеи во время сна, оптимальная поддержка без давления на мягкие ткани &ndash; залог полноценного отдыха. Исследования, проводимые сегодня специалистами-ортопедами, в сочетании с последними достижениями материаловедения позволили создать комфортные подушки, соответствующие этим условиям. В зависимости от наполнителя их можно разделить на следующие виды.</p>
<h3>Полифибровые.</h3>
 <p>Структура таких подушек, например модели Relaxsan, состоит из ортопедического основания и специального наполнителя, изготовленного из пропитанных латексом волокон. Такая обработка придает материалу упругость и оптимальную жесткость, которые способствуют наилучшей поддержке головы и шеи во время сна. Волокна образуют пористую структуру, обеспечивающую отличную вентиляцию и теплообмен прилегающих к подушке участков кожи, что позволяет избежать их запотевания и последующего раздражения. В свою очередь, латексная обработка не дает поту впитываться в волокна, тем самым сохраняя их упругость, предотвращая появление неприятного запаха и развитие микроорганизмов. Во время стирки вода хорошо промывает пористую структуру подушки, удаляя задержавшуюся влагу.</p>
<h3><a href="/catalog/pillows/gelevye-podushki/">Гелевые ортопедические подушки.</a></h3> 
Наполнителем для таких подушек служит высокотехнологичный сверхмягкий полимерный гель. Особенностью этого материала является пористая структура, обладающая прекрасными вентиляционными свойствами. Она обеспечивает эффективный отвод тепла от участков кожи, контактирующих с поверхностью подушки. Результатом этого является сохранение постоянного уровня температуры: в жаркую погоду Вы ощущаете свежесть, в холодную подушка согревает Вашу кожу. Кроме того, гель отлично впитывает влагу, благодаря чему выделяющийся во время сна пот не оказывает раздражающего воздействия. По этим показателям он значительно превосходит пенополиуретан и натуральные наполнители (например латекс). Нельзя также пройти мимо прекрасных ортопедических свойств геля. Его молекулярная структура обеспечивает постоянный уровень упругости, благодаря чему подушка не теряет своей формы и мягкости даже после длительного использования. При этом наполнитель хорошо адаптируется к форме головы и шеи, обеспечивает им отличную поддержку, не оказывая давление на мягкие ткани.</p>
<h3><a href="/catalog/pillows/s-effektom-pamjati/">Ортопедические подушки с эффектом памяти.</a></h3>
<p> Наполнителем для некоторых подушек, например моделей Memory, Orthomassage и других, служит специально разработанная латексная пена с микропористой структурой. Ее особенностью является эффект памяти формы &ndash; материал принимает очертания головы и шеи и сохраняет их длительное время. Благодаря этому пена оптимально поддерживает эти отделы скелета, расслабляет мышцы, а также не оказывает давления на мягкие ткани и не нарушает нормальный кровоток. В результате после сна на такой подушке Вы чувствуете себя полностью отдохнувшим, так как мозг получал необходимое количество кислорода. В некоторых моделях наполнитель пропитывается экстрактом алоэ вера. Во время отдыха от воздействия человеческого тепла содержащие его микропоры раскрываются, выделяя полезные соединения, которые оказывают ранозаживляющий и противовоспалительный эффект.</p>
<p>Все указанные материалы обладают гипоаллергенными свойствами, благодаря чему подходят детям и людям с заболеваниями дыхательных путей. Кроме того, их пористая структура предотвращает развитие микроорганизмов, которые также могут вызывать аллергическую реакцию.</p>
		'
		),
		array(
			'address' => 'kak-vybrat-italyanskij-matras',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Как выбрать итальянский матрас',
			'left_sidebar' => 'articles',
			'title' => 'Как выбрать итальянский матрас',
			'description' => 'Как выбрать итальянский матрас',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '

<p>Италия является одной из лидирующих стран в сфере производства ортопедического оборудования для сна и отдыха. Сегодня на рынке можно встретить большое разнообразие матрасов, изготовленных компаниями с Апеннинского полуострова. Каждый из них имеет свою специфику применения, обладает теми или иными достоинствами и недостатками. Чтобы правильно выбрать из всего этого разнообразия наиболее подходящий для Вас итальянский матрас, рекомендуем ориентироваться на следующие критерии.</p>
<h3>Жесткость</h3>
<p>При подборе матраса необходимо учитывать, что главными являются именно Ваши ощущения. Ориентируясь на них, Вы сможете найти оптимальную для Вашего тела модель. Вместе с тем для облегчения выбора существует следующая классификация матрасов по степени жесткости:</p>
<ul class="kakvyb_list">
	<li><h3>мягкие.</h3> 
	<p>Такие матрасы хорошо подстраиваются под форму тела и разработаны, как правило, для людей с небольшой массой тела, и тех, кто страдает от проблем с давлением. Кроме того, их следует выбирать тем, кто обычно спит на боку;</p></li>
	<li><h3>средние.</h3>
	<p> Они обеспечивают оптимальное сочетание мягкости и жесткости для покупателей со средней комплекцией. <a href="/catalog/mattresses/srednie-mattresses/">Ортопедические матрасы средней жесткости</a> идеально подходят для тех, кто привык спать на спине;</p></li>
	<li><h3>жесткие.</h3>
	<p> Эти матрасы выдерживают большую нагрузку, поэтому пользуются популярностью у людей с избыточной массой тела. <a href="/catalog/mattresses/zhestkie-mattresses/">Жесткие ортопедические матрасы</a> хорошо подойдут тем, кто любит спать на животе. Также рекомендованы детям и подросткам, так как в период взросления пока не сформировалась костная система и позвоночник, рекомендовано использовать более жесткий матрас.</p> </li>
</ul>
<p>Необходимо отметить, что среди итальянских матрасов присутствуют и модели регулируемой жесткости (например в коллекции Magnificent от Magniflex). Это значит, что ее можно изменять, переставив слои материала.</p>
<h3>Наполнитель</h3>
<p>Важное значение при выборе имеет разновидность основного материала матраса. Итальянская промышленность предлагает модели на беспружинной основе, состоящие из чехла и расположенного внутри нее наполнителя. При этом могут использоваться следующие материалы:</p>
<ul class="kakvyb_list">
	<li><h3>латексные пены</h3>
	<p>(например Elioform). Они имеют ячеистую структуру, большой срок службы и обеспечивают превосходную адаптацию матраса к очертаниям человеческого тела;</p></li>
	<li><h3>наполнители с эффектом памяти</h3> 
	<p>(например Memoform). Они способны сохранять форму человеческого тела длительное время и обеспечивать максимально комфортную поддержку без давления на мягкие ткани;</p></li>
	<li><h3>гипоаллергенные слои и прослойки из натурального хлопка.</h3> <p>Они обеспечивают вентиляцию и отвод влаги от тела, а также способствуют защите аллергиков.</p></li>
</ul>
<h3>Чехол</h3>
<p>В итальянских матрасах может использоваться ткань из шерсти овцы мериноса, хлопка или терморегулирующие материалы CoolMax, а также Outlast. В некоторых моделях (например Merino Green Tea) чехол пропитан экстрактом зеленого чая, который дает освежающий и тонизирующий эффект. В других матрасах может применяться бамбуковое или древесное волокно.</p>
		'
		),
		array(
			'address' => 'osobennosti-italyanskix-matrasov',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Особенности итальянских матрасов',
			'left_sidebar' => 'articles',
			'title' => 'Особенности итальянских матрасов',
			'description' => 'Особенности итальянских матрасов',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '
<p>Среди огромного разнообразия матрасов для сна и отдыха, представленных на рынке, особое место занимают изделия, выпускаемые в Италии. Они считаются эталоном удобства, качества, долговечности и эффектного дизайна. Какие же особенности итальянских матрасов делают их такими популярными у покупателей и специалистов?</p>
<h3>Беспружинная основа</h3>
<p>От многих матрасов итальянские изделия отличаются тем, что их упругость обеспечивается не блоками зависимых или независимых пружин, а свойствами материалов-наполнителей. В качестве таковых используются натуральные латексные гели и пены, а также прослойки из другого сырья, в частности хлопка. Беспружинная основа имеет целый ряд преимуществ:</p>
<ul  class="kakvyb_list">
	<li>даже с течением времени внутренний каркас не начинает давить на тело, что нередко наблюдается в обыкновенных пружинных моделях;</li>
	<li>латексные пены долгое время сохраняют упругость, в результате матрас держит свою форму и мягкость в течение многих лет;</li>
	<li>при движениях человека матрас не начинает скрипеть, благодаря чему качество сна остается неизменно высоким;</li>
	<li>беспружинные модели имеют небольшую массу и могут транспортироваться сжатыми в вакуумной упаковке.</li>
</ul>
<br>
<h3>Новые материалы и технологии</h3>
<p>В конструкции фирменных матрасов из Италии применяются последние достижения современного материаловедения. Особенно ярким примером являются латексные пены, составляющие основу данных изделий.</p>
<h3>Латексная пена.</h3>
<p> Созданный на основе натурального сока дерева гевеи, этот материал отличается упругостью и износостойкостью. Изготовленные из латексной пены матрасы обладают повышенной упругостью и обеспечивают прекрасную поддержку тела, особенно для людей с его избыточной массой.</p>
<h3>Материалы с эффектом памяти.</h3>
<p> В конструкции некоторых моделей (например, <a href="/catalog/orthopedic_mattresses/memo-merino/">Magniflex Orthomemo Merino</a>) применяются прослойки из латексной пены с эффектом памяти Memoform Magnifoam, способной долгое время сохранять очертания тела человека. Благодаря этому материал не давит на мягкие ткани, в результате чего в них сохраняется нормальное кровообращение, и на утро Вы чувствуете себя полностью отдохнувшим.</p>
<h3>Циркуляция воздуха</h3>
<p>В качестве наполнителей и чехлов итальянских матрасов широко применяются материалы с микропористой структурой, а в некоторых моделях реализуется технология Airyform. Она заключается в создании сети мельчайших каналов, через которые при каждом движении человека прокачивается воздух и создается терморегулирующий и вентилирующий эффект. Благодаря этому матрас надолго сохраняет жесткость, а в его материалах предотвращается развитие микроорганизмов, которые могут вызвать аллергическую реакцию или другие неприятные явления.</p>
<h3>Пропитка</h3>
<p>В некоторых итальянских матрасах ткани могут обрабатываться натуральными составами, придающими дополнительные свойства. Например, в Merino Green Tea от Magniflex чехол пропитан экстрактом зеленого чая, обладающего тонизирующим и освежающим эффектом.</p>
		'
		),
array(
			'address' => 'osobennosti-elitnyx-italyanskix-matrasov',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Особенности элитных итальянских матрасов',
			'left_sidebar' => 'articles',
			'title' => 'Особенности элитных итальянских матрасов',
			'description' => 'Особенности элитных итальянских матрасов',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '

<p>Итальянские спальные матрасы класса премиум являются эталонными образцами современных разработок в области товаров для сна и отдыха. Последние достижения материаловедения удачно сочетаются с утонченным дизайнерским оформлением, навеянным роскошью и богатством классической эпохи. Фирменные матрасы из Италии сегодня пользуются спросом не только у состоятельных людей, но и у покупателей со средним достатком, поскольку такие изделия имеют целый ряд положительных особенностей.</p>
<h3>Высокая технологичность</h3>
<p>Для изготовления итальянских матрасов премиум-класса используются современные материалы, обладающие уникальными свойствами. Удачным примером является наполнитель из латексной пены. Этот материал изготовлен путем вспенивания натурального сока дерева гевеи по особенной технологии, которая улучшают его упругость и износостойкость. При аэрации с водой латексная пена приобретает структуру с открытыми ячейками, благодаря которым обеспечивается оптимальная вентиляция, предотвращающая появление неприятного запаха и развитие микроорганизмов. В качестве чехлов некоторых моделей применяются ткани с 3D-структурой, микроскопические поры которой создают прекрасный теплообмен.</p>
<h3>Ортопедические и гигиенические свойства</h3>
<p>В качестве одного из слоев нередко используется материал с эффектом памяти, длительное время сохраняющий форму тела человека. Благодаря этому обеспечивается оптимальная поддержка без давления на мягкие ткани. Также следует отметить материал Magnigel Foam, используемый, к примеру, в коллекции Magniflex FreshGel. Его главной особенностью, помимо эффекта памяти, является нейтральная теплопроводность: он обеспечивает прохладу жарким летом, а зимой согревает Вас теплом Вашего собственного тела. Среди других его преимуществ можно выделить эффективное впитывание и моментальное выветривание влаги, благодаря чему Ваша кожа и поверхность матраса будут оставаться сухими.</p>
<h3>Изысканный дизайн</h3>
<p>Разработчики итальянских матрасов элитных серий прекрасно осознают тот факт, что их изделия не только являются предметами для сна, но и в значительной мере формируют облик комнаты. В этой связи каждая из коллекций премиум-класса отличается эксклюзивным дизайном, основанным на флорентийских орнаментах или декоре классической эпохи. В качестве материала чехла могут использоваться шелк, лен и хлопок премиального класса (например в коллекции Virtus), придающие поверхности матраса неповторимый блеск и гладкость. Кроме того, в оформлении некоторых моделей применяется технология 3D-рисунка, создающая эффект объемности орнамента.</p>
<p><a href="/catalog/elitnye-matrasy/">Элитные матрасы</a> из Италии – это вершина технологий для комфортного сна, достигнутая за счет тщательного изучения особенностей человеческого организма. С ними Вы обеспечите себе и своим близким полноценный отдых, после которого всегда будете чувствовать себя в тонусе.</p>
		'
		),
array(
			'address' => 'konstrukciya-italyanskix-matrasov',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Конструкция итальянских матрасов',
			'left_sidebar' => 'articles',
			'title' => 'Конструкция итальянских матрасов',
			'description' => 'Конструкция итальянских матрасов',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '

<p>Итальянские матрасы заняли особое место среди товаров для сна и отдыха благодаря своей удивительной комфортабельности и ортопедическим качествам. Во многом таких характеристик удалось добиться за счет специальной конструкции, для которой свойственно наличие следующих черт.</p>
<h3>Беспружинная основа</h3>
<p>В качестве упругого элемента в ортопедических и <a href="/catalog/elitnye-matrasy/">элитных матрасах</a> итальянского производства используются не пружинные блоки, а наполнитель из латексной пены или геля. Благодаря мелкоячеистой структуре и высокоэластичным связям молекул эти материалы обладают мягкостью, но в то же время сохраняют свою форму и обеспечивают оптимальную поддержку человеческого тела. Также к достоинствам таких наполнителей можно отнести следующие:</p>
<ul class="kakvyb_list" >
	<li>наполнитель сохраняет свою форму и упругость в течение долгого времени независимо от испытываемых нагрузок;</li>
	<li>мелкопористый материал предотвращает развитие внутри матраса микроорганизмов, лишая их питательной среды благодаря повышенной воздухопроводимости.</li>
	<li>также благодаря мелкопористой структуре вспененного латекса осуществляется микровентиляция, за счет которой удаляется лишняя влага.</li>
</ul>
<br>
<h3>Сложная структура</h3>
<p>Итальянские матрасы, за исключением моделей &laquo;моноблок&raquo;, объединяют несколько слоев различных материалов, каждый из которых придает изделию необходимые свойства. В общем виде их структура состоит из следующих наполнителей и прослоек:</p>
<ul class="kakvyb_list">
	<li><h3>основы</h3>
	<p>Она выполняется из натуральной вспененной латексной пены, которая принимает на себя основную нагрузку и определяет упругость и жесткость матраса;</p></li>
	<li><h3>изоляционной тканевой прослойки</h3>
	<p> Она предотвращает контакт основы с вышележащими слоями других материалов, а также сокращает попадание в нее влаги от тела;</p></li>
	<li><h3>прослойки из материала с памятью формы</h3>
	<p>В некоторых моделях (например, New <a href="/catalog/orthopedic_mattresses/new-naturcomfort/">Naturcomfort</a>) она обеспечивает ортопедический эффект, подстраиваясь под очертания человеческого тела и сохраняя их в течение продолжительного времени для уменьшения давления на мягкие ткани;</p></li>
	<li><h3>гипоаллергенного терморегулирующего слоя</h3>
	<p>Он обеспечивает воздухообмен внутри матраса, эффективно отводя тепло от человеческого тела. Благодаря этому в теплый сезон Вы сможете ощущать свежесть, а в холодный &ndash; тепло;</p></li>
	<li><h3>дополнительных прослоек из хлопка или льняного волокна</h3>
	<p>Они также участвуют в воздухо- и влагообмене, что позволяет обеспечить максимально комфортные ощущения во время отдыха и сна;</p></li>
	<li><h3>наружной оболочки матраса (чехла).</h3> Она выполняется из хлопка, шерсти мериноса, волокон белой пихты или терморегулирующего материала CoolMax, Outlast. Чехол предназначен для защиты наполнителей от пыли и грязи, а также обеспечения микровентиляции и теплообмена.</p></li>
</ul>
<p>В некоторых моделях элитных двуспальных матрасов применяется технология регулируемой жесткости Dual Core Magniflex, заключающаяся в использовании различных по жесткости материалов. С их помощью можно усиливать или ослаблять упругость на каждой из половин изделия. Благодаря этому на одном и том же матрасе смогут с комфортом расположиться два человека совершенно различной комплекции.</p>
		'
		),
array(
			'address' => 'vidy-italyanskix-matrasov',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Виды итальянских матрасов',
			'left_sidebar' => 'articles',
			'title' => 'Виды итальянских матрасов',
			'description' => 'Виды итальянских матрасов',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '

<p>Итальянские производители товаров для сна и отдыха выпускают одни из самых качественных матрасов, которые по праву пользуются успехом у простых потребителей и специалистов. Проанализировав рынок, эти компании разработали различные линии продукции для всех категорий населения. Чем же отличаются те или иные виды элитных и <a href="/catalog/mattresses/">ортопедических матрасов</a> и для кого они предназначаются?</p>
<h3>Бюджетные матрасы</h3>
<p>К этой категории относятся самые доступные модели, изготовленные из натуральной латексной пены и обшитые материалом из овечьей шерсти и хлопка (по схеме &laquo;зима &ndash; лето&raquo;). Матрасы этого типа обычно характеризуются повышенной жесткостью и рекомендуются людям с избыточной массой тела: большая упругость основания обеспечивает оптимальную поддержку скелета. Отличительными особенностями таких моделей является простой, но функциональный дизайн и использование только базовых материалов.</p>
<h3>Матрасы бизнес-класса</h3>
<p>Модели этого типа характеризуются использованием инновационных материалов, отличающихся улучшенными мягкостью и упругостью, а также теплорегулирующими и вентиляционными качествами. В частности, в их конструкции применяются дополнительные слои из гелей с памятью формы, обеспечивающие ортопедический эффект, а также чехлы из терморегулирующей ткани CoolMax или Outlast. Как правило, матрасы бизнес-класса рассчитаны на людей со средней комплекцией, однако встречаются отдельные модели (Natur Baci, Orthomemo Merino) для людей с небольшой массой тела и подростков. В зависимости от коллекции дизайн может быть минималистичным или дополняться эффектными орнаментами.</p>
<h3>Матрасы премиум-класса</h3>
<p>При создании элитных итальянских моделей удачно используются передовые достижения материаловедения. Такие изделия отличаются поистине утонченным и роскошным дизайном. Они рассчитаны на людей с различной массой тела. В этом сегменте Вы можете встретить ортопедические или классические модели со сдержанным или богатым оформлением, с применением дорогих или экзотических тканей (например кашемира, верблюжьей шерсти и др.). К инновациям в <a href="/catalog/elitnye-matrasy/">матрасах премиум-класса</a> можно отнести следующие разработки:</p>
<ul class="kakvyb_list">
	<li>&laquo;дышащий&raquo; микропористый гель обеспечивает ощущение свежести даже после долгого сна за счет эффективной вентиляции контактирующих с матрасом участков кожи;</li>
	<li>в конструкции некоторых двуспальных моделей реализован принцип регулируемой жесткости &ndash; технология Dual Core Magniflex: теперь каждый из партнеров может настроить упругость своей половины под параметры собственного тела, просто переставив местами слои наполнителя;</li>
	<li>ткань с 3D-структурой обеспечивает отведение человеческого тепла и влаги, а также оптимальный микроклимат на поверхности матраса за счет свободного воздухообращения в микропорах.</li>
</ul>
<p>Разделение итальянских матрасов в соответствии с сегментами потребительского рынка весьма условно. Оно не означает, что бюджетные модели сильно отличаются по своим характеристикам от элитных или бизнес-класса. В этом случае важную роль играет субъективный фактор: качество и комфортность того или иного матраса определяются только Вашими личными предпочтениями и представлениями об удобстве.</p>
		'
		),
array(
'address' => 'pochemu-osnovanie-dolzhno-byt-ortopedicheskim',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Почему основание должно быть ортопедическим',
'left_sidebar' => 'articles',
'title' => 'Почему основание должно быть ортопедическим',
'description' => 'Почему основание должно быть ортопедическим',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<p>Ортопедическое основание должно состоять из деревянных изогнутых ламелей. Данный вариант является предпочтительнее сплошного фанерного короба или иных жестких конструкций. Степень ортопедического эффекта напрямую зависит от количества ламелей, приходящихся на единицу спального места. Чем их больше (и чем они уже), тем лучше итоговый результат. &laquo;Магнифлекс&raquo; предлагает своим покупателям именно такие, сложносоставные конструкции из большого количества клееных березовых ламелей.</p>
<h3>Конструктивные особенности ортопедического основания</h3>
<p>Ортопедическая решетка представляет собой специальную гибкую раму, оснащенную съемными ножками. Благодаря им такое основание при желании можно использовать отдельно, без кровати, в качестве подставки под матрас. Размерный ряд представленных в нашем ассортименте моделей колеблется от компактных односпальных до двуспальных моделей. Они отличаются друг от друга по таким критериям, как общее количество элементов и размеры каркаса и рамы. Для того чтобы одна ламель не зависела от других, каждая из них помещается в специальный карман.</p>
<h3>Преимущества</h3>
<h3>Свободный воздухообмен. </h3><p>Конструкция ортопедического основания способствует свободной циркуляции воздуха и отводу избыточных влаги и тепла. Это обеспечивает свежесть постели и длительный срок службы матраса.</p>
<h3>Равномерное распределение нагрузки. </h3>
<p>Ортопедические основания составляют с прочими частями конструкции единую систему, усиливая полезные свойства самого матраса. Таким образом они способствуют поддержанию наиболее физиологичного положения позвоночника.</p>
<h3>Экологичность. </h3>
<p>Мы предлагаем покупателям ортопедические основания, состоящие из металлической рамы, окрашенной экологически чистой порошковой краской, и ламелей из натуральной древесины.</p>
<h3>Универсальность. </h3>
<p>Представленные в нашем каталоге каркасы подходят для любых типов матрасов. При использовании пружинных моделей именно основание принимает на себя всю нагрузку, благодаря чему пружины не проседают и меньше сжимаются. В случае беспружинных моделей каркас способен значительно усилить ортопедические и анатомические свойства матраса.</p>

'
),
array(
'address' => 'chto-takoe-ortopedicheskij-matras',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Что такое ортопедический матрас',
'left_sidebar' => 'articles',
'title' => 'Что такое ортопедический матрас',
'description' => 'Что такое ортопедический матрас',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'keywords' => '',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Что такое ортопедический матрас</h2>
<p>В наше время словосочетание &laquo;ортопедический матрас&raquo; на слуху у всех. Но этот факт, к сожалению, не лучшим образом сказывается на качестве продукции, представленной на отечественном рынке. Тем более, что ГОСТа или другого четкого стандарта на ортопедические матрасы в России пока не существует, чем активно пользуются некоторые продавцы, без малейших оснований готовые назвать &laquo;ортопедической&raquo; практически любую модель в своем ассортименте. Именно с подачи таких недобросовестных компаний в сознании массового покупателя закрепился стереотип, что ортопедические матрасы &ndash; это обязательно очень жесткие модели с наполнителем из кокосовой койры или модели с независимым пружинным блоком. Считается, что только такие матрасы хорошо поддерживают позвоночник. Но так ли это на самом деле?</p>
<h3>Ортопедия как раздел медицины</h3>
<p>Ортопедия занимается диагностикой, терапией и профилактикой заболеваний и повреждений опорно-двигательной системы. Ортопедические матрасы, поддерживающие позвоночник в наиболее физиологичном положении, могут использоваться для профилактики таких недугов или в составе комплексной терапии. Благодаря своим особенностям они не только способны предупреждать ряд заболеваний опорно-двигательной системы, но и способствуют исправлению уже имеющихся деформаций и подвывихов различных отделов позвоночника.</p>
<h3>Конструкция ортопедических матрасов &laquo;Магнифлекс&raquo;</h3>
<p>Ортопедические матрасы, в зависимости от изготовителя, могут различаться по своей конструкции. Отдельные производители обеспечивают точечную эластичность за счет пружинных блоков, состоящих из большого количества независимых пружин. В моделях &laquo;Магнифлекс&raquo; для этой цели используются блоки латексной пены с эффектом памяти. Продуманная конструкция беспружинных моделей позволяет обеспечить по-настоящему качественную поддержку позвоночника.</p>
<p>Несмотря на определенное сходство базовой структуры разных моделей Magniflex, мы готовы предложить широкий ассортимент изделий на любой вкус. Специальная антибактериальная пропитка, разная жесткость сторон, дышащие материалы поверхности, оригинальные добавочные наполнители &ndash; все это многообразие позволяет каждому выбрать подходящую модель исходя из личных предпочтений.</p>
<h3>Какие матрасы не являются ортопедическими</h3>
<p>Как уже упоминалось, ошибочно считать любой жесткий матрас ортопедическим по умолчанию. Ни при каких обстоятельствах не являются таковыми модели с неизолированными пружинами непрерывного плетения (блок &laquo;боннель&raquo;). Такие варианты с недавних пор считаются морально устаревшими, но за счет низкой цены до сих пор активно продаются и используются. Сегмент рынка недорогих изделий все еще предлагает покупателям поролоновые и ватные матрасы. Данные модели, даже самые качественные, тоже не могут претендовать на звание ортопедической продукции.</p>
<p>Кроме того, согласно изменениям в Федеральном законе &laquo;О рекламе&raquo;, которые вступили в силу 22 октября 2013 года, использование термина &laquo;ортопедический&raquo; в описаниях и названиях матрасов возможно только при условии наличия соответствующих сертификатов. Поэтому, делая выбор, будьте внимательны. Убедитесь, что ортопедический матрас, который Вы приобретаете, действительно является таковым. Ознакомиться с документацией, подтверждающей качество нашей продукции, в том числе с удостоверением Минздрава, Вы сможете в разделе &laquo;<a href="https://www.magniflex.ru/pokupatelyam/certificates/">Сертификаты</a>&raquo;.</p>
'
),
array(
'address' => 'osobennosti-vybora-ortopedicheskogo-matrasa-dlya-pozhilyx-lyudej',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Особенности выбора ортопедического матраса для пожилых людей',
'left_sidebar' => 'articles',
'title' => 'Особенности выбора ортопедического матраса для пожилых людей',
'description' => 'Особенности выбора ортопедического матраса для пожилых людей',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Особенности выбора ортопедического матраса для пожилых людей</h2>
<p>Значительный процент покупателей продукции &laquo;Магнифлекс&raquo; &ndash; люди старше 50 лет или их дети, желающие обеспечить родителям максимально комфортные условия для сна. В жизни до сих пор нередки ситуации, когда немолодые люди годами спят на, мягко говоря, не слишком комфортных диванах и кроватях. Причем нередко всему виной вовсе не финансовый фактор, а банальная привычка. К сожалению, не все задумываются о том, что неудобное ложе способно создать немало проблем даже молодым и здоровым. Поэтому решаться на перемены не только можно, но и по-настоящему нужно. Выбор матрасов для старшей возрастной группы имеет некоторые особенности. Ниже мы расскажем о главных критериях.</p>
<h3>Анатомо-физиологические особенности людей пожилого возраста и их влияние на качество сна</h3>
<p>Для людей старшей возрастной группы характерен чуткий, прерывистый сон, средняя продолжительность которого зачастую не превышает 6,5 часов. Это примерно на 1,5 часа короче, чем у молодых. Данная особенность неоднократно подтверждалась исследованиями как зарубежных, так и отечественных ученых. Связана она как со сбоями биологических часов, так и с повышением общей чувствительности организма. В таких случаях надолго прервать сон может любое, даже самое незначительное неудобство, а возобновить отдых человеку удается только спустя время. Если вспомнить о том, что пожилой возраст зачастую сопровождается нарушениями опорно-двигательного аппарата, болями в спине и остеохондрозом, то становится очевидно, что факторов, неблагоприятно влияющих на сон, более чем достаточно.</p>
<h3>Требования к матрасам для людей старшей возрастной группы</h3>
<p>Итак, пожилые люди часто страдают теми или иными нарушениями сна. И если на уже имеющиеся проблемы накладываются сложности с засыпанием и дискомфорт от неудобного матраса, нарушения могут усугубиться, вплоть до появления бессонницы. Поэтому людям старших возрастных групп необходима мягкая, но вместе с тем упругая поддержка во время сна. Обеспечить ее может качественный ортопедический матрас. Основное правило выбора, когда речь идет о пожилых людях, &ndash; это мягкость и анатомичность изделия. В матрасе не должно быть излишне жестких зон. Такие модели способствуют правильному кровообращению, защищают организм от стрессовых воздействий в период отдыха и не оказывают избыточного давления на опорно-двигательную систему.</p>
<h3>Критерии выбора</h3>
<h3>Уровень жесткости. </h3>Матрасы для пожилых людей должны быть на 30&minus;40 % мягче, чем модели, предназначенные для прочих возрастных групп. Однако здесь существуют свои нюансы и индивидуальные предпочтения, игнорировать которые не стоит. Тем, у кого имеются хронические заболевания опорно-двигательного аппарата, стандартно рекомендуются наиболее жесткие модели (в пределах личного уровня комфортности). Для здоровых людей, у которых наблюдаются периодические обострения остеохондроза и иных проблем с позвоночником, хорошим решением станет модель с двухсторонней жесткостью. В этом случае большую часть времени пожилой человек сможет спать на более комфортной мягкой стороне, а в случае необходимости перевернуть матрас на жесткую сторону.</p>
<h3>Вид наполнителя. </h3>Оптимальным наполнителем в матрасах, предназначенных для пожилых людей, является натуральная латексная пена. Микропористый вспененный латекс не только обладает эффектом памяти, но и оказывает на организм релаксирующее воздействие. Компания &laquo;Магнифлекс&raquo; может предложить своим покупателям модель Waterlattex с новым, усовершенствованным наполнителем Waterlattex Airyform, который отличается особенно высокой анатомичностью и воздухопроницаемостью. Кроме того, прекрасным наполнителем является латексная пена Memory, способная подстраиваться под контуры тела конкретного человека, не оказывая ответного давления. Матрасы с этим наполнителем настолько удобны, что многие могут спать на них, ни разу за ночь не перевернувшись на другой бок.</p>
<h3>Габариты.</h3> Выбор размеров матраса во многом зависит от индивидуальных предпочтений владельца. Общие рекомендации в плане определения оптимальных габаритов предельно просты. Длина матраса должна быть на 15&ndash;20 см больше, чем рост того, кто будет на нем спать, а ширина такова, чтобы человек мог свободно положить руки за голову, а его локти при этом не выходили за края матраса.</p>
<p>Разумеется, нельзя рассматривать ортопедические матрасы как волшебную палочку, способную избавить от всех проблем со здоровьем и вернуть пожилому человеку молодость. Однако этому продукту под силу сделать так, чтобы каждое утро Вы ощущали себя отдохнувшим, бодрым и полным сил. Если у Вас остались вопросы, касающиеся выбора ортопедических матрасов для пожилых людей, по звоните нашим консультантам, и они предоставят Вам всю необходимую информацию.</p>
'
),
array(
'address' => 'kak-vybrat-matras-dlya-novorozhdennogo',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Как выбрать матрас для новорожденного',
'left_sidebar' => 'articles',
'title' => 'Как выбрать матрас для новорожденного',
'description' => 'Как выбрать матрас для новорожденного',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Как выбрать матрас для новорожденного</h2>
<p>Опорно-двигательная система ребенка начинает формироваться в утробе матери, но окончательное завершение этого процесса происходит спустя очень долгое время &ndash; приблизительно к 20 годам. Кости новорожденного из-за эластичности и мягкости скорее напоминают хрящи, а анатомические изгибы позвоночника еще не сформированы. Они начинают появляться у ребенка постепенно в следующем порядке: сначала, после того как малыш овладевает умением держать головку, у него формируется шейный изгиб. Затем, когда ребенок начинает ходить, появляется изгиб в пояснице, и только после этого &ndash; грудной изгиб. От правильного формирования позвоночника зависит здоровье не только спины, но и многих внутренних органов. Поэтому к выбору матраса для маленького ребенка следует подойти с полной ответственностью.</p>
<h3>Почему беспружинный</h3>
<p>Бытует мнение, что настоящий детский ортопедический матрас должен быть обязательно на пружинном блоке. Но в действительности это ни что иное, как распространенное заблуждение. На самом деле пружинные матрасы не рекомендованы малышам, поскольку под меняющимся весом подрастающего ребенка пружины начнут прогибаться, создавая эффект гамака. В качественных беспружинных матрасах этот эффект отсутствует. Кроме того, у них есть еще одно крайне ценное свойство: они нечувствительны к вертикальным нагрузкам. Поэтому, когда Ваш малыш немного подрастет, он сможет сколько угодно ходить, прыгать, веселиться и кувыркаться на своей кровати: такие упражнения не нанесут ортопедическому матрасу большого вреда.</p>
<p>Кроме того, к достоинствам беспружинных моделей можно отнести:</p>
<ul class="kakvyb_list">
<li>длительный срок эксплуатации;</li>
<li>комфортный (умеренный) уровень жесткости;</li>
<li>поддержание позвоночника в ровном горизонтальном положении;</li>
<li>отсутствие электростатического электричества (благодаря отсутствию металлических компонентов).</li>
</ul>
<h3>Требования к наполнителям</h3>
<p>Чтобы избежать развития у новорожденного проблем со здоровьем, следует обратить пристальное внимание на наполнитель предназначенного для него матраса. Он должен:</p>
<ul class="kakvyb_list">
<li>быть натуральным и гипоаллергенным;</li>
<li>обладать отличной воздухопроницаемостью и гигиеничностью;</li>
<li>оптимально сочетать упругость и эластичность.</li>
</ul>
<p>Всем этим характеристикам полностью отвечает такой материал, как Eliocel. Это натуральная латексная пена с микропористой структурой. Она гипоаллергенная, экологически чистая, мягкая и упругая. Кроме того, материал обладает прекрасными антисептическими свойствами, воздухопроницаемостью, хорошо поглощает и испаряет влагу. Благодаря своей особой структуре Eliocel равномерно распределяет нагрузку на суставы, усиливает эффект выравнивания позвонков, что наделяет матрас ортопедическими свойствами.</p>
<h3>Состав детского ортопедического матраса</h3>
<p>Изделия &laquo;Магнифлекс&raquo;, предназначенные специально для детей, традиционно имеют 7 слоев:</p>
<ul class="kakvyb_list">
<li>&laquo;летнюю&raquo; сторону из 100 % хлопковой ткани;</li>
<li>основной слой наполнителя Eliocel;</li>
<li>изоляционную ткань;</li>
<li>дополнительную слой Eliocel толщиной в 1 см;</li>
<li>гипоаллергенный слой, отвечающий за терморегуляцию;</li>
<li>антистатическую прослойку;</li>
<li>&laquo;зимнюю&raquo; сторону из тонкорунной шерсти мериноса.</li>
</ul>
<h3>Подробнее о внешних материалах</h3>
<h3>Натуральный хлопок.</h3> Хлопковое волокно издавна славиться не только прекрасной воздухопроницаемостью, но и гигроскопичностью, антистатическими свойствами и высокой впитывающей способностью. Все это позволяет коже дышать и испытывать комфорт в жаркое время года.</p>
<h3>Овечья шерсть. </h3>Данный материал чрезвычайно мягкий и тонкий на ощупь, согревает в период морозов, обладает отличной воздухопроницаемостью, позволяет коже дышать свободно.</p>
<p>Подарите малышу здоровый и приятный сон &ndash; выберите правильный матрас!</p>
'
),
array(
'address' => 'matrasy-premium-klassa_texnologii-na-strazhe-vashego-sna',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Матрасы премиум-класса: технологии на страже Вашего сна',
'left_sidebar' => 'articles',
'title' => 'Матрасы премиум-класса: технологии на страже Вашего сна',
'description' => 'Матрасы премиум-класса: технологии на страже Вашего сна',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Матрасы премиум-класса: технологии на страже Вашего сна</h2>
<p>Выбор матраса &ndash; ответственное мероприятие не только для тех, кто уже имеет какие-либо проблемы с позвоночником. Здоровым людям стоит подойти к этому процессу с ничуть не меньшим вниманием. Если Вы давно поняли, что не настолько богаты, чтобы покупать дешевые вещи, обратите внимание на продукцию премиум-класса. Дорогие матрасы &ndash; это нечто больше, чем просто знаменитый бренд. Это по-настоящему полноценный отдых, передовые научные разработки и качественные современные материалы. Практика говорит о том, что, выбрав однажды матрасы &laquo;Магнифлекс&raquo; премиум-класса, Вы вряд ли захотите спать на чем-то другом.</p>
<h3>О продукции Magniflex</h3>
<p>Итальянская фабрика матрасов &laquo;Магнифлекс&raquo; &ndash; предприятие с солидной историей. Она начала работу в 1962 и с тех пор по праву занимает одни из лидирующих позиций на рынке ортопедических матрасов, в том числе в сегменте премиум-класса. Все это время компания постоянно развивалась и двигалась вперед. Именно в &laquo;Магнифлекс&raquo; еще в 1986 изобрели, а потом и запатентовали вакуумную упаковку продукции. В 2000 компания совершила очередной прорыв и первой представила на рынке матрасы с эффектом памяти. В настоящее время для изготовления продукции используются современное инновационное оборудование, электронные системы сборки и передовые разработки, в том числе космические технологии НАСА.</p>
<h3>Почему &laquo;Магнифлекс&raquo;</h3>
<h3>Итальянская сборка. </h3>Продукция Magniflex изготавливается в Италии, на заводе в Прато, расположенном неподалеку от Флоренции. Приобретая изделия этого бренда, Вы получаете 100-процентное итальянское качество. Стикер с серийным номером, который имеется на каждом матрасе, позволяет легко проследить его историю.</p>
<h3>Международное признание. </h3>Компания &laquo;Магнифлекс&raquo; занимается изготовлением матрасов уже более 50 лет и за это время успела снискать международное признание и хорошую репутацию не только в Европе, но и за ее пределами. Продукция Magniflex востребована более чем в 99 странах: Германии, США, Франции, Великобритании, Японии и других, &ndash; а ее качество подтверждено сотнями свидетельств, патентов и наград. К настоящему времени за плечами компании уже более 20 лет безупречной работы в России.</p>
<h3>Официальная <a href="https://www.magniflex.ru/pokupatelyam/certificates/"><u>сертификация</u></a></h3><strong>. </h3>Отдельный предмет гордости &ndash; признание ортопедов Европы и ряда международных организаций. В РФ матрасы Magniflex рекомендованы Центральным институтом травматологии и ортопедии и официально сертифицированы РосТест (с выдачей соответствующих заключений). Еще один, не менее важный документ &ndash; удостоверение Минздрава РФ, подтверждающее, что наша продукция может с полным правом называться ортопедической.</p>
<h3>Чем хороши матрасы премиум-класса</h3>
<h3>Натуральные материалы. </h3><a href="https://www.magniflex.ru/catalog/elitnye-matrasy/"><u>Матрасы премиум-класса</u></a>&nbsp;&laquo;Магнифлекс&raquo; &ndash; это роскошные многослойные конструкции из натуральной латексной пены. Внутренние прослойки могут быть из верблюжьей шерсти или шерсти овец-мериносов, конского волоса, кашемира, шелка, 100 % хлопка, льна. Покрытие тоже из натуральных тканей: органического хлопка, бамбукового волокна, целлюлозной пряжи, вискозы, перкаля или других. Материал может пропитываться алоэ вера или экстрактом зеленого чая, которые положительно влияют на наш организм.</p>
<h3>Высочайший комфорт. </h3>В матрасах премиум-класса активно используются материалы с повышенной воздухопроницаемостью и эффектом охлаждения. Благодаря этому Вы получаете дышащую модель, на которой комфортно спать в любое время года. Натуральная латексная пена с эффектом памяти подстраивается под индивидуальные анатомические особенности конкретного человека и дает оптимальную поддержку позвоночнику.</p>
<h3>Разнообразие предложений. </h3>В нашем каталоге найдутся ортопедические матрасы на любой, даже самый взыскательный вкус. В ассортименте &laquo;Магнифлекс&raquo; есть целые коллекции. Они объединяют модели, схожие по дизайну, но имеющие разную жесткость и высоту. В настоящее время мы можем предложить Вам следующие элитные коллекции.</p>
<ul class="kakvyb_list">
	<li><strong>Rest</h3> &ndash; двусторонние матрасы классического дизайна с чехлом из вискозы, отличающиеся элегантностью и строгостью пропорций. В качестве <a href="https://www.magniflex.ru/production/inner-plates/"><u>наполнителей</u></a>&nbsp;используются Memoform (Memory), Elioform, Eliosoft.</li>
	<li><strong>FreshGel</h3> &ndash; легкие, дышащие, воздушные матрасы с удивительной воздухопроницаемостью. Изделия из этой коллекции благодаря дополнительному слою гелевой пены Magnigel обладают еще и легким охлаждающим эффектом. Летом матрас не нагревается от соприкосновения с Вашим телом, а зимой не забирает тепло. И обладает возможностью моделировать жесткость - 4 уровня жесткости. (без чехла это 2 уровня жесткости).</li>
	<li><strong>New Comfort Plus</h3> &ndash; двуспальные модели, обладающие не только терморегулирующим эффектом, но и предусматривающие четыре уровня жесткости. Каждый из матрасов состоит из двух двусторонних половинок. Для каждой из сторон характерен свой уровень жесткости. Вам достаточно перевернуть любую из половинок нужной стороной вверх. Особый плотный чехол с эффектом памяти делает стыки между двумя блоками неощутимыми.</li>
	<li><strong>Imperiale</h3> &ndash; коллекция, отличающаяся поистине аристократичной роскошью, высокими ортопедическими и анатомическими свойствами. Все это в сочетании с терморегулирующими свойствами чехла сделает Ваш отдых по-настоящему комфортным.</li>
	<li><strong>Magnificent</h3> &ndash; эти удивительно &laquo;чуткие&raquo; матрасы можно назвать самомоделируемыми. Современные наполнители создадут практически идеальный микроклимат для сна.</li>
	<li><strong>Harmony</h3> &ndash; восемь уровней жесткости матраса (от жесткого и умеренно-жесткого до мягкого и комбинированного) позволят Вам без труда смоделировать оптимальный для Вас уровень комфорта.</li>
	<li><strong>Virtus</h3> &ndash; матрасы этой коллекции – одни из лучших в премиум-сегменте. Помимо воздухопроницаемых латексных блоков с эффектом памяти в них присутствуют такие наполнители, как верблюжья шерсть, кашемир и конский волос. В этой модели используется memoform HD - более совершенный технологически материал, чем memoform обычный. А также Elioform Breeze – упругий вариант пены. Материал обогащен натуральным экстрактом эвкалипта, что позволяет повысить ощущение хорошего самочувствия и свежести с прохладой во время сна, при этом обеспечивая максимальную поддержку для спины.</li>
</ul>
'
),
array(
'address' => 'pravilnaya-ekspluataciya-matrasov',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Правильная эксплуатация матрасов',
'left_sidebar' => 'articles',
'title' => 'Правильная эксплуатация матрасов',
'description' => 'Правильная эксплуатация матрасов',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Правильная эксплуатация матрасов</h2>
<p>Ортопедический матрас &ndash; не самое дешевое удовольствие, поэтому, приобретая его, каждый надеется, что покупка будет надежно служить ему долгие годы. &laquo;Магнифлекс&raquo; реализует только качественную продукцию, рассчитанную на длительное использование. Гарантийный срок эксплуатации наших моделей, в зависимости от коллекции и типа наполнителя, колеблется от 12 до 20 лет (для моделей премиум-класса). Однако Вам следует помнить о некоторых несложных правилах пользования изделием и избегать определенных действий, нарушающих его качество. Итак, в чем же заключаются основные принципы правильной эксплуатации беспружинного ортопедического матраса?</p>
<h3>Не подвергайте матрас излишним нагрузкам. </h3>Приобретая модель, обратите внимание не только на характеристики комфортности и ортопедические свойства, но и на уровень допустимой для нее нагрузки. Убедитесь, что Ваш вес соответствует необходимым параметрам. Это позволит использовать изделие в течение длительного времени. Общие рекомендации таковы:</p>
<p><img alt="Правильная эксплуатация матрасов" src="/img/image_nagruzki.jpg" style="height:182px; width:384px" /></p>
<p>Допустимая максимальная нагрузка, при которой матрасы «Магнифлекс» сохраняют свои анатомические и ортопедические свойства, варьируется в зависимости от модели.<br/>
Какой вес выдерживает?<br/>
160 кг на одно спальное место. Двуспальные матрасы выдерживают до 180 кг на спальное место, но при этом второй спящий на матрасе должен быть с весом до 120 кг.
</p>
<p>Данное правило не относится к детским матрасам с наполнителем Eliocel &ndash; они сконструированы таким образом, что дети могут свободно прыгать и играть на них.</p>
<h3>Проследите, чтобы матрас соответствовал размерам кровати. </h3>Еще одна важная характеристика, от которой зависит продолжительность эксплуатации матраса, &ndash; размер кровати. Желательно, чтобы он в точности соответствовал габаритам матраса. В тех случаях, когда подобрать идеально подходящую модель не получается, предпочтение лучше отдать матрасам чуть меньшего размера. Не стоит приобретать модель, чьи габариты не вполне подходят под габариты основания. В этом случае края матраса будут сдавливаться, что не лучшим образом скажется на долговечности наполнителя.</p>
<h3>Используйте наматрасники. </h3>Они нужны для сохранения исходного качества изделия и предотвращения появления загрязнений. Дополнительный съемный чехол не только защитит Ваш матрас от случайно пролитой чашки кофе и иных неожиданностей, но и помешают ему накапливать в себе пыль.</p>
<h3>Правильно очищайте матрас. </h3>Раз в месяц изделие рекомендуется пылесосить, чтобы удалить скопившуюся пыль. Кроме того, для облегчения ухода за изделием, матрасы &laquo;Магнифлекс&raquo; снабжены съемным чехлом на молнии. При необходимости его очень легко снять и отдать в химчистку. Если у Вас все-таки возникла необходимость в более серьезной очистке, помните, что нельзя допускать контакта матраса с водой. Все загрязнения удаляются влажной, предварительно отжатой губкой, после чего поверхность рекомендуется сразу же высушить феном.</p>
<h3>Подберите качественное основание. </h3>Оптимальный вариант &ndash; решетка из поперечных деревянных ламелей в раме. Жесткая конструкция, например фанерные щиты, менее желательна. Рама из ламелей позволяет матрасу в полной мере реализовать его свойства и, по сути, составляет с ним единую систему обеспечения комфортного отдыха и сна.</p>
'
),
array(
'address' => 'preimushhestva-ortopedicheskogo-matrasa',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Преимущества ортопедического матраса',
'left_sidebar' => 'articles',
'title' => 'Преимущества ортопедического матраса',
'description' => 'Преимущества ортопедического матраса',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Преимущества ортопедического матраса</h2>
<p>Рекламу ортопедических матрасов и предложение их купить хотя бы раз видел каждый. Но далеко не все знают, что представляет собой данный продукт и почему он стоит дороже традиционных вариантов. Итак, в чем же главное отличие? Качественные ортопедические матрасы обеспечивают равномерное распределение веса спящего человека, за счет чего все отделы позвоночника находятся в оптимальном, физиологически правильном положении. Собственно говоря, &laquo;orthos&raquo; в переводе с древне-греческого как раз и означает &laquo;правильный&raquo;. Однако для того, чтобы не только называться, но и действительно являться ортопедическим, матрас должен соответствовать определенным критериям качества. Им полностью отвечает продукция &laquo;Магнифлекс&raquo;.</p>
<h3>Достоинства ортопедических матрасов &laquo;Магнифлекс&raquo;</h3>
<ul class="kakvyb_list">
	<li>За плечами компании уже 20 лет безупречной работы на российском рынке.</li>
	<li>Все матрасы, представленные в нашем каталоге, изготовлены в Италии и снабжены специальным серийным номером, позволяющим точно установить происхождение каждой модели.</li>
	<li>Фабрика &laquo;Магнифлекс&raquo; занимает одни из лидирующих позиций на рынке ортопедических матрасов уже более 50 лет.</li>
	<li>Качество продукции неоднократно подтверждалось множеством наград и различными сертификатами от заслуживающих доверия организаций во всем мире.</li>
	<li>Матрасы &laquo;Магнифлекс&raquo; получили официальное признание ортопедов Европы и рекомендованы Центральным институтом ортопедии и травматологии в РФ. Кроме того, есть удостоверение Минздрава России, подтверждающее, что наша продукция с полным правом может называться &laquo;ортопедической&raquo;.</li>
</ul>
<h3>Что такое точечная эластичность</h3>
<p>Ключевой характеристикой, позволяющей определить настоящие ортопедические матрасы, является точечная эластичность. Именно от нее зависит, как будет реагировать на нагрузку каждый элемент поверхности. Матрасы с высокой точечной эластичностью способны максимально верно приспосабливаться к нагрузке, повторяя форму естественных изгибов человеческого тела. Это позволяет правильно распределять вес, благодаря чему физиологичное положение позвоночника сохраняется независимо от позы спящего.</p>
<h3>Преимущества матрасов с точечной эластичностью </h3>
<p>Чрезмерно жесткий матрас подвергает тело человека избыточным нагрузкам. Чтобы удержать позвоночник в комфортной позе, мышцы постоянно находятся в напряжении. Слишком мягкий матрас, как ни странно, приводит к схожим результатам. Тело в нем утопает, в результате поддержка спины осуществляется опять-таки за счет постоянного напряжения мускулатуры. Равномерное распределение веса на ортопедических матрасах позволяет максимально расслабить мышцы, является хорошей профилактикой искривлений позвоночника. Это не только благотворно сказывается на качестве сна, но и ведет к активизации кровообращения и обмена веществ, то есть к общему оздоровлению организма.</p>
<h3>Обеспечение точечной эластичности в матрасах &laquo;Магнифлекс&raquo;</h3>
<p>Точечная эластичность в беспружинных матрасах &laquo;Магнифлекс&raquo; обеспечивается за счет блоков высокоэластичной натуральной латексной пены. Этот материал благодаря оптимальному сочетанию упругости и мягкости способен принимать форму тела человека и оптимально поддерживать позвоночник. В качестве наполнителей Magniflex использует следующие разновидности латексной пены:</p>
<ul class="kakvyb_list">
	<li><strong>Memoform (Memory)</h3> &ndash; мягкую пену, способную мгновенно принимать форму тела в местах соприкосновения с матрасом и обеспечивающую анатомический эффект, под действием давления или тепла и мгновенно распрямляться при отсутствии нагрузок;</li>
	<li><strong>Eliosoft</h3> &ndash; пену с микросотовой структурой высокой плотности, прекрасно сочетающую в себе воздухопроницаемость и эластичность;</li>
	<li><strong>Eliocel</h3> &ndash; экологически чистый материал с микропористой структурой, повышенной гигроскопичностью и антисептическими свойствами;</li>
	<li><strong>Waterlattex</h3> &ndash; вспененный и вулканизированный натуральный латекс, приобретающий благодаря обогащению водой и полимерами уникальные анатомические и ортопедические свойства.</li>
</ul>
<p>Как убедиться в том, что понравившаяся Вам модель ортопедического матраса отличается достаточной эластичностью и подходит Вам по уровню комфортности? Самый беспроигрышный вариант &ndash; это полежать на ней. Приглашаем Вас в <a href="https://www.magniflex.ru/o-magniflex/show-room-matrasov/"><u>шоу-рум</u></a>, где Вы сможете не только получить консультацию специалистов, но и как следует &laquo;протестировать&raquo; свой будущий матрас. Адрес нашего шоу-рум, часы работы и контактные телефоны указаны в соответствующем разделе сайта.</p>
'
),
array(
'address' => 'kak-pravilno-podobrat-matras-magnifleks',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Как правильно подобрать матрас «Магнифлекс»',
'left_sidebar' => 'articles',
'title' => 'Как правильно подобрать матрас «Магнифлекс»',
'description' => 'Как правильно подобрать матрас «Магнифлекс»',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Как правильно подобрать матрас «Магнифлекс»</h2>
<p>Каталог матрасов &laquo;Магнифлекс&raquo; отличается разнообразием. Широкий ассортимент &ndash; залог того, что каждый покупатель сумеет найти &laquo;свою&raquo; модель. Но с чего начать поиски и что следует учесть? Один из главных критериев &ndash; Ваши пожелания относительно уровня комфортности и анатомичности матраса. Рекомендации врачей ортопедов имеют большое значение, однако ориентироваться только на них все-таки не стоит. Личные предпочтения также очень важны. Как убедиться, что подходящая по описанию и характеристикам модель станет оптимальным решением именно для Вас? Самый простой способ &ndash; это полежать на приглянувшемся Вам матрасе в нашем <a href="https://www.magniflex.ru/o-magniflex/show-room-matrasov/"><u>шоу-руме</u></a>. Такой подход &ndash; залог того, что Вы приобретаете модель, на которой будет по-настоящему удобно спать.</p>
<h3>Нюансы выбора</h3>
<h3>Наполнители</h3>
<p>В ассортименте Magniflex представлены матрасы с разными наполнителями. Основой для каждого из них является натуральная латексная пена.</p>
<ul class="kakvyb_list">
	<li><strong>Memoform</h3> &ndash; один из самых мягких и комфортных материалов. Мгновенно принимает форму тела, легко изменяет ее, если Вы двигаетесь во сне, обеспечивает позвоночнику и суставам максимальную поддержку.</li>
	<li><strong>Eliosoft</h3> &ndash; обеспечивает естественную поддержку позвоночнику, отличается высочайшей мягкостью и прочностью, прекрасно поглощает влагу. В комбинации с другими наполнителями позволяет добиться идеального сочетания жесткости и мягкости.</li>
	<li><strong>Eliocel </h3>&ndash; материал за счет своей микропористой структуры обеспечивает хорошую воздухопроницаемость и гигроскопичность.</li>
	<li><strong>Waterlattex </h3>&ndash; вспененный вулканизированный латекс, отличающийся оптимальным соотношением упругости и эластичности.</li>
</ul>
<h3>Материалы внутренних прослоек</h3>
<p>Для внутренних прослоек в матрасах Magniflex используются только натуральные и гипоаллергенные материалы, такие как конский волос, верблюжья шерсть, шерсть тонкорунных овец-мериносов, лен и хлопок.</p>
<h3>Пропитки</h3>
<p>В некоторых моделях &laquo;Магнифлекс&raquo; используются натуральные составы, придающие верхнему слою матраса дополнительные полезные свойства. Например, растение алоэ вера способствует ускорению регенерации организма. Пропитка матраса экстрактом алоэ вера положительно влияет на сон и внимательность. Зеленый чай обладает дезинфицирующим действием, поэтому такая пропитка способствует выводу из организма различных токсинов.</p>
<h3>Технологии</h3>
<p>Отдельные модели из нашего каталога изготовлены с использованием особых технологий, позволяющих еще больше увеличить комфортность ортопедических матрасов.</p>
<ul class="kakvyb_list">
	<li><strong>Dual</h3>. Двуспальные матрасы Dual разработаны специально для людей, предпочитающих (из-за рекомендаций врача или личных предпочтений) разные уровни жесткости постели. Такой вариант состоит из двух независимых половинок, каждая из которых имеет две стороны: мягкую и более жесткую. Достаточно просто перевернуть половину матраса нужной стороной, чтобы отрегулировать его под себя. Плотный чехол с эффектом памяти позволяет сделать стык между элементами конструкции неощутимым.</li>
	<li><strong>FreshGel</h3>. Матрасы с технологией FreshGel разработаны для людей с повышенной потливостью или особенно интенсивным теплообменом. Прослойка из гелевой пены Magnigel Foam обеспечивает дополнительный охлаждающий эффект. Благодаря ей матрасы FreshGel не нагреваются при соприкосновении с телом, спать на них прохладно и комфортно даже в очень жаркое время. А зимой такой матрас не будет &laquo;отбирать&raquo; тепло.</li>
</ul>
<h3>Чехлы</h3>
<p>Матрасы &laquo;Магнифлекс&raquo; рассчитаны на продолжительную эксплуатацию &ndash; от 12 лет. В течение этого срока они будут подвергаться загрязнению. Чтобы владелец мог максимально легко устранить эту проблему, матрасы имеют съемные чехлы на молнии. В случае чего такой чехол можно легко снять и отдать в химчистку. Это избавит пользователя от хлопот, связанных с самостоятельным устранением загрязнений или транспортировкой матраса в химчистку. Материалы, которые используются для изготовления чехлов, зависят от модели. Это может быть хлопок (перкаль, органик, сатин), вискоза, бамбуковое волокно или другая натуральная ткань.</p>
<h3>Уровень жесткости</h3>
<p>Ассортимент Magniflex включает в себя матрасы разного уровня жесткости: от высокой и умеренной до низкой (от 1 до 5 в цифровом эквиваленте). Это позволяет каждому покупателю без труда подобрать для себя модель, соответствующую его личным предпочтениям или рекомендациям врача-ортопеда.</p>
<h3>Размерный ряд</h3>
<p>Каждый матрас, представленный в каталоге &laquo;Магнифлекс&raquo;, существует в нескольких размерных вариантах. Вы можете увидеть их все в нашем каталоге. Если Вам потребуется матрас нестандартного размера, обсудите возможность его заказа со специалистами нашей справочной службы. Критерии выбора габаритов матраса довольно просты: его длина должна быть на 15&ndash;20 см больше, чем рост спящего, а минимальная ширина такова, чтобы человек мог свободно лечь и согнуть руки за головой. Максимальная планка не ограничивается ничем, кроме размеров спальни и Ваших пожеланий.</p>
<h3>Универсальность изделий</h3>
<p>Многие ортопедические матрасы &laquo;Магнифлекс&raquo; представляют собой мультифункциональные модели, часть параметров которых можно регулировать в зависимости от предпочтений владельца. Например, есть матрасы, где одна из половинок более жесткая, а другая значительно мягче. Кроме того, многие модели подходят для использования в любое время года. &laquo;Зимняя&raquo; сторона обычно покрыта материалом из шерсти мериноса, которая обладает прекрасными теплорегулирующими свойствами. &laquo;Летняя&raquo; сторона, в зависимости от модели, может быть изготовлена из хлопка, вискозы или сочетать оба материала. Они обеспечат комфортный сон даже в самое жаркое время года.</p>
'
),
array(
'address' => 'kakoj-matras-vybrat-pri-osteoxondroze',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Какой матрас выбрать при остеохондрозе',
'left_sidebar' => 'articles',
'title' => 'Какой матрас выбрать при остеохондрозе',
'description' => 'Какой матрас выбрать при остеохондрозе',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Какой матрас выбрать при остеохондрозе</h2>
<p>Остеохондроз сопровождается изменениями в межпозвоночных дисках, приводящими к уменьшению расстояния между некоторыми позвонками. Это заболевание, относящееся к числу распространенных патологий опорно-двигательной системы, способно причинить немало хлопот и изрядно снизить качество жизни. Каждый, кто хочет свести к минимуму количество обострений, уменьшить боли и чувствовать себя как можно комфортнее, должен обратить внимание на то, на чем он спит. &laquo;Магнифлекс&raquo; &ndash; итальянский производитель матрасов, рекомендованных Центральным научно-исследовательским институтом ортопедии и травматологии РФ, &ndash; предлагает своим покупателям ортопедические модели, разработанные специально для больных остеохондрозом. Удостоверение Минздрава РФ, с которым Вы можете ознакомиться в разделе &laquo;<a href="https://www.magniflex.ru/pokupatelyam/certificates/"><u>Сертификаты</u></a>&raquo;, подтверждает качество нашей продукции.</p>
<h3>Критерии выбора</h3>
<h3>Основа. </h3>
<p>Единого критерия, касающегося выбора основы матраса при патологии опорно-двигательной системы, не существует. Одними из лучших решений в таких случаях являются беспружинные модели с наполнителями из натуральной латексной пены. Этот материал обладает оптимальными сочетаниями эластичности и упругости.</p>
<h3>Анатомичность. </h3>
<p>Ночью мы множество раз меняем положение тела, поэтому ортопедические свойства матраса приобретают особенно важное значение. Даже если мы тщательно следим за осанкой в период бодрствования, делать это во сне мы не можем. Заснув в неправильном положении, можно проснуться с сильной болью в спине. Хороший ортопедический матрас с эффектом памяти обеспечивает физиологически правильное положение позвоночника в любой позе.</p>
<h3>Жесткость. </h3>
<p>Мягкая постель на первый взгляд очень комфортна. Однако в ней наша спина находится в своеобразном гамаке и не получает нужной поддержки. Но не стоит из-за этого переходить в другую крайность. Излишне жесткий матрас может привести к перенапряжению мускулатуры спины и даже усилить болевые ощущения. Общее правило при остеохондрозе звучит так: при обострениях хорошо спать на умеренно жесткой поверхности, а при улучшении состояния &ndash; на матрасе помягче. В связи с этим лучше приобретать двусторонние модели. В нашем каталоге Вы найдете большое количество таких ортопедических матрасов.</p>
<h3>Экологичность. </h3>
<p>Компания &laquo;Магнифлекс&raquo; уделяет особое внимание этому критерию и предлагает покупателям изделия, изготовленные исключительно из натуральных компонентов. Их основой, обеспечивающей точечную эластичность, является натуральная латексная пена &ndash; эластичный воздухопроницаемый гипоаллергенный материал, получаемый из сока каучуконосных растений. Помимо латексной пены, мы используем верблюжью и овечью шерсть, кашемир, хлопок и другие натуральные компоненты для внутренних прослоек.</p>
<p>В качестве дополнительной рекомендации хотим отметить, что для лучшего эффекта нужно правильно спать на приобретенном ортопедическом матрасе. Больным остеохондрозом желательно отказаться от сна на животе. Предпочтительными вариантами являются положения на спине и на боку.</p>
'
),
array(
'address' => 'bespruzhinnye-matrasy',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Беспружинные матрасы',
'left_sidebar' => 'articles',
'title' => 'Беспружинные матрасы',
'description' => 'Беспружинные матрасы',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Беспружинные матрасы</h2>
<p>В сознании многих ортопедические матрасы &ndash; это исключительно пружинные модели. Но на самом деле ситуация давно изменилась. Современные материалы обладают множеством полезных свойств, в том числе способностью обеспечить поддержку позвоночника, анатомически правильное его положение и расслабление мышц спины. Качественные беспружинные матрасы, благодаря своей комфортности, приобретают все большую популярность у покупателей. В ассортименте итальянского бренда &laquo;Магнифлекс&raquo; представлено множество моделей этой группы. Если Вы еще не определились с тем, какой именно ортопедический матрас Вам нужен, то Вам наверняка окажется полезной информация о достоинствах беспружинных вариантов.</p>
<h3>Особенности конструкции</h3>
<p>В матрасах этого типа полностью отсутствует пружинный блок. Такие изделия могут быть как монолитными, так и многослойными, состоящими из нескольких видов наполнителя различной степени жесткости. &laquo;Магнифлекс&raquo; предлагает несколько вариантов наполнителей из вспененного натурального латекса:</p>
<ul class="kakvyb_list">
<li>мягкие Memoform и Memory, способные оптимально подстраиваться под форму Вашего тела;</li>
<li>Eliosoft &ndash; эластичная пена с микросотовой структурой;</li>
<li>Eliocel &ndash; гигроскопичный материал с высокими антисептическими свойствами.</li>
</ul>
<p>Латексная пена обладает высокой гигроскопичностью, хорошей воздухопроницаемостью и анатомичностью. Выбор моделей беспружинных матрасов достаточно широкий, каждый может подобрать матрас исходя из своих индивидуальных предпочтений.</p>
<h3>Преимущества</h3>
<h3>Отсутствие металла в конструкции. </h3>
<p>Нет пружин &ndash; значит нет металла и таких явлений, как статическое электричество и электромагнитное излучение. В мире, где нас постоянно окружает разнообразная техника, особенно важно хотя бы изредка отдыхать от воздействия электромагнитных полей. Кроме того, отсутствие пружин исключает и связанный с ними дискомфорт и шум: в беспружинных матрасах нечему скрипеть.</p>
<h3>Устойчивость к различным видам нагрузок. </h3>
<p>Беспружинные матрасы изготавливаются из плотных эластичных материалов, способных выдерживать значительные нагрузки. Многие из этих моделей рассчитаны на вес от 140 кг. Одно из слабых мест пружинного блока (в особенности независимого, который применяется в ортопедических матрасах) &ndash; это низкая устойчивость к точечным нагрузкам вертикального типа. Такие воздействия нередко приводят к тому, что изделие полностью или частично утрачивает свои свойства. На беспружинных матрасах можно прыгать, резвиться и кувыркаться, что особенно важно, если у Вас есть маленькие дети.</p>
<h3>Долговечность. </h3>
<p>Натуральная латексная пена долгие годы не теряет своих ортопедических свойств, не крошится и не портится. Поэтому гарантия на наши матрасы весьма продолжительна. В зависимости от вида наполнителя и класса изделия она может составлять 12, 15 и даже 20 лет (на ряд коллекций премиум-класса).</p>
'
),
array(
'address' => 'matrasy-magniflex',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Матрасы Magniflex',
'left_sidebar' => 'articles',
'title' => 'Матрасы Magniflex',
'description' => 'Матрасы Magniflex',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Матрасы Magniflex</h2>
<p>В настоящее время на российском рынке присутствует немало зарубежных и российских производителей матрасов ортопедической группы. Итальянская фабрика &laquo;Магнифлекс&raquo; по-прежнему занимает одно из лидирующих положений. Magniflex &ndash; не просто знаменитый бренд. Это безупречное качество и по-настоящему полноценный отдых. Матрасы &laquo;Магнифлекс&raquo; можно действительно называть ортопедическими: их свойства подтверждены сертификатами Италии, России, Японии, США, Австралии и других стран.</p>
<h3>О компании</h3>
<p>&laquo;Магнифлекс&raquo; &ndash; компания, история успеха которой насчитывает не одно десятилетие. Фабрика начала работу еще в 1962-м и в скором времени вышла на лидирующие позиции на мировом рынке ортопедических матрасов премиум-класса. К настоящему моменту за плечами компании более 20 лет безупречной работы в нашей стране. С момента своего основания и по сей день &laquo;Магнифлекс&raquo; остается на шаг впереди многих. Именно на этой фабрике в конце 80-х были впервые запатентованы и внедрены в производство вакуумная упаковка, а затем и латексные модели матрасов с эффектом памяти. Все модели под маркой &laquo;Магнифлекс&raquo; производятся исключительно в Италии, в городе Прато, на крупном и технологически совершенном заводе Европы, ежедневно изготавливающем более 10 000 единиц продукции.</p>
<h3>Рекомендации, сертификаты и гигиенические критерии</h3>
<p>Качество моделей &laquo;Магнифлекс&raquo; подтверждено исследованиями зарубежных экспертных организаций. В нашей стране ортопедические матрасы этой марки имеют <a href="https://www.magniflex.ru/img/RU-ortopedicheskie-matrasy2.jpg"><u>удостоверение Минздрава</u></a>, подтверждающее ортопедические характеристики продукции. Также они официально рекомендованы Центральным научно-исследовательским институтом ортопедии и травматологии им. Приорова в качестве действенного профилактического средства, предотвращающего многие заболевания опорно-двигательного аппарата. Кроме того, продукция &laquo;Магнифлекс&raquo;, реализуемая в России, прошла сертификацию РосТест. Высокие гигиенические критерии матрасов этой марки обеспечиваются благодаря оригинальному методу вакуумной упаковки, гарантирующей покупателю:</p>
<ul class="kakvyb_list">
<li>абсолютную чистоту изделия;</li>
<li>полное сохранение исходных качественных характеристик: при упаковке матрас подвергается сильному сжатию, достигающему 90 %, а после распаковки он восстанавливает исходные размеры и форму;</li>
<li>удобство в процессе транспортировки и хранения.</li>
</ul>
<h3>Наши предложения</h3>
<p>В настоящее время каталог продукции &laquo;Магнифлекс&raquo; включает в себя разнообразные модели ортопедических матрасов. Условно их можно разделить на следующие категории.</p>
<h3>Детские ортопедические матрасы. </h3>Практичные, износостойкие гипоаллергенные изделия с натуральными наполнителями &ndash; шерстью тонкорунных овец мериносов и волокнами бамбука. Наши модели <a href="https://www.magniflex.ru/catalog/detskie-ortopedicheskie-matrasy/MERINO-childrens/"><u>Merino</u></a>&nbsp;и <a href="https://www.magniflex.ru/catalog/detskie-ortopedicheskie-matrasy/Merino+Bamboo/"><u>Merino Bamboo</u></a>&nbsp;признаны одними из лучших детских матрасов и удостоены наград на престижных международных выставках.</p>
<h3>Матрасы средней ценовой категории для взрослых. </h3>Мы предлагаем покупателям ряд моделей, изготовленных из моноблоков натуральной латексной пены в двусторонних чехлах из шерсти и чистого хлопка.</p>
<h3>Матрасы премиум-класса для взрослых. </h3>В данную категорию входят роскошные модели, изготовленные из натуральных материалов &ndash; латексной пены, овечьей и верблюжьей шерсти, кашемира, вискозы и других &ndash; различного уровня жесткости. В каталоге <a href="https://www.magniflex.ru/catalog/elitnye-matrasy/"><u>матрасов премиум-класса</u></a>&nbsp;Вы найдете следующие коллекции:</p>
<ul class="kakvyb_list">
<li>Rest,</li>
<li>FreshGel,</li>
<li>New Comfort Plus,</li>
<li>Imperiale,</li>
<li>Magnificent,</li>
<li>Harmony,</li>
<li>Virtus.</li>
</ul>
'
),
array(
'address' => 'kak-chistit-ortopedicheskij-matras',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Как чистить ортопедический матрас',
'left_sidebar' => 'articles',
'title' => 'Как чистить ортопедический матрас',
'description' => 'Как чистить ортопедический матрас',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Как чистить ортопедический матрас</h2>
<p>Далеко не все покупатели, приобретающие ортопедические матрасы из нашего каталога, задумываются о правилах эксплуатации изделий. Между тем от чистоты постели, на которой мы спим, во многом зависит наше самочувствие. Кроме того, надлежащее гигиеническое состояние матраса &ndash; залог максимально долгой службы изделия. Разумеется, матрас, в отличие от постельного белья, не нуждается в стирке. Но некоторый уход за ним все равно необходим, не говоря уже о том, что в жизни любой семьи хотя бы раз может возникнуть необходимость серьезной чистки матраса. Поэтому хорошо знать основные принципы ухода за изделием до того, как возникнет необходимость применять их на практике.</p>
<h3>Как предотвратить загрязнение матраса</h3>
<p>Завтрак в постели, завершившийся случайно опрокинутой чашкой кофе, проказы детей или домашних животных и прочие внештатные ситуации могут обернуться серьезным загрязнением дорогого ортопедического матраса. Самое лучшее &ndash; заранее свести возможность появления такой проблемы к нулю. У матрасов &laquo;Магнифлекс&raquo; есть такая удобная вещь, как съемный чехол на молнии по всему периметру. В случае необходимости его легко снять и отдать в химчистку. Это намного проще, чем заниматься чисткой большого двуспального матраса.</p>
<h3>Как устранить серьезное загрязнение</h3>
<p>Один из способов очистить матрас &ndash; это прибегнуть к услугам химчистки. Но реализация данного варианта сопряжена с некоторыми проблемами. Изделие надо как-то доставить в химчистку, а это не всегда легко, учитывая размеры некоторых моделей. Если такая транспортировка Вас не привлекает, можно попробовать сделать все своими силами. Только не стоит применять для этой цели пятновыводители и сухие очистители &ndash; мощные реагенты, входящие в их состав, могут непоправимо испортить изделие. Лучше всего использовать мягкие стиральные порошки или мыльный раствор (из расчета одна ложка на один литр теплой воды).</p>
<p>Основные принципы ухода:</p>
<ul class="kakvyb_list">
<li>чистку лучше начинать с угла, постепенно продвигаясь к центру;</li>
<li>не нужно чрезмерно мочить матрас &ndash; это чревато появлением плесени и грибков. Губку следует обмакнуть в раствор, затем хорошо отжать и только потом протирать поверхность изделия;</li>
<li>тряпку или губку необходимо как можно чаще полоскать в воде, а саму воду &ndash; менять при появлении первых признаков загрязнения;</li>
<li>по завершении чистки матрас необходимо просушить при помощи тепловентилятора или фена;</li>
<li>если есть возможность, то для сушки матрас лучше всего вынести на улицу или балкон.</li>
</ul>
<h3>Как устранить неприятные запахи</h3>
<p>Если от матраса исходит неприятный запах, можно попробовать устранить его при помощи тонкого слоя пищевой соды, нанесенного на поверхность. Через полчаса порошок можно убрать обычным пылесосом. Въевшийся запах табака выводят при помощи смеси соды и поваренной соли. Для того чтобы устранить особенно стойкие въевшиеся запахи, лучше добавить в воду несколько капель нашатырного спирта, после чего протереть обработанные места теплой водой и высушить матрас.</p>
'
),
array(
'address' => 'ortopedicheskie-podushki-pokazaniya-k-primeneniyu',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Ортопедические подушки: показания к применению',
'left_sidebar' => 'articles',
'title' => 'Ортопедические подушки: показания к применению',
'description' => 'Ортопедические подушки: показания к применению',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Ортопедические подушки: показания к применению</h2>
<p>Ортопедические подушки являются специально разработанным решением, позволяющим предотвратить возникновение нарушений в строении и функционировании шейного отдела позвоночника, а также улучшить качество жизни людей, имеющих подобные проблемы. Эти изделия находят широкое применение как в медицинской практике, так и за пределами лечебных учреждений. Рассмотрим наиболее типичные случаи, являющиеся показаниями к использованию ортопедических подушек.</p>
<h3>Повышение качества сна</h3>
<p>Очень важно, чтобы во время сна человек размещался правильно и его позвоночник, в том числе и шейный отдел, имел надежную поддержку. Это позволит разгрузить мышцы шеи, предотвратить пережатие кровеносных сосудов и защемление нервов. Ортопедическая подушка является удачным решением для повышения качества отдыха: после сна на ней человек чувствует себя полностью отдохнувшим за счет сохранения оптимального кровообращения и эффективного расслабления. Кроме того, наполнители некоторых подушек (например Magniflex Aloe Vera) могут быть пропитаны экстрактом алоэ, предотвращающим воспалительные процессы и оказывающим бактерицидное действие.</p>
<h3>Профилактика и лечение заболеваний</h3>
<p>Некоторые люди сталкиваются в своей повседневной жизни с сильными или нетипичными нагрузками на шейный отдел позвоночника. Примером могут служить пользователи ПК, профессиональные программисты, инженеры, студенты, школьники. В результате перенапряжения и продолжительного пребывания в неправильном положении у них могут развиться такие заболевания, как:</p>
<ul class="kakvyb_list">
<li>остеохондроз, вызванный дистрофией межпозвоночных дисков;</li>
<li>головные боли и вертебробазилярная недостаточность, связанные с нарушением кровообращения мозга;</li>
<li>болевые ощущения в мышцах шеи и их воспаление, провоцируемые повышенной нагрузкой во время сна;</li>
<li>нарушение работы вестибулярного аппарата;</li>
<li>мышечный дисбаланс, вызываемый продолжительным статичным положением тела или стереотипно-повторяющимися действиями.</li>
</ul>
<p>За счет специальной эргономичной формы и применения в ортопедических подушках материалов с эффектом памяти обеспечиваются оптимальная разгрузка мышц и нормальное кровообращение, что предотвращает появление или развитие указанных заболеваний.</p>
<h3>Реабилитация после травм</h3>
<p>Повреждения шейного отдела позвоночника, полученные в результате автомобильных аварий, падений, спортивных упражнений требуют достаточно долгого периода восстановления. Это необходимо для того, чтобы позвонки и межпозвоночные диски заняли стабильное положение. В этот период им необходимо обеспечить правильное положение и пониженную нагрузку. Ортопедические подушки с эффектом памяти адаптируются к индивидуальной форме позвоночника, поддерживают голову в нужном положении, снимая напряжение на шейный отдел. Это уменьшает вероятность возникновения осложнений и ускоряет процесс реабилитации пациентов.</p>
'
),
array(
'address' => 'kak-pravilno-spat-na-ortopedicheskoj-podushke',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Как правильно спать на ортопедической подушке',
'left_sidebar' => 'articles',
'title' => 'Как правильно спать на ортопедической подушке',
'description' => 'Как правильно спать на ортопедической подушке',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Как правильно спать на ортопедической подушке</h2>
<p>Ортопедическая подушка &ndash; одно из важных средств профилактики и лечения проблем, связанных с нарушениями в шейном отделе позвоночника, например остеопороза, миозитов, головных болей и других неприятных состояний. Кроме того, она повышает общее качество отдыха, поэтому может использоваться и совершенно здоровыми людьми. Модели могут отличаться по форме, размерам и наполнителям. Обязательно обратите внимание на высоту и упругость изделия. Их соотношение должно быть таким, чтобы при использовании Ваш позвоночник принимал естественное положение. Высоту большого валика подушки следует подбирать соразмерно ширине плеча. В то же время для эффективности применения таких изделий важно соблюдать некоторые правила.</p>
<h3>Примите правильное положение тела</h3>
<p>Спать на ортопедической подушке можно как на спине или животе, так и на боку. В каждом из этих случаев позвоночник будет занимать свое естественное положение. В позиции на спине шея должна принимать изогнутую форму, на животе и боку &ndash; по возможности прямую. С этой целью ортопедические подушки имеют валик, который и предназначен для поддержки шеи во всех трех позах. При этом для правильного поддержания положения позвоночника в промежуточных и не всегда удобных позах в подушках используются материалы с эффектом памяти формы.</p>
<h3>Обратите внимание на комфорт дыхания</h3>
<p>Особенно внимательно к этому должны отнестись люди с аллергическими или астматическими заболеваниями органов дыхания. Чтобы обеспечить дополнительную защиту от бактерий, грибков и клещей, остановитесь на моделях, имеющих специальную пропитку, например на Magniflex Aloe Vera.</p>
<h3>Позаботьтесь о здоровье кожи</h3>
<p>Во время сна голова и шея находятся в длительном контакте с поверхностью подушки. При этом потовые и сальные железы выделяют влагу и жир, которые могут оказывать на кожу раздражающее воздействие, проявляющееся в покраснении, высыпании и других неприятных симптомах. Как правило, периодичность, с которой человек меняет положение своего тела во сне, позволяет этого избежать, но при сильной усталости или во время болезни неэффективный отвод влаги и тепла от кожных покровов может стать проблемой. В таком случае рекомендуется использовать подушки с вентилирующим эффектом, ткань которых впитывает пот, выводящийся затем во внешнюю среду через систему микропор. Такая технология реализована, например, в моделях Magniflex Memory, имеющих структуру Airyform.</p>
'
),
array(
'address' => 'ukhod-za-ortopedicheskoj-podushkoj',
'parent_address' => 'articles',
'parent_name' => 'Статьи',
'name' => 'Уход за ортопедической подушкой',
'left_sidebar' => 'articles',
'title' => 'Уход за ортопедической подушкой',
'description' => 'Уход за ортопедической подушкой',
'keywords' => '',
'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
'text' => '
<a name="mytitlepag"></a>
<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Уход за ортопедической подушкой</h2>
<p>Эффективность использования ортопедической подушки зависит не только от свойств, изначально заложенных в нее производителем, но и от состояния, в котором ее содержит владелец. Поэтому очень важно обратить внимание на следующие несложные требования по уходу за ней.</p>
<h3>Проветривание</h3>
<p>Многие современные ортопедические подушки имеют наполнители с пористой микроструктурой, например Magniflex Memory. Она обеспечивает повышенный комфорт за счет эффективного отвода тепла и влаги от тела. Но все же некоторое время после сна в микропорах наволочки сохраняются остатки пота, для полного выведения которых нужно время. Поэтому рекомендуется не накрывать подушку одеялом и по возможности проветривать ее на свежем воздухе. Это предотвратит образование в микропорах подходящей среды для развития микроорганизмов, нередко вызывающих аллергию.</p>
<h3>Чистка</h3>
<p>Ортопедические подушки с наполнителями из материалов с эффектом памяти не рекомендуется стирать в машине. Вместо этого их поверхность нужно протирать влажной тряпкой или губкой, смоченной в растворе мягкого моющего средства, после чего прополаскивать холодной водой. После этого необходимо мягко сдавить материал между двумя сухими полотенцами и просушить его вдали от солнца и источников тепла.</p>
<h3>Хранение</h3>
<p>Так как в современных ортопедических подушках часто применяются наполнители и чехлы с пористой микроструктурой, важно не забывать помещать их в защитные футляры из натуральных тканей на то время, пока изделия не используются. Это обеспечит нужную вентиляцию материала и предотвратит образование в нем микроорганизмов. Для хранения не рекомендуется применять полиэтиленовые пакеты, что связано с отсутствием в них должного воздухообмена.</p>
'
),
		array(
			'address' => 'chekhly-dlya-matrasov-magniflex-kakie-materialy-ispolzuyutsya',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Чехлы для матрасов Magniflex: какие материалы используются',
			'left_sidebar' => 'articles',
			'title' => 'Чехлы для матрасов Magniflex: какие материалы используются',
			'description' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'keywords' => '',
			'text' => '
						<a name="mytitlepag"></a>
						<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Чехлы для матрасов Magniflex: какие материалы используются</h2>
						<p>При разработке своих продуктов для сна наша компания ставит на первое место ваш комфорт, поэтому при изготовлении изделий используются все последние достижения материаловедения и химической промышленности. При создании чехлов для матрасов Magniflex используются следующие ткани и наполнители.</p>
						<h3>Технологичные.</h3> Материалы, представленные в данной категории, разработаны в лабораториях в качестве альтернативы природному сырью и во многом превосходят его по эксплуатационным характеристикам. Среди применяемых в чехлах матрасов Magniflex материалов можно отметить следующие.</p>
						<ul style="list-style-type:disc;padding-left:20px;">
							<li><strong>Outlast.</h3> Первоначально созданная для нужд космонавтов, эта терморегулирующая ткань содержит в своей структуре восковые микросферы, способные накапливать тепло. Ночью они сжимаются и поглощают излишки энергии, выделяемой телом. При падении температуры ниже уровня комфорта микросферы расширяются и возвращают накопленное тепло.</li>
							<li><strong>Coolmax.</h3> Этот материал создавался в качестве искусственного заменителя хлопка. В его основу положена технология синтетических волокон, создающих особую микроструктуру, которая способствует эффективному отведению влаги от тела. При этом она не впитывается в саму ткань, а проходит через поры и испаряется с поверхности, что обеспечивает телу сухость, а материалу – постоянную свежесть.</li>
							<li><strong>Viscose.</h3> Этот полусинтетический материал изготавливается из очищенной и тщательно отобранной древесной целлюлозы. Волокнистость ткани обеспечивает отличную воздухопроницаемость чехлов, а гигроскопичность волокон способствует эффективному отводу влаги от тела во время сна. Вариант Satin Viscose отличается более гладкой, глянцевой фактурой.</li>
							<li><strong>3D Band.</h3> Характерная особенность этой ткани заключается в трехмерной структуре, образуемой волокнами. Таким образом обеспечивается эффективный воздухообмен, способствующий испарению влаги из внутренней части матраса. Благодаря этому предотвращается появление плесени и гарантируется высокая гигиеничность изделий Magniflex.</li>
						</ul>
						<h3>Натуральные.</h3> В чехлах для матрасов Magniflex также широко применяются ткани и наполнители естественного происхождения, отличающиеся экологичностью и уникальными природными свойствами. К таким материалам можно отнести следующие.</p>
						<ul style="list-style-type:disc;padding-left:20px;">
							<li><strong>Растительные волокна.</h3> Этот материал изготавливается из очищенной волокнистой древесной и бамбуковой массы. Его отличительные особенности – отличная воздухопроницаемость и влагопоглощение, благодаря которым отводятся излишки тепла и пота от тела, предотвращается появление неприятного запаха. Кроме того, бамбуковые волокна оказывают освежающее и оздоравливающее воздействие на организм человека.</li>
							<li><strong>Хлопок.</h3> В чехлах матрасов Magniflex применяется несколько вариантов тканей на основе этого мягкого воздухопроницаемого материала. Органический хлопок характеризуется максимальной натуральностью и экологичностью, 100-процентный – высокой гигроскопичностью, Percale – бархатистой фактурой, легкостью и стойкостью, а Satin – характерной гладкостью и роскошным блеском.</li>
							<li><strong>Шерсть мериноса.</h3> Этот материал для чехлов вычесывается с овец семейства меринос и характеризуется тонкостью, мягкостью, прекрасной теплорегуляцией и гипоаллергенностью – реакция на него возникает у очень небольшого количества людей. Она обеспечивает коже возможность свободно дышать во время сна.</li>
							<li><strong>Природные экстракты.</h3> Ткань, из которой изготавливаются чехлы для наших матрасов, может пропитываться вытяжками из алоэ вера и зеленого чая. Первый экстракт оказывает регенерирующий и противовоспалительный эффект на кожу, а второй препятствует размножению микроорганизмов, расслабляюще действует на организм и улучшает сон.</li>
						</ul>
			'
		),
		array(
			'address' => 'material-memoform-osobennosti-i-preimushhestva',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Материал Memoform: особенности и преимущества',
			'left_sidebar' => 'articles',
			'title' => 'Материал Memoform: особенности и преимущества',
			'description' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'keywords' => '',
			'text' => '
						<a name="mytitlepag"></a>
						<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Материал Memoform: особенности и преимущества</h2>
						<p>Во время сна одной из важных проблем является сдавливание мягких тканей встречным сопротивлением матраса, приводящее к нарушению кровообращения и иннервации. Вследствие этого проснувшийся человек часто чувствует себя разбитым и плохо отдохнувшим. Решение этой проблемы пришло из области космических технологий: для астронавтов NASA был разработан уникальный материал с эффектом памяти формы. Устанавливаемый в кресла, он эффективно распределял нагрузку на тело во время старта, предотвращая сдавливание мягких тканей, суставов и т. д. Впоследствии эта технология была доработана специалистами Magniflex в лаборатории, результатом чего стало появление материала Memoform. К числу его особенностей и преимуществ можно отнести следующие характеристики.</p>
						<h3>Микропористая структура.</h3> Материал Memoform представляет собой полимерную пену, состоящую из множества круглых или овальных ячеек, близкорасположенных друг к другу. Такая структура способствует циркуляции воздуха и тепла в толще материала, благодаря чему обеспечивается эффективный влаго-и термообмен между телом человека, чехлом и блоком матраса. Как результат – эффективное отведение излишней температуры и пота, обеспечение сухости во время сна.</p>
						<h3>Эффект памяти.</h3> Одно из главных преимуществ материала Memoform заключается в способности принимать форму человеческого тела, благодаря чему он индивидуально подстраивается под пользователя во время сна. Результатом этого являются следующие положительные эффекты:</p>
						<ul style="list-style-type:disc;padding-left:20px;">
							<li>минимальное встречное давление на мягкие ткани и сохранение нормального кровообращения, тока лимфы и иннервации, препятствующее возникновению эффекта «залеживания» в конечностях;</li>
							<li>оптимальная поддержка правильного положения скелета, препятствующая искривлению позвоночника, возникновению остеохондроза и других заболеваний опорно-двигательного аппарата;</li>
							<li>максимальное расслабление мышц и связок во время сна, сохранение эффективного метаболизма в тканях, способствующее полноценному отдыху и восстановлению сил.</li>
						</ul>
						<p>Таким образом, эффект памяти обеспечивает максимальный ортопедический и анатомический эффект, при этом совершенно не стесняя движений человека во время сна.</p>
						<h3>Быстрое восстановление.</h3> Прекрасно адаптируясь к форме человеческого тела, материал Memoform испытывает значительные пластические деформации. Однако упругая микроструктура способствует тому, что этот наполнитель быстро восстанавливает свою форму после исчезновения или снижения давления. Тем самым он сохраняет ортопедические свойства и мягкость в течение 10−12 лет даже при максимальной весовой нагрузке. Важным отличием Memoform является стойкость к температурному воздействию – жаркий воздух и тепло человеческого тела не влияют на упругость материала.</p>
						<h3>Эффективное распределение веса.</h3> При разработке материала Memoform специалисты Magniflex сделали упор на максимально эффективную поддержку человеческого тела в естественном положении. Для этого они спроектировали микроструктуру наполнителя таким образом, что ячейки, самоорганизуясь в ответ на давление, эффективно распределяют нагрузку по всему объему. Таким образом предотвращается формирование локальных зон продавливания, наполнитель сохраняет одинаковую толщину в любой точке своей площади.</p>
						<h3>Психологический эффект.</h3> Во время отдыха на матрасе с наполнителем Memoform у человека формируется комплекс приятных ощущений обволакивающей мягкости и упругости. Сон на такой поверхности отличается меньшим (на 70−80 %) количеством смен положения тела, а также полной расслабленностью. В результате человек чувствует не только физический тонус, но и психологическую бодрость, его настроение заметно улучшается, повышается работоспособность и активируются когнитивные навыки. Этому также способствует и нормальное кровоснабжение головного мозга во время сна.</p>
			'
		),
		array(
			'address' => 'pruzhinnyj-ili-bespruzhinnyj-matras',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Пружинный или беспружинный матрас?',
			'left_sidebar' => 'articles',
			'title' => 'Пружинный или беспружинный матрас?',
			'description' => '',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '
						<a name="mytitlepag"></a>
						<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Пружинный или беспружинный матрас?</h2>
						<p>На сегодняшний день в конструкции матрасов для сна используются две распространенные технологии. Первая, применяемая в изделиях Magniflex, заключается в использовании в качестве упругого элемента различных эластичных наполнителей, вторая возлагает данную функцию на блоки зависимых или независимых пружин. Чтобы сделать окончательный вывод об их эффективности, сравним матрасы обеих конструкций по ряду критериев.</p>
						<h3>Гигиеничность.</h3> В беспружинных матрасах Magniflex в качестве упругих блоков используются микропористые синтетические наполнители, ячейки которого изолированы друг от друга и от внешней среды. Из-за подобной структуры такие материалы не поглощают пыль – она оседает на его поверхности и легко устраняется пылесосом. В пружинных моделях упругий блок имеет пустоты, которые во время исчезновения давления начинают втягивать в себя воздух вместе с взвешенными в нем частицами. В результате через 2−4 года такие матрасы внутри имеют значительное количество слежавшейся пыли, в которой активно размножаются аллергенные и болезнетворные микроорганизмы, насекомые, клещи и т. д.</p>
						<h3>Влагопроницаемость.</h3> За счет микропористой структуры наполнителей влага, выделяемая человеческим телом, эффективно отводится с поверхности матраса Magniflex в толщу упругого блока, а затем через систему ячеек быстро испаряется во внешнюю среду. Таким образом поддерживается оптимальный микроклимат внутри изделия. Конструкция пружинных матрасов за счет наличия больших полостей также отличается неплохой вентиляцией. Однако влага вызывает ржавление пружин и взаимодействует с накопленной пылью, что со временем приводит к поскрипыванию и возникновению неблагоприятного микроклимата.</p>
						<h3>Электризуемость.</h3> В конструкции беспружинных матрасов Magniflex применяются наполнители, не накапливающие статического электричества. Этому также способствует отсутствие металлических деталей. Пружинные матрасы из-за наличия стальных компонентов создают статическое напряжение, которое приводит к повышенной утомляемости, раздражительности, нарушениям сна, а также вызывает оседание пыли и взвешенных в воздухе аэрозольных частиц на коже.</p>
						<h3>Реакция материала.</h3> Структура наполнителей матрасов Magniflex выполнена по принципу «тысячи пружин», когда роль упругого элемента выполняет каждая микроячейка. Тем самым реакция материала предельно локализована и незначительно выходит за площадь тела. В обычных моделях малое количество пружин и их большой (5−9 см) диаметр способствуют тому, что воздействие нагрузки затрагивает гораздо большую поверхность. В результате беспружинные и пружинные матрасы отличаются следующими эффектами:</p>
						<ul style="list-style-type:disc;padding-left:20px;">
							<li>при изменении положения тела на матрасах Magniflex воздействие оказывается только на участок, находящийся непосредственно под ним, в то время как в пружинных моделях оно распространяется на близлежащие пружины и вызывает эффект волны;</li>
							<li>на двухспальных моделях матрасов Magniflex каждый из партнеров имеет строго ограниченное индивидуальное место независимо от разницы в весе, а на обычных моделях они формируют своеобразный «общий гамак» с эффектом скатывания;</li>
							<li>в матрасах Magniflex вся поверхность изделия (включая край) пригодна для комфортного применения, в то время как в пружинных моделях – преимущественно центральная часть;</li>
							<li>более точное повторение контуров тела в беспружинных матрасах способствует эффективному распределению веса тела, полному расслаблению мускульного каркаса, а во время отдыха на обыкновенных изделиях некоторые группы мышц остаются в напряженном состоянии.</li>
						</ul>
						<p>На основе проведенного сравнения очевидно, что беспружинные матрасы Magniflex отличаются лучшей гигиеничностью, имеют более выраженный ортопедический эффект в сравнении с обычными моделями. Единственным их недостатком в сопоставлении с изделиями на пружинах является более высокая цена, однако она окупается качеством сна и продолжительностью эксплуатации.</p>
			'
		),
		array(
			'address' => 'zachem-nuzhny-ortopedicheskie-osnovaniya-dlya-matrasov',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Зачем нужны ортопедические основания для матрасов',
			'left_sidebar' => 'articles',
			'title' => 'Зачем нужны ортопедические основания для матрасов',
			'description' => '',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '
						<a name="mytitlepag"></a>
						<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Зачем нужны ортопедические основания для матрасов</h2>
						<p>Ортопедические матрасы уверенно завоевывают признание как среди профессионалов-медиков, так и среди потребителей. Они обеспечивают лучшую гигиену сна, способствуют эффективному отдыху и полному восстановлению сил. В последнее время с целью усиления благоприятного эффекта от использования таких матрасов выпускаются специальные ортопедические основания.</p>
						<h3>Ортопедическое основание</h3> для матрасов – это металлическая или деревянная рама на ножках, поперек которой закреплены ламели (узкие полоски) из березовой древесины. Их длина рассчитана таким образом, чтобы рейки слегка изгибались с целью увеличения пружинящего момента. Существуют различные конструкции ортопедических оснований:</p>
						<ul class="kakvyb_list">
							<li>сплошное основание выполняется в виде цельной, горизонтально расположенной опорной рамы, которая может устанавливаться в кровать или использоваться в качестве самостоятельной опорной поверхности;</li>
							<li>основание с изменяемой конфигурацией состоит из двух или более сегментов, которые могут изменять свой угол относительно друг друга. Таким образом можно изменять положение отдельных участков тела, что особенно актуально для людей с ограниченной подвижностью;</li>
							<li>встроенные основания выполняются в виде рамы с ламелями, встроенной в кровать и оснащенной подъемным механизмом для доступа внутрь корпуса.</li>
						</ul>
						<h2 style="font-weight:300;">Назначение ортопедических оснований</h2>
						<p>Оптимальное сочетание в ламелях жесткости и упругости позволяет достичь следующих положительных эффектов:</p>
						<ul class="kakvyb_list">
							<li>Укладка любого ортопедического матраса на такое основание позволит избежать эффекта провисания, которое значительно нивелирует его лечебные и профилактические свойства. Ламели уверенно поддерживают конструкцию снизу и принимают на себя часть нагрузки.</li>
							<li>Ортопедические основания для матрасов сами производят определенный профилактический эффект на тело человека, особенно при использовании тонких матрасов. Поперечно расположенные ламели по-разному реагируют на давление, подстраиваясь под конкретную часть туловища (шею, плечевой пояс, поясницу, таз и т. д.).</li>
							<li>Основание из березовых ламелей способствует оптимальной вентиляции матраса. Влага и тепло, отводимые от человеческого тела, проходят через толщу матраса и выводятся с обратной стороны в промежутках между рейками.</li>
						</ul>
						<p>Очевидно, что применение ортопедического основания для матрасов существенно повышает эксплуатационные характеристики этих изделий, способствует более качественному отдыху и здоровому сну.</p>
						<h2 style="font-weight:300;">Применение ортопедических оснований для матрасов</h2>
						<p>Важным моментом в отношении ортопедических матрасов является форма их применения. На сегодняшний день существуют следующие способы использования этих изделий для обеспечения качества сна:</p>
						<ul class="kakvyb_list">
							<li>оборудование ортопедическими основаниями кроватей, причем необходимо точно подобрать конструкцию и размеры этих предметов мебели. Вариантом такого применения является приобретение уже готового комплекта, что позволяет избежать утомительного поиска отдельных компонентов;</li>
							<li>использование ортопедического основания с установленным на него матрасом в качестве полноценного места для сна. При этом роль кровати выполняет сам каркас. Такой подход используется при оборудовании временного места для отдыха, например на даче, съемной квартире и т. д.</li>
						</ul>
			'
		),

		array(
			'address' => 'preimushhestva-shersti-merinosa-dlya-pokrytiya-matrasov',
			'parent_address' => 'articles',
			'parent_name' => 'Статьи',
			'name' => 'Преимущества шерсти мериноса для покрытия матрасов',
			'left_sidebar' => 'articles',
			'title' => 'Преимущества шерсти мериноса для покрытия матрасов',
			'description' => '',
			'keywords' => '',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '
						<a name="mytitlepag"></a>
						<h2 name="hnb_mytitlepag" class="hnb_mytitlepag">Преимущества шерсти мериноса для покрытия матрасов</h2>
						<p>Специалисты Magniflex используют весь потенциал природного сырья для обеспечения максимального комфорта пользователей матрасов. Среди натуральных материалов, используемых в изготовлении чехлов для матрасов Magniflex, применяется шерсть, вычесанная с холки овец семейства меринос, которые разводятся в Австралии и Новой Зеландии. Эти уникальные волокна природного происхождения обладают рядом качеств, которые делают их незаменимыми при изготовлении чехлов для матрасов Magniflex.</p>
						<h3>Мягкость.</h3> Шерсть мериноса является наиболее тонким (14−23 микрон) видом овечьего руна, благодаря чему на ощупь ощущается как исключительно нежный и легкий материал. Благодаря этому она формирует у отдыхающего человека комплекс специфических эмоциональных реакций, способствующих расслаблению и полноценному отдыху.</p>
						<h3>Оптимальная теплорегуляция.</h3> Тонкие волокна шерсти мериноса образуют пористую микроструктуру, которая обладает прекрасными теплоизолирующими свойствами. Это способствует тому, что тело человека лучше сохраняет тепло в зимнее время года. В жаркий сезон излишки тепла отводятся за счет эффективной вентиляции – пот свободно проходит через микропористую структуру и впитывается в сами волокна. Такие свойства особенно хорошо сказываются на детском организме, терморегуляция которого еще недостаточна развита. Взрослым людям чехлы из шерсти мериноса также дарят здоровый и полноценный сон.</p>
						<h3>Эффективная вентиляция.</h3> Микропористая, тонкая структура шерсти мериноса способствует быстрому отведению излишков влаги от тела человека. При этом волокна впитывают только пот, находящийся в парообразном состоянии, а капли проходят через сложную систему микроскопических ходов, эффективно испаряясь во внешнюю среду. Благодаря таким свойствам шерсть мериноса хуже впитывает запахи, для их удаления достаточно обычного проветривания.</p>
						<h3>Гипоаллергенность.</h3> Благодаря высокому качеству выделки и тонкости волокон шерсть мериноса оказывает минимальное воздействие на кожу. В связи с этим организм подавляющего большинства людей не формирует ответной реакции на данный материал, тем самым предотвращается развитие аллергических симптомов – зуда, чихания, рези в глазах и т. д.</p>
						<h3>Гигиеничность.</h3> Отличная вентиляция и терморегуляция шерсти мериноса способствуют тому, что в структуре данного материала не задерживаются остатки пота и растворенные в нем органические вещества. Это предотвращает формирование среды, благоприятной для развития бактерий и микроорганизмов-сапрофагов (клещей, грибков и т. д.), которые могут вызвать аллергическую реакцию или стать причиной развития различных заболеваний.</p>
						<h3>Лечебные свойства.</h3> В состав волокон шерсти овец мериносов входит ланолин – шерстяной воск. Это вещество, которое часто используется в противовоспалительных и антиаллергенных препаратах, воздействует на рецепторы кожи, запуская регенерационные процессы на ее поверхности и ускоряя заживление царапин, порезов и других повреждений. А проникая через кожный покров вглубь тканей, ланолин способствует снижению болевых ощущений в пояснице при ревматизме и радикулите.</p>
						<h3>Электронейтральность.</h3> Во время отдыха на матрасах с чехлами из шерсти мериноса тело человека не вступает в электростатическое взаимодействие с волокнами материала. В результате и ткань, и организм не приобретают заряда, остаются нейтральными. Благодаря этому предотвращается воздействие статического электричества на нервную систему, способное привести к головным болям, бессоннице и другим негативным последствиям. Кроме того, нейтрально заряженное тело не притягивает частицы пыли и других взвешенных веществ. В результате кожа остается чистой, а организм не формирует аллергического ответа на раздражители.</p>
			'
		),
		array(
			'address' => 'obmen-i-vozvrat_old',
			'parent_address' => 'pokupatelyam',
			'parent_name' => 'Покупателям',
			'name' => 'Обмен и Возврат',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Обмен и возврат матрасов и подушек Magniflex | Магнифлекс',
			'description' => 'Правила обмена и возврата матрасов и подушек Magniflex в вакуумной упаковке',
			'keywords' => 'вернуть матрас, обменять матрас',
			'text' => '
<h2 class="hnb_mytitlepag">Обмен и Возврат</h2>
<p>
<em>Регулируется Законом Российской Федерации "О защите прав потребителей". Статьи 18, 19, 21, 22, 25, 26.</em>
 <br><br>
<strong>Возврат и обмен товара НАДЛЕЖАЩЕГО КАЧЕСТВА</h3><br>
Покупатель вправе обменять или возвратить товар (ортопедический матрас, подушку или основание) в том случае, если он не подошел по форме, габаритам, фасону, расцветке или размеру в течение четырнадцати дней, не считая дня его покупки. <br>
Товар не должен был быть в употреблении, должны быть сохранены его товарный вид, потребительские свойства, пломбы, фабричные ярлыки. Это особенно важно по отношению к товарам в вакуумной упаковке. Если упаковка нарушена (была вскрыта), мы имеем полное право не принимать товар обратно! Поэтому внимательно всё проверьте, прежде чем вскрыть упаковку матраса.<br>
Если у Вас не сохранились какие-то документы о покупки матраса - позвоните нам. Мы решим эту проблему, так как у каждого матраса имеется индивидуальный уникальный код, по которому можно восстановить все данные.
 <br><br>
<strong>Возврат и обмен товара НЕНАДЛЕЖАЩЕГО КАЧЕСТВА</h3><br>
При обнаружении в товаре недостатков, если они не были оговорены продавцом, покупатель вправе: потребовать замены на товар этой же марки или другой с перерасчетом цены, либо соразмерного уменьшения цены на приобретенный товар, либо отказаться от товара и возвратить уплаченную сумму.
</p>
<br />
<img alt="magniflex - ОБМЕН И ВОЗВРАТ" src="/img/obmen.jpg">
			'
		),
		array(
			'address' => 'certificates',
			'parent_address' => 'pokupatelyam',
			'parent_name' => 'Покупателям',
			'name' => 'Сертификаты на матрасы и подушки',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image'=>'/img/breadcrumbs_riposook.jpg',
			'text' => '
<p>
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
выдается сроком на 1 год.
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
  <h3>Обязательная Сертификация ГОСТ&nbsp;Р</h3> свидетельствует о безопасности продукции, услуг и работ и подтверждается знаком качества.</p>
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
		<td><img src="/img/magniflex-sertifikat-1.jpg" alt="Сертификат Oeko-Tex стандарт 100" ></td>
		<td>
Oeko-Tex стандарт 100 – Международная Ассоциация независимых лабораторий (в состав Ассоциации входят 17 исследовательских институтов в 40 странах мира), которая проводит экспертную оценку всех видов текстильных изделий, на предмет отсутствия в изделии вредных для организма человека и окружающей среды веществ. Тестируемые образцы текстиля исследуются по многим параметрам, одними из которых являются: соответствие норме рН; содержание формальдегидов; наличие тяжелых металлов; наличие хлорсодержащих носителей и защитных веществ вредных для организма человека. Ярлык Oeko-Tex на изделии, информирует потребителя о том, что данные материалы прошли комплексное экологическое тестирование в лабораторных условиях, не содержат вредных для организма человека веществ и соответствуют европейским нормам безопасности.
		</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-2.jpg" alt="Сертификат LGA (Германия)" ></td>
		<td><b>LGA (Германия)</b> <br />
Магнифлекс использует только самые лучшие материалы - факт, подтвержденный сертификатом LGA, а вся продукция имеет удостоверение Oeko-Tex, гарантирующие отсутствие аллергенов и веществ, которые могут быть вредны для Вашего здоровья или окружающей среды.
<br /><br />
Сертифкат LGA означает, что продукция прошла комплексные испытания в европейской лаборатории под эгидой независимого аудитора TUV Reinland LGA Products (Германия). <br />
Группа компаний LGA - ведущая европейская корпорация, занимающаяся проверкой соответствия качества продукции международным стандартам. Головное подразделение, расположенное в городе Нюрнберг, объединяет более 30 офисов по всей Германии и за ее пределами. <br />
LGA работает абсолютно независимо и не сотрудничает ни с частными, ни с юридическими лицами. Сертификат LGA много лет является ориентиром для европейского покупателя, так как гарантирует полное соответствие продукта высочайшим международным стандартам качества. Корпорация тщательно отбирает наиболее достойную продукцию, которая пройдет все многочисленные анализы и испытания, выполняемые только в лучших аккредитованных европейских лабораториях высококвалифицированными профессионалами.
</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-5.jpg" alt="Сертификат AJA Registrars, UKAS" ></td>
		<td>
<b>Стандартизация AJA, UKAS</b> <br>
Вся продукция соответствуют высочайшим международным стандартам качества BS EN ISO 9001:2008, проверено и одобрено UKAS, и AJA.
<br /><br />
AJA Registrars – независимая международная организация сертификации, аккредитованная UKAS. Испытательные и калибровочные лаборатории AJA проводят комплексный и всесторонний мониторинг менеджмента качества предприятий, фабрик, компаний в большинстве сферах производства. Помимо мониторинга менеджмента качества, AJA Registrars проводит комплексную проверку компаний на соответствие европейским стандартам экологии, безопасности производства, охраны окружающей среды.
</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-6.jpg" alt="Сертификат UKAS" ></td>
		<td>
UKAS – это Сервис Аккредитации Объединенного Королевства. Аккредитация в этой системе означает, что организация, получившая этот сертификат, была подвержена анализу в соответствии с международными стандартами и показала свою техническую компетентность и высокие показатели по эксплуатационным качествам. Система менеджмента качества фабрики Magniflex получила подтверждение и экспертную оценку независимой международной организации AJA аккредитованной UKAS.
		</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-7.jpg" alt="Сертификат Medical Device" ></td>
		<td><b>Медицинское изделие</b> <br>
Ортопедические матрасы и подушки признаны медицинскими изделиями в Европе и рекомендованы к применению. Мы имеем ПОЛНОЕ ПРАВО писать на своих товаров слово "ОРТОПЕДИЧЕСКИЕ".
<br /> <br />
Сертификат Medical Device позволяет покупателям с ограниченными возможностями и инвалидам получать возмещение за приобретение продукции от гос. органов в рамках законодательств страны обращения.
</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-8.jpg" alt="Сертификат FIRA UK – Великобритания" ></td>
		<td>
		FIRA UK – Великобритания. Организация проводит широкий спектр мебельных тестов, включающий тестирование воспламеняемости, структуры мебельных материалов и тестирование поверхности изделий.

		</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-9.jpg" alt="Сертификат Университета Флоренции Fiorentina Studiorum Universitas" ></td>
		<td>
		Университет Флоренции Fiorentina Studiorum Universitas Сертификат подтверждает использование результатов исследований на предмет эрогономики в Университете Флоренции. Университет был основан в 1321 году и состоит из 12 факультетов.

		</td>
	</tr>
</tbody></table>

			'
		),
		array(
			'address' => 'rostest',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'Ростест',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
<h3>СЕРТИФИКАТЫ СООТВЕТСТВИЯ ГОСТ Р</h3>
<p>
выдается сроком на 1 год. Скачать актуальную копию можно по ссылке  <a href="/upload/rst.rar">Сертификат ГОСТ Р</a>.
</p>
<div class="sertificates_simple">
  <h6>СЕРТИФИКАТ СООТВЕТСТВИЯ <br>МАТРАСЫ</h6>
  <img src="/img/sert-mat-1.jpg"class="doc_img" alt="Сертификат соответствия на матрасыMagniflex">
</div>
<div class="sertificates_simple">
  <h6>СЕРТИФИКАТ СООТВЕТСТВИЯ <br>ПОДУШКИ</h6>
  <img src="/img/sert-mat-2.jpg" class="doc_img"  alt="Сертификат соответствия на подушки Magniflex">
</div>
<div class="sertificates_simple">
  <h3>Обязательная Сертификация ГОСТ&nbsp;Р</h3> свидетельствует о безопасности продукции, услуг и работ и подтверждается знаком качества.</p>
  <img src="/img/sert-rostest.jpg" style="width:80px;height:63px; display: block;" alt="Сертификат ГОСТР на подушки и матрасы">
</div>
			'
		),
		array(
			'address' => 'AJA',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'AJA',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
<div class="outlast_wrapper">
<img  src="/img/ISO9001.jpg" alt="AJA Registrars – независимая международная организация сертификации, аккредитованная UKAS">
<div class="outlast_wrapper_txt">
<p>
	AJA Registrars – независимая международная организация сертификации, аккредитованная UKAS. Испытательные и калибровочные лаборатории AJA проводят комплексный и всесторонний мониторинг менеджмента качества предприятий, фабрик, компаний в большинстве сферах производства. Помимо мониторинга менеджмента качества, AJA Registrars проводит комплексную проверку компаний на соответствие европейским стандартам экологии, безопасности производства, охраны окружающей среды.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'UKAS',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'UKAS',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
			<div class="outlast_wrapper">
<img class="outdx_left" src="/img/magniflex-sertifikat-6.jpg" alt="UKAS – Сервис Аккредитации Объединенного Королевства">
<div class="outlast_wrapper_txt">
<p>
	UKAS – это Сервис Аккредитации Объединенного Королевства. Аккредитация в этой системе означает, что организация, получившая этот сертификат, была подвержена анализу в соответствии с международными стандартами и показала свою техническую компетентность и высокие показатели по эксплуатационным качествам.
	Система менеджмента качества фабрики Magniflex получила подтверждение и экспертную оценку независимой международной организации AJA аккредитованной UKAS.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'ICEA',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'ICEA',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
			<div class="outlast_wrapper">

<img  src="/img/icea.png" alt="Сертификат ICEA/AIAB (Италия)">
<div class="outlast_wrapper_txt">
<p>
	ICEA / AIAB (Италия) - ICEA (Институт экололгической сертификации) совместно с AIAB (Итальянская ассоциация органического сельского хозяйства) разработали стандарт органической косметики и предоставляют услуги по сертификации органических и безвредных для окружающей среды продуктов.
<br>
Требования, предъявляемые ICEA к компаниям для получения сертификата:
<br>
- продукция должна содержать не менее 10% сертифицированных природных растительных и животных ингредиентов;
<br>
- 95% всех входящих в состав сельскохозяйственных ингредиентов должны быть выращены органическим способом.
<br>
- продукция не должна содержать запрещенные вредные вещества, радиоактивные вещества, алкоголь, продукты нефтепереработки, генетически измененные компоненты, синтетические отдушки, красители и запрещенные консерванты;
<br>
- продукция не тестируется на животных.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'CFR',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'CFR',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
			<div class="outlast_wrapper">
<img class="outdx_left11" src="/img/cfr.png" alt="Сертификат CFR">
<div class="outlast_wrapper_txt">
<p>
Государственный стандарт США на воспламеняемость матрасов в условиях CFR 16 часть 1633 ”Стандарт воспламеняемости (открытого пламени) матрасов”.

Стандарт используется для оценки пожарной прогрессии и выхода энергии в матрас при воздействии источника воспламенения приближенных к горящей кровати одежды. 16 CFR часть 1633-Федеральный стандарт в США и все производимые или импортируемые матрасы должны соответствовать этому стандарту.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'FIRA',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'FIRA',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
			<div class="outlast_wrapper">
<img class="outdx_left12"  src="/img/magniflex-sertifikat-8.jpg" alt="Сертификат FIRA">
<div class="outlast_wrapper_txt">
<p>
FIRA UK – Великобритания. Организация проводит широкий спектр мебельных тестов, включающий тестирование воспламеняемости, структуры мебельных материалов и тестирование поверхности изделий.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'Oeko-Tex',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'Oeko-Tex',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
			<div class="outlast_wrapper">
<img  src="/img/magniflex-sertifikat-1.jpg" alt="Сертификат Oeko-Tex">
<div class="outlast_wrapper_txt">
<p>
Oeko-Tex стандарт 100 – Международная Ассоциация независимых лабораторий (в состав Ассоциации входят 17 исследовательских институтов в 40 странах мира), которая проводит экспертную оценку всех видов текстильных изделий, на предмет отсутствия в изделии вредных для организма человека и окружающей среды веществ. Тестируемые образцы текстиля исследуются по многим параметрам, одними из которых являются: соответствие норме рН; содержание формальдегидов; наличие тяжелых металлов; наличие хлорсодержащих носителей и защитных веществ вредных для организма человека. Ярлык Oeko-Tex на изделии, информирует потребителя о том, что данные материалы прошли комплексное экологическое тестирование в лабораторных условиях, не содержат вредных для организма человека веществ и соответствуют европейским нормам безопасности.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'LGA',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'LGA',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
			<div class="outlast_wrapper">
<img  src="/img/LGA.png" alt="Сертификат LGA">
<div class="outlast_wrapper_txt">
<p>
Сертифкат LGA означает, что продукция прошла комплексные испытания в европейской лаборатории под эгидой независимого аудитора TUV Reinland LGA Products (Германия).
Группа компаний LGA - ведущая европейская корпорация, занимающаяся проверкой соответствия качества продукции международным стандартам. Головное подразделение, расположенное в городе Нюрнберг, объединяет более 30 офисов по всей Германии и за ее пределами.
 <br><br>
LGA работает абсолютно независимо и не сотрудничает ни с частными, ни с юридическими лицами. Сертификат LGA много лет является ориентиром для европейского покупателя, так как гарантирует полное соответствие продукта высочайшим международным стандартам качества. Корпорация тщательно отбирает наиболее достойную продукцию, которая пройдет все многочисленные анализы и испытания, выполняемые только в лучших аккредитованных европейских лабораториях высококвалифицированными профессионалами.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'GOTS',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'GOTS',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
			<div class="outlast_wrapper">

<img class="outdx_left12" src="/img/GOTS.png" alt="Сертификат GOTS">
<div class="outlast_wrapper_txt">
<p>
Сертификат GOTS является мировым стандартом по обработке текстиля из органически выращенных натуральных волокон. Сертификация определяет требования к окружающей среде по всей цепочке текстильного производства, и социальные критерии.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'CE',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'CE - Европейское соответствие',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
			<div class="outlast_wrapper">
<img  src="/img/CE-logo-vector.png" alt="Сертификат CE - Европейское соответствие">
<div class="outlast_wrapper_txt">
<p>
Conformité Européenne — европейское соответствие) — специальный знак, наносимый на изделие, который удостоверяет, что изделие соответствует основным требованиям директив ЕС и гармонизированным стандартам Европейского Союза, а также то, что продукт прошёл процедуру оценки соответствия директивам. Маркировка CE указывает на то, что изделие не является вредным (опасным) для здоровья его потребителей, а также безвредно для окружающей среды.
Знак СЕ является единственным знаком в странах Европейского Союза, подтверждающим соответствие продукции европейским стандартам безопасности для человека, имущества и окружающей среды.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'medecinskie-isdeliya',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'Медицинское изделие',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '

			<div class="outlast_wrapper">
<img class="outdx_left12" src="/img/magniflex-sertifikat-7.jpg" alt="Сертификат Медицинское изделие">
<div class="outlast_wrapper_txt">
<p>
Ортопедические матрасы и подушки признаны медицинскими изделиями в Европе и рекомендованы к применению. Мы имеем ПОЛНОЕ ПРАВО писать на своих товаров слово "ОРТОПЕДИЧЕСКИЕ".
Сертификат Medical Device позволяет покупателям с ограниченными возможностями и инвалидам получать возмещение за приобретение продукции от гос. органов в рамках законодательств страны обращения.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'rekomendaciyi-traort',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'Рекомендация ЦНИИ Травматологии и Ортопедиии',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
<p>
<b>ЦЕНТРАЛЬНЫЙ НИИ ТРАВМАТОЛОГИИ И ОРТОПЕДИИ им. Н.Н. ПРИОРОВА</b><br>
выдал Заключение за номером 322 на <b>основании испытаний и апробации</b> ортопедических матрасов Magniflex, проведенных  в отделении вертебральной паталогии, о том, что продукция может быть использована в стационарах различного профиля.
<br><br>
<img src="/img/RU-ortopedicheskie-matrasy3.jpg" alt="Заключение НИИ ТРАВМАТОЛОГИИ И ОРТОПЕДИИ им. Н.Н. ПРИОРОВА"><br>
</p>
			'
		),
		array(
			'address' => 'ministerstvo-rf',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'Министерство здравоохранения РФ',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
<p> <b>МИНИСТЕРСТВО ЗДРАВООХРАНЕНИЯ И МЕДИЦИНСКОЙ ПРОМЫШЛЕННОСТИ РФ</b><br>
<b>признало матрасы и подушки Magniflex ОРТОПЕДИЧЕСКИМИ</b>. Выдано соответствующее регистрационное удостоверение МЗМПР № 96/624.
<br>
<img src="/img/RU-ortopedicheskie-matrasy2.jpg" alt="выдержка из приказа Министерства Здравоохранения"><br>
</p>
			'
		),
		array(
			'address' => 'sanitar-epilogichskiy',
			'parent_address' => 'pokupatelyam/certificates',
			'parent_name' => 'Сертификаты',
			'name' => 'Санитарно-эпидемологический',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
<img src="/img/SE-ortopedicheskie-matrasy.jpg" alt="сертификаты на подушки магнифлекс">
<p>
Санитарно-эпидемиологическое заключение (называемое еще как гигиенический сертификат, заключение СЭС, гигиеническое заключение, санитарно-гигиеническое заключение, санэпидзаключение или гигиена) - документ, который подтверждает разрешение органами Министерства Здравоохранения и социального развития РФ (называемое еще как Минздрав или Госсанэпиднадзор) производства или ввоза продукции, соответствующей установленным требованиям, гигиеническим нормам и санитарным правилам (ГН и СанПин), а также служит официальным подтверждением безопасности продукции для здоровья человека
</p>
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
			'
		),
		
		array(
			'address' => 'adresa-magazinov_old',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Адреса Магазинов',
			'left_sidebar' => 'o-magniflex2',
			'title' => 'Адреса магазинов Magniflex | Магнифлекс',
			'description' => 'Адреса, график работ, ассортимент магазинов, торгующих продукцией Магнифлекс',
			'keywords' => 'magniflex магазин, магнифлекс магазин',
			'text' => '
<h2 class="hnb_mytitlepag">Адреса Магазинов</h2>
<p>Выберите магазин Magniflex (Магнифекс):<br /><br />
<a href="/o-magniflex/internet-magazin-matrasov/">Интернет-Магазин</a><br />
<a href="/o-magniflex/show-room-matrasov/">Шоу-рум - центральный магазин в Москве</a><br />
<a href="/o-magniflex/moscow/">Другие магазины Москвы</a><br />
<a href="/o-magniflex/russia/">Представительства в России</a><br />
<a href="/o-magniflex/magniflex-mattresses-world/">Страны ближнего и дальнего зарубежья</a><br />
</p>
			'
		),
		
				
		array(
			'address' => 'orthosleep-sindika',
			'parent_address' => 'o-magniflex/moscow/predstavleniya-kolekcii',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Салон Orthosleep в ТЦ "Синдика"',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Салон Orthosleep в ТЦ "Синдика"',
			'description' => 'Адрес Салон Orthosleep в ТЦ "Синдика", ассортимен, график работы в Москве, в которых можно купить ортопедические матрасы и подушки Магнифлекс',
			'keywords' => 'магазин Orthosleep magniflex москва Синдика',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
						<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">
						<h3 class="hnb_mytitlepag">Салон Orthosleep в ТЦ "Синдика"</h3>
						<script>
							var zoomIndex = 13;
							var coordLatitude = 55.807110;
							var coordLongitude = 37.380798;
						</script>
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
						<br />
						<br />
						<table class="table_one_shop">
							<thead>
								<tr>
									<th>Адрес</th>
									<th>Часы работы</th>
									<th>Контакты</th>
									<th>Экспозиция</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>Салон Orthosleep в ТЦ "Синдика"</h3><br />
									г. Москва, МКАД, 65-й километр, <br />м. Строгино, Второй этаж, атриум, подиум Osleep</td>
									<td>ежедневно 10:00 – 21:00</td>
									<td class="contacts"><i class="fa fa-phone square"></i><a>+7 (495) 558-61-63</a><br><i class="fa fa-envelope square"></i><a href="mailto:info@osleep.ru">info@osleep.ru</a><br><i class="fa fa-globe square"></i><a href="https://www.osleep.ru" target="_blank">www.osleep.ru</a></td>
									<td><p>На экспозиции: <br>Merino Merinos 80x200<br> Pensiero 7 80x200 <br> Rest 9 80x200<br> New Comfort Plus 10 80x200 <br>Stile 7 40x60</p></td>
								</tr>
							</tbody>
						</table>
						<br />
						<div class="facad_photo">
							<img class="img-responsive img_2_row" src="/img/shops/sindika_01.jpg" alt="Салон Orthosleep в ТЦ Синдика" />
							<img class="img-responsive img_2_row" src="/img/shops/sindika_02.jpg" alt="Салон Orthosleep в ТЦ Синдика" />
							<img class="img-responsive img_2_row" src="/img/shops/sindika_03.jpg" alt="Салон Orthosleep в ТЦ Синдика" />
							<img class="img-responsive img_2_row" src="/img/shops/sindika_04.jpg" alt="Салон Orthosleep в ТЦ Синдика" />
						</div>
					</div>
				</div>
				<div style="clear: both;"></div>
			'
		),
		array(
			'address' => 'russia-old',
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
			<script>
				var zoomIndex = 3;
				var coordLatitude = 57.51683274;
				var coordLongitude = 57.39184972;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>
			<div class="hnb_contarea">
	<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
	</div>
	<div class="hnb_conttextright">
		<h2 class="hnb_mytitlepag">Magniflex в России</h2>
		<div id="map"></div>
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			 <span>Официальные дилеры и представители:</span>
			 <span>
<select method="post" class="hnb_changtaver" name="items" onchange="top.location=this.value">
                       <option value="0">Выберите Ваш город
                        </option><option value="/o-magniflex/moscow/">Москва
						</option><option value="/o-magniflex/russia/moskovskaya-oblast/">Московская область
                        </option><option value="/o-magniflex/russia/sankt-peterburg/">Санкт-Петербург
						</option><option value="/o-magniflex/russia/abakan-khakasiya/">Абакан2, респ. Хакасия
						</option><option value="/o-magniflex/russia/aleksin-tulskaya-obl/">Алексин, Тульская обл.
						</option><option value="/o-magniflex/russia/arkhangelsk/">Архангельск
						</option><option value="/o-magniflex/russia/belgorod/">Белгород
						</option><option value="/o-magniflex/russia/bratsk/">Братск
						</option><option value="/o-magniflex/russia/balakovo-saratovskaya-obl/">Балаково, Саратовская обл
                        </option><option value="/o-magniflex/russia/vladikavkaz/">Владикавказ
                        </option><option value="/o-magniflex/russia/vladimir/">Владимир
						</option><option value="/o-magniflex/russia/volgograd/">Волгоград
						</option><option value="/o-magniflex/russia/voronezh/">Воронеж
						</option><option value="/o-magniflex/russia/groznyy/">Грозный
						</option><option value="/o-magniflex/russia/ekaterinburg/">Екатеринбург
                        </option><option value="/o-magniflex/russia/kirov/">Киров
                        </option><option value="/o-magniflex/russia/kabardino-balkariya/">Кабардино-Балкария
						</option><option value="/o-magniflex/russia/kaliningrad/">Калининград
						</option><option value="/o-magniflex/russia/krasnodar/">Краснодар
						</option><option value="/o-magniflex/russia/krasnoyarsk/">Красноярск
						</option><option value="/o-magniflex/russia/krim/">Крым
						</option><option value="/o-magniflex/russia/kursk/">Курск
						</option><option value="/o-magniflex/russia/lipetsk/">Липецк
						</option><option value="/o-magniflex/russia/nizhniy-novgorod/">Нижний Новгород
						</option><option value="/o-magniflex/russia/novosibirsk/">Новосибирск
                        </option><option value="/o-magniflex/russia/nizhniy-tagil/">Нижний Тагил
						</option><option value="/o-magniflex/russia/mirnuy/">Мирный
                        </option><option value="/o-magniflex/russia/orenburg/">Оренбург
						</option><option value="/o-magniflex/russia/perm/">Пермь
						</option><option value="/o-magniflex/russia/penza/">Пенза
						</option><option value="/o-magniflex/russia/rostov/">Ростов
						</option><option value="/o-magniflex/russia/rostov-na-donu/">Ростов-на-Дону
						</option><option value="/o-magniflex/russia/sochi/">Сочи
						</option><option value="/o-magniflex/russia/staryy-oskol/">Старый Оскол
						</option><option value="/o-magniflex/russia/syktyvkar/">Сыктывкар
                        </option><option value="/o-magniflex/russia/tambov/">Тамбов
                        </option><option value="/o-magniflex/russia/tver/">Тверь
                        </option><option value="/o-magniflex/russia/tomsk/">Томск
						</option><option value="/o-magniflex/russia/tula/">Тула
						</option><option value="/o-magniflex/russia/tyumen/">Тюмень
						</option><option value="/o-magniflex/russia/ulyanovsk/">Ульяновск
                        </option><option value="/o-magniflex/russia/ufa/">Уфа
                        </option><option value="/o-magniflex/russia/khabarovsk/">Хабаровск
                        </option><option value="/o-magniflex/russia/chelyabinsk/">Челябинск
						</option><option value="/o-magniflex/russia/cherepovic/">Череповец
						</option><option value="/o-magniflex/russia/yuzhno-sakhalinsk/">Южно-Сахалинск
						</option><option value="/o-magniflex/russia/yalta/">Ялта
						</option>
</select>
			 </span><br />
 <br />
		</p>
		<div class="hnb_altawer">
			<div class="hnb_altawerlft">
				<div>
					<span>А</span>
					<a href="/o-magniflex/russia/abakan-khakasiya/">Абакан</a><br />
					<a href="/o-magniflex/russia/aleksin-tulskaya-obl/">Алексин</a><br />
					<a href="/o-magniflex/russia/arkhangelsk/">Архангельск</a><br />
				</div>
				<div>
					<span>Б</span>
					<a href="/o-magniflex/russia/balakovo-saratovskaya-obl/">Балаково</a><br />
					<a href="/o-magniflex/russia/belgorod/">Белгород</a><br />
					<a href="/o-magniflex/russia/bratsk/">Братск</a><br />

				</div>
				<div>
					<span>В</span>
					<a href="/o-magniflex/russia/vladikavkaz/">Владикавказ</a><br />
					<a href="/o-magniflex/russia/vladimir/">Владимир</a><br />
					<a href="/o-magniflex/russia/volgograd/">Волгоград</a><br />
					<a href="/o-magniflex/russia/voronezh/">Воронеж</a><br />
				</div>
				<div>
					<span>Г</span>
					<a href="/o-magniflex/russia/groznyy/">Грозный</a><br />

				</div>
				<div>
					<span>Е</span>
					<a href="/o-magniflex/russia/ekaterinburg/">Екатеринбруг</a><br />

				</div>
				<div>
					<span>К</span>
					<a href="/o-magniflex/russia/kabardino-balkariya/">Кабардино-Балкария</a><br />
					<a href="/o-magniflex/russia/kaliningrad/">Калининград</a><br />
					<a href="/o-magniflex/russia/kirov/">Киров</a><br />
					<a href="/o-magniflex/russia/krasnodar/">Краснодар</a><br />
					<a href="/o-magniflex/russia/krasnoyarsk/">Красноярск</a><br />
					<a href="/o-magniflex/russia/krim/">Крым</a><br />
					<a href="/o-magniflex/russia/kemerova/">Кемерово</a><br />
					<a href="/o-magniflex/russia/kursk/">Курск</a><br />
				</div>
				<div>
					<span>Л</span>
					<a href="/o-magniflex/russia/lipetsk/">Липецк</a><br />
				</div>
				<div>
					<span>Н</span>
					<a href="/o-magniflex/russia/nizhniy-novgorod/">Нижний Новгород</a><br />
					<a href="/o-magniflex/russia/nizhniy-tagil/">Нижний Тагил</a><br />
					<a href="/o-magniflex/russia/novosibirsk/">Новосибирск</a><br />

				</div>
				<div>
					<span>М</span>
					<a href="/o-magniflex/russia/mirnuy/">Мирный</a><br />
					<a href="/o-magniflex/moscow/">Москва</a><br />
					<a href="/o-magniflex/russia/moskovskaya-oblast/">Московская область</a><br />
				</div>
			</div>
			<div class="hnb_altawerrig">
				<div>
					<span>О</span>
					<a href="/o-magniflex/russia/orenburg/">Оренбург</a><br />

				</div>
				<div>
					<span>П</span>
					<a href="/o-magniflex/russia/perm/">Пермь</a><br />
					<a href="/o-magniflex/russia/penza/">Пенза</a><br />

				</div>
				<div>
					<span>Р</span>
					<a href="/o-magniflex/russia/rostov/">Ростов</a><br />
					<a href="/o-magniflex/russia/rostov-na-donu/">Ростов-на-Дону</a><br />

				</div>
				<div>
					<span>С</span>
					<a href="/o-magniflex/russia/sankt-peterburg/">Санкт-Петербург</a><br />
					<a href="/o-magniflex/russia/balakovo-saratovskaya-obl/">Саратов</a><br />
					<a href="/o-magniflex/russia/balakovo-saratovskaya-obl/">Саратовская обл.</a><br />
					<a href="/o-magniflex/russia/sochi/">Сочи</a><br />
					<a href="/o-magniflex/russia/staryy-oskol/">Старый Оскол</a><br />
					<a href="/o-magniflex/russia/syktyvkar/">Сыктывкар</a><br />
				</div>
				<div>
					<span>Т</span>
					<a href="/o-magniflex/russia/tambov/">Тамбов</a><br />
					<a href="/o-magniflex/russia/tver/">Тверь</a><br />
					<a href="/o-magniflex/russia/tomsk/">Томск</a><br />
					<a href="/o-magniflex/russia/tula/">Тула</a><br />
					<a href="/o-magniflex/russia/aleksin-tulskaya-obl/">Тульская обл.</a><br />
					<a href="/o-magniflex/russia/tyumen/">Тюмень</a><br />
				</div>
				<div>
					<span>У</span>
					<a href="/o-magniflex/russia/ulyanovsk/">Ульяновск</a><br />
					<a href="/o-magniflex/russia/ufa/">Уфа</a><br />
				</div>
				<div>
					<span>Х</span>
					<a href="/o-magniflex/russia/khabarovsk/">Хабаровск</a><br />

				</div>

				<div>
					<span>Ч</span>
					<a href="/o-magniflex/russia/chelyabinsk/">Челябинск</a><br />
					<a href="/o-magniflex/russia/cherepovic/">Череповец</a><br />
				</div>
				<div>
					<span>Ю</span>
					<a href="/o-magniflex/russia/yuzhno-sakhalinsk/">Южно-Сахалинск</a><br />
				</div>
				<div>
					<span>Я</span>
					<a href="/o-magniflex/russia/yalta/">Ялта</a><br />
				</div>
			</div>
		</div>
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
/* GOOGLE MAPS  */
	array(
			'address' => 'russia-google',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Россия',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Магазины Magniflex в России | Магнифлекс',
			'description' => 'Адреса магазинов, ассортимен, график работы в России, в которых можно купить ортопедические матрасы и подушки Магнифлекс',
			'keywords' => 'magniflex магазин, магнифлекс магазин',
			'text' => '
			<style>
				#google-map {
					width: 100%; height: 370px; padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 3;
           			var google_FirstCenter = 49.070610;
	                var google_SecondCenter = 81.382522;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
	<div class="hnb_textaligcenter">
		<h2 class="hnb_mytitlepag">Magniflex в России</h2>
		<div id="google-map"></div>

	<div style="max-width: 1200px">
		<h3 class="city-shop-title">Москва</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Бродников переулок, д.10, к.2</span>
				<span class="span ng-binding"><a href="/o-magniflex/show-room-matrasov/"></a><b>ФИРМЕННЫЙ МАГАЗИН!</b><br>Шоу-рум Magniflex</span>
				<span class="span ng-binding">пн-пт: 9:30 - 21:00
				<br>сб-вс: 10:00 - 21:00</span>
				<span class="span ng-binding">+7 (495) 989-11-32</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Профсоюзная, д. 45, ТЦ «Царское село», 2 этаж</span>
				<span class="span ng-binding">"Италмания"</span>
				<span class="span ng-binding">пн-сб: 10:00 - 20:00
<br>вс: 10:00 - 18:00</span>
				<span class="span ng-binding">+7 (495) 718-73-88
<br>+7 (495) 718-76-31</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Ленинская Слабода, д. 26, корп."А", Бизнес-центр "Омега-2", офис №451, 4 этаж.</span>
				<span class="span ng-binding">Салон "Алло! Матрас!"</span>
				<span class="span ng-binding">с 10 до 19-30<br>ежедневно</span>
				<span class="span ng-binding">+7(495) 278-02-40<br>8-800-555-48-25</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Анадырский проезд, дом 17/1, к. 1, помещение 1, 1 этаж</span>
				<span class="span ng-binding">"Матрасы и Аксессуары"</span>
				<span class="span ng-binding">пн-вс: 10:00 - 19:00</span>
				<span class="span ng-binding">8 (499) 184-38-81, <br>8 (903) 762-80-80</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Люблинская 151, Деловой центр "Марьино"</span>
				<span class="span ng-binding">"Матрас-на-заказ"</span>
				<span class="span ng-binding">пн-пт: 11:00 - 19:00<br> сб-вс: выходные </span>
				<span class="span ng-binding">+7(495) 640-62-35<br>+7 (495)220-44-95<br>доб. 193</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Бульвар Рокосовского, дом 6, 2 этаж</span>
				<span class="span ng-binding">Салон "Мебель Румынии"</span>
				<span class="span ng-binding">с 11:00 до 20:00<br>ежедневно</span>
				<span class="span ng-binding">+7(499) 169-02-41<br>+7(963) 750-41-44</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"> г. Москва, Лужнецкая набережная, д. 10а, стр. 12</span>
				<span class="span ng-binding">Салон "Абрис"</span>
				<span class="span ng-binding">пн-пт: 10:00 - 19:00 <br>(в выходные - по договоренности)</span>
				<span class="span ng-binding">8-495-788-31-91 <br>доб. 103</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Тимирязевская, д.2/3, ТЦ "Парк-11", 3 этаж</span>
				<span class="span ng-binding">Салон мебельной фабрики «Зал Свобода»</span>
				<span class="span ng-binding">с 10-00 до 20-00<br>ежедневно</span>
				<span class="span ng-binding">+7(499) 130-06-68<br>+7(925) 198-54-30</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">1-я Дубровская ул, д.13, 1 этаж</span>
				<span class="span ng-binding">Салон «Мебель Италии«</span>
				<span class="span ng-binding">с 10-00 до 19-30<br>ежедневно</span>
				<span class="span ng-binding">+7(495) 795-54-06<br>+7(966) 144-29-60</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Привольная, дом 65/32, 1 этаж</span>
				<span class="span ng-binding">Салон «Мебель Италии»</span>
				<span class="span ng-binding">с 10-00 до 19-30<br>ежедневно</span>
				<span class="span ng-binding">+7(495) 704-47-01<br>+7(929) 659-75-75</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">1-ий Котляковский переулок, д.1С - 99; офис №212</span>
				<span class="span ng-binding">Шатура-Мебель</span>
				<span class="span ng-binding">пн-сб: 10:00 - 19:00</span>
				<span class="span ng-binding">8 (495) 660-83-78 <br>(доб. 101)</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Набережная Тараса Шевченко, д.3, 1 этаж</span>
				<span class="span ng-binding">Салон «Мебель, свет, интерьеры»</span>
				<span class="span ng-binding">пн-пт: 10:00 - 20:00<br>сб,вс: выходной</span>
				<span class="span ng-binding">+7(499) 243-60-00<br>+7(916) 650-86-37</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">5-ый Донской проезд, дом 23, ТД "Семь", 1 этаж</span>
				<span class="span ng-binding">Салон «Берлускони»</span>
				<span class="span ng-binding">с 10-00 до 19-30<br>ежедневно</span>
				<span class="span ng-binding">+7(495) 795-71-50</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Мясницкая, дом 8/2, стр. 1</span>
				<span class="span ng-binding">Салон «Гледиз»</span>
				<span class="span ng-binding">пн-сб: 09:30 - 20:00<br>вс: 11:00 – 18:00</span>
				<span class="span ng-binding">+7(495) 624-15-63<br>+7(495)624-59-21<br>+7(495)624-52-53</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ТЦ «Интерьер Плаза», 8 этаж, МКАД 16-ый км внешняя сторона. г. Дзержинский, ул. Энергетиков, д. 14А </span>
				<span class="span ng-binding">ООО «Гранде Мебель»</span>
				<span class="span ng-binding">10:00 - 21:00 <br>ежедневно</span>
				<span class="span ng-binding">+7(495)780-35-35 <br>доб. 805</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Новослободская, дом 67/69</span>
				<span class="span ng-binding"><a href="/salon-matras-ok/">Магазин "Матрас ОК Кровати"</a></span>
				<span class="span ng-binding">с 10-00 до 21-00<br> ежедневно.<br>Бесплатная парковка – просьба звонить заранее</span>
				<span class="span ng-binding">+7(499) 973-16-65, <br>+7(499) 973-17-19</span>
			</div>
				<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Варшавское шоссе, д. 32, стр. 1, этаж 2, офис 203</span>
				<span class="span ng-binding">«Mr. Sleep»</span>
				<span class="span ng-binding">с 9:00 до 21:00 <br> ежедневно</span>
				<span class="span ng-binding">+8 (495) 191-43-55 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Варшавское шоссе, д.32</span>
				<span class="span ng-binding">ООО «Ортик»</span>
				<span class="span ng-binding">пн-сб: 10:00 - 19:00;<br>вс: выходной</span>
				<span class="span ng-binding">+7 (495) 150-20-77</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Москва, ул. Новослободская, д.50/1, строение 2</span>
				<span class="span ng-binding">Магазин "Митос"</span>
				<span class="span ng-binding">пн.-пт: <br>10-00 - 20-00<br>сб.-вс:<br> 11:00 - 19:00<br>Бесплатная парковка – просьба звонить заранее</span>
				<span class="span ng-binding">(495) 937-66-12, <br>(499) 972-05-96</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Новокосинская д.23</span>
				<span class="span ng-binding">Магазин «Мебель»</span>
				<span class="span ng-binding">пн-пт: 10:00 - 20:00<br>сб: 11:00 - 18:00<br>вс: 11:00 - 16:00</span>
				<span class="span ng-binding">+7(495)701-22-60</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Ленинский пр-кт 89/2, цокольный этаж</span>
				<span class="span ng-binding">Магазин «Инвирд»</span>
				<span class="span ng-binding">пн-пт: 10-00 - 20-00<br>сб-вс: 11-00 - 19-00</span>
				<span class="span ng-binding">+7(499)132-03-44, <br>+7(495) 132-15-38</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Москва, ул. Профсоюзная, д.56, 3-й этаж, линия 3Ж</span>
				<span class="span ng-binding">Салон Orthosleep в ТЦ «Черемушки»</span>
				<span class="span ng-binding">ежедневно с 10:00 до 21:00</span>
				<span class="span ng-binding">+7(495) 558-61-63</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Зеленый проспект, дом 3А, ТЦ "Ваш Дом", 2 этаж </span>
				<span class="span ng-binding">Cалон Мебели «Адель»</span>
				<span class="span ng-binding">с 10-30 до 20-00<br>ежедневно</span>
				<span class="span ng-binding">+7(966) 121-29-16</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Зорге, дом 1, стр. 2, магазин "Дом для Дома", 2 этаж</span>
				<span class="span ng-binding">Салон Мебели «Дольче Вита»</span>
				<span class="span ng-binding">с 10-00 до 20-00<br>ежедневно</span>
				<span class="span ng-binding">+7(495) 969-45-19<br>+7(926) 216-30-58</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Гризадубовой, дом 2, 2 этаж, правое крыло</span>
				<span class="span ng-binding">Салон «Мебель Италии»</span>
				<span class="span ng-binding">с 11-00 до 19-00<br> ежедневно</span>
				<span class="span ng-binding">+7(495) 752-69-14<br>+7 (495) 752-45-29</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">МТК "Армада" ул. Кировоградская, д 11, стр. 1, 4 этаж</span>
				<span class="span ng-binding">Салон «Итальянская Коллекция»</span>
				<span class="span ng-binding">с 10-00 до 20-00<br> ежедневно</span>
				<span class="span ng-binding">+7(495) 781-11-11 <br>доб. 24-14;<br>+7(925) 589-72-89</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">МТК "Армада" ул. Кировоградская, д 11, стр. 1, 4 этаж</span>
				<span class="span ng-binding">Салон «Мебель Румынии»</span>
				<span class="span ng-binding">с 10-00 до 20-00<br> ежедневно</span>
				<span class="span ng-binding">+7(909) 921-99-40<br>+7(925) 507-69-05</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Нахимовский проспект, дом 47, офис 1214</span>
				<span class="span ng-binding">Салон «Мобиле Арт»</span>
				<span class="span ng-binding">пн-пт: 10:00 - 20:00<br> сб-вс: выходной</span>
				<span class="span ng-binding">+7(495) 232-55-14<br>+7(495) 232-55-12, <br>+7(495) 124-53-46</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Нахимовский проспект, д. 24, ЦДиИ «Экспострой», павильон 1, 28 стенд</span>
				<span class="span ng-binding">«Мебель Италии и Испании»</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7(495) 803-41-70 <br>+7(495) 557-47-54 <br>+7(910) 441-67-51 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Бизнес Парк "Румянцево", стр.1, к."А", вход №2, эт.2, павильон № 228 "А"</span>
				<span class="span ng-binding">Дизайн-студия, интерьеры</span>
				<span class="span ng-binding">с 10-00 до 21-00<br> ежедневно</span>
				<span class="span ng-binding">+7(495) 984-29-15<br>+7(985) 923-77-83</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Новослободская, дом 67/69</span>
				<span class="span ng-binding"><a href="/salon-matras-ok/">Магазин «Матрас ОК Кровати»</a></span>
				<span class="span ng-binding">с 10-00 до 21-00<br> ежедневно.<br>Бесплатная парковка – просьба звонить заранее</span>
				<span class="span ng-binding">+7(499) 973-16-65, <br>+7(499) 973-17-19</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Новорижское шоссе, 23 км, д. Покровское, ул. Центральная, 27 ТК "Покровский", 2 этаж</span>
				<span class="span ng-binding">Салон "Valest"</span>
				<span class="span ng-binding">с 10-00 до 21-00<br> ежедневно</span>
				<span class="span ng-binding">8 (800) 500-56-79</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Павловская, владение №7, этаж 1</span>
				<span class="span ng-binding">Ортопедический салон «Пассивная Терапия»</span>
				<span class="span ng-binding">с 10-30 до 20-00<br>ежедневно</span>
				<span class="span ng-binding">+7(495) 648-61-15<br>+7(905) 777-01-96</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Ленинский пр-кт 89/2, цокольный этаж</span>
				<span class="span ng-binding">Магазин «Инвирд»</span>
				<span class="span ng-binding">пн-пт: 10-00 - 20-00<br>сб-вс: 11-00 - 19-00</span>
				<span class="span ng-binding">+7(499)132-03-44, <br>+7(495) 132-15-38</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">«Дом Мебели», ул. Шаболовка, д. 31, 1 этаж</span>
				<span class="span ng-binding">«Мебель Италии»</span>
				<span class="span ng-binding">с 10:00 до 20:00<br>ежедневно</span>
				<span class="span ng-binding">+7(499) 236-84-28<br>+7(499) 233-83-09</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Шоссе Энтузиастов, д.54, ТЦ «Мебель Уюта», 4 этаж</span>
				<span class="span ng-binding">«Мебель Румынии»</span>
				<span class="span ng-binding">пн-сб: 11:00—19:00<br>вс: 11:00—18:00</span>
				<span class="span ng-binding">+7(925) 589-01-51<br>+7(925) 510-85-09</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">МТК «Армада», ул. Кировоградская, д 11, стр. 1, 4 этаж</span>
				<span class="span ng-binding">Салон «Итальянская Коллекция»</span>
				<span class="span ng-binding">с 10-00 до 20-00<br> ежедневно</span>
				<span class="span ng-binding">+7(495) 781-11-11 <br>доб. 24-14;<br>+7(925) 589-72-89</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ТЦ «Мебель России», ул. Большая Семёновская, д. 10 центральный вход, 1 этаж, павильон Д-1-17</span>
				<span class="span ng-binding">«Мебель из массива»</span>
				<span class="span ng-binding">с 10-00 до 19-30<br> ежедневно</span>
				<span class="span ng-binding">+7(495) 510-95-46<br>+7(495) 727-05-90</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Большая Семеновская, дом 32</span>
				<span class="span ng-binding">«Квартал Здоровья»</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7 (495) 215 58 87</span>
			</div>
		</div>
		</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Московская область</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Воскресенский район, поселок Белоозерский, ул. Коммунальная, дом 54</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">10:00 до 20:00</span>
				<span class="span ng-binding">+7(962) 915-22-22</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Дзержинский, ул. Энергетиков, д. 14а, 8 этаж</span>
				<span class="span ng-binding">Гранде Мебель</span>
				<span class="span ng-binding">10:00 - 21:00 ежедневно</span>
				<span class="span ng-binding">8 (495) 780-35-35 доб. 805</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Дзержинский, м. Пражская ул. Кировоградская д.11 корп.1 4 этаж</span>
				<span class="span ng-binding">Camelgroup в МЦ “АРМАДА”</span>
				<span class="span ng-binding">10:00-22:00 ежедневно</span>
				<span class="span ng-binding">+7 (495) 792-95-60<br>
							+7 (495) 792-95-70</span>
			</div>
			 <div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Долгопрудный, ул. Первомайская, дом 54</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">пн - пт:10.00-20.00<br>
				сб - вс: 10.00-19.00</span>
				<span class="span ng-binding">+7(498) 685-08-34</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Зеленоград, Панфиловский пр-кт. дом 1, 1 эт.</span>
				<span class="span ng-binding">Дом мебели</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7(499) 736-04-39, <br>+7(499) 736-53-08  <br>+7(499) 736-16-79</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Красногорск, ул. Ленина, дом 45, помещение 1, 1 этаж </span>
				<span class="span ng-binding">Салон Мебели</span>
				<span class="span ng-binding">пн-вс: 10:00 - 20:00 </span>
				<span class="span ng-binding">+7(495) 563-86-26<br>+7 (495) 563-04-78</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Красногорский район, поселок Нахабино, ул. Советская, дом 73А.ТЦ "Аверс", 2 этаж, левое крыло </span>
				<span class="span ng-binding">Салон Мебели</span>
				<span class="span ng-binding">пн-вс: 10:00 - 20:00</span>
				<span class="span ng-binding">+7 (495) 566-37-81</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Куровское, ул. Советская, дом 105</span>
				<span class="span ng-binding">Салон Мебели</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7(496) 411-07-96<br> +7(925) 738-40-42</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Лобня, ул. Ленина, дом 9, Цокольный этаж</span>
				<span class="span ng-binding">Шатура-Мебель</span>
				<span class="span ng-binding">пн - пт: 10.00-20.00; cб - вс: 10.00-19.00 </span>
				<span class="span ng-binding">+7(495) 577-33-86</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Люберцы, Жулебино, м. Выхино МКАД, 8 км.(внешняя сторона), д. 3 стр. 1, 2 этаж</span>
				<span class="span ng-binding">Camelgroup в МТЦ “СКАРАБЕЙ”</span>
				<span class="span ng-binding">10:00 - 21:00 ежедневно</span>
				<span class="span ng-binding">+7 (495) 509-96-41<br>+7 (495) 509-96-42</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Мытищи, ул. Юбилейная, дом 24А, под. 1, этаж 1, офис 3. </span>
				<span class="span ng-binding">Дизайн Студия</span>
				<span class="span ng-binding">пн-сб: 10:00 - 19:00 </span>
				<span class="span ng-binding">+7 (903) 775-06-22</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Мытищи, Олимпийский проспект, дом 29, стр. 1, ТЦ "Формат", 3 этаж </span>
				<span class="span ng-binding">Салон "Мир Мебели"</span>
				<span class="span ng-binding">пн-вс: 10:00 - 20:00 </span>
				<span class="span ng-binding">+7 (499) 390-30-48<br>+7 (906) 058-38-02</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Новорижское шоссе, 23 км, д. Покровское, ул. Центральная, 27, ТК "Покровский", 2 этаж</span>
				<span class="span ng-binding">Салон Valest</span>
				<span class="span ng-binding">с 10-00 до 21-00<br> ежедневно</span>
				<span class="span ng-binding">8 (800) 500-56-79</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Ногинский район, поселок Черноголовка, ул. Березовая, дом 24</span>
				<span class="span ng-binding">Белая Ворона</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (903) 177-81-57</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Подольск, проспект Юных Ленинцев, дом 61 (3-й этаж)</span>
				<span class="span ng-binding">ТЦ Шмель</span>
				<span class="span ng-binding">10:00 до 20:00</span>
				<span class="span ng-binding">+7(499) 713-34-37</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Подольск, Симферопольское шоссе, 38 км. 1-й этаж</span>
				<span class="span ng-binding">ТЦ Хамелеон</span>
				<span class="span ng-binding">10:00 до 20:00</span>
				<span class="span ng-binding">+7(963) 990-46-51</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Реутов, ул. Ленина, дом 1А, эт. 2.</span>
				<span class="span ng-binding">Салон мебели Вешняки</span>
				<span class="span ng-binding">Ежедневно: 10.00 до 20.00 </span>
				<span class="span ng-binding">+7(495) 777-91-07<br>+7(985) 121-01-07</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Реутов, м. Новокосино, Юбилейный проспект, дом 30/2, ТЦ "Студия Интерьера", 1 этаж</span>
				<span class="span ng-binding">Салон "Мебель Италии, России"</span>
				<span class="span ng-binding">пн-сб: 10:00 - 20:00<br> вс: 10:00 - 18:00</span>
				<span class="span ng-binding">+7(915) 258-46-46</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Химки, Юбилейный проспект, дом 7А</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">10:00 до 20:00</span>
				<span class="span ng-binding">+7(962) 915-22-22</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Санкт-Петербург</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">МЦ Аквилон, ул. Новолитовская 15к.В, 5 этаж
секция 188 (Merinos, Waterlattex, Naturalmente)
3 этаж секция 80 (Merinos, Rest 9)</span>
				<span class="span ng-binding">ИП Арутюнов</span>
				<span class="span ng-binding">ежедневно 10:00 - 20:00</span>
				<span class="span ng-binding">+7 921 906-79-00<br>8 (812) 670-84-82 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул Кожевенная линия, д.30, INTERLOFT. И.П. ВИКЕРАС Я.С.</span>
				<span class="span ng-binding">МЦ "ГРЕЙТ"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7 (921) 876-20-05</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Марата, д.61</span>
				<span class="span ng-binding">«Элит-мебель»</span>
				<span class="span ng-binding">Пн - Сб: с 10:00 - 20:00<br>
						Вс: с 11:00 - 19:00 </span>
				<span class="span ng-binding">8 (812) 314-10-26</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Варшавская, д.3, 4 этаж, секция 433</span>
				<span class="span ng-binding">«Элит-мебель» в МЦ «Континент»</span>
				<span class="span ng-binding">с 10:00 до 20:00 ежедневно</span>
				<span class="span ng-binding">8 (812) 337-17-63</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">АБАКАН, РЕСП. ХАКАСИЯ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (812) 337-17-63</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">АЛЕКСИН, ТУЛЬСКАЯ ОБЛ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Тульская, дом 136Д, ТЦ «Слобода», бутик 9</span>
				<span class="span ng-binding">Салон «Мадам Подушкина»</span>
				<span class="span ng-binding">9:00 - 17:00 </span>
				<span class="span ng-binding">8 (905) 111-11-07 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Архангельск</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">Магазин "Пальметто"</span>
				<span class="span ng-binding">с 10:00 до 18:00, выходной воскресение</span>
				<span class="span ng-binding">8 (818) 221-54-21 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Белгород</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Белгородского Полка, дом 62. </span>
				<span class="span ng-binding">Салон Мебели "Вилла Деко" </span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (4722) 28-90-82 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Князя Трубецкого, дом 1. </span>
				<span class="span ng-binding">Дизайн-Студия "Мебель Доминика"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (4722) 33-91-85</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Щорса, дом 64А. </span>
				<span class="span ng-binding">Салон Мебели "Вилла Деко" </span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (4722) 28-90-82</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Братск</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (3953) 36-70-76 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">БАЛАКОВО,САРАТОВСКАЯ ОБЛ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Трнавская 24, ТЦ «Грин Хаус», 0-ой этаж</span>
				<span class="span ng-binding">ООО «Хорс» - мультибрендовый магазин матрасов «За матрасом»</span>
				<span class="span ng-binding">Ежедневно с 10.00 до 21.00 ( без перерывов и выходных )</span>
				<span class="span ng-binding">8(927)154-71-30 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Владикавказ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">пр. Коста, дом 180</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (929) 863-36-88</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Владимир</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (922) 24-35-15</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Волгоград</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (442) 33-67-70<br> 33-89-11<br> 33-89-32 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Воронеж</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Урицкого, дом 128</span>
				<span class="span ng-binding">ООО «Сны и сновидения»</span>
				<span class="span ng-binding">Пн-Пт.: 11:00 - 20:00<br> Сб.: 11:00 - 18:00<br> Вс.: выходной.</span>
				<span class="span ng-binding">+ 7 (952) 952-09-03<br> + 7 (473) 238-09-03<br> + 7 (473) 221-09-92<br> + 7 (952) 958-67-09</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Димитрова, дом 74</span>
				<span class="span ng-binding">Мебельный салон Юнион-Воронеж</span>
				<span class="span ng-binding">ПН-ПТ: 09:00-20:00<br>
СБ: 10:00-19:00<br>
ВС: выходной. </span>
				<span class="span ng-binding">8 (473) 226-58-37</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Плехановская, 41 — 1 этаж</span>
				<span class="span ng-binding">Интерьер-бутик «ЭРМИТАЖ»</span>
				<span class="span ng-binding">ежедневно 10:00 – 19:00 </span>
				<span class="span ng-binding">+7 (473) 271‒71‒91</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Грозный</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ИП Чалаева</span>
				<span class="span ng-binding">с 9:00 до 19:00 без выходных</span>
				<span class="span ng-binding">8 (963) 584-51-16 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Екатеринбург</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Ленина, дом 56</span>
				<span class="span ng-binding">Демонстрационный салон-магазин Magniflex</span>
				<span class="span ng-binding">понедельник-пятница с 10.00 до 20.00<br>
суббота-воскресение с 11.00 до 19.00 </span>
				<span class="span ng-binding">8 (343) 346-93-10<br>8 (912) 24-58-898</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Киров</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Герцена, дом 9</span>
				<span class="span ng-binding">Мебельный салон "Алькасар"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (8332) 64-72-13<br> 64-15-94<br> 8 (963) 000-51-51</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">КАБАРДИНО-БАЛКАРия</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Нальчик, ул. Головко, дом 12а</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (88662) 42-13-74</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Нальчик, ул. Ногмова, дом 80</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (88662) 72-22-12</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Нальчик, ул. Пачева, дом 50</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (928) 700-85-98</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Нальчик, ул. Богдана Хмельницкого, дом 41</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (928) 720-58-41</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Нальчик, Затишье, район травмпункта</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (938) 076-65-34</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Прохладный, ул. Ленина, дом 72</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (928) 915-99-48</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Терек, ул. Ленина, дом 37</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (938) 915-71-22</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Баксан, ул. Ленина, дом 5</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (929) 885-12-41</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Нарткала, ул. Шекихачева, дом 3</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (928) 694-55-21</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Краснодар</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул.Тополиная, д.36</span>
				<span class="span ng-binding">Студия матрасов "ГудСон"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7 (989) 829-00-29</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Краснодарский край, поселок Лазаревский, ул. Калараш, дом 145</span>
				<span class="span ng-binding">Салон "Матрасы и Аксессуары"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (8622) 36-24-42<br> 8 (918) 916-56-75</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Дзержинского 100, Мегацентр «Красная Площадь», 3 этаж, секция С-167 </span>
				<span class="span ng-binding">Салон «СОМОВО МЕБЕЛЬ/CLASSICO ITALIANO»</span>
				<span class="span ng-binding">с понедельника по воскресенье с 10:00 до 22:00</span>
				<span class="span ng-binding">+7-967-311-34-74<br> +7-918-024-63-36</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Красноярск</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Красной Звезды, д. 1</span>
				<span class="span ng-binding">Студия мебели "Матрасы и Кровати"</span>
				<span class="span ng-binding">Ежедневно с 9 до 21 часов без обеда и выходных</span>
				<span class="span ng-binding">8 (391) 297-28-11<br> 8 (923) 334-05-55</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ЛИПЕЦК</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">пл. Заводская, дом 1</span>
				<span class="span ng-binding">Мебельный салон Юнион-Липецк</span>
				<span class="span ng-binding">ПН-ПТ: 10:00-20:00, СБ: 10:00-19:00, ВС: выходной</span>
				<span class="span ng-binding">8 (4742) 36-49-49</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">НИЖНИЙ НОВГОРОД</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Рождественская, дом 13, БЦ "Муравей", 2-ой этаж</span>
				<span class="span ng-binding">Мебельный салон "CORSO ITALIA" </span>
				<span class="span ng-binding">ПН-СБ 10:00-19:00, ВС выходной</span>
				<span class="span ng-binding">8 (831) 461-80-94<br> (831) 461-81-94<br> (831) 461-80-93</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ИП Шарова Л.А</span>
				<span class="span ng-binding">8.00-22.00 без выходных </span>
				<span class="span ng-binding">8 (831) 415-51-52<br> 415-78-67</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">б. Мира, дом 17а</span>
				<span class="span ng-binding">Мебельный салон Юнион-Нижний Новгород</span>
				<span class="span ng-binding">ПН-ПТ: 10:00-20:00, СБ: 10:00-19:00, ВС: выходной </span>
				<span class="span ng-binding">277-51-95<br> 8 (831) 246-82-70</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">НОВОСИБИРСК</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Красный проспект, дом 99, "Центр Здорового Сна"</span>
				<span class="span ng-binding">Салон "Матрасы и Кровати"</span>
				<span class="span ng-binding">Понедельник - Пятница: 11.00-19.00<br>
Суббота: 11.00-18.00<br>
Воскресенье: 11.00 до 17.00</span>
				<span class="span ng-binding">8 (383) 220-88-10<br> 8 (913) 987-82-49</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Станционная, дом 62, Салон "Матрасы и Кровати", 1 эт</span>
				<span class="span ng-binding">Салон "Ортофлекс"</span>
				<span class="span ng-binding">Понедельник - Пятница: 10.00-20.00<br>
Суббота: 11.00-16.00<br>
Воскресенье: выходной.</span>
				<span class="span ng-binding">8 (383) 380-08-16<br> 380-95-16</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Светлановская, дом 50, ТВК "Большая Медведица", 2 этаж, отдел "Ортофлекс"</span>
				<span class="span ng-binding">Салон "Ортофлекс"</span>
				<span class="span ng-binding">10:00-21:00, без обеда и выходных</span>
				<span class="span ng-binding">8 (383) 380-81-16</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Новосибирск, ул. Фрунзе, д.228</span>
				<span class="span ng-binding">Студия «Мебели Лекса» </span>
				<span class="span ng-binding">Понедельник - Суббота: 10:00 – 19:00<br>
Воскресенье: выходной </span>
				<span class="span ng-binding">+7 (383) 362-28-30<br> +7 (913) 921-92-10</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">НИЖНий ТАГИЛ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Октябрьской революции, дом 66, ЦУМ, 5 этаж, МАТРАС-ЦЕНТР</span>
				<span class="span ng-binding">ИП Корнев Д.Н.</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (912) 287-33-77 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">МИРНЫЙ </h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул звездная 48\2</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (914) 257-98-89 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ОРЕНБУРГ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Шарлыкское шоссе, дом 1. салон "Davidoff" </span>
				<span class="span ng-binding">Мегамолл "Армада" Галерея Лувр</span>
				<span class="span ng-binding">с 10:00 до 22:00</span>
				<span class="span ng-binding">8 (3532) 61-84-95<br> 20-16-73</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ПЕРМь</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Кронштадская, дом 29</span>
				<span class="span ng-binding">ООО "МНК"</span>
				<span class="span ng-binding">будни с 9-00 до 18-00</span>
				<span class="span ng-binding">+7 (950) 450-52-25</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">РОСТОВ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7 (950) 450-52-25</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">РОСТОВ-НА-ДОНУ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Закруткина 2/2</span>
				<span class="span ng-binding">ИП Драгунов Алексей Сергеевич</span>
				<span class="span ng-binding">Вт. – Пт.: 10:00 – 19:00, Сб. – Вс.: 10:00 – 18:00, Пн.: - выходной день</span>
				<span class="span ng-binding"> 229-97-59, 270-13-47, 8-938-123-83-88 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">пр.Буденновский, 83</span>
				<span class="span ng-binding">"Студия матрасов Дрёма» / ИП Федоров Алексей Михайлович</span>
				<span class="span ng-binding">Пн.-Пт.: с 10:00 - 18:00, Сб.: 10:00 – 17:00, Воскресенье: выходной</span>
				<span class="span ng-binding">+7 (863) 2200-200, (863) 2907-000</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">СОЧИ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул.Транспортная, дом 28, 1 этаж</span>
				<span class="span ng-binding">ООО "Сфера-1"</span>
				<span class="span ng-binding">10.00 - 21.00 без перерывов и выходных</span>
				<span class="span ng-binding">8(8622) 25-87-53, 8 918 404 70 99</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ИП Королев В.В.</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 918 207 39 39</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">СОЧИ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул.Транспортная, дом 28, 1 этаж</span>
				<span class="span ng-binding">ООО "Сфера-1"</span>
				<span class="span ng-binding">10.00 - 21.00 без перерывов и выходных</span>
				<span class="span ng-binding">8(8622) 25-87-53, 8 918 404 70 99</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ИП Королев В.В.</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 918 207 39 39</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">СТАРый ОСКОЛ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">мкр. Надежда, дом 5, ТЦ «Всё для Вас» 1 эт, пав. 4</span>
				<span class="span ng-binding">Мастерская матрасов « Mr. Mattress» </span>
				<span class="span ng-binding">Понедельник - Пятница: 10.00-19.00<br>
Суббота: 10.00-18.00<br>
Воскресенье: выходной </span>
				<span class="span ng-binding">8 (980) 374-24-10<br> 8 (929) 000-05-79</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">СЫКТЫВКАР</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (8212) 20-00-96 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ТАМБОВ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Советская, дом 34</span>
				<span class="span ng-binding">Мебельный салон Юнион-Тамбов	</span>
				<span class="span ng-binding">ПН-ПТ: 10:00-20:00, СБ: 10:00-19:00, ВС: выходной</span>
				<span class="span ng-binding">8 (4752) 75-51-12</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ТВЕРь</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">с 9:00 до 17:00</span>
				<span class="span ng-binding">8 (4822) 32-26-26 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ТОМСКЕ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ИП Майснер В.</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (913) 899-94-81</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Яковлева, дом 23</span>
				<span class="span ng-binding">Салон мягкой мебели "Ля Рошель"</span>
				<span class="span ng-binding">С 10.00-19.00 без выходных </span>
				<span class="span ng-binding">8 (3822) 65-76-76</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ТУЛА</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Л. Толстого, дом 91-А</span>
				<span class="span ng-binding">Мебельный салон "Элит"</span>
				<span class="span ng-binding">Понедельник - Пятница: 10.00-19.00<br>
Суббота: 11.00-17.00<br>
Воскресенье: выходной</span>
				<span class="span ng-binding">8 (4872) 31-97-81</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Коминтерна, дом 24г</span>
				<span class="span ng-binding">Мебельный салон "Элит"</span>
				<span class="span ng-binding">с 10 до 19 часов, без выходных</span>
				<span class="span ng-binding">8 (4872) 70-29-51</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Тульская, дом 136Д, ТЦ «Слобода», бутик 9</span>
				<span class="span ng-binding">Салон «Мадам Подушкина»</span>
				<span class="span ng-binding">9:00 - 17:00 </span>
				<span class="span ng-binding">8 (905) 111-11-07 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ТЮМЕНь</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"> ул. Максима Горького, дом 68, корпус 3</span>
				<span class="span ng-binding">СТУДИЯ MOBILI</span>
				<span class="span ng-binding"> с понедельника по субботу с 11:00 до 19:00 </span>
				<span class="span ng-binding">+7 (3452) 97-07-93</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"> ул. 30 лет Победы, дом 7, стр.5, 1 этаж</span>
				<span class="span ng-binding">Салон ортопедич. матрасов и кроватей "Матрэкс"-ТЦ "Магнат"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (3452) 75-47-74 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Авторемонтная, дом 45, стр.4 </span>
				<span class="span ng-binding">Салон "Матрасы и аксессуары", салон "Матрэкс"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (3452) 43-37-24<br> 8 (3452) 74-48-19 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">УЛЬЯНОВСК</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Радищева, дом 100</span>
				<span class="span ng-binding">Салон «NEW STANDART»</span>
				<span class="span ng-binding"> с 9:00 до 17:00 </span>
				<span class="span ng-binding">8 (8422) 73-64-40<br> 8 (8422) 73-64-41<br> 8 (951) 096-37-10<br> 8 (906) 144-75-33 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ООО «СТЭК»</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (8422) 73-64-41 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Урицкого, д. 58 </span>
				<span class="span ng-binding">ТД «ТРОЯ»</span>
				<span class="span ng-binding">с 9:00 до 18:00</span>
				<span class="span ng-binding">8 (8422) 27-33-46  </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Пушкарева, д.11, корпус 2 </span>
				<span class="span ng-binding">ТЦ «САРАЙ»</span>
				<span class="span ng-binding">ежедневно, с 9:00 до 20:00</span>
				<span class="span ng-binding">8 (8422) 37-02-50 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Промышленная, д. 2 </span>
				<span class="span ng-binding">ТЦ «ИМПЕРИЯ МЕБЕЛИ»</span>
				<span class="span ng-binding">пн-вс, с 9:30 до 19:00</span>
				<span class="span ng-binding">8 (8422) 62-49-88  </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">УФА</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7(347) 2912-616 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ХАБАРОВСК</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ООО «Астрид»</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (4212) 57-79-12 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ЧЕЛЯБИНСК</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Бр. Кашириных, дом 102-83</span>
				<span class="span ng-binding">ООО «СТМ»</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (351) 270-82-18</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ИП "Ерохин А.В."</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (351) 270-50-72<br> 252-42-74</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ЮЖНО-САХАЛИНСК</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">	</span>
				<span class="span ng-binding">ООО «Дом Мебели»</span>
				<span class="span ng-binding">с 9-30 до 18-30 воскресение выходной</span>
				<span class="span ng-binding">8 (4242) 72-28-18</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ЮЖНО-САХАЛИНСК, ЛЕНИНА, 321/1</span>
				<span class="span ng-binding">Интерьер салон "Green Street",ИП Киселев.</span>
				<span class="span ng-binding">Ежедневно 9:00 – 21:00</span>
				<span class="span ng-binding">8 (4242) 277-2-50<br> 8 (962) 112-79-49 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ЯЛТА</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Ялта, ул. Большевистская 10, ТЦ Конфетти 	</span>
				<span class="span ng-binding">Мебельный салон "Арт Мастер" Адрес</span>
				<span class="span ng-binding">Понедельник - Суббота с 9:00 до 19:00<br>
Воскресенье - выходной </span>
				<span class="span ng-binding">8 (978) 949-34-58</span>
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
			'address' => 'russia-google-moscow',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Россия',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Магазины Magniflex в России | Магнифлекс',
			'description' => 'Адреса магазинов, ассортимен, график работы в России, в которых можно купить ортопедические матрасы и подушки Магнифлекс',
			'keywords' => 'magniflex магазин, магнифлекс магазин',
			'text' => '
			<style>
				#google-map {
					width: 100%; height: 370px; padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 9;
           			var google_FirstCenter = 55.758747;
	                var google_SecondCenter = 37.607749;
			</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>
			<div class="hnb_contarea">
	<div class="hnb_textaligcenter">
		<h2 class="hnb_mytitlepag">Magniflex в России</h2>
		<div id="google-map"></div>
	<div style="max-width: 1200px">
		<h3 class="city-shop-title">Москва</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Бродников переулок, д.10, к.2</span>
				<span class="span ng-binding"><a href="/o-magniflex/show-room-matrasov/"></a><b>ФИРМЕННЫЙ МАГАЗИН!</b><br>Шоу-рум Magniflex</span>
				<span class="span ng-binding">пн-пт: 9:30 - 21:00
				<br>сб-вс: 10:00 - 21:00</span>
				<span class="span ng-binding">+7 (495) 989-11-32</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Профсоюзная, д. 45, ТЦ «Царское село», 2 этаж</span>
				<span class="span ng-binding">"Италмания"</span>
				<span class="span ng-binding">пн-сб: 10:00 - 20:00
<br>вс: 10:00 - 18:00</span>
				<span class="span ng-binding">+7 (495) 718-73-88
<br>+7 (495) 718-76-31</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Ленинская Слабода, д. 26, корп."А", Бизнес-центр "Омега-2", офис №451, 4 этаж.</span>
				<span class="span ng-binding">Салон "Алло! Матрас!"</span>
				<span class="span ng-binding">с 10 до 19-30<br>ежедневно</span>
				<span class="span ng-binding">+7(495) 278-02-40<br>8-800-555-48-25</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Анадырский проезд, дом 17/1, к. 1, помещение 1, 1 этаж</span>
				<span class="span ng-binding">"Матрасы и Аксессуары"</span>
				<span class="span ng-binding">пн-вс: 10:00 - 19:00</span>
				<span class="span ng-binding">8 (499) 184-38-81, <br>8 (903) 762-80-80</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Люблинская 151, Деловой центр "Марьино"</span>
				<span class="span ng-binding">"Матрас-на-заказ"</span>
				<span class="span ng-binding">пн-пт: 11:00 - 19:00<br> сб-вс: выходные </span>
				<span class="span ng-binding">+7(495) 640-62-35<br>+7 (495)220-44-95<br>доб. 193</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Бульвар Рокосовского, дом 6, 2 этаж</span>
				<span class="span ng-binding">Салон "Мебель Румынии"</span>
				<span class="span ng-binding">с 11:00 до 20:00<br>ежедневно</span>
				<span class="span ng-binding">+7(499) 169-02-41<br>+7(963) 750-41-44</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"> г. Москва, Лужнецкая набережная, д. 10а, стр. 12</span>
				<span class="span ng-binding">Салон "Абрис"</span>
				<span class="span ng-binding">пн-пт: 10:00 - 19:00 <br>(в выходные - по договоренности)</span>
				<span class="span ng-binding">8-495-788-31-91 <br>доб. 103</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Тимирязевская, д.2/3, ТЦ "Парк-11", 3 этаж</span>
				<span class="span ng-binding">Салон мебельной фабрики «Зал Свобода»</span>
				<span class="span ng-binding">с 10-00 до 20-00<br>ежедневно</span>
				<span class="span ng-binding">+7(499) 130-06-68<br>+7(925) 198-54-30</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">1-я Дубровская ул, д.13, 1 этаж</span>
				<span class="span ng-binding">Салон «Мебель Италии«</span>
				<span class="span ng-binding">с 10-00 до 19-30<br>ежедневно</span>
				<span class="span ng-binding">+7(495) 795-54-06<br>+7(966) 144-29-60</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Привольная, дом 65/32, 1 этаж</span>
				<span class="span ng-binding">Салон «Мебель Италии»</span>
				<span class="span ng-binding">с 10-00 до 19-30<br>ежедневно</span>
				<span class="span ng-binding">+7(495) 704-47-01<br>+7(929) 659-75-75</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">1-ий Котляковский переулок, д.1С - 99; офис №212</span>
				<span class="span ng-binding">Шатура-Мебель</span>
				<span class="span ng-binding">пн-сб: 10:00 - 19:00</span>
				<span class="span ng-binding">8 (495) 660-83-78 <br>(доб. 101)</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Набережная Тараса Шевченко, д.3, 1 этаж</span>
				<span class="span ng-binding">Салон «Мебель, свет, интерьеры»</span>
				<span class="span ng-binding">пн-пт: 10:00 - 20:00<br>сб,вс: выходной</span>
				<span class="span ng-binding">+7(499) 243-60-00<br>+7(916) 650-86-37</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">5-ый Донской проезд, дом 23, ТД "Семь", 1 этаж</span>
				<span class="span ng-binding">Салон «Берлускони»</span>
				<span class="span ng-binding">с 10-00 до 19-30<br>ежедневно</span>
				<span class="span ng-binding">+7(495) 795-71-50</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Мясницкая, дом 8/2, стр. 1</span>
				<span class="span ng-binding">Салон «Гледиз»</span>
				<span class="span ng-binding">пн-сб: 09:30 - 20:00<br>вс: 11:00 – 18:00</span>
				<span class="span ng-binding">+7(495) 624-15-63<br>+7(495)624-59-21<br>+7(495)624-52-53</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ТЦ «Интерьер Плаза», 8 этаж, МКАД 16-ый км внешняя сторона. г. Дзержинский, ул. Энергетиков, д. 14А </span>
				<span class="span ng-binding">ООО «Гранде Мебель»</span>
				<span class="span ng-binding">10:00 - 21:00 <br>ежедневно</span>
				<span class="span ng-binding">+7(495)780-35-35 <br>доб. 805</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Новослободская, дом 67/69</span>
				<span class="span ng-binding"><a href="/salon-matras-ok/">Магазин "Матрас ОК Кровати"</a></span>
				<span class="span ng-binding">с 10-00 до 21-00<br> ежедневно.<br>Бесплатная парковка – просьба звонить заранее</span>
				<span class="span ng-binding">+7(499) 973-16-65, <br>+7(499) 973-17-19</span>
			</div>
				<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Варшавское шоссе, д. 32, стр. 1, этаж 2, офис 203</span>
				<span class="span ng-binding">«Mr. Sleep»</span>
				<span class="span ng-binding">с 9:00 до 21:00 <br> ежедневно</span>
				<span class="span ng-binding">+8 (495) 191-43-55 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Варшавское шоссе, д.32</span>
				<span class="span ng-binding">ООО «Ортик»</span>
				<span class="span ng-binding">пн-сб: 10:00 - 19:00;<br>вс: выходной</span>
				<span class="span ng-binding">+7 (495) 150-20-77</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Москва, ул. Новослободская, д.50/1, строение 2</span>
				<span class="span ng-binding">Магазин "Митос"</span>
				<span class="span ng-binding">пн.-пт: <br>10-00 - 20-00<br>сб.-вс:<br> 11:00 - 19:00<br>Бесплатная парковка – просьба звонить заранее</span>
				<span class="span ng-binding">(495) 937-66-12, <br>(499) 972-05-96</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Новокосинская д.23</span>
				<span class="span ng-binding">Магазин «Мебель»</span>
				<span class="span ng-binding">пн-пт: 10:00 - 20:00<br>сб: 11:00 - 18:00<br>вс: 11:00 - 16:00</span>
				<span class="span ng-binding">+7(495)701-22-60</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Ленинский пр-кт 89/2, цокольный этаж</span>
				<span class="span ng-binding">Магазин «Инвирд»</span>
				<span class="span ng-binding">пн-пт: 10-00 - 20-00<br>сб-вс: 11-00 - 19-00</span>
				<span class="span ng-binding">+7(499)132-03-44, <br>+7(495) 132-15-38</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Москва, ул. Профсоюзная, д.56, 3-й этаж, линия 3Ж</span>
				<span class="span ng-binding">Салон Orthosleep в ТЦ «Черемушки»</span>
				<span class="span ng-binding">ежедневно с 10:00 до 21:00</span>
				<span class="span ng-binding">+7(495) 558-61-63</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Зеленый проспект, дом 3А, ТЦ "Ваш Дом", 2 этаж </span>
				<span class="span ng-binding">Cалон Мебели «Адель»</span>
				<span class="span ng-binding">с 10-30 до 20-00<br>ежедневно</span>
				<span class="span ng-binding">+7(966) 121-29-16</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Зорге, дом 1, стр. 2, магазин "Дом для Дома", 2 этаж</span>
				<span class="span ng-binding">Салон Мебели «Дольче Вита»</span>
				<span class="span ng-binding">с 10-00 до 20-00<br>ежедневно</span>
				<span class="span ng-binding">+7(495) 969-45-19<br>+7(926) 216-30-58</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Гризадубовой, дом 2, 2 этаж, правое крыло</span>
				<span class="span ng-binding">Салон «Мебель Италии»</span>
				<span class="span ng-binding">с 11-00 до 19-00<br> ежедневно</span>
				<span class="span ng-binding">+7(495) 752-69-14<br>+7 (495) 752-45-29</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">МТК "Армада" ул. Кировоградская, д 11, стр. 1, 4 этаж</span>
				<span class="span ng-binding">Салон «Итальянская Коллекция»</span>
				<span class="span ng-binding">с 10-00 до 20-00<br> ежедневно</span>
				<span class="span ng-binding">+7(495) 781-11-11 <br>доб. 24-14;<br>+7(925) 589-72-89</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">МТК "Армада" ул. Кировоградская, д 11, стр. 1, 4 этаж</span>
				<span class="span ng-binding">Салон «Мебель Румынии»</span>
				<span class="span ng-binding">с 10-00 до 20-00<br> ежедневно</span>
				<span class="span ng-binding">+7(909) 921-99-40<br>+7(925) 507-69-05</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Нахимовский проспект, дом 47, офис 1214</span>
				<span class="span ng-binding">Салон «Мобиле Арт»</span>
				<span class="span ng-binding">пн-пт: 10:00 - 20:00<br> сб-вс: выходной</span>
				<span class="span ng-binding">+7(495) 232-55-14<br>+7(495) 232-55-12, <br>+7(495) 124-53-46</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Нахимовский проспект, д. 24, ЦДиИ «Экспострой», павильон 1, 28 стенд</span>
				<span class="span ng-binding">«Мебель Италии и Испании»</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7(495) 803-41-70 <br>+7(495) 557-47-54 <br>+7(910) 441-67-51 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Бизнес Парк "Румянцево", стр.1, к."А", вход №2, эт.2, павильон № 228 "А"</span>
				<span class="span ng-binding">Дизайн-студия, интерьеры</span>
				<span class="span ng-binding">с 10-00 до 21-00<br> ежедневно</span>
				<span class="span ng-binding">+7(495) 984-29-15<br>+7(985) 923-77-83</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Новослободская, дом 67/69</span>
				<span class="span ng-binding"><a href="/salon-matras-ok/">Магазин «Матрас ОК Кровати»</a></span>
				<span class="span ng-binding">с 10-00 до 21-00<br> ежедневно.<br>Бесплатная парковка – просьба звонить заранее</span>
				<span class="span ng-binding">+7(499) 973-16-65, <br>+7(499) 973-17-19</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Новорижское шоссе, 23 км, д. Покровское, ул. Центральная, 27 ТК "Покровский", 2 этаж</span>
				<span class="span ng-binding">Салон "Valest"</span>
				<span class="span ng-binding">с 10-00 до 21-00<br> ежедневно</span>
				<span class="span ng-binding">8 (800) 500-56-79</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Павловская, владение №7, этаж 1</span>
				<span class="span ng-binding">Ортопедический салон «Пассивная Терапия»</span>
				<span class="span ng-binding">с 10-30 до 20-00<br>ежедневно</span>
				<span class="span ng-binding">+7(495) 648-61-15<br>+7(905) 777-01-96</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Ленинский пр-кт 89/2, цокольный этаж</span>
				<span class="span ng-binding">Магазин «Инвирд»</span>
				<span class="span ng-binding">пн-пт: 10-00 - 20-00<br>сб-вс: 11-00 - 19-00</span>
				<span class="span ng-binding">+7(499)132-03-44, <br>+7(495) 132-15-38</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">«Дом Мебели», ул. Шаболовка, д. 31, 1 этаж</span>
				<span class="span ng-binding">«Мебель Италии»</span>
				<span class="span ng-binding">с 10:00 до 20:00<br>ежедневно</span>
				<span class="span ng-binding">+7(499) 236-84-28<br>+7(499) 233-83-09</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Шоссе Энтузиастов, д.54, ТЦ «Мебель Уюта», 4 этаж</span>
				<span class="span ng-binding">«Мебель Румынии»</span>
				<span class="span ng-binding">пн-сб: 11:00—19:00<br>вс: 11:00—18:00</span>
				<span class="span ng-binding">+7(925) 589-01-51<br>+7(925) 510-85-09</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">МТК «Армада», ул. Кировоградская, д 11, стр. 1, 4 этаж</span>
				<span class="span ng-binding">Салон «Итальянская Коллекция»</span>
				<span class="span ng-binding">с 10-00 до 20-00<br> ежедневно</span>
				<span class="span ng-binding">+7(495) 781-11-11 <br>доб. 24-14;<br>+7(925) 589-72-89</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ТЦ «Мебель России», ул. Большая Семёновская, д. 10 центральный вход, 1 этаж, павильон Д-1-17</span>
				<span class="span ng-binding">«Мебель из массива»</span>
				<span class="span ng-binding">с 10-00 до 19-30<br> ежедневно</span>
				<span class="span ng-binding">+7(495) 510-95-46<br>+7(495) 727-05-90</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Большая Семеновская, дом 32</span>
				<span class="span ng-binding">«Квартал Здоровья»</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7 (495) 215 58 87</span>
			</div>
		</div>
		</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Московская область</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Воскресенский район, поселок Белоозерский, ул. Коммунальная, дом 54</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">10:00 до 20:00</span>
				<span class="span ng-binding">+7(962) 915-22-22</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Дзержинский, ул. Энергетиков, д. 14а, 8 этаж</span>
				<span class="span ng-binding">Гранде Мебель</span>
				<span class="span ng-binding">10:00 - 21:00 ежедневно</span>
				<span class="span ng-binding">8 (495) 780-35-35 доб. 805</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Дзержинский, м. Пражская ул. Кировоградская д.11 корп.1 4 этаж</span>
				<span class="span ng-binding">Camelgroup в МЦ “АРМАДА”</span>
				<span class="span ng-binding">10:00-22:00 ежедневно</span>
				<span class="span ng-binding">+7 (495) 792-95-60<br>
							+7 (495) 792-95-70</span>
			</div>
			 <div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Долгопрудный, ул. Первомайская, дом 54</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">пн - пт:10.00-20.00<br>
				сб - вс: 10.00-19.00</span>
				<span class="span ng-binding">+7(498) 685-08-34</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Зеленоград, Панфиловский пр-кт. дом 1, 1 эт.</span>
				<span class="span ng-binding">Дом мебели</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7(499) 736-04-39, <br>+7(499) 736-53-08  <br>+7(499) 736-16-79</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Красногорск, ул. Ленина, дом 45, помещение 1, 1 этаж </span>
				<span class="span ng-binding">Салон Мебели</span>
				<span class="span ng-binding">пн-вс: 10:00 - 20:00 </span>
				<span class="span ng-binding">+7(495) 563-86-26<br>+7 (495) 563-04-78</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Красногорский район, поселок Нахабино, ул. Советская, дом 73А.ТЦ "Аверс", 2 этаж, левое крыло </span>
				<span class="span ng-binding">Салон Мебели</span>
				<span class="span ng-binding">пн-вс: 10:00 - 20:00</span>
				<span class="span ng-binding">+7 (495) 566-37-81</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Куровское, ул. Советская, дом 105</span>
				<span class="span ng-binding">Салон Мебели</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7(496) 411-07-96<br> +7(925) 738-40-42</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Лобня, ул. Ленина, дом 9, Цокольный этаж</span>
				<span class="span ng-binding">Шатура-Мебель</span>
				<span class="span ng-binding">пн - пт: 10.00-20.00; cб - вс: 10.00-19.00 </span>
				<span class="span ng-binding">+7(495) 577-33-86</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Люберцы, Жулебино, м. Выхино МКАД, 8 км.(внешняя сторона), д. 3 стр. 1, 2 этаж</span>
				<span class="span ng-binding">Camelgroup в МТЦ “СКАРАБЕЙ”</span>
				<span class="span ng-binding">10:00 - 21:00 ежедневно</span>
				<span class="span ng-binding">+7 (495) 509-96-41<br>+7 (495) 509-96-42</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Мытищи, ул. Юбилейная, дом 24А, под. 1, этаж 1, офис 3. </span>
				<span class="span ng-binding">Дизайн Студия</span>
				<span class="span ng-binding">пн-сб: 10:00 - 19:00 </span>
				<span class="span ng-binding">+7 (903) 775-06-22</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Мытищи, Олимпийский проспект, дом 29, стр. 1, ТЦ "Формат", 3 этаж </span>
				<span class="span ng-binding">Салон "Мир Мебели"</span>
				<span class="span ng-binding">пн-вс: 10:00 - 20:00 </span>
				<span class="span ng-binding">+7 (499) 390-30-48<br>+7 (906) 058-38-02</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Новорижское шоссе, 23 км, д. Покровское, ул. Центральная, 27, ТК "Покровский", 2 этаж</span>
				<span class="span ng-binding">Салон Valest</span>
				<span class="span ng-binding">с 10-00 до 21-00<br> ежедневно</span>
				<span class="span ng-binding">8 (800) 500-56-79</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Ногинский район, поселок Черноголовка, ул. Березовая, дом 24</span>
				<span class="span ng-binding">Белая Ворона</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (903) 177-81-57</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Подольск, проспект Юных Ленинцев, дом 61 (3-й этаж)</span>
				<span class="span ng-binding">ТЦ Шмель</span>
				<span class="span ng-binding">10:00 до 20:00</span>
				<span class="span ng-binding">+7(499) 713-34-37</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Подольск, Симферопольское шоссе, 38 км. 1-й этаж</span>
				<span class="span ng-binding">ТЦ Хамелеон</span>
				<span class="span ng-binding">10:00 до 20:00</span>
				<span class="span ng-binding">+7(963) 990-46-51</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Реутов, ул. Ленина, дом 1А, эт. 2.</span>
				<span class="span ng-binding">Салон мебели Вешняки</span>
				<span class="span ng-binding">Ежедневно: 10.00 до 20.00 </span>
				<span class="span ng-binding">+7(495) 777-91-07<br>+7(985) 121-01-07</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Реутов, м. Новокосино, Юбилейный проспект, дом 30/2, ТЦ "Студия Интерьера", 1 этаж</span>
				<span class="span ng-binding">Салон "Мебель Италии, России"</span>
				<span class="span ng-binding">пн-сб: 10:00 - 20:00<br> вс: 10:00 - 18:00</span>
				<span class="span ng-binding">+7(915) 258-46-46</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Химки, Юбилейный проспект, дом 7А</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">10:00 до 20:00</span>
				<span class="span ng-binding">+7(962) 915-22-22</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Санкт-Петербург</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">МЦ Аквилон, ул. Новолитовская 15к.В, 5 этаж
секция 188 (Merinos, Waterlattex, Naturalmente)
3 этаж секция 80 (Merinos, Rest 9)</span>
				<span class="span ng-binding">ИП Арутюнов</span>
				<span class="span ng-binding">ежедневно 10:00 - 20:00</span>
				<span class="span ng-binding">+7 921 906-79-00<br>8 (812) 670-84-82 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул Кожевенная линия, д.30, INTERLOFT. И.П. ВИКЕРАС Я.С.</span>
				<span class="span ng-binding">МЦ "ГРЕЙТ"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7 (921) 876-20-05</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Марата, д.61</span>
				<span class="span ng-binding">«Элит-мебель»</span>
				<span class="span ng-binding">Пн - Сб: с 10:00 - 20:00<br>
						Вс: с 11:00 - 19:00 </span>
				<span class="span ng-binding">8 (812) 314-10-26</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Варшавская, д.3, 4 этаж, секция 433</span>
				<span class="span ng-binding">«Элит-мебель» в МЦ «Континент»</span>
				<span class="span ng-binding">с 10:00 до 20:00 ежедневно</span>
				<span class="span ng-binding">8 (812) 337-17-63</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">АБАКАН, РЕСП. ХАКАСИЯ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (812) 337-17-63</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">АЛЕКСИН, ТУЛЬСКАЯ ОБЛ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Тульская, дом 136Д, ТЦ «Слобода», бутик 9</span>
				<span class="span ng-binding">Салон «Мадам Подушкина»</span>
				<span class="span ng-binding">9:00 - 17:00 </span>
				<span class="span ng-binding">8 (905) 111-11-07 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Архангельск</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">Магазин "Пальметто"</span>
				<span class="span ng-binding">с 10:00 до 18:00, выходной воскресение</span>
				<span class="span ng-binding">8 (818) 221-54-21 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Белгород</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Белгородского Полка, дом 62. </span>
				<span class="span ng-binding">Салон Мебели "Вилла Деко" </span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (4722) 28-90-82 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Князя Трубецкого, дом 1. </span>
				<span class="span ng-binding">Дизайн-Студия "Мебель Доминика"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (4722) 33-91-85</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Щорса, дом 64А. </span>
				<span class="span ng-binding">Салон Мебели "Вилла Деко" </span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (4722) 28-90-82</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Братск</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (3953) 36-70-76 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">БАЛАКОВО,САРАТОВСКАЯ ОБЛ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Трнавская 24, ТЦ «Грин Хаус», 0-ой этаж</span>
				<span class="span ng-binding">ООО «Хорс» - мультибрендовый магазин матрасов «За матрасом»</span>
				<span class="span ng-binding">Ежедневно с 10.00 до 21.00 ( без перерывов и выходных )</span>
				<span class="span ng-binding">8(927)154-71-30 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Владикавказ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">пр. Коста, дом 180</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (929) 863-36-88</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Владимир</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (922) 24-35-15</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Волгоград</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (442) 33-67-70<br> 33-89-11<br> 33-89-32 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Воронеж</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Урицкого, дом 128</span>
				<span class="span ng-binding">ООО «Сны и сновидения»</span>
				<span class="span ng-binding">Пн-Пт.: 11:00 - 20:00<br> Сб.: 11:00 - 18:00<br> Вс.: выходной.</span>
				<span class="span ng-binding">+ 7 (952) 952-09-03<br> + 7 (473) 238-09-03<br> + 7 (473) 221-09-92<br> + 7 (952) 958-67-09</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Димитрова, дом 74</span>
				<span class="span ng-binding">Мебельный салон Юнион-Воронеж</span>
				<span class="span ng-binding">ПН-ПТ: 09:00-20:00<br>
СБ: 10:00-19:00<br>
ВС: выходной. </span>
				<span class="span ng-binding">8 (473) 226-58-37</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Плехановская, 41 — 1 этаж</span>
				<span class="span ng-binding">Интерьер-бутик «ЭРМИТАЖ»</span>
				<span class="span ng-binding">ежедневно 10:00 – 19:00 </span>
				<span class="span ng-binding">+7 (473) 271‒71‒91</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Грозный</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ИП Чалаева</span>
				<span class="span ng-binding">с 9:00 до 19:00 без выходных</span>
				<span class="span ng-binding">8 (963) 584-51-16 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Екатеринбург</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Ленина, дом 56</span>
				<span class="span ng-binding">Демонстрационный салон-магазин Magniflex</span>
				<span class="span ng-binding">понедельник-пятница с 10.00 до 20.00<br>
суббота-воскресение с 11.00 до 19.00 </span>
				<span class="span ng-binding">8 (343) 346-93-10<br>8 (912) 24-58-898</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Киров</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Герцена, дом 9</span>
				<span class="span ng-binding">Мебельный салон "Алькасар"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (8332) 64-72-13<br> 64-15-94<br> 8 (963) 000-51-51</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">КАБАРДИНО-БАЛКАРия</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Нальчик, ул. Головко, дом 12а</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (88662) 42-13-74</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Нальчик, ул. Ногмова, дом 80</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (88662) 72-22-12</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Нальчик, ул. Пачева, дом 50</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (928) 700-85-98</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Нальчик, ул. Богдана Хмельницкого, дом 41</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (928) 720-58-41</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Нальчик, Затишье, район травмпункта</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (938) 076-65-34</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Прохладный, ул. Ленина, дом 72</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (928) 915-99-48</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Терек, ул. Ленина, дом 37</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (938) 915-71-22</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Баксан, ул. Ленина, дом 5</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (929) 885-12-41</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Нарткала, ул. Шекихачева, дом 3</span>
				<span class="span ng-binding">Салоны «ОРТЕСС» </span>
				<span class="span ng-binding">Ежедневно 9:00 - 19:00 (без перерывов)</span>
				<span class="span ng-binding">8 (928) 694-55-21</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Краснодар</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул.Тополиная, д.36</span>
				<span class="span ng-binding">Студия матрасов "ГудСон"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7 (989) 829-00-29</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Краснодарский край, поселок Лазаревский, ул. Калараш, дом 145</span>
				<span class="span ng-binding">Салон "Матрасы и Аксессуары"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (8622) 36-24-42<br> 8 (918) 916-56-75</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Дзержинского 100, Мегацентр «Красная Площадь», 3 этаж, секция С-167 </span>
				<span class="span ng-binding">Салон «СОМОВО МЕБЕЛЬ/CLASSICO ITALIANO»</span>
				<span class="span ng-binding">с понедельника по воскресенье с 10:00 до 22:00</span>
				<span class="span ng-binding">+7-967-311-34-74<br> +7-918-024-63-36</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">Красноярск</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Красной Звезды, д. 1</span>
				<span class="span ng-binding">Студия мебели "Матрасы и Кровати"</span>
				<span class="span ng-binding">Ежедневно с 9 до 21 часов без обеда и выходных</span>
				<span class="span ng-binding">8 (391) 297-28-11<br> 8 (923) 334-05-55</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ЛИПЕЦК</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">пл. Заводская, дом 1</span>
				<span class="span ng-binding">Мебельный салон Юнион-Липецк</span>
				<span class="span ng-binding">ПН-ПТ: 10:00-20:00, СБ: 10:00-19:00, ВС: выходной</span>
				<span class="span ng-binding">8 (4742) 36-49-49</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">НИЖНИЙ НОВГОРОД</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Рождественская, дом 13, БЦ "Муравей", 2-ой этаж</span>
				<span class="span ng-binding">Мебельный салон "CORSO ITALIA" </span>
				<span class="span ng-binding">ПН-СБ 10:00-19:00, ВС выходной</span>
				<span class="span ng-binding">8 (831) 461-80-94<br> (831) 461-81-94<br> (831) 461-80-93</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ИП Шарова Л.А</span>
				<span class="span ng-binding">8.00-22.00 без выходных </span>
				<span class="span ng-binding">8 (831) 415-51-52<br> 415-78-67</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">б. Мира, дом 17а</span>
				<span class="span ng-binding">Мебельный салон Юнион-Нижний Новгород</span>
				<span class="span ng-binding">ПН-ПТ: 10:00-20:00, СБ: 10:00-19:00, ВС: выходной </span>
				<span class="span ng-binding">277-51-95<br> 8 (831) 246-82-70</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">НОВОСИБИРСК</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Красный проспект, дом 99, "Центр Здорового Сна"</span>
				<span class="span ng-binding">Салон "Матрасы и Кровати"</span>
				<span class="span ng-binding">Понедельник - Пятница: 11.00-19.00<br>
Суббота: 11.00-18.00<br>
Воскресенье: 11.00 до 17.00</span>
				<span class="span ng-binding">8 (383) 220-88-10<br> 8 (913) 987-82-49</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Станционная, дом 62, Салон "Матрасы и Кровати", 1 эт</span>
				<span class="span ng-binding">Салон "Ортофлекс"</span>
				<span class="span ng-binding">Понедельник - Пятница: 10.00-20.00<br>
Суббота: 11.00-16.00<br>
Воскресенье: выходной.</span>
				<span class="span ng-binding">8 (383) 380-08-16<br> 380-95-16</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Светлановская, дом 50, ТВК "Большая Медведица", 2 этаж, отдел "Ортофлекс"</span>
				<span class="span ng-binding">Салон "Ортофлекс"</span>
				<span class="span ng-binding">10:00-21:00, без обеда и выходных</span>
				<span class="span ng-binding">8 (383) 380-81-16</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Новосибирск, ул. Фрунзе, д.228</span>
				<span class="span ng-binding">Студия «Мебели Лекса» </span>
				<span class="span ng-binding">Понедельник - Суббота: 10:00 – 19:00<br>
Воскресенье: выходной </span>
				<span class="span ng-binding">+7 (383) 362-28-30<br> +7 (913) 921-92-10</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">НИЖНий ТАГИЛ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Октябрьской революции, дом 66, ЦУМ, 5 этаж, МАТРАС-ЦЕНТР</span>
				<span class="span ng-binding">ИП Корнев Д.Н.</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (912) 287-33-77 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">МИРНЫЙ </h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул звездная 48\2</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (914) 257-98-89 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ОРЕНБУРГ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">Шарлыкское шоссе, дом 1. салон "Davidoff" </span>
				<span class="span ng-binding">Мегамолл "Армада" Галерея Лувр</span>
				<span class="span ng-binding">с 10:00 до 22:00</span>
				<span class="span ng-binding">8 (3532) 61-84-95<br> 20-16-73</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ПЕРМь</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Кронштадская, дом 29</span>
				<span class="span ng-binding">ООО "МНК"</span>
				<span class="span ng-binding">будни с 9-00 до 18-00</span>
				<span class="span ng-binding">+7 (950) 450-52-25</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">РОСТОВ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7 (950) 450-52-25</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">РОСТОВ-НА-ДОНУ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Закруткина 2/2</span>
				<span class="span ng-binding">ИП Драгунов Алексей Сергеевич</span>
				<span class="span ng-binding">Вт. – Пт.: 10:00 – 19:00, Сб. – Вс.: 10:00 – 18:00, Пн.: - выходной день</span>
				<span class="span ng-binding"> 229-97-59, 270-13-47, 8-938-123-83-88 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">пр.Буденновский, 83</span>
				<span class="span ng-binding">"Студия матрасов Дрёма» / ИП Федоров Алексей Михайлович</span>
				<span class="span ng-binding">Пн.-Пт.: с 10:00 - 18:00, Сб.: 10:00 – 17:00, Воскресенье: выходной</span>
				<span class="span ng-binding">+7 (863) 2200-200, (863) 2907-000</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">СОЧИ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул.Транспортная, дом 28, 1 этаж</span>
				<span class="span ng-binding">ООО "Сфера-1"</span>
				<span class="span ng-binding">10.00 - 21.00 без перерывов и выходных</span>
				<span class="span ng-binding">8(8622) 25-87-53, 8 918 404 70 99</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ИП Королев В.В.</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 918 207 39 39</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">СОЧИ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул.Транспортная, дом 28, 1 этаж</span>
				<span class="span ng-binding">ООО "Сфера-1"</span>
				<span class="span ng-binding">10.00 - 21.00 без перерывов и выходных</span>
				<span class="span ng-binding">8(8622) 25-87-53, 8 918 404 70 99</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ИП Королев В.В.</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 918 207 39 39</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">СТАРый ОСКОЛ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">мкр. Надежда, дом 5, ТЦ «Всё для Вас» 1 эт, пав. 4</span>
				<span class="span ng-binding">Мастерская матрасов « Mr. Mattress» </span>
				<span class="span ng-binding">Понедельник - Пятница: 10.00-19.00<br>
Суббота: 10.00-18.00<br>
Воскресенье: выходной </span>
				<span class="span ng-binding">8 (980) 374-24-10<br> 8 (929) 000-05-79</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">СЫКТЫВКАР</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (8212) 20-00-96 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ТАМБОВ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Советская, дом 34</span>
				<span class="span ng-binding">Мебельный салон Юнион-Тамбов	</span>
				<span class="span ng-binding">ПН-ПТ: 10:00-20:00, СБ: 10:00-19:00, ВС: выходной</span>
				<span class="span ng-binding">8 (4752) 75-51-12</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ТВЕРь</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">с 9:00 до 17:00</span>
				<span class="span ng-binding">8 (4822) 32-26-26 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ТОМСКЕ</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ИП Майснер В.</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (913) 899-94-81</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Яковлева, дом 23</span>
				<span class="span ng-binding">Салон мягкой мебели "Ля Рошель"</span>
				<span class="span ng-binding">С 10.00-19.00 без выходных </span>
				<span class="span ng-binding">8 (3822) 65-76-76</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ТУЛА</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Л. Толстого, дом 91-А</span>
				<span class="span ng-binding">Мебельный салон "Элит"</span>
				<span class="span ng-binding">Понедельник - Пятница: 10.00-19.00<br>
Суббота: 11.00-17.00<br>
Воскресенье: выходной</span>
				<span class="span ng-binding">8 (4872) 31-97-81</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Коминтерна, дом 24г</span>
				<span class="span ng-binding">Мебельный салон "Элит"</span>
				<span class="span ng-binding">с 10 до 19 часов, без выходных</span>
				<span class="span ng-binding">8 (4872) 70-29-51</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Тульская, дом 136Д, ТЦ «Слобода», бутик 9</span>
				<span class="span ng-binding">Салон «Мадам Подушкина»</span>
				<span class="span ng-binding">9:00 - 17:00 </span>
				<span class="span ng-binding">8 (905) 111-11-07 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ТЮМЕНь</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"> ул. Максима Горького, дом 68, корпус 3</span>
				<span class="span ng-binding">СТУДИЯ MOBILI</span>
				<span class="span ng-binding"> с понедельника по субботу с 11:00 до 19:00 </span>
				<span class="span ng-binding">+7 (3452) 97-07-93</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"> ул. 30 лет Победы, дом 7, стр.5, 1 этаж</span>
				<span class="span ng-binding">Салон ортопедич. матрасов и кроватей "Матрэкс"-ТЦ "Магнат"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (3452) 75-47-74 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Авторемонтная, дом 45, стр.4 </span>
				<span class="span ng-binding">Салон "Матрасы и аксессуары", салон "Матрэкс"</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (3452) 43-37-24<br> 8 (3452) 74-48-19 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">УЛЬЯНОВСК</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Радищева, дом 100</span>
				<span class="span ng-binding">Салон «NEW STANDART»</span>
				<span class="span ng-binding"> с 9:00 до 17:00 </span>
				<span class="span ng-binding">8 (8422) 73-64-40<br> 8 (8422) 73-64-41<br> 8 (951) 096-37-10<br> 8 (906) 144-75-33 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ООО «СТЭК»</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (8422) 73-64-41 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Урицкого, д. 58 </span>
				<span class="span ng-binding">ТД «ТРОЯ»</span>
				<span class="span ng-binding">с 9:00 до 18:00</span>
				<span class="span ng-binding">8 (8422) 27-33-46  </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Пушкарева, д.11, корпус 2 </span>
				<span class="span ng-binding">ТЦ «САРАЙ»</span>
				<span class="span ng-binding">ежедневно, с 9:00 до 20:00</span>
				<span class="span ng-binding">8 (8422) 37-02-50 </span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Промышленная, д. 2 </span>
				<span class="span ng-binding">ТЦ «ИМПЕРИЯ МЕБЕЛИ»</span>
				<span class="span ng-binding">пн-вс, с 9:30 до 19:00</span>
				<span class="span ng-binding">8 (8422) 62-49-88  </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">УФА</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7(347) 2912-616 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ХАБАРОВСК</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ООО «Астрид»</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (4212) 57-79-12 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ЧЕЛЯБИНСК</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ул. Бр. Кашириных, дом 102-83</span>
				<span class="span ng-binding">ООО «СТМ»</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (351) 270-82-18</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht"></span>
				<span class="span ng-binding">ИП "Ерохин А.В."</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (351) 270-50-72<br> 252-42-74</span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ЮЖНО-САХАЛИНСК</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">	</span>
				<span class="span ng-binding">ООО «Дом Мебели»</span>
				<span class="span ng-binding">с 9-30 до 18-30 воскресение выходной</span>
				<span class="span ng-binding">8 (4242) 72-28-18</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">ЮЖНО-САХАЛИНСК, ЛЕНИНА, 321/1</span>
				<span class="span ng-binding">Интерьер салон "Green Street",ИП Киселев.</span>
				<span class="span ng-binding">Ежедневно 9:00 – 21:00</span>
				<span class="span ng-binding">8 (4242) 277-2-50<br> 8 (962) 112-79-49 </span>
			</div>
		</div>
</div>
<div style="max-width: 1200px">
		<h3 class="city-shop-title">ЯЛТА</h3>
		<div class="sf_neighbours_list" style="width: 100%;">
			<div class="sf_neighbours_list_title">
				<span class="span">адрес</span>
				<span class="span">магазин</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span ng-binding textinht">г. Ялта, ул. Большевистская 10, ТЦ Конфетти 	</span>
				<span class="span ng-binding">Мебельный салон "Арт Мастер" Адрес</span>
				<span class="span ng-binding">Понедельник - Суббота с 9:00 до 19:00<br>
Воскресенье - выходной </span>
				<span class="span ng-binding">8 (978) 949-34-58</span>
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
			'address' => 'russia2',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс 2',
			'name' => 'Россия',
			'left_sidebar' => 'adresa-magazinov',
			'title' => '2Магазины Magniflex в России | Магнифлекс',
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
		<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			 <span>Официальные дилеры и представители:</span>
			 <span>
<select method="post" class="hnb_changtaver" name="items" onchange="top.location=this.value">
                       <option value="0">Выберите Ваш регион
                        </option><option value="/o-magniflex/moscow/">Москва
						</option><option value="/o-magniflex/russia/sankt-peterburg/">Санкт-Петербург
                        </option><option value="/o-magniflex/russia/arkhangelskaya-obl/">Архангельская обл
						</option><option value="/o-magniflex/russia/bashkorstan/">Башкортостан
						</option><option value="/o-magniflex/russia/belgorodskaya-obl/">Белгородская область
						</option><option value="/o-magniflex/russia/vladimirskaya-obl/">Владимирская область
						</option><option value="/o-magniflex/russia/volgogradskaya-obl/">Волгоградская область
						</option><option value="/o-magniflex/russia/vologodskaya-obl/">Вологодская область
						</option><option value="/o-magniflex/russia/voronezhskaya-obl/">Воронежская область
						</option><option value="/o-magniflex/russia/irkutskaya-obl/">Иркутская область
						</option><option value="/o-magniflex/russia/kabardino-balkariya/">Кабардино-Балкария
						</option><option value="/o-magniflex/russia/kemerovskaya-obl/">Кемеровская область
						</option><option value="/o-magniflex/russia/kirovskaya-obl/">Кировская область
						</option><option value="/o-magniflex/russia/krasnodarskiy-kray/">Краснодарский край
						</option><option value="/o-magniflex/russia/krasnoyarskiy-kray/">Красноярский край
                        </option><option value="/o-magniflex/russia/krim/">Крым
                        </option><option value="/o-magniflex/russia/kurskaya-obl/">Курская область
						</option><option value="/o-magniflex/russia/leningradskaya-obl/">Ленинградская область
						</option><option value="/o-magniflex/russia/lipetskaya-obl/">Липецкая область
                        </option><option value="/o-magniflex/russia/moskovskaya-oblast/">Московская область
						</option><option value="/o-magniflex/russia/nizhegoroskaya-obl/">Нижегородская область
						</option><option value="/o-magniflex/russia/novosibirskaya-obl/">Новосибирская область
						</option><option value="/o-magniflex/russia/orenburgskaya-obl/">Оренбургская область
						</option><option value="/o-magniflex/russia/penzenskaya-obl/">Пензенская область
						</option><option value="/o-magniflex/russia/permskii-kray/">Пермский край
						</option><option value="/o-magniflex/russia/rostovskaya-obl/">Ростовская область
						</option><option value="/o-magniflex/russia/saratovskaya-obl/">Саратовская область
						</option><option value="/o-magniflex/russia/sahalinskaya-obl/">Сахалинская область
						</option><option value="/o-magniflex/russia/sevastopol/">Севастополь
						</option><option value="/o-magniflex/russia/sverdlovskaya-obl/">Свердловская область
						</option><option value="/o-magniflex/russia/severnaya-osetiya/">Северная Осетия - Алания
						</option><option value="/o-magniflex/russia/tambovskaya-obl/">Тамбовская область
						</option><option value="/o-magniflex/russia/tverskaya-obl/">Тверская область
						</option><option value="/o-magniflex/russia/tomskaya-obl/">Томская область
						</option><option value="/o-magniflex/russia/tulskaya-obl/">Тульская область
						</option><option value="/o-magniflex/russia/tyumenskaya-obl/">Тюменская область
						</option><option value="/o-magniflex/russia/ulyanovskaya-obl/">Ульяновская область
						</option><option value="/o-magniflex/russia/khabarovskii-kray/">Хабаровский край
						</option><option value="/o-magniflex/russia/chelyabinskaya-obl/">Челябинская область
						</option><option value="/o-magniflex/russia/chechnya/">Чеченская республика
				</option>
				</option>
</select>
			 </span><br />
 <br />
		</p>
		<div class="hnb_altawer">
			<div class="hnb_altawerlft">
				<div>
					<span>А</span>
					<a href="/o-magniflex/russia/arkhangelskaya-obl/">Архангельская обл</a><br />
				</div>
				<div>
					<span>Б</span>
					<a href="/o-magniflex/russia/bashkorstan/">Башкорстан</a><br />
					<a href="/o-magniflex/russia/belgorodskaya-obl/">Белгородская обл</a><br />
				</div>
				<div>
					<span>В</span>
					<a href="/o-magniflex/russia/vladimirskaya-obl/">Владимирская обл</a><br />
					<a href="/o-magniflex/russia/volgogradskaya-obl/">Волгоградская обл</a><br />
					<a href="/o-magniflex/russia/vologodskaya-obl/">Вологодская обл</a><br />
					<a href="/o-magniflex/russia/voronezhskaya-obl/">Воронежская обл</a><br />
				</div>
				<div>
					<span>И</span>
					<a href="/o-magniflex/russia/irkutskaya-obl/">Иркутская обл</a><br />

				</div>
				<div>
					<span>К</span>
					<a href="/o-magniflex/russia/kabardino-balkariya/">Кабардино-Балкария</a><br />
					<a href="/o-magniflex/russia/kemerovskaya-obl/">Кемеровская обл</a><br />
					<a href="/o-magniflex/russia/kirovskaya-obl/">Кировская обл</a><br />
					<a href="/o-magniflex/russia/krasnodarskiy-kray/">Краснодарский край</a><br />
					<a href="/o-magniflex/russia/krasnoyarskiy-kray/">Красноярский край</a><br />
					<a href="/o-magniflex/russia/krim/">Крым</a><br />
					<a href="/o-magniflex/russia/kurskaya-obl/">Курская обл</a><br />
				</div>
				<div>
					<span>Л</span>
					<a href="/o-magniflex/russia/leningradskaya-obl/">Ленинградская обл</a><br />
					<a href="/o-magniflex/russia/lipetskaya-obl/">Липецкая обл</a><br />
				</div>
				<div>
					<span>М</span>
					<a href="/o-magniflex/moscow/">Москва</a><br />
					<a href="/o-magniflex/russia/moskovskaya-oblast/">Московская обл</a><br />
				</div>
				<div>
					<span>Н</span>
					<a href="/o-magniflex/russia/nizhegoroskaya-obl/">Нижегородская обл</a><br />
					<a href="/o-magniflex/russia/novosibirskaya-obl/">Новосибирская обл</a><br />
				</div>
			</div>
			<div class="hnb_altawerrig">
				<div>
					<span>О</span>
					<a href="/o-magniflex/russia/orenburgskaya-obl/">Оренбургская обл</a><br />
				</div>
				<div>
					<span>П</span>
					<a href="/o-magniflex/russia/penzenskaya-obl/">Пензенская обл</a><br />
					<a href="/o-magniflex/russia/permskii-kray/">Пермский край</a><br />
				</div>
				<div>
					<span>Р</span>
					<a href="/o-magniflex/russia/rostovskaya-obl/">Ростовская обл</a><br />
				</div>
				<div>
					<span>С</span>
					<a href="/o-magniflex/russia/sankt-peterburg/">Санкт-Петербург</a><br />
					<a href="/o-magniflex/russia/saratovskaya-obl/">Саратовская обл</a><br />
					<a href="/o-magniflex/russia/sahalinskaya-obl/">Сахалинская обл</a><br />
					<a href="/o-magniflex/russia/sverdlovskaya-obl/">Свердловская обл.</a><br />
					<a href="/o-magniflex/russia/sevastopol/">Севастополь</a><br />
					<a href="/o-magniflex/russia/severnaya-osetiya/">Северная Осетия-Алания</a><br />
				</div>
				<div>
					<span>Т</span>
					<a href="/o-magniflex/russia/tambovskaya-obl/">Тамбовская обл</a><br />
					<a href="/o-magniflex/russia/tverskaya-obl/">Тверская обл</a><br />
					<a href="/o-magniflex/russia/tomskaya-obl/">Томская обл</a><br />
					<a href="/o-magniflex/russia/tulskaya-obl/">Тульская обл</a><br />
					<a href="/o-magniflex/russia/tyumenskaya-obl/">Тюменская обл</a><br />
				</div>
				<div>
					<span>У</span>
					<a href="/o-magniflex/russia/ulyanovskaya-obl/">Ульяновская обл</a><br />
				</div>
				<div>
					<span>Х</span>
					<a href="/o-magniflex/russia/khabarovskii-kray/">Хабаровский край</a><br />
				</div>
				<div>
					<span>Ч</span>
					<a href="/o-magniflex/russia/chelyabinskaya-obl/">Челябинская обл</a><br />
					<a href="/o-magniflex/russia/chechnya/">Чеченская республика</a><br />
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
			'address' => 'vacuum-packing',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Итальянские вакуумные матрасы Magniflex',
			'left_sidebar' => 'production',
			'title' => 'Итальянские вакуумные матрасы Magniflex. Вакуумная упаковка | Магнифлекс',
			'description' => '',
			'keywords' => '',
			'text' => '
<p  >Позволим себе немного разбавить сухой, официальный текст о  вакуумных матрасах живым русским языком.  </p>
<h3  >Чем интересна вакуумная упаковка? Почему это изобретение  буквально взорвало мировой рынок матрасов и вывело Magniflex в Лидеры, оставив  всех конкурентов далеко позади на многие годы действия патента? </h3><br />
<p>Представьте себе, Италия. Начало 70-х годов прошлого века. Компания Magniflex (Магнифлекс).  Молодая, амбициозная, есть талантливые специалисты, есть желание работать, есть  небольшая фабрика. Прошло всего 10 лет с  момента основания, но фирма уже известна по всей  Италии, правда, пока ни чем особенно значимым на фоне  конкурентов не выделяется. Зато принимается решение о создании своей собственной научной лаборатории, по изучению "науки сна", ведущая исследовательские работы над новыми технологиями, изучающая новые материалы для производства передовых матрасов. На работу приглашаются ведущие специалисты и ученые.  Приблизительно в это время, по легенде, основателю компании  Джулиано Магни, наблюдавшему за тем, как несколько рабочих пытаются перенести  один матрас из одного угла в другой, приходит в голову гениальная идея:  "надо сделать матрас компактным". Ведь матрас практически полый  изнутри. Например, если проехаться по матрасу катком - по форме он станет больше похожим  на простынку, которую затем можно свернуть в рулон, взять подмышку и легко  перемещать куда угодно. Вопрос только в том, как потом снова из получившейся  "простынки" восстановить матрас. На этот вопрос через несколько лет и дали ответ специалисты лаборатории.  Компания получила патент на изобретение в большинстве стран мира. И начала  выпускать скрученные матрасы в вакуумной упаковке. Такая упаковка решила и еще одну  проблему - чистоты. Матрас попадал клиенту домой буквально стерильно чистым. И  люди не только в Италии, но и во всем мире стали отдавать предпочтение матрасам  Magniflex. Это была революция. Так за достаточно короткий период времени компания стала мировым  лидером. С тех самых пор  Magniflex прочно закрепила за собой звание "законодателя мод в мире матрасов".</p>
<p >И это не единственное  знаковое изобретение компании. Мы были первыми, кто начал производить  "матрасы с памятью", используя в качестве наполнителя материалы  Memory и Memoform, мы первые, кто вывел на рынок "золотой матрас". На мировых выставках в Париже, Милане, Токио и Нью-Йорке наш стенд всегда традиционно собирает толпы народа. Ежегодно мы патентуем десятки новых  изобретений, позволяющие нам производить, пожалуй, лучшие матрасы в мире.  </p>
<h3>Вакуумные матрасы - легкость транспортировки и защита окружающей среды!</h3>
<br />
<p>
На протяжении всей своей истории компания Magniflex (Италия) руководствовалась следующими принципами:<br /><br />
- высочайшее качество продукции;<br />
- самый высокий уровень гигиены продукции, исключительно природные материалы и натуральные технологии;<br />
- забота и защита окружающей среды, экологичность производства.
<br /><br />
Еще в далеком 1986 годы именно мы изобрели и запатентовали технологию вакуумной упаковки матрасов. Это изобретение позволило решить сразу несколько проблем и предоставило нашим матрасам преимущества: легкость транспортировки, стерильный уровень гигиены продукции, защита окружающей среды. </p>
<h3>Вакуумная упаковка</h3>
    <h3>Инструкция</h3>
  <p>Все ортопедические матрасы Magniflex поставляются в виде скрученного рулона в вакуумной гигиенически чистой упаковке, что позволяет легко транспортировать двуспальные матрасы в легковом автомобиле, а односпальные и на общественном транспорте, поскольку объем изделия уменьшается на 90%. После распаковки матраса аккуратно потяните за край, матрас развернется и  восстановит свой изначальный объем. Для полноценной эксплуатации матраса необходимо подождать 8-10 часов. </p>
<br />
  <img src="/img/vacuum_up.jpg" alt="преимущества вакуумной упаковки итальянских матрасов Magniflex">
  <p>Для распаковки матраса выполните следующие действия:<br /><br />
1. Положите скрученный матрас на основание (на кровать); <br />
2. Аккуратно вскройте упаковку. Чтобы не повредить матрас, старайтесь не использовать при этом очень острые предметы; <br />
3. Потяните за край - матрас развернется; <br />
4. Подождите некоторое время, пока матрас восстановит свой первоначальный объем;<br />
5. Для полноценной эксплуатации матраса необходимо подождать 8-10 часов; <br />
6. Наслаждайтесь здоровым и комфортным сном!
<br /><br />
<img src="/img/vacuum_in.jpg" alt="вакуумная упаковка матрасов Magniflex матрацы вакуумные матрасы">
</p>
			'
		),
		/* сравнение и коллекции елитных матрасов */
		array(
			'address' => 'sravnenie-matrasov',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Удобное сравнение матрасов',
			'left_sidebar' => '',
			'title' => 'Сравнение ортопедических матрасов Magniflex',
			'description' => 'Здесь Вы можете провести сравнение ортопедических матрасов Magniflex',
			'keywords' => 'сравнение, матрас, ортопедический',
			'text' => '
			<div class="hnb_contarea">
<h3>Удобное сравнение ортопедических матрасов Magniflex</h3>
<div class="sr_sizes">
<div>
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
				Подробности в акции
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
					подробности и сроки по ссылке - <a href="/pokupatelyam/dostavka/">доставка Magnfflex</a><br />
				</div>
				<div style="clear:both;"></div>
				<a class="close" rel="nofollow" href="javascript:void(0)" onclick="$(\'#hnb_textbottomb3\').slideUp();"></a>
			</div>
					</div><div class="clear"></div>
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
	</table>
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

			<a href="/img/product/big/Merino (Merinos).jpg" class="boxer"><img src="/img/product/very_small/Merino (Merinos).jpg" alt="Ортопедический матрас Magniflex Merino (Merinos)" /></a>
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
			<img src="/img/merinos2.png" alt="Состав ортепедического матраса Magniflex Merino (Merinos)"/>
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
			<a href="/img/product/big/Merino Green Tea.jpg" class="boxer"><img src="/img/product/very_small/Merino Green Tea.jpg" alt="Ортопедический матрас Magniflex Merino Green Tea" /></a>
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
			<img src="/img/greentea.png" alt="Состав ортепедического матраса Magniflex Merino Green Tea" />
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
			<a href="/img/product/big/Bamboo.jpg" class="boxer"><img src="/img/product/very_small/Bamboo.jpg" alt="Ортопедический матрас Magniflex Bamboo" /></a>
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
			<img src="/img/greentea.png" alt="Состав ортепедического матраса Magniflex Bamboo">
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
			<a href="/img/product/big/WaterLattex.jpg" class="boxer"><img src="/img/product/very_small/WaterLattex.jpg" alt="Ортопедический матрас Magniflex WaterLattex" /></a>
			<div>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/waterlattex/">
						Подробно
					</a>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/waterlattex/">
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
			<img src="/img/snewcomfort.png" alt="Состав ортепедического матраса Magniflex WaterLattex">
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

		<span class="block_firstna">Naturalmente</span>
			<a href="/img/product/big/New NaturComfort.jpg" class="boxer"><img src="/img/product/very_small/New NaturComfort.jpg" alt="Ортопедический матрас Magniflex New NaturComfort" /></a>
			<div>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/new-naturcomfort/">
						Подробно
					</a>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/new-naturcomfort/">
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
			<img src="/img/naturcomfort.png" alt="Состав ортепедического матраса Magniflex New NaturComfort">
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
		<span class="hnb_textdistit">Naturalmente</span>
	</td>
</tr>
	<tr id="hnb_tabsosdis6">
		<td class="imgtovkup colorbkfb">
		<div id="hnb_butdisplblock6" onclick="document.getElementById(\'hnb_tabsosdis6\').style.display=\'none\'; document.getElementById(\'hnb_closetab6\').style.display=\'table-row\';">скрыть</div>

		<span class="block_firstna">Natur Baci</span>
			<a href="/img/product/big/Natur Baci.jpg" class="boxer"><img src="/img/product/very_small/Natur Baci.jpg" alt="Ортопедический матрас Magniflex Natur Baci" /></a>
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
			<img src="/img/baci.png" alt="Состав ортепедического матраса Magniflex Natur Baci">
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

		<span class="block_firstna">Orthomemo Merino</span>
			<a href="/img/product/big/Memo Merino.jpg" class="boxer"><img src="/img/product/very_small/Memo Merino.jpg" alt="Ортопедический матрас Magniflex Orthomemo Merino" /></a>
			<div>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/memo-merino/">
						Подробно
					</a>
			<a class="hnb_butelitmat" href="/catalog/orthopedic_mattresses/memo-merino/">
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
			<img src="/img/memo.png" alt="Состав ортепедического матраса Magniflex Orthomemo Merino">
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
		<span class="hnb_textdistit7">Orthomemo Merino</span>
	</td>
</tr>
</table>

</div></div>
			'
		),
		array(
			'address' => 'sravnenie-elitnyh-matrasov',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Удобное сравнение элитных матрасов',
			'left_sidebar' => '',
			'title' => 'Сравнение элитных матрасов Magniflex',
			'description' => 'Здесь Вы можете провести сравнение ортопедических элитных матрасов Magniflex',
			'keywords' => 'сравнение, матрас, ортопедический, элитный',
			'text' => '
			<div class="hnb_contarea">
<h3>Удобное сравнение ортопедических элитных матрасов Magniflex</h3>
<div class="sr_sizes">
<div>
<a href="javascript:void(0)" rel="nofollow" onclick="$(\'.sr_sizes > div > div\').slideUp(); $(\'#hnb_textbottomb2\').slideDown();">25% скидка на подушки</a>
<a href="javascript:void(0)" rel="nofollow" onclick="$(\'.sr_sizes > div > div\').slideUp(); $(\'#hnb_textbottomb3\').slideDown();">Бесплатная доставка</a>
<select class="inputAelit" id="doborFieldElit">
					  <!--{products_sravnenie_optionselit}-->
					</select>
					<span class="hnb_hzvsr">Выберите размер:</span>
					<div id="hnb_textbottomb1" style="display: none;">
					<img src="/img/bestpr.png" class="img3"/>
			<div>
				Мы, как единственное официальное представительство Magniflex в России, ГАРАНТИРУЕМ, что цена в нашем интернет-магазине является самой низкой, а условия покупки - самые лучшие.<br />
				Если Вам где-то предложат условия лучше - обратитесь к нам. Мы сделаем их еще лучше.<br />
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
					подробности и сроки по ссылке - <a href="/pokupatelyam/dostavka/">доставка Magnfflex</a><br />
				</div>
				<div style="clear:both;"></div>
				<a class="close" rel="nofollow" href="javascript:void(0)" onclick="$(\'#hnb_textbottomb3\').slideUp();"></a>
			</div>
					</div><div class="clear"></div>
	<table class="hnb_tabsrv elit_sravon" cellspacing="0">
	<tr class="firnamsvoi">
		<td style="background:#fbfbfb; font-weight:bold;">
			Матрасы
		</td>
		<td class="" style="width: 58px!important;">
			Жесткость
		</td>
		<td class="" style="width: 42px!important;">
			Высота
		</td>
		<td class="" style="width: 26px!important;">
			Dual
		</td>
		<td class="" style="width: 32px!important;">
		Зима/лето
		</td>
		<td class="" style="width: 58px!important;">
		Чехол
		</td>
		<td class="" style="width: 72px!important;">
		Ткань чехла
		</td>
		<td class="" style="width: 94px!important;">
		Состав
		</td>
		<td class="">
		Описание
		</td>
	</tr>
	</table>
					</div>
				<div class="hnb_tablelement">
<table class="hnb_tabsrv elit_sravon" cellspacing="0">
	<tr class="firnamsvoi">
		<td style="background:#fbfbfb; font-weight:bold;">
			Матрасы
		</td>

		<td class="">
			Жесткость
		</td>
		<td class="">
			Высота
		</td>
		<td class="">
			Dual
		</td>
		<td class="">
		Зима/лето
		</td>
		<td class="">
		Чехол
		</td>

		<td class="">
		Ткань чехла
		</td>
		<td class="">
		Состав
		</td>
		<td class="">
		Описание
		</td>
	</tr>
	<tr id="hnb_tabsosdis">
		<td class="imgtovkup">
		<div id="hnb_butdisplblock" onclick="document.getElementById(\'hnb_tabsosdis\').style.display=\'none\'; document.getElementById(\'hnb_closetab\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">Rest 9</span>
			<a href="/catalog/elitnye-rest/Rest-9/" class="boxer"><img src="/img/product/very_small/Rest 9.jpg" alt="Rest9 - cравнение элитных матрасов Magniflex" /></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-rest/Rest-9/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice1">64 600</span> руб.
			</div>
		</td>
		<td class="trbkeee">
		3
		</td>
		<td class="trbkeee">
		23
		</td>
		<td class="trbkeee">
		-
		</td>
		<td class="trbkeee">
		нет
		</td>
		<td class="trbkeee">
			несъемный

		</td>
		<td class="trbkeee">
		viscosa
		</td>
		<td class="trbkeee">
			Memory 2 см Super Soft Fiber Elioform 18 см
		</td>
		<td class="trbkeee">
			Оригинальная окантовка чехла матраса, рисунок флорентийских лилий черного цвета. Элитная серия 2014 год. Сверху со стороны мемори мягче (верхняя сторона). Чуть более мягкий матрас, чем натуркомфорт.
		</td>
	</tr>
	<tr id="hnb_closetab">
		<td colspan="1">
			<div onclick="document.getElementById(\'hnb_closetab\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis\').style.display=\'table-row\'; document.getElementById(\'hnb_butdisplblock\').style.display=\'block\';"> открыть</div>
	    </td>
		<td  class="trbkeee" colspan="9">
			<span class="hnb_textdistit">Rest 9</span>
		</td>
	</tr>
	<tr id="hnb_tabsosdis2">
		<td class="imgtovkup colorbkfb">
		<div id="hnb_butdisplblock2" onclick="document.getElementById(\'hnb_tabsosdis2\').style.display=\'none\'; document.getElementById(\'hnb_closetab2\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">Rest 10</span>
		<a href="/catalog/elitnye-rest/Rest-10/" class="boxer"><img src="/img/product/very_small/Rest 10.jpg" alt="Rest10 - cравнение элитных матрасов Magniflex" /></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-rest/Rest-10/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice2">20 700</span> руб.
			</div>
		</td>
		<td>
3/4

		</td>
		<td>
25

		</td>
		<td>
		-
		</td>
		<td>
		нет
		</td>
		<td>
			несъемный
		</td>
		<td>
		viscosa
		</td>
		<td>
Memory 2 см, Super Soft Fiber, Elioform 3 см, Eliosoft 18 см

		</td>
		<td>
Оригинальная окантовка чехла матраса, рисунок флорентийских лилий черного цвета. Элитная серия 2014 год. Со стороны мемори мягче (верхняя сторона). Более мягкий матрас, чем рест 9 благодаря основному слою Eliosoft.

		</td>
	</tr>
	<tr id="hnb_closetab2">
	<td class="colorbkfb" colspan="1">
		<div onclick="document.getElementById(\'hnb_closetab2\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis2\').style.display=\'table-row\';">открыть</div>
	</td>
	<td colspan="9">
		<span>Rest 10</span>
	</td>
</tr>
<tr id="hnb_tabsosdis3">
		<td class="imgtovkup">

		<div id="hnb_butdisplblock3" onclick="document.getElementById(\'hnb_tabsosdis3\').style.display=\'none\'; document.getElementById(\'hnb_closetab3\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">Rest 12</span>

			<a href="/catalog/elitnye-rest/Rest-12/" class="boxer"><img src="/img/product/very_small/Rest 12.jpg" alt="Rest12 - cравнение элитных матрасов Magniflex" /></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-rest/Rest-12/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice3">64 600</span> руб.
			</div>
		</td>
		<td class="trbkeee">
4/5

		</td>
		<td class="trbkeee">
30

		</td>
		<td class="trbkeee">
		-
		</td>
		<td class="trbkeee">
		нет
		</td>
		<td class="trbkeee">
			несъемный

		</td>

		<td class="trbkeee">
		viscosa

		</td>
		<td class="trbkeee">
 Memory 2 см Super Soft Fiber Memory 3 см Elioform 3 см

		</td>
		<td class="trbkeee">
Оригинальная окантовка чехла матраса, рисунок флорентийских лилий черного цвета. Элитная серия 2014 год. Со стороны мемори мягче (верхняя сторона). Более мягкий матрас, чем рест 10.
		</td>
	</tr>
	<tr id="hnb_closetab3">
		<td colspan="1">
			<div onclick="document.getElementById(\'hnb_closetab3\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis3\').style.display=\'table-row\'; document.getElementById(\'hnb_butdisplblock3\').style.display=\'block\';"> открыть</div>
	    </td>
		<td  class="trbkeee" colspan="9">
			<span class="hnb_textdistit">Rest 12</span>
		</td>
	</tr>
		<tr id="hnb_tabsosdis4">
		<td class="imgtovkup colorbkfb">
		<div id="hnb_butdisplblock4" onclick="document.getElementById(\'hnb_tabsosdis4\').style.display=\'none\'; document.getElementById(\'hnb_closetab4\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">FreshGel 9</span>
		<a href="/catalog/elitnye-FreshGel/FreshGel-9/" class="boxer"><img src="/img/product/very_small/FreshGel 9.jpg" alt="FreshGel 9 - cравнение элитных матрасов Magniflex" /></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-FreshGel/FreshGel-9/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice4">20 700</span> руб.
			</div>

		</td>
		<td>
3

		</td>
		<td>
23

		</td>
		<td>
		-
		</td>
		<td>
		нет
		</td>
		<td>
			съемный<br />
3D

		</td>

		<td>
		viscosa

		</td>
		<td>
Magnigel 2 см Memory 3 см Eliosoft 18 см
		</td>
		<td>
3D рисуонк чехла матраса.Чехол съемный на молнии. Гелевый матрас дает слегка охлаждающий эффект - не жарко спать. Идеальная защита от вспотевания. Рекомендован людям с повышенным теплообменом и повышенной потливостью. (например женщинам в возрасте). Со стороны мемори матрас мягче, чем с другой.
		</td>
	</tr>
	<tr id="hnb_closetab4">
	<td class="colorbkfb" colspan="1">
		<div onclick="document.getElementById(\'hnb_closetab4\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis4\').style.display=\'table-row\';">открыть</div>
	</td>
	<td colspan="9">
		<span>FreshGel 9</span>
	</td>
</tr>
<tr id="hnb_tabsosdis5">
		<td class="imgtovkup">
		<div id="hnb_butdisplblock5" onclick="document.getElementById(\'hnb_tabsosdis5\').style.display=\'none\'; document.getElementById(\'hnb_closetab5\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">FreshGel 10</span>
			<a href="/catalog/elitnye-rest/FreshGel 10/" class="boxer"><img src="/img/product/very_small/FreshGel 10.jpg" alt="FreshGel 10 - cравнение элитных матрасов Magniflex" /></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-FreshGel/FreshGel-10/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice5">64 600</span> руб.
			</div>
		</td>
		<td class="trbkeee">
3/4

		</td>
		<td class="trbkeee">
25

		</td>
		<td class="trbkeee">
		dual

		</td>
		<td class="trbkeee">
		нет
		</td>
		<td class="trbkeee">
			съемный<br />
3D
		</td>
		<td class="trbkeee">
		viscosa
		</td>
		<td class="trbkeee">
Memory 2 см Super Soft Fiber Magnigel 2 см Memory 3 см Eliosoft 15 см
		</td>
		<td class="trbkeee">
3D рисуонк чехла матраса.Чехол съемный на молнии. Гелевый матрас дает слегка охлаждающий эффект - не жарко спать. Рекомендован людям с повышенным теплообменом и повышенной потливостью. (например женщинам в возрасте) Технология dual - можно делать левую и правую сторону разной по жесткости. Идеальный вариант для партнеров с разным весом. Со стороны мемори матрас мягче, чем с другой.
		</td>
	</tr>
	<tr id="hnb_closetab5">
		<td colspan="1">
			<div onclick="document.getElementById(\'hnb_closetab5\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis5\').style.display=\'table-row\'; document.getElementById(\'hnb_butdisplblock5\').style.display=\'block\';"> открыть</div>
	    </td>
		<td  class="trbkeee" colspan="9">
			<span class="hnb_textdistit">FreshGel 10</span>
		</td>
	</tr>
			<tr id="hnb_tabsosdis6">
		<td class="imgtovkup colorbkfb">
		<div id="hnb_butdisplblock6" onclick="document.getElementById(\'hnb_tabsosdis6\').style.display=\'none\'; document.getElementById(\'hnb_closetab6\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">FreshGel 12</span>
		<a href="/catalog/elitnye-rest/FreshGel 12/" class="boxer"><img src="/img/product/very_small/FreshGel 12.jpg" alt="FreshGel 12 - cравнение элитных матрасов Magniflex" /></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-FreshGel/FreshGel-12/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice6">20 700</span> руб.
			</div>
		</td>
		<td>
4/5

		</td>
		<td>
30

		</td>
		<td>
		dual

		</td>
		<td>
		нет
		</td>
		<td>
			съемный<br />
3D

		</td>

		<td>
		viscosa

		</td>
		<td>
Memory 2 см Super Soft Fiber Magnigel 5 см Memory 3 см Eliosoft 17 см

		</td>
		<td>
3D рисуонк чехла матраса.Чехол съемный на молнии. Гелевый матрас дает слегка охлаждающий эффект - не жарко спать. Рекомендован людям с повышенным теплообменом и повышенной потливостью. (например женщинам в возрасте) Технология dual - можно делать левую и правую сторону разной по жесткости. Идеальный вариант для партнеров с разным весом. Со стороны мемори матрас мягче, чем с другой.
		</td>
	</tr>
	<tr id="hnb_closetab6">
	<td class="colorbkfb" colspan="1">
		<div onclick="document.getElementById(\'hnb_closetab6\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis6\').style.display=\'table-row\';">открыть</div>
	</td>
	<td colspan="9">
		<span>FreshGel 12</span>
	</td>
</tr>
	<!-------------------------------------------------------------------->
<tr id="hnb_tabsosdis7">
		<td class="imgtovkup">
		<div id="hnb_butdisplblock7" onclick="document.getElementById(\'hnb_tabsosdis7\').style.display=\'none\'; document.getElementById(\'hnb_closetab7\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">New Comfort Plus 10</span>
		<a href="/catalog/elitnye-comfort-delux/Comfort-Plus-10/" class="boxer"><img src="/img/product/very_small/Comfort Plus 10.jpg" alt="New Comfort Plus 10 - cравнение элитных матрасов Magniflex"></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-comfort-delux/Comfort-Plus-10/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice7">7 200</span> руб.
			</div>

		</td>
		<!------------------------------------->
		<td class="trbkeee">
3/4

		</td>
		<td class="trbkeee">
25

		</td>
		<td class="trbkeee">
		dual

		</td>
		<td class="trbkeee">
		нет
		</td>
		<td class="trbkeee">
			съемный

		</td>
		<td class="trbkeee">
		outlast/viscosa

		</td>
		<td class="trbkeee">
Memory 2 см Memory 5 см Elioform 17 см
		</td>
		<td class="trbkeee">
Съемный чехол на молнии. Хит продаж в Италии. Чехол outlast. Терморегулирующие свойства - температура поверхности матраса подстраивается под температуру тела. Технология Nasa (Space Technology). Технология dual - можно делать левую и правую сторону разной по жесткости. Идеальный вариант для партнеров с разным весом. Мягкая сторона по жесткости похожа на мемо мерино.

		</td>
	</tr>
	<tr id="hnb_closetab7">
		<td colspan="1">
			<div onclick="document.getElementById(\'hnb_closetab7\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis7\').style.display=\'table-row\'; document.getElementById(\'hnb_butdisplblock7\').style.display=\'block\';"> открыть</div>
	    </td>
		<td class="trbkeee" colspan="9">
			<span class="hnb_textdistit">New Comfort Plus 10</span>
		</td>
	</tr>
		<!-------------------------------------------------------------------->
			<tr id="hnb_tabsosdis8">
		<td class="imgtovkup colorbkfb">
		<div id="hnb_butdisplblock8" onclick="document.getElementById(\'hnb_tabsosdis8\').style.display=\'none\'; document.getElementById(\'hnb_closetab8\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">New Comfort Plus 12 </span>
		<a href="/catalog/elitnye-comfort-delux/Comfort-Plus-12/" class="boxer"><img src="/img/product/very_small/Comfort Plus 12.jpg" alt="New Comfort Plus 12 - cравнение элитных матрасов Magniflex"></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-comfort-delux/Comfort-Plus-12/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice8">7 200</span> руб.
			</div>

		</td>
		<td>
4/5

		</td>
		<td>
30

		</td>
		<td>
		dual

		</td>
		<td>
		нет
		</td>
		<td>
			съемный
		</td>
		<td>
		outlast/viscosa
		</td>
		<td>
Memory 2 см Super Soft Fiber Memory 3 см Elioform 3 см Eliosoft 21 см
		</td>
		<td>
Съемный чехол на молнии. Хит продаж в Италии. Чехол outlast. Терморегулирующие свойства - температура поверхности матраса подстраивается под температуру тела. Технология Nasa (Space Technology). Технология dual - можно делать левую и правую сторону разной по жесткости. Идеальный вариант для партнеров с разным весом. Более мягкий вариант, чем Комфорт плюс 10.
		</td>
	</tr>

	<tr id="hnb_closetab8">
	<td class="colorbkfb" colspan="1">
		<div onclick="document.getElementById(\'hnb_closetab8\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis8\').style.display=\'table-row\';">открыть</div>
	</td>
	<td colspan="9">
		<span>New Comfort Plus 12</span>
	</td>
</tr>
	<!-------------------------------------------------------------------->
<tr id="hnb_tabsosdis9">
		<td class="imgtovkup">
		<div id="hnb_butdisplblock9" onclick="document.getElementById(\'hnb_tabsosdis9\').style.display=\'none\'; document.getElementById(\'hnb_closetab9\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">Imperiale 24</span>
		<a href="/catalog/elitnye-imperiale/Imperiale-24/" class="boxer"><img src="/img/product/very_small/Imperiale 24.jpg" alt="Imperiale 24 - cравнение элитных матрасов Magniflex"></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-imperiale/Imperiale-24/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice9">7 200</span> руб.
			</div>

		</td>
		<td class="trbkeee">
3/4

		</td>
		<td class="trbkeee">
24

		</td>
		<td class="trbkeee">
		-

		</td>
		<td class="trbkeee">
		нет
		</td>
		<td class="trbkeee">
			несъемный<br>
3D

		</td>

		<td class="trbkeee">
		viscosa

		</td>
		<td class="trbkeee">
Memosoft 4 см Super Soft Fiber Memory 3 см Eliosoft 3 см Elioform Airyform 12 см

		</td>
		<td class="trbkeee">
Американский дизайн в Итальянском качестве. King size style высокие матрасы. 3D чехол. Матрас с пришитым сверху наматрасником 4 см, упругий. Отлично держит спину. Отлично подходит для людей с большим весом, так как модель довольно упругая. При эксплуатации наматрасником вниз матрас очень упругий.

		</td>
	</tr>
	<tr id="hnb_closetab9">
		<td colspan="1">
			<div onclick="document.getElementById(\'hnb_closetab9\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis9\').style.display=\'table-row\'; document.getElementById(\'hnb_butdisplblock9\').style.display=\'block\';"> открыть</div>
	    </td>
		<td class="trbkeee" colspan="9">
			<span class="hnb_textdistit">Imperiale 24</span>
		</td>
	</tr>
	<!-------------------------------------------------------------------->
			<tr id="hnb_tabsosdis10">
		<td class="imgtovkup colorbkfb">
		<div id="hnb_butdisplblock10" onclick="document.getElementById(\'hnb_tabsosdis10\').style.display=\'none\'; document.getElementById(\'hnb_closetab10\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">Imperiale 28 </span>
		<a href="/catalog/elitnye-imperiale/Imperiale-28/" class="boxer"><img src="/img/product/very_small/Imperiale 28.jpg" alt="Imperiale 28 - cравнение элитных матрасов Magniflex"></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-imperiale/Imperiale-28/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice10">7 200</span> руб.
			</div>

		</td>
		<td>
3/4

		</td>
		<td>
28

		</td>
		<td>
		-

		</td>
		<td>
		нет
		</td>
		<td>
			несъемный<br>
3D
		</td>

		<td>
		viscosa
		</td>
		<td>
Memosoft 4 см Super Soft Fiber Memory 3 см Eliosoft 5 см Elioform Airyform 14 см
		</td>
		<td>
Американский дизайн в Итальянском качестве. King size style высокие матрасы. 3D чехол. Матрас с пришитым сверху наматрасником 4 см, упругий. Отлично держит спину. Отлично подходит для людей с большим весом, так как модель довольно упругая. При эксплуатации наматрасником вниз матрас очень упругий. Выше империал 24 на 4 см, но жесткость схожая.
		</td>
	</tr>
	<tr id="hnb_closetab10">
	<td class="colorbkfb" colspan="1">
		<div onclick="document.getElementById(\'hnb_closetab10\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis10\').style.display=\'table-row\';">открыть</div>
	</td>
	<td colspan="9">
		<span>Imperiale 28</span>
	</td>
</tr>
		<!-------------------------------------------------------------------->
<tr id="hnb_tabsosdis11">
		<td class="imgtovkup">
		<div id="hnb_butdisplblock11" onclick="document.getElementById(\'hnb_tabsosdis11\').style.display=\'none\'; document.getElementById(\'hnb_closetab11\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">Imperiale 33</span>
		<a href="/catalog/elitnye-imperiale/Imperiale-33/"><img style="width: 180px;" src="/img/product/very_small/Imperiale 33.jpg" alt="Imperiale 33 - cравнение элитных матрасов Magniflex"></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-imperiale/Imperiale-33/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice11">7 200</span> руб.
			</div>

		</td>
		<td class="trbkeee">
3/4

		</td>
		<td class="trbkeee">
33

		</td>
		<td class="trbkeee">
		-

		</td>
		<td class="trbkeee">
		нет
		</td>
		<td class="trbkeee">
			несъемный<br>
3D

		</td>

		<td class="trbkeee">
		viscosa

		</td>
		<td class="trbkeee">
Memosoft 4 см Super Soft Fiber Memory 5 см Eliosoft 5 см Elioform Airyform 17 см

		</td>
		<td class="trbkeee">
Американский дизайн в Итальянском качестве. King size style высокие матрасы. 3D чехол. Матрас с пришитым сверху наматрасником 4 см, упругий. Отлично держит спину. Отлично подходит для людей с большим весом, так как модель довольно упругая. При эксплуатации наматрасником вниз матрас очень упругий. Выше империал 28 на 5 см, но по жесткости чуть мягче.

		</td>
	</tr>
	<tr id="hnb_closetab11">
		<td colspan="1">
			<div onclick="document.getElementById(\'hnb_closetab11\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis11\').style.display=\'table-row\'; document.getElementById(\'hnb_butdisplblock11\').style.display=\'block\';"> открыть</div>
	    </td>
		<td class="trbkeee" colspan="9">
			<span class="hnb_textdistit">Imperiale 33</span>
		</td>
	</tr>
	<!-------------------------------------------------------------------->
			<tr id="hnb_tabsosdis12">
		<td class="imgtovkup colorbkfb">
		<div id="hnb_butdisplblock12" onclick="document.getElementById(\'hnb_tabsosdis12\').style.display=\'none\'; document.getElementById(\'hnb_closetab12\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">Magnificent 12</span>
		<a href="/catalog/elitnye-magnificent/Magnificent-12/" class="boxer"><img src="/img/product/very_small/Magnificent 12.jpg" alt="Magnificent 12 - cравнение элитных матрасов Magniflex"></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-magnificent/Magnificent-12/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice12">7 200</span> руб.
			</div>
		</td>
		<td>
5

		</td>
		<td>
30

		</td>
		<td>
		dual

		</td>
		<td>
		нет
		</td>
		<td>
			съемный

		</td>

		<td>
outlast/viscosa
		</td>
		<td>
Memory 2 см Super Soft Fiber Memory 5 см Elioform 7 см Eliosoft 7 см Memory 5 см
		</td>
		<td>
Мягкий матрас со съемным чехлом на молнии outlast. Space technology outlast обеспечивает терморегуляцию на поверхности матраса. 12 см мемори в матрасе! Чехол с объемным рисунком флорентийской лилии. Отличный вариант для спортивных людей с небольшим весом. Повышенный уровень комфорта и релаксации. Технология dual - можно делать левую и правую сторону разной по жесткости. Идеальный вариант для партнеров с разным весом.
		</td>
	</tr>

	<tr id="hnb_closetab12">
	<td class="colorbkfb" colspan="1">
		<div onclick="document.getElementById(\'hnb_closetab12\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis12\').style.display=\'table-row\';">открыть</div>
	</td>
	<td colspan="9">
		<span>Magnificent 12</span>
	</td>
</tr>
		<!-------------------------------------------------------------------->
<tr id="hnb_tabsosdis13">
		<td class="imgtovkup">
		<div id="hnb_butdisplblock13" onclick="document.getElementById(\'hnb_tabsosdis13\').style.display=\'none\'; document.getElementById(\'hnb_closetab13\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">Exchange Memoform Dual</span>
		<a href="/catalog/elitnye-harmony/Exchange-Memoform-Dual/" class="boxer"><img src="/img/product/very_small/Exchange Memoform Dual.jpg" alt="Exchange Memoform Dual - cравнение элитных матрасов Magniflex"></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-harmony/Exchange-Memoform-Dual/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice13">7 200</span> руб.
			</div>
		</td>
		<td class="trbkeee">
1/3/5

		</td>
		<td class="trbkeee">
32

		</td>
		<td class="trbkeee">
		dual

		</td>
		<td class="trbkeee">
		нет
		</td>
		<td class="trbkeee">
			съемный

		</td>

		<td class="trbkeee">
		viscosa

		</td>
		<td class="trbkeee">
Memory 2 см, Super Soft Fiber, Memory topper 6 см, Eliosoft Wave 11 см, Elioform Wave 11 см
		</td>
		<td class="trbkeee">
Совершенство технологий. Матрас с регулируемой жесткостью: 6 вариантов жесткости! Технология dual - можно делать левую и правую сторону разной по жесткости. Идеальный вариант для партнеров с разным весом. Также можно менять местами слои внутри матраса, меняя жесткость матраса в процессе эксплуатации. Замшевая простежка по периметру матраса, чехол с объемным рисунком флорентийской лилии.
		</td>
	</tr>
	<tr id="hnb_closetab13">
		<td colspan="1">
			<div onclick="document.getElementById(\'hnb_closetab13\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis13\').style.display=\'table-row\'; document.getElementById(\'hnb_butdisplblock13\').style.display=\'block\';"> открыть</div>
	    </td>
		<td class="trbkeee" colspan="9">
			<span class="hnb_textdistit">Exchange Memoform Dual</span>
		</td>
	</tr>
		<!-------------------------------------------------------------------->
			<tr id="hnb_tabsosdis14">
		<td class="imgtovkup colorbkfb">
		<div id="hnb_butdisplblock14" onclick="document.getElementById(\'hnb_tabsosdis14\').style.display=\'none\'; document.getElementById(\'hnb_closetab14\').style.display=\'table-row\';">скрыть</div>
		<span class="block_firstna">Virtus 30</span>
		<a href="/catalog/elitnye-virtus/Virtus-30/" class="boxer"><img src="/img/product/very_small/Virtus 30.jpg" alt="Virtus 30 - cравнение элитных матрасов Magniflex"></a>
			<div class="hnb_but_addcart">
			<a class="hnb_butelitmat sf_btn_buy" href="/catalog/elitnye-virtus/Virtus-30/">
						Купить
					</a>
			</div>
			<div class="hnb_price_srv">
				Цена: <span class="productPrice14">7 200</span> руб.
			</div>

		</td>
		<td>
5

		</td>
		<td>
30

		</td>
		<td>
		нет

		</td>
		<td>
		да
		</td>
		<td>
			несъемный

		</td>

		<td>
		viscosa/satin

		</td>
		<td>
Кашемир, шерсть мериноса, верблюжья шерсть, конский волос, Memory HD Airyform 4 см, Eliosoft Breeze 16 см, Memory HD 4 см, шелк, лен, хлопок.

		</td>
		<td>
Императорская роскошь. Эксклюзив. Летняя сторона: шелк, лен, хлопок. Зимняя сторона: кашемир, отборная шерсть мериноса, отборная верблюжья шерсть, конский волос. Матрас производится полностью вручную. Современные дышащие материалы обеспечивают повышенную свежесть сна и потрясающие ощущения комфорта. TOP версия матраса от итальянской лаборатории сна.
		</td>
	</tr>

	<tr id="hnb_closetab14">
	<td class="colorbkfb" colspan="1">
		<div onclick="document.getElementById(\'hnb_closetab14\').style.display=\'none\'; document.getElementById(\'hnb_tabsosdis14\').style.display=\'table-row\';">открыть</div>
	</td>
	<td colspan="9">
		<span>Virtus 30</span>
	</td>
</tr>
<!--------------------------############################################################################------------------------------------------>
</table>
<br />
<br />

<h3>Жесткость</h3>
<table class="hnb_tabmy">
	<tr>
		<td style="background-color: #545246;color: #fff;">1</td>
		<td style="background-color: #6e6a5e;color: #fff;">2</td>
		<td style="background-color: #878171;color: #fff;">3</td>
		<td style="background-color:#a29b88;color: #fff;">4</td>
		<td style="background-color:#bab49c;color: #fff;">5</td>
	</tr>

	<tr>
		<td>Высокая</td>
		<td>Выше средней</td>
		<td>Средняя</td>
		<td>Ниже средней</td>
		<td>Низкая</td>
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
			'title' => 'Матрасы премиум класса: купить дорогие элитные ортопедические матрасы серии премиум в Москве - цены в каталоге компании Magniflex',
			'description' => 'Предлагаем купить матрасы премиум класса в Москве. Элитные дорогие ортопедические матрацы серии премиум в нашем каталоге. Цены здесь.',
			'keywords' => 'премиум, матрас, класс, москва, серия, цена, дорогой, элитный, дорого, ортопедический, купить',
			'text' => '
				<div class="hnb_elite_content">
	<div class="hnb_elcont1">
		<img src="/img/virtus.jpg" class="elite_img_top" alt="Коллекция Virtus - элитные ортопедические матрасы Magniflex" />
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
<span class="hnb_bigtytles">Преимущества матрасов коллекции Virtus</span>
		<div  style="clear:both;"></div>
		<div id="hnb_3nelement">
			<div class="hnb_3nelementli">
				<img src="/img/dih.png" alt="Преимущество матрасов коллекции Virtus" />
				<div style="clear:both;"></div>
				<span>Невероятно дышащий.</span><br />

				используется самая современная разработка Breeze (Бриз). Ультра проницаемые свойства. Не нагревается от соприкосновения с телом
			</div>
			<div class="hnb_3nelementli" style="margin-left: 0px; margin-top: 0px; opacity: 1;">
				<img style="margin-top: -6px;" src="/img/ortopedef.png" alt="Преимущество матрасов коллекции Virtus">
				<div style="clear:both;"></div>
				<span>Ортопедический эффект</span><br />
					непревзойденные ортопедические свойства, деликатная, самонастраивающаяся надежная поддержка
позвоночника. Эффект памяти

			</div>
			<div class="hnb_3nelementli">
				<img style="margin-top: -12px;" src="/img/palm.png" alt="Преимущество матрасов коллекции Virtus" />
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
									<img src="/img/PAS_1497.jpg" alt="Коллекция Virtus - только лучшие ткани и материалы" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/Virtus-2.jpg" alt="Коллекция Virtus - только лучшие ткани и материалы" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/Virtus-3.jpg" alt="Коллекция Virtus - только лучшие ткани и материалы" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/Virtus-4.jpg" alt="Коллекция Virtus - только лучшие ткани и материалы" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/Virtus-6.jpg" alt="Коллекция Virtus - только лучшие ткани и материалы" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/Virtus-7.jpg" alt="Коллекция Virtus - только лучшие ткани и материалы" />
											<span>
				Все материалы, используемые при создании матраса, проходят независимую экспертную проверку на аллергены. Сертификат OEKO!
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/Virtus-9.jpg" alt="Коллекция Virtus - только лучшие ткани и материалы" />
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
						<img src="/img/product/very_small/Virtus%2030.jpg" alt="Коллекции Virtus - эксклюзивные матрасы Magniflex" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-virtus/Virtus-30/">
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
					<img src="/img/virtuoso30.jpg" alt="Состав эксклюзивного матраса Virtus">
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
			<tr class="trbkeee">
				<td class="">

				</td>
				<td class="">
					В наличии есть размеры: 160x200, 180x200, 200x200 см. Возможна доставка ЛЮБЫХ других размеров из Италии.
				</td>

			</tr>
		</table>
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
	<img src="/img/harmony.jpg" class="elite_img_top" alt="Коллекция Harmony - эксклюзивные матрасы Magniflex" />
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
<span class="hnb_bigtytles">Преимущества матрасов коллекции Harmony</span>
		<div  style="clear:both;"></div>
		<div id="hnb_3nelement">
<div class="hnb_3nelementli">
				<img style="margin-top: 17px;" src="/img/palm.png" alt="Преимущества матрасов коллекции Harmony" />
				<div style="clear:both;"></div>
				<span>Экстракомфортный, Моделируемый</span><br />
				Технология Dual Core. Универсальный. 4 комбинации комфорта!
			</div>
			<div class="hnb_3nelementli">
				<img style="margin-top: 23px;" src="/img/ortopedef.png" alt="Преимущества матрасов коллекции Harmony" />
				<div style="clear:both;"></div>
				<span>Ортопедический эффект</span><br />
				Максимально возможный ортопедический эффект. Комфортнейшая ортопедическая поддержка!
			</div>
			<div class="hnb_3nelementli">
				<img src="/img/anatomefekt.png" alt="Преимущества матрасов коллекции Harmony" />
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
									<img src="/img/harmony-1.jpg" alt="Коллекция Harmony - эксклюзивные матрасы Premium класса Magniflex" />
											<span>
											 Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/harmony-2.jpg" alt="Коллекция Harmony - эксклюзивные матрасы Premium класса Magniflex" />
											<span>
										 Эксклюзивные детали
										</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/harmony-3.jpg" alt="Коллекция Harmony - эксклюзивные матрасы Premium класса Magniflex" />
											<span>
									 Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/harmony-4.jpg" alt="Коллекция Harmony - эксклюзивные матрасы Premium класса Magniflex" />
											<span>
											 Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/harmony-5.jpg" alt="Коллекция Harmony - эксклюзивные матрасы Premium класса Magniflex" />
											<span>
										 Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/harmony-6.jpg" alt="Коллекция Harmony - эксклюзивные матрасы Premium класса Magniflex" />
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
		<img src="/img/armonia-dual.jpg" alt="Коллекция Harmony - эксклюзивные матрасы Magniflex" />
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
						<img src="/img/product/very_small/Exchange%20Memoform%20Dual.jpg" alt="Exchange Memoform Dual - эксклюзивные матрасы Magniflex" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-harmony/Exchange-Memoform-Dual/">
						Купить матрас
					</a>
				</td>
			</tr>
			<tr class="">
				<td class="">
					Высота
				</td>
				<td class="">
					<span class="hnb_fontplpx">30 см (очень высокий!)</span>
				</td>
			</tr>
			<tr class="trbkeee">
				<td class="">
					Чехол
				</td>
				<td class="">
					Outlast/Viscose&reg;, съемный
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
					<img src="/img/armonia memoformdual.jpg" alt="Состав эксклюзивного матраса Exchange Memoform Dual" >
					<ul style="font-size:13px;">
						<li>Чехол съемный: Outlast/Viscose
				</li>
				<li>Слой в чехле: Memoform 2 cм
				</li>
				<li>Слой в чехле: Super Soft fiber
				</li>
				<li>Топпер в матрасе под чехлом: Memoform 6 cм
				</li>
				<li>Наполнитель 1: Eliosoft Wave 10 cм
				</li>
				<li>Наполнитель 2: Elioform Wave 10 cм
			</li>
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
			<tr class="trbkeee">
				<td class="">

				</td>
				<td class="">
				Возможна доставка ЛЮБЫХ размеров из Италии
				</td>
			</tr>

		</table>
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
	<img src="/img/magnificient.jpg" class="elite_img_top" alt="Коллекция Magnificent - эксклюзивные матрасы Magniflex" />
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
				<img style="margin-top: 23px;" src="/img/ortopedef.png" alt="ортопедический матрас">
				<div style="clear:both;"></div>
				<span>Ортопедический эффект</span><br />
				Не смотря на мягкость, это ортопедический матрас, свойства подтверждены международными лабораториями
			</div>
			<div class="hnb_3nelementli">
				<img src="/img/anatomefekt.png" alt="Анатомический эффект. Outlast">
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
		<img src="/img/DUAL-COMFORT-magnificent.jpg" alt="Magniflex Magnificent - разные половинки - разная жесткость">
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
									<img src="/img/magnificent-1.jpg" alt="Коллекция Magnificent - технология Dual Core" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/magnificent-2.jpg" alt="Коллекция Magnificent - технология Dual Core" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/magnificent-3.jpg" alt="Коллекция Magnificent - технология Dual Core" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/magnificent-4.jpg" alt="Коллекция Magnificent - технология Dual Core" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/magnificent-5.jpg" alt="Коллекция Magnificent - технология Dual Core" />
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
					<a href="/img/product/big/Magnificent%2012.jpg" alt="Коллекция Magnificent - эксклюзивные матрасы Magniflex" class="boxer">
						<img src="/img/product/very_small/Magnificent%2012.jpg">
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-magnificent/Magnificent-12/">
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
					<img src="/img/magnificodual12.jpg" alt="Состав эксклюзивного матраса Magnificent">
					<ul style="font-size:13px;">
						<li>Viscose® Outlast</li>
						<li>Слой Memoform 2 cм</li>
						<li>Слой Super Soft fibre</li>
						<li>Слой Memoform 5 cм</li>
						<li>Слой Elioform 8,5 cм</li>
						<li>Слой Eliosoft 8,5 cм</li>
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
		</tbody></table>
	</div>
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
		<img src="/img/imperiale.jpg" class="elite_img_top" alt="Коллекция Imperiale - аристократические матрасы Magniflex" />
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
<span class="hnb_bigtytles">Преимущества матрасов коллекции Imperiale</span>
  	<div  style="clear:both;"></div>
		<div id="hnb_3nelement">
			<div class="hnb_3nelementli">
				<img style="margin-top: -13px;" src="/img/fire_ice-ico.jpg" alt="Матрасы Магнифлекс Премиум класса" />
				<div style="clear:both;"></div>
				<span>Премиум класс</span><br />
			Роскошные матрасы king size - американский стандарт люксовых брендов.
			</div>
			<div class="hnb_3nelementli">
				<img style="margin-top: 23px;" src="/img/ortopedef.png" alt="Ортопедический матрас Magniflex Imperiale" />
				<div style="clear:both;"></div>
				<span>Ортопедический эффект</span><br />
		Великолепный пятизвездочный ортопедический эффект. Комфортнейшая ортопедическая поддержка!
			</div>
			<div class="hnb_3nelementli">
				<img src="/img/anatomefekt.png" alt="Анатомический эффект матраса" />
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
									<img src="/img/imperial-1.jpg" alt="Коллекция Imperiale - высокотехнологичный матрас Premium класса Magniflex" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/imperial-2.jpg" alt="Коллекция Imperiale - высокотехнологичный матрас Premium класса Magniflex" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/imperial-3.jpg" alt="Коллекция Imperiale - высокотехнологичный матрас Premium класса Magniflex" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/imperial-4.jpg" alt="Коллекция Imperiale - высокотехнологичный матрас Premium класса Magniflex" />
											<span>

											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/imperial-5.jpg" alt="Коллекция Imperiale - высокотехнологичный матрас Premium класса Magniflex" />
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
					<a href="/img/product/big/Imperiale%2033.jpg" alt="Коллекция Imperiale 33 - эксклюзивные матрасы Magniflex" class="boxer">
						<img src="/img/product/very_small/Imperiale%2033.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-imperiale/Imperiale-33/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>Imperiale 28</span>
					<a href="/img/product/big/Imperiale%2028.jpg" alt="Коллекция Imperiale 28 - эксклюзивные матрасы Magniflex" class="boxer">
						<img src="/img/product/very_small/Imperiale%2028.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-imperiale/Imperiale-28/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>Imperiale 24</span>
					<a href="/img/product/big/Imperiale%2024.jpg" alt="Коллекция Imperiale 24 - эксклюзивные матрасы Magniflex" class="boxer">
						<img src="/img/product/very_small/Imperiale%2024.jpg" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-imperiale/Imperiale-24/">
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
					<img src="/img/impero33.jpg" alt="Состав эксклюзивного матраса Imperiale 33">
					<ul style="font-size:13px;">
						<li>Топер: Viscose + <br/>4 см MEMOSOFT</li>
            <li>Слой Super Soft fibre (мягкая фибра)</li>
						<li>Слой Memoform 5 cм</li>
            <li>Слой Eliosoft 5 cм</li>
						<li>Слой Airyform Elioform 17 cм</li>
					</ul>
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/impero28.jpg" alt="Состав эксклюзивного матраса Imperiale 28">
					<ul>
						<li>Топер: Viscose + <br/>4 см MEMOSOFT</li>
            <li>Слой Super Soft fibre (мягкая фибра)</li>
						<li>Слой Memoform 3 cм</li>
            <li>Слой Eliosoft 5 cм</li>
						<li>Слой Airyform Elioform 14 cм</li>
					</ul>
				</td>
				<td class="hnb_verttoptd">
					<img src="/img/impero24.jpg" alt="Состав эксклюзивного матраса Imperiale 24">
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
			'title' => 'Коллекция New Comfort Plus — невероятно комфортные! | Магнифлекс',
			'description' => '',
			'keywords' => '',
			'text' => '
				<div class="hnb_elite_content">
	<div class="hnb_elcont1">
	<img src="/img/сomfort-delux.jpg" class="elite_img_top" alt="Коллекция New Comfort Plus - комфортные ортопедические матрасы Магнифлекс" />
		<span id="hnb_elcont1title">
			Коллекция <b>New Comfort Plus</b> — невероятно комфортные!
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
<span class="hnb_bigtytles">Преимущества матрасов коллекции New Comfort Plus</span>
		<div  style="clear:both;"></div>
		<div id="hnb_3nelement">
			<div class="hnb_3nelementli">
				<img style="margin-top: -13px;" src="/img/fire_ice-ico.jpg" alt="Эксклюзивные матрасы Магнифлекс New Comfort Plus 12 - эффект огонь и лед. Outlast" />
				<div style="clear:both;"></div>
				<span>Эффект „Огонь и Лед”. Outlast</span><br />
			Идеальный микроклимат для сна. Терморегулирующий чехол с технологией Outlast!
			</div>
			<div class="hnb_3nelementli">
				<img style="margin-top: 23px;" src="/img/ortopedef.png" alt="Ортопедический эффект матраса New Comfort Plus 12" />
				<div style="clear:both;"></div>
				<span>Ортопедический эффект</span><br />
				Максимальный пятизвездочный ортопедический эффект. Комфортнейшая ортопедическая поддержка!
			</div>
			<div class="hnb_3nelementli">
				<img src="/img/anatomefekt.png" alt="Анатомический эффект матраса New Comfort Plus 12" />
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
									<img src="/img/comfort-1.jpg" alt="Коллекция New Comfort Plus - комфортные ортопедические матрасы Premium класса Магнифлекс" />
											<span>
									Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-2.jpg" alt="Коллекция New Comfort Plus - комфортные ортопедические матрасы Premium класса Magniflex" />
											<span>
									Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-3.jpg" alt="Коллекция New Comfort Plus - комфортные ортопедические матрасы Premium класса Магнифлекс" />
											<span>
											Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-4.jpg" alt="Коллекция New Comfort Plus - комфортные ортопедические матрасы Premium класса Magniflex" />
											<span>
											Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-5.jpg" alt="Коллекция New Comfort Plus - комфортные ортопедические матрасы Premium класса Магнифлекс" />
											<span>
										Съемный чехол. Удобно моделировать, легко ухаживать. Можно стирать!
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-6.jpg" alt="Коллекция New Comfort Plus - комфортные ортопедические матрасы Premium класса Magniflex" />
											<span>
							Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-7.jpg" alt="Коллекция New Comfort Plus - комфортные ортопедические матрасы Premium класса Магнифлекс" />
											<span>
											Эксклюзивные детали
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/comfort-8.jpg" alt="Коллекция New Comfort Plus - комфортные ортопедические матрасы Premium класса Magniflex" />
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
		<span class="hnb_bigtytles">Модели из коллекции New Comfort Plus</span>
		<table class="hnb_elitmatrastbl">
			<tr class="">
				<td class="svoistvo">
					<span>СВОЙСТВА</span>
				</td>
				<td class="imgtovkup">
					<span>New Comfort Plus 12</span>
					<a href="/img/product/big/Comfort%20Plus%2012.jpg" alt="Коллекция New Comfort Plus 12 - эксклюзивные матрасы Magniflex" class="boxer">
						<img src="/img/product/very_small/Comfort%20Plus%2012.jpg" alt="Коллекция New Comfort Plus 12 - эксклюзивные матрасы Magniflex" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-comfort-delux/Comfort-Plus-12/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>New Comfort Plus 10</span>
					<a href="/img/product/big/Comfort%20Plus%2010.jpg" alt="Коллекция New Comfort Plus 10 - эксклюзивные матрасы Magniflex" class="boxer">
						<img src="/img/product/very_small/Comfort%20Plus%2010.jpg" alt="Коллекция New Comfort Plus 12 - эксклюзивные матрасы Magniflex" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-comfort-delux/Comfort-Plus-10/">
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
					<img src="/img/comfortdeluxedual12.jpg" alt="Состав матраса New Comfort Plus 12" >
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
					<img src="/img/comfortdual10.jpg" alt="Состав матраса New Comfort Plus 10">
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
		</table>
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
		<img src="/img/baktop.jpg" class="elite_img_top" alt="Коллекция FreshGel - элитные ортопедические матрасы Magniflex" />
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
			<img src="/img/mstras.png" alt="Ортопедические матрасы Magniflex FreshGel" />
		</div>
		<div class="strbott">
		</div>
		<div class="strbott bottom_copy">
		</div>
	</div>
	<div class="hnb_elcont2">
		<div id="hnb_elcont2top" style="margin-top:-40px;">
			<img src="/img/elmentmatras.png" alt="MagniGel - сердце матраса" />
		</div>
		<span class="flashgel_span">MagniGel -<br />
сердце матраса</span>
		<div  style="clear:both;"></div>
		<div id="hnb_3nelement">
			<div class="hnb_3nelementli">
				<img src="/img/dih.png" alt="Magniflex MagniGel - необыкновенно проницаемый, дышащий материал матраса" />
				<div style="clear:both;"></div>
				<span>Дышащий</span><br />
				Необыкновенно проницаемый,
				дышащий материал. Мгновенно
				впитывает влагу и капельки,
				быстро испаряя их!
			</div>
			<div class="hnb_3nelementli">
				<img src="/img/snig.png" alt="Magniflex MagniGel - охлаждающий эффект матраса" />
				<div style="clear:both;"></div>
				<span>Охлаждающий эффект</span><br />
				Не нагревается от соприкосновения
				с телом: спать на нем прохладно
				даже жарким летом.
				Зимой не “отбирает” тепло!
			</div>
			<div class="hnb_3nelementli">
				<img style="padding-top:7px;" src="/img/lux.png" alt="Magniflex MagniGel - эффект памяти" />
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
									<img src="/img/m1.jpg" alt="Коллекция FreshGel - элитные ортопедические матрасы Magniflex" />
											<span>
											Magniflex FreshGel - просторные удобные а главное, максимально комфортные матрасы
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/matras_magniflex-freshgel-1.jpg" alt="Коллекция FreshGel - элитные ортопедические матрасы Magniflex" />
											<span>
											Высокое качество, эксклюзивные материалы, инновационные технологии - простая необходимость современного премиального класса
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/matras_magniflex-freshgel-2.jpg" alt="Коллекция FreshGel - элитные ортопедические матрасы Magniflex" />
											<span>
											Великолепие натуральной ткани подчеркивает двойная строчка. Направление и размер стежков, цвет и качество нити, подбираются исключительно тщательно
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/fresh-gel-4.jpg" alt="Коллекция FreshGel - элитные ортопедические матрасы Magniflex" />
											<span>
											Дизайнерский чехол
											</span>
								</a>
								<a href="#" target="_blank">
									<img src="/img/matras_magniflex-freshgel-3.jpg" alt="Коллекция FreshGel - элитные ортопедические матрасы Magniflex" />
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
					<a href="/img/product/big/FreshGel%2012.jpg" alt="Коллекция FreshGel 12 - эксклюзивные матрасы Magniflex" class="boxer">
						<img src="/img/product/very_small/FreshGel%2012.jpg" alt="Коллекция FreshGel 12 - эксклюзивные матрасы Magniflex" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-FreshGel/FreshGel-12/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>FreshGel 10</span>
					<a href="/img/product/big/FreshGel%2010.jpg" alt="Коллекция FreshGel 10 - эксклюзивные матрасы Magniflex" class="boxer">
						<img src="/img/product/very_small/FreshGel%2010.jpg" alt="Коллекция FreshGel 10 - эксклюзивные матрасы Magniflex" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-FreshGel/FreshGel-10/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>FreshGel 9</span>
					<a href="/img/product/big/FreshGel%209.jpg" alt="Коллекция FreshGel 9 - эксклюзивные матрасы Magniflex" class="boxer">
						<img src="/img/product/very_small/FreshGel%209.jpg" alt="Коллекция FreshGel 9 - эксклюзивные матрасы Magniflex" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-FreshGel/FreshGel-9/">
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
					<img src="/img/sloi.jpg" alt="Состав матраса Magnigel 12">
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
					<img src="/img/magnigeldual10.jpg" alt="Состав матраса Magnigel 10">
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
					<img src="/img/magnigel9.jpg" alt="Состав матраса Magnigel 9">
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
		<img src="/img/rest.jpg" class="elite_img_top" alt="Ортопедиченские элитные матрасы Магнифлекс - Коллекция Rest" />
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
					<a class="hnb_butelitmat" href="/catalog/elitnye-rest/Rest-12/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>Rest 10</span>
					<a href="/img/product/big/Rest%2010.jpg" class="boxer">
						<img src="/img/product/very_small/Rest%2010.jpg" alt="Magniflex Rest 10" />
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-rest/Rest-10/">
						Купить матрас
					</a>
				</td>
				<td class="imgtovkup">
					<span>Rest 9</span>
					<a href="/img/product/big/Rest%209.jpg" class="boxer">
						<img src="/img/product/very_small/Rest%209.jpg" alt="Magniflex Rest 9"/>
					</a>
					<a class="hnb_butelitmat" href="/catalog/elitnye-rest/Rest-9/">
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
	</div>
</div>
			'
		),
		//корзина
		array(
			'address' => 'cart',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Корзина',
			'left_sidebar' => 'basket',
			'title' => 'Моя корзина | Магнифлекс',
			'description' => '',
			'keywords' => 'матрасы подушки магнифлекс',
			'text' => '
					<div class="hnb_cart_basket">
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
						</div>
						<hr>
						<div class="choise_button">
							<a href="/catalog/pillows/" class="btn_order">
								Выбрать подушку
							</a>
							<a href="/order/" class="btn_orderw">
								Оформить заказ
							</a>
						</div>
					</div>
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
							<input type="text" name="name" class="new_order_input">
							<label>Фамилия, имя, отчество:*</label>
						</div>
						<div class="form_input">
							<input type="text" name="phone" class="phone_mask new_order_input">
							<label>Телефон:*</label>
						</div>
						<div class="form_input">
							<input type="text" name="email" class="new_order_input">
							<label>E-Mail:</label>
						</div>
						<div class="form_input">
							<input type="text" name="address" class="new_order_input">
							<label>Адрес доставки:*</label>
						</div>
						<div class="form_input">
							<input type="text" name="date" class="new_order_input">
							<label>Дата доставки:</label>
						</div>
						<div class="form_input">
							<textarea name="comment" rows="5" class="new_order_input"></textarea>
							<label>Дополнительные пожелания к заказу:</label>
						</div>
						<div class="form_input <!--half-left-->">
							
							<div class="form_input_check">
								<label for="agree_check"><a target="_blank" href="/pokupatelyam/dostavka/ ">Условия доставки </a></label>
								<div class="clear"></div>
							</div>
							<div class="form_input_check">
								<input type="checkbox" id="agree_check" name="agree_check" checked="checked" />
								<label for="agree_check">Я согласен с <a href="#text_agree"  id="fancy_text_agree">условиями обработки персональных данных</a></label>
								<div class="clear"></div>
							</div>
							<div class="form_submit">
								<input type="submit" class="checkout_button_order" value="Отправить заказ">
								<div class="clear"></div>
							</div>
						</div>
						
						<div id="text_agree" class="text_agree" style="display: none;">
							<h3>УСЛОВИЯ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</h2>
							<ol>
								<li><p>Общие положения</p>
									<ol>
										<li>Настоящая Политика в отношении обработки персональных данных (далее — Политика) составлена в соответствии с п. 2 ст. 18.1 Федерального закона № 152-ФЗ от 27 июля 2006 года «О персональных данных» и является основополагающим внутренним регулятивным документом Общества с ограниченной ответственностью «Русмани» (ООО «Русмани»  далее — Организация или Оператор), определяющим ключевые направления его деятельности в области обработки и защиты персональных данных (далее — ПДн), оператором которых является Организация.</li>
										<li>Политика разработана в целях реализации требований законодательства в области обработки и защиты ПДн и направлена на обеспечение защиты прав и свобод человека и гражданина при обработке его ПДн в Организации, в том числе защиты прав на неприкосновенность частной жизни, личной, семейной и врачебной тайн.</li>
										<li>Положения Политики распространяются на отношения по обработке и защите ПДн, полученных Организацией как до, так и после утверждения Политики, за исключением случаев, когда по причинам правового, организационного и иного характера положения Политики не могут быть распространены на отношения по обработке и защите ПДн, полученных до ее утверждения.</li>
										<li><p>Обработка ПДн в Организации осуществляется в связи с выполнением Организацией функций, предусмотренных ее учредительными документами, и определяемых:</p>
											<ul>
												<li>Федеральным законом № 152-ФЗ от 27 июля 2006 года «О персональных данных»;</li>
												<li>Постановлением Правительства Российской Федерации от 15 сентября 2008 года № 687 «Об утверждении Положения об особенностях обработки персональных данных, осуществляемой без использования средств автоматизации»;</li>
												<li>Постановлением Правительства РФ от 1 ноября 2012 года 1119 «Об утверждении требований к защите персональных данных при их обработке в информационных системах персональных данных»;</li>
												<li>иными нормативными правовыми актами Российской Федерации.</li>
											</ul>
										Кроме того, обработка ПДн в Организации осуществляется в ходе трудовых и иных непосредственно связанных с ними отношений, в которых Организация выступает в качестве работодателя (глава 14 Трудового кодекса Российской Федерации), в связи с реализацией Организацией своих прав и обязанностей как юридического лица.</li>
										<li>Организация имеет право вносить изменения в настоящую Политику. При внесении изменений в заголовке Политики указывается дата последнего обновления редакции. Новая редакция Политики вступает в силу с момента ее размещения на сайте, если иное не предусмотрено новой редакцией Политики.</li>
										<li>Действующая редакция хранится в месте нахождения единоличного исполнительного органа (управляющей компании) Организации по адресу: 191119, Санкт-Петербург, ул. Звенигородкая, д. 9-11, литера К, помещение 14Н, ком.144</li>
									</ol>
								</li>
								<li>
									<p>Термины и принятые сокращения</p>
									<p>Персональные данные (ПДн) — любая информация, относящаяся к прямо или косвенно определенному или определяемому физическому лицу (субъекту персональных данных).</p>
									<p>Обработка персональных данных — любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.</p>
									<p>Оператор — государственный орган, муниципальный орган, юридическое или физическое лицо, самостоятельно или совместно с другими лицами организующие и (или) осуществляющие обработку персональных данных, а также определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.</p>
									<p>Распространение персональных данных — действия, направленные на раскрытие персональных данных неопределенному кругу лиц.</p>
									<p>Предоставление персональных данных — действия, направленные на раскрытие персональных данных определенному лицу или определенному кругу лиц.</p>
									<p>Блокирование персональных данных — временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных).</p>
									<p>Уничтожение персональных данных — действия, в результате которых становится невозможным восстановить содержание персональных данных в информационной системе персональных данных и (или) в результате которых уничтожаются материальные носители персональных данных.</p>
									<p>Обезличивание персональных данных — действия, в результате которых становится невозможным без использования дополнительной информации определить принадлежность персональных данных конкретному субъекту персональных данных.</p>
									<p>Автоматизированная обработка персональных данных — обработка персональных данных с помощью средств вычислительной техники.</p>
									<p>Информационная система персональных данных (ИСПД) — совокупность содержащихся в базах данных персональных данных и обеспечивающих их обработку информационных технологий и технических средств.</p>
								</li>
								<li><p>Принципы обеспечения безопасности персональных данных</p>
									<ol>
										<li>Основной задачей обеспечения безопасности ПДн при их обработке в Организации является предотвращение несанкционированного доступа к ним третьих лиц, предупреждение преднамеренных программно-технических и иных воздействий с целью хищения ПДн, разрушения (уничтожения) или искажения их в процессе обработки.</li>
										<li><p>Для обеспечения безопасности ПДн Организация руководствуется следующими принципами:</p>
											<ul>
												<li>законность: защита ПДн основывается на положениях нормативных правовых актов и методических документов уполномоченных государственных органов в области обработки и защиты ПДн;</li>
												<li>системность: обработка ПДн в Организации осуществляется с учетом всех взаимосвязанных, взаимодействующих и изменяющихся во времени элементов, условий и факторов, значимых для понимания и решения проблемы обеспечения безопасности ПДн;</li>
												<li>комплексность: защита ПДн строится с использованием функциональных возможностей информационных технологий, реализованных в информационных системах Организации и других имеющихся в Организации систем и средств защиты;</li>
												<li>непрерывность: защита ПДн обеспечивается на всех этапах их обработки и во всех режимах функционирования систем обработки ПДн, в том числе при проведении ремонтных и регламентных работ;</li>
												<li>своевременность: меры, обеспечивающие надлежащий уровень безопасности ПДн, принимаются до начала их обработки;</li>
												<li>преемственность и непрерывность совершенствования: модернизация и наращивание мер и средств защиты ПДн осуществляется на основании результатов анализа практики обработки ПДн в Организации с учетом выявления новых способов и средств реализации угроз безопасности ПДн отечественного и зарубежного опыта в сфере защиты информации;</li>
												<li>персональная ответственность: ответственность за обеспечение безопасности ПДн возлагается на Работников в пределах их обязанностей, связанных с обработкой и защитой ПДн;</li>
												<li>минимизация прав доступа: доступ к ПДн предоставляется Работникам только в объеме, необходимом для выполнения их должностных обязанностей;</li>
												<li>гибкость: обеспечение выполнения функций защиты ПДн при изменении характеристик функционирования информационных систем персональных данных Организации, а также объема и состава обрабатываемых ПДн;</li>
												<li>специализация и профессионализм: реализация мер по обеспечению безопасности ПДн осуществляется Работниками, имеющими необходимые квалификацию и опыт;</li>
												<li>эффективность процедур отбора кадров: кадровая политика Организации предусматривает тщательный подбор персонала и мотивацию Работников, позволяющую исключить или минимизировать возможность нарушения ими безопасности ПДн;</li>
												<li>наблюдаемость и прозрачность: меры по обеспечению безопасности ПДн должны быть спланированы так, чтобы результаты их применения были явно наблюдаемы (прозрачны) и могли быть оценены лицами, осуществляющими контроль;</li>
												<li>непрерывность контроля и оценки: устанавливаются процедуры постоянного контроля использования систем обработки и защиты ПДн, а результаты контроля регулярно анализируются.</li>
											</ul>
										</li>
										<li>В Организации не производится обработка ПДн, несовместимая с целями их сбора. Если иное не предусмотрено федеральным законом, по окончании обработки ПДн в Организации, в том числе при достижении целей их обработки или утраты необходимости в достижении этих целей, обрабатывавшиеся Организацией ПНд уничтожаются или обезличиваются.</li>
										<li>При обработке ПДн обеспечиваются их точность, достаточность, а при необходимости — и актуальность по отношению к целям обработки. Организация принимает необходимые меры по удалению или уточнению неполных или неточных ПДн.</li>
									</ol>
								</li>
								<li>Обработка персональных данных
									<ol>
										<li>Получение ПДн
											<ol>
												<li>Все ПДм следует получать от самого субъекта. Если ПДм субъекта можно получить только у третьей стороны, то субъект должен быть уведомлен об этом или от него должно быть получено согласие.</li>
												<li>Оператор должен сообщить субъекту о целях, предполагаемых источниках и способах получения ПДн, характере подлежащих получению ПДм. перечне действий с ПДн. сроке, в течение которого действует согласие, и порядке его отзыва, а также о последствиях отказа субъекта дать письменное согласие на их получение.</li>
												<li>Документы, содержащие ПДн, создаются путем:
													<ol class="letter_list">
														<li>копирования оригиналов документов (паспорт, документ об образовании, свидетельство ИНН, пенсионное свидетельство и др.);</li>
														<li>внесения сведений в учетные формы;</li>
														<li>получения оригиналов необходимых документов (трудовая книжка, характеристика и др.).</li>
													</ol>
													Порядок доступа субъекта ПДн к его ПДн, обрабатываемым Организацией, определяется в соответствии с законодательством и внутренними регулятивными документами Организации.
												</li>
											</ol>
										</li>
										<li><p>Обработка ПДн</p>
											<ol>
												<li>Обработка персональных данных осуществляется:
													<ul>
														<li>с согласия субъекта персональных данных на обработку его персональных данных;</li>
														<li>в случаях, когда обработка персональных данных необходима для осуществления и выполнения возложенных законодательством Российской Федерации функций, полномочий и обязанностей;</li>
														<li>в случаях, когда осуществляется обработка персональных данных, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных либо по его просьбе (далее — персональные данные, сделанные общедоступными субъектом персональных данных).</li>
													</ul>
													<p>Доступ Работников к обрабатываемым ПДн осуществляется в соответствии с их должностными обязанностями и требованиями внутренних регулятивных документов Организации.</p>
													<p>Допущенные к обработке ПДн Работники под роспись знакомятся с документами организации, устанавливающими порядок обработки ПДн, включая документы, устанавливающие права и обязанности конкретных Работников.</p>
													<p>Организацией производится устранение выявленных нарушений законодательства об обработке и защите ПДн.</p>
												</li>
												<li>Цели обработки ПДн:
													<ul>
														<li>юридические действия, осуществляемые ООО «Русмани» от имени и за счет Доверителя, связанные с представлением интересов Доверителя в органах по сертификации, государственных органах, Роспотребнадзоре, санитарно — эпидемиологических службах, а также в иных организациях и учреждениях по вопросу прохождения технических испытаний, исследований и сертификации продукции Доверителя с целью оформления документа нетарифного регулирования (декларации, сертификата соответствия, свидетельства о государственной регистрации, технической документации и др.);</li>
														<li>осуществление трудовых отношений;</li>
														<li>осуществление гражданско-правовых отношений.</li>
													</ul>
												</li>
												<li>Категории субъектов персональных данных<br />
													В Организации обрабатываются ПДн следующих субъектов:
													<ul>
														<li>физические лица, состоящие с ООО «Русмани» в трудовых отношениях;</li>
														<li>физические лица, являющие близкими родственниками сотрудников учреждения;</li>
														<li>физические лица, уволившиеся из ООО «Русмани»;</li>
														<li>физические лица, являющиеся кандидатами на работу в ООО «Русмани»;</li>
														<li>физические лица, состоящие с ООО «Русмани» в гражданско-правовых отношениях;</li>
														<li>физические лица, заинтересованные в услугах ООО «Русмани» и оставившие свою контактную информацию в форме на сайте организации, расположенного по адресу https://www.magniflex.ru/;</li>
													</ul>
												</li>
												<li>ПДн, обрабатываемые Организацией:
													<ul>
														<li>данные, полученные при осуществлении трудовых отношений;</li>
														<li>данные, полученные для осуществления отбора кандидатов на работу в Организацию;</li>
														<li>данные, полученные при осуществлении гражданско-правовых отношений;</li>
														<li>данные, полученные от физических лиц из формы с сайта организации, расположенного по адресу https://www.magniflex.ru/;</li>
													</ul>

													Полный список ПДн представлен в Перечне ПДн, утвержденном Генеральным директором организации в лице управляющей компании ООО «Русмани».
												</li>
												<li>Обработка персональных данных ведется:
													<ul>
														<li>с использованием средств автоматизации;</li>
														<li>без использования средств автоматизации.</li>
													</ul>
												</li>
											</ol>
										</li>
										<li><p>Хранение ПДн</p>
											<ol>
												<li>ПДн субъектов могут быть получены, проходить дальнейшую обработку и передаваться на хранение как на бумажных носителях, так и в электронном виде.</li>
												<li>ПДн, зафиксированные на бумажных носителях, хранятся в запираемых шкафах либо в запираемых помещениях с ограниченным правом доступа (регистратура).</li>
												<li>ПДн субъектов, обрабатываемые с использованием средств автоматизации в разных целях, хранятся в разных папках (вкладках).</li>
												<li>Не допускается хранение и размещение документов, содержащих ПДн, в открытых электронных каталогах (файлообменниках) в ИСПД.</li>
												<li>Хранение ПДн в форме, позволяющей определить субъекта ПДн, осуществляется не дольше, чем этого требуют цели их обработки, и они подлежат уничтожению по достижении целей обработки или в случае утраты необходимости в их достижении.</li>
											</ol>
										</li>
										<li>Уничтожение ПДн
											<ol>
												<li>Уничтожение документов (носителей), содержащих ПДн, производится путем сожжения, дробления (измельчения), химического разложения, превращения в бесформенную массу или порошок. Для уничтожения бумажных документов допускается применение шредера.</li>
												<li>ПДн на электронных носителях уничтожаются путем стирания или форматирования носителя.</li>
												<li>Уничтожение производится комиссией. Факт уничтожения ПДн подтверждается документально актом об уничтожении носителей, подписанным членами комиссии.</li>
												<li>Организация передает ПДн третьим лицам в следующих случаях:
													<ul>
														<li>субъект выразил свое согласие на такие действия;</li>
														<li>передача предусмотрена российским или иным применимым законодательством в рамках установленной законодательством процедуры.</li>
													</ul>
												</li>
												<li><p>Перечень лиц, которым передаются ПДн Третьи лица, которым передаются ПДн:</p>
													<ul>
														<li>Пенсионный фонд РФ для учета (на законных основаниях);</li>
														<li>Налоговые органы РФ (на законных основаниях);</li>
														<li>Фонд социального страхования (на законных основаниях);</li>
														<li>Территориальный фонд обязательного медицинского страхования (на законных основаниях);</li>
														<li>страховые медицинские организации по обязательному и добровольному медицинскому страхованию (на законных основаниях);</li>
														<li>банки для начисления заработной платы (на основании договора);</li>
														<li>судебные и правоохранительные органы в случаях, установленных законодательством;</li>
														<li>бюро кредитных историй (с согласия субъекта);</li>
													</ul>
												</li>
											</ol>
										</li>
									</ol>
								</li>
								<li><p>Защита персональных данных</p>
									<ol>
										<li>В соответствии с требованиями нормативных документов Организацией создана система защиты персональных данных (СЗПД), состоящая из подсистем правовой, организационной и технической защиты.</li>
										<li>Подсистема правовой защиты представляет собой комплекс правовых, организационно-распорядительных и нормативных документов, обеспечивающих создание, функционирование и совершенствование СЗПД.</li>
										<li>Подсистема организационной защиты включает в себя организацию структуры управления СЗПД, разрешительной системы, защиты информации при работе с сотрудниками, партнерами и сторонними лицами, защиты информации в открытой печати, публикаторской и рекламной деятельности, аналитической работы.</li>
										<li>Подсистема технической защиты включает в себя комплекс технических, программных, программно-аппаратных средств, обеспечивающих защиту ПДн.</li>
										<li>Основными мерами защиты ПДн, используемыми Организацией, являются:
											<ol>
												<li>Назначение лица, ответственного за обработку ПДн, которое осуществляет организацию обработки ПДн, обучение и инструктаж, внутренний контроль за соблюдением учреждением и его работниками требований к защите ПДн;</li>
												<li>Определение актуальных угроз безопасности ПДн при их обработке в ИСПД, и разработка мер и мероприятий по защите ПДн;</li>
												<li>Разработка политики в отношении обработки персональных данных;</li>
												<li>Установление правил доступа к ПДн, обрабатываемым в ИСПД, а также обеспечения регистрации и учета всех действий, совершаемых с ПДн в ИСПД;</li>
												<li>Установление индивидуальных паролей доступа сотрудников в информационную систему в соответствии с их производственными обязанностями;</li>
												<li>Применение прошедших в установленном порядке процедуру оценки соответствия средств защиты информации, учет машинных носителей ПДн, обеспечение их сохранности;</li>
												<li>Сертифицированное антивирусное программное обеспечение с регулярно обновляемыми базами;</li>
												<li>Сертифицированное программное средство защиты информации от несанкционированного доступа;</li>
												<li>Сертифицированные межсетевой экран и средство обнаружения вторжения;</li>
												<li>Соблюдение условий, обеспечивающих сохранность ПДн и исключающие несанкционированный к ним доступ, оценка эффективности принимаемых и реализованных мер по обеспечению безопасности ПДн;</li>
												<li>Установление правил доступа к обрабатываемым ПДн, обеспечение регистрации и учета действий, совершаемых с ПДн, а также обнаружение фактов несанкционированного доступа к персональным данным и принятия мер;</li>
												<li>Восстановление ПДн, модифицированных или уничтоженных вследствие несанкционированного доступа к ним;</li>
												<li>Обучение работников Организации, непосредственно осуществляющих обработку персональных данных, положениям законодательства Российской Федерации о персональных данных, в том числе требованиям к защите персональных данных, документам, определяющим политику Организации в отношении обработки персональных данных, локальным актам по вопросам обработки персональных данных;</li>
												<li>Осуществление внутреннего контроля и аудита.</li>
											</ol>
										</li>
									</ol>
								</li>
								<li><p>Основные права субъекта ПДн и обязанности Организации</p>
									<ol>
										<li>Основные права субъекта ПДн<br />
											Субъект ПДн имеет право на получение информации, касающейся обработки его персональных данных, в том числе содержащей:
											<ul>
												<li>подтверждение факта обработки персональных данных оператором;</li>
												<li>правовые основания и цели обработки персональных данных;</li>
												<li>цели и применяемые оператором способы обработки персональных данных;</li>
												<li>наименование и место нахождения оператора, сведения о лицах (за исключением работников оператора), которые имеют доступ к персональным данным или которым могут быть раскрыты персональные данные на основании договора с оператором или на основании федерального закона;</li>
												<li>обрабатываемые персональные данные, относящиеся к соответствующему субъекту персональных данных, источник их получения, если иной порядок представления таких данных не предусмотрен федеральным законом;</li>
												<li>сроки обработки персональных данных, в том числе сроки их хранения;</li>
												<li>порядок осуществления субъектом персональных данных прав, предусмотренных Федеральным законом «О персональных данных»;
												информацию об осуществленной или о предполагаемой трансграничной передаче данных;</li>
												<li>наименование или фамилию, имя. отчество и адрес лица, осуществляющего обработку персональных данных по поручению оператора, если обработка поручена или будет поручена такому лицу;</li>
												<li>иные сведения, предусмотренные настоящим Федеральным законом или другими федеральными законами.</li>
											</ul>
											Субъект ПДн вправе требовать от оператора уточнения его персональных данных, их блокирования или уничтожения в случае, если персональные данные являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки, а также принимать предусмотренные законом меры по защите своих прав.
										</li>
										<li>Обязанности Организации<br />
											Организация обязана:
											<ul>
												<li>при сборе ПДн предоставить информацию об обработке его ПДн;</li>
												<li>в случаях если ПДн были получены не от субъекта ПДн уведомить субъекта;</li>
												<li>при отказе в предоставлении ПДн субъекту разъясняются последствия такого отказа;</li>
												<li>опубликовать или иным образом обеспечить неограниченный доступ к документу, определяющему его политику в отношении обработки ПДн, к сведениям о реализуемых требованиях к защите ПДн;</li>
												<li>принимать необходимые правовые, организационные и технические меры или обеспечивать их принятие для защиты ПДн от неправомерного или случайного доступа к ним, уничтожения, изменения, блокирования, копирования, предоставления, распространения ПДн, а также от иных неправомерных действий в отношении ПДн;</li>
												<li>давать ответы на запросы и обращения субъектов ПДн, их представителей и уполномоченного органа по защите прав субъектов ПДн. </li>
											</ul>
										</li>
									</ol>
								</li>
							</ol>
						</div>
						<script>
							$(document).ready(function() {
								$("a#fancy_text_agree").fancybox();
							});
						</script>

					</form>
					<style>
						#sh_button{display:none;}
					</style>
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

<h2 class="hnb_mytitlepag">Армения</h2>
		<p>
По вопросам приобретения продукции Магнифлекс в Армении обращайтесь в наше новое представительство в городе Ереван.
Контактные телефоны : +374-967-47-293 +374-990-19-175 <br />
График работы: 9:00 - 22:00 ежедневно  <br />
Скоро открытие шоу-рума!
		</p>
<h2 class="hnb_mytitlepag">Беларусь</h2>
<p>
Официальное представительство MAGNIFLEX в Республике Беларусь.
<br />
Тел. +375-29-873-11-42, +375-29-624-11-42<br />
www.magniflex.by<br /><br />
Магазины в Беларуси:<br />
Минск, ул. Сурганова 57а, ТЦ «СТАРАЯ ЕВРОПА» магазин 199, этаж 3<br />
Минск, ул. Кульман 3, ТЦ «COOLMAN», магазин 308а, этаж 3<br />
</p>
	</div>
	<div style="clear: both;">

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
	
		<h3 >Албания </h3>
		<p>
			Салон  “George W. Bush”
Тирана<br />
Tel. +355 68 20 92 839
Салон  “Pranë mbi kalimit të Kamzës” <br />
Тирана<br />
Tel. +355 68 90 30 762
 “Gjergj Fishta, kulla 1” <br />
Тирана<br />
Tel. +355 68 90 30 772
		</p>
<h3 >Болгария  </h3>
<p>
Шоу-рум  в Софии: <br />
Телефон:  0700 11 117<br />
E-MAIL:  OFFICE@MATRAX.BG (для дилеров)<br />
CORPORATE@MATRAX.BG (покупателям)
</p>
<h3 >Великобритания:</h3>
		<p>
			Контактный телефон представительства:  +39 057451011

		</p>
<h3 >Германия</h3>
		<p>
			Контактные телефоны центрального офиса:
+39 057451011
		</p>
<h3 >Италия</h3>
		<p>
Via San Leonardo da Porto Maurizio 24/26/28 - 59100 Prato<br />
Tel +39 057451011 Fax +39 0574 5101.235
		</p>
<h3 >Кипр</h3>
<p>
Шоу-рум в Никосии<br />
20–21, ACHEON STR, ENGOMI<br />
Телефон для справок: 22351366
<br />
Шоу-рум, Лимасол<br />
6, MAKARIOS III AVE,<br />
Телефон для справок: 25560386
  		</p>
<h3>Косово</h3>
		<p>	Центральный офис-салон:<br />
Контактные телефоны:  +381 (0) 28 572 722; +377 (0) 44 196 741
+39 057451011</p>
		<h3 >Македония: </h3>
		<p>
Главный офис<br />
Скопье, ул. Наум Наумовски Борче 87<br />
Тел: 072 308 184
</p>
<h3 >Румыния </h3>
<p>
Центральный офис:<br />
Adrian Sentes, Bld.Decebal 4, Bl.S11 <br /><br />
Телефон:  +40 2132 120 85
</p>
<h3 >Украина:</h3>
<p>
Официальное представительство<br />
04210 Украина, г. Киев,  проспект Города Сталинграда, 6 корп. 8<br />
Тел./факс: +38 (044) 230-88-13, (044) 230-88-14, (044) 230-88-15.
</p>
<h3 >Чехия</h3>
		<p>
			Центральный офис:<br />
Šaldova 219/1 186 00 Praha 8 – Karlín
<br /><br />
Телефоны: +420 222 314 608; +420 739 492 220
		</p>
	</div>
	<div style="clear: both;">

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

		<h2 class="hnb_mytitlepag" >АЗИЯ</h2>
		<h3>Объединенные Арабские Эмираты </h3>
Шоу-рум:<br />
Дубаи <br />
Mazaya Centre <br />
Sheikh Zayed Road<br />
Shop G19A<br />
Телефоны: 800 62887377, +971 4 343 7577
<h3>Абу-Даби</h3>
<p>
Телефон для справок: +971 2 621 3720
</p>
<br />
<h3>Филлипины  </h3>
<p>
Контактный номер официального представительства: +39 057451011
</p>
<h3>Индия</h3>
<p>
Официальное представительство: </p>
#905 South Block, Manipal Centre<br />
No.47, Dickenson Road, Bangalore - 560042<br />
Телефон для справок: +91-80-42127118<br />
Электронная почта: customercare@magniflexindia.com<br />
Официальный сайт: www.magniflexindia.com<br />
</p>
<h3>Япония</h3>
<p>
Официальный сайт на английском языке: www.flag-s.com/index_eng.html<br />
Список магазинов: www.flag-s.com/magniland/index.html
		</p>
	</div>
	<div style="clear: both;">

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

		<h2 class="hnb_mytitlepag">США, КАНАДА</h2>
		<p>
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
	
		<h2 class="hnb_mytitlepag">Австралия</h2>
		<p>
По вопросам преобретения продукции компании Magniflex в Австралии Вы можете обратиться в следующие магазины:</p>
<div class="wrapper_countri">
		<div class="wrapper_co">
			<h3>Салоны Bev Marks Beds</h3>
			<br />
			www.bevmarks.com.au<br />
			Контактные телефоны:  (03) 9727 1200; (03) 9379 0400; (03) 5241 8308;  03 9465 9666; 03 8361 6050;<br /> (03) 8790 1266; (03) 9878 4955
			<br /><br />
			<h3>Сеть магазинов Sleep Doctor</h3>
			<br />
			Телефон для справок:  03 9041 4765
			<br /><br />
			<h3>Магазин Luke Furniture</h3>
			<br />
			Телефон для справок: (03) 9999 8930
			<br /><br />
			<h3>Магазин Curious Grace</h3>
			<br />
			Телефоны для справок: 03 9687 6878; 03 9481 3488<br />
			www.curiousgrace.com.au
	</div>
<img src="/img/curious_grace_nordic_bed_grande.png" alt="Матрасы Magniflex в Австралии">
</div>
	</div>
	<div style="clear: both;">

			'
		),
		array(
			'address' => 'kazahstan',
			'parent_address' => 'o-magniflex/magniflex-mattresses-world',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Другие страны',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Магнифлекс в Казахстан',
			'description' => 'Как купить продукцию компании Magniflex в Казахстан',
			'keywords' => 'magniflex Казахстан, магнифлекс Казахстан',
			'text' => '
			<style>
			.hnb_mworld{
				display:block;
			}
			</style>
	
		<h2 class="hnb_mytitlepag">Казахстан</h2>
		<p>
С 1 июля 2010 года республика Казахстан наряду с Россией является страной-участницей Таможенного союза, на территории которого не применяются таможенные пошлины и иные ограничения экономического характера, поэтому мы можем доставить Вам продукцию Magniflex без дополнительных сборов.
<br /><br />
Гарантируем высочайшее Качество, быструю и удобную Доставку до дома.
<br /><br />
По всем вопросам обращайтесь к нам по телефонам:
<br /><br />
+7 (495)  507 22 65 <br />
+7 (495)  989 11 32<br />
<br />
или по электронной почте:<br />
info@magniflex.ru
<br /><br />
Кроме того, если Вы оставите Ваш номер телефона наш специалист перезвонит Вам сам в самое ближайшее время.
</p>
<h3>Отправить нам сообщение</h3>
</p>
<div class="bx_mfeedback">
		<form action="/tools/form.php" method="POST" class="sf_form" onsubmit="return form_send(this);">
		<div class="form_input">
		<input class="new_order_input" type="text" name="name" value="">
		<label  >Ваше имя<span class="mf-req">*</span></label>
		</div>
		<div class="form_input">
		<input class="new_order_input" type="text" name="email" value="">
		<label >Ваш E-mail<span class="mf-req">*</span></label>
		</div>
		<div class="form_input">
		<textarea class="new_order_input" name="comment" rows="5" cols="40"></textarea>
		<label>Сообщение<span class="mf-req">*</span></label>
</div>
		<input  type="submit" name="submit" value="Отправить" class="bt_blue big shadow checkout_button_order">
	</form>
</div>
	</div>
	<div style="clear: both;">

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
			
			
					
			<h3>Когда необходимо заменить подушку</h3>
			Сотрудники 1-го МГМУ им. Сеченова настоятельно рекомендуют пользоваться подушками из современных материалов, которые не скатываются в «комочки» и легко стираются. Традиционные пуховые подушки слишком громоздкие, мягкие и «жаркие», мешают расслаблению мышц и могут стать причиной бессонницы. К тому же в них со временем заводятся пылевые клещи, которые становятся причиной покраснения и воспаления глаз, отека лица и слизистой, затрудненного дыхания, расчесов на коже. Пуховую подушку необходимо почаще взбивать, летом сушить на солнце, а через 3-5 лет обязательно нужно поменять на новую. <br /><br />
Современные подушки создаются из гиппораллергенных материалов, обеспечивающие 100% защиту от появления пылевых клещей. В основе ортопедических подушек Magniflex используются Memoform Magnifoam или «гель» Magnigel Foam. Наволочка всегда съемная, обычно из натурального хлопка — легко стирается. Срок службы таких подушек составляет не менее 12 лет!<br />
				
			
			'
		),
		array(
			'address' => 'elite-collections',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Элитные коллекции',
			'left_sidebar' => 'kogda-menyat-podushku',
			'title' => 'Элитные коллекции матрасов Magniflex',
			'description' => 'Описание элитных коллекций матрасов Магнифлекс',
			'keywords' => 'элитные коллекции матрасов',
			'text' => '
			<div class="hnb_contarea">
			<div class="hnb_conttextright">
<h1 style="    font-weight: 100;">Элитные Коллекции Magniflex</h1>
<!-- ripetere: DA QUI -->
<div class="rowCollezioni">
<div class="rowCollezioniSx"><a href="/elitnye-matrasy/rest/"><img src="/img/product/small/Rest.jpg" alt="Ортопедические элитные матрасы Magniflex Rest"></a></div>
<div class="rowCollezioniDx">
<h3>Classic</h3>
<p>Настоящая классика всегда в моде. Модели из этой коллекции отличаются особой сдержанностью, строгостью, пропорциональностью и элегантностью. Лейб мотив - "дорогая простота". Никаких остромодных или нефункциональных деталей. Классика предполагает чувство меры: в форме, объеме и цвете образа, придающее стабильность, гармонию и красоту. В оформлении элегантно сочетаются эстетические и функциональные детали.</p>
<a href="/elitnye-matrasy/rest/">Подробно</a></div>
<div style="clear: both;"> </div>
</div>
<!-- ripetere: A QUI --> <!-- ripetere: DA QUI -->
<div class="rowCollezioni">
<div class="rowCollezioniSx"><a href="/elitnye-matrasy/freshgel/"><img src="/img/product/small/FreshGel.jpg" alt="Ортопедические элитные матрасы Magniflex FreshGel"></a></div>
<div class="rowCollezioniDx">
<h3>FreshGel</h3>
<p>Ортопедический элитный матрас Premium класса. Легкий, воздушный, дышащий, необыкновенно проницаемый. Настоящее воплощение комфорта и удовольствие во сне. Многие специалисты сравнивают его с облаками.</p>
<a href="/elitnye-matrasy/freshgel/">Подробно</a></div>
<div style="clear: both;"> </div>
</div>
<!-- ripetere: A QUI --> <!-- ripetere: DA QUI -->
<div class="rowCollezioni">
<div class="rowCollezioniSx"><a href="/elitnye-matrasy/imperiale/" alt="Аристократические матрасы Magniflex imperiale"><img src="/img/product/small/Imperiale.jpg"></a></div>
<div class="rowCollezioniDx">
<h3>Imperiale</h3>
<p>Аристократические матрасы, созданные специально для тех, кто предпочитает аскетизму Роскошь и Простор. Высокий анатомический и ортопедический эффекты, в сочетании с терморегулирующими свойствами чехла, делают этот матрас идеальной системой комфортного сна и отдыха.</p>
<a href="/elitnye-matrasy/imperiale/">Подробно</a></div>
<div style="clear: both;"> </div>
</div>
<!-- ripetere: A QUI --> <!-- ripetere: DA QUI -->
<div class="rowCollezioni">
<div class="rowCollezioniSx"><a href="/elitnye-matrasy/magnificient/"><img src="/img/product/small/Magnificent.jpg" alt="Матрасы Premium класса Magniflex Magnificent"></a></div>
<div class="rowCollezioniDx">
<h3>Magnificent</h3>
<p>Коллекции ортопедических матрасов Premium класса. Воплощение элегантности и комфорта. Технологии Dual Core - моделируемая степень комфорта. 3D ткань. Чехол с технологией Viscose Termo. Космические технологии Outlast. Модель Magnificient особенно примечательна 12-ти см слоем MEMOFORM-a.
<br>
Обеспечивают эксклюзивный, идеальный комфорт во время сна!</p>
<a href="/elitnye-matrasy/magnificient/">Подробно</a></div>
<div style="clear: both;"> </div>
</div>
<!-- ripetere: A QUI --> <!-- ripetere: DA QUI -->
<div class="rowCollezioni">
<div class="rowCollezioniSx"><a href="/elitnye-matrasy/comfort-delux/"><img src="/img/product/small/Comfort%20Delux.jpg" alt="Коллекции ортопедических матрасов Premium класса New Comfort Plus"></a></div>
<div class="rowCollezioniDx">
<h3>New Comfort Plus</h3>
<p>Коллекции ортопедических матрасов Premium класса. Воплощение элегантности и комфорта. Технологии Dual Core - моделируемая степень комфорта. 3D ткань. Чехол с технологией Viscose Termo. Космические технологии Outlast. Модель Magnificient особенно примечательна 12-ти см слоем MEMOFORM-a.
<br>
Обеспечивают эксклюзивный, идеальный комфорт во время сна!</p>
<a href="/elitnye-matrasy/comfort-delux/">Подробно</a></div>
<div style="clear: both;"> </div>
</div>
<!-- ripetere: A QUI --> <!-- ripetere: DA QUI -->
<div class="rowCollezioni">
<div class="rowCollezioniSx"><a href="/elitnye-matrasy/virtus/"><img src="/img/product/small/Virtus.jpg" alt="Роскошная коллекция матрасов Magniflex Virtus"></a></div>
<div class="rowCollezioniDx">
<h3>Virtus</h3>
<p>Роскошная коллекция Virtus - действительно самые лучшие матрасы класса "Де-люкс". Натуральный шелк и кашемир, верблюжья шерсть и конский волос, наполнители MEMOFORM HD и MAGNIFORM BREEZE.</p>
<a href="/elitnye-matrasy/virtus/">Подробно</a></div>
<div style="clear: both;"> </div>
</div>
<!-- ripetere: A QUI --> <!-- ripetere: DA QUI -->
<div class="rowCollezioni">
<div class="rowCollezioniSx"><a href="/elitnye-matrasy/harmony/"><img src="/img/product/small/Harmony-coll.jpg" alt="Магнифлекс Harmony - Матрасы Royal класса"></a></div>
<div class="rowCollezioniDx">
<h3>Harmony</h3>
<p>Матрасы Royal класса. Съемный чехол Viscosa, технология Dual Core, Memoform - 8 см.
Идеальные матрасы с потрясающими свойствами, воплощение мечты.</p>
<a href="/elitnye-matrasy/harmony/">Подробно</a></div>
<div style="clear: both;"> </div>
</div>
<div style="clear: both;"> </div>
</div>
				<div style="clear: both;"></div>
			</div>
			</div>
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
							<li><a title="Размеры и Цены" href="https://www.magniflex.ru/production/sizes-and-prices/">Размеры и Цены</a></li>
						</ul>
					</li>
					<li>
						<a title="Информация покупателям" href="/pokupatelyam/dostavka/">Покупателям</a>
						<ul >
							<li></li>
							<li><a title="Оплата и доставка товаров" href="/pokupatelyam/oplata/">Оплата</a></li>
							<li><a title="Оплата и доставка товаров" href="/pokupatelyam/dostavka/">Доставка</a></li>
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
					<a href="/catalog/mattresses/mjagkie/">Мягкие ортопедические матрасы</a><br />
					<a href="/catalog/mattresses/srednej-zhestkosti/">Ортопедические матрасы средней жесткости</a><br />
					<a href="/catalog/mattresses/zhestkie/">Жесткие ортопедические матрасы</a><br />
					<a href="/catalog/mattresses/60x120/">60-120</a><br />
					<a href="/catalog/mattresses/70x160/">70-160</a><br />
					<a href="/catalog/mattresses/80x160/">80-160</a><br />
					<a href="/catalog/mattresses/80x180/">80-180</a><br />
					<a href="/catalog/mattresses/80x190/">80-190</a><br />
					<a href="/catalog/mattresses/80x200/">80-200</a><br />
					<a href="/catalog/mattresses/90x140/">90-140</a><br />
					<a href="/catalog/mattresses/90x190/">90-190</a><br />
					<a href="/catalog/mattresses/90x200/">90-200</a><br />
					<a href="/catalog/mattresses/100x200/">100-200</a><br />
					<a href="/catalog/mattresses/110x190/">110-190</a><br />
					<a href="/catalog/mattresses/120x190/">120-190</a><br />
					<a href="/catalog/mattresses/120x200/">120-200</a><br />
					<a href="/catalog/mattresses/140x190/">140-190</a><br />
					<a href="/catalog/mattresses/140x200/">140-200</a><br />
					<a href="/catalog/mattresses/150x190/">150-190</a><br />
					<a href="/catalog/mattresses/150x200/">150-200</a><br />
					<a href="/catalog/mattresses/160x190/">160-190</a><br />
					<a href="/catalog/mattresses/160x200/">160-200</a><br />
					<a href="/catalog/mattresses/180x200/">180-200</a><br />
					<a href="/catalog/mattresses/200x200/">200-200</a><br />
					<a href="/catalog/mattresses/200x220/">200-220</a><br />
					<a title="Ортопедические матрасы Magniflex" href="/catalog/mattresses/">Ортопедические матрасы</a><br />
					<a  title="Ортопедический матрас Merino (Merinos)" href="/catalog/orthopedic_mattresses/MERINOS/">Merino</a> <br />
					<a title="Ортопедический матрас Merino (Merinos)" href="/catalog/orthopedic_mattresses/MERINOS/">(Merinos)</a><br />
					<a  title="Ортопедический матрас Merino Green Tea" href="/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/">Merino Green Tea</a><br />
					<a  title="Ортопедический матрас Bamboo" href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/">Bamboo</a><br />
					<a  title="Ортопедический матрас WaterLattex" href="/catalog/orthopedic_mattresses/waterlattex/">WaterLattex</a><br />
					<a  title="Ортопедический матрас Naturalmente" href="/catalog/orthopedic_mattresses/new-naturcomfort/">Naturalmente</a><br />
					<a  title="Ортопедический матрас Natur Baci" href="/catalog/orthopedic_mattresses/natur-baci-mattress/">Natur Baci</a><br />
					<a  title="Ортопедический матрас Orthomemo Merino" href="/catalog/orthopedic_mattresses/memo-merino/">Orthomemo Merino</a><br />
					<a title="Удобное сравнение матрасов Magniflex" href="/sravnenie-matrasov/">Удобное сравнение матрасов</a><br />
					<a title="Новинки матрасов Magniflex!" href="/catalog/new-mattresses/">Новинки! Премиум-класс</a><br />
					<a  title="Ортопедический матрас Rest 9" href="/catalog/elitnye-matrasy/Rest-9/">Rest 9</a><br />
					<a  title="Ортопедический матрас New Comfort Plus 10" href="/catalog/elitnye-matrasy/Comfort-Plus-10/">New Comfort Plus 10</a><br />
					<a  title="Ортопедический матрас FreshGel 10" href="/catalog/elitnye-matrasy/Comfort-Plus-10/">FreshGel 10</a><br />
					<a title="Элитные матрасы Magniflex" href="/catalog/elitnye-matrasy/">Элитные матрасы</a><br />
					<a  title="Коллекция этилных матрасов Virtus" href="/elitnye-matrasy/virtus/">Коллекция Virtus</a><br />
					<a  title="Элитный матрас Virtus 30" href="/catalog/elitnye-virtus/Virtus-30/">Virtus 30</a><br />
					<a  title="Коллекция этилных матрасов Harmony" href="/elitnye-matrasy/harmony/">Коллекция Harmony</a><br />
					<a  title="Элитный матрас Exchange Memoform Dual" href="/catalog/elitnye-harmony/Exchange-Memoform-Dual/">Exchange Memoform Dual</a><br />
					<a  title="Коллекция этилных матрасов Magnificent" href="/elitnye-matrasy/magnificient/">Коллекция Magnificent</a><br />
					<a  title="Элитный матрас Magnificent 12" href="/catalog/elitnye-magnificent/Magnificent-12/">Magnificent 12</a><br />
					<a  title="Коллекция этилных матрасов Imperiale" href="/elitnye-matrasy/imperiale/">Коллекция Imperiale</a><br />
					<a  title="Элитный матрас Imperiale 24" href="/catalog/elitnye-imperiale/Imperiale-24/">Imperiale 24</a><br />
					<a  title="Элитный матрас Imperiale 28" href="/catalog/elitnye-imperiale/Imperiale-28/">Imperiale 28</a><br />
					<a  title="Элитный матрас Imperiale 33" href="/catalog/elitnye-imperiale/Imperiale-33/">Imperiale 33</a><br />
					<a  title="Коллекция этилных матрасов New Comfort Plus" href="/elitnye-matrasy/comfort-delux/">Коллекция New Comfort Plus</a><br />
					<a  title="Элитный матрас New Comfort Plus 10" href="/catalog/elitnye-comfort-delux/Comfort-Plus-10/">New Comfort Plus 10</a><br />
					<a  title="Элитный матрас New Comfort Plus 12" href="/catalog/elitnye-comfort-delux/Comfort-Plus-12/">New Comfort Plus 12</a><br />
					<a  title="Элитный матрас FreshGel 9" href="/catalog/elitnye-FreshGel/FreshGel-9/">FreshGel 9</a><br />
					<a  title="Элитный матрас FreshGel 10" href="/catalog/elitnye-FreshGel/FreshGel-10/">FreshGel 10</a><br />
					<a  title="Элитный матрас FreshGel 12" href="/catalog/elitnye-FreshGel/FreshGel-12/">FreshGel 12</a><br />
					<a  title="Коллекция этилных матрасов Rest" href="/elitnye-matrasy/rest/">Коллекция Rest</a><br />
					<a  title="Элитный матрас Rest 9" href="/catalog/elitnye-rest/Rest-9/">Rest 9</a><br />
					<a  title="Элитный матрас Rest 10" href="/catalog/elitnye-rest/Rest-10/">Rest 10</a><br />
					<a  title="Элитный матрас Rest 12" href="/catalog/elitnye-rest/Rest-12/">Rest 12</a><br />
					<a href="/catalog/elitnye-virtus/Virtus-30/"></a>
					<a title="Детские матрасы и подушки Magniflex" href="/catalog/detskie-ortopedicheskie-matrasy/">Детские матрасы</a><br />
					<a title="Детские ортопедические матрасы Magniflex" href="/catalog/detskie-ortopedicheskie-matrasy/">Детские матрасы</a><br />
					<a  title="Ортопедический матрас Merino для детей" href="/catalog/detskie-ortopedicheskie-matrasy/MERINO-childrens/">Merino для детей</a><br />
					<a  title="Ортопедический матрас Merino Bamboo для детей" href="/catalog/detskie-matrasy/Merino+Bamboo/">Merino Bamboo для детей</a><br />
					<a title="Подушки Magniflex" href="/catalog/pillows/">Подушки</a><br />
					<a href="/catalog/pillows/s-effektom-pamjati/">Подушки с эффектом памяти</a><br />
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
			.hnb_gal {
				display: flex;
				flex-wrap: wrap;
				justify-content: end;
				width: 100%;
			}
			</style>
		<p>
		Путешествуя этим летом по  Европе, Вы можете встретить матрасы Magniflex не только в элитных бутиках, но и ... на пляжах Италии, Монако и на Ибице. Специалисты нашей компании подготовились к пляжному сезону и разработали удобные шезлонги и лежаки.
		</p>
		<h4>Magniflex делает Вашу жизнь комфортнее!</h4>
		<p>
		Представляем Вашему вниманию фотоотчет с знаменитых на весь мир пляжей Blu Marlin Ibiza, Ocean Beach, Twiga, Zelos (Монте-Карло) и Ushuaia.
		</p>
<div class="hnb_gal1">
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_1.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_1_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_2.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_2_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_3.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_3_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_4.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_4_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/hermitage-logo.jpg" alt="Hotel Hermitage" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_5.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_5_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_6.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_6_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_7_.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_7_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_8.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_8_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_1.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_1_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_2.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_2_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_3.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_3_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_4.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_4_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/byron_logo.jpg" alt="Byron" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_5.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_5_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_6.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_6_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_7_.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_7_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_8.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_8_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bagatelle_1.jpg" class="boxer relgallery" title="Magniflex в Bagatelle"  itemprop="contentUrl"> <img src="/img/dream/small/bagatelle_1_t.jpg" alt="Magniflex в Bagatelle" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bagatelle_2.jpg" class="boxer relgallery" title="Magniflex в Bagatelle"  itemprop="contentUrl"> <img src="/img/dream/small/bagatelle_2_t.jpg" alt="Magniflex в Bagatelle" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bagatelle_3.jpg" class="boxer relgallery" title="Magniflex в Bagatelle"  itemprop="contentUrl"> <img src="/img/dream/small/bagatelle_3_t.jpg" alt="Magniflex в Bagatelle" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bagatelle_4.jpg" class="boxer relgallery" title="Magniflex в Bagatelle"  itemprop="contentUrl"> <img src="/img/dream/small/bagatelle_4_t.jpg" alt="Magniflex в Bagatelle" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/bagatelle_logo.jpg" alt="Bagatelle" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bagatelle_5.jpg" class="boxer relgallery" title="Magniflex в Bagatelle"  itemprop="contentUrl"> <img src="/img/dream/small/bagatelle_5_t.jpg" alt="Magniflex в Bagatelle" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bagatelle_6.jpg" class="boxer relgallery" title="Magniflex в Bagatelle"  itemprop="contentUrl"> <img src="/img/dream/small/bagatelle_6_t.jpg" alt="Magniflex в Bagatelle" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bagatelle_7_.jpg" class="boxer relgallery" title="Magniflex в Bagatelle"  itemprop="contentUrl"> <img src="/img/dream/small/bagatelle_7_t.jpg" alt="Magniflex в Bagatelle" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bagatelle_8.jpg" class="boxer relgallery" title="Magniflex в Bagatelle"  itemprop="contentUrl"> <img src="/img/dream/small/bagatelle_8_t.jpg" alt="Magniflex в Bagatelle" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/tanit_1.jpg" class="boxer relgallery" title="Magniflex в Tanit Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/tanit_1_t.jpg" alt="Magniflex в Tanit Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/tanit_2.jpg" class="boxer relgallery" title="Magniflex в Tanit Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/tanit_2_t.jpg" alt="Magniflex в Tanit Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/tanit_3.jpg" class="boxer relgallery" title="Magniflex в Tanit Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/tanit_3_t.jpg" alt="Magniflex в Tanit Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/tanit_4.jpg" class="boxer relgallery" title="Magniflex в Tanit Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/tanit_4_t.jpg" alt="Magniflex в Tanit Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/tanit_logo.jpg" alt="Tanit Beach Ibiza" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/tanit_5.jpg" class="boxer relgallery" title="Magniflex в Tanit Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/tanit_5_t.jpg" alt="Magniflex в Tanit Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/tanit_6.jpg" class="boxer relgallery" title="Magniflex в Tanit Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/tanit_6_t.jpg" alt="Magniflex в Tanit Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/tanit_7_.jpg" class="boxer relgallery" title="Magniflex в Tanit Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/tanit_7_t.jpg" alt="Magniflex в Tanit Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/tanit_8.jpg" class="boxer relgallery" title="Magniflex в Tanit Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/tanit_8_t.jpg" alt="Magniflex в Tanit Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/nassau_1.jpg" class="boxer relgallery" title="Magniflex в Nassau Beach Club"  itemprop="contentUrl"> <img src="/img/dream/small/nassau_1_t.jpg" alt="Magniflex в Nassau Beach Club" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/nassau_2.jpg" class="boxer relgallery" title="Magniflex в Nassau Beach Club"  itemprop="contentUrl"> <img src="/img/dream/small/nassau_2_t.jpg" alt="Magniflex в Nassau Beach Club" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/nassau_3.jpg" class="boxer relgallery" title="Magniflex в Nassau Beach Club"  itemprop="contentUrl"> <img src="/img/dream/small/nassau_3_t.jpg" alt="Magniflex в Nassau Beach Club" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/nassau_4.jpg" class="boxer relgallery" title="Magniflex в Nassau Beach Club"  itemprop="contentUrl"> <img src="/img/dream/small/nassau_4_t.jpg" alt="Magniflex в Nassau Beach Club" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/nassau_logo.jpg" alt="Nassau Beach Club" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/nassau_5.jpg" class="boxer relgallery" title="Magniflex в Nassau Beach Club"  itemprop="contentUrl"> <img src="/img/dream/small/nassau_5_t.jpg" alt="Magniflex в Nassau Beach Club" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/nassau_6.jpg" class="boxer relgallery" title="Magniflex в Nassau Beach Club"  itemprop="contentUrl"> <img src="/img/dream/small/nassau_6_t.jpg" alt="Magniflex в Nassau Beach Club" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/nassau_7_.jpg" class="boxer relgallery" title="Magniflex в Nassau Beach Club"  itemprop="contentUrl"> <img src="/img/dream/small/nassau_7_t.jpg" alt="Magniflex в Nassau Beach Club" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/nassau_8.jpg" class="boxer relgallery" title="Magniflex в Nassau Beach Club"  itemprop="contentUrl"> <img src="/img/dream/small/nassau_8_t.jpg" alt="Magniflex в Nassau Beach Club" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/chezzgerdi_1.jpg" class="boxer relgallery" title="Magniflex в ChezzGerdi Formentera"  itemprop="contentUrl"> <img src="/img/dream/small/chezzgerdi_1_t.jpg" alt="Magniflex в ChezzGerdi Formentera" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/chezzgerdi_2.jpg" class="boxer relgallery" title="Magniflex в ChezzGerdi Formentera"  itemprop="contentUrl"> <img src="/img/dream/small/chezzgerdi_2_t.jpg" alt="Magniflex в ChezzGerdi Formentera" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/chezzgerdi_3.jpg" class="boxer relgallery" title="Magniflex в ChezzGerdi Formentera"  itemprop="contentUrl"> <img src="/img/dream/small/chezzgerdi_3_t.jpg" alt="Magniflex в ChezzGerdi Formentera" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/chezzgerdi_4.jpg" class="boxer relgallery" title="Magniflex в ChezzGerdi Formentera"  itemprop="contentUrl"> <img src="/img/dream/small/chezzgerdi_4_t.jpg" alt="Magniflex в ChezzGerdi Formentera" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/chezzgerdi_logo.jpg" alt="ChezzGerdi Formentera" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/chezzgerdi_5.jpg" class="boxer relgallery" title="Magniflex в ChezzGerdi Formentera"  itemprop="contentUrl"> <img src="/img/dream/small/chezzgerdi_5_t.jpg" alt="Magniflex в ChezzGerdi Formentera" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/chezzgerdi_6.jpg" class="boxer relgallery" title="Magniflex в ChezzGerdi Formentera"  itemprop="contentUrl"> <img src="/img/dream/small/chezzgerdi_6_t.jpg" alt="Magniflex в ChezzGerdi Formentera" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/chezzgerdi_7_.jpg" class="boxer relgallery" title="Magniflex в ChezzGerdi Formentera"  itemprop="contentUrl"> <img src="/img/dream/small/chezzgerdi_7_t.jpg" alt="Magniflex в ChezzGerdi Formentera" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/chezzgerdi_8.jpg" class="boxer relgallery" title="Magniflex в ChezzGerdi Formentera"  itemprop="contentUrl"> <img src="/img/dream/small/chezzgerdi_8_t.jpg" alt="Magniflex в ChezzGerdi Formentera" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/esmolidessal_1.jpg" class="boxer relgallery" title="Magniflex в ES MOLI DE SAL"  itemprop="contentUrl"> <img src="/img/dream/small/esmolidessal_1_t.jpg" alt="Magniflex в ES MOLI DE SAL" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/esmolidessal_2.jpg" class="boxer relgallery" title="Magniflex в ES MOLI DE SAL"  itemprop="contentUrl"> <img src="/img/dream/small/esmolidessal_2_t.jpg" alt="Magniflex в ES MOLI DE SAL" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/esmolidessal_3.jpg" class="boxer relgallery" title="Magniflex в ES MOLI DE SAL"  itemprop="contentUrl"> <img src="/img/dream/small/esmolidessal_3_t.jpg" alt="Magniflex в ES MOLI DE SAL" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/esmolidessal_4.jpg" class="boxer relgallery" title="Magniflex в ES MOLI DE SAL"  itemprop="contentUrl"> <img src="/img/dream/small/esmolidessal_4_t.jpg" alt="Magniflex в ES MOLI DE SAL" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/esmolidessal_logo.jpg" alt="ES MOLI DE SAL" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/esmolidessal_5.jpg" class="boxer relgallery" title="Magniflex в ES MOLI DE SAL"  itemprop="contentUrl"> <img src="/img/dream/small/esmolidessal_5_t.jpg" alt="Magniflex в ES MOLI DE SAL" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/esmolidessal_6.jpg" class="boxer relgallery" title="Magniflex в ES MOLI DE SAL"  itemprop="contentUrl"> <img src="/img/dream/small/esmolidessal_6_t.jpg" alt="Magniflex в ES MOLI DE SAL" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/esmolidessal_7_.jpg" class="boxer relgallery" title="Magniflex в ES MOLI DE SAL"  itemprop="contentUrl"> <img src="/img/dream/small/esmolidessal_7_t.jpg" alt="Magniflex в ES MOLI DE SAL" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/esmolidessal_8.jpg" class="boxer relgallery" title="Magniflex в ES MOLI DE SAL"  itemprop="contentUrl"> <img src="/img/dream/small/esmolidessal_8_t.jpg" alt="Magniflex в ES MOLI DE SAL" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/restaurant&amp;beachlascogliera_1.jpg" class="boxer relgallery" title="Magniflex в Restaurant & Beach La Scogliera"  itemprop="contentUrl"> <img src="/img/dream/small/restaurant&amp;beachlascogliera_1_t.jpg" alt="Magniflex в Restaurant & Beach La Scogliera" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/restaurant&amp;beachlascogliera_2.jpg" class="boxer relgallery" title="Magniflex в Restaurant & Beach La Scogliera"  itemprop="contentUrl"> <img src="/img/dream/small/restaurant&amp;beachlascogliera_2_t.jpg" alt="Magniflex в Restaurant & Beach La Scogliera" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/restaurant&amp;beachlascogliera_3.jpg" class="boxer relgallery" title="Magniflex в Restaurant & Beach La Scogliera"  itemprop="contentUrl"> <img src="/img/dream/small/restaurant&amp;beachlascogliera_3_t.jpg" alt="Magniflex в Restaurant & Beach La Scogliera" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/restaurant&amp;beachlascogliera_4.jpg" class="boxer relgallery" title="Magniflex в Restaurant & Beach La Scogliera"  itemprop="contentUrl"> <img src="/img/dream/small/restaurant&amp;beachlascogliera_4_t.jpg" alt="Magniflex в Restaurant & Beach La Scogliera" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/restaurant&amp;beachlascogliera_logo.jpg" alt="Restaurant & Beach La Scogliera" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/restaurant&amp;beachlascogliera_5.jpg" class="boxer relgallery" title="Magniflex в Restaurant & Beach La Scogliera"  itemprop="contentUrl"> <img src="/img/dream/small/restaurant&amp;beachlascogliera_5_t.jpg" alt="Magniflex в Restaurant & Beach La Scogliera" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/restaurant&amp;beachlascogliera_6.jpg" class="boxer relgallery" title="Magniflex в Restaurant & Beach La Scogliera"  itemprop="contentUrl"> <img src="/img/dream/small/restaurant&amp;beachlascogliera_6_t.jpg" alt="Magniflex в Restaurant & Beach La Scogliera" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/restaurant&amp;beachlascogliera_7_.jpg" class="boxer relgallery" title="Magniflex в Restaurant & Beach La Scogliera"  itemprop="contentUrl"> <img src="/img/dream/small/restaurant&amp;beachlascogliera_7_t.jpg" alt="Magniflex в Restaurant & Beach La Scogliera" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/restaurant&amp;beachlascogliera_8.jpg" class="boxer relgallery" title="Magniflex в Restaurant & Beach La Scogliera"  itemprop="contentUrl"> <img src="/img/dream/small/restaurant&amp;beachlascogliera_8_t.jpg" alt="Magniflex в Restaurant & Beach La Scogliera" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/beachouse_1.jpg" class="boxer relgallery" title="Magniflex в Beachouse"  itemprop="contentUrl"> <img src="/img/dream/small/beachouse_1_t.jpg" alt="Magniflex в Beachouse" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/beachouse_2.jpg" class="boxer relgallery" title="Magniflex в Beachouse"  itemprop="contentUrl"> <img src="/img/dream/small/beachouse_2_t.jpg" alt="Magniflex в Beachouse" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/beachouse_3.jpg" class="boxer relgallery" title="Magniflex в Beachouse"  itemprop="contentUrl"> <img src="/img/dream/small/beachouse_3_t.jpg" alt="Magniflex в Beachouse" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/beachouse_4.jpg" class="boxer relgallery" title="Magniflex в Beachouse"  itemprop="contentUrl"> <img src="/img/dream/small/beachouse_4_t.jpg" alt="Magniflex в Beachouse" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/beachouse_logo.jpg" alt="Beachouse" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/beachouse_5.jpg" class="boxer relgallery" title="Magniflex в Beachouse"  itemprop="contentUrl"> <img src="/img/dream/small/beachouse_5_t.jpg" alt="Magniflex в Beachouse" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/beachouse_6.jpg" class="boxer relgallery" title="Magniflex в Beachouse"  itemprop="contentUrl"> <img src="/img/dream/small/beachouse_6_t.jpg" alt="Magniflex в Beachouse" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/beachouse_7_.jpg" class="boxer relgallery" title="Magniflex в Beachouse"  itemprop="contentUrl"> <img src="/img/dream/small/beachouse_7_t.jpg" alt="Magniflex в Beachouse" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/beachouse_8.jpg" class="boxer relgallery" title="Magniflex в Beachouse"  itemprop="contentUrl"> <img src="/img/dream/small/beachouse_8_t.jpg" alt="Magniflex в Beachouse" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ocean_beach_1.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_1.jpg" alt="Развлечения Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ocean_beach_2.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_2.jpg" alt="Развлечения Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ocean_beach_3.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_3.jpg" alt="Отдых на Magniflex в Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ocean_beach_4.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_4.jpg" alt="Отдых с Magniflex в Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/ocean_logo.jpg" alt="Лого Ocean Beach Ibiza" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ocean_beach_5.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_5.jpg" alt="Ночная жизнь Ocean Beach Ibiza. Комфортные матрасы Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ocean_beach_6.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_6.jpg" alt="Отдых на Magniflex в Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ocean_beach_7.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_7.jpg" alt="Отдых на Magniflex в Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ocean_beach_8.jpg" class="boxer relgallery" title="Magniflex в Ocean Beach Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/ocean_beach_8.jpg" alt="Отдых на Magniflex в Ocean Beach Ibiza" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_1.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_1.jpg" alt="Blu Marlin Ibiza UAE" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_2.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_2.jpg" alt="Атмосфера в Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_3.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_3.jpg" alt="Удобный шезлонг Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_4.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_4.jpg" alt="Лежаки Magniflex в Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/blue_marlin_ibiza_logo.jpg" alt="Magniflex в Blu Marlin Ibiza" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_5.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_5.jpg" alt="Лежаки Magniflex в Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_6.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_6.jpg" alt="Романтика. Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_7.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_7.jpg" alt="Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/blue_marlin_ibiza_8.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/blue_marlin_ibiza_8.jpg" alt="Magniflex и Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bm_uae_1.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_1.jpg" alt="Комфортный лежак Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bm_uae_2.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_2.jpg" alt="Magniflex - все что нужно для отдыха" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bm_uae_3.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_3.jpg" alt="Magniflex и Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bm_uae_4.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_4.jpg" alt="Магнифлекс - это весело" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/bm_uae_logo.jpg" alt="Magniflex в Blu Marlin Ibiza" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bm_uae_5.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_5.jpg" alt="Лого Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bm_uae_6.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_6.jpg" alt="Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bm_uae_7.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_7.jpg" alt="Напитки Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/bm_uae_8.jpg" class="boxer relgallery" title="Magniflex в Blu Marlin Ibiza"  itemprop="contentUrl"> <img src="/img/dream/small/bm_uae_8.jpg" alt="Лежаки Magniflex в Blu Marlin Ibiza" itemprop="thumbnailUrl" /></a></span>
<div style="clear:both;"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<div class="ama_empty_space"></div>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/twiga_1.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_1.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/twiga_2.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_2.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/twiga_3.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_3.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/twiga_4.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_4.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/twiga_logo.jpg" alt="TWIGA" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/twiga_5.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_5.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/twiga_6.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_6.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/twiga_7.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_7.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/twiga_8.jpg" class="boxer relgallery" title="Magniflex в TWIGA"  itemprop="contentUrl"> <img src="/img/dream/small/twiga_8.jpg" alt="Magniflex в пляжном клубе TWIGA" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ushuaia_1.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_1.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ushuaia_2.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_2.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ushuaia_3.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_3.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ushuaia_4.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_4.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/ushuaia_logo.jpg" alt="ushuaia" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ushuaia_5.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_5.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ushuaia_6.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_6.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ushuaia_7.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_7.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/ushuaia_8.jpg" class="boxer relgallery" title="Magniflex в Ushuaia"  itemprop="contentUrl"> <img src="/img/dream/small/ushuaia_8.jpg" alt="Клуб, отель Ushuaia и Magniflex" itemprop="thumbnailUrl" /></a></span>
<div class="ama_empty_space"></div>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<br /><br /><br /><br />
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/zelos_1.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_1.jpg" alt="Zelos (Монте-Карло)" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/zelos_2.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_2.jpg" alt="Интерьер Zelos (Монте-Карло)" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/zelos_3.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_3.jpg" alt="Лежак Magniflex в Zelos (Монте-Карло)" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/zelos_4.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_4.jpg" alt="Атмосфера Zelos (Монте-Карло)" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/zelos_logo.jpg" alt="Zelos" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/zelos_5.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_5.jpg" alt="пляж Zelos" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/zelos_6.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_6.jpg" alt="пляж Zelos" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/zelos_7.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_7.jpg" alt="меню Zelos" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/zelos_8.jpg" class="boxer relgallery" title="Magniflex и Zelos (Монте-Карло)"  itemprop="contentUrl"> <img src="/img/dream/small/zelos_8.jpg" alt="Magniflex и Zelos (Монте-Карло)" itemprop="thumbnailUrl" /></a></span>
		</div>
	<br>
<br>
 <br>

<br>
 <br>
<div class="clear"></div>
			'
		),
		array(
			'address' => 'search',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Поиск',
			'left_sidebar' => '',
			'title' => 'Поиск',
			'description' => '',
			'keywords' => '',
			'text' => "
<div id=\"ya-site-results\" onclick=\"return {'tld': 'ru','language': 'ru','encoding': '','htmlcss': '1.x','updatehash': true}\"></div><script type=\"text/javascript\">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0];s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Results.init();})})(window,document,'yandex_site_callbacks');</script>
"
		),
		array(
			'address' => 'salon-matras-ok',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => '',
			'name' => 'Салон "Матрас-ок"',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Салон "Матрас-ок"',
			'description' => '',
			'keywords' => '',
			'text' => '
			 <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"> </script>
			<script>
						ymaps.ready(init);
						        var myMap,
						            myPlacemark;

						        function init(){
						            myMap = new ymaps.Map("map", {
						                center: [55.788506, 37.590780],
						                zoom: 16
						            });

						            myPlacemark = new ymaps.Placemark([55.788506, 37.590780], {
						                hintContent: "Салон Матрас-ок",
						                balloonContent: "Салон Матрас-ок"
						            });

						            myMap.geoObjects.add(myPlacemark);

						}
			</script>

			<h2 class="hnb_mytitlepag">Салон «Матрас-ок»</h2>
			<div class="matrass_map"  id="map"> </div>
			<div class="salon-matras-ok" style="margin-top:50px">
				<table class="tabl_detail_mag">
					<tr>
						<td>Адрес</td><td>Часы работы</td><td>Контакты</td><td>Экспозиция</td>
					</tr>
					<tr>
						<td>Салон "Матрас-ок" <br> м. Менделеевская, Новослободская улица, <br> 67/69, 1 этаж</td><td>Пн - Вс: с 10:00 до 21:00, <br> Ежедневно <br>  Бесплатная парковка - звоните </td><td>8 (499) 973-17-19,<br> 8 (499) 973-16-65 <br> info@matras-ok.ru <br> www.matras-ok.ru</td><td>Rest 10 90x200 <br> + подушки</td>
					</tr>
				</table>
			</div>
			<div class="hnb_gal" style="margin-top:50px">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/moskva_matrasok_01.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/moskva_matrasok_01.jpg" alt="Матрасы Magniflex в Москве. Салон «Матрас-ок»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/moskva_matrasok_04.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/moskva_matrasok_04.jpg" alt="Матрасы Magniflex в Москве. Салон «Матрас-ок»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/moskva_matrasok_05(1).jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/moskva_matrasok_05(1).jpg" alt="Матрасы Magniflex в Москве. Салон «Матрас-ок»" itemprop="thumbnailUrl" /></a></span>
</div>
		
		'
		),
		array(
			'address' => 'sochi-palazzo',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => '',
			'name' => 'Салон "Palazzo"',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Салон "Palazzo"',
			'description' => '',
			'keywords' => '',
			'text' => '
			 <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"> </script>
			<script>
						ymaps.ready(init);
						        var myMap,
						            myPlacemark;

						        function init(){
						            myMap = new ymaps.Map("map", {
						                center: [43.51830030, 39.85562650],
						                zoom: 16
						            });

						            myPlacemark = new ymaps.Placemark([43.51830031, 39.85562651], {
						                hintContent: "Салон Palazzo",
						                balloonContent: "Palazzo"
						            });

						            myMap.geoObjects.add(myPlacemark);

						}
			</script>
<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">
			<h2 class="hnb_mytitlepag">Салон «Palazzo»</h2>
			<div style="width: 714px; height: 460px" id="map"> </div>
			<div class="salon-matras-ok" style="margin-top:50px">
				<table class="tabl_detail_mag">
					<tr>
						<td>Адрес</td><td>Часы работы</td><td>Контакты</td><td>Экспозиция</td>
					</tr>
					<tr>
						<td>Салон "Palazzo" <br> г. Сочи, ул. Пластунская, дом 70</td><td>Ежедневно: <br>10:00 - 20:00</td><td>Тел.: +7 (988) 236-00-66</td><td>На экспозиции:<br>
						Rest 10 160x200<br>
						Waterlattex 160x200<br>
						Stile 7 160x200<br>
						Pensiero 7 160x200</td>
					</tr>
				</table>
			</div>
			<div class="hnb_gal" style="margin-top:50px">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/pal1.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/pal1.jpg" alt="Матрасы Magniflex в Сочи. Салон «Palazzo»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/pal2.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/pal2.jpg" alt="Матрасы Magniflex в Сочи. Салон «Palazzo»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/pal3.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/pal3.jpg" alt="Матрасы Magniflex в Сочи. Салон «Palazzo»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/pal4.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/pal4.jpg" alt="Матрасы Magniflex в Сочи. Салон «Palazzo»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/pal5.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/pal5.jpg" alt="Матрасы Magniflex в Сочи. Салон «Palazzo»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/pal6.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/pal6.jpg" alt="Матрасы Magniflex в Сочи. Салон «Palazzo»" itemprop="thumbnailUrl" /></a></span>
</div>
				</div>
				<div style="clear: both;"></div>
			</div>

		'
		),
		array(
			'address' => 'salon-Magniflex-Orthosleep',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'ООО "Демиани", бутик "Magniflex&Orthosleep"',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'ООО "Демиани", бутик "Magniflex&Orthosleep"',
			'description' => '',
			'keywords' => '',
			'text' => '
<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">
			<h2 class="hnb_mytitlepag">ООО "Демиани", бутик "Magniflex&Orthosleep"</h2>
			<div class="salon-matras-ok" style="margin-top:50px">
				<table class="tabl_detail_mag">
					<tr>
						<td>Адрес</td><td>Часы работы</td><td>Контакты</td><td>Экспозиция</td>
					</tr>
					<tr>
						<td>бутик "Magniflex&Orthosleep"<br> ТЦ "Три Кита",  Московская обл., Одинцовский р-н,<br> Новоивановское пгт, ул. Луговая, 2, 3 этаж, матрасная секция.</td>
						<td>Ежедневно 10:00 - 21:00</td><td>+7 901-363-25-28 <br> trikita-butik@mail.ru</td><td>Большая экспозиция матрасов и подушек.</td>
					</tr>
				</table>
			</div>
			<div class="hnb_gal" style="margin-top:50px">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0079.JPG" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0079.JPG" alt="Матрасы Magniflex в Московской обл., Одинцовский р-н. ООО "Демиани", бутик «Magniflex&Orthosleep»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0082.JPG" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0082.JPG" alt="Матрасы Magniflex в Московской обл., Одинцовский р-н. ООО "Демиани", бутик «Magniflex&Orthosleep»" itemprop="thumbnailUrl" /></a></span>
</div>
				</div>
				<div style="clear: both;"></div>
			</div>
		'
		),
		array(
			'address' => 'salon-Orthosleep',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Салон Orthosleep в ТЦ "Румянцево"',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Салон Orthosleep в ТЦ "Румянцево"',
			'description' => '',
			'keywords' => '',
			'text' => '
            <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"> </script>
			<script>
						ymaps.ready(init);
						        var myMap,
						            myPlacemark;

						        function init(){
						            myMap = new ymaps.Map("map", {
						                center: [55.6342359, 37.4379625],
						                zoom: 16
						            });
						            myPlacemark = new ymaps.Placemark([55.6342359, 37.4379625], {
						                hintContent: "ИП Драгунов Алексей Сергеевич",
						                balloonContent: "ИП Драгунов Алексей Сергеевич"
						            });
						            myMap.geoObjects.add(myPlacemark);
						}
			</script>
<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">
			<h2 class="hnb_mytitlepag">Салон Orthosleep в ТЦ "Румянцево"</h2>
			<div style="width: 714px; height: 460px" id="map"> </div>
			<div class="salon-matras-ok" style="margin-top:50px">
				<table class="tabl_detail_mag">
					<tr>
						<td>Адрес</td><td>Часы работы</td><td>Контакты</td><td>Экспозиция</td>
					</tr>
					<tr>
						<td>Салон Orthosleep<br> Адрес: г. Москва, Киевское шоссе 1, 500 м от МКАД в область, Корпус А, вход №3, 2 этаж </td>
						<td>Ежедневно 10:00 - 21:00</td><td>+7 (495) 788-39-68 <br> trikita-butik@mail.ru</td>
						<td>Экспозиция матрасов и подушек</td>
					</tr>
				</table>
			</div>
			<div class="hnb_gal" style="margin-top:50px">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/shops/salon-Orthosleep/01.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/011.jpg" alt="Матрасы Magniflex в Москве. Салон Orthosleep в ТЦ «Румянцево»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/shops/salon-Orthosleep/02.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/021.jpg" alt="Матрасы Magniflex в Москве. Салон Orthosleep в ТЦ «Румянцево»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/shops/salon-Orthosleep/03.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/031.jpg" alt="Матрасы Magniflex в Москве. Салон Orthosleep в ТЦ «Румянцево»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/shops/salon-Orthosleep/04.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/041.jpg" alt="Матрасы Magniflex в Москве. Салон Orthosleep в ТЦ «Румянцево»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/shops/salon-Orthosleep/05.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/051.jpg" alt="Матрасы Magniflex в Москве. Салон Orthosleep в ТЦ «Румянцево»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/shops/salon-Orthosleep/06.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/061.jpg" alt="Матрасы Magniflex в Москве. Салон Orthosleep в ТЦ «Румянцево»" itemprop="thumbnailUrl" /></a></span>
</div>
				</div>
				<div style="clear: both;"></div>
			</div>
		'
		),
		array(
			'address' => 'ip-dragynov',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'ИП Драгунов',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'ИП Драгунов',
			'description' => '',
			'keywords' => '',
			'text' => '
			 <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"> </script>
			<script>
						ymaps.ready(init);
						        var myMap,
						            myPlacemark;

						        function init(){
						            myMap = new ymaps.Map("map", {
						                center: [47.230427, 39.702527],
						                zoom: 16
						            });
						            myPlacemark = new ymaps.Placemark([47.230427, 39.702527], {
						                hintContent: "ИП Драгунов Алексей Сергеевич",
						                balloonContent: "ИП Драгунов Алексей Сергеевич"
						            });
						            myMap.geoObjects.add(myPlacemark);
						}
			</script>
<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">
			<h2 class="hnb_mytitlepag">ИП Драгунов Алексей Сергеевич</h2>
			<div style="width: 714px; height: 460px" id="map"> </div>
			<div class="salon-matras-ok" style="margin-top:50px">
				<table>
					<tr>
						<td>Адрес</td><td>Часы работы</td><td>Контакты</td><td>Экспозиция</td>
					</tr>
					<tr>
						<td>ИП Драгунов Алексей Сергеевич <br>
						г. Ростов-на-Дону, ул. Закруткина 2/2</td><td>Вт. – Пт.: 10:00 – 19:00<br>
						Сб. – Вс.: 10:00 – 18:00<br>
						Пн.: - выходной день.</td><td>Тел.: 229-97-59,<br>
						270-13-47,<br>
						8-938-123-83-88<br>
						magniflex.rostov@gmail.com</td><td>матрасы:<br>
							Merinos,<br>
							Waterlatex,<br>
							Stile,<br>
							Pensiero,<br>
							Naturalmente,<br>
							FreshGel,<br>
							New Comfort Plus,<br>
							Stretching,<br>
							Rest<br>
							Все модели подушек.</td>
					</tr>
				</table>
			</div>
			<div class="hnb_gal" style="margin-top:50px">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/ip-dragynov01.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/ip-dragynov011.jpg" alt="Матрасы Magniflex в Ростове-на-Дону. ИП Драгунов Алексей Сергеевич." itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/ip-dragynov02.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/ip-dragynov021.jpg" alt="Матрасы Magniflex в Ростове-на-Дону. ИП Драгунов Алексей Сергеевич." itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/ip-dragynov03.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/ip-dragynov031.jpg" alt="Матрасы Magniflex в Ростове-на-Дону. ИП Драгунов Алексей Сергеевич." itemprop="thumbnailUrl" /></a></span>
</div>
				</div>
				<div style="clear: both;"></div>
			</div>

		'
		),
		array(
			'address' => 'butik-ermitazh',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => '',
			'name' => 'Интерьер-Бутик "Эрмитаж"',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Интерьер-Бутик "Эрмитаж"',
			'description' => '',
			'keywords' => '',
			'text' => '
			 <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"> </script>
			<script>
						ymaps.ready(init);
						        var myMap,
						            myPlacemark;

						        function init(){
						            myMap = new ymaps.Map("map", {
						                center: [51.670785, 39.188483],
						                zoom: 16
						            });

						            myPlacemark = new ymaps.Placemark([51.670785, 39.188483], {
						                hintContent: "Интерьер-бутик «ЭРМИТАЖ»",
						                balloonContent: "Интерьер-бутик «ЭРМИТАЖ»"
						            });

						            myMap.geoObjects.add(myPlacemark);
						}
			</script>
<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">
			<h2 class="hnb_mytitlepag">Интерьер-бутик «ЭРМИТАЖ»</h2>
			<div style="width: 714px; height: 460px" id="map"> </div>
			<div class="salon-matras-ok" style="margin-top:50px">
				<table>
					<tr>
						<td>Адрес</td><td>Часы работы</td><td>Контакты</td><td>Экспозиция</td>
					</tr>
					<tr>
						<td>Интерьер-бутик «ЭРМИТАЖ» <br>
						г. Воронеж, Плехановская, 41 — 1 этаж</td><td>ежедневно 10:00 – 19:00</td><td>+7 (473) 271?71?91<br>
						hermitage-boutique.ru</td><td>Работа по каталогу<br>
						(Ожидается экспозиция)</td>
					</tr>
				</table>
			</div>
			<div class="hnb_gal" style="margin-top:50px">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/ermitazh01.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/ermitazh01.jpg" alt="Матрасы Magniflex в Воронеже. Интерьер-бутик «ЭРМИТАЖ»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/ermitazh02.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/ermitazh02.jpg" alt="Матрасы Magniflex в Воронеже. Интерьер-бутик «ЭРМИТАЖ»" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/ermitazh03.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/ermitazh03.jpg" alt="Матрасы Magniflex в Воронеже. Интерьер-бутик «ЭРМИТАЖ»" itemprop="thumbnailUrl" /></a></span>
</div>
				</div>
				<div style="clear: both;"></div>
			</div>
		'
		),
			array(
			'address' => 'salon-somovo',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Салон «СОМОВО МЕБЕЛЬ/CLASSICO ITALIANO»',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Салон «СОМОВО МЕБЕЛЬ/CLASSICO ITALIANO»',
			'description' => '',
			'keywords' => '',
			'text' => '
            <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"> </script>
			<script>
						ymaps.ready(init);
						        var myMap,
						            myPlacemark;

						        function init(){
						            myMap = new ymaps.Map("map", {
						                center: [45.10184600, 38.98357800],
						                zoom: 16
						            });

						            myPlacemark = new ymaps.Placemark([45.10184600, 38.98357800], {
						                hintContent: "ИП Драгунов Алексей Сергеевич",
						                balloonContent: "ИП Драгунов Алексей Сергеевич"
						            });

						            myMap.geoObjects.add(myPlacemark);
						}
			</script>
<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">
			<h2 class="hnb_mytitlepag">Салон «СОМОВО МЕБЕЛЬ/CLASSICO ITALIANO»</h2>
			<div style="width: 714px; height: 460px" id="map"> </div>
			<div class="salon-matras-ok" style="margin-top:50px">
				<table class="tabl_detail_mag">
					<tr>
						<td>Адрес</td><td>Часы работы</td><td>Контакты</td><td>Экспозиция</td>
					</tr>
					<tr>
						<td>Салон «СОМОВО МЕБЕЛЬ/CLASSICO ITALIANO»	<br>  г. Краснодар, ул. Дзержинского 100, <br>Мегацентр «Красная Площадь», 3 этаж, секция С-167 </td>
						<td>ежедневно<br> с 10:00 до 22:00 </td>
						<td>+7-967-311-34-74<br>+7-918-024-63-36</td>
						<td><b>Образцы кубиков 40x60:</b><br>
Merinos - 1 шт.<br>
New Comfort Plus 10 - 1 шт.<br>
Rest 10 - 1 шт.<br>
Stile 8 - 1 шт.<br>
Stretching 10 - 1 шт.<br><br>
<b>Подушки:</b><br>
Aloe Vera - 1 шт.<br>
Freshgel Wave - 1 шт.  <br>
Relaxsan - 2 шт<br><br>
<b>Полноразмерные матрасы:</b><br>
Freshgel 10 - 80*200 см<br>
Naturalmente - 80*200 см<br>
Rest 9 - 160*200 см<br>
Pensiero 7 - 160*200<br>
Rest 10 160*200<br>
New Comfort Plus 160*200<br>
Merinos 80*200<br>
Stile 6  80*200</td>
					</tr>
				</table>
			</div>
			<div class="hnb_gal" style="margin-top:50px">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/shops/salon-somovo/1.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/shops/salon-somovo/1.jpg" alt="Матрасы Magniflex в Краснодаре. Салон «СОМОВО МЕБЕЛЬ/CLASSICO ITALIANO»" itemprop="thumbnailUrl" /></a></span>
</div>


				</div>
				<div style="clear: both;"></div>
			</div>

		'
		),
		array(
			'address' => 'sf_action',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Действия (sf)',
			'left_sidebar' => '',
			'title' => 'Действия (sf)',
			'description' => '',
			'keywords' => '',
			'text' => '
				<center>
				<button onclick="action_ajax_functions(\'action=get_orders_list_mail\', alrt_txt_done);">Получить список заказов</button>
				<br><br>
				<button onclick="action_ajax_functions(\'action=get_call_list_mail\', alrt_txt_done);">Получить список подписчиков</button>
				<br><br>
				<button onclick="action_ajax_functions(\'action=get_emails_list_mail\', alrt_txt_done);">Получить список емейлов</button>
				<br><br>
				</center>
				<script>
				function alrt_txt_done(){alert("Данные отправлены на почту!");}
				function action_ajax_functions(data, callback = function(){}){
					$.post("/tools/ajax_functions.php", data, callback);
				}
				</script>
			'
		),
		array(
			'address' => 'favourite',
			'parent_address' => '',
			'parent_name' => 'Избранное',
			'name' => 'Избранное',
			'left_sidebar' => '',
			'bottom_sidebar' => '',
			'title' => 'Матрасы и подушки Magniflex, Башкорстан| Магнифлекс',
			'description' => 'Магазины Магнифлекс',
			'keywords' => 'матрасы в магнифлекс',
			'text' => '


			'
		),

		array(
			'address' => 'novosibirsk-matrasu-krovati',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => '',
			'name' => 'САЛОН "МАТРАСЫ И КРОВАТИ" ',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'САЛОН "МАТРАСЫ И КРОВАТИ" ',
			'description' => '',
			'keywords' => '',
			'text' => '
			 <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"> </script>
			<script>
						ymaps.ready(init);
						        var myMap,
						            myPlacemark;

						        function init(){
						            myMap = new ymaps.Map("map", {
						                center: [43.51830030, 39.85562650],
						                zoom: 16
						            });

						            myPlacemark = new ymaps.Placemark([43.51830031, 39.85562651], {
						                hintContent: "САЛОН МАТРАСЫ И КРОВАТИ" ,
						                balloonContent: "МАТРАСЫ И КРОВАТИ"
						            });

						            myMap.geoObjects.add(myPlacemark);

						}
			</script>
<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">
			<h2 class="hnb_mytitlepag">САЛОН "МАТРАСЫ И КРОВАТИ" </h2>
			<div style="width: 714px; height: 460px" id="map"> </div>
			<div class="salon-matras-ok" style="margin-top:50px">
				<table class="tabl_detail_mag">
					<tr>
						<td>Адрес</td><td>Часы работы</td><td>Контакты</td><td>Экспозиция</td>
					</tr>
					<tr>
						<td> г. Новосибирск, ул. Красный проспект, 99 <br>(1 этаж, вход со стороны Красного проспекта)<br>Парковка: удобная подземная парковка<br> в соседнем здании ТРЦ "Роял Парк" (1 час бесплатно)</td><td>пн.-пт. с 11-00 до 19-00<br>
						сб. с 11-00 до 18-00<br>
						вск. с 11-00 до 17-00</td><td>Тел.:<br> салон<br> 8-(383)-220-8810<br>
						директор<br> 8-(913)-987-8249</td><td>На экспозиции:<br>
						Merino 90x190<br>
						Pensiero 80x200<br>
						Stile 6 80x200<br>
						Образцы:<br>
						MEMORI 40x60<br>
						Natur Comfort 40х60  <br>
						PENSIERO 7 40x60    <br>
						Rest 9 40x60 <br>
						STILE 7 40x60
						</td>
					</tr>
				</table>
			</div>
			<div class="hnb_gal" style="margin-top:50px">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/DSC_0174.JPG" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/DSC_01741.JPG" alt="Матрасы Magniflex в Новосибирске - САЛОН "МАТРАСЫ И КРОВАТИ - г. Новосибирск, ул. Красный проспект, 99" itemprop="thumbnailUrl" /></a></span>
</div>
				</div>
				<div style="clear: both;"></div>
			</div>

		'
		),
array(
	'address' => 'stavropol_caro',
	'parent_address' => 'o-magniflex/russia',
	'parent_name' => '',
	'name' => 'Интерьерный салон CARO ',
	'left_sidebar' => 'adresa-magazinov',
	'title' => 'Интерьерный салон CARO ',
	'description' => '',
	'keywords' => '',
	'text' => '
	 <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"> </script>
	<script>
				ymaps.ready(init);
						var myMap,
							myPlacemark;

						function init(){
							myMap = new ymaps.Map("map", {
								center: [45.0212390, 41.916020],
								zoom: 16
							});

							myPlacemark = new ymaps.Placemark([43.51830031, 39.85562651], {
								hintContent: "Интерьерный салон CARO " ,
								balloonContent: "CARO "
							});

							myMap.geoObjects.add(myPlacemark);
				}
	</script>
<div class="hnb_contarea">
			<div class="hnb_catlogsection">
			<!--{left_sidebar}-->
			</div>
			<div class="hnb_conttextright">
	<h2 class="hnb_mytitlepag">Интерьерный салон CARO</h2>
	<div style="width: 714px; height: 460px" id="map"> </div>
	<div class="salon-matras-ok" style="margin-top:50px">
		<table class="tabl_detail_mag">
			<tr>
				<td>Адрес</td><td>Часы работы</td><td>Контакты</td><td>Экспозиция</td>
			</tr>
			<tr>
				<td> г. Ставрополь, ул. Шпаковская 100.</td><td>ежедневно с 10-00 до 19-00</td><td>Тел.:<br>+7-9624-490-00-20<br>
				+7-8652-72-45-32<br>
				+7-8652-72-45-28</td><td>На экспозиции:<br>MEMORI 40x60 (Orthomemo Merino)<br>
				Merinos 40х60  <br>
				Waterlatex 40х60
				</td>
			</tr>
		</table>
	</div>
	<div class="hnb_gal" style="margin-top:50px">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/2018-02-10 в 23.17.47.png" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/2018-02-10 в 23.17.471.png" alt="Матрасы Magniflex в Ставрополе - Интерьерный салон CARO, г. Ставрополь, ул. Шпаковская 100" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_4015.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_40151.jpg" alt="Матрасы Магнифлекс в Ставрополе - Интерьерный салон CARO, г. Ставрополь, ул. Шпаковская 100" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_4016.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_40161.jpg" alt="Матрасы Magniflex в Ставрополе - Интерьерный салон CARO, г. Ставрополь, ул. Шпаковская 100" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_4018.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_40181.jpg" alt="Матрасы Магнифлекс в Ставрополе - Интерьерный салон CARO, г. Ставрополь, ул. Шпаковская 100" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_4019.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_40191.jpg" alt="Матрасы Magniflex в Ставрополе - Интерьерный салон CARO, г. Ставрополь, ул. Шпаковская 100" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_4020.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_40201.jpg" alt="Матрасы Магнифлекс в Ставрополе - Интерьерный салон CARO, г. Ставрополь, ул. Шпаковская 100" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_4021.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_40211.jpg" alt="Матрасы Magniflex в Ставрополе - Интерьерный салон CARO, г. Ставрополь, ул. Шпаковская 100" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_4022.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_40221.jpg" alt="Матрасы Магнифлекс в Ставрополе - Интерьерный салон CARO, г. Ставрополь, ул. Шпаковская 100" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_4023.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_40231.jpg" alt="Матрасы Magniflex в Ставрополе - Интерьерный салон CARO, г. Ставрополь, ул. Шпаковская 100" itemprop="thumbnailUrl" /></a></span>
</div>
		</div>
		<div style="clear: both;"></div>
	</div>

'
),
array(
	'address' => 'tomsk_la_roshel',
	'parent_address' => 'o-magniflex/russia',
	'parent_name' => '',
	'name' => 'Салон «Ля Рошель»',
	'left_sidebar' => 'adresa-magazinov',
	'title' => 'Салон «Ля Рошель» ',
	'description' => '',
	'keywords' => '',
	'text' => '
	 <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"> </script>
	<script>
				ymaps.ready(init);
						var myMap,
							myPlacemark;
						function init(){
							myMap = new ymaps.Map("map", {
								center: [56.49526577, 84.96926250],
								zoom: 16
							});
							myPlacemark = new ymaps.Placemark([56.49526577, 84.96926250], {
								hintContent: "Интерьерный салон CARO " ,
								balloonContent: "CARO "
							});

							myMap.geoObjects.add(myPlacemark);
				}
	</script>
<div class="hnb_contarea">
			<div class="hnb_catlogsection">
			<!--{left_sidebar}-->
			</div>
			<div class="hnb_conttextright">
	<h2 class="hnb_mytitlepag">Салон «Ля Рошель»</h2>
	<div style="width: 714px; height: 460px" id="map"> </div>
	<div class="salon-matras-ok" style="margin-top:50px">
		<table class="tabl_detail_mag">
			<tr>
				<td>Адрес</td><td>Часы работы</td><td>Контакты</td><td>Экспозиция</td>
			</tr>
			<tr>
				<td> г. Томск, ул. Яковлева, 23</td><td>ежедневно с 10-00 до 19-00</td><td>тел. 8 (3822) 65-76-76,<br> 65-23-02,<br> WhatsApp +7-983-238-28-47</td><td>На экспозиции:<br>MEMORI 40x60 (Orthomemo Merino)<br>
				Merinos 40х60  <br>
				Waterlatex 40х60 <br>
				Stile 7 40х60 <br>
				Pensiero 6 40х60 <br>
				Naturalmente 40х60<br>
				Memorie 8 40х60
				</td>
			</tr>
		</table>
	</div>
	<div class="hnb_gal" style="margin-top:50px">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0918-28-06-18-04-54.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/FullSizeRender-28-06-18-04-541.jpg" alt="Матрасы Магнифлекс в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/FullSizeRender-28-06-18-04-54.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0918-28-06-18-04-541.jpg" alt="Матрасы Magniflex в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0929-28-06-18-05-08.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0920-28-06-18-05-081.jpg" alt="Матрасы Магнифлекс в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0928-28-06-18-05-08.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0921-28-06-18-05-081.jpg" alt="Матрасы Magniflex в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0927-28-06-18-05-08.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0927-28-06-18-05-081.jpg" alt="Матрасы Магнифлекс в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0926-28-06-18-05-08.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0926-28-06-18-05-081.jpg" alt="Матрасы Magniflex в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0925-28-06-18-05-08.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0925-28-06-18-05-081.jpg" alt="Матрасы Магнифлекс в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0924-28-06-18-05-08.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0924-28-06-18-05-081.jpg" alt="Матрасы Magniflex в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0923-28-06-18-05-08.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0923-28-06-18-05-081.jpg" alt="Матрасы Магнифлекс в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0922-28-06-18-05-08.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0922-28-06-18-05-081.jpg" alt="Матрасы Magniflex в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0921-28-06-18-05-08.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0921-28-06-18-05-081.jpg" alt="Матрасы Магнифлекс в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0920-28-06-18-05-08.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0920-28-06-18-05-081.jpg" alt="Матрасы Magniflex в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG_0930-28-06-18-05-08.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG_0930-28-06-18-05-081.jpg" alt="Матрасы Магнифлекс в Томске - Салон «Ля Рошель», г. Томск, ул. Яковлева, 23" itemprop="thumbnailUrl" /></a></span>
</div>
		</div>
		<div style="clear: both;"></div>
	</div>

'
),
array(
  'address' => 'orthosleep-krasnogorsk',
  'parent_address' => 'o-magniflex/russia',
  'parent_name' => '',
  'name' => 'Салон "Orthosleep"',
  'left_sidebar' => 'adresa-magazinov',
  'title' => 'Салон "Orthosleep"',
  'description' => '',
  'keywords' => '',
  'text' => '
   <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"> </script>
  <script>
        ymaps.ready(init);
                var myMap,
                    myPlacemark;

                function init(){
                    myMap = new ymaps.Map("map", {
                        center: [55.788506, 37.590780],
                        zoom: 16
                    });

                    myPlacemark = new ymaps.Placemark([55.788506, 37.590780], {
                        hintContent: "Салон Матрас-ок",
                        balloonContent: "Салон Матрас-ок"
                    });

                    myMap.geoObjects.add(myPlacemark);

        }
  </script>
<div class="hnb_contarea">
      <div class="hnb_catlogsection">
      <!--{left_sidebar}-->
      </div>
      <div class="hnb_conttextright">
  <h2 class="hnb_mytitlepag">Салон «Orthosleep»</h2>
  <div style="width: 714px; height: 460px" id="map"> </div>
  <div class="salon-matras-ok" style="margin-top:50px">
    <table class="tabl_detail_mag">
      <tr>
        <td>Адрес</td><td>Часы работы</td><td>Контакты</td><td>Экспозиция</td>
      </tr>
      <tr>
        <td>САЛОН “ORTHOSLEEP” <br> ТЦ «ТВОЙ ДОМ» 2 КОРПУС<br>г. Красногорск, ул. Международная, д.6, корпус 4, 3-й этаж</td><td>Ежедневно: <br> 10:00 - 21:00 </td><td><br> Тел.: +7(915) 110-11-77</td><td>На экспозиции: <br>Pensiero 8, <br>Rest 9, <br>Merinos, <br>Memorie 8</td>
      </tr>
    </table>
  </div>
  <div class="hnb_gal" style="margin-top:50px">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/IMG-20181030-WA0000_2.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/IMG-20181030-WA0000_2.jpg" alt="Матрасы Magniflex в Москве. Салон ««Orthosleep»»" itemprop="thumbnailUrl" /></a></span>
</div>
    </div>
    <div style="clear: both;"></div>
  </div>

'
),

array(
	'address' => 'diron-italian-interiors',
	'parent_address' => 'o-magniflex/russia',
	'parent_name' => '',
	'name' => 'Салон "Diron Italian Interiors"',
	'left_sidebar' => 'adresa-magazinov',
	'title' => 'Diron Italian Interiors',
	'description' => '',
	'keywords' => '',
	'text' => '
	 <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"> </script>
	<script>
		  ymaps.ready(init);
				  var myMap,
					  myPlacemark;
				  function init(){
					  myMap = new ymaps.Map("map", {
						  center: [56.8506581, 60.6590504],
						  zoom: 16
					  });

					  myPlacemark = new ymaps.Placemark([56.8506581, 60.6590504], {
						  hintContent: "Салон Матрас-ок",
						  balloonContent: "Салон Матрас-ок"
					  });

					  myMap.geoObjects.add(myPlacemark);
		  }
	</script>
  <div class="hnb_contarea">
		<div class="hnb_catlogsection">
		<!--{left_sidebar}-->
		</div>
		<div class="hnb_conttextright">
	<h2 class="hnb_mytitlepag">Diron Italian Interiors</h2>
	<div style="width: 714px; height: 460px" id="map"> </div>
	<div class="salon-matras-ok" style="margin-top:50px">
	  <table class="tabl_detail_mag">
		<tr>
		  <td>Адрес</td><td>Часы работы</td><td>Контакты</td><td>Экспозиция</td>
		</tr>
		<tr>
		  <td>Diron Italian Interiors” <br> г. Екатеринбург,<br> ул. Студенческая, дом 11,<br> МЦ "Галерея"</td><td> ежедневно с 10:00 - 20:00</td><td><br>  +7 (343) 382-17-05,<br> +7 (908) 639-07-38</td><td> Naturalmente 90х200,<br> Rest 10 90х200,<br> Freshgel 10 80х200,<br> New Comfort Plus 10 80х200,<br> Exchange Memoform Dual 160х200,<br> Memorie 8 40x60,<br> Stile 8 40x60,<br> Stretching 9 40x60.</td>
		</tr>
	  </table>
	</div>
	<div class="hnb_gal" style="margin-top:50px">
  <span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/Diron 1.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/Diron 1.jpeg" alt="Матрасы Magniflex в Москве. Салон ««Diron Italian Interiors»»" itemprop="thumbnailUrl" /></a></span>
  <span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/Diron 2.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/Diron 2.jpeg" alt="Матрасы Magniflex в Москве. Салон ««Diron Italian Interiors»»" itemprop="thumbnailUrl" /></a></span>
  <span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/Diron 3.jpeg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/Diron 3.jpeg" alt="Матрасы Magniflex в Москве. Салон ««Diron Italian Interiors»»" itemprop="thumbnailUrl" /></a></span>
  </div>
	  </div>
	  <div style="clear: both;"></div>
	</div>
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
			'breadcrumbs_image' => '/img/breadcrumbs_aziendaok.jpg',
			'text' => '
								<div class="hnb_contvideo">
					<video controls="controls" tabindex="0" style="width:100%;" muted>
					  <source src="/data/video/magniflex_company_profile_2013_KrNo0lr_Ec0_720p.mp4" type="video/mp4;" />
					  
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
			
					<h3>В мире</h3>
					<img src="/img/o_magniflex.jpg">
					<p>Magniflex (Магнифлекс) - крупнейший итальянский производитель ортопедических матрасов, подушек и сопутствующих товаров для сна в Европе. Ежегодно в мире продается более 3,5 миллионов ортопедических матрасов Magniflex. Компания была основана в 1962 году Джулиано Мани (Giuliano Magni). Концерн Magniflex состоит из двух производственных компаний: Magniflex S.p.A. и Alessanderx S.p.A. В настоящее время компания представлена на внутреннем и мировом рынках под брендовыми названиями Magniflex, PierrCardin, Materassi &amp; Materassi, Dormir и Relaxsan. Концерн Magniflex владеет самым крупным заводом (площадь более 33.000 квадратных метров) по производству ортопедических матрасов в Европе, расположенном в Италии в небольшом городе Прато рядом с всемирно известной Флоренцией. В 1986 году именно специалисты Магнифлекс изобрели вакуумную технологию по скрутке матрасов.
					</p>
					<p class="magni_text_upper">
					  <img src="/img/magniflex-fabrika.jpg" alt="Фабрика Magniflex в Тоскане"><br>
					Фабрика Magniflex в Тоскане
					</p>
					<h3>В России</h3>

					<p>
						В России компания Magniflex представлена с 1992 года и имеет представительства во многих городах: Москва, Санкт-Петербург, Тула, Екатеринбург, Нижний Новгород, Сыктывкар, Сургут, Красноярск, Киров, Братск, Тюмень, Владимир, Новосибирск, Ростов, Тверь, Тамбов, Воронеж, Липецк, Уфа, Владивосток, Петрозаводск и др. С полным списоком можно ознакомиться в разделе <a href="https://www.magniflex.ru/o-magniflex/russia/">Magniflex в России</a>. За более чем 20 лет работы на российском рынке было продано более 670 000 ортопедических матрасов.
						<br><br>
					</p>
					<p class="magni_text_upper">
						<img src="/img/magniflex-florencia.jpg" alt="магнифлекс - сделано в Италии, Флоренция"><br>
						Сердце Италии  — сказочная Флоренция — родина всех матрасов Magniflex

					</p>

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
			'breadcrumbs_image' => '/img/breadcrumbs_sonnook.jpg',
			'text' => '
					<p>
						Хороший матрас и Чистая постель - святая святых нашей жизни. <br>
						Мы вверяем нагим ему свое усталое тело, чтобы Он вернул нам силы, дал отдых в тепле домашней обстановки.<br>
						На матрасе мы познаем самые сладостные часы Бытия - часы Любви и Сна. <br>
						Хороший матрас и чистая постель священны. Их надо беречь, ценить, почитать как высшее и отраднейшее из земных благ. <br>
						Под таким девизом работает Magniflex… работает уже более 50 лет.
					</p>
					<br />
					<img alt="magniflex - важно" src="/img/vazhno.jpg">

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
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
					<h3 >Почему Вам стоит выбрать именно продукцию компании Magniflex </h3>

					<ul class="why_list_magni">
						<li>более 50 лет мы занимаемся производством, пожалуй, самых лучших ортопедических матрасов в Европе</li>
						<li>100% made in Italy. Magniflex - это настоящие итальянские матрасы. Вся продукция изготавливается исключительно в Италии на заводе в Прато (Флоренция).</li>
						<li>сертификаты и рекомендации врачей-ортопедов.  В России продукция Magniflex сертифицирована РОСТЕСТ и имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, рекомендована Центральным Институтом Травматологии и Ортопедии РФ, кроме того продукция сертифицирована известными международными организациями, одобрена и рекомендована ведущими европейскими медицинскими центрами.</li>
						<li>наша продукция пользуется успехом более чем в 99 странах по всеми миру!</li>
						<li>самые передовые технологии, собственный исследовательский центр, сотрудничество с ведущими мировыми институтами и специалистами-ортопедами</li>
						<li>высочайшее качество  (подтвержденное сотнями сертификатами, свидетельствами, наградами и патентами в 99-ми странах, в том числе в США, Германии, Великобритании, Италии, Франции, Бразилии, России, Японии, Австралии и многих других)</li>
						<li>20 лет безупречной работы в России
					</ul>
					<br />
					<img alt="magniflex - Почему Magniflex" src="/img/pochemy-magniflex.jpg">

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
			'breadcrumbs_image' => '/img/breadcrumbs_qualitaok.jpg',
			'text' => '
			<style>
			.hnb_conttextright{
				display: flex;
   				 flex-wrap: wrap;
  			  justify-content: left;
			}
			.hnb_conttextright img {
				width: auto;
				padding: 10px;
				padding-left: 0px;
				height: 300px;
			}
			</style>
					<h3 >1962</h3>
					<img src="/img/1962.png" alt="Компания Magniflex основана в 1962 году в Италии и был выпущен первый пружинный матрас" width="245">
					<p>
					Год основания компании. Именно в 1962 году в Италии была создана компания Magniflex и был выпущен наш первый пружинный матрас. <br>
					</p>
					<h3 >1965</h3>
					<img class="logo_history" src="/img/logo.png" alt="1965 год - регистрация товарного знака Magniflex" >
					<p>
					Регистрация товарного знака Magniflex. <br>
					</p>
					<h3 >1983</h3>
					<img src="/img/1983.jpg" alt="Команда Магнифлекс выигрывает Giro d.Italia в 1983году" width="245">
					<p>
					Магнифлекс - лидер по производству матрасов и подушек в Италии. Команда Магнифлекс выигрывает Giro d.Italia.  <br>
					</p>
					<h3 >1986</h3>
					<img  class="logo_history" src="/img/1986.jpg" alt="В 1986 году Magniflex изобрели и запатентовали технологию вакуумных матрасов, выведшую компанию в мировые лидеры" width="245">
					<p>
					Специалисты Magniflex изобрели и запатентовали технологию вакуумных матрасов, выведшую компанию в мировые лидеры отрасли.<br>
					</p>
					<h3>1991</h3>
					<img src="/img/1991.jpg" alt="В 1991 году Magniflex начало сотрудничества с компанией Pierre Cardin, выпуск особой серии матрасов Пьер Карден" width="245">
					<p>
					Начало сотрудничества с компанией Pierre Cardin, которое продолжается и по сей день. Выпуск особой серии матрасов "Пьер Карден" <br>
					</p>
					<h3 >1992</h3>
					<p>
					Открыто представительство Magniflex в Москве (Россия). Более чем за 20 лет успешной работы в России было продано более 350 000 ортопедических матрасов. Открыты представительства в Москве, Санкт-Петербурге, Туле, Екатеринбурге, Нижнем Новгороде, Сыктывкаре, Сургуте, Красноярске, Кирове, Братске, Тюмени, Владимире, Новосибирске, Ростове, Твери.<br>
					</p>
					<h3>1996</h3>
					<img src="/img/1996.jpg" alt="В 1996 году компания Magniflex открыло представительство в Японии" width="245">
					<p>
					Открытие представительства в Японии. <br>
					</p>
					<h3 >1997</h3>
					<p>
                    Запатентована технология вакуумных матрасов WATERLATTEX - качественный технологичный прорыв в области комфортного сна.<br>
                    </p>
					<h3 >2000</h3>
					<img src="/img/2000.jpg" alt="В 2000году Магнифлекс начало создание матрасов и подушек с эффектом памяти, материал Memoform" width="245">
					<p>
					Создание матрасов и подушек с "эффектом памяти", благодаря использованию космических разработок НАСА и изобретению материала Memoform. <br>
					</p>
					<h3 >2002</h3>
					<p>
					Открытие новой самой крупной в Европе фабрики по производству матрасов - выпуск более 10 000 ортопедических матрасов в день. Каждые 8 секунд мы выпускаем новый матрас! <br>
					</p>
					<h3 >2006</h3>
					<img src="/img/2006.jpg" alt="В 2006году создание первого в мире золотого матраса, открытие представительства Магнифлекс в Дубаи" width="245">
					<p>
					Создание первого в мире "золотого матраса" из настоящих золотых нитей. Открытие представительства в Дубаи.<br>
					</p>
                    <h3 >2006</h3>
					<p>
					Открытие генерального представительства в США, представительств в Канаде и Индии<br>
					</p>
					<h3 >2009</h3>
					<img src="/img/2009.jpg" alt="В 2009 году компания Магнифлекс начало сотрудничества с Tonino Lamborghini" width="245">
					<p>
					Начало сотрудничества с Tonino Lamborghini. <br>
					</p>
				    <h3>2010</h3>
					<p>
					Открытие официальных представительств в Австралии, Китае, Филипинах, ЮАР, Сингапуре. <br>
					</p>
				    <h3 >2012</h3>
					<p>
					Представительства в Саудовской Аравии, Индонезии, Словакии. <br>
					</p>
				    <h3 >2013</h3>
					<p>
					Открытие брендовых шоу-румов Magniflex в Риме (Италия), Осаке (Япония), Майми (США), Братиславе (Словакия), Шанхае (Китай), Пекине (Китай), Эр-Риад (Саудовская Аравия), Скопье (Македония). Открытие официальных представительств в Греции и Алжире. <br>
					</p>
					<h3 >2015</h3>
					<img src="/img/2015.jpg" alt="Создание технологии Smartech, производство первых револлюционных матрасов Magnistretch" width="245">
					<p>
					Создание технологии Smartech. Запуск в производство первых револлюционных матрасов Magnistretch. <br>
					</p>
					<h3>2015</h3>
					<p>
					Открытие фирменных шоу-румов в Медельин (Колумбия) и Аккре (Гана) <br>
					</p>
					<h3 >2018</h3>
					<p>
					Сегодня компания Magniflex - это один из мировых лидеров (входящий в ТОП5) по производству ортопедических матрасов! Магнифлекс представлен более чем в 99-ми странах на 5 континентах. Несколько десятков миллионов человек в этот момент времени, когда вы читаете этот текст, спит на матрасе Magniflex.   <br>
					</p>

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
				<link type="text/css" rel="stylesheet" href="/template/js/gammagallery/css/style.css">
				<noscript><link rel="stylesheet" type="text/css" href="/template/js/gammagallery/css/noJS.css"/></noscript>
				<script src="/template/js/gammagallery/js/modernizr.custom.70736.js" type="text/javascript"></script>
				<script src="/template/js/gammagallery/js/jquery.masonry.min.js" type="text/javascript"></script>
				<script src="/template/js/gammagallery/js/gamma.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        var GammaSettings = {
                viewport : [ {
                    width : 1200,
                    columns : 2
                }, {
                    width : 900,
                    columns : 2
                }, {
                    width : 500,
                    columns : 2
                }, {
                    width : 320,
                    columns : 2
                }, {
                    width : 0,
                    columns : 2
                } ]
        };
        Gamma.init( GammaSettings );
    });
</script>
					<p>
					Сегодня продукция компании Magniflex (Магнифлекс) успешно продается более чем в 99-ми странах по всему миру, среди них такие страны, как: Италия, Германия, Великобритания, США, Канада, Япония, Китай, Индия, ОАЭ, Австралия, Гон-Конг, Сингапур и др.
					<br><br>
					Раздел наполняется.
					</p>
					<br><br>
					<img alt="Карта магазинов Magniflex" src="/img/magniflex_world/map-magni.png">
					<br><br>
						<h4  class="world_counry">Италия:</h4>
						<!--<div class="gamma-container gamma-loading" id="gamma-container">
							<ul class="gamma-gallery">
								<li class="ama_fix_gallery">
									<div data-alt="img01" data-description="<h3>Новый бутик Magniflex в Милане</h3>" data-max-width="2048" data-max-height="1400">
										<div data-src="/img/magniflex_world/magniflex-italy-01.jpg" data-min-width="200"></div>
									</div>
								</li>
								<li class="ama_fix_gallery">
									<div data-alt="img02" data-description="<h3>Новый бутик Magniflex в Милане</h3>" data-max-width="2048" data-max-height="1400">
										<div data-src="/img/magniflex_world/magniflex-italy-02.jpg" data-min-width="200"></div>
									</div>
								</li>
								<li class="ama_fix_gallery">
									<div data-alt="img03" data-description="<h3>Новый бутик Magniflex в Милане</h3>" data-max-width="2048" data-max-height="1400">
										<div data-src="/img/magniflex_world/magniflex-italy-03.jpg" data-min-width="200"></div>
									</div>
								</li>
								<li class="ama_fix_gallery">
									<div data-alt="img04" data-description="<h3>Новый бутик Magniflex в Милане</h3>" data-max-width="2048" data-max-height="1400">
										<div data-src="/img/magniflex_world/magniflex-italy-04.jpg" data-min-width="200"></div>
									</div>
								</li>
							</ul>
						</div>-->
						<div class="hnb_gal">
							<div class="ama_column_flex">
							
								<span itemscope itemtype="https://schema.org/ImageObject">
									<a href="/img/magniflex_world/magniflex-italy-01.jpg" class="boxer relgallery" title="Новый бутик Magniflex в Милане" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-01_small.jpg" alt="бутик Magniflex в Милане" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
									<a href="/img/magniflex_world/magniflex-italy-02.jpg" class="boxer relgallery" title="Ресторан Magniflex" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-02_small.jpg" alt="Ресторан Magniflex" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-italy-03.jpg" class="boxer relgallery" title="Magniflex в Милане - выставка 2014 г" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-03_small.jpg" alt="Magniflex в Милане - выставка 2014" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-italy-04.jpg" class="boxer relgallery" title="Magniflex в Милане - выставка 2014 г" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-04_small.jpg" alt="Magniflex в Милане" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-italy-05.jpg" class="boxer relgallery" title="Интерьер магазина Магнифлекс в Италии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-05_small.jpg" alt="Интерьер магазина Магнифлекс в Италии" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-italy-06.jpg" class="boxer relgallery" title="Интерьер магазина Магнифлекс в Италии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-06_small.jpg" alt="Интерьер магазина Magniflex в Италии" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-italy-07.jpg" class="boxer relgallery" title="Интерьер магазина Магнифлекс в Италии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-07_small.jpg" alt="Магнифлекс в Италии" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-italy-12.jpg" class="boxer relgallery" title="Новый магазин в Италии. Рим" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-12_small.jpg" alt="Новый магазин в Италии. Рим" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-italy-09.jpg" class="boxer relgallery" title="Магнифлекс. Италия" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-09_small.jpg" alt="Магнифлекс. Италия" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-italy-08.jpg" class="boxer relgallery" title="Магнифлекс - главный спонсор национальной команды регби" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-08_small.jpg" alt="Magniflex - главный спонсор национальной команды регби" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-italy-10.jpg" class="boxer relgallery" title="Магнифлекс. Италия" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-italy-10_small.jpg" alt="Magniflex. Италия" itemprop="thumbnailUrl" /></a></span>
								</span>
							</div>
						 </div>
					<br><br>
						<h4 class="world_counry">Германия:</h4>
						<div class="hnb_gal">
							<div class="ama_column_flex">
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-germany-01.jpg" class="boxer relgallery" title="Magniflex. Международная выставка в Кельне (Германия)" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-germany-01_small.jpg" alt="Magniflex. Международная выставка в Кельне (Германия)" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-germany-02.jpg" class="boxer relgallery" title="Magniflex. Международная выставка в Кельне (Германия)" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-germany-02_small.jpg" alt="Магнифлекс. Международная выставка в Кельне (Германия)" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-germany-03.jpg" class="boxer relgallery" title="Magniflex. Международная выставка в Кельне (Германия)" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-germany-03_small.jpg" alt="Magniflex - Международная выставка в Кельне (Германия)" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-germany-04.jpg" class="boxer relgallery" title="Magniflex. Международная выставка в Кельне (Германия)" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-germany-04_small.jpg" alt="Магнифлекс - Международная выставка в Кельне (Германия)" itemprop="thumbnailUrl" /></a></span>
								</span>
							</div>
						 </div>
					<br><br>
						<h4 class="world_counry">США:</h4>
						<div class="hnb_gal">
							<div class="ama_column_flex">
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-usa-01.jpg" class="boxer relgallery" title="Магазины Магнифлекс в США" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-usa-01_small.jpg" alt="Магазины Магнифлекс в США" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-usa-02.jpg" class="boxer relgallery" title="Магазины Магнифлекс в США" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-usa-02_small.jpg" alt="Магазины Magniflex в США" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-usa-03.jpg" class="boxer relgallery" title="Магазины Магнифлекс в США" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-usa-03_small.jpg" alt="Магнифлекс в США" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-usa-04.jpg" class="boxer relgallery" title="Магазины Магнифлекс в США" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-usa-04_small.jpg" alt="Magniflex в США" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-usa-05.jpg" class="boxer relgallery" title="Магазины Магнифлекс в США" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-usa-05_small.jpg" alt="Магазин матрасов Магнифлекс в США" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-usa-06.jpg" class="boxer relgallery" title="Магазины Магнифлекс в США" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-usa-06_small.jpg" alt="Магазин матрасов Magniflex в США" itemprop="thumbnailUrl" /></a></span>
								</span>
							</div>
						 </div>
					<br><br>
						<h4 class="world_counry">Испания:</h4>
						<div class="hnb_gal">
							<div class="ama_column_flex">
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-spain-01.jpg" class="boxer relgallery" title="Магнифлекс-Испания-Ибица" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-spain-01_small.jpg" alt="Магнифлекс-Испания-Ибица" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-spain-02.jpg" class="boxer relgallery" title="Магнифлекс-Испания-Ибица" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-spain-02_small.jpg" alt="Магнифлекс-Испания-Ибица" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-spain-03.jpg" class="boxer relgallery" title="Магнифлекс-Испания-Ибица" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-spain-03_small.jpg" alt="Магнифлекс-Испания-Ибица" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-spain-04.jpg" class="boxer relgallery" title="Магнифлекс-Испания-Ибица" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-spain-04_small.jpg" alt="Магнифлекс-Испания-Ибица" itemprop="thumbnailUrl" /></a></span>
								</span>
							</div>
						 </div>
					<br><br>
						<h4 class="world_counry">Китай:</h4>
						<div class="hnb_gal">
							<div class="ama_column_flex">
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-china-01.jpg" class="boxer relgallery" title="Выставка в Шанхае (Китай). Стенд Магнифлекс" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-china-01_small.jpg" alt="Выставка в Шанхае (Китай). Стенд Магнифлекс" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-china-02.jpg" class="boxer relgallery" title="Выставка в Шанхае (Китай). Стенд Магнифлекс" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-china-02_small.jpg" alt="Выставка в Шанхае (Китай). Стенд Magniflex" itemprop="thumbnailUrl" /></a></span>
								</span>
							</div>
						 </div>
					<br><br>
						<h4 class="world_counry">Индонезия:</h4>
						<div class="hnb_gal">
							<div class="ama_column_flex">
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-indonesia-01.jpg" class="boxer relgallery" title="Магнифлекс в Индонезии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-indonesia-01_small.jpg" alt="Магнифлекс в Индонезии" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-indonesia-02.jpg" class="boxer relgallery" title="Магнифлекс в Индонезии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-indonesia-02_small.jpg" alt="Magniflex в Индонезии" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-indonesia-03.jpg" class="boxer relgallery" title="Магнифлекс в Индонезии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-indonesia-03_small.jpg" alt="Магнифлекс в Индонезии" itemprop="thumbnailUrl" /></a></span>
								</span>
							</div>
						 </div>
					<br><br>
						<h4 class="world_counry">Филипинны:</h4>
						<div class="hnb_gal">
							<div class="ama_column_flex">
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-philipinny-01.jpg" class="boxer relgallery" title="Магнифлекс на Филипинах" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-philipinny-01_small.jpg" alt="Магнифлекс на Филипинах" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-philipinny-02.jpg" class="boxer relgallery" title="Магнифлекс на Филипинах" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-philipinny-02_small.jpg" alt="Magniflex на Филипинах" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-philipinny-03.jpg" class="boxer relgallery" title="Магнифлекс на Филипинах" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-philipinny-03_small.jpg" alt="Магнифлекс на Филипинах" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-philipinny-04.jpg" class="boxer relgallery" title="Магнифлекс на Филипинах" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-philipinny-04_small.jpg" alt="Magniflex на Филипинах" itemprop="thumbnailUrl" /></a></span>
								</span>
							</div>
						 </div>
					<br><br>
						<h4 class="world_counry">Япония:</h4>
						<div class="hnb_gal">
							<div class="ama_column_flex">
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-japan-01.jpg" class="boxer relgallery" title="Магнифлекс в Японии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-japan-01_small.jpg" alt="Магнифлекс в Японии" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-japan-02.jpg" class="boxer relgallery" title="Магнифлекс в Японии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-japan-02_small.jpg" alt="Magniflex в Японии" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-japan-03.jpg" class="boxer relgallery" title="Кагава - звезда Манчестер Юнайтед. Лицо компании Магнифлекс в Японии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-japan-03_small.jpg" alt="Кагава - звезда Манчестер Юнайтед. Лицо компании Магнифлекс в Японии" itemprop="thumbnailUrl" /></a></span>
								</span>
								<span itemscope itemtype="https://schema.org/ImageObject">
								<a href="/img/magniflex_world/magniflex-japan-04.jpg" class="boxer relgallery" title="Магнифлекс - спонсор многих спортивных мероприятий в Японии" itemprop="contentUrl"><img src="/img/magniflex_world/magniflex-japan-04_small.jpg" alt="Magniflex - спонсор многих спортивных мероприятий в Японии" itemprop="thumbnailUrl" /></a></span>
								</span>
							</div>
						 </div>
					<br><br>
					<h4 class="world_counry">Болгария</h4><br><br>
					<h4 class="world_counry">Рекламные материалы</h4>
					  <div>
						<ul class="gallery gal2">
							<li itemscope itemtype="https://schema.org/ImageObject"><a href="/img/magniflex_world/4.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/4_small.jpg" alt="Italy - 2011" itemprop="thumbnailUrl" />Italy - 2011</a></li>
							<li itemscope itemtype="https://schema.org/ImageObject"><a href="/img/magniflex_world/5.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/5_small.jpg" alt="Korea, South - 2010"  itemprop="thumbnailUrl"/>Korea, South - 2010</a></li>
							<li itemscope itemtype="https://schema.org/ImageObject"><a href="/img/magniflex_world/7.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/7_small.jpg" alt="Russia - 2009" itemprop="thumbnailUrl" />Russia - 2009</a></li>
							<li itemscope itemtype="https://schema.org/ImageObject"><a href="/img/magniflex_world/2.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/2_small.jpg" alt="China - 2008" itemprop="thumbnailUrl" />China - 2008</a></li>
							<li itemscope itemtype="https://schema.org/ImageObject"><a href="/img/magniflex_world/3.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/3_small.jpg" alt="India - 2005" itemprop="thumbnailUrl" />India - 2005</a></li>
							<li itemscope itemtype="https://schema.org/ImageObject"><a href="/img/magniflex_world/1.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/1_small.jpg" alt="Canada" itemprop="thumbnailUrl" />Canada</a></li>
							<li itemscope itemtype="https://schema.org/ImageObject"><a href="/img/magniflex_world/6.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/6_small.jpg" alt="Czech Republic" itemprop="thumbnailUrl" />Czech Republic</a></li>
							<li itemscope itemtype="https://schema.org/ImageObject"><a href="/img/magniflex_world/8.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/8_small.jpg" alt="United Kingdom" itemprop="thumbnailUrl" />United Kingdom</a></li>
							<li itemscope itemtype="https://schema.org/ImageObject"><a href="/img/magniflex_world/10.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/2_small.jpg" alt="Italy - 2008" itemprop="thumbnailUrl" />Italy - 2008</a></li>
							<li itemscope itemtype="https://schema.org/ImageObject"><a href="/img/magniflex_world/9.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/9_small.jpg" alt="Italy - 2007" itemprop="thumbnailUrl" />Italy - 2007</a></li>
							<li itemscope itemtype="https://schema.org/ImageObject"><a href="/img/magniflex_world/11.jpg" class="boxer relgallery2" itemprop="contentUrl"><img src="/img/magniflex_world/11_small.jpg" alt="Pierre Cardin" itemprop="thumbnailUrl" />Pierre Cardin</a></li>
						</ul>
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
			'breadcrumbs_image' => '/img/breadcrumbs_sports.jpg',
			'text' => '
 <h3>В мире</h3>
		<p>
			Magniflex - один из крупнейших мировых лидеров по производству матрасов. Компания более чем за полувековую историю снискала славу и уважение у десятков миллионов людей в разных уголках земного шара. Среди поклонников - много известных личностей: спортсменов и политиков, звезд кино и эстрады. В этом разделе мы будем знакомить Вас с лицами компании Магнифлекс, публиковать интересные фотографии, очерки, выкладывать видео-ролики.
<br><br>
Раздел в стадии обновления
		</p>
<br><br>
<h3>Фотографии</h3>
		<div class="hnb_gal"><div class="ama_first_column ama_column">
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-01.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-01.jpg" alt="Спонсор бейсбола компания Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-02.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-02.jpg" alt="Gonzalo Canale выбирает компанию Magniflex"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-03.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-03.jpg" alt="Шушаник Хачатрян выбирает компанию Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-04.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-04.jpg" alt="Реклама ортопедического матраса Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-06.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-06.jpg" alt="Ортопедические матрасы Magniflex"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-07.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-07.jpg" alt="Матрасы Магнифлекс на элитных пляжах Италии"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-08.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-08.jpg" alt="Магнифлекс в Японии"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-09.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-09.jpg" alt="Компания Магнифлекс в Японии"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-10.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-10.jpg" alt="Салон-магазин компании Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-11.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-11.jpg" alt="Реклама Магнифлекс в Японии"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-13.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-13.jpg" alt="Martìn Castrogiovanni в рекламе нового умного матраса"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-14.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-14.jpg" alt="Звезда команды Италии по регби выбирает Magniglex"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-15.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-15.jpg" alt="Звезды и Магнифлекс="thumbnailUrl"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-17.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-17.jpg" alt="Martìn Castrogiovanni - официальное лицо Magniflex"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-18.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-18.jpg" alt="Магнифлекс, Испания, Ибица"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-19.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-19.jpg" alt="Магнифлекс, Испания, Ибица"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-22.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-22.jpg" alt="Магнифлекс в Японии"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-24.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-24.jpg" alt="Магнифлекс в Японии"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-25.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-25.jpg" alt="Матрасы Магнифлекс на элитных пляжах Италии"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-28.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-28.jpg" alt="Магнифлекс, Испания, Ибица"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-16.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-16.jpg" alt="Звезды бейсбола выбирают компанию Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-26.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-26.jpg" alt="Бейсбол и компания Магнифлекс"></a></span><span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-29.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-29.jpg" alt="Отропедические матрасы Magniflex"></a></span><span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-32.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-32.jpg" alt="Звезды сборной спорта по регби выбирают Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-30.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-30.jpg" alt="Magniflex – официальный партнер"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-20.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-20.jpg" alt="Матрасы Магнифлекс на элитных пляжах Италии"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/buffon-2.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/buffon-2.jpg" alt="Джанлуиджи Буффон — официальное лицо Magniflex"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/buffon-magniflex.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/buffon-magniflex.jpg" alt="Джанлуиджи Буффон — официальное лицо Magniflex"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-33.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-33.jpg" alt="Джанлуиджи Буффон — официальное лицо Magniflex"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-34.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-34.jpg" alt="Настоящие ортопедические матрасы Магнифлекс"></a></span>
</div>
<div class="ama_second_column ama_column">
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-36.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-36.jpg" alt="Спонсор пляжного футбола компания Magniflex"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-37.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-37.jpg" alt="Спонсор пляжного волейбола компания Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-38.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-38.jpg" alt="Магнифлекс на элитных пляжах Италии"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-39.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-39.jpg" alt="Magniflex – официальный партнер сборной Италии по футболу"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-40.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-40.jpg" alt="Martìn Castrogiovanni в рекламе Magniflex"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-41.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-41.jpg" alt="Спонсор сборной по футболу компания Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-43.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-43.jpg" alt="Звезды выбирают Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-21.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-21.jpg" alt="Магнифлекс, Испания, Ибица"></a></span><span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-44.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-44.jpg" alt="Джанлуиджи Буффон — официальное лицо Magniflex"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-45.png" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-45.png" alt="Самые большие люди выбирают матрасы Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-46.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-46.jpg" alt="Magniflex – официальный партнер сборной Италии по футболу"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-47.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-47.jpg" alt="Magniflex – официальный партнер женской сборной Италии по футболу"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-42.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-42.jpg" alt="Репортаж про компанию Магнифлекс"></a></span><span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-48.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-48.jpg" alt="Джанлуиджи Буффон — официальное лицо Magniflex"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-50.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-50.jpg" alt="Gonzalo Canale выбирает компанию Magniflex"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-52.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-52.jpg" alt="Магнифлекс в Японии"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-53.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-53.jpg" alt="Magniflex в Японии"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-55.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-55.jpg" alt="Звезды национальной команды Италии по регби и компания Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-57.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-57.jpg" alt="Музыканты и Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-58.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-58.jpg" alt="Magniflex - крупнейший лидер по производству матрасов"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-56.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-56.jpg" alt="Звезда команды Италии по регби выбирает компанию Magniglex"></a></span><span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-60.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-60.jpg" alt="Джанлуиджи Буффон — официальное лицо Magniflex"></a></span><span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-49.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-49.jpg" alt="Звезды команды Италии по регби выбирают матрасы Magniglex"></a></span><span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-59.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-59.jpg" alt="Martìn Castrogiovanni в рекламе Магнифлекс"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-61.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-61.jpg" alt="Магнифлекс, Испания, Ибица"></a></span>
<span itemscope="" itemtype="https://schema.org/ImageObject"><a href="/img/stars-magniflex/stars-magniflex-62.jpg" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> <img src="/img/stars-magniflex/stars-magniflex-62.jpg" alt="Спорт и Magniflex"></a></span>
</div>

		</div>
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
			
			<p>Торговые наименования "Magniflex", "Магнифлекс" являются зарегистрированными товарными знаками, эксклюзивным правом на их использование на территории России обладаем ТОЛЬКО мы. Если Вы зайдете на официальный итальянский сайт компании Magniflex - <noindex><a href=" https://www.magniflex.com/" rel="nofollow" >www.magniflex.it</a></noindex> (или <noindex><a rel="nofollow" href=" https://www.magniflex.com/international/">www.magniflex.com</a></noindex>) и выберете раздел "Choose your country or region" (адрес страницы: https://www.magniflex.com/international/scegli-un-sito-magniflex.html), далее страну Россия (Russia), то Вы будете автоматически переправлены на наш сайт - <a href="https://www.magniflex.ru">www.magniflex.ru</a>. <br /> <br />
			На территории России действует широкая сеть наших официальных дилеров и магазинов. Однако за последние годы нами были зарегистрированы случаи продаж контрафактной и поддельной продукции под маркой Magniflex. Будьте внимательны. Если Вы сомневаетесь в подлинности ортопедического матраса или подушки - обратитесь к нам. Каждое изделие марки Magniflex снабжено уникальным кодом, позволяющим выяснить всю его историю. <br><br /> <br />
             <img src="/img/logo.png" alt="Логотип Magniflex"><br /><br />
			</p>

			'
		),
		array(
			'address' => 'MAGNIFLEX-AND-RUGBY',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Magniflex и регби',
			'left_sidebar' => 'o-magniflex',
			'title' => 'Magniflex и регби',
			'description' => 'Магнифлекс является спонсором сборной Италии',
			'keywords' => 'магнифлекс и регби, спонсором сборной Италии',
			'breadcrumbs_image' => '/img/rugby.jpg',
			'text' => '
<h3 >МАГНИФЛЕКС — СПОНСОР СБОРНОЙ ИТАЛИИ ПО РЕГБИ</h3>
<br>
<div align="center" class="video_center">
<iframe width="560" height="315" src="https://www.youtube.com/embed/kY8tRXx5ICI" frameborder="0" allowfullscreen></iframe>
<br><br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/pb_Xvxz8CtQ" frameborder="0" allowfullscreen></iframe>
<br><br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/BlqK9de0OF8" frameborder="0" allowfullscreen></iframe>
</div><div style="clear: both;"></div>
			'
		),
		array(
			'address' => 'magniflex-top-hotel',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Magniflex',
			'name' => 'Магнифлекс в лучших отелях мира',
			'left_sidebar' => 'o-magniflex',
			'title' => 'Магнифлекс в лучших отелях мира',
			'description' => 'Магнифлекс в лучших отелях мира',
			'keywords' => 'Магнифлекс в лучших отелях мира',
			'breadcrumbs_image' => '/img/banner_interna_page_partner.jpg',
			'text' => '
		
		<p>
		Лучшие отели мира выбирают для своих гостей матрасы Magniflex!
		<br><br>
		Среди них:
		</p>
<div class="hnb_gal1">
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_1.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_1_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_2.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_2_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_3.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_3_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_4.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_4_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/hermitage-logo.jpg" alt="Hotel Hermitage" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_5.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_5_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_6.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_6_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_7_.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_7_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/hermitage_8.jpg" class="boxer relgallery" title="Magniflex в Hotel Hermitage"  itemprop="contentUrl"> <img src="/img/dream/small/hermitage_8_t.jpg" alt="Magniflex в Hotel Hermitage" itemprop="thumbnailUrl" /></a></span>
<p>Знаете ли Вы, что матрасы Магнифлекс всегда выделены на сайте Booking.com как преимущество и дополнительный бонус для номера?</p>
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_1.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_1_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_2.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_2_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_3.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_3_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_4.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_4_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/dream/byron_logo.jpg" alt="Byron" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_5.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_5_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_6.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_6_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_7_.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_7_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/byron_8.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/small/byron_8_t.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
</div>
<div class="hnb_gal">
<!---------------------------!!!!!!!!!!!!!!!!!!!------------------------>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/28514962_1077405099064528_8285102155855618209_o.jpg" class="boxer relgallery" title="Magniflex в la datcha"  itemprop="contentUrl"> <img src="/img/dream/28514962_1077405099064528_8285102155855618209_o.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/28828030_1082872518517786_6046858889608042055_o.jpg" class="boxer relgallery" title="Magniflex в la datcha"  itemprop="contentUrl"> <img src="/img/dream/28828030_1082872518517786_6046858889608042055_o.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/32778117_1118023505002687_7348826078682546176_o.jpg" class="boxer relgallery" title="Magniflex в la datcha"  itemprop="contentUrl"> <img src="/img/dream/32778117_1118023505002687_7348826078682546176_o.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/34673379_1129693667169004_774766010904346624_o.jpg" class="boxer relgallery" title="Magniflex в la datcha"  itemprop="contentUrl"> <img src="/img/dream/34673379_1129693667169004_774766010904346624_o.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span class="newWidth50">
<img src="/img/dream/ladacha.jpg" alt="Byron" itemprop="thumbnailUrl" />
</span>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/34688245_1129693623835675_3202265867152785408_o.jpg" class="boxer relgallery" title="Magniflex в la datcha"  itemprop="contentUrl"> <img src="/img/dream/34688245_1129693623835675_3202265867152785408_o.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/34717876_1129693700502334_87688096719568896_o.jpg" class="boxer relgallery" title="Magniflex в la datcha"  itemprop="contentUrl"> <img src="/img/dream/34717876_1129693700502334_87688096719568896_o.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/34826189_1129693630502341_1613794086995623936_o.jpg" class="boxer relgallery" title="Magniflex в la datcha"  itemprop="contentUrl"> <img src="/img/dream/34826189_1129693630502341_1613794086995623936_o.jpg" alt="Magniflex в Byron" itemprop="thumbnailUrl" /></a></span>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/93606507.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/93606507.jpg" alt="Magniflex в la datcha" itemprop="thumbnailUrl" /></a></span>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/15408234.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/15408234.jpg" alt="Magniflex в la datcha" itemprop="thumbnailUrl" /></a></span>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/41695185_1227859017352468_9172397548214681600_o.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/41695185_1227859017352468_9172397548214681600_o.jpg" alt="Magniflex в la datcha" itemprop="thumbnailUrl" /></a></span>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/40500759_1219231208215249_6497943433292808192_o.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/40500759_1219231208215249_6497943433292808192_o.jpg" alt="Magniflex в la datcha" itemprop="thumbnailUrl" /></a></span>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/44335529_1248749845263385_2962661921020444672_o.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/44335529_1248749845263385_2962661921020444672_o.jpg" alt="Magniflex в la datcha" itemprop="thumbnailUrl" /></a></span>
<span class="newWidth50" itemscope itemtype="https://schema.org/ImageObject"><a href="/img/dream/37975842_1182567491881621_8371958761140518912_o.jpg" class="boxer relgallery" title="Magniflex в Byron"  itemprop="contentUrl"> <img src="/img/dream/37975842_1182567491881621_8371958761140518912_o.jpg" alt="Magniflex в la datcha" itemprop="thumbnailUrl" /></a></span>
</div>
		</div>
			'
		),
		array(
			'address' => 'internet_magazinam',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Интернет-магазинам',
			'left_sidebar' => 'partneram',
			'title' => 'Условия сотрудничества с интернет-магазинами',
			'description' => 'Условия сотрудничества компании Magniflex с интернет-магазинами в России',
			'keywords' => 'Интернет-магазинам',
			'text' => '
			<style>
			.hnb_mworld{
				display:block;
			}
			</style>
			<div class="hnb_contarea">
			<h2 class="hnb_mytitlepag">Условия сотрудничества с интернет-магазинами</h2>
			<h3>Основные условия:</h3>
			<ul style="list-style-type:  disc;padding-left: 15px;">
			<li>предоставление информации для размещения на сайте (тексты + фото).</li>
<li>еженедельное предоставление складских остатков.</li>
<li>РРЦ - рекомендуемые розничные цены, контроль соблюдения.</li>
<li>бесплатное обучение сотрудников компании по продажам продукции Магнифлекс.</li>
<li>возможность использования фирменной службы доставки Магнифлекс.</li>
<li>возможность сотрудничества по агентскому договору либо по договору поставки.</li>
<li>возможен возврат товара на склад в случае отказа клиента от покупки (не развернутый из фирменной упаковки) .</li>
<li>более 2000 единиц товара всегда в наличии на складе в Москве.</li>
<li>оперативные консультации и обработка заказов.</li>
</ul><br>
		<p>	Для начала сотрудничества необходимо либо позвонить нам по телефону: +7 (495) 792-16-93, <br />
      либо отправить запрос на e-mail: sale@magniflex.ru. <br />
      Мы обязательно свяжемся с Вами!
	  </p>
	  <img class="fex-heigth" width="100%" src="/img/inetshops.png" alt="Magniflex - Условия сотрудничества с интернет-магазинами">
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
			'breadcrumbs_image' => '/img/contract-line-eng.jpg',
			'text' => '
			
			<h3>Предложение для гостиниц, отелей, мини отелей, хостелов, мини-гостиниц, гостевых домов</h3>
			Десятки тысяч гостиниц по всему миру уже используют продукцию фабрики Magniflex: ортопедические матрасы и подушки.<br/>
			<h3>Мы гарантируем:</h3>
            <ul style="list-style-type:  disc;padding-left: 15px;">
			<li>Высочайшее качество продукции;</li>
			<li>Долговечность и износостойкость: срок эксплуатации изделий более 15 лет;</li>
			<li>Недорогую, быструю доставку.</li>
			</ul>
			<h3>Выбирая итальянские матрасы и подушки Магнифлекс, Вы выбираете:</h3>
            <ul style="list-style-type:  disc;padding-left: 15px;">
            <li>качественный сон для Ваших постояльцев - желание возвратиться к Вам вновь;</li>
            <li>имидж - Магнифлекс международный известный бренд, который увеличивает привлекательность Вашего бизнеса своим присутствием;</li>
            <li>высокий срок службы матрасов - это грамотная инвестиция и экономия средств;</li>
            <li>матрасы Магнифлекс всегда выделены в Booking.com как преимущество и дополнительный бонус для номера;</li>
            <li>индивидуальное ценообразование, сжатые сроки поставки, хорошее качество и хорошие гарантийные условия.
            </ul>
			<p>
            Возможно изготовление и поставка индивидуальных моделей, нестандартных размеров матрасов и подушек под заказ.
            Запрос для получения коммерческого предложения просьба направлять на нашу почту: sale@magniflex.ru либо по телефону: +7 (495) 792-16-93.
</p>
<img width="100%" src="/img/inetshops2.png" alt="Magniflex - Эксклюзивное предложение для отельеров">
				<div style="clear: both;"></div>
			
			'
		),
		array(
			'address' => 'sotrudnichestvo_dizajnerami_arkhitektorami',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Дизайнерам и архитекторам',
			'left_sidebar' => 'partneram',
			'title' => 'Дизайнерам и архитекторам Magniflex',
			'description' => 'Условия сотрудничества с Magniflex',
			'keywords' => 'Дизайнерам и архитекторам',
			'text' => '
			<style>
			.hnb_mworld{
				display:block;
			}
			</style>
					
			<h3>Условия сотрудничества с дизайнерами, дизайн-студиями и архитекторами</h3>
			<p>С компанией Магнифлекс очень престижно работать, география продаж на сегодня - это 96 стран мира. Бренд Магнифлекс является не только мировым матрасным лидером, но также модным брендом и стилем жизни. Магнифлекс выбирают успешные люди, которые ценят комфорт, качество и высокий уровень жизни.</p>
<p>Изысканный стиль, высокие анатомические свойства продукции, большой срок службы - это отличная инвестиция в собственный качественный сон и настроение.</p>
<p>Современный дизайнер сначала подбирает матрас, под него уже кровать, поэтому еще на стадии проектирования возможно заказать любой размер матраса, необходимый Вашему клиенту.</p>
<p>Наш официальный шоу-рум готов принять Вас вместе с клиентами для облегчения процесса выбора продукции. Мы предлагаем отличные условия для всех розничных клиентов.</p>
<p>Наши партнеры дизайнеры и архитекторы имеют отличные индивидуальные условия сотрудничества и всегда рекомендуют продукцию Магнифлекс своим клиентам.</p>
<p>Также мы с радостью проводим встречи на различных международных выставках, где выставляется компания Магнифлекс - это естественным образом повышает престижность продукции в глазах Ваших клиентов.</p><br>
			<p>Для начала сотрудничества необходимо либо позвонить нам по телефону +7 (495) 792-16-93, <br />
      либо отправить запрос на e-mail: sale@magniflex.ru. <br />
      Мы обязательно свяжемся с Вами!
	  </p>
	  <img width="100%" src="/img/designers.png" alt="Magniflex - Условия сотрудничества с дизайнерами, дизайн-студиями и архитекторами">
			

		
			'
		),

array(
			'address' => 'sotrudnichestve-salonam-i-magazinam',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Мебельным салонам и магазинам',
			'left_sidebar' => 'partneram',
			'title' => 'Мебельным салонам и магазинам Magniflex',
			'description' => 'Условия сотрудничества с Magniflex',
			'keywords' => 'Мебельным салонам и магазинам',
			'text' => '
			
			<div class="hnb_contarea">

					
			<h3>Предложение о сотрудничестве салонам и магазинам</h3>
			<p>Являясь эксклюзивным представительством фабрики Магнифлекс в РФ мы предлагаем мебельным салонам и магазинам стать нашим официальным дилером.</p>
<h3>Мы предоставляем:</h3>
<ul class="disk-pad-left"><li>бесплатное обучение Ваших сотрудников по продукции, тренинги по продажам,</li>
<li>бесплатную печатную рекламную продукцию;</li>
<li>бесплатную рекламную поддержку - размещение информации о Вас на нашем сайте в контактах;</li>
<li>образцы продукции на ответ-хранение с отсрочкой оплаты;</li>
<li>бесплатная доставка продукции до Вашего склада или магазина в пределах МКАД Москва, бесплатная доставка до терминалов транспортных компаний для отправки продукции в другие города в пределах МКАД Москва;</li>
<li>наличие ассортимента на складе в Москве;</li>
<li>возможность возврата нераскрытых товаров из упаковки в случае отказа Вашего клиента;</li>
<li>при необходимости бесплатную профессиональную помощь наших консультантов Вашим клиентам;</li>
<li>качественную продукцию, произведенную в Италии с большим сроком службы и гарантией.</li>
</ul>
<p>При наличии высокой проходимости торговой площади рассматриваем возможность размещения бренд-секции Магнифлекс на индивидуальных условиях!<br/></p>
<p>
Для отправки заявки используйте почту: sale@magniflex.ru или позвоните в отдел по работе с оптовыми покупателями по телефону: +7 (495) 792-16-93.
</p>
<img width="100%" src="/img/salonam-i-mag.png" alt="Magniflex - Предложение о сотрудничестве салонам и магазинам">

				
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
			.
			</style>
			<div class="hnb_contarea">
			
			<h2 >Стать дилером Magniflex</h2>
<p>
Представительство фабрики Магнифлекс в России осуществляет свою деятельность с 1992 года. За более чем 20-ти летний опыт работы наша компания зарекомендовала себя в качестве надежного и качественного поставщика продукции. <br/></p>
<p>Мы открыты для сотрудничества с любыми компаниями и предлагаем индивидуальный подход к каждому нашему партнеру.<br/></p>
<p>
По вопросам сотрудничества Вы можете обратиться по телефону: +7 (495) 792-16-93<br/>
или написать сообщение на электронную почту: sale@magniflex.ru
</p>
				
				<div style="clear: both;"></div>
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
			<div class="hnb_contarea">

					
			<h2 class="hnb_mytitlepag">Оптовикам - особые условия!</h2>
			<h3>Специальная оптовая цена возможна при заказе более 5 штук</h3>
			<p>
			В случае необходимости проведения оптовых закупок матрасов возможно индивидуальное предложение и скидки в зависимости от моделей, количества и условий поставки.<br/></p>
			<p> Матрасы и подушки поставляются на заказ фирменным транспортом из Италии в Россию с приблизительной периодичностью раз в месяц.<br/></p>

			<p>
            Для получения предложения просьба связываться по почте:<br/>
			sale@magniflex.ru либо по телефону: +7 (495) 792-16-93.
			</p>
				
				<div style="clear: both;"></div>
			</div>
			'
		),
		array(
			'address' => 'for_partners',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Для партнеров',
			'left_sidebar' => 'partneram',
			'title' => 'Для партнеров',
			'description' => 'Для партнеров',
			'keywords' => 'Для партнеров',
			'breadcrumbs_image'=>'/img/contract-line-eng.jpg',
			'text' => '

			<style>
			
			.hnb_contarea{
				height: auto !important;
				min-height: 400px;
			}
			</style>
			        <br />
					<p>Для входа в кабинет, введите ваш пароль и нажмите кнопку "ok":</p>

						<div id="wrap_for_partners">
							<form id="partner_avtoriz" name="partner_avtoriz" class="" method="post">
								<input type="password" name="password" placeholder="Введите Ваш пароль" />
								<input type="submit" value="Ok" />
							</form>
							<div class="result"></div>
						</div>
			
			<script>
				$("#partner_avtoriz").on("submit", function() {
					var params = {
						pass: $("input[name=\"password\"]").val()
					}
					$.post("../../for_partners.php", params, function (data) {
						$("#wrap_for_partners .result").html(data);
						$("#wrap_for_partners form").hide();
					});
					return false;
				});
				$(document).on("click", "#return_input", function() {
					$("input[name=\"password\"]").val("");
					$("#wrap_for_partners .result").html("");
					$("#wrap_for_partners form").show();
				});
			</script>
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
			<h3>Настоящие ортопедические</h3>
<p>
Продукция Magniflex (Магнифлекс) - матрасы и подушки - действительно являются ортопедическими изделиями. Компания поставляет свою продукцию более чем в 99 стран по всему миру и в каждой стране мы получаем все необходимые сертификаты и свидетельства.
<br>
Это особенно важно, поскольку в Российской Федерации нет жестко закрепленного законом стандарта на "ортопедические матрасы" или "ортопедические подушки", поэтому зачастую продавцы и производители вкладывают свой смысл в это словосочетание, широко используя его при рекламе своей продукции. Однако, например, в Италии требования гораздо жестче: прежде чем написать на этикетке слово "Ortopedico", продукт должен получить специальные сертификаты, которые невозможно купить. Аналогичная ситуация и в других странах, таких как в Германии, Англии, США, Японии.
<br><br>
</p>
<h3>Подтверждения в России</h3>
<p>
	Важнейшим свидетельством ОРТОПЕДИЧЕСКИХ свойств матрасов и подушек Магнифлекс в России - является заключение, выданное нам главным Российским Институтом в области Ортопедии - Центральным Институтом Травматологии и Ортопедии Российской Федерации им. Н.Н. Приорова. С ним Вы можете ознакомиться в разделе <a href="/pokupatelyam/certificates/">сертификаты</a>. Также в России продукция компании Magniflex имеет все необходимые санитарно-эпидемиологические сертификаты и заключения, сертифицирована РОСТЕСТ.
</p>
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
			'breadcrumbs_image'=>'/img/toskana.jpg',
			'text' => '
			<style>
			#coin-slider{
				margin:0 auto;
			}
			#cs-navigation-coin-slider {
				display: none !important;
			}

			</style>
<h3>Исключительно итальянская продукция</h3>
<img src="/img/made_in_italy.jpg">
<p>
Вся продукция компании Magniflex (Магнифлекс) производится исключительно в Италии итальянскими специалистами в городе Прато рядом с всемирно известной Флоренцией.
<br>
Magniflex (Магнифлекс) располагает самой крупной фабрикой по производству матрасов в Европе (ежедневно мы выпускаем более 10 000 матрасов), оснащенной самыми передовыми технологиями, в том числе используемых в космической отрасли.
</p>
<h3>Факт</h3>
<p>
В России практически нет других ортопедических матрасов, произведенных за рубежом, кроме Magniflex. Большинство остальных производителей продают франшизу и под европейским/американским наименованием дорого продаются отечественные продукты.
</p>
<div id="coin-slider">
<a href="#" target="_blank"> <img alt="Фабрика матрасов Magniflex в Прато" src="/img/slider_index/toskana-magniflex-01.jpg"><span>Фабрика матрасов Magniflex в Прато</span></a>
<a href="#" target="_blank"> <img alt="Пейзажи Тосканы. Родины матрасов Magniflex" src="/img/slider_index/toskana-magniflex-02.jpg"><span>Пейзажи Тосканы. Родины матрасов Magniflex</span></a>
<a href="#" target="_blank"> <img alt="Пейзажи Тосканы. Родины матрасов Magniflex" src="/img/slider_index/toskana-magniflex-03.jpg"><span>Пейзажи Тосканы. Родины матрасов Magniflex</span></a>
<a href="#" target="_blank"> <img alt="Флоренция - центр региона Тоскана" src="/img/slider_index/toskana-magniflex-04.jpg"><span>Флоренция - центр региона Тоскана</span></a>
<a href="#" target="_blank"> <img alt="Пейзажи Тосканы. Родины матрасов Magniflex" src="/img/slider_index/toskana-magniflex-05.jpg"><span>Пейзажи Тосканы. Родины матрасов Magniflex</span></a>
<a href="#" target="_blank"> <img alt="Пейзажи Тосканы. Родины матрасов Magniflex" src="/img/slider_index/toskana-magniflex-06.jpg"><span>Пейзажи Тосканы. Родины матрасов Magniflex</span></a>
<a href="#" target="_blank"> <img alt="Пейзажи Тосканы. Родины матрасов Magniflex" src="/img/slider_index/toskana-magniflex-07.jpg"><span>Пейзажи Тосканы. Родины матрасов Magniflex</span></a>
		</div>
		<div style="clear:both;">
</div>
			<div style="clear: both;"></div>
			'
		),
		array(
			'address' => 'certificates',
			'parent_address' => 'production',
			'parent_name' => 'Покупателям',
			'name' => 'Сертификаты на матрасы и подушки Magniflex',
			'left_sidebar' => 'production',
			'title' => 'Сертификаты на матрасы и подушки Magniflex',
			'description' => 'Основные свидетельства и сертификаты на ортопедические матрасы и подушки Magniflex',
			'keywords' => 'сертификаты на матрасы, сертификаты на подушки',
			'text' => '
			<style>
				#breadcrumbs {
					background: url(/img/breadcrumbs_riposook.jpg);
					height: 220px;
				}

				.hnb_mworld{
					display:block;
				}
				</style>

<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<p>
	Ортопедических матрасы и подушки Magniflex  <b>продаются в 99-ми странах по всему миру</b>: от Японии с Австралией до США с Канадой.
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
Выдается сроком на 1 год.
</p>
<p class="sertDowl">
<b>Актуальные сертификаты можно скачать по ссылкам:</b><br>
<a target="_blank" href="/doc/Сертификат Матрасы.pdf">Сертификат ГОСТ Р на матрацы</a><br>
<a target="_blank" href="/doc/Сертификат Подушки.pdf">Сертификат ГОСТ Р на подушки</a><br>
<a target="_blank" href="/doc/Сертификат-пледы.pdf">Сертификат ГОСТ Р на пледы, покрывала, одеяла</a>
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
  <h3>Обязательная Сертификация ГОСТ&nbsp;Р</h3> свидетельствует о безопасности продукции, услуг и работ и подтверждается знаком качества.</p>
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
		<td><img src="/img/magniflex-sertifikat-1.jpg" alt="Сертификат Oeko-Tex стандарт 100" ></td>
		<td>
Oeko-Tex стандарт 100 – Международная Ассоциация независимых лабораторий (в состав Ассоциации входят 17 исследовательских институтов в 40 странах мира), которая проводит экспертную оценку всех видов текстильных изделий, на предмет отсутствия в изделии вредных для организма человека и окружающей среды веществ. Тестируемые образцы текстиля исследуются по многим параметрам, одними из которых являются: соответствие норме рН; содержание формальдегидов; наличие тяжелых металлов; наличие хлорсодержащих носителей и защитных веществ вредных для организма человека. Ярлык Oeko-Tex на изделии, информирует потребителя о том, что данные материалы прошли комплексное экологическое тестирование в лабораторных условиях, не содержат вредных для организма человека веществ и соответствуют европейским нормам безопасности.
		</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-2.jpg" alt="Сертифкат LGA (Германия)" ></td>
		<td><b>LGA (Германия)</b> <br />
Магнифлекс использует только самые лучшие материалы - факт, подтвержденный сертификатом LGA, а вся продукция имеет удостоверение Oeko-Tex, гарантирующие отсутствие аллергенов и веществ, которые могут быть вредны для Вашего здоровья или окружающей среды.
<br /><br />
Сертифкат LGA означает, что продукция прошла комплексные испытания в европейской лаборатории под эгидой независимого аудитора TUV Reinland LGA Products (Германия). <br />
Группа компаний LGA - ведущая европейская корпорация, занимающаяся проверкой соответствия качества продукции международным стандартам. Головное подразделение, расположенное в городе Нюрнберг, объединяет более 30 офисов по всей Германии и за ее пределами. <br />
LGA работает абсолютно независимо и не сотрудничает ни с частными, ни с юридическими лицами. Сертификат LGA много лет является ориентиром для европейского покупателя, так как гарантирует полное соответствие продукта высочайшим международным стандартам качества. Корпорация тщательно отбирает наиболее достойную продукцию, которая пройдет все многочисленные анализы и испытания, выполняемые только в лучших аккредитованных европейских лабораториях высококвалифицированными профессионалами.
</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-5.jpg" alt="Сертификат AJA Registrars, UKAS" ></td>
		<td>
<b>Стандартизация AJA, UKAS</b> <br>
Вся продукция соответствуют высочайшим международным стандартам качества BS EN ISO 9001:2008, проверено и одобрено UKAS, и AJA.
<br /><br />
AJA Registrars – независимая международная организация сертификации, аккредитованная UKAS. Испытательные и калибровочные лаборатории AJA проводят комплексный и всесторонний мониторинг менеджмента качества предприятий, фабрик, компаний в большинстве сферах производства. Помимо мониторинга менеджмента качества, AJA Registrars проводит комплексную проверку компаний на соответствие европейским стандартам экологии, безопасности производства, охраны окружающей среды.
</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-6.jpg" alt="Медицинское изделие" ></td>
		<td>
UKAS – это Сервис Аккредитации Объединенного Королевства. Аккредитация в этой системе означает, что организация, получившая этот сертификат, была подвержена анализу в соответствии с международными стандартами и показала свою техническую компетентность и высокие показатели по эксплуатационным качествам. Система менеджмента качества фабрики Magniflex получила подтверждение и экспертную оценку независимой международной организации AJA аккредитованной UKAS.
		</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-7.jpg" alt="Сертификат Medical Device" ></td>
		<td><b>Медицинское изделие</b> <br>
Ортопедические матрасы и подушки признаны медицинскими изделиями в Европе и рекомендованы к применению. Мы имеем ПОЛНОЕ ПРАВО писать на своих товаров слово "ОРТОПЕДИЧЕСКИЕ".
<br /> <br />
Сертификат Medical Device позволяет покупателям с ограниченными возможностями и инвалидам получать возмещение за приобретение продукции от гос. органов в рамках законодательств страны обращения.
</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-8.jpg" alt="Сертификат FIRA UK – Великобритания" ></td>
		<td>
		FIRA UK – Великобритания. Организация проводит широкий спектр мебельных тестов, включающий тестирование воспламеняемости, структуры мебельных материалов и тестирование поверхности изделий.

		</td>
	</tr>
	<tr>
		<td><img src="/img/magniflex-sertifikat-9.jpg" alt="Сертификат Университет Флоренции Fiorentina Studiorum Universitas" ></td>
		<td>
		Университет Флоренции Fiorentina Studiorum Universitas Сертификат подтверждает использование результатов исследований на предмет эрогономики в Университете Флоренции. Университет был основан в 1321 году и состоит из 12 факультетов.

		</td>
	</tr>
</tbody></table>

</div>

			'
		),
		array(
			'address' => 'vakuumnaya-upakovka',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Вакуумная упаковка',
			'left_sidebar' => 'production',
			'title' => 'Magniflex - итальянские матрасы в вакуумной упаковке',
			'description' => 'Вакуумная упаковка матрасов Magniflex: свойства, фотографии, рекомендации. Запатентованная технология.',
			'keywords' => 'матрасы в вакуумной упаковке, вакуумная упаковка матрасов',
				'text' => '
		<p>
	В 1986 году именно специалистам компании Magniflex удалось изобрести и запатентовать технологию производства “вакуумных матрасов”. <br />
	Это достаточно дорогая и технически сложная процедура. Для простоты ее можно представить так: в условии абсолютного вакуума матрас сжимается в 10 раз, скручивается и упаковывается в плотную
	полиэтиленовую упаковку.<br />
	Внимание! Внутренний полиэтиленовый пакет не запаян. <br />
	<br />
	<br />
	<img alt="вакуумная упаковка матрасов Магнифлекс" src="/img/upokovka.png" /> <br />
	<br />
	<hr />
	<h3>Гарантировано: новый, идеально чистый</h3>
	<br>
	<p>
	Вакуумная упаковка гарантирует идеальную чистоту матраса: он будет именно таким, каким сошел с конвейера в Италии. Если вскрыть упаковку – матрас раскроется. Сложить обратно и запечатать уже никак
	не получится, по этому, вакуумная упаковка – это естественная гарантия того, что товар новый, никогда ранее не использовавшийся. <br />
	</p>
	<br />
	<div id="coin-slider">
		<a href="#" target="_blank">
			<img alt="матрасы в вакуумной упаковке" src="/img/vakuumnaya-upakovka-01.jpg" />
			<span>
				Вакуумная упаковка &mdash; залог чистоты и удобства
			</span></a
		>
		<a href="#" target="_blank">
			<img alt="вакуумная упаковка матрасов магнифлекс" src="/img/vakuumnaya-upakovka-02.jpg" />
			<span>
				Сквозь прозрачную полиэтиленовую упаковку легко прочитать нужную информацию
			</span></a
		>
		<a href="#" target="_blank">
			<img alt="вакуумная упаковка матраса магнифлекс - natur comfort" src="/img/vakuumnaya-upakovka-03.jpg" />
			<span>
				Матрасы упакованы очень компактно – первоначальный объем уменьшается в 10 раз!
			</span></a
		>
		<a href="#" target="_blank">
			<img alt="вакуумная упаковка матрасов magniflex" src="/img/vakuumnaya-upakovka-04.jpg" />
			<span>
				Допускается незначительная разгерметизация упаковки
			</span></a
		>
		<a href="#" target="_blank">
			<img alt="серийный номер матраса magniflex" src="/img/vakuumnaya-upakovka-05.jpg" />
			<span>
				Каждый матрас имеет свой идентификатор – серийный номер, вида: S/N XXXXXXXXX. Размер матраса и название модели указано в специальном поле
			</span></a
		>
	</div>
	<hr />
	<h3>Легкие, Компактные, Удобные</h3>
	<p>
	Вакуумные матрасы настолько легкие, а упаковка удобная, что их можно доставить до дома на общественном транспорте. <br />
	Для транспортировки больших двуспальных моделей лучше использовать автомобиль ;).
	</p>

	<img alt="матрас в вакуумной упаковке - может донести даже девушка" src="/img/anyamat.png" /> <br />
	<br />
	<hr />
	<h3>Если нарушена вакуумная упаковка – брак ли это?</h3>
	<p>
	Технологически допускается, незначительное нарушение вакуумной упаковки. Это не продукт питания – матрас не испортится. <br />
	Главное, чтобы при полной распаковке матрас восстановил свою изначальную форму, для этого может потребоваться от 6 до 24 часов.
</p>
<p>
	Если целостность упаковки вызывает у Вас сомнения — НИ В КОЕМ СЛУЧАЕ НА ОТКРЫВАЙТЕ МАТРАС! Незамедлительно свяжитесь с нашей службой поддержки по телефону, Вам обязательно помогут. <br />

</p>
			'
		),
		array(
			'address' => 'fabric-and-treatments',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Ткань чехла матраса',
			'left_sidebar' => 'production',
			'title' => 'Ткани и технологии, используемые в чехлах матрасов и подушек Magniflex | Магнифлекс',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<style>
			.hnb_mworld2{
				display:block;

			}
			</style>
		<div class="outlast_wrapper">
	<img src="/img/outlast-newg.jpg" alt="Maedical">
	<div class="outlast_wrapper_txt">
	<h3>Outlast</h3>
    <p> Сертификация: Space technology.
	Терморегулирующая ткань Outlast изначально создавалась как основной материал для скафандров космонавтов, работающих в открытом космосе.
		Один квадратный сантиметр ткани Outlast содержит десятки тысяч сферических восковых микрокапсул, способных реагировать на тепло:
		при повышении температуры окружающей среды излишки тепла поглощаются - «сферы заряжаются»; если же температура падает - сферы выпускают накопленное ранее тепло. Тем самым на поверхности ткани создается идеальный микроклимат. Ни жарко, ни холодно, а очень комфортно!
	</p><p><span>Узнать больше о ткани <a href="/production/outlast/">Outlast</a></span></p>
</div>
</div>
<div class="outlast_wrapper">
	<img src="/img/viscose-newg.jpg" alt="Maedical">
	<div class="outlast_wrapper_txt">
	<h3>Viscose</h3>
	<p>«искусственный шелк»
	Необычайно мягкая, «шелковая» ткань, получаемая из натуральной очищеной древесной целлюлозы. Обеспечивает как высокую воздухопроницаемость матрасам, так и отличные  гигроскопичные свойства, быстро впитывая (в два раза лучше хлопка) и испаряя лишнюю влагу и капельки пота.
 	<span>Узнать больше о ткани <a href="/production/Viscose/">Viscose</a></span></p>
	 </div>
	 </div>
	 <div class="outlast_wrapper">
	<img src="/img/viscose-newg.png" alt="Satin viscose">
	<div class="outlast_wrapper_txt">
    <h3>Satin Viscose</h3>
	<p>Сочетает в себе свойства «искусственного шелка» Viscosa и элегантность сатина. Мягкая, дышащая, глянцевая ткань с отличными гигроскопичными свойствами.
 	<span>Узнать больше о ткани <a href="/production/Satin-viscose/">Satin Viscose</a></span></p>
	 </div>
	 </div>
	 <div class="outlast_wrapper">
	<img src="/img/3dband2.png" alt="3d Band">
	<div class="outlast_wrapper_txt">
    <h3>3D Band</h3>
	<p>Трехмерная иновационная ткань. Используется для наружного слоя чехла матраса. Трехмерная структура способствует отличной воздухопроницаемости, снижает до минимума уровень влажности внутри матраса, нейтрализует запахи, обеспечивает чрезвычайно высокий уровень гигиены.</p>
 	<p><span>Узнать больше о ткани <a href="/production/3D-Band/">3D Band</a></span></p>
	 </div>
	 </div>

	 
  <h3 class="textCenter">НАТУРАЛЬНЫЕ МАТЕРИАЛЫ и ДОБАВКИ</h3>
  <p class="textCenter">Magniflex использует 100% натуральные, экологически чистые материалы!</p>
  
  <div class="outlast_wrapper">
	<img src="/img/wooden-fiber.png" alt="Древесные волокна">
	<div class="outlast_wrapper_txt">
    <h3>Древесные волокна</h3>
	<p>Экологически чистый, натуральный материал, произведенный из тщательно отобранных смесей древесных пород. Отличается мягкостью, отличной терморегуляцией и воздухопроницаемостью.
 	<span>Узнать больше о <a href="/production/Wooden-fiber/">Древесных волокнах</a></span></p>
	 </div>
	 </div>
	 <div class="outlast_wrapper">
	<img src="/img/wool-merinos2.png" alt="Шерсть тонкорунного мериноса">
	<div class="outlast_wrapper_txt">
    <h3>Шерсть тонкорунного мериноса</h3>
	<p>Мериносы отличаются от остальных овец высоким качеством чёсаной шерсти, состоящей из тонких и очень мягких волокон. Шерсть оказывает оздоравливающее воздействие на организм человека. Согревает зимой.
 	<span>Узнать больше о <a href="/production/Merinos/">шерсти мериноса</a></span></p>
</div>
	 </div>
	 <div class="outlast_wrapper">
	<img src="/img/bambukfiber.png" alt="Волокна натурального бамбука">
	<div class="outlast_wrapper_txt">
    <h3>Волокна натурального бамбука</h3>
	<p>Бамбуковое волокно идеально поглощает влагу и обеспечивает отличную аэрацию, что гарантирует сохранение сухости и создает хороший микроклимат для сна. Бамбук обладает антибактериальными свойствами, восстанавливает клетки кожи, способствует отличному отдыху.
 	<span>Узнать больше о <a href="/production/Bamboo-fiber/">Волокнах Бамбука</a></span></p>
	 </div>
	 </div>
	 <div class="outlast_wrapper">
	<img src="/img/Organic_cotton2.png" alt="Органический хлопок">
	<div class="outlast_wrapper_txt">
    <h3>Органический хлопок</h3>
	<p>Органический хлопок - мягкий, приятный на ощупь натуральный материал. Гарантирует максимальную воздухопроницаемость. Сертифицирован GOTS.<br>
Главное отличие обычного хлопка от органического (organic cotton) - это способ его производства:  органические хлопок выращивают без использования ГМО (семена не подвергаются генетической модификации), без химических удобрений, пестицидов и прочего. То есть это 100% экологически чистый материал.
 	<span>Узнать больше об <a href="/production/Organic-cotton/">Органическом хлопоке</a></span></p>
	 </div>
	 </div>
	 <div class="outlast_wrapper">
	<img src="/img/cotton_new.jpg" alt="100% натуральный хлопок">
	<div class="outlast_wrapper_txt">
    <h3>100% натуральный хлопок</h3>
	<p>Хлопковая ткань - растительное волокно,  славится гигроскопичными и антистатическими свойствами, высокой воздухопроницаемостью. Позволяет коже человека дышать, обеспечивает здоровый освежающий сон.
	<span>Узнать больше о <a href="/production/Cotton/">натуральном хлопке</a></span></p>
	</div>
	</div>
	<div class="outlast_wrapper">
	<img src="/img/percale.png" alt="Перкаль">
	<div class="outlast_wrapper_txt">
    <h3>Перкаль</h3>
	<p>Тонкая, плотная натуральная хлопчатобумажная ткань, синоним стиля и элегантности. При контакте с кожей обеспечивает приятное бархатистое ощущение.
	<span>Узнать больше о ткани <a href="/production/Percale/">Перкаль</a></span></p>
</div>
	</div>
	<div class="outlast_wrapper">
	<img src="/img/cotton-satin.png" alt="Хлопок - Сатин">
	<div class="outlast_wrapper_txt">
    <h3>Хлопок - Сатин</h3>
	<p>Сочетания блеска и мягкости сатина с высокой гигроскопичностью хлопка
	делают этот материал невероятно гигиеничным. Шикарная ткань luxury уровня,  мягкая и очень приятная на ощупь.
	<span>Узнать больше о ткани <a href="/production/Cotton-satin/">Хлопок - Сатин</a></span></p>
	</div>
	</div>
	<div class="outlast_wrapper">
	<img src="/img/aloe-vera-3.png" alt="Натуральный экстракт Алоэ Вера">
	<div class="outlast_wrapper_txt">
    <h3>Натуральный экстракт Алоэ Вера</h3>
	<p>Придает тканям регенерирующие свойства, восстанавливает клетки.  Экстракт Алое Вера помогает заживлять ранки, замедляет старение клеток, оказывают противовоспалительное действие.
	<span>Узнать больше об <a href="/production/Aloe-vera/">экстракте Алоэ Вера</a></span></p>
	</div>
	</div>
	<div class="outlast_wrapper">
	<img src="/img/green-tea.png" alt="Натуральный экстракт Зеленого Чая">
	<div class="outlast_wrapper_txt">
    <h3>Натуральный экстракт Зеленого Чая</h3>
	<p>Экстракт зеленого чая придает тканям исключительные антисептические свойства, оказывает благоприятное расслабляющее воздействие,
	улучшает качество сна.
	<span>Узнать больше об <a href="/production/Green-tea/">экстракте Зеленого Чая</a></span></p>
	</div>
	</div>
			'
		),
		array(
			'address' => 'outlast',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Outlast',
			'left_sidebar' => 'production',
			'title' => 'Outlast',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<style>
			.hnb_conttextright{
				display:block;
			}
			</style>
			<div class="outlast_wrapper">
						<img src="/img/Outlast1.png" alt="Технология Outlast">
						<div class="outlast_wrapper_txt">

						<h3>Outlast</h3>
						<p class="outlast_align">
					Outlast – теплорегулирующая ткань, созданная по специальным технологиям для скафандров космонавтов. Сертификация: Space technology. Ткань, которая содержит миллионы сфер, изготовленных из специального воска, который реагирует на температуру. Когда в ночное время температура тела повышается, излишнее тепло поглощается, но когда температура падает до некомфортной, миллионы сфер выпускают накопленное тепло, позволяя температуре быть на среднем комфортном уровне без перепадов. Подобное обеспечивается особенностью структуры восковых сфер – они могут сжиматься и разжиматься, соответственно накапливая или отдавая тепло.
					</p>
					</div>
			</div>
			'
		),
		array(
			'address' => 'Coolmax',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Coolmax',
			'left_sidebar' => 'production',
			'title' => 'Coolmax',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<style>
			.hnb_conttextright{
				display:block;
			}
			</style>
			<div class="outlast_wrapper">
	<img src="/img/Coolmax.png" alt="Технология Coolmax">
	<div class="outlast_wrapper_txt">

	<h3>Coolmax</h3>
	<p class="outlast_align">
Coolmax - высокотехнологичная ткань, в которой используются инновационные волокна, стабилизирующие уровень влажности поверхности тела. Благодаря особым свойствам ткани coolmax проверяет и регулирует температуру кожи и увлажнения тела, высыхает быстрее обычного хлопка во много раз, сохраняя тело сухим и прохладным.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'Viscose',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Viscose',
			'left_sidebar' => 'production',
			'title' => 'Viscose',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">

				<img src="/img/Viscose.png" alt="Технология Viscose">
			<div class="outlast_wrapper_txt">
					<h3>Viscose</h3>
					<p class="outlast_align">
				Вискоза - мягкая, шелковистая ткань производится из очищенной и отборной древесной целлюлозы. Она чрезвычайно мягкая и шелковистая и быстро впитывает влагу, обеспечивая высокую воздухопроницаемость матрасов и подушек.
				</p>
		</div>
</div>
			'
		),
array(
			'address' => 'Satin-viscose',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Satin viscose',
			'left_sidebar' => 'production',
			'title' => 'Satin viscose',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">


    <img src="/img/Satin_viscose.png" alt="Технология Satin viscose">
    <div class="outlast_wrapper_txt">
	<h3>Satin viscose</h3>
	<p class="outlast_align">
Материал вискоза-сатин сочетает в себе свойства вискозы, которая имеет мягкую и шелковистую структуру, качество сатина, а также элегантность ткани с эффектом глянца на ощупь. Вместе, они имеют отличный потенциал впитывать и испарять влагу, что способствует воздухопроницаемости матраса.
</p>
</div>
</div>
			'
		),
		array(
			'address' => '3D-Band',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => '3D Band',
			'left_sidebar' => 'production',
			'title' => '3D Band',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">

	<img src="/img/3D_Band.png" alt="Технология 3D Band">
	<div class="outlast_wrapper_txt">

	<h3>3D Band</h3>
	<p class="outlast_align">
3D ткань - специальная трехмерная высокотехнологичная ткань. Он используется для наружного слоя матраса. Его высокий уровень воздухопроницаемости снижает уровень внутренней влажности внутри матраса до минимума, нейтрализуя запахи и исключая возможности образования плесени, тем самым обеспечивая чрезвычайно высокий уровень гигиены.
</p>
</div>
</div>
			'
		),

		array(
			'address' => 'Wooden-fiber',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Wooden fiber',
			'left_sidebar' => 'production',
			'title' => 'Wooden fiber',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">


    <img src="/img/Wooden_fiber.png" alt="Технология Wooden fiber">
    <div class="outlast_wrapper_txt">
	<h3>Wooden fiber</h3>
	<p class="outlast_align">
Целлюлозная пряжа - экологически чистый, натуральный материал, произведенный из тщательно отобранных смесей древесных пород. Он отличается от других целлюлозных тканей благодаря мягкости и функции терморегуляции, позволяет быстрее удалять плохой запах с поверхности матраса. Обладает хорошей воздухопроницаемостью.
</p>
</div>
</div>
			'
		),

		array(
			'address' => 'Bamboo-fiber',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Bamboo fiber',
			'left_sidebar' => 'production',
			'title' => 'Bamboo fiber',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/Bamboo_fiber.png" alt="Технология Bamboo fiber">
	<div class="outlast_wrapper_txt">

	<h3>Bamboo-fiber</h3><p class="outlast_align">
Бамбуковое волокно полностью состоит из микро-пор, что обеспечивает отличную циркуляцию воздуха и максимальное поглощение влаги. Использование такого материала гарантирует сохранение прохладной и сухой микрофлоры во время сна. Бамбуковое волокно также чрезвычайно прочное и долговечное. Бамбук, благодаря своим свойствам, позволяет скорее восстанавливать силы при соприкосновении с телом.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'Organic-cotton',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Organic cotton',
			'left_sidebar' => 'production',
			'title' => 'Organic cotton',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
				<img src="/img/Organic_cotton.png" alt="Технология Organic cotton">
				<div class="outlast_wrapper_txt">
						<h3>Organic cotton</h3> <p class="outlast_align">
					Органический хлопок - свежий материал с приятным тактильным ощущением, который при этом гарантирует продукции максимальную воздухопроницаемость. Подобные органические ткани сертифицированы GOTS - аккредитованной организацией этических и природоохранных органов по сертификации. Данный сертификат заверяет, что эти ткани производятся способом, который безвреден для человека и окружающей среды.
					</p>
				</div>
			</div>
			'
		),
		array(
			'address' => 'Cotton',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => '100 % Cotton',
			'left_sidebar' => 'production',
			'title' => '100 % Cotton',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
    		<img src="/img/100Cotton.png" alt="Технология 100 % Cotton">
				<div class="outlast_wrapper_txt">
						<h3>100 % Cotton</h3><p class="outlast_align">
					100% хлопок. Хлопок - это волокно растительного происхождения, которое славится своими гигроскопичными и антистатическими свойствами, а также воздухопроницаемостью. Материал обладает высокой впитывающей функцией и является мягким и удобным на ощупь, позволяя коже дышать и обеспечивая освежающий ночной сон.
					</p>
				</div>
			</div>
			'
		),
		array(
			'address' => 'Percale',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Percale',
			'left_sidebar' => 'production',
			'title' => 'Percale',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
   					 <img src="/img/Percale.png" alt="Технология Percale">
						<div class="outlast_wrapper_txt">
					<h3>Percale</h3><p class="outlast_align">
				Перкаль - материал природного происхождения, разработанный на основе нити из очень высококачественного хлопка; синоним стиля и элегантности. При контакте с кожей обеспечивает приятное бархатистое ощущение. Перкалю характерна легкость материала и стойкость к внешним воздействиям.
				</p>
				</div>
			</div>
			'
		),
		array(
			'address' => 'Cotton-satin',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Cotton satin',
			'left_sidebar' => 'production',
			'title' => 'Cotton satin',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/Cotton_satin.png" alt="Технология Cotton satin">
	<div class="outlast_wrapper_txt">
					<h3>Cotton satin</h3><p class="outlast_align">
				Хлопок-сатин. Блеск и мягкость сатина, в совокупности со свойствами хлопка, делают этот материал невероятно гигиеничным, чрезвычайно стойким к внешним воздействиям. Хлопок-сатин - шикарная ткань luxury уровня, невероятно мягкая и приятная на ощупь.
				</p>
</div>
			</div>
			'
		),
		array(
			'address' => 'Aloe-vera',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Aloe vera',
			'left_sidebar' => 'production',
			'title' => 'Aloe vera',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/Aloe_vera.png" alt="Технология Aloe vera">
	<div class="outlast_wrapper_txt">

					<h3>Aloe vera</h3><p class="outlast_align">
				Алоэ Вера обладает регенерирующими свойствами благодаря противовоспалительным, полезным для организма особенностям растения. Алое вера положительно влияет на значимые функции, такие как, сон, бодрость и внимательность.
				</p>
				</div>
			</div>
			'
		),
		array(
			'address' => 'Merinos',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Merinos',
			'left_sidebar' => 'production',
			'title' => 'Merinos',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/Merinos.png" alt="Технология Merinos">
	<div class="outlast_wrapper_txt">

					<h3>Merinos</h3>	<p class="outlast_align">
				Шерсть мериноса стригут из самых лучших пород овец семейства меринос. Шерсть мериноса является одной из самых качественных среди волокон животного происхождения. Чрезвычайно тонкая и мягкая на ощупь, обладает тепло-регулирующими свойствами и отличной воздухопроницаемостью, которая позволяет коже свободно дышать. Также меньше всего людей в мире имеют аллергию на шерсть мериноса, что делает ее самым популярным материалом в мире.
				</p>
			</div>
</div>
			'
		),
		array(
			'address' => 'Green-tea',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Green tea',
			'left_sidebar' => 'production',
			'title' => 'Green tea',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
    <img src="/img/Green_tea.png" alt="Технология Green tea">
    <div class="outlast_wrapper_txt">
	<h3>Green tea</h3><p class="outlast_align">
Зеленый чай является уникальным растением, несущим в себе множество различных веществ. Способствует очищению внутренних органов и выводу токсинов, бодрит и снимает усталость, обладает дезинфицирующим эффектом и снимает усталость. Пропитка экстракта зеленого чая позволяет полезным веществам проникать в организм человека через дыхательные пути и оказывать благоприятное воздействие на организм человека.
</p>
</div>
</div>
			'
		),

		array(
			'address' => 'fabric-and-treatments-vnut',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Ткани и материалы внутри матраса',
			'left_sidebar' => 'production',
			'title' => 'Ткани и материалы внутри матраса, используемые в  матрасах и подушках Magniflex | Магнифлекс',
			'title' => 'Ткани и материалы внутри матраса, используемые в  матрасах и подушках Magniflex | Магнифлекс',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '

  <h3  class="textCenter">МАТЕРИАЛЫ И ТКАНИ ВНУТРЕННИХ ПРОСЛОЕК</h3>
 <br>
 	<div class="outlast_wrapper">

	<img src="/img/camel-1.png" alt="Camelhair wool">
	<div class="outlast_wrapper_txt">
    <h3>Camelhair wool</h3>
	<p>
Верблюжья шерсть идеально подходит для зимних наполнений матраса, поскольку имеет структуру, которая хорошо удерживает тепло. Отлично поглощает влагу, которую выделяет организм и помогает ей быстро испаряться, сохраняя сухой и приятный микроклимат.
 <span>Узнать больше о ткани <a href="/production/Camelhair-wool/">Camelhair wool</a></span></p>
 </div>
 </div>
 <div class="outlast_wrapper">
	<img src="/img/cashemir.png" alt="Cashemire">
	<div class="outlast_wrapper_txt">
    <h3>Cashemire</h3>
	<p>
Кашемир - очень тонкая, мягкая и тёплая материя саржевого переплетения; ткётся из гребенной пряжи, сработанной из пуха (подшёрстка) кашемировых горных коз. Выдерживает грязь и, в первую очередь, пыль. Его необыкновенная способность задерживать воздух обеспечивает высокую степень тепловой изоляции, которая гарантирует сохранения тепла в зимние месяцы.
 <span>Узнать больше о ткани <a href="/production/Cashemire/">Cashemire</a></span></p>
 </div>
 </div>
 <div class="outlast_wrapper">
	<img src="/img/horse.png" alt="Horsehair">
	<div class="outlast_wrapper_txt">
	<h3>Horsehair</h3>
	<p>
Конский волос - это волокно, которое используется с древности для деталей кроватей и матрасов из-за своей невероятной упругости и эластичности. Конский волос не теряет свою природную эластичность и быстро восстанавливает свою первоначальную форму, обеспечивая такую же степень комфорта с течением времени. Волокно хорошо впитывает влагу и гарантирует, что тело остается прохладным и сухим.
  <span>Узнать больше о ткани <a href="/production/Horsehair/">Horsehair</a></span></p>
 </div>
 </div>
 <div class="outlast_wrapper">
	<img src="/img/len.png" alt="Linen">
	<div class="outlast_wrapper_txt">
    <h3>Linen</h3>
	<p>
Лен - является наиболее подходящим волокном для наполнения летней стороны матраса, поскольку он дает ощущение свежести при контакте с кожей. Кроме того, благодаря своей молекулярной структуре, лен успевает поглощать влагу, выделяющуюся организмом во время сна, позволяя ей испаряться.
 <span>Узнать больше о ткани <a href="/production/Linen/">Linen</a></span></p>
 </div>
 </div>
 <div class="outlast_wrapper">
	<img src="/img/wool-merinos2.png" alt="Шерсть тонкорунного мериноса">
	<div class="outlast_wrapper_txt">
    <h3>Шерсть тонкорунного мериноса</h3>
	<p>
Мериносы отличаются от остальных овец высоким качеством чёсаной шерсти, состоящей из тонких и очень мягких волокон. Шерсть оказывает оздоравливающее воздействие на организм человека. Согревает зимой.
 <span>Узнать больше о <a href="/production/Merinos/">шерсти мериноса</a></span></p>
 </div>
 </div>
 <div class="outlast_wrapper">
	<img src="/img/cotton_new.jpg" alt="100% натуральный хлопок">
	<div class="outlast_wrapper_txt">
    <h3>100% натуральный хлопок</h3>
	<p>
Хлопковая ткань - растительное волокно,  славится гигроскопичными и антистатическими свойствами, высокой воздухопроницаемостью. Позволяет коже человека дышать, обеспечивает здоровый освежающий сон.
 <span>Узнать больше о <a href="/production/Cotton/">натуральном хлопке</a></span></p>
 </div>
 </div>
 <div class="outlast_wrapper">
	<img src="/img/silk.png" alt="Silk">
	<div class="outlast_wrapper_txt">
    <h3>Silk</h3>
	<p>
Шелк, безусловно - это лучший и самый надежный материал из натуральных волокон, с большой механической прочностью и эластичностью, хотя при этом он мягкий и приятный на ощупь. Шелк - это из самый популярный luxury материал в мире, является отличным изолятором, обеспечивая тепло зимой и свежесть летом.
 <span>Узнать больше о ткани <a href="/production/Silk/">Silk</a></span></p>
 </div>
 </div>
 <div class="outlast_wrapper">
	<img src="/img/ROLLOBOULES-FIBRE.png" alt="Rolloboules fibre">
	<div class="outlast_wrapper_txt">
	<h3>Rolloboules fibre</h3>
	<p>
Терморегулирующая ткань Outlast изначально создавалась как основной материал для скафандров космонавтов, работающих в открытом космосе. &nbsp;
Один квадратный сантиметр ткани Outlast содержит десятки тысяч сферических восковых микрокапсул, способных реагировать на тепло:
при повышении температуры окружающей среды излишки тепла поглощаются - «сферы заряжаются»; если же температура падает - сферы выпускают накопленное ранее тепло. Тем самым на поверхности ткани создается идеальный микроклимат. Ни жарко, ни холодно, а очень комфортно!
 <span>Узнать больше о ткани <a href="/production/Rolloboules-fibre/">Rolloboules fibre</a></span></p>
 </div>
 </div>
			'
		),
		array(
			'address' => 'Camelhair-wool',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Camelhair wool',
			'left_sidebar' => 'production',
			'title' => 'Camelhair wool',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
<div class="outlast_wrapper">
	<img src="/img/Camelhair_wool.png" alt="Технология Camelhair wool">
	<div class="outlast_wrapper_txt">
	<h3>Camelhair wool</h3>
    <p>
Верблюжья шерсть идеально подходит для зимних наполнений матраса, поскольку имеет структуру, которая хорошо удерживает тепло. Отлично поглощает влагу, которую выделяет организм и помогает ей быстро испаряться, сохраняя сухой и приятный микроклимат.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'Cashemire',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Cashemire',
			'left_sidebar' => 'production',
			'title' => 'Cashemire',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/Cashemire.png" alt="Технология Cashemire">
	<div class="outlast_wrapper_txt">
	<h3>Cashemire</h3>
    <p>
    Кашемир - очень тонкая, мягкая и тёплая материя саржевого переплетения; ткётся из гребенной пряжи, сработанной из пуха (подшёрстка) кашемировых горных коз. Выдерживает грязь и, в первую очередь, пыль. Его необыкновенная способность задерживать воздух обеспечивает высокую степень тепловой изоляции, которая гарантирует сохранения тепла в зимние месяцы.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'Horsehair',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Horsehair',
			'left_sidebar' => 'production',
			'title' => 'Horsehair',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/Horsehair.png" alt="Технология Horsehair">
	<div class="outlast_wrapper_txt">
	<h3>Horsehair</h3>
    <p>
    Конский волос - это волокно, которое используется с древности для деталей кроватей и матрасов из-за своей невероятной упругости и эластичности. Конский волос не теряет свою природную эластичность и быстро восстанавливает свою первоначальную форму, обеспечивая такую же степень комфорта с течением времени. Волокно хорошо впитывает влагу и гарантирует, что тело остается прохладным и сухим.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'Linen',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Linen',
			'left_sidebar' => 'production',
			'title' => 'Linen',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/Linen.png" alt="Технология Linen">
	<div class="outlast_wrapper_txt">
	<h3>Linen</h3>
    <p>
    Лен - является наиболее подходящим волокном для наполнения летней стороны матраса, поскольку он дает ощущение свежести при контакте с кожей. Кроме того, благодаря своей молекулярной структуре, лен успевает поглощать влагу, выделяющуюся организмом во время сна, позволяя ей испаряться.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'Material-Merinos',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Merinos',
			'left_sidebar' => 'production',
			'title' => 'Merinos',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/Merinos.png" alt="Технология Merinos">
	<div class="outlast_wrapper_txt">
	<h3>Merinos</h3>
    <p>
    Шерсть мериноса стригут из самых лучших пород овец семейства меринос. Шерсть мериноса является одной из самых качественных среди волокон животного происхождения. Чрезвычайно тонкая и мягкая на ощупь, обладает тепло-регулирующими свойствами и отличной воздухопроницаемостью, которая позволяет коже свободно дышать. Также меньше всего людей в мире имеют аллергию на шерсть мериноса, что делает ее самым популярным материалом в мире.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'Material-Cotton',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => '100% Cotton',
			'left_sidebar' => 'production',
			'title' => '100% Cotton',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/100_Cotton.png" alt="Технология 100% Cotton">
	<div class="outlast_wrapper_txt">
	<h3>100% Cotton</h3>
    <p>
    100% хлопок. Хлопок - это волокно растительного происхождения, которое славится своими гигроскопичными и антистатическими свойствами, а также воздухопроницаемостью. Материал обладает высокой впитывающей функцией и является мягким и удобным на ощупь, позволяя коже дышать и обеспечивая освежающий ночной сон.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'Silk',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Silk',
			'left_sidebar' => 'production',
			'title' => 'Silk',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/Silk.png" alt="Технология Silk">
	<div class="outlast_wrapper_txt">
	<h3>Silk</h3>
    <p>
    Шелк, безусловно - это лучший и самый надежный материал из натуральных волокон, с большой механической прочностью и эластичностью, хотя при этом он мягкий и приятный на ощупь. Шелк - это из самый популярный luxury материал в мире, является отличным изолятором, обеспечивая тепло зимой и свежесть летом.
</p>
</div>
</div>
			'
		),
		array(
			'address' => 'Rolloboules-fibre',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Rolloboules fibre',
			'left_sidebar' => 'production',
			'title' => 'Rolloboules fibre',
			'bottom_sidebar_tkany' => 'address-tkany-tehnologiya',
			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/Rolloboules_fibre.png" alt="Технология Rolloboules fibre">
	<div class="outlast_wrapper_txt">
	<h3>Rolloboules fibre</h3>
    <p>
    Rolloboules фибра. Легкость и эластичность – это главные особенности rolloboules волокна. Волокно распределяется равномерно внутри подушки или наматрасника и имеет жесткую фиксацию внутри. Его специальная структура обеспечивает невероятно мягкий комфорт, аналогичный пуховым подушкам, при этом материал не сбивается в кучу как пух.
</p>
</div>
</div>
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
<h3 class="textCenter" style="margin-bottom:30px;">Наполнители, используемые в итальянских матрасах Magniflex</h3>
<div class="outlast_wrapper">
	<img src="/img/memoform123.png" alt="Memoform Magnifoam">
	<div class="outlast_wrapper_txt">
    <h3>Мемоформ Магниформ</h3>
	<p>
	Memoform — самый «анатомический» из материалов, которые мы используем в производстве, был специально разработан, чтобы реагировать на вес тела и идеально адаптироваться к любому типу телосложения. Memoform создает приятное ощущение легкости во время сна, помогает позвоночнику расслабиться. Мемоформ состоит из открытых ячеек высокой плотности, способствующие прохождению воздуха внутри матраса. Кроме того, уникальная микроклеточная структура этого материала позволяет ему приспосабливаться к давлению, оказываемому организмом, поддерживая его должным образом и обеспечивая расслабляющую поддержку.
Memoform устраняет давление, которое сила тяжести Земли оказывает как на тело, так и на матрас, создавая эффект невесомости между телом человека и матрасом. Этот материал обеспечивает постоянный комфорт, на который не влияют изменения температуры, подстраиваясь под движения, которые происходят во время сна, и, таким образом, гарантирует превосходное качество отдыха в любое время года. Особая способность материала позволяет приспосабливаться к телосложению человека и максимально снижать давление на тело, способствуя идеальной циркуляции крови во время отдыха. Memoform позволяет также избежать раздражающих болей ночью и при пробуждении утром, обеспечивая замечательное ощущение комфорта.
 <span>Узнать больше о <a href="/production/Memoform-Magnifoam/">Memoform Magnifoam</a></span></p>
</div>
</div>
<div class="outlast_wrapper">
	<img src="/img/lastra_bel-air.jpg" alt="Eliosoft">
	<div class="outlast_wrapper_txt">
    <h3>Элиософт</h3>
	<p>
Материал изготавливается из 100% натурального латекса. В процессе обработки латекс приобретает уникальные ортопедические свойства, дополнительную мягкость и прочность. Элиософт (Eliosoft) легко поглощает и испаряет влагу, воздухопроницаемый, экологически чистый долговечный материал, обеспечивающий мягкую, комфортную, естественную поддержку. Обычно используется в сочетании с такими материалами, как Memoform и Elioform, для идеального контроля мягкости и жесткости матраса.
  <span>Узнать больше о <a href="/production/Eliosoft/">Eliosoft</a></span></p>
 </div>
 </div>
 <div class="outlast_wrapper">
	<img src="/img/eliochel123.png" alt="Elioform">
	<div class="outlast_wrapper_txt">
    <h3>Элиочел</h3>
	<p>
Экологически чистый, воздухопроницаемый материал с микропористой структурой - мягкий, упругий, эластичный, легко поглощает и испаряет влагу с тела человека, обладает антисептическим действием.
 <span>Узнать больше о ткани <a href="/production/Eliocel/">Eliocel</a></span></p>
 </div>
 </div>
 <div class="outlast_wrapper">
	<img src="/img/lastra_pigalle.jpg" alt="Memory">
	<div class="outlast_wrapper_txt">
    <h3>Мемори</h3>
	<p>
Материал Memory состоит из большого числа "микроскопических пружинок", способных сжиматься исключительно под действием тепла и веса и распрямляться с задержкой в несколько секунд в отсутствии нагрузки. Благодаря этой особенности, матрас на основе Memory обладает наилучшими ортопедическими и анатомическими свойствами, идеально точно принимая и запоминая форму тела человека, подстраивается под контуры и рельеф, не оказывая ответного давления, равномерно распределяя точечные нагрузки по всей поверхности.
<span>Узнать больше о ткани <a href="/production/Memory/">Memory</a></span></p>
 </div>
 </div>
 <div class="outlast_wrapper">
	<img src="/img/Waterlattex.png" alt="Waterlatex">
	<div class="outlast_wrapper_txt">
    <h3>Вотерлатекс</h3>
	<p>
Экологически чистый, пористый, эргономичный наполнитель Waterlatex изготавливается из натурального латекса, молекул воды и полимеров, путем вспенивания и последующей вулканизации. В результате такой обработки натуральный латекс получает дополнительные уникальные ортопедические и анатомические свойства.
 <span>Узнать больше о ткани <a href="/production/Waterlatex/">Waterlatex</a></span></p>
 </div>
 </div>
 <div class="outlast_wrapper">
	<img src="/img/Magnifoam Breeze Magniflex.png" alt="Waterlatex">
	<div class="outlast_wrapper_txt">
    <h3>Magnifoam Breeze </h3>
	<p>
Magnifoam Breeze - воздухопроницаемая пена, которая обладает высокой устойчивостью и не деформируется с течением времени. Состоит из двух вариантов: - Eliosoft Breeze для мягкой поддержки. - Elioform Breeze для упругой и жесткой поддержки. Magnifoam Breeze обогащен экстрактом эвкалипта, который улучшает ощущение здоровья и свежести. Максимальное удовольствие от качественного сна.
<span>Узнать больше о ткани <a href="/production/magnifoambreeze/">Magnifoam Breeze</a></span></p>
 </div>
 </div>
 <div class="outlast_wrapper">
 <img src="/img/Aquabreeze Magniflex.jpg" alt="Waterlatex">
 <div class="outlast_wrapper_txt">
 <h3>Aquabreeze  </h3>
 <p>
 Aquabreeze - это инновационная пена высокой плотности на водной основе, которая обладает невероятной эластичностью. Это материал самого высокого качества, недавно появившийся на мебельном рынке. Его молекулярная структура с открытыми ячейками позволяет воздуху легко циркулировать для оптимального рассеивания тепла тела, тем самым обеспечивая свежесть сна. Aquabreeze позволяет матрасу оставаться гибким и чрезвычайно удобным, сохраняя свои характеристики на максимально продолжительное время. Технология Magniflex: всегда к вашим услугам.
 <span>Узнать больше о ткани <a href="/production/aquabreeze/">Aquabreeze </a></span></p>
</div>
</div>
<div class="outlast_wrapper">
	<img src="/img/MAGNIFOAM (Elioform Eliosoft).png" alt="Waterlatex">
	<div class="outlast_wrapper_txt">
	<h3>Magnifoam  </h3>
	<p>
	Magnifoam Magniflex является уникальной разработкой фабрики. Пена имеет микропористую структуру высокой плотности. Материал обеспечивает оптимальную поддержку, эластичность и воздухопроницаемость. Благодаря своему различному молекулярному составу, Magnifoam доступен в двух версиях: - Magnifoam Eliosoft, мягкая версия пены, - Magnifoam Elioform, жесткая версия пены, Magnifoam позволяет удовлетворить потребности любого клиента при выборе жесткости матраса, особенно когда речь заходит о качестве сна. Преимущественно является базовым и основным слоем матраса.
	<span>Узнать больше о ткани <a href="/production/magnifoam/">Magnifoam </a></span></p>
	</div>
</div>
	<div class="outlast_wrapper">
		<img src="/img/Magnigel Foam 1.png" alt="Waterlatex">
		<div class="outlast_wrapper_txt">
		<h3>Magnigel Foam   </h3>
		<p>
		Magnigel Foam - это эволюция геля первого поколения, созданного в лабораториях Magniflex после многих лет исследований и специальных испытаний. Это самый дышащий и гибкий материал на рынке. Его высокая плотность делает его необычайно мягким и комфортным, обеспечивая идеальную поддержку всего тела. Magnigel Foam придает матрасу ощущение свежести и мягкости, создавая ощущение сна на облаке. Внутренняя 3D-структура Magnigel Foam была разработана для обеспечения повышенной воздухопроницаемости и стабилизации температуры матрасов и подушек, которые всегда остаются свежими и сухими при контакте с телом, исключая возможное образование бактерий, вызываемое потоотделением. Обширные испытания показали, что Magnigel Foam способна поддерживать стабильную температуру на всем матрасе. Другими словами, требуется больше времени для прогрева и меньше времени для охлаждения, по сравнению с другими пенами, имеющимися на рынке, что снижает шансы на пробуждение ночью из-за внезапного изменения температуры. Уровень воздухопроницаемости Magnigel Foam при тестировании оказался выше по сравнению с традиционными пенами, что означает лучшую циркуляцию воздуха и повышенное ощущение свежести в течение ночи.
		<span>Узнать больше о ткани <a href="/production/magnigelfoam/">Magnigel Foam </a></span></p>
		</div>
	</div>
	<div class="outlast_wrapper">
		<img src="/img/Mallow Foam Magniflex.png" alt="Waterlatex">
		<div class="outlast_wrapper_txt">
		<h3>Mallow Foam  </h3>
		<p>
		Mallow Foam обладает противовоспалительными и по настоящему успокаивающими свойствами за счет использования экстракта мальвы. Magniflex создали материал, который усиливает эффект успокоения нервной системы. Материал с экстрактами мальвы обеспечивает мягкую, комфортную и расслабляющую поддержку. Окончательное определение самого высокого уровня комфорта в ваших руках.
		<span>Узнать больше о ткани <a href="/production/mallowfoam/">Mallow Foam</a></span></p>
		</div>
</div>
<div class="outlast_wrapper">
		<img src="/img/Memoform HD Magniflex.png" alt="Waterlatex">
		<div class="outlast_wrapper_txt">
		<h3>Memoform HD  </h3>
		<p>
		Memoform HD - это инновационная вязкоупругая пена с очень высокой плотностью. Обладает превосходной способностью приспосабливаться к форме тела и обеспечивать оптимальное положение позвоночника. Материал Memoform HD долговечен, и его срок годности практически не ограничен. Обеспечивает комфорт самого высокого уровня, характерный для премиальных товаров, способных удовлетворить пожелания самых требовательных покупателей.
		<span>Узнать больше о ткани <a href="/production/memoformhd/">Memoform HD</a></span></p>
		</div>
</div>
<div class="outlast_wrapper">
		<img src="/img/Memosoft Magniflex.jpg" alt="Waterlatex">
		<div class="outlast_wrapper_txt">
		<h3>Memosoft </h3>
		<p>
		Memosoft - это материал с высокими анатомическими свойствами, обеспечивающий уютный для тела комфорт. Успокаивает и расслабляет тело, добавляя ощущение мягкости на поверхности матраса. В сочетании с материалами Memoform, Eliosoft или Elioform осуществляет еще более деликатную поддержку.
		<span>Узнать больше о ткани <a href="/production/memosoft/">Memosoft</a></span></p>
		</div>
</div>
<div class="outlast_wrapper">
	<img src="/img/Super Soft Fiber.jpg" alt="Waterlatex">
	<div class="outlast_wrapper_txt">
	<h3>Super Soft Fiber </h3>
	<p>
	Материал Super Soft Fiber отличается исключительной мягкостью и воздухопроницаемостью. Его особая структура улучшает самочувствие и повышает ощущение комфорта во время сна. Это волокно гарантирует нежную и обволакивающую поддержку всему телу.
	<span>Узнать больше о ткани <a href="/production/supersoftfiber/">Super Soft Fiber</a></span></p>
	</div>
</div>

		'
		),
		array(
			'address' => 'Memoform-Magnifoam',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Memoform Magnifoam',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<h3>MEMOFORM MAGNIFOAM / МЕМОФОРМ МАГНИФОРМ </h3>
<div class="img_line">
<img src="/img/Memoform Magniflex 1.png" alt="Memoform Magnifoam">
	<img src="/img/Memoform Magniflex 2.png" alt="Memoform Magnifoam">
	<img src="/img/Memoform Magniflex 3.jpg" alt="Memoform Magnifoam">
	</div>
	<div >
    <p>
Один из самых мягких материалов - дарит ни с чем несравнимый комфорт. Благодаря своей инновационной сверхбыстрой способности реагирования на тепло и давление, наполнитель мгновенно принимает форму тела, предоставляя превосходную ортопедическую поддержку всему организму в целом, а в особенности спине. Материал очень быстро возвращает свою оригинальную форму, приспосабливается к движениям человека, способствуя крепкому и здоровому сну. </p>
</div>
<div class="hnb_contvideo">
		<video controls="controls" tabindex="0" style="width:100%;" muted>
		  <source src="/data/video/Memoform video 1.mp4" type="video/mp4;" />
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

		'
		),
		array(
			'address' => 'Eliosoft',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Eliosoft',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/lastra_bel-air.jpg" alt="Eliosoft">
	<div class="outlast_wrapper_txt">
	<h3>Eliosoft / Элиософт </h3>
    <p>
Материал изготавливается из 100% натурального латекса. В процессе обработки латекс приобретает уникальные ортопедические свойства, дополнительную мягкость и прочность. Элиософт (Eliosoft) легко поглощает и испаряет влагу, воздухопроницаемый, экологически чистый долговечный материал, обеспечивающий мягкую, комфортную, естественную поддержку. Обычно используется в сочетании с такими материалами, как Memoform и Elioform, для идеального контроля мягкости и жесткости матраса.</p>
</div>
</div>
		'
		),
		array(
			'address' => 'Eliocel',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Eliocel',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/lastra_bionatureplus.jpg" alt="Elioform">
	<div class="outlast_wrapper_txt">
	<h3>Eliocel / Элиосел </h3>
    <p>
Экологически чистый, воздухопроницаемый материал с микропористой структурой - мягкий, упругий, эластичный, легко поглощает и испаряет влагу с тела человека,  обладает антисептическим действием.</p>
</div>
</div>
'
		),
		array(
			'address' => 'Memory',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Memory',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/lastra_pigalle.jpg" alt="Memory">
	<div class="outlast_wrapper_txt">
    <p>
Материал Memory состоит из большого числа "микроскопических пружинок", способных сжиматься исключительно под действием тепла и веса и распрямляться с задержкой в несколько секунд в отсутствии нагрузки. Благодаря этой особенности, матрас на основе Memory обладает наилучшими ортопедическими и анатомическими свойствами,  идеально точно принимая и запоминая форму тела человека, подстраивается под контуры и рельеф, не оказывая ответного давления, равномерно распределяя точечные нагрузки по всей поверхности.  Только на таком матрасе можно проспать всю ночь ни разу не перевернувшись на другой бок.
</p>
</div>
</div>
		'
		),
		array(
			'address' => 'Waterlatex',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Waterlatex',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/lastra_saintgermain.jpg" alt="Waterlatex">
	<div class="outlast_wrapper_txt">
	<h3>WATERLATEX / ВОТЕРЛАТЕКС </h3>
      <p>
Экологически чистый, пористый, эргономичный наполнитель Waterlatex изготавливается из натурального латекса, молекул воды и полимеров, путем вспенивания и последующей вулканизации. В результате такой обработки натуральный латекс получает дополнительные уникальные ортопедические и анатомические свойства.<br>
(!!!) К сожалению, название "Waterlatex" не запатентовано,  поэтому не защищено Законом об Авторском праве, и некоторые недобросовестные производители используют это слово, давая названия своим наполнителям матрасов. Мы предупреждаем потребителей, ничего общего Waterlatex Magniflex с их материалами не имеет. Остерегайтесь подделок. </p>
</div>
</div>
'
		),
		array(
			'address' => 'magnifoambreeze',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Magnifoam Breeze',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
			<img src="/img/Magnifoam Breeze Magniflex.png" alt="Waterlatex">
			<div class="outlast_wrapper_txt">
			<h3>MAGNIFOAM BREEZE / МАГНИФОРМ БРИЗ</h3>
			<p>
		Magnifoam Breeze - воздухопроницаемая пена, которая обладает высокой устойчивостью и не деформируется с течением времени. Состоит из двух вариантов: - Eliosoft Breeze для мягкой поддержки. - Elioform Breeze для упругой и жесткой поддержки. Magnifoam Breeze обогащен экстрактом эвкалипта, который улучшает ощущение здоровья и свежести. Максимальное удовольствие от качественного сна.
		 </div>
		 </div>
'
		),
		array(
			'address' => 'magnifoam',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Magnifoam',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
			<img src="/img/Magnifoam Breeze Magniflex.png" alt="Waterlatex">
			<div class="outlast_wrapper_txt">
			<h3>MAGNIFOAM / МАГНИФОМ </h3>
			<p>
			Magnifoam Magniflex является уникальной разработкой фабрики. Пена имеет микропористую структуру высокой плотности. Материал обеспечивает оптимальную поддержку, эластичность и воздухопроницаемость. Благодаря своему различному молекулярному составу, Magnifoam доступен в двух версиях: - Magnifoam Eliosoft, мягкая версия пены, - Magnifoam Elioform, жесткая версия пены, Magnifoam позволяет удовлетворить потребности любого клиента при выборе жесткости матраса, особенно когда речь заходит о качестве сна. Преимущественно является базовым и основным слоем матраса.
		 </div>
		 </div>
'
		),
		array(
			'address' => 'mallowfoam',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Mallow Foam',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
			<img src="/img/Magnifoam Breeze Magniflex.png" alt="Waterlatex">
			<div class="outlast_wrapper_txt">
			<h3>MALLOW FOAM / МЕЛОВ ФОМ</h3>
			<p>
			Mallow Foam обладает противовоспалительными и по настоящему успокаивающими свойствами за счет использования экстракта мальвы. Magniflex создали материал, который усиливает эффект успокоения нервной системы. Материал с экстрактами мальвы обеспечивает мягкую, комфортную и расслабляющую поддержку. Окончательное определение самого высокого уровня комфорта в ваших руках.
		 </div>
		 </div>
'
		),
		array(
			'address' => 'memoformhd',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Memoform HD',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
			<img src="/img/Magnifoam Breeze Magniflex.png" alt="Waterlatex">
			<div class="outlast_wrapper_txt">
			<h3>MEMOFORM HD / МЕМОФОРМ ШД</h3>
			<p>
			Memoform HD - это инновационная вязкоупругая пена с очень высокой плотностью. Обладает превосходной способностью приспосабливаться к форме тела и обеспечивать оптимальное положение позвоночника. Материал Memoform HD долговечен, и его срок годности практически не ограничен. Обеспечивает комфорт самого высокого уровня, характерный для премиальных товаров, способных удовлетворить пожелания самых требовательных покупателей.
		 </div>
		 </div>
'
		),
		array(
			'address' => 'memosoft',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Memosoft',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
			<img src="/img/Magnifoam Breeze Magniflex.png" alt="Waterlatex">
			<div class="outlast_wrapper_txt">
			<h3>MEMOSOFT / МЕМОСОФТ</h3>
			<p>
			Memosoft - это материал с высокими анатомическими свойствами, обеспечивающий уютный для тела комфорт. Успокаивает и расслабляет тело, добавляя ощущение мягкости на поверхности матраса. В сочетании с материалами Memoform, Eliosoft или Elioform осуществляет еще более деликатную поддержку.
		 </div>
		 </div>
'
		),
		array(
			'address' => 'supersoftfiber',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Super Soft Fiber',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
			<img src="/img/Magnifoam Breeze Magniflex.png" alt="Waterlatex">
			<div class="outlast_wrapper_txt">
			<h3>SUPER SOFT FIBER / СУПЕР СОФТ ФАЙБЕР</h3>
			<p>
			Материал Super Soft Fiber отличается исключительной мягкостью и воздухопроницаемостью. Его особая структура улучшает самочувствие и повышает ощущение комфорта во время сна. Это волокно гарантирует нежную и обволакивающую поддержку всему телу.
		 </div>
		 </div>
'
		),

		array(

			'address' => 'aquabreeze',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Aquabreeze',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
 <img src="/img/Aquabreeze Magniflex.jpg" alt="Waterlatex">
 <div class="outlast_wrapper_txt">
 <h3>AQUABREEZE / АКВАБРИЗ </h3>
 <p>
 Aquabreeze - это инновационная пена высокой плотности на водной основе, которая обладает невероятной эластичностью. Это материал самого высокого качества, недавно появившийся на мебельном рынке. Его молекулярная структура с открытыми ячейками позволяет воздуху легко циркулировать для оптимального рассеивания тепла тела, тем самым обеспечивая свежесть сна. Aquabreeze позволяет матрасу оставаться гибким и чрезвычайно удобным, сохраняя свои характеристики на максимально продолжительное время. Технология Magniflex: всегда к вашим услугам.

</div>
</div>
'
		),

		array(
			'address' => 'magnigelfoam',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Magnigel Foam ',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
		<img src="/img/Magnigel Foam 2.jpg" alt="Waterlatex">
		<div class="outlast_wrapper_txt">
		<h3>MAGNIGEL FOAM / МАГНИГЕЛЬ ФОМ  </h3>
		<p>
		Magnigel Foam - это эволюция геля первого поколения, созданного в лабораториях Magniflex после многих лет исследований и специальных испытаний. Это самый дышащий и гибкий материал на рынке. Его высокая плотность делает его необычайно мягким и комфортным, обеспечивая идеальную поддержку всего тела. Magnigel Foam придает матрасу ощущение свежести и мягкости, создавая ощущение сна на облаке. Внутренняя 3D-структура Magnigel Foam была разработана для обеспечения повышенной воздухопроницаемости и стабилизации температуры матрасов и подушек, которые всегда остаются свежими и сухими при контакте с телом, исключая возможное образование бактерий, вызываемое потоотделением. Обширные испытания показали, что Magnigel Foam способна поддерживать стабильную температуру на всем матрасе. Другими словами, требуется больше времени для прогрева и меньше времени для охлаждения, по сравнению с другими пенами, имеющимися на рынке, что снижает шансы на пробуждение ночью из-за внезапного изменения температуры. Уровень воздухопроницаемости Magnigel Foam при тестировании оказался выше по сравнению с традиционными пенами, что означает лучшую циркуляцию воздуха и повышенное ощущение свежести в течение ночи.

		</div>
	</div>
'
		),
		array(
			'address' => 'prugini',
			'parent_address' => 'production',
			'parent_name' => 'О продукции',
			'name' => 'Пружины',
			'left_sidebar' => 'production',
			'title' => 'Наполнители итальянских матрасов Magniflex | Магнифлекс',
			'description' => 'Официальная информация о наполнителях матрасов и подушек Magniflex: Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'keywords' => 'Memoform Magnifoam, Eliosoft, Eliocel, Memory, Waterlattex',
			'text' => '
			<div class="outlast_wrapper">
	<img src="/img/lastra_montmartre.jpg" alt="Пружины">
	<div class="outlast_wrapper_txt">
    <p>
Стальные пружины из специального гибкого и очень стойкого сплава, с укрепленной структурой, для защиты от деформации.<br>
В Россию пружинные матрасы Magniflex поставляются исключительно на заказ.
</p>
</div>
</div>
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
    <p>
<b>Наши клиенты предупреждают:</b>
<br /><br />
Попробовав Magniflex, Вы уже вряд ли когда сможете спать на обычных матрасах и подушках. Особенно актуальна проблема в путешествиях. Некоторые даже возят с собой подушку в чемодане...
<br /><br />
<img width="" src="/img/magniflex-merino-children-12.png" height="" alt="Проблемы с продукцией Магнифлекс">
<br /><br />
1 апреля 2015 год.
</p>
		'
		),
		array(
			'address' => 'dostavka',
			'parent_address' => 'pokupatelyam',
			'parent_name' => 'Покупателям',
			'name' => 'Доставка',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Доставка матрасов и подушек Magniflex. Служба доставки',
			'description' => 'Способы и условия доставки товаров Магнифлекс',
			'keywords' => 'доставка magniflex, доставка магнифлекс, служба доставки магнифлекс',
			'text' => '
 <h3>Доставка по Москве и Московской области</h3>
 <br>
 <ul >
    <li><b>Доставка в день заказа</b> возможна только в будние дни, если заказ оформлен и подтвержден в первой половине дня строго до 10:40.</li>
    <li><b>Бесплатная доставка</b>. Осуществляется в будние дни по г. Москве в пределах МКАД с 11:00 – 18:00. <b>Ортопедические решетки и подушки Relaxsan отдельно от матрасов не доставляются</b>.</li>
    <li>+ <b>40 руб./1 км.</b> Тарифицируется дополнительно при доставке за МКАД. Максимальная удаленность до 50 км.</li>
    <li>+ <b>300 руб.</b> В случае заказа клиентом вечерней доставки, после 18:00.</li>
    <li>+ <b>500 руб.</b> В случае заказа клиентом доставки в выходной или праздничный день. При этом заказ должен быть оформлен до 10:40 предшествующего буднего дня.</li>
    <li>+ <b>50 руб. за 1 этаж</b>, в случае подъема продукции вручную, без использования лифта, начиная со 2 этажа.</li>
</ul>
    <p>Доставка осуществляется до дверей квартиры/дома. Распаковка и размещение продукции на спальных местах в обязанности водителей-экспедиторов не входит.</br>
    Доставка к определенному времени в транспортных условиях современной Москвы не осуществляется, возможно указание интервалов времени в качестве пожелания при подтверждении заказа сотрудниками компании, обсуждается индивидуально.
	</p>

 <h3>Доставка по России.</h3>
 <p>		 Доставка продукции со склада компании (г. Москва) до терминала транспортной компании в г. Москва осуществляется БЕСПЛАТНО.<br>
Клиент оплачивает самостоятельно транспортной компании при получении заказа только доставку от терминала транспортной компании до необходимого пункта назначения.<br>
Отгрузка происходит в течение 1-2 дней с даты поступления 100% оплаты на расчетный счет компании.<br>
</p>
<p>Мы доставляем продукцию в любой город любой транспортной компанией по желанию клиента, которая имеет офис/терминал в г. Москва, например:</p>
<p>Гюнсел, Грузовозофф, ДАЙМЭКС, Деливери, Деловые Линии, Доставкин, Желдорэкспедиция, Ин-Тайм, Курьер Сервис, Курьер-Коррект, МТК, Новая Почта, Ночной экспресс, ПЭК, Почта России, РТК-Базис, Реил Континент, Русская почтовая служба, СПСР, Скороход, ТрансЭкспресс, Укрпошта, УралТрансСервис, Эксист, Экспресс-курьер, Экспресс-почта, Энергия, Другой, DHL, EMS Почта России, Express mail, FedEx, Major Express, Pony Express, Starpost, TNT, Автолюкс, Автотрейдинг, Армадилло, Байкал-сервис, БизнесПост, Ваш Час, Гарантпост. Стоимость отправки товара Вы можете уточнить у перевозчиков. Либо позвоните нам — мы обязательно подберем для Вас наилучший вариант по стоимости и времени доставки.</p>
<p>Так как матрасы поставляются в вакуумной упаковке в рулонах, стоимость доставки, по сравнению с обычными матрасами, является невысокой и доступной. Для самостоятельного расчета рекомендуем воспользоваться тарифным калькулятором ТК "ПЭК".</p>
<p>
По всем вопросам, связанным с доставкой, обращайтесь по телефону: <b>+7 (495) 989 11 32</b>. Мы обязательно Вам поможем!</p>
<h3>Внимание!</h3>
<p>При получении заказа внимательно рассмотрите товар, убедитесь в отсутствии видимых механических повреждений, проверьте наличие и правильность заполнения документов (бланки документов). <b>ГЛАВНОЕ! УБЕДИТЕЛЬНАЯ ПРОСЬБА, ПРЕЖДЕ ЧЕМ ВСКРЫТЬ УПАКОВКУ, ПРОВЕРЬТЕ РАЗМЕР МАТРАСА, УКАЗАННЫЙ НА БЛАНКЕ И НА САМОЙ УПАКОВКЕ</b>. Если они не совпадают, срочно свяжитесь со службой клиентской поддержки Magniflex. Также, перед распаковкой матраса, убедитесь, что заказанный Вами размер соответствует Вашему спальному месту, вскрытые из вакуумной упаковки матрасы возврату не подлежат (закон РФ о защите прав потребителей, согласовано с Роспотребнадзором).</p>
<p> Условия возврата, обмена, гарантии и эксплуатации указаны в гарантийном талоне, который прилагается к продукции.</p>
		<div class="hnb_myimgap">
 <img width="605" src="/img/magniflex-car2.jpg" height="364" alt="Служба доставки Magniflex">
		</div>
	</div>
	<div style="clear:both;"></div>
</div>
		'
		),
		array(
			'address' => 'oplata',
			'parent_address' => 'pokupatelyam',
			'parent_name' => 'Покупателям',
			'name' => 'Оплата товаров',
			'left_sidebar' => 'pokupatelyam',
			'title' => 'Оплата заказа в интернет-магазине Магнифлекс',
			'description' => 'Способы оплаты',
			'keywords' => 'оплата товара',
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
 <h3>Способы оплаты товара</h3>
		<p>
			 1. <b>Наличными:</b> курьеру в момент получения заказа.<br />
Оплата наличными доступна покупателям из Москвы и Московской области. Курьер доставит Вам товар и необходимые документы на дом. <br /><br />
			 2. <b>Безналичный платеж:</b> для физических и юридических лиц.<br />
Оплата по выставленному счету. Попросить выставить счет Вы можете в дополнительных пожеланиях к заказу или по телефону +7 (495) 989 11 32 <br /><br />
			 3. <b>Банковской карточкой:</b> в шоу-руме<br />
Оплата карточкой доступна покупателям из Москвы и Московской области. Уже сейчас Вы можете оплатить покупку до доставки в нашем <a href="/o-magniflex/show-room-matrasov/">шоу-руме в г. Москва</a>. <br />
<br/>
<b>Оплата карточкой на сайте или курьеру при получении заказа</b> — способ будет реализован в ближайшее время.<br>
 <br>
		</p>
		<img alt="Оплата матрасов магнифлекс" src="/img/oplata-magniflex.jpg" />
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
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
<h3>Через интернет-магазин</h3>
<p>
Оформить заказ в нашем интернет-магазине очень просто  — Вам потребуется всего три шага:<br/>
1. Выберите нужные товары в каталоге и поместите их в корзину с помощью кнопки "Купить".<br>
2. Проверьте выбранные товары, если все верно - нажмите кнопку "оформить заказ" <br>
3. Внимательно заполните все поля. Обязательно укажите индекс, если Вы не из Москвы. Выберите удобную дату доставки. В поле "дополнительная информация" укажите пожелания по заказу. Для завершения покупки нажмите кнопку "отправить заказ".<br/><br/>
В течение короткого времени на Вашу электронную почту придет письмо с подтверждением заказа, а с Вами по телефону свяжется наш специалист для уточнения деталей.
</p>
<h3>По телефону</h3>
<p>
Вы также можете оформить ваш заказ по телефону. Для этого достаточно позвонить нам. Консультант поможет Вам определиться с выбором, ответит на все вопросы и примет заказ.
<br><br>
</p>
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
<h3>Гарантия  и срок эксплуатации</h3>
<strong>Срок службы ортопедических матрасов и подушек Magniflex</strong>
<p>
	Обычно матрасы покупают сроком на 7-10 лет, но зачастую приходится менять ложе значительно раньше. Появление "ям" на поверхности, неприятные запахи, аллергия и прочие неудобства во время сна, боли в спине - все это очень веские причины, чтобы задуматься о новой покупке. Это верно, но только если речь идет не о матрасах Magniflex. <br>
	</p>
	<p>
Мы гарантируем, что предлагаемые нами ортопедические подушки и матрасы не теряют своих качеств в течение:<br/>
  — 20 лет для элитных матрасов из коллекции Virtus;  <br />
  — 15 лет для элитных матрасов из коллекции Imperiale, Magnificent, Harmony, New Comfort Plus, FreshGel и Rest; <br />
  — 15 лет для матрасов Waterlattex, Orthomemo Merino, Natur Baci, Naturalmente;  <br />
  — 12 лет для матрасов из коллекции Merino на основе наполнителя Eliocel: Merino Green Tea, Merino Bamboo, Merino;<br />
  — 12 лет для подушек на основе наполнителя Memory.
  </p>
  <br />
  <p>
Продукция безопасна к использованию в течение всего срока эксплуатации, поскольку создана из специальных самовентилируемых материалов, проходящих специализированные экологически чистые санитарные обработки, пропитанные особыми компонентами, что обеспечивает превосходный уровень гигиены, создает надежный уровень защиты от плесени, бактерий, моли, пылевых клещей и др.
</p>
<h3>Гарантийный срок</h3>
<p>
Гарантийный срок на все матрасы и подушки «Magniflex» составляет 18 месяцев.
</p>
<h3>Хорошие вещи служат долго</h3>
<p>
Применительно к матрасам и подушкам применимо понятие "стоимость владения". Например, если Вы приобрели матрас за 1500 рублей, а он через год пришел в полную негодность, то цена владения таким матрасом составляет 1500 рублей в год. Если же Вы купили дорогой матрас Magniflex за 21 000 рублей, который гарантировано прослужит Вам не менее 15 лет, то цена его владения всего - 1 400 рублей. Порой, приобретать хорошие, дорогие вещи - даже ВЫГОДНО. <br>
Помните простую истину - "мы не настолько богаты, чтобы покупать дешевые вещи".
</p>
<h3>Не все матрасы скручены</h3>
<p>
Некоторые очень высокие модели матрасов могут поставляться в развернутом виде — редкое исключение из правил.
</p>
<h3>Внимание!</h3>
<p >
  Матрасы поставляются в вакуумной упаковке.  УБЕДИТЕЛЬНАЯ ПРОСЬБА, ПРЕЖДЕ ЧЕМ ВСКРЫТЬ УПАКОВКУ МАТРАСА, ПРОВЕРЬТЕ РАЗМЕР, УКАЗАННЫЙ НА БЛАНКЕ И НА САМОЙ УПАКОВКЕ. Если они не совпадают, срочно свяжитесь со службой клиентской поддержки Magniflex.    <br /> <br />
  Штрих-код или QR-код изделия является внутренним кодом фабрики и не подходит для идентификации какими-либо другими устройствами, кроме фабричных.  </p>
<img alt="magniflex - Гарантия" src="/img/garantiya.jpg">

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

    <p><i>Регулируется Законом Российской Федерации "О защите прав потребителей" (статьи 18, 19, 21, 22, 25, 26) и ГК РФ статьей 497</i>
    <br>
    <br>
    <strong>Возврат и обмен товара НАДЛЕЖАЩЕГО КАЧЕСТВА</strong><br>
    <p>
    Покупатель вправе обменять или возвратить товар (ортопедический матрас, подушку или основание) в том случае, если он не подошел по форме, габаритам, фасону, расцветке или размеру в течение четырнадцати дней, не считая дня его покупки.
    Товар не должен был быть в употреблении, должны быть сохранены его товарный вид, потребительские свойства, пломбы, фабричные ярлыки. Это особенно важно по отношению к товарам в вакуумной упаковке. Если упаковка нарушена (была вскрыта), мы имеем полное право не принимать товар обратно! Поэтому тщательно и очень внимательно всё проверьте, прежде чем вскрыть упаковку матраса.
    </p>
    <p>Если у Вас не сохранились какие-то документы о покупки матраса - позвоните нам. Мы решим эту проблему, так как у каждого матраса имеется индивидуальный уникальный код, по которому можно восстановить все данные.</p>
    <p>При возврате товара надлежащего качество в соответствии со статьей 497 ГК РФ Покупатель должен возместить продавцу расходы, понесенные в связи с совершением действий по исполнению договора (к подобным действиям может относиться в том числе и доставка товара).</p>
<h3>Возврат и обмен товара НЕНАДЛЕЖАЩЕГО КАЧЕСТВА</h3>
    <p>При обнаружении в товаре недостатков, если они не были оговорены продавцом, Покупатель вправе: потребовать замены на товар этой же марки или другой с перерасчетом цены, либо соразмерного уменьшения цены на приобретенный товар, либо отказаться от товара и возвратить уплаченную сумму.</p>
    <p>В случае обнаружения недостатка:<br>
    Направьте претензию на нашу официальную почту: info@magniflex.ru. В претензии изложите суть, опишите брак товара, приложите фотографии (если это матрас, обязательно приложите фотографию стикера на торце матраса, с серийным номером, а также фотографию, демонстрирующую сам брак) и укажите Ваше требование.</p>
    <p>Или позвоните по телефону: +7 (495) 507-22-65.</p>
    <p>Максимальный срок рассмотрения претензии: 7 дней с даты получения претензии.</p>
<h3>Возврат и обмен товара НЕСТАНДАРТНОГО РАЗМЕРА НАДЛЕЖАЩЕГО КАЧЕСТВА</h3>
    <p>В соответствии с пунктом 4 статьи 26 Закона «О защите прав потребителей», Потребитель не вправе отказаться от товара надлежащего качества, имеющего индивидуально-определенные свойства (например, кровати и матрасы нестандартных размеров), если указанный товар может быть использован исключительно приобретающим его потребителем.</p>
<h3>ВАЖНО ЗНАТЬ</h3>
   <p>Матрасы относятся к товарам длительного пользования, на которые не распространяется требование Покупателя о безвозмездном предоставлении на время ремонта или замены аналогичного товара. <br>
    Наличие запаха не считается производственным дефектом: он выветривается за несколько недель. Для ускорения процесса матрас можно пропылесосить.</p>
<h3>Размер матраса и допустимые отклонения</h3>
    <p>Допустимые отклонения в размере матраса составляют 1-2 см от заявленного производителем (ГОСТ 19917-93 и Технические условия). Чтобы узнать необходимый Вам размер матраса: можно провести самостоятельно замер кровати рулеткой, либо уточнить информацию в "Паспорте изделия" Вашей кровати.</p>
<h3>ЧТО ГОВОРИТ ЗАКОН </h3>
<h3>Статья 18. Закон Российской Федерации "О защите прав потребителей" </h3>
    <p><span class="leftpunZak">1.</span>Потребитель в случае обнаружения в товаре недостатков, если они не были оговорены продавцом, по своему выбору вправе:<br>
    - потребовать замены на товар этой же марки (этих же модели и (или) артикула);<br>
    - потребовать замены на такой же товар другой марки (модели, артикула) с соответствующим перерасчетом покупной цены;<br>
    - потребовать соразмерного уменьшения покупной цены;<br>
    - потребовать незамедлительного безвозмездного устранения недостатков товара или возмещения расходов на их исправление потребителем или третьим лицом;<br>
    - отказаться от исполнения договора купли-продажи и потребовать возврата уплаченной за товар суммы.<br>
    По требованию продавца и за его счет потребитель должен возвратить товар с недостатками.<br>
    <span class="leftpunZak">2.</span>Продавец (изготовитель) обязан принять товар ненадлежащего качества у потребителя и в случае необходимости провести проверку качества товара. Потребитель вправе участвовать в проверке качества товара.<br>
    В случае спора о причинах возникновения недостатков товара продавец (изготовитель) обязан провести экспертизу товара за свой счет. Экспертиза товара проводится в сроки, установленные статьями 20, 21 и 22 настоящего Закона для удовлетворения соответствующих требований потребителя. Потребитель вправе присутствовать при проведении экспертизы товара и в случае несогласия с ее результатами оспорить заключение такой экспертизы в судебном порядке.<br>
    Если в результате экспертизы товара установлено, что его недостатки возникли вследствие обстоятельств, за которые не отвечает продавец (изготовитель), потребитель обязан возместить продавцу (изготовителю) расходы на проведение экспертизы, а также связанные с ее проведением расходы на хранение и транспортировку товара.<br>
    <span class="leftpunZak">3.</span>В отношении товара, на который установлен гарантийный срок, продавец (изготовитель) отвечает за недостатки товара, если не докажет, что они возникли после передачи товара потребителю вследствие нарушения потребителем правил использования, хранения или транспортировки товара, действий третьих лиц или непреодолимой силы.
    </p>
<h3>Статья 21. Закон Российской Федерации "О защите прав потребителей"</h3>
    <p><span class="leftpunZak">1.</span>В случае обнаружения потребителем недостатков товара и предъявления требования о его замене продавец (изготовитель) обязан заменить такой товар в течение семи дней со дня предъявления указанного требования потребителем, а при необходимости дополнительной проверки качества такого товара продавцом (изготовителем, уполномоченной организацией или уполномоченным индивидуальным предпринимателем, импортером) - в течение двадцати дней со дня предъявления указанного требования.<br>
    Если у продавца (изготовителя) в момент предъявления требования отсутствует необходимый для замены товар, замена должна быть проведена в течение месяца со дня предъявления такого требования.<br>
    <span class="leftpunZak">2.</span>Товар ненадлежащего качества должен быть заменен на новый товар, то есть на товар, не бывший в употреблении.<br>
    При замене товара гарантийный срок исчисляется заново со дня передачи товара потребителю.
    </p>
<h3>Статья 26.1. Закон Российской Федерации "О защите прав потребителей"</h3>
    <p><span class="leftpunZak">1.</span>Потребитель вправе отказаться от товара в любое время до его передачи<br>
    Потребитель не вправе отказаться от товара надлежащего качества, имеющего индивидуально-определенные свойства, если указанный товар может быть использован исключительно приобретающим его потребителем.
    </p>
<img alt="magniflex - ОБМЕН И ВОЗВРАТ" src="/img/obmen.jpg">
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
			'breadcrumbs_image' => '/img/breadcrumbs_riposook.jpg',
			'text' => '
 <h3>Сколько весит матрас Magniflex?</h3>
 <p> Вес матрасов зависит в первую очередь от размера. Например, двуспальные матрасы  размер 160 х 200 см весят 25-65 кг.</p>
			<br>
 <h3>Какая допустимая максимальная нагрузка на одно спальное место?</h3>
 <p>
			 Допустимая максимальная нагрузка (вес одного человека) при которой матрас сохраняет ортопедические и анатомические свойства, зависит от конкретной модели матрасов. Кроме того, существенное влияние имеет рост человека. <br>
			 У каждой модели матрасов есть свои свойства, например, для линии Magniflex Naturalmente таблица свойств выглядит следующим образом:<br>
			 а для Magniflex Merino (Merinos): <br>
			 Важно помнить, что все двуспальные модели матрасов Magniflex (магнифлекс) оказывают свои ортопедические и анатомические свойства на каждого ИНДИВИДУАЛЬНО, вне зависимости от веса и количества спящих на них людей. <br>
			 </p>
			<br>
 <h3>Почему мне стоит выбрать именно продукцию компании Magniflex?</h3>
 <p>
			 Потому что Magniflex (Магнифлекс) - <br>
			 это высочайшее качество продукции, признанное во всем мире; <br>
			 это продукт, произведенный ИСКЛЮЧИТЕЛЬНО В ИТАЛИИ от наполнителя до нитки;<br>
			 это рекомендации ведущих врачей ортопедов, медицинских центров и институтов, в том числе РОСТЕСТ и Центральный Институт Травматологии и Ортопедии РФ<br>
		</p>
			'
		),
// 		array(
// 			'address' => 'skidki-na-otkrytye-matrasy-magniflex',
// 			'parent_address' => 'pokupatelyam',
// 			'parent_name' => 'Покупателям',
// 			'name' => 'Открытые матрасы',
// 			'left_sidebar' => 'pokupatelyam',
// 			'title' => 'Скидки на открытые матрасы магнифлекс magniflex | Магнифлекс',
// 			'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
// 			'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
// 			'text' => '

// <p>
// Предлагаем к продаже открытые матрасы с СУЩЕСТВЕННОЙ СКИДКОЙ от первоначальной стоимости товара. Мы гарантируем, что данный матрас не потерял ни одного из своих свойств, он качественный, единственное отличие - нарушена герметичность упаковки товара.</p>
// 	<p>Доставка по Москве осуществляется бесплатно.<br /></p>
// 	<p>Для того, чтобы узнать наличие и цену интересующего Вас матраса, позвоните нам по телефону:<br />
// +7 (495) 989 11 32
// </p>
// 			'
// 		),

array(
			'address' => 'skidki-magniflex',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Скидки Magniflex',
			'left_sidebar' => 'skidki-magniflex',
			'title' => 'Скидка 25% на подушку Magniflex при покупке матраса | Магнифлекс',
			'description' => 'Постоянная акция в интернет-магазине Магнифлекс — 25% скидк 25% скидка на подушку при покупке любого матраса',
			'keywords' => 'magniflex акции, магнифлекс скидки',
			'text' => '
				
			<div class="ama_visual one">
					<img src="/img/NUVOLA-rettangolare.jpg" alt="" class="ama_visual_img"/>
					<div class="ama_visual_copy">
						<h1 class="ama_visual_copy_title">Скидки Magniflex</h1>
						<p class="ama_visual_copy_subtitle">Покупайте выгодно!</p>
					</div>
				</div>
			<div class="news2-block">
				<article class="magazine-article-preview_new is-inview">
					<div class="news_block_with">				
						<a href="/skidki-magniflex/likvid-parts/" class="magazine-article-preview__image">
							<div class="absole_news_sk">Sale</div>
							<div class="bac_img_news"></div>							
						</a>
						<div class="magazine-article-preview__desca">
							ЛИКВИДАЦИЯ СКЛАДСКИХ ОСТАТКОВ
						</div>
					</div>					
				</article>

				<article class="magazine-article-preview_new is-inview">
				<div class="news_block_with">				
						<a href="/skidki-magniflex/discounts-25-per/" class="magazine-article-preview__image">
							<div class="absole_news_sk">25%</div>
						<div class="bac_img_news newsbacnum2"></div>
							
						</a>
						<div class="magazine-article-preview__desca">
							25% СКИДКА НА ПОДУШКИ ПРИ ПОКУПКЕ МАТРАСА
						</div>
					</div>
					
				</article>

				<article class="magazine-article-preview_new is-inview">
				<div class="news_block_with">				
						<a href="/skidki-magniflex/sales-freshgel/" class="magazine-article-preview__image">
							<div class="absole_news_sk">30%</div>
						<div class="bac_img_news newsbacnum3"></div>
							
						</a>
						<div class="magazine-article-preview__desca">
							РАСПРОДАЖА МАТРАСОВ И ПОДУШЕК FRESHGEL(-30%)
						</div>
					</div>
							
				</article>

				<article class="magazine-article-preview_new is-inview">
				<div class="news_block_with">				
						<a href="/skidki-magniflex/sales-carezza/" class="magazine-article-preview__image">
							<div class="absole_news_sk">20%</div>
						<div class="bac_img_news newsbacnum4"></div>
							
						</a>
						<div class="magazine-article-preview__desca">
							РАСПРОДАЖА КОЛЛЕКЦИИ CAREZZA – СКИДКА 20%
						</div>
						</div>				
				</article>

				<article class="magazine-article-preview_new is-inview">
				<div class="news_block_with">				
						<a href="/skidki-magniflex/sales-blanket/" class="magazine-article-preview__image">
							<div class="absole_news_sk">15%</div>
						<div class="bac_img_news newsbacnum5"></div>
							
						</a>
						<div class="magazine-article-preview__desca">
							СКИДКА НА ВСЕ ПЛЕДЫ
						</div>
					</div>
				</article>
				<article class="magazine-article-preview_new is-inview">
				<div class="news_block_with">				
						<a href="/skidki-magniflex/sales-open-mattress/" class="magazine-article-preview__image">
							<div class="absole_news_sk">Sale</div>
						<div class="bac_img_news newsbacnum6"></div>
							
						</a>
						<div class="magazine-article-preview__desca">
							РАСПРОДАЖА ОТКРЫТЫХ МАТРАСОВ
						</div>
					</div>				
				</article>			
			</div>
			<style>
				.hnb_contarea{
					max-width:none;
				}
				#breadcrumbs{
					display: none;
				}
				.textPage.hnb_contarea .ama_visual_copy_subtitle {
					padding: 0 10px;
					text-shadow: 0 0 30px #000;
					font-size: 20px;
					color: #fff;
					line-height: 23px;
					margin: 0 auto 20px;
					max-width: 90%;
					text-align: center;
				}
				.left_sidebar{
					display: none;
				}
				.hnb_conttextright{
					opacity: 1;
					margin: 0 auto 80px;
					
					padding: 0;
					max-width:none;
					
				}
				.title_textpage {
				    text-align: center;
					margin-bottom: 30px;
					font-weight: 500;
					font-size: 40px;
					display:none;			
					line-height: 90px;
					letter-spacing: .625em;
					font-family: "DIN Pro Cond";
				}
				.ama_visual{
					height: initial;
					margin-top: 0px; 
					margin-bottom:20px;
				}
				.news2-block{
					max-width: 1200px;
					margin: 0 auto;
				}
				.hnb_conttextright img{
					width:100%;
					padding:0;
				}
				
				@media screen and (max-width: 1500px){
					.hnb_contarea {
						max-width: 1400px;
					}
				}
				@media screen and (max-width: 900px){
					.hnb_conttextright {
						width: 100% !important;
						overflow: hidden;
					}
					.hnb_conttextright img {
						width: 200%;
						padding: 0;
					}
					.ama_visual {
						margin-bottom: 30px;
					}
				}
				@media screen and (max-width: 640px){
					.title_textpage{
						margin-top: 40px;
						letter-spacing: .5em;
						line-height: 50px;
						font-size: 30px;
						margin-bottom: 0;
					}
				}
			</style>
			'
		),


		array(
			'address' => 'likvid-parts',
			'parent_address' => 'skidki-magniflex',
			'parent_name' => 'Скидки',
			'name' => 'Ликвидация складских остатков',
			'left_sidebar' => 'skidki-magniflex',
			'title' => 'Компания Magniflex (Магнифлекс): история, информация, факты',
			'description' => 'Кратко о компании Магнифлекс',
			'keywords' => 'magniflex, магнифлекс, компания магнифлекс',
			'breadcrumbs_image' => '/img/breadcrumbs_aziendaok.jpg',
			'text' => '
			<p>
			
			Акции с 1 октября - 31 октября 2019 года:</p>
			<p>
			
				<a href="/catalog/orthopedic_mattresses/waterlattex/">Ортопедические матрасы Waterlattex. (остались размеры <a href="/catalog/orthopedic_mattresses/waterlattex/?size=80x200">80х200</a>, <a href="/catalog/orthopedic_mattresses/waterlattex/?size=90x190">90х190</a>, <a href="/catalog/orthopedic_mattresses/waterlattex/?size=140x190">140х190</a>, <a href="/catalog/orthopedic_mattresses/waterlattex/?size=200x200">200х200)</a></a><br>
				<span class="red">Скидка 20%!</span> (только из наличия на складе)
				<br><br>
				<a href="/catalog/orthopedic_mattresses/memo-merino/">Ортопедические матрасы Orthomemo merino. (остались размеры <a href="/catalog/orthopedic_mattresses/memo-merino/?size=80x200">80х200</a>, <a href="/catalog/orthopedic_mattresses/memo-merino/?size=90x190">90х190</a>,<a href="/catalog/orthopedic_mattresses/memo-merino/?size=90x200"> 90х200</a>, <a href="/catalog/orthopedic_mattresses/memo-merino/?size=120x200">120х200</a>,<a href="/catalog/orthopedic_mattresses/memo-merino/?size=140x200"> 140х200)</a></a><br>
				<span class="red">Скидка 20%!</span>  (только из наличия на складе)
				<br><br>
				
				
				<a href="/catalog/elitnye-rest/Rest-12/">Ортопедические матрасы Rest 12. (остались размеры <a href="/catalog/elitnye-rest/Rest-12/?size=80x200">80x200</a>,<a href="/catalog/elitnye-rest/Rest-12/?size=200x200">200x200)</a></a><br>
				<span class="red">Скидка 20%!</span>  (только из наличия на складе)
				<br><br>
				
				<a href="/catalog/collectio-Memorie/memorie-9/">Ортопедические матрасы Memorie 9. Все размеры </a><br>
				<span class="red">Скидка 15%!</span>  (только из наличия на складе)
				<br><br>
			
				<a href="/catalog/elitnye-magnificent/Magnificent-12/?size=200x200">Ортопедические матрасы Magnificent 12. (остались только 200x200)</a><br>
				<span class="red">Скидка 20%!</span> (только из наличия на складе)
				<br><br>
			
				<a href="/catalog/detskie-ortopedicheskie-matrasy/B-Bamboo/?size=60x120">Ортопедические матрасы B-bamboo (60х120) </a><br>
				<span class="red">Скидка 20%!</span> (только из наличия на складе)
				<br><br>
				<a href="/catalog/detskie-ortopedicheskie-matrasy/B-Bamboo-Sfoderabile/?size=60x120">Ортопедические матрасы B-bamboo Sfoderabile (60х120) </a><br>
				<span class="red">Скидка 20%!</span> (только из наличия на складе)
				<br><br>
				</p>
			'
		),
		array(
			'address' => 'discounts-25-per',
			'parent_address' => 'skidki-magniflex',
			'parent_name' => 'Скидки',
			'name' => '25% скидка на все подушки Magniflex',
			'left_sidebar' => 'skidki-magniflex',
			'title' => 'Компания Magniflex (Магнифлекс): история, информация, факты',
			'description' => 'Кратко о компании Магнифлекс',
			'keywords' => 'magniflex, магнифлекс, компания магнифлекс',
			'breadcrumbs_image' => '/img/breadcrumbs_aziendaok.jpg',
			'text' => '
			

			<p>
			
			
			В наших официальных интернет-магазине и  <a target="_blank" href="/o-magniflex/show-room-matrasov/">шоу-руме </a> Magniflex действует акция — 25% скидка на любые модели подушек в любом количестве при единовременной покупке вместе с матрасами Magniflex. Скидки не суммируются.
			<br /><br />
			<strong>Экономьте с Пользой – выгодное предложение на комплект матрас + подушки!</strong>
			<br /><br />
			Например:
			</p>
			<!--{pillow_carousel}-->

			<div class="hnb_mypoh2sk" >
			
			<p>
			<i>Для Вашего Удобства, скидка рассчитывается автоматически в корзине покупателя.</i></p>
			</div>
			

			'
		),
		array(
			'address' => 'sales-freshgel',
			'parent_address' => 'skidki-magniflex',
			'parent_name' => 'Скидки',
			'name' => 'Распродажа матрасов и подушек FRESHGEL(-30%)',
			'left_sidebar' => 'skidki-magniflex',
			'title' => 'Компания Magniflex (Магнифлекс): история, информация, факты',
			'description' => 'Кратко о компании Магнифлекс',
			'keywords' => 'magniflex, магнифлекс, компания магнифлекс',
			'breadcrumbs_image' => '/img/breadcrumbs_aziendaok.jpg',
			'text' => '
			
<p>
			Распродажа складских остатков коллекции FRESHGEL (матрасы и подушки), продукция из наличия на складе в г. Москва. Скидки не суммируются, количество ограниченно. Предложение действительно на следующие размеры и модели матрасов и подушек:
			</p>
			<p>
			<b>Ортопедические матрасы FRESHGEL с охлаждающим эффектом</b><br />
			<a href="/catalog/elitnye-FreshGel/FreshGel-9/" title="FreshGel 9">FreshGel 9</a><br/>
			90х200 Цена: 58.700 руб. Цена со скидкой: 41.090 руб. <span class="red">Выгода: 17.610 руб</span>.<br/><br/>
			
			
			<a href="/catalog/elitnye-FreshGel/FreshGel-10/" title="FreshGel 10">FreshGel 10</a><br/>
			80х200 Цена: 66.500 руб. Цена со скидкой: 46.550 руб. <span class="red">Выгода: 19.950 руб.</span><br/>
			<!--90х200 Цена: 74.600 руб. Цена со скидкой: 52.220 руб. <span class="red">Выгода: 22.380 руб.</span><br/><br/> -->
			
			
			
			
			
			</p>
			
			<p>
			<b>Ортопедические подушки коллекции FRESHGEL: с охлаждающим эффектом</b><br />
			<a href="/catalog/gelevye-podushki/FreshGel+Wave/" title="Подушка FreshGel Wave">Подушка FreshGel Wave</a> Цена: 12.200 руб. Цена со скидкой: 8.540 руб. <span class="red">Выгода: 3.660 руб.</span> <br/>
			
			</p>


<div class="ama_skidki_photo">
	<img src="/img/1273742_393128384158873_4576023735318987186_o.jpg" alt="Акция, распродажа ортопедических матрасов и подушек Magniflex">
	<img src="/img/1975199_393129324158779_8322521184206782451_n.jpg" alt="Акция, распродажа ортопедических матрасов и подушек Магнифлекс">
	<img src="/img/10155384_393129687492076_8600362769740970552_n.jpg" alt="Акция, распродажа ортопедических матрасов и подушек Magniflex">
	<img src="/img/10170724_393129710825407_3340425678764820120_n.jpg" alt="Акция, распродажа ортопедических матрасов и подушек Магнифлекс">
	<img src="/img/10246818_393129667492078_825288634812530054_n.jpg" alt="Акция, распродажа ортопедических матрасов и подушек Magniflex">
	<img src="/img/1401663_393128467492198_3121220668932600819_o.jpg" alt="Акция, распродажа ортопедических матрасов и подушек Магнифлекс">
</div>


<div class="hnb_mypoh2sk">



</div>

			

			'
		),
		array(
			'address' => 'sales-blanket',
			'parent_address' => 'skidki-magniflex',
			'parent_name' => 'Скидки',
			'name' => 'Скидка на все пледы',
			'left_sidebar' => 'skidki-magniflex',
			'title' => 'Компания Magniflex (Магнифлекс): история, информация, факты',
			'description' => 'Кратко о компании Магнифлекс',
			'keywords' => 'magniflex, магнифлекс, компания магнифлекс',
			'breadcrumbs_image' => '/img/breadcrumbs_aziendaok.jpg',
			'text' => '
			
	
	<p>
	
	C 1 по 30 октября 2019 года на все итальянские пледы действуют хорошие скидки:<br>
	
	- <span class="red">Скидка 15%</span> на весь ассортимент пледов.<br>
	- <span class="red">Скидка 20%</span> на весь ассортимент пледов при единовременной покупке с матрасом или подушкой Magniflex.<br>
	<i>Для Вашего Удобства, скидка рассчитывается автоматически в корзине покупателя.</i><br>
	<br>
	Экономьте с Пользой!
	<br>
	Например:
	<br>
	
			</p>
	<!--{tracks_carousel}-->
	<p></p><div class="hnb_mypoh2sk">
	
	
	
	
	
	</div>
	
			

			'
		),
		array(
			'address' => 'sales-open-mattress',
			'parent_address' => 'skidki-magniflex',
			'parent_name' => 'Скидки',
			'name' => 'РАСПРОДАЖА ОТКРЫТЫХ МАТРАСОВ',
			'left_sidebar' => 'skidki-magniflex',
			'title' => 'Компания Magniflex (Магнифлекс): история, информация, факты',
			'description' => 'Кратко о компании Магнифлекс',
			'keywords' => 'magniflex, магнифлекс, компания магнифлекс',
			'breadcrumbs_image' => '/img/breadcrumbs_aziendaok.jpg',
			'text' => '
			<!--<p>Мы проводим распродажу открытых новых матрасов (не в рулоне), а также матрасов с экспозиций наших магазинов и шоу-румов. Выгодное предложение и возможность сэкономить на покупке итальянского матраса! В наличии как односпальные, так и двуспальные матрасы. Хорошие скидки и очень выгодные цены! Более подробную информацию по матрасам с экспозиций можно получить по телефону +7 (495) 989 11 32 или по электронной почте info@magniflex.ru</p> -->
	<p>Предлагаем к продаже открытые матрасы с СУЩЕСТВЕННОЙ СКИДКОЙ от первоначальной стоимости товара. Мы гарантируем, что данный матрас не потерял ни одного из своих свойств, он качественный, единственное отличие - нарушена герметичность упаковки товара.</p>
	<p>Доставка по Москве осуществляется бесплатно.<br></p>
	<p> Более подробную информацию по матрасам с экспозиций можно получить по телефону +7 (495) 989 11 32 или по электронной почте <a href="mailto:info@magniflex.ru">info@magniflex.ru</a></p>
			<h3>Открытые матрасы без дефектов на складе: </h3>
			<table >
					<tr>
						<td>№</td>
						<td>Модель</td>
						<td>Размер</td>
						<td>Количество</td>
						<td>Цена</td>
						<td>Цена со скидкой</td>
				</tr>
				<tr>
					<td>1</td>
					<td><a href="/catalog/collectio-Pensiero/pensiero-7/?size=90x200 (не в рулоне, новый)">Pensiero 7</a></td>
					<td>90x200</td>
					<td>1</td>
					<td>34 600 руб</td>
					<td>24.300 руб.</td>
				</tr>
				<tr>
					<td>2</td>
					<td><a href="/catalog/collectio-Pensiero/pensiero-8/?size=200x210 (не в рулоне, новый)">Pensiero 8</a></td>
					<td>200x210</td>
					<td>1</td>
					<td>86 600 руб</td>
					<td>60.700 руб.</td>
				</tr>
				<tr>
					<td>3</td>
					<td><a href="/catalog/collectio-Pensiero/pensiero-12/?size=90x200 (не в рулоне, новый)">Pensiero 12</a></td>
					<td>90x200</td>
					<td>2</td>
					<td>50 500 руб</td>
					<td>35.400 руб.</td>
				</tr>
				<tr>
					<td>4</td>
					<td><a href="/catalog/elitnye-FreshGel/NEW-FreshGel-10/?size=90x200 (не в рулоне, новый)">Freshgel 10</a></td>
					<td>90x200</td>
					<td>4</td>
					<td>74 600 руб</td>
					<td>52.300 руб.</td>
				</tr>
				<tr>
					<td>6</td>
					<td><a href="/catalog/elitnye-rest/Rest-12/?size=90x200 (не в рулоне, новый)">Rest 12</a></td>
					<td>90x200</td>
					<td>1</td>
					<td>58 100 руб</td>
					<td>40.700 руб.</td>
				</tr>
				<tr>
					<td>7</td>
					<td><a href="/catalog/elitnye-comfort-delux/Comfort-Plus-10/?size=90x200 (не в рулоне, новый)">New comfort plus 10</a></td>
					<td>90x200</td>
					<td>1</td>
					<td>63 600 руб</td>
					<td>44.600 руб.</td>
				</tr>
				<tr>
					<td>8</td>
					<td><a href="/catalog/elitnye-Stretching/Stretching-9/?size=90x200 (не в рулоне, новый)">Stretching 9</a></td>
					<td>90x200</td>
					<td>2</td>
					<td>89 200 руб</td>
					<td>62.500 руб.</td>
				</tr>	
				<tr>
					<td>9</td>
					<td><a href="/catalog/mattresses/waterlattex/?size=90x200 (не в рулоне, новые)">Waterlattex</a></td>
					<td>90x200</td>
					<td>1</td>
					<td>32 600 руб</td>
					<td>22.900 руб.</td>
				</tr>	
				<tr>
					<td>10</td>
					<td><a href="/catalog/mattresses/waterlattex/?size=190x205 (не в рулоне, новые)">Waterlattex</a></td>
					<td>190x205</td>
					<td>1</td>
					<td>70 050 руб</td>
					<td>49.100 руб.</td>
				</tr>
				<tr>
					<td>11</td>
					<td><a href="/catalog/mattresses/MERINOS/?size=70x160 (не в рулоне, новые)">Merinos</a></td>
					<td>70x160</td>
					<td>1</td>
					<td>14 100 руб</td>
					<td>9.900 руб.</td>
				</tr>
				<tr>
				<td>12</td>
				<td><a href="/catalog/elitnye-FreshGel/FreshGel-10/?size=90x200">Fresh Gel 10 </a></td>
				<td>90x200</td>
				<td>1</td>
				<td>74 600 руб</td>
				<td>52.300 руб.</td>
			</tr>
			<tr>
				<td>13</td>
				<td><a href="/catalog/elitnye-comfort-delux/Comfort-Plus-12/?size=90x200">New Comfort Plus 12</a></td>
				<td>90x200</td>
				<td>1</td>
				<td>73 700 руб</td>
				<td>51.600 руб.</td>
			</tr>
			<tr>
				<td>14</td>
				<td><a href="/catalog/elitnye-Stretching/Stretching-10/?size=90x200">Stretching 10</a></td>
				<td>90x200</td>
				<td>1</td>
				<td>97 600 руб</td>
				<td>68.400 руб.</td>
			</tr>
			<tr>
				<td>15</td>
				<td><a href="/catalog/mattresses/MERINOS/?size=180x210">Merinos</a></td>
				<td>180x210</td>
				<td>1</td>
				<td>47 100 руб</td>
				<td>33.000 руб.</td>
			</tr>
			<tr>
				<td>16</td>
				<td><a href="/catalog/orthopedic_mattresses/new-naturcomfort/?size=90x200">Naturalmente</a></td>
				<td>90x200</td>
				<td>1</td>
				<td>43 200 руб</td>
				<td>30.300 руб.</td>
			</tr>
			<tr>
				<td>17</td>
				<td><a href="/catalog/collectio-Memorie/memorie-9/?size=90x200">Memorie 9</a></td>
				<td>90x200</td>
				<td>1</td>
				<td>43 900 руб</td>
				<td>30.800 руб.</td>
			</tr>
			<tr>
				<td>18</td>
				<td><a href="/catalog/elitnye-rest/Rest-10/?size=140x200">Rest 10</a></td>
				<td>140x200</td>
				<td>1</td>
				<td>76 600 руб</td>
				<td>53.700 руб.</td>
			</tr>
			</table>
			<br><br>
			<h3>Также проводится  распродажа  матрасов с экспозиции шоу-рума</h3>
			<table>
					<tr>
						<td>№</td>
						<td>Модель</td>
						<td>Размер</td>
						<td>Количество</td>
						<td>Цена</td>
						<td>Цена со скидкой</td>
				</tr>
				
			<tr>
				<td>1</td>
				<td><a href="/catalog/elitnye-rest/Rest-10/?size=90x200">Rest 10</a></td>
				<td>90x200</td>
				<td>1</td>
				<td>76 600 руб</td>
				<td>53.700 руб.</td>
			</tr>
			<tr>
				<td>2</td>
				<td><a href="/catalog/elitnye-magnificent/Magnificent-12/?size=160x200">Magnificent 12</a></td>
				<td>160*200</td>
				<td>1</td>
				<td>192 400 руб</td>
				<td>134.700 руб.</td>
			</tr>
			<tr>
				<td>3</td>
				<td><a href="/catalog/orthopedic_mattresses/memo-merino/?size=90x190">Orthomemo Merino</a></td>
				<td>90x190</td>
				<td>1</td>
				<td>49 700 руб</td>
				<td>34.800 руб.</td>
			</tr>
			<tr>
				<td>4</td>
				<td><a href="/catalog/mattresses/waterlattex/?size=90x200 (не в рулоне, новые)">Waterlattex</a></td>
				<td>90x200</td>
				<td>1</td>
				<td>32 600 руб</td>
				<td>22.900 руб.</td>
			</tr>	
			<tr>
				<td>5</td>
				<td><a href="/catalog/orthopedic_mattresses/new-naturcomfort/?size=90x190">Naturalmente</a></td>
				<td>90x190</td>
				<td>1</td>
				<td>41 100 руб</td>
				<td>28.800 руб.</td>
			</tr> 
			<tr>
				<td>6</td>
				<td><a href="/catalog/elitnye-FreshGel/FreshGel-9/?size=90x190">Fresh Gel 9</a></td>
				<td>90x190</td>
				<td>1</td>
				<td>58 700 руб</td>
				<td>41.100 руб.</td>
			</tr> 
				<tr>
					<td>7</td>
					<td><a href="/catalog/elitnye-rest/Rest-12/?size=90x200 (не в рулоне, новый)">Rest 12</a></td>
					<td>90x200</td>
					<td>1</td>
					<td>58 100 руб</td>
					<td>40.700 руб.</td>
				</tr>
			<tr>
				<td>8</td>
				<td><a href="/catalog/elitnye-rest/Rest-9/?size=90x200">Rest 9</a></td>
				<td>90x200</td>
				<td>1</td>
				<td>44 800 руб</td>
				<td>31.400 руб.</td>
			</tr>
			<tr>
				<td>9</td>
				<td><a href="/catalog/collectio-Memorie/memorie-9/?size=90x200">Memorie 9</a></td>
				<td>90x200</td>
				<td>1</td>
				<td>43 900 руб</td>
				<td>30.800 руб.</td>
			</tr>
			<tr>
				<td>10</td>
				<td><a href="/catalog/elitnye-harmony/Exchange-Memoform-Dual/?size=160x200">Exchange Memoform Dual</a></td>
				<td>160x200</td>
				<td>1</td>
				<td>233 500 руб</td>
				<td>164.500 руб.</td>
			</tr>
			
			</table>
			<div class="hnb_mypoh2sk">
			</div>
			<img width="100%" src="/img/magni-sale-01.jpg" alt="Акция на матрасы" />
			

			'
		),
		array(
			'address' => 'sales-carezza',
			'parent_address' => 'skidki-magniflex',
			'parent_name' => 'Скидки',
			'name' => 'РАСПРОДАЖА КОЛЛЕКЦИИ CAREZZA – СКИДКА 20%',
			'left_sidebar' => 'skidki-magniflex',
			'title' => 'Компания Magniflex (Магнифлекс): история, информация, факты',
			'description' => 'Кратко о компании Магнифлекс',
			'keywords' => 'magniflex, магнифлекс, компания магнифлекс',
			'breadcrumbs_image' => '/img/breadcrumbs_aziendaok.jpg',
			'text' => '
			
			
			
			
			<p>
			Распродажа коллекции матрасов Carezza, продукция в ассортименте уже в наличие на складе в г. Москва. Скидки не суммируются. Предложение действительно на весь размерный ряд, возможен заказ нестандартных размеров под заказ с доставкой из Италии.
			</p>
			<p>
			<a href="/catalog/elitnye-carezza/Carezza-10/" title="Carezza-10">Ортопедические матрасы Сarezza 10. </a>
			</p>
			
			<div class="ama_skidki_photo">
				<img src="/img/product/big/Carezza_10.jpg" alt="Распродажа коллекции матрасов Carezza">
			</div>
			<div class="hnb_mypoh2sk">
			</div>
			
			

			'
		),
		array(
			'address' => 'privacy-policy',
			'parent_address' => '',
			'parent_name' => '',
			'name' => '',
			'left_sidebar' => 'basket',
			'title' => 'Политика конфиденциальности',
			'description' => 'Политика конфиденциальности',
			'keywords' => 'Политика конфиденциальности',
			'breadcrumbs_image' => '/img/breadcrumbs_aziendaok.jpg',
			'text' => '
			
			<div class="policypo"><div id="text_agree" class="text_agree" style="">
			<h3>Политика конфиденциальности</h3>
			<ol>
				<li><p class="pat">Общие положения</p>
					<ol>
						<li>Настоящая Политика в отношении обработки персональных данных (далее — Политика) составлена в соответствии с п. 2 ст. 18.1 Федерального закона № 152-ФЗ от 27 июля 2006 года «О персональных данных» и является основополагающим внутренним регулятивным документом Общества с ограниченной ответственностью «Русмани» (ООО «Русмани»  далее — Организация или Оператор), определяющим ключевые направления его деятельности в области обработки и защиты персональных данных (далее — ПДн), оператором которых является Организация.</li>
						<li>Политика разработана в целях реализации требований законодательства в области обработки и защиты ПДн и направлена на обеспечение защиты прав и свобод человека и гражданина при обработке его ПДн в Организации, в том числе защиты прав на неприкосновенность частной жизни, личной, семейной и врачебной тайн.</li>
						<li>Положения Политики распространяются на отношения по обработке и защите ПДн, полученных Организацией как до, так и после утверждения Политики, за исключением случаев, когда по причинам правового, организационного и иного характера положения Политики не могут быть распространены на отношения по обработке и защите ПДн, полученных до ее утверждения.</li>
						<li><p>Обработка ПДн в Организации осуществляется в связи с выполнением Организацией функций, предусмотренных ее учредительными документами, и определяемых:</p>
							<ul>
								<li>Федеральным законом № 152-ФЗ от 27 июля 2006 года «О персональных данных»;</li>
								<li>Постановлением Правительства Российской Федерации от 15 сентября 2008 года № 687 «Об утверждении Положения об особенностях обработки персональных данных, осуществляемой без использования средств автоматизации»;</li>
								<li>Постановлением Правительства РФ от 1 ноября 2012 года 1119 «Об утверждении требований к защите персональных данных при их обработке в информационных системах персональных данных»;</li>
								<li>иными нормативными правовыми актами Российской Федерации.</li>
							</ul>
						Кроме того, обработка ПДн в Организации осуществляется в ходе трудовых и иных непосредственно связанных с ними отношений, в которых Организация выступает в качестве работодателя (глава 14 Трудового кодекса Российской Федерации), в связи с реализацией Организацией своих прав и обязанностей как юридического лица.</li>
						<li>Организация имеет право вносить изменения в настоящую Политику. При внесении изменений в заголовке Политики указывается дата последнего обновления редакции. Новая редакция Политики вступает в силу с момента ее размещения на сайте, если иное не предусмотрено новой редакцией Политики.</li>
						<li>Действующая редакция хранится в месте нахождения единоличного исполнительного органа (управляющей компании) Организации по адресу: 191119, Санкт-Петербург, ул. Звенигородкая, д. 9-11, литера К, помещение 14Н, ком.144</li>
					</ol>
				</li>
				<li>
					<p class="pat">Термины и принятые сокращения</p>
					<p>Персональные данные (ПДн) — любая информация, относящаяся к прямо или косвенно определенному или определяемому физическому лицу (субъекту персональных данных).</p>
					<p>Обработка персональных данных — любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.</p>
					<p>Оператор — государственный орган, муниципальный орган, юридическое или физическое лицо, самостоятельно или совместно с другими лицами организующие и (или) осуществляющие обработку персональных данных, а также определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.</p>
					<p>Распространение персональных данных — действия, направленные на раскрытие персональных данных неопределенному кругу лиц.</p>
					<p>Предоставление персональных данных — действия, направленные на раскрытие персональных данных определенному лицу или определенному кругу лиц.</p>
					<p>Блокирование персональных данных — временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных).</p>
					<p>Уничтожение персональных данных — действия, в результате которых становится невозможным восстановить содержание персональных данных в информационной системе персональных данных и (или) в результате которых уничтожаются материальные носители персональных данных.</p>
					<p>Обезличивание персональных данных — действия, в результате которых становится невозможным без использования дополнительной информации определить принадлежность персональных данных конкретному субъекту персональных данных.</p>
					<p>Автоматизированная обработка персональных данных — обработка персональных данных с помощью средств вычислительной техники.</p>
					<p>Информационная система персональных данных (ИСПД) — совокупность содержащихся в базах данных персональных данных и обеспечивающих их обработку информационных технологий и технических средств.</p>
				</li>
				<li><p class="pat">Принципы обеспечения безопасности персональных данных</p>
					<ol>
						<li>Основной задачей обеспечения безопасности ПДн при их обработке в Организации является предотвращение несанкционированного доступа к ним третьих лиц, предупреждение преднамеренных программно-технических и иных воздействий с целью хищения ПДн, разрушения (уничтожения) или искажения их в процессе обработки.</li>
						<li><p>Для обеспечения безопасности ПДн Организация руководствуется следующими принципами:</p>
							<ul>
								<li>законность: защита ПДн основывается на положениях нормативных правовых актов и методических документов уполномоченных государственных органов в области обработки и защиты ПДн;</li>
								<li>системность: обработка ПДн в Организации осуществляется с учетом всех взаимосвязанных, взаимодействующих и изменяющихся во времени элементов, условий и факторов, значимых для понимания и решения проблемы обеспечения безопасности ПДн;</li>
								<li>комплексность: защита ПДн строится с использованием функциональных возможностей информационных технологий, реализованных в информационных системах Организации и других имеющихся в Организации систем и средств защиты;</li>
								<li>непрерывность: защита ПДн обеспечивается на всех этапах их обработки и во всех режимах функционирования систем обработки ПДн, в том числе при проведении ремонтных и регламентных работ;</li>
								<li>своевременность: меры, обеспечивающие надлежащий уровень безопасности ПДн, принимаются до начала их обработки;</li>
								<li>преемственность и непрерывность совершенствования: модернизация и наращивание мер и средств защиты ПДн осуществляется на основании результатов анализа практики обработки ПДн в Организации с учетом выявления новых способов и средств реализации угроз безопасности ПДн отечественного и зарубежного опыта в сфере защиты информации;</li>
								<li>персональная ответственность: ответственность за обеспечение безопасности ПДн возлагается на Работников в пределах их обязанностей, связанных с обработкой и защитой ПДн;</li>
								<li>минимизация прав доступа: доступ к ПДн предоставляется Работникам только в объеме, необходимом для выполнения их должностных обязанностей;</li>
								<li>гибкость: обеспечение выполнения функций защиты ПДн при изменении характеристик функционирования информационных систем персональных данных Организации, а также объема и состава обрабатываемых ПДн;</li>
								<li>специализация и профессионализм: реализация мер по обеспечению безопасности ПДн осуществляется Работниками, имеющими необходимые квалификацию и опыт;</li>
								<li>эффективность процедур отбора кадров: кадровая политика Организации предусматривает тщательный подбор персонала и мотивацию Работников, позволяющую исключить или минимизировать возможность нарушения ими безопасности ПДн;</li>
								<li>наблюдаемость и прозрачность: меры по обеспечению безопасности ПДн должны быть спланированы так, чтобы результаты их применения были явно наблюдаемы (прозрачны) и могли быть оценены лицами, осуществляющими контроль;</li>
								<li>непрерывность контроля и оценки: устанавливаются процедуры постоянного контроля использования систем обработки и защиты ПДн, а результаты контроля регулярно анализируются.</li>
							</ul>
						</li>
						<li>В Организации не производится обработка ПДн, несовместимая с целями их сбора. Если иное не предусмотрено федеральным законом, по окончании обработки ПДн в Организации, в том числе при достижении целей их обработки или утраты необходимости в достижении этих целей, обрабатывавшиеся Организацией ПНд уничтожаются или обезличиваются.</li>
						<li>При обработке ПДн обеспечиваются их точность, достаточность, а при необходимости — и актуальность по отношению к целям обработки. Организация принимает необходимые меры по удалению или уточнению неполных или неточных ПДн.</li>
					</ol>
				</li>
				<li class="pat">Обработка персональных данных
					<ol>
						<li>Получение ПДн
							<ol>
								<li>Все ПДм следует получать от самого субъекта. Если ПДм субъекта можно получить только у третьей стороны, то субъект должен быть уведомлен об этом или от него должно быть получено согласие.</li>
								<li>Оператор должен сообщить субъекту о целях, предполагаемых источниках и способах получения ПДн, характере подлежащих получению ПДм. перечне действий с ПДн. сроке, в течение которого действует согласие, и порядке его отзыва, а также о последствиях отказа субъекта дать письменное согласие на их получение.</li>
								<li>Документы, содержащие ПДн, создаются путем:
									<ol class="letter_list">
										<li>копирования оригиналов документов (паспорт, документ об образовании, свидетельство ИНН, пенсионное свидетельство и др.);</li>
										<li>внесения сведений в учетные формы;</li>
										<li>получения оригиналов необходимых документов (трудовая книжка, характеристика и др.).</li>
									</ol>
									Порядок доступа субъекта ПДн к его ПДн, обрабатываемым Организацией, определяется в соответствии с законодательством и внутренними регулятивными документами Организации.
								</li>
							</ol>
						</li>
						<li><p class="pat">Обработка ПДн</p>
							<ol>
								<li>Обработка персональных данных осуществляется:
									<ul>
										<li>с согласия субъекта персональных данных на обработку его персональных данных;</li>
										<li>в случаях, когда обработка персональных данных необходима для осуществления и выполнения возложенных законодательством Российской Федерации функций, полномочий и обязанностей;</li>
										<li>в случаях, когда осуществляется обработка персональных данных, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных либо по его просьбе (далее — персональные данные, сделанные общедоступными субъектом персональных данных).</li>
									</ul>
									<p>Доступ Работников к обрабатываемым ПДн осуществляется в соответствии с их должностными обязанностями и требованиями внутренних регулятивных документов Организации.</p>
									<p>Допущенные к обработке ПДн Работники под роспись знакомятся с документами организации, устанавливающими порядок обработки ПДн, включая документы, устанавливающие права и обязанности конкретных Работников.</p>
									<p>Организацией производится устранение выявленных нарушений законодательства об обработке и защите ПДн.</p>
								</li>
								<li>Цели обработки ПДн:
									<ul>
										<li>юридические действия, осуществляемые ООО «Русмани» от имени и за счет Доверителя, связанные с представлением интересов Доверителя в органах по сертификации, государственных органах, Роспотребнадзоре, санитарно — эпидемиологических службах, а также в иных организациях и учреждениях по вопросу прохождения технических испытаний, исследований и сертификации продукции Доверителя с целью оформления документа нетарифного регулирования (декларации, сертификата соответствия, свидетельства о государственной регистрации, технической документации и др.);</li>
										<li>осуществление трудовых отношений;</li>
										<li>осуществление гражданско-правовых отношений.</li>
									</ul>
								</li>
								<li>Категории субъектов персональных данных<br>
									В Организации обрабатываются ПДн следующих субъектов:
									<ul>
										<li>физические лица, состоящие с ООО «Русмани» в трудовых отношениях;</li>
										<li>физические лица, являющие близкими родственниками сотрудников учреждения;</li>
										<li>физические лица, уволившиеся из ООО «Русмани»;</li>
										<li>физические лица, являющиеся кандидатами на работу в ООО «Русмани»;</li>
										<li>физические лица, состоящие с ООО «Русмани» в гражданско-правовых отношениях;</li>
										<li>физические лица, заинтересованные в услугах ООО «Русмани» и оставившие свою контактную информацию в форме на сайте организации, расположенного по адресу https://www.magniflex.ru/;</li>
									</ul>
								</li>
								<li>ПДн, обрабатываемые Организацией:
									<ul>
										<li>данные, полученные при осуществлении трудовых отношений;</li>
										<li>данные, полученные для осуществления отбора кандидатов на работу в Организацию;</li>
										<li>данные, полученные при осуществлении гражданско-правовых отношений;</li>
										<li>данные, полученные от физических лиц из формы с сайта организации, расположенного по адресу https://www.magniflex.ru/;</li>
									</ul>

									Полный список ПДн представлен в Перечне ПДн, утвержденном Генеральным директором организации в лице управляющей компании ООО «Русмани».
								</li>
								<li>Обработка персональных данных ведется:
									<ul>
										<li>с использованием средств автоматизации;</li>
										<li>без использования средств автоматизации.</li>
									</ul>
								</li>
							</ol>
						</li>
						<li><p>Хранение ПДн</p>
							<ol>
								<li>ПДн субъектов могут быть получены, проходить дальнейшую обработку и передаваться на хранение как на бумажных носителях, так и в электронном виде.</li>
								<li>ПДн, зафиксированные на бумажных носителях, хранятся в запираемых шкафах либо в запираемых помещениях с ограниченным правом доступа (регистратура).</li>
								<li>ПДн субъектов, обрабатываемые с использованием средств автоматизации в разных целях, хранятся в разных папках (вкладках).</li>
								<li>Не допускается хранение и размещение документов, содержащих ПДн, в открытых электронных каталогах (файлообменниках) в ИСПД.</li>
								<li>Хранение ПДн в форме, позволяющей определить субъекта ПДн, осуществляется не дольше, чем этого требуют цели их обработки, и они подлежат уничтожению по достижении целей обработки или в случае утраты необходимости в их достижении.</li>
							</ol>
						</li>
						<li>Уничтожение ПДн
							<ol>
								<li>Уничтожение документов (носителей), содержащих ПДн, производится путем сожжения, дробления (измельчения), химического разложения, превращения в бесформенную массу или порошок. Для уничтожения бумажных документов допускается применение шредера.</li>
								<li>ПДн на электронных носителях уничтожаются путем стирания или форматирования носителя.</li>
								<li>Уничтожение производится комиссией. Факт уничтожения ПДн подтверждается документально актом об уничтожении носителей, подписанным членами комиссии.</li>
								<li>Организация передает ПДн третьим лицам в следующих случаях:
									<ul>
										<li>субъект выразил свое согласие на такие действия;</li>
										<li>передача предусмотрена российским или иным применимым законодательством в рамках установленной законодательством процедуры.</li>
									</ul>
								</li>
								<li><p>Перечень лиц, которым передаются ПДн Третьи лица, которым передаются ПДн:</p>
									<ul>
										<li>Пенсионный фонд РФ для учета (на законных основаниях);</li>
										<li>Налоговые органы РФ (на законных основаниях);</li>
										<li>Фонд социального страхования (на законных основаниях);</li>
										<li>Территориальный фонд обязательного медицинского страхования (на законных основаниях);</li>
										<li>страховые медицинские организации по обязательному и добровольному медицинскому страхованию (на законных основаниях);</li>
										<li>банки для начисления заработной платы (на основании договора);</li>
										<li>судебные и правоохранительные органы в случаях, установленных законодательством;</li>
										<li>бюро кредитных историй (с согласия субъекта);</li>
									</ul>
								</li>
							</ol>
						</li>
					</ol>
				</li>
				<li><p class="pat">Защита персональных данных</p>
					<ol>
						<li>В соответствии с требованиями нормативных документов Организацией создана система защиты персональных данных (СЗПД), состоящая из подсистем правовой, организационной и технической защиты.</li>
						<li>Подсистема правовой защиты представляет собой комплекс правовых, организационно-распорядительных и нормативных документов, обеспечивающих создание, функционирование и совершенствование СЗПД.</li>
						<li>Подсистема организационной защиты включает в себя организацию структуры управления СЗПД, разрешительной системы, защиты информации при работе с сотрудниками, партнерами и сторонними лицами, защиты информации в открытой печати, публикаторской и рекламной деятельности, аналитической работы.</li>
						<li>Подсистема технической защиты включает в себя комплекс технических, программных, программно-аппаратных средств, обеспечивающих защиту ПДн.</li>
						<li>Основными мерами защиты ПДн, используемыми Организацией, являются:
							<ol>
								<li>Назначение лица, ответственного за обработку ПДн, которое осуществляет организацию обработки ПДн, обучение и инструктаж, внутренний контроль за соблюдением учреждением и его работниками требований к защите ПДн;</li>
								<li>Определение актуальных угроз безопасности ПДн при их обработке в ИСПД, и разработка мер и мероприятий по защите ПДн;</li>
								<li>Разработка политики в отношении обработки персональных данных;</li>
								<li>Установление правил доступа к ПДн, обрабатываемым в ИСПД, а также обеспечения регистрации и учета всех действий, совершаемых с ПДн в ИСПД;</li>
								<li>Установление индивидуальных паролей доступа сотрудников в информационную систему в соответствии с их производственными обязанностями;</li>
								<li>Применение прошедших в установленном порядке процедуру оценки соответствия средств защиты информации, учет машинных носителей ПДн, обеспечение их сохранности;</li>
								<li>Сертифицированное антивирусное программное обеспечение с регулярно обновляемыми базами;</li>
								<li>Сертифицированное программное средство защиты информации от несанкционированного доступа;</li>
								<li>Сертифицированные межсетевой экран и средство обнаружения вторжения;</li>
								<li>Соблюдение условий, обеспечивающих сохранность ПДн и исключающие несанкционированный к ним доступ, оценка эффективности принимаемых и реализованных мер по обеспечению безопасности ПДн;</li>
								<li>Установление правил доступа к обрабатываемым ПДн, обеспечение регистрации и учета действий, совершаемых с ПДн, а также обнаружение фактов несанкционированного доступа к персональным данным и принятия мер;</li>
								<li>Восстановление ПДн, модифицированных или уничтоженных вследствие несанкционированного доступа к ним;</li>
								<li>Обучение работников Организации, непосредственно осуществляющих обработку персональных данных, положениям законодательства Российской Федерации о персональных данных, в том числе требованиям к защите персональных данных, документам, определяющим политику Организации в отношении обработки персональных данных, локальным актам по вопросам обработки персональных данных;</li>
								<li>Осуществление внутреннего контроля и аудита.</li>
							</ol>
						</li>
					</ol>
				</li>
				<li><p class="pat">Основные права субъекта ПДн и обязанности Организации</p>
					<ol>
						<li>Основные права субъекта ПДн<br>
							Субъект ПДн имеет право на получение информации, касающейся обработки его персональных данных, в том числе содержащей:
							<ul>
								<li>подтверждение факта обработки персональных данных оператором;</li>
								<li>правовые основания и цели обработки персональных данных;</li>
								<li>цели и применяемые оператором способы обработки персональных данных;</li>
								<li>наименование и место нахождения оператора, сведения о лицах (за исключением работников оператора), которые имеют доступ к персональным данным или которым могут быть раскрыты персональные данные на основании договора с оператором или на основании федерального закона;</li>
								<li>обрабатываемые персональные данные, относящиеся к соответствующему субъекту персональных данных, источник их получения, если иной порядок представления таких данных не предусмотрен федеральным законом;</li>
								<li>сроки обработки персональных данных, в том числе сроки их хранения;</li>
								<li>порядок осуществления субъектом персональных данных прав, предусмотренных Федеральным законом «О персональных данных»;
								информацию об осуществленной или о предполагаемой трансграничной передаче данных;</li>
								<li>наименование или фамилию, имя. отчество и адрес лица, осуществляющего обработку персональных данных по поручению оператора, если обработка поручена или будет поручена такому лицу;</li>
								<li>иные сведения, предусмотренные настоящим Федеральным законом или другими федеральными законами.</li>
							</ul>
							Субъект ПДн вправе требовать от оператора уточнения его персональных данных, их блокирования или уничтожения в случае, если персональные данные являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки, а также принимать предусмотренные законом меры по защите своих прав.
						</li>
						<li>Обязанности Организации<br>
							Организация обязана:
							<ul>
								<li>при сборе ПДн предоставить информацию об обработке его ПДн;</li>
								<li>в случаях если ПДн были получены не от субъекта ПДн уведомить субъекта;</li>
								<li>при отказе в предоставлении ПДн субъекту разъясняются последствия такого отказа;</li>
								<li>опубликовать или иным образом обеспечить неограниченный доступ к документу, определяющему его политику в отношении обработки ПДн, к сведениям о реализуемых требованиях к защите ПДн;</li>
								<li>принимать необходимые правовые, организационные и технические меры или обеспечивать их принятие для защиты ПДн от неправомерного или случайного доступа к ним, уничтожения, изменения, блокирования, копирования, предоставления, распространения ПДн, а также от иных неправомерных действий в отношении ПДн;</li>
								<li>давать ответы на запросы и обращения субъектов ПДн, их представителей и уполномоченного органа по защите прав субъектов ПДн. </li>
							</ul>
						</li>
					</ol>
				</li>
			</ol>
		</div></div>
			
			

			'
		),

		array(
			'address' => 'test-shops',
			'parent_address' => '',
			'parent_name' => '',
			'name' => '',
			'left_sidebar' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
			'text' => '

    <script>
    var google_zoom = 11;
 var google_FirstCenter = 59.943978;
  var google_SecondCenter = 30.338121;
</script>

<script type="text/javascript" src="/template/js/map-google.js"></script>
<script type="text/javascript" src="/template/js/placemark-google.js"></script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>
  <div class="hnb_contarea ama_new_contarea">
<div class="hnb_conttextright">
<h3 class="hnb_mytitlepag">ФИРМЕННЫЙ МАГАЗИН MAGNIFLEX В САНКТ-ПЕТЕРБУРГЕ <br/>
(только в нем ПРЕДСТАВЛЕНА ВСЯ КОЛЛЕКЦИЯ)
</p>
<h4 style="clear: both; ">Официальный салон представительства Magniflex</h4>
  <div style="width: 100%; float: left; max-width: 250px;">
    <a href="/img/magni-sbp-salon.png" style="display: block;" class="boxer relgallery"><img alt="Интерьер: официальный салон Магнифлекс в Санкт-Петербурге, мебельный центр Аквилон" src="/img/magni-sbp-salon.png" style="width: 100%;"></a>
    <a href="/img/magni-sbp-salon_01.png" style="display: block;" class="boxer relgallery"><img alt="Бренд-секция Magniflex: ортопедические подушки" src="/img/magni-sbp-salon_01.png" style="width: 100%;"></a>
    <a href="/img/magni-sbp-salon_02.png" style="display: block;" class="boxer relgallery"><img alt="Бренд-секция Magniflex: ортопедические матрасы" src="/img/magni-sbp-salon_02.png" style="width: 100%;"></a>
  </div>
<p style="max-width: 500px; float: left;    padding-left: 20px;">
ОФИЦИАЛЬНЫЙ САЛОН MAGNIFLEX в МЕБЕЛЬНОМ ЦЕНТРЕ «АКВИЛОН»
  <br /><br />
  <b>Адрес</b>:<br />
  ул. Новолитовская, дом 15В, 3 этаж, секция 105<br />
  Ближайшее метро: м. Лесная<br />
  <br />
  <b>Режим работы</b>:<br />
  Ежедневно, без выходных<br>
  с 10:00 до 20:00<br/><br/>
  <b>Контактные телефоны</b>: <br />
  +7 921 906-79-00 <br>
  +7 (812) 670-84-82<br><br/>
<b>E-mail</b>: spb@magniflex.ru<br><br>
В салоне на Новолитовской
представлен весь ассортимент продукции Magniflex: ортопедические матрасы (в том числе премиальные коллекции) и ортопедические подушки. Вы сможете протестировать и полежать на всех матрасах.
</p>
<h3 class="hnb_mytitlepag" style="clear: both; padding-top: 40px;">ВСЕ МАГАЗИНЫ MAGNIFLEX В САНКТ-ПЕТЕРБУРГЕ
(представлена НЕ ВСЯ КОЛЛЕКЦИЯ)</h3>
<div style="clear: both;"></div>
</div>
<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="store-address-container">
							<div class="store-address">
								<div class="store-address-component store-name"> МЦ "Мебельный Континент", "Элит Мебель", Салон Scavolini</div>
								<div class="store-address-component store-address-component-address">г. Санкт-Петербург, ул. Варшавская, д.3, корпус 1, 4 этаж, секция 433</div>
							</div>
							<div class="expanded-address">
								<div class="store-address-component store-address-component-pone">с 10:00 до 20:00 ежедневно</div>
								<div class="store-address-component store-address-component-pone">8 (812) 337-17-63</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">«Элит-мебель»</div>
									<div class="store-address-component store-address-component-address">г. Санкт-Петербург, ул. Марата, д.61</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Пн - Сб: с 10:00 - 20:00<br>Вс: с 11:00 - 19:00</div>
									<div class="store-address-component store-address-component-pone">8 (812) 314-10-26</div>
								</div>
							</div>
                        </div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Interloft</div>
									<div class="store-address-component store-address-component-address"> г. Санкт-Петербург, ул Кожевенная линия, д.30, 2-й этаж, INTERLOFT. И.П. ВИКЕРАС Я.С.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">+7 (921) 876-20-05<br> 8-800-350-20-27</div>
									<div class="store-address-component store-address-component-exposition">На экспозиции: <br><strong>полноразмерные матрасы:</strong><br>Merinos 90x200<br>Pensiero 7 90x200<br>Rest 10 90x200<br>New Comfort Plus 10 90x200<br><strong>подушки:</strong><br>Superiore Wave<br>
                                    Superiore Standard<br>
                                    Classico Wave<br>
                                    Classico Standard<br>+ образцы матрасов 40*60.</div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
				<div style="clear: both;"></div>
			'
		),
		array(
			'address' => 'compare',
			'parent_address' => '',
			'parent_name' => '',
			'name' => '',
			'left_sidebar' => '',
			'title' => '',
			'description' => '',
			'keywords' => '',
			'text' => '
			<style>
				#breadcrumbs{
					display:none;
				}
				#wrap #content{
					background-color: #144760;
				}
				h1{
					display:none;
				}
				.hnb_catlogsection{
					display:none;

				}
				.hnb_conttextright{
					width:100%;
					max-width: inherit;
					margin:0;
					padding:0;
					background-color: #144760;
				}
				.textPage.hnb_contarea{
					max-width: inherit;
					background-color: #144760;
					width: 100%;
					
				}
				.textPage.hnb_contarea p{
					margin:0;
					padding:0;
					background-color: #144760;
					color: white;
				}

			</style>
			<section class="compare">
    <p class="main_compare">Сравнение товаров</p>
	<p class="subtitle_compare">Сравните детали товаров, чтобы найти тот, который подходит именно вам</p>
	<select class="ama_comparison_size_select">
	<option value="">Выберите для сравнения</option>
	</select>
	<div class="compare_main_block">
	
		<!--{ama-compare-zone}-->			

    </div>
</section>

		

   
			'
		),
		array(
			'address' => 'mapsite',
			'parent_address' => '',
			'parent_name' => '',
			'name' => 'Карта Сайта',
			'left_sidebar' => '',
			'title' => 'Карта Сайта',
			'description' => '',
			'keywords' => '',
			'text' => '
				<!--{ama-mapsite}-->	
			'
		),

	);

?>