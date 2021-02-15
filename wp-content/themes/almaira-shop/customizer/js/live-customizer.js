/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( jQuery(function($){
/**
 * Dynamic Internal/Embedded Style for a Control
 */
function almaira_shop_add_dynamic_css( control, style ){
      control = control.replace( '[', '-' );
      control = control.replace( ']', '' );
      jQuery( 'style#' + control ).remove();

      jQuery( 'head' ).append(
            '<style id="' + control + '">' + style + '</style>'
      );
}
/**
 * Responsive Spacing CSS
 */
function almaira_shop_responsive_spacing( control, selector, type, side ){
	wp.customize( control, function( value ){
		value.bind( function( value ){
			var sidesString = "";
			var spacingType = "padding";
			if ( value.desktop.top || value.desktop.right || value.desktop.bottom || value.desktop.left || value.tablet.top || value.tablet.right || value.tablet.bottom || value.tablet.left || value.mobile.top || value.mobile.right || value.mobile.bottom || value.mobile.left ) {
				if ( typeof side != undefined ) {
					sidesString = side + "";
					sidesString = sidesString.replace(/,/g , "-");
				}
				if ( typeof type != undefined ) {
					spacingType = type + "";
				}
				// Remove <style> first!
				control = control.replace( '[', '-' );
				control = control.replace( ']', '' );
				jQuery( 'style#' + control + '-' + spacingType + '-' + sidesString ).remove();

				var desktopPadding = '',
					tabletPadding = '',
					mobilePadding = '';

				var paddingSide = ( typeof side != undefined ) ? side : [ 'top','bottom','right','left' ];

				jQuery.each(paddingSide, function( index, sideValue ){
					if ( '' != value['desktop'][sideValue] ) {
						desktopPadding += spacingType + '-' + sideValue +': ' + value['desktop'][sideValue] + value['desktop-unit'] +';';
					}
				});

				jQuery.each(paddingSide, function( index, sideValue ){
					if ( '' != value['tablet'][sideValue] ) {
						tabletPadding += spacingType + '-' + sideValue +': ' + value['tablet'][sideValue] + value['tablet-unit'] +';';
					}
				});

				jQuery.each(paddingSide, function( index, sideValue ){
					if ( '' != value['mobile'][sideValue] ) {
						mobilePadding += spacingType + '-' + sideValue +': ' + value['mobile'][sideValue] + value['mobile-unit'] +';';
					}
				});

				// Concat and append new <style>.
				jQuery( 'head' ).append(
					'<style id="' + control + '-' + spacingType + '-' + sidesString + '">'
					+ selector + '	{ ' + desktopPadding +' }'
					+ '@media (max-width: 768px) {' + selector + '	{ ' + tabletPadding + ' } }'
					+ '@media (max-width: 544px) {' + selector + '	{ ' + mobilePadding + ' } }'
					+ '</style>'
				);

			} else {
				wp.customize.preview.send( 'refresh' );
				jQuery( 'style#' + control + '-' + spacingType + '-' + sidesString ).remove();
			}

		} );
	} );
}
/**
 * Apply CSS for the element
 */
function almaira_shop_css( control, css_property, selector, unit ){

	wp.customize( control, function( value ) {
		value.bind( function( new_value ) {

			// Remove <style> first!
			control = control.replace( '[', '-' );
			control = control.replace( ']', '' );

			if ( new_value ){
				/**
				 *	If ( unit == 'url' ) then = url('{VALUE}')
				 *	If ( unit == 'px' ) then = {VALUE}px
				 *	If ( unit == 'em' ) then = {VALUE}em
				 *	If ( unit == 'rem' ) then = {VALUE}rem.
				 */
				if ( 'undefined' != typeof unit) {
					if ( 'url' === unit ) {
						new_value = 'url(' + new_value + ')';
					} else {
						new_value = new_value + unit;
					}
				}

				// Remove old.
				jQuery( 'style#' + control ).remove();

				// Concat and append new <style>.
				jQuery( 'head' ).append(
					'<style id="' + control + '">'
					+ selector + '	{ ' + css_property + ': ' + new_value + ' }'
					+ '</style>'
				);

			} else {

				wp.customize.preview.send( 'refresh' );

				// Remove old.
				jQuery( 'style#' + control ).remove();
			}

		} );
	} );
}
/*******************************/
// Range slider live customizer
/*******************************/
function almairaShopGetCss( arraySizes, settings, to ) {
    'use strict';
    var data, desktopVal, tabletVal, mobileVal,
        className = settings.styleClass, i = 1;

    var val = JSON.parse( to );
    if ( typeof( val ) === 'object' && val !== null ) {
        if ('desktop' in val) {
            desktopVal = val.desktop;
        }
        if ('tablet' in val) {
            tabletVal = val.tablet;
        }
        if ('mobile' in val) {
            mobileVal = val.mobile;
        }
    }

    for ( var key in arraySizes ) {
        // skip loop if the property is from prototype
        if ( ! arraySizes.hasOwnProperty( key )) {
            continue;
        }
        var obj = arraySizes[key];
        var limit = 0;
        var correlation = [1,1,1];
        if ( typeof( val ) === 'object' && val !== null ) {

            if( typeof obj.limit !== 'undefined'){
                limit = obj.limit;
            }

            if( typeof obj.correlation !== 'undefined'){
                correlation = obj.correlation;
            }

            data = {
                desktop: ( parseInt(parseFloat( desktopVal ) / correlation[0]) + obj.values[0]) > limit ? ( parseInt(parseFloat( desktopVal ) / correlation[0]) + obj.values[0] ) : limit,
                tablet: ( parseInt(parseFloat( tabletVal ) / correlation[1]) + obj.values[1] ) > limit ? ( parseInt(parseFloat( tabletVal ) / correlation[1]) + obj.values[1] ) : limit,
                mobile: ( parseInt(parseFloat( mobileVal ) / correlation[2]) + obj.values[2] ) > limit ? ( parseInt(parseFloat( mobileVal ) / correlation[2]) + obj.values[2] ) : limit
            };
        } else {
            if( typeof obj.limit !== 'undefined'){
                limit = obj.limit;
            }

            if( typeof obj.correlation !== 'undefined'){
                correlation = obj.correlation;
            }
            data =( parseInt( parseFloat( to ) / correlation[0] ) ) + obj.values[0] > limit ? ( parseInt( parseFloat( to ) / correlation[0] ) ) + obj.values[0] : limit;
        }
        settings.styleClass = className + '-' + i;
        settings.selectors  = obj.selectors;

        almairaShopSetCss( settings, data );
        i++;
    }
}
function almairaShopSetCss( settings, to ){
    'use strict';
    var result     = '';
    var styleClass = jQuery( '.' + settings.styleClass );
    if ( to !== null && typeof to === 'object' ){
        jQuery.each(
            to, function ( key, value ) {
                var style_to_add;
                if ( settings.selectors === '.container' ){
                    style_to_add = settings.selectors + '{ ' + settings.cssProperty + ':' + value + settings.propertyUnit + '; max-width: 100%; }';
                } else {
                    style_to_add = settings.selectors + '{ ' + settings.cssProperty + ':' + value + settings.propertyUnit + '}';
                }
                switch ( key ) {
                    case 'desktop':
                        result += style_to_add;
                        break;
                    case 'tablet':
                        result += '@media (max-width: 767px){' + style_to_add + '}';
                        break;
                    case 'mobile':
                        result += '@media (max-width: 544px){' + style_to_add + '}';
                        break;
                }
            }
        );
        if ( styleClass.length > 0 ) {
            styleClass.text( result );
        } else {
            jQuery( 'head' ).append( '<style type="text/css" class="' + settings.styleClass + '">' + result + '</style>' );
        }
    } else {
        jQuery( settings.selectors ).css( settings.cssProperty, to + 'px' );
    }
}

//*****************************/
// Global Color Custom Style
//*****************************/
almaira_shop_css( 'almaira_shop_theme_clr','color', '.th-slider-bigheading,a:hover,.thunk-category a:hover .title,.thunk-category a:hover .count,#move-to-top:hover,h2.entry-title a,#sidebar-primary h2.widget-title,.woocommerce h1.product_title, .woocommerce-Tabs-panel h2, .related.products h2, section.up-sells h2, .cross-sells h2, .cart_totals h2, .woocommerce-billing-fields h3, .woocommerce-account .addresses .title h3');
almaira_shop_css( 'almaira_shop_theme_clr','background', '.thunk-category-section .owl-nav i,.thunk-brands-section .owl-nav i,.container input:checked ~ .checkmark,.thunk-button:hover,.woocommerce li.product .thunk-product span.onsale,.woocommerce nav.woocommerce-pagination ul li span.current');
almaira_shop_css( 'almaira_shop_theme_clr','border-color', '.thunk-category a:hover,.thunk-counter-wrapper .counter-content:hover,body .woocommerce-tabs .tabs li a::before');
almaira_shop_css( 'background','background', '.thunk-body');

//*****************************/
// Logo
//*****************************/
wp.customize(
    'almaira_shop_logo_width', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'max-width',
                    propertyUnit: 'px',
                    styleClass: 'almaira-logo-width'
                };

                var arraySizes = {
                    size3: { selectors:'.thunk-logo img', values: ['','',''] }
                };
                almairaShopGetCss( arraySizes, settings, to );
            }
        );
    }
);
//*****************************/
// Page Header
//*****************************/
wp.customize(
    'almaira_shop_hdr_img_hgt', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'height',
                    propertyUnit: 'px',
                    styleClass: 'almaira-hdr-img-hgt'
                };

                var arraySizes = {
                    size3: { selectors:'.thunk-page-top-banner', values: ['','',''] }
                };
                almairaShopGetCss( arraySizes, settings, to );
            }
        );
    }
);
/**************************************/
// Above Header live preview
/**************************************/
wp.customize('almaira_shop_col1_texthtml', function(value){
         value.bind(function(to){
             $('.top-header-col1 .content-html').text(to);
         });
     });
 wp.customize('almaira_shop_col2_texthtml', function(value){
         value.bind(function(to) {
             $('.top-header-col2 .content-html').text(to);
         });
     });
 wp.customize('almaira_shop_col3_texthtml', function(value){
         value.bind(function(to) {
             $('.top-header-col3 .content-html').text(to);
         });
     });
almaira_shop_css( 'almaira_shop_abv_hdr_botm_brd','border-bottom-width', '.top-header-bar', 'px' );
almaira_shop_css( 'almaira_shop_above_brdr_clr','border-bottom-color', '.top-header-bar,body.almaira-shop-dark .top-header-bar');
almaira_shop_css( 'almaira_shop_abv_hdr_hgt','line-height', '.top-header-container', 'px');
/****************/
// footer
/****************/
wp.customize('almaira_shop_footer_col1_texthtml', function(value){
         value.bind(function(to){
             $('.top-footer-col1 .content-html').text(to);
         });
     });
 wp.customize('almaira_shop_above_footer_col2_texthtml', function(value){
         value.bind(function(to) {
             $('.top-footer-col2 .content-html').text(to);
         });
     });
 wp.customize('almaira_shop_above_footer_col3_texthtml', function(value){
         value.bind(function(to) {
             $('.top-footer-col3 .content-html').text(to);
         });
     });
 wp.customize('almaira_shop_footer_bottom_col1_texthtml', function(value){
         value.bind(function(to) {
             $('.bottom-footer-col1 .content-html').text(to);
         });
     });
 wp.customize('almaira_shop_bottom_footer_col2_texthtml', function(value){
         value.bind(function(to) {
             $('.bottom-footer-col2 .content-html').text(to);
         });
     });
 wp.customize('almaira_shop_bottom_footer_col3_texthtml', function(value){
         value.bind(function(to) {
             $('.bottom-footer-col3 .content-html').text(to);
         });
     });
  wp.customize('almaira_shop_footer_bottom_col1_texthtml', function(value){
         value.bind(function(to) {
             $('.bottom-footer .th-ftrdescription').text(to);
         });
     });
almaira_shop_css( 'almaira_shop_abv_ftr_botm_brd','border-bottom-width', '.top-footer-bar', 'px' );
almaira_shop_css( 'almaira_shop_above_frt_brdr_clr','border-bottom-color', '.top-footer-bar,body.almaira-shop-dark .top-footer-bar');
almaira_shop_css( 'almaira_shop_abve_ftr_hgt','line-height', '.top-footer-container', 'px');
almaira_shop_css( 'almaira_shop_btm_ftr_botm_brd','border-top-width', '.bottom-footer-bar', 'px' );
almaira_shop_css( 'almaira_shop_bottom_frt_brdr_clr','border-top-color', '.bottom-footer-bar,body.almaira-shop-dark .bottom-footer-bar');
almaira_shop_css( 'almaira_shop_btm_ftr_hgt','line-height','.bottom-footer-container', 'px');
/**
     * BLOG PAGE AND ARCHIVE PAGE LIVE PREVIEW
    */
    wp.customize('almaira_shop_blog_read_more_txt', function(value){
         value.bind(function(to) {
             $('.entry-content p.read-more a').text(to);
         });
     });

// conatiner full width
    wp.customize( 'almaira_shop_conatiner_width', function( setting ){
        setting.bind( function( width ) {
        if (  jQuery( 'body' ).hasClass( 'fullwidth-layout' )) {
        var  dynamicStyle = '#page .container{ max-width: ' + ( parseInt( width ) ) + 'px; } ';
        almaira_shop_add_dynamic_css( 'almaira_shop_conatiner_width', dynamicStyle );
        }
    } );
 } );

 wp.customize( 'almaira_shop_conatiner_maxwidth', function( setting ){
        setting.bind( function( width ) {
        if (  jQuery( 'body' ).hasClass( 'boxed-layout' )) {
        var  dynamicStyle = '#page.almaira-site{ max-width: ' + ( parseInt( width ) ) + 'px; } ';
        almaira_shop_add_dynamic_css( 'almaira_shop_conatiner_maxwidth', dynamicStyle );
        }
    } );
 } );
 wp.customize( 'almaira_shop_conatiner_top_btm', function( setting ){
        setting.bind( function( width ) {
        if (  jQuery( 'body' ).hasClass( 'boxed-layout' )) {
        var  dynamicStyle = '#page.almaira-site,header.shrink{ margin: ' + ( parseInt( width ) ) + 'px auto } ';
        almaira_shop_add_dynamic_css( 'almaira_shop_conatiner_top_btm', dynamicStyle );
        }
    } );
 } );

/*******************/
//main header
/*******************/
almaira_shop_css( 'almaira_shop_main_hdr_botm_brd','border-bottom-width', '.main-header-bar,body.almaira-shop-dark .main-header-bar', 'px' );
almaira_shop_css( 'almaira_shop_main_brdr_clr','border-bottom-color', '.main-header-bar,body.almaira-shop-dark .main-header-bar');

/**********************/
// woocommerce
/**********************/
     /**
     * Shop: Box Shadow
     */
    wp.customize( 'almaira_shop_product_box_shadow', function( setting ){
        setting.bind( function( product_shadow ) {
            var products = $(document).find('.woocommerce .thunk-products-ul .product, .woocommerce .thunk-products-ul .product');
            product_shadow = product_shadow > 5 ? 5 : ( product_shadow < 0 ? 0 : product_shadow );
            products.removeClass('almaira-shadow-1 almaira-shadow-2 almaira-shadow-3 almaira-shadow-4 almaira-shadow-5');
            products.addClass( 'almaira-shadow-' + product_shadow );
        } );
    } );
     /**
     * Shop: Box Shadow Hover
     */
    wp.customize( 'almaira_shop_product_box_shadow_on_hover', function( setting ){
        setting.bind( function( product_shadow ) {
            var products = $(document).find('.woocommerce .thunk-products-ul .product, .woocommerce .thunk-products-ul .product');
            product_shadow = product_shadow > 5 ? 5 : ( product_shadow < 0 ? 0 : product_shadow );
            products.removeClass('almaira-shadow-hover-1 almaira-shadow-hover-2 almaira-shadow-hover-3 almaira-shadow-hover-4 almaira-shadow-hover-5');
            products.addClass( 'almaira-shadow-hover-' + product_shadow );
        } );
    } );


//ribbon
wp.customize('almaira_shop_ribbon_desc', function(value){
         value.bind(function(to){
             $('#th-ribbon .rbn-desc').text(to);
         });
     });
wp.customize('almaira_shop_ribbon_heading', function(value){
         value.bind(function(to){
             $('.thunk-ribbon .heading').text(to);
         });
     });
wp.customize('almaira_shop_ribbon_button_text', function(value){
         value.bind(function(to){
             $('.thunk-ribbon .th-button').text(to);
         });
     });

//category
wp.customize('almaira_shop_category_heading', function(value){
         value.bind(function(to){
             $('h2.category-side-title').text(to);
         });
     });
//instagram
wp.customize('almaira_shop_instafeed_heading', function(value){
         value.bind(function(to){
             $('h2.thunk-insta-title').text(to);
         });
     });

//contact template
//Contact page Text Live Preview
wp.customize('almaira_shop_contact_heading', function(value){
         value.bind(function(to){
             $('.thunk-contact-body-wrap .thunk-heading').text(to);
         });
     });

wp.customize('almaira_shop_contact_smallheading', function(value){
         value.bind(function(to){
             $('.thunk-contactus-right h6').text(to);
         });
     });

wp.customize('almaira_shop_contact_address1', function(value){
         value.bind(function(to){
             $('.thunk-address-info').text(to);
         });
     });

wp.customize('almaira_shop_contact_address2', function(value){
         value.bind(function(to){
             $('.thunk-contact-mobile').text(to);
         });
     });

wp.customize('almaira_shop_contact_support', function(value){
         value.bind(function(to){
             $('.thunk-contact-email').text(to);
         });
     });

wp.customize('almaira_shop_contact_hours', function(value){
         value.bind(function(to){
             $('.thunk-contact-wh').text(to);
         });
     });

}));