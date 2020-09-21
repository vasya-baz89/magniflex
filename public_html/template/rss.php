<?php
	echo('<?xml version="1.0" encoding="utf-8"?><rss version="2.0">');
?>
<channel>
<title>Новости Magniflex</title>
<link>https://www.magniflex.ru</link>
<description></description>
<lastBuildDate><?php echo(date('D, j M Y G:i:s O'));?></lastBuildDate>
<ttl>60</ttl>
<?php 
	$last_news = get_last_news($news, 4);
	if($last_news && is_array($last_news)){
		foreach($last_news as $el){
		?>
		<item>
		<title><?=$el['name'];?></title>
		<link><?=($domain.'/news/'.$el['address'].'/');?></link>
		<description><?=(remake($el['text']));?></description>
		<pubDate><?php echo(date('D, j M Y G:i:s O', strtotime($el['date'])));?></pubDate>
		</item>
		<?php
		}
	}
?>
</channel>
</rss>