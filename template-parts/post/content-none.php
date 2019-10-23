<?php
/**
 *
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package roststarter
 *
 */

?>

<section class="no-results not-found">

	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Ingenting ble funnet', 'roststarter' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">

		<?php if ( is_search() ) : ?>

			<p><?php esc_html_e( 'Beklager, vi fant ingenting relatert til søkeordet ditt. Gjerne prøv igjen med et annet søkeord.', 'roststarter' ); ?></p>

			<?php get_search_form(); ?>

			<?php else : ?>

				<p><?php esc_html_e( 'Vi fant ikke det du leter etter. Kanskje det hjelper å gjøre et søk?', 'roststarter' ); ?></p>

				<?php get_search_form(); ?>

			<?php endif; ?>

		</div><!-- .page-content -->
	</section><!-- .no-results -->
