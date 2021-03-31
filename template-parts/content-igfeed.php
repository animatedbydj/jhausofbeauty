<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wptailwind
 */

?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    $serviceDetails = get_post_meta($post->ID);
 ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('ig-feed w-7/12 mx-auto'); ?> >

<?php echo the_content(); ?>

    
</div>

