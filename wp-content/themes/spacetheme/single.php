<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package space_theme
 */

get_header(); ?>

	<div id="primary">
		<main id="main" class="site-main" role="main">
<div class="main-content">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

		endwhile; // End of the loop.
		?>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
