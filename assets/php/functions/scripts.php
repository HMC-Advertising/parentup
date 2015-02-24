<?php

function theme_scripts() {
//main style sheet
    wp_deregister_style( 'style-css' );
    wp_register_style( 'style-css', get_stylesheet_uri() );

//lib
    wp_register_style( 'fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
    wp_register_style( 'slidebars', get_template_directory_uri() .'/assets/js/plugins/Slidebars/development/slidebars.css' );

    wp_register_style( 'slick-style','http://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css' );
      wp_register_style( 'slick-theme', get_template_directory_uri() . '/assets/js/plugins/slick.js/dev/slick-theme.css' );

//scripts
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/plugins/bootstrap/bootstrap.js', array(), '1.0.0', true );
    wp_register_script('html5shiv', get_template_directory_uri() . '/assets/js/plugins/html5shiv/dist/html5shiv.min.js', array(), '1.0.0', false);
    wp_register_script('slick', get_template_directory_uri() . '/assets/js/plugins/slick.js/dev/slick.min.js', array(), '1.0.0', true);
    wp_register_script('slide', get_template_directory_uri() . '/assets/js/plugins/Slidebars/development/slidebars.js', array(), '1.0.0', true);

    //mine
    wp_register_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );

//styles
    wp_enqueue_style( 'fontawesome' );
    wp_enqueue_style( 'style-css' );
    wp_enqueue_style( 'slidebars' );


//scripts
    wp_enqueue_script("jquery");
    wp_enqueue_script("bootstrap");

    wp_enqueue_script('html5shiv');
    wp_enqueue_script( 'slide');

    //my scripts
    wp_enqueue_script("main-script");

    if(is_front_page()){
        if(is_mobile() or is_tablet()){
            wp_enqueue_style( 'slick-style' );
            //wp_enqueue_style( 'slick-theme' );
            wp_enqueue_script("slick");
        }
    }

}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );


?>