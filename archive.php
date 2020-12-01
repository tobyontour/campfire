<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Campfire
 */

get_header();
?>

	<main id="primary" class="site-main content-archive">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<ul class="article-list article-list--full">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				echo '<li class="article-list__item article-list__item--full">';
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
				echo '</li>';
			endwhile;

			echo '</ul>';

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		<section class="sidebar">
			<?php wp_get_archives(); ?>
		</section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
