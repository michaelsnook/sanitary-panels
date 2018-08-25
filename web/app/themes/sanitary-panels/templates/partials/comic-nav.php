<nav class="nav-body text-center">
  <ul class="nav-with-text">
    <li>
      <?php
        $p = get_boundary_post( true, '', true, 'category' );
        post_to_anchor_or_hash( $p, "nav-first-text", "first" );
      ?>
    </li>
    <li>
      <?php
        $p = get_previous_post(true);
        post_to_anchor_or_hash( $p, "nav-prev-text", "prev" );
      ?>
    </li>
    <li>
      <a class="nav-random-text" href="<?php echo get_bloginfo('wpurl'); ?>/random/" rel="random">random</a>
    </li>
    <li>
      <?php
        $p = get_next_post(true);
        post_to_anchor_or_hash( $p, "nav-next-text", "next" );
      ?>
    </li>
    <li>
      <?php
        $p = get_boundary_post( true, '', false, 'category' );
        post_to_anchor_or_hash( $p, "nav-last-text", "last" );
      ?>
    </li>
  </ul>
</nav>
