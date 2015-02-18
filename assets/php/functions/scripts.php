<?php

function theme_scripts() {
    //main style sheet
    wp_deregister_style( 'style-css' );
    wp_register_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_style( 'style-css' );

    //lib
    wp_register_style( 'fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'fontawesome' );


//scripts
    //libs
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/plugins/bootstrap/bootstrap.js', array(), '1.0.0', true );



    //min
     wp_register_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );

    wp_enqueue_script("jquery");
    wp_enqueue_script("bootstrap");


    //my scripts
    wp_enqueue_script("main-script");


}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );


?>