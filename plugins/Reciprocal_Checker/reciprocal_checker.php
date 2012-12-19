<div id="openldbb-admain1" class="openld-adblock openld-adform">
	<h2><span>Reciprocal Checker</span></h2>
	<div class="openld-adcontent">
	<?php if(isset($_POST['check_reciprocals'])) { ?>
	<div class='adformpanel'>
		<fieldset id='admin-welcome'>
			<legend><span>Reciprocal links</span></legend>
			<div class='fieldgroup'>
				<table>
					<tr>
						<td>
							Link
						</td>
						<td>
							Status
						</td>
					</tr>
					<?php
						$query = array(
							'SELECT' => 'id, title, url, reciprocal_url, category_id',
							'FROM' => 'links',
							'WHERE' => 'type="b"'
						);
						$query = $db->query_build($query) or error(__FILE__, __LINE__);
						$recips = array();
						while($link = $db->fetch_assoc($query))
						{
							echo '<tr><td><a href="admin_browse.php?edit_link=' .$link['id'] .'&amp;id='. $link['category_id']. '">' .$link['title']. '</a></td>';
							echo '<td>';
							if($rc = reciprocal_check($link['url'], $link['reciprocal_url']))
							{
								$recips[] = $link['id'];
								echo $rc;
								if(isset($_POST['delete_reciprocals']))
									echo '(deleted)';
							}
							else
								echo 'ok';

							echo '</td></tr>';
						}
						if(isset($_POST['delete_reciprocals']))
						{
							foreach($recips as $re)
							{
								$query = array(
									'DELETE' => 'links',
									'WHERE' => 'type="b" AND id=' .$re
								);
								$db->query_build($query) or
									error('Unable to delete link', __FILE__, __LINE__);
							}
						}
					?>
				</table>
			</div>
		</fieldset>
	</div>
	<?php } ?>
	<form accept-charset="utf-8" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
		<div class="adformpanel">
			<fieldset>
				<legend><span>Reciprocal Check</span></legend>
				<input type="checkbox" name="delete_reciprocals" value="" />Delete all non-working reciprocals
				<input type="submit" name="check_reciprocals" value="Check" />
			</fieldset>
		</div>
	</form>
</div>
</div>
