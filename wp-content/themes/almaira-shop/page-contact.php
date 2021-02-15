<?php
/**
* Template Name: Contact Page
*
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
*/
get_header();  ?>
<div class="thunk-contact-body-wrap">
<div id="content" class="site-content no-sidebar">
	<!-- page-top-header Start -->
	<?php almaira_shop_get_header();?>
	 <!-- page-top-header End -->
	<div class="thunk-content-wrap">
	<div id="container" class="container site-container">
	<div class="thunk-main-area">
		<div id="primary" class="main primary-content-area">
			<main id="main" class="site-main" role="main">
				<?php
                   if( shortcode_exists( 'almaira-shop-contact-page' ) ){
                        do_shortcode("[almaira-shop-contact-page ]");
                     }
                    ?>		 
			</main>
		</div>  <!-- primary End -->
	</div> <!-- thunk-main-area End -->
		</div> <!-- container End -->
	</div>  <!-- thunk-content-wrap End -->
</div> <!-- content End -->
</div> <!-- thunk-contact-body-wrap End -->
<?php 
get_footer();