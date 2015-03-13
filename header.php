<!DOCTYPE html>
<html lang="en-US" class="">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title><?php
			if(!wp_title()):
					echo " | "; bloginfo("name" );

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
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60566768-1', 'auto');
  ga('send', 'pageview');

</script>

	<?php wp_head(); ?>
	<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "5442e064-c3d3-40b2-80b9-889739c8e226", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

	</head>
	<body <?php if(is_page("Monitor Your Teen")){
        echo "class='monitor'";
        }
        if(is_page("SET THE FOUNDATION")){
        echo "class='action-plan'";
        } ?>>
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




