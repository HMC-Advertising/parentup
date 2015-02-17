 <div class="col-lg-4 sidenav">

<img src="http://placehold.it/400x400">

                            <?php

                        $defaults = array(
                            'theme_location'  => 'main_nav',
                            'menu'            => 'main',
                            'menu_class'      => 'main-menu',
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


                         wp_nav_menu($defaults); ?>
</div>
