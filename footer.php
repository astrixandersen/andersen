<?php
/**
*
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
* @package andersen
*
*/

?>

</main><!-- #main -->

<footer id="site-footer" role="contentinfo">
<?php

echo sprintf('<h2 class="screen-reader-text">%s</h2>',
esc_html__( 'Kontaktinformasjon og annet', 'andersen' )
);

/* Contact info */
$email = get_field('site_contact', 'option');

if ( !empty($email) ) {
	echo sprintf(
		'<h3 class="footer-heading">%s</h3>',
		esc_html__( 'Kontakt', 'andersen' )
	);
	
	echo sprintf(
		'<span class="screen-reader-text">%1$s</span><a href="%2$s">%3$s</a>',
		esc_html__( 'E-post:', 'andersen' ),
		$email['url'],
		$email['title']
	);
}

/* Social profiles */
if ( have_rows('site_social', 'option') ) {
	echo sprintf(
		'<h3 class="footer-heading">%s</h3>',
		esc_html__( 'Profiler', 'andersen' )
	);
	get_template_part( 'template-parts/components/social-profiles' );
}

/* Menu */
echo sprintf(
	'<h3 class="footer-heading">%s</h3>',
	esc_html__( 'Nyttige lenker', 'andersen' )
);

wp_nav_menu( array(
	'menu' => 'footer-menu',
	'theme_location' => 'footer-menu',
	'container' => 'nav',
	'container_id' => 'footer-menu',
	) );
	
	?>
	
	<div id="footer-byline">
	<?php
	
	$credits = get_field('site_credits', 'option');
	
	if ( !empty($credits) ) {
		echo sprintf( '<p>%s</p>', $credits );
	}
	
	?>
	</div> <!-- #footer-byline -->
	
	</footer><!-- #site-footer -->
	
	<?php wp_footer(); ?>
	
	</body>
	</html>
