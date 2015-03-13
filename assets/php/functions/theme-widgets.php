<?php

$args = array(
    'name'          =>  'Sidebar Location' ,
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => "</h2>\n",
);
register_sidebar( $args );






?>