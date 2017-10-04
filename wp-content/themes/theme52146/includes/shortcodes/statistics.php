<?php

if (!function_exists('statistics_shortcode')) {

	function statistics_shortcode( $atts, $content = null, $shortcodename = '' ) {
		extract(shortcode_atts(
			array(
				'icon' => '',
				'number' => '',
				'desc' => '',
				'custom_class' => ''
		), $atts));

		$output = '<div class="statistics '.$custom_class.'">';

			if ($icon != '') {
				$icon = isset($icon_images) ? $icon_images : $icon ;
				$icon_url = CHERRY_PLUGIN_URL . 'includes/images/iconSweets/' . strtolower($icon) . '.png' ;
				if( defined ('CHILD_DIR') ) {
					if(file_exists(CHILD_DIR.'/images/iconSweets/'.strtolower($icon).'.png')){
						$icon_url = CHILD_URL.'/images/iconSweets/'.strtolower($icon).'.png';
					}
				}
				$output .= '<figure class="align'. $align ." ".$custom_class.'"><img src="'. $icon_url .'" alt=""></figure>';
			}
			if ($number != '') {
				$output .= '<div class="number">'.$number.'</div>';
			}
			if ($desc != '') {
				$output .= '<div class="desc">'.$desc.'</div>';
			}

		$output .= '</div>';

		$output = apply_filters( 'cherry_plugin_shortcode_output', $output, $atts, $shortcodename );

		return $output;
	}
	add_shortcode('statistics', 'statistics_shortcode');

}
?>