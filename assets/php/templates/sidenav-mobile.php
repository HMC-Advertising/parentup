 <div class="sb-slidebar sb-left">
    <div class="sidenav mobile">

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
        <nav>
                            <?php

                        $defaults1 = array(
                            'theme_location'  => 'top_nav',
                            'menu'            => 'top',
                            'menu_class'      => 'top_nav',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap' => '<ul class="top_nav">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );


                         wp_nav_menu($defaults1); ?>
        </nav>
    </div>
</div>