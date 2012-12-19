<div class="openld-block openld-form">
	<div class="openld-content">
		<br /><br />
		<form action="<?php echo $settings['domain']. '/search.php'; ?>" accept-charset="utf-8" method="get">
			<div class="panel">	
				<input type="text" value="" name="term" />
				<input type="submit" value="Quick <?php echo SEARCH_LABEL; ?>" />
				<input type="hidden" name="search_in" value="title" checked="checked" />
				<input type="hidden" name="sort_by" value="alphabetical" checked="checked" />
				<input type="hidden" name="search_type" value="links" checked="checked" />
			</div>
		</form>
		<p class="crumbs">
			<?php ($hook = get_hook('navigation_header')) ? eval($hook) : null; ?>
			<a href="<?php echo openld_htmlspecialchars($settings['domain']); ?>"><?php echo openld_htmlspecialchars($settings['title']); ?></a>
			<?php echo (($req_id > 0) ? display_navbar($req_id) : ''); ?>
			<?php echo (($category_result[0] != '') ? ('<br />' .$category_result[0]) : ''); ?>
			<?php ($hook = get_hook('navigation_footer')) ? eval($hook) : null; ?>
		</p>
		<?php if($db->num_rows($categories_result) > 0) { ?>
			<?php ($hook = get_hook('categories_header')) ? eval($hook) : null; ?>
			<table cellspacing="0" summary="">
				<?php $colums_while = 1; ?>
				<?php while($category = $db->fetch_assoc($categories_result)) { 
					echo (($colums_while == 1) ? '<tr>' : '');
					$category_link = openld_link('index_cat', se_index_cat($category));

					?>
						<td class="tcl">
							<?php ($hook = get_hook('categories_category_cells_header')) ? eval($hook) : null; ?>
							<a id="catlinks" href="<?php echo $category_link; ?>"><?php echo openld_htmlspecialchars($category['title']); ?></a><?php ($hook = get_hook('ccc_after_link')) ? eval($hook) : null; ?><br />
							<?php ($hook = get_hook('categories_category_cells_footer')) ? eval($hook) : null; ?>
						</td>
					<?php

					if($colums_while == $settings['number_of_colums'])
					{
						$colums_while = 0;
						echo '</tr>';
					}
					$colums_while++;
				} if($colums_while > 1) echo '</tr>';
				elseif($colums_while != 1) error("issue wasn't catched"); ?>
			</table>
			<?php ($hook = get_hook('categories_footer')) ? eval($hook) : null; ?>
			<?php } else ($hook = get_hook('categories_no_subcategories')) ? eval($hook) : null; ?>
			<?php ($hook = get_hook('links_before_first_if')) ? eval($hook) : null; ?>
			<table cellspacing="0" summary="">
				<tr>	
					<th class="tcl" scope="col">Ads</th>					
				</tr>					
			</table>
			<p>Welcome to our Link Directory!</p>
			<?php if($db->num_rows($link_result) > 0) { ?>
			<table cellspacing="0" summary="">
				<thead>
					<tr>
						<th class="tcl" scope="col">
							<?php echo LINKS_LABEL; ?>
						</th>
					</tr>
				</thead>
				<tbody class="hasicon">
					<?php ($hook = get_hook('links_before_while')) ? eval($hook) : null; ?>
					<?php while($links = $db->fetch_assoc($link_result_limit)) { ?>
						<tr<?php echo ($links['type']=='d' ? ' class="openld-sponsor-cell"' : ''); ?>>
							<td class="tcl">
								<?php ($hook = get_hook('link_row_header')) ? eval($hook) : null; ?>
								<a href="<?php echo openld_htmlspecialchars($links['url']); ?>" target="_blank"><?php echo openld_htmlspecialchars($links['title']); ?></a><br />
								<?php echo openld_htmlspecialchars($links['description']); ?><br />
								
								<?php ($hook = get_hook('link_row_footer')) ? eval($hook) : null; ?>
							</td>
						</tr>
					<?php } ?>
					<?php ($hook = get_hook('links_after_while')) ? eval($hook) : null; ?>
				</tbody>
			</table>
			<?php echo link_pagination($link_result, $req_page, 'index_cat_page', se_index_cat(array('id' => $req_id, 'title' => $req_cat))); ?>
		<?php } else echo NO_LINKS_HERE; ?>
		<?php ($hook = get_hook('links_after_first_if')) ? eval($hook) : null; ?>
		<div class="whitey-block">
			<div class="whitey-box">
				<a href="<?php echo $submit_id; ?>"><?php echo SUBMIT_LINK_LABEL; ?></a> &nbsp;&nbsp;&nbsp; <a href="<?php echo $suggest_id; ?>"><?php echo SUGGEST_CATEGORY_LABEL; ?></a>
			</div>
		</div>		
	</div>
</div>