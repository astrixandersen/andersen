<?php

 /**
 *
 * Advanced Custom Fields => Settings for footer
 * @package andersen
 *
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title'	=> 'Footer',
		'menu_title'	=> 'Footer',
		'menuandersenlug'		=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
));

}