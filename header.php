<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'storefront' ); ?></a>

	<?php
	/**
	 * @hooked storefront_secondary_navigation - 10
	 */
	do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" <?php if ( get_header_image() != '' ) { echo 'style="background-image: url(' . get_header_image() . ')";'; } ?>>
		<div class="col-full">

			<?php
			/**
			 * @hooked storefront_site_branding - 10
			 * @hooked storefront_product_search - 20
			 * @hooked storefront_header_cart - 30
			 * @hooked storefront_primary_navigation - 40
			 */
			do_action( 'storefront_header' ); ?>

		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content">
		<div class="col-full c-show c-showgrid">

		<?php
		/**
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'wc_theme_content_top' ); ?>