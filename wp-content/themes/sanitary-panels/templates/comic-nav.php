<div class="col-sm-12 text-center">
<nav class="sprites">
  <a class="sprite-first">first</a>
  <?php previous_post_link( '%link', 'previous', $in_same_term = true, $taxonomy = 'category' ); ?>

  <a class="sprite-random" href="/random/">random</a>
  <?php next_post_link( '%link', 'next', $in_same_term = true, $taxonomy = 'category' ); ?>

  <a class="sprite-last">last</a>
</nav>
</div>
