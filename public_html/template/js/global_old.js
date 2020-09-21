function closePriceUp(){
	$('.ama-alert-plank').slideUp()	
	$.cookie('ama-planka-hide', true, { expires: 1, path: "/" })
}

function closeAmaTimerPlank(){
	$('body').removeClass('timerPlank')
	$.cookie('ama-planka-timer', true, { expires: 1, path: "/" })
}


function openYoutubeVideo(video) {
	$('#video-pre').attr('src', video)
	$('.ama_video_modal').show()
}

function closeYoutubeVideo() {
	$('.ama_video_modal').hide()
}

function openYoutubeVideoHtml(video) {
	$('#video-pre-html').attr('src', video)
	$('.ama_video_modal_html').show()
	document.getElementById('html_video').play()
}

function closeYoutubeVideoHtml() {	
	$('#video-pre-html').attr('src', '')
	$('.ama_video_modal_html').hide()
}

function readyMenu() {
	$('.menu .sr_sizes2 .left_sidebar').removeClass('worlmagniflex')
	$('.menu .sr_sizes2 .left_sidebar').addClass('angle1')
	$('.menu .sr_sizes2 .left_sidebar li').addClass('angle')
	$('.menu .sr_sizes2 .left_sidebar').removeClass('left_sidebar')
	$('.menu .sr_sizes2 .angle ul').hide()
	$('.sr_sizes2').removeClass('ama_hide_sidebar')
}

function send_order_pay_type(order, type){
	$.post('/send_order_pay_type.php', {order:order, type:type}, function(){
		console.log('send_order_pay_type: '+order+' ~~ '+type);
	});
}

function order_pay_btn_click_hide(){
	$('.order_pay_wrap').hide();
	$("#info").hide();
	$('.buy_one_click').removeClass('flex_buy');
	hide_popup();
}

function order_pay_btn_init(order){
	if(typeof newgeoip_func != 'undefined'){
		newgeoip_func();
	}
	console.log(order);
	$('#order_pay_nalkurier').click(function(){
		var type = $(this).text();
		order_pay_btn_click_hide();
		send_order_pay_type(order.order_n, type);
		$.fancybox.open('<div class="form_content" style="font-size: 18px;">'+$('#order_pay_nalkurier_ta').html()+'</div>');
	});
	$('#order_pay_kurier').click(function(){
		var type = $(this).text();
		order_pay_btn_click_hide();
		send_order_pay_type(order.order_n, type);
		$.fancybox.open('<div class="form_content" style="font-size: 18px;">'+$('#order_pay_kurier_ta').html()+'</div>');
	});
	$('#order_pay_beznal').click(function(){
		var type = $(this).text();
		order_pay_btn_click_hide();
		send_order_pay_type(order.order_n, type);
		$.fancybox.open('<div class="form_content" style="font-size: 18px;">'+$('#order_pay_beznal_ta').html()+'</div>');
	});
	if(order.online_pay_avaible){
		$('#order_pay_online').removeClass('hide');
		$('#order_pay_online').click(function(){
			var type = $(this).text();
			order_pay_btn_click_hide();
			send_order_pay_type(order.order_n, type);
			
			var widget = new cp.CloudPayments();
			widget.charge({ // options
				publicId: 'pk_c86de342294aac700ccbc71ec2dbb',  //id из личного кабинета
				description: 'Оплата заказа', //назначение
				amount: order.order_price, //сумма
				currency: 'RUB', //валюта
				invoiceId: order.order_n, //номер заказа  (необязательно)
				accountId: order.client_phone, //идентификатор плательщика (необязательно)
				skin: "modern", //дизайн виджета
				data: {
					email: order.client_email,
					phone: order.client_phone,
					name: order.client_name,
					cart: order.goods,
				}
			},
			function (options) { // success
				//действие при успешной оплате
				$.fancybox.open('<div class="form_content" style="font-size: 18px;">'+$('#order_pay_online_ta').html()+'</div>');
			},
			function (reason, options) { // fail
			   $.fancybox.open('<div class="form_content" style="font-size: 18px;color:#900;">Ошибка оплаты<br><br>'+reason+'</div>');
			});
			
		});
	}
	else{
		$('#order_pay_online').addClass('hide');
	}
}

$('.payCustomBtn').click(function(e){
	$cur_form = $(this).parents('.payCustomForm');
	
	var errorMsg = '';
	if(!$cur_form.find('input[name="sum"]').val()){
		errorMsg = 'Введите сумму для оплаты';
	}
	if($cur_form.find('input[name="name"]').val().length < 3){
		errorMsg = 'Введите Ваше имя';
	}
	if($cur_form.find('input[name="phone"]').val().length < 3 || $cur_form.find('input[name="phone"]').val().indexOf('7') == -1 && $cur_form.find('input[name="phone"]').val().indexOf('8') == -1){
		errorMsg = 'Введите Ваш номер телефона';
	}
	if($cur_form.find('input[name="email"]').val().length < 3 || $cur_form.find('input[name="email"]').val().indexOf('@') == -1){
		errorMsg = 'Введите Ваш e-mail';
	}
	if(errorMsg){
		$cur_form.find('.payCustomErrorText').text(errorMsg);
		$cur_form.find('.payCustomErrorText').addClass('show');
		return false;
	}
	else{
		$cur_form.find('.payCustomErrorText').text('');
		$cur_form.find('.payCustomErrorText').removeClass('show');
	}
	
	$cur_form.find('.hiddenBtn').html('<div></div>');
	$cur_form.find('.hiddenBtn div').click(function(){
		var widget = new cp.CloudPayments();
		widget.charge({ // options
			publicId: 'pk_c86de342294aac700ccbc71ec2dbb',  //id из личного кабинета
			description: 'Оплата онлайн', //назначение
			amount: parseInt($cur_form.find('input[name="sum"]').val()), //сумма
			currency: 'RUB', //валюта
			accountId: $cur_form.find('input[name="phone"]').val(), //идентификатор плательщика (необязательно)
			skin: "modern", //дизайн виджета
			data: {
				email: $cur_form.find('input[name="email"]').val(),
				phone: $cur_form.find('input[name="phone"]').val(),
				name: $cur_form.find('input[name="name"]').val(),
				sum: $cur_form.find('input[name="sum"]').val(),
			}
		},
		function (options) { // success
			$.post('/send_online_pay_success.php', $cur_form.find('.hiddenBtn form').serialize(), function(e){
				//
			});
		},
		function (reason, options) { // fail
		   $.fancybox.open('<div class="form_content" style="font-size: 18px;color:#900;">Ошибка оплаты<br><br>'+reason+'</div>');
		});
	});
	$cur_form.find('.hiddenBtn div').click();
});


document.addEventListener('DOMContentLoaded', readyMenu)

var is_storage = !!localStorage || !!window['localStorage'] || false
var cache_time = 0 * 60 * 1000 //5 min
_no_history = false

//rees46 utm
if (location.search.toString().indexOf('utm_source=rees') != -1) {
	document.cookie = 'rees46_utm=1; path=/; expires=2592000'
}

var now = new Date()
var $sf_datepicker = $('input[name="date"]')
if ($sf_datepicker.length > 0) {
	$sf_datepicker.pickadate({
		close: 'закрыть',
		format: 'dd.mm.yyyy',
		min: true
	})
}

if (typeof window.devicePixelRatio != 'undefined') {
	if (window.devicePixelRatio > 1) {
		$('html').addClass('pixelratio-m')
	}
}

String.prototype.splice = function(idx, rem, s) {
	return this.slice(0, idx) + s + this.slice(idx + Math.abs(rem))
}

$('.custom-select__active').click(function() {
	if ($(this).next('.custom-select__options').hasClass('is-active')) {
		$(this).next('.custom-select__options').removeClass('is-active')
		$(this).removeClass('arrow-main-block-rotate1')
	} else {
		$('.custom-select__active').removeClass('arrow-main-block-rotate1')
		$(this).removeClass('is-active')
		$('.custom-select__options').removeClass('is-active')
		$(this).next('.custom-select__options').addClass('is-active')
		$(this).addClass('arrow-main-block-rotate1')
	}
})

function product_discount_persent(){
	var old_price = $("#old_price").text();
	var new_price = $('#prod_price').text();
	if(old_price){
		new_price =  new_price.replace(/[^0-9]/g,'');
		old_price = old_price.replace(/[^0-9]/g,'');

		console.log('product_discount_persent: '+old_price+' '+new_price);
		
		$('.discount_persent_value').text(Math.round((1-new_price/old_price)*100)).parents('.discount_persent').show();
		
	}
	else $('.discount_persent').hide();
}

function changePrice(){
	try{
		if($('#prod_sizes').length > 0){
			
			var price = Number($('#prod_sizes').val()).toLocaleString()	
			$('#prod_price').html(price + ' <span class="rub_price">P</span>')

			show_discount_size()				
			product_discount_persent();

			
			// var price = Number($('#prod_sizes').val()).toLocaleString()	
			// $('#prod_price').html(price + ' <span class="rub_price">P</span>')
		}
	}catch(e){}

	var new_price = $('#prod_price').text()
	if(new_price){
		new_price =  new_price.replace(/[^0-9]/g,'')
		new_price = Number(new_price).toLocaleString()
		$('#prod_price').html(new_price + ' <span class="rub_price">P</span>') 
	}

	var old_price = $('#old_price').text()
	if(old_price){
		old_price =  old_price.replace(/[^0-9]/g,'')
		old_price = Number(old_price).toLocaleString()
		$('#old_price').html(old_price + ' <span class="rub_price">P</span>') 
	}
}

function show_discount_size() {
	
	$('#old_price')
		.parent()
		.hide()
	if ($('#prod_sizes option:selected').attr('old_koef')) {
		var new_price = parseInt($('#prod_sizes').val() * parseFloat($('#prod_sizes option:selected').attr('old_koef'))).toString()
		//console.log('new price: ' + new_price + typeof(new_price));
		var old_price = parseInt($('#prod_sizes').val()).toString()
		//console.log('old price: ' + old_price + typeof(old_price));
		if (old_price) {
			$('#old_price')
				.html(old_price.splice(old_price.length - 3, 0, ' ') + ' <span class="rub_price">P</span>')
				.parent()
				.show()
			//console.log($('#prod_price').html());
			//console.log(new_price.splice(new_price.length-3, 0, ' '));
			$('#prod_price').html(new_price.splice(new_price.length - 3, 0, ' ') + ' <span class="rub_price">P</span>')
		}
	}
	if ($('#prod_sizes option:selected').attr('old_price')) {
		var old_price = parseInt($('#prod_sizes option:selected').attr('old_price')).toString()
		if (old_price) {
			$('#old_price')
				.html($('#prod_price').html())
				.parent()
				.show()
			$('#prod_price').html(old_price.splice(old_price.length - 3, 0, ' ') + ' <span class="rub_price">P</span>')
		}
	}

	if ($('#prod_sizes option:selected').length < 1 && $('#old_price').length > 0) {
		var old_price = parseInt($('#old_price').html()).toString()
		$('#old_price')
			.html($('#prod_price').html() + ' <span class="rub_price">P</span>')
			.parent()
			.show()
		$('#prod_price').html(old_price.splice(old_price.length - 3, 0, ' ') + ' <span class="rub_price">P</span>')
	}


	if ($('.old_price').attr('data-oldprice') && $('.old_price').attr('data-oldprice').length > 1) {
		var old_price = parseInt($('.old_price').attr('data-oldprice')).toString()
		$('#old_price')
			.html(old_price + ' <span class="rub_price">P</span>')
			.parent()
			.show()
	}
}

$(window).load(function(){
	//show_discount_size()
	product_discount_persent();
	changePrice();
});

function change_menu_img(i) {
	var menuImagesArray = [
		'/img/mattresse.png',
		'/img/children_menu.png',
		'/img/product/very_small/pillow.png',
		'/img/product/very_small/Acsesuar.png',
		// '/img/product/very_small/Acsesuar.png',
		'/img/pled_menu.png',
		'/img/product/very_small/MEMOFORM ORTHOMASSAGE SUP MX-5.jpg',
		'/img/product/very_small/MEMOFORM COMFORT SUP MX-2.jpg'
	]

	var index = i - 1
	$('.right_column img').attr('src', menuImagesArray[index])
}

// mobile main menu
$('#main_menu .menu .mobile-grover').click(function() {
	if ($(this).hasClass('active')) {
		$(this).removeClass('active')
		return
	}
	$('#main_menu .menu .mobile-grover').removeClass('active')
	$(this).addClass('active')
})

// cart functions
function set_coupon(coupon_id){
	if($('#'+coupon_id).length > 0){
		if($('#sf-loader').length > 0) $('#sf-loader').addClass('load');
		$.post('/tools/cart.php', {act: 'set_coupon', coupon: $('#'+coupon_id).val()}, function(data){
			data = $.parseJSON(data);
			var set_coupon_result = parseInt(data.set_coupon_result) || 0;
			if(set_coupon_result){
				$('.coupon_error').removeClass('active');
				$('#input_coupon').addClass('success');
				$('.coupon_success').addClass('active');
				load_basket({act: 'cart'});
			}
			else{
				$('.coupon_error').addClass('active');
				$('.coupon_success').removeClass('active');
				$('#input_coupon').removeClass('success');
			}
			if($('#sf-loader').length > 0) $('#sf-loader').removeClass('load');
		});
	}
	else console.log('coupon_id #'+coupon_id+' not found');
}

function mini_basket_print(total_price, total_count) {
	if (total_count > 0) {
		$('.mini_basket').show()
		$('.mini_basket .price').html(total_price)
		$('.mini_basket .count').html(total_count).promise().done(function(){
			$('.mini_basket .count').addClass('show_count_fix')
		});
		$('.mini_basket_print .count').html(total_count)
	} else {
		$('.mini_basket .count').hide()
	}
}

function add_to_cart(name, size, count) {
	$.post(
		'/tools/cart.php',
		{
			act: 'add_to_cart',
			prod: name,
			size: size,
			count: count
		},
		function(data) {
			data = $.parseJSON(data)
			//console.log(data)
			var total_price = data.total_price || 0
			var total_count = data.total_count || 0
			mini_basket_print(total_price, total_count)
			$('#addcart_success').show()
			$('#sf_overlay').show()
			var prod_title = name
			if (size) prod_title += ', размер: ' + size
			$('#add_cart_popup p').html(prod_title)
			var small_img = data.small_img || 0
			if (small_img) $('#add_cart_popup img').attr('src', small_img)
			// show_popup($('#addcart_success'))

			gtag('event', 'conversion', {
				  'send_to': 'AW-669190695/LtR1COH_gNcBEKeUjL8C',
				  'value': 100.0,
				  'currency': 'RUB',
				  'event_callback': function () {
					if (typeof(url) != 'undefined') {
					  window.location = url;
					}
				  }
			  });
		}
	)
}

function load_basket(params) {
	$.post('/tools/cart.php', params, function(data) {
		data = $.parseJSON(data)
		console.log(data)

		var total_base_price = data.total_base_price || 0
		var total_price = data.total_price || 0
		var total_count = data.total_count || 0
		console.log(total_count)
		if (total_count > 0) {
			var basket_table = data.basket_table || ''
			$('#basket_table').html(basket_table)
			$('#basket_total_price').text(total_price)
			if (total_base_price != total_price) $('#basket_total_base_price').text(total_base_price + ' р.')
			else $('#basket_total_base_price').text('')
			$('.sf_basket_null').hide()
			$('.btn_order').show()
			$('#basket_table').show()
			$('.basket_total').show()
			$('.mini_basket a .count').html(total_count)
		} else {
			$('.sf_basket_null').show()
			$('.btn_order').hide()
			$('#basket_table').hide()
			$('.basket_total').hide()
			$('.mini_basket a .count').hide()
		}
		
		mini_basket_print(total_price, total_count);
		
		var coupon_koef = parseFloat(data.coupon_koef) || 0;
		if($('#coupon_skidka').length > 0 && coupon_koef > 0 && coupon_koef < 1){
			$('#coupon_skidka').html(coupon_koef * 100);
		}
		if($('#input_coupon').length > 0 && $('#base_coupon').length > 0){
			$('#input_coupon').val($('#base_coupon').val());
			if($('#input_coupon').val()){
				$('#input_coupon').addClass('success');
				$('.coupon_success').addClass('active');
				$('.coupon_error').removeClass('active');
			}
		}
	})
}

function basket_change(el, act) {
	$parent = $(el).parents('div.cart_item_row')
	var count = parseInt($parent.find('.it_count .sf_base_quantity').val())
	var size = 0

	if ($parent.find('.it_sizes select option[oldselected="oldselected"]').length > 0) {
		size = $parent.find('.it_sizes select option[oldselected="oldselected"]').text()
		console.log(size)
	}

	var params = {
		act: 'cart',
		prod: $parent.find('.sf_cart_prod_name').val(),
		size: size,
		count: count
	}

	if (act == 'plus') {
		params.act = 'change'
		params.new_count = count + 1
	} else if (act == 'minus') {
		if (count < 2) return
		params.act = 'change'
		params.new_count = count - 1
	} else if (act == 'change') {
		params.act = 'change'
		params.new_size = $parent.find('.it_sizes select option:selected').text()
		if (params.new_size == params.size) return
	} else if (act == 'delete') {
		params.act = 'delete'
	}

	load_basket(params)
}

//popup functions
function show_popup($el) {
	$('.sf_popup').hide()
	$('#sf_overlay').show()
	$el.show()
	$el.css({
		top: ($(window).height() - $el.height()) / 2 - 20
	})
}

function hide_popup() {
	$('.sf_popup').hide()
	$('#callback_form').hide()
	$('#size_form').hide()
	$('.menu_children_container').removeClass('open')
	$('.buy_one_click').removeClass('flex_buy')
	$('#sf_overlay').removeClass('overlay_extra')
	$('#sf_overlay').hide()
}

function form_send(form) {
	var name = ''
	if ($(form).find('input[name="name"]').length > 0)
		name = $(form)
			.find('input[name="name"]')
			.val()

	var form_id = $(form).attr('id')

	if (form_id == 'mfeedback') {
		if (
			$(form)
				.find('input[name="name"]')
				.val() == ''
		) {
			alert('Не заполнено поле Ваше имя')
			return false
		}
		if (
			$(form)
				.find('input[name="email"]')
				.val() == ''
		) {
			alert('Не заполнено поле Ваш E-mail')
			return false
		}
		if (
			$(form)
				.find('textarea[name="comment"]')
				.val() == ''
		) {
			alert('Не заполнено поле Сообщение')
			return false
		}
	}

	if (form_id == 'phone_me_form') {
		if (
			$(form)
				.find('input[name="name"]')
				.val() == ''
		) {
			alert('Не заполнено поле Ваше имя')
			return false
		}
		if (
			$(form)
				.find('input[name="phone"]')
				.val() == ''
		) {
			alert('Не заполнено поле Номер телефона')
			return false
		}
	}

	if (form_id == 'order_form') {
		if (
			$(form)
				.find('input[name="name"]')
				.val() == ''
		) {
			alert('Не заполнено поле Фамилия, имя, отчество')
			return false
		}
		if (
			$(form)
				.find('input[name="phone"]')
				.val() == ''
		) {
			alert('Не заполнено поле Номер телефона')
			return false
		}
		if (
			$(form)
				.find('input[name="address"]')
				.val() == ''
		) {
			alert('Не заполнено поле Адрес доставки')
			return false
		}
		if (
			!$(form)
				.find('input[name="agree_check"]')
				.is(':checked')
		) {
			alert('Согласитесь с условиями обработки персональных данных')
			return false
		}

	}
	
	$(form).find('input[type="submit"]').attr("disabled", true);
	
	$(form).append('<input type="hidden" name="sf" value="s1" />');

	/* отслеживание событий */
	if (form_id == 'phone_me_form') {
		ing_events({
			category: 'form',
			action: 'send',
			label: 'callback'
		})
	}
	if (form_id == 'order_form') {
		ing_events({
			category: 'form',
			action: 'send',
			label: 'order_success'
		})
	}
	if (form_id == 'mfeedback') {
		ing_events({
			category: 'form',
			action: 'send',
			label: 'feedback'
		})
	}

	$.ajax({
		type: 'POST',
		url: $(form).attr('action'),
		data: $(form).serialize()
	}).done(function(data) {
		if($(form).find('input[name="sf"]').length > 0) $(form).find('input[name="sf"]').remove();
		if (form_id == 'order_form') {
			if (data) {
				var yaParams = $.parseJSON(data);
				
				if (typeof gtag != 'undefined' && typeof yaParams.order_n != 'undefined'){
				  var gtag_order_price = yaParams.order_price || 10000.0;
				  gtag('event', 'conversion', {
					  'send_to': 'AW-669190695/2U53CPiMiNcBEKeUjL8C',
					  'value': gtag_order_price,
					  'currency': 'RUB',
					  'transaction_id': yaParams.order_n,
					  'event_callback': function () {
						if (typeof(url) != 'undefined') {
						  window.location = url;
						}
					  }
				  });
				  hide_popup()
				}
				
				try {
					ym(28675206, 'reachGoal', 'order_success');
					ym(28675206, 'reachGoal', 'order_order');
				} catch (err) {
					console.log(err)
				}
				if (typeof yaParams.order_n != 'undefined' && $('#order_n').length > 0){
					$('#order_n').text(yaParams.order_n);
					
					dataLayer.push({
						"ecommerce": {
							"purchase": {
								"actionField": {
									"id" : yaParams.order_n
								},
								"products": yaParams.goods,
							}
						}
					});
				}

				if (is_storage) {
					localStorage['add_product_to_basket'] = ''
					localStorage['view_category'] = ''
				}
			}
		}

		if ($('#post_success #your_name').length > 0) $('#post_success #your_name').html(name)
		if ($(form).attr('id') == 'order_form') {
			$('#order_form').html($('#order_success').html());
			order_pay_btn_init(yaParams);
		} else {
			show_popup($('#post_success'))
		}
		
		$(form).find('input[type="submit"]').removeAttr("disabled");
		
		console.log(data)
		//TODO
		
		hide_popup()
	})

	return false
}

/* anon function init once */
jQuery(function($) {
	//working time
	var now = new Date().getDay()
	if (now == 0 || now == 6) $('.sf_time_js').html('10:00 — 19:00')

	//sf main menu child_cont position
	// $('#main_menu .menu > a').mouseover(function() {
	// 	var $cont = $(this)
	// 		.parent()
	// 		.find('.menu_children_container')
	// 	var wrap_end = $('#wrap').offset().left + $('#wrap').outerWidth()
	// 	var cont_end = $cont.offset().left + $cont.outerWidth()
	// 	if (cont_end > wrap_end) {
	// 		$cont.css({
	// 			right: 0
	// 		})
	// 	}
	// })

	// sf main menu adv block show
	$('#main_menu .children_block > div > a').mouseover(function() {
		var img =
			$(this)
				.parent()
				.find('img')
				.attr('src') || 0
		var text =
			$(this)
				.parent()
				.find('span')
				.html() || 0
		if (img || text) {
			var text_part1 = '',
				text_part2 = ''
			if (
				typeof $(this)
					.next()
					.attr('href') != 'undefined'
			)
				text_part2 =
					' ' +
					$(this)
						.next()
						.text()
			if (
				typeof $(this)
					.prev()
					.attr('href') != 'undefined'
			)
				text_part1 =
					$(this)
						.prev()
						.text() + ' '
			var html = '<a href="' + $(this).attr('href') + '">'
			if (img) html += '<img src="' + img + '" />'
			html += '</a><strong>' + text_part1 + $(this).text() + text_part2 + '</strong>'
			if (text) html += '<span>' + text + '</span>'
			$(this)
				.parents('.menu_children_container')
				.find('.children_advanced_panel')
				.html(html)
		}
	})
	$('#main_menu .menu_children_container').each(function() {
		var $prod = $(this).find('.children_block .product:eq(0)')
		var html = '<a href="' + $prod.find('a:eq(0)').attr('href') + '">'
		html += '<img src="' + $prod.find('img:eq(0)').attr('src') + '" />'
		html += '</a><strong>' + $prod.find('a:eq(0)').text() + '</strong>'
		html += '<span>' + $prod.find('span:eq(0)').text() + '</span>'
		$(this)
			.find('.children_advanced_panel')
			.html(html)
	})

	//sf mobile-active menu_top
	$('.hide_show_menu_wrap').click(function() {})

	/* init_load - start at any load page (ajax pagination or load full page once) */
	function init_load() {
		//fix
		if ($('.scroll-to-top-button').length > 0) $('.scroll-to-top-button').remove()

		//mobile scrollTo
		if (is_mobile() || location.href.indexOf('sf_debug') != -1) {
			var links_length = document.links.length
			for (var i = 0; i < links_length; i++) {
				var $cur = $(document.links[i])
				if ($cur.attr('rel')) continue
				if ($cur.attr('href').toString()[0] == '/' && $cur.attr('href').indexOf('.') == -1 && $cur.attr('href').indexOf('//') == -1 && $cur.attr('href').indexOf('/rss/') == -1) {
					document.links[i].hash = '#scroll_content'
				}
			}
		}

		//mini basket update
		if (location.pathname.toString() != '/cart/') {
			$.post(
				'/tools/cart.php',
				{
					act: 'mini_basket'
				},
				function(data) {
					data = $.parseJSON(data)
					console.log(data)
					var total_price = data.total_price || 0
					var total_count = data.total_count || 0
					mini_basket_print(total_price, total_count)
				}
			)
		}

		if ($('a.boxer').length > 0) {
			if ($('a.boxer.relgallery').length > 0) $('a.boxer.relgallery').attr('rel', 'relgallery')
			if ($('a.boxer.relgallery2').length > 0) $('a.boxer.relgallery2').attr('rel', 'relgallery2')
			$('a.boxer').fancybox({})
		}
		if ($('a.boxer_video').length > 0) {
			$('a.boxer_video').attr('rel', 'videogallery')
			$('a.boxer_video').fancybox({
				type: 'iframe'
			})
		}

		if ($('#slides').length > 0) {
			$('#slides').bxSlider({
				pager: false,
				pause: 7000,
				autoHover: true,
				auto: true,
				autoDelay: 5000,
				onSlideAfter: function(){
					if(typeof processScroll != 'undefined') processScroll();
				}
			})
		}

		if ($('#slides2').length > 0) {
			$('#slides2').bxSlider({
				pager: false,
				pause: 7000,
				autoHover: true,
				auto: true,
				autoDelay: 5000,
				onSlideAfter: function(){
					if(typeof processScroll != 'undefined') processScroll();
				}
			})
		}

		var slides = document.querySelectorAll('.bx-wrapper img')
		function isValidZoom(element, index, array) {
			return element.style.zoom == '100%' || element.style.zoom == '105%'
		}

		if ($('#coin-slider').length > 0) {
			$('#coin-slider').coinslider({
				width: 550,
				delay: 5000,
				hoverPause: true
			})
		}
		if ($('#coin-slider2').length > 0) {
			$('#coin-slider2').coinslider({
				width: 550,
				delay: 5000,
				hoverPause: true
			})
		}
		if ($('.left_sidebar a')) {
			$('.left_sidebar a').each(function() {
				if ($(this).attr('href') == location.pathname) {
					$(this).addClass('active')
				}
			})
		}

		if ($('.gal2 a').length > 0) {
			$('.gal2 a').fancybox({})
		}

		// if ($('.easyzoom').length > 0) {
		// 	$('.easyzoom').easyZoom()
		// }

		if ($('.sf_info > ul.sf_labels > li').length > 0) {
			$('.sf_info > ul.sf_labels > li').click(function(event) {
				event.preventDefault()
				var $tab_block = $(this).parents('.sf_info')
				$tab_block.find('ul.sf_labels > li').each(function() {
					if ($(this).hasClass('active')) $(this).removeClass('active')
				})
				$(this).addClass('active')

				$tab_block.children('div').each(function() {
					$(this).hide()
				})
				$tab_block.children('div:eq(' + $(this).index() + ')').show()
			})
		}
		//plus minus
		if ($('.sf_base_quantity').length > 0) {
			$('.sf_base_quantity').each(function() {
				$(this)
					.prev()
					.click(function() {
						var val = parseInt(
							$(this)
								.next()
								.val()
						)
						if (val > 1)
							$(this)
								.next()
								.val(val - 1)
						else
							$(this)
								.next()
								.val(1)
					})
			})
			$('.sf_base_quantity').each(function() {
				$(this)
					.next()
					.click(function() {
						$(this)
							.prev()
							.val(
								parseInt(
									$(this)
										.prev()
										.val()
								) + 1
							)
					})
			})
		}
		if ($('.sf_cat_text_btn').length > 0 && $('#prod_similar_info').length > 0) {
			$('.sf_cat_text_btn').click(function() {
				$(this).slideUp()
				$('#prod_similar_info').slideDown()
			})
		}

		//size select
		{
			var price = $('#prod_price').text()
			price = price.splice(price.length - 3, 0, ' ')
			$('#prod_price').html(price + ' <span class="rub_price">P</span>')
		}

		
		//$(document).ready(function(){
		show_discount_size()
		product_discount_persent();
		if ($('#prod_sizes').length > 0) {
			$('#prod_sizes').change(function() {
				changePrice()
			})
		}

		
		$('#prod_buy1').click(function() {
			$('.buy_one_click').toggleClass('flex_buy')
			$('.buy_one_click').removeClass('one_click_pay')
			$('#sf_overlay').show()
			$('#buy_one_click').focus()
			changePrice()
		})


		

		// $('#prod_sizes').change()
		// //});

		//yandex map
		if ($('#yakonp').length > 0) {
			;(function() {
				var e = document.createElement('script')
				e.src = '//api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abd9e55c22449dfbfaaf17d788226e86c1136e4b21833afae2e431f1dbf7425a9&amp;width=700&amp;height=500'
				e.type = 'text/javascript'
				document.getElementById('yakonp').appendChild(e)
			})()
		}
		if ($('#yamap_sam').length > 0) {
			;(function() {
				var e = document.createElement('script')
				e.src = '//api-maps.yandex.ru/services/constructor/1.0/js/?sid=WozJBtVhoPQsYNP1ikWTycplW4VAzpp9&width=700&height=500'
				e.type = 'text/javascript'
				document.getElementById('yamap_sam').appendChild(e)
			})()
		}

		// коллекции анимация
		if ($('.hnb_elite_content').length > 0) {
			setTimeout(function() {
				$('html, body')
					.stop()
					.animate({
						scrollTop: $('#main_menu').offset().top - 10
					})
			}, 500)

			var scrollflag = [true, true]

			/* высота начиная с которой заработает анимация, формула ("высота елемента от начала документа" - "высота окна"),
			у каждой групы своя высота: либо высота верхнего елемента (сейчас так) или среднего (если нужно попозже ее проигрывать)
			p.s. если у родителей есть position:relative, суммируем offsetTop елемента и родителей */
			var elementtop = [$('#hnb_elcont1title').get(0).offsetTop - $(window).height(), $('#hnb_3nelement').get(0).offsetTop + $('.hnb_elcont2').get(0).offsetTop - $(window).height()]

			//стрелка для скрола вниз
			var img_top_height = $('.hnb_elcont1').height()
			var img_top_minus = 300
			var img_top_flag = false
			var bottom_copy_abs = false
			$('.strbott').click(function() {
				if ($(this).hasClass('bottom_copy') && !bottom_copy_abs) {
					$(this).css({
						position: 'absolute'
					})
					bottom_copy_abs = true
				}
				$('.hnb_elcont1')
					.stop()
					.animate(
						{
							height: img_top_height - img_top_minus
						},
						700
					)
				$('html, body').animate(
					{
						scrollTop: $('.hnb_elcont2:eq(0)').offset().top - img_top_minus
					},
					1000,
					function() {
						img_top_flag = true
					}
				)
			})

			var animate_function = function() {
				/* анимация показывается если она еще не показывалась и скролл приблизился к самому верхнему елементу групы */
				if (scrollflag[0] && $(window).scrollTop() > elementtop[0]) {
					//1 група
					scrollflag[0] = false

					$('.hnb_elcont1>#hnb_elcont1title')
						.css({
							'margin-top': '-70px',
							opacity: '0.1'
						})
						.animate(
							{
								'margin-top': '0px',
								opacity: '1'
							},
							1500
						)
					$('.hnb_elcont1>.hnb_elcont1text')
						.css({
							'margin-left': '-660px',
							opacity: '0.1'
						})
						.animate(
							{
								'margin-left': '0px',
								opacity: '1'
							},
							1500
						)
					$('.hnb_elcont1>.hnb_elcont1text2')
						.css({
							'margin-left': '660px',
							opacity: '0.1'
						})
						.animate(
							{
								'margin-left': '0px',
								opacity: '1'
							},
							1500
						)
					$('.hnb_elcont1>.hnb_imgefel')
						.css({
							position: 'relative',
							bottom: '-100px',
							opacity: '0.1'
						})
						.animate(
							{
								position: 'relative',
								bottom: '0px',
								opacity: '1'
							},
							1500
						)
				}
				if (scrollflag[1] && $(window).scrollTop() > elementtop[1]) {
					//2 група
					scrollflag[1] = false
					$('#hnb_3nelement>div:nth-child(1)')
						.css({
							'margin-left': '-70px',
							opacity: '0.1'
						})
						.animate(
							{
								'margin-left': '0px',
								opacity: '1'
							},
							1500
						)
					$('#hnb_3nelement>div:nth-child(2)')
						.css({
							'margin-left': '70px',
							'margin-top': '-70px',
							opacity: '0.1'
						})
						.animate(
							{
								'margin-left': '0px',
								'margin-top': '0px',
								opacity: '1'
							},
							1500
						)
					$('#hnb_3nelement>div:nth-child(3)')
						.css({
							position: 'relative',
							left: '70px',
							opacity: '0.1'
						})
						.animate(
							{
								position: 'relative',
								left: '0px',
								opacity: '1'
							},
							1500
						)
				}

				/* востановление высоты картинки */
				if (img_top_flag && $(window).scrollTop() <= $('.hnb_elcont1').offset().top + $('.hnb_elcont1').height() - 100) {
					$('.hnb_elcont1')
						.stop()
						.animate(
							{
								height: img_top_height
							},
							500,
							function() {
								img_top_flag = false
							}
						)
				} else if (!img_top_flag && $(window).scrollTop() > $('.hnb_elcont1').offset().top + $('.hnb_elcont1').height() - img_top_minus - 100) {
					$('.hnb_elcont1')
						.stop()
						.animate(
							{
								height: img_top_height - img_top_minus
							},
							700,
							function() {
								img_top_flag = true
							}
						)

					if (!bottom_copy_abs) {
						$('.strbott.bottom_copy').css({
							position: 'absolute'
						})
						bottom_copy_abs = true
					}
				}
			}

			/* если хоть 1 елемент попадает на начальный экран, запускаем фунцию анимации */
			for (var i = 0; i < elementtop.length; i++) {
				if (elementtop[i] < 0) animate_function()
			}

			/* при скроле запускаем функцию анимации */
			$(window).scroll(animate_function)
		}
		
		if($('.a-sale-action-block').length > 0 && $('.category_product').length > 12){
			$('#category .category_products .category_product:nth-child(12n+12)').each(function(index, element){
				$(this).after($('.a-sale-action-block:eq(0)').clone(true).attr('title','LETO SALE').css({/*'order':parseInt($(this).css('order'))+1,*/'width':'100%','margin':'20px auto'}));
			});
		}

		/* формы */
		if ($('.callback a').length > 0) {
			$('.callback a').click(function() {
				show_popup($('#phone_me'))
			})
		}

		if ($('#popup_another_size a').length > 0) {
			$('#popup_another_size a').click(function() {
				show_popup($('#another_sz'))
				$('#sf_overlay').show()
			})
		}
		if ($('#popup_another_size2 a').length > 0) {
			$('#popup_another_size2 a').click(function() {
				show_popup($('#another_sz'))
				$('#sf_overlay').show()
			})
		}
		if ($('#popup_skidka a').length > 0) {
			$('#popup_skidka a').click(function() {
				show_popup($('#wait_sk'))
			})
		}
		if ($('#popup_skidka2 a').length > 0) {
			$('#popup_skidka2 a').click(function() {
				show_popup($('#wait_sk'))
			})
		}
		if ($('#subscribe_btn').length > 0) {
			$('#subscribe_btn').click(function() {
				show_popup($('#subscribe_email'))
			})
		}

		// cart buttons
		if ($('#prod_buy').length > 0 && $('#product').length > 0) {
			$('#prod_buy, #prod_buy_top').click(function() {
				var size = 0
				if ($('#product #prod_size').length > 0) {
					size = $('#product #prod_size').text()
					console.log('sizeout:' + size)
				}
				if ($('#product #prod_sizes').length > 0) {
					size = $('#product #prod_sizes option:selected').text()
					console.log('size:' + size)
				}

				add_to_cart($('#product h1:eq(0)').text(), size, $('#product .sf_base_quantity').val())
				$('.cart-drop').fadeIn()
				setTimeout(function() {
					$('.cart-drop').fadeOut()
				}, 5000)

				// var boundingPosition = $(this)[0].getBoundingClientRect()

				// console.log(boundingPosition)

				// $('.count_circle').clone().addClass('ama_flying_cart').appendTo('body')

				// $('.ama_flying_cart').css('position', 'fixed')
				// $('.ama_flying_cart').css('opacity', '0')
				// $('.ama_flying_cart').css('z-index', '999999')
				// $('.ama_flying_cart').css('width', '30px')
				// $('.ama_flying_cart').css('height', '30px')
				// $('.ama_flying_cart').css('right', window.innerWidth - boundingPosition.x - 100)
				// $('.ama_flying_cart').css('top', boundingPosition.y)

				// $('.ama_flying_cart').animate({
				// 	opacity: 1,
				// 	top: boundingPosition.y - 50,
				// }, 1000, function(){
				// 	$('.ama_flying_cart').animate({
				// 		opacity: 0,
				// 		top: 50,
				// 		right: 50,
				// 	}, 1000, function(){
				// 		$('.ama_flying_cart').remove()
				// 	})
				// })
			})
		}
		if ($('.category_product_buy').length > 0) {
			$('.category_product_buy').click(function() {
				var size = 0
				var $parent = $(this).parents('.category_product')

				if ($parent.find('input[name="min_size"]').length > 0) size = $parent.find('input[name="min_size"]').val()
				if ($parent.find('input[name="has_price"]').length > 0) {
					if ($parent.find('input[name="has_price"]').val() == '1') {
						size = $.cookie("size")
					}
				}
				


				var boundingPosition = $(this)[0].getBoundingClientRect()

				$('.count_circle').clone().addClass('ama_flying_cart').appendTo('body')

				$('.ama_flying_cart').css('position', 'fixed')
				$('.ama_flying_cart').css('opacity', '0')
				$('.ama_flying_cart').css('z-index', '999999')
				$('.ama_flying_cart').css('width', '30px')
				$('.ama_flying_cart').css('height', '30px')
				$('.ama_flying_cart').css('right', window.innerWidth - boundingPosition.x - 100)
				$('.ama_flying_cart').css('top', boundingPosition.y)

				$('.ama_flying_cart').animate({
					opacity: 1,
					top: boundingPosition.y - 50,
				}, 1000, function(){
					$('.ama_flying_cart').animate({
						opacity: 0,
						top: 50,
						right: 50,
					}, 1000, function(){
						$('.ama_flying_cart').remove()
					})
				})

				console.log(size)

				
				// $('#addcart_success #add_cart_popup img').attr('src', )
				// $('#addcart_success #add_cart_popup p').text('fdsfd' )

				add_to_cart($parent.find('.category_product_name').text(), size, $parent.find('.sf_base_quantity').val())



			})
		}
		if ($('#basket_table').length > 0) {
			load_basket({
				act: 'cart'
			})
		}
		if ($('.btn_back').length > 0) {
			$('.btn_back').click(function() {
				if (!!(window.history && history.go)) {
					history.go(-1)
				} else {
					location.pathname = '/'
				}
			})
		}

		// сравнение товаров select
		if ($('.inputA').length > 0) {
			$('.inputA').change(function() {
				var price = $('#doborField')
					.val()
					.toString()
					.split(',')
				if (price.length > 0) {
					for (var i = 0; i < price.length; i++) {
						$('span.productPrice' + (i + 1)).html(price[i])
					}
				}
			})

			

			$('.inputA').change()
		}

		
		

		if ($('.new_prem_bl').length > 0) {
			var sr_sizes_y = $('.new_prem_bl').get(0).offsetTop + $('.new_prem_bl').height()
			$(window).scroll(function() {
				if ($(window).scrollTop() - 500 < sr_sizes_y) {
					$('.new_prem_bl').removeClass('fixed')
				} else {
					$('.new_prem_bl').addClass('fixed')
				}
			})
		}

		// сравнение товаров select
		if ($('.inputAelit').length > 0) {
			$('.inputAelit').change(function() {
				var price = $('#doborFieldElit')
					.val()
					.toString()
					.split(',')
				if (price.length > 0) {
					for (var i = 0; i < price.length; i++) {
						$('span.productPrice' + (i + 1)).html(price[i])
					}
				}
			})

			

			$('.inputAelit').change()
		}

		//input mask (content)
		if ($('#content .phone_mask').length > 0) {
			$('#content .phone_mask').mask('+7 (999) 99-99-999')
		}

		//arrow to scroll
		$.autoScroll({
			scrollDuration: 1000,
			showDuration: 400,
			hideDuration: 300
		})
	}
	init_load()

	//ajax post loading data [post_loader]
	;(function() {
		now = new Date().getTime()

		function PostLoader(data) {
			if (typeof data.social_footer != 'undefined' && !is_mobile()) $('.social_footer').html(data.social_footer)
			if (typeof data.announce_items != 'undefined') {
				$('.announce').html(data.announce_items)
				// sf announce blocks
				var animation_blocks = $('.announce .announce_item') //блоки и их порядок
				var animation_opacity_show = 3000 //время появления блока
				var animation_opacity_hide = 2000 //время исчезновения блока
				var animation_block_show = 5000 //время показа блока (без учетьа анимации)
				var animation_one_time = parseInt(animation_opacity_show + animation_opacity_hide + animation_block_show + 2000) //общее время на 1 блок

				var sf_animate = function(el) {
					$(el)
						.show()
						.animate(
							{
								opacity: '1'
							},
							animation_opacity_show,
							function() {
								setTimeout(function() {
									$(el).animate(
										{
											opacity: '0'
										},
										animation_opacity_hide,
										function() {
											$(this).hide()
										}
									)
								}, animation_block_show)
							}
						)
				}
				sf_animate.i = 0

				for (var i = 0; i < animation_blocks.length; i++) {
					setTimeout(function() {
						sf_animate(animation_blocks[sf_animate.i++])
						setInterval(function() {
							sf_animate(animation_blocks[sf_animate.i % animation_blocks.length])
							sf_animate.i++
						}, animation_one_time * animation_blocks.length)
					}, i * animation_one_time)
				}
			}
			if (typeof data.footer_social_icons != 'undefined') $('.footer_wrap_container').after(data.footer_social_icons)

			if (typeof data.phone_me != 'undefined') $('#phone_me').html(data.phone_me)
			if (typeof data.another_sz != 'undefined') $('#another_sz').html(data.another_sz)
			if (typeof data.wait_sk != 'undefined') $('#wait_sk').html(data.wait_sk)
			if (typeof data.post_success != 'undefined') $('#post_success').html(data.post_success)
			if (typeof data.addcart_success != 'undefined') $('#addcart_success').html(data.addcart_success)
			if (typeof data.order_success != 'undefined') $('#order_success').html(data.order_success)
			if (typeof data.kz_banner != 'undefined') $('#kz_banner').html(data.kz_banner)
			if (typeof data.med_cookies != 'undefined') {
				$('#med_cookies').html(data.med_cookies)
				var d = new Date().getDay() + 1
				if (typeof localStorage != 'undefined') {
					var mc_d = localStorage.getItem('med_cookies_d')
					if (mc_d != d) {
						$('#med_cookies').show()
						$('#martop').css({
							'margin-top': '50px'
						})
					}
				}
				$('#med_cookies .med-cookie-accept').click(function() {
					localStorage.setItem('med_cookies_d', d)
					$('#med_cookies').hide()
					$('#martop').css({
						'margin-top': '0'
					})
				})
			}
			
			window.$order_1click_btn_html = $('.order_pay_wrap').clone(false);

			//kz banner
			$.get('/geoip/sf_geodata.php', function(geo_data) {
				var geo_data = $.parseJSON(geo_data)
				var can_see_kz_banner = true
				if (is_storage) if (typeof localStorage['kz_banner'] != 'undefined' && location.href.indexOf('kz_sf_show') == -1) can_see_kz_banner = false
				if ((geo_data.sf_geodata_cc == 'KZ' && can_see_kz_banner) || location.href.indexOf('kz_sf_show') != -1) {
					$('#kz_banner .close').click(function() {
						$('#kz_banner').hide()
						if (is_storage) localStorage['kz_banner'] = now
					})
					$('#kz_banner').show()
				}

/*
				if (geo_data.sf_geodata_city || geo_data.sf_geodata_region || location.href.indexOf('sf_lenin') != -1) {
					if (geo_data.sf_geodata_city == 'Санкт-Петербург' || geo_data.sf_geodata_region == 'Ленинградская область' || location.href.indexOf('sf_lenin') != -1) {
						// $('.sf_head_phone_1').html('+7 (812)&nbsp;')
						// $('.sf_head_phone_11').html('670-84-82')
						// $('.sf_head_phone_2').html('+7 (921)&nbsp;')
						// $('.sf_head_phone_21').html('906-79-00')
						// $('.sf_head_showrum_2').after(
						// 	'<li class="angle sf_head_showrum_piter1"><a href="/o-magniflex/russia-spb/" title="Магазины в Санкт-Петербурге и области">Магазины в Санкт-Петербурге и области</a></li>'
						// )
						// $('.sf_head_showrum_1, .sf_head_showrum_2').remove()

						// $('.fhone-rigth-textPhone').html('+7 (812) 670-84-82')
						// $('.left-number-head-link').html('Требуется помощь?<br> +7 (812) 670-84-82')
						// $('.left-number-head-link').attr('href', 'tel:+78126708482')
						
						//$('#leftmenu_contacts_a').attr('href','tel:+78126708482').html('Требуется помощь?<br> +7 (812) 670-84-82');
						//$('.fixed-fhone .fhone-rigth-textPhone').html('+7 (812) 670-84-82');
					}
				}
*/
			});
			
			//new geoip
			newgeoip = false;
			function geoip_cityshop_menu(cities){
				//console.log(newgeoip);
				//console.log(cities);
				for (city in cities) {
					if(newgeoip.city == cities[city]['name'] || newgeoip.region == cities[city]['url']){
						//console.log(newgeoip.city+' ~ '+cities[city]['name']+' '+cities[city]['url']);
						/*
						$('.parent_menu_shops .angle1').prepend('<li class="angle"><a href="'+cities[city]['url']+'">Магазины в '+cities[city]['name']+'</a>');
						$('.footer_products:eq(0)').prepend('<li><a href="'+cities[city]['url']+'">Магазины в '+cities[city]['name']+'</a></li>');
						$('.parent_menu_shops_mob').before('<ul class="ds_mobile_full__cat"><li><a href="'+cities[city]['url']+'" title="Адреса магазинов Magniflex">Магазины в '+cities[city]['name']+'</a></li></ul>');
						*/
					}
				}
				
			}
			window.newgeoip_func = function (){
				//новый пункт в меню магазины
				//try{
					if(sessionStorage['cities_json']){
						geoip_cityshop_menu(JSON.parse(sessionStorage['cities_json']));
					}
					else{
						$.get('/cities_json.php', function(cities_json){
							sessionStorage['cities_json'] = JSON.stringify(cities_json);
							geoip_cityshop_menu(cities_json);
						});
					}
				//}catch(e){}
				
				try{
					if(newgeoip.city == 'Москва' || newgeoip.region == 'Москва' || newgeoip.region == 'Московская область'){
						$('.fixed-fhone-msk-lenin').show();
						$('body').addClass('msk');
					}
				}catch(e){}
				
				try{
					/*if(newgeoip.city == 'Санкт-Петербург' || newgeoip.region == 'Санкт-Петербург' || newgeoip.region == 'Ленинградская область'){
						$('#leftmenu_contacts_a').attr('href','tel:+78126708482').html('Требуется помощь?<br> +7 (812) 670-84-82');
						$('.fixed-fhone .fhone-rigth-textPhone').html('+7 (812) 670-84-82');
					}*/
					if(newgeoip.city != 'Москва' && newgeoip.region != 'Москва' && newgeoip.region != 'Московская область'){
						$('#leftmenu_contacts_a').attr('href','tel:88003501968').html('Требуется помощь?<br> 8-800-350-19-68');
						$('.fixed-fhone .fhone-rigth-textPhone, .default_text_phone').html('8-800-350-19-68');
					}
					
				}catch(e){}
				
			}
			if(sessionStorage['magni_geoip_data']){
				newgeoip = JSON.parse(sessionStorage['magni_geoip_data']);
				newgeoip_func();
			}
			else{
				var token = "1454e2ce71578e2d9e2570c9b5ad18b2781ea402";
				if(location.href.indexOf('sf_msk') != -1){ ip = '194.62.107.6'; }
				if(location.href.indexOf('sf_lenin') != -1){ ip = '85.114.16.230'; }
				if(location.href.indexOf('sf_kemerovo') != -1){ ip = '176.197.60.164'; }

				function iplocate(ip) {
				  var serviceUrl = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/iplocate/address";
				  if (ip) {
					serviceUrl += "?ip=" + ip;
				  }
				  var params = {
					type: "GET",
					contentType: "application/json",
					headers: {
					  "Authorization": "Token " + token
					}
				  };
					return $.ajax(serviceUrl, params);
				}
				iplocate(ip).done(function(response) {
					console.log(response);
					if(response['location'] || false){
						var data = response;
						data['location']['data']['cc'] = data['location']['data']['country'];
						newgeoip = data['location']['data'];
						data['location']['data']['source'] = 'dadata';
						sessionStorage['magni_geoip_data'] = JSON.stringify(data['location']['data']);
						newgeoip_func();
					}
				 })
			}

			//input mask
			if ($('.sf_popup .phone_mask').length > 0) {
				$('.sf_popup .phone_mask').mask('+7 (999) 99-99-999')
			}
		}

		function get_PostLoader() {
			$.get('/post_loader.php', function(data) {
				PostLoader($.parseJSON(data))
				if (is_storage) {
					localStorage['post_loader'] = data
					localStorage['post_loader_time'] = now
				}
			})
		}

		if (is_storage) {
			var online = !!navigator.onLine || true
			var post_loader_data = localStorage['post_loader']
			var post_loader_time = parseInt(localStorage['post_loader_time'])
			if (post_loader_time && post_loader_data) {
				if (post_loader_time + cache_time >= now || !online) {
					PostLoader($.parseJSON(post_loader_data))
					post_loader_Storage = true
				}
			}
		}
		if (typeof post_loader_Storage == 'undefined') get_PostLoader()
	})()
	/* post loader end */

	/* ajax and localStorage(cache) load page */
	if (!!(window.history && history.pushState) && typeof XMLHttpRequest != 'undefined' && false /* now off */) {
		//if support History API and ajax
		var main = document.getElementById('content')

		function loadPage(html, url, push_history) {
			main.innerHTML = html
			if ($('#load_title').length > 0) document.title = $('#load_title').val()
			setAjaxClickEvent()
			if (_no_history) {
				push_history = false
				_no_history = false
			}
			if (push_history)
				history.pushState(
					{
						html: html,
						url: url,
						title: document.title
					},
					false,
					url
				)
			hide_popup()
			init_load()
			if (location.href.toString().indexOf('#') == -1 && html.indexOf('class="hnb_elite_content') == -1) {
				$('html, body').animate(
					{
						scrollTop: 0
					},
					100,
					function() {
						$('#loading_page').hide()
					}
				)
			} else {
				$('#loading_page').hide()
			}
		}
		window.onpopstate = function(event) {
			if (location.href.toString().indexOf('magniflex.ru') != -1) {
				try {
					loadPage(event.state.html, event.state.url, false)
					document.title = event.state.title
				} catch (e) {
					_no_history = true
					clickLink({
						target: {
							href: location.href
						}
					})
				}
			} else location.href = location.href
		}

		function clickLink(e) {
			$('#loading_page').show()
			var online = !!navigator.onLine || true
			e.preventDefault ? e.preventDefault() : (e.returnValue = false) //false go to another page
			var load_from_storage = false
			var target_href = e.target.href
			if (typeof target_href == 'undefined' || $(e.target).is('img')) {
				target_href = $(e.target)
					.parents('a')
					.attr('href')
			}
			if (is_storage && target_href) {
				var now = new Date().getTime()
				var page_html = localStorage[encodeURIComponent(target_href)]
				var page_time = parseInt(localStorage[encodeURIComponent(target_href) + '_time'])
				if (page_time && page_html) {
					if (page_time + cache_time >= now || !online) {
						loadPage(page_html, target_href, true)
						load_from_storage = true
					}
				}
			}
			if (!load_from_storage) ajaxClickHistory(e)
		}

		function ajaxClickHistory(e) {
			ajax = new XMLHttpRequest()
			var target_href = e.target.href
			if (typeof target_href == 'undefined' || $(e.target).is('img')) {
				target_href = $(e.target)
					.parents('a')
					.attr('href')
			}
			var pattern = '^(([^:/\\?#]+):)?(//(([^:/\\?#]*)(?::([^/\\?#]*))?))?([^\\?#]*)(\\?([^#]*))?(#(.*))?$'
			var rx = new RegExp(pattern)
			var parts = rx.exec(target_href)
			var pathname = parts[7] || '/'
			ajax_url = '/ajax' + pathname
			ajax.open('GET', ajax_url, true)
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4) {
					if (ajax.status == 200) {
						if (is_storage && target_href) {
							localStorage[encodeURIComponent(target_href)] = ajax.responseText
							localStorage[encodeURIComponent(target_href) + '_time'] = new Date().getTime()
						}
						loadPage(ajax.responseText, target_href, true)
					} else location.href = target_href
				}
			}
			ajax.send(null)
			return false
		}

		function setAjaxClickEvent() {
			var links_length = document.links.length
			for (var i = 0; i < links_length; i++) {
				var $cur = $(document.links[i])
				if ($cur.attr('target') || $cur.attr('rel')) continue
				if ($cur.attr('href').toString()[0] == '/' && $cur.attr('href').indexOf('.') == -1 && $cur.attr('href').indexOf('//') == -1 && $cur.attr('href').indexOf('/rss/') == -1) {
					document.links[i].onclick = clickLink
				}
			}
		}
		setAjaxClickEvent()
	}
})

function ing_events(params) {
	/* Включить вывод события в консоль */
	var ing_events_debug = true
	var ing_events_counters = []
	/* Массив с ID метрики */
	var ing_mertic_ids = ['28675206']
	if (typeof params !== 'undefined') {
		if (typeof params.category !== 'undefined' && typeof params.action !== 'undefined' && typeof params.label !== 'undefined') {
			if (typeof _gaq !== 'undefined') {
				_gaq.push(['_trackEvent', params.category, params.action, params.label])
				ing_events_counters.push('_gaq')
			}
			if (typeof ga !== 'undefined') {
				ga('send', 'event', params.category, params.action, params.label)
				ing_events_counters.push('ga')
			}
			if (typeof pageTracker !== 'undefined') {
				pageTracker._trackEvent(params.category, params.action, params.label)
				ing_events_counters.push('pageTracker')
			}
			for (i = 0; i < ing_mertic_ids.length; i++) {
				if (typeof window['yaCounter' + ing_mertic_ids[i]] !== 'undefined') {
					if (typeof params.mp !== 'undefined') {
						window['yaCounter' + ing_mertic_ids[i]].reachGoal(params.label, params.mp)
					} else {
						window['yaCounter' + ing_mertic_ids[i]].reachGoal(params.label)
					}
					ing_events_counters.push('yaCounter' + ing_mertic_ids[i])
				}
			}
			if (ing_events_counters.length === 0) {
				ing_events_counters.push('none')
			}
			if (ing_events_debug === true) {
				console.log('event reached:\n\t[category:' + params.category + ']\n\t[action  :' + params.action + ']\n\t[label   :' + params.label + ']\nevent counters:\n\t' + ing_events_counters)
			}
		}
	}
}
// пересчет цен
jQuery(document).ready(function() {
	
	var price = $('#prod_price').text()
	price = price.replace(' ', '')
	price = parseInt(price)

	$('.sf_plus').click(function() {
		var count = $('.sf_base_quantity').val()

		var new_price = count * price
		//console.log(price);
		//console.log(new_price);
		$('#prod_price').text(new_price)
	})
	$('.sf_minus').click(function() {
		var count = $('.sf_base_quantity').val()

		var new_price = count * price
		//console.log(price);
		//console.log(new_price);
		$('#prod_price').text(new_price)
	})

	/*
	$("#prod_sizes").change(function(){
		var price = $('#prod_price').text();
		price = price.replace(" ", "");
		price = parseInt(price);

		var count = $('.sf_base_quantity').val();
			//var new_price = count * price;
			$('#prod_price').text(count * price);

		var price = $('#prod_price').text();
		price = price.replace(" ", "");
		price = parseInt(price);

	$('.sf_plus').click(function(){
		var count = $('.sf_base_quantity').val();

		var new_price = count * price;
		//console.log(price);
		//console.log(new_price);
		$('#prod_price').text(new_price);
	});
	$('.sf_minus').click(function(){
		var count = $('.sf_base_quantity').val();

		var new_price = count * price;
		//console.log(price);
		//console.log(new_price);
		$('#prod_price').text(new_price);
	});

	});
	*/
})

function ya_metrika2() {
	jQuery(function($) {
		//click
		$('#magn_sp_ital').on('click', function() {
			ym(28675206, 'reachGoal', 'magn_sp_ital');
		})
		$('#magn_el_plya').on('click', function() {
			ym(28675206, 'reachGoal', 'magn_el_plya');
		})

		// add_product_to_basket
		$('#prod_buy, #prod_buy_top').on('click', function() {
			ym(28675206, 'reachGoal', 'add_product_to_basket');
			yaCounter28675206.reachGoal('add_product_to_basket', {
				product_url: location.href,
				product_name: $('#product h1').text()
			})
			if (is_storage) {
				localStorage['add_product_to_basket'] = new Date().getTime()
			}
		})
		$('.category_product_buy').on('click', function() {
			var product_url = $(this)
				.parents('.category_product')
				.find('.category_product_name')
				.attr('href')
				.toString()
			if (product_url.indexOf('magniflex.ru') == -1) product_url = 'http://www.magniflex.ru' + product_url
			var product_name = $(this)
				.parents('.category_product')
				.find('.category_product_name')
				.text()
			ym(28675206, 'reachGoal', 'add_product_to_basket');
			yaCounter28675206.reachGoal('add_product_to_basket', {
				product_url: product_url,
				product_name: product_name
			})
			if (is_storage) {
				localStorage['add_product_to_basket'] = new Date().getTime()
			}
		})

		//view_category
		if ($('.category_product').length > 0) {
			ym(28675206, 'reachGoal', 'view_category');
			yaCounter28675206.reachGoal('view_category', {
				category_url: location.href
			})
			if (is_storage) {
				localStorage['view_category'] = new Date().getTime()
			}
		}

		//view2pages
		if (is_storage) {
			var pages = sessionStorage['yaviewpages'] || ''
			if (pages.indexOf(location.href.toString()) == -1) {
				pages += '|||' + location.href.toString()
				sessionStorage['yaviewpages'] = pages
			}
			var pos = -1,
				count = 0
			while ((pos = pages.indexOf('|||', pos + 1)) != -1) {
				count++
			}
			if (count > 2) {
				ym(28675206, 'reachGoal', 'view2pages_2min');
				yaCounter28675206.reachGoal('view2pages_2min')
			}
		}

		//leave window
		if (is_storage) {
			$(window).bind('beforeunload', function() {
				var now_time = parseInt(new Date().getTime())

				//view pages 2min
				var time = sessionStorage['yametrtime'] || 0
				time = parseInt(time) + now_time - parseInt(now.getTime())
				sessionStorage['yametrtime'] = time.toString()
				if (time > 120000) {
					ym(28675206, 'reachGoal', 'view2pages_2min');
					yaCounter28675206.reachGoal('view2pages_2min')
				}

				//view product 2min
				if ($('#product').length > 0) {
					var time = now_time - parseInt(now.getTime())
					if (time > 120000) {
						ym(28675206, 'reachGoal', 'view_product_2min');
						yaCounter28675206.reachGoal('view_product_2min', {
							product_url: location.href,
							product_name: $('#product h1').text()
						})
					}
				}

				//not buy 1h
				var time = localStorage['add_product_to_basket'] || now_time
				if (parseInt(time) - 3600000 > now_time) {
					ym(28675206, 'reachGoal', 'basket_nbuy_1h');
					yaCounter28675206.reachGoal('basket_nbuy_1h')
					localStorage['add_product_to_basket'] = ''
				}

				var time = localStorage['view_category'] || now_time
				if (parseInt(time) - 3600000 > now_time) {
					ym(28675206, 'reachGoal', 'category_nbuy_1h');
					yaCounter28675206.reachGoal('category_nbuy_1h')
					localStorage['view_category'] = ''
				}
			})
		}
	})
}

/* hover для матрасов  */
function hoverok(id, img, text) {
	$(id).mouseover(function() {
		$('#matras-img').attr('src', img)
		$('#matras-p').html(text)
	})
}

hoverok(
	'#matras-merino',
	'/img/product/small/Merino%20(Merinos).jpg',
	' Merino (Merinos) <p align="left"> Недорогая базовая модель. Достаточно жесткая. Зимняя сторона — шерсть мериноса, летняя — хлопок.  </p> '
)
hoverok(
	'#matras-bamboo',
	'/img/product/small/Bamboo.jpg',
	' Merino Bamboo <p align="left"> Волокна бамбука в тканях матраса. Улучшенные антибактериальные свойства, антиаллергенный эффект. Двусторонний: лето — хлопок, зима — шерсть мериноса.   </p> '
)
hoverok('#matras-stile', '/img/product/small/stile-6.jpg', 'Stile  <p align="left"> Улучшенный Merino (Merinos). Достаточно жесткий.   </p> ')
hoverok(
	'#matras-watter-lat',
	'/img/product/small/WaterLattex.jpg',
	'WaterLattex <p align="left"> Технология Airyform, наполнитель Watercell. Двусторонний: летняя сторона — хлопок, зимняя — шерсть мериноса.  </p> '
)
hoverok('#matras-pens', '/img/product/small/pensiero-6.jpg', 'Pensiero <p align="left"> Чехол съемный, из ткани вискоза. Слой Memoform (2 см) с эффектом памяти. </p> ')
hoverok('#matras-natur', '/img/product/small/New%20NaturComfort.jpg', 'Naturalmente (New Naturcomfort) <p align="left"> Слой Memoform (4 см) с эффектом памяти.  Чехол из ткани Wooden Fiber  </p> ')
hoverok(
	'#matras-memorie',
	'/img/product/small/memorie-9-small.jpg',
	'Memorie <p align="left"> Чехол съемный, из ткани вискоза. Слой Memoform (2 см) с эффектом памяти. 5-ти зональный слой Eliosoft.    </p> '
)
hoverok('#matras-memo', '/img/product/small/Memo%20Merino.jpg', 'Memo Merino <p align="left"> Чехол из ткани Coolmax. Слой Memoform (6 см!) с эффектом памяти.   </p> ')
hoverok(
	'#matras-topper',
	'/img/product/big/TOPPER-BEST-TOP.jpg',
	'Topper Best Top <p align="left">Тонкий матрас. Идеально подходит для диванов или для улучшения ортопедических свойств других матрасов.  </p> '
)
hoverok(
	'#matras-rest',
	'/img/product/small/Rest.jpg',
	'Rest <p align="left"> Настоящая классика всегда в моде. Модели из этой коллекции отличаются особой сдержанностью, строгостью, пропорциональностью и элегантностью.  </p> '
)
hoverok('#matras-carezza', '/img/product/small/Carezza-interior.jpg', 'Carezza <p align="left"> Итальянский ортопедический матрас Carezza Magniflex </p> ')
hoverok(
	'#matras-fresh',
	'/img/product/small/FreshGel.jpg',
	'FreshGel <p align="left"> Легкий, воздушный, дышащий, необыкновенно проницаемый. Настоящее воплощение комфорта и удовольствие во сне.   </p> '
)
hoverok(
	'#matras-comfort',
	'/img/product/small/Comfort%20Delux.jpg',
	'Comfort Delux  <p align="left"> Возможность моделирования оптимального уровня комфорта. Отличные анатомический и ортопедический эффекты, потрясающие терморегулирующие свойства.  </p> '
)
hoverok(
	'#matras-stret',
	'/img/product/small/magniStretching.png',
	'Stretching  <p align="left"> Коллекция с запатентованной технологией Stretching – совместная разработка Magniflex и институтом Сарагосы. Матрасы, приводящие спину в полный порядок.  </p> '
)
hoverok(
	'#matras-imper',
	'/img/product/small/Imperiale.jpg',
	'Imperiale  <p align="left"> Аристократические матрасы. Высокий анатомический и ортопедический эффекты, в сочетании с терморегулирующими свойствами чехла. Идеальная система комфортного сна.  </p> '
)
hoverok(
	'#matras-magni',
	'/img/product/small/Magnificent.jpg',
	'Magnificent  <p align="left"> Высокотехнологичные самомоделирующиеся матрасы. Максимальный комфорт, высокий анатомический и ортопедический эффекты и  идеальный микроклимат.  </p> '
)
hoverok(
	'#matras-harmo',
	'/img/product/small/Harmony.jpg',
	'Harmony <p align="left"> 4 уровня комфорта, возможность самостоятельно смоделировать оптимальный уровень комфорта. Высокий анатомический и ортопедический эффекты </p> '
)
hoverok(
	'#matras-virtus',
	'/img/product/small/Virtus.jpg',
	'Virtus <p align="left"> Самый лучший матрас от Magniflex. Только лучшие премиальные материалы. Безупречный комфорт, самые передовые технологии, великолепный анатомический эффект. Слой Memoform HD (8 см!!!)  </p> '
)
hoverok('#matras-sravn', '/img/product/matrasy.png', 'Сравнение элитных коллекций ')
hoverok('#archive-leg', '/img/product/matrasy.png', 'Матрасы, снятые с производства')
hoverok('#find-zhest', '/img/product/matrasy.png', 'Жесткие матрасы')
hoverok('#find-sredn', '/img/product/matrasy.png', 'Средние матрасы') /* NEEW */
hoverok('#find-myahk', '/img/product/matrasy.png', 'Мягкие матрасы')
hoverok('#find-model', '/img/product/matrasy.png', 'Матрасы с моделируемой жесткостью Dual Core ')
hoverok('#find-elit', '/img/product/matrasy.png', 'Элитные матрасы ')
hoverok('#find-ortoped', '/img/product/matrasy.png', ' Ортопедические матрасы ')
hoverok('#find-memo', '/img/product/matrasy.png', 'Матрасы с эффектом памяти ')
hoverok('#find-vacu', '/img/product/matrasy.png', 'Вакуумные матрасы ')
hoverok('#find-divan', '/img/product/matrasy.png', 'Матрас для дивана ')
hoverok('#che-cool', '/img/product/small/coolmax.png', 'Чехол Coolmax')
hoverok('#che-visc', '/img/product/small/Magnificent.jpg', 'Чехол Viscose')
hoverok('#che-out', '/img/product/small/Magnificent.jpg', 'Чехол Outlast ')
hoverok('#che-satin', '/img/product/small/Magnificent.jpg', 'Чехол Satin')
hoverok('#osn-memo', '/img/product/small/Magnificent.jpg', 'Основа Memoform')
hoverok('#osn-geo', '/img/product/small/Magnificent.jpg', 'Основа Geomemory')
hoverok('#osn-gel', '/img/product/small/Magnificent.jpg', 'Основа Memogel')
hoverok('#osn-mallow', '/img/product/small/Magnificent.jpg', 'Основа Mallowfoam')
/* end hover для матрасов  */
/* end для детских матрасов  */
function hoverokChildren(id, img, text) {
	$(id).mouseover(function() {
		$('#children-img').attr('src', img)
		$('#children-p').html(text)
	})
}
hoverokChildren(
	'#children-merino',
	'/img/product/small/Merino-childrens.jpg',
	' Merino <p align="left"> Чехол двусторонний: зимняя сторона  — шерсть мериноса, летняя  — хлопок. Основной слой: ELIOCEL.</p>'
)
hoverokChildren(
	'#children-bambo',
	'/img/product/small/Merino-Bamboo-children.jpg',
	'B-Bamboo <p align="left">Ткань чехла: натуральный хлопок, волокна бамбука.  Основной слой: Elioform. Чехол не съемный.   </p>'
)
hoverokChildren(
	'#children-sfo',
	'/img/product/small/Merino-Bamboo-children.jpg',
	' B-Bamboo Sfoderabile  <p align="left">Ткань чехла: натуральный хлопок, волокна бамбука.  Основа - Elioform. Чехол съемный, легко стирается. </p>'
)

hoverokChildren('#children-pens', '/img/podrostkam.jpg', 'матрас Pensiero 6')
hoverokChildren('#children-stile6', '/img/podrostkam.jpg', 'матрас Stile 6')
hoverokChildren('#children-stile7', '/img/podrostkam.jpg', 'матрас Stile 7')
hoverokChildren('#children_size', '/img/podrostkam.jpg', '<b>МАТРАСЫ ДЛЯ ПОДРОСТКОВ </b> РАЗМЕРОВ 80х160')

hoverokChildren('#razmer1', '/img/product/detskie.png', 'детские матрасы 60x120')
hoverokChildren('#razmer2', '/img/product/detskie.png', 'детские матрасы 65x125')
hoverokChildren('#razmer3', '/img/product/detskie.png', 'детские матрасы 70x140')
hoverokChildren('#razmer4', '/img/product/detskie.png', 'детские матрасы 70x160')
hoverokChildren('#razmer5', '/img/podrostkam.jpg', 'детские матрасы 80x160')
/* end hover для детских матрасов  */
/* hover для подушок  */
function hoverokPiloow(id, img, text) {
	$(id).mouseover(function() {
		$('#pillow-img').attr('src', img)
		$('#pillow-p').html(text)
	})
}
hoverokPiloow('#pillow-relax', '/img/product/small/Relaxsan.jpg', 'Коллекция Relaxsan')
hoverokPiloow('#pillow-memor', '/img/product/small/Memory.jpg', 'Memory')
hoverokPiloow('#pillow-ortho', '/img/product/small/Orthomassage.jpg', 'Orthomassage')
hoverokPiloow('#pillow-aloe', '/img/product/small/Aloe%20Vera.jpg', 'Aloe Vera')
hoverokPiloow('#pillow-comfort', '/img/product/small/MEMOFORM%20COMFORT%20SUP%20MX-3.jpg', 'Memoform Comfort')
hoverokPiloow('#pillow-wave', '/img/product/small/MEMOFORM%20WAVE%20SUP%20MX.jpg', 'Memoform Wave Classico')
hoverokPiloow('#pillow-standart', '/img/product/small/MEMOFORM%20STANDARD%20SUP%20MX-3.jpg', 'Memoform Standart Classico')
hoverokPiloow('#pillow-super', '/img/product/small/MEMOFORM%20COMFORT%20SUP%20MX-3.jpg', 'Memoform Superiore Comfort')
hoverokPiloow('#pillow-deluxw', '/img/product/small/MEMOFORM%20WAVE%20SUP%20MX-5.jpg', 'Memoform Superiore Deluxe Wave')
hoverokPiloow('#pillow-deluxor', '/img/product/small/MEMOFORM%20ORTHOMASSAGE%20SUP%20MX-2.jpg', 'Memoform Superiore Deluxe Orthomassage')
hoverokPiloow('#pillow-deluxst', '/img/product/small/MEMOFORM%20STANDARD%20SUP%20MX.jpg', 'Memoform Superiore Deluxe Standart')
hoverokPiloow('#pillow-mallow', '/img/product/small/Relaxsan.jpg', 'Virtuoso Mallow Standart')
hoverokPiloow('#pillow-freshw', '/img/product/small/FreshGel%20Wave.jpg', 'FreshGel Wave')
hoverokPiloow('#pillow-freshs', '/img/product/small/FreshGel%20Standard.jpg', 'FreshGel Standart')
hoverokPiloow('#pillow-memost', '/img/product/small/MemoGel%20Standard.jpg', 'MemoGel Standart')
hoverokPiloow('#ortho-pil', '/img/product/podushki.png', 'ортопедические подушки')
hoverokPiloow('#gel-pil', '/img/product/podushki.png', 'гелевые подушки')
hoverokPiloow('#vacu-pil', '/img/product/podushki.png', 'вакуумные подушки')
hoverokPiloow('#memo-pil', '/img/product/podushki.png', 'подушки с эффектом памяти')
hoverokPiloow('#mas-pil', '/img/product/podushki.png', 'подушки с массажным эффектом')
hoverokPiloow('#ice-pil', '/img/product/podushki.png', 'подушки с охлаждающим эффектом')
hoverokPiloow('#ch-cool', '/img/product/small/coolmax.png', 'Чехол Coolmax')
hoverokPiloow('#ch-vis', '/img/product/small/Relaxsan.jpg', 'Чехол Viscose')
hoverokPiloow('#ch-out', '/img/product/small/Relaxsan.jpg', 'Чехол Outlast ')
hoverokPiloow('#ch-satin', '/img/product/small/Relaxsan.jpg', 'Чехол Satin')
hoverokPiloow('#os-memo', '/img/product/small/Relaxsan.jpg', 'Основа Memoform')
hoverokPiloow('#os-geo', '/img/product/small/Relaxsan.jpg', 'Основа Geomemory')
hoverokPiloow('#os-gel', '/img/product/small/Relaxsan.jpg', 'Основа Memogel')
hoverokPiloow('#os-foam', '/img/product/small/Relaxsan.jpg', 'Основа Mallowfoam')
hoverokPiloow('#pillow-coolmax', '/img/product/small/Memory.jpg', 'Коллекция Coolmax')
hoverokPiloow('#pillow-classico', '/img/product/small/podushka-memoform-standard-classico-mx-magniflex.jpg', 'Коллекция Classico')
hoverokPiloow('#pillow-freshgel', '/img/product/small/FreshGel%20Standard.jpg', 'Коллекция Freshgel')
hoverokPiloow('#pillow-superiore', '/img/product/small/MEMOFORM%20ORTHOMASSAGE%20SUP%20MX-5.jpg', 'Коллекция Superiore')
hoverokPiloow('#pillow-virtuoso', '/img/product/very_small/mallow-standard.jpg', 'Коллекция Virtuoso')
hoverokPiloow('#kogda-pillows', '/img/product/podushki.png', 'Когда менять подушки?')

/* end hover для подушок  */
/* hover для аксесуаров  */
function hoverokAcs(id, img, text) {
	$(id).mouseover(function() {
		$('#acs-img').attr('src', img)
		$('#acs-p').html(text)
	})
}

hoverokAcs('#acs-com', '/img/product/small/osnovanie.jpg', 'Ортопедическое основание КОМФОРТ')
hoverokAcs('#acs-raz', '/img/product/small/osnovanie.jpg', 'Ортопедическое основание КОМФОРТ (разборное)')
hoverokAcs('#acs-lux', '/img/product/small/ortop_base_lux_small.jpg', 'Ортопедическое основание ЛЮКС')
hoverokAcs('#acs-top', '/img/product/big/TOPPER-BEST-TOP.jpg', 'Топпер')
hoverokAcs('#acs-ton', '/img/product/big/TOPPER-BEST-TOP.jpg', 'Ортопедический тонкий матрас для дивана')
hoverokAcs('#acs-riv', '/img/product/big/TOPPER-BEST-TOP.jpg', 'Тонкий матрас - повышение уровня комфорта любого матраса')
/* end hover для acs  */

/* count favourite */
$(document).ready(function() {
	var text, myName, hits, reg
	text = document.cookie
	myName = 'favourite'
	hits = []
	reg = new RegExp(myName, 'g', 'i')
	hits = text.match(reg)
	if (!hits) {
	} else {
		var fav_count = hits.length / 2
	}
	$('.ds_count-fav').text(fav_count)
})

$('.favourite-but').click(function() {
	var filterCokie = '1'
	var Fdate = new Date(new Date().getTime() + 6000000 * 1000)
	var TestCookie =
		'favourite-' +
		$(this)
			.parent()
			.children('.favourite-but')
			.attr('fav-id')
	document.cookie = TestCookie + '=' + TestCookie + '; path=/; expires=' + Fdate.toUTCString()
})

var date = new Date(0)
$('.ds_del-fav').click(function() {
	var ds_del = 'favourite-' + $(this).attr('id')
	document.cookie = ds_del + '=; path=/; expires=' + date.toUTCString()
})

/*	if(location.pathname=='/catalog/elitnye-harmony/Exchange-Memoform-Dual/') {


		function favouriteChangeBut(){
					var ds_href = location.pathname.split("/");
					var ds_last_href =  ds_href[ds_href.length - 2];
					var ds_fav_check = document.cookie.indexOf('favourite-'+ds_last_href);
					if(ds_fav_check == -1){
							$('.favourite-but').show();
							$('.ds_del-fav').hide();
					}else{
							$('.favourite-but').hide();
							$('.ds_del-fav').show();
					}
				}

				$(document).ready(function(){
					favouriteChangeBut();
				});
				  $('.ds_del-fav').click(function(){
				  		favouriteChangeBut();
				  });
				  $('.favourite-but').click(function(){
				  		favouriteChangeBut();
				  });
			} */

if (location.pathname == '/catalog/orthopedic_mattresses/zhestkie-mattresses-2/') {
	function favouriteCatalog() {
		$('.favourite-but').each(function() {
			if (document.cookie.indexOf('favourite-' + $(this).attr('fav-id')) == -1) {
				$(this)
					.parent()
					.children('.favourite-but')
					.show()
				$(this)
					.parent()
					.children('.ds_del-fav')
					.hide()
			} else {
				$(this)
					.parent()
					.children('.favourite-but')
					.hide()
				$(this)
					.parent()
					.children('.ds_del-fav')
					.show()
			}
		})
	}

	$(document).ready(function() {
		favouriteCatalog()
	})
	$('.ds_del-fav').click(function() {
		favouriteCatalog()
	})
	$('.favourite-but').click(function() {
		favouriteCatalog()
	})
}

if (location.pathname == '/favourite/') {
	function favouriteCatalog() {
		$('.favourite-but').each(function() {
			if (document.cookie.indexOf('favourite-' + $(this).attr('fav-id')) == -1) {
				$(this)
					.parent()
					.children('.favourite-but')
					.show()
				$(this)
					.parent()
					.children('.ds_del-fav')
					.hide()
			} else {
				$(this)
					.parent()
					.children('.favourite-but')
					.hide()
				$(this)
					.parent()
					.children('.ds_del-fav')
					.show()
			}
		})
	}

	$(document).ready(function() {
		favouriteCatalog()
	})
	$('.ds_del-fav').click(function() {
		favouriteCatalog()
	})
	$('.favourite-but').click(function() {
		favouriteCatalog()
	})
}

/* new v filters */
if($('#city_shops_filter_metro').length > 0){
	function city_shops_filter(){
		var metro = $('#city_shops_filter_metro').val().toString().toLowerCase();
		var metro_name = $('#city_shops_filter_metro option:selected').text().toString().toLowerCase().replace('м.','');
		$('.city_shop').each(function(){
			if(!metro || $(this).find('.city_shop_metro').text().toLowerCase().indexOf(metro) != -1 || $(this).find('.city_shop_metro').text().toLowerCase().indexOf(metro_name) != -1 || $(this).find('a').attr('href').indexOf('show-room') != -1){
				$(this).show();
			}
			else{
				$(this).hide();
			}
		});
	}
	$('#city_shops_filter_metro').change(city_shops_filter) ;
	city_shops_filter();
}

/* russia-moscow filters */

/*
$(document).mouseup(function(e) {
	if ($(e.target).hasClass('ds_product-filter__select')) {
		$('.ds_product-filter__container').toggle()
	} else {
		if ($('.ds_product-filter__container').has(e.target).length === 0) {
			$('.ds_product-filter__container').hide()
		}
	}
})

function multi_product_filter() {
	if ($('.product-filter:checked').length == 0 && $('.ds_metro_filter').val() == 'Ближайшее метро') {
		$('.store-address-container').show()
		console.log(1)
	} else if ($('.product-filter:checked').length == 0) {
		console.log(2)
		var metro_check = $('.ds_metro_filter').val()
		var next_check = $('.ds_metro_filter option:selected').attr('classatr')
		console.log(next_check)
		$('.store-address-container').each(function() {
			if ($(this).attr('data-store') != undefined) {
				if (
					$(this)
						.attr('data-store')
						.indexOf(next_check) != -1 ||
					metro_check ==
						$(this)
							.children()
							.children('.store-metro')
							.text() ||
					metro_check ==
						$(this)
							.children()
							.children()
							.children('.store-metro')
							.text()
				) {
					$(this).show()
				} else {
					$(this).hide()
				}
			} else {
				$(this).hide()
			}
		})
	} else {
		console.log(3)
		$('.store-address-container').hide()
		var metro_check_product
		if (!$('.ds_main-select').is(':selected')) {
			$('.ds_metro_filter option:selected').each(function multi_filter() {
				metro_check_product = $(this).val()
				return metro_check_product
			})
			$('.product-filter:checked').each(function() {
				var filter
				filter = $(this).attr('filterID')
				var testik

				$('.store-address-container')
					.filter(function() {
						if ($(this).attr('data-store') != undefined) {
							var next_check = $('.ds_metro_filter option:selected').attr('classatr')
							if (
								($(this).hasClass(filter) &&
									$(this)
										.children()
										.children('.store-metro')
										.text() == metro_check_product) ||
								($(this).hasClass(filter) &&
									$(this)
										.children()
										.children()
										.children('.store-metro')
										.text() == metro_check_product) ||
								($(this).hasClass(filter) &&
									$(this)
										.attr('data-store')
										.indexOf(next_check) != -1)
							) {
								console.log($(this))
								return $(this)
							}
						} else {
							$('.store-address-container').hide()
						}
					})
					.show()
			})
		} else {
			$('.product-filter:checked').each(function() {
				var filter
				filter = $(this).attr('filterID')
				$('.store-address-container')
					.filter(function() {
						return $(this).hasClass(filter)
					})
					.show()
			})
		}
	}
}

$(document).ready(function metro_func() {


	$(".single_image").fancybox();


	$('.ds_metro_filter').change(function() {
		if ($('.product-filter:checked').length == 0) {
			var next_check = $('.ds_metro_filter option:selected').attr('classatr')
			var metro_check = $(this).val()
			$('.store-address-container').each(function() {
				if ($(this).attr('data-store') != undefined) {
					if (
						$(this)
							.attr('data-store')
							.indexOf(next_check) != -1 ||
						metro_check ==
							$(this)
								.children()
								.children('.store-metro')
								.text() ||
						metro_check ==
							$(this)
								.children()
								.children()
								.children('.store-metro')
								.text()
					) {
						$(this).show()
					} else {
						$(this).hide()
					}
				} else {
					$(this).hide()
				}
			})
			if (metro_check == 'Ближайшее метро') {
				$('.store-address-container').show()
			}
		} else {
			multi_product_filter()
		}
	})
})

*/



function change_star(currentId) {
	$('.star_img').each(function() {
		$(this).attr('src', '/img/product/star_grey.svg')
	})

	for (var i = 1; i <= currentId; i++) {
		$('.star_img.star' + i).attr('src', '/img/product/star_active.svg')
	}
}

$(document).ready(function() {
	if (window.location.href.match('russia')) {
		$('.hnb_gal').addClass('shop_gal')
	}

	var choosing_star = false
	var result_star

	$('.star_img').click(function() {
		var currentId = $(this).attr('data-id')
		change_star(currentId)
		$('#option' + currentId).prop('checked', true)
		choosing_star = true
		result_star = currentId
	})

	$('.star_img').mouseenter(function() {
		var currentId = $(this).attr('data-id')
		change_star(currentId)
	})

	$('.star_img').mouseleave(function() {
		if (!choosing_star) {
			var currentId = 4
			change_star(currentId)
		} else {
			var currentId = result_star
			change_star(currentId)
		}
	})

	$('.form_input').click(function() {
		$(this).children('input').focus()
		$(this).children('input').addClass('ama_focus_checkout')
		$(this).children('textarea').addClass('ama_focus_checkout')
		$(this).children('textarea').focus()
	})

	$('#buy_one_click').mask('+7 (999) 99-99-999')


	// if(window.innerWidth > 1000) {
		if ($('div').hasClass('product_top_plashka')) {
			$(window).scroll(function() {				
				if ($(window).scrollTop() > 600) {
					$('.product_top_plashka ').css('display', 'flex')
					$('.menu_children_container').hide()
					$('.menu_children_container').removeClass('open')
					$('.arrow-main-block').removeClass('arrow-main-block-rotate')
					$('#prod_price')
						.detach()
						.appendTo('.container_for_price')
					$('#prod_sizes')
						.detach()
						.appendTo('.container_for_size')
					$('.old_price')
						.detach()
						.appendTo('.container_for_price')
					if(window.innerWidth < 700 && $('.ama-alert-plank')){
						$('.ama-alert-plank').hide()
					}
				} else {
					$('.product_top_plashka ').css('display', 'none')
					$('#prod_price')
						.detach()
						.appendTo('.default_container_price')
					$('#prod_sizes')
						.detach()
						.appendTo('.default_container_size')
					$('.old_price')
						.detach()
						.appendTo('.price_list_wrap')
					if(window.innerWidth < 700 && $('.ama-alert-plank')){
						$('.ama-alert-plank').show()
					}
				}
			})
		}
	// }
	

	// if ($('.main_menu_wrap').length > 0) {
	// 	var sr_sizes_y = $('.main_menu_wrap').get(0).offsetTop
	// 	$(window).scroll(function() {
	// 		if ($(window).scrollTop() < sr_sizes_y) {
	// 			$('.main_menu_wrap').removeClass('fixed')
	// 			$('.main_menu_wrap').addClass('small')
	// 			$('.ds_logo-fixed').hide()
	// 		} else {
	// 			$('.main_menu_wrap').addClass('fixed')
	// 			$('.main_menu_wrap').removeClass('small')
	// 			$('.ds_logo-fixed').show()
	// 		}
	// 	})
	// }

	$('.ds_mobile').headroom()
	$('.plahka--size').headroom()

	
	$('.product-filter').click(function() {
		multi_product_filter()
	})

	if (window.location.href.match('plaids')) {
		$('.ama_news_banner').hide()
	}

	if (window.location.href.match('elitnye-rest') || window.location.href.match('pillows/gel-pillows/') || window.location.href.match('bases') || window.location.href.match('plaids')) {
		$('.ama_new_filter').hide()
	}

	if(!$.cookie('ama-planka-timer')){
		$('body').addClass('timerPlank')
	}
})

// var $grid = $('.hnb_contarea').isotope({
// 	itemSelector: '.store.addres.container',
// 	layoutMode: 'fitRows'
// });

/* $(document).mouseup(function (e) {
    var container = $(".ds_product-filter__container");
    var select_container = $(".ds_product-filter__select");
    if (select_container.has(e.target).length !== 0){
    	container.show();
    	console.log(1);
    } else if (container.has(e.target).length === 0){
        container.hide()
        console.log(0);
	}
});	 */




jQuery(document).ready(function() {


	
	// $('.matras-filtr').click(function() {
	// 	var a = $(this)
	// 		.children('a')
	// 		.text()

	// 	$(this)
	// 		.parent()
	// 		.prev()
	// 		.text(a)
	// })

	const sizes = document.querySelectorAll('.sizes li')

	sizes.forEach(function(i) {
		console.log(i.innerHTML)
		if (window.location.href.indexOf(i.innerText) > -1) {
			document.querySelector('.past-size').innerText = i.innerText
		}
	})

	console.log(sizes)
})


window.mobilecheck = function() {
  var check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
}
jQuery(function() {
  window.$q = function(q, res){
        if (document.querySelectorAll) {
          res = document.querySelectorAll(q);
        } else {
          var d=document
            , a=d.styleSheets[0] || d.createStyleSheet();
          a.addRule(q,'f:b');
          for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
            l[b].currentStyle.f && c.push(l[b]);

          a.removeRule(0);
          res = c;
        }
        return res;
      };
    var addEventListener = function(evt, fn){
        window.addEventListener
          ? this.addEventListener(evt, fn, false)
          : (window.attachEvent)
            ? this.attachEvent('on' + evt, fn)
            : this['on' + evt] = fn;
      }
    , _has = function(obj, key) {
        return Object.prototype.hasOwnProperty.call(obj, key);
      }
    ;

  function loadImage (el, fn) {
    var img = new Image()
      , src = el.getAttribute('data-src') || '', srcset = el.getAttribute('data-srcset') || '';

	//mobile
	if(typeof el.getAttribute('data-mobile-src') != 'undefined' && mobilecheck()){
		src = el.getAttribute('data-mobile-src') || src;
		srcset = '';
	}

    img.onload = function() {
      if (!! el.parent)
        el.parent.replaceChild(img, el)
      else{
        el.src = src;
		if(srcset) el.srcset = srcset;
	  }

	  el.style.opacity = '1';

      fn? fn() : null;
    }
    img.src = src;
	if(srcset) img.srcset = srcset;
	img.style.opacity = '1';
  }

  function elementInViewport(el) {
    var rect = el.getBoundingClientRect()
	//if($(el).parents('.bx-wrapper').length > 0) rect = $(el).parents('.bx-wrapper')[0].getBoundingClientRect()
	var rect2 = $('html')[0].getBoundingClientRect();
	
	var hide_parent = false;
	$(el).parents().each(function(){
		if(!$(this).is(':visible')) hide_parent = true;
	});
	if(hide_parent) return false;

if($(el).parents('.bx-wrapper').length > 0 && $(el).attr('src') == '/img/no-image.png' && rect.height > 1){
	console.log(rect);
	console.log(((window.innerHeight || document.documentElement.clientHeight)+110));
}
    return (
       rect.top+rect.height    >= 0 
    && rect.left+rect.width   >= 0
    && (rect.top <= ((window.innerHeight || document.documentElement.clientHeight)+210))
	)
  }

    window.ll_images = new Array();
    var query = $q('img.img_lazy_load');
    window.processScroll = function(){
          for (var i = 0; i < ll_images.length; i++) {
            if (elementInViewport(ll_images[i])) {
              loadImage(ll_images[i], function () {
                ll_images.splice(i, i);
              });
            }
          };
        }
      ;
    // Array.prototype.slice.call is not callable under our lovely IE8
    for (var i = 0; i < query.length; i++) {
      ll_images.push(query[i]);
    };

    processScroll();
    addEventListener('scroll',processScroll);

 });
 
$('body').on('keyup', 'input[name="phone"], input[name="phone_1"]', function(e){
	
	if($(this).val() == '+7 (8__) __-__-___'){
		$(this).val('+7 (___) __-__-___');
		$(this).mask('8 (999) 99-99-999');
		$(this).focus();
	}
	if(e.which == 8){
		if($(this).val() == '8 (___) __-__-___'){
			$(this).mask('+7 (999) 99-99-999');
			$(this).focus();
		}
	}
	
});

$('body').on('paste', 'input[name="phone"], input[name="phone_1"]', function(e){
	var pastedData = e.originalEvent.clipboardData.getData('text');
	pastedData = pastedData.replace(/[^+\d]/g, '');
	
	if(pastedData.charAt(0) == '8' || pastedData.charAt(0) == '+'){
		var pd_suff = '';
		if(pastedData.charAt(0) == '8'){
			pd_suff = '8';
			pastedData = pastedData.substr(1);
		}
		else if(pastedData.charAt(0) == '+'){
			pd_suff = '+7';
			pastedData = pastedData.substr(2);
		}
		var _this = this;
		setTimeout( function() {
            $(_this).mask(pd_suff+' (999) 99-99-999');
			$(_this).val(pd_suff+' ('+pastedData.substr(0,3)+') '+pastedData.substr(3,2)+'-'+pastedData.substr(5,2)+'-'+pastedData.substr(7,3));
        }, 100);
	}
	
});