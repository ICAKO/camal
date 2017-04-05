<?php
 if ( ! function_exists( 'wexzystart_setup' ) ) :
	
	function ara__setup() {
		
		
		/**
		 * Show or Hide Admin top bar
		 * 
		 * @param true/false  
		 */
		 
		//show_admin_bar(true);
		
		/*
		 * Make theme available for translation.
		 * If you're building a theme based on Twenty Seventeen, use a find and replace
		 * to change 'twentyseventeen' to the name of your theme in all the template files.
		 */
		 
		load_theme_textdomain( 'camal' );
		
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
	
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-background' );
		
		
		// Custom Crop Sizes
		add_image_size( 'ara_thumb', 70, 70, 1 );
		add_image_size( 'ara_130x70', 130, 70, 1 );
		add_image_size( 'ara_widget_size', 315, 100, 1 );
		add_image_size( 'ara_medium', 480, 300, 1 );
		add_image_size( 'ara_big', 1500, 600, 1 );
		add_image_size( 'ara_big_1500x900', 1500, 900, 1 );
		add_image_size( 'ara_large', 2000, 1000, 1 );
		
		
		// This theme uses wp_nav_menu() in one locations.
		register_nav_menus( array(
			'top'    => __( 'Top Menu', 'camal' ),
		) );
		
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	
		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'video',
			'quote',
			'gallery',
			'audio',
		) );
		
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		
		if ( ! isset( $content_width ) ) {
			$content_width = 1500;
		}
		
		add_editor_style();
		
	}
	
	add_action( 'after_setup_theme', 'ara__setup' );
	
 endif;

// Categories Pagination
function ic_pagination($pages) {
	global $paged;
	if( is_array( $pages ) ) { 	?>
		<div id="pagination" class="pagination">
			<ul class="pagination">
				<?php 
					foreach ( $pages as $page ) {
						if($page == $paged) {
							echo '<li class="current item">'.$page.'</li>';
						} else {
							echo '<li>'.$page.'</li>';
				 		}
					} 
			 	?>
			</ul>
		</div>

	<?php
	}
}
add_action('ic_pagination','ic_pagination');

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string Filtered title.
 */
 
 function wpdocs_filter_wp_title( $title, $sep ) {
    global $paged, $page;
 
    if ( is_feed() )
        return $title;
 
    // Add the site name.
    $title .= get_bloginfo( 'name' );
 
    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";
 
    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'elegantno' ), max( $paged, $page ) );
 
    return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );


function icakocart_cart_thead($arr) {
	$arr['price'] = array(
		'class' => 'center',
		'width' => '100px',
		'title' => 'Цена'
	);
	return $arr;
}

add_filter('icakocart_cart_thead','icakocart_cart_thead');

 /**
  * Enqueue scripts and styles.
  * 
  * @since 1.0
  */
  
  
 function arastudios_enqueue_scripts() {
	global $rdx;
	
	// CSS
	wp_enqueue_style( 'wxy-gfont', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800&amp;subset=cyrillic' );
	wp_enqueue_style( 'wxy-gfont-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
	
	wp_enqueue_style( 'bootstrapmin', get_template_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrapmin-select', get_template_directory_uri() . '/assets/plugins/bootstrap-select/css/bootstrap-select.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/plugins/fontawesome/css/font-awesome.min.css');
	wp_enqueue_style( 'owl-carouselcss', get_template_directory_uri() . '/assets/plugins/owl-carousel2/assets/owl.carousel.min.css');
	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/assets/plugins/prettyphoto/css/prettyPhoto.css');
	
	wp_enqueue_style( 'owl-theme-def', get_template_directory_uri() . '/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/plugins/animate/animate.min.css');
	
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/theme.css');
	wp_enqueue_style( 'theme-red', get_template_directory_uri() . '/assets/css/theme-red-1.css');
	
	
	wp_enqueue_style( 'wxy-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'colorthief', get_template_directory_uri() . '/assets/plugins/modernizr.custom.js', array('jquery'),'',false);
	
	// JS
	
	wp_enqueue_script( 'jq', get_template_directory_uri() . '/assets/plugins/jquery/jquery-1.11.1.min.js', array('jquery'),'',true);
	
	wp_enqueue_script( 'bootstrapmin', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery'),'',true);
	wp_enqueue_script( 'bootstrapmin-select', get_template_directory_uri() . '/assets/plugins/bootstrap-select/js/bootstrap-select.min.js', array('jquery'),'',true);
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/assets/plugins/superfish/js/superfish.min.js', array('jquery'),'',true);
	wp_enqueue_script( 'prettyPhoto', get_template_directory_uri() . '/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js', array('jquery'),'',true);
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/plugins/owl-carousel2/owl.carousel.min.js', array('jquery'),'',true);
	
	wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/assets/plugins/jquery.sticky.min.js', array('jquery'),'',true);
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/assets/plugins/jquery.easing.min.js', array('jquery'),'',true);
	
	wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/assets/plugins/jquery.smoothscroll.min.js', array('jquery'),'',true);
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/plugins/smooth-scrollbar.min.js', array('jquery'),'',true);
	
	wp_enqueue_script( 'theme', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'),'',true);
	wp_enqueue_script( 'jquery-cookie', get_template_directory_uri() . '/assets/plugins/jquery.cookie.js', array('jquery'),'',true);
	
 }
 add_action( 'wp_enqueue_scripts', 'arastudios_enqueue_scripts' );
