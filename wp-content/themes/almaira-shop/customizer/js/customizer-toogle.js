/**
 * Customizer controls toggles
 *
 * @package Almaira Shop
 */
( function( $ ){
	/* Internal shorthand */
	var api = wp.customize;
	/**
	 * Trigger hooks
	 */
	ALMControlTrigger = {
	    /**
	     * Trigger a hook.
	     *
	     * @since 1.0.0
	     * @method triggerHook
	     * @param {String} hook The hook to trigger.
	     * @param {Array} args An array of args to pass to the hook.
		 */
	    triggerHook: function( hook, args )
	    {
	    	$( 'body' ).trigger( 'almaira-shop-control-trigger.' + hook, args );
	    },

	    /**
	     * Add a hook.
	     *
	     * @since 1.0.0
	     * @method addHook
	     * @param {String} hook The hook to add.
	     * @param {Function} callback A function to call when the hook is triggered.
	     */
	    addHook: function( hook, callback )
	    {
	    	$( 'body' ).on( 'almaira-shop-control-trigger.' + hook, callback );
	    },

	    /**
	     * Remove a hook.
	     *
	     * @since 1.0.0
	     * @method removeHook
	     * @param {String} hook The hook to remove.
	     * @param {Function} callback The callback function to remove.
	     */
	    removeHook: function( hook, callback )
	    {
		    $( 'body' ).off( 'almaira-shop-control-trigger.' + hook, callback );
	    },
	};
	ALMCustomizerToggles = {
	};
} )( jQuery );

/**************************************/
/**
 * Customizer controls
 *
 * @package Almaira Shop
 */
/**************************************/
( function( $ ){

	/* Internal shorthand */
	var api = wp.customize;

	/**
	 * Helper class for the main Customizer interface.
	 *
	 * @since 1.0.0
	 * @class ALMCustomizer
	 */
	ALMCustomizer = {

		controls	: {},

		/**
		 * Initializes our custom logic for the Customizer.
		 *
		 * @since 1.0.0
		 * @method init
		 */
		init: function()
		{
			ALMCustomizer._initToggles();
		},

		/**
		 * Initializes the logic for showing and hiding controls
		 * when a setting changes.
		 *
		 * @since 1.0.0
		 * @access private
		 * @method _initToggles
		 */
		_initToggles: function()
		{
			// Trigger the Adv Tab Click trigger.
			ALMControlTrigger.triggerHook( 'almaira-shop-toggle-control', api );

			// Loop through each setting.
			$.each( ALMCustomizerToggles, function( settingId, toggles ) {

				// Get the setting object.
				api( settingId, function( setting ) {

					// Loop though the toggles for the setting.
					$.each( toggles, function( i, toggle ) {

						// Loop through the controls for the toggle.
						$.each( toggle.controls, function( k, controlId ) {

							// Get the control object.
							api.control( controlId, function( control ) {

								// Define the visibility callback.
								var visibility = function( to ) {
									control.container.toggle( toggle.callback( to ) );
								};

								// Init visibility.
								visibility( setting.get() );

								// Bind the visibility callback to the setting.
								setting.bind( visibility );
							});
						});
					});
				});

			});
		}
	};
$( function() { ALMCustomizer.init(); } );
})( jQuery );
