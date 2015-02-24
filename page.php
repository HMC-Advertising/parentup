<?php get_header(); ?>



    <!-- content-->
    <section id="content" class="page">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <!-- non-mobile -->
                        <div class="hidden-sm hidden-xs">
                        <?php get_template_part("assets/php/templates/sidenav", "nonmobile"); ?>
                        </div>
                        <!-- /none-mobile -->

                        <!-- content -->
                        <section class="col-lg-10 col-md-9">
                            <div class="breadcrumbs">
                                / <a href="">BC</a> / Bread crumbs /
                            </div>
                            <div class="page_content">
                                <header>
                                    <h1><?php the_title(); ?></h1>
                                </header>
                                <article>
                                    <?php if ( have_posts() ) : while ( have_posts() ) :
                                            the_post();
                                            the_content();
                                        endwhile; endif; ?>
                                </article>
                             </div>
                        </section>
                    </div>
                    <!-- /content -->
                </div>
            </div>
        </div>
    </section>
    <!-- /content-->

<?php get_footer(); ?>