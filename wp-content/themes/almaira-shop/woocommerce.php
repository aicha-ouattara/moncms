<?php
/**
 * The WooCommerce template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#woocommerce
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
if ( ! class_exists( 'WooCommerce' ) ){
    return;
}
get_header();
$singleproduct_layout = get_theme_mod('almaira_shop_single_product_sidebar_disable',true);
if((is_product() && $singleproduct_layout ==true) || is_product_category()){
     $layout = 'no-sidebar';
}elseif(is_shop()){
	 $shop_page_id = get_option( 'woocommerce_shop_page_id' );
	 $layout = get_post_meta( $shop_page_id, 'almaira_shop_sidebar_dyn', true );
}else{
	$layout = get_post_meta( get_queried_object_id(), 'almaira_shop_sidebar_dyn', true );
}
?>
<div id="content" class="site-content <?php echo esc_attr($layout); ?>">
<?php if(!is_product()){
	almaira_shop_get_header();
} ?>
	<div class="thunk-content-wrap">
	<div class="container">
		<div class="thunk-main-area">

		<div id="primary" class="main primary-content-area">
			<main id="main" class="site-main" role="main">
				<?php woocommerce_content(); ?>
			</main>
		</div> <!-- primary End -->
         <?php
         if( $layout != 'no-sidebar' ){
             get_sidebar();
           }
         ?>
	 </div> <!-- thunk-main-area End -->	
  </div> <!-- container End -->
</div><!-- thunk-content-wrap -->
</div> <!-- content End -->
<?php get_footer();?>
</div><!-- #page -->