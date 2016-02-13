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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'egzobeatbox');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/Alex/Documents/Site/start_project/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('AUTH_KEY',         'n/2Y$e#k}wJtXB>kII~|gs>PsLxBw sxLD89 (T_D}{lL9h~(<L<.eP]HTZ@<>R|');
define('SECURE_AUTH_KEY',  '&u5Qkl>jzeOFPlD$+P-Nb~oG&F8]r%_N>GV*|23bNsU|3ycNdkI5t;#Jru71b-<0');
define('LOGGED_IN_KEY',    '{[6M#axFc:gldZjL4L9F+uE+d6V0bKh~Ec9{Q+&~PzE=6vr+2~>CAOmEkQ)16|rb');
define('NONCE_KEY',        '~i|M46R|OFW2$+BEJ+i:yPlw`D/;wDi B~c:mr{T!5{c,|RFZ0:$1,busli3H[_-');
define('AUTH_SALT',        '}OxjCKh@:DR`!^UO7y->}^f)0N_d0 ui%*AY?3g[}#Q2xcmT+AX.*Ws?IbuP.u&0');
define('SECURE_AUTH_SALT', 'R--C-K^zp 6#`nB|zS-4d7r`(8|PA~fsH3laSIQa=-8$_)>+qM$|!VH+HFY:Z?Sg');
define('LOGGED_IN_SALT',   'y5fWd-0bdGG@fKl3_%(kH!5FccaMd-Fbl+U0`2-9@),*J(.DxwhiCqTXj<synO4c');
define('NONCE_SALT',       '0Mu]+uzBrE{y>f#vqOvrhk4nhV,VjNEj[U=wXmmxo>H?${Xl+JLr`v-En7dn&LPm');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
