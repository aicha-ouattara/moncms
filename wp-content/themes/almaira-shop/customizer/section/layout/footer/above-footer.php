<?php
/**
 * Footer Options for  Almaira Shop Theme.
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
/******************/
//Above footer
/******************/
//choose col layout
if(class_exists('Almaira_Shop_WP_Customize_Control_Radio_Image')){
               $wp_customize->add_setting(
               'almaira_shop_above_footer_layout', array(
                'default'           => 'ft-abv-none',
                'sanitize_callback' => 'almaira_shop_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customize_Control_Radio_Image(
                $wp_customize, 'almaira_shop_above_footer_layout', array(
                    'label'    => esc_html__('Layout','almaira-shop'),
                    'section'  => 'almaira-shop-above-footer',
                    'choices'  => array(
                        'ft-abv-none'   => array(
                            'url' => ALMAIRA_SHOP_TOP_HEADER_LAYOUT_NONE,
                        ),
                        'ft-abv-one-none'   => array(
                            'url' => ALMAIRA_SHOP_FOOTER_ABOVE_LAYOUT_1,
                        ),
                        'ft-abv-two' => array(
                            'url' => ALMAIRA_SHOP_FOOTER_ABOVE_LAYOUT_2,
                        ),
                        'ft-abv-three-none' => array(
                            'url' => ALMAIRA_SHOP_FOOTER_ABOVE_LAYOUT_3,
                        ),
                    ),
                )
            )
        );
    } 
//********************************/
// col1-setting
//*******************************/
$wp_customize->add_setting('almaira_shop_above_footer_col1_set', array(
        'default'        => 'text',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'almaira_shop_sanitize_select',
    ));
$wp_customize->add_control('almaira_shop_above_footer_col1_set', array(
        'settings' => 'almaira_shop_above_footer_col1_set',
        'label'    => __('Column 1','almaira-shop'),
        'section'  => 'almaira-shop-above-footer',
        'type'     => 'select',
        'choices'  => array(
        'none'             => __('None','almaira-shop'),
        'text'             => __('Text','almaira-shop'),
        'menu'             => __('Menu','almaira-shop'),
        'widget'           => __('Widget','almaira-shop'),
        'social'           => __('Social Media','almaira-shop'),   
    ),
));
//col1-text/html
$wp_customize->add_setting('almaira_shop_footer_col1_texthtml', array(
            'default'           =>__('Add your content here','almaira-shop'),
            'capability'        => 'edit_theme_options',
            'sanitize_callback' =>'almaira_shop_sanitize_text',
            'transport'         => 'postMessage',
        )
    );
    $wp_customize->add_control('almaira_shop_footer_col1_texthtml', array(
            'type'        => 'text',
            'section'     => 'almaira-shop-above-footer',
            'label'    => __('Text', 'almaira-shop'),
            'settings' => 'almaira_shop_footer_col1_texthtml',
        )
    );
// col1 widget redirection
if (class_exists('Almaira_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'almaira_shop_footer_col1_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Almaira_Shop_Widegt_Redirect(
                $wp_customize,'almaira_shop_footer_col1_widget_redirect', array(
                    'section'      => 'almaira-shop-above-footer',
                    'button_text'  => esc_html__('Go To Widget','almaira-shop'),
                    'button_class' => 'focus-customizer-widget-redirect-col1',  
                )
            )
        );
} 
// col1 menu redirection
if (class_exists('Almaira_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'almaira_shop_footer_col1_menu_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Almaira_Shop_Widegt_Redirect(
                $wp_customize,'almaira_shop_footer_col1_menu_redirect', array(
                    'section'      => 'almaira-shop-above-footer',
                    'button_text'  => esc_html__('Go To Menu','almaira-shop'),
                    'button_class' => 'focus-customizer-menu-redirect-col1',  
                )
            )
        );
} 
// col1 social media redirection
if (class_exists('Almaira_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'almaira_shop_footer_col1_social_media_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Almaira_Shop_Widegt_Redirect(
                $wp_customize, 'almaira_shop_footer_col1_social_media_redirect', array(
                    'section'      => 'almaira-shop-above-footer',
                    'button_text'  => esc_html__( 'Go To Social Media', 'almaira-shop' ),
                    'button_class' => 'focus-customizer-social_media-redirect-col1',  
                )
            )
        );
} 
/***************************************/
// col2
/***************************************/
$wp_customize->add_setting('almaira_shop_above_footer_col2_set',array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'almaira_shop_sanitize_select',
    ));
$wp_customize->add_control( 'almaira_shop_above_footer_col2_set',array(
        'settings' => 'almaira_shop_above_footer_col2_set',
        'label'   => __('Column 2','almaira-shop'),
        'section' => 'almaira-shop-above-footer',
        'type'    => 'select',
        'choices'    => array(
        'none'                 => __('None','almaira-shop'),
        'text'             => __('Text','almaira-shop'),
        'menu'                 => __('Menu','almaira-shop'),
        'widget'                 => __('Widget','almaira-shop'),
        'social'             => __('Social Media','almaira-shop'),     
        ),
    ));
//col2-text/html
$wp_customize->add_setting('almaira_shop_above_footer_col2_texthtml', array(
            'default'           =>__('Add your content here','almaira-shop'),
            'capability'        => 'edit_theme_options',
            'sanitize_callback' =>'almaira_shop_sanitize_text',
            'transport'         => 'postMessage',
        )
    );
    $wp_customize->add_control('almaira_shop_above_footer_col2_texthtml', array(
            'type'        => 'text',
            'section'     => 'almaira-shop-above-footer',
            'label'    => __('Text', 'almaira-shop'),
            'settings' => 'almaira_shop_above_footer_col2_texthtml',
        )
    );
// col2 widget redirection
if (class_exists('Almaira_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'almaira_shop_above_footer_col2_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Almaira_Shop_Widegt_Redirect(
                $wp_customize,'almaira_shop_above_footer_col2_widget_redirect', array(
                    'section'      => 'almaira-shop-above-footer',
                    'button_text'  => esc_html__( 'Go To Widget', 'almaira-shop' ),
                    'button_class' => 'focus-customizer-widget-redirect-col2',  
                )
            )
        );
}    
// col2 menu redirection
if (class_exists('Almaira_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'almaira_shop_above_footer_col2_menu_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Almaira_Shop_Widegt_Redirect(
                $wp_customize,'almaira_shop_above_footer_col2_menu_redirect', array(
                    'section'      => 'almaira-shop-above-footer',
                    'button_text'  => esc_html__( 'Go To Menu', 'almaira-shop' ),
                    'button_class' => 'focus-customizer-menu-redirect-col2',  
                )
            )
        );
}    
// col2 social media redirection
if (class_exists('Almaira_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'almaira_shop_above_footer_col2_social_media_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Almaira_Shop_Widegt_Redirect(
                $wp_customize, 'almaira_shop_above_footer_col2_social_media_redirect', array(
                    'section'      => 'almaira-shop-above-footer',
                    'button_text'  => esc_html__( 'Go To Social Media', 'almaira-shop' ),
                    'button_class' => 'focus-customizer-social_media-redirect-col2',  
                )
            )
        );
} 
/****************************/
// common option
/****************************/
if ( class_exists( 'Almaira_Shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'almaira_shop_abve_ftr_hgt', array(
                'sanitize_callback' => 'almaira_shop_sanitize_range_value',
                'default'           => '30',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_abve_ftr_hgt', array(
                    'label'       => esc_html__( 'Height', 'almaira-shop' ),
                    'section'     => 'almaira-shop-above-footer',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 30,
                        'max'  => 1000,
                        'step' => 1,
                    ),
                )
        )
);
}
// above bottom-border
if ( class_exists( 'Almaira_Shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'almaira_shop_abv_ftr_botm_brd', array(
                'sanitize_callback' => 'almaira_shop_sanitize_range_value',
                'default'           => '1',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_abv_ftr_botm_brd', array(
                    'label'       => esc_html__( 'Bottom Border', 'almaira-shop' ),
                    'section'     => 'almaira-shop-above-footer',
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
 $wp_customize->add_setting('almaira_shop_above_frt_brdr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'almaira_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Almaira_Shop_Customizer_Color_Control($wp_customize,'almaira_shop_above_frt_brdr_clr', array(
        'label'      => __('Border Color', 'almaira-shop' ),
        'section'    => 'almaira-shop-above-footer',
        'settings'   => 'almaira_shop_above_frt_brdr_clr',
    ) ) 
 );  
/****************/
//doc link
/****************/
$wp_customize->add_setting('almaira_shop_abv_footer_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_abv_footer_more',
            array(
        'section'     => 'almaira-shop-above-footer',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#above-footer',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
        'priority'   =>30,
    )));