<?php
/**
 *
 * Template Name: Custom Template
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files
 * @package andersen
 *
 */

get_header();

while ( have_posts() ) {
	the_post();

	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="page-header">
			<?php the_title( '<h2 class="page-title">', '</h2>' ); ?>
		</header>

		<?php the_content(); ?>

	</article>
	<?php

}

get_footer();