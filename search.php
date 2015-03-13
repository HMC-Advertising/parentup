<?php get_header(); ?>

   <!-- content-->
    <section id="content" class="page">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <!-- non-mobile -->
                        <div class="hidden-sm hidden-xs" style="position:absolute; height:100%">
                        <?php get_template_part("assets/php/templates/sidenav", "nonmobile"); ?>
                        </div>
                        <!-- /none-mobile -->

                        <!-- content -->
                        <section class="col-lg-10 col-md-9" style="margin-left:200px">
                            <div class="breadcrumbs">
                                <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
                            </div>
                            <div class="page_content">
                                                <h1  class="title">Search Results</h1>
                <?php if ( have_posts() && strlen( trim(get_search_query()) ) != 0 ) : ?>
                <section id="posts-container" class="<?php echo $container_class; ?> clearfix">
                    <?php
                    $post_count = 1;

                    $prev_post_timestamp = null;
                    $prev_post_month = null;
                    $first_timeline_loop = false;

                    while(have_posts()): the_post();
                        $post_timestamp = strtotime($post->post_date);
                        $post_month = date('n', $post_timestamp);
                        $post_year = get_the_date('o');
                        $current_date = get_the_date('o-n');
                    ?>

                    <article id="post-<?php the_ID(); ?>" class="col-lg-12 post">
                        <div class="page-header">
                            <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <div>
                            <?php the_content(); ?>
                        </div>

                    </article>

                    <?php endwhile; ?>

                </section>
                <?php else: ?>

                    <h2>Sorry Couldn't find what you were looking for.</h2>


                <?php endif; ?>


                <section class="divider">
                    <hr>
                </section>
                <section class="anSearch">
                    <p class="lead">Try Another Search</p>
                     <?php get_search_form(); ?>
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