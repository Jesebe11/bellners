<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bellners_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Bell Cintillo', 'bellners' ),
			'id'            => 'sidebar-top-head',
			'description'   => esc_html__( 'Añade elementos al cintillo del header', 'bellners' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Bell footer', 'bellners' ),
			'id'            => 'column-footer',
			'description'   => esc_html__( 'Añade elementos a las columnas del footer', 'bellners' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Bell Seccion blogs', 'bellners' ),
			'id'            => 'section-blogs',
			'description'   => esc_html__( 'Añade elementos a la sección blogs', 'bellners' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Bell Seccion clientes', 'bellners' ),
			'id'            => 'section-clientes',
			'description'   => esc_html__( 'Añade elementos a la sección clientes', 'bellners' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Bell Seccion portafolio', 'bellners' ),
			'id'            => 'section-portafolio',
			'description'   => esc_html__( 'Añade elementos a la sección portafolio', 'bellners' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Bell Seccion servicios', 'bellners' ),
			'id'            => 'section-servicios',
			'description'   => esc_html__( 'Añade elementos a la sección servicios', 'bellners' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Bell Seccion por defecto', 'bellners' ),
			'id'            => 'section-default',
			'description'   => esc_html__( 'Añade elementos a la sección defecto', 'bellners' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Bell Seccion 404', 'bellners' ),
			'id'            => 'section-404',
			'description'   => esc_html__( 'Añade elementos a la sección 404', 'bellners' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bellners_widgets_init' );
?>