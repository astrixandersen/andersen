<?php
/**
 *
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package roststarter
 *
 */

get_header();
?>

<div class="container">

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- Page Header -->
			<header class="entry-header">
				<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			</header> <!-- /entry-header -->

			<!-- Page Content -->
			<?php get_template_part( 'template-parts/page/content', 'page' ); ?>

		<?php endwhile; // End of the loop.?>

	</article><!-- #post -->

</div> <!-- .container -->

<?php
get_footer();
