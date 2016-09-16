<?php $postCustom = get_post_custom(); ?>

<div class="b-page__info">
    <h2 class="b-page__info_title"><?=$postCustom['page-cat-title'][0];?></h2>
    <img src="<?=get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="-img-responsive">
</div>

<div class="-margin-top-40">
    <a href="#" class="uk-button uk-button-primary reverse-triange">распечатать</a>
</div>

<form action="" class="uk-form -margin-top-40">
    <p>Форма обратной связи</p>
    <div class="uk-form-row">
        <label>Ваше имя*</label>
        <input type="text" placeholder="" required>
    </div>
    <div class="uk-form-row">
        <label>Телефон*</label>
        <input type="text" placeholder="" required>
    </div>
    <div class="uk-form-row">
        <label>Сообщение*</label>
        <textarea></textarea>
    </div>
    <p>Поля, обязательные для заполнения, помечены*.</p>
    <div class="uk-form-row">
        <button type="submit" class="uk-button uk-button-primary">отправить</button>
    </div>
</form>
