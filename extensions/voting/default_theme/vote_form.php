<br />
<br />
<?php echo VOTING_RATING; ?>: <?php echo $rating; ?> 
<?php echo VOTING_TOTAL_SCORE; ?>: <?php echo $vote_query[0]; ?> (<?php echo $vote_query[1]. ' ' .VOTING_VOTES; ?>)
<br />
<form action="<?php echo $settings['domain']; ?>/index.php" accept-charset="utf-8" method="get">
	<?php echo VOTING_RATE_THIS_LINK; ?>:
	<select name="vote">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<input type="submit" value="vote" />
	<input type="hidden" name="link_id" value="<?php echo $links['id']; ?>" />
	<input type="hidden" name="id" value="<?php echo $req_id; ?>" />
</form>