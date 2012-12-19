<?php if(isset($_REQUEST['action'])) { ?>
	<div class="openld-block openld-form">
		<h2><span><?php echo FORGOT_PASSWORD; ?></span></h2>
		<div class="openld-content">
			<form action="<?php echo $settings['domain']. "/admin_login.php"; ?>" accept-charset="utf-8" method="post">
				<div class="panel">
					<?php ($hook = get_hook('forgot_password_header')) ? eval($hook) : null; ?>
					<?php if(isset($_REQUEST['email'])) { ?>
					<table>
						<tr>
							<td>
								<?php send_password_email() ?>
							</td>
						</tr>
					</table>
					<?php } elseif(isset($_REQUEST['old_pw'])) { ?>
					<table>
						<tr>
							<td>
								<?php get_new_password() ?>
							</td>
						</tr>
					</table>
					<?php } else { ?>
					<table>
						<tr>
							<td width="100px">
								<?php echo EMAIL_LABEL; ?>
							</td>
							<td>
								<input type="text" value="" name="email" />
								<br />
							</td>
						</tr>
					</table>
					<input type="submit" value="<?php echo SEND_NEW_PASSWORD; ?>" />
					<input type="hidden" name="action" value="forgot">
					<?php } ?>
					<?php ($hook = get_hook('forgot_password_footer')) ? eval($hook) : null; ?>
				</div>
			</form>
		</div>
	</div>
<?php } else { ?>
	<div class="openld-block openld-form">
		<h2>
			<span>
				<?php echo LOGIN_TITLE; ?>
			</span>
		</h2>
		<div class="openld-content">
			<div class="panel">
				<?php echo (isset($error_login) ? $error_login : ''); ?>
				<form action="admin_login.php" accept-charset="utf-8" method="post">
					<table>
						<tr>
							<td width="100px">
								<?php echo USERNAME_LABEL; ?>
							</td>
							<td>
								<input type="text" name="username" id="start_input" />
							</td>
						</tr>
						<tr>
							<td>
								<?php echo PASSWORD_LABEL; ?>
							</td>
							<td>
								<input type="password" name="password" />
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" />
							</td>
						</tr>
					</table>
				</form>
				<a href="<?php echo $settings['domain']; ?>/admin_login.php?action=forgot"><?php echo FORGOT_PASSWORD; ?></a>
			</div>
		</div>
	</div>
<?php } ?>
