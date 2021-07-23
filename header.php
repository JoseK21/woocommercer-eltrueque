<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<?php do_action('storefront_before_site'); ?>

	<div id="page" class="hfeed site">
		<?php do_action('storefront_before_header'); ?>

		<header id="masthead" class="site-header custom-header" role="banner" style="<?php storefront_header_styles(); ?>">

			<?php do_action('storefront_header'); ?>
			<div class="col-full">
				<div class="grid2x2">
					<div id="logo"><img style="width: 550px; height: auto;" src="http://localhost/eltrueque/wp-content/uploads/2021/07/logo-1-1.png" alt="Italian Trulli"></div>
					<div id="consiga">CONSIGA TODOS SUS PRODUCTOS ORGÁNICOS</div>
					<div id="feria">FERIA NACIONAL CERTIFICADA</div>
					<div id="blank"></div>
					<div id="visitenos">
						<p>VISITENOS</p>
						<p>LOS SABADOS</p>
						<p>6AM - 12MD</p>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->

		<?php
		/**
		 * Functions hooked in to storefront_before_content
		 *
		 * @hooked storefront_header_widget_region - 10
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action('storefront_before_content');
		?>

		<div id="content" class="site-content" tabindex="-1">
			<div class="col-full">

				<?php
				do_action('storefront_content_top');
