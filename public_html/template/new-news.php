<?php
	if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}
	
	$_tmr_mailretarg = '<script type="text/javascript">var _tmr = _tmr || []; _tmr.push({ type: "itemView", productid: "", pagetype: "other", totalvalue: "", list: "1" });</script>';
	
	if($url_arr['path'] == '/new-news/'){
	
		$page = array(
			'address' => 'new-news',
			
		);
		
		/* меняем функцию get_breadcrumbs */
		unset($get_breadcrumbs);
		$get_breadcrumbs = $get_breadcrumbs_all_news;
		$breadcrumbs_subclass = $breadcrumbs_subclass_all_news;
		
		include_once('widgets/breadcrumbs.php');
		?>
		<div>
			<div class="ama_news_block_area">
				<div class="ama_news_block_new">
					<img src="/img/mini-logo.png">
					<p class="ama_news_block_text">о Magniflex</p>
					<div class="ama_news_line"></div>
					<div class="ama_news_block_buttons">
						<button class="ama_news_block_button_prev"><span class="next_arrow"></span></button>
						<button class="ama_news_block_button_prev"><span class="prev_arrow"></span></button>
						
						
					</div>
				</div>
			</div>
		<?php
		$last_news = get_last_news($news, 0);
		if($last_news && is_array($last_news)){
		?>
			<div class="single_news_row">
			<?php
			foreach($last_news as $el){
			?>
				<div class="ama_single_news">
					<img src="<?=$el['img'];?>" alt="<?=(($el['img_alt'])?$el['img_alt']:$el['name']);?>">
					<div class="under_news_text"><p><?=$el['text_mini'];?></p></div>					
				</div>
			<?php
			}
			?>
			</div>
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