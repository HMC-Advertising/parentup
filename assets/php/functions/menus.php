<?php

    //register navigation
    function register(){
        register_nav_menu('main_nav', 'Main Navigation');
        register_nav_menu('footer_nav', 'Footer Navigation');
        register_nav_menu('top_nav', 'Top Navigation');
        register_nav_menu('r_side_nav', 'Resource Side Navigation');
    }

    add_action( 'init', 'register' );


?>