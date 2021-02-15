jQuery(document).ready(function(){
//redirect
//above-header
jQuery( '.focus-customizer-menu-redirect-col1,.focus-customizer-menu-redirect-col2,.focus-customizer-menu-redirect-col3' ).on( 'click', function (e){
            e.preventDefault();
            wp.customize.panel('nav_menus').focus();
} );
jQuery( '.focus-customizer-widget-redirect-col1,.focus-customizer-widget-redirect-col2,.focus-customizer-widget-redirect-col3,.focus-customizer-widget-redirect' ).on( 'click', function (e){
            e.preventDefault();
            wp.customize.panel( 'widgets' ).focus();
} );
jQuery( '.focus-customizer-social_media-redirect-col1,.focus-customizer-social_media-redirect-col2,.focus-customizer-social_media-redirect-col3' ).on( 'click', function (e){
            e.preventDefault();
            wp.customize.section( 'almaira-shop-social-icon' ).focus();
} ); 

/* === Checkbox Multiple Control === */
    jQuery( '.customize-control-checkbox-multiple input[type="checkbox"]' ).on(
        'change',
        function() {
   // alert('');
            checkbox_values = jQuery( this ).parents( '.customize-control' ).find( 'input[type="checkbox"]:checked' ).map(
                function() {
                    return this.value;
                }
            ).get().join( ',' );

            jQuery( this ).parents( '.customize-control' ).find( 'input[type="hidden"]' ).val( checkbox_values ).trigger( 'change' );
        }
    );

// disable section in lite
jQuery('input[id=almaira_shop_main_header_layout-hdr-none1],input[id=almaira_shop_main_header_layout-hdr-none2],input[id=almaira_shop_main_header_layout-hdr-none3],input[id=almaira_shop_main_header_layout-hdr-none4],input[id=almaira_shop_main_header_layout-hdr-none5],input[id=almaira_shop_above_header_layout-abv-none-1],input[id=almaira_shop_above_header_layout-abv-none-3],input[id=almaira_shop_bottom_footer_widget_layout-ft-wgt-one-none],input[id=almaira_shop_bottom_footer_widget_layout-ft-wgt-two-none],input[id=almaira_shop_bottom_footer_widget_layout-ft-wgt-three-none],input[id=almaira_shop_bottom_footer_widget_layout-ft-wgt-five-none],input[id=almaira_shop_bottom_footer_widget_layout-ft-wgt-six-none],input[id=almaira_shop_bottom_footer_widget_layout-ft-wgt-seven-none],input[id=almaira_shop_bottom_footer_widget_layout-ft-wgt-eight-none],input[id=almaira_shop_above_footer_layout-ft-abv-one-none],input[id=almaira_shop_above_footer_layout-ft-abv-three-none').attr("disabled",true);


//disable select option
jQuery('#_customize-input-almaira_shop_blog_post_pagination option[value="click"],#_customize-input-almaira_shop_blog_post_pagination option[value="scroll"]').attr("disabled", true);

});


