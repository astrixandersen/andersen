<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package roststarter
 */

?>

<?php if ( have_rows('pagebuilder') ) : ?>

	<?php while ( have_rows('pagebuilder') ) : the_row(); ?>
		<?php get_template_part( 'template-parts/content', 'blocks' ); ?>
	<?php endwhile; ?>

	<?php else : ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div> <!-- .entry-content -->

		<?php endif; ?>