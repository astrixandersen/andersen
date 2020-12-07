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
	<h2 class="screen-reader-text"><?php echo esc_html__( 'Bunnen av siden', 'andersen' ); ?></h2>
	
	<h3 class="footer-heading"><?php echo esc_html__( 'Kontakt', 'andersen' ); ?></h3>
	<span class="screen-reader-text"><?php echo esc_html__( 'E-post:', 'andersen' ); ?></span> <a href="<?php echo $email['url']; ?>"><?php echo $email['title']; ?></a>
	<?php } ?>
	
	<?php if ( have_rows('site_social', 'option') ) { ?>
		<h3 class="footer-heading"><?php echo esc_html__( 'Profiler', 'andersen' ); ?></h3>
		<?php get_template_part( 'template-parts/components/social-profiles' ); ?>
		<?php } ?>

		<h3 class="footer-heading"><?php echo esc_html__( 'Meny', 'andersen' ); ?></h3>
		<?php

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
			echo '<p>' . $credits . '</p>';
		}
		
		?>
		</div> <!-- #footer-byline -->
		
		</footer><!-- #site-footer -->
		
		<?php wp_footer(); ?>
		
		</body>
		</html>
