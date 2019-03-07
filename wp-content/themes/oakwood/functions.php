<?php
/**
 * Oakwood functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Oakwood
 */



/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'functions/theme-options.php');
require( trailingslashit( get_template_directory() ) . 'functions/meta-boxes.php');





if ( ! function_exists( 'oakwood_setup' ) ) :

	function oakwood_setup() {

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'oakwood' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'oakwood_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		include ( get_template_directory() .'/inc/custom-post-type-posts.php');
	}
endif;
add_action( 'after_setup_theme', 'oakwood_setup' );

add_action( 'after_switch_theme', 'artbt_reset_permalink' );
function artbt_reset_permalink (){
	flush_rewrite_rules();
}



function oakwood_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'oakwood' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'oakwood' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer left side',
		'id'            => 'footer-left',
		'description'   => '',
		'before_widget' => '<div class="foot-logo">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => 'Footer menu-1',
		'id'            => 'footer-menu-1',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => 'Footer menu-2',
		'id'            => 'footer-menu-2',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => 'Footer right side',
		'id'            => 'footer-right',
		'description'   => '',
		'before_widget' => '<div class="foot-info">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'oakwood_widgets_init' );



function oakwood_style(){

	wp_enqueue_style( 'oakwood-style', get_stylesheet_uri() );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css');

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');

	wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i');
	

}

add_action('wp_enqueue_scripts','oakwood_style');


function oakwood_scripts() {

	wp_enqueue_script( 'capthca', 'https://www.google.com/recaptcha/api.js', array(), '', false);

	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '', true);

	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '', true);
	
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), '', true);

	wp_enqueue_script( 'oakwood-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'oakwood_scripts' );

function allow_textare_in_metabox($value, $id){

	if($id == 'main_about_desc' || 'main_product_desc'){

		$value = true;

	}

	elseif($id == 'main_about_desc' || 'main_product_desc'){

		$value = true;

	}

	return $value;
}

add_filter('ot_override_forced_textarea_simple','allow_textare_in_metabox',10,2);

add_action('template_redirect', 'gom_add_last_modified_header');
function gom_add_last_modified_header($headers) {
    
        $post_id = get_queried_object_id();
        if( $post_id ) {
            header("Last-Modified: " . get_the_modified_time("D, d M Y H:i:s", $post_id) );
        }
    
}

function pippin_get_image_id($image_url) {
    global $wpdb;
    $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
        return $attachment[0]; 
}

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


 
// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
 
// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

