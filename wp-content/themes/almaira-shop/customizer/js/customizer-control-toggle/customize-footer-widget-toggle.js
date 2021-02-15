/*****************************************************************************/
/**********************customizer control setting*************************/
/*****************************************************************************/
( function( $ ) {
//**********************************/
// Footer widget hide and show settings
//**********************************/
ALMControlTrigger.addHook( 'almaira-shop-toggle-control', function( argument, api ){
		ALMCustomizerToggles ['almaira_shop_bottom_footer_widget_layout'] = [
			{
				controls: [
					
					
					'almaira_shop_bottom_footer_widget_redirect',
					'almaira_bottom_footer_widget_color_scheme'
				],
				callback: function(layout){
					if ('ft-wgt-none'== layout){
						return false;
					}
					return true;
				}
			},
				
		];	
 });
})( jQuery );