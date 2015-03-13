 <div class="col-lg-2 col-md-3" style="height:100%">
    <div class="sidenav nonmobile">
        <div class="logo">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/desktoplogo.png">
            </a>
        </div>
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
</div>
