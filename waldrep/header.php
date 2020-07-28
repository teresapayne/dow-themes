<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Quicksand:wght@700&display=swap" rel="stylesheet"> 
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#navbarNavDropdown">
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

<div class="background">
	<?php if ( is_front_page() ) : ?>
	<div id="home">
	<div class="common">
	<?php endif; ?>
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
			<div class="nav-wrap scroll-clear">

				<nav class="navbar navbar-expand-md ml-md-4">

				<?php if ( 'container' == $container ) : ?>
					<div class="container">
				<?php endif; ?>
						<!-- Your site title as branding in the menu -->
						<?php if ( ! has_custom_logo() ) { ?>

							<?php if ( is_front_page() && is_home() ) : ?>

								<h1 class="navbar-brand mb-0">
									<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
										<?php bloginfo( 'name' ); ?>
									</a>
								</h1>

							<?php else : ?>

							<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo text-decoration-none text-hide">
								<img src="/wp-content/themes/understrap-child-waldrep/img/logo-waldrep.svg" class="img-fluid"/>	
							<?php bloginfo( 'name' ); ?>
							</a>
							<p class="d-md-none d-sm-block name">Kevin Waldrep, MD</p>
							<?php endif; ?>


						<?php } else {
							the_custom_logo();
						} ?><!-- end custom logo -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- Custom Menu -->
					<?php if ( is_front_page() ) : ?>
					<div id="navbarNavDropdown" class="collapse navbar-collapse ml-md-4 home">
						<ul id="home-menu" class="navbar-nav nav">
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19 nav-item">
								<a title="Home" href="#home" class="nav-link">Home</a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20 nav-item">
								<a title="About" href="#about" class="nav-link">About</a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21 nav-item">
								<a title="Services" href="#services" class="nav-link">Services</a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22 nav-item">
								<a title="Resources" href="#resources" class="nav-link">Resources</a></li>
						</ul>
						<ul class="navbar-nav nav">
							<!-- <li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23 nav-item">
								<a title="Patient Portal" href="#" class="nav-link">Patient Portal</a>
							</li> -->
							<li class="menu-item menu-item-type-custom menu-item-object-custom contact-btn nav-item">
								<a title="Contact" href="/contact" class="nav-link">Contact</a>
							</li>
						</ul>
					</div>	
					<?php else : ?>
					<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'collapse navbar-collapse ml-md-4',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav nav',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
					<?php endif; ?>

					<?php if ( 'container' == $container ) : ?>
					</div><!-- .container -->
				<?php endif; ?>
				

			</nav><!-- .site-navigation -->
		</div>
	</div><!-- #wrapper-navbar end -->
