<div class="openld-adblock openld-adform">
	<h2>
		<span>
			<?php echo CENSORING; ?>
		</span>
	</h2>
	<div class="openld-adcontent">
		<div class="adformpanel">
			<form action="admin_words.php" accept-charset="utf-8" method="post">
				<fieldset id="admin-welcome">
					<legend>
						<span>
							<?php echo BAN_WORDS; ?>
						</span>
					</legend>
					<p class="buttoned hasheading"> 
						<span class="adlabel">
							<?php echo NEW_CENSORED_WORD; ?>
						</span>
						<br />
						<span class="adinput astable">
							<label>
								<?php echo CENSORED_WORD; ?> 
								<input type="text" name="new_censor_word" size="24" maxlength="60" />
							</label> 
							<label>
								<?php echo REPLACE_WITH; ?> 
								<input type="text" name="new_replace_with" size="24" maxlength="60" />
							</label>
							<label>
								<?php echo HARD_BAN; ?> 
								<input type="checkbox" name="if_total_ban" value="" />
							</label>
						</span>
						<?php echo $error->get_warning('new_censor_word_warning'); ?>
						<span class="adsubmit">
							<input type="submit" class="button" name="add_word" value="<?php echo ADD_LABEL; ?>" />
						</span>
					</p>
				</fieldset>
			</form>
		</div>
		<div class="adformpanel">
			<p>
				<?php echo $error->get_warning('censor_word_warning'); ?>
			</p>
			<fieldset>
				<legend>
					<span>
						<?php echo EDIT_DELETE_BANNED_WORDS; ?>
					</span>
				</legend>
				<?php ($hook = get_hook('admin_words_before_sql_if')) ? eval($hook) : null; ?>
				<?php if($db->num_rows($result) > 0) { ?>
				<?php while($rows = $db->fetch_assoc($result)) { ?>
				<form action="admin_words.php" accept-charset="utf-8" method="post">
					<div class="fieldgroup">
						<p class="buttoned hasheading">
							<span class="adlabel">
								<?php echo ACTION; ?>
							</span>
							<br />
							<span class="adinput astable">
								<?php ($hook = get_hook('admin_banned_words_cell_header')) ? eval($hook) : null; ?>
								<label>
									<?php echo CENSORED_WORD; ?>
									<input type="text" name="edit_censored_word" value="<?php echo openld_htmlspecialchars($rows['spam_word']); ?>" size="24" maxlength="60" />
								</label>
								<label>
									<?php echo REPLACE_WITH; ?>
									<input type="text" name="edit_replace_word" value="<?php echo openld_htmlspecialchars($rows['replace_word']); ?>" size="24" maxlength="60" />
								</label>
								<label>
									<?php echo HARD_BAN; ?>
									<input type="checkbox" name="if_total_ban" <?php echo ($rows['ban_type'] == 'T') ? 'checked="CHECKED" ' : ''; ?> />
								</label>
								<?php ($hook = get_hook('admin_banned_words_cell_footer')) ? eval($hook) : null; ?>
							</span>
							<span class="adsubmit">
								<input type="hidden" name="id" value="<?php echo $rows['id']; ?>" />
								<input type="submit" class="button" name="update" value="<?php echo UPDATE; ?>" />
								<input type="submit" class="button" name="remove_word" value="<?php echo REMOVE; ?>" />
							</span>
						</p>
					</div>
				</form>
				<?php }} else echo NO_BANNED_WORDS; ?>
				<?php ($hook = get_hook('admin_words_after_sql_if')) ? eval($hook) : null; ?>
			</fieldset>
		</div>
	</div>
</div>