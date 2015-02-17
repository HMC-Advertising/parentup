<?php get_header(); ?>
<?php if (have_posts()) :
    while (have_posts()) :
            the_post(); ?>
    <div class="row">
        <section id ="image" class="col-lg-5">
            <?php the_post_thumbnail('full'); ?>
        </section>
        <section id="nav" class="col-lg-1">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
        </section>
        <section id="content" class="col-lg-5">
            <div class="row">
                <div class="col-lg-12 post post-<?php the_ID(); ?>">
                    <header>
                        <h1><?php the_title(); ?></h1>
                        <article>
                            <?php the_excerpt(); ?>
                        </article>
                        <hr>
                    </header>
                    <article>
                        <?php the_content(); ?>
                    </article>
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

     <?php endwhile;
endif; ?>
<?php get_footer(); ?>