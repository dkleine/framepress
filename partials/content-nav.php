<nav class="navbar navbar-toggleable-md" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
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
        'menu_class' => 'navbar-nav mr-auto float-right',
        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
        'walker' => new wp_bootstrap_navwalker())
    );
    ?>
  </div>
</nav>
