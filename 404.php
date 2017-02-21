<?php
/**
 * The main single post template.
 *
 * @package FramePress
 * @since FramePress 1.4
 */
get_header();
?>

<section id="page-404">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php get_sidebar(); ?>
      </div>
      <div class="col-md-8">
        <?php framepress_breadcrumb(); ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

﻿<?php get_footer();