<h2>
	<?php echo INSTALLATION; ?>
</h2>
<ul class="left-menu">
	<li>
		1. <?php echo LICENSE; ?>
	</li>
	<li class="isactive">
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
			2. <?php echo CHMOD_LABEL; ?>
	</h2>
	<form action="index.php" accept-charset="utf-8" method="POST">
		<p>
			<?php echo PERMISSION_DESCRIPTION; ?>
		</p>
		<br />
		<table>
			<thead>
				<tr>
					<td>
						<?php echo CHMOD_LABEL; ?>
					</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<b>/cache</b>
					</td>
					<td>
						<?php echo $permission['../cache']; ?>
					</td>
				</tr>
				<tr>
					<td>
						<b>/files</b>
					</td>
					<td>
						<?php echo $permission['../files']; ?>
					</td>
				</tr>
				<tr>
					<td>
						<b>/</b>
					</td>
					<td>
						<?php echo $permission['../']; ?>
					</td>
				</tr>
			</tbody>
		</table>
		<br/>
		<input type="submit" name="permissions" value="<?php echo $success ? CONTINUE_ : PERMISSION_NOT_CONTINUE; ?>">
	</form>
</div>
