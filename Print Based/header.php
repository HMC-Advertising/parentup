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

	<?php wp_head(); ?>

	</head>
	<body>




