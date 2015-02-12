<?php
	require("assets/php/all.php");

    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    //register navigation
    function register_my_menus(){
        register_nav_menu('main_nav', 'Main Navigation');
        register_nav_menu('footer_nav', 'Footer Navigation');
    }

    add_action( 'init', 'register_my_menus' );

    //featured image

        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

        // additional image sizes
        // delete the next line if you do not need additional image sizes
        add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)



?>
