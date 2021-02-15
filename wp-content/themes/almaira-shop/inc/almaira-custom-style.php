<?php 
/**
 * Custom Style for  Almaira Shop Theme.
* @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
function almaira_shop_custom_style(){
$almaira_style="";   
$almaira_style.= almaira_shop_responsive_slider_funct( 'almaira_shop_logo_width', 'almaira_shop_logo_width_responsive');
$almaira_style.= almaira_shop_responsive_slider_funct( 'almaira_shop_hdr_img_hgt', 'almaira_shop_header_height_img_responsive');
//header
$header_src ='';
 if( has_post_thumbnail() && !is_single() && !almaira_shop_is_blog() && !is_archive() && !is_search()){ 
            $header_src = get_the_post_thumbnail_url();
            }elseif( has_header_image() ){ 
            $header_src = get_header_image();  
            }else{
            $header_src ='';
            }

    $almaira_style.=".thunk-page-top-banner{
            background-image: url('$header_src');
        } ";
/**********************/
//Scheme Color
/**********************/
$almaira_shop_color_scheme = get_theme_mod('almaira_shop_color_scheme','alm-light');
if($almaira_shop_color_scheme=='alm-dark'){
 $almaira_style.="
 /*********************/
/*Color Scheme Style*/
/*********************/
.almaira-shop-dark #wp-calendar tbody td{
    background: transparent;
}
.almaira-shop-dark #wp-calendar tbody td#today{
background: #111;
}
body.almaira-shop-dark,body.almaira-shop-dark #comments form p{
color:#999;
}
body.almaira-shop-dark .woocommerce a.remove{
color:#999!important;
}
body.almaira-shop-dark.boxed-layout #page{
box-shadow: none;   
}
.almaira-shop-dark h1, .almaira-shop-dark h2,
.almaira-shop-dark h3, .almaira-shop-dark h4,
.almaira-shop-dark h5, .almaira-shop-dark h6,
.almaira-shop-dark .widget.woocommerce .widget-title,
.almaira-shop-dark .almaira-widget-content .widget-title,body.almaira-shop-dark #comments form p.logged-in-as a{
color:#fff;
}
.almaira-shop-dark .thunk-single-post .thunk-post-info,
.almaira-shop-dark .thunk-post-meta, 
.almaira-shop-dark .thunk-tags-wrapper, 
.almaira-shop-dark .thunk-related-links,
.almaira-shop-dark .almaira-widget-content{
 border-color:#111;
}
.almaira-shop-dark  pre{
background:#1a1a1a;
color:#999;
}
.almaira-shop-dark .thunk-quik .alm-quick-view-text, 
.almaira-shop-dark .thunk-wishlist .thunk-wishlist-inner,
.almaira-shop-dark .thunk-product .yith-wcwl-add-button > a{
border-color:#1a1a1a;
color:#fff;
}
/*TOP HEADER*/
body.almaira-shop-dark .almaira-site .top-header-bar:before{
background-color:#111;
}
body.almaira-shop-dark .almaira-site .top-header-bar,body.almaira-shop-dark .almaira-site .top-header-bar a{
color:#999;
}
body.almaira-shop-dark .almaira-site .top-header-bar a:hover{
color:#fff;
}

body.almaira-shop-dark  .top-header-bar{
 border-color:#111; 
}
/*MAIN HEADER*/
body.almaira-shop-dark .almaira-site .main-header-bar:before{
background-color:#1F1F1F;
}
body.almaira-shop-dark  .main-header-bar{
 border-color:#1F1F1F; 
}
body.almaira-shop-dark .almaira-site .main-header-bar,
body.almaira-shop-dark .almaira-site .main-header-bar a{
color:#999;
}

body.almaira-shop-dark .almaira-site .main-header-bar a:hover,
body.almaira-shop-dark  .main-header-col3 .header-icon span a:hover,
body.almaira-shop-dark .header-icon a #search-btn:hover,body.almaira-shop-dark .almaira-shop-menu .current-menu-item a{
color:#fff;
}
body.almaira-shop-dark  .main-header-col3 .header-icon span a,

body.almaira-shop-dark .header-icon a #search-btn{
color:#999;
}

body.almaira-shop-dark .almaira-shop-menu ul.sub-menu,
body.almaira-shop-dark .almaira-cart{
background-color: #1a1a1a;
}
body.almaira-shop-dark .main-header-col3 .header-icon .almaira-cart p.buttons a{
color:#fff;
}
body.almaira-shop-dark .menu-toggle .menu-btn span{
background: #fff;
}

body.almaira-shop-dark .main-header-col3 .header-icon .almaira-cart p.buttons a {
    background-color: #999;
    border-color: #999;
}
body.almaira-shop-dark .main-header-col3 .header-icon .almaira-cart p.buttons a:hover{
    background-color:#bd8348;
    border-color:#bd8348;
}
/*slider section*/
body.almaira-shop-dark .swiper-slide .slide-bgimg:before{
background:transparent;
}
body.almaira-shop-dark .swiper-pagination-bullet{
background: #999;
opacity: 0.5;
}
body.almaira-shop-dark .swiper-pagination-bullet-active{
background: #fff;
opacity:1;
}
.almaira-shop-dark a.th-slider-button:hover{
  color:#bd8348;
}
/*product category section*/
body.almaira-shop-dark section.thunk-products-section:before{
background:#1f1f1f;
}
body.almaira-shop-dark section.thunk-products-section .ft-button-ul a.button,body.almaira-shop-dark .thunk-product .price del{
color:#999;
}
body.almaira-shop-dark section.thunk-products-section .ft-button-ul a.button:hover,
body.almaira-shop-dark section.thunk-products-section .ft-button-ul a.button.current{
color: #fff;
}
body.almaira-shop-dark .thunk-products-section .thunk-product .woocommerce-loop-product__title,
body.almaira-shop-dark .thunk-product .price,
body.almaira-shop-dark .thunk-button, 
body.almaira-shop-dark .alm-shop-load-more, 
body.almaira-shop-dark .almaira-load-product{
color:#fff;
}
body.almaira-shop-dark.woocommerce .star-rating{
color:#bd8348;

}

/*****************/
/*ribbon section*/
/*****************/
body.almaira-shop-dark section.thunk-ribbon:before{
background:#1f1f1f;
}
body.almaira-shop-dark .thunk-ribbon .heading,
body.almaira-shop-dark #th-ribbon .rbn-desc{
color:#fff;
}

body.almaira-shop-dark .thunk-ribbon-wrapper a{
color:#999;
}
body.almaira-shop-dark .thunk-ribbon-wrapper a:hover{
color:#bd8348;
}
/*****************/
/*Category section*/
/*****************/
body.almaira-shop-dark section.thunk-category-section:before{
background:#1f1f1f;
}
body.almaira-shop-dark .category-side-title{
color: #fff;
border:3px solid #999;
}

body.almaira-shop-dark .thunk-category .title{
color:#fff;
}

body.almaira-shop-dark .thunk-category span.count{
color:#999;
}
/*******************/
/*sort by product*/
/*****************/
body.almaira-shop-dark section.thunk-sortby:before{
background:#1a1a1a;
}
body.almaira-shop-dark .filter-sidebar .heading,body.almaira-shop-dark .thunk-sortby .thunk-product .woocommerce-loop-product__title{
color:#fff;
}
body.almaira-shop-dark .thunk-sortby .sort-radio,body.almaira-shop-dark .th-check-container{
color:#999;
}
body.almaira-shop-dark.woocommerce li.product .thunk-product span.onsale{
background:#bd8348;
}
body.almaira-shop-dark .filter-loadContainer:before {
    background:#1a1a1a;
}
.almaira-shop-dark .checkmark, .almaira-shop-dark .checkmark-p,.almaira-shop-dark .th-checkmark{
background:#555;
border-color:#555;
}
body.almaira-shop-dark .th-sortby-overlay,
body.almaira-shop-dark .th-check-filter-overlay,
body.almaira-shop-dark .responsivecat-list-wrapper{
   background: #1f1f1f;
}
body.almaira-shop-dark .thunk-sortby .sort-radio,
body.almaira-shop-dark .th-check-container{
   color: #fff;
}
/*****************/
/*Instagram section*/
/*****************/
body.almaira-shop-dark section.thunk-instafeed{
background:#1f1f1f;
}
body.almaira-shop-dark .thunk-instafeed .thunk-insta-title{
color:#fff;
}
body.almaira-shop-dark .thunk-contact-plugin-notice, body.almaira-shop-dark .thunk-instafeed-plugin-notice{
color:#999;
}

body.almaira-shop-dark .thunk-contact-plugin-notice:hover, body.almaira-shop-dark .thunk-instafeed-plugin-notice:hover{
color:#fff;
}
/******************/
/*/service section*/
/********************/
body.almaira-shop-dark section.thunk-shipping{
background:#1f1f1f;
}
/***********************/
/*footer*/
/**********************/
body.almaira-shop-dark .bottom-footer-bar,body.almaira-shop-dark .top-footer-bar{
background:#111;
border-color:#111;
color:#999;
}
body.almaira-shop-dark .bottom-footer-bar a,body.almaira-shop-dark .top-footer-bar a{
color:#fff;
}
body.almaira-shop-dark .bottom-footer-bar a:hover,body.almaira-shop-dark .top-footer-bar a:hover{
color:#999;
}
/**************/
/*footer widget*/
/**************/
body.almaira-shop-dark .thunk-footer .widget-footer .widget-footer-bar{
    background: #1a1a1a;
}
body.almaira-shop-dark .widget-footer-bar .widget h3.widget-title{
color:#fff;
}
body.almaira-shop-dark .widget-footer-bar,body.almaira-shop-dark .widget-footer-bar a{
color:#999;
}
body.almaira-shop-dark .widget-footer-bar a:hover{
color:#fff;
}
/*****************/
/*Pages Header*/
/*****************/
.almaira-shop-dark .thunk-page-top-title{
color:#fff;
}
.almaira-shop-dark .thunk-breadcrumb li a,
.almaira-shop-dark .thunk-breadcrumb li, 
.almaira-shop-dark .thunk-breadcrumb li+li:before{
color:#9c9c9c;
}
.almaira-shop-dark .thunk-breadcrumb .trail-end,.almaira-shop-dark .thunk-post-title a{
color:#fff;
}
.almaira-shop-dark #alm-quick-view-content,.almaira-shop-dark #alm-quick-view-content div.summary form.cart{
background:#1f1f1f;
}
/**********************************/
/*woocommerce product page*/
/**********************************/
.almaira-shop-dark.woocommerce .product span.onsale{
background:#bd8348;
}
.almaira-shop-dark .thunk-content-wrap{
background: #1f1f1f;
margin:0;
}
.almaira-shop-dark.woocommerce div.product .product_title{
color:#fff;
}
.almaira-shop-dark.woocommerce div.product p.price, .almaira-shop-dark.woocommerce div.product span.price{
color:#fff;
}
.almaira-shop-dark.woocommerce #content div.product div.summary,.almaira-shop-dark.woocommerce .woocommerce-product-details__short-description{
color:#999;
}
.almaira-shop-dark.woocommerce #content div.product div.summary a:hover, .almaira-shop-dark .woocommerce-Tabs-panel h2, section.up-sells h2,.almaira-shop-dark.woocommerce h1.product_title, .related.products h2, .almaira-shop-dark .single-product.woocommerce ul.products li.product .thunk-product .woocommerce-loop-product__title,.almaira-shop-dark.woocommerce ul.products li.product .thunk-product .woocommerce-loop-product__title, .almaira-shop-dark .thunk-product .woocommerce-loop-product__title{
color:#fff;
}
.almaira-shop-dark.woocommerce .star-rating, .almaira-shop-dark.woocommerce ul.products li.product .star-rating{
color:#bd8348;
}
.almaira-shop-dark.woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .almaira-shop-dark.woocommerce div.product .woocommerce-tabs ul.tabs li:hover a{
color:#fff!important;

}
.almaira-shop-dark.woocommerce div.product .woocommerce-tabs ul.tabs li.active, .almaira-shop-dark.woocommerce div.product .woocommerce-tabs ul.tabs li:hover{background:transparent;}

.almaira-shop-dark.woocommerce div.product .woocommerce-tabs ul.tabs li a{
color:#999;
}
.almaira-shop-dark .comment-form textarea, 
.almaira-shop-dark .comment-form input[type='text'],
 .almaira-shop-dark .comment-form input[type='email'],
 .almaira-shop-dark input[type='text'], 
 .almaira-shop-dark input[type='email'], 
 .almaira-shop-dark textarea, 
 .almaira-shop-dark input[type='password'], 
 .almaira-shop-dark input[type='tel'], 
 .almaira-shop-dark input[type='search'],
 .almaira-shop-dark input[type='url'],
 .almaira-shop-dark .thunk-main-area select.orderby{
background:#1a1a1a;
border-color:#1a1a1a;
    color: #999;
}
.almaira-shop-dark.woocommerce #reviews #comments ol.commentlist li{
border-color:#1a1a1a;
}
.almaira-shop-dark.woocommerce .woocommerce-message {
    border-top-color: #111;
    background: transparent;
    color: #999;
}
.almaira-shop-dark .woocommerce-product-details__short-description,.almaira-shop-dark .product_meta,.almaira-shop-dark .product_meta > span {
    border-color:#999;
}
/********************/
/*cart page style*/
/********************/
.almaira-shop-dark.woocommerce table.shop_table thead th, 
.almaira-shop-dark .cart-subtotal, .almaira-shop-dark .order-total,
.almaira-shop-dark.woocommerce .cart_totals h2,.almaira-shop-dark .thunk-product .woocommerce-loop-product__title a{
color:#fff;
}

.almaira-shop-dark.woocommerce .cart_totals .shop_table,
.almaira-shop-dark.woocommerce table.shop_table .cart-subtotal td,
.almaira-shop-dark.woocommerce table.shop_table .order-total td{

    background: #1a1a1a;
    border-color: #1a1a1a;
}
.almaira-shop-dark #add_payment_method .cart-collaterals .cart_totals tr td, 
.almaira-shop-dark #add_payment_method .cart-collaterals .cart_totals tr th, 
.almaira-shop-dark.woocommerce-cart .cart-collaterals .cart_totals tr td, 
.almaira-shop-dark.woocommerce-cart .cart-collaterals .cart_totals tr th, 
.almaira-shop-dark.woocommerce-checkout .cart-collaterals .cart_totals tr td, 
.almaira-shop-dark.woocommerce-checkout .cart-collaterals .cart_totals tr th {
    border-top: 1px solid #1f1f1f;
}
.almaira-shop-dark.woocommerce #content table.cart td.actions .input-text,
 .almaira-shop-dark.woocommerce-page #content table.cart td.actions .input-text,
 .almaira-shop-dark.woocommerce .woocommerce-cart-form__cart-item .quantity .qty{
 background: #1a1a1a;
    border-color: #1a1a1a;
    color:#999;
}
.almaira-shop-dark.woocommerce table.shop_table td,
.almaira-shop-dark.woocommerce table.shop_table thead th{
border-color:#111!important;
}
/*******************/
/*checkout page*/
/*******************/
.almaira-shop-dark .woocommerce-billing-fields h3,
.almaira-shop-dark.woocommerce-checkout h3#order_review_heading,
.almaira-shop-dark .woocommerce-additional-fields,
.almaira-shop-dark .woocommerce-additional-fields h3{
color:#fff;
}
.almaira-shop-dark .checkout .form-row > label{
color:#999;
}
.almaira-shop-dark.woocommerce .select2-container--default .select2-selection--single .select2-selection__rendered{
line-height:inherit;
color:#999;
}
.almaira-shop-dark.woocommerce form .form-row input.input-text,.almaira-shop-dark .select2-container--default .select2-selection--single,.almaira-shop-dark .woocommerce-input-wrapper textarea.input-text,.almaira-shop-dark.woocommerce #order_review table.shop_table th,.almaira-shop-dark #add_payment_method #payment div.form-row, .almaira-shop-dark.woocommerce-cart #payment div.form-row, .almaira-shop-dark.woocommerce-checkout #payment div.form-row,.almaira-shop-dark .woocommerce-terms-and-conditions-wrapper p{
     background: #1a1a1a;
    border-color: #1a1a1a;
   color:#999!important;
}
 .almaira-shop-dark.woocommerce-checkout #payment ul.payment_methods{
border:none;
}
.almaira-shop-dark .woocommerce-error, .almaira-shop-dark .woocommerce-info, 
.almaira-shop-dark .almaira-shop-dark .woocommerce-message,
.almaira-shop-dark.woocommerce-checkout #payment ul.payment_methods li{
 background: #111;
border-color: #111;
color:#999
}
/***************************/
/*Account page style*/
/***************************/
.almaira-shop-dark .woocommerce-MyAccount-navigation ul li,
.almaira-shop-dark.woocommerce-account .woocommerce-MyAccount-navigation{
    background: #1a1a1a;
    border-color: #111;
}
.almaira-shop-dark.woocommerce-account form .form-row {
    padding: 3px;
    margin: 0 0 6px;
    color: #999;
}
.almaira-shop-dark.woocommerce-account .addresses .title h3{
  color:#fff;
}
.almaira-shop-dark.woocommerce-account .woocommerce-MyAccount-navigation ul li a{
    color:#9c9c9c;
}
/***********************/
/*Product hover style*/
/***********************/
body.almaira-shop-dark .thunk-quik{
background:#1f1f1f;
color:#999;
}
body.almaira-shop-dark .thunk-quik .thunk-compare .compare-button a:before{
color:#fff!important;
}
body.almaira-shop-dark .thunk-quickview, body.almaira-shop-dark .thunk-wishlist{
border-bottom-color:#383636;
}

.almaira-shop-dark .thunk-quickview:hover.thunk-quickview:before, .almaira-shop-dark .thunk-wishlist:hover.thunk-wishlist:before, .almaira-shop-dark .thunk-compare:hover.thunk-compare:before{
background-color:#1f1f1f;
color:#fff;
}
.almaira-shop-dark .thunk-quickview:hover.thunk-quickview:after, .almaira-shop-dark .thunk-wishlist:hover.thunk-wishlist:after, .almaira-shop-dark .thunk-compare:hover.thunk-compare:after{
background-color:#1f1f1f;
}
/******************/
/*contact template*/
/******************/
almaira-shop-dark .thunk-contact-small-heading, .almaira-shop-dark .thunk-contactus-right p{
color:#999;
}
.almaira-shop-dark .thunk-contactus .leadform-lite .lf-field span input, .almaira-shop-dark .thunk-contactus .leadform-lite .lf-field span textarea{
    border: 1px solid #1a1a1a;
    background: #1a1a1a;
    color:#999;
}

@media screen and (max-width: 1024px){
body.almaira-shop-dark .sider.left, 
body.almaira-shop-dark .sider.right, 
body.almaira-shop-dark .sider.overcenter, 
body.almaira-shop-dark .mobile-menu-active .sider.overcenter, 
body.almaira-shop-dark .mobile-above-menu-active .sider.overcenter, 
body.almaira-shop-dark .mobile-bottom-menu-active .sider.overcenter{
  background-color: #1a1a1a;
}
body.almaira-shop-dark .sider .sider-inner ul#almaira-shop-menu.almaira-shop-menu > li > a, 
body.almaira-shop-dark .sider-inner #almaira-above-menu.almaira-shop-menu li a, 
body.almaira-shop-dark .sider-inner #almaira-above-menu.almaira-shop-menu li ul.sub-menu li a{
color:#999;
}
body.almaira-shop-dark .sider.left .almaira-shop-menu li a:hover, 
body.almaira-shop-dark .sider.right .almaira-shop-menu li a:hover, 
body.almaira-shop-dark .sider.overcenter .almaira-shop-menu li a:hover, 
body.almaira-shop-dark .sider .sider-inner ul#almaira-shop-menu.almaira-shop-menu > li > a:hover, 
body.almaira-shop-dark .sider-inner #almaira-above-menu.almaira-shop-menu li a:hover, 
body.almaira-shop-dark .sider-inner #almaira-above-menu.almaira-shop-menu li ul.sub-menu li a:hover,
body.almaira-shop-dark .almaira-site .main-header-bar .menu-close a{
 color:#fff; 
}

}

.almaira-shop-dark #search-overlay.block{
    background: #242424;
}
.almaira-shop-dark select#product_cat,.almaira-shop-dark #search-overlay #search-box input[type='text'],.almaira-shop-dark #search-overlay #search-btn1{
    color:#f1f1f1;
}
.almaira-shop-dark #search-overlay #product_cat option{
background:#242424;
}
.almaira-shop-dark #search-overlay #close-btn{
    color:#fff;
}
.almaira-shop-dark .select2-results {
    display: block;
    background: #242424;
}
.almaira-shop-dark .select2-search--dropdown{
    padding:0
}
.almaira-shop-dark #move-to-top {
color: #ddd;
}
.almaira-shop-dark #alm-quick-view-modal .alm-qv-image-slider .flex-direction-nav a {
color:#fff;
}
.almaira-shop-dark #alm-quick-view-modal .alm-qv-image-slider .flex-control-paging li a{
background:#9c9c9c;
}
.almaira-shop-dark #alm-quick-view-modal .alm-qv-image-slider .flex-control-paging li a.flex-active{
background:#fff;
}";

}
/**************************/
// Global Color Custom Style
/**************************/
$almaira_shop_theme_clr = get_theme_mod('almaira_shop_theme_clr','');
$almaira_background_color = get_theme_mod('background_color','');
$almaira_shop_loader_bg_clr = get_theme_mod('almaira_shop_loader_bg_clr','#9c9c9c');
$almaira_style.="
    a:hover,
    .thunk-category a:hover .title,
    .thunk-category a:hover .count,
    #move-to-top:hover,
    .thunk-quik .thunk-compare .woocommerce.product.compare-button a:hover:before,.almaira-shop-menu li a:hover,.almaira-cart ul.cart_list li a:hover,.thunk-product .yith-wcwl-wishlistexistsbrowse.show:before, .thunk-product .yith-wcwl-wishlistaddedbrowse.show:before,.summary .yith-wcwl-add-to-wishlist.show .add_to_wishlist::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse.show a::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse.show a::before,.thunk-body li.product:hover .thunk-product .button, .thunk-body li.product:hover .thunk-product .added_to_cart.wc-forward,body.almaira-shop-dark .thunk-ribbon-wrapper a:hover,.almaira-shop-dark a.th-slider-button:hover,#close-btn:hover, #search-btn1:hover,.thunk-quickview:hover.thunk-quickview:before, .thunk-wishlist:hover.thunk-wishlist:before, .thunk-compare:hover.thunk-compare:before,.overcenter .menu-close .menu-close-btn,.thunk-post-excerpt .read-more .thunk-readmore:hover,.almaira-shop-dark #search-overlay #close-btn:hover,body.almaira-shop-dark .woocommerce a.remove:hover,.woocommerce .entry-summary a.compare.button.added:before,.woocommerce ul.products li.product .price,.almaira-shop-menu .current-menu-item a,.thunk-contact-plugin-notice, .thunk-instafeed-plugin-notice {
        color: {$almaira_shop_theme_clr};
    }";
    $almaira_style.=" .thunk-category a:hover,
   .thunk-counter-wrapper .counter-content:hover,#filter-sortby-load-more:hover,.thunk-button:hover,body.almaira-shop-dark .main-header-col3 .header-icon .almaira-cart p.buttons a:hover,body .woocommerce-tabs .tabs li a::before,.thunk-post-excerpt .read-more .thunk-readmore:hover{
        border-color: {$almaira_shop_theme_clr};
    }
    ";
    $almaira_style.=" .th-button:hover:before,.woocommerce-message,.main-header-col3 .header-icon .almaira-cart p.buttons a:hover,.thunk-body li.product:hover .thunk-product .button, .thunk-body li.product:hover .thunk-product .added_to_cart.wc-forward,.th-check-container .th-checkmark:after{
        border-color: {$almaira_shop_theme_clr};
    }";
    $almaira_style.=".thunk-category-section .owl-nav i:hover, 
    .container input:checked ~ .checkmark,
    .thunk-button:hover,
    .woocommerce li.product .thunk-product span.onsale,
    .woocommerce nav.woocommerce-pagination ul li span.current,.sort-radio span.th-selected,.container input:checked ~ .checkmark, .container input:checked ~ .checkmark-p,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.main-header-col3 .header-icon .almaira-cart p.buttons a:hover,.thunk-single-post [type='submit'], .thunk-single-page [type='submit'], .form-content [type='submit'], .almaira-widget-content .woocommerce-product-search button, .woocommerce-product-search button,body.almaira-shop-dark.woocommerce li.product .thunk-product span.onsale,.almaira-shop-dark.woocommerce .product span.onsale,.dot_1,.dot_qv1,#filter-sortby-load-more:hover,body.almaira-shop-dark .main-header-col3 .header-icon .almaira-cart p.buttons a:hover,#alm-quick-view-close:hover,.woocommerce .product span.onsale{
        background: {$almaira_shop_theme_clr};
    }
    ";
    $almaira_style.=".thunk-body{
     background:{$almaira_background_color};
    }";
    $almaira_style.=".thunk-breadcrumb li a:hover{color:{$almaira_shop_theme_clr}}";
    
    $almaira_style.="
    @media screen and (max-width: 1024px){
        .left .menu-close,.right .menu-close{background:{$almaira_shop_theme_clr};}
    }";
/**************************/
// Above Header
/**************************/
    $almaira_shop_abv_hdr_hgt = get_theme_mod('almaira_shop_abv_hdr_hgt','40');
    $almaira_shop_abv_hdr_botm_brd = get_theme_mod('almaira_shop_abv_hdr_botm_brd','1');
    $almaira_shop_above_brdr_clr = get_theme_mod('almaira_shop_above_brdr_clr');
    $almaira_style.=".top-header-container{line-height:{$almaira_shop_abv_hdr_hgt}px;}.top-header-bar{border-bottom-width:{$almaira_shop_abv_hdr_botm_brd}px;}.top-header-bar,body.almaira-shop-dark .top-header-bar{border-bottom-color:{$almaira_shop_above_brdr_clr}}";
/***********************************/
// main header
/***********************************/
$almaira_shop_main_hdr_botm_brd = get_theme_mod('almaira_shop_main_hdr_botm_brd','1');
$almaira_shop_main_brdr_clr = get_theme_mod('almaira_shop_main_brdr_clr');
$almaira_style.= ".main-header-bar{border-bottom-width:{$almaira_shop_main_hdr_botm_brd}px;}.main-header-bar,body.almaira-shop-dark .main-header-bar{border-bottom-color:{$almaira_shop_main_brdr_clr}}";
/**************************/
// Footer
/**************************/
/******************/
// Footer Above
/******************/
    $almaira_shop_abve_ftr_hgt = get_theme_mod('almaira_shop_abve_ftr_hgt','40');
    $almaira_shop_abv_ftr_botm_brd = get_theme_mod('almaira_shop_abv_ftr_botm_brd','1');
    $almaira_shop_above_frt_brdr_clr = get_theme_mod('almaira_shop_above_frt_brdr_clr');
    $almaira_style.=".top-footer-container{line-height:{$almaira_shop_abve_ftr_hgt}px;}
   .top-footer-bar{border-bottom-width:{$almaira_shop_abv_ftr_botm_brd}px;}.top-footer-bar,body.almaira-shop-dark .top-footer-bar{border-bottom-color:{$almaira_shop_above_frt_brdr_clr}}";
   
/******************/
// Footer Bottom
/******************/
// botom footer
    $almaira_shop_btm_ftr_hgt = get_theme_mod('almaira_shop_btm_ftr_hgt','60');
    $almaira_shop_btm_ftr_botm_brd = get_theme_mod('almaira_shop_btm_ftr_botm_brd','1');
    $almaira_shop_bottom_frt_brdr_clr = get_theme_mod('almaira_shop_bottom_frt_brdr_clr');
    $almaira_style.=".bottom-footer-container{line-height:{$almaira_shop_btm_ftr_hgt}px;}
   .bottom-footer-bar{border-top-width:{$almaira_shop_btm_ftr_botm_brd}px;}.bottom-footer-bar,body.almaira-shop-dark .bottom-footer-bar{border-top-color:{$almaira_shop_bottom_frt_brdr_clr}}"; 
$almaira_style.=".almaira_overlayloader{
    background: {$almaira_shop_loader_bg_clr};
}
";

/************************/    
// scroll to top button
/************************/  
$almaira_shop_scroll_to_top_option = get_theme_mod('almaira_shop_scroll_to_top_option','right');
if($almaira_shop_scroll_to_top_option=='left'){
   $almaira_style.="#move-to-top{left:30px; right:auto;}";  
}
/************************/    
// Container
/************************/  
$almaira_shop_default_container  = get_theme_mod('almaira_shop_default_container','fullwidth');
$almaira_shop_conatiner_width  = get_theme_mod('almaira_shop_conatiner_width');
// boxed
$almaira_shop_conatiner_maxwidth  = get_theme_mod('almaira_shop_conatiner_maxwidth');
$almaira_shop_conatiner_top_btm  = get_theme_mod('almaira_shop_conatiner_top_btm');

if($almaira_shop_default_container =='fullwidth'){
 $almaira_style.="#page .container{max-width:{$almaira_shop_conatiner_width}px;}"; 
}else{
  $almaira_style.="#page .container{max-width:100%;} #page.almaira-site
  {max-width:{$almaira_shop_conatiner_maxwidth}px; margin:{$almaira_shop_conatiner_top_btm}px auto;}
  header.shrink{max-width:{$almaira_shop_conatiner_maxwidth}px;}
  .boxed-layout header.shrink{margin-top:-{$almaira_shop_conatiner_top_btm}px!important;}"; 
}



$almaira_shop_background_image = get_theme_mod('almaira_shop_ribbon_background_image_url');

$almaira_shop_background_image_repeat = get_theme_mod('almaira_shop_ribbon_background_repeat','no-repea');
  
$almaira_shop_background_image_size = get_theme_mod('almaira_shop_ribbon_background_size','cover');

$almaira_shop_background_image_position = get_theme_mod('almaira_shop_ribbon_background_position','center center');

$almaira_shop_background_image_attach = get_theme_mod('almaira_shop_ribbon_background_attach','scroll');
$almaira_style.="
    #th-ribbon .content-area{
    background-image: url('{$almaira_shop_background_image}');
    background-repeat: $almaira_shop_background_image_repeat;
    background-size: $almaira_shop_background_image_size;
    background-position: $almaira_shop_background_image_position;
    background-attachment: $almaira_shop_background_image_attach;
  }";


// woocommerce pages
if(get_theme_mod('almaira_shop_woo_checkout_distraction_enable')==true){
    $almaira_style.=".woocommerce-checkout .main-header .main-header-col2,.woocommerce-checkout .main-header .main-header-col3,.woocommerce-checkout .almaira-site .top-header,.woocommerce-checkout .almaira-site .bottom-header,.woocommerce-checkout .almaira-site .top-footer,.woocommerce-checkout .almaira-site .widget-footer{display:none;}.woocommerce-checkout .main-header .main-header-bar.two .main-header-col1{ -webkit-flex: auto;
    -ms-flex:auto;
    flex:auto;}";
}
if(get_theme_mod('almaira_shop_woo_cart_distraction_enable')==true){
    $almaira_style.=".woocommerce-cart .main-header .main-header-col2,.woocommerce-cart .almaira-site .top-header,.woocommerce-cart .almaira-site .bottom-header,.woocommerce-cart .almaira-site .top-footer,.woocommerce-cart .almaira-site .widget-footer{display:none;}.woocommerce-cart .main-header .main-header-bar.two .main-header-col1{
    -webkit-flex: auto;
    -ms-flex:auto;
    flex:auto;}";
}


return $almaira_style;
}
//start logo width
function almaira_shop_logo_width_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.thunk-logo img{
    max-width: ' . $v3 . 'px;
  }';
  $custom_css = almaira_shop_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
//Header Image Height
function almaira_shop_header_height_img_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.thunk-page-top-banner{
    height: ' . $v3 . 'px;
  }';
  $custom_css = almaira_shop_add_media_query( $dimension, $custom_css );
  return $custom_css;
}