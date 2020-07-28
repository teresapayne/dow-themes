<?php
/**
 * Template Name: Front
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>



		<?php if ( is_active_sidebar( 'hero' ) || is_active_sidebar( 'statichero' ) || is_active_sidebar( 'herocanvas' ) ) : ?>

			<div class="wrapper" id="wrapper-hero">
				<div class="container-fluid pl-0 pr-0">
					<?php get_template_part( 'sidebar-templates/sidebar', 'hero' ); ?>
					<?php get_template_part( 'sidebar-templates/sidebar', 'herocanvas' ); ?>
					
				</div>
			</div>

		<?php endif; ?>

		</div> <!-- end of background image -->
		
		<?php if ( is_front_page() ) : ?>
		</div>
		</div>
		<?php endif; ?>
		
<?php get_template_part( 'sidebar-templates/sidebar', 'statichero' ); ?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div
				class="<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area"
				id="primary">

				<div id="about">
					<div class="common">
						<main class="site-main" id="main" role="main">

							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'loop-templates/content', 'page' ); ?>

								<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								?>

							<?php endwhile; // end of the loop. ?>
						</div>
					</div>
				</main><!-- #main -->

			</div><!-- #primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

		</div><!-- .row -->

	</div><!-- Container end -->
	
	<div id="services">
		<div class="common">
			<div class="slim-banner" style="<?php the_field('slim_banner_background'); ?>">
				<div class="container">
					<div class="row align-items-center" style="background-image: url('<?php the_field('slim_banner_image'); ?>');">
						<h2 class="text-white"><?php the_field('slim_banner_title'); ?></h2>
					</div>
				</div>
			</div>
			<div class="pt-5 pb-5 slim-banner-content">
				<div class="container">
					<div class="row">
						<?php the_field('slim_banner_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="resources">
		<div class="common">
			<div class="container pt-5 pl-0 pr-0">
			    <div class="row ml-0 mr-0 pl-3">
			        <h2><?php the_field('resources_title'); ?></h2>
			    </div>
				    <div class="row">
				    	<div class="container pb-5 ">
					        <div class="card-deck">

								<?php if( have_rows('resources') ): ?>
								<?php while( have_rows('resources') ): the_row(); 

									// vars
									$resourceimage = get_sub_field('resource_image');
									$resourcelink = get_sub_field('resource_link');
									$resourcetitle= get_sub_field('resource_title');
									$resourcecopy = get_sub_field('resource_copy');
									$resourceanimation = get_sub_field('resource_animation');
									

									?>
									<div class="card mx-auto" <?php echo $resourceanimation?> data-aos="fade-up" data-aos-anchor="#resources" data-aos-anchor-placement="top-center" data-aos-duration="750" style="max-width: 31%;">
										<a href="<?php echo $resourcelink?>">
										<img src="<?php echo $resourceimage?>" >
											<div class="card-body">
						                    	<h5 class="card-title"><?php echo $resourcetitle?></h5>
												<p class="card-text"><?php echo $resourcecopy?></p>
											</div>
										</a>
									</div>
								<?php endwhile; ?>
								<?php endif; ?>


							</div>
				    	</div>
					</div>
			</div>
		</div>
	</div>


</div><!-- Wrapper end -->


<?php get_footer(); ?>
