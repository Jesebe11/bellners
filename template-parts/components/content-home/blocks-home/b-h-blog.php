<?php

$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 3,
    'category_name' => 'blog'
];

$the_query = new WP_Query( $args);

?>
<section class="block-general__blog">

        <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();
                $title = get_the_title();
                $permalink = esc_url(get_the_permalink());
            ?>
                <div class="item">
                    <?= get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'item__img') ); ?>
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


<?php endwhile;
            wp_reset_postdata();
        endif; ?>
</section>