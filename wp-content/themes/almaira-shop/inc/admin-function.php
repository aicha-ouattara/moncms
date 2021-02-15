<?php 
/**
 * Common Function for  Almaira Shop Theme.
 *
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
 if ( ! function_exists( 'almaira_shop_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 * Does nothing if the custom logo is not available.
 */
function almaira_shop_custom_logo(){
    if ( function_exists( 'the_custom_logo' ) ){
        the_custom_logo();
    }
}
endif;
/*********************/
// Menu 
/*********************/
function almaira_shop_header_menu_style(){
 $almaira_shop_main_header_layout = get_theme_mod('almaira_shop_main_header_layout');

        	$menustyle='horizontal';	
        	
        	return $menustyle;
		}
function almaira_shop_add_classes_to_page_menu( $ulclass ){
  return preg_replace( '/<ul>/', '<ul class="almaira-shop-menu" data-menu-style='.esc_attr(almaira_shop_header_menu_style()).'>', $ulclass, 1 );
}
add_filter( 'wp_page_menu', 'almaira_shop_add_classes_to_page_menu' );		
// This theme uses wp_nav_menu() in two locations.
	  function almaira_shop_custom_menu(){
		     register_nav_menus(array(
		    'almaira-shop-above-menu'       => esc_html__( 'Header Above Menu', 'almaira-shop' ),
			'almaira-shop-main-menu'        => esc_html__( 'Main', 'almaira-shop' ),
			'almaira-shop-footer-menu'  => esc_html__( 'Footer Menu', 'almaira-shop' ),
		) );
	  }
	  add_action( 'after_setup_theme', 'almaira_shop_custom_menu' );
	  // MAIN MENU
           function almaira_shop_main_nav_menu(){
              wp_nav_menu( array(
              'theme_location' => 'almaira-shop-main-menu', 
              'container'      => false, 
              'link_before'    =>'<span class="almaira-shop-menu-link">',
              'link_after'     => '</span>',
              'items_wrap'     => '<ul id="almaira-shop-menu" class="almaira-shop-menu" data-menu-style='.esc_attr(almaira_shop_header_menu_style()).'>%3$s</ul>',
             ));
         }
         // HEADER ABOVE MENU
         function almaira_shop_abv_nav_menu(){
              wp_nav_menu( array('theme_location' => 'almaira-shop-above-menu', 
              'container'   => false, 
              'link_before' => '<span class="almaira-shop-menu-link">',
              'link_after'  => '</span>',
              'items_wrap'  => '<ul id="almaira-above-menu" class="almaira-shop-menu" data-menu-style='.esc_attr(almaira_shop_header_menu_style()).'>%3$s</ul>',
             ));
         }
         // FOOTER TOP MENU
         function almaira_shop_footer_nav_menu(){
              wp_nav_menu( array('theme_location' => 'almaira-shop-footer-menu', 
              'container'   => false, 
              'link_before' => '<span class="almaira-shop-menu-link">',
              'link_after'  => '</span>',
              'items_wrap'  => '<ul id="almaira-footer-menu" class="almaira-bottom-menu">%3$s</ul>',
             ));
         }
         function almaira_shop_add_classes_to_page_menu_default( $ulclass ){
          return preg_replace( '/<ul>/', '<ul class="almaira-shop-menu" data-menu-style="horizontal">', $ulclass, 1 );
         }
add_filter( 'wp_page_menu', 'almaira_shop_add_classes_to_page_menu_default' );
/************************/
// description Menu
/************************/
function almaira_shop_nav_description( $item_output, $item, $depth, $args ){
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<p class="menu-item-description">' . esc_html($item->description) . '</p>' . $args->link_after . '</a>', $item_output );
    }
 
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'almaira_shop_nav_description', 10, 4 );

/*********************/
/**
 * Function to check if it is Internet Explorer
 */
if ( ! function_exists( 'almaira_shop_check_is_ie' ) ) :

	/**
	 * Function to check if it is Internet Explorer.
	 *
	 * @return true | false boolean
	 */
	function almaira_shop_check_is_ie() {

		$is_ie = false;

		$ua = htmlentities( $_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8' );
		if ( strpos( $ua, 'Trident/7.0' ) !== false ) {
			$is_ie = true;
		}

		return apply_filters( 'almaira_shop_check_is_ie', $is_ie );
	}

endif;
/**
 * ratia image
 */
if ( ! function_exists( 'almaira_shop_replace_header_attr' ) ) :
	/**
	 * Replace header logo.
	 *
	 * @param array  $attr Image.
	 * @param object $attachment Image obj.
	 * @param sting  $size Size name.
	 *
	 * @return array Image attr.
	 */
	function almaira_shop_replace_header_attr( $attr, $attachment, $size ){
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		if ( $custom_logo_id == $attachment->ID ){
			$attach_data = array();
			if ( ! is_customize_preview() ){
				$attach_data = wp_get_attachment_image_src( $attachment->ID, 'almaira-logo-size' );


				if ( isset( $attach_data[0] ) ) {
					$attr['src'] = $attach_data[0];
				}
			}

			$file_type      = wp_check_filetype( $attr['src'] );
			$file_extension = $file_type['ext'];
			if ( 'svg' == $file_extension ) {
				$attr['class'] = 'almaira-logo-svg';
			}
			$retina_logo = get_theme_mod( 'almaira_shop_header_retina_logo' );
			$attr['srcset'] = '';
			if ( apply_filters( 'almaira_main_header_retina', true ) && '' !== $retina_logo ) {
				$cutom_logo     = wp_get_attachment_image_src( $custom_logo_id, 'full' );
				$cutom_logo_url = $cutom_logo[0];

				if (almaira_shop_check_is_ie() ){
					// Replace header logo url to retina logo url.
					$attr['src'] = $retina_logo;
				}

				$attr['srcset'] = $cutom_logo_url . ' 1x, ' . $retina_logo . ' 2x';

			}
		}

		return apply_filters( 'almaira_shop_replace_header_attr', $attr );
	}

endif;

add_filter( 'wp_get_attachment_image_attributes', 'almaira_shop_replace_header_attr', 10, 3 );

/**
 * Return Theme options.
 */
if ( ! function_exists( 'almaira_shop_get_option' ) ){
	/**
	 * Return Theme options.
	 *
	 * @param  string $option       Option key.
	 * @param  string $default      Option default value.
	 * @param  string $deprecated   Option default value.
	 * @return Mixed               Return option value.
	 */
	function almaira_shop_get_option( $option, $default = '', $deprecated = '' ){

		if ( '' != $deprecated ) {
			$default = $deprecated;
		}
		$theme_options = Almaira_Theme_Options::get_options();
		/**
		 * Filter the options array for almaira Settings.
		 *
		 * @since  1.0.20
		 * @var Array
		 */
		$theme_options = apply_filters( 'almaira_shop_get_option_array', $theme_options, $option, $default );

		$value = ( isset( $theme_options[ $option ] ) && '' !== $theme_options[ $option ] ) ? $theme_options[ $option ] : $default;
         
		/**
		 * Dynamic filter almaira_get_option_$option.
		 * $option is the name of the Almaira Shop Setting, Refer Almaira Shop_Theme_Options::defaults() for option names from the theme.
		 *
		 * @since  1.0.20
		 * @var Mixed.
		 */
		return apply_filters( "almaira_shop_get_option_{$option}", $value, $option, $default );
	}
}
/********************************/
// responsive slider function
/*********************************/
if ( ! function_exists( 'almaira_shop_responsive_slider_funct' ) ) :
function almaira_shop_responsive_slider_funct($control_name,$function_name){
  $custom_css='';
           $control_value = get_theme_mod( $control_name );
           if ( empty( $control_value ) ){
                return '';
             }  
        if ( almaira_shop_is_json( $control_value ) ){
    $control_value = json_decode( $control_value, true );
    if ( ! empty( $control_value ) ) {

      foreach ( $control_value as $key => $value ){
        $custom_css .= call_user_func( $function_name, $value, $key );
      }
    }
    return $custom_css;
  }  
}
endif;
/********************************/
// responsive slider function add media query
/********************************/
if ( ! function_exists( 'almaira_shop_add_media_query' ) ) :
function almaira_shop_add_media_query( $dimension, $custom_css ){
  switch ($dimension){
      case 'desktop':
      $custom_css = '@media (min-width: 769px){' . $custom_css . '}';
      break;
      break;
      case 'tablet':
      $custom_css = '@media (max-width: 768px){' . $custom_css . '}';
      break;
      case 'mobile':
      $custom_css = '@media (max-width: 550px){' . $custom_css . '}';
      break;
  }

      return $custom_css;
}
endif;

/**************************/
// Dynamic Social Link
/**************************/
function almaira_shop_social_links(){
$social='';
$original_color = get_theme_mod('almaira_shop_social_original_color',false);
if($original_color==true){
$class_original='original-social-icon';
}else{
$class_original='';	
}
$social.='<ul class="social-icon ' .esc_attr($class_original). ' ">';
if($f_link = get_theme_mod('social_shop_link_facebook','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($f_link).'"><i class="fa fa-facebook"></i></a></li>';
endif;
if($g_link = get_theme_mod('social_shop_link_google','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($g_link).'"><i class="fa fa-google-plus"></i></a></li>';
endif;
if($l_link = get_theme_mod('social_shop_link_linkedin','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($l_link).'"><i class="fa fa-linkedin"></i></a></li>';
endif;
if($p_link = get_theme_mod('social_shop_link_pintrest','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($p_link).'"><i class="fa fa-pinterest"></i></a></li>';
endif;
if($t_link = get_theme_mod('social_shop_link_twitter','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($t_link).'"><i class="fa fa-twitter"></i></a></li>';
endif;
if($insta_link = get_theme_mod('social_shop_link_insta','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($insta_link).'"><i class="fa fa-instagram"></i></a></li>';
endif;
if($tum_link = get_theme_mod('social_shop_link_tumblr','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($tum_link).'"><i class="fa fa-tumblr"></i></a></li>';
endif;
if($y_link = get_theme_mod('social_shop_link_youtube','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($y_link).'"><i class="fa fa-youtube-play"></i></a></li>';
endif;
if($stumb_link = get_theme_mod('social_shop_link_stumbleupon','#')):
	$social.='<li><a target="_blank" href="'.esc_url($stumb_link).'">
	 <i class="fa fa-stumbleupon"></i></a></li>';
endif;
if($dribble_link = get_theme_mod('social_shop_link_dribble','#')):
	$social.='<li><a target="_blank" href="'.esc_url($dribble_link).'">
	 <i class="fa fa-dribbble"></i></a></li>';
endif;
$social.='</ul>';
return $social;
}
//layout switch classes
function almaira_shop_body_classes( $classes ){
		$almaira_shop_default_container = get_theme_mod('almaira_shop_default_container');
		if ('boxed' == $almaira_shop_default_container ){
			$classes[] = 'boxed-layout';
		}
		if ('fullwidth' == $almaira_shop_default_container ){
			$classes[] = 'fullwidth-layout';
		}
		
		$almaira_stick_main_header_active = get_theme_mod('almaira_stick_main_header_active');
		if($almaira_stick_main_header_active){
			$classes[] = 'alm-main-stick-hdr';
		}
		$almaira_shop_stick_animation = get_theme_mod( 'almaira_shop_stick_animation','fade' );
            if ( $almaira_shop_stick_animation == 'fade' ){
                $classes[] = 'alm-fade';
            }else{
                $classes[] = 'alm-slide';
         } 
       
        $almaira_shop_sticky_footer = get_theme_mod( 'almaira_shop_sticky_footer');
            if ( $almaira_shop_sticky_footer ){
                $classes[] = 'alm-stick-ftr';
            }
        $sch_icon = get_theme_mod('almaira_shop_main_header_search_disable',true);
        $whs_icon = get_theme_mod('almaira_shop_main_header_whislist_disable',true);
        $acc_icon = get_theme_mod('almaira_shop_main_header_account_disable',true);
        $crt_icon = get_theme_mod('almaira_shop_main_header_cart_disable',true);
        $canvas_icon = get_theme_mod('almaira_shop_main_header_off_canvas_sidebar_disable');
        if($sch_icon == false && $whs_icon == false && $acc_icon == false && $crt_icon == false && $canvas_icon == false){
                $classes[] = 'alm-no-header-icon';
        }
        if(class_exists( 'WooCommerce' ) ){
        	$classes[] = 'woocommerce';
        }
        $almaira_shop_color_scheme = get_theme_mod( 'almaira_shop_color_scheme','alm-light' );
        if ( $almaira_shop_color_scheme == 'alm-dark' ){

            	 $classes[] = 'almaira-shop-dark';
         }
         if ( $almaira_shop_color_scheme == 'alm-light' ){

            	 $classes[] = 'almaira-shop-light';
         }

        $almaira_shop_main_header_layout = get_theme_mod('almaira_shop_main_header_layout');
        $classes[] = $almaira_shop_main_header_layout;
		return $classes;
}
add_filter( 'body_class', 'almaira_shop_body_classes' );
/*********************/
//get header
/*********************/
function almaira_shop_get_header(){ ?>
		<div class="thunk-page-top-header">
		
		<div class="thunk-page-top-banner thunk-page-top-text">
		<div id="container" class="container site-container">
			<?php if(is_search()){?> 
              <h1 class="thunk-page-top-title entry-title">
              	<?php printf( __( 'Search Results for: %s', 'almaira-shop' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

			<?php }
			elseif (almaira_shop_is_blog() && !is_single() && !is_archive()){
				if( !(is_front_page()) ){
                    $our_title = get_the_title( get_option('page_for_posts', true) );
			echo '<h1 class="thunk-page-top-title entry-title">'.esc_html($our_title).'</h1>'; ?>
			<div class="thunk-breadcrumb-wrapper">
					<?php almaira_shop_breadcrumb();?>
				</div>

			<?php }else{
			echo'<h1 class="thunk-page-top-title entry-title">'.esc_html__('Blog','almaira-shop').'</h2>'; ?>
			<div class="thunk-breadcrumb-wrapper">
					<?php almaira_shop_breadcrumb();?>
				</div>
			<?php }
				 
			 }elseif(is_archive() && (class_exists( 'WooCommerce' ) && !is_shop())){
                   the_archive_title('<h1 class="thunk-page-top-title entry-title">','</h1>'); 
                   ?>
			<div class="thunk-breadcrumb-wrapper">
					<?php almaira_shop_breadcrumb();?>
				</div> 

			<?php }elseif(class_exists( 'WooCommerce' ) && is_shop()) { ?>
				<h2 class="thunk-page-top-title entry-title"><?php woocommerce_page_title(); ?></h2>
				<div class="thunk-breadcrumb-wrapper">
					<?php almaira_shop_breadcrumb();?>
				</div> 
			<?php }else{ ?>

				<?php the_title('<h1 class="thunk-page-top-title entry-title">','</h1>'); ?>
				<div class="thunk-breadcrumb-wrapper">
					<?php almaira_shop_breadcrumb();?>
				</div> 

			<?php } ?>
			</div> 
		</div>
	</div>
   <?php 
}
/**
 * Display Sidebars
 */
if ( ! function_exists( 'almaira_shop_get_sidebar' ) ){
	/**
	 * Get Sidebar
	 *
	 * @since 1.0.1.1
	 * @param  string $sidebar_id   Sidebar Id.
	 * @return void
	 */
	function almaira_shop_get_sidebar( $sidebar_id ){
		 return $sidebar_id;
	}
}