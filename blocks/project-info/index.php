<?php
/**
 * Blocks => Project Info
 *
 * @package andersen
 */

defined( 'ABSPATH' ) || exit;

/* Register block */
function andersen_block_project_info() {

	$asset_file = include( dirname( __FILE__ ) . '/build/index.asset.php' );

	wp_register_script( 'block-project-info-script', get_template_directory_uri() . '/blocks/project-info/build/index.js', $asset_file['dependencies'], $asset_file['version'] );

	wp_register_style( 'block-project-info-editor-style', get_template_directory_uri() . '/blocks/project-info/build/editor.css', array('wp-edit-blocks') );

	wp_register_style( 'block-project-info-style', get_template_directory_uri() . '/blocks/project-info/build/style.css', array() );

	register_block_type( 'andersen/project-info', array(
		'style'					=> 'block-project-info-style',
		'editor_script' => 'block-project-info-script',
		'editor_style'	=> 'block-project-info-editor-style',
	) );

}
add_action( 'init', 'andersen_block_project_info' );