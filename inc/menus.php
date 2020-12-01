<?php 
/**
 * Regidtro del menu de bavegacion
 */

 function cre_register_menus() {
    register_nav_menus(array(
       'main-menu' => 'Menu',
      'mobile-menu' => 'Mobil'));
 }
 add_action( 'after_setup_theme', 'cre_register_menus');