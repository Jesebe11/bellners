<?php

/* sacamos el thumb del pre title */
remove_action(
    'woocommerce_before_shop_loop_item_title',
    'woocommerce_template_loop_product_thumbnail',
    10
);

  /* lo metemos en el title luego del nombre */
add_action(
    'woocommerce_shop_loop_item_title',
    'woocommerce_template_loop_product_thumbnail',
    15
);