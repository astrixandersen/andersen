<?php

 /**
 * Advanced Custom Fields
 *
 * @link https://www.advancedcustomfields.com/resources/
 * @package roststarter
 *
 */


/**
 * Add Options Page
 * @link https://www.advancedcustomfields.com/resources/options-page/
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title'	=> 'Generelle innstillinger',
		'menu_title'	=> 'Temainnstillinger',
		'menuroststarterlug'		=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
));

}