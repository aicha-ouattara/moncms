<?php 
/**
 * Perform all main WooCommerce configurations for this theme
 *
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
// If plugin - 'WooCommerce' not exist then return.
if ( ! class_exists( 'WooCommerce' ) ){
	   return;
}
if ( ! function_exists( 'is_plugin_active' ) ){
         require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

/*******************************/
/** Sidebar Add Cart Product **/
/*******************************/
if ( ! function_exists( 'almaira_shop_cart_total_item' ) ){
  /**
   * Cart Link
   * Displayed a link to the cart including the number of items present and the cart total
   */
 function almaira_shop_cart_total_item(){
   global $woocommerce; 
  ?>
  <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="cart-contents" >
    <i class="fa fa-shopping-basket"></i>
    <span class="cart-crl"><?php echo esc_html($woocommerce->cart->cart_contents_count); ?></span>
  </a>
  <?php }
}


if ( ! function_exists( 'almaira_shop_cart_count_product' ) ){
  function almaira_shop_cart_count_product(){
  
       almaira_shop_cart_total_item();
    
  }
}
//cart view function
function almaira_shop_menu_cart_view($cart_view){
	global $woocommerce;
    $cart_view= almaira_shop_cart_count_product();
    return $cart_view;
}
add_action( 'almaira_cart_count','almaira_shop_menu_cart_view');

function almaira_shop_woo_cart_product(){
global $woocommerce;
?>
<div id="almaira-cart" class="almaira-cart">
<div class="almaira-quickcart-dropdown">
<?php 
woocommerce_mini_cart(); 
?>
</div>
</div>
    <?php
}
add_action( 'almaira_shop_woo_cart', 'almaira_shop_woo_cart_product' );
add_filter('woocommerce_add_to_cart_fragments', 'almaira_shop_add_to_cart_dropdown_fragment');
function almaira_shop_add_to_cart_dropdown_fragment( $fragments ){
   ob_start();
   ?>
   <div class="almaira-quickcart-dropdown">
       <?php woocommerce_mini_cart(); ?>
   </div>
   <?php $fragments['div.almaira-quickcart-dropdown'] = ob_get_clean();

   return $fragments;

}
add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_add_to_cart_count_fragments');
function woocommerce_add_to_cart_count_fragments( $fragments ){
   global $woocommerce;
   $productadd       = wp_kses_data($woocommerce->cart->cart_contents_count);
   ob_start();
   ?>

   <span class="cart-crl"><?php echo esc_html( $productadd); ?></span>

 <?php $fragments['span.cart-crl'] = ob_get_clean();

   return $fragments;

}
/***********************************************/
//Sort section Woocommerce category filter show
/***********************************************/
function almaira_shop_add_to_cart_url($product){
 $cart_url =  apply_filters( 'woocommerce_loop_add_to_cart_link',
    sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="button th-button %s %s"><span>%s</span></a>',
        esc_url( $product->add_to_cart_url() ),
        esc_attr( $product->get_id() ),
        esc_attr( $product->get_sku() ),
        esc_attr( isset( $quantity ) ? $quantity : 1 ),
        $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
        esc_html( $product->add_to_cart_text() )
    ),$product );
 return $cart_url;
}

/**********************************/
//Shop Product Markup
/**********************************/
if ( ! function_exists( 'almaira_shop_product_meta_start' ) ){
  /**
   * Thumbnail wrap start.
   */
  function almaira_shop_product_meta_start(){
    echo '<div class="thunk-product">';
  }
}
if ( ! function_exists( 'almaira_shop_product_meta_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function almaira_shop_product_meta_end(){

    echo '</div>';
  }
}
/**********************************/
//Shop Product Image Markup
/**********************************/
if ( ! function_exists( 'almaira_shop_product_image_start' ) ){
  /**
   * Thumbnail wrap start.
   */
  function almaira_shop_product_image_start(){
    echo '<div class="thunk-product-image">';
  }
}
if ( ! function_exists( 'almaira_shop_product_image_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function almaira_shop_product_image_end(){

    echo '</div>';
  }
}

if ( ! function_exists( 'almaira_shop_product_content_start' ) ){
  /**
   * Thumbnail wrap start.
   */
  function almaira_shop_product_content_start(){
    echo '<div class="thunk-product-content">';
  }
}
if ( ! function_exists( 'almaira_shop_product_content_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function almaira_shop_product_content_end(){

    echo '</div>';
  }
}
/**
* Shop customization.
*
* @return void
*/
add_action( 'woocommerce_before_shop_loop_item', 'almaira_shop_product_meta_start', 10);
add_action( 'woocommerce_after_shop_loop_item', 'almaira_shop_product_meta_end', 12 );

add_action( 'woocommerce_before_shop_loop_item_title', 'almaira_shop_product_content_start',20);
add_action( 'woocommerce_after_shop_loop_item_title', 'almaira_shop_product_content_end', 20 );
/****************/
// add to compare
/****************/
function almaira_shop_add_to_compare_fltr($pid=''){
        if( is_plugin_active('yith-woocommerce-compare/init.php') ){
          return '<div class="thunk-compare"><span class="compare-list"><div class="woocommerce product compare-button"><a href="'.home_url().'?action=yith-woocompare-add-product&id='.$pid.'" class="compare button" data-product_id="'.$pid.'" rel="nofollow">Compare</a></div></span></div>';

           }
        }
/**********************************************
//product section function End
 **********************************************/
add_action( 'woocommerce_before_shop_loop_item_title', 'almaira_shop_product_image_start', 0);
add_action( 'woocommerce_before_shop_loop_item_title', 'almaira_shop_product_image_end',10 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_show_product_sale_flash',1);
/**********************/
/** wishlist **/
/**********************/
function almaira_shop_whish_list(){
       if( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) ){
        return do_shortcode('[yith_wcwl_add_to_wishlist icon="fa fa-heart" browse_wishlist_text=""]' );
       }
 } 

function almaira_shop_whishlist_url(){
$wishlist_page_id =  get_option( 'yith_wcwl_wishlist_page_id' );
$wishlist_permalink = get_the_permalink( $wishlist_page_id );
return $wishlist_permalink ;
}
// shop almaira
/** My Account Menu **/
function almaira_shop_account(){
 if ( is_user_logged_in() ) {
  $return = '<span><a href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'"><i class="fa fa-user-o" aria-hidden="true"></i></a></span>';
  } 
 else {
  $return = '<span><a href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'"><i class="fa fa-lock" aria-hidden="true"></i></a></span>';
}
 echo $return;
 }
 // Plus Minus Quantity Buttons @ WooCommerce Single Product Page
add_action( 'woocommerce_before_add_to_cart_quantity', 'almaira_shop_display_quantity_plus',10,2 );
function almaira_shop_display_quantity_plus(){
    echo '<div class="almaira-quantity"><button type="button" class="plus" >+</button>';
}
add_action( 'woocommerce_after_add_to_cart_quantity', 'almaira_shop_display_quantity_minus',10,2 );
function almaira_shop_display_quantity_minus(){
    echo '<button type="button" class="minus" >-</button></div>';
}
//Woocommerce: How to remove page-title at the home/shop page but not category pages
add_filter( 'woocommerce_show_page_title', 'not_a_shop_page' );
function not_a_shop_page() {
    return boolval(!is_shop());
}