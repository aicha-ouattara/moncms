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
$almaira_sidebar = get_post_meta( get_queried_object_id(), 'almaira_shop_sidebar_dyn', true );
?>
<div id="content" class="site-content  <?php echo esc_attr($almaira_sidebar); ?>  thunk-blog-page">
<?php almaira_shop_get_header();?>
<div class="thunk-content-wrap">
	<div class="container">
		<div class="thunk-main-area">
		<div id="primary" class="main primary-content-area">
			<main id="main" class="site-main" role="main">
				<?php
			if( have_posts()):
				/* Start the Loop */
				while ( have_posts() ) : the_post();
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
				get_template_part( 'template-parts/content', get_post_format() );
				endwhile;
				
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
			</main>
			<?php almaira_shop_post_loader();?>
		</div> <!-- primary End -->
      <?php
         if( $almaira_sidebar != 'no-sidebar' ){
             get_sidebar();
           }
         ?>
	 </div> <!-- thunk-main-area End -->	
  </div> <!-- container End -->
</div> <!-- thunk-content-wrap -->
</div> <!-- content End -->
<?php get_footer();?>
</div><!-- #page -->
