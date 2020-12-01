<?php 
/**
 * Function para registrar los widgets
 */

 function cre_setup_widgets() {

    register_sidebar([
        'id' => 'sidebar-widgets',
        'name' => 'Sidebar Widgets',
        'description' => 'Este es un widgets para el sidebar',
        'before_widgets' => '<section id="%1s" class="widget %2s">',
        'after_widgets' => '</section>',
        'before_title' => '<h4 class="widget-title h5">',
        'after_title' => '</h4>',
    ]);

    register_sidebar( [
        'id' => 'footer-widgets',
        'name' => 'Footer Widgets',
        'description' => 'Este es un widgets para el footer',
        'defore_widgets' => '<section is="%1s" class="widget %2s">',
        'after_widgets' => '</section>',
        'before_title' => '<h4 class="widget-title h5">',
        'after_title' => '</h4>',
    ] );

 }
 add_action( 'widgets_init', 'cre_setup_widgets' );