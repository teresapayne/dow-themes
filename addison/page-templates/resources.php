<?php
/**
 * Template Name: Resources
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */


// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="page-banner resources" style="background-image: url('<?php the_field('page_banner_image')?>')">
	<div class="overlay text-center">
		<div class="row align-items-center">
			<div class="col">
				<h3 class="page-banner-title"><?php the_field('page_banner_title')?></h3>
				<p class="page-banner-copy"><?php the_field('page_banner_caption')?></p>
			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="page-wrapper">

<div class="resources">
		<div class="container pt-2 pl-0 pr-0">
			<div class="row ml-0 mr-0 pl-3">
				<h2><?php the_field('resources_title'); ?></h2>
			</div>
			
				<div class="row">
					<div class="container pb-5 ">
						<div class="card-deck">
						<div class="card-columns">
						<?php if( have_rows('resources') ): ?>
						<?php while( have_rows('resources') ): the_row(); 
							// vars
							$resourceimage = get_sub_field('resource_image');
							$resourcelink = get_sub_field('resource_link');
							$resourcetitle= get_sub_field('resource_title');
							$resourcecopy = get_sub_field('resource_copy');
							$resourceanimation = get_sub_field('resource_animation');
							
							?>
							
								<div class="card bg-dark text-white" >
									
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
			
		</div>
	</div>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
