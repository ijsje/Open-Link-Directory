				</div>
				<div id="openldbb-about" class="openld-block">
					<div class="openld-content openld-mainfoot">
						<p>
							<?php echo POWERED_BY; ?>
							<strong>
								<a href="http://openld.org">Open Link Directory</a>
							</strong>
						</p>
						<p>
							<?php echo $page_generation. $queries; ?>
						</p>
						<?php ($hook = get_hook('footer_footer')) ? eval($hook) : null; ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
