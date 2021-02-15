/*************************************/
// Blog Archive Hide and Show control
/*************************************/
( function( $ ){
ALMControlTrigger.addHook( 'almaira-shop-toggle-control', function( argument, api ){
ALMCustomizerToggles ['almaira_shop_blog_post_content'] = [
		    {
				controls: [    
				'almaira_shop_blog_expt_length',
				'almaira_shop_blog_read_more_txt',
				],
				callback: function(layout){
					if(layout=='full'|| layout=='nocontent'){
					return false;
					}
					return true;
				}
			},	
		];	
	});
})( jQuery );