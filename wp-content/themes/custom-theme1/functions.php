<?php
/*==========================
Add stylesheets and javascript files
============================*/

function custom_theme_scripts(){
    //Bootstrap CSS
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    //wp_enqueue_style('bootstrap-grid', get_stylesheet_directory_uri() . '/css/bootstrap-grid.min.css');

    //Main CSS
    wp_enueue_style('main-styles', get_stylesheet_uri());

    //Javascript Files
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/scripts.js');
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/*==========================
Adds Featured Images
============================*/
add_theme_support('post-thumbnails');

/*==========================
Custom Header Image
============================*/
$custom_header_image = array (
    'width'   => 520,
    'height'  => 150,
    'uploads' => true,
);
add_theme_support('custom-header', $custom_image_header)
?>