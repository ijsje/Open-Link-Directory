<div class="openld-block openld-form">
	<h2><span><?php echo SUGGEST_A_CATEGORY; ?></span></h2>
	<div class="openld-content">
		<?php echo ((isset($_POST['title']) && $error->transform_error()) ? SUBMIT_SUCCESS_CATEGORY : ''); ?>
		<form action="<?php echo $settings['domain']. "/suggest_category.php"; ?>" accept-charset="utf-8" method="post">
			<div class="panel">
				<table>
					<?php ($hook = get_hook('suggest_category_head_page')) ? eval($hook) : null; ?>
					<tr>
						<td width="100px">
							<?php echo TITLE_LABEL; ?>
						</td>
						<td>
							<input type="text" value="<?php echo (isset($_POST['title']) ? openld_htmlspecialchars($_POST['title']) : ''); ?>" name="title" id="start_input" />
							<br />
							<?php echo $error->get_warning('title_warning'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo DESCRIPTION_LABEL; ?>
						</td>
						<td>
							<textarea name="description" rows="15" cols="75"><?php echo (isset($_POST['description']) ? openld_htmlspecialchars($_POST['description']) : ''); ?></textarea>
							<br />
							<?php echo $error->get_warning('description_warning'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo CATEGORY_LABEL; ?>
						</td>
						<td>
							<select name="id">
								<?php $cats = move_select_array(0, -1); ?>
								<?php foreach($cats as $cat) { ?>
									<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == (isset($_REQUEST['id']) ? $_REQUEST['id'] : "0")) ? ' selected="selected"' : ''); ?>>
									<?php echo openld_htmlspecialchars($cat['title']); ?>
									</option>
								<?php } ?>
							</select>
							<br />
							<?php echo $error->get_warning('category_warning'); ?>
						</td>
					</tr>
					<?php ($hook = get_hook('suggest_category_footer')) ? eval($hook) : null; ?>
				</table>
				<input type="submit" value="<?php echo SUGGEST_A_CATEGORY; ?>" />
			</div>
		</form>
	</div>
</div>
