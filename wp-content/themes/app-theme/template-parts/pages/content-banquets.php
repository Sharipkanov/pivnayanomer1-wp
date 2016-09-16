<?php $postCustom = get_post_custom(); ?>

<div class="b-page__info">
    <h2 class="b-page__info_title"><?=$postCustom['page-cat-title'][0];?></h2>
    <img src="<?=get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="-img-responsive">
</div>

<article class="uk-article">
    <h3 class="uk-article-title"><?=$postCustom['article-title'][0];?></h3>
    <p class="uk-article-lead"><?php the_content(); ?></p>
</article>
