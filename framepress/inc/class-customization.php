<?php

// adding framework options to edit styles in the backend

function framepress_customize_register($wp_customize) {

    $wp_customize->add_section('framepress_logo', array(
        'title' => __('Logo', 'framepress'),
        'priority' => 35,
        'capability' => 'edit_theme_options',
            )
    );
    $wp_customize->add_setting('logo-upload');

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'logo-upload', array(
        'label' => 'Upload Logo',
        'section' => 'framepress_logo',
        'settings' => 'logo-upload'
            )
            )
    );
    
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
}

add_action('customize_register', 'framepress_customize_register');
?>