<?php
	add_filter( 'woocommerce_sale_flash', function( $texto ) {
		$imagen = '<img src="https://i.postimg.cc/SshHgpvY/discount-1.png" alt="Oferta" class="sale-flash">';
		return $imagen;
	}, 10, 1 );