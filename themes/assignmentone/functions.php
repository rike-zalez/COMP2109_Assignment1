<?php

function load_css()
{
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], 1, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');


register_nav_menus(array( 
    'header' => 'Header menu',
    'footer' => 'Footer menu'
) );


add_theme_support('menus');
add_theme_support( 'post-thumbnails' );


add_image_size('small', 600, 600, false);

?>