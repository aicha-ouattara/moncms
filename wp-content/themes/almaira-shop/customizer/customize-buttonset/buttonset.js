/**
 * Button control in customizer
 *
 * @package Almaira Shop
 */
wp.customize.controlConstructor['almaira-shop-buttonset'] = wp.customize.Control.extend({
	ready: function() {
		'use strict';
		var control = this;
		// Change the value
		this.container.on( 'click', 'input', function() {
			control.setting.set( jQuery( this ).val() );
		});
	}

});

