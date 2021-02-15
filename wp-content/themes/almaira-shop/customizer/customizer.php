<?php 
/**
 * all customizer setting includeed
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 * @param  
 * @return mixed|string
 */
function almaira_shop_customize_register( $wp_customize ){
// scroller
if ( class_exists( 'Almaira_Shop_Customize_Control_Scroll' ) ){
      $scroller = new Almaira_Shop_Customize_Control_Scroll();
}

//view pro feature
require ALMAIRA_SHOP_THEME_DIR . '/customizer/view-pro-feature.php';	

//Registered panel and section
require ALMAIRA_SHOP_THEME_DIR . '/customizer/register-panels-and-sections.php';	
//site identity
require ALMAIRA_SHOP_THEME_DIR . '/customizer/section/layout/header/set-identity.php';
require ALMAIRA_SHOP_THEME_DIR . '/customizer/section/layout/header/header.php';
//social icon
require ALMAIRA_SHOP_THEME_DIR . '/customizer/section/layout/social-icon/social-icon.php';
//global color
require ALMAIRA_SHOP_THEME_DIR . '/customizer/section/color/global-color.php';
//Container
require ALMAIRA_SHOP_THEME_DIR . '/customizer/section/layout/container/container.php';
//Header
require ALMAIRA_SHOP_THEME_DIR . '/customizer/section/layout/header/above-header.php';	
require ALMAIRA_SHOP_THEME_DIR . '/customizer/section/layout/header/main-header.php';
require ALMAIRA_SHOP_THEME_DIR . '/customizer/section/layout/header/sticky-header.php';	
require ALMAIRA_SHOP_THEME_DIR . '/customizer/section/layout/header/page-header.php';		
	
//blog option
require ALMAIRA_SHOP_THEME_DIR . 'customizer/section/layout/blog/blog-archive.php';	
//footer option
require ALMAIRA_SHOP_THEME_DIR . 'customizer/section/layout/footer/above-footer.php';
require ALMAIRA_SHOP_THEME_DIR . 'customizer/section/layout/footer/widget-footer.php';
require ALMAIRA_SHOP_THEME_DIR . 'customizer/section/layout/footer/bottom-footer.php';
//Scroll to top option
require ALMAIRA_SHOP_THEME_DIR . 'customizer/section/layout/scroll-to-top/scroll-to-top.php';
//woocommerce
require ALMAIRA_SHOP_THEME_DIR . 'customizer/section/woo/product.php';
require ALMAIRA_SHOP_THEME_DIR . 'customizer/section/woo/single-product.php';
require ALMAIRA_SHOP_THEME_DIR . 'customizer/section/woo/cart.php';
require ALMAIRA_SHOP_THEME_DIR . 'customizer/section/woo/checkout.php';
//preloader
require ALMAIRA_SHOP_THEME_DIR . 'customizer/section/layout/header/loader.php';	
//site identity
}
add_action('customize_register','almaira_shop_customize_register');
function almaira_shop_is_json( $string ){
    return is_string( $string ) && is_array( json_decode( $string, true ) ) ? true : false;
}