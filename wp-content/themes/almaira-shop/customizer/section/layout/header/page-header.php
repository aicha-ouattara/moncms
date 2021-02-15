<?php
/**
 * Page Header Options for  Almaira Shop Theme.
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
$wp_customize->get_control( 'header_image' )->section = 'almaira-shop-page-header';
$wp_customize->get_control( 'header_image' )->priority = 1;

// Header image height
if ( class_exists( 'Almaira_Shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'almaira_shop_hdr_img_hgt', array(
                'sanitize_callback' => 'almaira_shop_sanitize_range_value',
                'default' => '500',
                'transport'         => 'postMessage',
                
            ));
$wp_customize->add_control(
            new Almaira_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'almaira_shop_hdr_img_hgt', array(
                    'label'       => esc_html__( 'Image Height', 'almaira-shop' ),
                    'section'     => 'almaira-shop-page-header',
                    'priority'       => 2,
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 1200,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
);
}

/****************/
//doc link
/****************/
$wp_customize->add_setting('almaira_shop_page_header_doc_learn_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_page_header_doc_learn_more',
            array(
        'section'     => 'almaira-shop-page-header',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#page-header',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
         'priority'   =>50,
 )));