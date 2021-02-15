<?php
/**
 * Primary sidebar
 *
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */
$sidebar = apply_filters( 'almaira_shop_get_sidebar', 'sidebar-1' );
?>
<div id="sidebar-primary" class="widget-area sidebar">
	<div class="sidebar-main">
		<?php
    if ( is_active_sidebar($sidebar) ){
    dynamic_sidebar($sidebar);
     }
      ?>
	</div>  <!-- sidebar-main End -->
</div> <!-- sidebar-primary End -->