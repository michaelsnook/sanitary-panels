<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?><!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('templates/partials/head'); ?>

  <body <?php body_class("btf"); ?>>
    <?php get_template_part('templates/partials/google-syndication'); ?>
    <div id="background-washout"></div>

    <header id="header">
      <?php
        do_action('get_header');
        get_template_part('templates/partials/header');
      ?>
    </header><!-- /#header -->

    <!--[if IE]>
      <div class="old-browser-alert">
        You are using an outdated browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
      </div>
    <![endif]-->

    <main id="main">
      <?php include Wrapper\template_path(); ?>
    </main><!-- /#main -->

    <div class="wrap container" style="padding: 3vh 3vw">
      <div class="row">
        <div class="col-md-12">
          <a href="/about" id="footer-about-toggle">About the author</a>
          <div id="footer-about">
            <br>
            <p><img style="float: left; margin-right: 1rem;" class="wp-image-351 size-medium alignleft" src="https://s3-ap-southeast-1.amazonaws.com/sanitarypanels/wp-content/uploads/2016/04/05204501/13716105_10154179393771357_2126971520614001388_n-150x150.jpg" alt="Image_RachitaTaneja" width="150" height="150">Sanitary Panels is a webcomic started by Rachita Taneja in 2014.</p>
            <p>The first comic was created in response to students being arrested after posting their views on politics on Facebook, and since then, the webcomic has reached over 5 million people and has been covered by over a dozen media houses.</p>
            <p>Rachita works as a human rights campaigner and likes spending her free time working on her comic, and pointing at animals on the the streets.</p>
          </div>
        </div>
      </div>
    </div>

    <footer id="footer">
      <div class="container wrap">
        <div class="row">
          <?php
            /*if (Setup\display_sidebar()) :*/
            if (0) :
          ?>
          <div class="col-sm-12 sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </div><!-- /.sidebar -->
          <?php
            endif;
          ?>
        </div>
        <div class="row">
          <?php
            do_action('get_footer');
            get_template_part('templates/partials/footer');
          ?>
        </div>
      </div>
    </footer><!-- /#footer -->

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js?ver=1.12.4"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js?ver=1.4.1"></script>
    <script type="text/javascript" defer src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js?ver=1.5.12"></script>

    <?php
      get_template_part('templates/partials/mobile-nav');
      get_template_part('templates/partials/google-analytics');
      wp_footer();
    ?>

  </body>
</html>
