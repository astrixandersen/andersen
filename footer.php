<?php
/**
*
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package roststarter
 *
 */

?>

</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<footer id="site-footer" class="site-footer">
	<div class="container">

		<?php
		wp_nav_menu( array(
			'theme_location'  => 'menu-2',
			'container_class' => 'footer-links',
			'depths'		  => '1'
		) );
		?>

		<div class="footer-credits">
			<?php echo esc_html__( 'Design/utvikling:'); ?> <a href="https://roststartermunikasjon.no">Røst kommunikasjon</a>
		</div> <!-- .credit -->

	</div> <!-- .container -->
</footer><!-- #site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
