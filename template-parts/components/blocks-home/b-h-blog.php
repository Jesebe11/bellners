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

        <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();

                $title = get_the_title();
                $permalink = esc_url(get_the_permalink());
                $excerpt = get_the_excerpt();
            ?>

<?= $title; ?>

<?php endwhile;
            wp_reset_postdata();
        endif; ?>