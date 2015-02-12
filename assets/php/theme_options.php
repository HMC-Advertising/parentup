
	
<section class="op">
	<?php 
		if ( ! isset( $_REQUEST['updated'] ) ):
			$_REQUEST['updated'] = false;
	 	endif;
	//get variables outside scope

	//show saved options message
	if ( false !== $_REQUEST['updated'] ) : ?>
		<div class="alert alert-success" role="alert">
  			<a href="#" class="alert-link">Saving Complete</a>
		</div>		
	<?php endif; ?>
	 
	 
	<form class="form-horizontal" method="post" action="options.php" enctype="multipart/form-data">

		<?php 
			settings_fields( 'theme_settings' ); 
			$options = get_option( 'theme_settings' ); 
		?>
	
	<h1>Theme Options</h1>
  		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">
    			Copyright
    		</label>
    		<div class="col-sm-10">
      			<input type="text" name="theme_settings[copy_right]" class="form-control" id="theme_settings[copy_right]" placeholder="Copyright" value="<?php if(isset($options['copy_right'])){esc_attr_e( $options['copy_right']);} ?>" />
    		</div>
  		</div>
  		<div class="form-group">
    		<label for="inputPassword3" class="col-sm-2 control-label">
    			Widget Area Title
    		</label>
    		<div class="col-sm-10">
      			<input type="text" name="theme_settings[wt]" class="form-control" id="theme_settings[wt]" placeholder="Title" value="<?php esc_attr_e( $options['wt'] ); ?>">
    		</div>
  		</div>
  		<div class="form-group">
    		<label for="inputPassword3" class="col-sm-2 control-label">
    			Cover Template Footer Copyright
    		</label>
    		<div class="col-sm-10">
      			<input type="text" name="theme_settings[coverfooter]" class="form-control" id="theme_settings[coverfooter]" placeholder="Title" value="<?php esc_attr_e( $options['coverfooter'] ); ?>">
    		</div>
  		</div>
  		<div class="form-group">
    		<label for="exampleInputFile" class="col-sm-2 control-label">
    			Blog Divider
    		</label>
    		<div class="col-sm-10">
    			<div class="radio">
  					<label>
    					<input type="radio" name="theme_settings[d]" id="optionsRadios1" value="1" <?php if($options["d"] == 1){ _e("checked"); } ?>>
    					...
  					</label>
				</div>
				<div class="radio">
  					<label>
    					<input type="radio" name="theme_settings[d]" id="optionsRadios2" value="2" <?php if($options["d"] == 2){ _e("checked"); } ?>>
    					<span class="glyphicon glyphicon-barcode"></span>
  					</label>
				</div>
				<div class="radio">
  					<label>
    					<input type="radio" name="theme_settings[d]" id="optionsRadios3" value="3" <?php if($options["d"] == 3){ _e("checked"); } ?>>
    					<span class="glyphicon glyphicon-resize-horizontal"></span>
  					</label>
				</div>
				<div class="radio">
  					<label>
    					<input type="radio" name="theme_settings[d]" id="optionsRadios4" value="4" <?php if($options["d"] == 4){ _e("checked"); } ?>>
    					<hr class="dd">
  					</label>
				</div>
				<div class="radio">
  					<label>
    					<input type="radio" name="theme_settings[d]" id="optionsRadios6" value="6" <?php if($options["d"] == 6){ _e("checked"); } ?>>
    					<hr class="s">
  					</label>
				</div>
				<div class="radio">
  					<label>
    					<input type="radio" name="theme_settings[d]" id="optionsRadios7" value="7" <?php if($options["d"] == 7){ _e("checked"); } ?>>
    					<hr class="ee">
  					</label>
				</div>
				<div class="radio">
  					<label>
    					<input type="radio" name="theme_settings[d]" id="optionsRadios5" value="5" <?php if($options["d"] == 5){ _e("checked"); } ?>>
    					Nothing
  					</label>
				</div>
      			
    		</div>
  		</div>

  	<!-- Logo -->	
  		<div class="form-group">
    		<label for="exampleInputFile" class="col-sm-2 control-label">
    			Logo
    		</label>
    		<div class="col-sm-10">
    			<div class="well well-sm">
					For Best possible results, aka no stretching or making the nav bar bigger. Make sure the dimensions of the image are W:200 X H:100
				</div>
				<div class="row">
					<div class="col-sm-10">
    					<input id="logo"  type="text" size="36" name="theme_settings[logo]" value="<?php if(isset($options['logo'])){esc_attr_e($options['logo']); } ?>" class="form-control" />
					</div>
					<div class="col-sm-2">
						<input id="logo_button" type="button" class="btn btn-info" value="Upload Image" />

    				</div>
    			</div>
    			<div class="row ip">
    				<label for="exampleInputFile" class="col-sm-2 control-label">
    					Image Preview
    				</label>
    				
    					<?php if(isset($options['logo']) and $options["logo"]!="" ): ?>
    					<div class="col-sm-8">
    						<img src="<?php echo esc_attr_e($options['logo'] ); ?>" class="img-thumbnail" id="logo_image">
    					</div>
    					<div class="col-sm-2">
    						<button type="button" id="logo_remove" class="btn btn-danger remove">
    							Remove 
  							</button>
    					<?php else: ?>
    					<div class="col-sm-10">
    						<div class="label label-danger">
    							In order for the image to be prieved please save your options.
    						</div>
    					<?php endif; ?>
    				</div>
    			</div>
    		</div>
  		</div>
  	<!-- /Logo -->
  	<!-- Favicon -->
  		<div class="form-group">
    		<label for="exampleInputFile" class="col-sm-2 control-label">
    			Favicon
    		</label>
    		<div class="col-sm-10">
    			<div class="well well-sm">
					Favicons are the finishing touches for a site, and can be seen in the title bar/tab on all pages.
				</div>
				<div class="row">
    				<div class="col-sm-10">
    					<input id="favicon"  type="text" size="36" name="theme_settings[favicon]" value="<?php if(isset($options['favicon'])){esc_attr_e( $options['favicon']);} ?>" class="form-control" />
    				</div>
					<div class="col-sm-2">
						<input id="favicon_button" class="btn btn-info" type="button" value="Upload Image" />
					</div>
				</div>
				<div class="row ip">
					<label for="exampleInputFile" class="col-sm-2 control-label">
    					Image Preview
    				</label>
					<?php if(isset($options['favicon']) and $options["favicon"]!="" ): ?>
    					<div class="col-sm-8">
    						<img id="favicon_image" src="<?php echo esc_attr_e($options['favicon'] ); ?>" class="img-thumbnail">
    					</div>
    					<div class="col-sm-2">
    						<button type="button" id="favicon_remove" class="btn btn-danger remove">
    							Remove 
  							</button>
    					<?php else: ?>
    					<div class="col-sm-10">
    						<div class="label label-danger">
    							In order for the image to be prieved please save your options.
    						</div>
    					<?php endif; ?>
    				
    				</div>
    			</div>
    		</div>
  		</div>
  	<!-- /Favicon -->
  		
  		<h1 class="lead text-center">Header Options</h1>
  	<!-- Default Archive Image -->
  		<div class="form-group">
    		<label for="exampleInputFile" class="col-sm-2 control-label">
    			Default Archive Image
    		</label>
    		<div class="col-sm-10">
    			<div class="well well-sm">
					Header for Category, Tags, and Author Pages
				</div>
				<div class="row">
    				<div class="col-sm-10">
    					<input id="archive"  type="text" size="36" name="theme_settings[archive]" value="<?php if(isset($options['archive'])){esc_attr_e( $options['archive']);} ?>" class="form-control" />
    				</div>
					<div class="col-sm-2">
						<input id="archive_button" name="archive_button" class="btn btn-info" type="button" value="Upload Image" />
					</div>
				</div>
				<div class="row ip">
					<label for="exampleInputFile" class="col-sm-2 control-label">
    					Image Preview
    				</label>
					<?php if(isset($options['archive']) and $options["archive"]!="" ): ?>
    					<div class="col-sm-8">
    						<img id="archive_image" src="<?php echo esc_attr_e($options['archive'] ); ?>" class="img-thumbnail">
    					</div>
    					<div class="col-sm-2">
    						<button type="button" id="archive_remove" class="btn btn-danger remove">
    							Remove 
  							</button>
    					<?php else: ?>
    					<div class="col-sm-10">
    						<div class="label label-danger">
    							In order for the image to be previewed please save your options.
    						</div>
    					<?php endif; ?>
    				
    				</div>
    			</div>
    		</div>
  		</div>
  	<!-- /Default Archive Image -->	
  		
  	<!-- Search page -->
  		<div class="form-group">
    		<label for="exampleInputFile" class="col-sm-2 control-label">
    			Search Page
    		</label>
    		<div class="col-sm-10">
    			<div class="well well-sm">
					Header for the Search Page
				</div>
				<div class="row">
    				<div class="col-sm-10">
    					<input id="search"  type="text" size="36" name="theme_settings[search]" value="<?php if(isset($options['search'])){esc_attr_e( $options['search']);} ?>" class="form-control" />
    				</div>
					<div class="col-sm-2">
						<input id="search_button" name="search_button" class="btn btn-info" type="button" value="Upload Image" />
					</div>
				</div>
				<div class="row ip">
					<label for="exampleInputFile" class="col-sm-2 control-label">
    					Image Preview
    				</label>
					<?php if(isset($options['search']) and $options['search']!="" ): ?>
    					<div class="col-sm-8">
    						<img id="search_image" src="<?php echo esc_attr_e($options['search'] ); ?>" class="img-thumbnail">
    					</div>
    					<div class="col-sm-2">
    						<button type="button" id="search_remove" class="btn btn-danger remove">
    							Remove 
  							</button>
    				<?php else: ?>
    					<div class="col-sm-10">
    						<div class="label label-danger">
    							In order for the image to be prieved please save your options.
    						</div>
    				<?php endif; ?>
    				</div>
    			</div>
    		</div>
  		</div>
  	<!-- /Search Page -->
  	<!-- Blog Roll -->
  		<div class="form-group">
    		<label for="exampleInputFile" class="col-sm-2 control-label">
    			Blog Roll
    		</label>
    		<div class="col-sm-10">
    			<div class="well well-sm">
					Header for the Blog Roll
				</div>
				<div class="row">
    				<div class="col-sm-10">
    					<input id="blog"  type="text" size="36" name="theme_settings[blog]" value="<?php if(isset($options['blog'])){esc_attr_e( $options['blog']);} ?>" class="form-control" />
    				</div>
					<div class="col-sm-2">
						<input id="blog_button" name="blog_button" class="btn btn-info" type="button" value="Upload Image" />
					</div>
				</div>
				<div class="row ip">
					<label for="exampleInputFile" class="col-sm-2 control-label">
    					Image Preview
    				</label>
					<?php if(isset($options['blog']) and $options["blog"]!="" ): ?>
    					<div class="col-sm-8">
    						<img id="blog_image" src="<?php echo esc_attr_e($options['blog'] ); ?>" class="img-thumbnail">
    					</div>
    					<div class="col-sm-2">
    						<button type="button" id="blog_remove" class="btn btn-danger remove">
    							Remove 
  							</button>
    					<?php else: ?>
    					<div class="col-sm-10">
    						<div class="label label-danger">
    							In order for the image to be prieved please save your options.
    						</div>
    					<?php endif; ?>
    				
    				</div>
    			</div>
    		</div>
  		</div>
  	<!-- /Blog Roll -->	
  	
  	<!-- Etc -->	
  		<h1 class="text-center">...</h1>
  		<br><br>
  		<div class="form-group">
    		<label for="exampleInputFile" class="col-sm-2 control-label">
    			Google Analytics
    		</label>
    		<div class="col-sm-10">
      			<textarea placeholder="All you need is the code between the script tags" class="form-control" rows="3" id="theme_settings[ga]"  name="theme_settings[ga]"><?php esc_attr_e( $options['ga'] ); ?></textarea>
    		</div>
  		</div>

  		<div class="form-group">
    		<label for="exampleInputFile" class="col-sm-2 control-label">
    			Custom Css
    		</label>
    		<div class="col-sm-10">
      			<textarea placeholder="Custom Css" id="theme_settings[css]" class="form-control" rows="9"  name="theme_settings[css]"><?php esc_attr_e( $options['css'] ); ?></textarea>
    		</div>
  		</div>
  		
  		<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
    			<input name="submit" id="submit" value="Save Changes" type="submit" class="btn btn-default">
    		</div>
  		</div>
  	<!-- /Etc -->

	</form>
</section>