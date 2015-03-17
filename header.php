<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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

	<!--[if lt IE 9]>
	<link href="http://parentupvt.org/wp/wp-content/themes/parentup/assets/sass/css/ie.css" rel="stylesheet" type="text/css"><![endif]-->
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
		<div class="sb-slidebar sb-right" style="padding-top:30px;">
			<?php get_search_form( ); ?>
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




