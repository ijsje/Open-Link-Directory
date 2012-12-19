					</div>
						<div id="footer">
							&copy; <?php echo date('Y'); ?> <?php echo $head_title; ?> &nbsp;<?php echo POWERED_BY; ?> <a href="http://openld.org">Open Link Directory</a>&nbsp; | Theme by <a href="http://wp-blogger.com/">WP-Blogger.com</a> &nbsp;| <?php if($settings['hide_admin_button'] == 'N') { ?><a href="<?php echo $settings['domain']; ?>/admin_information.php"><?php echo ADMIN_LABEL; ?></a><?php } ?>
							<?php ($hook = get_hook('footer_footer')) ? eval($hook) : null; ?>
					</div>
				</div>
			</div>
		</div>
  </body>
</html>
