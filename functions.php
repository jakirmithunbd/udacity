<?php

function udacity_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'udacity', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary Menu', 'udacity' ),
		'footer_menu' => esc_html__( 'Footer Menu', 'udacity' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sz16_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Woocommerce Support
	add_theme_support( 'woocommerce' );

	add_theme_support( 'wc-product-gallery-slider' );

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
}
add_action( 'after_setup_theme', 'udacity_setup' );


function udacity_scripts() {

	/**
	 * Enqueue styles.
	 */
	wp_enqueue_style('sidr', get_template_directory_uri() . '/css/sidr.bare.min.css', array(), false, 'all');
	wp_enqueue_style('icon-font', get_template_directory_uri() . '/css/font-awesome.min.css', array(), false, 'all');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main-style.css', array(), false, 'all');
	wp_enqueue_style( 'udacity-style', get_stylesheet_uri() );


	/**
	 * Enqueue scripts.
	 */
	wp_enqueue_script('jquery');

	wp_enqueue_script('jquery_min', get_template_directory_uri() . '/js/jquery-1.12.2.min.js', array(), false, false);
	wp_enqueue_script('application', get_template_directory_uri() . '/js/application.js', array(), false, true);
	wp_enqueue_script('sidr', get_template_directory_uri() . '/js/jquery.sidr.min.js', array(), false, true);
	wp_enqueue_script('corporate', get_template_directory_uri() . '/js/corporate-training.js', array(), false, true);
	wp_enqueue_script('business', get_template_directory_uri() . '/js/business.js', array(), false, true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), false, true);

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'udacity_scripts' );



/*
	===============================
	Register Sidebar
	===============================
*/
add_action( 'widgets_init', 'clening_sidebar' );
function clening_sidebar() {
    register_sidebar( array(
			'name'          => __('Page Sidebar 1', 'text-domain'),
			'id'            => 'page-sidebar_1',
			'description'   => __('This sidebar will be displayed in pages', 'text-domain'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="widget_title">',
			'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
			'name'          => __('Page Sidebar 2', 'text-domain'),
			'id'            => 'page-sidebar_2',
			'description'   => __('This sidebar will be displayed in pages', 'text-domain'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="widget_title">',
			'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
			'name'          => __('Page Sidebar 3', 'text-domain'),
			'id'            => 'page-sidebar_3',
			'description'   => __('This sidebar will be displayed in pages', 'text-domain'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="widget_title">',
			'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
			'name'          => __('Page Sidebar 4', 'text-domain'),
			'id'            => 'page-sidebar_4',
			'description'   => __('This sidebar will be displayed in pages', 'text-domain'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="widget_title">',
			'after_title'   => '</h6>',
    ) );
}




require get_template_directory() . '/inc/options.php';
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';


/* customize login screen */
function charity_images_custom_login_page() {
    echo '<style type="text/css">
        .login h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo.png") !important; height: 100px !important; width: 100% !important; margin: 0 auto !important; background-size: contain !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/banner.jpeg") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before {background-color: #42b1e67a; position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
		#login {
		    padding: 7% 0 0;
		}
		
		.login #nav a, .login #backtoblog a, .login label, .login .message{
			color:#000 !important;
		}
    </style>';
}
add_action('login_head', 'charity_images_custom_login_page', 99);
function cabinet_login_logo_url_title() {
 	return 'Business Simple';
}
add_filter( 'login_headertitle', 'cabinet_login_logo_url_title' );
function cabinet_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'cabinet_login_logo_url' );


/*
============================
Code For SVG File
============================
*/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');












