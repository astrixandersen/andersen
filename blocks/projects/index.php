<?php
/**
* Blocks => Projects
*
* @package andersen
*/

defined( 'ABSPATH' ) || exit;

/**
* Server-side rendering 
*/
function andersen_block_projects_render_callback( $block_attributes, $content ) {
  global $post;
  
  $args = array(
    'post_type'        => 'post',
    'posts_per_page'   => -1,
    'post_status'      => 'publish',
    'order'            => 'ASC',
    'orderby'          => 'date'
  );
  
  $recent_projects = get_posts( $args );
  
  /* Check if there is projects */
  if ( count( $recent_projects ) === 0 ) {
    return 'Ingen prosjekter funnet';
  } 
  
  else {
    /* Prepare the markup */
    $markup = '';
    
    /* Loop through the projects */
    foreach ( $recent_projects as $post ) {
      
      $link = esc_url( get_the_permalink( $post ) );
      $id = get_the_ID( $post );
      
      $markup .= sprintf( 
        '<article id="project-%1$u" class="andersen-block-project"><a href="%2$s">', 
        $id,
        $link
      );
        
        $title = get_the_title( $post );

        if ( has_excerpt( $post ) ) {
          $excerpt = get_the_excerpt( $post );
        } else {
          $excerpt = 'Ingen utdrag – kanskje du bør skrive litt om prosjektet her?';
        }
        
        $markup .= sprintf(
          '<header class="andersen-block-project-header"><h3 class="andersen-block-project-title">%1$s</h3><p class="andersen-block-project-excerpt">%2$s</p></header>',
          $title,
          $excerpt
        );
      
        if ( has_post_thumbnail( $post ) ) {
          $featured_image = get_the_post_thumbnail( $post, 'medium' );
        } else {
          $featured_image = sprintf(
            '<img src="%s">',
            get_stylesheet_directory_uri() . '/assets/images/404-image.jpg'
          );
        }

        $markup .= sprintf(
          '<figure class="andersen-block-project-image">%s</figure>',
          $featured_image
        );

        $markup .= '</a></article>';
      }

      $wrapper_attributes = get_block_wrapper_attributes();
      $heading = esc_html__( 'Utvalgte prosjekter', 'andersen' );

      return sprintf(
        '<div %1$s><h2 class="screen-reader-text">%2$s</h2>%3$s</div>',
        $wrapper_attributes,
        $heading,
        $markup
      );

    }
  }
  
  
  /**
  * Register block
  */
  function andersen_block_projects() {
    $asset_file = include( dirname( __FILE__ ) . '/build/index.asset.php' );
    
    wp_register_script( 'block-projects-script', get_template_directory_uri() . '/blocks/projects/build/index.js', $asset_file['dependencies'], $asset_file['version'] );
    
    wp_register_style( 'block-projects-editor-style', get_template_directory_uri() . '/blocks/projects/build/editor.css', array('wp-edit-blocks') );
    
    wp_register_style( 'block-projects-style', get_template_directory_uri() . '/blocks/projects/build/style.css', array() );
    
    register_block_type( 'andersen/projects', array(
      'style'					  => 'block-projects-style',
      'editor_script'   => 'block-projects-script',
      'editor_style'	  => 'block-projects-editor-style',
      'render_callback' => 'andersen_block_projects_render_callback'
      ) );
    }
    add_action( 'init', 'andersen_block_projects' );