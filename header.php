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

<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🦄</text></svg>">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" role="banner">

<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>

<?php

/* Check if there is any projects, before displaying the menu link */
$projects = get_posts( array(
	'post_type'   => 'post', 
	'post_status' => 'publish',
	'orderby'     => 'date',
	'order'       => 'DESC',
	) );
	
	if ( !empty($projects) ) {
		
		?>
		<div class="site-menu-toggle">
		<a onclick="toggleMenu()" href="#" class="toggle-menu" role="button" aria-label ="<?php echo esc_html__( 'Åpne meny', 'andersen' ); ?>"><span role="img" aria-label="Åpne">👈🏻</span> Meny</a>
		</div> <!-- .site-menu-toggle -->
		
		<div id="container-menu">
		<?php get_template_part('template-parts/layout/menu', 'content'); ?>
		</div> <!-- #container-menu -->
		<?php } // $projects ?>
		
		</header><!-- #site-header -->
		
		<main id="site-content" role="main">