<?php if(isset($_REQUEST['edit_cat']))
	require 'admin_edit_a_category.php';
elseif(isset($_REQUEST['move_cat']))
	require 'admin_move_categories.php';
else { ($hook = get_hook('admin_accept_categories')) ? eval($hook) : null; ?>
<h2>
	<?php echo ACCEPT_CATEGORIES_LABEL; ?>
</h2>
<?php ($hook = get_hook('admin_accept_categories_before_sql_if')) ? eval($hook) : null; ?>
<?php if($db->num_rows($categories_result) > 0) { ?>
<table>
	<thead>
		<tr>
			<th>
				<?php echo CATEGORIES_LABEL; ?>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php while($links = $db->fetch_assoc($result_limit)) {
			($hook = get_hook('admin_accept_categories_suggested_cell')) ? eval($hook) : null; ?>
		<tr>
			<td>
				<?php ($hook = get_hook('admin_accept_categories_suggested_cell_header')) ? eval($hook) : null; ?>
				<a href="admin_browse.php?id=<?php echo openld_htmlspecialchars($links['id']); ?>"><?php echo openld_htmlspecialchars($links['title']); ?></a><br />
				<?php echo openld_htmlspecialchars($links['description']); ?><br />
				<a href="admin_accept_categories.php?accept_category=<?php echo openld_htmlspecialchars($links['id']); ?>&amp;page=<?php echo $req_page; ?>"><?php echo ACCEPT_LABEL; ?></a>
				<a href="admin_accept_categories.php?move_cat=<?php echo openld_htmlspecialchars($links['id']); ?>&amp;page=<?php echo $req_page; ?>&amp;id=<?php echo $links['father_id']; ?>"><?php echo MOVE_LABEL; ?></a>
				<a href="admin_accept_categories.php?edit_cat=<?php echo openld_htmlspecialchars($links['id']); ?>&amp;page=<?php echo $req_page; ?>"><?php echo EDIT_LABEL; ?></a>
				<a href="admin_accept_categories.php?delete=<?php echo openld_htmlspecialchars($links['id']); ?>&amp;page=<?php echo $req_page; ?>"><?php echo DELETE_LABEL; ?></a>
				<?php ($hook = get_hook('admin_accept_categories_suggested_cell_footer')) ? eval($hook) : null; ?>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php echo link_pagination($categories_result, $req_page, 'admin_accept_categories.php?page=#p'); ?>
<?php } else { ?>
<?php echo NO_CATEGORIES_HERE; ?>
<?php ($hook = get_hook('admin_accept_categories_no_categories')) ? eval($hook) : null; ?>
<?php } ($hook = get_hook('admin_accept_categories_after_sql_if')) ? eval($hook) : null;  } ?>
