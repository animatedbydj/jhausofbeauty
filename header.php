<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wptailwind
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-40J0BXCMB5"></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'G-40J0BXCMB5');
	</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" 
content="Eyelash extension artist based in Las Vegas Nevada. Certified esthetician offering services including classic eyelash extensions, volume eyelash extensions & mega volume eyelash extensions. ">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site w-auto">
		<a class="skip-link screen-reader-text w-full hidden" href="#content"><?php esc_html_e('Skip to content', 'wptailwind'); ?></a>
	
		<header id="masthead" class="site-header z-50 w-full py-4 px-2 flex flex-wrap flex-col lg:flex-row justify-center lg:justify-between items-center">
		
		
		<div class="header-top w-full pt-2 text-center">
		<p><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?> |
	<span><?php echo get_bloginfo('description', 'display'); /* WPCS: xss ok. */ ?></span>
	
	</a></p>
		</div>
		<div class="site-branding text-center w-4/12 mb-4 md:mb-0">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				endif;
				$wptailwind_description = get_bloginfo('description', 'display');
				if ($wptailwind_description || is_customize_preview()) :
				?>
					<p class="site-description"> <?php echo $wptailwind_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation flex justify-center w-9/12 md:w-4/12">
				<button class="menu-toggle hidden" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'wptailwind'); ?></button>
				<?php
				wp_nav_menu(array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				));
				?>
			</nav><!-- #site-navigation -->

		
		</header><!-- #masthead -->

		<div id="content" class="site-content w-full">