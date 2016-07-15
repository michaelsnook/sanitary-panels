<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}

unset($file, $filepath);

// post_to_anchor_or_hash (function)
// ---------------------------------
// added by @michaelsnook to take a post, and either print its link
// or print a disabled link to "#".
// * $classnames: add classnames e.g. 'next-post comic navlink'
// * $rel: add rel attribute with e.g. 'prev'

function post_to_anchor_or_hash($p, $classnames = '', $rel = '', $text= '') {
  if (is_array($p)) $p = $p[0];
  $payload_to_echo = '<a';
  if ($classnames) $payload_to_echo .= ' class="' . $classnames . '"';
  if ($p && get_the_ID() != $p->ID) {
    $payload_to_echo .= ' href="' . get_permalink($p) . '"';
    if ($rel) $payload_to_echo .= ' rel="' . $rel . '"';
    $payload_to_echo .= '>';
  } else {
    $payload_to_echo .= ' href="#" disabled>';
  }
  if ($text) $payload_to_echo .= $text;
  $payload_to_echo .= '</a>';
  echo $payload_to_echo;
}

// this section checks to see if the current page is the front page
// if so, performs a 302 redirect to the most recent comic post

add_action( 'template_redirect', 'last_comic_redirect' );

function last_comic_redirect(){
  if (is_front_page()) {
    $posts = get_posts('posts_per_page=1&category_name=comics&suppress_filters=false');
    $post = $posts[0];
    wp_safe_redirect(get_permalink($post)); exit;
  }
}
