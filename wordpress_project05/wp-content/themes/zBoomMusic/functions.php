<?php
add_theme_support('post-thumbnails');
add_theme_support('widgets');

function zboomMusic(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'zboomMusic' ),
        'footer_menu'  => __( 'Footer Menu', 'zboomMusic' ),
    ) );
}
add_action( 'after_setup_theme', 'zboomMusic');


// sidebar widget
/**
 * Add a sidebar.
 */
function zboom_widget_init() {
	register_sidebar( array(
		'name'          => __( 'right Sidebar', 'wpd' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<div class="col-1-3"><div class="wrap-col"><div>',
		'after_widget'  => '</div></div></div></div>',
		'before_title'  => '<div class="box"><div class="heading"><h2>',
		'after_title'   => '</h2></div><div class="content">',
	) );

    register_sidebar( array(
		'name'          => __( 'footer Sidebar', 'zboom' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages','textdomain' ),
		'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
		'after_widget'  => '</div></div></div></div>',
		'before_title'  => '<div class="heading"><h2>',
		'after_title'   => '</h2></div><div class="content">'
	) );



	
}
add_action( 'widgets_init', 'zboom_widget_init' );

add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

//slider 
function slider_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'sliders', 'zBoomMusic' ),
        'menu_icon' => 'dashicons-book',
		'supports'           => array( 'title','author', 'thumbnail'),
	);

    register_post_type( 'sliders', $args );

	$args = array(
        'public'    => true,
        'label'     => __( 'services', 'zBoomMusic' ),
        'menu_icon' => 'dashicons-book',
		'supports'           => array( 'title', 'editor'),

	);

    register_post_type( 'services', $args );


}
add_action( 'init', 'slider_post_type' );


