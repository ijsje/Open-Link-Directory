<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="description" content="<?php echo $meta_description ?>" />
		<title>
			<?php echo $head_title; ?>
		</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $settings['domain']. "/themes/" .$settings['template_path']. "style.css"; ?>" />
		<script type="text/javascript" src="include/scriptlayer/common.js"></script>
		<?php ($hook = get_hook('header_head_footer')) ? eval($hook) : null; ?>
	</head>
	<body>
		<div class="page" >
			<div class="header">
				<h1>
					<?php echo $settings['title']; ?>
					<?php ($hook = get_hook('header_after_title')) ? eval($hook) : null; ?>
				</h1>
				<p>
					<?php echo $settings['description']; ?>
				</p>
				<ul class="menublock">
					<?php ($hook = get_hook('navigation_menu_header')) ? eval($hook) : null; ?>
					<?php if($settings['hide_admin_button'] == 'N') { ?><li>
						<a href="<?php echo $settings['domain'] ?>/admin_information.php"><?php echo ADMIN_LABEL; ?></a>
					</li><?php } ?>
					<li>
						<a href="<?php echo $settings['domain'] ?>/index.php"><?php echo HOME_LABEL; ?></a>
					</li>
					<li>
						<a href="<?php echo $submit_id ?>"><?php echo SUBMIT_LINK_LABEL; ?></a>
					</li>
					<li>
						<a href="<?php echo $suggest_id ?>"><?php echo SUGGEST_CATEGORY_LABEL; ?></a>
					</li>
					<li>
						<a href="<?php echo $settings['domain'] ?>/search.php"><?php echo SEARCH_LABEL; ?></a>
					</li>
					<?php ($hook = get_hook('navigation_menu_footer')) ? eval($hook) : null; ?>
				</ul>
			</div>
			<div class="body">
