<?php 
//make a unique page depending on what content it will display
if(isset($_REQUEST['edit_cat']))
	require 'admin_edit_a_category.php';
elseif(isset($_REQUEST['edit_link']))
	require 'admin_edit_a_link.php';
elseif(isset($_REQUEST['move_cat']))
	require 'admin_move_categories.php';
elseif(isset($_REQUEST['move_link']))
	require 'admin_move_links.php';
elseif(isset($_REQUEST['add_cat']))
	require 'admin_add_a_category.php';
elseif(isset($_REQUEST['add_link']))
	require 'admin_add_a_link.php';
else
{
?>
<div class="openld-adblock openld-adform">
	<h2>
		<span>
			<?php echo NAVIGATION_LABEL; ?>
		</span>
	</h2>
	<div class="openld-adcontent">
		<p>
			<?php ($hook = get_hook('admin_browse_pathbar_header')) ? eval($hook) : null; ?>
			<a href="<?php echo $settings['domain']. '/admin_browse.php'; ?>"><?php echo $settings['title']; ?></a>
			<?php echo (($req_id > 0) ? display_navbar($req_id, $settings['domain']. '/admin_browse.php') : ''); ?>
			<?php ($hook = get_hook('navigation_footer')) ? eval($hook) : null; ?>
		</p>
	</div>
</div>
<div class="openld-adblock openld-adform">
	<h2>
		<span>
			<?php echo CATEGORIES_LABEL; ?>
		</span>
	</h2>
	<div class="openld-adcontent">
		<?php 
		($hook = get_hook('admin_browse_before_categories_if')) ? eval($hook) : null;
		if($db->num_rows($categories_result)==0) //Meesage to print when theres no categories at all
		{
			echo NO_SUBCATEGORIES_FOUND;
			($hook = get_hook('admin_browse_no_subcategories')) ? eval($hook) : null;
		}
		elseif($db->num_rows($categories_result)==-1) // debugging sql qoute
			error("Category SQL were corrupt", __FILE__, __LINE__);
		else //If there are one or more rows coorectly found
		{
			?><table cellspacing="0" summary=""><?php
			$colums_while = 1;
			//Now write them out
			while($category = $db->fetch_assoc($categories_result))
			{
				echo ($colums_while == 1) ? '<tr>' : null;

				$category_link = $settings['domain'].'/admin_browse.php?id='.$category['id'];

				?><td class="tcl">
					<?php ($hook = get_hook('admin_browse_category_cell_header')) ? eval($hook) : null; ?>
					<a href="<?php echo $category_link; ?>"><?php echo openld_htmlspecialchars($category['title']); ?></a><?php ($hook = get_hook('admin_ccc_after_link')) ? eval($hook) : null; ?><br />
					<?php echo openld_htmlspecialchars($category['description']); ?><br />
					<a href="admin_browse.php?move_cat=<?php echo $category['id']; ?>&amp;id=<?php echo $req_id; ?>&amp;page=<?php echo $req_page; ?>"><?php echo MOVE_LABEL; ?></a> 
					<a href="admin_browse.php?edit_cat=<?php echo $category['id']; ?>&amp;id=<?php echo $req_id; ?>&amp;page=<?php echo $req_page; ?>"><?php echo EDIT_LABEL; ?></a> 
					<a href="admin_browse.php?delete=<?php echo $category['id']; ?>&amp;id=<?php echo $req_id; ?>&amp;page=<?php echo $req_page; ?>"><?php echo DELETE_LABEL; ?></a> 
					<a href="admin_browse.php?unaccept=<?php echo $category['id']; ?>&amp;id=<?php echo $req_id; ?>&amp;page=<?php echo $req_page; ?>"><?php echo UNACCEPT_LABEL; ?></a>
					<?php ($hook = get_hook('admin_browse_category_cell_footer')) ? eval($hook) : null; ?>
				</td><?php
					
				if($colums_while == $settings['number_of_colums'])
				{
					$colums_while = 0;
					($hook = get_hook('admin_browse_category_row')) ? eval($hook) : null;
					?></tr><?php
				}
				$colums_while++;
			}
			if($colums_while > 1) //just need to end the last collumns
			{
				($hook = get_hook('admin_browse_category_row2')) ? eval($hook) : null;
				?></tr><?php
			}
			elseif($colums_while != 1)
				error("issue wasn't catched");

			?></table><?php
			($hook = get_hook('admin_browse_category_table')) ? eval($hook) : null;
		}
		($hook = get_hook('admin_browse_after_categories_if')) ? eval($hook) : null; ?>
		<br />
		<a href="admin_browse.php?add_cat=<?php echo $req_id; ?>&amp;category=<?php (isset($_REQUEST['category']) ? openld_htmlspecialchars($_REQUEST['category']) : 'root') ?>"><?php echo ADD_CATEGORY_LABEL; ?></a>
	</div>
</div>

<div class="openld-adblock openld-adform">
	<h2>
		<span>
			<?php echo LINKS_LABEL; ?>
		</span>
	</h2>
	<div class="openld-adcontent">
		<?php ($hook = get_hook('admin_browse_before_links_if')) ? eval($hook) : null;
		if($db->num_rows($links_result) > 0)
		{
			?><table cellspacing="0" summary="">
				<thead>
					<tr>
						<?php ($hook = get_hook('admin_browse_links_thead_tr_header')) ? eval($hook) : null; ?>
						<th align="left">
							<?php echo LINKS_LABEL; ?>
						</th>
						<?php ($hook = get_hook('admin_browse_links_thead_tr_footer')) ? eval($hook) : null; ?>
					</tr>
				</thead>
				<tbody class="hasicon">
					<?php ($hook = get_hook('admin_browse_browse_links_table')) ? eval($hook) : null; ?>
					<?php while($links = $db->fetch_assoc($result_limit)) { ?>
					<tr<?php echo ($links['type']=='d' ? ' class="openld-sponsor-cell"' : ''); ?>>
						<?php ($hook = get_hook('admin_browse_links_row_tbody_tr_header')) ? eval($hook) : null; ?>
						<td class="tcl">
							<?php ($hook = get_hook('admin_browse_browse_links_table_cell_header')) ? eval($hook) : null; ?>
							<a href="<?php echo openld_htmlspecialchars($links['url']); ?>"><?php echo openld_htmlspecialchars($links['title']) ?></a><?php echo (($links['payment_status']=='no') ? ' - <b>' .NOT_PAID. '</b>' : ''); ?><br />
							<?php echo openld_htmlspecialchars($links['description']); ?><br />
							<?php echo SUBMITTED_LABEL; ?> <?php echo $links['date_submitted']; ?><br />
							<a href="admin_browse.php?move_link=<?php echo $links['id']; ?>&amp;id=<?php echo $links['category_id']; ?>&amp;page=<?php echo $req_page; ?>"><?php echo MOVE_LABEL; ?></a> 
							<a href="admin_browse.php?edit_link=<?php echo $links['id']; ?>&amp;id=<?php echo $links['category_id']; ?>&amp;page=<?php echo $req_page; ?>"><?php echo EDIT_LABEL; ?></a> 
							<a href="admin_browse.php?delete_link=<?php echo $links['id']; ?>&amp;id=<?php echo $links['category_id']; ?>&amp;page=<?php echo $req_page; ?>"><?php echo DELETE_LABEL; ?></a> 
							<a href="admin_browse.php?unaccept_link=<?php echo $links['id']; ?>&amp;id=<?php echo $links['category_id']; ?>&amp;page=<?php echo $req_page; ?>"><?php echo UNACCEPT_LABEL; ?></a>
							<?php ($hook = get_hook('admin_browse_browse_links_table_cell_footer')) ? eval($hook) : null; ?>
						</td>
						<?php ($hook = get_hook('admin_links_row_tbody_tr_footer')) ? eval($hook) : null; ?>
					</tr>
					<?php ($hook = get_hook('admin_browse_links_row')) ? eval($hook) : null;
					} ?>
				</tbody>
			</table>
			<?php echo link_pagination($links_result, $req_page, 'admin_browse.php?id=' .$req_id. '&amp;page=#p');
		}
		else
		{
			echo NO_LINKS_HERE;
			($hook = get_hook('admin_browse_no_links')) ? eval($hook) : null;
		}
		($hook = get_hook('admin_browse_after_sql_if')) ? eval($hook) : null; ?>
		<br />
		<a href="admin_browse.php?add_link=<?php echo $req_id; ?>&amp;category=<?php echo (isset($_REQUEST['category']) ? openld_htmlspecialchars($_REQUEST['category']) : 'root'); ?>"><?php echo ADD_LINK_LABEL; ?></a>
	</div>
</div>
<?php
}
