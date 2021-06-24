<?php

$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 6,
    'category_name' => 'blog'
];

$the_query = new WP_Query( $args);

?>
<div class="split-section__normal__blogs">

        <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();
                $title = get_the_title();
                $permalink = esc_url(get_the_permalink());
            ?>
                <article class="item-blog">
                    <a class="item-blog__title" href=" <?= $permalink; ?> "><?= $title; ?></a>

                    <ul class="item-blog__list">
                        <a href=" <?php $permalink;  ?> ">
                            <li class="item-blog__list__item item-blog__list__item--date"><?  echo get_the_date( 'D/M/Y' ) ?></li>
                        </a>
                        <li class="item-blog__list__item item-blog__list__item--tag"> <? the_tags( '', ', ', '<br />' ) ?> </li>
                        <a href=" <?php get_the_author_link(  )  ?> ">
                            <li class="item-blog__list__item item-blog__list__item--author"> <? the_author( ); ?> </li>
                        </a>
                        <a href=" <?php get_comment_link(  );  ?> ">
                            <li class="item-blog__list__item item-blog__list__item--comments"> <? echo get_comments_number(  ) ?></li>
                        </a>
                    </ul>
                    <?= get_the_post_thumbnail( $post->ID, 'large', array('class' => 'item-blog__img') ); ?>
                    <div class="item-blog__excerpt">
                        <? the_excerpt(  ); ?>
                    </div>
                </article>


<?php endwhile;
            wp_reset_postdata();
        endif; ?>
</div>