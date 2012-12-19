<div class="openld-block openld-form">
	<h2>
		<span>
			<?php echo MAKE_A_SEARCH; ?>
		</span>
	</h2>
	<div class="openld-content">
		<form action="<?php echo $settings['domain']. '/search.php'; ?>" accept-charset="utf-8" method="get">
			<div class="panel">
				<?php echo SEARCH_FOR; ?> 
				<input type="text" value="" name="term" />
				<br />
				<br />
				<table border="1px">
					<thead>
						<tr>
							<th class="tcl" scope="col">
								<?php echo SEARCH_IN; ?>
							</th>
							<th class="tcl" scope="col">
								<?php echo SORT_BY; ?>
							</th>
							<th class="tcl" scope="col">
								<?php echo SEARCH_TYPE; ?>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="radio" name="search_in" value="title" checked="checked" />
								<?php echo TITLE_LABEL; ?>
								<br />
								<input type="radio" name="search_in" value="description"/>
								<?php echo DESCRIPTION_LABEL; ?>
								<br />
							</td>
							<td>
								<input type="radio" name="sort_by" value="alphabetical" checked="checked" />
								<?php echo ALPHABETICAL_LABEL; ?>
								<br />
								<input type="radio" name="sort_by" value="alphabetical_reversed" />
								<?php echo ALPHABETICAL_REVERSED; ?>
								<br />
								<input type="radio" name="sort_by" value="newest_first" />
								<?php echo NEWEST_FIRST; ?>
								<br />
								<input type="radio" name="sort_by" value="oldest_first" />
								<?php echo OLDEST_FIRST; ?>
								<br />
							</td>
							<td>
								<input type="radio" name="search_type" value="links" checked="checked" />
								<?php echo LINKS_LABEL; ?>
								<br />
								<input type="radio" name="search_type" value="categories" />
								<?php echo CATEGORY_LABEL; ?>
								<br />
							</td>
						</tr>
					</tbody>
				</table>
				<input type="submit" value="<?php echo SEARCH_LABEL; ?>" />
			</div>
		</form>
	</div>
</div>
<?php if(isset($_GET['term']) && $db->num_rows($search_results) > 0 && $_GET['term'] !== '') { ?>
<div class="openld-block openld-form">
	<h2>
		<span>
			<?php echo SERCHED_FOR_LABEL; ?> "<?php echo openld_htmlspecialchars($_GET['term']); ?>"
		</span>
	</h2>
	<div class="openld-content">
		<table cellspacing="0" summary="">
			<thead>
				<tr>
					<th class="tcl" scope="col">
						<?php echo ($_GET['search_type'] == 'categories') ? CATEGORIES_LABEL : LINKS_LABEL; ?>
					</th>
				</tr>
			</thead>
			<tbody class="hasicon">
				<?php ($hook = get_hook('search_results_tbody_header')) ? eval($hook) : null; ?>
				<?php while($row = $db->fetch_assoc($sql_string_limit)) {
					if($_GET['search_type'] == 'categories')
						$row['url'] = openld_link('index_cat', se_index_cat($row));
				?>
				<tr>
					<td class="tcl">
						<?php ($hook = get_hook('search_result_rows_header')) ? eval($hook) : null; ?>
						<a href="<?php echo $row['url']; ?>"<?php echo (($settings['open_links_in_new_windows'] == 'Y' && $_GET['search_type'] == 'links') ? ' target="_blank"' : ''); ?>><?php echo openld_htmlspecialchars($row['title']); ?></a>
						<br />
						<?php echo openld_htmlspecialchars($row['description']); ?>
						<?php ($hook = get_hook('search_result_rows_footer')) ? eval($hook) : null; ?>
					</td>
				</tr>
				<?php } ?>
				<?php ($hook = get_hook('search_results_tbody_footer')) ? eval($hook) : null; ?>
			</tbody>
		</table>
		<?php echo $pagination; ?>
	</div>
</div>
<?php } elseif(isset($_GET['term']) && $db->num_rows($search_results)==0) { ?>
<div class="openld-block openld-form">
	<h2>
		<span>
			<?php echo SERCHED_FOR_LABEL; ?> "<?php echo openld_htmlspecialchars($_GET['term']); ?>"
		</span>
	</h2>
	<div class="openld-content">
		<?php ($hook = get_hook('search_no_results_header')) ? eval($hook) : null; ?>
		<?php echo NO_MATCHES; ?>
		<?php ($hook = get_hook('search_no_results_footer')) ? eval($hook) : null; ?>
	</div>
</div>
<?php } ?>
