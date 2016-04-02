<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <div class="col-sm-12 text-center">
        <nav class="sprites">
          <a class="sprite-first">first</a>
          <a class="sprite-prev">previous</a>
          <a class="sprite-random" href="/random/">random</a>
          <a class="sprite-next">next</a>
          <a class="sprite-last">last</a>
        </nav>
      </div>
      <?php the_content(); ?>
      <div class="col-sm-12 text-center">
        <nav class="sprites">
          <a class="sprite-first">first</a>
          <a class="sprite-prev">previous</a>
          <a class="sprite-random" href="/random/">random</a>
          <a class="sprite-next">next</a>
          <a class="sprite-last">last</a>
        </nav>
      </div>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sanitary-panels'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
