<?php
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

			<div class="cta-section">

				<a href="http://www.opentable.com/single.aspx?rid=212593&restref=212593"><span>Make Reservations Today</span></a>

			</div>

			<div class="container">

			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single' );

			endwhile;
			?>

		</div>

	</main>

</div>

<?php get_footer(); ?>
