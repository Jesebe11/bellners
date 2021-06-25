<?php

$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => 6,
    'category_name' => 'servicios'
];

$the_query = new WP_Query( $args);

?>
<div class="container__card">
<?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();
                $permalink = esc_url(get_the_permalink());
                $featured_img_url = get_the_post_thumbnail_url( get_the_ID() ,'full' );
            ?>

            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(<?= $featured_img_url; ?>);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h1><?php echo the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="body__card_back">
                            <h1><?php echo the_title(); ?></h1>
                            <p> <?php the_excerpt(  ); ?> </p>
                            <a href="<?php echo $permalink; ?>">
                                <input type="button" value="Leer Más">
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <?php endwhile;
            wp_reset_postdata();
        endif; ?>
        </div>
