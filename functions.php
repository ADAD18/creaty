<?php

/**
 * Funcion setup para el theme
 */

function cre_setup_theme(){

    //suporte para las etiquetas html5
    $supports=[
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ];

    add_theme_support( 'html5', $supports );

    //Soporte para las etiquetas tag
    add_theme_support( 'title-tag' );

    //Soporte para imagenes destacadas
    add_theme_support( 'post-thumbnails' );

    //width del contenido
    $GLOBALS['content-width'] = 1130;

    //image mediun
    add_image_size( 'image-mediun', 500, 500, true );

    //image litlte
    add_image_size( 'image-little', 250, 250, false );

    //image full
    add_image_size( 'image-full', 1120, 600, false );

    //Agregar la imagen de header
    $header_settings=[
        'width' => 1130,
        'height' => 350,
        'flex-height' => false,
        'flex-width' => false,
        'header-text' => false,
    ];
    add_theme_support( 'custom-header', $header_settings );

}
add_action( 'after_setup_theme', 'cre_setup_theme' );

function cre_cpt_tax() {

 
   if ( ! post_type_exists( 'producto' ) ) {
        register_post_type( 'producto' ,array(
            'labels' => array(
                'name' => 'Productos',
                'singular_name' => 'Producto',
                'menu_name' => 'Produtos',
                'name_admin_bar' => 'Producto',
                'add_new' => 'Añadir nuevo',
                'add_new_item' => 'Añadir nuevo Producto',
                'new_item' => 'Nuevo Producto',
                'edit_item' => 'Producto',
                'view_item' => 'Ver Producto',
                'all_items' => 'Todos los Productos',
                'parent_item' => 'Padre del producto',
                'search_items' => 'Buscar Productos',
                'not_found' => 'No hay Productos',
                'not_found_in_trash' => 'No hay Productos en la papelera',
            ),
            'label' => 'producto',
            'Description' => 'Productos',
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-portfolio',
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
        ));
    }

    if ( ! taxonomy_exists( 'tipo-producto' ) ) {
        register_taxonomy( 'tipo-producto', array( 'producto' ) , array(
            'labels' => array(
                'name' => 'Tipo de Productos',
                'singular' => 'Tipo de Producto',
                'search_items' => 'Buscar tipo de prodcuto',
                'all_items' => 'Todos los tipos d eprosducto',
                'parent_item' => 'Padre del tipo de producto',
                'parent_item_colon' => 'Padre del tipo de producto:',
                'edit_item' => 'Editar Tipo de producto',
                'update_item' => 'Actualizar Tipo de producto',
                'add_new_item' => 'Añadir nuevo Tipo de producto',
                'new_item_name' => 'Nevo Tipo de producto',
                'main_menu' => 'Tipo de producto',
            ), 
            'hierarchical' => true,
            'show_ul' => true,
            'show_admin_column' => true,
        ));
    }

}
add_action('init', 'cre_cpt_tax' );

require 'inc/menus.php';

require 'inc/widgets.php';

require 'inc/scripts.php';

require 'inc/customizer.php';

