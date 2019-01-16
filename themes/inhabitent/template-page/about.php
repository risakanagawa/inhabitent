<?php
/**
 *  Template Name: About Page
 *
 * @package RED_Starter_Theme
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="about-page">
            <?php while (have_posts()): the_post();?>
            <?php the_content();?>
	        <?php endwhile;?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
