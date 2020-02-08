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

		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
		<a href="#" class="toggle-menu" role="button" aria-label ="<?php echo esc_html__( 'Åpne meny', 'andersen' ); ?>">👈🏻 Meny</a>

		<div class="container-menu">
			<?php get_template_part('template-parts/layout/menu', 'content'); ?>
		</div> <!-- .container-menu -->

	</header><!-- #site-header -->

	<main id="site-content" role="main">