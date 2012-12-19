<div id="openldbb-admain" class="openldbb-admain">
	<div id="openldbb-adnav" class="openld-adblock">
		<h2>
			<span>
				<?php echo INSTALLATION; ?>
			</span>
		</h2>
		<div class="openld-adcontent">
			<ul class="adnav-standard">
				<li class="isactive">
					1. <?php echo LICENSE; ?>
				</li>
				<li class="li-first">
					<b>
						2. <?php echo CHMOD_LABEL; ?>
					</b>
				</li>
				<li class="isactive">
					3. <?php echo CONFIGURATIONS; ?>
				</li>
				<li class="isactive">
					4. <?php echo FINISH; ?>
				</li>
			</ul>
		</div>
	</div>
	<div class="openld-adblock openld-adform">
		<h2>
			<span>
				2. <?php echo CHMOD_LABEL; ?>
			</span>
		</h2>
		<div class="openld-adcontent">
			<div id="o-essentials" class="adformpanel">
				<p class="buttoned hasheading">
					<?php echo PERMISSION_DESCRIPTION; ?>
				</p>
				<br />
				<fieldset id="admin-welcome">
					<legend>
						<span>
							<?php echo CHMOD_LABEL; ?>
						</span>
					</legend>
					<div class="fieldgroup">
						<p>
							<label class="adlabel">
								/cache
							</label>
							<br />
							<br />
							<span class="adinput">
								<em>
									<?php echo $permission['../cache']; ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								/files
							</label>
							<br />
							<span class="adinput">
								<em>
									<?php echo $permission['../files']; ?>
								</em>
							</span>
						</p>
						<p>
							<label class="adlabel">
								/
							</label>
							<br />
							<br />
							<span class="adinput">
								<em>
									<?php echo $permission['../']; ?>
								</em>
							</span>
						</p>
					</div>
				</fieldset>
			</div>
			<br/>
			<form action="index.php" accept-charset="utf-8" method="POST">
				<input type="submit" name="permissions" value="<?php echo $success ? CONTINUE_ : PERMISSION_NOT_CONTINUE; ?>">
			</form>
		</div>
	</div>
</div>
