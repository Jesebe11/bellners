<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BellNers
 */

get_header();
?>

	<main id="primary" class="main">
		<div class="block-general">
			<?php get_template_part( 'template-parts/content-404'); ?>
		</div>
	</main>

<?php
get_footer();
