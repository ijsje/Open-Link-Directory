<?php
if(!empty($_POST))
	$result = array(
		0 => $_POST['name_title'],
		1 => $_POST['email_title'],
		2 => $_POST['link_title'],
		3 => $_POST['link_url'],
		4 => $_POST['link_description'],
		5 => $_POST['link_type'],
		6 => $_POST['new_cat_id'],
		7 => $_POST['payment_status'],
		8 => $_POST['reciprocal_url']
	);
else
{
	//get the SQL
	$query = array(
		'SELECT' => 'name, email, title, url, description, type, category_id, payment_status, reciprocal_url',
		'FROM' => 'links',
		'WHERE' => 'id=' .intval($_REQUEST['edit_link'])
	);
	($hook = get_hook('admin_edit_a_link_sql')) ? eval($hook) : null;
	$result = $db->query_build($query) or error(__FILE__, __LINE__);

	if($db->num_rows($result) == 0)
		error("No link row was selected", __FILE__, __LINE__);
	$result = $db->fetch_row($result);
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" accept-charset="utf-8" method="post">
	<div class="openld-adblock openld-adform">
		<h2>
			<span>
				<?php echo EDIT_LINK_LABEL; ?>
			</span>
		</h2>
		<div class="openld-adcontent">
			<fieldset id="admin-welcome">
				<legend>
					<span>
						<?php echo EDIT_LINK_LABEL; ?>
					</span>
				</legend>
				<div class="fieldgroup">
					<?php ($hook = get_hook('edit_a_link_page_header')) ? eval($hook) : null; ?>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo URL_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="link_url" size="35" maxlength="80" value="<?php echo openld_htmlspecialchars($result[3]); ?>" id="start_input" />
							<br />
							<em>
								<?php echo $error->get_warning('url_warning'); ?>
							</em>
							<br />
						</span>
						<br />
					</p>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo TITLE_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="link_title" size="35" maxlength="80" value="<?php echo openld_htmlspecialchars($result[2]); ?>" />
							<br />
							<em>
								<?php echo $error->get_warning('title_warning'); ?>
							</em>
							<br />
						</span>
						<br />
					</p>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo DESCRIPTION_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<textarea name="link_description" rows="15" cols="75"><?php echo openld_htmlspecialchars($result[4]); ?></textarea>
							<br />
							<em>
								<?php echo $error->get_warning('description_warning'); ?>
							</em>
							<br />
						</span>
						<br />
					</p>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo CATEGORY_LABEL; ?>
						</label>
						<br />
							<span class="adinput">
							<?php $cats = move_select_array(0, -1); ?>
							<select name="new_cat_id">
								<?php foreach($cats as $cat) { ?>
									<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == $result[6]) ? ' selected="selected"' : ''); ?>>
									<?php echo openld_htmlspecialchars($cat['title']); ?>
									</option>
								<?php } ?>
							</select>
							<br />
							<em>
								<?php echo $error->get_warning('category_warning'); ?>
							</em>
							<br />
						</span>
						<br />
					</p>
					<?php
					$ltc = 0;
					if ($settings['regular_links_option'] = 'Y')
						$ltc++;
					if ($settings['reciprocal_links_option'] = 'Y')
						$ltc++;
					if ($settings['paid_links_option'] = 'Y')
						$ltc++;
					if ($settings['sponsor_links_option'] = 'Y')
						$ltc++; 
					if(2 <= $ltc) {
					?>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo LINK_TYPES_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<select name="link_type">
								<option value="a"<?php echo (($result[5] == "a") ? ' selected="selected"' : ''); ?>><?php echo REGULAR_LINK; ?></option>
								<option value="b"<?php echo (($result[5] == "b") ? ' selected="selected"' : ''); ?>><?php echo RECIPROCAL_LINK; ?></option>
								<option value="c"<?php echo (($result[5] == "c") ? ' selected="selected"' : ''); ?>><?php echo PAID_LINK; ?></option>
								<option value="d"<?php echo (($result[5] == "d") ? ' selected="selected"' : ''); ?>><?php echo SPONSOR_LINK; ?></option>
							</select>
							<br />
							<br />
						</span>
						<br />
					</p>
					<?php } ?>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo NAME_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="name_title" size="35" maxlength="80" value="<?php echo openld_htmlspecialchars($result[0]); ?>" />
							<br />
							<em>
								<?php echo $error->get_warning('name_warning'); ?>
							</em>
							<br />
						</span>
						<br />
					</p>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo EMAIL_LABEL; ?>
						</label>
						<br />
							<span class="adinput">
							<input type="text" name="email_title" size="35" maxlength="80" value="<?php echo openld_htmlspecialchars($result[1]); ?>" />
							<br />
							<em>
								<?php echo $error->get_warning('email_warning'); ?>
							</em>
							<br />
						</span>
						<br />  
					</p>
					<?php if($result[5] == 'c' || $result[5] == 'd') { ?>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo IS_PAYMENT_PENDING; ?>
						</label>
						<br />
							<span class="adinput">
							<input type="checkbox" name="payment_pending"<?php echo (($result[7] != 'no') ? ' checked="CHECKED"' : ''); ?> />
						</span>
						<br />
					</p>
					<?php } else { ?>
					<input type="hidden" name="payment_pending" value="ok" />
					<?php } ?>
					<?php if($result[5] == 'b') { ?>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo RECIPROCAL_URL_LABEL; ?>
						</label>
						<br />
							<span class="adinput">
							<input type="text" name="reciprocal_url" value="<?php echo $result[8]; ?>" />
						</span>
						<br />
					</p>
					<?php } else { ?>
					<input type="hidden" name="reciprocal_url" value="<?php echo $result[8]; ?>" />
					<?php } ?>
					<input type="hidden" name="edit_link_sql" value="<?php echo $_REQUEST['edit_link']; ?>" />
					<input type="hidden" name="page" value="<?php echo $req_page; ?>" />
					<input type="hidden" name="id" value="<?php echo $req_id; ?>" />
					<?php ($hook = get_hook('edit_a_link_page_footer')) ? eval($hook) : null; ?>
				</div>
				<span class="adsubmit">
					<input type="submit" class="button" value="<?php echo EDIT_LINK_LABEL; ?>" />
				</span>
			</fieldset>
		</div>
	</div>
</form>