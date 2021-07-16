<?php

    get_template_part( 'template-parts/components/content-home/slider-primary' );

?>
<div class="block-general">
    <?php

        get_template_part( 'template-parts/components/reusables/titles/titles' , '' , ['title' => 'Servicios' , 'permalink' => '/index.php/category/servicios/'] );
            get_template_part( 'template-parts/components/content-home/blocks-home/b-h-service' );
        get_template_part( 'template-parts/components/reusables/titles/titles' , '' , ['title' => 'Nuestros productos' , 'permalink' => '/index.php/product-category/templates/'] );
            get_template_part( 'template-parts/components/content-home/blocks-home/b-h-products' );

    ?>
</div>

<?php

    get_template_part( 'template-parts/components/content-home/blocks-home/b-h-parallax' );

?>

<div class="block-general">
    <?php

        get_template_part( 'template-parts/components/reusables/titles/titles' , '' , ['title' => 'Nuestros clientes' , 'permalink' => '/index.php/category/clientes/'] );
            get_template_part( 'template-parts/components/content-home/blocks-home/b-h-clients' );
        get_template_part( 'template-parts/components/reusables/titles/titles' , '' , ['title' => 'Blog' , 'permalink' => '/index.php/category/blogs/']  );
            get_template_part( 'template-parts/components/content-home/blocks-home/b-h-blog' );

    ?>
</div>