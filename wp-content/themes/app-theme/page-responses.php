<?php
get_header();
get_sidebar();
?>
    <div class="uk-width small-1-1 uk-width-medium-2-3">
        <?php
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/pages/content', 'responses' );

        endwhile; // End of the loop.
        ?>
    </div>
<?php
get_footer();
