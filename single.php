<?php 
/**
 * The main single post template.
 *
 * @package FramePress
 * @since FramePress 1.0
 */
get_header(); ?>

<!-- everything after the body tag goes here -->
<div class="container">
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-md-8">
        <?php framepress_breadcrumb(); ?>
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- display post content -->
            <?php the_content(); ?>
             <?php wp_list_comments( $args, $comments ); ?> 
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

﻿<?php get_footer(); ?>