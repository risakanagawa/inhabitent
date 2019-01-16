<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function replace_logo() {
	echo '<style type="text/css">                                                                   
	h1 a{background: url(https://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-text-dark.svg) no-repeat !important;
    background-size: 300px 53px !important;
    width: 300px !important;
    height: 53px !important;}                       
</style>';
}
add_action('login_head', 'replace_logo');

function the_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );