<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>
			<?php echo $settings['title']; ?>
		</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $settings['domain']. "/themes/" .$settings['admin_template_path']. "style.css"; ?>" />
		<!--[if lte IE 7]>
			<link rel="stylesheet" type="text/css" href="<?php echo $settings['domain']. "/themes/" .$settings['admin_template_path']. "ie.css"; ?>" />
		<![endif]-->
		<!--[if IE 6]>
			<style>
				.openld-adform fieldset p {
					position: static;
				}
			</style>
		<![endif]-->
		<script type="text/javascript" src="include/scriptlayer/common.js"></script>
		<?php ($hook = get_hook('admin_header_head_footer')) ? eval($hook) : null; ?>
	</head>
	<body>
	<div class="openld-page">
		<div id="openldbb-isolate">
			<div class="openld-common">
				<h1 id="openldbb-title">
					<span>
						<?php echo $settings['title']; ?>
					</span>
				</h1>
				<div id="openldbb-description">
					<?php echo $settings['description']; ?>
				</div>
				<div id="openldbb-navlinks" class="openld-block">
					<div class="openld-content">
						<ul>
							<li>
								<span>
										<a href="<?php echo $settings['domain']; ?>/index.php"><?php echo HOME_LABEL; ?></a>
								</span>
							</li>
							<?php if(isset($_SESSION['user_name']) && ($settings['admin_username'] == $_SESSION['user_name'])) { ?>
							<li>
								<span>
									<a href="<?php echo $settings['domain']; ?>/admin_logout.php"><?php echo LOG_OUT; ?></a>
								</span>
							</li>
							<?php } ?>
							<?php ($hook = get_hook('admin_header_navbar_footer')) ? eval($hook) : null; ?>
						</ul>
					</div>
				</div>
			</div>
			<div id="openldbb-main" class="openld-main">
