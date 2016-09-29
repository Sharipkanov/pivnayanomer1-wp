<?php $postCustom = get_post_custom(); ?>

<div class="b-page__info">
    <a href="/about/">
        <h2 class="b-page__info_title"><?=$postCustom['page-cat-title'][0];?></h2>
        <img src="<?=get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="-img-responsive">
    </a>
</div>

<?php $afisha = get_page_by_path('afisha'); ?>
<div class="b-page__info -margin-top-40">
    <a href="<?=get_permalink($afisha->ID)?>">
        <img src="<?=get_the_post_thumbnail_url($afisha->ID); ?>" alt="" class="-img-responsive">
    </a>
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
<?php
    $comments = get_approved_comments(get_the_ID());

    $sortedComments = array();

    foreach ($comments as $key => $value) {

        if ($value->comment_parent != 0) {
            $sortedComments[$value->comment_parent]->answer = $value;
        } else {
            $sortedComments[$value->comment_ID] = $value;
        }
    }
?>

<?php foreach ($sortedComments as $key => $val) : ?>
<article class="responses-article uk-article">
    <div>
        <p class="uk-article-meta"><?=get_the_date( 'd.m.Y', $val->comment_ID );?></p>
        <div>
            <small>отзыв:</small>
        </div>
        <p class="uk-article-lead"><?=$val->comment_content; ?></p>
        <p><?=$val->comment_author;?></p>
    </div>
    <?php if($val->answer) : ?>
    <div>
        <div>
            <small>наш коментарий:</small>
        </div>
        <p class="uk-article-lead"><?=$val->answer->comment_content;?></p>
    </div>
    <?php endif; ?>
</article>
<?php endforeach; ?>

<?php if(!is_admin()) : ?>
<div id="add-review" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <?php
            $fields =  array(

                'author' =>
                    '<p class="uk-form-row"><label for="author">' . __( 'Ваше имя*', 'domainreference' ) . '</label> ' .
                    ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                    '" size="30"' . $aria_req . ' /></p>',

                'email' =>
                    '<p class="uk-form-row"><label for="email">' . __( 'Email*', 'domainreference' ) . '</label> ' .
                    ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' /></p>'
            );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comment_form(array(
                    'class_form'      => 'uk-form',
                    'class_submit'      => 'uk-button uk-button-primary',
                    'name_submit'       => 'submit',
                    'comment_notes_before' => '<p class="">Мы заинтересованы в безупречном обслуживании наших гостей. <br> И благодарны
                                                всем, оставившим свои отзывы о нашем ресторане.</p><p>Поля, обязательные для заполнения, помечены*.</p>',
                    'fields' => apply_filters( 'comment_form_default_fields', $fields )
                ));
            endif;
        ?>
    </div>
</div>
<?php endif; ?>