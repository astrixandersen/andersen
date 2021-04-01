<?php
/**
* The template part for displaying site navigation
* 
* @package andersen
*/
?>
<div id="site-navigation">

<div class="site-menu-toggle close">
<a onclick="toggleMenu()" href="#" class="toggle-menu" role="button" aria-label="<?php echo esc_html__( 'Lukk meny', 'andersen' ); ?>"><span class="label"><?php echo esc_html__( 'Lukk', 'andersen' ); ?></span> <span role="img" aria-label="<?php echo esc_html__( 'Åpne', 'andersen' ); ?>">👉🏻</span></a>
</div> <!-- .site-menu-toggle -->

<div class="site-menu-content">
<?php 

$projects = new WP_Query( array(
	'post_type'      => 'post', 
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC',
	'posts_per_page' => -1,
));

if ( $projects->have_posts() ) {
	
	?>
	<section class="project-navigation">
	<h3 class="site-menu-title"><?php echo esc_html__( 'Prosjekter', 'andersen' ); ?></h3>
	
	<nav id="project-menu">
	<ul>
	<?php
	
	while ( $projects->have_posts() ) {
		$projects->the_post();
		the_title( '<li><a href="' . get_the_permalink() . '">', '</a></li>' );
	}
	wp_reset_postdata();
	
	?>
	</ul>
	</nav>
	
	</section> <!-- .project-navigation -->
	<?php } // endif ?>
	
	<section class="page-navigation">
	<h3 class="site-menu-title"><?php echo esc_html__( 'Sider', 'andersen' ); ?></h3>
	<?php 
	
	wp_nav_menu( array(
		'menu' => 'page-menu',
		'theme_location' => 'main-menu',
		'container' => 'nav',
		'container_id' => 'page-main-menu',
		) );
		
		?>
		</section> <!-- .page-navigation -->
		
		<?php 
		
		$email = get_field('site_contact', 'option');
		
		if ( ! empty( $email ) ) {
			
			?>
			<section class="contact">
			<h3 class="site-menu-title"><?php echo esc_html__( 'Kontakt', 'andersen' ); ?></h3>
			<?php 
			
			echo sprintf(
				'<p><span class="screen-reader-text">%1$s</span><a href="%2$s">%3$s</a></p>',
				esc_html__( 'E-post:', 'andersen' ),
				$email['url'],
				$email['title']
			); 
			
			?>
			</section> <!-- .contact -->
			<?php } ?>
			
			</div> <!-- .site-menu-content -->
			
			</div> <!-- #site-navigation -->