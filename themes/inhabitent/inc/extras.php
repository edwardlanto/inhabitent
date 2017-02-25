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

// ----Change Title Archive-----
function modify_title($title) {
	if(is_post_type_archive('products')) {
		$title = 'Shop Stuff';
	}
	return $title;
}
add_filter('get_the_archive_title', 'modify_title');

// ---Change Wear Title function----

function modify_wear($wear) {
	if(has_term('wear', 'product_type')) {
		$wear = 'Wear';
	}
	return $wear;
}
add_filter('get_the_archive_title', 'modify_wear');

// --Change eat title function--


function modify_eat($eat) {
	if(has_term('eat', 'product_type')) {
		$eat = 'Eat';
	}
	return $eat;
}
add_filter('get_the_archive_title', 'modify_eat');

// ----Change do title function---

function modify_do($do) {
	if(has_term('do', 'product_type')) {
		$do = 'Do';
	}
	return $do;
}
add_filter('get_the_archive_title', 'modify_do');

// --Change sleep title function---

function modify_sleep($sleep) {
	if(has_term('sleep', 'product_type') && is_tax( 'product_type','sleep')) {
		$sleep = 'Sleep';
	}
	return $sleep;
}
add_filter('get_the_archive_title', 'modify_sleep');



function my_styles_method() {
   
   if(!is_page_template( 'about.php' )){
       return;
   }
   $url = CFS()->get('about_header_image');
   $custom_css = "
   .about_background{
       background-image:linear-gradient( to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url( {$url});
   }";
   wp_add_inline_style( 'red-starter-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );

// ------pre_get_post-------

add_action( 'pre_get_posts', 'organize' );

function organize($query){

    if ( $query->is_main_query() && is_post_type_archive('products')){
		$query->set('orderby', 'title');
        $query->set('order', 'ASC');
		$query->set('posts_per_page','20');
    }
	
}
?>