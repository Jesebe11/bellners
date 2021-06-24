<div class="block-general-title">
        <?php if( is_home() ) :  ?>
        <?= $args['title']; ?>
                <a href="#"><img src="https://i.postimg.cc/7hBtnNXT/fast-forward-double-right-arrows-symbol.png" alt="Ir"></a>
                <?php else : ?>
                        <?php the_title( ); ?>
        <?php endif; ?>
</div>