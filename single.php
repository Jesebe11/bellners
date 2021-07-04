<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BellNers
 */

get_header();
?>


	<main id="primary" class="main">
		<div class="block-general">
			<?php get_template_part( 'template-parts/components/reusables/titles/titles'); ?>
				<section class="split-section">
					<div class="split-section__normal split-section__normal--single">
						<div class="split-section__normal__blogs split-section__normal__blogs--single">
							<?php
								while ( have_posts() ) :
									the_post();
									get_template_part( 'template-parts/content-single' );
								endwhile;
							?>
						</div>

					</div>
					<aside class="split-section__sidebar">
						<?php
							get_template_part( 'template-parts/components/reusables/content/sidebar');
						?>
					</aside>
				</section>

		</div>
	</main>

<?php

get_footer();
