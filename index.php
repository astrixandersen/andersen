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

if ( have_posts() ) :

	?>

	<header class="page-header">
		<?php if ( is_home() && ! is_front_page() ) : ?>
		<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

		<?php

		elseif ( is_archive() ) :
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
		endif;

		?>
	</header>

	<?php

	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );
	}

	the_posts_navigation();

	?>

	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>

	<?php
	get_footer();