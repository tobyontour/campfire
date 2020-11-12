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
				<div class="page__subtitle">Scouts is where young people make new friends, have amazing adventures, and learn new skills.</div>
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
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultricies nunc et sem vehicula facilisis. Phasellus finibus pulvinar condimentum. Nullam dictum ex vel eros vulputate, id tincidunt lacus interdum. Aliquam luctus consequat hendrerit. Etiam feugiat quam eget turpis malesuada sagittis. Donec vitae nulla nec risus euismod dignissim. Aliquam condimentum ultricies nisi.</p>
				<p>Nullam sed auctor lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat euismod magna non mollis. Proin egestas sem nec consectetur volutpat. Vestibulum dictum dictum lectus, vitae sollicitudin sem tristique id. Integer vel mi ut lacus sagittis laoreet. Donec sagittis egestas pellentesque.</p>
				<p>Sed rhoncus ac sapien eget faucibus. Etiam vehicula felis quis elit aliquam, scelerisque condimentum risus semper. Integer cursus elementum sapien eget iaculis. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent iaculis, lectus id convallis venenatis, nisl libero tempus purus, sit amet finibus erat justo a diam. In ultrices, arcu vitae mollis tincidunt, odio ante rhoncus tellus, a gravida tortor ante vitae purus.</p>
				<p>Sed vitae iaculis quam. Integer finibus arcu sed est vulputate, sit amet gravida leo ornare. Donec fringilla et nisi non bibendum. Donec finibus scelerisque justo, non aliquam neque luctus at. Nam convallis dapibus diam eu fermentum. Donec id feugiat nulla, tristique commodo felis. Quisque bibendum sapien vel nisl ullamcorper, vel pharetra libero tristique. Sed porttitor viverra ligula, ut sodales enim. Nullam auctor dolor ut fringilla porta.</p> -->

			<aside class="page__aside">
				<?php if ( is_active_sidebar( 'page-1' ) ) : ?>
					<div class="page__widgets widget-area">
						<?php dynamic_sidebar( 'page-1' ); ?>
					</div>
				<?php endif; ?>
				<div class="related-links">
					<ul class="related-links__posts">
						<li class="related-links__post"><a class="related-links__link" href="#">Related title</a></li>
						<li class="related-links__post"><a class="related-links__link" href="#">Related title</a></li>
						<li class="related-links__post"><a class="related-links__link" href="#">Related title</a></li>
					</ul>
				</div>
			</aside>
		</section>
		<section class="page__sidebar">
			<?php get_sidebar(); ?>
		</section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
