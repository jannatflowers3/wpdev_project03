<?php
add_theme_support('post_thumbnails');
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
		'before_widget' => '<div class="col-1-3"><div class="wrap-col">',
		'after_widget'  => '</div> </div> </div> </div>',
		'before_title'  => '<div class="box"><div class="heading">',
		'after_title'   => '</div><div class="content">',
	) );

    register_sidebar( array(
		'name'          => __( 'footer Sidebar', 'zboom' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'zboom_widget_init' );

add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );