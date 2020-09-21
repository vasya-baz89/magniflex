 <?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

	$left_sidebar = array(
		'basket' => '
			<ul class="worlmagniflex left_sidebar">
				<li><a href="/cart/">Корзина</a></li>
				<li><a href="/skidki-magniflex/" target="_blank">Акции</a></li>
				<li><a href="/pokupatelyam/dostavka/#mytitlepag2" target="_blank">Доставка</a></li>
				<li><a href="/pokupatelyam/oplata/" target="_blank">Оплата</a></li>
				<li><a href="/pokupatelyam/obmen-i-vozvrat/" target="_blank">Обмен и Возврат</a></li>
			</ul>
		',
		'o-magniflex' => '
			<div class="sr_sizes2 ama_hide_sidebar">
				<div>
					<ul class="worlmagniflex left_sidebar">
						<li><a href="/o-magniflex/about-magniflex/">О Компании</a></li>
						<li><a href="/o-magniflex/mission/">Важно</a></li>
						<li><a href="/o-magniflex/why-magniflex/">Почему Magniflex</a></li>
						<li><a href="/o-magniflex/company-history/">История Компании</a></li>
						<li><a href="/o-magniflex/magniflex-in-the-world/">Magniflex во всем мире</a></li>
						<li><a href="/o-magniflex/stars-magniflex/">Звезды и Магнифлекс</a></li>
						<li><a href="/o-magniflex/oficialnoe-predstavitelstvo-magniflex/">Единственные в РФ</a></li>
						<li><a href="/o-magniflex/mafniflex-and-rugby/">Magniflex и регби</a></li>
						<li><a href="/o-magniflex/magniflex-daydreamer/" title="На элитных пляжах">На элитных пляжах</a></li>
						<li><a href="/o-magniflex/magniflex-top-hotel/" title="Лучшие отели">Лучшие отели</a></li>
					</ul>
				</div>
			</div>
		',

		'o-magniflex2' => '
			<ul class="worlmagniflex left_sidebar">
				<li><a href="/o-magniflex/company/">О Компании</a></li>
				<li><a href="/o-magniflex/mission/">Важно</a></li>
				<li><a href="/o-magniflex/why-magniflex/">Почему Magniflex</a></li>
				<li><a href="/o-magniflex/company-history/">История Компании</a></li>
				<li><a href="/o-magniflex/magniflex-in-the-world/">Magniflex во всем мире</a></li>
				<li><a href="/o-magniflex/stars-magniflex/">Звезды и Магнифлекс</a></li>
				<li><a href="/o-magniflex/oficialnoe-predstavitelstvo-magniflex/">Единственные в РФ</a></li>
				<li><a href="/o-magniflex/mafniflex-and-rugby/">Magniflex и регби</a></li>
				<li><a href="/o-magniflex/magniflex-daydreamer/">На элитных пляжах</a></li>
			</ul>
		',
		'adresa-magazinov' => '
		<div class="sr_sizes2 ama_hide_sidebar"><div>
			<ul class="worlmagniflex left_sidebar">
			<li><a href="/contacts/show-room-matrasov/">Флагманский шоу-рум</a>
			<li><a href="/o-magniflex/moscow/">Магазины в Москве и области</a>
				<ul class="hnb_mmoskov">
					<li><a href="/contacts/show-room-matrasov/">Полежать на всех матрасах</a></li>
					<li><a href="/o-magniflex/moscow/predstavleniya-kolekcii/">Представлена часть коллекции</a></li>
				</ul>
			</li>
			<li><a href="/o-magniflex/russia/">Магазины в России</a></li>
			<li><a href="/o-magniflex/magniflex-mattresses-world/">Magniflex в других странах</a>
				<ul class="hnb_mworld">
					<li><a href="/shops/countries/kazahstan/">Казахстан</a></li>
					<li><a href="/shops/countries/armenia-belarusia/">Армения, Беларуссия</a></li>
					<!--<li><a href="/shops/countries/chechnya/">Чеченская республика</a></li>-->
					<li><a href="/shops/countries/europa/">Европа</a></li>
					<li><a href="/shops/countries/aziya/">Азия</a></li>
					<li><a href="/shops/countries/amerika/">Америка</a></li>
					<li><a href="/shops/countries/avstraliya/">Австралия</a></li>
				</ul>
			</li>
			</ul>
			</div></div>
		',
		
		'contacts' => '
		<div class="sr_sizes2 ama_hide_sidebar"><div>
			<ul class="worlmagniflex left_sidebar">
				<li><a href="/contacts/online-store/">Интернет-Магазин</a></li>
				<li><a href="/o-magniflex/show-room-matrasov/">Флагманский шоу-рум в Москве</a></li>
			</ul>
			</div></div>
		',
		
		'production' => '
		<div class="sr_sizes2 ama_hide_sidebar">
					<div>
			<ul class="worlmagniflex left_sidebar">
				<li><a href="/production/nastoyashchie-ortopedicheskie-matrasy/"><span class="left_sidebar_underline">Настоящие ортопедические</span></a></li>
				<li><a href="/production/vacuum-packing/"><span class="left_sidebar_underline">Вакуумные матрасы</span><span></span></a></li>
				<li><a href="/production/made-in-Italy/"><span class="left_sidebar_underline">Сделано в Италии</span><span></span></a></li>
				<li><a href="/production/vakuumnaya-upakovka/"><span class="left_sidebar_underline">Вакуумная упаковка</span><span></span></a></li>
				<li><a href="/production/fabric-and-treatments/"><span class="left_sidebar_underline">Ткань чехла матраса</span><span></span></a>
					<ul class="hnb_mworld2">
						<li><a href="/production/outlast/"><span class="left_sidebar_underline">Outlast</span><span></span></a></li>
						<li><a href="/production/Coolmax/"><span class="left_sidebar_underline">Coolmax</span><span></span></a></li>
						<li><a href="/production/Viscose/"><span class="left_sidebar_underline">Viscose</span><span></span></a></li>
						<li><a href="/production/Satin-viscose/"><span class="left_sidebar_underline">Satin viscose</span><span></span></a></li>
						<li><a href="/production/3D-Band/"><span class="left_sidebar_underline">3D Band</span><span></span></a></li>
						<li><a href="/production/Wooden-fiber/"><span class="left_sidebar_underline">Wooden fiber</span><span></span></a></li>
						<li><a href="/production/Bamboo-fiber/"><span class="left_sidebar_underline">Bamboo fiber</span><span></span></a></li>
						<li><a href="/production/Organic-cotton/"><span class="left_sidebar_underline">Organic cotton</span><span></span></a></li>
						<li><a href="/production/Cotton/"><span class="left_sidebar_underline">100 % Cotton</span><span></span></a></li>
						<li><a href="/production/Percale/"><span class="left_sidebar_underline">Percale</span><span></span></a></li>
						<li><a href="/production/Cotton-satin/"><span class="left_sidebar_underline">Cotton-satin</span><span></span></a></li>
						<li><a href="/production/Aloe-vera/"><span class="left_sidebar_underline">Aloe-vera</span><span></span></a></li>
						<li><a href="/production/Merinos/"><span class="left_sidebar_underline">Merinos</span><span></span></a></li>
						<li><a href="/production/Green-tea/"><span class="left_sidebar_underline">Green-tea</span><span></span></a></li>
					</ul>
				</li>
				<li><a href="/production/fabric-and-treatments-vnut/"><span class="left_sidebar_underline">Состав матраса</span><span></span></a>
					<ul class="hnb_mworld3">
						<li><a href="/production/Camelhair-wool/"><span class="left_sidebar_underline">Camelhair wool</span><span></span></a></li>
						<li><a href="/production/Cashemire/"><span class="left_sidebar_underline">Cashemire</span><span></span></a></li>
						<li><a href="/production/Horsehair/"><span class="left_sidebar_underline">Horsehair</span><span></span></a></li>
						<li><a href="/production/Linen/"><span class="left_sidebar_underline">Linen</span><span></span></a></li>
						<li><a href="/production/Material-Merinos/"><span class="left_sidebar_underline">Merinos</span><span></span></a></li>
						<li><a href="/production/Material-Cotton/"><span class="left_sidebar_underline">100% Cotton</span><span></span></a></li>
						<li><a href="/production/Silk/"><span class="left_sidebar_underline">Silk</span><span></span></a></li>
						<li><a href="/production/Rolloboules-fibre/"><span class="left_sidebar_underline">Rolloboules fibre</span><span></span></a></li>
					</ul>
				</li>
				<li><a href="/production/inner-plates/"><span class="left_sidebar_underline">Наполнители</span><span></span></a>
					<ul class="hnb_mworld">
						<li><a href="/production/Memoform-Magnifoam/"><span class="left_sidebar_underline">Memoform Magnifoam</span><span></span></a></li>
						<!--
						<li><a href="/production/Eliosoft/"><span class="left_sidebar_underline">Eliosoft</span><span></span></a></li>
						<li><a href="/production/Eliocel/"><span class="left_sidebar_underline">Eliocel</span><span></span></a></li>
						<li><a href="/production/Memory/"><span class="left_sidebar_underline">Memory</span><span></span></a></li>
						-->
						<li><a href="/production/Waterlatex/"><span class="left_sidebar_underline">Waterlatex</span><span></span></a></li>
						<li><a href="/production/magnifoambreeze/"><span class="left_sidebar_underline">Magnifoam Breeze</span><span></span></a></li>
						<li><a href="/production/aquabreeze/"><span class="left_sidebar_underline">Aquabreeze</span><span></span></a></li>
						<li><a href="/production/magnifoam/"><span class="left_sidebar_underline">Magnifoam</span><span></span></a></li>
						<li><a href="/production/magnigelfoam/"><span class="left_sidebar_underline">Magnigel Foam</span><span></span></a></li>
						<li><a href="/production/mallowfoam/"><span class="left_sidebar_underline">Mallow Foam</span><span></span></a></li>
						<li><a href="/production/memoformhd/"><span class="left_sidebar_underline">Memoform HD</span><span></span></a></li>
						<li><a href="/production/memosoft/"><span class="left_sidebar_underline">Memosoft</span><span></span></a></li>
						<li><a href="/production/supersoftfiber/"><span class="left_sidebar_underline">Super Soft Fiber</span><span></span></a></li>
<!--
						<li><a href="/production/prugini/"><span class="left_sidebar_underline">Пружины</span><span></span></a></li>
-->
					</ul>
				</li>
				<li><a href="/production/problem/"><span class="left_sidebar_underline">Проблемы</span><span></span></a></li>
				<li><a href="/production/sizes-and-prices/"><span class="left_sidebar_underline">Размеры и Цены</span><span></span></a></li>
			</ul>
		</div></div>
		',
		'partneram' => '
		<div class="sr_sizes2 ama_hide_sidebar">
					<div>
			<ul class="worlmagniflex left_sidebar">
				<li class="angle"><a href="/partners/internet_magazinam/" title="Интернет-магазинам">Интернет-магазинам</a></li>
				<li class="angle"><a href="/partners/predlozhenie-dlya-otelej/" title="Гостиницам и отелям">Гостиницам и отелям</a></li>
				<li class="angle"><a href="/partners/sotrudnichestvo_dizajnerami_arkhitektorami/" title="Дизайнерам и архитекторам">Дизайнерам и архитекторам</a></li>
				<li class="angle"><a href="/partners/sotrudnichestve-salonam-i-magazinam/" title="Мебельным салонам и магазинам">Мебельным салонам и магазинам</a></li>
				<li class="angle"><a href="/partners/dileram/" title="Стать дилером">Стать дилером</a></li>
				<li class="angle"><a href="/partners/optovim-pokupatelyam/" title="Оптовым покупателям">Оптовым покупателям</a></li>
				<li class="angle"><a href="/partners/for_partners/" title="Для партнеров">Для партнеров</a></li>
			</ul>
		</div></div>
		',
		'catalog' => '
		<div class="sr_sizes2 ama_hide_sidebar">
					<div>
			<ul class="worlmagniflex left_sidebar">
				<li class="angle"><a href="/catalog/mattresses/" title="Интернет-магазинам">Ортопедические матрасы</a></li>
				<li class="angle"><a href="/catalog/detskie-ortopedicheskie-matrasy/" title="Гостиницам и отелям">Детские матрасы</a></li>
				<li class="angle"><a href="/catalog/mattress-covers/" title="Наматрасники">Наматрасники</a></li>
				<li class="angle"><a href="/catalog/pillows/" title="Дизайнерам и архитекторам">Ортопедические подушки</a></li>
				<li class="angle"><a href="/catalog/beds/" title="Кровати">Кровати</a></li>
				<li class="angle"><a href="/catalog/bases/" title="Мебельным салонам и магазинам">Аксессуары</a></li>
				<li class="angle"><a href="/catalog/plaids/" title="Стать дилером">Пледы</a></li>
			</ul>
		</div></div>
		',

		'pokupatelyam' => '
		<div class="sr_sizes2 ama_hide_sidebar">
					<div>
			<ul class="worlmagniflex left_sidebar">
				<li><a href="/pokupatelyam/oplata/">Оплата</a></li>
				<li><a href="/pokupatelyam/dostavka/">Доставка</a></li>
				<li><a href="/pokupatelyam/kak-oformit-zakaz/">Как оформить заказ</a></li>
				<li><a href="/pokupatelyam/warranty/">Гарантия</a></li>
				<li><a href="/pokupatelyam/obmen-i-vozvrat/">Обмен и Возврат</a></li>
				<li><a href="/pokupatelyam/certificates/">Сертификаты</a>
					<ul class="hnb_mworld">
						<li><a href="/pokupatelyam/certificates/rostest/">РОСТЕСТ</a></li>
						<li><a href="/pokupatelyam/certificates/AJA/">AJA</a></li>
						<li><a href="/pokupatelyam/certificates/UKAS/">UKAS</a></li>
						<li><a href="/pokupatelyam/certificates/ICEA/">ICEA</a></li>
						<li><a href="/pokupatelyam/certificates/CFR/">CFR</a></li>
						<li><a href="/pokupatelyam/certificates/FIRA/">FIRA</a></li>
						<li><a href="/pokupatelyam/certificates/Oeko-Tex/">OEKO-TEX</a></li>
						<li><a href="/pokupatelyam/certificates/LGA/">LGA</a></li>
						<li><a href="/pokupatelyam/certificates/GOTS/">GOTS</a></li>
						<li><a href="/pokupatelyam/certificates/CE/">CE - Европейское соответствие</a></li>
						<li><a href="/pokupatelyam/certificates/medecinskie-isdeliya/">Медицинское изделие</a></li>
						<li><a href="/pokupatelyam/certificates/rekomendaciyi-traort/">ЦНИИ Травматологии и Ортопедиии</a></li>
						<li><a href="/pokupatelyam/certificates/ministerstvo-rf/">Министерство здравоохранения РФ</a></li>
						<li><a href="/pokupatelyam/certificates/sanitar-epilogichskiy/">Санитарно-эпидемологический</a></li>

					</ul>
				</li>
				<!--<li><a href="/pokupatelyam/sizes-and-prices/">Размеры и Цены</a></li>-->

				<li><a href="/pokupatelyam/questions-answers/">Вопросы и Ответы</a></li>
				<li><a href="/pokupatelyam/skidki-na-otkrytye-matrasy-magniflex/">Открытые матрасы</a></li>
				<li><a href="/articles/">Статьи</a></li>
			</ul>
		</div></div>
		',
		'kogda-menyat-podushku' => '
			<ul class="worlmagniflex left_sidebar">
				<li><a href="/pokupatelyam/kogda-menyat-podushku/">Когда нужно менять подушку</a></li>
			</ul>
		',

		'skidki-magniflex' => '
		<div class="sr_sizes2 ama_hide_sidebar">
					<div>
			<ul class="worlmagniflex left_sidebar">	
				<!--<li><a href="/skidki-magniflex/likvid-parts">Ликвидация складских запасов</a></li>-->
				<li><a href="/skidki-magniflex/discounts-namatras-25">25% скидка на наматрасники</a></li>
				<li><a href="/skidki-magniflex/discounts-25-per">25% скидка на подушки</a></li>
				<li><a href="/discounts/discounts-15pr/">15% скидка на матрасы и подушки</a></li>
				<li><a href="/discounts/your-birthday/">Скидка 10% на Ваш День Рождения</a></li>
				<li><a href="/outlet/">Скидки до 30% на уцененные матрасы</a></li>
				<!--<li><a href="/skidki-magniflex/sales-freshgel">Распродажа FRESHGEL</a></li>
				<li><a href="/skidki-magniflex/sales-carezza">Распродажа коллекции CAREZZA</a></li>
				<li><a href="/skidki-magniflex/sales-blanket">Cкидка на пледы!</a></li>
				<li><a href="/skidki-magniflex/sales-open-mattress">Распродажа открытых матрасов</a></li>-->
			</ul>
		</div></div>
		',
		'category' => '
			<div class="hnb_catlist olddd">
		<div class="hnb_kattitle">Каталог</div>
            <table class="category-table">
               <tbody><tr class="hnb_mytr">
               <td>
                  <b><a href="/catalog/mattresses/">Ортопедические матрасы</a></b>
				<ul class="sf_product_list">
				<li><a href="/catalog/orthopedic_mattresses/MERINOS/">Merino (Merinos)</a></li>
				<!--<li><a href="/catalog/orthopedic_mattresses/MERINO-GREEN-TEA/">Merino Green Tea</a></li>-->
				<li><a href="/catalog/orthopedic_mattresses/MERINO-BAMBOO/">Merino Bamboo</a></li>
				<li><a href="/catalog/collectio-Stile/">Stile</a></li>
				<li><a href="/catalog/orthopedic_mattresses/WATERLATTEX/">WaterLattex</a></li>
				<li><a href="/catalog/collectio-Pensiero/">Pensiero</a></li>
				<li><a href="/catalog/orthopedic_mattresses/NEW-NATURCOMFORT/">Naturalmente (New Naturcomfort)</a></li>
				<li><a href="/catalog/collectio-Memorie/">Memorie</a></li>
				<li><a href="/catalog/orthopedic_mattresses/MEMO-MERINO/">Memo Merino</a></li>
				<!--<li><a href="/catalog/new-mattresses/"><i>Удобное сравнение матрасов</i></a></li>-->
				</ul>
               </td>
                  </tr><tr class="hnb_mytr">
               <td>
                  <b><a href="/catalog/elitnye-matrasy/">Элитные матрасы</a></b>
				<ul class="sf_product_list">
				<li><a href="/catalog/elitnye-virtus/Virtus-30/">Virtus 30</a></li><li><a href="/catalog/elitnye-magnificent/Magnificent-12/">Magnificent 12</a></li><li><a href="/catalog/elitnye-imperiale/Imperiale-28/">Imperiale 28</a></li><li><a href="/catalog/elitnye-comfort-delux/Comfort-Plus-10/">New Comfort Plus 10</a></li>
				<li><a href="/catalog/elitnye-comfort-delux/Comfort-Plus-12/">New Comfort Plus 12</a></li>
				<li><a href="/catalog/elitnye-Stretching/Stretching-9/">Stretching 9</a></li>
				<li><a href="/catalog/elitnye-Stretching/Stretching-10/">Stretching 10</a></li>
				<li><a href="/catalog/elitnye-rest/Rest-9/">Rest 9</a></li><li><a href="/catalog/elitnye-rest/Rest-10/">Rest 10</a></li><li><a href="/catalog/elitnye-rest/Rest-12/">Rest 12</a></li><li><a href="/catalog/elitnye-harmony/Exchange-Memoform-Dual/">Exchange Memoform Dual</a></li><li></li><li><a href="/catalog/elitnye-FreshGel/FreshGel-10/">FreshGel  10</a></li><li><a href="/catalog/elitnye-FreshGel/FreshGel-12/">FreshGel 12</a></li>
				</ul>
               </td>
                  </tr><tr class="hnb_mytr">
               <td>
                  <b><a href="/catalog/detskie-ortopedicheskie-matrasy/">Детские матрасы</a></b>

               </td>
                  </tr><tr class="hnb_mytr">
               <td>
                  <b><a href="/catalog/pillows/">Ортопедические подушки</a></b>
				<ul class="sf_product_list">
				<li><a href="/catalog/vacuum-pillows/RELAXSAN/">Подушка Relaxsan</a></li><li><a href="/catalog/Orthopedic_pillows/MEMORY/">Подушка Memory</a></li><li><a href="/catalog/Orthopedic_pillows/ORTHOMASSAGE/">Подушка Orthomassage</a></li><li><a href="/catalog/Orthopedic_pillows/ALOE+VERA/">Подушка Aloe Vera</a></li><li><a href="/catalog/Orthopedic_pillows/COMFORT-PILLOW/">Подушка Comfort Pillow</a></li><li><a href="/catalog/gel-pillows/MemoGel+Standart/">Подушка MemoGel Standard</a></li><li><a href="/catalog/gel-pillows/FreshGel+Wave/">Подушка FreshGel Wave </a></li><li><a href="/catalog/gel-pillows/FreshGel+Standart/">Подушка FreshGel Standard</a></li>
				<li><a href="/catalog/Orthopedic_pillows/memoform_wave_classico/">Memoform Wave Classico</a></li>
				<li><a href="/catalog/Orthopedic_pillows/memoform_standard_classico/">Memoform Standard Classico</a></li>
				<li><a href="/catalog/Orthopedic_pillows/memoform_superiore_comfort/">Memoform Superiore Comfort</a></li>
				<li><a href="/catalog/Orthopedic_pillows/memoform_superiore_deluxe_wave/">Memoform Superiore Deluxe Wave</a></li>
				<li><a href="/catalog/Orthopedic_pillows/memoform-superiore-deluxe-orthomassage/">Memoform Superiore Deluxe Orthomassage</a></li>
				<li><a href="/catalog/Orthopedic_pillows/memoform-superiore-deluxe-standard/">Memoform Superiore Deluxe Standard</a></li>
				<li><a href="/catalog/Orthopedic_pillows/virtuoso-mallow-standard/">Virtuoso Mallow Standard</a></li>
				</ul>
               </td>
                  </tr><tr class="hnb_mytr">
               <td>
                  <b><a href="/catalog/bases/">Аксессуары</a></b>
				<ul class="sf_product_list">
				<li><a href="/catalog/ortopedicheskie-reshetky/ortopedicheskoe-osnovanie-komfort/">Ортопедическое основание КОМФОРТ</a></li>
				<!--<li><a href="/catalog/ortopedicheskie-reshetky/ortopedicheskoe-osnovanie-komfort-plus/">Ортопедическое основание КОМФОРТ плюс</a></li> -->
				<li><a href="/catalog/ortopedicheskie-reshetky/ortopedicheskoe-osnovanie-komfort-razbornoe/">Ортопедическое основание КОМФОРТ (разборные)</a></li>
				<li><a href="/catalog/ortopedicheskie-reshetky/ortopedicheskoe-osnovanie-lux/">Ортопедическое основание ЛЮКС</a></li>
				</ul>
               </td>
                  </tr><tr class="hnb_mytr">

                  <td>&nbsp;</td>
               </tr>
            </tbody></table> 		</div>
		',
		'category_new_matras' => '

										<div class="hnb_catlist trick" style="display: none;">
										<div id="show_all" style="cursor: pointer;" class="hnb_kattitle">Все матрасы</div>
														<table class="category-table">
															<tbody>
												<tr class="hnb_mytr"> <!-- Ortho -->
															<td>
													<div class="menu_children_container new_product_list1">
														<div id="naideno"></div>
														<div>
														<div class="children_block info">
																<span class="titlemenu_filt pointer-fix"><b>Классические колекции</b></span>
																<ul class="new_product_list">
																	<li><input type="checkbox" class="matras-filtr" id="MERINOS"> <a id="MERINOS" href="javascript:void(0);"> <div class="animashka-a"></div> Merino (Merinos)</a>  </li>
																	<li><input type="checkbox" class="matras-filtr" id="MERINO-BAMBOO"><a id="MERINO-BAMBOO" href="javascript:void(0);"> <div class="animashka-a"></div> Merino Bamboo</a>  </li>
																	<li><input type="checkbox" class="matras-filtr" id="collectio-Stile"><a id="collectio-Stile" href="javascript:void(0);"> <div class="animashka-a"></div> Stile</a>  </li>
																	<li><input type="checkbox" class="matras-filtr" id="WATERLATTEX"> <a id="WATERLATTEX" href="javascript:void(0);"> <div class="animashka-a"></div> WaterLattex</a> </li>
																	<li><input type="checkbox" class="matras-filtr" id="collectio-Pensiero"><a id="collectio-Pensiero" href="javascript:void(0);"> <div class="animashka-a"></div> Pensiero</a>  </li>
																	<li><input type="checkbox" class="matras-filtr" id="NEW-NATURCOMFORT"><a id="NEW-NATURCOMFORT" href="javascript:void(0);"> <div class="animashka-a"></div> Naturalmente (New Naturcomfort)</a>  </li>
																	<li><input type="checkbox" class="matras-filtr" id="collectio-Memorie"><a id="collectio-Memorie" href="javascript:void(0);"> <div class="animashka-a"></div> Memorie</a>  </li>
																	<li><input type="checkbox" class="matras-filtr" id="MEMO-MERINO"><a id="MEMO-MERINO" href="javascript:void(0);"> <div class="animashka-a"></div> Memo Merino</a>  </li>
																	<li><input type="checkbox" class="matras-filtr" id="Topper-Best-Top"><a id="Topper-Best-Top" href="javascript:void(0);"> <div class="animashka-a"></div> тонкий матрас Topper Best Top</a>  </li>
																</ul>
														</div>
														<div class="children_block info" id="children_block_nope">
																<span class="titlemenu_filt pointer-fix"><b>Премиальные колекции</b></span>
																<ul class="new_product_list">
																	<li><input type="checkbox" class="matras-filtr" id="elitnye-rest"><a id="elitnye-rest" href="javascript:void(0);"> <div class="animashka-a"></div> Rest</a></li>
																	<li><input type="checkbox" class="matras-filtr" id="elitnye-FreshGel"><a id="elitnye-FreshGel" href="javascript:void(0);"> <div class="animashka-a"></div> FreshGel</a></li>
																	<li><input type="checkbox" class="matras-filtr" id="elitnye-comfort-delux"><a id="elitnye-comfort-delux" href="javascript:void(0);"> <div class="animashka-a"></div> New Comfort Plus</a></li>
																	<li><input type="checkbox" class="matras-filtr" id="elitnye-Stretching"><a id="elitnye-Stretching" href="javascript:void(0);"> <div class="animashka-a"></div> Stretching</a></li>
																	<!--<li><input type="checkbox" class="matras-filtr" id="elitnye-imperiale"><a id="elitnye-imperiale" href="javascript:void(0);"> <div class="animashka-a"></div> Imperiale</a></li>-->
																	<li><input type="checkbox" class="matras-filtr" id="elitnye-magnificent"><a id="elitnye-magnificent" href="javascript:void(0);"> <div class="animashka-a"></div> Magnificent</a></li>
																	<li><input type="checkbox" class="matras-filtr" id="elitnye-harmony"><a id="elitnye-harmony" href="javascript:void(0);"> <div class="animashka-a"></div> Exchange Memoform dual</a></li>
																	<li><input type="checkbox" class="matras-filtr" id="elitnye-virtus"><a id="elitnye-virtus" href="javascript:void(0);"> <div class="animashka-a"></div> Virtus</a></li>
																</ul>
														</div>
														<div class="children_block filternew">
															<span class="titlemenu_filt pointer-fix"><b>Вы ищете:</b></span>
															<ul class="new_product_list">
																<li><input type="checkbox" class="matras-filtr" id="orthopedic_mattresses"><a id="orthopedic_mattresses" href="javascript:void(0);"> <div class="animashka-a"></div> ортопедические матрасы</a></li>
																<li><input type="checkbox" class="matras-filtr" id="zhestkie-mattresses"><a id="zhestkie-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div> жесткие матрасы</a></li>
																<li><input type="checkbox" class="matras-filtr" id="srednie-mattresses"><a id="srednie-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div> матрасы средней жесткости</a></li>
																<li><input type="checkbox" class="matras-filtr" id="myahkie-mattresses"><a id="myahkie-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div> мягкие матрасы</a></li>
																<li><input type="checkbox" class="matras-filtr" id="reguliruemie-mattresses"><a id="reguliruemie-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div>Dual - c регулируемой жесткостью</a></li>
																<li><input type="checkbox" class="matras-filtr" id="elitnye-matrasy"><a id="elitnye-matrasy" href="javascript:void(0);"> <div class="animashka-a"></div> элитные матрасы</a></li>
																<li><input type="checkbox" class="matras-filtr" id="s-effektom-pamjati-mattresses"><a id="s-effektom-pamjati-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div> матрасы с эффектом памяти</a></li>
																<li><input type="checkbox" class="matras-filtr" id="vacuum-mattresses"><a id="vacuum-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div> вакуумные матрасы</a></li>
																<li><input type="checkbox" class="matras-filtr" id="divannie-mattresses"><a id="divannie-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div> матрас для дивана</a></li>
															</ul>
																		<br>
															<span class="titlemenu_filt higher pointer-fix"><b>Материалы:</b></span>
															<ul class="new_product_list">
																<li><b>Чехол:</b></li>
																<li> <input type="checkbox" class="matras-filtr" id="chehol-coolmax-mattresses"> <a id="chehol-coolmax-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div> coolmax</a> </li>
																<li><input type="checkbox" class="matras-filtr" id="chehol-viscose-mattresses"><a id="chehol-viscose-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div>viscose</a></li>
																<li><input type="checkbox" class="matras-filtr" id="chehol-outlast-mattresses"> <a id="chehol-outlast-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div> outlast</a></li>
																<li><input type="checkbox" class="matras-filtr" id="chehol-satin-mattresses"> <a id="chehol-satin-mattresses" href="javascript:void(0);">  <div class="animashka-a"></div> satin</a></li>
																<li><b>Основа:</b></li>
																<li><input type="checkbox" class="matras-filtr" id="material-memoform-mattresses"><a id="material-memoform-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div> memoform</a></li>
																<li><input type="checkbox" class="matras-filtr" id="material-geomemory-mattresses"><a id="material-geomemory-mattresses" href="javascript:void(0);">  <div class="animashka-a"></div> geomemory</a></li>
																<li><input type="checkbox" class="matras-filtr" id="material-memogel-mattresses"> <a id="material-memogel-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div> memogel</a></li>
																<li><input type="checkbox" class="matras-filtr" id="material-mallowfoam-mattresses"> <a id="material-mallowfoam-mattresses" href="javascript:void(0);"> <div class="animashka-a"></div> mallowfoam</a></li>
															</ul>
														</div>
														<div class="clear"></div>
													</div>
													</div>
															</td>
													</tr>
																	<tr class="hnb_mytr">

																	<td>&nbsp;</td>
															</tr>
														</tbody></table> 		</div>
		',

		'category_children_matras' => '
		<div class="hnb_catlist trick">
		<div id="show_all" style="cursor: pointer;" class="hnb_kattitle">Все матрасы</div>
            <table class="category-table">
               <tbody>
         <tr class="hnb_mytr"> <!-- Ortho -->
               <td>
					<div class="menu_children_container new_product_list1">
						<div id="naideno"></div>
					  <div>
						<div class="children_block info">
								<span class="titlemenu_filt pointer-fix"><b>Детские матрасы</b></span>
								<ul class="new_product_list">
									<li><input type="checkbox" class="matras-filtr" id="children-merino"> <a id="children-merino" href="javascript:void(0);"> <div class="animashka-a"></div> Merino (Merinos)</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="children-bambo"><a id="children-bambo" href="javascript:void(0);"> <div class="animashka-a"></div> B-Bamboo</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="children-sfo"><a id="children-sfo" href="javascript:void(0);"> <div class="animashka-a"></div> B-Bamboo Sfoderabile</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="children-pens"><a id="children-pens" href="javascript:void(0);"> <div class="animashka-a"></div> Pensiero 6</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="children-stile6"><a id="children-stile6" href="javascript:void(0);"> <div class="animashka-a"></div> Stile 6</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="children-stile7"><a id="children-stile7" href="javascript:void(0);"> <div class="animashka-a"></div> Stile 7</a>  </li>
								</ul>
						</div>
						<div class="children_block info" id="children_block_nope">
								<span class="titlemenu_filt pointer-fix"><b>Вы ищете</b></span>
								<ul class="new_product_list">
									<li><input type="checkbox" class="matras-filtr" id="razmer1"><a id="razmer1" href="javascript:void(0);"> <div class="animashka-a"></div> детские матрасы 60x120</a></li>
									<li><input type="checkbox" class="matras-filtr" id="razmer2"><a id="razmer2" href="javascript:void(0);"> <div class="animashka-a"></div> детские матрасы 65x125</a></li>
									<li><input type="checkbox" class="matras-filtr" id="razmer3"><a id="razmer3" href="javascript:void(0);"> <div class="animashka-a"></div> детские матрасы 70x140</a></li>
									<li><input type="checkbox" class="matras-filtr" id="razmer4"><a id="razmer4" href="javascript:void(0);"> <div class="animashka-a"></div> матрас для подростка 70x160</a></li>
									<li><input type="checkbox" class="matras-filtr" id="razmer5"><a id="razmer5" href="javascript:void(0);"> <div class="animashka-a"></div> матрас для подростка 80x160</a></li>

								</ul>
						</div>
						<div class="clear"></div>
					</div>
				  </div>
               </td>
          </tr>
                  <tr class="hnb_mytr">

                  <td>&nbsp;</td>
               </tr>
            </tbody></table> 		</div>
		',

		'category_new_akses' => '
		<div class="hnb_catlist trick">
		<div id="show_all" style="cursor: pointer;" class="hnb_kattitle">Все аксессуары</div>
            <table class="category-table">
               <tbody>
         <tr class="hnb_mytr"> <!-- Ortho -->
               <td>
					<div class="menu_children_container new_product_list1">
						<div id="naideno"></div>
					  <div>
						<div class="children_block info">
								<span class="titlemenu_filt pointer-fix"><b>Основания</b></span>
								<ul class="new_product_list">
									<li><input type="checkbox" class="matras-filtr" id="comfort_new"> <a id="comfort_new" href="javascript:void(0);"> <div class="animashka-a"></div>Комфорт</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="comfort_new_razb"><a id="comfort_new_razb" href="javascript:void(0);"> <div class="animashka-a"></div>Комфорт (разборное)</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="lux_new"><a id="lux_new" href="javascript:void(0);"> <div class="animashka-a"></div>Люкс</a>  </li>
								</ul>
						</div>
						<div class="children_block info" id="ama_beds">
								<span class="titlemenu_filt pointer-fix"><b>Кровати</b></span>
								<ul class="new_product_list">
									<li><input type="checkbox" class="matras-filtr" id="beds_new"><a id="beds_new" href="javascript:void(0);"> <div class="animashka-a"></div>Кровати</a></li>
								</ul>
						</div>
						<div class="children_block info" id="tight_beds">
						<span class="titlemenu_filt pointer-fix"><b>Тонкие матрасы</b></span>
						<ul class="new_product_list">
							<li><input type="checkbox" class="matras-filtr" id="topper_new"><a id="topper_new" href="javascript:void(0);"> <div class="animashka-a"></div>Топпер</a></li>
							<li><input type="checkbox" class="matras-filtr" id="for_sofa_new"><a id="for_sofa_new" href="javascript:void(0);"> <div class="animashka-a"></div>Ортопедический тонкий матрас для дивана</a></li>
							<li><input type="checkbox" class="matras-filtr" id="tight_new"><a id="tight_new" href="javascript:void(0);"> <div class="animashka-a"></div>Тонкий матрас - повышение уровня комфорта любого матраса</a></li>
						</ul>
				</div>
						<div class="clear"></div>
					</div>
				  </div>
               </td>
          </tr>
                  <tr class="hnb_mytr">
                  <td>&nbsp;</td>
               </tr>
            </tbody></table> 		</div>
		',


		'category_new_tracks' => '
		<div class="hnb_catlist trick1">
		<div id="show_all1" style="cursor: pointer;" class="hnb_kattitle">Все пледы</div>
            <table class="category-table">
               <tbody>
         <tr class="hnb_mytr"> <!-- Ortho -->
               <td>
					<div class="menu_children_container new_product_list1">
						<div id="naideno"></div>
					  <div>
					  <div class="children_block info">
					  <span class="titlemenu_filt pointer-fix"><b>Название</b></span>
					  <ul class="new_product_list">
						  <li><input type="checkbox" class="matras-filtr" id="asmana_new"> <a id="asmana_new" href="javascript:void(0);"> <div class="animashka-a"></div>ASMANA 400 3</a>  </li>
						  <li><input type="checkbox" class="matras-filtr" id="sorrento1_new"><a id="sorrento1_new" href="javascript:void(0);"> <div class="animashka-a"></div>SORRENTO 1</a>  </li>
						  <li><input type="checkbox" class="matras-filtr" id="sorrento2_new"><a id="sorrento2_new" href="javascript:void(0);"> <div class="animashka-a"></div>SORRENTO 2</a>  </li>
						  <li><input type="checkbox" class="matras-filtr" id="lucca1_new"> <a id="lucca1_new" href="javascript:void(0);"> <div class="animashka-a"></div>LUCCA 1</a>  </li>
						  <li><input type="checkbox" class="matras-filtr" id="lucca3_new"><a id="lucca3_new" href="javascript:void(0);"> <div class="animashka-a"></div>LUCCA 3</a>  </li>
						  <li><input type="checkbox" class="matras-filtr" id="lara1_new"><a id="lara1_new" href="javascript:void(0);"> <div class="animashka-a"></div>LARA 1</a>  </li>
					  </ul>
			  </div>
						<div class="clear"></div>
					</div>
				  </div>
               </td>
          </tr>
                  <tr class="hnb_mytr">

                  <td>&nbsp;</td>
               </tr>
            </tbody></table> 		</div>
		',

		'category_new_podushk' => '
		<div class="hnb_catlist trick1">
		<div id="show_all1" style="cursor: pointer;" class="hnb_kattitle">Все подушки</div>
            <table class="category-table">
               <tbody>
         <tr class="hnb_mytr"> <!-- Ortho -->
               <td>
					<div class="menu_children_container new_product_list1">
						<div id="naideno"></div>
					  <div>
						<div class="children_block info">
								<span class="titlemenu_filt pointer-fix"><b>Коллекции</b></span>
								<ul class="new_product_list">
									<li><input type="checkbox" class="matras-filtr" id="MERINOS"> <a id="Collectio_relaxsan" href="javascript:void(0);"> <div class="animashka-a"></div> Relaxsan</a>  </li>
									<!--<li><input type="checkbox" class="matras-filtr" id="MERINO-BAMBOO"><a id="Collectio_coolmax" href="javascript:void(0);"> <div class="animashka-a"></div> Coolmax</a>  </li>-->
									<li><input type="checkbox" class="matras-filtr" id="collectio-Stile"><a id="Collectio_classico" href="javascript:void(0);"> <div class="animashka-a"></div> Classico</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="WATERLATTEX"> <a id="Collectio_freshgel" href="javascript:void(0);"> <div class="animashka-a"></div> Freshgel</a> </li>
									<li><input type="checkbox" class="matras-filtr" id="collectio-Pensiero"><a id="Collectio_superiore" href="javascript:void(0);"> <div class="animashka-a"></div> Superiore</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="NEW-NATURCOMFORT"><a id="Collectio_virtuoso" href="javascript:void(0);"> <div class="animashka-a"></div> Virtuoso</a> </li>
								</ul>
						</div>
						<div class="children_block info" id="children_block_nope">
								<span class="titlemenu_filt pointer-fix"><b>Премиальные колекции</b></span>
								<ul class="new_product_list">
									<li><input type="checkbox" class="matras-filtr" id="elitnye-rest"><a id="Orthopedic_pillows" href="javascript:void(0);"> <div class="animashka-a"></div> ортопедические подушки</a></li>
									<li><input type="checkbox" class="matras-filtr" id="elitnye-FreshGel"><a id="gel-pillows" href="javascript:void(0);"> <div class="animashka-a"></div> гелевые подушки</a></li>
									<li><input type="checkbox" class="matras-filtr" id="elitnye-comfort-delux"><a id="vacuum-pillows" href="javascript:void(0);"> <div class="animashka-a"></div> вакуумные подушки</a></li>
									<li><input type="checkbox" class="matras-filtr" id="elitnye-Stretching"><a id="memory-foam-pillows" href="javascript:void(0);"> <div class="animashka-a"></div> подушки с эффектом памяти</a></li>
									<li><input type="checkbox" class="matras-filtr" id="elitnye-imperiale"><a id="s-masagnim-effektom" href="javascript:void(0);"> <div class="animashka-a"></div> подушки с массажным эффектом</a></li>
									<li><input type="checkbox" class="matras-filtr" id="elitnye-magnificent"><a id="pillows-with-cooling-effect" href="javascript:void(0);"> <div class="animashka-a"></div> подушки с охлаждающим эффектом</a></li>
								</ul>
						</div>
						<div class="children_block filternew">
							<span class="titlemenu_filt higher pointer-fix"><b>Материалы:</b></span>
							<ul class="new_product_list">
								<li><b>Чехол:</b></li>
								<li> <input type="checkbox" class="matras-filtr" id="chehol-coolmax-mattresses"> <a id="chehol-coolmax" href="javascript:void(0);"> <div class="animashka-a"></div> coolmax</a> </li>
								<li><input type="checkbox" class="matras-filtr" id="chehol-viscose-mattresses"><a id="chehol-viscose" href="javascript:void(0);"> <div class="animashka-a"></div>viscose</a></li>
								<li><input type="checkbox" class="matras-filtr" id="chehol-outlast-mattresses"> <a id="chehol-outlast" href="javascript:void(0);"> <div class="animashka-a"></div> outlast</a></li>
								<li><input type="checkbox" class="matras-filtr" id="chehol-satin-mattresses"> <a id="chehol-satin" href="javascript:void(0);">  <div class="animashka-a"></div> satin</a></li>
								<li><b>Основа:</b></li>
								<li><input type="checkbox" class="matras-filtr" id="material-memoform-mattresses"><a id="material-memoform" href="javascript:void(0);"> <div class="animashka-a"></div> memoform</a></li>
								<li><input type="checkbox" class="matras-filtr" id="material-geomemory-mattresses"><a id="material-geomemory" href="javascript:void(0);">  <div class="animashka-a"></div> geomemory</a></li>
								<li><input type="checkbox" class="matras-filtr" id="material-memogel-mattresses"> <a id="material-memogel" href="javascript:void(0);"> <div class="animashka-a"></div> memogel</a></li>
								<li><input type="checkbox" class="matras-filtr" id="material-mallowfoam-mattresses"> <a id="material-mallowfoam" href="javascript:void(0);"> <div class="animashka-a"></div> mallowfoam</a></li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
				  </div>
               </td>
          </tr>

                  <tr class="hnb_mytr">

                  <td>&nbsp;</td>
               </tr>
            </tbody></table> 		</div>
    ',

    'category_new_subpillows' => '
		<div class="hnb_catlist trick1">
		<div id="show_all1" style="cursor: pointer;" class="hnb_kattitle">Все подушки</div>
            <table class="category-table">
               <tbody>
         <tr class="hnb_mytr"> <!-- Ortho -->
               <td>
					<div class="menu_children_container new_product_list1">
						<div id="naideno"></div>
					  <div>
						<div class="children_block info">
								<span class="titlemenu_filt pointer-fix"><b>Коллекции</b></span>
								<ul class="new_product_list">
									<li><input type="checkbox" class="matras-filtr" id="MERINOS"> <a id="Collectio_relaxsan" href="/catalog/pillows/Collectio_relaxsan/"> <div class="animashka-a"></div> Relaxsan</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="MERINO-BAMBOO"><a id="Collectio_coolmax" href="/catalog/pillows/Collectio_coolmax/"> <div class="animashka-a"></div> Coolmax</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="collectio-Stile"><a id="Collectio_classico" href="/catalog/pillows/Collectio_classico/"> <div class="animashka-a"></div> Classico</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="WATERLATTEX"> <a id="Collectio_freshgel" href="/catalog/pillows/Collectio_freshgel"> <div class="animashka-a"></div> Freshgel</a> </li>
									<li><input type="checkbox" class="matras-filtr" id="collectio-Pensiero"><a id="Collectio_superiore" href="/catalog/pillows/Collectio_superiore"> <div class="animashka-a"></div> Superiore</a>  </li>
									<li><input type="checkbox" class="matras-filtr" id="NEW-NATURCOMFORT"><a id="Collectio_virtuoso" href="/catalog/pillows/Collectio_virtuoso"> <div class="animashka-a"></div> Virtuoso</a> </li>
								</ul>
						</div>
						<div class="children_block info" id="children_block_nope">
								<span class="titlemenu_filt pointer-fix"><b>Премиальные колекции</b></span>
								<ul class="new_product_list">
									<li><input type="checkbox" class="matras-filtr" id="elitnye-rest"><a id="Orthopedic_pillows" href="/catalog/pillows/Orthopedic_pillows"> <div class="animashka-a"></div> ортопедические подушки</a></li>
									<li><input type="checkbox" class="matras-filtr" id="elitnye-FreshGel"><a id="gel-pillows" href="/catalog/pillows/gel-pillows/"> <div class="animashka-a"></div> гелевые подушки</a></li>
									<li><input type="checkbox" class="matras-filtr" id="elitnye-comfort-delux"><a id="vacuum-pillows" href="/catalog/pillows/vacuum-pillows/"> <div class="animashka-a"></div> вакуумные подушки</a></li>
									<li><input type="checkbox" class="matras-filtr" id="elitnye-Stretching"><a id="memory-foam-pillows" href="/catalog/pillows/memory-foam-pillows/"> <div class="animashka-a"></div> подушки с эффектом памяти</a></li>
									<li><input type="checkbox" class="matras-filtr" id="elitnye-imperiale"><a id="s-masagnim-effektom" href="/catalog/pillows/s-masagnim-effektom/"> <div class="animashka-a"></div> подушки с массажным эффектом</a></li>
									<li><input type="checkbox" class="matras-filtr" id="elitnye-magnificent"><a id="pillows-with-cooling-effect" href="/catalog/pillows/pillows-with-cooling-effect/"> <div class="animashka-a"></div> подушки с охлаждающим эффектом</a></li>
								</ul>
						</div>
						<div class="children_block filternew">
							<span class="titlemenu_filt higher pointer-fix"><b>Материалы:</b></span>
							<ul class="new_product_list">
								<li><b>Чехол:</b></li>
								<li> <input type="checkbox" class="matras-filtr" id="chehol-coolmax-mattresses"> <a id="chehol-coolmax" href="/catalog/pillows/chehol-coolmax/"> <div class="animashka-a"></div> coolmax</a> </li>
								<li><input type="checkbox" class="matras-filtr" id="chehol-viscose-mattresses"><a id="chehol-viscose" href="/catalog/pillows/chehol-viscose/"> <div class="animashka-a"></div>viscose</a></li>
								<li><input type="checkbox" class="matras-filtr" id="chehol-outlast-mattresses"> <a id="chehol-outlast" href="/catalog/pillows/chehol-outlast/"> <div class="animashka-a"></div> outlast</a></li>
								<li><input type="checkbox" class="matras-filtr" id="chehol-satin-mattresses"> <a id="chehol-satin" href="/catalog/pillows/chehol-satin/">  <div class="animashka-a"></div> satin</a></li>
								<li><b>Основа:</b></li>
								<li><input type="checkbox" class="matras-filtr" id="material-memoform-mattresses"><a id="material-memoform" href="/catalog/pillows/material-memoform/"> <div class="animashka-a"></div> memoform</a></li>
								<li><input type="checkbox" class="matras-filtr" id="material-geomemory-mattresses"><a id="material-geomemory" href="/catalog/pillows/material-geomemory/">  <div class="animashka-a"></div> geomemory</a></li>
								<li><input type="checkbox" class="matras-filtr" id="material-memogel-mattresses"> <a id="material-memogel" href="/catalog/pillows/material-memogel"> <div class="animashka-a"></div> memogel</a></li>
								<li><input type="checkbox" class="matras-filtr" id="material-mallowfoam-mattresses"> <a id="material-mallowfoam" href="/catalog/pillows/material-mallowfoam/"> <div class="animashka-a"></div> mallowfoam</a></li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
				  </div>
               </td>
          </tr>

                  <tr class="hnb_mytr">

                  <td>&nbsp;</td>
               </tr>
            </tbody></table> 		</div>
		',

	);

	$bottom_sidebar = array(
		'address-russia' => '
		<br /><br /><br /><br />
					<h2 class="hnb_mytitlepag">Magniflex в других городах</h2>
<p style="color: #666666; background-color: #ffffff; font-size: 12px;">
			 <span>Официальные дилеры и представители:</span>
			 <span>
<select method="post" class="hnb_changtaver" name="items" onchange="top.location=this.value">
                       <option value="0">Выберите Ваш город
                        </option><option value="/shops/moscow/">Москва
						</option><option value="/o-magniflex/russia/moscow/">Московская область
                        </option><option value="/o-magniflex/russia/sankt-peterburg/">Санкт-Петербург
						</option><option value="/o-magniflex/russia/abakan-khakasiya/">Абакан, респ. Хакасия
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
						</option><option value="/o-magniflex/russia/krasnodar/">Краснодар
						</option><option value="/o-magniflex/russia/krasnoyarsk/">Красноярск
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
						</option><option value="/o-magniflex/russia/stavropol">Ставрополь
						</option><option value="/o-magniflex/russia/old-oskol">Старый Оскол
						</option><option value="/o-magniflex/russia/syktyvkar/">Сыктывкар
                        </option><option value="/o-magniflex/russia/tambov/">Тамбов
                        </option><option value="/o-magniflex/russia/tver/">Тверь
                        </option><option value="/o-magniflex/russia/tomsk/">Томск
						</option><option value="/o-magniflex/russia/tyla/">Тула
						</option><option value="/o-magniflex/russia/tymen/">Тюмень
						</option><option value="/o-magniflex/russia/ulianovsk/">Ульяновск
                        </option><option value="/o-magniflex/russia/yfa/">Уфа
                        </option><option value="/o-magniflex/russia/khabarovsk/">Хабаровск
                        </option><option value="/o-magniflex/russia/chelyabinsk/">Челябинск
						</option><option value="/o-magniflex/russia/yuzhno-sakhalinsk/">Южно-Сахалинск
						</option><option value="/o-magniflex/russia/yalta/">Ялта
				</option>
</select>
			 </span><br>

 <br>
		</p>
		',
	);


	$bottom_sidebar_tkany = array(
		'address-tkany-tehnologiya' => '
		<br /><br />
<select method="post" class="hnb_changtaver" name="items" onchange="top.location=this.value">
                       <option value="0">Выберите Ткань или технологию
						</option><option value="/production/maedical/">Maedical
						</option><option value="/production/pilevuh-klichey/">защита от пылевых клещей
						</option><option value="/production/ACE-Vitaminic/">Витаминный комплекс ACE Vitaminic
						</option><option value="/production/drivesni-volokna/">Древесные волокна
						</option><option value="/production/volokna-bambuka/">Волокна Бамбука
						</option><option value="/production/merinoviya-shersty/">Мериносовая шерсть
						</option><option value="/production/naturalynuy-hlopok/">100% Натуральный Хлопок
						</option><option value="/production/bio-hlopok/">Био Хлопок
						</option><option value="/production/ekstrakt-lavandi/">Экстракт лаванды
						</option><option value="/production/ekstrakt-aloe-vera/">Экстракт Алоэ Вера
						</option><option value="/production/outlast/">Outlast
						</option><option value="/production/Coolmax/">Coolmax
						</option><option value="/production/Microforato-3D/">Microforato 3D
						</option><option value="/production/zolotie-niti/">Золотые нити
				</option>
</select>
			 </span><br>
 <br>
		</p>
		',
	);

	$size_sidebar = array(
		'address-mattresses' => '
                        </option><option value="/catalog/mattresses/60x120/">60x120
						</option><option value="/catalog/mattresses/70x140/">70x140
				</option>


		',
	);

?>


<script>
if(location.pathname.toString().indexOf('/magniflex-mattresses-world/') != -1 || location.pathname.toString().indexOf('/magniflex-mattresses-world/') != -1)
 $('#hnb_rozmcol').show();
</script>