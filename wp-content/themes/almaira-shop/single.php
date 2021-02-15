<?php
/**
 * The template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
get_header();
$almaira_sidebar = get_post_meta( $post->ID, 'almaira_shop_sidebar_dyn', true );?>
<div id="content" class="site-content <?php echo esc_attr($almaira_sidebar); ?> thunk-single-post">
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
				get_template_part( 'template-parts/content', 'single');?>
				<div class="thunk-post-footer">
					<?php if (has_tag()) { ?>
					<div class="thunk-tags-wrapper">
						<?php
							the_tags( 'Tag : ', ' ', ' ' );
						?>
					</div>
				<?php } ?>
			    </div> <!-- thunk-post-footer end -->
				<div class="thunk-related-links ">
			   <?php the_post_navigation();?>
			   </div>

			   <?php 
			   // Author bio.
			    if ( 'post' === get_post_type() ) :
				get_template_part( 'template-parts/author-bio' );
			    endif;
			    // If comments are open or we have at least one comment, load up the comment template.
			    if ( comments_open() || get_comments_number() ) :
				comments_template();
			    endif;
			    endwhile;
			endif;
			?>
			</main>
		</div> <!-- primary End -->
      <?php
         if( $almaira_sidebar != 'no-sidebar' ){
             get_sidebar();
           }
         ?>
	 </div> <!-- thunk-main-area End -->	
  </div> <!-- container End -->
</div> <!-- thunk-content-wrap End -->
</div> <!-- content End -->
<?php get_footer();?>
</div><!-- #page -->