<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ресторан-пивоварня «Пивная №1»</title>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/bower_components/uikit/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/bower_components/uikit/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/bower_components/uikit/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
</head>
<body>
<div class="site-container">
	<nav class="b-topbar uk-navbar" data-uk-sticky>
		<a href="#mobile-nav" class="uk-navbar-toggle" data-uk-offcanvas=""></a>
		<span href="#" class="uk-navbar-brand uk-navbar-center">Пивная №1</span>
	</nav>
	<div class="uk-container uk-container-center">
		<div class="wrapper">
			<!-- Header block -->
			<header class="b-header">
				<div class="uk-grid uk-grid-large" data-uk-grid-margin>
					<div class="b-header__logo uk-width-small-1-1 uk-width-medium-1-3">
						<?php $logoInfo = get_field('logo', 4);?>
						<a href="/"><img src="<?=$logoInfo['url'];?>" alt="" class="b-header__logo_iteself"></a>
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-2-3">
						<section class="b-header__info uk-clearfix">
							<p class="b-header__info_text -text-large uk-float-left uk-clearfix">
								<i class="fri fri-phone"></i>
								<a href="tel:<?=get_field('header_phone', 4);?>"><span><?=get_field('header_phone', 4);?></span></a>
							</p>
							<a href="http://instagram.com/pivnayanomer1" class="uk-float-right instagram-wrap" target="_blank"><i class="fri fri-instagram"></i></a>
						</section>
						<nav class="b-nav uk-navbar">
							<?php
								wp_nav_menu(array(
									'container' => false,
									'menu_class' => 'uk-navbar-nav'
								));
							?>
						</nav>
						<section class="b-header__info">
							<p class="b-header__info_text uk-clearfix">
								<i class="fri fri-plask"></i>
								<span class="header__info-span"><?=get_field('header_info', 4);?></span>
							</p>
						</section>
					</div>
				</div>
			</header>

			<div id="mobile-nav" class="uk-offcanvas">
				<div class="uk-offcanvas-bar">
					<?php
						wp_nav_menu(array(
							'container' => false,
							'menu_class' => 'uk-nav'
						));
					?>
				</div>
			</div>
			<!-- Header block end -->
			<div class="uk-grid uk-grid-large" data-uk-grid-margin>