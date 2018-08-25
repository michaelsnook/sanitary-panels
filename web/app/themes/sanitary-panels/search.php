<!-- search.php -->
<section class="wrap container" role="document">
  <div class="content row">
    <div class="main col-sm-12">

    <?php get_template_part('templates/page', 'header'); ?>

    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
      </div>
      <?php get_search_form(); ?>
    <?php endif; ?>

    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/content', 'search'); ?>
    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

    </div>
  </div>
</section>
<!-- /search.php -->
