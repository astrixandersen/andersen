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
<link rel="stylesheet" href="https://use.typekit.net/saw7ckg.css">

<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🦄</text></svg>">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" role="banner">

<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>

<!-- Beginning of site navigation -->
<div class="site-menu-toggle open">
<h2 class="screen-reader-text"><?php echo esc_html__( 'Hovedmeny', 'andersen' ); ?></h2>
<a onclick="toggleMenu()" href="#" class="toggle-menu" role="button" aria-label="<?php echo esc_html__( 'Gå til hovedmeny', 'andersen' ); ?>"><span role="img" aria-label="<?php echo esc_html__( 'Åpne', 'andersen' ); ?>">👈🏻</span> <span class="label"><?php echo esc_html__( 'Meny', 'andersen' ); ?></span></a>
</div> <!-- .site-menu-toggle -->

<?php get_template_part('template-parts/layout/site-navigation'); ?>
<!-- End of site navigation -->

</header><!-- #site-header -->

<main id="site-content" role="main">