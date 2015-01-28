<?php
/**
 * The template for displaying the footer.
 *
 * @package FramePress
 * @since FramePress 1.0
 */
?>
<footer id="site-footer" class="framepress-footer" role="contentinfo">
    <div id="site-info">
        <?php _e('Copyright', 'framepress'); ?> &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. 
        <?php _e('WordPress theme by', 'framepress'); ?> <a href="https://solutions.io" title="solutions.io">solutions.io</a>.
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>