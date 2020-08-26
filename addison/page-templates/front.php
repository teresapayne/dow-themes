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

		 </div> <!--end of background image -->
		
		<?php if ( is_front_page() ) : ?>
		
		</div>
		<?php endif; ?>
		

		<div class="wrapper" id="wrapper-static-hero">
			<div class="container" id="wrapper-static-content" tabindex="-1">
				<div class="row">
					<div class="col-md-12">
					<h2 class="pb-0 ml-md-4 text-white no-border">
					Announcements
					</h2>
						<div id="announcements" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
							<?php if( have_rows('announcement') ): ?>
								<?php while( have_rows('announcement') ): the_row(); 

									// vars
									$announcementcopy = get_sub_field('announcement_copy');
									$announcementlink = get_sub_field('announcement_link');
									?>
									<div class="carousel-item">
										<div class="carousel-caption d-md-block pt-0">
											
											<p class="text-left ml-md-4 text-white mb-0"><?php echo $announcementcopy?></p>

											<?php if ( $announcementlink ): ?>
												<p class="ml-md-4 mb-0 clearfix"><a href="<?php echo $announcementlink?>" class="float-right icon-arrow-right"></a></p>	
											<?php endif; ?>	

										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>

								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<div class="wrapper" id="page-wrapper">

	
	
	<div id="things">

			<div class="container pt-5 pl-0 pr-0">
			    <div class="row ml-0 mr-0 pl-3">
			        <h2><?php the_field('things_title'); ?></h2>
			    </div>
				    <div class="row">
				    	<div class="container pb-5 ">
					        <div class="card-deck">

								<?php if( have_rows('things') ): ?>
								<?php while( have_rows('things') ): the_row(); 

									// vars
									$thingimage = get_sub_field('thing_image');
									$thinglink = get_sub_field('thing_link');
									$thingtitle= get_sub_field('thing_title');
									$thingcopy = get_sub_field('thing_copy');
									$thinganimation = get_sub_field('thing_animation');
									

									?>
									<!-- <div class="card mx-auto" <?php //echo $thinganimation?> data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="750" style="max-width: 31%;"> -->
									<div class="card mx-auto ttk-card"> 
										<div class="inner">
											<img src="<?php echo $thingimage?>" >
												<div class="card-body">
													<h5 class="card-title"><?php echo $thingtitle?></h5>
													<p class="card-text"><?php echo $thingcopy?></p>
												</div>
											<?php if ($thinglink): ?>
												<a href="<?php echo $thinglink?>"></a>
											<?php endif;?>
										</div>
									</div>
								<?php endwhile; ?>
								<?php endif; ?>


							</div>
				    	</div>
					</div>
			</div>
		
	</div>
	<div id="newsletter-signup">
		<div class="container pt-3 pb-3 pl-0 pr-0">
			<div class="row ml-0 mr-0 pl-3">
				<h2 class="mb-0"><?php the_field('newsletter_signup_title'); ?></h2>
				<small id="newsletter-help-block" class="form-text text-secondary">
					<?php the_field('newsletter_signup_help_copy'); ?>
				</small>
			</div>
			
				<?php echo do_shortcode( '[contact-form-7 id="6" title="Home Contact Form"]' ); ?>
			
		</div>
	</div>

	<div id="resources">
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
								<div class="card bg-dark text-white resource-card" <?php echo $resourceanimation?> data-aos-anchor="#resources" data-aos-anchor-placement="top-center" data-aos-duration="750" >
									
										<img class="card-img" src="<?php echo $resourceimage?>" alt="Card image">
										<div class="card-img-overlay">
											<figcaption>
												<h5 class="card-title"><?php echo $resourcetitle?></h5>
												<p class="card-text"><?php echo $resourcecopy?></p>
												
											</figcaption>
											<?php if($resourcelink): ?>
												<a href="<?php echo $resourcelink?>"></a>
											<?php endif; ?>
										</div>
										
								</div>

							<?php endwhile; ?>
							<?php endif; ?>


						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<h5>
						<a href="<?php the_field('resources_link'); ?>">
						<?php the_field('resources_link_title'); ?>
						</a>
					</h5>
				</div>
		</div>
	</div>


</div><!-- Wrapper end -->


<?php get_footer(); ?>
