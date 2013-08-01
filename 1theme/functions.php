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
    'supports' => array('title','editor','thumbnail','excerpt','custom-fields')
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
add_shortcode('contact_form','contact_form');
}

function contact_form(){
  return file_get_contents( get_template_directory() . '/contact_form.html');
}

// add_shortcode('hello','say_hello');

// function say_hello(){
//   return '<h1 style="color:red;text-align:center;">Hello</h1>';
// }

// add_shortcode('hello','say_hello');

// function say_hello($atts){
//   extract( shortcode_atts( array(
//     'name' => 'ali'
//   ), $atts ) );
//   return "<h1 style=\"color:red;text-align:center;\">Hello $name</h1>";
// }


add_action('init', 'custome_theme_init');

add_action('add_meta_boxes', 'add_custom_box');
function add_custom_box() {
  add_meta_box('priceid', 'Price', 'price_box', 'product','side');
  // add_meta_box($id, $title, $callback, $post_type, $context);
  // ali.md/wpref/add_meta_box
}

function price_box() {
  $price = 0;
  if ( isset($_REQUEST['post']) ) {
    $postID = (int)$_REQUEST['post'];
    $price = get_post_meta($postID,'product_price',true);
    $price2 = get_post_meta($postID,'product_sail',true);
    // ali.md/wpref/get_post_meta
    $price = (float) $price;
    $price2 = (float) $price2;
  }

  echo "<label for='product_price'>Product Price</label>";
  echo "<input id='product_price' class='widefat' name='product_price' size='20' type='text' value='$price'>";

  echo "<label for='product_sail'>Sail Price</label>";
  echo "<input id='product_sail' class='widefat' name='product_sail' size='20' type='text' value='$price2'>";
}

add_action('save_post','save_meta');
function save_meta($postID) {
  if ( is_admin() ) {
    if ( isset($_POST['product_price']) ) {
      $price = (float) $_POST['product_price'];
      update_post_meta($postID,'product_price', $price);
      // ali.md/wpref/update_post_meta
    }

    if ( isset($_POST['product_sail']) ) {
      $price2 = (float) $_POST['product_sail'];
      update_post_meta($postID,'product_sail', $price2);
      // ali.md/wpref/update_post_meta
    }

  }
}