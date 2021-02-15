<?php 
/**
 * all file includeed
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 * @param  
 * @return mixed|string
 */
get_template_part( 'inc/almaira-hooks');
get_template_part('inc/class-theme-options');
get_template_part( 'inc/admin-function');
get_template_part( 'inc/header-function');
get_template_part( 'inc/footer-function');
get_template_part( 'inc/blog-function');
get_template_part( 'lib/page-meta-box/almaira-page-meta-box');
get_template_part( 'inc/almaira-custom-style');
get_template_part('customizer/customizer-constant');
get_template_part('customizer/models/class-almaira-shop-singleton');
get_template_part('customizer/models/class-almaira-shop-defaults-models');
get_template_part('customizer/repeater/class-almaira-shop-repeater');
get_template_part('customizer/extend-customizer/class-almaira-shop-wp-customize-panel');
get_template_part('customizer/extend-customizer/class-almaira-shop-wp-customize-section');
get_template_part('customizer/customizer-radio-image/class/class-almaira-shop-customize-control-radio-image');
get_template_part('customizer/customizer-range-value/class/class-almaira-shop-customizer-range-value-control');
get_template_part('customizer/customizer-scroll/class/class-almaira-shop-customize-control-scroll');
get_template_part('customizer/color/class-control-color');
get_template_part('customizer/customize-buttonset/class-control-buttonset');
get_template_part('customizer/sortable/class-almaira-control-sortable');
get_template_part('customizer/background/class-almaira-shop-background-image-control');
get_template_part('customizer/customizer-tabs/class-almaira-shop-customize-control-tabs');
get_template_part('customizer/custom-customizer');
get_template_part('customizer/customizer');
get_template_part('lib/breadcrumbs/breadcrumbs');

get_template_part('lib/theme-option/class-almaira-shop-admin-settings');
get_template_part('lib/theme-option/theme-option-function');
/******************************/
// woocommerce
/******************************/
// pro-setting
get_template_part( 'inc/woocommerce/woo-core');
get_template_part( 'inc/woocommerce/woo-function');
get_template_part('inc/woocommerce/woocommerce-ajax');
//typography
get_template_part('customizer/customizer-font-selector/functions');