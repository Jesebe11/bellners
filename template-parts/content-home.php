<?php

    get_template_part( 'template-parts/components/content-home/slider-primary' );

?>
<div class="block-general">
    <?php

        get_template_part( 'template-parts/components/reusables/titles/titles' , '' , ['title' => 'Servicios'] );
            get_template_part( 'template-parts/components/content-home/blocks-home/b-h-service' );
        get_template_part( 'template-parts/components/reusables/titles/titles' , '' , ['title' => 'Nuestros productos'] );
            get_template_part( 'template-parts/components/content-home/blocks-home/b-h-products' );

    ?>
</div>

<?php

    get_template_part( 'template-parts/components/content-home/blocks-home/b-h-parallax' );

?>

<div class="block-general">
    <?php

        get_template_part( 'template-parts/components/reusables/titles/titles' , '' , ['title' => 'Nuestros clientes'] );
            get_template_part( 'template-parts/components/content-home/blocks-home/b-h-clients' );
        get_template_part( 'template-parts/components/reusables/titles/titles' , '' , ['title' => 'Blog'] );
            get_template_part( 'template-parts/components/content-home/blocks-home/b-h-blog' );

    ?>
</div>