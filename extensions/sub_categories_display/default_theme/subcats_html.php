<br /> (
	<?php while($sub_category_array = $db->fetch_assoc($sql)) {
		$category_link = openld_link('index_cat', array(
			$sub_category_array['id'], 
			str_replace(' ', '-', $sub_category_array['title'])
		));
		echo (($first == false) ? ', ' : ''). '<a href="' .$category_link. '">' .openld_htmlspecialchars($sub_category_array['title']). '</a>';
		$first = false;
	} ?>
)<br />