<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Egzotheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>



<?php wp_head(); ?>
</head>

<body <?php body_class('animated'); ?> >
<!-- <div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'egzotheme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'egzotheme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


	<header class="menu_main">
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/menu_gif.gif" alt="logo" class="menu_gif"> -->
		<div class="menu_content">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/logo/logo.png"  class="logo_menu" alt="Egzobeatbox logo">
		<?php do_action('wpml_add_language_selector'); ?>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu' ) ); ?>
			<div class="scx_link">
				<a href="<?php echo the_field('facebook_link', 'option'); ?>" target="_blank"><i class="icon-facebook"></i></a>
				<a href="<?php echo the_field('instagram_link', 'option'); ?>" target="_blank"><i class="icon-instagram"></i></a>
				<a href="<?php echo the_field('twitter_link', 'option'); ?>" target="_blank"><i class="icon-twitter"></i></a>
				<a href="<?php echo the_field('soundcloud_link', 'option'); ?>" target="_blank"><i class="icon-soundcloud2"></i></a>
			
			</div>
		</div>

	</header>
	<div class="menu_burger">
		<a href="#" class="btn_burger"><span></span></a>
	</div>
	<div id="content" class="site-content">
