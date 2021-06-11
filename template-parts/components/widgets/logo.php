<?php

class Logo extends WP_Widget {

    public function __construct() {
        $widget_options = array(
            'classname' => 'widget_logo',
            'description' => 'Display logo',
        );

        parent::__construct( 'logo', 'Bell logo' ,$widget_options );
    }

    // Back-end display of widget
    public function form( $instance ) {
        echo 'Sin opciones para mostrar';
    }

    // Front-end display of widget
    public function widget( $args, $instance ) {

        echo $args[ 'before_widget' ];

        ?>

        <img src="https://i.postimg.cc/kXzZT1WX/mug-2.png" alt="logo bellners">


        <?php

        echo $args[ 'after_widget' ];
    }
}

add_action( 'widgets_init', function() {
    register_widget( 'Logo' );
} );