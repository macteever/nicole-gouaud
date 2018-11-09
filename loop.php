<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<div class="row p-relative align-items-center anim-300">
					<div class="col-xl-9 col-lg-9 col-12 index-img anim-300">
						<?php if ( has_post_thumbnail()) : ?>
							<?php the_post_thumbnail(); ?>
						<?php endif; ?>
					</div>
					<div class="col-xl-5 col-lg-5 col-12 index-content anim-300 p-absolute text-white">
						<span class="date uppercase text-center text-white fs-18"><?php the_time('F j, Y'); ?></span>
						<h2 class="lekton fs-24 fw-700 mt-15 text-white">
							<a class="text-white" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<p class="fs-16 lh-24 ls-2">
							<?php html5wp_excerpt('html5wp_index'); ?>
						</p>
					</div>
			</div>
		</a>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
