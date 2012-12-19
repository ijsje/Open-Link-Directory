<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<title><![CDATA[<?php echo $settings['title'].$extra_title; ?>]]></title>
		<description><![CDATA[<?php echo ($_GET['rss'] != 0 ? $fetch_category_row[1] : $settings['description']); ?>]]></description>
		<link><?php echo ($_GET['rss'] != 0 ? openld_link('index_cat', se_index_cat($_GET['rss'])) : $settings['domain']); ?></link>
		<generator>OpenLD</generator>
		<atom:link href="<?php echo $settings['domain'].'/index.php?rss=' .$_GET['rss']; ?>" rel="self" type="application/rss+xml" />
<?php while($links = $db->fetch_assoc($link_result)){ ?>
		<item>
			<title><![CDATA[<?php echo $links['title']; ?>]]></title>
			<description><![CDATA[<?php echo $links['description']; ?>]]></description>
			<link><?php echo $links['url']; ?></link>
			<guid><?php echo $links['url']; ?></guid>
		</item>
<?php } ?>
	</channel>
</rss>