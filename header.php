
<?php $options = get_option( 'theme_settings' ); ?>

<!DOCTYPE html>
<html lang="en-US" class="<?php 
		if(is_page_template("temp-signin.php")): 
			_e('signin'); 
		elseif(is_page_template("temp-cover.php")):
			_e('cover');
		elseif(is_page_template("temp-frontpagecar.php")):
			_e("car");
		endif; ?>">
	<head>
		<meta charset="UTF-8">
		<title><?php bloginfo('name'); wp_title(' - ', true, 'left');?></title>
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="">
		<link rel="apple-touch-icon-precomposed" href="">
		<link rel="shortcut icon" href="<?php if(isset($options['favicon'])):_e($options['favicon']); endif; ?>">
		
		<link href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>

		<?php 
			wp_deregister_style( 'style-css' );
			wp_register_style( 'style-css', get_stylesheet_uri() );
			wp_enqueue_style( 'style-css' );

		wp_head(); ?>
		<?php 
			//GA
				if(isset($options["ga"])): 
					_e("<script type='text/javascript'>");
						_e($options["ga"]); 
					_e("</script>");
				endif; 
	


			//Custom CSS
				if(isset($options['css'])): 
					_e("<style type='text/css'>");
						_e($options['css']); 
					_e("</style>");
				endif; 

		?>
	</head>
	<body class="<?php 
		if(is_page_template("temp-signin.php")): 
			_e('signin'); 
		elseif(is_page_template("temp-cover.php")):
			_e('cover');
		elseif(is_page_template("temp-frontpagecar.php")):
			_e("car");
		endif; ?>">
		<?php if(is_page_template("temp-cover.php")): ?>
			<div class="site-wrapper">
				<div class="site-wrapper-inner">
					<div class="cover-container">
		<?php endif; ?>
	<!-- Default -->
		<?php if(!is_page_template("temp-signin.php") and !is_page_template("temp-cover.php") and !is_page_template("temp-frontpagecar.php")): ?>
		<header id="navigation" class="navbar navbar-default" role="navigation">
			<div class=" container">
				<div class="row">
					<button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand  logo">
						<a href="<?php echo network_site_url( '/' );  ?>">
							<?php if(isset($options['logo'])): ?>
								<img src="<?php _e($options['logo']); ?>" height="100">
							<?php else: ?>
								LOGO
							<?php endif; ?>
						</a>

					</div>
					
					<nav class="navbar-collapse collapse">
						<?php

						$defaults = array(
							'theme_location'  => 'main_nav',
							'menu'            => 'main',
							'menu_class'      => 'main-menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);
							

						 wp_nav_menu($defaults); ?>
					</nav>

				</div>
			</div>
		</header>
		<?php endif; ?>
	<!-- /Default -->
	<!-- Cover template -->	
		<?php if(is_page_template("temp-cover.php")): ?>
		<header id="navigation" class="masthead clearfix" role="navigation">
			<div class="inner">
				<div class="row">
					
					<div class="navbar-brand  logo">
						<a href="<?php echo network_site_url( '/' );  ?>">
							<?php if(isset($options['logo'])): ?>
								<img src="<?php _e($options['logo']); ?>" height="100">
							<?php else: ?>
								LOGO
							<?php endif; ?>
						</a>

					</div>
					<button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<nav class="navbar-collapse collapse">
						<?php

						$defaults = array(
							'theme_location'  => 'main_nav',
							'menu'            => 'main',
							'menu_class'      => 'main-menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap' => '<ul class="nav masthead-nav">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);
							

						 wp_nav_menu($defaults); ?>
					</nav>
				</div>
			</div>
		</header>
		<?php endif; ?>
	<!-- /Cover template -->	
	<!-- Front Page with the Carsoul template -->		
		<?php if(is_page_template("temp-frontpagecar.php")): ?>
			   <div class="navbar-wrapper">
      				<div class="container">

        				<div class="navbar navbar-inverse navbar-static-top" role="navigation">
          					<div class="container">
            					<div class="navbar-header">
             					 	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                						<span class="sr-only">Toggle navigation</span>
                						<span class="icon-bar"></span>
                						<span class="icon-bar"></span>
                						<span class="icon-bar"></span>
              						</button>
              						<a class="navbar-brand" href="<?php echo network_site_url( '/' );  ?>">
              							<?php if(isset($options['logo'])): ?>
											<img src="<?php _e($options['logo']); ?>" height="100">
										<?php else: ?>
											LOGO
										<?php endif; ?>
									</a>
           						 </div>
           		 				<div class="navbar-collapse collapse">
              						<?php

						$defaults = array(
							'theme_location'  => 'main_nav',
							'menu'            => 'main',
							'menu_class'      => 'main-menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);
							

						 wp_nav_menu($defaults); ?>
            					</div>
          					</div>
        				</div>
        			</div>
    			</div>
		<?php endif; ?>
	<!-- Front Page with the Carsoul template -->	
	<!-- Normal Page template -->		
		<?php if(is_page_template("temp-frontpage.php") or is_single() or is_archive() or is_home() or is_search()  ): ?>
			 <div class="jumbotron <?php if(is_search()){_e('search');} ?>" style="<?php 

			 	$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0];
			 	
			 	//$featured = get_the_post_thumbnail($post->ID, 'full');
				if(is_archive()):
					if($options['archive'] !=""):
						echo "background:url('".$options['archive']."')";
					else:
						echo "background: #fff000";
					endif;
				elseif(is_search()):
					if($options['search'] !=""):
						echo "background:url('".$options['search']."')";
					else:
						echo "background: #ff0000";
					endif;
				elseif(is_home()):
					if($options['blog'] !=""):
						echo "background:url('".$options['blog']."')";
					else:
						echo "background: #86ADA8";
					endif;
				else:
			 		if(get_the_post_thumbnail() ): 
			 			echo "background-image:url('".$thumb_url."')"; 
			 			$color = '#333';
			 		else:
			 			echo "background: #333";
			 			$color = '#fff';
			 		endif;
			 	endif;
			 	?>">
      			
      			<div class="container">
        			<h1 style="color:<?php _e($color); ?>;"><?php 
        			if(is_archive()){
        				if(is_category()){ 
        					$cat = get_the_category();
        					_e($cat[0]->cat_name);
        				}
        				elseif(is_tag()) {
        					single_tag_title(); 
        				}
        				elseif(is_author()) {
        					_e(get_the_author());
        				}
        			}
        			elseif(is_home()){
        				wp_title('', true, 'left');
        			}
        			elseif(is_search()){
        				_e("Search");
        			}
        			else{ 
        			 	the_title(); 
        			}
        			 ?></h1>
        		</div>
    		</div>

		<?php endif; ?>
	<!-- /Normal Page template -->


		
		
