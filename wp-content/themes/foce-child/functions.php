<?php
function enqueue_swiper() {
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), '6.5.7', true);
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '6.5.7');
}
add_action('wp_enqueue_scripts', 'enqueue_swiper');

// Enqueue script
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts() {
    wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/script.js', array('jquery', 'swiper-js'), '6.5.7', true);
    //wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/cloud.js', array(), '1.0', true);
}


// Enqueue styles
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}


// Copier les options du personnalisateur du thème parent vers le thème enfant
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

