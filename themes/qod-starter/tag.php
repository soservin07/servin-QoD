<?php

/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header();
$imgArray = get_field('qod_logo');
$tmp='';
?>

<div id="primary" class="content-area">
<img src="<?=home_url() ?>/wp-content/uploads/2019/11/qod-logo.svg" alt="quotes on dev">
	<main id="main" class="site-main" role="main">

		<section class="archive-content">
            <h2 class="entry-title">
            Tag : <?php echo single_tag_title(); ?>
            </h2>
            <?php
            if(is_tag()){
                while(have_posts()){
                    the_post();

                    $tmp.='<nav>';
                    $tmp.=get_the_content();
                    $tmp.='<p class="p-author">--' .get_the_title().'</p>';
                    $tmp.='</nav>';
                }
                echo $tmp;
            }
            echo '<strong>';
                posts_nav_link(' | ', '<<<','>>>');
            echo '</strong>';
            ?>            
		</section>
 
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>