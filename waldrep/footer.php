<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>





<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<?php //the_field('map_embed'); ?>
	<div class="wrapper" id="wrapper-footer-full">
		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row">

				
				<div class="container">
					<div class="row">
						<div class="col-md-3 logo-block text-center">
							<img src="/wp-content/themes/understrap-child-waldrep/img/logo-waldrep.svg" width="120" class="img-fluid"/>
						</div>
						<div class="col-md-9">
							<div class="row">
							
								<div class="col-sm text-left">
								
									<?php //if ( is_front_page() ) : ?>
									<ul class="pl-0">
										<li><a href="/">Home</a></li>
										<li><a href="/#about">About</a></li>
										<li><a href="/#services">Services</a></li>
										<li><a href="/#resources">Resources</a></li>
										<li><a href="/contact">Contact</a></li>
									</ul>
									<?php //else : ?>
									<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
									<?php //endif; ?>
								
								</div>

								<div class="col-sm offset-md-3 text-left">
									<p>7777 Forest Lane<br>
									Suite B-111<br>
									Dallas, TX 75230<br>
									p. <a href="tel:972-566-5556" class="gray">(972) 566.5556</a><br>
									f. (972) 566.7486
									</p>
								</div>

								<div class="col-sm-12">
									<p class="copy">
										Copyright &copy;2020 – Kevin Waldrep, MD.  All Rights Reserved. Website by <a href="https://5and2.com/?ref=kevinwaldrepmd.com" target="_blank">5and2 Group</a>
									</p>
								</div>
						</div>
					</div>
				</div><!-- #page we need this extra closing tag here -->

				<?php wp_footer(); ?>
			</div>

		</div>
		
	</div><!-- #wrapper-footer-full -->

<?php endif; ?>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>

