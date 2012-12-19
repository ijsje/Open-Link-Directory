<div id="openldbb-admain1" class="openld-adblock openld-adform">
	<h2><span>Send Mass Mail</span></h2>
	<div class="openld-adcontent">
		<?php if(isset($_POST['mass_title']) && isset($_POST['mass_message'])) { ?>
		<div class='adformpanel'>
			<fieldset id='admin-welcome'>
				<legend><span>Your mail message have been sent to the following emails:</span></legend>
				<div class='fieldgroup'>
					<ul>
						<?
						if(isset($_POST['regular_box']) && isset($_POST['reciprocal_box']) && isset($_POST['paid_box']) && isset($_POST['sponsor_box']))
						$where = '';
						else
						{
							$where = (isset($_POST['regular_box']) ? 'type="a"' : '');
							$where .= (isset($_POST['reciprocal_box']) ? (($where == '') ? 'type="b"' : ' AND type="b"') : '');
							$where .= (isset($_POST['paid_box']) ? (($where == '') ? 'type="c"' : ' AND type="c"') : '');
							$where .= (isset($_POST['sponsor_box']) ? (($where == '') ? 'type="d"' : ' AND type="d"') : '');
						}
						$where .= ($_POST['category'] != 'all' ? ((($where == '') ? '' : ' AND '). 'category_id='.intval($_POST['category'])) : '');

						$query = array(
							'SELECT' => 'DISTINCT email',
							'FROM' => 'links',
							'WHERE' => $where
						);
						$query = $db->query_build($query) or error(__FILE__, __LINE__);
						while($row = $db->fetch_assoc($query))
						{
							mail($row['email'], $_POST['mass_title'], $_POST['mass_message'], "From: " .$settings['email']);
							echo "<li>".$row['email']."</li>";
						}
						?>
					</ul>
				</div>
			</fieldset>
		</div>
		<?php } ?>
		<form accept-charset="utf-8" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
			<div class="adformpanel">
				<fieldset>
					<legend><span>Send a message to link submitters</span></legend>
					<div class="fieldgroup">
						<p>
							<label class="adlabel"><?php echo LINK_TYPES_LABEL; ?></label><br />
							<span class="adinput">
								<input type="checkbox" name="regular_box" checked="checked" /> <?php echo REGULAR_LINKS_LABEL; ?><br />
								<input type="checkbox" name="reciprocal_box" checked="checked" /> <?php echo RECIPROCAL_LINKS_LABEL; ?><br />
								<input type="checkbox" name="paid_box" checked="checked" /> <?php echo PAID_LINKS; ?><br />
								<input type="checkbox" name="sponsor_box" checked="checked" /> <?php echo SPONSORED_LINKS; ?><br />
							</span>
						</p>
						<p>
							<label class="adlabel"><?php echo CATEGORY_LABEL; ?></label><br />
							<span class="adinput">
								<select name="category">
									<option value="all" selected="selected"><?php echo ALL; ?></option>
									<?php $cats = move_select_array(0, -1); ?>
									<?php foreach($cats as $cat) { ?>
									<option value="<?php echo $cat['id']; ?>">
										<?php echo openld_htmlspecialchars($cat['title']); ?>
									</option>
									<?php } ?>
								</select>
							</span>
						</p>
						<p>
							<label class="adlabel">Title</label><br />
							<span class="adinput">
								<input type="text" name="mass_title" />
								<br /><em><!-- mass_title_error --></em>
							</span>
						</p>
						<p>
							<label class="adlabel">Message</label><br />
							<span class="adinput">
								<textarea name="mass_message" rows="15" cols="75"></textarea>
								<br /><em><!-- mass_message_error --></em>
							</span>
						</p>
					</div>
					<span class="adsubmit"><input type="submit" class="button" value="Send" /></span>
				</fieldset>
			</div>
		</form>
	</div>
</div>