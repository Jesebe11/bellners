<?php

    get_header();
?>

<main id="primary" class="main">
    <div class="block-general">
        
        <?php
            get_template_part( 'template-parts/components/reusables/titles/titles');
        ?>
        <div class="block-general__contact">
            <?php
                get_template_part( 'template-parts/content-contact' );
                get_template_part( 'template-parts/components/reusables/content/content');
            ?>
        </div>
    </div>
</main>

<?php
get_footer();