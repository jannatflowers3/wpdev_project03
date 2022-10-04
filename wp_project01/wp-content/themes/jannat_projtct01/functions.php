<?
add_theme_support('post-thumbnails');
add_theme_support('widgets');

function style_custom_shituri(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts','style_custom_shituri');

// registering menu location

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Menu' ));
 }
 add_action( 'init', 'register_my_menu' );
