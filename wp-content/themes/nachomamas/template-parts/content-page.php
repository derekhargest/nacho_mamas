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
		<div class="content-title">
			<header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
		</div>



		<div class="page-content">
			<?php
			 the_content();
			?>

		</div><!-- .entry-content -->

</article><!-- #post-## -->
