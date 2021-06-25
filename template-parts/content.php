<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BellNers
 */

?>


<article id="post-<?php the_ID(); ?>" class="item-blog">

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="item-blog__title">', '</h1>' );
		else :
			the_title( '<h2 class="item-blog__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<ul class="item-blog__list">
				<li class="item-blog__list__item item-blog__list__item--date"><?php bellners_posted_on(); ?></li>
				<li class="item-blog__list__item item-blog__list__item--author"><?php bellners_posted_by();?></li>
				<li><?php bellners_entry_footer(); ?></li>
			</ul>
		<?php endif; ?>


	<?php bellners_post_thumbnail(); ?>

	<div class="item-blog__excerpt">
		<?php
		the_excerpt(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bellners' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bellners' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

</article>