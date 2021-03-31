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

<div id="primary" class="content-area">
<main id="main" class="site-main bg-gray-100 flex flex-wrap space-between w-full lg:w-10/12 mx-auto ">
        <div class="postsloop  w-11/12 flex flex-wrap items-center justify-center md:justify-evenly">

            <?php
            $args = array('post_type' => 'services');
            // The Query
            $the_query = new WP_Query($args);
            while ($the_query->have_posts()) :
                $the_query->the_post();

                get_template_part('template-parts/content', 'services-cards');


            endwhile; // End of the loop.
            ?>
        </div>
       
    </main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
