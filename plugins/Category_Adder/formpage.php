<div id="openldbb-admain1" class="openld-adblock openld-adform">
	<h2><span>Category Adder</span></h2>
	<div class="openld-adcontent">
	<?php if(isset($_POST['add_categories']) && isset($_POST['category'])) { ?>
	<div class='adformpanel'>
		<fieldset id='admin-welcome'>
			<legend><span>The following categories have been added:</span></legend>
			<div class='fieldgroup'>
				<ul>
					<?php
					$categories = openld_trim_array(explode("\n", $_POST['add_categories']));
					foreach($categories as $category)
					{
					$query = array(
						'INSERT' => 'title, active, father_id, created',
						'INTO' => 'categories',
						'VALUES' => '"' .$db->escape($category). '", 1, ' .intval($_POST['category']). ', NOW()'
					);
					$db->query_build($query) or error("category: " .$db->escape($category). " = " .intval($_POST['category']), __FILE__, __LINE__);
						echo "<li>".$category."</li>";
						}
					?>
				</ul>
			</div>
		</fieldset>
	</div>
	<?php } ?>
	<p class="buttoned hasheading">
		Separate the categories with a linebreak.
		<br /><br />
	</p>
	<form accept-charset="utf-8" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
		<div class="adformpanel">
			<fieldset>
				<legend><span>Add multiple categories</span></legend>
				<div class="fieldgroup">
					<p>
						<label class="adlabel">Category</label><br />
						<span class="adinput">
							<select name="category">
							<?php $cats = move_select_array(0, -1); ?>
							<?php foreach($cats as $cat) { ?>
								<option value="<?php echo $cat['id']; ?>"<?php echo (($cat['id'] == -1) ? ' selected="selected"' : ''); ?>>
								<?php echo openld_htmlspecialchars($cat['title']); ?>
								</option>
							<?php } ?>
							</select>
						</span>
					</p>
					<p>
						<label class="adlabel">Subcategories</label><br />
						<span class="adinput">
							<textarea name="add_categories" rows="15" cols="75"></textarea>
							<br /><em><!-- description_error --></em>
						</span>
					</p>
				</div>
				<span class="adsubmit"><input type="submit" class="button" value="Add" /></span>
			</fieldset>
		</div>
	</form>
</div>
</div>