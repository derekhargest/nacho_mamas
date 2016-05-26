<?php if (get_field('page_main_banner')): ?>

	<div class="banner-wrapper" id="banner">
		<div class="banner main-banner">
				<img src="<?php the_field('page_main_banner'); ?>" alt="<?php the_title(); ?> Banner" title="<?php the_title(); ?> Banner" />
		</div>
	</div>

	<?php if ( is_front_page() ) : ?>
		<div class="banner-overlay home">
			<div class="overlay-logo">
				<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/banner-logo.png" alt="Nacho Mama's logo" />
			</div>
			<h3>"Where Baw/mer meets Mexico"</h3>
		</div>
	<?php else: ?>
		<div class="banner-overlay page">
			<h3><?php the_field('headline_title'); ?></h3>
		</div>
	<?php endif; ?>

<?php else:?>

	<div class="banner-wrapper" id="banner">
		<div class="banner main-banner">
				<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/default-banner.jpg" alt="<?php the_title(); ?> Banner" title="<?php the_title(); ?> Banner" />
		</div>
	</div>

	<div class="banner-overlay page">
		<h3><?php the_field('headline_title'); ?></h3>
	</div>

<?php endif; ?>
