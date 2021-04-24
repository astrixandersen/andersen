<?php
/**
* Functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
* @package andersen
*/

if ( ! function_exists( 'andersen_setup' ) ) :
	
	function andersen_setup() {
		
		/**
		* Make theme available for translation.
		*/
		load_theme_textdomain( '_andersen', get_template_directory() . '/languages' );
		
		/**
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );
		
		/**
		* Backward Compatibility for wp_body_open
		*/
		if ( ! function_exists( 'wp_body_open' ) ) {
			function wp_body_open() {
				do_action( 'wp_body_open' );
			}
		}
		
		/**
		* Enable support for Post Thumbnails on posts and pages.
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'square', 800, 800, true );
		
		/**
		* Display custom image sizes in admin area
		* @link https://developer.wordpress.org/reference/functions/add_image_size/#for-media-library-images-admin
		*/
		add_filter( 'image_size_names_choose', 'andersen_custom_sizes' );
		
		function andersen_custom_sizes( $sizes ) {
			return array_merge( $sizes, array(
				'square' => __( 'Kvadrat' ),
				) );
			}
			
			/**
			* Register menu
			*/
			register_nav_menus( array(
				'main-menu' => esc_html__( 'Hovedmeny', 'andersen' ),
				'footer-menu' => esc_html__( 'Footer', 'andersen' ),
				) );
				
				/**
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
				
				
				/**
				* Block Editor
				*
				* Define block font sizes
				* @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-font-sizes
				*/
				add_theme_support( 'editor-font-sizes', array(
					array(
						'name' => __( 'Very small', 'andersen' ),
						'size' => 14,
						'slug' => 'very-small'
					),
					array(
						'name' => __( 'Small', 'andersen' ),
						'size' => 16,
						'slug' => 'small'
					),
					array(
						'name' => __( 'Base', 'andersen' ),
						'size' => 20,
						'slug' => 'regular'
					),
					array(
						'name' => __( 'Large', 'andersen' ),
						'size' => 32,
						'slug' => 'large'
					),
					array(
						'name' => __( 'Display', 'andersen' ),
						'size' => 56,
						'slug' => 'huge'
						)
						) );
						
						
						/**
						* Block Editor
						*
						* Disable custom gradients
						* @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-gradients
						*/
						add_theme_support( 'disable-custom-gradients' );
						
						/**
						* Block Editor
						*
						* Add editor styles
						* @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#editor-styles
						*/
						add_theme_support('editor-styles');
						add_editor_style( 'editor-style.css' );
						
					}
					
					/**
					* Block Editor
					* 
					* Remove support for custom font sizes
					* @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-font-sizes
					*/
					add_theme_support('disable-custom-font-sizes');
					
					/**
					* Block Editor
					* 
					* Add support for full-width content
					* @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment
					*/
					add_theme_support( 'align-wide' );
					
					/**
					* Block Editor
					* 
					* Add support for custom line height
					* @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#supporting-custom-line-heights
					*/
					add_theme_support( 'custom-line-height' );
					
					/**
					* Block Editor
					*
					* Disable custom colors in block color palettes
					* @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-colors-in-block-color-palettes
					*/
					add_theme_support( 'disable-custom-colors' );
					
					/**
					* Block Editor
					* 
					* Add color palette
					* @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/
					*/
					add_theme_support( 'editor-color-palette', array(
						array(
							'name' => __( 'Black Purple', 'andersen' ),
							'slug' => 'black-purple',
							'color' => '#170d24',
						),
						array(
							'name' => __( 'Dark Purple', 'andersen' ),
							'slug' => 'dark-purple',
							'color' => '#241438',
						),
						array(
							'name' => __( 'Purple', 'andersen' ),
							'slug' => 'purple',
							'color' => '#845eb0',
						),
						array(
							'name' => __( 'Light Purple', 'andersen' ),
							'slug' => 'light-purple',
							'color' => '#c2aed8',
						),
						
						array(
							'name' => __( 'White Purple', 'andersen' ),
							'slug' => 'white-purple',
							'color' => '#f8f5fb',
						),
						) );
						
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
						wp_enqueue_style( 'andersen-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
						
						// Open menu
						wp_enqueue_script( 'andersen-navigation', get_template_directory_uri() . '/assets/js/min/open-menu.min.js', array(), '', true );
					}
					add_action( 'wp_enqueue_scripts', 'andersen_scripts' );
					
					
					/**
					* Register custom blocks
					*/
					include( dirname( __FILE__ ) . '/blocks/project-info/index.php' );
					include( dirname( __FILE__ ) . '/blocks/page-hero/index.php' );
					include( dirname( __FILE__ ) . '/blocks/projects/index.php' );
					
					/**
					* Includes a "skip to content"-link for accessibility
					*/
					function andersen_skip_link() {
						echo '<a class="skip-link screen-reader-text" href="#site-content">' . __( 'Hopp til innhold', 'andersen' ) . '</a>';
					}
					add_action( 'wp_body_open', 'andersen_skip_link', 5 );
					
					/**
					* Disable emojis
					*/
					function disable_emojis() {
						remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
						remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
						remove_action( 'wp_print_styles', 'print_emoji_styles' );
						remove_action( 'admin_print_styles', 'print_emoji_styles' );
						remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
						remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
						remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
					}
					
					add_action( 'init', 'disable_emojis' );
					
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