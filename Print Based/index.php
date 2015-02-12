<?php get_header(); ?>


    <div class="row">
        <section id ="image" class="col-lg-5">
           <img src="http://placehold.it/2200x2000">
        </section>
        <section id="nav" class="col-lg-1">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
        </section>
        <section id="content" class="col-lg-5">
            <div class="row">
                <div class="col-lg-12">
                <?php if (have_posts()) :
    while (have_posts()) :
            the_post(); ?>
                  <article id="post-<?php the_ID(); ?>" class="post">
                        <div class="page-header">
                            <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a><span style="float:right" class="glyphicon glyphicon-chevron-right"></span></h1>
                        </div>
                        <div>
                            <?php the_excerpt(); ?>
                        <div>
                        <div class="clearfix"></div>

                    </article>

     <?php endwhile;
endif; ?>
                    <footer>
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
                    </footer>
                </div>
            </div>
        </section>
        <div>
            <a href="#">
                <span class="glyphicon glyphicon-menu-up"></span>
            </a>
        </div>
    </div>


<?php get_footer(); ?>