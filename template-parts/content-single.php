<?php

get_template_part( 'template-parts/components/content-single/navigation-post' );

if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;