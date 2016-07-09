<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class("comic"); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content text-center">

      <?php get_template_part('templates/comic-nav'); ?>

      <div id="the_content">
        <?php the_content(); ?>
      </div>

      <?php get_template_part('templates/comic-nav'); ?>

    </div><!-- .entry-content -->

    <!--footer>
      <?php //wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sanitary-panels'), 'after' => '</p></nav>']); ?>
    </footer-->

    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
