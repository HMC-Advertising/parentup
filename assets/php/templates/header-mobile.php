<header id="header-mobile">
        <div class="row">
            <div class="col-xs-12">
                <div class="container">
                    <header>
                        <div class="col-xs-3">
                            <a href="#" class="sb-toggle-left">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a href="<?php echo home_url( ); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-mobile.png"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="sb-toggle-right">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </header>
                    <div class="row">
                    <?php get_template_part("assets/php/templates/alert"); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>