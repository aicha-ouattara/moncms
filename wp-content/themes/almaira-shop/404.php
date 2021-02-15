<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
get_header();
?>
<div class="thunk-404-body-wrap">
<div id="content" class="site-content no-sidebar">
		<div class="thunk-404-page">
			<div class="container">
		
			<article id="error-404" >
			<div class="error-404 not-found">
				<div class="error-heading">
					<h2 class="thunk-page-top-title entry-title"><?php esc_html_e( '404', 'almaira-shop' ); ?></h2>
					<h3><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'almaira-shop' ); ?></h3>
				</div><!-- .error-heading -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'almaira-shop' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->

				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-404',
					'depth'          => 1,
					'container'      => 'div',
					'container_id'   => 'quick-links-404',
					'fallback_cb'    => false,
					) );
				?>
			</div><!-- .error-404 -->
          </article>
			</div> <!-- container End -->
		</div> <!-- thunk-404-page End -->
</div> <!-- content End -->
</div>  
<?php get_footer();?>
</div><!-- #page -->