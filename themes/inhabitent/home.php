<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<?php $args = array(
  					  'post_type' => 'post',
    				  'offset' => 0,
    				  'posts_per_page' => 3,
       				  'order' => 'DSC',
					);
				 $journal_posts = get_posts($args); // returns an array of posts?>

		<ul class="main_posts">

         <?php foreach ($journal_posts as $post): setup_postdata($post);?>
				 <?php $num_comments = get_comments_number();
   					 if (comments_open()) {
       					 if ($num_comments == 0) {
         					   $comments = __('0 Comments');
							} elseif ($num_comments > 1) {
								$comments = $num_comments . __(' Comments');
							} else {
								$comments = __('1 Comment');
							}
   						 $write_comments = $comments;
				} else {
					$write_comments = __('Comments are off for this post.');
				}?>
		<li>
				<div class="post_header" >
				<h2><a href="<?php the_permalink();?>" class="post_title"><?php the_title();?></a></h2>
				<?php echo get_the_post_thumbnail($post); ?>
				<span><?php echo get_the_time('Y.m.d') ?> / <?php echo $write_comments ?>/ <?php echo 'BY'.get_the_author(); ?></span>

				</div>
				<div class="post_content">
					<?php the_excerpt(); ?>
					 <a href="<?php the_permalink();?>" class="read_more_btn">READ MORE →</a>
		 		</div>
		</li>
         <?php endforeach; wp_reset_postdata();?>
		</ul>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>