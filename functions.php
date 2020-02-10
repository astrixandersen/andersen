<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package andersen
 */

if ( ! function_exists( 'andersen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function andersen_setup() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( '_andersen', get_template_directory() . '/languages' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Backward Compatibility for wp_body_open
		 */
		if ( ! function_exists( 'wp_body_open' ) ) {
			function wp_body_open() {
				do_action( 'wp_body_open' );
			}
		}

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Register menu
		 */

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Hovedmeny', 'andersen' ),
			'footer-menu' => esc_html__( 'Footer', 'andersen' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);
	}

endif;
add_action( 'after_setup_theme', 'andersen_setup' );

/**
 * Admin footer modification
 */
function remove_footer_admin () {
	echo '<span id="footer-thankyou">Spis sjokolade. Du fortjener det.</span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


/**
 * Enqueue scripts and styles.
 */
function andersen_scripts() {

	// Theme styles
	wp_enqueue_style( 'andersen-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'andersen_scripts' );


/**
 * Register custom blocks
 */
function andersen_register_blocks() {

	// automatically get dependencies and version number
	$asset_file = include( dirname( __FILE__ ) . '/blocks/project-info/build/index.asset.php' );

	// register script
	wp_register_script( 'block-project-info-script', get_template_directory_uri() . '/blocks/project-info/build/index.js', $asset_file['dependencies'], $asset_file['version'] );

	// register styles
	wp_register_style( 'block-project-info-editor-style', get_template_directory_uri() . '/blocks/project-info/build/editor.css', array('wp-edit-blocks') );

		wp_register_style( 'block-project-info-style', get_template_directory_uri() . '/blocks/project-info/build/style.css', array() );

	// register block
	register_block_type( 'andersen/project-info', array(
		'style'					=> 'block-project-info-style',
		'editor_script' => 'block-project-info-script',
		'editor_style'	=> 'block-project-info-editor-style',
	) );
}
add_action( 'init', 'andersen_register_blocks' );


/**
 * Includes a "skip to content"-link for accessibility
 */
function andersen_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#site-content">' . __( 'Hopp til innhold', 'andersen' ) . '</a>';
}
add_action( 'wp_body_open', 'andersen_skip_link', 5 );

/**
 * Include PHP-files located in '/inc'-folder
 */
$inc_folder = dirname( __FILE__ ) . '/inc';

if ( file_exists($inc_folder) ) {
	$files = scandir($inc_folder);

	if ( is_array($files) ){

		foreach ($files as $file) {
			if ( stristr( basename( $file ), '.php') ) {
				include( $inc_folder.'/'.basename( $file ) );
			}
		}
	}
}