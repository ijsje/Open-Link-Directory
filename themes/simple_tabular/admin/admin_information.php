<h2>
	<?php echo INFORMATION_LABEL; ?>
</h2>
<?php ($hook = get_hook('admin_information_header')) ? eval($hook) : null; ?>
<table>
	<tr>
		<td>
			<h3><?php echo WELCOME_LABEL; ?></h3>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo WELCOME_MESSAGE; ?>
		</td>
	</tr>
	<tr>
		<td>
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
		</td>
	</tr>
</table>
<table>
	<tr>
		<td>
			<?php echo SOFTWARE_INFO; ?>
			</ br>
			<ol>
				<li>
					<?php echo OPENLD_VERSION_LABEL; ?>: <?php echo OPENLD_VERSION; ?>
				</li>
				<li>
					<?php echo SERVER_INFORMATION; ?>
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
				<li>
					<?php echo SCRIPT_ENVIRONMENT_LABEL; ?>
					<ul>
						<li>
							<?php echo OS_LABEL; ?>
							<?php echo PHP_OS; ?>
						</li>
						<li>
							<?php echo PHP_LABEL; ?>
							<?php echo phpversion(); ?> - <a href="admin_information.php?action=phpinfo"><?php echo SHOW_PHP_INFO; ?></a>
						</li>
						<li>
							<?php echo ACCELERATOR_LABEL; ?>
							<?php echo $php_accelerator; ?>
						</li>
					</ul>
				</li>
				<li>
					<?php echo DATABASE_LABEL; ?>
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
			<?php ($hook = get_hook('admin_information_footer')) ? eval($hook) : null; ?>
		</td>
	</tr>
</table>
