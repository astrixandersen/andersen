<?php
/**
 * Blocks => Page Hero
 *
 * @package andersen
 */

defined( 'ABSPATH' ) || exit;

/* Register block */
function andersen_block_page_hero() {

	$asset_file = include( dirname( __FILE__ ) . '/build/index.asset.php' );

	wp_register_script( 'block-page-hero-script', get_template_directory_uri() . '/blocks/page-hero/build/index.js', $asset_file['dependencies'], $asset_file['version'] );

		wp_register_style( 'block-page-hero-editor-style', get_template_directory_uri() . '/blocks/page-hero/build/editor.css', array('wp-edit-blocks') );

	wp_register_style( 'block-page-hero-style', get_template_directory_uri() . '/blocks/page-hero/build/style.css', array() );

	register_block_type( 'andersen/page-hero', array(
		'editor_script' => 'block-page-hero-script',
		'editor_style'  => 'block-page-hero-editor-style',
		'style'				  => 'block-page-hero-style',
	) );

}
add_action( 'init', 'andersen_block_page_hero' );