"use strict";

Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};

let canHover = true

const htmlInsert = `
	<div class="ama_one_more_bad_block" style="display: block; width: 100%;">
		<h3>Модели указанного размера на заказ</h3>
	</div>
`


function inputNotValid(inputId = null, errorText = 'Поле пустое!'){
	if(inputId == null){
		$(`#${inputId}`).prev('.valid_error').remove()
		$(`#${inputId}`).removeClass('valid_error_border')
	} else {
		$(`#${inputId}`).prev().after(`<div class="valid_error ${inputId}">*${errorText}</div>`);
		$(`#${inputId}`).addClass('valid_error_border')
	}
}

function switchRec(rec){
	let yes = document.getElementById('recommend_yes').checked
	let no = document.getElementById('recommend_no').checked


	if(rec){
		$('#yes_rec').toggleClass('active')
		$('#no_rec').removeClass('active')
		document.getElementById('recommend_yes').checked = !yes
		document.getElementById('recommend_no').checked = false
	} else {
		$('#yes_rec').removeClass('active')
		$('#no_rec').toggleClass('active')
		document.getElementById('recommend_yes').checked = false
		document.getElementById('recommend_no').checked = !no
	}
}
function closeOnclickBuy() {
	$('.oneclick_overlay').hide()
	$('body').css('overflow-y', 'auto')
}

function showOnlyReviews(){
	// $('.reviews__types').slideUp()
	$('.star3').slideUp()
	// $('.rate-rate').slideDown()
}
function showReviewsAndRates(){
	// $('.reviews__types').slideDown()
	$('.star3').slideDown()
	// $('.rate-rate').slideDown()
}

function sidebarMobTitle(name){
	var title = ''

	switch(name){
		case 'basket':
			title = 'Корзина'
			break;
		case 'o-magniflex':
			title = 'О Магнифлекс'
			break;
		case 'production':
			title = 'Продукция'
			break;
		case 'partneram':
			title = 'Партнерам'
			break;
		case 'pokupatelyam':
			title = 'Покупателям'
			break;
		case 'skidki-magniflex':
			title = 'Скидки и акции'
			break;
		default: 
			title = '';
			break;
	}

	$("<h4 class='sidebar_title'>" + title + "</h4>").insertBefore(".textPage .sr_sizes2");
}

function showModalDesc(){
	$('#desc_modal').show()
	$('.watch_review_content').addClass('open')
	$('.overlay').fadeIn()
	setTimeout(function(){
		$('.review_modal_cross').show()
		$('.watch_review_content video').trigger('play');
	}, 400)
	
}

function showModalReview(id){
	$.ajax({
		url: "/template/reviews.php", //the page containing php script
		type: "post", //request type,
		dataType: 'json',
	   	data: {id: id},
		beforeSend: function() {
					
		},
		success:function(result){
			var html = `
				<div id="review_modal">
					<div class="overlay" onclick="hide_popup_ama()" style="display: none;"></div>
					<div class="watch_review_content">
						<img src="/img/x.svg" class="review_modal_cross" onclick="hide_popup_ama()"/>
						<p style="border: none !important;">
							<b>${result.author}</b><br>    
							<p style="border: none !important;" class="review-page_text">${result.html}</p>   	                        
							<b>${result.date}</b>   
						</p>
					</div>
				</div>
			`

			$('body').append(html)
			setTimeout(function(){
				$('.watch_review_content').addClass('open');
				$('.overlay').fadeIn()
				$('body').css('overflow-y', 'hidden')
				$('.main_menu_wrap').css('z-index', '0')
				if(window.innerWidth < 800){
					$('.ds_mobile').hide()
				}
			}, 200);
	   },
	   error: function(e){
		   console.log(e)
	   }
	});
}

function hide_popup_ama(){
	$('.watch_review_content').removeClass('open');
	$('.review_modal_cross').hide()
	$('.overlay').fadeOut()
	if($('#desc_modal').length > 0){
		$('#desc_modal').hide()
	}
	setTimeout(function(){
		$('#review_modal').remove()
		$('body').css('overflow-y', 'auto')
		$('.main_menu_wrap').css('z-index', '9')
		if(window.innerWidth < 800){
			$('.ds_mobile').show()
		}
	}, 400)

}

function reviewFilter(filter){

	$('.reviews__types-item').removeClass('active')
	event.currentTarget.classList.add('active')

	var reviews = $('.rate-rate');
	
	reviews.slideUp()

	reviews.each(function(){
		var rate = $(this).attr('data-rate')
		var el = $(this)

		if(filter == 'good' && rate > 4){
			el.slideDown()
		}
		if(filter == 'bad' && rate <= 4){
			el.slideDown()
		}
		if(filter == 'all'){
			el.slideDown()
		}

	})
	


}

function cookieSizePhp(size, address){
	$.cookie("size", size, { expires: 1, path: "/" }); 
	if(address != ''){
		window.location.href = address;
	} else {
		document.location.reload(true)
	}
	
}

function playAmaPlayer(id){
	let video_el = $('.hnb_contvideo video#' + id)
	video_el[0].play();
	video_el[0].loop = true;
	$('.ama_video_player.play').css('background', 'none')
	$('.ama_video_player.pause').show()
	$('.ama_video_player.pause img').show()
	$('.ama_video_player.play').hide()
	setTimeout(function(){
		$('.ama_video_player.pause img').fadeOut()
	}, 1000)
}

function pauseAmaPlayer(id){
	let video_el = $('.hnb_contvideo video#' + id)
	video_el[0].pause();
	$('.ama_video_player.play').show()
	$('.ama_video_player.play img').show()
	$('.ama_video_player.pause').hide()
}


function offVolumePlayer(){
	let video_el = $('.hnb_contvideo video')
	video_el[0].muted = true
	$('.ama_player_volume.off').fadeIn()
	$('.ama_player_volume.on').fadeOut()
}
function onVolumePlayer(){
	let video_el = $('.hnb_contvideo video')
	video_el[0].muted = false
	$('.ama_player_volume.off').fadeOut()
	$('.ama_player_volume.on').fadeIn()
}

function sortProducts(){
	var productspar = $('.category_products ')			
	var products = productspar.children('.category_product')

	products.sort(function(a, b){
		var aval = a.getAttribute('data-price').replace('<spanclass="rub_price">P</span>', '') 
		var bval = b.getAttribute('data-price').replace('<spanclass="rub_price">P</span>', '') 
		if (aval == 'Назаказ'){
			return -1
		} else {
			var an = Number(aval.replace(/ /g,'').replace(/от/g,''))
			var bn = Number(bval.replace(/ /g,'').replace(/от/g,''))
			return an - bn
		}	
	})

	products.detach().appendTo(productspar)
	products.each(function(){
		if($(this).find('.category_product_price').children().children().text().includes('заказ') ){
			$(this).detach().appendTo(productspar)
			console.log('test')
		}
	})
	.promise()
	.done(function(){
		if(window.location.href.includes('mattresses')){
			let countAvailableProducts = $( ".category_product[data-available='true']" ).length
			let countAllProducts = $( ".category_product" ).length
			if(countAvailableProducts != countAllProducts){
				$(htmlInsert).insertAfter($( ".category_product")[countAvailableProducts - 1])
			}
		}

		$('.containAll').hide()
		$('.category_product').show()
		 
	})
}

function isComparePage(comparison){
	$('.compare_block_line').hide()	

	if(localStorage.getItem('comparison') !== null){
		comparison = localStorage.getItem('comparison').split(',')
		if(comparison[0] === ''){
			comparison = localStorage.getItem('comparison').split(',').slice(1, localStorage.getItem('comparison').split(',').length)
		}
		comparison.forEach(function(item){				
			$('.compaire_img_name').each(function(){
				if($(this).text() == item){
					$(this).parent().parent().show()
				}
			})
		})
		if($.cookie("size")){
			compareAllBySize($.cookie("size"))
			document.querySelector('.ama_comparison_size_select option').innerText = $.cookie("size")
		}
	} else {
		$('.compare_block_line').hide()	
	}
}

function renderComparisonFixedImages(arr){
	let html = ``
	if(arr != null){
		arr.forEach(function(item, index){
			html += `
			<div class="fixed_block_img_under">
				<div class="abs" onclick="removeSimpleFromLocalStorage(${index})">x</div>
				<img src="${item}" alt="">
			</div>
			`
		})
	}
	
	$('.fixed_block_img').html(html)
	$('.count-compare-products').html(arr.length)

	if(arr.length === 0){
		$('.fixed_block_compare_content').addClass('compare_fixed_empty')
	} else {
		$('.fixed_block_compare_content').removeClass('compare_fixed_empty')
	}
}

function getLocalStorage(arg, argstr){
	if(localStorage.getItem(argstr) !== null){
		arg = localStorage.getItem(argstr).split(',')
		if(arg[0] === ''){
			arg = localStorage.getItem(argstr).split(',').slice(1, localStorage.getItem(argstr).split(',').length)
		}
	} else {
		arg = []
	}
	return arg
}

function removeSimpleFromLocalStorage(idx){
	let comparisonImages = localStorage.getItem('comparisonImages').split(',')
	comparisonImages = comparisonImages.filter(function(value, index){
		return index != idx
	})
	localStorage.setItem('comparisonImages', comparisonImages)

	let comparison = localStorage.getItem('comparison').split(',')
	comparison = comparison.filter(function(value, index){
		return index != idx
	})
	localStorage.setItem('comparison', comparison)

	renderComparisonFixedImages(comparisonImages)
}

function clearLocalStorage(){
	localStorage.removeItem('comparison')
	localStorage.removeItem('comparisonImages')
	renderComparisonFixedImages([])
}

function fadeInTextpage(){
	$( ".hnb_catlogsection" ).animate({
		opacity: 1,
		marginTop: "0"
	  }, 1000, function() {
		// Animation complete.
	  });

	  $(".title_textpage").animate({
		opacity: 1
	  }, 500, function() {
		// Animation complete.
	  });

	  $(".hnb_conttextright").animate({
		opacity: 1,
		marginTop: "0"
	  }, 1250, function() {
		// Animation complete.
	  });
}

function openLeftMenuSlide(arg){
	$('.left_column').animate({
		left: '0'
	}, 400, function(){})
	$('.right_column').animate({
		left: '0'
	}, 400, function(){})
}
function closeLeftMenuSlide(arg){	
	if($('.right_column').position().left == 0){
		$('.left_column').animate({
			left:  -arg
		}, 400, function(){})
		$('.right_column').animate({
			left:  -arg
		}, 400, function(){})
	} else {
		$('.right_column').animate({
			left:  0
		}, 400, function(){
			$('.left_column').animate({
				left:  -arg
			}, 400, function(){})
			$('.right_column').animate({
				left:  -arg
			}, 400, function(){})
		})
	}
	
}


function openRightMenuSlide(arg, left, factor){
	$('.right_column').html(arg)
	if(factor){
		$('.right_column').animate({}, 400, function(){
			$('.right_column').animate({
				left: left
			}, 400, function(){
				canHover = true
			})
		})
	} else {
		$('.right_column').animate({
			left: left
		}, 400, function(){
			canHover = true
		})
	}
	$('.right_column').animate({
		left:  left
	}, 400, function(){
		canHover = true
	})
}

function closeRightMenuSlide(){
	$('.right_column').animate({
		left:  0
	}, 400, function(){
		$('.right_column').html()
		canHover = true
	})
}

function compareAllBySize(size){
	console.log(size)

	$('.size_price_group').hide()
	$('.not_allow').hide()
	
	$('.compare_block_line').each(function(){
		if($(this).is(":visible")){
			$(this).children('.not_allow').hide()
			let isExist = false
			$(this).find('.size_price_group.ama').each(function(){
				if($(this).attr('data-size') == size){
					$(this).show()
					isExist = true
				}
			})
			if(!isExist){
				$('.not_allow .size_special_for_script').text('Нет на складе') 
				$('.not_allow .price_special_for_script').text('Только на заказ') 
				$(this).children('.not_allow').show()
			}
		}
	})
}

$(document).ready(function() {
	if($('.reviews_fixed_plank.bottom_review').length > 0){
		$('.reviews_fixed_plank.bottom_review').slick({
			prevArrow: '<div class="reviews-carousel-arrow-left-container"><span class="reviews-carousel-arrow-left"></span></div>',
			nextArrow: '<div class="reviews-carousel-arrow-right-container"><span class="reviews-carousel-arrow-right"></span></div>',
		})
		$('.product_img').mouseenter(function(){
			$('.reviews_fixed_plank').css('opacity', '0')
		})
		$('.product_img').mouseleave(function(){
			$('.reviews_fixed_plank').css('opacity', '1')
		})

	}


	if($('#subscribe_button').length > 0){
		$('#subscribe_button').click(function(){
			var fd = new FormData($("#subscribe_ama_form")[0]);
			$.ajax({
				url: "/mail-subscribe.php",
				type: "POST",
				contentType: false, 
				processData: false, 
				data: fd,
				success: function(msg){
					console.log("отправлено")
					$("#subscribe_ama_form").append('<p id="info"><span>Сообщение отправлено</span></p>')
					setTimeout(function(){
						hide_popup()
					}, 1000)
				}
			});
		})
	}

	if($('.review-page')){
		var titles = [
			{
				url: '/reviews/about/mattresses/',
				title: 'ОТЗЫВЫ О МАТРАСАХ MAGNIFLEX'
			},
			{
				url: '/reviews/about/merinos/',
				title: 'MERINO (MERINOS)'
			},
			{
				url: '/reviews/',
				title: 'Отзывы реальных клиентов Magniflex'
			},
		]

		$('#show-modal-send-review').click(function(){
			$('#send_review_modal').show()
			$('#sf_overlay').show()
		})

		var path = location.pathname
		var el_p = $("[data-url='"+ path +"']")

		var page_p = '';
		var title_p = '';

		for(var i = 0; i < titles.length; i++){
			if(titles[i].url == path){
				title_p = titles[i].title
			}
		}

		// setTimeout(function(){
		// 	$('#reviews .title_textpage').text(title_p)
		// }, 1000)
	}
	if($('.review-page') && window.innerWidth > 1025){
		var path = location.pathname
		var el_p = $("[data-url='"+ path +"']")
		el_p.css('font-weight', '500')
		setTimeout(function(){
			el_p.parents('ul').show()
			el_p.parent().parent().next('.left_sidebar_button').text('-')
			el_p.parent().parent().parent().parent().next('.left_sidebar_button').text('-')
		}, 1000)
	}

	if($('.ama-rev-main-nav')){
		var product_t = $('#product_t').text()
		var menu = $('.ama-rev-main-nav .main-nav > li.main-m')
		var facto = false
		menu.each(function(){
			if($(this).text() == product_t){
				$(this).addClass('active-rm')
				facto = true
			}
		})
		
		if(!facto){
			$('.ama-rev-main-nav li.all').addClass('active-rm')
		}
	}
	
	$('#rev-nav-ul li, #rev-nav-ul a').click(function(e){
		if(e.target == this && $(this).attr('data-url') && !$(this).attr('href')) location.href = $(this).attr('data-url');
	});

	if(!$.cookie('ama-planka-hide') && $('.ama-alert-plank')){
		$('.ama-alert-plank').show()
	}

	$('.ama-alert-plank-close').mouseenter(function(){
		$(this).attr('src', '/img/x_white.svg')
	})

	$('.ama-alert-plank-close').mouseleave(function(){
		$(this).attr('src', '/img/x_gray.svg')
	})

	if($('.new-main-sliderok')){
		$('.new-main-sliderok').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1500,
					settings: {
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 800,
					settings: {
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 400,
					settings: {
						slidesToShow: 1,
					}
				},
			]
		})
	}

	if($('.ama-grid-slider')){
		$('.ama-grid-slider').slick({
			infinite: true,
			slidesToShow: 1,			
			autoplay: true,
			autoplaySpeed: 2000,
			responsive:[
				{
					breakpoint: 600,
					settings:{
						arrows: false
					}
				}
			]
		})
	}

	if($('.new-center-sliderok')){
		$('.new-center-sliderok').on('init', function(event, slick){
			$('.swap-line.slick-active').addClass('active')
			console.log('init')
		});

		$('.new-center-sliderok').slick({
			centerMode: true,
			infinite: true,
			centerPadding: '500px',
			slidesToShow: 1,
			speed: 500,
			variableWidth: false,
			responsive: [
				{
					breakpoint: 1500,
					settings: {
						centerPadding: '300px',
					}
				},
				{
					breakpoint: 800,
					settings: {
						centerPadding: '50px',
					}
				},
				{
					breakpoint: 400,
					settings: {
						centerPadding: '0px',
					}
				},
			]
		})	
		

		$('.new-center-sliderok').on('afterChange', function(event, slick, currentSlide, nextSlide){
			$('.swap-line').removeClass('active')
			$('.swap-line.slick-active').addClass('active')
		});
	}

	// if(!$.cookie("priceDown")){
	// 	$('body').addClass('topPlankActive')
	// 	$('.price-up').show()
	// }

	var letterArr = ['A', 'B', 'C', 'D', 'E', 'G']
	var letters = document.querySelectorAll('.word_layer')

	if(letters){
		for(var i = 0; i < letters.length; i++){
			letters[i].innerText = letterArr[i]
		}
	}

	$('.single_news_row').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1400,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	})


	var bx_Slider_options_default = {
		pager: true,
		speed: 500,
		auto: true,
		pause: 5000,
		touchEnabled: false,
		onSlideAfter: function($slideElement, oldIndex, newIndex) {
			if(typeof processScroll != 'undefined') processScroll();
		}
	}
	if ($('.main_sl').length > 0) {
		var bxslider = $('.main_sl').bxSlider(bx_Slider_options_default)
	}
	// if($.cookie("size") && $('div').hasClass('abs-choice-mob')){
	// 	$('.abs-choice-mob').html($.cookie("size"))
	// }

	if($.cookie("fixed-phone")){
		$('.fixed-fhone').addClass('hideIconIphone')
	}


	if(!window.location.href.includes('detskie-ortopedicheskie-matrasy') && $('div').hasClass('category_product')){
		$('.category_product').each(function(){

			var prod = $(this)
			var child = prod.attr('data-children')
			if (child) {
				prod.remove()
			}
		})
	}

	if($.cookie("size") && $('div').hasClass('category')){
		window.scrollTo(0, $("#category").offset().top - 200);
	}
	

	if($('ul').hasClass('plashka_sizes_white')){
		$('.plashka_sizes_white li').each(function(){
			if($(this).text().includes('не в рулоне')){
				$(this).hide()
			}
		})
	}

	$('.close-Iphone').click(function(){
		$.cookie("fixed-phone", true, { expires: 1, path: "/" }); 
		$('.fixed-fhone').addClass('hideIconIphone')
	})
	$('.close-Iphone-ama').click(function(){
		$('.fixed-fhone-ama').addClass('hideIconIphone')
	})
	$('.fixed-fhone').mouseenter(function(){
		if($('.fixed-fhone').hasClass('hideIconIphone')){
			$('.fixed-fhone').css('right', '5px')
		}		
	})
	$('.fixed-fhone').mouseleave(function(){
		if($('.fixed-fhone').hasClass('hideIconIphone')){
			$('.fixed-fhone').css('right', '-200px')
		}
	})


	$('.arrow-main-block').click(function(){
		if($(this).hasClass('arrow-main-block-rotate')){
			$('.arrow-main-block').removeClass('arrow-main-block-rotate')
		} else {
			$('.arrow-main-block').removeClass('arrow-main-block-rotate')
			$(this).addClass('arrow-main-block-rotate')
		}
		
	})

	if(window.innerWidth < 900){

		let products_images = $('.ama_mobile_carousel').bxSlider({
			pager: true,
			pagerType: 'full',
			slideMargin: 10,
			touchEnabled: true,
			onSlideAfter: function(){
				if(typeof processScroll != 'undefined') processScroll();
			}
		})

		if (document.getElementById('product')) {
			if(products_images.getSlideCount() == 1){
				$('.bx-pager').hide()
			}
		  }

		$('.main_footer_title').click(function(){
			$(this).toggleClass('rotate_footer_arrow')
			$(this).next('ul').slideToggle()
		})


		let blocksWithImageAndText = $('.common_block_common')
		blocksWithImageAndText.each(function(){
			if($(this).children('.half-width').length && $(this).children('.coin-slider').length){
				$(this).children('.coin-slider').detach().appendTo($(this).children('.half-width').children('h3'))
			} else if($(this).children('.half-width').length && $(this).children('.half-width_img').length) {
				$(this).children('.half-width_img').detach().appendTo($(this).children('.half-width').children('h3'))
			}
		})	
	}

	if($('span').hasClass('zoom_ass')){
		$('span.zoom_ass a').click(function(e){
			$(this).removeClass('boxer')
			e.preventDefault()
			let img = $(this).attr('href')
			$('.product_img').attr('href', img)
			$('.product_img img').attr('src', img)
			setTimeout(function() {
				$('span.zoom_ass a').addClass('boxer')
			}, 1000)
		})
	}	

	if($('div').hasClass('sf_info')){
		document.querySelector('.sf_info .hnb_contcenter').style.display = 'flex'
	}

	let ama_visuals = $('.ama_visual')
	if(ama_visuals.length == 2){
		ama_visuals.hide()
		document.querySelector('.ama_visual').style.display = 'block'
	}

	$('.ama_hidden_desktop_menu').mouseleave(function(){
		if($('.left_column').position().left == 0){
			closeRightMenuSlide()
		}		
	})

	$('.menu__item.menu a').mouseenter(function(){
		//$('.menu__item.menu a').css('text-decoration', 'none')
		$('.menu__item.menu a').css('text-decoration', 'none')
		$(this).css('text-decoration', 'underline')
		let menus = $(this).next('.sr_sizes2').clone()	
		let leftPx
		(window.innerWidth < 1500) ? leftPx = 343 : leftPx = 480

		if(!menus.length){
			canHover = false
			$('.right_column').html(menus)
		} else {
			if($('.right_column').position().left == 0){
				if(canHover){
					canHover = false
					$('.right_column .angle1').hide()			
					openRightMenuSlide(menus, leftPx, false)
				}			
			} else if($('.right_column').position().left == leftPx){
				$('.right_column').html(menus)
			}
		}
	})


	$('.hamburger-button').click(function(e) {
		e.preventDefault()		
		let leftPx
		(window.innerWidth < 1500) ? leftPx = 343 : leftPx = 480
		
		if($('.ama_hidden_desktop_menu').hasClass('open')){
            closeLeftMenuSlide(leftPx)
            setTimeout(function(){
                $('.ama_hidden_desktop_menu').removeClass('open')
            }, 400)
		} else {
			openLeftMenuSlide(leftPx)
            setTimeout(function(){
                $('.ama_hidden_desktop_menu').addClass('open')
            }, 400)
		}
	})


	$(document).click(function (e){ 
		if($('input').hasClass('buy_one_click ')){
			if (!$('#buy_one_click').is(e.target) && !$('#buy_one_click').is(e.target)){
				$('#buy_one_click').mask('+7 (999) 99-99-999')
				$('#buy_one_click').focus()
			}
		}
	})

	if ($.cookie('aboutmagnislider')) {
		console.log($.cookie('aboutmagnislider'))
		$('.ama_news_banner').hide()
		$('.hnb_contvideo').css('padding-bottom', '0px')
	}else{
		$('.close_news_slider').click(function(){
			$('.ama_news_banner').slideUp()

			var date = new Date();
			date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
			$.cookie('aboutmagnislider', 'yes', {
				expires: date
			});
		})
	}  

	fadeInTextpage()

	if(window.innerWidth > 1100){
		setTimeout(function(){
			if($('.hnb_catlogsection').height() > $('.hnb_conttextright').height() ){
				$('.textPage .left_sidebar li ul').hide()	
				// $('.textPage').css('height', $('.hnb_catlogsection').height())
			}
		}, 1000)
	}
	let heigthSide = 0;

	
	$('.left_sidebar_open_submenu').click(function(){
		$(this).next().toggle()
		if($(this).next().next().text() == '-') {
			$(this).next().next().text('+')
		} else {
			$(this).next().next().text('-') 
		}
	})

	if($('div').hasClass('textPage') || $('div').hasClass('review-page') ){
		let menus = $('.left_sidebar > li');
		$('.left_sidebar > li > ul').hide()

		menus.each(function(){
			if($(this).children('ul').length > 0 && $(this).children('ul').hasClass('reviews_link')){
				$(this).append('<span class="left_sidebar_button">-</span>')
			} else if($(this).children('ul').length > 0) {
				$(this).append('<span class="left_sidebar_button">+</span>')
			}
		})


		$('.left_sidebar_button').click(function(){
			if($('.reviews_link').length > 0){
				$(this).prev('ul.reviews_link').removeClass('reviews_link')
				$(this).prev().hide()
			}
			// console.log(heigthSide)
			if($(this).text() == '-') {
				$(this).text('+')
			} else {
				$(this).text('-') 
			}
			$(this).prev().toggle()
			let heigthSide = $('.textPage.hnb_contarea .hnb_catlogsection').height()
			$('.hnb_contarea').css('min-height', heigthSide + 'px')

		})	
	}
	if($('div').hasClass('textPage') && window.innerWidth < 1025 || $('div').hasClass('review-page') && window.innerWidth < 1025){
		$('ul').removeClass('hnb_mworld2')
		$(document).scroll(function(){
			$('ul.left_sidebar li ul').hide()
			$('.left_sidebar_button').text('+')
		})
	}
	
	if(window.innerWidth > 1100 && $('div').hasClass('textPage')){
		setTimeout(function(){
			let heigthSide = $('.textPage.hnb_contarea .hnb_catlogsection').height()
			$('.hnb_contarea').css('min-height', heigthSide + 'px')
		}, 1000)

		


		let isFixed = false
		
		

		$(document).scroll(function(){	
			let document_height_factor = $(document).height() - 2000 - $('.textPage.hnb_contarea .hnb_catlogsection').height()	
			if($(document).scrollTop() > 300 && !isFixed && $(document).scrollTop() < document_height_factor && window.innerHeight - 100 > $('.hnb_catlogsection').height() ){
				let worlmagniflex = document.querySelector('.worlmagniflex').getBoundingClientRect()
				$('.worlmagniflex ').css('position', 'fixed')
				$('.worlmagniflex ').css('top', 30)
				$('.worlmagniflex ').css('left', worlmagniflex.x)
				isFixed  = true
			} else if (isFixed && $(document).scrollTop() <= 270 || isFixed   && $(document).scrollTop() >= document_height_factor){
				$('.worlmagniflex ').css('position', 'relative')
				$('.worlmagniflex ').css('top', 'unset')
				$('.worlmagniflex ').css('left', 'unset')
				isFixed  = false
			}
		})
	}

	if($('div').hasClass('plahka--size') ){		
		window.onscroll = function(e) {
			if(this.oldScroll > this.scrollY || this.scrollY < 200 ){ // down
				$('.plahka--size').hide()
			} else { 
				$('.plahka--size').show()
				console.log('down')
				// if(!$.cookie('size')){
				// 	$('.plahka--size').show()
				// } else {
				// 	$('.plahka--size').hide()
				// }
			}
			this.oldScroll = this.scrollY;
		}
	}

	// if($('div').hasClass('plahka--size') ){		
	// 	window.onscroll = function(e) {
	// 		console.log(this.scrollY)
	// 		if(this.oldScroll > this.scrollY ){ // down
	// 			$('.plahka--size').hide()
	// 			if(this.scrollY == 0) {
	// 				$('.main_menu_wrap.fixed').css('position', 'sticky')
	// 			}
	// 		} else { 
	// 			$('.plahka--size').show()
	// 			$('.main_menu_wrap.fixed').css('position', 'fixed')
	// 			console.log('down')
	// 			// if(!$.cookie('size')){
	// 			// 	$('.plahka--size').show()
	// 			// } else {
	// 			// 	$('.plahka--size').hide()
	// 			// }
	// 		}
	// 		this.oldScroll = this.scrollY;
	// 	}
	// } else {
	// 	window.onscroll = function(e) {
	// 		if(this.oldScroll > this.scrollY ){ // down
	// 			if(this.scrollY == 0) {
	// 				$('.main_menu_wrap.fixed').css('position', 'sticky')
	// 			}
	// 		} else { 
	// 			$('.main_menu_wrap.fixed').css('position', 'fixed')
	// 		}
	// 		this.oldScroll = this.scrollY;
	// 	}
	// }
	

	$('.ama_quick_category_links .nextdx ').click(function(){
		setTimeout(function(){
			$('.ama_quick_category_links .nextdx').css('right', '-50px')
			$('.ama_quick_category_links .leftdx').css('left', '15px')
		}, 400)
	})

	$('.ama_quick_category_links .leftdx ').click(function(){
		setTimeout(function(){
			$('.ama_quick_category_links .leftdx').css('left', '-50px')
			$('.ama_quick_category_links .nextdx').css('right', '4px')
		}, 400)		
	})

	let comparison = [];
	let comparisonImages = [];

	if (window.location.href.indexOf("compare") > -1) {
		isComparePage(comparison)
		let sizes = [];
		$('.compare_block_line').each(function(){
			if($(this).is(":visible")){
				$(this).find('.size_price_group.ama').each(function(){
					sizes.push($(this).attr('data-size'))
				})
			}
		})
		sizes = [...new Set(sizes)]
		sizes = sizes.map(function(item){
			return item.split('x').join('')
		}).sort((a,b) => a - b)
		sizes = sizes.map(function(item){
			if(!item.includes('новый')) {
				return item.splice(-3, 0, 'x')
			} else {
				return ''
			}
		})

		sizes.forEach(function(item){
			if (item != ''){
				let a = `<option value="${item}">${item}</option>`
				$('.ama_comparison_size_select').append(a);
			}			
		})

		

	}

	$('.ama_comparison_size_select').change(function(){
		compareAllBySize($(this).val())
	})

	comparison = getLocalStorage(comparison, 'comparison')
	comparisonImages = getLocalStorage(comparisonImages, 'comparisonImages')

	renderComparisonFixedImages(comparisonImages)

	$('.remove_compare_from_page').click(function(){
		let name = $(this).attr('data-name')
		let index;
		comparison.forEach(function(item, idx){
			if(item == name) index = idx
		})

		comparison = comparison.filter(function(value){
			return value != name
		})
		localStorage.setItem('comparison', comparison)

		comparisonImages = comparisonImages.filter(function(value, idx){
			return idx != index
		})
		localStorage.setItem('comparisonImages', comparisonImages)

		location.reload()
	})

	$('.compare-button, .compare-button-card').click(function(){
		comparison = getLocalStorage(comparison, 'comparison')
		comparisonImages = getLocalStorage(comparisonImages, 'comparisonImages')

		let name = $(this).attr('data-name')
		if(comparison.includes(name)){
			comparison = comparison.filter(function(value){
				return value != name
			})
			localStorage.setItem('comparison', comparison)
		} else {
			comparison.push(name)
			localStorage.setItem('comparison', comparison)
		}
		
		let image = $(this).attr('data-image')
		if(comparisonImages.includes(image)){
			comparisonImages = comparisonImages.filter(function(value){
				return value != image
			})
			localStorage.setItem('comparisonImages', comparisonImages)
		} else {
			comparisonImages.push(image)
			localStorage.setItem('comparisonImages', comparisonImages)
		}

		renderComparisonFixedImages(comparisonImages)
	})


	sortProducts()	
	
	$('.sets_container_insta').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		speed: 1000,
		nextArrow: '<div class="nextdx slick-arrow" style=""><img src="/img/next.svg" alt=""></div>',
		prevArrow: '<div class="leftdx slick-arrow" style=""><img src="/img/next.svg" alt=""></div>',
		responsive: [
			{
				breakpoint: 1040,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			
		]
		
	});

	$('#main_menu .menu').click(function() {
		if($('.left_column').position().left == 0){
			let leftPx
			(window.innerWidth < 1500) ? leftPx = 343 : leftPx = 480
			closeLeftMenuSlide(leftPx)
		}	
		console.log('click')
		var menu = $(this).children('.menu_children_container')
		if (menu.hasClass('open')) {
			menu.slideUp()
			// $('.plahka--size').show()
			setTimeout(function() {
				$('.menu_children_container').removeClass('open')
			}, 400)
		} else {
			$('.plahka--size').hide()
			$('.menu_children_container').removeClass('open')
			$('.menu_children_container').hide()
			menu.addClass('open')
			menu.slideDown()
		}
		if(typeof processScroll != 'undefined') processScroll();
	})

	$('#sf_overlay.overlay_extra').click(function() {
		$('.menu_children_container').removeClass('open')
		$(this).removeClass('overlay_extra')
	})

	if (window.location.href.match('elitnye')) {
		$('.ama_new_filter').hide()
	}

	if($('div').hasClass('button ama-one-click-buy')){
		
	}

	if($('.ama-filter-btn').length > 0){
		$('.ama-filter-btn').click(function(){
			$('.switcher_main').slideToggle()
		})
	}

	if($('.outletCategory').length > 0 && window.innerWidth < 800){
		$('.ama_hvr_border').remove()
		$('.ama_hvr_image').remove()

		$('.ama_hvr_image_img').show()

		$('.outlet-left').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1
		  })
	}
})
