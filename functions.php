<?php
/**
 * The Defining Point functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Defining_Point
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_defining_point_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on The Defining Point, use a find and replace
		* to change 'the-defining-point' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'the-defining-point', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'the-defining-point' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'the_defining_point_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'post-thumbnails' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'the_defining_point_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_defining_point_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_defining_point_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_defining_point_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_defining_point_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'the-defining-point' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'the-defining-point' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'the_defining_point_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_defining_point_scripts() {
	wp_enqueue_style( 'the-defining-point-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'the-defining-point-style', 'rtl', 'replace' );

	wp_enqueue_script( 'the-defining-point-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// Theme Scripts
	wp_enqueue_script( 'theme-jquery' , get_template_directory_uri() . '/js/jquery_10.js', array('jquery') );
	wp_enqueue_script( 'theme-js' , get_template_directory_uri() . '/js/scripts.js', array('jquery') );
	// End Theme Scripts

	// Adding Bootstrap to the Theme - Start

	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array('jquery') );
	
	// Lettering Animate Scripts - Start
	wp_enqueue_script( 'fittext-js' , get_template_directory_uri() . '/js/textillate/assets/jquery.jquery.fittext.js', array('jquery') );
	wp_enqueue_script( 'lettering-js' , get_template_directory_uri() . '/js/textillate/assets/jquery.lettering.js', array('jquery') );
	wp_enqueue_script( 'textillate-js' , get_template_directory_uri() . '/js/textillate/jquery.textillate.js', array('jquery') );
	// End Lettering Animate Scripts

	// Adding Bootstrap to the Theme - Start

	// Theme CSS
	wp_enqueue_style( 'animate.css' , get_template_directory_uri() . '/js/textillate/assets/style.css', array('jquery') );
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/theme_style.css' );
	wp_enqueue_style( 'logo-css', get_template_directory_uri() . '/css/logo.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_defining_point_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

