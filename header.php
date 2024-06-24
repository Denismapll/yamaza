<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if (!get_option('site_icon')) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
	<!-- <link href="http://localhost/yamaza/wp-content/themes/yamaza/assets/css/line-awesome.min.css" rel="stylesheet">
	<link href="http://localhost/yamaza/wp-content/themes/yamaza/assets/css/revolution-settings.min.css" rel="stylesheet">
	<link href="http://localhost/yamaza/wp-content/themes/yamaza/assets/css/jquery.fancybox.min.css" rel="stylesheet">
	<link href="http://localhost/yamaza/wp-content/themes/yamaza/assets/css/owl.carousel.min.css" rel="stylesheet">
	<link href="http://localhost/yamaza/wp-content/themes/yamaza/assets/css/cubeportfolio.min.css" rel="stylesheet">
	<link href="http://localhost/yamaza/wp-content/themes/yamaza/assets/css/LineIcons.min.css" rel="stylesheet">
	<link href="http://localhost/yamaza/wp-content/themes/yamaza/assets/css/slick.css" rel="stylesheet">
	<link href="http://localhost/yamaza/wp-content/themes/yamaza/assets/css/slick-theme.css" rel="stylesheet">
	<link href="http://localhost/yamaza/wp-content/themes/yamaza/assets/css/wow.css" rel="stylesheet">
	<link href="http://localhost/yamaza/wp-content/themes/yamaza/assets/css/blog.css" rel="stylesheet">
	<link href="http://localhost/yamaza/wp-content/themes/yamaza/assets/css/style.css" rel="stylesheet"> -->
</head>
