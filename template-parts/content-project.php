<?php
/**
 *
 * Template part for displaying projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package roststarter
 *
 */

?>

<?php if ( ! is_singular() ) : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
			<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
			<?php project_meta(); ?>
		</header><!-- .entry-header -->

		<?php if( has_post_thumbnail() ) : ?>
			<figure class="entry-thumbnail">
				<a href="<?php echo get_the_permalink(); ?>" aria-label="<?php echo esc_html__( 'Les om arbeidet ', 'roststarter' ) .  get_the_title(); ?>">
					<?php the_post_thumbnail( 'large-thumb' ); ?>
				</a>
			</figure> <!-- .entry-thumbnail -->
		<?php endif; // has_post_thumbnail ?>

	</article><!-- #post-<?php the_ID(); ?> -->

	<?php else : ?>

		<?php if ( have_rows('pagebuilder') ) : ?>

			<?php while ( have_rows('pagebuilder') ) : the_row(); ?>
				<?php get_template_part( 'template-parts/content', 'blocks' ); ?>

				<?php else : ?>
					<div class="entry-content">
						<?php the_content(); ?>
					</div> <!-- .entry-content -->

				<?php endwhile; // pagebuilder ?>

			<?php endif; // pagebuilder ?>

			<?php endif; // ! is_singular ?>