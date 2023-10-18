<?php
/**
 * montazh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package montazh
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
function montazh_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on montazh, use a find and replace
		* to change 'montazh' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'montazh', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'montazh' ),
			'menu-2' => esc_html__( 'Mont1', 'montazh' ),
			'menu-3' => esc_html__( 'Mont2', 'montazh' ),
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
			'montazh_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'montazh_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function montazh_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'montazh_content_width', 640 );
}
add_action( 'after_setup_theme', 'montazh_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function montazh_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'montazh' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'montazh' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'montazh_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function montazh_scripts() {

	// CSS
	wp_enqueue_style( 'montazh-swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' ); 	
	wp_enqueue_style( 'montazh-fancybox-css', get_template_directory_uri() . '/assets/css/fancybox.css' ); 
	wp_register_style('montazh-css', get_template_directory_uri() . '/assets/css/style.min.css', false, '1.0.0');
	wp_enqueue_style('montazh-css');
	wp_register_style('montazh-upd', get_template_directory_uri() . '/assets/css/upd.css', false, '1.0.4');
	wp_enqueue_style('montazh-upd');

	// JS
	wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', false, true);
    wp_enqueue_script('montazh-slider-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('montazh-fancybox-js', get_template_directory_uri() . '/assets/js/fancybox.umd.js', array('jquery'), false, true);  
    wp_enqueue_script('doctor-mask', get_template_directory_uri() . '/assets/js/jquery.mask.min.js', array('jquery'), false, true);
    wp_register_script('montazh-js', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), false, true, '1.0.0');
	wp_enqueue_script('montazh-js');
	wp_register_script('montazh-js-upd', get_template_directory_uri() . '/assets/js/upd.js', array('jquery'), false, true, '1.0.0');
	wp_enqueue_script('montazh-js-upd');
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'montazh_scripts' );

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


add_filter('wpcf7_autop_or_not', '__return_false');

//   Фото
add_action('init', 'photos_post_type');
function photos_post_type() {
  register_post_type( 'photos',
    array(
      'labels' => array(
        'name' => __( 'Фото' ),
        'singular_name' => __( 'Фото' )
      ),
      'public' => true,
      'show_in_menu' => true,
      'show_in_nav_menus'     => true,
      'supports' => array('title','editor','excerpt','revisions','thumbnail'),
      'has_archive' => false, //Отключаем, если используется свой шаблон родительской стр.
      'hierarchical' => true, //Если нужна родительская страница
      // 'rewrite' => array('slug' => false, 'with_front' => false) //Если не нужна родительская страница
    )
  );
  flush_rewrite_rules();
}

add_action( 'init', 'create_photos_cat', 0 );
function create_photos_cat(){
    $labels = array(
            'name' => _x( 'Категории фото', 'taxonomy general name' ),
            'singular_name' => _x( 'Категория фото', 'taxonomy singular name' ),
            'search_items' =>  __( 'Поиск по категориям' ),
            'all_items' => __( 'Все категории' ),
            'parent_item' => __( 'Родительская категория' ),
            'parent_item_colon' => __( 'Родительская категория:' ),
            'edit_item' => __( 'Редактировать категорию' ),
            'update_item' => __( 'Обновить категорию' ),
            'add_new_item' => __( 'Добавить новую категорию' ),
            'new_item_name' => __( 'Новое имя категории' ),
            'menu_name' => __( 'Категории фото' )
    );

register_taxonomy('photos_cat', array('photos'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => 'photos_cat',
        'rewrite' => array( 'slug' => 'photos_cat' )
));
}


//   Монтаж
add_action('init', 'montazh_post_type');
function montazh_post_type() {
  register_post_type( 'montazh',
    array(
      'labels' => array(
        'name' => __( 'Монтаж' ),
        'singular_name' => __( 'Монтаж' )
      ),
      'public' => true,
      'show_in_menu' => true,
      'show_in_nav_menus'     => true,
      'supports' => array('title','editor','excerpt','revisions','thumbnail'),
      'has_archive' => false, //Отключаем, если используется свой шаблон родительской стр.
      'hierarchical' => false, //Если нужна родительская страница
      'rewrite' => array('slug' => false, 'with_front' => false) //Если не нужна родительская страница
    )
  );
  flush_rewrite_rules();
}

 $labels = array(
  'name'              => _x('Категории работ', 'taxonomy general name', 'textdomain' ),
  'singular_name'     => _x('Категория', 'taxonomy singular name', 'textdomain' ),
  'search_items'      => __('Найти категории', 'textdomain' ),
  'all_items'         => __('Все категории', 'textdomain' ),
  'edit_item'         => __('Редактировать', 'textdomain' ),
  'update_item'       => __('Обновить', 'textdomain' ),
  'add_new_item'      => __('Добавить', 'textdomain' ),
  'new_item_name'     => __('Новая категория работ', 'textdomain' ),
  'menu_name'         => __('Категории работ', 'textdomain' ),
);

$args = array(
  'hierarchical'      => true,
  'labels'            => $labels,
  'show_ui'           => true,
  'show_admin_column' => true,
  'query_var'         => true,
  'publicly_queryable'    => false,
  'rewrite'           => array('slug' => ''),
);

register_taxonomy('montazh_cat', array('montazh'), $args );