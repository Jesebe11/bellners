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

// prueba

add_action( 'woocommerce_after_add_to_cart_quantity', 'ts_quantity_plus_sign' );

function ts_quantity_plus_sign() {
    echo '<button type="button" class="plus" >+</button>';
}

add_action( 'woocommerce_before_add_to_cart_quantity', 'ts_quantity_minus_sign' );
function ts_quantity_minus_sign() {
    echo '<button type="button" class="minus" >-</button>';
}

add_action( 'wp_footer', 'ts_quantity_plus_minus' );

function ts_quantity_plus_minus() {
   // To run this on the single product page
        if ( ! is_product() ) return;
    ?>
    <script>

        jQuery(document).ready(function($){
            $('form.cart').on( 'click', 'button.plus, button.minus', function() {

            // Get current quantity values
            var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
            var val   = parseFloat(qty.val());
            var max = parseFloat(qty.attr( 'max' ));
            var min = parseFloat(qty.attr( 'min' ));
            var step = parseFloat(qty.attr( 'step' ));

            // Change the value if plus or minus
            if ( $( this ).is( '.plus' ) ) {
                if ( max && ( max <= val ) ) {
                    qty.val( max );
                }
                else {
                    qty.val( val + step );
                }
            }
            else {
                if ( min && ( min >= val ) ) {
                    qty.val( min );
                }
                else if ( val > 1 ) {
                    qty.val( val - step );
                }
            }
        });
    });
</script>
<?php
}
// Remover tab my account address
add_filter( 'woocommerce_account_menu_items', 'bellner_remove_address_my_account', 999 );

function bellner_remove_address_my_account( $items ) {

unset($items['edit-address']);

return $items;

}