<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Charmonman:700" rel="stylesheet">
		<!-- <link href="https://fonts.googleapis.com/css?family=Alegreya:9\600|Archivo+Black|Noto+Sans+SC" rel="stylesheet"> -->
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

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="main-header">
				<img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/img/square_one_logo_only.png" alt="Square One Career Coaching" class="">
				<h1 class="post-title align-center">Square One</h1>
				<h2 class="align-center">Career Coaching</h2>
			  <div class="topnav" id="topNav">

			    <div class="container">
						<nav class="desktopNav" role="navigation">
							<div class="logo-title">
								<!-- <a class="logo" href="<?php echo home_url(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/square_one_logo_only.png" alt="Square One Career Coaching" class="">
								</a> -->
							</div>

							<?php html5blank_nav(); ?>
						</nav>
						<div class="mobileNav" id="mobileNav">
							<div class="logo-title">
								<a class="logo" href="<?php echo home_url(); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/square_one_logo_only.png" alt="Square One Career Coaching" class=""> -->
								</a>
							</div>

							<div class="hamburger-menu" onclick="toggleNav(this)">
			          <div class="bar1"></div>
			          <div class="bar2"></div>
			          <div class="bar3"></div>
			        </div>
						</div>
						<nav class="toggleNav" id="toggleNav">
							<?php html5blank_nav(); ?>
						</nav>
					</div>
				</div>

			</header>
			<!-- /header -->
