<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Campfire
 */

get_header();
?>

	<main class="full-page">
		<header class="full-page__header">
			<div class="full-page__header-wrapper">
				<h1 class="full-page__title"><?php echo get_the_title(); ?></h1>
				<!--<div class="full-page__subtitle"></div>-->
			</div>
		</header>
		<section class="full-page__content full-page__content--has-aside">
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			<aside class="full-page__aside">
				<?php if ( is_active_sidebar( 'page-1' ) ) : ?>
					<div class="full-page__widgets widget-area">
						<?php dynamic_sidebar( 'page-1' ); ?>
					</div>
				<?php endif; ?>
			</aside>
		</section>
		<section class="full-page__sidebar">
			<?php get_sidebar(); ?>
		</section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
