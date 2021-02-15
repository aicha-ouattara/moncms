<?php
/**
 * Template part for displaying single post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
?>
<article class="thunk-article ">
	<div class="entry-content">
					<div class="post-content-outer-wrapper">
						<div class="thunk-posts-description">
							<?php the_post_thumbnail('post_thumbnail_loop'); ?>
						<div class="thunk-post-date">
							<?php the_date(); ?>
						</div>
						<div class="thunk-post-info">	
					    <?php the_author_posts_link(); ?>	
						<div class="thunk-post-category">
							<?php the_category(' '); ?>
						</div>
						</div>
						<div class="thunk-post-excerpt">
								<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'almaira-shop' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'almaira-shop' ),
					'after'  => '</div>',
				) );
			?>
						</div>
						
					</div> <!-- thunk-posts-description end -->
		</div> <!-- post-content-outer-wrapper end -->
	</div>
</article>