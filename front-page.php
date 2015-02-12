
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="main" class="container">
		<div class="row">
			<section class="col-lg-12">
				<p>
					<?php the_content(); ?>
				</p>
			</section>
		</div>
	</section>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>