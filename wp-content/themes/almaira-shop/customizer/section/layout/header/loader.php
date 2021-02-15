<?php
/**
 * Preloader Options for  Almaira Shop Theme.
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
//Enable Loader
$wp_customize->add_setting( 'almaira_shop_preloader_enable', array(
                'default'               => false,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'almaira_shop_preloader_enable', array(
                'label'                 => esc_html__('Enable Loader', 'almaira-shop'),
                'type'                  => 'checkbox',
                'section'               => 'almaira-shop-pre-loader',
                'settings'              => 'almaira_shop_preloader_enable',
                'priority'   => 1,
            ) ) );
// BG color
 $wp_customize->add_setting('almaira_shop_loader_bg_clr', array(
        'default'           => '#9c9c9c',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'almaira_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Almaira_Shop_Customizer_Color_Control($wp_customize,'almaira_shop_loader_bg_clr', array(
        'label'      => __('Background Color', 'almaira-shop' ),
        'section'    => 'almaira-shop-pre-loader',
        'settings'   => 'almaira_shop_loader_bg_clr',
        'priority'   => 2,
    ) ) 
 ); 
/*******************/ 
// Pre loader Image
/*******************/ 
$wp_customize->add_setting('almaira_shop_preloader_image_upload', array(
        'default'       => ALMAIRA_SHOP_PRELOADER,
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'almaira_shop_preloader_image_upload', array(
        'label'          => __('Pre Loader Image', 'almaira-shop'),
        'description'    => __('(You can also use GIF image.)', 'almaira-shop'),
        'section'        => 'almaira-shop-pre-loader',
        'settings'       => 'almaira_shop_preloader_image_upload',
 )));

/****************/
// doc link
/****************/
$wp_customize->add_setting('almaira_shop_loader_link_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_loader_link_more',
            array(
        'section'     => 'almaira-shop-pre-loader',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#preloader-setting',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
        'priority'   =>30,
    )));