<?php

function theme_scripts() {
//main style sheet
    wp_deregister_style( 'style-css' );
    wp_register_style( 'style-css', get_stylesheet_uri() );

//lib
    wp_register_style( 'fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
    wp_register_style( 'slidebars', get_template_directory_uri() .'/assets/js/plugins/slidebars/development/slidebars.css' );

     wp_register_style( 'open sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,800' );

    wp_register_style( 'slick-style','http://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css' );
      wp_register_style( 'slick-theme', get_template_directory_uri() . '/assets/js/plugins/slick.js/dev/slick-theme.css' );

//scripts
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/plugins/bootstrap/bootstrap.js', array(), '1.0.0', true );
    wp_register_script('bootstrap-tran', get_template_directory_uri() . '/assets/js/plugins/bootstrap/bootstrap/transition.js', array(), '1.0.0', true );
    wp_register_script('html5shiv', get_template_directory_uri() . '/assets/js/plugins/html5shiv/dist/html5shiv.min.js', array(), '1.0.0', false);
    wp_register_script('slick', get_template_directory_uri() . '/assets/js/plugins/slick.js/dev/slick.min.js', array(), '1.0.0', true);
    wp_register_script('slide', get_template_directory_uri() . '/assets/js/plugins/slidebars/development/slidebars.js', array(), '1.0.0', true);

    wp_register_script('checkboxes', get_template_directory_uri() . '/assets/js/plugins/checkboxes/svgcheckbx.js', array(), '1.0.0', true);

    wp_register_script('buttons', get_template_directory_uri() . '/assets/js/plugins/buttons/classie.js', array(), '1.0.0', true);

    //mine
    wp_register_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );

    //respond
        wp_register_script('respond', get_template_directory_uri() . '/assets/js/plugins/respond/dest/respond.min.js', array(), '1.0.0', false );
         wp_register_script('respond-media', get_template_directory_uri() . '/assets/js/plugins/respond/dest/respond.matchmedia.addListener.min.js', array(), '1.0.0', false );
         wp_register_script('modern', get_template_directory_uri() . '/assets/js/plugins/modernizer/modernizr.js', array(), '1.0.0', false );


//styles
    wp_enqueue_style( 'fontawesome' );
    wp_enqueue_style( 'style-css' );
    wp_enqueue_style( 'slidebars' );
    wp_enqueue_style( 'open sans' );


//scripts

    wp_enqueue_script("jquery");
    //wp_enqueue_script("bootstrap");
     //wp_enqueue_script("bootstrap-tran");
     wp_enqueue_script('respond');
      wp_enqueue_script('respond-media');
       wp_enqueue_script('html5shiv');
       wp_enqueue_script('modern');

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
    if(is_page_template("temp-actionplan.php" )){
        //buttons maybe a site wide one
             wp_enqueue_script("buttons");
        //checkboxes
             wp_enqueue_script("checkboxes");
    }

}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );


?>