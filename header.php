<?php
/**
 * The theme header.
 *
 * Displays all of the <head> section and the primary menu
 *
 * @package FramePress
 * @since FramePress 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/framepress-favicon.png">

        <title><?php bloginfo("name") ?> - <?php if (is_home()) { echo 'Home'; } else { the_title(); } ?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
        
    </head>

    <body>
    
    <section id="navigation">
      <?php get_template_part( 'partials/content', 'nav' ); ?>
    </section>
