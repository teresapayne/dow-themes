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
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" media='screen and (min-width: 1250px)' href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
	<div class="background">
		<div id="preheader" class="d-none d-md-block">
			<div class="container">
				<div class="row justify-content-between pb-1 pt-2" style="min-height: 32px;">
					<div class="col-md-4">
						<!-- <a href="#" style="margin-right: 20px;font-size: 15px;" >
						<i class="fa fa-twitter" aria-hidden="true"></i>
						</a> -->
						<a href="https://www.facebook.com/groups/addisonplace/" style="margin-right: 20px;font-size: 15px;" >
						<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
						<!-- <a href="/contacts" style="margin-right: 20px;font-size: 15px;" >
						<i class="fa fa-linkedin" aria-hidden="true"></i>
						</a>
						<a href="/contacts" style="font-size: 15px;" >
						<i class="fa fa-instagram" aria-hidden="true"></i>
						</a> -->
					</div>
					<div class="col-md-4 align-self-center">
						<p class="mb-1 text-center">4330 Southfork Dr, Addison, TX 75001</p>
					</div>
					<div class="col-md-4 d-md-block">
						<form method="get" id="searchform" action="https://addisonplace2.wpengine.com/" role="search" class="search-form">
						<label>
							<span class="screen-reader-text">Search for:</span>
							<input class="field form-control search-field" id="s" name="s" type="search" placeholder="Search" value="">
						</label>
						<span class="input-group-append">
							<input class="submit search-btn text-hide" id="searchsubmit" name="submit" type="submit" value="Search">
							</span>
						</form>
					</div>
				</div>
			</div>
		</div>
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md pt-0 pb-0 pl-sm-0 pr-sm-0">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo text-decoration-none text-hide">
								<img src="/wp-content/themes/understrap-child-addison/img/logo-addison.png" class="img-fluid"/>	
							<?php bloginfo( 'name' ); ?>
							</a>
							<!-- <p class="d-md-none d-sm-block name">Homes of Addison Place</p> -->

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse p-3',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
