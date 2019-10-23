<?php
/**
 *
 * The template for displaying 404-pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @package roststarter
 *
 */

get_header();

?>

<div class="container">

	<section class="error-404 not-found">

		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Oida! Siden ble ikke funnet', 'roststarter' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php esc_html_e( 'Vi finner ikke det du leter etter. Kanskje det hjelper å gjøre et søk?', 'roststarter' ); ?></p>

			<?php get_search_form(); ?>
		</div><!-- .page-content -->

	</section><!-- .error-404 -->

</div> <!-- .container -->

<?php
get_footer();
