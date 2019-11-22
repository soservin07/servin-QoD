<?php

/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header();
$imgArray = get_field('qod_logo');


?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<img src="<?= $imgArray['url'] ?>" alt="quotes on dev" />

		<section class="entry-content">
			<?php // while (have_posts()) :

			if (is_page('about-us')) {

				$query = get_post();
				// $query = get_posts(array('post_type' => 'page', 'tax_query' => 'category_name=about'));
				// echo '<pre>';
				// print_r($query);
				// echo '</pre>';
				setup_postdata($query);
				echo '<h2 class="entry-title">' . get_the_title($query) . '</h2>';
				echo get_the_content();
			} elseif (is_page('archives')) {
				get_template_part('template-parts/page', 'archives');
			}
			wp_reset_postdata();
			?>
		</section>


		<?php // endwhile; // End of the loop. 
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>