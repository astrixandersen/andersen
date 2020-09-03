<?php
/**
* Layout => Menu Content
*/
?>

<div class="site-menu-toggle">
<a onclick="toggleMenu()" href="#" class="toggle-menu" role="button" aria-label ="<?php echo esc_html__( 'Lukk meny', 'andersen' ); ?>">Lukk <span role="img" aria-hidden="true">👉🏻</span></a>
</div> <!-- .site-menu-toggle -->

<section class="project-navigation">
<h2><?php echo esc_html__( 'Aktuelle prosjekter', 'andersen' ); ?></h2>

<nav id="project-navigation" class="project-navigation">
<ul>
<?php

$projects = new WP_Query( array(
	'post_type'      => 'post', 
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC',
	'posts_per_page' => -1,
));

while ( $projects->have_posts() ) {
	$projects->the_post();
	the_title( '<li><a href="' . get_the_permalink() . '">', '</a></li>' );
}

wp_reset_postdata();

?>
</ul>
</nav>

</section> <!-- .project-navigation -->

<section class="contact-information">
<h2 class="screen-reader-text"><?php echo esc_html__( 'Kontaktinformasjon', 'andersen' ); ?></h2>
<?php

$email  = get_field('site_contact');

if ( !empty($email) ) { 
	
	?>
	<p>
	<span class="screen-reader-text"><?php echo esc_html__( 'E-post:', 'andersen' ); ?></span> <a href="<?php echo $mail['url']; ?>"><?php echo $mail['title']; ?></a>
	</p>
	<?php 
	
} 

if ( have_rows('site_social', 'option') ) {
	get_template_part( 'template-parts/components/social-profiles' );
}

?>
</section> <!-- .contact-information -->