<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BellNers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
	<?php wp_body_open(); ?>

<div id="page" class="site">
	<header id="masthead" class="header">
			<?
				get_template_part( 'template-parts/components/content-header/top-head' );

				get_template_part( 'template-parts/components/content-header/site-branding' );
			?>
	</header>