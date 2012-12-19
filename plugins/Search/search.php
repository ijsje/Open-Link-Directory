<?php 

$plugin_name = "Search";
$openld_url['search_admin'] = 'admin_plugins.php?plugin='.$plugin_name.'&amp;term=#1&amp;search_in=#2&amp;sort_by=#3&amp;search_type=#4';

$row_results = '<table cellspacing="0" summary="">
				<thead>
					<tr>
						<th class="tcl" scope="col">Links</th>
					</tr>
				</thead>
				<tbody class="hasicon">';
$old_term = '';
$search_results = '';
$pages_string = '';

if(isset($_REQUEST['term']) && isset($_REQUEST['search_in']) && isset($_REQUEST['sort_by']) && $_REQUEST['search_type'])
{
	$start_limit = $settings['number_of_search_results_per_page'] * (isset($_REQUEST['page']) ? intval($_REQUEST['page'])-1 : 0);
	$query = array(
		'SELECT' => '*',
		'LIMIT' => $start_limit. ',' .$settings['number_of_search_results_per_page']
	);

	$old_term = $_REQUEST['term'];
	$_REQUEST = array_map('openld_trim', $_REQUEST);
	$pages_string="";

	switch($_REQUEST['search_in'])
	{
		case "title" : $query['WHERE'] = 'title LIKE "%' .$db->escape($_REQUEST['term']). '%"'; break;
		case "description" : $query['WHERE'] = 'description LIKE "%' .$db->escape($_REQUEST['term']). "%'"; break;
		case "url" : $query['WHERE'] = 'url LIKE "%' .$db->escape($_REQUEST['term']). '%"'; break;
		case "all" : $query['WHERE']= 'title LIKE "%' .$db->escape($_REQUEST['term']). '%" OR description LIKE "%' .$db->escape($_REQUEST['term']). '%" OR url LIKE "%' .$db->escape($_REQUEST['term']). '%"'; break;
	}

	switch($_REQUEST['sort_by'])
	{
		case "alphabetical" : $sort_by=' ORDER BY '. $db->escape($_REQUEST['search_in']); break;
		case "alphabetical_reversed" : $sort_by=' ORDER BY '. $db->escape($_REQUEST['search_in']). " DESC"; break;
		case "newest_first" : $sort_by=' ORDER BY id DESC'; break;
		case "oldest_first" : $sort_by=' ORDER BY id ASC'; break;
	}

	switch($_REQUEST['search_type'])
	{
		case 'links' :
			$query['FROM'] = 'links';
			$search_label=LINKS_LABEL;
		break;
		case 'categories' :
			$query['FROM'] = 'categories';
			$search_label=CATEGORIES_LABEL;
		break;
	}

	$sql_string_limit = $db->query_build($query) or error("Couldn't run the search query sql_string_num", __FILE__, __LINE__);
	unset($query['LIMIT']);
	$results = $db->query_build($query) or error("Couldn't run the search query", __FILE__, __LINE__);

	$row_data_string = "";
	if($db->num_rows($results) > 0 && $_REQUEST['term'] != '')
	{
		$page_number = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : '1';
		$num_rows = $db->num_rows($results);
		$num_pages = ceil($num_rows / $settings['number_of_search_results_per_page']);
		$pages_string = paginate($num_pages, $page_number, 'admin_plugins.php?plugin='.$plugin_name.'&amp;term='.$_REQUEST['term'].'&amp;search_in='.$_REQUEST['search_in'].'&amp;sort_by='.$_REQUEST['sort_by'].'&amp;search_type='.$_REQUEST['search_type'].'&amp;page=#p');

		while($row = $db->fetch_assoc($sql_string_limit))
		{
			if($_REQUEST['search_type'] == 'categories')
			{
				$row['url'] = 'admin_browse.php?id='.$row['id'];
				$admin_controls = '<a href="admin_browse.php?move_cat='.$row['id'].'&amp;id='.$row['father_id'].'&amp;page=0">Move</a> 
				<a href="admin_browse.php?edit_cat='.$row['id'].'&amp;id='.$row['father_id'].'&amp;page=0">Edit</a> 
				<a href="admin_browse.php?delete='.$row['id'].'&amp;id='.$row['father_id'].'&amp;page=0">Delete</a>';
			}
			else
			{
				$admin_controls = '<a href="admin_browse.php?move_link='.$row['id'].'&amp;id='.$row['category_id'].'&amp;page=0">Move</a> 
				<a href="admin_browse.php?edit_link='.$row['id'].'&amp;id='.$row['category_id'].'&amp;page=0">Edit</a> 
				<a href="admin_browse.php?delete_link='.$row['id'].'&amp;id='.$row['category_id'].'&amp;page=0">Delete</a>';
			}
			$row_results .= '<tr class="altstyle"><td class="tcl"><a href="'.$row['url'].'">'.openld_htmlspecialchars($row['title']).'</a><br />' .openld_htmlspecialchars($row['description']). '<br />' .$admin_controls.'</td></tr>';
		}
		$row_results .= '</tbody></table>'.$pages_string;
	}
	else
		$row_results = "No Matches";

	$search_results = '<div class="openld-adblock openld-adform"><h2><span>Searched for "' .$old_term. '"</span></h2><div class="openld-adcontent">' .$row_results. '</div></div>';
}

?><div id="openldbb-admain1" class="openld-adblock openld-adform">
	<h2><span>Search</span></h2>
	<div class="openld-adcontent">
		<form method="POST">
			<div class="adformpanel">
				<fieldset>
					<legend><span>Search for Links or Categories</span></legend>
					<div class="fieldgroup">
						<p>
							<label class="adlabel" for="fld1">Search term</label></ br>
							<span class="adinput"><input type="text" name="term" value="<?php echo $old_term; ?>"></span>
						</p>
						<p>
							<label class="adlabel">Search Options</label><br />
							<span class="adinput">
								<table border="1px">
									<thead>
										<tr>
											<th class="tcl" scope="col">
												Search in
											</th>
											<th class="tcl" scope="col">
												Sort by
											</th>
											<th class="tcl" scope="col">
												Search type
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="tcl">
												<input type="radio" name="search_in" value="title" checked="checked" />
												Title
											</td>
											<td class="tcl">
												<input type="radio" name="sort_by" value="alphabetical" checked="checked" />
												Alphabetical
											</td>
											<td class="tcl">
												<input type="radio" name="search_type" value="links" checked="checked" />
												Links
											</td>
										</tr>
										<tr>
											<td class="tcl">
												<input type="radio" name="search_in" value="description"/>
												Description
											</td>
											<td class="tcl">
												<input type="radio" name="sort_by" value="alphabetical_reversed" />
												Alphabetical reversed
											</td>
											<td class="tcl">
												<input type="radio" name="search_type" value="categories" />
												Categories
											</td>
										</tr>
										<tr>
											<td class="tcl">
												<input type="radio" name="search_in" value="url"/>
												Url
											</td>
											<td class="tcl">
												<input type="radio" name="sort_by" value="newest_first" />
												Newest first
											</td>
											<td class="tcl"></td>
										</tr>
										<tr>
											<td class="tcl"></td>
											<td class="tcl">
												<input type="radio" name="sort_by" value="oldest_first" />
												Oldest first
											</td>
											<td class="tcl"></td>
										</tr>
									</tbody>
								</table>
							</span>
						</p>
					</div>
					<span class="adsubmit"><input type="submit" class="button" value="Search" /></span>
				</fieldset>
			</div>
		</form>
	</div>
	<?php echo $search_results ?>
</div>
</div>