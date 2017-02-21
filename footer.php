<?php
/**
 * The template for displaying the footer.
 *
 * @package FramePress
 * @since FramePress 1.0
 */
?>
<section id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php _e('Copyright', 'framepress'); ?> &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. 
      </div>
    </div>
  </div>
</section>

<?php wp_footer(); ?>
</body>
</html>