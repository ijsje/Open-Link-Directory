<tr>
	<td><?php echo CAPTCHA_LABEL; ?></td>
	<td>
		<img src="<?php echo $settings['domain']; ?>/include/captcha.php"><br />
		<input type="text" value="" name="captcha" /><br />
		<?php echo $error->get_warning('captcha_warning'); ?>
	</td>
</tr>