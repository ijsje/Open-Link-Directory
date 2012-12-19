			</div>
			<div class="footer">
				<p><a href="#body">top</a> - <a href="<?php echo $settings['domain'] ?>/submit.php">submit</a> - <a href="<?php echo $settings['domain'] ?>">home</a></p>
				<p class="powered">
					<?php echo POWERED_BY; ?>
					<b>
						<a href="http://openld.org">Open Link Directory</a>
					</b>
					theme by <a href="http://www.optimseo.com" title="Directory forum">OptimSEO</a>.
					<span class="generation"><?php echo $page_generation. $queries; ?></span>
				</p>
				<?php ($hook = get_hook('footer_footer')) ? eval($hook) : null; ?>
			</div>
		</div>
	</body>
</html>
