<?php
/**
 * The template used for displaying page content
 *
 * @package Nacho Mama's
 * @subpackage Nacho Mama's
 * @since 2016
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="content-container">

		<div class="home-content">

			<?php get_template_part( 'template-parts/homepage-items' ); ?>

		</div>

	</div>

</article>
