<?php get_header(); ?>

	<section id="main">
		<div class="container">
			<div class="row">
				<section class="col-lg-12">
					<div class="page-header">
  						<h1><?php the_title(); ?></h1>
					</div>
					<div>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
				</section>
			</div>
		</div>
	</section>

<?php get_footer(); ?>