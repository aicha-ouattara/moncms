/****************/
// Main header	
/****************/
( function( $ ) {
//**********************************/
// container hide and show settings
//**********************************/
ALMControlTrigger.addHook( 'almaira-shop-toggle-control', function( argument, api ){
		
		ALMCustomizerToggles ['almaira_shop_main_header_layout'] = [
		    {
				controls: [    
				'almaira_shop_mobile_menu_open', 
				],
				callback: function(custommenu){
					if (custommenu =='mhdminbarleft' || custommenu =='mhdminbarright'){
					return false;
					}
					return true;
				}
			},	
			 
		];	
  });
})( jQuery );