<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <?php while (have_posts()): the_post();?>
            <?php   $title = $post->post_title;
                    $content = $post->post_content;
                    $slug = $post->post_name;
                    $parent = $post->post_parent;?>

            <section id="hero-page" class="frontpage" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('<?php echo get_template_directory_uri() . '/images/about-hero.jpg' ?>') no-repeat; background-size: cover;
            background-repeat: no-repeat;" >
                    <h1><?php the_title();?></h1>
            </section>

            <article class="about_page">
            <?php the_content();?>
            </article>

	        <?php endwhile;?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
