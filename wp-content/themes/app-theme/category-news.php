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
            <a href="/news/">
                <h2 class="b-page__info_title">Новости</h2>
                <img src="<?php bloginfo('template_url'); ?>/images/news-page-img.jpg" alt="" class="-img-responsive">
            </a>
        </div>

        <?php
            $newsCats = get_categories(array(
                'order' => 'DESC',
                'parent'  => get_queried_object_id()
            ));
        ?>

        <ul class="uk-list page-list normal-content">
            <?php foreach($newsCats as $key => $val) : ?>
            <?php
                if ($key != 0) {
                    $slug = explode('-', $val->slug);
                    $url = '/news?y=' . $slug[1];

                    if(isset($_GET['y']) && $_GET['y'] == $slug[1]) $active = 'uk-active';
                    else $active = '';
                } else {
                    $url = '/news' . get_queried_object()->slug;
                    $active = 'uk-active';

                    if(isset($_GET['y'])) $active = '';
                }
            ?>
            <li class="<?=$active; ?>"><a href="<?=$url; ?>"><?=$val->name; ?></a></li>
            <?php endforeach; ?>
        </ul>

        <div class="b-widget__news uk-grid uk-grid-collapse uk-grid-match uk-grid-width-small-1-1 uk-grid-width-medium-1-2">
            <?php
                if(isset($_GET['y'])) {
                    $year = $_GET['y'];
                } else {
                    $year = $newsCats[0]->name;
                }

                $newsArgs = array(
                    'posts_per_page'=> -1,
                    'category_name' => 'news-' . $year,
                    'orderby' => 'date',
                );

                $news = new WP_Query( $newsArgs );

                if ( $news->have_posts() ) :

                    while ( $news->have_posts() ) : $news->the_post();

                        get_template_part( 'template-parts/categories/content', 'news' );

                    endwhile;

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
            ?>
        </div>

    </div>

<?php
get_footer();
