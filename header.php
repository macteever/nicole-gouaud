<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) ?> <?php // bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Lekton:400,700" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
		<script>
    // conditionizr.com
    // configure environment tests
    conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
    });
    </script>
	</head>
	<body <?php body_class(); ?>>
		<div class="page-loader">
			<!-- <img class="m-l-auto m-r-auto" src="<?=get_template_directory_uri().'/assets/img/sportiforme-blue.png'?>" alt="coach sportif sportiforme à domicile Poitiers"> -->
		</div>
		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			<header class="header anim-300 clear" role="banner">
				<div class="menu-container w-100 pl-50 pr-50 anim-300">
            <?php require 'includes/header-left.php'; ?>
        </div>
			</header>
			<!-- /header -->
			<nav class="nav-mobile" role="navigation">
				<div class="h-100 d-flex flex-column align-items-center justify-content-center">
					<?php wp_nav_menu( array( 'theme_location' => 'burger-menu' ) ); ?>
				</div>
			</nav>
