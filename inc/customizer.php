<?php 

function cre_set_header_image(){

    if( ! has_custom_header() ){
        return;
    }

    $header = get_custom_header();

    $css = '
        .site-branding {
            background:url(' . esc_url( $header->url ) . ') no-repeat center center;
            background-size: cover;
            opacity: 0.9;
        }
    ';

    wp_add_inline_style( 'cre_style', $css );

}
add_action( 'wp_enqueue_scripts', 'cre_set_header_image' );