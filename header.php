<?php
/**
*
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <main id="main">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package andersen
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php

				$site_logo = get_field( 'site_logo', 'option' );

				if ( !empty($site_logo) ) :

					?>
					<img class="site-logo" src="<?php echo $site_logo; ?>" alt="<?php bloginfo('name'); ?>" />

					<?php else : ?>
						<span class="site-title"><?php bloginfo('name'); ?></span>
					<?php endif; // site-logo ?>
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">

				<button class="menu-toggle" aria-label="<?php echo esc_html__( 'Meny', 'andersen' ); ?>" aria-controls="primary-menu" aria-expanded="false"></button>

				<?php

				wp_nav_menu( array(
					'theme_location'	=> 'menu-1',
					'menu_class'			=> 'menu',
					'menu_id'         => 'primary-menu',
					'container_class' => 'primary-container',
					'depths'		 		  => '1'
				) );

				?>

			</nav><!-- #site-navigation -->

		</header><!-- #site-header -->

		<main id="site-content" role="main">