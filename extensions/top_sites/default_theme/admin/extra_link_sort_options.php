<option value="hits DESC"<?php echo (($settings['links_sorting_by']  == 'hits DESC') ? ' selected="selected"' : ''); ?>'>
	<?php echo TS_HITS_LABEL; ?>
</option>
<option value="hits"<?php echo (($settings['links_sorting_by']  == 'hits') ? ' selected="selected"' : ''); ?>'>
	<?php echo TS_HITS_REVERSED_LABEL; ?>
</option>