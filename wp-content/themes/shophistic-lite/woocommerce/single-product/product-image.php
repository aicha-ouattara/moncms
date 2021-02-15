<?php
    /**
     * Single Product Image
     *
     * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
     *
     * HOWEVER, on occasion WooCommerce will need to update template files and you
     * (the theme developer) will need to copy the new files to your theme to
     * maintain compatibility. We try to do this as little as possible, but it does
     * happen. When this occurs the version of the template file will be bumped and
     * the readme will list any important changes.
     *
     * @see     https://docs.woocommerce.com/document/template-structure/
     * @package WooCommerce/Templates
     * @version 3.5.1
     */

    defined( 'ABSPATH' ) || exit;

    // Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
    if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
        return;
    }

    global $product;

    $columns = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
    $thumbnail_size = apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' );
    $post_thumbnail_id = $product->get_image_id();
    $full_size_image = wp_get_attachment_image_src( $post_thumbnail_id, $thumbnail_size );
    $wrapper_classes = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
        'woocommerce-product-gallery',
        'woocommerce-product-gallery--' . ( has_post_thumbnail() ? 'with-images' : 'without-images' ),
        'woocommerce-product-gallery--columns-' . absint( $columns ),
        'images',
    ) );
?>
	<div class="row">
        <div class="col-md-2 col-sm-2 ql_thumbnail_column">

        		<?php do_action( 'woocommerce_product_thumbnails' ); ?>

        </div><!-- /ql_thumbnail_column -->

        <div class="col-md-10 col-sm-10 ql_main_image_column_wrap">
        	<div class="images">
            <div class="<?php echo 'ql_main_image_column' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>">
            	<div class="ql_main_images owl-carousel woocommerce-product-gallery__wrapper">

					<?php
                        if ( has_post_thumbnail() ) {

                            $html = wc_get_gallery_image_html( $post_thumbnail_id, true );
                            echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );

                            //Add the rest of the images
                            $attachment_ids = $product->get_gallery_image_ids();
                            if ( $attachment_ids ) {
                                foreach ( $attachment_ids as $attachment_id ) {
                                    $image_link = wp_get_attachment_url( $attachment_id );
                                    $image_metadata = wp_get_attachment_metadata( $attachment_id );
                                    if ( ! $image_link ) {
                                        continue;
                                    }

                                    $image = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ) );
                                    $image_title = esc_attr( get_the_title( $attachment_id ) );

                                    echo apply_filters( 'woocommerce_single_product_image_thumbnail_html',
                                        sprintf( '<a href="%s" title="%s" data-width="%s" data-height="%s">%s</a>',
                                            esc_url( $image_link ),
                                            esc_attr( $image_title ),
                                            $image_metadata['width'],
                                            $image_metadata['height'],
                                            $image
                                        ),
                                        $attachment_id,
                                        $product->get_image_id()
                                    );

                                }
                            }

                        } else {

                            $html = '<div class="woocommerce-product-gallery__image--placeholder">';
                            $html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src() ), esc_html__( 'Awaiting product image', 'shophistic-lite' ) );
                            $html .= '</div>';

                            echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );

                        }
                    ?>
				</div><!-- /ql_main_images -->
				<a href="#" class="ql_main_images_btn ql_prev"><i class="ql-arrow-left"></i></a>
                <a href="#" class="ql_main_images_btn ql_next"><i class="ql-arrow-right"></i></a>

			</div><!-- /ql_main_image_column -->
			</div>
        </div><!-- /ql_main_image_column_wrap -->
    </div><!-- /row -->