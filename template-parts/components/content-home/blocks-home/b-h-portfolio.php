<?php

$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 6,
    'category_name' => 'proyecto'
];

$the_query = new WP_Query( $args);

?>
<section class="block-home__portfolio">
        <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();
                $title = get_the_title();
                $permalink = esc_url(get_the_permalink());
            ?>
                <div class="content">
                    <div class="content-overlay"></div>
                    <?= get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'content-image') ); ?>
                        <h2 class="content-title"><?= $title; ?></h2>
                        <p class="tags"> <? the_tags( '', ', ', '<br />' ) ?> </p>
                    <div class="content-details fadeIn-bottom">

                        <p class="content-text">
                            <a href=" <?= $permalink; ?> ">
                                <? the_excerpt(  ); ?>
                            </a>
                        </p>
                    </div>
                </div>


<?php endwhile;
            wp_reset_postdata();
        endif; ?>
</section>