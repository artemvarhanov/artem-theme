<?php 
function mytheme_enqueue_style() {
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );

add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
  $defaults = array(
      'height'               => 100,
      'width'                => 400,
      'flex-height'          => true,
      'flex-width'           => true,
      'header-text'          => array( 'site-title', 'site-description' ),
      'unlink-homepage-logo' => true, 
  );

  add_theme_support( 'custom-logo', $defaults );
}
function register_my_menu() {
  register_nav_menu('header-menu',  __( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  // add_action( 'widgets_init', 'register_my_widgets' );
  // function register_my_widgets(){
    register_sidebar( array(
      'name' => "Right side panel of the site",
      'id' => 'sidebar',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ) );
    register_sidebar( array(
      'name' => "Sidebar 2",
      'id' => 'sd-2',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ) );
    register_sidebar( array(
      'name' => "Main Menu Button",
      'id' => 'menu-button',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ) );
  // }