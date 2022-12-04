
<?php wp_head();?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />


		<title>Mogo</title>
	</head>
	<body>
		<div id="root"></div>

		<!-- ! header -->
		<header class="header" id="header__scroll">
			<div class="container">
				<div class="header__inner">
					<div class="header__logo" data-scroll="#intro">MoGo</div>

					<nav class="nav" id="nav">
						<a class="nav__link" href="#" data-scroll="#about">About</a>
						<a class="nav__link" href="#" data-scroll="#services">Service</a>
						<a class="nav__link" href="#" data-scroll="#blog">Blog</a>
						<a class="nav__link" href="#" data-scroll="#works">Work</a>
						<a class="nav__link" href="#" data-scroll="#footer">Contact</a>
						<a class="nav__link" href="#">
							<i class="fas fa-shopping-cart"></i>
						</a>
						<a class="nav__link" href="#">
							<i class="fas fa-search"></i>
						</a>
					</nav>

					<button class="nav-toggle" id="nav_toggle" type="button">
						<span class="nav-toggle__item">Menu</span>
					</button>
				</div>
			</div>
		</header>