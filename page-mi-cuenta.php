<?php

    get_header();
?>

<main id="primary" class="main">
    <div class="block-general">
        <?php
            get_template_part( 'template-parts/components/reusables/titles/titles');
            ?>
            <img class="m-auto" style=" width:128px; height:128px;" src="https://i.postimg.cc/cJJG3kPR/profile-user.png" />

            <?php
                //get_template_part( 'template-parts/content-contact' );
                get_template_part( 'template-parts/components/reusables/content/content');
            ?>
    </div>
</main>

<?php
get_footer();