<div class="block-general-title block-general-title--single">
        <?php if( is_home() ) :  ?>
        <?= $args['title']; ?>
                <a href="<?= $args['permalink']; ?> "><img src="https://i.postimg.cc/7hBtnNXT/fast-forward-double-right-arrows-symbol.png" alt="Ir"></a>
                <?php elseif(is_archive ()) : ?>
                        <?php
                                the_archive_title( '<h1>', '</h1>' );
                                the_archive_description( '<div >', '</div>' );
			?>
                <?php else : ?>
                        <?php the_title(); ?>
        <?php endif; ?>
</div>