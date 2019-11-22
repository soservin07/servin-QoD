<?php

/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php //post_class(); 
										?>>
	<header class="entry-header">
		<?php if (has_post_thumbnail()) : ?>
			<?php //the_post_thumbnail('large'); 
				?>
		<?php endif; ?>

		<?php // the_title('<h1 class="entry-title">', '</h1>');
		//the_post();
		?>
		<section class="entry-content">
			<p class="p-source">
				<a href="" class="link-source"></a>
			</p>
		</section><!-- .entry-content -->
	</header><!-- .entry-header -->


</article><!-- #post-## -->