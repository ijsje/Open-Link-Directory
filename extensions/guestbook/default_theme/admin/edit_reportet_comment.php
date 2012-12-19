<div class="openld-adblock openld-adform">
	<h2><span><?php echo GB_REPORTED_COMMENTS; ?></span></h2>
	<div class="openld-adcontent">
		<div class="adformpanel">
			<table cellspacing="0" summary="">
				<thead>
					<tr>
						<th align="left"><?php echo GB_COMMENTS_LABEL; ?></th>
					</tr>
				</thead>
				<tbody>
					<?php while($comments = $db->fetch_assoc($comments_sql_limit)) { ?>
					<tr>
						<td><?php echo ($settings['guestbook_use_comment_titles'] == 'Y') ? 'Title: ' .openld_htmlspecialchars($comments['title']). '<br />' : ''; ?>
							<?php echo NAME_LABEL; ?>: <?php echo openld_htmlspecialchars($comments['name']); ?><br />
							<?php echo SUBMITTED_LABEL; ?> <?php echo $comments['date']; ?><br />
							<?php echo GB_COMMENT_LABEL; ?>: </b><?php echo openld_htmlspecialchars($comments['comment']); ?><br />
							<a href="admin_plugins.php?extension=guestbook&amp;edit_comment=<?php echo $comments['id']; ?>"><?php echo EDIT_LABEL; ?></a>
							<a href="admin_plugins.php?extension=guestbook&amp;delete_comment=<?php echo $comments['id']; ?>&amp;reported_comments=<?php echo $req_page; ?>"><?php echo DELETE_LABEL; ?></a> <?php echo $comments['active'] == 0 ? '<a href="admin_plugins.php?extension=guestbook&amp;accept_comment=' .$comments['id']. '&amp;reported_comments=' .$req_page. '">' .ACCEPT_LABEL. '</a>' : '<a href="admin_plugins.php?extension=guestbook&amp;unaccept_comment=' .$comments['id']. '&amp;reported_comments=' .$req_page. '">' .UNACCEPT_LABEL. '</a>'; ?>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php echo $pages_string; ?>
			<br />
			<br />
			<a href="admin_plugins.php?extension=guestbook"><?php echo GB_EDIT_COMMENTS; ?></a>
		</div>
	</div>
</div>