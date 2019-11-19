<?php
/**
 *
 * Template Name: Tjeneste
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files
 * @package roststarter
 *
 */

get_header();

while ( have_posts() ) :
	the_post();

	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php get_template_part( 'template-parts/content', 'hero' ); ?>
		<?php get_template_part( 'template-parts/page/content', 'page' ); ?>
	</article>

<?php endwhile; ?>

<?php
get_footer();