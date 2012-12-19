<div id="openldbb-admain" class="openldbb-admain">
	<div id="openldbb-adnav" class="openld-adblock">
		<h2>
			<span>
				<?php echo ADMIN_MENU; ?>
			</span>
		</h2>
		<div class="openld-adcontent">
			<h3>
				<span>
					<?php echo DIRECTORY_MANAGEMENT; ?>
				</span>
			</h3>
			<ul class="adnav-standard">
				<li<?php echo (basename($_SERVER['PHP_SELF'])=='admin_accept_links.php' ? ' class="li-first isactive"' : ' class="li-first"'); ?>>
					<a href="admin_accept_links.php"><?php echo ACCEPT_LINKS_TITLE; ?></a>
				</li>
				<li<?php echo (basename($_SERVER['PHP_SELF'])=='admin_accept_categories.php' ? ' class="isactive"' : ''); ?>>
					<a href="admin_accept_categories.php"><?php echo ACCEPT_CATEGORIES_LABEL; ?></a>
				</li>
				<li<?php echo (basename($_SERVER['PHP_SELF'])=='admin_browse.php' ? ' class="isactive"' : ''); ?>>
					<a href="admin_browse.php"><?php echo BROWSE; ?></a>
				</li>
				<li<?php echo (basename($_SERVER['PHP_SELF'])=='admin_links.php' ? ' class="isactive"' : ''); ?>>
					<a href="admin_links.php"><?php echo LINKS_LABEL; ?></a>
				</li>
				<li<?php echo (basename($_SERVER['PHP_SELF'])=='admin_categories.php' ? ' class="isactive"' : ''); ?>>
					<a href="admin_categories.php"><?php echo CATEGORIES_LABEL; ?></a>
				</li>
				<?php ($hook = get_hook('admin_menu_directory_footer')) ? eval($hook) : null; ?>
			</ul>
			<h3>
				<span>
					<?php echo GENERAL_LABEL; ?>
				</span>
			</h3>
			<ul class="adnav-standard">
				<li<?php echo (basename($_SERVER['PHP_SELF'])=='admin_information.php' ? ' class="li-first isactive"' : ' class="li-first"'); ?>>
					<a href="admin_information.php"><?php echo INFORMATION_LABEL; ?></a>
				</li>
				<li<?php echo (basename($_SERVER['PHP_SELF'])=='admin_options.php' ? ' class="isactive"' : ''); ?>>
					<a href="admin_options.php"><?php echo OPTION_LABEL; ?></a>
				</li>
				<li<?php echo (basename($_SERVER['PHP_SELF'])=='admin_words.php' ? ' class="isactive"' : ''); ?>>
					<a href="admin_words.php"><?php echo CENSORING; ?></a>
				</li>
				<li<?php echo (basename($_SERVER['PHP_SELF'])=='admin_bans.php' ? ' class="isactive"' : ''); ?>>
					<a href="admin_bans.php"><?php echo IP_BANNING; ?></a>
				</li>
				<li<?php echo (basename($_SERVER['PHP_SELF'])=='admin_template.php' ? ' class="isactive"' : ''); ?>>
					<a href="admin_template.php"><?php echo TEMPLATES_TITLE; ?></a>
				</li>
				<li<?php echo (basename($_SERVER['PHP_SELF'])=='admin_extensions.php' ? ' class="isactive"' : ''); ?>>
					<a href="admin_extensions.php"><?php echo EXTENSIONS_LABEL; ?></a>
				</li>
				<?php ($hook = get_hook('admin_menu_general_footer')) ? eval($hook) : null; ?>
			</ul>
			<h3>
				<span>
					<?php echo PLUGINS_LABEL; ?>
				</span>
			</h3>
			<ul class="adnav-standard">
				<?php
				if($directory = opendir(OPENLD_ROOT."plugins/"))
				{
					while (false !== ($file = readdir($directory)))
					{
						if(openld_is_dir(OPENLD_ROOT."plugins/". $file))
						{
							?>
							<li<?php echo ((isset($_GET['plugin']) && $_GET['plugin']==$file) ? ' class="isactive"' : ''); ?>>
								<a href="admin_plugins.php?plugin=<?php echo $file; ?>"><?php echo str_replace("_", " ", $file); ?></a>
							</li>
							<?php
						}
					}
					closedir($directory);
				}
				else
					echo "Error: Couldn't load plugins";
				?>
			</ul>
			<?php ($hook = get_hook('admin_menu_footer')) ? eval($hook) : null; ?>
		</div>
	</div>