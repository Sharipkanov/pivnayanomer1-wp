<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package App_theme
 */

get_header();
get_sidebar();
?>
	<div class="uk-width small-1-1 uk-width-medium-2-3">

		<?php
			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
		?>

	</div>

<?php
get_footer();
