<?php /* Static Name: Footer text add */ ?>
<div class="footer-text-add">
	<div class="name"><?php bloginfo('name'); ?></div>

	<?php if(of_get_option('itunes_link')) { ?>
		<div class="itunes"><a href="<?php echo of_get_option('itunes_link'); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/images/itunes-white.png"></a></div>
	<?php } ?>

	<?php if(of_get_option('android_link')) { ?>
		<div class="android"><a href="<?php echo of_get_option('itunes_link'); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/images/android-white.png"></a></div>
	<?php } ?>
	
</div>