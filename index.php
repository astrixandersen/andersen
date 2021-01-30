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

	<header class="entry-header">
	<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header> <!-- .entry-header -->
	
	<div class="entry-content">
	<?php the_content(); ?>
	</div> <!-- .entry-content -->
	
	</article>
	<?php 
	
}

get_footer();