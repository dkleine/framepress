<?php /* Template Name: Search Page */ ?>
﻿<?php get_header(); ?>

<!-- everything after the body tag goes here -->
<div class="container">
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-md-8">
        <?php framepress_breadcrumb(); ?>
        
        <?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- display post content -->
            <a href="<?php the_permalink(); ?>"><h3><?php search_title_highlight(); ?></h3></a>
            <?php search_excerpt_highlight(); ?>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <!-- display pagination -->
        <?php framepress_numeric_posts_nav(); ?>
    </div>
</div>

﻿<?php get_footer(); ?>