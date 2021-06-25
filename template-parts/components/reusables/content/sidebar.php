<div class="split-section__sidebar__content">

<?php if( is_category( 'blogs' ) ) :  ?>
        <?php if( is_active_sidebar( 'section-blogs' ) ) {
            dynamic_sidebar( 'section-blogs' );
        } ?>
    <?php elseif(is_category( 'portafolio' )) : ?>
        <?php if( is_active_sidebar( 'section-portafolio' ) ) {
            dynamic_sidebar( 'section-portafolio' );
        } ?>
        <?php elseif(is_category( 'clientes' )) : ?>
        <?php if( is_active_sidebar( 'section-clientes' ) ) {
            dynamic_sidebar( 'section-clientes' );
        } ?>
        <?php elseif(is_category( 'servicios' )) : ?>
        <?php if( is_active_sidebar( 'section-servicios' ) ) {
            dynamic_sidebar( 'section-servicios' );
        } ?>
                <?php else : ?>
                    <?php if( is_active_sidebar( 'section-default' ) ) {
                    dynamic_sidebar( 'section-default' );
                    } ?>
<?php endif; ?>
</div>
