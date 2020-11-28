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

	<main class="content content--search">
		<header class="content-header">
			<div class="content-header__wrapper">
				<h1 class="content-header__title">
					<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'campfire' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</div>
		</header>

		<section class="content-body">
			<?php if ( have_posts() ) : ?>
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

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</section>
		<section class="content-sidebar">
			<?php get_sidebar(); ?>
		</section>
	</main><!-- #main -->

<?php

get_footer();
