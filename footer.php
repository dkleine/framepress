<?php
/**
 * The template for displaying the footer.
 *
 * @package FramePress
 * @since FramePress 1.0
 */
?>
<footer id="footer" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-sm-12" id="site-info">
        <?php _e('Copyright', 'framepress'); ?> &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. 
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>