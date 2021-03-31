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
<div id="post-<?php the_ID(); ?>" <?php post_class('services-card border border-black border-solid'); ?> >
<div class="services-card-img s1" style="background: url(<?php echo $url; ?>); background-repeat: no-repeat; background-size: cover;"></div>
<h3 class="text-3xl my-6 ml-6"><?php echo the_title(); ?></h3>

    <a href="<?php echo get_permalink($id) ?>" class="btn hover:bg-gray-800 transform hover:-translate-y-2  ml-6 inline-block mt-10 w-50 text-center self-center"> Request To Book</a>
</div>

