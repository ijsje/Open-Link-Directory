<div class="openld-block openld-form">
	<h2><span><?php echo ECF_CONTACT_LABEL; ?></span></h2>
		<div class="openld-content">
			<?php
			if(!empty($_POST))
			{
				$email_value = check_if_null($_POST['email']);
				$subject_value = check_if_null($_POST['subject']);
				$message_value = check_if_null($_POST['message']);

				$error->check_email($email_value);
				$error->check_title($subject_value, 255, 1, true);
				$error->check_description($message_value, 1024, 5, true);
				//captcha check

				if($_SESSION['captcha'] !== openld_hash($_POST['captcha']))
					$error->set_warning('captcha_warning', WRONG_CAPTCHA);

				if($error->transform_error())
				{
					mail($settings['email'], $subject_value, $message_value, "From: " .$email_value);
					echo ECF_MAIL_SENT_TO_ADMIN;
				}
				else
				{
					?><form action="index.php?display=contact" accept-charset="utf-8" method="post"><div class="panel">
						<table>
							<tr>
								<td width="100px"><?php echo ECF_CONTACT_MAIL_FIELD; ?></td>
								<td>
									<input type="text" name="email" value="<?php echo $email_value; ?>"><br />
									<?php echo $error->get_warning("email_warning"); ?>
								</td>
							</tr>
							<tr>
								<td><?php echo TITLE_LABEL; ?></td>
								<td><input type="text" name="subject" value="<?php echo $subject_value; ?>"><br />
								<?php echo $error->get_warning("title_warning"); ?></td></tr>
								<tr><td><?php echo ECF_MESSAGE_LABEL; ?></td><td><textarea name="message" rows="15" cols="75"><?php echo $message_value; ?></textarea><br /><?php echo $error->get_warning("description_warning"); ?><br /></td></tr>
								<tr><td><?php echo CAPTCHA_LABEL; ?></td><td>
								<img src="<?php echo $settings['domain']; ?>/include/captcha.php">
								<br />
								<input type="text" value="" name="captcha" />
								<br />
								<?php echo $error->get_warning('captcha_warning'); ?></td>
								</tr>
							</table><input type="submit"/></div></form>
					<?php }} else { ?>
						<form action="index.php?display=contact" accept-charset="utf-8" method="post"><div class="panel"><table>
						<tr><td width="100px"><?php echo EMAIL_LABEL; ?></td><td><input type="text" name="email"></td></tr>
						<tr><td><?php echo TITLE_LABEL; ?></td><td><input type="text" name="subject"></td></tr>
						<tr><td><?php echo ECF_MESSAGE_LABEL; ?></td><td><textarea name="message" rows="15" cols="75"></textarea><br /></td></tr><tr><td>Captcha</td><td>
						<img src="<?php echo $settings['domain']; ?>/include/captcha.php">
						<br />
						<input type="text" value="" name="captcha" /></td>
						</tr>
						</table>
						<input type="submit"/>
						</div></form>
					<?php } ?>
				</div>
			</div>