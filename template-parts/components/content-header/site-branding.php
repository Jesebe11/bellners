<div class="branding">
	<div class="identity">
		<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
		?>
			<h1 class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
					else :
				?>
			<p class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
					endif;
				?>
	</div>
			<? get_template_part( 'template-parts/components/content-header/primary-menu' ); ?>
</div>