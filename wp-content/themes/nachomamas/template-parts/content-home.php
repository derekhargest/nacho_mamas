<?php
/**
 * The template used for displaying page content on the home page
 *
 * @package Nacho Mama's
 * @subpackage Nacho Mama's
 * @since 2016
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="content-container">

		<div class="home-content-items">

			<?php get_template_part( 'template-parts/homepage-items' ); ?>

		</div>

	</div>

</article>
