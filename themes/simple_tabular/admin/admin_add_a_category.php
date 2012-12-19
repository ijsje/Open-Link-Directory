<form action="<?php echo $_SERVER['PHP_SELF']; ?>" accept-charset="utf-8" method="post">
	<h2>
		<?php echo ADD_CATEGORY_LABEL; ?>
	</h2>
	<?php ($hook = get_hook('admin_functions_add_category_page_header')) ? eval($hook) : null; ?>
	<table>
		<tr>
			<td>
				<?php echo TITLE_LABEL; ?>
			</td>
			<td>
				<input type="text" name="category_title" size="35" maxlength="80" value="<?php echo (isset($_REQUEST['category_title']) ? openld_htmlspecialchars($_REQUEST['category_title']) : ''); ?>" />
				<?php echo $error->get_warning('title_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo DESCRIPTION_LABEL; ?>
			</td>
			<td>
				<textarea name="category_description" rows="15" cols="75"><?php echo (isset($_REQUEST['category_description']) ? openld_htmlspecialchars($_REQUEST['category_description']) : ''); ?></textarea>
				<?php echo $error->get_warning('description_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo CATEGORY_LABEL; ?>
			</td>
			<td>
				<select name="id">
					<?php $cats = move_select_array(0, -1); ?>
					<?php foreach($cats as $cat) { ?>
					<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == $_REQUEST['add_cat']) ? ' selected="selected"' : ''); ?>>
						<?php echo openld_htmlspecialchars($cat['title']); ?>
					</option>
					<?php } ?>
				</select>
				<?php echo $error->get_warning('category_warning'); ?>
			</td>
		</tr>
	</table>
	<?php ($hook = get_hook('admin_functions_add_category_page_footer')) ? eval($hook) : null; ?>
	</ br>
	<input type="submit" class="button" name="add_a_category" value="<?php echo ADD_LABEL; ?>" />
</form>
