<div class="col-sm-12 text-center">
<nav class="sprites">

  <?php
    $p = get_boundary_post( true, '', true, 'category' );
    post_to_anchor_or_hash( $p, "sprite-first", "first" );
  ?>

  <?php
    $p = get_previous_post(true);
    post_to_anchor_or_hash( $p, "sprite-prev", "prev" );
  ?>

  <a class="sprite-random" href="<?php echo get_bloginfo('wpurl'); ?>/random/" rel="random">random</a>
  <?php
    $p = get_next_post(true);
    post_to_anchor_or_hash( $p, "sprite-next", "next" );
  ?>

  <?php
    $p = get_boundary_post( true, '', false, 'category' );
    post_to_anchor_or_hash( $p, "sprite-last", "last" );
  ?>
</nav>
</div>
