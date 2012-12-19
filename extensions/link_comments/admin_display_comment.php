<div class="openld-adblock openld-adform">
	<h2>
		<span>
			Edit Link Comment
		</span>
	</h2>
	<form method="post" accept-charset="utf-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="openld-adcontent">
			<fieldset id="admin-welcome">
				<legend>
					<span>
						Comment
					</span>
				</legend>
				<div class="fieldgroup">
					<?php if($settings['use_comment_titles'] == 'Y') { ?>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo TITLE_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="edit_comment_title" value="<?php echo openld_htmlspecialchars($result[0]); ?>" size="35" maxlength="80" id="start_input"/>
							<br />
							<em>
								<?php //echo $error->get_warning('title_warning'); 
								?>
							</em>
						</span>
					</p>
					<?php } ?>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo DESCRIPTION_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<textarea name="edit_comment_description" rows="15" cols="75"><?php echo openld_htmlspecialchars($result[1]); ?></textarea>
							<br />
							<em>
								<?php //echo $error->get_warning('description_warning'); 
								?>
							</em>
						</span>
					</p>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo NAME_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="edit_comment_name" value="<?php echo openld_htmlspecialchars($result[2]); ?>" size="35" maxlength="80" id="start_input"/>
							<br />
							<em>
								<?php //echo $error->get_warning('name_warning'); 
								?>
							</em>
						</span>
					</p>
					<?php if($settings['use_comment_rating'] != '0' && 1+1==3) { ?>
					<p class="buttoned">
						<label class="adlabel">
							Rating
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="edit_comment_rating" value="<?php echo openld_htmlspecialchars($result[3]); ?>" size="35" maxlength="80" id="start_input"/>
							<br />
							<em>
								<?php //echo $error->get_warning('rating_warning'); 
								?>
							</em>
						</span>
					</p>
					<?php } ?>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo IP_NUMBER; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="edit_comment_ip" value="<?php echo openld_htmlspecialchars($result[3]); ?>" size="35" maxlength="80" id="start_input"/>
							<br />
							<em>
								<?php //echo $error->get_warning('ip_warning'); 
								?>
							</em>
						</span>
					</p>
					<!-- Link parent selector like move_array_select() may be added later -->
					<p class="buttoned">
						<label class="adlabel">
							Link id
						</label>
						<br />
							<span class="adinput">
							<input type="text" name="edit_comment_link_id" value="<?php echo openld_htmlspecialchars($result[4]); ?>" size="35" maxlength="20" id="start_input"/>
							<br />
							<em>
								<?php //echo $error->get_warning('link_id_warning'); 
								?>
							</em>
							<br />
						</span>
						<br />
					</p>
				</div>
				<span class="adsubmit">
					<input type="hidden" name="extension" value="link_comments" />
					<input type="hidden" name="edit_comment_sql" value="<?php echo $_REQUEST['edit_comment']; ?>" />
					<input type="submit" class="button" value="<?php echo EDIT_LABEL; ?>" />
				</span>
			</fieldset>
		</div>
	</form>
</div>