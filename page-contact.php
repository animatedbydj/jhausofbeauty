<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wptailwind
 */

get_header();
?>

<div id="primary" class="content-area pt-48">
	<main id="main" class="site-main w-8/12 min-h-screen mx-auto flex flex-wrap justify-center">

		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'page-contact');

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
<div class="w-10/12 mx-auto md:w-1/2 mt-8">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.650121807562!2d-115.2448355843587!3d36.077637115736174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c7ae0f3343ed%3A0xe7fea75f57477fff!2s6101-6113%20S%20Rainbow%20Blvd%2C%20Las%20Vegas%2C%20NV%2089118!5e0!3m2!1sen!2sus!4v1604858102408!5m2!1sen!2sus" class="googlemap"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
