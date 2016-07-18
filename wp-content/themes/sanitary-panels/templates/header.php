<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <a class="brand" title="<?php bloginfo('name'); ?>" href="<?= esc_url(home_url('/')); ?>"></a>
        <h1 class="title"></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6 col-xs-push-3">
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

<nav id="bottom-nav" class="initial">
  <ul id="bottom-ul">
    <li class="bottom-5 no-1">
      <?php
        $p = get_previous_post(true);
        post_to_anchor_or_hash( $p, "sprite-prev", "prev", "prev" );
      ?>
    </li>
    <li class="bottom-5 no-2">
      <a href="#" class="nav-share">share</a>
    </li>
    <li class="bottom-5 no-3">
      <a href="#" class="nav-menu">menu</a>
    </li>
    <li class="bottom-5 no-4">
      <a href="<?= esc_url(home_url('/')); ?>random/" class="nav-random">random</a>
    </li>
    <li class="bottom-5 no-5">
      <?php
        $p = get_next_post(true);
        post_to_anchor_or_hash( $p, "sprite-next", "next", "next" );
      ?>
    </li>
  </ul>
</nav>
<nav id="comic-nav" class="initial">
  <ul id="comic-ul">
    <li class="bottom-5 no-1">
      <?php
        $p = get_boundary_post( true, '', true, 'category' );
        post_to_anchor_or_hash( $p, "sprite-first", "first", "first" );
      ?>
    </li>
    <li class="bottom-5 no-2">
      <?php
        $p = get_previous_post(true);
        post_to_anchor_or_hash( $p, "sprite-prev", "prev", "prev" );
      ?>
    </li>
    <li class="bottom-5 no-3">
      <a href="<?= esc_url(home_url('/')); ?>random/" class="sprite-random">random</a>
    </li>
    <li class="bottom-5 no-4">
      <?php
        $p = get_next_post(true);
        post_to_anchor_or_hash( $p, "sprite-next", "next", "next" );
      ?>
    </li>
    <li class="bottom-5 no-5">
      <?php
        $p = get_boundary_post( true, '', false, 'category' );
        post_to_anchor_or_hash( $p, "sprite-last", "last", "last" );
      ?>
    </li>
  </ul>
</nav>
<nav id="social-nav" class="initial">
  <ul id="social-ul">
    <li class="bottom-5 no-1">
      <a href="#" class="nav-facebook">facebook</a>
    </li>
    <li class="bottom-5 no-2">
      <a href="#" class="nav-twitter">twitter</a>
    </li>
    <li class="bottom-5 no-3">
      <a href="#" class="nav-whatsapp">whatsapp</a>
    </li>
    <li class="bottom-5 no-4">
      <a href="#" class="nav-email">email</a>
    </li>
    <li class="bottom-5 no-5">
      <a href="#" class="nav-copy">copy</a>
    </li>
  </ul>
</nav>
<script>
jQuery(document).ready(function () {
  jQuery('.nav-menu').on('click', function() {
    jQuery('nav#comic-nav, nav#bottom-nav, nav#social-nav')
      .toggleClass('initial')
      .toggleClass('expand')
      .removeClass('out');
    event.preventDefault();
  });
  jQuery('.nav-share').on('click', function() {
    jQuery('nav#social-nav').toggleClass('out');
    event.preventDefault();
  });
});
</script>
