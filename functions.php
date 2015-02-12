<?php
	require("assets/php/shortcode.php");

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	//register navigation
	function register_my_menus(){
		register_nav_menu('main_nav', 'Main Navigation');
		register_nav_menu('footer_nav', 'Footer Navigation');
	}

	add_action( 'init', 'register_my_menus' );

	//featured image

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

		// additional image sizes
		// delete the next line if you do not need additional image sizes
		add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)



	//custom post for the carosoul
	add_action( 'init', 'bootstrapCarosoul' );

//creating new post type for the template



function add_image_class($class){
    $class .= 'img-responsive img-thumbnail';
    return $class;
}
add_filter('get_image_tag_class','add_image_class');




//theme options
function theme_settings_init(){
	    register_setting( 'theme_settings', 'theme_settings' );
	}

//add settings page to menu
function add_settings_page() {
		add_submenu_page('themes.php','Theme Options', 'Theme Options', 'manage_options', 'theme-options', 'theme_options');
	}

//add actions
add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );


function theme_options(){
	global $post;

	wp_register_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'style-css' );

	wp_enqueue_script('custom_admin_script', get_bloginfo('template_url').'/assets/js/admin_js.js', array('jquery'), '3.81', true);

	require("assets/php/theme_options.php");




}

//comments

function BB_comment($comment, $args, $depth){
	$GLOBALS['comment'] = $comment; ?>
	<div class="list-group-item">
	  	<div id="comment-<?php comment_ID(); ?>">
	      	<div class="comment-author vcard">
	      		<?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
	         	<?php printf(__('<h3>%s</h3> <span class="says">says:</span>'), get_comment_author_link()) ?>
	      	</div>
	      	<?php if ($comment->comment_approved == '0') : ?>
	         	<em><?php _e('Your comment is awaiting moderation.') ?></em>
	         	<br />
	      	<?php endif; ?>

	      	<div class="comment-meta commentmetadata">
	      		<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
	      			<?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?>
	      		</a>
	      		<?php edit_comment_link(__('(Edit)'),'  ','') ?>
	      	</div>

	      	<?php comment_text() ?>

	      	<div class="reply">
	        	 <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	      	</div>
	    </div>
	</div>

<?php
}

function theme_page($pages = '', $range = 4){
	$showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }

    if(1 != $pages): ?>
     	<section id="pagenation">
			<ul class="pagination pagination-sm"><?php
         			if($paged > 2 && $paged > $range+1 && $showitems < $pages){
         				echo "<li><a href='".get_pagenum_link(1)."'>&laquo; First</a></li>";
         			}
         			if($paged > 1 && $showitems < $pages) {
         				echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a></li>";
         			}

         			for ($i=1; $i <= $pages; $i++){
            			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                 			echo ($paged == $i)? "<li class='active'><a href='#'>".$i."<span class='sr-only'>(current)</span></a></li>":"<li><a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a></li>";
            			}
        			}

        			if ($paged < $pages && $showitems < $pages){
          				echo "<li><a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a></li>";
        			}
        			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages){ echo "<li><a href='".get_pagenum_link($pages)."'>Last &raquo;</a></li>";
    				}?>
        	</ul>
		</section>

    <?php endif;
}
add_action("admin_init", "postTypeScripts");

function postTypeScripts($typenow){

    if( $typenow != 'post' ) {

 		// Registers and enqueues the required javascript.
        wp_register_script( 'meta-box-image', plugin_dir_url( __FILE__ ) . 'meta-box-image.js', array( 'jquery' ) );
        wp_localize_script( 'meta-box-image', 'meta_image',
            array(
                'title' => __( 'Choose or Upload an Image', 'prfx-textdomain' ),
                'button' => __( 'Use this image', 'prfx-textdomain' ),
            )
        );
     	wp_enqueue_script( 'meta-box-image' );
     	wp_enqueue_style('thickbox');
		wp_enqueue_script('thickbox');
 	}



}







?>
