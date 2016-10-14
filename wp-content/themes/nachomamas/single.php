<?php
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

				<div class="content-container">

						<div id="primary">

					<main id="main" class="site-main" role="main">
						<div class="page-content">

			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single' );

					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

			endwhile;
			?>
</div>

			</main>
		</div>
		<?php
		get_sidebar('content');
		?>
		</div>

		</div>

	</div>

</div>

<?php get_footer(); ?>
