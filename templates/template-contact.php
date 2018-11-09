<?php /* Template Name: Contact */ get_header(); ?>
	<main role="main" class="main-content">
		<div class="container-fluid">
			<div class="container">
				<div class="row mt-100" id="map"></div>
				<div class="row mt-100 mb-100 align-items-center contact-formulaire">
					<div class="col-xl-3 col-lg-3 col-12">
						<?php
	  				if( have_rows('infos_contact') ):
	  				    while ( have_rows('infos_contact') ) : the_row();
	  						?>
								<div class="d-flex align-items-center justify-content-around mb-10">
									<div class="mr-auto">
										<h4 class="fs-15 lekton fw-700"><?php the_sub_field('label'); ?></h4>
										<p class="lekton fs-16 lh-24"><?php the_sub_field('infos'); ?></p>
									</div>
								</div>
	  						<?php
	  				    endwhile;
	  				else :
	  				endif;
	  				?>
					</div>
					<div class="col-xl-9 col-lg-9 col-12">
						<?php echo do_shortcode('[contact-form-7 id="5" title="Formulaire de contact 1"]'); ?>
					</div>
				</div>
			</div>

	    <script async defer
	      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYM2FZ6PBFvla3XFMkE6xALHBw2KPY3LY&callback=initMap">
	    </script>
		</div>
	</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
