<?php global $woocommerce; ?>

<a href="<?= wc_get_cart_url(); ?>" class="link-cart">

    <div class="link-cart__count">
        <?= $woocommerce->cart->cart_contents_count; ?>
    </div>

    <img class="link-cart__icon" src='https://i.postimg.cc/6p5vqrCx/shopping-cart.png' border='0' alt='icons8-shopping-basket-30'/>
    <!--<img class="search-header__form__submit__icon" src="<?= get_template_directory_uri() ?>/dist/assets/img/icon-search.png" alt="Icono de buscar">-->
</a>