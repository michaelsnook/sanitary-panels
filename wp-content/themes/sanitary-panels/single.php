<?php
if ( in_category( 'comics' )) {
  get_template_part('templates/comic', get_post_type());
}
else {
  get_template_part('templates/content-single', get_post_type());
}
?>
