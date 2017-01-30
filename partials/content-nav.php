<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="row">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
          <?php if (get_theme_mod('logo-upload')) : ?>
            <img src="<?php echo esc_url(get_theme_mod('logo-upload')); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
          <?php else : ?>
            <h1><?php bloginfo('name'); ?></h1>
          <?php endif; ?>
        </a>
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
