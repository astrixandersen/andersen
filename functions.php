<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package roststarter
 */

if ( ! function_exists( 'roststarter_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the afterroststarteretup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function roststarter_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on roststarter, use a find and replace
		 * to change roststarter to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '_roststarter', get_template_directory() . '/languages' );

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
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'large-thumb', '850', '582', 'true' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Hovedmeny', 'roststarter' ),
			'menu-2' => esc_html__( 'Footer', 'roststarter' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}

endif;
add_action( 'after_setup_theme', 'roststarter_setup' );

/**
 * Admin footer modification
 */
function remove_footer_admin () {
	echo '<span id="footer-thankyou">Levert av <a href="https://roststartermunikasjon.no/" target="_blank">Røst kommunikasjon</a>.</span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');


/**
 * Enqueue scripts and styles.
 */
function roststarter_scripts() {

	// Theme styles
	wp_enqueue_style( 'roststarter-style', get_stylesheet_uri() );

	// jQuery
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true );

	// Bootstrap script
	wp_enqueue_script( 'bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true );

	// Navigation
	wp_enqueue_script( 'roststarter-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	// Accessibility fix
	wp_enqueue_script( 'roststarter-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	// Theme functions
	wp_enqueue_script( 'theme-core', get_template_directory_uri() . '/assets/js/min/theme-core.min.js', array(), '20190811', true );

	// Feather Icons
	wp_enqueue_script( 'feather-icons', '//unpkg.com/feather-icons', array(), '4.22.1', false );
	wp_enqueue_script( 'feather-replace', get_template_directory_uri() . '/assets/js/min/feather-replace.min.js', array(), '20190805', true );

	// Scroll To Top-function
	wp_enqueue_script( 'scroll-to-top', get_template_directory_uri() . '/assets/js/min/scroll-to-top.min.js', array(), '20191014', true );
}
add_action( 'wp_enqueue_scripts', 'roststarter_scripts' );

/**
 * Include PHP-files located in '/inc'-folder
 */

$incdir   = dirname( __FILE__ ) . '/inc';

// see if files exists in directory inc
if( file_exists( $incdir ) ){
  // scan directory for files
	$files = scandir( $incdir );

  // if files in array
	if( is_array( $files ) ){

    // loop through em
		foreach( $files as $file ) {

      // if filename ends with .php extension
			if( stristr( basename( $file ), '.php') ) {
        // include them
				include( $incdir.'/'.basename( $file ) );
			}
		}
	}
}
