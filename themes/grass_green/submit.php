<div class="openld-block openld-form">
	<h2>
		<span>
			<?php echo SUBMIT_A_LINK; ?>
		</span>
	</h2>
	<div class="openld-content">
		<?php echo $success_message; ?>
		<form action="<?php echo $settings['domain']. "/submit.php"; ?>" accept-charset="utf-8" method="post">
			<div class="panel">
				<?php echo($hook = get_hook('submit_head_page')) ? eval($hook) : null; ?>
				<?php echo $error->get_warning('linktype_warning'); ?>
				<?php if($settings['reciprocal_links_option']!='Y' && $settings['regular_links_option']!='Y' && $settings['paid_links_option']!='Y' && $settings['sponsor_links_option']!='Y')
					echo CLOSED_FOR_SUBMISSIONS;
				else { ?>
				<div class='panel'>
				<?php if($settings['sponsor_links_option']=='Y') {
					$sponsor_price = price_with_currency($settings['sponsor_price_option'], $settings['sponsor_curr_option'], $settings['sponsor_curr_option']);
					if($settings['reciprocal_links_option']!='Y' && $settings['regular_links_option']!='Y' && $settings['paid_links_option']!='Y')
						$sponsor_checked = 'checked="checked"';
					else
						$sponsor_checked = '';
					?>
					<input type='radio' value='sponsor' name='linktype' <?php echo $sponsor_checked; ?> />
					<?php echo SPONSOR_LINK; ?> - <?php echo $sponsor_price; ?><?php ($hook = get_hook('sponsor_information')) ? eval($hook) : null; ?>
					<br />
				<?php } if($settings['paid_links_option']=='Y') {
					$paid_checked = ($settings['reciprocal_links_option']=='N' && $settings['regular_links_option']=='N') ? 'checked="checked"' : '';
					$paid_price = price_with_currency($settings['paid_price_option'], $settings['paid_curr_option'], $settings['paid_curr_option']);
					?>
					<input type='radio' value='paid' name='linktype' <?php echo $paid_checked; ?> />
					<?php echo PAID_LINK; ?> - <?php echo $paid_price; ?>
					<br />
				<?php } if($settings['reciprocal_links_option']=='Y') {
					$reciprocal_checked = ($settings['reciprocal_links_option']=='Y' && $settings['regular_links_option']=='N') ? 'checked="checked"' : '';
					?>
					<input type='radio' value='reciprocal' name='linktype' <?php echo $reciprocal_checked; ?> />
					<?php echo RECIPROCAL_LINK; ?>
					<br />
				<?php } if($settings['regular_links_option']=='Y') { ?>
					<input type='radio' value='regular' name='linktype' checked="checked" />
					<?php echo REGULAR_LINK; ?>
					<br />
				<?php } ?>
				</div>
				<table>
					<tr>
						<td class="textcolumn">
							<?php echo TITLE_LABEL; ?>
						</td>
						<td>
							<input type="text" value="<?php echo (isset($_POST['title']) ? openld_htmlspecialchars($_POST['title']) : ""); ?>" name="title" id="start_input" />
							<br />
							<?php echo $error->get_warning('title_warning'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo URL_LABEL; ?>
						</td>
						<td>
							<input type="text" value="<?php echo (isset($_POST['url']) ? openld_htmlspecialchars($_POST['url']) : ""); ?>" name="url" />
							<br />
							<?php echo $error->get_warning('url_warning'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo DESCRIPTION_LABEL; ?>
						</td>
						<td>
							<textarea name="description" rows="15" cols="75"><?php echo (isset($_POST['description']) ? openld_htmlspecialchars($_POST['description']) : ""); ?></textarea>
							<br />
							<?php echo $error->get_warning('description_warning'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo EMAIL_LABEL; ?>
						</td>
						<td>
							<input type="text" value="<?php echo (isset($_POST['email']) ? openld_htmlspecialchars($_POST['email']) : ""); ?>" name="email" />
							<br />
							<?php echo $error->get_warning('email_warning'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo NAME_LABEL; ?>
						</td>
						<td>
							<input type="text" value="<?php echo (isset($_POST['name']) ? openld_htmlspecialchars($_POST['name']) : ""); ?>" name="name" />
							<br />
							<?php echo $error->get_warning('name_warning'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo CATEGORY_LABEL; ?>
						</td>
						<td>
							<select name="cat_id">
								<?php $cats = move_select_array(0, -1, "active=1 AND ", 1); ?>
								<?php foreach($cats as $cat) { ?>
									<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == (isset($_REQUEST['cat_id']) ? $_REQUEST['cat_id'] : "0")) ? ' selected="selected"' : ''); ?>>
										<?php echo openld_htmlspecialchars($cat['title']); ?>
									</option>
								<?php } ?>
							</select>
							<br />
							<?php echo $error->get_warning('category_warning'); ?>
						</td>
					</tr>
					<?php if($settings['reciprocal_links_option']=='Y') { ?>
					<tr>
						<td>
							<?php echo RECIPROCAL_URL_LABEL; ?>
						</td>
						<td>
							<input type="text" value="<?php echo (isset($_POST['reciprocal_post']) ? openld_htmlspecialchars($_POST['reciprocal_post']) : ""); ?>" name="reciprocal_url" />
							<br />
							<?php echo $error->get_warning('reciprocal_warning'); ?>
						</td>
					</tr>
					<?php } ?>
					<?php echo($hook = get_hook('submit_table_fields')) ? eval($hook) : null; ?>
				</table>
				<input type="submit" value="<?php echo ADD_LINK_LABEL; ?>" />
				<?php } ?>
			</div>
		</form>
	</div>
</div>
