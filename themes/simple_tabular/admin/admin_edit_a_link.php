<?php
if(!empty($_POST))
	$result = array(
		0 => $_POST['name_title'],
		1 => $_POST['email_title'],
		2 => $_POST['link_title'],
		3 => $_POST['link_url'],
		4 => $_POST['link_description'],
		5 => $_POST['link_type'],
		6 => $_POST['new_cat_id'],
		7 => $_POST['payment_status'],
		8 => $_POST['reciprocal_url']
	);
else
{
	//get the SQL
	$query = array(
		'SELECT' => 'name, email, title, url, description, type, category_id, payment_status',
		'FROM' => 'links',
		'WHERE' => 'id=' .intval($_REQUEST['edit_link'])
	);
	($hook = get_hook('admin_edit_a_link_sql')) ? eval($hook) : null;
	$result = $db->query_build($query) or error(__FILE__, __LINE__);

	if($db->num_rows($result) == 0)
		error("No link row was selected", __FILE__, __LINE__);
	$result = $db->fetch_row($result);
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" accept-charset="utf-8" method="post">
	<h2>
		<?php echo EDIT_LINK_LABEL; ?>
	</h2>
	<?php ($hook = get_hook('edit_a_link_page_header')) ? eval($hook) : null; ?>
	<table>
		<tr>
			<td>
				<?php echo URL_LABEL; ?>
			</td>
			<td>
				<input type="text" name="link_url" size="35" maxlength="80" value="<?php echo openld_htmlspecialchars($result[3]); ?>" />
				<?php echo $error->get_warning('url_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo TITLE_LABEL; ?>
			</td>
			<td>
				<input type="text" name="link_title" size="35" maxlength="80" value="<?php echo openld_htmlspecialchars($result[2]); ?>" />
				<?php echo $error->get_warning('title_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo DESCRIPTION_LABEL; ?>
			</td>
			<td>
				<textarea name="link_description" rows="15" cols="75"><?php echo openld_htmlspecialchars($result[4]); ?></textarea>
				<?php echo $error->get_warning('description_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo CATEGORY_LABEL; ?>
			</td>
			<td>
				<?php $cats = move_select_array(0, -1); ?>
				<select name="new_cat_id">
					<?php foreach($cats as $cat) { ?>
					<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == $result[6]) ? ' selected="selected"' : ''); ?>>
						<?php echo openld_htmlspecialchars($cat['title']); ?>
					</option>
					<?php } ?>
				</select>
				<?php echo $error->get_warning('category_warning'); ?>
			</td>
		</tr>
	<?php
		$ltc = 0;
		if ($settings['regular_links_option'] = 'Y')
			$ltc++;
		if ($settings['reciprocal_links_option'] = 'Y')
			$ltc++;
		if ($settings['paid_links_option'] = 'Y')
			$ltc++;
		if ($settings['sponsor_links_option'] = 'Y')
			$ltc++;
		if(2 <= $ltc) {
	?>
		<tr>
			<td>
				<?php echo LINK_TYPES_LABEL; ?>
			</td>
			<td>
				<select name="link_type">
					<option value="a"<?php echo (($result[5] == "a") ? ' selected="selected"' : ''); ?>><?php echo REGULAR_LINK; ?></option>
					<option value="b"<?php echo (($result[5] == "b") ? ' selected="selected"' : ''); ?>><?php echo RECIPROCAL_LINK; ?></option>
					<option value="c"<?php echo (($result[5] == "c") ? ' selected="selected"' : ''); ?>><?php echo PAID_LINK; ?></option>
					<option value="d"<?php echo (($result[5] == "d") ? ' selected="selected"' : ''); ?>><?php echo SPONSOR_LINK; ?></option>
				</select>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td>
				<?php echo NAME_LABEL; ?>
			</td>
			<td>
				<input type="text" name="name_title" size="35" maxlength="80" value="<?php echo openld_htmlspecialchars($result[0]); ?>" />
				<?php echo $error->get_warning('name_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo EMAIL_LABEL; ?>
			</td>
			<td>
				<input type="text" name="email_title" size="35" maxlength="80" value="<?php echo openld_htmlspecialchars($result[1]); ?>" />
				<?php echo $error->get_warning('email_warning'); ?>
			</td>
		</tr>
		<?php if($result[5] == 'c' || $result[5] == 'd') { ?>
		<tr>
			<td>
				<?php echo IS_PAYMENT_PENDING; ?>
			</td>
			<td>
				<input type="checkbox" name="payment_pending"<?php echo (($result[7] != 'no') ? ' checked="CHECKED"' : ''); ?> />
			</td>
		</tr>
		<?php } else { ?>
		<input type="hidden" name="payment_pending" value="ok" />
		<?php } ?>
		<?php if($result[5] == 'b') { ?>
		<tr>
			<td>
				<?php echo RECIPROCAL_URL_LABEL; ?>
			</td>
			<td>
				<input type="text" name="reciprocal_url" value="<?php echo $result[8]; ?>" />
			</td>
		</tr>
		<?php } else { ?>
		<input type="hidden" name="reciprocal_url" value="<?php echo $result[8]; ?>" />
		<?php } ?>
	</table>
	<input type="hidden" name="edit_link_sql" value="<?php echo $_REQUEST['edit_link']; ?>" />
	<input type="hidden" name="page" value="<?php echo $req_page; ?>" />
	<input type="hidden" name="id" value="<?php echo $req_id; ?>" />
	<?php ($hook = get_hook('edit_a_link_page_footer')) ? eval($hook) : null; ?>
	<input type="submit" class="button" value="<?php echo EDIT_LINK_LABEL; ?>" />
</form>
