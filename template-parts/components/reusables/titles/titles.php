<div class="block-general-title">
        <?php if( is_home() ) :  ?>
        <?= $args['title']; ?>
                <a href="#"><img src="https://i.postimg.cc/7hBtnNXT/fast-forward-double-right-arrows-symbol.png" alt="Ir"></a>
                <?php elseif(is_archive ()) : ?>
                        <?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
                <?php else : ?>
                        <?php the_title(); ?>
        <?php endif; ?>
</div>