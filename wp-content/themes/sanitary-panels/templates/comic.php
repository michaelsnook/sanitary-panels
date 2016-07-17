<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class("comic"); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>

    <div class="entry-content text-center">
      <div class="col-sm-12 text-center">
        <?php get_template_part('templates/comic-nav'); ?>
      </div>
      <div id="the_content">
        <?php the_content(); ?>
      </div>
      <div class="col-sm-12 text-center">
        <?php get_template_part('templates/comic-nav'); ?>
      </div>
    </div><!-- .entry-content -->

    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
