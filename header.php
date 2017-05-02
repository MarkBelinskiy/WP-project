<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>Поликарбонат</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/pace.js"></script>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" type="text/css">
	<!--<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/flexslider.css" type="text/css">-->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.selectBox.css" type="text/css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/green.css" type="text/css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" type="text/css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/pace-minimal.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700,500' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico">
	<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
	<![endif]-->
</head>
<body<?php if(is_single() || is_page(239) || is_page(254)){ ?> class="blog-single" <?php } ?>>
	<!-- TOP -->
	<div class="top-bar">
		<p class="text">
			<a><i class="fa fa-map-marker"></i> Украина, Харьков, Дом. Оффис</a>
			<a href="tel:+380671059364"><i class="fa fa-phone"></i> +38(000)000-0000</a>
		</p>
		<p class="social">
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-vimeo"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-skype"></i></a>
		</p>
	</div>
	<!-- TOP -->

	<!-- HEADER -->
	<header class="clearfix">

		<div class="logo">
			<a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="HATA"><b>Поликарбонат</b></a>
		</div>

		<nav class="navbar collapse" id="mobile-menu">
			<?php 
			wp_nav_menu(array(
				'theme_location' => 'topmenu',
				'container'       => '',
				'menu_class'      => 'nav navbar-nav'
			));
			?>
		</nav>

		<!-- <div class="user">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/avatar1.png" alt="User Photo">
				<span class="drop-arow"></span>
			</a>
			<ul class="dropdown-menu user-drop">
				<li><a href="#"><i class="fa fa-user"></i>Мой профиль</a></li>
				<li><a href="#"><i class="fa fa-list"></i>Админпанель</a></li>
				<li><a href="#"><i class="fa fa-sign-out"></i>Выход</a></li>
			</ul>
		</div> -->

		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

	</header>
	<!-- HEADER -->