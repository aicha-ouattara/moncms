<?php 
/**
 * View Pro Option.
 *
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
$wp_customize->add_setting('almaira_shop_pro_one', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_one',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Drag & Drop Section Ordering', 'almaira-shop' ),
        'priority'   =>1,
    )));
$wp_customize->add_setting('almaira_shop_pro_ntn', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_ntn',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Advance Typography', 'almaira-shop' ),
        'priority'   =>2
    )));
$wp_customize->add_setting('almaira_shop_pro_thr', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_thr',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Off Canvas Filter', 'almaira-shop' ),
        'priority'   =>3
    )));


$wp_customize->add_setting('almaira_shop_pro_fitn', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_fitn',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Full Color Control', 'almaira-shop' ),
        'priority'   =>4
    )));

$wp_customize->add_setting('almaira_shop_pro_two', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_two',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'More Header Layout', 'almaira-shop' ),
        'priority'   =>5,
    )));
$wp_customize->add_setting('almaira_shop_pro_five', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_five',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'More Footer Layout', 'almaira-shop' ),
        'priority'   =>6,
    )));


$wp_customize->add_setting('almaira_shop_pro_sixtn', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_sixtn',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'About Us Template', 'almaira-shop' ),
        'priority'   =>7
    )));
$wp_customize->add_setting('almaira_shop_pro_egtn', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_egtn',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Team Template', 'almaira-shop' ),
        'priority'   =>8
    )));


$wp_customize->add_setting('almaira_shop_pro_sevtn', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_sevtn',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'FAQ Template', 'almaira-shop' ),
        'priority'   =>9
    )));

$wp_customize->add_setting('almaira_shop_pro_eight', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_eight',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Brand Section', 'almaira-shop' ),
        'priority'   =>10
    )));

$wp_customize->add_setting('almaira_shop_pro_seven', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_seven',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Service Section', 'almaira-shop' ),
        'priority'   =>11
    )));


$wp_customize->add_setting('almaira_shop_pro_nine', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_nine',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Four Custom Section', 'almaira-shop' ),
        'priority'   =>12
    )));

$wp_customize->add_setting('almaira_shop_pro_ten', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_ten',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Product Slider Widget', 'almaira-shop' ),
        'priority'   =>12
    )));
$wp_customize->add_setting('almaira_shop_pro_elv', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_elv',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Category Product Slider Widget', 'almaira-shop' ),
        'priority'   =>13
    )));

$wp_customize->add_setting('almaira_shop_pro_tlw', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_tlw',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Floating Cart', 'almaira-shop' ),
        'priority'   =>14
    )));
$wp_customize->add_setting('almaira_shop_pro_six', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_six',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Fixed Footer', 'almaira-shop' ),
        'priority'   =>15,
    )));

$wp_customize->add_setting('almaira_shop_pro_frty', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_frty',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Loadmore & Infinite Scroll', 'almaira-shop' ),
        'priority'   =>16
    )));

$wp_customize->add_setting('almaira_shop_pro_twnty', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_twnty',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Copyright', 'almaira-shop' ),
        'priority'   =>17
    )));


$wp_customize->add_setting('almaira_shop_pro_three', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_pro_three',
            array(
        'section'     => 'almaira-shop-view-pro',
        'type'        => 'pro-text',
        'label'       => esc_html__( 'Pro', 'almaira-shop' ),
        'description' => esc_html__( 'Header transparency', 'almaira-shop' ),
        'priority'   =>18,
    )));

$wp_customize->add_setting('almaira_shop_pro_get', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(
        new Almaira_Shop_Misc_Control(
            $wp_customize,
            'almaira_shop_pro_get',
            array(
                'section'   => 'almaira-shop-view-pro',
                'type'      => 'pro-link',
                'label'     => esc_html__( 'Get The Pro Version !', 'almaira-shop' ),
                'url'       => 'https://themehunk.com/almaira-pro/',
                'priority'   =>30,
            )
        )
);