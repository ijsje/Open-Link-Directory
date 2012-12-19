<div class="openld-adblock openld-adform">
	<h2>
		<span>
			<?php echo INFORMATION_LABEL; ?>
		</span>
	</h2>
	<?php ($hook = get_hook('admin_information_header')) ? eval($hook) : null; ?>
	<div class="openld-adcontent">
		<div class="adformpanel">
			<fieldset id="admin-welcome">
				<legend>
					<span>
						<?php echo WELCOME_LABEL; ?>
					</span>
				</legend>
				<p class="adinfofield">
					<?php echo WELCOME_MESSAGE; ?>
				</p>
				<ul>
					<li>
						<?php echo MODERATE_CATEGORIES_AND_LINKS; ?>
					</li>
					<li>
						<?php echo SET_OPTIONS_AND_PREFERENCES; ?>
					</li>
					<li>
						<?php echo CONTROL_PERMISSIONS; ?>
					</li>
					<li>
						<?php echo BAN_IPS; ?>
					</li>
					<li>
						<?php echo LIMIT_SPAM; ?>
					</li>
				</ul>
			</fieldset>
		</div>
		<div class="adformpanel">
			<fieldset>
				<legend>
					<span>
						<?php echo SOFTWARE_INFO; ?>
					</span>
				</legend>
				<ol class="datalist">
					<li class="datafield">
						<strong>
							<?php echo OPENLD_VERSION_LABEL; ?>
						</strong>
						<ul>
							<li>
								<?php echo OPENLD_VERSION; ?>
							</li>
						</ul>
					</li>
					<li class="datafield">
						<strong>
							<?php echo SERVER_INFORMATION; ?>
						</strong>
						<ul>
							<li>
								<?php echo SERVER_NAME_LABEL; ?>
								<?php echo $_SERVER['SERVER_NAME']; ?>
							</li>
							<li>
								<?php echo SERVER_SOFTWARE_LABEL; ?>
								<?php echo $_SERVER['SERVER_SOFTWARE']; ?>
							</li>
							<li>
								<?php echo SERVER_PROTOCOLL_LABEL; ?>
								<?php echo $_SERVER['SERVER_PROTOCOL']; ?>
							</li>
						</ul>
					</li>
					<li class="datafield">
						<strong>
							<?php echo SCRIPT_ENVIRONMENT_LABEL; ?>
						</strong>
						<ul>
							<li>
								<?php echo OS_LABEL; ?>
								<?php echo PHP_OS; ?>
							</li>
							<li>
								<?php echo PHP_LABEL; ?>
								<?php echo phpversion(); ?> - 
								<a href="admin_information.php?action=phpinfo"><?php echo SHOW_PHP_INFO; ?></a>
							</li>
							<li>
								<?php echo ACCELERATOR_LABEL; ?>
								<?php echo $php_accelerator; ?>
							</li>
						</ul>
					</li>
					<li class="datafield">
						<strong>
							<?php echo DATABASE_LABEL; ?>
						</strong>
						<ul>
							<li>
								<?php echo $db_version; ?>
							</li>
							<li>
								<?php echo ROWS_LABEL; ?>
								<?php echo strval($total_records); ?>
							</li>
							<li>
								<?php echo SIZE_LABEL; ?>
								<?php echo $total_size; ?>
							</li>
						</ul>
					</li>
				</ol>
			</fieldset>
		</div>
		<?php ($hook = get_hook('admin_information_footer')) ? eval($hook) : null; ?>
	</div>
</div>