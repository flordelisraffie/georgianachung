<?php 

//register css files
add_action( 'wp_enqueue_scripts', function(){

    wp_enqueue_style( 'elink-default-2022-style', get_stylesheet_directory_uri().'/css/elink-default-2022.css' );
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri().'/style.css' );

} );

//register the javascript
add_action( 'wp_enqueue_scripts', function(){

    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/divi-child-script.js', array( 'jquery' ));
    
});