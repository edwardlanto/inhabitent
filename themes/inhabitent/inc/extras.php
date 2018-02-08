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






// ------------------------------------
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
// ----Change Shop Title Archive-----
function modify_title($title) {
	if(is_post_type_archive('products')) {
		$title = 'Shop Stuff';
	}
	return $title;
}
add_filter('get_the_archive_title', 'modify_title');
// ---Change Taxonomy Title Function----

add_filter('get_the_archive_title', 'modify_tax');

	function modify_tax($title){
		if(is_tax() ){
			$title = single_term_title('', false);
		}
		return $title;
	}

// Change Adventure Archive

	function adventure_change($title2){
		if(is_post_type_archive('adventure')) {
		$title2= "Latest Adventures";
		}
		return $title2;
	}
	add_filter('get_the_archive_title', 'adventure_change');

// ------pre_get_post-------
add_action( 'pre_get_posts', 'organize' );
function organize($query){
    if ( $query->is_main_query()){
		$query->set('orderby', 'title');
        $query->set('order', 'ASC');
		$query->set('posts_per_page','20');
    }
	
}
function update_hero_image() {
	
	if(!is_page_template('page-template/about.php')){
	return;
	}
	$url = CFS()->get( 'about_header_image' );
                			
    $custom_styles = ".about-hero{
		background:
        linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),url($url)no-repeat center bottom;;
		width: 100vw;
    	height: 100vh;
    	background-size: cover,cover;
   		position: relative;
		display: flex;
 		justify-content: center;
    	align-items: center;
	}";

        wp_add_inline_style( 'red-starter-style', $custom_styles );
}
add_action( 'wp_enqueue_scripts', 'update_hero_image' );

//Remove Whitespace from about

