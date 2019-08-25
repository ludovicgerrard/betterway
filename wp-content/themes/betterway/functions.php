<?php
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function custom_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css/style-login.css' );
}

function custom_login_script() {
    wp_enqueue_script( 'velocity-min', 'https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js' );
    wp_enqueue_script( 'velocity-ui', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/2/velocity.ui.min.js' );
}
//This loads the function above on the login page
add_action( 'login_enqueue_scripts', 'custom_login_stylesheet' );
add_action( 'login_enqueue_scripts', 'custom_login_script' );
add_action( 'login_enqueue_scripts', 'custom_form_script' );