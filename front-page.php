<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package andersen
 *
 */

get_header();

while ( have_posts() ) {
	the_post();

	?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div> <!-- .entry-content -->
	<?php
}

get_footer();