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

	$email = get_field('site_contact', 'option');

	if ( !empty($email) ) {

		?>
		<h6 class="footer-heading"><?php echo esc_html__( 'Kontakt', 'andersen' ); ?></h6>
		<span class="screen-reader-text"><?php echo esc_html__( 'E-post:', 'andersen' ); ?></span> <a href="<?php echo $email['url']; ?>"><?php echo $email['title']; ?></a>
	<?php } ?>

	<?php if ( have_rows('site_social', 'option') ) { ?>
		<h6 class="footer-heading"><?php echo esc_html__( 'Profiler', 'andersen' ); ?></h6>
		<?php

		get_template_part( 'template-parts/components/social-profiles' );

	}

	?>

	<div id="footer-byline">
		<?php

		$privacy = get_field('site_privacy', 'option');
		$credits = get_field('site_credits', 'option');

		if ( !empty($privacy) ) {
			echo '<p>' . $privacy . '</p>';
		}

		if ( !empty($credits) ) {
			echo '<p>' . $credits . '</p>';
		}

		?>
	</div> <!-- #footer-byline -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>
