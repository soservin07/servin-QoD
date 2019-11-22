<?php

/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php //while (have_posts()) : the_post(); 
		the_post();
		?>

		<?php get_template_part('template-parts/content', 'single'); ?>

		<?php //the_post_navigation();
		?>

		<?php //endwhile; // End of the loop. 
		?>
		<button type="button" id="close-comments" class="btn-show" alt="Begging you give me ANOTHER MOTIVATION!">show me another!</button>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>