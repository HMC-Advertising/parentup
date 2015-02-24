<?php get_header(); ?>


	<!-- content-->
	<section id="content" class="frontpage">
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
						<div class="col-lg-10 col-md-9 nonmobile">
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
									<strong>Choose the quote</strong> that Best Captures your parenting style
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