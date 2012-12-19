<?php ($hook = get_hook('admin_extensions_before_details_if')) ? eval($hook) : null;
if (isset($_GET['install_details']))
{
	$installed = false;
	$ext_data = xml_to_array(@file_get_contents(OPENLD_ROOT.'extensions/'.$_GET['install_details'].'/extension.xml'));
	$manifest_errors = validate_manifest($ext_data, $_GET['install_details']);
	while ($cur_hook = $db->fetch_assoc($result))
		if($_GET['install_details'] === $cur_hook['id'])
			$installed = true;
	if(empty($manifest_errors) && $installed===false)
	{
		?><div class="openld-adblock openld-adform">
			<h2>
				<span>
					<?php echo DETAILS_LABEL; ?>
				</span>
			</h2>
			<form class="openld-adcontent" accept-charset="utf-8" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="adformpanel">
					<fieldset>
						<legend>
							<span>
								<?php echo ID_LABEL; ?>: 
								<?php echo $_GET['install_details']; ?>
							</span>
						</legend>
						<ul class="datalist">
							<li class="datafield">
								<strong>
									<?php echo TITLE_LABEL; ?>:
								</strong> 
								<span class="adinput">
									<?php echo openld_htmlspecialchars($ext_data['extension']['title']); ?>
								</span>
							</li>
							<li class="datafield">
								<strong>
									<?php echo VERSION_LABEL; ?>:
								</strong> 
								<span class="adinput">
									<?php echo openld_htmlspecialchars($ext_data['extension']['version']); ?>
								</span>
							</li>
							<li class="datafield">
								<strong>
									<?php echo AUTHOR_LABEL; ?>:
								</strong> 
								<span class="adinput">
									<?php echo openld_htmlspecialchars($ext_data['extension']['author']); ?>
								</span>
							</li>
							<li class="datafield">
								<strong>
									<?php echo DESCRIPTION_LABEL; ?>:
								</strong> 
								<span class="adinput">
									<?php echo openld_htmlspecialchars($ext_data['extension']['description']); ?>
								</span>
							</li>
						</ul>
					</fieldset>
				</div>
				<input type="hidden" name="install" value="<?php echo $_GET['install_details']; ?>">
				<p class="adformsubmit">
					<input type="submit" value="<?php echo INSTALL_LABEL; ?>" />
				</p>
			</form>
		</div>
	<?php } elseif(empty($manifest_errors) && $installed===true)
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
		<div class="openld-adblock openld-adform">
			<h2>
				<span>
					<?php echo DETAILS_LABEL; ?>
				</span>
			</h2>
			<form class="openld-adcontent" accept-charset="utf-8" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="adformpanel">
					<fieldset>
						<legend>
							<span>
								<?php echo ID_LABEL; ?>: 
								<?php echo $_GET['uninstall_details']; ?>
							</span>
						</legend>
						<ul class="datalist">
							<li class="datafield">
								<strong>
									<?php echo TITLE_LABEL; ?>:
								</strong> 
								<span class="adinput">
									<?php echo openld_htmlspecialchars($ext_data['extension']['title']); ?>
								</span>
							</li>
							<li class="datafield">
								<strong>
									<?php echo VERSION_LABEL; ?>:
								</strong> 
								<span class="adinput">
									<?php echo openld_htmlspecialchars($ext_data['extension']['version']); ?>
								</span>
							</li>
							<li class="datafield">
								<strong>
									<?php echo AUTHOR_LABEL; ?>:
								</strong> 
								<span class="adinput">
									<?php echo openld_htmlspecialchars($ext_data['extension']['author']); ?>
								</span>
							</li>
							<li class="datafield">
								<strong>
									<?php echo DESCRIPTION_LABEL; ?>:
								</strong> 
								<span class="adinput">
									<?php echo openld_htmlspecialchars($ext_data['extension']['description']); ?>
								</span>
							</li>
						</ul>
					</fieldset>
				</div>
				<input type="hidden" name="uninstall" value="<?php echo $_GET['uninstall_details']; ?>">
				<p class="adformsubmit">
					<input type="submit" value="<?php echo UNINSTALL_LABEL; ?>" />
				</p>
			</form>
		</div>
	<?php }
	elseif(empty($manifest_errors) && $installed===false)
		echo '<p>Error: the extension ' .$_GET['uninstall_details']. ' is not installed</p>';
	elseif(!empty($manifest_errors) && $installed===true)
		echo '<p>Error: ' .var_export($manifest_errors, true). '</p></div>';
}
elseif(isset($_GET['edit']) || isset($_GET['edit_free']))
{
?>
<div class="openld-adblock openld-adform">
	<h2>
		<span>
			<?php echo EDIT_EXTENSION; ?>
		</span>
	</h2>
	<form class="openld-adcontent" accept-charset="utf-8" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<?php if(isset($_GET['edit']) && is_writable(OPENLD_ROOT.'extensions/'.$_GET['edit'].'/extension.xml')){ 
		$ext_data = xml_to_array(@file_get_contents(OPENLD_ROOT.'extensions/'.$_GET['edit'].'/extension.xml'));
		$manifest_errors = validate_manifest($ext_data, $_GET['edit']);
		?>
		<div class="adformpanel">
			<fieldset id="admin-welcome">
				<legend>
					<span>
						<?php echo EDIT_LABEL; ?>: <?php echo $_GET['edit']; ?>
					</span>
				</legend>
				<div class="fieldgroup">
					<p>
						<label class="adlabel">
							<?php echo ID_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="id_edit" value="<?php echo openld_htmlspecialchars($_GET['edit']); ?>" size="50" maxlength="255" id="start_input" />
							<br />
							<em>
								<?php echo $error->get_warning('id_warning'); ?>
							</em>
						</span>
					</p>
					<p>
						<label class="adlabel">
							<?php echo TITLE_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="title" value="<?php echo openld_htmlspecialchars($ext_data['extension']['title']); ?>" size="50" maxlength="255" />
							<br />
							<em>
								<?php echo $error->get_warning('title_warning'); ?>
							</em>
						</span>
					</p>
					<p>
						<label class="adlabel">
							<?php echo VERSION_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="version" size="50" maxlength="255" value="<?php echo openld_htmlspecialchars($ext_data['extension']['version']); ?>" />
							<br />
							<em>
								<?php echo $error->get_warning('version_warning'); ?>
							</em>
						</span>
					</p>
					<p>
						<label class="adlabel">
							<?php echo AUTHOR_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="author" size="50" maxlength="255" value="<?php echo openld_htmlspecialchars($ext_data['extension']['author']); ?>" />
							<br />
							<em>
								<?php echo $error->get_warning('author_warning'); ?>
							</em>
						</span>
					</p>
	<p>
						<label class="adlabel">
							<?php echo DESCRIPTION_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<textarea name="description" rows="10" cols="75"><?php echo openld_htmlspecialchars($ext_data['extension']['description']); ?></textarea>
							<br />
							<em>
								<?php echo $error->get_warning('description_warning'); ?>
							</em>
						</span>
					</p>
					<p>
						<label class="adlabel">
							<?php echo HOOKS; ?>
						</label>
						<br />
						<span class="adinput">
							<textarea name="hooks" rows="10" cols="75">
							<?php
								$_ext_doc = fopen(OPENLD_ROOT.'extensions/'.$_GET['edit'].'/extension.xml', 'r');
								$_ext_raw = fread($_ext_doc, filesize(OPENLD_ROOT.'extensions/'.$_GET['edit'].'/extension.xml'));
								fclose($_ext_doc);
								$_ext_raw = str_replace('\n\t\t', '\n', $_ext_raw);
							echo preg_replace(array('#<\?xml(.*?)<hooks>#s', '#</hooks>(.*?)</extension>#s'), '', $_ext_raw); ?>
							</textarea>
							<br />
							<em>
								<?php echo $error->get_warning('hook_warning'); ?>
							</em>
						</span>
					</p>
				</div>
			</fieldset>
			<br />	
			<input type="hidden" name="the_ext_file" value="<?php echo $_GET['edit']; ?>" />
			<input type="submit" name="edit_ext" value="<?php echo SAVE_BUTTON; ?>" />
		</div>
		<?php } elseif(isset($_GET['edit_free']) && is_writable(OPENLD_ROOT.'extensions/'.$_GET['edit_free'].'/extension.xml')){ 
			$ext_data = xml_to_array(@file_get_contents(OPENLD_ROOT.'extensions/'.$_GET['edit_free'].'/extension.xml'));
			$manifest_errors = validate_manifest($ext_data, $_GET['edit_free']);
			$_ext_doc = fopen(OPENLD_ROOT.'extensions/'.$_GET['edit_free'].'/extension.xml', 'r');
			$_ext_raw = fread($_ext_doc, filesize(OPENLD_ROOT.'extensions/'.$_GET['edit_free'].'/extension.xml'));
			fclose($_ext_doc);
		?>
		<div class="adformpanel">
			<fieldset id="admin-welcome">
				<legend>
					<span>
						<?php echo EDIT_LABEL; ?>: <?php echo $_GET['edit_free']; ?>
					</span>
				</legend>
				<div>
					<textarea name="free_edit" rows="25" cols="75" id="start_input"><?php echo $_ext_raw; ?></textarea>
				</div>
				<input type="hidden" name="the_ext_file_free" value="<?php echo $_GET['edit_free']; ?>" />
				<br />
			</fieldset>
			<br />
			<input type="submit" name="edit_ext" value="<?php echo SAVE_BUTTON; ?>" />
		</div>
		<?php } else { ?>
			<?php $perm_file = OPENLD_ROOT.'extensions/'.(isset($_GET['edit']) ? $_GET['edit'] : $_GET['edit_free'])."/extension.xml"; ?>
			<?php echo sprintf(EXTENSION_PERMISSION_WARNING, $perm_file); ?>
		<?php } ?>
	</form>
</div>
<?php

}
elseif((isset($_GET['edit']) || isset($_GET['edit_free'])) && is_writable(OPENLD_ROOT.'extensions/'.$_GET['edit'].'/extension.xml'))
{
?>
	<div class="openld-adblock openld-adform">
	<h2>
		<span>
			<?php echo EDIT_EXTENSION; ?>
		</span>
	</h2>
	<form class="openld-adcontent" accept-charset="utf-8" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="adformpanel">
<?php
}
else
{

$directory = opendir(OPENLD_ROOT. 'extensions/');
?>
<div class="openld-adblock openld-adform">
	<h2>
		<span>
			<?php echo AVAILABLE_EXTENSIONS_FOR_INSTALL; ?>
		</span>
	</h2>
	<div class="openld-adcontent">
		<?php
		($hook = get_hook('admin_extensions_before_not_installed_extensions')) ? eval($hook) : null;
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
							<td align="center">
								<?php echo get_ext_title($file); ?>
							</td>
							<td align="center">
								<a href="<?php echo $_SERVER['PHP_SELF']; ?>?install_details=<?php echo $file; ?>"><?php echo DETAILS_LABEL; ?></a>
							</td>
							<td align="center">
								<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit=<?php echo $file; ?>"><?php echo SIMPLE_LABEL; ?></a> | -->
								<a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit_free=<?php echo $file; ?>"><?php echo EDIT_LABEL; ?></a>
							</td>
							<td align="center">
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
	</div>
</div>
<div class="openld-adblock openld-adform">
	<h2>
		<span>
			<?php echo EDIT_EXTENSIONS; ?>
		</span>
	</h2>
	<div class="openld-adcontent">
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
					<?php if(!isset($is_installed)) { ?>
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
						<?php } $is_installed = true; ?>
							<tr>
								<td align="center">
									<?php echo get_ext_title($file); ?>
								</td>
								<td align="center">
									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?uninstall_details=<?php echo $file; ?>"><?php echo DETAILS_LABEL; ?></a></td>
								<td align="center">
									<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit=<?php echo $file; ?>"><?php echo SIMPLE_LABEL; ?></a> | -->
									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit_free=<?php echo $file; ?>"><?php echo FREE_LABEL; ?></a>
								</td>
								<td align="center">
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
</div>
<?php } ($hook = get_hook('admin_extensions_after_details_if')) ? eval($hook) : null; ?>
