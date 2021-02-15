/**
 * Script fort the customizer sections scroll function.
 *
 * @since    1.1.43
 * @package Almaira
 *
 * @author  ThemeHunk
 */
/* global wp */
jQuery(document).ready(function() {
var thunk_customizer_section_scroll = function ( $ ) {
	'use strict';
	$(
		function () {
				var customize = wp.customize;

				customize.preview.bind('clicked-customizer', function( data ) {

						var sectionClass = '';
						   switch (data) {
							case'sub-accordion-section-almaira_shop_ribbon_section':
							sectionClass = 'section.thunk-ribbon';
							break;
							case'sub-accordion-section-almaira_shop_slider_section':
							sectionClass = 'section.thunk-slider-section';
							break;
							case'sub-accordion-section-almaira_shop_category_section':
							sectionClass = 'section.thunk-category-section';
							break;
							case'sub-accordion-section-almaira_shop_sortby_section':
							sectionClass = 'section.thunk-sortby';
							break;
							case'sub-accordion-section-almaira_shop_product_section':
							sectionClass = 'section.thunk-products-section';
							break;
							case'sub-accordion-section-almaira_shop_instafeed_section':
							sectionClass = 'section.thunk-instafeed';
							break;
							default:
							sectionClass = 'section.' + data;
							break;
						}
						if ( $( sectionClass ).length > 0) {
							$( 'html, body' ).animate(
								{
									scrollTop: $(sectionClass).offset().top - 0
								}, 1000
							);
						}
					}
				);
		}
	);
};

thunk_customizer_section_scroll( jQuery );

});
