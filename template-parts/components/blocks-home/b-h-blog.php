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
<section class="block-home__blog">

        <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();
                $title = get_the_title();
                $permalink = esc_url(get_the_permalink());
                $excerpt = get_the_excerpt();
            ?>
                <div class="item">
                    <?= get_the_post_thumbnail( $post->ID, 'medium' ); ?>
                    <div class="item__info">
                        <p><?  echo get_the_date( 'ymd' ) ?></p>
                        <p> <? the_tags(  ) ?>
                    </div>
                    <a class="item__title" href=" <?= $permalink; ?> ">
                        <h2><?= $title; ?></h2>
                    </a>
                    <p class="item__excerpt">
                        <? $excerpt; ?>
                    </p>
                </div>


<?php endwhile;
            wp_reset_postdata();
        endif; ?>
</section>