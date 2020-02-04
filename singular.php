<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package andersen
 *
 */

get_header();

while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php

		if ( is_singular( 'page' ) || is_front_page() ) {
			get_template_part( 'template-parts/content', 'hero' );
		}

		get_template_part( 'template-parts/content', get_post_type() );

		?>
	</article>

	<?php

	if ( is_single() ) :

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
				<h2><?php

				if ( is_single('project') ) {
					echo esc_html__( 'Relaterte prosjekter', 'andersen' );
				}

				else {
					echo esc_html__( 'Relaterte innlegg', 'andersen' );
				}

				?></h2>

				<div class="row">
					<?php while( $relevant_posts->have_posts() ) : $relevant_posts->the_post(); ?>

						<div class="col-md-4">
							<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
						</div> <!-- .col -->

					<?php endwhile ;?>
				</div> <!-- .row -->

			</section> <!-- #relevant-posts -->

			<?php

		endif;

	endif;

endwhile;

get_footer();