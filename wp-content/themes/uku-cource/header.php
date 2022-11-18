<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper">


		<header class="header">

			<div class="header__container ">
				<div class="header__inner">
					<div class="header__logo">
						<a href="#">
							<?php the_custom_logo(); ?>
						</a>
					</div>
					<div class="header__toggler">
						<span></span>
					</div>
					<div class="mobile-menu">
						<ul class="header__nav anchor">
							<?php wp_nav_menu(array('container' => '', 'items_wrap' => '%3$s', 'theme_location' => 'primary')); ?>
						</ul>
						<div class="header__buttons">
							<a href="#" class="header__login">
								Увійти
							</a>
							<a href="#" class="header__register btn">
								Реєстрація
							</a>
						</div>
					</div>
				</div>
			</div>
		</header>