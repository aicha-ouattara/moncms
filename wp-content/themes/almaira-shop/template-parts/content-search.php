<?php
/**
 * Template part for displaying posts
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
?>
<article class="thunk-article search <?php post_class('post'); ?>">
					<div class="post-content-outer-wrapper">
					<?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {?>
						<div class="thunk-post-img-wrapper">
							<div class="thunk-post-img">
								<a href="<?php the_permalink() ?>" class="post-thumb-link">
									<?php the_post_thumbnail('post_thumbnail_loop'); ?>
								</a>
							</div>
						</div>
					<?php } ?>
					<div class="thunk-posts-description">
						<div class="thunk-post-date">
							<?php the_date(); ?>
						</div>
						<?php the_title( '<h2 class="entry-title thunk-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
						<div class="thunk-post-excerpt">
								<?php almaira_shop_the_excerpt();?> 
						</div>
					<div class="thunk-post-meta">
						<div class="thunk-post-info">
							<?php the_author_posts_link(); ?>
						    <div class="thunk-post-category">
							<?php the_category(' '); ?>
						    </div>
					     </div>
						<div class="thunk-post-comments">
							<div class="thunk-comments-icon">
								<span class="thunk-comments"><a href="<?php comments_link(); ?>" title=""><?php comments_popup_link(esc_html('0','almaira-shop'), esc_html('1','almaira-shop'), esc_html('%','almaira-shop')); ?></a></span>
							</div>
						</div>
					</div> <!-- thunk-posts-description end -->
					</div> <!-- thunk-posts-description end -->
				</div> <!-- post-content-outer-wrapper end -->
</article>