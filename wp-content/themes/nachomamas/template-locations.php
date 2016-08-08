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
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d772.0921266604076!2d-76.57563247255753!3d39.27989263191174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c8038ba65deadd%3A0xc3690a9bd071fb69!2sNacho+Mama&#39;s!5e0!3m2!1sen!2sus!4v1464710822019" id="map" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="location-content">
						<h3>Canton</h3>
						<address>2907 O'Donnell St,<br />
							 Baltimore, MD 21224<br /></address>
								<p>T: 410-675-0898</p>
								<p>Carryout: 410-342-2922</p>
								<p style="font-weight: bold;">Contact Us: <br/><a href="mailto: contactus@mamasmd.com">contactus@mamasmd.com</a></p>
								<a href="https://goo.gl/maps/4pnTeAN4dE32">Get Directions</a>

					</div>
					<div class="location-hours">
						<h4>Hours</h4>
						<p>Mon-Sat 11AM-2AM</p>
						<p>Sunday Brunch 9AM-2PM</p>
						<a href="https://webordering.rmwservices.com/v19.0.WebUI/restaurants.aspx?wci=NachoMama" class="button"><span>Order Online</span></a>
					</div>
				</div>
				<div class="location-item last">
					<div class="location-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3083.0359959948782!2d-76.60490268463471!3d39.400691679496184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c80faf04f0f349%3A0x16b9ec6c193a31e5!2s2+W+Pennsylvania+Ave%2C+Towson%2C+MD+21204!5e0!3m2!1sen!2sus!4v1464711265961" id="map2" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="location-content">
						<h3>Towson (Coming Soon!)</h3>
						<address>York Road,<br />
							 Towson, MD 21224<br /></address>
								<p>T: 410-675-0898</p>
								<p>Carryout: 410-342-2922</p>
								<a href="https://goo.gl/maps/o38QyPT6FCk">Get Directions</a>

					</div>
					<div class="location-hours">
						<a href="https://webordering.rmwservices.com/v19.0.WebUI/restaurants.aspx?wci=NachoMama" class="button" style="margin-top: 0px;"><span>Order Online</span></a>
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

	<script>

jQuery(document).ready(function($){
   $('iframe#map').attr("src", $('iframe#map').attr('src').replace("http:","https:") );
	 $('iframe#map2').attr("src", $('iframe#map2').attr('src').replace("http:","https:") );
});

	</script>

<?php get_footer(); ?>
