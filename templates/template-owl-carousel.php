<?php /* Template Name: Carousel */ get_header(); ?>
   <main role="main" class="main-content">
      <div class="container-fluid owl-carousel pl-0 pr-0 anim-500">
         <?php
         if( have_rows('carousel-1') ):
            while ( have_rows('carousel-1') ) : the_row();
            ?>
            <div class="container-fluid item-child anim-500" style="background: url(<?php the_sub_field('background'); ?>); background-size: cover;">
               <h2 class="text-white fs-44 pt-250 pb-250"><?php the_sub_field('title'); ?></h2>
            </div>
            <?php
         endwhile;
         else :
         endif;
         ?>
      </div>
   </main>
<?php get_footer(); ?>
