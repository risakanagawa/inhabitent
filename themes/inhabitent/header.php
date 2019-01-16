<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<?php wp_head();?>
	</head>

	<body <?php body_class();?>>
		<div id="page" class="hfeed site">

			<!-- <a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a> -->

			<header id="masthead" class="site-header-fixed site-header" role="banner">
			<div class="header_nav container">
				<div class="site-branding">
				<a class="brand_img" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
				<div class="logo_svg"></div>
			</a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu'));?>
					<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <div><label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
				</div>
				</nav><!-- #site-navigation -->
			</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
