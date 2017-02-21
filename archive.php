<?php
/**
 * Template Name: Archive Page
 * The Archive page main template.
 *
 * @package FramePress
 * @since FramePress 1.0
 */
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-md-8">
      <?php framepress_breadcrumb(); ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <span class="date"><?php the_date(); ?></span>
          <h1><?php the_title(); ?></h1>
          <?php the_post_thumbnail(); ?>
          <?php the_excerpt(); ?>

          <?php comments_template(); ?> 
        <?php endwhile; ?>
      <?php endif; ?>

      <div class="archive">
        <div class="row">
          <div class="col-md-12">
            <?php get_search_form(); ?>
          </div>
          <div class="col-md-6">
            <h2>Archives by Month:</h2>
            <ul>
              <?php wp_get_archives('type=monthly'); ?>
            </ul>
          </div>
          <div class="col-md-6">
            <h2>Archives by Subject:</h2>
            <ul>
              <?php wp_list_categories(); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

﻿<?php
get_footer();
