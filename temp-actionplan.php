<?php /*
template name: Action Plan
*/

?>
<?php get_header(); ?>
    <!-- content-->
    <section id="content" class="page act">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <!-- non-mobile -->
                        <div class="hidden-sm hidden-xs col-lg-2 col-md-3">
                        <?php get_template_part("assets/php/templates/sidenav", "nonmobile"); ?>
                        </div>
                        <!-- /none-mobile -->

                        <!-- content -->
                        <section class="col-lg-9 col-md-8 nonmobilecontent">
                            <div class="breadcrumbs">
                              <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
                            </div>
                            <div class="page_content">
                                <header>
                                    <h1><?php the_title(); ?> <div style="float:right" class='st_sharethis' displayText='Share '></div></h1>
                                </header>
                                <article>
                                    <?php if ( have_posts() ) : while ( have_posts() ) :
                                            the_post();
                                            the_content();
                                        endwhile; endif; ?>
                                </article>
                                <section>
                                    <?php get_template_part("assets/php/actionplan/plan"); ?>
                                </section>
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