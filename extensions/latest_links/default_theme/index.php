<div class="openld-block openld-form">
	<h2>
		<span>
			<?php echo LL_LL_LABEL; ?>
		</span>
	</h2>
	<div class="openld-content">
		<?php if($db->num_rows($latest_links_sql) > 0) { ?>
		<table summary="" cellspacing="0">
			<thead>
				<tr>
					<th scope="col" align="left"><?php echo LINKS_LABEL; ?></th>
					<th class="tc2" scope="col" align="left"><?php echo LL_CREATED_LABEL; ?></th>
				</tr>
			</thead>
			<tbody class="hasicon">
				<?php while($link = $db->fetch_assoc($latest_links_sql)) { ?>
				<tr>
					<td class="tcl">
						<a href="<?php echo $link['url']; ?>"><?php echo openld_htmlspecialchars($link['title']); ?></a>
					</td>
					<td class="tcl">
						<?php echo $link['date_submitted']; ?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<?php } else echo NO_LINKS_HERE; ?>
	</div>
</div>