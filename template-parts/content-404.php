<section class="split-section-down">

    <?php
        get_template_part( 'template-parts/components/content-404/image');
    ?>
    <aside class="split-section-down__sidebar">
        <?php if( is_active_sidebar( 'section-404' ) ) {
            dynamic_sidebar( 'section-404' );
        } ?>
	</aside>

</section>