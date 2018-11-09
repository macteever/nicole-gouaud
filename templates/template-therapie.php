<?php /* Template Name: Thérapie */ get_header(); ?>
  <main role="main" class="main-content">
    <div class="container-fluid">
      <div class="container">
        <div class="row mt-100">
          <?php
  				if( have_rows('haut_page') ):
  				    while ( have_rows('haut_page') ) : the_row();
  						?>
  						<?php // $image = get_sub_field('bkg'); ?>
  						<div class="col-12 therapy-bkg" style="background: url(<?php the_sub_field('bkg'); ?>);">
  							<!-- <img class="d-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> -->
                <div class="h-100 ml-auto col-xl-6 col-lg-6 col-12 d-flex flex-column therapy-bkg-child align-items-center justify-content-center">
                  <h1 class="lekton uppercase title-after fs-60 ls-4 fw-700 mb-15"><?php the_sub_field('titre'); ?></h1>
                  <p class="fs-20 lekton ls-3 text-center">
                    <?php the_sub_field('extrait'); ?>
                  </p>
                </div>
  						</div>
  						<?php
  				    endwhile;
  				else :
  				endif;
  				?>
        </div>
        <div class="row mt-100">
          <?php
  				if( have_rows('presentation') ):
  				    while ( have_rows('presentation') ) : the_row();
  						?>
              <h2 class="lekton  fs-28 ls-2 fw-700 subtitle-after"><?php the_sub_field('titre'); ?></h2>
              <div class="therapy-present-content fs-16 lh-24 mt-30">
                <?php the_sub_field('texte'); ?>
              </div>
  						<?php
  				    endwhile;
  				else :
  				endif;
  				?>
        </div>
        <div class="therapy-approche p-relative align-items-center row mt-100">
          <?php
  				if( have_rows('approche') ):
  				    while ( have_rows('approche') ) : the_row();
  						?>
              <?php  $image = get_sub_field('img'); ?>
  						<div class="approche-img col-xl-10 col-lg-10 col-12">
  							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              </div>
              <div class="approche-content p-absolute col-xl-5 col-lg-5">
                <h3 class="lekton subtitle-after fs-28 ls-4 fw-700"><?php the_sub_field('titre'); ?></h3>
                <div class="fs-15 lh-24 mt-30">
                  <?php the_sub_field('texte'); ?>
                </div>
              </div>
  						<?php
  				    endwhile;
  				else :
  				endif;
  				?>
        </div>
        <div class="therapy-entretiens row mt-100 mb-100 align-items-center justify-content-around">
          <div class="col-xl-4 col-lg-4 col-12 d-flex flex-column">
            <?php
            if( have_rows('les_entretiens') ):
              while ( have_rows('les_entretiens') ) : the_row();
              ?>
              <?php $image = get_sub_field('icon'); ?>
              <div class="mb-30">
                <img class="icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <h3 class="uppercase subtitle-before lekton fs-20 ls-2 fw-700 mt-15"><?php the_sub_field('titre'); ?></h3>
                <div class="fs-16 lh-24 mt-15">
                  <?php the_sub_field('texte'); ?>
                </div>
              </div>
              <?php
            endwhile;
            else :
            endif;
            ?>
          </div>
          <div class="col-xl-6 col-lg-6 col-12 entretien-img">
            <?php $image = get_field('img_etapes'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php get_footer(); ?>
