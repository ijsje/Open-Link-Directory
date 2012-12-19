<div class="openld-block openld-form">
	<h2><span><?php echo GB_GUESTBOOK_LABEL; ?></span></h2>
	<div class="openld-content">
		<?php if($db->num_rows($comments_sql) > 0) { ?>
		<table cellspacing="0" summary="">
			<thead>
				<tr>
					<th class="tcl" scope="col"><?php echo GB_COMMENTS_LABEL; ?></th>
				</tr>
			</thead>
			<tbody class="hasicon">
				<?php while($com = $db->fetch_assoc($comments_sql_limit)) { ?>
				<tr>
					<td class="tcl">
						<?php echo ($settings['guestbook_use_comment_titles'] == 'Y') ? '<b>' .openld_htmlspecialchars($com['title']). '</b><br />' : ''; ?>
						<?php echo openld_htmlspecialchars($com['description']); ?>
						<br />
						<?php echo NAME_LABEL; ?>: <?php echo openld_htmlspecialchars($com['name']); ?>
						<br />
						<?php echo DATE_LABEL; ?>: <?php echo $com['date_submitted']; ?>
						<br />
						<?php echo openld_htmlspecialchars($com['description']); ?>
						<?php echo $vh->rate_code($com['id'], $com['ip']); ?>
						<hr />
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<?php echo $pages_string; ?>
		<br />
		<?php } else { ?>
		<table cellspacing="0" summary="">
			<thead>
				<tr>
					<th class="tcl" scope="col"><?php echo GB_COMMENTS_LABEL; ?></th>
				</tr>
			</thead>
			<tbody class="hasicon">
				<tr>
					<td class="tcl"><?php echo GB_NO_COMMENTS_LABEL; ?></td>
				</tr>
			</tbody>
		</table>
		<br />
		<?php } if($settings['guestbook_allow_comments'] == 'Y' && $submit_success == '') { ?>
		<form action="<?php echo $settings['domain']; ?>/index.php?display=guestbook" accept-charset="utf-8" method="post">
			<table cellspacing="0" summary=""><thead><tr><th class="tcl" colspan="2"><?php echo GB_LEAVE_A_COMMENT; ?></th></tr></thead><tbody>
				<tr>
					<td>
						<?php if($settings['guestbook_use_comment_titles'] == 'Y') { ?>
						<?php echo TITLE_LABEL; ?><br />
						<input type="text" value="<?php echo (isset($_REQUEST['com_title']) ? openld_htmlspecialchars($_REQUEST['com_title']) : ''); ?>" name="com_title" id="start_input" /><br /><?php echo $error->get_warning('title_warning'); ?><br /><br />
						<?php } ?>
						<?php echo NAME_LABEL; ?><br />
						<input type="text" value="<?php echo (isset($_REQUEST['com_name']) ? openld_htmlspecialchars($_REQUEST['com_name']) : ''); ?>" name="com_name" id="start_input" /><br /><?php echo $error->get_warning('name_warning'); ?><br /><br />
						<?php echo GB_COMMENTS_LABEL; ?><br />
						<textarea name="com_description" rows="15" cols="75"><?php echo (isset($_REQUEST['com_description']) ? openld_htmlspecialchars($_REQUEST['com_description']) : ''); ?></textarea><br /><?php echo $error->get_warning('description_warning'); ?>
						<?php echo $settings['guestbook_use_antispam'] == 'Y' ? '<br /><br />Verification<br /><img src="' .$settings['domain']. '/include/captcha.php"><br /><input type="text" value="" name="captcha" /><br />' .$error->get_warning('captcha_warning') : ''; ?>
					</td>
				</tr>
			</table>
			<input type="hidden" name="link_id" value="<?php echo $_REQUEST['comments']; ?>" />
			<input type="submit" value="Send" />
		</form>
		<?php } elseif($submit_success != '') { ?>
		<?php echo $submit_success; ?>
		<?php } else { echo GB_COMMENTS_NOT_TAKEN; } ?>
	</div>
</div>