<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BellNers
 */

get_header();
?>

	<main id="primary" class="main">
		<div class="block-general">
			<?php get_template_part( 'template-parts/components/reusables/titles/titles'); ?>
				<section class="split-section">
					<div class="split-section__normal">
						<div class="split-section__normal__blogs">
							<?php if ( have_posts() ) : ?>
								<?php
									while ( have_posts() ) :
										the_post();
										get_template_part( 'template-parts/content', get_post_type() );
									endwhile;
									endif;
								?>
						</div>
						<?php wpbeginner_numeric_posts_nav(); ?>
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