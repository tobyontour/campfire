<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Campfire
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<style>
	.body__background-image {
		background-image: url(<?php header_image(); ?>);
	}
	</style>
<div class="body__background-image"></div>
<div id="page" class="site <?php if ( is_front_page() ) { echo 'site--front'; } ?>">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'campfire' ); ?></a>

	<header id="masthead" class="site-header <?php if ( is_front_page() ) { echo 'site-header--front'; } ?>">
		<div class="site-branding">
			<div class="site-branding__logo <?php if ( has_custom_logo() ) { echo "site-branding__logo--custom"; } ?>">
			<?php the_custom_logo(); ?>
			</div>

			<a class="site-branding__title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

			<?php
			$campfire_description = get_bloginfo( 'description', 'display' );
			if ( $campfire_description || is_customize_preview() ) :
				?>
				<div class="site-branding__description"><?php echo $campfire_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="site-branding--mobile">
				<div class="site-branding__logo"></div>
				<a class="site-branding__title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<svg viewBox="0 0 50 50" width="40" height="40">
					<rect y="5"  width="50" height="5"></rect>
					<rect y="20" width="50" height="5"></rect>
					<rect y="35" width="50" height="5"></rect>
				</svg>
			</button>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->