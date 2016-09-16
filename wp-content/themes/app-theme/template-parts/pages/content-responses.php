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

<div class="uk-text-right">
    <a href="#add-review" class="uk-button uk-button-primary reverse-triange" data-uk-modal>оставить
        отзыв</a>
</div>

<h4 class="page-italic-title"><i><?=$postCustom['welcome-title'][0];?></i></h4>
<article class="responses-article uk-article">
    <p class="uk-article-meta">28.05.2016</p>
    <div>
        <small>отзыв:</small>
    </div>
    <p class="uk-article-lead">
        Мне хотелось бы выразить огромнейшую благодарность и признательность всем тем, кто помог мне
        поздравить мою лучшую подругу с Днём Рождения в режиме он-лайн, за 3 тысячи километров!!! Я
        безумно благодарна Евгению, что откликнулся на мою просьбу и все сделали на отлично! Спасибо
        группе Фанни Каплан за личное поздравление моей подруги!!! И я , и она в полнейшем
        восторге!!! Очень рада, что сюрприз удался!!! Я искренне тронута тем, что на мою просьбу о
        поздравлении подруги на расстоянии так искренне и живо откликнулись администраторы вашего
        чудесного ресторана!!! В свою очередь, обещаю лично посетить ваше замечательное место!!!
        Слов действительно не подобрать!!!! Я на эмоциях!! Но я настолько приятно поражена, что
        сложно подобрать слова!! Рекомендую это чудесное заведение всем-всем-всем!!!! Здесь реально
        есть подход к каждому клиенту!!!!не говоря уже про отличную кухню и живой звук !
    </p>
    <p>Ирина Баева ( Иваново )</p>
</article>
<article class="responses-article uk-article">
    <div>
        <p class="uk-article-meta">14.01.2015</p>
        <div>
            <small>отзыв:</small>
        </div>
        <p class="uk-article-lead">
            Любим ваше заведение! Очень бы хотелось увидеть программу выступлений на январь 2015
            года.
        </p>
        <p>Мария</p>
    </div>
    <div>
        <div>
            <small>наш коментарий:</small>
        </div>
        <p class="uk-article-lead">
            Уважаемая Мария! <br>
            График выступлений музыкальных коллективов всегда можно посмотреть на нашем сайте в
            разделе "Новости".
        </p>
    </div>
</article>