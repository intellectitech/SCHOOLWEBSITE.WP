<?php
/**
 * flex-education functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package flex-education
 */

if ( ! function_exists( 'flex_education_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function flex_education_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'responsive-embeds' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary-menu' => esc_html__( 'Primary Menu', 'flex-education' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'flex-education' ),
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
				'flex_education_custom_background_args',
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
add_action( 'after_setup_theme', 'flex_education_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

function flex_education_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'flex_education_content_width', 640 );
	load_theme_textdomain( 'flex-multi-business', get_template_directory() . '/languages' );

    define( 'FLEX_EDUCATION_DOCUMENTATION', __( 'https://demo.flextheme.net/doc/flex-education-doc/', 'flex-education' ));
    define('FLEX_EDUCATION_BUY_NOW',__('https://www.flextheme.net/products/educational-institute-wordpress-theme','flex-education'));
    define('FLEX_EDUCATION_LIVE_DEMO',__('https://demo.flextheme.net/flex-education-pro/','flex-education'));

	/* getstart */
    require get_theme_file_path('/inc/dashboard/getting-started.php');

	if ( ! defined( 'FLEX_MULTI_BUSINESS_DOCUMENTATION' ) ) {
        define( 'FLEX_MULTI_BUSINESS_DOCUMENTATION', 'https://demo.flextheme.net/doc/flex-education-doc/');
    }
	if ( ! defined( 'FLEX_MULTI_BUSINESS_BUY_NOW' ) ) {
        define( 'FLEX_MULTI_BUSINESS_BUY_NOW', 'https://www.flextheme.net/products/educational-institute-wordpress-theme');
    }
	if ( ! defined( 'FLEX_MULTI_BUSINESS_LIVE_DEMO' ) ) {
        define( 'FLEX_MULTI_BUSINESS_LIVE_DEMO', 'https://demo.flextheme.net/flex-education-pro/');
    }
	if ( ! defined( 'FLEX_MULTI_BUSINESS_FOOTER_LINK' ) ) {
        define( 'FLEX_MULTI_BUSINESS_FOOTER_LINK', 'https://www.flextheme.net/products/flex-education');
    }
}
add_action( 'after_setup_theme', 'flex_education_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function flex_education_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'flex-education' ),
			'id'            => 'main-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'flex-education' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets', 'flex-education' ),
			'id'            => 'footer-widgets',
			'description'   => esc_html__( 'Add widgets here.', 'flex-education' ),
			'before_widget' => '<div class="%2$s footer-widget col-md-3 col-sm-6 col-xs-12">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar(
		array(
			'name'          => esc_html__( 'WooCommerce Sidebar', 'flex-education' ),
			'id'            => 'woocommerce-widgets',
			'description'   => esc_html__( 'Add widgets here.', 'flex-education' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	}
}
add_action( 'widgets_init', 'flex_education_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function flex_education_scripts() {

    $parent_style = 'flex-multi-business-style'; // Style handle of parent theme.

   	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
   	
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'flex-education-style', get_stylesheet_uri(), array( $parent_style ) );
	wp_style_add_data( $parent_style, 'rtl', 'replace' );
	wp_style_add_data( 'flex-education-style', 'rtl', 'replace' );

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', [], null );

}
add_action( 'wp_enqueue_scripts', 'flex_education_scripts' );


function flex_education_customize_register() {
	global $wp_customize;
	$wp_customize->remove_setting( 'flex_multi_business_display_phone_number' );
	$wp_customize->remove_control( 'flex_multi_business_display_phone_number' );
}
add_action( 'customize_register', 'flex_education_customize_register',11 );

add_action( 'init', 'flex_education_remove_parent_function');
  function flex_education_remove_parent_function() {
    remove_action( 'admin_notices', 'flex_multi_business_admin_notice_activation' );
    remove_action( 'admin_menu', 'flex_multi_business_getting_started_menu' );
}

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_flex-multi-business') return;

    wp_enqueue_script(
		'admin-notice-script',
		get_stylesheet_directory_uri() . '/dashboard/js/plugin-activation.js',
		array('jquery'),
		null,
		true
	);
	
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_flex_import_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('admin.php?page=fleximp-template-importer'),
    ]);
});

add_action('wp_ajax_check_flex_import_activation', function () {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';

    $flex_education_plugin_file = 'flex-import/flex-import.php';

    if (is_plugin_active($flex_education_plugin_file) ) {
        wp_send_json_success(['active' => true]);
    } else {
        wp_send_json_success(['active' => false]);
    }
});

add_action( 'activated_plugin', function( $plugin ) {
	if ( $plugin === 'elementor/elementor.php' ) {
		delete_transient( 'elementor_activation_redirect' );
		add_filter( 'elementor_enable_onboarding', '__return_false' );
	}
});

//custom function conditional check for blog page
function flex_education_is_blog (){
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

// Admin notice code START
function flex_education_dismissed_notice() {
	update_option( 'flex_education_admin_notice', true );
}
add_action( 'wp_ajax_flex_education_dismissed_notice', 'flex_education_dismissed_notice' );

//After Switch theme function
add_action('after_switch_theme', 'flex_education_getstart_setup_options');
function flex_education_getstart_setup_options () {
    update_option('flex_education_admin_notice', false );
}
// Admin notice code END