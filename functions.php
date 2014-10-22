<?php

// install and run the basic FramePress features
add_action('after_setup_theme', 'framepress_setup');

function framepress_setup() {
    add_theme_support('automatic-feed-links'); // rss
    register_nav_menu('primary', __('Primary Menu', 'framepress')); // main navmenu
    register_nav_menu('secondary', __('Secondary Menu', 'framepress')); // main navmenu
    add_theme_support('post-thumbnails'); // featured images

    add_image_size(thumb_400x350, 400, 350, true); // demo image size
}

add_action('customize_register', 'framepress_register');

// add basic stylesheets and scripts
add_action('wp_enqueue_scripts', 'framepress_styles');

function framepress_styles() {
    wp_register_style('framepress-main-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('framepress-main-style');
    
    wp_register_style('framepress-default-style', get_template_directory_uri() . '/inc/css/wordpress-default.css');
    wp_enqueue_style('framepress-default-style');
    
    wp_register_style('framepress-bootstrap-style', get_template_directory_uri() . '/inc/css/bootstrap.min.css');
    wp_enqueue_style('framepress-bootstrap-style');
    
    wp_register_style('framepress-fontawesome-style', get_template_directory_uri() . '/inc/css/font-awesome.min.css');
    wp_enqueue_style('framepress-fontawesome-style');

    wp_register_style('framepress-class-style', get_template_directory_uri() . '/inc/css/class.css');
    wp_enqueue_style('framepress-class-style');
    
    wp_deregister_script('jquery');
    wp_register_script('framepress-jquery', get_template_directory_uri() . '/inc/js/jquery-2.1.1.min.js');
    wp_enqueue_script('framepress-jquery');

    wp_deregister_script('bootstrap');
    wp_register_script('framepress-bootstrap', get_template_directory_uri() . '/inc/js/bootstrap.min.js');
    wp_enqueue_script('framepress-bootstrap');
}

// adding first widget
function framepress_widgets_init() {

    register_sidebar(array(
        'name' => __('Primary widget'),
        'id' => 'primary',
        'description' => __('Primary widget'),
        'before_widget' => '<div class="framepress-widget">',
        'after_widget' => '</div>',
    ));
}

add_action('widgets_init', 'framepress_widgets_init');

// adding the plugin checker with some basic recommended plugins
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

function alx_plugins() {
    $plugins = array(
        array(
            'name' => 'Contact Form 7',
            'slug' => 'contact-form-7',
        ),
        array(
            'name' => 'Image Widget',
            'slug' => 'image-widget',
        ),
        
        array(
            'name'               => 'Github Updater',
            'slug'               => 'github-updater',
            'source'             => 'https://github.com/afragen/github-updater/archive/develop.zip',
            'required'           => true,
            'external_url'       => 'https://github.com/afragen/github-updater',
        ),
    );
    tgmpa($plugins);
}

add_action('tgmpa_register', 'alx_plugins');

// including other often used options to the site
require_once get_template_directory() . '/inc/class-pagination.php';
require_once get_template_directory() . '/inc/class-customization.php';
require_once get_template_directory() . '/inc/class-breadcrumb.php';
require_once get_template_directory() . '/inc/class-security.php';
require_once get_template_directory() . '/inc/class-bootstrap-nav-walker.php';
// admin widgets
require_once get_template_directory() . '/inc/class-dashboard-news.php';
?>