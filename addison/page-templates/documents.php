<?php
/**
 * Template Name: Documents
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

<div class="page-banner" style="background-image: url('<?php the_field('page_banner_image')?>')">
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

	<div class="documents">
		<div class="container pt-2 pl-0 pr-0">
			<div class="row ml-0 mr-0 pl-3">
				<h2><?php the_field('documents_title'); ?></h2>
			</div>

			<div class="container">
				<div class="row">
					
						<!-- <div class="card-deck">
						<div class="card-columns"> -->
								<?php if( have_rows('documents_item') ): ?>
								<?php while( have_rows('documents_item') ): the_row(); 
									// vars
									$documentsitemimage = get_sub_field('documents_item_image');
									$documentsitemlink = get_sub_field('documents_item_link');
									$documentsitemtitle= get_sub_field('documents_item_title');
									$documentsitemcopy = get_sub_field('documents_item_copy');
									
									?>
									<div class="col-md-4 pb-5">
											<div class="card mx-auto"> 
												<div class="inner">
													<?php if($documentsitemimage): ?>
														<img class="card-img" src="<?php echo $documentsitemimage?>" alt="Card image">
													<?php endif; ?>
														<div class="card-body">	
															
															<h3 class="card-title"><?php echo $documentsitemtitle?></h3>
															<p class="card-text"><?php echo $documentsitemcopy?></p>
															<a href="<?php echo $documentsitemlink?>" class="button-read-more" download="" target="_blank">Download</a>	
														</div>	
												</div>
											</div>
										</div>
								<?php endwhile; ?>
								<?php endif; ?>
				</div>
			</div>
			
		</div>
	</div>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
