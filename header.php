<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gro-consulting
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/gro-consulting/assets/fonts/Montserrat-Black.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/gro-consulting/assets/fonts/Montserrat-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/gro-consulting/assets/fonts/Montserrat-Medium.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/gro-consulting/assets/fonts/Montserrat-Regular.woff2" as="font" type="font/woff2" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<!-- Header Start -->
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="site-branding">
							<?php the_custom_logo(); ?>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="header-menu">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
									<span></span>
									<span></span>
									<span></span>
								</button>
								<div class="header-des-menu">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>
								</div>
							</nav>
							<div class="header-btn">
								<a href="#" class="sec-btn" title="Let's Gró Together">Let's Gró Together</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="service-mega-menu">
			<div class="mega-menu-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="mega-menu-box">
								<img width="127" height="30" src="<?php echo home_url();?>/wp-content/uploads/2022/09/gro-hr.png" alt="Gro HR">
								<h6><a href="#" title="HR & Recruitment">HR & Recruitment</a></h6>
								<p>Human Resources and Recruitment services that help your people reach their full potential.</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="mega-menu-box">
								<img width="146" height="30" src="<?php echo home_url();?>/wp-content/uploads/2022/09/gro-social.png" alt="Gro Social">
								<h6><a href="#" title="Marketing & Web Design">Marketing & Web Design</a></h6>
								<p>Strategic marketing and website design that show your potential customers why they need your business and services. From digital marketing to physical marketing, we've got you covered. </p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="mega-menu-box">
								<img width="127" height="30" src="<?php echo home_url();?>/wp-content/uploads/2022/09/gro-accounting.png" alt="Gro Accounting">
								<h6><a href="#" title="Accounting & Fractional CFO">Accounting & Fractional CFO</a></h6>
								<p>CFO, Bookkeeping, Tax and Payroll services that not only give you the clarity to make key business financial decisions, but help you strategically plan for your growth.</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="mega-menu-box">
								<img width="127" height="30" src="<?php echo home_url();?>/wp-content/uploads/2022/09/gro-it.png" alt="Gro IT">
								<h6><a href="#" title="IT/Fractional CIO">IT/Fractional CIO</a></h6>
								<p>Managed Services and Network setups that keep your business connected and running at optimal efficiency.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</header>
		<!-- Header End -->

		