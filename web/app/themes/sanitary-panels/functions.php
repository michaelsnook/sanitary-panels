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

function last_comic_redirect() {
  if (is_front_page()) {
    $post = get_posts('posts_per_page=1&category_name=comics&suppresss_filters=false')[0];
    wp_safe_redirect(get_permalink($post)); exit;
  }
}

// listens for the "/random/" URL and redirects to a random post
// TODO: check whether add_action 'init' is the right way to hook in

add_action( 'init', function() {
  if ($_SERVER['REQUEST_URI'] == '/random/') {
		header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
    header('Pragma: no-cache'); // HTTP 1.0.
    header('Expires: Thu, 01 Jan 1970 00:00:00 GMT'); // Proxies.
    header('X-Robots-Tag: noindex'); // Web Spiders
		$post = get_posts(array(
			'posts_per_page' => 1,
			'category_name' => 'comics',
			'post_type' => 'post',
			'post_status' => 'publish',
			'suppress_filters' => true,
			'orderby' => 'rand'
		))[0];
		wp_safe_redirect(get_permalink($post)); exit;
  }
});


// remove wp emoji settings and related code to clean up <head>
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// remove unused js and pull some from cdnjs
add_filter( 'wp_default_scripts', 'remove_unused_core_js' );
function remove_unused_core_js( &$scripts ) {
  if(!is_admin()) {
    $scripts->remove( 'comment-reply');
    $scripts->remove( 'jquery');
    $scripts->remove( 'jquery-migrate');
  }
}


// set up Advanced Custom Fields for this site
define( 'ACF_LITE' , true );
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_share-content',
		'title' => 'Share Content',
		'fields' => array (
			array (
				'key' => 'field_57a63349e4df2',
				'label' => 'Facebook Share Text',
				'name' => 'facebook_text',
				'type' => 'textarea',
				'default_value' => 'New comic: Sanitary Panels',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 4,
				'formatting' => 'none',
			),
			array (
				'key' => 'field_57a632c1e4df1',
				'label' => 'Twitter Share Text',
				'name' => 'twitter_text',
				'type' => 'textarea',
				'default_value' => 'New comic: Sanitary Panels',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 4,
				'formatting' => 'none',
			),
			array (
				'key' => 'field_57a63103e4df0',
				'label' => 'WhatsApp Share Message',
				'name' => 'whatsapp_message',
				'type' => 'textarea',
				'default_value' => 'New comic: Sanitary Panels',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 4,
				'formatting' => 'none',
			),
			array (
				'key' => 'field_57a633b1e4df3',
				'label' => 'Email Share Subject',
				'name' => 'email_subject',
				'type' => 'text',
				'default_value' => 'New comic: Sanitary Panels',
				'placeholder' => '',
				'prepend' => 'Sub:',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57a63453e4df4',
				'label' => 'Email Share Body',
				'name' => 'email_body',
				'type' => 'textarea',
				'default_value' => 'Check out the new comic from Sanitary Panels:',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 10,
				'formatting' => 'html',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '2',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
