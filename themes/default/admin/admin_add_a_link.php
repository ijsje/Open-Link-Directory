<form action="<?php echo $_SERVER['PHP_SELF']; ?>" accept-charset="utf-8" method="post">
	<div class="openld-adblock openld-adform">
		<h2>
			<span>
				<?php echo ADD_LINK_LABEL; ?>
			</span>
		</h2>
		<div class="openld-adcontent">
			<fieldset id="admin-welcome">
				<legend>
					<span>
						<?php echo ADD_LINK_LABEL; ?>
					</span>
				</legend>
				<div class="fieldgroup">
					<?php ($hook = get_hook('admin_functions_add_link_page_header')) ? eval($hook) : null; ?>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo TITLE_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="link_title" size="35" maxlength="80" value="<?php echo (isset($_REQUEST['link_title']) ? openld_htmlspecialchars($_REQUEST['link_title']) : ''); ?>" id="start_input" />
							<br />
							<em>
								<?php $error->get_warning('title_warning'); ?>
							</em>
							<br />
						</span>
						<br />
					</p>
					<p class="buttoned">
						<label class="adlabel">
							<?php echo URL_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<input type="text" name="link_url" size="35" maxlength="80" value="<?php echo (isset($_REQUEST['link_url']) ? openld_htmlspecialchars($_REQUEST['link_url']) : ''); ?>" />
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
							<?php echo DESCRIPTION_LABEL; ?>
						</label>
						<br />
						<span class="adinput">
							<textarea name="link_description" rows="15" cols="75"><?php echo (isset($_REQUEST['link_description']) ? openld_htmlspecialchars($_REQUEST['link_description']) : ''); ?></textarea>
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
							<select name="id">
								<?php $cats = move_select_array(0, -1); ?>
								<?php foreach($cats as $cat) { ?>
									<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == $_REQUEST['add_link']) ? ' selected="selected"' : ''); ?>>
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
					<?php ($hook = get_hook('admin_functions_add_link_page_footer')) ? eval($hook) : null; ?>
				</div>
				<span class="adsubmit">
					<input type="submit" class="button" name="add_a_link" value="<?php echo ADD_LABEL; ?>" />
				</span>
			</fieldset>
		</div>
	</div>
</form>