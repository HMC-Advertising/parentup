<h2 class="lead">Comments</h2>

<?php if(have_comments()):?>

	<div id="view_comments" class="">
		<div class="list-group">
            <?php
	            wp_list_comments( array( 'callback' => 'BB_comment' ) );
	        ?>
	    </div>
	</div>

<?php else:?>

	<div id="view_comments" class="">
		<strong>No comments! Add one!</strong>
	</div>


<?php endif; ?>

<?php if(comments_open()): ?>
	<div id="comment_form" class="form-inline">
		<?php 

		$args = array(
  			'id_form'           => 'commentform',
  			'id_submit'         => 'submit',
  			'title_reply'       => __( 'Leave a Reply' ),
  			'title_reply_to'    => __( 'Leave a Reply to %s' ),
  			'cancel_reply_link' => __( 'Cancel Reply' ),
  			'label_submit'      => __( 'Post Comment' ),

  			'comment_field' =>  ' 
  				<div class="form-group comments">	
    		  		<div class="input-group">
  						<textarea id="comment" class="form-control" rows="7" aria-required="true" placeholder="comment" name="comment">
  						</textarea>
  					</div>
  				</div>',

  			'must_log_in' => '<p class="must-log-in">' .
    			sprintf(
      				__( 'You must be <a href="%s">logged in</a> to post a comment.' ),
      				wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    			) . '</p>',

  			'logged_in_as' => '<p class="logged-in-as">' .
    			sprintf(
    				__( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
      				admin_url( 'profile.php' ),
      				$user_identity,
      				wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    			) . '</p>',

  			

  			'comment_notes_after' => '<p class="form-allowed-tags">' .
    			sprintf(
     			 	__( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: <br> %s' ),
      				' <code>' . allowed_tags() . '</code>'
    			) . '</p>',

  			'fields' => apply_filters( 'comment_form_default_fields', array(

    			'author' =>
      				'<div class="form-group">
      					<div class="input-group">
    						<label class="sr-only" for="exampleInputEmail2">Name</label>
    						<input type="text" class="form-control" id="InputName" name="author" placeholder="Name">
 	 					</div>
 	 				</div>',

    			'email' =>
      				'<div class="form-group">
      					<div class="input-group">
							<div class="input-group-addon">@</div>
							<label class="sr-only" for="exampleInputEmail2">Email address</label>
							<input class="form-control" name="email" type="email" placeholder="Enter email">
						</div>
					</div>',

    			'url' =>
    		  		'<div class="form-group">	
    		  			<div class="input-group">
    						<label class="sr-only" for="exampleInputEmail2">URL</label>
    						<input type="text" class="form-control" id="InputUrl" name="url" placeholder="Website">
 	 					</div>
 	 				</div>'
    			)
  			),
		);

		comment_form($args); 
		?>
	</div>
<?php endif; ?>


	
