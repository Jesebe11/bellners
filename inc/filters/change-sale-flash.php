<?php
add_filter( 'woocommerce_sale_flash', function( $texto ) {
	$imagen = '<img src="https://tuweb.com/wp-content/uploads/oferta.jpg" alt="Oferta" height="50" width="50" class="oferta">';
	return $imagen;
}, 10, 1 );