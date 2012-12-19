<h2>
	<?php echo IP_BANNING; ?>
</h2>
<form accept-charset="utf-8" method="post" action="admin_bans.php">
	<table>
		<tr>
			<td>
				<?php echo NEW_IP_BAN; ?>
			</td>
			<td>
				<?php echo IP_NUMBER; ?>
				</ br>
				<input type="text" name="ban_ip" size="35" maxlength="80" />
				<?php $error->get_warning('ip_warning'); ?>
			</td>
			<td>
				<input type="submit" class="button" name="add_ban" value="Ban" />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo MANAGE_BANS; ?>
			</td>
			<td>
				<b><?php echo UNBAN_IP; ?></b>
				</ br>
				<?php ($hook = get_hook('admin_bans_before_sql_if')) ? eval($hook) : null; ?>
				<?php if(sizeof($openld_bans) != 0) { ?>
				<?php echo IP_NUMBER; ?>
				<select name="unban">
					<?php foreach($openld_bans as $key => $rows) { ?>
					<option value="<?php echo strval($key); ?>">
						<?php echo $rows; ?>
					</option>
					<?php } ?>
					<?php ($hook = get_hook('admin_bans_ban_list_cell')) ? eval($hook) : null; ?>
				</select>
				<?php } elseif(sizeof($openld_bans) == 0) echo NO_IP_BANS; ?>
				<?php ($hook = get_hook('admin_bans_after_sql_if')) ? eval($hook) : null; ?>
				</ br>
				<?php $error->get_warning('remove_ban_error'); ?>
			</td>
			<td>
				<input type="submit" class="button" name="remove_ban" value="<?php echo UNBAN; ?>" />
				<input type="submit" class="button" value="<?php echo INFO; ?>" onclick="window.open('http://whois.domaintools.com/'+document.forms[0].unban.options[document.forms[0].unban.selectedIndex].text,'info')" />
			</td>
		</tr>
	</table>
	<?php ($hook = get_hook('admin_bans')) ? eval($hook) : null; ?>
</form>
