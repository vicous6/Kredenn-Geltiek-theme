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

function kg_register_post_types() {
    // La déclaration de nos Custom Post Types et Taxonomies ira ici

    // CPT Cours
    $labels = array(
        'name' => 'Cours',
        'all_items' => 'Tous les cours',  // affiché dans le sous menu
        'singular_name' => 'Cours',
        'add_new_item' => 'Ajouter un cours',
        'edit_item' => 'Modifier le cours',
        'menu_name' => 'Cours'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 7, 
        'menu_icon' => 'dashicons-admin-tools',
    );

    register_post_type( 'cours', $args );

    $labels = array(
        'name' => 'Type de cours',
        'new_item_name' => 'Nom du nouveau Cours',
        'parent_item' => 'Type de cours parent',
    );
    
    $args = array( 
        'labels' => $labels,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => true, 
    );

    register_taxonomy( 'type-cours', 'cours', $args );

}
add_action( 'init', 'kg_register_post_types' );


// function getHomepageData()
// {
//     $data = [];
//     $data['enseignement'] = [];
//     $data['enseignement']["titre1"] = get_field('
//     titre');
    
//     return $data;
// }
register_nav_menus( array(
	'Navigation' => 'Menu Principal',
	
) );
?>
