<?php
/**
 * Header Options for  Almaira Shop Theme.
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
/***********************/
//DISABLE SCROLL TO TOP
/***********************/
    $wp_customize->add_setting( 'almaira_shop_scroll_to_top_disable', array(
                'default'           => false,
                'sanitize_callback' => 'almaira_shop_sanitize_checkbox',
            ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'almaira_shop_scroll_to_top_disable', array(
                'label'       => esc_html__('Disable Scroll To Top', 'almaira-shop'),
                'type'        => 'checkbox',
                'section'     => 'almaira-shop-scroll-to-top-section',
                'settings'    => 'almaira_shop_scroll_to_top_disable',
                'priority'   =>1,
            ) ) );
/********************/
// position left/right
/********************/
$wp_customize->add_setting('almaira_shop_scroll_to_top_option', array(
                'default'               => 'right',
                'sanitize_callback'     => 'almaira_shop_sanitize_select',
            ) );
$wp_customize->add_control( new Almaira_Shop_Customizer_Buttonset_Control( $wp_customize,'almaira_shop_scroll_to_top_option', array(
                'label'                 => esc_html__( 'Position', 'almaira-shop' ),
                'section'               => 'almaira-shop-scroll-to-top-section',
                'settings'              => 'almaira_shop_scroll_to_top_option',
                'choices'               => array(
                    'left'   => esc_html__( 'Left', 'almaira-shop' ),
                    'right'  => esc_html__( 'Right', 'almaira-shop' ),
             ),
                'priority'   =>2,
) ) );
 
/****************/
//doc link
/****************/
$wp_customize->add_setting('almaira_shop_scroll_to_top_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_scroll_to_top_more',
            array(
        'section'     => 'almaira-shop-scroll-to-top-section',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#scroll-top',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
        'priority'   =>30,
    )));