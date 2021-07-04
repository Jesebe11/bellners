<?php
    $next_post = get_next_post();
    $previous_post = get_previous_post();
        the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( ' > ', 'bellners' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'bellners' ) . '</span> ' .
                '<span class="post-title">%title</span>' . get_the_post_thumbnail($next_post->ID,'thumbnail'),
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( ' < ', 'bellners' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'bellners' ) . '</span> ' .
                '<span class="post-title">%title</span>' . get_the_post_thumbnail($previous_post->ID,'thumbnail'),
                ) );