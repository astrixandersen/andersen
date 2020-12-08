<?php
/**
* The template for displaying single posts and pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
* @package andersen
*
*/

get_header();

	while ( have_posts() ) {
		the_post();
		
		?>
		
		<article id="<?php echo get_post_type(); ?>-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
			
			if ( is_page() ) {
				echo '<header class="page-header">';
				the_title( '<h2 class="page-title">', '</h2>' );
				echo '</header>';
			}

			else {
				get_template_part( 'template-parts/layout/header', get_post_type() );
			}

			?>
		</header>
		
		<div class="<?php echo get_post_type(); ?>-content">
		<?php the_content(); ?>
		</div> <!-- .<?php echo get_post_type(); ?>-content -->
		
		</article>
		
		<?php
		
	}
	
get_footer();