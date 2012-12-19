<?php  ($hook = get_hook('admin_extensions_before_details_if')) ? eval($hook) : null;
if (isset($_GET['install_details']))
{
	$installed = false;
	$ext_data = xml_to_array(@file_get_contents(OPENLD_ROOT.'extensions/'.$_GET['install_details'].'/extension.xml'));
	$manifest_errors = validate_manifest($ext_data, $_GET['install_details']);
	while ($cur_hook = $db->fetch_assoc($result))
		if($_GET['install_details'] === $cur_hook['id'])
			$installed = true;
	if(empty($manifest_errors) && $installed===false) { ?>
	<h2>
		<?php echo DETAILS_LABEL; ?>
	</h2>
	<form accept-charset="utf-8" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<ul>
			<li>
				<?php echo ID_LABEL; ?>: <?php echo $_GET['install_details']; ?>
			</li>
			<li>
				<?php echo TITLE_LABEL; ?>: <?php echo openld_htmlspecialchars($ext_data['extension']['title']); ?>
			</li>
			<li>
				<?php echo VERSION_LABEL; ?>: <?php echo openld_htmlspecialchars($ext_data['extension']['version']); ?>
			</li>
			<li>
				<?php echo AUTHOR_LABEL; ?>: <?php echo openld_htmlspecialchars($ext_data['extension']['author']); ?>
			<li>
				<?php echo DESCRIPTION_LABEL; ?>: <?php echo openld_htmlspecialchars($ext_data['extension']['description']); ?>
			</li>
		</ul>
		<input type="hidden" name="install" value="<?php echo $_GET['install_details']; ?>">
		<input type="submit" value="<?php echo INSTALL_LABEL; ?>" />
	</form>
	<?php  } elseif(empty($manifest_errors) && $installed===true)
		echo '<p>' .sprintf(EXTENSION_ALLREADY_INSTALLED, $_GET['install_details']). '</p>';
	elseif(!empty($manifest_errors) && $installed===false)
		echo '<p>Error: ' .var_export($manifest_errors, true). '</p></div>';
}
elseif(isset($_GET['uninstall_details']))
{
	$installed = false;
	$ext_data = xml_to_array(@file_get_contents(OPENLD_ROOT.'extensions/'.$_GET['uninstall_details'].'/extension.xml'));
	$manifest_errors = validate_manifest($ext_data, $_GET['uninstall_details']);
	while ($cur_hook = $db->fetch_assoc($result))
		if($_GET['uninstall_details'] === $cur_hook['id'])
			$installed = true;
	if(empty($manifest_errors) && $installed===true) { ?>
	<h2>
		<?php echo DETAILS_LABEL; ?>
	</h2>
	<form accept-charset="utf-8" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<ul>
			<li>
				<?php echo ID_LABEL; ?>: <?php echo $_GET['uninstall_details']; ?>
			</li>
			<li>
				<?php echo TITLE_LABEL; ?>: <?php echo openld_htmlspecialchars($ext_data['extension']['title']); ?>
			</li>
			<li>
				<?php echo VERSION_LABEL; ?>: <?php echo openld_htmlspecialchars($ext_data['extension']['version']); ?>
			</li>
			<li>
				<?php echo AUTHOR_LABEL; ?>: <?php echo openld_htmlspecialchars($ext_data['extension']['author']); ?>
			</li>
			<li>
				<?php echo DESCRIPTION_LABEL; ?>: <?php echo openld_htmlspecialchars($ext_data['extension']['description']); ?>
			</li>
		</ul>
		<input type="hidden" name="uninstall" value="<?php echo $_GET['uninstall_details']; ?>">
		<input type="submit" value="<?php echo UNINSTALL_LABEL; ?>" />
	</form>
	<?php } elseif(empty($manifest_errors) && $installed===false)
		echo '<p>Error: the extension ' .$_GET['uninstall_details']. ' is not installed</p>';
	elseif(!empty($manifest_errors) && $installed===true)
		echo '<p>Error: ' .var_export($manifest_errors, true). '</p></div>';
}
elseif(isset($_GET['edit']) || isset($_GET['edit_free']))
{
?>
<h2>
	<?php echo EDIT_EXTENSION; ?>
</h2>
<form accept-charset="utf-8" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<?php  if(isset($_GET['edit']) && is_writable(OPENLD_ROOT.'extensions/'.$_GET['edit'].'/extension.xml')){
	$ext_data = xml_to_array(@file_get_contents(OPENLD_ROOT.'extensions/'.$_GET['edit'].'/extension.xml'));
	$manifest_errors = validate_manifest($ext_data, $_GET['edit']);
	?>
	<table>
		<tr>
			<td>
				<?php echo ID_LABEL; ?>
			</td>
			<td>
				<input type="text" name="id_edit" value="<?php echo openld_htmlspecialchars($_GET['edit']); ?>" size="50" maxlength="255" />
				<?php echo $error->get_warning('id_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo TITLE_LABEL; ?>
			</td>
			<td>
				<input type="text" name="title" value="<?php echo openld_htmlspecialchars($ext_data['extension']['title']); ?>" size="50" maxlength="255" />
				<?php echo $error->get_warning('title_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo VERSION_LABEL; ?>
			</td>
			<td>
				<input type="text" name="version" size="50" maxlength="255" value="<?php echo openld_htmlspecialchars($ext_data['extension']['version']); ?>" />
				<?php echo $error->get_warning('version_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo AUTHOR_LABEL; ?>
			</td>
			<td>
				<input type="text" name="author" size="50" maxlength="255" value="<?php echo openld_htmlspecialchars($ext_data['extension']['author']); ?>" />
				<?php echo $error->get_warning('author_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo DESCRIPTION_LABEL; ?>
			</td>
			<td>
				<textarea name="description" rows="10" cols="75"><?php echo openld_htmlspecialchars($ext_data['extension']['description']); ?></textarea>
				<?php echo $error->get_warning('description_warning'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo HOOKS; ?>
			</td>
			<td>
				<textarea name="hooks" rows="10" cols="75">
				<?php
					$_ext_doc = fopen(OPENLD_ROOT.'extensions/'.$_GET['edit'].'/extension.xml', 'r');
					$_ext_raw = fread($_ext_doc, filesize(OPENLD_ROOT.'extensions/'.$_GET['edit'].'/extension.xml'));
					fclose($_ext_doc);
					$_ext_raw = str_replace('\n\t\t', '\n', $_ext_raw);
					echo preg_replace(array('#<\?xml(.*?)<hooks>#s', '#</hooks>(.*?)</extension>#s'), '', $_ext_raw);
				?>
				</textarea>
				<?php echo $error->get_warning('hook_warning'); ?>
			</td>
		</tr>
	</table>
	<input type="hidden" name="the_ext_file" value="<?php echo $_GET['edit']; ?>" />
	<input type="submit" name="edit_ext" value="<?php echo SAVE_BUTTON; ?>" />
	<?php } elseif(isset($_GET['edit_free']) && is_writable(OPENLD_ROOT.'extensions/'.$_GET['edit_free'].'/extension.xml')){
	$ext_data = xml_to_array(@file_get_contents(OPENLD_ROOT.'extensions/'.$_GET['edit_free'].'/extension.xml'));
	$manifest_errors = validate_manifest($ext_data, $_GET['edit_free']);
	$_ext_doc = fopen(OPENLD_ROOT.'extensions/'.$_GET['edit_free'].'/extension.xml', 'r');
	$_ext_raw = fread($_ext_doc, filesize(OPENLD_ROOT.'extensions/'.$_GET['edit_free'].'/extension.xml'));
	fclose($_ext_doc); ?>
	<textarea name="free_edit" rows="25" cols="75"><?php echo $_ext_raw; ?></textarea></div>
	<input type="hidden" name="the_ext_file_free" value="<?php echo $_GET['edit_free']; ?>" />
	<br />
	<input type="submit" name="edit_ext" value="<?php echo SAVE_BUTTON; ?>" />
	<?php } else { ?>
		<?php $perm_file = OPENLD_ROOT.'extensions/'.(isset($_GET['edit']) ? $_GET['edit'] : $_GET['edit_free'])."/extension.xml"; ?>
		<?php echo sprintf(EXTENSION_PERMISSION_WARNING, $perm_file); ?>
	<?php } ?>
</form>
<?php } elseif((isset($_GET['edit']) || isset($_GET['edit_free'])) && is_writable(OPENLD_ROOT.'extensions/'.$_GET['edit'].'/extension.xml')) { ?>
<h2>
	<?php echo EDIT_EXTENSION; ?>
</h2>
<form accept-charset="utf-8" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?php } else { $directory = opendir(OPENLD_ROOT. 'extensions/'); ?>
<h2>
	<?php echo AVAILABLE_EXTENSIONS_FOR_INSTALL; ?>
</h2>
<?php ($hook = get_hook('admin_extensions_before_not_installed_extensions')) ? eval($hook) : null;
	while (false !== ($file = readdir($directory)))
	{
		if(openld_is_dir(OPENLD_ROOT. 'extensions/'. $file))
		{
			$query['WHERE'] = 'id="'. $file .'"';
			($hook = get_hook('admin_extensions_install_check_sql')) ? eval($hook) : null;
			$install_check = $db->query_build($query) or error(__FILE__, __LINE__);
			$installed = ($db->num_rows($install_check) == 1) ? true : false;

			if(is_file(OPENLD_ROOT. 'extensions/'. $file. '/extension.xml') && $installed===false) { ?>
			<?php if(!isset($is_not_installed)) { ?>
			<table cellspacing="0" summary="">
				<thead>
					<tr>
							<th><?php echo TITLE_LABEL; ?></th>
							<th><?php echo DETAILS_LABEL; ?></th>
							<th><?php echo EDIT_LABEL; ?></th>
							<th><?php echo INSTALL_LABEL; ?></th>
					</tr>
				</thead>
				<tbody>
					<?php } $is_not_installed = true; ?>
					<tr>
						<td>
							<?php echo get_ext_title($file); ?>
						</td>
						<td>
							<a href="<?php echo $_SERVER['PHP_SELF']; ?>?install_details=<?php echo $file; ?>"><?php echo DETAILS_LABEL; ?></a>
						</td>
						<td>
							<a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit=<?php echo $file; ?>"><?php echo SIMPLE_LABEL; ?></a> |
							<a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit_free=<?php echo $file; ?>"><?php echo FREE_LABEL; ?></a>
						</td>
						<td>
							<a href="<?php echo $_SERVER['PHP_SELF']; ?>?install=<?php echo $file; ?>"><?php echo INSTALL_LABEL; ?></a>
						</td>
					</tr>
				<?php }
				elseif(!is_file(OPENLD_ROOT. 'extensions/'. $file. '/extension.xml') && $installed===false)
					echo '<p>' .sprintf(EXTENSION_FILE_NOT_FOUND, $file. '/extension.xml'). '</p>';
			}
		}
		closedir($directory);
		($hook = get_hook('admin_extensions_after_not_installed_extensions')) ? eval($hook) : null;

		if(!isset($is_not_installed))
			echo '<p>' .NO_EXTENSIONS_FOR_INSTALL. '</p>';
		else
			echo '</tbody></table>';
		?>
	<h2>
		<?php echo EDIT_EXTENSIONS; ?>
	</h2>
	<?php
		($hook = get_hook('admin_extensions_before_installed_extensions')) ? eval($hook) : null;
		$directory = opendir(OPENLD_ROOT. 'extensions/');
		while (false !== ($file = readdir($directory)))
		{
			if(is_dir(OPENLD_ROOT. 'extensions/'. $file))
			{
				$query['WHERE'] = 'id="'. $file .'"';
				($hook = get_hook('admin_extensions_install_check_sql_2')) ? eval($hook) : null;
				$install_check = $db->query_build($query) or error(__FILE__, __LINE__);
				$installed = ($db->num_rows($install_check) == 1) ? true : false;

				if(is_file(OPENLD_ROOT. 'extensions/'. $file. '/extension.xml') && $installed===true) { ?>
					<?php  if(!isset($is_installed)) { ?>
					<table cellspacing="0" summary="">
						<thead>
							<tr>
								<th><?php echo TITLE_LABEL; ?></th>
								<th><?php echo DETAILS_LABEL; ?></th>
								<th><?php echo EDIT_LABEL; ?></th>
								<th><?php echo UNINSTALL_LABEL; ?></th>
							</tr>
						</thead>
						<tbody>
						<?php  } $is_installed = true; ?>
							<tr>
								<td>
									<?php echo get_ext_title($file); ?>
								</td>
								<td>
									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?uninstall_details=<?php echo $file; ?>"><?php echo DETAILS_LABEL; ?></a></td>
								<td>
									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit=<?php echo $file; ?>"><?php echo SIMPLE_LABEL; ?></a> |
									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit_free=<?php echo $file; ?>"><?php echo FREE_LABEL; ?></a>
								</td>
								<td>
									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?uninstall=<?php echo $file; ?>"><?php echo UNINSTALL_LABEL; ?></a>
								</td>
							</tr>
				<?php }
				elseif(!is_file(OPENLD_ROOT. 'extensions/'. $file. '/extension.xml') && $installed===true)
					echo '<p>' .sprintf(EXTENSION_FILE_NOT_FOUND, $file. '/extension.xml'). '</p>';
			}
		}
		($hook = get_hook('admin_extensions_after_installed_extensions')) ? eval($hook) : null;
		closedir($directory);

		if(!isset($is_installed))
			echo '<p>' .NO_INSTALLED_EXTENSIONS. '</p>';
		else
			echo '</tbody></table>';

		if($settings['disable_extensions'] != 'N')
			echo '<br /><p>' .EXTENSIONS_DISABLED. '</p>';
		?>
</div>
<?php } ($hook = get_hook('admin_extensions_after_details_if')) ? eval($hook) : null; ?>