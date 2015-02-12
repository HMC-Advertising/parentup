<?php $options = get_option( 'theme_settings' ); ?>
<?php get_header(); ?>

	<section id="main">
		<section class="container">
			<div class="row">
				<section class="col-lg-10">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="col-lg-12 post">
						<div class="page-header">
  							<h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
						</div>
						<div>
							<?php the_content(); ?>
						<div>
						<div class="clearfix"></div>
						<div class="meta-info well">
							<?php the_author_posts_link(); ?> | <?php the_date(); ?> | <?php the_category(', '); ?> | <?php the_tags( ); ?>
						</div>
					</article>
					<section class="divider">
						<?php
						if(isset($options["d"])){

							if($options["d"] == 1){
								_e("...");
							}
							elseif($options["d"] == 2){
								_e('<span class="glyphicon glyphicon-barcode"></span>');
							}
							elseif($options["d"] == 3){
								_e('<span class="glyphicon glyphicon-resize-horizontal"></span>');
							}
							elseif($options["d"] == 4){
								_e("<hr class='dd'>");
							}
							elseif($options["d"] == 6){
								_e("<hr class='s'>");
							}
							elseif($options["d"] == 7){
								_e("<hr class='ee'>");
							}
							else{
								_e("&nbsp;");
							}
						}
						else{
							_e("&nbsp;");
						}?>

					</section>
				<?php endwhile; ?>
					<?php theme_page(); ?>
				<?php endif; ?>
				</section>
				<?php get_sidebar(); ?>
			</div>
		</section>
	</section>



<?php get_footer(); ?>