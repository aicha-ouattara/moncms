<?php
/**
 * Header Options for  Almaira Shop Theme.
 *
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
// main header
// choose col layout
if(class_exists('Almaira_Shop_WP_Customize_Control_Radio_Image')){
        $wp_customize->add_setting(
            'almaira_shop_main_header_layout', array(
                'default'           => 'mhdrleft',
                'sanitize_callback' => 'almaira_shop_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customize_Control_Radio_Image(
                $wp_customize, 'almaira_shop_main_header_layout', array(
                    'label'    => esc_html__( 'Header Layout', 'almaira-shop' ),
                    'section'  => 'almaira-shop-main-header',
                    'choices'  => array(
                        'mhdrleft'   => array(
                            'url' => ALMAIRA_SHOP_MAINHEADER_LAYOUT_LEFT,
                        ),
                        'hdr-none1'   => array(
                            'url' => ALMAIRA_SHOP_MAINHEADER_LAYOUT_CENTER,
                        ),
                        'hdr-none2' => array(
                            'url' => ALMAIRA_SHOP_MAINHEADER_LAYOUT_RIGHT,
                        ),
                        'hdr-none3' => array(
                            'url' => ALMAIRA_SHOP_MAINHEADER_LAYOUT_FULL,
                        ),
                        'hdr-none4' => array(
                            'url' => ALMAIRA_SHOP_MAINHEADER_LAYOUT_MINBARLEFT,
                        ),
                        'hdr-none5' => array(
                            'url' => ALMAIRA_SHOP_MAINHEADER_LAYOUT_MINBARRIGHT,
                        ),         
                    ),
                )
            )
        );
} 

// main header bottom-border size
if ( class_exists( 'Almaira_Shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'almaira_shop_main_hdr_botm_brd', array(
                'sanitize_callback' => 'almaira_shop_sanitize_range_value',
                'default'           => '1',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_main_hdr_botm_brd', array(
                    'label'       => esc_html__( 'Bottom Border Size','almaira-shop' ),
                    'section'     => 'almaira-shop-main-header',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 200,
                        'step' => 1,
                    ),
                )
        )
);
}
// border-color
$wp_customize->add_setting('almaira_shop_main_brdr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'almaira_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Almaira_Shop_Customizer_Color_Control($wp_customize,'almaira_shop_main_brdr_clr', array(
        'label'      => __('Bottom Border Color', 'almaira-shop' ),
        'section'    => 'almaira-shop-main-header',
        'settings'   => 'almaira_shop_main_brdr_clr',
    ) ) 
 );
/***********************************/  
// mobile menu open
/***********************************/ 
$wp_customize->add_setting('almaira_shop_mobile_menu_open', array(
                'default'               => 'overcenter',
                'sanitize_callback'     => 'almaira_shop_sanitize_radio',
            ) );
$wp_customize->add_control( new Almaira_Shop_Customizer_Buttonset_Control( $wp_customize, 'almaira_shop_mobile_menu_open', array(
                'label'                 => esc_html__( 'Mobile Menu Open', 'almaira-shop' ),
                'section'               => 'almaira-shop-main-header',
                'settings'              => 'almaira_shop_mobile_menu_open',
                'choices'               => array(
                    'left'              => esc_html__( 'Left', 'almaira-shop' ),
                    'overcenter'        => esc_html__( 'center', 'almaira-shop' ),
                    'right'             => esc_html__( 'Right', 'almaira-shop' ),
                ),
        ) ) );
// disable menu
$wp_customize->add_setting( 'almaira_shop_main_header_search_disable', array(
                'default'               => true,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'almaira_shop_main_header_search_disable', array(
                'label'                 => esc_html__('Enable Search', 'almaira-shop'),
                'type'                  => 'checkbox',
                'section'               => 'almaira-shop-main-header',
                'settings'              => 'almaira_shop_main_header_search_disable',
            ) ) );
if( class_exists( 'YITH_WCWL' )){
$wp_customize->add_setting( 'almaira_shop_main_header_whislist_disable', array(
                'default'               => true,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'almaira_shop_main_header_whislist_disable', array(
                'label'                 => esc_html__('Enable Wishlist', 'almaira-shop'),
                'type'                  => 'checkbox',
                'section'               => 'almaira-shop-main-header',
                'settings'              => 'almaira_shop_main_header_whislist_disable',
            ) ) );
}
$wp_customize->add_setting( 'almaira_shop_main_header_account_disable', array(
                'default'               => true,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'almaira_shop_main_header_account_disable', array(
                'label'                 => esc_html__('Enable Account', 'almaira-shop'),
                'type'                  => 'checkbox',
                'section'               => 'almaira-shop-main-header',
                'settings'              => 'almaira_shop_main_header_account_disable',
            ) ) );
$wp_customize->add_setting( 'almaira_shop_main_header_cart_disable', array(
                'default'               => true,
                'sanitize_callback'     => 'almaira_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'almaira_shop_main_header_cart_disable', array(
                'label'                 => esc_html__('Enable Cart', 'almaira-shop'),
                'type'                  => 'checkbox',
                'section'               => 'almaira-shop-main-header',
                'settings'              => 'almaira_shop_main_header_cart_disable',
            ) ) );

/****************/
//doc link
/****************/
$wp_customize->add_setting('almaira_shop_main_header_doc_learn_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_main_header_doc_learn_more',
            array(
        'section'     => 'almaira-shop-main-header',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#main-header',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
         'priority'   =>50,
    )));