<h2>
	<?php echo INSTALLATION; ?>
</h2>
<ul class="left-menu">
	<li class="isactive">
		1. <?php echo LICENSE; ?>
	</li>
	<li>
		2. <?php echo CHMOD_LABEL; ?>
	</li>
	<li>
		3. <?php echo CONFIGURATIONS; ?>
	</li>
	<li>
		4. <?php echo FINISH; ?>
	</li>
</ul>
<div class="right-content">
	<h2>
		1. <?php echo LICENSE; ?>
	</h2>
	<form action="index.php" accept-charset="utf-8" method="POST">
		GNU General Public License
		</ br>
		<textarea rows="20" cols="95"><?php require('./GPL.txt'); ?></textarea>
		</ br>
		<input type="submit" name="license" value=<?php echo CONTINUE_ ?>>
	</form>
</div>
