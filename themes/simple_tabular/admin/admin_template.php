<h2>
	<?php echo TEMPLATES_TITLE; ?>
</h2>
<?php if(isset($_GET['edit_file'])) { ?>
	<form accept-charset="utf-8" method="post" action="admin_template.php?edit=<?php echo $_GET['template']; ?>">
		<h3><?php echo EDIT_LABEL; ?>: <?php echo $_GET['template']; ?><?php echo $f_names[$_REQUEST['edit_file']]['filename']; ?></h3>
		<textarea name="filetext" rows="25" cols="75" id="start_input"><br /><?php
		$t_file = fopen(OPENLD_ROOT.'themes/'.$_GET['template'].'/' .$f_names[$_REQUEST['edit_file']]['filename'], 'r');
		echo openld_htmlspecialchars(fread($t_file, filesize(OPENLD_ROOT.'themes/'.$_GET['template'].'/' .$f_names[$_REQUEST['edit_file']]['filename'])));
		fclose($t_file);
		?></textarea>
		<input type="hidden" name="id" value="<?php echo $_REQUEST['edit_file']; ?>" />
		<br /><br />
		<input type="submit" name="edited_link" value="<?php echo SAVE_BUTTON; ?>" />
	</form>
<?php } elseif(isset($_GET['edit'])) { ?>
	<h3><?php echo EDIT_TEMPLATE; ?>: <?php echo $_GET['edit']; ?></h3>
	<table>
		<tr>
			<td><?php echo FILE_LABEL; ?></td>
			<td><?php echo EDIT_LABEL; ?></td>
			<td><?php echo REMOVE; ?></td>
			<td><?php echo PERMISSION_LABEL; ?></td>
		</tr>
		<?php foreach($f_names as $f_name) { ?>
		<tr>
			<td align="center"><?php echo $f_name['filename']; ?></td>
			<td align="center"><a href="<?php echo $settings['domain']; ?>/admin_template.php?template=<?php echo $_GET['edit']; ?>&edit_file=<?php echo $f_name['id']; ?>"><?php echo EDIT_LABEL; ?></a></td>
			<td align="center"><a href="<?php echo $settings['domain']; ?>/admin_template.php?edit=<?php echo $_GET['edit']; ?>&remove_file=<?php echo $f_name['id']; ?>"><?php echo REMOVE; ?></a></td>
			<td align="center"><?php echo $f_name['permission']; ?></td>
		</tr>
		<?php } ?>
	</table>
	<?php } else { ?>
<form action="admin_template.php" accept-charset="utf-8" method="post">
	<h3><?php echo CHOSE_TEMPLATE; ?></h3>
	<table>
		<tr>
			<td width="50px"><?php echo DIRECTORY_LABEL; ?></td>
			<td width="50px"><?php echo ADMIN_LABEL; ?></td>
			<td width="322px"><?php echo THUMBNAIL_PREVIEW; ?></td>
			<td><?php echo INFO; ?></td>
		</tr>
		<?php ($hook = get_hook('admin_template_data_header')) ? eval($hook) : null; ?>
		<?php if(isset($real_dirs)) { ?>
		<?php foreach($real_dirs as $template_path) { ?>
		<?php $xml_data = xml_to_array(@file_get_contents(OPENLD_ROOT.'themes/'.$template_path.'/theme.xml')); ?>
		<tr>
			<td>
				<input type="radio" value="<?php echo $template_path; ?>/" name="template"<?php echo ($settings['template_path'] == $template_path. '/' ? ' checked="checked"' : ''); ?> />
			</td>
			<td>
				<?php if($admin_dirs[$template_path]=='true') { ?>
				<input type="radio" value="<?php echo $template_path ?>/" name="admin_template"<?php echo ($settings['admin_template_path'] == $template_path. '/' ? ' checked="checked"' : ''); ?> />
				<?php } ?>
			</td>
			<td>
				<img src="<?php echo (is_file(OPENLD_ROOT. "themes/".$template_path. "/thumb.png") ? OPENLD_ROOT. "themes/".$template_path. "/thumb.png" : OPENLD_ROOT. "files/no-image.png"); ?>" alt="<?php echo (isset($xml_data['theme']['title']) ? $xml_data['theme']['title'] : ''); ?>" />
			</td>
			<td>
				<?php ($hook = get_hook('admin_template_cell')) ? eval($hook) : null; ?>
				<b><?php echo TITLE_LABEL; ?>: </b>
				<?php echo (isset($xml_data['theme']['title']) ? $xml_data['theme']['title'] : ''); ?><br />
				<b><?php echo DESCRIPTION_LABEL; ?>: </b>
				<?php echo (isset($xml_data['theme']['description']) ? $xml_data['theme']['description'] : ''); ?><br />
				<b><?php echo AUTHOR_LABEL; ?>: </b>
				<?php echo (isset($xml_data['theme']['author']) ? $xml_data['theme']['author'] : ''); ?><br />
				<b><?php echo VERSION_LABEL; ?>: </b>
				<?php echo (isset($xml_data['theme']['version']) ? $xml_data['theme']['version'] : ''); ?>
				<br /><br /><a href="<?php echo $settings['domain']; ?>/admin_template.php?edit=<?php echo $template_path; ?>"><?php echo EDIT_LABEL; ?></a>
			</td>
		</tr>
		<?php }} else echo NO_TEMPLATES_WERE_FOUND ?>
		<?php ($hook = get_hook('admin_template_data_footer')) ? eval($hook) : null; ?>
	</table>
	<input type="submit" value="<?php echo TEMPLATE_SUBMIT; ?>" />
	<?php } ?>
</form>
