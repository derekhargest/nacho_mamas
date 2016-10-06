<?php
/* Template Name: About Page Template */
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







		<?php

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile;
		?>


        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/scunny-pics.png" alt="Scunny Pics" />


	<?php if (get_field('secondary_content')): ?>

		<div class="content-area secondary">

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

        <div class="page-content">

          <section class="insta-feed">

						<div class="content-title">

						<header class="entry-header">

              <h1 class="entry-title">

                Some Photos

              </h1>

            </header>

					</div>

						<div id="instafeed">

            </div>

						<div class="insta-buttons">

							<button id="load-more">Load More...</button>

							<button id="follow-us"><i class="fa fa-instagram" aria-hidden="true"></i> Follow Us on Instagram</button>

						</div>

					</section>

        </div>

			</div>

		<?php endif; ?>
		</main>
	</div>

</div>

	</div>

</div>

</div>

	<script type="text/javascript">
			var loadButton = document.getElementById('load-more');
			var userFeed = new Instafeed({
				after: function() {
						 // disable button if no more results to load
						 if (!this.hasNext()) {
								 loadButton.setAttribute('disabled', 'disabled');
						 }
				 },
				get: 'user',
				userId: '795184541',
				accessToken: '795184541.1677ed0.cb38cbafbe624b269ece613fe366d012',
				resolution: 'low_resolution'
		});
		loadButton.addEventListener('click', function() {
	        userFeed.next();
	    });
			userFeed.run();


	</script>

<?php get_footer(); ?>
