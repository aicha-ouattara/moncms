<?php
/**
 * Footer Options for  Almaira Shop Theme.
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
 //col1-text/html
$wp_customize->add_setting('almaira_shop_footer_bottom_col1_texthtml', array(
             'default'           => __('Almaira Shop developed by ThemeHunk.','almaira-shop'),
            'capability'        => 'edit_theme_options',
            'sanitize_callback' =>'almaira_shop_sanitize_text',
            'transport'         => 'postMessage',
        )
    );
    $wp_customize->add_control('almaira_shop_footer_bottom_col1_texthtml', array(
            'type'        => 'text',
            'section'     => 'almaira-shop-bottom-footer',
             'label'    => __('Copyright Text', 'almaira-shop'),
            'settings' => 'almaira_shop_footer_bottom_col1_texthtml',
        )
    );