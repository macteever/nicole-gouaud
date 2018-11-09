<?php /* Template Name: Home */ get_header(); ?>
<main role="main" class="main-content">
	<div class="container-fluid">
		<div class="container">
			<div class="row home-slider mt-100">
				<?php
				if( have_rows('home_slider') ):
				    while ( have_rows('home_slider') ) : the_row();
						?>
						<?php $image = get_sub_field('photo'); ?>
						<div class="p-relative">
							<img class="h-100 w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<div class="home-slide-content p-absolute text-white">
								<h1 class="lekton fs-72 uppercase fw-700 mb-30 ls-4">Nicole <span>Gouaud</span></h1>
								<h3 class="lekton fs-36 uppercase"><?php the_sub_field('sous_titre'); ?></h3>
							</div>
						</div>
						<?php
				    endwhile;
				else :
				endif;
				?>
			</div>
			<div class="row home-presentation mt-100 justify-content-around">
				<?php
				if( have_rows('presentation') ):
				    while ( have_rows('presentation') ) : the_row();
						?>
						<div class="col-xl-5 col-lg-5 col-12">
							<h2 class="lekton uppercase fs-28 ls-4 fw-700 mb-30 subtitle-after"><?php the_sub_field('titre'); ?></h2>
							<div class="fs-16 lh-24">
								<?php the_sub_field('texte'); ?>
							</div>
						</div>
						<div class="col-xl-5 col-lg-5 col-12 home-presentation-slider">
							<?php
							if( have_rows('slide_image') ):
							    while ( have_rows('slide_image') ) : the_row();
									?>
									<?php $image = get_sub_field('photo'); ?>
									<img class="h-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php
							    endwhile;
							else :
							endif;
							?>
						</div>
						<?php
				    endwhile;
				else :
				endif;
				?>
			</div>
			<div class="row mt-100 justify-content-center">
				<h2 class="lekton fs-28 fw-700 ls-4 uppercase mb-50 text-center">les solutions proposées</h2>
			</div>
			<div class="row home-therapy mt-50 align-items-end justify-content-around">
				<?php
				if( have_rows('therapie') ):
				    while ( have_rows('therapie') ) : the_row();
						?>
						<?php $image = get_sub_field('icon'); ?>
						<div class="col-xl-4 col-lg-4 col-12">
							<img class="d-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<h3 class="subtitle-before lekton fs-20 ls-2 fw-700 mt-30"><?php the_sub_field('nom'); ?></h3>
							<div class="">
								<?php the_sub_field('texte'); ?>
							</div>
							<div class="home-therapy-link mt-30">
									<a class="lekton fs-16 home-btn" href="<?php the_sub_field('lien'); ?>">En savoir +</a>
							</div>

						</div>
						<?php
				    endwhile;
				else :
				endif;
				?>
			</div>
			<div class="row mb-80 mt-100 home-posts justify-content-center">
				<h2 class="lekton uppercase fw-700 ls-4 fs-28 mt-50 mb-50">Nos dernières actualités</h2>
				<div class="col-12 home-posts-child">
					<?php $args = array(
						'posts_per_page'   => 2,
						'offset'           => 0,
						'category'         => '',
						'category_name'    => '',
						'orderby'          => 'date',
						'order'            => 'DESC',
						'include'          => '', 	'exclude'          => '',
						'meta_key'         => '',
						'meta_value'       => '',
						'post_type'        => 'post', 	'post_mime_type'   => '',
						'post_parent'      => '',
						'author'	   	   => '',
						'post_status'      => 'publish',
						'suppress_filters' => true
					);

					$myposts = get_posts( $args );

					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<!-- 	<div>  -->
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<div class="col-xl-6 col-lg-6 col-md-6 col-12 float-left home-post p-relative">
							<img class="w-100 h-100" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="Nicole Gouaud psychothérapie sophrologie">
							<div class="home-post-overlay text-white">
								<a class="d-block w-100 h-100" href="<?php the_permalink(); ?>">
									<div class="home-overlay-details">
										<h3 class="lekton ls-2 fw-700 uppercase fs-20"><?php the_title(); ?></h3>
										<h4 class="lekton ls-2 fs-15"><?php the_category(); ?></h4>
									</div>
								</a>
							</div>
						</div>
					</a>
					<!-- 	</div> -->
					<?php
					endforeach;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
