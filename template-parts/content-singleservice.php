<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wptailwind
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('w-full lg:w-10/12 pl-12 lg:pl-0 mx-auto my-10 flex flex-col lg:flex-row flex-wrap justify-start lg:justify-between'); ?>>
    <header class="entry-header w-6/12">
    <h1>HDAFFF</h1>
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
        ?>
            <div class="entry-meta">
                <?php
                wptailwind_posted_on();
                wptailwind_posted_by();
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php wptailwind_post_thumbnail(); ?>

    <div class="entry-content">
        <?php
        the_content();
        ?>
    </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->