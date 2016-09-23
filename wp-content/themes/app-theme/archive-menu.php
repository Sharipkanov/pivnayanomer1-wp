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

        <div class="b-page__info">
            <h2 class="b-page__info_title">Меню</h2>
            <img src="<?php bloginfo('template_url'); ?>/images/menu-page-img.jpg" alt="" class="-img-responsive">
        </div>

        <?php
            $parentCat = get_category_by_slug('menu');

            $menuCats = get_categories(array(
                'parent'  => $parentCat->term_id,
                'order' => 'DESC',
                'posts_per_page' => -1
            ));
        ?>

        <ul class="uk-list page-list normal-content">
            <?php foreach($menuCats as $key => $val) : ?>
                <?php
                if ($key != 0) {
                    $url = '?p=' . $val->slug;

                    if(isset($_GET['p']) && $_GET['p'] == $val->slug) $active = 'uk-active';
                    else $active = '';
                } else {
                    $url = '/' . $parentCat->slug;
                    $active = 'uk-active';

                    if(isset($_GET['p'])) $active = '';
                }
                ?>
                <li class="<?=$active;?>"><a href="<?=$url; ?>"><?=$val->description; ?></a></li>
            <?php endforeach; ?>
        </ul>
            <?php
                if(isset($_GET['p'])) {
                    foreach ($menuCats as $key => $val) {
                        if($_GET['p'] == $val->slug) $currentCat = $val;
                    }
                } else $currentCat = $menuCats[0];

                $childCats = get_categories(array(
                    'parent'  => $currentCat->term_id,
                    'posts_per_page' => -1
                ));

                if(!$childCats) {
                    $childCats[0] = $currentCat;
                }
            ?>
            <?php foreach ($childCats as $key => $value) : ?>
                <article class="menu-article uk-article">
                    <h3 class="uk-article-title"><?=$value->name; ?></h3>

                    <?php
                        $products = get_posts(array(
                            'post_type' => 'menu',
                            'posts_per_page' => -1,
                            'order' => 'ASC',
                            'category' => $value->term_id
                        ));
                    ?>

                    <ul class="uk-list">
                        <?php foreach ($products as $productKey => $productVal) : ?>
                            <?php $productTag = wp_get_post_tags($productVal->ID); ?>
                            <?php $productImg = get_the_post_thumbnail_url($productVal->ID); ?>
                            <li>
                                <span>
                                    <?php if($productImg): ?>
                                        <a href="<?=$productImg;?>" data-uk-lightbox><i class="fri fri-photo"></i></a>
                                        <?php echo '&nbsp;';?>
                                    <?php endif; ?>
                                    <?=types_render_field( "product-title", array("id" => $productVal->ID) ); ?>
                                </span>
                                <span class="has-dots"><i></i></span>
                                <span class="price"><?=types_render_field( "product-price", array("id" => $productVal->ID) ); ?></span>
                            </li>
                            <?php $productExcerpt =  types_render_field( "product-excerpt", array("id" => $productVal->ID) ); ?>
                            <?php if($productExcerpt) : ?>
                                <p class="product-excerpt"><?=$productExcerpt; ?></p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
    </div>

<?php
get_footer();
