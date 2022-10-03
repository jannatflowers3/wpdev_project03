<?php

add_theme_support('post-thumbnails');
add_theme_support('widgets');

function add_custom_script(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts','add_custom_script');

// registering menu location

function register_my_menu() {
    register_nav_menu( 'main', __( 'main menubar', 'sultanatheme' ) );
  }
  add_action('after_setup_theme','register_my_menu');

 // register sidebar
 /**
 * Add a sidebar.
 */
function sidebar_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'textdomain' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'the main sidebar in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<div id="sidebar">',
		'after_widget'  => '</div>',
		
	) );
}
add_action( 'widgets_init', 'sidebar_widgets_init' );