<?php
/**
 *
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
//General Section
if ( ! class_exists( 'WooCommerce' ) ){
    return;
}
/***************/
// Cart
/***************/
$wp_customize->add_setting('almaira_shop_woo_cart_distraction_enable', array(
                'default'               => false,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize,'almaira_shop_woo_cart_distraction_enable', array(
                'label'         => esc_html__('Enable Distraction Free Cart.', 'almaira-shop'),
                'type'          => 'checkbox',
                'section'       => 'almaira-shop-woo-cart-page',
                'settings'      => 'almaira_shop_woo_cart_distraction_enable',
                'priority'    => 1,
            ) ) );

// cross sell product divider
$wp_customize->add_setting('almaira_shop_divide_woo_cross_sell', array(
        'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control( new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_divide_woo_cross_sell',
            array(
        'section'     => 'almaira-shop-woo-cart-page',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Cross Sell Product','almaira-shop' ),
        'priority'    => 2,
)));
// cross sell product column
if ( class_exists( 'Almaira_Shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'almaira_shop_cross_num_col_shw', array(
                'sanitize_callback' => 'almaira_shop_sanitize_range_value',
                'default' => '2',
                
                
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_cross_num_col_shw', array(
                    'label'       => __( 'Number Of Column To Show', 'almaira-shop' ),
                    'section'     => 'almaira-shop-woo-cart-page',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 1,
                        'max'  => 3,
                        'step' => 1,
                    ),
                    
                )
        )
);
// no.of product to show
$wp_customize->add_setting(
              'almaira_shop_cross_num_product_shw', array(
                'sanitize_callback' => 'almaira_shop_sanitize_range_value',
                'default' => '4',       
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_cross_num_product_shw', array(
                    'label'       => __( 'Number Of Product To Show', 'almaira-shop' ),
                    'section'     => 'almaira-shop-woo-cart-page',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 1,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    
                )
          )
   );
}

/****************/
// doc link
/****************/
$wp_customize->add_setting('almaira_shop_cart_link_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_cart_link_more',
            array(
        'section'   => 'almaira-shop-woo-cart-page',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#cart-page',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
        'priority'   =>30,
    )));