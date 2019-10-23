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

		<?php get_template_part( 'template-parts/post/content', get_post_type() ); ?>

		<?php the_post_navigation(); ?>

	<?php endwhile; ?>

</div> <!-- .container -->

<?php
get_footer();
