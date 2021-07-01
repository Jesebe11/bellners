<?php

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '' . get_the_author() . '' ;
    }
    return $title;
});

/** Woocommerce gallery trigger over full image */

if( ! function_exists( 'WC_SCRIPT_in_wp_footer' ) && function_exists( 'is_product' ) ) {
    /**
     * Add script in the WP footer page.
     */
    function WC_SCRIPT_in_wp_footer() {
        if ( is_product() && ! wp_is_mobile() ) {
            ?>
                <script type="application/javascript">
                    jQuery( 'div.woocommerce-product-gallery.images' ).on( 'click', 'div.flex-viewport figure' , function(){
                        jQuery( this ).closest( '.woocommerce-product-gallery' ).find( '.woocommerce-product-gallery__trigger' ).trigger( 'click' );
                    });
                </script>
            <?php
        }
    }
}
add_action( 'wp_footer', 'WC_SCRIPT_in_wp_footer' );

/**
 * Traer cierta cantidad especifica de post para las archive
*/

function bellner_change_posts_per_page( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
    return;
    }

    if ( is_archive(  ) ) {
    $query->set( 'posts_per_page', 6 );
    }
}
add_filter( 'pre_get_posts', 'bellner_change_posts_per_page' );