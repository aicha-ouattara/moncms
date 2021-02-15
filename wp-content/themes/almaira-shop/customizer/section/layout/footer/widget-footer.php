<?php
/**
 * Footer Options for  Almaira Shop Theme.
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
/******************/
//Widegt footer
/******************/
if(class_exists('Almaira_Shop_WP_Customize_Control_Radio_Image')){
               $wp_customize->add_setting(
               'almaira_shop_bottom_footer_widget_layout', array(
               'default'           => 'ft-wgt-none',
               'sanitize_callback' => 'almaira_shop_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customize_Control_Radio_Image(
                $wp_customize, 'almaira_shop_bottom_footer_widget_layout', array(
                    'label'    => esc_html__( 'Layout','almaira-shop'),
                    'section'  => 'almaira-shop-widget-footer',
                    'choices'  => array(
                       'ft-wgt-none'   => array(
                            'url' => ALMAIRA_SHOP_FOOTER_WIDGET_LAYOUT_NONE,
                        ),
                        'ft-wgt-one-none'   => array(
                            'url' => ALMAIRA_SHOP_FOOTER_WIDGET_LAYOUT_1,
                        ),
                        'ft-wgt-two-none' => array(
                            'url' => ALMAIRA_SHOP_FOOTER_WIDGET_LAYOUT_2,
                        ),
                        'ft-wgt-three-none' => array(
                            'url' => ALMAIRA_SHOP_FOOTER_WIDGET_LAYOUT_3,
                        ),
                        'ft-wgt-four' => array(
                            'url' => ALMAIRA_SHOP_FOOTER_WIDGET_LAYOUT_4,
                        ),
                        'ft-wgt-five-none' => array(
                            'url' => ALMAIRA_SHOP_FOOTER_WIDGET_LAYOUT_5,
                        ),
                        'ft-wgt-six-none' => array(
                            'url' => ALMAIRA_SHOP_FOOTER_WIDGET_LAYOUT_6,
                        ),
                        'ft-wgt-seven-none' => array(
                            'url' => ALMAIRA_SHOP_FOOTER_WIDGET_LAYOUT_7,
                        ),
                        'ft-wgt-eight-none' => array(
                            'url' => ALMAIRA_SHOP_FOOTER_WIDGET_LAYOUT_8,
                        ),
                    ),
                )
            )
        );
    } 
/******************************/
/* Widget Redirect
/****************************/
if (class_exists('Almaira_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'almaira_shop_bottom_footer_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Almaira_Shop_Widegt_Redirect(
                $wp_customize, 'almaira_shop_bottom_footer_widget_redirect', array(
                    'section'      => 'almaira-shop-widget-footer',
                    'button_text'  => esc_html__( 'Go To Widget', 'almaira-shop' ),
                    'button_class' => 'focus-customizer-widget-redirect',  
                )
            )
        );
} 

/****************/
//doc link
/****************/
$wp_customize->add_setting('almaira_shop_widget_footer_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_widget_footer_more',
            array(
        'section'     => 'almaira-shop-widget-footer',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#widget-footer',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
        'priority'   =>30,
    )));