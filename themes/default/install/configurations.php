<form action="index.php" accept-charset="utf-8" method="POST">
	<div id="openldbb-admain" class="openldbb-admain">
		<div id="openldbb-adnav" class="openld-adblock">
			<h2>
				<span>
					<?php echo INSTALLATION; ?>
				</span>
			</h2>
			<div class="openld-adcontent">
				<ul class="adnav-standard">
					<li class="li-first isactive">
						1. <?php echo LICENSE; ?>
					</li>
					<li class="isactive">
						2. <?php echo CHMOD_LABEL; ?>
					</li>
					<li>
						<b>3. <?php echo CONFIGURATIONS; ?></b>
					</li>
					<li class="isactive">
						4. <?php echo FINISH; ?>
					</li>
				</ul>
			</div>
		</div>
		<div class="openld-adblock openld-adform">
			<h2>
				<span>
					3. <?php echo CONFIGURATIONS; ?>
				</span>
			</h2>
			<div class="openld-adcontent">
				<div class="adformpanel">
					<p class="buttoned hasheading">
					</p>
					<br />
					<fieldset id="admin-welcome">
						<legend>
							<span>
							<?php echo LOCAL_SETTINGS; ?>
							</span>
						</legend>
						<div class="fieldgroup">
							<p>
								<label class="adlabel">
									<?php echo OVERVIEW_TABLE_DATABASE; ?>
								</label>
								<span class="adinput">
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
									<em>
										<?php echo $error->get_warning('ext_error'); ?>
									</em>
								</span>
							</p>
							<p>
								<label class="adlabel">
									<?php echo OVERVIEW_TABLE_HOST; ?>
								</label>
								<span class="adinput">
									<input type="text" name="db_host" value="<?php echo isset($_POST['db_host']) ? $_POST['db_host'] : 'localhost'; ?>" id="start_input" />
									<em>
										<?php echo $error->get_warning('host_error'); ?>
									</em>
								</span>
							</p>
							<p>
								<label class="adlabel">
									<?php echo OVERVIEW_TABLE_NAME; ?>
								</label>
								<span class="adinput">
									<input type="text" name="db_name" value="<?php echo isset($_POST['db_name']) ? $_POST['db_name'] : ''; ?>" />
									<em>
										<?php echo $error->get_warning('name_error'); ?>
									</em>
								</span>
							</p>
							<p>
								<label class="adlabel">
									<?php echo OVERVIEW_TABLE_USERNAME; ?>
								</label>
								<span class="adinput">
									<input type="text" name="db_username" value="<?php echo isset($_POST['db_username']) ? $_POST['db_username'] : ''; ?>" />
									<em>
										<?php echo $error->get_warning('username_error'); ?>
									</em>
								</span>
							</p>
							<p>
								<label class="adlabel">
									<?php echo OVERVIEW_TABLE_PASSWORD; ?>
								</label>
								<span class="adinput">
									<input type="text" name="db_password" value="<?php echo isset($_POST['db_password']) ? $_POST['db_password'] : ''; ?>" />
									<em>
										<?php echo $error->get_warning('password_error'); ?>
									</em>
								</span>
							</p>
							<p>
								<label class="adlabel">
									<?php echo OVERVIEW_TABLE_PREFIX; ?>
								</label>
								<span class="adinput">
									<input type="textfield" name="db_prefix" value="<?php echo isset($_POST['db_prefix']) ? $_POST['db_prefix'] : ''; ?>" />
									<em>
										<?php echo $error->get_warning('prefix_error'); ?>
									</em>
								</span>
							</p>
						</div>
					</fieldset>
				</div>
				<br/>
				<div class="adformpanel">
					<fieldset id="admin-welcome">
						<legend>
							<span>
								<?php echo SET_YOUR_OPTIONS; ?>
							</span>
						</legend>
						<div class="fieldgroup">
							<p>
								<label class="adlabel">
									<?php echo ADMIN_USERNAME; ?>
								</label>
								<span class="adinput">
									<input type="text" name="admin_username" value="<?php echo isset($_POST['admin_username']) ? $_POST['admin_username'] : ''; ?>" />
									<em>
										<?php echo $error->get_warning('username_warning'); ?>
									</em>
								</span>
							</p>
							<p>
								<label class="adlabel">
									<?php echo ADMIN_PASSWORD; ?>
								</label>
								<span class="adinput">
									<input type="text" name="admin_password" value="<?php echo isset($_POST['admin_password']) ? $_POST['admin_password'] : ''; ?>" />
									<em>
										<?php echo $error->get_warning('password_warning'); ?>
									</em>
								</span>
							</p>
							<p>
								<label class="adlabel">
									<?php echo ADMIN_EMAIL; ?>
								</label>
								<span class="adinput">
									<input type="text" name="admin_email" value="<?php echo isset($_POST['admin_email']) ? $_POST['admin_email'] : ''; ?>" />
									<em>
										<?php echo $error->get_warning('email_warning'); ?>
									</em>
								</span>
							</p>
							<p>
								<label class="adlabel">
									<?php echo SITE_TITLE; ?>
								</label>
								<span class="adinput">
									<input type="text" name="site_title" value="<?php echo isset($_POST['site_title']) ? $_POST['site_title'] : ''; ?>" />
									<em>
										<?php echo $error->get_warning('title_warning'); ?>
									</em>
								</span>
							</p>
							<p>
								<label class="adlabel">
									<?php echo SITE_DESCRIPTION; ?>
								</label>
								<span class="adinput">
									<input type="text" name="site_description" value="<?php echo isset($_POST['site_description']) ? $_POST['site_description'] : ''; ?>" />
									<em>
										<?php echo $error->get_warning('description_warning'); ?>
									</em>
								</span>
							</p>
							<p>
								<label class="adlabel">
									<?php echo SITE_DOMAIN; ?>
								</label>
								<span class="adinput">
									<input type="text" name="site_domain" value="<?php echo isset($_POST['site_domain']) ? $_POST['site_domain'] : ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://'). preg_replace('/:80$/', '', $_SERVER['HTTP_HOST']).str_replace('\\', '/', dirname(dirname($_SERVER['SCRIPT_NAME']))); ?>" />
									<em>
										<?php echo $error->get_warning('url_warning'); ?>
									</em>
								</span>
							</p>
						</div>
					</fieldset>
				</div>
				<br />
				<input type="submit" name="configurations" value=<?php echo CONTINUE_; ?> />
			</div>
		</div>
	</div>
</form>
