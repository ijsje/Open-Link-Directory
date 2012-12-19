<?php if(isset($_REQUEST['action'])) { ?>
<h2>
	<?php echo FORGOT_PASSWORD; ?>
</h2>
<form action="<?php echo $settings['domain']. "/admin_login.php"; ?>" accept-charset="utf-8" method="post">
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
			<td>
				<?php echo EMAIL_LABEL; ?>
			</td>
			<td>
				<input type="text" value="" name="email" />
			</td>
		</tr>
	</table>
	<input type="submit" value="<?php echo SEND_NEW_PASSWORD; ?>" />
	<input type="hidden" name="action" value="forgot">
	<?php } ($hook = get_hook('forgot_password_footer')) ? eval($hook) : null; ?>
</form>
<?php } else { ?>
<h2>
	<?php echo LOGIN_TITLE; ?>
</h2>
<?php echo (isset($error_login) ? $error_login : ''); ?>
<form action="admin_login.php" accept-charset="utf-8" method="post">
	<table>
		<tr>
			<td width="100px">
				<?php echo USERNAME_LABEL; ?>
			</td>
			<td>
				<input type="text" name="username" />
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
<?php } ?>
