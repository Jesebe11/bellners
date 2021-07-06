<?php

class Recent extends WP_Widget {

    public function __construct() {
        $widget_options = array(
            'classname' => 'widget_recent_entries',
            'description' => 'Mostrar los post recientes en la categoria blogs',
        );

        parent::__construct( 'recent-posts', 'Bell Blogs Recientes' ,$widget_options );
    }

    // Back-end display of widget
    public function form( $instance ) {
        echo 'Sin opciones para mostrar';
    }

    // Front-end display of widget
    public function widget( $args, $instance ) {

        echo $args[ 'before_widget' ];

        ?>


    <h2 class="widget-title">Últimos artículos de Blogs</h2>
    <?php
        $args_lo_ultimo_blogs = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 4,
        'category_name' => 'blogs',
        ];
        $the_query = new WP_Query( $args_lo_ultimo_blogs );
    ?>
    <ul class="product_list_widget ">

    <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();
                $title = get_the_title();
            ?>
                <div class="content recent">
                    <div class="content-overlay"></div>
                    <?= get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
                        <h2 class="content-title content-title--recent"><?= $title; ?></h2>
                        <p class="tags"> <? the_tags( '', ', ', '<br />' ) ?> </p>
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
    </ul>

        <?php

        echo $args[ 'after_widget' ];
    }
}

add_action( 'widgets_init', function() {
    register_widget( 'Recent' );
} );