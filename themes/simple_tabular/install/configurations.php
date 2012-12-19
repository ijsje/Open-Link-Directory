<h2>
	<?php echo INSTALLATION; ?>
</h2>
	<ul class="left-menu">
		<li >
			1. <?php echo LICENSE; ?>
		</li>
		<li>
			2. <?php echo CHMOD_LABEL; ?>
		</li>
		<li class="isactive">
			3. <?php echo CONFIGURATIONS; ?>
		</li>
		<li>
			4. <?php echo FINISH; ?>
		</li>
	</ul>
<div class="right-content">
	<form action="index.php" accept-charset="utf-8" method="POST">
		<h2>
			3. <?php echo CONFIGURATIONS; ?>
		</h2>
		<table>
			<tr>
				<td>
					<?php echo OVERVIEW_TABLE_DATABASE; ?>
				</td>
				<td>
					<?php if(have_db()) { ?>
					<select name="db_extension">
						<?php if(function_exists('mysql_connect')) { ?>
						<option value="mysql">
							MySQL Standard
						</option>
						<option value="mysql_innodb">
							MySQL Standard (InnoDB)
						</option>
						<php? } if(function_exists('mysqli_connect')) { ?>
						<option value="mysqli">
							MySQL Improved
						</option>
						<option value="mysqli_innodb">
							MySQL Improved (InnoDB)
						</option>
						<?php } if(function_exists('pg_connect')) { ?>
						<option value="pgsql">
							PostgreSQL
						</option>
						<?php } if(function_exists('sqlite_open')) { ?>
						<option value="sqlite">
							SQL Lite
						</option>
						<?php } ?>
					</select>
					<?php } else error("OpenLD works with the following databases: MySQL, PostgreSQL or SQL Lite. None of these were found. You must install one of these before you can run OpenLD."); ?>
					<?php echo $error->get_warning('ext_error'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo OVERVIEW_TABLE_HOST; ?>
				</td>
				<td>
					<input type="text" name="db_host" value="<?php echo isset($_POST['db_host']) ? $_POST['db_host'] : 'localhost'; ?>" />
					<?php echo $error->get_warning('host_error'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo OVERVIEW_TABLE_NAME; ?>
				</td>
				<td>
					<input type="text" name="db_name" value="<?php echo isset($_POST['db_name']) ? $_POST['db_name'] : ''; ?>" />
					<?php echo $error->get_warning('name_error'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo OVERVIEW_TABLE_USERNAME; ?>
				</td>
				<td>
					<input type="text" name="db_username" value="<?php echo isset($_POST['db_username']) ? $_POST['db_username'] : ''; ?>" />
					<?php echo $error->get_warning('username_error'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo OVERVIEW_TABLE_PASSWORD; ?>
				</td>
				<td>
					<input type="text" name="db_password" value="<?php echo isset($_POST['db_password']) ? $_POST['db_password'] : ''; ?>" />
					<?php echo $error->get_warning('password_error'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo OVERVIEW_TABLE_PREFIX; ?>
				</td>
				<td>
					<input type="textfield" name="db_prefix" value="<?php echo isset($_POST['db_prefix']) ? $_POST['db_prefix'] : ''; ?>" />
					<?php echo $error->get_warning('prefix_error'); ?>
				</td>
			</tr>
		</table>
		<h2>
			<?php echo SET_YOUR_OPTIONS; ?>
		</h2>
		<table>
			<tr>
				<td>
					<?php echo ADMIN_USERNAME; ?>
				</td>
				<td>
					<input type="text" name="admin_username" value="<?php echo isset($_POST['admin_username']) ? $_POST['admin_username'] : ''; ?>" />
					<?php echo $error->get_warning('username_warning'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo ADMIN_PASSWORD; ?>
				</td>
				<td>
					<input type="text" name="admin_password" value="<?php echo isset($_POST['admin_password']) ? $_POST['admin_password'] : ''; ?>" />
					<?php echo $error->get_warning('password_warning'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo ADMIN_EMAIL; ?>
				</td>
				<td>
					<input type="text" name="admin_email" value="<?php echo isset($_POST['admin_email']) ? $_POST['admin_email'] : ''; ?>" />
					<?php echo $error->get_warning('email_warning'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo SITE_TITLE; ?>
				</td>
				<td>
					<input type="text" name="site_title" value="<?php echo isset($_POST['site_title']) ? $_POST['site_title'] : ''; ?>" />
					<?php echo $error->get_warning('title_warning'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo SITE_DESCRIPTION; ?>
				</td>
				<td>
					<input type="text" name="site_description" value="<?php echo isset($_POST['site_description']) ? $_POST['site_description'] : ''; ?>" />
					<?php echo $error->get_warning('description_warning'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo SITE_DOMAIN; ?>
				</td>
				<td>
					<input type="text" name="site_domain" value="<?php echo isset($_POST['site_domain']) ? $_POST['site_domain'] : ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://'). preg_replace('/:80$/', '', $_SERVER['HTTP_HOST']).str_replace('\\', '/', dirname(dirname($_SERVER['SCRIPT_NAME']))); ?>" />
					<?php echo $error->get_warning('url_warning'); ?>
				</td>
			</tr>
		</table>
		<input type="submit" name="configurations" value=<?php echo CONTINUE_; ?> />
	</form>
</div>
