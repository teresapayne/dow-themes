<?php
/**
 * Template Name: Contact Template
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

the_field('static_head');

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="slim-banner clearfix" style="<?php the_field('slim_banner_background'); ?>">
	<div class="container">
		<div class="row align-items-center" style="background-image: url('<?php the_field('slim_banner_image'); ?>');">
			<h2 class="text-white"><?php the_field('slim_banner_title'); ?></h2>
		</div>
	</div>
</div>
<div class="slim-banner-content">
	<div class="container">
		<div class="row">
			<?php the_field('slim_banner_content'); ?>
		</div>
	</div>
</div>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>