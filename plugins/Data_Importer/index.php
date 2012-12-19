<?php 
	$page = '../../plugins/Data_Importer/importer.php';
	$imp_result = "";

	if(!empty($_POST))
	{	
		//Create backup fields incase that the user would like to put the directory stuff somewhere else
		$db->add_field('categories', 'old_id_backup', 'INT(10) UNSIGNED');
		$db->add_field('links', 'old_category_id_backup', 'INT(10) UNSIGNED');
		
		//New old_id column. Should be removed when we are finnished
		$db->add_field('categories', 'old_id', 'INT(10) UNSIGNED');

		//create a new db object for the import
		$imp = new DBLayer($db_host, $db_username, $db_password, $_POST['database'], $_POST['prefix'], false);

		if($_POST['directory_script'] == 'phpld')
		{
			//collect category data
			$query = array(
				'SELECT' => 'ID, TITLE, DESCRIPTION, PARENT_ID, DATE_ADDED',
				'FROM' => 'PLD_CATEGORY'
			);
			$cat_query = $imp->query_build($query ) or error(__FILE__, __LINE__);
			//collect link data
			$query = array(
				'SELECT' => 'TITLE, DESCRIPTION, URL, CATEGORY_ID, RECPR_URL, OWNER_NAME, OWNER_EMAIL, IPADDRESS, DATE_ADDED',
				'FROM' => 'PLD_LINK'
			);
			$link_query = $imp->query_build($query) or error(__FILE__, __LINE__);

			//DBlayers switched table, so $db must be re-introduced
			$db = new DBLayer($db_host, $db_username, $db_password, $db_name, $db_prefix, false);

			while($row = $imp->fetch_assoc($cat_query))
			{
				$query = array(
					'INSERT' => 'title, description, active, father_id, created, old_id, old_id_backup',
					'INTO' => 'categories',
					'VALUES' => '"'. $row['TITLE'] .'", "'. $row['DESCRIPTION'] .'", 1, "'. $row['PARENT_ID'] .'", "'. $row['DATE_ADDED']. '", "'. $row['ID'] .'", "'. $row['ID'] .'"'
				);
				$db->query_build($query) or error(__FILE__, __LINE__);
			}
			
			while($lrow = $imp->fetch_assoc($link_query))
			{
				$query = array(
					'SELECT' => 'id',
					'FROM' => 'categories',
					'WHERE' => 'old_id=' .$lrow['CATEGORY_ID']
				);
				$new_cat_id = $db->query_build($query) or error(__FILE__, __LINE__);
				$new_cat_id = $db->fetch_row($new_cat_id);

				$query = array(
					'INSERT' => 'name, email, title, url, description, active, category_id, ip, date_submitted, type, payment_status, old_category_id_backup',
					'INTO' => 'links',
					'VALUES' => '"' .$lrow['OWNER_NAME']. '", "' .$lrow['OWNER_EMAIL']. '", "' .$lrow['TITLE']. '", "' .$lrow['URL']. '", "' .$lrow['DESCRIPTION']. '", 1, ' .$new_cat_id[0]. ',  "' .$lrow['IPADDRESS']. '",  "' .$lrow['DATE_ADDED']. '", "a", "ok", ' .$lrow['CATEGORY_ID']
				);
				$db->query_build($query) or error(__FILE__, __LINE__);
			}

			//re-sort father_ids
			$query = array(
				'UPDATE' => 'categories',
				'SET' => 'father_id=' .intval($_POST['category_id']),
				'WHERE' => 'father_id=0 AND old_id<>0'
			);
			$db->query_build($query) or error(__FILE__, __LINE__);

			$query = array(
				'SELECT' => 'id, father_id, old_id',
				'FROM' => 'categories',
				'WHERE' => 'father_id <> ' .intval($_POST['category_id']). ' AND old_id<>0',
				'ORDER BY' => 'father_id ASC'
			);
			$sql_resort = $db->query_build($query) or error(__FILE__, __LINE__);

			while($res = $db->fetch_assoc($sql_resort))
			{
				$query = array(
					'SELECT' => 'id',
					'FROM' => 'categories',
					'WHERE' => 'old_id=' .$res['father_id']
				);
				$get_id = $db->query_build($query) or error(__FILE__, __LINE__);
				$get_id = $db->fetch_row($get_id);

				$query = array(
					'UPDATE' => 'categories',
					'SET' => 'father_id=' .intval($get_id[0]),
					'WHERE' => 'id='. $res['id']
				);
				$db->query_build($query) or error(__FILE__, __LINE__);
			}

			$imp_result = "Links and categories have now been imported from phpLD";
		}
		elseif($_POST['directory_script'] == 'fpds')
		{
			//collect category data
			$query = array(
				'SELECT' => 'id, title, description, ref',
				'FROM' => 'categories'
			);
			$cat_query = $imp->query_build($query) or error(__FILE__, __LINE__);
			//collect link data
			$query = array(
				'SELECT' => 'id, title, description, url, category, ip, accepted',
				'FROM' => 'pages'
			);
			$link_query = $imp->query_build($query) or error(__FILE__, __LINE__);

			//DBlayers switched table, so $db must be re-introduced
			$db = new DBLayer($db_host, $db_username, $db_password, $db_name, $db_prefix, false);

			while($row = $imp->fetch_assoc($cat_query))
			{
				$query = array(
					'INSERT' => 'title, description, active, father_id, old_id, old_id_backup',
					'INTO' => 'categories',
					'VALUES' => '"'. $row['title'] .'", "'. $row['description'] .'", 1, "'. $row['ref'] .'", "'. $row['id'] .'", "'. $row['id'] .'"'
				);
				$db->query_build($query) or error(__FILE__, __LINE__);
			}
			
			while($lrow = $imp->fetch_assoc($link_query))
			{
				$query = array(
					'SELECT' => 'id',
					'FROM' => 'categories',
					'WHERE' => 'old_id=' .$lrow['ref']
				);
				$new_cat_id = $db->query_build($query) or error(__FILE__, __LINE__);
				$new_cat_id = $db->fetch_row($new_cat_id);

				$query = array(
					'INSERT' => 'title, url, description, active, category_id, ip, type, payment_status, old_category_id_backup',
					'INTO' => 'links',
					'VALUES' => '"' .$lrow['title']. '", "' .$lrow['url']. '", "' .$lrow['description']. '", ' .(($lrow['accepted'] == 'y') ? 1 : 0). ', ' .$new_cat_id[0]. ',  "' .$lrow['ip']. '", "a", "ok", ' .$lrow['category']
				);
				$db->query_build($query) or error(__FILE__, __LINE__);
			}

			//re-sort father_ids
			$query = array(
				'UPDATE' => 'categories',
				'SET' => 'father_id=' .intval($_POST['category_id']),
				'WHERE' => 'father_id=0 AND old_id<>0'
			);
			$db->query_build($query) or error(__FILE__, __LINE__);

			$query = array(
				'SELECT' => 'id, father_id, old_id',
				'FROM' => 'categories',
				'WHERE' => 'father_id <> ' .intval($_POST['category_id']). ' AND old_id<>0 ORDER BY father_id ASC'
			);
			$sql_resort = $db->query_build($query) or error(__FILE__, __LINE__);

			while($res = $db->fetch_assoc($sql_resort))
			{
				$query = array(
					'SELECT' => 'id',
					'FROM' => 'categories',
					'WHERE' => 'old_id=' .$res['father_id']
				);
				$get_id = $db->query_build($query) or error(__FILE__, __LINE__);
				$get_id = $db->fetch_row($get_id);

				$query = array(
					'UPDATE' => 'categories',
					'SET' => 'father_id=' .intval($get_id[0]),
					'WHERE' => 'id=' .$res['id']
				);
				$db->query_build($query) or error(__FILE__, __LINE__);
			}

			$imp_result = "Links and categories have now been imported from Free PHP Directory Script";
		}
		else
			$imp_result = "Script '" .$_POST['directory_script']. "' is not supported";

		$db->drop_field('categories', 'old_id');
	}