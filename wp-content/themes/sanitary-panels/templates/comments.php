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

<section>
  <div class="row">
    <div class="col-sm-12">
      <div class="fb-comments" data-href="http://sanitarypanels.com" data-width="600"></div>
    </div>
  </div>
</section>
