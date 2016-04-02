<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?><!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <section class="wrap container" role="document">
      <div class="content row">
        <main class="main col-sm-12">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
      </div><!-- /.content -->
    </section><!-- /.wrap -->
    <section class="footer container">
      <div class="row">
        <?php
          /*if (Setup\display_sidebar()) :*/
        ?>
        <footer>
          <div class="col-sm-12 sidebar">
          <?php include Wrapper\sidebar_path(); ?>
          </div><!-- /.sidebar -->
        <?php
          /* endif; */
        ?>
        <?php
          do_action('get_footer');
          get_template_part('templates/footer');
          wp_footer();
        ?>
        </footer>
      </div>
    </section>
  </body>
</html>
