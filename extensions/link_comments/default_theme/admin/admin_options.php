			<div class="adformpanel">
				<fieldset>
					<legend>
						<span>
							<?php echo LC_ADMIN_MENU_LINK; ?>
						</span>
					</legend>
					<div class="fieldgroup">
						<p>
							<label class="adlabel">
								<?php echo LC_ALLOW_MORE_COMMENTS; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="allow_comments" <?php echo checkbox_checked($settings['allow_comments']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo LC_USE_COMMENT_TITLES; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="use_comment_titles" <?php echo checkbox_checked($settings['use_comment_titles']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo LC_USE_COMMENT_RATING; ?>
							</label>
							<br />
							<span class="adinput">
								<select name="use_comment_rating">
									<option value="N"<?php echo (($settings['use_comment_rating']  == 'N') ? ' selected="selected"' : ""); ?>>
										<?php echo LC_NO_COMMENT_RATING; ?>
									</option>
									<option value="-2"<?php echo (($settings['use_comment_rating']  == '-2') ? ' selected="selected"' : ""); ?>>
										<?php echo LC_REPORT_COMMENTS; ?>
									</option>
									<option value="-1"<?php echo (($settings['use_comment_rating']  == '-1') ? ' selected="selected"' : ""); ?>>
										<?php echo LC_THUMB_DOWN_COMMENTS; ?>
									</option>
									<option value="1"<?php echo (($settings['use_comment_rating']  == '1') ? ' selected="selected"' : ""); ?>>
										<?php echo LC_THUMB_UP_COMMENTS; ?>
									</option>
									<option value="1-2"<?php echo (($settings['use_comment_rating']  == '1-2') ? ' selected="selected"' : ""); ?>>
										<?php echo LC_THUMB_UP_AND_REPORT_COMMENTS; ?>
									</option>
									<option value="1-1"<?php echo (($settings['use_comment_rating']  == '1-1') ? ' selected="selected"' : ""); ?>>
										<?php echo LC_THUMB_UP_AND_DOWN; ?>
									</option>
									<option value="5"<?php echo (($settings['use_comment_rating']  == '5') ? ' selected="selected"' : ""); ?>>
										<?php echo LC_RATE_COMMENTS_BETWEEN_1_AND_5; ?>
									</option>
									<option value="5-2"<?php echo (($settings['use_comment_rating']  == '5-2') ? ' selected="selected"' : ""); ?>>
										<?php echo LC_REPORT_AND_RATE_COMMENTS_BETWEEN_1_AND_5; ?>
									</option>
									<option value="10"<?php echo (($settings['use_comment_rating']  == '10') ? ' selected="selected"' : ""); ?>>
										<?php echo LC_RATE_COMMENTS_BETWEEN_1_AND_10; ?>
									</option>
									<option value="10-2"<?php echo (($settings['use_comment_rating']  == '10-2') ? ' selected="selected"' : ""); ?>>
										<?php echo LC_REPORT_AND_RATE_COMMENTS_BETWEEN_1_AND_10; ?>
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
								<?php echo LC_DISPLAY_UNACCEPTED; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="display_unaccepted_comments" <?php echo checkbox_checked($settings['display_unaccepted_comments']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo LC_ANTISPAM_CAPTCHA; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="use_antispam" <?php echo checkbox_checked($settings['use_antispam']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo LC_ALLOW_LINKS; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="links_within_comments" <?php echo checkbox_checked($settings['links_within_comments']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo LC_MAXIMUM_DESCRIPTION; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="max_comment_description" value="<?php echo $settings['max_comment_description']; ?>" size="50" maxlength="255" />
								<br />
								<em>
									<?php echo $GLOBALS['error']->get_warning('max_comment_description_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo LC_COMMENTS_PER_PAGE; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="comments_per_page" value="<?php echo $settings['comments_per_page']; ?>" size="50" maxlength="255" />
								<br />
								<em>
									<?php echo $GLOBALS['error']->get_warning('comments_per_page_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo LC_SORT_COMMENTS_BY; ?>
							</label>
							<br />
							<span class="adinput">
								<select name="sort_comments_by">
									<?php if($settings['use_comment_titles'] == 'Y') { ?>
									<option value="title"<?php echo (($settings['comments_sorted_by']  == 'title') ? ' selected="selected"' : ""); ?>>
										<?php echo TITLE_LABEL; ?>
									</option>
									<option value="title DESC"<?php echo (($settings['comments_sorted_by']  == 'title DESC') ? ' selected="selected"' : ""); ?>>
										<?php echo TITLE_REVERSED; ?>
									</option>
									<?php } ?>
									<option value="description"<?php echo (($settings['comments_sorted_by']  == 'description') ? ' selected="selected"' : ""); ?>>
										<?php echo DESCRIPTION_LABEL; ?>
									</option>
									<option value="description DESC"<?php echo (($settings['comments_sorted_by']  == 'description DESC') ? ' selected="selected"' : ""); ?>>
										<?php echo DESCRIPTION_REVERSED; ?>
									</option>
									<option value="id"<?php echo (($settings['comments_sorted_by']  == 'id') ? ' selected="selected"' : ""); ?>>
										<?php echo DATE_LABEL; ?>
									</option>
									<option value="id DESC"<?php echo (($settings['comments_sorted_by']  == 'id DESC') ? ' selected="selected"' : ""); ?>>
										<?php echo DATE_REVERSED; ?>
									</option>
								</select>
								<br />
							</span>
						</p>
					</div>
				</fieldset>
			</div>