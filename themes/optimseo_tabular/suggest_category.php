<h2><?php echo SUGGEST_A_CATEGORY; ?></h2>
<form action="<?php echo $settings['domain']. "/suggest_category.php"; ?>" accept-charset="utf-8" method="post">
	<?php echo ((isset($_POST['title']) && $error->transform_error()) ? SUBMIT_SUCCESS_CATEGORY : ''); ?>
	<table>
		<?php ($hook = get_hook('suggest_category_head_page')) ? eval($hook) : null; ?>
		<tr>
			<td width="100px">
				<label for="title"><?php echo TITLE_LABEL; ?></label>
			</td>
			<td>
				<input type="text" value="<?php echo (isset($_POST['title']) ? openld_htmlspecialchars($_POST['title']) : ''); ?>" name="title" id="title" />
				<br />
				<span class="warn"><?php echo ucfirst($error->get_warning('title_warning')); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<label for="description"><?php echo DESCRIPTION_LABEL; ?></label>
			</td>
			<td>
				<textarea name="description" id="description" rows="15" cols="75"><?php echo (isset($_POST['description']) ? openld_htmlspecialchars($_POST['description']) : ''); ?></textarea>
				<br />
				<span class="warn"><?php echo ucfirst($error->get_warning('description_warning')); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<label for="id"><?php echo CATEGORY_LABEL; ?></label>
			</td>
			<td>
				<select name="id" id="id">
					<?php $cats = move_select_array(0, -1); ?>
					<?php foreach($cats as $cat) { ?>
						<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == (isset($_REQUEST['id']) ? $_REQUEST['id'] : "0")) ? ' selected="selected"' : ''); ?>>
						<?php echo openld_htmlspecialchars($cat['title']); ?>
						</option>
					<?php } ?>
				</select>
				<br />
				<span class="warn"><?php echo ucfirst($error->get_warning('category_warning')); ?></span>
			</td>
		</tr>
		<?php ($hook = get_hook('suggest_category_footer')) ? eval($hook) : null; ?>
	</table>
	<input type="submit" value="<?php echo SUGGEST_A_CATEGORY; ?>" />
</form>
