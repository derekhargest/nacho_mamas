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

		<?php get_template_part( 'template-parts/cta-link' ); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="content-container">
    		<div class="content-title">
    			<header class="entry-header">
            <h1 class="entry-title">Whoops!</h1>
    			</header><!-- .entry-header -->
    		</div>



    		<div class="page-content">
          <p style="text-align: center;">The page you are looking for doesnt exist!</p>
          <p style="text-align: center;">Go to the <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home Page</a> and try again.</p>
    		</div><!-- .entry-content -->

    	</div>

    </article><!-- #post-## -->

	</div>

	</main>

</div>

<?php get_footer(); ?>
