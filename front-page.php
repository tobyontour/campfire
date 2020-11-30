<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Campfire
 */

get_header();
?>

<main id="primary" class="site-main front-page">

	<ul class="join-boxes">
	<?php if ( get_page_by_path( 'beavers' ) ) : ?>
	  <li class="join-boxes__item join-boxes__item--beavers">
	  <a class="join-boxes__link" href="/beavers">
		<div class="join-boxes__logo beavers-logo">Beavers</div>
		<div class="join-boxes__text">
		  <p>6-8 years</p>
		  <p>Make friends and try new activities</p>
		</div>
	  </a>
	</li>
		<?php
	  endif;
	if ( get_page_by_path( 'cubs' ) ) : 
		?>
		<li class="join-boxes__item join-boxes__item--cubs">
	  <a class="join-boxes__link" href="/cubs">
			  <div class="join-boxes__logo cubs-logo">Cubs</div>
		<div class="join-boxes__text">
		  <p>8-10½ years</p>
		  <p>Learn practical skills while having adventures</p>
		</div>
	  </a>
		</li>
		<?php
	  endif;
	if ( get_page_by_path( 'scouts' ) ) : 
		?>
		<li class="join-boxes__item join-boxes__item--scouts">
	  <a class="join-boxes__link" href="/scouts">
			  <div class="join-boxes__logo scouts-logo">Scouts</div>
		<div class="join-boxes__text">
		  <p>10½-14 years</p>
		  <p>Build confidence, resilience and a sense of adventure</p>
		</div>
	  </a>
		</li>
		<?php
	  endif;
	if ( get_page_by_path( 'explorers' ) ) : 
		?>
		<li class="join-boxes__item join-boxes__item--explorers">
	  <a class="join-boxes__link" href="/explorers">
			  <div class="join-boxes__logo explorers-logo">Explorers</div>
		<div class="join-boxes__text">
		  <p>10½-14 years</p>
		  <p>Build confidence, resilience and a sense of adventure</p>
		</div>
	  </a>
		</li>
		<?php
	  endif;
	if ( get_page_by_path( 'network' ) ) : 
		?>
		<li class="join-boxes__item join-boxes__item--network">
	  <a class="join-boxes__link" href="/network">
			  <div class="join-boxes__logo network-logo">Network</div>
		<div class="join-boxes__text">
		  <p>10½-14 years</p>
		  <p>Build confidence, resilience and a sense of adventure</p>
		</div>
	  </a>
		</li>
		<?php
	  endif;
	if ( get_page_by_path( 'volunteers' ) ) : 
		?>
		<li class="join-boxes__item join-boxes__item--volunteers">
	  <a class="join-boxes__link" href="/leaders">
			  <div class="join-boxes__logo volunteers-logo">Volunteers</div>
		<div class="join-boxes__text">
		  <p>All adults welcome!</p>
		  <p>Develop young people, have fun and build new skills</p>
		</div>
	  </a>
	</li>
	<?php endif; ?>
  </ul>

  <div class="main-content has-sidebar">
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
	<?php get_sidebar(); ?>
  </div>

  <?php if ( is_active_sidebar( 'home-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area">
		<?php dynamic_sidebar( 'home-1' ); ?>
	</div><!-- #primary-sidebar -->
  <?php endif; ?>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
