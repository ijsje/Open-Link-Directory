<h2>
	<?php echo MOVE_LINK_LABEL; ?>
</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" accept-charset="utf-8" method="get">
	<p>
		<?php ($hook = get_hook('admin_functions_move_link_page_header')) ? eval($hook) : null; ?>
		<?php echo MOVE_TO; ?>:
		<select name="to_new_parent">
			<?php $cats = move_select_array(0, -1); ?>
			<?php foreach($cats as $cat) { ?>
			<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == $req_id) ? ' selected="selected"' : ''); ?>>
				<?php echo openld_htmlspecialchars($cat['title']); ?>
			</option>
			<?php } ?>
		</select>
		<?php ($hook = get_hook('admin_functions_move_link_page_footer')) ? eval($hook) : null; ?>
		<input type="hidden" name="move_link_sql" value="<?php echo $_REQUEST['move_link']; ?>" />
		<input type="hidden" name="page" value="<?php echo $req_page; ?>" />
		<input type="hidden" name="id" value="<?php echo $req_id; ?>" />
		<input type="submit" />
		<?php echo $error->get_warning('category_warning'); ?>
	</p>
</form>
