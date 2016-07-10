<div class="col-sm-12 text-center">
<nav class="sprites">

  <a class="sprite-first" href="<?php echo get_bloginfo('wpurl'); ?>/first/">first</a>
  <?php
    $p = get_previous_post(true);
    post_to_anchor_or_hash( $p, "sprite-prev", "prev" );
  ?>

  <a class="sprite-random" href="<?php echo get_bloginfo('wpurl'); ?>/random/" rel="random">random</a>
  <?php
    $p = get_next_post(true);
    post_to_anchor_or_hash( $p, "sprite-next", "next" );
  ?>

  <a class="sprite-last" href="<?php echo get_bloginfo('wpurl'); ?>/last/">last</a>

</nav>
</div>
