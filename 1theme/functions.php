<?php


function custome_theme_init (){

  add_theme_support('menus');

  add_theme_support('post-thumbnails');

  register_nav_menu('mainmenu', "Main Manu");
  
  $labels = array(
    'name' => _x('Product', 'post type general name'),
    'singular_name' => _x('product', 'post type singular name'),
    'add_new' => _x('Add New', 'product'),
    'add_new_item' => __('Add New Product'),
    'edit_item' => __('Edit Product'),
    'new_item' => __('New Product'),
    'view_item' => __('View Product'),
    'search_items' => __('Search Product'),
    'not_found' =>  __('No Product found'),
    'not_found_in_trash' => __('No Product found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => _x('Product', 'post type general name')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 20,
    'menu_icon' => get_bloginfo('template_url') . '/images/no.png', // 16x16
    'supports' => array('title','editor','thumbnail','excerpt')
  );

  register_post_type ('product',$args);
  //register_taxonomy_for_object_type('category', 'product');
  register_taxonomy(
    'type',
    'product',
    array(
      'rewrite' => array( 'slug' => 'type' ),
      'hierarchical' => true,
      'labels' => array(
        'name' => __('JAFANG'),
        'menu_name' => __('Types'),
        'add_new_item' => __('Add new JAFANG')
      )
    )
  );
}

// add_shortcode('hello','say_hello');

// function say_hello(){
//   return '<h1 style="color:red;text-align:center;">Hello</h1>';
// }

add_shortcode('hello','say_hello');

function say_hello($atts){
  extract( shortcode_atts( array(
    'name' => 'ali'
  ), $atts ) );
  return "<h1 style=\"color:red;text-align:center;\">Hello $name</h1>";
}


add_action('init', 'custome_theme_init');