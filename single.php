<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="container mt-100">
    <!-- article -->
  	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  			<div class="row p-relative align-items-center anim-300">
  					<div class="col-xl-9 col-lg-9 col-12 index-img anim-300">
  						<?php if ( has_post_thumbnail()) : ?>
  							<?php the_post_thumbnail(); ?>
  						<?php endif; ?>
  					</div>
  					<div class="col-xl-5 col-lg-5 col-12 index-content anim-300 p-absolute text-white">
  						<span class="date uppercase text-center text-white fs-18"><?php the_time('F j, Y'); ?></span>
  						<h2 class="lekton fs-24 fw-700 mt-15 text-white">
                <?php the_title(); ?>
  						</h2>
  						<p class="fs-16 lh-24 ls-2">
  						</p>
  					</div>
  			</div>
        <div class="mt-30">
          <?php the_content(); ?>
        </div>
  	</article>
  	<!-- /article -->
	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
