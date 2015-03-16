<?php
	require_once("assets/php/functions/all.php");

    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    function is_child( $parent = '' ) {
    global $post;

    $parent_obj = get_page( $post->post_parent, ARRAY_A );
    $parent = (string) $parent;
    $parent_array = (array) $parent;

    if ( in_array( (string) $parent_obj['ID'], $parent_array ) ) {
        return true;
    } elseif ( in_array( (string) $parent_obj['post_title'], $parent_array ) ) {
        return true;
    } elseif ( in_array( (string) $parent_obj['post_name'], $parent_array ) ) {
        return true;
    } else {
        return false;
    }
}
 function custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




    //featured image

        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

        // additional image sizes
        // delete the next line if you do not need additional image sizes
        add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)



?>
