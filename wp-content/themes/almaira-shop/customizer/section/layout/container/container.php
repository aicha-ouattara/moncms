<?php
/**
 * Container Options for  Almaira Shop Theme.
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
// default container
if(class_exists('Almaira_Shop_WP_Customize_Control_Radio_Image')){
        $wp_customize->add_setting(
            'almaira_shop_default_container', array(
                'default'           => 'fullwidth',
                'sanitize_callback' => 'almaira_shop_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new Almaira_Shop_WP_Customize_Control_Radio_Image(
                $wp_customize, 'almaira_shop_default_container', array(
                    'label'    => esc_html__( 'Container Layout', 'almaira-shop' ),
                    'section'  => 'almaira-shop-section-container-group',
                    'choices'  => array(
                       
                        'fullwidth'   => array(
                            'url' => ALMAIRA_SHOP_CONT_DEFLT_LAYOUT,
                        ),
                         'boxed'   => array(
                            'url' => ALMAIRA_SHOP_CONT_BOXED_LAYOUT,
                        ),
                             
                    ),
                    'priority'   =>1,
                )
            )
        );
} 
// Container Width
if ( class_exists( 'Almaira_Shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting( 'almaira_shop_conatiner_width', array(
        'sanitize_callback' => 'almaira_shop_sanitize_range_value',
        'default'           => '1400',
        'transport'         => 'postMessage',
        
        ));
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_conatiner_width', array(
        'label'       => esc_html__( 'Container Width', 'almaira-shop' ),
        'section'     => 'almaira-shop-section-container-group',
        'type'        => 'range-value',
        'input_attr'  => array(
        'min'  => 768,
        'max'  => 1920,
        'step' => 1,
        ),
        'priority'   =>2,
        )
   ));
// max-width
$wp_customize->add_setting( 'almaira_shop_conatiner_maxwidth', array(
        'sanitize_callback' => 'almaira_shop_sanitize_range_value',
        'default'           => '1200',
        'transport'         => 'postMessage',
        
        ));
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_conatiner_maxwidth', array(
        'label'       => esc_html__( 'Max Width', 'almaira-shop' ),
        'section'     => 'almaira-shop-section-container-group',
        'type'        => 'range-value',
        'input_attr'  => array(
        'min'  => 768,
        'max'  => 1920,
        'step' => 1,
        ),
        'priority'   =>3,
        )
   ));
$wp_customize->add_setting( 'almaira_shop_conatiner_top_btm', array(
        'sanitize_callback' => 'almaira_shop_sanitize_range_value',
        'default'           => '0',
        'transport'         => 'postMessage',
        
        ));
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_conatiner_top_btm', array(
        'label'       => esc_html__( 'Top/Bottom Margin', 'almaira-shop' ),
        'section'     => 'almaira-shop-section-container-group',
        'type'        => 'range-value',
        'input_attr'  => array(
        'min'  => 0,
        'max'  => 600,
        'step' => 1,
        ),
        'priority'   =>3,
        )
   ));

}


/****************/
//doc link
/****************/
$wp_customize->add_setting('almaira_shop_container_page_doc_learn_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_container_page_doc_learn_more',
            array(
        'section'     => 'almaira-shop-section-container-group',
         'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#container-setting',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
         'priority'   =>50,
    )));
