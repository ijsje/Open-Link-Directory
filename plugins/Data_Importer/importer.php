<form accept-charset="utf-8" method="post">
	<div id="openldbb-admain1" class="openld-adblock openld-adform">
		<h2><span>Data Importer</span></h2>
		<div class="openld-adcontent">
			<div class="adformpanel">
				<font color="red"><?php echo $imp_result; ?></font>
				<p>Import links and categories from other linkdirectory scripts.</p>
				<br />
				<table cellspacing="0" summary="">
					<tr>
						<td width="150px">Category for importation</td>
						<td>
							<select name="category_id">
								<?php $cats = move_select_array(0, -1); ?>
								<?php foreach($cats as $cat) { ?>
									<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == (isset($_REQUEST['id']) ? $_REQUEST['id'] : "0")) ? ' selected="selected"' : ''); ?>>
									<?php echo openld_htmlspecialchars($cat['title']); ?>
									</option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Directory script to import from</td>
						<td>
							<select name="directory_script">
								<option value="phpld"<?php echo (('phpld' == (isset($_REQUEST['directory_script']) ? $_REQUEST['directory_script'] : "0")) ? ' selected="selected"' : ''); ?>>
									PHP Link Directory v.2
								</option>
								<option value="fpds"<?php echo (('fpds' == (isset($_REQUEST['directory_script']) ? $_REQUEST['directory_script'] : "0")) ? ' selected="selected"' : ''); ?>>
									Free PHP Directory Script
								</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Database name to import from</td>
						<td><input type="text" value="<?php echo (isset($_POST['database']) ? openld_htmlspecialchars($_POST['database']) : ''); ?>" name="database" id="start_input" /></td>
					</tr>
					<tr>
						<td>Prefix for database tables</td>
						<td><input type="text" value="<?php echo (isset($_POST['prefix']) ? openld_htmlspecialchars($_POST['prefix']) : ''); ?>" name="prefix" /></td>
					</tr>
				</table>
				<br />
				<input type="submit" value="Import" />
			</div>
		</div>
	</div>
</div>
