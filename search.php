<?php
/**
 *
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * @package roststarter
 *
 */

get_header();

if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="page-title"><?php printf( esc_html__( 'Søkeresultater for: %s', 'roststarter' ), '<span>' . getroststarterearch_query() . '</span>' ); ?></h1>
	</header><!-- .page-header -->

	<?php

	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content', 'search' );

	}

	the_posts_navigation();

	else {
		get_template_part( 'template-parts/post/content', 'none' );
	}

	get_footer();
