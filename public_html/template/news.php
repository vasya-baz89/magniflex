<?php
	if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}
	
	$_tmr_mailretarg = '<script type="text/javascript">var _tmr = _tmr || []; _tmr.push({ type: "itemView", productid: "", pagetype: "other", totalvalue: "", list: "1" });</script>';
	
	if($url_arr['path'] == '/news/'){
	
		$page = array(
			'address' => 'news',
			
		);
		
		/* меняем функцию get_breadcrumbs */
		unset($get_breadcrumbs);
		$get_breadcrumbs = $get_breadcrumbs_all_news;
		$breadcrumbs_subclass = $breadcrumbs_subclass_all_news;
		
		include_once('widgets/breadcrumbs.php');
		?>
		<div class="news_all">
			<a href="/news/rss/" title="rss" target="_blank"><img alt="RSS Magniflex" src="data:image/gif;base64,R0lGODlhEAAQAOYAAPSRNut/MvqcOfudOviZOfz18P/58+6FNOh5MeZ/M/aUN/KNNeZ0L+mFNfCJNO6FM/748uNuLv7y5tpeKud4L+yKNuF4MeyBMuBqLep9MeN5MuN5MfmdQeiDNN5lLP3x5t5vL99xMNxhK/3ateF0MOuJNeiFNf738uV0LuJ2MeeBM95wMOV8MuiCNPzChOqHNd1uL+R7MuV9MumINvqsXvrOp/ivae6RTPSmZ+6aZPnIm+l+OfS9mPieRO+NQe6rif7s2vmlUu6ylfG3l/u5d+B1RfOkZ++dZPSsc/zZtfetaf3fwf7x5vKjZuaLYPi/jvabRPKTQvSygPupUvqiRv7mzvfDmfi0deyWY/ehUOiJVffUvvWpaPzjzfrDj+qJSfXAmPW/mf3lzfmfRfvm2PnXv+JwNvq+g/uvXuR8R/qzavrTs/eXOPmaOfWSN/GLNeqwh////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAAAAAALAAAAAAQABAAAAfpgAVwFhsxMgkqHQ0vJRUzcII7KBQZFw8OCwAKbG0CHIMoXzxgTZianAIDBCYbFEdxsBA6UKiqbg0xGTdWax+wBkSpBG5vLTKWpjZAsC7DbwcJCQ84EF1ePW0jsFfPASwqDlywcQZoA0lxED4BCBodmVlnEuQ0br5hCAwpDadtVNpMoiCJc4JBBBIvNi2p4mLMPCkBTsTRgiFECTZqYIlx8yROGQRb4vzwAKJCmykG4tR4YyQOGQZD4ggRAWNGqiBKuuXAEiGNkyITVsDh4OwAO4MYPIiYYAYSHBMNWiRgoSEFiRAgYAgtEAgAOw==" border="0" align="right"></a>
			

			<?php
				$last_news = get_last_news($news, 0);
				if($last_news && is_array($last_news)){
				?>
				<style>
					#breadcrumbs{
						display: none!important;
					}
					.ama_visual{
						width: 100vw!important;
						position: relative!important;
						margin-left: -50vw!important;
						left: 50%!important;
					}
					.ama_news{
						margin-top:50px!important;
					}

				</style>
				<div class="ama_visual one">
					<img src="/img/NUVOLA-rettangolare.jpg" alt="" class="ama_visual_img">
					<div class="ama_visual_copy">
						<h1 class="ama_visual_copy_title">Новости компании Magniflex</h1>
						 <p class="ama_visual_copy_subtitle">Актуальные новости компании Magniflex</p> 
					</div>
				</div>
					
					<ul class="footer_newslist ama_news">
					<?php
						foreach($last_news as $el){
						?>
							<article class="magazine-article-preview is-inview">
								<?if($el['preview_image']) {?><a href="/news/<?=$el['address'];?>/" class="magazine-article-preview__image">
									<img src="<?=$el['preview_image'];?>" alt="<?=$el['name'];?>">
								</a><?}?>
								<a href="/news/<?=$el['address'];?>/" class="magazine-article-preview__name"><?=$el['name'];?></a>

								<?if($el['desc']) {?>
									<div class="magazine-article-preview__descr">
										<?=$el['desc'];?>
									</div>
								<?}?>
								
								<div class="magazine-article-preview__datewrap">
									<span class="magazine-article-preview__date"><time itemprop="startDate" datetime="<?=text_date_to_iso8601($el['date']);?>"><?=$el['date'];?></time></span>
									<a href="/news/<?=$el['address'];?>/" class="magazine-article-preview__more">Подробнее</a>
								</div>
							</article>
						<?php
						}
					?>
					</ul>
					<div class="clear"></div>
				<?php
				}
			?>
		</div>
		<?php
	}
	else{
		include_once('widgets/breadcrumbs.php');
		?>
		
		<div class="news_container">
			<div class="news_left">
				<h4>Новости</h4>
				<?php
					$last_news = get_last_news($news, 3);
					if($last_news && is_array($last_news)){
					?>
						<ul class="footer_newslist">
						<?php
							foreach($last_news as $el){
							?>
								<li itemscope itemtype="http://schema.org/Event">
									<a href="/news/<?=$el['address'];?>/"><time itemprop="startDate" datetime="<?=text_date_to_iso8601($el['date']);?>"><?=$el['date'];?></time></a><br>
									<a class="news_span" href="/news/<?=$el['address'];?>/"><span itemprop="name"><?=$el['name'];?></span></a>
									<div style="display:none" itemprop="location" itemscope itemtype="http://schema.org/Place">
										<span itemprop="name"><?=$el['name'];?></span>
										<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
										  <span itemprop="addressLocality">Москва</span>
										  <span itemprop="telephone">+7 (495) 989-11-32</span>
										</div>
									</div>
								</li>
							<?php
							}
						?>
						</ul>
						
					<?php
					}
				?>
				<br/>
				<a href="/news/" title="Все новости Magniflex" class="btn_big">Все новости</a>
				<div class="clear"></div>
			</div>
			<div class="news_detail" itemscope itemtype="http://schema.org/NewsArticle">
				<span class="news-date-time"><?=$page['date'];?></span>
				<h1 itemprop="name"><?=((isset($page['name_h1']))?($page['name_h1']):($page['name']));?></h1>
				<div itemprop="description">
					<?=$page['text'];?>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<?php
	}
?>