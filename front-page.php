<?php get_header(); ?>


	<!-- content-->

	<section id="content" class="frontpage">
	<!-- non-mobile -->
	<div class="container">
		<div class="hidden-sm hidden-xs" style="position:absolute; height:95%; overflow: hidden; z-index: 100">
			 <div class="col-lg-2 col-md-3" style="height:100%">
    			<div class="sidenav nonmobile">
        			<div class="logo">
            			<a href="<?php bloginfo('url'); ?>">
                			<img src="<?php echo get_template_directory_uri() ?>/assets/img/desktoplogo.png">
            			</a>
        			</div>
       				 <?php
            			$defaults = array(
                            'theme_location'  => 'main_nav',
                            'menu'            => 'main',
                            'menu_class'      => 'main-menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap' => '<ul class="main_nav">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );


                         wp_nav_menu($defaults); ?>
    				</div>

				</div>
			</div>

		</div>
		<!-- /none-mobile -->
		<div class="row">
			<div class="frontpage_image">
									<img src="<?php echo get_template_directory_uri()?>/assets/img/fp-stock-org.jpg">
			</div>
			<div class="col-lg-12">

				<div class="container">

					<div class="row">


						<!-- content -->

						<div class="col-lg-10 col-md-9 nonmobile nonmobilecontent">

							<div class="row">

								<article class="page_content">
									<?php if ( have_posts() ) : while ( have_posts() ) :
										the_post();
										the_content();

									endwhile; endif; ?>
								</article>
							</div>
							<div class="row">
								<aside class="seperator">
									<strong>Choose the quote</strong> that best captures your parenting style
								</aside>
							</div>
							<div class="row">
								<footer class="onhover">
								<?php if(is_mobile() or is_tablet()): ?>
									<div >

											<?php get_template_part("assets/php/templates/frontpage_hover", "mobile"); ?>
									</div>
								<?php else: ?>
									<div >

										<?php get_template_part("assets/php/templates/frontpage_hover", "nonmobile");?>
									</div>
								<?php endif; ?>

 								</footer>
 							</div>
						</div>
					</div>
					<!-- /content -->
				</div>
			</div>
		</div>
	</section>
	<!-- /content-->




<?php get_footer(); ?>