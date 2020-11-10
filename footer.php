<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Campfire
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="site-details">
				<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme available here: %1$s', 'campfire' ), '<a href="https://github.com/tobyontour/campfire">Campfire theme</a>' );
				?>
			</div><!-- .site-details -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
