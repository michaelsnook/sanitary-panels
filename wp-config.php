<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/** These settings are automatically used on your OpenShift Gear*/
if (getenv('OPENSHIFT_APP_NAME') != "") {
	/** The name of the database for WordPress */
	define('DB_NAME', getenv('OPENSHIFT_APP_NAME'));

	/** MySQL database username */
	define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));

	/** MySQL database password */
	define('DB_PASSWORD', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));

	/** MySQL hostname */
	define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST') . ':' . getenv('OPENSHIFT_MYSQL_DB_PORT'));

/** These settings can be configured for your local development environment
	and will not affect your OpenShift configuration */
} else {
	define('DB_NAME', 'wp_os_sp');

	/** MySQL database username */
	define('DB_USER', 'wp_os_sp');

	/** MySQL database password */
	define('DB_PASSWORD', 'password');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');
}



/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         '!#4nOxH+vmI!S:tq<(V1Rdo#RYG]yA7X$TGP1{ao>>^I$pUr<zLmxK<_gD};C0P5');
 define('SECURE_AUTH_KEY',  '0+IZrXEkmeY*2:B!2S8c4*}iR!4Nw,IJ-pao0]k-ms]N66H5PL:-]s(XN[3Pd/l.');
 define('LOGGED_IN_KEY',    'm1tNl65o]<JYm!*O6Ce}d5 CO@9t&CPW8FeZtL+eA0-ijZ.w9{EPdudOIlKE,sp8');
 define('NONCE_KEY',        'o[2c9{<Dd*!Dmip!sRxGy ZgW;?au18FCh^j.#VD=us`g|q$P>C?mByN2:tqkXV}');
 define('AUTH_SALT',        'i9.+(K_(,}$E@1~eI00,d7l8jz+mjN.qOG0p8WdU)M<<v?xR}i@4U#kL%F0Pl+w,');
 define('SECURE_AUTH_SALT', '.M;5H-XeA*.^u#d!yhk@0c[KiYZ*Gy%K)cpYw/.0apn8+45WqytRq|KXyAj.(|mm');
 define('LOGGED_IN_SALT',   '@^KxQaLgS>^O@n(b*C,zdTo41z86lbhN%Fl-#6*bOx}K.W6=)U]quc6`Hb|Tn&_8');
 define('NONCE_SALT',       '?Jb{y|PX8&+HpZb-d|C3$8BL+Y)?B6ZW>PDD7$*_WmH-icM*L]bpr8+i)P$[7|B4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
