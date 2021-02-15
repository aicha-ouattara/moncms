<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<?php 
$almaira_shop_above_header_layout  = get_theme_mod('almaira_shop_above_header_layout','abv-none');
$almaira_shop_main_header_layout   = get_theme_mod('almaira_shop_main_header_layout','mhdrleft');
?>
</head>
<body <?php body_class(array('thunk-body',esc_attr($almaira_shop_above_header_layout)));?>>
<?php wp_body_open();?>	
<?php if(get_theme_mod('almaira_shop_scroll_to_top_disable')==false):?>	
<input type="hidden" id="back-to-top" value="on"/>
<?php endif;?>
<?php almaira_shop_preloader();?>
<div id="page" class="almaira-site">
<header class="<?php echo esc_attr($almaira_shop_main_header_layout); ?>"> 
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'almaira-shop' ); ?></a>
<?php 
if($almaira_shop_above_header_layout!=='abv-none'):
almaira_shop_top_header();
endif;
almaira_shop_main_header();
?> 
</header>