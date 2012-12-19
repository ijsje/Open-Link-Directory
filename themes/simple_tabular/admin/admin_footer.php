			</div>
			<div class="footer">
				<p>
					<?php echo POWERED_BY; ?>
					<b>
						<a href="http://openld.org">Open Link Directory</a>
					</b>
				</p>
				<p>
					<?php echo $page_generation. $queries; ?>
				</p>
				<?php ($hook = get_hook('admin_footer')) ? eval($hook) : null; ?>
			</div>
		</div>
	</body>
</html>
