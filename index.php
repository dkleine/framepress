<?php
/**
 * The main template file.
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
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endwhile;
      else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
      <?php framepress_numeric_posts_nav(); ?>
    </div>
  </div>
</div>

﻿<?php
get_footer();
