<?php

class Social extends WP_Widget {

    public function __construct() {
        $widget_options = array(
            'classname' => 'widget_social',
            'description' => 'Display for show social',
        );

        parent::__construct( 'social', 'Bell Social' ,$widget_options );
    }

     // Back-end display of widget
     public function form( $instance ) {

        if( isset( $instance[ 'message' ] ) ) {
            $message = $instance[ 'message' ];
        } else {
            $message = '';
        }

        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'message' ); ?>"><?php _e( 'Message:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'message' ); ?>" name="<?php echo $this->get_field_name( 'message' ); ?>" type="text" value="<?php echo esc_attr( $message ); ?>" />
        </p>



        <?php
    }

    // Front-end display of widget
    public function widget( $args, $instance ) {

        extract( $args );
        $message = apply_filters( 'widget_message', $instance['message'] );

        echo $args[ 'before_widget' ];

        ?>
        <?php if( $message !== '' ) : ?>
        <h2 class="message"><?= $message; ?></h2>
        <?php endif; ?>

        <ul class="social">
            <li class="social__item">
                <a href="#" target="_blank">
                    <img src="https://i.postimg.cc/FHRFh4WV/facebook-logo.png" alt="Facebook">
                </a>
            </li>
            <li class="social__item">
                <a href="#" target="_blank">
                    <img src="https://i.postimg.cc/q7FH8nvY/twitter.png" alt="Twitter">
                </a>
            </li>
            <li class="social__item">
                <a href="#" target="_blank">
                    <img src="https://i.postimg.cc/26qByW0T/instagram.png" alt="Instagram">
                </a>
            </li>
            <li class="social__item">
                <a href="#" target="_blank">
                    <img src="https://i.postimg.cc/Z5VS5XtJ/linkedin.png" alt="LinkedIn">
                </a>
            </li>
            <li class="social__item">
                <a href="#" target="_blank">
                    <img src="https://i.postimg.cc/QMCr9Sh1/whatsapp.png" alt="Whatsapp">
                </a>
            </li>
        </ul>


        <?php

        echo $args[ 'after_widget' ];
    }
}

add_action( 'widgets_init', function() {
    register_widget( 'Social' );
} );