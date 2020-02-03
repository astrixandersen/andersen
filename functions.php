<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package andersen
 */

if ( ! function_exists( 'andersen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the afterandersenetup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function andersen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on andersen, use a find and replace
		 * to change andersen to the name of your theme in all the template files.
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
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'large-thumb', '850', '582', 'true' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Hovedmeny', 'andersen' ),
			'menu-2' => esc_html__( 'Footer', 'andersen' ),
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
	echo '<span id="footer-thankyou">Levert av <a href="https://andersenmunikasjon.no/" target="_blank">Røst kommunikasjon</a>.</span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');


/**
 * Enqueue scripts and styles.
 */
function andersen_scripts() {

	// Theme styles
	wp_enqueue_style( 'andersen-style', get_stylesheet_uri() );

	// Navigation
	wp_enqueue_script( 'andersen-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'andersen_scripts' );

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

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function andersen_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'andersen_skip_link_focus_fix' );

/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 */
function andersen_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#site-content">' . __( 'Hopp til innhold', 'andersen' ) . '</a>';
}
add_action( 'wp_body_open', 'andersen_skip_link', 5 );