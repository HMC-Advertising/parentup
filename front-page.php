<?php get_header(); ?>


	<!-- content-->
	<section id="content">
		<div class="row">
			<div class="col-lg-12">
				<div class="container">
					<div class="row">
						<!-- non-mobile -->
						<?php get_template_part("sidenav"); ?>
						<!-- /none-mobile -->
						<!-- mobile -->
						<?php //get_template_part("sidenav"); ?>
						<!-- /mobile -->

						<!-- content -->
						<div class="col-lg-10">
							<article class="page_content">
								<?php if ( have_posts() ) : while ( have_posts() ) :
									the_post();
									 the_content();

								endwhile; endif; ?>
							</article>
							<aside class="seperator">
								Choose the quote that Best Captures your parenting style
							</aside>
							<footer class="onhover">
								<?php get_template_part("frontpage_hover"); ?>
 							</footer>
						</div>
					</div>
					<!-- /content -->
				</div>
			</div>
		</div>
	</section>
	<!-- /content-->




<?php get_footer(); ?>