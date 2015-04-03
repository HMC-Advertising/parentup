 <section id="sidebar" class="col-lg-3">
    <?php if(is_page("resources") or is_child("resources") or is_page("media-center") or is_child("media-center")): ?>
        <ul>
        <?php
           /* $defaults1 = array(
                            'theme_location'  => 'r_side_nav',
                            'menu'            => 'r_side_nav',
                            'menu_class'      => 'r_side_nav',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap' => '<ul class="main_nav">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
            );


            wp_nav_menu($defaults1);*/
            if(is_page("resources") or is_child("resources")){
                $here = 11;
               }
               else{
                 $here = 13;
               }



                wp_list_pages(array(
                    'title_li' => '',
                    'depth' => 1,
                    'child_of' => $here
                ));

            ?>
         </ul>
    <?php endif; ?>
   <?php //
        dynamic_sidebar('Sidebar Location');
        ?>

</section>
