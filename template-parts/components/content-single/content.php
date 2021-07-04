<div class="single__image">
    <?php
        the_post_thumbnail( 'large' );
        the_post_thumbnail_caption( );
    ?>
</div>
<article class="single__content">
    <?php
        the_content( );
    ?>
</article>