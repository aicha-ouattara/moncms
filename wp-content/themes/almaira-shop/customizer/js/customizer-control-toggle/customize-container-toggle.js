/*********************************/
// Sidebar hide and show control
/*********************************/
( function( $ ){
ALMControlTrigger.addHook( 'almaira-shop-toggle-control', function( argument, api ){
ALMCustomizerToggles ['almaira_shop_default_container'] = [
		    {
				controls: [    
				'almaira_shop_conatiner_maxwidth',
				'almaira_shop_conatiner_top_btm',
				],
				callback: function(layout){
					if(layout=='fullwidth'){
					return false;
					}
					return true;
				}
			},
			{
				controls: [    
				'almaira_shop_conatiner_width',  
				],
				callback: function(layout){
					if(layout =='boxed'){
					return false;
					}
					return true;
				}
			},		
		];
	});
})( jQuery );