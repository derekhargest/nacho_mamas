<?php
/* Template Name: Home Page Template */
/**
 * @package Nacho Mama's
 * @subpackage Nacho Mama's
 * @since 2016
 */

get_header('home'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

    <?php if (get_field('page_main_banner')): ?>

    	<?php get_template_part( 'template-parts/content-banner' ); ?>

    <?php endif ?>

		<?php get_template_part( 'template-parts/cta-link' ); ?>

		<div id="content-block">

      <div class="container">

				<section class="quotes">

					<header class="entry-header">

						<h1 class="entry-title">

							A True Baltimore Institution

						</h1>

					</header>

					<div class="content-container">

						<ul class="bxslider">

							<li><div class="slide"><p>On a recent steaming hot evening, nothing appealed to the stomach more than Mexican food-a pitcher or two of margaritas, some healthy sweat-production from fresh, peppery, simply composed food. I didn’t want to think about food so much as consume it, and a casual, come-as-you-are joint felt ideal.</p><span>- City Paper</span></div></li>

							<li><div class="slide"><p>Elvis lives on in the spirit of this quirky Canton hangout. This tiny Mexican eatery is a shrine to things gone but not forgotten–the Colts, Baltimore-brewed National Bohemian beer, a winning Orioles team and, of course, Elvis. A nearly life-sized statue of the King greets customers at the door</p><span>- City Search</span></div></li>

						</ul>

					</div>

				</section>

	  		<?php

	  		while ( have_posts() ) : the_post();

	  			get_template_part( 'template-parts/content', 'home' );

	  		endwhile;

	  		?>
    	</div>


		</div>

	</main>

</div>

<script>
slider=$('.bxslider').bxSlider({
	mode: 'horizontal',
	useCSS: false,
	infiniteLoop: false,
	hideControlOnEnd: true,
	speed: 2000,
	pager: false,
	minSlides: 2,
	maxSlides: 2,
	moveSlides: 1
});
setTimeout(function(){
	slider.redrawSlider();

},100);
</script>

<?php get_footer(); ?>
