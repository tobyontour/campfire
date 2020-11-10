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
    <?php //if ( is_page( 'beavers' ) ): ?>
	  <li class="join-boxes__item join-boxes__item--beavers">
      <a class="join-boxes__link" href="http://127.0.0.1:8888/what-we-do/beavers/">
        <div class="join-boxes__logo beavers-logo">Beavers</div>
        <div class="join-boxes__text">
          <p>6-8 years</p>
          <p>Make friends and try new activities</p>
        </div>
      </a>
    </li>
    <?php //endif; ?>
		<li class="join-boxes__item join-boxes__item--cubs">
      <a class="join-boxes__link" href="http://127.0.0.1:8888/what-we-do/cubs/">
			  <div class="join-boxes__logo cubs-logo">Cubs</div>
        <div class="join-boxes__text">
          <p>8-10½ years</p>
          <p>Learn practical skills while having adventures</p>
        </div>
      </a>
		</li>
		<li class="join-boxes__item join-boxes__item--scouts">
      <a class="join-boxes__link" href="http://127.0.0.1:8888/what-we-do/scouts/">
			  <div class="join-boxes__logo scouts-logo">Scouts</div>
        <div class="join-boxes__text">
          <p>10½-14 years</p>
          <p>Build confidence, resilience and a sense of adventure</p>
        </div>
      </a>
		</li>
		<li class="join-boxes__item join-boxes__item--explorers">
      <a class="join-boxes__link" href="http://127.0.0.1:8888/what-we-do/explorers/">
			  <div class="join-boxes__logo explorers-logo">Explorers</div>
        <div class="join-boxes__text">
          <p>10½-14 years</p>
          <p>Build confidence, resilience and a sense of adventure</p>
        </div>
      </a>
		</li>
		<li class="join-boxes__item join-boxes__item--network">
      <a class="join-boxes__link" href="http://127.0.0.1:8888/what-we-do/network/">
			  <div class="join-boxes__logo network-logo">Network</div>
        <div class="join-boxes__text">
          <p>10½-14 years</p>
          <p>Build confidence, resilience and a sense of adventure</p>
        </div>
      </a>
		</li>
		<li class="join-boxes__item join-boxes__item--volunteers">
      <a class="join-boxes__link" href="http://127.0.0.1:8888/what-we-do/leaders/">
			  <div class="join-boxes__logo volunteers-logo">Volunteers</div>
        <div class="join-boxes__text">
          <p>All adults welcome!</p>
          <p>Develop young people, have fun and build new skills</p>
        </div>
      </a>
		</li>
	</ul>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
