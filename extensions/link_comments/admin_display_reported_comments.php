<div class="openld-adblock openld-adform">
	<h2><span>Reportet link comments</span></h2>
	<div class="openld-adcontent">
		<div class="adformpanel">
			<table cellspacing="0" summary="">
				<thead>
					<tr>
						<th align="left">Comments</th>
					</tr>
				</thead>
				<tbody>
				<?php while($comments = $db->fetch_assoc($comments_sql_limit)) { ?>
				<tr>
					<td><?php echo ($settings['use_comment_titles'] == 'Y') ? 'Title: ' .openld_htmlspecialchars($comments['title']). '<br />' : ''; ?>
						Name: <?php echo openld_htmlspecialchars($comments['name']); ?><br />
						<?php echo SUBMITTED_LABEL; ?> <?php echo $comments['date']; ?><br />
						Link: <a href="<?php echo openld_htmlspecialchars($comments['url']); ?>"><?php echo openld_htmlspecialchars($comments['link_text']); ?></a><br />
						Comment: </b><?php echo openld_htmlspecialchars($comments['comment']); ?><br />
						<a href="admin_plugins.php?extension=link_comments&amp;edit_comment=<?php echo $comments['id']; ?>"><?php echo EDIT_LABEL; ?></a>
						<a href="admin_plugins.php?extension=link_comments&amp;delete_comment=<?php echo $comments['id']; ?>&amp;reported_comments=<?php echo $req_page; ?>"><?php echo DELETE_LABEL; ?></a> <?php echo $comments['active'] == 0 ? '<a href="admin_plugins.php?extension=link_comments&amp;accept_comment=' .$comments['id']. '&amp;reported_comments=' .$req_page. '">' .ACCEPT_LABEL. '</a>' : '<a href="admin_plugins.php?extension=link_comments&amp;unaccept_comment=' .$comments['id']. '&amp;reported_comments=' .$req_page. '">' .UNACCEPT_LABEL. '</a>'; ?>
					</td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
			<?php echo $pages_string; ?>
			<br />
			<br />
			<a href="admin_plugins.php?extension=link_comments">Edit comments</a>
		</div>
	</div>
</div>