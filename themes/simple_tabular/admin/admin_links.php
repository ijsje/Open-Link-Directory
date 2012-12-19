<?php if(isset($_REQUEST['edit_link']))
	require 'admin_edit_a_link.php';
elseif(isset($_REQUEST['move_link']))
	require 'admin_move_links.php';
else
{ ?>
<h2>
	<?php echo APPROVED_LINKS_LABEL; ?>
</h2>
<?php ($hook = get_hook('admin_links_before_sql_if')) ? eval($hook) : null;
	if($db->num_rows($links_result) > 0) { ?>
<table>
	<thead>
		<tr>
			<?php ($hook = get_hook('admin_links_thead_tr_header')) ? eval($hook) : null; ?>
			<th>
				<?php echo LINKS_LABEL; ?>
			</th>
			<?php ($hook = get_hook('admin_links_thead_tr_footer')) ? eval($hook) : null; ?>
		</tr>
	</thead>
	<tbody>
		<?php while($links = $db->fetch_assoc($result_limit)) { ?>
		<tr<?php echo ($links['type']=='d' ? ' class="openld-sponsor-cell"' : ''); ?>>
			<?php ($hook = get_hook('admin_links_row_tbody_tr_header')) ? eval($hook) : null; ?>
			<td>
				<?php ($hook = get_hook('admin_links_row_header')) ? eval($hook) : null; ?>
				<a href="<?php echo openld_htmlspecialchars($links['url']); ?>"><?php echo openld_htmlspecialchars($links['title']); ?></a><?php echo (($links['payment_status']=='no') ? ' - <b>' .NOT_PAID. '</b>' : ''); ?><br />
				<?php echo openld_htmlspecialchars($links['description']); ?><br />
				<?php echo SUBMITTED_LABEL; ?> <?php echo $links['date_submitted']; ?><br />
				<a href="admin_links.php?move_link=<?php echo $links['id']; ?>&amp;page=<?php echo $req_page; ?>&amp;id=<?php echo $links['category_id']; ?>"><?php echo MOVE_LABEL; ?></a>
				<a href="admin_links.php?edit_link=<?php echo $links['id']; ?>&amp;page=<?php echo $req_page; ?>"><?php echo EDIT_LABEL; ?></a>
				<a href="admin_links.php?delete_link=<?php echo $links['id']; ?>&amp;page=<?php echo $req_page; ?>"><?php echo DELETE_LABEL; ?></a> 
				<a href="admin_links.php?unaccept_link=<?php echo $links['id']; ?>'&amp;page=<?php echo $req_page; ?>"><?php echo UNACCEPT_LABEL; ?></a>
				<?php ($hook = get_hook('admin_links_row_footer')) ? eval($hook) : null; ?>
			</td>
			<?php ($hook = get_hook('admin_links_row_tbody_tr_footer')) ? eval($hook) : null; ?>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php echo link_pagination($links_result, $req_page, 'admin_links.php?page=#p');
} else {
echo NO_LINKS_HERE;
($hook = get_hook('admin_links_no_links')) ? eval($hook) : null;
} ($hook = get_hook('admin_links_after_sql_if')) ? eval($hook) : null; } ?>
