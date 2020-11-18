<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Campfire
 */

get_header();

?>
	<style>
	.body__background-image {
		background-image: url(<?php echo get_the_post_thumbnail_url( null, 'hero' ); ?>);
	}
	</style>
	<main class="post">
		<header class="post__header">
			<div class="post__header-wrapper">
				<h1 class="post__title"><?php echo get_the_title(); ?></h1>
				<!--<div class="post__subtitle"></div>-->
			</div>

		</header>
		<section class="post__content post__content--has-aside">
			<!-- <div class="post__share">
				<ul class="share-links">
					<li class="share-links__item"><a class="share-links__link" href="#">AA</a></li>
					<li class="share-links__item"><a class="share-links__link" href="#">BB</a></li>
					<li class="share-links__item"><a class="share-links__link" href="#">CC</a></li>
				</ul>
			</div> -->
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'campfire' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'campfire' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			<aside class="post__aside">
				<?php if ( is_active_sidebar( 'page-1' ) ) : ?>
					<div class="post__widgets widget-area">
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
		<section class="post__sidebar">
			<?php get_sidebar(); ?>
		</section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();