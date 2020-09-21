<?php
$testerok = array(
	 array(
		 	'carousel_img' => '/img/product/namatrasnik1.jpg',
			'carousel_name' => 'Защитный бязевый наматрасник',
			'carousel_oldprice' => '4 000',
			'carousel_price' => '3 000',
			'carousel_href' => '/catalog/mattress-covers/zashchitnyj-byazevyj-namatrasnik/'
	  ),
	  array(
			  'carousel_img' => '/img/product/big/namatrasnik_nepro1.jpg',
			 'carousel_name' => 'Защитный непромокаемый наматрасник',
			 'carousel_oldprice' => '3 500',
			 'carousel_price' => '2 625',
			 'carousel_href' => '/catalog/mattress-covers/zashchitnyj-byazevyj-namatrasnik/'
	   ),
	   array(
			   'carousel_img' => '/img/product/copri_mat_spugna_002_1.jpg',
			  'carousel_name' => 'Водонепроницаемый наматрасник Spugna',
			  'carousel_oldprice' => '9 600',
			  'carousel_price' => '7 200',
			  'carousel_href' => '/catalog/mattress-covers/spugna-namatrasnik/'
		),
		array(
				'carousel_img' => '/img/product/outlast-2.jpg',
			   'carousel_name' => 'Защитный стеганный наматрасник Aloe',
			   'carousel_oldprice' => '10 800',
			   'carousel_price' => '8 100',
			   'carousel_href' => '/catalog/mattress-covers/aloe-namatrasnik/'
		 )
);
$get_pillow_carousel='<div class="carousel-test">
	   <div class="carousel-test shadow"> 
	      <div class="carousel-button-left"><a href="#"></a></div> 
	      <div class="carousel-button-right"><a href="#"></a></div> 
			<div class="carousel-test-wrapper"> 
			   <div class="carousel-test-items">'; 
				foreach ($testerok as $value) {
				          $get_pillow_carousel .= '<div class="carousel-test-block">
				          <div class="carousel-img-block">
				          <a href="'.$value['carousel_href'].'"><img src="'.$value['carousel_img'].'" alt="" /></a>
				          </div>
				          <p class="pillow_name" align="center">'.$value['carousel_name'].'</p>
				          <p class="oldprice"> Цена: <span class="maroon" align="left"><s>'.$value['carousel_oldprice'].' р.</s></span>
				          <p class="pillow_price " align="left">'.$value['carousel_price'].' р.<a href="'.$value['carousel_href'].'"> <button class="button_buy" align="right">Купить</button> </a> </p>
				          </div>';
				}
			 $get_pillow_carousel .= '</div>
			</div>
	   </div>
	</div>';

?>


	<style type="text/css">

.textPage.hnb_contarea p{
	padding: 0 !important;
}
	.carousel-test  {
   /* ширина всего блока */
   margin: 20px auto;
   width:100%;
   background-color: white;
}
.carousel-test-wrapper {
   margin: 10px 30px; /* отступы для стрелок */
   overflow: hidden; /* скрываем содержимое, выходящее за рамки основной области */
   position:relative;
}
.carousel-test-items {
   width: 10000px; /* устанавливаем большую ширину для набора элементов */
   position: relative; /* позиционируем блок относительно основной области карусели */
}
.carousel-test-block {
   float: left; /* выстраиваем все элементы карусели в ряд */
   width: 250px; /* задаём ширину каждого элемента */
   padding: 10px 10px 10px 0px; /* делаем оступы, чтобы элементы не сливались */
   height: 340px;
}

.carousel-test-block p{
   color: #686868;
   margin-left: 10px;
}

.maroon{
	color: #c10d24;
	margin-left: 5px;
	font-weight: bold;
	font-size: 14px;
	margin-left: -2px;
}

.pillow_name, .pillow_price{
	font-weight: bold;
}

.pillow_name{
	color: #3f3f3f;
}

.carousel-test-block img{
	display:block;
}

.pillow_title{
	color: #555;
}

/*********** BUTTONS ***********/
.carousel-button-left a, .carousel-button-right a{
   width: 25px; 
   height: 36px; 
   position: relative;
   top: 80px; 
   cursor: pointer; 
   text-decoration:none;
}
.carousel-button-left a{
   float: left; 
   background-image: url(/img/navigation-previous.png);
   background-repeat: no-repeat;
   width: 50px;
   height: 80px;
}
.carousel-button-right a{
   width: 50px;
   height: 80px;
   float: right;
   background-image: url(/img/navigation-next.png);
   background-repeat: no-repeat;
}

.carousel-button-left a:hover{
   opacity: 1;
}
.carousel-button-right a:hover{

   opacity: 1;
}

.button_buy{
    padding: 0 13px;
    height: 20px;
    width: 75px;
    line-height: 20px;
    font-size: 12px;
    text-transform: uppercase;
    background: #636363;
    color: #FFF;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s;
    text-align: center;
    border: none;
	margin-left: 38%;
	display: none;
}

.carousel-img-block{
	width: 100%;
	height: 180px;
}

.carousel-img-block img{
	width: 250px;
	height: 180px;
	margin:auto;
}

/* .carousel-img-block img:hover{
	width: 250px;
	height: 180px;
	margin:auto;
	cursor: pointer;
} */
.newbie{
	display: none;
}

</style>

<script type="text/javascript">
	$(document).on('click', ".carousel-button-right",function(){ 
	var carusel = $(this).parents('.carousel-test');
	right_carusel(carusel);
	return false;
});
//Обработка клика на стрелку влево
$(document).on('click',".carousel-button-left",function(){ 
	var carusel = $(this).parents('.carousel-test');
	left_carusel(carusel);
	return false;
});
function left_carusel(carusel){
   var block_width = $(carusel).find('.carousel-test-block').outerWidth();
   $(carusel).find(".carousel-test-items .carousel-test-block").eq(-1).clone().prependTo($(carusel).find(".carousel-test-items")); 
   $(carusel).find(".carousel-test-items").css({"left":"-"+block_width+"px"});
   $(carusel).find(".carousel-test-items .carousel-test-block").eq(-1).remove();    
   $(carusel).find(".carousel-test-items").animate({left: "0px"}, 200); 
   
}
function right_carusel(carusel){
   var block_width = $(carusel).find('.carousel-test-block').outerWidth();
   $(carusel).find(".carousel-test-items").animate({left: "-"+ block_width +"px"}, 200, function(){
	  $(carusel).find(".carousel-test-items .carousel-test-block").eq(0).clone().appendTo($(carusel).find(".carousel-test-items")); 
      $(carusel).find(".carousel-test-items .carousel-test-block").eq(0).remove(); 
      $(carusel).find(".carousel-test-items").css({"left":"0px"}); 
   }); 
}

$(function() {
//Раскомментируйте строку ниже, чтобы включить автоматическую прокрутку карусели
	// auto_right('.carousel-test:first');
})

// Автоматическая прокрутка
function auto_right(carusel){
	setInterval(function(){
		if (!$(carusel).is('.hover'))
			right_carusel(carusel);
	}, 3000)
}
// Навели курсор на карусель
$(document).on('mouseenter', '.carousel-test', function(){$(this).addClass('hover')})
//Убрали курсор с карусели
$(document).on('mouseleave', '.carousel-test', function(){$(this).removeClass('hover')})
</script>
