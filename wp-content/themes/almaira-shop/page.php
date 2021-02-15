<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
get_header();

if(empty(get_post_meta( $post->ID, 'almaira_shop_sidebar_dyn', true ))){
$almaira_sidebar = 'no-sidebar';
}else{
$almaira_sidebar = get_post_meta( $post->ID, 'almaira_shop_sidebar_dyn', true );
}
?>
<div id="content" class="site-content <?php echo esc_attr($almaira_sidebar); ?> thunk-single-page">
	<?php
	if(class_exists( 'WooCommerce' )){
		if(!is_cart() && !is_checkout() && !is_account_page() ){
               almaira_shop_get_header();
          }
	}else{
        almaira_shop_get_header();
	} 

?>
	<div class="thunk-content-wrap">
	<div class="container">
		<div class="thunk-main-area">
		<div id="primary" class="main primary-content-area">
			<?php if((class_exists( 'WooCommerce' ))&& (is_cart() || is_checkout() || is_account_page() )){?>
			<div class="thunk-breadcrumb-wrapper">
					<?php almaira_shop_breadcrumb();?>
				</div> 
			<?php } ?>
			<main id="main" class="site-main" role="main">
				<?php
			while( have_posts() ) : the_post();
				 get_template_part( 'template-parts/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
			</main>
		</div><!-- primary End -->
         <?php
         if( $almaira_sidebar != 'no-sidebar' ){
             get_sidebar();
           }
         ?>

	 </div> <!-- thunk-main-area End -->	
  </div> <!-- container End -->
</div><!-- thunk-content-wrap -->
</div> <!-- content End -->
<?php get_footer();?>
</div><!-- #page -->