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

	<main class="page">
		<header class="page__header">
			<div class="page__header-wrapper">
				<h1 class="page__title"><?php echo get_the_title(); ?></h1>
				<!--<div class="page__subtitle"></div>-->
			</div>
		</header>
		<section class="page__content page__content--has-aside">
			<!-- <div class="page__share">
				<ul class="share-links">
					<li class="share-links__item"><a class="share-links__link" href="#">AA</a></li>
					<li class="share-links__item"><a class="share-links__link" href="#">BB</a></li>
					<li class="share-links__item"><a class="share-links__link" href="#">CC</a></li>
				</ul>
			</div> -->
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
			<aside class="page__aside">
				<?php if ( is_active_sidebar( 'page-1' ) ) : ?>
					<div class="page__widgets widget-area">
						<?php dynamic_sidebar( 'page-1' ); ?>
					</div>
				<?php endif; ?>
				<!-- <section class="related-links">
					<ul class="related-links__posts">
						<li class="related-links__post"><a class="related-links__link" href="#">Related title</a></li>
						<li class="related-links__post"><a class="related-links__link" href="#">Related title</a></li>
						<li class="related-links__post"><a class="related-links__link" href="#">Related title</a></li>
					</ul>
				</section> -->
			</aside>
		</section>
		<section class="page__sidebar">
			<?php get_sidebar(); ?>
		</section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
