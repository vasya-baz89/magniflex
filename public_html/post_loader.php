<?php

$post_loader = array();

$social_footers = array(
//facebook
array(1 /*0.55*/, '<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : "175591192857982",
      xfbml      : true,
      version    : "v2.7"
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, "script", "facebook-jssdk"));
</script>
<div class="sf_fbbox_fix">
	<div class="fb-like-box" data-href="https://www.facebook.com/MagniflexOfficial" data-width="280"  data-show-faces="true" data-stream="false" data-header="true"></div>
</div>
'),
//вконтакте
array(0, '
<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "250", height: "300", color1: "FFFFFF", color2: "2B587A", color3: "5B7FA6"}, 48064313);
</script>
'),
//twitter
array(0 /*0.25*/, '
<div class="sf_twitterbox_fix">
<a class="twitter-timeline" href="https://twitter.com/MagniflexRus" data-widget-id="672182305952284673" width="280" height="250">Твиты от @MagniflexRus</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
'),
//Одноклассники 
array(0 /*0.20*/, '
<div id="ok_group_widget"></div>
<script>
!function (d, id, did, st) {
var js = d.createElement("script");
js.src = "https://connect.ok.ru/connect.js";
js.onload = js.onreadystatechange = function () {
if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
if (!this.executed) {
this.executed = true;
setTimeout(function () {
OK.CONNECT.insertGroupWidget(id,did,st);
}, 0);
}
}}
d.documentElement.appendChild(js);
}(document,"ok_group_widget","56663124607018","{width:250,height:230}");
</script>
'),
);
$post_loader['social_footer'] = '
<div class="bottom_title">
Мы в Соцсетях. Присоединяйтесь!
</div>';
$i = 0;
foreach($social_footers as &$social_footer){
	$i += $social_footer[0]*100;
	$social_footer['rnd'] = $i;
}
$social_footers_rnd = rand(1,100);
foreach($social_footers as $el){
	if($el['rnd'] >= $social_footers_rnd){
		$post_loader['social_footer'] .= $el[1];
		break;
	}
}

$post_loader['announce_items'] = '
	<div class="announce_item">
		<a href="/news/vistavka-italya-2015/">Презентация УМНОГО МАТРАСА от Magniflex<br />на выставке в Милане</a>
	</div>
	<div class="announce_item">
		ЦЕНЫ СНИЖЕНЫ!!!
	</div>
';

$post_loader['footer_social_icons'] = '
	<div class="copyright"><div class="footer_social_icon">
						
		
			
	</div></div>
';

$post_loader['phone_me'] = '
	<div class="form_content">
		<div class="fancybox-item fancybox-close sf_close" onclick="hide_popup();"></div>
		<form id="phone_me_form" class="sf_form" action="/tools/form.php" method="POST" onsubmit="return form_send(this);">
			<input type="hidden" name="n" value="Перезвоните мне" />
			<div class="form_input">
				<span>Ваше имя:*</span>
				<input type="text" name="name" />
				<div class="clear"></div>
			</div>
			<div class="form_input">
				<span>Номер телефона:*</span>
				<input type="text" name="phone" class="phone_mask" />
				<div class="clear"></div>
			</div>
			<div class="form_input">
				<span>Удобное время для звонка:</span>
				<textarea maxlength="15" name="time_to_call"></textarea>
				<div class="clear"></div>
			</div>
			<div class="form_submit">
				<input type="submit" value="Отправить" />
				<div class="clear"></div>
			</div>
		</form>
	</div>
';

$post_loader['another_sz'] = '
	<div class="form_content">
		<div class="fancybox-item fancybox-close sf_close" onclick="hide_popup();"></div>
		В магазине представлены все размеры матрасов, которые есть в наличии в достаточном количестве на складе. В случае, если Вам необходим матрас иного размера - его срок доставки из Италии составляет 2-4 недели.<br><br>Точную стоимость и сроки уточните у менеджеров по телефонам справочной службы:<br><br><span class="default_text_phone">+7 (495) 989-11-32</span><br>
		<p></p>
<form method="POST" id="size-form"  >	
	<p><span>Какой размер матраса вас интересует?</span>
	<input type="text" name="size-1" id="size-1" required>	</p>
	<p><span>Номер телефона:</span>
	<input type="text" name="phone_1" id="phone_1" required  x-autocompletetype="phone">	</p>		
	<p class="submit"><input onclick="gtag(\'event\', \'conversion\', {\'send_to\': \'AW-669190695/ZTIJCI-HgdcBEKeUjL8C\', \'event_callback\': function () { if (typeof(url) != \'undefined\') {window.location = url;}}}); ym(28675206, \'reachGoal\', \'size_form\'); return true;" type="submit" value="отправить"></p>
</form>
	</div><script>
jQuery(document).ready(function(){	
$("#phone_1").mask("+7 (999) - 999-99-99");
	$("#size-form").submit(function () {
		alert("Спасибо! Наши специалисты обязательно позвонят Вам!"); 
		$.ajax({
			type : "post",
			url : "/template/size_form.php",
			data : $("#size-form").serializeArray(),
			dataType : "json",
			success: function (response) {
				
			}
		});
			
	});
});
</script>
'

;

$post_loader['wait_sk'] = '
	<div class="form_content">
		<div class="fancybox-item fancybox-close sf_close" onclick="hide_popup();"></div>
		Уважаемый Посетитель!<br><br>Вы можете оставить свои контактные данные: телефон или e-mail, а мы будем оповещать Вас о проводимых акциях и спецпредложениях.
		<form id="phone_me_form" class="sf_form" action="/tools/form.php" method="POST" onsubmit="return form_send(this);">
			<input type="hidden" name="n" value="Сообщить о скидке" />
			<div class="form_input">
				<span>Ваше имя:</span>
				<input type="text" name="name" />
				<div class="clear"></div>
			</div>
			<div class="form_input">
				<span>Номер телефона:</span>
				<input type="text" name="phone" class="phone_mask" />
				<div class="clear"></div>
			</div>
			<div class="form_input">
				<span>E-mail:</span>
				<input type="text" name="email" />
				<div class="clear"></div>
			</div>
			<div class="form_input">
				<span>Матрасы:</span>
				<input type="checkbox" name="skidka_mat" checked="checked" />
				<div class="clear"></div>
			</div>
			<div class="form_input">
				<span>Подушки:</span>
				<input type="checkbox" name="skidka_pod" checked="checked"/>
				<div class="clear"></div>
			</div>
			<!--<div class="form_input">
				<span>Примечание:</span>
				<textarea maxlength="30" name="comment"></textarea>
				<div class="clear"></div>
			</div>-->
			<div class="form_submit">
				<input  onclick="gtag(\'event\', \'conversion\', {\'send_to\': \'AW-669190695/PW3oCN-GgdcBEKeUjL8C\', \'event_callback\': function () { if (typeof(url) != \'undefined\') {window.location = url;}}}); ym(28675206, \'reachGoal\', \'waitmt_skmt\'); return true;" type="submit" value="Отправить" />
				<div class="clear"></div>
			</div>
		</form>
	</div>
';


$post_loader['post_success'] = '
	<div class="form_content">
		<div class="fancybox-item fancybox-close sf_close" onclick="hide_popup();"></div>
		Спасибо, <div id="your_name"></div>
		<br/><br/>Наши специалисты обязательно позвонят Вам в указанное время!
	</div>
';

$post_loader['addcart_success'] = '
	<div class="form_content">
		<div class="title">Товар добавлен в корзину</div>
		<div class="fancybox-item fancybox-close sf_close" onclick="hide_popup();"></div>
		<div class="add_cart_popup">
			<div id="add_cart_popup">
				<img src="" alt="" />
				<p>Merino (Merinos), размер: 200х200</p>
				<hr>
				<a href="/cart/">Перейти в корзину</a>
			</div>
		</div>
	</div>
'



;

$post_loader['order_success'] = '
<div class="form_content">
<p style="font-size:19.5px; font-weight:500;">Мы искренне благодарим Вас за покупку! Ваш Номер заказа: <span id="order_n"></span></p>
<p><b>МЫ ВАМ ПОЗВОНИМ</b><br>
	Специалист службы «Заботы о Клиентах Магнифлекс» перезвонит Вам в ближайшее время, чтобы уточнить детали заказа. </p>
	<p>
	<b>СОСТОЯНИЕ ЗАКАЗА</b><br>
	Чтобы получить информацию о текущем состоянии заказа:<br>
	- позвоните по телефону: <span class="default_text_phone">+7 (495) 989-11-32</span><br>
	- напишите на info@magniflex.ru<br>
</p>
<div class="order_pay_wrap">
<div  class="fancybox-item fancybox-close sf_close" onclick="hide_popup();"></div>
<p class="order_pay_p">
	<b style="font-size: 24px;">ВЫБЕРИТЕ СПОСОБ ОПЛАТЫ ЗАКАЗА</b>
</p>
<div class="order_pay_block">
	<a href="javascript:;" class="single--btn button--blue" id="order_pay_online">Онлайн-оплата банковской картой</a>
	<a href="javascript:;" class="single--btn button--blue only_msk" id="order_pay_nalkurier">Наличными: курьеру в момент получения заказа. Для Москвы и МО</a>
	<a href="javascript:;" class="single--btn button--blue only_msk" id="order_pay_kurier">Банковской картой: курьеру в момент получения заказа. Для Москвы и МО</a>
	<a href="javascript:;" class="single--btn button--blue" id="order_pay_beznal">Безналичный платеж с оплатой по счету: для физических и юридических лиц</a>
</div>
<div class="order_pay_text_after" style="display:none!important">
	<div id="order_pay_nalkurier_ta"><span style="color:#090;font-size:20px;"><b>Выбранный способ оплаты: наличными курьеру в момент получения заказа</b></span><br><br>Оплата наличными доступна покупателям из Москвы и Московской области при условии осуществления доставки фирменной службой доставки Magniflex.<br>Курьер доставит Вам товар и необходимые документы на дом.<br><br></div>
	<div id="order_pay_kurier_ta"><span style="color:#090;font-size:20px;"><b>Выбранный способ оплаты: банковской картой при получении товара</b></span><br><br>Оплата карточкой доступна покупателям из Москвы и Московской области при условии осуществления доставки фирменной службой доставки Magniflex.<br>Курьер доставит Вам товар и необходимые документы на дом.<br><br></div>
	<div id="order_pay_beznal_ta"><span style="color:#090;font-size:20px;"><b>Выбранный способ оплаты: безналичный платеж с оплатой по счету</b></span><br><br>Запросить выставление счета возможно в дополнительных пожеланиях к заказу или по телефону +7 (495) 989 11 32.<br><br>Для выставления счета в адрес юридических лиц потребуется предоставить карточку предприятия.<br>Для выставления счета в адрес физических лиц потребуется предоставить ФИО, адрес, номер телефона и e-mail.<br><br></div>
	<div id="order_pay_online_ta"><span style="color:#090;font-size:20px;"><b>Онлайн-оплата прошла успешно</b></span><br></div>
</div>
</div>
</div>
';

$post_loader['kz_banner'] = '
	<div class="kz_banner">
		<img class="img1" src="/img/banners/kz_banner/magni-kz.png" alt="Матрасы для Казахстана" />
		<div class="center">
			<span class="title">Для покупателей из КАЗАХСТАНА</span><br><br>
			Быстрая доставка до дома!<br><br>
			Удобные способы оплаты!<br><br>
			<a class="show_more" href="/o-magniflex/magniflex-mattresses-world/kazahstan/" title="Купить матрасы для Казахстана">
				Узнать подробности
			</a>
		</div>
		<img class="img2" src="/img/banners/kz_banner/magni-kz2.png" alt="Купить матрас Казахстан" />
		<a href="#" class="med-cookie-accept">Узнать подробности</a>
	</div>
	<a class="close">Закрыть X</a>
';

/*$post_loader['med_cookies'] = '
	<div class="med-cookies-inside">
			<a style="position: absolute;    left: -105px;    top: 6px;" href="/skidki-magniflex/chernaya-pyatnicya/">
					<img src="http://www.watchcases.ru/images/logo-bfn.png" alt="Шкатулки для часов с автоподзаводом Altitude" class="hnbblackfridaysale2">
			</a>
				
				<div style="color: #FFEF0A;line-height: 50px;margin-top: -10px;font-size: 16px;"><a style="color: #FFEF0A;" href="/skidki-magniflex/chernaya-pyatnicya/">Чёрная пятница: только 3 дня с 25 по 27 ноября 20% скидка на все матрасы и подушки!</a><span class="med-cookie-accept" style="background: url(http://www.watchcases.ru//images/krestik.png) no-repeat left 19px;font-size: 11px;color: #FFEF0A;width: 70px;text-align: right;right: -50px;" onclick="">ЗАКРЫТЬ</span> </div>

';*/


echo(json_encode($post_loader));

?>
