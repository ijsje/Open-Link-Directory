<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="description" content="<?php echo $meta_description; ?>" />
		<title><?php echo $head_title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo $settings['domain']. "/themes/" .$settings['template_path']. "style.css"; ?>" />
		<!--[if lte IE 7]>
			<link rel="stylesheet" type="text/css" href="<?php echo $settings['domain']. "/themes/" .$settings['template_path']. "ie.css"; ?>" />
		<![endif]-->
		<script type="text/javascript" src="include/scriptlayer/common.js"></script>
		<?php ($hook = get_hook('header_head_footer')) ? eval($hook) : null; ?>
	</head>
	<body>
	<div class="headerbg">
		<div class="header">
			<h1><a href="<?php echo $settings['domain']; ?>/index.php"><?php echo $settings['title']; ?></a><?php ($hook = get_hook('header_after_title')) ? eval($hook) : null; ?></h1>
			<div class="topmenu">
				<ul>
					<?php ($hook = get_hook('navigation_menu_header')) ? eval($hook) : null; ?>
					<li><a href="<?php echo $settings['domain']; ?>/index.php"><?php echo HOME_LABEL; ?></a></li>
					<li><a href="<?php echo $submit_id; ?>"><?php echo SUBMIT_LINK_LABEL; ?></a></li>
					<li><a href="<?php echo $suggest_id; ?>"><?php echo SUGGEST_CATEGORY_LABEL; ?></a></li>
					<li><a href="<?php echo $settings['domain']; ?>/search.php">Advanced <?php echo SEARCH_LABEL; ?></a></li>
					<?php ($hook = get_hook('navigation_menu_footer')) ? eval($hook) : null; ?>
				</ul>
			</div>
	<div class="openld-page openld-user" >
	<div id="openldbb-isolate">
		<div class="openld-common">
			<div id="openldbb-description">
				<?php echo $settings['description']; ?>
			</div>
		</div>
	</div>
	<div id="openldbb-main" class="openld-main">