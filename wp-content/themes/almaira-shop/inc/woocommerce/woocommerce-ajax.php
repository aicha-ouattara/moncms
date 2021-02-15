<?php
/**
 * Perform WooCommerce function with Ajax
 *
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
add_action( 'wp_ajax_almaira_shop_product_remove', 'almaira_shop_product_remove' );
add_action( 'wp_ajax_nopriv_almaira_shop_product_remove', 'almaira_shop_product_remove' );
function almaira_shop_product_remove(){
    global $woocommerce;
    $cart = $woocommerce->cart;
    foreach ($woocommerce->cart->get_cart() as $cart_item_key => $cart_item){
    if($cart_item['product_id'] == $_POST['product_id'] ){
        // Remove product in the cart using  cart_item_key.
        $cart->remove_cart_item($cart_item_key);
        woocommerce_mini_cart();
        exit();
      }
    }
  die();
}

function almaira_shop_product_count_update(){
   global $woocommerce; 
  ?>
    <?php echo esc_html($woocommerce->cart->cart_contents_count); ?>
<?php 
  die();
}
add_action( 'wp_ajax_almaira_shop_product_count_update', 'almaira_shop_product_count_update' );
add_action( 'wp_ajax_nopriv_almaira_shop_product_count_update', 'almaira_shop_product_count_update' );
/**
 * Live autocomplete search feature.
 *
 * @since 1.0.0
 */
function almaira_shop_search_site(){
   $results = new WP_Query( array(
    'post_type'     => 'product',
    'post_status'   => 'publish',
    'nopaging'      => true,
    'posts_per_page'=> 100,
    's'             => $_POST['match'],
  ) );
  $items = array();
  if ( !empty( $results->posts ) ) {
    foreach ( $results->posts as $result ) {
     $items[] = $result->post_title;
    }
  }
 wp_send_json_success( $items );
}
add_action( 'wp_ajax_almaira_shop_search_site',        'almaira_shop_search_site' );
add_action( 'wp_ajax_nopriv_almaira_shop_search_site', 'almaira_shop_search_site' );