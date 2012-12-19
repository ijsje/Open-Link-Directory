<?php if(isset($_GET['action']) || isset($back_to_form)) { ?>
	<form method="post" accept-charset="utf-8" action="admin_options.php">
		<div class="openld-adblock openld-adform">
			<h2>
				<span>
					<?php echo CHANGE_PASSWORD_LABEL; ?>
				</span>
			</h2>
			<div class="openld-adcontent">
				<div class="adformpanel">
					<fieldset id="admin-welcome">
						<legend>
							<span>
								<?php echo ENTER_NEW_PASSWORD; ?>
							</span>
						</legend>
						<div class="fieldgroup">
							<p>
								<label class="adlabel">
									<?php echo NEW_PASSWORD; ?>
								</label>
								<br />
								<span class="adinput">
									<input type="password" name="password" size="16" maxlength="16" id="start_input" />
									<em>
										<?php echo $error->get_warning('password_warning'); ?>
									</em>
								</span>
							</p>
							<p>
								<label class="adlabel">
									<?php echo RETYPE_PASSWORD; ?>
								</label>
								<br />
								<span class="adinput">
									<input type="password" name="confirm_new_password" size="16" maxlength="16" />
									<br />
									<em>
										<?php echo $error->get_warning('retype_warning'); ?>
									</em>
								</span>
							</p>
						</div>
					</fieldset>
				</div>
				<p class="adformsubmit">
					<input type="submit" class="button" name="save" value="<?php echo SAVE_PASSWORD_BUTTON; ?>" />
				</p>
			</div>
		</div>
	</form>
<?php } else { ?>
<form action="admin_options.php" accept-charset="utf-8" method="post">
	<div class="openld-adblock openld-adform">
		<h2>
			<span>
				<?php echo OPTION_LABEL; ?>
			</span>
		</h2>
		<div class="openld-adcontent">
			<?php ($hook = get_hook('admin_options_header')) ? eval($hook) : null; ?>
			<div class="adformpanel">
				<fieldset id="admin-welcome">
					<legend>
						<span>
							<?php echo ADMIN_LABEL; ?>
						</span>
					</legend>
					<div class="fieldgroup">
						<p>
							<label class="adlabel">
								<?php echo ADMIN_USERNAME_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="admin_username" value="<?php echo openld_htmlspecialchars($settings['admin_username']); ?>" size="50" maxlength="255"  id="start_input" />
								<br />
								<em>
									<?php echo $error->get_warning('username_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo ADMIN_PASSWORD_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<a href="admin_options.php?action=change_password"><?php echo CHANGE_PASSWORD_LABEL; ?></a>
								<?php echo (isset($_POST['password']) ? PASSWORD_HAS_BEEN_CHANGED : ''); ?>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo ADMIN_EMAIL_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="admin_email" size="50" maxlength="255" value="<?php echo openld_htmlspecialchars($settings['email']); ?>" />
								<br />
								<em>
									<?php echo $error->get_warning('email_warning'); ?>
								</em>
							</span>
						</p>
					</div>
				</fieldset>
			</div>
			<div class="adformpanel">
				<fieldset>
					<legend>
						<span>
							<?php echo CENTRAL_FEATURES; ?>
						</span>
					</legend>
					<div class="fieldgroup">
						<p>
							<label class="adlabel">
								<?php echo TITLE_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="admin_title" value="<?php echo openld_htmlspecialchars($settings['title']); ?>" size="50" maxlength="255" />
								<br />
								<em>
									<?php echo $error->get_warning('title_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo DESCRIPTION_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<textarea name="site_description" rows="10" cols="75"><?php echo openld_htmlspecialchars($settings['description']); ?></textarea>
								<br />
								<em>
									<?php echo $error->get_warning('description_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo DOMAIN_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="domain_name_or_path" value="<?php echo openld_htmlspecialchars($settings['domain']); ?>" size="50" maxlength="255" />
								<br />
								<em>
									<?php echo $error->get_warning('url_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo LANGUAGE_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<select name="language">
								<?php if($directory = opendir(OPENLD_ROOT. 'lang/')) { ?>
								<?php while(false !== ($file = readdir($directory))) { ?>
								<?php if(openld_is_dir(OPENLD_ROOT. 'lang/'. $file))  { ?>
									<option value="<?php echo $file. '"' .(($settings['language'] == $file) ? ' selected="selected"' : '')  ?>>
									<?php echo $file; ?></option>
								<?php }} closedir($directory); ?>								
								<?php } else error("Error: Couldn't load languages"); ?>
								</select>
								<br />
								<em>
									<?php echo $error->get_warning('language_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo SEF_REWRITE_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<select name="rewrite_scheme">
								<?php if($directory = opendir(OPENLD_ROOT. 'include/seflayer/')) { ?>
								<?php while(false !== ($file = readdir($directory))) { ?>
								<?php if(openld_is_file(OPENLD_ROOT. 'include/seflayer/'. $file))  { ?>
									<option value="<?php echo substr($file, 0, -4); ?>"
									<?php echo (($settings['rewrite_layer'] == substr($file, 0, -4)) ? 'selected="selected"' : ''); ?>>
									<?php echo str_replace('_', ' ', substr($file, 0, -4)); ?>
									</option>
								<?php }} closedir($directory); ?>
								<?php } else error("Error: Couldn't load sef layers"); ?>
								</select>	
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo DISABLE_EXTENSIONS_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="disable_extensions" <?php echo checkbox_checked($settings['disable_extensions']); ?> /> 
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo ENABLE_GZIP_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="gzip" <?php echo checkbox_checked($settings['gzip']); ?> /> 
								<br />
								<em>
									<?php echo (!extension_loaded('zlib') ? ZLIB_NOT_ENABLED : ''); ?>
								</em>
							</span>
						</p>
					</div>
				</fieldset>
			</div>
			<div class="adformpanel">
				<fieldset>
					<legend>
						<span>
							<?php echo DISPLAY_LABEL; ?>
						</span>
					</legend>
					<div class="fieldgroup">
						<p>
							<label class="adlabel">
								<?php echo LINKS_SORT_BY_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<select name="links_sorted_by">
									<option value="title"<?php echo (($settings['links_sorting_by']  == 'title') ? ' selected="selected"' : ""); ?>>
										<?php echo TITLE_LABEL; ?>
									</option>
									<option value="title DESC"<?php echo (($settings['links_sorting_by']  == 'title DESC') ? ' selected="selected"' : ""); ?>>
										<?php echo TITLE_REVERSED; ?>
									</option>
									<option value="description"<?php echo (($settings['links_sorting_by']  == 'description') ? ' selected="selected"' : ""); ?>>
										<?php echo DESCRIPTION_LABEL; ?>
									</option>
									<option value="description DESC"<?php echo (($settings['links_sorting_by']  == 'description DESC') ? ' selected="selected"' : ""); ?>>
										<?php echo DESCRIPTION_REVERSED; ?>
									</option>
									<option value="id"<?php echo (($settings['links_sorting_by']  == 'id') ? ' selected="selected"' : "") ?>>
										<?php echo DATE_LABEL; ?>
									</option>
									<option value="id DESC"<?php echo (($settings['links_sorting_by']  == 'id DESC') ? ' selected="selected"' : "") ?>>
										<?php echo DATE_REVERSED; ?>
									</option>
									<option value="reciprocal_url"<?php echo (($settings['links_sorting_by']  == 'reciprocal_url') ? ' selected="selected"' : "") ?>>
										<?php echo RECIPROCAL_URL; ?>
									</option>
									<option value="reciprocal_url DESC"<?php echo (($settings['links_sorting_by']  == 'reciprocal_url DESC') ? ' selected="selected"' : "") ?>>
										<?php echo RECIPROCAL_URL_DESC; ?>
									</option>
									<option value="url"<?php echo (($settings['links_sorting_by']  == 'url') ? ' selected="selected"' : "") ?>>
										<?php echo URL; ?>
									</option>
									<option value="url DESC"<?php echo (($settings['links_sorting_by']  == 'url DESC') ? ' selected="selected"' : "") ?>>
										<?php echo URL_REVERSED; ?>
									</option>
									<?php ($hook = get_hook('links_sort_options_footer')) ? eval($hook) : null; ?>
								</select>
								<br />
								<em>
									<?php echo $error->get_warning('links_sorted_by_valid'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo CATEGORIES_SORT_BY_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<select name="categories_sorted_by">
									<option value="title"<?php echo (($settings['categories_sorting_by']  == 'title') ? ' selected="selected"' : ""); ?>>
										<?php echo TITLE_LABEL; ?>
									</option>
									<option value="title DESC"<?php echo (($settings['categories_sorting_by']  == 'title DESC') ? ' selected="selected"' : ""); ?>>
										<?php echo TITLE_REVERSED; ?>
									</option>
									<option value="description"<?php echo (($settings['categories_sorting_by']  == 'description') ? ' selected="selected"' : ""); ?>>
										<?php echo DESCRIPTION_LABEL; ?>
									</option>
									<option value="description DESC"<?php echo (($settings['categories_sorting_by']  == 'description DESC') ? ' selected="selected"' : ""); ?>>
										<?php echo DESCRIPTION_REVERSED; ?>
									</option>
									<option value="id"<?php echo (($settings['categories_sorting_by']  == 'id') ? ' selected="selected"' : ""); ?>>
										<?php echo DATE_LABEL; ?>
									</option>
									<option value="id DESC"<?php echo (($settings['categories_sorting_by']  == 'id DESC') ? ' selected="selected"' : ""); ?>>
										<?php echo DATE_REVERSED; ?>
									</option>
								</select>
								<br />
								<em>
									<?php echo $error->get_warning('categories_sorted_by_valid'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo CATEGORY_COLUMNS_DESCRIPTION; ?>
							</label>
							<br />
							<span class="adinput">
								<select name="number_of_columns">
									<option value="1"<?php echo (($settings['number_of_colums']  == 1) ? ' selected="selected"' : ""); ?>>
										1
									</option>
									<option value="2"<?php echo (($settings['number_of_colums']  == 2) ? ' selected="selected"' : ""); ?>>
										2
									</option>
									<option value="3"<?php echo (($settings['number_of_colums']  == 3) ? ' selected="selected"' : ""); ?>>
										3
									</option>
									<option value="4"<?php echo (($settings['number_of_colums']  == 4) ? ' selected="selected"' : ""); ?>>
										4
									</option>
									<option value="5"<?php echo (($settings['number_of_colums']  == 5) ? ' selected="selected"' : ""); ?>>
										5
									</option>
								</select>
								<br />
								<em>
									<?php echo $error->get_warning('number_of_columns_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo LINKS_PER_PAGE; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="links_per_page" value="<?php echo $settings['number_of_links_per_page']; ?>" size="50" maxlength="255" />
								<br />
								<em>
									<?php echo $error->get_warning('links_per_page_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo SEARCH_RESULTS_PER_PAGE; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="number_of_search_results_per_page" value="<?php echo $settings['number_of_search_results_per_page']; ?>" size="50" maxlength="255" />
								<br />
								<em>
									<?php echo $error->get_warning('search_volume_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo HIDE_ADMIN_BUTTON; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="hide_admin_button" <?php echo checkbox_checked($settings['hide_admin_button']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo DENY_INDEX_PAGE_SUBMISSIONS; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="deny_index_page_submissions" <?php echo checkbox_checked($settings['deny_index_page_submissions']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo DISPLAY_UNACCEPTED_LINKS; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="display_unaccepted_links" <?php echo checkbox_checked($settings['display_unaccepted_links']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo OPEN_LINKS_IN_NEW_WINDOWS; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="open_links_in_new_windows" <?php echo checkbox_checked($settings['open_links_in_new_windows']); ?> />
								<br />
							</span>
						</p>
					</div>
				</fieldset>
			</div>
			<div class="adformpanel">
				<fieldset>
					<legend>
						<span>
							<?php echo LINKS_LABEL; ?>
						</span>
					</legend>
					<div class="fieldgroup">
						<p>
							<label class="adlabel">
								<?php echo REGULAR_LINKS_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="regular_links" <?php echo checkbox_checked($settings['regular_links_option']); ?> />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo RECIPROCAL_LINKS_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="reciprocal_links" <?php echo checkbox_checked($settings['reciprocal_links_option']); ?> />
								<br />
							</span>
							<label class="adlabel">
								<?php echo RECIPROCAL_URL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="reciprocal_url" value="<?php echo $settings['reciprocal_url_option']; ?>" size="50" maxlength="255" />
								<br />
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo PAID_LINKS; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="paid_links" <?php echo checkbox_checked($settings['paid_links_option']); ?> />
								<br />
							</span>
							<label class="adlabel">
								<?php echo ACCOUNT_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="paid_account" value="<?php echo $settings['paid_account_option']; ?>" size="50" maxlength="255" />
								<br />
							</span>
							<label class="adlabel">
								<?php echo PRICE_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="paid_price" size="5" value="<?php echo $settings['paid_price_option']; ?>" />
								<br />
							</span>
							<label class="adlabel">
								<?php echo CURRENCY_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<select name="paid_curr">
									<?php
									foreach($currency as $curr_item => $curr)
									{
										?>
										<option value="<?php echo $curr_item; ?>"<?php echo ($settings['paid_curr_option']==$curr_item ? ' selected="selected"' : ''); ?>>
											<?php echo $curr; ?>
										</option>
										<?php
									}
									?>
								</select>
								<br />
							</span>
							<br />
						</p>
						<p>
							<label class="adlabel">
								<?php echo SPONSORED_LINKS; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="checkbox" name="sponsored_links" <?php echo checkbox_checked($settings['sponsor_links_option']); ?>/>
								<br />
							</span>
							<label class="adlabel">
								<?php echo ACCOUNT_LABEL; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="sponsor_account" value="<?php echo $settings['sponsor_account_option']; ?>" size="50" maxlength="255" />
								<br />
							</span>
							<label class="adlabel">
								<?php echo PRICE_LABEL; ?>
							</label>
							<span class="adinput">
								<input type="text" name="sponsor_price" size="5" value="<?php echo $settings['sponsor_price_option']; ?>"  />
								<br />
							</span>
							<label class="adlabel">
								<?php echo CURRENCY_LABEL; ?>
							</label>
							<span class="adinput">
								<select name="sponsor_curr">
									<?php
									foreach($currency as $curr_item => $curr)
									{
										?>
										<option value="<?php echo $curr_item; ?>"<?php echo ($settings['sponsor_curr_option']==$curr_item ? ' selected="selected"' : ''); ?>>
											<?php echo $curr; ?>
										</option>
										<?php
									}
									?>
								</select>
								<br />
							</span>
							<?php ($hook = get_hook('links_types_featured_options_footer')) ? eval($hook) : null; ?>
						</p>
						<p>
							<label class="adlabel">
								<?php echo MAXIMUM_LINK_DESCRIPTION; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="admin_max_description__link" value="<?php echo $settings['link_description_max_length']; ?>" size="50" maxlength="255" />
								<br />
								<em>
									<?php echo $error->get_warning('admin_max_description_link_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo MINIMUM_LINK_DESCRIPTION; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="admin_min_description__link" value="<?php echo $settings['link_description_min_length']; ?>" size="50" maxlength="255" />
								<br />
								<em>
									<?php echo $error->get_warning('admin_min_description_link_warning'); ?>
								</em>
							</span>
						</p>
					</div>
				</fieldset>
			</div>
			
			<div class="adformpanel">
				<fieldset>
					<legend>
						<span>
							<?php echo CATEGORIES_LABEL; ?>
						</span>
					</legend>
					<div class="fieldgroup">
						<p>
							<label class="adlabel">
								<?php echo MAXIMUM_CATEGORY_DESCRIPTION; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="admin_max_description_category" value="<?php echo $settings['category_description_max_length']; ?>" size="50" maxlength="255" />
								<br />
								<em>
									<?php echo $error->get_warning('admin_max_description_category_warning'); ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								<?php echo MINIMUM_CATEGORY_DESCRIPTION; ?>
							</label>
							<br />
							<span class="adinput">
								<input type="text" name="admin_min_description_category" value="<?php echo $settings['category_description_min_length']; ?>" size="50" maxlength="255" />
								<br />
								<em>
									<?php echo $error->get_warning('admin_min_description_category_warning'); ?>
								</em>
							</span>
						</p>
					</div>
				</fieldset>
			</div>
			<?php ($hook = get_hook('admin_options_footer')) ? eval($hook) : null; ?>
			<p class="adformsubmit">
				<input type="submit" class="button" name="save" value="<?php echo SAVE_BUTTON; ?>" />
			</p>
		</div>
	</div>
</form>
<?php } ?>