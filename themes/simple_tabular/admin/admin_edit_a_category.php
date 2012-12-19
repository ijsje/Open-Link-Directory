<?php if(!empty($_POST))
	$result = array(
		0 => $_POST['edit_cat_title'],
		1 => $_POST['edit_cat_description'],
		2 => $req_id
	);
else
{
	$query = array(
		'SELECT' => 'title, description, father_id',
		'FROM' => 'categories',
		'WHERE' => 'id=' .intval($_REQUEST['edit_cat'])
	);
	($hook = get_hook('admin_edit_a_category_sql')) ? eval($hook) : null;
	$result = $db->query_build($query) or error(__FILE__, __LINE__);
	if($db->num_rows($result) == 0)
		error("No category row was selected", __FILE__, __LINE__);
	$result = $db->fetch_row($result);
} ?>
<h2>
	<?php echo EDIT_CATEGORY_LABEL; ?>
</h2>
<form method="post" accept-charset="utf-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<?php ($hook = get_hook('admin_functions_edit_a_category_page_header')) ? eval($hook) : null; ?>
	<table>
		<tr>
			<td>
				<?php echo TITLE_LABEL; ?>
			</td>
			<td>
				<input type="text" name="edit_cat_title" value="<?php echo openld_htmlspecialchars($result[0]); ?>" size="35" maxlength="80" />
				<?php echo $error->get_warning('title_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo DESCRIPTION_LABEL; ?>
			</td>
			<td>
				<textarea name="edit_cat_description" rows="15" cols="75"><?php echo openld_htmlspecialchars($result[1]); ?></textarea>
				<?php echo $error->get_warning('description_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo CATEGORY_LABEL; ?>
			</td>
			<td>
				<select name="new_id">
					<?php $cats = move_select_array(0, intval($_REQUEST['edit_cat'])); ?>
					<?php foreach($cats as $cat) { ?>
					<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == intval($result[2])) ? ' selected="selected"' : ''); ?>>
						<?php echo openld_htmlspecialchars($cat['title']); ?>
					</option>
					<?php } ?>
				</select>
				<?php echo $error->get_warning('category_warning'); ?>
			</td>
		</tr>
	</table>
	<?php ($hook = get_hook('admin_functions_edit_a_category_page_footer')) ? eval($hook) : null; ?>
	<input type="hidden" name="page" value="<?php echo $req_page; ?>" />
	<input type="hidden" name="id" value="<?php echo $result[2]; ?>" />
	<input type="hidden" name="cat_id" value="<?php echo $_REQUEST['edit_cat']; ?>" />
	<input type="submit" class="button" name="edit_cat_sql" value="<?php echo EDIT_LABEL; ?>" />
</form>
