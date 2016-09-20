<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Title goes here...</title>

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
								<span><?=get_field('header_phone', 4);?></span>
							</p>
							<a href="#" class="uk-float-right"><i class="fri fri-instagram"></i></a>
						</section>
						<?php $navItems = wp_get_nav_menu_items('main'); ?>
						<nav class="b-nav uk-navbar">
							<ul class="uk-navbar-nav">
								<?php foreach($navItems as $key => $val) : ?>
									<li><a href="<?=$val->url; ?>"><?=$val->title; ?></a></li>
								<?php endforeach; ?>
							</ul>
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
					<ul class="uk-nav">
						<?php foreach($navItems as $key => $val) : ?>
							<li><a href="<?=$val->url; ?>"><?=$val->title; ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<!-- Header block end -->
			<div class="uk-grid uk-grid-large" data-uk-grid-margin>