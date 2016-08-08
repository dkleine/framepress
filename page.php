<?php
/**
 * The main page template.
 *
 * @package FramePress
 * @since FramePress 1.0
 */
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-sm-8">
      <?php framepress_breadcrumb(); ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>

          <?php comments_template(); ?> 
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

﻿<?php
get_footer();