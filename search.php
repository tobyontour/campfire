<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Campfire
 */

get_header();
?>

	<main id="primary" class="content-search">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'campfire' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<section class="search__content">
			<ul class="article-list">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				echo '<li class="article-list__item">';
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				echo '</li>';
			endwhile;

			echo "</ul>";
			echo "</section>";

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		<section class="full-post__sidebar">
			<?php get_sidebar(); ?>
		</section>
	</main><!-- #main -->

<?php

// get_sidebar();
get_footer();
