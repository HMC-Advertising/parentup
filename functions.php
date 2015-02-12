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

function bootstrapCarosoul(){
	$labels = array(
		'name'               => _x( 'Carosoul Slides', 'post type general name' ),
		'singular_name'      => _x( 'Carosoul', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'car' ),
		'add_new_item'       => __( 'Add New Slide' ),
		'edit_item'          => __( 'Edit Slide' ),
		'new_item'           => __( 'New Slides' ),
		'all_items'          => __( 'All Slides' ),
		'view_item'          => __( 'View Carosoul Slide' ),
		'search_items'       => __( 'Search Carosoul' ),
		'not_found'          => __( 'No Carosoul Slides Found' ),
		'not_found_in_trash' => __( 'No Carosoul Slides Found In The Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Carosoul Slides'
		);
	$args = array(
		'menu_icon'     => 'dashicons-images-alt2',
		'labels'        => $labels,
		'description'   => 'This is the for the Template Front Page Carosoul',
		'public'        => true,
		'menu_position' => 3,
		//'show_in_menu'  => 'edit.php',
		'has_archive'   => true,
		"hierarchical" => false,
		"supports" => array('title', 'editor', 'page-attributes',"thumbnail")
		
	);
	register_post_type( 'bootstrapcarosoul', $args );	
}


add_action("manage_bootstrapcarosoul_posts_custom_column",  "carosoul_custom_columns");
add_filter("manage_edit-bootstrapcarosoul_columns", "carosoul_edit_columns");

function carosoul_edit_columns($columns){
  $columns = array(
  	'cb' => '<input type="checkbox" />',
  	"title" => "Title",
  	"description" => "Description",
    "feat" => "Background Image",
    "order" => "Order",
    "date" => "Date Created"
  );
 
  return $columns;
}


function carosoul_custom_columns($columns){
	global $post;
	
	$bgURL = esc_html( get_post_meta($post->ID,  'bgURL', true ) );
	$order = $post->menu_order;
	
	switch ($columns) {

		case "title":
			the_title();
		break;
		
		case "description":
			the_excerpt();
      	break;
    	case "feat":
      		the_post_thumbnail("thumb") ;
      	break;
    	case "order":
      		_e( $order );
      	break;
      	case "date":
      		 the_date();
      	break;
    }
}

	
// Register widgetized locations
	if(function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Footer Widget 1',
		'id' => 'w1',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Footer Widget 2',
		'id' => 'w2',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Footer Widget 3',
		'id' => 'w3',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Footer Widget 4',
		'id' => 'w4',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'Blog Sidebar',
		'id' => 'SB',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

}

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
