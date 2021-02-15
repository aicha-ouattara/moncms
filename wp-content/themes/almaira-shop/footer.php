<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package ThemeHunk
 * @subpackage Almaira Shop
 * @since 1.0.0
 */ 
?>
<footer class="thunk-footer">
<div class="footer-wrap widget-area">
<?php 
$almaira_shop_above_footer_layout = get_theme_mod('almaira_shop_above_footer_layout','ft-abv-none');
$almaira_shop_bottom_footer_widget_layout = get_theme_mod('almaira_shop_bottom_footer_widget_layout','ft-wgt-none');
$almaira_shop_bottom_footer_layout = get_theme_mod('almaira_shop_bottom_footer_layout','ft-btm-one');
if($almaira_shop_above_footer_layout!=='ft-abv-none'):
        almaira_shop_top_footer();
endif;
if($almaira_shop_bottom_footer_widget_layout!=='ft-wgt-none'):
        almaira_shop_widget_footer();
endif;
if($almaira_shop_bottom_footer_layout!=='ft-btm-none'):
        almaira_shop_bottom_footer();
endif;
      ?>
   </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>