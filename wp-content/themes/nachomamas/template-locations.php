<?php
/* Template Name: Locations Template */
/*
 * @package Nacho Mama's
 * @subpackage Nacho Mama's
 * @since 2016
 */

get_header(); ?>

<div id="content" class="site-content">

	<?php get_template_part( 'template-parts/content-banner' ); ?>

	<?php get_template_part( 'template-parts/cta-link' ); ?>

			<div id="content-block">

				<div class="container">

					<div class="small-content-container">

						<div id="primary">

							<main id="main" class="site-main" role="main">

      					<div class="page-content">

									<?php

									while ( have_posts() ) : the_post();

										get_template_part( 'template-parts/content', 'page' );

									endwhile;
									?>

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
							</main>
    				</div>
					</div>
				</div>
			</div>
		</div>

	<script>

jQuery(document).ready(function($){
   $('iframe#map').attr("src", $('iframe#map').attr('src').replace("http:","https:") );
	 $('iframe#map2').attr("src", $('iframe#map2').attr('src').replace("http:","https:") );
});

	</script>

<?php get_footer(); ?>
