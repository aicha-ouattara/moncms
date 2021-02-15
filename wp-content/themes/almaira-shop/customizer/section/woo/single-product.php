<?php
/**
 * Register WooCommerce Single Product Page
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */

if ( ! class_exists( 'WooCommerce' ) ){
    return;
}

/**********************/
// Sidebar
/**********************/
$wp_customize->add_setting( 'almaira_shop_single_product_sidebar_disable', array(
                'default'               => true,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'almaira_shop_single_product_sidebar_disable', array(
                'label'                 => esc_html__('Force to disable sidebar in single product page.', 'almaira-shop'),
                'type'                  => 'checkbox',
                'section'               => 'almaira-shop-woo-single-product',
                'settings'              => 'almaira_shop_single_product_sidebar_disable',
            ) ) );

/**********************/
// Display product Tab
/**********************/
// product tab divider
$wp_customize->add_setting('almaira_shop_single_product_tab_display_divide', array(
        'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control( new  Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_single_product_tab_display_divide',
            array(
        'section'     => 'almaira-shop-woo-single-product',
        'type'        => 'custom_message',
        'description' => __('Product Description Tab','almaira-shop' ),
)));
$wp_customize->add_setting('almaira_shop_single_product_tab_display', array(
                'default'               => true,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize,'almaira_shop_single_product_tab_display', array(
                'label'         => __('Display Product Description Tab', 'almaira-shop'),
                'type'          => 'checkbox',
                'section'       => 'almaira-shop-woo-single-product',
                'settings'      => 'almaira_shop_single_product_tab_display',
            ) ) );

$wp_customize->add_setting('almaira_shop_single_product_tab_layout', array(
                'default'               => 'horizontal',
                'sanitize_callback'     => 'almaira_shop_sanitize_radio',
            ) );
$wp_customize->add_control( new Almaira_Shop_Customizer_Buttonset_Control( $wp_customize, 'almaira_shop_single_product_tab_layout', array(
                'label'                 => esc_html__( 'Product Tab Layout', 'almaira-shop' ),
                'section'               => 'almaira-shop-woo-single-product',
                'settings'              => 'almaira_shop_single_product_tab_layout',
                'choices'               => array(
                    'horizontal'          => esc_html__( 'Horizontal', 'almaira-shop' ),
                    'vertical'            => esc_html__( 'Vertical', 'almaira-shop' ),
                ),
            ) ) );

/******************************/
// Up Sell Product
/******************************/
$wp_customize->add_setting('almaira_shop_single_upsell_product_divide', array(
        'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control( new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_single_upsell_product_divide',
            array(
        'section'     => 'almaira-shop-woo-single-product',
        'type'        => 'custom_message',
        'description' => __('Up Sell Product','almaira-shop' ),
)));
// display upsell
$wp_customize->add_setting('almaira_shop_upsell_product_display', array(
                'default'               => true,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize,'almaira_shop_upsell_product_display', array(
                'label'         => __('Display up sell product', 'almaira-shop'),
                'type'          => 'checkbox',
                'section'       => 'almaira-shop-woo-single-product',
                'settings'      => 'almaira_shop_upsell_product_display',
            ) ) );
// up sell product column
if ( class_exists( 'Almaira_Shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'almaira_shop_upsale_num_col_shw', array(
                'sanitize_callback' => 'almaira_shop_sanitize_range_value',
                'default' => '4',  
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_upsale_num_col_shw', array(
                    'label'       => __( 'Number Of Column To Show', 'almaira-shop' ),
                    'section'     => 'almaira-shop-woo-single-product',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 1,
                        'max'  => 6,
                        'step' => 1,
                    ),
                    
                )
        )
);
// no.of product to show
$wp_customize->add_setting(
            'almaira_shop_upsale_num_product_shw', array(
                'sanitize_callback' => 'almaira_shop_sanitize_range_value',
                'default' => '4',
                
                
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_upsale_num_product_shw', array(
                    'label'       => __( 'Number Of Product To Show', 'almaira-shop' ),
                    'section'     => 'almaira-shop-woo-single-product',
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

/******************************/
// Related Product
/******************************/
$wp_customize->add_setting('almaira_shop_single_related_product_divide', array(
        'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control( new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_single_related_product_divide',
            array(
        'section'     => 'almaira-shop-woo-single-product',
        'type'        => 'custom_message',
        'description' => __('Related Product','almaira-shop' ),
)));
// display upsell
$wp_customize->add_setting('almaira_shop_related_product_display', array(
                'default'               => true,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize,'almaira_shop_related_product_display', array(
                'label'         => __('Display Related product', 'almaira-shop'),
                'type'          => 'checkbox',
                'section'       => 'almaira-shop-woo-single-product',
                'settings'      => 'almaira_shop_related_product_display',
            ) ) );
// up sell product column
if ( class_exists( 'Almaira_Shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'almaira_shop_related_num_col_shw', array(
                'sanitize_callback' => 'almaira_shop_sanitize_range_value',
                'default' => '4',
                
                
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_related_num_col_shw', array(
                    'label'       => __( 'Number Of Column To Show', 'almaira-shop' ),
                    'section'     => 'almaira-shop-woo-single-product',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 1,
                        'max'  => 6,
                        'step' => 1,
                    ),
                    
                )
        )
);
// no.of product to show
$wp_customize->add_setting(
            'almaira_shop_related_num_product_shw', array(
                'sanitize_callback' => 'almaira_shop_sanitize_range_value',
                'default' => '4',
                
                
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_related_num_product_shw', array(
                    'label'       => __( 'Number Of Product To Show', 'almaira-shop' ),
                    'section'     => 'almaira-shop-woo-single-product',
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
$wp_customize->add_setting('almaira_shop_single_product_link_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_single_product_link_more',
            array(
        'section'     => 'almaira-shop-woo-single-product',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#single-product',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
        'priority'   =>30,
    )));