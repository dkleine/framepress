<?php
// this file creates some easy security fixes for your blog

// remove unnecessary header information
function remove_header_info() {
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'start_post_rel_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head',10,0); // for WordPress >= 3.0
}
add_action('init', 'remove_header_info');

// remove wp version
function framepress_remove_wp_version() { return ''; }
add_filter('the_generator', 'framepress_remove_wp_version');

// remove wp version meta tag and from rss feed
add_filter('the_generator', '__return_false');

// remove wp version param from any enqueued scripts
function framepress_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'framepress_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'framepress_remove_wp_ver_css_js', 9999 );

?>
