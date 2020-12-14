<?php
/**
*
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
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
		the_title( '<header class="page-header"><h2 class="page-title">', '</h2></header>' );
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