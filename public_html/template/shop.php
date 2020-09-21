<?php
	if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}
	
	if(!$template_page_type)	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_404.php');	}
	
	//error_reporting(E_ALL);
	//ini_set('display_errors',1);
	
	?>
	<h2 class="hnb_mytitlepag2"><?=(($page['h1'])?$page['h1']:$page['name']);?></h2>
	<?php
	
	include_once('widgets/breadcrumbs.php');
	
	if($template_page_type == 'russia'){ //страница магазины в России
		?>
		<style>
		#google-map {
			width: 100%; height: 570px; padding: 10px;
		}
		.hnb_contarea{
			display:block;
		}
		.textPage .sr_sizes2{
			display: none;
		}
		.hnb_conttextright{
			margin: 0 auto;
			padding: 0;
			float: none;
			max-width: unset !important;
			margin-left: 0px !important;
		}
		.hnb_altawer
		{
			max-width:1200px;
			width:90%;
			margin:0 auto;
			box-sizing: border-box;
		}
		@media screen and (max-width: 700px){
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
			google_zoom = <?=$page['map_zoom'];?>;
			google_FirstCenter = <?=$page['map_lat'];?>;
			google_SecondCenter = <?=$page['map_lng'];?>;
	</script>

 <script type="text/javascript" src="/template/js/map-google.js?v=2"></script>
 <script type="text/javascript" src="/template/js/placemark-google.js"></script>

<script src=" https://googlemaps.github.io/v3-utility-library/packages/markerclustererplus/dist/markerclustererplus.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>

<div id="google-map"></div>

<div class="hnb_altawer"> <?php /*список городов, 3 колонки*/ ?>
	<div class="hnb_altawerlft">
		<?php
			foreach (range(chr(0xC0),chr(0xCA)) as $bukva){
				$bukva = iconv('CP1251','UTF-8',$bukva);
				$bukva_exist = false;
				foreach($cities as $city_url => $city){
					if($city['hide_list']) continue;
					if(mb_substr($city['name'],0,1,'UTF-8') == $bukva){
						if(!$bukva_exist){
							echo('<div><span>'.$bukva.'</span>');
						}
						echo('<a href="/shops/russia/'.$city_url.'/">'.$city['name'].'</a><br />');
						if(!$bukva_exist){
							echo('</div>');
						}
						$bukva_exist = true;
					}
				}
			}
		?>
	</div><div class="hnb_altawerrig">
		<?php
			foreach (range(chr(0xCB),chr(0xD1)) as $bukva){
				$bukva = iconv('CP1251','UTF-8',$bukva);
				$bukva_exist = false;
				foreach($cities as $city_url => $city){
					if($city['hide_list']) continue;
					if(mb_substr($city['name'],0,1,'UTF-8') == $bukva){
						if(!$bukva_exist){
							echo('<div><span>'.$bukva.'</span>');
						}
						echo('<a href="/shops/russia/'.$city_url.'/">'.$city['name'].'</a><br />');
						if(!$bukva_exist){
							echo('</div>');
						}
						$bukva_exist = true;
					}
				}
			}
		?>
	</div><div class="hnb_altawerrig">
		<?php
			foreach (range(chr(0xD2),chr(0xDF)) as $bukva){
				$bukva = iconv('CP1251','UTF-8',$bukva);
				$bukva_exist = false;
				foreach($cities as $city_url => $city){
					if($city['hide_list']) continue;
					if(mb_substr($city['name'],0,1,'UTF-8') == $bukva){
						if(!$bukva_exist){
							echo('<div><span>'.$bukva.'</span>');
						}
						echo('<a href="/shops/russia/'.$city_url.'/">'.$city['name'].'</a><br />');
						if(!$bukva_exist){
							echo('</div>');
						}
						$bukva_exist = true;
					}
				}
			}
		?>
	</div>
</div>

<div style="clear: both;"> </div>
		<?php
	}
	else if($template_page_type == 'city'){  //страница магазины в городе
		?>
		
<?php if($page['map_zoom'] && $page['map_lat'] && $page['map_lng']){ ?>
<script>
    google_zoom = <?=$page['map_zoom'];?>;
    google_FirstCenter = <?=$page['map_lat'];?>;
    google_SecondCenter = <?=$page['map_lng'];?>;
</script>

<script type="text/javascript" src="/template/js/map-google.js?v=2"></script>
<script type="text/javascript" src="/template/js/placemark-google.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>
<script src=" https://googlemaps.github.io/v3-utility-library/packages/markerclustererplus/dist/markerclustererplus.min.js"></script>

<div id="google-map"></div>
<?php } ?>

<div class="city_shops_wrap">

<?php if(!empty($page['metro'])){ ?>
<br>
<div class="ama_new_filter_map" id="city_shops_filter">
	<select class="ds_metro_filter" id="city_shops_filter_metro">
		<option class="ds_main-select" selected="selected" value="">Ближайшее метро</option>
		<?php foreach($page['metro'] as $metro => $metro_name){ 
			echo('<option value="'.$metro.'">'.$metro_name.'</option>');
		}
		?>
	</select>
</div>
<? } ?>

<div class="city_shops">


	<? foreach($shops as $shop_url => $shop) { 
		if($shop['city'] == $page['cur_city'] || $shop['city2'] == $page['cur_city']){
			if(!$shop['address'] && $shop['marker_title']) $shop['address'] = $shop['marker_title'];
	?>
		<div class="city_shop">
			<a href="/shops/russia/<?=$shop['city'];?>/<?=$shop_url;?>/" class="city_shop_name" title="Перейти на страницу - <?=$shop['name'];?>"><?=$shop['name'];?></a>
			<div class="city_shop_address"><?=$shop['address'];?></div>
			<?php if($shop['metro']){ ?><div class="city_shop_metro"><?=$shop['metro'];?></div><?php } ?>
			<!--<div class="city_shop_working_time"><?=$shop['working_time'];?></div>-->
			<div class="city_shop_contacts"><?=$shop['contacts'];?></div>
			<a href="/shops/russia/<?=$shop['city'];?>/<?=$shop_url;?>/" title="Перейти на страницу - <?=str_replace('"','',$shop['name']);?>" class="sf_btn_link">Подробнее</a>
		</div>
	<? } } ?>
	<div style="clear:both;"></div>
</div>

<br /><br />
<?=$page['text'];?>



</div>

			'
		<?php
	}
	else if($template_page_type == 'shop'){  //страница магазина
		?>
		
<?php if(!empty($page['position'])){ ?>
<script>
    google_zoom = 18;
    google_FirstCenter = <?=$page['position']['lat'];?>;
    google_SecondCenter = <?=$page['position']['lng'];?>;
</script>

<script type="text/javascript" src="/template/js/map-google.js?v=2"></script>
<script type="text/javascript" src="/template/js/placemark-google.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUarI5C7F7XO2N-KrDv_IciLr9OzavtQM&callback=initMap"></script>
<script src=" https://googlemaps.github.io/v3-utility-library/packages/markerclustererplus/dist/markerclustererplus.min.js"></script>

<div id="google-map"></div>
<?php } ?>

<br />


<div class="shop_wrap">

	<?if($page['warning']){?>
		<p style="color:#d5282d">
				<?=($page['warning'])?>;
		</p>
	<?}?>

	<div class="shop_info">
		<h1 class="shop_name"><?=$page['name'];?></h1>
		<div class="shop_address"><?=$page['address'];?></div>
		<div class="shop_metro"><?=$page['metro'];?></div>
		<div class="shop_working_time"><?=$page['working_time'];?></div>
		<div class="shop_contacts"><?=$page['contacts'];?></div>
		<div class="shop_exposition"><?=$page['exposition'];?></div>
	</div>

<br /><br />

<?=$page['text'];?><br /><br />

<?php if($page['img']){ ?><div class="shop_img"><img src="<?=$page['img'];?>" alt="Матрасы Magniflex в <?=str_replace('"','',$page['name']);?>" /></div>
<?php } /* else if($page['small_img']){ ?><div class="shop_img"><img src="<?=$page['small_img'];?>" alt="Матрасы Magniflex в <?=str_replace('"','',$page['name']);?>" /></div><?php } */ ?>

<script>
$(window).load(function(){
	$( ".shop_img img" ).each( function() {
		var $img = $( this );
		$img.width( $img.width() * .5 );
	});
});
</script>
</div>
		<?php
	}
	
?>