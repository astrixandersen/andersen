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

?>

<div class="container">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/page/content', 'page' ); ?>

	<?php endwhile; ?>

</div> <!-- .container -->

<?php
get_footer();
