<div class="col-sm-12 text-center">
<nav class="sprites">

  <a class="sprite-first"
    href="<?php echo get_bloginfo('wpurl'); ?>/first/">
  first</a>
  <a class="sprite-prev"
    href="<?php
    $p = get_previous_post( true ); if ($p) echo get_permalink($p); else echo "#"; ?>">
  previous</a>
  <a class="sprite-random"
    href="<?php echo get_bloginfo('wpurl'); ?>/random/">
  random</a>
  <a class="sprite-next"
    href="<?php
    $p = get_next_post( true ); if ($p) echo get_permalink($p); else echo "#"; ?>">
  next</a>
  <a class="sprite-last"
    href="<?php echo get_bloginfo('wpurl'); ?>/last/">
  last</a>

</nav>
</div>
