<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wptailwind
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer w-full pt-4 flex flex-col space-between">
	<div class="site-info w-full flex flex-col items-center justify-center">
		<h3 class="text-2xl mt-8 playfair"><?php bloginfo('name'); ?></h3>
		<p class="mb-4"><?php  bloginfo('description'); ?></p>

	<!-- <p class="text-center mb-2"><a href="mailto:contact@jhaus.com">contact@jhaus.com</a>  </p> -->
	
	<a href="https://www.instagram.com/jhausofbeauty/" target="_blank" rel="noopener"><img src="<?php echo get_bloginfo('template_url') ?>/img/ig.svg" class="ig-logo my-8" alt="ig logo" /></a>

	</div><!-- .site-info -->
	<div class="footer-bottom w-full self-end">
	
		<p class="text-center my-4">
©2020 by jhausofbeauty.com.</p>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>