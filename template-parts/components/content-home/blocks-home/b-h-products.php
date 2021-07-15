<?php

$args = [
    'post_type' => 'product',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 3,
];

$the_query = new WP_Query( $args);

?>
<section class="block-general__products">
        <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();
                $title = get_the_title();
                //$terms = get_the_terms( get_the_ID(), 'product_tag' );
            ?>
                <div class="content">
                    <div class="content-overlay"></div>
                    <?= get_the_post_thumbnail( $post->ID, 'large', array('class' => 'content-image') ); ?>
                        <h2 class="content-title"><?= $title; ?></h2>
                        <?php
                            $current_tags = get_the_terms( get_the_ID(), 'product_tag' );
                                if ( $current_tags && ! is_wp_error( $current_tags ) ) {
                                    echo '<ul class="product_tags">';
                                        foreach ($current_tags as $tag) {
                                            $tag_title = $tag->name;
                                            $tag_link = get_term_link( $tag );
                                            echo '<li><a href="'.$tag_link.'">'.$tag_title.'</a></li>';
                                        }
                                        echo '</ul>';
                                    }
                        ?>
                        <div class="content-details fadeIn-bottom">
                            <div class="content-text">
                            <?  echo '<p class="excerpt">' . get_the_excerpt() . '</p>'; ?>
                            <a href="<?php the_permalink(); ?>">
                                    <img src="https://i.postimg.cc/5NCrq5nk/eye-1.png" alt="Eye">
                                </a>
                            </div>
                        </div>
                </div>


<?php endwhile;
            wp_reset_postdata();
        endif; ?>
</section>