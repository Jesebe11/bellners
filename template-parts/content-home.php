<?php

    get_template_part( 'template-parts/components/content-home/slider-primary' );

?>
<div class="block-home">
    <?php

        get_template_part( 'template-parts/components/content-home/titles-home/titles-home' , '' , ['title' => 'Servicios'] );
            get_template_part( 'template-parts/components/content-home/blocks-home/b-h-service' );
        get_template_part( 'template-parts/components/content-home/titles-home/titles-home' , '' , ['title' => 'Nuestro Portafolio'] );
            get_template_part( 'template-parts/components/content-home/blocks-home/b-h-portfolio' );

    ?>
</div>

<?php

    get_template_part( 'template-parts/components/content-home/blocks-home/b-h-parallax' );

?>

<div class="block-home">
    <?php

        get_template_part( 'template-parts/components/content-home/titles-home/titles-home' , '' , ['title' => 'Nuestros clientes'] );
            get_template_part( 'template-parts/components/content-home/blocks-home/b-h-clients' );
        get_template_part( 'template-parts/components/content-home/titles-home/titles-home' , '' , ['title' => 'Blog'] );
            get_template_part( 'template-parts/components/content-home/blocks-home/b-h-blog' );

    ?>
</div>