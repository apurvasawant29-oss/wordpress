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
    wp_enqueue_style('poststyle', get_template_directory_uri() . '/css/poststyle.css', '', filemtime(get_stylesheet_directory() . '/css/poststyle.css'));
  wp_enqueue_style('footer-style', get_template_directory_uri() . '/css/footer.css', '', filemtime(get_stylesheet_directory() . '/css/footer.css'));

 }
 //register widget sidebar for woocommerce shop page filters
 function bookmarket_register_shop_sidebar() {
    register_sidebar(array(
        'name'          => 'WooCommerce Shop Sidebar',
        'id'            => 'shop-sidebar',
        'description'   => 'Filters for WooCommerce shop page',
        'before_widget' => '<div class="shop-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="shop-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'bookmarket_register_shop_sidebar');

//rearrage price and add to cart button on product archive page
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 20 );

add_action( 'woocommerce_after_shop_loop_item', 'bookmarket_wrapper_start', 5 );
function bookmarket_wrapper_start() {
    echo '<div class="price-cart-wrapper">';
}
add_action( 'woocommerce_after_shop_loop_item', 'bookmarket_wrapper_end', 25 );
function bookmarket_wrapper_end() {
    echo '</div>';
}