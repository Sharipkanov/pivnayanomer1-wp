<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package App_theme
 */

?>

<div class="b-page__info">
	<h2 class="b-page__info_title">Новости</h2>
	<img src="<?php bloginfo('template_url'); ?>/images/news-page-img.jpg" alt="" class="-img-responsive">
</div>

<?php

$category = get_category_by_slug( 'news' );

$newsCats = get_categories(array(
	'order' => 'DESC',
	'parent'  => $category->term_id,
	'posts_per_page' => -1
));
?>

<ul class="uk-list page-list normal-content">
	<?php foreach($newsCats as $key => $val) :

		if ($key != 0) {
			$slug = explode('-', $val->slug);
			$url = '/news?y=' . $slug[1];
		} else {
			$url = '/news';
		}

		?>
		<li><a href="<?=$url; ?>"><?=$val->name; ?></a></li>
	<?php endforeach; ?>
</ul>

<div class="uk-clearfix">
	<a href="/news" class="uk-button uk-button-primary">вернуться к списку</a>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content uk-clearfix">
		<h3><?php the_title(); ?></h3>
		<p class="content-small"><?=get_the_date( 'd.m.Y', get_the_ID() );?></p>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'app-theme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'app-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article><!-- #post-## -->

<div class="uk-clearfix">
	<a href="/news" class="uk-button uk-button-primary">вернуться к списку</a>
</div>
