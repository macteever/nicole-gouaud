<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="container mt-100">
    <!-- article -->
  	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  			<div class="row p-relative single-row-margin align-items-center anim-300">
  					<div class="col-xl-9 col-lg-9 col-12 index-img anim-300">
  						<?php if ( has_post_thumbnail()) : ?>
  							<?php the_post_thumbnail(); ?>
  						<?php endif; ?>
  					</div>
  					<div class="col-xl-5 col-lg-5 col-md-6 col-12 index-content anim-300 p-absolute text-white">
  						<span class="date uppercase text-center text-white fs-18 mb-15"><?php the_time('F j, Y'); ?></span>
							<div class="row pl-15 flex-column mt-15">
								<h3 class="lekton fs-16 text-white">Partagez :</h3>
								<div class="d-flex mt-10">
									<a class="single-fb-share" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><i class="fa fa-facebook-f fs-16 text-white" aria-hidden="true"></i></a>
									<a class="single-google-share ml-15" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus fs-16 text-white" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="row pl-15 flex-column mt-30">
								<h3 class="lekton fs-16 text-white">Catégories :</h3>
								<div class="d-flex text-white single-category">
									<?php the_category(); ?>
								</div>
							</div>
  					</div>
  			</div>
        <div class=" row mt-30 ">
					<h1 class="lekton fs-24 fw-700 mt-15 pl-15 pr-15">
						<?php the_title(); ?>
					</h1>
					<div class="single-content col-12 mx-auto">
						<?php the_content(); ?>
					</div>
        </div>
				<div class="row justify-content-center posts-pagination mt-80	mb-30 lekton">
					 <?php posts_nav_link(' &#183; ', 'Prec', 'Suiv'); ?>
						<span class="nav-previous previus-post"><?php previous_post_link(); ?></span>
						<span class="ml-15 mr-15">|</span>
						<span class="nav-next next-post"><?php next_post_link(); ?></span>
				</div>

  	</article>
  	<!-- /article -->
	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
