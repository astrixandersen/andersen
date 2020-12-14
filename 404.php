<?php
/**
*
* The template for displaying 404-pages (not found)
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
* @package andersen
*
*/

get_header();

?>
<section class="error-404 not-found">

<header class="page-header">
<h2 class="page-title"><?php echo esc_html__( '"Du hører bølgene slå mot berget og vinden suse deg i ørene. Når du snur deg, er du omringet av hav på alle kanter."', 'andersen' ); ?></h2>
</header>

<div class="page-content">
<p><?php echo esc_html__( 'Det var kanskje ikke meningen at du skulle havne her?', 'andersen' ); ?></p>
<p><a href="<?php echo home_url( '/' ); ?>">Tilbake på land -></a></p>
</div> <!-- .post-content -->

<figure>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/404-image.jpg">
<figcaption><?php echo esc_html__( 'Foto: Drew Beamer, unsplash.com', 'andersen' ); ?></figcaption>
</figure>

</section><!-- .error-404 -->

<?php
get_footer();
