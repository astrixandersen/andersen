<?php

/**
 * Layout => Menu Content
 */

?>

<section class="project-navigation">
	<h2><?php esc_html__( 'Aktuelle prosjekter', 'andersen' ); ?></h2>

	<nav id="project-links">
		<ul>
			<li><a href="#">Svalbard Bryggeri</a></li>
			<li><a href="#">Lo:Le Landskap og Plan</a></li>
			<li><a href="#">Røst Kommunikasjon</a></li>
		</ul>
	</nav>
</section> <!-- .project-navigation -->

<section class="contact-information">
	<h2 class="screen-reader-text"><?php esc_html__( 'Kontaktinformasjon', 'andersen' ); ?></h2>
	<?php

	$email        = get_field('site_contact');

	?>

	<?php if ( !empty($email) ) { ?>
		<p><span class="screen-reader-text"><?php esc_html__( 'E-post:', 'andersen' ); ?></span> <a href="<?php echo $mail['url']; ?>"><?php echo $mail['title']; ?></a></p>
	<?php } ?>

	<?php if ( have_rows('site_social') ) { ?>
		<ul class="social-profiles">
			<?php

			while ( have_rows('site_social') ) {
				the_row();

				$link = get_sub_field('link');

				echo '<li>';
				echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
				echo '</li>';

			}

			?>
		</ul>
	<?php } ?>

	</section> <!-- .contact-information -->