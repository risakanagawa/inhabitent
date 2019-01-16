<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="shop_page">
				<div class="shop_header">
					<?php $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') ); ?>
                    <h1><?php echo $term->name?></h1>
                    <p><?php echo $term->description ?></p>
				</div>

				<div class="items_wrapper">

				<?php if(have_posts()): while (have_posts()):the_post(); ?>
					<div class="item">
						<div class="post-thumbnail"><a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a> </div>
						<p><?php the_title();?>  ............<span><?php echo CFS()->get('Price'); ?></span></p>
					</div>
					<?php endwhile; else: ?>
							<p>No items found</p>	
				<?php endif; wp_reset_postdata(); ?>
				
				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
