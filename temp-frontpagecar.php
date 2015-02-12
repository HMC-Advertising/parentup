<?php /*

	Template Name: Front Page Carousel

*/

?>
    <!-- Carousel ================================================== -->
<?php get_header(); ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<?php $args = array(
		'post_type' => "bootstrapcarosoul",
		'orderby' =>"menu_order",
		"order" => "ASC"
		);
					
	$car = new WP_Query($args);
	$i = 0;
	$e=0; 
	if($car->have_posts()): ?>
		
	<div class="carousel-inner">
		<?php
		while($car->have_posts()):
			$car->the_post();
			//$img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID(),'single-post-thumbnail'));
			$img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
	
	?>

		<div class="item <?php if($i == 0){_e("active");} ?>">
			<?php if(isset($img) and $img != ""): ?>
          		<img src="<?php _e($img); ?>" alt="<?php _e($i); ?> slide">
          	<?php endif; ?>
          <div class="container">
            <div class="carousel-caption">
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
              </div>
          </div>
        </div>
			
	<?php
			$i++;
		endwhile;
	

?>
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
   
</div>
<?php endif; wp_reset_postdata(); ?>
	<!-- /Carousel -->			

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="main" class="container">
		<div class="row">
			<h1 class="lead">
				<?php the_title(); ?>
			</h1>
			<section class="col-lg-12">
				<p>
					<?php the_content(); ?>
				</p>
			</section>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>