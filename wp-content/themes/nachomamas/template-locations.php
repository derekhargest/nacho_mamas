<?php
/* Template Name: Locations Template */
/*
 * @package Nacho Mama's
 * @subpackage Nacho Mama's
 * @since 2016
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<?php get_template_part( 'template-parts/content-banner' ); ?>

		<div id="content-block">

		<?php get_template_part( 'template-parts/cta-link' ); ?>

		<?php

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile;
		?>

    <div class="content-container">
      <div class="page-content">

      <div class="locations">
				<div class="location-item">
					<div class="location-map">
						Map
					</div>
					<div class="location-content">
						<h3>Canton</h3>
						<address>2907 O'Donnell St,<br />
							 Baltimore, MD 21224<br /></address>
								<p>T: 410-675-0898</p>
								<p>Carryout: 410-342-2922</p>
								<a href="#">Get Directions</a>

					</div>
					<div class="location-hours">
						<h4>Hours</h4>
						<p>Mon-Sat 11AM-2AM</p>
						<p>Sunday Brunch 9AM-2PM</p>
						<a href="" class="button"><span>Order Online</span></a>
					</div>
				</div>
				<div class="location-item last">
					<div class="location-map">
						Map
					</div>
					<div class="location-content">
						<h3>Towson</h3>
						<address>York Road,<br />
							 Towson, MD 21224<br /></address>
								<p>T: 410-675-0898</p>
								<p>Carryout: 410-342-2922</p>
								<a href="#">Get Directions</a>

					</div>
					<div class="location-hours">
						<h4>Hours</h4>
						<p>Mon-Sat 11AM-2AM</p>
						<p>Sunday Brunch 9AM-2PM</p>
						<a href="" class="button"><span>Order Online</span></a>
					</div>
				</div>
      </div>

      </div>
    </div>
	</main>

</div>

	<?php if (get_field('secondary_content')): ?>

		<div id="secondary" class="content-area secondary">

			<div class="content-container secondary">

				<div class="content-title">

					<header class="entry-header">

						<h1 class="entry-title">

							<?php the_field('secondary_title'); ?>

						</h1>

					</header>

				</div>

				<div class="page-content">

					<p><?php the_field('secondary_content'); ?></p>

				</div>

        <div class="content-title">

          <header class="entry-header">

            <h1 class="entry-title">

              Word On the Street

            </h1>

          </header>

        </div>

        <div class="page-content">

          <p><?php the_field('secondary_content'); ?></p>

          <section class="quotes">
            <header class="entry-header">

  						<h1 class="entry-title">

  							Word on the Street

  						</h1>

  					</header>

            <ul class="bxslider">
              <li><div class="slide"><p>On a recent steaming hot evening, nothing appealed to the stomach more than Mexican food-a pitcher or two of margaritas, some healthy sweat-production from fresh, peppery, simply composed food. I didn’t want to think about food so much as consume it, and a casual, come-as-you-are joint felt ideal.</p><span>- City Paper</span></div></li>
              <li><div class="slide"><p>On a recent steaming hot evening, nothing appealed to the stomach more than Mexican food-a pitcher or two of margaritas, some healthy sweat-production from fresh, peppery, simply composed food. I didn’t want to think about food so much as consume it, and a casual, come-as-you-are joint felt ideal.</p><span>- City Paper</span></div></li>
            </ul>

          </section>

          <section class="insta-feed">
            <header class="entry-header">

              <h1 class="entry-title">

                Some Photos

              </h1>

            </header>
            <div id="instafeed">

            </div>
            <button id="load-more">Load More</button>
          </section>

        </div>

			</div>

		</div>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
