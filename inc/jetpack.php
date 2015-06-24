<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Onepager
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function onepager_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'onepager_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function onepager_jetpack_setup
add_action( 'after_setup_theme', 'onepager_jetpack_setup' );

function onepager_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function onepager_infinite_scroll_render