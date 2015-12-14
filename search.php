<?php 
/* Template Name: Search Page
 * The search page template
 *
 * @package FramePress
 * @since FramePress 1.0
 */
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-md-8">
            <?php framepress_breadcrumb(); ?>
            
            <?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>"><h3><?php search_title_highlight(); ?></h3></a>
                <?php search_excerpt_highlight(); ?>
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            <?php framepress_numeric_posts_nav(); ?>
        </div>
    </div>
</div>

﻿<?php get_footer();