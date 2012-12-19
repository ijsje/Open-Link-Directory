<?php if(isset($_GET['action']) || isset($back_to_form)) { ?>
<form method="post" accept-charset="utf-8" action="admin_options.php">
	<h2>
		<?php echo CHANGE_PASSWORD_LABEL; ?>
	</h2>
	<table>
		<tr>
			<td>
				<?php echo NEW_PASSWORD; ?>
			</td>
			<td>
				<input type="password" name="password" size="16" maxlength="16" />
				<?php echo $error->get_warning('password_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo RETYPE_PASSWORD; ?>
			</td>
			<td>
				<input type="password" name="confirm_new_password" size="16" maxlength="16" />
				<?php echo $error->get_warning('retype_warning'); ?>
			</td>
		</tr>
		<tr>
	</table>
	<input type="submit" class="button" name="save" value="<?php echo SAVE_PASSWORD_BUTTON; ?>" />
</form>
<?php } else { ?>
<form action="admin_options.php" accept-charset="utf-8" method="post">
	<h2>
		<?php echo OPTION_LABEL; ?>
	</h2>
	<?php ($hook = get_hook('admin_options_header')) ? eval($hook) : null; ?>
	<h3>
		<?php echo ADMIN_LABEL; ?>
	</h3>
	<table>
		<tr>
			<td>
				<?php echo ADMIN_USERNAME_LABEL; ?>
			</td>
			<td>
				<input type="text" name="admin_username" value="<?php echo openld_htmlspecialchars($settings['admin_username']); ?>" size="50" maxlength="255" />
				<?php echo $error->get_warning('username_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo ADMIN_PASSWORD_LABEL; ?>
			</td>
			<td>
				<a href="admin_options.php?action=change_password"><?php echo CHANGE_PASSWORD_LABEL; ?></a>
				<?php echo (isset($_POST['password']) ? PASSWORD_HAS_BEEN_CHANGED : ''); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo ADMIN_EMAIL_LABEL; ?>
			</td>
			<td>
				<input type="text" name="admin_email" size="50" maxlength="255" value="<?php echo openld_htmlspecialchars($settings['email']); ?>" />
				<?php echo $error->get_warning('email_warning'); ?>
			</td>
		</tr>
	</table>
	<h3><?php echo CENTRAL_FEATURES; ?></h3>
	<table>
		<tr>
			<td>
				<?php echo TITLE_LABEL; ?>
			</td>
			<td>
				<input type="text" name="admin_title" value="<?php echo openld_htmlspecialchars($settings['title']); ?>" size="50" maxlength="255" />
				<?php echo $error->get_warning('title_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo DESCRIPTION_LABEL; ?>
			</td>
			<td>
				<textarea name="site_description" rows="10" cols="75"><?php echo openld_htmlspecialchars($settings['description']); ?></textarea>
				<?php echo $error->get_warning('description_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo DOMAIN_LABEL; ?>
			</td>
			<td>
				<input type="text" name="domain_name_or_path" value="<?php echo openld_htmlspecialchars($settings['domain']); ?>" size="50" maxlength="255" />
				<?php echo $error->get_warning('url_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo LANGUAGE_LABEL; ?>
			</td>
			<td>
				<select name="language">
					<?php if($directory = opendir(OPENLD_ROOT. 'lang/')) { ?>
					<?php while(false !== ($file = readdir($directory))) { ?>
					<?php if(openld_is_dir(OPENLD_ROOT. 'lang/'. $file))  { ?>
					<option value="<?php echo $file. '"' .(($settings['language'] == $file) ? ' selected="selected"' : '')  ?>>
						<?php echo $file; ?>
					</option>
					<?php }} closedir($directory); ?>
					<?php } else error("Error: Couldn't load languages"); ?>
				</select>
				<?php echo $error->get_warning('language_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo SEF_REWRITE_LABEL; ?>
			</td>
			<td>
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
			</td>
		</tr>
		<tr>
			<td>
				<?php echo DISABLE_EXTENSIONS_LABEL; ?>
			</td>
			<td>
				<input type="checkbox" name="disable_extensions" <?php echo checkbox_checked($settings['disable_extensions']); ?> />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo ENABLE_GZIP_LABEL; ?>
			</td>
			<td>
				<input type="checkbox" name="gzip" <?php echo checkbox_checked($settings['gzip']); ?> />
				<?php echo (!extension_loaded('zlib') ? ZLIB_NOT_ENABLED : ''); ?>
			</td>
		</tr>
	</table>
	<h3>
		<?php echo DISPLAY_LABEL; ?>
	</h3>
	<table>
		<tr>
			<td>
				<?php echo LINKS_SORT_BY_LABEL; ?>
			</td>
			<td>
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
					<option value="id"<?php echo (($settings['links_sorting_by']  == 'id') ? ' selected="selected"' : ""); ?>>
						<?php echo DATE_LABEL; ?>
					</option>
					<option value="id DESC"<?php echo (($settings['links_sorting_by']  == 'id DESC') ? ' selected="selected"' : ""); ?>>
						<?php echo DATE_REVERSED; ?>
					</option>
					<option value="reciprocal_url"<?php echo (($settings['links_sorting_by']  == 'reciprocal_url') ? ' selected="selected"' : ""); ?>>
						<?php echo RECIPROCAL_URL; ?>
					</option>
					<option value="reciprocal_url DESC"<?php echo (($settings['links_sorting_by']  == 'reciprocal_url DESC') ? ' selected="selected"' : ""); ?>>
						<?php echo RECIPROCAL_URL_DESC; ?>
					</option>
					<option value="url"<?php echo (($settings['links_sorting_by']  == 'url') ? ' selected="selected"' : ""); ?>>
						<?php echo URL; ?>
					</option>
					<option value="url DESC"<?php echo (($settings['links_sorting_by']  == 'url DESC') ? ' selected="selected"' : ""); ?>>
						<?php echo URL_REVERSED; ?>
					</option>
					<?php ($hook = get_hook('links_sort_options_footer')) ? eval($hook) : null; ?>
				</select>
				<?php echo $error->get_warning('links_sorted_by_valid'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo CATEGORIES_SORT_BY_LABEL; ?>
			</td>
			<td>
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
				<?php echo $error->get_warning('categories_sorted_by_valid'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo CATEGORY_COLUMNS_DESCRIPTION; ?>
			</td>
			<td>
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
				<?php echo $error->get_warning('number_of_columns_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo LINKS_PER_PAGE; ?>
			</td>
			<td>
				<input type="text" name="links_per_page" value="<?php echo $settings['number_of_links_per_page']; ?>" size="50" maxlength="255" />
				<?php echo $error->get_warning('links_per_page_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo SEARCH_RESULTS_PER_PAGE; ?>
			</td>
			<td>
				<input type="text" name="number_of_search_results_per_page" value="<?php echo $settings['number_of_search_results_per_page']; ?>" size="50" maxlength="255" />
				<?php echo $error->get_warning('search_volume_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo HIDE_ADMIN_BUTTON; ?>
			</td>
			<td>
				<input type="checkbox" name="hide_admin_button" <?php echo checkbox_checked($settings['hide_admin_button']); ?> />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo DENY_INDEX_PAGE_SUBMISSIONS; ?>
			</td>
			<td>
				<input type="checkbox" name="deny_index_page_submissions" <?php echo checkbox_checked($settings['deny_index_page_submissions']); ?> />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo DISPLAY_UNACCEPTED_LINKS; ?>
			</td>
			<td>
				<input type="checkbox" name="display_unaccepted_links" <?php echo checkbox_checked($settings['display_unaccepted_links']); ?> />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo OPEN_LINKS_IN_NEW_WINDOWS; ?>
			</td>
			<td>
				<input type="checkbox" name="open_links_in_new_windows" <?php echo checkbox_checked($settings['open_links_in_new_windows']); ?> />
			</td>
		</tr>
	</table>
	<h3>
		<?php echo LINK_TYPES_LABEL; ?>
	</h3>
	<table>
		<tr>
			<td>
				<?php echo REGULAR_LINKS_LABEL; ?>
			</td>
			<td>
				<input type="checkbox" name="regular_links" <?php echo checkbox_checked($settings['regular_links_option']); ?> />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo RECIPROCAL_LINKS_LABEL; ?>
			</td>
			<td>
				<input type="checkbox" name="reciprocal_links" <?php echo checkbox_checked($settings['reciprocal_links_option']); ?> />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo RECIPROCAL_URL; ?>
			</td>
			<td>
				<input type="text" name="reciprocal_url" value="<?php echo $settings['reciprocal_url_option']; ?>" size="50" maxlength="255" />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo PAID_LINKS; ?>
			</td>
			<td>
				<input type="checkbox" name="paid_links" <?php echo checkbox_checked($settings['paid_links_option']); ?> />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo ACCOUNT_LABEL; ?>
			</td>
			<td>
				<input type="text" name="paid_account" value="<?php echo $settings['paid_account_option']; ?>" size="50" maxlength="255" />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo PRICE_LABEL; ?>
			</td>
			<td>
				<input type="text" name="paid_price" size="5" value="<?php echo $settings['paid_price_option']; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo CURRENCY_LABEL; ?>
			</td>
			<td>
				<select name="paid_curr">
					<?php foreach($currency as $curr_item => $curr) { ?>
					<option value="<?php echo $curr_item; ?>"<?php echo ($settings['paid_curr_option']==$curr_item ? ' selected="selected"' : ''); ?>>
						<?php echo $curr; ?>
					</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo SPONSORED_LINKS; ?>
			</td>
			<td>
				<input type="checkbox" name="sponsored_links" <?php echo checkbox_checked($settings['sponsor_links_option']); ?>/>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo ACCOUNT_LABEL; ?>
			</td>
			<td>
				<input type="text" name="sponsor_account" value="<?php echo $settings['sponsor_account_option']; ?>" size="50" maxlength="255" />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo PRICE_LABEL; ?>
			</td>
			<td>
				<input type="text" name="sponsor_price" size="5" value="<?php echo $settings['sponsor_price_option']; ?>"  />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo CURRENCY_LABEL; ?>
			</td>
			<td>
				<select name="sponsor_curr">
					<?php foreach($currency as $curr_item => $curr) { ?>
					<option value="<?php echo $curr_item; ?>"<?php echo ($settings['sponsor_curr_option']==$curr_item ? ' selected="selected"' : ''); ?>>
						<?php echo $curr; ?>
					</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<?php ($hook = get_hook('links_types_featured_options_footer')) ? eval($hook) : null; ?>
	</table>
	<?php echo INPUT_CONTROL; ?>
	<table>
		<tr>
			<td>
				<?php echo MAXIMUM_LINK_DESCRIPTION; ?>
			</td>
			<td>
				<input type="text" name="admin_max_description__link" value="<?php echo $settings['link_description_max_length']; ?>" size="50" maxlength="255" />
				<?php echo $error->get_warning('admin_max_description_link_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo MINIMUM_LINK_DESCRIPTION; ?>
			</td>
			<td>
				<input type="text" name="admin_min_description__link" value="<?php echo $settings['link_description_min_length']; ?>" size="50" maxlength="255" />
				<?php echo $error->get_warning('admin_min_description_link_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo MAXIMUM_CATEGORY_DESCRIPTION; ?>
			</td>
			<td>
				<input type="text" name="admin_max_description_category" value="<?php echo $settings['category_description_max_length']; ?>" size="50" maxlength="255" />
				<?php echo $error->get_warning('admin_max_description_category_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo MINIMUM_CATEGORY_DESCRIPTION; ?>
			</td>
			<td>
				<input type="text" name="admin_min_description_category" value="<?php echo $settings['category_description_min_length']; ?>" size="50" maxlength="255" />
				<?php echo $error->get_warning('admin_min_description_category_warning'); ?>
			</td>
		</tr>
	</table>
	<?php ($hook = get_hook('admin_options_footer')) ? eval($hook) : null; ?>
	<input type="submit" class="button" name="save" value="<?php echo SAVE_BUTTON; ?>" />
</form>
<?php } ?>
