<?

// Eliminamos los productos relacionados de la zona en la que están
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// Creamos la nueva pestaña
function maybe_add_tab( $tabs ) {

    $tabs['related_items'] = array(
        'title'    => __( 'You Might Also Like', 'textdomain' ), //Cambiamos nombre de la pestaña
        'priority' => 90, // Establecemos dónde mostrar la pestaña
        'callback' => 'dl_mostrar_prod_relacc_en_pestana',
    );

    return $tabs;
}

add_filter( 'woocommerce_product_tabs', 'maybe_add_tab' );

// Generamos todo el contenido de la pestaña
function sv_wc_maybe_add_upsell_tab( $tabs ) {
    global $product;

    $upsells = is_callable( array( $product, 'get_upsell_ids' ) )     ? $product->get_upsell_ids()     : $product->get_upsells();
    $related = is_callable( array( $product, 'get_cross_sell_ids' ) ) ? $product->get_cross_sell_ids() : $product->get_cross_sells();

    if ( empty( $upsells ) && empty( $related ) ) {
        return $tabs;
    }

    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

    $new_tabs = is_null( $tabs ) ? array() : $tabs;

    $new_tabs['upsells'] = array(
        'title'    => __( 'Related Items', 'woocommerce-upsells-tab' ),
        'priority' => 25,
        'callback' => 'dl_mostrar_prod_relacc_en_pestana',
    );

    return $new_tabs;
}
add_filter( 'woocommerce_product_tabs', 'sv_wc_maybe_add_upsell_tab' );


// Volver a activar los prodcutos relacionados
function dl_mostrar_prod_relacc_en_pestana() {
    woocommerce_upsell_display();
    woocommerce_output_related_products();
}