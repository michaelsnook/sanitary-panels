<?php

// added by @michaelsnook to take a post, and either print its link
// or print a disabled link to "#".
// add classnames with strings like 'next-post comic navlink'
// add rel with values like 'prev'

function post_to_anchor_or_hash($p, $classnames = '', $rel = '') {
  $payload_to_echo = '';
  if ($p) {
    $payload_to_echo .= '<a class="' . $classnames . '"';
    $payload_to_echo .= ' href="' . get_permalink($p) . '"';
    if ($rel) $payload_to_echo .= ' rel="' . $rel . '"';
    $payload_to_echo .= '>previous</a>';
  } else {
    $payload_to_echo .= '<a class="'. $classnames .'" href="#" disabled></a>';
  }
  echo $payload_to_echo;
}
?>

<div class="col-sm-12 text-center">
<nav class="sprites">

  <a class="sprite-first" href="<?php echo get_bloginfo('wpurl'); ?>/first/">first</a>
  <?php
    $p = get_previous_post(true);
    post_to_anchor_or_hash( $p, "sprite-prev", "prev" );
  ?>
  <a class="sprite-random" href="<?php echo get_bloginfo('wpurl'); ?>/random/">random</a>
  <?php
    $p = get_next_post(true);
    post_to_anchor_or_hash( $p, "sprite-next", "next" );
  ?>
  <a class="sprite-last" href="<?php echo get_bloginfo('wpurl'); ?>/last/">last</a>

</nav>
</div>
