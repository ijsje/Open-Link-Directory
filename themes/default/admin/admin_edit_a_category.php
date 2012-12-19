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
<div class="openld-adblock openld-adform">
	<h2>
		<span>
			<?php echo EDIT_CATEGORY_LABEL; ?>
		</span>
	</h2>
	<form method="post" accept-charset="utf-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="openld-adcontent">
			<fieldset id="admin-welcome">
				<legend>
					<span>
						<?php echo EDIT_CATEGORY_LABEL; ?>
					</span>
				</legend>
				<div class="fieldgroup">
					<?php ($hook = get_hook('admin_functions_edit_a_category_page_header')) ? eval($hook) : null; ?>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo TITLE_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="edit_cat_title" value="<?php echo openld_htmlspecialchars($result[0]); ?>" size="35" maxlength="80" id="start_input"/>
							<br />
							<em>
								<?php echo $error->get_warning('title_warning'); ?>
							</em>
						</span>
					</p>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo DESCRIPTION_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<textarea name="edit_cat_description" rows="15" cols="75"><?php echo openld_htmlspecialchars($result[1]); ?></textarea>
							<br />
							<em>
								<?php echo $error->get_warning('description_warning'); ?>
							</em>
						</span>
					</p>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo CATEGORY_LABEL; ?>
						</label>
						<br />
							<span class="adinput">
							<select name="new_id">
								<?php $cats = move_select_array(0, intval($_REQUEST['edit_cat'])); ?>
								<?php foreach($cats as $cat) { ?>
									<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == intval($result[2])) ? ' selected="selected"' : ''); ?>>
									<?php echo openld_htmlspecialchars($cat['title']); ?>
									</option>
								<?php } ?>
							</select>
							<br />
							<em>
								<?php echo $error->get_warning('category_warning'); ?>
							</em>
							<br />
						</span>
						<br />
					</p>
					<?php ($hook = get_hook('admin_functions_edit_a_category_page_footer')) ? eval($hook) : null; ?>
					<input type="hidden" name="page" value="<?php echo $req_page; ?>" />
					<input type="hidden" name="id" value="<?php echo $result[2]; ?>" />
					<input type="hidden" name="cat_id" value="<?php echo $_REQUEST['edit_cat']; ?>" />
				</div>
				<span class="adsubmit">
					<input type="submit" class="button" name="edit_cat_sql" value="<?php echo EDIT_LABEL; ?>" />
				</span>
			</fieldset>
		</div>
	</form>
</div>