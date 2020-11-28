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


<div id="page" class="site <?php if ( is_front_page() ) { echo 'site--front'; } else { echo 'site--inside'; } ?>">
	<a class="skip-link screen-reader-text" href="#primary">Skip to content</a>

	<header id="masthead" class="site-header body__background-image <?php if ( is_front_page() ) { echo 'body__background-image--front'; } ?> <?php if ( is_front_page() ) { echo 'site-header--front'; } ?>">
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
					'container_class' => 'main-nav'
				)
			);
			?>
		</nav><!-- #site-navigation -->

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

		<?php if ( is_front_page() && is_active_sidebar( 'banner' ) ) : ?>
			<div class="banner-sidebar widget-area">
				<?php dynamic_sidebar( 'banner' ); ?>
			</div>
		<?php endif; ?>
	</header><!-- #masthead -->

	<?php if ( !is_front_page() ) : ?>
		<div class="site-sub-header">
			<?php if ( function_exists('bcn_display') ) : ?>
			<nav class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<div class="breadcrumbs__wrapper">
					<?php
					bcn_display();
					?>
				</div>
			</nav>
			<?php endif; ?>
		</div>
	<?php endif; ?>