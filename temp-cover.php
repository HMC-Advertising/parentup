<?php
/* template name:Cover Page */
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 	<div class="inner cover">
    	<h1 class="cover-heading"><?php the_title(); ?></h1>
    	<p class="lead"><?php the_content(); ?></p>
	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?> 

