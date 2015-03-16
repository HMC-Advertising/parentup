<?php get_header(); ?>
 <!-- content-->
    <section id="content" class="page error">
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
                        <section class="col-lg-10 col-md-9 nonmobilecontent">
                             <div class="breadcrumbs">
                                404 Error
                             </div>

                            <div class="page_content">

                               <h1>OOPS!</h1>
                <div id="search">
                    <p class="lead">Can't find what you're looking for?</p>
                    <form class="search-form" action="<?php bloginfo('url'); ?>" method="get" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="s" placeholder="Search …">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

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