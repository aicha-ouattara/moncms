<?php
/**
 * Template Name: Homepage Template
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
get_header(); ?>
<div class="thunk-frontpage-wrapper">
<?php
if( shortcode_exists( 'almaira-shop' ) ){
do_shortcode("[almaira-shop section='almaira_shop_show_frontpage']");
}
?>
</div> 
<?php
get_footer();