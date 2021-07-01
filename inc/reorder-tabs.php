<?php

/**
 * Reorder product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_reorder_tabs', 98 );
function woo_reorder_tabs( $tabs ) {

    $tabs['description']['priority'] = 5;			// Description second
	$tabs['reviews']['priority'] = 10;			// Reviews first
	//$tabs['additional_information']['priority'] = 15;	// Additional information third

	return $tabs;
}