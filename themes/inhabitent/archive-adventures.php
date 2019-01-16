<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="adventure_archive_page">
			<div class="adventure_header">
                    <h1>LATEST ADVENTURES</h1>
				</div>

				<div class="adventures_wrapper container">
			<?php $arg = array(
								'post_type' => 'adventures',
								'offset' => 0,
								'posts_per_page' => 4,
								'order' => 'ASC',
							);
							$adventure = get_posts($arg); ?>
			<?php foreach ($adventure as $post): setup_postdata($post);?>
					<div class="adventure_list" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url('<?php the_post_thumbnail_url();?>') no-repeat; background-position: center; background-size: cover;
		background-repeat: no-repeat;">
						<div class="adventure_info">
							<h3><a href="<?php the_permalink();?>" class="adventure_title"><?php the_title();?></a></h3>
							<a href="<?php the_permalink();?>" class="read_btn">READ ENTRY</a>
						</div>
					</div>
					<?php endforeach;
wp_reset_postdata();?>
				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
