<header>
  <div class="container">
    <div class="row">
      <div class="col-xs-2">
        <a class="brand" title="<?php bloginfo('name'); ?>" href="<?= esc_url(home_url('/')); ?>"></a>
      </div>
      <div class="col-xs-8">
        <h1 class="title"></h1>
        <nav class="nav-primary">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
        </nav>
      </div>
    </div>
  </div>
</header>
