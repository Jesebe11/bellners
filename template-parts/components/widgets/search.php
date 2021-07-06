<?php

class Search extends WP_Widget {

    public function __construct() {
        $widget_options = array(
            'classname' => 'widget_search',
            'description' => 'Display search',
        );

        parent::__construct( 'search', 'Bell search' ,$widget_options );
    }

    // Back-end display of widget
    public function form( $instance ) {
        echo 'Sin opciones para mostrar';
    }

    // Front-end display of widget
    public function widget( $args, $instance ) {

        echo $args[ 'before_widget' ];

        ?>

        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>


        <?php

        echo $args[ 'after_widget' ];
    }
}

add_action( 'widgets_init', function() {
    register_widget( 'Search' );
} );