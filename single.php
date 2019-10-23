<?php
/**
*
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
			<?php get_template_part( 'template-parts/post', get_post_type() ); ?>

		</article>

		<?php

		$relevant_posts = new WP_Query(array(
			'post_type'    	 => get_post_type(),
			'post_status'  	 => 'publish',
			'order'       	 => 'DESC',
			'orderby'      	 => 'date',
			'post__not_in' 	 => array(get_the_ID()),
			'posts_per_page' => 3,
		));

		if( $relevant_posts->have_posts() ) :

			?>
			<!-- Relevant posts -->
			<section id="relevant-posts">
				<h2><?php if( is_singular('project') ) : echo esc_html__( 'Relaterte prosjekter', 'roststarter' ); else : echo esc_html__( 'Relaterte innlegg', 'roststarter' ); endif; ?></h2>

				<div class="row">
					<?php while( $relevant_posts->have_posts() ) : $relevant_posts->the_post(); ?>
						<div class="col-md-4">
							<?php get_template_part( 'template-parts/post/content', get_post_type() ); ?>
						</div> <!-- .col -->
					<?php endwhile ;?>
				</div> <!-- .row -->

			</section> <!-- #relevant-posts -->
		<?php endif; ?>

	<?php endwhile; ?>

</div> <!-- .container -->

<?php
get_footer();
