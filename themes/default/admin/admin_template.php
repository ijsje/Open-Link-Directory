<div class="openld-adblock openld-adform">
	<h2>
		<span>
			<?php echo TEMPLATES_TITLE; ?>
		</span>
	</h2>
	<?php if(isset($_GET['edit_file'])) { ?>
	<form class="openld-adcontent" accept-charset="utf-8" method="post" action="admin_template.php?edit=<?php echo $_GET['template']; ?>">
		<div class="adformpanel">
			<fieldset id="admin-welcome">
				<legend>
					<span>
						<?php echo EDIT_LABEL; ?>: <?php echo $_GET['template']; ?><?php echo $f_names[$_REQUEST['edit_file']]['filename']; ?>
					</span>
				</legend>
				<br />
				<textarea name="filetext" rows="25" cols="75" id="start_input"><?php
				$t_file = fopen(OPENLD_ROOT.'themes/'.$_GET['template'].'/' .$f_names[$_REQUEST['edit_file']]['filename'], 'r');
				echo openld_htmlspecialchars(fread($t_file, filesize(OPENLD_ROOT.'themes/'.$_GET['template'].'/' .$f_names[$_REQUEST['edit_file']]['filename'])));
				fclose($t_file);
				?></textarea>
				<input type="hidden" name="id" value="<?php echo $_REQUEST['edit_file']; ?>" />
				<br /><br />
			</fieldset><br />
			<input type="submit" name="edited_link" value="<?php echo SAVE_BUTTON; ?>" />
		</div>
	</form>
	<?php } elseif(isset($_GET['edit'])) { ?>
	<div class="openld-adcontent">
		<div class="adformpanel">
			<fieldset id="admin-welcome">
				<legend>
					<span>
						<?php echo EDIT_TEMPLATE; ?>: <?php echo $_GET['edit']; ?>
					</span>
				</legend>
				<table cellspacing="0" summary="">
					<thead>
						<tr>
							<th><?php echo FILE_LABEL; ?></th>
							<th><?php echo EDIT_LABEL; ?></th>
							<th><?php echo REMOVE; ?></th>
							<th><?php echo PERMISSION_LABEL; ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($f_names as $f_name) { ?>
						<tr>
							<td align="center"><?php echo $f_name['filename']; ?></td>
							<td align="center"><a href="<?php echo $settings['domain']; ?>/admin_template.php?template=<?php echo $_GET['edit']; ?>&edit_file=<?php echo $f_name['id']; ?>"><?php echo EDIT_LABEL; ?></a></td>
							<td align="center"><a href="<?php echo $settings['domain']; ?>/admin_template.php?edit=<?php echo $_GET['edit']; ?>&remove_file=<?php echo $f_name['id']; ?>"><?php echo REMOVE; ?></a></td>
							<td align="center"><?php echo $f_name['permission']; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</fieldset>
		</div>
	</div>
	<?php } else { ?>
	<form action="admin_template.php" accept-charset="utf-8" method="post">
		<div class="openld-adcontent">
			<div class="adformpanel">
				<fieldset id="admin-welcome">
					<legend>
						<span>
							<?php echo CHOSE_TEMPLATE; ?>
						</span>
					</legend>
					<table cellspacing="0" summary="">
						<thead>
							<tr>
								<th width="50px" align="center"><?php echo DIRECTORY_LABEL; ?></th>
								<th width="50px" align="center"><?php echo ADMIN_LABEL; ?></th>
								<th width="322px" align="center"><?php echo THUMBNAIL_PREVIEW; ?></th>
								<th align="center"><?php echo INFO ?></th>
							</tr>
						</thead>
						<tbody>
							<?php ($hook = get_hook('admin_template_data_header')) ? eval($hook) : null; ?>
							<?php if(isset($real_dirs)) { ?>
							<?php foreach($real_dirs as $template_path) { ?>
							<?php $xml_data = xml_to_array(@file_get_contents(OPENLD_ROOT.'themes/'.$template_path.'/theme.xml')); ?>
							<tr>
								<td align="center">
									<input type="radio" value="<?php echo $template_path; ?>/" name="template"<?php echo ($settings['template_path'] == $template_path. '/' ? ' checked="checked"' : ''); ?> />
								</td>
								<td align="center">
									<?php if($admin_dirs[$template_path]=='true') { ?>
									<input type="radio" value="<?php echo $template_path; ?>/" name="admin_template"<?php echo ($settings['admin_template_path'] == $template_path. '/' ? ' checked="checked"' : ''); ?> />
									<?php } ?>
								</td>
								<td align="center">
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
						</tbody>
					</table>
				</fieldset>
			</div>
			<input type="submit" value="<?php echo TEMPLATE_SUBMIT; ?>" />
		</div>
	</form>
	<?php } ?>
</div>
