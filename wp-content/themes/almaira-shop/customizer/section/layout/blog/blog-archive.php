<?php
/**
 *Blog Option
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
 /*******************/
//blog post content
/*******************/
    $wp_customize->add_setting('almaira_shop_blog_post_content', array(
        'default'        => 'excerpt',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'almaira_shop_sanitize_select',
    ));
    $wp_customize->add_control('almaira_shop_blog_post_content', array(
        'settings' => 'almaira_shop_blog_post_content',
        'label'   => __('Blog Post Content','almaira-shop'),
        'section' => 'almaira-shop-section-blog-group',
        'type'    => 'select',
        'choices'    => array(
        'full'   => __('Full Content','almaira-shop'),
        'excerpt' => __('Excerpt Content','almaira-shop'), 
        'nocontent' => __('No Content','almaira-shop'), 
        ),
         'priority'   =>9,
    ));
    // excerpt length
    $wp_customize->add_setting('almaira_shop_blog_expt_length', array(
			'default'           =>'30',
            'capability'        => 'edit_theme_options',
			'sanitize_callback' =>'almaira_shop_sanitize_number',
		)
	);
	$wp_customize->add_control('almaira_shop_blog_expt_length', array(
			'type'        => 'number',
			'section'     => 'almaira-shop-section-blog-group',
			'label'       => __( 'Excerpt Length', 'almaira-shop' ),
			'input_attrs' => array(
				'min'  => 0,
				'step' => 1,
				'max'  => 3000,
			),
             'priority'   =>10,
		)
	);
	// read more text
    $wp_customize->add_setting('almaira_shop_blog_read_more_txt', array(
			'default'           =>'Read More',
            'capability'        => 'edit_theme_options',
			'sanitize_callback' =>'almaira_shop_sanitize_text',
            'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control('almaira_shop_blog_read_more_txt', array(
			'type'        => 'text',
			'section'     => 'almaira-shop-section-blog-group',
			'label'       => __( 'Read More Text', 'almaira-shop' ),
			'settings' => 'almaira_shop_blog_read_more_txt',
             'priority'   =>11,
			
		)
	);
    /*********************/
    //blog post pagination
    /*********************/
   $wp_customize->add_setting('almaira_shop_blog_post_pagination', array(
        'default'        => 'num',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'almaira_shop_sanitize_select',
    ));
    $wp_customize->add_control('almaira_shop_blog_post_pagination', array(
        'settings' => 'almaira_shop_blog_post_pagination',
        'label'   => __('Post Pagination','almaira-shop'),
        'section' => 'almaira-shop-section-blog-group',
        'type'    => 'select',
        'choices' => array(
        'num'     => __('Numbered','almaira-shop'),
        'click'   => __('Load More (Pro)','almaira-shop'), 
        'scroll'  => __('Infinite Scroll (Pro)','almaira-shop'), 
        ),
        'priority'   =>13,
    ));
/****************/
//blog doc link
/****************/
$wp_customize->add_setting('almaira_shop_blog_arch_learn_more', array(
    'sanitize_callback' => 'almaira_shop_sanitize_text',
    ));
$wp_customize->add_control(new Almaira_Shop_Misc_Control( $wp_customize, 'almaira_shop_blog_arch_learn_more',
            array(
        'section'     => 'almaira-shop-section-blog-group',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/almaira-shop-theme/#blog-setting',
        'description' => esc_html__( 'To know more go with this', 'almaira-shop' ),
         'priority'   =>30,
    )));