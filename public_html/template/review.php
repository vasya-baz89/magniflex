<?php
	if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}	
	//error_reporting(E_ALL);
	//ini_set('display_errors',1);	

	include_once('widgets/breadcrumbs.php');

	$stars_html = '';
	for($i = 1; $i <= $page['rate']; $i++){
		if($i <= $page['rate']){
			$stars_html .= '<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">';
		} else {
			$stars_html .= '<img class=" star3" data-id="3" src="/img/product/star_grey.svg" alt="">';
		}
	}

	include_once('reviews.php');
	include_once($_SERVER["DOCUMENT_ROOT"] . "/data/reviews.php");
?>

<div class="review-page">    
	<div class="textPage hnb_contarea">
		<div class="hnb_catlogsection">
			<?=getFilters($reviews);?>
		</div>
		<div class="hnb_conttextright">	
			<ul class="ama_reviews review-page">    
				<h1 class="review-page-title">ОТЗЫВ</h1>	                       
				<p style="border: none !important;">
					<b><?php echo $page['author'];?></b><br>
					<span><?php echo $stars_html; ?></span>     
					<p style="border: none !important;" class="review-page_text"><?php echo $page['html'];?></p>   
					                                         
					<?php if($page['images']){ ?>
						<div class="hnb_gal">
							<div class="ama_first_column ama_column">
								<?php foreach($page['images'] as $img){ ?>
									<span itemscope="" itemtype="https://schema.org/ImageObject">
										<a href="<?= $img; ?>" class="boxer relgallery" title="Caption" itemprop="contentUrl" rel="relgallery"> 
											<img src="<?= $img; ?>" alt="Изображение к отзыву">
										</a>
									</span>
								<?php } ?>						
							</div>
						</div>
					<?php } ?>	                        
					<b><?php echo $page['date'];?></b>   
				</p>
			</ul>
				
		</div>
	</div>
</div>
