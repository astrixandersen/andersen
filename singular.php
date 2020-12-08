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
		
		<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<header class="page-header">
		<?php the_title( '<h2 class="page-title">', '</h2>' ); ?>
		</header>
		
		<div class="page-content">
		<?php the_content(); ?>
		</div> <!-- .post-content -->
		
		</article>
		
		<?php
		
	}
	
get_footer();