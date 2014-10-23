 <!DOCTYPE html>
<html lang="en-us">
    <head>
        <!-- including standard wordpress meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- including standard stylesheet files -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">

        <!-- including wordpress data -->
        <title><?php bloginfo("name") ?> - <?php if (is_home()) { echo 'Home'; } else { the_title(); } ?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
        
        <!-- link stylesheet for child templates -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
    </head>

    <body>
        
    <?php get_template_part( 'partials/content', 'nav' ); ?>