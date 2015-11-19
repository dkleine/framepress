<?php
/**
 * The sidebar containing the widget area.
 *
 * @package FramePress
 * @since FramePress 1.0
 */
if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('primary')) : ?>

    <div>				
        No widgets active
    </div>

<?php endif; ?>