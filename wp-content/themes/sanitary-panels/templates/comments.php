<?php
if (post_password_required()) {
  return;
}
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=733715436696621";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56361e1385b0b461" async="async"></script>

<section>
  <div class="row">
    <div class="col-sm-12">
      <div class="addthis_toolbox addthis_default_style">
        <a class="addthis_button_preferred_1"></a>
        <a class="addthis_button_preferred_2"></a>
        <a class="addthis_button_preferred_3"></a>
        <a class="addthis_button_compact"></a>
        <a class="addthis_button_tweet"></a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="fb-comments" data-href="http://sanitarypanels.com" data-width="600"></div>
    </div>
  </div>
</section>
