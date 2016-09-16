<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package App_theme
 */

get_header();
get_sidebar();
?>
	<div class="uk-width small-1-1 uk-width-medium-2-3">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

		endwhile; // End of the loop.
		?>
	</div>

<?php
get_footer();
