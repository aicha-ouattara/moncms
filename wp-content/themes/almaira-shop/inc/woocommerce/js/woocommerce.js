jQuery(document).ready(function(){
/* woo, wc_add_to_cart_params */
  if ( typeof wc_add_to_cart_params === 'undefined' ){
      return false;
  }
  jQuery( document ).on( 'click', '.ajax_add_to_cart', function(e){ 
  // Remove button selector
                 e.preventDefault();
                var data1 = {
                 'action': 'almaira_shop_product_count_update'
                };
                 jQuery.post(
                 woocommerce_params.ajax_url, // The AJAX URL
                 data1, // Send our PHP function
                 function(response_data){
                 jQuery('.cart-crl').html(response_data);
                 }
               );
             });
  // Ajax remove cart item
  jQuery( document ).on( 'click', 'a.remove', function(e){ // Remove button selector
      e.preventDefault();
      // AJAX add to cart request

      var $thisbutton = jQuery( this );
      if ( $thisbutton.is( '.remove' ) ){
          //Check if the button has a product ID
          if ( ! $thisbutton.attr( 'data-product_id' ) ){ 
              return true;
          }
        }
        $product_id = $thisbutton.attr( 'data-product_id' );
          var data = {'product_id':$product_id,
           'action': 'almaira_shop_product_remove'
         };
         jQuery.post(
           woocommerce_params.ajax_url, // The AJAX URL
           data, // Send our PHP function
           function(response){
            jQuery('.almaira-quickcart-dropdown').html(response);

        var data = {
           'action': 'almaira_shop_product_count_update'
         };
         jQuery.post(
           woocommerce_params.ajax_url, // The AJAX URL
           data, // Send our PHP function
           function(response_data){
            jQuery('.cart-crl').html(response_data);
           }
         );
       }
   );
      return false;
  });
});
//***************************
// cheked-item by sort filter
// **************************
jQuery('input:radio[name="radio"]').change(function (){
   jQuery('.sort-radio .checkmark').removeClass("th-selected");
});
var $checkes = jQuery('input:checkbox[name="prd_cat[]"],input:radio[name="radio"]').change(function (){
        jQuery(".filter-loadContainer").css("display", "block");
        jQuery( '.thunk-load-more-wrap,.thunk-load-more,.thunk-products-error' ).hide();
        var check_vals = $checkes.filter(':checked').map(function (){
            return this.value;
        }).get();
          var radio_vals = jQuery('input:radio[name="radio"]:checked').val();
          var data = {
           'cat_slug':check_vals,
           'radio_slug':radio_vals,
           'action': 'almaira_shop_sort_filter_ajax'
         };
        jQuery.post(
           wp_ajax_url, // The AJAX URL
           data, // Send our PHP function
           function(response){
           jQuery('.thunk-products-wrapper.sort-filter .thunk-products-ul').html(response);
           jQuery('.thunk-product-loader').hide('fast');
           jQuery(".filter-loadContainer").css("display", "none");
           }
      );
});

//**********************/
// product load more
//**********************/
jQuery( document ).ready( function( $ ){
  // JS to submit ajax for load more button
  $(document).on('click', '.thunk-load-more', function(e){
    
  $(".more-loadContainer").css("display", "block");

  $( '.thunk-load-more-wrap,.thunk-load-more' ).hide();
    var check_vals = $checkes.filter(':checked').map(function (){
            return this.value;
        }).get();
    var radio_vals = jQuery('input:radio[name="radio"]:checked').val();
    var maxpaged = $( this ).attr( 'data-max-pages' );
    var previouspaged = $( this ).attr( 'data-paged' );
    var currentpaged = parseInt( previouspaged ) + 1;
    jQuery.ajax({
      type: 'POST',
      url: wp_ajax_url,
      data: {
        action :'almaira_shop_sort_filter_ajax',
        paged: currentpaged,
        'cat_slug':check_vals,
        'radio_slug':radio_vals,
      },
      dataType: 'html'
    })
    .done( function( response ){
      if ( response ){
        $( '.thunk-sortby .thunk-products-wrapper .thunk-products-ul' ).append( response ); 
        if ( currentpaged == maxpaged){
          $( '.thunk-load-more-wrap,.thunk-load-more' ).hide();
          $(".thunk-product-error").prepend("<div id='thunk-products-error' class='thunk-products-error error'>No More Products</div>");
        }  
      } 
        $(".more-loadContainer").css("display", "none");
    } );
    e.preventDefault();
  });
});


jQuery(document).ready(function($){ 
             
            $('form.cart').on( 'click', 'button.plus, button.minus', function(){
               
                // Get current quantity values
                var qty = $( this ).siblings('.quantity').find( '.qty' );
                var val = parseFloat(qty.val()) ? parseFloat(qty.val()) : '0';
                var max = parseFloat(qty.attr( 'max' ));
                var min = parseFloat(qty.attr( 'min' ));
                var step = parseFloat(qty.attr( 'step' ));
 
                // Change the value if plus or minus
                if ( $( this ).is( '.plus' ) ) {
                    if ( max && ( max <= val ) ) {
                        qty.val( max );
                    } else {
                        qty.val( val + step );
                    }
                } else {
                    if ( min && ( min >= val ) ) {
                        qty.val( min );
                    } else if ( val > 1 ) {
                        qty.val( val - step );
                    }
                }
                 
            });
             
        });
/****************/
//floating-cart
/****************/
jQuery(window).scroll(function (){
if(jQuery('body').hasClass('logged-in')){
var wpadminbar = jQuery('#wpadminbar').height();
}else{
var wpadminbar = 0; 
} 
var bnrhgt = jQuery('.thunk-page-top-banner').height();
var glrthgt = jQuery('.woocommerce-product-gallery').height();
var hdrthgt =  jQuery('header').height();
var carthgt = bnrhgt + glrthgt + hdrthgt;
var hdrcarthgt = jQuery('header').height() + wpadminbar;
if(jQuery('header').hasClass('alm-above-stick-hdr') || jQuery('header').hasClass('alm-main-stick-hdr') || jQuery('header').hasClass('alm-bottom-stick-hdr')){
    if(jQuery(this).scrollTop() > carthgt){ 
      jQuery('.almaira-floating-cart').addClass('show').css('top',hdrcarthgt +'px').removeClass('hide');
    }else{
      jQuery('.almaira-floating-cart').removeClass('show').addClass('hide');
    }
}else{
    if(jQuery(this).scrollTop() > carthgt){
      jQuery('.almaira-floating-cart').addClass('show').css('top',wpadminbar +'px').removeClass('hide');
    }else{
      jQuery('.almaira-floating-cart').removeClass('show').addClass('hide');
    }
} 

  });

/*************************/
// product search
/*************************/
jQuery(document).ready(function(){
  jQuery('#search-btn').click(function(e){
        e.preventDefault(); 
        jQuery('#search-overlay').fadeIn(400);
        jQuery('html').css("overflow", function(_,val){ 
           return val == "hidden" ? "scroll" : "hidden";
         });
       });
  jQuery('#search-btn').keypress(function(e){
        e.preventDefault(); 
        jQuery('#search-overlay').fadeIn(400);
        jQuery('html').css("overflow", function(_,val){ 
           return val == "hidden" ? "scroll" : "hidden";
         });
       });
   jQuery('#close-btn').click(function(){
   jQuery('#search-overlay').fadeOut();
   jQuery('#search-btn').show();
   jQuery('html').css("overflow", function(_,val){ 
           return val == "auto" ? "scroll" : "auto";
      });
  });
   jQuery('#close-btn').keypress(function(){
   jQuery('#search-overlay').fadeOut();
   jQuery('#search-btn').show();
   jQuery('html').css("overflow", function(_,val){ 
           return val == "auto" ? "scroll" : "auto";
      });
  });
 

  });

/****************************/
// sort filter loadmore
/****************************/
(function(jQuery) {
if(jQuery("#th-product-filter").length){
///-----------------------/// 
// product isotope filter 
///-----------------------/// 
jQuery('.featured-filter li a:first').addClass('current');
var filterVal = jQuery('.button.current').attr('data-filter');
var $grid = jQuery('.featured-block ul').isotope({
  itemSelector: '.featured-isotope',
  transitionDuration: '0',
  filter:filterVal,
  layoutMode: 'fitRows',
});
// bind filter button click
jQuery(document).on( 'click','.featured-filter a', function() {
var filterValue = jQuery(this).attr('data-filter');
// use filterFn if matches value
$grid.imagesLoaded( function(){
$grid.isotope({ filter: filterValue });
  });
});
// change is-checked class on buttons
jQuery('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = jQuery( buttonGroup );
  $buttonGroup.on( 'click', 'a', function() {
  $buttonGroup.find('.current').removeClass('current');
  jQuery(this).addClass('current');
  });
});
function almaira_filter_product($input){
             jQuery('#filter-sortby-load-more').css("display", "none");
             var $pl_totalcat = jQuery('.filters-button-group').attr('pfl_perpage');
             var data_filter = $input.attr("data-filter");
             var class_filter = $input.attr("class");
             var $cate_slug =  data_filter.replace(".","");
             var $total_post = $input.attr("post_count");
             var $pagi = Math.round(parseFloat($total_post / $pl_totalcat));
             var $lfb_page = jQuery(data_filter).attr('lfb-page');
             if ($pl_totalcat < $total_post || $pagi >= $lfb_page){
                 jQuery('#filter-sortby-load-more').css("display", "block");
                 jQuery("#filter-sortby-load-more").attr("cate-slug", $cate_slug);
             }
             return data_filter;
         }
        jQuery(window).load(function(){
        if (jQuery(".th-portfolio-cat").length){
             var $input = jQuery(".th-portfolio-cat");
             var data_filter = $input.attr("data-filter");
             jQuery('#filter-sortby-load-more').css("display", "none");
             var jquerygrid = jQuery('.featured-block ul').isotope({
                 filter: data_filter
             });
             almaira_filter_product($input);
        }
        jQuery(".button.th-portfolio-cat").click(function(){
                 var $input = jQuery(this);
                 data_filter =  almaira_filter_product($input);
                 var jquerygrid = jQuery(".featured-block ul").isotope({
                     filter: data_filter
                 });
                
             });
            jQuery("#filter-sortby-load-more").click(function(){

                 jQuery(".cat-filter-loademore").css("display", "block");
                 jQuery('#filter-sortby-load-more').css("display", "none");
                 var $cateSlug = jQuery('#filter-sortby-load-more').attr('cate-slug');
                 var $lfb_page = jQuery('.' + $cateSlug).attr('lfb-page');
                 var $total_post = jQuery('.' + $cateSlug).attr('totalpost');
                 var $data_max_pages = jQuery('.' + $cateSlug).attr('data-max-pages');
                 jQuery.ajax({
                         type: 'POST',
                         url: wp_ajax_url,
                         data: {
                               action :'almaira_shop_product_section_filter_product_ajax',
                               'cat_slug':$cateSlug,
                               'paged': $lfb_page,
                               
                             },
                            dataType: 'html',
                            cache: false
                          }).success(function(response){
                     if (response!=''){
                         jQuery(".cat-filter-loademore").css("display", "none");
                         var $lfb_page_new = parseInt($lfb_page) + 1;
                         jQuery('.' + $cateSlug).attr("lfb-page", $lfb_page_new);
                         var $newItems = jQuery(response);     
                     /**
                     * Append items
                     */
                    container = jQuery('.featured-block ul');
                    container.append($newItems).isotope('appended', $newItems);
                    container.imagesLoaded().progress(function(){
                    container.isotope();
                    });  
                     if($lfb_page == $data_max_pages){
                        jQuery('#filter-sortby-load-more').css("display", "none");
                        }else{
                        jQuery('#filter-sortby-load-more').css("display", "block");
                        }   
                    }
                    
                 });

             });

         });
}
})(jQuery);

jQuery(function($){
 
  var searchRequest;
  $('.search-autocomplete').autocomplete({
    classes: {
        "ui-autocomplete" : "ui-my-class"
      },
    minChars:3,
    source: function( request, response, term){
    $('#search-button').hide();
    var matcher = $.ui.autocomplete.escapeRegex( request.term );
     $.ajax({
        type: 'POST',
        dataType: 'json',
        url: wp_ajax_url,
        data: {
               action :'almaira_shop_search_site',
              'match':matcher,                
              },
        success: function(res){
              response(res.data);
              $('#search-button').show();
        },

        
      });
      
    }
  });
});