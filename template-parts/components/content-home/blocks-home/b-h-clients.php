<?php

$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 5,
    'category_name' => 'clientes'
];

$the_query = new WP_Query( $args);

?>

<section class="block-general__clients relative">
    <svg data-name="Layer 1"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 1200 120"
    preserveAspectRatio="none"
    class="svg"
    style="height: 74px; width: 100%; fill: #360147; transform: rotateY(0deg);">
        <path
            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z">
        </path>
    </svg>
    <div class="list">
    <?php if( $the_query->have_posts() ) : ?>
        <?php while( $the_query->have_posts() ) :
                $the_query->the_post();
                ?>
                <div class="item">
                    <a href="<? the_permalink(  ); ?> ">
                        <?= get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'clients-image') ); ?>
                    </a>
                </div>

<?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>

</section>