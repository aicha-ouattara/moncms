<?php
/**
 * almaira shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
/**
 * Theme functions and definitions
 */
if ( ! function_exists( 'almaira_setup' ) ) :
define( 'ALMAIRA_SHOP_VRSN','1.0.0');
define( 'ALMAIRA_SHOP_THEME_DIR', get_template_directory() . '/' );
define( 'ALMAIRA_SHOP_THEME_URI', get_template_directory_uri() . '/' );
define( 'ALMAIRA_SHOP_THEME_FILE_URI', get_parent_theme_file_uri() . '/' );
define( 'ALMAIRA_SHOP_THEME_SETTINGS', 'almaira-settings' );
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function almaira_shop_setup(){
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'almaira-shop' );
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
		add_theme_support( 'woocommerce' );
	
		// Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style-editor.css' );
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		// Add support for Custom Header.
		add_theme_support( 'custom-header', 

			apply_filters( 'almaira_shop_custom_header_args', array(
				'default-image' => ALMAIRA_SHOP_THEME_URI.'images/almaira-header-image.png',
				'flex-height'   => true,
				'header-text'   => false,
				'video'          => true,
		) 


		) );

		register_default_headers(
		array(
			'default-image' => array(
				'url'           => '%s/images/almaira-header-image.png',
				'thumbnail_url' => '%s/images/almaira-header-image.png',
				'description'   => __( 'Default Header Image', 'almaira-shop' ),
			),
		)
	);
		// Add support for Custom Background.
		if(get_theme_mod('almaira_shop_color_scheme')=='alm-dark'){
        $args = array(
	    'default-color' => '1f1f1f',
        );
        }else{
        $args = array(
	    'default-color' => 'f1f1f1',
        );	
        }
        add_theme_support( 'custom-background',$args );
        $GLOBALS['content_width'] = apply_filters( 'almaira_shop_content_width', 640 );

        add_theme_support( 'woocommerce', array(
                                                 'thumbnail_image_width' => 320,
                                             ) );
         // Recommend plugins
        add_theme_support( 'recommend-plugins', array(
             'hunk-companion' => array(
                'name' => esc_html__( 'Hunk Companion', 'almaira-shop' ),
                'active_filename' => 'hunk-companion/hunk-companion.php',
            ),
            'woocommerce' => array(
                'name' => esc_html__( 'Woocommerce', 'almaira-shop' ),
                'active_filename' => 'woocommerce/woocommerce.php',
            ),
             'yith-woocommerce-wishlist' => array(
                 'name' => esc_html__( 'YITH WooCommerce Wishlist', 'almaira-shop' ),
                 'active_filename' => 'yith-woocommerce-wishlist/init.php',
             ),
              'yith-woocommerce-compare' => array(
                 'name' => esc_html__( 'YITH WooCommerce Compare', 'almaira-shop' ),
                 'active_filename' => 'yith-woocommerce-compare/init.php',
             ),
            'lead-form-builder' => array(
                'name' => esc_html__( 'Lead Form Builder', 'almaira-shop' ),
                'active_filename' => 'lead-form-builder/lead-form-builder.php',
            ),
             'wp-popup-builder' => array(
                'name' => esc_html__( 'WP Popup Builder – Popup Forms & Newsletter', 'almaira-shop' ),
                'active_filename' => 'wp-popup-builder/wp-popup-builder.php',
            ),
             'themehunk-megamenu-plus' => array(
                'name' => esc_html__( 'Megamenu plugin from Themehunk.', 'almaira-shop' ),
                'active_filename' => 'themehunk-megamenu-plus/themehunk-megamenu.php',
            ),
            
            'instagram-feed' => array(
                'name' => esc_html__( 'Custom Feeds for Instagram', 'almaira-shop' ),
                'active_filename' => 'instagram-feed/instagram-feed.php',
            ),
            'one-click-demo-import' => array(
                'name' => esc_html__( 'One Click Demo Import', 'almaira-shop' ),
                'active_filename' => 'one-click-demo-import/one-click-demo-import.php',
            ),
        ) );
	}
endif;
add_action( 'after_setup_theme', 'almaira_shop_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 */
/**
 * Register widget area.
 */
function almaira_shop_widgets_init(){
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'almaira-shop' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your primary sidebar.', 'almaira-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="almaira-widget-content">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Above Header First Widget', 'almaira-shop' ),
		'id'            => 'top-header-widget-col1',
		'description'   => esc_html__( 'Add widgets here to appear in top header.', 'almaira-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Above Header Second Widget', 'almaira-shop' ),
		'id'            => 'top-header-widget-col2',
		'description'   => esc_html__( 'Add widgets here to appear in top header.', 'almaira-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar(array(
		'name'          => esc_html__( 'Footer Top First Widget', 'almaira-shop' ),
		'id'            => 'footer-top-first',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'almaira-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Top Second Widget', 'almaira-shop' ),
		'id'            => 'footer-top-second',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'almaira-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	for ( $i = 1; $i <= 4; $i++ ){
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Footer Widget Area %d', 'almaira-shop' ), $i ),
			'id'            => 'footer-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		
	}
}
add_action( 'widgets_init', 'almaira_shop_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function almaira_shop_scripts(){
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	wp_enqueue_style( 'font-awesome',ALMAIRA_SHOP_THEME_URI. 'third-party/fonts/font-awesome/css/font-awesome.css', '', ALMAIRA_SHOP_VRSN );
	wp_enqueue_style( 'almaira-shop-menu-style', ALMAIRA_SHOP_THEME_URI. 'css/almaira-shop-menu.css','', ALMAIRA_SHOP_VRSN);
	wp_enqueue_style( 'almaira-shop-style', get_stylesheet_uri(), array(), ALMAIRA_SHOP_VRSN );
    wp_add_inline_style('almaira-shop-style', almaira_shop_custom_style());
    wp_enqueue_script("jquery-effects-core",array( 'jquery' ));
    wp_enqueue_script( 'jquery-ui-autocomplete',array( 'jquery' ),'',true );
    wp_enqueue_script('imagesloaded');
    wp_enqueue_style( 'dashicons' );
    wp_enqueue_script( 'almaira-shop-menu-js', ALMAIRA_SHOP_THEME_FILE_URI.'js/almaira-shop-menu.js', array( 'jquery' ), ALMAIRA_SHOP_VRSN, true );
   if (class_exists( 'WooCommerce' ) ){
     wp_enqueue_script( 'almaira-shop-woocommerce-js', ALMAIRA_SHOP_THEME_FILE_URI.'inc/woocommerce/js/woocommerce.js', array( 'jquery' ), ALMAIRA_SHOP_VRSN, true );
    wp_localize_script( 'almaira-shop-woocommerce-js', 'wp_ajax_url', admin_url( 'admin-ajax.php' ) );
    }
    wp_enqueue_script('almaira-shop-custom-js', ALMAIRA_SHOP_THEME_FILE_URI.'js/almaira-custom.js', array( 'jquery' ), ALMAIRA_SHOP_VRSN , true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'almaira_shop_scripts' );
/**
 * Load init.
 */
require_once trailingslashit(ALMAIRA_SHOP_THEME_DIR).'inc/init.php';
//custom function conditional check for blog page
function almaira_shop_is_blog(){
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}