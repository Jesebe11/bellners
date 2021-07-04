<div class="single__image">
    <?php
        the_post_thumbnail( 'large' , array(
            'class' => 'single__image__img'
) );
        the_post_thumbnail_caption( );
    ?>
</div>
<article class="single__content">
    <?php
        the_content( );
    ?>
</article>