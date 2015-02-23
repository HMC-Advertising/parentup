<header id="header">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <nav>
                            <?php

                        $defaults = array(
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


                         wp_nav_menu($defaults); ?>
                    </nav>
                    <?php get_template_part("assets/php/templates/alert"); ?>
                </div>
            </div>
        </div>
    </header>