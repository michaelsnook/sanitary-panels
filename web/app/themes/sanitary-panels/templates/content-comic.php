
<!-- content-comic.php -->
<?php while (have_posts()) : the_post(); ?>

<section id="comic" class="wrap container" role="document">
  <div class="content row">
    <div class="main col-sm-12">
      <?php get_template_part('templates/partials/comic-nav'); ?>

      <article <?php post_class("comic"); ?>>
        <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php get_template_part('templates/partials/entry-meta'); ?>
        </header>

        <div class="entry-content">
          <div id="the_content">
            <?php the_content(); ?>
          </div>
        </div><!-- .entry-content -->
      </article>
      <?php get_template_part('templates/partials/comic-nav'); ?>
    </div><!-- /.main -->
  </div><!-- /.content -->
</section><!-- /.wrap -->

<?php endwhile; ?>

<div id="social-ul-desktop-wrap">
  <span>share this comic</span>
  <ul id="social-ul-desktop">
    <li class="bottom-5 no-1">
      <a href="https://www.facebook.com/dialog/share?app_id=170136413423568&display=popup&href=<?php
        echo urlencode( get_permalink() );
        ?>&redirect_uri=<?php
        echo urlencode( get_permalink() );
      ?>" target="_blank" class="nav-facebook">facebook</a>
    </li>
    <li>
      <a href="https://twitter.com/intent/tweet?text=<?php
        echo urlencode(get_field('twitter_text'))
        . '&url=' . urlencode(get_permalink())
        . '&via=sanitarypanels';
      ?>" target="_blank" class="nav-twitter">twitter</a>
    </li>
    <li>
      <button data-clipboard-text="<?php echo get_permalink(); ?>" class="nav-copy">copy</button>
    </li>
  </ul>
</div>

<section id="comments" class="wrap container" role="comments">
  <?php comments_template('/templates/partials/comments.php'); ?>
</section>
<!-- /content-comic.php -->
