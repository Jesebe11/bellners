<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BellNers
 */

?>

	<footer id="colophon" class="footer">
		<?
            get_template_part( 'template-parts/components/content-footer/newsletter' );
		?>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
