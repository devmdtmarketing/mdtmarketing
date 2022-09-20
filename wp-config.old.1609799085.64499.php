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
define('DB_NAME', 'mdtdirect_com');

/** MySQL database username */
define('DB_USER', 'mdtdirectcom1');

/** MySQL database password */
define('DB_PASSWORD', 'Cik8dGQg');

/** MySQL hostname */
define('DB_HOST', 'mysql.mdtdirect.com');

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
define('AUTH_KEY',         'pWLK7hK~O6DS;/I&qfQyB;mbCOT?`MOD3+GOsA6/cc***Glneb3cX`N)VB3bmU%Z');
define('SECURE_AUTH_KEY',  '7eW$amk"s3fb3_r$|klXFlf*/q@ndhtKVVntiL^8XDZNMGAq+kbEsYa|5bn/%Zpx');
define('LOGGED_IN_KEY',    '+z;Y$F8:YhPhmVxN##tMfHV8VpvAHfD1yz1!dap@n`0O%zlen~LIqI16qp$Jcv?0');
define('NONCE_KEY',        'ePgOGNYJNYI/%*4cu#%xH&Pds;`3xx3Mp#nKQh@#*KEau!jN7?*uKvSU60_tg15q');
define('AUTH_SALT',        '%"taY$vJe#w?Yk(!dN6e`B)/vpmIEU3w(;XBGUUUlyqZ$jM7gsvAbYf*!63*jCN:');
define('SECURE_AUTH_SALT', '?ThcJl?)J7rMTQOWKBqjUhisCOGn8BjU80_y`En*;"0;_/y?J2ghqCBZ0D?^Z%?q');
define('LOGGED_IN_SALT',   'HP;@?U9H4R@8tl!7u)Scc#:u|*yGe?msg04mggWdQ@cG!Fp#g"`cb#^m^2+WJ%J:');
define('NONCE_SALT',       '3(@nZOtyJGJfTQDhK*6cOcEDCl:^KG0jYfl:bsPA`x"$VjV9S)GnI*6Nmu$L_O3a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

define('WP_CACHE', true);
define('DISALLOW_FILE_EDIT', false);
define('DISALLOW_FILE_MODS', false);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

