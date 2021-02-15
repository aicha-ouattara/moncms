<?php 
/**
 * Footer Function for  Almaira Shop theme.
 * 
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */

/**
 * Function to get above footer
 */
if ( ! function_exists( 'almaira_shop_top_footer_markup' ) ){ 
function almaira_shop_top_footer_markup(){ ?>
<?php 
$almaira_shop_above_footer_layout    = get_theme_mod( 'almaira_shop_above_footer_layout','ft-abv-none');
$almaira_shop_above_footer_col1_set  = get_theme_mod( 'almaira_shop_above_footer_col1_set','text');
$almaira_shop_above_footer_col2_set  = get_theme_mod( 'almaira_shop_above_footer_col2_set','text');
?>
<div class="top-footer">
      <div class="top-footer-bar <?php echo esc_attr($almaira_shop_above_footer_layout);?>">
           <div class="container">
            <div class="top-footer-container">
              
                 <?php if($almaira_shop_above_footer_layout=='ft-abv-two'):?>
                 <div class="top-footer-col1">
                  <?php almaira_shop_top_footer_conetnt_col1($almaira_shop_above_footer_col1_set); ?>
                 </div> 
                  <div class="top-footer-col2">
                    <?php almaira_shop_top_footer_conetnt_col2($almaira_shop_above_footer_col2_set); ?>
                  </div>
                 
                <?php endif;?> 
               </div>
           </div>
       </div>
</div>
<?php }
}
add_action( 'almaira_shop_top_footer', 'almaira_shop_top_footer_markup' );
/**
 * Function to get footer widget
 */
if ( ! function_exists( 'almaira_shop_footer_widget_markup' ) ){  
function almaira_shop_footer_widget_markup(){ ?>
<?php 
$almaira_shop_bottom_footer_widget_layout  = get_theme_mod( 'almaira_shop_bottom_footer_widget_layout','ft-wgt-none');
?>  
<div class="widget-footer">
      <div class="widget-footer-bar <?php echo esc_attr($almaira_shop_bottom_footer_widget_layout);?>">
           <div class="container">
            <div class="widget-footer-container">
                      <?php if($almaira_shop_bottom_footer_widget_layout=='ft-wgt-four'): ?>
                        <div class="widget-footer-col1">
                  <?php if( is_active_sidebar('footer-1' ) ){
                                       dynamic_sidebar('footer-1' );
                             }else{?>
                           <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'almaira-shop' );?></a>
                          <?php }?>
                      </div>
                 <div class="widget-footer-col2"><?php if( is_active_sidebar('footer-2' ) ){
                                       dynamic_sidebar('footer-2' );
                             }else{?>
                           <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'almaira-shop' );?></a>
                          <?php }?>
                      </div>
                 <div class="widget-footer-col3"><?php if( is_active_sidebar('footer-3' ) ){
                                       dynamic_sidebar('footer-3' );
                             }else{?>
                           <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'almaira-shop' );?></a>
                          <?php }?>
                      </div>
                 <div class="widget-footer-col4"><?php if( is_active_sidebar('footer-4' ) ){
                                       dynamic_sidebar('footer-4' );
                             }else{?>
                           <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'almaira-shop' );?></a>
                          <?php }?>
                      </div>
                <?php endif;?>
            </div>
      </div>
  </div>
</div>
<?php }
}
add_action( 'almaira_shop_widget_footer', 'almaira_shop_footer_widget_markup' );
/**
 * Function to get bottom footer
 */
add_action( 'almaira_shop_bottom_footer', 'almaira_shop_bottom_footer_markup_lite' );
function almaira_shop_bottom_footer_markup_lite(){
 ?>
<div class="bottom-footer">
      <div class="bottom-footer-bar">
           <div class="container">
            <div class="bottom-footer-container">
                 <div class="bottom-footer-col1 th-ftrdescription"> 
                 <?php
  $bottom_footer_cont = get_theme_mod('almaira_shop_footer_bottom_col1_texthtml','');
          if ($bottom_footer_cont != '') {
            echo esc_html($bottom_footer_cont);
          }
          else{
            $allowed_html = array(
                                  'a' => array(
                                  'href' => array(),
                                  'title' => array(),
                                  'target' => array()
                              ),
                              'br' => array(),
                              'em' => array(),
                              'strong' => array(),
                          );
                $url = "https://themehunk.com";
              echo  sprintf( 
                wp_kses( __( 'Almaira Shop developed by <a href="%s" target="_blank">ThemeHunk</a>', 'almaira-shop' ), $allowed_html), esc_url( $url ) );
          }
                 ?> 
                 </div>
               </div>
             </div>
           </div>
 </div>
<?php } 
//************************************/
// Footer top col1 function
//************************************/
if ( ! function_exists( 'almaira_shop_top_footer_conetnt_col1' ) ){ 
function almaira_shop_top_footer_conetnt_col1($content){ ?>
<?php if($content=='text'){?>
<div class='content-html'>
<?php echo esc_html(get_theme_mod('almaira_shop_footer_col1_texthtml',  __( 'Add your content here', 'almaira-shop' )));?>
</div>
<?php }
elseif($content=='menu'){
  if ( has_nav_menu('almaira-shop-footer-menu' ) ){?>
<?php 
  almaira_shop_footer_nav_menu();
 }else{?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign footer menu', 'almaira-shop' );?></a>
 <?php }
}elseif($content=='widget'){?>
  <div class="content-widget">
    <?php if( is_active_sidebar('footer-top-first' ) ){
    dynamic_sidebar('footer-top-first' );
     }else{?>
      <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'almaira-shop' );?></a>
     <?php }?>
 </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo almaira_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return false;
}?>
<?php }
}
//************************************/
// Footer top col2 function
//************************************/
if ( ! function_exists( 'almaira_shop_top_footer_conetnt_col2' ) ){ 
function almaira_shop_top_footer_conetnt_col2($content){ ?>
<?php if($content=='text'){?>
<div class='content-html'>
  <?php echo esc_html(get_theme_mod('almaira_shop_above_footer_col2_texthtml',  __( 'Add your content here', 'almaira-shop' )));?>
</div>
<?php }elseif($content=='menu'){
  if ( has_nav_menu('almaira-shop-footer-menu' ) ){?>
<?php 
  almaira_shop_footer_nav_menu();
 }else{?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign footer menu', 'almaira-shop' );?></a>
 <?php }
}elseif($content=='widget'){?>
  <div class="content-widget">
    <?php if( is_active_sidebar('footer-top-second' ) ){
    dynamic_sidebar('footer-top-second' );
     }else{?>
      <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'almaira-shop' );?></a>
     <?php }?>
     </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo almaira_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return false;
}?>
<?php }
}