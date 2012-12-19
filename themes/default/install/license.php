<div id="openldbb-admain" class="openldbb-admain">
	<div id="openldbb-adnav" class="openld-adblock">
		<h2>
			<span>
				<?php echo INSTALLATION; ?>
			</span>
		</h2>
		<div class="openld-adcontent">
			<ul class="adnav-standard">
				<li>
					<b>
						1. <?php echo LICENSE; ?>
					</b>
				</li>
				<li class="li-first isactive">
					2. <?php echo CHMOD_LABEL; ?>
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
				1. <?php echo LICENSE; ?>
			</span>
		</h2>
		<div class="openld-adcontent">
			<div class="adformpanel">
				<fieldset id="admin-welcome">
					<legend>
						<span>
							GNU General Public License
						</span>
					</legend>
					<div class="fieldgroup">
						<textarea rows="20" cols="95"><?php require('./GPL.txt'); ?></textarea>
					</div>
				</fieldset>
			</div>
			<br/>
			<form action="index.php" accept-charset="utf-8" method="POST">
				<input type="submit" name="license" value=<?php echo CONTINUE_; ?>>
			</form>
		</div>
	</div>
</div>
