<?php

function theme_scripts() {
    //main style sheet
    wp_deregister_style( 'style-css' );
    wp_register_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_style( 'style-css' );

    //lib
     wp_register_style( 'fullbars', get_template_directory_uri() . '/assets/js/plugins/fullpage/jquery.fullPage.css' );
    wp_enqueue_style( 'fullbars' );


//scripts
    //libs
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/plugins/bootstrap/bootstrap.js', array(), '1.0.0', true );
    wp_register_script('handlebars', get_template_directory_uri() . '/assets/js/plugins/handlebars/bc/handlebars/lib/handlebars.min.js', array(), '1.0.0', true );
    wp_register_script('fullpage', get_template_directory_uri() . '/assets/js/plugins/fullpage/jquery.fullPage.min.js', array(), '1.0.0', true );

    //min
     wp_register_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );

    wp_enqueue_script("jquery");
    wp_enqueue_script("bootstrap");
    wp_enqueue_script("handlebars");
    wp_enqueue_script("fullpage");

    //my scripts
    wp_enqueue_script("main-script");


}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );



?>