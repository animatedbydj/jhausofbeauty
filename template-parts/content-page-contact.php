<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wptailwind
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('w-full flex flex-col items-center flex-wrap'); ?>>
	<header class="entry-header w-1/2 my-6 self-start">
		<?php the_title('<h1 class="entry-title text-5xl">', '</h1>'); ?>
	</header><!-- .entry-header -->

	<?php wptailwind_post_thumbnail(); ?>
	<div class="contact-text h-auto mb-10  w-4/12 px-10">
<h2 class="mb-4">have any questions?</h2>
<p>email me at <a href="mailto:jlynne@jhausofbeauty.com">judylynne@jhausofbeauty.com</a>
</div>
	<div class="entry-content w-11/12 md:w-1/2 flex flex-wrap justify-center">
		<?php
		the_content();

		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'wptailwind'),
			'after'  => '</div>',
		));
		?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer w-full">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Edit <span class="screen-reader-text">%s</span>', 'wptailwind'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->