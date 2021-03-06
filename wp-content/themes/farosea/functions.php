<?php
/**
 * farosea functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package farosea
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'farosea_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function farosea_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on farosea, use a find and replace
		 * to change 'farosea' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'farosea', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'farosea' ),
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
				'farosea_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'farosea_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function farosea_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'farosea_content_width', 640 );
}
add_action( 'after_setup_theme', 'farosea_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function farosea_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'farosea' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'farosea' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'farosea_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
//function farosea_scripts() {
//	wp_enqueue_style( 'farosea-style', get_stylesheet_uri(), array(), _S_VERSION );
//	wp_style_add_data( 'farosea-style', 'rtl', 'replace' );
//
//	wp_enqueue_script( 'farosea-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
//
//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
//}
//add_action( 'wp_enqueue_scripts', 'farosea_scripts' );

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

// Gallery library
add_theme_support('gallery');
function gallery()
{
    $label = array(
        'name' => 'Thư viện hình ảnh',
        'gallery' => 'gallery'
    );

    $args = array(
        'labels' => $label,
        'description' => 'Custom Gallery Library',
        'supports' => array(
            'title',
            'thumbnail'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 12,
        'menu_icon' => 'dashicons-format-gallery',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
    register_post_type('gallery', $args);
}
add_action('init', 'gallery');

add_theme_support('videos');
function videos()
{
    $label = array(
        'name' => 'Thư viện Video',
        'videos' => 'videos'
    );

    $args = array(
        'labels' => $label,
        'description' => 'Custom Gallery Library',
        'supports' => array(
            'title',
            'thumbnail'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 12,
        'menu_icon' => 'dashicons-format-video',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
    register_post_type('videos', $args);
}
add_action('init', 'videos');

add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->Username   = SMTP_USERNAME;
    $phpmailer->Password   = SMTP_PASSWORD;
}

add_action('wp_ajax_send_form_information', 'send_form_information');
add_action('wp_ajax_nopriv_send_form_information', 'send_form_information');
function send_form_information() {
    $subject = 'Thông tin đăng ký tham quan dự án từ ' . $_POST['last-name'] . ' ' .$_POST['first-name'];
    $body = 'Họ tên: ' . $_POST['first-name'] .PHP_EOL. 'Email: ' .
        $_POST['email'] .PHP_EOL. 'Số điện thoại: ' . $_POST['phone-number']
    ;

    wp_mail('taicd@fhouse.vn', $subject, $body);
}
