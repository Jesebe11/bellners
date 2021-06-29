<?php

add_action('woocommerce_before_shop_loop', 'remove_result_count' );
    function remove_result_count()
    {
        remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
    }