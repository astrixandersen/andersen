<?php
/**
 *
 * Template part for displaying page hero
 *
 * @package roststarter
 *
 */

$hero_title = get_field( 'hero_title' );
?>

<section id="page-hero">

	<header class="entry-header">
		<?php if ( !empty($hero_title) ) : ?>
			<h1><?php echo $hero_title; ?></h1>

			<?php else : ?>
				<h1><?php the_title(); ?></h1>

			<?php endif; ?>
		</header> <!-- .entry-header -->

	</section> <!-- #page-hero -->