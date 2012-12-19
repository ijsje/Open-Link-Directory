<?php //make a unique page depending on what content it will display
if(isset($_REQUEST['edit_cat']))
	require 'admin_edit_a_category.php';
elseif(isset($_REQUEST['move_cat']))
	require 'admin_move_categories.php';
else { ?>
<h2>
	<?php echo CATEGORIES_LABEL; ?>
</h2>
<?php ($hook = get_hook('admin_categories_before_sql_if')) ? eval($hook) : null;
if($db->num_rows($result) > 0) { ?>
<table>
	<thead>
		<tr>
			<th>
				<?php echo CATEGORY_LABEL; ?>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php while($links = $db->fetch_assoc($result_limit)) { ?>
		<tr>
			<td>
				<?php ($hook = get_hook('admin_categories_list_header')) ? eval($hook) : null; ?>
				<a href="admin_browse.php?id=<?php echo $links['id']; ?>"><?php echo openld_htmlspecialchars($links['title']); ?></a><br />
				<?php echo openld_htmlspecialchars($links['description']); ?><br />
				<a href="admin_categories.php?move_cat=<?php echo $links['id']; ?>&amp;page=<?php echo $req_page; ?>&amp;id=<?php echo $links['father_id']; ?>"><?php echo MOVE_LABEL; ?></a>
				<a href="admin_categories.php?edit_cat=<?php echo $links['id']; ?>&amp;page=<?php echo $req_page; ?>"><?php echo EDIT_LABEL; ?></a>
				<a href="admin_categories.php?delete=<?php echo $links['id']; ?>&amp;page=<?php echo $req_page; ?>"><?php echo DELETE_LABEL; ?></a> 
				<a href="admin_categories.php?unaccept=<?php echo $links['id']; ?>&amp;page=<?php echo $req_page; ?>"><?php echo UNACCEPT_LABEL; ?></a>
				<?php ($hook = get_hook('admin_categories_list_footer')) ? eval($hook) : null; ?>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php echo link_pagination($result, $req_page, 'admin_categories.php?page=#p');
} else {
echo NO_CATEGORIES_HERE;
($hook = get_hook('admin_categories_no_categories')) ? eval($hook) : null;
 } ($hook = get_hook('admin_categories_after_sql_if')) ? eval($hook) : null; } ?>
