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
            <a href="/photos/">
                <h2 class="b-page__info_title">Фото</h2>
                <img src="<?php bloginfo('template_url'); ?>/images/photos-page-img.jpg" alt="" class="-img-responsive">
            </a>
        </div>

        <?php
            $galleries = get_posts(array(
                'post_type' => 'photos',
                'posts_per_page' => -1,
                'order' => 'ASC'
            ));
        ?>

        <ul class="uk-list page-list normal-content">
            <?php foreach($galleries as $key => $val) : ?>
                <?php
                    if ($key != 0) {
                        $url = '?p=' . $val->post_name;

                        if(isset($_GET['p']) && $_GET['p'] == $val->post_name) $active = 'uk-active';
                        else $active = '';
                    } else {
                        $url = '/' . get_queried_object()->name;
                        $active = 'uk-active';

                        if(isset($_GET['p'])) $active = '';
                    }
                ?>

                <li class="<?=$active;?>"><a href="<?=$url; ?>"><?=$val->post_title; ?></a></li>
            <?php endforeach; ?>
        </ul>

        <div class="gallery-grid">
            <?php
                if(isset($_GET['p'])) {
                    foreach ($galleries as $key => $val) {
                        if($_GET['p'] == $val->post_name) $gallery = $val;
                    }
                } else $gallery = $galleries[0];

                $galleryImagesSmall = types_render_field( "photos-gallery", array(
                    "id" =>  $gallery->ID,
                    "url" => true,
                    "width" => "105",
                    "height" => "105",
                    "proportional" => "true",
                    "resize" => "crop"
                ) );

                $galleryImagesLarge = types_render_field( "photos-gallery", array(
                    "id" =>  $gallery->ID,
                    "url" => true
                ) );

                $galleryImagesSmall = explode(" ", $galleryImagesSmall);
                $galleryImagesLarge = explode(" ", $galleryImagesLarge);


                $galleryImages = array();

            ?>
            <?php foreach ($galleryImagesSmall as $key => $val) {
                $galleryImages[$key]['small'] = $val;
                $galleryImages[$key]['large'] = $galleryImagesLarge[$key];
            } ?>

            <?php foreach ($galleryImages as $key => $val) : ?>
                <div>
                    <a href="<?=$val['large'];?>" data-uk-lightbox="{group:'group1'}"
                       title="Ассорти колбас с тушеной капустой и картофелем">
                        <img src="<?=$val['small'];?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

<?php
get_footer();
