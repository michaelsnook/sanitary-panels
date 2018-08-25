
<!-- content-single.php -->
<section class="wrap container" role="document">
  <div class="content row">
    <div class="main col-sm-12">
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
          <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/partials/entry-meta'); ?>
          </header>
          <div class="entry-content">
            <div id="the_content">
              <?php the_content(); ?>
            </div>
          </div><!-- .entry-content -->

          <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sanitary-panels'), 'after' => '</p></nav>']); ?>
          </footer>

          <?php comments_template('/templates/partials/comments.php'); ?>
        </article>
      <?php endwhile; ?>
    </div><!-- /.main -->
  </div><!-- /.content -->
</section><!-- /.wrap -->
<!-- /content-single.php -->
