
<section class="block-general__blog">


                <div class="item">
                    <?= get_the_post_thumbnail( $product->ID, 'medium', array('class' => 'item__img') ); ?>
                    <div class="item__info">
                        <p><?  echo get_the_date( 'D/M/Y' ) ?></p> -
                        <p class="tags"> <? the_tags( '', ', ', '<br />' ) ?> </p>
                    </div>
                    <a class="item__title" href=" <?= $permalink; ?> ">
                        <h2><?= $title; ?></h2>
                    </a>
                    <div class="item__excerpt">
                        <? the_excerpt(  ); ?>
                    </div>
                </div>


</section>