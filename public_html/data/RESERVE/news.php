<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

$get_breadcrumbs_all_news = function($item){
	return array(
		array('Главная','/'),
		array('Новости')
	);
};

$get_breadcrumbs = function($item){
	return array(
		array('Главная','/'),
		array('Новости','/news/'),
		array($item['name'])
	);
};
$breadcrumbs_subclass = 'breadcrumbs_news';
$breadcrumbs_subclass_all_news = 'breadcrumbs_aziendaok';



$news = array(
	array(
		'address' => 'novunu.novue_modeli_poduhec_yche_v_prodache',
		'name_h1' => 'Новинки. Новые модели подушек уже в продаже.',
		'name' => 'Новинки. Новые модели подушек уже в продаже.',
		'date' => '26.06.2019',
		'title' => 'Новинки. Новые модели подушек уже в продаже.',
		'description' => 'Новинки. Новые модели подушек уже в продаже.',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/news/Зауваження 2019-06-24 173320.png',
		'desc' => 'Расширение ассортимента подушек производства фабрики Magniflex. В продаже появились абсолютно новые две модели',
		'text' => '

		<div itemprop="description">
					
					Расширение ассортимента подушек производства фабрики Magniflex. В продаже появились абсолютно новые
			две модели:<br><br>
				<a href="/catalog/pillows/orthopedic_pillows/MEMOFORM-MAXI-CLASSICO/">Memoform Maxi Classico</a> Подушка входит в коллекцию 
	Classico, является аналогом Memoform Standard Classico, но при этом является самой высокой подушкой
	Magniflex, ее высота 15 см. Подходит для любителей высоких подушек. Материал подушки – пена с эффектом
	памяти Memoform Magniflex, чехол – viscose.<br><br>
	<img src="/img/Зауваження 2019-06-24 173320.png"><br>

			<a href="/catalog/pillows/orthopedic_pillows/SUSHI-PICCOLO/">Sushi Piccolo </a> - подушка для путешествий. Во время путешествий довольно часто возникает вопрос сохранения
		качественного сна, как у себя дома. Не все подушки, встречающиеся на пути, могут обеспечить привычный
		уровень комфорта.
		Фабрика Magniflex предлагает отличное решение – подушка, которую можно взять с собой и, которая, имеет
		минимальные габариты, что даже помещается в ручную кладь.
		Подушка поставляется в комплекте с чехлом и сумкой. Скручивается в небольшой рулон, застегивается
		застежкой-липучкой и убирается в сумку для переноски. Размер подушки: 42 х 23 х 11, с чехлом: 55 х 29 х 11.
		Материал подушки – пена с эффектом памяти Memoform Magniflex, чехол – viscose.<br><br>
		<img src="/img/Зауваження 2019-06-24 173444.png">
	
						</div>
		'
	),
	array(
		'address' => 'magniflex-salone-del-mobile-milano',
		'name_h1' => ' Magniflex на выставке salone del mobile milano 2019',
		'name' => ' Magniflex на выставке salone del mobile milano 2019',
		'date' => '17.04.2019',
		'title' => ' Magniflex на выставке salone del mobile milano 2019',
		'description' => 'Magniflex на выставке salone del mobile milano 2019',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/news/3FE20014-A837-42BB-AA52-B2F54B0F2AE8.jfif',
		'desc' => 'Как это было: Magniflex на выставке в Милане Salone del Mobile 2019',
		'text' => '
		<div itemprop="description">
					
		<style>

		</style>

<strong>Как это было: Magniflex на выставке в Милане Salone del Mobile 2019</strong>

<p>С 9 по 14 апреля прошла ежегодная выставка в Италии в Милане Salone del Mobile Milano 2019.</p>

<p>Фабрика представила ряд новинок, новые модели матрасов, подушек и аксессуаров. Ряд существующих моделей получили новый, более привлекательный дизайн. В этом году стенд Magniflex посетило много наших партнеров из России, намного больше, чем в 2018 году. С радостью продолжаем наше сотрудничество и очень рады сохранять позиции одной из самых известных и популярных фабрик в не только в Европе, но и в мире.</p>
<p>География продаж распространяется на 98 стран мира, во многих странах существуют шоу-румы и бренд секции. Компания продолжает набирать обороты, оставаясь одним из немногих производителей, являющихся законодателями моды и технологий в индустрии сна.</p>
<div class="news_oll_img">
	<p><img style="margin-top: 20px; float: left" width="48%" src="/img/3FE20014-A837-42BB-AA52-B2F54B0F2AE8.jfif" alt="торговый центр АКВИЛОН"></p>
	<p><img style="margin-top: 20px; float: right" width="48%" src="/img/59C58B31-8CAF-4A5B-8764-0E5326742213.jfif" alt="торговый центр АКВИЛОН"></p>
	<p><img style="margin-top: 20px; float: left" width="48%" src="/img/B9A0A5C3-8A00-4587-8477-A0853331736E.jfif" alt="торговый центр АКВИЛОН"></p>
	<p><img style="margin-top: 20px; float: right" width="48%" src="/img/B97E746C-F6AD-49DB-809F-93409657ACCE.jfif" alt="торговый центр АКВИЛОН"></p>
	<p><img style="margin-top: 20px; float: left" width="48%" src="/img/IMG_1281.jfif" alt="торговый центр АКВИЛОН"></p>
	<p><img style="margin-top: 20px; transform: rotate(90deg); float: right" width="48%" src="/img/IMG_1388.jfif" alt="торговый центр АКВИЛОН"></p>

	<video width="100%"  controls="" style="float:left; margin-top: 20px;">
	<source src="/video/vistavka-milano-2019.mp4" type="video/mp4">
	</video>

	<video width="100%" "="" height="240" controls="" style="float:right; margin-top: 20px;">
	<source src="/video/vistavka-milano-2019-2.mp4" type="video/mp4">
	</video>

	<video width="100%" "="" height="240" controls="" style="float:left; margin-top: 20px;">
	<source src="/video/vistavka-milano-2019-3.mp4" type="video/mp4">
	</video>
</div>
						</div>
		
		'
	),
	array(
		'address' => 'salone-del-mobile-milano',
		'name_h1' => 'Magniflex на выставке salone del mobile milano milano 2019',
		'name' => 'magniflex на выставке salone del mobile milano milano 2019',
		'date' => '26.03.2019',
		'title' => 'magniflex на выставке salone del mobile milano milano 2019',
		'description' => 'magniflex на выставке salone del mobile milano milano 2019',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/news/open_biglietteria_hpd.jpg',
		'desc' => 'Мы приглашаем посетить стенд фабрики Magniflex на выставке Salone del Mobile Milano 2019, которая будет проходить в Италии в г. Милан с 9 – 14 Апреля 2019 года.',
		'text' => '
		<style>
	
		</style>
		<div itemprop="description">
					
		<style>

		</style>

<p>

	Мы приглашаем посетить стенд фабрики Magniflex на выставке Salone del Mobile Milano 2019, которая будет проходить в Италии в г. Милан с 9 – 14 Апреля 2019 года. </p>
<p>HALL 18 D 31 E 28</p>
<p>Ежегодная выставка Salone del Mobile Milano в этом году проводится 58-ой раз и собирает порядка 370.000 экспонентов из 188 стран мира! Глобальная платформа для действительно первоклассных продуктов с акцентом на инновации. Salone Internazionale del Mobile разделен на три категории стилей: <br>
- классический стиль, опирается на ценности и традиции мастерства в искусстве изготовления мебели и предметов интерьера в классическом стиле; <br>
- дизайн - функциональность, инновации и чувство стиля; <br>
- luxury - раздел, посвященный роскоши в современном ключе. Ассортимент товаров, который сочетает в себе и качество и технологии, демонстрируемые ведущими отраслевыми компаниями, осуществляющими инвестиции в инновационные продукты и решения для домашнего интерьера.</p>
<p>Получить информационную помощь в посещении выставки и стенда Magniflex можно написав на нашу электронную почту: <a href="mailto:sale@magniflex.ru">sale@magniflex.ru</a></p>


		<img style="margin: -10px 0 -80px" width="100%" src="/img/news/556f79b.png" alt="торговый центр АКВИЛОН">
		<p style="text-align: center">Схема выставки.</p> <br><br>

		<p>Приобрести электронный билет можно на сайте выставки:<a target="_blank" href="https://www.salonemilano.it/en/visit/tickets-and-admission/"> https://www.salonemilano.it/en/visit/tickets-and-admission/</a></p>
		<p>Посмотреть информацию о Magniflex на сайте выставки:<a target="_blank" href="https://www.salonemilano.it/en/exhibitors-list/magniflex-smi"> https://www.salonemilano.it/en/exhibitors-list/magniflex-smi</a></p>
		<img style="margin: 20px auto 5px;" src="/img/news/open_biglietteria_hpd.jpg" alt="торговый центр АКВИЛОН">


						</div>

		'
	),
  array(
		'address' => 'new-salon-akvilon',
		'name_h1' => 'Открытие фирменного салона в санкт-петербурге',
		'name' => 'Открытие фирменного салона в санкт-петербурге',
		'date' => '01.11.2018',
		'title' => 'Ооткрытие фирменного салона в санкт-петербурге',
		'description' => 'Ооткрытие фирменного салона в санкт-петербурге',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/news/akvilon.png',
		'desc' => 'В г. Санкт-Петербург открылся фирменный салон Magniflex. На экспозиции представлен весь ассортимент продукции',
		'text' => '
		<style>
	
		</style>
 
<p>В г. Санкт-Петербург открылся фирменный салон Magniflex. На экспозиции представлен весь ассортимент продукции.</p>
 
<p>Адрес:<br>
ул. Новолитовская, дом 15В, 3 этаж, секция 105<br>
м. Лесная<br><br>
Режим работы:<br>
Ежедневно, без выходных<br>
с 10:00 до 20:00<br><br>

Контактные телефоны: <br>
+7 921 906-79-00 <br>
+7 (812) 670-84-82<br><br>

E-mail: spb@magniflex.ru
</p>

		
		<p><img style="margin-top: 20px; float: left" width="48%" src="/img/news/akvilon.png" alt="торговый центр АКВИЛОН"></p>

		'
	),
	array(
		'address' => 'magniflex-pledu',
		'name_h1' => 'Расширение ассортимента - итальянские пледы в продаже!',
		'name' => 'Расширение ассортимента - итальянские пледы в продаже!',
		'date' => '10.08.2018',
		'title' => 'Расширение ассортимента - итальянские пледы в продаже!',
		'description' => 'Расширение ассортимента - итальянские пледы в продаже!',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/news/pled1.jpg',
		'desc' => 'Представляем новую коллекцию пледов итальянской фабрики I.W.T. (Italian Woollen Treasures), расположенной в самом сердце Италии — городе Прато (Тоскана, Флоренция)',
		'text' => '
		<style>
	
		</style>
 
<p>Представляем новую коллекцию пледов итальянской фабрики I.W.T. (Italian Woollen Treasures), расположенной в самом сердце Италии — городе Прато (Тоскана, Флоренция).</p>
 
<p>Регион Тоскана славится своей историей, значимой частью которой является не только культурное наследие, но и текстильная промышленность. Город Прато, находящийся  всего в 25 км от Флоренции, главный промышленный центр Тосканы, специализируется на производстве текстиля и керамика.</p>

<p>Лавки Мастеров старинных ремёсел настолько укоренились в ткани города, что стали его характерным лицом и памятником истории. Их Изделия — это не просто товары, но и уникальное художественное наследие. Внутри мастерских кипит работа, не прекращающаяся со времён эпохи Возрождения: трудятся ремесленники, знающие секреты обработки материалов, доставшиеся им от отцов и дедов. Но время не стоит на месте, и помимо старинных методик мастера применяют инновационные материалы и технологии.</p>

<p>В Прато находится музей текстиля с древними коллекциями тканей, в том числе вельвет, скатерти Перуджи, ткани с дамасским узором 15-19 вв.</p>

<p>Приобретая продукцию (пледы), произведенную мастерами города Прато, Вы получаете частичку истории, которая натуральными нитями качественных материалов вплетается в конечный вариант изделий. Изысканный дизайн, грациозный стиль, исторические орнаменты и безусловное качество материалов – это продукция из города Прато.</p>

<p>Первоначальная коллекция, представленная в России, состоит из 4 моделей: Asmana, Lara, Sorrento (2 расцветки) и Lucca (2 расцветки). В каждом пледе используется материал – Lambswool. Это самая качественная, самая теплая, самая мягкая и очень тонкая нежная шерсть — подшерсток молодого ягненка. Молодых ягнят в возрасте примерно 7 месяцев стригут в первый раз. И именно эту, первой стрижки, овечью шерсть называют LAMBSWOOL.</p>

<p>Чем же она так хороша? Каждое волоконце подшерстка имеет тонкие и очень мягкие загибающиеся в завиток концы. Поэтому шерсть молодых ягнят именно первой стрижки очень мягкая, очень упругая, гладкая. Такая шерсть не колется и не раздражает кожу.  Дальнейшие стрижки овец уже не дают столь качественной шерсти, и ее  использует для других целей.</p>

<p>Состав пледов:<br>
 
Asmana - 90% шерсть и 10% кашемир.<br>
Sorrento – 100% шерсть.<br>
Lucca - 100% шерсть.<br>
Lara – 80% шерсть, 20% полиамид.</p>
		

		
		<p><img style="margin-top: 20px; float: left;" width="48%" src="/img/news/pled1.jpg"></p>
		<p><img style="margin-top: 20px; float: right" width="48%" src="/img/news/pled2.jpg"></p>
		<p><img style="margin-top: 20px; float: left;" width="48%" src="/img/news/pled3.jpg"></p>
		<p><img style="margin-top: 20px; float: right" width="48%" src="/img/news/pled4.jpg"></p>
		<p><img style="margin-top: 20px; float: left;" width="48%" src="/img/news/pled5.jpg"></p>
		<p><img style="margin-top: 20px; float: right" width="48%" src="/img/news/pled6.jpg"></p>

		'
	),

	array(
		'address' => 'magniflex-and-mangusta',
		'name_h1' => 'Производитель яхт mangusta выбрал magniflex для комплектации своих яхт',
		'name' => 'Производитель яхт mangusta выбрал magniflex для комплектации своих яхт',
		'date' => '17.07.2018',
		'title' => 'Производитель яхт mangusta выбрал magniflex для комплектации своих яхт',
		'description' => 'Производитель яхт mangusta выбрал magniflex для комплектации своих яхт',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/news/yacht-Gransport.jpg',
		'desc' => 'Overmarine Group была основана в 1985 году семьей Балдуччи, которая является единоличным собственником компании и по сей день руководит ею',
		'text' => '
		<style>
	
		</style>
		<p>Overmarine Group была основана в 1985 году семьей Балдуччи, которая является единоличным собственником компании и по сей день руководит ею. Она знаменита во всем мире благодаря яхтам maxi open, представляющим широко известный бренд Mangusta: продано уже более 300 яхт, и благодаря устойчивым традициям, компания является лидером в сегменте быстрых яхт от 30 до 50 метров. На сегодняшний день, благодаря накопленному опыту и профессионализму, компания со своими брендами Mangusta Oceano и Mangusta GranSports играет важную роль в мире мегаяхт для дальних плаваний и быстрого перемещения.</p>
 
<p>Mangusta Yachts выбрала продукцию фабрики Magniflex для комплектации моделей 72/50, 94/05, 110/03, 80/75, 130/08, удивительного Gransport 54 и невероятного Oceano 46.</p>
 
<p>Судоволадельцы, члены экипажа и гости смогут провести прекрасное время во время пребывания на яхтах и получат возможность насладиться незабываемым комфортом и получить максимально качественный сон благодаря матрасам и подушкам Magniflex.</p>

<p>Эти роскошные суда узнаваемы благодаря своему дизайну и увеличенной открытой зоне в носовой части, которая является характерной чертой бренда.</p>

<p>Яхты Mangusta – это не только превосходные ходовые качества, но и утонченный подход к дизайну интерьеров, который позволяет назвать каждую яхту произведением искусства. «Философия Mangusta — для каждой модели использовать все самое лучшее, что есть в индустрии» - утверждает хозяин верфи и главный управляющий Маурицио Балдуччи. Для отделки используют самые ценные и эксклюзивные виды натурального дерева, мрамора, высококачественной кожи и многие другие материалы. Также теперь Mangusta может похвастаться наличием одних из самых лучших матрасов в мире в комплектации своих яхт.</p>
		

		
		<p><img style=" margin-right: 10px;" width="100%"  src="/img/news/yacht-Gransport.jpg"></p>
		<p><img width="100%"  src="/img/news/yaht-oceano.jpg"></p>
		<p><img style="margin-right: 10px;" width="49%" src="/img/news/37385011_1168354723302898_8312950403029270528_o.jpg"><img width="49%" src="/img/news/37332763_1168354709969566_2488128726995304448_o.jpg"></p>
		<p><img style="margin-right: 10px;" width="49%" src="/img/news/37351793_1168354839969553_3261967669208809472_o.jpg"><img width="49%" src="/img/news/37260396_1168354653302905_7106386011025833984_o.jpg"></p>


		'
	),

	array(
		'address' => 'tinkoff-magniflex',
		'name_h1' => 'Олег тиньков выбирает magniflex',
		'name' => 'Олег тиньков выбирает magniflex',
		'date' => '29.05.2018',
		'title' => 'Олег тиньков выбирает magniflex',
		'description' => 'Олег тиньков выбирает magniflex',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/news/share.png',
		'desc' => 'Когда Вы представляете себе Тоскану, довольно часто слово Magniflex приходит на ум',
		'text' => '
		<style>
	
		</style>
		<p><img style="margin-top: 20px;max-width:400px;" src="/img/news/image.jpg"></p>
		<p>Когда Вы представляете себе Тоскану, довольно часто слово Magniflex приходит на ум. Именно поэтому даже Олег Тиньков выбрал наши матрасы для своего нового гостиничного проекта “La Datcha” в форте дей Марми. ( https://www.ladatcha.com/forte-dei-marmi/ )</p>
 
<p>La Datcha-это единственный в своем роде проект: бренд отелей, где Вы не заказываете отдельные спальни, а получаете во владение весь комплекс. В форте-де-Марми Тиньков, один из самых успешных предпринимателей в мире, решил восстановить красоту бывшего отеля Nettuno, добавив нотку классической архитектуры, чтобы превратить его в роскошный курорт на всех уровнях.</p>
 
<p>Чтобы создать чувство роскоши на мир грез, Тиньков выбрал не что иное, как Magniflex, с серией матрасов и аксессуаров, которые предлагают гостям отеля стиль, уникальность и несравненное качество отдыха.</p>

		

		
		<p><img style="margin-top: 20px;" width="100%" src="/img/news/share.png"></p>
		<p><img style="margin-top: 20px;" width="100%" src="/img/news/main-view.jpg"></p>

		<p><img style="margin-top: 20px;" width="100%" src="/img/news/5.jpg"></p>

		'
	),

	array(
		'address' => 'Itogi-Salone-del-Mobile-2018',
		'name_h1' => 'Итоги выставки Salone del Mobile 2018',
		'name' => 'Итоги выставки Salone del Mobile 2018',
		'date' => '25.04.2018',
		'title' => 'Итоги выставки Salone del Mobile 2018',
		'description' => 'Итоги выставки Salone del Mobile 2018',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/news/arhi.jpg',
		'desc' => 'В Италии, в Милане прошла очередная международная мебельная выставка Salone del Mobile 2018',
		'text' => '
		<style>
	
		</style>
		<p style="font-weight: bold;"><span style="color:green;margin-right: -2px;">Buon</span>	<span style="color:#d3dbe6;margin-right: -2px;">gio</span>	<span style="color:red;">rno!</span></p>

		<p>В Италии, в Милане прошла очередная международная мебельная выставка Salone del Mobile 2018. Фабрика Magniflex представила широкий ассортимент матрасов, кроватей, подушек и аксессуаров для сна. Российское представительство благодарит всех наших партнеров, кто нашел время и возможность посетить наш стенд!</p>

		<p>В этом году фабрика представила ряд новых моделей матрасов, а также совершенно новый вид материала, который уже используется в некоторых новинках. <span style="font-weight:bold; color:#008080;">Aquabreeze foam.</span> <br>
		Этот вид материала получил еще большую плотность, эластичность, а также невероятный уровень воздухопроницаемости, что достигается мелкопористостью структуры материала.</p>

		<p>В 2018 году наибольший акцент в продажах в России будет делаться на самые продаваемые модели матрасов:<br>
		Merino Merinos, Stile 7, Pensiero 8, Memorie 9, Naturalmente, Rest 10, Comfort Plus 10, Freshgel 10, Stretching 10, Memoform Dual. Также мы планируем ряд новинок, которые были презентованы фабрикой в этом году.</p>

		<p>В подушках самыми популярными остаются 2 коллекции: Classico с чехлом из белоснежной вискозы (форма: Wave & Standard), Superiore с инновационным чехлом Outlast (форма: Wave & Standard).</p>

		<p>На сегодняшний день мы завершаем работу с моделями матрасов Merino Bamboo и коллекцией Imperiale (до продажи всех складских остатков). В подушках завершаем работу с коллекцией Coolmax (Memory, Aloe Vera, Orthomassage, Comfort) до распродажи всех складских остатков.</p>

		<img style="width:100px;float:left; margin-right: 10px;" width="100%" src="/img/news/arhi.jpg">
		<p style="margin-left: 10px;">По результатам выставки а также многолетней работы итальянская фабрика Magniflex получила приглашение на участие в Archiproducts Design Selection - Milan Design Week 2018. Компания была номинирована на звание Лучшего Международного Бренда в области качества продукции и инноваций.</p>

		<p style="float: left;">Мы не одни, но, несомненно, одни из лучших! С таким девизом мы продолжаем нашу работу. Будем рады совершенствоваться вместе с Вами, дорогие наши партнеры!</p>

		

		<p><img style="margin-top: 20px;" width="100%" src="/img/news/111.jpg"></p>
		<img style="float:left;" width="49%" src="/img/news/112.jpg">
		<img style="float:right;" width="49%" src="/img/news/113.jpg">
		<img class="ama_news_img" style="float:left;" src="/img/news/114.jpg">
		<img class="ama_news_img" style="float:right;" src="/img/news/115.jpg">

		'
	),

	array(
			'address' => 'Salone-del-Mobile-2018',
			'name_h1' => 'Magniflex на выставке Salone del Mobile 2018',
			'name' => 'Magniflex на выставке Salone del Mobile 2018',
			'date' => '28.03.2018',
			'title' => 'Magniflex на выставке Salone del Mobile 2018',
			'description' => 'Magniflex на выставке Salone del Mobile 2018',
			'keywords' => 'magniflex, магнифлекс',
			'preview_image' => '/img/news/viashdfz.png',
			'desc' => 'С 17 по 22 апреля  в Милане (Италия) пройдет ежегодная мебельная выставка Salone del Mobile',
			'text' => '
			<style>
		
			</style>
			<img style="width:250px;float:right;" width="100%" src="/img/news/viashdfz.png">
			<p>
			<br>
			С 17 по 22 апреля  в Милане (Италия) пройдет ежегодная мебельная выставка Salone del Mobile.<br>
Стенд Magniflex расположен: HALL 18 - STAND E 27 F 24
</p><p>
На выставке будут присутствовать русско-говорящие представители фабрики. Заранее 
назначить встречу можно:
- по электронной почте: sale@magniflex.ru
- по телефону: +7 495 792 16 93
</p><p>
Приглашаем всех желающих посетить наш стенд, где будет представлен весь ассортимент 
фабрики, матрасы, подушки, кровати, аксессуары и многое многое другое.
</p>
<br><br>
<p>
Схема выставки:
			</p>
			

			<img width="100%" src="/img/news/SMM2018_PIANTA_900x630px_19feb.jpg">
			'
		),
	
	array(
			'address' => 'raspisaniya-2018',
			'name_h1' => 'Расписание выставок с участием Magniflex в 2018 году',
			'name' => 'Расписание выставок с участием Magniflex в 2018 году',
			'date' => '23.01.2018',
			'title' => 'Расписание выставок с участием Magniflex в 2018 году',
			'description' => 'Расписание выставок с участием Magniflex в 2018 году',
			'keywords' => 'magniflex, магнифлекс',
			'preview_image' => '/img/news/fiere_2018.jpg',
			'desc' => 'Magniflex примет участие в 18 крупных международных выставках, на которых будет продемонстрирован итальянский стиль и качество товаров для сна',
			'text' => '
			<style>
		
			</style>
			<p>
			Magniflex примет участие в 18 крупных международных выставках, на которых будет продемонстрирован итальянский стиль и качество товаров для сна, на которых возможно максимальное расслабление. Magniflex, с января по декабрь, как говорят итальянцы, будет "рыцарями отдыха".
			</p><p>
			Первая выставка начинается в январе с в Лас-Вегасе: CES (Consumer Electronics Show) и Las Vegas Market. Март будет полон выставок -это Украина (Кифф), Чехия (For Interior), Македонии (Mebel), Словакии (Nábytok a bývanie) и Китае (3F - Международная выставка знаменитой мебели).
			</p><p>
			Апрель Magniflex будет занят дома, с большой экспозицией на Salone Internazionale de Mobile в Милане, но наши стенды также отправятся в Брно (Чехия) на экспозицию Mobitex в 2018 году.
			</p><p>
			Весна ярмарок закрывается в Канаде на канадской мебельной выставке в мае. Canadian Furniture Show.
			</p><p>
			Затем следуйте за июлем (летняя выставка Las Vegas Market), сентябрь (Furniture China, For Arch Prague), октябрь (Sia Guest Rimini, Moddom Bratislava, For Interior Prague), ноябрь (Belgrade Furniture Fair) и декабрь, который закрывает наше мировое турне с престижным участием в Esprit Meublé, Франция.
			</p><p>
			Мы будем рады всем посетителям, в случае интереса клиентов из России к посещению любой международной выставки просим связываться с российским представительством для согласования посещения экспозиции с сотрудниками Magniflex, так Вам будет уделено максимальное внимание и возможное время!
			</p>
			
			<div><img src="/img/news/fiere_2018.jpg" alt="Расписание выставок с участием Magniflex в 2018 году" width="100%"></div>
			<table class=tablnews>
				<tr><td><strong>Выставка:</strong></td><td><strong>Дата:</strong></td></tr>
				<tr><td>Consumer Electronics Show, USA</td><td>9/1 – 12/1</td></tr>
				<tr><td>Las Vegas Market, USA</td><td>28/01 – 01/02</td></tr>
				<tr><td>KIFF 2018 – Kiev, UA</td><td>12/3 – 15/3</td></tr>
				<tr><td>Mebel Skopje, MK</td><td>Март</td></tr>
				<tr><td>Nábytok a bývanie&nbsp;–&nbsp;Nitra, SK</td><td>13/03 – 18/03</td></tr>
				<tr><td>For&nbsp;Interior&nbsp;–&nbsp;Praha, CZ</td><td>22/03 – 25/03</td></tr>
				<tr><td>International Famous Furniture Fair, CN</td><td>27/03 – 30/03</td></tr>
				<tr><td>Salone del Mobile di Milano, IT</td><td>17/04 – 22/04</td></tr>
				<tr><td>Mobitex&nbsp;–&nbsp;Brno, CZ</td><td>25/04 – 28/04</td></tr>
				<tr><td>Canadian Furniture Show, CA</td><td>25/05 – 27/05</td></tr>
				<tr><td>Las Vegas Market, USA</td><td>29/7 – 02/08</td></tr>
				<tr><td>Furniture China, CN</td><td>11/9 – 14/9</td></tr>
				<tr><td>For Arch&nbsp;–&nbsp;Praha, CZ</td><td>18/9 – 22/9</td></tr>
				<tr><td>For Interior Praha, CZ</td><td>4/10 – 7/10</td></tr>
				<tr><td>Moddom&nbsp;–&nbsp;Bratislava, SK</td><td>17/10 – 21/10</td></tr>
				<tr><td>Sia Guest – Rimini, IT</td><td>10/10 – 12/10</td></tr>
				<tr><td>Belgrade Furniture Fair, SR</td><td>Ноябрь</td></tr>
				<tr><td>Esprit Meublé, FR</td><td>2/12-5/12</td></tr>
			</table>
			<div class="clear"></div>
			'
		),

	array(
			'address' => 'magniflex-vistavka-sia-guest-rimini',
			'name_h1' => 'Magniflex на выставке в Sia Guest – Rimini',
			'name' => 'Magniflex на выставке в Sia Guest – Rimini',
			'date' => '04.10.2017',
			'title' => 'Magniflex на выставке в Sia Guest – Rimini',
			'description' => 'Magniflex на выставке в Sia Guest – Rimini',
			'keywords' => 'magniflex, магнифлекс',
			'preview_image' => '',
			'desc' => 'Комфорт для гостиниц, специальная серия будет представлена на выставке в Римини, Италия',
			'text' => '
			<style>
		
			</style>
			
			<p><b>Коллекция Regale: Комфорт для гостиниц, специальная серия будет представлена на выставке в Римини, Италия.</b></span></p>
			<p>С 12 октября – 14 октября Magniflex принимает участие в 66-ой выставке <a href="http://www.siaguest.it/">Sia Guest</a> в городе Римини, одной из самых крупных международных выставок гостиничного бизнеса.</p>
			<p>Помимо подушек, ароматов для спальни, а также других аксессуаров, мы представим 44 модели новой коллекции, посвященной гостиничной отрасли: коллекцию Regale.</p>
			<p>С коллекцией Regale качество сна заметно повышается. Это специальная разработка для гостиничного сектора, имеющая кстати сертификат IMO, который гарантирует, что продукция является негорючей, огнестойкой и не образует токсичных паров в случае пожара. Испытания, которым были подвергнуты наши изделия, проводились &#8203;&#8203;в условиях пожара и температуры до 750 °. По всем тестам мы получили максимальные оценки. Данная коллекция позволит гостиницам, отелям и т.д. повысить не только уровень комфорта, но и внешний вид в сочетании с итальянской элегантностью.</p>
			<p>Наш стенд на выставке: <strong>D1 035-046</strong>. Приглашаем всех желающих!</p>
			
			<div class="clear"></div>
			'
		),
	
	array(
		'address' => 'magniflex-oficialnyj-partner-sbornoj-italii-po-futbolu',
		'name_h1' => 'Magniflex – официальный партнер сборной Италии по футболу',
		'name' => 'Magniflex – официальный партнер сборной Италии по футболу',
		'date' => '31.08.2017',
		'title' => 'Magniflex – официальный партнер сборной Италии по футболу',
		'description' => 'Magniflex – официальный партнер сборной Италии по футболу',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '',
		'desc' => 'Комфорт для гостиниц, специальная серия будет представлена на выставке в Римини, Италия',
		'text' => '
		<style>
	
		</style>
	
<p>Итальянская сборная по футболу выбрала компанию Magniflex в официальные партнеры. Это сотрудничество сочетает и соединяет воедино общие ценности, любовь к Италии, страсть и амбиции, спорт и благополучие, отличный результат, и Уважение к себе и другим людям. </p>
<p>Лучшие выбирают Лучших!  Magniflex - признанный итальянский лидер в производстве и продаже ортопедических матрасов и спальных принадлежностей в более чем 100 странах по всему миру.</p>
<p>Сборная Италии будет использовать ортопедические матрасы и подушки Magniflex  на своей тренировочной базе в Коверчано. Magniflex гарантирует превосходное качество своей продукции, поэтому игроки национальной команды смогут восстанавливать силы максимально эффективно в самые кратчайшие сроки.
</p>
<p>
“Мы рады начать сотрудничество с компанией Magniflex”, - сказал Президент ФФИ Carlo Tavecchio. “Это динамичный итальянский бренд, получивший высокое международное признание и с ними мы разделяем стремление к достижению необходимых результатов, связанных с нашей историей, амбициями и потенциалом.”
</p>
<p>
 “Это важное партнерство”, - отметил владелец фирмы Magniflex, Марко Магни. “Мы подтверждаем наши общие принципы итальянского настроения, стремления к совершенству, ценим наше наследие и все то, что является основополагающим в ежедневной работе.”
</p>
<div><img width="100%" src="/img/news/italy.jpeg" alt="Magniflex – официальный партнер сборной Италии по футболу"></div>
<p>Оригинал новости на официальном сайте футбольной федерации Италии: <a href="http://www.figc.it/en/204/2538911/2017/08/News.shtml" target="_blank">http://www.figc.it/en/204/2538911/2017/08/News.shtml</p>
		<div class="clear"></div>
		'
	),

	array(
		'address' => 'magniflex-vystavka-v-kitae',
		'name_h1' => 'Magniflex на выставке в Китае 2017',
		'name' => 'Magniflex на выставке в Китае 2017',
		'date' => '29.08.2017',
		'title' => 'Magniflex на выставке в Китае 2017',
		'description' => 'Magniflex на выставке в Китае 2017',
		'keywords' => 'magniflex, магнифлекс, выставка, Китай',
		'preview_image' => '',
		'desc' => 'Приглашаем всех желающих посетить стенд фабрики Magniflex на 23 международной мебельной выставке в Шанхае',
		'text' => '
		<style>
	
		</style>
	
<p>Приглашаем всех желающих посетить стенд фабрики Magniflex на 23 международной мебельной выставке в Шанхае. Стенд Magniflex займет 252 квадратных Hall E1C06. Начало выставки во Вторник, 12 сентября. Выставка продлится до 15 сентября.</p>
<p>На выставке традиционно будут представлены новинки фабрики, также система сна Magnismartech. По вопросам посещения стенда Магнифлекс просьба обращаться в официальное российское представительство фабрики: <a href="mailto:sale@magniflex.ru">sale@magniflex.ru</a></p>

		<div class="clear"></div>
		'
	),
	
	array(
		'address' => 'magniflex-na-vystavke-v-milane-foto-otchet',
		'name_h1' => 'MAGNIFLEX НА ВЫСТАВКЕ В МИЛАНЕ, ФОТО ОТЧЕТ',
		'name' => 'Magniflex на выставке в Милане, фото отчет',
		'date' => '28.04.2017',
		'title' => 'Magniflex на выставке в Милане, фото отчет',
		'description' => 'Magniflex на выставке в Милане, фото отчет',
		'keywords' => 'magniflex, магнифлекс, выставка, Милан',
		'preview_image' => '',
		'desc' => 'В Милане прошла очередная выставка Salone del Mobile 2017, которая проводилась в Rho, Fiera Milano, Италия',
		'text' => '
		<style>
	
		</style>
	
<p>В Милане прошла очередная выставка Salone del Mobile 2017, которая проводилась в Rho, Fiera Milano, Италия. Традиционно фабрика Магнифлекс продемонстрировала свои новинки и достижения в области индустрии сна. В этом году на стенде также присутствовал Джанлуиджи Буффон – легенда мирового футбола, капитан и голкипер сборной Италии. Стенд фабрики Magniflex, заслуженного лидера товаров для сна, был как обычно полон посетителей и желающих попробовать продукцию в деле. Все дилеры, дистрибьюторы и представители компании из других стран также ежегодно собираются в эти дни, чтобы работать с клиентами из своих стран, делиться опытом и знаниями друг с другом. Магнифлекс на 2017 год продается в 98 странах мира и по праву держит пальм первенства среди производителей матрасов. Фабрика является одной из самых крупных в Европе и способна производить 10.000 матрасов в день. Magniflex – это только самое лучшее, это стиль жизни благодаря совершенно новому и высокому уровню комфортного сна.</p>

		<div class="clear"></div>
		'
	),
	
	array(
		'address' => 'show_room_rostov_na_donu',
		'name_h1' => 'СКОРО ОТКРЫТИЕ ШОУ-РУМА В РОСТОВЕ-НА-ДОНУ',
		'name' => 'шоу-рума в Ростове-на-Дону',
		'date' => '27.03.2017',
		'title' => 'Фирменного шоу-рума MAGNIFLEX в Ростове-на-Дону',
		'description' => 'Фирменного шоу-рума MAGNIFLEX в Ростове-на-Дону',
		'keywords' => 'magniflex, магнифлекс, шоу-рума в Ростове-на-Дону',
		'preview_image' => '/img/news/photoeditorsdk-export.png',
		'desc' => 'Приглашаем к сотрудничеству салоны мебели и дизайнерские студии',
		'text' => '
		<style>
	
		</style>
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A751677f8d06c4c5a87965ddcf3488b0156ade4f86dabdc0af78a5fdaf02628d8&amp;width=100%25&amp;height=300&amp;lang=ru_UA&amp;scroll=true"></script>
<p>
<strong> ИП Драгунов Алексей Сергеевич</strong><br>
<strong>Адрес:</strong> г. Ростов-на-Дону, ул. Закруткина 2/2      <br>
<strong>Телефоны:</strong> 8-863-270-13-47, 8-863-223-96-19, 8-928-270-13-47   
<br>
<strong>E-MAIL:</strong>  magniflex.rostov@gmail.com<br>

Приглашаем к сотрудничеству салоны

Мебели и дизайнерские студии</p>

		<br><br>
		<img src="/img/news/photoeditorsdk-export.png" />
		<br><br>

		<div class="clear"></div>
		'
	),
	
	array(
		'address' => 'exhibition_salone_del_mobile_2017',
		'name_h1' => 'Приглашаем на выставку',
		'name' => 'Приглашаем на выставку',
		'date' => '10.03.2017',
		'title' => 'Приглашаем на выставку',
		'description' => 'Приглашаем на выставку',
		'keywords' => 'magniflex, магнифлекс, выставка',
		'preview_image' => '/img/news/salonedelmobile.jpg',
		'desc' => 'Приглашаем всех желающих посетить одну из самых крупных мировых мебельных выставок',
		'text' => '
		<style>
	
		</style>
		<p>Приглашаем всех желающих посетить одну из самых крупных мировых мебельных выставок: <strong>Salone del mobile 2017 Милан, Италия</strong></p>
		<p>Выставка будет проходить <b>с 4 – 9 апреля. Стенд фабрики Магнифлекс будет находиться в Зале 18 E27 F24</b>. Будут представлены новинки и самые последние разработки: <b>новые матрасы, новые подушки, новые аксессуары</b>, а также сенсационная система сна MagniSmartech, не имеющая аналогов в мире.</p>
		<p>Для тестирования <b>MagniSmartech</b> требуется предварительная запись, просьба направлять Ваши заявки на нашу электронную почту: <a href="mailto:sale@magniflex.ru" target="_blank">sale@magniflex.ru</a> и обязательно указать:</p>
		<ol>
			<li>ФИО</li>
			<li>Дни посещения выставки</li>
			<li>Контактный телефон (который будет на связи во время посещения выставки).</li>
		</ol> 
		<br><br>
		<img src="/img/news/salonedelmobile.jpg" />
		<br><br>

		<div class="clear"></div>
		'
	),
	
	array(
		'address' => 'sammit-g7',
		'name_h1' => 'Матрасы Magniflex для гостей саммита G7 в Японии',
		'name' => 'Матрасы Magniflex для гостей саммита G7 в Японии',
		'date' => 'июнь 2016',
		'title' => 'Матрасы Magniflex для гостей саммита G7 в Японии',
		'description' => 'Матрасы Magniflex для гостей саммита G7 в Японии',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '',
		'desc' => 'В свете предстоящего саммита «Большой Семерки» G7 в Японии, гостиница «Mampei» (Karuizawa), расположенная в сказочной горной местности, для обеспечения исключительного комфорта своим высокопоставленным гостям выбрала матрасы Magniflex',
		'text' => '
		<style>
		.hnb_gal span {
			width: 100%;
			display: inline-block;
			line-height: 0;
			margin: 0.5%;
			margin-bottom: 20px;
		}
		.boxer img {
			    width: inherit;
			width: 100%;
		}
		.hnb_gal p{
		    padding-bottom: 0;
			margin-bottom: 0;
			display: block;
			text-align: center;
			width: 100%;
			font-size: 14px;	
		}
		</style>
<p>
					В свете предстоящего саммита «Большой Семерки» G7 в Японии, гостиница «Mampei» (Karuizawa), расположенная в сказочной горной местности, для обеспечения исключительного комфорта своим высокопоставленным гостям выбрала матрасы Magniflex. 
<br><br>
Основанная в 1894 году, Mampei приобрела известность как одна из самых роскошных гостиниц Японии и местом отдыха королевской семьи. В этой гостинице останавливаются и крупные чиновники, и мировые знаменитости, такие как Джон Леннон и Йоко Оно.
				</p>
				<br><br>
					<div class="hnb_gal">
<p>Гостиница "Mampei". Лобби. </p>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/93605579.jpg" class="boxer relgallery" title="Гостиница «Mampei». Лобби. "  itemprop="contentUrl"> <img src="/img/news/93605579.jpg" alt="Гостиница «Mampei». Лобби. " itemprop="thumbnailUrl" /></a></span>
<p>Сотрудники выгружают матрасы Magniflex из грузовой машины</p>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/g7_1.jpg" class="boxer relgallery" title="Сотрудники выгружают матрасы Magniflex из грузовой машины"  itemprop="contentUrl"> <img src="/img/news/g7_1.jpg" alt="Сотрудники выгружают матрасы Magniflex из грузовой машины" itemprop="thumbnailUrl" /></a></span>
<p>Процесс выгрузки матрасов Magniflex</p>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/g7_2.jpg" class="boxer relgallery" title="Процесс выгрузки матрасов Magniflex"  itemprop="contentUrl"> <img src="/img/news/g7_2.jpg" alt="Процесс выгрузки матрасов Magniflex" itemprop="thumbnailUrl" /></a></span>
<p>Участники саммита G7</p>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/7-149450.jpg" class="boxer relgallery" title="Участники саммита G7"  itemprop="contentUrl"> <img src="/img/news/7-149450.jpg" alt="Участники саммита G7" itemprop="thumbnailUrl" /></a></span>
<p>Гостиница "Mampei". Лобби. </p>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/93606507.jpg" class="boxer relgallery" title="Гостиница «Mampei». Лобби. "  itemprop="contentUrl"> <img src="/img/news/93606507.jpg" alt="Гостиница «Mampei». Лобби. " itemprop="thumbnailUrl" /></a></span>
<p>Интерьер номера в отеле"Mampei"</p>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/g7_3.jpg" class="boxer relgallery" title="Интерьер номера в отеле «Mampei»"  itemprop="contentUrl"> <img src="/img/news/g7_3.jpg" alt="Интерьер номера в отеле «Mampei»" itemprop="thumbnailUrl" /></a></span>
<p>Интерьер номера в отеле "Mampei"</p>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/92595037.jpg" class="boxer relgallery" title="Интерьер номера в отеле «Mampei»"  itemprop="contentUrl"> <img src="/img/news/92595037.jpg" alt="Интерьер номера в отеле «Mampei»" /></a></span>
					</div>
				
		
				<div class="clear"></div>
		'
	),
	
	
	array(
		'address' => '30_let_pervogo_matrasa',
		'name_h1' => '30 лет со дня изобретения первого вакуумного матраса Magniflex',
		'name' => '30 лет со дня изобретения первого вакуумного матраса Magniflex',
		'date' => '01.07.2016',
		'title' => '30 лет со дня изобретения первого вакуумного матраса Magniflex',
		'description' => '30 лет со дня изобретения первого вакуумного матраса Magniflex',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '',
		'desc' => '30 лет назад в 1986 года именно компания Magniflex изобрела и запатентовала первый в мире вакуумный матрас',
		'text' => '
		<style>
		.hnb_gal span {
			width: 32%;
			height: 152px;
			display: inline-block;
			line-height: 0;
			margin: 0.5%;
		}
		.boxer img {
			    width: inherit;
			max-width: 233px;
		}
		</style>
<p>
					30 лет назад в 1986 года именно компания Magniflex изобрела и запатентовала первый в мире вакуумный матрас. Технология вакуумного сжатия позволяла уменьшить размер матраса в 10 раз, сохраняя при этом его внешний вид и ортопедические свойства. Это была настоящая революция. Гигиеничная, удобная упаковка, лишенная недостатков. Появилась возможность доставлять матрасы в самые экзотические страны, не переплачивая за транспортировку. 

И сейчас, спустя много лет, ВСЕ ортопедические матрасы и подушки Магнифлекс изготавливаются исключительно в Италии и упаковываются в вакуумную упаковку.
				</p>
				<br><br>
					<div class="hnb_gal">
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/01.jpg" class="boxer relgallery" title="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX"  itemprop="contentUrl"> <img src="/img/news/01.jpg" alt="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/02.jpg" class="boxer relgallery" title="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX"  itemprop="contentUrl"> <img src="/img/news/02.jpg" alt="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/03.jpg" class="boxer relgallery" title="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX"  itemprop="contentUrl"> <img src="/img/news/03.jpg" alt="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/04.jpg" class="boxer relgallery" title="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX"  itemprop="contentUrl"> <img src="/img/news/04.jpg" alt="Лежаки 30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX" itemprop="thumbnailUrl" /></a></span>
<span>
<img src="/img/news/logo_brevetto_en.jpg" alt="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX" itemprop="thumbnailUrl" />
</span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/05.jpg" class="boxer relgallery" title="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX"  itemprop="contentUrl"> <img src="/img/news/05.jpg" alt="Лежаки 30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX" itemprop="thumbnailUrl" /></a></span>


<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/06.jpg" class="boxer relgallery" title="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX"  itemprop="contentUrl"> <img src="/img/news/06.jpg" alt="Романтика. 30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX" itemprop="thumbnailUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/07.jpg" class="boxer relgallery" title="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX"  itemprop="contentUrl"> <img src="/img/news/07.jpg" alt="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX" itemprop="thumbnailUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/08.jpg" class="boxer relgallery" title="30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX"  itemprop="contentUrl"> <img src="/img/news/08.jpg" alt="Magniflex и 30 ЛЕТ СО ДНЯ ИЗОБРЕТЕНИЯ ПЕРВОГО ВАКУУМНОГО МАТРАСА MAGNIFLEX" itemprop="thumbnailUrl" /></a></span>

					</div>
				<br><br>
					<iframe style="max-width: 640px;margin: 0 auto;display: block;" width="640" height="480" src="https://www.youtube.com/embed/EgmOi-yN8VY" frameborder="0" allowfullscreen></iframe>

		

		
				<div class="clear"></div>
		'
	),
	
	
	
	array(
		'address' => 'buffon',
		'name_h1' => 'Джанлуиджи Буффон - официальное лицо Magniflex!',
		'name' => 'Джанлуиджи Буффон стал официальным лицом компании Magniflex!',
		'date' => '24.06.2016',
		'title' => 'Джанлуиджи Буффон стал официальным лицом компании Magniflex!',
		'description' => 'Джанлуиджи Буффон стал официальным лицом компании Magniflex!',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/news/buffon-magniflex.jpg',
		'desc' => 'Чемпион мира по футболу вратарь сборной Италии Джанлуиджи Буффон стал официальным лицом компании Magniflex',
		'text' => '
		
<p>
					Чемпион мира по футболу вратарь сборной Италии Джанлуиджи Буффон стал официальным лицом компании Magniflex!
<br>
Д. Буффон - живая легенда итальянского футбола, воплощает в себе истинные ценности Магнифлекс: страсть, настойчивость и неизменное стремление к совершенству.  
<br><br>
Вратарь номер 1 в мире выбирает Компанию номер 1 в индустрии сна.
				</p>
				
					<img src="/img/news/buffon-magniflex.jpg" alt="Джанлуиджи Буффон — официальное лицо Magniflex"><br><br>
					<img src="/img/stars-magniflex/stars-magniflex-48.jpg" alt="Джанлуиджи Буффон — официальное лицо Magniflex"><br><br>
					<img src="/img/news/14425286_773495659455475_8003684902688738198_o.jpg" alt="Джанлуиджи Буффон — официальное лицо Magniflex"><br><br>
					<img src="/img/stars-magniflex/stars-magniflex-60.jpg" alt="Джанлуиджи Буффон — официальное лицо Magniflex"><br><br>
					<img src="/img/stars-magniflex/stars-magniflex-44.jpg" alt="Джанлуиджи Буффон — официальное лицо Magniflex"><br><br>

		

		
				<div class="clear"></div>
		'
	),
	
	
	array(
		'address' => 'SALONE-DEL-MOBILE',
		'name_h1' => 'SALONE DEL MOBILE - ВЫСТАВКА В МИЛАНЕ',
		'name' => 'SALONE DEL MOBILE - ВЫСТАВКА В МИЛАНЕ',
		'date' => '12.04.2016',
		'title' => 'SALONE DEL MOBILE - ВЫСТАВКА В МИЛАНЕ',
		'description' => 'SALONE DEL MOBILE - ВЫСТАВКА В МИЛАНЕ',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/SALONE-DEL--MOBILE.jpg',
		'desc' => 'Этой весной с 12 по 17 апреля в экономическом центре Италии в Милане пройдет знаменитая выставка SALONE DEL MOBILE',
		'text' => '
		
<div class="left" >
					Этой весной с 12 по 17 апреля в экономическом центре Италии в Милане пройдет знаменитая выставка SALONE DEL MOBILE. Компания Magniflex приглашает всех желающих к нашему стенду E27-F24 в 18 павильоне. На площади более 2 000 квадратных метров Вашему вниманию будут представлены технологические разработки 2016 года.
					<br><br>

Smartech <br>
Среди новинок особое внимание привлекает матрас нового поколения Smartech - целая домашняя лаборатория для определения и создания идеальных условий для здорового сна. Умная система подключается к Вашему мобильному телефону и через приложение передает множество параметров, такие как сердцебиение, дыхание, температура и прочие. Данные накапливаются и анализируются, на их основе программа дает рекомендации и создает наилучшие условия сна именно для Вас. Возможно подключение к системе "Умный дом".
Многим людям будет полезна функция "антихрап": если во время сна человек начинает храпеть, система реагирует, начиная мягко менять пространственное положение матраса, вынуждая спящего менять и свою позу. В результате храп прекращается.
<br><br>
Чтобы самолично протестировать матрас Smartech на выставке в Милане, необходимо предварительно записаться, для этого отправьте нам письмо или позвоните.
				</div>
				<div class="right" >
					<img src="/img/SALONE-DEL--MOBILE.jpg" alt="SALONE DEL MOBILE 2016 - MAGNIFLEX">
				</div>
		

		
				<div class="clear"></div>
		'
	),
	
	
	array(
		'address' => 'magniflex-germany-lasvegas',
		'name_h1' => 'MAGNIFLEX НА МЕЖДУНАРОДНЫХ ВЫСТАВКАХ В Кельне И Лас-Вегас',
		'name' => 'MAGNIFLEX НА МЕЖДУНАРОДНЫХ ВЫСТАВКАХ В Кельне И Лас-Вегас',
		'date' => '18.01.2016',
		'title' => 'MAGNIFLEX НА МЕЖДУНАРОДНЫХ ВЫСТАВКАХ В Кельне И Лас-Вегас',
		'description' => 'MAGNIFLEX НА МЕЖДУНАРОДНЫХ ВЫСТАВКАХ В Кельне И Лас-Вегас',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/news/colonia2016_en1.jpg',
		'desc' => 'Magniflex приглашает на международные выставки в Германии IMM Cologne 2016 и США - Las Vegas Market',
		'text' => '
		
		<p>
		
Magniflex приглашает на международные выставки в Германии IMM Cologne 2016 и США - Las Vegas Market
<br />
С 18 по 24 января  на международной выставке в Германии IMM Cologne и с 24 по 28 января в Лас Вегасе будет представлен полный ассортимент нашей продукции, включая новинки 2016 года. Соединяя заботу о природе, комфорт и инновации, мы устанавливаем планку высочайшего качества отдыха, которого Вы не могли представить. Мы удивим Вас высочайшими технологиями для лучшего качества сна. Другим сложно, но не нам, ведь для Магнифлекс будущее начинается сегодня.
<br /> <br />
Мы ждем Вас Германия IMM Cologne Hall 9.1 aisle B - no. 023 
<br /> 
США, Las Vegas Market (IMC C-1532).
		</p>
		
		<!--<img src="/img/news/ENGkoln-mx-2016.jpg">-->
		<img src="/img/news/colonia2016_en1.jpg">
		
				<div class="clear"></div>
		'
	),

	array(
		'address' => 'magniflex-kitay',
		'name_h1' => 'MAGNIFLEX на международной выставке в Шанхае (Китай)',
		'name' => 'MAGNIFLEX на международной выставке в Шанхае (Китай)',
		'date' => '12.09.2015',
		'title' => 'MAGNIFLEX на международной выставке в Шанхае (Китай)',
		'description' => 'MAGNIFLEX на международной выставке в Шанхае (Китай)',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/news/12039052_618448498293526_8346622202839994041_o.jpg',
		'desc' => 'С 9-го по 12-е сентября в Шанхае (Китай) прошла известная выставка Shanghai exhibition - одно из главных событий в мире мебельных выставок Азии',
		'text' => '
		
		<p>
		
		С 9-го по 12-е сентября в Шанхае (Китай) прошла известная выставка
Shanghai exhibition - одно из главных событий в мире мебельных выставок Азии. Одним из самых важных участников стала компания Magniflex.
		
		</p>
		
		<div class="hnb_gal">
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/12010682_617973515007691_5100746275001171290_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/12010682_617973515007691_5100746275001171290_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/12015107_618448464960196_2437512095589767104_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/12015107_618448464960196_2437512095589767104_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/12017423_617973558341020_1676969293631407476_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/12017423_617973558341020_1676969293631407476_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/12017553_618448271626882_5893063174789569451_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/12017553_618448271626882_5893063174789569451_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/12027120_618448548293521_2114903563453259887_o.jpg" class="boxer relgallery" title=Матрасы"Магнифлекс на всех элитных пляжах Италии"  itemprop="contentUrl"> <img src="/img/news/small/12027120_618448548293521_2114903563453259887_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>


<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/12028722_618448118293564_7530732911609934274_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/12028722_618448118293564_7530732911609934274_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/12028799_617973655007677_5965319623304900825_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/12028799_617973655007677_5965319623304900825_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/12032820_618448334960209_6494018998442117238_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/12032820_618448334960209_6494018998442117238_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/12034247_618448348293541_1475247700164779669_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/12034247_618448348293541_1475247700164779669_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/12038783_618448391626870_2441646322264737045_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/12038783_618448391626870_2441646322264737045_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/12038930_618448244960218_7040634995630824005_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/12038930_618448244960218_7040634995630824005_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/12039052_618448498293526_8346622202839994041_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/12039052_618448498293526_8346622202839994041_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
		</div>
				<div class="clear"></div>
		'
	),

	array(
		'address' => 'matrasi-plyaj',
		'name_h1' => 'Матрасы Магнифлекс на  элитных пляжах Италии, Монако и на Ибице!',
		'name' => 'Матрасы Магнифлекс на элитных пляжах Италии, Монако и на Ибице!',
		'date' => '07.07.2015',
		'title' => 'Матрасы Магнифлекс на элитных пляжах Италии, Монако и на Ибице!',
		'description' => 'Рекламная кампании Магнифлекс на элитных пляжах',
		'keywords' => 'magniflex, магнифлекс',
		'preview_image' => '/img/news/12039052_618448498293526_8346622202839994041_o.jpg',
		'desc' => 'Magniflex - это не только ортопедические матрасы, но и Здоровье, стиль Жизни, Мода',
		'text' => '
		
		<p>
		
		Magniflex - это не только ортопедические матрасы, но и Здоровье, стиль Жизни, Мода.   <br />

Этим летом матрасы Магнифлекс представлены на всех элитных пляжах Италии, в клубе Blue Marlin на Ибице и на пляже в Монако lounge area Zelo’s Beach,!<br />

В самых светских и модных местах есть Магнифлекс. Все, кто дорожит своим здоровьем, кто любит вечеринки, хочет мало спать и высыпаться, выбирают MAGNIFLEX!<br />
		
		</p>
		
		<div class="hnb_gal">
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/10015006_10153328365144590_6901614689404190608_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/10015006_10153328365144590_6901614689404190608_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/10295346_10153328363604590_8236026107320299448_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/10295346_10153328363604590_8236026107320299448_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/10633630_10153301799289590_4581280804648862241_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/10633630_10153301799289590_4581280804648862241_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/10733797_10153361243749590_570205371931023248_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/10733797_10153361243749590_570205371931023248_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/10934083_10152815767170957_2363641632131019762_n.jpg" class="boxer relgallery" title=Матрасы"Магнифлекс на всех элитных пляжах Италии"  itemprop="contentUrl"> <img src="/img/news/small/10934083_10152815767170957_2363641632131019762_n.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>


<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/11144448_10153428011139590_9210817791203655468_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/11144448_10153428011139590_9210817791203655468_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/11163794_10153381076819590_1233020410994277577_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/11163794_10153381076819590_1233020410994277577_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/11224381_10152832686685957_8993187330546119646_n.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/11224381_10152832686685957_8993187330546119646_n.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/11227941_10152812992865957_8534004057581181714_n.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/11227941_10152812992865957_8534004057581181714_n.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/11336885_10153301800829590_6279951633314732344_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/11336885_10153301800829590_6279951633314732344_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>

<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/11393330_10153301800949590_3982504067638789009_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/11393330_10153301800949590_3982504067638789009_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
<span itemscope itemtype="http://schema.org/ImageObject"><a href="/img/news/11696589_10153366472779590_7219142895609020902_o.jpg" class="boxer relgallery" title="Caption"  itemprop="contentUrl"> <img src="/img/news/small/11696589_10153366472779590_7219142895609020902_o.jpg" alt="Матрасы Магнифлекс на всех элитных пляжах Италии" itemprop="Матрасы Магнифлекс на всех элитных пляжах ИталииUrl" /></a></span>
		</div>
				<div class="clear"></div>
		'
	),
	

	
	array(
		'address' => 'magniflex-i-lufthansa',
		'name_h1' => 'Magniflex и Lufthansa (Люфтганза)',
		'name' => 'Magniflex и Lufthansa (Люфтганза)',
		'date' => '26.05.2015',
		'title' => 'Magniflex и Lufthansa (Люфтганза)',
		'description' => 'Совместная акция компаний Magniflex и Lufthansa (Люфтганза)',
		'keywords' => 'Magniflex, Lufthansa',
		'preview_image' => '/img/news/magni-luft.jpg',
		'desc' => 'Именитый немецкий авиаперевозчик Lufthansa (Люфтганза) и компания Magniflex объявили о начале сотрудничества',
		'text' => '
				<div class="left" style="width:62%;">
					Именитый немецкий авиаперевозчик Lufthansa (Люфтганза) и компания Magniflex объявили о начале сотрудничества. 
				</div>
				<div class="right" >
					<img src="/img/news/magni-luft.jpg" alt="Lufthansa (Люфтганза) и Magniflex ">
				</div>
				<div class="clear"></div>
		'
	),
	
	
	array(
		'address' => 'vistavka-italya-2015',
		'name_h1' => 'МЕЖДУНАРОДНАЯ ВЫСТАВКА В МИЛАНЕ (ИТАЛИЯ)',
		'name' => 'Приглашаем на Международную выставку в Италии',
		'date' => '14.04.2015',
		'title' => 'Международная выставка в Милане (Италия) | Магнифлекс',
		'description' => 'Презентация новейшей разработки компании Magniflex - «УМНЫЙ МАТРАС» (SMARTECH)',
		'keywords' => 'матрасы Salon Del Mobila',
		'preview_image' => '/img/news/222_SMM_IT.jpg',
		'desc' => 'С 14 апреля по 19 апреля в Милане (Италия) пройдет знаменитая выставка Salon Del Mobile - одна из самых авторитетных мебельных выставок в мире',
		'text' => '
				<div class="left" style="width:62%;">
					С 14 апреля по 19 апреля в Милане (Италия) пройдет знаменитая выставка Salon Del Mobile - одна из самых авторитетных мебельных выставок в мире. В ней принимают участие только лучшие компании. 
					<br><br>
					Главное событие выставки, в области продукции для сна, - презентация новейшей разработки компании Magniflex - «УМНЫЙ МАТРАС» (SMARTECH). Над этой технологией наши специалисты работали последние 3 года.
					
					<br><br>

					Найти нас на выставке очень просто:  стенд Magniflex располагается в Зале 18 (Hall 18), Стенд (Stand) E 21-F 22. Наши сотрудники владеют английским, немецким, итальянским и русским языками. На стенде будут присутствовать сотрудники российского представительства Магнифлекс.<br><br>
					
					Адрес:<br>
					Federlegno Arredo Eventi spa<br>
					Foro Buonaparte 65<br>
					20121 Милан<br>
					Телефон для справок:   +7 (495) 792 16 93, +7 (495) 771 01 10.<br><br>
				</div>
				<div class="right" style="width:33%;">
					<img src="/img/news/222_SMM_IT.jpg" alt="Подарок на 8 марта от компании Магнифлекс!">
				</div>
				<div class="clear"></div>
		'
	),
	
	
		array(
		'address' => '25-skidka-merino',
		'name_h1' => '25% скидка на матрасы Merino',
		'name' => '25% скидка на матрасы Merino',
		'date' => '09.03.2015',
		'title' => '25% скидка на матрасы Merino',
		'description' => 'специальная акция в июле 2015',
		'keywords' => 'магнифлекс скидки, magniflex скидка',
		'preview_image' => '/img/news/e31-news.jpg',
		'desc' => 'Полежать, посидеть, посмотреть и потрогать руками',
		'text' => '
<br/><br/><br/><br/>
<p align="CENTER" style="margin-bottom:0in;"><font color="#ff0000"><font size="7"><b>РАС</b></font></font><font color="#bfbfbf"><font size="7"><b>ПРОД</b></font></font><font color="#008000"><font size="7"><b>АЖА</b></font></font></p><p align="CENTER" style="margin-bottom:0in;"><br>
</p><p align="CENTER" style="margin-bottom:0in;"><font size="5"><b>«ИЮНЬСКОЕ
ЛЕТО» </b></font><font color="#ff0000"><font size="5"><i><b>ВСЕГО
3 недели жарких цен!</b></i></font></font></p><p align="CENTER" style="margin-bottom:0in;"><br>
</p><p align="CENTER" style="margin-bottom:0in;"><font size="5"><b>СКИДКА
</b></font><font color="#ff0000"><font size="5"><b>-25</b></font></font><font color="#ff0000"><font size="5"><span lang="en-US" xml:lang="en-US"><b>%</b></span></font></font><font size="5"><span lang="en-US" xml:lang="en-US"><b>
</b></span></font><font size="5"><b>на модели:</b></font></p><p align="CENTER" style="margin-bottom:0in;"><br>
</p><p align="CENTER" style="margin-bottom:0in;"><font size="4"><b>МЕРИНО
МЕРИНОС 90х200</b></font></p><p align="CENTER" style="margin-bottom:0in;"><font size="4"><b>МЕРИНО
МЕРИНОС 160х200</b></font></p><p align="CENTER" style="margin-bottom:0in;"><a name="_GoBack" id="_GoBack"></a><font size="4"><b>МЕРИНО
МЕРИНОС 180х200</b></font></p><p align="CENTER" style="margin-bottom:0in;"><br>
</p><p align="CENTER" style="margin-bottom:0in;"><font color="#000000"><font size="5" style="font-size:20pt;"><b>БЕСПЛАТНАЯ
ДОСТАВКА ПО МОСКВЕ!</b></font></font></p><p align="CENTER" style="margin-bottom:0in;"><font color="#000000"><font size="5" style="font-size:20pt;"><b>ПОДЪЕМ
НА ЭТАЖ БЕСПЛАТНО!</b></font></font></p><p align="CENTER" style="margin-bottom:0in;"><font size="5" style="font-size:20pt;"><b>СРОК
СЛУЖБЫ МАТРАСА - ОТ 15 ЛЕТ!</b></font></p><p align="CENTER" style="margin-bottom:0in;"><font size="5" style="font-size:20pt;"><b>ГРАМОТНАЯ
ИНВЕСТИЦИЯ В ЗДОРОВЬЕ!</b></font></p><p align="CENTER" style="margin-bottom:0in;"><br>
</p><p align="CENTER" style="margin-bottom:0in;"><font color="#ff0000"><font size="4"><b>СПЕШИТЕ
ПРИОБРЕСТИ: АКЦИЯ ДЕЙСТВИТЕЛЬНА с 9-30
июня!</b></font></font></p><p align="CENTER" style="margin-bottom:0in;"><br>
</p><ul>
	<li><p align="CENTER" style="margin-bottom:0in;">Количество
	матрасов по акции ограничено.</p>
</li></ul><p align="CENTER" style="margin-left:0.5in;margin-bottom:0in;"><br>
</p><p align="CENTER" style="margin-bottom:0in;"><font color="#4a442a"><font size="4">Полежать,
посидеть, посмотреть и потрогать руками
матрасы можно в нашем официальном
шоу-руме прямо у метро и с бесплатной
парковкой для клиентов! Покупателям
шоу-рума дисконтные карты в подарок.</font></font></p><p align="CENTER" style="margin-bottom:0in;"><br>
</p><p align="CENTER" style="margin-bottom:0in;"><font color="#4a442a"><font size="4">Метро
Полянка Бродников переулок 10К2 792-16-93.</font></font></p><p style="margin-bottom:0in;  text-align: center;"><img border="0" height="445" width="623" src="/img/news/e31-news.jpg"><br>
</p>
				<div class="clear"></div>
		'
	),
	
	
	
	array(
		'address' => 'podarok-8-marta',
		'name' => 'ВСЕМ ПОКУПАТЕЛЯМ - ПОДАРОК В ЧЕСТЬ 8 МАРТА',
		'date' => '08.03.2015',
		'title' => 'Подарок на 8 марта от компании Magniflex | Магнифлекс',
		'description' => 'При покупке любого матраса Magniflex мы дарим Вам Подарочный Сертификат на маникюр + покрытие Shellac!',
		'keywords' => '8 марта, подарок, magniflex, магнифлекс',
		'preview_image' => '/img/img_8marta.jpg',
		'desc' => 'Подарок на 8 марта от компании Магнифлекс!',
		'text' => '
					<img src="/img/img_8marta.jpg" alt="Подарок на 8 марта от компании Магнифлекс!">
					Подарок на 8 марта от компании Магнифлекс:<br><br>

					При покупке любого матраса Magniflex мы дарим Вам <strong>Подарочный Сертификат</strong> на маникюр + покрытие Shellac!<br><br>

					 

					Срок действия акции:  с 24 февраля по 8 марта 2015 года включительно.<br><br>

					Условия акции: подарочный сертификат можно получить до 31 марта 2015 года включительно в шоу-руме Магнифлекс по адресу г. Москва, метро Полянка, Бродников переулок, д. 10, к. 2. Для получения необходимо предьявить оплаченную товарную накладную. Сертификат не является именным, а значит его можно дарить! Процедуры проводятся в студии ногтевого дизайна в центре Москвы.

		'
	),

	array(
		'address' => 'vystavka_mebel_2014_v_ekspotsentre',
		'name' => 'Выставка Мебель-2014 в Экспоцентре',
		'date' => '28.11.2014',
		'title' => 'Выставка Мебель-2014 в Экспоцентре | Новости Magniflex',
		'description' => 'Обзор выставки в Москве',
		'keywords' => 'выставка матрасы, экспоцентр матрасы',
		'preview_image' => '/img/news/vystavka-magniflex-02.jpg',
		'desc' => 'С 24 по 28 ноября прошла 26-ая Международная выставка «Мебель-2014» в Экспоцентре на Красной Пресне',
		'text' => '
					С 24 по 28 ноября прошла 26-ая Международная выставка «Мебель-2014» в Экспоцентре на Красной Пресне.  Фабрика Magniflex  является ежегодным участником выставки с 1995 года и, не изменяя добрым традициям, в этом году также приняла активное участие, представив на своем стенде новую элитную серию матрасов, которая пополнилась ровно на 7 разных моделей, а также продемонстрировала эксклюзивный матрас коллекции Tonino Lamborghini.
					<br><br>
					Основной целью представительство фабрики Магнифлекс ставило задачи в виде получения новых знакомств и контактов, а также демонстрацию новых коллекций матрасов. 
					<br><br>

					<div class="hnb_gal">
					<span itemscope itemtype="http://schema.org/ImageObject">
						<a href="/img/news/vystavka-magniflex-02.jpg" class="boxer" title="Стенд Магнифлекс на выставке Мебель 2014 в Москве" rel="gallery" itemprop="contentUrl"> <img alt="Стенд Магнифлекс на выставке Мебель 2014 в Москве" src="/img/news/vystavka-magniflex-02_mini.jpg" itemprop="thumbnailUrl"></a>
					</span>
					<span itemscope itemtype="http://schema.org/ImageObject">
						<a href="/img/news/vystavka-magniflex-01.jpg" class="boxer" title="Коллекция элитных матрасов Магнифлекс была представлена на выставке Мебель 2014 в Москве" rel="gallery" itemprop="contentUrl"> <img alt="Коллекция элитных матрасов Магнифлекс была представлена на выставке Мебель 2014 в Москве" src="/img/news/vystavka-magniflex-01_mini.jpg" itemprop="thumbnailUrl"></a>
					</span>
					<span itemscope itemtype="http://schema.org/ImageObject">
						<a href="/img/news/vystavka-magniflex-05.jpg" class="boxer" title=" Матрас и подушки Тонино Ламборджини (Магнифлекс) на выставке Мебель 2014" rel="gallery" itemprop="contentUrl"> <img alt=" Матрас и подушки Тонино Ламборджини (Магнифлекс) на выставке Мебель 2014" src="/img/news/vystavka-magniflex-05_mini.jpg" itemprop="thumbnailUrl"></a>
					</span>
					<span itemscope itemtype="http://schema.org/ImageObject">
						<a href="/img/news/vystavka-magniflex-06.jpg" class="boxer" title="Впервые в России были представлены образцы гелевых подушек Магнифлекс" rel="gallery" itemprop="contentUrl"> <img alt="Впервые в России были представлены образцы гелевых подушек Магнифлекс" src="/img/news/vystavka-magniflex-06_mini.jpg" itemprop="thumbnailUrl"></a>
					</span>




					</div>

					<h3>Обзор новинок, впервые представленых на выставке в России</h3>
					Матрасы коллекции <b>Classico</b> – матрасы претендуют на большую популярность, так как соответствуют новомодному дизайнерскому тренду флорентийской лилии, рисунок которой гармонично разместился на бортиках матраса по всему периметру. Коллекция состоит из трех матрасов:
					Rest 9 – 23 см, упругий. Rest 10 – 25 см, средней упругости. Rest 12 -  30 см – средней мягкости.
					В слоях матраса присутствует материал Memoform, Super Soft Fiber – что позволяет матрасу быть достаточно комфортным и ортопедическим.
					<br><br>
					Матрасы коллекции <b>Dolce Vita</b> – отличаются тем, что используют инновационную технологию в чехле матраса “Outlast” – которая позволяет сохранять комфортный уровень температуры на поверхности матраса, осуществляя постоянный теплообмен. В матрасах добавлена потрясающая опция по возможности регулирования жесткости для двух половинок матраса: съемный чехол на молнии легко расстегивается и внутренние блоки матраса можно переворачивать, достигая желаемого уровня упругости. 
					В коллекции представлены два матраса:
					 Comfort Plus 10 – 25 см, упругий/умеренно упругий,  Comfort Plus 12 -  30 см, мягкий/умеренно мягкий.
					<br><br>
					Матрасы коллекции <b>Magnigel</b> – использование в матрасе материала  Magnigel обеспечивает мягкость и свежесть, препятствуя излишнему перегреву во время сна и соответственно потовыделению. Съемный чехол на молнии легко расстегивается и позволяет менять внутренние блоки сторонами верх и низ, тем самым позволяя сделать матрас более упругим или мягким, в зависимости от желаемого уровня комфорта.
					В коллекции 3 модели: Freshgel 9 – 23 см, средней мягкости, Freshgel 10 – 25 см, средней мягкости/средней жесткости, Freshgel 12 – 30 см, мягкий/средней мягкости.
					<br><br>
					Матрасы коллекции <b>Impero</b> – предназначены для тех, кто ищет необычный матрас  и стремится к Американским размерам матрасов King Size, как во внешнем виде, так и по габаритам. В матрасе есть потрясающей мягкости и комфортности топпер (несъемный наматрасник), а также новый улучшенный материал Elioform Airyform, который обеспечивает высокий уровень циркуляции воздуха.
					В коллекции 3 модели: Imperiale 24 – 24  см, средней упругости, Imperiale 28 -  28  см, средней мягкости, Imperiale 33 – 33 см, мягкий.
					<br><br>
					Матрасы коллекции <b>Supremo</b> – трехмерный рисунок флорентийской лилии прямо на чехле матраса, который выполнен по технологии “Outlast“, обеспечивающей перманентный уровень температуры на поверхности матраса, осуществляя постоянный теплообмен и создавая комфортную атмосферу для тела. Матрас позволяет регулировать жесткость, так как чехол на молнии и легко  снимается, а половинки матраса легко переворачиваются (верх-низ).
					В коллекции одна модель: Magnificent-12 – 30 см, очень мягкий/умеренно мягкий.
					<br><br>
					Матрасы коллекции <b>Armonia</b> – трехмерный рисунок флорентийской лилии на чехле матраса на молнии, отдельный слой наматрасника Memoform, который увеличивает количество разных вариантов жесткости до 4  - позволяя удовлетворять любым требованиям по упругости матраса. Габариты согласно лучшим традициям King Size американских стандартов.
					В коллекции один матрас: 
					Exchange Memoform Dual – 32 см, средней упругости/упругий.
					<br><br>
					Матрасы коллекции <b>Virtuoso</b> – матрас изготавливается полностью вручную на заказ, сроки изготовления составляют 30 дней. Матрас состоит из летней и зимней сторон. С летней стороны имеются слои льна, шелка и хлопка, в зимней стороне: кашемир, верблюжья шерсть, шерсть мериноса и конский волос. Также в матрасе используются инновационные материалы, которых нет ни в одном матрасе: Memoform HD Airyform, Eliosoft Breeze, Memoform HD - что обеспечивает матрасу  несравнимый комфорт во время сна, свежесть, тепло с зимней стороны и одновременно хороший уровень циркуляции воздуха.
					В коллекции также одна топовая модель:  Virtus 30 – 30 см, средней мягкости.
					<br><br>

					Что можно выделить и на что обратить внимание. Несмотря на то, что новые модели позиционируются как элитный класс премиум сегмента, они достаточно доступны и почти все уже есть в наличии в Москве. Отличительные особенности новых моделей – это современные технологии производства тканей, новые инновационные материалы улучшенных свойств и качества, возможность снимать чехлы и менять внутренние блоки матрасов сторонами для чередования упругости согласно желаемому уровню комфорта. 

					<br><br>

					Выставка «Мебель-2014» прошла достаточно успешно и позволила обрести новых оптовых и розничных партнеров, найти новые знакомства и собрать очень лестные и приятные нам положительные отзывы.

					<br><br>
					Если Вы пропустили выставку или не имели возможности посетить наш стенд, приглашаем в единственный официальный <br><a href="/o-magniflex/show-room-matrasov/">ШОУ-РУМ</a>  представительства фабрики Магнифлекс, который находится в городе Москва, м. Полянка, Бродников переулок, 10К2. Также если Вы ищете сотрудничество, будем рады стать Вашим надежным и качественным поставщиком изысканных товаров для сна напрямую из Италии.		<div style="clear:both"></div>
						<br>
		'
	),
	array(
		'address' => 'priglashaem_na_vystavku_v_moskve',
		'name' => 'Приглашаем на выставку в Москве с 24 по 28 ноября',
		'date' => '20.09.2014',
		'title' => 'Выставка в Москве с 24 по 28 ноября | Новости Magniflex',
		'description' => 'Приглашаем на выставку матрасов в Москве!',
		'keywords' => 'выставка матрасы, экспоцентр матрасы',
		'preview_image' => '/img/news/map_mebel_rus.jpg',
		'desc' => 'Приглашаем Всех желающих на выставку в Москве в ЭКСПОЦЕНТР',
		'text' => '
					Приглашаем Всех желающих на выставку в Москве в ЭКСПОЦЕНТР. <br><br>
					Компания Magniflex представит свои товары (ортопедические матрасы и подушки, в том числе НОВЫЕ ЭЛИТНЫЕ МОДЕЛИ!)  в павильоне №2,  зал 1, стенд 21В44 <br><br>

					Получить бесплатный билет на выставку можно здесь: <noindex><a target="_blank" rel="nofollow" href="http://www.meb-expo.ru/ru/visitors/tickets/">http://www.meb-expo.ru/ru/visitors/tickets/</a></noindex> <br><br>


					В этом году на стенде Magniflex будет представлена модель матраса эксклюзивной марки Lamborghini - приглашаем покупателей и дилеров к сотрудничеству! <br><br>

					<img src="/img/news/map_mebel_rus.jpg" alt="магнифлекс выставка в Москве">

					<br><br>
					Название выставки:  "26-я международная выставка "Мебель, фурнитура и обивочные материалы"".<br><br>

					Работа выставки: <br>
					24 ноября – 27 ноября 2014 г. с 10.00 до 18.00<br>
					28 ноября 2014 г. с 10.00 до 16.00<br>
							<div style="clear:both"></div>
						<br>
		'
	),
	array(
		'address' => 'show-room',
		'name' => 'Шоу-рум Магнифлекс в Москве работает до поздна!',
		'date' => '12.09.2014',
		'title' => 'Шоу-рум Магнифлекс в Москве работает до поздна | Новости Magniflex',
		'description' => 'Изменение работы шоу-рума Магнифлекса',
		'keywords' => 'magniflex шоу-рум, магнифлекс шоу-рум',
		'preview_image' => '',
		'desc' => 'В августе 2014 года открылся центральный шоу-рум "Магнифлекс" в центре Москвы. В нем всегда выставлены образцы всех ортопедических матрасов и подушек Magniflex',
		'text' => '
					В августе 2014 года открылся центральный шоу-рум "Магнифлекс" в центре Москвы. В нем всегда выставлены образцы всех ортопедических матрасов и подушек Magniflex, представленные в России, в том числе и элитные серии. На всех матрасах можно полежать, лично убедится в качестве продукции компании.<br>
					<br>
					С сентября увеличено время работы шоу-рума - теперь к нам можно зайти после работы и спокойно, не торопясь, выбрать нужную Вам модель.<br>
					<br>
					<br>
					Шоу-рум располагается по адресу: г. Москва, м. Полянка, Бродников переулок, д.10, к.2.<br>
					<br>
					<br>
					Часы работы:<br>
					Понедельник-Четверг: с 9:30 до 20:00,<br>
					Пятница: с 9:30 до 19:00, <br>
					Суббота: с 11:00 до 19:00		<div style="clear:both"></div>
					<br>

		'
	),
	array(
		'address' => 'mezhdunarodnaya_vystavka_v_shankhae_kitay',
		'name' => 'Международная выставка в Шанхае (Китай)',
		'date' => '10.09.2014',
		'title' => 'Международная выставка в Шанхае (Китай) | Новости Magniflex',
		'description' => 'Компания Магнифлекс принимает участие в выставке в Шанхае',
		'keywords' => 'выставка матрасы китай',
		'preview_image' => '',
		'desc' => 'С 10 по 14 сентября Magniflex принимает участие в международной выставке в Китае - "FURNITURE CHINA"',
		'text' => '
					С 10 по 14 сентября Magniflex принимает участие в международной выставке в Китае - "FURNITURE CHINA". <br>
					Выставка пройдет в Шанхае, в Международном ЭкспоЦентре.<br>
					Мы занимаем павильон W1 - Booth D28.<br>
					<br>
					<br>
					Адрес:<br>
					Shanghai New International Expo Centre<br>
					2345 Longyang Road, Pudong New Area Shanghai P.R.C. 201204 		<div style="clear:both"></div>
					<br>
		'
	),
	array(
		'address' => 'vis_magniflex',
		'name' => 'Магнифлекс принимает участие в международной выставке в Милане',
		'date' => '26.04.2014',
		'title' => 'Магнифлекс принимает участие в международной выставке в Милане',
		'description' => 'Международная мебельная выставка в Милане',
		'keywords' => 'выставка матрасы италия',
		'preview_image' => '',
		'desc' => 'Компания Магнифлекс принимает участие в международной выставке в Милане!',
		'text' => '
					 Компания Магнифлекс принимает участие в международной выставке в Милане!
		'
	),
	array(
		'address' => 'tokio',
		'name' => 'Магнифлекс - официальный партнер марафона в Токио',
		'date' => '27.03.2014',
		'title' => 'Магнифлекс - официальный партнер марафона в Токио | Новости Magniflex',
		'description' => 'Компания Магнифлекс выступила официальным партнером марафона в Токио',
		'keywords' => 'марафон токио',
		'preview_image' => '',
		'desc' => 'Компания Магнифлекс выступила официальным партнером марафона в Токио (Япония)',
		'text' => '
			Компания Магнифлекс выступила официальным партнером марафона в Токио (Япония).		
		'
	),
	array(
		'address' => 'kansas_city_royals_vnov_vybrali_magniflex',
		'name' => 'KANSAS CITY ROYALS вновь выбрали MAGNIFLEX',
		'date' => '20.03.2014',
		'title' => 'KANSAS CITY ROYALS вновь выбрали MAGNIFLEX | Новости Magniflex',
		'description' => 'Магнифлекс - официальный спонсор KANSAS CITY ROYALS',
		'keywords' => 'спонсор KANSAS CITY ROYALS',
		'preview_image' => '/img/news/stars-magniflex-16.jpg',
		'desc' => 'Magniflex (Магнифлекс) продлил сотрудничество со знаменитой американской бейсбольной командой KANSAS CITY ROYALS, подписав новое соглашение',
		'text' => '
					Magniflex (Магнифлекс) продлил сотрудничество со знаменитой американской бейсбольной командой KANSAS CITY ROYALS, подписав новое соглашение. Nori Aoki, лидер команды, стал лицом компании Magniflex, вступив в ряды Magniflex Magni Sports. Magniflex (Магнифлекс) подтверждает в очередной раз свою ведущую роль в мире спорта, одновременно увеличивая присутствие торговой марке на рынке в Соединенных Штатах. <br>
					<br>
					<img width="377" src="/img/news/stars-magniflex-16.jpg" alt="Magniflex (Магнифлекс) продлил сотрудничество со знаменитой американской бейсбольной командой KANSAS CITY ROYALS" height="432"><br>		<div style="clear:both"></div>
					<br>
		'
	),
	array(
		'address' => 'bolshoy_uspekh_v_milane',
		'name' => 'Большой успех в Милане',
		'date' => '09.04.2013',
		'title' => 'Большой успех в Милане | Новости Magniflex',
		'description' => 'Магнифлекс удостоен высшей премии на выставке в Милане',
		'keywords' => 'magniflex награда, магнифлекс премия',
		'preview_image' => '',
		'desc' => 'Продукция Magniflex была удостоена премиями высшей категории в 3-х номинациях на всемирной выставке в Милане',
		'text' => '
					Продукция Magniflex была удостоена премиями высшей категории в 3-х номинациях на всемирной выставке в Милане.<br>
					<br>
					Компания представила удивительный стенд, на котором росли настоящие оливковые деревья, под сенью которых посетители могли протестировать матрасы и подушки итальянского лидера. А для настоящих ценителей спорта мы подготовили особый сюрприз - встречу с настоящими звездами итальянского спорта - форвардов национальной команды по регби: Sergio Parisse, Martin Castrogiovanni и Gonzalo Canale.		<div style="clear:both"></div>
					<br>
		'
	),
	array(
		'address' => 'prezentatsiya_magnigel_v_toronto_kanada_',
		'name' => 'Презентация Magnigel в Торонто (Канада)',
		'date' => '12.01.2013',
		'title' => 'Презентация Magnigel в Торонто (Канада) | Новости Magniflex',
		'description' => 'В торонто широкой общественности представлен матрас Magnigel Magniflex',
		'keywords' => 'magniflex magnigel',
		'preview_image' => '',
		'desc' => '12 января 2013 года на международной выставке в Торонто компания Magniflex (Магнифлекс) представила новые модели ортопедических матрасов и подушек',
		'text' => '
					12 января 2013 года на международной выставке в Торонто компания Magniflex (Магнифлекс) представила новые модели ортопедических матрасов и подушек, созданных на основе геля Magnigel - эксклюзивный инновационный материал, необыкновенно проницаемый, воздушный, дарящий свежесть. <br>
					<br>
					<br>
					<div style="clear:both"></div>
					<br>	
		'
	),
	
);



?>