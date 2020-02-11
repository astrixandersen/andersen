<?php

/**
 * Blocks => Latest Projects
 *
 * @package andersen
 */

defined( 'ABSPATH' ) || exit;

/* Register block */
function andersen_block_latest_projects() {

	$asset_file = include( dirname( __FILE__ ) . '/build/index.asset.php' );

	wp_register_script( 'block-latest-projects-script', get_template_directory_uri() . '/blocks/block-latest-projects/build/index.js', $asset_file['dependencies'], $asset_file['version'] );

	register_block_type( 'andersen/latest-projects', array(
		'editor_script' => 'block-project-info-script',
	) );

}
add_action( 'init', 'andersen_block_latest_projects' );
