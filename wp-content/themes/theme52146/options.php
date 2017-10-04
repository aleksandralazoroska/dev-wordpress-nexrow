<?php
/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *
 */
if(!function_exists('optionsframework_options')) {
	function optionsframework_options() {
// Fonts
			global $typography_mixed_fonts;
			$typography_mixed_fonts = array_merge(options_typography_get_os_fonts() , options_typography_get_google_fonts());
			asort($typography_mixed_fonts);

			$options = array();
// ---------------------------------------------------------
// General
// ---------------------------------------------------------
			$options['general'] = array( "name" => theme_locals('general'),
								"type" => "heading");
			// Background Defaults
			$background_defaults = array(
				'color' => '#000000',
				'image' => '',
				'repeat' => 'repeat',
				'position' => 'top center',
				'attachment'=>'scroll'
			);
			$options['body_background'] = array(
								"id" => "body_background",
								"std" => $background_defaults);

			$options['main_layout'] = array(
								"id" => "main_layout",
								"std" => "fullwidth");

			$options['main_background'] = array(
								"id" => "main_background",
								"std" => "#fafafa");

			$header_bg_defaults = array(
				'color' => '#000000',
				'image' => '',
				'repeat' => 'repeat',
				'position' => 'top center',
				'attachment'=>'scroll'
			);
			$options['header_background'] = array(
								"id" => "header_background",
								"std" => $header_bg_defaults);

			$options['links_color'] = array(
								"id" => "links_color",
								"std" => "#5cc5ea");

			$options['links_color_hover'] = array(
								"id" => "links_color_hover",
								"std" => "#787878");

			$options['google_mixed_3'] = array(
								'id' => 'google_mixed_3',
								'std' => array( 'size' => '16px', 'lineheight' => '28px', 'face' => 'Raleway', 'style' => 'normal', 'character'  => 'latin', 'color' => '#787878'));

			$options['h1_heading'] = array(
								'id' => 'h1_heading',
								'std' => array( 'size' => '50px', 'lineheight' => '60px', 'face' => 'Raleway', 'style' => 'normal', 'character'  => 'latin', 'color' => '#000000'));

			$options['h2_heading'] = array(
								'id' => 'h2_heading',
								'std' => array( 'size' => '42px', 'lineheight' => '56px', 'face' => 'Raleway', 'style' => 'bold', 'character'  => 'latin', 'color' => '#000000'));

			$options['h3_heading'] = array(
								'id' => 'h3_heading',
								'std' => array( 'size' => '36px', 'lineheight' => '47px', 'face' => 'Raleway', 'style' => 'bold', 'character'  => 'latin', 'color' => '#000000'));

			$options['h4_heading'] = array(
								'id' => 'h4_heading',
								'std' => array( 'size' => '30px', 'lineheight' => '39px', 'face' => 'Raleway', 'style' => 'bold', 'character'  => 'latin', 'color' => '#000000'));

			$options['h5_heading'] = array(
								'id' => 'h5_heading',
								'std' => array( 'size' => '25px', 'lineheight' => '33px', 'face' => 'Raleway', 'style' => 'bold', 'character'  => 'latin', 'color' => '#000000'));

			$options['h6_heading'] = array(
								'id' => 'h6_heading',
								'std' => array( 'size' => '20px', 'lineheight' => '26px', 'face' => 'Raleway', 'style' => 'bold', 'character'  => 'latin', 'color' => '#000000'));

			$options['g_search_box_id'] = array(
								"id" => "g_search_box_id",
								"std" => "yes",
								'disable' => 'true');

			$options['g_breadcrumbs_id'] = array(
								"id" => "g_breadcrumbs_id",
								"std" => "yes");

			$options['custom_css'] = array(								
								"id" => "custom_css",
								"std" => "");

// ---------------------------------------------------------
// Logo & Favicon
// ---------------------------------------------------------
			$options["logo_favicon"] = array( "name" => theme_locals('logo_favicon'),
								"type" => "heading");

			$options['logo_type'] = array(
								"id" => "logo_type",
								"std" => "image_logo");

			$options['logo_typography'] = array(
								'id' => 'logo_typography',
								'std' => array( 'size' => '24px', 'lineheight' => '28px', 'face' => 'Raleway', 'style' => 'bold', 'character'  => 'latin', 'color' => '#ffffff'));

			$options['logo_url'] = array(
								"id" => "logo_url",
								"std" => CHILD_URL . "/images/logo.png");

			$options['favicon'] = array(
								"id" => "favicon",
								"std" => CHILD_URL . "/favicon.ico");

// ---------------------------------------------------------
// Navigation
// ---------------------------------------------------------
			$options['navigation'] = array( "name" => theme_locals('navigation'),
								"type" => "heading");

			$options['menu_typography'] = array(
								'id' => 'menu_typography',
								'std' => array( 'size' => '14px', 'lineheight' => '18px', 'face' => 'Raleway', 'style' => 'normal', 'character'  => 'latin', 'color' => '#ffffff'));

			$options['sf_delay'] = array(
								"id" => "sf_delay",
								"std" => "1000");

			$options['sf_f_animation'] = array(
								"id" => "sf_f_animation",
								"std" => "show");

			$options['sf_sl_animation'] = array(
								"id" => "sf_sl_animation",
								"std" => "show");

			$options['sf_speed'] = array(
								"id" => "sf_speed",
								"std" => "normal");

			$options['sf_arrows'] = array(
								"id" => "sf_arrows",
								"std" => "false");

			$options['mobile_menu_label'] = array(
								"id" => "mobile_menu_label",
								"std" => theme_locals('mobile_menu_std'));

			$options['stickup_menu'] = array(
								"id" => "stickup_menu",
								"std" => "true",
								'disable' => 'true'
			);

// ---------------------------------------------------------
// Slider
// ---------------------------------------------------------
			$options['slider'] = array( "name" => theme_locals('slider'),
								"type" => "heading");

	// Slider type
			$options['sl_type'] = array(
								"id" => "slider_type",
								"std" => "none_slider");
	// ---------------------------------------------------------
	// Camera Slider
	// ---------------------------------------------------------
			$options['sl_effect'] = array(
								"id" => "sl_effect",
								"std" => "simpleFade");

			$options['sl_columns'] = array(
								"id" => "sl_columns",
								"std" => "12");

			$options['sl_rows'] = array(
								"id" => "sl_rows",
								"std" => "8");

			$options['sl_banner'] = array(
								"id" => "sl_banner",
								"std" => "fadeIn");

			$options['sl_pausetime'] = array(
								"id" => "sl_pausetime",
								"std" => "7000");

			$options['sl_animation_speed'] = array(
								"id" => "sl_animation_speed",
								"std" => "1500");

			$options['sl_slideshow'] = array(
								"id" => "sl_slideshow",
								"std" => "true");

			$options['sl_thumbnails'] = array(
								"id" => "sl_thumbnails",
								"std" => "true"); // set "disabled" => "true" when only text in Slider posts

			$options['sl_control_nav'] = array(
								"id" => "sl_control_nav",
								"std" => "true");

			$options['sl_dir_nav'] = array(
								"id" => "sl_dir_nav",
								"std" => "true");

			$options['sl_dir_nav_hide'] = array(
								"id" => "sl_dir_nav_hide",
								"std" => "false");

			$options['sl_play_pause_button'] = array(
								"id" => "sl_play_pause_button",
								"std" => "true");

			$options['sl_pause_on_hover'] = array(
								"id" => "sl_pause_on_hover",
								"std" => "true");

			$options['sl_loader'] = array(
								"id" => "sl_loader",
								"std" => "no");
	// ---------------------------------------------------------
	// Accordion Slider
	// ---------------------------------------------------------
			$multicheck_defaults = array( '43' => 0,  '49' => 0, '50' => 0, '51' => 0, '52' => 0);
			$options['acc_show_post'] = array(
					"id" => "acc_show_post",
					"std" => $multicheck_defaults);

			$options['acc_slideshow'] = array(
								"id" => "acc_slideshow",
								"std" => "false");

			$options['acc_hover_pause'] = array(
								"id" => "acc_hover_pause",
								"std" => "true");

			$options['acc_pausetime'] = array(
								"id" => "acc_pausetime",
								"std" => "6000");

			$options['acc_animation_speed'] = array(
								"id" => "acc_animation_speed",
								"std" => "600");

			$options['acc_easing'] = array(
								"id" => "acc_easing",
								"std" => "easeOutCubic");

			$options['acc_trigger'] = array(
								"id" => "acc_trigger",
								"std" => "mouseover");

			$options['acc_starting_slide'] = array(
								"id" => "acc_starting_slide",
								"std" => "0");
// ---------------------------------------------------------
// Blog
// --------------------------------------------------------
			$options['blog'] = array( "name" => theme_locals('blog'),
								"type" => "heading");

			$options['blog_text'] = array(
								"id" => "blog_text",
								"std" => theme_locals('blog'));

			$options['blog_related'] = array(
								"id" => "blog_related",
								"std" => theme_locals('posts_std'));

			$options['blog_sidebar_pos'] = array(
								"id" => "blog_sidebar_pos",
								"std" => "right");

			$options['post_image_size'] = array(
								"id" => "post_image_size",
								"std" => "large");

			$options['single_image_size'] = array(
								"id" => "single_image_size",
								"std" => "large");

			$options['post_meta'] = array(
								"id" => "post_meta",
								"std" => "true");

			$options['post_meta_display'] = array(
								"id" => "post_meta_display",
								"std" => "only_post");

			$options['post_excerpt'] = array(
								"id" => "post_excerpt",
								"std" => "true");

			$options['post_permalink'] = array( 
								"id" => "post_permalink",
								"std" => "no");

			$options['post_category'] = array( 
								"id" => "post_category",
								"std" => "no");

			$options['post_comment'] = array(
								"id" => "post_comment",
								"std" => "no");

			$options['load_image'] = array( 
								"id" => "load_image",
								'disable' => 'true');

// ---------------------------------------------------------
// Portfolio
// ---------------------------------------------------------
			$options['portfolio'] = array(
								"name" => theme_locals("portfolio"),
								"type" => "heading");

			$options['folio_filter'] = array(
								"id" => "folio_filter",
								"std" => "cat");

			$options['folio_title'] = array(
								"id" => "folio_title",
								"std" => "yes");

			$options['folio_excerpt'] = array(
								"id" => "folio_excerpt",
								"std" => "yes");

			$options['folio_excerpt_count'] = array(
								"id" => "folio_excerpt_count",
								"std" => "20");

			$options['folio_btn'] = array(
								"id" => "folio_btn",
								"std" => "yes");

			$options['folio_meta'] = array(
								"id" => "folio_meta",
								"std" => "yes");

			$options['layout_mode'] = array(
								"id" => "layout_mode",
								"std" => "fitRows");

			$options['items_count2'] = array(
								"id" => "items_count2",
								"std" => "8");

			$options['items_count3'] = array(
								"id" => "items_count3",
								"std" => "9");

			$options['items_count4'] = array(
								"id" => "items_count4",
								"std" => "12");

// ---------------------------------------------------------
// Footer
// ---------------------------------------------------------
			$options['footer'] = array( "name" => theme_locals("footer"),
								"type" => "heading");

			$options['footer_text'] = array(
								"id" => "footer_text",
								"std" => "");

			$options['ga_code'] = array(
								"id" => "ga_code",
								"std" => "");

			$options['feed_url'] = array(
								"id" => "feed_url",
								"std" => "");

			$options['footer_menu'] = array(
								"id" => "footer_menu",
								"std" => "false",
								'disable' => 'true');

			$options['footer_menu_typography'] = array(
								'id' => 'footer_menu_typography',
								'std' => array( 'size' => '16px', 'lineheight' => '22px', 'face' => 'Raleway', 'style' => 'normal', 'character'  => 'latin', 'color' => '#787878'),
								'disable' => 'true');

// ---------------------------------------------------------
// Extra
// ---------------------------------------------------------
		$options["extra"] = array( "name" => __('Extra', CURRENT_THEME),
					"type" => "heading");	

		$options['title_display_id'] = array( "name" => __('Title and breadcrumbs?', CURRENT_THEME),
					"desc" => __('Display title and breadcrumbs?', CURRENT_THEME),
					"id" => "title_display_id",
					"std" => "no",
					"type" => "radio",
					"options" => array(
									"yes" => "Yes",
									"no"	=> "No"));

		$options['android_link'] = array( "name" => __('Android link.', CURRENT_THEME),
					"desc" => __('Enter Android link.', CURRENT_THEME),
					"id" => "android_link",
					"std" => "#",
					"class" => "tiny",
					"type" => "text");

		$options['itunes_link'] = array( "name" => __('Itunes link.', CURRENT_THEME),
					"desc" => __('Enter Itunes link.', CURRENT_THEME),
					"id" => "itunes_link",
					"std" => "#",
					"class" => "tiny",
					"type" => "text");

// ---------------------------------------------------------
// Header Offer
// ---------------------------------------------------------
		$options["header_offer"] = array( "name" => __('Header Offer', CURRENT_THEME),
					"type" => "heading");

		$options['offer_display_id'] = array( "name" => __('Display at homepage?', CURRENT_THEME),
					"desc" => __('Display at homepage or at every?', CURRENT_THEME),
					"id" => "offer_display_id",
					"std" => "true",
					"type" => "radio",
					"options" => array(
									"true" => __('At homepage', CURRENT_THEME),
									"false"  => __('At every page', CURRENT_THEME)));

		$options['offer'] = array( "name" => __('Header Offer.', CURRENT_THEME),
					"desc" => __('Header Offer.', CURRENT_THEME),
					"id" => "offer",
					"std" => '[row]

[span12]

[cherry_fixed_parallax src_poster="parallax.jpg" offset_value="yes" fixed_value="yes" invert_value="yes" custom_class="cherry_fixed_parallax"]

[row_in]

[span7]

<img src="' . CHILD_URL . '/images/logo_2.png" alt="Logo" class="logo" />
<h1>WayApp Theme is a really
best way to present your
beautiful mobile app</h1>

Available on App Store &amp; Google Play.

[button text="Download App" link="#" style="default" size="normal" target="_self" display="inline" icon="cloud"] [button text="Learn more" link="#" style="default" size="normal" target="_self" class="clean" display="inline" icon="no"]

[/span7]

[span1][/span1]

[span3]

<img src="' . CHILD_URL . '/images/iphone.png" alt="Logo" />

[/span3]

[/row_in]

[/cherry_fixed_parallax]

[/span12]

[/row]',
					"class" => "tiny",
					"type" => "editor");	

		return $options;
	}
}
?>
