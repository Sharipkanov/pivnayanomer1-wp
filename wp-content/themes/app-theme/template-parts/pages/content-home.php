<!-- Block content -->

<div class="b-page__info">
	<a href="/">
		<h2 class="b-page__info_title">Пивная №1</h2>
		<img src="<?=get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="-img-responsive">
	</a>
</div>
<?php $afisha = get_page_by_path('afisha'); ?>
<div class="b-page__info -margin-top-40">
	<a href="<?=get_permalink($afisha->ID)?>">
		<img src="<?=get_the_post_thumbnail_url($afisha->ID); ?>" alt="" class="-img-responsive">
	</a>
</div>
<div class="b-widget__news uk-grid uk-grid-collapse uk-grid-match uk-grid-width-small-1-1 uk-grid-width-medium-1-2">
	<?php
		$last_news = get_posts(array(
			'posts_per_page' => 2,
			'category_name' => 'news',
			'orderby' => 'date',
		));
	?>
	<?php foreach($last_news as $key => $val) :?>
		<div>
			<article class="uk-article">
				<div class="uk-clearfix">
					<img src="<?=get_the_post_thumbnail_url($val->ID); ?>" alt="" class="article-thumb">
					<div class="uk-float-right article-content">
						<p class="uk-article-meta"><?=get_the_date( 'd.m.Y', $val->ID );?></p>
						<p class="uk-article-lead"><?=$val->post_title;?></p>
					</div>
				</div>
				<div class="uk-text-right"><a href="<?=get_permalink($val->ID)?>" class="uk-button uk-button-primary">подробно</a>
				</div>
			</article>
		</div>
	<?php endforeach; ?>
</div>
<article class="uk-article">
	<?php $postCustom = get_post_custom(); ?>
	<h3 class="uk-article-title"><?=$postCustom['welcome-title'][0];?></h3>
	<p class="uk-article-lead"><?php the_content(); ?></p>
	<p class="uk-article-meta"><?=$postCustom['team-name'][0];?></p>
</article>

<!-- Block content end -->