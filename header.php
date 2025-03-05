<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキス">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo bloginfo('name'); ?></title>
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.ico">
	<?php wp_head(); ?>
</head>

<body>
	<header class="header wrap">
		<h1 class="header__logo">
			<a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Furniture Design"></a>
		</h1>
		<div class="hamburger-menu">
			<span></span>
			<span></span>
		</div>
		<nav id="hamburger-navigation">
			<ul class="sections">
				<li class="hamburger-menu-section"><a href="<?php echo esc_url(home_url('/category/products/')); ?>">PRODUCTS</a></li>
				<li class="hamburger-menu-section"><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a></li>
				<li class="hamburger-menu-section"><a href="<?php echo esc_url(home_url('/company/')); ?>">COMPANY</a></li>
				<li class="hamburger-menu-section"><a href="mailto:info@example.com">CONTACT</a></li>
			</ul>
		</nav>
	</header>