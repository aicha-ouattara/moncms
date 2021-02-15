jQuery(document).ready(function(){
  jQuery('.thunk-products-section li').addClass('featured-isotope cd-item featured-list');
// close-button-active
        if(jQuery('body').hasClass('mobile-menu-active','mobile-above-menu-active').length!=''){
            jQuery('body').find('.sider').append('<div class="menu-close"><span tabindex="0" class="menu-close-btn"></span></div>');
            jQuery('.menu-close-btn').removeAttr("href");
            //Menu close
            jQuery('.menu-close-btn,.almaira-shop-menu li a span.almaira-shop-menu-link').click(function(){
            jQuery('body').removeClass('mobile-menu-active');
            jQuery('body').removeClass('mobile-above-menu-active');
            });
            jQuery('.menu-close-btn,.almaira-shop-menu li a span.almaira-shop-menu-link').keypress(function(){
            jQuery('body').removeClass('mobile-menu-active');
            jQuery('body').removeClass('mobile-above-menu-active');
            });

            // Esc key close menu
            document.addEventListener( 'keydown', function( event ) {
            if ( event.keyCode === 27 ) {
              event.preventDefault();
              document.querySelectorAll( '.mobile-menu-active' ).forEach( function( element ) {
                jQuery('body').removeClass('mobile-menu-active');
              }.bind( this ) );
              document.querySelectorAll( '.mobile-above-menu-active' ).forEach( function( element ) {
                jQuery('body').removeClass('mobile-above-menu-active');
              }.bind( this ) );
            }
          }.bind( this ) );
        //ToggleBtn above Click
        jQuery('#menu-btn-abv').click(function (e){
           e.preventDefault();
           jQuery('body').addClass('mobile-above-menu-active');
           jQuery('#almaira-above-menu').removeClass('hide-menu'); 
           jQuery('.sider.above').removeClass('almaira-shop-menu-hide');
           jQuery('.sider.main').addClass('almaira-shop-menu-hide');
        });
        jQuery('#menu-btn-abv').keypress(function (e){
           e.preventDefault();
           jQuery('body').addClass('mobile-above-menu-active');
           jQuery('#almaira-above-menu').removeClass('hide-menu'); 
           jQuery('.sider.above').removeClass('almaira-shop-menu-hide');
           jQuery('.sider.main').addClass('almaira-shop-menu-hide');
        });
        //ToggleBtn main menu Click
        jQuery('#menu-btn').click(function (e){
           e.preventDefault();
           jQuery('body').addClass('mobile-menu-active');
           jQuery('#almaira-shop-menu').removeClass('hide-menu');
           jQuery('.sider.above').addClass('almaira-shop-menu-hide');  
           jQuery('.sider.main').removeClass('almaira-shop-menu-hide');    
        });
        jQuery('#menu-btn').keypress(function (e){
           e.preventDefault();
           jQuery('body').addClass('mobile-menu-active');
           jQuery('#almaira-shop-menu').removeClass('hide-menu');
           jQuery('.sider.above').addClass('almaira-shop-menu-hide');  
           jQuery('.sider.main').removeClass('almaira-shop-menu-hide');    
        });
        
        // default page
        jQuery('#menu-btn').click(function (e){
           e.preventDefault();
           jQuery('body').addClass('mobile-menu-active');
           jQuery('#menu-all-pages').removeClass('hide-menu');    
        });
        jQuery('#menu-btn').keypress(function (e){
           e.preventDefault();
           jQuery('body').addClass('mobile-menu-active');
           jQuery('#menu-all-pages').removeClass('hide-menu');    
        });
      }
 // deafult menu

             jQuery("#menu-all-pages.almaira-shop-menu").almairaResponsiveMenu({
                 resizeWidth:'1024', // Set the same in Media query       
                 animationSpeed:'fast', //slow, medium, fast
                 accoridonExpAll:true//Expands all the accordion menu on click
             });       

// main-menu-script

           jQuery(".main-header #almaira-shop-menu").almairaResponsiveMenu({
                 resizeWidth:'1024', // Set the same in Media query       
                 animationSpeed:'medium', //slow, medium, fast
                 accoridonExpAll:true//Expands all the accordion menu on click
            });
     

// above-menu-script

             jQuery("#almaira-above-menu").almairaResponsiveMenu({
                 resizeWidth:'1024', // Set the same in Media query       
                 animationSpeed:'medium', //slow, medium, fast
                 accoridonExpAll:true//Expands all the accordion menu on click
             });      
    
/**************************************************/
// Show-hide Scroll to top & move-to-top arrow
/**************************************************/
if(jQuery("#back-to-top").val()=='on'){
  jQuery("body").prepend("<a id='move-to-top' class='animate' href='#'><span>Back to Top</span><i class='fa fa-long-arrow-right'></i></a>"); 
  var scrollDes = 'html,body';  
  /*Opera does a strange thing if we use 'html' and 'body' together so my solution is to do the UA sniffing thing*/
  if(navigator.userAgent.match(/opera/i)){
    scrollDes = 'html';
  }
  //show ,hide
  jQuery(window).scroll(function (){
    if(jQuery(this).scrollTop() > 160){
      jQuery('#move-to-top').addClass('filling').removeClass('hiding');
    }else{
      jQuery('#move-to-top').removeClass('filling').addClass('hiding');
    }
  });
  jQuery('#move-to-top').click(function(){
      jQuery("html, body").animate({ scrollTop: 0 }, 600);
      return false;
  });
}
/***************/
// sticky header
/***************/
if(jQuery("body.alm-main-stick-hdr").length!=''){
jQuery(document).on("scroll", function(){
var $headerBar = jQuery('header').height();
var $mainheader = jQuery('header .main-header').height() + jQuery('header .top-header').height(); 
  if(jQuery(document).scrollTop() > $headerBar){
      jQuery(".alm-main-stick-hdr header").addClass("shrink");
      if(jQuery('body.elementor-template-full-width').length!=''){
            jQuery('.elementor').css('margin-top',$mainheader +'px');
      }else{
            jQuery('.thunk-frontpage-wrapper,#content').css('margin-top',$mainheader +'px');
      }
    }else{
      jQuery(".alm-main-stick-hdr header").removeClass("shrink");
      jQuery('.thunk-frontpage-wrapper,#content,.elementor').css('margin-top',0+'px');
  } 
 });
}
/******************/
// Sticky footer
/******************/
if(jQuery('body').hasClass('alm-stick-ftr')){
var $footerBar = jQuery('.thunk-footer').height();
jQuery(".thunk-frontpage-wrapper,#content").css('margin-bottom',$footerBar +'px');
}
/**************************************************/
//mobile pan class activate
/**************************************************/
jQuery('.pan-icon,#bar-menu-btn').click(function (e){
e.preventDefault();
jQuery('body').toggleClass('mobile-pan-active');
jQuery('body').removeClass('cart-pan-active');
});



});
 //  //ServiceLoadmore
jQuery(document).ready(function (jQuery) {
 //-----------------------//
// loader
//-----------------------//
if(!jQuery('body').hasClass('elementor-editor-active')){
jQuery(window).on('load', function(){
setTimeout(removeLoader); //wait for page load PLUS two seconds.
});
function removeLoader(){
    jQuery( ".almaira_overlayloader" ).fadeOut(700, function(){
      // fadeOut complete. Remove the loading div
    jQuery(".almaira-pre-loader img" ).hide(); //makes page more lightweight
    });  
  }
}
///------------------------------/// 
// section scroll ease function
///------------------------------/// 
jQuery('.almaira-shop-menu > li > a[href*="#"]').click(function(){
  $hgt = jQuery("header").height()
if((jQuery(window).scrollTop() == 0 || jQuery(window).scrollTop() == jQuery(document).height()- jQuery(window).height()) && ! jQuery( 'body' ).hasClass( 'alm-transparent-header' ) ) {
  $hgt1 =  $hgt * 2;
  if ("#" === jQuery(this).attr("href")) return !1;
                    if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
                        var t = jQuery(this.hash);
                        if ((t = t.length ? t : jQuery("[name=" + this.hash.slice(1) + "]")).length) return jQuery("html,body").animate({
                            scrollTop: t.offset().top - $hgt1
           }, 2000,'easeInOutExpo'), !1
      }
}else{
if ("#" === jQuery(this).attr("href")) return !1;
                    if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
                        var t = jQuery(this.hash);
                        if ((t = t.length ? t : jQuery("[name=" + this.hash.slice(1) + "]")).length) return jQuery("html,body").animate({
                            scrollTop: t.offset().top - $hgt
           }, 2000,'easeInOutExpo'), !1
      }
}
 });
jQuery( window ).on(
        'scroll', function (){
          if ( jQuery( 'body' ).hasClass( 'home' ) ){
              var almaira_shop_headerHt = jQuery("header").height();
              var almaira_shop_scrollTop = jQuery( window ).scrollTop(); // cursor position
              var headerHeight = jQuery( '.almaira-shop-menu' ).outerHeight(); // header height
              var isInOneSection = 'no'; // used for checking if the cursor is in one section or not
              // for all sections check if the cursor is inside a section
              jQuery( 'section' ).each(
                function(){
                  var thisID = '#' + jQuery( this ).attr( 'id' ); // section id
                  var almaira_shop_offset = jQuery( this ).offset().top; // distance between top and our section
                  var thisHeight = jQuery( this ).outerHeight(); // section height
                  var thisBegin = almaira_shop_offset - headerHeight; // where the section begins
                  var thisEnd = almaira_shop_offset + thisHeight - headerHeight; // where the section ends
                  // if position of the cursor is inside of the this section
                  if( almaira_shop_scrollTop + almaira_shop_headerHt + 30 >= thisBegin &&
                    almaira_shop_scrollTop + almaira_shop_headerHt + 30 <= thisEnd ){
                    isInOneSection = 'yes';
                    jQuery( 'nav .on-section' ).removeClass( 'on-section' );
                    jQuery( 'nav a[href$="' + thisID + '"]' ).parent( 'li' ).addClass( 'on-section' ); // find the menu button with the same ID section
                    return false;
                  }
                  if( isInOneSection === 'no' ){
                   jQuery( 'nav .on-section' ).removeClass( 'on-section' );
                  }
                }
              );
           }
        }
    );


});
//Categories Button Responsive
jQuery("#check-filterlist-btn").on("click", function(){
    jQuery(".sort-adv-filter-wrapper").hide();
    jQuery(".check-filter-list-wrapper").slideToggle();
});
jQuery("#check-filter-close").on("click", function(event){
jQuery(".check-filter-list-wrapper").slideUp();
event.preventDefault();
});
//SortBy Button Responsive
jQuery("#sort-adv-btn").on("click", function(){
  jQuery(".check-filter-list-wrapper").hide();
  jQuery(".sort-adv-filter-wrapper").slideToggle();
});
jQuery("#sort-adv-close").on("click", function(event){
jQuery(".sort-adv-filter-wrapper").slideToggle();
event.preventDefault();
});
//ResponsiveCategories Button Responsive
jQuery("#responsivecat-btn").on("click", function(){
jQuery(".responsivecat-list-wrapper").slideToggle();
});
jQuery("#responsivecat-close").on("click", function(event){
jQuery(".responsivecat-list-wrapper").slideUp();
event.preventDefault();
});
jQuery('body').click(function(e) {
 var container = jQuery('.th-resp-button');
  if (!container.is(e.target) && container.has(e.target).length === 0)
  {
        jQuery(".sort-adv-filter-wrapper,.check-filter-list-wrapper,.responsivecat-list-wrapper").slideUp();
   }});
/*******************************************/
// section responsive filter view js
/*******************************************/
if(jQuery('.th-resp-button').length!=''){
jQuery(".sort-radio,.th-check-container").click(function(){
 document.getElementById("th-filter-wrap-id").scrollIntoView( {behavior: "smooth" })
});
jQuery(".th-portfolio-cat").click(function(){
 document.getElementById("th-cat-filter-wrap-id").scrollIntoView( {behavior: "smooth" })
});
}