<?php
/**
 * Template Name: Custom Template
 */
?>
<!-- template-custom.php -->
<section class="wrap container" role="document">
  <div class="content row">
    <div class="main col-sm-12">

    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/page', 'header'); ?>
      <?php get_template_part('templates/content', 'page'); ?>
    <?php endwhile; ?>

    </div>
  </div>
</section>
<!-- /template-custom.php -->
