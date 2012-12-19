<div id="openldbb-admain1" class="openld-adblock openld-adform"><h2><span>Backup</span></h2><div class="openld-adcontent"><b>Categories and Links</b>

<textarea rows="20" cols="75"><?php
while($cat = $db->fetch_assoc($categories_sql))
	echo 'INSERT INTO '. $db->prefix .'categories (id, father_id, title, description, active, last_update, created, ip, position) VALUES (' .$cat['id']. ', ' .$cat['father_id']. ', "' .$cat['title']. '", "' .$cat['description']. '", ' .$cat['active']. ', "' .$cat['last_update']. '", "' .$cat['created']. '", "' .$cat['ip']. '", ' .$cat['position']. ');
';
while($link = $db->fetch_assoc($links_sql))
	echo 'INSERT INTO '. $db->prefix .'links (id, name, email, url, title, description, active, ip, category_id, date_submitted, reciprocal_url, type, payment_status, position) VALUES (' .$link['id']. ', "' .$link['name']. '", "' .$link['email']. '",  "' .$link['url']. '", "' .$link['title']. '", "' .$link['description']. '", ' .$link['active']. ', "' .$link['ip']. '", ' .$link['category_id']. ', "' .$link['date_submitted']. '", "' .$link['reciprocal_url']. '", "' .$link['type']. '", "' .$link['payment_status']. '", ' .$link['position']. ');
'; ?></textarea></div></div>
