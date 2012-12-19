<h2>
	<?php echo SUBMIT_A_LINK; ?>
</h2>
<?php echo $success_message; ?>
<form action="<?php echo $settings['domain']. "/submit.php"; ?>" accept-charset="utf-8" method="post">
	<?php ($hook = get_hook('submit_head_page')) ? eval($hook) : null; ?>
	<span class="warn"><?php echo ucfirst($error->get_warning('linktype_warning')); ?></span>
	<?php if($settings['reciprocal_links_option']!='Y' && $settings['regular_links_option']!='Y' && $settings['paid_links_option']!='Y' && $settings['sponsor_links_option']!='Y')
		echo CLOSED_FOR_SUBMISSIONS;
	else { ?>
	<table>
		<?php if($settings['sponsor_links_option']=='Y') {
			$sponsor_price = price_with_currency($settings['sponsor_price_option'], $settings['sponsor_curr_option'], $settings['sponsor_curr_option']);
			if($settings['reciprocal_links_option']!='Y' && $settings['regular_links_option']!='Y' && $settings['paid_links_option']!='Y') 
			$sponsor_checked = 'checked="checked"';
			else
				$sponsor_checked = '';
			?>
			<tr><td><label><input type='radio' value='sponsor' name='linktype' <?php echo $sponsor_checked; ?> />
			<?php echo SPONSOR_LINK; ?> - <?php echo $sponsor_price; ?><?php ($hook = get_hook('sponsor_information')) ? eval($hook) : null; ?></label></td></tr>
		<?php } if($settings['paid_links_option']=='Y') { 
			$paid_checked = ($settings['reciprocal_links_option']=='N' && $settings['regular_links_option']=='N') ? 'checked="checked"' : '';
			$paid_price = price_with_currency($settings['paid_price_option'], $settings['paid_curr_option'], $settings['paid_curr_option']); ?>
			<tr><td><label><input type='radio' value='paid' name='linktype' <?php echo $paid_checked; ?> />
			<?php echo PAID_LINK; ?> - <?php echo $paid_price; ?></label></td></tr>
		<?php } if($settings['reciprocal_links_option']=='Y') {
			$reciprocal_checked = ($settings['reciprocal_links_option']=='Y' && $settings['regular_links_option']=='N') ? 'checked="checked"' : '';
			?>
			<tr><td><label><input type='radio' value='reciprocal' name='linktype' <?php echo $reciprocal_checked; ?> />
			<?php echo RECIPROCAL_LINK; ?></label></td></tr>
		<?php } if($settings['regular_links_option']=='Y') { ?>
			<tr><td><label><input type='radio' value='regular' name='linktype' checked="checked" />
			<?php echo REGULAR_LINK; ?></label></td></tr>
		<?php } ?>
		<tr>
			<td width="100px">
				<label for="title"><?php echo TITLE_LABEL; ?></label>
			</td>
			<td>
				<input type="text" value="<?php echo (isset($_POST['title']) ? openld_htmlspecialchars($_POST['title']) : ""); ?>" name="title" id="title" />
				<br />
				<span class="warn"><?php echo ucfirst($error->get_warning('title_warning')); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<label for="url"><?php echo URL_LABEL; ?></label>
			</td>
			<td>
				<input type="text" value="<?php echo (isset($_POST['url']) ? openld_htmlspecialchars($_POST['url']) : ""); ?>" name="url" id="url" />
				<br />
				<span class="warn"><?php echo ucfirst($error->get_warning('url_warning')); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<label for="description"><?php echo DESCRIPTION_LABEL; ?></label>
			</td>
			<td>
				<textarea name="description" id="description" rows="15" cols="75"><?php echo (isset($_POST['description']) ? openld_htmlspecialchars($_POST['description']) : ""); ?></textarea>
				<br />
				<span class="warn"><?php echo ucfirst($error->get_warning('description_warning')); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<label for="email"><?php echo EMAIL_LABEL; ?></label>
			</td>
			<td>
				<input type="text" value="<?php echo (isset($_POST['email']) ? openld_htmlspecialchars($_POST['email']) : ""); ?>" name="email" id="email" />
				<br />
				<span class="warn"><?php echo ucfirst($error->get_warning('email_warning')); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<label for="name"><?php echo NAME_LABEL; ?></label>
			</td>
			<td>
				<input type="text" value="<?php echo (isset($_POST['name']) ? openld_htmlspecialchars($_POST['name']) : ""); ?>" name="name" id="name" />
				<br />
				<span class="warn"><?php echo ucfirst($error->get_warning('name_warning')); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<label for="cat_id"><?php echo CATEGORY_LABEL; ?></label>
			</td>
			<td>
				<select name="cat_id" id="cat_id">
					<?php $cats = move_select_array(0, -1, "active=1 AND ", 1); ?>
					<?php foreach($cats as $cat) { ?>
						<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == (isset($_REQUEST['cat_id']) ? $_REQUEST['cat_id'] : "0")) ? ' selected="selected"' : ''); ?>>
							<?php echo openld_htmlspecialchars($cat['title']); ?>
						</option>
					<?php } ?>
				</select>
				<br />
				<span class="warn"><?php echo ucfirst($error->get_warning('category_warning')); ?></span>
			</td>
		</tr>
		<?php if($settings['reciprocal_links_option']=='Y') { ?>
		<tr>
			<td>
				<label for="reciprocal_url"><?php echo RECIPROCAL_URL_LABEL; ?></label>
			</td>
			<td>
				<input type="text" value="<?php echo (isset($_POST['reciprocal_post']) ? openld_htmlspecialchars($_POST['reciprocal_post']) : ""); ?>" name="reciprocal_url" id="reciprocal_url" />
				<br />
				<span><?php echo ucfirst($error->get_warning('reciprocal_warning')); ?></span>
			</td>
		</tr>
		<?php } ?>
		<?php ($hook = get_hook('submit_table_fields')) ? eval($hook) : null; ?>
	</table>
	<input type="submit" value="<?php echo ADD_LINK_LABEL; ?>" />
	<?php } ?>
</form>
