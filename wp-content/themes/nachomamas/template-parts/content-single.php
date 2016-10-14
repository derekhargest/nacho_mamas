<?php
/**
 * The template used for displaying single post content
 *
 * @package Nacho Mama's
 * @subpackage Nacho Mama's
 * @since 2016
 */
?>




		<div class="page-content">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
	        <h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-meta">
						<?php
							// if ( 'post' == get_post_type() )
								twentyfourteen_posted_on();

							 ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->
			<?php
			 the_content();
			?>
			</article><!-- #post-## -->

		</div><!-- .entry-content -->
