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
					<h1>SHOP STUFF</h1>
					<div class="shop_links">
						<?php wp_nav_menu(array('theme_location' => 'shop', 'menu_id' => 'shop_menu'));?>
					</div>

				</div>

				<div class="items_wrapper">

				<?php $args = array('offset' => 0,
									'order' => 'ASC',
									'post_type' => 'products',
									'numberposts' => 16
   							 );
							$posts = get_posts( $args );
				   if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); 
				     ?>
					<div class="item">
						<div class="post-thumbnail"><a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a> </div>
						<p><?php the_title();?>  ............<span><?php echo CFS()->get('Price'); ?></span></p>
					</div>
						<?php endforeach; ?>
					<?php else : ?>
							<p>No items found</p>	
				<?php endif; wp_reset_postdata(); ?>
				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
