<?php
	if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}


	if(!$page['address']){
		$_tmr_mailretarg = '<script type="text/javascript">var _tmr = _tmr || []; _tmr.push({ type: "itemView", productid: "", pagetype: "home", totalvalue: "", list: "1" });</script>';
	?>
    <?
    ?>
		<?=$page['text'];?>

	<?php
	}
	else{?>
    <style>
      #breadcrumbs {
        <?if($page['left_sidebar']){ ?>
          background-image: url(/img/breadcrumbs.jpg);
        <? } ?>
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      #breadcrumbs {
        <? if($page['address'] && $page['breadcrumbs_image']){  ?>
        background: url(<?=$page['breadcrumbs_image'];?>) !important;<? } ?>
        height: 220px;
      }
      @media screen and (max-width: 480px){
        .ama_news_banner {
          background: #f1f1f1;
         
        }
      }
    </style>
<?php
  $sidebar;

		include_once('widgets/breadcrumbs.php');
		if($page['left_sidebar']){
			include_once('widgets/left_sidebar.php');
			if(isset($left_sidebar[$page['left_sidebar']])){
        //$page['text'] = str_replace('<!--{left_sidebar}-->', $left_sidebar[$page['left_sidebar']], $page['text']);
        $sidebar = $left_sidebar[$page['left_sidebar']];
        $sidebar_name = $page['left_sidebar'];
        // $page['text'] = $page['text'];

			}
			if(isset($bottom_sidebar[$page['bottom_sidebar']])){
				$page['text'] = str_replace('<!--{bottom_sidebar}-->', $bottom_sidebar[$page['bottom_sidebar']], $page['text']);
			}
			if(isset($bottom_sidebar_tkany[$page['bottom_sidebar_tkany']])){
				$page['text'] = str_replace('<!--{bottom_sidebar_tkany}-->', $bottom_sidebar_tkany[$page['bottom_sidebar_tkany']], $page['text']);
			}

		}

		if(strpos($page['text'],'<!--{products_sravnenie_options}-->') !== FALSE){
			include_once('data/products.php');
			$products_sravnenie_options = get_products_sravnenie_options();
			$page['text'] = str_replace('<!--{products_sravnenie_options}-->', $products_sravnenie_options, $page['text']);
		}

		if(strpos($page['text'],'<!--{products_sravnenie_optionselit}-->') !== FALSE){
			include_once('data/products.php');
			$products_sravnenie_optionselit = get_products_sravnenie_optionselit();
			$page['text'] = str_replace('<!--{products_sravnenie_optionselit}-->', $products_sravnenie_optionselit, $page['text']);
		}

		if(strpos($page['text'],'<!--{cart_pillows_banner}-->') !== FALSE){
			include_once('widgets/cart_pillows_banner.php');
			$cart_pillows_banner = get_cart_pillows_banner();
			$page['text'] = str_replace('<!--{cart_pillows_banner}-->', $cart_pillows_banner, $page['text']);
		}
    if(strpos($page['text'],'<!--{pillow_carousel}-->') !== FALSE){
      include_once('widgets/carousel_pillows.php');
      $page['text'] = str_replace('<!--{pillow_carousel}-->', $get_pillow_carousel, $page['text']);
    }
    if(strpos($page['text'],'<!--{namatrasnik_carousel}-->') !== FALSE){
      include_once('widgets/carousel_namatrasniki.php');
      $page['text'] = str_replace('<!--{namatrasnik_carousel}-->', $get_pillow_carousel, $page['text']);
    }
    if(strpos($page['text'],'<!--{tracks_carousel}-->') !== FALSE){
      include_once('widgets/carousel_tracks.php');
      $page['text'] = str_replace('<!--{tracks_carousel}-->', $get_tracks_carousel, $page['text']);
    }
    if(strpos($page['text'],'<!--{news_banner}-->') !== FALSE){
      include_once('widgets/news_banner.php');
      $page['text'] = str_replace('<!--{news_banner}-->', $get_news_banner, $page['text']);
    }

    if(strpos($page['text'],'<!--{ama-compare-zone}-->') !== FALSE){
      include_once('template/comparison.php');
      include_once('data/products.php');
			$products_comparison = get_products_for_comparison($products);
			$page['text'] = str_replace('<!--{ama-compare-zone}-->', $products_comparison, $page['text']);
		}

    if(strpos($page['text'],'<!--{ama-mapsite}-->') !== FALSE){
      include_once('template/mapsite.php');
      include_once('data/products.php');
      include_once('data/categories.php');
      include_once('data/pages.php');
			$products_comparison = build_mapsite($products, $categories, $pages);
			$page['text'] = str_replace('<!--{ama-mapsite}-->', $products_comparison, $page['text']);
		}

    if(strpos($page['text'],'<!--{slider-products-main}-->') !== FALSE){
      include_once('data/products.php');
      include_once('template/widgets/main-product-slider.php');
			$html = getProductsMsl($products);
			$page['text'] = str_replace('<!--{slider-products-main}-->', $html, $page['text']);
    }
    
    if(strpos($page['text'],'<!--{slider-products-center}-->') !== FALSE){
      include_once('data/products.php');
      include_once('template/widgets/center-product-slider.php');
			$html = getProductsMcl($products);
			$page['text'] = str_replace('<!--{slider-products-center}-->', $html, $page['text']);
    }
       
    
    if(strpos($page['text'],'<!--{reviews}-->') !== FALSE){
      include_once('data/reviews.php');
      include_once('template/reviews.php');

      $html = getReviews($reviews);

			$page['text'] = str_replace('<!--{reviews}-->', $html, $page['text']);
    }
    
    if(strpos($page['text'],'<!--{filters}-->') !== FALSE){
      include_once('data/reviews.php');
      include_once('template/reviews.php');      
      
      // if(array_key_exists('tag_review', $page)){ 
        
			//   $html = getFilters($reviews, $page['tag_review']);
      // } else {
        $html = getFilters($reviews, $reviews);
      // }

			$page['text'] = str_replace('<!--{filters}-->', $html, $page['text']);
    }

    
    if(strpos($page['text'],'<!--{warning}-->') !== FALSE && $page['no_review']){
      $html = '
      <h1 class="title_textpage" style="opacity: 1;">Оставить свой отзыв</h1>
      <!--<p>В данных товаров отзывов нет. Можете добавить свой, воспользовавшись формой ниже!</p>-->';

      $page['text'] = str_replace('<!--{warning}-->', $html, $page['text']);
    } 
    

		$_tmr_mailretarg = '<script type="text/javascript">var _tmr = _tmr || []; _tmr.push({ type: "itemView", productid: "", pagetype: "other", totalvalue: "", list: "1" });</script>';
	?>
      
      <?if($page['tag_review'] || $page['all_review'] || $page['show_in_product']) {?> 	
          <style>
            .hnb_catlogsection{
              max-width: unset;
              background: transparent;
              width: 600px;
            }
          </style>
          
          <?=$page['text'];?>
      <?} else {?> 
        <?if(strpos($page['address'], 'test') === false ) {?>  

          
          <style>
            @media screen and (max-width: 600px) {
              #content{
                background: #f1f1f1 !important;
              }
            }
          </style>


          <script>
            $(document).ready(function(){
              if(window.innerWidth < 800 && $('.sr_sizes2').length > 0){
                sidebarMobTitle('<?=$sidebar_name;?>')
              }
            })
          </script>

          <div class="textPage hnb_contarea">
            <div class="hnb_catlogsection">
              <?=$sidebar?>
            </div>
            <div class="hnb_conttextright">		
              <h1 class="title_textpage"><?=$page['name'];?></h1>
              <?=$page['text'];?>
            </div>
          </div>
        <?} else {?>  
          <?=$page['text'];?>
        <? } ?>
      <? } ?>
	<?php
	}

if ($page['address']=="sizes-and-prices") {
	?>

<br><br>
<?php
 foreach ($products as $lol) {

		 $namee=$lol['img_alt'];
          $number=1;
          $id=0;
          $name_merino='Ортопедический матрас Merino (Merinos)';
      			if ($lol['address']!=NULL) {
      				if ($lol['sizes']!=false) {
                if ($lol['other_categories']!=array('snyatie-s-proizvodstva')) {

      			?>

      			<h4 align="center" class="hnb_toptable"><?php echo($lol['cycle-title']) ?></h4>
          	 	<table cellspacing="0" class="goodtable cycle-new">   <tbody>
          	      <?php
                    $uli=1;
        	foreach ($lol['sizes'] as $value ) {

            $uli++;
        if ($uli % 2 ==0) {


     ?> <tr class="striped"> 
          <td class="goodid"> <?php echo($number++);?> </td> 
          <td class="goodname"> <?php echo($lol['name']);?> </td> 
          <td class="goodsize cycle-td"> <b> <?php echo($value[0]);?> </b> 
          </td> <td class="goodprice cycle-td"> <?php echo($value[1]);?> р. </td>
                </tr> <?php /* parnie  */
            }
            else{
              ?>
              <tr class="striped hnb_mytablegray"> <td class="goodid"> <?php echo($number++);?> </td> <td class="goodname"> <?php echo($lol['name']);?> </td> <td class="goodsize cycle-td"> <b> <?php echo($value[0]);?> </b> </td> <td class="goodprice cycle-td"> <?php echo($value[1]);?> р. </td>
                </tr> <?php       /* NEparnie  */
            }
                ?>
                  <?php
                  }
                  $cycleA=str_replace("Ортопедический", "", $lol['cycle-name']);
                  $cycleLink="../" . "../" . "catalog"  . "/" .$lol['parent_address'] . "/" . $lol['address'];
                  ?>
      </tbody></table>
      <br>
    <div class="text-for-size"> <a href="<?php echo($cycleLink) ?>"> купить <?php echo($cycleA) ?> </a> можно по этой ссылке или в соответствующем разделе. <br> <br> <br> <br> </div>


    <?php
    }
    }
  }
}
      ?>

</div> <div class="clear"></div> </div>

<?php
}

if ($page['address']=='favourite') { ?>
        <div id="category" class="hnb_contarea">
          <div class="hnb_catlist trick" style="">
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
                  <li><input type="checkbox" class="matras-filtr" id="elitnye-comfort-delux"><a id="elitnye-comfort-delux" href="javascript:void(0);"> <div class="animashka-a"></div> Comfort Delux</a></li>
                  <li><input type="checkbox" class="matras-filtr" id="elitnye-Stretching"><a id="elitnye-Stretching" href="javascript:void(0);"> <div class="animashka-a"></div> Stretching</a></li>
                  <li><input type="checkbox" class="matras-filtr" id="elitnye-imperiale"><a id="elitnye-imperiale" href="javascript:void(0);"> <div class="animashka-a"></div> Imperiale</a></li>
                  <li><input type="checkbox" class="matras-filtr" id="elitnye-magnificent"><a id="elitnye-magnificent" href="javascript:void(0);"> <div class="animashka-a"></div> Magnificent</a></li>
                  <li><input type="checkbox" class="matras-filtr" id="elitnye-harmony"><a id="elitnye-harmony" href="javascript:void(0);"> <div class="animashka-a"></div> Harmony</a></li>
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
            </tbody></table>    </div>

  <div style="width:76%;" class="hnb_conttextright">
    <h1>Избранные</h1>
  <div class="category_products" style="border:none;">
<?php


foreach ($products as $prod) {

    if (in_array("favourite-".$prod['address'], $_COOKIE)){
  ?>
    <div id="<?=$prod['address']?>" class="category_product" style="min-height: 400px; margin-bottom: 20px;">
      <button style="display: none; position: absolute; top: 5px; right: 5px; z-index: 1;" class="ds_del-fav" id="<?=$prod['address']?>"></button>
      <button style="display: none; position: absolute; top: 5px; right: 5px; z-index: 1;" class="favourite-but" fav-id="<?=$prod['address']?>"></button>
      <div class="<?=$categories_filter . ' ' . $prod['address'] . ' ' . $prod['parent_address'];?>" name="<?=$tempArr[0];?>" style="display: none;"></div>
      <a href="<?=('/catalog/'.$prod['parent_address'].'/'.$prod['address'].'/');?>" class="category_product_img" title="<?=$prod['name'];?>">
        <img style="padding:unset;" src="<?=$prod['small_img'];?>" alt="<?=$prod['small_img_alt'];?>">
      </a>
    <a href="<?=('/catalog/'.$prod['parent_address'].'/'.$prod['address'].'/');?>" class="category_product_name" title="<?=$prod['name'];?>"><?=$prod['name'];?></a>
    <div style="" class="small_desc"><?=$prod['small_desc'];?></div>

      <div class="category_product_price">
        <?php
        $has_price = false;
            if($page['cat_size'] && $page['sizes']){
              $min_price = 0;
              if($prod['sizes'] && is_array($prod['sizes'])){
                foreach($prod['sizes'] as $size){
                  if($size[0] == $page['cat_size']){
                    $min_price = $size[1];
                    if(is_discount_newprice($prod, $size[0])){
                      $min_price_new = $prod['discount_koef']['prices'][$size[0]];
                      if($min_price_new && $min_price_new != $min_price){
                        $is_discount = true;
                        $min_price_old = $min_price;
                        $min_price = $min_price_new;
                      }
                    }
                  }
                }
              }
              if($min_price){
                $min_price = format_price($min_price);
                $min_price .= ' р.';
                $has_price = true;
              }
              else{
                $is_discount = false;
                $min_price = 'На заказ';
              }
            }
            else{
              if($prod['sizes'] && is_array($prod['sizes'])){
                $min_price = get_product_min_price($prod['name']);
                $min_size = $prod['sizes'][0][0];
                /*foreach($prod['sizes'] as $price){
                  if($price[1] < $min_price){
                    $min_price = $price[1];
                    $min_size = $price[0];
                  }
                }*/
              }
              else if(isset($prod['price'])){
                $min_price = get_product_min_price($prod['name']);
              }
              else{
                $min_price = 0;
              }

              $is_discount = false;
              $min_price_old = get_product_min_price_old($prod['name']);
              if($min_price_old != $min_price){
                $is_discount = true;
              }

              $min_price_ot = false;
              if($min_price){
                if($min_price < 100000 && $prod['sizes']) $min_price_ot = true;
                if($min_price >= 1000){ $min_price = intval(($min_price/1000)).' '.sprintf('%03d',$min_price%1000); }
                $min_price .= ' р.';
                $has_price = true;
              }
              else{
                 $min_price = 'Уточнить';
              }
              if($min_price_ot) $min_price = 'от '. $min_price;
            }
                  $available = true;
                  if(isset($prod['available'])){
                    if(!$prod['available']['status']){
                      $available = false;
                    }
                  }
                  if($available) {
                ?>
                цена: <?php if($is_discount) { echo('<span class="category_product_oldprice">'.format_price($min_price_old).' р.</span><br>'); } ?><span><?=$min_price;?></span>
                <div style="width: 90px; right: 0px; padding: 0px;  text-align: center;" class="ds_product_buy">
                  <a style="color: white; text-decoration: none; " href="<?=('/catalog/'.$prod['parent_address'].'/'.$prod['address'].'/');?>">
                  Подробнее
                  </a>
                </div>
                <?php
                  } else {
                    echo('<span>'.$prod['available']['msg_category'].'</span>');
                  }
                ?>
              </div>

</div>
<?php
}
}
?>


<style type="text/css">
.ds_product_buy{
  position: absolute;
    top: 0;
    right: 0;
    padding: 0 13px;
    height: 20px;
    width: 44px;
    line-height: 20px;
    font-size: 12px;
    text-transform: uppercase;
    background: #636363;
    color: #FFF;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s;
}
.ds_product_buy:hover{
      background: #333;
}
.hnb_harek{
      color: #5A5A5A;
    font-size: 12px!important;
    font-family: sans-serif;
    overflow: hidden;
    height: 85px;
    text-align: left;
    
}
#breadcrumbs {
        background-image: url(/img/breadcrumbs.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      #breadcrumbs {
        <? if($page['address'] && $page['breadcrumbs_image']){  ?>
        background: url(<?=$page['breadcrumbs_image']; }?>) !important;
        height: 220px;
      }
</style>
</div>
</div>
<div style="clear: both;"> </div>
  </div>

<?php
}
?>
