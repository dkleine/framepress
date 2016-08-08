<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="col-sm-12">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php if (get_theme_mod('logo-upload')) : ?>
          <div class="site-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'><img src="<?php echo esc_url(get_theme_mod('logo-upload')); ?>" alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'></a>
          </div>
        <?php else : ?>
          <div class="site-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'><img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/framepress-default.png" alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'></a>
          </div>
        <?php endif; ?>
      </div>

      <?php
      wp_nav_menu(array(
          'menu' => 'primary',
          'theme_location' => 'primary',
          'depth' => 2,
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'site-nav',
          'menu_class' => 'nav navbar-nav navbar-right',
          'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
          'walker' => new wp_bootstrap_navwalker())
      );
      ?>
    </div>
  </div>
</nav>
