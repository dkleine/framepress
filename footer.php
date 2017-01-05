<?php
/**
 * The template for displaying the footer.
 *
 * @package FramePress
 * @since FramePress 1.0
 * @last update 05.01.17
 */
?>
<section id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php _e('Copyright', 'framepress'); ?> &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. 
      </div>
    </div>
  </div>
</section>

<?php wp_footer(); ?>
</body>
</html>