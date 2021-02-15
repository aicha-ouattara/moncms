<?php
/**
 * Global Color & Background Options for  Almaira Shop Theme.
 *
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
/***************/
// Scheme color 
/***************/
$wp_customize->add_setting('almaira_shop_color_scheme', array(
                'default'               => 'alm-light',
                'sanitize_callback'     => 'almaira_shop_sanitize_radio',
            ) );
$wp_customize->add_control( new Almaira_Shop_Customizer_Buttonset_Control( $wp_customize, 'almaira_shop_color_scheme', array(
                'label'                 => esc_html__( 'Color Scheme', 'almaira-shop' ),
                'section'               => 'almaira-shop-global-color',
                'settings'              => 'almaira_shop_color_scheme',
                'choices'               => array(
                    'alm-light'      => esc_html__( 'Light', 'almaira-shop' ),
                    'alm-dark'       => esc_html__( 'Dark', 'almaira-shop' ),
                ),
                 'priority' => 1,
            ) ) );/******************/
//Global Option
/******************/
// theme color
 $wp_customize->add_setting('almaira_shop_theme_clr', array(
        'default'        => '#bd8348',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'almaira_shop_sanitize_color',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'almaira_shop_theme_clr', array(
        'label'      => __('Theme Color', 'almaira-shop' ),
        'section'    => 'almaira-shop-global-color',
        'settings'   => 'almaira_shop_theme_clr',
        'priority' => 1,
    ) ) 
 );  

// gloabal background option
$wp_customize->get_control( 'background_color' )->section = 'almaira-shop-bg-option';
$wp_customize->get_control( 'background_color' )->priority = 6;
$wp_customize->get_control( 'background_image' )->section = 'almaira-shop-bg-option';
$wp_customize->get_control( 'background_image' )->priority = 7;
$wp_customize->get_control( 'background_preset' )->section = 'almaira-shop-bg-option';
$wp_customize->get_control( 'background_preset' )->priority = 8;
$wp_customize->get_control( 'background_position' )->section = 'almaira-shop-bg-option';
$wp_customize->get_control( 'background_position' )->priority = 8;
$wp_customize->get_control( 'background_repeat' )->section = 'almaira-shop-bg-option';
$wp_customize->get_control( 'background_repeat' )->priority = 9;
$wp_customize->get_control( 'background_attachment' )->section = 'almaira-shop-bg-option';
$wp_customize->get_control( 'background_attachment' )->priority = 10;
$wp_customize->get_control( 'background_size' )->section = 'almaira-shop-bg-option';
$wp_customize->get_control( 'background_size' )->priority = 11;
/****************/
//doc link
/****************/
$wp_customize->add_setting('almaira_shop_global_clr_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_global_clr_more',
            array(
        'section'     => 'almaira-shop-global-color',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#global-colors',
        'description' => esc_html__( 'Pick color for elements like link, Sale ribbon , MouseHover  etc. To know more go with this', 'almaira-shop' ),
        'priority'   => 30,
)));