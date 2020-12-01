<?php 
/**
 * Añade todos los scripts y estilos necesarios
 */

 function cre_enqueue_scripts() {
    
    //Style
    wp_enqueue_style( 'cre_style', get_stylesheet_uri() );

    wp_enqueue_style( 'cre_style-s' , get_template_directory_uri() . '/style-s.css');
    

 }
 add_action( 'wp_enqueue_scripts', 'cre_enqueue_scripts' );