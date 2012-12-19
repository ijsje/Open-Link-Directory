<div class="openld-adblock openld-adform">
	<h2>
		<span>
			<?php echo IP_BANNING; ?>
		</span>
	</h2>
	<form class="openld-adcontent" accept-charset="utf-8" method="post" action="admin_bans.php">
		<div class="adformpanel">
			<fieldset>
				<legend>
					<span>
						<?php echo ADD_A_BAN; ?>
					</span>
				</legend>
				<div class="fieldgroup">
					<p class="buttoned hasheading">
						<label class="adlabel">
							<?php echo NEW_IP_BAN; ?>
						</label>
						<br />
						<span class="adinput astable">
							<label>
								<?php echo IP_NUMBER; ?>
								<input type="text" name="ban_ip" size="35" maxlength="80" id="start_input"/>
							</label>
							<br />
							<em>
								<?php $error->get_warning('ip_warning'); ?>
							</em>
						</span>
						<span class="adsubmit">
							<input type="submit" class="button" name="add_ban" value="Ban" />
						</span>
					</p>
				</div>
			</fieldset>
		</div>
		<div class="adformpanel">
			<fieldset id="admin-welcome">
				<legend>
					<span>
						<?php echo MANAGE_BANS; ?>
					</span>
				</legend>
				<div class="fieldgroup">
					<p class="buttoned hasheading">
						<label class="adlabel">
							<?php echo UNBAN_IP; ?>
						</label>
						<br />
						<span class="adinput astable">
							<label>
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
							</label>
							<br />
							<em>
								<?php $error->get_warning('remove_ban_error'); ?>
							</em>
						</span>
						<span class="adsubmit">
							<input type="submit" class="button" name="remove_ban" value="<?php echo UNBAN; ?>" /> 
							<input type="submit" class="button" value="<?php echo INFO; ?>" onclick="window.open('http://whois.domaintools.com/'+document.forms[0].unban.options[document.forms[0].unban.selectedIndex].text,'info')" />
						</span>
					</p>
				</div>
			</fieldset>
		</div>
		<?php ($hook = get_hook('admin_bans')) ? eval($hook) : null; ?>
	</form>
</div>