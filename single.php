﻿<?php get_header(); ?>

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
            <!-- display pagination -->
            <?php framepress_numeric_posts_nav(); ?>
        <?php endif; ?>
    </div>
</div>

﻿<?php get_footer(); ?>