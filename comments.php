<?php
/**
 * Template Name: Archive Page
 * The Archive page main template.
 *
 * @package FramePress
 * @since FramePress 1.2
 */
?>

<?php comment_form(); ?>

<ol class="commentlist">
    <?php wp_list_comments(); ?>
</ol>