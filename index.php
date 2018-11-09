<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container blog mt-100 mb-150">
				<h1 class="lekton fs-60 subtitle-after ls-4 fw-700">Les actualités</h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
