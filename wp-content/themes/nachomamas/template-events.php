<?php
/* Template Name: Events Template */
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
				<div class="events">

					<?php
      $args = array('post_type' => 'events');
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      ?>

					<div class="event-item-wrapper">
						<div class="event-item">
							<div class="event-image">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
							</div>
							<div class="event-content">
								<a href="#"><h3><?php the_title(); ?></h3></a>
								<p><?php the_excerpt(); ?></p>
								<div class="event-info">
									<?php if (get_field('event_location')): ?><p>Location: <?php echo the_field('event_location'); ?></p><?php endif; ?>
									<?php if (get_field('event_date')): ?><p>Date: <?php echo the_field('event_date'); ?></p><?php endif; ?>
									<?php if (get_field('event_time')): ?><p>Time: <?php echo the_field('event_time'); ?></p><?php endif; ?>
								</div>
								<?php if (get_field('event_facebook_link')): ?>
									<a href="<?php echo the_field('event_facebook_link'); ?>" class="facebook-event"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/facebook-event.png" alt="Join the event on facebook" /></a>
								<?php endif; ?>
							</div>
						</div>
					</div>

					<?php endwhile;?>

				</div>

      </div>
    </div>
	</main>

</div>
	</div>

<?php get_footer(); ?>
