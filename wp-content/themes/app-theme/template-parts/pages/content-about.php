<?php $postCustom = get_post_custom(); ?>

<div class="b-page__info">
    <a href="/about/">
        <h2 class="b-page__info_title"><?=$postCustom['page-cat-title'][0];?></h2>
        <img src="<?=get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="-img-responsive">
    </a>
</div>

<?php $pageNavItems = wp_get_nav_menu_items('page-menu'); ?>

<ul class="uk-list page-list normal-content">
    <?php foreach($pageNavItems as $key => $val) : ?>
        <li><a href="<?=$val->url; ?>"><?=$val->title; ?></a></li>
    <?php endforeach; ?>
</ul>

<h4 class="page-italic-title"><i><?=$postCustom['welcome-title'][0];?></i></h4>
<article class="uk-article">
    <h3 class="uk-article-title"><?=$postCustom['article-title'][0];?></h3>
    <p class="uk-article-lead"><?php the_content(); ?></p>
</article>