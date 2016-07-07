<?php
/* Template Name: About Page Template */
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

        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/scunny-pics.png" alt="Scunny Pics" />

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

        <div class="page-content">

          <section class="insta-feed">

						<header class="entry-header">

              <h1 class="entry-title">

                Some Photos

              </h1>

            </header>

						<div id="instafeed">

            </div>

						<div class="insta-buttons">

							<button id="load-more">Load More...</button>

							<button id="follow-us"><i class="fa fa-instagram" aria-hidden="true"></i> Follow Us on Instagram</button>

						</div>

					</section>

        </div>

			</div>

		</div>

		<?php endif; ?>

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
