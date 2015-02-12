<?php get_header(); ?>
	<section id="main" class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>OOPS!</h1>
				<div id="search">
					<p class="lead">Can't find what you're looking for?</p>
					<form class="search-form" action="<?php bloginfo('url'); ?>" method="get" role="search">
						<div class="input-group">
  							<input type="text" class="form-control" name="s" placeholder="Search …">
  							<div class="input-group-btn">
  								<button class="btn btn-default" type="submit">
  									<span class="glyphicon glyphicon-search"></span>
  								</button>
  							</div>
  						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>