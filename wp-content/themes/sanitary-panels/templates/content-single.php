<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php if ( in_category( 'comics' )) { ?>
      <div class="col-sm-12 text-center">
        <nav class="sprites">
          <a class="sprite-first">first</a>
          <?php previous_post_link( '%link', 'previous', $in_same_term = true, $taxonomy = 'category' ); ?>

          <a class="sprite-random" href="/random/">random</a>
          <?php next_post_link( '%link', 'next', $in_same_term = true, $taxonomy = 'category' ); ?>

          <a class="sprite-last">last</a>
        </nav>
      </div>
      <?php } ?>
      <?php the_content(); ?>

      <?php if ( in_category( 'comics' )) { ?>
      <div class="col-sm-12 text-center">
        <nav class="sprites">
          <a class="sprite-first">first</a>
          <?php previous_post_link( '%link', 'previous', $in_same_term = true, $taxonomy = 'category' ); ?>

          <a class="sprite-random" href="/random/">random</a>
          <?php next_post_link( '%link', 'next', $in_same_term = true, $taxonomy = 'category' ); ?>

          <a class="sprite-last">last</a>
        </nav>
      </div>
      <?php } ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sanitary-panels'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
