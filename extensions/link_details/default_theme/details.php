<div class="openld-block openld-form">
	<div class="openld-content">
		<table>
			<tr>
				<td><?php echo TITLE_LABEL; ?></td>
				<td><?php echo openld_htmlspecialchars($sql_objects[1]); ?></td>
			</tr>
			<tr>
				<td><?php echo DETAILS_NAME_OF_SUBMITTER_LABEL; ?></td>
				<td><?php echo openld_htmlspecialchars($sql_objects[3]); ?></td>
			</tr>
			<tr>
				<td><?php echo DETAILS_CATEGORY_ID; ?></td>
				<td><?php echo $sql_objects[5]; ?></td>
			</tr>
			<tr>
				<td><?php echo CATEGORY_LABEL; ?></td>
				<td><?php echo openld_htmlspecialchars($category_name); ?></td>
			</tr>
			<tr>
				<td><?php echo DETAILS_DATE_SUBMITTED; ?></td>
				<td><?php echo $sql_objects[4]; ?></td>
			</tr>
			<tr>
				<td><?php echo ID_LABEL; ?></td>
				<td><?php echo $sql_objects[0]; ?></td>
			</tr>
			<tr>
				<td><?php echo DESCRIPTION_LABEL; ?></td>
				<td><?php echo openld_htmlspecialchars($sql_objects[2]); ?></td>
			</tr>
		</table>
	</div>
</div>