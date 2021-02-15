<?php 
/**
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
//General Section
if ( ! class_exists( 'WooCommerce' ) ){
    return;
}
/***************/
// Checkout
/***************/
$wp_customize->add_setting('almaira_shop_woo_checkout_distraction_enable', array(
                'default'               => false,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize,'almaira_shop_woo_checkout_distraction_enable', array(
                'label'         => esc_html__('Enable Distraction Free Checkout.', 'almaira-shop'),
                'type'          => 'checkbox',
                'section'       => 'almaira-shop-woo-checkout-page',
                'settings'      => 'almaira_shop_woo_checkout_distraction_enable',
            ) ) );

/****************/
// doc link
/****************/
$wp_customize->add_setting('almaira_shop_checkout_link_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_checkout_link_more',
            array(
        'section'     => 'almaira-shop-woo-checkout-page',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#checkout-page',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
        'priority'   =>30,
    )));