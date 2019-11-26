<?php

/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header();
$imgArray = get_field('qod_logo');

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php //get_template_part('template-parts/content', 'single');
        ?>
        <img src="<?php print $imgArray['url']; ?>" alt="quotes on dev" class="img-quote">
        <section class="entry-content">

            <p class="p-source">
                <a href="#" class="link-source"></a>
            </p>
            <button type="button" id="close-comments" class="btn-show" alt="Begging you give me ANOTHER MOTIVATION!">show me another!</button>

        </section><!-- .entry-content -->

    </main><!-- #main -->
    <?php get_footer(); ?>
</div><!-- #primary -->