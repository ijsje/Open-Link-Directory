<h2>Latest links</h2>
<?php if($db->num_rows($latest_links_sql) > 0) { ?>
<table summary="" cellspacing="0">
	<thead>
		<tr>
			<th>Links</th>
			<th>Created</th>
		</tr>
	</thead>
	<tbody class="hasicon">
		<?php while($link = $db->fetch_assoc($latest_links_sql)) { ?>
		<tr>
			<td>
				<a href="<?php echo $link['url']; ?>"><?php echo openld_htmlspecialchars($link['title']); ?></a>
			</td>
			<td>
				<?php echo $link['date_submitted']; ?>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php } else echo "There's currently no links to display."; ?>