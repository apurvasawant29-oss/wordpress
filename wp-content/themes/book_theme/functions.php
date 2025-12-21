<?php
/*
  =============================================================
  1.0 - Theme Support
  =============================================================
 */
  add_action('after_setup_theme', 'theme_setup');
  function theme_setup() {
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'script', 'style'));
    add_theme_support('post-thumbnails'); 
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support( 'woocommerce');
    add_post_type_support('page', 'excerpt'); 
    remove_theme_support('block-templates');
  }

  add_filter( 'should_load_separate_core_block_assets', '__return_false' );
   add_filter( 'wp_is_block_theme', '__return_false' );


   add_filter('block_editor_settings_all', function ($settings) {
    $settings['templates'] = [];
    return $settings;
});

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts() {
  
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/theme-styles.css', '', filemtime(get_stylesheet_directory() . '/css/theme-styles.css'));
     wp_enqueue_style('cart', get_template_directory_uri() . '/css/cart.css', '', filemtime(get_stylesheet_directory() . '/css/cart.css'));
 }