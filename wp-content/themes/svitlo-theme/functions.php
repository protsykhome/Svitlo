<?php
function svitlo_theme_setup() {
    add_theme_support( 'menus' );
    register_nav_menu( 'header-menu', 'Header Menu' );
}
add_action( 'after_setup_theme', 'svitlo_theme_setup' );

function svitlo_theme_styles() {
    wp_enqueue_style( 'main-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'svitlo_theme_styles' );
