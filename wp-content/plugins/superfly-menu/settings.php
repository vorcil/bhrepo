<?php

add_action( 'admin_init', 'sf_register_settings' );

function sf_register_settings() {


	register_setting( 'sf_options', 'sf_options', 'sf_options_validate' );

	add_settings_section('sf_source', 'Menu', 'sf_section', 'sf');
	add_settings_field('sf_active_menu', "WordPress theme menu to build Superfly:", 'sf_active_menu_str', 'sf', 'sf_source');
	add_settings_field('sf_display', "Display rules:", 'sf_display_str', 'sf', 'sf_source');
	add_settings_field('sf_fa_on', "Font Awesome support (if you don't have it already on site and want to use menu items special classes to add icons):", 'sf_fa_on_str', 'sf', 'sf_source');
	add_settings_field('sf_alternative_menu', "Alternative menu on page as source for Superfly (valid CSS selector for list element, eg. <em>#menu ul</em>):", 'sf_alternative_menu_str', 'sf', 'sf_source');

	// add_settings_field('sf_hide_def', "Visibility of source menu:", 'sf_hide_def_str', 'sf', 'sf_source');
	// turn off for mobiles
	// own HTML

	add_settings_section('sf_sidebar', 'Sidebar', 'sf_section', 'sf');
	add_settings_field('sf_sidebar_style', "The way sidebar appears:", 'sf_sidebar_style_str', 'sf', 'sf_sidebar');

	add_settings_field('sf_sidebar_pos', "Sidebar position:", 'sf_sidebar_pos_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_tab_logo', "Logo for sidebar:<br>(will be shrinked to 70px height, use images with minimum 2x height for retina displays and mobiles):", 'sf_tab_logo_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_width_panel_1', "Sidebar width, background color and text color:", 'sf_width_panel_1_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_color_panel_1', "", 'sf_color_panel_1_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_bg_color_panel_1', "", 'sf_bg_color_panel_1_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_bg_image_panel_1', "Main panel background image", 'sf_bg_image_panel_1_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_width_panel_2', "Second level panel width, background color and text color:", 'sf_width_panel_2_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_color_panel_2', "", 'sf_color_panel_2_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_bg_color_panel_2', "", 'sf_bg_color_panel_2_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_width_panel_3', "Third level panel width, background color and text color:", 'sf_width_panel_3_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_color_panel_3', "", 'sf_color_panel_3_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_bg_color_panel_3', "", 'sf_bg_color_panel_3_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_width_panel_4', "Forth level panel width, background color and text color:", 'sf_width_panel_4_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_color_panel_4', "", 'sf_color_panel_4_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_bg_color_panel_4', "", 'sf_bg_color_panel_4_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_transparent_panel', "Semi-transparent background mode (use only with single-level menu or set single level in Other tab)", 'sf_transparent_panel_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_sub_push_content', "Push main content on submenus opening:", 'sf_sub_push_content_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_opening_type', "Sidebar opening on desktop:", 'sf_opening_type_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_sub_opening_type', "Submenus opening on desktop:", 'sf_sub_opening_type_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_side_stroke', "Visible menu edge when it's hidden:", 'sf_side_stroke_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_fade_content', "Fade out main content when sidebar is exposed:", 'sf_fade_content_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_blur_content', "Blur main content when sidebar is exposed (if browser supports this CSS filter):", 'sf_blur_content_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_search', "Search field:", 'sf_search_str', 'sf', 'sf_sidebar');
	add_settings_field('sf_search_bg', "Search field background fade:", 'sf_search_bg_str', 'sf', 'sf_sidebar');

	// MENU SECTION
	add_settings_section('sf_appearance', 'Appearance', 'sf_section', 'sf');
	add_settings_field('sf_font', "Menu font:", 'sf_font_str', 'sf', 'sf_appearance');
	add_settings_field('sf_font_size', "Menu font size:", 'sf_font_size_str', 'sf', 'sf_appearance');
	add_settings_field('sf_font_weight', "Menu font weight:", 'sf_font_weight_str', 'sf', 'sf_appearance');
	add_settings_field('sf_padding', "Padding of menu item:", 'sf_padding_str', 'sf', 'sf_appearance');
//	add_settings_field('sf_lh', "Line-height of menu item:", 'sf_lh_str', 'sf', 'sf_appearance');
	add_settings_field('sf_alignment', "Alignment of menu items:", 'sf_alignment_str', 'sf', 'sf_appearance');
	add_settings_field('sf_uppercase', "Letter case of menu items:", 'sf_uppercase_str', 'sf', 'sf_appearance');
	add_settings_field('sf_ind', "Submenu indicators:", 'sf_ind_str', 'sf', 'sf_appearance');
	add_settings_field('sf_separators', "Separators between menu items:", 'sf_separators_str', 'sf', 'sf_appearance');
	add_settings_field('sf_separators_color', "Separators color:", 'sf_separators_color_str', 'sf', 'sf_appearance');
	add_settings_field('sf_separators_width', "Separators width relative to sidebar width in percentage:", 'sf_separators_width_str', 'sf', 'sf_appearance');
	add_settings_field('sf_highlight', "Highlighting of menu items on hover:", 'sf_highlight_str', 'sf', 'sf_appearance');
	add_settings_field('sf_highlight_active', "Highlighting active page item:", 'sf_highlight_active_str', 'sf', 'sf_appearance');
	add_settings_field('sf_underline', "Item underline on hover:", 'sf_underline_str', 'sf', 'sf_appearance');
	add_settings_field('sf_underline_color', "Underline color:", 'sf_underline_color_str', 'sf', 'sf_appearance');

	add_settings_section('sf_label', 'Button', 'sf_section', 'sf');
	add_settings_field('sf_label_color', "Button color:", 'sf_label_color_str', 'sf', 'sf_label');
	add_settings_field('sf_label_style', "Button style:", 'sf_label_style_str', 'sf', 'sf_label');
	add_settings_field('sf_label_top', "(DESKTOP) Button top margin (please enter valid CSS value for ex. '50%' or '200px'):", 'sf_label_top_str', 'sf', 'sf_label');
	add_settings_field('sf_label_top_mobile', "(MOBILE) Button top margin:", 'sf_label_top_mobile_str', 'sf', 'sf_label');
	add_settings_field('sf_mob_nav', "Navbar for mobiles with screen max width 782px:", 'sf_mob_nav_str', 'sf', 'sf_label');

	add_settings_field('sf_label_text', "Button text (like 'Menu' and 'Close'):", 'sf_label_text_str', 'sf', 'sf_label');
	add_settings_field('sf_label_text_color', "Button text color:", 'sf_label_text_color_str', 'sf', 'sf_label');
	add_settings_field('sf_label_vis', "Button visibility:", 'sf_label_vis_str', 'sf', 'sf_label');

	add_settings_section('sf_social', 'Social', 'sf_section', 'sf');
	add_settings_field('sf_facebook', "Facebook URL:", 'sf_facebook_str', 'sf', 'sf_social');
	add_settings_field('sf_twitter', "Twitter URL:", 'sf_twitter_str', 'sf', 'sf_social');
	add_settings_field('sf_gplus', "Google Plus URL:", 'sf_gplus_str', 'sf', 'sf_social');
	add_settings_field('sf_social_color', "Color of social icons:", 'sf_social_color_str', 'sf', 'sf_social');


	add_settings_section('sf_custom', 'CSS', 'sf_section', 'sf');
	add_settings_field('sf_css', "Additional CSS:", 'sf_css_str', 'sf', 'sf_custom');

	add_settings_section('sf_mode', 'Test Mode', 'sf_section', 'sf');
	add_settings_field('sf_test_mode', "Test mode during setup", 'sf_test_mode_str', 'sf', 'sf_mode');

	add_settings_section('sf_other', 'Other', 'sf_section', 'sf');
	add_settings_field('sf_submenu_support', "Menu depth:", 'sf_submenu_support_str', 'sf', 'sf_other');
	add_settings_field('sf_submenu_classes', "Sub-menu classes list (comma-separated):", 'sf_submenu_classes_str', 'sf', 'sf_other');
	add_settings_field('sf_togglers', "Additional element to toggle menu (valid CSS selector like #id or .class):", 'sf_togglers_str', 'sf', 'sf_other');

}

function sf_section() {

}

global $sf_cached_opts;

function sf_get_options()
{
	global $sf_cached_opts;

	if (isset($sf_cached_opts)) return $sf_cached_opts;

	$options = get_option('sf_options');

	$options['locations'] = sf_get_locations();

	if (empty($options['sf_test_mode'])) {
		$options['sf_test_mode'] = '';
	}

	if (empty($options['sf_fa_on'])) {
		$options['sf_fa_on'] = '';
	}

	if (empty($options['sf_active_menu'])) {
		$options['sf_active_menu'] = '';
	}

	if (empty($options['sf_display'])) {
		$opts = (object)array(
			"user" => (object)array(
					"everyone" => 1,
					"loggedin" => 0,
					"loggedout" => 0
				),
			"desktop" => (object)array(
					"yes" => 1,
					"no" => 0
				),
			"mobile" => (object)array(
					"yes" => 1,
					"no" => 0
				),
			"rule" => (object)array(
					"include" => 0,
					"exclude" => 1
				),
			"location" => (object)array(
					"pages" => (object)array(),
					"cposts" => (object)array(),
					"cats" => (object)array(),
					"taxes" => (object)array(),
					"langs" => (object)array(),
					"wp_pages" => (object)array(),
					"ids" => array()
				)
		);
		$options['sf_display'] =  json_encode($opts);
	}

	if (empty($options['sf_alternative_menu'])) {
		$options['sf_alternative_menu'] = '';
	}

	if (empty($options['sf_hide_def'])) {
		$options['sf_hide_def'] = '';
	}

	if (empty($options['sf_tab_logo'])) {
		$options['sf_tab_logo'] = '';
	}

	if (empty($options['sf_bg_color_panel_1'])) {
		$options['sf_bg_color_panel_1'] = '#202b2d';
	}

	if (empty($options['sf_bg_image_panel_1'])) {
		$options['sf_bg_image_panel_1'] = 'none';
	}

	if (empty($options['sf_bg_color_panel_2'])) {
		$options['sf_bg_color_panel_2'] = '#b5b5b5';
	}

	if (empty($options['sf_bg_color_panel_3'])) {
		$options['sf_bg_color_panel_3'] = '#36939e';
	}

	if (empty($options['sf_bg_color_panel_4'])) {
		$options['sf_bg_color_panel_4'] = '#9e466b';
	}

	if (empty($options['sf_color_panel_1'])) {
		$options['sf_color_panel_1'] = '#ffffff';
	}

	if (empty($options['sf_color_panel_2'])) {
		$options['sf_color_panel_2'] = '#ffffff';
	}

	if (empty($options['sf_color_panel_3'])) {
		$options['sf_color_panel_3'] = '#ffffff';
	}

	if (empty($options['sf_color_panel_4'])) {
		$options['sf_color_panel_4'] = '#ffffff';
	}

	if (empty($options['sf_underline_color'])) {
		$options['sf_underline_color'] = '#ffffff';
	}

	if (empty($options['sf_image_bg'])) {
		$options['sf_image_bg'] = 'none';
	}

	if (empty($options['sf_custom_bg'])) {
		$options['sf_custom_bg'] = '';
	}

	if (empty($options['sf_fade_content'])) {
		$options['sf_fade_content'] = 'none';
	}

	if (empty($options['sf_blur_content'])) {
		$options['sf_blur_content'] = 'none';
	}

	if (empty($options['sf_selectors'])) {
		$options['sf_selectors'] = '';
	}

	if (empty($options['sf_sidebar_pos'])) {
		$options['sf_sidebar_pos'] = 'left';
	}

	if (empty($options['sf_width_panel_1'])) {
		$options['sf_width_panel_1'] = '250';
	}
	if (empty($options['sf_width_panel_2'])) {
		$options['sf_width_panel_2'] = '200';
	}
	if (empty($options['sf_width_panel_3'])) {
		$options['sf_width_panel_3'] = '200';
	}
	if (empty($options['sf_width_panel_4'])) {
		$options['sf_width_panel_4'] = '175';
	}

	if (empty($options['sf_sidebar_style'])) {
		$options['sf_sidebar_style'] = 'push';
	}

	if (empty($options['sf_sub_push_content'])) {
		$options['sf_sub_push_content'] = 'nopush';
	}

	if (empty($options['sf_opening_type'])) {
		$options['sf_opening_type'] = 'hover';
	}

	if (empty($options['sf_sub_opening_type'])) {
		$options['sf_sub_opening_type'] = 'hover';
	}

	if (empty($options['sf_side_stroke'])) {
		$options['sf_side_stroke'] = 'hidden';
	}

	if (empty($options['sf_transparent_panel'])) {
		$options['sf_transparent_panel'] = 'none';
	}

	if (empty($options['sf_search'])) {
		$options['sf_search'] = 'show';
	}

	if (empty($options['sf_search_bg'])) {
		$options['sf_search_bg'] = 'light';
	}

	// Appearance
	if (empty($options['sf_font'])) {
		$options['sf_font'] = 'inherit';
	}
	if (empty($options['sf_font_size'])) {
		$options['sf_font_size'] = '20';
	}

	if (empty($options['sf_font_weight'])) {
		$options['sf_font_weight'] = 'normal';
	}
	if (empty($options['sf_padding'])) {
		$options['sf_padding'] = '10';
	}
	if (empty($options['sf_lh'])) {
		$options['sf_lh'] = '20';
	}
	if (empty($options['sf_alignment'])) {
		$options['sf_alignment'] = 'center';
	}
	if (empty($options['sf_uppercase'])) {
		$options['sf_uppercase'] = 'yes';
	}

	if (empty($options['sf_separators'])) {
		$options['sf_separators'] = 'no';
	}

	if (empty($options['sf_ind'])) {
		$options['sf_separators'] = 'yes';
	}
	if (empty($options['sf_highlight'])) {
		$options['sf_highlight'] = 'semi';
	}

	if (empty($options['sf_highlight_active'])) {
		$options['sf_highlight_active'] = 'no';
	}

	if (empty($options['sf_underline'])) {
		$options['sf_underline'] = '1_left';
	}

	//
	if (empty($options['sf_label_color'])) {
		$options['sf_label_color'] = '#e7e6dd';
	}

	if (empty($options['sf_label_invert'])) {
		$options['sf_label_invert'] = '';
	}
	if (empty($options['sf_label_style'])) {
		$options['sf_label_style'] = 'metro';
	}

	if (empty($options['sf_label_top'])) {
		$options['sf_label_top'] = '0px';
	}

	if (empty($options['sf_label_top_mobile'])) {
		$options['sf_label_top_mobile'] = '0px';
	}

	if (empty($options['sf_label_size'])) {
		$options['sf_label_size'] = '1x';
	}

	if (empty($options['sf_label_vis'])) {
		$options['sf_label_vis'] = 'visible';
	}

	if (empty($options['sf_mob_nav'])) {
		$options['sf_mob_nav'] = '';
	}

	if (empty($options['sf_label_text'])) {
		$options['sf_label_text'] = '';
	}

	if (empty($options['sf_label_text_color'])) {
		$options['sf_label_text_color'] = '#CA3C08';
	}

	if (empty($options['sf_css'])) {
		$options['sf_css'] = '';
	}

	// SOCIAL
	if (empty($options['sf_facebook'])) {
		$options['sf_facebook'] = '';
	}
	if (empty($options['sf_twitter'])) {
		$options['sf_twitter'] = '';
	}
	if (empty($options['sf_pinterest'])) {
		$options['sf_pinterest'] = '';
	}
	if (empty($options['sf_youtube'])) {
		$options['sf_youtube'] = '';
	}
	if (empty($options['sf_instagram'])) {
		$options['sf_instagram'] = '';
	}
	if (empty($options['sf_linkedin'])) {
		$options['sf_linkedin'] = '';
	}
	if (empty($options['sf_gplus'])) {
		$options['sf_gplus'] = '';
	}
	if (empty($options['sf_rss'])) {
		$options['sf_rss'] = '';
	}

	if (empty($options['sf_social_color'])) {
		$options['sf_social_color'] = '#ffffff';
	}

	if (empty($options['sf_separators_color'])) {
		$options['sf_separators_color'] = '#ffffff';
	}

	if (empty($options['sf_separators_width'])) {
		$options['sf_separators_width'] = '10';
	}

	if (empty($options['sf_submenu_support'])) {
		$options['sf_submenu_support'] = 'yes';
	}

	if (empty($options['sf_submenu_classes'])) {
		$options['sf_submenu_classes'] = 'sub-menu, children';
	}

	if (empty($options['sf_togglers'])) {
		$options['sf_togglers'] = '';
	}

	$sf_cached_opts = $options;

	return $options;
}

function sf_get_locations () {
	global $sf_locations;

	if (isset($sf_locations)) return $sf_locations;

	$locations = new stdClass();

	// pages on site
	$locations->pages = get_posts( array(
		'post_type' => 'page', 'post_status' => 'publish',
		'numberposts' => -1, 'orderby' => 'title', 'order' => 'ASC',
		'fields' => array('ID', 'name'),
	));

	// custom post types
	$locations->cposts = get_post_types( array(
		'public' => true,
	), 'object');

	foreach ( array( 'revision', 'post', 'page', 'attachment', 'nav_menu_item' ) as $unset ) {
		unset($locations->cposts[$unset]);
	}

	foreach ( $locations->cposts as $c => $type ) {
		$post_taxes = get_object_taxonomies($c);
		foreach ( $post_taxes as $post_tax) {
			$locations->taxes[] = $post_tax;
		}
	}

	// categories
	$locations->cats = get_categories( array(
		'hide_empty'    => false,
		//'fields'        => 'id=>name', //added in 3.8
	) );

	// WPML languages
	if (function_exists('icl_get_languages') ) {
		//browser()->log('detect langs');
		$locations->langs = icl_get_languages('skip_missing=0&orderby=code');
	}

	foreach ( $locations as $key => $val ) {

		if (!empty($val)) {
			$length = count($val);
			for ($i = 0; $i <= $length; $i++) {
				if (isset($val[$i])) {
					//browser()->log  ( $val[$i] );
				}
			}
		}
	}

	$page_types = array(
		'front'     => __('Front', 'superfly-menu'),
		'home'      => __('Home/Blog', 'superfly-menu'),
		'archive'   => __('Archives'),
		'single'    => __('Single Post'),
		'forbidden' => '404',
		'search'    => __('Search'),
	);

	foreach ($page_types as $key => $label){
		//browser()->log  ( $key, $label );
		//$instance['page-'. $key] = isset($instance['page-'. $key]) ? $instance['page-'. $key] : false;
	}

	$locations->wp_pages = $page_types;

	$sf_locations = $locations;
	return $locations;
}

function sf_fa_on_str() {
	$options = sf_get_options();
	$style = $options['sf_fa_on'];
	$first_checked = $style == 'yes' ? 'checked="checked"' : '';

	echo "
	<p><input id='sf_fa_on' name='sf_options[sf_fa_on]' type='checkbox' value='yes' {$first_checked} style='' /> <label for='sf_fa_on'>Load font</label></p>

	";
}

function sf_test_mode_str() {
	$options = sf_get_options();
	$style = $options['sf_test_mode'];
	$first_checked = $style == 'yes' ? 'checked="checked"' : '';

	echo "
	<p><input id='sf_test_mode' name='sf_options[sf_test_mode]' type='checkbox' value='yes' {$first_checked} style='' /> <label for='sf_test_mode'>Visible only for logged-in (in browser) admins</label></p>

	";
}

function sf_display_str() {
	$options = sf_get_options();
	$user_opts = json_decode($options['sf_display']);
	$locations = $options['locations'];
	//browser()->log('tab ' .$index . ' opts');
	//browser()->log($user_opts);

	?>
	<p>
		<input id='sf_display' name='sf_options[sf_display]' type='hidden' value='<?php echo $options['sf_display']?>' />
	<div class='loc_popup'>
		<p>
			<label for="sf_user_status"><?php _e('Show Superfly menu for:', 'superfly-menu') ?></label>
			<select name="display_user_status" id="sf_user_status" class="widefat">
				<option value="everyone" <?php echo selected( $user_opts->user->everyone, '1' ) ?>><?php _e('Everyone', 'superfly-menu') ?></option>
				<option value="loggedout" <?php echo selected( $user_opts->user->loggedout, '1' ) ?>><?php _e('Logged-out users', 'superfly-menu') ?></option>
				<option value="loggedin" <?php echo selected( $user_opts->user->loggedin, '1' ) ?>><?php _e('Logged-in users', 'superfly-menu') ?></option>
			</select>
		</p>

		<p>
			<label for="sf_display_desktop"><?php _e('Show on desktops:', 'superfly-menu') ?></label>
			<select name="display_desktop" id="sf_display_desktop" class="widefat">
				<option value="yes" <?php echo selected( $user_opts->desktop->yes, '1' ) ?>><?php _e('Show', 'superfly-menu') ?></option>
				<option value="no" <?php echo selected( $user_opts->desktop->no, '1' ) ?>><?php _e('Don\'t show', 'superfly-menu') ?></option>
			</select>
		</p>
		
		<p>
			<label for="sf_display_mobile"><?php _e('Show on mobiles:', 'superfly-menu') ?></label>
			<select name="display_mobile" id="sf_display_mobile" class="widefat">
				<option value="yes" <?php echo selected( $user_opts->mobile->yes, '1' ) ?>><?php _e('Show', 'superfly-menu') ?></option>
				<option value="no" <?php echo selected( $user_opts->mobile->no, '1' ) ?>><?php _e('Don\'t show', 'superfly-menu') ?></option>
			</select>
		</p>

		<p>
			<label for="sf_user_status"><?php _e('Display rule:', 'superfly-menu') ?></label>

			<select name="display_rule" id="display_rule" class="widefat">
				<option value="exclude" <?php echo selected( $user_opts->rule->exclude, '1' ) ?>><?php _e('Hide on checked pages', 'superfly-menu') ?></option>
				<option value="include" <?php echo selected( $user_opts->rule->include, '1' ) ?>><?php _e('Show on checked pages', 'superfly-menu') ?></option>
			</select>
		</p>

		<div style="height:150px; overflow:auto; border:1px solid #dfdfdf; padding:5px; margin-bottom:5px;">
			<h4 class="dw_toggle" style="cursor:pointer;margin-top:0;"><?php _e('Default WP pages', 'superfly-menu') ?></h4>
			<div class="dw_collapse">
				<?php foreach ($locations->wp_pages as $key => $label){
					?>
					<p><input class="checkbox" type="checkbox" value="<?php echo $key?>" <?php checked(isset($user_opts->location->wp_pages->$key) ? $user_opts->location->wp_pages->$key : false, true) ?> id="display_wp_page_<?php echo $key?>" name="display_wp_page_<?php echo $key?>" />
						<label for="display_wp_page_<?php echo $key?>"><?php echo $label .' '. __('Page', 'superfly-menu') ?></label></p>
				<?php
				}
				?>
			</div>

			<h4 class="dw_toggle" style="cursor:pointer;"><?php _e('Pages') ?></h4>
			<div class="dw_collapse">
				<?php foreach ( $locations->pages as $page ) {
					//$instance['page-'. $page->ID] = isset($instance['page-'. $page->ID]) ? $instance['page-'. $page->ID] : false;
					$id = $page->ID;
					$p_title = apply_filters('the_title', $page->post_title, $page->ID);
					if ( $page->post_parent ) {
						$parent = get_post($page->post_parent);

						$p_title .= ' ('. apply_filters('the_title', $parent->post_title, $parent->ID);

						if ( $parent->post_parent ) {
							$grandparent = get_post($parent->post_parent);
							$p_title .= ' - '. apply_filters('the_title', $grandparent->post_title, $grandparent->ID);
							unset($grandparent);
						}
						$p_title .= ')';

						unset($parent);
					}
					//browser()->log($p_title);

					?>
					<p><input class="checkbox" type="checkbox" value="<?php echo $id?>" <?php checked(isset($user_opts->location->pages->$id), true) ?> id="display_page_<?php echo $id ?>" name="display_page_<?php echo $id ?>" />
						<label for="display_page_<?php echo $id?>"><?php echo $p_title ?></label></p>
					<?php   unset($p_title);
				}  ?>
			</div>

			<?php if ( !empty($locations->cposts) ) { ?>
				<h4 class="dw_toggle" style="cursor:pointer;"><?php _e('Custom Post Types', 'superfly-menu') ?> +/-</h4>
				<div class="dw_collapse">
					<?php foreach ( $locations->cposts as $post_key => $custom_post ) {
						?>
						<p><input class="checkbox" type="checkbox" value="<?php echo $post_key?>" <?php checked(isset($user_opts->location->cposts->$post_key), true) ?> id="display_cpost_<?php echo $post_key?>" name="display_cpost_<?php echo $post_key?>" />
							<label for="display_cpost_<?php echo $post_key?>"><?php echo stripslashes($custom_post->labels->name) ?></label></p>
						<?php
						unset($post_key);
						unset($custom_post);
					} ?>
				</div>

				<!--<h4 class="dw_toggle" style="cursor:pointer;"><?php /*_e('Custom Post Type Archives', 'superfly-menu') */?> +/-</h4>
				<div class="dw_collapse">
					<?php /*foreach ( $this->cposts as $post_key => $custom_post ) {
						if ( !$custom_post->has_archive ) {
							// don't give the option if there is no archive page
							continue;
						}
						$instance['type-'. $post_key .'-archive'] = isset($instance['type-'. $post_key .'-archive']) ? $instance['type-'. $post_key .'-archive'] : false;
						*/?>
						<p><input class="checkbox" type="checkbox" <?php /*checked($instance['type-'. $post_key.'-archive'], true) */?> id="<?php /*echo $widget->get_field_id('type-'. $post_key .'-archive'); */?>" name="<?php /*echo $widget->get_field_name('type-'. $post_key .'-archive'); */?>" />
							<label for="<?php /*echo $widget->get_field_id('type-'. $post_key .'-archive'); */?>"><?php /*echo stripslashes($custom_post->labels->name) */?> <?php /*_e('Archive', 'superfly-menu') */?></label></p>
					<?php /*} */?>
				</div>-->
			<?php } ?>

			<h4 class="dw_toggle" style="cursor:pointer;"><?php _e('Categories') ?></h4>
			<div class="dw_collapse">
				<?php foreach ( $locations->cats as $cat ) {
					$catid = $cat->cat_ID;
					?>
					<p><input class="checkbox" type="checkbox"  value="<?php echo $catid?>" <?php checked(isset($user_opts->location->cats->$catid), true) ?> id="display_cat_<?php echo $catid?>" name="display_cat_<?php echo $catid?>" />
						<label for="display_cat_<?php echo $catid?>"><?php echo $cat->cat_name ?></label></p>
					<?php
					unset($cat);
				}
				?>
			</div>

			<?php /*if ( !empty($this->taxes) ) { */?><!--
				<h4 class="dw_toggle" style="cursor:pointer;"><?php /*_e('Taxonomies', 'superfly-menu') */?> +/-</h4>
				<div class="dw_collapse">
					<?php /*foreach ( $this->taxes as $tax ) {
						$instance['tax-'. $tax] = isset($instance['tax-'. $tax]) ? $instance['tax-'. $tax] : false;
						*/?>
						<p><input class="checkbox" type="checkbox" <?php /*checked($instance['tax-'. $tax], true) */?> id="<?php /*echo $widget->get_field_id('tax-'. $tax); */?>" name="<?php /*echo $widget->get_field_name('tax-'. $tax); */?>" />
							<label for="<?php /*echo $widget->get_field_id('tax-'. $tax); */?>"><?php /*echo str_replace(array('_','-'), ' ', ucfirst($tax)) */?></label></p>
						<?php
			/*						unset($tax);
								}
								*/?>
				</div>
			--><?php /*} */?>

			<?php if ( !empty($locations->langs) ) { ?>
				<h4 class="dw_toggle" style="cursor:pointer;"><?php _e('Languages', 'superfly-menu') ?></h4>
				<div class="dw_collapse">
					<?php foreach ( $locations->langs as $lang ) {
						$key = $lang['language_code'];
						?>
						<p><input class="checkbox" type="checkbox" <?php checked(isset($user_opts->location->langs->$key), true) ?> id="display_lang_<?php echo $key?>" name="display_lang_<?php echo $key?>" />
							<label for="display_lang_<?php echo $key?>"><?php echo $lang['native_name'] ?></label></p>

						<?php
						unset($lang);
						unset($key);
					}
					?>
				</div>
			<?php } ?>

			<p><label for="display_ids"><?php _e('Comma Separated list of IDs of posts not listed above', 'superfly-menu') ?>:</label>
				<input type="text" value="<?php echo implode(",", $user_opts->location->ids); ?>" name="display_ids" id="display_ids" />
			</p>
		</div>

		<button name='Submit' type='submit' id='sbmt_sf_popup' class='display-sbmt button-primary' value='Save'>Save Display Options</i></button>

	</div>
	</p>
<?php
}

function sf_alternative_menu_str() {
	$options = sf_get_options();
	echo "<input id='sf_alternative_menu' name='sf_options[sf_alternative_menu]' type='text' value='{$options['sf_alternative_menu']}' style='' />";
}

function sf_hide_def_str() {
	$options = sf_get_options();
	$style = $options['sf_hide_def'];
	$first_checked = $style == 'yes' ? 'checked="checked"' : '';

	echo "
	<p><input id='sf_hide_def' name='sf_options[sf_hide_def]' type='checkbox' value='yes' {$first_checked} style='' /> <label for='sf_hide_def'>Hide default menu when Superfly is generated</label></p>
	";
}

function sf_tab_logo_str() {
	$options = sf_get_options();
	if (empty($options['sf_tab_logo'])) {
		echo "<input id='sf_tab_logo_file' type='file' name='sf_pic' value='{$options['sf_tab_logo']}' /> <input name='Submit' type='submit' class='button-primary' value='Upload' />";
	} else {
		echo '<div class="sf_tab_logo_holder"><img class="sf-tab-logo" src="' . $options['sf_tab_logo'] . '" alt=""/></div>';
		echo '<p><input  style="margin-top: 0;" type="submit" class="button-secondary" id="sf_remove_pic" value="Remove this pic"/></p>
                   <script>
                   jQuery("#sf_remove_pic").on("click keydown", function(){
                        jQuery("#sf_tab_logo").val("");
                   })
                   </script>
               ';
		echo "<span>...or upload new one</span><br><input id='sf_tab_logo_file' type='file' name='sf_pic' value='{$options['sf_tab_logo']}' /> <input name='Submit' type='submit' class='button-primary' value='Upload' />";
	}
	echo " <input id='sf_tab_logo' name='sf_options[sf_tab_logo]' size='100' type='hidden' value='{$options['sf_tab_logo']}' style='' />";
}

function sf_bg_color_panel_1_str() {
	$options = sf_get_options();

	echo "<input id='sf_bg_color_panel_1' data-color-format='hex' name='sf_options[sf_bg_color_panel_1]' type='text' value='{$options['sf_bg_color_panel_1']}' style='' />
		<script>
				var opts = {
          previewontriggerelement: true,
          previewformat: 'hex',
          flat: false,
          color: '#3e98a8',
          customswatches: 'bg',
          swatches: colorscheme,
          order: {
              hsl: 1,
              preview: 2
          },
          onchange: function(container, color) {}
        };
				jQuery(function(){
					jQuery('#sf_bg_color_panel_1').ColorPickerSliders(opts)
				});

	</script>
	";
}

function sf_bg_color_panel_2_str() {
		$options = sf_get_options();

    echo "<input id='sf_bg_color_panel_2' data-color-format='hex' name='sf_options[sf_bg_color_panel_2]' type='text' value='{$options['sf_bg_color_panel_2']}' style='' />
		<script>
				var opts = {
          previewontriggerelement: true,
          previewformat: 'hex',
          flat: false,
          color: '#3e98a8',
          customswatches: 'bg',
          swatches: colorscheme,
          order: {
              hsl: 1,
              preview: 2
          },
          onchange: function(container, color) {}
        };
				jQuery(function(){
					jQuery('#sf_bg_color_panel_2').ColorPickerSliders(opts)
				});

	</script>
	";
}

function sf_bg_color_panel_3_str() {
		$options = sf_get_options();

    echo "<input id='sf_bg_color_panel_3' data-color-format='hex' name='sf_options[sf_bg_color_panel_3]' type='text' value='{$options['sf_bg_color_panel_3']}' style='' />
		<script>
				var opts = {
          previewontriggerelement: true,
          previewformat: 'hex',
          flat: false,
          color: '#3e98a8',
          customswatches: 'bg',
          swatches: colorscheme,
          order: {
              hsl: 1,
              preview: 2
          },
          onchange: function(container, color) {}
        };
				jQuery(function(){
					jQuery('#sf_bg_color_panel_3').ColorPickerSliders(opts)
				});

	</script>
	";
}

function sf_bg_color_panel_4_str() {
		$options = sf_get_options();

    echo "<input id='sf_bg_color_panel_4' data-color-format='hex' name='sf_options[sf_bg_color_panel_4]' type='text' value='{$options['sf_bg_color_panel_4']}' style='' />
		<script>
				var opts = {
          previewontriggerelement: true,
          previewformat: 'hex',
          flat: false,
          color: '#3e98a8',
          customswatches: 'bg',
          swatches: colorscheme,
          order: {
              hsl: 1,
              preview: 2
          },
          onchange: function(container, color) {}
        };
				jQuery(function(){
					jQuery('#sf_bg_color_panel_4').ColorPickerSliders(opts)
				});

	</script>
	";
}

function sf_color_panel_1_str() {
	$options = sf_get_options();

	echo "<input id='sf_color_panel_1' data-color-format='hex' name='sf_options[sf_color_panel_1]' type='text' value='{$options['sf_color_panel_1']}' style='' />
		<script>
				var opts = {
          previewontriggerelement: true,
          previewformat: 'hex',
          flat: false,
          color: '#3e98a8',
          customswatches: 'bg',
          swatches: colorscheme,
          order: {
              hsl: 1,
              preview: 2
          },
          onchange: function(container, color) {}
        };
				jQuery(function(){
					jQuery('#sf_color_panel_1').ColorPickerSliders(opts)
				});

	</script>
	";
}

function sf_social_color_str() {
	$options = sf_get_options();

	echo "<input id='sf_social_color' data-color-format='hex' name='sf_options[sf_social_color]' type='text' value='{$options['sf_social_color']}' style='' />
		<script>
				var opts = {
          previewontriggerelement: true,
          previewformat: 'hex',
          flat: false,
          color: '#3e98a8',
          customswatches: 'bg',
          swatches: colorscheme,
          order: {
              hsl: 1,
              preview: 2
          },
          onchange: function(container, color) {}
        };
				jQuery(function(){
					jQuery('#sf_social_color').ColorPickerSliders(opts)
				});

	</script>
	";
}

function sf_separators_color_str() {
	$options = sf_get_options();

	echo "<input id='sf_separators_color' data-color-format='hex' name='sf_options[sf_separators_color]' type='text' value='{$options['sf_separators_color']}' style='' />
		<script>
				var opts = {
          previewontriggerelement: true,
          previewformat: 'hex',
          flat: false,
          color: '#3e98a8',
          customswatches: 'bg',
          swatches: colorscheme,
          order: {
              hsl: 1,
              preview: 2
          },
          onchange: function(container, color) {}
        };
				jQuery(function(){
					jQuery('#sf_separators_color').ColorPickerSliders(opts)
				});

	</script>
	";
}

function sf_bg_image_panel_1_str() {
	$options = sf_get_options();
	$bg = $options['sf_bg_image_panel_1'];
	$url = plugins_url('/img', __FILE__);

	echo "<select id='sf_bg_image_panel_1' name='sf_options[sf_bg_image_panel_1]'>
    <option value='none' " . ($bg === 'none' ? 'selected="selected"' : '') . ">None</option>
    <option value='blur1' " . ($bg === 'blur1' ? 'selected="selected"' : '') . ">Blurred #1</option>
    <option value='blur2' " . ($bg === 'blur2' ? 'selected="selected"' : '') . ">Blurred #2</option>
    <option value='blur3' " . ($bg === 'blur3' ? 'selected="selected"' : '') . ">Blurred #3</option>
    <option value='blur4' " . ($bg === 'blur4' ? 'selected="selected"' : '') . ">Blurred #4</option>
    <option value='blur5' " . ($bg === 'blur5' ? 'selected="selected"' : '') . ">Blurred #5</option>
    <option value='blur6' " . ($bg === 'blur6' ? 'selected="selected"' : '') . ">Blurred #6</option>
    <option value='blur7' " . ($bg === 'blur7' ? 'selected="selected"' : '') . ">Blurred #7</option>
    <option value='blur8' " . ($bg === 'blur8' ? 'selected="selected"' : '') . ">Blurred #8</option>
    <option value='blur9' " . ($bg === 'blur9' ? 'selected="selected"' : '') . ">Blurred #9</option>
    <option value='blur10' " . ($bg === 'blur10' ? 'selected="selected"' : '') . ">Blurred #10</option>
    <option value='blur11' " . ($bg === 'blur11' ? 'selected="selected"' : '') . ">Blurred #11</option>
    <option value='blur12' " . ($bg === 'blur12' ? 'selected="selected"' : '') . ">Blurred #12</option>
    <option value='blur13' " . ($bg === 'blur13' ? 'selected="selected"' : '') . ">Blurred #13</option>
    <option value='blur14' " . ($bg === 'blur14' ? 'selected="selected"' : '') . ">Blurred #14</option>
    <option value='blur15' " . ($bg === 'blur15' ? 'selected="selected"' : '') . ">Blurred #15</option>
    <option value='pattern1' " . ($bg === 'pattern1' ? 'selected="selected"' : '') . ">Pattern #1</option>
    <option value='pattern2' " . ($bg === 'pattern2' ? 'selected="selected"' : '') . ">Pattern #2</option>
    <option value='pattern3' " . ($bg === 'pattern3' ? 'selected="selected"' : '') . ">Pattern #3</option>
    <option value='pattern4' " . ($bg === 'pattern4' ? 'selected="selected"' : '') . ">Pattern #4</option>
    <option value='pattern5' " . ($bg === 'pattern5' ? 'selected="selected"' : '') . ">Pattern #5</option>
    <option value='pattern6' " . ($bg === 'pattern6' ? 'selected="selected"' : '') . ">Pattern #6</option>
    <option value='pattern7' " . ($bg === 'pattern7' ? 'selected="selected"' : '') . ">Pattern #7</option>
    <option value='pattern8' " . ($bg === 'pattern8' ? 'selected="selected"' : '') . ">Pattern #8</option>
    <option value='pattern9' " . ($bg === 'pattern9' ? 'selected="selected"' : '') . ">Pattern #9</option>
    <option value='pattern10' " . ($bg === 'pattern10' ? 'selected="selected"' : '') . ">Pattern #10</option>
    <option value='pattern11' " . ($bg === 'pattern11' ? 'selected="selected"' : '') . ">Pattern #11</option>
    <option value='pattern12' " . ($bg === 'pattern12' ? 'selected="selected"' : '') . ">Pattern #12</option>
    <option value='pattern13' " . ($bg === 'pattern13' ? 'selected="selected"' : '') . ">Pattern #13</option>
    <option value='pattern14' " . ($bg === 'pattern14' ? 'selected="selected"' : '') . ">Pattern #14</option>
    <option value='pattern15' " . ($bg === 'pattern15' ? 'selected="selected"' : '') . ">Pattern #15</option>
    </select>
    <p id='nks_bg_preview'><span class='content'>Background image preview</span></p>
    ";
	echo "
	  <script>
	  jQuery(function($){
        var preview = $('#nks_bg_preview')
        var custom = $('.nks_cc_custom_bg');

				$('#sf_bg_image_panel_1').change(function(){
           var val = $(this).val();
           var style;

           if (val === 'none' ) {
              preview.css({'backgroundImage': '', display: 'none'});
              custom.fadeOut(200);

           } else if ( val === 'custom'){
           		preview.css({'backgroundImage': '', display: 'none'});
           		custom.fadeIn(200);

           } else {
							preview.css({'backgroundImage': 'url({$url}/bg/' + val + '.jpg)', display: 'block'});
							custom.fadeOut(200);
           }

        }).change();
	  })

    </script>
    ";
}



function sf_color_panel_2_str() {
		$options = sf_get_options();

    echo "<input id='sf_color_panel_2' data-color-format='hex' name='sf_options[sf_color_panel_2]' type='text' value='{$options['sf_color_panel_2']}' style='' />
		<script>
				var opts = {
          previewontriggerelement: true,
          previewformat: 'hex',
          flat: false,
          color: '#3e98a8',
          customswatches: 'bg',
          swatches: colorscheme,
          order: {
              hsl: 1,
              preview: 2
          },
          onchange: function(container, color) {}
        };
				jQuery(function(){
					jQuery('#sf_color_panel_2').ColorPickerSliders(opts)
				});

	</script>
	";
}

function sf_color_panel_3_str() {
		$options = sf_get_options();

    echo "<input id='sf_color_panel_3' data-color-format='hex' name='sf_options[sf_color_panel_3]' type='text' value='{$options['sf_color_panel_3']}' style='' />
		<script>
				var opts = {
          previewontriggerelement: true,
          previewformat: 'hex',
          flat: false,
          color: '#3e98a8',
          customswatches: 'bg',
          swatches: colorscheme,
          order: {
              hsl: 1,
              preview: 2
          },
          onchange: function(container, color) {}
        };
				jQuery(function(){
					jQuery('#sf_color_panel_3').ColorPickerSliders(opts)
				});

	</script>
	";
}

function sf_underline_color_str() {
		$options = sf_get_options();

    echo "<input id='sf_underline_color' data-color-format='hex' name='sf_options[sf_underline_color]' type='text' value='{$options['sf_underline_color']}' style='' />
		<script>
				var opts = {
          previewontriggerelement: true,
          previewformat: 'hex',
          flat: false,
          color: '#3e98a8',
          customswatches: 'bg',
          swatches: colorscheme,
          order: {
              hsl: 1,
              preview: 2
          },
          onchange: function(container, color) {}
        };
				jQuery(function(){
					jQuery('#sf_underline_color').ColorPickerSliders(opts)
				});

	</script>
	";
}

function sf_search_bg_str() {
	$options = sf_get_options();
	$size = $options['sf_search_bg'];

	echo "<select id='sf_search_bg' name='sf_options[sf_search_bg]'>
    <option value='light' " . ($size === 'light' ? 'selected="selected"' : '') . ">Light</option>
    <option value='dark' " . ($size === 'dark' ? 'selected="selected"' : '') . ">Dark</option>
    </select>
    ";
}

function sf_color_panel_4_str() {
		$options = sf_get_options();

    echo "<input id='sf_color_panel_4' data-color-format='hex' name='sf_options[sf_color_panel_4]' type='text' value='{$options['sf_color_panel_4']}' style='' />
		<script>
				var opts = {
          previewontriggerelement: true,
          previewformat: 'hex',
          flat: false,
          color: '#3e98a8',
          customswatches: 'bg',
          swatches: colorscheme,
          order: {
              hsl: 1,
              opacity: 2,
              preview: 3
          },
          onchange: function(container, color) {}
        };
				jQuery(function(){
					jQuery('#sf_color_panel_4').ColorPickerSliders(opts)
				});

	</script>
	";
}


function sf_active_menu_str() {
	$options = sf_get_options();

	$menus = get_registered_nav_menus();

	foreach ( $menus as $location => $description ) {

		//echo $location . ': ' . $description . '<br />';
	}

	$menus2 = get_terms( 'nav_menu', array( 'hide_empty' => false ) );

	foreach ( $menus2 as $menu ) {

		foreach ($menu as $key => $value) {
			//echo "Key:  $key; Value:  $value<br />\n";
		}
	}

	echo "<select id='sf_active_menu' name='sf_options[sf_active_menu]'>";
	//echo "<option value=''> None </option>";

//	foreach(get_registered_nav_menus() as $location=>$menu ) {
//		$selected = $options['sf_active_menu'] == $location ? 'selected' : '';
//		echo "<option ". $selected ." value='". $location ."'> ". $menu ."</option>";
//	}

	foreach ( $menus2 as $menu ) {
		$selected = $options['sf_active_menu'] == $menu->term_id ? 'selected' : '';
		echo "<option ". $selected . " value='". $menu->term_id ."'> ". $menu->name ."</option>";
	}

	echo "</select>";

}

function sf_width_panel_1_str()
{
	$options = sf_get_options();
	echo " <input id='sf_width_panel_1' name='sf_options[sf_width_panel_1]' size='10' type='text' value='{$options['sf_width_panel_1']}' style='' /> px";
}

function sf_width_panel_2_str()
{
	$options = sf_get_options();
	echo " <input id='sf_width_panel_2' name='sf_options[sf_width_panel_2]' size='10' type='text' value='{$options['sf_width_panel_2']}' style='' /> px";
}

function sf_width_panel_3_str()
{
	$options = sf_get_options();
	echo " <input id='sf_width_panel_3' name='sf_options[sf_width_panel_3]' size='10' type='text' value='{$options['sf_width_panel_3']}' style='' /> px";
}

function sf_width_panel_4_str()
{
	$options = sf_get_options();
	echo " <input id='sf_width_panel_4' name='sf_options[sf_width_panel_4]' size='10' type='text' value='{$options['sf_width_panel_4']}' style='' /> px";
}

function sf_sidebar_scale_str() {
	$options = sf_get_options();
	$style = $options['sf_sidebar_scale'];
	$first_checked = $style == 'yes' ? 'checked="checked"' : '';

	echo "
	<p><input id='sf_sidebar_scale' name='sf_options[sf_sidebar_scale]' type='checkbox' value='yes' {$first_checked} style='' /> <label for='sf_sidebar_scale'>Scale effect for sidebar content on opening</label></p>
	";
}

function sf_custom_bg_str() {
    $options = sf_get_options();
    if (empty($options['sf_custom_bg'])) {
        echo "<input id='sf_custom_bg' type='file' name='sf_custom_bg' value='{$options['sf_custom_bg']}' /> <input name='Submit' type='submit' class='button-primary' value='Upload' />";
    } else {
        echo '<div class="sf_custom_bg" ><img src="' . $options['sf_custom_bg'] . '" alt=""/></div>';
        echo "<span>...or upload new one</span><br><input id='sf_custom_bg' type='file' name='sf_custom_bg' value='{$options['sf_custom_bg']}' /><input name='Submit' type='submit' class='button-primary' value='Upload' />";
    }
    echo " <input id='sf_custom_bg' name='sf_options[sf_custom_bg]' size='100' type='hidden' value='{$options['sf_custom_bg']}' style='' />";
}

function sf_label_color_str() {
	$options = sf_get_options();
	$shape = $options['sf_label_style'];
	$size = $options['sf_label_size'];

	echo "<div id='sf_label_preview'><div class='sf_rollback sf_color1'></div></div>";
   echo "<input id='sf_label_color' data-color-format='hex' name='sf_options[sf_label_color]' type='text' value='{$options['sf_label_color']}' style='' />
	<script>

	var preview = jQuery('#sf_label_preview');
	var previewColor = preview.find('.fa:not(.fa-inverse)');
			var opts = {
         previewontriggerelement: true,
         previewformat: 'hex',
         flat: false,
         color: '#c0392b',
         customswatches: 'label',
         swatches: colorscheme,
         order: {
             hsl: 1,
             preview: 2
         },
         onchange: function(container, color) {
         	previewColor.css('color', color.tiny.toRgbString())
         }
       };
			jQuery(function(){
				jQuery('#sf_label_color').ColorPickerSliders(opts)
			});

</script>
";
}function sf_label_text_color_str() {
	$options = sf_get_options();

	echo "<div id='sf_label_preview'><div class='sf_rollback sf_color1'></div></div>";
   echo "<input id='sf_label_text_color' data-color-format='hex' name='sf_options[sf_label_text_color]' type='text' value='{$options['sf_label_text_color']}' style='' />
	<script>

			var opts = {
         previewontriggerelement: true,
         previewformat: 'hex',
         flat: false,
         color: '#c0392b',
         customswatches: 'label',
         swatches: colorscheme,
         order: {
             hsl: 1,
             preview: 2
         }
       };
			jQuery(function(){
				jQuery('#sf_label_text_color').ColorPickerSliders(opts)
			});

</script>
";
}

function sf_label_size_str() {
	$options = sf_get_options();
	$size = $options['sf_label_size'];

	echo "<select id='sf_label_size' name='sf_options[sf_label_size]'>
    <option value='1x' " . ($size === '1x' ? 'selected="selected"' : '') . ">1x</option>
    <option value='2x' " . ($size === '2x' ? 'selected="selected"' : '') . ">2x</option>
    <option value='3x' " . ($size === '3x' ? 'selected="selected"' : '') . ">3x</option>
    </select>
    ";

	echo "
	  <script>
	  jQuery('#sf_label_size').change(function(){
	    var val = jQuery(this).val();
			preview.find('.fa-stack').removeClass('fa-1x fa-2x fa-3x').addClass('fa-' + val);
	  }).change()

	   </script>
	   ";

}

function sf_label_invert_str() {
	$options = sf_get_options();
	$style = $options['sf_label_invert'];
	$first_checked = $style == 'yes' ? 'checked="checked"' : '';

	echo "
	<p><input id='sf_label_invert' name='sf_options[sf_label_invert]' type='checkbox' value='yes' {$first_checked} style='' /> <label for='sf_label_invert'>Invert colors</label></p>
	";
	echo "
	  <script>
	  jQuery('#sf_label_invert').change(function() {
	        var back = preview.find('i:first');
	        var fore = preview.find('i:last');
	        var color;

	  	    if(this.checked) {
	  	    		color = back.css('color');
	  	        fore.removeClass('fa-inverse').css('color', color);
	  	        back.addClass('fa-inverse').css('color', '');
	  	        previewColor = fore;

	  	    } else {
	  	    	  color = fore.css('color');
	  	        back.removeClass('fa-inverse').css('color', color);
	  	        fore.addClass('fa-inverse').css('color', '');
	  	        previewColor = back;
	  	    }
	  	}).change();

	   </script>
	   ";

}

function sf_selectors_str () {
	$options = sf_get_options();
	echo "<input type='text' id='sf_selectors' value='{$options['sf_selectors']}' name='sf_options[sf_selectors]' value>";
}

function sf_label_no_anim_str() {
	$options = sf_get_options();
	$style = $options['sf_label_no_anim'];
	$first_checked = $style == 'yes' ? 'checked="checked"' : '';

	echo "
	<p><input id='sf_label_no_anim' name='sf_options[sf_label_no_anim]' type='checkbox' value='yes' {$first_checked} style='' /> <label for='sf_label_no_anim'>Disable animation</label></p>
	";


}
function sf_label_style_str() {

	$options = sf_get_options();
	$val = $options['sf_label_style'];
	$first_checked = $val == 'none' ? 'checked="checked"' : '';
  $sec_checked = $val == 'square' ? 'checked="checked"' : '';
  $third_checked = $val == 'rsquare' ? 'checked="checked"' : '';
  $fourth_checked = $val == 'circle' ? 'checked="checked"' : '';
	$fifth_checked = $val == 'metro' ? 'checked="checked"' : '';


	echo "
	<p><input id='sf_label_style_none' name='sf_options[sf_label_style]' type='radio' value='none' {$first_checked} style='' /> <label for='sf_label_style_none'>Just icon</label></p>
	<p><input id='sf_label_style_metro' name='sf_options[sf_label_style]' type='radio' value='metro' {$fifth_checked} style='' /> <label for='sf_label_style_metro'>Metro-style icon</label></p>
	<p><input id='sf_label_style_square' name='sf_options[sf_label_style]' type='radio' value='square' {$sec_checked} style='' /> <label for='sf_label_style_square'>Icon in rectangle</label></p>
	<p><input id='sf_label_style_rsquare' name='sf_options[sf_label_style]' type='radio' value='rsquare' {$third_checked} style='' /> <label for='sf_label_style_rsquare'>Icon in rounded rectangle</label></p>
	<p><input id='sf_label_style_circle' name='sf_options[sf_label_style]' type='radio' value='circle' {$fourth_checked} style='' /> <label for='sf_label_style_circle'>Icon in circle</label></p>
	";
	echo "
  <script>
  jQuery('input[id*=sf_label_style]').change(function(){
    var val = jQuery(this).val();
  })
   </script>
   ";
}

function sf_label_top_str() {
	$options = sf_get_options();
	echo " <input id='sf_label_top' name='sf_options[sf_label_top]' size='6' type='text' value='{$options['sf_label_top']}' style='' />";
}

function sf_label_top_mobile_str() {
	$options = sf_get_options();
	echo " <input id='sf_label_top_mobile' name='sf_options[sf_label_top_mobile]' size='6' type='text' value='{$options['sf_label_top_mobile']}' style='' />";
}


function sf_sidebar_style_str() {
    $options = sf_get_options();
    $type = $options['sf_sidebar_style'];

    echo "<select id='sf_sidebar_style' name='sf_options[sf_sidebar_style]'>
    <option value='push' " . ($type === 'push' ? 'selected="selected"' : '') . ">Push content</option>
    <option value='slide' " . ($type === 'slide' ? 'selected="selected"' : '') . ">Slide on top</option>
    <option value='static' " . ($type === 'static' ? 'selected="selected"' : '') . ">Always visible *</option>
    </select>
    <p>* Always visible option requires body padding so is not compatible with fixed width themes in most cases</p>
    ";

}

function sf_sub_push_content_str() {
    $options = sf_get_options();
    $size = $options['sf_sub_push_content'];

    echo "<select id='sf_sub_push_content' name='sf_options[sf_sub_push_content]'>
    <option value='push' " . ($size === 'push' ? 'selected="selected"' : '') . ">Push content</option>
    <option value='nopush' " . ($size === 'nopush' ? 'selected="selected"' : '') . ">Don't push</option>
    </select>
    ";

}

function sf_opening_type_str() {
	$options = sf_get_options();
	$size = $options['sf_opening_type'];

	echo "<select id='sf_opening_type' name='sf_options[sf_opening_type]'>
    <option value='hover' " . ($size === 'hover' ? 'selected="selected"' : '') . ">On mouseover</option>
    <option value='click' " . ($size === 'click' ? 'selected="selected"' : '') . ">On click</option>
    </select>
    ";
}

function sf_sub_opening_type_str() {
	$options = sf_get_options();
	$size = $options['sf_sub_opening_type'];

	echo "<select id='sf_sub_opening_type' name='sf_options[sf_sub_opening_type]'>
    <option value='hover' " . ($size === 'hover' ? 'selected="selected"' : '') . ">On mouseover</option>
    <option value='click' " . ($size === 'click' ? 'selected="selected"' : '') . ">On click</option>
    </select>
    ";
}

function sf_side_stroke_str() {
	$options = sf_get_options();
	$size = $options['sf_side_stroke'];

	echo "<select id='sf_side_stroke' name='sf_options[sf_side_stroke]'>
	    <option value='hidden' " . ($size === 'hidden' ? 'selected="selected"' : '') . ">Don't show it</option>

    <option value='show' " . ($size === 'show' ? 'selected="selected"' : '') . ">Show it</option>
    </select>
    ";
}

function sf_transparent_panel_str() {
	$options = sf_get_options();
	$color = $options['sf_transparent_panel'];

	echo "<select id='sf_transparent_panel' name='sf_options[sf_transparent_panel]'>
    <option value='none' " . ($color === 'none' ? 'selected="selected"' : '') . ">Turned off</option>
    <option value='dark' " . ($color === 'dark' ? 'selected="selected"' : '') . ">Dark</option>
    <option value='light' " . ($color === 'light' ? 'selected="selected"' : '') . ">Light</option>
    </select>
    ";
}

function sf_search_str() {
	$options = sf_get_options();
	$size = $options['sf_search'];

	echo "<select id='sf_search' name='sf_options[sf_search]'>
    <option value='show' " . ($size === 'show' ? 'selected="selected"' : '') . ">Show search in sidebar</option>
    <option value='hidden' " . ($size === 'hidden' ? 'selected="selected"' : '') . ">Don't show</option>
    </select>
    ";
}

function sf_font_str() {
	$options = sf_get_options();
	$size = $options['sf_font'];

	echo "<select id='sf_font' name='sf_options[sf_font]'>
    <option value='inherit' " . ($size === 'inherit' ? 'selected="selected"' : '') . ">Site default font</option>
    <option value='helvetica' " . ($size === 'helvetica' ? 'selected="selected"' : '') . ">Helvetica </option>
    <option value='sans' " . ($size === 'sans' ? 'selected="selected"' : '') . ">Open Sans</option>
    <option value='roboto' " . ($size === 'roboto' ? 'selected="selected"' : '') . ">Roboto Slab</option>
    <option value='lato' " . ($size === 'lato' ? 'selected="selected"' : '') . ">Lato</option>
    <option value='ubuntu' " . ($size === 'ubuntu' ? 'selected="selected"' : '') . ">Ubuntu</option>
    </select>
    ";

	echo "
	  <script>
	  jQuery('#sf_font').change(function(){
	    var val = jQuery(this).val();
	  }).change()

	   </script>
	   ";
}

function sf_font_size_str() {
	$options = sf_get_options();
	echo " <input id='sf_font_size' name='sf_options[sf_font_size]' size='2' type='text' value='{$options['sf_font_size']}' style='' /> px";
}

function sf_padding_str() {
	$options = sf_get_options();
	echo " <input id='sf_padding' name='sf_options[sf_padding]' size='2' type='text' value='{$options['sf_padding']}' style='' /> px";
}

function sf_lh_str() {
	$options = sf_get_options();
	echo " <input id='sf_lh' name='sf_options[sf_lh]' size='2' type='text' value='{$options['sf_lh']}' style='' /> px";
}

function sf_font_weight_str() {
	$options = sf_get_options();
	$style = $options['sf_font_weight'];

	echo "<select id='sf_font_weight' name='sf_options[sf_font_weight]'>
	  <option value='normal' " . ($style === 'normal' ? 'selected="selected"' : '') . ">Normal</option>
    <option value='bold' " . ($style === 'bold' ? 'selected="selected"' : '') . ">Bold</option>
    <option value='thin' " . ($style === 'thin' ? 'selected="selected"' : '') . ">Thin</option>
    </select>
    ";
}

function sf_alignment_str() {
	$options = sf_get_options();
	$style = $options['sf_alignment'];

	echo "<select id='sf_alignment' name='sf_options[sf_alignment]'>
	  <option value='center' " . ($style === 'center' ? 'selected="selected"' : '') . ">Center</option>
    <option value='left' " . ($style === 'left' ? 'selected="selected"' : '') . ">Left</option>
    <option value='right' " . ($style === 'right' ? 'selected="selected"' : '') . ">Right</option>
    </select>
    ";
}

function sf_uppercase_str() {
	$options = sf_get_options();
	$style = $options['sf_uppercase'];

	echo "<select id='sf_uppercase' name='sf_options[sf_uppercase]'>
	  <option value='yes' " . ($style === 'yes' ? 'selected="selected"' : '') . ">Uppercase</option>
    <option value='no' " . ($style === 'no' ? 'selected="selected"' : '') . ">Capitalization</option>
    </select>
    ";
}

function sf_separators_str() {
	$options = sf_get_options();
	$style = $options['sf_separators'];

	echo "<select id='sf_separators' name='sf_options[sf_separators]'>
	  <option value='no' " . ($style === 'no' ? 'selected="selected"' : '') . ">No separators</option>
    <option value='yes' " . ($style === 'yes' ? 'selected="selected"' : '') . ">Add separators</option>
    </select>
    ";
}function sf_ind_str() {
	$options = sf_get_options();
	$style = $options['sf_ind'];

	echo "<select id='sf_ind' name='sf_options[sf_ind]'>
	  <option value='yes' " . ($style === 'yes' ? 'selected="selected"' : '') . ">With indicators</option>
    <option value='no' " . ($style === 'no' ? 'selected="selected"' : '') . ">No indicators</option>
    </select>
    ";
}

function sf_separators_width_str() {
	$options = sf_get_options();
	echo " <input id='sf_separators_width' name='sf_options[sf_separators_width]' size='2' type='text' value='{$options['sf_separators_width']}' style='' /> %";
}

function sf_highlight_str() {
	$options = sf_get_options();
	$style = $options['sf_highlight'];

	echo "<select id='sf_highlight' name='sf_options[sf_highlight]'>
	  <option value='semi' " . ($style === 'semi' ? 'selected="selected"' : '') . ">Semitransparent highlight</option>
	  <option value='solid' " . ($style === 'solid' ? 'selected="selected"' : '') . ">Solid color highlighting</option>
    <option value='no' " . ($style === 'no' ? 'selected="selected"' : '') . ">No highlighting</option>
    </select>
    <p>When solid color is used, it will be identical to next panel background color</p>
    ";
}

function sf_highlight_active_str() {
	$options = sf_get_options();
	$style = $options['sf_highlight_active'];

	echo "<select id='sf_highlight_active' name='sf_options[sf_highlight_active]'>
	  <option value='yes' " . ($style === 'yes' ? 'selected="selected"' : '') . ">With highlighting</option>
    <option value='no' " . ($style === 'no' ? 'selected="selected"' : '') . ">No highlighting</option>
    </select>
    ";
}

function sf_underline_str() {
	$options = sf_get_options();
	$style = $options['sf_underline'];


	echo "<select id='sf_underline' name='sf_options[sf_underline]'>
	  <option value='0_none' " . ($style === '0_none' ? 'selected="selected"' : '') . ">None</option>
	  <option value='1_left' " . ($style === '1_left' ? 'selected="selected"' : '') . ">Left to right word width</option>
    <option value='2_left' " . ($style === '2_left' ? 'selected="selected"' : '') . ">Left to right full width</option>
    <option value='1_center' " . ($style === '1_center' ? 'selected="selected"' : '') . ">Centered word width</option>
    <option value='2_center' " . ($style === '2_center' ? 'selected="selected"' : '') . ">Centered full width</option>
    </select>
    ";
}

function sf_label_vis_str() {
	$options = sf_get_options();
	$val = $options['sf_label_vis'];
	$first_checked = $val == 'visible' ? 'checked="checked"' : '';
  $sec_checked = $val == 'hidden' ? 'checked="checked"' : '';

	echo "
	<p><input id='sf_label_vis_visible' name='sf_options[sf_label_vis]'  type='radio' value='visible' {$first_checked} style='' /> <label for='sf_label_vis_visible'>Visible</label></p>
	<p><input id='sf_label_vis_hidden' name='sf_options[sf_label_vis]'  type='radio' value='hidden' {$sec_checked} style='' /> <label for='sf_label_vis_hidden'>Don't show it</label></p>
	";
}

function sf_mob_nav_str() {
	$options = sf_get_options();
	$style = $options['sf_mob_nav'];
	$first_checked = $style == 'yes' ? 'checked="checked"' : '';

	echo "
	<p><input id='sf_mob_nav' name='sf_options[sf_mob_nav]' type='checkbox' value='yes' {$first_checked} style='' /> <label for='sf_mob_nav'>Add navbar (overrides CSS top value set for mobiles in option above)</label></p>

	";
}

function sf_fade_content_str () {
    $options = sf_get_options();
	  $light_checked = $options['sf_fade_content'] == 'light' ? 'checked="checked"' : '';
    $dark_checked = $options['sf_fade_content'] == 'dark' ? 'checked="checked"' : '';
    $none_checked = $options['sf_fade_content'] == 'none' ? 'checked="checked"' : '';

  	echo "<p><input id='sf_fade_content_none' name='sf_options[sf_fade_content]' type='radio' {$none_checked} value='none' style='' /> <label for='sf_fade_content_none'>Don't fade (recommended for better animation performance in Webkit browsers on Windows)</label></p>";
	  echo "<p><input id='sf_fade_content_light' name='sf_options[sf_fade_content]' type='radio' {$light_checked} value='light' style='' /> <label for='sf_fade_content_light'>Light overlay</label></p>";
   	echo "<p><input id='sf_fade_content_dark' name='sf_options[sf_fade_content]' type='radio' {$dark_checked} value='dark' style='' /> <label for='sf_fade_content_dark'>Dark overlay</label></p>";
}

function sf_blur_content_str () {
    $options = sf_get_options();
	  $first_checked = $options['sf_blur_content'] == 'blur' ? 'checked="checked"' : '';
    $sec_checked = $options['sf_blur_content'] == 'none' ? 'checked="checked"' : '';

  	echo "<p><input id='sf_blur_content_blur' name='sf_options[sf_blur_content]' type='radio' {$first_checked} value='blur' style='' /> <label for='sf_blur_content_blur'>Blur (can slow down performance)</label></p>";
	  echo "<p><input id='sf_blur_content_none' name='sf_options[sf_blur_content]' type='radio' {$sec_checked} value='none' style='' /> <label for='sf_blur_content_none'>Don't blur</label></p>";
}

function sf_label_text_str () {
	$options = sf_get_options();
	$style = $options['sf_label_text'];

	echo "<select id='sf_label_text' name='sf_options[sf_label_text]'>
	  <option value='yes' " . ($style === 'yes' ? 'selected="selected"' : '') . ">Show text</option>
    <option value='no' " . ($style === 'no' ? 'selected="selected"' : '') . ">Don't show</option>
    </select>
    ";
}

function sf_sidebar_pos_str () {
    $options = sf_get_options();
    $left_checked = $options['sf_sidebar_pos'] == 'left' ? 'checked="checked"' : '';
    $right_checked = $options['sf_sidebar_pos'] == 'right' ? 'checked="checked"' : '';

   	echo "<p><input id='sf_sidebar_pos_left' name='sf_options[sf_sidebar_pos]' type='radio' {$left_checked} value='left' style='' /> <label for='sf_sidebar_pos_left'></label></p>";
   	echo "<p><input id='sf_sidebar_pos_right' name='sf_options[sf_sidebar_pos]' type='radio' {$right_checked} value='right' style='' /> <label for='sf_sidebar_pos_right'></label></p>";
}

function sf_css_str()
{
    $options = sf_get_options();
    echo "<textarea cols='100' rows='10' id='sf_css' name='sf_options[sf_css]' >" . $options['sf_css'] . "</textarea>";
}

function sf_facebook_str() {
	$options = sf_get_options();
	echo " <input id='sf_facebook' name='sf_options[sf_facebook]' size='100' type='text' value='{$options['sf_facebook']}' style='' />";
}



function sf_twitter_str() {
	$options = sf_get_options();
	echo " <input id='sf_twitter' name='sf_options[sf_twitter]' size='100' type='text' value='{$options['sf_twitter']}' style='' />";
}


function sf_pinterest_str() {
	$options = sf_get_options();
	echo " <input id='sf_pinterest' name='sf_options[sf_pinterest]' size='100' type='text' value='{$options['sf_pinterest']}' style='' />";
}
function sf_youtube_str() {
	$options = sf_get_options();
	echo " <input id='sf_youtube' name='sf_options[sf_youtube]' size='100' type='text' value='{$options['sf_youtube']}' style='' />";
}
function sf_instagram_str() {
	$options = sf_get_options();
	echo " <input id='sf_instagram' name='sf_options[sf_instagram]' size='100' type='text' value='{$options['sf_instagram']}' style='' />";
}
function sf_linkedin_str() {
	$options = sf_get_options();
	echo " <input id='sf_linkedin' name='sf_options[sf_linkedin]' size='100' type='text' value='{$options['sf_linkedin']}' style='' />";
}

function sf_gplus_str() {
	$options = sf_get_options();
	echo " <input id='sf_gplus' name='sf_options[sf_gplus]' size='100' type='text' value='{$options['sf_gplus']}' style='' />";
}
function sf_rss_str() {
	$options = sf_get_options();
	echo " <input id='sf_rss' name='sf_options[sf_rss]' size='100' type='text' value='{$options['sf_rss']}' style='' />";
}

function sf_submenu_support_str() {
	$options = sf_get_options();
	$style = $options['sf_submenu_support'];


	echo "<select id='sf_submenu_support' name='sf_options[sf_submenu_support]'>
	  <option value='yes' " . ($style === 'yes' ? 'selected="selected"' : '') . ">With sub-menus</option>
    <option value='no' " . ($style === 'no' ? 'selected="selected"' : '') . ">Single-level menu</option>
    </select>
    ";
}

function sf_submenu_classes_str()
{
	$options = sf_get_options();
	echo "<input id='sf_submenu_classes' name='sf_options[sf_submenu_classes]' type='text' value='{$options['sf_submenu_classes']}' style='' />";
}

function sf_togglers_str()
{
	$options = sf_get_options();
	echo "<input id='sf_togglers' name='sf_options[sf_togglers]' type='text' value='{$options['sf_togglers']}' style='' />";
}


function sf_options_validate($plugin_options) {
	$options = get_option('plugin_options');

	if (!empty($_POST['update'])) {
		// Get the options array defined for the form
		foreach ($plugin_options as $option) {
			$id = $option['id'];
			//  Set the check box to "0" by default
			if ( 'checkbox' == $option['type'] && ! isset( $input[$id] ) ) {
				$input[$id] = "no";
			}
		}
	}

	if (isset($_FILES['sf_pic']) && ($_FILES['sf_pic']['size'] > 0)) {

		// Get the type of the uploaded file. This is returned as "type/extension"
		$arr_file_type = wp_check_filetype(basename($_FILES['sf_pic']['name']));
		$uploaded_file_type = $arr_file_type['type'];

		// Set an array containing a list of acceptable formats
		$allowed_file_types = array('image/jpg', 'image/jpeg', 'image/gif', 'image/png');

		// If the uploaded file is the right format
		if (in_array($uploaded_file_type, $allowed_file_types)) {

			// Options array for the wp_handle_upload function. 'test_upload' => false
			$upload_overrides = array('test_form' => false);

			//delete previous
			//if (isset($plugin_options['sf_pic'])) unlink($plugin_options['sf_pic']);

			$uploaded_file = wp_handle_upload($_FILES['sf_pic'], $upload_overrides);

			// If the wp_handle_upload call returned a local path for the image
			if (isset($uploaded_file['file'])) {
				// The wp_insert_attachment function needs the literal system path, which was passed back from wp_handle_upload
				$file_name_and_location = $uploaded_file['file'];
				$wp_upload_dir = wp_upload_dir();
				$plugin_options['sf_tab_logo'] = $wp_upload_dir['url'] . '/' . basename($file_name_and_location);
			} else { // wp_handle_upload returned some kind of error. the return does contain error details, so you can use it here if you want.
				$upload_feedback = 'There was a problem with your upload.';
			}

		} else { // wrong file type
			$upload_feedback = 'Please upload only image files (jpg, gif or png).';
		}

	} else { // No file was passed
		$upload_feedback = false;
	}
	return $plugin_options;
}

