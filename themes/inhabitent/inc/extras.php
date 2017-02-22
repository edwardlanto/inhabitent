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


	//Changes from page of Logo and updated urldecode
function custom_loginlogo() {
echo '<style type="text/css">
#login h1 a {
	background-image: url('.get_bloginfo('template_directory').'/images/front-inhabitent-logo.svg)!important;background-size:contain !important;
width:300px !important;
}
#login .button.button-primary{
	background-color:#248A83;s
	}

</style>';
}
add_action('login_head', 'custom_loginlogo');

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Inhabitent';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// ----Change Title-----
function product_archive_title($title) {
	if(is_post_type_archive('products')) {
		$title = 'Shop Stuff';
	}
	return $title;
}
add_filter('get_the_archive_title', 'product_archive_title');
