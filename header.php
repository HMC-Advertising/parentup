<!DOCTYPE html>
<html lang="en-US" class="">
	<head>
		<meta charset="UTF-8">
		<title><?php
			if(!wp_title()):
				bloginfo("name" );
			else:
				wp_title();
			endif;
		?></title>
		<meta name="viewport" content="width=device-width">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="">
		<link rel="apple-touch-icon-precomposed" href="">
		<link rel="shortcut icon" href="">

		<script src="//use.typekit.net/sfk6wrn.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

	<?php wp_head(); ?>

	</head>
	<body>


	<!-- header non mobile-->
	<header id="header">
		<div class="row">
			<div class="col-lg-12">
				<div class="container">
					<nav>
							<?php

						$defaults = array(
							'theme_location'  => 'top_nav',
							'menu'            => 'top',
							'menu_class'      => 'top_nav',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap' => '<ul class="top_nav">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);


						 wp_nav_menu($defaults); ?>
					</nav>
					<?php get_template_part("assets/php/templates/alert"); ?>
				</div>
			</div>
		</div>
	</header>
	<!-- /header non mobile-->


