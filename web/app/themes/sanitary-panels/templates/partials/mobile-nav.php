<nav id="bottom-nav" class="initial"><ul id="bottom-ul">
  <li class="bottom-5 no-1">
    <?php
      $p = get_previous_post(true);
      post_to_anchor_or_hash( $p, "nav-prev", "prev", "prev" );
    ?>
  </li>
  <li class="bottom-5 no-2"><a href="#" class="nav-share btf">share</a></li>
  <li class="bottom-5 no-3"><a href="#" class="nav-menu">menu</a></li>
  <li class="bottom-5 no-4">
    <a href="<?= esc_url(home_url('/')); ?>random/" class="nav-random">random</a>
  </li>
  <li class="bottom-5 no-5">
    <?php
      $p = get_next_post(true);
      post_to_anchor_or_hash( $p, "nav-next", "next", "next" );
    ?>
  </li>
</ul></nav>

<nav id="comic-nav" class="initial"><ul id="comic-ul">
  <li class="bottom-5 no-1">
    <?php
      $p = get_boundary_post( true, '', true, 'category' );
      post_to_anchor_or_hash( $p, "nav-first", "first", "first" );
    ?>
  </li>
  <li class="bottom-5 no-2">
    <?php
      $p = get_previous_post(true);
      post_to_anchor_or_hash( $p, "nav-prev", "prev", "prev" );
    ?>
  </li>
  <li class="bottom-5 no-3">
    <a href="<?= esc_url(home_url('/')); ?>random/" class="nav-random">random</a>
  </li>
  <li class="bottom-5 no-4">
    <?php
      $p = get_next_post(true);
      post_to_anchor_or_hash( $p, "nav-next", "next", "next" );
    ?>
  </li>
  <li class="bottom-5 no-5">
    <?php
      $p = get_boundary_post( true, '', false, 'category' );
      post_to_anchor_or_hash( $p, "nav-last", "last", "last" );
    ?>
  </li>
</ul></nav>

<nav id="social-nav" class="initial btf">
  <ul id="social-ul">
    <li class="bottom-5 no-1">
      <a href="https://www.facebook.com/dialog/share?app_id=170136413423568&display=popup&href=<?php
       echo urlencode( get_permalink() );
      ?>&redirect_uri=<?php
     echo urlencode( get_permalink() );
    ?>" target="_blank" class="nav-facebook">facebook</a>
    </li>
    <li class="bottom-5 no-2">
      <a href="https://twitter.com/intent/tweet?text=<?php
        echo urlencode(get_field('twitter_text'))
        . '&url=' . urlencode(get_permalink())
        . '&via=sanitarypanels';
      ?>" target="_blank" class="nav-twitter">twitter</a>
    </li>
    <li class="bottom-5 no-3">
      <a href="whatsapp://send?text=<?php
        echo urlencode(get_field('whatsapp_message') .' '. get_permalink() );
      ?>"  target="_blank" class="nav-whatsapp">whatsapp</a>
    </li>
    <li class="bottom-5 no-4">
      <a href="mailto:<?php
        echo '?subject=' . urlencode(get_field('email_subject'));
        echo '&body=' . urlencode(get_field('email_body') . "\n\n". get_permalink() );
      ?>" class="nav-email">email</a>
    </li>
    <li class="bottom-5 no-5">
      <button data-clipboard-text="<?php echo get_permalink(); ?>" class="nav-copy">copy</button>
    </li>
  </ul>
</nav>
<nav id="other-nav" class="initial">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <a class="brand" title="<?php bloginfo('name'); ?>" href="<?= esc_url(home_url('/')); ?>"></a>
        <h1 class="title"></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <ul id="other-ul">
          <li class="vertical">
            <a title="sprite-about" href="<?= esc_url(home_url('/')); ?>about/">
              About
            </a>
          </li>
          <li class="vertical">
            <a class="nav-archive" href="<?= esc_url(home_url('/')); ?>category/comics/">
              Archive
            </a>
          </li>
          <li class="vertical">
            <a class="nav-store" href="https://cupick.com/sanitarypanels/">
              Store
            </a>
          </li>
          <li class="vertical">
            <a class="nav-home" href="<?= esc_url(home_url('/')); ?>">
              Home
            </a>
          </li>
          <li class="vertical" id="follow-ul-mobile-wrap">
            <span>follow</span>
            <ul id="follow-ul-mobile">
              <li>
                <a href="https://www.facebook.com/SanitaryPanels" target="_blank" class="nav-facebook">facebook</a>
              </li>
              <li>
                <a href="https://twitter.com/SanitaryPanels" target="_blank" class="nav-twitter">twitter</a>
              </li>
            </ul>
          </li>
          <!--li class="vertical">
            <a class="nav-contact" href="<?= esc_url(home_url('/')); ?>contact/">
              Contact
            </a>
          </li-->
        </ul>
      </div>
    </div>
  </div>
</nav>

<script>
// self-executing navbar configuration scripts
(function($) {
  $(document).ready(function () {

    // main nav click
    $('.nav-menu').on('click', function() {
      $('#comic-nav, #bottom-nav, #social-nav, #other-nav')
        .toggleClass('initial')
        .toggleClass('expand')
        .removeClass('out');
      event.preventDefault();
    });
    // share menu click
    $('.nav-share').on('click', function() {
      $('#social-nav').toggleClass('out');
      event.preventDefault();
    });
    /*/ execute facebook share JS
    $('a.nav-facebook').on('click', function() {
      FB.ui({
        method: 'share',
        href: '<?php echo get_permalink(); ?>',
      }, function(response){});
      event.preventDefault();
    });*/

    setAtfPixels = function() {
      window.sp.atfPixels = $("#comments, #footer").offset().top - $(window).height() + parseInt($('#bottom-nav').css('bottom')) + 64;
    }
    // set scroll-into-view at the top of the comments section
    window.sp = window.sp || {};
    setAtfPixels();
    $(window).resize(setAtfPixels);
    $(window).scroll(function() {
      if($(window).scrollTop() > window.sp.atfPixels) { // scrolled past the fold?
        $('.btf').addClass('btf-on'); //reached the desired point -- show div
      } else
      if($(window).scrollTop() < 1) {
        $('.btf').removeClass('btf-on'); //reached the top -- hide div
      }
    });


    // var clipboard = new Clipboard('a.nav-copy');
    /*
    // cargo-culted from http://stackoverflow.com/questions/37381640/tooltips-highlight-animation-with-clipboard-js-click/37395225
    // but not in use right now because bootstrap JS is not included
    $('a.nav-copy').tooltip({
      trigger: 'click',
      placement: 'top'
    });
    function setTooltip(btn, message) {
      $(btn).tooltip('hide')
      .attr('data-original-title', message)
      .tooltip('show');
    }
    function hideTooltip(btn) {
      setTimeout(function() {
        $(btn).tooltip('hide');
      }, 1000);
    }
    clipboard.on('success', function(e) {
      setTooltip(e.trigger, 'Copied!');
      hideTooltip(e.trigger);
    });
    clipboard.on('error', function(e) {
      setTooltip(e.trigger, 'Failed!');
      hideTooltip(e.trigger);
    });

    $('a.nav-copy').on('click', function() {

      event.preventDefault();
    }); */

  });
})(jQuery);
</script>
