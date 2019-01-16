<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <?php $args = array('post_type' => 'adventures', );
			  $posts = get_posts( $args );
		    	if( $posts )  : setup_postdata( $post ); ?>
					<div class="adventure">
						<div id="adventure-hero" class="adventure-image">
                            <?php the_post_thumbnail();?>
                        </div>
                        <div class="adventure-description">
                            <h2><?php the_title();?></h2>
                            <span>BY <?php the_author(); ?></span>
                            <p><?php the_content(); ?></p>
                            <div class="like-icons">
                                    <button><i class="fab fa-facebook"></i> LIKE</button>
                                    <button><i class="fab fa-twitter"></i> TWEET</button>
                                    <button><i class="fab fa-pinterest"></i> PIN</button>
                            </div>
                        </div>
					</div>
					<?php else : ?>
							<p>No items found</p>	
				<?php endif; wp_reset_postdata(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
