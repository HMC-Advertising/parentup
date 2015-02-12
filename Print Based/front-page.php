<?php get_header(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <div class="col-lg-1 nav">
                       <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
                </div>
                <div class="col-lg-11">
                    <?php if (have_posts()) :
                        while (have_posts()) :
                            the_post(); ?>
                                <?php the_content(); ?>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>