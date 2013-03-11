<!-- searchform.php -->
<form <?php if (isset($append_class_to_searchform)) echo 'class="'.$append_class_to_searchform.'"'; ?> role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="row collapse">
		<div class="small-8 columns">
			<input type="text" value="" name="s" id="s" placeholder="<?php _e('Search', 'wpf'); ?>">
		</div>
		<div class="small-4 columns">
			<input type="submit" id="searchsubmit" value="<?php _e('Search', 'wpf'); ?>" class="prefix button">
		</div>
	</div>
</form>
<!-- end searchform.php -->