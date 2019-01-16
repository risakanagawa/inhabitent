<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header();?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section id="hero-page" class="frontpage" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('<?php echo get_template_directory_uri() . '/images/home-hero.jpg' ?>') no-repeat; background-size: cover;
    background-repeat: no-repeat;" >
			<img src="/inhabitent/wp-content/themes/inhabitent/images/logos/inhabitent-logo-full.svg" alt="">
		</section>

		<section class="product_page">
			<h2 class="heading_2">SHOP STUFF</h2>
			<div class="product_container container">
			    <?php $terms = get_terms('product_type')?>
				<?php foreach ($terms as $term): ?>
					<div class="product_wrapper">
						<img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->name . '.svg' ?>" alt="home_image" />
						<p><?php echo $term->description ?></p>
						<a href="#"><?php echo $term->name ?> STUFF</a>
						</div>
				<?php endforeach;?>
			</div>
		</section>

		<section class="journal_page">
			<div class="container">
			<h2 class="heading_2">INHABITENT JOURNAL</h2>
			<?php $args = array(
    'post_type' => 'post',
    'offset' => 0,
    'posts_per_page' => 3,
    'order' => 'DSC',
);
$journal_posts = get_posts($args); // returns an array of posts?>

		<ul class="journals">

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
		<li class="jounal_list">
				<div class="jounal_list_img">
				<?php echo get_the_post_thumbnail($post, 'medium'); ?>
				</div>
				<div class="jounal_list_contents">
					<span><?php echo get_the_time('d F Y') ?> / <?php echo $write_comments ?></span>
         			 <a href="<?php the_permalink();?>" class="jounal_title"><?php the_title();?></a>
					 <a href="<?php the_permalink();?>" class="read_entry_btn">READ ENTRY</a>
		 		</div>
		</li>
         <?php endforeach;
wp_reset_postdata();?>
		</ul>
		</section>

		<section class="adventures container">
			<h2 class="heading_2">LATEST ADVENTURES</h2>
			<div class="adventure_grid">
				<?php $arg = array(
					'post_type' => 'adventures',
					'offset' => 0,
					'posts_per_page' => 4,
					'order' => 'ASC',
				);
				$adventure = get_posts($arg); // returns an array of posts

				?>
				<?php foreach ($adventure as $post): setup_postdata($post);?>
					<div class="adventure_list" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url('<?php the_post_thumbnail_url(); ?>') no-repeat; background-position: center; background-size: cover;
		background-repeat: no-repeat;">
						<div class="adventure_info">				
							<h3><a href="<?php the_permalink();?>" class="adventure_title"><?php the_title();?></a></h3>
							<a href="<?php the_permalink();?>" class="read_btn">READ ENTRY</a>	
						</div>	
					</div>
					<?php endforeach;
				wp_reset_postdata();?>
		</div>
		<div class="more-adventure">
		<a href="<?php echo get_post_type_archive_link( 'adventures' ); ?>" class="adventure_link">
				MORE ADVENTURE
		</a>
		</div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
