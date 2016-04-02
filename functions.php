<?php
/**
 * hometastic functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hometastic
 */

if ( ! function_exists( 'hometastic_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hometastic_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on hometastic, use a find and replace
	 * to change 'hometastic' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'hometastic', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'hometastic' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hometastic_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'hometastic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hometastic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hometastic_content_width', 640 );
}
add_action( 'after_setup_theme', 'hometastic_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hometastic_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hometastic' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hometastic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hometastic_scripts() {
	wp_enqueue_style( 'hometastic-style', get_stylesheet_uri() );
	wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_register_style('flexslider',get_template_directory_uri().'/css/flexslider.min.css');
	wp_register_style('font-awesome',get_template_directory_uri().'/css/font-awesome/css/font-awesome.min.css');
	wp_register_style('lightbox',get_template_directory_uri().'/css/lightbox/css/lightbox.css');
	wp_register_style('owl-carousel',get_template_directory_uri().'/css/owl-carousel/owl.carousel.css');
	wp_register_style('brown',get_template_directory_uri().'/css/skins/brown.css');
	wp_register_style('dark-blue',get_template_directory_uri().'/css/skins/dark-blue.css');
	wp_register_style('light-green',get_template_directory_uri().'/css/skins/light-green.css');
	wp_register_style('orange',get_template_directory_uri().'/css/skins/orange.css');
	wp_register_style('pink',get_template_directory_uri().'/css/skins/pink.css');
	wp_register_style('purple',get_template_directory_uri().'/css/skins/purple.css');
	wp_register_style('red',get_template_directory_uri().'/css/skins/red.css');
	wp_register_style('stroll',get_template_directory_uri().'/css/stroll/stroll.min.css');
	wp_register_style('animate',get_template_directory_uri().'/css/styles/animate.min.css');
	wp_register_style('main',get_template_directory_uri().'/css/styles/main.css');


	wp_register_script('bootstrap.min',get_template_directory_uri().'/js/bootstrap.min.js',array(),true,false);
	wp_register_script('custom',get_template_directory_uri().'/js/custom.js',array(),true,false);
	wp_register_script('flexslider-min',get_template_directory_uri().'/js/jquery.flexslider-min.js',array(),true,false);
	wp_register_script('inview',get_template_directory_uri().'/js/jquery.inview.min.js',array(),true,false);
	wp_register_script('scrollTo',get_template_directory_uri().'/js/jquery.scrollTo.min.js',array(),true,false);
	wp_register_script('stellar',get_template_directory_uri().'/js/jquery.stellar.min.js',array(),true,false);
	wp_register_script('modernizr',get_template_directory_uri().'/js/modernizr.js',array(),true,false);
	wp_register_script('lightbox-js',get_template_directory_uri().'/css/lightbox/js/lightbox.min.js',array(),true,false);
	wp_register_script('owl-carousel-js',get_template_directory_uri().'/css/owl-carousel/owl.carousel.min.js',array(),true,false);
	wp_register_script('stroll-js',get_template_directory_uri().'/css/stroll/stroll.min.js',array(),true,false);


	wp_enqueue_style('bootstrap');
	wp_enqueue_style('flexslider');
	wp_enqueue_style('font-awesome');
	wp_enqueue_style('lightbox');
	wp_enqueue_style('owl-carousel');
	wp_enqueue_style('brown');
	wp_enqueue_style('dark-blue');
	wp_enqueue_style('light-green');
	wp_enqueue_style('orange');
	wp_enqueue_style('pink');
	wp_enqueue_style('purple');
	wp_enqueue_style('red');
	wp_enqueue_style('stroll');
	wp_enqueue_style('animate');
	wp_enqueue_style('main');



	wp_enqueue_script( 'hometastic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'hometastic-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap.min');
	wp_enqueue_script('custom');
	wp_enqueue_script('flexslider-min');
	wp_enqueue_script('inview');
	wp_enqueue_script('scrollTo');
	wp_enqueue_script('stellar');
	wp_enqueue_script('modernizr');
	wp_enqueue_script('lightbox-js');
	wp_enqueue_script('owl-carousel-js');
	wp_enqueue_script('stroll-js');
}
add_action( 'wp_enqueue_scripts', 'hometastic_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
