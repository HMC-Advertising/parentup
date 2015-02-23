<!DOCTYPE html>
<html lang="en-US" class="">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
	<div class="hidden-md hidden-lg">
		<?php get_template_part("assets/php/templates/sidenav", "mobile"); ?>
	</div>
	<div class="hidden-md hidden-lg">
		<div class="sb-slidebar sb-right">
		Search
		</div>
	</div>
	 <div id="sb-site" class="sb-slide">

	<!-- header non mobile-->
	<div class="hidden-sm hidden-xs">
	<?php
		get_template_part("assets/php/templates/header", "nonmobile")
	?>
	</div>
	<!-- /header non mobile-->
	<!-- mobile -->
	<div class="hidden-md hidden-lg">
		<?php get_template_part("assets/php/templates/header", "mobile"); ?>
	</div>

	<!-- /mobile -->




