<?php
	// Loads child theme textdomain
	load_child_theme_textdomain( CURRENT_THEME, CHILD_DIR . '/languages' );

	add_filter( 'cherry_stickmenu_selector', 'cherry_change_selector' );
	function cherry_change_selector($selector) {
		$selector = 'header .nav-wrap';
		return $selector;
	}

	/*   Page_Block_SHORTCODE    */
	function page_block_shortcode($atts, $content = null) {
		extract(shortcode_atts(array(
			'hash_id'  => ''
		), $atts));
		$output = '<div class="hashAncor" id="'.$hash_id.'"></div>';
	    return $output;
	}
	add_shortcode('page_block', 'page_block_shortcode');

	// Loads custom scripts.
	require_once( 'custom-js.php' );
	require_once( 'shortcodes/statistics.php' );
	require_once( 'shortcodes/posts-grid.php' );
	require_once( 'shortcodes/post-cycle.php' );
?>