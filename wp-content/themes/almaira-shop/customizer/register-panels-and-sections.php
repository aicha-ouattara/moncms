<?php
/**
 * Register customizer panels & sections.
 *
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
/*****************/
//contact templates
/*****************/
$almaira_shop_contact_section = new Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira_shop_contact_section', array(
    'title'    => __( 'Contact Template', 'almaira-shop' ),
    'priority' => 10,
  ));
$wp_customize->add_section( $almaira_shop_contact_section );
/*******************/
// view pro feature
/*******************/
$almaira_shop_view_pro = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-view-pro', array(
    'title' =>  __( 'View Pro Features', 'almaira-shop' ),
    'priority' => 0,
  ));
$wp_customize->add_section( $almaira_shop_view_pro );
/*************************/
/*WordPress Default Panel*/
/*************************/
$almaira_shop_panel_default = new Almaira_Shop_WP_Customize_Panel( $wp_customize,'almaira-shop-panel-default', array(
    'priority' => 1,
    'title'    => __( 'WordPress Default', 'almaira-shop' ),
  ));
$wp_customize->add_panel($almaira_shop_panel_default);
$wp_customize->get_section( 'title_tagline' )->panel = 'almaira-shop-panel-default';
$wp_customize->get_section( 'static_front_page' )->panel = 'almaira-shop-panel-default';
$wp_customize->get_section( 'custom_css' )->panel = 'almaira-shop-panel-default';
/************************/
// Background option
/************************/
$almaira_shop_bg_option = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-bg-option', array(
    'title' =>  __( 'Background', 'almaira-shop' ),
    'panel' => 'almaira-shop-panel-default',
    'priority' => 10,
  ));
$wp_customize->add_section($almaira_shop_bg_option);

/*************************/
/*Layout Panel*/
/*************************/
$wp_customize->add_panel( 'almaira-shop-panel-layout', array(
				'priority' => 3,
				'title'    => __( 'Layout', 'almaira-shop' ),
) );
//Container
$almaira_section_container_group = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-section-container-group', array(
    'title' =>  __( 'Container', 'almaira-shop' ),
    'panel' => 'almaira-shop-panel-layout',
    'priority' => 1,
  ));
$wp_customize->add_section( $almaira_section_container_group );

// Header
$almaira_section_header_group = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-section-header-group', array(
    'title' =>  __( 'Header', 'almaira-shop' ),
    'panel' => 'almaira-shop-panel-layout',
    'priority' => 2,
  ));
$wp_customize->add_section( $almaira_section_header_group );

// above-header
$almaira_above_header = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-above-header', array(
    'title'    => __( 'Above Header', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-layout',
        'section'  => 'almaira-shop-section-header-group',
        'priority' => 3,
  ));
$wp_customize->add_section( $almaira_above_header );
// main-header
$almaira_shop_main_header = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-main-header', array(
    'title'    => __( 'Main Header', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-layout',
    'section'  => 'almaira-shop-section-header-group',
    'priority' => 4,
  ));
$wp_customize->add_section( $almaira_shop_main_header );
// sticky-header
$almaira_sticky_header = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-sticky-header', array(
    'title'    => __( 'Sticky Header', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-layout',
    'section'  => 'almaira-shop-section-header-group',
    'priority' => 6,
  ));
$wp_customize->add_section($almaira_sticky_header);
// transparent-header
$almaira_transparent_header = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-transparent-header', array(
    'title'    => __( 'Transparent Header', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-layout',
    'section'  => 'almaira-shop-section-header-group',
    'priority' => 7,
  ));
$wp_customize->add_section($almaira_transparent_header);

//page-header
$almaira_page_header = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-page-header', array(
    'title'    => __( 'Page Header', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-layout',
    'section'  => 'almaira-shop-section-header-group',
    'priority' => 8,
  ));
$wp_customize->add_section($almaira_page_header);

//blog
$almaira_section_blog_group = new  Almaira_Shop_WP_Customize_Section( $wp_customize,'almaira-shop-section-blog-group', array(
    'title' =>  __( 'Blog', 'almaira-shop' ),
    'panel' => 'almaira-shop-panel-layout',
    'priority' => 2,
  ));
$wp_customize->add_section($almaira_section_blog_group);


$almaira_section_footer_group = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-section-footer-group', array(
    'title' =>  __( 'Footer', 'almaira-shop' ),
    'panel' => 'almaira-shop-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section( $almaira_section_footer_group);

//above-footer
$almaira_above_footer = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-above-footer',array(
    'title'    => __( 'Above Footer','almaira-shop' ),
    'panel'    => 'almaira-shop-panel-layout',
        'section'  => 'almaira-shop-section-footer-group',
        'priority' => 1,
));
$wp_customize->add_section( $almaira_above_footer);
//widget footer
$almaira_shop_widget_footer = new  Almaira_Shop_WP_Customize_Section($wp_customize,'almaira-shop-widget-footer', array(
    'title'    => __('Widget Footer','almaira-shop'),
    'panel'    => 'almaira-shop-panel-layout',
    'section'  => 'almaira-shop-section-footer-group',
    'priority' => 5,
));
$wp_customize->add_section( $almaira_shop_widget_footer);
//Bottom footer
$almaira_shop_bottom_footer = new  Almaira_Shop_WP_Customize_Section($wp_customize,'almaira-shop-bottom-footer', array(
    'title'    => __('Below Footer','almaira-shop'),
    'panel'    => 'almaira-shop-panel-layout',
    'section'  => 'almaira-shop-section-footer-group',
    'priority' => 5,
));
$wp_customize->add_section( $almaira_shop_bottom_footer);



//*****************//
// scroll to top
//*****************//
$wp_customize->add_section('almaira-shop-scroll-to-top-section', array(
        'title'    => __('Scroll To Top', 'almaira-shop'),
        'panel'    => 'almaira-shop-panel-layout',
        'priority' => 5,
));

/*************************/
/*Color Panel*/
/*************************/
// Global Color & Background
$wp_customize->add_section('almaira-shop-global-color', array(
    'title'    => __('Global Colors', 'almaira-shop'),
    'priority' => 5,
));
/****************************/
/*Header Color and Background section*/
/****************************/
$almaira_color_header_group = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-color-header-group', array(
    'title' =>  __( 'Header', 'almaira-shop' ),
    'panel' => 'almaira-shop-panel-global-color',
    'priority' => 2,
  ));
$wp_customize->add_section($almaira_color_header_group);
// above header
$almaira_above_header_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-above-header-color', array(
    'title'    => __( 'Above Header', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-color-header-group',
        'priority' => 1,
  ));
$wp_customize->add_section($almaira_above_header_color);
// Main header
$almaira_main_header_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-main-header-color', array(
    'title'    => __( 'Main Header', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-color-header-group',
        'priority' => 1,
  ));
$wp_customize->add_section($almaira_main_header_color);

// sub main-color-header
$almaira_main_header_header_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-main-header-header-color', array(
    'title'    => __( 'Header', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-main-header-color',
        'priority' =>1,
  ));
$wp_customize->add_section($almaira_main_header_header_color);
// main-menu-color-header
// sub main-color-header
$almaira_main_header_menu_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-main-header-menu-color', array(
    'title'    => __( 'Main Menu', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-main-header-color',
        'priority' =>2,
  ));
$wp_customize->add_section($almaira_main_header_menu_color);
// Pge header
$almaira_page_header_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-page-header-color', array(
    'title'    => __( 'Page Header', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-color-header-group',
        'priority' => 1,
  ));
$wp_customize->add_section($almaira_page_header_color);

// Mobile Pan Color
$almaira_mobilr_pan_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-mobilr-pan-color', array(
    'title'    => __( 'Mobile/Pan Color', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-color-header-group',
        'priority' => 1,
  ));
$wp_customize->add_section($almaira_mobilr_pan_color);
// Global Woocommerce Product Color
$wp_customize->add_section('almaira-shop-product-color', array(
    'title'    => __('Product Colors', 'almaira-shop'),
    'panel'    => 'almaira-shop-panel-global-color',
    'priority' => 4,
));
// Single Woocommerce Product Color
$wp_customize->add_section('almaira-shop-single-product-color', array(
    'title'    => __('Single Product Colors', 'almaira-shop'),
    'panel'    => 'almaira-shop-panel-global-color',
    'priority' => 5,
));

// footer Color
$almaira_color_footer_group = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-color-footer-group', array(
    'title' =>  __( 'Footer', 'almaira-shop' ),
    'panel' => 'almaira-shop-panel-global-color',
    'priority' => 2,
  ));
$wp_customize->add_section($almaira_color_footer_group);

$almaira_footer_above_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-footer-above-color', array(
    'title'    => __( 'Above Footer', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-color-footer-group',
        'priority' => 1,
  ));
$wp_customize->add_section($almaira_footer_above_color);


$almaira_footer_widget_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-footer-widget-color', array(
    'title'    => __( 'Footer Widget', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-color-footer-group',
        'priority' => 1,
  ));
$wp_customize->add_section($almaira_footer_widget_color);

$almaira_footer_below_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-footer-below-color', array(
    'title'    => __( 'Below Footer', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-color-footer-group',
        'priority' => 1,
  ));
$wp_customize->add_section($almaira_footer_below_color);


// Sticky Header
$almaira_color_sticky_header_group = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-color-sticky-header-group', array(
    'title' =>  __( 'Sticky Header', 'almaira-shop' ),
    'panel' => 'almaira-shop-panel-global-color',
    'priority' => 2,
  ));
$wp_customize->add_section($almaira_color_sticky_header_group);
$almaira_sticky_header_above_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-sticky-header-above-color', array(
    'title'    => __( 'Above Header', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-color-sticky-header-group',
        'priority' => 1,
  ));
$wp_customize->add_section($almaira_sticky_header_above_color);

$almaira_sticky_header_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-sticky-header-color', array(
    'title'    => __( 'Main Header', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-color-sticky-header-group',
        'priority' => 1,
  ));
$wp_customize->add_section($almaira_sticky_header_color);

$almaira_sticky_header_main_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-sticky-header-main-color', array(
    'title'    => __( 'Header', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-sticky-header-color',
        'priority' => 1,
  ));
$wp_customize->add_section($almaira_sticky_header_main_color);

$almaira_sticky_header_main_menu_color = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-sticky-header-main-menu-color', array(
    'title'    => __( 'Main Menu', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-global-color',
        'section'  => 'almaira-shop-sticky-header-color',
        'priority' => 1,
  ));
$wp_customize->add_section($almaira_sticky_header_main_menu_color);
/*****************/
// sidebar
/*****************/
$almaira_sidebar_color_group = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-sidebar-color-group', array(
    'title' =>  __( 'Sidebar', 'almaira-shop' ),
    'panel' => 'almaira-shop-panel-global-color',
    'priority' => 2,
  ));
$wp_customize->add_section($almaira_sidebar_color_group);

//**********************//
//social icon 
//**********************//     
$almaira_social_header = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-social-icon', array(
    'title'    => __( 'Social Icon', 'almaira-shop' ),
    'priority' => 28,
  ));
$wp_customize->add_section( $almaira_social_header );
// woocommerce 
$almaira_woo_product = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-woo-product', array(
    'title'    => __( 'Product Style', 'almaira-shop' ),
     'panel'    => 'woocommerce',
     'priority' => 2,
));
$wp_customize->add_section( $almaira_woo_product );

$almaira_woo_single_product = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-woo-single-product', array(
    'title'    => __( 'Single Product Page', 'almaira-shop' ),
     'panel'    => 'woocommerce',
     'priority' => 3,
));
$wp_customize->add_section( $almaira_woo_single_product );
// cart page
$almaira_woo_cart_page = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-woo-cart-page', array(
    'title'    => __( 'Cart Page', 'almaira-shop' ),
     'panel'    => 'woocommerce',
     'priority' => 3,
));
$wp_customize->add_section( $almaira_woo_cart_page );
// checkout page
$almaira_woo_checkout_page = new  Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira-shop-woo-checkout-page', array(
    'title'    => __( 'Checkout Page', 'almaira-shop' ),
    'panel'    => 'woocommerce',
    'priority' => 3,
));
$wp_customize->add_section( $almaira_woo_checkout_page );
/*******************/
//Typograpgy
/*******************/
$wp_customize->add_panel( 'almaira-shop-base-typography', array(
        'priority' => 23,
        'title'    => __( 'Typography', 'almaira-shop' ),
) );
$almaira_base_typography_font_subset = new  Almaira_Shop_WP_Customize_Section( $wp_customize,'almaira-shop-base-typography-font-subset', array(
    'title'      => __('Font Subset', 'almaira-shop' ), 
    'panel'      => 'almaira-shop-base-typography',
    'priority'   => 1,
  ));
$wp_customize->add_section($almaira_base_typography_font_subset);
$almaira_base_typography_base_typo = new  Almaira_Shop_WP_Customize_Section( $wp_customize,'almaira-shop-base-typography-base-typo', array(
    'title'      => __('Base Typography', 'almaira-shop' ), 
    'panel'      => 'almaira-shop-base-typography',
    'priority'   => 2,
  ));
$wp_customize->add_section($almaira_base_typography_base_typo);
$almaira_base_typography_body_font = new  Almaira_Shop_WP_Customize_Section( $wp_customize,'almaira-shop-base-typography-body-font', array(
    'title'      => __('Body', 'almaira-shop' ), 
    'panel'      => 'almaira-shop-base-typography',
    'section'    => 'almaira-shop-base-typography-base-typo',
    'priority'   => 1,
  ));
$wp_customize->add_section($almaira_base_typography_body_font);
$almaira_base_typography_body_title = new  Almaira_Shop_WP_Customize_Section( $wp_customize,'almaira-shop-base-typography-body-title', array(
    'title'      => __('Title', 'almaira-shop' ), 
    'panel'      => 'almaira-shop-base-typography',
    'section'    => 'almaira-shop-base-typography-base-typo',
    'priority'   => 2,
  ));
$wp_customize->add_section($almaira_base_typography_body_title);
$almaira_base_typography_body_content = new  Almaira_Shop_WP_Customize_Section( $wp_customize,'almaira-shop-base-typography-body-content', array(
    'title'      => __('Content', 'almaira-shop' ), 
    'panel'      => 'almaira-shop-base-typography',
    'section'    => 'almaira-shop-base-typography-base-typo',
    'priority'   => 3,
  ));
$wp_customize->add_section($almaira_base_typography_body_content);
/*************************/
/* Preloader */
/*************************/
$wp_customize->add_section( 'almaira-shop-pre-loader' , array(
    'title'      => __('Preloader','almaira-shop'),
    'priority'   => 30,
) );

/*************************/
/* Frontpage Panel */
/*************************/
$wp_customize->add_panel( 'almaira-shop-panel-frontpage', array(
                'priority' => 5,
                'title'    => __( 'Frontpage', 'almaira-shop' ),
) );

$almaira_shop_slider_section = new Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira_shop_slider_section', array(
    'title'    => __( 'Slider Settings', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-frontpage',
    'priority' => 1,
  ));
$wp_customize->add_section( $almaira_shop_slider_section );
$almaira_shop_product_section = new Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira_shop_product_section', array(
    'title'    => __( 'Product Filter', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-frontpage',
    'priority' => 2,
  ));
$wp_customize->add_section( $almaira_shop_product_section );
$almaira_shop_ribbon_section = new Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira_shop_ribbon_section', array(
    'title'    => __( 'Ribbon', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-frontpage',
    'priority' => 3,
  ));
$wp_customize->add_section( $almaira_shop_ribbon_section );


$almaira_shop_category_section = new Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira_shop_category_section', array(
    'title'    => __( 'Categories', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $almaira_shop_category_section );

$almaira_shop_sortby_section = new Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira_shop_sortby_section', array(
    'title'    => __( 'Home Shop', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-frontpage',
    'priority' => 5,
  ));
$wp_customize->add_section( $almaira_shop_sortby_section );



$almaira_shop_instafeed_section = new Almaira_Shop_WP_Customize_Section( $wp_customize, 'almaira_shop_instafeed_section', array(
    'title'    => __( 'Instagram', 'almaira-shop' ),
    'panel'    => 'almaira-shop-panel-frontpage',
    'priority' => 7,
  ));
$wp_customize->add_section( $almaira_shop_instafeed_section );


/****************/
//doc link
/****************/
$wp_customize->add_setting('almaira_shop_static_page_doc_learn_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_static_page_doc_learn_more',
            array(
        'section'     => 'static_front_page',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#homepage-setting',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
         'priority'   =>50,
    )));

