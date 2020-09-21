 <?php
	if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}

	/* breadcrumbs - виджет хлебных крошек */
	/*
		get_breadcrumbs: (реализована своя версия в /data/ для каждого типа элементов)
			$page - текущий елемент из /data/ (новость, товар, страница)
			return value - масив из названий и ссылок (el[0] - название, el[1] - ссылка)
		$breadcrumbs_subclass - дополнительный класс(html) для разных типов страниц для стилей из /data/
	*/

	if((function_exists('get_breadcrumbs') || isset($get_breadcrumbs) || isset($get_breadcrumbs_shops)) && $page && is_array($page)){
		if(is_callable($get_breadcrumbs_shops)){
			$breadcrumbs = $get_breadcrumbs_shops($page);
		}
		else if(is_callable($get_breadcrumbs)){
			$breadcrumbs = $get_breadcrumbs($page['address'], $products, $categories, $pages);
		}
		else{
			$breadcrumbs = get_breadcrumbs($page);
		}
		if($breadcrumbs && is_array($breadcrumbs)){			
		?>
			<div id="breadcrumbs" <?php echo(($breadcrumbs_subclass)?('class="'.$breadcrumbs_subclass.'"'):('')); ?>>
				<div class="breadcrumbs_block">
					<ul>
						<?php foreach($breadcrumbs as $el){   ?>
							<li>		
								<a href="<?=$el[1];?>" itemprop="url" title="<?=$el[0];?>"><span itemprop="title"><?=$el[0];?></span></a>
							</li>
						<?php }?>
					</ul>
				</div>
			</div>
			<div id="scroll_content"></div>
		<?php
		}
	}

?>