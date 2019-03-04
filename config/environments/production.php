<?php
/** Production */
ini_set('display_errors', 0);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);
/** Disable all file modifications including updates and update notifications */
define('DISALLOW_FILE_MODS', true);

/**
 * S3 Keys
 */
define('AS3CF_AWS_ACCESS_KEY_ID', env('AS3CF_AWS_ACCESS_KEY_ID'));
define('AS3CF_AWS_SECRET_ACCESS_KEY', env('AS3CF_AWS_SECRET_ACCESS_KEY'));

