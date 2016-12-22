<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>

		<!-- Social Icons -->
    <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">
    <!-- Cidery Icons -->
    <link href="https://file.myfontastic.com/dmvZnKdhiQBHmomJGkYJr/icons.css" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div data-sticky-container>
			<nav data-sticky data-options="marginTop:0;" style="width:100%; z-index:99;" data-top-anchor="mainContent">
  <div class="top-bar">
    <div class="top-bar-title text-center">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/nav-logo.png" alt=""></a>
    </div>
    <div class="float-right">
      <span data-responsive-toggle="responsive-menu" data-hide-for="large">
        <button class="menu-icon" type="button" data-toggle></button>
      </span>
    </div>
    <div id="responsive-menu">
      <div class="top-bar-right">
        
        <?php foundationpress_top_bar_r(); ?>
        
      </div>
    </div>
  </div>
</nav>
		</div>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
