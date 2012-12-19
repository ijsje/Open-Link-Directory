			<div class="adformpanel">
				<fieldset>
					<legend>
						<span>
							<?php echo GB_GUESTBOOK_COMMENTS; ?>
						</span>
					</legend>
					<div class="fieldgroup">
						<p>
							<label class="adlabel">
								<?php echo GB_ALLOW_MORE_COMMENTS; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="guestbook_allow_comments" <?php echo checkbox_checked($settings['guestbook_allow_comments']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo GB_USE_COMMENT_TITLES?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="guestbook_use_comment_titles" <?php echo checkbox_checked($settings['guestbook_use_comment_titles']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo GB_USE_COMMENT_RATING; ?>
							</label>
							<br />
							<span class="adinput">
								<select name="guestbook_use_comment_rating">
									<option value="N"<?php echo (($settings['guestbook_use_comment_rating']  == 'N') ? ' selected="selected"' : ""); ?>>
										<?php echo GB_NO_COMMENT_RATING; ?>
									</option>
									<option value="-2"<?php echo (($settings['guestbook_use_comment_rating']  == '-2') ? ' selected="selected"' : ""); ?>>
										<?php echo GB_NO_COMMENT_RATING; ?>
									</option>
									<option value="-1"<?php echo (($settings['guestbook_use_comment_rating']  == '-1') ? ' selected="selected"' : ""); ?>>
										<?php echo GB_THUMB_DOWN_COMMENTS; ?>
									</option>
									<option value="1"<?php echo (($settings['guestbook_use_comment_rating']  == '1') ? ' selected="selected"' : ""); ?>>
										<?php echo GB_THUMB_UP_COMMENTS; ?>
									</option>
									<option value="1-2"<?php echo (($settings['guestbook_use_comment_rating']  == '1-2') ? ' selected="selected"' : ""); ?>>
										<?php echo GB_THUMB_UP_AND_REPORT_COMMENTS; ?>
									</option>
									<option value="1-1"<?php echo (($settings['guestbook_use_comment_rating']  == '1-1') ? ' selected="selected"' : ""); ?>>
										<?php echo GB_THUMB_UP_AND_DOWN; ?>
									</option>
									<option value="5"<?php echo (($settings['guestbook_use_comment_rating']  == '5') ? ' selected="selected"' : ""); ?>>
										<?php echo GB_RATE_COMMENTS_BETWEEN_1_AND_5; ?>
									</option>
									<option value="5-2"<?php echo (($settings['guestbook_use_comment_rating']  == '5-2') ? ' selected="selected"' : ""); ?>>
										<?php echo GB_RATE_AND_REPORT_COMMENTS_BETWEEN_1_AND_5; ?>
									</option>
									<option value="10"<?php echo (($settings['guestbook_use_comment_rating']  == '10') ? ' selected="selected"' : ""); ?>>
										<?php echo GB_RATE_COMMENTS_BETWEEN_1_AND_10; ?>
									</option>
									<option value="10-2"<?php echo (($settings['guestbook_use_comment_rating']  == '10-2') ? ' selected="selected"' : ""); ?>>
										<?php echo GB_RATE_AND_REPORT_COMMENTS_BETWEEN_1_AND_10; ?>
									</option>
								</select>
								<br />
								<em>
									<?php echo $GLOBALS['error']->get_warning('use_comment_rating_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo GB_DISPLAY_UNACCEPTED; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="guestbook_display_unaccepted_comments" <?php echo checkbox_checked($settings['guestbook_display_unaccepted_comments']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo GB_ANTISPAM_CAPTCHA_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="guestbook_use_antispam" <?php echo checkbox_checked($settings['guestbook_use_antispam']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo GB_ALLOW_LINKS; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="guestbook_links_within_comments" <?php echo checkbox_checked($settings['guestbook_links_within_comments']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo GB_MAXIMUM_DESCRIPTION; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="guestbook_max_comment_description" value="<?php echo $settings['guestbook_max_comment_description']; ?>" size="50" maxlength="255" />
								<br />
								<em>
									<?php echo $GLOBALS['error']->get_warning('guestbook_max_comment_description_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo GB_COMMENTS_PER_PAGE; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="guestbook_comments_per_page" value="<?php echo $settings['guestbook_comments_per_page']; ?>" size="50" maxlength="255" />
								<br />
								<em>
									<?php echo $GLOBALS['error']->get_warning('guestbook_comments_per_page_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo GB_SORT_COMMENTS_BY; ?>
							</label>
							<br />
							<span class="adinput">
								<select name="guestbook_comments_sorted_by">
									<?php if($settings['guestbook_use_comment_titles'] == 'Y') { ?>
									<option value="title"<?php echo (($settings['guestbook_comments_sorted_by']  == 'title') ? ' selected="selected"' : ""); ?>>
										<?php echo TITLE_LABEL; ?>
									</option>
									<option value="title DESC"<?php echo (($settings['guestbook_comments_sorted_by']  == 'title DESC') ? ' selected="selected"' : ""); ?>>
										<?php echo TITLE_REVERSED; ?>
									</option>
									<?php } ?>
									<option value="description"<?php echo (($settings['guestbook_comments_sorted_by']  == 'description') ? ' selected="selected"' : ""); ?>>
										<?php echo DESCRIPTION_LABEL; ?>
									</option>
									<option value="description DESC"<?php echo (($settings['guestbook_comments_sorted_by']  == 'description DESC') ? ' selected="selected"' : ""); ?>>
										<?php echo DESCRIPTION_REVERSED; ?>
									</option>
									<option value="id"<?php echo (($settings['guestbook_comments_sorted_by']  == 'id') ? ' selected="selected"' : ""); ?>>
										<?php echo DATE_LABEL; ?>
									</option>
									<option value="id DESC"<?php echo (($settings['guestbook_comments_sorted_by']  == 'id DESC') ? ' selected="selected"' : ""); ?>>
										<?php echo DATE_REVERSED; ?>
									</option>
								</select>
								<br />
							</span>
						</p>
					</div>
				</fieldset>
			</div>