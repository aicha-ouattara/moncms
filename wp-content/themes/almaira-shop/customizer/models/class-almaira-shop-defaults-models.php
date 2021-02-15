<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
/**
 * This file stores all functions that return default content.
 *
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
/**
 * Class Almaira_Shop_Defaults_Models
 *
 * @package Almaira Shop
 */
class Almaira_Shop_Defaults_Models extends Almaira_Shop_Singleton {
/**
	 * Get default values for features section.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function get_slider_default() {
		$default = array(
			array(
						'image_url' =>	ALMAIRA_SHOP_THEME_URI . '/images/almaira-slider-image.png',

						'title'     => esc_html__( 'Shaun Matthews', 'almaira-shop' ),
						
						'subtitle'  => esc_html__( 'Find New Latest Collection', 'almaira-shop' ),
						'text'      => esc_html__( 'Shop Now', 'almaira-shop' ),
						'link'       => '#',

					),
			
			);
		return $default;
	}

}