<div class="container wrap">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <a class="brand" title="<?php bloginfo('name'); ?>" href="<?= esc_url(home_url('/')); ?>"></a>
      <h1 class="title">Sanitary Panels</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-6 col-xs-push-3">
      <nav class="top-nav-text">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'top-nav-text']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</div>
