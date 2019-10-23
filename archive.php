<?php
/**
*
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package roststarter
 *
 */

get_header();

?>

<div class="container">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
		</header><!-- .page-header -->

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/post/content', get_post_type() ); ?>
		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/post/content', 'none' ); ?>

		<?php endif; ?>

	</div> <!-- .container -->

	<?php
	get_footer();
