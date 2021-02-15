<?php
/**
 * Transparent Header for  Almaira Shop Theme.
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */

/***********************/
//sticky header
/***********************/

//main header
$wp_customize->add_setting( 'almaira_stick_main_header_active', array(
                'default'               => false,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'almaira_stick_main_header_active', array(
                'label'                 => esc_html__('Stick Main Header', 'almaira-shop'),
                'type'                  => 'checkbox',
                'section'               => 'almaira-shop-sticky-header',
                'settings'              => 'almaira_stick_main_header_active',
            ) ) );
// animation
$wp_customize->add_setting('almaira_shop_stick_animation', array(
        'default'        => 'fade',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'almaira_shop_sanitize_select',
    ));
$wp_customize->add_control('almaira_shop_stick_animation', array(
        'settings' => 'almaira_shop_stick_animation',
        'label'    => __('Select Animation Effect','almaira-shop'),
        'section'  => 'almaira-shop-sticky-header',
        'type'     => 'select',
        'choices'  => array(
        'fade'     => __('Fade','almaira-shop'),
        'slide'    => __('Slide','almaira-shop'), 
    ),
));
/****************/
//doc link
/****************/
$wp_customize->add_setting('almaira_shop_sicky_header_doc_learn_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_sicky_header_doc_learn_more',
            array(
        'section'     => 'almaira-shop-sticky-header',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#sticky-header',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
         'priority'   =>50,
    )));