<?php if( is_category( 'blogs' ) ) :  ?>
        <?php if( is_active_sidebar( 'section-blogs' ) ) {
            dynamic_sidebar( 'section-blogs' );
        } ?>
    <?php elseif(is_category( 'proyectos' )) : ?>
        <?php if( is_active_sidebar( 'section-proyectos' ) ) {
            dynamic_sidebar( 'section-proyectos' );
        } ?>
        <?php elseif(is_category( 'clientes' )) : ?>
        <?php if( is_active_sidebar( 'section-clientes' ) ) {
            dynamic_sidebar( 'section-clientes' );
        } ?>
        <?php elseif(is_category( 'servicios' )) : ?>
        <?php if( is_active_sidebar( 'section-servicios' ) ) {
            dynamic_sidebar( 'section-servicios' );
        } ?>
        <?php elseif(is_category( 'casos-de-estudio' )) : ?>
        <?php if( is_active_sidebar( 'section-casos-de-estudio' ) ) {
            dynamic_sidebar( 'section-casos-de-estudio' );
        } ?>
                <?php else : ?>
                    <?php echo ('No hay un sidebar para esta seccion') ?>

        <?php endif; ?>
