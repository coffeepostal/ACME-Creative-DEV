<?php
/**
 * Advanced Custom Fields
 *
 * Learn more about Advanced Custom Fields: {@link http://www.advancedcustomfields.com/}
 *
 * @package WordPress
 * @subpackage IND
 * @since IND 1.0
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'ACF Settings',
		'menu_title'	=> 'ACF Settings',
		'menu_slug' 	=> 'acf-settings',
        'icon_url'      => 'dashicons-carrot'
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'General Settings',
		'parent_slug'	=> 'acf-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Navigation Settings',
		'menu_title'	=> 'Navigation Settings',
		'parent_slug'	=> 'acf-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Settings',
		'menu_title'	=> 'Social Settings',
		'parent_slug'	=> 'acf-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer Settings',
		'parent_slug'	=> 'acf-settings',
	));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Other Settings',
	// 	'menu_title'	=> 'Other',
	// 	'parent_slug'	=> 'custom-settings',
	// ));

}

?>
