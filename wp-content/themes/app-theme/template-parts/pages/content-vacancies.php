<?php $postCustom = get_post_custom(); ?>

<div class="b-page__info">
    <h2 class="b-page__info_title"><?=$postCustom['page-cat-title'][0];?></h2>
    <img src="<?=get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="-img-responsive">
</div>

<?php $pageNavItems = wp_get_nav_menu_items('page-menu'); ?>

<ul class="uk-list page-list normal-content">
    <?php foreach($pageNavItems as $key => $val) : ?>
        <li><a href="<?=$val->url; ?>"><?=$val->title; ?></a></li>
    <?php endforeach; ?>
</ul>

<h4 class="page-italic-title"><i><?=$postCustom['welcome-title'][0];?></i></h4>

<article class="uk-article -margin-top-40">
    <h3 class="uk-article-title"><?=$postCustom['article-title'][0];?></h3>
    <p class="uk-article-lead"><?php the_content(); ?></p>
</article>
<br>
<form action="" class="uk-form">
    <div class="uk-form-row">
        <label>Ваше имя*</label>
        <input type="text" placeholder="" required>
    </div>
    <div class="uk-form-row">
        <label>Телефон*</label>
        <input type="text" placeholder="" required>
    </div>
    <div class="uk-form-row">
        <label>Возраст*</label>
        <input type="text" placeholder="" required>
    </div>
    <div class="uk-form-row">
        <label>Сообщение*</label>
        <textarea></textarea>
    </div>
    <div class="uk-form-row">
        <label>Резюме</label>
        <input type="file" name="" id="">
    </div>
    <p>Поля, обязательные для заполнения, помечены*.</p>
    <div class="uk-form-row">
        <button type="submit" class="uk-button uk-button-primary">отправить</button>
    </div>
</form>