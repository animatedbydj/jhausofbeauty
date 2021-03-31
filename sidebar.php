<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wptailwind
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<aside id="secondary" class="widget-area w-full lg:w-4/12 h-auto p-12  mx-auto  text-black bg-gray-300">
	<?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- #secondary -->