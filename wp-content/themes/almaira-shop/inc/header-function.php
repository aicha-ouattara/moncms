<?php 
/**
 * Header Function for  Almaira Shop theme.
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
/**************************************/
//Top Header function
/**************************************/
if ( ! function_exists( 'almaira_shop_top_header_markup' ) ){	
function almaira_shop_top_header_markup(){ ?>
<?php 
$almaira_shop_above_header_layout     = get_theme_mod( 'almaira_shop_above_header_layout','abv-none');
$almaira_shop_above_header_col1_set   = get_theme_mod( 'almaira_shop_above_header_col1_set','text');
$almaira_shop_above_header_col2_set   = get_theme_mod( 'almaira_shop_above_header_col2_set','text');
?>  
<div class="top-header">
	<div class="top-header-bar">
	     <div class="container">
	     	<div class="top-header-container">
           <?php if($almaira_shop_above_header_layout=='abv-two'):?> 
            <div class="top-header-col1">
              <?php almaira_shop_top_header_conetnt_col1($almaira_shop_above_header_col1_set); ?>
             </div>
             <div class="top-header-col2">
                    <?php almaira_shop_top_header_conetnt_col2($almaira_shop_above_header_col2_set); ?>
               </div>       
             <?php endif;?>
          </div>
		  </div>
	 </div>	
</div>
<?php	}
}
add_action( 'almaira_shop_top_header', 'almaira_shop_top_header_markup' );

/**
 * Function to get mian Header
 */
if ( ! function_exists( 'almaira_shop_main_header_markup' ) ){
function almaira_shop_main_header_markup(){ ?>	
<?php $almaira_shop_main_header_layout = get_theme_mod( 'almaira_shop_main_header_layout','mhdrleft'); 
$almaira_shop_mobile_menu_open = get_theme_mod('almaira_shop_mobile_menu_open','overcenter');?>
<div class="main-header <?php echo esc_attr($almaira_shop_main_header_layout);?>">
	     	<div class="main-header-bar two">
	     		<div class="container">
	     			<div class="main-header-container">
             
		                <div class="main-header-col1">
		                  <?php almaira_shop_logo();?>
                    </div>
           
        <div class="main-header-col2">
        <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <button type="button" class="menu-btn" id="menu-btn">
                <div class="btn">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </div>
               <div class="text">
                
                </div>
           
            </button>
        </div>
        <div class="sider main <?php echo esc_attr($almaira_shop_mobile_menu_open);?> almaira-shop-menu-hide">
        <div class="sider-inner">
        	<?php if( has_nav_menu('almaira-shop-main-menu' )){ 
        		almaira_shop_main_nav_menu();
              }else{
                  wp_page_menu(
                    array( 
                 'items_wrap'  => '<ul class="almaira-shop-menu" data-menu-style="horizontal">%3$s</ul>',
                 'link_before' => '<span>',
                 'link_after'  => '</span>'));
             }?>
        </div>
        </div>
        </nav>
    </div><!-- col-2-->
    <?php almaira_shop_header_icon(); ?>
    <!-- col-3-->
		            </div>
		        </div>
		    </div>
		</div> 				
<?php	}
}
add_action( 'almaira_shop_main_header', 'almaira_shop_main_header_markup' );


/**************************************/
//logo & site title function
/**************************************/
if ( ! function_exists( 'almaira_shop_logo' ) ){
function almaira_shop_logo(){
$title_disable          = get_theme_mod( 'title_disable','enable');
$tagline_disable        = get_theme_mod( 'tagline_disable','enable');
$description            = get_bloginfo( 'description', 'display' );?>
<div class="thunk-logo">
<?php almaira_shop_custom_logo();?>
</div>
<?php 
if($title_disable!='' || $tagline_disable!=''){
if($title_disable!=''){	
?>
<div class="site-title"><p>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
</p>
</div>
<?php
}
if($tagline_disable!=''){
if( $description || is_customize_preview() ):?>
<div class="site-description">
   <p><?php echo esc_html($description); ?></p>
</div>
<?php endif;
      }
    } 
  }
}
//************************************/
// top header col1 function
//************************************/
if ( ! function_exists( 'almaira_shop_top_header_conetnt_col1' ) ){ 
function almaira_shop_top_header_conetnt_col1($content){ 
$almaira_shop_mobile_menu_open = get_theme_mod('almaira_shop_mobile_menu_open','overcenter');?>
<?php if($content=='text'){?>
<div class='content-html'>
  <?php echo esc_html(get_theme_mod('almaira_shop_col1_texthtml',  __( 'Add your content here', 'almaira-shop' )));?>
</div>
<?php }elseif($content=='menu'){
if ( has_nav_menu('almaira-shop-above-menu' ) ){?>
<!-- Menu Toggle btn-->
     <nav> 
        <div class="menu-toggle">
            <button type="button" class="menu-btn" id="menu-btn-abv">
              <div class="btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </div>
            </button>
        </div>
        <div class="sider above almaira-shop-menu-hide <?php echo esc_attr($almaira_shop_mobile_menu_open);?>">
        <div class="sider-inner">
        <?php almaira_shop_abv_nav_menu();?>
        </div>
      </div>
    </nav>
<?php 
  }else{?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign Above header menu', 'almaira-shop' );?></a>
 <?php }
}
elseif($content=='widget'){?>
  <div class="content-widget">
    <?php if( is_active_sidebar('top-header-widget-col1' ) ){
    dynamic_sidebar('top-header-widget-col1' );
     }else{?>
      <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'almaira-shop' );?></a>
     <?php }?>
     </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo almaira_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return true;
}?>
<?php }
}
//************************************/
// top header col2 function
//************************************/
if ( ! function_exists( 'almaira_shop_top_header_conetnt_col2' ) ){ 
function almaira_shop_top_header_conetnt_col2($content){ 
$almaira_shop_mobile_menu_open = get_theme_mod( 'almaira_shop_mobile_menu_open','overcenter');?>
<?php if($content=='text'){?>
<div class='content-html'>
  <?php echo esc_html(get_theme_mod('almaira_shop_col2_texthtml',  __( 'Add your content here', 'almaira-shop' )));?>
</div>
<?php }elseif($content=='menu'){
  if ( has_nav_menu('almaira-shop-above-menu' ) ){?>
<!-- Menu Toggle btn-->
        <nav> 
        <div class="menu-toggle">
            <button type="button" class="menu-btn" id="menu-btn-abv">
                <div class="btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </div>
            </button>
        </div>
        <div class="sider above almaira-shop-menu-hide <?php echo esc_attr($almaira_shop_mobile_menu_open);?>">
        <div class="sider-inner">
        <?php almaira_shop_abv_nav_menu();?>
        </div>
      </div>
    </nav>
<?php 
 }else{?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign Above header menu', 'almaira-shop' );?></a>
 <?php }
}
elseif($content=='widget'){?>
  <div class="content-widget">
    <?php if( is_active_sidebar('top-header-widget-col2' ) ){
    dynamic_sidebar('top-header-widget-col2' );
     }else{?>
      <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'almaira-shop' );?></a>
     <?php }?>
     </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo almaira_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return true;
}?>
<?php }
}
/**********************************/
// header icon function
/**********************************/
function almaira_shop_header_icon(){
$sch_icon = get_theme_mod('almaira_shop_main_header_search_disable',true);
$whs_icon = get_theme_mod('almaira_shop_main_header_whislist_disable',true);
$acc_icon = get_theme_mod('almaira_shop_main_header_account_disable',true);
$crt_icon = get_theme_mod('almaira_shop_main_header_cart_disable',true);
$canvas_icon = get_theme_mod('almaira_shop_main_header_off_canvas_sidebar_disable');
if($sch_icon == true || $whs_icon == true || $acc_icon == true || $crt_icon == true || $canvas_icon == true):?>
<div class="main-header-col3">
<div class="header-icon">
      <?php if(class_exists( 'WooCommerce' ) && $sch_icon == true){?>
       <span><a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a></span>
                 <?php almaira_shop_product_search_box(); ?>
     <?php }
    if( class_exists( 'YITH_WCWL' )){
      if($whs_icon == true){
        
        ?>
       <span><a href="<?php echo esc_url( almaira_shop_whishlist_url() ); ?>"><i  class="fa fa-heart-o" aria-hidden="true"></i></a></span>
     <?php } }if($acc_icon == true){
        almaira_shop_account();
       } if($crt_icon == true){?>
       <span>
       <?php if(class_exists( 'WooCommerce' )){ 
       do_action( 'almaira_cart_count' );
       do_action( 'almaira_shop_woo_cart' ); } ?>
       </span>
     <?php }
   ?>
</div>
</div>
<?php endif; } 

function almaira_shop_product_search_box(){ ?>
                <div id="search-overlay" class="block">
                    <div class="centered">
                      
                       <div id='search-box' class="wow thmkfadeInDown" data-wow-duration="1s">
                       <form action='<?php echo esc_url( home_url( '/'  ) ); ?>' id='search-form' class="woocommerce-product-search" method='get' target='_top'>
<?php 
if ( class_exists( 'WooCommerce' ) ):
$args = array(
   'taxonomy' => 'product_cat',
   'name' => 'product_cat',
   'value_field' => 'slug',
   'class' => 'something',
   'show_option_all'   => 'All',
);
wp_dropdown_categories( $args );
endif;
?>
   <input id='search-text' name='s' placeholder='<?php echo esc_attr(get_theme_mod('search_box_text',esc_attr_x( 'Search&hellip;', 'placeholder', 'almaira-shop' ))); ?>' class="form-control search-autocomplete" value='<?php echo get_search_query(); ?>' type='text' title='<?php echo esc_attr_x( 'Search for:', 'label', 'almaira-shop' ); ?>' />
                        <button id='search-button' value="<?php echo esc_attr_x( 'Submit','submit button', 'almaira-shop' ); ?>" type='submit'>                     
                          <i id="search-btn1" class="fa fa-search"></i>
                        </button>
                        <input type="hidden" name="post_type" value="product" />
                       </form>
                   </div>
                   <span tabindex="0" id="close-btn" class="search-close-btn"></span>
                  </div>
                </div>
<?php }

/***************************/
//MINBAR HEADERLAYOUT
/***************************/
if ( ! function_exists( 'almaira_shop_minbar_header_markup' ) ){
function almaira_shop_minbar_header_markup(){ 
$almaira_shop_main_header_layout = get_theme_mod('almaira_shop_main_header_layout'); 
if($almaira_shop_main_header_layout=='mhdminbarleft'){
$barlayout='leftminbar';
}else{
$barlayout='rightminbar';    
} ?>
<div class="min-bar-header <?php echo esc_attr($barlayout);?>">
    <div class="min-bar-header-content">
    <div class="container">
      <div class="min-bar-container">
        <div class="min-bar-col1">
            <div class="bar-menu-toggle">
            <button type="button" class="menu-btn" id="bar-menu-btn">
            <span class="menu-icon-inner"></span>
            </button>
            </div>
       </div>
          <?php almaira_shop_header_icon(); ?>
             <div class="min-bar-col2">
                <?php almaira_shop_logo();?>
             </div>
      </div>
        </div>
     </div>
</div>
<?php } }
//PRELOADER
if( ! function_exists( 'almaira_shop_preloader' ) ){
function almaira_shop_preloader(){
 if (( isset( $_REQUEST['action'] ) && 'elementor' == $_REQUEST['action'] ) ||
                isset( $_REQUEST['elementor-preview'] )){
      return;
 }else{    
    $almaira_shop_preloader_enable = get_theme_mod('almaira_shop_preloader_enable',false);
    $almaira_shop_preloader_image_upload = get_theme_mod('almaira_shop_preloader_image_upload',ALMAIRA_SHOP_PRELOADER);
    if($almaira_shop_preloader_enable==true){ ?>
    <div class="almaira_overlayloader">
    <div class="almaira-shop-pre-loader"><img src="<?php echo esc_url($almaira_shop_preloader_image_upload);?>"></div>
    </div> 
   <?php }
   }
 }
}