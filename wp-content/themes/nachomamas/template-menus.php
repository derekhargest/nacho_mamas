<?php
/* Template Name: Menus Template */
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

	      					<div class="location-menus">

	      						<div class="menu">

											<h4>Canton</h4>

											<div class="menu-content">

												<p>For Carryout Call: <span class="number">410-342-2922</span></p>

											</div>

											<a href="https://webordering.rmwservices.com/v19.0.WebUI/restaurants.aspx?wci=NachoMama" class="button"><span>Order Online</span></a>

											<div class="menu-buttons">

												<a href="<?php echo the_field('canton_dining_menu'); ?>" class="button"><span>Lunch &amp; Dinner</span></a>

												<a href="http://www.mamasmd.com/special_menus/Nacho Specials.pdf" class="button"><span>Specials</span></a>

												<a href="<?php echo the_field('canton_brunch_menu'); ?>" class="button"><span>Brunch</span></a>

												<a href="<?php echo the_field('canton_margarita_menu'); ?>" class="button"><span>Margs &amp; Cocktails</span></a>

											</div>

										</div>

									<div class="menu">

										<h4>Towson</h4>

										<div class="menu-content">

											<p>We're Open!</p>

										</div>

										<a href="https://webordering.rmwservices.com/v19.0.WebUI/restaurants.aspx?wci=NachoMama" class="button"><span>Order Online</span></a>

										<div class="menu-buttons">

											<a href="<?php echo the_field('towson_dining_menu'); ?>" class="button" style="width: 100%;"><span>Dining Menu</span></a>

											<!-- <a href="<?php // echo the_field('towson_specials_menu'); ?>" class="button" onclick="event.preventDefault();"><span>Specials Menu</span></a>

											<a href="<?php // echo the_field('towson_lunch_menu'); ?>" class="button" onclick="event.preventDefault();"><span>Lunch Menu</span></a>

											<a href="<?php // echo the_field('towson_margarita_menu'); ?>" class="button" onclick="event.preventDefault();"><span>Margarita Menu</span></a>

										-->
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


<?php get_footer(); ?>
