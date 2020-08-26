<?php
/**
 * Template Name: News
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

<div class="page-banner news" style="background-image: url('<?php the_field('page_banner_image')?>')">
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

<div id="news">
		<div class="container pt-2 pl-0 pr-0">
			<div class="row ml-0 mr-0 pl-3">
				<h2><?php the_field('news_title'); ?></h2>
			</div>

			<?php if( have_rows('news_item') ): ?>
			
				<?php 
			$first_item = true; 
			while( have_rows('news_item') ): the_row(); 
				// vars
				$newsitemimage = get_sub_field('news_item_image');
				$newsitemlink = get_sub_field('news_item_link');
				$newsitemtitle= get_sub_field('news_item_title');
				$newsitemcopy = get_sub_field('news_item_copy');
				$newsitemcategory = get_sub_field('news_item_category');
				?>
				<div class="container">
					<div class="row">
					
					<?php if($first_item){ ?>

						<div class="col-md-12 mb-5">
								
							<div class="card mx-auto" > 
								<div class="inner">
									<?php if($newsitemimage): ?>
										<img class="card-img" src="<?php echo $newsitemimage?>" alt="Card image">
									<?php endif; ?>
										<div class="card-body">	
											<div class="news-category">
												<span><a><?php echo $newsitemcategory?></a></span>
											</div>
											<h3 class="card-title"><?php echo $newsitemtitle?></h3>
											<p class="card-text"><?php echo $newsitemcopy?></p>
											<?php if($newsitemlink): ?>
											<a href="<?php echo $newsitemlink?>" class="button-read-more">Read More</a>	
											<?php endif; ?>
										</div>	
								</div>
							</div>
								
						</div>
					</div>
				</div>
					
			<?php
				}
				$first_item = false; 
			?>
			<?php endwhile; ?>

			<div class="container pb-5">
				<div class="row">
			<?php 
			$first_item = true; 
			while( have_rows('news_item') ): the_row(); 
				// vars
				$newsitemimage = get_sub_field('news_item_image');
				$newsitemlink = get_sub_field('news_item_link');
				$newsitemtitle= get_sub_field('news_item_title');
				$newsitemcopy = get_sub_field('news_item_copy');
				$newsitemcategory = get_sub_field('news_item_category');
				?>
				
					
						<?php if($first_item){ }else{ ?>

							<div class="col-md-6 mb-2">
									
								<div class="card mx-auto" > 
									<div class="inner">
										<?php if($newsitemimage): ?>
											<img class="card-img" src="<?php echo $newsitemimage?>" alt="Card image">
										<?php endif; ?>

										<div class="card-body">	
											<div class="news-category">
												<span><a><?php echo $newsitemcategory?></a></span>
											</div>
											<h3 class="card-title"><?php echo $newsitemtitle?></h3>
											<p class="card-text"><?php echo $newsitemcopy?></p>
											<?php if($newsitemlink): ?>
											<a href="<?php echo $newsitemlink?>" class="button-read-more">Read More</a>
											<?php endif; ?>
										</div>	
									</div>
								</div>
									
							</div>
						<?php } ?>
					
			<?php 
			$first_item = false; 
			endwhile; ?>
			</div>
				</div>

			<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
