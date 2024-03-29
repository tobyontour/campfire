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
	<?php if ( get_the_post_thumbnail_url( null, 'hero' ) ) : ?>
	<style>
	.body__background-image {
		background-image: url(<?php echo esc_url( get_the_post_thumbnail_url( null, 'hero' ) ); ?>);
	}
	</style>
	<?php endif; ?>

	<main class="content content--post">
		<header class="content-header">
			<div class="content-header__wrapper">
				<h1 class="content-header__title"><?php echo esc_html( get_the_title() ); ?></h1>
				<div class="content-header__subtitle"></div>
			</div>
		</header>

		<section class="content-body content-body--has-aside">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				?>

			<aside class="content-body__aside">
				<?php if ( 'post' === get_post_type() ) : ?>
					<section class="entry-meta">
						<?php
						campfire_posted_on();
						?>
					</section><!-- .entry-meta -->
				<?php endif; ?>

				<section class="">
					<?php
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'campfire' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'campfire' ) . '</span> <span class="nav-title">%title</span>',
						)
					);
					?>
				</section>

				<?php if ( is_active_sidebar( 'page-1' ) ) : ?>
					<div class="full-post__widgets widget-area">
						<?php dynamic_sidebar( 'page-1' ); ?>
					</div>
				<?php endif; ?>
					<?php
					// For use in the loop, list 5 post titles related to first tag on current post.
					$campfire_tags = wp_get_post_tags( $post->ID );

					if ( $campfire_tags ) {
						$campfire_term_ids = array();
						foreach ( $campfire_tags as $campfire_tag ) {
							$campfire_term_ids[] = $campfire_->term_id;
						}
						$campfire_query = new WP_Query(
							array(
								'tag__in'          => $campfire_term_ids,
								'post__not_in'     => array( $post->ID ),
								'posts_per_page'   => 5,
								'caller_get_posts' => 1,
							)
						);
						if ( $campfire_query->have_posts() ) :
							?>
							<section class="related-links">
								<h2>Related posts</h2>
								<ul class="related-links__posts">
								<?php
								while ( $campfire_query->have_posts() ) :
									$campfire_query->the_post();
									?>
									<li class="related-links__post">
										<a
											class="related-links__link"
											href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
									</li>
									<?php
									endwhile;
								?>
								</ul>
							</section>
							<?php
							endif;
						wp_reset_query(); //phpcs:ignore

					}
					?>
			</aside>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					?>
					<section class="comments">
						<button class="accordion">Comments</button>
						<div class="panel">
							<?php comments_template(); ?>
						</div>
					</section>
					<?php
				endif;
		endwhile; // End of the loop.
			?>
		</section>
		<section class="content-sidebar">
			<?php get_sidebar(); ?>
		</section>
	</main><!-- #main -->

<?php
get_footer();
