<?php

add_theme_support('post-thumbnails');

add_theme_support('title-tag'); 

function register_my_menus() 
{ 
    register_nav_menus( array( 
    'header-menu' => __( 'Menu de navigation' ))); 
}

add_action( 'init', 'register_my_menus' );

function getNavigationMenu() 
{  
    $items = wp_get_nav_menu_items('Navigation');  
  
    return $items;  
}


?>
