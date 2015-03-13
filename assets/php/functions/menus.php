<?php

    //register navigation
    function register_my_menus(){
        register_nav_menu('main_nav', 'Main Navigation');
        register_nav_menu('footer_nav', 'Footer Navigation');
        register_nav_menu('top_nav', 'Top Navigation');
    }

    add_action( 'init', 'register_my_menus' );


?>