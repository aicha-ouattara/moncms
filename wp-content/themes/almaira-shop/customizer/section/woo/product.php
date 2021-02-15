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
// product animation
$wp_customize->add_setting('almaira_shop_woo_product_animation', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'almaira_shop_sanitize_select',
    ));
$wp_customize->add_control( 'almaira_shop_woo_product_animation', array(
        'settings'=> 'almaira_shop_woo_product_animation',
        'label'   => __('Product Image Hover Style','almaira-shop'),
        'section' => 'almaira-shop-woo-product',
        'type'    => 'select',
        'choices'    => array(
        'none'            => __('None','almaira-shop'),
        'zoom'            => __('Zoom','almaira-shop'),
        'swap'            => __('Swap','almaira-shop'),         
        ),
    ));
/*******************/
//Quick view
/*******************/
$wp_customize->add_setting('almaira_shop_woo_quickview_enable', array(
                'default'               => true,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize,'almaira_shop_woo_quickview_enable', array(
                'label'         => esc_html__('Enable Quick View.', 'almaira-shop'),
                'type'          => 'checkbox',
                'section'       => 'almaira-shop-woo-product',
                'settings'      => 'almaira_shop_woo_quickview_enable',
            ) ) );

/****************************/
// Box Shadow
/****************************/
if ( class_exists( 'Almaira_Shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'almaira_shop_product_box_shadow', array(
                'sanitize_callback' => 'almaira_shop_sanitize_range_value',
                'default'           => '0',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_product_box_shadow', array(
                    'label'       => esc_html__( 'Product Box shadow', 'almaira-shop' ),
                    'section'     => 'almaira-shop-woo-product',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 5,
                        'step' => 1,
                    ),
                )
        )
);

//**********************/
// Box shadow on hover
//**********************/
$wp_customize->add_setting(
            'almaira_shop_product_box_shadow_on_hover', array(
                'sanitize_callback' => 'almaira_shop_sanitize_range_value',
                'default'           => '0',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_product_box_shadow_on_hover', array(
                    'label'       => esc_html__( 'Product Box shadow on Hover', 'almaira-shop' ),
                    'section'     => 'almaira-shop-woo-product',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 5,
                        'step' => 1,
                    ),
                )
        )
);
}

/****************/
// doc link
/****************/
$wp_customize->add_setting('almaira_shop_product_style_link_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_product_style_link_more',
            array(
        'section'     => 'almaira-shop-woo-product',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#product-style',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
        'priority'   =>30,
    )));