<?php $options = get_option( 'theme_settings' ); ?>	
<?php if(!is_page_template("temp-signin.php") and !is_page_template("temp-cover.php")): ?>
	<footer class="widget footer <?php 
		if(is_page_template("temp-signin.php")): 
			_e('signin'); 
		elseif(is_page_template("temp-cover.php")):
			_e('cover');
		endif; ?>">
		<section class="container">
 			<div class="row">
				<section class="col-lg-12">
					<p class="lead title" style="text-align:center">
						<?php 
							if(isset($options['wt'])): 
								_e($options['wt']); 
							endif;
						?>
					</p>
					<article class="col-lg-3 col-md-3  col-sm-3">
				<?php
					if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 1')):
					endif;
				?>
					</article>
					<article class="col-lg-3 col-md-3 col-sm-3">
				<?php
					if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 2')):
					endif;
				?>
					</article>
					<article class="col-lg-3 col-md-3 col-sm-3">
				<?php
					if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 3')):
					endif;
				?>
					</article>
					<article class="col-lg-3 col-md-3 col-sm-3">
				<?php
					if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 4')):
					endif;
				?>
					</article>
				</section>
			</div>
		</section>
	</footer>
	<footer class="footer copyright">
		<section class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2 copy">
					<?php 
						if(isset($options['copy_right'])): 
							echo $options['copy_right']; 
						endif;
					?>
				</div>
				<nav class="col-lg-10 col-md-9 col-sm-9 nav">
					<?php wp_nav_menu( array( 'theme_location' => 'footer_nav', 'menu_class' => 'footer-menu', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
							 ) ); ?>
				</nav>
			</div>
		</div>
	</footer>
<?php endif; ?>	
<?php if(is_page_template("temp-cover.php")):?>
	<div class="mastfoot">
    	<div class="inner">
    		<?php if(isset($option["coverfooter"]) and $option["coverfooter"] !=""): 
    			_e($option["coverfooter"]);
    		 else: ?>
        		Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.
        	<?php endif; ?>
        </div>
	</div>

<?php endif; ?>
	<?php if(is_page_template("temp-cover.php")): ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php wp_footer(); ?>

</body>
</html>