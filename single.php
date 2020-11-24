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
	<!-- single.php -->
	<?php if ($url = get_the_post_thumbnail_url( null, 'hero' )) : ?>
	<style>
	.body__background-image {
		background-image: url(<?php echo $url ?>);
	}
	</style>
	<?php endif; ?>
	<main class="post">
		<header class="post__header">
			<div class="post__header-wrapper">
				<h1 class="post__title"><?php echo get_the_title(); ?></h1>
				<div class="post__subtitle"></div>
			</div>

		</header>
		<section class="post__content post__content--has-aside">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				// the_post_navigation(
				// 	array(
				// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'campfire' ) . '</span> <span class="nav-title">%title</span>',
				// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'campfire' ) . '</span> <span class="nav-title">%title</span>',
				// 	)
				// );

				?>

			<aside class="post__aside">
				<?php if ( 'post' === get_post_type() ) : ?>
					<section class="entry-meta">
						<?php
						campfire_posted_on();
						?>
					</section><!-- .entry-meta -->
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'page-1' ) ) : ?>
					<div class="post__widgets widget-area">
						<?php dynamic_sidebar( 'page-1' ); ?>
					</div>
				<?php endif; ?>
					<?php
					// For use in the loop, list 5 post titles related to first tag on current post.
					$tags = wp_get_post_tags($post->ID);

					if ($tags) {
						$term_ids = [];
						foreach ($tags as $tag) {
							$term_ids[] = $tag->term_id;
						}
						$args = [
							'tag__in' => $term_ids,
							'post__not_in' => array($post->ID),
							'posts_per_page' => 5,
							'caller_get_posts' => 1,
						];
						$my_query = new WP_Query($args);
						if ( $my_query->have_posts() ) : ?>
							<section class="related-links">
								<h2>Related posts</h2>
								<ul class="related-links__posts">
								<?php
									while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<li class="related-links__post">
										<a
											class="related-links__link"
											href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
									</li>
									<?php
									endwhile;?>
								</ul>
							</section>
							<?php endif;
						wp_reset_query();

					}
					?>
			</aside>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
		endwhile; // End of the loop.
		?>
		</section>
		<section class="post__sidebar">
			<?php get_sidebar(); ?>
		</section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();