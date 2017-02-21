<?php
/**
 * The comment view template.
 *
 * @package FramePress
 * @since FramePress 1.2
 */
?>

<section id="comments">
  <?php comment_form(); ?>

  <ol class="commentlist">
    <?php wp_list_comments(); ?>
  </ol>
</section>