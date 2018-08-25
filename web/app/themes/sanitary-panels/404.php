<section class="wrap container" role="document">
  <div class="content row">
    <div class="main col-sm-12">

      <?php get_template_part('templates/page', 'header'); ?>


      <div class="alert alert-warning">
        <?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
      </div>

      <?php get_search_form(); ?>

    </div>
  </div>
</section>
