<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Product Post Type
function inhabitent_cpt_product() {

	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'menu_name'             => 'Products',
		'name_admin_bar'        => 'Products',
		'archives'              => 'Products Archives',
		'attributes'            => 'Products Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Products',
		'add_new_item'          => 'Add New Product',
		'add_new'               => 'Add New Product',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Produt',
		'update_item'           => 'Update Product',
		'view_item'             => 'View Product',
		'view_items'            => 'View Products',
		'search_items'          => 'Search Product',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Products list',
		'items_list_navigation' => 'Products list navigation',
		'filter_items_list'     => 'Filter products list',
	);
	$args = array(
		'label'                 => 'Product',
		'description'           => 'Listing of items to sell',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions',  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'inhabitent_cpt_product', 0 );

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Adventures', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Adventure', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Adventure Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Adventure Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Adventure', 'text_domain' ),
		'description'           => __( 'Adventure Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'adventure_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'adventure', $args );

}
add_action( 'init', 'custom_post_type', 0 );
