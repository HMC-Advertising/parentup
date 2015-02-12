<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="main">
		<div class="container <?php ?>">
			<div class="row">
				<article class="col-lg-12 single">
					<?php the_content(); ?>
				</article>
			</div>
			<div row="row"
				<article id="comments" class="single comments">
					<?php comments_template(); ?> 
				</article>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>