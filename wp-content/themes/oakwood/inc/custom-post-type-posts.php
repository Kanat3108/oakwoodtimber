<?php
// Register Custom Post Type
function custom_post_type_oakwood() {

	$labels = array(
		'name'                  => 'Posts',
		'singular_name'         => 'Post',
		'menu_name'             => 'Post',
		'add_new_item'          => 'Add New Post',
		'add_new'               => 'Add New Post',
		'new_item'              => 'New Post',
		'edit_item'             => 'Edit Post',
		'update_item'           => 'Update Post',
		'view_item'             => 'View Post',
		'view_items'            => 'View Posts',
	);
	$rewrite = array(
		'slug'                  => 'posts',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => 'Post',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'query_var'             => 'posts',
		'rewrite'               => $rewrite,
	);
	register_post_type( 'oakwood_post', $args );

	$labels = array(
		'name'					=> 'Taxonomy Post',
		'singular_name'			=> 'Taxonomy',
		'menu_name'				=> 'Taxonomy Post',
		);
	
	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => false,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
		);
	
	register_taxonomy( 'service-cat', array( 'oakwood_post' ), $args );


}
add_action( 'init', 'custom_post_type_oakwood', 0 );

?>