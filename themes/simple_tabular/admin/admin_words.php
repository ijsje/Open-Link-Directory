<h2>
	<?php echo CENSORING; ?>
</h2>
<form action="admin_words.php" accept-charset="utf-8" method="post">
	<h3><?php echo BAN_WORDS; ?></h3>
	<table>
		<tr>
			<td>
				<?php echo NEW_CENSORED_WORD; ?>
			</td>
			<td>
				<?php echo CENSORED_WORD; ?></ br>
				<input type="text" name="new_censor_word" size="24" maxlength="60" />
			</td>
			<td>
				<?php echo REPLACE_WITH; ?>
				</ br>
				<input type="text" name="new_replace_with" size="24" maxlength="60" />
			</td>
			<td>
				<?php echo HARD_BAN; ?>
				</ br>
				<input type="checkbox" name="if_total_ban" value="" />
			</td>
		</tr>
	</table>
	<?php echo $error->get_warning('new_censor_word_warning'); ?>
	<input type="submit" class="button" name="add_word" value="<?php echo ADD_LABEL; ?>" />
</form>
<h3><?php echo EDIT_DELETE_BANNED_WORDS; ?><h3>
<p>
	<?php echo $error->get_warning('censor_word_warning'); ?>
</p>
<?php ($hook = get_hook('admin_words_before_sql_if')) ? eval($hook) : null; ?>
<?php if($db->num_rows($result) > 0) { ?>
<?php while($rows = $db->fetch_assoc($result)) { ?>
<form action="admin_words.php" accept-charset="utf-8" method="post">
	<table>
		<tr>
			<td>
				<?php echo ACTION; ?>
			</td>
			<td>
				<?php ($hook = get_hook('admin_banned_words_cell_header')) ? eval($hook) : null; ?>
				<?php echo CENSORED_WORD; ?>
				<input type="text" name="edit_censored_word" value="<?php echo openld_htmlspecialchars($rows['spam_word']); ?>" size="24" maxlength="60" />
				<?php echo REPLACE_WITH; ?>
				<input type="text" name="edit_replace_word" value="<?php echo openld_htmlspecialchars($rows['replace_word']); ?>" size="24" maxlength="60" />
				<?php echo HARD_BAN; ?>
				<input type="checkbox" name="if_total_ban" <?php echo ($rows['ban_type'] == 'T') ? 'checked="CHECKED" ' : ''; ?> />
				<?php ($hook = get_hook('admin_banned_words_cell_footer')) ? eval($hook) : null; ?>
			</td>
		</tr>
	</table>
	<input type="hidden" name="id" value="<?php echo $rows['id']; ?>" />
	<input type="submit" class="button" name="update" value="<?php echo UPDATE; ?>" />
	<input type="submit" class="button" name="remove_word" value="<?php echo REMOVE; ?>" />
</form>
<?php }} else echo NO_BANNED_WORDS; ?>
<?php ($hook = get_hook('admin_words_after_sql_if')) ? eval($hook) : null; ?>
