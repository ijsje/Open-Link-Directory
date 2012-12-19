			</div>
			<div class="footer">
				<p>
					<?php echo POWERED_BY; ?> 
					<b>
						<a href="http://openld.org">Open Link Directory</a>
					</b>
				</p>
				<p>
					<?php echo PAGE_GENERATED_IN. strval(round(microtime_float() - $time_start, 2)). SECONDS; ?>
				</p>
			</div>
		</div>
	</body>
</html>
