<?php get_header(); ?>

<!-- everything after the body tag goes here -->
<div class="framepress-intro">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 framepress-title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>


﻿<?php get_footer(); ?>