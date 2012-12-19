<div class="openld-block openld-form">
	<div class="openld-content">
		<?php if($db->num_rows($topsite_sql_limit) > 0) { ?>
		<table summary="" cellspacing="0">
			<thead>
				<tr>
					<th align="left"><?php echo LINKS_LABEL; ?></th>
					<th align="left"><?php echo TS_CREATED_LABEL; ?></th>
					<th align="left"><?php echo TS_HITS_LABEL; ?></th>
				</tr>
			</thead>
			<tbody class="hasicon">
				<?php while($link = $db->fetch_assoc($topsite_sql_limit)) { ?>
				<tr>
					<td class="tcl">
						<a href="<?php echo $link['url']; ?>"><?php echo openld_htmlspecialchars($link['title']); ?></a>
						<br />
						<?php echo openld_htmlspecialchars($link['description']); ?>
					</td>
					<td class="tcl">
						<?php echo $link['date_submitted']; ?>
					</td>
					<td class="tcl">
						<?php echo $link['hits']; ?>
					</td>
				</tr>
			</tbody>
		</table>
		<?php } echo $pagination;
		} else echo NO_LINKS_HERE; ?>
	</div>
</div>