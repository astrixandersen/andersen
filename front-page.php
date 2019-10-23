<?php

/**
*
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 * @package roststarter
 *
 */

get_header();

?>

<div class="container">

	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- Hero -->
			<?php get_template_part( 'template-parts/content', 'hero' ); ?>

			<!-- Content -->
			<?php get_template_part( 'template-parts/page/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>

	</div> <!-- .container -->

	<?php
	get_footer();
