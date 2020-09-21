<?php
	if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

	$contacts = array(
		array(
			'address' => 'shop',
			'parent_address' => '',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Контакты',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Контакты Magniflex | Магнифлекс',
			'description' => 'контакты, адреса, график работ, ассортимент магазинов, торгующих продукцией Магнифлекс',
			'keywords' => 'magniflex контакты, магнифлекс контакты',
			'text' => '

				<div class="hnb_contarea"></div>
			'
		),
		array(
			'address' => 'contacts',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Контакты',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Контакты Magniflex | Магнифлекс',
			'description' => 'контакты, адреса, график работ, ассортимент магазинов, торгующих продукцией Магнифлекс',
			'keywords' => 'magniflex контакты, магнифлекс контакты',
			'text' => '

				<div class="hnb_contarea">

<style>
.cont_newfirstshop {
    margin-top: 20px;
}

</style>

<h2 class="hnb_mytitlepag tac" >Официальный сайт и интернет-магазин</h2>
<img style="margin: 30px auto;display: block;" width="317px" class="replace-2x" src="/img/logo.png" alt="Magniflex – итальянские ортопедические матрасы и подушки" itemprop="contentUrl">
<p><b>Часы работы:</b> ежедневно, с 9:00 до 22:00.</p>
<p>
<b>Телефоны клиентской службы поддержки:</b><br>
+7 (495) 507 22 65,<br>
+7 (495) 989 11 32,<br>

<b>E-mail:</b> info@magniflex.ru<br></p>
<!--<p style="color:#d5282d">
			График работы шоу-рума на новогодние праздники: <br/>
                <span style="display: block; color: #000;">30 декабря: 10:00 - 21:00,<br></span>
                <span style="display: block; color: #000;">31 декабря: 10:00 - 17:00,<br></span>
                <span style="display: block;">1,2,3 января - выходные праздничные дни,<br></span>
                <span style="display: block; color: #000">4,5,6, января 10:00-21:00,<br></span>
                <span style="display: block;">7 января - выходной праздничный день,<br></span>
                <span style="display: block; color: #000">8,9 января: 10:00 - 21:00.</span>
			</p>-->

<p>Посетите наши фирменные магазины в Москве:</p>
<ul class="cont_newfirstshop">
	<li>
		<p>
			<b><a href="/o-magniflex/show-room-matrasov/">Флагманский шоу-рум на Полянке</a></b><br>
			Адрес:  г. Москва, метро Полянка, Бродников переулок, дом 10, корпус 2.<br>
			150 метров от входа в метро. Бесплатная парковка.<br>
			Режим работы: Пн. - Пт.: 9:30 - 21:00, Сб. - Вс.: 10:00 - 21:00<br>
			Телефон: +7 (495) 989-11-32
		</p>
	</li>

</ul>



<p>
<b>Банковские реквизиты:</b><br>
ООО «Русмани»<br>
ОГРН: 1097746239117; ИНН: 7723714225. Юридический адрес: 115035, Москва, Космодамианская набережная, дом 4/22, корпус А, помещение I, комната 8.<br><br>


Почему ООО называется «Русмани» , а не "Магнифлекс"?<br>

Отвечаем: ООО «Русмани»  - это юридическое лицо, а MAGNIFLEX или МАГНИФЛЕКС - товарный знак.  <br>

	Подробнее можно прочитать здесь - <a href="/o-magniflex/oficialnoe-predstavitelstvo-magniflex/">Единственное Официальное Представительство Магнифлекс в РФ</a> <br><br>
</p>
<p ><strong>Полезное</strong>
<br>
Интернет-магазин magniflex.ru был открыт в апреле 2005 года. За время его работы нами были обработаны десятки тысяч заказов со всей России. <br><br>


</p>





<div style="clear: both;"></div>				</div>
			'
		),


		array(
			'address' => 'adresa-magazinov',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Адреса Магазинов',
			'left_sidebar' => 'adresa-magazinov',
			'title' => 'Адреса магазинов Magniflex | Магнифлекс',
			'description' => 'Адреса, график работ, ассортимент магазинов, торгующих продукцией Магнифлекс',
			'keywords' => 'magniflex магазин, магнифлекс магазин',
			'text' => '
			<style>
				#map {
					width: 100%; height: 370px; padding: 10px;
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

<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">Магазины в Москве:</h2>
<ul class="cont_newfirstshop">
	<li>
		<p>
			<b><a href="/o-magniflex/show-room-matrasov/">Флагманский шоу-рум на Полянке</a></b><br>
			Адрес: м. Полянка, Бродников переулок, д.10, к.2<br>
			Режим работы: Пн - Пт: 9:30 - 21:00; Сб - Вс: 10:00 - 21:00<br>
			Телефон: +7 (495) 989-11-32
        </p>
        <!--<p style="color:#d5282d">
			График работы шоу-рума на новогодние праздники: <br/>
                <span style="display: block; color: #000;">30 декабря: 10:00 - 21:00,<br></span>
                <span style="display: block; color: #000;">31 декабря: 10:00 - 17:00,<br></span>
                <span style="display: block;">1,2,3 января - выходные праздничные дни,<br></span>
                <span style="display: block; color: #000">4,5,6, января 10:00-21:00,<br></span>
                <span style="display: block;">7 января - выходной праздничный день,<br></span>
                <span style="display: block; color: #000">8,9 января: 10:00 - 21:00.</span>
			</p>-->
	</li>

	<li>
		<p>
			<a href="/o-magniflex/russia-moscow/">Другие магазины Москвы и Московской области</a>
		</p>
	</li>
</ul>



<h2 style="    margin-top: 50px;" class="hnb_mytitlepag">Магазины в России</h2>

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


			 </span><br>
 <br>
		</p>

<div class="hnb_altawer">
			<div class="hnb_altawerlft">
				<div>
					<span>А</span>
					<a href="/o-magniflex/russia/abakan-khakasiya/">Абакан</a><br>
					<a href="/o-magniflex/russia/aleksin-tulskaya-obl/">Алексин</a><br>

					<a href="/o-magniflex/russia/arkhangelsk/">Архангельск</a><br>
				</div>

				<div>
					<span>Б</span>
					<a href="/o-magniflex/russia/balakovo-saratovskaya-obl/">Балаково</a><br>
					<a href="/o-magniflex/russia/belgorod/">Белгород</a><br>
					<a href="/o-magniflex/russia/bratsk/">Братск</a><br>

				</div>


				<div>
					<span>В</span>
					<a href="/o-magniflex/russia/vladikavkaz/">Владикавказ</a><br>
					<a href="/o-magniflex/russia/vladimir/">Владимир</a><br>
					<a href="/o-magniflex/russia/volgograd/">Волгоград</a><br>
					<a href="/o-magniflex/russia/voronezh/">Воронеж</a><br>
				</div>

				<div>
					<span>Г</span>
					<a href="/o-magniflex/russia/groznyy/">Грозный</a><br>

				</div>

				<div>
					<span>Е</span>
					<a href="/o-magniflex/russia/ekaterinburg/">Екатеринбруг</a><br>

				</div>



				<div>
					<span>К</span>
					<a href="/o-magniflex/russia/kabardino-balkariya/">Кабардино-Балкария</a><br>
					<a href="/o-magniflex/russia/kaliningrad/">Калининград</a><br>
					<a href="/o-magniflex/russia/kirov/">Киров</a><br>
					<a href="/o-magniflex/russia/krasnodar/">Краснодар</a><br>
					<a href="/o-magniflex/russia/krasnoyarsk/">Красноярск</a><br>
					<a href="/o-magniflex/russia/krim/">Крым</a><br>
					<a href="/o-magniflex/russia/kemerova/">Кемерово</a><br>
					<a href="/o-magniflex/russia/kursk/">Курск</a><br>
				</div>

				<div>
					<span>Л</span>
					<a href="/o-magniflex/russia/lipetsk/">Липецк</a><br>
				</div>


				<div>
					<span>Н</span>
					<a href="/o-magniflex/russia/nizhniy-novgorod/">Нижний Новгород</a><br>
					<a href="/o-magniflex/russia/nizhniy-tagil/">Нижний Тагил</a><br>
					<a href="/o-magniflex/russia/novosibirsk/">Новосибирск</a><br>

				</div>

				<div>
					<span>М</span>
					<a href="/o-magniflex/russia/mirnuy/">Мирный</a><br>
					<a href="/o-magniflex/moscow/">Москва</a><br>
					<a href="/o-magniflex/russia/moskovskaya-oblast/">Московская область</a><br>


				</div>




			</div>
			<div class="hnb_altawerrig">
				<div>
					<span>О</span>
					<a href="/o-magniflex/russia/orenburg/">Оренбург</a><br>

				</div>
				<div>
					<span>П</span>
					<a href="/o-magniflex/russia/perm/">Пермь</a><br>
					<a href="/o-magniflex/russia/penza/">Пенза</a><br>

				</div>

				<div>
					<span>Р</span>
					<a href="/o-magniflex/russia/rostov/">Ростов</a><br>
					<a href="/o-magniflex/russia/rostov-na-donu/">Ростов-на-Дону</a><br>

				</div>

				<div>
					<span>С</span>
					<a href="/o-magniflex/russia/sankt-peterburg/">Санкт-Петербург</a><br>
					<a href="/o-magniflex/russia/balakovo-saratovskaya-obl/">Саратов</a><br>
					<a href="/o-magniflex/russia/balakovo-saratovskaya-obl/">Саратовская обл.</a><br>

					<a href="/o-magniflex/russia/sochi/">Сочи</a><br>

					<a href="/o-magniflex/russia/staryy-oskol/">Старый Оскол</a><br>
					<a href="/o-magniflex/russia/syktyvkar/">Сыктывкар</a><br>
				</div>

				<div>
					<span>Т</span>
					<a href="/o-magniflex/russia/tambov/">Тамбов</a><br>
					<a href="/o-magniflex/russia/tver/">Тверь</a><br>
					<a href="/o-magniflex/russia/tomsk/">Томск</a><br>
					<a href="/o-magniflex/russia/tula/">Тула</a><br>
					<a href="/o-magniflex/russia/aleksin-tulskaya-obl/">Тульская обл.</a><br>
					<a href="/o-magniflex/russia/tyumen/">Тюмень</a><br>
				</div>

				<div>
					<span>У</span>
					<a href="/o-magniflex/russia/ulyanovsk/">Ульяновск</a><br>
					<a href="/o-magniflex/russia/ufa/">Уфа</a><br>

				</div>

				<div>
					<span>Х</span>
					<a href="/o-magniflex/russia/khabarovsk/">Хабаровск</a><br>

				</div>

				<div>
					<span>Ч</span>
					<a href="/o-magniflex/russia/chelyabinsk/">Челябинск</a><br>
					<a href="/o-magniflex/russia/cherepovic/">Череповец</a><br>

				</div>

				<div>
					<span>Ю</span>
					<a href="/o-magniflex/russia/yuzhno-sakhalinsk/">Южно-Сахалинск</a><br>
				</div>
				<div>
					<span>Я</span>
					<a href="/o-magniflex/russia/yalta/">Ялта</a><br>
				</div>



			</div>

		</div>
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



<strong>Magniflex.ru</strong>
<p>
В нашем интернет магазине представлены все модели ортопедических матрасов и подушек Магнифлекс, продающиеся в России. Весь товар имеется в наличии. Доставка по Москве осуществляется собственной транспортной службой, что позволяет нам доставлять товары на дом в день заказа точно в указанное время.
<br />

	<b>Часы работы:</b> ежедневно, с 9:00 до 22:00.<br /><br />
</p>

<h3>Доверьтесь специалистам</h3>

<p>
<b>Телефоны клиентской службы поддержки:</b><br />
+7 (495) 507 22 65,<br />
+7 (495) 989 11 32,<br />

<b>E-mail:</b> info@magniflex.ru</p>


<p>
<b>Банковские реквизиты:</b><br />
ООО «Русмани»<br />
ОГРН: 1097746239117; ИНН: 7723714225. Юридический адрес: 115035, Москва, Космодамианская набережная, дом 4/22, корпус А, помещение I<br /> комната 8.<br />


Почему ООО называется «Русмани» , а не "Магнифлекс"?<br />

Отвечаем: ООО «Русмани»  - это юридическое лицо, а MAGNIFLEX или МАГНИФЛЕКС - товарный знак.  <br />

	Подробнее можно прочитать здесь - <a href="/o-magniflex/oficialnoe-predstavitelstvo-magniflex/">Единственное Официальное Представительство Магнифлекс в РФ</a> <br /><br />
</p>


<p style="color: #666666; background-color: #ffffff; font-size: 12px;"><strong>Полезное</strong>
<br />
Интернет-магазин magniflex.ru был открыт в апреле 2005 года. За время его работы нами были обработаны десятки тысяч заказов со всей России. <br /><br />


</p>
<p><strong>Отправить нам сообщение</strong>

</p>


<div class="bx_mfeedback">
		<form id="mfeedback" action="/tools/form.php" method="POST" class="sf_form" onsubmit="return form_send(this);">
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
		<input class="checkout_button_order" type="submit" name="submit" value="Отправить" class="bt_blue big shadow">
	</form>
</div>


			'
		),
		array(
			'address' => 'show-room-matrasov',
			'parent_address' => 'o-magniflex',
			'parent_name' => 'О Магнифлекс',
			'name' => 'Шоу-рум',
			'left_sidebar' => 'contacts',
			'title' => 'Шоу-рум Magniflex (Магнифлекс) в Москве. Выставочный зал',
			'description' => 'Адрес, часы работы и другая актуальная информация главного шоу-рума Магнифлекс в России',
			'keywords' => ' матрасы magniflex в магазине, матрасы магнифлекс в магазине',
			'text' => '
				<style>
				
				.textPage.hnb_contarea .hnb_conttextright{
					max-width: 1600px;
				  }

				</style>

<div class="hnb_contarea">
<div class="hnb_conttextcrntbott sf_show_room">
<div class="show_room_wrapper">

<div  class="hnb_tymevork" itemscope itemtype="https://schema.org/ImageObject">
<img style="margin-top: 6px;margin-bottom: 5px;" src="/img/tymework.png" alt="Magniflex - Часы работы" itemprop="contentUrl" /><br />
<b itemprop="name">Часы работы</b><br />
<p class="show_center">Будни: 9:30 — 21:00<br />
Суббота, воскресенье: 10:00 — 21:00<br /></p>
<!--
<div class="sf_info" id="prod_similar_info">
			<p style="color:#d5282d">
			График работы шоу-рума на новогодние праздники: <br/>
                <span style="display: block; color: #000;">30 декабря: 10:00 - 21:00,<br></span>
                <span style="display: block; color: #000;">31 декабря: 10:00 - 17:00,<br></span>
                <span style="display: block;">1,2,3 января - выходные праздничные дни,<br></span>
                <span style="display: block; color: #000">4,5,6, января 10:00-21:00,<br></span>
                <span style="display: block;">7 января - выходной праздничный день,<br></span>
                <span style="display: block; color: #000">8,9 января: 10:00 - 21:00.</span>
			</p>
	</div>
-->




</div>

<div class="hnb_kontaktinfor" itemscope itemtype="https://schema.org/ImageObject">
<img src="/img/kontainfj.png" alt="Magniflex - контактная информация" itemprop="contentUrl" style="margin:0;"/><br />
<b itemprop="name">Контактная информация</b><br />

<p class="show_center">+7 (495) 989 11 32 <br />
E-mail: sale@magniflex.ru<br /></p>


</div>

<div class="hnb_addres" itemscope itemtype="https://schema.org/ImageObject">
<img style="
margin:0;
    margin-top: 16px;
" src="/img/addres.png" alt="Magniflex - адрес шоу-рума" itemprop="contentUrl"/><br />
<b itemprop="name">Адрес</b><br />

<p class="show_center">Москва, м. Полянка, <br />
Бродников переулок, д.10, к.2. <br />
(150 метров от метро) <br />
<a href="#yakonp2">схема проезда</a></p>

</div>

<div style="clear:both;"></div>

</div>

<br />

<!---------------------------------- akciya
<div class="sf_cat_text_btn">График работы шоу-рума на майские праздники:</div>
<div class="sf_info" id="prod_similar_info">
28 апреля (сб) - 9:30 - 21:00<br>
29, 30 апреля 10:00 - 21:00<br>
<span class="red">1 мая - выходной праздничный день</span><br />
2 мая - 10:00 - 21:00<br>
3, 4 мая - 9:30 - 21:00<br>
5, 6 мая (сб, вс) - 10:00 - 21:00<br>
7 мая - 9:30 - 21:00<br>
8 мая - 9:30 - 19:00 <br />
<span class="red">9 мая - выходной праздничный день</span><br />
</div>
------------------------------->




<hr class="hnb_myhrpageeny" />





<div class="show_room_text">
<h3>ШОУ-РУМ MAGNIFLEX</h3>
В самом центре Москвы всего в 2 минутах пешком от станции метро Полянка расположился уютный шоу-рум (выставочный зал) компании Магнифлекс. <br/>
 Вас с удовольствием встретят радушные сотрудники, угостят вкусным чаем и обязательно проконсультируют по всем-всем вопросам о матрасах и подушках! Вся продукция в наличии - Вы сможете на месте сделать заказ. Товары на дом Вам поможет бесплатно доставить наша транспортная служба.
<br /><br />
</div>

<div class="hnb_gal">
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/Magniflex-showroom-01.jpg" class="boxer relgallery" title="Шоу-рум Магнифлекс: представлены ортопедические матрасы всех моделей" itemprop="contentUrl"> <img src="/img/Magniflex-showroom-01_small.jpg" alt="Шоу-рум Magniflex: представлены ортопедические матрасы всех моделей" itemprop="thumbnailUrl"></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/Magniflex-showroom-02.jpg" class="boxer relgallery" title="Шоу-рум Магнифлекс: выбираем продукцию с комфортом" itemprop="contentUrl"> <img src="/img/Magniflex-showroom-02_small.jpg" alt="Шоу-рум Magniflex: выбираем продукцию с комфортом" itemprop="thumbnailUrl"></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/Magniflex-showroom-03.jpg" class="boxer relgallery" title="Шоу-рум Магнифлекс: только итальянская продукция" itemprop="contentUrl"> <img src="/img/Magniflex-showroom-03_small.jpg" alt="Шоу-рум Magniflex: только итальянская продукция" itemprop="thumbnailUrl"></a></span>
<span itemscope itemtype="https://schema.org/ImageObject"><a href="/img/Magniflex-showroom-04.jpg" class="boxer relgallery" title="Шоу-рум Магнифлекс: все модели подушек и матрасов - можно полежать и потрогать" itemprop="contentUrl"> <img src="/img/Magniflex-showroom-04_small.jpg" alt="Шоу-рум Magniflex: все модели подушек и матрасов - можно полежать и потрогать" itemprop="thumbnailUrl"></a></span>
<br>


</div>
<p>Интерьер шоу-рума Magniflex</p>

<br /><br />


<hr class="hnb_myhrpageeny" />
<div itemscope itemtype="https://schema.org/ImageObject">
<div class="show_room_text">
<h3 >МАТРАСЫ В ДВУСПАЛЬНОМ ВАРИАНТЕ</h3>
В шоу-руме Магнифлекс Вам предложат полежать на всех матрасах и подушках и получить возможность сделать наиболее правильный и подходящий выбор. Мы работаем, чтобы Вы хорошо спали.
<br>
<img src="/img/devmat1.jpg" width="80%" itemprop="contentUrl" alt="шоу рум магнифлекс - двуспальные матрасы">
</div>
</div>
<br><br>

<hr class="hnb_myhrpageeny" />
<div itemscope itemtype="https://schema.org/ImageObject">
<div class="show_room_text">
<h3 >БЕСПЛАТНЫЙ ПАРКИНГ, УДОБНОЕ ВРЕМЯ РАБОТЫ</h3>
Всем посетителям - удобный бесплатный паркинг в любое время.<br>
Чтобы быстро попасть на парковочное место - предупредите за несколько минут наших сотрудников по телефону <br />
Будни: 9:30 — 21:00<br />
Суббота, воскресенье: 10:00 — 21:00<br />

<img class="parking_align" src="/img/parking.png" alt="Magniflex - удобный бесплатный паркинг" itemprop="contentUrl">
</div>
</div>
<br /><br />
<hr class="hnb_myhrpageeny" />
<div class="show_room_text">
<h3  >КАРТА ПРОЕЗДА ОТ ЯНДЕКСА</h3>

г. Москва, м. Полянка, Бродников переулок, д.10, к.2.
</p>


<div id="yakonp" style="text-align:center; width: 700px;
margin: 0 auto;">

</div>
<br /><br />
<p style="text-align:center;">или посмотрите <a href="/shema-proezda.pdf" target="_blank">подробную схему проезда</a> к нам.</p>
<br /><br />

<img class="inval_align" src="/img/inval_shou.jpg" alt="Magniflex - мы соблюдаем международную конвенцию о правах инвалидов">
<br /><br />

Мы соблюдаем международную конвенцию о правах инвалидов.<br>
Для получения помощи инвалидам и лицам с ограниченными возможностями при посещении шоу-рума Магнифлекс, просим заранее предупреждать о визите по телефонам:<br>
+7 (495) 989 11 32</b><br>
Обеспечение сопровождения инвалидов и оказание необходимой помощи гарантировано.


<br /><br />
</div>
</div>
<div style="clear: both;"></div>

</div>
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





			

		<h2 class="hnb_mytitlepag">ФИРМЕННЫЕ МАГАЗИНЫ MAGNIFLEX  <br/>
(только в них представлена ВСЯ КОЛЛЕКЦИЯ МАТРАСОВ)</h2>


		<h3>Шоу-рум. Флагманский магазин Магнифлекс на Полянке</h3>
		<div class="show_wrapper_main">

 <a href="/img/magniflex-showroom.jpg"><img alt="Шоу-рум - флагманский магазин Магнифлес в Москве" src="/img/magniflex-showroom.jpg" style="width: 180px;"></a>
		<p >
	  В шоу-руме на Полянке Вы сможете протестировать продукцию компании Magniflex, полежать на всех матрасах и подушках.
      Подробная информация о магазине по ссылке: <a href="/o-magniflex/show-room-matrasov/">шоу-рум Magniflex</a>.
      <br />
			<br />
			Адрес:<br />
			 г. Москва, м. Полянка, Бродников переулок, дом 10, корпес 2. В 150 метрах от метро Полянка. Есть бесплатная парковка.<br />
			<br />
			Часы работы:<br />
Будни: с 9:30 до 21:00;<br>
Суббота, воскресенье: c 10:00 до 21:00.<br/><br/><br/>


Контактный телефон: +7 (495) 989 11 32<br />
<br/>
<!---------------praznik
<span class="red">
Шоу-рум работает в праздники:<br/>

5 ноября: с 10:00 до 19:00
</span>
----------------->



		</p>

		</div>




<div class="oficial_diller">


		<h3>Официальные дилеры (Москва и Московская область)</h3>

		<h3>Магазины в Москве и Московской области</h3>
		<div class="show_wrapper_main">
 <a href="https://www.magniflex.ru/o-magniflex/russia-moscow/"><img alt="Магазины Magniflex в Москве и области" src="/img/Moscow_map_.jpg" style="width: 200px;"></a>

			<p>
			Со списком всех магазинов в Москве и Московской области Вы можете ознакомится по ссылке:
<a href="https://www.magniflex.ru/o-magniflex/russia-moscow/">Магазины Magniflex в Москве и Московской области</a>
<br /><br />

		</p>



		<br /><br />
		<br /><br />
		<br /><br />
		<div style="clear: both;"></div>
	</div>
</div><div style="clear: both;">

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
				#google-map {
					width: 100%; height: 370px; padding: 10px;
				}
				.hnb_contarea{
					display:block;
				}
				.sr_sizes2{
					display: none;
				}
				@media screen and (max-width: 700px){
					// .textPage  {
					// 	min-width: 540px;
					// 	overflow-x: scroll;
					// }
					// .hnb_conttextright{
					// 	overflow: unset !important;
					// }
					// #wrap #content{
					// 	overflow-x: scroll;
					// 	min-width: 540px;
					// }
					#google-map {
						min-width: 540px;
					}
					body, .hnb_conttextright, #wrap #content{
						overflow: auto !important;
					}
					.hnb_altawer {
						min-width: 540px;
						overflow: auto hidden;
						width: 100%;
					}
					.hnb_conttextright{
						margin: 0;
						padding: 0 10px;
    						box-sizing: border-box;
					}
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

		<h2 class="hnb_mytitlepag2">Magniflex в России</h2>
		<div id="google-map"></div>

		<div class="hnb_altawer">
			<div class="hnb_altawerlft">
				<div>
					<span>А</span>
					<a href="/o-magniflex/russia/abakan-khakasiya/">Абакан</a><br />
					<a href="/o-magniflex/russia-aleksin/">Алексин</a><br />

					<a href="/o-magniflex/russia/russia-arkhangelsk/">Архангельск</a><br />
				</div>

				<div>
					<span>Б</span>
					<a href="/o-magniflex/russia-balakovo/">Балаково</a><br />
					<a href="/o-magniflex/russia-belgorod/">Белгород</a><br />
					<a href="/o-magniflex/russia/bratsk/">Братск</a><br />

				</div>


				<div>
					<span>В</span>
					<a href="/o-magniflex/russia-vladikavkaz/">Владикавказ</a><br />
					<a href="/o-magniflex/russia/vladimir/">Владимир</a><br />
					<a href="/o-magniflex/russia/volgograd/">Волгоград</a><br />
					<a href="/o-magniflex/russia-voronezh/">Воронеж</a><br />
				</div>

				<div>
					<span>Г</span>
					<a href="/o-magniflex/russia/groznyy/">Грозный</a><br />

				</div>

				<div>
					<span>Е</span>
					<a href="/o-magniflex/russia-ekaterinburg/">Екатеринбруг</a><br />

				</div>



				<div>
					<span>К</span>
					<a href="/o-magniflex/russia-kabardino-balkariya">Кабардино-Балкария</a><br />
					<a href="/o-magniflex/russia-kaliningrad/">Калининград</a><br />
					<a href="/o-magniflex/russia-kirov/">Киров</a><br />
					<a href="/o-magniflex/russia-krasnodar/">Краснодар</a><br />
					<a href="/o-magniflex/russia-krasnoyarsk/">Красноярск</a><br />
					<a href="/o-magniflex/russia-krim/">Крым</a><br />
					<a href="/o-magniflex/russia-kemerova/">Кемерово</a><br />
					<a href="/o-magniflex/russia-kursk/">Курск</a><br />
				</div>



			</div>




			<div class="hnb_altawerrig">
				<div>
					<span>Л</span>
					<a href="/o-magniflex/russia-lipetsk/">Липецк</a><br />
				</div>


				<div>
					<span>Н</span>
					<a href="/o-magniflex/russia-nizhniy-novgorod/">Нижний Новгород</a><br />
					<a href="/o-magniflex/russia-nizhniy-tagil/">Нижний Тагил</a><br />
					<a href="/o-magniflex/russia-novosibirsk/">Новосибирск</a><br />

				</div>

				<div>
					<span>М</span>
					<a href="/o-magniflex/russia/mirnuy/">Мирный</a><br />
					<a href="/o-magniflex/russia-moscow">Москва и Московская обл.</a><br />

				</div>
				<div>
					<span>О</span>
					<a href="/o-magniflex/russia-orenburg/">Оренбург</a><br />
					<a href="/o-magniflex/russia-omsk/">Омск</a><br />

				</div>
				<div>
					<span>П</span>
					<a href="/o-magniflex/russia-perm/">Пермь</a><br />
					<a href="/o-magniflex/russia-penza/">Пенза</a><br />

				</div>

				<div>
					<span>Р</span>
					<a href="/o-magniflex/russia-rostov/">Ростов</a><br />
					<a href="/o-magniflex/russia-rostov-na-dony/">Ростов-на-Дону</a><br />

				</div>

				<div>
					<span>С</span>
					<a href="/o-magniflex/russia-spb/">Санкт-Петербург</a><br />

					<a href="/o-magniflex/russia-sochi/">Сочи</a><br />
					<a href="/o-magniflex/russia-stavropol/">Ставрополь</a><br />
					<a href="/o-magniflex/russia-old-oskol/">Старый Оскол</a><br />
					<a href="/o-magniflex/russia-siktivkar/">Сыктывкар</a><br />
				</div>


			</div>

			<div class="hnb_altawerrig">

				<div>
					<span>Т</span>
					<a href="/o-magniflex/russia-tambov/">Тамбов</a><br />
					<a href="/o-magniflex/russia-tver/">Тверь</a><br />
					<a href="/o-magniflex/russia-tomsk/">Томск</a><br />
					<a href="/o-magniflex/russia-tyla/">Тула</a><br />
					<a href="/o-magniflex/russia-tyl-obl/">Тульская обл.</a><br />
					<a href="/o-magniflex/russia-tymen/">Тюмень</a><br />
				</div>

				<div>
					<span>У</span>
					<a href="/o-magniflex/russia-ulianovsk/">Ульяновск</a><br />
					<a href="/o-magniflex/russia-yfa/">Уфа</a><br />

				</div>

				<div>
					<span>Х</span>
					<a href="/o-magniflex/russia-xabarovsk/">Хабаровск</a><br />

				</div>

				<div>
					<span>Ч</span>
					<a href="/o-magniflex/russia-cheliabinsk/">Челябинск</a><br />
					<a href="/o-magniflex/russia-cherepovec/">Череповец</a><br />

				</div>

				<div>
					<span>Ю</span>
					<a href="/o-magniflex/russia-south-saxalinsk/">Южно-Сахалинск</a><br />
				</div>
				<div>
					<span>Я</span>
					<a href="/o-magniflex/russia-yalta/">Ялта</a><br />
				</div>



			</div>

		</div>

	</div>
			'
		),
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
			'address' => 'russia-aleksin',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 14;
           			var google_FirstCenter = 54.50806428;
	                var google_SecondCenter = 37.11640250;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон «Мадам Подушкина»</div>
									<div class="store-address-component store-address-component-address">ИП "Бобнева" </div>
									<div class="store-address-component store-address-component-address">г. Алексин, ул. Тульская, дом 136Д, ТЦ «Слобода», бутик 9</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">9:00 - 17:00 </div>
									<div class="store-address-component store-address-component-pone">8 (905) 111-11-07  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-arkhangelsk',
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
<b>Часы работы:</b><br />
с 10:00 до 18:00, выходной воскресение<br />
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
			'address' => 'russia-balakovo',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 14;
           			var google_FirstCenter = 52.02269179;
	                var google_SecondCenter = 47.82944950;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ООО «Хорс» - мультибрендовый магазин матрасов «За матрасом»</div>
									<div class="store-address-component store-address-component-address">Саратовская обл., г.Балаково, ул. Трнавская 24, ТЦ «Грин Хаус», 0-ой этаж </div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно с 10.00 до 21.00 ( без перерывов и выходных )</div>
									<div class="store-address-component store-address-component-pone">8(927)154-71-30</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-belgorod',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 11;
           			var google_FirstCenter = 50.59053079;
	                var google_SecondCenter = 36.59481350;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Матрас и Ко</div>
									<div class="store-address-component store-address-component-address">ул. Щорса 45 Д </div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">(4722) 37-44-38<br>8-951-156-35-18</div>
									<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos, Waterlattex, Pensiero 6, Naturalmente, Rest 9</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон Мебели "Вилла Деко" </div>
									<div class="store-address-component store-address-component-address">ул. Белгородского Полка, дом 62</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">8 (4722) 28-90-82 </div>
									<div class="store-address-component store-address-component-exposition">Работа по каталогам.</div>
								</div>
							</div>
                        </div>

                        <div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон итальянской мебели Viva Bene</div>
									<div class="store-address-component store-address-component-address">ул. Шаландина, 4, к. 1</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">+7 910 223 0 223<br>
                                    +7 910 323 0 727</div>
									<div class="store-address-component store-address-component-exposition">Standard Classico<br>Memo Gel Standard<br>NATURALMENTE 180x220<br>Pensiero 7 40x60<br>Rest 10 40x60<br>Memorie 8 40x60<br>Merinos 40x60</div>
								</div>
							</div>
						</div>

					</div>
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
			'address' => 'russia-vladikavkaz',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 11;
           			var google_FirstCenter = 43.03438980;
	                var google_SecondCenter = 44.66554750;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-address-component-address">г. Владикавказ, пр. Коста, дом 180 </div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">8 (929) 863-36-88</div>
								</div>
							</div>
						</div>
					</div>
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
			'address' => 'russia-voronezh',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 11;
           			var google_FirstCenter = 51.67975479;
	                var google_SecondCenter = 39.18726150;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
					
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ООО «Сны и сновидения»</div>
									<div class="store-address-component store-address-component-address">г. Воронеж, ул. Урицкого, дом 128  </div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Пн-Пт.: 11:00 - 20:00<br> Сб.: 11:00 - 18:00<br> Вс.: выходной.</div>
									<div class="store-address-component store-address-component-pone">+ 7 (952) 952-09-03<br> + 7 (473) 238-09-03<br> + 7 (473) 221-09-92<br> + 7 (952) 958-67-09 </div>
									<div class="store-address-component store-address-component-pone">Экспозиция: Rest 9 90x200, Merinos 90x200, Pensiero 7 90x200</div>
								</div>
							</div>
						</div>
						
						<div class="stores-address-container">
							<div class="store-address-container">
							<a style="    color: inherit;" href="/o-magniflex/russia/butik-ermitazh
/">
								<div class="store-address">
									<div class="store-address-component store-name">Интерьер-бутик «ЭРМИТАЖ»</div>
									<div class="store-address-component store-address-component-address">г. Воронеж, Плехановская, 41 — 1 этаж </div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">ежедневно 10:00 – 19:00 </div>
									<div class="store-address-component store-address-component-pone">+7 (473) 271‒71‒91</div>
									<div class="store-address-component store-address-component-pone">Экспозиция: Rest 10 90x200, Carezza 10 90x200</div>
								</div>
								</a>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Мебельный салон Юнион-Воронеж </div>
									<div class="store-address-component store-address-component-address">г. Воронеж, ул. Димитрова, дом 74 </div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">ПН-ПТ: 09:00-20:00<br>
СБ: 10:00-19:00<br>
ВС: выходной </div>
									<div class="store-address-component store-address-component-pone">8 (473) 226-58-37</div>
								</div>
							</div>
						</div>
					</div>
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
<br />
<img style="padding-left: 0;" src="/img/logo_sonie.jpg" alt="Салон Сны и сновидения - официальный дилер Magniflex в Воронеже"><br />
<strong>ООО «Сны и сновидения»</strong><br />
<strong>Адрес:</strong> г. Воронеж, ул. Урицкого, дом 128
<br />
<strong>Сайт:</strong> www.sonie.ru<br />
<strong>Режим работы:</strong><br />
Часы работы: <br />
Пн-Пт.: 11:00 - 20:00, Сб.: 11:00 - 18:00, Вс.: выходной.<br />
<strong>Телефоны для справок</strong>: <br />
+ 7 (952) 952-09-03; + 7 (473) 238-09-03; + 7 (473) 221-09-92; + 7 (952) 958-67-09
<br /><br />
<br />


<strong>Мебельный салон Юнион-Воронеж </strong><br />
<strong>Адрес:</strong> г. Воронеж, ул. Димитрова, дом 74.
<br />
<strong>e-mail:</strong> unionvr@yandex.ru<br />
<strong>Режим работы:</strong><br />
Часы работы: <br />
ПН-ПТ: 09:00-20:00, <br />
СБ: 10:00-19:00, <br />
ВС: выходной.

<br />
<strong>Телефоны для справок:</strong><br />
8 (473) 226-58-37<br />
Есть образцы всех матрасов<br /><br /><br />


<a style="    color: inherit;" href="/o-magniflex/russia/butik-ermitazh/"><strong>Интерьер-бутик «ЭРМИТАЖ»</strong></a><br />
<strong>Адрес:</strong> г. Воронеж, Плехановская, 41 — 1 этаж
<br />
<strong>e-mail:</strong> hermitage-boutique.ru<br />
<strong>Режим работы:</strong><br />
Часы работы: <br />
ежедневно 10:00 – 19:00

<br />
<strong>Телефоны для справок:</strong><br />
+7 (473) 271‒71‒91<br />
Есть образцы всех матрасов<br /><br />
<hr class="hnb_myhrled">



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
<b>Часы работы:</b><br />
с 9:00 до 19:00 без выходных<br />
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
			'address' => 'russia-ekaterinburg',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 12;
           			var google_FirstCenter = 56.841186;
	                var google_SecondCenter = 60.629626;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">

						<div class="stores-address-container">
							<div class="store-address-container">
								<a target="_blank" href="http://ekb.magniflex.ru/">
								<div class="store-address">
									<div class="store-address-component store-name">Дилерский шоу-рум Magniflex</div>
									<div class="store-address-component store-address-component-address">г.Екатеринбург, проспект Ленина д.56</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">понедельник-пятница с 10.00 до 20.00<br>
																суббота-воскресение с 11.00 до 19.00</div>
									<div class="store-address-component store-address-component-pone">8 (343) 346-93-10<br> моб: 8 (912) 24-58-898. </div>
									<br><br>
									<img width="100%" src="/img/IMG_4193.jfif">
								</div>
							</a>
							</div>

						</div>
<div class="stores-address-container">
						<div class="store-address-container">
							<a target="_blank" href="/o-magniflex/russia/diron-italian-interiors/">
							<div class="store-address">
								<div class="store-address-component store-name">Студия мебели "Римини"</div>
								<div class="store-address-component store-address-component-address">г. Екатеринбург, ул.Малышева,15 </div>
							</div>
							<div class="expanded-address">
								<div class="store-address-component store-address-component-pone">Часы работы: Пн-Пт.: с 10:00 - 19:00, Сб.: с 12:00 - 17:00, Вс.: выходной.
															</div>
								<div class="store-address-component store-address-component-pone">Тел.: +7 (343) 344-60-00  </div>

								<div class="store-address-component store-address-component-pone">Экспозиция: матрасы 80х190 Merino, Pensiero 7, Memorie 8, Naturalmente, детский матрас B-Bamboo 60x120.
Образцы: FreshGel 10, Rest 10, Stretching 10, New Comfort Plus 10, Exchange Memoform Dual, Virtus.</div>
<br><br>
									<img width="100%" src="/img/CZTN4275.jfif">
									<img width="100%" src="/img/MYTL7371.jfif">
							</div>
						</a>
						</div>

					</div>




					<div class="stores-address-container">
							<div class="store-address-container">
								<a target="_blank" >
								<div class="store-address">
									<div class="store-address-component store-name">"FazaSna"</div>
									<div class="store-address-component store-address-component-address">г. Екатеринбург, ул. 40 лет Комсомола, 38н, ТЦ "Гулливер", корп. Б, 2 этаж.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Часы работы: ежедневно с 10:00 - 21:00
																</div>
									<div class="store-address-component store-address-component-pone">Тел.: 8 800 201-20-83</div>
									<div class="store-address-component store-address-component-pone">Экспозиция: Rest 9 (90*200) и Pensiero 8 (90*200)</div>
									<div class="store-address-component store-address-component-pone">Образцы матрасов 40*60: FreshGel 10, Comfort Dual 10, Pensiero 7, Waterlattex merino, Merino (Merinos)</div>
									<br><br>
									<img width="100%" src="/img/фото зоны магнифлекс в ЕКБ.jpg">
								</div>
							</a>
							</div>

						</div>

						<div class="stores-address-container">
							<div class="store-address-container">
								<a target="_blank" href="/o-magniflex/russia/diron-italian-interiors/">
								<div class="store-address">
									<div class="store-address-component store-name">Салон "Diron Italian Interiors"</div>
									<div class="store-address-component store-address-component-address">г. Екатеринбург, ул. Студенческая, дом 11, МЦ "Галерея"</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Часы работы: ежедневно с 10:00 - 20:00
																</div>
									<div class="store-address-component store-address-component-pone">Тел.: +7 (343) 382-17-05, +7 (908) 639-07-38  </div>
									<div class="store-address-component store-address-component-pone">Сайт: <a href="http://diron-home.com">http://diron-home.com </a></div>
									<div class="store-address-component store-address-component-pone">Экспозиция: Naturalmente 90х200, Rest 10 90х200, Freshgel 10 80х200, New Comfort Plus 10 80х200, Exchange Memoform Dual 160х200, Memorie 8 40x60, Stile 8 40x60, Stretching 9 40x60.</div>
									<br><br>
									<img width="100%" src="/img/IMG_5076-27-06-19-10-56.jfif">
								</div>
							</a>
						</div>


						</div>

					</div>



				</div>
			</div>



			'
		),
array(
			'address' => 'russia-kabardino-balkariya',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 8;
           			var google_FirstCenter = 43.48456580;
	                var google_SecondCenter = 44.14151550;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салоны «ОРТЕСС» </div>
									<div class="store-address-component store-address-component-address">г. Нальчик, ул. Головко, дом 12а</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно 9:00 - 19:00 (без перерывов)</div>
									<div class="store-address-component store-address-component-pone">8 (88662) 42-13-74 </div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салоны «ОРТЕСС» </div>
									<div class="store-address-component store-address-component-address">г. Нальчик, ул. Ногмова, дом 80</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно 9:00 - 19:00 (без перерывов)</div>
									<div class="store-address-component store-address-component-pone">8 (88662) 72-22-12</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салоны «ОРТЕСС» </div>
									<div class="store-address-component store-address-component-address">г. Нальчик, ул. Пачева, дом 50</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно 9:00 - 19:00 (без перерывов)</div>
									<div class="store-address-component store-address-component-pone"> 8 (928) 700-85-98</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салоны «ОРТЕСС» </div>
									<div class="store-address-component store-address-component-address">г. Нальчик, ул. Богдана Хмельницкого, дом 41</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно 9:00 - 19:00 (без перерывов)</div>
									<div class="store-address-component store-address-component-pone">8 (928) 720-58-41</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салоны «ОРТЕСС» </div>
									<div class="store-address-component store-address-component-address">г. Нальчик, Затишье, район травмпункта</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно 9:00 - 19:00 (без перерывов)</div>
									<div class="store-address-component store-address-component-pone">8 (938) 076-65-34</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салоны «ОРТЕСС» </div>
									<div class="store-address-component store-address-component-address">г. Прохладный, ул. Ленина, дом 72</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно 9:00 - 19:00 (без перерывов)</div>
									<div class="store-address-component store-address-component-pone">8 (928) 915-99-48</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салоны «ОРТЕСС» </div>
									<div class="store-address-component store-address-component-address">г. Терек, ул. Ленина, дом 37</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно 9:00 - 19:00 (без перерывов)</div>
									<div class="store-address-component store-address-component-pone">8 (938) 915-71-22</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салоны «ОРТЕСС» </div>
									<div class="store-address-component store-address-component-address">г. Баксан, ул. Ленина, дом 5</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно 9:00 - 19:00 (без перерывов)</div>
									<div class="store-address-component store-address-component-pone">8 (929) 885-12-41</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салоны «ОРТЕСС» </div>
									<div class="store-address-component store-address-component-address">г. Нарткала, ул. Шекихачева, дом 3</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно 9:00 - 19:00 (без перерывов)</div>
									<div class="store-address-component store-address-component-pone">8 (928) 694-55-21</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-kaliningrad',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 54.7353841;
	                var google_SecondCenter = 20.4707621;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-address-component-address">г. Калининград, ул. Красная 115 </div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Пн - пт с 10:00 – 19:00<br>
Сб: 11:00 – 18:00<br>
Вс: выходной </div>
									<div class="store-address-component store-address-component-pone">+7 (4012) 93-40-86</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),
array(
			'address' => 'russia-kirov',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 58.60059026;
	                var google_SecondCenter = 49.67952150;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Мебельный салон "Алькасар"</div>
									<div class="store-address-component store-address-component-address">ООО "Идальго" </div>
									<div class="store-address-component store-address-component-address">ул. Герцена, дом 9.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone"></div>
									<div class="store-address-component store-address-component-pone">8 (8332) 64-72-13<br> 64-15-94, 8 (963) 000-51-51</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),

		array(
			'address' => 'russia-krasnodar',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 8;
           			var google_FirstCenter = 44.6588137;
	                var google_SecondCenter = 38.9774235;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">

<a style="    color: inherit;" href="/o-magniflex/russia/salon-somovo/">
								<div class="store-address">
									<div class="store-address-component store-name">Салон «СОМОВО МЕБЕЛЬ/CLASSICO ITALIANO»</div>
									<div class="store-address-component store-address-component-address">г. Краснодар, ул. Дзержинского 100, Мегацентр «Красная Площадь», 3 этаж, секция С-167 </div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">с понедельника по воскресенье с 10:00 до 22:00 </div>
									<div class="store-address-component store-address-component-pone">+7-967-311-34-74<br>  +7-918-024-63-36</div>
								</div>
								</a>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">СТУДИЯ МАТРАСОВ "ГУДСОН" ИП ШАМОВ</div>
									<div class="store-address-component store-address-component-address">г. Краснодар, ул.Тополиная, д. 36</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Режим работы: Пн. - Пт.  с 9:00 - 17:00</div>
									<div class="store-address-component store-address-component-pone">Тел.: +7 (989) 829-00-29</div>
									<div class="store-address-component store-address-component-exposition">На экспозиции: Merino, Orthomemo merino, Pensiero 7, Stile 7, Rest 9.</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон "Матрасы и Аксессуары"</div>
									<div class="store-address-component store-address-component-address">Краснодарский край, поселок Лазаревский, ул. Калараш, дом 145</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone"></div>
									<div class="store-address-component store-address-component-pone">8 (8622) 36-24-42<br> 8 (918) 916-56-75</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>



			'
		),
array(
			'address' => 'russia-krasnoyarsk',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 55.99744678;
	                var google_SecondCenter = 92.81109650;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Студия мебели "Матрасы и Кровати"</div>
									<div class="store-address-component store-address-component-address">г. Красноярск, ул. Красной Звезды, д. 1</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно с 9 до 21 часов без обеда и выходных</div>
									<div class="store-address-component store-address-component-pone">8 (391) 297-28-11<br> 8 (923) 334-05-55 </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),

array(
			'address' => 'russia-krim',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 44.97463480;
	                var google_SecondCenter = 34.10127850;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон мебели «Italine»</div>
									<div class="store-address-component store-address-component-address">Республика Крым, Симферополь, ул. Кечкеметская, дом 13</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone"></div>
									<div class="store-address-component store-address-component-pone">8 (3652) 70-60-36<br> 8 (978) 787-73-45<br> 8 (978) 916-65-85</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),

array(
			'address' => 'russia-kemerova',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 12;
           			var google_FirstCenter = 55.3472818;
	                var google_SecondCenter = 86.1215796;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">МТЦ "Сити Дом"</div>
									<div class="store-address-component store-address-component-address">ул.Терешковой, дом 41</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone"></div>
									<div class="store-address-component store-address-component-pone">8 (384) 290-05-28</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Торговый центр "Макси дом"</div>
									<div class="store-address-component store-address-component-address">Проспект Советский, дом 25А</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone"></div>
									<div class="store-address-component store-address-component-pone">8 (384) 290-05-28</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),

array(
			'address' => 'russia-kursk',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 51.741148;
	                var google_SecondCenter = 36.197282;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Мебельный салон "LION"	</div>
									<div class="store-address-component store-address-component-address"> г. Курск, ул. Мирная, д.11</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">пн-пт 10:00 - 19:00<br> суббота до 17:00<br> воскресенье - выходной</div>
									<div class="store-address-component store-address-component-pone">8(4712) 708-007</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-lipetsk',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 52.63459729;
	                var google_SecondCenter = 39.66315300;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Мебельный салон Юнион-Липецк</div>
									<div class="store-address-component store-address-component-address">г. Липецк, пл. Заводская, дом 1. </div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">ПН-ПТ: 10:00-20:00<br> СБ: 10:00-19:00<br> ВС: выходной</div>
									<div class="store-address-component store-address-component-pone">8 (4742) 36-49-49</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),

array(
			'address' => 'russia-nizhniy-novgorod',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 56.33024077;
	                var google_SecondCenter = 43.99618550;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Мебельный салон "CORSO ITALIA" </div>
									<div class="store-address-component store-address-component-address">ул. Рождественская, дом 13, БЦ "Муравей", 2-ой этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">ПН-СБ 10:00-19:00<br> ВС выходной </div>
									<div class="store-address-component store-address-component-pone">8 (831) 461-80-94<br> (831) 461-81-94<br> (831) 461-80-93</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ИП Шарова Л.А.</div>
									<div class="store-address-component store-address-component-address"></div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">8.00-22.00 без выходных </div>
									<div class="store-address-component store-address-component-pone">8 (831) 415-51-52<br> 415-78-67</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Мебельный салон Юнион-Нижний Новгород</div>
									<div class="store-address-component store-address-component-address">Мебельный салон Юнион-Нижний Новгород</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">ПН-ПТ: 10:00-20:00<br> СБ: 10:00-19:00<br> ВС: выходной </div>
									<div class="store-address-component store-address-component-pone">277-51-95<br> 8 (831) 246-82-70</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),

array(
			'address' => 'russia-nizhniy-tagil',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 57.9183559;
	                var google_SecondCenter = 59.9787505;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ИП Корнев Д.Н.</div>
									<div class="store-address-component store-address-component-address">ул. Октябрьской революции, дом 66, ЦУМ, 5 этаж, МАТРАС-ЦЕНТР</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone"></div>
									<div class="store-address-component store-address-component-pone">8 (912) 287-33-77</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-novosibirsk',
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
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 9;
           			var google_FirstCenter = 55.05485678;
	                var google_SecondCenter = 82.91155450;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<a href="/o-magniflex/russia/novosibirsk-matrasu-krovati">
								<div class="store-address">
									<div class="store-address-component store-name">Салон "Матрасы и Кровати"</div>
									<div class="store-address-component store-address-component-address">ул. Красный проспект, дом 99, "Центр Здорового Сна"</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Понедельник - Пятница: 11.00-19.00; <br>
Суббота: 11.00-18.00;<br>
Воскресенье: 11.00 до 17.00 </div>
									<div class="store-address-component store-address-component-pone">8 (383) 220-88-10, <br>8 (913) 987-82-49</div>
								</div>
								</a>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон "Ортофлекс"</div>
									<div class="store-address-component store-address-component-address">ул. Станционная, дом 62, Салон "Матрасы и Кровати", 1 эт</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Понедельник - Пятница: 10.00-20.00;<br>
Суббота: 11.00-16.00;<br>
Воскресенье: выходной.</div>
									<div class="store-address-component store-address-component-pone">8 (383) 380-08-16,<br> 380-95-16</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name"></div>
									<div class="store-address-component store-address-component-address">ул. Светлановская, дом 50, ТВК "Большая Медведица", 2 этаж, отдел "Ортофлекс"</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">10:00-21:00, без обеда и выходных</div>
									<div class="store-address-component store-address-component-pone">8 (383) 380-81-16
</div>
								</div>
							</div>
						</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Студия «Мебели Лекса» </div>
									<div class="store-address-component store-address-component-address">ул. Фрунзе, д.228</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Понедельник - Суббота: 10:00 – 19:00,<br>
Воскресенье: выходной</div>
									<div class="store-address-component store-address-component-pone">+7 (383) 362-28-30, <br>+7 (913) 921-92-10
</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'mirnuy',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Мирный',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Мирный | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Мирный',
			'keywords' => 'матрасы в магнифлекс в Мирный, magniflex Мирный, магнифлекс Мирный',
			'text' => '
				

					<h2 class="hnb_mytitlepag">MAGNIFLEX В ГОРОДЕ МИРНЫЙ (Р-КА САХА)</h2>
<div class="hnb_mytitlepagcity">
В городе Мирноый продукцию компании Магнифлекс можно приобрести в следующих  магазинах:
<br />
<br />



<strong>Адрес:</strong> город Мирный, ул звездная 48\2


<br /><br />
<strong>Телефоны для справок:</strong><br />
8 (914) 257-98-89
<br /><br /><br />


<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=IQtuyHpqkLzmspBRsNsSZr9EkbrbbnIp&amp;width=100%&amp;height=400&amp;lang=ru_UA&amp;sourceType=constructor&amp;scroll=true"></script>



</div>

					<!--{bottom_sidebar}-->

					</div>
				
			'
		),
		array(
			'address' => 'russia-moscow',
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
					 padding: 10px;
				}
				@media screen and (max-width: 700px) {
					.hnb_catlogsection{
						display: none;
					}
					.container-stores-page{
						position: relative;
						height: auto;
						overflow: hidden;
						top: unset;
					}
					.container-stores-element{
						position: relative;
    					height: auto;
					}
					.stores-results-container{
						display: flex;
						flex-wrap: wrap;
						height: auto;
					}
					#google-map {
						padding: 10px;
						position: relative;
						height: 300px;
						margin: 20px 0;
					}
					.obozmark{
						display: none;
					}
					.stores-results-container .ama_new_filter_map {
						width: 100%;
						position: relative;
						right: 0;
						z-index: 2;
						display: flex;
						flex-wrap: wrap;
						margin: 0 0 20px 0;
					}
					.ds_product-filter__global {
						margin: 10px 0 0;
						width: 100%;
					}
					.ds_metro_filter{
						margin: 0;
						width: 100%;
					}
					.ds_product-filter__container{
						width: 100%;
					}
				}
				

			</style>
			<script>
                    var google_zoom = 8;
           			var google_FirstCenter = 55.666599;
	                var google_SecondCenter = 37.552148;
			</script>


		<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>


		<h1 class="hnb_mytitlepag2">Magniflex в Москве и Московской области</h1>

		<div class="stores-results-container">
			<div class="container-stores-element container-stores-map">
				<div id="google-map" class="mapp"></div>
				<div class="obozmark">Условные обозначения:
					<p class="obozmarkText"><img src="/img/gmarker-final-red.png"> - представлен весь ассортимент продукции: можно полежать на всех матрасах, потестировать все подушки</p>
					<p class="obozmarkText"><img src="/img/gmarker-final.png"> - ограниченная коллекция (представлен не полный ассортимент)</p>
				</div>
			</div>
			<div class="ama_new_filter_map">
						<select class="ds_metro_filter">
							<option class="ds_main-select" selected="selected" name="metro">Ближайшее метро</option>
							<option classatr="polianka" name="metro">м. Полянка</option>
							<option classatr="babushkinskaia" name="metro">м. Бабушкинская</option>
							<option classatr="bratislavskaia" name="metro">м. Братиславская</option>
							<option classatr="bootirskaia" name="metro">м. Бутырская</option>
							<option classatr="vdnh" name="metro">м. ВДНХ</option>
							<option classatr="kotlu" name="metro">м. Верхние котлы</option>
							<option classatr="vodnuistadion" name="metro">м. Водный стадион</option>
							<option classatr="dmitrovskaia" name="metro">м. Дмитровская</option>
							<option classatr="dobruninskaia" name="metro">м. Добрынинская</option>
							<option classatr="domodedovskaia" name="metro">м. Домодедовская</option>
							<option classatr="dubrovka" name="metro">м. Дубровка</option>
							<option classatr="zhulebino" name="metro">м. Жулебино</option>
							<option classatr="kievskaia" name="metro">м. Киевская</option>
							<option classatr="kotelniki" name="metro">м. Котельники</option>
							<option classatr="leninskii" name="metro">м. Ленинский проспект</option>
							<option classatr="lubianka" name="metro">м. Лубянка</option>
							<option classatr="liublino" name="metro">м. Люблино</option>
							<option classatr="mariino" name="metro">м. Марьино</option>
              <option classatr="mendeleevskaia" name="metro">м. Менделеевская</option>
              <option classatr="myakinino" name="metro">м. Мякинино</option>
							<option classatr="nagatinska" name="metro">м. Нагатинска</option>
							<option classatr="cheremushki" name="metro">м. Новые Черемушки</option>
							<option classatr="novogireevo" name="metro">м. Новогиреево</option>
							<option classatr="novoslobodskaia" name="metro">м. Новослободская</option>
							<option classatr="novokosino" name="metro">м. Новокосино</option>
							<option classatr="novokuzneckaia" name="metro">м. Новокузнецкая</option>
							<option classatr="oktiabrskaia" name="metro">м. Октябрьская</option>
							<option classatr="paveleckaia" name="metro">м. Павелецкая</option>
							<option classatr="pobedu" name="metro">м. Парк Победы</option>
							<option classatr="perovo" name="metro">м. Перово</option>
							<option classatr="polezhaevskaia" name="metro">м. Полежаевская</option>
							<option classatr="prazhskaia" name="metro">м. Пражская</option>
							<option classatr="proletarskaia" name="metro">м. Пролетарская</option>
							<option classatr="profsoiuznaia" name="metro">м. Профсоюзная</option>
							<option classatr="rumiantcevo" name="metro">м. Румянцево</option>
							<option classatr="savelovskaia" name="metro">м. Савеловская</option>
							<option classatr="salarevo" name="metro">м. Саларьево</option>
							<option classatr="semenovskaia" name="metro">м. Семеновская</option>
							<option classatr="serpuhovskaia" name="metro">м. Серпуховская</option>
							<option classatr="smolenskaia" name="metro">м. Смоленская</option>
							<option classatr="strogino" name="metro">м. Строгино</option>
							<option classatr="tulskaia" name="metro">м. Тульская</option>
							<option classatr="turgenevskaia" name="metro">м. Тургеневская</option>
							<option classatr="cska" name="metro">м. ЦСКА</option>
							<option classatr="entuziastov" name="metro">м. Шоссе Энтузиастов</option>
							<option classatr="iuzhnaia" name="metro">м. Южная</option>
							<option classatr="elektrozavodskaia" name="metro">м. Электрозаводская</option>
							<option classatr="shchelkovskaia" name="metro">м. Щелковская</option>
						</select>


						<div class="ds_product-filter__global">
							<select class="ds_product-filter__select">
								<option selected="selected" disabled> Выберите товар </option>
							</select>
							<div class="ds_product-filter__container">
								<div class="ortho-matras"> <!-- ortho -->
									<label class="ds_product-filter__title">
										<input type="checkbox"  filterID="orthopedic" class="product-filter" name="type"> Ортопедические матрасы
									</label>
									<label>
										<input type="checkbox" filterID="merinoMerinos" class="product-filter" name="type"> Merino (Merinos)
									</label>
									<label>
										<input type="checkbox" filterID="merinoBamboo" class="product-filter" name="type"> Merino Bamboo
									</label>
									<label>
										<input type="checkbox" filterID="stile" class="product-filter" name="type"> Stile
									</label>
									<label>
										<input type="checkbox" filterID="waterLattex" class="product-filter" name="type"> WaterLattex
									</label>
									<label>
										<input type="checkbox" filterID="pensiero" class="product-filter" name="type"> Pensiero
									</label>
									<label>
										<input type="checkbox" filterID="naturalmente" class="product-filter" name="type"> Naturalmente
									</label>
									<label>
										<input type="checkbox" filterID="memorie" class="product-filter" name="type"> Memorie
									</label>
									<label>
										<input type="checkbox" filterID="memoMerino" class="product-filter" name="type"> Orthomemo Merino
									</label>
								</div> <!-- premium -->
								<div class="ortho-matras">
									<label class="ds_product-filter__title">
										<input type="checkbox"  filterID="premium" class="product-filter" name="type"> Премиальная коллекция
									</label>
									<label>
										<input type="checkbox" filterID="rest" class="product-filter" name="type"> Rest
									</label>
									<label>
										<input type="checkbox" filterID="freshGel" class="product-filter" name="type"> FreshGel
									</label>
									<label>
										<input type="checkbox" filterID="comfortDelux" class="product-filter" name="type">New Comfort Plus
									</label>
									<label>
										<input type="checkbox" filterID="stretching" class="product-filter" name="type"> Stretching
									</label>
									<label>
										<input type="checkbox" filterID="imperiale" class="product-filter" name="type"> Imperiale
									</label>
									<label>
										<input type="checkbox" filterID="magnificent" class="product-filter" name="type"> Magnificent
									</label>
									<label>
										<input type="checkbox" filterID="harmony" class="product-filter" name="type"> Harmony
									</label>
									<label>
										<input type="checkbox" filterID="virtus" class="product-filter" name="type"> Virtus
									</label>
								</div>
									<!-- pillows -->
								<div class="ortho-matras">
									<label class="ds_product-filter__title">
										<input type="checkbox"  filterID="pillows" class="product-filter" name="type"> Ортопедические подушки
									</label>
									<label>
										<input type="checkbox" filterID="relaxsan" class="product-filter" name="type"> Коллекция Relaxsan
									</label>
									<label>
										<input type="checkbox" filterID="coolmax" class="product-filter" name="type"> Коллекция Coolmax
									</label>
									<label>
										<input type="checkbox" filterID="classico" class="product-filter" name="type"> Коллекция Classico
									</label>
									<label>
										<input type="checkbox" filterID="freshgel" class="product-filter" name="type"> Коллекция Freshgel
									</label>
									<label>
										<input type="checkbox" filterID="superiore" class="product-filter" name="type"> Коллекция Superiore
									</label>
									<label>
										<input type="checkbox" filterID="virtuoso" class="product-filter" name="type"> Коллекция Virtuoso
									</label>
								</div>
							</div>
						</div>
			</div>
			<div class="container-stores-element container-stores-page ps ps1">

					<div data-store="polianka oktiabrskaia dobruninskaia paveleckaia novokuzneckaia" class="exposition-store store-address-container merinoMerinos orthopedic premium merinoBamboo  stile waterLattex pensiero naturalmente memorie memoMerino rest freshGel comfortDelux stretching imperiale magnificent harmony virtus pillows relaxsan coolmax classico freshgel superiore virtuoso">
						<a href="/o-magniflex/show-room-matrasov/">
							<div class="store-address">
								<div class="store-address-component store-name">Официальный шоу-рум представительства Magniflex в России  </div>
								<div class="store-address-component store-address-component-address">Шоу-рум Magniflex г. Москва, Бродников переулок, д.10, к.2, 1 этаж. Бесплатная парковка, звоните заранее. </div>
								<div class="store-address-component store-metro">м. Полянка</div>
							</div>
							<div class="expanded-address">
								<div class="store-address-component store-address-component-pone">Пн - пт: 9:30 - 21:00 <br/>Сб - вс: 10:00 - 21:00<br/>
						<!--		<p style="color:#d5282d">
                                График работы шоу-рума на майские праздники: <br/>
                                    <span style="display: block; color: #000;">1,2,3,4,5 мая: с 10:00 - 21:00,<br></span>
                                    <span style="display: block; color: #000;">6,7 мая: с 10:00 - 21:00,<br></span>
                                    <span style="display: block; color: #000;">8 мая: 10:00 - 18:00,<br></span>
                                    <span style="display: block;">9 мая: выходной день,<br></span>
                                    <span style="display: block;">10,11,12 мая: с 10:00 - 21:00</span>
                                </p>-->
								</div>
								<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 989-11-32</div>
								<div class="store-address-component store-address-component-exposition">Представлен весь ассортимент.</div>
							</div>
						</a>
                    </div>


                    <div data-store="pobedu" class="exposition-store store-address-container merinoMerinos orthopedic premium merinoBamboo  stile waterLattex pensiero naturalmente memorie memoMerino rest freshGel comfortDelux stretching imperiale magnificent harmony virtus pillows relaxsan coolmax classico freshgel superiore virtuoso">
						<div class="store-address">
							<div class="store-address-component store-name">бутик Magniflex&Orthosleep в "Три Кита"</div>
							<div class="store-address-component store-address-component-address">Московская обл., Одинцовский р-н, Новоивановское пгт, ул. Луговая, 1, 3 этаж, матрасная секция, ТЦ «Три Кита»</div>
							<div class="store-address-component store-metro">м. Парк Победы </div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно: 10:00 – 21:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 901-363-25-28</div>
							<div class="store-address-component store-address-component-exposition">Представлен весь ассортимент.</div>
						</div>
                    </div>

                    <div data-store="myakinino" class="store-address-container">
                        <div class="store-address">
                            <div class="store-address-component store-name"> Салон Magniflex & Orthosleep В ТЦ "КРАСНЫЙ КИТ"</div>
                            <div class="store-address-component store-address-component-address">г. Мытищи, Шараповский проезд, владение 2, строение 4, ТЦ Красный Кит, 1 этаж.
                (м. Проспект Мира, м. Медведково).</div>
                        </div>
                        <div class="expanded-address">
                            <div class="store-address-component store-address-component-pone">Ежедневно: 9:30 - 23:00

                            </div>
                            <div class="store-address-component store-address-component-pone">
                            Тел.: +7 929 500-01-85</div>
                            <div class="store-address-component store-address-component-exposition">Представлен весь ассортимент.</div>
                        </div>
                    </div>

                    <div data-store="myakinino" class="store-address-container">
                        <div class="store-address">
                            <div class="store-address-component store-name"> БУТИК MAGNIFLEX в ТЦ "ГРАНД"</div>
                            <div class="store-address-component store-address-component-address">г. Химки, Бутаково 4 (Ленинградское шоссе, 100 метров от МКАД (в сторону области))</div>
                        </div>
                        <div class="expanded-address">
                            <div class="store-address-component store-address-component-pone">Ежедневно: 10:00 - 21:00

                            </div>
                            <div class="store-address-component store-address-component-pone">
                            Тел.: +7 495 775-62-04</div>
                            <div class="store-address-component store-address-component-exposition">Представлен весь ассортимент.</div>
                        </div>
                    </div>



					<div data-store="entuziastov perovo" class="exposition-store store-address-container merinoMerinos orthopedic premium merinoBamboo  stile waterLattex pensiero naturalmente memorie memoMerino rest freshGel comfortDelux stretching imperiale magnificent harmony virtus pillows relaxsan coolmax classico freshgel superiore virtuoso">
						<div class="store-address">
							<div class="store-address-component store-name">«Мебель Румынии» ООО «Катанга»</div>
							<div class="store-address-component store-address-component-address"> Шоссе Энтузиастов, д.54, ТЦ «Мебель Уюта», 4 этаж</div>
							<div class="store-address-component store-metro">м. Шоссе Энтузиастов</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Пн-сб: 11:00 - 19:00<br>
							Вс: 11:00 - 18:00
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (925) 589-01-51<br>
							Тел.: +7 (925) 510-85-09
							</div>
							<div class="store-address-component store-address-component-exposition">Представлен весь ассортимент.</div>
						</div>
                    </div>





					<div data-store="cheremushki" class="store-address-container merinoMerinos orthopedic stile">
						<div class="store-address">
							<div class="store-address-component store-name">"Италмания" </div>
							<div class="store-address-component store-address-component-address">ООО «Италмания» г. Москва, ул. Профсоюзная, д. 45, ТЦ «Царское село», 2 этаж</div>
							<div class="store-address-component store-metro">м. Новые Черемушки</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Пн-сб: 10:00 - 20:00 <br>
							Вс: 10:00 - 18:00
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 718-73-88 <br>
							Тел.: +7 (495) 718-76-31
							</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Образцы 40х60.</div>
						</div>
                    </div>



					<div data-store="babushkinskaia" class="store-address-container merinoMerinos orthopedic">
						<div class="store-address">
							<div class="store-address-component store-name">"Матрасы и Аксессуары" ЗАО «ЭОС» </div>
							<div class="store-address-component store-address-component-address">г. Москва, Анадырский проезд, дом 17/1, к. 1, помещение 1, 1 этаж</div>
							<div class="store-address-component store-metro">м. Бабушкинская</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Пн-вс: 10:00 - 19:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: + 7 (499) 184-38-81,<br>
							Тел.: + 7 (903) 762-80-80</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 80x190, образцы 40х60.</div>
						</div>
					</div>

					<div data-store="bratislavskaia mariino" class="store-address-container merinoMerinos orthopedic naturalmente pensiero">
						<div class="store-address">
							<div class="store-address-component store-name">"Матрас-на-заказ" ООО «Цитрус» </div>
							<div class="store-address-component store-address-component-address">г. Москва, ул. Люблинская, дом 151, Деловой центр "Марьино", 1 этаж. </div>
							<div class="store-address-component store-metro">м. Братиславская</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Пн-пт: 11:00 - 19:00<br>
							Сб-вс: выходные
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7(495) 640-62-35<br>
							Тел.: +7 (495) 220-44-95 доб. 193</div>
							<div class="store-address-component store-address-component-exposition">Матрасы на экспозиции: Merinos 90x200, Naturalmente 90x200, Pensiero 90x200 Образцы 40х60 </div>
						</div>
					</div>

					<div data-store="dmitrovskaia" class="store-address-container merinoMerinos orthopedic">
						<div class="store-address">
							<div class="store-address-component store-name">Салон мебельной фабрики «Зал Свобода» ИП Демидов М.А.</div>
							<div class="store-address-component store-address-component-address">г. Москва, ул. Тимирязевская, д.2/3, ТЦ "Парк-11", 3 этаж</div>
							<div class="store-address-component store-metro">м. Дмитровская</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно 10:00 – 20:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7(499) 130-06-68<br>
							Тел.: +7(925) 198-54-30</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 80x200</div>
						</div>
					</div>

					<div data-store="dubrovka proletarskaia" class="store-address-container stile orthopedic waterLattex pensiero naturalmente">
						<div class="store-address">
							<div class="store-address-component store-name">Салон «Мебель Италии» ООО «Артэ.Ит» </div>
							<div class="store-address-component store-address-component-address">г. Москва, 1-я Дубровская ул, д.13, 1 этаж</div>
							<div class="store-address-component store-metro">м. Дубровка</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно 10:00 – 19:30</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7(495) 795-54-06<br>
							Тел.: +7(966) 144-29-60</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Stile 7 200x200, Waterlattex 180x200, Pensiero 8 90x200, naturalmente 90x200</div>
						</div>
					</div>

					<div data-store="domodedovskaia" class="store-address-container merinoMerinos orthopedic pensiero rest premium comfortDelux">
						<div class="store-address">
							<div class="store-address-component store-name">салон мебели First</div>
							<div class="store-address-component store-address-component-address">Пересечние Каширского шоссе и 24 км МКАД</div>
							<div class="store-address-component store-metro">м. Домодедовская</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно: 10:00 – 22:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (925) 253-56-66, +7 (977) 101-28-30</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 80x200, Pensiero 7 80x200, Rest 9 80x200, New Comfort Plus 10 80x200, образцы 40х60.</div>
						</div>
					</div>

					<div data-store="zhulebino kotelniki" class="store-address-container merinoMerinos orthopedic stile">
						<div class="store-address">
							<div class="store-address-component store-name">Салон «Мебель Италии» ООО «Прима Вера» </div>
							<div class="store-address-component store-address-component-address">г. Москва, ул. Привольная, дом 65/32, 1 этаж</div>
							<div class="store-address-component store-metro">м. Жулебино</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно 10:00 – 19:30</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7(495) 704-47-01<br>
							Тел.: +7(929) 659-75-75</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 160х200, Stile 7 160x200, образцы 40х60</div>
						</div>
					</div>

					<div data-store="kievskaia smolenskaia" class="store-address-container merinoMerinos orthopedic waterLattex">
						<div class="store-address">
							<div class="store-address-component store-name">САЛОН IMPERIAL CASA </div>
							<div class="store-address-component store-address-component-address">г. Москва, ул. Большая Тульская, 46, 3-й этаж.</div>
							<div class="store-address-component store-metro">м. Киевская</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Пн-пт: 10:00 - 20:00<br>
							Сб,вс: выходной
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (499) 243-60-00<br>
							Тел.: +7 (916) 650-86-37
							</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 90х200, Waterlattex 90х200, образцы 40х60.</div>
						</div>
					</div>


					<div data-store="leninskii tulskaia" data-store="polianka nagatinska" class="store-address-container merinoMerinos orthopedic">
						<div class="store-address">
							<div class="store-address-component store-name">Салон «Берлускони» ООО «Берлускони»</div>
							<div class="store-address-component store-address-component-address">г. Москва, 5-ый Донской проезд, дом 23, ТД "Семь", 1 этаж</div>
							<div class="store-address-component store-metro">м. Ленинский проспект</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно 10:00 - 19:30</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7(495) 795-71-50</div>
							<div class="store-address-component store-address-component-exposition">Образцы матрасов 40х60. Работа по каталогу.</div>
						</div>
					</div>




					<div data-store="liublino" data-store="polianka" class="store-address-container merinoMerinos orthopedic">
						<div class="store-address">
							<div class="store-address-component store-name">Салон Мебели ООО «Гранде Мебель», ТЦ «Интерьер Плаза»</div>
							<div class="store-address-component store-address-component-address">МО, МКАД 16-ый км внешняя сторона. г. Дзержинский, ул. Энергетиков, д. 14А, 8 этаж.</div>
							<div class="store-address-component store-metro">м. Люблино</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно 10:00 - 21:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7(495) 780-35-35 доб. 805</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 160x200, подушки в ассортименте.</div>
						</div>
					</div>


					<div data-store="mendeleevskaia savelovskaia" class="store-address-container premium rest pillows">
						<a href="/o-magniflex/russia/salon-matras-ok">
							<div class="store-address">
								<div class="store-address-component store-name">Магазин "Матрас ОК» ИП Калиманова</div>
								<div class="store-address-component store-address-component-address">ул. Новослободская, дом 67/69 1 этаж</div>
								<div class="store-address-component store-metro">м. Менделеевская</div>
							</div>
							<div class="expanded-address">
								<div class="store-address-component store-address-component-pone">Ежедневно 10:00 до 21:00<br>
								Бесплатная парковка – просьба звонить заранее
								</div>
								<div class="store-address-component store-address-component-pone">Тел.: +7(499) 973-16-65, <br>
								Тел.: +7(499) 973-17-19
								</div>
								<div class="store-address-component store-address-component-exposition">На экспозиции: Rest 10 90x200, подушки в ассортименте, образцы 40х60.</div>
							</div>
						</a>
					</div>


					<div data-store="nagatinska kotlu" class="store-address-container merinoMerinos orthopedic premium rest freshGel stile pensiero pillows">
						<div class="store-address">
							<div class="store-address-component store-name">салон матрасов «Mr. Sleep» ООО «Джема» </div>
							<div class="store-address-component store-address-component-address">г. Москва, Варшавское шоссе, д. 32, стр. 1, этаж 2, офис 203</div>
							<div class="store-address-component store-metro">м. Нагатинска</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно 9:00 - 21:00 </div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 191-43-55</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 90x200, Rest 9 90x200, Freshgel 10 90x200, Stile 8 90x200, Pensiero 7 90x200, подушки в ассортименте, образцы 40х60.</div>
						</div>
					</div>


					<div data-store="nagatinska kotlu" class="store-address-container merinoMerinos orthopedic rest pillows premium">
						<div class="store-address">
							<div class="store-address-component store-name">салон матрасов «Ортик» ООО «Ортик»</div>
							<div class="store-address-component store-address-component-address">г. Москва, Варшавское шоссе, д.32</div>
							<div class="store-address-component store-metro">м. Нагатинска</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Пн-сб: 10:00 - 19:00;<br>
							Вс: выходной
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 150-20-77</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 80x190, Rest 9 90x200, подушки в ассортименте.</div>
						</div>
					</div>


					<div data-store="novoslobodskaia mendeleevskaia" class="store-address-container merinoMerinos orthopedic freshGel premium rest">
						<div class="store-address">
							<div class="store-address-component store-name">"Митос" (салон мебели, ООО Митос) </div>
							<div class="store-address-component store-address-component-address">г. Москва, ул. Новослободская, д.50/1, строение 2, 1 этаж</div>
							<div class="store-address-component store-metro">м. Новослободская</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Пн.-пт: 10-00 - 20-00<br>
							Сб.-вс: 11:00 - 19:00<br>
							Бесплатная парковка – просьба звонить заранее.
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 937-66-12,<br>
							Тел.: +7 (499) 972-05-96
							</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: FreshGel 10 90*200, Rest 10 90*200</div>
						</div>
					</div>


					<div data-store="novokosino novogireevo" class="store-address-container merinoMerinos orthopedic">
						<div class="store-address">
							<div class="store-address-component store-name">Магазин «Мебель» ИП Савенкова</div>
							<div class="store-address-component store-address-component-address">г. Москва, ул. Новокосинская, д.23</div>
							<div class="store-address-component store-metro">м. Новокосино</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Пн-пт: 10:00 - 20:00<br>
							Сб: 11:00 - 18:00<br>
							Вс: 11:00 - 16:00
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7(495) 701-22-60</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: образцы 40x60</div>
						</div>
					</div>

					<div data-store="novogireevo" class="store-address-container merinoMerinos orthopedic premium rest naturalmente comfortDelux pensiero">
						<div class="store-address">
							<div class="store-address-component store-name">ТК Шоколад, 3-ий этаж, Салон «Lodi»</div>
							<div class="store-address-component store-address-component-address">МО, г. Реутов, 2 км МКАД, д.2</div>
							<div class="store-address-component store-metro">м. Новогиреево</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно 10:00 - 22:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (499) 755-59-54, +7 (925) 435-47-00</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 90x200, Rest 10 90x200, Naturalmente 90x200, New Comfort Plus 10 90x200, Pensiero 7 90x200, Stile 160x200.</div>
						</div>
					</div>

					<div data-store="novokosino" class="store-address-container merinoMerinos orthopedic">
						<div class="store-address">
							<div class="store-address-component store-name">«Салон Мебели России» Фарафонова И.В. </div>
							<div class="store-address-component store-address-component-address">г. Реутов, Юбилейный проспект, д.30/2, ТЦ Студия Интерьера. </div>
							<div class="store-address-component store-metro">м. Новокосино</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно 10:00 - 22:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (985) 766-50-16</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 120x190</div>
						</div>
					</div>


					<div data-store="cheremushki proletarskaia" class="store-address-container merinoMerinos orthopedic premium pensiero rest comfortDelux ">
						<div class="store-address">
							<div class="store-address-component store-name">Магазин «Инвирд», ООО «Интераз» </div>
							<div class="store-address-component store-address-component-address">г. Москва, Ленинский пр-кт 89/2, цокольный этаж</div>
							<div class="store-address-component store-metro">м. Новые Черемушки</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Пн-пт: 10:00 - 20:00<br>
							Сб-вс: 11:00 - 19:00
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (499) 132-03-44, <br>
							Тел.: +7 (495) 132-15-38
							</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Pensiero 7 80x200, Rest 10 80x200, New Comfort Plus 10 80x200, Merinos 80x200, Образцы 40х60.</div>
						</div>
					</div>


					<div data-store="cheremushki proletarskaia" class="store-address-container orthopedic pensiero premium rest comfortDelux pillows">
						<div class="store-address">
							<div class="store-address-component store-name">Салон “Orthosleep” ООО «Европром» в ТЦ «Черемушки» </div>
							<div class="store-address-component store-address-component-address">г. Москва, ул. Профсоюзная, д.56, 3-й этаж, линия 3Ж</div>
							<div class="store-address-component store-metro">м. Новые Черемушки</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно 10:00 - 21:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7(495) 558-61-63</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Pensiero 8, Rest 10, Comfort dual 10, подушки в ассортименте.</div>
						</div>
					</div>








					<div data-store="prazhskaia iuzhnaia" class="store-address-container merinoMerinos orthopedic naturalmente ">
						<div class="store-address">
							<div class="store-address-component store-name">Салон «Мебель Румынии» ООО «Гарда» МТК "Армада" </div>
							<div class="store-address-component store-address-component-address">г. Москва, ул. Кировоградская, д 11, стр. 1, 4 этаж</div>
							<div class="store-address-component store-metro">м. Пражская</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно: 10:00 – 20:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7(909) 921-99-40<br>
							Тел.: +7(925) 507-69-05
							</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 160x200, Naturalmente 160x200</div>
						</div>
					</div>


					<div data-store="profsoiuznaia cheremushki" class="store-address-container merinoMerinos orthopedic">
						<div class="store-address">
							<div class="store-address-component store-name">«Мебель Италии и Испании» ИП Осипова М.А. </div>
							<div class="store-address-component store-address-component-address">г. Москва Нахимовский проспект, д. 24, ЦДиИ «Экспострой», павильон 1, 28 стенд</div>
							<div class="store-address-component store-metro">м. Профсоюзная</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone"></div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 803-41-70 <r>
							Тел.: +7 (495) 557-47-54 <br>
							Тел.: +7 (910) 441-67-51<br>
							</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 90x200, работа по каталогу.</div>
						</div>
					</div>

					<div data-store="rumiantcevo salarevo" class="store-address-container merinoMerinos orthopedic pensiero comfortDelux pillows premium ">
						<div class="store-address">
							<div class="store-address-component store-name">Салон «Orthosleep» ООО «Европром» в ТЦ "Румянцево"</div>
							<div class="store-address-component store-address-component-address">г. Москва, Киевское шоссе 1, 500 м от МКАД в область, Корпус А, вход №3</div>
							<div class="store-address-component store-metro">м. Румянцево </div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно 10:00 - 21:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 788-39-68
							</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 80x200, Pensiero 8 80x200, New Comfort Plus 10 80x200, образцы 40х60, подушки в ассортименте.</div>
						</div>
					</div>


					<div data-store="serpuhovskaia paveleckaia" class="store-address-container merinoMerinos orthopedic pensiero premium rest">
						<div class="store-address">
							<div class="store-address-component store-name">Салон «Beddington» ООО «Форте» </div>
							<div class="store-address-component store-address-component-address">г. Москва, ТЦ Твинстор, 1 Щипковский переулок, дом 4, Галлерея, 1 этаж.</div>
							<div class="store-address-component store-metro">м. Серпуховская / Павелецкая </div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно: 10:00 – 21:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 150-30-96
							</div>
							<div class="store-address-component store-address-component-pone">Сайт: http://beddington.ru/
							</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Freshgel 10, Stretching 10, Waterlattex, Pensiero 8 90х200, Rest 9 90х200.</div>
						</div>
          </div>



					<div data-store="serpuhovskaia paveleckaia" class="store-address-container rest premium">
						<div class="store-address">
							<div class="store-address-component store-name">салон Mobilicasa ООО «Дом Мебели»</div>
							<div class="store-address-component store-address-component-address">г. Москва, ТЦ Твинстор, 1 Щипковский переулок, дом 4, Галлерея, 2 этаж</div>
							<div class="store-address-component store-metro">м. Серпуховская / Павелецкая </div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно: 10:00 – 21:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (499) 390-65-90
							</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Rest 10 160x200.</div>
						</div>
					</div>




					<div data-store="tulskaia serpuhovskaia" class="store-address-container merinoMerinos orthopedic pillows">
						<div class="store-address">
							<div class="store-address-component store-name">Ортопедический салон «Пассивная Терапия» ИП Литвинов</div>
							<div class="store-address-component store-address-component-address">ул. Павловская, владение №7, этаж 1</div>
							<div class="store-address-component store-metro">м. Тульская</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно: 10:30 – 20:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 648-61-15<br>
							Тел.: +7 (905) 777-01-96
							</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 80x190, подушки в ассортименте.</div>
						</div>
					</div>




					<div data-store="elektrozavodskaia semenovskaia" class="store-address-container merinoMerinos orthopedic stile">
						<div class="store-address">
							<div class="store-address-component store-name">«Мебель из массива» ИП Акимова Е.И. ТЦ «Мебель России»</div>
							<div class="store-address-component store-address-component-address">г. Москва, ул. Большая Семёновская, д. 10 центральный вход, 1 этаж, павильон Д-1-17</div>
							<div class="store-address-component store-metro">м. Электрозаводская</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно 10:00 - 19:30</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 510-95-46<br>
							Тел.: +7 (495) 727-05-90
							</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 80х200, Stile 7 80x200</div>
						</div>
					</div>


					<div data-store="elektrozavodskaia semenovskaia" class="store-address-container pillows	">
						<a href="/o-magniflex/russia/pozvonochnik-info/">
							<div class="store-address">
								<div class="store-address-component store-name">«ПОЗВОНОЧНИК.ИНФО» </div>
								<div class="store-address-component store-address-component-address">ул. Большая Семеновская, дом 32</div>
								<div class="store-address-component store-metro">м. Электрозаводская</div>
							</div>
							<div class="expanded-address">
								<div class="store-address-component store-address-component-pone">Пн-пт: 8:00 - 21:00, <br>
								Сб-Вс 9:00-20:00
								</div>
								<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 215 58 87</div>
								<div class="store-address-component store-address-component-exposition">На экспозиции: Merino/Merinos 80x200, образцы 40х60, подушки в ассортименте.</div>
							</div>
						</a>
					</div>

					<div data-store="shchelkovskaia" class="store-address-container merinoMerinos orthopedic">
						<div class="store-address">
							<div class="store-address-component store-name">«Салон Мебели Дольче Вита», ЗАО «Голд Сан» </div>
							<div class="store-address-component store-address-component-address">Москва/г. Балашиха</div>
							<div class="store-address-component store-metro">м. Щелковская</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно: 10:00 – 20:00
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 969 45 19</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 160x190, образцы 40х60</div>
						</div>
					</div>

					<div data-store="prazhskaia" class="store-address-container merinoMerinos orthopedic">
						<div class="store-address">
							<div class="store-address-component store-name">Магазин матрасов SPIM.RU</div>
							<div class="store-address-component store-address-component-address">г. Москва, ул. Кировоградская, д. 15, ТЦ "Электронный рай", павильон 1Г-21, 1Г-29, 1Г-30 (1 вагон из центра, 100 метров от метро)</div>
							<div class="store-address-component store-metro">м. Пражская</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно: 10:00 – 20:00
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (495) 518-74-42</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos, Waterlattex</div>
						</div>
					</div>

					<div data-store="vdnh" class="store-address-container merinoMerinos orthopedic">
						<div class="store-address">
							<div class="store-address-component store-name">Магазин матрасов SPIM.RU</div>
							<div class="store-address-component store-address-component-address">г. Москва, ул.1-я Останкинская, д.55, ТЦ "ВДНХ", 2 этаж. (первый вагон из центра, 2 минуты от метро)</div>
							<div class="store-address-component store-metro">м. ВДНХ</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно: 10:00 – 20:00
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: 8-916-745-65-30</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Pensiero 12, Waterlattex, Pensiero 6, Pensiero 7, Pensiero 8</div>
						</div>
					</div>

					<div data-store="vodnuistadion" class="store-address-container merinoMerinos orthopedic">
						<div class="store-address">
							<div class="store-address-component store-name">Магазин матрасов SPIM.RU</div>
							<div class="store-address-component store-address-component-address">г. Москва, Кронштадтский бульвар, д. 9, стр. 3, ТЦ "Крон-Парк", 3 строение, павильон К-5. (1 вагон из центра, 300 метров от метро)</div>
							<div class="store-address-component store-metro">м. Водный стадион</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно: 10:00 – 20:00
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: 8-916-745-65-10</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos</div>
						</div>
					</div>

					<div data-store="serpuhovskaia" class="store-address-container merinoMerinos orthopedic">
						<div class="store-address">
							<div class="store-address-component store-name">Бутик матрасов премиум-класса на Серпуховской</div>
							<div class="store-address-component store-address-component-address">г. Москва, Партийный переулок, д.1,к.3,с.57, галерея интерьеров Твинстор, павильон В-31</div>
							<div class="store-address-component store-metro">м. Серпуховская</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно: 10:00 – 21:00
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: 8-495-215-1O-77</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Pensiero 7, Pensiero 8, Pensiero 12, Rest 9, Rest 10, Rest 12, Waterlattex</div>
						</div>
					</div>

					<div data-store="polianka nagatinska" class="store-address-container">
						<div class="store-address">
							<div class="store-address-component store-name">«Шатура Мебель» ООО «Мир Мебели» </div>
							<div class="store-address-component store-address-component-address">г. Долгопрудный, ул. Первомайская, дом 54</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Пн - пт: 10:00 – 20:00<br>
							Сб - вс: 10:00 – 19:00
							</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7 (498) 685-08-34</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: образцы 40х60.</div>
						</div>
					</div>


					<div data-store="polianka nagatinska" class="store-address-container">
						<div class="store-address">
							<div class="store-address-component store-name">«Дом мебели» </div>
							<div class="store-address-component store-address-component-address">г. Зеленоград, Панфиловский пр-кт. дом 1, 1 эт.</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Тел.: +7 (499) 736-04-39, <br>
							Тел.: +7 (499) 736-53-08 <br>
							Тел.: +7 (499) 736-16-79</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: образцы 40х60.</div>
						</div>
					</div>


					<!--<div data-store="polianka nagatinska" class="store-address-container">
						<div class="store-address">
							<div class="store-address-component store-name">«Салон Мебели» ООО «Союз-мебель» </div>
							<div class="store-address-component store-address-component-address">г. Красногорск, ул. Ленина, дом 45, помещение 1, 1 этаж</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Пн-вс: 10:00 - 20:00</div>
							<div class="store-address-component store-address-component-pone">Тел.: +7(495) 563-86-26<br>
							Тел.: +7 (495) 563-04-78</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos 140x190</div>
						</div>
					</div>-->


					<div data-store="polianka nagatinska" class="store-address-container">
						<div class="store-address">
							<div class="store-address-component store-name">«Шатура Мебель» ООО «Мир Мебели»</div>
							<div class="store-address-component store-address-component-address">г. Лобня, Краснополянский пр.3, Цокольный этаж</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Пн - пт: 10.00-20.00; <br>
							Сб - вс: 10.00-19.00
							</div>
							<div class="store-address-component store-address-component-pone">
							Тел.: +7 (495) 577-33-86</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: образцы 40х60</div>
						</div>
					</div>



					<div data-store="" class="store-address-container">
						<div class="store-address">
							<div class="store-address-component store-name">ИП Павленко, постель бутик</div>
							<div class="store-address-component store-address-component-address">г. Москва, ул. Балтийская, д. 15</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">пн-пт 10:00 – 19:00, <br>сб-вс 10:00 – 17:00.
							</div>
							<div class="store-address-component store-address-component-pone">
							8 495 215 15 61 (Москва), <br>8 800 555 29 51 (Бесплатно по России)<br>Skype: PostelButik.ru</div>
							<div class="store-address-component store-address-component-exposition">Работа только по каталогу, экспозиция отсутствует!</div>
						</div>
					</div>


					<div data-store="" class="store-address-container">
						<div class="store-address">
							<div class="store-address-component store-name">Салон OrthoSleep</div>
							<div class="store-address-component store-address-component-address">Пересечение Каширского шоссе и 24 км МКАД, ТК "Твой Дом", 2 этаж</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">ежедневно  10:00 – 22:00
							</div>
							<div class="store-address-component store-address-component-pone">
							Телефон: +7 (985) 810-27-47
							<br>E-mail: dp24@divanport.ru </div>

						</div>
          </div>
			<div data-store="strogino" class="exposition-store store-address-container merinoMerinos orthopedic premium merinoBamboo  stile waterLattex pensiero naturalmente memorie memoMerino rest freshGel comfortDelux stretching imperiale magnificent harmony virtus pillows relaxsan coolmax classico freshgel superiore virtuoso">
						<div class="store-address">
							<div class="store-address-component store-name">Салон "Valest" </div>
							<div class="store-address-component store-address-component-address">Новорижское шоссе, 23 км, д. Покровское, ул. Центральная, 27 ТК "Покровский", 2 этаж</div>
							<div class="store-address-component store-metro">м. Строгино</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно 10:00 – 21:00</div>
							<div class="store-address-component store-address-component-pone">8 (800) 500-56-79</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: Merinos, Pensiero, Rest 9.</div>
						</div>
										</div>



										<div data-store="bootirskaia" class="store-address-container">
										<div class="store-address">
											<div class="store-address-component store-name">Салон Матрас.ру</div>
											<div class="store-address-component store-address-component-address">г. Москва, Огородный проезд, дом 10, ТЦ "Зеленый".</div>
											<div class="store-address-component store-metro">м. Бутырская.</div>
										</div>
										<div class="expanded-address">
											<div class="store-address-component store-address-component-pone">Часы работы: ежедневно с 10:00 - 22:00.
											</div>
											<div class="store-address-component store-address-component-pone">Тел.: +7 495 127-71-26</div>
											<div class="store-address-component store-address-component-exposition">На экспозиции образцы матрасов 40х60, работа по каталогам. </div>


										</div>
									</div>









					</div>


					</div>

			'
		),
		array(
			'address' => 'russia-moscow-obl',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 9;
           			var google_FirstCenter = 55.666599;
	                var google_SecondCenter = 37.552148;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">


						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-address-component-address">Воскресенский район, поселок Белоозерский, ул. Коммунальная, дом 54</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">10:00 до 20:00</div>
									<div class="store-address-component store-address-component-pone">+7(962) 915-22-22</div>
								</div>
							</div>
						</div>


						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Гранде Мебель</div>
									<div class="store-address-component store-address-component-address">г. Дзержинский, ул. Энергетиков, д. 14а, 8 этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">10:00 - 21:00 ежедневно</div>
									<div class="store-address-component store-address-component-pone">8 (495) 780-35-35 доб. 805</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Camelgroup в МЦ “АРМАДА”</div>
									<div class="store-address-component store-address-component-address">г. Дзержинский, м. Пражская ул. Кировоградская д.11 корп.1 4 этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">10:00-22:00 ежедневно</div>
									<div class="store-address-component store-address-component-pone">+7 (495) 792-95-60<br>
+7 (495) 792-95-70
</div>
								</div>
							</div>
						</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-address-component-address">г. Долгопрудный, ул. Первомайская, дом 54</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">пн - пт:10.00-20.00<br>сб - вс: 10.00-19.00</div>
									<div class="store-address-component store-address-component-pone">+7(498) 685-08-34</div>
								</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Дом мебели</div>
									<div class="store-address-component store-address-component-address">г. Зеленоград, Панфиловский пр-кт. дом 1, 1 эт.</div>
								</div>
								<div class="expanded-address">
								<div class="store-address-component store-address-component-pone">+7(499) 736-04-39<br>
+7(499) 736-53-08<br>+7(499) 736-16-79
</div>
								</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон Мебели</div>
									<div class="store-address-component store-address-component-address">г. Красногорск, ул. Ленина, дом 45, помещение 1, 1 этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">пн-вс: 10:00 - 20:00</div>
									<div class="store-address-component store-address-component-pone">+7(495) 563-86-26<br>
+7 (495) 563-04-78
</div>
								</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон Мебели</div>
									<div class="store-address-component store-address-component-address">Красногорский район, поселок Нахабино, ул. Советская, дом 73А.ТЦ "Аверс", 2 этаж, левое крыло</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">пн-вс: 10:00 - 20:00</div>
									<div class="store-address-component store-address-component-pone">+7 (495) 566-37-81
</div>
								</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон Мебели</div>
									<div class="store-address-component store-address-component-address">г. Куровское, ул. Советская, дом 105</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">+7(496) 411-07-96<br>
+7(925) 738-40-42
</div>
								</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Шатура-Мебель</div>
									<div class="store-address-component store-address-component-address">г. Лобня, ул. Ленина, дом 9, Цокольный этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">пн - пт: 10.00-20.00<br>cб - вс: 10.00-19.00</div>
									<div class="store-address-component store-address-component-pone">+7(495) 577-33-86
</div>
								</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Camelgroup в МТЦ “СКАРАБЕЙ”</div>
									<div class="store-address-component store-address-component-address">Люберцы, Жулебино. м. Выхино МКАД, 8 км.(внешняя сторона), д. 3 стр. 1, 2 этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">10:00 - 21:00 ежедневно</div>
									<div class="store-address-component store-address-component-pone">+7 (495) 509-96-41<br>
+7 (495) 509-96-42
</div>
								</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Дизайн Студия</div>
									<div class="store-address-component store-address-component-address">г. Мытищи, ул. Юбилейная, дом 24А, под. 1, этаж 1, офис 3.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">пн-сб: 10:00 - 19:00</div>
									<div class="store-address-component store-address-component-pone">+7 (903) 775-06-22
</div>
								</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон "Мир Мебели"</div>
									<div class="store-address-component store-address-component-address">г. Мытищи, Олимпийский проспект, дом 29, стр. 1, ТЦ "Формат", 3 этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">пн-вс: 10:00 - 20:00</div>
									<div class="store-address-component store-address-component-pone">+7 (499) 390-30-48<br>
+7 (906) 058-38-02</div>
								</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон Valest</div>
									<div class="store-address-component store-address-component-address">Новорижское шоссе, 23 км. д. Покровское, ул. Центральная, 27, ТК "Покровский", 2 этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">с 10-00 до 21-00
ежедневно</div>
									<div class="store-address-component store-address-component-pone">8 (800) 500-56-79</div>
									</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Белая Ворона</div>
									<div class="store-address-component store-address-component-address">Ногинский район, поселок Черноголовка. ул. Березовая, дом 24</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">8 (903) 177-81-57</div>
</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ТЦ Шмель</div>
									<div class="store-address-component store-address-component-address">г. Подольск, проспект Юных Ленинцев, дом 61 (3-й этаж)</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">10:00 до 20:00</div>
									<div class="store-address-component store-address-component-pone">+7(499) 713-34-37</div>
									</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ТЦ Хамелеон</div>
									<div class="store-address-component store-address-component-address">г. Подольск, Симферопольское шоссе, 38 км. 1-й этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">10:00 до 20:00</div>
									<div class="store-address-component store-address-component-pone">+7(963) 990-46-51</div>
							</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон мебели Вешняки</div>
									<div class="store-address-component store-address-component-address">г. Реутов, ул. Ленина, дом 1А, эт. 2.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно: 10.00 до 20.00</div>
									<div class="store-address-component store-address-component-pone">+7(495) 777-91-07<br>
+7(985) 121-01-07</div>
							</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон "Мебель Италии, России"</div>
									<div class="store-address-component store-address-component-address">г. Реутов, м. Новокосино, Юбилейный проспект, дом 30/2, ТЦ "Студия Интерьера", 1 этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">пн-сб: 10:00 - 20:00<br>вс: 10:00 - 18:00</div>
									<div class="store-address-component store-address-component-pone">+7(915) 258-46-46</div>
								</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-address-component-address">г. Химки, Юбилейный проспект, дом 7А</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">+7(495) 971-41-97</div>
								</div>
							</div>

							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Бутик "Magniflex&Orthosleep"</div>
									<div class="store-address-component store-address-component-address">Одинцовский р-н,
Новоивановское пгт</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно 10:00 - 21:00</div>
									<div class="store-address-component store-address-component-pone">+7 901-363-25-28 <br>
trikita-butik@mail.ru</div>
								</div>
							</div>



							</div>
</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-orenburg',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 9;
           			var google_FirstCenter = 51.842159;
	                var google_SecondCenter = 55.114801;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Мегамолл "Армада" Галерея Лувр</div>
									<div class="store-address-component store-address-component-address">г. Оренбург, Шарлыкское шоссе, дом 1. салон "Davidoff"</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">с 10:00 до 22:00</div>
									<div class="store-address-component store-address-component-pone">8 (3532) 61-84-95<br>20-16-73</div>
								</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон "Davidoff"</div>
									<div class="store-address-component store-address-component-address">МОЛЛ Армада 2, центральный атриум. г. Оренбург, Нежинское шоссе, д. 2, 1 этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">тел. 8 (3532)29 79 78, 201-673, <br>
моб. тел. +7 961 929 79 78, </div>
									<div class="store-address-component store-address-component-pone">e-mail: davidoff_interior@mail.ru.<br>
сайт www.mebel-davidoff.ru.</div>
								</div>
							</div>
						</div>
</div>
				</div>
			</div>



			'
		),

		array(
			'address' => 'russia-omsk',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 12;
           			var google_FirstCenter = 54.982228;
	                var google_SecondCenter = 73.326600;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон "Мебель Европы"</div>
									<div class="store-address-component store-address-component-address">г. Омск, ул. Конева, д.14</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">время работы: с 11.00 до 19.00<br>
воскресенье: с 12.00 до 17.00</div>
									<div class="store-address-component store-address-component-pone">тел/факс (3812) 707-505<br>
моб. +7-913-601-80-09<br>
e-mail: mebelvip@bk.ru<br>
www.euromebel55.ru</div>


								</div>
							</div>
						</div>
</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-perm',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 57.9962451;
	                var google_SecondCenter = 56.201661;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ООО "МНК"</div>
									<div class="store-address-component store-address-component-address">г. Пермь, ул. Кронштадская, дом 29</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">будни с 9-00 до 18-00</div>
									<div class="store-address-component store-address-component-pone">+7 (950) 450-52-25</div>
								</div>
							</div>
						</div>
</div>
				</div>
			</div>



			'
		),
array(
			'address' => 'russia-penza',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 53.212756;
	                var google_SecondCenter = 45.010702;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Мебельный салон Юнион-Пенза</div>
									<div class="store-address-component store-address-component-address">г. Пенза, ул. Плеханова, дом 34.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">ПН-ПТ: 10:00-20:00<br>СБ: 10:00-19:00<br>ВС: выходной</div>
									<div class="store-address-component store-address-component-pone">8 (8412) 20-52-04</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
array(
			'address' => 'russia-rostov',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 57.187746;
	                var google_SecondCenter = 39.412464;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">ежедневно без выходных с 9-00 до 18-00</div>
									<div class="store-address-component store-address-component-pone">+7 (950) 450-52-25</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-rostov-na-dony',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 47.250204;
	                var google_SecondCenter = 39.697345;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
							<a style="    color: inherit;" href="/o-magniflex/russia/ip-dragynov/">
								<div class="store-address">
									<div class="store-address-component store-name">"Дилерский шоу-рум Magniflex", ИП Драгунов А.С.</div>
									<div class="store-address-component store-address-component-address">г. Ростов-на-Дону, ул. Закруткина 2/2</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Вт. – Пт.: 10:00 – 19:00<br>Сб. – Вс.: 10:00 – 18:00<br>Пн.: - выходной день</div>
									<div class="store-address-component store-address-component-pone">229-97-59<br>270-13-47<br>8-938-123-83-88<br>Вся продукция на экспозиции.</div>
								</div>
								</a>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">«Студия мебели D&D.» / ИП Федоров Алексей Михайлович.</div>
									<div class="store-address-component store-address-component-address">г. Ростов-на-Дону, пр.Буденновский, 83</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Пн.-Пт.: с 10:00 - 18:00<br>Сб.: 10:00 – 17:00<br>Воскресенье: выходной</div>
									<div class="store-address-component store-address-component-pone">+7 (863) 2200-200<br>(863) 2907-000<br>Вся продукция на экспозиции.</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
		array(
  'address' => 'russia-spb',
  'parent_address' => 'o-magniflex',
  'parent_name' => 'О Магнифлекс',
  'name' => 'Россия',
  'left_sidebar' => 'adresa-magazinov',
  'title' => 'Адреса магазинов Магнифлекс в Москве, в которых можно купить ортопедические матрасы и подушки Magniflex | Магнифлекс',
  'description' => 'Итальянские ортопедические матрасы и подушки MAGNIFLEX.Официальный сайт и Интернет Магазин. У нас можно купить ортопедические матрасы magniflex по самым выгодным ценам!',
  'keywords' => 'magniflex, магнифлекс, матрасы magniflex, матрасы магнифлекс, ортопедические матрасы, итальянские матрасы, матрасы из италии, анатомические матрасы, купить ортопедические матрасы, матрас, матрасы, матрацы, матрацы ортопедические',
  'text' => '

  <style>


    </style>

    <script>
    var google_zoom = 11;
 var google_FirstCenter = 59.943978;
  var google_SecondCenter = 30.338121;
</script>
<script>

</script>
<script type="text/javascript" src="/template/js/map-google.js"></script>
<script type="text/javascript" src="/template/js/placemark-google.js"></script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>



  <div class="hnb_contarea ama_new_contarea">
<div class="">

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
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">

									<div class="store-address-component store-name">Мебельный Центр Аквилон </div>
									<div class="store-address-component store-address-component-address"> (Официальная бренд-секция представительства Magniflex). </div>
									<div class="store-address-component store-address-component-address">ул. Новолитовская, дом 15В, 3 этаж, секция 105.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">ежедневно 10:00 - 20:00</div>
									<div class="store-address-component store-address-component-pone">+7 921 906-79-00<br>8 (812) 670-84-82<br>Представлен весь ассортимент.</div>
								</div>
							</div>
						</div>

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
<div style="clear: both;">
</div>
  '
),
array(
			'address' => 'russia-saratov',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 51.561090;
	                var google_SecondCenter = 45.964129;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ООО «Хорс» - мультибрендовый магазин матрасов «За матрасом»</div>
									<div class="store-address-component store-address-component-address">Саратовская обл., г.Балаково, ул. Трнавская 24, ТЦ «Грин Хаус», 0-ой этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно с 10.00 до 21.00 ( без перерывов и выходных ).</div>
									<div class="store-address-component store-address-component-pone">8(927)154-71-30</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-sochi',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 43.596405;
	                var google_SecondCenter = 39.734175;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ООО "Сфера-1"</div>
									<div class="store-address-component store-address-component-address">г.Сочи, ул.Транспортная, дом 28, 1 этаж.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">10.00 - 21.00 без перерывов и выходных.</div>
									<div class="store-address-component store-address-component-pone">8(8622) 25-87-53<br>8 918 404 70 99</div>
								</div>
							</div>
						</div>

						<div class="stores-address-container">

							<div class="store-address-container">
								<a	href="/o-magniflex/russia/sochi-palazzo">
									<div class="store-address">
										<div class="store-address-component store-name">Салон Мебели "Palazzo"</div>
										<div class="store-address-component store-address-component-address">г. Сочи, ул. Пластунская, дом 70</div>
									</div>
									<div class="expanded-address">
										<div class="store-address-component store-address-component-pone">Ежедневно: 10:00 - 20:00</div>
										<div class="store-address-component store-address-component-pone">Тел.: +7 (988) 236-00-66</div>

										<div class="store-address-component store-address-component-exposition">На экспозиции: Rest 10 160x200<br>
										Waterlattex 160x200<br>
										Stile 7 160x200<br>
										Pensiero 7 160x200</div>
									</div>
								</a>
							</div>
						</div>
</div>
				</div>
			</div>



			'
		),
		array(
	'address' => 'russia-stavropol',
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
			 padding: 10px;
		}
		.ds_metro_filter{
			background: #726D5F;
			color: #FFF;
			border: none;
			width: 208px;
			padding: 3px 0;
			padding-left: 5px;
			margin-left: 20px;
		}
	</style>
	<script>
			var google_zoom = 13;
			   var google_FirstCenter = 45.021239;
			var google_SecondCenter = 41.916020
			;
	</script>
<script>

</script>
 <script type="text/javascript" src="/template/js/map-google.js"></script>
 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

	<div class="hnb_contarea">
		<div class="stores-results-container">
			<div class="container-stores-element container-stores-map">
				<div id="google-map" class="mapp"></div>
			</div>
			<div class="container-stores-element container-stores-page ps">
				<div class="stores-address-container">

					<div class="store-address-container">
					<a href="/o-magniflex/russia/stavropol_caro/">
						<div class="store-address">
							<div class="store-address-component store-name">Интерьерный салон CARO (ИП Каменка А.П.)</div>
							<div class="store-address-component store-address-component-address"> г. Ставрополь, ул. Шпаковская 100.</div>
						</div>
						<div class="expanded-address">
							<div class="store-address-component store-address-component-pone">Ежедневно: 10:00–19:00</div>

							<div class="store-address-component store-address-component-pone">+7-9624-490-00-20<br>
							+7-8652-72-45-32<br>
							+7-8652-72-45-28<br>
							instagramm:@caro_stavropol</div>
							<div class="store-address-component store-address-component-exposition">На экспозиции: <br>MEMORI 40x60 (Orthomemo Merino)<br>Merinos 40х60<br>Waterlatex 40х60 </div>
						</div>
						</a>
					</div>

				</div>
</div>
		</div>
	</div>



	'
),
array(
			'address' => 'russia-old-oskol',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 51.31679679;
	                var google_SecondCenter = 37.90373950;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Мастерская матрасов «Mr. Mattress» </div>
									<div class="store-address-component store-address-component-address">мкр. Надежда, дом 5, ТЦ «Всё для Вас» 1 эт, пав. 4.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Понедельник - Пятница: 10.00-19.00<br>Суббота: 10.00-18.00<br>Воскресенье: выходной</div>
									<div class="store-address-component store-address-component-pone">8 (980) 374-24-10<br>8 (929) 000-05-79</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-siktivkar',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 61.677884;
	                var google_SecondCenter = 50.809941;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">

					</div>
				</div>
			</div>



			'
		),

		array(
			'address' => 'russia-tambov',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 52.70515279;
	                var google_SecondCenter = 41.47053650;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
				<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Мебельный салон Юнион-Тамбов</div>
									<div class="store-address-component store-address-component-address">г. Тамбов, ул. Советская, дом 34.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">ПН-ПТ: 10:00-20:00<br>СБ: 10:00-19:00<br>ВС: выходной</div>
									<div class="store-address-component store-address-component-pone">8 (4752) 75-51-12</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),

		array(
			'address' => 'russia-tver',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 56.857736;
	                var google_SecondCenter = 35.899768;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">с 9:00 до 17:00</div>
									<div class="store-address-component store-address-component-pone">8 (4822) 32-26-26</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-tomsk',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 56.49526577;
	                var google_SecondCenter = 84.96926250;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
							<a href="/o-magniflex/russia/tomsk_la_roshel">
								<div class="store-address">
									<div class="store-address-component store-name">Салон мягкой мебели "Ля Рошель"</div>
									<div class="store-address-component store-address-component-address">г. Томск, ул. Яковлева, дом 23.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">С 10.00-19.00 без выходных </div>
									<div class="store-address-component store-address-component-pone">8 (3822) 65-76-76<br>8 (3822) 65-23-02</div>
								</div>
							</a>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
array(
			'address' => 'russia-tyla',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 54.198466;
	                var google_SecondCenter = 37.624674;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Мебельный салон "Элит"</div>
									<div class="store-address-component store-address-component-address">ул. Л. Толстого, дом 91-А.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Понедельник - Пятница: 10.00-19.00<br>Суббота: 11.00-17.00<br>Воскресенье: выходной</div>
									<div class="store-address-component store-address-component-pone">8 (4872) 31-97-81<br>31-88-62</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-address-component-address">г. Тула, ул. Коминтерна, дом 24г.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">с 10 до 19 часов, без выходных</div>
									<div class="store-address-component store-address-component-pone">8 (4872) 70-29-51<br>
71-66-63</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон «Мадам Подушкина»</div>
									<div class="store-address-component store-address-component-address">г. Алексин, ул. Тульская, дом 136Д, ТЦ «Слобода», бутик 9.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">9:00 - 17:00</div>
									<div class="store-address-component store-address-component-pone">8 (905) 111-11-07</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
array(
			'address' => 'russia-tyl-obl',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 9;
           			var google_FirstCenter = 53.988396;
	                var google_SecondCenter = 37.715477;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон «Мадам Подушкина»</div>
									<div class="store-address-component store-address-component-address">г. Алексин, ул. Тульская, дом 136Д, ТЦ «Слобода», бутик 9. </div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">9:00 - 17:00</div>
									<div class="store-address-component store-address-component-pone">8 (905) 111-11-07</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
array(
			'address' => 'russia-tymen',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 12;
           			var google_FirstCenter = 57.147352;
	                var google_SecondCenter = 65.523204;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">СТУДИЯ MOBILI</div>
									<div class="store-address-component store-address-component-address">625048. г. Тюмень, ул. Максима Горького, дом 68, корпус 3 (Салон находится ЖК "Даудель", 200 метров от торгового центра "Гудвин")</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">с понедельника по субботу с 11:00 до 19:00</div>
									<div class="store-address-component store-address-component-pone">+7 (3452) 97-07-93</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
                                                                        <div class="store-address-component store-name">Салон ортопедич. матрасов и кроватей "Матрэкс"-ТЦ "Магнат"</div>
									<div class="store-address-component store-address-component-address">г. Тюмень, ул. 30 лет Победы, дом 7, стр.5, 1 этаж.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">с пн-сб: 10:00 - 19:30, вс: 10:00 - 18:00</div>
									<div class="store-address-component store-address-component-pone">8 (3452) 59-53-01</div>
									<div class="store-address-component store-address-component-pone">www.matras-matrex.ru </div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон "Матрасы и аксессуары", салон "Матрэкс"</div>
									<div class="store-address-component store-address-component-address">ул. Авторемонтная, дом 45, стр.4, 2 этаж</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">с пн-пт: 9:00 - 18:30</div>
									<div class="store-address-component store-address-component-pone">8 (3452) 43-37-24<br>8 (3452) 74-48-19</div>
									<div class="store-address-component store-address-component-pone">www.matras-matrex.ru </div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-ulianovsk',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 11;
           			var google_FirstCenter = 54.33145728;
	                var google_SecondCenter = 48.40188350;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон «NEW STANDART»</div>
									<div class="store-address-component store-address-component-address">ул. Радищева, дом 100</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">с 9:00 до 17:00</div>
									<div class="store-address-component store-address-component-pone">8 (8422) 73-64-40<br>8 (8422) 73-64-41<br>8 (951) 096-37-10<br>8 (906) 144-75-33</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
                                                                        <div class="store-address-component store-name">ТД «ТРОЯ»</div>
									<div class="store-address-component store-address-component-address">ул. Урицкого, д. 58</div>
								</div>
								<div class="expanded-address">
					                                <div class="store-address-component store-address-component-pone">с 9:00 до 18:00</div>
									<div class="store-address-component store-address-component-pone">8 (8422) 27-33-46</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ТЦ «САРАЙ»</div>
									<div class="store-address-component store-address-component-address">ул. Пушкарева, д.11, корпус 2</div>
								</div>
								<div class="expanded-address">
					                                <div class="store-address-component store-address-component-pone">ежедневно, с 9:00 до 20:00</div>
									<div class="store-address-component store-address-component-pone">8 (8422) 37-02-50</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ТЦ «ИМПЕРИЯ МЕБЕЛИ»</div>
									<div class="store-address-component store-address-component-address">ул. Промышленная, д. 2</div>
								</div>
								<div class="expanded-address">
					                                <div class="store-address-component store-address-component-pone">пн-вс, с 9:30 до 19:00</div>
									<div class="store-address-component store-address-component-pone">8 (8422) 62-49-88</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
array(
			'address' => 'russia-yfa',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 54.733074;
	                var google_SecondCenter = 55.973995;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">PRIVATE COLLECTION</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">+7(347) 2912-616</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
array(
			'address' => 'russia-xabarovsk',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 48.494670;
	                var google_SecondCenter = 135.108418;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
				<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ООО «Астрид»</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">8 (4212) 57-79-12</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-cheliabinsk',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 55.17908228;
	                var google_SecondCenter = 61.31700700;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ООО «СТМ»</div>
									<div class="store-address-component store-address-component-address">г. Челябинск, ул. Бр. Кашириных, дом 102-83.</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">8 (351) 270-82-18</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
array(
			'address' => 'russia-cherepovec',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 59.1217437;
	                var google_SecondCenter = 37.9276892;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
				<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">салон "ЭГО Интерьер"</div>
									<div class="store-address-component store-address-component-address">г. Череповец, Советский пр. дом 16 (162600, Вологодская обл.)</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Пн. - Пт.: 10:00 - 20:00<br> Сб.,Вс.: 11:00 - 18:00</div>
									<div class="store-address-component store-address-component-pone">8 (8202) 20-22-22</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
array(
			'address' => 'russia-south-saxalinsk',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 46.93970930;
	                var google_SecondCenter = 142.73380050;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
				<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">ООО «Дом Мебели»</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">с 9-30 до 18-30 воскресение выходной</div>
									<div class="store-address-component store-address-component-pone">8 (4242) 72-28-18<br>72-28-08</div>
								</div>
							</div>
						</div>
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Студия Мебели "Green Street"</div>
								</div>
							</div>
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Интерьер салон "Green Street",ИП Киселев.</div>
									<div class="store-address-component store-address-component-address">693006, САХАЛИНСКАЯ ОБЛАСТЬ, ЮЖНО-САХАЛИНСК, ЛЕНИНА, 321/1</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Ежедневно 9:00 – 21:00</div>
									<div class="store-address-component store-address-component-pone">8 (4242) 277-2-50<br>8 (962) 112-79-49</div>
								</div>
							</div>
							</div>
</div>
				</div>
			</div>



			'
		),
		array(
			'address' => 'russia-yalta',
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
					 padding: 10px;
				}
				.ds_metro_filter{
				    background: #726D5F;
				    color: #FFF;
				    border: none;
				    width: 208px;
				    padding: 3px 0;
				    padding-left: 5px;
				    margin-left: 20px;
				}
			</style>
			<script>
                    var google_zoom = 13;
           			var google_FirstCenter = 44.500202;
	                var google_SecondCenter = 34.158566;
			</script>
		<script>

		</script>
		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
				<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Мебельный салон "Арт Мастер"</div>
									<div class="store-address-component store-address-component-address">Республика Крым, г. Ялта, ул. Большевистская 10, ТЦ Конфетти</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">Понедельник - Суббота с 9:00 до 19:00<br>Воскресенье - выходной</div>
									<div class="store-address-component store-address-component-pone">+ 7 978 044 1442</div>
								</div>
							</div>
							</div>
</div>
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
		
		<h2 class="hnb_mytitlepag">Доставка продукции Magniflex в другие страны</h2>
		<p>
			В Вашей стране еще нет представительства компании Magniflex? Вы можете обратится к нам по поводу приобретения ортопедических матрасов и подушек. Наши сотрудники &nbsp;подберут удобный&nbsp;способ доставки, проконсультируют и помогут в любых вопросах. Нами накоплен большой опыт по&nbsp;доставке продукции как в соседние страны, так и в страны дальнего зарубежья.
		<br/><br/>
			ПО ВСЕМ ВОПРОСАМ ЗВОНИТЕ НАМ ПО ТЕЛЕФОНАМ:<br />
 +7 (495) 507 22 65 <br />
+7 (495) 989 11 32
		</p>
<br /><br />




	</div>
	<div style="clear: both;">

			'
		),
		array(
			'address' => 'arkhangelskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Архангельская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Архангельская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Архангельская обл',
			'keywords' => 'матрасы в магнифлекс, Архангельская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX В АРХАНГЕЛЬСКОЙ ОБЛАСТИ</h2>
<div class="hnb_mytitlepagcity">
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><i class="fa fa-home square"></i>Магазин "Пальметто"</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>с 10:00 до 18:00, Вс. выходной</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (818) 221-54-21<br>
<i class="fa fa-envelope square"></i>мило@copy<br>
<i class="fa fa-globe square"></i>www.сайт
</td>
<td class="goodexpz"><i class="fa fa-eye square"></i>работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'bashkorstan',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Башкорстан',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Башкорстан| Магнифлекс',
			'description' => 'Магазины Магнифлекс, Башкорстан',
			'keywords' => 'матрасы в магнифлекс, Башкорстан',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Башкорстан</h2>
<div class="hnb_mytitlepagcity">
<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 4;
				var coordLatitude = 50.6;
				var coordLongitude = 36.6;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>
		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>-</b> <br />
 -</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>-
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'belgorodskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Белгородская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Белгородская обл| Магнифлекс',
			'description' => 'Магазины Магнифлекс, Белгородская обл',
			'keywords' => 'матрасы в магнифлекс, Белгородская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Белгородская обл</h2>
<div class="hnb_mytitlepagcity">
<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 10;
				var coordLatitude = 50.6;
				var coordLongitude = 36.6;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>
		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон Мебели "Вилла Деко"</b> <br />
 ул. Белгородского Полка, дом 62</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (4722) 28-90-82
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped">
<td class="goodars"><b>Дизайн-Студия "Мебель Доминика"</b> <br />
ул. Князя Трубецкого, дом 1</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (4722) 33-91-85
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон Мебели "Вилла Деко"</b> <br />
 ул. Щорса, дом 64А</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (4722) 28-90-82
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped">
<td class="goodars"><b>Матрас и Ко</b> <br />
г. Белгород, ул. Щорса 45 Д </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (4722) 37-44-38<br>
<i class="fa fa-phone square"></i>8-951-156-35-18
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'vladimirskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Владимирская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Владимирская обл| Магнифлекс',
			'description' => 'Магазины Магнифлекс, Владимирская обл',
			'keywords' => 'матрасы в магнифлекс, Владимирская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Владимирская обл</h2>
<div class="hnb_mytitlepagcity">
<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7.5;
				var coordLatitude = 56.0;
				var coordLongitude = 40.5;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>
		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>-</b> <br />
 -</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (922) 24-35-15 </td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'volgogradskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Волгоградская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Волгоградская обл| Магнифлекс',
			'description' => 'Магазины Магнифлекс, Волгоградская обл',
			'keywords' => 'матрасы в магнифлекс, Волгоградская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Волгоградская обл</h2>
<div class="hnb_mytitlepagcity">
<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 6;
				var coordLatitude = 49.6;
				var coordLongitude = 44.0;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>
		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>-</b> <br />
 -</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (442) 33-67-70,<br />
<i class="fa fa-phone square"></i>33-89-11, <br />
<i class="fa fa-phone square"></i>33-89-32
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'vologodskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Вологодская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Вологодская обл| Магнифлекс',
			'description' => 'Магазины Магнифлекс, Вологодская обл',
			'keywords' => 'матрасы в магнифлекс, Вологодская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Вологодская обл</h2>
<div class="hnb_mytitlepagcity">
<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 6;
				var coordLatitude = 60;
				var coordLongitude = 42;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>
		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>-</b> <br />
 -</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>-
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'voronezhskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Воронежская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Воронежская обл| Магнифлекс',
			'description' => 'Магазины Магнифлекс, Воронежская обл',
			'keywords' => 'матрасы в магнифлекс, Воронежская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Воронежская обл</h2>
<div class="hnb_mytitlepagcity">
<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7;
				var coordLatitude = 51;
				var coordLongitude = 40;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ООО «Сны и сновидения»</b> <br />
  г. Воронеж, ул. Урицкого, дом 128 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн-Пт.: 11:00 - 20:00, <br />Сб.: 11:00 - 18:00, <br />Вс.: выходной.</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (473) 221-09-92; 8 (473) 38-09-03; +7(952) 952-380903; +7(952) 958-67-09; +7 (952) 958- 67-09 (290-87-09).
11.00- 22.00 ежедневно <br /><i class="fa fa-globe square"></i><a href="https://www.sonie.ru" target="_blank">www.sonie.ru</a>
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Мебельный салон Юнион-Воронеж</b> <br />г. Воронеж, ул. Димитрова, дом 74</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн-Пт: 09:00-20:00, <br />
Сб: 10:00-19:00, <br />
Вс: выходной</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (473) 226-58-37 <br /><i class="fa fa-envelope square"></i>unionvr@yandex.ru
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'irkutskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Иркутская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Иркутская обл| Магнифлекс',
			'description' => 'Магазины Магнифлекс, Иркутская обл',
			'keywords' => 'матрасы в магнифлекс, Иркутская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Иркутская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 5;
				var coordLatitude = 56.5;
				var coordLongitude = 106;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>-</b> <br />
 -</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>-
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'kabardino-balkariya2',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Кабардино-Балкария',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Кабардино-Балкария| Магнифлекс',
			'description' => 'Магазины Магнифлекс, Кабардино-Балкария',
			'keywords' => 'матрасы в магнифлекс, Кабардино-Балкария',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Кабардино-Балкария</h2>
<div class="hnb_mytitlepagcity">
<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 8;
				var coordLatitude = 44;
				var coordLongitude = 44;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ИП "Алишанов Сабир"</b> <br />
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (88662) 40-42-29, <br />
<i class="fa fa-phone square"></i>40-98-44, <br />
<i class="fa fa-phone square"></i>8 (928) 707-707-3 <br />Анжела
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салоны «ОРТЕСС»</b><br />г. Нальчик, ул. Головко, дом 12а
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Ежедневно <br />9:00 - 19:00 <br />(без перерывов)</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (88662) 42-13-74
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салоны «ОРТЕСС»</b><br />г. Нальчик, ул. Ногмова, дом 80
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Ежедневно <br />9:00 - 19:00 <br />(без перерывов)</td>
<td class="goodcont"><i class="fa fa-phone square"></i> 8 (88662) 72-22-12
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салоны «ОРТЕСС»</b><br />г. Нальчик, ул. Пачева, дом 50
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Ежедневно <br />9:00 - 19:00 <br />(без перерывов)</td>
<td class="goodcont"><i class="fa fa-phone square"></i>  8 (928) 700-85-98
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салоны «ОРТЕСС»</b><br />г. Нальчик, ул. Богдана Хмельницкого, дом 41
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Ежедневно <br />9:00 - 19:00 <br />(без перерывов)</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (928) 720-58-41
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салоны «ОРТЕСС»</b><br />г. Нальчик, Затишье, район травмпункта
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Ежедневно <br />9:00 - 19:00 <br />(без перерывов)</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (938) 076-65-34
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салоны «ОРТЕСС»</b><br />г. Прохладный, ул. Ленина, дом 72
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Ежедневно <br />9:00 - 19:00 <br />(без перерывов)</td>
<td class="goodcont"><i class="fa fa-phone square"></i> 8 (928) 915-99-48
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салоны «ОРТЕСС»</b><br />г. Терек, ул. Ленина, дом 37
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Ежедневно <br />9:00 - 19:00 <br />(без перерывов)</td>
<td class="goodcont"><i class="fa fa-phone square"></i> 8 (938) 915-71-22
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салоны «ОРТЕСС»</b><br />г. Баксан, ул. Ленина, дом 5
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Ежедневно <br />9:00 - 19:00 <br />(без перерывов)</td>
<td class="goodcont"><i class="fa fa-phone square"></i> 8 (929) 885-12-41
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салоны «ОРТЕСС»</b><br />г. Нарткала, ул. Шекихачева, дом 3
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Ежедневно <br />9:00 - 19:00 <br />(без перерывов)</td>
<td class="goodcont"><i class="fa fa-phone square"></i> 8 (928) 694-55-21
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'kemerovskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Кемеровская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Кемеровская обл| Магнифлекс',
			'description' => 'Магазины Магнифлекс, Кемеровская обл',
			'keywords' => 'матрасы в магнифлекс, Кемеровская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Кемеровская обл</h2>
<div class="hnb_mytitlepagcity">
<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7;
				var coordLatitude = 55;
				var coordLongitude = 87;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>МТЦ "Сити Дом"</b> <br />г. Кемерово, ул.Терешковой, дом 41</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (384) 290-05-28
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Торговый центр "Макси дом"</b> <br />г. Кемерово, Проспект Советский, дом 25А</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (384) 290-05-28
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'kirovskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Кировская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Кировская обл| Магнифлекс',
			'description' => 'Магазины Магнифлекс, Кировская обл',
			'keywords' => 'матрасы в магнифлекс, Кировская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Кировская обл</h2>
<div class="hnb_mytitlepagcity">
<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7;
				var coordLatitude = 58.6;
				var coordLongitude = 49.6;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Мебельный салон "Алькасар"</b> <br />г. Киров, ул. Герцена, дом 9</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (8332) 64-72-13, <br />
<i class="fa fa-phone square"></i>64-15-94, <br />
<i class="fa fa-phone square"></i>8 (963) 000-51-51<br />
<i class="fa fa-globe square"></i><a href="https://www.alkasar43.ru" target="_blank">www.alkasar43.ru </a>
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'krasnodarskiy-kray',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Краснодарский край',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Краснодарский край | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Краснодарский край',
			'keywords' => 'матрасы в магнифлекс, Краснодарский край',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Краснодарский край</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 8;
				var coordLatitude = 45;
				var coordLongitude = 39;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Студия матрасов "ГудСон"</b> <br />г. Краснодар, ул.Тополиная, д.36</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>+7 (989) 829-00-29<br />
<i class="fa fa-envelope square"></i>info@gudson.ru<br />
<i class="fa fa-globe square"></i><a href="https://www.gudson.ru" target="_blank">www.gudson.ru</a>
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон "Матрасы и Аксессуары"</b> <br />Краснодарский край, поселок Лазаревский, <br />ул. Калараш, дом 145</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (8622) 36-24-42;<br />
<i class="fa fa-phone square"></i>8 (918) 916-56-75 <br />
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон "СОМОВО МЕБЕЛЬ/<br />CLASSICO ITALIANO" <br />ИП Гузенко Денис Константинович</b> <br />Краснодар, ул. Дзержинского 100, <br />Мегацентр «Красная Площадь», <br />3 этаж, секция С-167</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн – Вс: 10:00 – 22:00</td>
<td class="goodcont"><i class="fa fa-phone square"></i>+7-967-311-34-74<br />
<i class="fa fa-phone square"></i>+7-918-024-63-36<br />
</td>
<td class="goodexpz"><span class="category_exp">Матрасы:</span><br />
<a href="/catalog/orthopedic_mattresses/Pensiero">Pensiero</a><br />
<a href="/catalog/orthopedic_mattresses/Stile">Stile</a><br />
<a href="/catalog/orthopedic_mattresses/MERINOS/">Merinos</a><br />
<span class="category_exp">Подушки:</span><br />
<a href="/catalog/Orthopedic_pillows/ALOE+VERA/">Aloe vera</a><br />
<a href="/catalog/gelevye-podushki/FreshGel+Wave/">Freshgel wave</a><br />
</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'krasnoyarskiy-kray',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Красноярский край',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Красноярский край | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Красноярский край',
			'keywords' => 'матрасы в магнифлекс, Красноярский край',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Красноярский край</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 3;
				var coordLatitude = 70;
				var coordLongitude = 96;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Студия мебели "Матрасы и Кровати"</b> <br /> г. Красноярск, ул. Красной Звезды, д. 1</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Ежедневно <br /> с 9 до 21 часов<br /> без обеда и выходных</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (391) 297-28-11, <br />
<i class="fa fa-phone square"></i>8 (923) 334-05-55
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'krim2',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Крым',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Крым | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Крым',
			'keywords' => 'матрасы в магнифлекс, Крым',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Крым</h2>
<div class="hnb_mytitlepagcity">
<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 8;
				var coordLatitude = 45;
				var coordLongitude = 34;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон мебели «Italine»</b> <br />Республика Крым, Симферополь,<br /> ул. Кечкеметская, дом 13</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн - Пт с 10.00 до 18.00,<br />
Сб - Вс с 10.00 до 16.00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (3652) 70-60-36, <br />
<i class="fa fa-phone square"></i>8 (978) 787-73-45, <br />
<i class="fa fa-phone square"></i>8 (978) 916-65-85 <br />
<i class="fa fa-globe square"></i><a href="https://www.italine-crimea.ru " target="_blank">www.italine-crimea.ru</a>
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>АртМастер</b> <br />Республика Крым,<br /> г. Севастополь , ул.Соловьева 10а <br />и ул.Соловьева 12</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн - Пт с 9.00 до 17.30,<br />
Сб - Вс с 9.00 до 16.00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>+7 (978) 81-24-501,<br />
<i class="fa fa-phone square"></i>+7 (978) 81-24-505<br />
<i class="fa fa-globe square"></i><a href="https://www.matras-sevastopol.com" target="_blank">www.matras-sevastopol.com</a>
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон интерьера "Концепт Холл"</b> <br />299038, Россия, Крым, <br />г. Севастополь, <br />ул.Вакуленчука, д.29, <br />ТРЦ "Муссон", <br />левый мебельный корпус, 2 этаж</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i> с 11.00 до 19.00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>+7 (978) 742-32-07<br />
<i class="fa fa-globe square"></i><a href="https://www.concept-hall.ru" target="_blank">www.concept-hall.ru</a><br />
<i class="fa fa-envelope square"></i>shuga.sev@gmail.com
<i class="fa fa-skype square"></i>shuga.sev<br />
<i class="fa fa-viber square"></i>Viber: +7 978 742 32 07<br />
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'kurskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Курская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Курская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Курская обл',
			'keywords' => 'матрасы в магнифлекс, Курская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Курская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 8;
				var coordLatitude = 51.7;
				var coordLongitude = 36;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>

<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Мебельный салон "LION"</b> <br />
г. Курск, ул. Мирная, д.11</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>пн-пт 10:00 - 19:00, <br />сб до 17:00, <br />вс - выходной </td>
<td class="goodcont"><i class="fa fa-phone square"></i> 8(4712) 708-007<br />
<i class="fa fa-globe square"></i><a href="https://www.lion-kursk.ru" target="_blank">www.lion-kursk.ru</a><br />
<i class="fa fa-envelope square"></i>info@lionkursk.ru<br />
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'leningradskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Ленинградская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Ленинградская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Ленинградская обл',
			'keywords' => 'матрасы в магнифлекс, Ленинградская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Ленинградская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7;
				var coordLatitude = 60;
				var coordLongitude = 31;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>-</b> <br />
 -</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>-
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'lipetskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Липецкая обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Липецкая обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Липецкая обл',
			'keywords' => 'матрасы в магнифлекс, Липецкая обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Липецкая обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 8;
				var coordLatitude = 52.6;
				var coordLongitude = 39.2;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Мебельный салон Юнион-Липецк</b> <br />
 г. Липецк, пл. Заводская, дом 1</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн-Пт: 10:00-20:00, Сб: 10:00-19:00, Вс: выходной</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (4742) 36-49-49<br />
<i class="fa fa-envelope square"></i>union.l@mail.ru<br />
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'moskovskaya-oblast2',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Московская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Московская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Московская обл',
			'keywords' => 'матрасы в магнифлекс, Московская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Московская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7;
				var coordLatitude = 55.8;
				var coordLongitude = 37.3;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ТЦ КАРАТ <br />Салон мебели Вешняки, эт. 2</b> <br />  г. Реутов, ул. Ленина, дом 1А</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Ежедневно: <br />10.00 до 20.00</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (495) 777-91-07, <br />
<i class="fa fa-phone square"></i>8 (985) 121-01-07
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ТЦ НИКА <br />Цокольный этаж, м-н Шатура-Мебель</b> <br /> г. Лобня, ул. Ленина, дом 9</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн - Пт: 10.00-20.00;<br />
Вс: 10.00-19.00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (495) 577-33-86
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ТЦ Шмель</b> <br /> Подольск, проспект Юных Ленинцев, дом 61 (3-й этаж)</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>с 10:00 до 20:00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (499) 713-34-37
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ТЦ Хамелеон</b> <br />Симферопольское шоссе, 38 км. 1-й этаж</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>с 10:00 до 20:00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (963) 990-46-51
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars">Воскресенский район, поселок Белоозерский, ул. Коммунальная, дом 54</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>с 10:00 до 20:00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (962) 915-22-22
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars">г. Долгопрудный, ул. Первомайская, дом 54</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн - Пт: 10:00 - 20:00 <br />Вс: 10:00 - 19:00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (498) 685-08-34
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars">г. Зеленоград, Панфиловский пр-кт. дом 1, м-н Дом мебели 1 эт.</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (499) 736-04-39, <br />
<i class="fa fa-phone square"></i>736-53-08, <br />
<i class="fa fa-phone square"></i>736-16-79
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars">М.О. Орехово-Зуевский р-н <br />г. Куровское, ул. Советская, дом 105</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (496) 411-07-96, <br />
<i class="fa fa-phone square"></i>8 (925) 738-40-42
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон "Мир Мебели"<br />ТЦ "Формат", 3 этаж</b><br />г. Мытищи, Олимпийский проспект, дом 29, стр. 1 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (495) 585-15-06
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон Мебели<br /></b>г. Красногорск, ул. Ленина, дом 45, помещение 1, 1 этаж</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (495) 563-86-26; <br />
<i class="fa fa-phone square"></i>8 (495) 563-04-78
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон Мебели<br />ТЦ "Аверс", 2 этаж, левое крыло</b> <br />Красногорский район, поселок Нахабино, ул. Советская, дом 73А</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (495) 566-31-81
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон Мебели<br /></b>г. Химки, Юбилейный проспект, дом 7А</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (495) 971-41-97
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Дизайн Студия<br /></b>г. Мытищи, ул. Юбилейная, дом 24А, под. 1, этаж 1, офис 3</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (903) 775-06-22
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Эксклюзивный салон "Белая Ворона"</b> <br />Ногинский район, поселок Черноголовка, ул. Березовая, дом 24</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (903) 177-81-57
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ООО «Гранде Мебель»<br />ТЦ «Интерьер Плаза» МКАД 16-ый километр внешняя сторона</b> <br />МО, г. Дзержинский, ул. Энергетиков, д. 14а, 8 этаж</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>10:00 - 21:00 ежедневно</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (495) 780-35-35 доб. 805
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Camelgroup в МЦ “АРМАДА”<br />м. Пражская ул. Кировоградская д.11 корп.1 4 этаж, стенд Camelgroup </b> <br />МО, г. Дзержинский, ул. Энергетиков, д. 14а, 8 этаж</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Ежедневно: 10:00-22:00</td>
<td class="goodcont"><i class="fa fa-phone square"></i>+7 (495) 792-95-60
<br /><i class="fa fa-phone square"></i>+7 (495) 792-95-70
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Camelgroup в МТЦ “СКАРАБЕЙ” </b> <br />м. Выхино МКАД, 8 км.(внешняя сторона), д. 3 стр. 1 2 этаж, стенд Camelgroup </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>10:00 - 21:00 ежедневно</td>
<td class="goodcont"><i class="fa fa-phone square"></i>+7 (495) 509-96-41
<br /><i class="fa fa-phone square"></i>+7 (495) 509-96-42
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'nizhegoroskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Нижегородская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Нижегородская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Нижегородская обл',
			'keywords' => 'матрасы в магнифлекс, Нижегородская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Нижегородская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7;
				var coordLatitude = 56.2;
				var coordLongitude = 44.5;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Мебельный салон "CORSO ITALIA" </b>г. Нижний Новгород, ул. Рождественская, дом 13, 2-ой этаж<br />
</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн-Сб 10:00-19:00, Вс выходной </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (831) 461-80-94, <br />
<i class="fa fa-phone square"></i>8 (831) 461-80-93<br />
<i class="fa fa-globe square"></i><a href="https://www.corsoitalia.ru" target="_blank">www.corsoitalia.ru</a><br />
<i class="fa fa-envelope square"></i>corso@kis.ru</i>
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ИП Шарова Л.А.</b><br />
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>8.00-22.00 без выходных  </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (831) 415-51-52, <br />
<i class="fa fa-phone square"></i>415-78-67<br />
<i class="fa fa-globe square"></i><a href="https://www.corsoitalia.ru" target="_blank">www.corsoitalia.ru</a><br />
<i class="fa fa-envelope square"></i>corso@kis.ru</i>
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Мебельный салон Юнион-Нижний Новгород</b><br />г. Нижний Новгород, б. Мира, дом 17а
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>ПН-ПТ: 10:00-20:00, <br />СБ: 10:00-19:00, <br />ВС: выходной   </td>
<td class="goodcont"><i class="fa fa-phone square"></i>277-51-95, <br />
<i class="fa fa-phone square"></i>8 (831) 246-82-70<br />
<i class="fa fa-envelope square"></i>union@mts-nn.ru</i>
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>
</div>

<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'novosibirskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Новосибирская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Новосибирская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Новосибирская обл',
			'keywords' => 'матрасы в магнифлекс, Новосибирская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Новосибирская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 6;
				var coordLatitude = 55;
				var coordLongitude = 80;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон "Матрасы и Кровати"</b> <br />
ул. Красный проспект, дом 99, "Центр Здорового Сна"
 -</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн - Пт: 11.00-19.00; <br />
Сб: 11.00-18.00; <br />
Вс: 11.00-17.00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (383) 220-88-10, <br />
<i class="fa fa-phone square"></i>8 (913) 987-82-49
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон "Ортофлекс"</b> <br />
ул. Станционная, дом 62, Салон "Матрасы и Кровати", 1 эт.</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн - Пт: 10.00-20.00; <br />
Сб: 11.00-16.00; <br />
Вс: выходной
<td class="goodcont"><i class="fa fa-phone square"></i>8 (383) 380-08-16, <br />
<i class="fa fa-phone square"></i>380-95-16
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Oтдел "Ортофлекс"</b> <br />
ул. Светлановская, дом 50, ТВК "Большая Медведица", 2 этаж</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>10:00-21:00, <br />без обеда и выходных <br />
<td class="goodcont"><i class="fa fa-phone square"></i>8 (383) 380-81-16
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>

<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		array(
			'address' => 'orenburgskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Оренбургская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Оренбургская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Оренбургская обл',
			'keywords' => 'матрасы в магнифлекс, Оренбургская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Оренбургская обл</h2>
<div class="hnb_mytitlepagcity">


<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 6;
				var coordLatitude = 55;
				var coordLongitude = 80;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>
<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>
<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>-</b> <br />
 -</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>-
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>
</tbody>
</table>
</div>
<!--{bottom_sidebar}-->
	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'orenburgskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Оренбургская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Оренбургская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Оренбургская обл',
			'keywords' => 'матрасы в магнифлекс, Оренбургская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Оренбургская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7;
				var coordLatitude = 52.7;
				var coordLongitude = 53.8;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Мегамолл "Армада" Галерея Лувр</b> <br />г. Оренбург, Шарлыкское шоссе, дом 1,<br />салон "Davidoff"</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>с 10:00 до 22:00</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (3532) 61-84-95, <br />
<i class="fa fa-phone square"></i>20-16-73<br />
<i class="fa fa-envelope square"></i>studiy_davidoff@mail.ru<br />
<i class="fa fa-globe square"></i><a href="https://www.mebel-davidoff.ru" target="_blank">www.mebel-davidoff.ru</a></i>
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		array(
			'address' => 'penzenskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Пензенская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Пензенская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Пензенская обл',
			'keywords' => 'матрасы в магнифлекс, Пензенская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Пензенская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7.5;
				var coordLatitude = 53;
				var coordLongitude = 44.6;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Мебельный салон Юнион-Пенза</b> <br />г. Пенза, ул. Плеханова, дом 34</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн-Пт: 10:00-20:00, <br />Сб: 10:00-19:00, <br />Вс: выходной </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (8412) 20-52-04
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		array(
			'address' => 'permskii-kray',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Пермский край',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Пермский край | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Пермский край',
			'keywords' => 'матрасы в магнифлекс, Пермский край',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Пермский край</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 6;
				var coordLatitude = 59;
				var coordLongitude = 56;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ООО "МНК"</b> <br />г. Пермь, ул. Кронштадская, дом 29
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>будни с 9-00 до 18-00</td>
<td class="goodcont"><i class="fa fa-phone square"></i>+7 (950) 450-52-25<br />(ежедневно без выходных с 9-00 до 18-00)<br />
<i class="fa fa-globe square"></i>www.magniflex59.ru
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'rostovskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Ростовская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Ростовская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Ростовская обл',
			'keywords' => 'матрасы в магнифлекс, Ростовская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Ростовская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7;
				var coordLatitude = 47.7;
				var coordLongitude = 41.2;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>"Студия матрасов Дрёма» /<br /> ИП Федоров Алексей Михайлович</b> <br />г. Ростов-на-Дону, пр.Буденновский, 83</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн.-Пт.: с 10:00 - 18:00, <br />Сб.: 10:00 – 17:00, <br />Воскресенье: выходной</td>
<td class="goodcont"><i class="fa fa-phone square"></i>+7 (863) 2200-200, <br />
<i class="fa fa-phone square"></i>(863) 2907-000<br />
<i class="fa fa-envelope square"></i>dremarostov@aaanet.ru
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'sankt-peterburg2',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Санкт-Петербург',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Санкт-Петербург | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Санкт-Петербург',
			'keywords' => 'матрасы в магнифлекс, Санкт-Петербург',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX В САНКТ-ПЕТЕРБУРГЕ</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 8;
				var coordLatitude = 60.01;
				var coordLongitude = 30.5;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>

<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон итальяснких матрасов</b> <br />
ул. Новолитовская 15 "В", 5-й этаж, секция 164</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>с 11:00 до 20:00 <br/>без выходных</td>
<td class="goodcont"><i class="fa fa-phone square"></i>+7 (966) 751-26-32<br>
<i class="fa fa-phone square"></i>+7 (812) 640-95-21<br>
<i class="fa fa-phone square"></i>+7 (911) 819-15-27
</td>
<td class="goodexpz">работа <br />по каталогу</td>
</tr>

<tr class="striped">
<td class="goodars"><b>ИП Викерас Я.С.</b> <br />
ул. Савушкина д.141, МЦ "Грейт", 1 этаж</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>с 11:00 до 20:00 <br/>без выходных</td>
<td class="goodcont"><i class="fa fa-phone square"></i>+8 (800) 350-20-27<br>
<i class="fa fa-phone square"></i>+8 (921) 345-54-88<br>
<i class="fa fa-phone square"></i>+8 (921) 876-20-05</td>
<td class="goodexpz">работа <br />по каталогу</td>
</tr>
</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'saratovskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Саратовская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Саратовская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Саратовская обл',
			'keywords' => 'матрасы в магнифлекс, Саратовская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Саратовская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7;
				var coordLatitude = 51.5;
				var coordLongitude = 46.6;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ТЦ "Грин Хаус"</b> <br />
г. Балаково, Саратовская обл, ул. Трнавская дом 24</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (8453) 68-32-90, <br />
<i class="fa fa-phone square"></i>8 (927) 225-32-90
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ТЦ "Проспект"</b> <br />
г. Балаково, Саратовская обл, ул. Факел Социализма дом 24</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (8453) 68-24-36, <br />
<i class="fa fa-phone square"></i>8 (927) 225-24-36
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		array(
			'address' => 'sahalinskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Сахалинская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Сахалинская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Сахалинская обл',
			'keywords' => 'матрасы в магнифлекс, Сахалинская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Сахалинская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 4;
				var coordLatitude = 50.6;
				var coordLongitude = 36.6;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>-</b> <br />
 -</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>-
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'sverdlovskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Свердловская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Свердловская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Свердловская обл',
			'keywords' => 'матрасы в магнифлекс, Свердловская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Свердловская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 6;
				var coordLatitude = 58.5;
				var coordLongitude = 61.6;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Демонстрационный <br />салон-магазин Magniflex</b> <br />
г. Екатеринбург, ул. Ленина, дом 56</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>пн-пт с 10.00 до 20.00<br />
сб-вс с 11.00 до 19.00</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (343) 346-93-10, <br />
<i class="fa fa-phone square"></i>8 (912) 24-58-898
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ИП Корнев Д.Н.</b> <br />
г. Нижний Тагил, ул. Октябрьской революции, дом 66, ЦУМ, 5 этаж, МАТРАС-ЦЕНТР/td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>
</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (912) 287-33-77  <br />
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>



</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		array(
			'address' => 'sevastopol',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Севастополь',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Севастополь | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Севастополь',
			'keywords' => 'матрасы в магнифлекс, Севастополь',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Севастополь</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 10;
				var coordLatitude = 44.6;
				var coordLongitude = 33.6;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>АртМастер</b> <br />Республика Крым,<br /> г. Севастополь , ул.Соловьева 10а <br />и ул.Соловьева 12</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн - Пт с 9.00 до 17.30,<br />
Сб - Вс с 9.00 до 16.00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>+7 (978) 81-24-501,<br />
<i class="fa fa-phone square"></i>+7 (978) 81-24-505<br />
<i class="fa fa-globe square"></i><a href="https://www.matras-sevastopol.com" target="_blank">www.matras-sevastopol.com</a>
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон интерьера "Концепт Холл"</b> <br />299038, Россия, Крым, <br />г. Севастополь, <br />ул.Вакуленчука, д.29, <br />ТРЦ "Муссон", <br />левый мебельный корпус, 2 этаж</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i> с 11.00 до 19.00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>+7 (978) 742-32-07<br />
<i class="fa fa-globe square"></i><a href="https://www.concept-hall.ru" target="_blank">www.concept-hall.ru</a><br />
<i class="fa fa-envelope square"></i>shuga.sev@gmail.com
<i class="fa fa-skype square"></i>shuga.sev<br />
<i class="fa fa-viber square"></i>Viber: +7 978 742 32 07<br />
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'severnaya-osetiya',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Северная Осетия-Алания',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Северная Осетия-Алания | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Северная Осетия-Алания',
			'keywords' => 'матрасы в магнифлекс, Северная Осетия-Алания',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Северная Осетия-Алания</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 8;
				var coordLatitude = 43.5;
				var coordLongitude = 44;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b></b>
г. Владикавказ, пр. Коста, дом 180</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (929) 863-36-88
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		array(
			'address' => 'tambovskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Тамбовская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Тамбовская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Тамбовская обл',
			'keywords' => 'матрасы в магнифлекс, Тамбовская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Тамбовская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7;
				var coordLatitude = 52.6;
				var coordLongitude = 41.6;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Мебельный салон Юнион-Тамбов</b> <br />г. Тамбов, ул. Советская, дом 34
</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн-Пт: 10:00-20:00,
<br />Сб: 10:00-19:00,
<br />Вс: выходной </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (4752) 75-51-12<br />
<i class="fa fa-envelope square"></i>union-tambov@mail.ru

</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>-</b> <br />
 -</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (4752) 75-41-08
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		array(
			'address' => 'tverskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Тверская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Тверская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Тверская обл',
			'keywords' => 'матрасы в магнифлекс, Тверская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Тверская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7;
				var coordLatitude = 57;
				var coordLongitude = 34.7;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>-</b> <br />
 -</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>с 9:00 до 17:00</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (4822) 32-26-26
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		array(
			'address' => 'tomskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Томская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Томская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Томская обл',
			'keywords' => 'матрасы в магнифлекс, Томская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Томская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 6;
				var coordLatitude = 58.2;
				var coordLongitude = 81.5;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ИП Майснер В.</b> <br />
</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (913) 899-94-81
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон мягкой мебели "Ля Рошель"</b> <br />
г. Томск, ул. Яковлева, дом 23</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>С 10.00-19.00 <br />без выходных</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (3822) 65-76-76, <br />
<i class="fa fa-fax square"></i>8 (3822) 65-23-02
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		array(
			'address' => 'tulskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Тульская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Тульская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Тульская обл',
			'keywords' => 'матрасы в магнифлекс, Тульская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Тульская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 8;
				var coordLatitude = 53.8;
				var coordLongitude = 37.5;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Мебельный салон "Элит" </b> <br />
г. Тула, ул. Л. Толстого, дом 91-А </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>с 10 до 19 часов, <br />без выходных<br />
Вс: выходной </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (4872) 70-29-51, <br />
<i class="fa fa-phone square"></i>71-66-63
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b></b>
г. Тула, ул. Коминтерна, дом 24г </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>Пн - Пт: 10.00-19.00;<br />
Сб: 11.00-17.00;<br />
Вс: выходной </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (4872) 31-97-81, <br />
<i class="fa fa-phone square"></i>31-88-62
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон «Мадам Подушкина»<br />ИП "Бобнева" </b> <br />
 г. Алексин, ул. Тульская, дом 136Д, <br />ТЦ «Слобода», бутик 9</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>9:00 - 17:00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (905) 111-11-07
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		array(
			'address' => 'tyumenskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Тюменская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Тюменская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Тюменская обл',
			'keywords' => 'матрасы в магнифлекс, Тюменская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Тюменская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 4;
				var coordLatitude = 62.3;
				var coordLongitude = 72.6;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>СТУДИЯ MOBILI <br />
ООО "Мобили. Су-Тюмень"</b><br/>
625048. г. Тюмень, <br />ул. Максима Горького, дом 68, корпус 3 <br />(Салон находится ЖК "Даудель", <br />200 метров от торгового центра "Гудвин")
</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>пн - сб с 11:00 до 19:00 </td>
<td class="goodcont"><i class="fa fa-phone square"></i>+7 (3452) 97-07-93<br />
<i class="fa fa-globe square"></i><a href="https://www.mobilisu.ru" target="_blank">www.mobilisu.ru</a><br />
<i class="fa fa-envelope square"></i>mobilisu_tyumen@mail.ru</i>
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон ортопедич. матрасов<br />
и кроватей "Матрэкс"-ТЦ "Магнат" </b><br/>
г. Тюмень, ул. 30 лет Победы, дом 7, стр.5, 1 этаж<br/>
</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (34-52)-595-301<br />
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон "Матрасы и аксессуары", салон "Матрэкс"</b><br />
г. Тюмень, ул. Авторемонтная, дом 45, стр.4 <br/>
</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (3452) 43-37-24, <br />
<i class="fa fa-phone square"></i>8 (3452) 74-48-19
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'ulyanovskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Ульяновская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Ульяновская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Ульяновская обл',
			'keywords' => 'матрасы в магнифлекс, Ульяновская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Ульяновская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 7;
				var coordLatitude = 53.8;
				var coordLongitude = 48;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>Салон «NEW STANDART»</b> <br />
г. Ульяновск, ул. Радищева, дом 100</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>с 9:00 до 17:00</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (8422) 73-64-40, <br />
<i class="fa fa-phone square"></i>8 (8422) 73-64-41,  <br />
<i class="fa fa-phone square"></i>8 (951) 096-37-10,  <br />
<i class="fa fa-phone square"></i>8 (906) 144-75-33
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ООО «СТЭК»</b> <br />
</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (8422) 73-64-41
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ТД «ТРОЯ»</b> <br />г. Ульяновск, ул. Урицкого, д. 58
</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>с 9:00 до 18:00</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (8422) 27-33-46
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ТЦ «САРАЙ»</b> <br />г. Ульяновск, ул. Пушкарева, д.11, корпус 2
</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>ежедневно, <br />с 9:00 до 20:00</td>
<td class="goodcont"><i class="fa fa-phone square"></i> 8 (8422) 37-02-50
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ТЦ «ИМПЕРИЯ МЕБЕЛИ»</b> <br />г. Ульяновск, ул. Промышленная, д. 2
</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>пн-вс, с 9:30 до 19:00</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (8422) 62-49-88
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>



</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		array(
			'address' => 'khabarovskii-kray',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Хабаровский край',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Хабаровский край | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Хабаровский край',
			'keywords' => 'матрасы в магнифлекс, Хабаровский край',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Хабаровский край</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 5;
				var coordLatitude = 52.6;
				var coordLongitude = 138;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ООО «Астрид»</b> <br />
 </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (4212) 57-79-12
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		array(
			'address' => 'chelyabinskaya-obl',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Челябинская обл',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Челябинская обл | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Челябинская обл',
			'keywords' => 'матрасы в магнифлекс, Челябинская обл',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Челябинская обл</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 6;
				var coordLatitude = 54.4;
				var coordLongitude = 60.4;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ООО «СТМ»</b> <br />
г. Челябинск, ул. Бр. Кашириных, дом 102-83. </td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (351) 270-82-18
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ИП "Ерохин А.В."</b> <br />
</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i></td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (351) 270-50-72, <br /> <i class="fa fa-phone square"></i>252-42-74
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




</div>

<!--{bottom_sidebar}-->


	</div>
	<div style="clear: both;">
	</div>
</div>
			'
		),
		
		array(
			'address' => 'chechnya',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Чеченская республика',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex, Чеченская республика | Магнифлекс',
			'description' => 'Магазины Магнифлекс, Чеченская республика',
			'keywords' => 'матрасы в магнифлекс, Чеченская республика',
			'text' => '
				<div class="hnb_contarea">
<div class="hnb_catlogsection">
<!--{left_sidebar}-->
</div>
<div class="hnb_conttextright">
<h2 class="hnb_mytitlepag">MAGNIFLEX Чеченская республика</h2>
<div class="hnb_mytitlepagcity">

<style>
				#map {
					height: 370px;
				}
</style>
			<script>
				var zoomIndex = 8;
				var coordLatitude = 43.3;
				var coordLongitude = 45.4;
			</script>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
			<script src="/template/js/object_manager_events.js" type="text/javascript"></script>

		<div id="map"></div>







<br><br>
<table cellspacing="0" class="goodtable obladresstbl">
<tbody>


<tr class="striped">
<td class="goodars">Адрес</td>
<td class="goodtwor">Часы работы</td>
<td class="goodcont">Контакты</td>
<td class="goodexpz">Экспозиция</td>
</tr>

<tr class="striped hnb_mytablegray">
<td class="goodars"><b>ИП Чалаева</b> <br />
</td>
<td class="goodtwor"><i class="fa fa-clock-o square"></i>с 9:00 до 19:00 без выходных</td>
<td class="goodcont"><i class="fa fa-phone square"></i>8 (963) 584-51-16
</td>
<td class="goodexpz">работа по каталогу</td>
</tr>


</tbody>
</table>




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
			<style>
				#google-map {
					 padding: 10px;
				}
			</style>
			<script>
                    var google_zoom = 14;
           			var google_FirstCenter = 54.50806428;
	                var google_SecondCenter = 37.11640250;
			</script>

		 <script type="text/javascript" src="/template/js/map-google.js"></script>
		 <script type="text/javascript" src="/template/js/placemark-google.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

			<div class="hnb_contarea">
				<div class="stores-results-container">
					<div class="container-stores-element container-stores-map">
						<div id="google-map" class="mapp"></div>
					</div>
					<div class="container-stores-element container-stores-page ps">
						<div class="stores-address-container">
							<div class="store-address-container">
								<div class="store-address">
									<div class="store-address-component store-name">Салон «Мадам Подушкина»</div>
									<div class="store-address-component store-address-component-address">ИП "Бобнева" </div>
									<div class="store-address-component store-address-component-address">г. Алексин, ул. Тульская, дом 136Д, ТЦ «Слобода», бутик 9</div>
								</div>
								<div class="expanded-address">
									<div class="store-address-component store-address-component-pone">9:00 - 17:00 </div>
									<div class="store-address-component store-address-component-pone">8 (905) 111-11-07  </div>
								</div>
							</div>
						</div>
					</div>
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
<strong>ООО «Хорс» -  мультибрендовый магазин матрасов «За матрасом»</h3><br />
<br />
<strong>Адрес:</h3> Саратовская обл., г.Балаково, ул. Трнавская 24, ТЦ «Грин Хаус», 0-ой этаж

<br /><br />
<strong>График работы: </h3><br />
Ежедневно с 10.00 до 21.00 ( без перерывов и выходных ).
<br />
<br />
<strong>Телефоны для справок:</h3><br />
8(927)154-71-30.
<br />
<br />

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
<strong>Салон Мебели  "Вилла Деко"</h3>
<br /><br />
<strong>Адрес:</h3> ул. Белгородского Полка, дом 62.

<br /><br />
<strong>Телефоны для справок:</h3><br />
8 (4722) 28-90-82
<br />
<hr class="hnb_myhrled" />
<br />
<br />
<strong>Дизайн-Студия "Мебель Доминика"</h3><br />
<br />

<strong>Адрес:</h3> ул. Князя Трубецкого, дом 1.
<br /><br />

<strong>Телефон для справок:</h3><br />
8 (4722) 33-91-85

<br /><br />
<hr class="hnb_myhrled" />



<br />
<br />
<strong>Салон Мебели "Вилла Деко"</h3><br />
<br />

<strong>Адрес:</h3> ул. Щорса, дом 64А.
<br /><br />

<strong>Телефон для справок:</h3><br />
8 (4722) 28-90-82

<br /><br />
<hr class="hnb_myhrled" />

<br />
<br />
<img src="/img/logo-matras-ko.png">
<br />
<strong>Матрас и Ко</h3><br />
<br />

<strong>Адрес:</h3> г. Белгород, ул. Щорса 45 Д
<br /><br />

<strong>Телефон для справок:</h3><br />
(4722) 37-44-38
<br />
8-951-156-35-18

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
<strong>ООО «СТМ»</h3><br />
<br />

<strong>Адрес:</h3> г. Челябинск, ул. Бр. Кашириных, дом 102-83.
<br /><br />

<strong>Телефоны для справок:</h3><br />
8 (351) 270-82-18
<br />
<br />
<br />
<strong>ИП "Ерохин А.В."</h3><br />
<br />

<strong>Телефоны для справок:</h3><br />
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
<strong>салон "ЭГО Интерьер"</h3><br />
<br />

<strong>Адрес:</h3> г. Череповец,  Советский пр. дом 16 (162600, Вологодская обл.)
<br /><br />

<strong>Телефоны для справок:</h3><br />
8 (8202) 20-22-22
<br /><br />
<strong>Режим работы:</h3><br />
Пн. - Пт.: 10:00 - 20:00, Сб.,Вс.: 11:00 - 18:00
<br />
<br />
<br />
<strong>ИП Хлынов</h3><br />


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
<strong>Демонстрационный салон-магазин Magniflex</h3><br />
<br />
<strong>Адрес:</h3> г. Екатеринбург, ул. Ленина, дом 56.<br /><br /><b>Часы работы:</b><br /><span style="color: #555555;">понедельник-пятница с 10.00 до 20.00</span><br style="color: #555555;"><span style="color: #555555;">суббота-воскресение с 11.00 до 19.00</span>&nbsp; &nbsp;<br /><br />
<strong>Телефоны для справок:</h3><br />
8 (343) 346-93-10, моб: 8 (912) 24-58-898.

<br /><br />
Ассортимент: ортопедические матрасы и подушки<br />&nbsp; &nbsp; &nbsp;&nbsp;<br />
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=0jX1D1eIXGJlzVl5SV61iQbwXstPNFeQ&width=600&height=450"></script>
<br />&nbsp; &nbsp; &nbsp;&nbsp;<br /><span style="color: #555555;">В салоне представлены все модели матрасов, что удобно для полноценного тестирования. Применяется единая ценовая политика - &nbsp;установлены единые цены, как в московском офисе! Вам не нужно дополнительно&nbsp;оплачивать доставку до Екатеринбурга. Сотрудники магазина с удовольствием&nbsp;помогут Вам&nbsp;погрузить покупки в&nbsp;машину или организовать доставку до двери. Действует система скидок по дисконтной карте. Дарим подарки. Приходите!&nbsp;</span><br /><br />
</div>
<br />
<a href="/img/Mf_ekb.jpg" class="boxer" title=""><img style="width: 100%;" src="/img/Mf_ekb_small.jpg" alt="Итальянские ортопедические матрасы Magniflex в Екатеринбурге" /></a>

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
<strong>ИП "Алишанов Сабир" </h3><br />
<br />

<strong>Телефоны для справок:</h3><br />
8 (88662) 40-42-29, 40-98-44, 8 (928) 707-707-3 Анжела.

<br /><br />
Ассортимент: ортопедические матрасы и подушки

<br />
<br />
<strong>Салоны «ОРТЕСС» </h3><br />
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
			'address' => 'kaliningrad',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Калининград',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Калининград | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Калининград',
			'keywords' => 'матрасы в магнифлекс в Калининград, magniflex Калининград, магнифлекс Калининград',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Калининград</h2>
<div class="hnb_mytitlepagcity">
В Калининград продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />
<strong>Адрес</h3><br />
г. Калининград, ул. Красная 115
<br />
<br />

<strong>Телефоны для справок:</h3><br />
+7 (4012) 93-40-86


<b>Часы работы:</b><br>
Пн - пт с 10:00 – 19:00<br>

Сб: 11:00 – 18:00<br>

Вс: выходной
<br /><br />

<b>Сайт:</b><br>
centrsna.ru

<br><br>
Ассортимент: ортопедические матрасы и подушки


<br /><br />
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2e65b5464f85b1daf20dec64e6bb17cafde7f4a13356a45f20e1f95d39a8799f&amp;width=100%25&amp;height=400&amp;lang=ru_UA&amp;scroll=true"></script>




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
<strong>ООО «Астрид»</h3><br />
<br />

<strong>Телефоны для справок:</h3><br />
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
<strong>Мебельный салон "Алькасар"</h3><br />
ООО "Идальго"
<br />
<br />
<strong>Адрес:</h3> ул. Герцена, дом 9.

<br /><br />
<strong>Телефоны для справок:</h3><br />
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
<a style="    color: inherit;" href="/o-magniflex/russia/salon-somovo/"><strong>Салон «СОМОВО МЕБЕЛЬ/CLASSICO ITALIANO»</h3></a><br />

<img src="/img/dealers/Krasnodar_comobo_04.jpg" alt="Салон «СОМОВО МЕБЕЛЬ/CLASSICO ITALIANO»" width="500" />
<br />
<strong>Адрес:</h3> г. Краснодар, ул. Дзержинского 100, Мегацентр «Красная Площадь»,
3 этаж, секция С-167
<br />
<strong>Режим работы:</h3>
 с понедельника по воскресенье с 10:00 до 22:00
<br />

<strong>Телефоны для справок:</h3>
+7-967-311-34-74; +7-918-024-63-36.
<br /><br />
<strong>Ассортимент продукции:</h3><br />

<b>Образцы кубиков 40x60</b>: Merinos - 1 шт., New Comfort Plus 10 - 1 шт., Rest 10 - 1 шт., Stile 8 - 1 шт., Stretching 10 - 1 шт.
<br />
<b>Подушки</b>: Aloe Vera - 1 шт., Freshgel Wave - 1 шт., Relaxsan - 2 шт
<br />
<b>Полноразмерные матрасы</b>: Freshgel 10 - 80*200 см, Naturalmente - 80*200 см, Rest 9 - 160*200 см, Pensiero 7 - 160*200, Rest 10 160*200, New Comfort Plus 160*200, Merinos 80*200, Stile 6  80*200
<br /><br />
<hr class="hnb_myhrled" />
<br />
<br />
<img src="/img/logogudson.png"><br>
<strong>Студия матрасов "ГудСон"</h3><br>
<strong>Адрес:</h3> г. Краснодар, ул.Тополиная, д.36<br>
<strong>Телефоны для справок:</h3> +7 (989) 829-00-29<br>
<strong>эл.почта:</h3> info@gudson.ru<br>
<strong>сайт:</h3> www.gudson.ru<br>
<br />
<hr class="hnb_myhrled" />
<br />
<br />
<strong>Салон "Матрасы и Аксессуары"</h3><br />
<br />

<strong>Адрес:</h3> Краснодарский край, поселок Лазаревский, ул. Калараш, дом 145.
<br /><br />

<strong>Телефон для справок:</h3><br />
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
			'keywords' => 'матрасы в магнифлекс в Красноярск, magniflex  расноярск, магнифлекс Красноярск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Красноярске</h2>
<div class="hnb_mytitlepagcity">
В Красноярске продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Студия мебели "Матрасы и Кровати"</h3><br />
<br />
<strong>Адрес:</h3> г. Красноярск, ул. Красной Звезды, д. 1.
<br /><br />
<strong>Режим работы:</h3><br />
Ежедневно с 9 до 21 часов без обеда и выходных.

<br /><br />
<strong>Телефоны для справок:</h3><br />
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


<strong>Салон мебели «Italine»</h3><br />
<img style="padding-left: 0;" src="/img/magniflex_world/logoitkr.png" alt="Салон мебели Italine - официальный дилер Magniflex в Крыму" />
<br />
<strong>Адрес:</h3> Республика Крым, Симферополь, ул. Кечкеметская, дом 13.<br />
<strong>Телефоны для справок:</h3><br /> 8 (3652) 70-60-36, 8 (978) 787-73-45, 8 (978) 916-65-85.<br />
<strong>Веб-сайт:</h3> www.italine-crimea.ru
<br /><br />
<strong>Режим работы:</h3><br />
Понедельник - Пятница с 10.00 до 18.00,<br />
Суббота - Воскресенье с 10.00 до 16.00

<br /><br />
В салоне выставлены такие модели матрасов, как Naturcomfort, Dualform, Merino и Waterlatex. В наличии имеются ортопедические подушки Magniflex.

<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<br /><br />




<img style="padding-left: 0;" src="/img/logo-artmaster.jpg" alt="Мебель салон АртМастер - официальный дилер Magniflex в Крыму" />
<br />
<strong>Название магазина: АртМастер. ТК "Караван" и ТЦ "Новые Соловьи"</h3>
<strong>Адрес:</h3> Республика Крым, г. Севастополь , ул.Соловьева 10а и ул.Соловьева 12<br />
<strong>Телефоны для справок:</h3><br /> +7-978-81-24-501, +7-978-81-24-505.<br />
<strong>Веб-сайт:</h3><br />www.matras-sevastopol.com<br />

<br />
<strong>Режим работы:</h3><br />
Понедельник - Пятница с 9.00 до 17.30,<br />
Суббота - Воскресенье с 9.00 до 16.00

<br /><br />
<br />
<strong>Мебельный салон "Арт Мастер"</h3>
<strong>Адрес:</h3> Республика Крым, г. Ялта, ул. Большевистская 10, ТЦ Конфетти<br />
<strong>Телефоны для справок:</h3><br /> 8 (978) 949-34-58.<br />

<br />
<strong>Режим работы:</h3><br />
Понедельник - Суббота с 9:00 до 19:00,<br />
Воскресенье - выходной

<br /><br />

<br /><br />

<img style="padding-left: 0;" src="/img/magniflex_world/abgafdgj.png" alt="Салон интерьера Концепт Холл - официальный дилер Magniflex в Крыму" />
<br />
<strong>Название магазина: Салон интерьера "Концепт Холл"</h3>
<strong>Адрес:</h3> 299038, Россия, Крым, г. Севастополь, ул.Вакуленчука, д.29, ТРЦ "Муссон", левый мебельный корпус, 2 этаж<br />
<strong>Телефоны для справок:</h3> +7 978 742 32 07<br />
<strong>Skype:</h3> shuga.sev<br />
<strong>Viber:</h3> +7 978 742 32 07<br />
<strong>Веб-сайт:</h3> www.concept-hall.ru<br />

<br />
<strong>Режим работы:</h3> с 11.00 до 19.00<br />
<strong>Email:</h3> shuga.sev@gmail.com
<br /><br />

<br />
<strong>Дизайн центр "ПерфектДом"</h3><br />
<strong>Адрес:</h3> 299011 Крым, г. Севастополь, ул.Гоголя, 29<br />
<strong>Телефоны для справок:</h3> (8692) 54 35 48<br />
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
			'address' => 'kursk',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Курск',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Курск | Магнифлекс',
			'description' => 'Магазины Магнифлекс в Курск',
			'keywords' => 'матрасы в магнифлекс Курск',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex. Курск</h2>
<div class="hnb_mytitlepagcity">


<strong>Мебельный салон "LION"</h3><br />
<img style="padding-left: 0;" src="/img/magniflex_world/logo-lionkursk.jpg" alt="Мебельный салон LION - официальный дилер Magniflex в Курске" />
<br />
<strong>Адрес:</h3> г. Курск, ул. Мирная, д.11<br />
<strong>Телефоны для справок:</h3> 8(4712) 708-007<br />
<strong>e-mail:</h3> info@lionkursk.ru<br>
<strong>сайт:</h3> www.lion-kursk.ru
<br /><br />
<strong>Режим работы:</h3><br />
пн-пт 10:00 - 19:00, суббота до 17:00, воскресенье - выходной






<br /><br />
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=DBULRC7gyu9PURamK-DOuQ0Ltd_c5Q7C&width=500&height=400&lang=ru_UA&sourceType=constructor"></script>

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


<strong>МТЦ "Сити Дом"</h3><br />

<br />
<strong>Адрес:</h3> ул.Терешковой, дом 41.<br />
<strong>Телефоны для справок:</h3><br /> 8 (384) 290-05-28<br />

<br /><br />

<strong>Торговый центр "Макси дом"</h3><br />

<br />
<strong>Адрес:</h3> Проспект Советский, дом 25А.<br />
<strong>Телефоны для справок:</h3><br /> 8 (384) 290-05-28<br />
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
			'keywords' => 'матрасы в магнифлекс в Липецк, magniflex  расноярск, магнифлекс Липецк',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Липецк</h2>
<div class="hnb_mytitlepagcity">


<br /><br />
<strong>Мебельный салон Юнион-Липецк</h3><br />
<strong>Адрес:</h3> г. Липецк, пл. Заводская, дом 1.
<br /><br />
<strong>e-mail:</h3> union.l@mail.ru<br />
<strong>Режим работы:</h3><br />
Часы работы:
ПН-ПТ: 10:00-20:00,
СБ: 10:00-19:00,
ВС: выходной.

<br /><br />
<strong>Телефоны для справок:</h3><br />
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

<div class="sf_neighbours_list">
			<div class="sf_neighbours_list_title">
				<span class="span">город</span>
				<span class="span">магазин</span>
				<span class="span">адрес</span>
				<span class="span">время работы</span>
				<span class="span">телефон</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">Воскресенский район, поселок Белоозерский</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding textinht">ул. Коммунальная, дом 54</span>
				<span class="span ng-binding">10:00 до 20:00</span>
				<span class="span ng-binding">+7(962) 915-22-22</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Дзержинский</span>
				<span class="span ng-binding">Гранде Мебель</span>
				<span class="span ng-binding textinht">ул. Энергетиков, д. 14а, 8 этаж</span>
				<span class="span ng-binding">10:00 - 21:00 ежедневно</span>
				<span class="span ng-binding">8 (495) 780-35-35 доб. 805</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Дзержинский</span>
				<span class="span ng-binding">Camelgroup в МЦ “АРМАДА”</span>
				<span class="span ng-binding textinht">м. Пражская ул. Кировоградская д.11 корп.1 4 этаж</span>
				<span class="span ng-binding">10:00-22:00 ежедневно</span>
				<span class="span ng-binding">+7 (495) 792-95-60<br>
+7 (495) 792-95-70</span>
			</div>

			 <div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Долгопрудный</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding textinht">ул. Первомайская, дом 54</span>
				<span class="span ng-binding">пн - пт:10.00-20.00<br>
				сб - вс: 10.00-19.00</span>
				<span class="span ng-binding">+7(498) 685-08-34</span>
			</div>


			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Зеленоград</span>
				<span class="span ng-binding">Дом мебели</span>
				<span class="span ng-binding textinht">Панфиловский пр-кт. дом 1, 1 эт.</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7(499) 736-04-39, <br>+7(499) 736-53-08  <br>+7(499) 736-16-79</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Красногорск</span>
				<span class="span ng-binding">Салон Мебели</span>
				<span class="span ng-binding textinht">ул. Ленина, дом 45, помещение 1, 1 этаж </span>
				<span class="span ng-binding">пн-вс: 10:00 - 20:00 </span>
				<span class="span ng-binding">+7(495) 563-86-26<br>+7 (495) 563-04-78</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">Красногорский район, поселок Нахабино</span>
				<span class="span ng-binding">Салон Мебели</span>
				<span class="span ng-binding textinht">ул. Советская, дом 73А.ТЦ "Аверс", 2 этаж, левое крыло </span>
				<span class="span ng-binding">пн-вс: 10:00 - 20:00</span>
				<span class="span ng-binding">+7 (495) 566-37-81</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Куровское</span>
				<span class="span ng-binding">Салон Мебели</span>
				<span class="span ng-binding textinht">ул. Советская, дом 105</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7(496) 411-07-96<br> +7(925) 738-40-42</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Лобня</span>
				<span class="span ng-binding">Шатура-Мебель</span>
				<span class="span ng-binding textinht">ул. Ленина, дом 9, Цокольный этаж</span>
				<span class="span ng-binding">пн - пт: 10.00-20.00; cб - вс: 10.00-19.00 </span>
				<span class="span ng-binding">+7(495) 577-33-86</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">Люберцы, Жулебино</span>
				<span class="span ng-binding">Camelgroup в МТЦ “СКАРАБЕЙ”</span>
				<span class="span ng-binding textinht">м. Выхино МКАД, 8 км.(внешняя сторона), д. 3 стр. 1, 2 этаж</span>
				<span class="span ng-binding">10:00 - 21:00 ежедневно</span>
				<span class="span ng-binding">+7 (495) 509-96-41<br>+7 (495) 509-96-42</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Мытищи</span>
				<span class="span ng-binding">Дизайн Студия</span>
				<span class="span ng-binding textinht">ул. Юбилейная, дом 24А, под. 1, этаж 1, офис 3. </span>
				<span class="span ng-binding">пн-сб: 10:00 - 19:00 </span>
				<span class="span ng-binding">+7 (903) 775-06-22</span>
			</div>
			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Мытищи</span>
				<span class="span ng-binding">Салон "Мир Мебели"</span>
				<span class="span ng-binding textinht">Олимпийский проспект, дом 29, стр. 1, ТЦ "Формат", 3 этаж </span>
				<span class="span ng-binding">пн-вс: 10:00 - 20:00 </span>
				<span class="span ng-binding">+7 (499) 390-30-48<br>+7 (906) 058-38-02</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">Новорижское шоссе, 23 км</span>
				<span class="span ng-binding">Салон Valest</span>
				<span class="span ng-binding textinht">д. Покровское, ул. Центральная, 27, ТК "Покровский", 2 этаж</span>
				<span class="span ng-binding">с 10-00 до 21-00<br/> ежедневно</span>
				<span class="span ng-binding">8 (800) 500-56-79</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">Ногинский район, поселок Черноголовка</span>
				<span class="span ng-binding">Белая Ворона</span>
				<span class="span ng-binding textinht">ул. Березовая, дом 24</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">8 (903) 177-81-57</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<a style="    color: inherit;" href="/o-magniflex/russia/salon-Magniflex-Orthosleep/"><span class="span addr ng-binding">Одинцовский р-н, Новоивановское пгт</span></a>
				<span class="span ng-binding">Бутик "Magniflex&Orthosleep"</span>
				<span class="span ng-binding textinht">ул. Луговая, 2, 3 этаж, матрасная секция</span>
				<span class="span ng-binding">Ежедневно 10:00 - 21:00</span>
				<span class="span ng-binding">+7 901-363-25-28 <br> trikita-butik@mail.ru</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Подольск</span>
				<span class="span ng-binding">ТЦ Шмель</span>
				<span class="span ng-binding textinht">проспект Юных Ленинцев, дом 61 (3-й этаж)</span>
				<span class="span ng-binding">10:00 до 20:00</span>
				<span class="span ng-binding">+7(499) 713-34-37</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Подольск</span>
				<span class="span ng-binding">ТЦ Хамелеон</span>
				<span class="span ng-binding textinht">Симферопольское шоссе, 38 км. 1-й этаж</span>
				<span class="span ng-binding">10:00 до 20:00</span>
				<span class="span ng-binding">+7(963) 990-46-51</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Реутов</span>
				<span class="span ng-binding">Салон мебели Вешняки</span>
				<span class="span ng-binding textinht">ул. Ленина, дом 1А, эт. 2.</span>
				<span class="span ng-binding">Ежедневно: 10.00 до 20.00 </span>
				<span class="span ng-binding">+7(495) 777-91-07<br>+7(985) 121-01-07</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Реутов</span>
				<span class="span ng-binding">Салон "Мебель Италии, России"</span>
				<span class="span ng-binding textinht">м. Новокосино, Юбилейный проспект, дом 30/2, ТЦ "Студия Интерьера", 1 этаж</span>
				<span class="span ng-binding">пн-сб: 10:00 - 20:00<br> вс: 10:00 - 18:00</span>
				<span class="span ng-binding">+7(915) 258-46-46</span>
			</div>

			<div class="sf_neighbours_list_el ng-scope">
				<span class="span addr ng-binding">г. Химки</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding textinht">Юбилейный проспект, дом 7А</span>
				<span class="span ng-binding"></span>
				<span class="span ng-binding">+7(495) 971-41-97</span>
			</div>


</div>


<br /><br /><br /><br />



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
<strong>Мебельный салон "CORSO ITALIA"</h3>
<br />
<br />
<strong>Адрес:</h3> 603001 г. Нижний Новгород, ул. Рождественская, дом 13, БЦ "Муравей", 2-ой этаж.
<br />
<strong>e-mail:</h3> corso@kis.ru<br />
<strong>сайт:</h3> www.corsoitalia.ru<br /><br />
<strong>Режим работы:</h3><br />
ПН-СБ 10:00-19:00, ВС выходной

<br /><br />
<strong>Телефоны для справок:</h3><br />
8 (831) 461-80-94, (831) 461-81-94, (831) 461-80-93.
<br />
<br />
<hr class="hnb_myhrled"><br />
<strong>ИП Шарова Л.А.</h3><br />
<br />

<strong>Режим работы:</h3><br />
8.00-22.00 без выходных

<br /><br />
<strong>Телефоны для справок:</h3><br />
8 (831) 415-51-52, 415-78-67.

<br /><br />
<hr class="hnb_myhrled"><br />
<strong>Мебельный салон Юнион-Нижний Новгород</h3><br />
<strong>Адрес:</h3> г. Нижний Новгород, б. Мира, дом 17а.
<br /><br />
<strong>e-mail:</h3> union@mts-nn.ru<br />
<strong>Режим работы:</h3><br />
Часы работы:
ПН-ПТ: 10:00-20:00,
СБ: 10:00-19:00,
ВС: выходной

<br /><br />
<strong>Телефоны для справок:</h3><br />
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
<strong>ИП Корнев Д.Н.</h3><br />
<br />

<strong>Адрес:</h3> ул. Октябрьской революции, дом 66, ЦУМ, 5 этаж, МАТРАС-ЦЕНТР.
<br /><br />

<strong>Телефоны для справок:</h3><br />
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

<strong>Салон "Матрасы и Кровати"</h3><br />
<br />

<strong>Адрес:</h3> ул. Красный проспект, дом 99, "Центр Здорового Сна".
<br />
<strong>Режим работы:</h3><br />
Понедельник - Пятница: 11.00-19.00; <br />
Суббота: 11.00-18.00;<br />
Воскресенье: 11.00 до 17.00

<br />
<strong>Телефоны для справок:</h3><br />
8 (383) 220-88-10, 8 (913) 987-82-49.
<br /><br /><br />

<strong>Салон "Ортофлекс"</h3><br />
<br />

<strong>Адрес:</h3> ул. Станционная, дом 62, Салон "Матрасы и Кровати", 1 эт.
<br />
<strong>Режим работы:</h3><br />
Понедельник - Пятница: 10.00-20.00; <br />
Суббота: 11.00-16.00;<br />
Воскресенье: выходной.

<br />
<strong>Телефоны для справок:</h3><br />
8 (383) 380-08-16, 380-95-16.
<br />
<br />
<br />
<strong>Адрес:</h3> ул. Светлановская, дом 50, ТВК "Большая Медведица", 2 этаж, отдел "Ортофлекс".
<br />
<strong>Режим работы:</h3><br />
10:00-21:00, без обеда и выходных.

<br />
<strong>Телефоны для справок:</h3><br />
8 (383) 380-81-16<br /><br />

<br />
<strong>Студия «Мебели Лекса» </h3><br />
<br />
<strong>Адрес:</h3> 630112, Новосибирская область, г. Новосибирск, ул. Фрунзе, д.228.
<br />
<strong>Режим работы:</h3><br />
Понедельник - Суббота: 10:00 – 19:00, <br />
Воскресенье: выходной
<br />
<strong>Телефоны для справок:</h3><br />
+7 (383) 362-28-30, +7 (913) 921-92-10.
<br /><br /><br />

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
<img src="/img/log_armada.jpg" alt="Мегамолл Армада Галерея Лувр - официальный дилер Magniflex в Оренбурге">
<br />
<br />

<strong>Мегамолл "Армада" Галерея Лувр.</h3><br />
<br />

<strong>Адрес:</h3> г. Оренбург, Шарлыкское шоссе, дом 1. салон "Davidoff"
<br /><br />
<b>Часы работы:</b><br />
с 10:00 до 22:00<br />
<strong>Телефоны для справок:</h3><br />
8 (3532) 61-84-95, 20-16-73. e-mail: studiy_davidoff@mail.ru, www.mebel-davidoff.ru

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
<strong>Мебельный салон Юнион-Пенза</h3><br />
<br />


<strong>Адрес:</h3> г. Пенза, ул. Плеханова, дом 34.
<br /><br />

<strong>Режим работы:</h3><br />
ПН-ПТ: 10:00-20:00,
СБ: 10:00-19:00,
ВС: выходной

<br /><br />
<strong>Телефоны для справок:</h3><br />
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
<strong>ООО "МНК"</h3><br />
<br />

<strong>Адрес:</h3> г. Пермь, ул. Кронштадская, дом 29<br />
<strong>Режим работы:</h3> будни с 9-00 до 18-00<br />
<strong>Web-сайт:</h3> www.magniflex59.ru
<br /><br />

<strong>Общий телефон для справок:</h3> +7 (950) 450-52-25 (ежедневно без выходных с 9-00 до 18-00)

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

					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Ростове</h2>
<div class="hnb_mytitlepagcity">
В Ростове продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />


<strong>Общий телефон для справок:</h3> +7 (950) 450-52-25 (ежедневно без выходных с 9-00 до 18-00)

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
			'address' => 'rostov-na-donu',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Ростов-на-Дону',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Ростове-на-Дону | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Ростов-на-Дону',
			'keywords' => 'матрасы в магнифлекс в Ростов-на-Дону, magniflex Ростов-на-Дону, магнифлекс Ростов-на-Дону',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Ростове-на-Дону</h2>
<div class="hnb_mytitlepagcity">
В Ростове-на-Дону продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>ОТКРЫТИЕ ДИЛЕРСКОГО ШОУ-РУМА 20 МАЯ 2017 года
</h3><br /><br />
<a style="    color: inherit;" href="/o-magniflex/russia/ip-dragynov/"><strong> ИП Драгунов Алексей Сергеевич</h3></a><br /><br />
<strong>Адрес:</h3> г. Ростов-на-Дону, ул. Закруткина 2/2      <br />
<strong>Режим работы:</h3> Вт. – Пт.: 10:00 – 19:00, Сб. – Вс.: 10:00 – 18:00, Пн.: - выходной день<br />
<strong>Телефоны:</h3> 229-97-59, 270-13-47, 8-938-123-83-88
<br />
<strong>E-MAIL:</h3>  magniflex.rostov@gmail.com<br />
Доставка бесплатно, заказ без предоплаты. <br />
Приглашаем к сотрудничеству магазины и дизайнерские студии. <br />

<br /><br />



<strong> "Студия матрасов Дрёма» / ИП Федоров Алексей Михайлович</h3><br />
<br />

<strong>Адрес:</h3> г. Ростов-на-Дону, пр.Буденновский, 83<br />
<strong>Режим работы:</h3>
Пн.-Пт.:  с 10:00 - 18:00, Сб.: 10:00 – 17:00, Воскресенье: выходной<br />
<strong>Телефоны:</h3> +7 (863) 2200-200, (863) 2907-000<br />
<strong>E-MAIL:</h3>  dremarostov@aaanet.ru<br />
<strong>Сайт:</h3>  dremarostov.ru<br />
<br /><br />

Ассортимент: ортопедические матрасы и подушки
<br /><br />
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3APDmsaC1aocD7W9_dvUcAESlO4po0otMD&amp;width=100%25&amp;height=400&amp;lang=ru_UA&amp;scroll=true"></script>


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
В Санкт-Петербурге с продукцией компании Магнифлекс можно ознакомится в салонах или ЗАКАЗАТЬ НА НАШЕМ САЙТЕ (гарантируем быструю доставку в течение 1-2 дней).

<br /><br />

<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=ks74JM8j-bF-YI_fPjiwxTomQApTGgPJ&amp;width=100%25&amp;height=450&amp;lang=ru_UA&amp;sourceType=constructor&amp;scroll=true"></script>

<br /><br />
<h3>Официальные сертифицированные дилеры в г. Санкт-Петербург *</h3>
<br />
<strong>ИП Арутюнов </h3> – официальный представитель в г. Санкт-Петербург<br />
<strong>Где посмотреть:</h3> МЦ Аквилон, ул. Новолитовская 15к.В, 5 этаж <br /> секция 188 (Merinos, Waterlattex, Naturalmente) <br /> 3 этаж  секция 80 (Merinos, Rest 9)<br /><br />
<strong>Часы работы:</h3> ежедневно 10:00 - 20:00<br />
<strong>Склад:</h3> ул. Афонская, д. 14<br />
<strong>Телефоны для справок:</h3><br />
+7 921 906-79-00, 8 (812) 670-84-82 <br />
<strong>e-mail:</h3> duetspb@mail.ru<br />
<hr class="hnb_myhrled">
<br /><br />

<strong>МЦ "ГРЕЙТ"</h3><br />
<strong>Адрес:</h3> г. Санкт-Петербург, ул Кожевенная линия, д.30, INTERLOFT. И.П. ВИКЕРАС Я.С.<br />
<strong>Телефоны для справок:</h3><br />
+7 (921) 876-20-05<br />
<hr class="hnb_myhrled">
<br /><br />

<strong>«Элит-мебель»</h3><br />
<strong>Адрес:</h3> г. Санкт-Петербург, ул. Марата, д.61<br />

<strong>Телефоны для справок:</h3><br />
8 (812) 314-10-26<br />
<strong>Режим работы:</h3>
<br />
Пн - Сб: с 10:00 - 20:00
<br />
Вс: с 11:00 - 19:00
<br />
<strong>Сайт: </h3>https://elite-meb.ru<br />
<strong>e-mail: </h3>aurora-spb@inbox.ru<br />
<strong>На экспозиции: </h3>Merino Merinos 90x200; Pensiero 7 90x200; Freshgel 10 90x200; New Comfort Plus 10 90x200<br>
<hr class="hnb_myhrled">
<br /><br />

<strong>«Элит-мебель» в МЦ «Континент»</h3><br />
<strong>Адрес:</h3> г. Санкт-Петербург, ул. Варшавская, д.3, 4 этаж, секция 433<br />

<strong>Телефоны для справок:</h3><br />
8 (812) 337-17-63<br />
<strong>Режим работы:</h3>
<br />
с 10:00 до 20:00 ежедневно
<br />
<strong>Сайт: </h3>https://elite-meb.ru<br />
<strong>e-mail: </h3>aurora-spb@inbox.ru<br />
<strong>На экспозиции: </h3> Pensiero 7 80x200; Rest 9 80x200; Stile 6 40x60; Stretching 9 40x60<br>
<hr class="hnb_myhrled">

<br /><br />
Ассортимент: ортопедические матрасы и подушки
<br /><br />
<hr class="hnb_myhrled">

<br />
<p>* - приобретение продукции Magniflex у компаний, не указанных в данном списке, не гарантирует их оригинальное происхождение и отсутствие подделки.</p>



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

<strong>ООО "Сфера-1"</h3><br />
<strong>Адрес:</h3> г.Сочи, ул.Транспортная, дом 28, 1 этаж.
<br />
<strong>Телефоны для справок:</h3> 8(8622) 25-87-53, 8 918 404 70 99<br />
<strong>e-mail:</h3>1@tigsochi.ru<br />
<strong>Режим работы:</h3><br />
10.00 - 21.00 без перерывов и выходных.
<br /><br />

<strong>ИП Королев В.В.</h3><br />
8 918 207 39 39<br>
<strong>e-mail:</h3>wkorolev@mail.ru<br />

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
<strong>Мастерская матрасов « Mr. Mattress» </h3><br />
<br />

<strong>Адрес:</h3> мкр. Надежда, дом 5, ТЦ «Всё для Вас» 1 эт, пав. 4.
<br /><br />

<strong>Режим работы:</h3><br />
Понедельник - Пятница: 10.00-19.00; <br />
Суббота: 10.00-18.00;<br />
Воскресенье: выходной.

<br /><br />
<strong>Телефоны для справок:</h3><br />
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

<strong>Телефоны для справок:</h3><br />
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

<strong>Телефоны для справок:</h3><br />
8 (4752) 75-41-08

<br /><br />
Ассортимент: ортопедические матрасы и подушки<br />
<hr class="hnb_myhrled">
<br /><br />
<strong>Мебельный салон Юнион-Тамбов</h3><br />
<strong>Адрес:</h3> г. Тамбов, ул. Советская, дом 34.
<br /><br />
<strong>e-mail:</h3> union-tambov@mail.ru<br />
<strong>Режим работы:</h3><br />
ПН-ПТ: 10:00-20:00,
СБ: 10:00-19:00,
ВС: выходной.

<br /><br />
<strong>Телефоны для справок:</h3><br />
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
<strong>ИП Майснер В.</h3><br />
<br />

<strong>Телефоны для справок:</h3><br />
8 (913) 899-94-81
<br />
<br />
<br />
<strong> Салон мягкой мебели "Ля Рошель"</h3><br />
<br />

<strong>Адрес:</h3>  г. Томск, ул. Яковлева, дом 23.
<br /><br />
<strong>Режим работы:</h3><br />
С 10.00-19.00 без выходных

<br /><br />
<strong>Телефоны для справок:</h3><br />
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

<strong>Мебельный салон "Элит"</h3><br />
<br />

<strong>Адрес:</h3> ул. Л. Толстого, дом 91-А.
<br /><br />
<strong>Режим работы:</h3><br />
Понедельник - Пятница: 10.00-19.00; <br />
Суббота: 11.00-17.00;<br />
Воскресенье: выходной.

<br /><br />
<strong>Телефоны для справок:</h3><br />
8 (4872) 31-97-81, 31-88-62.
<br />
<br />
<br />

<strong>Адрес:</h3> г. Тула, ул. Коминтерна, дом 24г.
<br /><br />

<strong>Режим работы:</h3><br />
с 10 до 19 часов,  без выходных.

<br /><br />
<strong>Телефоны для справок:</h3><br />
8 (4872) 70-29-51, 71-66-63.
<br />
<br />
<br />

<strong>Салон «Мадам Подушкина»</h3><br />
ИП "Бобнева"
<br />
<br />

<strong>Адрес:</h3> г. Алексин, ул. Тульская, дом 136Д, ТЦ «Слобода», бутик 9.
<br /><br />
<strong>Режим работы:</h3><br />
9:00 - 17:00

<br /><br />
<strong>Телефоны для справок:</h3><br />
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
<b>Часы работы:</b><br />
с 9:00 до 17:00<br />
<strong>Телефоны для справок:</h3><br />
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
<strong>СТУДИЯ MOBILI</h3><br />
Юридическое лицо: ООО "Мобили. Су-Тюмень" <br />

<img src="/img/dealers/tyumen-01.jpg" alt="Студия MOBILI - официальный дилер Magniflex в Тюмене">
<br />

<strong>Адрес:</h3> 625048. г. Тюмень, ул. Максима Горького, дом 68, корпус 3 (Салон находится ЖК "Даудель", 200 метров от торгового центра "Гудвин")<br />
<strong>Режим работы:</h3> с понедельника по субботу с 11:00 до 19:00
<br /><br />

<strong>Телефон для справок:</h3> +7 (3452) 97-07-93<br />
<strong>Web-сайт:</h3> www.mobilisu.ru<br />
<strong>E-mail:</h3> mobilisu_tyumen@mail.ru<br />
<br />

<strong>Ассортимент продукции:</h3> <br />
Представлены полноразмерные матрасы: Merino (merinos), Orthomemo Merino<br />
Ортопедические подушки: Relaxsan, Aloe vera, Orthomassage, Memory, Memoform comfort<br />
Образцы матрасов размером 40х60: Merino (merinos), Green tea, Merino bamboo, Naturalmente, Orthomemo Merino, Waterlattex.
<br /><br />


<hr class="hnb_myhrled" />

<br />
<br />
<strong>Салон ортопедич. матрасов и кроватей "Матрэкс"-ТЦ "Магнат"</h3><br />
<br />

<strong>Адрес:</h3> г. Тюмень,  ул. 30 лет Победы, дом 7, стр.5, 1 этаж.
<br /><br />



<strong>Телефон для справок:</h3><br />
8 (3452) 75-47-74

<br /><br />
<hr class="hnb_myhrled" />
<br />
<br />
<strong>Салон "Матрасы и аксессуары", салон "Матрэкс"</h3><br />
<br />

<strong>Адрес:</h3> ул. Авторемонтная, дом 45, стр.4
<br /><br />



<strong>Телефон для справок:</h3><br />
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

<strong>PRIVATE COLLECTION</h3>
<br /><br />
<strong>сайт:</h3><br />
www.privatecollectionufa.ru

<br /><br />
<strong>Телефоны для справок:</h3><br />
+7(347) 2912-616

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
			'title' => 'Официальные магазины Magniflex в Ульяновске',
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


<strong>Салон «NEW STANDART»</h3><br />

<strong>Адрес:</h3> ул. Радищева, дом 100<br />
<b>Часы работы:</b> с 9:00 до 17:00<br />
<strong>Телефоны для справок:</h3><br />
8 (8422) 73-64-40, 8 (8422) 73-64-41, 8 (951) 096-37-10, 8 (906) 144-75-33
<br />
<br />
<br />

<strong>ООО «СТЭК»</h3><br />

Ассортимент: ортопедические матрасы и подушки<br />
<strong>Телефон для справок:</h3> 8 (8422) 73-64-41

<br />
<br />
<br />

<strong>ТД «ТРОЯ»</h3><br />

<strong>Адрес офиса продаж:</h3> ул. Урицкого, д. 58
<br />
<b>Часы работы:</b> с 9:00 до 18:00<br />
<strong>Телефон для справок:</h3> 8 (8422) 27-33-46
<br />
<br />
<br />

<strong>ТЦ «САРАЙ»</h3><br />

<strong>Адрес:</h3> ул. Пушкарева, д.11, корпус 2
<br />
<b>Часы работы:</b> ежедневно, с 9:00 до 20:00<br />
<strong>Телефон для справок:</h3> 8 (8422) 37-02-50
<br />
<br />
<br />

<strong>ТЦ  «ИМПЕРИЯ МЕБЕЛИ»</h3><br />

<strong>Адрес:</h3> ул. Промышленная, д. 2
<br />
<b>Часы работы:</b> пн-вс, с 9:30 до 19:00<br />
<strong>Телефон для справок:</h3> 8 (8422) 62-49-88
<br /><br /><br />

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

<strong>Адрес:</h3> г. Владикавказ, пр. Коста, дом 180, тел: 8 (929) 863-36-88.

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

<strong>ООО «Дом Мебели»</h3><br />
<br />
<b>Часы работы:</b><br />
с 9-30 до 18-30 воскресение выходной<br />
<strong>Телефоны для справок:</h3><br />
8 (4242) 72-28-18, 72-28-08.
<br />
<br />
<br />
<strong>Студия Мебели "Green Street"</h3><br />
ИП Киселев АО
<br />
<br />
<br />


<strong>Интерьер салон "Green Street",ИП Киселев.</h3><br />
<br />
<strong>Адрес:</h3><br />693006, САХАЛИНСКАЯ ОБЛАСТЬ, ЮЖНО-САХАЛИНСК, ЛЕНИНА, 321/1<br />
<strong>График работы:</h3><br /> Ежедневно 9:00 – 21:00.<br />
<strong>Телефоны для справок:</h3><br />
8 (4242) 277-2-50, 8 (962) 112-79-49

<br /><br />
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=YTfhXJpziPk43BDRGw-oRVCdObpLnlCt&width=600&height=450"></script>
<br />
<br />
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
			'address' => 'yalta',
			'parent_address' => 'o-magniflex/russia',
			'parent_name' => 'Адреса магазинов в России',
			'name' => 'Ялта',
			'left_sidebar' => 'adresa-magazinov',
			'bottom_sidebar' => 'address-russia',
			'title' => 'Матрасы и подушки Magniflex в Ялте | Магнифлекс',
			'description' => 'Магазины Магнифлекс в городе Ялта',
			'keywords' => 'матрасы в магнифлекс в Ялте, magniflex Ялта, магнифлекс Ялта',
			'text' => '
				<div class="hnb_contarea">
					<div class="hnb_catlogsection">
					<!--{left_sidebar}-->
					</div>
					<div class="hnb_conttextright">

					<h2 class="hnb_mytitlepag">Magniflex в Ялте</h2>
<div class="hnb_mytitlepagcity">
В Ялте продукцию компании Магнифлекс (ортопедические подушки и матрасы) можно посмотреть и приобрести в следующих салонах, магазинах:
<br />
<br />

<strong>Мебельный салон "Арт Мастер"</h3>
<strong>Адрес:</h3>
Республика Крым, г. Ялта, ул. Большевистская 10, ТЦ Конфетти
<br />
<strong>Телефоны для справок:</h3>
<br>
8 (978) 949-34-58.
<br>
<br>
<strong>Режим работы:</h3>
<br>
Понедельник - Суббота с 9:00 до 19:00,
<br>
Воскресенье - выходной
<br />
<br />
<br /><br />
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=JaSwOLtjUp0tE_Vn0KCLILZf9qkNpkOp&amp;width=600&amp;height=450&amp;lang=ru_UA&amp;sourceType=constructor&amp;scroll=true"></script>
<br />
<br />
Ассортимент: ортопедические матрасы и подушки




</div>

					<!--{bottom_sidebar}-->

					</div>
					<div style="clear: both;">
					</div>
				</div>
			'
		),










	);

?>