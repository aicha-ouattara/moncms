<?php
/**
 * View General
 *
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
?>
<div class="almaira-shop-container almaira-shop-welcome">
		<div id="poststuff">
			<div id="post-body" class="columns-1">
				<div id="post-body-content">
					<!-- All WordPress Notices below header -->
					<h1 class="screen-reader-text"><?php esc_html_e( 'Almaira Shop', 'almaira-shop' ); ?> </h1>
						<?php do_action( 'almaira_shop_welcome_page_content_before' ); ?>
                        <div class="almaira-shop-content">
						<?php do_action( 'almaira_shop_welcome_page_main_content' ); ?>
                         </div>
						<?php do_action( 'almaira_shop_welcome_page_content_after' ); ?>
				</div>
			</div>
			<!-- /post-body -->
			<br class="clear">
		</div>


</div>
