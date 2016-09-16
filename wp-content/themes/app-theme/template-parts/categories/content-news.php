<div>
    <article class="uk-article">
        <div class="uk-clearfix">
            <img src="<?=get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="article-thumb">
            <div class="uk-float-right article-content">
                <p class="uk-article-meta"><?=get_the_date( 'd.m.Y', get_the_ID() );?></p>
                <p class="uk-article-lead"><?php the_title(); ?></p>
            </div>
        </div>
        <div class="uk-text-right"><a href="<?=get_permalink(get_the_ID()); ?>" class="uk-button uk-button-primary">подробно</a>
        </div>
    </article>
</div>