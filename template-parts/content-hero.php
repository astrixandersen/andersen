<?php
/**
 *
 * Template part for displaying page hero
 *
 * @package roststarter
 *
 */

$hero_title = get_field( 'hero_title' );
$hero_image = get_field( 'hero_image' );
?>

<section id="page-hero">

	<header class="entry-header">

		<?php if ( !empty($hero_title) ) : ?>
			<h1 class="hero-title"><?php echo $hero_title; ?></h1>

			<?php else : ?>
				<?php the_title( '<h1 class="hero-title">', '</h1>', ); ?>
			<?php endif; ?>

		</header> <!-- .entry-header -->

		<?php if ( !empty($hero_image) ) : ?>
			<figure class="hero-image">
				<img src="<?php echo $hero_image['sizes']['large-thumb']; ?>" alt="<?php echo $hero_image['alt']; ?>" />

				<?php if ( !empty($hero_image['caption']) ) : ?>
					<figcaption><?php echo $hero_image['caption']; ?></figcaption>
				<?php endif; ?>

			</figure> <!-- .hero-image -->
		<?php endif; ?>

	</section> <!-- #page-hero -->