    <!-- footer-->
    <footer id="footer">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="col-lg-8 tagline">
                        Helping Vermont's Parents Equip Kids for Life's Challenges.
                    </div>
                    <div class="col-lg-4">
                     <?php

                        $defaults = array(
                            'theme_location'  => 'footer_nav',
                            'menu'            => 'footer_nav',
                            'menu_class'      => 'footer_nav',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap' => '<ul class="footer_nav">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );


                         wp_nav_menu($defaults); ?>
                        <a href="http://healthvermont.gov/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/vtlogo.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer-->
</div>